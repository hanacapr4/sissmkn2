<?php 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/e-learning/e-learning.php");
$obj = new E_learning();
$show = $obj->show_elearning_guru();
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
                            <li class="active">List Modul</li>
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
                          <a href="form-elearning.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-"></i> Tambah Data Modul E-Learning
                          </button> </a>
                        </div>
                        <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>ID.</th>
                                    <th>Judul</th>
                                    <th width="9%">Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>File</th>
                                    <th>Tanggal Upload</th>
                                    <th width="28%"></th>
                                  </tr>
                                </thead>
                                <tbody>
                               <?php 
                                    $no = 1;
                                    if(is_array($show) | (is_object($show))){
                                    foreach ($show as $data) {
                           ?>
                                            <th><?php echo $data['id_elearning']; ?></th>   
                                            <th><?php echo $data["judul"]; ?></th>
                                            <th><?php echo $data["nama_kelas"]; ?></th>
                                            <th><?php echo $data["nama_mapel"]; ?></th>
                                            <th><?php echo $data["nama_file"]; ?></th>
                                            <th><?php echo $data["tanggal_upload"]; ?></th>
                                            <th>
                                            <a href="../siswa/detail-elearning.php?id_elearning=<?php echo $data["id_elearning"]; ?>"><button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a>
                                            <a href="edit-elearning.php?id_elearning=<?php echo $data["id_elearning"]; ?>"><button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></a>
                                            <a href='proses_tambah.php?id_elearning=<?php echo $data["id_elearning"]; ?>&aksi=hapus' onclick="return confirm(\'Yakin?\')"><button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a>
                                        </tr>
                                        <?php
                                        $no++;  
                                     
                                }}
                                ?>
                                 
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>