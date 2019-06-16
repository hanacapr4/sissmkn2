<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php");
$kesiswaan = new Kesiswaan();

$year1 = date('Y');
$year2 = date('Y', strtotime('+1 year'));
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/headerpdb.php"); ?>

<style>

  #regForm {
    background-color: #ffffff;
    font-family: inherit;
    min-width: 300px;
  }

  h1 {
    text-align: center;  
  }

  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }

  /* Hide all steps by default: */
  .tab {
    display: none;
  }

  button {
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: inherit;
    cursor: pointer;
  }

  button:hover {
    opacity: 0.8;
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
  }

  #prevBtn {
    background-color: #bbbbbb;
  }

  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;  
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }

  .step.active {
    opacity: 1;
  }

  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #4CAF50;
  }
</style>
<div class="tab">
      <button class="tablinks" onclick="openCity(event, 'Report1')" id="defaultOpen">PENDATAAN</button>
      <button class="tablinks" onclick="openCity(event, 'Report2')">PENDAFTARAN</button>
      <button class="tablinks" onclick="openCity(event, 'Report3')">DAFTAR ULANG</button>
    </div>

<div id="Report1" class="tabcontent">
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
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Form </strong>Pendataan
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/kesiswaan/pendataan/proses.php?aksi=tambah" method="post" class="form-horizontal">
                                  
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="idPendataan" value="<?= $kesiswaan->tampilidpdt()?>" class="form-control" readonly></div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="nama" value="" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NISN</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="nisn" value="" class="form-control"></div>
                                             
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
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" value="" class="form-control"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Asal Sekolah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="asalSekolah" value="" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan Orang Tua</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="pekerjaan" value="" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:-4px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tempat Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="tempatLahir" value="" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglLahir"  value="" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jurusan</label></div>
                                              <div class="col-12 col-md-9">
                                                  <select name="jurusan" data-placeholder="Pilih Kelas" class="standardSelect" tabindex="1" >
                                                      <option value="">-</option>
                                            <?php foreach ($kesiswaan->show_jurusan() as $data) {
                                             ?>
                                                      <option value="<?= $data['kodeJurusan']; ?>"><?= $data['kk']; ?></option>
                                            <?php } ?>
                                                  </select>
                                              </div>
                                            </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Ajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="thnAjaran" value="" class="form-control"></div>
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
</div>

<div id="Report2" class="tabcontent">
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
                            <strong class="card-title">Form </strong>Pendaftaran
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/kesiswaan/pendaftaran/proses.php?aksi=tambah" method="post" class="form-horizontal" enctype="multipart/form-data">
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="idPendaftaran" value="<?= $kesiswaan->tampilidpdf(); ?>" class="form-control" readonly></div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="nama" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NISN</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="nisn" class="form-control"></div>
                                             
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
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" class="form-control"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kecamatan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kecamatan" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kabupaten</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kabupaten" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Asal Sekolah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="asalSekolah" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tempat Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="tempatLahir" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglLahir" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jurusan</label></div>
                                              <div class="col-12 col-md-9">
                                                  <select name="jurusan" data-placeholder="Pilih Kelas" class="standardSelect" tabindex="1" >
                                                      <option value="">-</option>
                                            <?php foreach ($kesiswaan->show_jurusan() as $data) {
                                             ?>
                                                      <option value="<?= $data['kodeJurusan']; ?>");?><?= $data['kk']; ?></option>
                                            <?php } ?>
                                                  </select>
                                              </div>
                                            </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Agama</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="agama" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Telepon/HP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="telepon" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kesenian</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kesenian" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai UN</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nilaiUN" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nilai Rapot</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nilaiRapot" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Peserta SLTP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="noPesertaSLTP" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Foto</label></div>
                                              <div class="col-12 col-md-9"><input type="file" id="text-input" name="foto" class="form-control"></div>
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
                    </div>
                    </form>
</div>

<div id="Report3" class="tabcontent">
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Daftar Ulang</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Form </strong>Tambah Daftar Ulang
                        </div>
                        
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <?php
                                    foreach ($kesiswaan->getdetailps($_GET['nisn']) as $item) {
                                  ?>
                                  <form action="<?php echo $siteurl; ?>/views/kesiswaan/daftarulang/proses.php?aksi=tambahp" method="post" class="form-horizontal" id="regForm" enctype="multipart/form-data">
                                      <div class="card-body">
                                      <div class="tab"> A. KETERANGAN TENTANG PESERTA DIDIK

                                      <div class="row" style = "margin-top:23px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">NIS</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nis" value="<?= $kesiswaan->tampilnis(); ?>" class="form-control" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NISN</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="nisn" value="<?= $item['nisn']; ?>" class="form-control" readonly>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Lengkap</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaSiswa" value="<?= $item['nama']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Panggilan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaPanggilan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                            <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jurusan</label></div>
                                              <div class="col-12 col-md-9">
                                                  <select name="jurusan" data-placeholder="Pilih Kelas" class="standardSelect" tabindex="1" >
                                                      <option value="">-</option>
                                            <?php foreach ($kesiswaan->show_jurusan() as $data) {
                                             ?>
                                                      <option value="<?= $data['kodeJurusan']; ?>" <?= ($item['jurusan'] == $data['kodeJurusan'] ? 'selected' : '');?>><?= $data['kk']; ?></option>
                                            <?php } ?>
                                                  </select>
                                              </div>
                                            </div>
                                              
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
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kewarganegaraan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kewarganegaraanSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bahasa Sehari-sehari</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="bahasa" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama</label></div>
                                            <div class="col-12 col-md-9"><select name="agamaSiswa" data-placeholder="Pilih Kelas" class="standardSelect" tabindex="1" >
                                                      <option value="">-</option>
                                                      <option value="Islam">Islam</option>
                                                      <option value="Kristen Protestan">Kristen Protestan</option>
                                                      <option value="Katolik">Katolik</option>
                                                      <option value="Hindu">Hindu</option>
                                                      <option value="Buddha">Buddha</option>
                                                      <option value="Kong Hu Cu">Kong Hu Cu</option>
                                                  </select>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Anak keberapa</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="anakKe" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tempat Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" value="<?= $item['tempatLahir']; ?>" name="tempatLahirSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" value="<?= $item['tglLahir']; ?>" name="tanggalLahirSiswa" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jumlah Saudara Kandung</label></div>
                                            <div class="col-12 col-md-9"><input type="number" id="disabled-input" name="jsk" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Saudara Tiri</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="jst" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jumlah Saudara Angkat</label></div>
                                            <div class="col-12 col-md-9"><input type="number" id="disabled-input" name="jsa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Anak Yatim/Piatu/Yatim Piatu</label></div>
                                            <div class="col-12 col-md-9"><select name="jenisAnak" data-placeholder="" class="standardSelect" tabindex="1" >
                                                      <option value="">-</option>
                                                      <option value="Yatim">Yatim</option>
                                                      <option value="Piatu">Piatu</option>
                                                      <option value="Yatim Piatu">Yatim Piatu</option>
                                                  </select>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 1px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Ajaran</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" value="<?= $year1."/".$year2 ?>" name="thnAjaranSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col-12 col-md-9"><input type="hidden" id="text-input" value="<?= $kesiswaan->generateRandomString(); ?>" name="pass" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> B. KETERANGAN TEMPAT TINGGAL

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat di Malang</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="alamatM" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kecamatan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="kecamatanM" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kabupaten / Kodya</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kabupatenM" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jarak Tempat Tinggal ke Sekolah</label></div>
                                              <div class="col-12 col-md-9"><select name="jarak" data-placeholder="" class="standardSelect" tabindex="1" >
                                                      <option value="">-</option>
                                                      <option value="0-1 KM">0-1 KM</option>
                                                      <option value="1-5 KM">1-5 KM</option>
                                                      <option value="5-10 KM">5-10 KM"</option>
                                                      <option value="Lebih Dari 10 KM">Lebih Dari 10 KM</option>
                                                  </select>
                                            </div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tinggal Dengan</label></div>
                                            <div class="col-12 col-md-9"><select name="tinggalDgn" data-placeholder="" class="standardSelect" tabindex="1" >
                                                      <option value="">-</option>
                                                      <option value="Orang Tua">Orang Tua</option>
                                                      <option value="Saudara">Saudara</option>
                                                      <option value="Kost">Kost</option>
                                                      <option value="Wali">Wali</option>
                                                      <option value="Lainnya">Lainnya</option>
                                                  </select>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telepon</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="teleponSiswa" value="<?= $item['telepon']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">HP</label></div>
                                            <div class="col-12 col-md-9"><input type="number" id="disabled-input" name="hpSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="emailSiswa" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Asal</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamatSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">RT</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="rt" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">RW</label></div>
                                            <div class="col-12 col-md-9"><input type="number" id="disabled-input" name="rw" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelurahan / Desa</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kelurahanSiswa" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kecamatan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kecamatanSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kabupaten / Kodya</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kabupatenSiswa" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Provinsi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="provinsiSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kondisi Rumah</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kondisiRumah" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kondisi Fisik Rumah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kondisiFisik" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Transportasi ke Sekolah</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="transportasi" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                                      C. Keterangan Pendidikan Sebelumnya
                                       <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tamatan Dari</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="tamatanDari" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Lama Belajar</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="lamaBelajar" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Ijazah </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="noIjazahSMP" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No SKHUN</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="noSKHUNSMP" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal Ijazah</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglIjazahSMP" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal SKHUN</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglSKHUNSMP" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Peserta UAN</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="noPesertaUAN" class="form-control"></div>
                                          </div>
                                      </div> 

                                      D. Keterangan Kesehatan

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Berat Badan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="berat" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tinggi Badan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="tinggi" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Golongan Darah </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="golDarah" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelainan Jasmani</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kelainan" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penyakit yang pernah di derita</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="rPenyakit" class="form-control"></div>
                                          </div>
                                      </div>

                                      E. Kegemaran Siswa
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Cita - Cita</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="citacita" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Hobi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="hobi" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kesenian</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kesenian" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Olahraga</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="olahraga" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Organisasi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="organisasi" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Prestasi yang pernah diraih</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="prestasi" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> F. Keterangan Tentang Ayah Kandung

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaA" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="noKTPA" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tmptLahirA" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglLahirA" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama</label></div>
                                            <div class="col-12 col-md-9"><select name="agamaA" data-placeholder="Pilih Kelas" class="standardSelect" tabindex="1" >
                                                      <option value="">-</option>
                                                      <option value="Islam">Islam</option>
                                                      <option value="Kristen Protestan">Kristen Protestan</option>
                                                      <option value="Katolik">Katolik</option>
                                                      <option value="Hindu">Hindu</option>
                                                      <option value="Buddha">Buddha</option>
                                                      <option value="Kong Hu Cu">Kong Hu Cu</option>
                                                  </select>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="kewarganegaraanA" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pendidikanA" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pekerjaanA" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan Perbulan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="penghasilanA" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Rumah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamatA" class="form-control"></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Telepon / HP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="teleponA" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masih Hidup / Meninggal dunia</label></div>
                                            <div class="col-12 col-md-9"><select name="ketHidupA" data-placeholder="Pilih Kelas" class="standardSelect" tabindex="1" >
                                                      <option value="Masih Hidup">Masih Hidup</option>
                                                      <option value="Meninggal Dunia">Meninggal Dunia</option>
                                                  </select>
                                            </div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> G. Keterangan Tentang Ibu Kandung

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaI" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="noKTPI" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tmptLahirI" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglLahirI" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama</label></div>
                                            <div class="col-12 col-md-9"><select name="agamaI" data-placeholder="Pilih Kelas" class="standardSelect" tabindex="1" >
                                                      <option value="">-</option>
                                                      <option value="Islam">Islam</option>
                                                      <option value="Kristen Protestan">Kristen Protestan</option>
                                                      <option value="Katolik">Katolik</option>
                                                      <option value="Hindu">Hindu</option>
                                                      <option value="Buddha">Buddha</option>
                                                      <option value="Kong Hu Cu">Kong Hu Cu</option>
                                                  </select>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="kewarganegaraanI" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pendidikanI" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pekerjaanI" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan Perbulan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="penghasilanI" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Rumah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamatI" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Telepon / HP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="teleponI" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masih Hidup / Meninggal dunia</label></div>
                                            <div class="col-12 col-md-9"><select name="ketHidupI" data-placeholder="Pilih Kelas" class="standardSelect" tabindex="1" >
                                                      <option value="Masih Hidup">Masih Hidup</option>
                                                      <option value="Meninggal Dunia">Meninggal Dunia</option>
                                                  </select>
                                            </div>
                                          </div>
                                      </div>
                                      </div>
                                      
                                      <div class="tab"> H. Keterangan Tentang Wali

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaW" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="noKTPW" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tmptLahirW" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglLahirW" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama</label></div>
                                            <div class="col-12 col-md-9"><select name="agamaW" data-placeholder="Pilih Kelas" class="standardSelect" tabindex="1" >
                                                      <option value="">-</option>
                                                      <option value="Islam">Islam</option>
                                                      <option value="Kristen Protestan">Kristen Protestan</option>
                                                      <option value="Katolik">Katolik</option>
                                                      <option value="Hindu">Hindu</option>
                                                      <option value="Buddha">Buddha</option>
                                                      <option value="Kong Hu Cu">Kong Hu Cu</option>
                                                  </select>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="kewarganegaraanW" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pendidikanW" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pekerjaanW" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan Perbulan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="penghasilanW" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Rumah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamatW" class="form-control"></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Telepon / HP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="teleponW" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> I. File Lampiran

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Foto</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="foto" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan Akte</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="scanAkte" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan Ijazah</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="scanIjazah" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan KIP</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="scanKIP" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan KK</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="scanKK" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan KPS</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="scanKPS" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan KTP Orang Tua</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="scanKTPOrtu" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan NISN</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="scanNISN" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan SKHUN</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="scanSKHUN" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan SKHUS</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="scanSKHUS" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>
                                      
                                      <?php
                                        if ($item['privilage'] == 1) { 
                                          echo '
                                              <div class="tab"> J. Keterangan Siswa Pindahan

                                                <div class="row" style = "margin-top:13px;">
                                                    <div class="col-6">
                                                      <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alasan</label></div>
                                                      <div class="col-12 col-md-9"><input type="text" name="alasan" class="form-control"></div>
                                                    </div>
                                                    <div class="col-6">
                                                      <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Asal Sekolah</label></div>
                                                      <div class="col-12 col-md-9"><input type="text" name="dariSekolah" class="form-control"></div>
                                                    </div>
                                                </div>
                                                
                                              </div>
                                          ';
                                        }
                                      ?>

                                      </div>
                    <div class="card-footer" style="margin-top: 15px;">
                      <div style="overflow:auto;">
                        <div style="float:right;">
                          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                      </div>
                      <div style="text-align:center;margin-top:20px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <?php
                        if ($item['privilage'] == 1) {
                          echo ' 
                          <span class="step"></span>
                          ';
                        }
                        ?>

                      </div>
                      </div>

                      
                      <?php
                                    }
                                  ?>
                                      </form>
                    
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


</div>

    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();

$(document).ready(function() {
    $('table.display').DataTable();
} );

</script>

<style>

/* Style the tab */
.tab {
    overflow: hidden;
    border-bottom: 2px solid #ccc;
    color: #726E6D;

}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    width: 14%;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
    color: white;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: white;
    color: #625D5D;
}

/* Style the tab content */
.tabcontent {
    animation: fadeEffect 1s;
    display: none;
    padding: 6px 12px;
    border: 0px solid #ccc;
    border-top: none;
}
@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
</style>