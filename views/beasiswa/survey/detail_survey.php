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
                        <h1>Form Hasil Survey Beasiswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Beasiswa</a></li>
                            <li class="active">Form Hasil Survey Beasiswa</li>
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
                            <strong class="card-title">Form </strong> Hasil Survey Beasiswa
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/beasiswa/survey/proses.php?aksi=tambah" method="post" class="form-horizontal">
                                  
                                      <div class="card-body">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="pills-home" aria-selected="true">Form 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="pills-profile" aria-selected="false">Form 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#contact" role="tab" aria-controls="pills-contact" aria-selected="false">Form 3</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pl-3 p-1" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                      <div class="card-header"><strong>Pengajuan</strong><small> beasiswa Karsa</small></div>
                                                      <div class="card-body card-block">
                                                        
                                                        <?php
                                                          foreach ($beasiswa->getDetailsurvey($_GET['nis']) as $item) {
                                                        ?>


                                                        <div class="form-group">
                                                          <label for="company" class=" form-control-label">Beasiswa ini diajukan pada tahun ajaran :</label><br>
                                                          <label for="company" class=" form-control-label"><?php echo $item['thnAjaran']; ?></label>
                                                        </div><br>

                                                        


                                                        <div class="form-group">
                                                          <label for="disabled-input" class=" form-control-label"><b>Yang bertanda tangan di bawah ini wali siswa :</b></label>
                                                        </div>

                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <?php echo $item['idBea']; ?></label>
                                                          <input type="hidden" name="idBeasiswa" value="<?php echo $item['idBea']; ?>" />
                                                          <input type="hidden" name="idBea" value="<?php echo $item['idBea']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <?php echo $item['namaWali']; ?></label>
                                                          <input type="hidden" name="namaWali" value="<?php echo $item['namaWali']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <?php echo $item['alamatWali']; ?></label>
                                                          <input type="hidden" name="alamatWali" value="<?php echo $item['alamatWali']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. HP</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <?php echo $item['noHPWali']; ?></label>
                                                          <input type="hidden" name="noHPWali" value="<?php echo $item['noHPWali']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <?php echo $item['pekerjaanWali']; ?></label>
                                                          <input type="hidden" name="pekerjaanWali" value="<?php echo $item['pekerjaanWali']; ?>" />
                                                        </div>
                                                        <div class="form-group"> 
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <?php echo $item['penghasilanWali']; ?></label>
                                                          <input type="hidden" name="penghasilanWali" value="<?php echo $item['penghasilanWali']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="disabled-input" class=" form-control-label"><b>Bersama ini mengajukan permohonan Kartu Siswa Prasejahtera untuk anak kami :</b></label>
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <?php echo $item['namaSiswa']; ?></label>
                                                          <input type="hidden" name="namaSiswa" value="<?php echo $item['namaSiswa']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIS</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <?php echo $item['nis']; ?></label>
                                                          <input type="hidden" name="nis" value="<?php echo $item['nis']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelas/Jurusan</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <?php echo $item['kelas']; ?></label>
                                                          <!-- <input type="hidden" name="" value="<?php echo $item['psCode']; ?>" /> -->
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="disabled-input" class=" form-control-label"><b>Untuk Kategori pengajuan :</b></label>
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pengajuan SPP</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: Rp. <?php echo $item['pengajuanSpp']; ?></label>
                                                          <input type="hidden" name="keringananSpp" value="<?php echo $item['pengajuanSpp']; ?>" />
                                                        </div><br>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pengajuan SBPP</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: Rp. <?php echo $item['pengajuanSbpp']; ?></label>
                                                          <input type="hidden" name="keringananSbpp" value="<?php echo $item['pengajuanSbpp']; ?>" />
                                                        </div><br>
                                                        <div class="form-group">
                                                          <label for="disabled-input" class=" form-control-label"><b>Hasil Penilaian Beasiswa Berdasarkan Survey :</b></label>
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SPP disetujui</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: Rp. 
                                                            <?php 
                                                            if (($item['kategori']) == "K1") {
                                                              echo "Semampunya"; 
                                                            }else if (($item['kategori']) == "K2") {
                                                              echo $item['disetujuiSpp1'];
                                                            }else if (($item['kategori']) == "K3") {
                                                              echo $item['disetujuiSpp2'];
                                                            }else if (($item['kategori']) == "K4") {
                                                              echo $item['disetujuiSpp3'];
                                                            }else {
                                                              echo $item['keringananSpp']." (Tetap)";
                                                            }
                                                            ?>
                                                          </label>
                                                        </div><br>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SBPP disetujui</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: Rp. 
                                                            <?php 
                                                            if (($item['kategori']) == "K1") {
                                                              echo "Semampunya"; 
                                                            }else if (($item['kategori']) == "K2") {
                                                              echo $item['disetujuiSbpp1'];
                                                            }else if (($item['kategori']) == "K3") {
                                                              echo $item['disetujuiSbpp2'];
                                                            }else if (($item['kategori']) == "K4") {
                                                              echo $item['disetujuiSbpp3'];
                                                            }else {
                                                              echo $item['keringananSbpp']." (Tetap)";
                                                            }
                                                            ?>
                                                          </label>
                                                        </div><br>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Total Kelayakan</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <?php echo $item['totalKelayakan']; ?></label>
                                                          <input type="hidden" name="keringananSpp" value="<?php echo $item['totalKelayakan']; ?>" />
                                                        </div><br>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kategori</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <b><?php echo $item['kategori']; ?></b></label>
                                                          <input type="hidden" name="keringananSbpp" value="<?php echo $item['kategoriSbpp']; ?>" />
                                                        </div>

                                                        
                                                        <?php } ?>
                                                        
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                  <div class="card">
                                                    <div class="card-header"><strong>Form</strong><small> Survey beasiswa Karsa</small></div>
                                                    <div class="card-body card-block">
                                                      <div class="form-group"><label for="company" class=" form-control-label">Yang bekerja dalam satu keluarga ...</label><br>
                                                        <label for="company" class=" form-control-label">
                                                          <?php
                                                          if (($item['krit1']) == "1") {
                                                            echo "Bapak, Ibu & Kakak";
                                                          }elseif (($item['krit1']) == "2") {
                                                            echo "Bapak & Ibu";
                                                          }elseif (($item['krit1']) == "3") {
                                                            echo "Ibu";
                                                          }elseif (($item['krit1']) == "4") {
                                                            echo "Bapak";
                                                          }else {
                                                            echo "Kakak Saudara";
                                                          }?>
                                                        </label>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Penghasilan total setiap bulan ...</label><br>
                                                        <label for="company" class=" form-control-label">
                                                          <?php
                                                          if (($item['krit2']) == "5") {
                                                            echo "Rp. 1.000.000 ke bawah";
                                                          }elseif (($item['krit2']) == "4") {
                                                            echo "Rp. 1.000.000 - Rp. 2.000.000";
                                                          }elseif (($item['krit2']) == "3") {
                                                            echo "Rp. 2.000.000 - Rp. 3.000.000";
                                                          }elseif (($item['krit2']) == "2") {
                                                            echo "Rp. 3.000.000 - Rp. 4.000.000";
                                                          }else {
                                                            echo "Rp. 4.000.000 - Rp. 5.000.000";
                                                          }?>
                                                        </label>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Status kepemilikan rumah / tanah ...</label><br>
                                                        <label for="company" class=" form-control-label">
                                                          <?php
                                                          if (($item['krit3']) == "5") {
                                                            echo "Hibah / Suruh merawat rumah milik orang lain";
                                                          }elseif (($item['krit3']) == "4") {
                                                            echo "Ikut Keluarga";
                                                          }elseif (($item['krit3']) == "3") {
                                                            echo "Sewa";
                                                          }elseif (($item['krit3']) == "2") {
                                                            echo "Warisan";
                                                          }else {
                                                            echo "Beli Sendiri";
                                                          }?>
                                                        </label>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Struktur bangunan rumah ...</label><br>
                                                        <label for="company" class=" form-control-label">
                                                          <?php
                                                          if (($item['krit4']) == "5") {
                                                            echo "Gedeg";
                                                          }elseif (($item['krit4']) == "4") {
                                                            echo "Triplex";
                                                          }elseif (($item['krit4']) == "3") {
                                                            echo "setengah tembok";
                                                          }elseif (($item['krit4']) == "2") {
                                                            echo "Tembok";
                                                          }else {
                                                            echo "2 Lantai";
                                                          }?>
                                                        </label>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Jenis lantai yang dipergunakan ...</label><br>
                                                        <label for="company" class=" form-control-label">
                                                          <?php
                                                          if (($item['krit5']) == "5") {
                                                            echo "Tanah";
                                                          }elseif (($item['krit5']) == "4") {
                                                            echo "Ubin / Tegel";
                                                          }elseif (($item['krit5']) == "3") {
                                                            echo "Keramik sederhana";
                                                          }elseif (($item['krit5']) == "2") {
                                                            echo "Keramik bagus";
                                                          }else {
                                                            echo "Granit";
                                                          }?>
                                                        </label>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Model ruangan rumah ...</label><br>
                                                        <label for="company" class=" form-control-label">
                                                          <?php
                                                          if (($item['krit6']) == "5") {
                                                            echo "Satu ruangan";
                                                          }elseif (($item['krit6']) == "4") {
                                                            echo "Dua ruangan";
                                                          }elseif (($item['krit6']) == "3") {
                                                            echo "Tiga ruangan sederhana";
                                                          }elseif (($item['krit6']) == "2") {
                                                            echo "Tiga ruangan rapi dan bersih";
                                                          }else {
                                                            echo "Tiga ruangan lebih";
                                                          }?>
                                                        </label>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Pemakaian listrik rumah ...</label><br>
                                                        <label for="company" class=" form-control-label">
                                                          <?php
                                                          if (($item['krit7']) == "5") {
                                                            echo "Penggunaan listrik menyambungkan dengan milik keluarga";
                                                          }elseif (($item['krit7']) == "4") {
                                                            echo "450 KVA.";
                                                          }elseif (($item['krit7']) == "3") {
                                                            echo "900 KVA.";
                                                          }elseif (($item['krit7']) == "2") {
                                                            echo "1300 KVA.";
                                                          }else {
                                                            echo "2200 KVA.";
                                                          }?>
                                                        </label>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Jenis / speda motor yang dimiliki ...</label><br>
                                                        <label for="company" class=" form-control-label">
                                                          <?php
                                                          if (($item['krit8']) == "5") {
                                                            echo "Tidak punya";
                                                          }elseif (($item['krit8']) == "4") {
                                                            echo "Punya, usia > 10 tahun";
                                                          }elseif (($item['krit8']) == "3") {
                                                            echo "Punya, usia <= 10 Tahun dan >= 5 Tahun";
                                                          }elseif (($item['krit8']) == "2") {
                                                            echo "Punya, usia < 5 Tahun";
                                                          }else {
                                                            echo "Lebih dari 1 sepeda motor / mobil";
                                                          }?>
                                                        </label>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Jenis televisi yang digunakan ...</label><br>
                                                        <label for="company" class=" form-control-label">
                                                          <?php
                                                          if (($item['krit9']) == "5") {
                                                            echo "Tidak punya";
                                                          }elseif (($item['krit9']) == "4") {
                                                            echo "Televisi model lama";
                                                          }elseif (($item['krit9']) == "3") {
                                                            echo "Televisi LED";
                                                          }elseif (($item['krit9']) == "2") {
                                                            echo "Televisi LED Besar";
                                                          }else {
                                                            echo "Mempunyai lebih dari 1 televisi";
                                                          }?>
                                                        </label>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">HP yang dimiliki dalam 1 keluarga ...</label><br>
                                                        <label for="company" class=" form-control-label">
                                                          <?php
                                                          if (($item['krit10']) == "5") {
                                                            echo "Tidak punya";
                                                          }elseif (($item['krit10']) == "4") {
                                                            echo "Punya model lama (bukan android)";
                                                          }elseif (($item['krit10']) == "3") {
                                                            echo "Punya model android";
                                                          }elseif (($item['krit10']) == "2") {
                                                            echo "Memiliki HP / Tablet";
                                                          }else {
                                                            echo "Memiliki HP / Tablet / Laptop";
                                                          }?>
                                                        </label>
                                                      </div>
                                                      
                                                    </div>
                                                  </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                
                                                <div class="col-lg-12">
                                                  <div class="card">
                                                    <div class="card-header"><strong>Form</strong><small> Survey beasiswa Karsa</small></div>
                                                    <div class="card-body card-block">
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Kondisi rumah secara umum</label></div>
                                                          <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">: <?php echo $item['essay1']; ?></label></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Kemampuan verbal orangtua dalam menjawab pertanyaan</label></div>
                                                          <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">: <?php echo $item['essay2']; ?></label></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Lain - lain</label></div>
                                                          <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">: <?php echo $item['essay3']; ?></label></div>
                                                      </div>                      
                                                    </div>
                                                  </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                
                                                <div class="col-lg-12">
                                                  <div class="card">
                                                    <div class="card-header"><strong>Form</strong><small> Survey beasiswa Karsa</small></div>
                                                    <div class="card-body card-block">
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Sumber pemasukan utama</label></div>
                                                          <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">: <?php echo $item['essay4']; ?></label></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Jumlah tanggungan keluraga</label></div>
                                                          <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">: <?php echo $item['essay5']; ?></label></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Status rumah</label></div>
                                                          <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">: <?php echo $item['essay6']; ?></label></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Penghasilan total perbulan</label></div>
                                                          <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">: <?php echo $item['essay7']; ?></label></div>
                                                      </div>                      
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Konsumsi listrik</label></div>
                                                          <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">: <?php echo $item['essay8']; ?></label></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Alasan pertama orang tua  mempercayakan SMKN 2 Malang sebagai sekolah putra/i nya</label></div>
                                                          <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">: <?php echo $item['essay9']; ?></label></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Nilai Survey</label></div>
                                                          <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">: <?php echo $item['survey']; ?></label></div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                            </div>
                                        </div>
                                      </div>



                                      
                                      
                            </div>
                            </div>
                            </div>

                            

                      
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  