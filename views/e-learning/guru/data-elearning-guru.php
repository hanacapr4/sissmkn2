<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/elearning2.php");
$obj = new elearning2();
$show = $obj->show_elearning_guru2();
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
                          <a href="form-elearning.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data Modul E-Learning
                          </button> </a>
                        </div>
                        <div class="card-body">
                              <table id="example" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th width="9%">Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>File</th>
                                    <th>Tanggal Upload</th>
                                    <th width="20%">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                               <?php 
                                    $no = 1;
                                     
                                    if(is_array($show) | (is_object($show))){
                                    foreach ($show as $data) {
                                        if ($data['nip'] == $_SESSION['nip']){
                           ?>
                                        <tr>
                                            <td><?php echo $data['id_elearning']; ?></td>   
                                            <td><?php echo $data["judul"]; ?></td>
                                            <td><?php echo $data["kelas"]; ?></td>
                                            <td><?php echo $data["pelajaran"]; ?></td>
                                            <td><?php echo $data["nama_file"]; ?></td>
                                            <td><?php echo $data["tanggal_upload"]; ?></td>
                                            <td>
                                            <a href="../siswa/detail-elearning.php?id_elearning=<?php echo $data["id_elearning"]; ?>"><button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a>
                                            
                                            <a href="edit-elearning.php?id_elearning=<?php echo $data["id_elearning"]; ?>"><button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></a>
                                            <a href='proses_tambah.php?id_elearning=<?php echo $data["id_elearning"]; ?>&aksi=hapus' onclick="return confirm(\'Yakin?\')"><button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;  
                                }}}
                                ?>
                                 
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>