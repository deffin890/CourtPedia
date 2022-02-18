<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
    
	public function index()
	{
		$this->load->view('v_login');
	}
    
    public function addUser(){
        $username             = $this->input->post('username');
		$password             = $this->input->post('password');
		$nama                 = $this->input->post('nama');
		$telp                 = $this->input->post('telp');
		$email                = $this->input->post('email');
        
        $data = array(
			'username'       => $username,
			'password'       => SHA1($password),
			'nama'           => $nama,
			'no_telp'        => $telp,
			'email'          => $email
        );
        
        if($data){
            $this->m_login->addUser($data);
            $this->session->set_flashdata('sukses','Data Berhasil Ditambahkan');
        }else{
            $this->session->set_flashdata('gagal','Data Gagal Ditambahkan');
        }
        redirect('register');
    }
    
    public function getUser(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'password' => SHA1($password)
        );
        
        $cek = $this->m_login->getUser($data)->num_rows();
        $user = $this->m_login->getUser($data)->row();
        if($cek>0){
            $data_session = array(
                'id'            => $user->id,
                'nama'          => $user->nama,
                'username'      => $username,
                'telp'          => $user->no_telp,
                'email'         => $user->email,
                'authenticated' => true
            );
            
            $this->session->set_userdata($data_session);
            if($user->username == "admin"){
                redirect(site_url('admin'));
            }else{
                redirect(site_url('home'));
            }
        }else{
            $this->session->set_flashdata('gagal','Masukan Username/Password Dengan Benar');
            redirect(site_url('login'));
        }
    }
    
    function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
    
    public function tampilHome(){
        $this->load->view('v_home');
    }
    
    public function tampilRegister(){
		$this->load->view('v_register');
    }
    
}