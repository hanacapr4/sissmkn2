<?php
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/jurnal.php");

$editjurnal = new jurnal();
$tampileditjurnal = $editjurnal->tampildetail($_GET['id_jurnal']);

//menampilkan tahun ajar
$tahunajar = $editjurnal->tampilthajar();

//menampilkan kelas
$namakelas = $editjurnal->tampilkelas();

//menampilkan nama guru
$namaguru = $editjurnal->tampilguru();

?>

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit Jurnal Harian Kelas</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/sissmkn2/views/jurnalkelas/jurnalkelas.php">Jurnal Harian Kelas</a></li>
                        <li class="active">Edit Jurnal Harian Kelas</li>
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
							<strong class="card-title">Edit </strong>Jurnal Harian Kelas
						</div>
						<div class="card-body">
							<div id="pay-invoice">
								<div class="card-body">
									<form action="prosesjurnal.php?aksi=update" method="POST">
										<?php foreach ($tampileditjurnal as $itemm) { 
                                                $decodeidjurnal = base64_decode($itemm['id_jurnal']);
                                            ?>
										<div class="row form-group">
                                    		<div class="col-6">
                                        		<div class="col col-md-3">
                                        			<label for="input-normal" class=" form-control-label">ID Jurnal</label>
                                        		</div>
                                        		<div class="col-12 col-md-9">
                                        			<input type="text" id="input-normal" name="id_jurnal" value="<?= $decodeidjurnal; ?>" class="form-control" readonly>
                                        		</div>
                                    		</div>
                                		</div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">User ID</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="userid" value="<?= $itemm['userid']; ?>" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Tahun Ajar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select name="thajar" id="thajar" class="form-control-sm form-control">
                                                <?php foreach ($tahunajar as $item) { ?>
                                                  <option value="<?php echo $item['thajar']; ?>" <?php if($item['thajar'] == $itemm['thajar']) {echo 'selected';}?>>
                                                  <?php echo $item['thajar']; ?></option>
                                                  <?php } ?>
                                                </select>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Guru</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select name="nama" id="nama" class="form-control-sm form-control">
                                                <?php foreach ($namaguru as $item) { ?>
                                                  <option value="<?php echo $item['nama']; ?>" <?php if($item['nama'] == $itemm['nama']) {echo 'selected';}?>>
                                                  <?php echo $item['nama']; ?></option>
                                                  <?php } ?>
                                                </select>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Hari</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="hari" value="<?= $itemm['hari']; ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Tanggal</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input-normal" name="tgl" value="<?= $itemm['tgl']; ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select name="kelas" id="kelas" class="form-control-sm form-control">
                                                <?php foreach ($namakelas as $item) { ?>
                                                  <option value="<?php echo $item['kelas']; ?>" <?php if($item['kelas'] == $itemm['kelas']) {echo 'selected';}?>>
                                                  <?php echo $item['kelas']; ?></option>
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
                                                    <input type="text" id="disabled-input" name="jam_mulai" value="<?= $itemm['jam_mulai']; ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Jam Selesai</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="jam_selesai" value="<?= $itemm['jam_selesai']; ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Kegiatan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="kegiatan" value="<?= $itemm['kegiatan']; ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Ketercapaian</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="sdh_blm" id="sdh_blm" class="form-control-sm form-control">
                                                            <option value="<?php echo $itemm['sdh_blm']; ?>" >
                                                        <?php
                                                                    if ($itemm['sdh_blm'] == 'S'){
                                                                        echo 'Tercapai';
                                                                    } else {
                                                                        echo 'Belum Tercapai';
                                                                    }
                                                    ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="input-normal" class=" form-control-label">Keterangan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="ket" value="<?= $itemm['ket']; ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
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
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php");
?>