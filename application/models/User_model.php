<?php

class User_model extends CI_Model{
	private $table;
	private $key;
	var $galerry_path;
	var $galerry_path_url;

	function __construct(){
		parent::__construct();
		$this->table 				= 'user';
		$this->key 					= 'id_user';
		$this->galerry_path			= realpath(APPPATH.'../foto');
		$this->galerry_path_url		= base_url().'foto/';
	}

	function get_all(){
		$query = $this->db->get($this->table);
		return $query->result();
	}

	function get_data_byUsername($username){
		$this->db->where('username', $username);
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_id($username){
		$this->db->where('username', $username);
		$query = $this->db->get($this->table);
		foreach($query->result() as $row){
			$id_user = $row->id_user;
		}
		return $id_user;
	}

	function insert($data){
		return $this->db->insert($this->table, $data);
	}

	function update($id_user, $data){
		$this->db->where($this->key, $id_user);
		return $this->db->update($this->table, $data);
	}

	function delete($id_user){
		return $this->db->delete($this->table, array($this->key => $id_user));
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	function do_upload($id_user){
		$config = array(
			'file_name'		=> $id_user.'.jpg',
			'allowed_types'	=> 'jpeg|jpg|png|gif',
			'upload_path'	=> $this->galerry_path,
			'max_size'		=> 5000
		);
		$this->load->library('upload', $config);

		$this->upload->do_upload();
		$image_data = $this->upload->data();

		$config = array(
			'source_image' 	=> $image_data['full_path'],
			'new_image'			=> $this->galerry_path.'/carousel',
			'maintain_ratio'=> true,
			'width'					=> 1024,
			'height'				=> 700
		);
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}
}

?>
