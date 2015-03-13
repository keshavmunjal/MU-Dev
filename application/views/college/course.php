<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller
{
	function __construct()
	{     
		parent::__construct();
		$this->load->library('layout');
		$this->load->model('coursemodel');
		$this->load->model('collegemodel');
		$this->load->library("pagination");
		$this->ci =& get_instance();
		$this->load->library('tank_auth');
	}
	/* public function test()
	{
		print_r($_POST);exit;
	} */
	/*
	public function individualCourse($universityName,$universityId,$courseName,$courseId) {
		
		//$courseId = str_replace(array('-'), array('_'),$course_id);
		$courseDetail = $this->coursemodel->getCounterValue($courseId);
		$pageCount = $courseDetail[0]['page_count'];
		if(!empty($courseId)){
			$count = $pageCount + 1;
			$this->coursemodel->countCourses($count,$courseId);
		}
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
		//echo $course_id;exit;
		//echo "<pre>";print_r($data);exit;
		
        $this->layout->view('course/individualCourse.php', $data);
    }
	
	*/
	/*
	
	public function searchUniversityByCourse($c_Name='')
	{
		//echo $c_Name;exit;
		$cName = str_replace('+', ' ', $c_Name);
		$courseName = trim($cName);
		$data['course_name']=$courseName;
		$this->session->set_userdata('cou_name',$courseName);
		$data['active'] = 'college';
        $data['title'] = "Shortlist, compare & Meet UK Universities for Abroad scholarship & spot admission at our education fair & Abroad university visit in india";
		$data['description'] = "MeetUniv.Com lists over 1000 Abroad universities & colleges.Meet top Abroad universities and colleges in Europe to study abroad?We provide info on Top University in UK.You can find list of UK - London Colleges and Universities.";
		$data['keywords'] = "UK university list,Meet UK Universities, university of uk,Abroad University events in india,Spot Admission & scholarships, university in uk, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top UK Universities,Top study abroad scholarships,2014 UK University Fair,study overseas,study abroad";
		if(empty($courseName)){
			redirect('http://meetuniv.com/');
		}
		//echo $courseName;exit;
		
		$config = array();
        $config["base_url"] = base_url() . "course/searchCollegePagination/".$courseName;
        $config["total_rows"] = $this->collegemodel-> searched_record_count($courseName);
		
		//print_r($config);exit;
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
        $data["results"] = $this->collegemodel-> get_search_university($courseName, $config["per_page"], $page);
		//print_r($data["results"]);exit;
		$data["allresult"] = $this->collegemodel-> get_search_alluniversity($courseName);
		
		
		for($i=0;$i<$config["total_rows"];$i++)
			{
				$conid[]=$data["allresult"][$i]["countryId"];
				$cityid[]=$data["allresult"][$i]["cityId"];
				$univ_id[]=$data["allresult"][$i]["univId"];
			}
			
		//echo "<pre>";print_r($conid);exit;
		$data["links"] = $this->pagination->create_links();
		//print_r($data["links"]);exit;
		$data["countResults"] = $this->collegemodel-> searched_record_count($courseName);
		$data["all_pcourse1"]=$this->collegemodel->all_p_course();
		$this->session->set_userdata('course_contry',$conid);
		$this->session->set_userdata('course_city',$cityid);
		$this->session->set_userdata('univid',$univ_id);
		//$data["all_pcourserow"]=count($data["all_pcourse1"]);
		//echo "<pre>";print_r($data["all_pcourse"]);exit;
        $this->layout->view("college/searchUniversityCourse", $data);
	}
	
	public function searchUniversityBySubCourse($c_Name='')
	{
		
		$c_Name=$this->input->post('f_course');
		$p_courseid=$this->input->post('pcid');
		//$p_courseid=$this->uri->segment(4);
		$this->db->select('name');
		$this->db->from('courselevelp');
		$this->db->where('level',$p_courseid);
		$query = $this->db->get();
		$res=$query->result_array();
		foreach($res as $pid)
		{
			$pid1=$pid['name'];
		}
		
		$cName = str_replace('+', ' ', $c_Name);
		$childcourse_Name = trim($cName);
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
        $config["total_rows"] = $this->collegemodel-> searched_record_count($childcourse_Name);
		
		//print_r($config);exit;
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
        $data["results"] = $this->collegemodel-> get_search_university($childcourse_Name, $config["per_page"], $page);
		//print_r($data["results"]);exit;
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
		$data["countResults"] = $this->collegemodel-> searched_record_count($childcourse_Name);
		$data["all_pcourse1"]=$this->collegemodel->all_p_course();
		$this->session->set_userdata('course_contry',$conid);
		$this->session->set_userdata('course_city',$cityid);
		$this->session->set_userdata('univid',$univ_id);
		//$data["all_pcourserow"]=count($data["all_pcourse1"]);
		//echo "<pre>";print_r($data["all_pcourse"]);exit;
        $this->layout->view("college/searchUniversityCourse", $data);
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
	
	public function p_c_JsonList($p_course='')
		{
		
			$p_course=$_GET['ab'];
			//$p_course=1;
			
			$abc=$this->collegemodel->c_ccourse1($p_course);
			
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
			
			// $coursenm=$this->session->userdata('course_coursename');
			
			// $array=array();
			
			// $this->db->select('courses.*,university.*, country.countryName');
			// $this->db->from('courses');
			// $this->db->join('university', 'university.id = courses.univId');
			// $this->db->join('country', 'country.id = university.countryId');
			// $this->db->like('name', $coursenm); 
			// $this->db->group_by("univName");
			// $query = $this->db->get();
			// $universityArray = $query->result_array();
			// foreach($universityArray as $university)
			// {
				// $array[] = $university['univName'];
			// }
			// header('Content-Type: application/json');
			// echo json_encode($array);
		
		}
	}
	*/
	/*
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
	*/
	
	/*
	public function filterLocationByCountry($page='')
	{
		//echo $page;exit;
		$univid = $this->session->userdata('univid');
		$country = $this->input->post('countryName');
		
		$res['coid']=$this->collegemodel->test1($country);
		$fcoid=$res['coid']['id'];
			
		$config = array();
        $config["base_url"] = base_url() . "course/filterLocationByCountry";
        $config["total_rows"] = $this->collegemodel-> total_country_row($fcoid,$univid);
		$config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
		
		//print_r($config);exit;
       		$this->db->limit($config["per_page"],$page);
				$this->db->select();
				$this->db->where_in('id',$univid);
				$this->db->from('university');
				$query = $this->db->get();
				$data["results"] = $query->result_array();
		
		//print_r($data["results"]);exit;
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> total_country_row($fcoid,$univid);
       //print_r($data);exit;
	   $content = $this->load->view("college/courseCollegePagination.php", $data);
		echo $content;
	}
	
	/*
	public function RemovefilterLocationByCountry($c_Name='')
	{
	
		$cName = str_replace('+', ' ', $c_Name);
		$country = trim($cName);
		$univid = $this->session->userdata('univid');
		// echo $courseName;
		// exit;
		$res['coid']=$this->collegemodel->test1($country);
		$fcoid=$res['coid']['id'];
			
		$config = array();
        $config["base_url"] = base_url() . "course/filterLocationByCountry";
        $config["total_rows"] = $this->collegemodel-> total_country_row($fcoid,$univid);
		$config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
		
		//print_r($config);exit;
       		$this->db->limit($config["per_page"],$page);
				$this->db->select();
				$this->db->where_in('id',$univid);
				$this->db->from('university');
				$query = $this->db->get();
				$data["results"] = $query->result_array();
		
		//print_r($data["results"]);exit;
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> total_country_row($fcoid,$univid);
       //print_r($data);exit;
	   $content = $this->load->view("college/courseCollegePagination.php", $data);
		echo $content;
	}
	*/
	/*
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
	
	*/
	/*
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
	*/
/*
	
	public function endArray()
		{
				
				$child_course = $this->session->userdata('child_course_name');
				$courseName=$this->session->userdata('cou_name');
				if($this->session->userdata('child_course_name'))
				{
					echo $child_course;
					//$fcourseName=$child_course;
				}
				else
				{
					echo $courseName;
					//$fcourseName=$courseName;
				}
				exit;
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

		}
		*/
		/*
		public function total_lead()
			{
					//$total_lead = $this->collegemodel-> getCampaignData();
					
					$xml = new DOMDocument("1.0");
					$root = $xml->createElement("data");
					$xml->appendChild($root);
					$title   = $xml->createElement("total");
					$titleText = $xml->createTextNode('12345');
					$title->appendChild($titleText);
					$lead = $xml->createElement("lead");
					$lead->appendChild($title);
					$root->appendChild($lead);
					$xml->formatOutput = true;
					echo "<xmp>". $xml->saveXML() ."</xmp>";
					//$xml->save("application/mybooks.xml") or die("Error");
			}

			*/
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
				$data['title'] = "List of Top 10 MBA, Medical and Engineering Colleges in World";
				$data['canonical'] = "http://meetuniv.com/popular-college";
				$data['description'] = "Get placed in the top 10 MBA colleges of the World to proceed your higher education in medical, Engineering and business universities.";
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
				$data["countResults"] = 10;//$this->collegemodel-> engineering_record_count();
				//echo "<pre>";print_r($data);exit;
				$this->layout->view("college/college", $data);
			
			}

}