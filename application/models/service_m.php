<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service_m extends CI_model {
	public function __construct(){
		parent::__construct();
	}

	public function show_group(){
		$query = $this->db->get('service_group');
		return $query->result();
	}

	public function add_detail_db(){
		///////create teacher //////////
		
		$input_detail = $this->input->post('input_detail');
		$input_group = $this->input->post('input_group');
		///
		$config['upload_path'] = './image/pict_sele/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '6144';
		//$config['encrypt_name'] = TRUE;
		$rand = rand(0001,9999);
		$date= date("Y_m_d");
		$config['file_name']  = $date.$rand;
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/edit_admin', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			//$this->model_main->create_teacher();  //create data file for database
			//$this->load->view('page_teacher', $data);
			// redirect('ctl_main/page_teacher/',$data);
		}
		///
		$insert = array(
			'detail_id' => "",
			'detail_text' => $input_detail,
			'pic_name' => $config['file_name'],
			'group_id' => $input_group,
			);
		$query =  $this->db->insert('detail',$insert);
		return true;
	}

	function get_detail(){
		///
		$query_detail = $this->db->get('detail');
		return $query->result();
	}
}
?>