<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php");
$kesiswaan = new Kesiswaan();
?>



<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

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
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Daftar Ulang</a></li>
                            <li class="active">Form Tambah Daftar Ulang</li>
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
                            <strong class="card-title">Form </strong>Tambah Daftar Ulang
                        </div>
                        
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              
                                  <form action="<?php echo $siteurl; ?>/views/kesiswaan/daftarulang/proses.php?aksi=edit" method="post" class="form-horizontal" id="regForm">

                                  <?php
                                    foreach ($kesiswaan->getdetaildu($_GET['nis']) as $item) {
                                  ?>
                                      <div class="card-body">
                                      <div class="tab"> A. KETERANGAN TENTANG PESERTA DIDIK

                                      <div class="row" style = "margin-top:23px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">NIS</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nis" value="<?= $item['nis']; ?>" class="form-control" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NISN</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="nisn" value="<?= $item['nisn']; ?>"class="form-control">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Lengkap</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaSiswa" value="<?= $item['namaSiswa']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Panggilan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" value="<?= $item['namaPanggilan']; ?>" name="namaPanggilan" class="form-control"></div>
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
                                                      <option value="<?= $data['kodeJurusan']; ?>" <?= ($item['kodeJurusan'] == $data['kodeJurusan'] ? 'selected' : '');?>><?= $data['kk']; ?></option>
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
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['kewarganegaraan']; ?>" name="kewarganegaraanSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bahasa Sehari-sehari</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="bahasa" value="<?= $item['bahasa']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="agamaSiswa" value="<?= $item['agama']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Anak keberapa</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="anakKe" value="<?= $item['anakKe']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tempat Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="tempatLahirSiswa" value="<?= $item['tempatLahir']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tanggalLahirSiswa" value="<?= $item['tanggalLahir']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jumlah Saudara Kandung</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="jsk" value="<?= $item['jsk']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Saudara Tiri</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="jst" value="<?= $item['jst']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jumlah Saudara Angkat</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="jsa" value="<?= $item['jsa']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Anak Yatim/Piatu/Yatim Piatu</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="jenisAnak" value="<?= $item['jenisAnak']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 1px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Ajaran</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="thnAjaranSiswa" value="<?= $item['thnAjaran']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                              <div class="col-12 col-md-9"><input type="password" id="text-input" name="pass" value="<?= $item['pass']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> B. KETERANGAN TEMPAT TINGGAL

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat di Malang</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="alamatM" value="<?= $item['alamatM']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kecamatan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="kecamatanM" value="<?= $item['kecamatanM']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kabupaten / Kodya</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['kabupatenM']; ?>" name="kabupatenM" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jarak Tempat Tinggal ke Sekolah</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="jarak" value="<?= $item['jarak']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tinggal Dengan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="tinggalDgn" value="<?= $item['tinggalDgn']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telepon</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="teleponSiswa" value="<?= $item['telepon']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">HPr</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="hpSiswa" value="<?= $item['hp']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="emailSiswa" value="<?= $item['email']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Asal</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamatSiswa" value="<?= $item['alamat']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">RT</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="rt" value="<?= $item['rt']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">RW</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="rw" value="<?= $item['rw']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelurahan / Desa</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kelurahanSiswa" value="<?= $item['kelurahan']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kecamatan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kecamatanSiswa" value="<?= $item['kecamatan']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kabupaten / Kodya</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kabupatenSiswa" value="<?= $item['kabupaten']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Provinsi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="provinsiSiswa" value="<?= $item['provinsi']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kondisi Rumah</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kondisiRumah" value="<?= $item['kondisiRumah']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kondisi Fisik Rumah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kondisiFisik" value="<?= $item['kondisiFisik']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Transportasi ke Sekolah</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="transportasi" value="<?= $item['transportasi']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                                      C. Keterangan Pendidikan Sebelumnya
                                       <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tamatan Dari</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="tamatanDari" value="<?= $item['tamatanDari']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Lama Belajar</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="lamaBelajar" value="<?= $item['lamaBelajar']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Ijazah </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="noIjazahSMP" value="<?= $item['noIjazahSMP']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No SKHUN</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="noSKHUNSMP" value="<?= $item['noSKHUNSMP']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal Ijazah</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglIjazahSMP" value="<?= $item['tglIjazahSMP']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal SKHUN</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglSKHUNSMP" value="<?= $item['tglSKHUNSMP']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">no Peserta UAN</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="noPesertaUAN" value="<?= $item['noPesertaUAN']; ?>" class="form-control"></div>
                                          </div>
                                      </div> 

                                      D. Keterangan Kesehatan

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Berat Badan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="berat" value="<?= $item['berat']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tinggi Badan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="tinggi" value="<?= $item['tinggi']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Golongan Darah </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="golDarah" value="<?= $item['golDarah']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelainan Jasmani</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kelainan" value="<?= $item['kelainan']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penyakit yang pernah di derita</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="rPenyakit" value="<?= $item['rPenyakit']; ?>" class="form-control"></div>
                                          </div>
                                      </div>

                                      E. Kegemaran Siswa
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Cita - Cita</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="citacita" value="<?= $item['citacita']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input"  class=" form-control-label">Hobi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="hobi" value="<?= $item['hobi']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kesenian</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['kesenian']; ?>" name="kesenian" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Olahraga</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['olahraga']; ?>" name="olahraga" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Organisasi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['organisasi']; ?>" name="organisasi" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Prestasi yang pernah diraih</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['prestasi']; ?>" name="prestasi" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> F. Keterangan Tentang Ayah Kandung

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaA" value="<?= $item['namaA']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="noKTPA" value="<?= $item['noKTPA']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['tmptLahirA']; ?>" name="tmptLahirA" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" value="<?= $item['tglLahirA']; ?>" name="tglLahirA" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['agamaA']; ?>" name="agamaA" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['kewarganegaraanA']; ?>" name="kewarganegaraanA" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['pendidikanA']; ?>" name="pendidikanA" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['pekerjaanA']; ?>" name="pekerjaanA" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan Perbulan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['penghasilanA']; ?>" name="penghasilanA" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Rumah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['alamatA']; ?>" name="alamatA" class="form-control"></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Telepon / HP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="teleponA" value="<?= $item['teleponA']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masih Hidup / Meninggal dunia</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['ketHidupA']; ?>" name="ketHidupA" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> G. Keterangan Tentang Ibu Kandung

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaI" value="<?= $item['namaI']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="noKTPI" value="<?= $item['noKTPI']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tmptLahirI" value="<?= $item['tmptLahirI']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglLahirI" value="<?= $item['tglLahirI']; ?>"class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="agamaI" value="<?= $item['agamaI']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['kewarganegaraanI']; ?>" name="kewarganegaraanI" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pendidikanI" value="<?= $item['pendidikanI']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['pekerjaanI']; ?>" name="pekerjaanI" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan Perbulan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="penghasilanI" value="<?= $item['penghasilanI']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Rumah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamatI" value="<?= $item['alamatI']; ?>" class="form-control"></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Telepon / HP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="teleponI" value="<?= $item['teleponI']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masih Hidup / Meninggal dunia</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ketHidupI" value="<?= $item['ketHidupI']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> H. Keterangan Tentang Wali

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaW" value="<?= $item['namaW']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="noKTPW" value="<?= $item['noKTPW']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['tmptLahirW']; ?>" name="tmptLahirW" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" value="<?= $item['tglLahirW']; ?>" name="tglLahirW" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="agamaW" value="<?= $item['agamaW']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['kewarganegaraanW']; ?>" name="kewarganegaraanW" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pendidikanW" value="<?= $item['pendidikanW']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="pekerjaanW" value="<?= $item['pekerjaanW']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan Perbulan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="penghasilanW" value="<?= $item['penghasilanW']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Rumah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamatW" value="<?= $item['alamatW']; ?>" class="form-control"></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Telepon / HP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" value="<?= $item['teleponW']; ?>" name="teleponW" class="form-control"></div>
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
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan Surat Keterangan</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="scanSuratKet" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      </div>
                    <div class="card-footer">
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
</script>