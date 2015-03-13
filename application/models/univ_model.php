<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Univ_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}
	function search_univ()
	{
		$this->db->select('*');
		$this->db->from('university');
		$this->db->like('univName',$this->input->post('univKeyWord'));
		$query=$this->db->get();
		return $query->result_array();
	}
}