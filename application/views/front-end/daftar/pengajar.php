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

    <style>
    #hapus {
                display: none;
                position: fixed;
                width: 1190px;
                bottom: 0;
                left: 6%;
                z-index: 99;
                border: none;
                outline: none;
                cursor: default;
            }
    </style>
<script type="text/javascript"> 
    
    function save(){
        $('#btnSave').text('Saving...'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable 
        
        var url = "<?php echo base_url(); ?>pengajar/ajax_add_r";        
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

                window.location.href = "<?php echo base_url(); ?>home/pengajar";
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert("Error json " + errorThrown);
                
                $('#btnSave').text('Save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 
            }
        });
    }

    function pilih(paket) {
        document.getElementById('paket').value =  paket;
        document.getElementById('signup').type = "hidden";
        document.getElementById('btnSave').type = "button";
    }
    
    
</script>

</head>
<body style=" overflow: hidden;">

    <div class="main" style="padding: 20px 0;">
        <!-- Sing in  Form -->
        <section class="sign-in" style="margin-bottom:800px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">

                    <div class="signin-form">
                        <h2 class="form-title" style="font-size: 35px;">Sign up Pengajar</h2>
                        <form id="form" >
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

                                <input type="hidden" id="btnSave" class="form-submit" style="margin-top:unset;" value="Simpan" onclick="save();"/>
                            </div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url(); ?>app-assets/form/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo base_url(); ?>home/pengajar" class="signup-image-link" style="margin-top: 60px;">Saya sudah mempunyai akun</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="two" style="margin-bottom: 100px;">
            <div class="container" style="width: 900px; height:460px;">
            <h2 style="text-align: center; padding-top:25px;">Paket Promo Apalah</h2>
                <div class="signin-content" >
                    <div class="jarak">
                        <div class="social-login">
                            <ul class="socials">
                                <li><a href="#" onclick="pilih('<?php $p1 = 'MTR001'; echo $p1; ?>')"><i class="display-flex-center zmdi zmdi-facebook" style="width: 200px; height:0px; content:none;"><img src="<?php echo base_url(); ?>assets/front-end/images/undraw_laravel_and_vue_59tp.svg" alt="sing up image"></i></a>
                                <h3 style="text-align: center; margin-top:130px;">Pilih Materi <br> <small>Sistem Informasi</small> </h3>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="jarak">
                        <div class="social-login">
                            <ul class="socials">
                                <li><a href="#" onclick="pilih('<?php $p2 = 'MTR002'; echo $p2; ?>')"><i class="display-flex-center zmdi zmdi-facebook" style="width: 200px; height:0px; content:none;"><img src="<?php echo base_url(); ?>assets/front-end/images/undraw_visual_data_b1wx.svg" alt="sing up image"></i></a>
                                <h3 style="text-align: center; margin-top:130px;">Pilih Materi<br> <small>Bisnis</small></h3>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="jarak">
                        <div class="social-login">
                            <ul class="socials">
                                <li><a href="#" onclick="pilih('<?php $p3 = 'MTR003'; echo $p3; ?>')"><i class="display-flex-center zmdi zmdi-facebook" style="width: 200px; height:0px; content:none;"><img src="<?php echo base_url(); ?>assets/front-end/images/undraw_business_plan_5i9d.svg" alt="sing up image"></i></a>
                                <h3 style="text-align: center; margin-top:130px;">Pilih Materi<br> <small>Security</small></h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

    </div>
    
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="hapus">
    <strong>Sukses!</strong> Data berhasil terhapus.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <!-- JS -->
    <!-- <script src="<?php echo base_url(); ?>app-assets/form/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/form/js/main.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/front-end/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front-end/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front-end/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>