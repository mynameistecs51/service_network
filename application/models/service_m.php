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
		$config['upload_path'] = './image/pic_sale/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '6144';
		//$config['encrypt_name'] = TRUE;
		$file_name =$_FILES['userfile']['name'];
		$rand = rand(1111,9999);
		$date= date("Y_m_d");
		$config['file_name']  = $date.$rand.$file_name;//----------------file_name
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/edit_admin', $error);
			//redirect('admin_con/edit_admin/error','refresh');

		}else{
			$data = array('upload_data' => $this->upload->data());
			//$this->model_main->create_teacher();  //create data file for database
			//$this->load->view('page_teacher', $data);
			// redirect('ctl_main/page_teacher/',$data);

			$insert = array(
				'detail_id' => "",
				'detail_text' => $input_detail,
				'pic_name' => $config['file_name'] ,
				'pic_type' => $data['upload_data']['file_type'],
				'group_id' => $input_group,
				);
			$query =  $this->db->insert('detail',$insert);
			return true;
		}
		///
		
	}

	function get_detail(){
		///
		// $query_detail = $this->db->get('detail');
		$query_detail = $this->db->query(
			"SELECT detail.detail_id, detail.detail_text, detail.pic_name ,detail.pic_type, service_group.group_name
			FROM detail
			INNER JOIN service_group
			ON detail.group_id = service_group.group_id
			ORDER BY detail_id DESC "
			);
		return $query_detail->result();
	}

	//edit detail
	function edit_file($detail_id){
		//$detail_id = $this->input->get('detail_id');

		$query_detail = $this->db->query("SELECT * FROM detail WHERE detail_id=".$detail_id);

		return $query_detail->result();		
	}

	function delete_file($detail_id){
		$query_delete_file = $this->db->query("SELECT * FROM detail WHERE detail_id =".$detail_id)->result();
		$query_detail = $this->db->query("DELETE FROM detail  WHERE  detail_id=".$detail_id);
		return true;
	}

	function update_detail(){
		$config['upload_path'] = './image/pic_sale/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '6144';
		//$config['encrypt_name'] = TRUE;
		$file_name =$_FILES['userfile']['name'];
		$rand = rand(1111,9999);
		$date= date("Y_m_d");
		$config['file_name']  = $date.$rand.$file_name;//----------------file_name
		// $this->load->library('upload', $config);
		// $data = array('upload_data' => $this->upload->data());
		$input_detail = $this->input->post('input_detail');
		$input_group = $this->input->post('input_group');
		$input_id = $this->input->post('detail_id');
		$query_detail = $this->db->query("SELECT * FROM detail WHERE detail_id=".$input_id)->result_array();  //query detail

		if(!$file_name){   //-------- userfile == null
			$insert = array(
				'detail_text' => $input_detail,
				'group_id' => $input_group,
				);
			$this->db->where('detail_id',$input_id);
			$this->db->update('detail',$insert);

			return TRUE;
			
		}else{
			//---- userfile != null delete picture ago and update new picture
			foreach ($query_detail as $detail => $row) {
				# code...
				unlink('../service_network/image/pic_sale/'.$row['pic_name']);		//----------ถ้า up ขึ้น host จริงมันจะมีปัญหาตรง path ../		
				$this->load->library('upload', $config);

				if ( !$this->upload->do_upload()){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('admin/edit_admin', $error);
						//redirect('admin_con/edit_admin/error','refresh');

				}else{
					$data = array('upload_data' => $this->upload->data());
						//$this->model_main->create_teacher();  //create data file for database
						//$this->load->view('page_teacher', $data);
						// redirect('ctl_main/page_teacher/',$data);

					$insert = array(
						'detail_text' => $input_detail,
						'pic_name' => $data['upload_data']['file_name'],
						'pic_type' => $data['upload_data']['file_type'],
						'group_id' => $input_group,
						);
					$this->db->where('detail_id',$input_id);
					$this->db->update('detail',$insert);

				}		
				return TRUE;
			}
		}
	}

	function _upload_files($field='userfile'){

		$files = array();
		foreach( $_FILES[$field] as $key => $all )
			foreach( $all as $i => $val )
				$files[$i][$key] = $val;
			$files_uploaded = array();
			for ($i=0; $i < count($files); $i++) { 
				$_FILES[$field] = $files[$i];
				if ($this->upload->do_upload($field))
					$files_uploaded[$i] = $this->upload->data($files);
				else
					$files_uploaded[$i] = null;
			}
			return $files_uploaded;
		}
	}
?>