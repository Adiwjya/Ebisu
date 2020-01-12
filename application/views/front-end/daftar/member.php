<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ebisu | Daftar</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/form/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/form/css/style.css">

<script type="text/javascript"> 
    
function p1(){
    var num_acc1= document.getElementById('vs3').value;
    document.getElementById('acc').value = "XXXX - XXXX - "+num_acc1;
}
function p2(){
    var num_acc2= document.getElementById('pp3').value;
    document.getElementById('acc').value = "XXXX - XXXX - "+num_acc2;
}
function p3(){
    var num_acc3= document.getElementById('mc3').value;
    document.getElementById('acc').value = "XXXX - XXXX - "+num_acc3;
}

    function save(){
        $('#btnSave').text('Saving...'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable 
        
        var url = "<?php echo base_url(); ?>pelanggan/ajax_add_r";        
        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST", 
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                alert(data.status);
                $('#btnSave').text('Save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable

                window.location.href = "<?php echo base_url(); ?>home/login";
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert("Error json " + errorThrown);
                
                $('#btnSave').text('Save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 
            }
        });
    }

    function pilih(paket,harga) {
        document.getElementById('paket').value =  paket;
        document.getElementById('hh').value = "Rp."+harga;
        document.getElementById('signup').type = "hidden";
        document.getElementById('btnSave').type = "button";
    }
    
    
</script>

</head>
<body style=" overflow: hidden;" >

    <div class="main" style="padding: 20px 0;">
        <!-- Sing in  Form -->
        <section class="sign-in" style="margin-bottom:800px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-image">
                        <figure><img src="<?php echo base_url(); ?>app-assets/form/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo base_url(); ?>home/login" class="signup-image-link" style="margin-top: 59px;">Saya sudah mempunyai akun</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up Member</h2>
                        <form id="form">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Nama"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-google-maps"></i></label>
                                <input type="email" name="alamat" id="alamat" placeholder="Alamat"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-local-phone"></i></label>
                                <input type="email" name="tlp" id="tlp" placeholder="Telepon"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                                <input type="hidden" name="paket" id="paket"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button" >
                                <a href="#two"><input type="button" name="signup" id="signup" class="form-submit" style="margin-top:unset;" value="Lanjutkan"/></a>

                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="two" style="margin-bottom: 100px; padding-top:50px;">
            <div class="container" style="background-color: unset; box-shadow:none;">
            <div class="row" style="display: inline-flex;margin-left: -130px;">
                
            <?php
                foreach ($paket->result() as $row)
                {
            ?>

            <div class="col-md-4">
                    <div class="container" style="width: 350px; margin:20px;">
                        <div class="signin-content" style="padding-top:55px; padding-bottom: 60px;">
                            <div class="jarak">
                                <div class="social-login" style="margin-top: unset;">
                                    <ul class="socials">
                                        <span class="price">
                                            <span class="number" style="font-size: 25pt;padding: 60px ;"><?php echo $row->harga; ?><small style="font-size:8pt;" class="per">/ <?php echo $row->durasi; ?> Bln</small>
                                        </span><br>
                                        <span style="color: #b3b3b3;font-size: large;"><center ><?php echo $row->deskripsi;?></center></span>
                                        <h3 class="heading-2 mb-3">  <center>Materi yang tersedia</center></h3>
                                        <ul class="pricing-text mb-4">
                                        <?php 
                                        $ss = $this->Mglobals->getAllQ("Select * from paket_detail where id_paket = '".$row->id_paket."' "); 
                                        foreach ($ss->result() as $row1) {
                                            $materi = $this->Mglobals->getAllQR("select nama from materi where id_materi = '".$row1->id_materi."';");
                                            $pengajar = $this->Mglobals->getAllQR("select nama from pengajar where id_pengajar = '".$row1->id_pengajar."';");
                                        ?>
                                        <li><strong><?php echo $materi->nama; ?></strong> <?php echo $pengajar->nama; ?></li>
                                        <?php
                                        }
                                        ?>
                                        </ul>
                                        <a href="#tho" onclick="pilih('<?php echo $row->id_paket; ?>','<?php echo $row->harga; ?>')"><input type="button" name="signup" id="signup" class="form-submit" style="width: -moz-available; " value="<?php echo $row->nama; ?>"/></a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                                    
                        </div>
                    </div>
                </div>
                
            <?php
                }
            ?>

            </div>
            </div>
        </section>






        
        <section class="sign-in" id="tho" style="margin-bottom: 100px; padding-top:50px;">

        <div class="container" style="background-color: unset; box-shadow:none;">
            <div class="row" style="display: inline-flex;margin-left: -137px;">
                <div class="col-md-4">
                    <div class="container" style="width: 350px; margin:20px;">
                        <div class="signin-content" style="padding-top:55px;">
                            <div class="jarak">
                            <img src="<?php echo base_url(); ?>app-assets/form/images/visa.jpg" alt="sing up image" style="">
                                <div class="social-login" style="margin-top: unset;">
                                        <div class="form-group" style="display:inline-flex;">
                                            <input id="vs1" type="text" maxlength="4" style="width: 80px;padding: 0px 20px;"  placeholder="XXXX"/>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input id="vs2" type="text" maxlength="4" style="width: 80px;padding: 0px 20px;" placeholder="XXXX"/>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;                       
                                            <input id="vs3" type="text" maxlength="4" style="width: 80px;padding: 0px 20px;" placeholder="XXXX"/> 
                                        </div>
                                </div>
                                <br>
                                <a href="#thu" onclick="p1()"><input type="button" name="signup" id="signup" class="form-submit" style="margin-top:unset;width: -moz-available;" value="Lanjutkan" /></a>

                            </div>
                                    
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="container" style="width: 350px; margin:20px;">
                        <div class="signin-content" style="padding-top:55px;">
                            <div class="jarak">
                            <img src="<?php echo base_url(); ?>app-assets/form/images/paypal.jpg" alt="sing up image" style="width:235px;margin-left:43px">
                                <div class="social-login" style="margin-top: unset;">
                                            <input id="pp1" type="text" style="width: 80px;padding: 0px 20px;"  placeholder="XXXX"/>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input id="pp2" type="text" style="width: 80px;padding: 0px 20px;" placeholder="XXXX"/>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;                       
                                            <input id="pp3" type="text" style="width: 80px;padding: 0px 20px;" placeholder="XXXX"/> 
                                </div>
                                <br>
                                <a href="#thu" onclick="p2()"><input type="button" name="signup" id="signup" class="form-submit" style="margin-top:unset;width: -moz-available;" value="Lanjutkan"/></a>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="container" style="width: 350px; margin:20px;">
                        <div class="signin-content" style="padding-top:55px;">
                            <div class="jarak">
                            <img src="<?php echo base_url(); ?>app-assets/form/images/master.jpg" alt="sing up image" style="width:200px; margin:28px; margin-left:63px; ">
                                <div class="social-login" style="margin-top: unset;">

                                            <input id="mc1" type="text" style="width: 80px;padding: 0px 20px;"  placeholder="XXXX"/>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input id="mc2" type="text" style="width: 80px;padding: 0px 20px;" placeholder="XXXX"/>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;                       
                                            <input id="mc3" type="text" style="width: 80px;padding: 0px 20px;" placeholder="XXXX"/> 

                                </div>

                                <br>
                                <a href="#thu" onclick="p3()"><input type="button" name="signup" id="signup" class="form-submit" style="margin-top:unset;width: -moz-available;" value="Lanjutkan"/></a>

                            </div>
                                    
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
        </section>

        <section class="sign-in" id="thu" style="margin-bottom: 100px; padding-top:50px;">
        
        <div class="container">
        <div class="row">
        <div class="col-sm-8" style="padding: 55px">

        <div style="font-size: 15pt">Account Number</div>
        <div class="form-group">                                            
        <input style="font-size: 20pt" type="email"  id="acc" readonly/>
        </div>
        <div style="font-size: 15pt">Jumlah Nominal</div>
        <div class="form-group">                                            
        <input style="font-size: 20pt" type="email" id="hh"  placeholder="" readonly/>
        <br>
        <br>
        <div> Periksa kembali data pembayaran Anda sebelum melanjutkan transaksi</div>
        <div> Jika melalui teller, Isi Nama Pemilik Rekening dengan nama penyetor dan Nomor Rekening dengan : 0000</div>
        <div> Demi Keamanan transaksi Anda pastikan untuk tidak menginformasikan bukti dan data pembayaran</div>
        <br>
        <br>
        <div style="color: red;font-size: 15pt">WARNING!!!</div>
        <div>Begitu proses telah selesai transaksi tidak dapat direfund</div>

        <input type="hidden" id="btnSave" class="form-submit" style="margin-top:unset;margin-left:600px" value="Simpan" onclick="save();"/>
        </div>


        </div>
        </div>

        </div>
        
        </section>

    </div>
    
    <!-- JS -->
    <!-- <script src="<?php echo base_url(); ?>app-assets/form/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/form/js/main.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/front-end/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front-end/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front-end/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>