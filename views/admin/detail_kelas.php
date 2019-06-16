  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kelas.php"); ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data kelas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">List</a></li>
                            <li class="active">Input Kelas</li>
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
                            <strong class="ccrd-title">Data Kelas</strong>
                        </div>
                        <div class="card-body card-block">

                          <!-- Credit Card -->
                          <?php $object = new Kelas();
                          $id = $_GET["id_kelas"];?>
                          
                                      
                                      <div class="row form-group">
                                     <form action="proses_kelas.php?aksi=update" method="post">
                                       <?php foreach($object->getdata($id) as $data) {
                                ?>
                                          <div class="row form-group">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id kelas</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="id_kelas" name="id_kelas" placeholder="" class="form-control"value="<?= $data['id_kelas']; ?>" readonly></div>
                                          </div>
                                        </div>
                                        <div class="row form-group">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelas</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="kelas" name="kelas" placeholder="" class="form-control"value="<?= $data['kelas']; ?>" readonly></div>
                                              </div>
                                          </div>
                                        </div>

                                          <div class="row form-group">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIP</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nip" name="nip" placeholder="" class="form-control"value="<?= $data['nip']; ?>" readonly></div>
                                              </div>
                                              </div>
                                            </div>

                                           <div class="row form-group"> 
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tingkat</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="tingkat" name="tingkat" placeholder="" class="form-control"value="<?= $data['tingkat']; ?>" readonly></div>
                                              </div>
                                          </div>
                                        </div>

                                         <div class="row form-group">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Program</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="program" name="program" placeholder="" class="form-control"value="<?= $data['program']; ?>" readonly></div>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="row form-group">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ruangan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ruang" name="ruang" placeholder="" class="form-control"value="<?= $data['ruang']; ?>" readonly></div>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="row form-group">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ketua Kelas</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ketua" name="ketua" placeholder="" class="form-control"value="<?= $data['ketua']; ?>" readonly></div>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="row form-group">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Masuk</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="masuk" name="masuk" placeholder="" class="form-control"value="<?= $data['masuk']; ?>" readonly></div>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="row form-group">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Guru BK</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="guru_bk" name="guru_bk" placeholder="" class="form-control"value="<?= $data['guru_bk']; ?>" readonly></div>
                                              </div>
                                          </div>
                                        </div>

                                        <div class="row form-group">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Ajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="th_ajar" name="th_ajar" placeholder="" class="form-control"value="<?= $data['th_ajar']; ?>" readonly></div>
                                              </div>
                                          </div>

                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Profil</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="profil" name="profil" placeholder="" class="form-control"value="<?= $data['profil']; ?>" readonly></div>
                                              </div>
                                          </div>
                                        
                                          <?php } ?>



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
