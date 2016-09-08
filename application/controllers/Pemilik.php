<?php

class Pemilik extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Pemilik_model');

		$id_pemilik = $this->session->userdata('id_pemilik');
		if (!isset($id_pemilik)) {
		   redirect('Login');
		   exit;
		}
	}

	function index(){
		$data = array(
			'dt'		 	=> $this->Pemilik_model->get_data_byId($this->session->userdata('id_pemilik')),
			'title'			=> 'Input Data Kosan | Payo Ngekos',
			'content'		=> 'edit_kosan'
		);
		$this->load->view('includes/template', $data);
	}

	function edit(){
		$id_pemilik = $this->session->userdata('id_pemilik');

		if($this->input->post('edit')){
			$input = array (
				'nama_kosan'		=> $this->input->post('nama_kosan'),
				'foto1'				=> $id_pemilik.'.jpg',
				/*'foto2'							=> '2.jpg',
				'foto3'							=> '3.jpg',
				'foto4'							=> '4.jpg',*/
				'harga'				=> $this->input->post('harga'),
				'alamat_kosan'		=> $this->input->post('alamat_kosan'),
				'sifat_kosan'		=> $this->input->post('sifat_kosan'),
				'cp'				=> $this->input->post('cp'),
				'stok'				=> $this->input->post('stok'),
				'detail'			=> $this->input->post('detail')
			);
			$this->Pemilik_model->update($id_pemilik, $input);
			$this->Pemilik_model->do_upload($id_pemilik);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil disimpan!</div>');
			redirect('Pemilik');
			exit;
		}

		$data = array(
			'title' 	=> 'Edit Kosan | Payo Ngekos',
			'content' 	=> 'edit_kosan',
			'dt'		=> $this->Pemilik_model->get_data_byId($id_pemilik)
		);
		$this->load->view('includes/template',$data);
	}

	function biodata(){
		if($this->input->post('edit')){
			$input = array (
				'nama'				=> $this->input->post('nama'),
				'profil'			=> $this->session->userdata('id_pemilik').'.jpg',
				'alamat'			=> $this->input->post('alamat'),
				'cp'					=> $this->input->post('cp')
			);
			$this->Pemilik_model->update($id_pemilik, $input);
			$this->Pemilik_model->do_upload($id_pemilik);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil disimpan!</div>');
			redirect('Pemilik/biodata');
			exit;
		}

		$data = array(
			'title' 		=> 'Edit Kosan | Payo Ngekos',
			'content' 	=> 'biodata',
			'dt'		 		=> $this->Pemilik_model->get_data_byId($id_pemilik)
		);
		$this->load->view('includes/template',$data);
	}

}

 ?>
