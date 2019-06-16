<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_pendaftaran_prakerin.php");
$tbl_perusahaan= new t_prakerin_siswa();
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
                                  <form action="<?php echo $siteurl; ?>/views/admin_staff/proses_pendaftaran_prakerin.php?aksi=edit" method="post" class="form-horizontal">
                                  <?php
                                    foreach ($tbl_perusahaan->getdetail_pendaftaran_prakerin($_GET['id_siswa_prakerin']) as $item) {
                                  ?>
                                     

                                      <form action="<?php echo $siteurl; ?>/views/admin_staff/proses_perusahaan.php?aksi=insert" method="post" class="form-horizontal">
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id Siswa perusahaan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['id_siswa_prakerin']; ?>" class="form-control"readonly></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                          </div>
                                          
                                      </div>
                                       <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Tempat Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['id_tmp_prakerin']; ?>" class="form-control"readonly></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id Pembimbing</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['id_pembimbing']; ?>" class="form-control"readonly></div>
                                          </div>
                                          
                                      </div>
                                      
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Induk Siswa</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['no_induk']; ?>" class="form-control"readonly></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['nama_prakerin']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['alamat_prakerin']; ?>" class="form-control"readonly></div>>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pembimbing</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['pembimbing']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIP</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['nip']; ?>" class="form-control"readonly></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lama Bulan Magang</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['lama_bln']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Mulai</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="nama_prakerin"value="<?= $item['tgl_start']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Selesai</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="nama_prakerin"value="<?= $item['tgl_akhir']; ?>" class="form-control"readonly></div>
                                          </div>
                                          

                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Pelajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['tapel']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelas</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['kelas']; ?>" class="form-control"readonly></div>
                                          </div>
                                          

                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Prakerin Ke</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['prakerinke']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Program</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['program']; ?>" class="form-control"readonly></div>
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


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  