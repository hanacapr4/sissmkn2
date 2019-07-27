<?php
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php");
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
                        <div class="card-footer">
                          <a href="tambahjurnal.php"><button title="Tambah Jurnal Harian Kelas" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Pendaftaran
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong> Jurnal Harian Kelas
                        </div>
                        <div class="card-body">
                          <table id="table" class="table table-striped table-bordered">
                          <thead>
                <tr>
                   <th>ID</th>                               
                                    <th>USER</th>
                                    <th>TAHUN AJAR</th>
                                    <th>GURU</th> 
                                    <th>HARI</th>
                                    <th>TANGGAL</th>
                                    <th>KELAS</th>
                                    <th>JAM MULAI</th>
                                    <th>JAM SELESAI</th>
                                    <th>KEGIATAN</th>
                                    <th>KETERCAPAIAN</th>
                                    <th>KETERANGAN</th>
                                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $db = new PDO("mysql:host=localhost;dbname=webtemp","root","");
                $stmt = $db->prepare("select * from t_jurnal");
                $stmt->execute();
                while($item = $stmt->fetch()){
                ?>
                <tr>
                    <td><?php echo $item['id_jurnal']; ?></td>
                    <td><?php echo $item['userid']; ?></td>
                    <td><?php echo $item['thajar']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['hari']; ?></td>
                                    <td><?php echo $item['tgl']; ?></td>
                                    <td><?php echo $item['kelas']; ?></td>
                                    <td><?php echo $item['jam_mulai']; ?></td>
                                    <td><?php echo $item['jam_selesai']; ?></td>
                                    <td><?php echo $item['kegiatan']; ?></td>
                                    <td><?php echo $item['sdh_blm']; ?></td>
                                    <td><?php echo $item['ket']; ?></td>
                                    <td width="220px">
                                        <a style = "margin-right:3px;" href="detailjurnal.php?id_jurnal=<?= $item['id_jurnal'];?>"<button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a>
                                        <a style = "margin-right:3px;" href="editjurnal.php?id_jurnal=<?= $item['id_jurnal']; ?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></a>
                                        <a href="prosesjurnal.php?id_jurnal=<?= $item['id_jurnal'];?>&aksi=delete"<button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a>
                                      </td>
                                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->


<script src="jquery.min.js"></script>
    <script src="ddtf.js"></script>
    <script>
        $('#table').ddTableFilter();
    </script>

    <!-- Right Panel -->

 <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>