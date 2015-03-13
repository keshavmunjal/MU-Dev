<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('layout');
		$this->load->model('coursemodel');
		$this->load->library("pagination");
		$this->load->model('collegemodel');
		$this->load->library("pagination");
		$this->ci =& get_instance();
		$this->load->library('tank_auth');
	}
	
	public function individualCourse($universityName,$universityId,$courseName,$courseId) {
		
		//$courseId = str_replace(array('-'), array('_'),$course_id);
		
		/*
		$courseDetail = $this->coursemodel->getCounterValue($courseId);
		$pageCount = $courseDetail[0]['page_count'];
		if(!empty($courseId)){
			$count = $pageCount + 1;
			$this->coursemodel->countCourses($count,$courseId);
		}
		*/
		
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
		
		$spclCharUniv = array("(", ")",",","'");
		
		//$university_name = str_replace('-',' ',$universityName);
		$university_name = str_replace($spclCharUniv,'',$universityName);
		
		$spclCharCourse = array("$","!","_",":");
		
		$course_name = str_replace($spclCharCourse,'',$courseName);
		
		$course_name = str_replace('&','and',$course_name);
		
		$data['active']="";
		$data['title'] = "$university_name - $course_name";
		$data['keywords'] = "";
		$data['description'] = "";
		$data['universityName'] = $universityName;
		$data['universityId'] = $universityId;
		$data['courseName'] = $courseName;
		$data["accreditationData"] = $this->coursemodel->getAccreditationData($courseId);
		$data["stagesData"] = $this->coursemodel->getStagesData($courseId);
		$data["degreeClassesData"] = $this->coursemodel->getDegreeClassesData($courseId);
		$data["continuationData"] = $this->coursemodel->getContinuationData($courseId);
		$data["employmentData"] = $this->coursemodel->getEmploymentData($courseId);
		$data["jobData"] = $this->coursemodel->getJobData($courseId);
		$data["entryData"] = $this->coursemodel->getEntryData($courseId);
		$data["salaryData"] = $this->coursemodel->getSalaryData($courseId);
		$data["commonData"] = $this->coursemodel->getCommonData($courseId);
		$data["tariffData"] = $this->coursemodel->getTariffData($courseId);
		$data["nssData"] = $this->coursemodel->getNssData($courseId);
		///$data["countryId"] = $this->coursemodel->getountryId($universityId);
		//echo $course_id;exit;
		//echo "<pre>";print_r($data);exit;
		
        $this->layout->view('course/individualCourse.php', $data);
    }

	
	
	public function searchUniversityByCourse($c_Name='')
	{
		
		
		
		if(empty($c_Name)){
			//redirect('http://meetuniv.com/');
			$c_Name='Medicine+and+Dentistry';
		}
		//echo $c_Name;exit;
		$cName = str_replace('+', ' ', $c_Name);
		$courseName = trim($cName);
		
			
		$this->db->select('level');
		$this->db->from('courseLevelP');
		$this->db->where('name',$courseName);
		$query = $this->db->get();
		$level=$query->result();
		
		foreach($level as $plevel)
			{
			$pcl=$plevel->level;
			}
					
		
		$pcl3=$this->collegemodel->c_ccourse1($pcl);
		
		
			$a1='';
			foreach($pcl3 as $a)
				{
					$a1=$a1.$a['level3'].",";
				}
			$a2=rtrim($a1,',');
			
			$abc1=$this->collegemodel->c_ccourse123($a2);
			
			$b1='';
			foreach($abc1 as $b)
				{
					$b1=$b1.$b['name'].",";
				}
				$b2=rtrim($b1,",'");
				
				
				$b2=preg_split("/[\s,]+/", $b2);
				
				array_push($b2,$courseName);
				//print_r($b2);exit;
		$data['course_name']=$courseName;
		$this->session->set_userdata('cou_name',$courseName);
		$data['active'] = 'course';
        $data['title'] = "Course Search - Find Engineering, IT, Medical Courses for Abroad Study";
		$data['description'] = "Introducing the new segment of course search that not only saves your time but takes you to the right University/college in UK, US, Canada, Australia and Singapore.";
		$data['keywords'] = "UK university list,Meet UK Universities, university of uk,Abroad University events in india,Spot Admission & scholarships, university in uk, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top UK Universities,Top study abroad scholarships,2014 UK University Fair,study overseas,study abroad";
		$data['canonical'] = "https://meetuniv.com/course-search";
		if(empty($courseName)){
			redirect('http://meetuniv.com/');
		}
		
		
		$config = array();
        $config["base_url"] = base_url() . "course/searchPrntCollegePagination/".$courseName;
        $config["total_rows"] = $this->collegemodel-> searched_All_prnt_record_count($b2);
		
		//print_r($config);exit;
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
        $data["results"] = $this->collegemodel-> get_search_universityall_p_course($b2,$config["per_page"], $page);
		
		
		$data["allresult"] = $this->collegemodel-> get_search_alluniversity($courseName);
			//echo "<pre>";print_r($data["allresult"]);exit;
			
			for($i=0;$i<$config["total_rows"];$i++)
				{
					$conid[]=$data["allresult"][$i]["countryId"];
					$cityid[]=$data["allresult"][$i]["cityId"];
					$univ_id[]=$data["allresult"][$i]["univId"];
				}
				
			
		//echo "<pre>";print_r($cityid);exit;
		$data["links"] = $this->pagination->create_links();
		//print_r($data["links"]);exit;
		$data["countResults"] = $this->collegemodel-> searched_All_prnt_record_count($b2);
		$data["all_pcourse1"]=$this->collegemodel->all_p_course();
		$this->session->set_userdata('course_contry',$conid);
			$this->session->set_userdata('course_city',$cityid);
			$this->session->set_userdata('univid',$univ_id);
		//$data["all_pcourserow"]=count($data["all_pcourse1"]);
		//echo "<pre>";print_r($data["all_pcourse"]);exit;
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
        $this->layout->view("course/searchUniversityCourse", $data);
	}
	
	
	
	public function searchPrntCollegePagination($page='')
	{
	
		$courseName = $this->session->userdata('cou_name');
		$this->db->select('level');
		$this->db->from('courseLevelP');
		$this->db->where('name',$courseName);
		$query = $this->db->get();
		$level=$query->result();
		
		foreach($level as $plevel)
			{
			$pcl=$plevel->level;
			}
			
		$pcl3=$this->collegemodel->c_ccourse1($pcl);
		
		
			$a1='';
			foreach($pcl3 as $a)
				{
					$a1=$a1.$a['level3'].",";
				}
			$a2=rtrim($a1,',');
			
			$abc1=$this->collegemodel->c_ccourse123($a2);
			
			$b1='';
			foreach($abc1 as $b)
				{
					$b1=$b1.$b['name'].",";
				}
				$b2=rtrim($b1,",'");
				
				$b2=preg_split("/[\s,]+/", $b2);
				
				
			//$abc2=$this->collegemodel->get_search_universityall_p_course($b2);
			array_push($b2,$courseName);
			
			 
		$config = array();
        $config["base_url"] = base_url() . "course/searchPrntCollegePagination/".$courseName;
        $config["total_rows"] = $this->collegemodel->searched_All_prnt_record_count($b2);
        $config["per_page"] = 5;
        $config["uri_segment"] = 4;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["results"] = $this->collegemodel-> get_search_universityall_p_course($b2, $config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> searched_All_prnt_record_count($b2);
		//echo "<pre>";print_r($data);exit;
        $content = $this->load->view("college/searchPagination", $data);
		echo $content;
	}
	
	
	
	
	
	
	
	
		public function searchUniversityBySubCourse($c_Name='')
		{
			
			$c_Name=$this->input->post('f_course');
			$p_courseid=$this->input->post('pcid');
			
			
			$this->db->select('name');
			$this->db->from('courseLevelP');
			$this->db->where('level',$p_courseid);
			$query = $this->db->get();
			$res=$query->result_array();
			foreach($res as $pid)
			{
				$pid1=$pid['name'];
			}
			
			if(empty($c_Name))
				{	
					$pid2 = str_replace(' ', '+', $pid1);
					$pid3 = trim($pid2);
					redirect('http://meetuniv.com/course/searchUniversityByCourse/'.$pid3);
				}
			
			$cName = str_replace('+', ' ', $c_Name);
			$childcourse_Name = trim($cName);
				
			//$this->session->set_userdata('cou_name',$p_courseid);
			$this->session->set_userdata('child_course_name',$childcourse_Name);
			
			$data['course_name']=$pid1;
			$data['child_course_name']=$childcourse_Name;
			$data['active'] = 'college';
			$data['title'] = "Shortlist, compare & Meet UK Universities for Abroad scholarship & spot admission at our education fair & Abroad university visit in india";
			$data['description'] = "MeetUniv.Com lists over 1000 Abroad universities & colleges.Meet top Abroad universities and colleges in Europe to study abroad?We provide info on Top University in UK.You can find list of UK - London Colleges and Universities.";
			$data['keywords'] = "UK university list,Meet UK Universities, university of uk,Abroad University events in india,Spot Admission & scholarships, university in uk, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top UK Universities,Top study abroad scholarships,2014 UK University Fair,study overseas,study abroad";
			if(empty($childcourse_Name)){
				redirect('http://meetuniv.com/');
			}
			$config = array();
			$config["base_url"] = base_url() . "course/searchSubCollegePagination/".$childcourse_Name;
			$config["total_rows"] = $this->collegemodel-> searched_record_countForSubCourse($childcourse_Name);
			
			//print_r($config);exit;
			$config["per_page"] = 5;
			$config["uri_segment"] = 3;
			$config['full_tag_open'] = '<div id="pagination">';
			$config['full_tag_close'] = '</div>';
			//echo "<pre>";print_r($config);exit;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			
			$data["results"] = $this->collegemodel-> get_search_universityforSubCourse($childcourse_Name, $config["per_page"], $page);
			//echo '<pre>';print_r($data["results"]);exit;
			$data["allresult"] = $this->collegemodel-> get_search_alluniversity($childcourse_Name);
			
			
			for($i=0;$i<$config["total_rows"];$i++)
				{
					$conid[]=$data["allresult"][$i]["countryId"];
					$cityid[]=$data["allresult"][$i]["cityId"];
					$univ_id[]=$data["allresult"][$i]["univId"];
				}
				
			//echo "<pre>";print_r($conid);exit;
			$data["links"] = $this->pagination->create_links();
			//print_r($data["links"]);exit;
			$data["countResults"] = $this->collegemodel-> searched_record_countForSubCourse($childcourse_Name);
			$data["all_pcourse1"]=$this->collegemodel->all_p_course();
			$this->session->set_userdata('course_contry',$conid);
			$this->session->set_userdata('course_city',$cityid);
			$this->session->set_userdata('univid',$univ_id);
			//$data["all_pcourserow"]=count($data["all_pcourse1"]);
			//echo "<pre>";print_r($data["all_pcourse"]);exit;
			$this->layout->view("course/searchUniversityCourse", $data);
		}
	
	
	public function searchCollegePagination($page='')
	{
		$courseName = $this->session->userdata('cou_name');
		$config = array();
        $config["base_url"] = base_url() . "course/searchCollegePagination/".$courseName;
        $config["total_rows"] = $this->collegemodel->searched_record_count($courseName);
        $config["per_page"] = 5;
        $config["uri_segment"] = 4;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["results"] = $this->collegemodel-> get_search_university($courseName, $config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> searched_record_count($courseName);
		//echo "<pre>";print_r($data);exit;
        $content = $this->load->view("college/searchPagination", $data);
		echo $content;
	}
	
	public function searchSubCollegePagination($page='')
	{
	
		$courseName = $this->session->userdata('child_course_name');
		$config = array();
        $config["base_url"] = base_url() . "course/searchSubCollegePagination/".$courseName;
        $config["total_rows"] = $this->collegemodel->searched_record_countForSubCourse($courseName);
        $config["per_page"] = 5;
        $config["uri_segment"] = 4;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["results"] = $this->collegemodel-> get_search_universityforSubCourse($courseName, $config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> searched_record_countForSubCourse($courseName);
		//echo "<pre>";print_r($data);exit;
        $content = $this->load->view("college/searchPagination", $data);
		echo $content;
	}
	
	public function p_c_JsonList($p_course='')
		{
			
			$p_course=$_GET['ab'];
			//echo $p_course;exit;
			
			$abc=$this->collegemodel->c_ccourse1($p_course);
			//print_r($abc);exit;
			$a1='';
			foreach($abc as $a)
			{
				$a1=$a1.$a['level3'].",";
			}
			$a2=rtrim($a1,',');
			
								
								
			$abc1=$this->collegemodel->c_ccourse123($a2);
			//print_r($abc1);exit;
			foreach($abc1 as $country)
			{
				$array[] = $country['name'];
			}
			header('Content-Type: application/json');
			echo json_encode($array);
			
		}
	
	
	
	public function countryJsonList()
	{
	$used_questions = $this->session->userdata('course_contry');
	//print_r($used_questions);exit;
	$conid=array_unique($used_questions);
	if(!empty($conid))
	{
		$array=array();
		$this->db->select('countryName');
		$this->db->where_in('id',$conid);
		$this->db->from('country');
		$query = $this->db->get();
		$countryArray = $query->result_array();
		foreach($countryArray as $country)
		{
			$array[] = $country['countryName'];
		}
		header('Content-Type: application/json');
		echo json_encode($array);
		exit;
		}
	}
	public function cityJsonList()
	{
		$only_univcitu = $this->session->userdata('course_city');
		//print_r($only_univcitu);exit;
		$cityid=array_unique($only_univcitu);
		if(!empty($cityid))
		{
			$array=array();
			$this->db->select('cityName');
			$this->db->where_in('id',$cityid);
			$this->db->from('city');
			$query = $this->db->get();
			$cityArray = $query->result_array();
			foreach($cityArray as $city)
			{
				$array[] = $city['cityName'];
			}
			header('Content-Type: application/json');
			echo json_encode($array);
			exit;
		}
	}
	
	
	public function universityJsonList()
	{
	$univid = $this->session->userdata('univid');
	$univid=array_unique($univid);
		if(!empty($univid))
		{
			$array=array();
			$this->db->select('univName');
			$this->db->where_in('id',$univid);
			$this->db->from('university');
			$query = $this->db->get();
			$univArray = $query->result_array();
			foreach($univArray as $univ)
			{
				$array[] = $univ['univName'];
			}
			header('Content-Type: application/json');
			echo json_encode($array);
			exit;
			/*
			$coursenm=$this->session->userdata('course_coursename');
			
			$array=array();
			
			$this->db->select('courses.*,university.*, country.countryName');
			$this->db->from('courses');
			$this->db->join('university', 'university.id = courses.univId');
			$this->db->join('country', 'country.id = university.countryId');
			$this->db->like('name', $coursenm); 
			$this->db->group_by("univName");
			$query = $this->db->get();
			$universityArray = $query->result_array();
			foreach($universityArray as $university)
			{
				$array[] = $university['univName'];
			}
			header('Content-Type: application/json');
			echo json_encode($array);
			*/
		}
	}
	
	public function filterLocationByCountry($page='')
	{
		//echo $page;exit;
		$country = $this->input->post('countryName');
		$univid = $this->session->userdata('univid');
		$FiltercountryArray = explode(',',$country);
		$countryIdArray = array();
		if(strlen($country))
		{
			foreach($FiltercountryArray as $index=>$key)
			{
				$this->db->select('id');
				$this->db->where('countryName',$key);
				$this->db->from('country');
				$res = $this->db->get();
				$tempraryCountry = $res->row();
				if($tempraryCountry)
				{
				$countryIdArray[] = $tempraryCountry->id;
				}
			}
		}
		//print_r($countryIdArray);exit;
		$config = array();
       //$config["base_url"] = base_url() . "college/filterLocationByCountry";
       //$config["total_rows"] = $this->collegemodel-> record_count_country($countryIdArray);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
		
		if(!empty($countryIdArray))
			{
				$config["base_url"] = base_url() . "course/filterLocationByCountry";
				$config["total_rows"] = $this->collegemodel-> record_count_country($countryIdArray);
				$data["results"] = $this->collegemodel-> getUniversityByCountryCourse($config["per_page"], $page, $countryIdArray);
				$data["links"] = $this->pagination->create_links();
				$data["countResults"] = $this->collegemodel-> record_count_country($countryIdArray);
				$content = $this->load->view("college/coursePagination", $data);
				echo $content;
			}
			
		else
			{
				$this->endArray();
			}
		
	}
	
		public function filterByLocation($page='')
	{
		$city = $this->input->post('cityName');
		$FiltercityArray = explode(',',$city);
		$univid = $this->session->userdata('univid');
		$cityIdArray = array();
		if(strlen($city))
		{
			foreach($FiltercityArray as $index=>$key)
			{
				$this->db->select('id');
				$this->db->where('cityName',$key);
				//$this->db->where_in('cityName',$key);
				$this->db->from('city');
				$res = $this->db->get();
				$tempraryCity = $res->row();
				if($tempraryCity)
				{
				$cityIdArray[] = $tempraryCity->id;
				}
			}
		}
		//print_r($cityIdArray);exit;
		$config = array();
        //$config["base_url"] = base_url() . "course/filterByLocation";
        //$config["total_rows"] = $this->collegemodel-> record_count($cityIdArray);
        $config["per_page"] = 5;
        $config["uri_segment"] = 4;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		if(!empty($cityIdArray))
			{
				$config["base_url"] = base_url() . "course/filterByLocation";
				$config["total_rows"] = $this->collegemodel-> record_count($cityIdArray);
				$data["results"] = $this->collegemodel-> getUniversityByCity($config["per_page"], $page, $cityIdArray);
				$data["countResults"] = $this->collegemodel-> record_count($cityIdArray);
				$data["links"] = $this->pagination->create_links();
				$content = $this->load->view("college/coursePagination", $data);
				echo $content;
			}
		else
			{
				$this->endArray();
			}
	}
	
	public function filterLocationByUniversity($page='')
	{
		$university = $this->input->post('univName');
		$univid = $this->session->userdata('univid');
		$FilteruniversityArray = explode(',',$university);
		$universityIdArray = array();
		if(strlen($university))
		{
			foreach($FilteruniversityArray as $index=>$key)
			{
				$this->db->select('id');
				$this->db->like('univName', $key);
				$this->db->from('university');
				$res = $this->db->get();
				$tempraryUniversity = $res->row();
				if($tempraryUniversity)
				{
				$universityIdArray[] = $tempraryUniversity->id;
				}
				//echo $this->db->last_query();exit;
			}
			
		}
		$config = array();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        if(!empty($universityIdArray))
		{
			$config["base_url"] = base_url() . "college/filterLocationByUniversity";
			$config["total_rows"] = $this->collegemodel-> record_count_university($universityIdArray);
			$data["results"] = $this->collegemodel-> getUniversityByUniversityName($config["per_page"], $page, $universityIdArray);
			$data["links"] = $this->pagination->create_links();
			$data["countResults"] = $this->collegemodel-> record_count_university($universityIdArray);
			$content = $this->load->view("college/universityCollegePagination", $data);
			echo $content;
		}
		
		else
			{
				$this->endArray();
			}
		
	}
	

	
	public function endArray()
		{

		$courseName=$this->session->userdata('cou_name');
		$this->db->select('level');
		$this->db->from('courseLevelP');
		$this->db->where('name',$courseName);
		$query = $this->db->get();
		$level=$query->result();
		
		foreach($level as $plevel)
			{
			$pcl=$plevel->level;
			}
		
		$pcl3=$this->collegemodel->c_ccourse1($pcl);
		
		
			$a1='';
			foreach($pcl3 as $a)
				{
					$a1=$a1.$a['level3'].",";
				}
			$a2=rtrim($a1,',');
			
			$abc1=$this->collegemodel->c_ccourse123($a2);
			
			$b1='';
			foreach($abc1 as $b)
				{
					$b1=$b1.$b['name'].",";
				}
				$b2=rtrim($b1,",'");
				
				
				$b2=preg_split("/[\s,]+/", $b2);
				
				$abc2=$this->collegemodel->get_search_universityall_p_course($b2);
				array_push($b2,$courseName);
		//print_r($b2);exit;
				$config = array();
				$config["base_url"] = base_url() . "course/searchPrntCollegePagination/".$courseName;
				$config["total_rows"] = $this->collegemodel-> searched_All_prnt_record_count($b2);
				$config["per_page"] = 5;
				$config["uri_segment"] = 3;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				$this->pagination->initialize($config);
				$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				
				$data["results"] = $this->collegemodel-> get_search_universityall_p_course($b2, $config["per_page"], $page);
					
				$data["links"] = $this->pagination->create_links();
				$data["countResults"] = $this->collegemodel-> searched_All_prnt_record_count($b2);
				$data["all_pcourse1"]=$this->collegemodel->all_p_course();
				$content = $this->load->view("college/searchPagination", $data);
				echo $content;
			
			
			
			
			/*
				$child_course = $this->session->userdata('child_course_name');
				$courseName=$this->session->userdata('cou_name');
				
				
				if($this->session->userdata('child_course_name'))
				{
					$fcourseName=$child_course;
					//echo $fcourseName;
				}
				else
				{
					//echo $fcourseName;
					$fcourseName=$courseName;
				}
				
				
				
				$config = array();
				$config["base_url"] = base_url() . "course/searchCollegePagination/".$fcourseName;
				$config["total_rows"] = $this->collegemodel-> searched_record_count($fcourseName);
				$config["per_page"] = 5;
				$config["uri_segment"] = 3;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				$this->pagination->initialize($config);
				$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				
				$data["results"] = $this->collegemodel-> get_search_university($fcourseName, $config["per_page"], $page);
					
				$data["links"] = $this->pagination->create_links();
				$data["countResults"] = $this->collegemodel-> searched_record_count($fcourseName);
				$data["all_pcourse1"]=$this->collegemodel->all_p_course();
				$content = $this->load->view("college/searchPagination", $data);
				echo $content;
				*/
				
		}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			public function popularCollegePagination($page='')
				{
					$config = array();
					$config["base_url"] = base_url() . "course/popularCollegePagination";
					$config["total_rows"] = 10;//$this->collegemodel->popular_record_count();
					$config["per_page"] = 5;
					$config["uri_segment"] = 3;
					$config['full_tag_open'] = '<div id="pagination">';
					$config['full_tag_close'] = '</div>';
					//echo "<pre>";print_r($config);exit;
					$this->pagination->initialize($config);
					$data["results"] = $this->collegemodel-> getengineeringColleges($config["per_page"], $page);
					$data["links"] = $this->pagination->create_links();
					$data["countResults"] = 10;//$this->collegemodel-> popular_record_count();
					$content = $this->load->view("college/collegePagination", $data);
					echo $content;
				}
				
		public function engineeringCollege()
			{
			
				$data['active'] = 'college';
				$data['title'] = "Engineering Colleges - List of World's Top Engineering Colleges";
				$data['paragph']="Thinking of studying engineering overseas? Stop thinking and get your next step, to enrol yourself in one of the college mentioned in the list of top engineering colleges for aeronautics, marine and automobile.";
				$data['canonical'] = "http://meetuniv.com/engineering-colleges";
				$data['description'] = "Explore and seek information on the world's best engineering colleges for aeronautics, marine and automobile in that have been ranked highly for their superior quality.";
				$data['keywords'] = "UK university list,Meet UK Universities, university of uk,Abroad University events in india,Spot Admission & scholarships, university in uk, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top UK Universities,Top study abroad scholarships,2014 UK University Fair,study overseas,study abroad";
				
				$config = array();
				$config["base_url"] = base_url() . "course/popularCollegePagination";
				$config["total_rows"] = 10;//$this->collegemodel->engineering_record_count();
				$config["per_page"] = 5;
				$config["uri_segment"] = 3;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				//echo "<pre>";print_r($config);exit;
				$this->pagination->initialize($config);
				$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				$data["results"] = $this->collegemodel-> getengineeringColleges($config["per_page"], $page);
				// foreach($data["results"] as $key)
					// {	
						// echo $key->countryId;
					// }
				// echo "<pre>";print_r($data);exit;
				$data["links"] = $this->pagination->create_links();
				$this->db_campaign = $this->ci->load->database('db_campaign', True);
				$data['totalLeads'] = $this->collegemodel->getCampaignData();
				$this->db = $this->ci->load->database('default', True);
				$data["countResults"] = 10;//$this->collegemodel-> engineering_record_count();
				//echo "<pre>";print_r($data);exit;
				$this->layout->view("college/college", $data);
			
			}

		public function mbaCollege()
			{
			
				$data['active'] = 'college';
				$data['title'] = "Search MBA Courses from the List of Top MBA Colleges in World";
				$data['paragph']="Looking for a bright career in the world of business studies? Need information regarding the list of best MBA colleges of UK, USA, Canada and many more? We stand at service with all the college courses details that makes you choose the best ranked MBA colleges.";
				$data['canonical'] = "http://meetuniv.com/mba-colleges";
				$data['description'] = "Get ready to apply in the world’s top ranking MBA Colleges to sharpen your edge to rock in the subjects of hr, marketing, finance and it courses.";
				$data['keywords'] = "UK university list,Meet UK Universities, university of uk,Abroad University events in india,Spot Admission & scholarships, university in uk, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top UK Universities,Top study abroad scholarships,2014 UK University Fair,study overseas,study abroad";
				
				$config = array();
				$config["base_url"] = base_url() . "course/mbaCollegePagination";
				$config["total_rows"] = 10;//$this->collegemodel->engineering_record_count();
				$config["per_page"] = 5;
				$config["uri_segment"] = 3;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				//echo "<pre>";print_r($config);exit;
				$this->pagination->initialize($config);
				$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				$data["results"] = $this->collegemodel-> getmbaColleges($config["per_page"], $page);
				// foreach($data["results"] as $key)
					// {	
						// echo $key->countryId;
					// }
				// echo "<pre>";print_r($data);exit;
				$data["links"] = $this->pagination->create_links();
				$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
				$data["countResults"] = 10;//$this->collegemodel-> engineering_record_count();
				//echo "<pre>";print_r($data);exit;
				$this->layout->view("college/college", $data);
			
			}
			
			public function mbaCollegePagination($page='')
				{
					$config = array();
					$config["base_url"] = base_url() . "course/mbaCollegePagination";
					$config["total_rows"] = 10;//$this->collegemodel->popular_record_count();
					$config["per_page"] = 5;
					$config["uri_segment"] = 3;
					$config['full_tag_open'] = '<div id="pagination">';
					$config['full_tag_close'] = '</div>';
					//echo "<pre>";print_r($config);exit;
					$this->pagination->initialize($config);
					$data["results"] = $this->collegemodel-> getmbaColleges($config["per_page"], $page);
					$data["links"] = $this->pagination->create_links();
					$data["countResults"] = 10;//$this->collegemodel-> popular_record_count();
					$content = $this->load->view("college/collegePagination", $data);
					echo $content;
				}
				
				
				
			public function topRankedColleges()
			{
			
				$data['active'] = 'college';
				$data['title'] = "Top Universities - List of Top Ranked Colleges in the World";
				$data['paragph']="Seeking for an admission in the top ranking universities of the world? Nurture your talent in one of these top notch universities to attain the limits of success and leave behind an impression of your genius.";
				$data['canonical'] = "http://meetuniv.com/top-ranked-colleges";
				$data['description'] = "Live a fully satisfied life in the world’s top ranking universities that not only imbibes quality education but makes you perfectly suitable for the global job market.";
				$data['keywords'] = "UK university list,Meet UK Universities, university of uk,Abroad University events in india,Spot Admission & scholarships, university in uk, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top UK Universities,Top study abroad scholarships,2014 UK University Fair,study overseas,study abroad";
				
				$config = array();
				$config["base_url"] = base_url() . "course/topRankedCollegesPagination";
				$config["total_rows"] = 11;//$this->collegemodel->engineering_record_count();
				$config["per_page"] = 5;
				$config["uri_segment"] = 3;
				$config['full_tag_open'] = '<div id="pagination">';
				$config['full_tag_close'] = '</div>';
				//echo "<pre>";print_r($config);exit;
				$this->pagination->initialize($config);
				$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				$data["results"] = $this->collegemodel-> getmbaColleges($config["per_page"], $page);
				// foreach($data["results"] as $key)
					// {	
						// echo $key->countryId;
					// }
				// echo "<pre>";print_r($data);exit;
				$data["links"] = $this->pagination->create_links();
				$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
				$data["countResults"] = 11;//$this->collegemodel-> engineering_record_count();
				//echo "<pre>";print_r($data);exit;
				$this->layout->view("college/college", $data);
			
			}
			
			public function topRankedCollegesPagination($page='')
				{
					$config = array();
					$config["base_url"] = base_url() . "course/topRankedCollegesPagination";
					$config["total_rows"] = 11;//$this->collegemodel->popular_record_count();
					$config["per_page"] = 5;
					$config["uri_segment"] = 3;
					$config['full_tag_open'] = '<div id="pagination">';
					$config['full_tag_close'] = '</div>';
					//echo "<pre>";print_r($config);exit;
					$this->pagination->initialize($config);
					$data["results"] = $this->collegemodel-> gettopRankedColleges($config["per_page"], $page);
					$data["links"] = $this->pagination->create_links();
					$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
					$data["countResults"] = 11;//$this->collegemodel-> popular_record_count();
					$content = $this->load->view("college/collegePagination", $data);
					echo $content;
				}
			
				
				
}