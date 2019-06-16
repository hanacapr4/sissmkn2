<?php 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/e-learning/e-learning.php");
$siteurl = 'http://localhost:8080/sissmkn2';
$obj = new E_learning();
$obj_kelas = new Kelas();
$obj_mapel = new Mata_pelajaran();
$showkelas = $obj_kelas->show_kelas();
$showmapel = $obj_mapel->show_mapel();
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
                            <strong class="card-title">List </strong>Data File
                        </div>
                        <form method="POST" action="">
                        <div class="card-body">
                          <div class="col col-md-1"><label for="selectSm" class=" form-control-label">Kelas</label></div>
                            <div class="col-3 col-md-2">
                              <select name="id_kelas" id="id_kelas" class="form-control-sm form-control">
                                <option value="">All</option>
                                <?php foreach ($showkelas as $datakelas) { ?>
                                <option value="<?php echo $datakelas['id_kelas']; ?>"><?php echo $datakelas['nama_kelas']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          <div class="col col-md-1"><label for="selectSm" class=" form-control-label">Mata Pelajaran</label></div>
                            <div class="col-3 col-md-2">
                              <select name="id_mapel" id="id_mapel" class="form-control-sm form-control">
                                <option value="">All</option>
                                <?php foreach ($showmapel as $datamapel) { ?>
                                <option value="<?php echo $datamapel['id_mapel']; ?>"><?php echo $datamapel['nama_mapel'];?></option>
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
                    $show = $obj->show_elearning($id_kelas, $id_mapel);
                    if (mysqli_num_rows($show) == 0) {
                        echo "tidak ditemukan";
                    }else{
                    while ($data = mysqli_fetch_array($show)) {
                     	?>
                    <a href="detail-elearning.php?id_elearning=<?php echo $data["id_elearning"]; ?>">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $siteurl; ?>/images/placeholder.png" alt="Card image cap">
                            <div class="card-body" style="height: 150px;">
                                <h4 class="card-title mb-1"><?php echo $data["judul"]; ?></h4>
                                <p class="card-text"><?php echo $data["tanggal_upload"]; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>
            
                    <?php }}
                   } ?>
                            
            </div>
        </div>
</div>
</div>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>