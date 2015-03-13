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

include('header.php');
if(!$modframework->is_loaded('mod_youtube_autoimport')) exit('Mod YouTube Autoimport not loaded. Cannot access this page');
if(!is_admin()) restricted_access(true);
$mod_yai = new mod_youtube_autoimport();
if(isset($_GET['delete']) && is_numeric($_GET['delete'])){
	$mod_yai->deleteSource($_GET['delete']);
}
?>
<script language="javascript">
function makeSure(){
	return confirm('Are you sure you want to delete this source? This cannot be undone.');
}
</script>
<div id="adminPrimary">
	<div class="content" id="content">
		<h2>
			YouTube channel sources <a href="yai_edit.php?do=new"
				class="btn btn-mini btn-success"><i class="icon-plus"></i> Add a
				channel</a>
		</h2>

		<div class="tablename">
			<h6>Sources</h6>
		</div>
		<table class="table table-striped table-bordered pm-tables">
			<thead>
				<tr>
					<th>ID</th>
					<th>Source</th>
					<th>Filter</th>
					<th>Status</th>
					<th>Last Checked</th>
					<th>Action</th>


				<tr>

			</thead>
			<tbody>
		<?php
		$sources = $mod_yai->fetchList ();
		foreach ( $sources as $src ) {
			$actions = '<a href="yai_edit.php?do=edit&sid=' . $src->id . '" class="btn btn-mini btn-link" rel="tooltip" title="Edit source"><i class="icon-pencil"></i></a>';

			$actions .= ' <a href="youtube_autoimporter.php?delete=' . $src->id . '" onclick="makeSure();" ';
			$actions .= 'class="btn btn-mini btn-link" rel="tooltip" title="Delete source"><i class="icon-remove"></i></a>';
			if ($src->filtertype == 'all') {
				$filter = 'All videos';
			} else {
				$filter = $src->filter;
			}
			$src->channel = $src->channeltype.': '.$src->channel;
			printf ( '<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>',$src->id,$src->channel,$filter,($src->isEnabled()? 'Enabled':'Disabled'),(($src->lastchecked == 0)? 'Never':date('M d, Y H:i', $src->lastchecked)),$actions);
		}
		?>
		</tbody>
		</table>
	</div>
</div>
<?php  require_once('footer.php')?>