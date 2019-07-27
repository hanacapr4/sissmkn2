<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/ujian-online/jawaban-siswa.php");
$obj = new Jawaban_siswa();
$obj_siswa = new Siswa();
$show2 = $obj_siswa->show_siswa();
$id_ujian_online = $_GET['id_ujian_online'];
if(!isset($_SESSION["ujian"])){ ?>
    <script>alert('Maaf Ada Belum memulai ujian');
    window.location.href="./data-ujian-online.php"</script>
<?php }
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
                            <li class="active">List Ujian Online</li>
                        </ol>
                        <h6>Tersisa : <span id="waktu"></span></h6>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $konek = mysqli_connect("localhost","root","","webtempfix");

        $batas   = 1;
        $halaman = @$_GET['halaman'];
        if(empty($halaman)){
            $posisi  = 0;
            $halaman = 1;
        }
        else{ 
          $posisi  = ($halaman-1) * $batas; 
        }
        $show = $obj->show_ujian_siswa($id_ujian_online, $batas, $posisi);
        $query  = "SELECT * FROM ujian_online_detail WHERE id_ujian_online='".$id_ujian_online."' LIMIT $posisi,$batas";
        
        $tampil = mysqli_query($konek, $query); 
        $no = $posisi+1;
        while ($data=mysqli_fetch_array($tampil)){ ?>
  <div class="content mt-3"> 
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-12"> 
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="proses_tambah-soal-ujian.php?aksi=tambah" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="row form-group" style="display: none;">
                            <div class="col-12 col-md-11"><input type="text" id="id_jawaban_siswa" name="id_jawaban_siswa" value="<?php echo $obj->buat_kode('JWB-UO-', 5);?>" class="form-control"></div>
                            </div>
                            <div class="row form-group" style="display: none;">
                            <div class="col-12 col-md-11"><input type="text" id="id_ujian_online" name="id_ujian_online" value="<?php echo $data['id_ujian_online']; ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Siswa</label></div>
                            <div class="col-12 col-md-9">
                                <select name="nis" data-placeholder="Pilih Guru" class="standardSelect">
                                    <option value="">Pilih Siswa</option>
                          <?php foreach ($show2 as $data2) {
                           ?>
                                    <option value="<?php echo $data2["no_induk"]; ?>"><?php echo $data2["nama"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                            <div class="row form-group" style="display: none;">
                            <div class="col-12 col-md-11"><input type="text" id="no_soal" name="no_soal" value="<?php echo $data['no_soal']; ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-1"><?php echo $data['no_soal']; ?>. </div> 
                            <?php if($data['gambar']){ ?>
                                <div class="col-12 col-md-11"><?php echo $data['gambar']; ?></div>
                                <div class="col col-md-1"></div> 
                            <?php } ?>
                                <div class="col-12 col-md-10" align="float-left"><?php echo $data['soal']; ?></div>
                            </div>
                            <?php if ($data['jenis_soal'] == "Essay") { ?>
                            <div class="row form-group">
                                <div class="col col-md-1"></div> 
                                <div class="col-12 col-md-11"><textarea name="jawaban" id="jawaban" rows="5" placeholder="Content..." class="form-control"></textarea></div>
                            </div>
                            <?php } elseif ($data['jenis_soal'] == "Pilihan Ganda") { ?>
                            <div class="row form-group">
                            <div class="col col-md-12">
                              <div class="form-check">
                                <div class="radio">
                                <div class="col col-md-1"></div> 
                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="jawaban" name="jawaban" value="A" class="form-check-input"><?php echo $data['jawaban_a']; ?>
                                  </label>
                                </div>
                                <div class="radio">
                                <div class="col col-md-1"></div> 
                                  <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="jawaban" name="jawaban" value="A" class="form-check-input"><?php echo $data['jawaban_b']; ?>
                                  </label>
                                </div>
                                <div class="radio">
                                <div class="col col-md-1"></div> 
                                  <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="jawaban" name="jawaban" value="A" class="form-check-input"><?php echo $data['jawaban_c']; ?>
                                  </label>
                                </div>
                                <div class="radio">
                                <div class="col col-md-1"></div> 
                                  <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="jawaban" name="jawaban" value="A" class="form-check-input"><?php echo $data['jawaban_d']; ?>
                                  </label>
                                </div>
                                <div class="radio">
                                <div class="col col-md-1"></div> 
                                  <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="jawaban" name="jawaban" value="A" class="form-check-input"><?php echo $data['jawaban_e']; ?>
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                        </div>
                            <div class="card-footer" align="right">
                                <button type="submit" class="btn btn-primary btn-sm" id="tambah" name="tambah">
                                  <i class="fa fa-dot-circle-o"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>              
    </div>
  <?php $no++;


$query2     = mysqli_query($konek, "select * from ujian_online_detail WHERE id_ujian_online='".$id_ujian_online."'");
$jmldata    = mysqli_num_rows($query2);
$jmlhalaman = ceil($jmldata/$batas);
?>
<div class="card-body card-block" align="center">
    Nomor :
<?php
for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){ ?>
    <a href="data-ujian-online1.php?id_ujian_online=<?php echo $data["id_ujian_online"]; ?>&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php }
else{ 
    echo " <b>$i</b> "; 
}}
?>
<script type="text/javascript" src="../../../assets/js/vendor/jquery-2.1.4.min.js"></script>
<script>
$(document).ready(function(){
  var finis = "<?= $_SESSION['finished_time']; ?>";
  console.log(finis);
  var countDownDate = new Date(finis).getTime();
  var x = setInterval(function() {

// Get today's date and time
var now = new Date().getTime();
  
// Find the distance between now and the count down date
var distance = countDownDate - now;
  
// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
// Output the result in an element with id="demo"
$("#waktu").html(hours + "h "+ minutes + "m " + seconds + "s ");
  
// If the count down is over, write some text 
if (distance < 0) {
  clearInterval(x);
  $("#waktu").html("times up");
  window.location="http://localhost:8080/SISSMKN2/config/setSesi.php?unsesi=true";
}
}, 1000);
})
</script>


<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>