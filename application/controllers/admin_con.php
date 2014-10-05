<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Admin_con extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("service_m",'',TRUE);
	}

	public function index(){
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data = array(
				'user_name' =>$session_data['user_name'],
				'title' => "configuration",
				);
			$this->load->view('/admin/admin',$data);
		}
		else
		{		
			redirect('login','refresh');
		}
	}

	public function edit_admin($page){
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			

		// show service for group
			$query_service_by_group = $this->db->query(
				"SELECT detail.detail_id, detail.detail_text, detail.pic_name , service_group.group_name
				FROM detail
				INNER JOIN service_group
				ON detail.group_id = service_group.group_id
				WHERE group_name ='$page'
				ORDER BY detail_id DESC ;"
				)->result();

			$data = array(
				'title' => "edit_".$page,
				'page'=> $page,
				'show_group' => $this->service_m->show_group(),
				'query_service_by_group' => $query_service_by_group,
				'user_name' =>$session_data['user_name'],
				);
			$this->load->view('admin/edit_admin',$data);
		}
		else
		{		
			redirect('login','refresh');
		}
	}

	function add_detail(){

		$this->service_m->add_detail_db();

		$sql = $this->db->query("SELECT group_name FROM service_group WHERE group_id ='".$input_group = $this->input->post('input_group')."'"); ## query group_name by input_group id

		foreach ($sql->result() as $key => $value) {
			# redirect edit_admin/last_page
			redirect('/admin_con/edit_admin/'.$value->group_name,'refresh');
		}
	}

	//delete file picture
	function delete_file($page,$detail_id,$file_name){
		unlink('../service_network/image/pic_sale/'.$file_name);		//----------ถ้า up ขึ้น host จริงมันจะมีปัญหาตรง path ../service_network

		$this->service_m->delete_file($detail_id);

		redirect('admin_con/edit_admin/'.$page,'refresh');
	}

	function edit_file($page,$detail_id){
		$query_detail_by_id = $this->db->query(
			"SELECT detail.detail_id, detail.detail_text, detail.pic_name , service_group.group_name
			FROM detail
			INNER JOIN service_group
			ON detail.group_id = service_group.group_id
			WHERE detail_id ='$detail_id';"
			)->result(); 

		$data = array(
			'title' => "update_".$page,
			'page' => $page,
			'detail_id' => $detail_id,
			'show_group' => $this->service_m->show_group(),
			'query_detail_by_id' => $query_detail_by_id,
			);
		$this->load->view('edit_detail',$data);
	}

	function update_detail(){
		$this->service_m->update_detail();
		redirect('admin_con/edit_admin/'.$this->input->post('page'),'refresh');
	}


	//edit profile ago
	function profile_ago($page){
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			

		// show service for group
			$query_service_by_group = $this->db->query(
				"SELECT detail.detail_id, detail.detail_text, detail.pic_name , service_group.group_name
				FROM detail
				INNER JOIN service_group
				ON detail.group_id = service_group.group_id
				WHERE group_name ='$page'
				ORDER BY detail_id DESC ;"
				)->result();

			$data = array(
				'title' => "edit_".$page,
				'page'=> $page,
				'show_group' => $this->service_m->show_group(),
				'query_service_by_group' => $query_service_by_group,
				'user_name' =>$session_data['user_name'],
				);
			$this->load->view('admin/profile_ago',$data);
		}
		else
		{		
			redirect('login','refresh');
		}
	}

//logout distroy session
	function logout(){

		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('service_con', 'refresh');
	}


}
?>