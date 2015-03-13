<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('layout');
	}
	function index()
	{		
		$data['title'] = "Courses in UK, USA, Singapore, Dubai| MeetUniv";
		$data['description'] = "14, scholarships, course details, abroad university events in India.";
		$data['keywords'] = "";
		$this->layout->view('static/about_us',$data);
	}
}