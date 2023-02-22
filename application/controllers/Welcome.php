<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends CI_Controller { 

	ob_start();

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$this->load->view('login'); 
	}
}





// if($post = $this->input->post())
// 		{
// 			//print_r($post);exit;
// 			$data = array(
// 							'registration_no'=>time(),
// 							'name'=>$post['name'],
// 							'fname'=>$post['fname'],
// 							'mname'=>$post['mname'],
// 							'mobile'=>$post['mobile'],
// 							'email'=>$post['email'],
// 							'class'=>$post['class'],
// 							'date'=>$post['date'],
// 							'gender'=>$post['gender'],
// 			);
// 			$this->db->insert('student',$data);
// 			$this->session->set_flashdata('msg','<div class="alert alert-success">Success</div>');
// 			redirect(site_url('Welcome/add_student'));
// 		}
// 		else
// 		{
// 			$this->load->view(__FUNCTION__);
// 		}