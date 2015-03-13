
<!--main-->

      <div role="main" id="main">
         <div class="row container" id="register_page">
            <div class="well well-small">
               <h2>Create a New Meet Univ’s Account<?php echo $abc;?> <span>(it’s FREE)</span></h2>
            </div>
			<?php if($this->session->flashdata('message')){?>
			<div class="alert alert-success" style="font-size: 14px;">
				<?php echo $this->session->flashdata('message');?>
			</div>
			<?php }?>
            <div class="border"></div>
			<div class="row">
            <article class="span6 l_col_sing">
               <h3>Sign ups <span>or<a href="<?php echo base_url('login')?>">Login</a></span></h3>
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
				<?php echo form_open($this->uri->uri_string(),$formAttr); ?>
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
               <form>
                 <!-- <div class="input-prepend">
                     <span class="add-on"><img src="<?php echo base_url();?>assets/img/student_name.png"></span>
                     <input class="span4"  type="text" placeholder="Student Name">
                  </div>
				  <div class="input-prepend">
                     <span class="add-on"><img src="<?php echo base_url();?>assets/img/mail.png"></span>
                     <input class="span4"  type="text" placeholder="Mail">
                  </div>
                  <div class="input-prepend">
                     <span class="add-on"><img src="<?php echo base_url();?>assets/img/Mobile.png"></span>
                     <input class="span4"  type="text" placeholder="Mobile">
                  </div>
                  <div class="input-prepend">
                     <span class="add-on"><img src="<?php echo base_url();?>assets/img/Password.png"></span>
                     <input class="span4"  type="text" placeholder="Password">
                  </div>
                  <div class="input-prepend">
                     <span class="add-on"><img src="<?php echo base_url();?>assets/img/Confirm-Password.png"></span>
                     <input class="span4"  type="text" placeholder="Confirm Password">
                  </div>
                  <div class="form_bu clearfix">
                     <input type="checkbox" name="a" class="styled" />Keep Me Logged In.
                  </div>
                  <div class="form_bu clearfix">
                     <button class="btn btn-large" type="button" onclick="location.href='register_step_1.html'">Create Account</button>
                     <button class="btn btn-large" type="button">Cancel</button>
                  </div>-->
               </form>
               <small>By creating an account, you agree to the <a href="<?php echo base_url('terms');?>">Terms 
               of Service </a><br> and to receive product information<br>
               unless you choose otherwise.</small>
            </article>
			
            <article class="span5 r_col_sing">
               <h4>Or, Log In with</h4>
               <img src="<?php echo base_url();?>assets/img/facebook_big.png" onclick="fblogin();" style="cursor:pointer">
               <h2>Search many of <br>
                  colleges and their <br>
                  information as Per your <br>
                  Requirments..
               </h2>
            </article>
			</div>
		 </div>
      </div>
      <!--end main-->
	 
	 <?php $this->load->view('layout/js');?>
	   <script src="<?php echo base_url();?>assets/js/custom/client.js" type="text/javascript"></script>
	 <script src="<?php echo base_url();?>assets/js/custom/login.js" type="text/javascript"></script> 
	 <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js" type="text/javascript" ></script>
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
	 <?php
if($this->session->userdata('ansqus'))
			{
				//echo $use_username;exit;
				//redirect('https://meetuniv.com/qna/qna/index');
				$b=1;
				header("Location: https://meetuniv.com/qna/qna/index?a=$b");
			}
			?>