<!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" dir="ltr" lang="en">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->
<head>
<style type="text/css">
{literal}
#nc{margin-top: -30px;width: 36px;margin-left: -27px;}
{/literal}
</style>
<meta charset="UTF-8" />
<meta name="viewport" content="width=1024,maximum-scale=1.0">
<title>{$meta_title}</title>
<meta https-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=edge,chrome=1">  
{if $no_index == '1'}
<meta name="robots" content="noindex,nofollow">
<META NAME="GOOGLEBOT" CONTENT="NOINDEX, NOFOLLOW">
{/if}
<!--<meta name="title" content="{$meta_title}" />-->
<!--<meta name="keywords" content="{$meta_keywords}" />-->
<meta name="description" content="{$meta_description}" />
<link rel="shortcut icon" href="{$smarty.const._URL}/{$smarty.const._UPFOLDER}/favicon.ico">
{if $rss == "video-category"}
<link rel="alternate" type="application/rss+xml" title="{$meta_title}" href="{$smarty.const._URL}/rss.php?c={$cat_id}" />
{elseif $rss == "article-category"}
<link rel="alternate" type="application/rss+xml" title="{$meta_title}" href="{$smarty.const._URL}/rss.php?c={$cat_id}&feed=articles" />
{/if}

<!--[if lt IE 9]>
<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" media="screen" href="{$smarty.const._URL}/templates/{$template_dir}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="{$smarty.const._URL}/templates/{$template_dir}/css/bootstrap-responsive.min.css">
<!--[if lt IE 9]>
<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" media="screen" href="{$smarty.const._URL}/templates/{$template_dir}/css/new-style.css">
<link rel="stylesheet" type="text/css" media="screen" href="{$smarty.const._URL}/templates/{$template_dir}/css/uniform.default.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700" rel="stylesheet" type="text/css">
<!--[if IE]>
{literal}
<link rel="stylesheet" type="text/css" media="screen" href="{/literal}{$smarty.const._URL}{literal}/templates/{/literal}{$template_dir}{literal}/css/new-style-ie.css">
{/literal}

<!-- CSS Tabes -->

<link rel="stylesheet" type="text/css" media="screen" href="{$smarty.const._URL}/templates/{$template_dir}/css/css-tabs/bootstrap.css">

<link media="screen" rel="stylesheet" href="http://meetuni.com/learn/edurator/templates/default/css/cust_footer.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700italic" rel="stylesheet" type="text/css">
<![endif]-->

<!--MAIN-->
      <link rel="shortcut icon" href="http://meetuni.com/assets/img/favicon.png">
	  <link href="http://meetuni.com/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="http://meetuni.com/learn/edurator/templates/default/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link media="screen" rel="stylesheet" href="http://meetuni.com/learn/edurator/templates/default/css/univ_style.css">
      <link href="http://meetuni.com/learn/edurator/templates/default/css/font-awesome.css" rel="stylesheet" media="screen">
	  <link href="http://meetuni.com/learn/edurator/templates/default/css/bootstrap_calendar.css" rel="stylesheet" media="screen">
      <link href="http://meetuni.com/learn/edurator/templates/default/css/select2.css" rel="stylesheet" media="screen">
      <link href="http://meetuni.com/learn/edurator/templates/default/css?family=Open+Sans:400,400italic,600,600italic" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Ledger" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" type="text/css" href="http://meetuni.com/learn/edurator/templates/default/demo.css">
<!--ENDS HERE MAIN-->

<script type="text/javascript">
 var MELODYURL = "{$smarty.const._URL}";
 var MELODYURL2 = "{$smarty.const._URL}";
 var TemplateP = "{$smarty.const._URL}/templates/{$template_dir}";
 var _LOGGEDIN_ = {if $logged_in} true {else} false {/if};
</script>
{literal}
<script type="text/javascript">
 var pm_lang = {
	lights_off: "{/literal}{$lang.lights_off}{literal}",
	lights_on: "{/literal}{$lang.lights_on}{literal}",
	validate_name: "{/literal}{$lang.validate_name}{literal}",
	validate_username: "{/literal}{$lang.validate_username}{literal}",
	validate_pass: "{/literal}{$lang.validate_pass}{literal}",
	validate_captcha: "{/literal}{$lang.validate_captcha}{literal}",
	validate_email: "{/literal}{$lang.validate_email}{literal}",
	validate_agree: "{/literal}{$lang.validate_agree}{literal}",
	validate_name_long: "{/literal}{$lang.validate_name_long}{literal}",
	validate_username_long: "{/literal}{$lang.validate_username_long}{literal}",
	validate_pass_long: "{/literal}{$lang.validate_pass_long}{literal}",
	validate_confirm_pass_long: "{/literal}{$lang.validate_confirm_pass_long}{literal}",
	choose_category: "{/literal}{$lang.choose_category}{literal}",
 	validate_select_file: "{/literal}{$lang.upload_errmsg10}{literal}",
 	validate_video_title: "{/literal}{$lang.validate_video_title}{literal}",
	onpage_delete_favorite_confirm: "{/literal}{$lang.myfavorites_delete_alert_confirm}{literal}",
	please_wait: "{/literal}{$lang.please_wait}{literal}",
 }
</script>
{/literal}

<script type="text/javascript" src="{$smarty.const._URL}/js/swfobject.js"></script>
<script type="text/javascript" src="{$smarty.const._URL}/templates/{$template_dir}/js/js-tabs/jquery.js"></script>
<script type="text/javascript" src="{$smarty.const._URL}/templates/{$template_dir}/js/js-tabs/bootstrap-tab.js"></script>

{if $facebook_image_src != ''}
<link rel="image_src" href="{$facebook_image_src|replace:'http':'https'}" />
{if $video_data.source_id == 3}
	<link rel="video_src" href="{$video_data.direct|replace:'http':'https'}"/>
{else}
	<link rel="video_src" href="{$smarty.const._URL2|replace:'http':'https'}/videos.php?vid={$video_data.uniq_id}"/>
{/if}
<meta property="og:image" content="{$facebook_image_src|replace:'http':'https'}" />
{/if}
<style type="text/css">{$theme_customizations}</style>
{if isset($mm_header_inject)}{$mm_header_inject}{/if}
</head>
<body>
{if $maintenance_mode}
	<div class="alert alert-danger" align="center"><strong>Currently running in maintenance mode.</strong></div>
{/if}
{if isset($mm_body_top_inject)}{$mm_body_top_inject}{/if}

   <div id="gap"></div>
   <header role="banner">
         <div class="row container">
            <h1>Meet Univ</h1>
            <a href="http://meetuni.com/" id="logo"><img src="http://meetuni.com/assets/img/meetuniv.png" alt="Meet Univ"></a>
            <nav role="navigation" id="top_menu">
               <ul>
                  <li><a href="http://meetuni.com/list-of-colleges">Colleges</a></li>
                  <li><a href="http://meetuni.com/connect">Connect</a></li>
				  
				  
				  <li><a href="http://meetuni.com/course-search">Courses</a><img src="http://meetuni.com/assets/img/new_course.png" id="nc"/></li>
				  
				  <li><a href="http://meetuni.com/learn/edurator">Learn</a></li>
                  <li><a href="http://meetuni.com/ielts-preparation">TestPrep</a></li>
                  <li><a href="http://meetuni.com/gifted-intro">Gifted</a></li>
                  <!--<li><a href="#">Blog</a></li>-->
               </ul>
            </nav>	
			{if isset($user_id)}
			<div class="btn-group pull-right" style="margin-top:12px">
				<a class="btn btn-small" id="userName" href="http://meetuni.com/auth/profileDashboard">{$user_name}</a>
				<a class="btn btn-small" href="http://meetuni.com/auth/logout">LOG OUT</a>	<br>
				<a class="btn btn-small" id="profileSetting" href="http://meetuni.com/auth/profileDashboard" style="width: 101px; background: #0073d1;color: white; display:none;">My Profile</a>
       		</div>
			{else}
			<div class="btn-group pull-right" style="margin-top:13px">
				<a class="btn btn-small" href="http://meetuni.com/login">LOG IN</a>
				<a class="btn btn-small" href="http://meetuni.com/register">SIGN UP</a>	
       		</div>
			{/if}
		</div>
      </header>

<a id="top"></a>
{if $ad_1 != ''}
<div class="pm-ad-zone" align="center">{$ad_1}</div>
{/if}


{literal}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	$('#userName').hover(function(){
		$('#profileSetting').show();
	},function(){
		$('#profileSetting').hide();
	});
	$('#profileSetting').hover(function(){
		$('#profileSetting').show();
	},function(){
		$('#profileSetting').hide();
	});
});
</script>

{/literal} 