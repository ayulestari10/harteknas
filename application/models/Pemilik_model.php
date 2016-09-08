<?php

class Pemilik_model extends CI_Model
{
  private $key,$table;
  var $galerry_path;
  var $galerry_path_url;

  function __construct()
  {
    parent::__construct();
    $this->key                = "id_pemilik";
    $this->table              = "pemilik";
    $this->galerry_path       = realpath(APPPATH.'../kosan');
    $this->galerry_path_url   = base_url().'foto/kosan';
  }

  public function get_all()
  {
      $query = $this->db->get($this->table);
      return $query->result();
  }

  function get_data_byUsername($username)
  {
    $this->db->where('username', $username);
    $query = $this->db->get($this->table);
    return $query->row();
  }

  function get_id($username){
    $this->db->where('username', $username);
    $query = $this->db->get($this->table);
    foreach($query->result() as $row){
      $id_pemilik = $row->id_pemilik;
    }
    return $id_pemilik;
  }

  public function get_data_byId($id_pemilik)
  {
    $this->db->where($this->key, $id_pemilik);
    $query = $this->db->get($this->table);
    return $query->row();
  }

  function get_data_byConditional($condition){
    $this->db->where($condition);
    $query = $this->db->get($this->table);
    return $query;
  }

  function do_upload_Profil($id_pemilik){
    $config = array (
      'file_name' 	     => $id_pemilik.'.jpg',
      'upload_path'	     => '/foto/profil/pemilik',
      'allowed_types'    => 'jpg|jpeg|gif|png',
      'max_size' 		     => 2000
    );
    $this->load->library('upload', $config);
    $this->upload->do_upload();
  }

  function do_upload($id_pemilik){ 
    $config = array (
      'file_name' 	     => $id_pemilik.'.jpg',
      'upload_path'      => '/foto/kosan',
      'allowed_types'    => 'jpg|jpeg|gif|png',
      'max_size' 		     => 5000
    );
    $this->load->library('upload', $config);
    $this->upload->do_upload();
  }

  function insert($data){
    return $this->db->insert($this->table, $data);
  }

  function delete($id_pemilik){
		return $this->db->delete($this->table, array($this->key => $id_pemilik));
	}

  function update($id_pemilik, $data){
		$this->db->where($this->key, $id_pemilik);
		return $this->db->update($this->table, $data);
	}

}

 ?>
