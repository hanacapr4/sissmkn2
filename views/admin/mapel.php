<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Mapel.php"); ?>
<?php
$object = new Mapel();
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Mata Pelajaran</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Mata Pelajaran</a></li>
                            <li class="active">List Mata pelajaran</li>
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
                          <a href="insert_mapel.php"><button title="Tambah mata pelajaran" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Mata Pelajaran
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Mata Pelajaran
                        </div>
                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                  <th>NO.</th>
                                  <th>ID Mapel</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Semester</th>
                                    <th>Tingkat</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($object->tampildata() as $data) {
                                ?>
                                 <tr>
                                 <th scope="row"><?= $i++; ?></th>
                                <td><?= $data['idpel']; ?></td>
                                <td><?= $data['th_ajar']; ?></td>
                                <td><?= $data['semester']; ?></td>
                                <td><?= $data['tingkat']; ?></td>
                                <td><?= $data['pelajaran']; ?></td>
                                <td>
                                      <a href="detail_mapel.php?idpel=<?=$data['idpel']; ?>"><button title="Detail" type="button" class="btn btn-primary btn-sm"><i class="fa ti-eye"></i></button>
                                      <a href="edit_mapel.php?idpel=<?=$data['idpel']; ?>"><button title="Ubah" type="button" class="btn btn-success btn-sm"><i class="fa ti-pencil-alt"></i></button></a>
                                      <a href="proses.php?idpel=<?=$data['idpel']; ?> &aksi=hapus"> <button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-eraser"></i></button>
                                      </td>
                                      </td>
                                      
                                </tr>
                                <?php 
                              } ?>
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
<script>
//            angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
            $(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 500);});
//            angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
            setTimeout(function(){$(".pesan").fadeOut('slow');}, 6000);
        </script>

         <script>
$(document).ready(function() {
   $('#coba').DataTable( {
       dom: 'Bfrtip',
       buttons: [
           'copyHtml5',
           'excelHtml5',
           'csvHtml5',
           'pdfHtml5',
           'print'
       ]
   } );
} );
</script>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>
