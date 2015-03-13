<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Psychometric
{
	function __construct()
	{
		$this->ci = & get_instance();
		$this->ci->load->database();
	}
	function checkAuthentication()
	{
		$username = $this->ci->input->get('uname');
		$password = $this->ci->input->get('pass');
		$name = $this->ci->input->get('name');
		$email = $this->ci->input->get('email');
		//echo $name;exit;
		$data = $this->ci->db->get_where('source',array('userName'=>$username,'password'=>$password));
		//echo $data->row()->userName;exit;
		if($data->num_rows())
		{
			$source = $data->row()->id;
			$this->registerApiUser($name,$email,$source);
			return true;
		}
		return false;
	}
	function registerApiUser($name,$email,$source)
	{
		//echo $source;exit;
		$email_activation = $this->ci->config->item('email_activation', 'tank_auth');
		$result = $this->ci->db->get_where('users',array('email'=>$email));
		//echo $result->row()->fullname;exit;
		if($result->num_rows())
		{
		//echo $result->row()->id;//exit;
		$data['login_by_email'] = $this->ci->config->item('login_by_email', 'tank_auth');
		/* $this->ci->tank_auth->login(
						$email,
						$password,
						$this->ci->form_validation->set_value('remember'),
						$data['login_by_username'],
						$data['login_by_email']); */
						$this->ci->session->set_userdata(array(
								'user_id'	=> $result->row()->id,
								'username'	=> '',
								'status'	=> 1,
								'source'    => $source
						));
						return true;
		}
		
		$password = $this->randomPassword();
		$data = array(
				'fullname'=>$name,
				'password' => md5($password),
				'email'=> $email,
				'source'=> $source,
				'activated'=>'1'
		);
		$this->ci->db->insert('users',$data);
		//echo $this->ci->db->insert_id();
		$this->ci->session->set_userdata(array(
								'user_id'	=> $this->ci->db->insert_id(),
								'username'	=> '',
								'status'	=> 1,
								'source'    => $source,//psychometric
						));
		$tempData['site_name'] = $this->ci->config->item('website_name', 'tank_auth');
		$tempData['password'] = $password;
		$this->_send_email('welcomeapi', $email, $tempData);
		//exit;
	}
	function randomPassword() 
	{
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
	function _send_email($type, $email, &$data)
	{
		//$this->load->library('email');
		$this->ci->email->set_newline("\r\n");
		$config['protocol'] = $this->ci->config->item('mail_protocol','email');
		$config['smtp_host'] = $this->ci->config->item('smtp_server','email');
		$config['smtp_user'] = $this->ci->config->item('smtp_user_name','email');
		$config['smtp_pass'] = $this->ci->config->item('smtp_pass','email');
		$this->ci->email->initialize($config);
		$this->ci->email->from($this->ci->config->item('webmaster_email', 'tank_auth'), $this->ci->config->item('website_name', 'tank_auth'));
		$this->ci->email->reply_to($this->ci->config->item('webmaster_email', 'tank_auth'), $this->ci->config->item('website_name', 'tank_auth'));
		$this->ci->email->to($email);
		$this->ci->email->bcc('nitin@meetuniv.com','debal@meetuniv.com');
		$this->ci->email->subject(sprintf($this->ci->lang->line('auth_subject_'.$type), $this->ci->config->item('website_name', 'tank_auth')));
		$this->ci->email->message($this->ci->load->view('email/'.$type.'-html', $data, TRUE));
		$this->ci->email->set_alt_message($this->ci->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->ci->email->send();
	}
}

?>