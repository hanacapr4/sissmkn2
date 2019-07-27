<?php 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/absensimapel.php");

$abskelas = new absensimapel();
$detailabskelas = $abskelas->detailabsenmapel($_GET['idabsenmapel']);
?>

		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail Absensi Kelas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/sissmkn2/views/jurnalkelas/absenmapel.php">Absensi per Mata Pelajaran</a></li>
                            <li class="active">Detail Absensi Kelas</li>
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
                                <strong class="card-title">Detail </strong>Absensi Kelas
                            </div>
                        <div class="card-body">
                        	<div id="pay-invoice">
                        		<div class="card-body">
                        			<form action="#" method="GET">
                                        <?php
                                        foreach ($detailabskelas as $item) { ?>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">No</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="idabsenmapel" class="form-control" value="<?= $item['idabsenmapel']; ?>" readonly>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                    <strong class="card-title">Absensi Siswa Masuk</strong>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-sm-3">
                                                    <label for="input-normal" class=" form-control-label">No Induk</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="no_induk" class="form-control" value="<?= $item['no_induk']; ?>" readonly>
                                                </div>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-sm-3">
                                                    <label for="input-normal" class=" form-control-label">Tanggal Absen</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="tglabsen" class="form-control" value="<?= $item['tglabsen']; ?>" readonly>
                                                </div>
                                                </div>
                                            </div>
                                                                                 
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Status Absensi</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="stabsen" class="form-control" value="<?= $item['stabsen']; ?>" readonly>
                                                </div> 
                                            </div>
                                            </div>
                                        <!--<div class="row form-group">
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
                                        </div>-->
                                    <hr>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                    <strong class="card-title">Absensi Ijin Keluar Kelas</strong>
                                            </div>
                                        </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Hari</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="hari" class="form-control" value="<?= $item['hari']; ?>" readonly>
                                                </div> 
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Status Absensi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="stabsen2" class="form-control" value="<?= $item['stabsen2']; ?>" readonly>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Alasan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="alasan" class="form-control" value="<?= $item['alasan']; ?>" readonly>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Mata Pelajaran</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="pelajaran" class="form-control" value="<?= $item['pelajaran']; ?>" readonly>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Jam Mulai</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="jam_mulai" class="form-control" value="<?= $item['jam_mulai']; ?>" readonly>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Jam Selesai</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="jam_selesai" class="form-control" value="<?= $item['jam_selesai']; ?>" readonly>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Guru Piket</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="nama" class="form-control" value="<?= $item['nama']; ?>" readonly>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <button>
                                                <a href="absenmapel.php">
                                                    Kembali
                                                </a>
                                            </button>
                                    </div>
                                <?php } ?>
                                    </form>
                        		</div>
                        	</div>
                        </div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>