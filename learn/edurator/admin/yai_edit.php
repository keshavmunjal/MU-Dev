<?php
/**
 * YouTube Auto Importer for phpMelody 1.7.x and higher
 * This is NOT a free plugin. You are not allowed to
 * give away this plugin or to sell it to anyone
 * without permission of melodymods.com
 *
 * To this mod the Melodymods.com "Open source licence for paid plugins" applies
 * See http://melodymods.com/support/licences.htm#opensource
 *
 * @author Dirk-jan Mollema - Melodymods.com
 * @copyright All rights reserved - February 2013
 * @package com.melodymods.youtube_autoimport
 * @version 1.0
 *
 * Contact: dirkjan@sanoweb.nl
 */
$showm = '2';
$load_chzn_drop = 1;

include ('header.php');
if (! $modframework->is_loaded ( 'mod_youtube_autoimport' ))
	exit ( 'Mod YouTube Autoimport not loaded. Cannot access this page' );
$mod_yai = new mod_youtube_autoimport ( true );
if (! is_admin ())
	restricted_access ( true );
$displayerror = '';
if (isset ( $_POST ['sid'] )) {
	// Save?
	$_GET ['sid'] = $_POST ['sid'];
	if ($_POST ['sid'] != '' && $_POST ['sid'] != 0) {
		$res = $mod_yai->editSource ( 'edit' );
		$src = $mod_yai->fetchSource ( $_GET ['sid'] );
		$cats = explode ( ',', $src->categories );
	} else {
		$res = $mod_yai->editSource ( 'add' );
		if (! $res) {
			$src = new channel_source ();
			$cats = $_POST ['category'];
			foreach ( $_POST as $key => $val ) {
				$src->{$key} = $val;
			}
		}else{
			$src = $mod_yai->fetchSource ( $_GET ['sid'] );
		}
	}
	if ($res === false) {
		$displayerror = $mod_yai->error;
	}else{
		$displaysuccess = 'Saved';
	}
} else {
	if (isset ( $_GET ['do'], $_GET ['sid'] ) && $_GET ['do'] == 'edit') {
		$src = $mod_yai->fetchSource ( $_GET ['sid'] );
		if ($src === false) {
			exit ( 'This source does not exist <a href="youtube_autoimporter.php">Back</a>' );
		}
		$cats = explode ( ',', $src->categories );
	} else {
		$src = new channel_source ();
		$cats = array ();
	}
}

?>
<div id="adminPrimary">
	<div class="content" id="content">
		<h2>
	<?php
	if ($src->id == null) {
		echo 'New source';
	} else {
		echo 'Edit source';
	}
	?></h2>
	<?php if($displayerror!='') echo '<div class="alert alert-error">'.$displayerror.'</div>';
	if(isset($displaysuccess)) echo '<div class="alert alert-success">'.$displaysuccess.'</div>';?>
		<form method="post" enctype="multipart/form-data" id="nlform"
			action="yai_edit.php" name="addvideo_form_step2">
			<input type="hidden" name="sid" id="sid"
				value="<?php echo (int) $src->id; ?>" />
			<input type="hidden" name="oldchannel" value="<?php echo $src->channel; ?>" />
			<input type="hidden" name="channeltype" value="<?php echo $src->channeltype; ?>" />
			<div class="container row-fluid" id="post-page">
				<div class="span9">
					<div class="widget border-radius4 shadow-div">
						<h4>Channel name/Feed url</h4>
						<div class="control-group">
							<input name="channel" type="text" id=""
								value="<?php echo $src->channel; ?>" style="width: 99%;" />
							<div class="controls">
								<small>Supported:<br /> - User channels as URL
									http://www.youtube.com/user/SanoWebdevelopment/videos or a
									YouTube channel name such as "SanoWebdevelopment"<br />- Playlist urls https://www.youtube.com/playlist?list=PL8X5kwdbTee-4jnb-cAXLBwYPlrx_bayM<br />- Feed urls https://gdata.youtube.com/feeds/api/seasons/rsVTXb3mEAM/episodes</small>
							</div>
						</div>
					</div>


					<div class="widget border-radius4 shadow-div">
						<h4>Filtering</h4>
						<div class="control-group">
							Filter by video name. Leave this field empty to import all
							videos. Wildcards (*) are allowed. <input name="filter"
								type="text" id="" value="<?php echo $src->filter; ?>"
								style="width: 99%;" />
							<div class="controls">
								<small>Example: *coldplay*</small>
							</div>
						</div>
						<div class="control-group">
							Minimum video length (in seconds): <input name="minlength"
								type="text" size="5"
								value="<?php echo (int) $src->minlength; ?>" /> <small>0 will
								import videos of any length</small>
							<div class="controls"></div>

						</div>
					</div>
				</div>
				<!-- .span0 -->
				<div class="span3">
					<div class="widget border-radius4 shadow-div">
						<h4>Category</h4>
						Import to category/categories
						<div class="control-group">
							<div class="controls">
            <?php
												$categories_dropdown_options = array ('attr_name' => 'category[]', 'attr_id' => 'main_select_category must', 'attr_class' => 'category_dropdown span12', 'select_all_option' => false, 'spacer' => '&mdash;', 'selected' => $cats, 'other_attr' => 'multiple="multiple"' );
												echo categories_dropdown ( $categories_dropdown_options );
												?>
            </div>
						</div>
					</div>

					<div class="widget border-radius4 shadow-div">
						<h4>Video description</h4>
						<div class="control-group">
							<div class="controls">
								<select name="copydesc">
									<option value="copy"
										<?php if($src->copydesc=='copy' || $src->copydesc===null) echo 'selected="selected"';?>>Copy
										description from YouTube</option>
									<option value="blank"
										<?php if($src->copydesc=='blank') echo 'selected="selected"';?>>Leave
										description empty</option>
									<option value="title"
										<?php if($src->copydesc=='title' ) echo 'selected="selected"';?>>Use
										the video title as description</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<label><input type="checkbox" name="removelinks" value="1"
									<?php if($src->removelinks!=null && $src->removelinks==1) echo 'checked="checked"';?> />
									Remove URLs from the YouTube description</label>
							</div>
						</div>
					</div>

					<div class="widget border-radius4 shadow-div">
						<h4>Settings</h4>
						<div class="control-group">
							<div class="controls">
								<label><input type="radio" name="enabled" value="1"
									<?php if($src->enabled==null || $src->enabled==1) echo 'checked="checked"';?> />
									Enable Source</label> <label><input type="radio" name="enabled"
									value="0"
									<?php if($src->enabled!=null && $src->enabled==0) echo 'checked="checked"';?> />
									Disable Source</label>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								Check every <select name="checkfrequency">
							<?php
							$opts = array (5, 10, 15, 20, 30, 45, 60, 90, 120, 180, 240 );
							if ($src->checkfrequency == null)
								$src->checkfrequency = 10;
							foreach ( $opts as $val ) {
								echo '<option value="' . $val . '" ';
								if ($src->checkfrequency == $val)
									echo 'selected="selected"';
								echo '>';
								if ($val > 60)
									echo ($val / 60) . ' hours';
								if ($val == 60)
									echo '1 hour';
								if ($val < 60)
									echo $val . ' minutes';
								echo '</option>';
							}
							?>
							</select>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								Source priority <input type="text" name="priority"
									value="<?php echo (int) $src->priority; ?>" /> <i
									data-content="You only need to change this when you have multiple sources for the same YouTube channel. For example you can have one source that posts all trailer videos from a channel and give this source priority 10, and have another source that imports all the other videos and give this priority 5. If a video matches multiple sources it will be imported by the source with the highest priority."
									data-animation="true" data-trigger="hover" rel="popover"
									class="icon-info-sign" data-original-title="Info"></i>
							</div>
						</div>
					</div>
					<div class="widget border-radius4 shadow-div">
						<h4>Social Sharing</h4>
						<div class="control-group">
							<div class="controls">
								<label><input type="checkbox" name="post_tw" value="1"
								<?php if(!$modframework->is_loaded('mod_twitter_share')) echo 'disabled="disabled"';?>
									<?php if($src->post_tw!=null && $src->post_tw==1) echo 'checked="checked"';?> />
									Share imported videos on Twitter <?php if(!$modframework->is_loaded('mod_twitter_share')) echo '<i
									data-content="This requires the <a href=\'https://melodymods.com/plugins/php-melody-twitter-autoshare-plugin.htm?utm_source=mod_youtube_autoimport&utm_medium=relatedplugins&utm_campaign=mod_youtube_autoimport\'>Twitter Autoshare Plugin</a>"
									data-animation="true" data-html="true" data-trigger="click" rel="popover" data-placement="top"
									class="icon-info-sign" data-original-title="Info"></i>';?></label>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<label><input type="checkbox" name="post_fb" value="1"
								<?php if(!$modframework->is_loaded('mod_facebook_share')) echo 'disabled="disabled"';?>
									<?php if($src->post_fb!=null && $src->post_fb==1) echo 'checked="checked"';?> />
									Share imported videos on Facebook <?php if(!$modframework->is_loaded('mod_facebook_share')) echo '<i
									data-content="This requires the <a href=\'https://melodymods.com/plugins/php-melody-facebook-autoshare-plugin.htm?utm_source=mod_youtube_autoimport&utm_medium=relatedplugins&utm_campaign=mod_youtube_autoimport\'>Facebook Autoshare Plugin</a>"
									data-animation="true" data-html="true" data-trigger="click" rel="popover" data-placement="top"
									class="icon-info-sign" data-original-title="Info"></i>';?></label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="stack-controls" class="list-controls">
				<div class="pull-left"></div>
				<input type="submit" name="submit" value="Submit"
					class="btn btn-small btn-success" />
			</div>
		</form>
	</div>
   <?php require_once('footer.php');?>