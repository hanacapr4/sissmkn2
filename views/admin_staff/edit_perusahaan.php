<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_perusahaan.php");
$kesiswaan = new t_prakerin();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

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
                           <?php $object = new t_prakerin();
                          $id = $_GET["id_tmp_prakerin"];?>
                          <div id="pay-invoice">
                              <div class="card-body">
                                
                               


                                 <form action="proses_perusahaan.php?aksi=update" method="post">
                                 <?php foreach($object->getdetailtbl_perusahaan($id) as $data) {
                                ?>
                                      <div class="row">
                                      <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">id_Perusahaan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="id_tmp_prakerin" name="id_tmp_prakerin" placeholder="Masukkan id Perusahaan"  class="form-control" value="<?= $data['id_tmp_prakerin']; ?>" class="form-control" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="nama_prakerin" name="nama_prakerin" placeholder="Masukkan Nama"  class="form-control"value="<?= $data['nama_prakerin']; ?>" ></div>
                                          </div>

                                           
                                      </div>
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="alamat_prakerin" name="alamat_prakerin" placeholder="Masukan Alamat" class="form-control"value="<?= $data['alamat_prakerin']; ?>"></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telpon Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="telp_prakerin" name="telp_prakerin" placeholder="Masukan Telpon" class="form-control" value="<?= $data['telp_prakerin']; ?>"></div>
                                          </div>
                                          
                                      </div>
                                      
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kota Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="kota_prakerin" name="kota_prakerin" placeholder="Masukan Kota" class="form-control" value="<?= $data['kota_prakerin']; ?>"></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Program</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="program" name="program" placeholder="Masukan Program" class="form-control" value="<?= $data['program']; ?>"></div>
                                          </div>
                                          

                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pembimbing </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="pembimbing" name="pembimbing" placeholder="Masukan Nama Pembimbing" class="form-control" value="<?= $data['pembimbing']; ?>"></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Direktur</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="direktur" name="direktur" placeholder="Masukan Direktur" class="form-control" value="<?= $data['direktur']; ?>"></div>
                                          </div>
                                          

                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="email" name="email" placeholder="Masukan Email " class="form-control" value="<?= $data['email']; ?>"></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Website</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="website" name="website" placeholder="Masukan Website" class="form-control" value="<?= $data['website']; ?>"></div>
                                          </div>
                                          

                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Ajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="th_ajar" name="th_ajar" placeholder="Masukan Tahun Ajaran " class="form-control" value="<?= $data['th_ajar']; ?>"></div>
                                          </div>
                                          
                                          
                                          </div>
                                          

                                      </div>





                                      <?php } 
                                      ?> 
                                          
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