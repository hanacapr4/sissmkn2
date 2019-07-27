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
$siteurl = 'http://localhost:8080/SISSMKN2';

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
       

      
  <div class="content mt-3"> 
            <div class="animated fadeIn">
              <div class="row">
                <div class="col-lg-12"> 
              <input type="hidden" value="0" name="skor" id="skor">
                <div id="soalpg">
                <?php
        $konek = mysqli_connect("localhost","root","","webtempfix");
        $query1  = "SELECT * FROM ujian_online_detail WHERE id_ujian_online='".$id_ujian_online."' and jenis_soal = 'Pilihan Ganda'";
        
        $tampil1 = mysqli_query($konek, $query1); 
        $no = 1;
        $soalsoal2 = array();
        while($data1=mysqli_fetch_array($tampil1)){
          $soalsoal2[]=$data1;
        }
        shuffle($soalsoal2);
       foreach($soalsoal2 as $v){
          ?>
                    <div class="card">
                    <div class="kumpulansoalpg">
                    <input type="hidden" value="<?= $v['jawaban_benar'];?>" id="kunci<?= $v['id_ujian_online_detail'];?>">
                        <div class="card-body card-block ">
                        <div class="row form-group">
                                <div style="margin-left: 15px"><?= $no; ?>. </div> 
                            <?php if($v['gambar']){ ?>
                                <div class="col-12 col-md-11"><img src="<?php echo "./../../../file/".$v['gambar']; ?>" width=150></div>
                                <div class="col col-md-1"></div> 
                            <?php } ?>
                                <div class="col-12 col-md-10" align="float-left"><?php echo $v['soal']; ?></div>
                        </div>
                                    <?php 
                            $choice = array("a","b","c","d","e");
                            $pilihan = array("a","b","c","d","e");
                            shuffle($choice);
                            for($i=0;$i<5;$i++){
                          ?>
                            <?php $pil = $choice[$i];  ?>
                            <input type="radio" id="jawab<?= $v['id_ujian_online_detail'].$pil;?>" name="jawabanpg<?= $v['id_ujian_online_detail'];?>" value="<?= $pil; ?>">
                              <label for="jawabanpg<?= $v['id_ujian_online_detail'].$pil;?>"><?= $pilihan[$i]; ?>. <?= $v["jawaban_".$pil]; ?> <span id="<?= $pil.$v['id_ujian_online_detail'] ?>" style="float:right"></span></label><br/>
                            <?php } ?>
                        </div>
                        </div>
                        <div class="card-footer" >
                              
                                <button type="button" onclick="prevpg(event,<?= $v['id_ujian_online_detail']; ?>)" class="btn btn-primary btn-sm">
                                  <i class="fa fa-dot-circle-o"></i> Prev
                                </button>
                                <button type="button" onclick="nextpg(event,<?= $v['id_ujian_online_detail']; ?>)" class="btn btn-primary btn-sm">
                                  <i class="fa fa-dot-circle-o"></i> Next
                                </button>
                      </div>
                      </div>

              <?php $no++; } ?>
                  </div>
               </div>



               <div class="col-lg-12"> 
                <div id="soalisi">
                <?php
        $konek = mysqli_connect("localhost","root","","webtempfix");
        $query1  = "SELECT * FROM ujian_online_detail WHERE id_ujian_online='".$id_ujian_online."' and jenis_soal = 'Essay'";
        
        $tampil1 = mysqli_query($konek, $query1); 
        $no = 1;
        $soalsoal1 = array();
  
        while($data1=mysqli_fetch_array($tampil1)){
          $soalsoal1[]=$data1;
          
        } shuffle($soalsoal);
       foreach($soalsoal1 as $v){
          ?>
      
                    <div class="card">
                    <div class="kumpulansoalisi">
                    <div class="col-12 col-md-11"><input type="hidden" id="id_jawaban_siswa<?= $v['id_ujian_online_detail']; ?>" name="id_jawaban_siswa" value="0" class="form-control"></div>
                        <div class="card-body card-block ">
                        <div class="row form-group">
                                <div class="col col-md-1"><?= $no; ?>. </div> 
                            <?php if($v['gambar']){ ?>
                                <div class="col-12 col-md-11"><img src="<?php echo "./../../../file/".$v['gambar']; ?>" width=150></div>
                                <div class="col col-md-1"></div> 
                            <?php } ?>
                                <div class="col-12 col-md-10" align="float-left"><?php echo $v['soal']; ?></div>
                        </div>
                        <div class="form-group">
                        <label for="comment">Jawaban : </label>
                        <textarea class="form-control" rows="5" id="jawabanisi<?= $v['id_ujian_online_detail']; ?>" placeholder="Masukkan Jawaban"></textarea>
                      </div>
                        </div>
                        </div>
                        <div class="card-footer" >
                        <button type="button" onclick="previsi(event,<?= $v['id_ujian_online_detail']; ?>)" class="btn btn-primary btn-sm">
                                  <i class="fa fa-dot-circle-o"></i> Prev
                                </button>
                                <button type="button" onclick="nextisi(event,<?= $v['id_ujian_online_detail']; ?>)" class="btn btn-primary btn-sm">
                                  <i class="fa fa-dot-circle-o"></i> Next
                                </button>
                      </div>
                      </div>

              <?php $no++; } ?>
                   <input type="hidden" name="jmlessay" id="jmlessay" value="<?= count($soalsoal1); ?>">
                  </div>
                  <button type="button" onclick="konfirmasi()" class="btn btn-danger btn-sm">konfirmasi</button>
               </div>
                
                          
                          

                    </div>
               </div>
             <div>

    
		
            




<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>

<script type="text/javascript" src="../../../assets/js/vendor/jquery.paginate.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $('div#soalpg').paginate({
  scope: $('div.kumpulansoalpg'), // targets all div elements
  perPage: 1
});

$('div#soalisi').paginate({
  scope: $('div.kumpulansoalisi'), // targets all div elements
  perPage: 1
});

// var arrayFromPHP = <?php echo json_encode($soalsoal2) ?>;
// arrayFromPHP.map(d=>{
//   console.log(d.id_ujian_online_detail);
// })
  
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
  konfirmasi(this);
}
}, 1000);

nextpg=(e,id_soal)=>{
        e.preventDefault();
        $('div#soalpg').data('paginate').switchPage('next')
      }
      
prevpg=(e,id_soal)=>{
        e.preventDefault();
        $('div#soalpg').data('paginate').switchPage('prev') 
      }
  
nextisi=(e,id_soal)=>{
        e.preventDefault();
        $('div#soalisi').data('paginate').switchPage('next')
      }

previsi=(e,id_soal)=>{
  e.preventDefault();
  $('div#soalisi').data('paginate').switchPage('prev') 
}


})
    var total_soalpg = "<?php echo count($soalsoal2) ?>";
    var penilaian = Number(100) / Number(total_soalpg);
    var datapg = <?php echo json_encode($soalsoal2) ?>;
    var dataisi = <?php echo json_encode($soalsoal1) ?>;
    konfirmasi=async()=>{
     
   await datapg.map(d=>{
      var id_soal=d.id_ujian_online_detail;
      let kunci = $("#kunci"+id_soal).val();
      
      let jawabanpilihan = document.querySelector('input[name="jawabanpg'+id_soal+'"]:checked').value;
      if(kunci.toLowerCase()===jawabanpilihan){
                var skorlama = $("#skor").val();
                var tambah = Number(skorlama) + Number(penilaian);
                $("#skor").val(tambah);
            }
          
    })
    var nilai =  $("#skor").val();
    var jmlessay = $("#jmlessay").val();

    await $.ajax({
        url: "http://localhost:8080/SISSMKN2/config/ujian-online/konfirmasi.php",
        type:"post",
        data:{aksi:"simpannilai",nilai,jmlessay,idujian:"<?= $id_ujian_online; ?>"},
        success:function(response){
          console.log(response);
        }
    })

    var data = [];

    await dataisi.map(d=>{
      var id_soal=d.id_ujian_online_detail;
      var id_ujian="<?= $id_ujian_online; ?>";
      var id_jawaban = $("#id_jawaban_siswa"+id_soal).val();
      var jawaban = $("#jawabanisi"+id_soal).val()
      data.push({id_ujian:id_ujian,id_soal:id_soal,id_jawaban:id_jawaban,jawaban:jawaban});
    })

    await $.ajax({
        url: "http://localhost:8080/SISSMKN2/config/ujian-online/konfirmasi.php",
        type:"post",
        
        data:{aksi:"simpanjawaban",jawaban:data},
        success:function(response){
          console.log(response);
        }
    })

    window.location="http://localhost:8080/SISSMKN2/config/setSesi.php?unsesi=true";
    


}


</script>