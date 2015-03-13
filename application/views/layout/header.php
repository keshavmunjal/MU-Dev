<!DOCTYPE html>
<html lang="en">
	<!---<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />--->
   <head>
   
      <title><?php echo $title?></title>
		<?php if(!empty($individualCollege)){?>
		<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
		<?php } ?>
		<meta name="description" content="<?php echo $description?>" />
		<?php if(!empty($canonical)){ ?>
		<link rel="canonical" href="<?php echo $canonical ?>" />
		<?php }else{ ?>
		<link rel="canonical" href="https://meetuniv.com" />
		<?php } ?>
		
		<meta name="resource-type" content="document" />
		<meta name="robots" content="all" />
		<meta name="revisit" content="Google, Yahoo, MSN" />
		<meta name="robots" content="Index, Follow" />
		<meta name="slurp" content="Index, Follow" />
		<meta name="msnbot" content="Index, Follow" />
		<meta name="googlebot" content="Index, Follow" />
		<meta name="allow-search" content="Yes" />
		<meta name="revisit-after" content="7 days" />
		<meta name="distribution" content="Global" />
		<meta name="rating" content="General" />
		<meta name="language" content="English" />
		<meta name="expires" content="Never" />
		<meta name="copyright" content=" Copyright © MeetUniv – MeetUniv.com" />
		<meta name="author" content="MeetUniv" />

      <!-- Bootstrap -->
      <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png" />
      <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="<?php echo base_url();?>assets/css/univ_style.css" rel="stylesheet" media="screen">
      <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" media="screen">
	  <link href="<?php echo base_url();?>assets/css/bootstrap_calendar.css" rel="stylesheet" media="screen">
      <link href="<?php echo base_url();?>assets/css/select2.css" rel="stylesheet" media="screen">
      <link href="<?php echo base_url();?>assets/css/univ-slider.css" rel="stylesheet" media="screen">
	  <link href="<?php echo base_url();?>assets/css/bootstrap-tour.css" rel="stylesheet" media="screen">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Ledger' rel='stylesheet' type='text/css'>
	  
	  
	  <a href="https://plus.google.com/113479683006635951972" rel="publisher"></a>
	  
      <script src="<?php echo base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
<style>
#nc{margin-top: -30px;width: 36px;margin-left: -27px;}
</style>
   </head>
   <body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40054769-1', 'auto');
  ga('send', 'pageview');

</script>
      <!--code by webinfomart-->
      <!--header-->
      <div id="gap"></div>
      <header role="banner">
	  
	  <?php //$_SESSION['totlead']=$totalLeads[0]->num; ?>
	  
         <div class="row container">
            <h2 style="display:none;">Meet Univ</h2>
            <a href="<?php echo base_url()?>" id="logo"><img src="<?php echo base_url();?>assets/img/meetuniv.png" alt="best place to meet top universities"></a>
            <nav role="navigation" id="top_menu">
               <ul>
                  <li <?php if($active=='college'){ ?>class="active"<?php } ?>><a href="<?php echo base_url('list-of-colleges');?>">Colleges</a></li>
                  <li <?php if($active=='connect'){ ?>class="active"<?php } ?>><a href="<?php echo base_url('connect');?>">Connect</a></li>
                  <!--<li><a href="#">Courses</a></li>
                  <li><a href="#">Councel</a></li>-->
				  
                  <li <?php if($active=='course'){ ?>class="active"<?php } ?>><a href="<?php echo base_url('course-search');?>" >Courses
				  </a><img src="<?php echo base_url();?>assets/img/new_course.png" id="nc"/></li>
          
				  <li><a href="<?php echo base_url('learn/edurator');?>">Learn</a></li>
                  
				 
				  <li <?php if($active=='ielts-preparation'){ ?>class="active"<?php } ?>><a href="<?php echo base_url('ielts-preparation');?>">TestPrep</a></li>
                 
				  
				  <li <?php if($active=='gifted'){ ?>class="active"<?php } ?>><a href="<?php echo base_url('gifted-intro');?>">Gifted</a></li>
               </ul>
            </nav>
			<?php if(isset($userId)){?>
			<div class="btn-group pull-right " style="margin-top:12px">
				<ul>
				<a class="btn btn-small" id="userName"><?php echo($userData['fullname'])?></a>
				<a class="btn btn-small" href="<?php echo base_url('auth/logout')?>">LOG OUT</a><br>
				<a class="btn btn-small" id="profileSetting" href="<?php echo base_url('auth/profileDashboard')?>" style="width: 101px; background: #0073d1;color: white; display:none;">My Profile</a>				
       		</div>
			<?php }else{?>
			<div class="btn-group pull-right" style="margin-top:13px">
				<a class="btn btn-small" href="<?php echo base_url('login')?>">LOG IN</a>
				<a class="btn btn-small" href="<?php echo base_url('register')?>">SIGN UP</a>	
       		</div>
			<?php }?>
            <!--<aside id="login"  class="btn-group">
               <button class="btn" onclick="location.href='<?php echo base_url('register')?>'">SignUp</button>
               <button class="btn btn-small dropdown-toggle" >SignIn <i class="icon-chevron-down icon-white"></i></button>
            </aside>-->
			
         </div>
      </header>
      <!--end header-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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