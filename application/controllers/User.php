<?php

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Pemilik_model');
		$this->load->model('User_model');

		$id_user = $this->session->userdata('id_user');
		if (!isset($id_user)) {
		   redirect('Login');
		   exit;
		}
	}

	function index(){
    $data = array(
      'title'		=> 'Payo Ngekos',
      'content'		=> 'dashboard',
      'dt'			=> $this->Pemilik_model->get_all()
    );
    $this->load->view('includes/template', $data);
	}

	function order(){
		if($this->input->post('order')){
			$alamat_kosan = $this->input->post('order');
			$this->User_model->update($id_user,array('alamat_kosan' => $alamat_kosan));
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center; margin-top:-10%;">Berhasil Order!</div>');
			redirect('Home');
		} else {
			redirect('Login');
		}
	}

}

 ?>
