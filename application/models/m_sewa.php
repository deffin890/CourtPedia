<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_sewa extends CI_Model {
    
    public function addBooking($data){
		$this->db->insert('tabel_sewa',$data);
	}
    
    function getInvoiceBy($data){
        $this->db->select('
            tabel_sewa.id,tabel_sewa.id_user,tabel_sewa.id_lapang, tabel_sewa.id_jadwal,tabel_sewa.tgl_booking,tabel_sewa.invoice, tabel_lapang.nama_lapang, tabel_jadwal.hari,tabel_jadwal.jam,tabel_jadwal.harga,tabel_pembayaran.status_bayar
        ');
        $this->db->from('tabel_sewa');
        $this->db->join('tabel_lapang','tabel_lapang.id = tabel_sewa.id_lapang');
        $this->db->join('tabel_jadwal','tabel_jadwal.id = tabel_sewa.id_jadwal');
        $this->db->join('tabel_pembayaran','tabel_pembayaran.id_sewa = tabel_sewa.id');
        $this->db->order_by('tabel_sewa.id','DESC');
        $this->db->where($data);
		$query = $this->db->get();
	    return $query;
    }
    
    function getOrderBy($table,$where){
		return $this->db->get_where($table,$where);
	}
    
    function getAllOrder(){
        $this->db->select('
            tabel_user.nama,
            tabel_sewa.id,tabel_sewa.id_user,tabel_sewa.id_lapang, tabel_sewa.id_jadwal,tabel_sewa.tgl_booking,tabel_sewa.invoice, tabel_lapang.nama_lapang, tabel_jadwal.hari,tabel_jadwal.jam,tabel_jadwal.harga,tabel_jadwal.status_lapangan,tabel_pembayaran.status_bayar
        ');
        $this->db->from('tabel_sewa');
        $this->db->join('tabel_user','tabel_user.id = tabel_sewa.id_user');
        $this->db->join('tabel_lapang','tabel_lapang.id = tabel_sewa.id_lapang');
        $this->db->join('tabel_jadwal','tabel_jadwal.id = tabel_sewa.id_jadwal');
        $this->db->join('tabel_pembayaran','tabel_pembayaran.id_sewa = tabel_sewa.id');
        $this->db->order_by('tabel_sewa.id','DESC');
		$query = $this->db->get();
	    return $query;
    }
//    
//    SELECT 
//    tabel_sewa.id,tabel_sewa.id_user,tabel_sewa.id_lapang, tabel_sewa.id_jadwal,tabel_sewa.tgl_booking,tabel_sewa.invoice,tabel_sewa.status_order, tabel_lapang.nama_lapang, tabel_jadwal.hari,tabel_jadwal.jam,tabel_jadwal.harga,tabel_pembayaran.status_bayar
//    FROM tabel_sewa
//    INNER JOIN tabel_lapang ON tabel_sewa.id_lapang = tabel_lapang.id
//    INNER JOIN tabel_jadwal ON tabel_jadwal.id = tabel_sewa.id_jadwal
//    INNER JOIN tabel_pembayaran ON tabel_pembayaran.id_sewa = tabel_sewa.id
//    WHERE id_user = 5 AND id_lapang='LBDMNT' AND id_jadwal='1' AND tgl_booking='2020-05-12' AND invoice='5ebacea071a54';
}
