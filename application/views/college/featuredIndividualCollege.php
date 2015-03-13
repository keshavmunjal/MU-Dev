<?php 
foreach($universityData as $UnivData)
{

}
foreach($universityDetail as $UnivDetails)
{

}
foreach($courseDetail as $oneCourse)
{

}
?>

<style>
.customDiv{background: rgb(255, 255, 255);
	width: 100%;
	overflow: hidden;
	height: 348px;
	border-top: 5px solid rgb(80, 175, 206);}
	.customMargin{margin-left:0px;}
	.slider-left {background-color: rgb(238, 238, 238);width:100%;height:59px;}
	.slider-right {background-color: rgb(63, 147, 185);width:100%;height:59px;}
	.customTxt{padding: 2.5%;
font-size: 12px;
padding-top: 0px;
margin-left: 4%;
margin-top: -2%;}
	.title{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 14px;color: #fff;font-size: 18px;}
	.customPara{padding-left: 20px;padding-right: 20px;padding-bottom: 20px;padding-top: 20px;color:rgba(255, 255, 255, 0.61);font-size:12px;}
	.customleftTxt{padding-top:15px;padding-left:20px;}
	.applynowbutton{border: none;width: 100%;padding-top: 6%;padding-bottom: 6%;background-color: #3F97C3;}
	.facebookicon{height: 31px;}
	.icon-twitter{color: rgb(148, 145, 145);
font-size: 20px;}
.subcoursebottom{border-bottom: 1px solid rgb(194, 194, 194);margin-left: 4%;padding-left:4%;}
.customfixedpadforcourse{padding-right: 5%;margin-left: 0px!important;} 
.toggleoptionbutton{background-image: url('<?php echo base_url()?>assets/images/featured_college_img/plus3.png');
height: 8px;
width: 10px;
float: right;
margin-right: 2%;
margin-top: 2%;
cursor: pointer;
}
.toggleoptionbutton2{background-image: url('<?php echo base_url()?>assets/images/featured_college_img/minus3.png');
height: 8px;
width: 10px;
float: right;
margin-right: 2%;
margin-top: 2%;
display:none;
cursor: pointer;
}
.courseListHeading{padding-right: 20%;font-size: 14px;}
.CourseListDetails{font-weight: normal;padding-right: 8%;}
.BackButtonCss{margin-left: 75%;
margin-top: -12%;
margin-bottom: 2%;
background-color: #5996b2;
border: 0px;
border-radius: 4px;
padding: 1%;
color: white;}

.customitemmanage{margin-left: 1%;}
.customalign{text-align: center;}
.birdtweet{padding-left: 2.5%;
margin-top: 9px;
left: -3px;
top: 16px;
position: relative;
}
.search_heading{padding-left: 18%;font-weight: bold;}
.defaultUniv{color: black;}
.followdiv{list-style: none;
border-bottom: 1px solid rgb(223, 218, 218);
margin-left: 8px;
margin-right: 3%;}
.bluelisthead{color: rgb(54, 173, 211);font-size: 13px;font-weight: bold;}
.customlevelcolor{background-color: #6098B8!important;}
.similaruniv{margin-top: 4%;
padding-top: 3%;
padding-left: 4%;
border-top: 5px solid #c70204;}
#similar{padding-left: 4%;width: 100%;}
.colgbg{box-shadow: 0px 1px 10px #E7E7E7;}
.customhr{margin: 20px 0;
border: 0;
border-top: 1px solid #BDBDBD!important;
border-bottom: 1px solid #ffffff;
width: 91%!important;}
.custommar{margin-bottom: 2%;}
.shareicon{padding-left: 62%;}
.noppad{padding: 0px!important;}
.childSub{margin-left: -21px;
padding-left: 4%;}
.graybrace{color: rgb(116, 114, 114);padding-left: 0.5%;}
.pre{position: fixed;top: 40%;left: 9%;}
.next{position: fixed;top: 40%;right: 9%;}
</style>


<script>
/*
$(document).ready(function(){
$(".toggleoptionbutton2").hide();
  $(".toggleoptionbutton").click(function(){
  
var getb = $(this).attr('id');
	$(this).hide();
   $("#m"+getb).show();
	
  });
});


$(document).ready(function(){
  $(".toggleoptionbutton2").click(function(){
  
var getb = $(this).attr('id');

	$(this).hide();
	 var res = getb.replace(/m/g, "");
	
   $("#"+res).show();
	
  });
});
*/

public function plusminus(level)
	{
	
				if ($("#"+level).is(":visible"))
					{
						$("#m"+level).show();
						$("#"+level).hide();
					}
				else
					{
						$("#"+level).show();
						$("#m"+level).hide();
					}
	}

</script>

<script>
// public function test(t)
	// {
		// alert('test');
	// }
	// $(document).ready(function(){
		// $('#test').click(function(){
			// alert();
		// });
	// });
</script>
<!--main-->
<?php
		$UnivId=$UnivData['id'];
		$PreUnivName = $this->collegemodel->PreUniv($UnivId); 
		$NextUnivName = $this->collegemodel->NextUniv($UnivId); 

		$link = str_replace(' ','-',$PreUnivName[0]->univName);
		$link = preg_replace('/[^A-Za-z0-9\-]/', '',$link);
		
		
	$linkN = str_replace(' ','-',$NextUnivName[0]->univName);
		$linkN = preg_replace('/[^A-Za-z0-9\-]/', '',$linkN);
?>
<div class="left pre">

<a href="<?php echo base_url().strtolower($countryName).'-college/'.$link.'/'.base64_encode($PreUnivName[0]->id)?>"><img src="<?php echo base_url()?>assets/img/Pre.png"></img></a>
</div>

<div class="right next">
<a href="<?php echo base_url().strtolower($countryName).'-college/'.$linkN.'/'.base64_encode($NextUnivName[0]->id)?>"><img src="<?php echo base_url()?>assets/img/Next.png"></img></a>
</div>


     <div role="main" id="main">
         <div class="row container">
            <article id="college_listing" class="page">
               <ul class="breadcrumb univ_breadcrumb">
                  <li><a href="https://meetuniv.com/">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li><a href="https://meetuniv.com/list-of-colleges">List of Colleges</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li class="active"><?php echo $UnivData['univName'];?></li>
               </ul>
			   <div class="row">
					<div class="span10">
						<h3><i><img src="<?php echo base_url()?>assets/images/featured_college_img/featured-star.png" style="margin-bottom: 6px;"></i>&nbsp;<?php echo $UnivData['univName'];?> - <small><?php echo $cityName?> , <?php echo $countryName;?></small></h3>
					</div>
					<div class="span2">
					
					<?php $collegeDetail = $this->collegemodel->getCollegeDetail(); 
						$val = array();
						foreach($collegeDetail as $c)
							{
								$val[] = $c['college_id'];
							}
						//$key = array_search($collegeId, $val);
						if (!in_array($UnivData['id'], $val)) 
							{
					?>
							<button type="button" class="btn btn-success btn-small pull-right" onclick="addCollege(this,'<?php echo $UnivData['id'];?>')";><i class="icon-plus-sign icon-white"></i>&nbsp;Add University</button>
					<?php   } ?>
					</div>
				</div>
				
				<!----Message for add college--->
			 <div id="addCollegeMsg" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Add College Message</h3>
				</div>
				<div class="modal-body">
					
						<p>You have added successfully!</p>
					
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
			</div>
		 <!---end--->
				
				
				
			<div class="container">
   <div class="row">
   <div class="span8">
   <div class="row">
   <div class="span8">
   <img src="<?php echo base_url()?>assets/img/<?php echo $SliderName; ?>" alt="<?php echo $UnivData['univName'];?>" style="width: 700px;">
   </div>
    <div class="span8">
   <div class="slider-left">
		<i class="icon-twitter birdtweet"></i><p class="customTxt" id="tweets"></p>
   </div>
   </div>
   </div> 
   </div>
    <div class="span4">
	<div class="row"> 
	<div class="span4">
	<div class="customDiv">
	<ul class="followdiv">
	<li><p class="title" style="margin-left: -2px;color: #050505;">Follow</p><span class="shareicon"><a href="<?php echo $universityDetail['twitter_link'];?>" target="_blank" title="Twitter"><img src="<?php echo base_url()?>assets/images/featured_college_img/featured_twitter.png" style="margin-top: -54px;"></a><a href="<?php echo $universityDetail['facebook_link'];?>" title="Facebook" target="_blank"><img src="<?php echo base_url()?>assets/images/featured_college_img/featured_fb.png" class="facebookicon" style="margin-left: 10px;margin-top: -54px;height: 24px;"></a><a href="<?php echo str_replace('http:','https:',$universityDetail['website']);?>" title="<?php echo $UnivData['univName'];?>"><img src="<?php echo base_url()?>assets/images/featured_college_img/featuredwebsite.png" style="margin-left: 10px;margin-top: -54px;height: 24px;" class="facebookicon"></a></span>
	</li>
	</ul>
	
		<table style="color: black; margin-left: 6px;margin-top: 0px;">
			<tr>
				<td><strong>Type:</strong></td><td><?php echo $universityDetail['type'];?></td>
			</tr>
			<tr>
				<td style="vertical-align: text-top!important;"><strong>Address:</strong></td><td><?php echo $universityDetail['address'];?></td>
			</tr>
			<tr>
				<td><strong>Contact:</strong> </td><td><?php echo $universityDetail['contacts'];?></td>
			</tr>
			<tr>
				<td><strong>Students:</strong> </td><td><?php echo $universityDetail['students'];?></td>
			</tr>
			<tr>
				<td><strong>Year of Estb.: </strong></td><td><?php echo $universityDetail['yearOfEst'];?></td>
			</tr>
		</table>
		

	</div>
	</div>
	<div class="span4">
	<div class="slider-right"> 
	
	<form action="https://meetuniv.com/Meet-Best-UK-Universities-Directly-IP.php" target="_blank">
		<button type="submit" class="applynowbutton">
			<a href="https://meetuniv.com/Meet-Best-UK-Universities-Directly-IP.php" style="color: white;font-size: 22px;" target="_blank">Apply Now</a>
		</button>
	</form>
	
	</div>
	</div>
	</div>
   </div>
   </div>
   </div>
				
				
				
					
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span8">
							<!-- welcome to college -->
							<div class="row">
							<div class="span8 margin-bottom">						
							<h4>Overview</h4>
							<hr>
								
									<p class="noppad"> 
										<div id="first_overview">
											<?php echo substr($UnivData['overview'],0,300)."....";?>
											<a href="javascript:void(0)" id="more">Read More</a>
										</div>
										
										<div id="show" style="display: none;">
											<?php echo $UnivData['overview'];?><br/>
											<a href="javascript:void(0)" id="hide">Hide</a>
										</div>
									</p>
						</div>
						
					</div>
						
					<!-- vedio - college daily news -->
					<div class="row">
					<div class="span8 margin-bottom">
						<div class="row">
							<div class="span4">
								<h3> <img src="<?php echo base_url()?>assets/images/featured_college_img/video.png" class="pull-left">Video Channel</h3>
								
								<!--Start Vedio Code-->
								
									<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="290" height="200">
									<param name="scale" value="noscale" /><param name="allowFullScreen" value="true" />
									<param name="allowScriptAccess" value="always" />
									<param name="allowNetworking" value="all" />
									<param name="bgcolor" value="#444444" />
									<param name="movie" value="https://meetuniv.com/learn/edurator/jwplayer.swf" />
									<param name="flashVars" value="<?php echo $universityDetail['youtube_video_id'];?>" />
									<embed src="https://meetuniv.com/learn/edurator/jwplayer.swf"  width="290" height="200" scale="noscale" bgcolor="444444" type="application/x-shockwave-flash" allowFullScreen="true"  allowScriptAccess="always" wmode="window"  flashvars="<?php echo $universityDetail['youtube_video_id'];?>"></embed></object>
									
								<!--
								<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="290" height="200"><param name="scale" value="noscale" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" />
								<param name="bgcolor" value="#444444" /><param name="movie" value="https://meetuniv.com/learn/edurator/jwplayer.swf" /><param name="flashVars" value="&file=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DXNfwfn0rxzo&type=youtube&config=http%3A%2F%2Fmeetuniv.com%2Flearn%2Fedurator%2Fjwembed.xml" />
								<embed src="https://meetuniv.com/learn/edurator/jwplayer.swf"  width="290" height="200" scale="noscale" bgcolor="444444" type="application/x-shockwave-flash" allowFullScreen="true"  allowScriptAccess="always" wmode="window"  flashvars="&file=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DXNfwfn0rxzo&type=youtube&config=http%3A%2F%2Fmeetuniv.com%2Flearn%2Fedurator%2Fjwembed.xml"></embed></object>
								-->
								<!--End Vedio Code-->
								
								<p>Let's have a sneak peek of your <?php echo $UnivData['univName'];?> by catching an attention to what the students have to say about their alma mater. There a lot to explore, so stay tuned!</p>
								<a href ="<?php echo str_replace('http:','https:',$universityDetail['youtube_link']);?>" target="_blank">More Video</a> 
							</div>
							<div class="span4">
							
								<h3><img src="<?php echo base_url()?>assets/images/featured_college_img/news.png" class="pull-left"> College Daily News</h3>
								
																
									<!-- start feedwind code -->
									<script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'https://') + 'feed.mikle.com/js/rssmikle.js"><' + '/script>');</script>
									<script type="text/javascript">(function() {var params = {rssmikle_url: "<?php echo $universityDetail['rss'];?>",rssmikle_frame_width: "280",rssmikle_frame_height: "350",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "off",autoscroll: "off",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "New",rssmikle_title: "off",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#64A5C3",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#333333",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",item_description_style: "text",item_thumbnail: "full",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script>
									<div style="font-size:10px; text-align:center; width:280;"><!--<a href="https://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a>-->
									</div>
									<!-- end feedwind code -->							
																
																
																
																
																
																
																
															
								
							</div>
						</div>
					</div>
					</div>

					
					
							
							</div>
							<div class="span4">
							<h4> Quick links</h4>
							<ul style="list-style:none" class="ql">
							<?php foreach($latestArticles as $article){ 
							$articleTitle = str_replace(".","",$article->title);
							$articlerows = str_replace(" ","-",$articleTitle);
							$art = rtrim($articlerows, "-"); 
							?>
								<li><a href="<?php echo base_url();?>learn/blog/read-<?php echo $art; ?>-<?php echo $article->id;?>.html" target="_blanck"><?php echo $articleTitle; ?></a></li>
								<?php } ?>
							</ul>
							<!-- Ads -->
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- Individual_Univ -->
							<ins class="adsbygoogle"
								 style="display:inline-block;width:300px;height:250px"
								 data-ad-client="ca-pub-1120937809081795"
								 data-ad-slot="9797542609"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
							</div>
							
						</div>
					</div>
				</div>
				<div class="row">
						<div class="span8">
							<div style="background-color:#FFFFFF;padding:10px;">
								<h3>&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url()?>assets/images/featured_college_img/video.png" class="pull-left">Course Search
								<div style="display:none" id="backButton">
											<input type="button" class="BackButtonCss" value="Back To Courses" onclick="ShowAllCourse();" />
											
										</div>
								</h3>
								<div class="row-fluid">
								    <div class="span3">
									<div class="search_heading">
									<p>Search Any Course</p>
									</div>
									</div>
								    <div class="span9">
										<div class="fill-keyword" style="margin-top: -1px;-moz-box-shadow: 1px 1px 2px #eee;margin-left:10px">			
											<div id="search-course-text" style="overflow: hidden;float: left;width: 350px;">
												
												<input type="text" placeholder="Type your keywords..." data-provide="typeahead" name="meta_value" id="search_allCourse" autocomplete="off" data-default="Type your keywords..." style="width: 344px;">
												<input type="hidden" name="s" value="gdl-course">
											</div>
											<input type="button" id="search-course-submit" onclick="GetAllCourse();" value="Search" style="background-color: #5996b2 !important;color: #ffffff !important;border:none;padding:5px;">
											<br class="clear">
										</div>
									</div>
									<div class="span12 customfixedpadforcourse">
										
										
										
										
										
										
										
										<div id="PCourseList">
										<?php
										
											foreach($Pcourse as $P_Course)
												{
												
													$univId = $UnivData['id'];
													$PCourseLevel = $P_Course['level'];
													$pcl3=$this->collegemodel->PCourseLevel($PCourseLevel);
													
													$a1='';
													foreach($pcl3 as $a)
														{
															$a1=$a1.$a['ucasId'].",";
														}
													$a2=rtrim($a1,',');
													$abc1=$this->collegemodel->PtoChildCourse($a2,$univId);
														//echo count($abc1);
												?> 
											<ul style="list-style:none;">
												<li id="ld<?php echo $P_Course['level'];?>" class="prentCourse">
													<p class="bluelisthead" id="<?php echo $P_Course['level'];?>" onclick="SimilarUniv(this.id);"><?php echo $P_Course['name'];?>
													<span class="toggleoptionbutton" onclick="plusminus(this.id);" id="p<?php echo $P_Course['level'];?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
													
													<span class="toggleoptionbutton2" id="mp<?php echo $P_Course['level'];?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
													
													<span class="graybrace">(<?php echo count($abc1);?>)</span>
													
													</p>
												
												</li>
											</ul>
										<div class="subcoursebottom">	
											
												
											
											
											
											
												<div id="child<?php echo $P_Course['level'];?>" class="childSub">
											
												<?php 
														echo '<div class="row customitemmanage"><div class="span5"<strong>Course</strong></div><div class="span3"><strong>Fees (Approx)</strong></div><div class="span1" style="margin-left: -20px;"><strong>Satisfaction</strong></div></div>';
														foreach($abc1 as $abc2)
															{	
																
																echo "<div class='row customitemmanage'>";
																 $courseId=$abc2['courseId'];
																
																echo "<div class='span5'>".$abc2['name']." (".$abc2['kisMode'].")</div>";
																$univFee=$this->collegemodel->FeaturedUnivCourseFee($courseId);
																if($univFee[0]->MaximumFeeForEnglandDomicile==0)
																	{
																		echo "<div class='span2'>&nbsp;&nbsp;&nbsp;&nbsp;-</div>";
																	}
																else
																	{
																		//$IndianRs=99.77;
																		//$INR=$univFee[0]->MaximumFeeForEnglandDomicile*$IndianRs;
																		echo "<div class='span2'>&#163; ".$univFee[0]->MaximumFeeForEnglandDomicile."</div>";
																	}
																$satisfaction=$this->collegemodel->FeaturedUnivCourseSatisfaction($courseId);
																echo "<div class='span2 customalign'>".$satisfaction[0]->value."%</div>";
																?>
																<div class='span3'><a href="<?php echo base_url();?>course/<?php echo $UnivData['univName']."/".$UnivData['id']."/".str_replace(" ","-",$abc2['name'])."/".$abc2['courseId'];?>" target="_blank"><span class="label label-success customlevelcolor">View More</span></a></div>
																	
														</div>
														<?php	}
														
												?>
												
												</div>
												
											</div>
											<?php
											
											 }
										?>
										</div>
										
										
										
										
										
										
										
										
										
									</div>
									
								</div>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
								<table>
								<tr>
									<td>
										<ul class="unstyled" id="sub_course">
											</ul>
									</td>
									<td>
										<div>
											<ul class="unstyled" id="allsub_course">
										
											</ul>
										</div>
									</td>
								</tr>
								</table>
								
							</div>
						</div>
						<div class="span4">
							<div class="colgbg"><h4 class="similaruniv">Similar Universities</h4>
							<div id="similar">
							
							<a href="https://meetuniv.com/uk-college/The-University-of-Birmingham/NDI2" target="_blank" style="text-decoration: none; color: black;">
							<div style="height: 95px;">
							<img src="<?php echo base_url()?>assets/univ_logo/the-university-of-birmingham.jpg"style="width: 75px;">
							The University of Birmingham
							<p style="padding-left: 27%;">Course - 216</p>
							<hr class="customhr"/><br/>
							</div>
							</a>
							
							<a href="https://meetuniv.com/uk-college/City-University/NDY1" target="_blank" style="text-decoration: none;">
							<div style="color: black;">
								<img src="<?php echo base_url()?>assets/univ_logo/city-university.png"style="width: 75px;">
								City University
								<p style="padding-left: 27%;">Course - 307</p>
								<hr class="customhr"/>
							</div>
							</a>
								
							</div>
							</div>
						<!-- Ads -->
						<br/><br/>
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- Ind_Univ_Skyscrapper -->
						<ins class="adsbygoogle"
							 style="display:inline-block;width:300px;height:600px"
							 data-ad-client="ca-pub-1120937809081795"
							 data-ad-slot="7771445807"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
						</div>

				</div>
            </article>
		</div>
         <!--end main-->
		 <!-- scroller script starts-->
		 
	 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/scroller-js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/scroller-js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/scroller-js/jquery.contentcarousel.js"></script>
		<!-- <script type="text/javascript" src="scroller-js/jquery.contentcarousel-autoscroll.js"></script> -->
		<script type="text/javascript">
			$('#ca-container').contentcarousel();
		</script>
	 <!-- scroller script endss -->
	 <?php $this->load->view('layout/js');?>
	 <?php 
	 
	 $twitter1 = $universityDetail['twitter_link'];
		//echo $twitter1;
	 $twitter2 = explode('/',$twitter1);
	 //print_r($twitter2);
	 //echo $twitter2[3];
	 ?>
	 
	 
	 <script src="<?php echo base_url();?>assets/js/bootstrap-dropdown.js"></script>
<script>
	  $("[rel=tooltip]").tooltip({ placement: 'bottom'});
					$(document).ready(function(){
						
						
						$('#search_allCourse').typeahead({
						
							source: function(query, process){
							//alert('<?php echo base_url()?>connect/cityJsonList');exit;
								 return $.get('<?php echo base_url()?>college/featUnivCourse',function(data){
									//alert('<?php echo base_url()?>connect/cityJsonList');
									return process(data)
								}); 
							}
						});
						
						
					});

	  </script>	 
	 <script>
	 
	 $(document).ready(function(){
$(".childSub").hide();
  $(".prentCourse").click(function(){
  
var getID = $(this).attr('id');

    $("#chi"+getID).slideToggle(300);
  });
});

	 
	 function Select_PCourse(level)
		{
				/*
				//alert(level);exit;
				url="<?php echo base_url();?>college/FeaturedPopulerCourse";
					  data = {Pcourseid:level};
					   $.ajax({
					  	type	:	'POST',
					  	data	:	data,
					  	url		:	url,
					  	success: function(data){
					  		//alert(data);exit;
					  		
									$("#child"+level).html(data);
								
					  	},
					  	
					  })
					  */
		}
		
		
		function SimilarUniv(level)
			{ 
				 //var Pcourse_id = $("#PCourse").val();
				 //alert(level);exit;
				 
				 if ($("#p"+level).is(":visible"))
					{
						$("#mp"+level).show();
						$("#p"+level).hide();
					}
				else
					{
						$("#p"+level).show();
						$("#mp"+level).hide();
					}
				
				
				url="<?php echo base_url();?>college/GetSearchSimillerCollege";
					  data = {Pcourseid:level};
					   $.ajax({
					  	type	:	'POST',
					  	data	:	data,
					  	url		:	url,
					  	success: function(data){
					  		//alert(data);
					  		
									$("#similar").html(data);

					  	},
					  	
					  })
		}
		
	function GetAllCourse()
		{
				$("#sub_course").show();
				 var search_allCourse = $("#search_allCourse").val();
				// alert(search_allCourse);exit;
				
				url="<?php echo base_url();?>college/GetSearchCourse";
					  data = {SearchCourse:$("#search_allCourse").val()};
					   $.ajax({
					  	type	:	'POST',
					  	data	:	data,
					  	url		:	url,
					  	success: function(data){
					  		//alert(data);exit;
							$("#backButton").show();
							if(data)
								{
									$("#sub_course").html(data);
									$("#PCourseList").hide();
									
								}
							else
								{
									$("#sub_course").html('N/A');
								}
					  	},
					  	
					  })
					  
		}
		
		function ShowAllCourse()
			{
				
				$("#PCourseList").show();
				$("#sub_course").hide();
				$("#backButton").hide();
			}
		
		
		
		
		
		
 $(document).ready(function() {
        $('#more').click(function() {
				
                $('#show').toggle("slow");
				//$('#more').hide();
				$('#first_overview').hide();
        });
    });
	
	
	$(document).ready(function() {
        $('#hide').click(function() {
                $('#show').toggle("slow");
				$('#more').show();
				$('#first_overview').show();
        });
    });
	
	
	
	$.ajax({
    dataType: "html",
	//data:	<?php echo $UnivDetail['twitter_link']; ?>,
    url: 'https://meetuniv.com/twitterapi.php?twit=<?php echo $twitter2[3];?>',
    success:function(returnHTML){
        $('#tweets').html(returnHTML);
    }
});





	function addCollege(that,collegeId)
		{
						
			//alert(collegeId);exit;
			url="<?php echo base_url();?>college/add_college";
			data = {univId:collegeId};
			$.ajax({
			type	:	'POST',
			data	:	data,
			url		:	url,
			success: function(data){
				//alert(data);
				if (data == "Saved successfully!")
				{
					$('#addCollegeMsg').modal('show');
					setTimeout(function(){
					  $('#addCollegeMsg').modal('hide')
					}, 4000);
					$(that).hide();
					console.log($(that).html());
					return false;
				}
				else
				{
					window.location.assign("<?php echo base_url()?>login");
				}
				
			},
			})
		}
		
		
	
		
	 </script>