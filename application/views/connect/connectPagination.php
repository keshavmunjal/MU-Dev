
<div class="row">
								<div class="span6">
									<p class="text-right">Showing <?php echo count($results)?>/<?php echo $countResults;?> <i class="icon-circle-arrow-right"></i></p>
								</div>
							</div>
							<?php echo $this->load->view('rotator/connectImgRotator');?><br />
							<p style="padding: 8px;margin-top: -76px;margin-bottom: 20px;color: white;line-height: 14px;">Know the latest on scholarship interviews, spot admissions, scholarship Counseling or upcoming education fairs 2015 in India,
Get latest info on College admission dates, or when to submit your application for admission.</p>
				
					
					<?php
					$counter=1;
					foreach($results as $connect)
					{
						
						$univName=$this->connectmodel->getUniversityNameById($connect->univId);
						$univCountryName=$this->connectmodel->getUniversityCountryNameById($connect->univId);
						
						$location=$this->collegemodel->getUnivLocationById($connect->cityId,$connect->countryId);
						$connectId = substr($connect->id, -1);
						$cityId = substr($connect->cityId, -1);
						$c_value = $connectId + $cityId + $connect->counter;
						$counterValue = $c_value;
						//$counterValue = floor($c_value);
					?>
							<div class="row connect-listing">
								<article class="span6">
									<div class="row">
										<div class="span4">
											<div class='content_blog pull-left clearfix'>
											<?php
										$link = str_replace(' ','-',$univName);
										$link = preg_replace('/[^A-Za-z0-9\-]/', '',$link);
									?>
											<?php
											if($connect->type=='1')
												{ ?>
													<h5><i class="icon-facetime-video" style="margin-right: 7px;"></i><?php echo $univName;?></h5>
												<?php
												}
											else
												{
											?>
													<h4><a href="<?php echo base_url().strtolower($univCountryName).'-college/'.$link.'/'.base64_encode($connect->univId)?>"><?php echo $univName;?></a></h4>
											<?php }?>
												<hr>
												<h5 style="font-size: 12px;"><?php echo $connect->tagLine;?></h5>
												<p class="date-time"><i class="icon-calendar"></i>&nbsp;&nbsp;<?php echo $connect->date;?><br>
												<i class="icon-time"></i>&nbsp;&nbsp;<?php echo $connect->time?><br>
												<i class="icon-map-marker"></i>&nbsp;&nbsp;
												<?php echo $location?>
												</p>
											</div>
										</div>
										<div class="span2 mu-connect">
											<aside class="celender">
												<div class="cl"> <small class="date"><?php echo $connect->month;?></small> <small class="day"><?php echo $connect->connectDate?></small> </div>
												<div class="btn-group">
												<button class="btn dropdown-toggle btn-success btn-mini" data-toggle="dropdown">Get Details <span class="caret"></span></button>
												<ul class="dropdown-menu">
												  <li><a href="javascript:void(0)" onclick="ConnectMU('<?php echo $connect->id;?>','<?php echo trim($univName);?>','<?php echo trim($connect->tagLine);?>','<?php echo trim($connect->date);?>','<?php echo trim($location);?>','<?php echo "sms"?>')"><i class="icon-mobile-phone"></i>&nbsp;&nbsp;SMS</a></li>
												  <li><a href="javascript:void(0)" onclick="ConnectMU('<?php echo $connect->id;?>','<?php echo trim($univName);?>','<?php echo trim($connect->tagLine);?>','<?php echo trim($connect->date);?>','<?php echo trim($location);?>','<?php echo "register"?>')"><i class="icon-envelope-alt"></i>&nbsp;&nbsp;E-Mail</a></li>
												</ul>
												</div>
												<button class="btn btn-mini btn-primary voilet" type="button" id="attending-<?php echo $counter;?>" onclick="showAttending(this.id);">I am Attending</button>
												Attending <a href="#" id="attendCountTxt-<?php echo $counter;?>">+<?php echo $counterValue;?></a>
												<input type="hidden" id="attendCount-<?php echo $counter;?>" value="<?php echo $counterValue;?>"/>
												
											</aside>
										</div>
									</div>
									<div class="row">
										<div class="span6">
											<section class="attending attending-<?php echo $counter;?>" id="attending" style="display:none;">
												 <div class="input-prepend"> <span class="add-on"><img src="<?php echo base_url();?>assets/img/name-icon.png"></span>
													<input class="input-small name" id="name-<?php echo $counter;?>" type="text" placeholder="Full Name:" value="<?php echo (isset($userData)&&$userData)?$userData['fullname']:'';?>">
													
													<input type="hidden" id="connectid-<?php echo $counter;?>" name="connectid-<?php echo $counter;?>" value="<?php echo $connect->id;?>">
													
												 </div>
												 <div class="input-prepend"> <span class="add-on"><img src="<?php echo base_url();?>assets/img/mail-icon.png"></span>
													<input class="input-small email" id="email-<?php echo $counter;?>" type="text" placeholder="Email:" value="<?php echo (isset($userData)&&$userData)?$userData['email']:'';?>">
												 </div>
												 <div class="input-prepend"> <span class="add-on"><img src="<?php echo base_url();?>assets/img/cell-icon.png"></span>
													<input class="input-small phone" id="phone-<?php echo $counter;?>" type="text" placeholder="Mobile No:" value="<?php echo (isset($userData)&&$userData)?$userData['mobile']:'';?>">
												 </div>
												 
														
												 <input class="input-small" id="connect-<?php echo $counter;?>" value="<?php echo $connect->id;?>" type="hidden">
												 <input id="id_for_country" value="<?php echo $connect->id;?>" type="hidden">
												<?php
											if($connect->type=='1')
												{ ?> 
												
								<span class="pull-left">Select Time Slot</span>
								<span class="pull-left" style="margin-left:8px; margin-right:8px"><input type="radio" name="tslot" id="tslot-<?php echo $counter;?>" value="10:00 AM-11:00 AM"/> 10:AM-11:AM</span>
								<span class="pull-left" style="margin-left:8px; margin-right:8px"><input type="radio" id="tslot-<?php echo $counter;?>" name="tslot" value="11:00 AM-12:00 PM"/> 11AM:-12PM</span>
								<span class="pull-left" style="margin-left:8px; margin-right:8px"><input type="radio" id="tslot-<?php echo $counter;?>" value="12:00 PM-1:00 PM" name="tslot"/> 12:PM-1:PM</span>
								<button class="btn btn-mini btn-primary green_bu" type="button" onclick="attendEventvedio(<?php echo $counter;?>)">Connect</button>
											
												<?php }
												else
												{
													?>
												
												 <button class="btn btn-mini btn-primary green_bu" type="button" onclick="attendEvent(<?php echo $counter;?>)">Connect</button>
					<?php }?>
											</section>
											<img src="<?php echo base_url()?>assets/images/form_preloader.gif" style="display: none; margin-left:210px;" id="loader-<?php echo $counter;?>"/>
											<section id="attendingsuccess" class="attendingsuccess-<?php echo $counter;?>" style="padding: 0px 90px;color: green;display:none;">
												 <strong>You have successfully registered for this event!</strong>
											</section>
										</div>
									</div>
								</article>
							</div>
					<?php 
					$counter++;
					}?>
							<div class="pagination pagination-small" id="my_pagi">
							<?php echo $links; ?>
							
							</div>
							<script>
								$(document).ready(function(){
								$('.dropdown-toggle').dropdown();
								
								$("#pagination a").click(function(){
									var url = $(this).attr('href');
									var temp = url.split('/');
									var filtrationCities = $("#filtrationCities").val();
									var shortDestiValue=$("#shortDestiValue").val();
									var shortUnivValue=$("#shortUnivValue").val();
									var shortDateValue=$("#shortDateValue").val();
									var data = {offset:temp[6],desti:shortDestiValue,univ:shortUnivValue,date:shortDateValue};
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
									return false;
								});
								
								});
							</script>