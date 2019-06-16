
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
                        <h1>List Absensi</h1>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Absensi Siswa</a></li>
                            <li class="active">List Absensi Perkelas</li>
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
                            

                          <a style = "margin-right:3px;" href="tambahabsensi.php" <button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Tambah Absensi</button></a>
                          <a style = "margin-right:3px;" href="grafikabsensi.php" <button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Grafik Absensi</button></a>
                        </div>
                        <div class="row">
                                <div class="col-lg-12">
                          &nbsp &nbsp Input Data Absensi :
                        <strong>
                          <?php
                          
                          $date = $_POST['tglabsen'];  
                          $tglabsen = date_create($date);
                          echo date_format($tglabsen,"Y-m-d");
                          ?>
                          </strong>
                        </div>
                        

                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                               
                                    
                                    <th>Nama Kelas</th>
                                    <th>Program</th>
                                    <th>Aksi</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>

                               <?php
                                    foreach($absensi->filterpjumlahsiswaperkelas() as $item){
                                        
                                ?>
                                
                               
                               <tr>
                                   <td><?php echo $item['kelas']; ?></td>
                                   <td><?php echo $item['program']; ?></td>
                                   <td>
                                      
                                      <a style = "margin-right:3px;" href="editabsensisiswa.php?id_kelas=<?= $item['id_kelas'];?>&&tglabsen=<?=$date;?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit Absensi</button></a>
                                      <a href="printabsensi.php?id_kelas=<?= $item['id_kelas'];?>&&tglabsen=<?=$date;?>" <button title="print" type="submit" class="btn btn-primary btn-sm"> <i class="fa ti-import" ></i> Cetak Absensi
                                    </button> </a>
                                   </td>
                                </tr>
                                
                              </tbody>
                              <?php
                                }
                                ?>
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
