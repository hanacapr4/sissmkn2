<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php");
$kesiswaan = new Kesiswaan();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Siswa Keluar</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Siswa Keluar</a></li>
                            <li class="active">Detail Siswa Keluar</li>
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
                            <strong class="card-title">Detail </strong>Siswa Keluar
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/siswa/siswakeluar/proses.php?aksi=tambah" method="post" class="form-horizontal">
                                  <?php
                                    foreach ($kesiswaan->getdetailakhirsiswa($_GET['nis']) as $item) {
                                  ?>
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">NIS</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nis" value="<?= $item['nis']; ?>" class="form-control" readonly></div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="nama" value="<?= $item['namaSiswa']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Keluar</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tglKeluar" value="<?= $item['tglKeluar']; ?>" class="form-control"></div>
                                             
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:12px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alasan Keluar</label></div>
                                              <div class="col-12 col-md-9">
                                                  <select name="alasan" data-placeholder="" id="account" class="standardSelect" tabindex="1" >
                                                      <option value="Lulus">Lulus</option>
                                                      <option value="Pindah">Pindah</option>
                                                      <option value="DO">DO</option>
                                                      <option value="Lainnya">Lainnya</option>
                                                  </select>
                                              </div>
                                            </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Ijazah</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disablea" name="noIjazah" value="<?= $item['noIjazah']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:12px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No SKHUN</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disableb" name="noSKHUN" value="<?= $item['noSKHUN']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Ijazah</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="disablec" value="<?= $item['tglIjazah']; ?>" name="tglIjazah" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal SKHUN</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="disabled" name="tglSKHUN" value="<?= $item['tglSKHUN']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Lulus</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="disablee" value="<?= $item['tahunLulus']; ?>" name="tahunLulus" class="form-control"></div>
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


    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  


    <script type="text/javascript">
      
      $('#account').on('change', function(){
    if($(this).val() === 'Lulus') {
      }
    else {

    $("#disablea").prop('readonly', true);
    $("#disableb").prop('readonly', true);
    $("#disablec").prop('readonly', true);
    $("#disabled").prop('readonly', true);
    $("#disablee").prop('readonly', true);
 }
   //check for other values
});

    </script>