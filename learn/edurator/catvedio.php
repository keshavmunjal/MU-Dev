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
require_once('include/functions.php');
require_once('include/user_functions.php');
require_once('include/islogged.php');
require_once('include/rating_functions.php');

//require('include/pager.php');


if (_MOD_ARTICLE)
{
	//$articles = art_load_articles(0, $config['article_widget_limit']);
	$articles = art_load_articles(0, 4);
	//echo "<pre>";print_r($articles);exit;

	if ( ! array_key_exists('type', $articles))
	{
		foreach ($articles as $id => $article)
		{
			$articles[$id]['title'] = fewchars($article['title'], 55);
		}
		$articleContent = substr($articles[102]['content'], 0, 150);
		//echo "<pre>";print_r($article);exit;
		$smarty->assign('articles', $articles);
		$smarty->assign('article_Content', $articleContent);
	}
}

//$featured_video = get_featured_video_list();
$featured_video=getfeaturedvideobycat($_GET['id']);//added by ankit jain 03/02/2015
$voth = make_voth();
$video = request_video($featured_video['uniq_id'], "index");
//echo "<pre>";print_r($featured_video);exit;

$voth_title = '<a href="'. makevideolink($featured_video['uniq_id'], $featured_video['video_title']).'">'. $featured_video['video_title'] .'</a>';
$voth_description = $video['description'];

$catDetails = get_category($_GET['id']);
$meta_title=$catDetails['name']." Videos";
//echo $voth_description;exit;
$subCate = list_sub_child($_GET['id']);
//echo "<pre>";print_r($subCate).'ssss';exit;
	if(!empty($subCate))
	{
		foreach($subCate as $scat)
		{
				$cate_id = $scat['id'];
				$sub_cate_id = $scat['id'];
				$sub_cate_name = $scat['name'];
				$videoData = get_video_list('added','desc',0,3,$scat['id']);
				$html.= "<div class='img-gallery' style='clear:both;width:940px;'><h2> $sub_cate_name</h2><ul class='gallery-row' id='pm-grid'>";
				//echo "<pre>";print_r($videoData);exit;
					if($videoData)
					{
					 foreach($videoData as $videoData)
					 {
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
												 <span class='pm-thumb-fix-clip'><img src='".str_replace("http","https",$videoData['thumb_img_url'])."' alt='".$videoData['attr_alt']."' width='145'>
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
											 <span class=pm-video-attr-since'><small>Added <time datetime='".$videoData['html5_datetime']."' title='".$videoData['full_datetime']."'>".$videoData['time_since_added']." Ago</time></small>
											 </span>
											 <span class='pm-video-attr-numbers'><small>".$videoData['views_compact']."} Views / ".$videoData['likes_compact']." Likes</small>
											 </span>
										 </div>
										<p class='pm-video-attr-desc'>".str_replace("http","https",$videoData['excerpt'])."</p>";
						if ($videoData['featured']){
							$html.= "<span class='pm-video-li-info'>
											 <span class='label label-featured'></span>
										 </span>";
										 }
						$html.= "	</div>	
								</li></div>";
					 }
						$html.= "<div class='video-count' style='float:right;margin-top:58px;font-size:22px;width:208px;text-align:center;'>".$scat['name']." - More <span>".$scat['total_videos']."</span> </div>";
						//$html.= "<li>".$sub_cate['name']." - More <span>".$sub_cate['total_videos']."</span> </li>";
					
					
						$html.="</ul><ul style='text-align:right;font-size:15px;'><a href='"._URL."/browse-".$scat['tag']."-videos-1-date.html'>View More</a></ul></div>";
						//$html.="</ul><ul style='text-align:right;font-size:15px;'><a href='"._URL."/".$scat['tag'].".php'>View More</a></ul></div>";
						//$html.="<div style='float:right;'>hello</div>";
					}
					else
					{
						$html.= "<li style='margin-left:400px;'>No videos found</li>";
					}
				 
		}
		
		//$voth_title = '<a href="'. makevideolink($videoData['uniq_id'], $videoData['video_title']).'">'. $videoData['video_title'] .'</a>';

	}else{
		header('Location: /learn/edurator/browse-sub-'.$catDetails['tag'].'-videos.html'.$_GET['id'].'');
		$html.= "<div><h3 style='margin-left: 365px;color:#08c;'> No More Videos !</h3>";
		$html.="</div>";
	}
//echo "<pre>";print_r($pagerOptions);exit;


$catId = array('4', '3', '9', '16');
foreach($catId as $cid){
	$sub_cat[] = list_sub($cid);
}

serve_preroll_ad('index', $video);

$smarty->assign('total_playingnow', $total_playingnow);
$smarty->assign('playingnow', $playingnow);
$smarty->assign('voth_title', $voth_title);
$smarty->assign('voth_description', $voth_description);
$smarty->assign('video_data', $video);
//$smarty->assign('result', $featured_video);
$smarty->assign('result', $data);
$smarty->assign('subCat', $sub_cat);
$smarty->assign('cateName', $catDetails['name']);
//echo "<pre>";print_r($video);exit;



// MAKE SORT BY STICK
if(!empty($cats)) {
	$list_cats = list_categories(0, $cats);
	$smarty->assign('list_categories', $list_cats);
} else {
	$list_cats = list_categories(0, '');
	$smarty->assign('list_categories', $list_cats);
} 
if($config['show_tags'] == 1)
{
	$tag_cloud = tag_cloud(0, $config['tag_cloud_limit'], $config['shuffle_tags']);
	$smarty->assign('tags', $tag_cloud);
	$smarty->assign('show_tags', 1);
}


$smarty->assign('html', $html);
$smarty->assign('cat_id', $cats);
$smarty->assign('problem', $problem);
$smarty->assign('gv_category_name', $category_name);
$smarty->assign('gv_cat', $cat_name);
$smarty->assign('gv_pagenumber', $page);
$smarty->assign('gv_sortby', $sortby);
$smarty->assign('gv_category_description', $category['description']);

$smarty->assign('list_subcats', $list_subcats);
$smarty->assign('pagination', $pagination);

$smarty->assign('page_count_info', $page_count_info);
$smarty->assign('pag_left', $pag_left);
$smarty->assign('pag_right', $pag_right);

$smarty->assign('results', $videos);
// --- DEFAULT SYSTEM FILES - DO NOT REMOVE --- //
$smarty->assign('meta_title', $meta_title);
$smarty->assign('meta_keywords', $meta_keywords);
$smarty->assign('meta_description', $meta_description);
$smarty->assign('template_dir', $template_f);
$smarty->display('catvedio.tpl');
?>