<div class="row">
								<div class="span6">
									<p class="text-right">Showing <?php echo count($results)?>/<?php echo $countResults;?> <i class="icon-circle-arrow-right"></i></p>
								</div>
							</div>
					<?php
					$counter=1;
					foreach($results as $connect)
					{
						$univName=$this->connectmodel->getUniversityNameById($connect->univId);
						$location=$this->collegemodel->getUnivLocationById($connect->cityId,$connect->countryId);
						$address=$connect->location;
					?>
							<div class="row connect-listing">
								<article class="span6">
									<div class="row">
										<div class="span4">
											<div class='content_blog pull-left clearfix'>
												<h4><?php echo $univName;?></h4>
												<hr>
												<p><?php echo $connect->tagLine;?></p>
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
												  <li><a href="javascript:void(0)" onclick='ConnectMU("<?php echo $connect->id;?>","<?php echo $univName;?>","<?php echo $connect->tagLine;?>","<?php echo $connect->date;?>","<?php echo $location;?>","<?php echo $address;?>");'><i class="icon-mobile-phone"></i>&nbsp;&nbsp;SMS</a></li>
												  <li><a href="#"><i class="icon-envelope-alt"></i>&nbsp;&nbsp;E-Mail</a></li>
												</ul>
												</div>
												<button class="btn btn-mini btn-primary voilet" type="button" id="attending-<?php echo $counter;?>" onclick="showAttending(this.id);">I am Attending</button>
												Attending <a href="#" id="attendCountTxt-<?php echo $counter;?>">+<?php echo $connect->counter;?></a>
												<input type="hidden" id="attendCount-<?php echo $counter;?>" value="<?php echo $connect->counter;?>"/>
												
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
												 <button class="btn btn-mini btn-primary green_bu" type="button" onclick="attendEvent(<?php echo $counter;?>)">Connect</button>
											</section>
											<section id="attendingsuccess" class="attendingsuccess-<?php echo $counter;?>" style="padding: 0px 90px;color: green;display:none;">
												 <strong>You have successfully register for this Event!</strong>
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
											$("#connectPagination").css('opacity','0.4');
										},
										success: function(data){
										//alert(data);
											$("#connectPagination").html(data);
											$("#connectPagination").css('opacity','1');
										},
										
									})
									return false;
								});
								
								});
							</script>