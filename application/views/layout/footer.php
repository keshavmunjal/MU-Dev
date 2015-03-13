<style>
	.green{background-color: #308462;width: 100%;padding-top: 2px;padding-bottom: 2px;float: left;}
	.custom_font{color: white;font-size: 14px;margin-bottom: 2px !important;margin-left: 6px;}
	.custom_head{margin:0px !important;color: white;font-size: 17px;line-height: 10px;padding-left: 6px;}
	.monfont{font-size: 12px;}
	.yellow{background-color: #faf0ca;width: 63%;float: left;margin-top:5px;}
	.redhead{text-align: center;font-size: 37px;color: #d22c30; margin-top: 0px;margin-bottom: 0px;width: 153px;font-weight: bold;
margin-left: 15px;}
	.red_stu{margin-left: 52px;margin-top: 0px;}
	.White{width:35%; float: right;background-color: #faf3fe;height:auto;margin-top:5px;}
	.green_font{margin: 0px;color: #69ac6c;font-weight: bold;text-align:right;margin-right: 10px;font-weight:bold;}
	.greenhouse{margin-left: 23px;margin-bottom: 2px;}
</style>
<!--Footer-->
      <footer role="contentinfo" class="clearfix" id="main_footer">
         <!--<section id="primary_footer">
            <article class ="row container">
               <div class="span3">
                  <h4>MU Application Edge </h4>
                  <p>Top Universtiy editor, help review your application Know it from people who have been there - done that!</p>
               </div>
               <div class="span3">
                  <h4>Book Store </h4>
                  <p>Need Higher Exam books, Get them at the best price here.</p>
               </div>
               <div class="create_profile span5"> Create a free profile to start saving schools !
                  <a href="<?php echo base_url('register')?>"><button type="submit" class="btn btn-primary">SIGN UP NOW &raquo;</button></a>
               </div>
            </article>
         </section>-->
         <section id="secondary_footer">
			<div class="container">
								<div class="row">
					<div class="span2" style="width: 180px;">
						<ul class="nav nav-list">
						  <h5>Country Search
						  </h5>
						  <li><a href="<?php echo base_url('study-in-uk-universities')?>"> Study In UK</a></li>
						  <li><a href="<?php echo base_url('study-in-usa-universities')?>"> Study In USA</a></li>
						  <li><a href="<?php echo base_url('study-in-australia-universities')?>"> Study In Australia</a></li>
						  <li><a href="<?php echo base_url('study-in-canada-universities')?>"> Study In Canada</a></li>
						  <li><a href="<?php echo base_url('study-in-singapore-universities')?>"> Study In Singapore</a></li>
						  <li><a href="<?php echo base_url('other-universities')?>"> Other Countries </a></li>
					   </ul>
					</div>
					<div class="span2" style="width: 180px;">
						<ul class="nav nav-list">
						  <h5>College Connect
						  </h5>
						  <li><a href="<?php echo base_url('popular-college')?>"> Popular Colleges</a></li>
						  <li><a href="<?php echo base_url('engineering-colleges')?>"> Engineering Colleges</a></li>
						  <li><a href="<?php echo base_url('mba-colleges')?>"> MBA Colleges</a></li>
						  <li><a href="<?php echo base_url('top-ranked-colleges')?>"> Top Ranked Colleges</a></li>
					   </ul>
					</div>
					<div class="span2" style="width: 180px;">
						<!--<ul class="nav nav-list">
						  <h5>Career Edge
						  </h5>
						  <li><a href="<?php echo base_url('contact-us')?>?type=4"> Resume Writing</a></li>
						  <li><a href="<?php echo base_url('contact-us')?>?type=4"> Statement of Purpose</a></li>
						  <li><a href="<?php echo base_url('contact-us')?>?type=4"> Interview Tips</a></li>
						  <li><a href="<?php echo base_url('contact-us')?>?type=4"> Premium College Counselling </a></li>
						  <li><a href="<?php echo base_url('gifted-intro')?>"> Career Stream Chooser</a></li>
						  <li><a href="https://www.meetuniv.com/learn/edurator/catvedio.php?id=5"> IELTS Videos </a></li>
					   </ul>-->
					</div>
					<div class="span4" style="margin-bottom: 10px;">
					<div style="float:left;width:100%;height:auto;margin-top: 14px;margin-left: 40px;">
						<div class="green">
						  <p class ="custom_font">  Call Us</p>
						  <h3 class="custom_head">011 - 41078540</h3>
						  <p class ="custom_font" style="margin-top: 5px;margin-left: -5px;"><span style="margin-left: 7px;margin-right: 7px;padding-left: 6px;"><i class="icon-calendar"></i></span> <span class="monfont">Mon - Fri </span><span style="margin-left: 7px;margin-right: 7px;"><i class="icon-time"></i></span><span  class="monfont">9AM - 6PM</span></p>
						  </div>
						  
						  <div class="yellow">
						  <?php if($totalLeads[0]->num){ ?>
						  <h3 class="redhead"> <?php echo $totalLeads[0]->num;?> + </h3>
						  <?php }else{ ?>
						  <h3 class="redhead"> 70266 + </h3>
						  <?php } ?>
						  <p class="red_stu"><img src="<?php echo base_url()?>assets/img/student.png"></p>
						  </div>
						  
						  <div class="White">
						  <div style="width:100%;float:right;height:auto;">
						  <div class="green_font">3,500</div>
						  <div class="green_font" style="line-height: 6px;">UNIVERSITY</div>
						  <div class="green_font">CONNECT</div>
							</div>
								<div style="float:left;height:auto;width:100%"> <p style="text-align:center;"><img src="<?php echo base_url()?>assets/img/house1.png" style="height: 43px; width: 47px;"></p></div>
						  </div>
						  </div>
					</div>
					
				</div>
			</div>
			<div class="static_bar">
				<div class="container">
					<div class="row">
						<div class="span4">
							<ul class="inline footer_icons">
  								<li><a href="https://www.facebook.com/Meetuniv" target="_blank"><i class="icon-facebook-sign"></i></a></li>
								<li><a href="https://twitter.com/MeetUniv" target="_blank"><i class="icon-twitter-sign"></i></a></li>
								<li><a href="https://www.youtube.com/MeetUniv" target="_blank"><i class="icon-youtube-sign"></i></a></li>
  							</ul>
  						</div>
  						<div class="span8">
							<ul class="inline text-right">
								<li><a href="<?php echo base_url('about-us')?>">About Us</a></li>
								<li><a href="<?php echo base_url('contact-us')?>?type=2">Jobs</a></li>
								<li><a href="#">Team</a></li>
								<li><a href="<?php echo base_url('disclaimer')?>">Disclaimer</a></li>
								<li><a href="<?php echo base_url('terms');?>">Terms & Condition</a></li>
								<li><a href="<?php echo base_url('privacy-policy');?>">Privacy Policy</a></li>
								<li><a href="#">Feedback</a></li>
								<li><a href="<?php echo base_url('contact-us')?>?type=1">Contact Us</a></li>
  							</ul>
  						</div>
  					</div>              	
  				</div>
			</div>
         </section>
         </div>
      </footer>
      <!--end Footer-->
	</body>
</html>
