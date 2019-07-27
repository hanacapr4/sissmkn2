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
                        <h1>Edit Pengajuan Beasiswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Beasiswa</a></li>
                            <li class="active">Edit Pengajuan Beasiswa</li>
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
                                    Edit Pengajuan Beasiswa a.n. <b><?php echo $item['namaSiswa']; ?> (<?php echo $item['nis']; ?>)</b>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/beasiswa/siswa/proses.php?aksi=edit" method="post" class="form-horizontal" enctype="multipart/form-data">
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-12"><label for="disabled-input" class=" form-control-label">Yang bertanda tangan di bawah ini wali siswa :</label></div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="idBea" value="<?= $item['idBea']; ?>" class="form-control" readonly></div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaWali" class="form-control" value="<?= $item['namaWali']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamatWali" class="form-control" value="<?= $item['alamatWali']; ?>"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. HP</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="noHPWali" class="form-control" value="<?= $item['noHPWali']; ?>"></div>
                                             
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="pekerjaanWali" class="form-control" value="<?= $item['pekerjaanWali']; ?>"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="penghasilanWali" class="form-control" value="<?= $item['penghasilanWali']; ?>"><small class="help-block form-text" style="color:red">Isi tanpa menggunakan simbol, contoh : <b>1000000</b></small></div>
                                          </div>
                                      </div><br><br>
                                      <div class="row">
                                          <div class="col-12">
                                            <div class="col col-md-12"><label for="disabled-input" class=" form-control-label">Bersama ini mengajukan permohonan Kartu Siswa Prasejahtera untuk anak kami :</label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="namaSiswa" class="form-control" value="<?= $item['namaSiswa']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIS</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nis" class="form-control" value="<?= $item['nis']; ?>"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jurusan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="psCode" class="form-control" value="<?= $item['psCode']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelas</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kelas" class="form-control" value="<?= $item['kelas']; ?>"><small class="help-block form-text" style="color:red">Contoh Pengisian : <b>10 TKJ 1</b></small></div>
                                          </div>
                                      </div><br><br>
                                      <div class="row">
                                          <div class="col-12">
                                            <div class="col col-md-12"><label for="disabled-input" class=" form-control-label">Untuk Kategori :</label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keringanan / Penundaan SPP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="pengajuanSpp" class="form-control" value="<?= $item['pengajuanSpp']; ?>"><small class="help-block form-text" style="color:red">Isi tanpa menggunakan simbol, contoh : <b>200000</b></small></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keringanan  / Penundaan SBPP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="pengajuanSbpp" class="form-control" value="<?= $item['pengajuanSbpp']; ?>"><small class="help-block form-text" style="color:red">Isi tanpa menggunakan simbol, contoh : <b>1000000</b></small></div>
                                          </div>
                                      </div>
                                      <br><br>  
                                      <div class="row">
                                          <div class="col-12">
                                            <div class="col col-md-12"><label for="disabled-input" class=" form-control-label">Sebagai bahan pertimbangan berikut kami lampirkan :</label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan SKTM</label></div>
                                            <div class="col-12 col-md-9">
                                              <?php
                                              // print_r(base64_encode($item['foto']));
                                              // die();
                                              echo '<img style="width:50%" src="data:image/jpeg;base64,'.base64_encode( $item['sktm'] ).'"/>';
                                              ?>
                                            <input type="file" id="file-input" name="sktm" class="form-control-file" value="<?php base64_decode($item['sktm']); ?>"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan KTP</label></div>
                                            <div class="col-12 col-md-9">
                                              <?php
                                              // print_r(base64_encode($item['foto']));
                                              // die();
                                              echo '<img style="width:50%" src="data:image/jpeg;base64,'.base64_encode( $item['ktp'] ).'"/>';
                                              ?>
                                            <input type="file" id="file-input" name="ktp" class="form-control-file" value="<?php base64_decode($item['ktp']); ?>"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan KK</label></div>
                                            <div class="col-12 col-md-9">
                                              <?php
                                              // print_r(base64_encode($item['foto']));
                                              // die();
                                              echo '<img style="width:50%" src="data:image/jpeg;base64,'.base64_encode( $item['kk'] ).'"/>';
                                              ?>
                                            <input type="file" id="file-input" name="kk" class="form-control-file" value="<?php base64_decode($item['kk']); ?>"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan KIP / KPS / KIS</label></div>
                                            <div class="col-12 col-md-9">
                                              <?php
                                              // print_r(base64_encode($item['foto']));
                                              // die();
                                              echo '<img style="width:50%" src="data:image/jpeg;base64,'.base64_encode( $item['lain'] ).'"/>';
                                              ?>
                                            <input type="file" id="file-input" name="lain" class="form-control-file" value="<?php base64_decode($item['lain']); ?>"></div>


                                            <input type="text" id="file-input" name="waktu" class="form-control-file" value="<?= $item['waktu']; ?>" readonly>
                                            <input type="text" id="file-input" name="thnAjaran" class="form-control-file" value="<?= $item['thnAjaran']; ?>" readonly>
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


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  