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
                            <strong class="card-title">Edit Profil</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/dashboard/siswa/proses.php?aksi=edit" method="post" class="form-horizontal" enctype="multipart/form-data">
                                      <input type="hidden" name="nis" value="<?= $_SESSION['nis']; ?>" class="form-control">
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Foto</label></div>
                                              
                                              <div class="col-12 col-md-9">
                                              <?php
                                              echo '<img style="width:50%" src="data:image/jpeg;base64,'.base64_encode( $_SESSION['foto'] ).'"/>';
                                              ?>
                                              <input type="file" id="text-input" name="foto" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Panggilan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="nama" value="<?= $_SESSION['namaPanggilan']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6" style="margin-top: 15px;">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Password</label></div>
                                            <div class="col-12 col-md-9"><input type="password" name="password" value="<?= $_SESSION['pass']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6" style="margin-top: 15px;">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" value="<?= $_SESSION['alamat']; ?>" class="form-control"></div>
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