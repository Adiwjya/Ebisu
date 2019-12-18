<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ebisu | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>app-assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?php echo base_url(); ?>assets/index2.html"><b>Login</b>Page</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masuk sebagai pelanggan</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="<?php echo base_url(); ?>home/pengajar" class="btn btn-block btn-primary" style="background:#6927ff; ">
          Sign in sebagai pengajar
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">Lupa Password</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo base_url(); ?>home/daftar" class="text-center">Belum punya akun? Daftar disini</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>app-assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>app-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>app-assets/dist/js/adminlte.min.js"></script>

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
          url: "<?php echo base_url(); ?>login/ajax_login",
          type: "POST",
          data: $('#form').serialize(),
          dataType: "JSON",
          success: function(data) {
            $('#btnLogin').text('LOGIN'); //change button text
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

</body>

</html>