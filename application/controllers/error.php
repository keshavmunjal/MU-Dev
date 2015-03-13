<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('layout');
	}
	function page_missing()
	{
		$data['title'] = "MeetUniv.Com : Gifted";

		$data['description'] = "MeetUniv.com | Gifted";

		$data['keywords'] = "Meet UK Universities,Study in UK,Study in UK universities,Study MBA in UK,Colleges in UK,International students,Universities &  colleges in UK,Higher education in UK,Best universities in UK ,List of Top 10 colleges & universities,IELTS-GMAT-TOEFL,Universities events,Engineering colleges in UK ,Postgraduate study,Scholarships,Executive MBA in UK,Education Fairs,Spot Admission,University Visits,Courses,Test Preparation";

		
		$this->layout->view('error/not_found', $data);
	}
}