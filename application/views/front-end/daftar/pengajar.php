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

    }

    function q1(jawaban) {
        document.getElementById('p1').value =  jawaban;
    }

    function q2(jawaban) {
        document.getElementById('p2').value =  jawaban;
    }

    function q3(jawaban) {
        document.getElementById('p3').value =  jawaban;
    }

    function q4(jawaban) {
        document.getElementById('p4').value =  jawaban;
    }

    function q5(jawaban) {
        document.getElementById('p5').value =  jawaban;
    }

    function q6(jawaban) {
        document.getElementById('p6').value =  jawaban;
    }

    function q7(jawaban) {
        document.getElementById('p7').value =  jawaban;
    }

    function q8(jawaban) {
        document.getElementById('p8').value =  jawaban;
    }
    
    function q9(jawaban) {
        document.getElementById('p9').value =  jawaban;
    }

    

    function q10(jawaban10) {
        var a1 = document.getElementById('p1').value;
        var a2 = document.getElementById('p2').value;
        var a3 = document.getElementById('p3').value;
        var a4 = document.getElementById('p4').value;
        var a5 = document.getElementById('p5').value;
        var a6 = document.getElementById('p6').value;
        var a7 = document.getElementById('p7').value;
        var a8 = document.getElementById('p8').value;
        var a9 = document.getElementById('p9').value;
        var a10 = jawaban10;
        
        var h1 = 0;
        var h2 = 0;
        var h3 = 0;
        var h4 = 0;
        var h5 = 0;
        var h6 = 0;
        var h7 = 0;
        var h8 = 0;
        var h9 = 0;
        var h10 = 0;

        // alert(h1);

        if(a1=="1"){
            h1=1;
        }
        if(a2=="1"){
            h2=1;
        }
        if(a3=="1"){
            h3=1;
        }
        if(a4=="1"){
            h4=1;
        }
        if(a5=="1"){
            h5=1;
        }
        if(a6=="1"){
            h6=1;
        }
        if(a7=="1"){
            h7=1;
        }
        if(a8=="1"){
            h8=1;
        }
        if(a9=="1"){
            h9=1;
        }
        if(a10=="1"){
            h10=1;
        }

        var hasil = h1+h2+h3+h4+h5+h6+h7+h8+h9+h10;

        // alert(hasil);
        
        if(hasil >= 6){
            document.getElementById('hasil').innerHTML = hasil+"/10";
            document.getElementById('desc').innerHTML = "Selamat Anda Lulus Test ! <br> Anda dapat mendaftarkan akun sekarang";
            document.getElementById('btnSave').type = "button";
        }else{
            document.getElementById('hasil').innerHTML = hasil+"/10";
            document.getElementById('desc').innerHTML = "Maaf Anda Belum Lulus Test ! <br> Anda belum dapat mendaftarkan akun sekarang";
            document.getElementById('kembali').type = "button";
        }
        

    }
    
</script>

</head>
<body style="overflow: hidden;" >

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
                            </div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url(); ?>app-assets/form/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo base_url(); ?>home/pengajar" class="signup-image-link" style="margin-top: 60px;">Saya sudah mempunyai akun</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="two" style="margin-bottom: 800px; padding-top: 70px;">
            <div class="container" style="width: 900px; height:460px;">
            <h2 style="text-align: center; padding-top:25px;">Materi</h2>
                <div class="signin-content" >

                <?php
                    foreach ($materi->result() as $row)
                    {
                ?>

                    <div class="jarak">
                        <div class="social-login">
                            <ul class="socials">
                                <li><a href="#test" onclick="pilih('<?php echo $row->id_materi; ?>')"><i class="display-flex-center zmdi zmdi-facebook" style="width: 200px; height:0px; content:none;"><img src="<?php echo base_url(); ?>assets/front-end/images/undraw_laravel_and_vue_59tp.svg" alt="sing up image"></i></a>
                                <h3 style="text-align: center; margin-top:130px;"><?php echo $row->nama; ?> <br> <small>Sistem Informasi</small> </h3>
                            </li>
                            </ul>
                        </div>
                    </div>

                <?php
                    }
                ?>
                    
                </div>
            </div>
        </section>

        <section class="sign-in" id="test" style="margin-bottom:800px; padding-top: 200px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">

                    <div class="signin-form">
                        <h2 class="form-title" style="font-size: 35px;">Sesi Test Kelayakan</h2>
                            <div class="form-group">
                            <a href="#question_1"><input type="button" name="signup" id="signup" class="form-submit" style="margin-top:unset;" value="Ikuti Test"/></a>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="question_1" style="margin-bottom:800px; padding-top: 70px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-form" style="width: 100%;">
                        <h2 class="form-title" style="font-size: 35px;">Pertanyaan 1</h2>
                            <div class="form-group">
                            <h3 class="form-title" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</h3>
                                <input type="hidden" name="p1" id="p1" placeholder="Answer"/>
                                <a href="#question_2" onclick="q1('1')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_2" onclick="q1('2')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_2" onclick="q1('3')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_2" onclick="q1('4')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="question_2" style="margin-bottom:800px; padding-top: 70px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-form" style="width: 100%;">
                        <h2 class="form-title" style="font-size: 35px;">Pertanyaan 2</h2>
                            <div class="form-group">
                            <h3 class="form-title" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</h3>
                                <input type="hidden" name="p2" id="p2" placeholder="Answer"/>
                                <a href="#question_3" onclick="q2('1')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_3" onclick="q2('2')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_3" onclick="q2('3')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_3" onclick="q2('4')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="question_3" style="margin-bottom:800px; padding-top: 70px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-form" style="width: 100%;">
                        <h2 class="form-title" style="font-size: 35px;">Pertanyaan 3</h2>
                            <div class="form-group">
                            <h3 class="form-title" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</h3>
                                <input type="hidden" name="p3" id="p3" placeholder="Answer"/>
                                <a href="#question_4" onclick="q3('1')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_4" onclick="q3('2')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_4" onclick="q3('3')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_4" onclick="q3('4')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="question_4" style="margin-bottom:800px; padding-top: 70px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-form" style="width: 100%;">
                        <h2 class="form-title" style="font-size: 35px;">Pertanyaan 4</h2>
                            <div class="form-group">
                            <h3 class="form-title" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</h3>
                                <input type="hidden" name="p4" id="p4" placeholder="Answer"/>
                                <a href="#question_5" onclick="q4('1')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_5" onclick="q4('2')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_5" onclick="q4('3')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_5" onclick="q4('4')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="sign-in" id="question_5" style="margin-bottom:800px; padding-top: 70px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-form" style="width: 100%;">
                        <h2 class="form-title" style="font-size: 35px;">Pertanyaan 5</h2>
                            <div class="form-group">
                            <h3 class="form-title" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</h3>
                                <input type="hidden" name="p5" id="p5" placeholder="Answer"/>
                                <a href="#question_6" onclick="q5('1')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_6" onclick="q5('2')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_6" onclick="q5('3')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_6" onclick="q5('4')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="sign-in" id="question_6" style="margin-bottom:800px; padding-top: 70px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-form" style="width: 100%;">
                        <h2 class="form-title" style="font-size: 35px;">Pertanyaan 6</h2>
                            <div class="form-group">
                            <h3 class="form-title" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</h3>
                                <input type="hidden" name="p6" id="p6" placeholder="Answer"/>
                                <a href="#question_7" onclick="q6('1')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_7" onclick="q6('2')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_7" onclick="q6('3')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_7" onclick="q6('4')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="question_7" style="margin-bottom:800px; padding-top: 70px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-form" style="width: 100%;">
                        <h2 class="form-title" style="font-size: 35px;">Pertanyaan 7</h2>
                            <div class="form-group">
                            <h3 class="form-title" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</h3>
                                <input type="hidden" name="p7" id="p7" placeholder="Answer"/>
                                <a href="#question_8" onclick="q7('1')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_8" onclick="q7('2')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_8" onclick="q7('3')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_8" onclick="q7('4')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="question_8" style="margin-bottom:800px; padding-top: 70px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-form" style="width: 100%;">
                        <h2 class="form-title" style="font-size: 35px;">Pertanyaan 8</h2>
                            <div class="form-group">
                            <h3 class="form-title" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</h3>
                                <input type="hidden" name="p8" id="p8" placeholder="Answer"/>
                                <a href="#question_9" onclick="q8('1')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_9" onclick="q8('2')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_9" onclick="q8('3')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_9" onclick="q8('4')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="question_9" style="margin-bottom:800px; padding-top: 70px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-form" style="width: 100%;">
                        <h2 class="form-title" style="font-size: 35px;">Pertanyaan 9</h2>
                            <div class="form-group">
                            <h3 class="form-title" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</h3>
                                <input type="hidden" name="p9" id="p9" placeholder="Answer"/>
                                <a href="#question_10" onclick="q9('1')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_10" onclick="q9('2')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_10" onclick="q9('3')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#question_10" onclick="q9('4')"><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="question_10" style="margin-bottom:800px; padding-top: 70px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-form" style="width: 100%;">
                        <h2 class="form-title" style="font-size: 35px;">Pertanyaan 10</h2>
                            <div class="form-group">
                            <h3 class="form-title" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</h3>
                                <input type="hidden" name="p10" id="p10" placeholder="Answer"/>
                                <a href="#result" onclick="q10('1')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#result" onclick="q10('2')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#result" onclick="q10('3')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                                <a href="#result" onclick="q10('4')" ><input type="button" name="signup" id="signup" class="form-submit" style="padding: revert;" value="Lorem ipsum dolor sit amet, consectetur adipiscing"/></a><br>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sign-in" id="result" style="margin-bottom:800px; padding-top: 70px;">
            <div class="container">
                <div class="signin-content" style="padding-top: 42px; padding-bottom: 42px;">
                    <div class="signin-form" style="width: 100%;">
                        <h2 class="form-title" style="font-size: 35px;">Result</h2>
                            <div class="form-group">
                                <h3 class="form-title" id="hasil" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;"></h3>
                                <h3 class="form-title" id="desc" style="font-size: 20px;margin-top: 5px;margin-bottom: 15px;"></h3>
                                <input type="hidden" id="btnSave" class="form-submit" style="margin-top:unset;" value="Buat Akun" onclick="save();"/>
                                <a href="#test"><input type="hidden" id="kembali" class="form-submit" style="margin-top:unset;" value="Kembali" /></a>
                            </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <!-- <script src="<?php echo base_url(); ?>app-assets/form/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/form/js/main.js"></script> -->
    <script src="<?php echo base_url();  ?>assets/front-end/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front-end/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front-end/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>