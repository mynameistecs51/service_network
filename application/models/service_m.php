<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service_m extends CI_model {
	public function __construct(){
		parent::__construct();
	}

	public function show_group(){
		$query = $this->db->get('service_group');
		return $query->result();
	}
}
?>