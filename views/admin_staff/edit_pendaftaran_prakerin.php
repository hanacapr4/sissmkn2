<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_pendaftaran_prakerin.php");
$kesiswaan = new t_prakerin_siswa();
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
                           <?php $object = new t_prakerin_siswa();
                          $id = $_GET["id_siswa_prakerin"];?>
                          <div id="pay-invoice">
                              <div class="card-body">
                                
                               


                                 <form action="proses_perusahaan.php?aksi=update" method="post">
                                 <?php foreach($object->getdetail_pendaftaran_prakerin($id) as $data) {
                                ?>
                                <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Siswa Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="id_siswa_prakerin" name="id_siswa_prakerin" placeholder="Masukan Alamat" class="form-control"value="<?= $data['id_siswa_prakerin']; ?>" class="form-control" readonly></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                          </div>
                                          
                                      </div>
                                       <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Tempat Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="id_tmp_prakerin" name="id_tmp_prakerin" placeholder="Masukan Alamat" class="form-control"value="<?= $data['id_tmp_prakerin']; ?>"></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id Pembimbing</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="id_pembimbing" name="id_pembimbing" placeholder="Masukan No Telp" class="form-control" value="<?= $data['id_pembimbing']; ?>"></div>
                                          </div>
                                          
                                      </div>
                                      
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Induk Siswa</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="no_induk" name="no_induk" placeholder="Masukan kota prakerin" class="form-control" value="<?= $data['no_induk']; ?>"></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nama_prakerin" name="nama_prakerin" placeholder="Masukan Program" class="form-control" value="<?= $data['nama_prakerin']; ?>"></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="alamat_prakerin" name="alamat_prakerin" placeholder="Masukan Nama Pembimbing" class="form-control" value="<?= $data['alamat_prakerin']; ?>"></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pembimbing</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="pembimbing" name="pembimbing" placeholder="Masukan Nama Direktur" class="form-control" value="<?= $data['pembimbing']; ?>"></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIP</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nip" name="nip" placeholder="Masukan Email Perusahaan" class="form-control" value="<?= $data['nip']; ?>"></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lama Bulan Magang</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="lama_bln" name="lama_bln" placeholder="Masukan Website Perusahaan" class="form-control" value="<?= $data['lama_bln']; ?>"></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Mulai</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="tgl_start" name="tgl_start" placeholder="Masukan Tahun Ajaran" class="form-control" value="<?= $data['tgl_start']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Selesai</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="tgl_akhir" name="tgl_akhir" placeholder="Masukan Website Perusahaan" class="form-control" value="<?= $data['tgl_akhir']; ?>"></div>
                                          </div>
                                          

                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Pelajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="tapel" name="tapel" placeholder="Masukan Tahun Ajaran" class="form-control" value="<?= $data['tapel']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelas</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="kelas" name="kelas" placeholder="Masukan Website Perusahaan" class="form-control" value="<?= $data['kelas']; ?>"></div>
                                          </div>
                                          

                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Prakerin Ke</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="prakerinke" name="prakerinke" placeholder="Masukan Tahun Ajaran" class="form-control" value="<?= $data['prakerinke']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Program</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="program" name="program" placeholder="Masukan Website Perusahaan" class="form-control" value="<?= $data['program']; ?>"></div>
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