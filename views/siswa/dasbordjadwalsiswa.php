<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/jadwalsiswa.php"); ?>
<?php
$object = new jadwalsiswa();
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>JADWAL</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">JADWAL</a></li>
                            <li class="active">List Jadwal Guru</li>
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
                            <i class="fa ti-upload"></i> Cetak Jadwal
                          </button>
                          
                          <!--<a href="insert_Ruangan.php"><button title="Tambahkan Data Ruangan" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Data Ruangan
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Jadwal
                        </div>
                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                  <th>NO.</th>
                                  <th>Hari</th>
                                  <th>Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>jam</th>
                                    

                                    
                                  </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                               <?php foreach($object->tampildata2($_SESSION['nis']) as $data) {
                                ?>
                          
                                 <tr>
                                 <th scope="row"><?= $i++; ?></th>
                                 <td><?= $data['Hari']; ?></td>
                                <td><?= $data['nama_kelas']; ?></td>
                                <td><?= $data['nama_mapel']; ?></td>
                                <td><?= $data['jam']; ?></td>
                                
                                <!--<td>
                                      <button title="Detail" type="button" class="btn btn-primary btn-sm"><i class="fa ti-eye"></i></button>
                                      <a href="edit_ruangan.php?id_ruangan=<?=$data['id_ruangan']; ?>"><button title="Ubah" type="button" class="btn btn-success btn-sm"><i class="fa ti-pencil-alt"></i></button>
                                      <button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-eraser"></i></button>
                                      </td>-->
                                </tr>
                                <?php } ?>
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

     <script>
$(document).ready(function() {
   $('#coba').DataTable( {
       dom: 'Bfrtip',
       buttons: [
           'copyHtml5',
           'excelHtml5',
           'csvHtml5',
           'pdfHtml5'
       ]
   } );
} );
</script>

    <!-- Right Panel -->
    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>

  