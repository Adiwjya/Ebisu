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
        $this->load->view('front-end/head');
        $this->load->view('front-end/index');
        $this->load->view('front-end/footer');
    }

    public function login(){
        $this->load->view('front-end/login/index');
    }

    public function pengajar(){
        $this->load->view('front-end/login/pengajar');
    }
    
    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->modul->halaman('home');
    } 
}
