<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Kesiswaan.php");
$kesiswaan = new Kesiswaan();
?>



<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

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
                            <li class="active">Form Edit Pendaftaran Siswa</li>
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
                            <center><a href="#"><button title="CETAK PDF" type="submit" class="btn btn-success btn-sm">
                            <i class="fa fa-print">&nbsp</i> CETAK PDF</button></a></div></center>
                       
                      </strong>
                    </FORM>
                  </FONT>
                </font>

                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                                  <form action="<?php echo $siteurl; ?>/views/kesiswaan/pendaftaran/proses.php?aksi=edit" method="post" class="form-horizontal" id="regForm" enctype="multipart/form-data">
                                      <div class="card-body">
                                      <div class="tab"> 

                                      <div class="card-header">
                            <strong class="card-title"><font size="3">A. KETERANGAN TENTANG DIRI SISWA</strong></font></font>
                        </div>
                                  <?php
                                    foreach ($kesiswaan->getdetailpendaftaran($_GET['user_id']) as $item) {
                                      
                                  ?>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="user_id" value="<?= $item['user_id']; ?>" class="form-control" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NISN <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="no_induk" value="<?= $item['no_induk']; ?>"class="form-control" readonly>
                                              </div>
                                          </div>
                                      </div>
                                     
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input class=" form-control-label">E-Mail <font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_email"  value="<?= $item['sis_email']; ?>"class="form-control" readonly>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Lengkap Siswa <font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama"  value="<?= $item['nama']; ?>"class="form-control"readonly>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                            <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Panggilan <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="text" name="sis_nma_pnggln" value="<?= $item['sis_nma_pnggln']; ?>"class="form-control"readonly>
                                              </div> </div>
                                              
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Lengkap Siswa <font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="kelamin"  value="<?= $item['kelamin']; ?>"class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tmp_lahir" value="<?= $item['tmp_lahir']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tgl_lahir" value="<?= $item['tgl_lahir']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama <font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="agama"  value="<?= $item['agama']; ?>"class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_kwarganegraan" value="<?= $item['sis_kwarganegraan']; ?>"class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Anak Keberapa<font color='red'><font size="5">*</font></font></label></div>
                                           <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_anak_ke" value="<?= $item['sis_anak_ke']; ?>"class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                               <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Saudara Kandung<font color='red'></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_jml_sdr_kndung" value="<?= $item['sis_jml_sdr_kndung']; ?>"class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jumlah Saudara Tiri<font color='red'></font></label></div>                              
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_jml_sdr_tiri" value="<?= $item['sis_jml_sdr_tiri']; ?>"class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Saudara Angkat<font color='red'></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_jml_sdr_angkat" value="<?= $item['sis_jml_sdr_angkat']; ?>"class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Anak yatim/piatu/yatim piatu<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_status" value="<?= $item['sis_status']; ?>"class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Bahasa sehari - hari di rumah<font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_bhs_shari_hri" value="<?= $item['sis_bhs_shari_hri']; ?>"class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 1px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alat transportasi ke sekolah<font color='red'></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="alat_transport" value="<?= $item['alat_transport']; ?>"class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col-12 col-md-9"><input type="hidden" id="text-input" value="<?= $kesiswaan->generateRandomString(); ?>" name="pass" class="form-control"></div>
                                          </div>
                                      </div>
                                    
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Kartu Perlindungan Sosial (KPS)<font color='red'></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_kps" value="<?= $item['sis_kps']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kartu Indonesia Pintar (KIP)<font color='red'></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_kip" value="<?= $item['sis_kip']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Kartu Keluarga (kk)<font color='red'></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_nokk" value="<?= $item['sis_nokk']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Induk Kependudukan (NIK)<font color='red'></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_nik" value="<?= $item['sis_nik']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                            
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">B. KETERANGAN TEMPAT TINGGAL</strong></font></font>
                        </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Di Malang<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_tinggal" value="<?= $item['alamat_tinggal']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                           
                                          </div>

                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_kec_tngl" value="<?= $item['alamat_kec_tngl']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kabupaten / Kodya<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_kab_tngl" value="<?= $item['alamat_kab_tngl']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jarak tempat tinggal ke sekolah<font color='red'><font size="5">*</font></font></label></div>
                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_jrak_ke_skul" value="<?= $item['sis_jrak_ke_skul']; ?>" class="form-control"readonly></div>
                                          </div>
                                         
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tinggal dengan<font color='red'>*</font></label></div>
                             <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_tggal_dgn" value="<?= $item['sis_tggal_dgn']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor telepon/ HP<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="telp" value="<?= $item['telp']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kondisi Rumah<font color='red'><font size="5">*</font></font></label></div>
                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="rumah_kondisi" value="<?= $item['rumah_kondisi']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kondisi Fisik Rumah<font color='red'><font size="5">*</font></font></label></div>
                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="rumah_fisik" value="<?= $item['rumah_fisik']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat Asal<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat" value="<?= $item['alamat']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">RT<font color='red'><font size="5">*</font></label></div></font>
                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_rt" value="<?= $item['alamat_rt']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">RW<font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_rw" value="<?= $item['alamat_rw']; ?>" class="form-control"readonly></div>

                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Desa / Kelurahan<font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_lurah" value="<?= $item['alamat_lurah']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_camat" value="<?= $item['alamat_camat']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kabupaten / Kodya<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_kodya" value="<?= $item['alamat_kodya']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Provinsi<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_prop" value="<?= $item['alamat_prop']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                            
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">C. KETERANGAN PENDIDIKAN SEBELUMNYA</strong></font></font>
                        </div> 
                                     <strong class="card-title"><font size="1"><font color='red'>Pendidikan Sebelumnya</strong></font></font></br>
                                       <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tamatan dari<font color='red'><font size="5">*</font></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_tmt_dri" value="<?= $item['sis_tmt_dri']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Ijazah / STTB<font color='red'></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sttb" value="<?= $item['sttb']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Ijazah / STTB<font color='red'></font> </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sttb_tgl" value="<?= $item['sttb_tgl']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No SKHUN / NEM<font color='red'></font> </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nem" value="<?= $item['nem']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal SKHUN / NEM<font color='red'></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nem_tgl" value="<?= $item['nem_tgl']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lama belajar<font color='red'><font size="5">*</font></font> </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_lma_blajar" value="<?= $item['sis_lma_blajar']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>        

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Peserta UN SMP / MTs<font color='red'><font size="5">*</font></font></label></div>
                                             <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_no_psrta_unas" value="<?= $item['sis_no_psrta_unas']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            
                                          </div>

                                      </div>
                                      <strong class="card-title"><font size="1"><font color='red'>Diterima di sekolah ini</strong></font></font></br>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tingkat<font color='red'><font size="5">*</font></font></label></div>
                                               <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_dtrm_kelas" value="<?= $item['sis_dtrm_kelas']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bidang Keahlian<font color='red'><font size="5">*</font></font> </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_dtrm_bdng_khlian" value="<?= $item['sis_dtrm_bdng_khlian']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      
                                     
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kompetensi Keahlian<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_dtrm_komp_khlian" value="<?= $item['sis_dtrm_komp_khlian']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_dtrm_tgl" value="<?= $item['sis_dtrm_tgl']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                            <strong class="card-title"><font size=5"><font color='red'></strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">D. KETERANGAN TENTANG AYAH KANDUNG</strong></font></font>
                        </div>  

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayah" value="<?= $item['ayah']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP Ayah<font color='red'><font size="5">*</font></font></label></div>
                                           <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayah_ktp" value="<?= $item['ayah_ktp']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir<font color='red'><font size="5">*</font></font>  </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayh_tmpt_lhir" value="<?= $item['ayh_tmpt_lhir']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayh_tgl_lhir" value="<?= $item['ayh_tgl_lhir']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayh_agama" value="<?= $item['ayh_agama']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayh_kwarganegraan" value="<?= $item['ayh_kwarganegraan']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayh_pndidikan" value="<?= $item['ayh_pndidikan']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayh_pkrjaan" value="<?= $item['ayh_pkrjaan']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan / Pengeluaran Perbulan<font color='red'><font size="5">*</font></font></label></div>
                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayh_pnghasilan_bln" value="<?= $item['ayh_pnghasilan_bln']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat rumah<font color='red'><font size="5">*</font></font> </label></div>
                                             <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayh_almat" value="<?= $item['ayh_almat']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Telp./ HP<font color='red'><font size="5">*</font></font></label></div>
                                             <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayh_tlp" value="<?= $item['ayh_tlp']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masih hidup/ meninggal dunia tahun<font color='red'><font size="5">*</font></font></label></div>
                                             <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ayh_status" value="<?= $item['ayh_status']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      </div>

                                       <div class="tab"> 
                            
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">E. KETERANGAN TENTANG IBU KANDUNG</strong></font></font>
                        </div>  

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu" value="<?= $item['ibu']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP Ibu<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu_ktp" value="<?= $item['ibu_ktp']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir<font color='red'><font size="5">*</font></font>  </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu_tmpt_lhir" value="<?= $item['ibu_tmpt_lhir']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu_tgl_lhir" value="<?= $item['ibu_tgl_lhir']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu_agama" value="<?= $item['ibu_agama']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu_kwarganegraan" value="<?= $item['ibu_kwarganegraan']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu_pndidikan" value="<?= $item['ibu_pndidikan']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu_pkrjaan" value="<?= $item['ibu_pkrjaan']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan / Pengeluaran Perbulan<font color='red'><font size="5">*</font></font></label></div>
                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu_pnghasilan_bln" value="<?= $item['ibu_pnghasilan_bln']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat rumah<font color='red'><font size="5">*</font></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu_almat" value="<?= $item['ibu_almat']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Telp./ HP<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu_tlp" value="<?= $item['ibu_tlp']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masih hidup/ meninggal dunia tahun<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="ibu_status" value="<?= $item['ibu_status']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      </div>
                                      <div class="tab"> 
                            
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">F. KETERANGAN TENTANG WALI</strong></font></font>

                        </div>  
                            <strong class="card-title"><font size="1"><font color='red'></strong></font></font></br>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="wali" value="<?= $item['wali']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP Wali<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="wali_ktp" value="<?= $item['wali_ktp']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir<font color='red'><font size="5">*</font></font>  </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="wali_tmpt_lhir" value="<?= $item['wali_tmpt_lhir']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="wali_tgl_lhir" value="<?= $item['wali_tgl_lhir']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="wali_agama" value="<?= $item['wali_agama']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="wali_kwarganegraan" value="<?= $item['wali_kwarganegraan']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan<font color='red'><font size="5">*</font></font></label></div>                                            
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="wali_pndidikan" value="<?= $item['wali_pndidikan']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="wali_pkrjaan" value="<?= $item['wali_pkrjaan']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan / Pengeluaran Perbulan<font color='red'><font size="5">*</font></font></label></div>
                                            
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="wali_pnghasilan_bln" value="<?= $item['wali_pnghasilan_bln']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat rumah<font color='red'><font size="5">*</font></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="wali_almat" value="<?= $item['wali_almat']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Telp./ HP<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="wali_tlp" value="<?= $item['wali_tlp']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Hubungan Wali dengan Siswa<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="hub_wali_siswa" value="<?= $item['hub_wali_siswa']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                           
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">G. KETERANGAN KESEHATAN</strong></font></font>
                        </div>   

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Golongan Darah Siswa<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_gol_darah" value="<?= $item['sis_gol_darah']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Riwayat Penyakit<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_penyakit" value="<?= $item['sis_penyakit']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelainan Jasmani<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_kel_jasmani" value="<?= $item['sis_kel_jasmani']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tinggi dan berat badan <font color='red' font size="2"></font></font><font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_tinggi_berat" value="<?= $item['sis_tinggi_berat']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      </div>
                                      
                                
                                      <div class="tab"> 
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">H. KEGEMARAN SISWA</strong></font></font>
                        </div>    

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kesenian<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_ksenian" value="<?= $item['sis_ksenian']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Olahraga<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_olahrga" value="<?= $item['sis_olahrga']; ?>" class="form-control" readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kemasyarakatan <font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_kmasyaraktn" value="<?= $item['sis_kmasyaraktn']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Organisasi <font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_organisasi" value="<?= $item['sis_organisasi']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Hobby<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_hobby" value="<?= $item['sis_hobby']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Prestasi<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="prestasi" value="<?= $item['prestasi']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Lain - lain /Cita-cita<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_lain2" value="<?= $item['sis_lain2']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Formulir<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="no_daftar" value="<?= $item['no_daftar']; ?>" class="form-control" readonly></div>
                                          </div>
                                      </div>
                                    </div> 
                                        
                                
                                      
                                    
                                      <div class="tab"> 
                           
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">I. FILE LAMPIRAN</strong></font></font>
                        </div>     

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Foto Pendaftar<font color='red'><font size="5">*</font><font size="1" ='red'></font> </label></div></font>
                                            <div><td><?="<img src='ffoto/".$item['foto_daftar']."'style='width:200px; height:140px;'>"?></td></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan Kartu NISN</label></div>
                                            <div><td><?="<img src='fnisn/".$item['sis_nisn']."'style='width:200px; height:140px;'>"?></td></div>
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
                                            <div class="col-12 col-md-9"><input type="text" name="kode_prog" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Urut<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="no_urut" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Induk Program<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ind_prog" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelas<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="kelas" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal Input<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="tgl_input" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Sis Pindah Sekolah<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_pndahn_seklah" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keterangan Pindah<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_pndahn_alasan" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Terima Program<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_dtrm_prog_khlian" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Cita-Cita<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_cita2" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">KKS<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_kks" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Beasiswa<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_beasiswa" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pindah Sekolah<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_pndah_seklah" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keterangan Pindah<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_pndah_alsn" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Lulus Tahun<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_luls_thn" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Lanjut Ke<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_lnjut_ke" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Mulai Kerja<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_krja_tgl" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat tempat Kerja<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_krja_tmpt" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_krja_pnghsilan" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Ijazah LG<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ijz_fc_lg" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Ijazah BS<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ijz_fc_bs" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SKHUN LG<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="skhun_fc_lg" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SKHUN BS<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="skhun_fc_bs" class="form-control"readonly></div>
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
                                            <div class="col-12 col-md-9"><input type="text" name="kk" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Akte Kelahiran<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="akte" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">alat_transport<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="alat_tansport" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahuun Ajar<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="th_ajar" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label"readonly>Nilai Unas<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="n_unas" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Unas<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="no_unas" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai Raport<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="n_raport" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai Test<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="n_test" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai Minat<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="n_minat" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label"readonly>Nilai Akhir<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="n_akhir" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">P Unas<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="p_unas" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">P Raport <font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="p_raport" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">P Test<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="p_test" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">P minat<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="p_minat" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">P akhir<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="p_akhir" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Ijazah<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_luls_ijazah" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SKHU<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_luls_skhu" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Petugas<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="petugas" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Daftar<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="th_daftar" class="form-control"readonly></div>
                                          </div>
                                          </div>
                                      </div>
                            </div>
                            </div>
                            </div>
                      <?php } ?>
                      
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


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  

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