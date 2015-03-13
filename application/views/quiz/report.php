<!--Demo modal--->
<?php
//echo "<pre>";print_r($this->session->userdata);exit; ?>
<div id="demoModal" class="modal hide fade">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Confirmation Message
    </div>
	<div class="modal-body">
			<form action="#" method="post" name="frm" id="getCouponCode">
				<div class="control-group">
					<div class="controls">
					  <h5>Congrats on sharing it with your friends !</h5><br/>
					  <h6>Please check your email.</h6>
					  
					</div>
				</div>
			</form>
	</div>
    <div class="modal-footer">
    <p style="font-size:20px;margin-left:240px;"><a href="" data-dismiss="modal">Thanks !</a></p>
    </div>
</div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">

		$(document).ready(function(){	
			/***********For Eagle**********/
			$('.Tips-skills').hover(function(){			
				$('.skills-eagle').css('visibility','visible');
			},function(){
				$('.skills-eagle').css('visibility','hidden');
			});
			$('.Tips-thinking').hover(function(){			
				$('.thinking-eagle').css('visibility','visible');
			},function(){
				$('.thinking-eagle').css('visibility','hidden');
			});
			$('.Tips-leadership').hover(function(){			
				$('.leadership-eagle').css('visibility','visible');
			},function(){
				$('.leadership-eagle').css('visibility','hidden');
			});
			$('.Tips-career').hover(function(){			
				$('.career-eagle').css('visibility','visible');
			},function(){
				$('.career-eagle').css('visibility','hidden');
			});
			
			/***********Bear**********/
			$('.Tips-bear1').hover(function(){			
				$('.skills-bear').css('visibility','visible');
			},function(){
				$('.skills-bear').css('visibility','hidden');
			});
			$('.Tips-bear2').hover(function(){			
				$('.thinking-bear').css('visibility','visible');
			},function(){
				$('.thinking-bear').css('visibility','hidden');
			});
			$('.Tips-bear3').hover(function(){			
				$('.leadership-bear').css('visibility','visible');
			},function(){
				$('.leadership-bear').css('visibility','hidden');
			});
			$('.Tips-bear4').hover(function(){			
				$('.career-bear').css('visibility','visible');
			},function(){
				$('.career-bear').css('visibility','hidden');
			});
			
			/***********Dolphin**********/
			$('.Tips-dolphin1').hover(function(){			
				$('.skills-dolphin').css('visibility','visible');
			},function(){
				$('.skills-dolphin').css('visibility','hidden');
			});
			$('.Tips-dolphin2').hover(function(){			
				$('.thinking-dolphin').css('visibility','visible');
			},function(){
				$('.thinking-dolphin').css('visibility','hidden');
			});
			$('.Tips-dolphin3').hover(function(){			
				$('.leadership-dolphin').css('visibility','visible');
			},function(){
				$('.leadership-dolphin').css('visibility','hidden');
			});
			$('.Tips-dolphin4').hover(function(){			
				$('.career-dolphin').css('visibility','visible');
			},function(){
				$('.career-dolphin').css('visibility','hidden');
			});
			
			/***********Lion**********/
			$('.Tips1').hover(function(){			
				$('.skills-lion').css('visibility','visible');
			},function(){
				$('.skills-lion').css('visibility','hidden');
			});
			$('.Tips2').hover(function(){			
				$('.thinking-lion').css('visibility','visible');
			},function(){
				$('.thinking-lion').css('visibility','hidden');
			});
			$('.Tips3').hover(function(){			
				$('.leadership-lion').css('visibility','visible');
			},function(){
				$('.leadership-lion').css('visibility','hidden');
			});
			$('.Tips4').hover(function(){			
				$('.career-lion').css('visibility','visible');
			},function(){
				$('.career-lion').css('visibility','hidden');
			});
		});
		
	</script>
   
    <style>
	  .standard:hover{background:#f7f7f3;}
	  .standard{background:#fff;}
	  .pro:hover{background:#f7f7f3;}
	  .pro{background:#fff;}	  
	  </style>
	    <!--css add by Debangan-->
	 <style>
	   .giftHeading{color:#0073d1 !important;font-size:36px; font-family: 'Open Sans', sans-serif;}
	   .overviewHeading{color:#005281 !important;}
	   .workDiv{width: 100%;background: #005281 !important;padding-top: 3%;padding-bottom: 3%;padding-left: 1%;padding-right: 1%;text-align: center;color: #fff;font-size: 16px;}
	   .pdf_download{color:#0176ba !important; margin-top: 18px;}
	   .upgrade{color:#0176ba !important;}
       .book{margin-left: -224px;}
	   .orange_button{margin-top: 23px;}
	   .chart_one {margin-top: 17px;}
       .obama{float: left;
margin-left: 6px;
margin-right: 7px;
margin-top: 13px;}
       .what_you_get{margin-top: 23px; margin-left: -170px;;}
       .name_leader{font-size: 13px;color: #0176ba;}
	
	<!--toottip-->
	
	.tool-tip {
	color: #fff;
	width: 139px;
	z-index: 13000;
	}
	 
	.tool-title {
		font-weight: bold;
		font-size: 11px;
		margin: 0;
		color: #9FD4FF;
		padding: 8px 8px 4px;
		background: url('../assets/images/pshycometric_img/img/bubble.png') top left;
	}
	 
	.tool-text {
		font-size: 11px;
		padding: 4px 8px 8px;
		background: url('../assets/images/pshycometric_img/img/bubble.png') bottom right;
	}

	.custom-tip {
		color: #000;
		width: 130px;
		z-index: 13000;
	}

	.custom-title {
		font-weight: bold;
		font-size: 11px;
		margin: 0;
		color: #3E4F14;
		padding: 8px 8px 4px;
		background: #C3DF7D;
		border-bottom: 1px solid #B5CF74;
	}

	.custom-text {
		font-size: 13px;
		padding: 20px 10px 15px;
		background: #f8ffeb;
		width:230px;
        height: 90px;
        border:2px solid #90bb47;
		border-radius:5px;
		color:#7faa35;
		font-weight:bold;
		
		}
	
	.custom1-text {
		font-size: 13px;
		padding: 20px 10px 15px;
		background: #eff6ff;
		width:230px;
        height: 90px;
        border:2px solid #2a8dc6;
		border-radius:5px;
		color:#2a8dc6;
		font-weight:bold;
		
		}
		
	.custom2-text {
		font-size: 13px;
		padding: 20px 10px 15px;
		background: #fffdee;
		width:230px;
        height: 90px;
        border:2px solid #c7b826;
		border-radius:5px;
		color:#c7b826;
		font-weight:bold;
		
		}
		.custom3-text {
		font-size: 13px;
		padding: 20px 10px 15px;
		background: #fff0ef;
		width:230px;
        height: 90px;
        border:2px solid #e55d51;
		border-radius:5px;
		color:#e55d51;
		font-weight:bold;
		}
		.eagle_pic
		{
		background-image:url('../assets/images/pshycometric_img/img/eaglePic.png'); 
		background-repeat:no-repeat ; 
		background-position:center;
		margin-top: 50px;
		margin-left: 38px;
		margin-bottom: 64px;
		margin-right:132px
			}
		.dolphin_pic
		{
		background-image:url('../assets/images/pshycometric_img/img/dolphinPic.png'); 
		background-repeat:no-repeat ; 
		background-position:center;
		margin-top: 50px;
		margin-left: 38px;
		margin-bottom: 64px;
		margin-right:132px
			}
		.bear_pic
		{
		background-image:url('../assets/images/pshycometric_img/img/bearPic.png'); 
		background-repeat:no-repeat ; 
		background-position:center;
		margin-top: 50px;
		margin-left: 38px;
		margin-bottom: 64px;
		margin-right:132px
			}
		.loin_pic
		{
		background-image:url('../assets/images/pshycometric_img/img/lionPic.png'); 
		background-repeat:no-repeat ; 
		background-position:center;
		margin-top: 50px;
		margin-left: 38px;
		margin-bottom: 64px;
		margin-right:132px
			}
		.bar:hover {
		  -webkit-filter:drop-shadow(-3px 0px 4px black);
		   -ms-filter:drop-shadow(-3px 0px 4px black);
		   -moz-filter:drop-shadow(-3px 0px 4px black);
		}
		.word{
		font-size:24px !important;
		font-family: 'Open Sans', sans-serif;
		}
	.social_media{margin-top: -76px !important;}
	  </style>

  <!--main-->
      <div role="main" id="main">
         <div class="row container">
            <article id="college_listing" class="page">
               <div class="span12">
			       <h1 class="word" >You are <span class="giftHeading">AWESOME !</span></h1>
			       <h1 class="word">We just help you identify where you excel at.</h1>
			       <h2 class="overviewHeading">Personality Overview</h2>
			   </div>
				
				
			    <div class="span7 pull-left ">
					<?php if($graph_value == '1'){?>
					<div class="eagle_pic">
					   <div id="demo" >		
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/skills.png" alt="mooCow" class="Tips-skills bar" title="" />
						<div class="skills-eagle" style="position: absolute; top: 107px; left:-57px; visibility: hidden;"><div><div class="custom1-text"><span>
						<!--skills--->
						<ul><li>Analysis</li> 	
						    <li>Evaluation</li> 	
						    <li>Technical</li> 
						    <li>Financial</li></ul></span></div></div>
						</div>
						 
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/thinking.png" alt="mooCow" class="Tips-thinking bar" title="" />
						<div class="thinking-eagle" style="position: absolute; top: 178px; left: 395px; visibility: hidden;"><div><div class="custom2-text"><span>
						<!--thinking--->
						<ul><li>Rational</li> 	
						    <li>Thorough</li> 	
						    <li>Precise</li> 
						    <li>Logical</li></ul>
						</span></div></div>
						</div>
						
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/leadership.png" alt="mooCow" class="Tips-leadership bar" title="" />
						<div class="leadership-eagle" style="position: absolute; top: 478px; left: -160px; visibility: hidden;"><div><div class="custom3-text"><span>
						<!--leadership--->
						<ul><li>Rigid</li> 	
						    <li>Ruthless</li> 
							<li>Calculating</li> 
						    <li>Short term</li></ul></span></div></div>
						</div>
						
						
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/career.png" alt="mooCow" class="Tips-career bar" title="" />
						<div class="career-eagle" style="position: absolute; top: 452px; left: 404px; visibility: hidden;">
						<div><div class="custom-text"><span>
						<!--career--->
						<ul><li>Engineering</li> 	
						    <li>Banking</li>
                            <li>Legal</li> 							
                            <li>Medicine</li> 							
						    </ul></span></div></div>
						</div>
					</div>
					</div>	
					
					<?php } else if($graph_value == '2'){ ?>
					<div class="bear_pic">
					   <div id="demo" >		
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/skills.png" style="cursor:pointer;" alt="mooCow" class="Tips-bear1 bar" title=""/>
						 <div class="skills-bear" style="position: absolute; top: 107px; left:-57px; visibility: hidden;"><div><div class="custom1-text"><span>
						<!--skills--->
						<ul><li>Organization</li> 	
						    <li>Implementation</li> 	
						    <li>Accuracy</li> 
						    <li>Administration</li></ul></span></div></div>
						</div>
				
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/thinking.png" style="cursor:pointer;" alt="mooCow" class="Tips-bear2 bar" title="" />
						<div class="thinking-bear" style="position: absolute; top: 178px; left: 395px; visibility: hidden;"><div><div class="custom2-text"><span>
						<!--thinking--->
						<ul><li>Careful</li> 	
						    <li>Methodical</li> 	
						    <li>Procedural</li> 
						    <li>Reliable</li></ul>
						</span></div></div>
						</div>
						
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/leadership.png" style="cursor:pointer;" alt="mooCow" class="Tips-bear3 bar" title="" />
						<div class="leadership-bear" style="position: absolute; top: 478px; left: -160px; visibility: hidden;"><div><div class="custom3-text"><span>
						<!--leadership--->
						<ul><li>Bossy</li> 	
						    <li>Stuck in a rut</li> 
							<li>Boring</li></ul></span></div></div>
						</div>
				
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/career.png" style="cursor:pointer;" alt="mooCow" class="Tips-bear4 bar" title="" />
						<div class="career-bear" style="position: absolute; top: 452px; left: 404px; visibility: hidden;"><div><div class="custom-text"><span>
						<!--career--->
						<ul><li>Planning</li> 	
						    <li>Supervising</li>
                            <li>Auditing</li> 							
						    </ul></span></div></div>
						</div>
					</div>
					</div>	
					
					<?php } else if($graph_value == '3'){ ?>
					<div class="dolphin_pic">
					   <div id="demo" >		
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/skills.png" style="cursor:pointer;" alt="mooCow" class="Tips-dolphin1 bar" title=""/>
						<div class="skills-dolphin" style="position: absolute; top: 107px; left:-57px; visibility: hidden;"><div><div class="custom1-text"><span>
						<!--skills--->
						<ul><li>Customer relations</li> 	
						    <li>Teaching/Training</li> 	
						    <li>Anticipating needs</li> 
						    <li>Communication</li></ul></span></div></div>
						</div>
						 
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/thinking.png" style="cursor:pointer;" alt="mooCow" class="Tips-dolphin2 bar" title="" />
						<div class="thinking-dolphin" style="position: absolute; top: 178px; left: 395px; visibility: hidden;"><div><div class="custom2-text"><span>
						<!--thinking--->
						<ul><li>Caring</li> 	
						    <li>Emotional</li> 	
						    <li>Empathetic</li> 
						    <li>Humanistic</li></ul>
						</span></div></div>
						</div>
						
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/leadership.png" style="cursor:pointer;" alt="mooCow" class="Tips-dolphin3 bar" title="" />
						<div class="leadership-dolphin" style="position: absolute; top: 478px; left: -160px; visibility: hidden;"><div><div class="custom3-text"><span>
						<!--leadership--->
						<ul><li>Over sensitive</li> 	
						    <li>Not very businesslike</li> 
							<li>Sentimental</li></ul></span></div></div>
						</div>
						
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/career.png" style="cursor:pointer;" alt="mooCow" class="Tips-dolphin4 bar" title="" />
						<div class="career-dolphin" style="position: absolute; top: 452px; left: 404px; visibility: hidden;"><div><div class="custom-text"><span>
						<!--career--->
						<ul><li>Social Work</li> 	
						    <li>Sales</li>
                            <li>Music</li> 							
						    </ul></span></div></div>
						</div>
						
					</div>
					</div>	
					<?php } else if($graph_value == '4'){ ?>
					<div class="loin_pic">
					   <div id="demo" >		
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/skills.png" style="cursor:pointer;" alt="mooCow" class="Tips1 bar" title=""/>
						<div class="skills-lion" style="position: absolute; top: 107px; left:-57px; visibility: hidden;"><div><div class="custom1-text"><span>
						<!--skills--->
						<ul><li>Innovation</li> 	
						    <li>Vision</li> 	
						    <li>Synthesis</li> 
						    <li>Strategic thinking</li></ul></span></div></div>
						</div>

						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/thinking.png" style="cursor:pointer;" alt="mooCow" class="Tips2 bar" title="" />
						<div class="thinking-lion" style="position: absolute; top: 178px; left: 395px; visibility: hidden;"><div><div class="custom2-text"><span>
						<!--thinking--->
						<ul><li>Exploring</li> 	
						    <li>Imaginative</li> 	
						    <li>Adventurous</li> 
						    <li>Experimental</li></ul>
						</span></div></div>
						</div>
						
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/leadership.png" style="cursor:pointer;" alt="mooCow" class="Tips3 bar" title="" />
						<div class="leadership-lion" style="position: absolute; top: 478px; left: -160px; visibility: hidden;"><div><div class="custom3-text"><span>
						<!--leadership--->
						<ul><li>Unfocused</li> 	
						    <li>Vague</li> 
							<li>Guessing to take decisions</li> 
						    <li>SRash and Impulsive</li></ul></span></div></div>
						</div>
						
						<img src="<?php echo base_url()?>assets/images/pshycometric_img/img/career.png" style="cursor:pointer;" alt="mooCow" class="Tips4 bar" title="">
						<div class="career-lion" style="position: absolute; top: 452px; left: 404px; visibility: hidden;"><div><div class="custom-text"><span>
						<!--career--->
						<ul><li>Entrepreneurship</li> 	
						    <li>Management Consulting</li>
                            <li>Strategizing</li> 							
						    </ul></span></div></div>
						</div>
						
					</div>
					</div>	
					<?php } ?>
				</div>
				<div class="span5  pull-right">
				   <!----Facebook API---->
				   <div class="social_media pull-right"><img src="<?php echo base_url()?>assets/images/pshycometric_img/img/socialMedia.jpg"></div>
				   <div class="media_logo"><a href="#" onClick="FBShareOp(); return false;">
				   <img src="<?php echo base_url()?>assets/images/pshycometric_img/img/facebook.png"></a>
				   <!----Twitter API---->
				   <a id="ref_tw" href="http://twitter.com/home?status=<?php 
				   if($graph_value == '1'){
					echo "I'm a Eagle! What animal are you? Take the gifted Quiz to find out what animal personality you are...!"; 
				   }else if($graph_value == '2'){
					echo "I'm a Bear! What animal are you? Take the gifted Quiz to find out what animal personality you are...!";
				   }else if($graph_value == '3'){
					echo "I'm a Dolphin! What animal are you? Take the gifted Quiz to find out what animal personality you are...!";
				   }else if($graph_value == '4'){
					echo "I'm a Lion! What animal are you? Take the gifted Quiz to find out what animal personality you are...!";
				   }
				   ?>+<?php echo 'http://meetuniv.com/gifted-intro';?>"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false;"><img src="<?php echo base_url()?>assets/images/pshycometric_img/img/twitter.png"></a>
				</div>
				   
		<div class="workDiv">Work Value</div>
					<input type="hidden" id="io" value="<?php echo $score->io/20 ?>">
									<input type="hidden" id="cb" value="<?php echo $score->cb/20 ?>">
									<input type="hidden" id="aot" value="<?php echo $score->aot/20 ?>">
									<input type="hidden" id="qa" value="<?php echo $score->qa/20 ?>">
									<input type="hidden" id="rnd" value="<?php echo $score->rnd/20 ?>">
									<!-- canvg library for converting svg to png -->
									<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/rgbcolor.js"></script>
									<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/canvg.js"></script>
									
									<script src="http://d3js.org/d3.v3.min.js"></script>
									<script src="http://meetuniv.com/assets/js/jquery-1.10.1.min.js"></script>
									<script src="<?php echo base_url();?>assets/js/chart/RadarChart.js"></script>
									<script src="<?php echo base_url();?>assets/js/chart/RadarChart1.js"></script>
									<script type="text/javascript" src="<?php echo base_url();?>assets/js/chart/script.js"></script>
									
									<script type="text/javascript">
									$(document).ready(function(){
									//alert("test");
									first_chart();
									second_chart();
									//alert("test2");
									saveAsImg(document.getElementById('chart'),1);
									saveAsImg(document.getElementById('chart1'),2);
									});
									
									function getImgData(chartContainer, imgcount) 
									{
									
										var chartArea = chartContainer.getElementsByTagName('svg')[0].parentNode;
										var svg = chartArea.innerHTML;
										var doc = chartContainer.ownerDocument;
										var canvas = doc.createElement('canvas');
										canvas.setAttribute('width', chartArea.offsetWidth);
										canvas.setAttribute('height', chartArea.offsetHeight);


										canvas.setAttribute(
										'style',
										'position: absolute; ' +
										'top: ' + (-chartArea.offsetHeight * 2) + 'px;' +
										'left: ' + (-chartArea.offsetWidth * 2) + 'px;');
										doc.body.appendChild(canvas);
										canvg(canvas, svg);
										var imgData = canvas.toDataURL("image/png");
										canvas.parentNode.removeChild(canvas);
										//alert(imgData);
										data = imgData;
										$.ajax({ 
											type: "POST", 
											url: '<?php echo base_url();?>/quiz/create_img/'+imgcount,
											dataType: 'text',
											data: {
												base64data : data
											},
											success:function(msg){
												//alert(msg);
												var graphName = msg;
												$('#pdflink').attr('href',$('#pdflink').attr('href')+'&graph'+imgcount+'='+msg);
											}
										});
										//return imgData;
									}

									function saveAsImg(chartContainer,imgcount) 
									{
										//alert("saveImg");
										var imgData = getImgData(chartContainer,imgcount);
										//window.location.href = imgData.replace("image/png", "image/octet-stream");
									}
									
									</script>
									
									
									<style>
										#body1 {
										  overflow: hidden;
										  margin: 0;
										  font-size: 0px;
										  font-family: "Helvetica Neue", Helvetica;
										}

										#chart1 {
										  position: absolute;
										  top: 420px;
										  left: 620px;
										}	
									</style>
									<div id="body1">
									  <div id="chart1"></div>
									</div>
									
					 <!--<div class="chart_one"><img src="<?php echo base_url()?>assets/images/pshycometric_img/img/chart_1.png"></div>--->
				
				</div>		
				<input type="hidden" id="sec" value="<?php echo $score->sec/20 ?>">
				<input type="hidden" id="ver" value="<?php echo $score->ver/20 ?>">
				<input type="hidden" id="affi" value="<?php echo $score->affi/20 ?>">
				<input type="hidden" id="rec" value="<?php echo $score->rec/20 ?>">
				<input type="hidden" id="auto" value="<?php echo $score->auto/20 ?>">
			<div class="clearfix"></div>
            <div class="span5  pull-left">
			<div class="workDiv">Interest Mapping</div>
			<style>
				#body {
				  overflow: hidden;
				  margin: 0;
				  font-size: 0px;
				  font-family: "Helvetica Neue", Helvetica;
				}

				#chart {
				  position: absolute;
				  top: 690px;
				  left: 45px;
				}	
			</style>
			<div id="body">
			  <div id="chart"></div>
			</div>
			<!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/chart/script1.js"></script>-->
			<!--<div class="chart_one"><img src="<?php echo base_url()?>assets/images/pshycometric_img/img/chart_2.png"></div>-->	
			</div>	
			   <div class="span5  pull-right">
			<div class="workDiv">Famous Personality</div>
			<div class="famous">
			<?php if($graph_value == '1'){?>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/eagle/obama.png"><p class="name_leader">Barack Obama</p></div>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/eagle/mark.png"><p class="name_leader">Mark Zuckerberg</p></div>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/eagle/bill.png"><p class="name_leader">Bill Gates</p></div>
			<?php }else if($graph_value == '2'){?>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/bear/Emma-Watson.jpg"><p class="name_leader">Emma Watson</p></div>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/bear/Michelle-obama.jpg"><p class="name_leader">Michelle Obama</p></div>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/bear/Victoria-Beckham.jpg"><p class="name_leader">Victoria Beckham</p></div>
			<?php }else if($graph_value == '3'){?>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/dolphin/Mahatma-Gandhi.jpg"><p class="name_leader">Mahatma Gandhi</p></div>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/dolphin/Robert-Pattinson.jpg">
				<p class="name_leader">Robert Pattinson</p></div>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/dolphin/Selena-Gomez.jpg"><p class="name_leader">Selena Gomez</p></div>
			<?php }else if($graph_value == '4'){?>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/lion/Justin-Bieber.jpg"><p class="name_leader">Justin Bieber</p></div>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/lion/Lady-Gaga.jpg"><p class="name_leader">Lady Gaga</p></div>
				<div class="obama"><img src="<?php echo base_url()?>assets/images/pshycometric_img/lion/Steve-Jobs.jpg"><p class="name_leader">Steve Jobs</p></div>
			<?php  } ?>
			</div>
			</div>
			<div class="clearfix"></div>
	
		<div class="span7  pull-left">	
            <h3 class="pdf_download" >Click to Download a brief personality profile</h3>			
			</div>
			<div class="span2  pull-right">	
            <div class="book" ><a href="<?php echo base_url()?>assets/fpdf.php?<?php echo $link; ?>" target="_blank"><img src="<?php echo base_url()?>assets/images/pshycometric_img/img/book.png"></a></div></div>
          	
						<div class="clearfix"></div>
			  <div class="span8  pull-left">	
            <h3 class="pdf_download" >Upgrade to get an Amplified Personality analysis</h3>			
			</div>
			<div class="span2  pull-right">	
            <div class="what_you_get" ><a id="pdflink" href="<?php echo base_url()?>gifted/high-roi?graphVal=<?php echo $graph_value;?>&graph1=graph1_101402425032.png&graph2=graph2_9621403096217.png"><img src="<?php echo base_url()?>assets/images/pshycometric_img/img/button.png"></a></div></div>
            <!--<div class="what_you_get" ><a id="" href="<?php echo base_url()?>assets/inDepthAnalysisFpdf.php?value=<?php echo $graph_value; ?>" target="_blank"><img src="<?php echo base_url()?>assets/images/pshycometric_img/img/button.png"></a></div></div>-->
					
            </article>
            </div>
         </div>
         <!--end main-->
		<?php
		/* $size = 8;
		$string = strtoupper(substr(md5(time().rand(10000,99999)), 0, $size));
		echo $string; */
		?>
        

<?php $this->load->view('layout/js');?>
<script type="application/javascript">
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '573246749399495',                            
      status     : true,                                 
      xfbml      : true                                  
    });

  };

// Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

function FBShareOp(){
	var graphVal= '<?php echo $graph_value;?>';
	if(graphVal == '1'){
		var product_name   = 	"I'm an Eagle! What animal are you?";
		//var share_image	   =	'<?php echo base_url();?>assets/images/pshycometric_img/img/eagle12.jpg';
	}else if(graphVal == '2'){
		var product_name   = 	"I'm a Bear! What animal are you?";
	}else if(graphVal == '3'){
		var product_name   = 	"I'm a Dolphin! What animal are you?";
	}else if(graphVal == '4'){
		var product_name   = 	"I'm a Lion! What animal are you?";
	}
	var description	   =	"Take the gifted Quiz to find out what animal personality you are. Discover what makes you tick, what you're naturally good at, and what careers may suit you.";
	//var share_image	   =	'http://meetuniv.com/assets/img/gifted.jpg';
	if(graphVal == '1'){
		var share_image	   =	'<?php echo base_url();?>assets/images/pshycometric_img/img/eagle12.jpg';
	}else if(graphVal == '2'){
		var share_image	   =	'<?php echo base_url();?>assets/images/pshycometric_img/img/bear12.jpg';
	}else if(graphVal == '3'){
		var share_image	   =	'<?php echo base_url();?>assets/images/pshycometric_img/img/dolphin12.jpg';
	}else if(graphVal == '4'){
		var share_image	   =	'<?php echo base_url();?>assets/images/pshycometric_img/img/lion12.jpg';
	}
	//var share_image	   =	'<?php echo base_url();?>assets/images/pshycometric_img/img/eagle12.jpg';
	var share_url	   =	'http://meetuniv.com/gifted-intro';	
        //var share_capt     =    'caption';
    FB.ui({
        method: 'feed',
        name: product_name,
        link: share_url,
        picture: share_image,
        //caption: share_capt,
        description: description

    }, function(response) {
        if(response && response.post_id){
			
			//$('#demoModal').fadeOut("slow");
			var graphVal = '<?php echo $graph_value ?>';
			url="<?php echo base_url();?>quiz/sendCoupon";
			data = {graphValue:graphVal};
		    $.ajax({
			type	:	'POST',
			data	:	data,
			url		:	url,
			success: function(data){
					//alert(data);
					if(data == 'Email sent.'){
						$('#demoModal').modal('show');
					}
				},
			
		  });
		}
        else{}
    });

}

</script>
<script src="<?php echo base_url()?>assets/js/jquery-sortable.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap-tour.js"></script>
<script src="http://tympanus.net/Development/AnimatedCheckboxes/js/svgcheckbx.js"></script>

<script type="text/javascript">
		/*******Tour Script*******/
			/* var tour = new Tour({
			  name: "tour",
			  container: "body",
			  keyboard: true,
			  storage: window.localStorage,
			  debug: false,
			  backdrop: false,
			  redirect: true,
			  orphan: false,
			  duration: false,
			  basePath: "",
			  template: "<div class='popover tour'><div class='arrow'></div><h3 class='popover-title gifted-popover'></h3> <div class='popover-content'> </div><div class='popover-navigation'><button class='btn btn-small btn-success pull-right' data-role='next'>Got It</button><div style='clear:both'></div></div> </nav> </div>"
			});

		// Add your steps. Not too many, you don't really want to get your users sleepy
		tour.addSteps([
		  {
			element: "#demo", // string (jQuery selector) - html element next to which the step popover should be shown
			placement:"top",
			title: "Your personality skills", // string - title of the popover
			content: "Please hour the mouse to see your skills details.", // string - content of the popover,
			backdrop: true
			//duration:4000
		  },
		  {
			element: "#body1", // string (jQuery selector) - html element next to which the step popover should be shown
			placement:"top",
			title: "Upgrade Now", // string - title of the popover
			content: "Your can upgrade your skills.", // string - content of the popover,
			backdrop: true
			//duration:4000
		  }
		]);
		// Initialize the tour
		tour.init();
		// Start the tour
		tour.start();
		$(document).on("click","#tour-btn",function(){tour.restart();tour.goTo(0);}); */
        
</script>
