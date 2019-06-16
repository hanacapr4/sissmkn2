<?php 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/e-learning/e-learning.php");
$obj = new E_learning();
$id_elearning = $_GET['id_elearning'];
$show = $obj->show_detail_elearning($id_elearning);
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
                        <?php 
                        foreach ($show as $data) {
                          ?>
                      <div class="card-footer" align="right">
                          <a href="<?php echo "http://localhost:8080/sissmkn2/file/".$data['nama_file']; ?>"> <button title="download data berupa file" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-import"></i> Download
                          </button></a>
                        </div>
                      <div class="card-body card-block">
                    <?php 
                        
                      ?>
                        <div class="col-lg-12 col-md-6">
                            <div class="social-box">
                                    <object data="<?php echo "file/".$data['nama_file']; ?>" type="application/docx"></object>
                                <ul>
                                      <h5 class="text-sm-center mt-2 mb-1"><?php echo $data["judul"]; ?></h5>
                                    <div class="location text-sm-center"><?php echo $data["tanggal_upload"]; ?></div>
                                </ul>
                                <ul>
                                      <span class="count"> <?php echo $data["deskripsi"]; ?></span>
                                </ul>
                            </div>
                        </div><!--/.col-->
                        <?php }; ?>
                      </div>
                  </div>
              </div>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>

