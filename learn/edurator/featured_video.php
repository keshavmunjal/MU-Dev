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

require_once('include/Pager.php');

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
		$articleContent = substr($articles[99]['content'], 0, 150);
		//echo "<pre>";print_r($article);exit;
		$smarty->assign('articles', $articles);
		$smarty->assign('article_Content', $articleContent);
	}
}
$meta_title='Featured Videos';
$featured_video = get_featured_video_list();
$voth = make_voth();
$video = request_video($voth, "index");
//echo "<pre>";print_r($featured_video);exit;
//$voth_title = '<a href="'. makevideolink($video['uniq_id'], $video['video_title']).'">'. $video['video_title'] .'</a>';
$featured_video=getfeaturedvideobycat($_GET['id']);//added by ankit jain 03/02/2015
$voth_title = '<a href="'. makevideolink($featured_video['uniq_id'], $featured_video['video_title']).'">'. $featured_video['video_title'] .'</a>';

$voth_description = $video['description'];
//echo $voth_description;exit;

//$sub_cate = get_sub_category();
$catId = array('4', '3', '9', '16');
foreach($catId as $cid){
$sub_cat[] = list_sub($cid['id']);
}

/**************** Pagination *****************/
$pagerOptions = array(
'mode'     => 'Sliding',
'delta'    => 3,
'perPage'  => 12,
'itemData' => get_featured_video_list(),
);

$pager =& Pager::factory($pagerOptions);
//fetch the paged data into the $data variable
$data = $pager->getPageData();
if (!is_array($data)) {
$data = array();
}

//$smarty->assign('items', $data);
$smarty->assign('pager_links', $pager->links);
$smarty->assign(
'page_numbers', array(
'current' => $pager->getCurrentPageID(),
'total'   => $pager->numPages()
)
);
/**************** End *****************/
serve_preroll_ad('index', $video);

$smarty->assign('total_playingnow', $total_playingnow);
$smarty->assign('playingnow', $playingnow);
$smarty->assign('voth_title', $voth_title);
$smarty->assign('voth_description', $voth_description);
$smarty->assign('video_data', $video);
//$smarty->assign('result', $featured_video);
$smarty->assign('result', $data);
$smarty->assign('subCat', $sub_cat);
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
$smarty->display('featured_video.tpl');
?>