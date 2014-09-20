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
 	$this->load->model("admin_con",'',TRUE);

 }
}