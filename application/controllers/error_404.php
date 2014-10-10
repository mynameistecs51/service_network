<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class Error_404 extends CI_Controller
	{
		
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$data = array(
				'title' => "Error",
				);
			$this->load->view('page_404',$data);
		}
	}
	?>
