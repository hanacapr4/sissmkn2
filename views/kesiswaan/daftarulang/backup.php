<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php"); ?>
<?php $db = new Kesiswaan(); ?>
<?php
$aksi = $_GET['aksi'];
 if($aksi == "edit"){
	$db->editpendataan($_POST['idPendataan'],$_POST['nisn'],$_POST['nama'],$_POST['asalSekolah'],$_POST['jk'],$_POST['alamat'],$_POST['tempatLahir'],$_POST['tglLahir'],$_POST['pekerjaan'],$_POST['jurusan'],$_POST['thnAjaran']);
 	header("location:http://localhost:8080/sissmkn2/views/kesiswaan/pendataan/index.php");
	 
 }elseif ($aksi == "tambah") {
    $db->tambahdu(
    	$_POST['nis'],
    	$_POST['nisn'],
    	$_POST['namaSiswa'],
    	$_POST['jk'],
    	$_POST['tempatLahirSiswa'],
    	$_POST['tanggalLahirSiswa'],
    	$_POST['agamaSiswa'],
    	$_POST['emailSiswa'],
    	$_POST['hpSiswa'],
    	$_POST['teleponSiswa'],
    	$_POST['pass'],
    	$_POST['anakKe'],
    	$_POST['bahasa'],
    	$_POST['jenisAnak'],
    	$_POST['jsa'],
    	$_POST['jsk'],
    	$_POST['jst'],
    	$_POST['kewarganegaraanSiswa'],
    	$_POST['thnAjaranSiswa'],
    	$_POST['statusSiswa'],

		$_POST['foto'],
    	$_POST['scanAkte'],
    	$_POST['scanIjazah'],
    	$_POST['scanKIP'],
    	$_POST['scanKK'],
    	$_POST['scanKPS'],
    	$_POST['scanKTPOrtu'],
    	$_POST['scanNISN'],
    	$_POST['scanSKHUN'],
    	$_POST['scanSKHUS'],
    	$_POST['scanSuratKet'], 

    	$_POST['citacita'],
    	$_POST['hobi'],
    	$_POST['kesenian'],
    	$_POST['olahraga'],
    	$_POST['organisasi'],
    	$_POST['prestasi'],

    	$_POST['tglKeluar'],
    	$_POST['alasan'],
    	$_POST['noIjazah'],
    	$_POST['noSKHUN'],
    	$_POST['tglIjazah'],
    	$_POST['tglSKHUN'],
    	$_POST['tahunLulus'],

    	$_POST['namaA'],
    	$_POST['agamaA'],
    	$_POST['alamatA'],
    	$_POST['kewarganegaraanA'],
    	$_POST['noKTPA'],
    	$_POST['teleponA'],
    	$_POST['pekerjaanA'],
    	$_POST['pendidikanA'],
    	$_POST['penghasilanA'],
    	$_POST['tglLahirA'],
    	$_POST['tmptLahirA'],
    	$_POST['ketHidupA'],

    	$_POST['namaI'],
    	$_POST['agamaI'],
    	$_POST['alamatI'],
    	$_POST['kewarganegaraanI'],
    	$_POST['noKTPI'],
    	$_POST['teleponI'],
    	$_POST['pekerjaanI'],
    	$_POST['pendidikanI'],
    	$_POST['penghasilanI'],
    	$_POST['tglLahirI'],
    	$_POST['tmptLahirI'],
    	$_POST['ketHidupI'],

    	$_POST['namaW'],
    	$_POST['agamaW'],
    	$_POST['alamatW'],
    	$_POST['kewarganegaraanW'],
    	$_POST['noKTPW'],
    	$_POST['teleponW'],
    	$_POST['pekerjaanW'],
    	$_POST['pendidikanW'],
    	$_POST['penghasilanW'],
    	$_POST['tglLahirW'],
    	$_POST['tmptLahirW'],

    	$_POST['berat'],
    	$_POST['tinggi'],
    	$_POST['golDarah'],
    	$_POST['kelainan'],
    	$_POST['rPenyakit'],

    	$_POST['bsCode'],
    	$_POST['kkCode'],
    	$_POST['psCode'],

    	$_POST['kelanjutan'],
    	$_POST['namaInstansi'],
    	$_POST['penghasilan'],
    	$_POST['tglMulai'],

    	$_POST['alasanpindah'],
    	$_POST['dariSekolah'],

    	$_POST['alamatSiswa'],
    	$_POST['jarak'],
    	$_POST['kabupatenSiswa'],
    	$_POST['kecamatanSiswa'],
    	$_POST['kelurahanSiswa'],
    	$_POST['provinsiSiswa'],
    	$_POST['rt'],
    	$_POST['rw'],
    	$_POST['tinggalDgn'],
    	$_POST['alamatM'],
    	$_POST['kecamatanM'],
    	$_POST['kabupatenM'],
    	$_POST['kondisiRumah'],
    	$_POST['kondisiFisik'],
    	$_POST['transportasi'],

    	$_POST['tamatanDari'],
    	$_POST['lamaBelajar'],
    	$_POST['noPesertaUAN'],
    	$_POST['noIjazahSMP'],
    	$_POST['noSKHUNSMP'],
    	$_POST['tglIjazahSMP'],
    	$_POST['tglSKHUNSMP']
    	);
 	header("location:http://localhost:8080/sissmkn2/views/kesiswaan/pendataan/index.php");
 }elseif ($aksi == "hapus") {
    $db->deletePO($_GET['po_id']);
 	header("location:http://localhost/ta_cendana_javiera/views/produksi/production_order/index.php");
 }
?>


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
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/kesiswaan/daftarulang/proses.php?aksi=tambah" method="post" class="form-horizontal" id="regForm">
                                      
                                      <div class="tab"> A. KETERANGAN TENTANG PESERTA DIDIK

                                      <div class="row" style = "margin-top:23px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">NIS</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="idPendaftaran" value="<?= $kesiswaan->tampilnis(); ?>" class="form-control" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NISN</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="nisn" class="form-control">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Lengkap</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Panggilan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaP" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                            <!-- <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Jurusan</label></div>
                                            <div class="col" >
                                                <div class="form-check">
                                                    <select data-placeholder="Pilih Jurusan" class="standardSelect" tabindex="1" >
                                                      <option value="TKJ">TEKNIK KOMPUTER DAN JARINGAN</option>
                                                      <option value="PA">PERAWATAN SOSIAL</option>
                                                      <option value="UPW">USAHA PERJALANAN WISATA</option>
                                                      <option value="AP">AKOMODASI PERHOTELAN</option>
                                                      <option value="KPR">KEPERAWATAN</option>
                                                      <option value="JB">JASA BOGA</option>
                                                      <option value="STI">SAMSUNG TECH INSTITUTE</option>
                                                  </select>
                                                </div>
                                            </div>
                                          </div> -->
                                              
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
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="agamaSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Anak keberapa</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="anakKe" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tempat Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="tempatLahirSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tanggalLahirSiswa" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jumlah Saudara Kandung</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="jsk" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Saudara Tiri</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="jst" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jumlah Saudara Angkat</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="jsa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Anak Yatim/Piatu/Yatim Piatu</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="jenisAnak" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 1px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Ajaran</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="thnAjaranSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                              <div class="col-12 col-md-9"><input type="password" id="text-input" name="pass" class="form-control"></div>
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
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="jarak" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tinggal Dengan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="tinggalDgn" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telepon</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="teleponSiswa" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">HPr</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="hpSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="emailSiswa" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Asal</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamatSiswa" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">RT</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="rt" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">RW</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="rw" class="form-control"></div>
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

                                      <div class="tab"> C. Keterangan Pendidikan Sebelumnya

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
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">no Peserta UAN</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="noPesertaUAN" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> D. Keterangan Kesehatan

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
                                      </div>

                                      <div class="tab"> E. Kegemaran Siswa

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
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="agamaA" class="form-control"></div>
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
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ketHidupA" class="form-control"></div>
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
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="agamaI" class="form-control"></div>
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
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Telepon / HP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="teleponI" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masih Hidup / Meninggal dunia</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ketHidupI" class="form-control"></div>
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
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="agamaW" class="form-control"></div>
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
  y = x[currentTab].getElementsByTagName("input");
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