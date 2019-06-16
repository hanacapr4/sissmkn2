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
                                                        
                                                        <div class="form-group">
                                                          <label for="company" class=" form-control-label">Beasiswa ini diajukan pada tahun ajaran :</label>
                                                          <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="thnAjaran">
                                                                    <?php 
                                                                      foreach($beasiswa->thnajaran() as $item){
                                                                    ?>
                                                                    <option value="<?php echo $item['thnAjaran']; ?> (<?php echo $item['semester']; ?>)"><?php echo $item['thnAjaran']; ?> (<?php echo $item['semester']; ?>)</option>
                                                                    <?php } ?>
                                                          </select>
                                                        </div><br>

                                                        <?php
                                                          foreach ($beasiswa->showgetDetailaju($_GET['idBea']) as $item) {
                                                        ?>


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
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SPP</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: Rp. <?php echo $item['pengajuanSpp']; ?></label>
                                                          <input type="hidden" name="keringananSpp" value="<?php echo $item['pengajuanSpp']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SBPP</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: Rp. <?php echo $item['pengajuanSbpp']; ?></label>
                                                          <input type="hidden" name="keringananSbpp" value="<?php echo $item['pengajuanSbpp']; ?>" />
                                                        </div>
                                                        <!-- <div class="form-group">
                                                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lain - lain</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: <?php echo $item['lain']; ?></label>
                                                        </div> -->
                                                        <?php } ?>
                                                        
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                  <div class="card">
                                                    <div class="card-header"><strong>Form</strong><small> Survey beasiswa Karsa</small></div>
                                                    <div class="card-body card-block">
                                                      <div class="form-group"><label for="company" class=" form-control-label">Yang bekerja dalam satu keluarga ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit1">
                                                                  <option value=""></option>
                                                                  <option value="5">Kakak Saudara</option>
                                                                  <option value="4">Bapak</option>
                                                                  <option value="3">Ibu</option>
                                                                  <option value="2">Bapak & Ibu</option>
                                                                  <option value="1">Bapak, Ibu & Kakak</option>
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Penghasilan total setiap bulan ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit2">
                                                                  <option value=""></option>
                                                                  <option value="5">Rp. 1.000.000 ke bawah</option>
                                                                  <option value="4">Rp. 1.000.000 - Rp. 2.000.000</option>
                                                                  <option value="3">Rp. 2.000.000 - Rp. 3.000.000</option>
                                                                  <option value="2">Rp. 3.000.000 - Rp. 4.000.000</option>
                                                                  <option value="1">Rp. 4.000.000 - Rp. 5.000.000</option>  
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Status kepemilikan rumah / tanah ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit3">
                                                                  <option value=""></option>
                                                                  <option value="5">Hibah / Suruh merawat rumah milik orang lain</option>
                                                                  <option value="4">Ikut Keluarga</option>
                                                                  <option value="3">Sewa</option>
                                                                  <option value="2">Warisan</option>
                                                                  <option value="1">Beli Sendiri</option>
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Struktur bangunan rumah ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit4">
                                                                  <option value=""></option>
                                                                  <option value="5">Gedeg</option>
                                                                  <option value="4">Triplex</option>
                                                                  <option value="3">setengah tembok</option>
                                                                  <option value="2">Tembok</option>
                                                                  <option value="1">2 Lantai</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Jenis lantai yang dipergunakan ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit5">
                                                                  <option value=""></option>
                                                                  <option value="5">Tanah</option>
                                                                  <option value="4">Ubin / Tegel</option>
                                                                  <option value="3">Keramik sederhana</option>
                                                                  <option value="2">Keramik bagus</option>
                                                                  <option value="1">Granit</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Model ruangan rumah ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit6">
                                                                  <option value=""></option>
                                                                  <option value="5">Satu ruangan</option>
                                                                  <option value="4">Dua ruangan</option>
                                                                  <option value="3">Tiga ruangan sederhana</option>
                                                                  <option value="2">Tiga ruangan rapi dan bersih</option>
                                                                  <option value="1">Tiga ruangan lebih</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Pemakaian listrik rumah ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit7">
                                                                  <option value=""></option>
                                                                  <option value="5">Penggunaan listrik menyambungkan dengan milik keluarga</option>
                                                                  <option value="4">450 KVA.</option>
                                                                  <option value="3">900 KVA.</option>
                                                                  <option value="2">1300 KVA.</option>
                                                                  <option value="1">2200 KVA.</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Jenis / speda motor yang dimiliki ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit8">
                                                                  <option value=""></option>
                                                                  <option value="5">Tidak punya</option>
                                                                  <option value="4">Punya, usia > 10 tahun</option>
                                                                  <option value="3">Punya, usia <= 10 Tahun dan >= 5 Tahun</option>
                                                                  <option value="2">Punya, usia < 5 Tahun</option>
                                                                  <option value="1">Lebih dari 1 sepeda motor / mobil</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Jenis televisi yang digunakan ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit9">
                                                                  <option value=""></option>
                                                                  <option value="5">Tidak punya</option>
                                                                  <option value="4">Televisi model lama</option>
                                                                  <option value="3">Televisi LED</option>
                                                                  <option value="2">Televisi LED Besar</option>
                                                                  <option value="1">Mempunyai lebih dari 1 televisi</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">HP yang dimiliki dalam 1 keluarga ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit10">
                                                                  <option value=""></option>
                                                                  <option value="5">Tidak punya</option>
                                                                  <option value="4">Punya model lama (bukan android)</option>
                                                                  <option value="3">Punya model android</option>
                                                                  <option value="2">Memiliki HP / Tablet</option>
                                                                  <option value="1">Memiliki HP / Tablet / Laptop</option>
                                                                 
                                                        </select>
                                                      </div>
                                                      
                                                    </div>
                                                  </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                
                                                <div class="col-lg-12">
                                                  <div class="card">
                                                    <div class="card-header"><strong>Form</strong><small> Hasil Survey beasiswa Karsa</small></div>
                                                    <div class="card-body card-block">
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Kondisi rumah secara umum</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay1" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Kemampuan verbal orangtua dalam menjawab pertanyaan</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay2" id="textarea-input" rows="6" placeholder="Keterangan ..." class="form-control"></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Lain - lain</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay3" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"></textarea></div>
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
                                                          <div class="col-12 col-md-9"><textarea name="essay4" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Jumlah tanggungan keluraga</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay5" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Status rumah</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay6" id="textarea-input" rows="3" placeholder="Keterangan (Kontrak / Milik ortu / warisan / milik sendiri) ..." class="form-control"></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Penghasilan total perbulan</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay7" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"></textarea></div>
                                                      </div>                      
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Konsumsi listrik</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay8" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Alasan pertama orang tua  mempercayakan SMKN 2 Malang sebagai sekolah putra/i nya</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay9" id="textarea-input" rows="5" placeholder="Keterangan ..." class="form-control"></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Nilai Survey</label></div>
                                                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="survey" class="form-control" placeholder="contoh : 60"><small class="help-block form-text" style="color:red">Isi dengan nilai 1 - 100 dan tanpa menggunakan simbol, contoh : <b>60</b></small></div>
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

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm float-right" style="margin-left:10px">
                              <i class="fa fa-dot-circle-o"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm float-right">
                              <i class="fa fa-ban"></i> Reset
                            </button>
                            </div>

                      
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  