<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_bayar extends CI_Model {
    
    
    public function addPembayaran($data,$table){
		$this->db->insert($table,$data);
	}
    
    public function payOrder($data,$statusbayar){
        $this->db->where($data);
		$this->db->update('tabel_pembayaran',$statusbayar);
    }
}
