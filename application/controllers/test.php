<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->ci =& get_instance();
		$this->ci->load->config('tank_auth', TRUE);
		$this->load->library('layout');
		$this->load->library('form_validation');
	}
	function index()
	{
		$this->layout->view('test');
	}
	
	function fb_invite()
	{	
		$data['active'] = '';
		$data['description'] = '';
		$data['keywords'] = '';
		$this->layout->view('test/api_request', $data);
	}
	
	function fb_share()
	{	
		$data['active'] = '';
		$data['description'] = '';
		$data['keywords'] = '';
		$this->layout->view('test/share_link', $data);
	}
	
	function form_test()
	{
		$data['active'] = '';
		$data['description'] = '';
		$data['keywords'] = '';
		$this->layout->view('test/form', $data);
	}
	
	function create_xml()
	{
		$curDate = date("Y-m-d");
		$query=mysql_query("select * from connect WHERE date >= '".$curDate."' order by date ASC")or die(mysql_error('error')); 
		$xml="<meetuniv>\n\t\t";
		while($data=mysql_fetch_array($query))
		{
			//echo "<pre>";print_r($data);exit;
			$date = date('d-m-Y',strtotime($data['date']));
			$xml .="<events>\n\t\t";
			$xml .= "<id>".$data['id']."</id>\n\t\t";
			$xml .= "<eventName>".$data['tagLine']."</eventName>\n\t\t";
			$xml .= "<date>".$date."</date>\n\t\t";
			$xml .= "<time>".$data['time']."</time>\n\t\t";
			$xml.="</events>\n\t";
		}
		$xml.="</meetuniv>\n\r";
		$xmlobj=new SimpleXMLElement($xml);
		$xmlobj->asXML("anjali/test.xml");
	
	}
	
	function send_email(){
	
		$msg="<p>Dear Resha !</p>

			 <p>We have shortlisted your resume for the post of Senior Education Counselor and hence request you to come for an interview.</p>

			<p>Please revert to this email to schedule a interview time or call on the undersigned</p>

			<p>We look forward to get heard from you.</p>

			<p>Job Description</p>
			<p>- Counsel students regarding educational issues such as course and program selection, abroad education, and career planning.</p>

			<p>- Counsel individuals to help them understand and overcome personal, social, or behavioral problems affecting their educational or vocational situations.</p>

			<p>- Maintain accurate and complete student records as required by laws, district policies, and administrative regulations.</p>

			<p>- Provide students with information on such topics as college degree programs and admission requirements, financial aid opportunities, trade and technical schools, and</p> 

			<p>apprenticeship programs</p>

			<p>Skills</p>

			<p>- Giving full attention to what other people are saying, taking time to understand the points being made, asking questions as appropriate, and not interrupting at </p>

			<p>inappropriate times.</p>

			<p>- Managing one's own time and the time of others.</p>

			<p>- Understanding written sentences and paragraphs in work related documents.</p>

			<p>-Talking to others to convey information effectively.</p>

			<p>-electing and using training/instructional methods and procedures appropriate for the situation when learning or teaching new things.</p>

			<p>For more information and work culture in Team WebInfoMart, have a look at our facebook page :
			https://www.facebook.com/team.WebInfoMart</p>

			<p>Interview Date:  13 April ,2014</p>
			<p>Time : 11 AM</p><br/>

			------------------------------------------------------------------------------------------
			<p><b>Interview Office Address </b></p><br/>

			<p style='background-color:yellow'><b>WebInfoMart</b></p>
			<p><b>B-36, Lower Ground Floor, New Multan Nagar</b></p>
			<p><b>Paschim Vihar, New Delhi</b></p>
			<p><b>Pincode : 110056</b></p>
			<p><b>www.webinfomart.com</b></p>
			<p><b>Landmark : Paschim vihar East metro Station</b></p>
			<p><b>& Harbajan Driving School</b></p><br/>

			<p><b>Contact Person : Mohit Sachan</b></p>
			<p><b>Phone : +91 9971294056</b></p>
			";
			
			$msg = urlencode($msg);
		
		echo file_get_contents("https://api.falconide.com/falconapi/web.send.rest?api_key=dae5d2264eda3f0c5d5ab715713884d5&subject=Weekly%20statement%20dated%201st%20Jan%202013&fromname=Debal&from=info@meetuniv.com&replytoid=connect@myieltsgurus.com&content=".$msg."&recipients=debal@meetuniv.com,nitin@meetuniv.com");
	}
}