<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Absensi.php");
$sms = new sendSMS();

?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>


<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>SMS Gateway</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">SMS</a></li>
                            <li class="active">Form SMS Gateway</li>
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
                            <strong class="card-title">Form </strong>SMS Gateway
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
        
			
			<form method="post" action="<?php echo $siteurl; ?>/views/absensi/absensisiswa/proseskirimsms.php?aksi=tambah">
								<?php
                                    foreach ($sms->getsms($_GET['nis']) as $item) {
                                  ?>

 									

                      <div class="card-body card-block">
                       
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static">&nbsp<?php echo $item['namaSiswa']; ?></p>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Kelas</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static">&nbsp<?php echo $item['nama_kelas']; ?></p>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nomor Hp Orang Tua</label></div>
                            <div class="col-12 col-md-7">
                            <input type="text" id="disabled-input" name="notujuan" class="form-control" value="<?php echo $item['telepon']; ?>" readonly></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Pesan</label></div>
                            <div class="col-12 col-md-7">
                            <textarea name="pesan" rows="9" 
                            placeholder="" class="form-control"readonly>SMKN 2 Malang memberitahukan bahwa saudara <?php echo $item['namaSiswa']; ?> meninggalkan kelas karena alpha sebanyak <?php echo $item['total']; ?> Kali. Oleh karena itu anda dipanggil untuk bertemu dengan BK sesuai surat yang kita berikan</textarea>
                            
                            </div>
                          </div>
                          
                          </div>
                          </div>
                      <div class="card-footer">
                      <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-envelope-o"></i> Kirim SMS
                      </button>
                      
                      <?php } ?>
                   </form>


<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  
