 <div role="main" id="main">
      <div class="row container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb univ_breadcrumb">
                  <li><a href="<?php echo base_url()?>">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li><a href="<?php echo base_url('college')?>">College Search</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
				  <li><a href="<?php echo base_url('college')?>/<?php echo $universityName; ?>/<?php echo base64_encode($universityId); ?>"><?php echo str_replace("-"," ",$universityName); ?></a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li class="active"><?php echo str_replace("-"," ",$courseName);?></li>
               </ul>
          <!--<img src="<?php echo base_url();?>assets/images/course_images/howard-university.jpg" class="left" />
          <p class="left tenuni">10 more universities</p>-->
        </div>
      </div>
        <div class="row">
          <div class=" individual-page-border  span12">
            <div class="row">
              <div class="span8">
                <div class="row">
                  <div class="span4">
                    <h3 class="padlt"> <?php echo str_replace("-"," ",$courseName);?> </h3>
                    <!--<p class="drgimon"> DR. Gimon </p>-->
                  </div>
                </div>
                <!--<p class="drgimon"> Start learning About CG and video editing by using Softwares</p>-->
				<p class="drgimon"><?php echo $accreditationData[0]['text']; ?></p>
				</div>
            
              <div class="span4">
			  <!--
				<span class="good-img"><?php echo $nssData[0]['value']?>%<span>
                <h4 class="good">Good</h4>
                <p class="good"> Based on 14000 votes</p>
               
				-->
				
				<div class="row">
					<div class="span3">
						<h4 class="good">Good</h4>
						<p class="good"> Based on 14000 votes</p>
					</div>
					<div class="span1">
						<h3 class="greenbg"><?php echo $nssData[0]['value']?>%</h3>
					</div>
				</div>
				<input type="button" class=" shortlist btn btn-default " value="+ shortlist" >
              </div>
            </div>
          </div>
        </div>  
        <!--<div class="row">
          <div class=" individual-page-border span12">
            <div class="row">
              <div class="span9">
                <div class="row">
                  <div class=" Know span4">
                    <p class="green"> Know more</p>
                    <input type="button" value="inquire" class="green-btn" />
                    <p class="green"> Related</p>
                    <input type="button" value="compare" class="green-btn" />
                  </div>
                </div>
              </div>
              <div class="span3">
                <img src="<?php echo base_url();?>assets/images/course_images/social-icons.jpg" class="padtp"/>
              </div>
            </div>
          </div>
         
        </div>-->
         <div class="row">
         <!-- accordian starts -->
          <!--<div class="container-fluid" style="padding-right:0">
          
     <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class=" gr-font accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                 Overview1
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">
                <div class="accordion-inner">
                  Lorem ipsum dolor sit amet, consectetur adipisicing 
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
 ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
qui officia deserunt mollit anim id est laborum.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class=" gr-font accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                 Overview1
                </a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                  Lorem ipsum dolor sit amet, consectetur adipisicing 
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
 ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
qui officia deserunt mollit anim id est laborum.
                </div>
              </div>
            </div>
            
              <div class="accordion-group">
              <div class="accordion-heading">
                <a class="  gr-font accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                 Overview3
                </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  Lorem ipsum dolor sit amet, consectetur adipisicing 
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
 ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
qui officia deserunt mollit anim id est laborum.
                </div>
              </div>
            </div>
            
            
          </div>
    </div>-->
    <!-- accordian finish -->
            <!-- <div class=" border span12">
              <p class="gr-font"> Overview </p>
            </div> -->
          
		  <!---Accreditation--->
          </div>
		  <hr/>
		  <div class="row">
            <div class="gr-bg span12">
              <p class="">Employment & Accreditation</p>
            </div>
          </div>
          <div class="row">
            <div class=" seminar  span12">
              <div class="row">
                
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span9">
                  <!--<img src="<?php echo base_url();?>assets/images/course_images/time-period.jpg" />-->
				  <!--<div id="chart_div" style="width:400; height:300"></div>-->
				  <?php foreach($accreditationData as $accreditation){ ?>
				  <p style="background: none repeat scroll 0% 0% #F6FBFB;border: 1px solid #DDD; margin-bottom: 10px;width:900px;height:auto; padding-top:2px; padding-bottom:2px;padding-left:10px; margin-left: 15px;font-weight:bold;font-size:13px;">
						<?php echo $accreditation['text'];?>
				  </p>
				  <?php } ?>
                </div>
			</div>
          </div>
      </div>
	  <hr/>
	  <div class="row">
            <div class=" seminar  span12">
              <div class="row">
                
				<div class="span10">
                  <h2> Average salary six months after the course </h2>
                </div>
				<div class="span10" style="background:none repeat scroll 0% 0% #cccccc; width:145px;float:right;">
                  <h2> £<?php echo $salaryData['7']['video'];?> </h2>
                </div>
                <div class="span9" style="font-family:Arial,Helvetica,sans-serif; font-size:15px;">
				Typical salary range: £<?php echo $salaryData['7']['video'];?> - £<?php echo $salaryData['6']['video'];?>
				</div>
				<div class="span9" style="font-family:Arial,Helvetica,sans-serif; font-size:15px;font-weight:bold;">
				Average salary across the UK after taking a similar course
				</div>
				<div class="span9" style="font-family:Arial,Helvetica,sans-serif;font-size:15px;">
				£<?php echo $salaryData['7']['video'];?> after six months (salary range: £<?php echo $salaryData['3']['video'];?> - £<?php echo $salaryData['5']['video'];?>)
				</div>
				<div class="span9" style="font-family:Arial,Helvetica,sans-serif;font-size:15px;">
				£<?php echo $salaryData['1']['video'];?> after 40 months (salary range: £<?php echo $salaryData['0']['video'];?> - £<?php echo $salaryData['2']['video'];?>)
				</div>
              </div>
            </div>
          </div>
	  <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span9">
                  <!--<img src="<?php echo base_url();?>assets/images/course_images/time-period.jpg" />-->
				  <!--<div id="chart_div" style="width:400; height:300"></div>-->
				   
                  
                </div>
            </div>
          </div>
		  
      </div>
	  
	  <!---Go on to work and/or study start here--->
	  <hr/>
	  <div class="row">
            <div class=" seminar  span12">
              <div class="row">
                <div class="span10">
                  <h2> Go on to work and/or study </h2>
                </div>
                <div class="span2">
                  <!--<img src="<?php echo base_url();?>assets/images/course_images/23.jpg" class="num" />-->
				</div>
              </div>
            </div>
          </div>
	  <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span9">
                  <!--<img src="<?php echo base_url();?>assets/images/course_images/time-period.jpg" />-->
				  <!--<div id="chart_div" style="width:400; height:300"></div>-->
				  <div class="chartBox" id="chart_pie_9adbc379657d44dd94216f4878fd64ce"></div>
                  <!--<p class="chart"> Chart Explained</p>-->
                </div>
            </div>
          </div>
      </div>
	  <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	  <script type="text/javascript">
                google.load("visualization", "1", { packages: ["corechart"] });
                google.setOnLoadCallback(drawChart);

                function drawChart() {

                    var dataArray = [['Key', 'Value']];

                        dataArray.push(['Now working', <?php echo $employmentData[5]['value']?>]);
                        dataArray.push(['Doing further study', <?php echo $employmentData[4]['value']?>]);
                        dataArray.push(['Studying and working', <?php echo $employmentData[2]['value']?>]);
                        dataArray.push(['Unemployed', <?php echo $employmentData[1]['value']?>]);
                        dataArray.push(['Other', <?php echo $employmentData[3]['value']?>]);

            var data = google.visualization.arrayToDataTable(dataArray);

            var options = {
                chartArea: { top: 8, width: "100%", height: 214 },
                tooltip: { text: 'value'},
                pieSliceText: 'value',
                colors: [],
                fontSize: 12,
                legend: { alignment: "center" },
	            width: 610,
                height: 230
            };

                options.colors.push('#006db4');
                options.colors.push('#dd322d');
                options.colors.push('#f27820');
                options.colors.push('#008808');
                options.colors.push('#d23894');

            var chart = new google.visualization.PieChart(document.getElementById('chart_pie_9adbc379657d44dd94216f4878fd64ce'));
                    chart.draw(data, options);
                }

            </script>
	  
	  <!----Employment six months after the course Start Here--->
	  <hr/>
	  <div class="row">
            <div class=" seminar  span12">
              <div class="row">
                <div class="span10">
                  <h2> Employment six months after the course </h2>
                </div>
                <div class="span2">
                  
				</div>
              </div>
            </div>
          </div>
	  <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span9">
                  <!--<img src="<?php echo base_url();?>assets/images/course_images/time-period.jpg" />-->
				  <!--<div id="chart_div" style="width:400; height:300"></div>-->
				   <div class="chartBox" id="chart_pie_da8f7b75c43a42099472de0daea79906"></div>
                  <!--<p class="chart"> Chart Explained</p>-->
                </div>
            </div>
          </div>
      </div>
	  <script type="text/javascript">
                google.load("visualization", "1", { packages: ["corechart"] });
                google.setOnLoadCallback(drawChart);

                function drawChart() {

                    var dataArray = [['Key', 'Value']];

                        dataArray.push(['In a professional or managerial job', <?php echo $jobData[0]['value']?>]);
                        dataArray.push(['Not in a professional or managerial job', <?php echo $jobData[1]['value']?>]);
                        dataArray.push(['In an unknown job type', <?php echo $jobData[2]['value']?>]);

            var data = google.visualization.arrayToDataTable(dataArray);

            var options = {
                chartArea: { top: 8, width: "100%", height: 214 },
                tooltip: { text: 'value'},
                pieSliceText: 'value',
                colors: [],
                fontSize: 12,
                legend: { alignment: "center" },
	            width: 610,
                height: 230
            };

                options.colors.push('#006db4');
                options.colors.push('#dd322d');
                options.colors.push('#f27820');

            var chart = new google.visualization.PieChart(document.getElementById('chart_pie_da8f7b75c43a42099472de0daea79906'));
                    chart.draw(data, options);
                }

            </script>
	  <hr/>
	  <div class="row">
            <div class=" seminar  span12">
              <div class="row">
                <div class="span10">
                  <h2> Most common jobs </h2>
                </div>
              </div>
            </div>
          </div>
	  <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span9" style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:15px;">
					These are the most common job types students do six months after finishing the course.
				</div>
				<div class="span9">
                  <table border="0">
						<tr>
							<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:15px;font-weight:bold;">
							Job
							</td>
							<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:15px;font-weight:bold;">%</td>
						</tr>
						<tr>
							<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:15px;">
							Business and public service associate professionals
							</td>
							<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:15px;">
							<?php echo $commonData[0]['order']?>%
							</td>
						</tr>
						<tr>
							<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:15px;">
							Administrative occupations
							</td>
							<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:15px;">
							<?php echo $commonData[1]['order']?>%
							</td>
						</tr>
						<tr>
							<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:15px;">
							Sales occupations
							</td>
							<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:15px;">
							<?php echo $commonData[2]['order']?>%
							</td>
						</tr>
						<tr>
							<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:15px;">
							Business, research and administrative professionals
							</td>
							<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:15px;">
							<?php echo $commonData[3]['order']?>%
							</td>
						</tr>
						<tr>
							<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:15px;">
							Customer service occupations
							</td>
							<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:15px;">
							<?php echo $commonData[4]['order']?>%
							</td>
						</tr>
						<tr>
							<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:15px;">
							Managers, directors and senior officials
							</td>
							<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:15px;">
							<?php echo $commonData[5]['order']?>%
							</td>
						</tr>
						<tr>
							<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:15px;">
							Information technology and telecommunications professionals
							</td>
							<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:15px;">
							<?php echo $commonData[6]['order']?>%
							</td>
						</tr>
						<tr>
							<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:15px;">
							Teaching and educational professionals
							</td>
							<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:15px;">
							<?php echo $commonData[7]['order']?>%
							</td>
						</tr>
						<tr>
							<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:15px;">
							Skilled trades occupations
							</td>
							<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:15px;">
							<?php echo $commonData[8]['order']?>%
							</td>
						</tr>
					</table>
                </div>
			</div>
          </div>
      </div>
	  
		
		<!---Entry Information start here--->
		
		<div class="row">
         </div>
		  <div class="row">
            <div class="gr-bg span12">
              <p class="">Entry Information</p>
            </div>
          </div>
      <div class="row">
            <div class=" seminar  span12">
              <div class="row">
                <div class="span10">
                  <h2> Entry qualifications </h2>
                </div>
                <div class="span2">
                  
				</div>
              </div>
            </div>
          </div>
	  <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span9">
                  <div class="chartBox" id="chart_pie_b73b329502654f00a25741a3772ed3b5"></div>
                  <!--<p class="chart"> Chart Explained</p>-->
                </div>
            </div>
          </div>
      </div>
	  
	  <script type="text/javascript">
                google.load("visualization", "1", { packages: ["corechart"] });
                google.setOnLoadCallback(drawChart);

                function drawChart() {

                    var dataArray = [['Key', 'Value']];

                        dataArray.push(['Degree (or equivalent) or higher qualification', <?php echo $entryData[3]['value']?>]);
                        dataArray.push(['Different higher education qualification', <?php echo $entryData[6]['value']?>]);
                        dataArray.push(['A Levels Scottish Advanced Highers or similar', <?php echo $entryData[1]['value']?>]);
                        //dataArray.push(['Baccalaureate', <?php echo $entryData[2]['value']?>]);
                        //dataArray.push(['Completed Access Course', <?php echo $entryData[2]['value']?>]);
                        //dataArray.push(['No/unknown prior qualifications', <?php echo $entryData[2]['value']?>]);
                        dataArray.push(['Other', <?php echo $entryData[5]['value']?>]);

            var data = google.visualization.arrayToDataTable(dataArray);

            var options = {
                chartArea: { top: 8, width: "100%", height: 214 },
                tooltip: { text: 'value'},
                pieSliceText: 'value',
                colors: [],
                fontSize: 12,
                legend: { alignment: "center" },
	            width: 610,
                height: 230
            };

                options.colors.push('#006db4');
                options.colors.push('#dd322d');
                options.colors.push('#f27820');
                options.colors.push('#008808');
                options.colors.push('#d23894');
                options.colors.push('#2d3091');
                options.colors.push('#2ca096');

            var chart = new google.visualization.PieChart(document.getElementById('chart_pie_b73b329502654f00a25741a3772ed3b5'));
                    chart.draw(data, options);
                }

            </script>
	  
	  <!---UCAS Tariff scores--->
	  <hr/>
	  <div class="row">
            <div class=" seminar  span12">
              <div class="row">
                <div class="span10">
                  <h2> UCAS Tariff scores </h2>
                </div>
                <div class="span2">
                  
				</div>
              </div>
            </div>
          </div>
	  <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span9">
                  <div class="chartBox" id="chart_bar_31eefe7b2b554e039a1846dc7feee613"></div>
                </div>
            </div>
          </div>
      </div>
	  
	  <script type="text/javascript">
                 google.load("visualization", "1", { packages: ["corechart"] });
                 google.setOnLoadCallback(drawBarChart);

                 function drawBarChart() {

                     var dataArray = [['Key', 'Percentage']];

                         dataArray.push(['\u003c 120', <?php echo $tariffData[0]['value']?>]);
                         dataArray.push(['120 - 159', <?php echo $tariffData[1]['value']?>]);
                         dataArray.push(['160 - 199', <?php echo $tariffData[2]['value']?>]);
                         dataArray.push(['200 - 239', <?php echo $tariffData[3]['value']?>]);
                         dataArray.push(['240 - 279', <?php echo $tariffData[4]['value']?>]);
                         dataArray.push(['280 - 319', <?php echo $tariffData[5]['value']?>]);
                         dataArray.push(['320 - 359', <?php echo $tariffData[6]['value']?>]);
                         dataArray.push(['360 - 399', <?php echo $tariffData[7]['value']?>]);
                         dataArray.push(['400 - 439', <?php echo $tariffData[8]['value']?>]);
                         dataArray.push(['440 - 479', <?php echo $tariffData[9]['value']?>]);
                         dataArray.push(['480 - 519', <?php echo $tariffData[10]['value']?>]);
                         dataArray.push(['520 - 559', <?php echo $tariffData[11]['value']?>]);
                         dataArray.push(['560 - 599', <?php echo $tariffData[12]['value']?>]);
                         dataArray.push(['600+', <?php echo $tariffData[13]['value']?>]);

                    var data = google.visualization.arrayToDataTable(dataArray);

                    var options = {
	                    chartArea: {left:100,height:"280" },
	                    fontSize: 12,
	                    colors: ['#006db4'],
	                    legend: 'none',
	                    hAxis: { viewWindowMode: 'explicit', viewWindow: {max:108, min:0}, minValue: 0, maxValue: 100 },
	                    width: 610,
	                    height: 353
                    };

                     var chart = new google.visualization.BarChart(document.getElementById('chart_bar_31eefe7b2b554e039a1846dc7feee613'));
                     chart.draw(data, options);
                 }

             </script>
			
	  <!----Stages Start Here--->
	  
          <div class="row">
            <div class="gr-bg span12">
              <p class=""> Studyinformation</p>
            </div>
          </div>
          <div class="row">
            <div class=" seminar  span12">
              <div class="row">
                <div class="span10">
                  <h2> Time in Lecture, Seminars and Similars </h2>
                  <p>Are there other things which students must do to complete this course</p>
                </div>
                <div class="span2">
                  <img src="<?php echo base_url();?>assets/images/course_images/23.jpg" class="num" />
				</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span9">
                  <!--<img src="<?php echo base_url();?>assets/images/course_images/time-period.jpg" />-->
				  <!--<div id="chart_div" style="width:400; height:300"></div>-->
				  <div class="chartBox" id="chart_column_313db0ad64e24cb79ef40dc0f7c560b8"></div>
                  <!--<p class="chart"> Chart Explained</p>-->
                </div>
			</div>
          </div>
      </div>
	  
	  
	  <script type="text/javascript">
    google.load("visualization", "1", { packages: ["corechart"] });
    google.setOnLoadCallback(drawChart);

    function drawChart() {

        var dataArray = [['Year' , '% time in lectures, seminars and similar', '% time in independent study', '% time on placement (if relevant to course)']];

            dataArray.push(['Year 1' , <?php echo $stagesData[0]['ScheduledLearningAndTeachingPercentage']?>,<?php echo $stagesData[0]['IndependentStudyPercentage']?>, <?php echo $stagesData[0]['PlacementStudyPercentage']?>]);
            dataArray.push(['Year 2' , <?php echo $stagesData[1]['ScheduledLearningAndTeachingPercentage']?>, <?php echo $stagesData[1]['IndependentStudyPercentage']?>, <?php echo $stagesData[1]['PlacementStudyPercentage']?>]);
            dataArray.push(['Year 3' , <?php echo $stagesData[2]['ScheduledLearningAndTeachingPercentage']?>, <?php echo $stagesData[2]['IndependentStudyPercentage']?>, <?php echo $stagesData[2]['PlacementStudyPercentage']?>]);

        var data = google.visualization.arrayToDataTable(dataArray);

        var options = {
            chartArea: { left: 28, height: "80%", width: "65%" },
            colors: [],
            fontSize: 12,
	        vAxis: {minValue:0, maxValue:100},
            width: 610,
            height: 180
        };

            options.colors.push('#006db4');
            options.colors.push('#dd322d');
            options.colors.push('#f27820');

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_column_313db0ad64e24cb79ef40dc0f7c560b8'));
        chart.draw(data, options);
    }

</script>

	   <!----Assessment by coursework Start Here--->
	  <hr/>
	  <div class="row">
            <div class=" seminar  span12">
              <div class="row">
                <div class="span10">
                  <h2> Assessment by coursework </h2>
                </div>
                <div class="span2">
                  <img src="<?php echo base_url();?>assets/images/course_images/23.jpg" class="num" />
				</div>
              </div>
            </div>
          </div>
	  <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span9">
                  <!--<img src="<?php echo base_url();?>assets/images/course_images/time-period.jpg" />-->
				  <!--<div id="chart_div" style="width:400; height:300"></div>-->
				  <div class="chartBox" id="chart_column_58f8607f0bd94c92b76144a4a8c215e1"></div>
                  <!--<p class="chart"> Chart Explained</p>-->
                </div>
            </div>
          </div>
      </div>
	  
	  <script type="text/javascript">
    google.load("visualization", "1", { packages: ["corechart"] });
    google.setOnLoadCallback(drawChart);

    function drawChart() {

        var dataArray = [['Year' , '% written exams', '% coursework', '% practical exams']];

            dataArray.push(['Year 1' , <?php echo $stagesData[0]['WrittenExamPercentage']?>, <?php echo $stagesData[0]['CourseworkAssessmentPercentage']?>, <?php echo $stagesData[0]['PracticalExamPercentage']?>]);
            dataArray.push(['Year 2' , <?php echo $stagesData[1]['WrittenExamPercentage']?>, <?php echo $stagesData[1]['CourseworkAssessmentPercentage']?>, <?php echo $stagesData[1]['PracticalExamPercentage']?>]);
            dataArray.push(['Year 3' , <?php echo $stagesData[2]['WrittenExamPercentage']?>, <?php echo $stagesData[2]['CourseworkAssessmentPercentage']?>, <?php echo $stagesData[2]['PracticalExamPercentage']?>]);

        var data = google.visualization.arrayToDataTable(dataArray);

        var options = {
            chartArea: { left: 28, height: "80%", width: "65%" },            colors: [],            fontSize: 12,	        vAxis: {minValue:0, maxValue:100},            width: 610,            height: 180        };            options.colors.push('#006db4');            options.colors.push('#dd322d');            options.colors.push('#f27820');        var chart = new google.visualization.ColumnChart(document.getElementById('chart_column_58f8607f0bd94c92b76144a4a8c215e1'));        chart.draw(data, options);    }</script>                            <script type="text/javascript">                google.load("visualization", "1", { packages: ["corechart"] });                google.setOnLoadCallback(drawChart);                function drawChart() {                    var dataArray = [['Key', 'Value']];                        dataArray.push(['1st class degree', 20]);                        dataArray.push(['Upper 2nd class degree', 50]);                        dataArray.push(['Lower 2nd class degree', 30]);                        dataArray.push(['Other honours / pass without honours', 0]);                        dataArray.push(['Ordinary degree', 0]);                        dataArray.push(['Degree that is not subject to classification', 0]);            var data = google.visualization.arrayToDataTable(dataArray);            var options = {                chartArea: { top: 8, width: "100%", height: 214 },                tooltip: { text: 'value'},                pieSliceText: 'value',                colors: [],                fontSize: 12,                legend: { alignment: "center" },	            width: 610,                height: 230            };                options.colors.push('#006db4');                options.colors.push('#dd322d');
                options.colors.push('#f27820');
                options.colors.push('#008808');
                options.colors.push('#d23894');
                options.colors.push('#2d3091');

            var chart = new google.visualization.PieChart(document.getElementById('chart_pie_bc929221aed34feda6815c1fc486f90a'));
                    chart.draw(data, options);
                }

            </script>
			
	  <!--Class of degree start here--->
	  <hr/>
	  <div class="row">
            <div class=" seminar  span12">
              <div class="row">
                <div class="span10">
                  <h2> Class of degree  </h2>
                </div>
                <div class="span2">
                 <!--<img src="<?php echo base_url();?>assets/images/course_images/23.jpg" class="num" />-->
				</div>
              </div>
            </div>
          </div>
	  <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span9">
                  <!--<img src="<?php echo base_url();?>assets/images/course_images/time-period.jpg" />-->
				  <!--<div id="chart_div" style="width:400; height:300"></div>-->
				  <div class="chartBox" id="chart_pie_a157a444189046efa1ff408cd80b2200"></div>
                  <!--<p class="chart"> Chart Explained</p>-->
                </div>
            </div>
          </div>
      </div>
	  
	  <script type="text/javascript">
                google.load("visualization", "1", { packages: ["corechart"] });
                google.setOnLoadCallback(drawChart);

                function drawChart() {

                    var dataArray = [['Key', 'Value']];

                        dataArray.push(['1st class degree', <?php echo $degreeClassesData[0]['value']?>]);
                        dataArray.push(['Upper 2nd class degree', <?php echo $degreeClassesData[1]['value']?>]);
                        dataArray.push(['Lower 2nd class degree', <?php echo $degreeClassesData[2]['value']?>]);
                        dataArray.push(['Other honours / pass without honours', <?php echo $degreeClassesData[3]['value']?>]);
                        dataArray.push(['Ordinary degree', <?php echo $degreeClassesData[4]['value']?>]);
                        dataArray.push(['Degree that is not subject to classification', <?php echo $degreeClassesData[5]['value']?>]);

            var data = google.visualization.arrayToDataTable(dataArray);

            var options = {
                chartArea: { top: 8, width: "100%", height: 214 },
                tooltip: { text: 'value'},
                pieSliceText: 'value',
                colors: [],
                fontSize: 12,
                legend: { alignment: "center" },
	            width: 610,
                height: 230
            };

                options.colors.push('#006db4');
                options.colors.push('#dd322d');
                options.colors.push('#f27820');
                options.colors.push('#008808');
                options.colors.push('#d23894');
                options.colors.push('#2d3091');

            var chart = new google.visualization.PieChart(document.getElementById('chart_pie_a157a444189046efa1ff408cd80b2200'));
                    chart.draw(data, options);
                }

            </script>
	  
	  <!--Continuation start here--->
	  <hr/>
	  <div class="row">
            <div class=" seminar  span12">
              <div class="row">
                <div class="span10">
                  <h2> Continuation  </h2>
                </div>
                <div class="span2">
                  <!--<img src="<?php echo base_url();?>assets/images/course_images/23.jpg" class="num" />-->
				</div>
              </div>
            </div>
          </div>
	  <div class="row">
            <div class="span12">
              <div class="row">
                <div class="span9">
                  <!--<img src="<?php echo base_url();?>assets/images/course_images/time-period.jpg" />-->
				  <!--<div id="chart_div" style="width:400; height:300"></div>-->
				  <div class="chartBox" id="chart_pie_546f1dae52b74c2bb00f9cbeb582b6e2"></div>
                  <!--<p class="chart"> Chart Explained</p>-->
                </div>
            </div>
          </div>
      </div>
    </div>
	<script type="text/javascript">
                google.load("visualization", "1", { packages: ["corechart"] });
                google.setOnLoadCallback(drawChart);

                function drawChart() {

                    var dataArray = [['Key', 'Value']];

                        dataArray.push(['Continue at the university or college', <?php echo $continuationData[0]['value']?>]);
                        dataArray.push(['Complete the course they enrolled on', <?php echo $continuationData[3]['value']?>]);
                        dataArray.push(['Complete a different award from the one they enrolled on', <?php echo $continuationData[4]['value']?>]);
                        dataArray.push(['Are taking a break from their studies', <?php echo $continuationData[1]['value']?>]);
                        dataArray.push(['Left before completing their course', <?php echo $continuationData[2]['value']?>]);

            var data = google.visualization.arrayToDataTable(dataArray);

            var options = {
                chartArea: { top: 8, width: "100%", height: 214 },
                tooltip: { text: 'value'},
                pieSliceText: 'value',
                colors: [],
                fontSize: 12,
                legend: { alignment: "center" },
	            width: 610,
                height: 230
            };

                options.colors.push('#006db4');
                options.colors.push('#dd322d');
                options.colors.push('#f27820');
                options.colors.push('#008808');
                options.colors.push('#d23894');

            var chart = new google.visualization.PieChart(document.getElementById('chart_pie_546f1dae52b74c2bb00f9cbeb582b6e2'));
                    chart.draw(data, options);
                }

            </script>
	
	

    

	