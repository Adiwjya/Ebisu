<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pengajar
 *
 * @author Adiw.io
 */
class Pengajar extends CI_Controller{
    
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
            $this->load->view('pengajar/index');
            $this->load->view('footer');
        }else{
           $this->modul->halaman('login');
        }
    }
    
    public function ajax_list() {
        if($this->session->userdata('logged_in')){
            $data = array();
            $list = $this->Mglobals->getAll("pengajar");
            foreach ($list->result() as $row) {
                $val = array();
                $val[] = $row->id_pengajar;
                $val[] = $row->nama;
                $val[] = $row->email;
                $val[] = $row->tlp;
                $val[] = $row->id_materi;
                $val[] = $row->username;
                $val[] = $row->password;
                // $val[] = $this->Mglobals->getAllQR("SELECT nama_kategori FROM kategori where idkategori = '".$row->idkategori."';")->nama_kategori;
                $val[] = '<div style="text-align: center;">'
                        . '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="ganti('."'".$row->id_pengajar."'".')"><i class="ft-edit"></i> Edit</a>&nbsp;'
                        . '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="hapus('."'".$row->id_pengajar."'".','."'".$row->nama."'".')"><i class="ft-delete"></i> Delete</a>'
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
            $cek = $this->Mglobals->getAllQR("select count(*) as jml from pengajar where nama = '".$this->input->post('nama')."';")->jml;
            if($cek > 0){
                $status = "Data sudah ada";
            }else{
                $data = array(
                    'id_pengajar' => $this->modul->autokode1('PG','id_pengajar','pengajar','3','7'),
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'tlp' => $this->input->post('tlp'),
                    'alamat' => $this->input->post('alamat'),
                    'username' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'id_materi' => "MTR001"
   
                );
                $simpan = $this->Mglobals->add("pengajar",$data);
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
            $kondisi['id_pengajar'] = $this->uri->segment(3);
            $data = $this->Mglobals->get_by_id("pengajar", $kondisi);
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
            $condition['id_pengajar'] = $this->input->post('id');
            $update = $this->Mglobals->update("pengajar",$data, $condition);
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
            $kondisi['id_pengajar'] = $this->uri->segment(3);
            $hapus = $this->Mglobals->delete("pengajar",$kondisi);
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
