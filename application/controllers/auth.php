<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
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
		$this->load->library('curl');
		$this->load->library('layout');

		$this->lang->load('tank_auth');
		$this->load->model('tank_auth/users');
		$this->load->model('connectmodel');
		$this->load->model('collegemodel');
	}

	function index()
	{
		$data['active']='';
		$data['title'] = "Study Abroad Programs, Search Courses, College Admission, Meet Universities - MeetUniv";
		$data['description'] = "Follow your Dreams of overseas education and get admission in the top MBA, medical, engineering universities of UK, US, Canada and connect with reputed Ivy League colleges of the world.";
		$data['keywords'] = "";
		
		$data['connect']=$this->connectmodel->getAllConnects(4,0);
		$data['featuredCollges'] = $this->collegemodel->getFeaturedColleges();
		$this->db_forum = $this->ci->load->database('alternate', True);
		$data['latestArticles'] = $this->collegemodel->getLatestArticle();
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();

		
		//echo "<pre>";print_r($this->db_campaign->select("*")->from('leads')->limit('2')->get()->result());
		//echo "<pre>";print_r($data);exit;
		$this->db = $this->ci->load->database('default', True);
		$this->layout->view('home',$data);
	}
	function register()
	{
			
				$phone_number=$this->input->post('mobile');
				$user_email=$this->input->post('email');
				$pwd='letsrock';
    			$random_code=rand(10000,99999); 
				//$random_code=33333;
				$_SESSION['random_code']=$random_code;
				$this->session->set_userdata('random_code',$random_code);
				$this->session->set_userdata('mobile',$user_email);
  				$msg="Welcome to MeetUniv.Com - Best Place to Meet Universities ! Please enter event code ".$random_code." to continue with the online registration process.";
  				$msg = urlencode($msg);
  
 	 			$content=file_get_contents("https://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=".$pwd."&send=meetus&dest=91".$phone_number."&msg=".$msg);
				
				
		if ($this->tank_auth->is_logged_in()) {									// logged in
			redirect('home');

		} 
		else
		{
			$use_username = $this->config->item('use_username', 'tank_auth');
			//if($_POST){print_r($_POST);exit;}
			if ($use_username) {
					$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']|alpha_dash');
				}
				$this->form_validation->set_rules('fullname', 'Fullname', 'trim|required|xss_clean');
				$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
				$this->form_validation->set_rules('mobile', 'Mobile', 'trim|integer|required|xss_clean');
				$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
				$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|matches[password]');
	
				/* $captcha_registration	= $this->config->item('captcha_registration', 'tank_auth');
				$use_recaptcha			= $this->config->item('use_recaptcha', 'tank_auth');
				if ($captcha_registration) {
					if ($use_recaptcha) {
						$this->form_validation->set_rules('recaptcha_response_field', 'Confirmation Code', 'trim|xss_clean|required|callback__check_recaptcha');
					} else {
						$this->form_validation->set_rules('captcha', 'Confirmation Code', 'trim|xss_clean|required|callback__check_captcha');
					}
				} */
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
	
						
	
						if ($email_activation) {									// send "activate" email
							$data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;
	
							$this->_send_email('activate', $data['email'], $data);
							/*******sending data to staging leadmentor*******/
							$this->curl->user_registration($data);
							
							/*******end of curl code*******/
	
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
				/* if ($captcha_registration) {
					if ($use_recaptcha) {
						$data['recaptcha_html'] = $this->_create_recaptcha();
					} else {
						$data['captcha_html'] = $this->_create_captcha();
					}
				} */
			
			$data['use_username'] = $use_username;
			$data['title'] = "Join MeetUniv.com to know University events in india, Spot Admission & scholarships, & more";
			$data['description'] = "Meet top Abroad Universities to know more about Abroad University events & Abroad Education Fairs in india,  Shortlist the ones which offer Spot Admission & scholarships.";
			$data['keywords'] = "Study Overseas,Meet UK Universities,2014 UK University Fair,Spot Admission & scholarships, IELTS,,GMAT,Abroad University events in india,Top study abroad scholarships,Meet top UK Universities,indian scholarships for studying abroad,Video Lectures, Articles,Education Fairs in india";
			//echo "success";
			$this->layout->view('auth/registerNew',$data);
		}
	}
	
	
	
	
	function pshycometricRegistration()
	{
				$phone_number=$this->input->post('mobile');
				$user_email=$this->input->post('email');
				$pwd='letsrock';
    			$random_code=rand(10000,99999);
				//$random_code=33333;
				$_SESSION['random_code1']=$random_code;
				$this->session->set_userdata('random_code1',$random_code);
				$this->session->set_userdata('mobile',$user_email);
  				$msg="Welcome to MeetUniv.Com - Best Place to Meet Universities ! Please enter event code ".$random_code." to continue with the online registration process.";
  				$msg = urlencode($msg);
  
 	 			$content=file_get_contents("https://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=".$pwd."&send=meetus&dest=91".$phone_number."&msg=".$msg);
				
		if ($this->tank_auth->is_logged_in()) {									// logged in
			redirect('home');

		} 
		else
		{
			$use_username = $this->config->item('use_username', 'tank_auth');
			//if($_POST){print_r($_POST);exit;}
			if ($use_username) {
					$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']|alpha_dash');
				}
				$this->form_validation->set_rules('fullname', 'Fullname', 'trim|required|xss_clean');
				$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
				$this->form_validation->set_rules('mobile', 'Mobile', 'trim|integer|required|xss_clean');
				$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
				$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|matches[password]');
	
				/* $captcha_registration	= $this->config->item('captcha_registration', 'tank_auth');
				$use_recaptcha			= $this->config->item('use_recaptcha', 'tank_auth');
				if ($captcha_registration) {
					if ($use_recaptcha) {
						$this->form_validation->set_rules('recaptcha_response_field', 'Confirmation Code', 'trim|xss_clean|required|callback__check_recaptcha');
					} else {
						$this->form_validation->set_rules('captcha', 'Confirmation Code', 'trim|xss_clean|required|callback__check_captcha');
					}
				} */
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
							
							/*******sending data to staging leadmentor*******/
							/* $random_code=rand(10000,99999); 
							$url="https://leadmentor.in/lead/enter";
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
							 curl_close($ch);     // Closing cURL  */
							
							/*******end of curl code*******/
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
				/* if ($captcha_registration) {
					if ($use_recaptcha) {
						$data['recaptcha_html'] = $this->_create_recaptcha();
					} else {
						$data['captcha_html'] = $this->_create_captcha();
					}
				} */
			
			$data['use_username'] = $use_username;
			$data['title'] = "Join MeetUniv.com to know University events in india, Spot Admission & scholarships, & more";
			$data['description'] = "Meet top Abroad Universities to know more about Abroad University events & Abroad Education Fairs in india,  Shortlist the ones which offer Spot Admission & scholarships.";
			$data['keywords'] = "Study Overseas,Meet UK Universities,2014 UK University Fair,Spot Admission & scholarships, IELTS,,GMAT,Abroad University events in india,Top study abroad scholarships,Meet top UK Universities,indian scholarships for studying abroad,Video Lectures, Articles,Education Fairs in india";
			$this->layout->view('static/pshycometric',$data);
		}
	}
	
	function home()
	{
		if (!$this->tank_auth->is_logged_in()) {									
			redirect('/login');
		}
		$data['title'] = "Meet top Abroad universities for spot admission & scholarships : MeetUniv";
		$data['description'] = "Meet top Abroad universities at our university events in India.Search Meetuniv.com for Abroad Colleges,University,course details,admissions,scholarships,visa at Upcoming 2014 Abroad university Events & education fairs in india.";
		$data['keywords'] = "Meet UK Universities,Abroad University events in india,Spot Admission & scholarships,Meet top UK Universities,indian scholarships for studying abroad, Abroad Education Fairs in india,2014 UK University Fair,List of Scholarships for International Students,Top study abroad scholarships";
		
		$data["username"]=$this->tank_auth->get_user_id();
		$data["id"]=$this->tank_auth->get_user_id();
		$data['connect']=$this->connectmodel->getAllConnects(4,0);
		$data['featuredCollges'] = $this->collegemodel->getFeaturedColleges();
		$this->db_forum = $this->ci->load->database('alternate', True);
		$data['latestArticles'] = $this->collegemodel->getLatestArticle();
		$this->layout->view('home',$data);
	}
	/**
	 * Login user on the site
	 *
	 * @return void
	 */
	function login()
	{
		$data['title'] = "Login to meet top universities of the world, Know about university events in India";
		$data['description'] = "Want to Meet top UK Universities offering Spot Admission & scholarships with courses of your choice. Get connected for 2014 UK University Fair & Education Fairs in india";
		$data['keywords'] = "Study Abroad, Meet UK Universities,IELTS,GMAT,University events in india,Spot Admission & scholarships,Meet top UK Universities,indian scholarships for studying abroad,Video Lectures, Articles,Education Fairs in india,2014 UK University Fair,Top study abroad scholarships";
		if ($this->tank_auth->is_logged_in()) {									// logged in
			redirect('home');

		} 
		else
		{
			if ($this->tank_auth->is_logged_in(FALSE)) 
			{
			$data['notActivated']=TRUE;
			}
			$data['login_by_username'] = ($this->config->item('login_by_username', 'tank_auth') AND
					$this->config->item('use_username', 'tank_auth'));
			$data['login_by_email'] = $this->config->item('login_by_email', 'tank_auth');

			$this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('remember', 'Remember me', 'integer');

			// Get login for counting attempts to login
			if ($this->config->item('login_count_attempts', 'tank_auth') AND
					($login = $this->input->post('login'))) {
				$login = $this->security->xss_clean($login);
			} else {
				$login = '';
			}

			$data['use_recaptcha'] = $this->config->item('use_recaptcha', 'tank_auth');
			if ($this->tank_auth->is_max_login_attempts_exceeded($login)) {
				if ($data['use_recaptcha'])
					$this->form_validation->set_rules('recaptcha_response_field', 'Confirmation Code', 'trim|xss_clean|required|callback__check_recaptcha');
				else
					$this->form_validation->set_rules('captcha', 'Confirmation Code', 'trim|xss_clean|required|callback__check_captcha');
			}
			$data['errors'] = array();

			if ($this->form_validation->run()) {								// validation ok
				if ($this->tank_auth->login(
						$this->form_validation->set_value('login'),
						$this->form_validation->set_value('password'),
						$this->form_validation->set_value('remember'),
						$data['login_by_username'],
						$data['login_by_email'])) {								// success
					
					/*checking profile*/
					$data["id"]=$this->tank_auth->get_user_id();
					$profile_detail=$this->users->check_profile_detail($data['id']);
				
					if(count($profile_detail)==0)
					{
					redirect('profile');
					}
					else
					{						if($this->session->userdata('last_url'))						{							$page = $this->session->userdata('last_url');							$this->session->unset_userdata('last_url');							redirect($page);						}						redirect('home');					}

				} else {
					$errors = $this->tank_auth->get_error_message();
					if (isset($errors['banned'])) {								// banned user
						$this->_show_message($this->lang->line('auth_message_banned').' '.$errors['banned']);

					} elseif (isset($errors['not_activated'])) {				// not activated user
						$data['notActivated']=TRUE;

					} else {													// fail
						foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
					}
				}
			}
			$data['show_captcha'] = FALSE;
			if ($this->tank_auth->is_max_login_attempts_exceeded($login)) {
				$data['show_captcha'] = TRUE;
				if ($data['use_recaptcha']) {
					$data['recaptcha_html'] = $this->_create_recaptcha();
				} else {
					$data['captcha_html'] = $this->_create_captcha();
				}
			}
			$this->layout->view('auth/login', $data);
		}
	}
	function loginNew()
	{
		if ($this->tank_auth->is_logged_in()) {									// logged in
			redirect('home');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/auth/send_again/');

		} else {
			$data['login_by_username'] = ($this->config->item('login_by_username', 'tank_auth') AND
					$this->config->item('use_username', 'tank_auth'));
			$data['login_by_email'] = $this->config->item('login_by_email', 'tank_auth');

			$this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('remember', 'Remember me', 'integer');

			// Get login for counting attempts to login
			if ($this->config->item('login_count_attempts', 'tank_auth') AND
					($login = $this->input->post('login'))) {
				$login = $this->security->xss_clean($login);
			} else {
				$login = '';
			}

			$data['use_recaptcha'] = $this->config->item('use_recaptcha', 'tank_auth');
			if ($this->tank_auth->is_max_login_attempts_exceeded($login)) {
				if ($data['use_recaptcha'])
					$this->form_validation->set_rules('recaptcha_response_field', 'Confirmation Code', 'trim|xss_clean|required|callback__check_recaptcha');
				else
					$this->form_validation->set_rules('captcha', 'Confirmation Code', 'trim|xss_clean|required|callback__check_captcha');
			}
			$data['errors'] = array();

			if ($this->form_validation->run()) {								// validation ok
				if ($this->tank_auth->login(
						$this->form_validation->set_value('login'),
						$this->form_validation->set_value('password'),
						$this->form_validation->set_value('remember'),
						$data['login_by_username'],
						$data['login_by_email'])) {								// success
					
					/*checking profile*/
					$data["id"]=$this->tank_auth->get_user_id();
					$profile_detail=$this->users->check_profile_detail($data['id']);
				
					if(count($profile_detail)==0)
					{
					redirect('profile');
					}
					else
					{redirect('home');}

				} else {
					$errors = $this->tank_auth->get_error_message();
					if (isset($errors['banned'])) {								// banned user
						$this->_show_message($this->lang->line('auth_message_banned').' '.$errors['banned']);

					} elseif (isset($errors['not_activated'])) {				// not activated user
						redirect('/auth/send_again/');

					} else {													// fail
						foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
					}
				}
			}
			$data['show_captcha'] = FALSE;
			if ($this->tank_auth->is_max_login_attempts_exceeded($login)) {
				$data['show_captcha'] = TRUE;
				if ($data['use_recaptcha']) {
					$data['recaptcha_html'] = $this->_create_recaptcha();
				} else {
					$data['captcha_html'] = $this->_create_captcha();
				}
			}
			$this->load->view('auth/login_form', $data);
		}
	}

	/**
	 * Logout user
	 *
	 * @return void
	 */
	function logout()
	{
		$this->tank_auth->logout();
		redirect('login');
		$this->_show_message($this->lang->line('auth_message_logged_out'));
	}

	/**
	 * Register user on the site
	 *
	 * @return void
	 */
	function registerNew()
	{
		if ($this->tank_auth->is_logged_in()) {									// logged in
			redirect('/auth/home');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/auth/send_again/');

		} elseif (!$this->config->item('allow_registration', 'tank_auth')) {	// registration is off
			$this->_show_message($this->lang->line('auth_message_registration_disabled'));

		} else {
			$use_username = $this->config->item('use_username', 'tank_auth');
			if ($use_username) {
				$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']|alpha_dash');
			}
			$this->form_validation->set_rules('fullname', 'Fullname', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|integer|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|matches[password]');
			
			/* $captcha_registration	= $this->config->item('captcha_registration', 'tank_auth');
			$use_recaptcha			= $this->config->item('use_recaptcha', 'tank_auth');
			if ($captcha_registration) {
				if ($use_recaptcha) {
					$this->form_validation->set_rules('recaptcha_response_field', 'Confirmation Code', 'trim|xss_clean|required|callback__check_recaptcha');
				} else {
					$this->form_validation->set_rules('captcha', 'Confirmation Code', 'trim|xss_clean|required|callback__check_captcha');
				}
			} */
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

					if ($email_activation) {									// send "activate" email
						$data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;

						$this->_send_email('activate', $data['email'], $data);

						unset($data['password']); // Clear password (just for any case)

						$this->_show_message($this->lang->line('auth_message_registration_completed_1'));

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
			/* if ($captcha_registration) {
				if ($use_recaptcha) {
					$data['recaptcha_html'] = $this->_create_recaptcha();
				} else {
					$data['captcha_html'] = $this->_create_captcha();
				}
			} */
			$data['use_username'] = $use_username;
			/* $data['captcha_registration'] = $captcha_registration;
			$data['use_recaptcha'] = $use_recaptcha; */
			$this->load->view('auth/register_form', $data);
		}
	}

	/**
	 * Send activation email again, to the same or new email address
	 *
	 * @return void
	 */
	function send_again()
	{
		if (!$this->tank_auth->is_logged_in(FALSE)) {							// not logged in or activated
			redirect('/login/');

		} else {
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');

			$data['errors'] = array();

			if ($this->form_validation->run()) {								// validation ok
				if (!is_null($data = $this->tank_auth->change_email(
						$this->form_validation->set_value('email')))) {			// success

					$data['site_name']	= $this->config->item('website_name', 'tank_auth');
					$data['activation_period'] = $this->config->item('email_activation_expire', 'tank_auth') / 3600;

					$this->_send_email('activate', $data['email'], $data);

					$this->_show_message(sprintf($this->lang->line('auth_message_activation_email_sent'), $data['email']),'login');

				} else {
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
			$this->load->view('auth/send_again_form', $data);
		}
	}

	/**
	 * Activate user account.
	 * User is verified by user_id and authentication code in the URL.
	 * Can be called by clicking on link in mail.
	 *
	 * @return void
	 */
	function activate()
	{
		$user_id		= $this->uri->segment(3);
		$new_email_key	= $this->uri->segment(4);
		$data=$this->users->get_user_detail($user_id);
		$data['site_name'] = $this->config->item('website_name', 'tank_auth');
		// Activate user
		if ($this->tank_auth->activate_user($user_id, $new_email_key)) {		// success
			$this->tank_auth->logout();
			
			$this->_send_email('welcome', $data['email'], $data);
			
			
			$this->_show_message($this->lang->line('auth_message_activation_completed').' '.anchor('/auth/login/', 'Login'),'login');
			
		} else {																// fail
			$this->_show_message($this->lang->line('auth_message_activation_failed'));
		}
	}

	/**
	 * Generate reset code (to change password) and send it to user
	 *
	 * @return void
	 */
	 
	 function forgot_password()

	{

		if ($this->tank_auth->is_logged_in()) {									// logged in

			redirect('');



		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated

			redirect('/auth/send_again/');



		} else {
			
			$data['errors'] = array();

											

				if (!is_null($data = $this->tank_auth->forgot_password(

						$_POST['email']))) {



					$data['site_name'] = $this->config->item('website_name', 'tank_auth');



					// Send email with password activation link

					$this->_send_email('forgot_password', $_POST['email'], $data);

					

					//$this->_show_message($this->lang->line('auth_message_new_password_sent'));
					//echo $this->lang->line('auth_message_new_password_sent');exit;
					echo "reset password link sent!";exit;

				} else {

					$errors = $this->tank_auth->get_error_message();

					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);

				}

		}

	}
	 
	/* function forgot_password()
	{
		if ($this->tank_auth->is_logged_in()) {									// logged in
			redirect('');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/auth/send_again/');

		} else {
			$this->form_validation->set_rules('login', 'Email or login', 'trim|required|xss_clean');

			$data['errors'] = array();

			if ($this->form_validation->run()) {								// validation ok
				if (!is_null($data = $this->tank_auth->forgot_password(
						$this->form_validation->set_value('login')))) {

					$data['site_name'] = $this->config->item('website_name', 'tank_auth');

					// Send email with password activation link
					$this->_send_email('forgot_password', $data['email'], $data);

					$this->_show_message($this->lang->line('auth_message_new_password_sent'));

				} else {
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
			$this->load->view('auth/forgot_password_form', $data);
		}
	} */

	/**
	 * Replace user password (forgotten) with a new one (set by user).
	 * User is verified by user_id and authentication code in the URL.
	 * Can be called by clicking on link in mail.
	 *
	 * @return void
	 */
	function reset_password()
	{
		$user_id		= $this->uri->segment(3);
		$new_pass_key	= $this->uri->segment(4);
		//echo $new_pass_key;exit;
		$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
		$this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');
		if (!is_null($data = $this->tank_auth->reset_password(
					$_POST['user_id'], $_POST['new_pass_key'],
					$_POST['new_password']))) {	// success
				$data['site_name'] = $this->config->item('website_name', 'tank_auth');
				// Send email with new password
				$this->_send_email('reset_password', $data['email'], $data);
				//echo $this->lang->line('auth_message_new_password_activated');exit;
				echo "successfully changed!";exit;
			}
		/*
		$data['errors'] = array();
		if ($this->form_validation->run()) {								// validation ok
		
			if (!is_null($data = $this->tank_auth->reset_password(
					$_POST['user_id'], $_POST['new_pass_key'],
					$_POST['new_password']))) {	// success
				$data['site_name'] = $this->config->item('website_name', 'tank_auth');
				// Send email with new password
				$this->_send_email('reset_password', $data['email'], $data);
				//echo $this->lang->line('auth_message_new_password_activated');exit;
				echo "successfully changed!";exit;
			} else {														// fail
				//$this->_show_message($this->lang->line('auth_message_new_password_failed'));
			}
		} else {
			// Try to activate user by password key (if not activated yet)
			if ($this->config->item('email_activation', 'tank_auth')) {
				$this->tank_auth->activate_user($user_id, $new_pass_key, FALSE);
			}

			if (!$this->tank_auth->can_reset_password($user_id, $new_pass_key)) {
				$this->_show_message($this->lang->line('auth_message_new_password_failed'));
			}
		}
		*/
		$data['forget_password'] = true;
		$this->layout->view('auth/login', $data);
	}
	
	/* reset_password()
	{
		$user_id		= $this->uri->segment(3);
		$new_pass_key	= $this->uri->segment(4);

		$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
		$this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');

		$data['errors'] = array();

		if ($this->form_validation->run()) {								// validation ok
			if (!is_null($data = $this->tank_auth->reset_password(
					$user_id, $new_pass_key,
					$this->form_validation->set_value('new_password')))) {	// success

				$data['site_name'] = $this->config->item('website_name', 'tank_auth');

				// Send email with new password
				$this->_send_email('reset_password', $data['email'], $data);
				echo "sdfsd";exit;
				$this->_show_message($this->lang->line('auth_message_new_password_activated').' '.anchor('/auth/login/', 'Login'));

			} else {														// fail
			echo "sdfsd";exit;
				$this->_show_message($this->lang->line('auth_message_new_password_failed'));
			}
		} else {
			// Try to activate user by password key (if not activated yet)
			if ($this->config->item('email_activation', 'tank_auth')) {
				$this->tank_auth->activate_user($user_id, $new_pass_key, FALSE);
			}

			if (!$this->tank_auth->can_reset_password($user_id, $new_pass_key)) {
				$this->_show_message($this->lang->line('auth_message_new_password_failed'));
			}
		}
		$data['forget_password'] = true;
		$this->layout->view('auth/login', $data);
	} */

	/**
	 * Change user password
	 *
	 * @return void
	 */
	function change_password()
	{
		if (!$this->tank_auth->is_logged_in()) {								// not logged in or not activated
			redirect('/login/');

		} else {
			$this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
			$this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');

			$data['errors'] = array();

			if ($this->form_validation->run()) {								// validation ok
				if ($this->tank_auth->change_password(
						$this->form_validation->set_value('old_password'),
						$this->form_validation->set_value('new_password'))) {	// success
					$this->_show_message($this->lang->line('auth_message_password_changed'));

				} else {														// fail
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
			$this->load->view('auth/change_password_form', $data);
		}
	}

	/**
	 * Change user email
	 *
	 * @return void
	 */
	function change_email()
	{
		if (!$this->tank_auth->is_logged_in()) {								// not logged in or not activated
			redirect('/login/');

		} else {
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');

			$data['errors'] = array();

			if ($this->form_validation->run()) {								// validation ok
				if (!is_null($data = $this->tank_auth->set_new_email(
						$this->form_validation->set_value('email'),
						$this->form_validation->set_value('password')))) {			// success

					$data['site_name'] = $this->config->item('website_name', 'tank_auth');

					// Send email with new email address and its activation link
					$this->_send_email('change_email', $data['new_email'], $data);

					$this->_show_message(sprintf($this->lang->line('auth_message_new_email_sent'), $data['new_email']));

				} else {
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
			$this->load->view('auth/change_email_form', $data);
		}
	}

	/**
	 * Replace user email with a new one.
	 * User is verified by user_id and authentication code in the URL.
	 * Can be called by clicking on link in mail.
	 *
	 * @return void
	 */
	function reset_email()
	{
		$user_id		= $this->uri->segment(3);
		$new_email_key	= $this->uri->segment(4);

		// Reset email
		if ($this->tank_auth->activate_new_email($user_id, $new_email_key)) {	// success
			$this->tank_auth->logout();
			$this->_show_message($this->lang->line('auth_message_new_email_activated').' '.anchor('/auth/login/', 'Login'));

		} else {																// fail
			$this->_show_message($this->lang->line('auth_message_new_email_failed'));
		}
	}

	/**
	 * Delete user from the site (only when user is logged in)
	 *
	 * @return void
	 */
	function unregister()
	{
		if (!$this->tank_auth->is_logged_in()) {								// not logged in or not activated
			redirect('/login/');

		} else {
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			$data['errors'] = array();

			if ($this->form_validation->run()) {								// validation ok
				if ($this->tank_auth->delete_user(
						$this->form_validation->set_value('password'))) {		// success
					$this->_show_message($this->lang->line('auth_message_unregistered'));

				} else {														// fail
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
			$this->load->view('auth/unregister_form', $data);
		}
	}

	/**
	 * Show info message
	 *
	 * @param	string
	 * @return	void
	 */
	function _show_message($message,$page='')
	{
		$this->session->set_flashdata('message', $message);
		redirect('/'.$page);
	}

	/**
	 * Send email message of given type (activate, forgot_password, etc.)
	 *
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	void
	 */
	function _send_email($type, $email, &$data)
	{
		//$this->load->library('email');
		$this->email->set_newline("\r\n");
		$config['protocol'] = $this->config->item('mail_protocol','email');
		$config['smtp_host'] = $this->config->item('smtp_server','email');
		$config['smtp_user'] = $this->config->item('smtp_user_name','email');
		$config['smtp_pass'] = $this->config->item('smtp_pass','email');
		$this->email->initialize($config);
		$this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->to($email);
		$this->email->bcc('nitin@meetuniv.com','debal@meetuniv.com');
		$this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name', 'tank_auth')));
		$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
		$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->email->send();
	}

	/**
	 * Create CAPTCHA image to verify user as a human
	 *
	 * @return	string
	 */
	function _create_captcha()
	{
		$this->load->helper('captcha');

		$cap = create_captcha(array(
			'img_path'		=> './'.$this->config->item('captcha_path', 'tank_auth'),
			'img_url'		=> base_url().$this->config->item('captcha_path', 'tank_auth'),
			'font_path'		=> './'.$this->config->item('captcha_fonts_path', 'tank_auth'),
			'font_size'		=> $this->config->item('captcha_font_size', 'tank_auth'),
			'img_width'		=> $this->config->item('captcha_width', 'tank_auth'),
			'img_height'	=> $this->config->item('captcha_height', 'tank_auth'),
			'show_grid'		=> $this->config->item('captcha_grid', 'tank_auth'),
			'expiration'	=> $this->config->item('captcha_expire', 'tank_auth'),
		));

		// Save captcha params in session
		$this->session->set_flashdata(array(
				'captcha_word' => $cap['word'],
				'captcha_time' => $cap['time'],
		));

		return $cap['image'];
	}

	/**
	 * Callback function. Check if CAPTCHA test is passed.
	 *
	 * @param	string
	 * @return	bool
	 */
	function _check_captcha($code)
	{
		$time = $this->session->flashdata('captcha_time');
		$word = $this->session->flashdata('captcha_word');

		list($usec, $sec) = explode(" ", microtime());
		$now = ((float)$usec + (float)$sec);

		if ($now - $time > $this->config->item('captcha_expire', 'tank_auth')) {
			$this->form_validation->set_message('_check_captcha', $this->lang->line('auth_captcha_expired'));
			return FALSE;

		} elseif (($this->config->item('captcha_case_sensitive', 'tank_auth') AND
				$code != $word) OR
				strtolower($code) != strtolower($word)) {
			$this->form_validation->set_message('_check_captcha', $this->lang->line('auth_incorrect_captcha'));
			return FALSE;
		}
		return TRUE;
	}

	/**
	 * Create reCAPTCHA JS and non-JS HTML to verify user as a human
	 *
	 * @return	string
	 */
	function _create_recaptcha()
	{
		$this->load->helper('recaptcha');

		// Add custom theme so we can get only image
		$options = "<script>var RecaptchaOptions = {theme: 'custom', custom_theme_widget: 'recaptcha_widget'};</script>\n";

		// Get reCAPTCHA JS and non-JS HTML
		$html = recaptcha_get_html($this->config->item('recaptcha_public_key', 'tank_auth'));

		return $options.$html;
	}

	/**
	 * Callback function. Check if reCAPTCHA test is passed.
	 *
	 * @return	bool
	 */
	function _check_recaptcha()
	{
		$this->load->helper('recaptcha');

		$resp = recaptcha_check_answer($this->config->item('recaptcha_private_key', 'tank_auth'),
				$_SERVER['REMOTE_ADDR'],
				$_POST['recaptcha_challenge_field'],
				$_POST['recaptcha_response_field']);

		if (!$resp->is_valid) {
			$this->form_validation->set_message('_check_recaptcha', $this->lang->line('auth_incorrect_captcha'));
			return FALSE;
		}
		return TRUE;
	}
	function social_login($resource)
	{
		$user_id=0;	//userid
		$profilePicOnly=0;
		$user_details=$this->users->check_user_by_email();
		$user_social_details=$this->users->get_user_social_detail($resource);
		if(isset($user_social_details['userId']))						//social id already exist
		{
			$user_id=$user_social_details['userId'];
		}
		else															//new commer  from social site
		{
			if(isset($user_details['id']))								//email is allready registered
			{
				
				$user_social_id=$this->users->get_user_social_id($user_details['id']);
				if(isset($user_social_id['id']))
				{
					$this->users->update_user_social_detail($resource,$user_details['id']);
				}
				else
				{
					$data	=	array(
									'userId'=>$user_details['id'],
									$resource=>$this->input->post('social_id')
									);	
					$social_id=$this->users->save_user_details('usersSocio',$data);
					
				}
				$user_id=$user_details['id'];
			}
			else														//new commer
			{
				$data	=	array(
						'fullname'=>$this->input->post('name'),
						'email'=>$this->input->post('email'),
						'activated'=>1,
						);
				$user_id=$this->users->save_user_details('users',$data);//saving userdetails
				$data	=	array(
								'userId'=>$user_id,
								$resource=>$this->input->post('social_id')
								);
					
				$social_id=$this->users->save_user_details('usersSocio',$data);//saving social details
				if($resource=='facebook')//saving profile pic when login with facebook
				{
					$dataNew	=	array(
									'userId'=>$user_id,
									'profilePic'=>'f'.$this->input->post('social_id')
									);
					$id = $this->users->save_user_details('userProfile',$dataNew);//saving profile pic of facebook
					$profilePicOnly=1;
				}
			}
			/*new user*/
			//print_r($userdata=$this->users->register_social_user());
		}
		
		$this->ci->session->set_userdata(array(
								'user_id'	=> $user_id,
								'username'	=> "",
								'status'	=> '1',
								'birthday'	=> $this->input->post('birthday'),
						));
		$profile_detail=$this->users->check_profile_detail($user_id);
		if(count($profile_detail)==0 || $profilePicOnly==1)
		{
			echo "FIRSTSUCCESS";
		}
		else
		{
		echo "SUCCESS";
		}
	
	}
	/* function profileNew()
	{
		$upload_result["error"]='';
		if ($this->tank_auth->is_logged_in()) {					// logged in or activated	
			if($this->input->post('save_profile'))
			{
				$this->form_validation->set_rules('dob','Date Of Birth','trim|required');
				$this->form_validation->set_rules('city','City','trim|required');
				$this->form_validation->set_rules('country','Country','trim|required');
				if($this->form_validation->run())
				{
				$this->users->save_profile();
				$upload_result["error"]=$this->users->upload_profile_pic();
				if($upload_result["error"]=='' || $upload_result["error"]=='SUCCESS')
				{
					redirect('profile_match');
				}
				}
			}
			$this->load->view('auth/profile',$upload_result);
		}
		else													// not logged in or non activated	
		{
		redirect('/login/');
		}
	} */
	function profile()
	{
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
		$data['title'] = "MeetUniv.Com : Complete Your Profile - Step One";
		$data['description'] = "Provide your personal information with MeetUniv.com";
		$data['keywords'] = "Meet UK Universities,Study in UK,Study in UK universities,Study MBA in UK,Colleges in UK,International students,Universities &  colleges in UK,Higher education in UK,Best universities in UK ,List of Top 10 colleges & universities,IELTS-GMAT-TOEFL,Universities events,Engineering colleges in UK ,Postgraduate study,Scholarships,Executive MBA in UK,Education Fairs,Spot Admission,University Visits,Courses,Test Preparation";
		$data["error"]='';
		if ($this->tank_auth->is_logged_in()) {					// logged in or activated	
			if($this->input->post('save_profile'))
			{
				$this->form_validation->set_rules('dob','Date Of Birth','trim|required');
				$this->form_validation->set_rules('city','City','trim|required');
				$this->form_validation->set_rules('country','Country','trim|required');
				if($this->form_validation->run())
				{
				$this->users->save_profile();
				$data["error"]=$this->users->upload_profile_pic();
				if($data["error"]=='' || $data["error"]=='SUCCESS')
				{
					redirect('auth/profileMatch');
				}
				}
			}
			$data['user_profile'] = $this->users->get_user_profile();
			$data['country']=$this->users->getAllCountry();
			$this->layout->view('auth/profileNew',$data);
		}
		else													// not logged in or non activated	
		{
		redirect('/login/');
		}
	}
	function profile_match()								//function of profile  match of user
	{
		if($this->tank_auth->is_logged_in())
		{
			if($this->input->post('save_profile_match'))
			{
				$this->form_validation->set_rules('school', 'School Name', 'trim|required|xss_clean|min_length[3]');
				if($this->form_validation->run())
				{
				$this->users->save_profile_match();
				redirect('profile_externalInfo');
				}
			}
			$this->load->view('auth/profile_match');
		}
		else
		{
			redirect('login');
		}
	}
	function profileMatch()								//function of profile  match of user
	{
		$data['title'] = "MeetUniv.Com : Complete Your Profile - Step Two";
		$data['description'] = "Provide your academic information with MeetUniv.com";
		$data['keywords'] = "Meet UK Universities,Study in UK,Study in UK universities,Study MBA in UK,Colleges in UK,International students,Universities &  colleges in UK,Higher education in UK,Best universities in UK ,List of Top 10 colleges & universities,IELTS-GMAT-TOEFL,Universities events,Engineering colleges in UK ,Postgraduate study,Scholarships,Executive MBA in UK,Education Fairs,Spot Admission,University Visits,Courses,Test Preparation";
		if($this->tank_auth->is_logged_in())
		{
			if($this->input->post('save_profile_match'))
			{
				$this->form_validation->set_rules('school', 'School Name', 'trim|required|xss_clean|min_length[3]');
				if($this->form_validation->run())
				{
				$this->users->save_profile_match();
				redirect('auth/profileStep3');
				}
			}
			$data['userProfile'] = $this->users->getUserProfileMatch($this->tank_auth->get_user_id());
			$this->layout->view('auth/profileMatch',$data);
		}
		else
		{
			redirect('login');
		}
	}
	function profile_externalInfo() //temprary
	{
		
		if($this->tank_auth->is_logged_in())
		{
			//$this->form_validation->set_rules('sat_math', 'SAT Math', 'trim|required|xss_clean|min_length[3]');
			if($this->input->post('save_external_info'))
			{
				$this->users->save_external_info();
				echo "data save";
			}
			$this->load->view('auth/profile_externalInfo');
		}
		else
		{
			redirect('login');
		}
	}
	function profileDashboard()
	{
		$data['title'] = "MeetUniv.Com : Welcome to Your Dashboard";
		$data['description'] = "Welcome to the Dashboard at  MeetUniv.com";
		$data['keywords'] = "Meet UK Universities,Study in UK,Study in UK universities,Study MBA in UK,Colleges in UK,International students,Universities &  colleges in UK,Higher education in UK,Best universities in UK ,List of Top 10 colleges & universities,IELTS-GMAT-TOEFL,Universities events,Engineering colleges in UK ,Postgraduate study,Scholarships,Executive MBA in UK,Education Fairs,Spot Admission,University Visits,Courses,Test Preparation";
		$this->load->model('connectmodel');
		if($this->tank_auth->is_logged_in())
		{
			
			$this->load->model('connectmodel');
			$data['userProfile'] = $this->users->getUserProfileDetails($this->tank_auth->get_user_id());
			$data['getUserExt'] = $this->users->getUserExt($this->tank_auth->get_user_id());
			$data['userProfileMatch'] = $this->users->getUserProfileMatch($this->tank_auth->get_user_id());
			if(!empty($data['userProfile']['cityId'])){
				$cityId = $data['userProfile']['cityId'];
				$data['cityId'] = $data['userProfile']['cityId'];
			}else{
				$cityId = '';
			}
			//$data['cityId']=$
			$data['recentEvents'] = $this->connectmodel->getRecentEvents($cityId);
			if(!empty($data['userProfile']['dob'])){
				$percentDob = 15;
			}else{
				$percentDob = 0;
			}
			if(!empty($data['userProfile']['gender'])){
				$percentGender = 7;
			}else{
				$percentGender = 0;
			}
			if(!empty($data['userProfile']['profilePic'])){
				$percentPic = 8;
			}else{
				$percentPic = 0;
			}
			$totalUserProfile = $percentDob + $percentGender + $percentPic;
			if(!empty($data['userProfileMatch']['schoolName'])){
				if(!empty($data['userProfileMatch']['schoolName'])){
					$percentSchool = 8;
				}else{
					$percentSchool = 0;
				}
				if($data['userProfileMatch']['lookingFor']=='XII'){
					$percentXii = 12;
				}else{
					$percentXii = 0;
				}
				if($data['userProfileMatch']['lookingFor']=='UG'){
					$percentUG = 10;
				}else{
					$percentUG = 0;
				}
				if($data['userProfileMatch']['lookingFor']=='PG'){
					$percentPG = 10;
				}else{
					$percentPG = 0;
				}
				$totalUserProfileMatch = $percentSchool + $percentXii + $percentUG + $percentPG;
			}else{
				$totalUserProfileMatch = 0;
			}
			
			if(!empty($data['getUserExt']['SAT'])){
				$percentSat = 8;
			}else{
				$percentSat = 0;
			}
			if(!empty($data['getUserExt']['ACT'])){
				$percentAct = 8;
			}else{
				$percentAct = 0;
			}
			if(!empty($data['getUserExt']['IELTS'])){
				$percentIelts = 7;
			}else{
				$percentIelts = 0;
			}
			if(!empty($data['getUserExt']['PTE'])){
				$percentPte = 7;
			}else{
				$percentPte = 0;
			}
			$totalUserExt = $percentSat + $percentAct + $percentIelts + $percentPte;
			$totalCount = $totalUserProfile + $totalUserProfileMatch + $totalUserExt;
			$totalPercent = 100;
			$totalProfileStatus = $totalPercent*$totalCount/100;
			$data['profileStatus'] = $totalProfileStatus;
			//print_r($data);exit;
			//echo $totalProfileStatus;exit;
			$this->layout->view('auth/profileDashboard',$data);
			
			//echo $data['userProfile']['dob'];exit;
			//echo "<pre>";print_r($data);exit;
		}
		else
		{
			redirct('login');
		}
	}
	function profileStep3()
	{
		$data['title'] = "MeetUniv.Com : Complete Your Profile - Step Three";
		$data['description'] = "Provide your IELTS-GMAT-TOEFL-PTE details with MeetUniv.com";
		$data['keywords'] = "Meet UK Universities,Study in UK,Study in UK universities,Study MBA in UK,Colleges in UK,International students,Universities &  colleges in UK,Higher education in UK,Best universities in UK ,List of Top 10 colleges & universities,IELTS-GMAT-TOEFL,Universities events,Engineering colleges in UK ,Postgraduate study,Scholarships,Executive MBA in UK,Education Fairs,Spot Admission,University Visits,Courses,Test Preparation";
		if($this->tank_auth->is_logged_in())
		{
			//$this->form_validation->set_rules('sat_math', 'SAT Math', 'trim|required|xss_clean|min_length[3]');
			if($this->input->post('save_external_info'))
			{
				$this->users->save_external_info();  //update process is remaining if there is already record present
				redirect('auth/profileDashboard');
			}
			//$data['userProfile'] = $this->users->getUserProfileDetails($this->tank_auth->get_user_id());
			$data['userProfileExt'] = $this->users->getUserExt($this->tank_auth->get_user_id());
			$this->layout->view('auth/profileStep3',$data);
		}
		else
		{
			redirect('login');
		}
	}
	function getCityByCountry()//for ajax
	{
		$data['city']=$this->users->getCityNamesByCountryId($this->input->post('countryId'));
		$value = json_encode($data['city']);
		echo $value;//printing data for ajex request
	}
	

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */