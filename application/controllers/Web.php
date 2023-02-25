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
		if($post = $this->input->post()){
			$data = array(
								'visa_type_id'=>$post['visa_type_id'],
								'insurance'=>$post['insurance'],
								'first_name'=>$post['first_name'],
								'last_name'=>$post['last_name'],
								'address1'=>$post['address1'],
								'city'=>$post['city'],
								'country'=>$post['country'],
								'state'=>$post['state'],
								'pincode'=>$post['pincode'],
								'email_id'=>$post['email_id'],
								'country_isd_code'=>$post['country_isd_code'],
								'mobile'=>$post['mobile'],
								'nationality_id'=>$post['nationality_id'],
								'passport_number'=>$post['passport_number'],
								'start_date_dayPass'=>$post['start_date_dayPass'],
								'start_date_monthPass'=>$post['start_date_monthPass'],
								'start_date_yearPass'=>$post['start_date_yearPass'],
								'start_date_day'=>$post['start_date_day'],
								' start_date_month'=>$post[' start_date_month'],
								'start_date_year'=>$post['start_date_year'],
								'passport_copy_upload'=>$post['passport_copy_upload'],
								'additional_document5_upload'=>$post['additional_document5_upload'],
								
								
				);
				$this->db->insert('users',$data);
				// $this->session->set_flashdata('msg','<div class="alert alert-success">Page Added Successfully..</div>');
				redirect(current_url());
			}
			else
				$this->load->view(__FUNCTION__);
  	}

  	function contact_us()
  	{
  		$this->load->view('web/contact_us');
  	}
	



	function transit_visa()
	{
		$this->load->view('web/transit_visa');
	}
	function dubai_visa_14_days()
	{
		$this->load->view('web/dubai_visa_14_days');
	}
	function dubai_visa_14_days_multiple_entry()
	{
		$this->load->view('web/dubai_visa_14_days_multiple_entry');
	}
	function dubai_visa_30_days()
	{
		$this->load->view('web/dubai_visa_30_days');
	}
	function dubai_visa_30_days_multiple_entry()
	{
		$this->load->view('web/dubai_visa_30_days_multiple_entry');
	}
	function dubai_visa_60_days()
	{
		$this->load->view('web/dubai_visa_60_days');
	}
	function dubai_visa_60_days_multiple_entry()
	{
		$this->load->view('web/dubai_visa_60_days_multiple_entry');
	}
	

}
?>