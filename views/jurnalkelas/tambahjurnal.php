<?php 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/jurnal.php");

$jurnal = new jurnal();

//menampilkan kode jurnal secara acak
$kode = $jurnal->kodejurnal();

//menampilkan tanggal secara otomatis
$tanggalsekarang = $jurnal->tampiltanggal();

//menampilkan waktu secara otomatis
$waktusekarang = $jurnal->tampiljam();

//menampilkan tahun ajar
$tahunajar = $jurnal->tampilthajar();

//menampilkan nama guru
$namaguru = $jurnal->tampilguru();

//menampilkan kelas
$namakelas = $jurnal->tampilkelas();

?>

		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Jurnal Harian Kelas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/sissmkn2/views/jurnalkelas/jurnalkelas.php">Jurnal Harian Kelas</a></li>
                            <li class="active">Form Tambah Jurnal Harian Kelas</li>
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
                                <strong class="card-title">Form </strong>Tambah Jurnal Harian Kelas
                            </div>
                        <div class="card-body">
                        	<div id="pay-invoice">
                        		<div class="card-body">
                        			<form action="prosesjurnal.php?aksi=add" method="POST">
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="disabled-input" class=" form-control-label">ID</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="disabled-input" name="id_jurnal" placeholder="" class="form-control" value="<?= $kode; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">User ID</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="userid" name="userid" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Tahun Ajar</label>
                                            </div>
                                           <div class="col col-md-6">
                                                <select name="thajar" id="thajar" class="form-control-sm form-control">
                                                    <option>-- PILIH TAHUN AJAR --</option>
                                                    <?php foreach ($tahunajar as $item) { ?>
                                                    <option value="<?php echo $item['thajar']; ?>">
                                                        <?php echo $item['thajar'];?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Nama</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <select name="nama" id="nama" class="form-control-sm form-control">
                                                    <option>-- PILIH NAMA GURU --</option>
                                                    <?php foreach ($namaguru as $item) { ?>
                                                    <option value="<?php echo $item['nama']; ?>">
                                                        <?php echo $item['nama'];?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Hari</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="hari" name="hari" placeholder="" class="form-control" value="<?= $jurnal->hari_ini(); ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Tanggal</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="tgl" name="tgl" placeholder="" class="form-control" value="<?= $tanggalsekarang; ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Kelas</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <select name="kelas" id="kelas" class="form-control-sm form-control">
                                                    <option>-- PILIH KELAS --</option>
                                                    <?php foreach ($namakelas as $item) { ?>
                                                    <option value="<?php echo $item['kelas']; ?>">
                                                        <?php echo $item['kelas'];?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Jam Mulai</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="jam_mulai" name="jam_mulai" placeholder="" class="form-control" value="<?= $waktusekarang; ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Jam Selesai</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="jam_selesai" name="jam_selesai" placeholder="" class="form-control" value="<?= $waktusekarang; ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Kegiatan</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="kegiatan" name="kegiatan" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Ketercapaian</label>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input type="radio" id="S" name="sdh_blm" value="S" class="form-check-input">Tercapai
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="B" name="sdh_blm" value="B" class="form-check-input">Belum Tercapai
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-2">
                                                <label for="input-normal" class=" form-control-label">Keterangan</label>
                                            </div>
                                            <div class="col col-md-6">
                                                <input type="text" id="ket" name="ket" placeholder="" class="form-control">
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