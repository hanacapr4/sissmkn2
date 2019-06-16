<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php");
$kesiswaan = new Kesiswaan();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Kuota Jurusan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Kuota Jurusan</a></li>
                            <li class="active">Form Tambah Kuota Jurusan</li>
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
                            <strong class="card-title">Form </strong>Tambah Kuota Jurusan
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/manage/kuota/proses.php?aksi=tambah" method="post" class="form-horizontal">
                                  
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="idKuota" value="<?= $kesiswaan->tampilidkt()?>" class="form-control" readonly></div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                            <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Jurusan</label></div>
                                            <div class="col" >
                                                <div class="form-check">
                                                    <select data-placeholder="Pilih Jurusan" class="standardSelect" tabindex="1" >
                                                      <option value="TKJ">TEKNIK KOMPUTER DAN JARINGAN</option>
                                                      <option value="PA">PERAWATAN SOSIAL</option>
                                                      <option value="UPW">USAHA PERJALANAN WISATA</option>
                                                      <option value="AP">AKOMODASI PERHOTELAN</option>
                                                      <option value="KPR">KEPERAWATAN</option>
                                                      <option value="JB">JASA BOGA</option>
                                                      <option value="STI">SAMSUNG TECH INSTITUTE</option>
                                                  </select>
                                                </div>
                                            </div>
                                          </div>
                                              
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Kuota</label></div>
                                            <div class="col">
                                            <div class="col-12 col-md-8"><input type="text" id="disabled-input" name="kuota" value="" class="form-control"></div>
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
                      
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  