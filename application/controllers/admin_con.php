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


public function do_upload(){	
	$input_detail = $this->input->post('input_detail');
	$input_group = $this->input->post('input_group');
	$page = $this->input->post('page');
//...
	$rand = rand(1111,9999);
	$date= date("Y_m_d");
	$name_picture ="";
	$type_picture ="";

	$config['upload_path'] = './image/pic_sale/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size']	= '6144';
//$config['encrypt_name'] = TRUE;
	//$file_name =$_FILES['images']['name'];
	//$config['file_name'] = $date.$rand.$file_name;

	

	foreach ($_FILES['images']['name'] as $key_name => $picture_name) {
		foreach ($_FILES['images']['type'] as $key_type => $picture_type){
//ไม่มีอะไรให้มัข้างไปแสดงใน foreach$_FILES['images']['name'] เลย
		}
		$name_picture.= $date.$rand.$picture_name.",";
		$type_picture.=$picture_type.",";

	}
								
$config['file_name'] = $name_picture;//----------------file_name
$this->load->library('upload',$config);
$images= $this->service_m->_upload_files('images');


$insert = array(
	'detail_id' => "",
	'detail_text' => $input_detail,
	'pic_name' => $name_picture,
	'pic_type' => $type_picture,
	'group_id' => $input_group,
	);


// $this->db->insert('detail',$insert);
// redirect('admin_con/profile_ago/'.$page,'refresh');
}

}

?>