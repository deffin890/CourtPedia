<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {
    
    public function addUser($data){
		$this->db->insert('tabel_user',$data);
	}
    
    function getUser($data){
		return $this->db->get_where('tabel_user',$data);
	}
}
