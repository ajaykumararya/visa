 <?php

class Login extends CI_Controller
{
	ob_start();
	function __construct()
	{ 
		parent::__construct();
	}
	function check_login() 
	{
		if($p = $this->input->post())
		{
			$login = $this->db->get_where('login',['username'=>$p['email'],'password'=>$p['password']]);
			if($login->num_rows())
			{
				$row = $login->row();
				$data = array(
								'id'=>$row->id,
								'username'=>$row->username,
								'password'=>$row->password,
								'user_login'=>true,
				);
				
				$this->session->set_userdata($data);
				//print_r($_SESSION);die;
				redirect(base_url().'User');
			}
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Invalid Login</div>');
				redirect(site_url('welcome/login'));
			}
		}
		else
		{

		}
	}
}
?>