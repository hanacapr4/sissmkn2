<?php 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/jurnal.php");

$jurnal = new jurnal();

?>
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Jurnal Harian Kelas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Jurnal Harian Kelas</a></li>
                            <li class="active">List Jurnal Harian Kelas</li>
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
                        <div class="card-header">
                          <a href="cetakjurnal2.php"><button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> Cetak Jurnal
                          </button>
                          </a>
                          <a href="tambahjurnal.php"><button title="Tambahkan Data Guru" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Jurnal
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <!--<div class="card-header">
                            <strong class="card-title">List </strong> Absensi per Mata Pelajaran
                        </div>-->
                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                  	<td><b>No</b></td>
                                    <td><b>NIP</b></td>
                                    <td><b>Guru</b></td>
                                    <td><b>Hari</b></td>
                                    <td><b>Tanggal</b></td>
                                    <td><b>Kelas</b></td>
                                    <td><b>Jam Mulai</b></td>
                                    <td><b>Jam Selesai</b></td>
                                    <td><b>Kegiatan</b></td>
                                    <td><b>Aksi</b></td>
                                  </tr>
                                </thead>
                                <tbody>
                                	<?php $no = 1;
                                    foreach($jurnal->tampiljurnal() as $item){ 
                                    ?>
                                    <tr>
                                        <td scope="row"><?php echo $no++; ?></td>
                                        <td><?php echo $item['nip']; ?></td>
                                        <td><?php echo $item['nama']; ?></td>
                                        <td><?php echo $item['hari']; ?></td>
                                        <td><?php echo $item['tgl']; ?></td>
                                        <td><?php echo $item['kelas']; ?></td>
                                        <td><?php echo $item['jam_mulai']; ?></td>
                                        <td><?php echo $item['jam_selesai']; ?></td>
                                        <td><?php echo $item['kegiatan']; ?></td>
                                        <td>
                                            <a style = "margin-right:3px;" href="detailjurnal.php?id_jurnal=<?= $item['id_jurnal'];?>"><button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a><br><br>
                                            <a style = "margin-right:3px;" href="editjurnal.php?id_jurnal=<?= $item['id_jurnal']; ?>"><button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></a><br><br>
                                            <a style="margin-right:3px;" href="prosesjurnal.php?id_jurnal=<?= $item['id_jurnal'];?>&aksi=delete"><button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a>
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
           //'copyHtml5',
           //'excelHtml5',
           //'csvHtml5',
           //'pdfHtml5',
           //'print'
       ]
   } );
} );
</script>

    <!-- Right Panel -->
 <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>