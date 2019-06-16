<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Beasiswa.php");
$beasiswa = new Pengajuan();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

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
                            <strong class="card-title">Form </strong>Pengajuan Beasiswa Karsa
                        </div>
                        <div class="card-body">
                          <!-- Credit Card --> 
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/beasiswa/siswa/proses.php?aksi=tambah" method="post" class="form-horizontal" enctype="multipart/form-data">
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-12"><label for="disabled-input" class=" form-control-label">Yang bertanda tangan di bawah ini wali siswa :</label></div>
                                          </div>
                                      </div>

                                      

                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="idBea" value="<?php echo $beasiswa->kombinasi1(); ?><?php echo $item['nis']; ?>" class="form-control" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Ajaran</label></div>
                                            <div class="col-12 col-md-9">
                                                      <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="thnAjaran">
                                                                <option value='0' disabled="disabled" selected/>Pilih salah satu ...</option>
                                                                <?php 
                                                                  foreach($beasiswa->tampiltahunajaran() as $item){
                                                                ?>
                                                                <option value="<?php echo $item['thnAjaran']; ?> (<?php echo $item['semester']; ?>)"><?php echo $item['thnAjaran']; ?> (<?php echo $item['semester']; ?>)</option>
                                                                <?php } ?>
                                                      </select>
                                            </div>
                                          </div>
                                      </div>

                                      <?php
                                        foreach ($beasiswa->showgetDetailsiswa($_GET['nis']) as $item) {
                                      ?>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="namaWali" class="form-control" value="<?php echo $item['nama']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamatWali" class="form-control" value="<?php echo $item['alamat']; ?>"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. HP</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="noHPWali" class="form-control" value="<?php echo $item['telepon']; ?>"></div>
                                             
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="pekerjaanWali" class="form-control" value="<?php echo $item['pekerjaan']; ?>"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="penghasilanWali" class="form-control" value="<?php echo $item['penghasilan']; ?>"><small class="help-block form-text" style="color:red">Isi tanpa menggunakan simbol, contoh : <b>1000000</b></small></div>
                                          </div>
                                      </div><br><br>
                                      <div class="row">
                                          <div class="col-12">
                                            <div class="col col-md-12"><label for="disabled-input" class=" form-control-label">Bersama ini mengajukan permohonan Kartu Siswa Prasejahtera untuk anak kami :</label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="namaSiswa" class="form-control" value="<?php echo $item['namaSiswa']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIS</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nis" class="form-control" value="<?php echo $item['nis']; ?>"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jurusan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="psCode" class="form-control" value="<?php echo $item['kk']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelas</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kelas" class="form-control" value="<?php echo $item['nama_kelas']; ?>"><small class="help-block form-text" style="color:red">Contoh Pengisian : <b>10 TKJ 1</b></small></div>
                                          </div>
                                      </div><br><br>

                                      <?php } ?>

                                      <div class="row">
                                          <div class="col-12">
                                            <div class="col col-md-12"><label for="disabled-input" class=" form-control-label">Untuk Kategori :</label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keringanan / Penundaan SPP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="pengajuanSpp" class="form-control" placeholder="200000"><small class="help-block form-text" style="color:red">Isi tanpa menggunakan simbol, contoh : <b>200000</b></small></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keringanan  / Penundaan SBPP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="pengajuanSbpp" class="form-control" placeholder="1000000"><small class="help-block form-text" style="color:red">Isi tanpa menggunakan simbol, contoh : <b>1000000</b></small></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lain - lain</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="lain" class="form-control"><small class="help-block form-text" style="color:red">Tidak perlu diisi jika tidak ada.</small></div>
                                          </div>
                                      </div>
                                      <br><br>  
                                      <div class="row">
                                          <div class="col-12">
                                            <div class="col col-md-12"><label for="disabled-input" class=" form-control-label">Sebagai bahan pertimbangan berikut kami lampirkan :</label></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan SKTM</label></div>
                                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="sktm" class="form-control-file"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan KTP</label></div>
                                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="ktp" class="form-control-file"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan KK</label></div>
                                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="kk" class="form-control-file"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan KIP / KPS / KIS</label></div>
                                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="lain" class="form-control-file"></div>


                                            <input type="hidden" id="file-input" name="waktu" class="form-control-file" value="<?php echo $beasiswa->tampilwaktu(); ?>" readonly>
                                            <!-- <input type="text" id="file-input" name="thnAjaran" class="form-control-file" value="2018" readonly>  -->
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


    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  