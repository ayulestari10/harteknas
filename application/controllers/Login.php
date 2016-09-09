<?php

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	function index(){
		$data = array(
			'title'		=> 'LOGIN | Payo Ngekos',
			'content'	=> 'login'
		);
		$this->load->view('includes/template', $data);
	}

	function admin(){
		if($this->input->post('login')){
			$data = array(
				'username'		=> $this->input->post('username'),
				'password' 		=> md5($this->input->post('password'))
			);
			$data_admin = $this->Login_model->cek_login_admin($data);
			if($this->Login_model->rows == 1){
				$this->session->set_userdata($data);
				$this->session->userdata('role', 'admin');
				redirect('Admin');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>');
				redirect('login');
				exit;
			}
		}
		$data = array(
			'title'		=> 'LOGIN | Payo Ngekos',
			'content'	=> 'login_admin'
		);
		$this->load->view('includes/template', $data);
	}

	function user(){

    if($this->input->post('login')){
			$username = $this->input->post('username');

			$data = array(
				'username'		=> $username,
				'password' 		=> md5($this->input->post('password')),
				'id_user'		=> $this->User_model->get_id($username)
			);
			$data_user = $this->Login_model->cek_login_user($data);

			if($this->Login_model->rows == 1){

				$this->session->set_userdata($data);
				redirect('User');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>');
				redirect('login');
				exit;
			}
		}
		$data = array(
			'title'		=> 'LOGIN | Payo Ngekos',
			'content'	=> 'login'
		);
		$this->load->view('includes/template', $data);
	}

	function pemilik(){

    if($this->input->post('login')){
			$username = $this->input->post('username');

			$data = array(
				'username'		=> $username,
				'password' 		=> md5($this->input->post('password')),
				'id_pemilik'	=> $this->Pemilik_model->get_id($username)
			);
			$data_pemilik = $this->Login_model->cek_login_pemilik($data);

			if($this->Login_model->rows == 1){

				$this->session->set_userdata($data);
				redirect('Pemilik');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal Login!</div>');
				redirect('Login/pemilik');
				exit;
			}
		}
		$data = array(
			'title'		=> 'LOGIN | Payo Ngekos',
			'content'	=> 'login_pemilik'
		);
		$this->load->view('includes/template', $data);
	}

}
?>
