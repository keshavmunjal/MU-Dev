<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Quizmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}
	/* public function getLastQuizTime($userId)
	{
		$this->db->select('timeSpent');
		$this->db->from(' userquizrecord');
		$this->db->where('userId',$userId);
		$data = $this->db->get();
		$result = $data->result_array();
		return ($result)?$result[0]['timeSpent']:False;
	}
	public function savetime($userId)
	{
		$timespent = $_GET['timespent'];
		$data = array('timeSpent' => $timespent);
		$this->db->where('userId', $userId);
		$query=$this->db->update('userquizrecord',$data);
		return "success";
	} */
	/* public function saveanswer($userId)
	{
		$exists = $this->checkExists($userId);
		if(!$exists)
		{
			date_default_timezone_set('Asia/Kolkata');
			$ans = $this->input->get('question').':'.$this->input->get('answer').';';
			$data = array(
				'userId' => $userId,
				'answer' => $ans,
				'updatedTime' => date('Y-m-d H:i:s'),
			);
			$this->db->insert('userquizrecord',$data);
			return "Inserted Successful";
		}
		else
		{
			$ans = $this->updateingAnswer($exists, $this->input->get('answer'), $this->input->get('question'));
			$this->db->where('userId',$userId);
			$this->db->update('userquizrecord',array('answer'=>$ans));
			return "Updated successfully";
		}
	} */
	
	function savePartBScoreapi($email,$testid)
	{
		$data  = array(
				'io' => $this->input->post('io'),
				'cb' => $this->input->post('cb'),
				'aot'=> $this->input->post('aot'),
				'qa'=> $this->input->post('qa'),
				'rnd'=> $this->input->post('rnd')
		);
		//print_r($data);
		$this->db->where('email',$email);
		$this->db->where('testId',$testid);
		$this->db->update('scoreapi',$data);
	}
	function savePartBScore($userId)
	{
		$data  = array(
				'io' => $this->input->post('io'),
				'cb' => $this->input->post('cb'),
				'aot'=> $this->input->post('aot'),
				'qa'=> $this->input->post('qa'),
				'rnd'=> $this->input->post('rnd')
		);
		//print_r($data);
		$this->db->where('userId',$userId);
		$this->db->update('psychometric',$data);
	}
	function savePartCScore($userId)
	{
		$data  = array(
				'sec' => $this->input->post('sec'),
				'ver' => $this->input->post('ver'),
				'affi'=> $this->input->post('affi'),
				'rec'=> $this->input->post('rec'),
				'auto'=> $this->input->post('auto')
		);
		//print_r($data);
		$this->db->where('userId',$userId);
		$this->db->update('psychometric',$data);
	}
	function savePartCScoreapi($email,$testid)
	{
		$data  = array(
				'sec' => $this->input->post('sec'),
				'ver' => $this->input->post('ver'),
				'affi'=> $this->input->post('affi'),
				'rec'=> $this->input->post('rec'),
				'auto'=> $this->input->post('auto')
		);
		//print_r($data);
		$this->db->where('email',$email);
		$this->db->where('testId',$testid);
		$this->db->update('scoreapi',$data);
	}
	function savePartAScore($userId)
	{
		$testId = $this->input->post('testid');
		$source = ($this->session->userdata('source'))?$this->session->userdata('source'):1;
		$exists = $this->checkExists($userId,$testId,$source);
		//exit;
		
		$data  = array(
					'userId'    => $userId,
					'testId'	=> $testId,
					'sourceId'    => $source,
					'UpperLeft' => $this->input->post('UpperLeft'),
					'LowerLeft' => $this->input->post('LowerLeft'),
					'LowerRight'=> $this->input->post('LowerRight'),
					'UpperRight'=> $this->input->post('UpperRight')
			);
		if(!$exists)
		{
			//echo "insert";
			//print_r($data);
			echo "inserted";
			$this->db->insert('psychometric',$data);
		}
		else
		{
			echo "Update";
			$this->db->where('userId',$userId);
			$this->db->update('psychometric',$data);
		}
	}
	function savePartAScoreapi($email,$testid)
	{
		echo $exists = $this->checkExistsEmailApi($email,$testid);
		$data  = array(
				'email'     => $email,
				'testId'	=> $testid,
				'UpperLeft' => $this->input->post('UpperLeft'),
				'LowerLeft' => $this->input->post('LowerLeft'),
				'LowerRight'=> $this->input->post('LowerRight'),
				'UpperRight'=> $this->input->post('UpperRight')
		);
		if(!$exists)
		{
			//echo "insert";
			$this->db->insert('scoreapi',$data);
		}
		else
		{
			echo "Update";
			$this->db->where('email',$email);
			$this->db->where('testId',$testid);
			$this->db->update('scoreapi',$data);
		}
	}
	public function checkExistsEmailApi($email,$testid)
	{
		$query = $this->db->get_where('scoreapi',array('email'=>$email,'testId'=>$testid));
		$user = $query->row();
		return ($user)?$user->email:false;
	}
	public function checkExists($userId,$testid,$source)
	{
		$query = $this->db->get_where('psychometric',array('userId'=>$userId,'testId'=>$testid,'sourceId'=>$source));
		$user = $query->row();
		return ($user)?$user->userId:false;
	}
	/* public function updateingAnswer($currentAns, $answer, $question)
	{
		$qu = explode(';',$currentAns);
		//print_r($qu);
		$questionArray = array();
		for($i=0;$i<count($qu)-1;$i++)
		{
			$key = $qu[$i];
			$temp = explode(':',$key);
			$questionArray[$temp[0]] = $temp[1];
		}
		ksort($questionArray);
		//if(array_key_exists($question,$questionArray))
		$questionArray[$question] = $answer;
		ksort($questionArray);
		$newans="";
		foreach($questionArray as $index=>$key)
		{
			$newans.=$index.":".$key.";";
		}
		return $newans;
	} 
	function checkAllreadyAnswer($question)
	{
		$userId = $this->tank_auth->get_user_id();
		$query = $this->db->get_where('userquizrecord',array('userId'=>$userId));
		$rs = $query->row();
		if($rs)
		{
			$currentAns = $rs->answer;
			$qu = explode(';',$currentAns);
			//print_r($qu);
			$questionArray = array();
			for($i=0;$i<count($qu)-1;$i++)
			{
				$key = $qu[$i];
				$temp = explode(':',$key);
				$questionArray[$temp[0]] = explode(',',$temp[1]);
			}
			ksort($questionArray);
			if(array_key_exists($question,$questionArray))
				return $questionArray[$question];
			else
				return array();
		}
	}
	function getUserScore($userId)
	{
		$userId = $this->tank_auth->get_user_id();
		$query = $this->db->get_where('userquizrecord',array('userId'=>$userId));
		$rs = $query->row();
		$score = 0;
		if($rs)
		{
			$currentAns = $rs->answer;
			$qu = explode(';',$currentAns);
			//print_r($qu);
			$ansArray = array();
			for($i=0;$i<count($qu)-1;$i++)
			{
				$key = $qu[$i];
				$temp = explode(':',$key);
				$ansArray = explode(',',$temp[1]);
				foreach($ansArray as $index=>$k)
				{
					$score += $k;
				}
			}
			//ksort($questionArray);
			//print_r($questionArray);
			$this->db->where('userId',$userId);
			$this->db->update('userquizrecord',array('score'=>$score));
			return $score;
		}
		return 0;
	}*/
	function enterApiUser()
	{
		$data = array(
			'email' => $_GET['email'],
			'testid' => $_GET['testid']
		);
		
		$this->db->select('*');
		$this->db->from('apiData');
		$this->db->where($data);
		$rs = $this->db->get();
		
		$entry = $rs->row();
		if(!($entry))
		{
			$this->db->insert('apiData',$data);
		}
	}
	function getUserScoreApi($userId)
	{
		$data = $this->db->get_where('psychometric',array('userId'=>$userId));
		return $data->row();
	}
	function getUserInfo($userId){
		$this->db->select('fullname,email,mobile');
		$this->db->from('users');
		$this->db->where('id',$userId);
		$data = $this->db->get();
		return $data->result_array();
		
	}

}