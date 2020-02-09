<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Adiw.io
 */
class Home extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->library('Modul');
        $this->load->model('Mglobals');
    }
    
    public function index(){
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            $data['akses'] = $session_data['akses'];
            $data['nama'] = $session_data['nama'];
            $data['paket'] = $this->Mglobals->getAll("paket");

            

            $this->load->view('front-end/af_login/head', $data);
            $this->load->view('front-end/index');
            $this->load->view('front-end/footer');
        }else{
            $data['paket'] = $this->Mglobals->getAll("paket");

            $this->load->view('front-end/head', $data);
            $this->load->view('front-end/index');
            $this->load->view('front-end/footer');
        }
    }

    public function about(){
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            $data['akses'] = $session_data['akses'];
            $data['nama'] = $session_data['nama'];

            $this->load->view('front-end/af_login/head', $data);
            $this->load->view('front-end/about');
            $this->load->view('front-end/footer');
        }else{
            $this->load->view('front-end/head');
            $this->load->view('front-end/about');
            $this->load->view('front-end/footer');
        }
    }

    public function trial(){
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            $data['akses'] = $session_data['akses'];
            $data['nama'] = $session_data['nama'];

            $this->load->view('front-end/af_login/head', $data);
            $this->load->view('front-end/trial');
            $this->load->view('front-end/footer');
        }else{
            $this->load->view('front-end/head');
            $this->load->view('front-end/trial');
            $this->load->view('front-end/footer');
        }
    }

    public function paket(){
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            $data['akses'] = $session_data['akses'];
            $data['nama'] = $session_data['nama'];
            $data['paket'] = $this->Mglobals->getAll("paket");

            $this->load->view('front-end/af_login/head', $data);
            $this->load->view('front-end/paket');
            $this->load->view('front-end/footer');
        }else{
            $data['paket'] = $this->Mglobals->getAll("paket");
            $this->load->view('front-end/head', $data);
            $this->load->view('front-end/paket');
            $this->load->view('front-end/footer');
        }
    }

    public function kelas(){
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            $data['akses'] = $session_data['akses'];
            $data['nama'] = $session_data['nama'];
            $p_data = $this->Mglobals->getAllQR("select a.* from paket a join pelanggan b on b.jenis_paket = a.id_paket where b.email = '".$data['email']."' and b.nama = '".$data['nama']."';");
            $data['nama_p'] = $p_data -> nama;
            $data['durasi'] = $p_data -> durasi;
            $data['deskripsi'] = $p_data -> deskripsi;
            $data['harga'] = $p_data -> harga;
            $data['id'] = $p_data -> id_paket;


            $this->load->view('front-end/af_login/head', $data);
            $this->load->view('front-end/kelas');
            $this->load->view('front-end/footer');
        }else{
            $data['paket'] = $this->Mglobals->getAllQR("select a.* from paket a join pelanggan b on b.jenis_paket = a.id_paket where b.email = '".$data['email']."' and b.nama = '".$data['nama']."';");
            $this->load->view('front-end/head', $data);
            $this->load->view('front-end/kelas');
            $this->load->view('front-end/footer');
        }
    }

    public function kelas_p(){
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            $data['akses'] = $session_data['akses'];
            $data['nama'] = $session_data['nama'];
            $p_data = $this->Mglobals->getAllQR("select a.* from materi a join pengajar b on b.id_materi = a.id_materi where b.email = '".$data['email']."' and b.nama = '".$data['nama']."';");
            $data['nama_p'] = $p_data -> nama;
            $data['deskripsi'] = $p_data -> deskripsi;

            $this->load->view('front-end/af_login/head', $data);
            $this->load->view('front-end/kelas_p');
            $this->load->view('front-end/isi_kelas');
            $this->load->view('front-end/footer');
        }else{
            $data['paket'] = $this->Mglobals->getAllQR("select a.* from paket a join pelanggan b on b.jenis_paket = a.id_paket where b.email = '".$data['email']."' and b.nama = '".$data['nama']."';");
            $this->load->view('front-end/head', $data);
            $this->load->view('front-end/kelas');
            $this->load->view('front-end/footer');
        }
    }

    public function contact(){
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            $data['akses'] = $session_data['akses'];
            $data['nama'] = $session_data['nama'];

            $this->load->view('front-end/af_login/head', $data);
            $this->load->view('front-end/contact');
            $this->load->view('front-end/footer');
        }else{
            $this->load->view('front-end/head');
            $this->load->view('front-end/contact');
            $this->load->view('front-end/footer');
        }
    }

    public function profile(){
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            $data['akses'] = $session_data['akses'];
            $data['nama'] = $session_data['nama'];
            
            if ($data['akses'] == "Member") {
                $pro = $this->Mglobals->getAllQR("select * from pelanggan where email = '".$data['email']."' and nama = '".$data['nama']."';");
                $data['alamat'] = $pro->alamat;
                $data['tlp'] = $pro->tlp;
            }else{
                $pro = $this->Mglobals->getAllQR("select * from pengajar where email = '".$data['email']."' and nama = '".$data['nama']."';");
                $data['alamat'] = $pro->alamat;
                $data['tlp'] = $pro->tlp;
            }

            $this->load->view('front-end/af_login/head', $data);
            $this->load->view('front-end/profile');
            $this->load->view('front-end/profile_p');
            $this->load->view('front-end/footer');
        }else{
            $this->load->view('front-end/head');
            $this->load->view('front-end/profile');
            $this->load->view('front-end/footer');
        }
    }

    public function login(){
        $this->load->view('front-end/login/index');
    }

    public function pengajar(){
        $this->load->view('front-end/login/pengajar');
    }

    public function daftar_member(){
        $data['paket'] = $this->Mglobals->getAll("paket");
        $this->load->view('front-end/daftar/member', $data);
    }

    public function daftar_pengajar(){
        $data['materi'] = $this->Mglobals->getAll("materi");
        $this->load->view('front-end/daftar/pengajar', $data);
    }
    
    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->modul->halaman('home');
    } 
}
