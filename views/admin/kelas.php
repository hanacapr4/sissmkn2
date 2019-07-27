<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Kelas.php"); ?>
<?php
$object = new Kelas();
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>kelas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Ruang kelas</a></li>
                            <li class="active">List Ruang kelas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <?php 
            if ($_SESSION['alertid'] == "ada")  {
                    echo    '<div class="pesan">
                            <div class="col-sm-12">
                                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                  <span class="badge badge-pill badge-danger">Failed</span> data sudah ada.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            </div>';

                   unset($_SESSION['alertid']);
            }?>

          <?php
            foreach($object->getforalert($_GET['id_kelas']) as $item) { 
                if ($_SESSION['alertid'] == $item['id_kelas']) {
                    echo    '<div class="pesan">
                            <div class="col-sm-12">
                                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                  <span class="badge badge-pill badge-success">Success</span> berhasil ditambahkan.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            </div>';

                    unset($_SESSION['alertid']);
                }
            }
            ?>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                          <a href="insert_kelas.php"><button title="Tambahkan Data Kelas" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Kelas
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Kelas
                        </div>
                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                  <th>NO.</th>
                                  <th>Kode Kelas</th>
                                    <th>Nama kelas</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($object->tampildata() as $data) {
                                ?>
                                 <tr>
                               <th scope="row"><?= $i++; ?></th>
                                <td><?= $data['program']; ?></td>
                                <td><?= $data['kelas']; ?></td>
                                <td><?= $data['th_ajar']; ?></td>
                                <td>
                                     <a href="Detail_kelas.php?id_kelas=<?=$data['id_kelas']; ?>"><button title="Detail" type="button" class="btn btn-primary btn-sm"><i class="fa ti-eye"></i></button>
                                      <a href="edit_kelas.php?id_kelas=<?=$data['id_kelas']; ?>"><button title="Ubah" type="button" class="btn btn-success btn-sm"><i class="fa ti-pencil-alt"></i></button>
                                    <a href="proses_kelas.php?id_kelas=<?=$data['id_kelas']; ?> &aksi=hapus"> <button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-eraser"></i></button>
                                      </td>
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

    <!-- Right Panel -->
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

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
