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
                        <h1>Edit Absensi Siswa</h1>
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
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                          
                          
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                         <!--<form action="editdatasiswa.php?no_induk=<?= $item['no_induk']; ?>" method="post" class="form-horizontal"> -->

                        <div class="card-header">
                          <strong class="card-title"><input type="label" id="disabled-input" name="tglabsen" value="<?php
                          
                           $date = $_GET['tglabsen']; // Hasil: 20-01-2017 05:32:15
                           $tglabsen = date_create($date);
                           echo date_format($tglabsen,"Y-m-d");
                          ?>" class="form-control" readonly></strong>

                        </div>
                    
                        
                          <table id="bootstrap-data-table" class="table table-striped table-bordered display">
                                <thead>
                                  <tr>
                                    <th>No Induk</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelamin</th>
                                    <th>Tanggal Absen</th>               
                                    <th>Tempat Lahir</th>
                                    <th>Kelas</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                  </tr>
                                  <tbody>
                                    <?php
                                    foreach($absensi->filterjumlahsiswaperkelas($_GET['id_kelas'], $_GET['tglabsen']) as $item){
                                       
                                        ?>


                                    <tr>
                                    <td><input type="label" id="disabled-input" name="no_induk" value="<?php echo $item['no_induk']; ?>" class="form-control" readonly></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['kelamin']; ?></td> 
                                     <td><input type="label" id="disabled-input" name="tglabsen" value="<?php echo $item['tglabsen']; ?>" class="form-control" readonly></td>
                                    <td><?php echo $item['tmp_lahir']; ?></td>
                                    <td><input type="label" id="disabled-input" value="<?php echo $item['kelas']; ?>" class="form-control" readonly></td> 
                                    <td><?php echo $item['stabsen']; ?></td>

                                    <td>
                                    <a style = "margin-right:3px;" href="editdatasiswa.php?no_induk=<?= $item['no_induk'];?>&&tglabsen=<?=$date;?>"><button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>Edit Absensi</button></a>
                                    </td>
                                </tr>
                                <input type="label" hidden id="disable-input" name="id_kelas" value="<?php echo $item['id_kelas']; ?>"
                                ></input>
                                
                                  </tbody>
                            
                           <?php } ?>
                            </table>
                        </div>
      
                          <!-- </form> -->
                        </div>
                    </div>
                </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>
