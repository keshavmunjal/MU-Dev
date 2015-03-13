<?php
ob_start();
session_start();
require 'config.php';
$city=0;
function form_data($data)
	{
		$error=0;
		$name=trim($_POST["full_name"]);
		$phone_number=trim($_POST["phone_number"]);
		$email=trim($_POST["email_address"]);
		$city=trim($_POST["city"]);
		
		$_SESSION['leadsName']=$name;
		$_SESSION['email']=$email;
		$_SESSION['mobile']=$phone_number;

		if($name =="") {
		  $errorMsgName=  "Name : Please enter your name.";
		  
		  $error++;
		  //return $errorMsgName;
		 }

		if($phone_number == "") {
		  $errorMsgPhone=  "Phone : Please enter phone number.";
		  $error++;
		  //return $errorMsgPhone;
		}

		//check if the number field is numeric
		  elseif(is_numeric(trim($phone_number)) == false){
		  $errorMsgPhone=  "Phone : Please enter numeric value only.";
		  //return $errorMsgPhone;
		  $error++;
		}

		elseif(strlen($phone_number)>10){
		  $errorMsgPhone=  "Phone : Phone number should be ten digits only.";
		  //return $errorMsgPhone;
		  $error++;
		}
		else
			{
				$CheckEmailPhon=email_phon_check($phone_number, $email);
				if($CheckEmailPhon)
				{
					//print_r($phone_number);
					if($CheckEmailPhon['leads_phone']==$phone_number)
					{
						$errorMsgPhone=  "Phone : Phone number already Exists.";
					}
					else
					{
						$errorMsgEmail= 'Email : Email already Exist.';
					}
					$error++;
				}
			}

		//check if email field is empty
		if($email == ""){
		  $errorMsgEmail=  "Email : Please enter your email.";
		  //return $errorMsgEmail;
		  $error++;
		} //check for valid email 
		  elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
		  $errorMsgEmail= 'Email : Please enter valid email.';
		  //return $errorMsgEmail;
		  $error++;
		}
		
		if($city =="city"){
		  $errorMsgCity=  "City : Please select your city.";
		  //return $errorMsgCity;
		  $error++;
		}
		if($error==0)
			{
				
				$pageverify='verify';
				$sendSmsCode=send_sms_code($phone_number);
				$lookup=check_user_postion($phone_number, $city);
				$ObdData=obd_call($phone_number);
				
				$SaveData=data_save_db($data,$sendSmsCode,$lookup,$ObdData);
				
				
				return $SaveData;
				
				//return $error;
			}
		else
		{
			//return $error;
			return array($errorMsgName,$errorMsgPhone,$errorMsgEmail,$errorMsgCity);
		}
	}
	
function email_phon_check($phone_number, $email)
	{
		$query=mysql_query("select leads_phone, leads_email from all_lead_view where leads_phone='".$phone_number."' or leads_email='".$email."' ") or die(mysql_error());
				if(mysql_num_rows($query)>0)
				{ 	
					$data=mysql_fetch_assoc($query);
					
					return $data;
					
				}
				//return $data;
				
	}
	
function send_sms_code($phone_number)
	{
		$pwd='letsrock';
		$random_code=rand(10000,99999); 
		$_SESSION['random_code']=$random_code;
		$msg="Welcome to MeetUniv.Com - Best Place to Meet Universities ! Please enter event code ".$random_code." to continue with the online registration process.";
		$msg = urlencode($msg);
		
		$content=file_get_contents("https://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=".$pwd."&send=meetus&dest=91".$phone_number."&msg=".$msg);
		return $random_code;
	}
	
function mobile_veryfication($vry_Detail)
{
	//print_r($_SESSION);
	$check=mysql_query("select verified from leads where verified='".$_POST['code']."' and leads_email='".$_SESSION['email']."' and leads_phone='".$_SESSION['mobile']."'");
	if(mysql_num_rows($check)>0){
		$set =mysql_query("update leads set phone_verified=1,email_verified=1 where verified='".$_POST['code']."' and leads_email='".$_SESSION['email']."' and leads_phone='".$_SESSION['mobile']."'")or die(mysql_error());
		if($set){
		/*******end of curl code*******/
			// code to update if sms verivied ends
			$homepage = file_get_contents('http://leadmentor.in/lead/smsVerified/'.$_SESSION['mobile']);
			header("Location: thankYou2.php");
				die();
		}
		return $vry_Detail;
	}
	else
	{
		$errorCode= "invalid code";
		$pageverify='verify';
		return $errorCode;
	}
}

function data_save_db($data,$sendSmsCode,$lookup,$ObdData)
	{
				
				/*print_r($data);
				print_r($ObdData);
				print_r($lookup);
				*/
				$name=$data['full_name'];
				$email=$data['email_address'];
				$phone_number=$data['phone_number'];
				$lms_status=$lookup[1];
				$city=$data['city'];
				
				$lookupCity=$lookup[2];
				$obdcall=$ObdData[0];
				$call_time=$ObdData[1];
				$temprary_obd_test=$ObdData[2];
				$random_code=$sendSmsCode;
				$circle[1]=$lookup[3];
				$lookup_verified=$lookup[4];
				
				$leads_status=$lookup[0];
				
		
		$lead_source=isset($_GET['src'])?$_GET['src']:'';
		$leads_sub=isset($_GET['sub_id'])?$_GET['sub_id']:'';
		$campaign='';
		$_SESSION['lead_source']=$lead_source;
		$_SESSION['sub_id']=$leads_sub;
		
		$url="http://leadmentor.in/lead/enter";
		$data = array('name'=>$name,'email'=>$email,'phone'=>$phone_number,'status'=>$lms_status,'city'=>$city,'source'=>$lead_source,'lookupCity'=>$lookupCity,'obdId'=>$obdcall,'obdTime'=>$call_time,'campaign'=>$campaign,'randomCode'=>$random_code,'leads_sub'=>$leads_sub);
		// print_r($data);exit;
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
		
		/************************ insert into meet univ db**********/
		$origin='MU-A009-0214-MMU';
		
		 $query=mysql_query("insert into leads (leads_name,leads_email,leads_phone,city,leads_source,verified,leads_sub,sms_verified,leads_address,gre,leads_notes,leads_status) values('".$name."','".$email."','".$phone_number."','".$city."','".$lead_source."','".$random_code."','".$leads_sub."',".$lookup_verified.",'".$circle[1]."','".$obdcall."','".$temprary_obd_test."','".$leads_status."')") or die(mysql_error());
		
		/************************ insert into meet univ db**********/
		
		$pageverify='verify'; //next step verification
			return $pageverify;
	}

	
function check_user_postion($phone_number, $city)
{
		$lookup_verified=0;
		$mobile_content=file_get_contents("https://lookup.unicel.in/LOOKUP?uname=meetlook&pass=Z%28Z@m8j~&dest=91".$phone_number);
		$detail=explode("\n",$mobile_content);
		$circle=explode(":",$detail[6]);
		$lookup_verified=($circle[1]==$city)?1:0;
		$ccircle=$circle[1];
		$_SESSION['campign_csv']=$campaign;
		$_SESSION['lookup_verified']=$lookup_verified;
		$_SESSION['city']=$city;
		$_SESSION['lookupCity']=$circle[1];
		
		$lookupCity = $circle[1];
		$leads_status = '';
		$lms_status='';
		
		//obd_call($phone_number);
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
			$leads_status = '';
			$lms_status='';
		}
		else if($city == 'Ahmedabad' && $lookupCity == 'Gujarat')
		{
			$leads_status = '';
			$lms_status='';
		}
		else if(($city == 'Cochin' || $city == 'Kochi') && $lookupCity == 'Kerala')
		{
			$leads_status = '';
			$lms_status='';
		}
		else if($city == 'Baroda' && $lookupCity == 'Gujarat')
		{
			$leads_status = '';
			$lms_status='';
		}
		else if($city == 'Nagpur' && $lookupCity == 'Maharashtra')
		{
			$leads_status = '';
			$lms_status='';
		}
		else if($city == 'Coimbatore' && ($lookupCity == 'Tamilnadu' || $lookupCity == 'Chennai'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if(($city == 'Hyderabad' || $city == 'Vizag') && $lookupCity == 'AP')
		{
			$leads_status = '';
			$lms_status='';
		}
		else if($city == 'Chennai' && ($lookupCity == 'Chennai' || $lookupCity == 'Tamilnadu'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if($city == 'Chandigarh' && ($lookupCity == 'Punjab' || $lookupCity == 'Haryana'|| $lookupCity == 'HP'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if($city == 'Ludhiana' && ($lookupCity == 'Punjab' || $lookupCity == 'Haryana'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if(($city == 'Lucknow' || $city == 'lucknow') && ($lookupCity == 'UP (East)'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if(($city == 'Bhubaneshwar') && ($lookupCity == 'Orissa'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if(($city == 'Jaipur') && ($lookupCity == 'Rajasthan'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if(($city == 'Indore') && ($lookupCity == 'MP'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if(($city == 'Vijaywada') && ($lookupCity == 'AP'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if(($city == 'Dheradun') && ($lookupCity == 'UP (West)'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if(($city == 'Amritsar') && ($lookupCity == 'Punjab'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if(($city == 'Jalandhar') && ($lookupCity == 'Punjab'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else if(($city == 'Trivandrum') && ($lookupCity == 'Kerala' || $lookupCity == 'kerala'))
		{
			$leads_status = '';
			$lms_status='';
		}
		else
		{
			$leads_status='43';
			$lms_status='22';
		}
		$Ldata=array($leads_status,$lms_status,$lookupCity,$ccircle,$lookup_verified);
		return $Ldata;
		
}

function obd_call($phone_number)
{
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
		
		$call_time=str_replace(" ","%20",$call_time);
		$obdcall=file_get_contents("https://vapi.unicel.in/voiceapi?request=voiceobd&uname=meetuni&pass=letsrock&obdid=237&type=S&dest=91".$phone_number."&msgtype=P&msg=Congratulations.wav&schtm=".$call_time);
		$temprary_obd_test="https://vapi.unicel.in/voiceapi?request=voiceobd&uname=meetuni&pass=letsrock&obdid=237&type=S&dest=91".$phone_number."&msgtype=P&msg=Congratulations.wav&schtm=".$call_time;
		
		$Odata=array($obdcall,$call_time,$temprary_obd_test);
		return $Odata;
}

	
function thanku_page_data($data)
{
	
	if(isset($_POST['time']))
	{
		$time=$_POST['time'];
		$country=$_POST['uk'].','.$_POST['australia'].','.$_POST['new_zealand'].','.$_POST['singapore'];
		$course=$_POST['course'];
		$percentage=$_POST['percentage'];
		$qualification=$_POST['qualification'];
		$dob=$_POST['dob'];
		$leadsId=$_POST['leadsId'];

		$city=$_SESSION['city'];
		$lookup=$_SESSION['lookupCity'];
		$mobile=$_SESSION['mobile'];
		$email=$_SESSION['email'];
		
		$sendmumail=send_mail_mu($leadsId,$mobile,$email,$city,$lookup,$qualification,$course,$country);
	}
	
}

function success_mail()
	{
		$to = $_SESSION['email']; 
		$campaign = $_SESSION['campaign'];
		$campaign_csv = $_SESSION['campign_csv'];
		$camp_arr=explode(",",$campaign_csv);
		$result = mysql_query("SELECT city,leads_name,leads_id,leads_phone,leads_sub,leads_source FROM leads where leads_email = '".$to."'");
		$row=mysql_fetch_array($result);
		$city=strtolower($row['city']);
		$name=$row['leads_name'];

		 $phone=$row['leads_phone'];
		  $leads_sub = $row['leads_sub'];
		 $leads_source = $row['leads_source'];
		$event = $row['eventname'];
		$notes='';
		$pu='test';
		
		$getLeadId=lead_id_get($name,$to,$phone,$city,$leads_source);
		$sendSuccMail=sendthanku_mail($leads_source,$to);
		$sendSuccMsg=sendthankumsg($phone);
	}
	
function sendthanku_mail($leads_source,$to)
{
	$from = "MeetUniv.com <info@meetuniv.com>"; 
	$subject = "Event Registration";
	$message = '<!DOCTYPE html>
	<html lang="en">
	<body style="background:#f1f1f1">
		<table width="700px" align="center" style="font-family:arial;font-size:15px">
			<tr>
				<td style="float:left"><img src="https://meetuniv.com/lp/img/new-logo.png" alt="MeetUniv" title="MeetUniv"></img></td>
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
						<tr><td style="padding: 18px 0px 10px 0px;">Thank you for registering.</td></tr><tr><td style="padding: 18px 0px 10px 0px;">One of our counsellor will soon get in touch with you.</td></tr>
						<tr><td style="padding-top: 6px;"><a href="https://twitter.com/MeetUniv"><img src="https://meetuniv.com/lp/img/twitter.png" style="width:7%;"/></a><a href="https://facebook.com/MeetUniv"><img src="https://meetuniv.com/lp/img/facebook.png" style="width: 6%;"/></a></td></tr>
						<tr><td align="right"><font size="1">'.substr($leads_source, 0, 3).'</font></td></tr>
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
	</html>'; 
   //end of message 
    $headers  = "From: MeetUniv.com <connect@meetuniv.com>\r\n"; 
	$headers .= "Bcc: kapoorn@gmail.com, debal@webinfomart.com\r\n"; 
    $headers .= "Content-type: text/html\r\n"; 
	mail($to, $subject, $message, $headers); 
}
	
	
function lead_id_get($name,$to,$phone,$city,$leads_source)
{
		$url="http://leadmentor.in/request/getLeadIdByCurl";
		$data = array('name'=>$name,'email'=>$to,'phone'=>$phone,'city'=>$city,'source'=>$leads_source);
		//print_r($data);
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
		if(!empty($data))
		{
			   $leads_id=$data;
		}
		else
		{
		//$leads_id=$row['leads_id'];
		$leads_id='';
		}
		curl_close($ch); 
		$_SESSION['leads_id']=$leads_id; 
		return $leads_id;
}

	
	
function sendthankumsg($phone)
	{
		$pwd='letsrock';
		$msg="Thanks for your registration.\nFor Instant Connect: \n- Call: 08375034794\n- Email :connect@meetuniv.com\n- SMS : MEET 54242\nMeetUniv.Com";
		$msg = urlencode($msg);
		$content=file_get_contents("https://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=".$pwd."&send=meetus&dest=91".$phone."&msg=".$msg);
	
		$letms=send_let_msg($phone);
	}
	
function send_let_msg($phone)
{
	$msgdelayed="Welcome to MeetUniv.com, Do login to 
	- Meet Universities Directly
	- Free learning material for IELTS/GRE/GMAT
	- SMS MEET IELTS 54242 (Get Discounts)
	MeetUniv.Com";
	$msgdelayed = urlencode($msgdelayed);

	$minutes_to_add = 18;
	date_default_timezone_set("Asia/Kolkata");
	$time = new DateTime(date('d-m-Y H:i'));
	$time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
	$stamp = $time->format('d-m-Y H:i');
	$stamp=urlencode($stamp);
	$content=file_get_contents("https://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=".$pwd."&send=meetus&dest=91".$phone."&msg=".$msgdelayed."&schtm=".$stamp);

}
	
	
function send_mail_mu($leadsId,$mobile,$email,$city,$lookup,$qualification,$course,$country)
{
	$score_message='<!DOCTYPE html>
	<html lang="en">
	<body style="background:#f1f1f1">
		<table width="600px" align="center" style="font-family:arial;font-size:15px">
			<tr>
				<td style="float:left"><img src="https://meetuniv.com/lp/img/new-logo.png"></td>
			</tr>
			<tr>
				<td>
					 <table border="0" align="center">
				<tr>
				<td>
					<table cellpadding="5" cellspacing="5" border="0" style="float:left;margin-left:10px;background:#fff" width:600px>
						<tr>
							<td><b>Dear Counselling team:</b><td>
						</tr>
						<tr>
							<td>Lead with score value  "100" ,<td>
						</tr>
						<tr><td>LeadId: <b>'.$leadsId.'</b></td></tr>
						<tr><td>Name: <b>'.$_SESSION['leadsName'].'</b></td></tr>
						<tr><td>Mobile Number: <b>'.$mobile.'</b></td></tr>
						<tr><td>Email: </b>'.$email.'</b></td></tr>
						<tr><td>source: </b>'.$_SESSION['lead_source'].'</b></td></tr>
						<tr><td style="padding-top: 6px;">City:<b> '.$city.'</b></td></tr>
						<tr><td style="padding-top: 6px;">Lookup City:<b> '.$lookup.'</b></td></tr>
						<tr><td style="padding-top: 6px;">Current Qualification:<b> '.$qualification.'</b></td></tr>
						<tr><td style="padding-top: 6px;">Wants to do :<b> '.$course.'</b></td></tr>
						<tr><td style="padding-top: 6px;">From :<b> '.$country.'</b></td></tr>
						<tr><td style="padding-top: 6px;">is waiting for an instant connect</td></tr>
						<tr><td style="padding-top: 6px;"><b>Team MU Development</b></td></tr>
						
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
	</html>';
		$score_subject="Instant Connect Alert";
		$score_to="kapoorn@gmail.com";
		$score_headers  = "From: MeetUniv.com <connect@meetuniv.com>\r\n"; 
		$score_headers .= "Bcc: debal@webinfomart.com, neha@webinfomart.com,ruby@webinfomart.com,suneha@webinfomart.com\r\n"; 
		$score_headers .= "Content-type: text/html\r\n"; 
		mail($score_to, $score_subject, $score_message, $score_headers); 
}
	?>