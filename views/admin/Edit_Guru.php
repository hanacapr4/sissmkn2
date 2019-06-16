<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Guru.php");
$Guru = new t_staf();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

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
                                  <form action="<?php echo $siteurl; ?>/views/admin/proses_guru.php?aksi=update" method="post" class="form-horizontal" id="regForm" enctype="multipart/form-data">
                                      <div class="card-body">
                                      <div class="tab"> 
                                  <?php
                                    foreach ($Guru->getdata($_GET['nip']) as $item) {
                                      
                                  ?>
                                      <div class="row" style = "margin-top:23px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="user_id" value="<?= $item['user_id']; ?>" class="form-control" ></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama"  value="<?= $item['nama']; ?>" class="form-control">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">NIP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="nip"  value="<?= $item['nip']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Jenis Kelamin</label></div>
                                            <div class="col">
                                               <?php 
                                            if ($item['kelamin'] == 'L'){ echo '
                                                <div class="form-check">
                                                    <input type="radio" id="radio1" name="kelamin" value="L" class="form-check-input" checked>Laki - laki
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" id="radio2" name="kelamin" value="P" class="form-check-input">Perempuan
                                                </div>';
                                              }
                                            elseif ($item['kelamin'] == 'P') { echo '
                                                <div class="form-check">
                                                    <input type="radio" id="radio1" name="kelamin" value="L" class="form-check-input">Laki - laki
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" id="radio2" name="kelamin" value="P" class="form-check-input" checked>Perempuan
                                                </div>';
                                              }
                                              ?>
                                              </div>
                                            </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                            <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                              <div class="col-12 col-md-9"><input type="text" name="alamat" value="<?= $item['alamat']; ?>" class="form-control"></div>
                                            </div>
                                              
                                          <div class="col-6">
                                            <div class="col col-md-3"><label class=" form-control-label">Tugas </label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="tugas" value="<?= $item['tugas']; ?>" class="form-control"></div>
                                            </div>
                                          </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telepon</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="telp" value="<?= $item['telp']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">HP</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="hp" value="<?= $item['hp']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Email</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="email" value="<?= $item['email']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mata Pelajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="pelajaran" value="<?= $item['pelajaran']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="tgl_lahir" value="<?= $item['tgl_lahir']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="tmp_lahir" value="<?= $item['tmp_lahir']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kode Tanggal</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="kode" value="<?= $item['kode']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pangkat</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="pangkat" value="<?= $item['pangkat']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kategori</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kategori" value="<?= $item['kategori']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Profil</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="profilstaf" value="<?= $item['profilstaf']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 1px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Ajar</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="th_ajar" value="<?= $item['th_ajar']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col-12 col-md-9"><input type="hidden" id="text-input" value="<?= $Guru->generateRandomString(); ?>" name="pass" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Induk Baru</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="no_induk_baru" value="<?= $item['no_induk_baru']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                           
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Depan Gelar</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="depan_gelar" value="<?= $item['depan_gelar']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Belakang Gelar</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="belakang_gelar" value="<?= $item['belakang_gelar']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Ibu Kandung</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nama_ibu_kandung" value="<?= $item['nama_ibu_kandung']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Pos</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kode_pos" value="<?= $item['kode_pos']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Golongan Darah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="golongan_darah" value="<?= $item['golongan_darah']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelurahan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kelurahan" value="<?= $item['kelurahan']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kecamatan" value="<?= $item['kecamatan']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Provinsi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="provinsi" value="<?= $item['provinsi']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Daerah</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="daerah" value="<?= $item['daerah']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Status</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="status_nikah" value="<?= $item['status_nikah']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Masuk</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tanggal_masuk" value="<?= $item['tanggal_masuk']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Pegawai</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="jenis_pegawai" value="<?= $item['jenis_pegawai']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Sertifikasi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sertifikasi_guru" value="<?= $item['sertifikasi_guru']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tamat PNS</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tmt_pns" value="<?= $item['tmt_pns']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab">                                   
                                       <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Akses</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="akses" value="<?= $item['akses']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Arsip</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="arsip" value="<?= $item['arsip']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tugas Tambahan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tugas_tambahan" value="<?= $item['tugas_tambahan']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pangkat PNS</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="pangkat_pns" value="<?= $item['pangkat_pns']; ?>" class="form-control"></div>
                                          </div>
                                      </div>                                   
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jabatan PNS</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="jabatan_pns" value="<?= $item['jabatan_pns']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Golongan PNS</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="golongan_pns" value="<?= $item['golongan_pns']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan Terakhir</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="pendidikan_terahir" value="<?= $item['pendidikan_terahir']; ?>" class="form-control"></div>
                                          </div>
                                      </div>                       
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Program Dimampui</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="prog_diampu" value="<?= $item['prog_diampu']; ?>"class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masa Kerja Tahun</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="masakerja_th" value="<?= $item['masakerja_th']; ?>"class="form-control">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Masa Kerja Bulan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="masakerja_bl" value="<?= $item['masakerja_bl']; ?>" class="form-control"></div>
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