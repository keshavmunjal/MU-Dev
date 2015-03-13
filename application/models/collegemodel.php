<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Collegemodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}
	
	/* public function record_count()
	{
       return $totalUniversities=$this->db->count_all("university");
    } */
	public function total_count_univ()
	{
		$featured=array('0','1');
		$this->db->select('id');
 		$this->db->where_in('featured',$featured);
 		$this->db->from('university');
    	$query = $this->db->count_all_results();
    	return $query;

	}
	public function record_count($cityIdArray='')
	{
       if($cityIdArray)
	   {
	    $this->db->select('id');
		$this->db->from('university');
		$this->db->where_in('cityId',$cityIdArray);
		$query = $this->db->get();
		$rs = $query->result_array();
		return count($rs);
	   }
	   else
	   { 
		return $totalUniversities=$this->db->count_all("university");
	   }
    }
	
	public function uk_record_count()
	{
        $this->db->select('id');
		$this->db->from('university');
		$this->db->where('countryId',13);
		$query = $this->db->get();
		$rs = $query->result_array();
		return count($rs);
	}
	
	public function usa_record_count()
	{
        $this->db->select('id');
		$this->db->from('university');
		$this->db->where('countryId',18);
		$query = $this->db->get();
		$rs = $query->result_array();
		return count($rs);
	}
	
	public function popular_record_count()
	{
        $this->db->select('*');
		$this->db->order_by('page_count','desc');
		$this->db->limit(10);
        $query = $this->db->get("university");
		$rs = $query->result_array(); 
		return count($rs);
	}
	
	public function getAllUniversities($limit, $start)
	{
		$featured=array('0','1');
        $this->db->limit($limit, $start);
		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');
 		$this->db->where_in('featured',$featured);
 		$this->db->order_by('featured','desc');
       $query = $this->db->get("university");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $getAllUniversities[] = $row;
            }
            return $getAllUniversities;
        }
        return false;
	}
	public function getUniversityByCity($limit, $start, $cityIdArray)

	{

        $this->db->limit($limit, $start);
		
		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');

		if($cityIdArray)

		{

		$this->db->where_in('cityId',$cityIdArray);

		}

		$this->db->order_by('featured','desc');

        $query = $this->db->get("university");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $getAllUniversities[] = $row;

            }

            return $getAllUniversities;

        }

        return false;

	}

	public function getUniversityDataById($id)
	{
		$this->db->select('*');
		//$this->db->join('city', 'city.id = university.cityId');
		$this->db->from('university');
		$this->db->where('university.id',$id);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function getUniversityDetailById($id)
	{
		$this->db->select('*');
		$this->db->from('univDetails');
		$this->db->where('univId',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function getCoursesByCollege($univId)

	{
		//print_r($univId);exit;
		$query = $this->db->query("SELECT * FROM `courses` left join courseLevel on courses.ucasId=courseLevel.ucasId where univId=".$univId." order by courseLevel.level2 desc");

		return $query->result();

	}
	public function getCourseLevelName($level2)

	{

		$this->db->select('name');

		$this->db->where('level',$level2);

		$this->db->from('courseLevelC');

		$query = $this->db->get();

		$result = $query->row();

		return $result->name;

	}
	function getUnivLocationById($cityId,$countryId)
	{
		$location="";
		$this->db->select('cityName');
		$this->db->from('city');
		$this->db->where('id',$cityId);
		$query = $this->db->get();
		$univ = $query->row();

		if(isset($univ->cityName))
			$location = $location.$univ->cityName.",";
			
		$this->db->select('countryName');
		$this->db->from('country');
		$this->db->where('id',$countryId);
		$query = $this->db->get();
		$univ = $query->row();
		if(isset($univ->countryName))
			$location = $location." ".$univ->countryName;
			
		return $location;
	}
	function getFeaturedColleges()

	{

		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->from('university');
		
		$this->db->order_by('page_count','desc');
		//$this->db->where('featured','1');
		
		$this->db->limit(6);

		$query = $this->db->get();

		return $query->result_array();

	}
	
	function getLatestArticle()

	{

		  		
		$query = $this->db_forum->query("SELECT * FROM art_articles ORDER BY id DESC LIMIT 0, 5");
		//echo $this->db->last_query();exit;
		return $query->result();

	}
	
	function getRandomArticleForFeaturedCollge()
	{ 		
		$query = $this->db_forum->query("SELECT * FROM art_articles ORDER BY RAND() LIMIT 0, 5");
		//echo $this->db->last_query();exit;
		return $query->result();
	}
	
	
	function getCampaignData()

	{
		$query = $this->db_campaign->query("SELECT count('id') as num FROM leads");
		return $query->result();
	}
	
	public function getSatisfaction($courseIds)
	{
	
		//echo $courseIds;exit;
		$course_id = explode(',',$courseIds);
		//$course_id = array('21FPSY-N-PSY1', '21FSES-N-ASE1', '21SBFS-N-BFB1');
		// "<pre>";print_r($course_id);exit;
		$this->db->select('*');
		$this->db->from('nss');
		$this->db->where_in('courseId', $course_id);
		$query=$this->db->get();
		return $satisfaction = $query->result_array();
		
		//echo "<pre>";print_r($satisfaction);exit;
		
	}
	
	public function getCourseFee($courseIds)
	{
	
		$course_id = explode(',',$courseIds);
		$this->db->select('*');
		$this->db->from('course_fee');
		$this->db->where_in('courseId', $course_id);
		$query=$this->db->get();
		return $satisfaction = $query->result_array();
		
		//echo "<pre>";print_r($satisfaction);exit;
		
	}
	
	public function getUkUniversities($limit, $start)
	{
        $this->db->limit($limit, $start);
		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->order_by('featured','desc');
		$this->db->where('countryId','13');
        $query = $this->db->get("university");
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
				//echo "<pre>";print_r($row);
                $getUkUniversities[] = $row;
            }
            return $getUkUniversities;
        }//exit;
        return false;
	}
	
	public function getUsaUniversities($limit, $start)
	{
        $this->db->limit($limit, $start);
		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->order_by('featured','desc');
		$this->db->where('countryId','18');
        $query = $this->db->get("university");
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
				//echo "<pre>";print_r($row);
                $getUsaUniversities[] = $row;
            }
            return $getUsaUniversities;
        }//exit;
        return false;
	}
	
	public function getPopularUniversities($limit, $start)
	{
		$this->db->limit($limit, $start);
		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->order_by('page_count','desc');
		//$this->db->limit(6);
		$query = $this->db->get("university");
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
				//echo "<pre>";print_r($row);
                $getPopularUniversities[] = $row;
            }
            return $getPopularUniversities;
        }//exit;
        return false;
	}
	
	public function getCounterValue($univId)
	{
		$this->db->select('*');
		$this->db->from('university');
		$this->db->where_in('id', $univId);
		$query=$this->db->get();
		return $countPage = $query->result_array();
		
	}
	
	public function countUniversity($count, $univId)
	{
		$query = $this->db->query("UPDATE university SET page_count='".$count."' WHERE id='".$univId."'");
		
	}
	
	public function searched_record_count($courseName)
	{
		//echo $courseName;exit;
		$this->db->select('*');
		$this->db->from('courses');
		$this->db->join('university', 'university.id = courses.univId');
		$this->db->like('name', $courseName);
		//$this->db->where('name', $courseName);
		$this->db->group_by("univName");
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result_array());exit;
		return count($query->result_array());
	}
	
	public function get_search_university($courseName, $limit, $start)
	{
		
		$this->db->limit($limit, $start);
		$this->db->select('courses.*,university.*, country.countryName');
		$this->db->from('courses');
		$this->db->join('university', 'university.id = courses.univId');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->where('name', $courseName); 
		$this->db->group_by("univName");
		$query = $this->db->get();
		//print_r($query->result_array());
		//echo $this->db->last_query();exit;
		return $query->result_array();
       
	}
	
	public function record_count_country($countryIdArray='')
	{
       if($countryIdArray)
	   {
	    $this->db->select('id');
		$this->db->from('university');
		$this->db->where_in('countryId',$countryIdArray);
		$query = $this->db->get();
		$filteredUniversity = $query->result_array();
		return count($filteredUniversity);
	   }
	   else
	   { 
		return $totalUniversities=$this->db->count_all("university");
	   }
    }
	
	public function record_count_university($universityIdArray='')
	{
       if($universityIdArray)
	   {
	    $this->db->select('id');
		$this->db->from('university');
		$this->db->where_in('id',$universityIdArray);
		$query = $this->db->get();
		$filteredUniversity = $query->result_array();
		return count($filteredUniversity);
	   }
	   else
	   { 
		return $totalUniversities=$this->db->count_all("university");
	   }
    }
	
	public function getUniversityByCountry($limit, $start, $countryIdArray)
	{
		//print_r($countryIdArray);exit;
		$this->db->limit($limit, $start);
		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');
		if($countryIdArray)
		{
		$this->db->where_in('countryId',$countryIdArray);
		}
		$this->db->order_by('featured','desc');
        $query = $this->db->get("university");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $getAllUniversities[] = $row;
            }
            return $getAllUniversities;
        }
        return false;
	}
	
	public function getUniversityByUniversityName($limit, $start, $universityIdArray)
	{
		//print_r($countryIdArray);exit;
		$this->db->limit($limit, $start);
		if($universityIdArray)
		{
		$this->db->where_in('id',$universityIdArray);
		}
		$query = $this->db->get("university");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $getAllUniversities[] = $row;
            }
            return $getAllUniversities;
        }
        return false;
	}
	/*
	public function getCountryByUniversityName($limit, $start, $universityCountryId)
		{
			//print_r($countryIdArray);exit;
			$this->db->limit($limit, $start);
			if($universityCountryId)
			{
			$this->db->where_in('id',$universityCountryId);
			}
			$query = $this->db->get("country");
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$getAllUniversities[] = $row;
				}
				//echo $getAllUniversities[0]->countryName;
				return $getAllUniversities;
			}
			return false;
		}
		*/
	public function add_colleges($userId='',$collegeId)
	{
		
		$this->db->select('*');
		$this->db->from('users_saved_college');
		$this->db->where('user_id', $userId);
		$query=$this->db->get();
		$college = $query->result_array();
		$val = array();
		foreach($college as $c){
			$val[] = $c['college_id'];
		}
		//$key = array_search($collegeId, $val);
		if (in_array($collegeId, $val)) {
			$key = '10';
		}
		
		if(empty($key)){
			$add = array(
						'user_id' => $userId,
						'college_id' => $collegeId
			);
			$this->db->insert('users_saved_college', $add);
		}
    }
	
	public function getCollegeDetail()
	{
		$userId = $this->tank_auth->get_user_id();
		$this->db->select('*');
		$this->db->from('users_saved_college');
		$this->db->where('user_id', $userId);
		$query=$this->db->get();
		$college = $query->result_array();
		return $college;
		
    }
	
	public function college_count($userId='')
	{
		$this->db->select('*');
		$this->db->from('users_saved_college');
		$this->db->where('user_id', $userId);
		$query=$this->db->get();
		$college = $query->result_array();
		return count($college);
    }
	
	public function getCollegeName($userId='')
	{
	
		$query = $this->db->query("SELECT i.univName,i.id,c.countryName FROM users_saved_college as u left join university as i on i.id=u.college_id left join country as c on c.id=i.countryId WHERE u.user_id ='".$userId."'");
		return $query->result_array();
		
    }
	
	public function getAustraliaUniversities($limit, $start)
	{
        $this->db->limit($limit, $start);
		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->order_by('featured','desc');
		$this->db->where('countryId','20');
        $query = $this->db->get("university");
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
				//echo "<pre>";print_r($row);
                $getUsaUniversities[] = $row;
            }
            return $getUsaUniversities;
        }//exit;
        return false;
	}
	
	public function australia_record_count()
	{
        $this->db->select('id');
		$this->db->from('university');
		$this->db->where('countryId',20);
		$query = $this->db->get();
		$rs = $query->result_array();
		return count($rs);
	}
	
	public function getCanadaUniversities($limit, $start)
	{
        $this->db->limit($limit, $start);
		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->order_by('featured','desc');
		$this->db->where('countryId','19');
        $query = $this->db->get("university");
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
				//echo "<pre>";print_r($row);
                $getUsaUniversities[] = $row;
            }
            return $getUsaUniversities;
        }//exit;
        return false;
	}
	
	public function canada_record_count()
	{
        $this->db->select('id');
		$this->db->from('university');
		$this->db->where('countryId',19);
		$query = $this->db->get();
		$rs = $query->result_array();
		return count($rs);
	}
	
	public function getSingaporeUniversities($limit, $start)
	{
        $this->db->limit($limit, $start);
		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->order_by('featured','desc');
		$this->db->where('countryId','22');
        $query = $this->db->get("university");
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
				//echo "<pre>";print_r($row);
                $getUsaUniversities[] = $row;
            }
            return $getUsaUniversities;
        }//exit;
        return false;
	}
	
	public function singapore_record_count()
	{
        $this->db->select('id');
		$this->db->from('university');
		$this->db->where('countryId',22);
		$query = $this->db->get();
		$rs = $query->result_array();
		return count($rs);
	}
	
	public function getOtherUniversities($limit, $start)
	{
        $this->db->limit($limit, $start);
		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->order_by('featured','desc');
		$countryIdArray=array('13','18','19','20','22');//added by ankit jain 21/01/2015
		$this->db->where_not_in('countryId',$countryIdArray);
		//$this->db->where('countryId','22');
        $query = $this->db->get("university");
		//echo $this->db->last_query();exit;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
				//echo "<pre>";print_r($row);
                $getUsaUniversities[] = $row;
            }
            return $getUsaUniversities;
        }//exit;
        return false;
	}
	
	public function otherCollege_record_count()
	{
        $this->db->select('id');
		$this->db->from('university');
		$countryIdArray=array('13','18','19','20','22');//added by ankit jain 21/01/2015
		$this->db->where_not_in('countryId',$countryIdArray);
		//$this->db->where_not_in('countryId','13,18,19,20,22');
		//$this->db->where('countryId',22);
		$query = $this->db->get();
		$rs = $query->result_array();
		return count($rs);
	}
	
	
	
	public function getengineeringColleges($limit, $start)
		{
		
			$engcollegeid=array(975,794,531,795,976,977,455,978,979,974);
			$this->db->limit($limit, $start);
			$this->db->select('university.*, country.countryName');
			$this->db->join('country', 'country.id = university.countryId');
			$this->db->where_in('university.id',$engcollegeid);
			$this->db->order_by('page_count','desc');
			$query = $this->db->get("university");
		
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
			
                $getengineeringUniversities[] = $row;
            }
            return $getengineeringUniversities;
			}//exit;
			
			return false;
		}
	
	
		public function getmbaColleges($limit, $start)
		{
		
			$mbacollegeid=array(980,981,982,983,984,985,986,987,988,989);
			$this->db->limit($limit, $start);
			$this->db->select('university.*, country.countryName');
			$this->db->join('country', 'country.id = university.countryId');
			$this->db->where_in('university.id',$mbacollegeid);
			$this->db->order_by('page_count','desc');
			$query = $this->db->get("university");
		
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
			
                $getmbaUniversities[] = $row;
            }
            return $getmbaUniversities;
			}//exit;
			
			return false;
		}
		
		
		public function gettopRankedColleges($limit, $start)
		{
		
			$mbacollegeid=array(974,531,680,445,985,794,986,990,991,992,993);
			$this->db->limit($limit, $start);
			$this->db->select('university.*, country.countryName');
			$this->db->join('country', 'country.id = university.countryId');
			$this->db->where_in('university.id',$mbacollegeid);
			$this->db->order_by('page_count','desc');
			$query = $this->db->get("university");
		
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
			
                $getmbaUniversities[] = $row;
            }
            return $getmbaUniversities;
			}//exit;
			
			return false;
		}
	
	public function get_search_alluniversity($courseName)
		{
		/*
			$this->db->select('*');
		//	$this->db->distinct('univId');
			$this->db->from('university');
			$this->db->where_in('id',$all_univid);
			$query = $this->db->get();
			return $query->result_array();
		*/
				
					$this->db->select('courses.*,university.*, country.countryName');
					//$this->db->distinct('courses.*,university.*, country.countryName');
					$this->db->from('courses');
					$this->db->join('university', 'university.id = courses.univId');
					$this->db->join('country', 'country.id = university.countryId');
					//$this->db->like('name', $courseName); 
					$this->db->where_in('name',$courseName);
					$this->db->group_by("univName");
					$query = $this->db->get();
					//print_r($query->result_array());
					//echo $this->db->last_query();exit;
					return $query->result_array();
				
		}
		
		
	public function getAllUnversityid($courseName)
		{
		/*
			$this->db->select('univId');
			$this->db->distinct('univId');
			$this->db->from('courses');
			$this->db->where_in('name',$courseName);
			$query = $this->db->get();
			return $query->result_array();
		*/
		
		
		//$this->db->limit($limit, $start);
		$this->db->select('courses.univId,university.*');
		//$this->db->distinct('courses.*,university.*');
		$this->db->from('courses');
		$this->db->join('university', 'university.id = courses.univId');
		
		//$this->db->join('country', 'country.id = university.countryId');
		
		$this->db->where_in('name',$courseName);
		//$this->db->like('name', $courseName); 
		//$this->db->group_by("univName");
		
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		return $query->result_array();
		
		}	
	
	public function PCourseLevel($p_course)
		{
			$this->db->select('ucasId');
			$this->db->distinct('ucasId');
			$this->db->where('level1',$p_course);
			$this->db->from('courseLevel');
			$query=$this->db->get();
			//echo $this->db->last_query();exit;
			return $query->result_array();
			
		}	
		
		public function PtoChildCourse($a1,$univid)
			{	
			//$univid=597;
			$query = $this->db->query("SELECT name,courseId,kisMode FROM courses where ucasId in($a1) and univId=$univid");
				//echo $this->db->last_query();exit;
			return $query= $query->result_array();
			/*
				$this->db->select('name');
				$this->db->distinct('name');
				//$this->db->where('univId',$univId)
				$this->db->where_in('ucasId',$a1);
				$this->db->from('courses');
				$query=$this->db->get();
				echo $this->db->last_query();exit;
				return $query->result_array();
				*/
			}
		
	public function c_ccourse1($p_course)
		{
			$this->db->select('level3');
			$this->db->distinct('level3');
			$this->db->like('level1',$p_course);
			$this->db->from('courseLevel');
			$query=$this->db->get();
			return $query->result_array();
			
		}		
	
	public function c_ccourse123($a1)
		{	
		$query = $this->db->query("SELECT distinct(name) FROM courses where ucasId in($a1)");
			
			//$query = $this->db->query("SELECT name,level FROM courseLevelSC where level in($a1)");
				//echo $this->db->last_query();exit;
			return  $query->result_array();
				
		}	
	public function getUniversityByCountryCourse($limit, $start, $countryIdArray)
	{
		//print_r($countryIdArray);exit;
		$univid = $this->session->userdata('univid');
		$this->db->limit($limit, $start);
		$this->db->select('university.*, country.countryName');
		$this->db->join('country', 'country.id = university.countryId');
		if($countryIdArray)
		{
		$this->db->where_in('countryId',$countryIdArray);
		$this->db->where_in('id',$univid);
		}
		$this->db->order_by('featured','desc');
        $query = $this->db->get("university");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $getAllUniversities[] = $row;
            }
            return $getAllUniversities;
        }
        return false;
	}
	
	public function all_p_course()
		{
		
			$this->db->select();
			$this->db->from('courseLevelP');
			$query = $this->db->get();
			return $query->result();
				
				
		}
	
	public function get_search_universityall_p_course($b2,$limit, $start)
	{
	
		
		$this->db->limit($limit, $start);
		$this->db->select('courses.*,university.*, country.countryName');
		$this->db->from('courses');
		$this->db->join('university', 'university.id = courses.univId');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->where_in('name',$b2);
		//$this->db->where('name', $courseName); 
		$this->db->group_by("univName");
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		return $query->result_array();
       
	}
	
	
	public function get_search_universityall_p_coursenolimit($courseName)
	{
	
		
		//$this->db->limit($limit, $start);
		$this->db->select('courses.*,university.*, country.countryName');
		$this->db->from('courses');
		$this->db->join('university', 'university.id = courses.univId');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->where_in('name',$courseName);
		//$this->db->like('name', $courseName); 
		$this->db->group_by("univName");
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		return $query->result_array();
       
	}
	
	public function searched_All_prnt_record_count($courseName)
	{
		//echo $courseName;exit;
		$this->db->select('*');
		$this->db->from('courses');
		$this->db->join('university', 'university.id = courses.univId');
		$this->db->where_in('name',$courseName);
		///$this->db->like('name', $courseName);
		$this->db->group_by("univName");
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result_array());exit;
		return count($query->result_array());
	}
	
	public function searched_record_countForSubCourse($courseName)
	{
		//echo $courseName;exit;
		$this->db->select('*');
		$this->db->from('courses');
		$this->db->join('university', 'university.id = courses.univId');
		//$this->db->like('name', $courseName);ankit jain
		$this->db->where('name', $courseName);
		$this->db->group_by("univName");
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result_array());exit;
		return count($query->result_array());
	}
	
	public function get_search_universityforSubCourse($courseName, $limit, $start)
	{
		
		$this->db->limit($limit, $start);
		$this->db->select('courses.*,university.*, country.countryName');
		$this->db->from('courses');
		$this->db->join('university', 'university.id = courses.univId');
		$this->db->join('country', 'country.id = university.countryId');
		$this->db->where('name', $courseName); 
		$this->db->group_by("univName");
		$query = $this->db->get();
		//print_r($query->result_array());
		//echo $this->db->last_query();exit;
		return $query->result_array();
	}
	
	public function SimillerCollegeIdRand($CourseName)
		{
			$this->db->limit(5);
			$this->db->select('univId');
			$this->db->distinct('univId');
			$this->db->from('courses');
			$this->db->where('name',$CourseName);
			$this->db->order_by("univId", "random"); 
			$query=$this->db->get();
			//echo $this->db->last_query();exit;
			return $query->result_array();
		}
	public function SimillerUniversityRand($SimilRandIdCollege)
		{
			
			$this->db->select('university.*,country.countryName,city.cityName');
			$this->db->join('country', 'country.id = university.countryId');
			$this->db->join('city', 'city.id = university.cityId');
			$this->db->where_in('university.id',$SimilRandIdCollege);
			$this->db->from('university');

			$query=$this->db->get();
			//echo $this->db->last_query();exit;
			return $query->result_array();
			
		}
		
		public function SimillerUniversityRandIfNull()
		{
			
			$this->db->select('university.*,country.countryName,city.cityName');
					$this->db->join('country', 'country.id = university.countryId');
					$this->db->join('city', 'city.id = university.cityId');
					$this->db->order_by('country.id', 'RANDOM');
					$this->db->limit(5);
					$this->db->where('university.countryId',13);
					$this->db->from('university');	
					$query=$this->db->get();
					
					//echo $this->db->last_query();exit;
					return $query->result_array();
			
		}
	public function SimillerUniversityRandTotalCourse($SimilRandIdCollege)
		{
		
			$this->db->from('courses');
			$this->db->where_in('univId',$SimilRandIdCollege);
			return $this->db->count_all_results();
			
		}
	
	public function getParentByUniv($level12)
		{
			
			$this->db->select('*');
			$this->db->from('courseLevelP');
			$this->db->where_in('level',$level12);
			$query=$this->db->get();
			//echo $this->db->last_query();exit;
			return $query->result_array();
		
		}
	
	public function FeaturedUnivCourseFee($courseId)
		{
			$this->db->select('MaximumFeeForEnglandDomicile');
			$this->db->from('course_fee');
			$this->db->where('courseId', $courseId);
			$queryfee=$this->db->get();
			//echo $this->db->last_query();exit;
			return $queryfee->result();
		
		}
		
	public function FeaturedUnivCourseSatisfaction($courseId)
		{
			$this->db->select('value');
			$this->db->from('nss');
			$this->db->where_in('courseId', $courseId);
			$querySati=$this->db->get();
			return $querySati->result();
		}
	
	public function getLevel1fromCourseLevel($ucasid)
		{
			$query = $this->db->query("SELECT distinct(level1) FROM courseLevel where ucasId in($ucasid)");
				//echo $this->db->last_query();exit;
			return $query->result_array();
		/*
			$this->db->select('level1');
			$this->db->distinct('level1');
			$this->db->from('courseLevel');
			$this->db->where_in('ucasId',$ucasid);
			$query2=$this->db->get();
			//echo $this->db->last_query();exit;
			return $query2->result_array();*/
		
		}

	public function PreUniv($UnivId)
		{
		$this->db_def = $this->load->database('default', TRUE);
		//$query = $this->db->query("SELECT `univName`,`id`  FROM (`university`) WHERE featured='1' and countryId='13' ORDER BY RAND() LIMIT 1");
		$query = $this->db_def->query("SELECT `univName`,`id` FROM (`university`) WHERE `id`=($UnivId-1)");
				
				//echo $this->db->last_query();exit;
			return $query->result();	
		}

	public function NextUniv($UnivId)
		{
		
			//$query = $this->db->query("SELECT `univName`,`id`  FROM (`university`) WHERE featured='1' and countryId='13' ORDER BY RAND() LIMIT 1");
				//echo $this->db->last_query();exit;
			//return $query->result();
		$this->load->database('default');
		$query = $this->db->query("SELECT `univName`,`id` FROM (`university`) WHERE `id`=($UnivId+1)");
				//echo $this->db->last_query();exit;
			return $query->result();	
		}
		
	public function getCityName($cityId)
	{
		
		//echo $cityId;//exit;
		$query = $this->db->query('SELECT cityName from city where id="'.$cityId.'"');
				//echo $this->db->last_query();exit;
			return $query->result();
	}
}