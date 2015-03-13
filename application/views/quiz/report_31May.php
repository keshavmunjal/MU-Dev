 <!-- contents starts-->
  <?php //print_r($link);
		//echo $max_score_motivation;
		$maxValue = explode('-',$max_score);
		$minValue = explode('-',$min_score);
		
		$maxValueForMotivation = explode('-',$max_score_motivation);
		$minValueForMotivation = explode('-',$min_score_motivation);
		//print_r($maxValue);
		?>
<div id="amplified_modal" class="modal hide fade">
	<div class="modal-header">
		<!--<button type="button" class="close" id="res_close" data-dismiss="modal" aria-hidden="true">x</button>-->
	
		<div style="text-align:center"><img src="<?php echo base_url();?>assets/img/gifted.jpg"></div>
		<div class="bg">
		<span style="float:left"><h1>You Rock!</h1></span>
		<span class="pop-up-text">You took the first step,<br/>let us help you with the rest </span>
		</div>
		<div class="get"><h3>Gifted: Know what you excel at </h3></div>
		<ul class="gifted-popup-ul">
		  <li>
			<img src="<?php echo base_url();?>assets/img/img1.jpg">
			<p>Career Path Finder</p>
		  </li>
		  <li>
			<img src="<?php echo base_url();?>assets/img/img2.jpg">
			<p>Career Reports</p>
		  </li>
		  <li>
			<img src="<?php echo base_url();?>assets/img/img3.jpg">
			<p>30 Min. Counselling</p>
		  </li>
		  <li>
			<img src="<?php echo base_url();?>assets/img/img4.jpg">
			<p>Video Session with Experts</p>
		  </li>
		</ul>
		<div class="get">
		  <!--<a class="btn btn-success" href="http://meetuniversity.in/ccavenue/Index.html" style="margin-top:0px !important" target="_blank">Upgrade</a>-->
		  <a class="btn btn-success" href="<?php echo base_url()?>gifted/high-roi" style="margin-top:0px !important">Upgrade</a>
		  <p><a href="" data-dismiss="modal">No Thanks !</a></p>
		</div>
	</div>	
</div>
<!--Explanation1 modal--->
<div id="explanation_modal1" class="modal hide fade">
	<div class="modal-header">
		<!--<button type="button" class="close" id="res_close" data-dismiss="modal" aria-hidden="true">x</button>-->
	
		<div style="text-align:center"><img src="<?php echo base_url();?>assets/img/gifted.jpg"></div>
		<div class="bg">
		<span style="float:left"><h1>You Rocks!</h1></span>
		<span class="pop-up-text">You look the first step,<br/>let us help with the most </span>
		</div>
		<div class="get"><h3>This is what you get</h3></div>
		<ul class="gifted-popup-ul">
		  <li>
			<img src="<?php echo base_url();?>assets/img/img1.jpg">
			<p>Career Path Finder</p>
		  </li>
		  <li>
			<img src="<?php echo base_url();?>assets/img/img2.jpg">
			<p>Career Reports</p>
		  </li>
		  <li>
			<img src="<?php echo base_url();?>assets/img/img3.jpg">
			<p>30 Min. Counselling</p>
		  </li>
		  <li>
			<img src="<?php echo base_url();?>assets/img/img4.jpg">
			<p>Video Session with Experts</p>
		  </li>
		</ul>
		<div class="get">
		  <a class="btn btn-success" href="#" style="margin-top:0px !important">Upgrade</a>
		  <p><a href="" data-dismiss="modal">No Thanks !</a></p>
		</div>
	</div>	
</div>
<!--Explanation2 modal--->
<div id="explanation_modal2" class="modal hide fade">
	<div class="modal-header">
		<!--<button type="button" class="close" id="res_close" data-dismiss="modal" aria-hidden="true">x</button>-->
	
		<div style="text-align:center"><img src="<?php echo base_url();?>assets/img/gifted.jpg"></div>
		<div class="bg">
		<span style="float:left"><h1>You Rocks!</h1></span>
		<span class="pop-up-text">You look the first step,<br/>let us help with the most </span>
		</div>
		<div class="get"><h3>This is what you get</h3></div>
		<ul class="gifted-popup-ul">
		  <li>
			<img src="<?php echo base_url();?>assets/img/img1.jpg">
			<p>Career Path Finder</p>
		  </li>
		  <li>
			<img src="<?php echo base_url();?>assets/img/img2.jpg">
			<p>Career Reports</p>
		  </li>
		  <li>
			<img src="<?php echo base_url();?>assets/img/img3.jpg">
			<p>30 Min. Counselling</p>
		  </li>
		  <li>
			<img src="<?php echo base_url();?>assets/img/img4.jpg">
			<p>Video Session with Experts</p>
		  </li>
		</ul>
		<div class="get">
		  <a class="btn btn-success" href="#" style="margin-top:0px !important">Upgrade</a>
		  <p><a href="" data-dismiss="modal">No Thanks !</a></p>
		</div>
	</div>	
</div>
<!--Demo modal--->
<div id="demoModal" class="modal hide fade">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal Box
    </div>
	<div class="modal-body">
			<form action="#" method="post" name="frm" id="getCouponCode">
				<div class="control-group">
					<div class="controls">
					  <input type="text" id="coupaonCode" placeholder="Coupon Code" name="coupaonCode">
					</div>
					<div>
						<input class="btn btn-medium btn-info" type="submit" value="Submit" id="form_submit">
					</div>
				</div>
			</form>
			
    </div>
    <div class="modal-footer">
    <p style="font-size:20px;margin-left:180px;"><a href="" data-dismiss="modal">I don't have a coupon !</a></p>
    </div>
</div>
  <div class="container career-suggestion">
			<div class="page">
			<div class="row">
				<div class="span12">
					<div class="career-menu-bar">
					<h3>Gifted : You are Awesome ! We just help you identify where you excel at.</h3>
					</div>
				</div>
			</div>	
			<div class="row">	
				<div class="span12">
					<div class="row">
					<div class="span6 pull-left">
				   <div class=" level">
						<h5>Your Details</h5>
						<div class="col1">
							<div class="name">
							<img src="<?php echo base_url();?>assets/img/img.jpg">
							</div>
							
							<div class="details">
								<div>
								<strong>Name:</strong>
								<span><?php echo $userData['fullname'];?></span>
								</div>
								<div>
								<strong>Email:</strong>
								<span><?php echo $userData['email'];?></span>
								</div>
							</div>
						</div>
							
					</div>
					</div>
				
				   
				   
				   <!--<div class="span2"><img src="<?php echo base_url();?>assets/images/arrow.jpg" class="pull-left" /></div>-->
				   <div class="span6 pull-right">
				   <div class="level">
				   <h5><span style="float:left;">DOWNLOAD CAREER SUGGESTIONS</span><span style="float:right;font-weight: normal"> <!--Favourites--></span></h5>
				   <div class="col1">
					<div class="alpha">
					<img src="<?php echo base_url();?>assets/img/download.jpg">
					</div>
					<div class="beta lock">
						<ul>
							<li>
							<span>Free</span><span><a href="<?php echo base_url()?>assets/fpdf.php?<?php echo $link; ?>" target="_blank"><img src="<?php echo base_url();?>assets/img/free1.jpg" style="margin-left:50px;"></a></span>
							</li>
							<li>
							<span>Amplified</span><span><a id="amplified" href="#"><img src="<?php echo base_url();?>assets/img/free2.jpg"></a></span>
							</li>

							<!--<li>
							<span>free</span><span><img src="<?php echo base_url();?>assets/img/free3.jpg"></span>
							</li>--->

						</ul>
					</div>
					</div>
				   </div>
				   </div>
				   </div>
				   
				</div>
				
				<div class="span12">
					<div class="row">
						<div class="span6 pull-left">	
							<div class="level">
								<h5>Interest mapping</h5>
								<div class="alpha">
									<input type="hidden" id="io" value="<?php echo $score->io/20 ?>">
									<input type="hidden" id="cb" value="<?php echo $score->cb/20 ?>">
									<input type="hidden" id="aot" value="<?php echo $score->aot/20 ?>">
									<input type="hidden" id="qa" value="<?php echo $score->qa/20 ?>">
									<input type="hidden" id="rnd" value="<?php echo $score->rnd/20 ?>">
									<script src="http://d3js.org/d3.v3.min.js"></script>
									<script src="<?php echo base_url();?>assets/js/chart/RadarChart.js"></script>
									<style>
										#body {
										  overflow: hidden;
										  margin: 0;
										  font-size: 0px;
										  font-family: "Helvetica Neue", Helvetica;
										}

										#chart {
										  position: absolute;
										  top: 355px;
										  left: 10px;
										}	
									</style>
									<div id="body">
									  <div id="chart"></div>
									</div>
									
									<script type="text/javascript" src="<?php echo base_url();?>assets/js/chart/script.js"></script>
									<!---<img src="<?php echo base_url();?>assets/img/graph1.jpg">--->
								</div>
								<div class="beta graph_text">
									<p>Interest areas define what field of interest you would tend to suceed more in, a detailed anyalsis would help you chose your key elements of sucess areas</p>
									<a href="#" id="explanation1" class="button">Explanation</a>
								</div>
							</div>	
							
							
							<div class="level">
								<h5>Work values</h5>
								<div class="alpha">
									<input type="hidden" id="sec" value="<?php echo $score->sec/20 ?>">
									<input type="hidden" id="ver" value="<?php echo $score->ver/20 ?>">
									<input type="hidden" id="affi" value="<?php echo $score->affi/20 ?>">
									<input type="hidden" id="rec" value="<?php echo $score->rec/20 ?>">
									<input type="hidden" id="auto" value="<?php echo $score->auto/20 ?>">
									<script src="http://d3js.org/d3.v3.min.js"></script>
									<script src="<?php echo base_url();?>assets/js/chart/RadarChart1.js"></script>
									<style>
										#body1 {
										  overflow: hidden;
										  margin: 0;
										  font-size: 0px;
										  font-family: "Helvetica Neue", Helvetica;
										}

										#chart1 {
										  position: absolute;
										  top: 630px;
										  left: 10px;
										}	
									</style>
									<div id="body1">
									  <div id="chart1"></div>
									</div>
									
									<script type="text/javascript" src="<?php echo base_url();?>assets/js/chart/script1.js"></script>
									<!---<img src="<?php echo base_url();?>assets/img/graph2.jpg">--->
								</div>
								<div class="beta graph_text">
									<p>Work values define your DNA, this identifies the KEY INDEX Values and, how do you rate against each one of them</p>
									<a href="#" id="explanation2" class="button">Explanation</a>
								</div>
							</div>
							
							
							<div class="level">
								<h5><span style="float:left;">Analysis</span><span style="float:right;font-weight: normal"> <!--Favourites--></span></h5>
								<?php if(($score->upperLeft>=$score->lowerLeft)&&($score->upperLeft>=$score->lowerRight)&&($score->upperLeft>=$score->upperRight)){?>
									<div class="analysis_text">
										<b>SKILLS</b></br>
										Analysis, Evaluation, Technical, Critical Assessment</br>
										<b>THINKING STYLE</b></br>
										Rational, Precise, Thorough, Logical</br>
										<b>CAREER PROFICIENCY</b></br>
										Engineering, Banking, Legal, Medicine</br>
									</div>
								<?php } else if(($score->lowerLeft>=$score->upperLeft)&&($score->lowerLeft>=$score->lowerRight)&&($score->lowerLeft>=$score->upperRight)){ ?>
									<div class="analysis_text">
									<b>SKILLS</b></br>
										Innovation, Lateral Thinking, Vision, Change Catalyst</br>
										<b>THINKING STYLE</b></br>
										Exploring, Imaginative, Adventurous, Experimental</br>
										<b>CAREER PROFICIENCY</b></br>
										Entrepreneurship, Management, Consulting, Strategizing</br>
									</div>
								<?php } else if(($score->lowerRight>=$score->upperLeft)&&($score->lowerRight>=$score->lowerLeft)&&($score->lowerRight>=$score->upperRight)){ ?>
									<div class="analysis_text">
									<b>SKILLS</b></br>
										Organization, Implementation, Accuracy, Administration</br>
										<b>THINKING STYLE</b></br>
										Methodical, Procedural, Reliable, Predictable</br>
										<b>CAREER PROFICIENCY</b></br>
										Planning, Supervising, Administration, Auditing</br>
									</div>
								<?php } else if(($score->upperRight>=$score->upperLeft)&&($score->upperRight>=$score->lowerLeft)&&($score->upperRight>=$score->lowerRight)){ ?>
									<div class="analysis_text">
									<b>SKILLS</b></br>
										Customer Relations, Training, Communications, Need Analysis</br>
										<b>THINKING STYLE</b></br>
										Emotional, Humanistic, Sociable, Empathetic</br>
										<b>CAREER PROFICIENCY</b></br>
										Social Work, Sales, Music, Teaching</br>
									</div>
								<?php } ?>
							</div>



							<!-----Facebook API----->
								<a href="#" onClick="publishStream(); return false;">Publish Wall post using Facebook Javascript</a>
							
								
							<!-----end----->
						</div>	
						 <!--<div class="span2"><img src="<?php echo base_url();?>assets/images/arrow.jpg" class="pull-left" /></div>-->
						<div class="span6 pull-right">
							<div class="level">
								<h5><span style="float:left;">CARRER SUGGESTIONS</span><span style="float:right;font-weight: normal"> <!--Favourites--></span></h5>
								<ul class="carrer">
									<?php if($graph_value==1){?>
									<dl>
										<dt>Engineering</dt>
											<dd>Aircraft Technician</dd>
											<dd>Chemical Engineer</dd>
											<dd>CAD Draughting</dd>
											<dd>Civil Engineering</dd>
											<dd>Electricity Distribution</dd>
											<dd>Electric/ Electronic Engineering</dd>
											<dd>Engineering Machinist</dd>
											<dd>Engineering Maintenance Fitter / Technician</dd>
											<dd>Engineer: Energy</dd>
											<dd>Environmental Engineering</dd>
											<dd>Chemical Engineering</dd>
											<dd>Biomedical Engineering</dd>
											<dd>Marine Engineering</dd>
											<dd>Mechanical Engineering</dd>
											<dd>Mining Engineering</dd>
											<dd>Manufacturing Engineering</dd>
											<dd>Nuclear Engineering</dd>
											<dd>Software Engineering</dd>
											<dd>Music Technologist</dd>
											<dd>Sound/ Recording Engineering</dd>
											<dd>Engineering Tech: Communications</dd>
											<dd>Welder</dd>
											<dd>Aerospace Engineering</dd>
											<dd>Food Engineering</dd>
											<dd>Medical Engineering</dd>
											<dd>Textile Engineering</dd>
											<dd>Transport Engineering</dd>
											<dd>Renewable Energy Engineering</dd>
											<dd>Auto Electrician</dd>
											<dd>Land- Based Service Engineering</dd>
											<dd>Aeronautical Technician</dd>
											<dd>Plant Mechanic</dd>
											<dd>Clinical Engineering</dd>
											<dd>Gas Service Engineering</dd>
											<dd>Locksmith</dd>
											<dd>Motor Vehicle Technician</dd>
											<dd>Vehicle Body Shop</dd>
											<dd>Naval Architect</dd>
											<dd>Offshore Gas/ Oil Work</dd>
											<dd>Boat Builder</dd>
											<dd>Communications Engineering</dd>
											<dd>Patrol Officer (Breakdown)</dd>
											<dd>Paint Sprayer</dd>
											<dd>Home Appliance Engineering</dd>
											<dd>Electrical Technician</dd>
											<dd>Mechanical Technician</dd>
											<dd>Engineer – Toolmaker</dd>
											<dd>Electronics Assembler</dd>
											<dd>Alarm Fitter/ Installer</dd>
											<dd>Aerial/ Dish Installer</dd>
											<dd>Tyre & Exhaust Fitter</dd>
											<dd>Bicycle Mechanic</dd>
											<dd>Blacksmith</dd>
											<dd>Electricity Generation</dd>
											<dd>Energy Technician</dd>
											<dd>Gas Distribution</dd>
											<dd>Motorcycle Mechanic</dd>
											<dd>Sound Recordist</dd>
											<dd>Watch/ Clock Repairer</dd>
											<dd>Windscreen Technician</dd>
											<dd>Engineer: Land Based</dd>
										<dt>Banking</dt>
										<dt>Legal</dt>
											<dd>Court Usher</dd>
											<dd>Barrister/ Advocate</dd>
											<dd>Tax Lawyer</dd>
											<dd>Banking Solicitor</dd>
											<dd>Company Secretary</dd>
											<dd>Solicitor</dd>
											<dd>Legal Executive</dd>
											<dd>Patent Examiner</dd>
											<dd>Politician</dd>
											<dd>Barrister’s Clerk</dd>
											<dd>Licensed Conveyancer</dd>
											<dd>Court Officer</dd>
											<dd>Court Clerk (Legal Adviser)</dd>
											<dd>Law Costs Draftsperson</dd>
											<dd>Paralegal</dd>
											<dd>Patent Attorney</dd>
										<dt>Medicine</dt>
									</dl>
								<?php } else if($graph_value==2){ ?>
									<dl>
										<dt>Entrepreneurship</dt>
										<dt>Management</dt>
											<dd>Banking & Insurance Management</dd>
											<dd>Finance Management</dd>
											<dd>Human Resource Management</dd>
											<dd>Marketing & Sales Management</dd>
											<dd>Operations Management</dd>
											<dd>Rural Management</dd>
											<dd>Export Management</dd>
											<dd>Business Management</dd>
											<dd>Civil Service Management</dd>
											<dd>Management Consultant</dd>
											<dd>Waste Management</dd>
											<dd>Business Manager</dd>
											<dd>Investment Manager</dd>
											<dd>Business Development Manager</dd>
										<dt>Consulting</dt>
										<dt>Strategizing</dt>
									</dl>
								<?php } else if($graph_value==3){ ?>
									<dl>
										<dt>Planning</dt>
										<dt>Supervising</dt>
										<dt>Administration</dt>
											<dd>Business Administration</dd>
											<dd>Business Manager</dd>
											<dd>Civil Service: Manager</dd>
											<dd>Civil Service: ‘Fast Stream’ Trainee</dd>
											<dd>Civil Service Scientist</dd>
											<dd>Civil Service: Finance Service(HMRC)</dd>
											<dd>Civil Service: Administration</dd>
											<dd>Civil Service: DEFRA(Department for Environment, Food & Rural Affairs)</dd>
											<dd>Civil Service: DESG (Defence Engineering & Science Group)</dd>
											<dd>Civil Service: Legal Service</dd>
											<dd>Civil Service: Intelligence Officer</dd>
											<dd>Administration</dd>
											<dd>Diplomat</dd>
											<dd>Environmental Health</dd>
											<dd>Local Government: Manager</dd>
											<dd>Local Government: Clerical Staff</dd>
											<dd>Human Resources</dd>
											<dd>Chartered Secretary (Professional Administrator)</dd>
											<dd>Receptionist</dd>
											<dd>Secretary</dd>
											<dd>Trading Standards Officer</dd>
											<dd>Agricultural Administrator</dd>
											<dd>Employment Consultant</dd>
											<dd>Health & Safety Inspector</dd>
											<dd>Bilingual Secretary</dd>
											<dd>Supervisor</dd>
											<dd>Medical Secretary</dd>
											<dd>Estimator</dd>
											<dd>Legal Secretary</dd>
											<dd>Project Manager</dd>
											<dd>Medical Receptionist</dd>
											<dd>Executive Secretary/ P.A.</dd>
											<dd>Executive Search</dd>
											<dd>Business Development Manager</dd>
											<dd>European Union Administrator</dd>
											<dd>Ergonomist</dd>
											<dd>Health & Safety</dd>
											<dd>Revenue Officer</dd>
											<dd>Telephonist</dd>
										<dt>Auditing</dt>
									</dl>
								<?php } else if($graph_value==4){ ?>
								
									<dl>
										<dt>Social Work</dt>
										<dt>Sales</dt>
											<dd>Antiques & Art Dealer</dd>
											<dd>Retail Manager</dd>
											<dd>Florist</dd>
											<dd>Sales Assistant</dd>
											<dd>Market Trader</dd>
											<dd>Meter Reader</dd>
											<dd>Merchandiser</dd>
											<dd>Customer Service Manager/ Advisor</dd>
											<dd>Builders Merchant</dd>
											<dd>Vehicle Sales Executive</dd>
											<dd>Post Office(Counter Staff)</dd>
											<dd>Wholesale Manager</dd>
											<dd>Retail Jeweller</dd>
											<dd>Call Centre Operator</dd>
											<dd>Butcher</dd>
											<dd>Checkout Operator</dd>
											<dd>Car Rental Agent</dd>
											<dd>Bookseller</dd>
											<dd>Vehicle Parts Operative</dd>
										<dt>Music</dt>
										<dt>Teaching</dt>
											<dd>Professor</dd>
											<dd>University Lecturer</dd>
											<dd>Nursery Nurse</dd>
											<dd>P.E. Teacher</dd>
											<dd>Teacher: Secondary</dd>
											<div id="career" style="display:none;">
												<dd>Music Teacher</dd>
												<dd>Teacher: Special Education Needs</dd>
												<dd>Pre-school Leader</dd>
												<dd>Teaching Assistant</dd>
												<dd>Teacher of English to Speakers of Other Languages</dd>
												<dd>College Lecturer</dd>
												<dd>Nursery Assistant</dd>
												<dd>Teacher: Primary</dd>
												<dd>School Bursar</dd>
												<dd>School Secretary</dd>
											</div>
									</dl>
								
								<div id="opener"><a href="#1" name="1" onclick="return show();">+More</a></div>
								<?php } ?>
									
								</ul>
							</div>	
							
						</div>
					</div>	
						 
				   
				</div>
				
				
				
			
		</div>
		</div>
		</div>
      
        <!-- contents ends -->
		
		<?php $this->load->view('layout/js');?>
		<!--More button for div show--->
		<script> 
		function show() { 
			if(document.getElementById('career').style.display=='none') { 
				document.getElementById('career').style.display='block'; 
			} 
			return false;
		} 
		</script>
		<!--end-->
		<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-modal.js"></script>
		<script>
		$(document).on("click","#amplified",function(){
		$('#amplified_modal').modal('show');return false;
		});</script>
		
		<script>
		$(document).on("click","#explanation1",function(){
		$('#explanation_modal1').modal('show');return false;
		});</script>
		
		<script>
		$(document).on("click","#explanation2",function(){
		$('#explanation_modal2').modal('show');return false;
		});</script>
		<script>
		$(document).ready(function(){
		$('#demoModal').modal('show');return false;
		});</script>
		
		<script type="text/javascript">
        function streamPublish(name, description, hrefTitle, hrefLink, userPrompt){        
            FB.ui({ method : 'feed', 
                    message: userPrompt,
                    link   :  hrefLink,
                    caption:  hrefTitle,
                    picture: 'http://meetuniv.com/assets/img/gifted.jpg'
           });
           //http://developers.facebook.com/docs/reference/dialogs/feed/

        }
        function publishStream(){
            streamPublish("Stream Publish", 'Check my public link!', 'Public Link!', 'http://meetuniv.com/gifted/report', "Public Link to my File");
        }

        function newInvite(){
             var receiverUserIds = FB.ui({ 
                    method : 'apprequests',
                    message: 'Come on man checkout my applications. visit http://meetuniv.com/gifted/report',
             },
             function(receiverUserIds) {
                      console.log("IDS : " + receiverUserIds.request_ids);
                    }
             );
             //http://developers.facebook.com/docs/reference/dialogs/requests/
        }
    </script>
	
	<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
	 <script type="text/javascript">
	   FB.init({
		 appId  : '573246749399495',
		 status : true, // check login status
		 cookie : true, // enable cookies to allow the server to access the session
		 xfbml  : true  // parse XFBML
	   });

	 </script>