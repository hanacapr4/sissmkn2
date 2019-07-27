<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Jurusan.php"); ?>
        <!-- Header-->
<?php
$object = new Jurusan();
$show = $object->tampildata();
?>
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
                          
                            <form action="proses_kelas.php?aksi=insert" method="post">
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">ID Kelas</label></div>
                            <div class="col col-md-2"><input type="text" id="id_kelas" name="id_kelas" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Nama Kelas</label></div>
                            <div class="col col-md-6"><input type="text" id="kode_kelas" name="kode_kelas" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Kode Kelas</label></div>
                            <div class="col col-md-6"><input type="text" id="nama_kelas" name="nama_kelas" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Tahun Ajaran</label></div>
                            <div class="col col-md-6"><input type="text" id="thnAjaran" name="thnAjaran" placeholder="" class="form-control"></div>
                         </div>
                         <div class="row form-group">
                                      
                                          <div class="col col-md-1"><label for="selectSm" class=" form-control-label">Jurusan</label></div>
                                              
                                             <div class="col-8 col-md-6">
                                           <select name="kodeJurusan" id="kk" class="form-control-sm form-control">
                                                <?php foreach ($show as $data) { ?>
                                                  <option value="<?php echo $data['kodeJurusan']; ?>">
                                                  <?php echo $data['kk']; ?></option>
                                                  <?php } ?>
                                                </SELECT>
                                              </div>
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
