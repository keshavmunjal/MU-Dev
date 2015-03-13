<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Coursemodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}
	
	
	public function getAccreditationData($courseId)
	{
		$this->db->select('*');
		$this->db->from('accreditation');
		$this->db->where('courseId',$courseId);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function getStagesData($courseId)
	{
		$this->db->select('*');
		$this->db->from('stages');
		$this->db->where('courseId',$courseId);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function getDegreeClassesData($courseId)
	{
		$this->db->select('*');
		$this->db->from('degreeclass');
		$this->db->where('courseId',$courseId);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function getContinuationData($courseId)
	{
		$this->db->select('*');
		$this->db->from('continuation');
		$this->db->where('courseId',$courseId);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function getEmploymentData($courseId)
	{
		$this->db->select('*');
		$this->db->from('employment');
		$this->db->where('courseId',$courseId);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function getJobData($courseId)
	{
		$this->db->select('*');
		$this->db->from('jobtype');
		$this->db->where('courseId',$courseId);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function getEntryData($courseId)
	{
		$this->db->select('*');
		$this->db->from('entry');
		$this->db->where('courseId',$courseId);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function getSalaryData($courseId)
	{
		$this->db->select('*');
		$this->db->from('salary');
		$this->db->where('courseId',$courseId);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function getCommonData($courseId)
	{
		$this->db->select('*');
		$this->db->from('common');
		$this->db->where('courseId',$courseId);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function getTariffData($courseId)
	{
		$this->db->select('*');
		$this->db->from('tariff');
		$this->db->where('courseId',$courseId);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function getNssData($courseId)
	{
		$this->db->select('*');
		$this->db->from('nss');
		$this->db->where('courseId',$courseId);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function getCounterValue($courseId)
	{
		$this->db->select('*');
		$this->db->from('courses');
		$this->db->where_in('courseId', $courseId);
		$query=$this->db->get();
		return $countPage = $query->result_array();
		
	}
	
	public function countCourses($count, $courseId)
	{
		$query = $this->db->query("UPDATE courses SET page_count='".$count."' WHERE courseId='".$courseId."'");
		
	}
	
	
	
}