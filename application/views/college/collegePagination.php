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
									<?php $univName = str_replace(" ","-",$universities->univName); ?>
									<h4><a style="text-decoration:none" href="<?php echo base_url().strtolower($universities->countryName).'-college/'.$univName.'/'.base64_encode($universities->id)?>"><?php echo $universities->univName; ?></a></h4>
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
										<?php $collegeDetail = $this->collegemodel->getCollegeDetail(); 
											$val = array();
											foreach($collegeDetail as $c){
												$val[] = $c['college_id'];
											}
											//$key = array_search($collegeId, $val);
											if (!in_array($universities->id, $val)) {
												
											
											//echo "<pre>";print_r($collegeDetail);exit;
										?>
											<a class="btn btn-primary btn-mini" href='javascript:void(0)' onclick="addCollege(this,'<?php echo $universities->id;?>');"><i class='icon-plus-sign' id="collegeAddDiv"></i> Add College</a>
											<?php } ?>
										</div>
										<div class="span4 mu-connect">
										<?php
											$link = str_replace(' ','-',$universities->univName);
											$link = preg_replace('/[^A-Za-z0-9\-]/', '',$link);
											$temp_link = rtrim(base64_encode($universities->id),'=');
											
										?>
										<a class="btn btn-info btn-mini" href="<?php echo base_url().strtolower($universities->countryName).'-college/'.$link.'/'.$temp_link?>">Univ Details</a>
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
			var data = {offset:temp[6],cityName:$("#filtrationCities").val()};
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
	  function addCollege(that,collegeId)
					{
						
						//alert(collegeId);
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
								window.location.assign("<?php echo base_url()?>/login");
							}
					  		
					  	},
						})
					}
	  </script>					 