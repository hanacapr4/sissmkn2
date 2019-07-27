<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Beasiswa.php");
$db = new Pengajuan();
?>

<?php 
if($_SESSION['level'] != "admin"){
    header("location:http://localhost:8080/SISSMKN2/views/beasiswa/siswa/index_siswa.php");
}
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>List Pengaju Beasiswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Beasiswa</a></li>
                            <li class="active">List Beasiswa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> 


            <?php 
            foreach($db->showperiode() as $item) { 
                if ((!empty($_SESSION['getwaktu'])) AND ($_SESSION['getwaktu'] <= $item['mulai'] OR $_SESSION['getwaktu'] >= $item['hingga']))  {
                        echo    '<div class="pesan">
                                <div class="col-sm-12">
                                    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                      <span class="badge badge-pill badge-danger">Failed</span> Maaf, pengajuan beasiswa a.n siswa : <b>'.$_SESSION['namaSiswa'].' "GAGAL".</b> Karena pengajuan dilakukan diluar periode yang telah ditentukan.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                                </div>';
                         unset($_SESSION['getwaktu']);

                }
            }?>



            <?php 
            if ($_SESSION['alertid'] == "ada")  {
                    echo    '<div class="pesan">
                            <div class="col-sm-12">
                                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                  <span class="badge badge-pill badge-danger">Failed</span> Pengajuan beasiswa a.n siswa : <b>'.$_SESSION['namaSiswa'].'</b> sudah ada.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            </div>';

                   unset($_SESSION['alertid']);
                   unset($_SESSION['getwaktu']);
            }?>



            <?php
            foreach($db->getforalert($_GET['idBea']) as $item) { 
                if ($_SESSION['alertid'] == $item['idBea']) {
                    echo    '<div class="pesan">
                            <div class="col-sm-12">
                                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                  <span class="badge badge-pill badge-success">Success</span> Pengajuan beasiswa a.n. siswa : <b>'.$_SESSION['namaSiswa'].'</b> berhasil ditambahkan.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            </div>';

                    unset($_SESSION['alertid']);
                    unset($_SESSION['getwaktu']);
                }
            }
            ?>


                <!-- Modal -->
                <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Pengajuan Beasiswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group" style="width:370px">
                                  <label for="company" class=" form-control-label">Pilih Siswa :</label><br>
                                            
                                  <form action="pengajuan.php?nis=<?= $item['nis'];?>" method="get">
                                  <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="nis">
                                            <?php
                                              foreach($db->tampilsiswa() as $item){ 
                                            ?>
                                            <option value="<?php echo $item['nis']; ?>"><?php echo $item['nis']; ?> - <?php echo $item['namaSiswa']; ?></option>
                                            <?php } ?>
                                  </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->

                <!-- Modal -->
                <div class="modal fade" id="periode" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Setting Periode Beasiswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group" style="width:370px">
                                  <label for="company" class=" form-control-label"><b>Pilih Jangka Waktu :</b></label><br>
                                            
                                  <form action="<?php echo $siteurl; ?>/views/beasiswa/siswa/proses.php?aksi=editperiode" method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <?php
                                              foreach($db->showperiode() as $item){ ?>
                                                <input type="hidden" value="<?php echo $item['idPeriode']?>" name="idPeriode">
                                            <?php  }  ?>
                                  <label for="company" class=" form-control-label">Mulai :</label><br>
                                  <input type="hidden" value="<?php echo $item['mulai']?>">
                                  <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="mulai">
                                            <?php
                                              foreach($db->showperiode() as $item){ 
                                                if ($item["mulai"] == "1") {
                                                    echo '<option value="'.$item["mulai"].'">Januari</option>';
                                                }elseif ($item["mulai"] == "2") {
                                                    echo '<option value="'.$item["mulai"].'">Februari</option>';
                                                }elseif ($item["mulai"] == "3") {
                                                    echo '<option value="'.$item["mulai"].'">Maret</option>';
                                                }elseif ($item["mulai"] == "4") {
                                                    echo '<option value="'.$item["mulai"].'">April</option>';
                                                }elseif ($item["mulai"] == "5") {
                                                    echo '<option value="'.$item["mulai"].'">Mei</option>';
                                                }elseif ($item["mulai"] == "6") {
                                                    echo '<option value="'.$item["mulai"].'">Juni</option>';
                                                }elseif ($item["mulai"] == "7") {
                                                    echo '<option value="'.$item["mulai"].'">Juli</option>';
                                                }elseif ($item["mulai"] == "8") {
                                                    echo '<option value="'.$item["mulai"].'">Agustus</option>';
                                                }elseif ($item["mulai"] == "9") {
                                                    echo '<option value="'.$item["mulai"].'">September</option>';
                                                }elseif ($item["mulai"] == "10") {
                                                    echo '<option value="'.$item["mulai"].'">Oktober</option>';
                                                }elseif ($item["mulai"] == "11") {
                                                    echo '<option value="'.$item["mulai"].'">November</option>';
                                                }elseif ($item["mulai"] == "12") {
                                                    echo '<option value="'.$item["mulai"].'">Desember</option>';
                                                }
                                            } ?>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                  </select><br><br>
                                  <label for="company" class=" form-control-label">Hingga :</label><br>
                                  <input type="hidden" value="<?php echo $item['hingga']?>">
                                  <select data-placeholder="Pilih salah satu ..." class="standardSelect" name="hingga">
                                            <?php
                                              foreach($db->showperiode() as $item){ 
                                                if ($item["hingga"] == "1") {
                                                    echo '<option value="'.$item["hingga"].'">Januari</option>';
                                                }elseif ($item["hingga"] == "2") {
                                                    echo '<option value="'.$item["hingga"].'">Februari</option>';
                                                }elseif ($item["hingga"] == "3") {
                                                    echo '<option value="'.$item["hingga"].'">Maret</option>';
                                                }elseif ($item["hingga"] == "4") {
                                                    echo '<option value="'.$item["hingga"].'">April</option>';
                                                }elseif ($item["hingga"] == "5") {
                                                    echo '<option value="'.$item["hingga"].'">Mei</option>';
                                                }elseif ($item["hingga"] == "6") {
                                                    echo '<option value="'.$item["hingga"].'">Juni</option>';
                                                }elseif ($item["hingga"] == "7") {
                                                    echo '<option value="'.$item["hingga"].'">Juli</option>';
                                                }elseif ($item["hingga"] == "8") {
                                                    echo '<option value="'.$item["hingga"].'">Agustus</option>';
                                                }elseif ($item["hingga"] == "9") {
                                                    echo '<option value="'.$item["hingga"].'">September</option>';
                                                }elseif ($item["hingga"] == "10") {
                                                    echo '<option value="'.$item["hingga"].'">Oktober</option>';
                                                }elseif ($item["hingga"] == "11") {
                                                    echo '<option value="'.$item["hingga"].'">November</option>';
                                                }elseif ($item["hingga"] == "12") {
                                                    echo '<option value="'.$item["hingga"].'">Desember</option>';
                                                }
                                            } ?>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                  </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->

                <!-- Modal -->
                <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content"  style="width:400px">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="smallmodalLabel">Pilih Filter</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <form id="form1" name="form1" onsubmit="return false">
                                                                <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Filter</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" id="kategori" name="kategori" onchange="tampilkan()" required>
                                                                            <option value='0' disabled="disabled" selected/>Pilih salah satu ...</option>
                                                                            <option value="az">NIS (a - z)</option>
                                                                            <option value="za">NIS (z - a)</option>
                                                                            <option value="periode">Periode</option>
                                                                        </select>
                                                                </div><br><br>
                                                            </form>
                                                            

                                                    <form action="filter_pengajuan.php" method="GET">
                                                            
                                                            <div id="labelaz" style="display:none">
                                                                <div class="col-12 col-md-12">
                                                                    <label for="text-input" class=" form-control-label">Pilih Urutan :</label>
                                                                </div>
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kolom</label></div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%"><input type="number" id="text-input" name="azmulai" class="form-control" placeholder="mulai kolom"></div>
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah</label></div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%"><input type="number" id="text-input" name="azhingga" class="form-control" placeholder="jumlah kolom"></div>
                                                                <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Periode</label>
                                                                </div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%">
                                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" id="kategori" name="azperiode">
                                                                            <option value='0' disabled="disabled" selected/>Pilih salah satu ...</option>
                                                                            <?php foreach($db->tampiloptionperiode() as $item){ ?>
                                                                            <option><?php echo $item['thnajaran']; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div>

                                                            <div id="labelza" style="display:none">
                                                                <div class="col-12 col-md-12">
                                                                    <label for="text-input" class=" form-control-label">Pilih Urutan :</label>
                                                                </div>
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mulai</label></div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%"><input type="text" id="text-input" name="zamulai" class="form-control"></div><br><br>
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hingga</label></div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%"><input type="text" id="text-input" name="zahingga" class="form-control"></div><br><br>
                                                                <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Periode</label>
                                                                </div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%">
                                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" id="kategori" name="zaperiode">
                                                                            <option value='0' disabled="disabled" selected/>Pilih salah satu ...</option>
                                                                            <?php foreach($db->tampiloptionperiode() as $item){ ?>
                                                                            <option><?php echo $item['thnajaran']; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div>

                                                            <div id="labelperiode" style="display:none">
                                                                <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Periode</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" id="kategori" name="byperiode" onchange="tampilkan()">
                                                                            <option value='0' disabled="disabled" selected/>Pilih salah satu ...</option>
                                                                            <?php foreach($db->tampiloptionperiode() as $item){ ?>
                                                                            <option><?php echo $item['thnajaran']; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            
                                                    
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .modal -->


                <!-- Modal -->
                <div class="modal fade" id="ekspor" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content"  style="width:400px">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="smallmodalLabel">Ekspor Berdasarkan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <form id="formekspor" name="formekspor" onsubmit="return false">
                                                                <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Pilih</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" id="eksporr" name="eksporr" onchange="tampilkanekspor()" required>
                                                                            <option value='0' disabled="disabled" selected/>Pilih salah satu ...</option>
                                                                            <option value="eksporaz">NIS (a - z)</option>
                                                                            <option value="eksporza">NIS (z - a)</option>
                                                                            <option value="eksporperiode">Periode</option>
                                                                        </select>
                                                                </div><br><br>
                                                            </form>
                                                            

                                                    <form action="ekspor.php" method="GET">
                                                            
                                                            <div id="eksporlabelaz" style="display:none">
                                                                <div class="col-12 col-md-12">
                                                                    <label for="text-input" class=" form-control-label">Pilih Urutan :</label>
                                                                </div>
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kolom</label></div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%"><input type="number" id="text-input" name="azmulai" class="form-control" placeholder="mulai kolom"></div>
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah</label></div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%"><input type="number" id="text-input" name="azhingga" class="form-control" placeholder="jumlah kolom"></div>
                                                                <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Periode</label>
                                                                </div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%">
                                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" id="kategori" name="azperiode">
                                                                            <option value='0' disabled="disabled" selected/>Pilih salah satu ...</option>
                                                                            <?php foreach($db->tampiloptionperiode() as $item){ ?>
                                                                            <option><?php echo $item['thnajaran']; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div>

                                                            <div id="eksporlabelza" style="display:none">
                                                                <div class="col-12 col-md-12">
                                                                    <label for="text-input" class=" form-control-label">Pilih Urutan :</label>
                                                                </div>
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mulai</label></div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%"><input type="text" id="text-input" name="zamulai" class="form-control"></div><br><br>
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hingga</label></div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%"><input type="text" id="text-input" name="zahingga" class="form-control"></div><br><br>
                                                                <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Periode</label>
                                                                </div>
                                                                <div class="col-12 col-md-9" style="margin-bottom:3%">
                                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" id="kategori" name="zaperiode">
                                                                            <option value='0' disabled="disabled" selected/>Pilih salah satu ...</option>
                                                                            <?php foreach($db->tampiloptionperiode() as $item){ ?>
                                                                            <option><?php echo $item['thnajaran']; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div>

                                                            <div id="eksporlabelperiode" style="display:none">
                                                                <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Periode</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" id="kategori" name="byperiode" onchange="tampilkanekspor()">
                                                                            <option value='0' disabled="disabled" selected/>Pilih salah satu ...</option>
                                                                            <?php foreach($db->tampiloptionperiode() as $item){ ?>
                                                                            <option><?php echo $item['thnajaran']; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            
                                                    
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .modal -->



    <!-- Right Panel -->

    <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                          

                                        <button type="button" title="Tambahkan Pengajuan Beasiswa" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#smallmodal"><i class="fa ti-pencil-alt"></i>&nbsp; Ajukan Beasiswa</button>
                                        <button type="button" title="Set Periode Pengajuan Beasiswa" class="btn btn-info btn-sm" data-toggle="modal" data-target="#periode"><i class="fa ti-settings"></i>&nbsp; Set Periode Pengajuan Beasiswa</button>
                                        <button type="button" title="Filter" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#filter"><i class="ti ti-filter"></i>&nbsp; Filter</button>
                                        <button type="button" title="Eksport" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ekspor"><i class="fa fa-upload"></i>&nbsp; Eksport</button>
                                        


                                        <!-- <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="smallmodalLabel">Pengajuan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra
                                                            and the mountain zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus
                                                            Dolichohippus. The latter resembles an ass, to which it is closely related, while the former two are more
                                                            horse-like. All three belong to the genus Equus, along with other living equids.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="button" class="btn btn-primary">Confirm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->


                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Pengaju Beasiswa
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Survey</th>
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Pengajuan SPP</th>
                                    <th>Pengajuan SBPP</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($db->tampilaju() as $item){
                                        // print_r($kesiswaan->tampilpendataan());
                                        // die();
                                ?>
                                <tr>
                                    <td><a style = "margin-right:3px;" href="../survey/survey.php?idBea=<?= $item['idBea'];?>"<button type="" class="btn btn-success btn-sm" title="Isi form survey"><i class="fa ti-pencil-alt"></i>&nbsp;Isi Form Survey</button></a></td>
                                    <td><?php echo $item['nis']; ?></td>
                                    <td><?php echo $item['namaSiswa']; ?></td>
                                    <td><?php echo $item['pengajuanSpp']; ?></td>
                                    <td><?php echo $item['pengajuanSbpp']; ?></td>
                                    <td><a style = "margin-right:3px;" href="detail_pengajuan.php?idBea=<?= $item['idBea'];?>"<button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a>
                                        <a style = "margin-right:3px;" href="edit_pengajuan.php?idBea=<?= $item['idBea'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></a>
                                        <a href="<?php echo $siteurl; ?>/views/beasiswa/siswa/proses.php?idBea=<?= $item['idBea'];?>&aksi=hapus"<button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a>
                                    </td>
                                </tr>
                                    <?php } ?>
                              </tbody>     
                            </table>
                        </div>
                        <!-- <div class="card-footer">
                          <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> export
                          </button>
                          <button title="import data dari excel" type="reset" class="btn btn-warning btn-sm">
                            <i class="fa ti-download"></i> import
                          </button>
                        </div> -->
                    </div>
                </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div>

        <script>
//            angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
            $(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 500);});
//            angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
            setTimeout(function(){$(".pesan").fadeOut('slow');}, 6000);
        </script>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>
