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
		$this->session->set_userdata('role', 'user');
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
		$id_user = $this->session->userdata('id_user');
		if($this->input->post('order')){
			$nama_kosan = $this->input->post('order');
			$this->User_model->update($id_user, array('nama_kosan' => $nama_kosan));
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center; margin-top:-12%;">Berhasil Order!</div>');
			redirect('Home');
		} else {
			redirect('Login');
		}
	}

	function biodata(){
		$id_user = $this->session->userdata('id_user');
		
		if($this->input->post('add_biodata')){
			$input = array(
				'nama'		=> $this->input->post('nama'),
				'profil'	=> $id_user.'.jpg',
				'alamat'	=> $this->input->post('alamat'),
				'cp'		=> $this->input->post('cp')
			);
			$this->User_model->update($id_user, $input);
			$this->User_model->do_upload($id_user);
			redirect('User/biodata');
			exit;
		}
		$data = array(
	      'title'		=> 'Payo Ngekos',
	      'content'		=> 'biodata',
	      'dt'			=> $this->User_model->get_data_byId($id_user)
	    );
	    $this->load->view('includes/template', $data);
	}

	function cek_pembayaran(){
		$id_user = $this->session->userdata('id_user');
		$data = $this->User_model->get_data_byId($id_user);

		if(isset($data->nama_kosan)){
			if($data->status == 'Konfirmasi'){
				redirect('User/cetak');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-warning" style="text-align:center; margin-top:-12%;">Anda belum bayar!</div>');
				redirect('Home');
			}
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center; margin-top:-12%;">Anda belum order!</div>');
			redirect('Home');
		}
	}

	function cetak(){
		$id_user = $this->session->userdata('id_user');

		//$data_pemilik = $this->Pemilik_model->get_

		$data = array(
        	'dt_user' 		=> $this->User_model->get_data_byId($id_user)
        	//cp_pemilik'	=> $cp
        );
        $html = $this->load->view('bukti', $data, true);
 
        $pdfFilePath = "Bukti Pembayaran Kosan.pdf";
 
        $this->load->library('m_pdf');
 
        $this->m_pdf->pdf->WriteHTML($html);
 
        $this->m_pdf->pdf->Output($pdfFilePath, "D");  
	}

}

 ?>
