<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model{

	public function checkUser($username,$password)
	{
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		$query = $this->db->get("user");
		return $query;
	}

	public function show_user()
	{
		return $this->db->get("user");
	}

	public function show_admin()
	{
		return $this->db->get("admin");
	}
}