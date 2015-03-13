<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// $data['base'] = $this->config->item('base_url');
		// $data['css'] = $this->config->item('css_path');
		// $data['css'] = $this->config->item('img_path');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//$this->ci->load->config('tank_auth', TRUE);
		//$this->ci->load->library('session');
		
		$this->load->library('security');
		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->helper('string');
		$this->load->library('GMap');
		$this->load->library('email');
		$this->ci =& get_instance();
		$this->load->library('fbConn/facebook');
		
		
		
	}

	function index()
	{ 
		$subdomain_arr = explode('.', $_SERVER['HTTP_HOST']);
		if(count($subdomain_arr)>2)
		{
		if($subdomain_arr[0]!='www')
		{
		$univ_domain=$this->subdomain->find_subdomain_name_and_id();
		$this->subdomain->university_by_domain($univ_domain['university']['univ_id'],$univ_domain['domain']);
		}
		else
		{
		$this->subdomain->homefunction();
		}
		}
		else
		{
		$this->subdomain->homefunction();
		}
			
	}
	
	function home($pwd_change='')
	{ 
		$data = $this->path->all_path();
		$data['pwd_change']=$pwd_change;
		
		//$this->load->view('welcome');
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/login/');
		} else {
			$subdomain_arr = explode('.', $_SERVER['HTTP_HOST'], 2);	
			$this->load->view('auth/header',$data);
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['count_inbox'] = 0;
			$data['count_outbox'] = 0;
			$logged_user = $data['user_id'];
			$this->load->model('users');
			$data['fetch_profile'] = $this->users->fetch_profile($logged_user);
			$data['query'] = $this->users->fetch_all_data($logged_user);
			$data['profile_pic'] = $this->users->fetch_profile_data($logged_user); 
			$data['pro_complete']=$this->users->chk_profile_completeness($data['profile_pic']);
			$data['featured_question_profile'] = $this->quest_ans_model->latest_question_profile();
			$data['recent_articles']=$this->frontmodel->recent_articles();
			$data['recent_news']=$this->frontmodel->recent_news();
			$data['featured_events']=$this->frontmodel->fetch_recent_events();
			if($data['recent_articles']==0)
			{
			$data['recent_articles']=array();
			}
			if($data['recent_news']==0)
			{
			$data['recent_news']=array();
			}
		//	print_r($data['profile_pic']);
			$data['educ_level'] = $this->users->fetch_educ_level();
			$data['country'] = $this->users->fetch_country();
			//print_r($data['country']);
			$data['area_interest'] = $this->users->fetch_area_interest();
			$data['my_collage_of_user'] = $this->users->my_collage_of_user($logged_user);
			$data['count_inbox'] = $this->users->count_inbox_user($logged_user);
			$data['count_outbox'] = $this->users->count_outbox_user($logged_user);
			$this->load->view('auth/profile',$data);
		}
		if ($this->input->post('upload')) {
			$this->users->do_upload();
		}
		$this->load->view('auth/footer', $data);
	}

	/**
	 * Login user on the site
	 *
	 * @return void
	 */
	function login()
	{
		$data = $this->path->all_path();
		$this->load->view('auth/header',$data);
		if ($this->tank_auth->is_logged_in()) 
		{         // logged in
			redirect('home');
		} 
		else 
		{
			$data['msg']=0;
			$data['email_send']=0;
			$data['login_by_username'] = ($this->config->item('login_by_username', 'tank_auth') AND
			$this->config->item('use_username', 'tank_auth'));
			$data['login_by_email'] = $this->config->item('login_by_email', 'tank_auth');

			$this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('remember', 'Remember me', 'integer');
			$this->form_validation->set_rules('user_type', 'user_type', 'string');
			// Get login for counting attempts to login
			if ($this->config->item('login_count_attempts', 'tank_auth') AND
			($login = $this->input->post('login'))) 
			{
				$login = $this->security->xss_clean($login);
			} 
			else 
			{
				$login = '';
			}
			$data['errors'] = array();
			//print_r($this->session->userdata);
			if ($this->form_validation->run()) 
			{        // validation ok
				if ($this->tank_auth->login(
				$this->form_validation->set_value('login'),
				$this->form_validation->set_value('password'),
				$this->form_validation->set_value('remember'),
				$data['login_by_username'],
				$data['login_by_email'],
				$this->form_validation->set_value('user_type')
				)) 
				{        // success
					if($this->session->userdata('follow_to_univ'))
					{
						redirect('colleges');
					}
					/* Code for if user question should be insert after login */
					if($this->session->userdata('quest_sess_active'))
					{
						$data['user_id'] = $this->tank_auth->get_user_id();
						//if asked on particular university
						$quest = array(
						'q_category'=>$this->session->userdata('q_category'),
						'q_title'=>$this->session->userdata('q_title'),
						'q_detail'=>$this->session->userdata('q_detail'),
						'q_askedby'=>$data['user_id'],
						'q_asked_time'=>date('Y-m-d H:i:s',time()),
						'q_approve'=>'0',
						'q_featured_home_que'=>'0',
						'q_featured_country_que'=>'0',
						'q_univ_id'=>$this->session->userdata('q_univ_id')
						);
						//start
						$quest['q_askedby']=$this->tank_auth->get_user_id();
						$asked_by=$this->tank_auth->get_user_id();
						$check=$this->quest_ans_model->quest_exist($asked_by);
						//echo $check;exit;
						if($check<1)
						{	//echo 'not exist';exit;
							$data['post_quest'] = $this->quest_ans_model->post_quest($quest);			
							$this->session->set_flashdata('success',1);

							$domain = $_SERVER['HTTP_HOST'];
							$pageURL ="http://" . $domain . $_SERVER['REQUEST_URI'];

							$info = $this->path->all_path();
							$info['url']=$pageURL;
							$uid = $this->ci->session->userdata('user_id');
							$result= $this->users->get_username_by_userid($uid); 					  	  
							$info['fullname'] =$result['fullname'];
							$email_body=$this->load->view('auth/email_templates/quest_asked_notification',$info,TRUE);			
							$this->email->set_newline("\r\n");
							$config['protocol'] = $this->config->item('mail_protocol');
							$config['smtp_host'] = $this->config->item('smtp_server');
							$config['smtp_user'] = $this->config->item('smtp_user_name');
							$config['smtp_pass'] = $this->config->item('smtp_pass');
							$this->email->initialize($config);    
							$this->email->from('info@meetuniversities.com', 'MeetUniversities.com');						
							$this->email->to('counselor@meetuniversities.com');				
							$this->email->subject(ucwords($result['fullname']).' just asked a Question');
							$message = $email_body ;
							$this->email->message($message);
							$this->email->send();
							//redirect($pageURL);
							
							//$data['post_quest'] = $this->quest_ans_model->post_quest($quest);
							//if asked on study abroad
							$quest = array(
							'q_category'=>'',
							'q_title'=>'',
							'q_detail'=>'',
							'q_askedby'=>'',
							'quest_sess_active'=>'',
							'q_univ_id'=>''
							);
							$this->session->unset_userdata($quest);
							$this->session->set_flashdata('success',1);	
							if($this->session->userdata('redirect_section')!= '')
							{
								$red = $this->session->userdata('redirect_section');
								$this->session->set_userdata('redirect_section','');
								redirect($red);
							}
							else
							{
								$this->session->set_userdata('quest_send_suc','1');
								redirect('questandans');
							}
							
							
						}
						else
						{
							//echo 'exist';exit;
							
							$this->session->set_flashdata('exist',1);
							redirect('questandans');
						}
						//end			
						
						
						
						
					}
					else
					{
						redirect('home');
					}

				} 
				else 
				{
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v) $data['errors'][$k] = $this->lang->line($v);
				}
			}
			else
			{
				$this->form_validation->set_message('login', 'You must accept our terms and conditions'); 
			}
			/*$data['show_captcha'] = FALSE;
			if ($this->tank_auth->is_max_login_attempts_exceeded($login)) {
			$data['show_captcha'] = TRUE;
			if ($data['use_recaptcha']) {
			$data['recaptcha_html'] = $this->_create_recaptcha();
			} else {
			$data['captcha_html'] = $this->_create_captcha();
			}
			}*/
			$data['featured_events']=$this->frontmodel->fetch_featured_events();
			$data['new_users']=$this->frontmodel->newly_registered_users();
			$this->load->view('auth/login', $data);
		}
		$this->load->view('auth/footer',$data);
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
		//$this->_show_message($this->lang->line('auth_message_logged_out'));
	}

	/**
	 * Register user on the site
	 *
	 * @return void
	 */
	function register($bc='')
 {
 $data = $this->path->all_path();
 $this->load->view('auth/header',$data);
  $config['newline'] = $this->config->item('newline');
  $this->email->initialize($config);
  if ($this->tank_auth->is_logged_in()) {         // logged in
   redirect('home');

  }  else {
   $use_username = $this->config->item('use_username', 'tank_auth');
   if ($use_username) {
    $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']|alpha_dash');
   }
   $this->form_validation->set_rules('fullname', 'Fullname', 'trim|required|xss_clean');
   $this->form_validation->set_rules('createdby', 'Createdby', 'trim');
   $this->form_validation->set_rules('agree_term', 'I Agree', 'trim|required');
   $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|is_unique[users.email]');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
   $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|matches[password]');
   $this->form_validation->set_rules('level_user', 'level_user', 'trim|string');
   $this->form_validation->set_rules('user_type', 'user_type', 'string');
   
   //$captcha_registration = $this->config->item('captcha_registration', 'tank_auth');
   //$use_recaptcha   = $this->config->item('use_recaptcha', 'tank_auth');
   /*if ($captcha_registration) {
    if ($use_recaptcha) {
     $this->form_validation->set_rules('recaptcha_response_field', 'Confirmation Code', 'trim|xss_clean|required|callback__check_recaptcha');
    } else {
     $this->form_validation->set_rules('captcha', 'Confirmation Code', 'trim|xss_clean|required|callback__check_captcha');
    }
   }*/
   $data['errors'] = array();

   $email_activation = $this->config->item('email_activation', 'tank_auth');

   if ($this->form_validation->run()) {        // validation ok
    if (!is_null($data = $this->tank_auth->create_user(
      $use_username ? $this->form_validation->set_value('username') : '',
      $this->form_validation->set_value('fullname'),
      $this->form_validation->set_value('createdby'),
      $this->form_validation->set_value('level_user'),
      $this->form_validation->set_value('email'),
      $this->form_validation->set_value('password'),
      $this->form_validation->set_value('user_type'),
      $email_activation
      ))) {         // success
      //$CI->session->userdata('name');
      //Send Email for new registration
      //print_r($this->session->userdata);
      $uid = $data['user_id'];
	  $userid=$data['user_id'];
      $data['logged_user_email'] = $this->users->get_email_by_userid($uid);
      $data['password'] = $this->input->post('password');
	   $data['email'] = $this->input->post('email');
      $data['fullname'] = $this->input->post('fullname');
      $new_email_key=$this->users->get_new_email_key_by_userid($uid);
      $data['new_email_key']=$new_email_key['new_email_key'];
      $uid = $data['logged_user_email'];
      $email_body = $this->load->view('auth/new_signup_content_email',$data,TRUE);
      $this->email->set_newline("\r\n");
	 $config['protocol'] = $this->config->item('mail_protocol');
	 $config['smtp_host'] = $this->config->item('smtp_server');
	 $config['smtp_user'] = $this->config->item('smtp_user_name');
	 $config['smtp_pass'] = $this->config->item('smtp_pass');
	 $this->email->initialize($config);    
     $this->email->from('info@meetuniversities.com', 'MeetUniversities.com');
     $this->email->to($uid);
     $this->email->subject('Action Required to activate your account | MeetUniversities.com');
     $message = $email_body ;
     $this->email->message($message);
     $this->email->send();
     $this->session->set_flashdata('registeration_success','1');
	 $this->session->set_flashdata('userid',$userid);
     $data['site_name'] = $this->config->item('website_name', 'tank_auth');
	 redirect('login'); 
    } else {
     $errors = $this->tank_auth->get_error_message();
     foreach ($errors as $k => $v) $data['errors'][$k] = $this->lang->line($v);
    }
   }
   /*if ($captcha_registration) {
    if ($use_recaptcha) {
     $data['recaptcha_html'] = $this->_create_recaptcha();
    } else {
     $data['captcha_html'] = $this->_create_captcha();
    }
   }*/
   $data['use_username'] = $use_username;
   //$data['captcha_registration'] = $captcha_registration;
   //$data['use_recaptcha'] = $use_recaptcha;
   //$data['base'] = $base;
   $data['featured_events']=$this->frontmodel->fetch_featured_events();
   $data['new_users']=$this->frontmodel->newly_registered_users();
   $this->load->view('auth/register', $data);
  }
  $this->load->view('auth/footer',$data);
 }

 function activation_mail_resend($userid='')
 {
 $data = $this->path->all_path();
 $this->load->view('auth/header',$data);
  $config['newline'] = $this->config->item('newline');
  $this->email->initialize($config);
  if ($this->tank_auth->is_logged_in()) {         // logged in
   redirect('home');

  }  
  else 
  { 
      $uid = $userid;
      $info= $this->users->get_username_by_userid($uid); 
	  	//print_r($data);exit;
      $new_email_key=$this->users->get_new_email_key_by_userid($uid);
      $data['new_email_key']=$new_email_key['new_email_key'];
	  $data['password'] = 0;
	  $data['user_id'] =$userid ;
	   $data['email'] = $info['email'];
      $data['fullname'] =$info['fullname'];
      $uid = $info['email'];
      $email_body = $this->load->view('auth/new_signup_content_email',$data,TRUE);
      $this->email->set_newline("\r\n");
	 $config['protocol'] = $this->config->item('mail_protocol');
	 $config['smtp_host'] = $this->config->item('smtp_server');
	 $config['smtp_user'] = $this->config->item('smtp_user_name');
	 $config['smtp_pass'] = $this->config->item('smtp_pass');
	 $this->email->initialize($config);    
     $this->email->from('info@meetuniversities.com', 'MeetUniversities.com');
     $this->email->to($uid);
     $this->email->subject('Action Required to activate your account | MeetUniversities.com');
     $message = $email_body ;
     $this->email->message($message);
     $this->email->send();
     $this->session->set_flashdata('registeration_success','1');
	 $this->session->set_flashdata('userid',$userid);
     $data['site_name'] = $this->config->item('website_name', 'tank_auth');
	 redirect('login'); 
  
   }
  
   $data['use_username'] = $use_username;   
   $data['featured_events']=$this->frontmodel->fetch_featured_events();
   $data['new_users']=$this->frontmodel->newly_registered_users();
   $this->load->view('auth/register', $data);
  
  $this->load->view('auth/footer',$data);
 }
	
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

					$this->_show_message(sprintf($this->lang->line('auth_message_activation_email_sent'), $data['email']));

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
	function activate($user_id,$new_email_key)
 {$data = $this->path->all_path();
  // Activate user
  if ($this->users->activate_user($user_id, $new_email_key)) {  // success
  // $this->tank_auth->logout();
  $this->session->set_flashdata('activated','yes');
   $uid = $user_id;  
      $data['logged_user_email'] = $this->users->get_email_by_userid($uid);      
	   //print_r($data['logged_user_email']);exit;
      $data['fullname'] = $this->users->get_username_by_userid($uid); 	  
      $email_body = $this->load->view('auth/activation_content_email',$data,TRUE);	 
      $this->email->set_newline("\r\n");
  $config['protocol'] = $this->config->item('mail_protocol');
	 $config['smtp_host'] = $this->config->item('smtp_server');
	 $config['smtp_user'] = $this->config->item('smtp_user_name');
	 $config['smtp_pass'] = $this->config->item('smtp_pass');	
	 $this->email->initialize($config);    
     $this->email->from('info@meetuniversities.com', 'MeetUniversities.com');
     $this->email->to($data['logged_user_email']);
     $this->email->subject('Welcome to Global University Events Listing | MeetUniversities.com');
     $message = $email_body ;
     $this->email->message($message);
     $this->email->send();     
   redirect('login');
   //$this->_show_message($this->lang->line('auth_message_activation_completed').' '.anchor('/auth/login/', 'Login'));

  } else {                // fail
   //$this->_show_message($this->lang->line('auth_message_activation_failed'));
   redirect('login');
 //  echo "Sorry.There is some problem in email activation";
  }
 }
 
 function copy_data_to_lead()
 {
  $this->db->select('id,fullname,email');
  $this->db->from('users');
  $this->db->where('level','1');
  $query=$this->db->get();
  $res=$query->result_array();
  foreach($res as $res1) {
   $data['fullname']=$res1['fullname'];
   $data['email']=$res1['email'];
   $data['user_id']=$res1['id'];
   $data['email_verified']='1';
   $data['lead_verified']='1';
   $query=$this->db->insert('lead_data',$data);
   $lead_id=$this->db->insert_id($query);
   $data1['v_fullname']=$res1['fullname'];
   $data1['v_verified_email']='1';
   $data1['v_email']=$res1['email'];
   $data1['v_user_id']=$res1['id'];
   $data1['v_lead_id']=$lead_id;
   $this->db->insert('verified_lead_data',$data1);
   echo mysql_error();
   
  }
  
 }


	/**
	 * Generate reset code (to change password) and send it to user
	 *
	 * @return void
	 */
	/*function forgot_password()
	{
		if ($this->tank_auth->is_logged_in()) {									// logged in
			redirect('');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/send_again/');

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
	}
*/
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

				$this->_show_message($this->lang->line('auth_message_new_password_activated').' '.anchor('/auth/login/', 'Login'));

			} else {														// fail
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
		$this->load->view('auth/reset_password_form', $data);
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
	function _show_message($message)
	{
		$this->session->set_flashdata('message', $message);
		redirect('/auth/');
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
		$this->load->library('email');
		$this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		//$this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->to($email);
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
	function update_password()
	{
		$data = $this->path->all_path();
		$data['pwd_change']=0;
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/login/');
		} else {
		$logged_user =  $this->tank_auth->get_user_id();
		$chkfbuser=$this->users->fetch_profile($logged_user);
		if($chkfbuser['fb_user'])
		{
		redirect('home');
		}		$this->load->view('auth/header',$data);
		$this->form_validation->set_rules('current_password', 'Current Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
		$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
		$this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');
		$data['errors'] = array();
		if ($this->form_validation->run()) {								// validation ok
				if ($this->tank_auth->change_password(
						$this->form_validation->set_value('current_password'),
						$this->form_validation->set_value('new_password'))) {	// success
						redirect('home/pwd_change');
					//$this->_show_message($this->lang->line('auth_message_password_changed'));
					
				} else {														// fail
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
				
			}
			$this->load->view('auth/update_pass',$data);
		
		}
		$this->load->view('auth/footer',$data);	
		
	}
	function update_profile()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/login/');
		} else {
		
		$data = $this->path->all_path();
		$this->load->view('auth/header',$data);
		$logged_user =  $this->tank_auth->get_user_id();
		$data['fetch_profile'] = $this->users->fetch_profile($logged_user);
		$data['country'] = $this->users->fetch_country();
		$data['educ_level'] = $this->users->fetch_educ_level();
		$data['area_interest'] = $this->users->fetch_area_interest();
		
		if($this->input->post('update'))
		{
		$this->form_validation->set_rules('full_name','Full Name','trim|required');
		$this->form_validation->set_rules('alt_email','Alternate Email','trim|xss_clean|valid_email');
		$this->form_validation->set_rules('mob_no','Mobile Phone','trim|integer|xss_clean');
		$this->form_validation->set_rules('sex','Sex','trim|required');
		if($this->input->post('year')!='-1' || $this->input->post('month')!='-1' || $this->input->post('date')!='-1')
		{
		$this->form_validation->set_rules('year','year','trim|required|is_natural');
		$this->form_validation->set_rules('month','Month','trim|required|is_natural');
		$this->form_validation->set_rules('date','Date','trim|required|is_natural');
		}
		//$this->form_validation->set_rules('year','Year','trim|required');
		//$this->form_validation->set_rules('month','Month','trim|required');
		//$this->form_validation->set_rules('date','Date','trim|required');
		if($this->form_validation->run())
		{
		$data['user_profile_update'] = $this->users->user_profile_update($logged_user);
		$this->users->do_upload_profile_pic();
		$data['pus'] = 1;
		}
		else
		{
			$errors = $this->tank_auth->get_error_message();
		foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
		}
		}
		
		
		$this->load->view('auth/profile_single',$data);
		$this->load->view('auth/footer',$data);
		}
	}
	

	/*function user_profile_update()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/login/');
		} else {
		
		$this->load->model('users');
		$logged_user = $data['user_id'] = $this->tank_auth->get_user_id();
		$data['user_profile_update'] = $this->users->user_profile_update($logged_user);
		//if ($this->input->post('upload')) {
			$this->users->do_upload_profile_pic();
		//}
		redirect('home');
		}
	}*/

	
	
	
	function state_list_ajax($cid='0')
	{
		$cid = $this->input->post('cid');
		$data['region']=$this->adminmodel->fetch_states($cid);
		$this->load->view('ajaxviews/state_ajax',$data);
	}
	
	function city_list_ajax($sid='0')
	{
		$sid = $this->input->post('sid');
		$data['region']=$this->adminmodel->fetch_city($sid);
		$this->load->view('ajaxviews/city_ajax',$data);
	}
	/* Reset Email By User- Code by Subhanarayan */
	function forgot_password()
	{
		if ($this->tank_auth->is_logged_in()) {
			redirect('/home');
		} else {
		$data = $this->path->all_path();
		$data['msg'] = 0;
			$data['email_send'] = 0;
		$this->load->view('auth/header',$data);
		 $data['featured_events']=$this->frontmodel->fetch_featured_events();
		 $data['new_users']=$this->frontmodel->newly_registered_users();
		if($this->input->post('reset_pass'))
		{
			
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); 
			if($this->form_validation->run())
			{
				$data['email_check'] = $this->users->check_email_exists_lost_pass();
				if($data['email_check'] == 0)
				{
					$data['errors']['email'] = 'Email does not Exist';
					$data['msg'] = 1;
					$this->load->view('auth/login',$data);
				}
				else{
				
				//$data['errors']['email'] = 'Email Exist';
				$key = md5(rand().microtime());
				$user_id = $data['email_check']['id'];
				$email = $data['email_check']['email'];
				$set_key = array(
				'new_password_key'=>$key,
				'new_password_requested'=>date('Y-m-d H:i:s'),
				'psw_recover_flag'=>'1',
				);
				$this->users->set_key_forgot_password($set_key,$user_id);
				$this->email->set_newline("\r\n");
			$config['protocol'] = $this->config->item('mail_protocol');
			$config['smtp_host'] = $this->config->item('smtp_server');
			$config['smtp_user'] = $this->config->item('smtp_user_name');
			$config['smtp_pass'] = $this->config->item('smtp_pass');
            $this->email->initialize($config);  
			$this->email->from('info@meetuniversities.com', 'MeetUniversities');
            $this->email->to($email);
            $this->email->subject('Lost Password');
            $key = $key;
            $message = "Please click this url to change your password ". base_url()."change_user_password/".$key.'/'.$user_id ;
            $message .="<br/>Thank you very much";
            $this->email->message($message);
			  if($this->email->send())
                {
                    $data['email_send'] = 1;
                }

                else
                {
                    show_error($this->email->print_debugger());
                }
					//$data['msg'] = 1;
					$this->load->view('auth/login',$data);
				}
			}
			else{
				$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
					$data['msg'] = 1;
					$this->load->view('auth/login',$data);
			}
		}
		else{
		$this->load->view('auth/login',$data);
		}
		$this->load->view('auth/footer',$data);
		}
	}
	/* Check if recovery password link is valid */
	
	public function change_user_password($key='',$id='')
	{
		$this->ci->load->library('session');
		if ($this->tank_auth->is_logged_in()) {
			redirect('/home');
		} else {
		$data = $this->path->all_path();
		$this->load->view('auth/header',$data);
		$logged_user = '';
		//echo $key; echo $id;
		$set_values = array(
		'id' => trim($id),
		'new_password_key' => trim($key)
		);
		$data['user_detail'] = $this->users->fetch_profile($id);
		if($this->input->post('update_for_lost_psw'))
		{
			$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
			$this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');
			
			if($this->form_validation->run())
			{
				$hasher = new PasswordHash(
				$this->ci->config->item('phpass_hash_strength', 'tank_auth'),
				$this->ci->config->item('phpass_hash_portable', 'tank_auth'));
				$hashed_password = $hasher->HashPassword($this->input->post('new_password'));
				
				$set_update_values = array(
				'password' => $hashed_password,
				'psw_recover_flag' => 0
				);
				
				$data['link_valid'] = $this->users->update_and_deactivate_psw_request($set_values,$set_update_values);
				if($data['link_valid'] == 1)
				{
				$logged_user = $id;
				$data['fetch_user_fullname'] = $this->users->fetch_profile($logged_user);
				$this->ci->session->set_userdata(array(
						 'user_id'	=> trim($id),
						 'username'	=> '',
						 'fullname'	=> $data['fetch_user_fullname']['fullname'],
						 'status'	=> STATUS_ACTIVATED,
						 'psw_change'	=> 'true'
						 ));
				redirect('/home');
				//echo 'YOUR PASSWORD HAS BEEN UPDATED';
				}
				else{
				$this->ci->session->set_userdata(array(
						 'psw_change'	=> 'true'
						 ));
				$this->load->view('auth/forgot_pass_invalid_link');
				}
			}
			else{
				$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
					$this->load->view('auth/change_lost_password',$data);
			}
			
		}
		else{
		$this->load->view('auth/change_lost_password',$data);
		}
		
		//echo $key;
		$this->load->view('auth/footer',$data);
	}
	}
	
	
 function all_colleges_paging()
 {

  $data = $this->path->all_path();
  $current_url=$this->input->post('current_url');
  $data['get_university'] = $this->searchmodel->show_all_college_filteration($current_url);
  if($data['get_university']!=0)
  {
  $college_list=$this->load->view('auth/show_all_college_paging',$data);
  echo $data['get_university']['per_page_res'].'!@#$%^&*'.$college_list;
  }
 }
	
	
  function all_colleges_search()
  {
  $current_url=$this->input->post('current_url');
  $data = $this->path->all_path();
  $data['get_university'] = $this->searchmodel->show_all_college_filteration($current_url);
  if($data['get_university']!=0)
  {
  $college_list=$this->load->view('auth/show_all_college_search',$data);
  $total_univ=$data['get_university']['total_res'];
  $per_page_res=$data['get_university']['per_page_res'];
  $header_title=$data['get_university']['title'];
  echo $header_title.'!@#$%^&*'.$total_univ.'!@#$%^&*'.$per_page_res.'!@#$%^&*'.$college_list;
  }
 }
	
	function all_colleges($parms='')
	{ 
		$data = $this->path->all_path();
		$current_url=$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$change_url=explode("colleges/",$current_url);
		if(count($change_url)>1)
		{
		if($change_url[1]=='')
		$current_url=$data['base'].'colleges';
		}
		$data['country'] = $this->frontmodel->fetch_search_country_having_univ();
		$data['fetch_educ_level'] =$this->users->fetch_educ_level();
		$data['fetch_area_intrest'] =$this->users->fetch_area_interest_having_univ();
		$data['get_university'] = $this->searchmodel->show_all_college_filteration($current_url);
		$data['header_title'] = $data['get_university']['title'];
		$this->load->view('auth/header',$data);
		
		$this->load->view('auth/show_all_college',$data);
		/*else
		{
		$data['filter_var']=1;
		$data['err_div']=0;
		$data['err_msg']='<h2> Sorry....</br><span class="text-align">Result Not Found.... </span> </h2>';
		}*/
		$this->load->view('auth/footer',$data);
	}
	
 function user($id='')
 {
  $data = $this->path->all_path();
  $this->load->view('auth/header',$data);
  $logged_user_id = $this->session->userdata('user_id');
  if($logged_user_id)
  {
  $data['logged_user_id']=$logged_user_id;
  }
  else
  {
  $data['logged_user_id']=0; 
  }
  $data['educ_level'] = '';
  $redirect_current_url = $this->config->site_url().$this->uri->uri_string();
  $data['my_college'] = $this->users->my_collage_of_user($id);
  $data['detail_visited_user'] = $this->users->fetch_profile($id);
  if(empty($data['detail_visited_user']))
  {
  redirect(base_url());
  }
  $data['featured_question_visited_profile'] = $this->quest_ans_model->latest_question_profile();
  $cur_educ_lvl = $data['detail_visited_user']['curr_educ_level'];
  $area_interest = $data['detail_visited_user']['prog_parent_id'];
  $data['educ_level'] = $this->users->fetch_educ_level_by_id($cur_educ_lvl);
  $data['area_interest'] = $this->users->fetch_area_interest_by_id($area_interest);
  $data['area_interest'] = $this->users->fetch_area_interest_by_id($area_interest);
  $data['follower_detail'] = $this->users->get_followers_detail_of_person($id);
  $data['my_collage_of_user_visited'] = $this->users->my_collage_of_user($id);
  $data['send_message_to_user_error'] = 0;
  $data['follow_own'] = 0;
  $logged_user_id == $id ? $data['follow_own'] = 1 : $data['follow_own'] = 0;
  $add_follower = array(
   'followed_to_person_id' => $id,
   'followed_by' => $logged_user_id
   );
   
  $data['is_already_follow'] = $this->users->check_is_already_followed_to_person($add_follower);
  //print_r($data['follower_detail']);
  
  if($this->input->post('follow_now')  && $logged_user_id)
  {
   $data['user_follow_university'] = $this->users->add_followers_to_person($add_follower);
   redirect($redirect_current_url);
  }
  else if($this->input->post('follow_now'))
  {
   redirect('login');
  }

  if($this->input->post('unfollow_now') && $logged_user_id)
  {
   $data['unjoin_now_success'] = $this->users->unfollow_now_to_user($add_follower);
   redirect($redirect_current_url);
  }
  else if($this->input->post('follow_now'))
  {
   redirect('login');
  }
  
  $data['send_message_to'] = 0 ;
  if($this->input->post('btn_msg_send'))
  {
   $this->form_validation->set_rules('subject_message','Subject box','trim|xss_clean|required');
   $this->form_validation->set_rules('message_body','Message box','trim|xss_clean|required');
   if($this->form_validation->run())
   {
    $sender_id = $this->session->userdata('user_id');
    $recipent_id = $id;
    $msg = array(
    'sender_id'=>$sender_id,
    'recipent_id'=>$recipent_id,
    'subject'=> $this->input->post('subject_message'),
    'body'=> $this->input->post('message_body'),
    );
    //print_r($msg);
    $data['send_message_to'] = $this->users->send_message_to_user($msg);
   }
   else{
   $errors = $this->tank_auth->get_error_message();
     foreach ($errors as $k => $v) $data['errors'][$k] = $this->lang->line($v);
   $data['send_message_to_user_error'] = 1;
   }
  }
  $this->load->view('auth/visit-user-profile',$data);
  $this->load->view('auth/footer',$data);
  
 }
	
	
	
	
	function spot_admission_events($page='')
	{
		$data = $this->path->all_path();
		$this->load->view('auth/header',$data);
		$cat='spot_admission';
		$data['events'] = $this->frontmodel->fetch_events($cat,$page);
		//print_r($data['events']);
		$this->load->view('auth/spot_admission_events',$data);
		$this->load->view('auth/footer',$data);
	}
	
	function fairs_events($page='')
	{
		$data = $this->path->all_path();
		$this->load->view('auth/header',$data);
		$cat='fairs';
		$data['events'] = $this->frontmodel->fetch_events($cat,$page);
		//print_r($data['events']);
		$this->load->view('auth/fairs_events',$data);
		$this->load->view('auth/footer',$data);
	}
	
	function Counselling_events($page='')
	{
		$data = $this->path->all_path();
		$this->load->view('auth/header',$data);
		$cat='others_alumuni';
		$data['events'] = $this->frontmodel->fetch_events($cat,$page);
		//print_r($data['events']);
		$this->load->view('auth/Counselling_events',$data);
		$this->load->view('auth/footer',$data);
	}
	
	function news($page='')
	{
		$data = $this->path->all_path();
		$data['keyword_content'] = "Univesity News";
		$data['description_content'] = "List Of Univesity News";
		$data['header_title'] = 'News | Meet Universities';
		$this->load->view('auth/header',$data);
		$data['news'] = $this->frontmodel->fetch_news($page);
		$data['popular_news'] = $this->frontmodel->popular_news();
		$this->load->view('auth/news',$data);
		$this->load->view('auth/footer',$data);
	}
	function blog($page='')
	{
		
		$data = $this->path->all_path();
		
		$this->load->view('auth/header',$data);
		$this->load->model('blogmodel');
		$data['blog_detail']=$this->blogmodel->get_blog_detail();
		
		$this->load->view('auth/blog',$data);
		$this->load->view('auth/footer',$data);
	}
	function campaign()
	{
		$data = $this->path->all_path();
		$data['campaign_page']=1;
		$this->load->view('auth/header',$data);
		$this->load->view('auth/campaign',$data);
		$this->load->view('auth/footer',$data);
		
	}
	function allblogpost($page='')
	{
		$data=$this->path->all_path();
		$this->load->view('auth/header',$data);
		$this->load->view('auth/allblogpost',$data);
		$this->load->view('auth/footer',$data);
	}
	function articles($page='')
	{
		
		$data = $this->path->all_path();
		$data['keyword_content'] = "Univesity Articles";
		$data['description_content'] = "List Of Univesity Articles";
		$data['header_title'] = 'Articles | Meet Universities';
		$this->load->view('auth/header',$data);
		$data['articles'] = $this->frontmodel->fetch_articles($page);
		$data['popular_articles'] = $this->frontmodel->popular_articles();
		$this->load->view('auth/articles',$data);
		$this->load->view('auth/footer',$data);
	}
	
	function about_us()
	{
		$data = $this->path->all_path();
		$data['header_title'] = 'About us | Meet Universities';
		$this->load->view('auth/header',$data);
		$this->load->view('about_us',$data);
		$this->load->view('auth/footer',$data);
	}
	
	function contact_us()
	{
		$data = $this->path->all_path();
		$data['header_title'] = 'Contact | Meet Universities';
		$this->load->view('auth/header',$data);
		if($this->input->post('contact_submit'))
		{
			$contact_submit_condition = array(
			'contact_name'=>$this->input->post('contact_name'),
			'contact_email'=>$this->input->post('contact_email'),
			'contact_phone'=>$this->input->post('contact_phone'),
			'contact_organization'=>$this->input->post('contact_organization'),
			'contact_message'=>$this->input->post('contact_message')
			);
			$message="These are following details of Person Contacted to Meetuniversities<br><br> Name:-    .".$contact_submit_condition['contact_name']."<br> Email:-     ".$contact_submit_condition['contact_email']."<br> Phone No.:-     ".$contact_submit_condition['contact_phone']."<br> Message:-      ".$contact_submit_condition['contact_organization']." ".$contact_submit_condition['contact_message'];
			$headers  = "From: MeetUniversities.com <no-reply@meetuniv.com>\r\n"; 
			//$headers .= "Bcc: debal@webinfomart.com,deepak@webinfomart.com\r\n"; 
			$headers .= "Content-type: text/html\r\n"; 
			//mail($email, $subject, $message, $headers); 
			$config['protocol'] = $this->config->item('mail_protocol');
			$config['smtp_host'] = $this->config->item('smtp_server');
			$config['smtp_user'] = $this->config->item('smtp_user_name');
			$config['smtp_pass'] = $this->config->item('smtp_pass');
			$config['mailtype'] = 'html';
			$this->email->initialize($config); 
			$this->email->from('info@meetuniversities.com', 'Meet Universities');
			$this->email->to('kapoorn@gmail.com');
			$this->email->bcc('debal@webinfomart.com');
			$this->email->subject('Contact Information');
			$this->email->message($message);
			$this->email->send();
			$data['submit_contact'] = $this->frontmodel->contact_form_submit($contact_submit_condition);
			$this->session->set_flashdata('contact_suc','1');
			redirect('contact_us');
		}
		$this->load->view('contact_us',$data);
		$this->load->view('auth/footer',$data);
	}
	
	//fetch all college maps
	function fetch_maps_of_all_colleges()
	{
		$map_addresses=$this->input->post('map_address');
		$data['locations']=$this->users->fetch_map_of_colleges($map_addresses);
		$this->load->library('GMap');
		$this->gmap->GoogleMapAPI();
		$cnt_pos_univ = count($data['locations']);
		$this->gmap->setMapType('map');
		$marker = array();				
		for($pos = 0; $pos < $cnt_pos_univ; $pos++)
		{
		$marker = explode("||",$data['locations'][$pos]);
	    $this->gmap->addMarkerByAddress($marker[0],$marker[1],$marker[2]);
		}
		$data['headerjs'] = $this->gmap->getHeaderJS();
		$data['headermap'] = $this->gmap->getMapJS();
		$data['onload'] = $this->gmap->printOnLoad();
		$data['map'] = $this->gmap->printMap();
		$data['sidebar'] = $this->gmap->printSidebar();
		$this->load->view('ajaxviews/google_map',$data);
	}
	
	function events()
	{
		$data = $this->path->all_path();
		$data['keyword_content'] = "universities events,university events in india,study abroad.";
		$data['description_content'] = "List of universities events,university events in india,study abroad.";
		//$data['header_title'] = 'Events | Meet Universities';
		$data = $this->path->all_path();
		$current_url=$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$change_url=explode("events/",$current_url);
		if(count($change_url)>1)
		{
		if($change_url[1]=='')
		$current_url=$data['base'].'events';
		}
		$data['city_name_having_event'] = $this->leadmodel->city_name_having_event();
		//$data['country_name_having_event'] = $this->leadmodel->country_name_having_event();
		$data['country_name_having_event'] = $this->leadmodel->dest_country_name_conducting_event();
		//$data['dest_country_name_conducting_event'] = $this->leadmodel->dest_country_name_conducting_event();
		//print_r($data['dest_country_name_conducting_event']);
		$data['events'] = $this->searchmodel->all_event_filteration($current_url);
		$data['header_title']=$data['events']['title'];
		$data['events_for_calendar'] = $this->frontmodel->fetch_events_for_calendar();
		$this->load->view('auth/header',$data);
		$this->load->view('auth/events',$data);
		$this->load->view('auth/footer',$data);
	}
	
	/*function advt_events()
	{
		$data = $this->path->all_path();
		if($this->uri->segment(3)!=0)
		{
			$data['user_info']=$this->leadmodel->campaign_visits();
		}
		$data['events_for_calendar'] = $this->frontmodel->fetch_events_date();
		$data['datewise_event'] = $this->leadmodel->event_datewise();
		$this->load->view('auth/header',$data);
		$this->load->view('auth/add_events',$data);
		$this->load->view('auth/footer',$data);
	}*/
	function date_event()
	{
		$data = $this->path->all_path();		
		$data['events_for_calendar'] = $this->frontmodel->fetch_events_for_calendar();
		$data['date_event'] = $this->leadmodel->event_date();
		$this->load->view('ajaxviews/datewiseevents',$data);
	}
	function advt_event_register()
	{
				
		$register = $this->frontmodel->advt_event_register();
		$fullname=$this->input->post('event_fullname');
		$reff_by=$this->input->post('event_email');
		$phone = $this->input->post('event_phone');
		$uri=$this->input->post('uri_seg');
		if($uri=='nc' || $uri=='as')
		{		
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email',$reff_by);
			$get_result = $this->db->get();
			$event_detail_users = $get_result->row_array();
			if($get_result->num_rows() <1)			
			{
				$password=rand(14543423,64543423);
				$hashed_password=$this->tank_auth->genrate_hash_passsword($password);
				$site_user_data = array(
				'fullname'	=> $fullname,				
				'level'     => '1',
				'password'	=> $hashed_password,
				'email'		=> $reff_by,				
				'user_type' => 'site_user'
				);
				$site_user_data['new_email_key'] = md5(rand().microtime());				
	
				if($this->db->insert('users',$site_user_data))
				{		
					$current_user_table_insert_id = $this->db->insert_id();
					$user_profile_clause = array(
					'user_id'=>$current_user_table_insert_id,
					'mob_no'=>$phone,
					'full_name'=>$fullname,
					'email_as_lead'=>$reff_by
					);					
					$this->db->insert('user_profiles',$user_profile_clause);
					$this->session->set_flashdata('success',1);
			
				}
					$data_email = $this->path->all_path();
					$data_email['password']=$password;
					$data_email['fullname']=$fullname;
					$new_email_key=$this->users->get_new_email_key_by_userid($current_user_table_insert_id);
					$data_email['new_email_key']=$new_email_key['new_email_key'];
					$data_email['user_id']=$current_user_table_insert_id;
					$email_body = $this->load->view('auth/new_signup_email',$data_email,TRUE);
					echo $email_body;exit;
					$this->load->library('email');
					$config['protocol'] = $this->config->item('mail_protocol');
					$config['smtp_host'] = $this->config->item('smtp_server');
					$config['smtp_user'] = $this->config->item('smtp_user_name');
					$config['smtp_pass'] = $this->config->item('smtp_pass');
					$config['mailtype'] = 'html';
					$this->email->initialize($config);
					//$this->email->set_newline("\r\n");
					$this->email->from('info@meetuniversities.com', 'Meet Universities');
					$this->email->to($reff_by);
					$this->email->subject('Welcome to Global University Events Listing | MeetUniversities.com');
					$message = $email_body ;
					$this->email->message($message);
					$this->email->send();
					
			}
			
		}
		
		
		if($register)
			{
				//$fullname=str_replace(' ','_',$fullname);
				redirect('thankyou/'.$fullname.'/'.$reff_by.'/'.$phone);
			}
		
		
	}
	function thankupage($name='',$email,$phone)
	{
		
		$data = $this->path->all_path();
		$data['fullname']=$name;
		$data['email']=$email;
		$this->load->view('auth/header',$data);
		$this->load->view('auth/success_suggestfrnds',$data);
		$this->load->view('auth/footer',$data);
	}
	function send_invites()
	{	
		
	$config['protocol'] = $this->config->item('mail_protocol');
	 $config['smtp_host'] = $this->config->item('smtp_server');
	 $config['smtp_user'] = $this->config->item('smtp_user_name');
	 $config['smtp_pass'] = $this->config->item('smtp_pass');
	 $this->email->initialize($config);
	if(!empty($_POST['checkbox'])) 
	{
		$chk_arr=$_POST['checkbox'];
		foreach($chk_arr as $check) {
			$reff_by=$_POST['email'];
			$fullname=str_replace('%20',' ',$_POST['fullname']);			
			$to = $check;
			$subject = $fullname." sent you a message.";
			$message = "<html><body><img style='float:left;' src='http://meetuniversities.com/images/logo.png' /><div style='float:right;'>Universities | Events | Scholarship</div><div style='clear:both'></div><br/> Hi,<br/>How are you?<br/><br/> I thought you'd like www.meetuniversities.com; it has the largest listing of university events & plenty of free information with regard to study options abroad .<br/><br/> MeetUniversities has an awesome interface to explore, get in touch and connect with universities directly.<br/><br/> Hurry up! Grab a free ebook for studying abroad by simply joining them. <br/><br/> Come join. I have also joined. <br/><br/> Thanks</body></html>";
			$from = "info@meetuniversities.com";	
			$this->email->from('info@meetuniversities.com',$fullname);
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($message);
			$this->email->send();
			$this->frontmodel->referral_email($reff_by,$to);			
			
		}
		redirect('success');
			
	}
	}
	function success()
	{
		$data = $this->path->all_path();		
		$this->load->view('auth/header',$data);
		$this->load->view('auth/success',$data);
		$this->load->view('auth/footer',$data);
	}
	
	function all_events_search()
	{
		$current_url=$this->input->post('current_url');
		$data = $this->path->all_path();
		$data['events'] = $this->searchmodel->all_event_filteration($current_url);
		$title=$data['events']['title'];
		if($data['events']!=0)
		{
			$events_list=$this->load->view('ajaxviews/events_search',$data);
			$total_univ=$data['events']['total_res'];
			$per_page_res=$data['events']['per_page_res'];
			echo $title.'!@#$%^&*'.$total_univ.'!@#$%^&*'.$per_page_res.'!@#$%^&*'.$events_list;
		}
	}
	function all_events_paging()
	{
		
		$current_url=$this->input->post('current_url');
		echo $current_url;
		$data = $this->path->all_path();
		$data['events'] = $this->searchmodel->all_event_filteration($current_url);
		if($data['events']!=0)
		{
			$events_list=$this->load->view('ajaxviews/show_event_paging',$data);
			$per_page_res=$data['events']['per_page_res'];
			echo $per_page_res.'!@#$%^&*'.$events_list;
		}
	}
   function subdomain()
   {
    $this->db->select('*');
	$this->db->from('university');
	$query=$this->db->get();
	$univ=$query->result_array();
	foreach($univ as $univs)
	{
	//$univ_name=trim($univs['univ_name']);
	//$univ_name=str_replace(' ','',$univ_name);
	//$this->db->query("update university set univ_name = '".$univ_name."' where univ_id='".$univs['univ_id']."'");
	}	
   }	
	function auto_count_register_user()
	{
		$data['user_count'] = $this->frontmodel->count_register_user_by_ajax();
		echo $data['user_count'][0]['register_user_counter'];
		//$this->load->view('auth/event_register_user_counter',$data);
	}

   
   
   //ie7 not working page
   
   function use_higer_browser()
   {
    $data = $this->path->all_path();
 	$this->load->view('ie7_nf',$data); 
   }
   
   function savepic()
   {
	$email='sumitmunjal1@sdasdasdasddf.com';
   // $url = 'http://inchoo.net/wp-content/uploads/2011/01/fbconnect.gif';
	//$img = '../abcde.gif';
	//file_put_contents($img, file_get_contents($url));
	
    $email = htmlspecialchars(stripslashes(strip_tags($email))); //parse unnecessary characters to prevent exploits
    
    if ( eregi ( '[a-z||0-9]@[a-z||0-9].[a-z]', $email ) ) 
	{ //checks to make sure the email address is in a valid format
    $domain = explode( "@", $email ); //get the domain name
        if ( @fsockopen ($domain[1],80,$errno,$errstr,3)) 
		{
            //if the connection can be established, the email address is probably valid
			echo ":)";
            return true;
        } else 
		{
		echo ":(";
            return false; //if a connection cannot be established return false
        }
    return false; //if email address is an invalid format return false
}
   }
   
  //to delete in feb
	function bcEvent()
	{	
		$this->load->library('user_agent');
		/* if ($this->agent->is_browser())
		{
			$agent = $this->agent->browser().' '.$this->agent->version();
		} */		
		
		$data = $this->path->all_path();		
		if($this->uri->segment(3)!=0)
		{
			$data['user_info']=$this->frontmodel->campaign_visits();
			$this->ci->session->set_userdata(array(									
									'current_user_id'=> $data['user_info'],										
							));
							
		}
		if($this->uri->segment(1)=='bpp_fair')
		{
			$this->load->view('auth/bcfair/bppfair',$data);
		}
		elseif ($this->agent->is_mobile())
		{
			//$agent = $this->agent->mobile();
			$this->load->view('auth/bcfair/mob_landing',$data);
		}
		else
		{
		$this->load->view('auth/bcfair/landing',$data);
		}
	}
	/***********code for new campaign page is added to meetuniversitiess.com added by deepak*************/
	function campaign_register()
	{
		$data=$this->path->all_path();
		
		/*exist code placeed here*/
		
		$exist=$this->frontmodel->checkMobile_inleads_new();
		$emailexist=$this->frontmodel->checkemail_inleads_new();
		
		if($exist>=1 || $emailexist>=1)
		{//$this->frontmodel->retried();
			
			if($exist>=1)
			{
				echo 'allready_exist';
				exit;
			}
			if($emailexist>=1)
			{
				echo 'allready_exist';
				exit;
			}
		}
		else
		{
			$pwd='letsrock';
			$random_code=rand(10000,99999);			
			$content=file_get_contents("http://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=".$pwd."&send=meetus&dest=91".$this->input->post('mobile')."&msg=Welcome%20to%20meetuniversities.com.%20Get%20connected%20with%20your%20dream%20university.%20Please%20enter%20event%20code%20".$random_code."%20to%20continue%20with%20the%20online%20registration%20process.");	
			
			
			$insert_id=$this->frontmodel->insert_into_leads_new($random_code);
			
			$fullname=$this->input->post('name');
			$reff_by=$this->input->post('email');
			$phone = $this->input->post('mobile');
			$campaign=$this->input->post('campaign');
			$campaign_csv=$this->input->post('campaign_csv');
			$uri=$this->input->post('uri');
			
			$this->ci->session->set_userdata(array(									
									'u_id'=>$insert_id,
									'ver_code'=>$random_code,
									'campaign'=>$campaign,
									'campaign_csv'=>$campaign_csv,
									'email'=>$reff_by,
									'phone'=>$phone
							));
			
			echo "next_action";
			//start
			/*  $data['name']=$fullname;
			$data['email']=$reff_by;
			$data['city']=$this->input->post('city');
			$this->load->library('parser');
			$message_email =  $this->parser->parse('auth/bcfair/event_detail_mail', $data, TRUE);
			//echo $message_email;exit;
			$config['protocol'] = $this->config->item('mail_protocol');
			$config['smtp_host'] = $this->config->item('smtp_server');
			$config['smtp_user'] = $this->config->item('smtp_user_name');
			$config['smtp_pass'] = $this->config->item('smtp_pass');
			$config['mailtype'] = 'html';
			$this->email->initialize($config); 
			$this->email->from('info@meetuniversities.com', 'Meet Universities');
			$this->email->to($reff_by);
			//$this->email->bcc('kapoorn@gmail.com');
			$this->email->subject('Event Registration');
			$message = $message_email ;
			$this->email->message($message);
			$this->email->send(); */
		} 
		
			
			 
			
		
		
		
	}
	/******************************end of code****************************/
	function ev_register()
	{
		$data = $this->path->all_path();
		$exist=$this->frontmodel->checkMobile();
		$emailexist=$this->frontmodel->checkemail();
		//echo $exist;exit;
		if($exist>=1 || $emailexist>=1)
		{//$this->frontmodel->retried();
			
			if($exist>=1)
			{
				echo 'exist';
			}
			if($emailexist>=1)
			{
				echo 'email';
			}
		}
		else
		{						
			$pwd='letsrock';
			$random_code=rand(10000,99999);			
			//$content=file_get_contents("http://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=".$pwd."&send=meetus&dest=91".$this->input->post('mobile')."&msg=Welcome%20to%20meetuniversities.com.%20Get%20connected%20with%20your%20dream%20university.%20Please%20enter%20event%20code%20".$random_code."%20to%20continue%20with%20the%20online%20registration%20process.");			
			
			$insert_id=$this->frontmodel->bcfair();
				
			echo $fullname=$this->input->post('name');
			echo $reff_by=$this->input->post('email');
			echo $phone = $this->input->post('mobile');
			echo $uri=$this->input->post('uri');
			
			//start
			$data['name']=$fullname;
			$data['email']=$reff_by;
			$data['city']=$this->input->post('city');
			$this->load->library('parser');
			$message_email =  $this->parser->parse('auth/bcfair/event_detail_mail', $data, TRUE);
			//echo $message_email;exit;
			$config['protocol'] = $this->config->item('mail_protocol');
			$config['smtp_host'] = $this->config->item('smtp_server');
			$config['smtp_user'] = $this->config->item('smtp_user_name');
			$config['smtp_pass'] = $this->config->item('smtp_pass');
			$config['mailtype'] = 'html';
			$this->email->initialize($config); 
			$this->email->from('info@meetuniversities.com', 'Meet Universities');
			$this->email->to($reff_by);
			$this->email->bcc('kapoorn@gmail.com');
			$this->email->subject('Event Registration');
			$message = $message_email ;
			$this->email->message($message);
			$this->email->send(); 
			
		
		//end
				
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email',$reff_by);
			$get_result = $this->db->get();
			//$event_detail_users = $get_result->row_array();
			if($get_result->num_rows() <1)			
			{
				$password=rand(14543423,64543423);
				$hashed_password=$this->tank_auth->genrate_hash_passsword($password);
				$site_user_data = array(
				'fullname'	=> $fullname,				
				'level'     => '1',
				'password'	=> $hashed_password,
				'email'		=> $reff_by,				
				'user_type' => 'site_user'
				);
				$site_user_data['new_email_key'] = md5(rand().microtime());				
	
				if($this->db->insert('users',$site_user_data))
				{		
					$current_user_table_insert_id = $this->db->insert_id();
					$user_profile_clause = array(
					'user_id'=>$current_user_table_insert_id,
					'mob_no'=>$phone,
					'full_name'=>$fullname,
					'email_as_lead'=>$reff_by
					);					
					$this->db->insert('user_profiles',$user_profile_clause);
					$this->session->set_flashdata('success',1);
			
				}
					$data_email = $this->path->all_path();
					$data_email['password']=$password;
					$data_email['fullname']=$fullname;
					$new_email_key=$this->users->get_new_email_key_by_userid($current_user_table_insert_id);
					$data_email['new_email_key']=$new_email_key['new_email_key'];
					$data_email['user_id']=$current_user_table_insert_id;
					$email_body = $this->load->view('auth/new_signup_email',$data_email,TRUE);
					//echo $email_body;exit;
					$this->load->library('email');
					$config['protocol'] = $this->config->item('mail_protocol');
					$config['smtp_host'] = $this->config->item('smtp_server');
					$config['smtp_user'] = $this->config->item('smtp_user_name');
					$config['smtp_pass'] = $this->config->item('smtp_pass');
					$config['mailtype'] = 'html';
					$this->email->initialize($config);
					//$this->email->set_newline("\r\n");
					$this->email->from('info@meetuniversities.com', 'Meet Universities');
					$this->email->to($reff_by);
					$this->email->subject('Welcome to Global University Events Listing | MeetUniversities.com');
					$message = $email_body ;
					$this->email->message($message);
					$this->email->send();
					
			}
			
		
		
		$this->ci->session->set_userdata(array(									
									'u_id'=>$insert_id,
									'ver_code'=>$random_code	
							));
							
			echo '1';
		}
		
		
	}
	function verify_leads_new()
	{	
		$data = $this->path->all_path();		
		$code=$this->ci->session->userdata('ver_code');
		$user_code=$this->input->post('code');
		if($user_code==$code)
		{
			//$this->frontmodel->bcfair();
			$this->frontmodel->ver_mobile();
			echo 'valid';
		}			
	}
	function verify()
	{	
		$data = $this->path->all_path();		
		$code=$this->ci->session->userdata('ver_code');
		$user_code=$this->input->post('code');
		if($user_code==$code)
		{
			//$this->frontmodel->bcfair();
			$this->frontmodel->ver_mobile();
			echo 'valid';
		}			
	}
	function thanku_new()
	{
		$data = $this->path->all_path();
		$data['campaign_page']=1;
		 $this->load->view('auth/header',$data);
		//echo $this->ci->session->userdata('campaign_csv');
		$data['u_id']=$this->ci->session->userdata('u_id');
		$data['email']=$this->ci->session->userdata('email');
		$data['campaign']=$this->ci->session->userdata('campaign');
		$data['campaign_csv']=$this->ci->session->userdata('campaign_csv');
		/* echo "this is lead id".$this->ci->session->userdata('u_id')."<br>";
		echo "this is email".$this->ci->session->userdata('email')."<br>";
		echo "this is campaign".$this->ci->session->userdata('campaign')."<br>";
		echo "this is campaign_csv".$this->ci->session->userdata('campaign_csv')."<br>"; */
		$this->load->view('auth/thanku_new',$data);
		$this->load->view('auth/footer',$data); 
	
	}
	function thanku()
	{
		$data = $this->path->all_path();
		if ($this->agent->is_mobile())
		{
			$this->load->view('auth/bcfair/mob_thanku',$data);
		}
		else
		{
			$this->load->view('auth/bcfair/thanku',$data);
		}
		/* $data['logos']='';		
		$city=$this->ci->session->userdata('city');
		//$city='hydrabad';
		if($city=='hyderabad')
		{		
			$univ=array('7','11','12','18','32','33','51','54','56','71','74','87','89','107','115','122','132','140','149','151','160','169','183','191','237','225','228','232','244','247','266','274','281','288','294','298','362');
			$data['logos']=$this->frontmodel->getlogo($univ);
		}
		elseif($city=='bangalore')
		{
			$univ=array('2','3','7','11','12','18','20','23','30','32','33','41','51','54','59','71','87','95','99','101','103','105','107','115','122','128','130','132','138','140','149','151','160','162','164','165','169','175','183','191','209','237','224','225','228','242','246','247','250','271','272','275','276','277','287','294','310');
			$data['logos']=$this->frontmodel->getlogo($univ);
		}
		elseif($city=='pune')
		{
			$univ=array('3','7','11','12','18','20','23','24','32','33','51','54','71','82','87','95','105','107','122','130','132','138','140','149','151','160','164','165','183','191','206','237','224','225','226','242','246','247','250','266','274','275','276','287','294');
			$data['logos']=$this->frontmodel->getlogo($univ);
		}
		elseif($city=='chennai')
		{
			$univ=array('2','3','7','11','18','19','20','23','30','32','34','51','54','59','71','82','87','95','99','101','107','114','115','122','128','129','130','132','138','140','149','151','156','160','162','165','169','175','183','191','209','237','224','225',' 226','228','242','244','246','247','271','274','275','276','277','281','287','78','290','294','310','312','362');
			$data['logos']=$this->frontmodel->getlogo($univ);
		}
		if($this->input->post())
		{//echo 'hi';exit;
			$reg=$this->frontmodel->registred();
			redirect("");
			
		} */
		
		
	}
function download_counter()
{	
	$this->frontmodel->count_download();
	$this->load->helper('download');
	$count_my_page =("http://meetuniversities.com/spf/spf.pdf");
	$data = file_get_contents("http://meetuniversities.com/spf/spf.pdf");	
	$name = 'spf.pdf';
	force_download($name, $data);
	
}	
function customerror()
{$data = $this->path->all_path();
$this->load->view('auth/header',$data);
$this->load->view('auth/404page',$data);
$this->load->view('auth/footer',$data);
	
}
function mailing()
{//$maillist=array('kulbir@webinfomart.com','debal@meetuniversities.com','nitin@meetuniversities.com');
	$res=$this->db->query("select email from lead_data where email!='' union select email from users where email!=''");
	$maillist=$res->result_array();
		
	foreach($maillist as $list)
	{	
		$to=$list['email'];
		$info = $this->path->all_path();
		$email_body=$this->load->view('auth/email_templates/newsletter',$info,TRUE);			
		$this->email->set_newline("\r\n");
		$config['protocol'] = $this->config->item('mail_protocol');
		$config['smtp_host'] = $this->config->item('smtp_server');
		$config['smtp_user'] = $this->config->item('smtp_user_name');
		$config['smtp_pass'] = $this->config->item('smtp_pass');
		$this->email->initialize($config);    
		$this->email->from('info@meetuniversities.com', 'MeetUniversities.com');		
		$this->email->to($to);				
		$this->email->subject("Looking to give TOEFL or IELTS! Don't miss this");
		$message = $email_body ;
		$this->email->message($message);
		$this->email->send();
	}
}

function header($page='')      // to get header for iframe of php melody template/header.tpl file 
{
	$data = $this->path->all_path();
	$data['keyword_content'] = "Univesity Videos";
	$data['description_content'] = "List Of Univesity Videos";
	$data['header_title'] = 'Videos | Meet Universities';
	$this->load->view('auth/header',$data);
	/* $data['articles'] = $this->frontmodel->fetch_articles($page);
	$data['popular_articles'] = $this->frontmodel->popular_articles();
	$this->load->view('auth/articles',$data);
	$this->load->view('auth/footer',$data); */
}
function footer($page='')      // to get header for iframe of php melody template/header.tpl file 
{
	$data = $this->path->all_path();	
	$this->load->view('auth/footer2',$data);
	/* $data['articles'] = $this->frontmodel->fetch_articles($page);
	$data['popular_articles'] = $this->frontmodel->popular_articles();
	$this->load->view('auth/articles',$data);
	$this->load->view('auth/footer',$data); */
}
function bpp_ev_register()
	{
		$data = $this->path->all_path();
		$exist=$this->frontmodel->checkMobile();
		//echo $exist;exit;
		$emailexist=$this->frontmodel->checkemail();
		//echo $exist;exit;
		if($exist>=1 || $emailexist>=1)
		{
			$this->frontmodel->retried($exist,$emailexist);
			if($exist>=1)
			{
				echo 'exist';
			}
			if($emailexist>=1)
			{
				echo 'email';
			}
		}
		else
		{						
			$pwd='letsrock';
			$random_code=rand(10000,99999);			
			$content=file_get_contents("http://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=".$pwd."&send=meetus&dest=91".$this->input->post('mobile')."&msg=Welcome%20to%20meetuniversities.com.%20Get%20connected%20with%20your%20dream%20university.%20Please%20enter%20event%20code%20".$random_code."%20to%20continue%20with%20the%20online%20registration%20process.");			
			//$content=file_get_contents("http://vapi.unicel.in/voiceapi?request=voiceobd&uname=meetuni&pass=letsrock&obdid=7&type=D&dest=919654336808&msgtype=P&msg=welcome.wav");			
			
			
			
			
				
			$fullname=$this->input->post('name');
			$reff_by=$this->input->post('email');
			$phone = $this->input->post('mobile');
			$uri=$this->input->post('uri');
			$day=$this->input->post('dd');
			$month=$this->input->post('mm');
			$year=$this->input->post('yy');
			$intake=$this->input->post('intake');
			$course=$this->input->post('course');
			$program=$this->input->post('program');
			
			//start
			$data['name']=$fullname;
			$data['email']=$reff_by;			
			$this->load->library('parser');
			$message_email =  $this->parser->parse('auth/bcfair/bpp_event_detail_mail', $data, TRUE);
			//echo $message_email;exit;
			$config['protocol'] = $this->config->item('mail_protocol');
			$config['smtp_host'] = $this->config->item('smtp_server');
			$config['smtp_user'] = $this->config->item('smtp_user_name');
			$config['smtp_pass'] = $this->config->item('smtp_pass');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->from('info@meetuniversities.com', 'Meet Universities');
			$this->email->to($reff_by);
			$this->email->bcc('kapoorn@gmail.com');
			$this->email->subject('Event Registration');
			$message = $message_email ;
			$this->email->message($message);
			$this->email->send(); 
			
		
		//end
				
			$this->db->select('id');
			$this->db->from('users');
			$this->db->where('email',$reff_by);
			$get_result = $this->db->get();
			//$event_detail_users = $get_result->row_array();
			if($get_result->num_rows() <1)			
			{
				$password=rand(14543423,64543423);
				$hashed_password=$this->tank_auth->genrate_hash_passsword($password);
				$site_user_data = array(
				'fullname'	=> $fullname,				
				'level'     => '1',
				'password'	=> $hashed_password,
				'email'		=> $reff_by,				
				'user_type' => 'site_user'
				);
				$site_user_data['new_email_key'] = md5(rand().microtime());				
	
				if($this->db->insert('users',$site_user_data))
				{		
					$current_user_table_insert_id = $this->db->insert_id();
					$user_profile_clause = array(
					'user_id'=>$current_user_table_insert_id,
					'mob_no'=>$phone,
					'full_name'=>$fullname,
					'email_as_lead'=>$reff_by
					);					
					$this->db->insert('user_profiles',$user_profile_clause);
					$this->session->set_flashdata('success',1);
			
				}
					$data_email = $this->path->all_path();
					$data_email['password']=$password;
					$data_email['fullname']=$fullname;
					$new_email_key=$this->users->get_new_email_key_by_userid($current_user_table_insert_id);
					$data_email['new_email_key']=$new_email_key['new_email_key'];
					$data_email['user_id']=$current_user_table_insert_id;
					$email_body = $this->load->view('auth/new_signup_email',$data_email,TRUE);
					//echo $email_body;exit;
					//$this->load->library('email');
					$config['protocol'] = $this->config->item('mail_protocol');
					$config['smtp_host'] = $this->config->item('smtp_server');
					$config['smtp_user'] = $this->config->item('smtp_user_name');
					$config['smtp_pass'] = $this->config->item('smtp_pass');
					$config['mailtype'] = 'html';
					$this->email->initialize($config);
					//$this->email->set_newline("\r\n");
					$this->email->from('info@meetuniversities.com', 'Meet Universities');
					$this->email->to($reff_by);
					$this->email->subject('Welcome to Global University Events Listing | MeetUniversities.com');
					$message = $email_body ;
					$this->email->message($message);
					$this->email->send();
					
			}
			else
			{
				$users = $get_result->row_array();				
				$current_user_table_insert_id=$users['id'];
			}
		
		
		$this->ci->session->set_userdata(array(	
									'user_table_id'=>$current_user_table_insert_id,
									'ver_code'=>$random_code,	
									'mobile'=>$this->input->post('mobile'),	
							));
		$insert_id=$this->frontmodel->bppfair();					
					$this->ci->session->set_userdata(array(									
									'u_id'=>$insert_id
									));	
			echo '1';
		}
		
		
	}
	
	function bpp_thanku($mobno='')
	{
		$data = $this->path->all_path();
		$data['mob_no']=$mobno;
		if ($this->agent->is_mobile())
		{
			$this->load->view('auth/bcfair/mob_thanku',$data);
		}
		else
		{
			$this->load->view('auth/bcfair/bpp_thanku',$data);
		}
		
		
		
	}
	function resendmsg()
	{ $mobile=$this->session->userdata('mobile');
		$pwd='letsrock';
			$random_code=rand(10000,99999);			
			$content=file_get_contents("http://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=".$pwd."&send=meetus&dest=91".$mobile."&msg=Welcome%20to%20meetuniversities.com.%20Get%20connected%20with%20your%20dream%20university.%20Please%20enter%20event%20code%20".$random_code."%20to%20continue%20with%20the%20online%20registration%20process.");			
			
		$this->ci->session->set_userdata(array(									
									'ver_code'=>$random_code	
							));
	}
}
/* End of file auth.php */
/* Location: ./application/controllers/auth.php */