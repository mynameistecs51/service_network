<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service_con extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("service_m",'',TRUE);
	}
	
	public function index()
	{
		
		$data = array(
			'title' => "Network Service & Solution",
			);

		$this->load->view('index',$data);
	}

	public function show_detail($page){
		$data = array(
			'title' => "Service & ".$page,
			'page' => $page,
			);
		$this->load->view('show_detail',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */