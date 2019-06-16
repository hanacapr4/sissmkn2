<?php 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/e-learning/e-learning.php");
$obj = new E_Learning();
$obj_kelas = new Kelas();
$obj_mapel = new Mata_pelajaran();
$obj_guru = new Guru();
$show = $obj_kelas->show_kelas();
$show1 = $obj_mapel->show_mapel();
$show2 = $obj_guru->show_guru();
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
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">E-Learning</a></li>
                            <li class="active">Form Modul</li>
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
                      <div class="card-body card-block">
                        <form action="proses_tambah.php?aksi=tambah" method="POST" class="form-horizontal" enctype="multipart/form-data">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tempatlahir" class=" form-control-label">ID </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="id_elearning" name="id_elearning" value="<?php echo $obj->buat_kode('DE-', 5);?>" class="form-control" required readonly></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tempatlahir" class=" form-control-label">Judul</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="judul" name="judul" placeholder="Judul Modul" class="form-control" ></div>
                          </div>
                         <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                            <div class="col-12 col-md-9"><textarea name="deskripsi" id="deskripsi" rows="5" placeholder="Content..." class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Guru</label></div>
                            <div class="col-12 col-md-9">
                                <select name="nik" data-placeholder="Pilih Guru" class="standardSelect">
                                    <option value="">Pilih Guru</option>
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
                                <select name="id_kelas" data-placeholder="Pilih Kelas" class="standardSelect" required="">
                                    <option value="">Pilih Kelas</option>
                          <?php foreach ($show as $data) {
                           ?>
                                    <option value="<?php echo $data["id_kelas"]; ?>"><?php echo $data["nama_kelas"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mata Pelajaran</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_mapel" data-placeholder="Pilih Mapel" class="standardSelect" required="">
                                    <option value="">Pilih Mapel</option>
                          <?php foreach ($show1 as $data1) {
                           ?>
                                    <option value="<?php echo $data1["id_mapel"]; ?>"><?php echo $data1["nama_mapel"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="nama_file" name="nama_file" class="form-control-file" required=""></div>
                          </div>
                          <!-- <div class="row form-group">
                            <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                          </div> -->
                      </div>
                      <div class="card-footer" align="right">
                        <button type="submit" class="btn btn-primary btn-sm" id="tambah" name="tambah">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                  </div>
              </div>
          </form>




<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>

   