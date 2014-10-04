<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model{

	function login($username, $password)
	{
		$this -> db -> select('user_id, user_name, user_passwd,user_status');
		$this -> db -> from('users');
		$this -> db -> where('user_name', $username);
		$this -> db -> where('user_passwd', MD5($password));
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}

?>