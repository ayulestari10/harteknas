<?php
  /**
   *
   */
  class Admin_model extends CI_Model
  {
    private $key,$table;

    function __construct()
    {
      parent::__construct();
      $this->table  = 'admin';
      $this->key    = 'id_admin';
    }

    function get_data_byConditional($condition){
      $this->db->where($condition);
      $query = $this->db->get($this->table);
      return $query;
    }

    function update_statusbayar($id_user, $data){
      $this->db->where("id_user", $id_user);
      return $this->db->update("user", $data);
    }

    function get_data_pembeli(){
		    $this->db->where("statusbeli", "true");
		    $query = $this->db->get("user");
		    return $query->row();
	  }

    function get_data_pemilik(){
  		$query = $this->db->get("pemilik");
  		return $query->result();
  	}
  }

 ?>
