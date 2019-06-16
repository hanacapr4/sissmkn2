<?php 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/e-learning/e-learning.php");
$obj = new E_Learning();
$obj_kelas = new Kelas();
$obj_mapel = new Mata_pelajaran();
$obj_guru = new Guru();
$id_elearning = $_GET['id_elearning'];
$show3 = $obj->show_detail_elearning($id_elearning);
$show = $obj_kelas->show_kelas();
$show1 = $obj_mapel->show_mapel();
$show2 = $obj_guru->show_guru();

?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-12">
                    
                    <div class="card">
                      <div class="card-header">
                        <strong>Form</strong> Modul E-Learning 
                      </div>
                      <?php foreach ($show3 as $data3) {
                           ?>
                      <div class="card-body card-block">
                        <form action="proses_tambah.php?aksi=update" method="POST" class="form-horizontal" enctype="multipart/form-data">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tempatlahir" class=" form-control-label">ID </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="id_elearning" name="id_elearning" value="<?php echo $data3["id_elearning"]; ?>" class="form-control" readonly></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tempatlahir" class=" form-control-label">Judul</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="judul" name="judul" value="<?php echo $data3["judul"]; ?>" class="form-control" ></div>
                          </div>
                         <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                            <div class="col-12 col-md-9"><textarea name="deskripsi" id="deskripsi" rows="5" placeholder="" class="form-control"><?php echo $data3["deskripsi"]; ?></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Guru</label></div>
                            <div class="col-12 col-md-9">
                                <select name="nik" value="" class="standardSelect" tabindex="1" >
                                    <option value=""></option>
                          <?php foreach ($show2 as $data2) {
                           ?>
                                    <option value="<?php echo $data2["nik"]; ?>"><?php echo $data2["Nama_guru"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelas</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_kelas" class="standardSelect">
                                    <option value=""></option>
                          <?php foreach ($show as $data) { ?>
                                    <option value="<?php echo $data["id_kelas"]; ?>"><?php echo $data["nama_kelas"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mata Pelajaran</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_mapel" class="standardSelect" tabindex="1" >
                                    <option value=""></option>
                          <?php foreach ($show1 as $data1) {
                           ?>
                                    <option value="<?php echo $data1["id_mapel"]; ?>"><?php echo $data1["nama_mapel"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="nama_file" name="nama_file" class="form-control-file" value="<?php echo $data3['nama_file'];?>"></div>
                          </div>
                          <!-- <div class="row form-group">
                            <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                          </div> -->
                      </div>
                      <div class="card-footer" align="right">
                        <button type="submit" class="btn btn-primary btn-sm" id="update" name="update">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                  </div>
              </div>
          </form>
          <?php } ?>




<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>