<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_jadwal extends CI_Model {
    
    function getJadwal($data){
        return $this->db->get_where('tabel_jadwal',$data);
    }
    
    function getJadwalAll(){
        $this->db->select('*');
        $this->db->from('tabel_jadwal');
        $this->db->order_by('id','ASC');
		$query = $this->db->get();
	    return $query;
    }
    
    public function updateStatusLapang($idjadwal,$data){

        $this->db->where($idjadwal);
		$this->db->update('tabel_jadwal',$data);
    }

    

}
