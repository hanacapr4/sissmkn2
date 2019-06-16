<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Login.php");
// print_r($_SESSION['alamat']);
// die();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Siswa</li>
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
                            <strong class="card-title">Form </strong>Alumni
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/dashboard/siswa/proses.php?aksi=tambahalumni" method="post" class="form-horizontal" enctype="multipart/form-data">
                                      <input type="hidden" name="nis" value="<?= $_SESSION['nis']; ?>" class="form-control">
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Melanjutkan ke </label></div>
                                              <div class="col-12 col-md-9">
                                                  <select name="kelanjutan" data-placeholder="" class="standardSelect" tabindex="1" >
                                                      <option value="Kuliah">Kuliah</option>
                                                      <option value="Kerja">Kerja</option>
                                                      <option value="Usaha">Usaha</option>
                                                      <option value="Lainnya">Lainnya</option>
                                                  </select>
                                              </div>
                                            </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Instansi</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="namaInstansi" value="<?= $_SESSION['namaInstansi']; ?>" class="form-control"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan</label></div>
                                            <div class="col-12 col-md-9"><input type="number" id="disabled-input" name="penghasilan" value="<?= $_SESSION['penghasilan']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Mulai</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglMulai" value="<?= $_SESSION['tglMulai']; ?>" class="form-control"></div>
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