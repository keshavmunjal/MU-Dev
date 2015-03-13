<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class qansr extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}
	
	public function getRecentQuestion()
		{ 
			$this->db->select('questions.*,users.fullname');
			
			$this->db->from('questions');
			$this->db->join('users',' questions.userId= users.id');
			$query = $this->db->get();
			//echo $this->db->last_query();exit;
			return $query->result_array(); 
		}
		public function findRecentQuestion()
		{ 
			$this->db->select('*');
			$this->db->where('phoneVerified','1');
			$this->db->from('questions');
			$query = $this->db->get();
			$data=$query->result_array(); 
			return ($data)?$data:false;
		}
		public function findQuestionName($id)
		{ 
			$this->db->select('*');
			$this->db->where('id',$id);
			$this->db->from('questions');
			$query = $this->db->get();
			$data=$query->result_array(); 
			return ($data)?$data:false;
		}
		
	public function getUserId($usermobile)
			{
				$this->db->select('id');
				$this->db->where('email',$usermobile);
				$this->db->from('users');
			$query = $this->db->get();
			
			return $query->result_array(); 
			}
	
	
	public function getQuestionId()
		{
			$this->db->select('*');
			$this->db->from('categories');
			$query = $this->db->get();
			//echo $this->db->last_query();exit;
			return $query->result_array(); 
		}
	public function putRecentQuestion($data)
	{
			$this->db->insert('questions', $data); 
	}
	public function checkMobileCodeExist($code,$mobile)
	{
		$this->db->select('*');
		$this->db->where('verifiedCode',$code);
		$this->db->where('mobile',$mobile);
		$this->db->from('questions');
		$query=$this->db->get();
		$data=$query->result_array();
		return ($data)?$data:false;
	}
	public function checkMobileCodeUpdate($verifycode,$mobile,$userId){
		$this->db->set('phoneVerified','1');
		$this->db->set('userId',$userId);
		$this->db->where('mobile',$mobile);
		$this->db->where('verifiedCode',$verifycode);
		$data=$this->db->update('questions');
		return($data)?$data:false;
	}		
	public function getSelectAns($qusId)
		{
			$this->db->select('answers.*,users.fullname');
			$this->db->where('quesId',$qusId);
			$this->db->from('answers');
			$this->db->join('users',' answers.userId= users.id');
			$query = $this->db->get();
			//echo $this->db->last_query();exit;
			return $query->result_array(); 
		
		}
		
	public function getQusDetail($qusId)
	{
			$this->db->select('questions.*,users.fullname');
			$this->db->where('questions.id',$qusId);
			$this->db->from('questions');
			$this->db->join('users',' questions.userId= users.id');
			$query = $this->db->get();
			//echo $this->db->last_query();exit;
			return $query->result_array(); 
	}
	
	public function putRecentAnswer($data)
	{
			$this->db->insert('answers',$data);
			//echo $this->db->last_query();exit;
	}
	public function checkUserExistByEmail($email)
	{
		$this->db->select('id');
		$this->db->where('email',$email);
		$query=$this->db->get('users');
		$data=$query->result_array();
		return ($data)?$data[0]['id']:false;
	}
	public function insertUserByEmail($userdata)
	{
		$this->db->insert('users',$userdata);
		return $this->db->insert_id();
	}
	public function uploadQuetionByCsv($questionArray)
	{  
		$this->db->insert('questions',$questionArray);
	}
	
}	