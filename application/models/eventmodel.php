<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Eventmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}
	
	function upload_csv()	{
	
		
		 $csvFileName=$_FILES['filename']['name'];
		/**************  Script for importing csv file starts  ********************/
			if(is_uploaded_file($_FILES['filename']['tmp_name'])) 
			{	
				$handle = fopen($_FILES['filename']['tmp_name'], "r");
				//Script to add leads  here do not exceed than allowed package
				
				while(($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
				{ 
					if($checkIfLeadExceed<=$allowedleadcount)
					{ 
						$add = array(
							'leadCreatedByID' => $leadCreatedByID,
							'organizationId' => $organizationId,
							'source' => $validsource,
							'tags' => $leadsTags,							
							'name' => mysql_real_escape_string($data[0]),			
							'email' => mysql_real_escape_string($data[1]),					
							'phone' => mysql_real_escape_string($data[2])
						);
						$this->db->insert('leads', $add);
						$id = $this->db->insert_id();
						$addLoadToImport = $this->addLeadCountInUsage(1);
						$phonelookup[$success]['id'] = $id;
						$phonelookup[$success]['phone'] = mysql_real_escape_string($data[2]);
						$success++;
						//adding content to leads table ends
					}
					else
					{
						$count++;
					} 
						 
						}
						
			}
					
				fclose($handle);
			
		
	}
	
	
}