<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class College extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->ci =& get_instance();
		$this->load->library('layout');
		$this->load->library('tank_auth');
		$this->load->model('collegemodel');
		$this->load->library("pagination");
	}
	public function index() {

		$collegeurl = $this->uri->segment(1);
		if($collegeurl == 'college-study-in-abroad'){
			redirect('list-of-colleges');
		}else if($collegeurl == 'college'){
			redirect('list-of-colleges');
		}
		$this->session->set_userdata(array('last_url' => 'college-study-in-abroad'));
		$data['active'] = 'college';
		$data['paragph']='Confused about the right business school, Engineering or medical colleges? Here at MeetUniv, students can search and shortlist from the list of top colleges in UK/US/Canada/Australia offering Undergraduate/Masters degree courses.';
        $data['title'] = "List of Top Colleges in UK, US | Search Business, Engineering Colleges";
		$data['canonical'] = "https://meetuniv.com/list-of-colleges";
		$data['description'] = "You can search and shortlist best business, engineering, medical, law  colleges for undergraduate, master degree from the list of top colleges of UK, USA, Canada, Australia.";
		$data['keywords'] = "UK university list,Meet UK Universities, university of uk,Abroad University events in india,Spot Admission & scholarships, university in uk, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top UK Universities,Top study abroad scholarships,2014 UK University Fair,study overseas,study abroad";
		
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
		
		$config = array();
        $config["base_url"] = base_url() . "college/collegePagination";
        $config["total_rows"] = $this->collegemodel->total_count_univ();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->collegemodel-> getAllUniversities($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> total_count_univ();
        $this->layout->view("college/college", $data);
    }
	//added start
	public function demo(){
	$this->load->view("college/pdf_converter");
	//$this->load->view("college/test_pdf");
	}
	//added end
	
	public function individualCollege($college,$collegeId)
	{
	 $collegeId=base64_decode($collegeId);
	 $collegeStr = str_replace('-',' ',$college);
	 	
	 $data["universityData"]=$this->collegemodel->getUniversityDataById($collegeId);
	 $data["universityDetail"]=$this->collegemodel->getUniversityDetailById($collegeId);
	 $data["courseDetail"]=$this->collegemodel->getCoursesByCollege($collegeId);
	 
	 if($data['universityData'][0]['cityId']) //city details is present
	 {
		$city=$this->db->get_where('city',array('id'=>$data['universityData'][0]['cityId']));
		$temp = $city->row();
		$data['cityName'] = $temp->cityName;
		//echo $temp->countryId." ".$temp2->countryName;exit;
	 }
	 if($data["universityData"][0]["countryId"])//country details is present
	 {
		$country=$this->db->get_where('country',array('id'=>$data["universityData"][0]["countryId"]));
		$temp2 = $country->row();
		$data['countryName'] = $temp2->countryName;
	 }
	 $data['active'] = 'college';
	 $data['individualCollege'] = 'individualCollege';
	 $data['title'] = "$collegeStr - Study in ".$data['countryName']." - MeetUniv";
	 $data['description'] = "$college - ".substr($data['universityData'][0]['overview'],0,150)."...";
	 $keywords = array("MeetUniv, Meet UK Universities, Universities & colleges in UK, Scholarships, Executive MBA in UK, Universities events, Spot Admission, Universities events in India","MeetUniv, Study in UK, Study in UK universities, Best universities in UK , Engineering colleges in UK, Education Fairs, University Visits, IELTS","List of Top 10 colleges & universities, Study MBA in UK, Higher education in UK, Universities events in India, Education Fairs, GMAT","IELTS-GMAT-TOEFL, International students, Colleges in UK, Postgraduate study in abroad, University Courses, Test Preparation");
	 $univDetail = $this->collegemodel->getCounterValue($collegeId);
	 $pageCount = $univDetail[0]['page_count'];
	 $featured = $univDetail[0]['featured'];
	 if(!empty($collegeId)){
		$count = $pageCount + 1;
		$this->collegemodel->countUniversity($count,$collegeId);
	 }
	 $first = rand(0,1);
	 $second = rand(2,3);
	 $data['keywords'] = "$college - ".$keywords[$first]." - ".$keywords[$second];
	
	  if($featured==1)
	  
		{
	  
	  
			 $ucasid=array();
			 $level12=array();
			 $universityId=$collegeId;
			 $this->db->select('ucasId');
			 $this->db->distinct('ucasId');
			 $this->db->from('courses');
			 $this->db->where('courses.univId',$universityId);
			 $query=$this->db->get();
			 //echo $this->db->last_query();exit;
			 $allCourse= $query->result_array();
			 //print_r($allCourse);exit;
			 
			if(!empty($allCourse))
				
				{
					
					$ucasid="";
					foreach($allCourse as $abc)
						{
							$ucasid=$ucasid.$abc['ucasId'].",";
						}
						
						$ucasid=rtrim($ucasid,',');
					
					$level1=$this->collegemodel->getLevel1fromCourseLevel($ucasid);
					
					
					/*$this->db->select('level1');
					$this->db->distinct('level1');
					$this->db->from('courseLevel');
					$this->db->where_in('ucasId',$ucasid);
					$query2=$this->db->get();
					$level1=$query2->result_array();*/
					
					if(!empty($level1))
						{
							foreach($level1 as $level)
									{
										$level12[]=$level['level1'];
									}
							$data['Pcourse']=$this->collegemodel->getParentByUniv($level12);

							$this->db->select('slider');
							$this->db->from('univDetails');
							$this->db->where('univId',$universityId);
							$query1=$this->db->get();
							$Slider=$query1->result();
							$data['SliderName']=$Slider[0]->slider;
							//echo "<pre>";print_r($data);exit;
							 $this->db_forum = $this->ci->load->database('alternate', True);
							 $data['latestArticles'] = $this->collegemodel->getRandomArticleForFeaturedCollge();
							 $this->layout->view("college/featuredIndividualCollege",$data);
							//$this->layout->view("college/featuredIndividualCollege",$data);
						}
						
					else
						{
							$this->db_campaign = $this->ci->load->database('db_campaign', True);
							$data['totalLeads'] = $this->collegemodel->getCampaignData();
							$this->db = $this->ci->load->database('default', True);
							$this->layout->view("college/individualCollege",$data);
						
						}
				}
				
				else
					{
						$this->db_campaign = $this->ci->load->database('db_campaign', True);
						$data['totalLeads'] = $this->collegemodel->getCampaignData();
						$this->db = $this->ci->load->database('default', True);
						$this->layout->view("college/individualCollege",$data);
						
					}
		}
	 else
		{
		
			//$this->layout->view("college/individualCollege",$data);
		
			$this->db_campaign = $this->ci->load->database('db_campaign', True);
			$data['totalLeads'] = $this->collegemodel->getCampaignData();
			$this->db = $this->ci->load->database('default', True);
			$this->layout->view("college/individualCollege",$data);
			
		}
	 
	 
	}
	public function collegePagination($page='')
	{
		$config = array();
        $config["base_url"] = base_url() . "college/collegePagination";
        $config["total_rows"] = $this->collegemodel->total_count_univ();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data["results"] = $this->collegemodel-> getAllUniversities($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel->total_count_univ();
        $content = $this->load->view("college/collegePagination", $data);
		echo $content;
	}
	
	public function UkCollegePagination($page='')
	{
	//echo "hiii";exit;
		$config = array();
        $config["base_url"] = base_url() . "college/UkCollegePagination";
        $config["total_rows"] = $this->collegemodel->uk_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
        $data["results"] = $this->collegemodel-> getUkUniversities($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> uk_record_count();
        $content = $this->load->view("college/collegePagination", $data);
		echo $content;
	}
	
	public function UsaCollegePagination($page='')
	{
		$config = array();
        $config["base_url"] = base_url() . "college/UsaCollegePagination";
        $config["total_rows"] = $this->collegemodel->usa_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
        $data["results"] = $this->collegemodel-> getUsaUniversities($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> usa_record_count();
        $content = $this->load->view("college/collegePagination", $data);
		echo $content;
	}
	
	public function popularCollegePagination($page='')
	{
		$config = array();
        $config["base_url"] = base_url() . "college/popularCollegePagination";
        $config["total_rows"] = $this->collegemodel->popular_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
        $data["results"] = $this->collegemodel-> getPopularUniversities($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> popular_record_count();
        $content = $this->load->view("college/collegePagination", $data);
		echo $content;
	}
	
	public function cityJsonList()
	{
		$countryIdArray=$this->session->userdata('CountryInSession');
		
		$array=array();
		$this->db->select('cityName');
		$this->db->where_in('countryId',$countryIdArray);
		$this->db->from('city');
		$query = $this->db->get();
		$cityArray = $query->result_array();
		foreach($cityArray as $city)
		{
			$array[] = $city['cityName'];
		}
		header('Content-Type: application/json');
		echo json_encode($array);
	}
	
	public function countryJsonList()
	{
		$array=array();
		$this->db->select('country.id,countryName');
		$this->db->distinct('countryName');
		//$this->db->where('countryId','13');
		$this->db->join('university', 'country.id = university.countryId');
		$this->db->from('country');
		
		$query = $this->db->get();
		//echo $this->db->last_query();//exit;
		$countryArray = $query->result_array();
		foreach($countryArray as $country)
		{
			$array[] = $country['countryName'];
		}
		header('Content-Type: application/json');
		echo json_encode($array);
	}
	
	public function universityJsonList()
	{
		$array=array();
		$this->db->select('univName');
		//$this->db->where('countryId','13');
		$this->db->from('university');
		$query = $this->db->get();
		$universityArray = $query->result_array();
		foreach($universityArray as $university)
		{
			$array[] = $university['univName'];
		}
		header('Content-Type: application/json');
		echo json_encode($array);
	}
	
	public function filterLocationByCountry($page='')
	{
		//echo $page;exit;
		$country = $this->input->post('countryName');
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
		$this->session->set_userdata('CountryInSession',$countryIdArray);
		$config = array();
        $config["base_url"] = base_url() . "college/filterLocationByCountry";
        $config["total_rows"] = $this->collegemodel-> record_count_country($countryIdArray);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data["results"] = $this->collegemodel-> getUniversityByCountry($config["per_page"], $page, $countryIdArray);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> record_count_country($countryIdArray);
        $content = $this->load->view("college/countryCollegePagination", $data);
		echo $content;
	}
	
	public function filterLocationByUniversity($page='')
	{
		$university = $this->input->post('univName');
		//echo $university;exit;
		//print_r($country);exit;
		$FilteruniversityArray = explode(',',$university);
		$universityIdArray = array();
		if(strlen($university))
		{
			foreach($FilteruniversityArray as $index=>$key)
			{
				$this->db->select('id,countryId');
				//$this->db->where('univName',$key);
				$this->db->like('univName', $key);
				$this->db->from('university');
				$res = $this->db->get();
				$tempraryUniversity = $res->row();
				if($tempraryUniversity)
				{
				$universityIdArray[] = $tempraryUniversity->id;
				//$universityCountryId[] =$tempraryUniversity->countryId;
				}
				//echo $this->db->last_query();exit;
			}
		}
		
		
		
		$config = array();
        $config["base_url"] = base_url() . "college/filterLocationByUniversity";
        $config["total_rows"] = $this->collegemodel-> record_count_university($universityIdArray);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
		
        $data["results"] = $this->collegemodel-> getUniversityByUniversityName($config["per_page"], $page, $universityIdArray);
		//$data['CountryNamep']=$this->collegemodel-> getCountryByUniversityName($config["per_page"], $page, $universityCountryId);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> record_count_university($universityIdArray);
		//echo "<pre>";print_r($data);exit;
        $content = $this->load->view("college/universityCollegePagination", $data);
		echo $content;
		
	}
	
	public function courseJsonList()
	{
		$array=array();
		$this->db->select('name');
		//$this->db->where('countryId','13');
		$this->db->from('courses');
		$this->db->group_by("name");
		$query = $this->db->get();
		$courseArray = $query->result_array();
		foreach($courseArray as $course)
		{
			$array[] = $course['name'];
		}
		header('Content-Type: application/json');
		echo json_encode($array);
	}
	
	public function filterByLocation($page='')
	{
		$city = $this->input->post('cityName');
		$FiltercityArray = explode(',',$city);
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
		$config = array();
        $config["base_url"] = base_url() . "college/filterByLocation";
        $config["total_rows"] = $this->collegemodel-> record_count($cityIdArray);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data["results"] = $this->collegemodel-> getUniversityByCity($config["per_page"], $page, $cityIdArray);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> record_count($cityIdArray);
        $content = $this->load->view("college/collegePagination", $data);
		echo $content;
	}
	
	public function getSatisfactionByCourseId()
	{
		$data = $this->collegemodel->getSatisfaction($_POST['id']);
		
		echo json_encode($data);exit;
		
	}
	
	public function getCourseFeeById()
	{
		//echo $_POST['id'];exit;
		$data = $this->collegemodel->getCourseFee($_POST['id']);
		
		echo json_encode($data);exit;
		
	}
	
	public function studyInUk()
	{
		$collegeurl = $this->uri->segment(2);
		if($collegeurl == 'study-in-uk-universities'){
			redirect('study-in-uk-universities');
		}
		$data['paragph'] ='Grab the opportunity to study in UK'."&#39s".' top MBA universities in London with world class infrastructure facilities and guidance from the best faculties of these universities.';
		$data['active'] = 'college';
        $data['title'] = "Study in UK - MBA from London Business School - List of Top Universities in UK";
		$data['canonical'] = "https://meetuniv.com/study-in-uk-universities";
		$data['description'] = "Wish to study MBA in U.K? Looking the list of top UK universities? Check the list of top UK Colleges besides London School of Business offering higher education.";
		$data['keywords'] = "UK university list,Meet UK Universities, university of uk,Abroad University events in india,Spot Admission & scholarships, university in uk, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top UK Universities,Top study abroad scholarships,2014 UK University Fair,study overseas,study abroad";
		$config = array();
        $config["base_url"] = base_url() . "college/UkCollegePagination";
        $config["total_rows"] = $this->collegemodel->uk_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->collegemodel-> getUkUniversities($config["per_page"], $page);
		//echo "<pre>";print_r($data);exit;
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> uk_record_count();
		
							$this->db_campaign = $this->ci->load->database('db_campaign', True);
							$data['totalLeads'] = $this->collegemodel->getCampaignData();
							$this->db = $this->ci->load->database('default', True);
		//echo "<pre>";print_r($data);exit;
        $this->layout->view("college/college", $data);
		
	}
	
	public function studyInUsa()
	{
		$collegeurl = $this->uri->segment(2);
		if($collegeurl == 'study-in-usa-universities'){
			redirect('study-in-usa-universities');
		}
		$data['active'] = 'college';
		$data['paragph'] ='Confused about where to pursue your MS, MBA, MBBS and PHD courses in the USA? Select from the list of top US universities to fulfill your dream.';
        $data['title'] = "Study in the USA - List of Top US universities for MS and MBA";
		$data['canonical'] = "https://meetuniv.com/study-in-usa-universities";
		$data['description'] = "Want to be in the best universities of USA for further study? Pick out the top US Universities for MS, MBBS, MBA and PhD courses to meet your demand.";
		$data['keywords'] = "USA university list,Meet USA Universities, university of usa,Abroad University events in india,Spot Admission & scholarships, university in usa, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top USA Universities,Top study abroad scholarships,2014 USA University Fair,study overseas,study abroad";
		$config = array();
        $config["base_url"] = base_url() . "college/UsaCollegePagination";
        $config["total_rows"] = $this->collegemodel->usa_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->collegemodel-> getUsaUniversities($config["per_page"], $page);
		//echo "<pre>";print_r($data);exit;
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> usa_record_count();
		//echo "<pre>";print_r($data);exit;
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
        $this->layout->view("college/college", $data);
		
	}
	
	public function searchCollegePagination($page='')
	{
		$courseName = $_POST['courseName'];
		$config = array();
        $config["base_url"] = base_url() . "college/searchCollegePagination/".$courseName;
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
	
	public function searchCollegeByCourse($c_Name='')
	{
		//echo $c_Name;exit;
		$cName = str_replace('+', ' ', $c_Name);
		$courseName = trim($cName);
		$data['active'] = 'college';
        $data['title'] = "Shortlist, compare & Meet UK Universities for Abroad scholarship & spot admission at our education fair & Abroad university visit in india";
		$data['description'] = "MeetUniv.Com lists over 1000 Abroad universities & colleges.Meet top Abroad universities and colleges in Europe to study abroad?We provide info on Top University in UK.You can find list of UK - London Colleges and Universities.";
		$data['keywords'] = "UK university list,Meet UK Universities, university of uk,Abroad University events in india,Spot Admission & scholarships, university in uk, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top UK Universities,Top study abroad scholarships,2014 UK University Fair,study overseas,study abroad";
		if(empty($courseName)){
			redirect('https://meetuniv.com/');
		}
		//echo $courseName;exit;
		$config = array();
        $config["base_url"] = base_url() . "college/searchCollegePagination/".$courseName;
        $config["total_rows"] = $this->collegemodel-> searched_record_count($courseName);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->collegemodel-> get_search_university($courseName, $config["per_page"], $page);
		//echo "<pre>";print_r($data);exit;
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> searched_record_count($courseName);
		//echo "<pre>";print_r($data);exit;
        $this->layout->view("college/searchCollege", $data);
		
	}
	
	public function popularCollege()
	{
		$data['active'] = 'college';
		$data['paragph'] ='Hurry to grab the opportunity of abroad study in the popular colleges of the UK, USA, Canada and Australia. Filter the list of World’s top 10 MBA, business, medical, fashion designing and engineering colleges to choose one for you.';
        $data['title'] = "List of Top 10 MBA, Fashion Designing, Engineering Colleges in World";
		$data['canonical'] = "https://meetuniv.com/popular-college";
		$data['description'] = "Search and get placed in the top 10 MBA, medical, Engineering, fashion designing and business colleges of the World to proceed your higher education.";
		$data['keywords'] = "UK university list,Meet UK Universities, university of uk,Abroad University events in India,Spot Admission & scholarships, university in uk, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top UK Universities,Top study abroad scholarships,2014 UK University Fair,study overseas,study abroad";
		$config = array();
        $config["base_url"] = base_url() . "college/popularCollegePagination";
        $config["total_rows"] = $this->collegemodel->popular_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->collegemodel-> getPopularUniversities($config["per_page"], $page);
		//echo "<pre>";print_r($data);exit;
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> popular_record_count();
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
		//echo "<pre>";print_r($data);exit;
        $this->layout->view("college/college", $data);
		
	}
	
	public function add_college()
	{
		$collegeId = $_POST['univId'];
		if ($this->tank_auth->is_logged_in()) {									// logged in
			$userId = $this->tank_auth->get_user_id();
			$data["results"] = $this->collegemodel-> add_colleges($userId,$collegeId);
			echo "Saved successfully!";exit;
		}else{
			echo "Not logged In";exit;
		} 
		
    }
	 
	public function studyInAustralia()
	{
		// $collegeurl = $this->uri->segment(2);
		// if($collegeurl == 'study-in-usa-universities'){
			// redirect('study-in-usa-universities');
		// }
		$data['active'] = 'college';
		$data['paragph'] ='Looking for an opportunity to study in the land of Kangaroos? Check out the list of top Australian Universities to select your best MBA courses for study in Australia universities, besides the Australian National University and University of Melbourne.';
        $data['title'] = "Study in Australia - List of Top Australian Universities for MBA, MS";
		$data['canonical'] = "https://meetuniv.com/study-in-australia-universities";
		$data['description'] = "Want to pursue research study in Australia? Pick out the best Australian university of Melbourne, Western Australia, Queensland, South Australia for MBA and MS programs.";
		$data['keywords'] = "Australia university list,Meet Australia Universities, university of usa,Abroad University events in india,Spot Admission & scholarships, university in usa, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top Australia Universities,Top study abroad scholarships,2014 Australia University Fair,study overseas,study abroad";
		$config = array();
        $config["base_url"] = base_url() . "college/australiaCollegePagination";
        $config["total_rows"] = $this->collegemodel->australia_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->collegemodel-> getAustraliaUniversities($config["per_page"], $page);
		//echo "<pre>";print_r($data);exit;
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> australia_record_count();
		//echo "<pre>";print_r($data);exit;
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
        $this->layout->view("college/college", $data);
		
	}
	
	public function australiaCollegePagination($page='')
	{
	
		$config = array();
        $config["base_url"] = base_url() . "college/australiaCollegePagination";
        $config["total_rows"] = $this->collegemodel->australia_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
        $data["results"] = $this->collegemodel-> getAustraliaUniversities($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> australia_record_count();
        $content = $this->load->view("college/collegePagination", $data);
		echo $content;
	}
	
	public function studyInCanada()
	{
		$data['active'] = 'college';
		$data['paragph'] ='Study in Canada? To know more about the courses and facilities, check out the list of Canada Universities to select for MS and MBA programs.';
        $data['title'] = "Study in Canada - List of Top Canadian Universities for MS, PhD Programs.";
		$data['canonical'] = "https://meetuniv.com/study-in-canada-universities";
		$data['description'] = "Study in Canada, students can pick out from the list of top Canadian universities for MBA, PhD and MS courses with world class facilities to make your dream come true.";
		$data['keywords'] = "Australia university list,Meet Canada Universities, university of usa,Abroad University events in india,Spot Admission & scholarships, university in usa, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top Australia Universities,Top study abroad scholarships,2014 Australia University Fair,study overseas,study abroad";
		$config = array();
        $config["base_url"] = base_url() . "college/canadaCollegePagination";
        $config["total_rows"] = $this->collegemodel->canada_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->collegemodel-> getCanadaUniversities($config["per_page"], $page);
		//echo "<pre>";print_r($data);exit;
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> canada_record_count();
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
		//echo "<pre>";print_r($data);exit;
        $this->layout->view("college/college", $data);
		
	}
	
	public function canadaCollegePagination($page='')
	{
	
		$config = array();
        $config["base_url"] = base_url() . "college/canadaCollegePagination";
        $config["total_rows"] = $this->collegemodel->canada_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
        $data["results"] = $this->collegemodel-> getCanadaUniversities($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> canada_record_count();
        $content = $this->load->view("college/collegePagination", $data);
		echo $content;
	}
	
	public function studyInSingapore()
	{
		$data['active'] = 'college';
		$data['paragph'] ='Dream of studying in the best island of Asia? Just a click on the shortlisted top Singapore universities to opt for your desired MBA and MS program for Study in Singapore.';
        $data['title'] = "Study in Singapore | List of Top National University for MBA | NTU, James Cook.";
		$data['canonical'] = "https://meetuniv.com/study-in-singapore-universities";
		$data['description'] = "Want to Study in Singapore best MBA and MS course programs? You can now filter the National, James Cook, NTU, Management University of Singapore and many more for abroad study.";
		$data['keywords'] = "Australia university list,Meet Canada Universities, university of usa,Abroad University events in india,Spot Admission & scholarships, university in usa, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top Australia Universities,Top study abroad scholarships,2014 Australia University Fair,study overseas,study abroad";
		$config = array();
        $config["base_url"] = base_url() . "college/singaporeCollegePagination";
        $config["total_rows"] = $this->collegemodel->singapore_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->collegemodel-> getSingaporeUniversities($config["per_page"], $page);
		//echo "<pre>";print_r($data);exit;
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> singapore_record_count();
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
		//echo "<pre>";print_r($data);exit;
        $this->layout->view("college/college", $data);
		
	}
	
	public function singaporeCollegePagination($page='')
	{
	
		$config = array();
        $config["base_url"] = base_url() . "college/singaporeCollegePagination";
        $config["total_rows"] = $this->collegemodel->singapore_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
        $data["results"] = $this->collegemodel-> getSingaporeUniversities($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> singapore_record_count();
        $content = $this->load->view("college/collegePagination", $data);
		echo $content;
	}
	
	public function studyInOtherColleges()
	{
		$data['active'] = 'college';
		$data['paragph']='Looking for an abroad study other than the UK, USA, Canada and Australia? Explore study in Russia, Ukraine and Dubai to add a career edge with an experience of overseas degree.';
        $data['title'] = "Study in Russia - List of Top Ukraine Universities - Dubai Colleges";
		$data['canonical'] = "https://meetuniv.com/other-universities";
		$data['description'] = "Explore and discover overseas study in Russia, Ukraine, Dubai to polish up your skills and expand your career horizon with a degree from a top university.";
		$data['keywords'] = "Australia university list,Meet Canada Universities, university of usa,Abroad University events in india,Spot Admission & scholarships, university in usa, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top Australia Universities,Top study abroad scholarships,2014 Australia University Fair,study overseas,study abroad";
		$config = array();
        $config["base_url"] = base_url() . "college/otherCollegePagination";
        $config["total_rows"] = $this->collegemodel->otherCollege_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
		$this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->collegemodel-> getOtherUniversities($config["per_page"], $page);
		//echo "<pre>";print_r($data);exit;
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> otherCollege_record_count();
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
		//echo "<pre>";print_r($data);exit;
        $this->layout->view("college/college", $data);
		
	}
	
	public function otherCollegePagination($page='')
	{
	
		$config = array();
        $config["base_url"] = base_url() . "college/otherCollegePagination";
        $config["total_rows"] = $this->collegemodel->otherCollege_record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		//echo "<pre>";print_r($config);exit;
        $this->pagination->initialize($config);
        $data["results"] = $this->collegemodel-> getOtherUniversities($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->collegemodel-> otherCollege_record_count();
        $content = $this->load->view("college/collegePagination", $data);
		echo $content;
	}
	
	public function featuredCollege()
		{
			$to='ankit@webinfomart.com';
			$sub='test';
			$msg='Hello Test';
			$this->SendEmailGenericFunction($to,$sub,$msg);
			/*
			$ucasid=array();
			$level12=array();
			$universityId=597;
			$this->db->select('ucasId');
			 $this->db->distinct('ucasId');
			 $this->db->from('courses');
			 $this->db->where('courses.univId',$universityId);
			 $query=$this->db->get();
			 $allCourse= $query->result_array();
				
				
				foreach($allCourse as $abc)
					{
						$ucasid[]=$abc['ucasId'];
					}
			
			
			$this->db->select('level1');
			$this->db->distinct('level1');
			$this->db->from('courseLevel');
			$this->db->where_in('ucasId',$ucasid);
			$query2=$this->db->get();
			$level1=$query2->result_array();
			foreach($level1 as $level)
					{
						$level12[]=$level['level1'];
					}
			
			$data['Pcourse']=$this->collegemodel->getParentByUniv($level12);
			
			
			$this->db->select('slider');
			$this->db->from('univDetails');
			$this->db->where('univId',$universityId);
			$query1=$this->db->get();
			$Slider=$query1->result();
			$data['SliderName']=$Slider[0]->slider;
	 
			 $data["universityData"]=$this->collegemodel->getUniversityDataById($universityId);
			 $data["universityDetail"]=$this->collegemodel->getUniversityDetailById($universityId);
			 $data["courseDetail"]=$this->collegemodel->getCoursesByCollege($universityId);
			 //echo "<pre>";print_r($data["universityData"]);exit;
			 
			 $this->db_forum = $this->ci->load->database('alternate', True);
			 $data['latestArticles'] = $this->collegemodel->getRandomArticleForFeaturedCollge();
			 $this->layout->view("college/featuredIndividualCollege",$data);
			*/
		}
	public function FeaturedPopulerCourse()
		{
		echo "meetuniv";exit;
			$PCourseLevel=$this->input->post('Pcourseid');
			$pcl3=$this->collegemodel->c_ccourse1($PCourseLevel);
			$a1='';
			foreach($pcl3 as $a)
				{
					$a1=$a1.$a['level3'].",";
				}
			$a2=rtrim($a1,',');
			$abc1=$this->collegemodel->c_ccourse123($a2);
				
			foreach($abc1 as $subCourse)
				{
				?>
					<li><?php echo $subCourse['name'];?><?php //echo $subCourse['level'];?></li>
					
					<?php
				}
		}
		
	public function featUnivCourse()
		{
			$array=array();
			$this->db->select('name');
			$this->db->distinct('name');
			$this->db->where('univId','597');
			$this->db->from('courses');
			$query = $this->db->get();
			//echo $this->db->last_query();exit;
			$universityArray = $query->result_array();
			foreach($universityArray as $university)
			{
				$array[] = $university['name'];
			}
			header('Content-Type: application/json');
			echo json_encode($array);
		}	
		
	public function GetSearchSimillerCollege()
		{
			$abcd=array();
			$data1=array();
			$PCourseLevel=$this->input->post('Pcourseid');
			//echo $PCourseLevel;exit;
			$this->db->select('name');
			$this->db->from('courseLevelP');
			$this->db->where('level',$PCourseLevel);
			$query1=$this->db->get();
			
			$PCourse=$query1->result();
			$CourseName=$PCourse[0]->name;
			
			$SimilRandIdCollege=$this->collegemodel->SimillerCollegeIdRand($CourseName);
			
			foreach($SimilRandIdCollege as $abc)
			{
				$abcd[]=$abc['univId'];
				$data1[]=$this->collegemodel->SimillerUniversityRandTotalCourse($abcd);
			}
					$data['first']=$data1[0];
					$data['second']=$data1[1];
					$data['third']=$data1[2];
					$data['fourth']=$data1[3];
					$data['five']=$data1[4];
					
			if(empty($abcd))
				{
					$data['SimilRandUniversity'] = $this->collegemodel->SimillerUniversityRandIfNull();
							
					foreach($data['SimilRandUniversity'] as $SimilRandUniversityIfNull)
						{
							$SimilrIdIfNull[]=$SimilRandUniversityIfNull['id'];
							$data1[]=$this->collegemodel->SimillerUniversityRandTotalCourse($SimilrIdIfNull);
						}
					$data['first']=$data1[0];
					$data['second']=$data1[1];
					$data['third']=$data1[2];
					$data['fourth']=$data1[3];
					$data['five']=$data1[4];
					
					echo $this->load->view("college/getsearchsimillerUniv", $data);
					
				}
			else
				{
					
					
					$data['SimilRandUniversity']=$this->collegemodel->SimillerUniversityRand($abcd);
					echo $this->load->view("college/getsearchsimillerUniv", $data);
				}	
		}
	public function GetSearchCourse()
		{
			$universityId=597;
			
			$courseName=array();
			$courseId=array();
			$SearchCourseText=$this->input->post('SearchCourse');
			if(empty($SearchCourseText))
			{
				echo '<p style="margin-left: 325px;margin-top: -74px;color: rgb(252, 8, 8);">Please Enter Course Name</p>';exit;
			}
			$this->db->select('*');
			$this->db->distinct('name');
			$this->db->from('courses');
			$this->db->like('name',$SearchCourseText);
			$this->db->where('univId',$universityId);
			$query=$this->db->get();
			
			$data['allCourse']= $query->result_array();
			
			$courseRow=count($query->result_array());
			if($courseRow>0)
				{
				
					$data["universityData"]=$this->collegemodel->getUniversityDataById($universityId);
					$data["universityDetail"]=$this->collegemodel->getUniversityDetailById($universityId);
	 
					
					//echo "<pre>";print_r($data);exit;
					echo $this->load->view("college/getFeatUnivCourseDeatail", $data);
				}
			else
				{
					echo "Sorry ! Not Search Found";
				}
		}
	public function engCollegePagination($page='')
				{
					$config = array();
					$config["base_url"] = base_url() . "college/engCollegePagination";
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
				$data['canonical'] = "https://meetuniv.com/popular-college";
				$data['description'] = "Get placed in the top 10 MBA colleges of the World to proceed your higher education in medical, Engineering and business universities.";
				$data['keywords'] = "UK university list,Meet UK Universities, university of uk,Abroad University events in india,Spot Admission & scholarships, university in uk, indian scholarships for studying abroad,Abroad Education Fairs in india,Meet top UK Universities,Top study abroad scholarships,2014 UK University Fair,study overseas,study abroad";
				$config = array();
				$config["base_url"] = base_url() . "college/engCollegePagination";
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
	
		
		public function SendEmailGenericFunction($to,$sub,$msg)
			{
			/*
				$this->load->library('email');
				$this->email->from('ankit@webinfomart.com', 'Ankit');
				$this->email->to($to); 
				//$this->email->cc('another@another-example.com'); 
				//$this->email->bcc('them@their-example.com');
				$this->email->subject($sub);
				$this->email->message($msg);	
				$this->email->send();
				echo $this->email->print_debugger();
				//$this->load->view("college/testmail");
			*/
			}
	
		public function testlink()
			{
				$this->load->view("college/test_link_vinay");
			}
	
	
}