<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Beasiswa.php");
$beasiswa = new Beasiswa();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Form Pengajuan Beasiswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Beasiswa</a></li>
                            <li class="active">Form Pengajuan Beasiswa</li>
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
                                  <!-- <form action="<?php echo $siteurl; ?>/views/beasiswa/siswa/proses.php?aksi=tambah" method="post" class="form-horizontal"> -->
                                  <?php
                                    foreach($beasiswa->tampilaju() as $item){
                                        // print_r($kesiswaan->tampilpendataan());
                                        // die();
                                  ?>
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-12"><label for="disabled-input" class=" form-control-label">Yang bertanda tangan di bawah ini wali siswa :</label></div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: <?php echo $item['idBea']; ?></label></div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: <?php echo $item['namaWali']; ?></label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                              <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: <?php echo $item['alamatWali']; ?></label></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. HP</label></div>
                                              <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: <?php echo $item['noHPWali']; ?></label></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan</label></div>
                                              <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: <?php echo $item['pekerjaanWali']; ?></label></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: <?php echo $item['penghasilanWali']; ?></label></div>
                                          </div>
                                      </div><br><br>
                                      <div class="row">
                                          <div class="col-12">
                                            <div class="col col-md-12"><label for="disabled-input" class=" form-control-label">Bersama ini mengajukan permohonan Kartu Siswa Prasejahtera <br>untuk anak kami :</label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: <?php echo $item['namaSiswa']; ?></label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIS</label></div>
                                              <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: <?php echo $item['nis']; ?></label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelas/Jurusan</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: <?php echo $item['psCode']; ?></label></div>
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
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: Rp. <?php echo $item['pengajuanSpp']; ?></label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keringanan  / Penundaan SBPP</label></div>
                                            <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: Rp. <?php echo $item['pengajuanSbpp']; ?></label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lain - lain</label></div>
                                              <div class="col-12 col-md-9"><label for="disabled-input" class=" form-control-label">: <?php echo $item['lain']; ?></label></div>
                                          </div>
                                      </div>

                                      <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Form</strong><small> Survey beasiswa Karsa</small></div>
                      <div class="card-body card-block">
                        <div class="form-group"><label for="company" class=" form-control-label">Yang bekerja dalam satu keluarga ...</label>
                          <!-- <select data-placeholder="Pilih salah satu ..." class="standardSelect" tabindex="1" name="krit1" id="krit1" onkeyup="sum();">
                                    <option value="asd"></option>
                                    <option value="5">Kakak Saudara</option>
                                    <option value="4">Bapak</option>
                                    <option value="3">Ibu</option>
                                    <option value="2">Bapak & Ibu</option>
                                    <option value="1">Bapak, Ibu & Kakak</option>
                          </select> -->
                          <input type="text" name="krit1" value="" class="form-control" id="krit1" onkeyup="sum();" />
                        </div>
                        <div class="form-group"><label for="company" class=" form-control-label">Penghasilan total setiap bulan ...</label>
                          <!-- <select data-placeholder="Pilih salah satu ..." class="standardSelect" tabindex="1" name="krit2" id="krit2" onkeyup="sum();">
                                    <option value=""></option>
                                    <option value="5">Rp. 1.000.000 ke bawah</option>
                                    <option value="4">Rp. 1.000.000 - Rp. 2.000.000</option>
                                    <option value="3">Rp. 2.000.000 - Rp. 3.000.000</option>
                                    <option value="2">Rp. 3.000.000 - Rp. 4.000.000</option>
                                    <option value="1">Rp. 4.000.000 - Rp. 5.000.000</option>  
                          </select> -->
                          <input type="text" name="krit2" value="" class="form-control" id="krit2" onkeyup="sum();" />
                        </div>
                        <div class="form-group"><label for="company" class=" form-control-label">Status kepemilikan rumah / tanah ...</label>
                          <!-- <select data-placeholder="Pilih salah satu ..." class="standardSelect" tabindex="1" name="krit3" id="krit3" onkeyup="sum();">
                                    <option value=""></option>
                                    <option value="5">Hibah / Suruh merawat rumah milik orang lain</option>
                                    <option value="4">Ikut Keluarga</option>
                                    <option value="3">Sewa</option>
                                    <option value="2">Warisan</option>
                                    <option value="1">Beli Sendiri</option>
                          </select> -->
                          <input type="text" name="krit3" value="" class="form-control" id="krit3" onkeyup="sum();" />
                        </div>
                        <div class="form-group"><label for="company" class=" form-control-label">Struktur bangunan rumah ...</label>
                          <!-- <select data-placeholder="Pilih salah satu ..." class="standardSelect" tabindex="1" name="krit4" id="krit4" onkeyup="sum();">
                                    <option value=""></option>
                                    <option value="5">Gedeg</option>
                                    <option value="4">Triplex</option>
                                    <option value="3">setengah tembok</option>
                                    <option value="2">Tembok</option>
                                    <option value="1">2 Lantai</option>
                                   
                          </select> -->
                          <input type="text" name="krit4" value="" class="form-control" id="krit4" onkeyup="sum();" />
                        </div>
                        <div class="form-group"><label for="company" class=" form-control-label">Jenis lantai yang dipergunakan ...</label>
                          <!-- <select data-placeholder="Pilih salah satu ..." class="standardSelect" tabindex="1" name="krit5" id="krit5" onkeyup="sum();">
                                    <option value=""></option>
                                    <option value="5">Tanah</option>
                                    <option value="4">Ubin / Tegel</option>
                                    <option value="3">Keramik sederhana</option>
                                    <option value="2">Keramik bagus</option>
                                    <option value="1">Granit</option>
                                   
                          </select> -->
                          <input type="text" name="krit5" value="" class="form-control" id="krit5" onkeyup="sum();" />
                        </div>
                        <div class="form-group"><label for="company" class=" form-control-label">Model ruangan rumah ...</label>
                          <!-- <select data-placeholder="Pilih salah satu ..." class="standardSelect" tabindex="1" name="krit6" id="krit6" onkeyup="sum();">
                                    <option value=""></option>
                                    <option value="5">Satu ruangan</option>
                                    <option value="4">Dua ruangan</option>
                                    <option value="3">Tiga ruangan sederhana</option>
                                    <option value="2">Tiga ruangan rapi dan bersih</option>
                                    <option value="1">Tiga ruangan lebih</option>
                                   
                          </select> -->
                          <input type="text" name="krit6" value="" class="form-control" id="krit6" onkeyup="sum();" />
                        <div class="form-group"><label for="company" class=" form-control-label">Pemakaian listrik rumah ...</label>
                          <!-- <select data-placeholder="Pilih salah satu ..." class="standardSelect" tabindex="1" name="krit7" id="krit7" onkeyup="sum();">
                                    <option value=""></option>
                                    <option value="5">Penggunaan listrik menyambungkan dengan milik keluarga</option>
                                    <option value="4">450 KVA.</option>
                                    <option value="3">900 KVA.</option>
                                    <option value="2">1300 KVA.</option>
                                    <option value="1">2200 KVA.</option>
                                   
                          </select> -->
                          <input type="text" name="krit7" value="" class="form-control" id="krit7" onkeyup="sum();" />
                        </div>
                        <div class="form-group"><label for="company" class=" form-control-label">Jenis / speda motor yang dimiliki ...</label>
                          <!-- <select data-placeholder="Pilih salah satu ..." class="standardSelect" tabindex="1" name="krit8" id="krit8" onkeyup="sum();">
                                    <option value=""></option>
                                    <option value="5">Tidak punya</option>
                                    <option value="4">Punya, usia > 10 tahun</option>
                                    <option value="3">Punya, usia <= 10 Tahun dan >= 5 Tahun</option>
                                    <option value="2">Punya, usia < 5 Tahun</option>
                                    <option value="1">Lebih dari 1 sepeda motor / mobil</option>
                                   
                          </select> -->
                          <input type="text" name="krit8" value="" class="form-control" id="krit8" onkeyup="sum();" />
                        </div>
                        <div class="form-group"><label for="company" class=" form-control-label">Jenis televisi yang digunakan ...</label>
                          <!-- <select data-placeholder="Pilih salah satu ..." class="standardSelect" tabindex="1" name="krit9" id="krit9" onkeyup="sum();">
                                    <option value=""></option>
                                    <option value="5">Tidak punya</option>
                                    <option value="4">Televisi model lama</option>
                                    <option value="3">Televisi LED</option>
                                    <option value="2">Televisi LED Besar</option>
                                    <option value="1">Mempunyai lebih dari 1 televisi</option>
                                   
                          </select> -->
                          <input type="text" name="krit9" value="" class="form-control" id="krit9" onkeyup="sum();" />
                        </div>
                        <div class="form-group"><label for="company" class=" form-control-label">HP yang dimiliki dalam 1 keluarga ...</label>
                          <!-- <select data-placeholder="Pilih salah satu ..." class="standardSelect" tabindex="1" name="krit10" id="krit10" onkeyup="sum();">
                                    <option value=""></option>
                                    <option value="5">Tidak punya</option>
                                    <option value="4">Punya model lama (bukan android)</option>
                                    <option value="3">Punya model android</option>
                                    <option value="2">Memiliki HP / Tablet</option>
                                    <option value="1">Memiliki HP / Tablet / Laptop</option>
                                   
                          </select> -->
                          <input type="text" name="krit10" value="" class="form-control" id="krit10" onkeyup="sum();" />
                                   
                          <!-- <input type="text" name="nilai" value="" class="form-control" id="krit12" onkeyup="sum();" />
                          <input type="text" name="nilai" value="" class="form-control" id="krit13" onkeyup="sum();" /> -->
                          <input type="text" name="survey" value="" class="form-control" id="krit12" onkeyup="sum();" />
                          <input type="text" name="nilai" value="" class="form-control" id="krit11" >
                          <!-- <input type="text" name="survey" value="" class="form-control" id="krit12" onkeyup="sum();" /> -->
                          <input type="text" name="totalKelayakan" value="" class="form-control" id="krit13" >
                          <input type="hidden" name="kategori" value="" class="form-control" disabled="">
                          <input type="hidden" name="disetujuiSpp" value="" class="form-control" disabled="">
                          <input type="hidden" name="disetujuiSbpp" value="" class="form-control" disabled="">


                        </div>
                        
                      </div>
                    </div>
                  </div>

                  </div>
                                      <br><br>  
                                      <?php } ?>
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