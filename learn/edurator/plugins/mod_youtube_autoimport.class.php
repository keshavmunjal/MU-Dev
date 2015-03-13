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
 * @version 1.2.0
 *
 * Contact: dirkjan@sanoweb.nl
 */
class mod_youtube_autoimport extends mm_plugin {
	protected $sqlinstall = array("INSERT INTO mm_plugins (plugin,plugin_name,active,priority,backend_only) VALUES ('mod_youtube_autoimport','YouTube Autoimport',1,10,1)",
			"INSERT INTO `mm_settings` (`plugin` ,`setting` ,`value` ,`editable` ,`description` ,`valid`) VALUES ('mod_youtube_autoimport','menu2','YouTube AutoImport|youtube_autoimporter.php','0','','string'),('mod_youtube_autoimport','version','110','0','','string'),('mod_youtube_autoimport','apikey','','1','Your YouTube API key if you have one. Use this if you are getting rate limit errors','string')",
			"CREATE TABLE IF NOT EXISTS `mm_youtubesources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel` varchar(200) NOT NULL,
  `channeltype` ENUM( 'channel', 'playlist', 'feed' ) NOT NULL DEFAULT 'channel',
  `filtertype` enum('all','pattern','regex') NOT NULL,
  `filter` varchar(100) NOT NULL,
  `minlength` int(11) NOT NULL DEFAULT '0',
  `lastchecked` int(11) NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `categories` varchar(50) NOT NULL,
  `copydesc` enum('blank','copy','title') NOT NULL DEFAULT 'copy',
  `removelinks` tinyint(1) NOT NULL DEFAULT '0',
  `checkfrequency` int(5) NOT NULL DEFAULT '5',
  `post_tw` TINYINT(1) NOT NULL DEFAULT 0,
  `post_fb` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;"
	);
	public $ignoresqlerrors = array(1060,1062);
	public $licence = 'mm_os';
	public $install_steps = 1;
	public $error = '';
	const plugin_version = 120;
	public function __construct($autorun=true){
		$this->load_config();
		if(!isset($this->config['version'])){
			$this->run_update(100);
		}elseif(self::plugin_version > (int) $this->config['version']){
			$this->run_update($this->config['version']);
		}
		return true;
	}
	public function install($step,&$error){
		if($this->install_sql($error)){
			$error = '</div><div class="info_msg">To complete the installation, please make sure you add a cron job in your cpanel with the following command:<br /><strong>php -f '.ABSPATH.'admin/importcron.php &gt;/dev/null 2&gt;&amp;1</strong><br />We recommend you execute this cronjob every 5 minutes for the best result.';
			return true;
		}
		return false;
	}
	public function run_update($oldversion){
		switch ((int) $oldversion){
			case 100:
				mysql_query("INSERT IGNORE INTO `mm_settings` (`plugin` ,`setting` ,`value` ,`editable` ,`description` ,`valid`) VALUES ('mod_youtube_autoimport','version','120','0','','string') ON DUPLICATE KEY UPDATE value = '120'");
				mysql_query("ALTER TABLE `mm_youtubesources` ADD `channeltype` ENUM( 'channel', 'playlist', 'feed' ) NOT NULL DEFAULT 'channel' AFTER `channel`");
				mysql_query("ALTER TABLE `mm_youtubesources` ADD `post_tw` TINYINT(1) NOT NULL DEFAULT 0");
				mysql_query("ALTER TABLE `mm_youtubesources` ADD `post_fb` TINYINT(1) NOT NULL DEFAULT 0");
				mysql_query("ALTER TABLE `mm_youtubesources` CHANGE `channel` `channel` varchar(200) NOT NULL");
			break;
			case 110:
				mysql_query("UPDATE mm_settings SET `value` = 120 WHERE `plugin` = 'mod_youtube_autoimport' AND `setting` = 'version'");
			break;
		}
	}
	//Manage functions
	public function fetchList(){
		$sql = 'SELECT * FROM mm_youtubesources ORDER BY enabled DESC, priority DESC';
		$res = mysql_query($sql);
		$out = array();
		while($obj = mysql_fetch_object($res,'channel_source')){
			$out[] = $obj;
		}
		return $out;
	}
	public function fetchSource($id){
		$sql = 'SELECT * FROM mm_youtubesources WHERE id = '.(int) $id.' LIMIT 1';
		$res = mysql_query($sql);
		if(mysql_num_rows($res)==0) return false;
		return mysql_fetch_object($res,'channel_source');
	}
	public function deleteSource($id){
		$sql = 'DELETE FROM mm_youtubesources WHERE id = '.(int) $id.' LIMIT 1';
		$res = mysql_query($sql);
	}
	public function findChannel($input){
		//Channel url
		if(preg_match('/youtube\.com\/user\/([a-z0-9_\-]+)\/?/i',$input,$matches)){
			return array('channel',$matches[1]);
		}
		//Playlist url
		if(preg_match('/youtube\.com\/playlist\?list=(PL)?([a-z0-9_\-]+)/i',$input,$matches)){
			return array('playlist',$matches[2]);
		}
		//RSS/gdata url (playlist)
		if(preg_match('/youtube\.com\/feeds\/api\/playlists\/(PL)?([a-z0-9_\-]+)/i',$input,$matches)){
			return array('playlist',$matches[2]);
		}
		//RSS/gdata url (channel)
		if(preg_match('/youtube\.com\/feeds\/api\/users\/([a-z0-9_\-]+)\//i',$input,$matches)){
			return array('channel',$matches[1]);
		}
		//Other GData urls (feed)
		if(preg_match('/youtube\.com\/feeds\/api\/([a-z0-9_\-\/]+)/i',$input,$matches)){
			return array('feed',$matches[1]);
		}
		//Channel name
		if(preg_match('/^[a-z0-9_\-]+$/i',$input)){
			return array('channel',$input);
		}
		//Unknown?
		return false;
	}
	public function checkFeed($feed){
		$data = $this->getGData('feeds/api/'.$feed);
		if($data === false || $data === null || !is_array($data) || !isset($data['version'])){
			return false;
		}
		return true;
	}
	public function getGData($path,$p=array()){
		$baseurl = 'https://gdata.youtube.com/';
		$p['alt'] = 'json';
		$p['v'] = 2;
		if(isset($this->config['apikey']) && $this->config['apikey']!='') $p['key'] = $this->config['apikey'];
		$url = $baseurl.$path."?".http_build_query($p);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if (defined('CURLOPT_IPRESOLVE') && defined('CURL_IPRESOLVE_V4')) {
			curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
		}
		$out = curl_exec($ch);
		$error = curl_error($ch);
		if($error != ''){
			$this->error = $error;
			return false;
		}
		return json_decode($out,true);
	}
	public function editSource($action='add'){
		if(!isset($_POST['channel']) || $_POST['channel'] ==''){
			$this->error = 'Source URL cannot be empty!';
			return false;
		}
		if($action == 'add' || $_POST['channel'] != $_POST['oldchannel']){
			$channeldata = $this->findChannel($_POST['channel']);
			if($channeldata === false){
				$this->error = 'Invalid Channel name or URL';
				return false;
			}
			list($channeltype,$channel) = $channeldata;
		}else{
			$channeltype = $_POST['channeltype'];
			$channel = $_POST['oldchannel'];
		}
		switch($channeltype){
			case 'channel':
				if(!$this->checkFeed('users/'.$channel.'/uploads')){
					$this->error = 'This channel does not exist or could not be found: '.$channel;
					return false;
				}
			break;
			case 'playlist':
				if(!$this->checkFeed('playlists/'.$channel)){
					$this->error = 'This playlist does not exist or could not be found: '.$channel;
					return false;
				}
			break;
			case 'feed':
				if(!$this->checkFeed($channel)){
					$this->error = 'This feed does not exist or could not be found: '.$channel;
					return false;
				}
			break;
			default:
				//This should never happen but because the type is ENUM we want to prevent DB errors so lets stop it here already
				$this->error = 'Unknown channel type detected. Could not save channel with type: '.$channeltype;
				return false;
			break;
		}
		if((int) $_POST['checkfrequency'] <= 5) $_POST['checkfrequency'] = 5;
		if((int) $_POST['minlength'] <= 0) $_POST['minlength'] = 0;
		$enabled = isset($_POST['enabled'])? (int) (bool) $_POST['enabled']:1;
		$removelinks = isset($_POST['removelinks'])? (int) (bool) $_POST['removelinks']:0;
		$validdescopts = array('copy','blank','title');
		$post_fb = (isset($_POST['post_fb']) && $_POST['post_fb'] == 1)? 1:0;
		$post_tw = (isset($_POST['post_tw']) && $_POST['post_tw'] == 1)? 1:0;
		if(in_array($_POST['copydesc'],$validdescopts)){
			$copydesc = $_POST['copydesc'];
		}else{
			$copydesc = 'copy';
		}
		if( is_array($_POST['category']) ){
			$categories = implode(",", $_POST['category']);
		}
		else
			$categories = $_POST['category'];
		if($categories == ''){
			$this->error = 'You must select at least 1 category to import to';
			return false;
		}
		if($_POST['filter'] == ''){
			$filtertype = 'all';
			$filter = '';
		}else{
			$filtertype = 'pattern';
			$filter = $_POST['filter'];
		}
		$priority = (int) $_POST['priority'];
		if($action == 'add'){
			$sql = "INSERT INTO mm_youtubesources (channel,channeltype,filtertype,filter,minlength,lastchecked,priority,enabled,categories,copydesc,removelinks,checkfrequency,post_fb,post_tw) VALUES (";
			$sql.= "'".secure_sql($channel)."','".secure_sql($channeltype)."','".$filtertype."','".secure_sql($filter)."',".(int) $_POST['minlength'].",0,".(int) $priority;
			$sql.= ",".$enabled.",'".secure_sql($categories)."','".$copydesc."',".$removelinks.','.(int) $_POST['checkfrequency'].','.(int) $post_fb.','.(int) $post_tw.')';
			if(mysql_query($sql)){
				$_GET['sid'] = mysql_insert_id();
				return true;
			}else{
				$this->error = mysql_error();
				return false;
			}
		}else{
			$sql = "UPDATE mm_youtubesources SET channel = '".secure_sql($channel)."',
					channeltype = '".secure_sql($channeltype)."',
					filtertype = '".$filtertype."',
					filter = '".secure_sql($filter)."',
					minlength = '".(int) $_POST['minlength']."',
					priority = ".$priority.",
					enabled = ".$enabled.",
					categories = '".secure_sql($categories)."',
					copydesc = '".$copydesc."',
					removelinks = ".$removelinks.',
					checkfrequency = '.(int) $_POST['checkfrequency'].',
					post_fb = '.(int) $post_fb.',
					post_tw = '.(int) $post_tw.'
					WHERE id = '.(int) $_POST['sid'].' LIMIT 1';
			$res = mysql_query($sql);
			if(!$res){
				$this->error = mysql_error();
				return false;
			}else{
				return true;
			}
		}
	}
	//Run functions
	/**
	 * Force CLI usage
	 * This doesn't seem to be working properly (some command line return "cgi" anyway), so we don't use it
	 */
	function forceCLI(){
		if (PHP_SAPI != 'cli')
			exit('Web access denied');
	}
	function getFeedURL($channel,$channeltype){
		switch($channeltype){
			case 'channel':
				return 'feeds/api/users/'.$channel.'/uploads';
				break;
			case 'playlist':
				return 'feeds/api/playlists/'.$channel;
				break;
			case 'feed':
				return 'feeds/api/'.$channel;
				break;
		}
	}
	function run(){
		$sql = 'SELECT count(*) FROM mm_youtubesources WHERE enabled = 1 AND lastchecked + checkfrequency*60 < '.time();
		$res = mysql_query($sql);
		list($num) = mysql_fetch_row($res);
		if($num == 0) return; //Nothing to do

		//Fetch profiles for checking
		$sql = 'SELECT * FROM mm_youtubesources WHERE channel IN(SELECT channel FROM mm_youtubesources WHERE enabled = 1 AND lastchecked + checkfrequency*60 < '.time().') AND enabled = 1 ORDER BY priority DESC';
		$res = mysql_query($sql);
		$sources = array();
		while($src = mysql_fetch_object($res,'channel_source')){
			if(isset($sources[strtolower($src->channel)]))
				$sources[strtolower($src->channel)][] = $src;
			else
				$sources[strtolower($src->channel)] = array($src);
			//Dont do this yet
			//$src->setUpdated();
		}
		foreach($sources as $channel => $filters){
			$channel = $filters[0]->channel; //This is case sensitive for user IDs
			$channeltype = $filters[0]->channeltype;
			$feed = $this->getFeedURL($channel,$channeltype);
			if($channeltype == 'playlist'){
				$params = array('orderby'=>'reversedPosition','max-results'=>50);
			}else{
				$params = array();
			}
			$cdata = $this->getGData($feed,$params);
			if($cdata == false || !is_array($cdata)){
				echo 'Could not get info for '.$channel.': '.$this->error."\n";
				continue;
			}
			if(count($cdata['feed']['entry'])==0){
				echo "Empty video list ".$channel."\n";
				continue;
			}
			$utime = $filters[0]->lastchecked;
			if($channeltype == 'playlist'){
				$pl_mtime = strtotime($cdata['feed']['updated']['$t']);
				if($pl_mtime < $utime){
					$this->setUpdated($filters);
					continue;
				} //Next channel
			}
			//Now check the videos
			foreach($cdata['feed']['entry'] as $entry){
				$vtime = max(strtotime($entry['published']['$t']),strtotime($entry['updated']['$t']));
				//if($vtime < $utime && $channeltype != 'playlist') continue 2; //Next channel
				if(!preg_match('/video:([a-z0-9\-_]+)/i',$entry['id']['$t'],$matches) && !preg_match('/v=([a-z0-9\-_]{3,})/i',$entry['link'][0]['href'],$matches) && !preg_match('/v=([a-z0-9\-_]{3,})/i',$entry['link'][1]['href'],$matches)){
					echo "Video ID not found: ".$entry['title']['$t']."\n";
					continue; //Next Video
				}
				$vid = $matches[1];
				if($this->videoExists($vid)){
					//echo 'Video exists'.$vid."\n";
					if($channeltype != 'playlist'){
						$this->setUpdated($filters);
						continue 2; //Next channel
					}else
						continue; //Next video
				}
				//echo 'Checking video '.$vid."\n";
				//Now check the source entries (filters)
				foreach($filters as $f){
					//check if filter accepts this video
					if(!$f->matches($entry))
						continue; //Next source
					//accepted, lets add
					$this->insertVideo($entry,$vid,$f);
					continue 2; //Next video
				}
				//echo 'No filters matched '.$vid."\n";
			}
			//Now set all sources that have this channel as updated
			$this->setUpdated($filters);
		}
	}
	/**
	 * Set update time on all sources of this chan
	 * @param unknown $filters
	 */
	public function setUpdated($sources){
		foreach($sources as $s){
			$s->setUpdated();
		}
	}
	public function insertVideo($video,$ytid,channel_source $src){
		global $modframework,$uniq_id;
		$video_details = array(	'uniq_id' => '',
				'video_title' => $video['title']['$t'],
				'description' => '',
				'artist' => $video['author'][0]['name']['$t'], //For 1.6
				'yt_id' => $ytid,
				'yt_length' => $video['media$group']['media$content'][0]['duration'],
				'category' => $src->categories,
				'submitted' => 'admin',
				'source_id' => 3,
				'language' => '',
				'age_verification' => '',
				'url_flv' => '',
				'yt_thumb' => str_replace('https','http',$video['media$group']['media$thumbnail'][3]['url'])  ,
				'mp4' => '',
				'direct' => 'http://www.youtube.com/watch?v='. $ytid,
				'tags' => '',
				'enable_comments' => 1, //Since 2.0
				'featured' => '0',
				'added' => '',
				'restricted' => 0
		);

		if($src->copydesc == 'title'){
			$video_details['description'] = $video_details['video_title'];
		}
		if($src->copydesc =='copy'){
			$desc = $video['media$group']['media$description']['$t'];
			if($src->removelinks == 1){
				$desc = preg_replace('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#','', $desc);
			}
			$video_details['description'] = strip_tags($desc);
			$video_details['description'] = str_replace('\n','<br />',$video_details['description']);
			$video_details['description'] = nl2br($video_details['description']);
		}
		$uniq_id = $this->getUID();
		$video_details['uniq_id'] = $uniq_id;
		$img = $this->download_thumb($video_details['yt_thumb'], _THUMBS_DIR_PATH, $uniq_id);
		//Social sharing
		$_POST['post_fb'] = $src->post_fb;
		$_POST['post_tw'] = $src->post_tw;
		$modframework->trigger_hook('admin_addvideo_step3_pre_video');
		$new_video = insert_new_video($video_details, $new_video_id);
		$modframework->trigger_hook('admin_addvideo_step3_post_video');
		$modframework->trigger_hook('admin_addvideo_step3_final');
		if($new_video){
			echo 'New video inserted. '.$uniq_id."\n";
		}else{
			echo 'Error inserting. '.$uniq_id."\n";
		}
	}
	function getUID(){
		$found = 0;
		$uniq_id = '';
		$i = 0;
		do
		{
			$found = 0;
			if(function_exists('microtime'))
				$str = microtime();
			else
				$str = time();
			$str = md5($str);
			$uniq_id = substr($str, 0, 9);
			if(count_entries('pm_videos', 'uniq_id', $uniq_id) > 0)
				$found = 1;
		} while($found === 1);
		return $uniq_id;
	}
	/**
	 * Checks whether the given YouTube video is already in the database
	 * @param string $ytid
	 * @return boolean
	 */
	function videoExists($ytid){
		$url = 'http://www.youtube.com/watch?v='. $ytid;
		$sql = "SELECT uniq_id FROM pm_videos_urls
			WHERE direct = '". $url ."'";
		$result = @mysql_query($sql);
		if(mysql_num_rows($result) > 0)
			return true;
		$sql = "SELECT uniq_id FROM pm_videos WHERE yt_id = '".$ytid."' AND source_id = 3";
		$result = @mysql_query($sql);
		if(mysql_num_rows($result) > 0)
			return true;
		return false;
	}
	/*
	 * This function id copied from the youtube source in PHP Melody to make our life easier.
	 */
	function download_thumb($thumbnail_link, $upload_path, $video_uniq_id) {

		$last_ch = substr($upload_path, strlen($upload_path)-1, strlen($upload_path));
		if($last_ch != "/")
			$upload_path .= "/";

		$ext = ".jpg";

		$thumb_name = $video_uniq_id . "-1" . $ext;

		if(is_file( $upload_path . $thumb_name )) {
			return FALSE;
		}

		$error = 0;

		if ( function_exists('curl_init') )
		{

			$ch = curl_init();
			$timeout = 0;
			curl_setopt ($ch, CURLOPT_URL, $thumbnail_link);
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

			// Getting binary data
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);

			$image = curl_exec($ch);
			curl_close($ch);

			//	create & save image;
			$img_res = @imagecreatefromstring($image);
			if($img_res === false)
				return FALSE;

			$img_width = imagesx($img_res);
			$img_height = imagesy($img_res);

			$resource = @imagecreatetruecolor($img_width, $img_height);

			if( function_exists('imageantialias'))
			{
				@imageantialias($resource, true);
			}

			@imagecopyresampled($resource, $img_res, 0, 0, 0, 0, $img_width, $img_height, $img_width, $img_height);
			@imagedestroy($img_res);

			switch($ext)
			{
				case ".gif":
					//GIF
					@imagegif($resource, $upload_path . $thumb_name);
					break;
				case ".jpg":
					//JPG
					@imagejpeg($resource, $upload_path . $thumb_name);
					break;
				case ".png":
					//PNG
					@imagepng($resource, $upload_path . $thumb_name);
					break;
			}
		}
		else if( ini_get('allow_url_fopen') == 1 )
		{
			// try copying it... if it fails, go to backup method.
			if(!copy($thumbnail_link, $upload_path . $thumb_name ))
			{
				//	create a new image
				list($img_width, $img_height, $img_type, $img_attr) = @getimagesize($thumbnail_link);

				$image = '';

				switch($img_type)
				{
					case 1:
						//GIF
						$image = imagecreatefromgif($thumbnail_link);
						$ext = ".gif";
						break;
					case 2:
						//JPG
						$image = imagecreatefromjpeg($thumbnail_link);
						$ext = ".jpg";
						break;
					case 3:
						//PNG
						$image = imagecreatefrompng($thumbnail_link);
						$ext = ".png";
						break;
				}

				$resource = @imagecreatetruecolor($img_width, $img_height);
				if( function_exists('imageantialias'))
				{
					@imageantialias($resource, true);
				}

				@imagecopyresampled($resource, $image, 0, 0, 0, 0, $img_width, $img_height, $img_width, $img_height);
				@imagedestroy($image);
			}

			$thumb_name = $video_uniq_id . "-1" . $ext;

			$img_type = 2;
			switch($img_type)
			{
				default:
				case 1:
					//GIF
					@imagegif($resource, $upload_path . $thumb_name);
					break;
				case 2:
					//JPG
					@imagejpeg($resource, $upload_path . $thumb_name);
					break;
				case 3:
					//PNG
					@imagepng($resource, $upload_path . $thumb_name);
					break;
			}

			if($resource === '')
				$error = 1;
		}

		return $upload_path . $thumb_name;
	}
	//Mod hooks
}
class channel_source {
	public $id;
	public $channel;
	public $channeltype;
	public $filtertype;
	public $filter;
	public $minlength;
	public $lastchecked;
	public $priority;
	public $enabled;
	public $categories;
	public $copydesc;
	public $removelinks;
	public $checkfrequency;
	public $post_tw;
	public $post_fb;
	private $filtercompiled;
	public function isEnabled(){
		return (bool) $this->enabled;
	}
	public function compilefilter(){
		if($this->filtertype=='regex'){
			$this->filtercompiled = $this->filter;
		}
		if($this->filtertype == 'pattern'){
			$f = preg_quote($this->filter);
			$f = str_replace('\*','.*',$f);
			$this->filtercompiled = '/'.$f.'/i';
		}
	}
	public function matches($video){
		if($this->filtertype != 'all' && $this->filter != ''){
			if($this->filtercompiled == '')
				$this->compilefilter();
			if(!preg_match($this->filtercompiled,$video['title']['$t']))
				return false;
		}
		if($this->minlength != 0 && $video['media$group']['media$content'][0]['duration'] < $this->minlength)
			return false;
		return true;
	}
	public function setUpdated(){
		mysql_query('UPDATE mm_youtubesources SET lastchecked = '.time().' WHERE id = '.$this->id.' LIMIT 1');
	}
}
?>