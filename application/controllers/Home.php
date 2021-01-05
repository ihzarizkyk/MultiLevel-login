<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("LoginModel");
	}

	public function index()
	{
		$data['judul'] = "<h1>Selamat Datang</h1>";
		$this->load->view("login",$data);
	}

	public function auth()
	{
		$username = $this->input->post("username",true);
		$password = $this->input->post("password",true);
		$check = $this->LoginModel->checkUser($username,$password);

		if($check->num_rows() > 0)
		{
			$data = $check->row_array();
			$username = $data['username'];
			$password = $data['password'];
			$level = $data['level'];
			$data_session = array("nama" => $username, "password" => $password, "level" => $level, "logged" => TRUE);
			$this->session->set_userdata($data_session);

			if($level == "admin")
			{
				redirect("Page/admin");
			}
			elseif($level == "user")
			{
				redirect("Page/user");
			}else{
				redirect("Home");
			}

		}
		else{
			echo $this->session->set_flashdata("failed","Username dan Password Salah");
			echo $this->session->flashdata("failed");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("Home");
	}


}