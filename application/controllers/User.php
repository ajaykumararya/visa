<?php
class User extends CI_Controller
{
	function __construct() 
	{
		parent::__construct();

	}
	   
	function index()
	{
		$this->load->view('index');
	}
	 

	public function add_page()
	{
		if($post = $this->input->post()){
		$data = array(
							'page_name'=>$post['page_name'],
			);
			$this->db->insert('pages',$data);
			$this->session->set_flashdata('msg','<div class="alert alert-success">Page Added Successfully..</div>');
			redirect(current_url());
		}
		else
			$this->load->view(__FUNCTION__);
	}
}
?>