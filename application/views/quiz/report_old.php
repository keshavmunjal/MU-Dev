 <!-- contents starts-->
  <?php //print_r($link);
		//echo $link;
		$maxValue = explode('-',$max_score);
		$minValue = explode('-',$min_score);
		
		$maxValueForMotivation = explode('-',$max_score_motivation);
		$minValueForMotivation = explode('-',$min_score_motivation);
		?>
  <div class="demo-mode">
        <div class="container">
          <p> </p>
          <nav class="left">
           <h3 style="margin-top: 3px;color: #666999;">Psychometric Analysis</h3>
          </nav>
          </div>
          
        </div>
		<div class="container career-suggestion">
			
			<div class="row">
				<!--<div class="span12">
					<div class="career-menu-bar">
					<ul> 
						<li><a href="#">Career Suggestion </a></li> 
						<li><a href="#">Browse career </a></li> 
						<li><a href="#">Subject Suggestion  </a></li> 
						<li><a href="#">Browse Subjects  </a></li> 
						<li><a href="#">HE Course search </a></li> 
						<li><a href="#">Favourites </a></li> 
						<ul>
					</div>
				</div>-->
			
				<div class="span12">
					<div class="level level1">
				   <h5>Your Details</h5>
				    <div class="profile">
						<img src="<?php echo base_url();?>assets/img/profile-pic.jpg"/>
					</div>
					<span class="report-profile-text">
						<?php echo $userData['fullname'];?>
						<br>
						<?php echo $userData['email'];?>
					</span>
				   </div>
				   <img src="<?php echo base_url()?>assets/img/arrow.jpg" class="arrow pull-left" />
					<div class="career download">
				     <h5><span style="float:left;">DOWNLOAD CAREER REPORT</span><span style="float:right;"> Favourites</span></h5>
					
					 <ul>
						<!--<li>First<a class="btn btn-success pull-right" target="_blank"  href="<?php echo base_url('Sample Career Direction Profiler Report (TMTR-ITAP) V1.6.pdf')?>"><i class="icon-book"></i>&nbsp;Download</a></li>-->
						<li>First<a class="btn btn-success pull-right" target="_blank"  href="<?php echo base_url()?>assets/fpdf.php?<?php echo $link; ?>"><i class="icon-book"></i>&nbsp;Download</a></li>
						<li>Second<a class="btn btn-info pull-right" href="#"><i class="icon-lock"></i>&nbsp;Download</a></li>
						<li>Third<a class="btn btn-info pull-right" href="#"><i class="icon-lock"></i>&nbsp;Download</a></li>
					 </ul>
				     </div>
				</div>
				<div class="span12">
				 <div style="width:400px">
				   
					<div class="interest">
						<h5>Interest Profile</h5>
						<ul>
							<!--<li><p class="pull-left">Enterprise Control<p><img src="<?php echo base_url()?>assets/img/grid-orange.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Influencing others<p><img src="<?php echo base_url()?>assets/img/grid-blue.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Creative engagement<p><img src="<?php echo base_url()?>assets/img/grid-orange.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Managing teams<p><img src="<?php echo base_url()?>assets/img/grid-green.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Applicaton of Technology<p><img src="<?php echo base_url()?>assets/img/grid-pink.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Coaching and mentoring<p><img src="<?php echo base_url()?>assets/img/grid-orange.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Quantitative analysis<p><img src="<?php echo base_url()?>assets/img/grid-blue.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Research and Development<p><img src="<?php echo base_url()?>assets/img/grid-green.jpg" class="pull-right" /></li>-->
							
							<!-- Part B-->
							<!--<li><p class="pull-left">Influencing Others -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php //echo $score->io*5?>%;"></div>
								</div>
							<?php //echo $score->io?></li>
							<li><p class="pull-left">Controlling Business -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php //echo $score->cb*5?>%;"></div>
								</div>
							<?php //echo $score->cb?></li>
							<li><p class="pull-left">Application of Technology -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php //echo $score->aot*5?>%;"></div>
								</div>
							<?php //echo $score->aot?></li>
							<li><p class="pull-left">Quantitative Analysis -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php //echo $score->qa*5?>%;"></div>
								</div>
							<?php //echo $score->qa?><li>
							<li><p class="pull-left">Research & Development -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php //echo $score->rnd*5?>%;"></div>
								</div>
							<?php //echo $score->rnd?></li>-->
							
							<li><p class="pull-left"><?php echo $maxValue[0];?> -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php echo $maxValue[1]*5?>%;"></div>
								</div>
							<?php echo $maxValue[1]?></li>
							<li><p class="pull-left"><?php echo $minValue[0];?> -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php echo $minValue[1]*5?>%;"></div>
								</div>
							<?php echo $minValue[1]?></li>
							
							<!--End of Part B-->
						</ul>
					 </div>
					 <div class="career" style="float:left;">
						<h5><span style="float:left;">Analysis</span><span style="float:right;"> Favourites</span></h5>
						 
						<?php if(($score->upperLeft>=$score->lowerLeft)&&($score->upperLeft>=$score->lowerRight)&&($score->upperLeft>=$score->upperRight)){?>
						<ul>
							<li style="text-align:center"><strong>SKILLS</strong></li>
							<li style="text-align:center">Analysis, Evaluation, etc.<!--Technical, Critical Assessment--></li>
							<li style="text-align:center"><strong>THINKING STYLE</strong></li>
							<li style="text-align:center">Rational, Precise, etc.<!--Thorough, Logical--></li>
							<li style="text-align:center"><strong>CAREER PROFICIENCY</strong></li>
							<li style="text-align:center">Engineering, Banking, etc.<!--Legal, Medicine--></li>
						</ul>
						<?php } else if(($score->lowerLeft>=$score->upperLeft)&&($score->lowerLeft>=$score->lowerRight)&&($score->lowerLeft>=$score->upperRight)){ ?>
						<ul>
							<li style="text-align:center"><strong>SKILLS</strong></li>
							<li style="text-align:center">Innovation, Lateral Thinking, etc.<!--Vision, Change Catalyst--></li>
							<li style="text-align:center"><strong>THINKING STYLE</strong></li>
							<li style="text-align:center">Exploring, Imaginative, etc.<!--Adventurous, Experimental--></li>
							<li style="text-align:center"><strong>CAREER PROFICIENCY</strong></li>
							<li style="text-align:center">Entrepreneurship, Management, etc.<!--Consulting, Strategizing--></li>
						</ul>
						<?php } else if(($score->lowerRight>=$score->upperLeft)&&($score->lowerRight>=$score->lowerLeft)&&($score->lowerRight>=$score->upperRight)){ ?>
						<ul>
							<li style="text-align:center"><strong>SKILLS</strong></li>
							<li style="text-align:center">Organization, Implementation, etc.<!--Accuracy, Administration--></li>
							<li style="text-align:center"><strong>THINKING STYLE</strong></li>
							<li style="text-align:center">Methodical, Procedural, etc.<!--Reliable, Predictable--></li>
							<li style="text-align:center"><strong>CAREER PROFICIENCY</strong></li>
							<li style="text-align:center">Planning, Supervising, etc.<!--Administration, Auditing--></li>
						</ul>
						<?php } else if(($score->upperRight>=$score->upperLeft)&&($score->upperRight>=$score->lowerLeft)&&($score->upperRight>=$score->lowerRight)){ ?>
						<ul>
							<li style="text-align:center"><strong>SKILLS</strong></li>
							<li style="text-align:center">Customer Relations, Training, etc.<!--Communications, Need Analysis--></li>
							<li style="text-align:center"><strong>THINKING STYLE</strong></li>
							<li style="text-align:center">Emotional, Humanistic, etc.<!--Sociable, Empathetic--></li>
							<li style="text-align:center"><strong>CAREER PROFICIENCY</strong></li>
							<li style="text-align:center">Social Work, Sales, etc.<!--Music, Teaching--></li>
						</ul>
						<?php } ?>
				     </div>
					 <div class="interest">
						<h5>Motivation and Work</h5>
						<ul>
							<!--<li><p class="pull-left">Security<p><img src="<?php echo base_url()?>assets/img/grid-orange.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Life Style<p><img src="<?php echo base_url()?>assets/img/grid-blue.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Variety<p><img src="<?php echo base_url()?>assets/img/grid-orange.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Managing teams<p><img src="<?php echo base_url()?>assets/img/grid-green.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Affiliation<p><img src="<?php echo base_url()?>assets/img/grid-pink.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Intellectual challenge<p><img src="<?php echo base_url()?>assets/img/grid-orange.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Managing People<p><img src="<?php echo base_url()?>assets/img/grid-blue.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Prestige<p><img src="<?php echo base_url()?>assets/img/grid-green.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Autonomy<p><img src="<?php echo base_url()?>assets/img/grid-green.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Positioning<p><img src="<?php echo base_url()?>assets/img/grid-green.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Recognizing<p><img src="<?php echo base_url()?>assets/img/grid-green.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Altruism<p><img src="<?php echo base_url()?>assets/img/grid-green.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Power and Influence<p><img src="<?php echo base_url()?>assets/img/grid-green.jpg" class="pull-right" /></li>
							<li><p class="pull-left">Financial Gain<p><img src="<?php echo base_url()?>assets/img/grid-green.jpg" class="pull-right" /></li>-->
							<!-- Part C-->
							<!--<li><p class="pull-left">Security -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php //echo $score->sec*5;?>%;"></div>
								</div>
							<?php //echo $score->sec?></li>
							<li><p class="pull-left">Variety -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php //echo $score->ver*5?>%;"></div>
								</div>
							<?php //echo $score->ver?></li>
							<li><p class="pull-left">Affiliation -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php //echo $score->affi*5?>%;"></div>
								</div>
							<?php //echo $score->affi?></li>
							<li><p class="pull-left">Recognition -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php //echo $score->rec*5?>%;"></div>
								</div>
							<?php //echo $score->rec?></li>
							<li><p class="pull-left">Autonomy -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php //echo $score->auto*5?>%;"></div>
								</div>
							<?php //echo $score->auto?></li>-->
							<li><p class="pull-left"><?php echo $maxValueForMotivation[0]; ?> -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php echo $maxValueForMotivation[1]*5?>%;"></div>
								</div>
							<?php echo $maxValueForMotivation[1]?></li>
							<li><p class="pull-left"><?php echo $minValueForMotivation[0]?> -  </p>
								<div class="span2 progress pull-right progress-striped active">
									<div class="bar" style="width: <?php echo $minValueForMotivation[1]*5?>%;"></div>
								</div>
							<?php echo $minValueForMotivation[1]?></li>
							<!--End of Part C-->
						</ul>
					</div>
					</div>
				   <img src="<?php echo base_url()?>assets/img/arrow.jpg" class="arrow pull-left" style="margin-top:-100px"/>

				   <div class="career">
				   <h5><span style="float:left;">CAREER SUGGESTIONS</span><span style="float:right;"> Favourites</span></h5>
					<ul>
						<li><p class="pull-left">Sales Management<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Real State Development<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Marketing Management<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Entrepreneurship<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">New Product Development<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Venture Capital<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Operations Management<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">General Management<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Research and Development<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Commercial Banking<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Human Resource Management<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Engineering Development<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Information System Management<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Securities trading<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Stock Broking<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
						<li><p class="pull-left">Corporate Finance<p><img src="<?php echo base_url()?>assets/img/star.jpg" class="pull-right" /></li>
					</ul>
				   </div>
				</div>
				<!--<div class="span12">
					<div class="interest">
						<h5>Skill Area</h5>
						<img src="<?php echo base_url()?>assets/img/chart.png">
					</div>
				   <img src="<?php echo base_url()?>assets/img/arrow.jpg" class="arrow pull-left" style="margin-top:100px" />
					 
				</div>
				<div class="span12">
					<div style="width:400px">
					
					</div>
					 <img src="<?php echo base_url()?>assets/img/arrow.jpg" class="arrow pull-left" style="margin-top:50px" />
					 <div class="career" style="float:left;">
				     <h5><span style="float:left;">Analysis</span><span style="float:right;"> Favourites</span></h5>
					 <ul>
						<li><p class="pull-left">Upper Left (A) -  </p>
							<div class="span2 progress pull-right progress-striped active">
								<div class="bar" style="width: <?php echo $score->upperLeft?>%;"></div>
							</div><?php echo $score->upperLeft?>
						</li>
						<li><p class="pull-left">Lower Left (B) -  </p>
							<div class="span2 progress pull-right progress-striped active">
								<div class="bar" style="width: <?php echo $score->lowerLeft?>%;"></div>
							</div>
						<?php echo $score->lowerLeft?></li>
						<li><p class="pull-left">Lower Right (C)  -  </p>
							<div class="span2 progress pull-right progress-striped active">
								<div class="bar" style="width: <?php echo $score->lowerRight?>%;"></div>
							</div>
						<?php echo $score->lowerRight?></li>
						<li><p class="pull-left">Upper Right (D) -  </p>
							<div class="span2 progress pull-right progress-striped active">
								<div class="bar" style="width: <?php echo $score->upperRight?>%;"></div>
							</div>
						<?php echo $score->upperRight?></li>
						
						
						
						


					 </ul>
				     </div>
				</div>-->
				
			
		</div>
		</div>
      
        <!-- contents ends ->