<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/nilai.php");
$penilaian = new nilai();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>List Transkip Nilai</h1>
                        <p><?= $_SESSION['nama']; ?></p>
                        
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
                          <button title="import data dari excel" type="reset" class="btn btn-warning btn-sm">
                            <i class="fa ti-download"><a href="cetak_nilai.php">Cetak Nilai</a></i> 
                        
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Transkrip Nilai
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>NIS</th>
                                    <th>Kode Mata Pelajaran</th>>
                                    <th>Nilai Latihan</th>
                                    <th>Nilai Tugas</th>
                                    <th>Nilai Kuis</th>
                                    <th>Nilai UTS</th>
                                    <th>Nilai UAS</th>
                                    <th>Konversi Nilai</th>
                                  </tr>
                                </thead>
                                <tbody>
                               <?php $i = 1; 
                               ?>
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
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?> 