<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class qna extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->ci =& get_instance();
		$this->load->library('layout');
		$this->load->library('tank_auth');
		$this->load->library("pagination");
		$this->ci->load->library('session');
		$this->load->model('qansr');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}
	
	public function index()
	{
			$this->load->model('qansr');
			$data['userId'] =$this->session->userdata('user_id');
			if(isset($_POST['askqun']))
				{	
					$pwd='letsrock';
					$phone_number=$_POST['mobile'];
					$random_code=rand(10000,99999);
					$msg="Welcome to MeetUniv.Com - Best Place to Meet Universities ! Please enter event code ".$random_code." to continue with the online registration process.";
					$msg = urlencode($msg);
					$content=file_get_contents("https://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=".$pwd."&send=meetus&dest=91".$phone_number."&msg=".$msg);
					$this->session->set_userdata('mobileNumber',$phone_number);
					$data['mobile'] = $phone_number;
					$data['verifiedCode'] = $random_code;
					$data['ques'] = $_POST['askqun'];
					$data['name'] = $_POST['fullName'];
					$data['email'] = $_POST['emailId'];
					$data['catId'] = $_POST['cat_id'];
					$this->qansr->putRecentQuestion($data);
					echo'success';
					exit;
				}
			 $rescentQun['topQun']=$this->qansr->findRecentQuestion();
			 $rescentQun['qus_cat']=$this->qansr->getQuestionId();
			 //$this->load->view('https://meetuniv.com/devloper/layout/header.php');
			$this->layout->view("qna/index",$rescentQun);
	}
	public function verifyMobileCode(){
		$verifycode=$_POST['verifyCode'];
		$mobile=$this->session->userdata('mobileNumber');
		$result=$this->qansr->checkMobileCodeExist($verifycode,$mobile);
		if($result[0]['id']>0){
			$message=$result[0]['ques'].'<br> https://meetuniv.com/qna/qna/answer/'.$result[0]['id'];
			$this->email->set_newline("\r\n");
			$config['protocol'] = $this->config->item('mail_protocol','email');
			$config['smtp_host'] = $this->config->item('smtp_server','email');
			$config['smtp_user'] = $this->config->item('smtp_user_name','email');
			$config['smtp_pass'] = $this->config->item('smtp_pass','email');
			$this->email->initialize($config);
			$this->email->from('connect@meetuniv.com', $this->config->item('website_name', 'tank_auth'));
			$this->email->reply_to('connect@meetuniv.com', $this->config->item('website_name', 'tank_auth'));
			$this->email->to($result[0]['email']);
			$this->email->bcc('nitin@meetuniv.com,debal@meetuniv.com,debal@webinfomart.com,kapoorn@gmail.com');
			$this->email->subject('Question');
			$this->email->message($message);
			if($this->email->send()){
				$userId=0;
				$userdata=array('email'=>$result[0]['email'],
				'mobile'=>$result[0]['mobile'],
				'fullname'=>$result[0]['name'],
				'password'=>md5('123456'),
				'activated'=>'1'
				);
				$Id=$this->qansr->checkUserExistByEmail($result[0]['email']);
				if($Id>0)
				{
					$userId=$Id;
				}
				else
				{
					$Id=$this->qansr->insertUserByEmail($userdata);
					$userId=$Id;
					$message1='your emailId is:'.$result[0]['email'].'<br>password:123456';
					$this->email->initialize($config);
					$this->email->from('connect@meetuniv.com', $this->config->item('website_name', 'tank_auth'));
					$this->email->reply_to('connect@meetuniv.com', $this->config->item('website_name', 'tank_auth'));
					$this->email->to($result[0]['email']);
					$this->email->subject('User Registraion');
					$this->email->message($message1);
					$this->email->send();
				}
				$result1=$this->qansr->checkMobileCodeUpdate($verifycode,$mobile,$userId);
				echo 'sent';
			}
		}
		else
		{
			echo 'fail';
		}
	}
		
	public function getMsg()
		{
			$data['userId'] =$this->session->userdata('user_id');
			$data['ques'] = $_POST['askqun'];
			$data['catId'] = $_POST['cat_id']; 
			$this->session->set_userdata(array(
                            'askQues'       => $data['ques'],
                            'quesCatId'      => $data['catId']
                     ));
					 
			if(empty($data['userId']))
				{
					echo "NotLogged";exit;
				}
			else
				{
					echo "Logged";exit;
				}
		}
	
	public function security()
		{
			
			$data['ques'] = $this->session->userdata('askQues');
			$data['catId'] = $this->session->userdata('quesCatId');
			$code1 = $_POST['security_code'];
			$code=$this->session->userdata('random_code');
			echo $code;exit;
			if($code1==$code)
			{
			$usermobile = $this->session->userdata('mobile');
			$UserId=$this->qansr->getUserId($usermobile);
			foreach($UserId as $user_id)
			{
			// $user_id['id'];
			 $data['userId'] = $user_id['id'];
			}
			
			$this->qansr->putRecentQuestion($data);
			
			 $rescentQun['topQun']=$this->qansr->getRecentQuestion();
			 $rescentQun['qus_cat']=$this->qansr->getQuestionId();
			// print_r($rescentQun);exit;
			 $this->layout->view("qna/index",$rescentQun);
			$this->session->sess_destroy();
			}
			else
			{
			echo "Security code is not Matched<br>";
			}
			
		}
		
		
	
	public function answer($qusId)
		{
			$this->load->model('qansr');
			$rescentQun['qus_ans']=$this->qansr->getSelectAns($qusId);
			$rescentQun['topQun']=$this->qansr->getQuestionId();
			$rescentQun['qus_detail']=$this->qansr->getQusDetail($qusId);
			$this->layout->view("qna/answers",$rescentQun);
		
		}
		
	public function PostAnswerInSession()
		{
			$data['userId'] =$this->session->userdata('user_id');
			$data['ans'] = $_POST['putqus'];
			$data['qusId'] = $_POST['qus_id']; 
			$this->session->set_userdata(array(
                            'putans'       => $data['ans'],
                            'putqusId'      => $data['qusId']
                     ));
					 
			if(empty($data['userId']))
				{
					echo "NotLogged";
					exit;
				}
			else
				{
					echo "Logged";exit;
				}
		}
		
	public function securityans()
		{
			
			$data['ans'] = $this->session->userdata('putans');
			$data['quesId'] = $this->session->userdata('putqusId');
			$codeans1 = $_POST['security_code'];
			$codeans=$this->session->userdata('random_code1');
			//echo $code;exit;
			if($codeans1==$codeans)
			{
			$usermobile = $this->session->userdata('mobile');
			$UserId=$this->qansr->getUserId($usermobile);
			foreach($UserId as $user_id)
			{
			// $user_id['id'];
			 $data['userId'] = $user_id['id'];
			}
			
			
			$this->qansr->putRecentAnswer($data);
			$rescentQun['qus_ans']=$this->qansr->getSelectAns($qusId);
			$rescentQun['topQun']=$this->qansr->getQuestionId();
			$rescentQun['qus_detail']=$this->qansr->getQusDetail($qusId);
			$this->layout->view("qna/answers",$rescentQun);
			$this->session->sess_destroy();
			}
			else
			{
			echo "Security code is not Matched<br>";
			}
			
		}	
		
	public function PostAnswer()
	{
			$this->load->model('qansr');
			$data['userId'] =$this->session->userdata('user_id');
			if(isset($_POST['putqus']))
				{
					$data['ans'] = $_POST['putqus'];
					$data['quesId'] = $_POST['qus_id'];				
					$this->qansr->putRecentAnswer($data);
				}
	}
	public function csvQuestionUpload()
	{
		$questionArray=array();
		$count=0;
		ini_set('auto_detect_line_endings',TRUE);
		$handle = fopen($_FILES['file']['tmp_name'], "r");
		//$fp = file($_FILES['file']['tmp_name'], FILE_SKIP_EMPTY_LINES);
		while(($data = fgetcsv($handle, 100000, ",")) !== FALSE) 					
		{ 
			$questionArray[$count]['ques']=$data[0];
			$questionArray[$count]['catId']=$data[1];
			$questionArray[$count]['name']=$data[2];
			$questionArray[$count]['mobile']=$data[3];
			$questionArray[$count]['email']=$data[4];
			$questionArray[$count]['VerifiedCode']=$data[5];
			$questionArray[$count]['PhoneVerified']=$data[6];
			$questionArray[$count]['timestamp']=date('Y-m-d H:i:s',strtotime($data[7]));
			$count++;
		}
		foreach($questionArray as $value){
			$this->qansr->uploadQuetionByCsv($value);
		}
		redirect('/qna/qna');
		
	}
	public function csvUploadQuestion()
	{	
		$this->layout->view("qna/csvQuestionUpload");
	}
	/*****	
	public function QusAndAnsRegister()
		{
			//print_r($_POST);
		if ($this->tank_auth->is_logged_in()) {									// logged in
			redirect('home');

		} 
		else
		{
			$use_username = $this->config->item('use_username', 'tank_auth');
			if ($use_username) {
					$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']|alpha_dash');
				}
				$this->form_validation->set_rules('fullname', 'Fullname', 'trim|required|xss_clean');
				$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
				$this->form_validation->set_rules('mobile', 'Mobile', 'trim|integer|required|xss_clean');
				$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
				$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|matches[password]');
	
				
				$data['errors'] = array();
	
				$email_activation = $this->config->item('email_activation', 'tank_auth');
				if ($this->form_validation->run()) {								// validation ok
					if (!is_null($data = $this->tank_auth->create_user(
							$use_username ? $this->form_validation->set_value('username') : '',
							$this->form_validation->set_value('fullname'),
							$this->form_validation->set_value('email'),
							$this->form_validation->set_value('mobile'),
							$this->form_validation->set_value('password'),
							$email_activation))) {									// success
	
						$data['site_name'] = $this->config->item('website_name', 'tank_auth');
						//print_r($data);exit;
						
	
						if ($email_activation) {
						// send "activate" email
							$data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
							//echo "<pre>";print_r($data);exit;
							$this->_send_email('activate', $data['email'], $data);
							
							
							unset($data['password']); // Clear password (just for any case)
	
							$this->_show_message($this->lang->line('auth_message_registration_completed_1'),'register');
	
						} else {
							if ($this->config->item('email_account_details', 'tank_auth')) {	// send "welcome" email
	
								$this->_send_email('welcome', $data['email'], $data);
							}
							unset($data['password']); // Clear password (just for any case)
	
							$this->_show_message($this->lang->line('auth_message_registration_completed_2').' '.anchor('/auth/login/', 'Login'));
						}
					} else {
						$errors = $this->tank_auth->get_error_message();
						
						foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
					}
				}
				
				//redirect('https://meetuniv.com/qna/qna/answer/1');

			//$rescentQun['topQun']=$this->qansr->getRecentQuestion();
			 //$rescentQun['qus_cat']=$this->qansr->getQuestionId();
			
			 //$this->layout->view("qna/index",$rescentQun);
			 
			// $data['use_username'] = $use_username;
			// $data['title'] = "Join MeetUniv.com to know University events in india, Spot Admission & scholarships, & more";
			// $data['description'] = "Meet top Abroad Universities to know more about Abroad University events & Abroad Education Fairs in india,  Shortlist the ones which offer Spot Admission & scholarships.";
			// $data['keywords'] = "Study Overseas,Meet UK Universities,2014 UK University Fair,Spot Admission & scholarships, IELTS,,GMAT,Abroad University events in india,Top study abroad scholarships,Meet top UK Universities,indian scholarships for studying abroad,Video Lectures, Articles,Education Fairs in india";
			// $this->layout->view('static/pshycometric',$data);
		}
		
		}******/
}	