<!DOCTYPE html>
<html lang="en">
<body style="background:#f1f1f1">
	<table width="700px" align="center" style="font-family:arial;font-size:15px">
		<tr>
			<td style="float:left"><img src="http://meetuniv.com/lp/img/new-logo.png"></td>
		</tr>
		<tr>
			<td>
				 <table border="0" align="center">
			<tr>
			<td>
				<table cellpadding="5" cellspacing="5" border="0" style="float:left;margin-left:10px;background:#fff">
					<tr>
						<td>You have opted to get connected via MeetUniv.Com Best Place to meet Universities !<td>
					</tr>
					<tr><td style="padding: 18px 0px 10px 0px;font-weight: 600;">Your event details  </td></tr>
					<tr><td>Hosted By: <?php echo $connect['hostedBy']?></td></tr>
					<tr><td style="padding-top: 6px;">Time: <?php echo $connect['time']?></td></tr>
					<tr><td style="padding-top: 6px;">Date: <?php echo $connect['date']?></td></tr>
					<?php
					if($connect['type']=='0')
						{
					?>
					<tr><td style="padding-top: 6px;">Location: <?php echo $connect['location']?></td></tr>
					<?php }
					else
						{ 
						$base_64 = base64_encode($videoId);
						$url_param = rtrim($base_64, '=');
						// and later:
						$base_64 = $url_param . str_repeat('=', strlen($url_param) % 4);
						//$data = base64_decode($base_64);
						//$meeting_code=base64_decode($connect['id']);
					?>
					<tr><td style="padding-top: 6px;">URL: <?php echo "http://meetuniversities.events" ?></td></tr>
					<tr><td style="padding-top: 6px;">Your Meeting Code: <?php echo $base_64 ?></td></tr>
					
					<?php 
					}
					?>
					<tr><td style="padding-top: 6px;"><a href="http://twitter.com/MeetUniv"><img src="http://meetuniv.com/lp/img/twitter.png" style="width:7%;"></a><a href="http://facebook.com/MeetUniv"><img src="http://meetuniv.com/lp/img/facebook.png" style="width: 6%;"></a></td></tr>
					<tr><td style="padding-top: 6px; text-align: center;"><a href="http://meetuniv.com/"><img src="http://meetuniv.com/lp/img/button.jpg" style="width: 25%;"></a></td></tr>
				</table>
			</td>
			</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%">
					 <tr>
						<td width="100%" colspan="2">
						<hr style="border: 1px dashed #999999;">
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>