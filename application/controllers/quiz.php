<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->ci =& get_instance();
		$this->ci->load->config('tank_auth', TRUE);
		$this->load->library('layout');
		$this->load->library('form_validation');
		$this->load->library('tank_auth');
		$this->load->model('quizmodel');
		$this->lang->load('tank_auth');
		$this->load->model('tank_auth/users');
	}
	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {	
			$this->session->set_userdata(array('last_url' => 'gifted-intro'));
			//echo $this->session->userdata('last_url');exit;
			redirect('/login');
		}
		
		$data['title'] = "MeetUniv.Com : Psychometric Analysis";
		$data['description'] = "Meet univ.com : Psychometrics is the field of study concerned with the theory and technique of psychological measurement, which includes the measurement of knowledge, abilities, attitudes, personality traits, and educational measurement.";
		$data['keywords'] = "Meet univ.com, Psychometric Analysis, Spot Admission & scholarships, indian scholarships for studying abroad,study abroad,Abroad Education Fairs in india, Abroad University events in india,Top study abroad scholarships.";
		$userId=$this->tank_auth->get_user_id();
		$query = $this->db->get('question',40);
		$data['question'] = $query->result();
		$this->layout->view('quiz/quiz',$data);
	}
	function savescore()
	{
		$userId=$this->tank_auth->get_user_id();
		$part = $this->input->post('part');
		switch($part)
		{
			case 'A':
			$this->quizmodel->savePartAScore($userId);
			break;
			case 'B':
			$this->quizmodel->savePartBScore($userId);
			break;
			case 'C':
			$this->quizmodel->savePartCScore($userId);
		}
		
	}
	function saveapiscore()
	{
		//print_r($this->input->post());exit;
		$email = $this->input->post('email');
		$testid = $this->input->post('testid');
		$part = $this->input->post('part');
		if($part=='A')
		{
			$this->quizmodel->savePartAScoreapi($email,$testid);
		}
		if($part=='B')
		{
			$this->quizmodel->savePartBScoreapi($email,$testid);
		}
		if($part=='C')
		{
			$this->quizmodel->savePartCScoreapi($email,$testid);
		}
	}
	function api()
	{
	
		//checking right paramter passed or not
		$this->load->library('psychometric');
		
		if(isset($_GET['uname']) && isset($_GET['pass']) && isset($_GET['email']) && isset($_GET['name']) && isset($_GET['testid']))
		{
			
		}
		else
		{
			echo "All Parameter Required check if you are missing somthing.";
			exit;
		}//end
		
		//custom function for checking authentication
		$valid = $this->psychometric->checkAuthentication();
		//print_r($this->session->all_userdata());exit;
		//end of authentication function
		if($valid)
		{
			$this->quizmodel->enterApiUser();
			$data['active'] = '';
			$data['title'] = "MeetUniv.Com :Gifted Authorized";
			$data['description'] = "MeetUniv.com";
			$data['keywords'] = "";
			$this->layout->view('quiz/apiquiz',$data);
		}
		else
		{
			echo "Authentication Required Unknown username, password combination.";
		}
	}
	function report()
	{
		if (!$this->tank_auth->is_logged_in()) {									
			redirect('/login');
		}
		$data['active'] = '';
		$data['title'] = "MeetUniv.Com : Psychometric Analysis Report";
		$data['description'] = "Meet univ.com : Psychometrics is the field of study concerned with the theory and technique of psychological measurement, which includes the measurement of knowledge, abilities, attitudes, personality traits, and educational measurement.";
		$data['keywords'] = "Meet univ.com, Psychometric Analysis, Spot Admission & scholarships, indian scholarships for studying abroad,study abroad,Abroad Education Fairs in india, Abroad University events in india,Top study abroad scholarships.";
		$userId=$this->tank_auth->get_user_id();
		if(!$userId)
		{
			echo "error";exit;
		}
		$data['score'] = $this->quizmodel->getUserScoreApi($userId);
		
		$data['graph_value'] = $this->getSectionValue($data['score']);
		$this->session->set_userdata(array('gvalue' => $data['graph_value']));
		
		$data['link'] = $this->calculateForPdf($data['score']);
		$data['max_score'] = $this->maxScoreForInterestProfile($data['score']);
		$data['min_score'] = $this->minScoreForInterestProfile($data['score']);
		$data['max_score_motivation'] = $this->maxScoreForMotivationAndWork($data['score']);
		$data['min_score_motivation'] = $this->minScoreForMotivationAndWork($data['score']);
		//echo "<pre>";print_r($data);exit;
		if(!empty($data['score'])){
			$this->layout->view('quiz/report',$data);
		}else{
			redirect('http://meetuniv.com/gifted');
		}
		//$this->layout->view('quiz/report',$data);
	}
	
	function reportapi()
	{
		$data['active'] = '';
		$data['title'] = "MeetUniv.Com :Test Score";
		$data['description'] = "MeetUniv.com";
		$data['keywords'] = "";
		$userId=$this->tank_auth->get_user_id();
		if(!$userId)
		{
			echo "error";exit;
		}
		$data['score'] = $this->quizmodel->getUserScoreApi($userId);
		$data['graph_value'] = $this->getSectionValue($data['score']);
		$data['link'] = $this->calculateForPdf($data['score']);
		$data['max_score'] = $this->maxScoreForInterestProfile($data['score']);
		$data['min_score'] = $this->minScoreForInterestProfile($data['score']);
		$data['max_score_motivation'] = $this->maxScoreForMotivationAndWork($data['score']);
		$data['min_score_motivation'] = $this->minScoreForMotivationAndWork($data['score']);
		//echo "<pre>";print_r($data);
		$this->layout->view('quiz/reportapi',$data);
	}
	
	function maxScoreForInterestProfile($ms){
		//echo "<pre>";print_r($ms);exit;
		$io = $ms->io;
		$cb = $ms->cb;
		$aot = $ms->aot;
		$qa = $ms->qa;
		$rnd = $ms->rnd;

		 if($io>=$cb && $io>=$aot && $io>=$qa && $io>=$rnd)
		{
			$maxValueInterestProfile = $io;
			$interestProfileText = "Influncing Other";
		} 
		
		if($aot>=$io && $aot>=$cb && $aot>=$qa && $aot>=$rnd)
		{
			$maxValueInterestProfile = $aot;
			$interestProfileText = "Application of Technology";
		}
		
		 if($cb>=$io && $cb>=$aot && $cb>=$qa && $cb>=$rnd)
		{
			$maxValueInterestProfile = $cb;
			$interestProfileText = "Controlling Business";
		} 
		
		 if($qa>=$io && $qa>=$aot && $qa>=$cb && $qa>=$rnd)
		{
			$maxValueInterestProfile = $qa;
			$interestProfileText = "Quantitative Analysis";
		} 
		
		 if($rnd>=$io && $rnd>=$aot && $rnd>=$qa && $rnd>=$cb)
		{
			$maxValueInterestProfile = $rnd;
			$interestProfileText = "Research & Development";
		}  
		
		$maxValue = $interestProfileText.'-'.$maxValueInterestProfile;
	
		return $maxValue;
		
	}
	
	//Min Score For Interest Profile
	
	function minScoreForInterestProfile($ms){
		//echo "<pre>";print_r($ms);exit;
		$io = $ms->io;
		$cb = $ms->cb;
		$aot = $ms->aot;
		$qa = $ms->qa;
		$rnd = $ms->rnd;
		
		if($io<=$cb && $io<=$aot && $io<=$qa && $io<=$rnd)
		{
			$minValueInterestProfile = $io;
			$interestProfileMinText = "Influncing Other";
		} 
		
		if($aot<=$io && $aot<=$cb && $aot<=$qa && $aot<=$rnd)
		{
			$minValueInterestProfile = $aot;
			$interestProfileMinText = "Application of Technology";
		}
		
		 if($cb<=$io && $cb<=$aot && $cb<=$qa && $cb<=$rnd)
		{
			$minValueInterestProfile = $cb;
			$interestProfileMinText = "Controlling Business";
		} 
		
		 if($qa<=$io && $qa<=$aot && $qa<=$cb && $qa<=$rnd)
		{
			$minValueInterestProfile = $qa;
			$interestProfileMinText = "Quantitative Analysis";
		} 
		
		 if($rnd<=$io && $rnd<=$aot && $rnd<=$qa && $rnd<=$cb)
		{
			$minValueInterestProfile = $rnd;
			$interestProfileMinText = "Research & Development";
		} 
		
		$minValue = $interestProfileMinText.'-'.$minValueInterestProfile;
		return $minValue;
		
	}
	
	//Max Score for Motivation And Work
	
	function maxScoreForMotivationAndWork($maxscore){
	
		$sec = $maxscore->sec;
		$ver = $maxscore->ver;
		$affi = $maxscore->affi;
		$rec = $maxscore->rec;
		$auto = $maxscore->auto;
		//echo $rnd;

		
		if($sec>=$ver && $sec>=$affi && $sec>=$rec && $sec>=$auto)
		{
			$maxValueMotivationAndWork = $sec;
			$motivationAndWorkText = "Security";
		} 
		
		if($ver>=$sec && $ver>=$affi && $ver>=$rec && $ver>=$auto)
		{
			$maxValueMotivationAndWork = $ver;
			$motivationAndWorkText = "Variety";
		}
		
		 if($affi>=$sec && $affi>=$ver && $affi>=$rec && $affi>=$auto)
		{
			$maxValueMotivationAndWork = $affi;
			$motivationAndWorkText = "Affiliation";
		}
		
		if($rec>=$sec && $rec>=$ver && $rec>=$affi && $rec>=$auto)
		{
			$maxValueMotivationAndWork = $rec;
			$motivationAndWorkText = "Recognition";
		} 
		
		 if($auto>=$sec && $auto>=$ver && $auto>=$affi && $auto>=$rec)
		{
			$maxValueMotivationAndWork = $auto;
			$motivationAndWorkText = "Autonomy";
		}  
		
		$maxValueForMotivation = $motivationAndWorkText.'-'.$maxValueMotivationAndWork;
		return $maxValueForMotivation;
		
	}
	
	//Min Score for Motivation And Work
	
	function minScoreForMotivationAndWork($minScore){
	
		$sec = $minScore->sec;
		$ver = $minScore->ver;
		$affi = $minScore->affi;
		$rec = $minScore->rec;
		$auto = $minScore->auto;
		
				
		if($sec<=$ver && $sec<=$affi && $sec<=$rec && $sec<=$auto)
		{
			$minValueMotivationAndWork = $sec;
			$motivationAndWorkMinText = "Security";
		} 
		
		if($ver<=$sec && $ver<=$affi && $ver<=$rec && $ver<=$auto)
		{
			$minValueMotivationAndWork = $ver;
			$motivationAndWorkMinText = "Variety";
		}
		
		 if($affi<=$sec && $affi<=$ver && $affi<=$rec && $affi<=$auto)
		{
			$minValueMotivationAndWork = $affi;
			$motivationAndWorkMinText = "Affiliation";
		}
		
		if($rec<=$sec && $rec<=$ver && $rec<=$affi && $rec<=$auto)
		{
			$minValueMotivationAndWork = $rec;
			$motivationAndWorkMinText = "Recognition";
		} 
		
		 if($auto<=$sec && $auto<=$ver && $auto<=$affi && $auto<=$rec)
		{
			$minValueMotivationAndWork = $auto;
			$motivationAndWorkMinText = "Autonomy";
		}  
		
		$minValueForMotivation = $motivationAndWorkMinText.'-'.$minValueMotivationAndWork;
		return $minValueForMotivation;
	
	}
	
	function calculateForPdf($rs){
		//echo "<pre>";print_r($rs);
		
		$io = $rs->io;
		$cb = $rs->cb;
		$aot = $rs->aot;
		$qa = $rs->qa;
		$rnd = $rs->rnd;
		
		//Max value For Interest Profile
		 if($io>=$cb && $io>=$aot && $io>=$qa && $io>=$rnd)
		{
			$maxValueInterestProfile = $io;
			$interestProfileText = "Influncing Other";
		} 
		
		if($aot>=$io && $aot>=$cb && $aot>=$qa && $aot>=$rnd)
		{
			$maxValueInterestProfile = $aot;
			$interestProfileText = "Application of Technology";
		}
		
		 if($cb>=$io && $cb>=$aot && $cb>=$qa && $cb>=$rnd)
		{
			$maxValueInterestProfile = $cb;
			$interestProfileText = "Controlling Business";
		} 
		
		 if($qa>=$io && $qa>=$aot && $qa>=$cb && $qa>=$rnd)
		{
			$maxValueInterestProfile = $qa;
			$interestProfileText = "Quantitative Analysis";
		} 
		
		 if($rnd>=$io && $rnd>=$aot && $rnd>=$qa && $rnd>=$cb)
		{
			$maxValueInterestProfile = $rnd;
			$interestProfileText = "Research Development";
		}  
		
		//echo $maxValueInterestProfile;
		//echo $interestProfileText;
		
		//Min value For Interest Profile
		
		 if($io<=$cb && $io<=$aot && $io<=$qa && $io<=$rnd)
		{
			$minValueInterestProfile = $io;
			$interestProfileMinText = "Influncing Other";
		} 
		
		if($aot<=$io && $aot<=$cb && $aot<=$qa && $aot<=$rnd)
		{
			$minValueInterestProfile = $aot;
			$interestProfileMinText = "Application of Technology";
		}
		
		 if($cb<=$io && $cb<=$aot && $cb<=$qa && $cb<=$rnd)
		{
			$minValueInterestProfile = $cb;
			$interestProfileMinText = "Controlling Business";
		} 
		
		 if($qa<=$io && $qa<=$aot && $qa<=$cb && $qa<=$rnd)
		{
			$minValueInterestProfile = $qa;
			$interestProfileMinText = "Quantitative Analysis";
		} 
		
		 if($rnd<=$io && $rnd<=$aot && $rnd<=$qa && $rnd<=$cb)
		{
			$minValueInterestProfile = $rnd;
			$interestProfileMinText = "Research Development";
		} 
		
		//echo $minValueInterestProfile;
		//echo $interestProfileText;
				
		
		//Motivation And Work
		
		$sec = $rs->sec;
		$ver = $rs->ver;
		$affi = $rs->affi;
		$rec = $rs->rec;
		$auto = $rs->auto;
		//echo $rnd;

		//Max value For Motivation And Work
		
		if($sec>=$ver && $sec>=$affi && $sec>=$rec && $sec>=$auto)
		{
			$maxValueMotivationAndWork = $sec;
			$motivationAndWorkText = "Security";
		} 
		
		if($ver>=$sec && $ver>=$affi && $ver>=$rec && $ver>=$auto)
		{
			$maxValueMotivationAndWork = $ver;
			$motivationAndWorkText = "Variety";
		}
		
		 if($affi>=$sec && $affi>=$ver && $affi>=$rec && $affi>=$auto)
		{
			$maxValueMotivationAndWork = $affi;
			$motivationAndWorkText = "Affiliation";
		}
		
		if($rec>=$sec && $rec>=$ver && $rec>=$affi && $rec>=$auto)
		{
			$maxValueMotivationAndWork = $rec;
			$motivationAndWorkText = "Recognition";
		} 
		
		 if($auto>=$sec && $auto>=$ver && $auto>=$affi && $auto>=$rec)
		{
			$maxValueMotivationAndWork = $auto;
			$motivationAndWorkText = "Autonomy";
		}  
		
		//echo $maxValueMotivationAndWork;
		//echo $motivationAndWorkText;
		
		//Min value For Motivation And Work
		
		if($sec<=$ver && $sec<=$affi && $sec<=$rec && $sec<=$auto)
		{
			$minValueMotivationAndWork = $sec;
			$motivationAndWorkMinText = "Security";
		} 
		
		if($ver<=$sec && $ver<=$affi && $ver<=$rec && $ver<=$auto)
		{
			$minValueMotivationAndWork = $ver;
			$motivationAndWorkMinText = "Variety";
		}
		
		 if($affi<=$sec && $affi<=$ver && $affi<=$rec && $affi<=$auto)
		{
			$minValueMotivationAndWork = $affi;
			$motivationAndWorkMinText = "Affiliation";
		}
		
		if($rec<=$sec && $rec<=$ver && $rec<=$affi && $rec<=$auto)
		{
			$minValueMotivationAndWork = $rec;
			$motivationAndWorkMinText = "Recognition";
		} 
		
		 if($auto<=$sec && $auto<=$ver && $auto<=$affi && $auto<=$rec)
		{
			$minValueMotivationAndWork = $auto;
			$motivationAndWorkMinText = "Autonomy";
		}  
		//echo $maxValueInterestProfile;
		
		
		$value = $this->getSectionValue($rs);
		
		//echo $maxValue;
		$value = 'maxtext1='.$interestProfileText.'&mintext1='.$interestProfileMinText.'&maxtext2='.$motivationAndWorkText.'&mintext2='.$motivationAndWorkMinText.'&value='.$value;
		
		return $value;
		
		
	}
	function getSectionValue($rs)
	{
		//Max value for UpperLeft, UpperRight, LowerLeft, LowerRight
		$upperLeft = $rs->upperLeft;
		$lowerLeft = $rs->lowerLeft;
		$lowerRight = $rs->lowerRight;
		$upperRight = $rs->upperRight;
		
		if($upperLeft>=$lowerLeft && $upperLeft>=$lowerRight && $upperLeft>=$upperRight)
		{
			$value = 1;
			
		} 
		
		if($lowerLeft>=$upperLeft && $lowerLeft>=$lowerRight && $lowerLeft>=$upperRight)
		{
			$value = 2;
			
		}
		
		 if($lowerRight>=$upperLeft && $lowerRight>=$lowerLeft && $lowerRight>=$upperRight)
		{
			$value = 3;
			
		}
		
		if($upperRight>=$upperLeft && $upperRight>=$lowerLeft && $upperRight>=$lowerRight)
		{
			$value = 4;
			
		} 
		
		return  $value;
	}
	
	function create_img($imgcount)
	{
		
		//echo "successs";
		
		$this->load->helper('file');
		$data = $_POST['base64data'];
		//print_r($data);exit;
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);
		
		$userId=$this->tank_auth->get_user_id();
		$graph1 = "graph".$imgcount."_".$userId.time().".png";
		
		$this->session->set_userdata(array('gvalue'.$imgcount => $graph1));
		
		//echo symbolic_permissions(fileperms('./index.php'));
		//file_put_contents('/tmp/image.png', $data);
		//print_r($_POST['base64data']);
		//file_put_contents('../assets/pdfImages/chartImg/graph'.$imgcount.'_'.$userId.time().'.png', $data);
		file_put_contents('assets/pdfImages/chartImg/graph'.$imgcount.'_'.$userId.time().'.png', $data);
		echo $graph1;
		//write_file('./path/to/file.php', $data, 'r+');
	}
	
	function high_roi()
	{
		if (!$this->tank_auth->is_logged_in()) {									
			redirect('/login');
		}
		$this->layout->view('quiz/high_roi',$data);
	}
	
	function sendCoupon()
	{
		$userId=$this->tank_auth->get_user_id();
		$data = $this->quizmodel->getUserInfo($userId);
		$data['graphVal'] = $_POST['graphValue'];
		//print_r($data);exit;
		$config['protocol'] = $this->config->item('mail_protocol','email');
		$config['smtp_host'] = $this->config->item('smtp_server','email');
		$config['smtp_user'] = $this->config->item('smtp_user_name','email');
		$config['smtp_pass'] = $this->config->item('smtp_pass','email');
		$this->email->initialize($config);
		$this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth')); // change it to yours
		$this->email->to($data[0]['email']);// change it to yours
		$this->email->subject('Coupon Code');
		$this->email->message($this->load->view('email/sendCoupon', $data, TRUE));
		//$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		//$this->email->message($this->load->view('email/sendCoupon', $graphVal, TRUE));
		if($this->email->send())
		{
		  echo 'Email sent.';exit;
		}
		else
		{
		 echo "error";exit;
		}

	}
	
	function thankyou()
	{
		$this->layout->view('quiz/thankyou');
	}
	
	
	
}