<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_pendaftaran_prakerin.php"); ?>
<?php
$object = new t_prakerin_siswa();
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Guru</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                           <li><a href="#">Data Prakerin</a></li>
                            <li class="active">List Data Prakerin</li>
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
                          <a href="exportdataguru.php"><button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> Cetak
                          </button>
                          </a>
                          <a href="tambah_pendaftaran_prakerin.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Data Prakerin
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Data Prakerin
                        </div>
                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>N0.</th>
                                    <th>No Induk</th>
                                    <th>Id Siswa Prakerin</th>
                                    <th>Id Tempat Prakerin</th>
                                    <th>Nama Prakerin</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal selesai</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php $i = 1; ?>
                                <?php foreach($object->tampildata() as $data) {
                                ?>
                                  <tr>
                                 <th scope="row"><?= $i++; ?></th>
                                 <td><?= $data['no_induk']; ?></td>
                                 <td><?= $data['id_siswa_prakerin']; ?></td>
                                <td><?= $data['id_tmp_prakerin']; ?></td>
                                <td><?= $data['nama_prakerin']; ?></td>
                                
                                <td><?= $data['tgl_start']; ?></td>
                                <td><?= $data['tgl_akhir']; ?></td>
                                
                                <td>
                                      <a href="detail_pendaftaran_prakerin.php?id_siswa_prakerin=<?=$data['id_siswa_prakerin']; ?> &aksi=update"><button title="Detail" type="button" class="btn btn-primary btn-sm"><i class="fa ti-eye"></i></button>
                                      <a href="edit_pendaftaran_prakerin.php?id_siswa_prakerin=<?=$data['id_siswa_prakerin']; ?> &aksi=update"><button title="update" type="button" class="btn btn-success btn-sm"><i class="fa ti-pencil-alt"></i></button>
                                      <a href="proses_pendaftaran_prakerin.php?id_siswa_prakerin=<?=$data['id_siswa_prakerin']; ?> &aksi=hapus"><button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-eraser"></i></button></a>
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

    <!-- Right Panel -->

 <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>