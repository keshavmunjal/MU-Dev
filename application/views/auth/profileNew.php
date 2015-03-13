

<div id="avatarModal" class="modal hide fade">



    <div class="modal-header">

            <button class="close" data-dismiss="modal">×</button>

            <h3 id="eventName">Choose Avatar</h3>

    </div>

<div class="modal-body">

    <div class="row-fluid">

        <div class="span12">

            <div class="span3">

				<img src="<?php echo base_url();?>uploads/user_pic/muAvatar1.png?>" class="avatar" style="height:100px;width:90px;" rel="muAvatar1.png">

			</div>

			<div class="span3">

				<img src="<?php echo base_url();?>uploads/user_pic/muAvatar2.png?>" class="avatar"  style="height:100px;width:90px;"  rel="muAvatar2.png">

			</div>

			<div class="span3">

				<img src="<?php echo base_url();?>uploads/user_pic/muAvatar3.png?>" class="avatar"  style="height:100px;width:90px;" rel="muAvatar3.png">

			</div>

			<div class="span3">

				<img src="<?php echo base_url();?>uploads/user_pic/muAvatar4.png?>" class="avatar"  style="height:100px;width:90px;" rel="muAvatar4.png">

			</div>

        </div>

	</div>

</div>

    <div class="modal-footer">

        <p>&copy; MeetUniv.Com</p>

    </div>

</div>

<!--main-->



      <div role="main" id="main">



         <div class="row container no_padding" id="register_page" >



            <ul class="breadcrumb univ_breadcrumb">



               <li><a href="#">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>



               <li class="active">Edit Profile</li>



            </ul>



            <section id="register_page_steps">



               <div class="well container">



                  <!--<h2 class="pull-left">Complete Your Profile Dashboard</h2>



                  <aside class="pull-right" id="step"><img  src="<?php echo base_url();?>assets/img/s_1.png"></aside>-->

				<div class="row">

					<div class="span6">

						<h4 class="user-name"><strong><?php echo $userData['fullname']?></strong> 

						<small>- Complete Your Profile Dashboard</small></h4>

					</div>

					<div class="span6 steps">

					  <span class="">

						<img  src="<?php echo base_url();?>assets/img/s_1.png">

					  </span>

					</div>

				</div>

               </div>



               <!--<div class="name">



                  <div  class="well well-small">



                     <h2><?php echo $userData['fullname']?></h2>



                  </div>



               </div>-->



               <div id="l_more">



                  <div class="well well-small">



                     <h4>Tell Us Little More!</h4>



                  </div>



               </div>



			   <?php



				$dob=array(



						'name'	=>	'dob',



						'id'	=>	'dob',



						'value'	=>	set_value('dob'),



						'class'	=> 	'span4',



						'placeholder'=>"dd-mm-yy",



						'type'	=> "hidden"



				);



				$gender=array(



						0=>array(



								'name'	=>	'gender',



								'checked'=>	true,



								'value'	=>	'male'



								),



						1=>array(



								'name'	=>	'gender',

								'checked'=>	true,

								'value'	=>	'female'



								)



				);



				$profile_pic=array(



						'name'	=>	'profile_pic',



						'id'	=>	'profile_pic',



						'value'	=>	'choose file',



				);



				



				?>



			   <?php echo form_open_multipart($this->uri->uri_string());?>

				<div class="row">

               <article class="span6 l_col_sing">



                  



				<div class="controls controls-row">



					<h4>D.O.B</h4>

						<?php 

						$month=$date=$year=0;
						//echo "<pre>";print_r($user_profile);
						if($user_profile){
							$birthday = explode("-", $user_profile[0]['dob']);

							$year=$birthday[0]; 
							
							$month=$birthday[1]; 

							$date=$birthday[2]; 
						}
						
						/* if($this->session->userdata('birthday'))

						{

							$dob=$this->session->userdata('birthday');

							$birthday = explode("/", $dob);

							$month=$birthday[0]; 

							$date=$birthday[1]; 

							$year=$birthday[2]; 

						} */			

						?>

                       <select class="span1" id="birthDay" onchange="changeDob();">



						<option value="0">Date</option>

						

						<?php 



						for($counter=1;$counter<=31;$counter++)



						{



						?>



						<option value="<?php echo $counter;?>" <?php echo ($date==$counter)?"selected":"";?>><?php echo $counter;?></option>



						<?php



						}



						?>



					</select>



					<select class="span1" id="birthMonth" onchange="changeDob();">



						<option value="0" <?php echo ($month==0)?"selected":"" ?>>Month</option>

						<option value="1" <?php echo ($month==1)?"selected":"" ?>>Jan</option>

						<option value="2" <?php echo ($month==2)?"selected":"" ?>>Feb</option>

						<option value="3" <?php echo ($month==3)?"selected":"" ?>>Mar</option>

						<option value="4" <?php echo ($month==4)?"selected":"" ?>>Apr</option>

						<option value="5" <?php echo ($month==5)?"selected":"" ?>>May</option>

						<option value="6" <?php echo ($month==6)?"selected":"" ?>>Jun</option>

						<option value="7" <?php echo ($month==7)?"selected":"" ?>>Jul</option>

						<option value="8" <?php echo ($month==8)?"selected":"" ?>>Aug</option>

						<option value="9" <?php echo ($month==9)?"selected":"" ?>>Sep</option>

						<option value="10"<?php echo ($month==10)?"selected":"" ?>>Oct</option>

						<option value="11"<?php echo ($month==11)?"selected":"" ?>>Nov</option>

						<option value="12"<?php echo ($month==12)?"selected":"" ?>>Dec</option>



					</select>



					<select class="span2" id="birthYear" onchange="changeDob();">



						<option value="0">Year</option>



						<?php for($counter=1970;$counter<=2005;$counter++)



						{



						?>



						<option value="<?php echo $counter;?>" <?php echo ($year==$counter)?"selected":"";?> ><?php echo $counter;?></option>



						<?php



						}



						?>



					</select>



					<span class="help-inline" style="color:red;"><?php echo form_error($dob['name'])?></span>



					<?php //echo form_input($dob);?>

					<input type="hidden" name="dob" id="dob" value="<?php echo ($date)?$year."/".$month."/".$date:"";?>">



				</div>



				<div class="control-group">



				<h4>Gender</h4>



					<div class="controls">



                           <!--<input type="radio" name="radio"  class="styled" selected>-->
							


						   <label class="radio inline span1 no_margin">


							
						   <?php 
								$radio_is_checked = $user_profile[0]['gender'] === 'male';
								echo form_radio('gender', 'male', $radio_is_checked, 'id=male');
							?>



                           <img src="<?php echo base_url();?>assets/img/man.png">



						   </label>


						
                           <!--<input type="radio" name="radio"  class="styled">-->
							


						   <label class="radio inline">

							
							<?php 
								$radio_is_checked = $user_profile[0]['gender'] === 'female';
								echo form_radio('gender', 'female', $radio_is_checked, 'id=female');
							?>
						   


                           <img src="<?php echo base_url();?>assets/img/woman.png">



						   </label>



					</div>



				</div>



				<div class="control-group">



					<div class="controls controls-row">



						<h4>Location</h4>



							<select class="span2" name="country" id="country">



								<option value="">Select Country</option>

							<?php

								foreach($country as $country){

							?>
							<?php if($user_profile){?>
								<option value="<?php echo $country['id'];?>"<?php if($user_profile[0]['countryId']==$country['id']) {?>selected="selected" <?php } ?>><?php echo $country['countryName'];?></option>
							<?php }else{?>

								<option value="<?php echo $country['id'];?>"><?php echo $country['countryName'];?></option>
							<?php } }  ?>

							</select>



							<select name="city" class="span2" id="city">



								<option value="">Select City</option>



							</select>



						<span class="help-inline" style="color:red;">



							<?php echo form_error('city');?>



							<?php echo form_error('country');?>



						</span>



					</div>



				</div>



               </article>



               <article class="span5 r_col_sing">



                  <h4> Update profile picture</h4>



                  <div class="profile_pic">



                     <!--<img id="tempraryProfilePic" src="<?php echo base_url();?>assets/img/profile_pic_demo.png" class="pull-left" style="width: 120px;height: 130px;">



                     <div id="profile_text">



                        <p>Update your Profile Picture<br>



                           to give interactive look to <br>



                           your Profile<br>

						   



                        </p>-->

						<ul class="thumbnails avatar-thumb">

						  <li class="span1">

						    

							<a href="#" class="thumbnail">

							  <img src="<?php echo base_url();?>uploads/user_pic/muAvatar1.png?>" class="avatar" style="" rel="muAvatar1.png">

							</a>

							<input type="radio" value="muAvatar1.png" name="avatarRadio" class="avatarRadio" id="avatarRadio" rel="muAvatar1.png" <?php if($user_profile[0]['profilePic'] == "muAvatar1.png"){echo "checked";} ?>/>

						  </li>

						  <li class="span1">

							<a href="#" class="thumbnail">

							  <img src="<?php echo base_url();?>uploads/user_pic/muAvatar2.png?>" class="avatar"  style=""  rel="muAvatar2.png"/>

							</a>

							<input type="radio" value="muAvatar2.png" name="avatarRadio" class="avatarRadio" id="avatarRadio" rel="muAvatar2.png" <?php if($user_profile[0]['profilePic'] == "muAvatar2.png"){echo "checked";} ?>/>

						  </li><li class="span1">

							<a href="#" class="thumbnail">

							  <img src="<?php echo base_url();?>uploads/user_pic/muAvatar3.png?>" class="avatar"  style="" rel="muAvatar3.png"/>

							</a>

							<input type="radio" value="muAvatar3.png" name="avatarRadio" class="avatarRadio" id="avatarRadio" rel="muAvatar3.png" <?php if($user_profile[0]['profilePic'] == "muAvatar3.png"){echo "checked";} ?>/>

						  </li>

						  <li class="span1">

							<a href="#" class="thumbnail">

							  <img src="<?php echo base_url();?>uploads/user_pic/muAvatar4.png?>" class="avatar"  style="" rel="muAvatar4.png"/>

							</a>

							<input type="radio" value="muAvatar4.png" name="avatarRadio" class="avatarRadio" id="avatarRadio" rel="muAvatar4.png" <?php if($user_profile[0]['profilePic'] == "muAvatar4.png"){echo "checked";} ?>/>

						  </li>

						</ul>



                     </div>



                     <div class="clearfix"></div>



					 <div class="span2" style="margin-top:-24px">

						<h4>OR</h4>

                        <input type="file" name="profile_pic" value="Choose File">



                     </div>





                     <!--<div class="span2 no_margin">



                        <input type="radio" name="a" class="styled" />



                        Click Camra 



                     </div>-->



                  </div>

				  <div class="clearfix"></div>

				  <div class="profile_pic">

					<!--<h4>OR</h4>

					<button type="button" class="btn btn-primary btn-small" onclick="uploadAvatar();">Choose Avatar</button>-->

						   <span id="avatarTxt"></span>

						   <input type="hidden" value="<?php echo $user_profile[0]['profilePic']; ?>" name="avatarPic" id="avatarPic"/>

				  </div>

                  <div class="clearfix"></div>



                  <div id="bu_next" class="pull-right">



                     



					 <a href="<?php echo base_url('auth/profileMatch');?>"><button class="btn " type="button">Skip</button></a>



                     <input class="btn " type="submit" name="save_profile" onclick="" value="Next">



                  </div>



               </article>

				</div>

			   <?php echo form_close();
			   $cityName = $this->users->getCityName($user_profile[0]['cityId']);
			   ?>



            </section>



         </div>



      </div>



      <!--end main-->



	  



	  



	<?php $this->load->view('layout/js');?>

	<script src="<?php echo base_url();?>assets/js/select2.js"></script>

	  



	<script>

		$(document).ready(function(){

			$("#city").select2();
			
			$("#city").append("<option value='<?php echo $user_profile[0]['cityId']?>'><?php echo $cityName[0]['cityName'] ?></option>");
			$("#city").select2("val", "<?php echo $user_profile[0]['cityId']?>"); //set the value

			$("#country").change(function(){

				$("#city option").remove();

				url='<?php echo base_url("auth/getCityByCountry")?>';

				countryId = $("#country option:selected").val();

				$.post(url,{countryId:countryId},function(data){//alert(data);

				city = jQuery.parseJSON(data);

				$("#city").append("<option value=''>Select City</option>");

				$.each(city,function(index, value){//alert(value.id+""+value.cityName);

					$("#city").append("<option value='"+value.id+"'>"+value.cityName+"</option>");

				});

				});

			});

			$(".avatar").each(function() {

				$.data(this, 'size', { width: $(this).width(), height: $(this).height() });

			}).hover(function() {

				$(this).stop().animate({ height: $.data(this,'size').height*1.2, 

										 width: $.data(this,'size').width*1.2 });

			}, function() {

				$(this).stop().animate({ height: $.data(this,'size').height, 

										 width: $.data(this,'size').width });

			});

			$(".avatar").click(function(){

				//$("#avatarModal").modal('hide');

				$("#avatarTxt").html($(this).attr('rel'));

				$("#avatarPic").val($(this).attr('rel'));

				$("#tempraryProfilePic").attr('src','<?php echo base_url()?>uploads/user_pic/'+$(this).attr('rel'));

			});

			$(".avatarRadio").click(function(){

				//$("#avatarTxt").html($(this).attr('rel'));

				$("#avatarPic").val($(this).attr('rel'));

				$("#tempraryProfilePic").attr('src','<?php echo base_url()?>uploads/user_pic/'+$(this).attr('rel'));

			});

		});

		

		function changeDob()



		{



			if($("#birthMonth").val()!=0 && $("#birthDay").val()!=0 && $("#birthYear").val()!=0 )



			{



			$("#dob").val($("#birthYear").val()+"/"+$("#birthMonth").val()+"/"+$("#birthDay").val());



			}



		}

		function uploadAvatar()

		{

			$('#avatarModal').modal('show');

		}



	</script>







	  