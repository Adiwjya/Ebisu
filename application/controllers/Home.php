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

            $this->load->view('front-end/af_login/head', $data);
            $this->load->view('front-end/index');
            $this->load->view('front-end/footer');
        }else{
            $this->load->view('front-end/head');
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

    public function paket(){
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            $data['akses'] = $session_data['akses'];
            $data['nama'] = $session_data['nama'];

            $this->load->view('front-end/af_login/head', $data);
            $this->load->view('front-end/paket');
            $this->load->view('front-end/footer');
        }else{
            $this->load->view('front-end/head');
            $this->load->view('front-end/paket');
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

    public function login(){
        $this->load->view('front-end/login/index');
    }

    public function pengajar(){
        $this->load->view('front-end/login/pengajar');
    }

    public function daftar_member(){
        $this->load->view('front-end/daftar/member');
    }

    public function daftar_pengajar(){
        $this->load->view('front-end/daftar/pengajar');
    }
    
    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->modul->halaman('home');
    } 
}
