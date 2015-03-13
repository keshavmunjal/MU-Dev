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



							
						</div>	
						 <!--<div class="span2"><img src="<?php echo base_url();?>assets/images/arrow.jpg" class="pull-left" /></div>-->
						<div class="span6 pull-right">
							<div class="level">
								<h5><span style="float:left;">CARRER SUGGESTIONS</span><span style="float:right;font-weight: normal"> <!--Favourites--></span></h5>
								<ul class="carrer">
									<li>Sales Management</li>
									<li>Real Estate Development</li>
									<li>Marketing Management</li>
									<li>Enterpenureship</li>
									<li>New Product Developenent</li>
									<li>Venture Capital</li>
									<li>Operations Management</li>
									<li>General Management</li>
									<li>Research and Development</li>
									<li>Commertial Banking</li>
									<li>Human Resourse Management</li>
									<li>Engerring Development</li>
									<li>Information managment system</li>
									<li>Security Trading</li>
									<li>Stock Broking</li>
									<li>Corporate Finanace</li>
									
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