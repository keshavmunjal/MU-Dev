<div class="row">
						<div class="span7">
							<p class="text-right">Showing <?php echo count($results)?>/<?php echo $countResults;?> <i class="icon-circle-arrow-right"></i></p>
						</div>
					</div>
					
					<?php 
					if(isset($results) && $results)
					{
					foreach ($results as $universities)
					{
					
					
					$CountryNamep=$this->collegemodel->getUnivLocationById($universities->cityId,$universities->countryId);
											
					//print_r($CountryNamep);
					
					$countryNameinarray=explode(",",$CountryNamep);
					$countryNameinarray=str_replace(' ','',$countryNameinarray);
					if(!empty($countryNameinarray[1]))
						{
							$countryInUrl=$countryNameinarray[1];
						}
					else
						{
							$countryInUrl=$countryNameinarray[0];
						}
					?>
					<?php
											$link = str_replace(' ','-',$universities->univName);
											$link = preg_replace('/[^A-Za-z0-9\-]/', '',$link);
											$temp_link = rtrim(base64_encode($universities->id),'=');
											
										?>
					<div class="row blog_style">
						<article class="span7">
						  <div class="row">
						   <div class="span1">
						   <?php if($universities->logo){?>
						   <img src="<?php echo base_url()?>assets/univ_logo/<?php echo $universities->logo;?>" alt="<?php echo $universities->univName;?>" title="<?php echo $universities->univName;?>" style="max-width: 70px;margin: 11px 4px;" class="img-polaroid"></img>
						   <?php }else{?>
						   <img src="<?php echo base_url()?>assets/univ_logo/univ.png?>" alt="<?php echo $universities->univName;?>" title="<?php echo $universities->univName;?>" style="max-width: 56px;margin: 13px 14px;" class="img-polaroid"></img>
						   <?php }?>
						   </div>
						   <div class="span6">
							<div class="row">
								<div class="span4">
									<h4><a href="<?php echo base_url().strtolower($countryInUrl).'-college/'.$link.'/'.$temp_link?>"><?php echo $universities->univName; ?></a></h4>
								</div>
								<div class="span2">
									<div class='place pull-right'>
										<i class="icon-map-marker icon-class-mu"></i>
										<?php 
											echo $this->collegemodel->getUnivLocationById($universities->cityId,$universities->countryId);
											
											
										?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="span4">
									<div class='content_blog pull-left clearfix'>
									<p><?php echo substr($universities->overview,0,150)."...";?></p>
									</div>
								</div>
								<div class="span2 mu-connect">
									<!--<div class="btn-group">
										<button class="btn dropdown-toggle btn-success btn-mini" data-toggle="dropdown">MU Connect <span class="caret"></span></button>
										<ul class="dropdown-menu">
										  <li><a href="#"><i class="icon-group"></i>&nbsp;&nbsp;In-Person</a></li>
										  <li><a href="#"><i class="icon-phone"></i>&nbsp;&nbsp;On-Tel</a></li>
										  <li><a href="#"><i class="icon-facetime-video"></i>&nbsp;&nbsp;Virtual</a></li>
										</ul>
									</div>-->
									<span class="label label-success">MU Connect</span><br>
									<a class="btn btn-mini btn-success mu-connect-icon" href="#"><i class="icon-group" rel='tooltip' title='In-Person'></i></a>
									<a class="btn btn-mini btn-success mu-connect-icon" href="#"><i class="icon-phone" rel='tooltip' title='On-Tel'></i></a>
									<a class="btn btn-mini btn-success mu-connect-icon" href="#" style="margin-right: 10px;"><i class="icon-facetime-video" rel='tooltip' title='Virtual'></i></a>
								</div>
							</div>
						   </div>
						  </div>
							<div class="row">
								<div class="span7">
									<div class="row">
										<div class="span3">
										<a class="btn btn-primary btn-mini" href='#'><i class='icon-plus-sign'></i> Add College</a>
										</div>
										<div class="span4 mu-connect">
										
										<a class="btn btn-info btn-mini" href="<?php echo base_url().strtolower($countryInUrl).'-college/'.$link.'/'.$temp_link?>">Univ Details</a>

										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
					<?php
					}
					}
					else{
					?>
					<div class="row blog_style">
						<article class="span7"><h4>No Colleges Found</h4></article>
					</div>
					
					<?php
					}
					?> 
					<div class="pagination pagination-small" id="my_pagi">
					   <?php echo $links; ?>
					 <!--  <ul>
                           <li><a href="#">&lt;</a></li>
                           <li class="disabled no_border"><a href="#">1/201</a></li>
                           <li ><a href="#">&gt;</a></li>
                        </ul>-->
                     </div>
<script>			
$("[rel=tooltip]").tooltip({ placement: 'bottom'});		 
 $(document).ready(function(){
	  
		$("#pagination a").click(function(){
		     
			var url = $(this).attr('href');
			var temp = url.split('/');
			var data = {offset:temp[6],univName:$("#filtrationUniversities").val()};
			$.ajax({
				type	:	'POST',
				data	:	data,
				url		:	url,
				beforeSend: function(){
					$("#collegeContent").css('opicity','0.4');
				},
				success: function(data){
					$("#collegeContent").html(data);
					$("#collegeContent").css('opicity','1');
				},
				
			})
			return false;
		});
	  
	  });
	  
	  </script>					 