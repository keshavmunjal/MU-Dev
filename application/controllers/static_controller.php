<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Static_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->ci =& get_instance();

		$this->ci->load->config('tank_auth', TRUE);

		$this->ci->load->library('session');
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');
		$this->load->library('tank_auth');
		$this->load->library('layout');

		$this->lang->load('tank_auth');
		$this->load->model('tank_auth/users');
		$this->load->model('connectmodel');
		$this->load->model('collegemodel');
	}
	function privacy_policy()
	{
		$data['title'] = "MeetUniv.Com : Privacy Policy";
		$data['description'] = "MeetUniv.com | Please read our privacy policy carefully";
		$data['keywords'] = "Meet UK Universities,Study in UK,Study in UK universities,Study MBA in UK,Colleges in UK,International students,Universities &  colleges in UK,Higher education in UK,Best universities in UK ,List of Top 10 colleges & universities,IELTS-GMAT-TOEFL,Universities events,Engineering colleges in UK ,Postgraduate study,Scholarships,Executive MBA in UK,Education Fairs,Spot Admission,University Visits,Courses,Test Preparation";
		$this->layout->view('static/privacy_policy',$data);
	}
	function disclaimer()
	{
		$data['title'] = "MeetUniv.Com : Disclaimer";
		$data['description'] = "MeetUniv.com | Please read our disclaimer carefully";
		$data['keywords'] = "Meet UK Universities,Study in UK,Study in UK universities,Study MBA in UK,Colleges in UK,International students,Universities &  colleges in UK,Higher education in UK,Best universities in UK ,List of Top 10 colleges & universities,IELTS-GMAT-TOEFL,Universities events,Engineering colleges in UK ,Postgraduate study,Scholarships,Executive MBA in UK,Education Fairs,Spot Admission,University Visits,Courses,Test Preparation";
		$this->layout->view('static/disclaimer',$data);
	}
	function about_us()
	{
		$data['title'] = "Welcome to MeetUniv | Education Abroad | Meet Universities";
		$data['canonical'] = "http://meetuniv.com/about-us";
		$data['description'] = "Apply for study abroad programs with MeetUniv. International students can search courses, colleges to meet universities of UK, US, Canada, Australia and Singapore.";
		$data['keywords'] = "";
		$this->layout->view('static/about_us',$data);
	}
	function contact_us()
	{
		$data = array();
		$data['title'] = "MeetUniv.Com : Contact Us";
		$data['description'] = "MeetUniv.com | Contact Us at  E-11, Greater Kailash Part 1, New Delhi";
		$data['keywords'] = "Meet UK Universities,Study in UK,Study in UK universities,Study MBA in UK,Colleges in UK,International students,Universities &  colleges in UK,Higher education in UK,Best universities in UK ,List of Top 10 colleges & universities,IELTS-GMAT-TOEFL,Universities events,Engineering colleges in UK ,Postgraduate study,Scholarships,Executive MBA in UK,Education Fairs,Spot Admission,University Visits,Courses,Test Preparation";
		
		if($this->input->post())
		{
			
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
			$this->form_validation->set_rules('type', 'Type', 'trim|required');
			$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|xss_clean');
			if($this->form_validation->run())
			{
				$data = array(
						'name'=>$this->input->post('name'),
						'email'=>$this->input->post('email'),
						'queryType'=>$this->input->post('type'),
						'message'=>$this->input->post('message'),
						'mobile'=>$this->input->post('mobile')
				);
				$this->db->insert('contact',$data);
				$message = "Name: ".$data['name']."<br>Email: ".$data['email']."<br>Query Type: ".$data['queryType']."<br>Message: ".$data['message'];
				//$this->load->library('email');
				$this->email->set_newline("\r\n");
				$config['protocol'] = $this->config->item('mail_protocol','email');
				$config['smtp_host'] = $this->config->item('smtp_server','email');
				$config['smtp_user'] = $this->config->item('smtp_user_name','email');
				$config['smtp_pass'] = $this->config->item('smtp_pass','email');
				$this->email->initialize($config);
				$this->email->from('connect@meetuniv.com', $this->config->item('website_name', 'tank_auth'));
				$this->email->reply_to('connect@meetuniv.com', $this->config->item('website_name', 'tank_auth'));
				$this->email->to('raghvendra@webinfomart.com');
				$this->email->bcc('nitin@meetuniv.com,debal@meetuniv.com,debal@webinfomart.com,kapoorn@gmail.com');
				$this->email->subject('Contact Us');
				$this->email->message($message);
				$this->email->send();
				if($this->input->post('type') != 'jobs'){
					$message = "We can surely assist you in getting directly connected with the universities worldwide, which offer courses of your choice.<br>
					Could you please send us the following details for us to get a counselling call scheduled.<br><br>

					Current Education:<br><br>

					Work Exp:<br><br>

					Looking at to do:<br><br>

					City:<br><br>

					Phone Number:<br><br>
					
					Regards,<br>
					Team MU";
					//$this->load->library('email');
					$this->email->set_newline("\r\n");
					$config['protocol'] = $this->config->item('mail_protocol','email');
					$config['smtp_host'] = $this->config->item('smtp_server','email');
					$config['smtp_user'] = $this->config->item('smtp_user_name','email');
					$config['smtp_pass'] = $this->config->item('smtp_pass','email');
					$this->email->initialize($config);
					$this->email->from('connect@meetuniv.com', $this->config->item('website_name', 'tank_auth'));
					$this->email->reply_to('connect@meetuniv.com', $this->config->item('website_name', 'tank_auth'));
					$this->email->to($this->input->post('email'));
					$this->email->bcc('nitin@meetuniv.com,debal@meetuniv.com,debal@webinfomart.com,kapoorn@gmail.com');
					$this->email->subject('Contact Us');
					$this->email->message($message);
					$this->email->send();
				}
				$data['success']="Successfully Saved!";
			}
		}
		$this->layout->view('contact_us',$data);
	}
	function terms()
	{
		$data['title'] = "MeetUniv.Com : Terms";
		$data['description'] = "MeetUniv.com | Terms and Condition";
		$data['keywords'] = "Meet UK Universities,Study in UK,Study in UK universities,Study MBA in UK,Colleges in UK,International students,Universities &  colleges in UK,Higher education in UK,Best universities in UK ,List of Top 10 colleges & universities,IELTS-GMAT-TOEFL,Universities events,Engineering colleges in UK ,Postgraduate study,Scholarships,Executive MBA in UK,Education Fairs,Spot Admission,University Visits,Courses,Test Preparation";
		$this->layout->view('static/terms',$data);
	}
	
	function pshycometric()
	{
		$this->session->set_userdata(array('last_url' => 'gifted-intro'));
		$data['active'] = 'gifted';
		$data['title'] = 'Online Personality Test - Free Counseling, Apitude and Career Guidance';
		$data['description'] = 'Hold the hands of experts for career guidance and counseling. Measure your performance through psychometric test, free online aptitude test and personality test.';
		$data['canonical'] = "http://meetuniv.com/gifted-intro";
		$data['keywords'] = '';
		
		if($this->tank_auth->get_user_id()){
			$data['user_id'] = $this->tank_auth->get_user_id();
		}
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
		$this->layout->view('static/pshycometric',$data);
	}
	
	function ielts_preparation()
	{
		$this->session->set_userdata(array('last_url' => 'ielts-preparation'));
		$data['active'] = 'ielts-preparation';
		$data['title'] = 'IELTS Preparation: Free Videos to improve your score in TOEFL';
		$data['description'] = 'Online IELTS preparation exams course guides you successfully through the listening, reading, writing, speaking English and practice test material coaching.';
		$data['canonical'] = "https://meetuniv.com/ielts-preparation";
		$data['keywords'] = '';
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
		$this->layout->view('static/ielts_preparation',$data);
	}
	
	function ielts_form_data()
	{
		//echo "<pre>";print_r($_POST);exit;
		$data['active'] = '';
		$data['description'] = '';
		$data['keywords'] = '';
		$name = $_POST['first_name'];
		$email = $_POST['email'];
		$id =	$_POST['productId'];
		$query = $this->db->query("SELECT * FROM ielts_preparation_users WHERE email='".$email."'");
		$val = $query->result_array();
		if(empty($val)){
			$query = $this->db->query("INSERT into ielts_preparation_users (first_name, email,created) values('".$name."','".$email."','".date("Y-m-d H:i:s")."')");
			/*******sending data to staging leadmentor*******/
			$random_code=rand(10000,99999); 
			$url="http://myieltsgurus.com/dap/signup_submit.php";
			$data = array('first_name'=>$name,'email'=>$email, 'productId'=>$id);
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
			echo "send successfully";exit;
			/*******end of curl code*******/
		}else{
			echo "Email already exist!";exit;
		}
	}
	
	function sendSmsCode()
	{
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$random_code = $this->get_random_number();
		$query = $this->db->query("SELECT * FROM ielts_preparation_users WHERE email='".$email."'");
		$value = $query->result_array();
		$getEmail = $value[0]['email'];
		//echo "UPDATE ielts_preparation_users SET rand_code = '".$random_code."' WHERE email='".$getEmail."'";exit;
		if(!empty($getEmail)){
			$query = $this->db->query("UPDATE ielts_preparation_users SET rand_code = '".$random_code."',mobile = '".$mobile."' WHERE email='".$getEmail."'");
		}
		$msg="Welcome to MyIeltsGuru.Com - Your Personal IELTS Coach ! Please enter the registration code '".$random_code."' to get the discount voucher.";
		$msg = urlencode($msg);
		if($mobile){
			$content=file_get_contents("http://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=letsrock&send=meetus&dest=91".$mobile."&msg=".$msg);
			echo "sms send successfully";exit;
		}
		
	}
	
	function smsVerification()
	{
		$verificationCode = $_POST['codeverification'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		//echo $mobile;exit;
		
		$query = $this->db->query("SELECT * FROM ielts_preparation_users WHERE email='".$email."'");
		$value = $query->result_array();
		$getEmail = $value[0]['email'];
		//echo "UPDATE ielts_preparation_users SET status = 1 WHERE email='".$getEmail."'";exit;
		if($value[0]['rand_code']==$verificationCode)
		{
			$query = $this->db->query("UPDATE ielts_preparation_users SET status = '1' WHERE email='".$getEmail."'");
			
			$msg='Thanks ! Get ready for the power packed 48 hrs IELTS Series by Niels Kokholm Nielsen Voucher Details :  mu-50-ielts</br>
			<a href="http://www.myieltsgurus.com/plans-pricing/">Upgrade here</a>';
			
			$this->load->library('email');
			$this->email->from('connect@meetuniv.com', 'MeetUniv');
			$this->email->to($email); 
			$this->email->subject('Your Voucher Codes - MyIELTSGURUS.Com');
			$this->email->message($msg);	
			$this->email->send();
			
			
			
			$sms="Welcome to MyIeltsGuru.Com - DIY IELTS series by Niels Nielsen, author of 6 ESL books & an official Cambridge examiner.Upgrade Voucher code : mu-50-ielts";
			$sms = urlencode($sms);
			if($mobile){
			$content=file_get_contents("http://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=letsrock&send=meetus&dest=91".$mobile."&msg=".$sms);
			
			}
			
			
			echo "updated successfully";exit;
		}
		else{
			echo "Not verified!";
		}
	}
	
	function get_random_number($chars_min=4, $chars_max=4, $use_upper_case=false, $include_numbers=false, $include_special_chars=false)
    {
        $length = rand($chars_min, $chars_max);
        $selection = 'aeuoyibcdfghjklmnpqrstvwxz';
        if($include_numbers) {
            $selection .= "1234567890";
        }
        if($include_special_chars) {
            $selection .= "!@\"#$%&[]{}?|";
        }

        $password = "";
        for($i=0; $i<$length; $i++) {
            $current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
            $password .=  $current_letter;
        }                

        return $password;
    }
}