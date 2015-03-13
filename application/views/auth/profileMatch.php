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
						<img  src="<?php echo base_url();?>assets/img/s_2.png">
					  </span>
					</div>
				</div>
				</div>
               
               <div id="l_more">
                  <div class="well well-small">
                     <h4>Match Me</h4>
                  </div>
               </div>
               <div class="row">
                  <article class="span2 l_col_sing " style="background:none;">
                     <div  class="text-center" id="profile_2">
                        <div id="real_profile_pic"> 
						
						<?php 
							if(isset($userProfile['profilePic']) && $userProfile['profilePic'])

							{
								if(substr($userProfile['profilePic'],0,1)=='f')
								{
								?>
								<img src="https://graph.facebook.com/<?php echo substr($userProfile['profilePic'],1)?>/picture?type=large"/>
								<?php
								}
								else
								{
						?>

							<img src="<?php echo base_url();?>uploads/user_pic/<?php echo $userProfile['profilePic'];?>">
							

						<?php 
								}
							}

							else

							{

						?>

								<img src="<?php echo base_url();?>assets/img/avatar.png"> 

						<?php

							} 

						?>
						</div>
                        <p>
							<?php echo ($userData['fullname']);?>
							<?php echo (isset($userProfile['gender']))?", ".$userProfile['gender']:"";?> <br>
						   <?php echo (isset($userProfile['dob']))?$userProfile['dob']:"";?> 
                        </p>
                        <!--<p class="edit_profile_link"><a href="#">Edit Profile</a></p>-->
                     </div>
                  </article>
                  <article class="span9 r_col_sing">
					<?php
						$school=array(
								'name'	=>	'school',
								'id'	=>	'school',
								'value'	=>	set_value('school'),
								'size'	=>	30,
								'class'	=> 	'span4',
								'placeholder'=> 'School Name'
						);
						$formAttr = array('id' => 'profileMatchForm');
						//echo "<pre>";print_r($userProfile);
					?>
                     <?php echo form_open($this->uri->uri_string(),$formAttr);?>
                    <div class="control-group">
					  <div class="controls">
                           <h4>School Name</h4>
						   <?php //echo form_input($school);
						   if(!empty($userProfile['schoolName'])){
							echo form_input(array("name"=>"school","id"=>"school","value"=>$userProfile['schoolName'],"size"=>"30","class"=>"span4","placeholder"=>"School Name"));
						   }else{
							echo form_input(array("name"=>"school","id"=>"school","value"=>'',"size"=>"30","class"=>"span4","placeholder"=>"School Name"));
						   }
						   ?>
						   
							<span class="help-inline" style="color:red;">
							<?php echo form_error('school');?>
						</span>
					  </div>
					</div>
					<div class="control-group">
					  <div class="controls">
                           <h4>I Have Done</h4>
							<label class="radio inline">
							<?php if(isset($userProfile['lookingFor'])){ ?>
								<input type="radio" value="XII" name="lookingfor" class="lookingfor" rel="XII" <?php if($userProfile['lookingFor'] == "XII"){echo "checked";} ?>/>XII&nbsp;&nbsp;
							<?php }else{ ?>
								<input type="radio" value="XII" name="lookingfor" class="lookingfor" rel="XII" />XII&nbsp;&nbsp;
							<?php } ?>
							</label>
							<label class="radio inline">
							<?php if(isset($userProfile['lookingFor'])){ ?>
								<input type="radio" value="UG" name="lookingfor" class="lookingfor" rel="PG" <?php if($userProfile['lookingFor'] == "UG"){echo "checked";} ?>/>UG&nbsp;&nbsp;
							<?php }else{ ?>
								<input type="radio" value="UG" name="lookingfor" class="lookingfor" rel="PG" />UG&nbsp;&nbsp;
							<?php } ?>
							</label>
							<label class="radio inline">
							<?php if(isset($userProfile['lookingFor'])){ ?>
								<input type="radio" value="PG" name="lookingfor" class="lookingfor" rel="PG" <?php if($userProfile['lookingFor'] == "PG"){echo "checked";} ?>/>PG&nbsp;&nbsp;
							<?php }else{ ?>
								<input type="radio" value="PG" name="lookingfor" class="lookingfor" rel="PG" />PG&nbsp;&nbsp;
							<?php } ?>
							</label>
					  </div>
					</div>
					<div class="controls controls-row" id="XII" <?php if(!empty($userProfile['yearPassOutXII'])){echo "style='display:block;'";}else{echo "style='display:none;'";}?>>
                        <h5>XII Details</h5>
							<!--<input class="span2" type="text" value="" name="XIIyearofpassout" placeholder="Year of Passout">-->
						<select class="span2" name="XIIyearofpassout">
							<option>Year of Passout</option>
							<?php for($counter=2015;$counter>=1995;$counter--)
							{?>
								<?php if(isset($userProfile['yearPassOutXII'])){ ?>
								 <option value="<?php echo $counter;?>" <?php if($userProfile['yearPassOutXII']==$counter) {?>selected="selected" <?php } ?>><?php echo $counter;?></option>
								<?php }else{ ?>
								 <option value="<?php echo $counter;?>"><?php echo $counter;?></option>
							<?php 
								} 
							}
							?>
						</select>
						<input class="span2" type="text" value="<?php if(isset($userProfile['fieldsXII'])){ echo $userProfile['fieldsXII'];} ?>" name="XIIfields" placeholder="Field">
						<div class="control-group">
							<div class="controls">
								<div class="input-append span2">
									<span class="add-on">%</span>
									<input class="span1" type="text" value="<?php if(isset($userProfile['percentageXII'])){ echo $userProfile['percentageXII']; }?>" name="XIIpercentage" id="XIIpercentage" placeholder="%%">
								</div>	
							</div>
						</div>
					</div>
					<div class="controls controls-row" id="UG" <?php if(!empty($userProfile['yearPassOutUG'])){echo "style='display:block;'";}else{echo "style='display:none;'";}?>>
                           <h5>UG Details</h5>
							<!--<input class="span2" type="text" value="" name="UGyearofpassout" placeholder="Year of Passout">-->
							<select class="span2" name="UGyearofpassout">
								<option>Year of Passout</option>
								<?php for($counter=2015;$counter>=1995;$counter--)
								{?>
									<?php if(isset($userProfile['yearPassOutUG'])){ ?>
										<option value="<?php echo $counter;?>" <?php if($userProfile['yearPassOutUG']==$counter) {?>selected="selected" <?php } ?>><?php echo $counter;?></option>
									<?php }else{ ?>
										<option value="<?php echo $counter;?>"><?php echo $counter;?></option>
								<?php
									}
								}?>
							</select>
							<input class="span2" type="text" value="<?php if(isset($userProfile['fieldsUG'])){ echo $userProfile['fieldsUG'];} ?>" name="UGfields" placeholder="Fields">
							<div class="control-group">
								<div class="controls">
									<div class="input-append span2">
										<span class="add-on">%</span>
										<input class="span1" type="text" value="<?php if(isset($userProfile['percentageUG'])){ echo $userProfile['percentageUG'];} ?>" name="UGpercentage" id="UGpercentage" placeholder="%%">
									</div>
								</div>
							</div>
					</div>
					<div class="controls controls-row" id="PG" <?php if(!empty($userProfile['yearPassOutPG'])){echo "style='display:block;'";}else{echo "style='display:none;'";}?>>
                           <h5>PG Details</h5>
							<!--<input class="span2" type="text" value="" name="PGyearofpassout" placeholder="Year of Passout">-->
							<select class="span2" name="PGyearofpassout">
								<option>Year of Passout</option>
								<?php for($counter=2015;$counter>=1995;$counter--)
								{?>
									<?php if(isset($userProfile['yearPassOutPG'])){ ?>
										<option value="<?php echo $counter;?>" <?php echo $counter;?>" <?php if($userProfile['yearPassOutPG']==$counter) {?>selected="selected" <?php } ?>><?php echo $counter;?></option>
									<?php }else{ ?>
										<option value="<?php echo $counter;?>"><?php echo $counter;?></option>
								<?php 
									}
								}?>
							</select>
							<input class="span2" type="text" value="<?php if(isset($userProfile['fieldsPG'])){ echo $userProfile['fieldsPG'];} ?>" name="PGfields" placeholder="Fields" name="save_profile_match">
							<div class="control-group">
								<div class="controls">
									<div class="input-append span2">
										<span class="add-on">%</span>
										<input class="span1" type="text" value="<?php if(isset($userProfile['percentagePG'])){ echo $userProfile['percentagePG'];} ?>" name="PGpercentage" id="PGpercentage" placeholder="%%">
									</div>
								</div>
							</div>
					</div>
					
                        <!--<div class="input-prepend span2">
                           <h4>Year of Graduation</h4>
                           <select class="span2">
                              <option >City</option>
                           </select>
                        </div>
                        <div class="input-prepend span2 pos_check">
                           <div class="span2" >
                              <input type="checkbox" class="styled" name="checkbox" id="checkbox">
                              <label>If Not Yet</label>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="clearfix span6">
                           <h4>Percentage</h4>
                           <div class="input-append" id="save_me">
                              <input class="span2" type="text">
                              <span class="add-on">%</span> 
                           </div>
                        </div>-->
                        <div class="clearfix"></div>
                        <div id="bu_next" class="pull-right">
                            <a href="<?php echo base_url('auth/profileStep3');?>"><button class="btn " type="button">Skip</button></a>
                           <input class="btn " type="submit" onclick=""  name="save_profile_match" value="Next">
                        </div>
                     <?php echo form_close();?>
                  </article>
               </div>
            </section>
         </div>
      </div>
      <!--end main-->
	  
	  
	  <?php $this->load->view('layout/js');?>
	 <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js" type="text/javascript" ></script>
	  <script>
		$(document).ready(function(){
			$(".lookingfor").click(function(){
				var lookingfor=$(this).val();
				if(lookingfor=='XII')
				{
					$('#XII').show();
					$('#UG').hide();
					$('#PG').hide();
				}
				else if(lookingfor=='UG')
				{
					$('#XII').show();
					$('#UG').show();
					$('#PG').hide();
				}
				else
				{
					$('#XII').show();
					$('#UG').show();
					$('#PG').show();
				}
				
				
			});
			$('#profileMatchForm').validate({
				errorElement: 'span',
				errorClass: 'help-inline',
				focusInvalid: false,
				rules: {
					school: {
						required: true
					},
					XIIpercentage: {
						required: true,
						 range: [1, 100]
					},
					UGpercentage: {
						required: true,
						 range: [1, 100]
					},
					PGpercentage: {
						required: true,
						 range: [1, 100]
					},
				},
		
				messages: {
					XIIpercentage: {
						required: "Please provide a valid Percentage.",
					},
					UGpercentage: {
						required: "Please provide a valid Percentage.",
					},
					PGpercentage: {
						required: "Please provide a valid Percentage.",
					},
				},
		
				invalidHandler: function (event, validator) { //display error alert on form submit   
					$('.alert-error', $('.login-form')).show();
				},
		
				highlight: function (e) {
					$(e).closest('.control-group').removeClass('info').addClass('error');
				},
		
				success: function (e) {
					$(e).closest('.control-group').removeClass('error').addClass('info');
					$(e).remove();
				},
		
				errorPlacement: function (error, element) {
					if(element.is(':checkbox') || element.is(':radio')) {
						var controls = element.closest('.controls');
						if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
						else error.insertAfter(element.nextAll('.lbl').eq(0));
					} 
					else if(element.is('.chzn-select')) {
						error.insertAfter(element.nextAll('[class*="chzn-container"]').eq(0));
					}
					else error.insertAfter(element);
				},
		
				submitHandler: function (form) {
				form.submit();
				},
				invalidHandler: function (form) {
				}
			});
		
		});
		</script>