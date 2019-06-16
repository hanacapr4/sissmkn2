<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/nilaiharian.php");
$penilaian = new nilaiharian();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>List Transkip Nilai</h1>
                        <p><?= $_SESSION['Nama_guru']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Transkrip Nilai Siswa</a></li>
                            <li class="active">List Transkrip Nilai Siswa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                          <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> export
                          </button>
                          <a href="nilai_importxls.php"><button title="import data dari excel" type="reset" class="btn btn-warning btn-sm">
                            <i class="fa ti-download"></i> import
                          </button></a>
                          <a href="tambah_transkrip_nilai_v.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Transkrip Nilai Siswa
                          </button> </a>
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Transkrip Nilai
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    
                                    <th>NIS</th>
                                    <th>Kode Mata Pelajaran</th>
                                    <th>Nilai Latihan</th>
                                    <th>Nilai Tugas</th>
                                    <th>Nilai Kuis</th>
                                    <th>Nilai UTS</th>
                                    <th>Nilai UAS</th>
                                    <th>Konversi Nilai</th>
                                    <th colspan="3">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach($penilaian->tampildata() as $item) {
                                ?>
                                 <tr>
                                <td><?php echo $item['NIS']; ?></td>
                                <td><?php echo $item['id_mapel']; ?></td>
                                <td><?php echo $item['Nilai_Latihan']; ?></td>
                                <td><?php echo $item['Nilai_Tugas']; ?></td>
                                <td><?php echo $item['Nilai_Kuis']; ?></td>
                                <td><?php echo $item['Nilai_UTS']; ?></td>
                                <td><?php echo $item['Nilai_UAS']; ?></td>
                                <td><?php echo $item['convert_nilai']; ?></td>
                            <td>
                                <a style = "margin-right:3px;" href="detail_pendataan.php?idPendataan=<?= $item['idPendataan'];?>"<button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i>&nbsp; </button></a>
                            </td>
                            <td>
                                <a style = "margin-right:3px;" href="form_edit_transnilai.php?id_nilai=<?=$item['id_nilai']; ?>"<button title="Ubah" class="btn btn-warning btn-sm"><i class="fa ti-pencil-alt"></i>&nbsp;</button></a>
                            </td>
                            <td>
                                <a href="<?php echo $siteurl; ?>/views/nilai/proses_nilai.php?id_nilai=<?= $item['id_nilai'];?>&aksi=hapus"<button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i>&nbsp;</button></a>
                            </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>