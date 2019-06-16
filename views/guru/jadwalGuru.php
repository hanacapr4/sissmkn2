<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/assets/header/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Guru.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Ruangan.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kelas.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Mapel.php"); ?>

<?php
$object1 = new Guru();
$object2 = new Ruangan();
$object3 = new Kelas();
$object4 = new Mapel();
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Ruangan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Ruangan</a></li>
                            <li class="active">List Ruangan</li>
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
                          <button title="import data dari excel" type="reset" class="btn btn-warning btn-sm">
                            <i class="fa ti-download"></i> import
                          </button>
                          <a href="insert_Ruangan.php"><button title="Tambahkan Data Ruangan" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Data Ruangan
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Ruangan
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                  <th>NO.</th>
                                  <th>Nama Guru</th>
                                  <th>Mata Pelajaran</th>
                                    <th>Nama Ruangan</th>
                                    <th>Kelas</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                
                          
                                 <tr>
                                 <th scope="row"><?= $i++; ?></th>
                                 <td><?= $data['Nama_guru']; ?></td>
                                <td><?= $data['nama_mapel']; ?></td>
                                <td><?= $data['nama_Ruangan']; ?></td>
                                <td><?= $data['nama_Kelas']; ?></td>
                              
                                </tr>
                               
                              </tbody>
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
    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/assets/footer/footer.php"); ?>

  