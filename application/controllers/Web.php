<?php
class Web extends CI_Controller
{

  	function __construct()
	{
		parent::__construct();
	}

	public function index(){
  		$this->load->view('web/index');
  	}
	// public function track_application()
	// {
	// 	$this->load->view('Web/track_application'); 
	// }
	function track_application()
	{
		$this->load->view('web/track_application');
	}
	function how_to_apply()
  	{
  		$this->load->view('web/how_to_apply');
  	}
  	function types_of_visa()
  	{
  		$this->load->view('web/types_of_visa');
  	}
  	function visa_application_form()
  	{
  		$this->load->view('web/visa_application_form');
  	}
  	function contact_us()
  	{
  		$this->load->view('web/contact_us');
  	}
	
}
?>