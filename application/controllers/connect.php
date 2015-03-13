<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Connect extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->ci =& get_instance();
		$this->load->library('layout');
		$this->load->model('connectmodel');
		$this->load->model('collegemodel');
		$this->load->library("pagination");
		$this->load->library("curl_event");
		$this->ci->load->library('session');
		$this->load->model('tank_auth/users');
		$this->ci->load->config('tank_auth', TRUE);
		$this->ci->load->config('email', TRUE);
	}
	function index() {
		$this->session->set_userdata(array('last_url' => 'connect'));
		$data['active'] = 'connect';
		$data['title'] = "Upcoming Education Fairs & Events in India 2015 | College Admission";
		$data['description'] = "Find the latest news on college admission dates for UK, USA, Australia universities and Upcoming 2015 events and educational fairs in Delhi, Chennai, Mumbai India.";
		$data['canonical'] = "https://meetuniv.com/connect";
		$data['keywords'] = "UK university events ,Meet UK Universities events, Abroad University events in india,Spot Admission & scholarships, indian scholarships for studying abroad,Abroad Education Fairs in india,uk university education fair, Meet top Abroad Universities,2014 UK University Fair,study abroad,List of Scholarships for International Students,Study in Uk";
		$this->db_campaign = $this->ci->load->database('db_campaign', True);
		$data['totalLeads'] = $this->collegemodel->getCampaignData();
		$this->db = $this->ci->load->database('default', True);
		$this->layout->view('connect/connect',$data);
    }
	function CurrentDate()
	{
		$date = date('j/n/Y');
		$date2 =
		$array = array(
		  array(
			$date, 
			'Today', 
			'https://meetuniv.com/connect',
		  )
		);
		/* $array[1] = 
		  array(
			"27/09/2013", 
			'github drinkup', 
			'httpss://github.com/blog/category/drinkup', 
			'blue'
		  ); */
		$dates = $this->connectmodel->getConnectDates();
		foreach($dates as $dates)
		{
			
			//echo $ab = date_format($dates['date'], 'd-m-Y');
			//'https://meetuniv.com/connect/selectDateEvent/?a='.$ab, 
			$array[] = array($dates['date'], 
			$dates['tagLine'], 
			'https://meetuniv.com/connect/', 
			'blue');
		}
		header('Content-Type: application/json');
		echo json_encode($array);
	}
	
	function selectDateEvent()
	{
		echo $Sdate = $_GET['a'];//exit;
		$config = array();
        $config["base_url"] = base_url() . "connect/connectPagination";
        $config["total_rows"] = $this->connectmodel->record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data["results"] = $this->connectmodel->getAllConnectsByDate($config["per_page"], $page,$Sdate);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->connectmodel-> record_count();
		//$data['latestArticles'] = $this->collegemodel->getLatestArticle();
		if($this->session->userdata('user_id'))
		{
			$data['userId']	= $this->session->userdata('user_id');
			$data['userData'] = $this->users->getUserDetails($data['userId']);
		}
		$content = $this->load->view("connect/connectPagination",$data);
		echo $content;
	}
	
	function connectPagination($page='')
	{
		$config = array();
        $config["base_url"] = base_url() . "connect/connectPagination";
        $config["total_rows"] = $this->connectmodel->record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data["results"] = $this->connectmodel->getAllConnects($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data["countResults"] = $this->connectmodel-> record_count();
		//$data['latestArticles'] = $this->collegemodel->getLatestArticle();
		if($this->session->userdata('user_id'))
		{
			$data['userId']	= $this->session->userdata('user_id');
			$data['userData'] = $this->users->getUserDetails($data['userId']);
		}
		$content = $this->load->view("connect/connectPagination",$data);
		echo $content;
	}
	
	function ankit()
		{
			if($this->session->userdata('user_id'))
				{
					//$data['userId']	= $this->session->userdata('user_id');
					echo "loggedIn";
						exit;
				}
				else
				{
							
							//$this->session->sess_destroy();//exit;
							$random=rand(10000,99999);
						
							//$this->session->set_userdata('randCode1',$random);
							
 
							//print_r($this->session->userdata('randCode1'));exit;
							$data['phone']=$_GET['a'];
							//echo $co=5693;//$random;
							echo $co=$random;
							$this->session->set_userdata('hardcod',$co);
							//$sms = 'Meetuniversities.com "ConnectTestCODE-'.$co.'" Confirmation:\ndate: '.$data['connect']['date'].'\nTime: '.$data['connect']['time'].'\nLocation: '.$data['connect']['location'].'\nHelp: 08375034794\nMeetUniv.Com';
							$sms ="Welcome to MeetUniv.Com - Best Place to Meet Universities ! Please enter event code '".$co."' to continue with the online registration process.";
							
							$sms=urlencode($sms);
							$content=file_get_contents("https://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=letsrock&send=meetus&dest=91".$data['phone']."&msg=".$sms);
							//echo "NoLoggedIn";
							exit;
				}
		//exit;
		}
	function attendEvent()
	{
		$data = array(
					'connectId' => $this->input->post('connectId'),
					'name' => $this->input->post('name'),
					'phone' => $this->input->post('phone'),
		            'email' => $this->input->post('email'),
					'type'	=> $this->input->post('type'),
					'timeSlot'	=> $this->input->post('tslot')
					);
		echo $data['type'];
		//print_r($data);exit;
		//$this->connectmodel->getCurl($this->input->post());
		
		
		$data['connect'] = $this->connectmodel->getConnectDetailsForEmail($this->input->post('connectId'));
		$data['cityName'] = $this->connectmodel->getConnectCity($data['connect']['cityId']);
		
		$this->curl_event->event_user_registration($data);       //Sending data to curl
		$data['userEmail'] = $this->input->post('email');
		if($this->session->userdata('user_id'))
		{
			$data['userId']	= $this->session->userdata('user_id');
			echo "loggedIn";
		}
		else
		{
			echo "NoLoggedIn";
		}
		
		$eventType = $this->connectmodel->getEventType($data['connectId']);
		
		$EventTypeV = $eventType[0]['type'];
		
		
		$data['userId']	= $this->session->userdata('user_id');
		$userLevel=$this->users->getUserDetails($data['userId']);
		$level=$userLevel['userLevel'];
		
		
		print_r($level);
		
		$this->db->query('update connect set counter=counter+1 where id='.$data['connectId']);
		//$this->db->insert('connectUser',$data);
		$this->db->query("insert into connectUser(connectId,name,phone,email,userId,type,tockboxid,timeSlot) values(".$data['connectId'].",'".$data['name']."','".$data['phone']."','".$data['email']."','".$this->session->userdata('user_id')."','".$data['type']."','".$tockboxid."','".$data['timeSlot']."')");
		$data['videoId'] = $this->db->insert_id();//Now will base64 id of connectUser Table and send via email which will work as unique key for the event.

				if($data['type']=='sms')
		{
			print "hi";
			$sms = 'MeetUniv.com-All About Universities Worldwide.\nDirect "Connect" Reminder:\nDate: '.$data['connect']['date'].'\nTime: '.$data['connect']['time'].'\nLocation: '.$data['connect']['location'].'\nHelp: 08375034794\nMeetUniv.Com';
			$sms=urlencode($sms);
			$content=file_get_contents("https://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=letsrock&send=meetus&dest=91".$data['phone']."&msg=".$sms);
			print $content;
			print "hello";
		}
		else if($data['type']=='register')		
		{
			//$this->load->library('email');
			$this->email->set_newline("\r\n");
			$config['protocol'] = $this->config->item('mail_protocol','email');
			$config['smtp_host'] = $this->config->item('smtp_server','email');
			$config['smtp_user'] = $this->config->item('smtp_user_name','email');
			$config['smtp_pass'] = $this->config->item('smtp_pass','email');
			//print_r($data);
			$this->email->initialize($config);
			$this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
			$this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
			$this->email->to($data['email']);
			$this->email->bcc('nitin@meetuniv.com','debal@meetuniv.com');
			$this->email->subject('Attending Event Info');
			$this->email->message($this->load->view('email/registerEvent', $data, TRUE));
			$this->email->send();
			//send sms
			$sms = 'Meetuniversities.com "Connect" Confirmation:\nDate: '.$data['connect']['date'].'\nTime: '.$data['connect']['time'].'\nLocation: '.$data['connect']['location'].'\nHelp: 08375034794\nMeetUniv.Com';
			$sms=urlencode($sms);
			$content=file_get_contents("https://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=letsrock&send=meetus&dest=91".$data['phone']."&msg=".$sms);
		}
		$tokboxApi=45110162;
        $tokboxApiSecret='31d4a719e12598374808d1c71fcce849ec4be28e';
		
		require_once APPPATH.'libraries/SDK/OpenTokArchive.php';
		require_once APPPATH.'libraries/SDK/OpenTokSDK.php';
		require_once APPPATH.'libraries/SDK/OpenTokSession.php';

		$apiObj = new OpenTokSDK($tokboxApi,$tokboxApiSecret);
		$session = $apiObj->createSession(array(SessionPropertyConstants::P2P_PREFERENCE=> "enabled") );
		if($level=='1' || $EventTypeV=='0')
			{
				$tockboxid = "";
			}
		else
			{
				$tockboxid = $session->getSessionId();
			}
			
		exit;
	}
	public function filterByLocation($page='')
		{
			$city = $this->input->post('cityName');
			// if($city=delhi/ncr)
				// {
					// $city='delhi'
				// }
			$FiltercityArray = explode(',',$city);
			$cityIdArray = array();
			if(strlen($city))
			{
				foreach($FiltercityArray as $index=>$key)
				{
					$this->db->select('id');
					$this->db->where_in('cityName',$key);
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
			$config["base_url"] = base_url() . "connect/filterByLocationPagination/".$key;
			$config["total_rows"] = $this->connectmodel-> record_count($cityIdArray);
			$config["per_page"] = 5;
			$config["uri_segment"] = 3;
			$config['full_tag_open'] = '<div id="pagination">';
			$config['full_tag_close'] = '</div>';
			//print_r($config);exit;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			if($this->input->post('date'))
			{
				$data["results"] = $this->connectmodel-> getConnectByCityShortDate($config["per_page"], $page, $cityIdArray);
			}
			else if($this->input->post('univ'))
			{
				$data["results"] = $this->connectmodel-> getConnectByCityShortUniv($config["per_page"], $page, $cityIdArray);
			}
			
			else if($this->input->post('desti'))
			{
				$data["results"] = $this->connectmodel-> getConnectByCityShortDesti($config["per_page"], $page, $cityIdArray);
			}
			else
			{
				$data["results"] = $this->connectmodel-> test($config["per_page"], $page, $cityIdArray);
			}
			$data["links"] = $this->pagination->create_links();
			//print_r($data["links"]);exit;
			$data["countResults"] = $this->connectmodel-> record_count($cityIdArray);
			$content = $this->load->view("connect/connectPagination", $data);
			echo $content;
		}
	
	public function filterByLocationPagination($cityName='')
		{
	
			//echo $cityName;exit;
					$this->db->select('id');
					$this->db->where('cityName',$cityName);
					$this->db->from('city');
					$res = $this->db->get();
					$tempraryCity = $res->row();
					if($tempraryCity)
					{
					$cityIdArray = $tempraryCity->id;
					}
			$config = array();
			$config["base_url"] = base_url() . "connect/filterByLocationPagination/".$cityName;
			$config["total_rows"] = $this->connectmodel-> record_count($cityIdArray);
			$config["per_page"] = 5;
			$config["uri_segment"] = 4;
			$config['full_tag_open'] = '<div id="pagination">';
			$config['full_tag_close'] = '</div>';
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
			
			
					
					
					//echo $cityIdArray;exit;
			$data["results"] = $this->connectmodel-> test($config["per_page"], $page, $cityIdArray);
			
			//print_r($data["results"]);exit;
			
			
			$data["links"] = $this->pagination->create_links();
			
			$data["countResults"] = $this->connectmodel-> record_count($cityIdArray);
			$content = $this->load->view("connect/connectPagination", $data);
			echo $content;
		}
	
	
	
	
	function sendConnectSms(){
		
		$connectData = $this->connectmodel->getConnectUserDetails();
		
		foreach($connectData as $data){
			if($data['phone']){
				$sms = 'MeetUniv.com-All About Universities Worldwide.\nDirect "Connect" Reminder:\nDate: '.$data['date'].'\nTime: '.$data['time'].'\nLocation: '.$data['location'].'\nHelp: 8375034794\nMeetUniv.Com';
				$sms=urlencode($sms);
				$content=file_get_contents("https://api.unicel.in/SendSMS/sendmsg.php?uname=meetuni&pass=letsrock&send=meetus&dest=91".$data['phone']."&msg=".$sms);
			}
		}
		echo "Sms sent successfully!";exit;
	}
	
	function getEvent(){
		$cityId = $_POST['cityId'];
		$data[] = $this->connectmodel->getRecentEventByCityId($cityId);
		$html="";
		foreach($data as $d){
			$counter=1;
			foreach($d as $value){
				$html.= "<article class='alert' id='recentEvent'>";
				$html.= "<h3>".$value['univName']."</h3>";
				$html.= "<div class='span2'>".$value['tagLine']."</div>";
				$html.= "<div class='span1'><i class='icon-calendar'  style='font-size:14px'></i>&nbsp;".$value['date']."<br>";
				$html.= "<i class='icon-time' style='font-size:14px'></i>&nbsp;".$value['time']."</div>";
				$html.= "<a class='close' data-dismiss='alert' href='#'>&times;</a>"; 
				$html.= "</article>";
				$html.= "<button class='btn btn-mini btn-primary voilet' type='button' id='attending-".$counter."' onclick='showAttending(this.id);' style='margin-left: 325px;'>I am Attending</button>";
			    $html.= "<section class='attending attending-".$counter."' id='attending' style='margin:0px;padding-top:10px;display:none;'>";
				$html.= "<div class='input-prepend'> <span class='add-on'><img src='".base_url()."assets/img/name-icon.png'></span>";
				$html.= "<input class='input-small name' id='name-".$counter."' type='text' placeholder='Full Name:' value='' style='padding:2px 0px;'>";
				$html.= "<input type='hidden' id='connectid-".$counter."' name='connectid-".$counter."' value='".$value['id']."'>";
				$html.= "</div>";
				$html.= "<div class='input-prepend'> <span class='add-on'><img src='".base_url()."assets/img/mail-icon.png'></span>";
				$html.= "<input class='input-small email' id='email-".$counter."' type='text' placeholder='Email:' value='' style='padding:2px 0px;'>";
				$html.= "</div>";
				$html.= "<div class='input-prepend'> <span class='add-on'><img src='".base_url()."assets/img/cell-icon.png'></span>";
				$html.= "<input class='input-small phone' id='phone-".$counter."' type='text' placeholder='Mobile No:' value='' style='padding:2px 0px;'>";
				$html.= "</div>";
				$html.= "<input class='input-small' id='connect-".$counter."' value='".$value['id']."' type='hidden'>";
				$html.= "<button class='btn btn-mini btn-primary green_bu' type='button' onclick='attendEvent(".$counter.")'>Connect</button>";
				$html.= "</section>";
				$html.= "<img src='".base_url()."assets/images/form_preloader.gif' style='display: none; margin-left:210px;' id='loader-".$counter."'/>";
				$html.= "<section id='attendingsuccess' class='attendingsuccess-".$counter."' style='font-size:12px;color: green;display:none;'>";
				$html.= "<strong>You have successfully registered for this event!</strong>";
				$html.= "</section>";
				$counter++;
			}
		}
		echo $html;exit;
		
		
		//echo json_encode($data);
	}
	
	public function connect_cityJson()
		{
			$today_date='2013-11-26';
			$array=array();
			$this->db->select('*');
			//$this->db->where('date',$today_date);
			$this->db->from('connect');
			$query = $this->db->get();
			$cityArray = $query->result_array();
			foreach($cityArray as $city)
			{
				$array[] = $city['tagLine'];
			}
			header('Content-Type: application/json');
			echo json_encode($array);
		
		
		}
	public function cityJsonList()
	{
		$today_date=date('Y-m-d');
		$array=array();
		$this->db->select('cityName');
		$this->db->distinct('cityName');
		$this->db->where('date >=',$today_date);
		
		$this->db->join('connect','connect.cityId = city.id');
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
	
	
}