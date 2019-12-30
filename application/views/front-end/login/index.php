<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ebisu | Log in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/form/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/form/css/style.css">
</head>
<body style=" overflow: hidden;">

    <div class="main" style="padding: 20px 0;">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo base_url(); ?>app-assets/form/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo base_url(); ?>home/daftar_member" class="signup-image-link" style="margin-top: 59px;">Belum Punya Akun? Daftar Sekarang</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in Member</h2>
                        <form id="form" method="post">
                            <div class="form-group">
                                <label ><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" id="email" name="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label ><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" id="password" name="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="button" onclick="login();" id="btnLogin" class="form-submit" value="Log in" style="background:#6927ff;"/>
                            </div>
                        </form>

                        <div class="social-login">
                            <span class="social-label">Atau masuk sebagai</span>
                            <ul class="socials">
                                <li><a href="<?php echo base_url(); ?>home/pengajar"><i class="display-flex-center zmdi zmdi-facebook" style="width: 110px; content:none;">Pengajar</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url(); ?>app-assets/form/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/form/js/main.js"></script>

    <script type="text/javascript">
    function login() {
      // ajax adding data to database
      var email = document.getElementById('email').value;
      var pass = document.getElementById('password').value;
      if (email === '') {
        alert("Username tidak boleh kosong");
      } else if (pass === '') {
        alert("Password tidak boleh kosong");
      } else {
        $('#btnLogin').text('Prosess...'); //change button text
        $('#btnLogin').attr('disabled', true); //set button disable

        $.ajax({
          url: "<?php echo base_url(); ?>login/ajax_login_pelanggan",
          type: "POST",
          data: $('#form').serialize(),
          dataType: "JSON",
          success: function(data) {
            $('#btnLogin').text('Masuk'); //change button text
            $('#btnLogin').attr('disabled', false); //set button disable

            if (data.status === 'ok') {
              window.location.href = "<?php echo base_url(); ?>eb_admin";
            } else {
              alert(data.status);
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert("Username atau password anda salah " + errorThrown);

            $('#btnLogin').text('LOGIN'); //change button text
            $('#btnLogin').attr('disabled', false); //set button disable
          }
        });
      }
    }
  </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>