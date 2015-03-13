<?php $this->load->view('layout/js');?>
<script>
$(document).ready(function(){

	$('#link1').click(function(){
		// $('#video').show();
		// $('#video_txt').show();
		// $('#video_txt1').hide();
		// $('#video_txt2').hide();
		// $('#video1').hide();
		// $('#video2').hide();
		$(this).addClass('active-video');
		$('#link2').removeClass('active-video');
		$('#link3').removeClass('active-video');
		
		
		$("#viddler-79a95e3a").attr('src','//www.youtube.com/embed/kUTn63TAsCs?list=UUmQX_-FGxwR4JFbCA97J1nQ');
	});

	$('#link2').click(function(){
		// $('#video1').show();
		// $('#video_txt1').show();
		// $('#video_txt').hide();
		// $('#video_txt2').hide();
		// $('#video').hide();
		// $('#video2').hide();
		 $(this).addClass('active-video');
		 $('#link1').removeClass('active-video');
		 $('#link3').removeClass('active-video');
		
		$("#viddler-79a95e3a").attr('src','//www.youtube.com/embed/96LnbzjheCU?list=UUmQX_-FGxwR4JFbCA97J1nQ');
		
	});
	$('#link3').click(function(){
		// $('#video2').show();
		// $('#video_txt2').show();
		// $('#video_txt').hide();
		// $('#video_txt1').hide();
		// $('#video1').hide();
		// $('#video').hide();
		 $(this).addClass('active-video');
		 $('#link2').removeClass('active-video');
		 $('#link1').removeClass('active-video');
		
		
		$("#viddler-79a95e3a").attr('src','//www.youtube.com/embed/ytH0PspyOx8?list=UUmQX_-FGxwR4JFbCA97J1nQ');
	
	});
});

</script>
<style>
.video_txt{color:#dd671f;cursor:pointer}
.help-inline{float:left !important;}
.active-video{color:white;background:#bab9b9;cursor:pointer;width:228px;height:auto;border-radius:2px;}
</style>

<div role="main" id="main">
			<div class="container">
			
			<!---Modal box--->
	 <div id="message" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Confirmation Message</h3>
    </div>
	<!--<form name="send_request_form">-->
    <div class="modal-body">
		
			<p>You have successfully registered!</p>
		
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    
	<!--</form>-->
    </div>
    </div>
       
	
	<!---end--->
<ul class="breadcrumb univ_breadcrumb">
	  <li><a href="<?php echo base_url()?>">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
	  <!--<li><a href="<?php echo base_url('ielts-preparation')?>">IELTS Preparation</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>-->
	  <li class="active">IELTS Preparation</li>
</ul>
<div class="ielts-banner-row">
          <div class="left ielts-banner" id="video">
           <iframe id="viddler-79a95e3a" src="//www.youtube.com/embed/kUTn63TAsCs?list=UUmQX_-FGxwR4JFbCA97J1nQ" width="545" height="349" frameborder="0" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
          </div>
		  <!--video1-->
		  <div class="left ielts-banner" id="video1" style="display:none">
           <iframe id="viddler-a4837572" src="//www.viddler.com/embed/a4837572/?f=1&autoplay=0&player=full&secret=100040291&loop=0&nologo=0&hd=0" width="545" height="349" frameborder="0" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
          </div>
		  <!--video1-->
		  <div class="left ielts-banner" id="video2" style="display:none">
           <iframe id="viddler-230e21db" src="//www.viddler.com/embed/230e21db/?f=1&autoplay=0&player=full&secret=24077221&loop=0&nologo=0&hd=0" width="545" height="349" frameborder="0" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
          </div>
          <div class="ielts-ielts">
            <img src="<?php echo base_url();?>/assets/images/ielts_img/ielts-circle1.png" />
            <p class="clear">Get the higher score on your IELTS Exam , Step by Step HD quality Video Lectures by a Niels Kokholm Nielsen (Official Cambridge examiner & Author of 6 Books)</p>
            <ul>
              <!--<li class="home"><a href="#" >Home</a></li>
              <li class="about"><a href="#">About</a></li>--->
              <li><div class="video_txt" id="link1">IELTS Test (Overview)</div></li>
              <li><div class="video_txt" id="link2">IELTS Listening (Overview)</div></li>
              <li><div class="video_txt" id="link3">IELTS Reading (Overview)</div></li>
			  <li><div class="video_txt" id="link3"><a href="https://www.meetuniv.com/learn/edurator/catvedio.php?id=5", target="_blank">Free IELTS Videos</a></div></li>
            </ul>
          </div>
          
        </div>
        
        <!-- contents starts-->
        <div class="content-container">
          <div class="row">
      <div class="span12">
      
      
				<div class="left description">
          <div class="left episode-description" id="video_txt">
            <h3 style="font-size: 22px;">Episode Description</h3>
            <div class="episode-matter">
              <p><span>IELTS Test (Overview)</span></p>
              <p>In a very short time the IELTS test has become one of the most popular and important English certificates in the world.</p>
              <p>Get the overview of this all-important test, and watch certified Cambridge examiner Nielsen explain the different components of the IELTS, the marking scheme and much more.</p>
            </div>
          </div>
		  <div class="left episode-description" id="video_txt1" style="display:none">
            <h3 style="font-size: 22px;">Episode Description</h3>
            <div class="episode-matter">
              <p><span>IELTS Listening(Overview)</span></p>
              <p>How should you approach the IELTS listening module? Considered by many the most difficult component in the IELTS test, this video introduces you to the different aspects of optimising your strategies, note-taking, information distribution, textual flow, distractors and triggers.
            </div>
          </div>
		  <div class="left episode-description" id="video_txt2" style="display:none">
            <h3 style="font-size: 22px;">Episode Description</h3>
            <div class="episode-matter">
              <p><span>IELTS Reading (Overview)</span></p>
              <p>Mastering the IELTS reading component is more than just doing practice tests - it's about how you look at words, collocations, phrases, sentences and clauses. Approach the IELTS reading in a systematic and meticulous way, and discover how simple changes to your methodology can significantly increase your score on the test.</p>
            </div>
          </div>

		   
          
           <div class="right episode-description" >
            <h3 style="font-size: 22px;">About My IELTS Guru</h3>
            <div class="episode-matter">
              <p><img src="<?php echo base_url();?>assets/images/ielts_img/Niels.jpg" width="60px" height="70px" style="float:left;margin-right:10px;">
              MyIELTSGuru was founded by MeetUniv.com and powered by IELTS lessons created by Niels Kokholm Nielsen, linguist and official Cambridge examiner with more than 15 years of experience in the field. He is the founder of digital publishing houses iMentor and is the author of 6 ESL books written for emerging markets.</p>
            </div>
          </div>
          
        </div>
      
		<div class="right british-council" id="form_registration">
            <div class="right episode-description-form">
            <h3 style="font-size: 22px;">No Obligation - 3 Day Trial</h3>
            <div class="episode-matter-form">
			<img src="<?php echo base_url()?>assets/images/form_preloader.gif" style="display: none;margin-left: 180px;margin-top: 51px;margin-bottom: 51px;" id="loader"/>
			<form action="#" method="post" name="frm" id="registerSubmit">
			<div class="control-group">
			<div style="margin-bottom:8px;float:right;width:124px;"><img src="<?php echo base_url();?>assets/images/ielts_img/myIeltsGuruslogo1.png" width="90px" height="120px">
			</div>
					<div class="controls" style="width:250px;">			
						
						<div class="input-prepend">
							<span class="add-on"><i class="icon-user"></i></span>
							<input type="text" name="first_name" id="first_name" placeholder="Full Name" style="width:158px;">
						</div>
						<div class="input-prepend">
							<span class="add-on"><i class="icon-envelope"></i></span>
							<input type="text" name="email" id="email" placeholder="Email" style="width:158px;">
							 <input type="hidden" name="productId" value="3" />
							
						</div><br />
						<span id="email_existance" style="color:red;display:none;">Email is already used by another user. Please choose another email.!</span>
						<span class="help-inline" style="color:red;">
						</span>
					</div>
				</div>
				<div>
					<input class="btn btn-medium btn-info" type="submit" value="Subscribe" id="form_submit">
				</div>
			</form>
            </div>
          </div>
          </div>
		  <div class="right british-council" style="display:none;" id="confirm_message">
            <div class="right episode-description-form">
            <h3 style="font-size: 22px;">No Obligation - 3 Day Trial</h3>
            <div class="episode-matter-form">
			<img src="<?php echo base_url()?>assets/images/form_preloader.gif" style="display: none;margin-left: 180px;margin-top: 51px;margin-bottom: 51px;" id="loadersubmit"/>
			<form action="#" method="post" name="frm" id="mobileNoSubmit">
			<div class="control-group">
					<div class="controls">		
						<span style="display:none;font-size:13px;" id="welcome_message"><p>Great, we just mailed you a demo link for our demo version.
																							Let us make it more sweet for you , Get the Premium Version @ 50% discount.
																							Verify your mobile number to get the voucher code right now.</p><p>Verify your mobile number to get the voucher code.</p></span>
						<div class="input-prepend">
							<span class="add-on"><i class="icon-mobile-phone"></i></span>
							
							<input type="text" name="mobile" id="mobile" placeholder="Mobile Number" style="width:158px;">
						</div>
						<span class="help-inline" style="color:red;">
						</span>
					</div>
			</div>
			<div>
				<input class="btn btn-medium btn-info" type="submit" value="Send" id="frm_submit">
				</div>
			</form>
            </div>
          </div>
          </div>
		  <!----send verification code---->
		  <div class="right british-council" style="display:none;" id="code_verification">
            <div class="right episode-description-form">
            <h3 style="font-size: 22px;">No Obligation - 3 Day trial</h3>
            <div class="episode-matter-form">
			<img src="<?php echo base_url()?>assets/images/form_preloader.gif" style="display: none;margin-left: 180px;margin-top: 51px;margin-bottom: 51px;" id="loadersubmit"/>
			<form action="#" method="post" name="frm" id="verification">
			<div class="control-group">
					<div class="controls">		
						<div >
							<span style="display:none; font-size:13px;" id="afterSendMessage"><p>Super, We Just sent you an confirmation code, please enter it to get access to the voucher codes.</b></p></span>
							<input type="text" name="codeverification" id="codeverification" placeholder="Enter code"><br/>
							<span id="codeValidation" style="color:red;display:none;">Please enter valid code.!</span>
						</div>
						<span class="help-inline" style="color:red;">
						</span>
					</div>
			</div>
			<div>
				<input class="btn btn-medium btn-info" type="submit" value="Send" id="sms_code_verificatiion"><br/>
				Having trouble? Please mail us at <a mailto="connect@meetuniv.com">connect@meetuniv.com</a> or call at 1800-300-00068.<br/>
				</div>
			</form>
            </div>
          </div>
          </div>
		  <!--end here-->
		  
		   <!----verification message---->
		  <div class="right british-council" style="display:none;" id="verificationMessageDiv">
            <div class="right episode-description-form">
            <h3 style="font-size: 22px;">No Obligation - 3 Day trial</h3>
            <div class="episode-matter-form">
			<img src="<?php echo base_url()?>assets/images/form_preloader.gif" style="display: none;margin-left: 180px;margin-top: 51px;margin-bottom: 51px;" id="imgloader"/>
				<span style="color:blue;display:none; font-size:13px;" id="verificationMessage"><p>Thanks ! Get ready for the power packed 48 hrs IELTS Series by Niels Kokholm Nielsen</p><p>Voucher Details : <strong>mu-50-ielts</strong>
				</p><p><a href="http://www.myieltsgurus.com/plans-pricing/">Upgrade here</a></p></span>
			
            </div>
          </div>
          </div>
		  <!--end here-->
          <div class="right british-council">
            <!--<img src="<?php echo base_url();?>/assets/images/ielts_img/stgeorge-logo.jpg" class="right st-logo" alt="stgeorge"/>-->
          <a href="http://www.myieltsgurus.com/" target="_blank"><img src="<?php echo base_url();?>/assets/images/ielts_img/ielts-addbanner1.png" class="right" /></a>
          
            <!--<img src="<?php echo base_url();?>/assets/images/ielts_img/ilts-british-council.jpg" class="left" title="british" />
            <p class="clear"> international students comprise almost percent of the total student body .Total cost of attendance for mosttotal 
              student body .Total cost of attendance for most international ...</p>-->
           </div>
           
            <div class="left left-div" style="margin-top:30px;">
            
            <h3>What to expect in the IELTS Exam</h3>
            <div class="left-div-matter">
              <p>It is easier to remember words linked to a particular topic. So, learn words in 
                  topic areas, and also learn word forms.</p>

              <p>IELTS has two Writing Tasks, Task 1 and Task 2. It is important to use words that 
                  are more formal, sophisticated and accurate in your writing for IELTS.</p>
              <p>Every day try to learn and master at least 10 new words and review these words 
                  frequently.</p>
            </div>
          </div>
          
          <!--<div class="left left-div">
            
            <h3>Quiz</h3>
            <div class="left-div-matter">
             <p><span>Multiple Choice Question</span></p>
             <p class="orange">10 Questions</p>
              <p>Put your Learning into practice by choosing the right word to 
                 complete the sentence in our multiple choice Question</p>
                 <a href="https://myieltsguru.com/ielts-reading-quiz/">
              <input type="button" class="right btn" value="Start Quiz" /></a>
            </div>
          </div>-->
      </div> 
      
        </div>
        </div>
        <!-- contents ends -->
	</div>
</div>
<script src="<?php echo base_url();?>assets/js/custom/client.js" type="text/javascript"></script>
	 <script src="<?php echo base_url();?>assets/js/custom/login.js" type="text/javascript"></script> 
	 <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js" type="text/javascript" ></script>
	 <script>
		$(document).ready(function () {
			$('#registerSubmit').validate({
				errorElement: 'span',
				errorClass: 'help-inline',
				focusInvalid: false,
				rules: {
					first_name: {
						required: true,
						minlength: 3
					},
					email: {
						required: true,
						email:true
					}
					
				},
		
				messages: {
					
					first_name: {
						required: "Please specify your full name.",
					},
					email: {
						required: "Please provide a valid email.",
						email: "Please provide a valid email."
					},
				},
		
				invalidHandler: function (event, validator) { //display error alert on form submit   
					$('.alert-error', $('#registerSubmit')).show();
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
				sendAjaxRequest();
				return false;
				},
				invalidHandler: function (form) {
				}
			});
		})
		
		$(document).ready(function () {
			$('#mobileNoSubmit').validate({
				errorElement: 'span',
				errorClass: 'help-inline',
				focusInvalid: false,
				rules: {
					mobile: {
						required: true,
						minlength: 10
					}
				},
		
				messages: {
					mobile: {
						required: "Please specify your mobile number.",
					}
				},
		
				invalidHandler: function (event, validator) { //display error alert on form submit   
					$('.alert-error', $('#mobileNoSubmit')).show();
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
				sendSms();
				return false;
				},
				invalidHandler: function (form) {
				}
			});
		})
		$(document).ready(function () {
			$('#verification').validate({
				errorElement: 'span',
				errorClass: 'help-inline',
				focusInvalid: false,
				rules: {
					Codeverification: {
						required: true,
						minlength: 4
					}
				},
		
				messages: {
					Codeverification: {
						required: "Please enter verification code.",
					}
				},
		
				invalidHandler: function (event, validator) { //display error alert on form submit   
					$('.alert-error', $('#verification')).show();
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
				sms_verification();
				return false;
				},
				invalidHandler: function (form) {
				}
			});
		})
		
		function sendAjaxRequest(){
			var datastring = $("#registerSubmit").serialize();
			$.ajax({
            type: "POST",
            url: "<?php echo base_url();?>static_controller/ielts_form_data/",
            data: datastring,
				beforeSend:function(){
					$('#registerSubmit').hide();
					$("#loader").show();
				},
				success: function(data) {
				//alert(data);exit;
					if(data=="send successfully")
					{
						$('#form_registration').hide();
						$('#welcome_message').show();
						$("#confirm_message").show()
					}else if(data=="Email already exist!"){
						$("#loader").hide();
						$('#registerSubmit').show();
						$('#email_existance').show();
						return false;
					}
				}
			});
		}
		
		function sendSms(){
			var datastring = $("#mobileNoSubmit").serialize();
			var email = $("#email").val();
			//alert(email);return;
			$.ajax({
            type: "POST",
            url: "<?php echo base_url();?>static_controller/sendSmsCode/",
            data: datastring+"&email="+email,
				beforeSend:function(){
					$('#mobileNoSubmit').hide();
					$("#loadersubmit").show();
				},
				success: function(data) {
					if(data=="sms send successfully")
					{
						$('#confirm_message').hide();
						$('#afterSendMessage').show();
						$("#code_verification").show() 
					}
				}
			});
		}
		
		function sms_verification(){
			var datastring = $("#verification").serialize();
			var email = $("#email").val();
			var mobile = $("#mobile").val();
			//alert(mobile);exit;
			$.ajax({
            type: "POST",
            url: "<?php echo base_url();?>static_controller/smsVerification/",
            data: datastring+"&email="+email+"&mobile="+mobile,
				beforeSend:function(){
					//$('#verification').hide();
					//$("#imgloader").show();
				}, 
				success: function(data) {
					if(data=="updated successfully")
					{
						$('#code_verification').hide();
						$('#verificationMessage').show();
						$("#verificationMessageDiv").show() 
					}else if(data=="Not verified!"){
						//$("#loader").hide();
						$('#codeValidation').show();
						$('#code_verification').show();
						return false;
					}
				}
			});
		}
		
	</script>