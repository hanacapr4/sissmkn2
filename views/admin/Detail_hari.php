<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Hari.php"); ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Hari</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">List</a></li>
                            <li class="active">Input Data Hari</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="ccrd-title">insert Hari</strong>
                        </div>
                        <div class="card-body card-block">

                          <!-- Credit Card -->
                           <?php $object = new Hari();
                          $id = $_GET["id_Hari"];?>
                          
                          
                                      
                                      <div class="row form-group">
                                      <form action="proses_hari.php?aksi=update" method="post">
                                       <?php foreach($object->getdata($id) as $data) {
                                ?>

                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID_hari</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="id_Hari" name="id_Hari" placeholder="" class="form-control" value="<?= $data['id_Hari']; ?>" readonly></div>
                                          </div>

                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">kode Hari</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="kode_hari" name="kode_hari" placeholder="" class="form-control" value="<?= $data['kode_hari']; ?>" readonly></div>
                                              </div>
                                          </div>
                                      <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">nama Hari</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="Hari" name="Hari" placeholder="" class="form-control" value="<?= $data['Hari']; ?>" readonly></div>
                                              </div>
                                              </div> 
                                               <?php } ?>
                                          </div>



                                      </div>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div></form>
                     <!-- .card -->

                  </div><!--/.col-->

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


   <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>


</body>
</html>
