 <!--main-->
 <div id="betaModal" class="modal hide fade">
 <span  id="sendSmsForm">
    <div class="modal-header">
            <button class="close" data-dismiss="modal" style="padding-right:12px;">×</button>
            <h3 id="eventName" style="padding-left:14px;">Event Name</h3>
    </div>
<div class="modal-body">
    <div class="row-fluid">
        <div class="span12">
            <div class="span6">
				  <div class="thumbnail" style="padding: 0;line-height:12px;">
					<div style="padding:4px">
					  <!--<img alt="300x200" style="width: 248px;height: 100px;" src="http://placehold.it/200x150">-->
					  <img alt="300x200" style="width: 220px;height: 100px; margin-left:20px;" src="<?php echo base_url();?>assets/img/popup_event_image1.png">
					</div>
					<div class="caption" style="padding:0px 9px;">
					  <h4 id="universityName" style="color:#373;">Project A</h4>
					  <p><a class="btn btn-primary btn-mini" href="#"><i class="icon-plus-sign"></i> Add College</a></p>
					  <p id="eventLocation" class="edit-move-left">
						<i class="icon icon-calendar"></i> <span id="eventDate">Date</span>
						</p><p class="edit-move-left" style="padding-top:3px;padding-bottom:6px;"><i class="icon icon-map-marker"></i> <span id="eventPlace">Place, Country</span>
					  </p>
					</div>
					<div class="modal-footer" style="text-align: left">
					  <!--<div class="progress progress-striped active" style="background: #ddd">
						<div class="bar" style="width: 60%;"></div>
					  </div>
					  <div class="row-fluid">
						<div class="span4"><b>60%</b><br/><small>FUNDED</small></div>
						<div class="span4"><b>$400</b><br/><small>PLEDGED</small></div>
						<div class="span4"><b>18</b><br/><small>DAYS</small></div>
					  </div>-->
					</div>
            </div>
            </div>
            <div class="span6">
                <form class="form-horizontal">
                    <p class="help-block">Name</p>
                    <div class="input-prepend">
                        <span class="add-on">*</span><input id="smsfullname" class="prependedInput" size="16" type="text" placeholder="Full Name" value="<?php echo (isset($userData)&&$userData)?$userData['fullname']:'';?>">
                    </div>
                    <p class="help-block">Email</p>
                    <div class="input-prepend">
                        <span class="add-on">@</span><input id="smsemail" class="prependedInput" size="16" type="email" placeholder="Email" value="<?php echo (isset($userData)&&$userData)?$userData['email']:'';?>">
                    </div>
					<p class="help-block">Phone</p>
                    <div class="input-prepend">
                        <span class="add-on">+91</span><input id="smsphone" class="prependedInput" size="10" type="text" placeholder="Mobile phone" value="<?php echo (isset($userData)&&$userData)?$userData['mobile']:'';?>">
                    
						<input type="hidden" id="connectId" value="">
					</div>
                  	<hr>
					<div class="help-block" >
                        <div class="alert alert-error" id="sendSmsError" style="display:none;">
						  
						</div>
                    </div>
                    <div class="help-block">
                        <button type="button" class="btn btn-small btn-info pull-right" onclick="sendConnectSms();">Send SMS</button>
                    </div>
                </form>
            </div>
        </div>
	</div>
</div>
</span>
<span id="registrationForm" style="display:none;">
<div class="modal-header">
            <button class="close" data-dismiss="modal">×</button>
            <h4>Sent Successfully!</h4>
    </div>
<div class="modal-body">
    <form action="http://localhost/mu/register" method="post" accept-charset="utf-8" id="registerForm">				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><img src="http://localhost/mu/assets/img/student_name.png"></span>
							<input type="text" name="fullname" value="" id="fullname" size="30" class="span4" placeholder="Full Name">						</div>
						<span class="help-inline" style="color:red;"></span>
					</div>
				</div>
						
				<div class="control-group">
					<div class="controls">		
						<div class="input-prepend">
							<span class="add-on"><img src="http://localhost/mu/assets/img/mail.png"></span>
							<input type="text" name="email" value="" id="email" maxlength="80" size="30" class="span4" placeholder="Email">							
						</div>
						<span class="help-inline" style="color:red;">
												</span>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">	
						<div class="input-prepend">
							<span class="add-on"><img src="http://localhost/mu/assets/img/Mobile.png"></span>
							<input type="text" name="mobile" value="" id="mobile" maxlength="10" size="30" class="span4" placeholder="Mobile">						</div>
						<span class="help-inline" style="color:red;">
												</span>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">	
						<div class="input-prepend">
							<span class="add-on"><img src="http://localhost/mu/assets/img/Password.png"></span>
							<input type="password" name="password" value="" id="password" maxlength="20" size="30" class="span4" placeholder="Password">						</div>
						<span class="help-inline" style="color:red;">
												</span>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><img src="http://localhost/mu/assets/img/Confirm-Password.png"></span>
							<input type="password" name="confirm_password" value="" id="confirm_password" maxlength="20" size="30" class="span4" placeholder="Confirm Password">						</div>
						<span class="help-inline" style="color:red;">
													</span>
					</div>
				</div>
						<div class="form_bu clearfix">
						<button class="btn btn-medium btn-info" type="button" onclick="$('#registerForm').submit();">Create Account</button>
						<button class="btn btn-medium" type="button" data-dismiss="modal">Cancel</button>
					</div>
				</form>
</div>
</span>
    <div class="modal-footer">
        <p>&copy; MeetUniv.Com</p>
    </div>
</div>
      <div role="main" id="main">
         <div class="row container">
            <article id="college_listing" class="page">
               <ul class="breadcrumb univ_breadcrumb">
                  <li><a href="<?php echo base_url()?>">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li><a href="<?php echo base_url('connect')?>">Connect Search</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li class="active">Search Result</li>
               </ul>
               <div class="clearfix"></div>
               <div class="clearfix"></div>
               <div class="row clearfix" id="collage_listing_page">
                  <article class="span12">
                     <section id="sort_listing">
                        <h2 class="pull-left">Connect Listing - All</h2>
                        <ul class="inline pull-right">
                           <li>Sort By</li>
                           <li class="short active" id="shortFeature"><a href="javascript:void(1)" onclick="shortFeature()"><i class="icon-book"></i>&nbsp;Featured</a>
							<input type="hidden" id="shortFeatureValue" value="0">
						   </li>
                           <li id="shortDate" class="short">
							<a href="javascript:void(1)" onclick="shortDate()"><i class="icon-calendar"></i>&nbsp;Date</a>
							<input type="hidden" id="shortDateValue" value="0">
						   </li>
                           <li class="short" id="shortUniv"><a href="javascript:void(1)" onclick="shortUniv()"><i class="icon-building"></i>&nbsp; University</a>
						   <input type="hidden" id="shortUnivValue" value="0">
						   </li>
                           <li class="short" id="shortDesti">
							<a href="javascript:void(1)"  onclick="shortDesti()"><i class="icon-map-marker"></i>&nbsp; Destination</a>
						    <input type="hidden" id="shortDestiValue" value="0">
						   </li>
                        </ul>
                     </section>
				  <div class="row">
					 <section class="span3">
                        <h5 class="no_margin margin_b_10">Filter Your Search:</h5>
                        <div class="tab_spine clearfix">
							<h4>Location</h4>
							<ul class="unstyled">
							<li id="addingContent">
							  <input class="span2" id="locationFilter" type="text" data-provide="typeahead" data-items="4" placeholder="City Name">
							  <!--<span class="add-on" style="cursor:pointer;"><i class="icon-plus blue" style="font-size: 20px;"></i></span>-->
							  <button class="btn btn-primary btn-small" onclick="addLocation()" style="vertical-align: super;">Filter</button>
							  <input type="hidden" id="filtrationCities" value=""/>
						    </li>
							<li id="allLocation"><a href="#">All Cities</a></li>
							</ul>
						</div>
						<div class="tab_spine clearfix">
							<h4>College Type</h4>
							<ul class="unstyled">
							<li><i class="icon-remove-sign icon-class-red"></i><a href="#">Foundation</a></li>
							<li><i class="icon-remove-sign icon-class-red"></i><a href="#">Undergraduate</a></li>
							</ul>
						</div>
						<div class="tab_spine clearfix">
							<h4>Interest</h4>
							<ul class="unstyled">
							<li><i class="icon-remove-sign icon-class-red"></i><a href="#">Science</a></li>
							<li><i class="icon-remove-sign icon-class-red"></i><a href="#">Commerce</a></li>
							</ul>
						</div>
						<div class="tab_spine clearfix">
							<h4>Financial</h4>
							<ul class="unstyled">
							<li><i class="icon-remove-sign icon-class-red"></i><a href="#">Below &pound; 5000</a></li>
							<li><i class="icon-remove-sign icon-class-red"></i><a href="#">Above &pound; 5000</a></li>
							</ul>
						</div>
						<div class="tab_spine clearfix">
							<h4>Criteria</h4>
							<ul class="unstyled">
							<li><i class="icon-remove-sign icon-class-red"></i><a href="#">IELTS</a></li>
							<li><i class="icon-remove-sign icon-class-red"></i><a href="#">PTE</a></li>
							</ul>
						</div>
						<div class="tab_spine clearfix">
							<h4>Intake</h4>
							<ul class="unstyled">
							<li><i class="icon-remove-sign icon-class-red"></i><a href="#">Sept 2013</a></li>
							<li><i class="icon-remove-sign icon-class-red"></i><a href="#">Jan 2014</a></li>
							</ul>
						</div>
                     </section>
					 <div class="span6" id="connectPagination">
							
					</div>
                     
					 <article class="span3">
                      <article><div class="calendar_test" style="padding: 30px 0px;"></div> </article>
                      <!--<article><a target="_blank" href="http://meetuniv.com/Study-In-UK-Top-Universities.php?campaign=0&src=home" style="text-decoration:none;text-align:centre"><img title="Northumbria University Event in India" alt="Northumbria University Event in India" src="<?php echo base_url();?>assets/img/ad/nu600.jpg"></a></article>-->
					  <article>
					  <!--<a target="_blank" href="http://bit.do/hpbannernew" style="text-decoration:none;text-align:centre"><img title="British Council Survey" alt="British Council Survey" src="<?php echo base_url();?>assets/img/ad/bcsurvey.jpg"></a>
					  <a target="_blank" href="http://meetuniv.com/Study-In-Uk-Meet-Sixty-Universities.php" style="text-decoration:none;text-align:centre"><img title="British Council Events" alt="British Council Events" src="<?php echo base_url();?>assets/img/ad/bcevent.jpg"></a>-->
					  <a target="_blank" href="http://meetuniv.com/Study-In-Uk-Meet-Sixty-Universities.php" style="text-decoration:none;text-align:centre"><img title="Manipal Dubai University Events" alt="Manipal Dubai University Events" src="<?php echo base_url();?>assets/img/ad/manipal.jpg"></a>
					  </article>
					</article><br/><br/>
                  </div>
				  </article>
                  
               </div>
            </article>
         </div>
      </div>
      <!--end main-->
	  <?php $this->load->view('layout/js');?>
	  <script src="<?php echo base_url();?>assets/js/bootstrap-dropdown.js"></script>
	  <script>
		$(document).ready(function(){
			theMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
				theDays = ["S", "M", "T", "W", "T", "F", "S"];
				theDate= ["05/September/2013",'Current Date','sdfds','blue'];
				
			$('.dropdown-toggle').dropdown();
			$('.calendar_test').calendar({
					months: theMonths,
					days: theDays,
					req_ajax: {
						type: 'get',
						url: '<?php echo base_url('connect/CurrentDate');?>'
					}
				});
			
			$.ajax({
				type	:	'POST',
				data	:	{offset:'6'},
				url		:	"<?php echo base_url('connect/connectPagination')?>",
				beforeSend: function(){
					$("#connectPagination").css('opicity','0.4');
				},
				success: function(data){
					$("#connectPagination").html(data);
					$("#connectPagination").css('opicity','1');
				},
				
			});
			
		});
		
		
		function shortDesti(){
				  var filtrationCities = $("#filtrationCities").val();
				  $("#filtrationCities").val(filtrationCities);
				  url="<?php echo base_url();?>connect/filterByLocation";
				  data = {cityName:$("#filtrationCities").val(),desti:1};
				   $.ajax({
					type	:	'POST',
					data	:	data,
					url		:	url,
					beforeSend: function(){
								$("#connectPagination").css('opicity','0.4');
							},
							success: function(data){
								//alert(data);
								$("#connectPagination").html(data);
								$("#connectPagination").css('opicity','1');
								$(".short").removeClass('active');
								$("#shortDesti").addClass('active');
								$("#shortUnivValue").val('0');
								$("#shortDestiValue").val('1');
								$("#shortDateValue").val('0');
								$("#shortFeatureValue").val('0');
							},
					
				  })
			
			}
			
		function shortFeature()
		{
			  var filtrationCities = $("#filtrationCities").val();
			  $("#filtrationCities").val(filtrationCities);
			  url="<?php echo base_url();?>connect/filterByLocation";
			  data = {cityName:$("#filtrationCities").val()};
			   $.ajax({
				type	:	'POST',
				data	:	data,
				url		:	url,
				beforeSend: function(){
							$("#connectPagination").css('opicity','0.4');
						},
						success: function(data){
							//alert(data);
							$("#connectPagination").html(data);
							$("#connectPagination").css('opicity','1');
							$(".short").removeClass('active');
							$("#shortFeature").addClass('active');
							$("#shortUnivValue").val('0');
							$("#shortDestiValue").val('0');
							$("#shortDateValue").val('0');
							$("#shortFeatureValue").val('1');
						},
				
			  })
		
		}
		
		
		function shortDate(){
				  var filtrationCities = $("#filtrationCities").val();
				  $("#filtrationCities").val(filtrationCities);
				  url="<?php echo base_url();?>connect/filterByLocation";
				  data = {cityName:$("#filtrationCities").val(),date:1};
				   $.ajax({
					type	:	'POST',
					data	:	data,
					url		:	url,
					beforeSend: function(){
								$("#connectPagination").css('opicity','0.4');
							},
							success: function(data){
								//alert(data);
								$("#connectPagination").html(data);
								$("#connectPagination").css('opicity','1');
								$(".short").removeClass('active');
								$("#shortDate").addClass('active');
								$("#shortUnivValue").val('0');
								$("#shortDestiValue").val('0');
								$("#shortDateValue").val('1');
								$("#shortFeatureValue").val('0');
							},
					
				  })
			
			}
			function shortUniv(){
				  var filtrationCities = $("#filtrationCities").val();
				  $("#filtrationCities").val(filtrationCities);
				  url="<?php echo base_url();?>connect/filterByLocation";
				  data = {cityName:$("#filtrationCities").val(),univ:1};
				   $.ajax({
					type	:	'POST',
					data	:	data,
					url		:	url,
					beforeSend: function(){
								$("#connectPagination").css('opicity','0.4');
							},
							success: function(data){
								//alert(data);
								$("#connectPagination").html(data);
								$("#connectPagination").css('opicity','1');
								$(".short").removeClass('active');
								$("#shortUniv").addClass('active');
								$("#shortUnivValue").val('1');
								$("#shortDestiValue").val('0');
								$("#shortDateValue").val('0');
								$("#shortFeatureValue").val('0');
							},
					
				  })
			
			}
		
		
		function showAttending(id)
		{
			$(".attending").hide();
			$('.'+id).fadeIn();
		}
		function ConnectMU(connectId,univName,eventName,eventDate,eventPlace)
		{
			$("#universityName").text(univName);
			$("#eventName").html(eventName);
			$("#eventDate").html(eventDate);
			$("#eventPlace").html(eventPlace);
			$("#connectId").val(connectId);
			$('#registrationForm').hide();
			$('#sendSmsForm').show();
			$("#betaModal").modal('show');
		}
		function sendConnectSms()
		{
			
			url="<?php echo base_url('connect/attendEvent')?>";
			var fullname = $("#smsfullname").val();
			var email = $("#smsemail").val();
			var phone = $("#smsphone").val();
			var connectId = $("#connectId").val();
			var error = '';
			if(fullname=='' || fullname==null)
			{
				error=error+"Name required!<br>";
			}
			if(email=='' || email==null)
			{
				error=error+"Email required!<br>";
			}
			else
			{
				var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;	
				if (reg.test(email) == false) 
				{         
					$("#email").addClass('needsfilled');
					error = error+"Email is not valid.<br>";
					
				}
			}
			if(phone=='' || phone==null || isNaN(phone) || phone.length!=10)
			{
				error=error+"Phone Number Not Valid!";
			}
			if(error!='')
			{
				$('#sendSmsError').html(error);
				$('#sendSmsError').fadeIn();
				return;
			}
			var data = {name:fullname,email:email,phone:phone,type:'sms',connectId:connectId}
			$.post(url,data,function(data){
				if(data=="NoLoggedIn")
				{
					$('#sendSmsForm').hide();
					$("#fullname").val($("#smsfullname").val());
					$("#email").val($("#smsemail").val());
					$("#mobile").val($("#smsphone").val());
					$('#registrationForm').fadeIn();
				}
				else
				{
					$("#betaModal").modal('hide');
				}
			});
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
			var data = {name:$('#name-'+id).val(),phone:$('#phone-'+id).val(),email:$('#email-'+id).val(),connectId:connectId,type:'register'};
			$.post("<?php echo base_url('connect/attendEvent')?>",data,function(msg){
			console.log(msg);
			$('.attending-'+id).hide();
			$(".attendingsuccess-"+id).fadeIn();
			var attendCount = parseInt($('#attendCount-'+id).val());
			$('#attendCount-'+id).val(attendCount+1);
			$('#attendCountTxt-'+id).text("+"+(attendCount+1));
			$(".name").val(fullname);
			$(".email").val(email);
			$(".phone").val(phone);
			});
			}
		}
		
		function addLocation()
		{
			var location = $("#locationFilter").val();
			if(location!='')
			{
			  var filtrationCities = $("#filtrationCities").val();
				
			  if(filtrationCities.indexOf(location)<=-1)
			  {
				$("#addingContent").after("<li><i class='icon-remove-sign icon-class-red' id='"+location.substring(0,4)+"' onclick='removeCity(\""+location+"\",this.id)' style='cursor:pointer'></i>"+location+"</li>");
				
				if(filtrationCities=='')
				{
					$("#allLocation").hide();
					$("#filtrationCities").val(location);
				}
				else
					$("#filtrationCities").val(filtrationCities+","+location);
				
				//alert($("#filtrationCities").val());
				url="<?php echo base_url();?>connect/filterByLocation";
				data = {cityName:$("#filtrationCities").val()};
				 $.ajax({
					type	:	'POST',
					data	:	data,
					url		:	url,
					beforeSend: function(){
						$("#connectPagination").css('opicity','0.4');
					},
					success: function(data){
						//alert(data);
						$("#connectPagination").html(data);
						$("#connectPagination").css('opicity','1');
					},
					
				}) 
			  }
			  $("#locationFilter").val('');
			}
		}
		
		function removeCity(cityName,id)
		{
		  var city = cityName;
		  var filtrationCities = $("#filtrationCities").val();
		  filtrationCities = filtrationCities.replace(city+",","");
		  filtrationCities = filtrationCities.replace(","+city,"");
		  filtrationCities = filtrationCities.replace(city,"");
		  $("#filtrationCities").val(filtrationCities);
		  $("#"+id).parent().remove();
		  url="<?php echo base_url();?>connect/filterByLocation";
		  data = {cityName:$("#filtrationCities").val()};
		   $.ajax({
			type	:	'POST',
			data	:	data,
			url		:	url,
			beforeSend: function(){
						$("#connectPagination").css('opicity','0.4');
					},
					success: function(data){
						//alert(data);
						$("#connectPagination").html(data);
						$("#connectPagination").css('opicity','1');
					},
			
		  }) 
		  //if()
		}
		
	  </script>