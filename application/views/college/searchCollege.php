<!--main-->
      <div role="main" id="main">
         <div class="row container">
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
            <article id="college_listing" class="page">
               <ul class="breadcrumb univ_breadcrumb">
                  <li><a href="<?php echo base_url()?>">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li><a href="<?php echo base_url('list-of-colleges')?>">List of Colleges</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li class="active">Search Result</li>
               </ul>
               <div class="clearfix"></div>
               <!--<h3 class="search_header pull-left"><?php echo $countResults;?> Colleges Found</h3>-->
               <div class="search_input  pull-right">
                  <!--<form class="form-search">
                     <div class="input-append">
                        <input type="text" class="span2 " Placeholder="Search Your Keyword...">
                        <button type="submit" class="btn">Search</button>
                     </div>
                  </form>-->
               </div>
               <div class="clearfix"></div>
               <div class="row" id="collage_listing_page">
                  <section class="span3">
                     <h5 class="no_margin margin_b_10">Filter Your Search:</h5>
					 <div class="tab_spine clearfix">
                        <h4>Search By Country</h4>
                        <ul class="unstyled">
                           <li id="addingContentCountry">
							  <input class="span2" id="locationFilterByCountry" type="text" data-provide="typeahead" data-items="4" placeholder="University Country">
							  <!--<span class="add-on" style="cursor:pointer;"><i class="icon-plus blue" style="font-size: 20px;"></i></span>-->
							  <button class="btn btn-primary btn-small" onclick="addLocationByCountry()" style="vertical-align: super;">Filter</button>
							  <input type="hidden" id="filtrationCountries" value=""/>
						   </li>
                           <li id="allCountryLocation">All Countries</li>
                        </ul>
                     </div>
                     <div class="tab_spine clearfix">
                        <h4>Search By City</h4>
                        <ul class="unstyled">
                           <li id="addingContent">
							  <input class="span2" id="locationFilter" type="text" data-provide="typeahead" data-items="4" placeholder="University City">
							  <!--<span class="add-on" style="cursor:pointer;"><i class="icon-plus blue" style="font-size: 20px;"></i></span>-->
							  <button class="btn btn-primary btn-small" onclick="addLocation()" style="vertical-align: super;">Filter</button>
							  <input type="hidden" id="filtrationCities" value=""/>
						   </li>
                           <li id="allLocation">All Cities</li>
                        </ul>
                     </div>
					 <div class="tab_spine clearfix">
                        <h4>Search By University</h4>
                        <ul class="unstyled">
                           <li id="addingContentUniversity">
							  <input class="span2" id="locationFilterByUniversity" type="text" data-provide="typeahead" data-items="4" placeholder="University Name">
							  <!--<span class="add-on" style="cursor:pointer;"><i class="icon-plus blue" style="font-size: 20px;"></i></span>-->
							  <button class="btn btn-primary btn-small" onclick="addLocationByUniversity()" style="vertical-align: super;">Filter</button>
							  <input type="hidden" id="filtrationUniversities" value=""/>
						   </li>
                           <li id="allCountryLocation">All Universities</li>
                        </ul>
                     </div>
					 <div class="tab_spine clearfix">
                        <h4>Refined courses</h4>
                        <ul class="unstyled">
                           <li id="addingContent" style="padding-left: 6px;">
						   <form method="post" action="<?php echo base_url();?>college/searchCollegeByCourse" name="search" id="search">
							  <input class="span2" id="collegeFilter" type="text" data-provide="typeahead" data-items="4" placeholder="Course Name" autocomplete="off">
							  <!--<span class="add-on" style="cursor:pointer;"><i class="icon-plus blue" style="font-size: 20px;"></i></span>-->
							  <button class="btn btn-primary btn-small" type="submit" style="vertical-align: super;">Search</button>
							  <input type="hidden" id="filtrationCities" value=""/>
							</form>
						   </i>
                           
                        </ul>
                     </div>
                     <!--<div class="tab_spine clearfix">
                        <h4>Degree Type</h4>
                        <ul class="unstyled">
                           <li><i class="icon-remove-sign icon-class-red"></i><a href="#">Foundation</a></li>
                           <li><i class="icon-remove-sign icon-class-red"></i><a href="#">Undergraduate</a></li>
                        </ul>
                     </div>
                     <div class="tab_spine clearfix">
                        <h4>Interest</h4>
                        <ul class="unstyled">
                           <li><i class="icon-remove-sign icon-class-red"></i><a href="#">Science</a></li>
                           <li><i class="icon-remove-sign icon-class-red"></i><a href="#">Commerce</a></li>
                        </ul>
                     </div>
                     <div class="tab_spine clearfix">
                        <h4>Criteria</h4>
                        <ul class="unstyled">
                           <li><i class="icon-remove-sign icon-class-red"></i><a href="#">IELTS</a></li>
                           <li><i class="icon-remove-sign icon-class-red"></i><a href="#">PTE</a></li>
                        </ul>
                     </div>
                     <div class="tab_spine clearfix">
                        <h4>Financials</h4>
                        <ul class="unstyled">
                           <li><i class="icon-remove-sign icon-class-red"></i><a href="#">Below &pound; 5000</a></li>
                           <li><i class="icon-remove-sign icon-class-red"></i><a href="#">Above &pound; 5000</a></li>
                        </ul>
                     </div>
                     <div class="tab_spine clearfix">
                        <h4>Intake</h4>
                        <ul class="unstyled">
                           <li><i class="icon-remove-sign icon-class-red"></i><a href="#">Sept 2013</a></li>
                           <li><i class="icon-remove-sign icon-class-red"></i><a href="#">Jan 2014</a></li>
                        </ul>
                     </div>-->
                  </section>
                  <section class="span7" id="collegeContent">
					<div class="row">
						<div class="span7">
							<p class="text-right">Showing <?php echo count($results)?>/<?php echo $countResults;?> <i class="icon-circle-arrow-right"></i></p>
						</div>
					</div>
					
					<?php 
					if(!empty($results))
					{
						foreach ($results as $universities)
						{
						?>
						<div class="row blog_style">
							<article class="span7">
							  <div class="row">
							   <div class="span1">
							   <?php if($universities['logo']){?>
							   <img src="<?php echo base_url()?>assets/univ_logo/<?php echo $universities['logo'];?>" alt="<?php echo $universities['univName'];?>" title="<?php echo $universities['univName'];?>" style="max-width: 70px;margin: 11px 4px;" class="img-polaroid"></img>
							   <?php }else{?>
							   <img src="<?php echo base_url()?>assets/univ_logo/univ.png?>" alt="<?php echo $universities['univName'];?>" title="<?php echo $universities['univName'];?>" style="max-width: 56px;margin: 13px 14px;" class="img-polaroid"></img>
							   <?php }?>
							   </div>
							   <div class="span6">
								<div class="row">
									<?php
										$link = str_replace(' ','-',$universities['univName']);
										$link = preg_replace('/[^A-Za-z0-9\-]/', '',$link);
									?>
									<div class="span4">
										<h4><a href="<?php echo base_url().strtolower($universities['countryName']).'-college/'.$link.'/'.base64_encode($universities['id'])?>"><?php echo $universities['univName']; ?></a></h4>
									</div>
									<div class="span2">
										<div class='place pull-right'>
										<i class="icon-map-marker icon-class-mu"></i>
										<?php 
										echo $this->collegemodel->getUnivLocationById($universities['cityId'],$universities['countryId']);
										?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="span4">
										<div class='content_blog pull-left clearfix'>
										<p><?php echo substr($universities['overview'],0,150)."...";?></p>
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
											if (!in_array($universities['id'], $val)) {
												
											
											//echo "<pre>";print_r($collegeDetail);exit;
											?>
											<a class="btn btn-primary btn-mini" href='javascript:void(0)' onclick="addCollege(this,'<?php echo $universities['id'];?>');"><i class='icon-plus-sign' id="collegeAddDiv"></i> Add College</a>
											<?php } ?>
											</div>
											<div class="span4 mu-connect">
											
											<a class="btn btn-info btn-mini" href="<?php echo base_url().strtolower($universities['countryName']).'-college/'.$link.'/'.base64_encode($universities['id'])?>">Univ Details</a>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
					<?php
						}
					}else{ ?>
						<div style="font-size:12px;text-align:center;font-weight:bold;color:red;"><?php echo 'Searched record not found!'; ?></div>
					<?php } ?> 
					<div class="pagination pagination-small" id="my_pagi">
					   <?php echo $links; ?>
					 <!--  <ul>
                           <li><a href="#">&lt;</a></li>
                           <li class="disabled no_border"><a href="#">1/201</a></li>
                           <li ><a href="#">&gt;</a></li>
                        </ul>-->
                     </div>
				  </section>
                  <aside class="span2">
                      <article onclick="window.open('http://bit.do/hpbannernew')" style="cursor:pointer;">
                        <img src="<?php echo base_url();?>assets/img/ad/bcsurvey.jpg">
                     </article>
                  </aside>
               </div>
            </article>
         </div>
      </div>
      <!--end main-->
	  <?php $this->load->view('layout/js'); ?>
	  <script src="<?php echo base_url();?>assets/js/bootstrap-dropdown.js"></script>
	  <script src="<?php echo base_url();?>assets/js/bootstrap-typeahead.js"></script>
	  <script>
					$("[rel=tooltip]").tooltip({ placement: 'bottom'});
					$(document).ready(function(){
						
						/*typehead*/
						/* $.get('<?php echo base_url()?>college/cityJsonList',function(data){
									console.log(data);
								}); */
						$('#locationFilter').typeahead({
							source: function(query, process){
								 return $.get('<?php echo base_url()?>/college/cityJsonList',function(data){
									return process(data)
								}); 
							}
						});
						
						$('#locationFilterByCountry').typeahead({
							source: function(query, process){
								 return $.get('<?php echo base_url()?>/college/countryJsonList',function(data){
									return process(data)
								}); 
							}
						});
						$('#locationFilterByUniversity').typeahead({
							source: function(query, process){
								 return $.get('<?php echo base_url()?>/college/universityJsonList',function(data){
									return process(data)
								}); 
							}
						});
						
						//**** search courses ****/////
						$('#search').submit(function(){
							var c_name = $('#collegeFilter').val();
							
							//var courseName = c_name.replace("-","=");
							
							var courseName = c_name.replace(/\s+/g, '+');
							//	alert(courseName);return false;
							//var courseName = c_name.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-').replace(/\//g, "-");
							window.location.href = "<?php echo base_url();?>college/searchCollegeByCourse/"+courseName;
							return false;
						});
						
						$('#collegeFilter').typeahead({
							source: function(query, process){
								 //return $.get('<?php echo base_url()?>/college/courseJsonList',function(data){
								 return $.get('<?php echo base_url()?>/assets/courses.json',function(data){
									return process(data)
								}); 
							}
						});
						
						/*end*/
						$('.dropdown-toggle').dropdown();
						$("#pagination a").click(function(){
							var url = $(this).attr('href');
							var temp = url.split('/');
							//alert(temp[6]);return false;

							var data = {offset:temp[6],courseName:temp[5]};
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
					function addLocation()
					{
						var locationVar = $("#locationFilter");
						var location = locationVar.val();
						if(location!='')
						{
						  var filtrationCities = $("#filtrationCities").val();
							
						  if(filtrationCities.indexOf(location)<=-1)
						  {
							$("#addingContent").after("<li><i class='icon-remove-sign icon-class-red' id='"+location.substring(0,4)+"' onclick='removeCity(\""+location+"\",this.id)' style='cursor:pointer'></i>"+location+"</li>");
							
							if(filtrationCities=='')
							{
								$("#allLocation").hide();
								$("#filtrationCities").val(location);
							}
							else
								$("#filtrationCities").val(filtrationCities+","+location);
							
							//alert($("#filtrationCities").val());
							url="<?php echo base_url();?>college/filterByLocation";
							data = {cityName:$("#filtrationCities").val()};
							 $.ajax({
								type	:	'POST',
								data	:	data,
								url		:	url,
								beforeSend: function(){
									$("#collegeContent").css('opicity','0.4');
								},
								success: function(data){
									//alert(data);
									$("#collegeContent").html(data);
									$("#collegeContent").css('opicity','1');
								},
								
							}) 
						  }
						  locationVar.val('');
						}
					}
					function removeCity(cityName,id)
					{
					  var city = cityName;
					  var filtrationCities = $("#filtrationCities").val();
					  filtrationCities = filtrationCities.replace(city+",","");
					  filtrationCities = filtrationCities.replace(","+city,"");
					  filtrationCities = filtrationCities.replace(city,"");
					  $("#filtrationCities").val(filtrationCities);
					  $("#"+id).parent().remove();
					  url="<?php echo base_url();?>college/filterByLocation";
					  data = {cityName:$("#filtrationCities").val()};
					   $.ajax({
					  	type	:	'POST',
					  	data	:	data,
					  	url		:	url,
					  	beforeSend: function(){
					  		$("#collegeContent").css('opicity','0.4');
					  	},
					  	success: function(data){
					  		//alert(data);
					  		$("#collegeContent").html(data);
					  		$("#collegeContent").css('opicity','1');
					  	},
					  	
					  }) 
					  //if()
					}
					
					/*added by raghvendra*/
					
					function addLocationByCountry()
					{
						var location = $("#locationFilterByCountry").val();
						if(location!='')
						{
						  var filtrationCountries = $("#filtrationCountries").val();
							//alert(filtrationCountries);
						  if(filtrationCountries.indexOf(location)<=-1)
						  {
							$("#addingContentCountry").after("<li><i class='icon-remove-sign icon-class-red' id='"+location.substring(0,4)+"' onclick='removeCountry(\""+location+"\",this.id)' style='cursor:pointer'></i>"+location+"</li>");
							
							if(filtrationCountries=='')
							{
								$("#allLocation").hide();
								$("#filtrationCountries").val(location);
							}
							else
								$("#filtrationCountries").val(filtrationCountries+","+location);
							
							//alert($("#filtrationCountries").val());
							url="<?php echo base_url();?>college/filterLocationByCountry";
							data = {countryName:$("#filtrationCountries").val()};
							//alert(data);return;
							 $.ajax({
								type	:	'POST',
								data	:	data,
								url		:	url,
								beforeSend: function(){
									$("#collegeContent").css('opicity','0.4');
								},
								success: function(data){
									//alert(data);
									$("#collegeContent").html(data);
									$("#collegeContent").css('opicity','1');
								},
								
							}) 
						  }
						  $("#locationFilter").val('');
						}
					}
					function removeCountry(countryName,id)
					{
					  var country = countryName;
					  var filtrationCountries = $("#filtrationCountries").val();
					  filtrationCountries = filtrationCountries.replace(country+",","");
					  filtrationCountries = filtrationCountries.replace(","+country,"");
					  filtrationCountries = filtrationCountries.replace(country,"");
					  $("#filtrationCountries").val(filtrationCountries);
					  $("#"+id).parent().remove();
					  url="<?php echo base_url();?>college/filterLocationByCountry";
					  data = {countryName:$("#filtrationCountries").val()};
					   $.ajax({
					  	type	:	'POST',
					  	data	:	data,
					  	url		:	url,
					  	beforeSend: function(){
					  		$("#collegeContent").css('opicity','0.4');
					  	},
					  	success: function(data){
					  		//alert(data);
					  		$("#collegeContent").html(data);
					  		$("#collegeContent").css('opicity','1');
					  	},
					  	
					  }) 
					  //if()
					}
					function addLocationByUniversity()
					{
						var location = $("#locationFilterByUniversity").val();
						if(location!='')
						{
						  var filtrationUniversities = $("#filtrationUniversities").val();
							//alert(filtrationCountries);
						  if(filtrationUniversities.indexOf(location)<=-1)
						  {
							$("#addingContentUniversity").after("<li><i class='icon-remove-sign icon-class-red' id='"+location.substring(0,4)+"' onclick='removeUniversity(\""+location+"\",this.id)' style='cursor:pointer'></i>"+location+"</li>");
							
							if(filtrationUniversities=='')
							{
								$("#allUniversityLocation").hide();
								$("#filtrationUniversities").val(location);
							}
							else
								$("#filtrationUniversities").val(filtrationUniversities+","+location);
							
							//alert($("#filtrationUniversities").val());
							url="<?php echo base_url();?>college/filterLocationByUniversity";
							data = {univName:$("#filtrationUniversities").val()};
							//alert(data);return;
							 $.ajax({
								type	:	'POST',
								data	:	data,
								url		:	url,
								beforeSend: function(){
									$("#collegeContent").css('opicity','0.4');
								},
								success: function(data){
									//alert(data);
									$("#collegeContent").html(data);
									$("#collegeContent").css('opicity','1');
								},
								
							}) 
						  }
						  $("#locationFilterByUniversity").val('');
						}
					}
					function removeUniversity(universityName,id)
					{
					  var university = universityName;
					  var filtrationUniversities = $("#filtrationUniversities").val();
					  filtrationUniversities = filtrationUniversities.replace(university+",","");
					  filtrationUniversities = filtrationUniversities.replace(","+university,"");
					  filtrationUniversities = filtrationUniversities.replace(university,"");
					  $("#filtrationUniversities").val(filtrationUniversities);
					  $("#"+id).parent().remove();
					  url="<?php echo base_url();?>college/filterLocationByUniversity";
					  data = {univName:$("#filtrationUniversities").val()};
					   $.ajax({
					  	type	:	'POST',
					  	data	:	data,
					  	url		:	url,
					  	beforeSend: function(){
					  		$("#collegeContent").css('opicity','0.4');
					  	},
					  	success: function(data){
					  		//alert(data);
					  		$("#collegeContent").html(data);
					  		$("#collegeContent").css('opicity','1');
					  	},
					  	
					  }) 
					  //if()
					}
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