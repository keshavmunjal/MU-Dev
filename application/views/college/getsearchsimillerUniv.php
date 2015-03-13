<?php //echo $first;
//echo $second;

?>
<ul class="collagecustomnomargin">
<?php
$i=1;
foreach($SimilRandUniversity as $SimilUniversityName)
	{
	$link = str_replace(' ','-',$SimilUniversityName['univName']);
	$link = preg_replace('/[^A-Za-z0-9\-]/', '',$link);
	?>
		
		<a href="<?php echo base_url().strtolower($SimilUniversityName['countryName']).'-college/'.$link.'/'.base64_encode($SimilUniversityName['id'])?>" target="_blank">
			<li class="noextention">
				<img style="margin-left:0px" src="<?php echo base_url()?>assets/univ_logo/<?php echo $SimilUniversityName['logo'];?>" alt="<?php echo $SimilUniversityName['univName']?>" title="<?php echo $SimilUniversityName['univName']?>" class="span1">
				<span class="span3">
					<h5 class="unihead"><?php echo $SimilUniversityName['univName'].""?></h5>
					<i class="icon-map-marker iconpadding"></i><?php echo $SimilUniversityName['cityName'].', '.$SimilUniversityName['countryName']."<br/>"?>
					<i class="icon-book iconpadding"></i>Courses - <?php echo $first;?><i class="fa fa-book"></i>
					
				</span>
			</li>
			</a>
		<hr class="customhr"/>
		
	<?php
			
			if($i==1)
				{
					$first=$second;
					$i++;
				}
			else if($i==2)
				{
					$first=$third;
					$i++;
				}
				
			else if($i==3)
				{
					$first=$fourth;
					$i++;
				}
			else
				{
					$first=$five;
					$i++;
				}
		
	}
?>
</ul>
<style>
.collagecustomnomargin{margin: 0px!important; list-style:none;}
.noextention{text-overflow: ellipsis;overflow: hidden;white-space: nowrap;color: black;}
.iconpadding{padding-right: 4%;}
.unihead{margin-top: 0px;
margin-bottom: 0px;
width: 204px;
text-overflow: ellipsis;
overflow: hidden;
white-space: nowrap;}
</style>
