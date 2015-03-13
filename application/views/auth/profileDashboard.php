<!--main-->
      <div role="main" id="main">
         <div class="row container no_padding" id="contact_page" >
            <ul class="breadcrumb univ_breadcrumb">
               <li><a href="#">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
               <li class="active">Profile Dashboard</li>
            </ul>
            <section id="dashboard_container" >
               <article>
			    <div class="row">
                  <div id="profile_sidebar" class="span3 pull-left">
					 <?php 
							$userId = $this->tank_auth->get_user_id();
							$countResults = $this->collegemodel-> college_count($userId);
							if(empty($countResults)){
								$countResults = 0;
							}
							$collegeName = $this->collegemodel-> getCollegeName($userId);
							//echo $cityId;
							$cityName = $this->collegemodel->getCityName($cityId);
							if(isset($userProfile['profilePic'])&& $userProfile['profilePic'])
							{
								if(substr($userProfile['profilePic'],0,1)=='f')
								{
								?>
								<img src="https://graph.facebook.com/<?php echo substr($userProfile['profilePic'],1)?>/picture?type=large" class="img-circle profile-img"/>
								<?php
								}
								else
								{
						?>
							<img src="<?php echo base_url();?>uploads/user_pic/<?php echo $userProfile['profilePic'];?>" class="img-circle profile-img">
						<?php 
								}
							}
							else
							{
						?>
								<img src="<?php echo base_url();?>assets/img/man.jpg" alt="..." class="img-circle profile-img"> 
						<?php
							} 
						?>
                     <h2><?php echo $userData['fullname']?> </h2>
                     <!--<p>Lorem ipsum dolor sit amet 
                        consectetuer adipiscing
                     </p>-->
                     <br>
					 <div class="span4 center">
							<div id="rotator3" style="height:120px;width:300px"></div>
							<p style="margin-left: 43px;">Profile Status</p>
							<input type="hidden" id="pro_status" value="<?php echo $profileStatus; ?>">
					</div>
                     <!--<img src="<?php echo base_url();?>assets/img/profile_statues.png">
                     <p style="text-align:center;">Profile Status</p>-->
                     <ul id="profile_status" class="inline">
                        <li>Info<span><?php echo $profileStatus; ?>%</span></li>
                        <li>Edu Info<span>0%</span></li>
                        <li>Test<span>0%</span></li>
                     </ul>
                  </div>
                  <article class="span9">
				   <div class="row">
                     <section id="dashboard_cont" class="span6">
                           <ul id="profile_tab" class="nav nav-tabs">
                              <li class="active" ><a href="#Info">Info </a></li>
                              <!--<li><a href="#Edu_ingo" data-toggle="tab">Edu.info</a></li>
                              <li><a href="#Tests" data-toggle="tab">Tests</a></li> ## Commented by Keshav 3/12/2014-->
                           </ul>
                           <div class="tab-content">
                              <div class="active tab-pane row" id="Info">
                                 <section>
                                    <article class="span2">
                                       <h6 class="icon email">Email:</h6>
                                    </article>
                                    <article class="span2 text-right">
                                       <p><?php echo $userData['email'];?></p>
                                    </article>
                                 </section>
                                 <section>
                                    <article class="span2">
                                       <h6 class="icon graduate">Graduation:</h6>
                                    </article>
									<?php if(!empty($userProfileMatch['fieldsUG'])){?>
                                    <article class="span2 text-right">
                                       <p><?php echo $userProfileMatch['fieldsUG'];?></p>
                                    </article>
									<?php }else{ ?>
									<article class="span2 text-right">
                                       <p>Not updated.</p>
                                    </article>
									<?php } ?>
                                 </section>
                                 <section>
                                    <article class="span2">
                                       <h6 class="icon loc">Location</h6>
                                    </article>
                                    <article class="span2 text-right">
                                       <p><?php echo $cityName[0]->cityName;?></p>
                                    </article>
                                 </section>
                                 <section>
                                    <article class="span2">
                                       <h6 class="icon looking">Looking For</h6>
                                    </article>
									<?php if(!empty($userProfileMatch['lookingFor'])){?>
                                    <article class="span2 text-right">
                                       <p><?php echo $userProfileMatch['lookingFor'];?></p>
                                    </article>
									<?php }else{ ?>
									<article class="span2 text-right">
                                       <p>Not updated.</p>
                                    </article>
									<?php } ?>
                                 </section>
                                 <section id="recent_events" class="span5 ">
                                    <h2>Upcoming Events</h2>
									<form method="post" action="" onchange="getFormVal();">
									<select name="city" id="city" style="margin-left: 273px;width: 142px;margin-top: -78px;height: 26px;">
										<option value="" selected="selected">Select City</option>
										<option value="643" <?php if(!empty($cityId) && $cityId=='643') {?>selected="selected" <?php } ?>>Delhi</option>
										<option value="1384" <?php if(!empty($cityId) && $cityId=='1384') {?>selected="selected" <?php } ?>>Mumbai</option>
										<option value="1147" <?php if(!empty($cityId) && $cityId=='1147') {?>selected="selected" <?php } ?>>Kolkata</option>
										<option value="585" <?php if(!empty($cityId) && $cityId=='585') {?>selected="selected" <?php } ?>>Chennai</option>
										<option value="2160" <?php if(!empty($cityId) && $cityId=='2160') {?>selected="selected" <?php } ?>>Bangalore</option>
										<option value="862" <?php if(!empty($cityId) && $cityId=='862') {?>selected="selected" <?php } ?>>Hyderabad</option>
										<option value="326" <?php if(!empty($cityId) && $cityId=='326') {?>selected="selected" <?php } ?>>Ahemdabad</option>
										<option value="1208" <?php if(!empty($cityId) && $cityId=='1208') {?>selected="selected" <?php } ?>>Lucknow</option>
										<option value="326" <?php if(!empty($cityId) && $cityId=='326') {?>selected="selected" <?php } ?>>Chandigarh</option>
										<option value="569" <?php if(!empty($cityId) && $cityId=='569') {?>selected="selected" <?php } ?>>Pune</option>
										<option value="1637" <?php if(!empty($cityId) && $cityId=='1637') {?>selected="selected" <?php } ?>>Cochin</option>
										<option value="868" <?php if(!empty($cityId) && $cityId=='868') {?>selected="selected" <?php } ?>>Indore</option>
									</select>
									</form>
									<div id="recentEventByCity" style="height: 800px;">
									<?php 
									$counter=1;
									foreach($recentEvents as $event)
									{
									$univName=$this->connectmodel->getUniversityNameById($event['univId']);
									?>
                                    <article class="alert" id="recentEvent" style="height: auto;">
                                       <h3><?php echo $univName;?></h3>
                                       <div class="span2"><?php echo $event['tagLine'];?>
                                       </div>
                                       <div class="span1"><i class="icon-calendar"  style="font-size:14px"></i>&nbsp;<?php echo $event['date'];?><br>
									   <i class="icon-time" style="font-size:14px"></i>&nbsp;<?php echo $event['time'];?>
                                       </div>
                                       <a class="close" data-dismiss="alert" href="#">&times;</a> 
									   <button class="btn btn-mini btn-primary voilet" type="button" id="attending-<?php echo $counter;?>" onclick="showAttending(this.id);" style="margin-left: 325px;margin-top: 14px;">I am Attending</button>
									   <section class="attending attending-<?php echo $counter;?>" id="attending" style="margin:0px;padding-top:10px;display:none;">
										 <div class="input-prepend"> <span class="add-on"><img src="<?php echo base_url();?>assets/img/name-icon.png"></span>
											<input class="input-small name" id="name-<?php echo $counter;?>" type="text" placeholder="Full Name:" value="<?php //echo (isset($userData)&&$userData)?$userData['fullname']:'';?>" style="padding:2px 0px;">
											
											<input type="hidden" id="connectid-<?php echo $counter;?>" name="connectid-<?php echo $counter;?>" value="<?php echo $event['id'];?>">
											
										 </div>
										 <div class="input-prepend"> <span class="add-on"><img src="<?php echo base_url();?>assets/img/mail-icon.png"></span>
											<input class="input-small email" id="email-<?php echo $counter;?>" type="text" placeholder="Email:" value="<?php //echo (isset($userData)&&$userData)?$userData['email']:'';?>" style="padding:2px 0px;">
										 </div>
										 <div class="input-prepend"> <span class="add-on"><img src="<?php echo base_url();?>assets/img/cell-icon.png"></span>
											<input class="input-small phone" id="phone-<?php echo $counter;?>" type="text" placeholder="Mobile No:" value="<?php //echo (isset($userData)&&$userData)?$userData['mobile']:'';?>" style="padding:2px 0px;">
										 </div>
										 <input class="input-small" id="connect-<?php echo $counter;?>" value="<?php echo $event['id'];?>" type="hidden">
										 <button class="btn btn-mini btn-primary green_bu" type="button" onclick="attendEvent(<?php echo $counter;?>)">Connect</button>
									</section>
									<img src="<?php echo base_url()?>assets/images/form_preloader.gif" style="display: none; margin-left:210px;" id="loader-<?php echo $counter;?>"/>
									<section id="attendingsuccess" class="attendingsuccess-<?php echo $counter;?>" style="font-size:12px;color: green;display:none;">
										 <strong>You have successfully registered for this event!</strong>
									</section>
                                    </article>
									
									<?php 
									$counter++;
									}?>
									</div>
                                 </section>
                              </div>
                              <div class="tab-pane" id="Edu_ingo">Coming Soon</div>
                              <div class="tab-pane" id="Tests" style="margin-top: 40px;"><h5>Click to Download a brief personality profile</h5>
							  <div class="span2  pull-right">
												
									<div class="book" >
									<h6 class="pdf_download" ></h6>
									<a href="<?php echo base_url()?>assets/fpdf.php?value=<?php echo $this->session->userdata('gvalue'); ?>" target="_blank"><img src="<?php echo base_url()?>assets/images/pshycometric_img/img/book.png" style="margin-top:-70px;"></a></div>
								</div>							  
							  </div>
                           </div>
                     </section>
                     <aside id="dashboard_sidebar" class="span3">
                       <h5 class="btn btn-medium" style="margin-left:117px;margin-top:5px;"><a href="<?php echo base_url();?>auth/profile">Edit Profile</a></h5>
                        <!--<h5 class="profile_name"><?php echo $userData['fullname']?> <!--<img src="<?php //echo base_url();?>assets/img/man.jpg" alt="..." class="img-circle" style="width:45px; height:45px;"></h5>-->
                        <!--<ul id="notification" class="unstyled">
                           <li><img src="<?php echo base_url();?>assets/img/arrow-bottom.png"></li>
                           <li><a href="#"><img src="<?php echo base_url();?>assets/img/bell.png"></a><span>6</span></li>
                           <li><a href="#"><img src="<?php echo base_url();?>assets/img/link.png"></a></li>
                           <li><a href="#"><img src="<?php echo base_url();?>assets/img/notice.png"></a></li>
                        </ul>-->
                        <article>
                           <h3 >Saved Events</h3>
                           <p>Still you have not saved any 
                              events!
                           </p>
                        </article>
                        <article>
                           <h3 class="save_college">Saved Colleges</h3>
                           <p>You have saved <?php echo $countResults;?> college</p>
						   <?php foreach($collegeName as $c){ 
								
								$link = str_replace(' ','-',$c['univName']);
								$link = preg_replace('/[^A-Za-z0-9\-]/', '',$link);
							?>
							<ul>
								<li><a style="text-decoration:none" href="<?php echo base_url().strtolower($c['countryName']).'-college/'.$link.'/'.base64_encode($c['id'])?>"><?php echo $c['univName'];?></a></li>
							</ul>
							<?php } ?>
                           <!--<p class="saved"><a href="#">St Georges college of medical science</a> <a class="close" data-dismiss="alert" href="#">&times;</a> </p>-->
                        </article>
                        <!--<article>
                           <h3 class="college">College Search</h3>
                           <p>
						    <ul class="unstyled">
                               <li><a href="#">My colleges </a><span class="badge badge-success pull-right">1</span></li>
                               <li><a href="#"> Saved Colleges </a><span class="badge badge-warning pull-right">2</span></li>
                               <li><a href="#"> Recommended Colleges</a><span class="badge badge-important pull-right">3</span></li>
                            </ul>
						   </p>
                        </article>   ## commented by Keshav 3/12/2014-->
                        <article><a href="https://www.facebook.com/Meetuniv" target="_blank"><img src="<?php echo base_url();?>assets/img/facebook_fane_icon.png"></a></article>
                        <article>
							<?php echo $this->load->view('rotator/profileImgRotator');?>
                           <!--<img src="<?php echo base_url();?>assets/img/british-council.png">
                           <h6>The most trusted source of information about studying in the UK, in association with MeetUniv.com outlines the essential information for you to know & where to begin from.Single source , to keep you updated with the happenings in UK education.
                           </h6>-->
                        </article>
                     </aside>
                   </div>
				  </article>
				</div>
               </article>
            </section>
         </div>
      </div>
      <!--end main-->
	  <?php $this->load->view('layout/js');?>
	  <script src="<?php echo base_url();?>assets/js/rotator.js"></script>
		 <script>
         $(window).load(function () {
            	$("#rotator3").rotator3();
		});
		
		function getFormVal(){
			
			var cityId = $("#city").val();
			var url = '<?php echo base_url()?>connect/getEvent';
			var data = {cityId:cityId};
			$.ajax({
				type	:	'POST',
				data	:	data,
				url		:	url,
				beforeSend: function(){
					$("#recentEventByCity").css('opicity','0.4');
				},
				success: function(data)	
				{	
					if(data){
						$('#recentEventByCity').html('');
						$( "#recentEventByCity" ).append(data);	
					}else{
						$('#recentEventByCity').html('');
						$('#recentEventByCity').append('<p style="margin-left:215px">No Events !</p>');
					}
				},
				
			});
			
		}
		
		function showAttending(id)
		{
			$(".attending").hide();
			$('.'+id).fadeIn();
		}
		
		function attendEvent(id)
		{
			var fullname = $('#name-'+id).val();
			var phone = $('#phone-'+id).val();
			var email  = $('#email-'+id).val();
			var connectId = $('#connectid-'+id).val();
			var valid = true;
			if(fullname=='' || fullname==null)
			{
				$('#name-'+id).addClass('needsfilled');
				valid = false;
			}
			else
			{
				$('#name-'+id).removeClass('needsfilled');
			}
			if(email=='' || email==null)
			{
				$('#email-'+id).addClass('needsfilled');
				valid = false;
			}
			else
			{
				var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;	
				if (reg.test(email) == false) 
				{         
					$('#email-'+id).addClass('needsfilled');
					valid = false;
				}
				else
				{
					$('#email-'+id).removeClass('needsfilled');
				}
			}
			if(phone=='' || phone==null || isNaN(phone) || phone.length!=10)
			{
				$('#phone-'+id).addClass('needsfilled');
				valid = false;
			}
			else
			{
				$('#phone-'+id).removeClass('needsfilled');
			}
			if(valid == true)
			{
			var evenData = {name:$('#name-'+id).val(),phone:$('#phone-'+id).val(),email:$('#email-'+id).val(),connectId:connectId,type:'register'};
			$.ajax({
            type: "POST",
            url: "<?php echo base_url('connect/attendEvent')?>",
            data: evenData,
				beforeSend:function(){
					$('.attending-'+id).hide();
					$("#loader-"+id).show();
				},
				success: function(data) {
					$('#loader-'+id).hide();
					$(".attendingsuccess-"+id).fadeIn();
					var attendCount = parseInt($('#attendCount-'+id).val());
					$('#attendCount-'+id).val(attendCount+1);
					$('#attendCountTxt-'+id).text("+"+(attendCount+1));
					$(".name").val(fullname);
					$(".email").val(email);
					$(".phone").val(phone);
				}
			});
			
			}
		}
      </script>