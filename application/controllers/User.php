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
								
								<td class="center"><a href="javascript:delete_page('.$r->id.')" onclick="return confirm(\'Are You Sure?\')"><i class="btn btn-danger zmdi zmdi-delete"><i class="fa fa-trash"></i></i></a>									
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