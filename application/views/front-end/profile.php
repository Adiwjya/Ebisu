
      <div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>assets/front-end/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="row" style="width: 100%;">
          <div class="col-md-6 ftco-animate text-center text-md-left mb-5">
            <div class="profile-new">
              <div class="container" style="margin: 20px;margin-left: 20px;margin-left: 6px; opacity: 1; margin-top: 30px;" >
                <div class="row">
                  <div class="col-md-5">
                    <img src="<?php echo base_url(); ?>assets/front-end/images/person_1.jpg" style="width:240px;border-radius: 50px;">
                  </div>
                  <div class="col-md-7">
                    <form action="#">
                      <div class="form-group">
                        Nama: <?php echo $nama ; ?>
                      </div>
                      <div class="form-group">
                        Email: <?php echo $email ; ?>
                      </div>
                      <div class="form-group">
                        Alamat: <?php echo $alamat ; ?>
                      </div>
                      <div class="form-group">
                        Telepone: <?php echo $tlp ; ?>
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Edit Profile" class="btn btn-primary py-3 px-5" data-toggle="modal" href="#myModal">
                      </div>
                    </form>
                  </div>  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 ftco-animate text-center text-md-right mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html" style="color:white;">Home <i class="ion-ios-arrow-forward"></i></a></span> <span style="color:white;">Contact</span></p>
            <h1 class="mb-3 bread" style="color:white !important;">Profile</h1>
          </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Profile Anda</h2>
          </div>
          <div class="w-100"></div>
          <!-- <video width="400" controls>
            <source src="https://youtu.be/2iHoeHVmw0Q" type="video/mp4">
            <source src="https://youtu.be/2iHoeHVmw0Q" type="video/ogg">
            Your browser does not support HTML5 video.
          </video> -->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel" style="float: right;">Edit Profile</h4>
      </div>
      <div class="modal-body">
         <form>
           Nama:<br>
           <input type="text" name="nama">
            <br>
           Email:<br>
           <input type="text" name="email">
           <br>
           Pesan Anda:<br>
           <input type="text" name="pesan" style="height: 100px;">
          </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
    </section>