<?php 

	$this->db->limit(5);
	$this->db->select('university.*,country.countryName,city.cityName');
	$this->db->join('country', 'country.id = university.countryId');
	$this->db->join('city', 'city.id = university.cityId');
	//$this->db->order_by("random"); 
	$this->db->where('university.countryId',13);
	$this->db->from('university');	
	$query=$this->db->get();
	$randUnivIfNull = $query->result_array();
	
?>