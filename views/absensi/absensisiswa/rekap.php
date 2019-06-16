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
                        <h1>Absensi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Absensi</a></li>
                            <li class="active">Absensi Siswa</li>
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
                            <strong class="card-title">Rekap Absensi</strong>
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>No Induk</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Alpha</th>
                                    <th>Aksi</th>

                                    
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($absensi->filterjumlahalpha() as $item){
                                        // print_r($db->tampildu());
                                        // die();
                                        ?>
                                <tr>

                                    <td><?php echo $item['no_induk']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['kelas']; ?></td>
                                    <td><?php echo $item['total']; ?></td>
                                    <td>
                                    <a style = "margin-right:3px;" href="detailrekap.php?nis=<?= $item['nis'];?>"<button type="" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Detail</button></a>
                                <!--<a style = "margin-right:3px;" href=""<button type="" class="btn btn-danger btn-sm"><i class="fa fa-envelope-o"></i> Kirim SMS</button></a>
                                    <a style = "margin-right:3px;" href=""<button type="" class="btn btn-warning btn-sm"><i class="fa fa-envelope"></i> Kirim Email</button></a>-->
                                    <a href="#"><button title="printpdf" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Cetak Peringatan
                                    </button> </a>
                                    </td>
                                </tr>
                              </tbody>
                                 <?php } ?>
                            </table>
                            </div>
                            </div>
                    
                      
                      
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  