<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php");
$kesiswaan = new Kesiswaan();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Jurusan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Jurusan</a></li>
                            <li class="active">Form Edit Jurusan</li>
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
                            <strong class="card-title">Form </strong>Edit Jurusan
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/manage/jurusan/proses.php?aksi=edit" method="post" class="form-horizontal">
                                  <?php
                                    foreach ($kesiswaan->tampildetailJurusan($_GET['idJurusan']) as $item) {
                                  ?>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">ID</label></div>
                                            <div class="col">
                                            <div class="col-12 col-md-8"><input type="text" id="disabled-input" name="idJurusan" value="<?= $item['idJurusan']; ?>" class="form-control" readonly></div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Kode Jurusan</label></div>
                                            <div class="col">
                                            <div class="col-12 col-md-8"><input type="text" id="disabled-input" name="kodeJurusan" value="<?= $item['kodeJurusan']; ?>" class="form-control" ></div>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Bidang Studi</label></div>
                                            <div class="col">
                                            <div class="col-12 col-md-8"><input type="text" id="disabled-input" name="bs" value="<?= $item['bs']; ?>" class="form-control"></div>
                                            </div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Program Studi</label></div>
                                            <div class="col">
                                            <div class="col-12 col-md-8"><input type="text" id="disabled-input" name="ps" value="<?= $item['ps']; ?>" class="form-control"></div>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Kompetensi Keahlian</label></div>
                                            <div class="col">
                                            <div class="col-12 col-md-8"><input type="text" id="disabled-input" name="kk" value="<?= $item['kk']; ?>" class="form-control"></div>
                                            </div>
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
                      <?php } ?>
                      
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  