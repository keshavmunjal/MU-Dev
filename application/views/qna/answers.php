 <?php
//$data = $this->session->userdata('user_id');
//echo $data;
//print_r($qus_cat);
?>
 <script>
	function check_user()
		{
			
				var qun = document.getElementById("askquestion").value;
				var select_catid = document.getElementById("qun_catid").value;
				
				url="https://meetuniv.com/qna/qna/getMsg";
				//alert(url);exit;
						data = {askqun:qun,cat_id:select_catid};
						$.ajax({
					  	type	:	'POST',
					  	data	:	data,
					  	url		:	url,
					  	success: function(data){
					  		//alert(data);exit;
							if (data == "NotLogged")
							{
								//alert(data);exit;
								$('#register_modal').modal('show');
								$('#myModal').modal('hide');
								
							}
							else
							{
										url="https://meetuniv.com/qna/qna/index";
										//alert(url);exit;
										data = {askqun:qun,cat_id:select_catid};
										$.ajax({
										type	:	'POST',
										data	:	data,
										url		:	url,
										success: function(data){
											window.location.assign("<?php echo base_url()?>qna/qna/index");
										}
										})
							}
					  		
					  	}
						})
			
		}
function check_secureuser()
		{
			
			//var un = document.getElementById("username").value;
			var fn = document.getElementById("fullname").value;
			var em = document.getElementById("email").value;
			var mo = document.getElementById("mobile").value;
			var pw = document.getElementById("password").value;
			var cpw = document.getElementById("confirm_password").value;
			//alert(fn + em + mo + pw + cpw);
			//exit();
			url="https://meetuniv.com/auth/pshycometricRegistration/abc";
			data = {fullname:fn,email:em,mobile:mo,password:pw,confirm_password:cpw};
						$.ajax({
					  	type	:	'POST',
					  	data	:	data,
					  	url		:	url,
					  	success: function(data){
					  		//alert(data);exit;
							if (data == "")
							{
								alert(data);exit;
								
								
							}
							else
							{
								$('#valid_register').modal('show');
								$('#register_modal').modal('hide');
							}
										
							}
					  		
					  	}
						)
			
								
		}	
 </script>
 <!--main-->
      <div role="main" id="main">
         <div class="row container">
            <article id="college_listing" class="page">
               <ul class="breadcrumb univ_breadcrumb">
                  <li><a href="<?php echo base_url()?>">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li>Connect Queries</li>
               </ul>
               <div class="clearfix"></div>
               <div class="clearfix"></div>
               <div class="row clearfix" id="">
                  <article class="span12">
                     <section id="sort_listing" style="display:none">
                        <h2 class="pull-left">Connect - Questions and Answers</h2>
                        <button class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal" type="button" style="margin:7px 5px 0 0;"><i class="icon-question-sign icon-white"></i>&nbsp;Ask a Question</button>
							<!-- Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
										<h4 class="modal-title" id="myModalLabel">Ask Question</h4>
									  </div>
									  <div class="modal-body">
										
										<textarea placeholder="Please type question" id="askquestion"></textarea>
										<label> Select Category</label>
										<select id="qun_catid">
											<option value=""> Select Category</option>
											<?php foreach($qus_cat as $cat_qusn){?>
											<option value="<?php echo $cat_qusn['id'];?>"><?php echo $cat_qusn['name'];?></option>
											<?php }?>
										</select>
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-primary" onclick="check_user();">Submit</button>
									  </div>
									</div>
								  </div>
								</div>
								<!---model------>
					 </section>
				  <div class="row">
					 <div class="span12" style="background:#f1f1f1">
					 <?php 
						$file = basename($_SERVER['REQUEST_URI']); 
						$result=$this->qansr->findQuestionName($file);
					 ?>
					 <input type="hidden" id="putqus_Id" value="<?php echo $file; ?>">
						<h3 class="pull-left">Question:&nbsp;&nbsp;&nbsp;<?php echo $result[0]['ques']; ?></h3>
					</div>
					</div>
					<div class="row">
						<div class="span8" id="">
							<p>
							<?php foreach($qus_detail as $detail_qus)
							{
								//print_r($detail_qus);
							?>
								<h4><?php echo $detail_qus['ques']; ?><span class="label label-info"> <?php echo $detail_qus['count'];?> Answers </span></h4>
								<small class="muted"> - Posted by <?php echo $detail_qus['fullname']." on ".$detail_qus['timestamp'];?></small>
								
							<?php }?>
							</p>
							
							<?php if(!empty($qus_ans))
								{
									?>
									<?php foreach($qus_ans as $ans_qus)
									{
										//print_r($ans_qus);
										?>
										<p><?php echo $ans_qus['ans']; ?></p>
										<small class="muted"> - Answered by <?php echo $ans_qus['fullname']." on ".$ans_qus['timestamp'];?></small>
										
										<?php 
									} 
								
								}
							else
								{
									echo "<p>No Answered</p>";
								}
							?>
							
							<hr/>
							<form style="background:#f1f1f1;padding:10px">
								<textarea rows="3" class="input-block-level" id="putAnswer" placeholder="Post your comment..."></textarea>
								<button class="btn btn-primary" type="button"  onclick="submit_qus();">Submit</button>
							</form>
						</div>
					 <article class="span4">
                      Hello
					</article>
                  </div>
				  </article>
               </div>
            </article>
         </div>
      </div>
      <!--end main-->
	  
	  
	  <!---For Login OR SignUp model--------->
	<div id="register_modal" class="modal hide fade" style="width: 885px;margin-left: -452px;">
	<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>Sign up <span>or  <a href="<?php echo base_url('gifted')?>">Login</a></span></h3>
    </div>
	
	<div class="well well-small">
               <h2>Create a New Meet Univ's Account <span>(it's FREE)</span></h2>
            </div>
			<?php if($this->session->flashdata('message')){?>
			<!--<div class="alert alert-success" style="font-size: 14px;">
				<?php echo $this->session->flashdata('message');?>
			</div>-->
			<?php  }?>
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
				<?php  echo form_open(base_url().'auth/pshycometricRegistration/abc',$formAttr); ?>
				
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-user"></i></span>
							<?php  echo form_input($fullname); ?>
						</div>
						<span class="help-inline" style="color:red;"><?php // echo form_error($fullname['name']); ?><?php // echo isset($errors[$fullname['name']])?$errors[$fullname['name']]:''; ?></span>
					</div>
				</div>
						
				<div class="control-group">
					<div class="controls">		
						<div class="input-prepend">
							<span class="add-on"><i class="icon-envelope"></i></span>
							<?php  echo form_input($email); ?>
							
						</div>
						<span class="help-inline" style="color:red;">
						<?php echo form_error($email['name']); ?><?php  echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
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
						<?php echo form_error($mobile['name']); ?><?php  echo isset($errors[$mobile['name']])?$errors[$mobile['name']]:''; ?>
						</span>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">	
						<div class="input-prepend">
							<span class="add-on"><i class="icon-unlock-alt"></i></span>
							<?php  echo form_password($password); ?>
						</div>
						<span class="help-inline" style="color:red;">
						<?php  echo form_error($password['name']); ?>
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
							<?php  echo form_error($confirm_password['name']); ?>
						</span>
					</div>
				</div>
						<div class="form_bu clearfix">
						<button class="btn btn-medium btn-info" type="button" onclick="check_secureuser();">Create Account</button>
						<button class="btn btn-medium" type="button">Cancel</button>
					</div>
				<?php  echo form_close();?>
               
               <small>By creating an account, you agree to the <a href="<?php echo base_url('terms');?>">Terms 
               of Service </a><br> and to receive product information<br>
               unless you choose otherwise.</small>
            </article>
			
            <article class="span5 r_col_sing" style="margin-left: 48px;">
               <h4>Or, Log In with</h4>
               <img src="<?php  echo base_url();?>assets/img/facebook_big.png" onclick="fblogin();" style="cursor:pointer">
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
	  
 <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <!--<button class="btn btn-primary" id="send_request" onclick="">Send</button>-->
	</div>
	
</div>
	  <div class="modal fade" id="valid_register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
										<h4 class="modal-title" id="myModalLabel">Security Check</h4>
									  </div>
									  <div class="modal-body">
										
										<label> Security Code</label>
										<?php  echo form_open(base_url().'qna/qna/securityans',array('id' => 'securityform1')); ?>
										<input type="text" name="security_code" id="security_code" placeholder="Please type code">
									  </div>
									  <div class="modal-footer">
										<button type="submit" class="btn btn-primary">Submit</button>
									  </div>
									</div>
								  </div>
								</div>
<?php  echo form_close();?>
	  <!---For Login OR SignUp--->
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
	  <script>
			function submit_qus()
				{
					var ans = document.getElementById("putAnswer").value;
					var qusId = document.getElementById("putqus_Id").value;
				
						url="https://meetuniv.com/qna/qna/PostAnswerInSession";
						data = {putqus:ans,qus_id:qusId};
						$.ajax({
					  	type	:	'POST',
					  	data	:	data,
					  	url		:	url,
					  	success: function(data){
								console.log(data)
							if (data == "NotLogged")
							{
								$('#register_modal').modal('show');
							}
							else
							{
										url="https://meetuniv.com/qna/qna/PostAnswer";
										data = {putqus:ans,qus_id:qusId};
										$.ajax({
										type	:	'POST',
										data	:	data,
										url		:	url,
										success: function(data){
											window.location.assign("<?php echo base_url()?>qna/qna/answer/"+qusId);
										}
										})
							}
					  		
					  	}
						})
				
				}
	  </script>