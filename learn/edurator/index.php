<?php
// +------------------------------------------------------------------------+
// | PHP Melody ( www.phpsugar.com )
// +------------------------------------------------------------------------+
// | PHP Melody IS NOT FREE SOFTWARE
// | If you have downloaded this software from a website other
// | than www.phpsugar.com or if you have received
// | this software from someone who is not a representative of
// | PHPSUGAR, you are involved in an illegal activity.
// | ---
// | In such case, please contact: support@phpsugar.com.
// +------------------------------------------------------------------------+
// | Developed by: PHPSUGAR (www.phpsugar.com) / support@phpsugar.com
// | Copyright: (c) 2004-2013 PHPSUGAR. All rights reserved.
// +------------------------------------------------------------------------+
session_start();
require('config.php');
if($_POST['select_language'] == 1 || (strcmp($_POST['select_language'],"1") == 0))
{
	require_once('include/settings.php');
	
	$l_id = (int) $_POST['lang_id'];
	if( ! array_key_exists($l_id, $langs) )
	{
		$l_id = 1;
	}
	
	setcookie(COOKIE_LANG, $l_id, time()+COOKIE_TIME, COOKIE_PATH);
	exit();
}

require_once('include/functions.php');
require_once('include/user_functions.php');
require_once('include/islogged.php');
require_once('include/rating_functions.php');
$modframework->trigger_hook('index_top');

require('include/Pager.php');

// define meta tags & common variables
if ('' != $config['homepage_title'])
{
	//$meta_title = $config['homepage_title'];
	$meta_title = 'Video Tutorial for IELTS, GRE, GMAT Exams, Interview Tips and Career Advice';
}
else
{
	$meta_title = sprintf($lang['homepage_title'], _SITENAME);	
}
$meta_keywords = $config['homepage_keywords'];
//$meta_description = $config['homepage_description'];
$meta_description = "Regularly update free videos, practice questions, verbal, quantitative tutorials, lectures notes and test for PTE, IELTS exams help students to get high score in exams.";
// end

$top_videos = top_videos($config['top_videos_sort'], _TOPVIDS);
$new_videos = get_video_list('added', 'desc', 0, _NEWVIDS);
$english_videos = get_video_list('added', 'desc', 0, 9, 3);//added by deepak
$gre_videos = get_video_list('added','desc',0,3,7);
$ielts_videos = get_video_list('added','desc',0,3,5);
$fun_videos = get_video_list('added','desc',0,0,9);
$collegeready_videos = get_video_list('added','desc',0,9,16);
$featured_videos = get_featured_video_list('added', 'desc', 0);
$categories = getCategory();


$voth = make_voth();
$video = request_video($voth, "index");
$voth_title = '<a href="'. makevideolink($video['uniq_id'], $video['video_title']).'">'. $video['video_title'] .'</a>';
$voth_description = $video['description'];
$category = get_category_name($video['category']);
$categoryName = $category['name'];
$categoryId = $category['id'];

if($config['show_tags'] == 1)
{
	$tag_cloud = tag_cloud(0, $config['tag_cloud_limit'], $config['shuffle_tags']);
	$smarty->assign('tags', $tag_cloud);
	$smarty->assign('show_tags', 1);
}

if($config['show_stats'] == 1)
{
	$stats = stats();
	$smarty->assign('stats', $stats);
	$smarty->assign('show_stats', 1);
}
//	Get latest articles
if (_MOD_ARTICLE)
{
	//$articles = art_load_articles(0, $config['article_widget_limit']);
	$articles = art_load_articles(0, 4);
	
	if ( ! array_key_exists('type', $articles))
	{
		foreach ($articles as $id => $article)
		{
			$articles[$id]['title'] = fewchars($article['title'], 55);
		}
		$articleContent = substr($articles[106]['content'], 0, 150);
		$smarty->assign('articles', $articles);
		$smarty->assign('article_Content', $articleContent);
	}
}

$playingnow = videosplaying(9);
$total_playingnow = (is_array($playingnow)) ? count($playingnow) : 0;

if ($config['player_autoplay'] == '0' && $video['video_player'] != 'embed' && $video['source_id'] != 3) 
{
	// don't update site_views for this video. It will be updated when the user hits the play button.
}
else
{
	// in all other cases, update site_views on page load.
	update_view_count($video['id'], $video['site_views'], false);
}

//Fun video pagination
$pagerOptions = array(
'mode'     => 'Sliding',
'delta'    => 3,
'perPage'  => 350,
'itemData' => $fun_videos,
);

$pager =& Pager::factory($pagerOptions);
//fetch the paged data into the $data variable
$data = $pager->getPageData();
//print_r($data);
if (!is_array($data)) {
$data = array();
}
//end

/***code added by deepak***/

$cate = test_categories();
//echo "<pre>";//print_r($cate);
$html = '';
$first = 1;
foreach($cate as $cate)
{
	$cate_name[] = $cate['name'];
	$cate_id = $cate['id'];
	$sub_cate = list_sub($cate['id']);
	if($first==1)
	{
		$html.= "<div class=\"tab-pane fade in active\" id=\"cat_$cate_id\">";
		$first++;
	}
	else
	{
		$html.= "<div class=\"tab-pane fade in\" id=\"cat_$cate_id\">";
	}
		if(count($sub_cate)){
			foreach($sub_cate as $sub_cate)
			{
			$sub_cate_id = $sub_cate['id'];
			$sub_cate_name = $sub_cate['name'];
				
			$videoData = get_video_list('added','desc',0,3,$sub_cate['id']);
			
			$html.= "<div class='img-gallery' style='clear:both;width:940px;'><h2> $sub_cate_name</h2><ul class='gallery-row' id='pm-grid'>";
			
			if($videoData)
			{
			 foreach($videoData as $videoData)
			 {
				 $ToatalvideoData = get_Toatal_video_list($sub_cate['id']);
				$html.="<div style='float:left;'><li>
							<div class='pm-li-video'>
								<span class='pm-video-thumb pm-thumb-145 pm-thumb border-radius2'>
									<span class='pm-video-li-thumb-info'>";
				if ($videoData['yt_length'] != 0)
					$html.= "<span class='pm-label-duration border-radius3 opac7'>". $videoData['duration']." </span>";					 
				if ($videoData['mark_new'])
					$html.= "<span class='label label-new'>New</span>";	
				
				if ($videoData['mark_populer'])
				$html.= "<span class='label label-pop'>Popular</span>";
				
				$html.= "</span>";
				
				$html.= "<a href='".$videoData['video_href']."' class='pm-thumb-fix pm-thumb-145'>
										 <span class='pm-thumb-fix-clip'><img src='".$videoData['thumb_img_url']."' alt='".$videoData['attr_alt']."' width='145'>
											 <span class='vertical-align'>
											 </span>
										 </span>
									 </a>
								 </span>";
								 
								 
				$html.= "<h3 dir='ltr'>
									 <a href='".$videoData['video_href']."' class='pm-title-link' title='".$videoData['attr_alt']."'>".$videoData['video_title']."
									 </a>
								 </h3>
								 <div class='pm-video-attr'>
									 <span class='pm-video-attr-author'>Article By<a href='".$videoData['author_profile_href']."'>".$videoData["author_name"]."</a>
									 </span>
									 <span class=pm-video-attr-since'><small>Added<time datetime='".$videoData['html5_datetime']."' title='".$videoData['full_datetime']."'>".$videoData['time_since_added']." Ago</time></small>
									 </span>
									 <span class='pm-video-attr-numbers'><small>".$videoData['views_compact']."} Views / ".$videoData['likes_compact']." Likes</small>
									 </span>
								 </div>
								<p class='pm-video-attr-desc'>".$videoData['excerpt']."</p>";
				if ($videoData['featured']){
					$html.= "<span class='pm-video-li-info'>
									 <span class='label label-featured'></span>
								 </span>";
								 }
				$html.= "	</div>	
						</li></div>";
			 }
				$html.= "<div class='video-count' style='float:right;margin-top:58px;font-size:22px;width:208px;text-align:center;'>".$sub_cate['name']." - More <span>".$ToatalvideoData."</span> </div>";
				//$html.= "<li>".$sub_cate['name']." - More <span>".$sub_cate['total_videos']."</span> </li>";
			}
			else
			{
				$html.= "<li style='margin-left: 370px;'>NO video found</li>";
			}
			
				//$html.="</ul><ul style='text-align:right;font-size:15px;'><a href='"._URL."/browse-".$sub_cate['tag']."-videos-1-date.html'>View More</a></ul></div>";
				$html.="</ul><ul style='text-align:right;font-size:15px;'><a href='"._URL."/browse-".$sub_cate['tag']."-videos-1-date.html".$sub_cate['id']."'>View More</a></ul></div>";//Hide By ankit jain 18/09/2014
				
				//$html.="<div style='float:right;'>hello</div>";
			}
		}
		else
		{
			$html.= "<div class='img-gallery' style='clear:both;width:940px;'><ul class='gallery-row' id='pm-grid'>";
			if($data)
			{
			 foreach($data as $videoData)
			 {
				$html.="<li style='height:220px;'>
							<div class='pm-li-video'>
								<span class='pm-video-thumb pm-thumb-145 pm-thumb border-radius2'>
									<span class='pm-video-li-thumb-info'>";
				if ($videoData['yt_length'] != 0)
					$html.= "<span class='pm-label-duration border-radius3 opac7'>". $videoData['duration']." </span>";					 
				if ($videoData['mark_new'])
					$html.= "<span class='label label-new'>New</span>";	
				
				if ($videoData['mark_populer'])
				$html.= "<span class='label label-pop'>Popular</span>";
				
				$html.= "</span>";
				
				$html.= "<a href='".$videoData['video_href']."' class='pm-thumb-fix pm-thumb-145'>
										 <span class='pm-thumb-fix-clip'><img src='".$videoData['thumb_img_url']."' alt='".$videoData['attr_alt']."' width='145'>
											 <span class='vertical-align'>
											 </span>
										 </span>
									 </a>
								 </span>";
								 
								 
				$html.= "<h3 dir='ltr'>
									 <a href='".$videoData['video_href']."' class='pm-title-link' title='".$videoData['attr_alt']."'>".$videoData['video_title']."
									 </a>
								 </h3>
								 <div class='pm-video-attr'>
									 <span class='pm-video-attr-author'>Article By<a href='".$videoData['author_profile_href']."'>".$videoData["author_name"]."</a>
									 </span>
									 <span class=pm-video-attr-since'><small>Added<time datetime='".$videoData['html5_datetime']."' title='".$videoData['full_datetime']."'>".$videoData['time_since_added']." Ago</time></small>
									 </span>
									 <span class='pm-video-attr-numbers'><small>".$videoData['views_compact']."} Views / ".$videoData['likes_compact']." Likes</small>
									 </span>
								 </div>
								<p class='pm-video-attr-desc'>".$videoData['excerpt']."</p>";
				if ($videoData['featured']){
					$html.= "<span class='pm-video-li-info'>
									 <span class='label label-featured'></span>
								 </span>";
								 }
				$html.= "	</div>	
						</li>";
			 }
				
				//$html.= "<li>".$sub_cate['name']." - More <span>".$sub_cate['total_videos']."</span> </li>";
			} 
			//$html.= "<div class='img-gallery' style='clear:both;width:940px;text-align:center;'><h2 style='border:none;'> No Video Found!</h2></div>";
			$html.= "</ul></div>";
		}
		$html.="</div>";
	}
	$muBetaUserData = getMuBetaUserId();
	$userId = $muBetaUserData['id'];
	$userName = $muBetaUserData['fullname'];
	
	$smarty->assign('user_id', $userId);
	$smarty->assign('user_name', $userName);
	
	
/****End of code**/
$smarty->assign('categories', $categories);
$smarty->assign('html', $html);
// pre-roll [static] ads
serve_preroll_ad('index', $video);

$smarty->assign('total_playingnow', $total_playingnow);
$smarty->assign('playingnow', $playingnow);
$smarty->assign('voth_title', $voth_title);
$smarty->assign('voth_description', $voth_description);
$smarty->assign('video_data', $video); 
$smarty->assign('categoryName', $categoryName);
$smarty->assign('categoryId', $categoryId);
$smarty->assign('catId', $video['category']);

$smarty->assign('voth', $voth);
$smarty->assign('new_videos', $new_videos);
$smarty->assign('english_videos', $english_videos);
$smarty->assign('gre_videos', $gre_videos);
$smarty->assign('ielts_videos', $ielts_videos);
$smarty->assign('fun_videos', $fun_videos);
$smarty->assign('collegeready_videos', $collegeready_videos);


$smarty->assign('top_videos', $top_videos);
// --- DEFAULT SYSTEM FILES - DO NOT REMOVE --- //
$smarty->assign('meta_title', $meta_title);
$smarty->assign('meta_keywords', $meta_keywords);
$smarty->assign('meta_description', $meta_description);
$smarty->assign('template_dir', $template_f);
$modframework->trigger_hook('index_bottom');
$smarty->display('index.tpl');
?>