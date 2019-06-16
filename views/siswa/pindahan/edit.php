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
                        <h1>Pendataan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Pendaftaran</a></li>
                            <li class="active">Form Edit Pendaftaran</li>
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
                            <strong class="card-title">Form </strong>Edit Pendaftaran
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/siswa/pindahan/proses.php?aksi=edit" method="post" class="form-horizontal">
                                  <?php
                                    foreach ($kesiswaan->getdetailpdft($_GET['idPendaftaran']) as $item) {
                                  ?>
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="idPendaftaran" value="<?= $item['idPendaftaran']; ?>" class="form-control" readonly></div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="nama" value="<?= $item['nama']; ?>"  class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NISN</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="nisn" value="<?= $item['nisn']; ?>"  class="form-control"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Jenis Kelamin</label></div>
                                            <div class="col">
                                                <?php 
                                            if ($item['jk'] == 'L'){ echo '
                                                <div class="form-check">
                                                    <input type="radio" id="radio1" name="jk" value="L" class="form-check-input" checked>Laki - laki
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" id="radio2" name="jk" value="P" class="form-check-input">Perempuan
                                                </div>';
                                              }
                                            elseif ($item['jk'] == 'P') { echo '
                                                <div class="form-check">
                                                    <input type="radio" id="radio1" name="jk" value="L" class="form-check-input">Laki - laki
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" id="radio2" name="jk" value="P" class="form-check-input" checked>Perempuan
                                                </div>';
                                              }
                                              ?>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" value="<?= $item['alamat']; ?>" class="form-control"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kecamatan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kecamatan" value="<?= $item['kecamatan']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kabupaten</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kabupaten" value="<?= $item['kabupaten']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Asal Sekolah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="asalSekolah" value="<?= $item['sekolahAsal']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" value="<?= $item['email']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tempat Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="tempatLahir" value="<?= $item['tempatLahir']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglLahir" value="<?= $item['tglLahir']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jurusan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="jurusan" value="<?= $item['jurusan']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Agama</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="agama" value="<?= $item['agama']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Telepon/HP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="telepon" value="<?= $item['telepon']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kesenian</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kesenian" value="<?= $item['kesenian']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai UN</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nilaiUN" value="<?= $item['nilaiUN']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nilai Rapot</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nilaiRapot" value="<?= $item['nilaiRapot']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Peserta SLTP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="noPesertaSLTP" value="<?= $item['noPesertaSLTP']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Foto</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="foto" class="form-control"></div>
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