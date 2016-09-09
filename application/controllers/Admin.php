<?php

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Pemilik_model');

		$role = $this->session->userdata('role');

		$username = $this->session->userdata('username');
		if (isset($username)) {
		   if($role != 'admin'){
			   redirect('Login');
			   exit;
		   }
		}
	}

	function index(){
		$data = array(
			'dt'		=> $this->User_model->get_all(),
			'title'		=> 'Manage | Daftar Booking',
			'content'	=> 'list_booking'
		);
		$this->load->view('includes/template', $data);
	}

	function pemilik(){
		$data = array(
			'dt'		=> $this->Pemilik_model->get_all(),
			'title'		=> 'Manage | Daftar Pemilik Kosan',
			'content'	=> 'list_pemilik'
		);
		$this->load->view('includes/template', $data);
	}

	function user(){
		$data = array(
			'dt'		=> $this->User_model->get_all(),
			'title'		=> 'Manage | Daftar Pengguna',
			'content'	=> 'list_pembeli'
		);
		$this->load->view('includes/template', $data);
	}

	public function verifikasi() {
		$id_user = $this->uri->segment(3);

		if (isset($id_user)) {
			$user = $this->User_model->get_data_byId($id_user);
			if ($user->status == 'Belum konfirmasi') {
				$this->User_model->update($id_user, array('status' => 'Konfirmasi'));
			}
			else {
				$this->User_model->update($id_user, array('status' => 'Belum konfirmasi'));
			}
		}
		redirect('Admin');
	}

	function delete_user(){
		$id_user = $this->uri->segment(3);
		if(isset($id_user)){
			$this->User_model->delete($id_user);
		} else {
			redirect('Admin/user');
		}
		redirect('Admin/user');
	}

	function delete_pemilik(){
		$id_pemilik = $this->uri->segment(3);
		if(isset($id_pemilik)){
			$this->Pemilik_model->delete($id_pemilik);
		} else {
			redirect('Admin/pemilik');
		}
		redirect('Admin/pemilik');
	}

}

?>
