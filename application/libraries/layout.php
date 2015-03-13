<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Layout
{
    public $head = 'layout/head';
    public $header = 'layout/header';
    public $sidebar = 'layout/sidebar';
    public $js = 'layout/js';
    public $footer = 'layout/footer';
	function __construct()
	{
		$this->lt =& get_instance();
		$this->lt->load->model('tank_auth/users');	
	}
	function view($view ='', $data ='')				//load view in controller with layout
	{
		//$sessionData = $this->session->userdata('loggedIn');
		if($this->lt->session->userdata('user_id'))
		{
			$data['userId']	= $this->lt->session->userdata('user_id');
			$data['userData'] = $this->lt->users->getUserDetails($data['userId']);
		}
		//$this->load->view($this->head,$data);
		$this->lt->load->view($this->header,$data);
		//$this->load->view($this->sidebar,$data);
		$this->lt->load->view($view, $data);
		//$this->lt->load->view($this->js, $data);			//should be remove form here
		$this->lt->load->view($this->footer,$data);
	}
}
?>