<?php
// $con=mysql_connect('localhost','meetuniv_lms','deepaklms2013!');
// mysql_select_db('meetuniv_campaign',$con) or die(mysql_error());
$error=0;
if(isset($_REQUEST['register'])){

$name=trim($_REQUEST["full_name"]);
$phone_number=trim($_REQUEST["phone_number"]);
$email=trim($_REQUEST["email_address"]);
$city=trim($_REQUEST["city"]);

$_SESSION['leadsName']=$name;
$_SESSION['email']=$email;
$_SESSION['mobile']=$phone_number;
$_SESSION['city']=$city;

$pwd='letsrock';
$msg="Thanks for your registration.
For Instant Connect: \n
- Call: 1800-300-00068 
- Email :connect@meetuniv.com
- SMS : MEET 54242
MeetUniv.Com";
$msg = urlencode($msg);
$content=file_get_contents("http://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=".$pwd."&send=meetus&dest=91".$phone_number."&msg=".$msg);
		// sms verification
		// look up
		$lookup_verified=0;
		$mobile_content=file_get_contents("http://lookup.unicel.in/LOOKUP?uname=meetlook&pass=Z%28Z@m8j~&dest=91".$phone_number);
			
		$detail=explode("\n",$mobile_content);
			
		$circle=explode(":",$detail[6]);
		
		
		
		$tags='a:3:{i:0;s:1:"4";i:1;s:1:"14";i:1;s:1:"15";}';
		
		
		// /*code to check lookupcity*/
		
		$lookup_verified=($circle[1]==$city)?1:0;
		
		$_SESSION['lookup_verified']=$lookup_verified;
		$_SESSION['city']=$city;
		$_SESSION['lookupCity']=$circle[1];
		
		/*obd call*/
		
		date_default_timezone_set("Asia/Kolkata");
		$time = '10:09'; 
		$timestamp = strtotime(date("d-m-Y H:i")) + 60*45;
		$time = date("d-m-Y H:i", $timestamp);
		
		$limit_start='08:00';
		$limit_end='20:00';
		$call_time=date("d-m-Y H:i", $timestamp);
		
		$time_flag=0;
		
		if(strtotime($time)<strtotime($limit_start) || strtotime($time)>strtotime($limit_end))
		{
			$call_time=strtotime($limit_start)+ rand(1,60)*60*rand(1,3);
			$time_flag=1;
		}
		
		if($time_flag==1)
		{
		$call_time=date("d-m-Y H:i",strtotime('+1 day',$call_time));
		}
		
		//echo "OBD call at time :  ".$call_time."obd callid".$obdcall;
		$call_time=str_replace(" ","%20",$call_time);
		//$obdcall=file_get_contents("http://vapi.unicel.in/voiceapi?request=voiceobd&uname=meetuni&pass=letsrock&obdid=237&type=S&dest=91".$_POST['phone']."&msgtype=P&msg=XX&schtm=".$call_time);
		$obdcall=file_get_contents("http://vapi.unicel.in/voiceapi?request=voiceobd&uname=meetuni&pass=letsrock&obdid=237&type=S&dest=91".$phone_number."&msgtype=P&msg=Congratulations.wav&schtm=".$call_time);
		//echo $time;
		$temprary_obd_test="http://vapi.unicel.in/voiceapi?request=voiceobd&uname=meetuni&pass=letsrock&obdid=237&type=S&dest=91".$phone_number."&msgtype=P&msg=Congratulations.wav&schtm=".$call_time;
		/*end of obd call*/
		
		$lookupCity = $circle[1];
		$leads_status = '';//(!$lookup_verified)?'43':'';
		$lms_status='';
		if($city == 'Delhi' && ($lookupCity == 'UP (West)' || $lookupCity == 'Haryana'||$lookupCity == 'Delhi'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if($city == 'Mumbai' && ($lookupCity == 'Mumbai' || $lookupCity == 'Maharashtra'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if($city == 'Bangalore' && $lookupCity == 'Karnataka')
		{
			$leads_status = '';
			$lms_status='';
		}
		else if($city == 'Pune' && $lookupCity == 'Maharashtra')
		{
			$leads_status = '';
			$lms_status='';
		}
		else if($city == 'Kolkata' && ($lookupCity == 'Kolkata' || $lookupCity == 'West Bengal'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if($city == 'Ahmedabad' && $lookupCity == 'Gujarat')
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if($city == 'Cochin' && $lookupCity == 'Kerala')
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if($city == 'Baroda' && $lookupCity == 'Gujarat')
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if($city == 'Nagpur' && $lookupCity == 'Maharashtra')
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if($city == 'Coimbatore' && ($lookupCity == 'Tamilnadu' || $lookupCity == 'Chennai'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if($city == 'Hyderabad' && $lookupCity == 'AP')
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if($city == 'Chennai' && ($lookupCity == 'Chennai' || $lookupCity == 'Tamilnadu'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if($city == 'Chandigarh' && ($lookupCity == 'Punjab' || $lookupCity == 'Haryana'|| $lookupCity == 'HP'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if($city == 'Ludhiana' && ($lookupCity == 'Punjab' || $lookupCity == 'Haryana'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if(($city == 'Lucknow' || $city == 'lucknow') && ($lookupCity == 'UP (East)'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if(($city == 'Bhubaneshwar') && ($lookupCity == 'Orissa'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if(($city == 'Jaipur') && ($lookupCity == 'Rajasthan'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if(($city == 'Indore') && ($lookupCity == 'MP'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if(($city == 'Vijaywada') && ($lookupCity == 'AP'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if(($city == 'Dheradun') && ($lookupCity == 'UP (West)'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if(($city == 'Amritsar') && ($lookupCity == 'Punjab'))
		{
			$leads_stauts = '';
			$lms_status='';
		}else if(($city == 'Jalandhar') && ($lookupCity == 'Punjab'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else if(($city == 'Trivandrum') && ($lookupCity == 'Kerala' || $lookupCity == 'kerala'))
		{
			$leads_stauts = '';
			$lms_status='';
		}
		else
		{
			$leads_status='43';
			$lms_status='22';
		}
		
/*save data to lms */

$url="http://leadmentor.in/lead/enter";
		$data = array('name'=>$name,'email'=>$email,'phone'=>$phone_number,'status'=>$lms_status,'city'=>$city,'source'=>'Widget','lookupCity'=>$lookupCity,'obdId'=>$obdcall,'obdTime'=>$call_time,'campaign'=>'','randomCode'=>$random_code,'leads_sub'=>'');
		 $options = Array(
					CURLOPT_RETURNTRANSFER => TRUE,  // Setting cURL's option to return the webpage data
					CURLOPT_FOLLOWLOCATION => TRUE,  // Setting cURL to follow 'location' HTTP headers
					CURLOPT_AUTOREFERER => TRUE, // Automatically set the referer where following 'location' HTTP headers
					CURLOPT_CONNECTTIMEOUT => 120,   // Setting the amount of time (in seconds) before the request times out
					CURLOPT_TIMEOUT => 120,  // Setting the maximum amount of time for cURL to execute queries
					CURLOPT_MAXREDIRS => 10, // Setting the maximum number of redirections to follow
					CURLOPT_USERAGENT => "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8",  // Setting the useragent
					CURLOPT_URL => $url, // Setting cURL's URL option with the $url variable passed into the function
					CURLOPT_POST => count($data), //count post values
					CURLOPT_POSTFIELDS => $data, //count post values
				);
         
        $ch = curl_init();  // Initialising cURL 
        curl_setopt_array($ch, $options);   // Setting cURL's options using the previously assigned array data in $options
        $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
        
		curl_close($ch);    // Closing cURL 
		
		/*******end of curl code*******/

/*save data to lms */
ob_start();
header('Location: http://meetuniv.com/widget/thankyou.php');
exit;
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0072)/index.html -->
<html xmlns="http://www.w3.org/1999/xhtml" class="cufon-active cufon-ready"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Study in UK">
<meta name="keywords" content="study in uk">
<title>
Study in UK
</title>
<style>
body,html{padding:0px;margin:0px;border:0px;font-size:12px;line-height:12px;}
select,input{font-size:10px;}
</style>
<body>
<div style="text-align:center; ">
<img src="image.png" style="width:300px;height:85px">
<form action ="http://meetuniv.com/widget/index.php" method="post">
<p> Name: <input type="text" required name="full_name"></p>
<p> Email: <input type="email" required name="email_address"></p>
<p> Phone: <input type="number" required name="phone_number"></p>
<p> City: 
<select name="city" id="city" style="width:120px;" required>
			<option value="">Select</option>
			<option value="Hyderabad">Hyderabad</option>
			<option value="Mumbai" >Mumbai</option>
			<option value="Delhi" >Delhi</option>
			<option value="Cochin" >Cochin</option>
			<option value="Coimbatore" >Coimbatore</option>
			<option value="Chennai">Chennai</option>
			<option value="Bangalore">Bangalore</option>
			<option value="Nagpur" >Nagpur</option>
			<option value="Chandigarh">Chandigarh</option>
			<option value="Pune" >Pune</option>
			<option value="Indore" >Indore</option>
			<option value="Jaipur" >Jaipur</option>
			<option value="Dehradun">Dehradun</option>
			<option value="Lucknow">Lucknow</option>
			<option value="Ahmedabad">Ahmedabad</option>
			</select>
</p>
<p>			
<input type="submit" value="Register" name="register"></p>
</form>

</div>
</body>
</html>