<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/elearning/elearning.php");
$obj = new elearning();
$obj_kelas = new Kelas();
$obj_mapel = new Mata_pelajaran();
$obj_guru = new Guru();
$id_elearning = $_GET['id_elearning'];
$show3 = $obj->show_detail_elearning($id_elearning);
$show = $obj_kelas->show_kelas();
$show1 = $obj_mapel->show_mapel();
$show2 = $obj_guru->show_guru();
$showgurubyuser = $obj->get_guru($_SESSION['nip']);

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
                                <input type="hidden" name="nik" id="nik" value="<?php echo $showgurubyuser['nip'] ?>">
                                <input type="text" name="nama_guru" id="nama_guru" value="<?php echo $showgurubyuser['nama_guru'] ?>" class="form-control" disabled>
                                <!-- <select name="nik" value="" class="form-control" >
                          <?php foreach ($show2 as $data2) {
                           ?>
                                    <option value="<?php echo $data2["nip"]; ?>" 
                                      <?php if($data3["nip"] == $data2["nip"]) { 
                                        echo "selected";
                                      } ?> >
                                    <?php echo $data2["nama_guru"]; ?></option>
                          <?php } ?>
                                </select> -->
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelas</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_kelas" class="form-control">
                          <?php foreach ($show as $data) { ?>
                                    <option value="<?php echo $data["id_kelas"]; ?>" 
                                      <?php if($data3["id_kelas"] == $data["id_kelas"]) { 
                                        echo "selected";
                                      } ?>
                                      ><?php echo $data["kelas"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mata Pelajaran</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_mapel" class="form-control" >
                          <?php foreach ($show1 as $data1) {
                           ?>
                                    <option value="<?php echo $data1["idpel"]; ?>" 
                                      <?php if($data3["idpel"] == $data1["idpel"]) { 
                                        echo "selected";
                                      } ?>
                                      ><?php echo $data1["pelajaran"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="nama_file" name="nama_file" class="form-control-file" value="" required=""><?php echo $data3['nama_file'];?></div>
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