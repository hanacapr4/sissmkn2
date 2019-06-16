<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Ruangan.php"); ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Ruangan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">List</a></li>
                            <li class="active">Input Ruangan</li>
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
                            <strong class="ccrd-title">Data Ruangan</strong>
                        </div>
                        <div class="card-body card-block">

                          <!-- Credit Card -->
                          <?php $object = new Ruangan();
                          $id = $_GET["id"];?>
                          
                                      
                                      <div class="row form-group">
                                      <form action="proses_Ruangan.php?aksi=update" method="post">
                                       <?php foreach($object->getdata($id) as $data) {
                                ?>

                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Ruangan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="id" name="id" placeholder="" class="form-control"value="<?= $data['id']; ?>"></div>
                                          </div>

                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Ruangan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="kode" name="kode" placeholder="" class="form-control"value="<?= $data['kode']; ?>"></div>
                                              </div>
                                          </div>
                                      <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Ruangan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="" class="form-control"value="<?= $data['nama']; ?>"></div>
                                              </div>
                                              </div>
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Gedung Kelas</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="gedung" name="gedung" placeholder="" class="form-control"value="<?= $data['gedung']; ?>"></div>
                                              </div>
                                          </div>
                                         <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="jenis" name="jenis" placeholder="" class="form-control"value="<?= $data['jenis']; ?>"></div>
                                              </div>
                                          </div>
                                     
                                           <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Penanggung Jawab</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="penanggung_jawab" name="penanggung_jawab" placeholder="" class="form-control"value="<?= $data['penanggung_jawab']; ?>"></div>
                                              </div>
                                              </div>
                                        
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Profil</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="profil" name="profil" placeholder="" class="form-control"value="<?= $data['profil']; ?>"></div>
                                              </div>
                                              </div>
                                          
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Ajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="thajar" name="thajar" placeholder="" class="form-control"value="<?= $data['thajar']; ?>"></div>
                                              </div>
                                              </div>
                                      
                                          <?php } ?>



                                      </div>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
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
