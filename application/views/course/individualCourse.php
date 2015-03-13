
    <div role="main" id="main">
      <div class="row container" style="padding-bottom:20px;">
		<div class="row">
			<div class="span12">
				<ul class="breadcrumb univ_breadcrumb">
                  <li><a href="<?php echo base_url()?>">Home</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li><a href="<?php echo base_url('list-of-colleges')?>">College Search</a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
				  <li><a href="<?php echo base_url('college')?>/<?php echo str_replace("%20","-",$universityName); ?>/<?php echo base64_encode($universityId); ?>"><?php echo str_replace("%20"," ",$universityName); ?></a> <span class="divider"><i class=" icon-arrow-right"></i></span></li>
                  <li class="active"><?php echo str_replace("-"," ",$courseName);?></li>
               </ul>
				<div class="row">
					<div class="span9">
						<h1 style="font-size:30px; font-weight:bold"><?php echo str_replace("-"," ",$courseName);?></h1>
						<h3 class="blue-text"><?php echo $accreditationData[0]['text']; ?></h3>
						<!--<h3 class="blue-text">Accredited by the Association of Accounting Technicians (AAT) for the purpose of eligibility to apply for full membership with that body.</h3>-->
					</div>
					<div class="span3">
						<!--<input type="image" src="assets/images/short-list-btn.jpg" class="pull-right">-->
						<!--<input type="image" style = "margin-left:115px;" src="<?php echo base_url();?>assets/images/short-list-btn.jpg">-->
						
						<p class="pull-right votes">Based on 14000 votes <br><span class="pull-right"><?php echo $nssData[0]['value']?>%</span></p><br>
					</div>
				</div>
			</div>
		</div>
		<div class = "row">
			<div class = "span12">
				<h3 class="employment">Employment & Accreditation</h3>
			<div id = "slide" style="float:right; margin-top:-40px;cursor:pointer;"><img src="<?php echo base_url();?>assets/images/up-arrow.png" class="imageSwip">
			</div>
			</div>
		</div>
		
		<div id='employement'>
			<div class="row">
				<div class="span12">
					<!--<h3 class="employment">Employment & Accreditation</h3>-->
					<ul class="employment">
						<?php foreach($accreditationData as $accreditation){ ?>
							<li><?php echo $accreditation['text'];?></li>
						<?php } ?>
						<!--<li>Accredited by the Association of Chartered Certified Accountants (ACCA) for the purpose of exemptions from some professional examinations.</li>
						<li>Accredited by the Institute of Chartered Accountants England and Wales (ICAEW) for the purpose of exemption from some professional examinations.</li>
						<li>Accredited by the Chartered Institute of Public Finance and Accountancy (CIPFA) for the purpose of exemption from some professional examinations.</li>
						<li>Accredited by the Chartered Institute of Management Accountants (CIMA) for the purpose of exemption from some professional examinations through the 
							Accredited degree accelerated route.</li>
						<li> Accredited by the Association of International Accountants (AIA) for the purpose of exemption from some professional examinations.</li>-->
					</ul>
				</div>
			</div>
			
			<div class="row">
				<div class="span12">
					<h4 class="red-font" style="float:left">Average salary six months after the course</h4>
					<!--<img src="assests/images/salary-map.jpg">-->
					<div class="span10" style="background:none repeat scroll 0% 0% #cccccc; width:145px;float:right; margin-top:25px">
					  <h2 style="padding:0 11px;"> £<?php echo $salaryData['7']['video'];?> </h2>
					</div>
					<div class="span9" style="font-family:Arial,Helvetica,sans-serif; font-size:14px;">
					Typical salary range: £<?php echo $salaryData['7']['video'];?> - £<?php echo $salaryData['6']['video'];?>
					</div>
					<div class="span9" style="font-family:Arial,Helvetica,sans-serif; font-size:14px;font-weight:bold;">
					Average salary across the UK after taking a similar course
					</div>
					<div class="span9" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;">
					£<?php echo $salaryData['7']['video'];?> after six months (salary range: £<?php echo $salaryData['3']['video'];?> - £<?php echo $salaryData['5']['video'];?>)
					</div>
					<div class="span9" style="font-family:Arial,Helvetica,sans-serif;font-size:14px;">
					£<?php echo $salaryData['1']['video'];?> after 40 months (salary range: £<?php echo $salaryData['0']['video'];?> - £<?php echo $salaryData['2']['video'];?>)
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span6">
					<h4 class="red-font">Go on to work and/or study</h4>
					<!--<img src="assests/images/work-map.jpg">-->
					<div class="chartBox" id="chart_pie_9adbc379657d44dd94216f4878fd64ce"></div>
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
					legend: { alignment: "left" },
					width: 400,
					height: 130
				};

					options.colors.push('#07a7e3');
					options.colors.push('#dd322d');
					options.colors.push('#f27820');
					options.colors.push('#008808');
					options.colors.push('#d23894');


				var chart = new google.visualization.PieChart(document.getElementById('chart_pie_9adbc379657d44dd94216f4878fd64ce'));
						chart.draw(data, options);
					}

				</script>
				
				<div class="span6">
					<h4 class="red-font">Employment 6 months after the course</h4>
					<!--<img src="assests/images/employment-map.jpg">-->
					<div class="chartBox" id="chart_pie_da8f7b75c43a42099472de0daea79906"></div>
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
					legend: { alignment: "left" },
					width: 400,
					height: 130
				};

					//options.colors.push('#006db4');
					//options.colors.push('#dd322d');
					//options.colors.push('#f27820');
					options.colors.push('#07a7e3');
					options.colors.push('#abbf1f');
					options.colors.push('#f27820');

				var chart = new google.visualization.PieChart(document.getElementById('chart_pie_da8f7b75c43a42099472de0daea79906'));
						chart.draw(data, options);
					}

				</script>
			</div>
			
			<div class="row">
				<div class="span12">
					<h4 class="red-font">Most common jobs</h4>
					<div class="ratings-percent">
					
					<table border="0" class="jobs">
							<tr>
								<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:14px;font-weight:bold;">
								Job
								</td>
								<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:14px;font-weight:bold;">%</td>
							</tr>
							<tr>
								<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:14px;">
								Business and public service associate professionals
								</td>
								<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:14px;">
								<?php echo $commonData[0]['order']?>%
								</td>
							</tr>
							<tr>
								<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:14px;">
								Administrative occupations
								</td>
								<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:14px;">
								<?php echo $commonData[1]['order']?>%
								</td>
							</tr>
							<tr>
								<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:14px;">
								Sales occupations
								</td>
								<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:14px;">
								<?php echo $commonData[2]['order']?>%
								</td>
							</tr>
							<tr>
								<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:14px;">
								Business, research and administrative professionals
								</td>
								<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:14px;">
								<?php echo $commonData[3]['order']?>%
								</td>
							</tr>
							<tr>
								<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:14px;">
								Customer service occupations
								</td>
								<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:14px;">
								<?php echo $commonData[4]['order']?>%
								</td>
							</tr>
							<tr>
								<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:14px;">
								Managers, directors and senior officials
								</td>
								<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:14px;">
								<?php echo $commonData[5]['order']?>%
								</td>
							</tr>
							<tr>
								<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:14px;">
								Information technology and telecommunications professionals
								</td>
								<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:14px;">
								<?php echo $commonData[6]['order']?>%
								</td>
							</tr>
							<tr>
								<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:14px;">
								Teaching and educational professionals
								</td>
								<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:14px;">
								<?php echo $commonData[7]['order']?>%
								</td>
							</tr>
							<tr>
								<td style="font-family:Arial,Helvetica,sans-serif;width:100%; font-size:14px;">
								Skilled trades occupations
								</td>
								<td style="font-family:Arial,Helvetica,sans-serif;width:20%; font-size:14px;">
								<?php echo $commonData[8]['order']?>%
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h3 class="employment">Entry Information</h3>
				<div id = "slideEntry" style="float:right; margin-top:-40px;cursor:pointer;"><img src="<?php echo base_url();?>assets/images/down-arrow.png" class="swapImg">
				</div>
			</div>
		</div>
		<div id='entry' style="display:none;">
			<div class="row">
				<div class="span12">
					<!---<h3 class="employment">Entry Information</h3>-->
				</div>
			</div>
			
			<div class="row">
				<div class="span6">
					<h4 class="red-font">Entry qualifications</h4>
					<!--<img src="assests/images/qualification-map.jpg">-->
					<div class="chartBox" id="chart_pie_b73b329502654f00a25741a3772ed3b5"></div>
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
					chartArea: { top: 8, left: -100, width: "70%", height: 214 },
					tooltip: { text: 'value'},
					pieSliceText: 'value',
					colors: [],
					fontSize: 12,
					legend: { alignment: "center" },
					width: 400,
					height: 130
				};

					options.colors.push('#006db4');
					options.colors.push('#660066');
					options.colors.push('#79BEDB');
					options.colors.push('#008808');
					options.colors.push('#d23894');
					options.colors.push('#2d3091');
					options.colors.push('#2ca096');


				var chart = new google.visualization.PieChart(document.getElementById('chart_pie_b73b329502654f00a25741a3772ed3b5'));
						chart.draw(data, options);
					}

				</script>
				<div class="span6">
					<h4 class="red-font">UCAS Tariff scores</h4>
					<!--<img src="assests/images/traiff-scores-map.jpg">-->
					<div class="chartBox" id="chart_bar_31eefe7b2b554e039a1846dc7feee613"></div>
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
							width: 510,
							height: 253
						};

						 var chart = new google.visualization.BarChart(document.getElementById('chart_bar_31eefe7b2b554e039a1846dc7feee613'));
						 chart.draw(data, options);
					 }

				 </script>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h3 class="employment">Study Information</h3>
				<div id = "slideStudy" style="float:right; margin-top:-40px;cursor:pointer;"><img src="<?php echo base_url();?>assets/images/down-arrow.png" class="swapImg">
				</div>
			</div>
		</div>
		<div id='study' style="display:none;">
			<div class="row">
				<div class="span12">
					<!--<h3 class="employment">Study Information</h3>-->
				</div>
			</div>
			<div class="row">
				<div class="span6">
					<h4 class="red-font">Time in Lecture, Seminars and Similars</h4>
					<!--<img src="assests/images/time-map.jpg">-->
					<div class="chartBox" id="chart_column_313db0ad64e24cb79ef40dc0f7c560b8"></div>
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
				chartArea: { left: 28, height: "80%", width: "60%" },
				colors: [],
				fontSize: 12,
				vAxis: {minValue:0, maxValue:100},
				width: 450,
				height: 180
			};

				options.colors.push('#CC99CC');
				options.colors.push('#FFCC00');
				options.colors.push('#660066');

			var chart = new google.visualization.ColumnChart(document.getElementById('chart_column_313db0ad64e24cb79ef40dc0f7c560b8'));
			chart.draw(data, options);
		}

	</script>
				<div class="span6">
					<h4 class="red-font">Assessment by coursework</h4>
					<!--<img src="assests/images/coursework-map.jpg">-->
					<div class="chartBox" id="chart_column_58f8607f0bd94c92b76144a4a8c215e1"></div>
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
				chartArea: { left: 50, height: "80%", width: "60%" },            colors: [],            fontSize: 12,	        vAxis: {minValue:0, maxValue:100},            width: 450,            height: 180        };            options.colors.push('#CC99CC');            options.colors.push('#FFCC00');            options.colors.push('#660066');        var chart = new google.visualization.ColumnChart(document.getElementById('chart_column_58f8607f0bd94c92b76144a4a8c215e1'));        chart.draw(data, options);    }</script>                            <script type="text/javascript">                google.load("visualization", "1", { packages: ["corechart"] });                google.setOnLoadCallback(drawChart);                function drawChart() {                    var dataArray = [['Key', 'Value']];                        dataArray.push(['1st class degree', 20]);                        dataArray.push(['Upper 2nd class degree', 50]);                        dataArray.push(['Lower 2nd class degree', 30]);                        dataArray.push(['Other honours / pass without honours', 0]);                        dataArray.push(['Ordinary degree', 0]);                        dataArray.push(['Degree that is not subject to classification', 0]);            var data = google.visualization.arrayToDataTable(dataArray);            var options = {                chartArea: { top: 8, width: "100%", height: 214 },                tooltip: { text: 'value'},                pieSliceText: 'value',                colors: [],                fontSize: 12,                legend: { alignment: "center" },	            width: 310,                height: 130            };                options.colors.push('#006db4');                options.colors.push('#dd322d');
					options.colors.push('#CC99CC');
					options.colors.push('#FFCC00');
					options.colors.push('#660066');
					options.colors.push('#2d3091');

				var chart = new google.visualization.PieChart(document.getElementById('chart_pie_bc929221aed34feda6815c1fc486f90a'));
						chart.draw(data, options);
					}

				</script>
			</div>
			<div class="row">
				<div class="span6">
					<h4 class="red-font">Class of degree</h4>
					<!--<img src="assests/images/degree-map.jpg">-->
					<div class="chartBox" id="chart_pie_a157a444189046efa1ff408cd80b2200"></div>
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
					chartArea: { top: 8, left: -100, width: "60%", height: 214 },
					tooltip: { text: 'value'},
					pieSliceText: 'value',
					colors: [],
					fontSize: 12,
					legend: { alignment: "left" },
					width: 400,
					height: 130
				};

					options.colors.push('#006db4');
					options.colors.push('#983265');
					options.colors.push('#f27820');
					options.colors.push('#008808');
					options.colors.push('#d23894');
					options.colors.push('#2d3091');

				var chart = new google.visualization.PieChart(document.getElementById('chart_pie_a157a444189046efa1ff408cd80b2200'));
						chart.draw(data, options);
					}

				</script>
				<div class="span6">
					<h4 class="red-font">Continuation</h4>
					<!--<img src="assests/images/continuation-map.jpg">-->
					<div class="chartBox" id="chart_pie_546f1dae52b74c2bb00f9cbeb582b6e2"></div>
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
					chartArea: { top: 8, left: -100, width: "70%", height: 214 },
					tooltip: { text: 'value'},
					pieSliceText: 'value',
					colors: [],
					fontSize: 12,
					legend: { alignment: "left" },
					width: 500,
					height: 130
				};

					options.colors.push('#979735');
					options.colors.push('#dd322d');
					options.colors.push('#f27820');
					options.colors.push('#008808');
					options.colors.push('#d23894');

				var chart = new google.visualization.PieChart(document.getElementById('chart_pie_546f1dae52b74c2bb00f9cbeb582b6e2'));
						chart.draw(data, options);
					}

				</script>
				
					<!---On click change toggle image--->
	
		<script src="https://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" type="text/javascript"></script>
			<script>
			$(function () {
				$(".imageSwip").live("click", function () {
					if ($(this).attr("class") == "imageSwip") {
						this.src = this.src.replace("up-arrow", "down-arrow");
					} else {
						this.src = this.src.replace("down-arrow", "up-arrow");
					}
					$(this).toggleClass("on");
				});
			});
			$(function () {
				$(".swapImg").live("click", function () {
					if ($(this).attr("class") == "swapImg") {
						this.src = this.src.replace("down-arrow", "up-arrow");
					} else {
						this.src = this.src.replace("up-arrow", "down-arrow");
					}
					$(this).toggleClass("on");
				});
			});
			</script>
			<script> 
			$(document).ready(function(){
			  $("#slide").click(function(){
				$("#employement").slideToggle(800);
			  });
			  $("#slideEntry").click(function(){
				$("#entry").slideToggle(600);
			  });
			  $("#slideStudy").click(function(){
				$("#study").slideToggle(600);
			  });
			});
			</script>
				
			</div>
		</div>
    </div>   
