<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/nilai.php");
$penilaian = new nilai();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>List Transkip Nilai</h1>
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
                          <a href="tambah_transkrip_nilai.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Transkrip Nilai Siswa
                          </button> </a>
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Transkrip Nilai
                        </div>
                        <form action="<?php echo $siteurl; ?>/views/nilai/proses_nilai.php?aksi=insert" method="post" class="form-horizontal">
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>NO</th>
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

                                 <tr>
                                <th scope="row"><?= $i++; ?></t>
                                
                                <td>
                                    <input type="number" id="NIS" name="NIS" placeholder="NIS" class="form-control" value="<?= $item['nis']; ?>"></input>
                                </td>
                                <td>
                                    <input type="text" id="id_mapel" name="id_mapel" placeholder="id_mapel" class="form-control"></input>
                                </td>
                                <td>
                                    <input type="number" id="Nilai_Latihan" name="Nilai_Latihan" placeholder="Nilai_Latihan" class="form-control"></input>
                                </td>
                                <td>
                                    <input type="number" id="Nilai_Tugas" name="Nilai_Tugas" placeholder="Nilai_Tugas" class="form-control"></input>
                                </td>

                                <td>
                                    <input type="number" id="Nilai_Kuis" name="Nilai_Kuis" placeholder="Nilai_Kuis" class="form-control"></input>
                                </td>
                                <td>
                                    <input type="number" id="Nilai_UTS" name="Nilai_UTS" placeholder="Nilai_UTS" class="form-control"></input>
                                </td>
                                <td><input type="number" id="Nilai_UTS" name="Nilai_UAS" placeholder="Nilai_UTS" class="form-control"></input>
                                </td>
                                <td>
                                    <input type="text" id="Nilai_UTS" name="convert_nilai" placeholder="convert_nilai" class="form-control"></input>
                                </td>

                                </tr>
                                <?php 

                                ?>

                              </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        Silahkan <strong>Klik</strong> tombol <strong>Simpan</strong> di bawah ini jika telah mengisi semua form dengan benar.
                      </div>
                      <div class="card-footer">
                        <a href="tampil_nilai.php"><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Simpan
                        </button></a>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>    