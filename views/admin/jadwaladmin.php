<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/jadwaladmin.php"); ?>
<?php
$object = new jadwaladmin();
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">

                    <div class="page-title">
                        <h1>Jadwal Guru</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Jadwal</a></li>
                            <li class="active">List Jadwal Guru</li>
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
            foreach($object->getforalert($_GET['idajar']) as $item) { 
                if ($_SESSION['alertid'] == $item['idajar']) {
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
                          <a href="cetakjadwal.php">
                          <button title="export data berupa pdf" type="submit" class="btn btn-success btn-sm"><i class="fa ti-upload"></i> Cetak</button>
                        </a>
                          <a href="insert_Jadwaladmin.php"><button title="Tambahkan jadwal" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Jadwal
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                       
                        <br>
                        <form action="jadwaladmin.php" method="post">
            <table class="form-control">
              <tr> 
                <td align="right" width="200"></td></tr>
                <tr>
                <td align="center" width="200"><select name="nip" id="nip" class="form-control">
                  <option value="">---- PILIH GURU ----</option>
        <?php foreach ($object->get_listjadwal() as $data) {
                            ?>
                                    <option value="<?php echo $data['nip']; ?>"><?php echo $data['nama']; ?></option>
                        <?php } ?>
                </select></td>
                <td width="100" align="center"> <button class="btn btn-primary" name="cari"> Cari</button></td>
              </tr>
            </table>
            </form>

                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                  <th>NO.</th>
                                    <!--<th>Nama Guru</th>-->
                                    <th>Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Program</th>
                                    <th>Semester</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Hari</th>   
                                    <th>Jam Ke</th>
                                    <th>Jam Pel</th>   
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                


                                <?php foreach($object->getjadwal($_POST['nip']) as $data) {
                                ?>
                          
                                 <tr>
                                 <th scope="row"><?= $i++; ?></th>
                                <!--<td><?= $data['nama']; ?></td>-->
                                <td><?= $data['kelas']; ?></td>
                                <td><?= $data['pel']; ?></td>
                                <td><?= $data['program']; ?></td>
                                <td><?= $data['sem']; ?></td>
                                <td><?= $data['th_ajar']; ?></td>
                                <td><?= $data['hari']; ?></td>
                                <td><?= $data['jam_ke']; ?></td>
                                <td><?= $data['jam_pel']; ?></td>
                                
                                <td>
                                      <a href="detail_jadwal.php?idajar=<?=$data['idajar']; ?>"><button title="Detail" type="button" class="btn btn-primary btn-sm"><i class="fa ti-eye"></i></button>
                                      
                                      <a href="edit_jadwaladmin2.php?idajar=<?=$data['idajar']; ?>"><button title="Ubah" type="button" class="btn btn-success btn-sm"><i class="fa ti-pencil-alt"></i></button>
                                     
                                      <a href="proses_jadwal2.php?idajar=<?=$data['idajar']; ?> &aksi=hapus"> <button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-eraser"></i></button>
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

  