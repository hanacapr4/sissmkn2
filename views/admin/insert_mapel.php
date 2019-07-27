 <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Mapel.php"); ?>
<?php
$object = new Mapel();
$show = $object->tampildata();
?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Mata Pelajaran</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">List</a></li>
                            <li class="active">Input Mata Pelajaran</li>
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
                            <strong class="ccrd-title">Form : </strong>Mata Pelajaran
                        </div>
                        <div class="card-body card-block">

                          <!-- Credit Card -->
                          <form action="proses.php?aksi=insert" method="post">
                           <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Kode Pelajaran</label></div>
                           <div class="col col-md-2"><input type="text" id="kode_pel" name="kode_pel" placeholder="" class="form-control"></div>
                          </div>


                          <!-- <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">ID Pelajaran</label></div>
                             <div class="col col-md-6"><input type="text" id="idpel" name="idpel" placeholder="" class="form-control"></div>
                           </div>-->
                          

                             <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Mata Pelajaran</label></div>
                             <div class="col col-md-6"><input type="text" id="pelajaran" name="pelajaran" placeholder="" class="form-control"></div>
                           </div>

                                <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Pelajaran</label></div>
                              <div class="col col-md-6"><input type="text" id="pel" name="pel" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Program</label></div>
                              <div class="col col-md-6"><input type="text" id="program" name="program" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Tingkat</label></div>
                              <div class="col col-md-6"><input type="text" id="tingkat" name="tingkat" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Jam Pelajaran</label></div>
                              <div class="col col-md-2"><input type="text" id="jam_pel" name="jam_pel" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Semester</label></div>
                              <div class="col col-md-2"><input type="text" id="semester" name="semester" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">X1</label></div>
                              <div class="col col-md-4"><input type="text" id="X1" name="X1" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">X2</label></div>
                              <div class="col col-md-4"><input type="text" id="X2" name="X2" placeholder="" class="form-control"></div>
                            </div>  
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">XI1</label></div>
                              <div class="col col-md-4"><input type="text" id="XI1" name="XI1" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">XI2</label></div>
                              <div class="col col-md-4"><input type="text" id="XI2" name="XI2" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">XII1</label></div>
                              <div class="col col-md-4"><input type="text" id="XII1" name="XII1" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">XII2</label></div>
                              <div class="col col-md-4"><input type="text" id="XII2" name="XII2" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Pengajar</label></div>
                              <div class="col col-md-6"><input type="text" id="pengajar" name="pengajar" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Jenis</label></div>
                              <div class="col col-md-2"><input type="text" id="semester" name="semester" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Tahun Ajaran</label></div>
                              <div class="col col-md-2"><input type="text" id="th_ajar" name="th_ajar" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">ID Jenis Pelajaran</label></div>
                              <div class="col col-md-6"><input type="text" id="id_pel_jenis" name="id_pel_jenis" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">ID Sub Pelajaran</label></div>
                              <div class="col col-md-6"><input type="text" id="id_pel_sub" name="id_pel_sub" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">ID Pel Pelajaran </label></div>
                              <div class="col col-md-6"><input type="text" id="id_pel_pel" name="id_pel_pel" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Produktif</label></div>
                              <div class="col col-md-6"><input type="text" id="produktif" name="produktif" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Tingkat 1</label></div>
                              <div class="col col-md-6"><input type="text" id="Tingkat1" name="Tingkat1" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Tingkat 2</label></div>
                              <div class="col col-md-6"><input type="text" id="Tingkat2" name="Tingkat2" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Tingkat 3</label></div>
                              <div class="col col-md-6"><input type="text" id="Tingkat3" name="Tingkat3" placeholder="" class="form-control"></div>
                            </div>


                          </div>
                          
                    <div class="card-footer">
                        <a href="mapel.php"><button type="button" class="btn btn-outline-dark btn-sm"><i class="fa ti-back"></i>Kembali</button></a>

                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Next
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                    </div>
                  </form>
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
