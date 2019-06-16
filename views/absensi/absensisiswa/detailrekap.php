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
                        <h1> Detail Absensi Siswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Absensi Siswa</a></li>
                            <li class="active">Siswa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-md-9">
                    <div class="card">
                        <div class="card-footer">
                        </div>
                        <form action="" method="post" class="form-horizontal">

                        <div class="card-header">
                        <strong><label for="" class=" form-control-label" value="">Nama : </label>
                       </strong>
                        </div>
                    
                        
                          <table id="bootstrap-data-table" class="table table-striped table-bordered display">
                                <thead>
                                  <tr>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Jamke</th>
                                  </tr>
                                  <tbody>
                                    <?php
                                    foreach($absensi->getdetailalpha($_GET['nis']) as $item){
                                        ?>
                                    <td><?php echo $item['tanggal']; ?></td>
                                    <td><?php echo $item['keterangan']; ?></td> 
                                    <td><?php echo $item['jamke']; ?></td> 
                                </tr>
                                <?php } ?>
                                  </tbody>
                            
                           
                            </table>
                        </div>
                      
                          </form>
                        
                    </div>
                </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>
