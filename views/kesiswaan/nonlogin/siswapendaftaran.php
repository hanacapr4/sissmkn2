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
                        <h1>Siswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Siswa</a></li>
                            <li class="active">Form Tambah Siswa</li>
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
                            <strong class="card-title"><font size="3"><font color='BLACK'>NB : </strong></font></font>
                        </div>
                        <div class="card-header">
                            <strong class="card-title"><font size="1"><font color='red'>1. Pengisian data menggunakan huruf KAPITAL atau BESAR SEMUA.</strong></font></font>
                        </div>
                        <div class="card-header">
                            <strong class="card-title"><font size="1"><font color='red'>2. Jika data sudah diisi lengkap, kemudian klik tombol simpan pada akhir form dan silahkan klik tombol <font color='BLACK'>CETAK PDF <font color='red'>di bawah ini untuk mulai mencetak data pendaftaran dan pernyataan anda.</strong></font></font></font>
                        </div>
                        <div class="card-header">
                            <strong class="card-title"><font size="1"><font color='red'>3. Ukuran kertas yang digunakan adalah <font color='BLACK'>Folio (F4).</strong></font></font></font>
                        </div>
                        <div class="card-header">
                            <strong class="card-title"><font size="1"><font color='red'>4. Sebelum menekan tombol <font color='BLACK'>CETAK PDF<font color='red'>, pastikan data sudah terisi semua dan benar dan pastikan sudah diperbarui sebelumnya dengan menekan tombol <font color='BLACK'>Simpan <font color='red'>yang berada pada akhir form ini.</strong></font></font></font></font></font>
                        </div>
                      </strong>
                    </FORM>
                  </FONT>
                </font>
                        
                          <!-- Credit Card -->
                         
                          <div id="pay-invoice">
                                  <form action="<?php echo $siteurl; ?>/views/kesiswaan/pendaftaran/proses.php?aksi=tambah" method="post" class="form-horizontal" id="regForm" enctype="multipart/form-data">
                                      <div class="card-body">
                                      <div class="tab">  
                                      <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">A. KETERANGAN TENTANG DIRI SISWA</strong></font></font>
                        </div>
                                      <div class="row" style = "margin-top:23px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="user_id" value="<?= $kesiswaan->tampilidpdf(); ?>" class="form-control" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NISN <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="no_induk" class="form-control">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input class=" form-control-label">E-Mail <font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_email" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Lengkap Siswa <font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                            <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Panggilan <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="text" name="sis_nma_pnggln" class="form-control"></div> </div>
                                              
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Jenis Kelamin <font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col">
                                              <div class="form-check">
                                                    <input type="radio" id="radio1" name="kelamin" value="L" class="form-check-input">Laki - laki
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" id="radio2" name="kelamin" value="P" class="form-check-input">Perempuan
                                                </div>
                                            </div>
                                          </div>
                                      </label>
                                    </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tmp_lahir" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tgl_lahir" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama <font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="agama" id="agama" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="KATOLIK">KATOLIK</option>
                                    <option value="BUDHA">BUDHA</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="KONGUCHU">KONGUCHU</option>
                                    <option value="ALIRAN KEPERCAYAAN">ALIRAN KEPERCAYAAN</option>
                               
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_kwarganegraan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Anak Keberapa<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="sis_anak_ke" id="sis_anak_ke" class="form-control-sm form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                    <option value="5">6</option>
                                    <option value="6">7</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                               <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Saudara Kandung<font color='red'></font></label></div>
                                              <div class="col-12 col-md-9 ">
                                              <select name="sis_jml_sdr_kndung" id="sis_jml_sdr_kndung" class="form-control-sm form-control">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                    <option value="5">6</option>
                                    <option value="6">7</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                              </select>
                            </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jumlah Saudara Tiri<font color='red'></font></label></div>                              
                                            <div class="col-12 col-md-9 ">
                                              <select name="sis_jml_sdr_tiri" id="sis_jml_sdr_tiri" class="form-control-sm form-control">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                    <option value="5">6</option>
                                    <option value="6">7</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Saudara Angkat<font color='red'></font></label></div>
                                              <div class="col-12 col-md-9 ">
                                              <select name="sis_jml_sdr_angkat" id="sis_jml_sdr_angkat" class="form-control-sm form-control">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                    <option value="5">6</option>
                                    <option value="6">7</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                              </select>
                            </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Anak yatim/piatu/yatim piatu<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="sis_status" id="sis_status" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="-">-</option>
                                    <option value="YATIM">YATIM</option>
                                    <option value="PIATU">PIATU</option>
                                    <option value="YATIM PIATU">YATIM PIATU</option>
                                  </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Bahasa sehari - hari di rumah<font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_bhs_shari_hri" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 1px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alat transportasi ke sekolah<font color='red'></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alat_transport" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col-12 col-md-9"><input type="hidden" id="text-input" value="<?= $kesiswaan->generateRandomString(); ?>" name="pass" class="form-control"></div>
                                          </div>
                                      </div>
                                    
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Kartu Perlindungan Sosial (KPS)<font color='red'></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_kps" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kartu Indonesia Pintar (KIP)<font color='red'></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_kip" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Kartu Keluarga (kk)<font color='red'></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_nokk" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Induk Kependudukan (NIK)<font color='red'></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_nik" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">B. KETERANGAN TEMPAT TINGGAL</strong></font></font>
                        </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Di Malang<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="alamat_tinggal" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                           
                                          </div>

                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat_kec_tngl" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kabupaten / Kodya<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat_kab_tngl" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jarak tempat tinggal ke sekolah<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="sis_jrak_ke_skul" id="sis_jrak_ke_skul" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="-">-</option>
                                    <option value="0-1KM">0-1KM</option>
                                    <option value="1-3KM">1-3KM</option>
                                    <option value="3-5KM">3-5KM</option>
                                    <option value="5-10KM">5-10KM</option>
                                    <option value="LEBIH DARI 10KM">LEBIH DARI 10KM</option>
                                  </select>
                            </div>
                                          </div>
                                         
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tinggal dengan<font color='red'>*</font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="sis_tggal_dgn" id="sis_tggal_dgn" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="-">-</option>
                                    <option value="ORANG TUA">ORANG TUA</option>
                                    <option value="SAUDARA">SAUDARA</option>
                                    <option value="DI ASRAMA">DI ASRAMA</option>
                                    <option value="KOST">KOST</option>
                                    <option value="WALI">WALI</option>
                                  </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor telepon/ HP<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="telp" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kondisi Rumah<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9 ">
                                  <select name="rumah_kondisi" id="rumah_kondisi" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="-">-</option>
                                    <option value="MILIK ORANG TUA">MILIK ORANG TUA</option>
                                    <option value="MILIK NENEK">MILIK NENEK</option>
                                    <option value="DI ASRAMA">DI ASRAMA</option>
                                    <option value="KOST">KOST</option>
                                    <option value="WALI">WALI</option>
                                  </select>
                            </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kondisi Fisik Rumah<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="rumah_fisik" id="rumah_fisik" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="-">-</option>
                                    <option value="PERMANEN/GEDUNG">PERMANEN/GEDUNG</option>
                                    <option value="SEMI PERMANEN/KLENENGAN">SEMI PERMANEN/KLENENGAN</option>
                                    <option value="TIDAK PERMANEN/DINDING BAMBU">TIDAK PERMANEN/DINDING BAMBU</option>
                                  </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat Asal<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">RT<font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9 ">
                                  <select name="alamat_rt" id="alamat_rt" class="form-control-sm form-control">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="37">36</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                    <option value="69">69</option>
                                    <option value="70">70</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="80">80</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="90">90</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                    <option value="100">100</option>
                                  </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">RW<font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9 ">
                                  <select name="alamat_rw" id="alamat_rw" class="form-control-sm form-control">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="37">36</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                    <option value="69">69</option>
                                    <option value="70">70</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="80">80</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="90">90</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                    <option value="100">100</option>
                                  </select>
                            </div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Desa / Kelurahan<font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_lurah" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat_camat" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kabupaten / Kodya<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_kodya" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Provinsi<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat_prop" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">C. KETERANGAN PENDIDIKAN SEBELUMNYA</strong></font></font>
                        </div> 
                                     <strong class="card-title"><font size="1"><font color='red'>Pendidikan Sebelumnya</strong></font></font></br>
                                       <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tamatan dari<font color='red'><font size="5">*</font></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_tmt_dri" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Ijazah / STTB<font color='red'></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sttb" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Ijazah / STTB<font color='red'></font> </label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="sttb_tgl" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No SKHUN / NEM<font color='red'></font> </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nem" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal SKHUN / NEM<font color='red'></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="nem_tgl" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lama belajar<font color='red'><font size="5">*</font></font> </label></div>
                                              <div class="col-12 col-md-9 ">
                                  <select name="sis_lma_blajar" id="sis_lma_blajar" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="2 TAHUN">2 TAHUN</option>
                                    <option value="3 TAHUN">3 TAHUN</option>
                                    <option value="4 TAHUN">4 TAHUN</option>
                                    <option value="5 TAHUN">5 TAHUN</option>
                               
                              </select>
                            </div>
                                          </div>
                                      </div>        

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Peserta UN SMP / MTs<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_no_psrta_unas" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            
                                          </div>

                                      </div>
                                      <strong class="card-title"><font size="1"><font color='red'>Diterima di sekolah ini</strong></font></font></br>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tingkat<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_dtrm_kelas" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bidang Keahlian<font color='red'><font size="5">*</font></font> </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_dtrm_bdng_khlian" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                     
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kompetensi Keahlian<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_dtrm_komp_khlian" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="date" name="sis_dtrm_tgl" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                            <strong class="card-title"><font size=5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">D. KETERANGAN TENTANG AYAH KANDUNG</strong></font></font>
                        </div>  

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ayah" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP Ayah<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ayah_ktp" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir<font color='red'><font size="5">*</font></font>  </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_tmpt_lhir" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="ayh_tgl_lhir" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="ayh_agama" id="ayh_agama" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="KATOLIK">KATOLIK</option>
                                    <option value="BUDHA">BUDHA</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="KONGUCHU">KONGUCHU</option>
                                    <option value="ALIRAN KEPERCAYAAN">ALIRAN KEPERCAYAAN</option>
                               
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_kwarganegraan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="ayh_pndidikan" id="ayh_pndidikan" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="SD">SD</option>
                                    <option value="SD/MI/PAKET A">SD/MI/PAKET A</option>
                                    <option value="SLTP">SLTP</option>
                                    <option value="SLTP/MTS/PAKET B">SLTP/MTS/PAKET B</option>
                                    <option value="SLTA">SLTA</option>
                                    <option value="SLTA/MA/PAKET C">SLTA/MA/PAKET C</option>
                                    <option value="DIPLOMA 1">DIPLOMA 1</option>
                                    <option value="DIPLOMA 2">DIPLOMA 2</option>
                                    <option value="DIPLOMA 3">DIPLOMA 3</option>
                                    <option value="DIPLOMA 4">DIPLOMA 4</option>
                                    <option value="STRATA 1 (SARJANA)">STRATA 1 (SARJANA)</option>
                                    <option value="STRATA 2 (MAGISTER)">STRATA 2 (MAGISTER)</option>
                                    <option value="STRATA 3 (DOKTOR)">STRATA 3 (DOKTOR)</option>
                               
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_pkrjaan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan / Pengeluaran Perbulan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="ayh_pnghasilan_bln" id="ayh_pnghasilan_bln" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="KURANG DARI RP 500.000">KURANG DARI RP 500.000</option>
                                    <option value="RP 500.000 - RP 1.000.000">RP 500.000 - RP 1.000.000</option>
                                    <option value="RP 1.000.000 - RP 3.000.000">RP 1.000.000 - RP 3.000.000</option>
                                    <option value="RP 3.000.000 - RP 5.000.000">RP 3.000.000 - RP 5.000.000</option>
                                    <option value="LEBIH DARI RP 5.000.000">LEBIH DARI RP 5.000.000</option>
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat rumah<font color='red'><font size="5">*</font></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_almat" class="form-control"></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Telp./ HP<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_tlp" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masih hidup/ meninggal dunia tahun<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_status" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                       <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">E. KETERANGAN TENTANG IBU KANDUNG</strong></font></font>
                        </div>  

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ibu" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP Ibu<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ibu_ktp" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir<font color='red'><font size="5">*</font></font>  </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_tmpt_lhir" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="ibu_tgl_lhir" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="ibu_agama" id="ibu_agama" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="KATOLIK">KATOLIK</option>
                                    <option value="BUDHA">BUDHA</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="KONGUCHU">KONGUCHU</option>
                                    <option value="ALIRAN KEPERCAYAAN">ALIRAN KEPERCAYAAN</option>
                               
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_kwarganegraan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="ibu_pndidikan" id="ibu_pndidikan" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="SD">SD</option>
                                    <option value="SD/MI/PAKET A">SD/MI/PAKET A</option>
                                    <option value="SLTP">SLTP</option>
                                    <option value="SLTP/MTS/PAKET B">SLTP/MTS/PAKET B</option>
                                    <option value="SLTA">SLTA</option>
                                    <option value="SLTA/MA/PAKET C">SLTA/MA/PAKET C</option>
                                    <option value="DIPLOMA 1">DIPLOMA 1</option>
                                    <option value="DIPLOMA 2">DIPLOMA 2</option>
                                    <option value="DIPLOMA 3">DIPLOMA 3</option>
                                    <option value="DIPLOMA 4">DIPLOMA 4</option>
                                    <option value="STRATA 1 (SARJANA)">STRATA 1 (SARJANA)</option>
                                    <option value="STRATA 2 (MAGISTER)">STRATA 2 (MAGISTER)</option>
                                    <option value="STRATA 3 (DOKTOR)">STRATA 3 (DOKTOR)</option>
                               
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_pkrjaan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan / Pengeluaran Perbulan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="ibu_pnghasilan_bln" id="ibu_pnghasilan_bln" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="KURANG DARI RP 500.000">KURANG DARI RP 500.000</option>
                                    <option value="RP 500.000 - RP 1.000.000">RP 500.000 - RP 1.000.000</option>
                                    <option value="RP 1.000.000 - RP 3.000.000">RP 1.000.000 - RP 3.000.000</option>
                                    <option value="RP 3.000.000 - RP 5.000.000">RP 3.000.000 - RP 5.000.000</option>
                                    <option value="LEBIH DARI RP 5.000.000">LEBIH DARI RP 5.000.000</option>
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat rumah<font color='red'><font size="5">*</font></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_almat" class="form-control"></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Telp./ HP<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_tlp" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masih hidup/ meninggal dunia tahun<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_status" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>
                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">F. KETERANGAN TENTANG WALI</strong></font></font>

                        </div>  
                            <strong class="card-title"><font size="1"><font color='red'>Wali adalah yang membiayai anda sekolah bisa ayah, ibu atau orang lain.</strong></font></font></br>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="wali" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP Wali<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="wali_ktp" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir<font color='red'><font size="5">*</font></font>  </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="wali_tmpt_lhir" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="wali_tgl_lhir" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="wali_agama" id="wali_agama" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="KATOLIK">KATOLIK</option>
                                    <option value="BUDHA">BUDHA</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="KONGUCHU">KONGUCHU</option>
                                    <option value="ALIRAN KEPERCAYAAN">ALIRAN KEPERCAYAAN</option>
                               
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="wali_kwarganegraan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan<font color='red'><font size="5">*</font></font></label></div>                                            
                                            <div class="col-12 col-md-9 ">
                                  <select name="wali_pndidikan" id="wali_pndidikan" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="SD">SD</option>
                                    <option value="SD/MI/PAKET A">SD/MI/PAKET A</option>
                                    <option value="SLTP">SLTP</option>
                                    <option value="SLTP/MTS/PAKET B">SLTP/MTS/PAKET B</option>
                                    <option value="SLTA">SLTA</option>
                                    <option value="SLTA/MA/PAKET C">SLTA/MA/PAKET C</option>
                                    <option value="DIPLOMA 1">DIPLOMA 1</option>
                                    <option value="DIPLOMA 2">DIPLOMA 2</option>
                                    <option value="DIPLOMA 3">DIPLOMA 3</option>
                                    <option value="DIPLOMA 4">DIPLOMA 4</option>
                                    <option value="STRATA 1 (SARJANA)">STRATA 1 (SARJANA)</option>
                                    <option value="STRATA 2 (MAGISTER)">STRATA 2 (MAGISTER)</option>
                                    <option value="STRATA 3 (DOKTOR)">STRATA 3 (DOKTOR)</option>
                               
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="wali_pkrjaan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan / Pengeluaran Perbulan<font color='red'><font size="5">*</font></font></label></div>
                                            
                                            <div class="col-12 col-md-9 ">
                                  <select name="wali_pnghasilan_bln" id="wali_pnghasilan_bln" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="KURANG DARI RP 500.000">KURANG DARI RP 500.000</option>
                                    <option value="RP 500.000 - RP 1.000.000">RP 500.000 - RP 1.000.000</option>
                                    <option value="RP 1.000.000 - RP 3.000.000">RP 1.000.000 - RP 3.000.000</option>
                                    <option value="RP 3.000.000 - RP 5.000.000">RP 3.000.000 - RP 5.000.000</option>
                                    <option value="LEBIH DARI RP 5.000.000">LEBIH DARI RP 5.000.000</option>
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat rumah<font color='red'><font size="5">*</font></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="wali_almat" class="form-control"></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Telp./ HP<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="wali_tlp" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Hubungan Wali dengan Siswa<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="hub_wali_siswa" id="hub_wali_siswa" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="ANAK KANDUNG">ANAK KANDUNG</option>
                                    <option value="SAUDARA">SAUDARA</option>
                                    <option value="TETANGGA">TETANGGA</option>
                                    <option value="ANAK ANGKAT">ANAK ANGKAT</option>
                                    <option value="ANAK TIRI">ANAK TIRI</option>
                              </select>
                            </div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">G. KETERANGAN KESEHATAN</strong></font></font>
                        </div>   

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Golongan Darah Siswa<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="sis_gol_darah" id="sis_gol_darah" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="O">O</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Riwayat Penyakit<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_penyakit" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelainan Jasmani<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_kel_jasmani" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tinggi dan berat badan <font color='red' font size="2">(Saat diterima di sekolah ini) </font></font><font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_tinggi_berat" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>
                                      
                                
                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">H. KEGEMARAN SISWA</strong></font></font>
                        </div>    

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kesenian<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_ksenian" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Olahraga<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_olahrga" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kemasyarakatan <font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_kmasyaraktn" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Organisasi <font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_organisasi" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Hobby<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_hobby" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Prestasi<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="prestasi" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Lain - lain /Cita-cita<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_lain2" class="form-control"></div>
                                          </div> 
                                          </div>
                                          </div>
                                      
                                    
                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">I. FILE LAMPIRAN</strong></font></font>
                        </div>     
<strong class="card-title"><font size="1"><font color='BLACK'>Penting : <font color='red'>Disarankan file yang diupload / yang dilampirkan ukurannya tidak lebih dari 2 MB dan bagi koneksi internetnya lambat, disarankan menguload file lampiran 1 persatu simpan sampai semua lampiran terupload.</strong></font></font></br></font>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Foto Pendaftar<font color='red'><font size="5">*</font><font size="1" ='red'>(File foto yang diupload adalah foto PUTIH HITAM BERDASI dengan background warna polos (merah, biru, putih, dll)</font> </label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="foto_daftar" class="form-control" onchange="PreviewImage();"></div></font>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan Kartu NISN</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="sis_nisn" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      </div>

                                      <div class="tab"> 
                           
                                      <div class="card-header">
                            <strong class="card-title"><font size="3"></strong></font></font>
                        </div>    

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kode Program<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="kode_prog" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Urut<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="no_urut" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Induk Program<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ind_prog" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelas<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="kelas" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal Input<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="tgl_input" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Sis Pindah Sekolah<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_pndahn_seklah" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keterangan Pindah<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_pndahn_alasan" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Terima Program<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_dtrm_prog_khlian" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Cita-Cita<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_cita2" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">KKS<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_kks" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Beasiswa<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_beasiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pindah Sekolah<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_pndah_seklah" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keterangan Pindah<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_pndah_alsn" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Lulus Tahun<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_luls_thn" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Lanjut Ke<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_lnjut_ke" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Mulai Kerja<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_krja_tgl" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat tempat Kerja<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_krja_tmpt" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_krja_pnghsilan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Ijazah LG<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ijz_fc_lg" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Ijazah BS<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ijz_fc_bs" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SKHUN LG<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="skhun_fc_lg" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SKHUN BS<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="skhun_fc_bs" class="form-control"></div>
                                          </div>
                                      </div>

                                          </div>

                                          <div class="tab"> 
                           
                                      <div class="card-header">
                            <strong class="card-title"><font size="3"></strong></font></font>
                        </div>    

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kartu Keluarga<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="kk" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Akte Kelahiran<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="akte" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">alat_transport<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="alat_tansport" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahuun Ajar<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="th_ajar" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai Unas<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="n_unas" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Unas<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="no_unas" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai Raport<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="n_raport" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai Test<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="n_test" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai Minat<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="n_minat" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai Akhir<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="n_akhir" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">P Unas<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="p_unas" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">P Raport <font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="p_raport" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">P Test<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="p_test" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">P minat<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="p_minat" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">P akhir<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="p_akhir" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Ijazah<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_luls_ijazah" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SKHU<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_luls_skhu" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Petugas<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="petugas" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Daftar<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="th_daftar" class="form-control"></div>
                                          </div>
                                          </div>
                                          </div>

</div>
                                    </form>

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
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                      </div>
                      </div>

                    
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
    document.getElementById("nextBtn").innerHTML = "Submit" ;
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