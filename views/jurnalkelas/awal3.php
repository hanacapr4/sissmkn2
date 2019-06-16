
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/jurnal.php");

//memanggil class jurnal
$jurnal = new jurnal();

//memanggil method yang ada di dalam class jurnal
$panggil = $jurnal->cetakjurnalperkelas();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Daftar Kelas</h1>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="jurnalkelas.php">Jurnal Harian Kelas</a></li>
                            <li class="active">Daftar Kelas</li>
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
                        <div class="row">
                                <div class="col-lg-12">
                          &nbsp &nbsp Input Data Absensi :
                        <strong>
                          <?php
                          
                          $date = $_POST['tgl'];  
                          $tgl = date_create($date);
                          echo date_format($tgl,"Y-m-d");
                          ?>
                          </strong>
                        </div>
                        

                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Program</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($panggil as $item) { ?>
                                    <tr>
                                      <td><?php echo $item['program']; ?></td>
                                      <td><?php echo $item['kelas']; ?></td>
                                      <td>
                                        <a href="cetakjurnal2.php?kelas=<?= $item['kelas'];?>&&tgl=<?=$date;?>"><button title="print" type="submit" class="btn btn-primary btn-sm"> <i class="fa ti-import" ></i> Cetak Jurnal
                                        </button></a>
                                      </td>
                                    </tr>
                                 <?php } ?>
                            </table>
                        </div>
                        <!-- <div class="card-footer">
                          <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> export
                          </button>
                          <button title="import data dari excel" type="reset" class="btn btn-warning btn-sm">
                            <i class="fa ti-download"></i> import
                          </button>
                        </div> -->
                    </div>
                </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>
