
      <div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>assets/front-end/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="row" style="width: 100%;">
          <div class="col-md-6 ftco-animate text-center text-md-left mb-5">
            <div class="profile-new">
              <div class="container" style="margin: 20px;margin-left: 20px;margin-left: 6px; opacity: 1; margin-top: 30px;" >
                <div class="row">
                  <div class="col-md-7">
                  <iframe width="560" height="250" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="col-md-5">
                    <form action="#">
                      <div class="form-group">
                        Paket Aktif: <?php echo $nama_p ; ?>
                      </div>
                      <div class="form-group">
                        Durasi: <?php echo $durasi ; ?> Bulan
                      </div>
                      <div class="form-group">
                        Deskripsi: <?php echo $deskripsi ; ?>
                      </div>
                      <div class="form-group">
                        Balance: <?php echo $harga ; ?>
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Paket Lain" class="btn btn-primary py-3 px-5" data-toggle="modal" href="#myModal">
                      </div>
                    </form>
                  </div>  
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
    			<div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Kelas</span>
            <h2 class="mb-4">Selamat Belajar !</h2>
          </div>
    		</div>
    		<div class="row">
          <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
            <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            
            <?php 
            $ss = $this->Mglobals->getAllQ("Select * from paket_detail where id_paket = '".$id."' "); 
            $i = 1;
            $data;
            foreach ($ss->result() as $row1) {
                $materi = $this->Mglobals->getAllQR("select nama from materi where id_materi = '".$row1->id_materi."';");
                $d_nama[$i] = $materi->nama;
            $i++;
            }
            ?>

                <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab" aria-controls="v-pills-nextgen" aria-selected="true"><?php echo $d_nama[1]; ?></a>

                <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false"><?php echo $d_nama[2]; ?></a>

                <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab" aria-controls="v-pills-effect" aria-selected="false"><?php echo $d_nama[3]; ?></a>

            
            </div>
          </div>
          <div class="col-md-12 align-items-center ftco-animate">
            
            <div class="tab-content ftco-animate" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              	<div class="d-md-flex">
	              	<div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>

                <div class="d-md-flex">
	              	<div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>

                <div class="d-md-flex">
	              	<div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
                
              </div>

              <div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">

                <div class="d-md-flex">
	              	<div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>

                <div class="d-md-flex">
	              	<div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>

              </div>

              <div class="tab-pane fade" id="v-pills-effect" role="tabpanel" aria-labelledby="v-pills-effect-tab">
      
                <div class="d-md-flex">
	              	<div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>

                <div class="d-md-flex">
	              	<div style="margin:20px;">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/2iHoeHVmw0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>

	  
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>