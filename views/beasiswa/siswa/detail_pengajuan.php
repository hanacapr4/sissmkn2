<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Beasiswa.php");
$beasiswa = new Pengajuan();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail Pengajuan Beasiswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Beasiswa</a></li>
                            <li class="active">Detail Pengajuan Beasiswa</li>
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
                                    <?php
                                    foreach ($beasiswa->getDetailaju($_GET['idBea']) as $item) {
                                    ?>
                                    Detail Pengajuan Beasiswa a.n. <b><?php echo $item['namaSiswa']; ?> (<?php echo $item['nis']; ?>)</b>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/beasiswa/siswa/proses.php?aksi=edit" method="post" class="form-horizontal">
                                    
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-12"><label for="disabled-input" style="font-weight:bold" class=" form-control-label">Yang bertanda tangan di bawah ini wali siswa :</label></div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;<?php echo $item['idBea']; ?></label></div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;<?php echo $item['namaWali']; ?></label></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                              <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;<?php echo $item['alamatWali']; ?></label></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. HP</label></div>
                                              <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;<?php echo $item['noHPWali']; ?></label></div>
                                             
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan</label></div>
                                              <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;<?php echo $item['pekerjaanWali']; ?></label></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;<?php echo $item['penghasilanWali']; ?></label></div>
                                          </div>
                                      </div><br><br>
                                      <div class="row">
                                          <div class="col-12">
                                            <div class="col col-md-12"><label for="disabled-input" style="font-weight:bold" class=" form-control-label">Bersama ini mengajukan permohonan Kartu Siswa Prasejahtera untuk anak kami :</label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;<?php echo $item['namaSiswa']; ?></label></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIS</label></div>
                                              <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;<?php echo $item['nis']; ?></label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jurusan</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;<?php echo $item['psCode']; ?></label></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelas</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;<?php echo $item['kelas']; ?></label></div>
                                          </div>
                                      </div><br><br>
                                      <div class="row">
                                          <div class="col-12">
                                            <div class="col col-md-12"><label for="disabled-input" style="font-weight:bold" class=" form-control-label">Untuk Kategori :</label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keringanan / Penundaan SPP</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;Rp. <?php echo $item['pengajuanSpp']; ?></label></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keringanan  / Penundaan SBPP</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">:&nbsp;Rp. <?php echo $item['pengajuanSbpp']; ?></label></div>
                                          </div>
                                      </div><br><br>
                                      <div class="row">
                                          <div class="col-12">
                                            <div class="col col-md-12"><label for="disabled-input" style="font-weight:bold" class=" form-control-label">Lampiran :</label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SKTM :</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">&nbsp;
                                              <?php
                                              // print_r(base64_encode($item['foto']));
                                              // die();
                                              echo '<img style="width:50%" src="data:image/jpeg;base64,'.base64_encode( $item['sktm'] ).'"/>';
                                              ?>
                                              </label></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">KTP :</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">&nbsp;
                                              <?php
                                              // print_r(base64_encode($item['foto']));
                                              // die();
                                              echo '<img style="width:50%" src="data:image/jpeg;base64,'.base64_encode( $item['ktp'] ).'"/>';
                                              ?>
                                            </label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">kk :</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">&nbsp;
                                              <?php
                                              // print_r(base64_encode($item['foto']));
                                              // die();
                                              echo '<img style="width:50%" src="data:image/jpeg;base64,'.base64_encode( $item['kk'] ).'"/>';
                                              ?>
                                            </label></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Lainnya :</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">&nbsp;
                                              <?php
                                              // print_r(base64_encode($item['foto']));
                                              // die();
                                              echo '<img style="width:50%" src="data:image/jpeg;base64,'.base64_encode( $item['lain'] ).'"/>';
                                              ?>
                                            </label></div>
                                          </div>
                                      </div>
                            </div>
                            </div>
                            </div>
                      <?php } ?>
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  