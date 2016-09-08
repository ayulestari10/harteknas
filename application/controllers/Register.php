<?php

class Register extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Pemilik_model');
		$this->load->model('User_model');
	}

	function index(){
		$data = array(
			'title'		=> 'DAFTAR | Payo Ngekos',
			'content'	=> 'regist'
		);
		$this->load->view('includes/template', $data);
	}

	function pemilik(){
		$data = array(
			'title'		=> 'DAFTAR | Payo Ngekos',
			'content'	=> 'regist_pemilik'
		);
		$this->load->view('includes/template', $data);
	}	

	function pemilik_masuk(){
		if($this->input->post('daftar')){
			$username 	= $this->input->post('username');
			$password 	= $this->input->post('password');

			if(isset($username, $password)){
				if($this->input->post('password') == $this->input->post('password2')){

					$cek_data = $this->Pemilik_model->get_data_byUsername($username);
					if(isset($cek_data->username)){
						$data_username = $cek_data->username;
					} else {
						$data_username = "";
					}
					if($data_username != $username){
						$data = array(
							'username'	=> $username,
							'password'	=> md5($password)
						);
						$this->Pemilik_model->insert($data);
						$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
					}
					else {
						$this->session->set_flashdata('msg', '<div class="alert alert-warning" style="text-align:center;">nisn yang anda masukkan telah terdaftar sebelumnya.</div>');
					}
					redirect('Login');
				}
				else {
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Password harus sama dengan Konfirmasi Password</div>');
					redirect('Register');
				}
			}
			else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Registrasi Gagal</div>');
				redirect('Register');
			}
		} else {
			redirect('Register');
		}
	}

	function user(){
  	if($this->input->post('daftar')){
			$username 	= $this->input->post('username');
			$password 	= $this->input->post('password');

			if(isset($username, $password)){
				if($this->input->post('password') == $this->input->post('password2')){

					$cek_data = $this->User_model->get_data_byUsername($username);
					if(isset($cek_data->username)){
						$data_username = $cek_data->username;
					} else {
						$data_username = "";
					}
					if($data_username != $username){
						$data = array(
							'username'	=> $username,
							'password'	=> md5($password)
						);
            $this->User_model->insert($data);
						$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Registrasi Berhasil</div>');
					}
					else {
						$this->session->set_flashdata('msg', '<div class="alert alert-warning" style="text-align:center;">Username yang anda masukkan telah terdaftar sebelumnya.</div>');
					}
					redirect('Login');
			  } else {
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Password harus sama dengan Konfirmasi Password</div>');
					redirect('Register');
				}
		  }	else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Registrasi Gagal</div>');
				redirect('Register');
			}
		} else {
			redirect('Register');
		}
	}

}

?>
