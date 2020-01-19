<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ebisu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front-end/css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light"  id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html" ><img style=" width:auto; height: 60px; " src="<?php echo base_url(); ?>assets/front-end/images/ebisu.png"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?php echo base_url(); ?>home" class="nav-link">Home</a></li>

            <?php
              if ($akses == "Member") {
            ?>
                <li class="nav-item"><a href="<?php echo base_url(); ?>home/kelas" class="nav-link">Kelas</a></li>
                <li class="nav-item"><a href="<?php echo base_url(); ?>home/paket" class="nav-link">Paket</a></li>
            <?php
              }else {
            ?>
                <li class="nav-item"><a href="<?php echo base_url(); ?>home/kelas_p" class="nav-link">Kelas</a></li>
            <?php
              }
            ?>
            

            
              <li class="nav-item"><a href="<?php echo base_url(); ?>home/profile" class="nav-link">Profile</a></li>
              <li class="nav-item cta"><a href="#" class="nav-link"><span>Haloo! <?php echo $nama; ?></span></a></li>
              <li class="nav-item cta"><a href="<?php echo base_url(); ?>home/logout" class="nav-link" style="background:red;border: unset;padding-left: 10px;padding-right: 10px;margin-left: 15px;"><span>Logout</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->