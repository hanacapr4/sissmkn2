<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Absensi.php");
$absensi = new Absensi();
?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Absensi Siswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/sissmkn2/views/jurnal-kelas/jurnal-kelas.php">Absensi Siswa</a></li>
                            <li class="active">Form Tambah Absensi Siswa</li>
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
                            <strong class="card-title">Form </strong>Tambah Absensi Siswa
                        </div>
                        <div class="card-body">
                        	<div id="pay-invoice">
                        		<div class="card-body">
                        			<form action="<?php echo $siteurl; ?>/views/absensi/absensisiswa/proses.php?aksi=tambah" method="POST">
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">No Induk</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="no_induk" name="no_induk" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Keterangan</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="stabsen" name="stabsen" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Tanggal Absen</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="date" id="text-input" name="tanggal" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Terlambat</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="terlambat" name="terlambat" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Alasan</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="Alasan" name="Alasan" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Guru Piket</label>
                                            </div>
                                                <div class="col col-md-6">
                                                <input type="text" id="GuruPiket" name="GuruPiket" placeholder="" class="form-control">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Kelas</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <select name="id_kelas" id="id_kelas" class="form-control-sm form-control">
                                                    <?php foreach ($absensi->filterpjumlahsiswaperkelas() as $item) { ?>
                                                    <option value="<?php echo $item['id_kelas']; ?>">
                                                        <?php echo $item['kelas'];?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
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


<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>