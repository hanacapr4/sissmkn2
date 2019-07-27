<?php
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/jurnal.php");

$jurnal = new jurnal();
$detailjurnal = $jurnal->tampildetail($_GET['id_jurnal']);

?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Detail Jurnal Harian Kelas</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="/sissmkn2/views/jurnalkelas/guru/jurnalkelas.php">Jurnal Harian Kelas</a></li>
                        <li class="active">Detail Jurnal Harian Kelas</li>
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
                            <strong class="card-title">Detail </strong>Jurnal Harian Kelas
                        </div>
                        <div class="card-body">
                            <div id="pay-invoice">
                                <div class="card-body">
                                    <form action="#" method="GET" class="form-horizontal">
                                        <?php foreach ($detailjurnal as $item) { ?>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">ID Jurnal</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="id_jurnal" value="<?= $item['id_jurnal']; ?>" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="userid" value="<?= $item['nama']; ?>" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Tahun Ajar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="thajar" value="<?= $item['thajar']; ?>" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Pelajaran</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="nama" value="<?= $item['pelajaran']; ?>" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Hari</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="hari" value="<?= $item['hari']; ?>" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Tanggal</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="tgl" value="<?= $item['tgl']; ?>" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="kelas" value="<?= $item['kelas']; ?>" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Jam Mulai</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="jam_mulai" value="<?= $item['jam_mulai']; ?>" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Jam Selesai</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="jam_selesai" value="<?= $item['jam_selesai']; ?>" class="form-control"readonly readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Kegiatan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="kegiatan" value="<?= $item['kegiatan']; ?>" class="form-control"readonly readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Ketercapaian</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="sdh_blm" value="<?php $item['sdh_blm']; 
                                                    if ($item['sdh_blm'] == 'S'){
                                                                        echo 'Tercapai';
                                                                    } else {
                                                                        echo 'Belum Tercapai';
                                                                    }
                                                                    ?>" class="form-control"readonly readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Keterangan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" name="ket" value="<?= $item['ket']; ?>" class="form-control"readonly readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a style = "margin-right:3px;" href="jurnalkelas.php"<button type="" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Kembali</button></a>
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
<?php
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php");
?>