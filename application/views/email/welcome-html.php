<!DOCTYPE html>
<html lang="en">
<body>
	<table width="800px" align="center" style="font-family:arial;font-size:15px">
		<tr>
			<td style="float:left"><img src="images/logo.jpg"></td>
		</tr>
		<tr>
			<td width="70%" height="100px" valign="top">
				<table>
							<tr><td>Welcome to MeetUniv.Com – Best Place to Meet Universities!</td></tr>
							<tr><td style="padding-top:29px">Dear <?php echo $fullname; ?>,</td></tr>
							<tr><td style="padding-top:18px">Research and connect with universities worldwide instantly with your new MeetUniv.Com account. Learn more about how an updated profile ,can get you connected better with your dream universities, or log in to your MeetUniv.Com account to get started now!</td></tr>
							<tr><td style="padding-top:11px">Some important Pointers:</td></tr>
							<tr>
								<td>
									<ul>
										<li><a href="<?php echo site_url('/login/'); ?>" style="color:#000">Best Place to Meet Universities</a></li>
										<li><a href="<?php echo site_url('/connect/'); ?>" style="color:#000">MU - Connect</a></li>
										<!--<li><a href="#" style="color:#000">Exam Ware</a></li>
										<li><a href="#" style="color:#000">Premium Counselling</a></li>-->
									</ul>
								<hr style="color:#ccc"></hr>
								</td>
							</tr>
						<tr>
							<td style="padding-top:20px">
								<!--MU Profile Id MU331-->
							</td>
						</tr>
						<tr>
						<td>
							<table>
							<tr><td>Follow Us</td>
							<td><a href="http://facebook.com/MeetUniv"><img src="<?php echo site_url();?>assets/email_img/face.png"></a></td>
							<td><a href="http://twitter.com/MeetUniv"><img src="<?php echo site_url();?>assets/email_img/twit.png"></a></td>
							<td><a href="http://youtube.com/MeetUniv"><img src="<?php echo site_url();?>assets/email_img/you.png"></a></td>
							<td><a href=""><img src="<?php echo site_url();?>assets/email_img/link.png"></a></td>
							</tr>
							</table>
						</td>
						</tr>
				</table>
			</td>
		
			<td style="border:1px solid #ccc" width="30%">
				<table >
					<tr><th style="background:#eee;padding-top:4px" height="30px" >Your Account Info</th></tr>
					<tr><td style="padding-top:20px">Make sure you never provide your password to anyone.</td></tr>
					<tr><td style="padding-top:26px;padding-bottom:10px">Email: <?php echo $email;?></td></tr>
					<!--<tr><td style="padding-top:10px">password</td></tr>-->
					<tr><td style="padding-top:52px"><a href="#" style="color: #000;text-decoration: none;">To Change your password , please click here.</a></td></tr>
					<tr><td style="background:#eee" height="50px"></td></tr>
					<tr><td style="padding-top: 30px;padding-bottom: 22px;">You should never give your MeetUniv.Com password to anyone, including our employees.</td></tr>
					
					
				</table>
			</td>
		
			
		</tr>	
		
		
	</table>
</body>
</html>