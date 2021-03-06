<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 
 *
 * @author Adiw.io
 */
class Eb_admin extends CI_Controller{
    
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
            
            $this->load->view('head', $data);
            $this->load->view('menu');
            $this->load->view('content');
            $this->load->view('footer');

        }else{
           $this->modul->halaman('login');
        }
    }
    
    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->modul->halaman('login');
    } 
}
