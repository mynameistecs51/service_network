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

			'show_detail' => $this->service_m->get_detail(),
			);

		$this->load->view('index',$data);
	}

	public function show_detail($page){
		$query_service_by_group = $this->db->query(
			"SELECT detail.detail_id, detail.detail_text, detail.pic_name , service_group.group_name
			FROM detail
			INNER JOIN service_group
			ON detail.group_id = service_group.group_id
			WHERE group_name ='$page'
			ORDER BY detail_id DESC ;"
			)->result();

		$data = array(
			'title' => "Service & ".$page,
			'page' => $page,
			'show_by_group' => $query_service_by_group,
			);
		$this->load->view('show_detail',$data);
	}

	public function contact($page){
		$data = array(
			'title' => $page,
		);
		$this->load->view('contact',$data);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */