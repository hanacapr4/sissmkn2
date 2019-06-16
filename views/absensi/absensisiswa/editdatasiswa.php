<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Absensi.php");
$absensi = new Absensi();
// $tampilAbsensi = $absensi->tampilsiswa($_GET['no_induk'],$_GET['tglabsen']);


?>

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit Absensi Siswa</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/sissmkn2/views/absensi/absensisiswa/index.php">Absensi Siswa</a></li>
                        <li class="active">Edit Absensi Siswa</li>
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
							<strong class="card-title">Edit </strong>Absensi Siswa
						</div>
						<div class="card-body">
							<div id="pay-invoice">
								<div class="card-body">
									<form action="proses.php?aksi=edit" method="post">
										 <?php foreach ($absensi->tampilsiswa($_GET['no_induk'],$_GET['tglabsen']) as $item) { ?>
										
                                       
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-sm-3">
                                                	<label for="input-normal" class=" form-control-label">No Induk</label>
                                            	</div>
                                                <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="no_induk" value="<?= $item['no_induk']; ?>" class="form-control" readonly>
                                                </div>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-sm-3">
                                                    <label for="input-normal" class=" form-control-label">Tanggal Absen</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="tglabsen" value="<?= $item['tglabsen']; ?>" class="form-control" readonly>
                                                </div>
                                                </div>
                                            </div>
                                                                                 
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Status Absensi</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="stabsen" value="<?= $item['stabsen']; ?>" class="form-control">
                                                </div> 
                                            </div>
                                            </div>
                                        <!-- <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Tanggal Absen</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="tglabsen" value="<? echo $item['tglabsen']; ?>" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Terlambat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="terlambat" value="<? echo $item['terlambat']; ?>" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Datang</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="Datang" value="<? echo $item['Datang']; ?>" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Pulang</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="Pulang" value="<? echo $item['Pulang']; ?>" class="form-control" >
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Alasan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="Alasan" value="<?= $item['Alasan']; ?>" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Guru Piket</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="GuruPiket" value="<?= $item['GuruPiket']; ?>" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="Kelas" value="<? echo $item['kelas']; ?>" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">ID Kelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="id_kelas" value="<? echo $item['id_kelas']; ?>" class="form-control" >
                                                </div>
                                            </div>
                                        </div> -->
                                    <?php } ?>
                                    <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Simpan
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                    </div>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
								
				
		
		
		


<?php
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php");
?>