 <!-- App CSS -->
 <link href="<?php echo base_url(); ?>assets2/css/style.css" rel="stylesheet" type="text/css" />

<!-- Modernizr js -->
<script src="<?php echo base_url(); ?>assets2/js/modernizr.min.js"></script>

<link href="<?php echo base_url(); ?>assets2/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css" />

<!--calendar css-->
<link href="<?php echo base_url(); ?>assets2/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

<!-- Switchery css -->
<link href="<?php echo base_url(); ?>assets2/plugins/switchery/switchery.min.css" rel="stylesheet" />


<section class="ftco-section bg-light">

<div class="row">
<div class="col-md-12 text-center heading-section ftco-animate">
    <h2 class="mb-4">Kalendar Penjadwalan</h2>
</div>
<div class="col-12">
    <div class="container">
        <div class="card-box">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-success btn-block waves-effect m-t-20 waves-light">
                            <i class="fa fa-plus mr-1"></i> Create New
                        </a>
                        <div id="external-events" class="m-t-20">
                            <br>
                            <p class="text-muted">Drag and drop your event or click in the calendar</p>
                            <!-- <div class="external-event bg-primary" data-class="bg-primary">
                                <i class="fa fa-move"></i>New Theme Release
                            </div>
                            <div class="external-event bg-pink" data-class="bg-pink">
                                <i class="fa fa-move"></i>My Event
                            </div>
                            <div class="external-event bg-warning" data-class="bg-warning">
                                <i class="fa fa-move"></i>Meet manager
                            </div>
                            <div class="external-event bg-purple" data-class="bg-purple">
                                <i class="fa fa-move"></i>Create New theme
                            </div> -->
                        </div>

                        <!-- checkbox -->
                        <div class="checkbox checkbox-custom mt-4">
                            <input id="drop-remove" type="checkbox">
                            <label for="drop-remove">
                                Remove after drop
                            </label>
                        </div>

                    </div>
                </div>
            </div> <!-- end col-->
            <div class="col-md-9">
                <div id="calendar"></div>
            </div> <!-- end col -->
        </div>  <!-- end row -->
    </div>
    </div>
    
</div>
</div>
</section>

<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
    			<div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Kelas</span>
            <h2 class="mb-4">Manajemen Kelas</h2>
          </div>
    		</div>
    		<div class="row">
          <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
            <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            

                <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab" aria-controls="v-pills-nextgen" aria-selected="true">Kelas Q1</a>

                <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false">Kelas Q1</a>

                <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab" aria-controls="v-pills-effect" aria-selected="false">Kelas Q1</a>

            
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

                <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Upload Video Pembelajaran</h4>

                            <input type="file" class="dropify" data-height="300" />
                        </div>
                    </div><!-- end col -->
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

                <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Upload Video Pembelajaran</h4>

                            <input type="file" class="dropify" data-height="300" />
                        </div>
                    </div><!-- end col -->
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

                <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Upload Video Pembelajaran</h4>

                            <input type="file" class="dropify" data-height="300" />
                        </div>
                    </div><!-- end col -->
                </div>
                </div>

	  
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>




<!-- BEGIN MODAL -->
<div class="modal fade none-border" id="event-modal">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add New Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body p-20"></div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
        </div>
    </div>
</div>
</div>

<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add a category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body p-20">
                <form role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Category Name</label>
                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Choose Category Color</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="pink">Pink</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                                <option value="inverse">Inverse</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- jQuery  -->
s<script src="<?php echo base_url(); ?>assets2/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets2/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets2/js/waves.js"></script>
<script src="<?php echo base_url(); ?>assets2/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets2/plugins/switchery/switchery.min.js"></script>

<!-- Jquery-Ui -->
<script src="<?php echo base_url(); ?>assets2/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- BEGIN PAGE SCRIPTS -->
<script src="<?php echo base_url(); ?>assets2/plugins/moment/moment.js"></script>
<script src='<?php echo base_url(); ?>assets2/plugins/fullcalendar/js/fullcalendar.min.js'></script>
<script src="<?php echo base_url(); ?>assets2/pages/jquery.fullcalendar.js"></script>

<!-- App js -->
<script src="<?php echo base_url(); ?>assets2/js/jquery.core.js"></script>
<script src="<?php echo base_url(); ?>assets2/js/jquery.app.js"></script>
<script src="<?php echo base_url(); ?>assets2/plugins/fileuploads/js/dropify.min.js"></script>

<script>
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (1M max).'
                }
            });
        </script>