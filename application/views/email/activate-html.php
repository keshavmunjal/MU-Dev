<!DOCTYPE html>
<html lang="en">
<body style="background:#f1f1f1">
<table width="800px" align="center" style="font-family:arial;font-size:15px">
	<tr>
		<td style="float:left"><img src="<?php echo site_url();?>assets/email_img/logo.png"</td>
	</tr>
	
		<tr><td style="font-size:20px;color:#c88039;font-weight:bold">Welcome to MeetUniv.com – Best Place to Meet Universities!</td></tr>
		<tr><td style="padding-top: 17px;">Dear <?php echo $fullname;?>,</td></tr>
		<tr><td style="padding-top: 13px;">To start using your MU account, all you have to do is confirm your email address within <?php echo $activation_period; ?> hours.</td></tr>
		<tr><td><table style="background: #ffa822;margin-top: 30px;text-decoration: none;"><tr><td>
		<a href="<?php echo site_url('/auth/activate/'.$user_id.'/'.$new_email_key); ?>" style="color:#000;text-decoration:none;">Confirm My Email Address</a></td></tr></table></td></tr>
		<tr><td style="padding-top:30px">Another Way to confirm your email address</td></tr>
		<tr>
			<td>
				<ol>
					<li>Link doesn't work? Copy the following link to your browser address bar:<br>
					<?php echo site_url('/auth/activate/'.$user_id.'/'.$new_email_key); ?></li>
					<li><a href="<?php echo site_url('/login'); ?>">Log in</a> to your MU account</li>
					<li>Click Confirm email address on your Account Overview.</li>
					<!--<li>Enter this confirmation number: 1723-5825-7212-8109-9385</li>-->
				</ol>
			</td>
		</tr>
		<tr>
			<td>
				<table style="background:#e8f1fa" width="800px">
					<tr><th style="font-size:25px">How to optimize your stay on MeetUniv.com – Best Place to Meet Universities!!<th></tr>
						<tr>
							<td>
								<ul>
									<li>Update your profile | Helps us connect you better.</li>
									<li>Do your research, short list universities & follow them</li>
									<li>Register for MU Connect – easiest way to get connected directly, </li>
									<li>Tips and advice from our experts &interesting experiences</li>
									<li>Want help preparing for Exams , We got some pointers for you</li>
								<ul>
							</td>
						</tr>
				</table>
			</td>
		</tr>
		<tr><td style="padding-top:20px">Thanks,</td></tr>
		<tr><td style="padding-top:20px">TeamMU</td></tr>
		<tr><td style="padding-top:20px"><table><tr>
			<td>Follow Us</td>
			<td><a href="http://facebook.com/MeetUniv"><img src="<?php echo site_url();?>assets/email_img/face.png"></a></td>
			<td><a href="http://twitter.com/MeetUniv"><img src="<?php echo site_url();?>assets/email_img/twit.png"></a></td>
			<td><a href="http://youtube.com/MeetUniv"><img src="<?php echo site_url();?>assets/email_img/you.png"></a></td>
			<td><a href=""><img src="<?php echo site_url();?>assets/email_img/link.png"></a></td>
		</tr></table></td></tr>

</table>
</body>
</html>