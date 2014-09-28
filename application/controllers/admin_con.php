<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_con extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("service_m",'',TRUE);
	}

	public function index(){

		$data = array(
			'title' => "configuration",
			);
		
		$this->load->view('/admin/admin',$data);

	}

	public function edit_admin($page){
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
			);
		$this->load->view('admin/edit_admin',$data);
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

	function edit_file($detail_id){
		$query_detail = $this->service_m->edit_file($detail_id);
	 	//$query_detail = $this->db->query("SELECT * FROM detail WHERE detail_id=".$detail_id)->result();
		$data;
		foreach ($query_detail as $key => $row) {
			# code...
			$data = array(
				'detail_id' => $row->detail_id,
				'detail_text' => $row->detail_text,
				'detail_picname' => $rows->detail_picname,
				);
			$this->load->view(	);
		}
	}
}
?>