<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>assets/front-end/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread">Contact Us</h1>
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
          <div class="col-md-12">
            <img src="<?php echo base_url(); ?>assets/front-end/images/person_1.jpg" alt="wibu" style="width:100px;height:100px">

          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="#">
              <div class="form-group">
                Nama: Rudy
              </div>
              <div class="form-group">
                Email: Rudy@gmail.com
              </div>
              <div class="form-group">
                Status: Pelanggan
              </div>
              <div class="form-group">
                Pesan Anda: Tetap Semangat!
              </div>
              <div class="form-group">
                <input type="submit" value="Edit Profile" class="btn btn-primary py-3 px-5" data-toggle="modal" href="#myModal">
              </div>
            </form>
          
          </div>


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