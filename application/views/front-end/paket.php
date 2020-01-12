<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>assets/front-end/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Paket</span></p>
            <h1 class="mb-3 bread">Paket</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Paket Promo kami</h2>
          </div>
        </div>
    		<div class="row d-flex">
			
			<?php
				foreach ($paket->result() as $row)
				{
			?>		

	        <div class="col-lg-3 col-md-6 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
		            <h2 class="heading"><?php echo $row->nama; ?></h2>
		            <span class="price"><sup></sup> <span class="number"><?php echo $row->harga; ?><small class="per">/<?php echo $row->durasi; ?>Bln</small></span>
		            <span class="excerpt d-block"><?php echo $row->deskripsi;?></span>
		            <h3 class="heading-2 mb-3">Materi yang tersedia</h3>
		            
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
		            <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Pilih Paket</a>
	            </div>
	          </div>
			</div>

			<?php
				}
			?>
			
	      </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Daftar Paket</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="table-responsive">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr>
						        <th>TLD</th>
						        <th>Duration</th>
						        <th>Registration</th>
						        <th>Renewal</th>
						        <th>Transfer</th>
						        <th>Register</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td class="color">.com</td>
						        <td>1 Year</td>
						        <td>$70.00</td>
						        <td>$5.00</td>
						        <td>$5.00</td>
						        <td><a href="#" class="btn btn-primary">Sign Up</a></td>
						      </tr>
						      <tr>
						        <td class="color">.net</td>
						        <td>1 Year</td>
						        <td>$75.00</td>
						        <td>$5.00</td>
						        <td>$5.00</td>
						        <td><a href="#" class="btn btn-primary">Sign Up</a></td>
						      </tr>
						      <tr>
						        <td class="color">.org</td>
						        <td>1 Year</td>
						        <td>$65.00</td>
						        <td>$5.00</td>
						        <td>$5.00</td>
						        <td><a href="#" class="btn btn-primary">Sign Up</a></td>
						      </tr>
						      <tr>
						        <td class="color">.biz</td>
						        <td>1 Year</td>
						        <td>$60.00</td>
						        <td>$5.00</td>
						        <td>$5.00</td>
						        <td><a href="#" class="btn btn-primary">Sign Up</a></td>
						      </tr>
						      <tr>
						        <td class="color">.info</td>
						        <td>1 Year</td>
						        <td>$50.00</td>
						        <td>$5.00</td>
						        <td>$5.00</td>
						        <td><a href="#" class="btn btn-primary">Sign Up</a></td>
						      </tr>
						      <tr>
						        <td class="color">.me</td>
						        <td>1 Year</td>
						        <td>$45.00</td>
						        <td>$5.00</td>
						        <td>$5.00</td>
						        <td><a href="#" class="btn btn-primary">Sign Up</a></td>
						      </tr>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Your Question</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div id="accordion">
    					<div class="row">
    						<div class="col-md-6">
    							<div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone">What is your domain name? <span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
						        </div>
						        <div id="menuone" class="collapse show">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo">How long is my domain name valid? <span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
						        </div>
						        <div id="menutwo" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3">Can I sell my domain name? <span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
						        </div>
						        <div id="menu3" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>
    						</div>

    						<div class="col-md-6">
    							<div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu4" aria-expanded="false" aria-controls="menu4">Can I cancel a domain? <span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
						        </div>
						        <div id="menu4" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu5" aria-expanded="false" aria-controls="menu5">How do I transfer a domain name? <span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
						        </div>
						        <div id="menu5" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu6" aria-expanded="false" aria-controls="menu6">How do I setup URL forwarding? <span class="collapsed"><i class="ion-ios-arrow-up"></i></span><span class="expanded"><i class="ion-ios-arrow-down"></i></span></a>
						        </div>
						        <div id="menu6" class="collapse">
						          <div class="card-body">
										<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>
    						</div>
    					</div>
				    </div>
    			</div>
    		</div>
    	</div>
    </section>