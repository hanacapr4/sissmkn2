<?php
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/absensimapel.php");

//function memanggil kelas absenkelas
$absenmapel = new absensimapel();
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Absensi Kelas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ul class="breadcrumb text-right">
                            <li><a href="#">Absensi per Mata Pelajaran</a></li>
                            <li class="active">List Absensi per Mata Pelajaran</li>
                        </ul>
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
                          <!--<a href="#"><button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> Cetak Absensi
                          </button>
                          </a>-->
                          <a href="/sissmkn2/views/jurnalkelas/index2.php"><button title="Tambah Jurnal Harian Kelas" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Absensi
                          </button> </a>
                          <a href="#"><button title="Filter Jurnal Harian Kelas" type="submit" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Filter Absensi
                          </button></a>
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong> Absensi per Mata Pelajaran
                        </div>
                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>NO.</th>                              
                                    <th>SISWA</th> 
                                    <th>TANGGAL</th>
                                    <th>HARI</th>
                                    <th>MATA PELAJARAN</th>
                                    <th>STATUS</th>
                                    <th>KETERANGAN</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $no = 1;
                                    foreach ($absenmapel->tampilabsenmapel() as $item) {
                                  ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['tglabsen']; ?></td>
                                    <td><?php echo $item['hari']; ?></td>
                                    <td><?php echo $item['pelajaran']; ?></td>
                                    <td><?php echo $item['stabsen2']; ?></td>
                                    <td><?php echo $item['alasan']; ?></td>
                                    
                                    <td width="220px">
                                        <a style = "margin-right:3px;" href="detailabsenmapel.php?idabsenmapel=<?= $item['idabsenmapel'];?>"<button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a>
                                        <a style = "margin-right:3px;" href="#"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></a>
                                        <a href="prosesabsenmapel.php?idabsenmapel=<?= $item['idabsenmapel'];?>&aksi=delete"<button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a>
                                        <a href="cetakabsenmapel.php?idabsenmapel=<?= $item['idabsenmapel'];?>"><button type="" class="btn btn-primary btn-sm">Print</button></a>
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
           //'print'
       ]
   } );
} );
</script>

    <!-- Right Panel -->

 <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>