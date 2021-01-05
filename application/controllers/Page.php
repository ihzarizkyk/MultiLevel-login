<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("LoginModel");
		if($this->session->userdata("logged") == FALSE)
		{
			redirect("Home");
		}
	}

	public function user()
	{
		if($this->session->userdata("level") == "user")
		{
			$this->load->view("page/user");
		}else{
			echo "Akses Ditolak";
		}
	}

	public function admin()
	{
		if($this->session->userdata("level") == "admin")
		{
			$this->load->view("page/admin");
		}else{
			echo "Akses Ditolak";
		}
	}
}