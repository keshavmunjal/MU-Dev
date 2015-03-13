
<?php $email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> '',
	'maxlength'	=> 80,
	'size'	=> 30,
	'type'	=> 'hidden'
	
);
if(isset($userData))
{
	$email['value']=$userData['email'];
}
?>

<!--main-->
      <div role="main" id="main">
         <div class="row container" id="register_page">
            <div class="well well-small">
               <h4 class="heading"><small>Log In to your</small> MeetUniv.Com <small>account</small> </h4>
            </div>
			<?php if(!$this->session->flashdata('message') && isset($notActivated)){?>
			<?php echo form_open(base_url('auth/send_again')); ?>
			<div class="alert alert-block alert-error fade in" style="font-size: 14px;">
				<div class="span6">
					<h4 class="alert-heading">Oops! Your Account not Activated Yet!</h4>
				</div>
				<div class="pull-right">
					<!--<button type="button" class='btn btn-danger btn-small' data-toggle="modal" data-target="#sendEmail">Send Again</button>-->
					
					<?php echo form_input($email); ?>
					<button type="submit" class='btn btn-danger btn-small'>Send Again</button>
					
				</div>
				<div class="clearfix"></div>
			</div>
			<?php form_close(); ?>
			<?php }?>
			<?php if($this->session->flashdata('message')){?>
			<div class="alert alert-success" style="font-size: 14px;">
				<?php echo $this->session->flashdata('message');?>
			</div>
			<?php }?>
            <!--<div class="border"></div>-->
			<div class="row">
            <article class="span6 l_col_sing">
               <h3>Login <span>or  <a href="<?php echo base_url('register')?>">Sign up</a></span></h3>
               <h4>Student Details!</h4>
			   <?php
					$login = array(
						'name'	=> 'login',
						'id'	=> 'login',
						'value' => set_value('login'),
						'maxlength'	=> 80,
						'size'	=> 30,
						'class'	=> 'span3',
						'placeholder'=> 'Email'
					);
					if ($login_by_username AND $login_by_email) {
						$login_label = 'Email or login';
					} else if ($login_by_username) {
						$login_label = 'Login';
					} else {
						$login_label = 'Email';
					}
					$password = array(
						'name'	=> 'password',
						'id'	=> 'password',
						'size'	=> 30,
						'class'	=> 'span3',
						'placeholder'=> 'Password'
					);
					$remember = array(
						'name'	=> 'remember',
						'id'	=> 'remember',
						'value'	=> 1,
						'checked'	=> set_value('remember'),
						'style' => 'margin:0;padding:0',
					);
					$captcha = array(
						'name'	=> 'captcha',
						'id'	=> 'captcha',
						'maxlength'	=> 8,
					);
					$formAttr=array('id'=>'loginForm');
				?>
				<?php echo form_open($this->uri->uri_string(),$formAttr); ?>
				
						
				<div class="control-group">
					<div class="controls">		
						<div class="input-prepend">
							<span class="add-on">
							<i class="icon-envelope"></i>
							</span>
							<?php echo form_input($login); ?>
							
						</div>
						<span class="help-inline" style="color:red;">
						<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
						</span>
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">	
						<div class="input-prepend">
							<span class="add-on">
							<i class="icon-unlock-alt"></i>
							</span>
							<?php echo form_password($password); ?>
						</div>
						<span class="help-inline" style="color:red;">
						<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
						</span>
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">	
						<div class="form_bu clearfix">
							<input type="checkbox" class="styled" name="remember" id="remember" value="1">Remember Me
							<?php //echo form_checkbox($remember); ?>
							<?php //echo form_label('Remember me', $remember['id']); ?>
						</div>
						
					</div>
				</div>
				
						<div class="form_bu clearfix">
						<input class="btn btn-medium btn-info" type="submit" value="Let Me In">
						<button class="btn btn-medium" type="button">Cancel</button>
					</div>
				<?php echo form_close();?>
				<a href="#myModal" role="button" data-toggle="modal" style="color:red;">Forgot Password?</a>
				
               <!--<form>
                  <div class="input-prepend">
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
                  </div>
               </form>-->
               <p style="margin: 0 0 50px;">By creating an account, you agree to the <a href="<?php echo base_url('terms');?>">Terms 
               of Service </a><br> and to receive product information<br>
               unless you choose otherwise.</p><!--<a href="#myModal" role="button" data-toggle="modal">f</a>-->
            </article>
			
            <article class="span5 r_col_sing">
               <h4>Or, Log In with</h4>
               <img src="<?php echo base_url();?>assets/img/facebook_big.png" onclick="fblogin();" style="cursor:pointer">
               <h2 class="tag-line">We Guide | You Choose  </h2>
               <h4> Search, Follow, Get Connected with your dream university</h4>
            </article>
			</div>
		 </div>
      </div>
      <!--end main-->
	 <!--<div id="forgot_password_modal" class="modal hide fade">
	<?php //$this->load->view('auth/forgot_password_form');?>
	</div>-->
	
	<!-- Forgot Password Modal -->
    
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel" style="margin-left: 12px;">Forgot Password?</h3>
    </div>
	<form name="send_request_form" id ="forgotPasswordForm">
    <div class="modal-body">
			<div class="control-group">
			<p>Please tell us the email you used while registration , we will send you the password details on that.
</p>
				<!--<label class="control-label" for="inputEmail">Email</label>-->
				<div class="controls">
				  <input type="text" id="email" placeholder="Email" name="email">
				</div>
				<span id="email" style="color:red;"></span>
			 </div>
			
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" id="send_request" onclick="">Send</button>
	</div>
	</form>
    </div>
	
	<!-- Email Sent Message -->
    
    <div id="emailSentMessage" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Email Confirmation Message</h3>
    </div>
	<!--<form name="send_request_form">-->
    <div class="modal-body">
		
			<p>An email with instructions for creating a new password has been sent to you.</p>
		
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    
	<!--</form>-->
    </div>
    </div>
	
	<!-- Reset Password Modal Open -->
	
	<div id="reset_password" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Reset Password</h3>
    </div>
	<form name="send_request_form" id="send_request_form">
    <div class="modal-body">
			<div class="control-group">
				<!--<label class="control-label" for="inputEmail">Email</label>-->
				<div class="controls">
				  <input type="password" id="new_password" placeholder="New Password" name="new_password">
				</div>
				<div class="controls">
				  <input type="password" id="confirm_new_password" placeholder="Re-enter password" name="confirm_new_password">
				</div>
			 </div>
			
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" id="reset_password" onclick="">Reset</button>
	</form>
    </div>
    </div>
	
	<!-- Welcome Message -->
	
    <div id="resetPasswordWelcomeMessage" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Confirmation Message</h3>
    </div>
	<!--<form name="send_request_form">-->
    <div class="modal-body">
		
			<p>Your reset password has been changed successfully.</p>
		
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    
	<!--</form>-->
    </div>
    </div>
		
	 <?php $this->load->view('layout/js');?>
	 <script src="<?php echo base_url();?>assets/js/custom/client.js" type="text/javascript"></script>
	 <script src="<?php echo base_url();?>assets/js/custom/login.js" type="text/javascript"></script> 
	 <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js" type="text/javascript" ></script>
	 <script>
		$(document).ready(function () {
		
			var temp = <?php echo (isset($forget_password))?$forget_password:0;?>;
			//alert(temp);
			if(temp == '1'){
				$('#reset_password').modal('show');
			}
		
			login.execute();									//code of JavaScript to be executed
			$('#loginForm').validate({
				errorElement: 'span',
				errorClass: 'help-inline',
				focusInvalid: false,
				rules: {
					login: {
						required: true,
						email:true
					},
					password: {
						required: true,
						minlength: 5
					}
				},
		
				messages: {
					login: {
						required: "Please provide a valid email.",
						email: "Please provide a valid email."
					},
					password: {
						required: "Please specify a password.",
						minlength: "Please specify a secure password."
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
			$('#forgotPasswordForm').validate({
				errorElement: 'span',
				errorClass: 'help-inline',
				focusInvalid: false,
				rules: {
					email: {
						required: true,
						email:true
					}
				},
		
				messages: {
					email: {
						required: "Please provide a valid email.",
						email: "Please provide a valid email."
					}
				},
		
				invalidHandler: function (event, validator) { //display error alert on form submit   
					$('.alert-error', $('#forgotPasswordForm')).show();
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
				//form.submit();
				sendRequest();
				return false;
				},
				invalidHandler: function (form) {
				}
			});
			
			$('#send_request_form').validate({
				errorElement: 'span',
				errorClass: 'help-inline',
				focusInvalid: false,
				rules: {
					new_password: {
						required: true,
						minlength: 5
					},
					confirm_new_password: {
						required: true,
						equalTo: "#new_password"
					}
				},
		
				messages: {
					new_password: {
						required: "Please provide password.",
						minlength: "Please specify a secure Password."
					},
					confirm_new_password: {
						equalTo: "Should be Passwords don't match"
					}
				},
		
				invalidHandler: function (event, validator) { //display error alert on form submit   
					$('.alert-error', $('#forgotPasswordForm')).show();
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
				//form.submit();
				resetPassword();
				return false;
				},
				invalidHandler: function (form) {
				}
			});
		})
	</script>
	<script type="text/javascript">	
		
function sendRequest(){
	
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

function resetPassword(){
	url="<?php echo base_url('auth/reset_password')?>";
	var getNewPassword = $("#new_password").val();
	var getConfirmNewPassword = $("#confirm_new_password").val();
	var userId = "<?php echo $this->uri->segment(3)?>";
	var newPassKey = "<?php echo $this->uri->segment(4)?>";
	//alert(user_id);
	//alert(new_pass_key);
	//return;
	//alert(getConfirmNewPassword);
		
	var data = {new_password:getNewPassword,confirm_new_password:getConfirmNewPassword,user_id:userId,new_pass_key:newPassKey};
	$.post(url,data,function(data){
		
		if(data=="successfully changed!")resetPasswordWelcomeMessage
		{	
			$("#reset_password").modal('hide');
			$("#resetPasswordWelcomeMessage").modal('show');
			setTimeout(function(){$("#resetPasswordWelcomeMessage").modal('hide');
			window.location.href="<?php echo base_url('login')?>";
			},3000);
			
		}
			
	});
	
		
}
</script>