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
                                  <form action="<?php echo $siteurl; ?>/views/beasiswa/survey/proses.php?aksi=edit" method="post" class="form-horizontal">
                                  
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
                                                                      foreach ($beasiswa->getDetailsurvey($_GET['nis']) as $item) {
                                                                    ?>
                                                                    <option value="<?php echo $item['thnAjaran']; ?>"><?php echo $item['thnAjaran']; ?></option>
                                                                    <?php } ?>

                                                                    <?php
                                                                      foreach($beasiswa->thnajaran() as $item){
                                                                    ?>
                                                                    <option value="<?php echo $item['thnAjaran']; ?> (<?php echo $item['semester']; ?>)"><?php echo $item['thnAjaran']; ?> (<?php echo $item['semester']; ?>)</option>
                                                                    <?php } ?>
                                                          </select>
                                                        </div><br>

                                                        
                                                        <?php
                                                          foreach ($beasiswa->getDetailsurvey($_GET['nis']) as $item) {
                                                        ?>

                                                        <div class="form-group">
                                                          <label for="disabled-input" class=" form-control-label"><b>Yang bertanda tangan di bawah ini wali siswa :</b></label>
                                                        </div>

                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: &nbsp;</label>
                                                          <input type="hidden" name="idBeasiswa" value="<?php echo $item['idBea']; ?>" />
                                                          <input type="text" name="idBea" value="<?php echo $item['idBea']; ?>" disabled/>
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: &nbsp;</label>
                                                          <input type="text" name="namaWali" value="<?php echo $item['namaWali']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: &nbsp;</label>
                                                          <input type="text" name="alamatWali" value="<?php echo $item['alamatWali']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. HP</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: &nbsp;</label>
                                                          <input type="text" name="noHPWali" value="<?php echo $item['noHPWali']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: &nbsp;</label>
                                                          <input type="text" name="pekerjaanWali" value="<?php echo $item['pekerjaanWali']; ?>" />
                                                        </div>
                                                        <div class="form-group"> 
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: &nbsp;</label>
                                                          <input type="text" name="penghasilanWali" value="<?php echo $item['penghasilanWali']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="disabled-input" class=" form-control-label"><b>Bersama ini mengajukan permohonan Kartu Siswa Prasejahtera untuk anak kami :</b></label>
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: &nbsp;</label>
                                                          <input type="text" name="namaSiswa" value="<?php echo $item['namaSiswa']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIS</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: &nbsp;</label>
                                                          <input type="text" name="nis" value="<?php echo $item['nis']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelas/Jurusan</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: &nbsp;</label>
                                                          <input type="text" name="" value="<?php echo $item['kelas']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="disabled-input" class=" form-control-label"><b>Untuk Kategori pengajuan :</b></label>
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SPP</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: Rp. &nbsp;</label>
                                                          <input type="text" name="keringananSpp" value="<?php echo $item['keringananSpp']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">SBPP</label></div>
                                                          <label for="disabled-input" class=" form-control-label">: Rp. &nbsp;</label>
                                                          <input type="text" name="keringananSbpp" value="<?php echo $item['keringananSbpp']; ?>" />
                                                        </div>
                                                        
                                                        
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                  <div class="card">
                                                    <div class="card-header"><strong>Form</strong><small> Survey beasiswa Karsa</small></div>
                                                    <div class="card-body card-block">
                                                      <div class="form-group"><label for="company" class=" form-control-label">Yang bekerja dalam satu keluarga ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit1">
                                                                  <option value="<?php echo $item['krit1']; ?>">
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
                                                                  </option>
                                                                  <option value="5">Kakak Saudara</option>
                                                                  <option value="4">Bapak</option>
                                                                  <option value="3">Ibu</option>
                                                                  <option value="2">Bapak & Ibu</option>
                                                                  <option value="1">Bapak, Ibu & Kakak</option>
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Penghasilan total setiap bulan ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit2">
                                                                  <option value="<?php echo $item['krit2']; ?>">
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
                                                                  </option>
                                                                  <option value="5">Rp. 1.000.000 ke bawah</option>
                                                                  <option value="4">Rp. 1.000.000 - Rp. 2.000.000</option>
                                                                  <option value="3">Rp. 2.000.000 - Rp. 3.000.000</option>
                                                                  <option value="2">Rp. 3.000.000 - Rp. 4.000.000</option>
                                                                  <option value="1">Rp. 4.000.000 - Rp. 5.000.000</option>  
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Status kepemilikan rumah / tanah ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit3">
                                                                  <option value="<?php echo $item['krit3']; ?>">
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
                                                                  </option>
                                                                  <option value="5">Hibah / Suruh merawat rumah milik orang lain</option>
                                                                  <option value="4">Ikut Keluarga</option>
                                                                  <option value="3">Sewa</option>
                                                                  <option value="2">Warisan</option>
                                                                  <option value="1">Beli Sendiri</option>
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Struktur bangunan rumah ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit4">
                                                                  <option value="<?php echo $item['krit4']; ?>">
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
                                                                  </option>
                                                                  <option value="5">Gedeg</option>
                                                                  <option value="4">Triplex</option>
                                                                  <option value="3">setengah tembok</option>
                                                                  <option value="2">Tembok</option>
                                                                  <option value="1">2 Lantai</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Jenis lantai yang dipergunakan ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit5">
                                                                  <option value="<?php echo $item['krit5']; ?>">
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
                                                                  </option>
                                                                  <option value="5">Tanah</option>
                                                                  <option value="4">Ubin / Tegel</option>
                                                                  <option value="3">Keramik sederhana</option>
                                                                  <option value="2">Keramik bagus</option>
                                                                  <option value="1">Granit</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Model ruangan rumah ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit6">
                                                                  <option value="<?php echo $item['krit6']; ?>">
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
                                                                  </option>
                                                                  <option value="5">Satu ruangan</option>
                                                                  <option value="4">Dua ruangan</option>
                                                                  <option value="3">Tiga ruangan sederhana</option>
                                                                  <option value="2">Tiga ruangan rapi dan bersih</option>
                                                                  <option value="1">Tiga ruangan lebih</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Pemakaian listrik rumah ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit7">
                                                                  <option value="<?php echo $item['krit7']; ?>">
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
                                                                  </option>
                                                                  <option value="5">Penggunaan listrik menyambungkan dengan milik keluarga</option>
                                                                  <option value="4">450 KVA.</option>
                                                                  <option value="3">900 KVA.</option>
                                                                  <option value="2">1300 KVA.</option>
                                                                  <option value="1">2200 KVA.</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Jenis / speda motor yang dimiliki ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit8">
                                                                  <option value="<?php echo $item['krit8']; ?>">
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
                                                                  </option>
                                                                  <option value="5">Tidak punya</option>
                                                                  <option value="4">Punya, usia > 10 tahun</option>
                                                                  <option value="3">Punya, usia <= 10 Tahun dan >= 5 Tahun</option>
                                                                  <option value="2">Punya, usia < 5 Tahun</option>
                                                                  <option value="1">Lebih dari 1 sepeda motor / mobil</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">Jenis televisi yang digunakan ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit9">
                                                                  <option value="<?php echo $item['krit9']; ?>">
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
                                                                  </option>
                                                                  <option value="5">Tidak punya</option>
                                                                  <option value="4">Televisi model lama</option>
                                                                  <option value="3">Televisi LED</option>
                                                                  <option value="2">Televisi LED Besar</option>
                                                                  <option value="1">Mempunyai lebih dari 1 televisi</option>
                                                                 
                                                        </select>
                                                      </div>

                                                      <div class="form-group"><label for="company" class=" form-control-label">HP yang dimiliki dalam 1 keluarga ...</label>
                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="krit10">
                                                                  <option value="<?php echo $item['krit10']; ?>">
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
                                                                  </option>
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
                                                    <div class="card-header"><strong>Form</strong><small> Survey beasiswa Karsa</small></div>
                                                    <div class="card-body card-block">
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Kondisi rumah secara umum</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay1" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"><?php echo $item['essay1']; ?></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Kemampuan verbal orangtua dalam menjawab pertanyaan</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay2" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"><?php echo $item['essay2']; ?></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Lain - lain</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay3" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"><?php echo $item['essay3']; ?></textarea></div>
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
                                                          <div class="col-12 col-md-9"><textarea name="essay4" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"><?php echo $item['essay4']; ?></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Jumlah tanggungan keluraga</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay5" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"><?php echo $item['essay5']; ?></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Status rumah</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay6" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"><?php echo $item['essay6']; ?></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Penghasilan total perbulan</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay7" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"><?php echo $item['essay7']; ?></textarea></div>
                                                      </div>                      
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Konsumsi listrik</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay8" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"><?php echo $item['essay8']; ?></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Alasan pertama orang tua  mempercayakan SMKN 2 Malang sebagai sekolah putra/i nya</label></div>
                                                          <div class="col-12 col-md-9"><textarea name="essay9" id="textarea-input" rows="3" placeholder="Keterangan ..." class="form-control"><?php echo $item['essay9']; ?></textarea></div>
                                                      </div>
                                                      <div class="row form-group">
                                                          <div class="col col-md-3"><label for="email-input" class=" form-control-label">Nilai Survey</label></div>
                                                          <div class="col-12 col-md-9"><input type="text" id="text-input" name="survey" class="form-control" value="<?php echo $item['survey']; ?>"><small class="help-block form-text" style="color:red">Isi dengan nilai 1 - 100 dan tanpa menggunakan simbol, contoh : <b>60</b></small></div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                            </div>
                                        </div>
                                      </div>
                                      <?php } ?>


                                      
                                      
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