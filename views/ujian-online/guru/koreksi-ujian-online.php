<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/ujian-online/ujian-online.php");
$obj = new Ujian_online();
$id_ujian_online = $_GET['id_ujian_online'];
$show2 = $obj->show_siswa_mengerjakan($id_ujian_online);
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
                            <li class="active">koreksi</li>
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
                        <strong>Siswa Yang Mengerjakan</strong>
                      </div>
                      <div class="card-body card-block">
                      <select name="no_induk" data-placeholder="" id="pilihan" onchange="pilihSiswa()" class="form-control">
                                    <option value="0">Pilih Siswa</option>
                                    <?php foreach ($show2 as $data2) {
                                     ?>
                                              <option value="<?php echo $data2["no_induk"]; ?>"><?php echo $data2["nama"]; ?></option>
                                    <?php } ?>
                          </select>
                      </div>  
                  </div>
                </div>

              <?php if(isset($_GET["no_induk"])){
                $noinduk=$_GET["no_induk"];
                $obj = new Ujian_online();
                $cekPilihan = $obj->cekPilihan($id_ujian_online);
                $jawabansiswa = $obj->getJawabanSiswa($id_ujian_online,$noinduk);
                ?>
                <div class="col-lg-12"> 
                    <div class="card">
                      <div class="card-header">
                        <strong>List Jawaban</strong>
                      </div>
                    <?php $no=1; foreach($jawabansiswa as $v){ ?>
                      <div class="card-body card-block">
                      <div class="row form-group">
                                <div class="col col-md-1"><?= $no; ?>. </div> 
                            <?php if($v['gambar']){ ?>
                                <div class="col-12 col-md-11"><?php echo $v['gambar']; ?></div>
                                <div class="col col-md-1"></div> 
                            <?php } ?>
                                <div class="col-12 col-md-10" align="float-left"><?php echo $v['soal']; ?></div>
                                <textarea class="form-control" readonly rows="5" id="jawabanisi<?= $v['id_ujian_online_detail']; ?>"><?= $v["jawaban"]; ?></textarea>

                        </div>
                      </div>  
                            <?php $no++; } ?>
                  </div>
                </div>


                  <div class="col-lg-12"> 
                    <div class="card">
                      <div class="card-header">
                        <strong>Penilaian</strong>
                      </div>
                      <?php $nilai = $obj->getNilai($id_ujian_online,$noinduk); ?>
                      <div class="card-body card-block">
                      
                                    <?php foreach ($nilai as $v) {
                                      if($v["status_nilai"]=="sudah"){
                                        echo "<h1> Siswa Telah di nilai dengan nilai total <b>".$v["nilai_total"]."</b></h1>";
                                      }else{
                                      ?>
                                    
                                        <h4>( Nilai Pilihan Ganda + Nilai Isian )/ 2 = Total</h4> ( <input type="text" id="nilai_pg" value="<?= $v["nilai_pg"]; ?>" readonly> + <input onchange="hitung()" type="number" min="0" max="100" id="nilai_isian" name="nilai_isian" value="" > ) / 2 = <input readonly type="text" id="nilai_total" name="nilai_total" value="" >
                                        <button id="simpan" class="btn btn-warning btn-sm">Simpan Nilai</button>
                                    <?php } }?>
                                   
                          
                      </div>  
                  </div>
                </div>          
                


              <?php } ?>
              </div>
            </div>
          </div>
           
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>

<script type="text/javascript">
    var id_ujian = "<?= $id_ujian_online; ?>"
      pilihSiswa=()=>{
        var pilihan = $("#pilihan option:selected").val();
        window.location = "http://localhost:8080/SISSMKN2/views/ujian-online/guru/koreksi-ujian-online.php?id_ujian_online="+id_ujian+"&no_induk="+pilihan;
      }
      hitung=()=>{
        var nilaipg = $("#nilai_pg").val();
        var nilaiisi = $("#nilai_isian").val();
        var jumlah = 0;
        if(nilaiisi>100){
          $("#nilai_isian").val(0);
        }else{
        var jmlpilihanganda = "<?php echo  $cekPilihan; ?>";
        if(jmlpilihanganda>0){
          jumlah = (Number(nilaipg)+Number(nilaiisi))/2;
        }else{
          jumlah = Number(nilaiisi);
        }
        
        $("#nilai_total").val(jumlah);
        }
      }

      $("#simpan").click(function(e){
        e.preventDefault();    
        var nilaiisi = $("#nilai_isian").val();
        var nilaitotal = $("#nilai_total").val();
        var noinduk = "<?= $noinduk; ?>";
        $.ajax({
            url: "http://localhost:8080/SISSMKN2/config/ujian-online/konfirmasi.php",
            type:"post",
            data:{aksi:"nilaifix",nilaiisi,nilaitotal,noinduk,idujian:"<?= $id_ujian_online; ?>"},
            success:function(response){
              console.log(response);
               window.location = "http://localhost:8080/SISSMKN2/views/ujian-online/guru/koreksi-ujian-online.php?id_ujian_online=<?= $id_ujian_online; ?>";
            }
        })
      })
</script>