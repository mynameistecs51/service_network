<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_con extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("service_m",'',TRUE);
	}

	public function index(){
		$data['title'] = "configuration";
		$this->load->view('/admin/admin',$data);
	}

	public function edit_admin($page){
		$data = array(
			'title' => "edit_".$page,
			'page'=> $page,
			'show_group' => $this->service_m->show_group(),
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
}
?>