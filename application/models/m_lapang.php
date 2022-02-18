<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_lapang extends CI_Model {
    
    function getLihatLapang(){
        return $this->db->get('tabel_lapang');
    }
     
    function getDetailLapang($data){
        return $this->db->get_where('tabel_lapang',$data);
    }
    

}
