<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/nilaiharian.php");
$penilaian = new nilaiharian();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Form Nilai Harian</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="transkrip_nilai.php">Nilai Harian</a></li>
                            <li class="active">Form Edit Nilai Harian</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        </div>
                      <div class="card-body card-block">                        
                 <div class="col-11">
                  <div class="row form-group">
                         <form action="<?php echo $siteurl; ?>/views/nilai/proses_nilai.php?aksi=update" method="post">
                                <?php
                                    foreach ($penilaian->getdata($_GET['id']) as $item) {
                                  ?>
                                <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">ID Nilai</label>
                          </div>
                          <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="id" value="<?= $item['id']; ?>" class="form-control" readonly></div>
                        </div>
                          <div class="row form-group">
                          <div class="col col-md-3">
                            
                            <label for="text-input" class=" form-control-label">NIS</label>
                          </div>
                          <div class="col-12 col-md-9">
                            <input type="number" id="NIS" name="NIS" placeholder="NIS" class="form-control" value="<?= $item['NIS']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Kode Mata Pelajaran</label>
                          </div>
                         <div class="col-12 col-md-9">
                          <input type="text" id="id_mapel" name="id_mapel" placeholder="id_mapel" class="form-control" value="<?= $item['id_mapel']; ?>"></input>
                           <div class="col-12 col-md-9">
                            
                           
                          </div>
                      </div>
                  </div>
                          <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nilai Latihan</label>
                          </div>
                            <div class="col-12 col-md-9">
                              <input type="number" id="Nilai_Latihan" name="Nilai_Latihan" placeholder="Nilai_Latihan" class="form-control" value="<?= $item['Nilai_Latihan']; ?>"></input>
                              </div>
                          </div>
                          <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nilai Tugas</label>
                          </div>
                            <div class="col-12 col-md-9">
                            <input type="number" id="Nilai_Tugas" name="Nilai_Tugas" placeholder="Nilai_Tugas" class="form-control" value="<?= $item['Nilai_Tugas']; ?>"></input>
                              </div>
                          </div>
                          <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nilai Kuis</label>
                          </div>
                            <div class="col-12 col-md-9">
                            <input type="number" id="Nilai_Kuis" name="Nilai_Kuis" placeholder="Nilai_Kuis" class="form-control" value="<?= $item['Nilai_Kuis']; ?>"></input>
                              </div>
                          </div>
                          <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nilai UTS</label>
                          </div>
                            <div class="col-12 col-md-9">
                            <input type="number" id="Nilai_UTS" name="Nilai_UTS" placeholder="Nilai_UTS" class="form-control" value="<?= $item['Nilai_UTS']; ?>"></input>
                              </div>
                          </div>
                          <div class="row form-group">
                          <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nilai UAS</label>
                          </div>
                            <div class="col-12 col-md-9">
                            <input type="number" id="Nilai_Kuis" name="Nilai_UAS" placeholder="Nilai_UAS" class="form-control" value="<?= $item['Nilai_UAS']; ?>"></input>
                              </div>
                          </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label for="text-input" class=" form-control-label">Konversi Nilai<label></div>
                <div class="col-12 col-md-9">
                  <input type="text" id="convert_nilai" name="convert_nilai" placeholder="Konversi Nilai" class="form-control" value="<?= $item['convert_nilai']; ?>"></div>
                </div>
<?php } ?>
                <br><br>

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        Silahkan <strong>Klik</strong> tombol <strong>Simpan</strong> di bawah ini jika telah mengisi semua form dengan benar.
                      </div>
                      <div class="card-footer">
                      <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan Perubahan
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                    </div>
                    </div>
                    </div></form>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>