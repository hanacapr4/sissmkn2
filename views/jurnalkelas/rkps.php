<?php
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php");
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Rencana Program dan Kegiatan Pembelajaran Semester</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Rencana Program dan Kegiatan Pembelajaran Semester</a></li>
                            <li class="active">List RKPS</li>
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
                            <i class="fa ti-upload"></i> Cetak RKPS
                          </button>
                          </a>
                          <a href="#"><button title="Tambah Jurnal Harian Kelas" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah RKPS
                          </button> </a>
                          <a href="#"><button title="Filter Jurnal Harian Kelas" type="submit" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Filter RKPS
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
                                    <th>NIP</th> 
                                    <th>NAMA</th>
                                    <th>MATERI</th>
                                    <th>MATA PELAJARAN</th>
                                    <th>STATUS</th>
                                    <th>KETERANGAN</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    
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