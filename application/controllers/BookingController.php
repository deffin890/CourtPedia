<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingController extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_lapang');
		$this->load->model('m_jadwal');
		$this->load->model('m_sewa');
		$this->load->model('m_bayar');
 
	}
    
    public function getLihatLapang(){
        $data['data'] = $this->m_lapang->getLihatLapang()->result();
        $this->load->view('v_sewa',$data);
    }
    
    public function getDetailLapang($id_lapang){
        $data = array('id'=>$id_lapang);
        $detailLapang['detail'] = $this->m_lapang->getDetailLapang($data)->result();
        $this->load->view('v_detailsewa',$detailLapang);
    }
    
    public function addBooking(){
        $id_lapang      = $this->input->post('id_lapang');
        $nama_lapang    = $this->input->post('nama_lapang');
        $hari           = $this->input->post('hari');
        $jadwal         = $this->input->post('jadwal');
        $tgl            = $this->input->post('tgl');
        $invoice        = uniqid();
        $statusorder    = 0;
        
        $where = array(
            'hari'=>$hari,
            'id_lapangan'=>$id_lapang,
            'jam' => $jadwal
        );
        
        $detail = $this->m_jadwal->getJadwal($where,'tabel_jadwal')->result();
        foreach($detail as $d){
            $id_jadwal = $d->id;
        }
        
        $data = array(
			'id_user'       => $this->session->userdata('id'),
			'id_lapang'     => $id_lapang,
			'id_jadwal'     => $id_jadwal,
			'tgl_booking'   => $tgl,
			'invoice'       => $invoice
        );
        
        if($data){
            $this->m_sewa->addBooking($data);

            $list = $this->m_sewa->getOrderBy('tabel_sewa',$data)->result();
            foreach($list as $ls){
                $id_sewa      = $ls->id;
            }
            
            $where2 = array(
                'id' => $id_jadwal
            );
            $cek = $this->m_jadwal->getJadwal($where,'tabel_jadwal')->result();
            foreach($cek as $c){
                $jumlah_bayar = $c->harga;
            }
            $status_bayar = 0;
        
            $list = array(
                'jumlah_bayar' => $jumlah_bayar,
                'id_sewa' => $id_sewa,
                'status_bayar' => $status_bayar
            );
            $this->m_bayar->addPembayaran($list,'tabel_pembayaran');
        
            
            $this->session->set_flashdata('sukses','Data Berhasil Ditambahkan');
        }else{
            $this->session->set_flashdata('gagal','Data Gagal Ditambahkan');
        }
		redirect('detail/'.$id_lapang);
    }
    
    public function getInvoiceBy(){
        $data = array(
            'id_user' => $this->session->userdata('id')
        );

        $invoice['invoice'] = $this->m_sewa->getInvoiceBy($data)->result();
        
        $this->load->view('v_infosewa',$invoice);
    }
    
    public function payOrder($id_sewa){
        $data = array('id_sewa'=>$id_sewa);
        
        $statusbayar = array(
            'status_bayar' => 1
        );
        
        $ceksewa = $this->m_sewa->getInvoiceBy($data)->result();
        foreach($ceksewa as $cs ){
            $jadwal = $cs->id_jadwal;
        }
        
        $idjadwal = array(
            'id' => $jadwal
        );
        $data2 = array(
            'status_lapangan' => 1
        );
        
        $this->m_bayar->payOrder($data,$statusbayar);
        $this->m_jadwal->updateStatusLapang($idjadwal,$data2);
        $this->session->set_flashdata('sukses','Pembayaran Berhasil !');
        redirect(site_url('infosewa'));
    }
    
    public function getAllOrder(){
        $data['data'] = $this->m_sewa->getAllOrder()->result();
        $this->load->view('v_admin',$data);
    }
    
    public function getLihatLapangAdmin(){
        $data['dataJadwal'] = $this->m_jadwal->getJadwalAll()->result();
        $data['dataLapang'] = $this->m_lapang->getLihatLapang()->result();
        $this->load->view('v_infolapangan',$data);
    }
    
    public function updateLapang($id_jadwal){
        $idjadwal = array('id'=>$id_jadwal);
        
        $data = array(
            'status_lapangan' => 0
        );

        $this->m_jadwal->updateStatusLapang($idjadwal,$data);
        $this->session->set_flashdata('sukses','Update Lapang Berhasil !');
        redirect(site_url('infolapangan'));
    }
    
    public function getJadwal(){
        $hari       = $this->input->post('hari');
        $id_lapang  = $this->input->post('id_lapangan');
        $data2 = array(
            'hari'=>$hari,
            'id_lapangan'=>$id_lapang,
            'status_lapangan' => 0
        );
        $data = $this->m_jadwal->getJadwal($data2)->result();
        echo json_encode($data);
    }
}
