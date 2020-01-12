<script type="text/javascript"> 
    
    var save_method; //for save method string
    var table;
    var tbbarang;
    
    $(document).ready(function() {
        table = $('#tb').DataTable( {
            ajax: "<?php echo base_url(); ?>paket/ajax_list_detail/<?php echo $kode; ?>"
        });

        $('.datepicker').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd",
            todayHighlight: true,
            orientation: "top auto",
            todayBtn: true 
        });
    });
    
    function reload(){
        table.ajax.reload(null,false); //reload datatable ajax
    }
    
    function add(){
        save_method = 'add';
        //
        $('[name="materi"]').val("");
        $('[name="pengajar"]').val("");
                
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Paket'); // Set Title to Bootstrap modal title
    }
    
    function save(){
        var nama = document.getElementById('nama').value;
        var durasi = document.getElementById('durasi').value;
        var harga = document.getElementById('harga').value;
        
        if(nama === ''){
            alert("Nama barang tidak boleh kosong");
        }else if(durasi === ''){
            alert("Durasi tidak boleh kosong");
        }else if(harga === ''){
            alert("Harga tidak boleh kosong");
        }else{
            $('#btnSave').text('Saving...'); //change button text
            $('#btnSave').attr('disabled',true); //set button disable 

            var url;
            if(save_method === 'add') {
                url = "<?php echo base_url(); ?>paket/ajax_add";
            } else {
                url = "<?php echo base_url(); ?>paket/ajax_edit";
            }
            
            // ajax adding data to database
            var kode_trans = document.getElementById('kode').value;
            var deskripsi = document.getElementById('deskripsi').value;

            var kode_materi = document.getElementById('kode_materi').value;
            var kode_pengajar = document.getElementById('kode_pengajar').value;
            var kode_detail = document.getElementById('kode_detail').value;
            
            // ajax adding data to database
            var form_data = new FormData();
            form_data.append('id_paket', kode_trans);
            form_data.append('nama', nama);
            form_data.append('durasi', durasi);
            form_data.append('harga', harga);
            form_data.append('deskripsi', deskripsi);
            
            form_data.append('kode_materi', kode_materi);
            form_data.append('kode_pengajar', kode_pengajar);
            form_data.append('id_paket_detail', kode_detail);

            $.ajax({
                url: url,
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'POST',
                success: function (response) {
                    alert(response.status);
                    reload();

                    $('#btnSave').text('Save'); //change button text
                    $('#btnSave').attr('disabled',false); //set button enable 

                    $('#modal_form').modal('hide');

                },error: function (response) {
                    alert(response.status);
                    $('#btnSave').text('Save'); //change button text
                    $('#btnSave').attr('disabled',false); //set button enable 
                }
            });
        }
    }
    
    function hapus(id, nama){
        if(confirm("Apakah anda yakin menghapus barang " + nama + " ?")){
            // ajax delete data to database
            $.ajax({
                url : "<?php echo base_url(); ?>paket/hapusdetail/" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data){
                    alert(data.status);
                    reload();
                },error: function (jqXHR, textStatus, errorThrown){
                    alert('Error hapus data');
                }
            });
        }
    }
    
    function ganti(id){
        save_method = 'update';
        $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Ganti Data'); // Set title to Bootstrap modal title
        
        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo base_url(); ?>paket/ganti/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                $('[name="id"]').val(data.id_paket_detail);
                $('[name="kode_materi"]').val(data.id_materi);
                $('[name="materi"]').val(data.nama);
                $('[name="kode_pengajar"]').val(data.id_pengajar);
                $('[name="pengajar"]').val(data.nama_p);
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data');
            }
        });
    }
    
    function showbarang(){
        $('#modal_barang').modal('show'); // show bootstrap modal
        tbbarang = $('#tbbarang').DataTable( {
            ajax: "<?php echo base_url(); ?>paket/ajax_barang",
            retrieve:true
        });
        tbbarang.destroy();
        tbbarang = $('#tbbarang').DataTable( {
            ajax: "<?php echo base_url(); ?>paket/ajax_barang",
            retrieve:true
        });
    }
    
    function showpengajar(){
        $('#modal_barang').modal('show'); // show bootstrap modal
        tbbarang = $('#tbbarang').DataTable( {
            ajax: "<?php echo base_url(); ?>paket/ajax_pengajar",
            retrieve:true
        });
        tbbarang.destroy();
        tbbarang = $('#tbbarang').DataTable( {
            ajax: "<?php echo base_url(); ?>paket/ajax_pengajar",
            retrieve:true
        });
    }

    function pilih(kode, nama,){
        $('[name="kode_materi"]').val(kode);
        $('[name="materi"]').val(nama);
        
        $('#modal_barang').modal('hide');
    }

    function pilih2(kode, nama,){
        $('[name="kode_pengajar"]').val(kode);
        $('[name="pengajar"]').val(nama);
        
        $('#modal_barang').modal('hide');
    }
    
</script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
                <div class="col-xl-12 col-lg-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transaksi Pembelian</h4>
                            <div class="float-right">
                                
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6 col-sm-6">
                                        <div class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" style="text-align: right;">Kode</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Kode Barang Masuk" readonly="" name="kode" id="kode" value="<?php echo $kode; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" style="text-align: right;">Durasi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Durasi" name="durasi" id="durasi" value="<?php echo $durasi; ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" style="text-align: right;">Harga</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Harga" name="harga" id="harga" value="<?php echo $harga; ?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-6 col-sm-6">
                                    <div class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" style="text-align: right;">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Nama Paket" name="nama" id="nama" value="<?php echo $nama; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" style="text-align: right;">Deskripsi</label>
                                                <div class="col-sm-10">
                                                    
                                                    <textarea class="form-control" style="height:92px;" placeholder="Deskripsi"  name="deskripsi" id="deskripsi"><?php echo $deskripsi; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <button class="btn btn-md btn-primary" onclick="add();"><i class="ft-plus"></i> Materi & Pengajar</button>
                                    <button class="btn btn-md btn-default" onclick="reload();"><i class="ft-repeat"></i> Reload</button>
                                </div>
                                <div class="clearfix"></div><br>
                                <div class="table-responsive">
                                    <table id="tb" class="table table-hover mb-0 ps-container ps-theme-default" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Materi</th>
                                                <th>Pengajar</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal -->
<div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <input type="hidden" name="id" id="kode_detail">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" style="text-align: right;">Materi</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="hidden" name="kode_materi" id="kode_materi">
                                <input type="text" class="form-control" placeholder="Materi" name="materi" readonly="">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" onclick="showbarang()">...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" style="text-align: right;">Pengajar</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="hidden" name="kode_pengajar" id="kode_pengajar">
                                <input type="text" class="form-control" placeholder="Pengajar" name="pengajar" readonly="">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" onclick="showpengajar()">...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btnSave" type="button" class="btn btn-primary" onclick="save();">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- modal -->

<!-- Modal list barang -->
<div class="modal fade" id="modal_barang" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="table-responsive">
                        <table id="tbbarang" class="table table-hover mb-0 ps-container ps-theme-default" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Aksi</th>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th> Deskripsi / Email </th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal -->