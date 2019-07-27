<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Kesiswaan.php"); ?>

<?php
$object = new Kesiswaan();
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Pendaftaran</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Data Pendaftaran</a></li>
                            <li class="active">List Data Pendaftaran</li>
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
                          <a href="#"><button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> Cetak
                          </button>
                          </a>
                          <a href="tambah_pendaftaran.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Pendaftaran
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong> Data Pendaftaran
                        </div>
                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>NO.</th>                               
                                    <th>No Formulir</th>
                                    <th>NISN</th> 
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Foto</th>         
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                <?php
                                    foreach($object->tampilpendaftaran() as $item){
                                        // print_r($kesiswaan->tampilpendataan());
                                        // die();
                                ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?php echo $item['no_daftar']; ?></td>
                                    <td><?php echo $item['no_induk']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['tmp_lahir']; ?></td>
                                    <td><?php echo $item['tgl_lahir']; ?></td>
                                    <td><?="<img src='ffoto/".$item['foto_daftar']."'style='width:120px; height:120px;'>"?></td>
                                    
                                    <td width="220px"><a style = "margin-right:3px;" href="detail_pendaftaran.php?user_id=<?= $item['user_id'];?>"<button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a>
                                        <a style = "margin-right:3px;" href="edit_pendaftaran.php?user_id=<?= $item['user_id'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></a>
                                        <a href="proses.php?user_id=<?= $item['user_id'];?>&aksi=hapus"<button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a>
                                      </td>
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

 <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>