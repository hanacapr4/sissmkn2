<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/ujian-online/ujian-online-detail.php");
$obj = new Ujian_online_detail();
$id_ujian_online = $_GET['id_ujian_online'];
$show = $obj->show_detail_ujian1($id_ujian_online);
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">E-Learning</a></li>
                            <li class="active">List Soal Ujian</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            if(is_array($show) | (is_object($show))){
        ?>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                          <!-- <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> export
                          </button> -->
                          <a href='form-ujian-online1.php?id_ujian_online=<?php echo $id_ujian_online ?>'><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data Soal
                          </button> </a>
                        </div>
                        <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>ID Ujian</th>
                                    <th>Soal</th>
                                    <th>Jenis Soal</th>
                                    <th>A</th>
                                    <th>B</th>
                                    <th>C</th>
                                    <th>D</th>
                                    <th>E</th>
                                    <th>Jawaban Benar</th>
                                    <!-- <th>Poin Nilai</th> -->
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($show as $data) { ?>
                                    <th><?php echo $data["no_soal"]; ?></th>   
                                    <th><?php echo $data["id_ujian_online"]; ?></th>
                                    <th><?php echo $data["soal"]; ?></th> 
                                    <th><?php echo $data['jenis_soal']; ?></th>
                                    <?php 
                                        if ($data['jenis_soal'] == "Pilihan Ganda") { ?>
                                    <th><?php echo $data["jawaban_a"]; ?></th>
                                    <th><?php echo $data["jawaban_b"]; ?></th>
                                    <th><?php echo $data["jawaban_c"]; ?></th>
                                    <th><?php echo $data["jawaban_d"]; ?></th>
                                    <th><?php echo $data["jawaban_e"]; ?></th>
                                    <th><?php echo $data["jawaban_benar"]; ?></th>
                                    <?php }
                                    elseif ($data['jenis_soal'] == "Essay") { ?>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <?php }
                                    ?>
                                    <!-- <th><?php echo $data['poin_nilai']; ?></th> -->

                                    <th>
                                    <!-- <a href="detail-ujian-online.php?id_ujian_online=<?php echo $data["id_ujian_online"]; ?>"><button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a> -->
                                    <a href="edit-ujian-online1.php?id_ujian_online_detail=<?php echo $data["id_ujian_online_detail"]; ?>"><button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></a>
                                    <a href="proses_tambah-ujian-detail.php?id_ujian_online_detail=<?php echo $data["id_ujian_online_detail"]; ?>&aksi=hapus" onclick="return confirm(\'Yakin?\')"><button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a></th>
                                </tr>
                                <?php } ?>
                              </tbody>
                          </table>
                          <?php     
                                
                            }

                                ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>