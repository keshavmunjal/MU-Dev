<?php 

if($universityDetail['slider'])
{
	$univ_img=$universityDetail['slider'];
}
else
{
	$univ_img='detail-bg.jpg';
}

?>
<style>
.bg_img{background: url("<?php echo base_url()?>assets/img/<?php echo preg_replace('/\s+/', '', $univ_img)?>");}
.pre{position: fixed;top: 40%;left: 9%;}
.next{position: fixed;top: 40%;right: 9%;}
   </style>
   
  <?php
		$UnivId=$universityData[0]['id'];
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


<!--main-->
      <div role="main" id="main">
         <div class="row container">
            <article id="college_listing" class="page">
               <ul class="breadcrumb univ_breadcrumb">
                  <li><a href="<?php echo base_url()?>">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li><a href="<?php echo base_url('list-of-colleges')?>">List of Colleges</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li class="active"><?php echo $universityData[0]['univName'];?></li>
               </ul>
			   
			   <div class="row">
        
          <div class="span12 box-shadow college-list">
            
            <div class="left box-content bg_img" <?php if($universityData[0]['id']==804){?>style="background:url('<?php echo base_url();?>assets/img/detail-bg_new.jpg')"<?php } ?>>
           <!--
              <div class="caption-bar">
              
                <!-- <img src="assets/images/logo.jpg" />-->
				 <?php 
				 /*
				  if($universityData[0]['logo'])
				  {?>
				  <img src="<?php echo base_url()?>assets/univ_logo/<?php echo $universityData[0]['logo'];?>" alt="<?php echo $universityData[0]['univName'];?>" title="<?php echo $universityData[0]['univName'];?>" style="max-width: 115px;"></img>
				  <?php 
				  }else{?>
				   <img src="<?php echo base_url()?>assets/univ_logo/univ.png?>" alt="<?php echo $universityData[0]['univName'];?>" title="<?php echo $universityData[0]['univName'];?>" style="max-width: 35px;padding: 0px 23px;"></img>
				  <?php }
				  */?>
                 <!--
              </div>
			  -->
              <p><span><?php //echo $universityData[0]['univName'];?></span>
			  <br />
				<?php if($universityData[0]['overview']!='')
					{
					//echo  substr($universityData[0]['overview'],0,350)."...";
					}
					else
					{
					//echo "We are gathering information.";
					}
				?></p>
            </div>
            <div class=" left right-section">
            
            
                  <div class="yellow-bg">
					<i class="icon-map-marker"></i>
                    <p><?php echo (isset($cityName))?$cityName:'';?> <br /> 
					
					<span>
					<?php echo (isset($countryName))?$countryName:'N/A';?>
					</span><p>
                  </div>
                  
                  <div class="year_dashboard" >  Year of Establishment<br /><i class="icon-calendar icon-2x"></i> 
				  <span><?php echo (isset($universityDetail['yearOfEst']))?$universityDetail['yearOfEst']:'N/A';?> </span></div>
                  
                  <div class="type"><p>Type<p><span class="color"><?php echo (isset($universityDetail['type']))?$universityDetail['type']:'N/A';?></span></div>
                  
                  <div class=" left facilities">
                    <p>Facilities</p>
                    <div class="fac-img">
                      <!--<img src="assets/images/book-icon.jpg"/>
                      <img src="assets/images/globe-icon.jpg" />
                       <img src="assets/images/build-icon.jpg" />
                      <img src="assets/images/cup-icon.jpg" />
                      <img src="assets/images/laptop-icon.jpg" />
					  <i class="icon-book" style="color:#fa5c5d"></i>
					  <i class="icon-globe" style="color:#197079;"></i>
					  <i class="icon-building" style="color:#2b7eb2;"></i>
					  <i class="icon-trophy" style="color:#9a4682;"></i>
					  <i class="icon-laptop" style="color:#609d64;"></i>-->
					  <?php echo (isset($universityDetail['library'])&&$universityDetail['library']=='1')?"<i class='icon-book'  style='color:#609d64' rel='tooltip' title='Library'></i>":"<i class='icon-book not-activated' rel='tooltip' title='Library'></i>";?> 
					  <?php echo (isset($universityDetail['sports'])&&$universityDetail['sports']=='1')?"<i class='icon-gamepad' style='color:#609d64;'  rel='tooltip' title='Sports Facility'></i>":"<i class='icon-gamepad not-activated' rel='tooltip' title='Sports Facility'></i>";?> 
					  <?php echo (isset($universityDetail['scholer'])&&$universityDetail['scholer']=='1')?"<i class='icon-trophy' style='color:#609d64;' rel='tooltip' title='Scholarships'></i>":"<i class='icon-trophy not-activated' rel='tooltip' title='Scholarships'></i>";?> 
					  <?php echo (isset($universityDetail['housing'])&&$universityDetail['housing']=='1')?"<i class='icon-building' style='color:#609d64;' rel='tooltip' title='Housing'></i>":"<i class='icon-building not-activated' rel='tooltip' title='Housing'></i>";?> 
					  <?php echo (isset($universityDetail['exchange'])&&$universityDetail['exchange']=='1')?"<i class='icon-globe'  style='color:#609d64;' rel='tooltip' title='Exchange Programs'></i>":"<i class='icon-globe not-activated' rel='tooltip' title='Exchange Programs'></i>";?> 
					  <?php echo (isset($universityDetail['online'])&&$universityDetail['online']=='1')?"<i class='icon-laptop' style='color:#609d64;' rel='tooltip' title='Online Courses'></i>":"<i class='icon-laptop not-activated' rel='tooltip' title='Online Courses'></i>";?> 
					  
                    </div>
              </div>
            
                <div class="intake-date" >
                  <p> Intake</p>
                  <p class="big-font">Jan/Sept</p>
                </div>
                  <div class="scholarship" >
                  <p>Scholarship</p>
                  <i class="icon-money icon-4x left"></i>
                  <p class="green-clg"><?php echo (isset($universityDetail['scholership']))?$universityDetail['scholership']:'N/A';?></p>
               </div>
             
                <div class="students" >
                  <p> Students <br /> <i class="icon-male icon-2x" style="color:#cd2903"></i><i class="icon-female icon-2x" style="color:#cd2903"></i> <br /> <span><?php echo ($universityDetail['students'])?$universityDetail['students']:'N/A';?></span></p>
                </div>
               <div class="staff" >
                  <p>Staff <br /><span> <?php echo (isset($universityDetail['staff']))?$universityDetail['staff']:'N/A';?></span></p>
                </div>
                <div class="accomodation" >
                  <p>ACCOMODATION<br /><span><?php echo ($universityDetail['accomodation'])?$universityDetail['accomodation']:'N/A';?></span></p>
                </div>
                 <div class="clg-acceptance-criteria">
                  <p class="title"> Acceptance Criteria</p>
                  <p class="sub-title" > post graduate <br /><span> 65% in XII</span></p>
                  <p class="sub-title" >undergraduate <br /><span>60% in UG</span></p>
                  <p class="sub-title" > language <br /><span>IELTS 6.0</span></p>
              </div> 
            </div>
          </div>  
            
          
        </div>
					 <article id="major_degree">
						<div class="row">
							<div class="span8">
								<div class="row">
									 <div  id="myTab" class="span2 college-tab"> 
										 <a href="#profile">Location & Contact</a>
										 <br>
										 <a href="#overview">Overview</a>
										 <br>
										 <?php if($universityData[0]['countryId']=='13'){ ?>
										 <a href="#home">Majors & Degrees</a>
										 <?php } ?>
										<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
										<!-- Individ_Univ_Opt-Sub-Menu -->
										<ins class="adsbygoogle"
											 style="display:inline-block;width:120px;height:240px"
											 data-ad-client="ca-pub-1120937809081795"
											 data-ad-slot="2134675003"></ins>
										<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
										</script>
									 </div>
									 <section class="span6">
                              <div class="tab-content">
								 <div class="tab-pane" id="overview">
								 <h5>Overview</h5>
								 <p><?php echo $universityData[0]['overview'];?></p>
								 </div>
                                 <div class="tab-pane" id="home">
                                    <h5>Majors &amp; Degrees</h5>
									
									<table class="table">
									 <tr class="success">
                                          <td> Degrees Offered</td>
                                          <td class="text-success">Satisfaction</td>
                                          <td class="text-success">Fee</td>
                                     </tr>
									 <?php 
									 $tempraryHeader = '';
									 $counter=1;
									 foreach($courseDetail as $course)
									 {
									 if(!empty($course->level2))
									 {
										$levelName = $this->collegemodel->getCourseLevelName($course->level2);
										if($levelName!=$tempraryHeader)
										{
										?>
										<tr class="text-error course-<?php echo $counter;?>" <?php echo ($counter>10)?'style="display:none;"':''?>>
										<td><?php echo $levelName;?></td>
										<td><img src="<?php echo base_url();?>assets/img/check_opt.png"></td>
                                          <td></td>
										</tr>
										<tr class="space course-<?php echo $counter;?>" <?php echo ($counter>10)?'style="display:none;"':''?>>
                                          <td></td>
                                       </tr>
										<?php
										}
										
									 $tempraryHeader = $levelName;
									 }
									 else
									 {	
									 if($tempraryHeader!='Others')
										{
										?>
										<tr class="text-error course-<?php echo $counter;?>" <?php echo ($counter>10)?'style="display:none;"':''?>>
										<td>Others</td>
										<td><img src="<?php echo base_url();?>assets/img/check_opt.png"></td>
                                          <td></td>
										</tr>
										<tr class="space course-<?php echo $counter;?>" <?php echo ($counter>10)?'style="display:none;"':''?>>
                                          <td></td>
                                       </tr>
										<?php
										}
										$tempraryHeader='Others';
									 }
									 
									 ?>
									 <tr class="course-<?php echo $counter;?>" <?php echo ($counter>10)?'style="display:none;"':'';?>>
									  <?php 
									  $univName1 = str_replace(array(' ', ',','(', ')',), array('-', '', '', ''),$universityData[0]['univName']);
									  
									  $univName = str_replace(array("'"), array(''),$univName1);
									  
									  $courseName = str_replace(array(',','(',')','"','\'','-','&',':','!','%','$'), array('','','','','','','','','','',''),$course->name);
									  
									  //$courseId = str_replace(array('$','_','!'), array('','-',''),$course->courseId);
									  
									  ?>
										<td style="color:#468847;"><?php echo $course->name;?>&nbsp;<a href="<?php echo base_url();?>course/<?php echo $univName."/".$universityData[0]['id']."/".str_replace(" ","-",$courseName)."/".$course->courseId;?>" style="color:#468847;"><span class="label label-info">View</span></a></td>
										
										<td id="satisfactionValue_<?php echo $course->courseId; ?>"></td>
										<td id="courseFee_<?php echo $course->courseId; ?>"></td>
                                          <td></td>
									 </tr>
									 <?php 
									 $satisfactionId = $satisfactionId.$course->courseId.',';
									 $counter++;
									 }
									 $getSatisfactionId = rtrim($satisfactionId, ",");
									 //echo $getSatisfactionId;
									 ?>
									 <tr>
                                          <td><a href="javascript:void(0)" onclick="show_more_courses()">+More</a></td>
                                          <td><input type="hidden" value="2" id="courseCount"/></td>
                                          <td></td>
                                       </tr>
									</table>
                                 </div>
                                 <div class="tab-pane active" id="profile">
                                    <h5>Location</h5>
									
									<input id="address" type="hidden" value="<?php echo (isset($universityDetail['address'])&&$universityDetail['address'])?$universityDetail['address']:$cityName, $countryName;?>">
                                    <div id="map-canvas" style="height:190px;width:455px;border: 1px solid #ccc;box-shadow: 0 0 11px rgba(0, 0, 0, 0.2);">
                                       <!--<img src="<?php echo base_url()?>assets/img/map.png">-->
                                    </div>
                                    <br>
                                    <h5>Contact</h5>
                                    <address>
                                       <strong>College Address:</strong><br>
                                       <?php echo (isset($universityDetail['address'])&&$universityDetail['address'])?$universityDetail['address']:'N/A';?> 
									   <br>
									   <strong>Contact Information:</strong><br>
                                       <?php echo (isset($universityDetail['contacts'])&&$universityDetail['contacts'])?$universityDetail['contacts']:'N/A';?> 
									   <br>
									  <!-- <strong>College Address:</strong><br>
                                       <?php echo (isset($universityDetail['faxContacts'])&&$universityDetail['faxContacts'])?$universityDetail['faxContacts']:'N/A';?> -->
                                    </address>
                                    <!--<address>
                                       <strong>Director of Recruitment</strong><br>
                                       Phone: 304-733-8700
                                    </address>-->
                                 </div>
							  </div>
						   </section>
								</div>
							</div>
							<div class="span4">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- Individual_Univ -->
							<ins class="adsbygoogle"
								 style="display:inline-block;width:300px;height:250px"
								 data-ad-client="ca-pub-1120937809081795"
								 data-ad-slot="9797542609"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script><br/><br/>
							<?php //echo $this->load->view('rotator/univDetailImgRotator');?><br /><br />
							<!--<a href="http://meetuniv.com/Meet-Best-UK-Universities-Directly.php?src=clgind&campaign=0" target="_blank"><img src="<?php echo base_url();?>assets/img/ad/bcfeb.jpg" title="Meet Best UK Universities Directly" alt="Meet Best UK Universities Directly" style="margin-left:25px"></a>-->
							<!--<a target="_blank" href="http://meetuniv.com/Study-In-UK-Top-Universities.php?campaign=0&src=home" style="text-decoration:none;text-align:centre"><img title="Northumbria University Event in India" alt="Northumbria University Event in India" src="<?php echo base_url();?>assets/img/ad/nu300.jpg"></a><br/><br/>
							<a target="_blank" href="http://meetuniv.com/Study-In-UK-Top-Universities.php?campaign=0&src=home" style="text-decoration:none;text-align:centre"><img title="University of East London Event in India" alt="University of East London Event in India" src="<?php echo base_url();?>assets/img/ad/uel300.jpg"></a>-->
						   </div>
						</div>
                        <!--<div class="span9">
                           <div  id="myTab" class="span5"> <a href="#home">Majors & Degrees</a> <a href="#profile">Location & Contact</a> </div>
                           
                        </div> -->
                     </article>
            </article>
            </div>
         </div>
         <!--end main-->
		 
		 <?php $this->load->view('layout/js')?>
		 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		 <script>
         $(document).ready(function(){
         		codeAddress();				   
         						       $('.carousel').carousel({
             interval: 5000,
         	pause:"hover"
             })
         							   
         						   })
         
         
         
         
         
         
         
             $('#myTab a').click(function (e) {
             e.preventDefault();
             $(this).tab('show');
             })
			$("[rel=tooltip]").tooltip({ placement: 'bottom'});
         
			var geocoder;
			var map;
			function initialize() {
			  geocoder = new google.maps.Geocoder();
			  var latlng = new google.maps.LatLng(-34.397, 150.644);
			  var mapOptions = {
				zoom: 8,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			  }
			  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			}

			function codeAddress() {
			  var address = document.getElementById('address').value;
			  initialize();
			  geocoder.geocode( { 'address': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
				  map.setCenter(results[0].geometry.location);
				  var marker = new google.maps.Marker({
					  map: map,
					  position: results[0].geometry.location
				  });
				} else {
				  alert('Geocode was not successful for the following reason: ' + status);
				}
			  });
			}

			google.maps.event.addDomListener(window, 'load', initialize);
			function show_more_courses()
			{
				var count = $("#courseCount").val();
				for(var i=0;i<=count*10;i++)
				{
					$(".course-"+i).fadeIn();
				}
				$("#courseCount").val(parseInt(count)+1);
			}
      </script>
	  
	  <!---Get Satisfaction ids--->
	  
	  <script type="text/javascript">
		 $( document ).ready(function() {
			//alert('hello');
			$.ajax({
			type: 'POST',
			url: "<?php echo base_url(); ?>college/getSatisfactionByCourseId",
			async:false,
			data: {id:'<?php echo $getSatisfactionId;?>'},
			//dataType: 'json',
			cache: false,
				success: function(data)
				{ 
					//alert(data);
					//console.log(data)
					var obj=jQuery.parseJSON(data);
					//alert(obj);
					//console.log(obj);
					$.each(obj, function(index, value){
						if(value.code=='Q1'){
							//console.log(value);
							//alert(value.value);
							$('#satisfactionValue_'+value.courseId).html(value.value+'%');
						}
					});
				}			
			});	
		}); 
			
	</script>
	
	<script type="text/javascript">
		 $( document ).ready(function() {
			$.ajax({
			type: 'POST',
			url: "<?php echo base_url(); ?>college/getCourseFeeById",
			async:false,
			data: {id:'<?php echo $getSatisfactionId;?>'},
			cache: false,
				success: function(data)
				{ 
					var obj=jQuery.parseJSON(data);
					$.each(obj, function(index, value){
						if(value.MaximumFeeForEnglandDomicile==0){
							$('#courseFee_'+value.courseId).html('N/A');
						}else{
							$('#courseFee_'+value.courseId).html('£'+value.MaximumFeeForEnglandDomicile);
						}
					});
				}			
			});	
		}); 
			
	</script>