<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_pendaftaran_prakerin.php"); ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';

$tbl_pendaftaran_prakerin = new tbl_pendaftaran_prakerin();
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Perusahaan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Perusahaan</a></li>
                            <li class="active">Perusahaan</li>
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
                            <strong class="card-title">Form</strong> Perusahaan
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                 <form action="proses_pendaftaran_prakerin.php?aksi=insert" method="post">
                                      <div class="row">
                                       <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pendaftaran Prakerin</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="id_pendprakerin"   value="<?= $tbl_pendaftaran_prakerin->tampilidpdf(); ?>" class="form-control" readonly>     </div>

                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Perusahaan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="id_pers" name="id_pers"   class="form-control"></div>
                                          </div>
                                           
                                     
                                          <div class="col-6">
                                              
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIS</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nis" name="nis" class="form-control"></div>
                                              
                                          </div>
                                         
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Pendaftaran</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="tgl_daftar" name="tgl_daftar" class="form-control"></div>
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


<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>   