<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of  Paket
 *
 * @author Adiw.io
 */
class Paket extends CI_Controller{
    
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
            $this->load->view('paket/index');
            $this->load->view('footer');
        }else{
           $this->modul->halaman('login');
        }
    }
    
    public function ajax_list() {
        if($this->session->userdata('logged_in')){
            $data = array();
            $list = $this->Mglobals->getAll("paket");
            foreach ($list->result() as $row) {
                $val = array();
                $val[] = $row->id_paket;
                $val[] = $row->nama;
                $val[] = $row->deskripsi;
                $val[] = $row->durasi ;
                $val[] = $row->harga;
                $str = '<table class="table table-hover mb-0 ps-container ps-theme-default">
                            <thead>
                                <tr>
                                    <th>Materi</th>
                                    <th>Pengajar</th>
                                </tr>
                            </thead>
                            <tbody>';
                $list1 = $this->Mglobals->getAllQ("SELECT * FROM paket_detail where id_paket = '".$row->id_paket."';");
                foreach ($list1->result() as $row1) {
                    $materi = $this->Mglobals->getAllQR("select nama from materi where id_materi = '".$row1->id_materi."';");
                    $pengajar = $this->Mglobals->getAllQR("select nama from pengajar where id_pengajar = '".$row1->id_pengajar."';");
                    $str .= '<tr>';
                    $str .= '<td>'.$materi->nama.'</td>';
                    $str .= '<td>'.$pengajar->nama.'</td>';
                    $str .= '</tr>';
                }
                $str .= '</tbody></table>';
                $val[] = $str;
                $val[] = '<div style="text-align: center;">'
                        . '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="ganti('."'".$this->modul->enkrip_url($row->id_paket)."'".')"><i class="ft-edit"></i> Edit</a>&nbsp;'
                        . '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="hapus('."'".$row->id_paket."'".')"><i class="ft-delete"></i> Delete</a>'
                        . '</div>';
                
                $data[] = $val;
            }
            $output = array("data" => $data);
            echo json_encode($output);
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function detail() {
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            $data['akses'] = $session_data['akses'];
            $data['nama'] = $session_data['nama'];   

            $kode_enkrip = $this->uri->segment(3);
            if(strlen($kode_enkrip) > 0){
                $kode_dekrip = $this->modul->dekrip_url($kode_enkrip);
                $jml_kode = $this->Mglobals->getAllQR("SELECT count(*) as jml FROM paket where id_paket = '".$kode_dekrip."';")->jml;
                if($jml_kode > 0){
                    $data['kode'] = $kode_dekrip;
                    $data['nama'] = $this->Mglobals->getAllQR("SELECT nama FROM paket where id_paket = '".$kode_dekrip."';")->nama;
                    $data['deskripsi'] = $this->Mglobals->getAllQR("SELECT deskripsi FROM paket where id_paket = '".$kode_dekrip."';")->deskripsi;
                    $data['durasi'] = $this->Mglobals->getAllQR("SELECT durasi FROM paket where id_paket = '".$kode_dekrip."';")->durasi;
                    $data['harga'] = $this->Mglobals->getAllQR("SELECT harga FROM paket where id_paket = '".$kode_dekrip."';")->harga;
                }else{
                    $this->modul->halaman('paket');
                }
            }else{
                $data['kode'] = $this->modul->autokode1('PKT','id_paket','paket','4','7');
                $data['nama'] = "";
                $data['deskripsi'] = "";
                $data['durasi'] = "";
                $data['harga'] = "";
            }
            
            $this->load->view('head', $data);
            $this->load->view('menu');
            $this->load->view('paket/detail');
            $this->load->view('footer');
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function ajax_add() {
        if($this->session->userdata('logged_in')){
            $cek = $this->Mglobals->getAllQR("select count(*) as jml from paket where id_paket = '".$this->input->post('id_paket')."';")->jml;
            if($cek > 0){
                $status = $this->simpandetail();
            }else{
                $status = $this->simpanhead_detail();
            }
            echo json_encode(array("status" => $status));
        }else{
            $this->modul->halaman('login');
        }
    }
    
    private function simpanhead_detail() {
        $data = array(
            'id_paket' => $this->input->post('id_paket'),
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'durasi' => $this->input->post('durasi'),
            'harga' => $this->input->post('harga')
        );
        $simpan = $this->Mglobals->add("paket",$data);
        if($simpan == 1){
            $data_detail = array(
                'id_paket_detail' => $this->modul->autokode1('PKTD','id_paket_detail','paket_detail','5','8'),
                'id_materi' => $this->input->post('kode_materi'),
                'id_pengajar' => $this->input->post('kode_pengajar'),
                'id_paket' => $this->input->post('id_paket')
            );
            $simpan1 = $this->Mglobals->add("paket_detail",$data_detail);
            if($simpan1 == 1){
                $status = "Data tersimpan";
            }else{
                $status = "Data gagal tersimpan";
            }
        }else{
            $status = "Data gagal tersimpan";
        }
        return $status;
    }
    
    private function simpandetail() {
        // cek apa data yang sama sebelumnya
        $jml = $this->Mglobals->getAllQR("SELECT count(*) as jml FROM paket_detail where id_paket_detail = '".$this->input->post('id_paket_detail')."';")->jml;
        if($jml > 0){            
            $data_detail = array(
                'id_materi' => $this->input->post('kode_materi'),
                'id_pengajar' => $this->input->post('kode_pengajar'),
                'id_paket' => $this->input->post('id_paket')
            );
            $kond['id_paket_detail'] = $this->input->post('id_paket_detail');
            $simpan1 = $this->Mglobals->update("paket_detail",$data_detail, $kond);
            if($simpan1 == 1){
                $status = "Data tersimpan";
            }else{
                $status = "Data gagal tersimpan";
            }
            
        }else{
            $data_detail = array(
                'id_paket_detail' => $this->modul->autokode1('PKTD','id_paket_detail','paket_detail','5','8'),
                'id_materi' => $this->input->post('kode_materi'),
                'id_pengajar' => $this->input->post('kode_pengajar'),
                'id_paket' => $this->input->post('id_paket')
            );
            $simpan1 = $this->Mglobals->add("paket_detail",$data_detail);
            if($simpan1 == 1){
                $status = "Data tersimpan";
            }else{
                $status = "Data gagal tersimpan";
            }
        }
        return $status;
    }
    
    public function ganti(){
        if($this->session->userdata('logged_in')){
            $kodedetail = $this->uri->segment(3);
            $data = $this->Mglobals->getAllQR("SELECT a.id_paket_detail, b.id_materi, b.nama, c.id_pengajar, c.nama as nama_p FROM paket_detail a join materi b on a.id_materi=b.id_materi join pengajar c on a.id_pengajar=c.id_pengajar where a.id_paket_detail = '".$kodedetail."' ");
            echo json_encode($data);
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function ajax_edit() {
        if($this->session->userdata('logged_in')){
            $data = array(
                'id_materi' => $this->input->post('kode_materi'),
                'id_pengajar' => $this->input->post('kode_pengajar'),
                'id_paket' => $this->input->post('id_paket')
            );
            $kond['id_paket_detail'] = $this->input->post('id_paket_detail');
            $update = $this->Mglobals->update("paket_detail",$data, $kond);
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
            $kondisi['id_paket'] = $this->uri->segment(3);
            $hapus = $this->Mglobals->delete("paket",$kondisi);
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
    
    public function ajax_barang() {
        if($this->session->userdata('logged_in')){
            $data = array();
            $list = $this->Mglobals->getAllQ("select * from materi;");
            foreach ($list->result() as $row) {
                $val = array();
                $val[] = '<div style="text-align: center;">'
                        . '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Pilih" onclick="pilih('."'".$row->id_materi."'".','."'".$row->nama."'".')"><i class="ft-check"></i> Pilih</a>'
                        . '</div>';
                $val[] = $row->id_materi;
                $val[] = $row->nama;
                $val[] = $row->deskripsi;
                
                $data[] = $val;
            }
            $output = array("data" => $data);
            echo json_encode($output);
        }else{
            $this->modul->halaman('login');
        }
    }

    public function ajax_pengajar() {
        if($this->session->userdata('logged_in')){
            $data = array();
            $list = $this->Mglobals->getAllQ("select * from pengajar;");
            foreach ($list->result() as $row) {
                $val = array();
                $val[] = '<div style="text-align: center;">'
                        . '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Pilih" onclick="pilih2('."'".$row->id_pengajar."'".','."'".$row->nama."'".')"><i class="ft-check"></i> Pilih</a>'
                        . '</div>';
                $val[] = $row->id_pengajar;
                $val[] = $row->nama;
                $val[] = $row->email;
                
                $data[] = $val;
            }
            $output = array("data" => $data);
            echo json_encode($output);
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function ajax_list_detail() {
        if($this->session->userdata('logged_in')){
            $kode = $this->uri->segment(3);
            $data = array();
            $list = $this->Mglobals->getAllQ("SELECT * FROM paket_detail where id_paket = '".$kode."';");
            foreach ($list->result() as $row) {
                $val = array();
                // data barang
                $materi = $this->Mglobals->getAllQR("select * from materi where id_materi = '".$row->id_materi."';");
                $pengajar = $this->Mglobals->getAllQR("select * from pengajar where id_pengajar = '".$row->id_pengajar."';");
                $val[] = $row->id_paket_detail;
                $val[] = $materi->nama;
                $val[] = $pengajar->nama;
                $val[] = '<div style="text-align: center;">'
                        . '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="ganti('."'".$row->id_paket_detail."'".')"><i class="ft-edit"></i> Edit</a>&nbsp;'
                        . '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="hapus('."'".$row->id_paket_detail."'".')"><i class="ft-delete"></i> Delete</a>'
                        . '</div>';
                
                $data[] = $val;
            }
            $output = array("data" => $data);
            echo json_encode($output);
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function hapusdetail() {
        if($this->session->userdata('logged_in')){
            $kondisi['id_paket_detail'] = $this->uri->segment(3);
            $hapus = $this->Mglobals->delete("paket_detail",$kondisi);
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
