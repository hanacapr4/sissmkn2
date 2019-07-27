<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Kesiswaan.php");
$kesiswaan = new Kesiswaan();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pendaftaran</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Pendaftaran</a></li>
                            <li class="active">Form Tambah Pendaftaran</li>
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
                            <strong class="card-title">Form </strong>Tambah Pendaftaran
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/kesiswaan/pendataan/proses.php?aksi=tambah" method="post" class="form-horizontal">
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="idPendaftaran" value="<?= $kesiswaan->tampilidpdfs(); ?>" class="form-control" readonly></div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No NISN</label></div>
                                            <div class="col-12 col-md-9"><input type="number" name="nisn" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" class="form-control"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Jenis Kelamin</label></div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input type="radio" id="radio1" name="jk" value="L" class="form-check-input">Laki - laki
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="radio2" name="jk" value="P" class="form-check-input">Perempuan
                                                </div>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">email</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" class="form-control"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="disabled-input" name="tglLahir" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tempatLahir" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kecamatan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kabupaten</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kabupaten" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telepon</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="telepon" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="agama" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Asal Sekolah</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sekolahAsal" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">NO Peserta SLTP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="noPesertaSLTP" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jurusan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="jurusan" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nilai UN</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nilaiUN" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai Raport</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nilaiRapot" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                             
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


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  