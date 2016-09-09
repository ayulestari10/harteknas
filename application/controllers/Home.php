<?php

class Home extends CI_Controller{
  function __construct(){
   parent::__construct();
   $this->load->model('Pemilik_model');
 }

  function index(){
    $data = array(
			'title'			=> 'Payo Ngekos',
			'content'		=> 'dashboard',
			'dt'				=> $this->Pemilik_model->get_all()
		);
		$this->load->view('includes/template', $data);
  }

  function detail(){
    $id_pemilik = $this->uri->segment(3);

    $data = array(
      'title'     => 'Payo Ngekos',
      'content'   => 'detail',
      'dt'        => $this->Pemilik_model->get_data_byId($id_pemilik)
    );
    $this->load->view('includes/template', $data);
  }

  function index(){
    $data = array(
      'title'     => 'Payo Ngekos',
      'content'   => 'coba'
    );
    $this->load->view('includes/template', $data);
  }
}

?>
