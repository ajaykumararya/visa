<?php
class User extends CI_Controller
{
	function __construct() 
	{
		parent::__construct();

		if(!$this->session->has_userdata('user_login'))
			redirect('login');

	}
	   
	function index()
	{
		$this->load->view('index');
	}
	 
	function list_pages()
	{
		$this->load->view(__FUNCTION__);
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

	function add_image()
	{
		$config['upload_path'] = './upload';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg';

	    $this->load->library('upload', $config);
		$this->upload->initialize($config);
	     $sau = '';
	    if (!$this->upload->do_upload('header_image')) {
	        $error = array('error' => $this->upload->display_errors());
			
	    } 
		else {
	        $sau =  $this->upload->data('file_name');
	       
	    }
	    
  		if($post = $this->input->post()){
			$data = array(
								
								'image_title'=>$post['image_title'],
								'header_image'=>$addi,
								
				);
				$this->db->insert('setting',$data);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Image Add Successfully...</div>');
				redirect(current_url());
			}
		else
		$this->load->view(__FUNCTION__);
	}

	public function ajax()
	{
		$return = array();
		if($post = $this->input->post() )
		{
			switch ($post['status'])
			{
				case 'get_page':
							$return['html'] = '<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>id</th>
									<th>Name</th>
									<th>Information</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>';
							$sau = $this->db->get('pages');
							foreach($sau->result() as $r)
							{

								$return['html'] .= '<tr>
								<td>'.$r->id.'</td>
								<td>'.$r->page_name.'</td>
								<td><span class="btn btn-primary">content</span></td>
								<td><a href=""><i class="btn btn-success fa fa-edit"></i></a></td>
								<td class="center"><a href="javascript:delete_page('.$r->id.')" onclick="return confirm(\'Are You Sure Want to Delete?\')"><i class="btn btn-danger fa fa-trash"></i></a>									
								</td>
								</tr>'; 
							}
							$return['html'] .= '</tbody></table>';
						break;

						

						case 'del_page':
							$this->db->where('id',$post["id"])->delete("pages");
							$return['status'] = '<div class="alert alert-danger"><h4>Delete Page Successfully..</h4></div>';
							//redirect(site_url('User/all_employee'));
						break;

			}
			echo json_encode($return);
		}
	}
}
?>