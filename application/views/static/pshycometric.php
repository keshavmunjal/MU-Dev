<style>
		.white-bg{background:url(assets/images/pshycometric_img/white-bg.jpg) no-repeat; width:586px; height:260px; background-size:cover; margin:10px auto; text-align:center; padding-top:16px; overflow:hidden;}
		.white-bg h2{color:#007bc7;}
		.white-bg input[type="text"]{width:248px; color:#909090; padding-left:10px; height:37px;}
		.white-bg .blue{height:38px; background:url(assets/images/pshycometric_img/bue-btn-bg.jpg) repeat-x; width:134px; color:#fff;border-radius:25px; border:0px solid transparent;}
		.stats-hr{width:280px; border-bottom: 1px solid #999; margin-top:31px; margin-left:20px;}
		.center{text-align:center;}
		.italic{font-style:italic; font-size:14px;}
		.testing-members{ margin:80px 0; overflow:hidden;}
		.person-img{width:137px;}
		.person-details{width:323px;}
		.m-name{color:#3da0ea; margin:0; }
		.m-dep{color:222222; margin:0;}
		.few{margin:40px 0; overflow:hidden;}
		.quote-text{background:url(assets/images/pshycometric_img/quotes-img.jpg) no-repeat; width:373px; height:196px;}
		.quote-text2{background:url(assets/images/pshycometric_img/quotes-img2.jpg) no-repeat; width:409px; height:196px;}
		.quote-text-matter{font-size:17px; line-height:38px; padding:20px 20px 0 60px; font-weight:bold; font-style:italic;}
		.career-steps{width:940px; background:url(assets/images/pshycometric_img/banner.jpg);background-size:100%; background-repeat:no-repeat;background-position:center; height:325px; position:static;}
		.p{color:#088400; font-weight:bold; font-size:14px; }
		p.exam{font-weight:bold; font-size:12px; color:#088400;}
		p.exam span{font-size:30px; font-weight:bold; color:#088400;}
		p.exam span.examsub{font-size:18px;letter-spacing:2px;}
		.step1{width:194px; margin-left: 69px;margin-top: 111px; position:absolute;}
		.step2{width:251px; position:absolute; margin-left: 426px; margin-top: 15px;}
		.step3{width:247px; position:absolute; margin-left: 691px; margin-top: 156px;}
		</style>

<div role="main" id="main">
			<div class="container">
			
<!-- Modal For Register-->
    
    <div id="register_modal" class="modal hide fade" style="width: 885px;margin-left: -452px;">
	<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Sign up <span>or  <a href="<?php echo base_url('gifted')?>">Login</a></span></h3>
    </div>
	
	<div class="well well-small">
               <h2>Create a New Meet Univ’s Account <span>(it’s FREE)</span></h2>
            </div>
			<?php if($this->session->flashdata('message')){?>
			<div class="alert alert-success" style="font-size: 14px;">
				<?php echo $this->session->flashdata('message');?>
			</div>
			<?php }?>
            <div class="border"></div>
			<div class="row">
            <article class="span6 l_col_sing" style="margin-left: 36px;">
               <h4>Student Details!</h4>
			   <?php
				if ($use_username) {
					$username = array(
						'name'	=> 'username',
						'id'	=> 'username',
						'value' => set_value('username'),
						'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
						'size'	=> 30,
					);
				}
				$fullname = array (
					'name'	=>	'fullname',
					'id'	=>	'fullname',
					'value'	=> set_value('fullname'),
					'size' => 30,
					'class'	=> 'span4',
					'placeholder' => 'Full Name'
				
				);
				$mobile = array(
					'name'	=>	'mobile',
					'id'	=>	'mobile',
					'value'	=>	set_value('mobile'),
					'maxlength'=> 10,
					'size'	=> 30,
					'class'	=> 'span4',
					'placeholder' => 'Mobile'
				);
				$email = array(
					'name'	=> 'email',
					'id'	=> 'email',
					'value'	=> set_value('email'),
					'maxlength'	=> 80,
					'size'	=> 30,
					'class'	=> 'span4',
					'placeholder' => 'Email'
				);
				$password = array(
					'name'	=> 'password',
					'id'	=> 'password',
					'value' => set_value('password'),
					'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
					'size'	=> 30,
					'class'	=> 'span4',
					'placeholder' => 'Password',
					
				);
				$confirm_password = array(
					'name'	=> 'confirm_password',
					'id'	=> 'confirm_password',
					'value' => set_value('confirm_password'),
					'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
					'size'	=> 30,
					'class'	=> 'span4',
					'placeholder' => 'Confirm Password'
				);
				$captcha = array(
					'name'	=> 'captcha',
					'id'	=> 'captcha',
					'maxlength'	=> 8,
				);
				$formAttr = array('id' => 'registerForm');
				
				?>
				<?php echo form_open(base_url().'auth/pshycometricRegistration',$formAttr); ?>
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-user"></i></span>
							<?php echo form_input($fullname); ?>
						</div>
						<span class="help-inline" style="color:red;"><?php echo form_error($fullname['name']); ?><?php echo isset($errors[$fullname['name']])?$errors[$fullname['name']]:''; ?></span>
					</div>
				</div>
						
				<div class="control-group">
					<div class="controls">		
						<div class="input-prepend">
							<span class="add-on"><i class="icon-envelope"></i></span>
							<?php echo form_input($email); ?>
							
						</div>
						<span class="help-inline" style="color:red;">
						<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
						</span>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">	
						<div class="input-prepend">
							<span class="add-on"><i class="icon-mobile-phone"></i></span>
							<?php echo form_input($mobile); ?>
						</div>
						<span class="help-inline" style="color:red;">
						<?php echo form_error($mobile['name']); ?><?php echo isset($errors[$mobile['name']])?$errors[$mobile['name']]:''; ?>
						</span>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">	
						<div class="input-prepend">
							<span class="add-on"><i class="icon-unlock-alt"></i></span>
							<?php echo form_password($password); ?>
						</div>
						<span class="help-inline" style="color:red;">
						<?php echo form_error($password['name']); ?>
						</span>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-unlock"></i></span>
							<?php echo form_password($confirm_password); ?>
						</div>
						<span class="help-inline" style="color:red;">
							<?php echo form_error($confirm_password['name']); ?>
						</span>
					</div>
				</div>
						<div class="form_bu clearfix">
						<button class="btn btn-medium btn-info" type="button" onclick="$('#registerForm').submit();">Create Account</button>
						<button class="btn btn-medium" type="button">Cancel</button>
					</div>
				<?php echo form_close();?>
               
               <small>By creating an account, you agree to the <a href="<?php echo base_url('terms');?>">Terms 
               of Service </a><br> and to receive product information<br>
               unless you choose otherwise.</small>
            </article>
			
            <article class="span5 r_col_sing" style="margin-left: 48px;">
               <h4>Or, Log In with</h4>
               <img src="<?php echo base_url();?>assets/img/facebook_big.png" onclick="fblogin();" style="cursor:pointer">
               <h2>Search many of <br>
                  colleges and their <br>
                  information as Per your <br>
                  Requirments..
               </h2>
            </article>
			</div>
		
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <!--<button class="btn btn-primary" id="send_request" onclick="">Send</button>-->
	</div>
	
</div>
<!---end--->
				
				<div class="row">
				<ul class="breadcrumb univ_breadcrumb">
                  <li><a href="<?php echo base_url()?>">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <!--<li><a href="<?php echo base_url('ielts-preparation')?>">IELTS Preparation</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>-->
                  <li class="active">Gifted</li>
               </ul>
				<h1 class="few">No more career confusion - Expert Help! Step by Step Guidance</h1>
				<div class="career-steps">	
					<!-- <img src="assets/images/banner.jpg"> -->
					<div class="step1">
						<p class="exam"><span>1</span><span class="examsub">Take The Exam</span></p>
						<p class="exam" style="width:183px;">Simple Scenarios / Behavioral <br> questions, answer them the way you would normally react</p>
					</div>
					
					<div class="step2">
						<p class="exam" style="color:#018091"><span style="color:#018091">2</span><span class="examsub" style="color:#018091">Detailed Counseling</span></p>
						<p class="exam" style="width:183px; padding-top:5px; color:#018091">Get an in-depth<br>
 analysis of your exceptional skills, strengths &amp; weaknesses. Know what fields you will excel at</p>
					</div>
					
						<div class="step3">
						<p class="exam" style="color:#86571f"><span  style="color:#86571f">3</span><span class="examsub" style="color:#86571f">Get Video Counseling</span></p>
						<p class="exam" style="width:183px; padding-top:5px; color:#86571f">Shortlist, Detail out, which career fields to choose with an expert over a video call </p>
					</div>
					
				</div>	
					
				</div>
				<div class="row">
					
						 
							<?php if(empty($user_id)){ ?>
							<div class="white-bg">
								<h2>Email Address </h2>
								<div class="clear">
									<img src="<?php echo base_url();?>/assets/images/pshycometric_img/down-arrow.jpg">
									
								</div>
								
								<div class="clear">
									<input type="text" placeholder="Email Address">
								</div>
								<div class="clear">
									<a id="registerModal" href="#"><input type="image" src="<?php echo base_url();?>/assets/images/pshycometric_img/bue-btn-bg.jpg"></a>
								</div>
							</div>
							<?php }else{ ?>
							<div class="rounding-box">
								<div class="clear" style="padding-left: 28px;">
									<a href="<?php echo base_url()?>gifted"><input type="image" src="<?php echo base_url();?>/assets/images/pshycometric_img/bue-btn-bg.jpg"></a>
								</div>
							</div>
							<?php
							}
							?>
						
					
					
				</div>
				<div class="row">
					
					<div class="few">
						<hr class="left stats-hr">
						<div class="left">
							<h2 style="padding:0 61px;"> Live Stats </h2>
						</div>
						<hr class="left stats-hr">
					</div>
								
				</div>
				
				
						<div class="row">
							<div class="span4 center">
								<div id="rotator" style="height:120px;width:300px"></div>
								<h3 class="clear" style="color:#4ec9ce">  Engineering </h3>
							</div>
							
							<div class="span4 center">
								<div id="rotator1" style="height:120px;width:300px"></div>
								<h3 class="clear" style="color:#ec7337"> Finance / Accounts</h3>
							</div>
							
							<div class="span4 center">
								<div id="rotator2" style="height:120px;width:300px"></div>
								<h3 class="clear" style="color:#f377ab">Business Management</h3>
							</div>
						</div>
					
				
				<div class="row">
					<div class="testing-members">
						<div class="span6">
							<div class="clear">
								<div class="person-img left">
									<img src="<?php echo base_url();?>/assets/images/pshycometric_img/img1.png">
									
								</div>
								<div class="person-details left">
									<p class="italic">Double post graduate, with a Master’s degree in Applied Industrial Psychology &amp; an MBA (HR), Samna is certified MBTI and DISC Practitioner, with over 10+ years of experience in working with students. Her assessment methodology involves the use of psychometric profiling, role plays, psychodrama, simulations &amp; in-basket exercises to shortlist your career goals better.</p>
								</div>
							</div>
							<div class="clear">
								<h3 class="m-name">Saman Khan</h3>
								<h4 class="m-dep">Program Designer - Head Counseling</h4>
							</div>
						</div>
					
						<div class="span6">
							<div class="quote-text">
								<p class="quote-text-matter">Been a career coach to thousands of young aspiring minds; let me help you identify shortlist your goals too</p>
							</div>
						</div>
					</div>
					
						<div class="testing-members">
						
					
						<div class="span6">
							<div class="quote-text2">
								<p class="quote-text-matter" style="padding-left:76px">What lies behind us and what lies before us are tiny matters compared to what lies within
								us - Oliver Wendell Holmes.</p>
								
							</div>
						</div>
						<div class="span6">
							<div class="clear">
							
								<div class="person-details left">
									<p class="italic" style="text-align:right">Sakshi is a learning facilitator with expertise in the field of academics, professional training &amp; coaching and counseling interventions. She is a practicing psychologist with My Doctors Clinic- New Delhi.Has a Master’s degree in Applied Industrial Psychology &amp; Professional Counseling.
									</p>
								</div>
									<div class="person-img left">
									<img src="<?php echo base_url();?>/assets/images/pshycometric_img/img2.png">
									
								</div>
							</div>
							<div class="right">
								<h3 class="m-name" style="color:#b3c800">Sakshi Sharma</h3>
								<h4 class="m-dep">Gifted - Program Manager</h4>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
       </div>
         <!--end main-->
	
		<?php $this->load->view('layout/js');?>
		<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-modal.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom/client.js" type="text/javascript"></script>
		 <script src="<?php echo base_url();?>assets/js/custom/login.js" type="text/javascript"></script> 
		 <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js" type="text/javascript" ></script>
		 <script src="<?php echo base_url();?>assets/js/rotator.js"></script>
		 <script>
         $(window).load(function () {
            $("#rotator").rotator();	
				$("#rotator1").rotator1();
						$("#rotator2").rotator2();
         });
      </script>
		 <script>
		$(document).ready(function () {
			login.execute();									//code of JavaScript to be executed
			$('#registerForm').validate({
				errorElement: 'span',
				errorClass: 'help-inline',
				focusInvalid: false,
				rules: {
					fullname: {
						required: true,
						minlength: 3
					},
					email: {
						required: true,
						email:true
					},
					mobile: {
						required: true,
						minlength: 10
					},
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					}
				},
		
				messages: {
					fullname: {
						required: "Please specify Full Name.",
						minlength: "Please specify Name of minimum 4 character."
					},
					email: {
						required: "Please provide a valid email.",
						email: "Please provide a valid email."
					},
					password: {
						required: "Please provide password.",
						minlength: "Please specify a secure Password."
					},
					confirm_password: {
						equalTo: "Should be Passwords don't match"
					},
					mobile: {
						required: "Please provide a Orgnization Name.",
						minlength: "Please specify Valid Mobile Number."
					}
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
					//console.log(error[0]['innerHTML']);
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
		})
		</script>
		<script>
		
		var error = '<?php if(validation_errors() != false || isset($errors[$email['name']])) { echo 'error'; }?>';
			if(error=='error')
			{
				$('#register_modal').modal('show');
				
			}
		
		$(document).on("click","#registerModal",function(){
		$('#register_modal').modal('show');
			
		});</script>
		
		<script>
		function send_register_request(){
		
				url="<?php echo base_url('auth/forgot_password')?>";
				var emailId = $("#email").val();
				var data = {email:emailId};
				$.post(url,data,function(data){
					//alert(data);

					if(data=="reset password link sent!")
					{
						//$('#myModal').hide();
						$("#myModal").modal('hide');
						$('#emailSentMessage').modal('show');
					}
					else
					{
						$("#myModal").modal('hide');
					}
					if(valid==false)
					return;
				});
				
		}
	</script>