<?php /* Smarty version 2.6.20, created on 2015-03-13 14:10:04
         compiled from video-category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'video-category.tpl', 103, false),)), $this); ?>
<ul class="breadcrumb" style="padding-top: 6%;margin-bottom: -140px;font-size: 13px;background: none;border-bottom: none;color: #cecece;padding-left: 17%;">
                  <li ><a href="https://meetuniv.com/">Home</a> <span class="divider"><i class="icon-arrow-right" style="opacity: 0.2;"></i></span></li>
					<li ><a href="https://meetuniv.com/learn/edurator/">Learn</a> <span class="divider"><i class="icon-arrow-right" style="opacity: 0.2;"></i></span></li>
					<li class="active"><?php echo $this->_tpl_vars['gv_category_name']; ?>
</li>
					
</ul>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('p' => 'general','rss' => "video-category")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<h1 class="entry-title compact" style="margin-left: 240px;margin-top: 65px;font-size: 35px;"><?php echo $this->_tpl_vars['gv_category_name']; ?>
</h1>
<div class="video-banner-row" style="margin-top: 16px;">

        <div class="left video-banner span7">
            <!-- <img src="https://meetuniv.com/assets/images/univ-banner2.jpg" /> -->
           
            <div id="v1">
                <?php if ($this->_tpl_vars['display_preroll_ad'] == true): ?>
					<div id="preroll_placeholder">
						<div class="preroll_countdown">
							<?php echo $this->_tpl_vars['lang']['preroll_ads_timeleft']; ?>
 <span class="preroll_timeleft"><?php echo $this->_tpl_vars['preroll_ad_data']['timeleft_start']; ?>
</span>
						</div>
						<?php echo $this->_tpl_vars['preroll_ad_data']['code']; ?>

					</div>
				<?php else: ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "player.tpl", 'smarty_include_vars' => array('page' => 'index')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
            </div>
            <!--<div id="v2" >
               <img src="https://meetuniv.com/assets/images/video2.jpg" />
            </div>
            <div id="v3">
            <img src="https://meetuniv.com/assets/images/video3.jpg" />  
			
            </div>-->
            
        </div>
		<div class="pull-left right-text">
			<h3 style="font-size: 15px;line-height: 20px;"> <?php echo $this->_tpl_vars['lang']['featured']; ?>
: <?php echo $this->_tpl_vars['voth_title']; ?>
</h3>
			<p style="overflow-y: scroll;width: 337px;padding-right: 10px;height: 170px;"> <?php echo $this->_tpl_vars['voth_description']; ?>
</p>
			<ul style="list-style: none;margin-left: 0;margin-top: 28px;">
				<li style="color:#06696f;font-weight:bold;">MORE CATEGORIES</li>
				<?php $_from = $this->_tpl_vars['subCat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['scat']):
?>
					<?php $_from = $this->_tpl_vars['scat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['cat']):
?>
							<a href="<?php echo @_URL; ?>
/browse-<?php echo $this->_tpl_vars['cat']['name']; ?>
-videos-1-date.html<?php echo $this->_tpl_vars['cat']['id']; ?>
" class="label label-default" style="font-size:12px;color:white;background-color: #08c;"><?php echo $this->_tpl_vars['cat']['name']; ?>
</a>
					<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
				<!--<li><a href="#"><img src="<?php echo @_URL; ?>
/templates/default/images/arrow-bullet.jpg">Watch Featured Videos</a></li>
				<li><a href="#"><img src="<?php echo @_URL; ?>
/templates/default/images/arrow.jpg">Watch More Videos</a></li>-->
				<!--<li><a href="#"><img src="<?php echo @_URL; ?>
/templates/default/images/arrow.jpg">More Lorem & Ipsum</a></li>-->
			</ul>
		</div>
          <!--<div class="video-ielts">
				<ul>
					<li class="home "><a href="javascript:void(0);" onclick="showv1()" class="choosed">Lorem</a></li>
					<li class="about"><a href="javascript:void(0);" onclick="showv2()">Lorem</a></li>
					<li><a href="javascript:void(0);" onclick="showv3()">Lorem</a></li>
				</ul>
          </div>-->
          
        </div>
        
        <!-- contents starts-->
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="advertisement">
						
							<div class="span4" style="border-right: 1px solid #ccc;margin-left: 12px; height: 172px;">
								<div class="first">
									<h3 style="clear:both; overflow:hidden; margin-bottom:16px;">SHARE THIS !</h3>
									<div style="margin-top: 19px;clear:both">
										<!--<div class="in"><script src="//platform.linkedin.com/in.js" type="text/javascript">
										  lang: en_US
										</script>
										<script type="IN/Share" data-counter="right"></script>
										</div>-->
										<div class="facebook"><!--<p style="margin:0">16</p>-->
										<span><iframe src="https://www.facebook.com/plugins/like.php?app_id=527890870664757&amp;href=https://www.facebook.com/meetuniv/&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=35" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:180px; height:35px;" allowTransparency="true"></iframe></span>
										</div>
									</div>
								
								
								</div>
							</div>
							
							<div class="span4" style="border-right: 1px solid #ccc;/*margin-left: 12px;*/ margin: auto;">
								<div class="middle" style="width:270px;">
								<h3><?php echo $this->_tpl_vars['articles'][106]['title']; ?>
</h3>
								
								<a href="https://meetuniv.com/learn/blog/read-Gear-up!-A-Step-further-towards-your-dream-study-102.html">
								<p style="padding-right: 5%;"><?php echo $this->_tpl_vars['article_Content']; ?>

								<?php echo $this->_tpl_vars['articles'][106]['excerpt']; ?>

								</p></a>
								<!--<p style="clear:both;">Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
								</p>-->
								</div>
							</div>
							
							<div class="span4" style="border-right: 0px solid #ccc;margin-left: 12px;">
								<div class="middle">
								<h3>Articles</h3>
							<ul class="advert-ul" style="margin-left: 0px;">
								<?php $_from = $this->_tpl_vars['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['art']):
?>
									<li></li>
									<li><a href="<?php echo @_URLARTICLE; ?>
/read-<?php echo ((is_array($_tmp=$this->_tpl_vars['art']['title'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '-') : smarty_modifier_replace($_tmp, ' ', '-')); ?>
-<?php echo $this->_tpl_vars['art']['id']; ?>
.html"><?php echo $this->_tpl_vars['art']['title']; ?>
</a></li>
								<?php endforeach; endif; unset($_from); ?>
									<!--<li>Article2</li>
									<li>Article3</li>-->
								</ul>
								</div>
							</div>
						
					
					</div>
					
				</div>
		   </div>
		   
		   <div class="row">
				<div class="span12">
				
					<div class="sample-videos">
						<!--<h3>Watch Free Sample Videos</h3>-->
						<!--tabs start-->
				<section id="tabs">
				
        <div class="columns">
			<!--<ul id="tab" class="nav nav-tabs">
				<li class="active"><a href="#math" data-toggle="tab">Math</a></li>
				<li><a href="#sceince" data-toggle="tab">Science</a></li>
				<li><a href="#english" data-toggle="tab">English</a></li>
				<li><a href="#option" data-toggle="tab">Option</a></li>
				<li id="more"><a href="#more" data-toggle="tab">More<img src="images/more-arrow.png"></a>
					<ul  class="level2">
						<li id="level2"><a href="#"> level2 link1</a>
							<ul class="level3">
								<li><a href="link1">level3 link1</a> </li>
								<li><a href="link1">level3 link1</a> </li>
								<li><a href="link1">level3 link1</a> </li>
								<li><a href="link1">level3 link1</a> </li>
							</ul>
						</li>
						<li><a href="#">level2 link2</a></li>
						<li><a href="#">level2 link3</a></li>
						<li><a href="#">level2 link4</a></li>
					</ul>
				</li>
			</ul>-->
			<div id="myTabContent" class="tab-content ">
				<div class="tab-pane active " id="math">
				 <!-- image gallery start-->
				 <div class="img-gallery">
						<ul class="pm-ul-browse-videos thumbnails" id="pm-grid">
			<?php $_from = $this->_tpl_vars['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['video_data']):
?>
			  <li>
				<div class="pm-li-video">
				    <span class="pm-video-thumb pm-thumb-145 pm-thumb border-radius2">
				    <span class="pm-video-li-thumb-info">
                    <?php if ($this->_tpl_vars['video_data']['yt_length'] != 0): ?><span class="pm-label-duration border-radius3 opac7"><?php echo $this->_tpl_vars['video_data']['duration']; ?>
</span><?php endif; ?>
					<?php if ($this->_tpl_vars['video_data']['mark_new']): ?><span class="label label-new"><?php echo $this->_tpl_vars['lang']['_new']; ?>
</span><?php endif; ?>
					<?php if ($this->_tpl_vars['video_data']['mark_popular']): ?><span class="label label-pop"><?php echo $this->_tpl_vars['lang']['_popular']; ?>
</span><?php endif; ?>
				    </span>
					
					
				    <a href="<?php echo $this->_tpl_vars['video_data']['video_href']; ?>
" class="pm-thumb-fix pm-thumb-145"><span class="pm-thumb-fix-clip"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['video_data']['thumb_img_url'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'http', 'https') : smarty_modifier_replace($_tmp, 'http', 'https')); ?>
" alt="<?php echo $this->_tpl_vars['video_data']['attr_alt']; ?>
" width="145"><span class="vertical-align"></span></span></a>
				    </span>
				    
				    <h3 dir="ltr"><a href="<?php echo $this->_tpl_vars['video_data']['video_href']; ?>
" class="pm-title-link " title="<?php echo $this->_tpl_vars['video_data']['attr_alt']; ?>
"><?php echo $this->_tpl_vars['video_data']['video_title']; ?>
</a></h3>
				    <div class="pm-video-attr">
				        <span class="pm-video-attr-author"><?php echo $this->_tpl_vars['lang']['articles_by']; ?>
 <a href="<?php echo $this->_tpl_vars['video_data']['author_profile_href']; ?>
"><?php echo $this->_tpl_vars['video_data']['author_name']; ?>
</a></span>
				        <span class="pm-video-attr-since"><small><?php echo $this->_tpl_vars['lang']['added']; ?>
 <time datetime="<?php echo $this->_tpl_vars['video_data']['html5_datetime']; ?>
" title="<?php echo $this->_tpl_vars['video_data']['full_datetime']; ?>
"><?php echo $this->_tpl_vars['video_data']['time_since_added']; ?>
 <?php echo $this->_tpl_vars['lang']['ago']; ?>
</time></small></span>
				        <span class="pm-video-attr-numbers"><small><?php echo $this->_tpl_vars['video_data']['views_compact']; ?>
 <?php echo $this->_tpl_vars['lang']['views']; ?>
 / <?php echo $this->_tpl_vars['video_data']['likes_compact']; ?>
 <?php echo $this->_tpl_vars['lang']['_likes']; ?>
</small></span>
					</div>
				    <p class="pm-video-attr-desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['video_data']['excerpt'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'http', 'https') : smarty_modifier_replace($_tmp, 'http', 'https')); ?>
</p>
					
					<?php if ($this->_tpl_vars['video_data']['featured']): ?>
				    <span class="pm-video-li-info">
				        <span class="label label-featured"><?php echo $this->_tpl_vars['lang']['_feat']; ?>
</span>
				    </span>
					<?php endif; ?>
				</div>
			  </li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
						</div>
				 <!-- image gallery ends -->
				</div>
				<?php if (is_array ( $this->_tpl_vars['pagination'] )): ?>
			<div class="pagination pagination-centered">
              <ul style="margin-left: 90px;">
                <?php $_from = $this->_tpl_vars['pagination']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['pagination_data']):
?>
					<li<?php $_from = $this->_tpl_vars['pagination_data']['li']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attr'] => $this->_tpl_vars['attr_val']):
?> <?php echo $this->_tpl_vars['attr']; ?>
="<?php echo $this->_tpl_vars['attr_val']; ?>
"<?php endforeach; endif; unset($_from); ?>>
						<a<?php $_from = $this->_tpl_vars['pagination_data']['a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attr'] => $this->_tpl_vars['attr_val']):
?> <?php echo $this->_tpl_vars['attr']; ?>
="<?php echo $this->_tpl_vars['attr_val']; ?>
"<?php endforeach; endif; unset($_from); ?>><?php echo $this->_tpl_vars['pagination_data']['text']; ?>
</a>
					</li>
				<?php endforeach; endif; unset($_from); ?>
              </ul>
            </div>
			<?php endif; ?>
			</div>
        
     
    </section>
				<!-- tabs end-->
										
						
					</div>
					
				</div>
		   </div>
	   </div>
        <!-- contents ends ->
		
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 