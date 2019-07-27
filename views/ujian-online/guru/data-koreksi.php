<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/ujian-online/ujian-online.php");
$obj = new Ujian_online();
$show = $obj->show_ujian();
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

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                          <!-- <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> export
                          </button> -->
                         
                        </div>
                        <div class="card-body">
                              <table id="example" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th width="9%">Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Jenis Ujian</th>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                    <th>Tanggal Ujian</th>
                                    <th>Tanggal Upload</th>
                                    <th>Status Ujian</th>
                                    <th width="15%">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no = 1;
                                    if(is_array($show) | (is_object($show))){
                                    foreach ($show as $data) {
                                    $date = date('l', strtotime($data['tgl_ujian'])); 
                                    $daylist = array('Sunday' => 'Minggu',
                                                     'Friday' => 'Jumat',
                                                     'Monday' => 'Senin',
                                                     'Saturday' => 'Sabtu', 
                                                     'Thursday' => 'Kamis',
                                                     'Tuesday' => 'Selasa',
                                                     'Wednesday' => 'Rabu',
                                                    );
                                ?>
                                <?php if ($data['nip'] == $_SESSION['nip']){ ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>   
                                            <td><?php echo $data["kelas"]; ?></td>
                                            <td><?php echo $data["pelajaran"]; ?></td>
                                            <td><?php echo $data["jenis_ujian"]; ?></td>
                                            <td><?php echo $daylist[$date]; ?></td>
                                            <td><?php echo $data["jam_mulai"]; ?> - <?php echo $data["jam_selesai"]; ?></td>
                                            <td><?php echo $data["tgl_ujian"]; ?></td>
                                            <td><?php echo $data["tgl_upload"]; ?></td>
                                            <td><?php echo $data["status_ujian"]; ?></td>
                                            <td>
                                            <a href="koreksi-ujian-online.php?id_ujian_online=<?php echo $data["id_ujian_online"]; ?>"><button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Koreksi Isian</button></a>
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