<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class careerEdge extends CI_Controller
{
	
	public function index() 
	{
	
	if($this->request->is('post'))
				{
					$resumename=$_FILES['resume']['tmp_name'];

					$filename="@{$resumename}";
					$url='http://rezscore.com/a/34ad8b/grade';
					$curl_connection = curl_init();
					curl_setopt($curl_connection, CURLOPT_URL, $url);
					curl_setopt($curl_connection,CURLOPT_POST, 1);
					curl_setopt($curl_connection, CURLOPT_USERAGENT,'Chrome/26.0.1410.43');
					curl_setopt($curl_connection, CURLOPT_HEADER, 0);
					curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl_connection, CURLOPT_POSTFIELDS, array('resume'=>$filename));
					$res=(curl_exec($curl_connection));
					
					curl_close($curl_connection);
					$ms=simplexml_load_string($res);
					$this->set('result',$ms);
					
				
				}
	
	}	
					
				
}