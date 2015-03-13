<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Curl
{
	function __construct()
	{
		$this->ci = & get_instance();
		$this->ci->load->database();
	}
	
	function user_registration($data){
		//echo "<pre>";print_r($data);exit;
		/*******sending data to staging leadmentor*******/
			$random_code=rand(10000,99999); 
			$url="http://leadmentor.in/lead/enter";
			$data = array('name'=>$data['fullname'],'email'=>$data['email'],'phone'=>$data['mobile'],'status'=>'','city'=>'','source'=>'MU SIGNUP','lookupCity'=>'','obdId'=>'','obdTime'=>'','campaign'=>'','randomCode'=>$random_code,'leads_sub'=>'');
			//print_r($data);exit;
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
	}
	
}

?>