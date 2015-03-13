
<?php
	foreach($universityData as $Datauniversity)
		{
			
		}
?>

<?php
	foreach($universityDetail as $Detailuniversity)
		{
				
		}
?>

<?php 
		echo "<div class='row custommar'><div class='span3'><strong>Course</strong></div><div class='span2'><strong>Fees (Approx)</strong></div><div class='span1'><strong>Satisfaction</strong></div></div>";
				
		foreach($allCourse as $AllGetCourse)
				{
				$courseId=$AllGetCourse['courseId'];
					echo"<div class='row custommar'>";
					
					echo "<div class='span3'>".$AllGetCourse['name']." (".$AllGetCourse['kisMode'].")</div>";
					
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
					echo "<div class='span1'>".$satisfaction[0]->value."%</div>";
			
				?>
					<div class="span1"><a href="<?php echo base_url();?>course/<?php echo $Datauniversity['univName']."/".$Datauniversity['id']."/".str_replace(" ","-",$AllGetCourse['name'])."/".$AllGetCourse['courseId'];?>" target="_blank"><span class="label label-info">View More</span></a>
								</div>
					</div>								
		<?php	}
		
?>