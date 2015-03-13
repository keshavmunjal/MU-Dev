<?php define('base_url','http://meetuniv.com/'); ?>
<!doctype html>
<html lang="en">
<head>

	<!-- Define Charset -->
	<meta charset="UTF-8">
	
	<!-- Page Title -->
	<title>Campus Landing Page</title>
    
	<!--Modernizr-->
    <script src="js/modernizr.js" type="text/javascript"></script>

	<!-- Responsive Metatag --> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">
	
	<!-- Stylesheet
	===================================================================================================  -->
	<link rel="stylesheet" href="<?php echo base_url ?>college-application/font/fontello.css">
	<link rel="stylesheet" href="<?php echo base_url ?>college-application/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url ?>college-application/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url ?>college-application/css/media-queries.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
	
<!-- from meet univ -->
	
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name="description" content="Best Place to Meet Universities | University Connect | Education Fairs | Spot Admission | University Visits | Universities | Courses | Test Preparation">
	  <meta name="keywords" content="Meet UK Universities,Study in UK,Study in UK universities,Study MBA in UK,Colleges in UK,International students,Universities &  colleges in UK,Higher education in UK,Best universities in UK ,List of Top 10 colleges & universities,IELTS-GMAT-TOEFL,Universities events,Engineering colleges in UK ,Postgraduate study,Scholarships,Executive MBA in UK,Education Fairs,Spot Admission,University Visits,Courses,Test Prepration">
	  <meta name="charset" content="UTF-8">
	  <meta name="robots" content="index, follow">
	  <meta name="googlebot" content="index, follow">
	  <meta http-equiv="content-language" content="EN">
	  <meta name="copyright" content="Copyright © 2013 meetuniv.com ">
	  <meta name="rating" content="general">
	  <meta name="distribution" content="Global">
	  <meta name="revisit-after" content="30 days">
	  <!-- Bootstrap -->
      <link rel="shortcut icon" href="http://meetuniv.com/assets/img/favicon.png" />
      <link href="http://meetuniv.com/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="http://meetuniv.com/assets/css/univ_style.css" rel="stylesheet" media="screen">
      <link href="http://meetuniv.com/assets/css/font-awesome.css" rel="stylesheet" media="screen">
	  <link href="http://meetuniv.com/assets/css/bootstrap_calendar.css" rel="stylesheet" media="screen">
      <link href="http://meetuniv.com/assets/css/select2.css" rel="stylesheet" media="screen">
      <link href="http://meetuniv.com/assets/css/univ-slider.css" rel="stylesheet" media="screen">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic' rel='stylesheet' type='text/css'>
	 <style>
	a:hover{
		text-decoration: none;
	}
	header .navbar-default .navbar-nav > li > a:hover {
		border-bottom: none;
		cursor:pointer;
	}
	</style>
        
</head>
	
<body>
	<!-- Header -->
	<header style="background-color: #fff;">
		<!---Meetuniv header---->
		<div class="banner">
		 <div class="row container">
            <h1 style="display:none">Meet Univ</h1>
            <a  href="http://meetuniv.com/" style="display:block; float:left"><img alt="Meet Univ" src="http://meetuniv.com/assets/img/meetuniv.png"></a>
			
			  <nav id="top_menu" role="navigation" style="margin-left:0">
               <ul>
                  <li><a href="http://meetuniv.com/college">Colleges</a></li>
                  <li><a href="http://meetuniv.com/connect">Connect</a></li>
                  <!--<li><a href="#">Courses</a></li>
                  <li><a href="#">Councel</a></li>-->
                 <li><a href="http://meetuniv.com/learn/edurator/">Learn</a></li>
                  <li><a href="http://meetuniv.com/ielts-preparation">TestPrep</a></li>
				  <li><a href="http://meetuniv.com/gifted-intro">Gifted</a></li>
               </ul>
            </nav>
			<div class="btn-group pull-right" style="margin-top:13px">
				<a href="login.html" class="btn btn-small">LOG IN</a>
				<a href="register.html" class="btn btn-small">SIGN UP</a>	
       		</div>
         </div>
		 </div>
		 <!---Navigation header---->
		 
	    <div class="navbar navbar-default Custommargin" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <!--<a class="navbar-brand" href="#"><img src="<?php echo base_url ?>college-application/img/logo.png" alt="logo brand"></a>-->
	        </div>
			
	        <div class="navbar-collapse collapse">
				<!--<ul class="navbar-nav navbar-right">
	            <li id="resumeWriting"><a>Resume Writing</a>
					<div id="subMenu" style="display:none;">
						<ul class="navbar-nav navbar-right">
							<li style="float:none;"><a data-scroll-nav='0'>what we offer</a></li>
							<li style="float:none;"><a data-scroll-nav='1'>notes from the tacher</a></li>	
							<li style="float:none;"><a data-scroll-nav='2'>testimonial</a></li>
							<li style="float:none;"><a data-scroll-nav='3'>pricing</a></li>
							<li style="float:none;"><a data-scroll-nav='4'>Contact</a></li>
						</ul>
					</div>
				</li>
	            <li><a href="">Statement of Purpose</a></li>
	            <li><a href="">Premium College Counselling</a></li>
	            <li><a href="">Interview Tips</a></li>
	            <li><a href="#menu-contact">Contact</a></li>
	          </ul>-->
				<ul class="navbar-nav navbar-right" style="list-style:none;">
					<li class="dropdown" id="resumeWriting">
				    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resume Writing <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" id="subMenu">
						<li><a data-scroll-nav='0' style="cursor: pointer;">Whats Different</a></li>
						<li><a data-scroll-nav='1' style="cursor: pointer;">What We Offer</a></li>
						<li><a data-scroll-nav='2' style="cursor: pointer;">Testimonials</a></li>
						<li><a data-scroll-nav='3' style="cursor: pointer;">Pricing</a></li>
						<li><a data-scroll-nav='4' style="cursor: pointer;">Faqs</a></li>
					</ul>
					<li><a href="#">Statement of Purpose</a></li>
					<li><a href="#">Premium College Counselling</a></li>
					<li><a href="#">Interview Tips</a></li>
					<!--<li><a href="#">Contact</a></li>-->
			   </ul>
	        </div><!--/.nav-collapse -->			
	      </div>
	    </div>
	</header>
	<!-- end Header -->

	<!--<section id="menu-features" class="features" style="position: fixed;z-index: 9;">
        <article class="item text-center">
            <div class="panel-heading">
               <h3 class="sub_title">
                   <a class='active' data-scroll-nav='0'>what we offer</a>
               </h3>
            </div>           
        </article>
        <article id="notes-from-the-tacher" class="item text-center">
            <div class="panel-heading">
                <h3 class="sub_title">
                    <a data-scroll-nav='1'>notes from the tacher</a>
                </h3>
            </div>           
        </article>
        <article class="item text-center">
            <div class="panel-heading">
                <h3 class="sub_title">
                    <a data-scroll-nav='2'>testimonial</a>
                </h3>
            </div>           
        </article>
        <article class="item text-center">
            <div class="panel-heading">
                <h3 class="sub_title">
                    <a data-scroll-nav='3'>pricing</a>
                </h3>
            </div>            
        </article>
        <article class="item text-center">
            <div class="panel-heading">
                <h3 class="sub_title">
                    <a data-scroll-nav='4'>Contact</a>
                </h3>
            </div>           
        </article>
	</section>-->
	<!-- Slider and Form -->
	<section id="menu-slider " class="slider CustomSlider"> <!--style="padding-top:11%"-->
        <div class="">
            <div class="content_slider">
                <!-- slider -->
                <div class="bs-example">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="top:110px;">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo base_url ?>college-application/img/slide1.png" alt="First slide">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url ?>college-application/img/slide2.png" alt="Second slide">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url ?>college-application/img/slide4.png" alt="Third slide">
                            </div>
							<div class="item">
                                <img src="<?php echo base_url ?>college-application/img/slide5.png" alt="Third slide">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
						<article style="position:absolute;top: 112px;
left: 100px;font-size:40px;"><span style="font-size:20px;color:white;">MBA</span> <hr/><p style="color:white;font-weight: bold;text-shadow: 0px 0px 12px #000000;">KNOW WHERE YOUR RESUME QUALITY</p> <p style="color:white;font-weight: bold;text-shadow: 0px 0px 12px #000000;">STANDS AMONGST OTHERS FOR FREE</p><br>
<a data-scroll-nav='3' style="cursor: pointer;"><img src="<?php echo base_url ?>college-application/img/button.png"></a>
<p style="font-size: 18px;font-weight: bold;margin-top: -46px;margin-left: 35px;"><a data-scroll-nav='3' style="cursor: pointer;">JUMP TO PRICING/DETAILS</a></p>
</article>

                    </div>
                </div>
            </div>
            <!-- /slider -->

           
        </div>
		<div id="firstSection" style="display:none;height:63px;"></div>
	</section>
	
	<!-- end Slider and Form -->


	<!-- Features -->
	
	<!-- end Features -->


	<!-- Information -->
    <section data-scroll-index='0' id="menu-information" class="information generic" style="margin-top:130px;">
        <div class="container text-center" style="margin-top:75px;>
            <div class="row">
                <article class="item col-xs-12 ">
                    <a class="icon col-xs-12 col-lg-7" href="#"><img class="icon-monitor" src="<?php echo base_url ?>college-application/img/img01.png" alt="//"></a>
                    <div class="col-xs-12 col-lg-5 info_text">
                        <h2>Take Courses wherever you go</h2>
                        <p>
                            A behind-the-scenes review of any application information you choose to submit (this will prepare your consultant to ask the questions you are most likely to encounter during the real thing!) 
                        </p>
                        <a href="#" class="link">Check out our library <i class="icon-right-circled"></i></a>
                    </div>
                </article>
                <article class="item col-xs-12 ">
                    <a class="icon col-xs-12 col-lg-7 pull-right" href="#"><img class="icon-monitor" src="<?php echo base_url ?>college-application/img/img02.png" alt="//"></a>
                    <div class="col-xs-12 col-lg-5 info_text">
                        <h2>Practice makes perfect</h2>
                        <p>
                            A 1-hour consultation over Skype (which includes a mock interview)
                        </p>
                        <a href="#" class="link">Compare pricing plans<i class="icon-right-circled"></i></a>
                    </div>
                </article>
                <article class="item col-xs-12 ">
                    <a class="icon col-xs-12 col-lg-7" href="#"><img class="icon-monitor" src="<?php echo base_url ?>college-application/img/img03.png" alt="//"></a>
                    <div class="col-xs-12 col-lg-5 info_text">
                        <h2>Earn achievements, show off skills</h2>
                        <p>
                            Follow-up emailed evaluation highlighting your strengths and areas to practice 
                        </p>
                        <a href="#" class="link">Sign up to start learning <i class="icon-right-circled"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>
	<!-- end Information -->


	<!-- Video -->
	<section data-scroll-index='1' class="video generic" style="padding-top:11%">
        <div class="container">
            <div class="row">
                <h2 class="col-lg-12">WHAT WE OFFER:</h2>
                <div class="description col-xs-12 col-lg-9">
                    <p>
                        Get our free resume feedback report and know what to improve in your resume within 30 seconds Upload your resume to evaluate your score
                    </p>
                </div>
                <div class="col-xs-12 col-lg-3">
					<form action="http://rezscore.com/a/34ad8b/grade/index.xml" method="POST" enctype="multipart/form-data">
					<!--<form action="#" method="POST" enctype="multipart/form-data" id="resumeFrm">-->
					<input type="file" name="resume" id="resume"><br>
                    <button class="btn btn-default button_generic">
                        <i class="icon-paper-plane"></i>
                        Upload Resume
                    </button>
					</form>
                </div>
                <div class="col-xs-12 console_video">
                    <div class="console col-xs-12">
                        <figure>
                            <img src="<?php echo base_url ?>college-application/img/bg-video.png" alt="//">
                        </figure>
                        <div class="vendor">
                            <iframe src="http://player.vimeo.com/video/59731108?title=0&amp;byline=0&amp;portrait=0" width="570" height="350"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<!-- end Video -->


	<!-- Gallery -->
	<!--<section id="menu-gallery" class="gallery generic">
        <div class="container">
            <div class="text-center">
                <h2>Select your Classes</h2>
                <p>You'll earn badges as you journey through our extensive library of courses.
                    These badges are an indicator of what skills you currently possess and are
                    viewable by anyone online.
                </p>
                <div class="gallery_content">
                    <!--filter portfolio-->
                    <!--<section id="options" class="clearfix navbar navbar-default col-lg-6 col-lg-offset-3">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul id="filters" class="option-set clearfix nav navbar-nav" data-option-key="filter">
                                <li><a href="#filter" data-option-value="*" class="selected">View All</a></li>
                                <li><a href="#filter" data-option-value=".math">Mathematics</a></li>
                                <li><a href="#filter" data-option-value=".design">Design</a></li>
                                <li><a href="#filter" data-option-value=".language">Languague</a></li>
                                <li><a href="#filter" data-option-value=".drawing">Drawing</a></li>
                            </ul>
                        </div>
                    </section>-->
                    <!-- #options -->
                   <!-- <div id="container" class="clearfix clear">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element math" data-symbol="Hg" data-category="transition">
                            <div class="blog-post">
                                <div class="ImageWrapper">
                                    <figure>
                                        <img class="img-responsive" src="<?php echo base_url ?>college-application/img/gallery/item1.jpg" alt="//">
                                    </figure>

                                    <div class="ImageOverlayH"></div>

                                    <div class="Buttons StyleSc">
                                        <span class="WhiteRounded">
                                            <a class="fancybox" href="#" data-toggle="modal" data-target="#Modal-img">
                                                <i class="icon-picture"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a class="fancybox" href="#" data-toggle="modal" data-target="#Modal-video1">
                                                <i class="icon-video"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#myModal">
                                                <i class="icon-info"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element design" data-symbol="Te" data-category="metalloid">
                            <div class="blog-post">
                                <div class="ImageWrapper">
                                    <figure>
                                        <img class="img-responsive" src="<?php echo base_url ?>college-application/img/gallery/item3.jpg" alt="//">
                                    </figure>

                                    <div class="ImageOverlayH"></div>

                                    <div class="Buttons StyleSc">
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#Modal-img3">
                                                <i class="icon-picture"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#Modal-video3">
                                                <i class="icon-video"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#myModal-3">
                                                <i class="icon-info"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element language" data-symbol="Bi" data-category="post-transition">
                            <div class="blog-post">
                                <div class="ImageWrapper">
                                    <figure>
                                        <img class="img-responsive" src="<?php echo base_url ?>college-application/img/gallery/item5.jpg" alt="//">
                                    </figure>

                                    <div class="ImageOverlayH"></div>

                                    <div class="Buttons StyleSc">
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#Modal-img5">
                                                <i class="icon-picture"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#Modal-video5">
                                                <i class="icon-video"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#myModal-5">
                                                <i class="icon-info"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element math" data-symbol="Hg" data-category="transition">
                            <div class="blog-post">
                                <div class="ImageWrapper">
                                    <figure>
                                        <img class="img-responsive" src="<?php echo base_url ?>college-application/img/gallery/item2.jpg" alt="//">
                                    </figure>

                                    <div class="ImageOverlayH"></div>

                                    <div class="Buttons StyleSc">
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#Modal-img2">
                                                <i class="icon-picture"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#Modal-img5">
                                                <i class="icon-video"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#myModal-2">
                                                <i class="icon-info"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element drawing" data-symbol="Te" data-category="metalloid">
                            <div class="blog-post">
                                <div class="ImageWrapper">
                                    <figure>
                                        <img class="img-responsive" src="<?php echo base_url ?>college-application/img/gallery/item4.jpg" alt="//">
                                    </figure>

                                    <div class="ImageOverlayH"></div>

                                    <div class="Buttons StyleSc">
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#Modal-img4">
                                                <i class="icon-picture"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#Modal-video4">
                                                <i class="icon-video"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#myModal-4">
                                                <i class="icon-info"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element design" data-symbol="Bi" data-category="post-transition">
                            <div class="blog-post">
                                <div class="ImageWrapper">
                                    <figure>
                                        <img class="img-responsive" src="<?php echo base_url ?>college-application/img/gallery/item6.jpg" alt="//">
                                    </figure>

                                    <div class="ImageOverlayH"></div>

                                    <div class="Buttons StyleSc">
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#Modal-img6">
                                                <i class="icon-picture"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#Modal-video6">
                                                <i class="icon-video"></i>
                                            </a>
                                        </span>
                                        <span class="WhiteRounded">
                                            <a href="#" data-toggle="modal" data-target="#myModal-6">
                                                <i class="icon-info"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- #container -->
                    <!--end filter portfolio-->
                <!--</div>
            </div>
        </div>
	</section>-->
	<!-- end Gallery -->


	<!-- Logos -->
	<!---<section data-scroll-index='1' class="logos generic" style="padding-top:11%">
        <div class="container">
            <div class="row text-center">
                
                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3 animated fadeIn" data-animation-delay="0.7s" data-animation="fadeIn">
                    <div class="blog-post">
                        <div class="ImageWrapper ContentWrapperN chrome-fix">
                            <figure>
                                <img class="img-responsive" src="<?php echo base_url ?>college-application/img/logo1.png" alt="">
                            </figure>

                            <div class="ContentN">
                                <div class="Content">
                                    <h4>
                                        Lorem Ipsum
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3 animated fadeIn" data-animation-delay="0.7s" data-animation="fadeIn">
                    <div class="blog-post">
                        <div class="ImageWrapper ContentWrapperN chrome-fix">
                            <figure>
                                <img class="img-responsive" src="<?php echo base_url ?>college-application/img/logo2.png" alt="">
                            </figure>

                            <div class="ContentN">
                                <div class="Content">
                                    <h4>
                                        Lorem Ipsum
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3 animated fadeIn" data-animation-delay="0.7s" data-animation="fadeIn">
                    <div class="blog-post">
                        <div class="ImageWrapper ContentWrapperN chrome-fix">
                            <figure>
                                <img class="img-responsive" src="<?php echo base_url ?>college-application/img/logo3.png" alt="">
                            </figure>

                            <div class="ContentN">
                                <div class="Content">
                                    <h4>
                                        Lorem Ipsum
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3 animated fadeIn" data-animation-delay="0.7s" data-animation="fadeIn">
                    <div class="blog-post">
                        <div class="ImageWrapper ContentWrapperN chrome-fix">
                            <figure>
                                <img class="img-responsive" src="<?php echo base_url ?>college-application/img/logo4.png" alt="">
                            </figure>

                            <div class="ContentN">
                                <div class="Content">
                                    <h4>
                                        Lorem Ipsum
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
	</section>--->
	<!-- end Logos -->


	<!-- Testimonials -->
	<section data-scroll-index='2' class="testimonial generic" style="padding-top:11%">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h2>Your Feedback</h2>
                    <p>We could talk for hours about how good we are and efficient
                       but your opinion will always be the truest and most important.
                       We are the creative agency with 99.9% of satisfied customers.
                    </p>
                    <!-- sliderTestimonial -->
                    <div class="slider_testimonial">
                        <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-captions" data-slide-to="1"></li>
                                <li data-target="#carousel-example-captions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <figure>
                                        <img class="img-circle" src="<?php echo base_url ?>college-application/img/testimonials/testimonial1.jpg" alt="First slide image">
                                    </figure>

                                    <div class="carousel-caption col-xs-12">
                                        <h4>Stephan Kendall</h4>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <figure>
                                        <img class="img-circle" src="<?php echo base_url ?>college-application/img/testimonials/testimonial2.jpg" alt="gaSecond slide image">
                                    </figure>

                                    <div class="carousel-caption col-xs-12">
                                        <h4>Stephan Kendall</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <figure>
                                        <img class="img-circle" src="<?php echo base_url ?>college-application/img/testimonials/testimonial3.jpg" alt="Third slide image">
                                    </figure>
                                    <div class="carousel-caption col-xs-12">
                                        <h4>Stephan Kendall</h4>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /sliderTestimonial -->
                </div>
            </div>
        </div>
	</section>
	<!-- end Testimonials -->


	<!-- Countdown -->
    <!--<section id="menu-countdown" class="countdown generic examples examples--styled">
        <div class="example example--circle">
                <div class="countdown">
                    <div class="circle hidden">
                        <canvas id="days" width="408" height="408"></canvas>
                        <div class="circle__values">
                            <span class="ce-digit ce-days"><span class="ce-days-digit">3</span><span class="ce-days-digit">1</span><span class="ce-days-digit">1</span></span>
                            <span class="ce-label ce-days-label">Days</span>
                        </div>
                    </div>
                    <div class="circle">
                        <canvas id="hours" width="408" height="408"></canvas>
                        <div class="circle__values">
                            <span class="ce-digit ce-hours"><span class="ce-hours-digit">1</span><span class="ce-hours-digit">7</span></span>
                            <span class="ce-label ce-hours-label">Hours</span>
                        </div>
                    </div>
                    <div class="circle">
                        <canvas id="minutes" width="408" height="408"></canvas>
                        <div class="circle__values">
                            <span class="ce-digit ce-minutes"><span class="ce-minutes-digit">2</span><span class="ce-minutes-digit">5</span></span>
                            <span class="ce-label ce-minutes-label">Minutes</span>
                        </div>
                    </div>
                    <div class="circle">
                        <canvas id="seconds" width="408" height="408"></canvas>
                        <div class="circle__values">
                            <span class="ce-digit ce-seconds"><span class="ce-seconds-digit">3</span><span class="ce-seconds-digit">2</span></span>
                            <span class="ce-label ce-seconds-label">Seconds</span>
                        </div>
                    </div>
                </div>
            <h2>before it ends</h2>
        </div>
    </section>-->
	<!-- end Countdown -->


	<!-- Pricing Table -->
	<section data-scroll-index='3' class="price generic" style="padding-top:11%">
        <div class="container text-center">
            <div class="row">
                <h2>Pricing Table</h2>
                <p>We could talk for hours about how good we are and efficient but your opinion will always be the truest and most important.
                We are the creative agency with 99.9% of satisfied customers. </p>
                <!--Price-->
                <div class="pricely-chart pricely-professional">

                    <section class="pricely-chart-three col-xs-12">

                        <ul class="pricely-pro">
                            <li class="pricely-first-heading panel-default col-md-3">
                                <div class="panel-heading">
                                    <span class="pricely-label">Features</span>
                                    <p class="pricely-foreword">Select your plan</p>
                                    <p class="pricely-paragraph"><span class="icon-calendar"></span></p>
                                    <p class="pricely-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum primis.</p>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">Built on Bootstrap</li>
                                    <li class="list-group-item">HTML5 / CSS3</li>
                                    <li class="list-group-item">Responsive</li>
                                    <li class="list-group-item">Elegant Design</li>
                                    <li class="list-group-item">Color Choices</li>
                                    <li class="list-group-item">CSS3 Transitions</li>
                                    <li class="list-group-item">Tooltips, modal and more...</li>
                                </ul>
                            </li>

                            <li class="pricely-inner panel-info col-xs-12 col-md-3">
                                <div class="panel-heading">
                                    <span class="pricely-label">Starter</span>
                                    <span class="pricely-foreword">Up to 3 members</span>
                                    <div class="pricely-figure">
                                        <span class="pricely-currency">$</span>
                                        <span class="pricely-amount">19</span>
                                    </div>
                                    <span class="pricely-button"><a href="http://themeforest.net/user/CoralixThemes/portfolio" class="btn btn-lg btn-info"><i class="icon-basket"></i> Purchase</a></span>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item"><span class="icon-check glyphicon"></span><span class="feature-hide">Built on Bootstrap</span></li>
                                    <li class="list-group-item"><span class="icon-check glyphicon"></span> <span class="feature-hide">HTML5 / CSS3</span></li>
                                    <li class="list-group-item"><span class="icon-check glyphicon"></span> <span class="feature-hide">Responsive</span></li>
                                    <li class="list-group-item"><span class="icon-check glyphicon"></span> <span class="feature-hide">Elegant Design</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-cancel x"></span> <span class="feature-hide">Color Choices</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-cancel x"></span> <span class="feature-hide">CSS3 Transitions</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-cancel x"></span> <span class="feature-hide">Color Choices</span></li>
                                </ul>
                            </li>

                            <li class="pricely-inner panel-danger col-xs-12 col-md-3">
                                <div class="panel-heading">
                                    <span class="pricely-label">Professional</span>
                                    <span class="pricely-foreword">Up to 10 members</span>
                                    <div class="pricely-figure">
                                        <span class="pricely-currency">$</span>
                                        <span class="pricely-amount">49</span>
                                    </div>
                                    <span class="pricely-button"><a href="http://themeforest.net/user/CoralixThemes/portfolio" class="btn btn-lg btn-danger"><i class="icon-basket"></i> Purchase</a></span>
                                </div>

                                <ul class="list-group">
                                    <li class="list-group-item"><span class="glyphicon icon-check"></span> <span class="feature-hide">Built on Bootstrap</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-check"></span> <span class="feature-hide">HTML5 / CSS3</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-check"></span> <span class="feature-hide">Responsive</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-check"></span> <span class="feature-hide">Elegant Design</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-check"></span> <span class="feature-hide">Color Choices</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-cancel-circled x"></span> <span class="feature-hide">CSS3 Transitions</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-cancel-circled x"></span> <span class="feature-hide">Tooltips, modal and more...</span></li>
                                </ul>
                            </li>

                            <li class="pricely-inner panel-success col-xs-12 col-md-3">
                                <div class="panel-heading">
                                    <span class="pricely-label">Advanced</span>
                                    <span class="pricely-foreword">Up to 20 members</span>
                                    <div class="pricely-figure">
                                        <span class="pricely-currency">$</span>
                                        <span class="pricely-amount">99</span>
                                    </div>
                                    <span class="pricely-button"><a href="http://themeforest.net/user/CoralixThemes/portfolio" class="btn btn-lg btn-success"><i class="icon-basket"></i> Purchase</a></span>
                                </div>

                                <ul class="list-group">
                                    <li class="list-group-item"><span class="glyphicon icon-plus-circled"></span> <span class="feature-hide">Built on Bootstrap</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-plus-circled"></span> <span class="feature-hide">HTML5 / CSS3</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-plus-circled"></span> <span class="feature-hide">Responsive</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-plus-circled"></span> <span class="feature-hide">Elegant Design</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-plus-circled"></span> <span class="feature-hide">Color Choices</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-plus-circled"></span> <span class="feature-hide">CSS3 Transitions</span></li>
                                    <li class="list-group-item"><span class="glyphicon icon-minus-circled x"></span> <span class="feature-hide">Tooltips, modal and more...</span></li>
                                </ul>
                            </li>
                        </ul>

                    </section>

                </div>
                <!--Price-->
        
            </div>
        </div>
	</section>
	<!-- end Pricing Table -->


	<!-- Contact -->
	<!--<section id="menu-contract" class="contract generic">
        <div class="container text-center">
            <div class="row">
        
                <h2>Find out more </h2>
                <p>You'll earn badges as you journey through our extensive library of courses.
                    These badges are an indicator of what skills you currently possess and are viewable by anyone online. </p>
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <form id="contact" class="form" role="form" action="contact-form.php" method="post" accept-charset="utf-8">
                        <div class="form-group">
                            <div class="col-xs-12 col-md-6 col-lg-6">
                                <label for="fisrt_name" class="label">First Name</label>
                                <input id="fisrt_name" type="text" name="name" value="" class="form-control input-lg" placeholder="First Name"  />
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-6">
                                <label for="last_name" class="label">Last Name</label>
                                <input id="last_name" type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name"  />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-md-6">
                                <label for="last_name" class="label">Email</label>
                                <input type="email" name="email" value="" class="form-control input-lg" placeholder="Email"  />
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="last_name" class="label">Tel Number</label>
                                <input type="tel" name="phone" value="" class="form-control input-lg" placeholder="Tel Number"  />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-md-6">
                                <label for="last_name" class="label">Company</label>
                                <input type="text" name="company" value="" class="form-control input-lg" placeholder="Company"  />
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="last_name" class="label">Zip code</label>
                                <input type="text" name="zip" value="" class="form-control input-lg" placeholder="Zip Code"  />
                            </div>
                        </div>
                        <div class="content_button">
                            <button class="btn-default btn-lg button_generic" type="submit">
                                <i class="icon-paper-plane"></i>
                                Contact Us Today
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
	</section>-->
	<!-- end Contact -->


	<!-- Contact-->
	<section data-scroll-index='4' class="contact generic" style="padding-top:11%">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <i class="icon-mobile"></i>
                    <h2> 123-456-789</h2>
                    <p>Call from Monday to Friday from 09:00 to 12:00 and from 15:00 to 18:00</p>
                </div>
            </div>
        </div>
	</section>
	<!-- end Contact -->


	<!-- social -->
	<!--<section id="menu-contact" class="social generic">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <h2> We love Social</h2>
                    <ul class="social-icons">
                        <li class="tooltip_hover"  title="Twitter" data-placement="bottom"  data-toggle="tooltip"><a class="icon-twitter-circled1 effect_icon" href="#"><i class="icon-twitter-circled"></i></a></li>
                        <li class="tooltip_hover" title="Facebook" data-placement="bottom"  data-toggle="tooltip"><a class="icon-facebook-circled1 effect_icon"  href="#" ><i class="icon-facebook-circled"></i></a></li>
                        <li class="tooltip_hover"  title="Google" data-placement="bottom"  data-toggle="tooltip"><a class="icon-dribbble-circled1 effect_icon" href="#"><i class="icon-dribbble-circled"></i></a></li>
                        <li class="tooltip_hover" title="Vimeo" data-placement="bottom"  data-toggle="tooltip"><a class="icon-vimeo-circled1 effect_icon" href="#"><i class="icon-vimeo-circled"></i></a></li>
                        <li class="tooltip_hover"  title="Linkedin" data-placement="bottom"  data-toggle="tooltip"><a class="icon-linkedin-circled1 effect_icon" href="#"><i class="icon-linkedin-circled"></i></a></li>
                        <li class="tooltip_hover" title="Pinterest" data-placement="bottom"  data-toggle="tooltip"><a class="icon-pinterest-circled1 effect_icon" href="#"><i class="icon-pinterest-circled"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
	</section>-->
	<!-- end social -->


    <!-- links -->
    <!-- from meet univ starts -->
		<footer id="menu-contact" class="clearfix" role="contentinfo" style="
    height: 277px;
">
         <section id="secondary_footer">
			<div class="container" style="width:980px;">
								<div class="row">
					<div class="span2">
						<ul class="nav nav-list">
						  <h5 style="padding-top:5px;font-size:15px;font-weight:bold;">College<br>
							 Search
						  </h5>
						  <li><a href="http://meetuniv.com/college"> College Search</a></li>
						  <li><a href="http://meetuniv.com/college"> Colleges by Country</a></li>
						  <li><a href="http://meetuniv.com/college"> Popular College</a></li>
						  <li><a href="http://meetuniv.com/college"> Popular Countries </a></li>
					   </ul>
					</div>
					<div class="span2">
						<ul class="nav nav-list">
						  <h5 style="padding-top:5px;font-size:15px;font-weight:bold;"> Country<br>
							 Search
						  </h5>
						  <li><a href="http://meetuniv.com/college"> Study In UK</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Study In USA</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Study In Singapore</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Study In Dubai</a></li>
					   </ul>
					</div>
					<div class="span2">
						<ul class="nav nav-list">
						  <h5 style="padding-top:5px;font-size:15px;font-weight:bold;">College<br>
							 Connect
						  </h5>
						  <li><a href="http://meetuniv.com/connect"> Meet UK Universities</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Meet USA Universities</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Meet Singapore Universities</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Meet Australian Universities</a></li>
					   </ul>
					</div>
					<div class="span2">
						<ul class="nav nav-list">
						  <h5 style="padding-top:5px;font-size:15px;font-weight:bold;">College<br>
							 Application
						  </h5>
						  <li><a href="<?php echo base_url; ?>college-application/resume-writing.php"> Resume Writing</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Statement of Purpose</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Interview Tips</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Premium College Counselling </a></li>
					   </ul>
					</div>
					<div class="span2">
						<ul class="nav nav-list">
						  <h5 style="padding-top:5px;font-size:15px;font-weight:bold;">Coaching<br><br>
						  </h5>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> IELTS Video Tutorials</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Career Stream Chooser</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Expert Advice</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> Business Games </a></li>
					   </ul>
					</div>
					<div class="span2">
						<ul style="margin-right:0; padding-right:0; float:right; margin-left:0;" class="nav nav-list">
						  <h5 style="padding-top:5px;font-size:15px;font-weight:bold;">Other <br>
							 Resources
						  </h5>
						  <li><a href="http://myieltsguru.com/"> myieltsguru.com</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> mygmatguru.com</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> mygreguru.com</a></li>
						  <li><a href="http://meetuniv.com/contact-us?type=4"> iamgifted.in</a></li>
					   </ul>
					</div>
				</div>
			</div>
			<div class="static_bar">
				<div class="container">
					<div class="row">
						<div class="span4">
							<!-- <ul class="inline footer_icons">
  								<li><a href="https://www.facebook.com/Meetuniv"><i class="icon-facebook-sign"></i></a></li>
								<li><a href="https://twitter.com/MeetUniv"><i class="icon-twitter-sign"></i></a></li>
								<li><a href="http://www.youtube.com/MeetUniv"><i class="icon-youtube-sign"></i></a></li>
  							</ul> -->
  						</div>
  						<div class="span8">
							<ul class="inline text-right">
								<li><a href="http://meetuniv.com/about-us">About Us</a></li>
								<li><a href="http://meetuniv.com/contact-us?type=2">Jobs</a></li>
								<li><a href="#">Team</a></li>
								<li><a href="#">Disclaimer</a></li>
								<li><a href="http://meetuniv.com/terms">Terms &amp; Condition</a></li>
								<li><a href="http://meetuniv.com/privacy-policy">Privacy Policy</a></li>
								<li><a href="#">Feedback</a></li>
								<li><a href="http://meetuniv.com/contact-us?type=1">Contact Us</a></li>
  							</ul>
  						</div>
  					</div>              	
  				</div>
			</div>
         </section>
         
      </footer>
   
    

</body>
</html>


    <!-- ======================= JQuery libs =========================== -->

        <!-- jQuery -->
        <script src="js/jquery-1.9.1.min.js"></script>

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>

        <!--[if lte IE 8]>
            <script src="js/respond.min.js"></script>
        <![endif]-->

        <!--Scroll To-->         
        <script src="js/nav/jquery.scrollTo.js"></script> 
        <script src="js/nav/jquery.nav.js"></script>

        <!-- Video Responsive-->
        <script src="js/fitvids/jquery.fitvids.js"></script>

        <!--filter portfolio-->
        <script src="js/isotope/jquery.isotope.js" type="text/javascript"></script>

    	<!-- Fixed menu -->
        <script src="js/jquery-scrolltofixed.js"></script> 

        <!-- clock -->
        <script src="js/clock/jquery.js"></script>
        <script src="js/clock/modernizr-2.js"></script>
        <script src="js/clock/main.js"></script>
		<script src='js/scrollIt.min.js' type='text/javascript'></script>

    	<!-- Custom -->
        <script src="js/script.js"></script>
<script>
$(document).ready(function(){
	$.scrollIt();
	
	$('#resumeWriting').hover(function(){
		$('#subMenu').show();
	},function(){
		$('#subMenu').hide();
	});
	
	/* $('#resumeFrm').submit(function(e) {
        var resume = $('#resume').val();
		//alert(resume);return;
        $.ajax({
        type: "POST",
        url: "http://rezscore.com/a/34ad8b/grade/index.xml",
        data: {resume:resume},
        //dataType: "json",
        success: function(data){
			alert(data);
            //$("loading").html("here i am"); 
            }
		}); 
        return false;
        
         
    }); */
});
</script>

  <!-- ======================= End JQuery libs ======================= -->