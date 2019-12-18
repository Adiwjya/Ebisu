<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pelanggan
 *
 * @author Adiw.io
 */
class Pelanggan extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('Modul');
        $this->load->model('Mglobals');
    }
    
    public function index() {
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            $data['akses'] = $session_data['akses'];
            $data['nama'] = $session_data['nama'];
            
            $this->load->view('head', $data);
            $this->load->view('menu');
            $this->load->view('pelanggan/index');
            $this->load->view('footer');
        }else{
           $this->modul->halaman('login');
        }
    }
    
    public function ajax_list() {
        if($this->session->userdata('logged_in')){
            $data = array();
            $list = $this->Mglobals->getAll("pelanggan");
            foreach ($list->result() as $row) {
                $val = array();
                $val[] = $row->id_pelanggan;
                $val[] = $row->nama;
                $val[] = $row->email;
                $val[] = $row->alamat;
                $val[] = $row->tlp;
                $val[] = $row->username;
                $val[] = $row->password;
                // $val[] = $this->Mglobals->getAllQR("SELECT nama_kategori FROM kategori where idkategori = '".$row->idkategori."';")->nama_kategori;
                $val[] = '<div style="text-align: center;">'
                        . '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="ganti('."'".$row->id_pelanggan."'".')"><i class="ft-edit"></i> Edit</a>&nbsp;'
                        . '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="hapus('."'".$row->id_pelanggan."'".','."'".$row->nama."'".')"><i class="ft-delete"></i> Delete</a>'
                        . '</div>';
                
                $data[] = $val;
            }
            $output = array("data" => $data);
            echo json_encode($output);
        }else{
            $this->modul->halaman('login');
        }
    }

    public function ajax_add() {
        if($this->session->userdata('logged_in')){
            $cek = $this->Mglobals->getAllQR("select count(*) as jml from pelanggan where nama = '".$this->input->post('nama')."';")->jml;
            if($cek > 0){
                $status = "Data sudah ada";
            }else{
                $data = array(
                    'id_pelanggan' => $this->modul->autokode1('PL','id_pelanggan','pelanggan','3','7'),
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'tlp' => $this->input->post('tlp'),
                    'alamat' => $this->input->post('alamat'),
                    'username' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'jenis_bidang' => "-",
                    'jenis_paket' => "-",
   
                );
                $simpan = $this->Mglobals->add("pelanggan",$data);
                if($simpan == 1){
                    $status = "Data tersimpan";
                }else{
                    $status = "Data gagal tersimpan";
                }
            }
            echo json_encode(array("status" => $status));
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function ganti(){
        if($this->session->userdata('logged_in')){
            $kondisi['id_pelanggan'] = $this->uri->segment(3);
            $data = $this->Mglobals->get_by_id("pelanggan", $kondisi);
            echo json_encode($data);
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function ajax_edit() {
        if($this->session->userdata('logged_in')){
            $data = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'kode_kota' => $this->input->post('kode_kota'),
                    'no_tlp' => $this->input->post('no_tlp')
            );
            $condition['id_pelanggan'] = $this->input->post('id');
            $update = $this->Mglobals->update("pelanggan",$data, $condition);
            if($update == 1){
                $status = "Data terupdate";
            }else{
                $status = "Data gagal terupdate";
            }
            echo json_encode(array("status" => $status));
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function hapus() {
        if($this->session->userdata('logged_in')){
            $kondisi['id_pelanggan'] = $this->uri->segment(3);
            $hapus = $this->Mglobals->delete("pelanggan",$kondisi);
            if($hapus == 1){
                $status = "Data terhapus";
            }else{
                $status = "Data gagal terhapus";
            }
            echo json_encode(array("status" => $status));
        }else{
            $this->modul->halaman('login');
        }
    }
}
