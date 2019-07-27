<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/elearning2.php");
$siteurl = 'http://localhost:8080/SISSMKN2';
$obj = new elearning2();
$obj_kelas = new Kelas();
$obj_mapel = new Mata_pelajaran();
$showkelas = $obj_kelas->show_kelas_ujian($_SESSION['nip']);
$showmapel = $obj_mapel->show_mapel();
$showmapelbyuser = $obj->get_mapel($_SESSION['nip']);
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
                            <li><a href="#">E-learning</a></li>
                            <li class="active">List File</li>
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
                            <strong class="card-title">List </strong>Data Nilai
                        </div>
                        <form method="POST" action="">
                        <div class="card-body">
                          <div class="col col-md-1"><label for="selectSm" class=" form-control-label">Kelas</label></div>
                            <div class="col-3 col-md-2">
                              <select name="id_kelas" id="id_kelas" class="form-control-sm form-control">
                                <!-- <option value="">All</option> -->
                                <?php foreach ($showkelas as $datakelas) { ?>
                                <option value="<?php echo $datakelas['id_kelas']; ?>"><?php echo $datakelas['kelas']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          <div class="col col-md-1"><label for="selectSm" class=" form-control-label">Mata Pelajaran</label></div>
                            <div class="col-3 col-md-2">
                              <select name="id_mapel" id="id_mapel" class="form-control-sm form-control">
                                <!-- <option value="">All</option> -->
                                <?php foreach ($showmapelbyuser as $datamapel) { ?>
                                <option value="<?php echo $datamapel['idpel']; ?>"><?php echo $datamapel['pelajaran'];?></option>
                                <?php } ?>
                              </select>
                            </div>
                          <button title="filter" type="Submit" id="cari" value="cari" name="cari" class="btn btn-primary btn-sm"><i class="fa ti-filter"></i> Submit
                          </button> </a>
                        </div>
                        </form> 
                    </div>
                    
                    <?php
                    if (isset($_POST['cari'])){   
                    $id_kelas = $_POST['id_kelas'];
                    $id_mapel = $_POST['id_mapel'];
                    $show = $obj->cari_nilai($id_kelas, $id_mapel);
                    if (mysqli_num_rows($show) == 0) {
                        echo "tidak ditemukan";
                    }else{
                    while ($data = mysqli_fetch_array($show)) {
                     	?>
                            <div class="card-body">
                              <table id="example" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th width="9%">Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Nilai Pilihan Ganda</th>
                                    <th>Nilai Isian</th>
                                    <th>Nilai Total</th>
                                  </tr>
                                </thead>
                                <tbody>
                               <?php 
                                    $no = 1;
                                    if(is_array($show) | (is_object($show))){
                                    foreach ($show as $data) {
                                ?>
                                        <tr>
                                            <td><?php echo $no ?></td>   
                                            <td><?php echo $data["nama"]; ?></td>
                                            <td><?php echo $data["kelas"]; ?></td>
                                            <td><?php echo $data["pelajaran"]; ?></td>
                                            <td><?php echo $data["nilai_pg"]; ?></td>
                                            <td><?php echo $data["nilai_isi"]; ?></td>
                                            <td><?php echo $data["nilai_total"]; ?></td>
                                        </tr>
                                        <?php
                                        $no++;  
                                }}
                                ?>
                              </tbody>
                            </table>
                        </div>
            
                    <?php }}
                   } ?>
                            
            </div>
        </div>
</div>
</div>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>