<?php

class Login_model extends CI_Model{
	public $rows = 0;

	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('User_model');
		$this->load->model('Pemilik_model');
	}

	function cek_login_admin($data){
		$data_admin = $this->Admin_model->get_data_byConditional($data);
		if($data_admin->num_rows() == 1){
			 $this->rows = $data_admin->num_rows();
		}
		return $data_admin->result();
	}

	function cek_login_user($data){
		$data_user = $this->User_model->get_data_byConditional($data);
		if($data_user->num_rows() == 1){
			 $this->rows = $data_user->num_rows();
		}
		return $data_user->result();
	}

	function cek_login_pemilik($data){
	  $data_pemilik = $this->Pemilik_model->get_data_byConditional($data);
	  if($data_pemilik->num_rows() == 1){
	     $this->rows = $data_pemilik->num_rows();
	  }
	  return $data_pemilik->result();
	}

}

?>
