<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_perusahaan.php");
$tbl_perusahaan= new t_prakerin();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail Perusahaan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">
                            <strong class="card-title">Form </strong>Detail Perusahaan</a></li>
                            <li class="active">Form Detail Perusahaan</li>
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
                            <strong class="card-title">Form </strong>Detail Perusahaan
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/admin_staff/proses_perusahaan.php?aksi=edit" method="post" class="form-horizontal">
                                  <?php
                                    foreach ($tbl_perusahaan->getDetailtbl_perusahaan($_GET['id_tmp_prakerin']) as $item) {
                                  ?>
                                     

                                      <form action="<?php echo $siteurl; ?>/views/admin_staff/proses_perusahaan.php?aksi=insert" method="post" class="form-horizontal">
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id Perusahaan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['id_tmp_prakerin']; ?>" class="form-control"readonly></div>
                                          </div>
                                           <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['nama_prakerin']; ?>" class="form-control"readonly></div>
                                          </div>
                                           
                                      </div>
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat_prakerin" value="<?= $item['alamat_prakerin']; ?>" class="form-control"readonly></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telpon Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="telp_prakerin" value="<?= $item['telp_prakerin']; ?>" class="form-control"readonly></div>
                                              </div>
                                          
                                      </div>
                                      
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kota Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kota_prakerin" value="<?= $item['kota_prakerin']; ?>" class="form-control"readonly></div>
                                              </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Program</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="program" value="<?= $item['program']; ?>" class="form-control"readonly></div>
                                              </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pembimbing</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="pembimbing" value="<?= $item['pembimbing']; ?>" class="form-control"readonly></div>
                                              </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Direktur Perusahaan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="direktur" value="<?= $item['direktur']; ?>" class="form-control"readonly></div>
                                              </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email Perusahaan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" value="<?= $item['email']; ?>" class="form-control"readonly></div>
                                              </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Website</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="website" value="<?= $item['website']; ?>" class="form-control"readonly></div>
                                              </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Ajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="th_ajar" value="<?= $item['th_ajar']; ?>" class="form-control"readonly></div>
                                              </div>

                                      </div>
                                      
                                          
                          </div>
                        </div>
                    </div>

                    <div class="card-footer">
                      <a href="perusahaan.php"><button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-back"></i> Kembali</button></a>
                    

                    </div></form>
                    
                      <?php } ?>
                      
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  