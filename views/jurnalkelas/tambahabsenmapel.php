<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Absensi.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/absensimapel.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Mapel.php");

$absensi = new Absensi();
// $tampilAbsensi = $absensi->tampilsiswa($_GET['no_induk'],$_GET['tglabsen']);

//function memanggil kelas absenkelas
$abskelas = new absensimapel();

//function memanggil kelas mapel
$matapelajaran = new Mapel();

//menampilkan nama guru
$namaguru = $abskelas->tampilguru();

//menampilkan idabsensi secara otomatis
$buatid = $abskelas->buatid();

//menampilkan jam sekarang
$now = $abskelas->tampiljam();

//menampilkan mata pelajaran
$mapel = $matapelajaran->tampildata();
?>

		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Absensi Kelas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/sissmkn2/views/jurnalkelas/absenmapel.php">Absensi per Mata Pelajaran</a></li>
                            <li class="active">Form Tambah Absensi Kelas</li>
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
                                <strong class="card-title">Form </strong>Tambah Absensi Kelas
                            </div>
                        <div class="card-body">
                        	<div id="pay-invoice">
                        		<div class="card-body">
                        			<form action="prosesabsenmapel.php?aksi=add" method="post">
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">No</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="idabsenmapel" class="form-control" value="<?= $buatid; ?>">
                                                </div> 
                                            </div>
                                        </div>
                                        <?php foreach ($absensi->tampilsiswa($_GET['no_induk'],$_GET['tglabsen']) as $item) { ?>
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
                                                   <input type="text" id="input-normal" name="no_induk" class="form-control" value="<?= $item['no_induk']; ?>">
                                                </div>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-sm-3">
                                                    <label for="input-normal" class=" form-control-label">Tanggal Absen</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="tglabsen" class="form-control" value="<?= $item['tglabsen']; ?>">
                                                </div>
                                                </div>
                                            </div>
                                                                                 
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Status Absensi</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                   <input type="text" id="input-normal" name="stabsen" class="form-control" value="<?= $item['stabsen']; ?>">
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
                                    <?php } ?>
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
                                                   <input type="text" id="input-normal" name="hari" class="form-control" value="<?= $abskelas->hari_ini(); ?>">
                                                </div> 
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Status Absensi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select name="stabsen2" id="stabsen2" class="form-control-sm form-control">
                                                    <option>-- KETERANGAN ABSEN --</option>
                                                    <option>S</option>
                                                    <option>I</option>
                                                    <option>A</option>
                                                </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Alasan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="alasan" class="form-control" >
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Mata Pelajaran</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select name="idpel" id="idpel" class="form-control-sm form-control">
                                                    <option>-- PILIH MATA PELAJARAN --</option>
                                                    <?php foreach ($mapel as $item) { ?>
                                                    <option value="<?php echo $item['idpel']; ?>">
                                                        <?php echo $item['pelajaran'];?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Jam Mulai</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="jam_mulai" class="form-control" value="<?= $now; ?>">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Jam Selesai</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="jam_selesai" class="form-control" value="<?= $now; ?>">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Guru Piket</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select name="nip" id="nip" class="form-control-sm form-control">
                                                    <option>-- PILIH GURU PIKET --</option>
                                                    <?php foreach ($namaguru as $item) { ?>
                                                    <option value="<?php echo $item['nip']; ?>">
                                                        <?php echo $item['nama'];?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                    </div>
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

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>