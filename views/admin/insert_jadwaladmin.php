  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Guru.php"); ?>
  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/detailkelas.php"); ?>
  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Mapel.php"); ?>
  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Ruangan.php"); ?>
  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Hari.php"); ?>
  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kelas.php"); ?>
  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Programahli.php"); ?>
  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/jadwaladmin.php"); ?>

       <!-- Header-->
<?php
//memanggil class jadwaladmin
$tampilnip = new jadwaladmin();

$object2 = new Guru();
//$object3 = new pembagiankelas();
$object4 = new Mapel();
$object5 = new Ruangan();
$object6 = new Hari();
$object7 = new Kelas();
$object8 = new Programahli();

$shows = $object2->tampildata();
//$showss = $object3->tampildata();
$showsss = $object4->tampildata();
$showssss = $object5->tampildata();
$showsssss = $object6->tampildata();
$showssssss = $object7->tampildata();
$showsssssss = $object8->tampildata();

//menampilkan 
$hehe = $tampilnip->tampilnip();
$hehe2 = $tampilnip->tampilnama();
$hehe3 = $tampilnip->tampilkelas();
$hehe4 = $tampilnip->tampilpelajaran();
$hehe5 = $tampilnip->tampilprogram();



?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Insert Jadwal</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">List</a></li>
                            <li class="active">Input Jadwal</li>
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
                            <strong class="ccrd-title">Isi Data Jadwal</strong>
                        </div>
                        <div class="card-body card-block">

                          <!-- Credit Card -->
                          
                                      <form action="proses_jadwal2.php?aksi=insert" method="post">

                                         <!-- <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id jadwal</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="idajar" name="idajar" placeholder="" class="form-control"></div>
                                          </div> -->
                                           <!--div class="row form-group">
                                             <div class="col col-md-3"><label for="selectSm" class=" form-control-label">NIP</label></div> 
                                             <div class="col-12 col-md-5">
                                             <select name="nip" id="nip" class="form-control-sm form-control">
                                              <?php foreach ($hehe as $data) { ?>
                                                  <option value="<?php echo $data['nip']; ?>">
                                                  <?php echo $data['nip']; ?></option>
                                                  <?php } ?>
                                               </select>
                                             </div>
                                           </div>-->
                                                   <div class="row form-group">
                                            <div class="col col-md-3">
                                            <label for="selectSm" class=" form-control-label">Nama Guru</label>
                                          </div>              
                                        <div class="col-5 col-md-5 ">
                                         <select name="nama" class="form-control"  onchange="cek_database()" id="id">
      <option value="">--- PILIH GURU ---</option>
      <?php foreach ($tampilnip->get_liststaff() as $data) {
                                             ?>
                                                      <option value="<?= $data['nama']; ?>"><?= $data['nama']; ?></option>
                                            <?php } ?>
                                             </select>
                                            </div>
                                          </div>  

                                             <!--div class="row form-group">
                                             <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Nama Guru</label></div> 
                                             <div class="col-12 col-md-5">
                                             <select name="nama" id="nama" class="form-control-sm form-control">
                                              <?php foreach ($hehe2 as $data) { ?>
                                                  <option value="<?php echo $data['nama']; ?>">
                                                  <?php echo $data['nama']; ?></option>
                                                  <?php } ?>
                                               </select>
                                             </div>
                                           </div>-->
                                                   <div class="row form-group">
                                            <div class="col col-md-3">
                                            <label for="selectSm" class=" form-control-label">NIP</label>
                                          </div>              
                                        <div class="col-5 col-md-5 ">
                                          <input type="text" name="nip"  class="form-control" id="nip" readonly>
                                           </div>
                                          </div>  
                                            <div class="row form-group">
                                             <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Mata Pelajaran</label></div> 
                                             <div class="col-12 col-md-5">
                                             <input type="text" name="pelajaran"  class="form-control" id="pelajaran" readonly>
                                             </div>
                                           </div>
                                           
                                           <div class="row form-group">
                                              <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Kelas</label></div> 
                                             <div class="col-12 col-md-5">
                                           <select name="kelas" class="form-control"  onchange="cek_database1()" id="id2">
      <option value="">-</option>
      <?php foreach ($tampilnip->get_listkelas() as $data) {
                                             ?>
                                                      <option value="<?= $data['kelas']; ?>"><?= $data['kelas']; ?></option>
                                            <?php } ?>
           </select>
                                            </div>
                                          </div>
                                                

                                           <div class="row form-group">
                                             <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Program</label></div>  
                                             <div class="col-12 col-md-5">
                                              <input type="text" name="program"  class="form-control" id="program" readonly>
                                             </div>
                                           </div>




                                               <!-- <div class="row form-group">
                                            <div class="col col-md-3">
                                            <label for="selectSm" class=" form-control-label">Jam Pel</label>
                                          </div>              
                                        <div class="col-5 col-md-5 ">
                                          <select name="jampel" id="jampel" class="form-control-sm form-control">
                                         <option value="1">JAM 1</option>
                                         <option value="2">JAM 2</option>
                                         <option value="3">JAM 3</option>
                                         <option value="4">JAM 4</option>
                                         <option value="5">JAM 5</option>
                                         <option value="6">JAM 6</option>
                                         <option value="7">JAM 7</option>
                                         <option value="8">JAM 8</option>
                               
                                               </select>
                                            </div>
                                          </div>-->


                                              <div class="row form-group">
                                            <div class="col col-md-3">
                                            <label for="selectSm" class=" form-control-label">Semester</label>
                                          </div>              
                                        <div class="col-5 col-md-5 ">
                                          <select name="Semester" id="sem" class="form-control-sm form-control">
                                         <option value="1">1</option>
                                         <option value="2">2</option>
                                         <option value="3">3</option>
                                         <option value="4">4</option>
                                         <option value="5">5</option>
                                         <option value="6">6</option>
                                               </select>
                                            </div>
                                          </div>  

                                              <div class="row form-group">
                                            <div class="col col-md-3"><label for="input-normal" class=" form-control-label">Tahun Ajaran</label></div>
                                           <div class="col-5 col-md-5"><input type="text" id="th_ajar" name="th_ajar" placeholder="" class="form-control"></div>
                                           </div>  

                                           <div class="row form-group">
                                            <div class="col col-md-3"><label for="input-normal" class=" form-control-label">Agama</label></div>
                                           <div class="col-5 col-md-5"><input type="text" id="agama" name="agama" placeholder="" class="form-control"></div>
                                           </div>

                                           <div class="row form-group">
                                            <div class="col col-md-3"><label for="input-normal" class=" form-control-label">Jampel</label></div>
                                           <div class="col-5 col-md-5"><input type="text" id="jampel" name="jampel" placeholder="" class="form-control"></div>
                                           </div>  

                                             <div class="row form-group">
                                             <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Hari</label></div>  
                                             <div class="col-12 col-md-5">
                                             <select name="hari" id="hari" class="form-control-sm form-control">
                                         <option value="0">--- PILIH HARI ---</option>              
                                         <option value="Senin">Senin</option>
                                         <option value="Selasa">Selasa</option>
                                         <option value="Rabu">Rabu</option>
                                         <option value="Kamis">Kamis</option>
                                         <option value="Jumat">Jumat</option>
                                         <option value="Sabtu">Sabtu</option>
                                               </select>
                                             </div>
                                           </div>

                                                <div class="row form-group">
                                            <div class="col col-md-3">
                                            <label for="selectSm" class=" form-control-label">Jam Ke</label>
                                          </div>              
                                        <div class="col-5 col-md-5 ">
                                          <select name="jam_ke" id="jam_ke" class="form-control-sm form-control">
                                         <option value="0">--- PILIH JAM KE ---</option> 
                                         <option value="1">1</option>
                                         <option value="2">2</option>
                                         <option value="3">3</option>
                                         <option value="4">4</option>
                                         <option value="5">5</option>
                                         <option value="6">6</option>
                                         <option value="7">7</option>
                                         <option value="8">8</option>
                               
                                               </select>
                                            </div>
                                          </div>

                                          <div class="row form-group">
                                            <div class="col col-md-3">
                                            <label for="selectSm" class=" form-control-label">Jam Pel</label>
                                          </div>              
                                        <div class="col-5 col-md-5 ">
                                          <select name="jam_pel" id="jam_pel" class="form-control-sm form-control">
                                         <option value="0">--- PILIH JAM PEL ---</option> 
                                         <option value="1">1 Jam</option>
                                         <option value="2">2 Jam</option>
                                         <option value="3">3 Jam</option>
                                         <option value="4">4 Jam</option>
                                         <option value="5">5 Jam</option>
                               
                                               </select>
                                            </div>
                                          </div>
                                          <!--<div class="row form-group">
                                             <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Ruangan</label></div>  
                                             <div class="col-12 col-md-5">
                                             <select name="id" id="id" class="form-control-sm form-control">
                                              <?php foreach ($showssss as $data) { ?>
                                                <option value="<?php echo $data['id']; ?>">
                                                  <?php echo $data['nama']; ?>
                                                </option>
                                             <?php } ?>
                                               </select>
                                             </div>
                                           </div>-->
                                            


                                               
                                          

                                          

                    <div class="card-footer">
                      <a href="jadwaladmin.php"><button title="Hapus" type="button" class="btn btn-dark btn-sm"><i class="fa ti-back"></i>Kembali</button></a>

                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                    </div></form>
                     <!-- .card -->

                  </div><!--/.col-->

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


   <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <script type="text/javascript">

    function cek_database(){
        var id = $("#id").val();
        $.ajax({
            url: 'mdl.php',
            data:"id="+id ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#nip').val(obj.nip);
      $('#pelajaran').val(obj.pelajaran);
      
            
        });
    }
  
  function cek_database1(){
        var id = $("#id2").val();
        $.ajax({
            url: 'mdl2.php',
            data:"id2="+id ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#program').val(obj.program);  
        });
    }
</script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>


</body>
</html>
