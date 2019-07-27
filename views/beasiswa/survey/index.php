<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Beasiswa.php");
$db = new Beasiswa();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>List Survey Beasiswa</h1>
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
            if ($_SESSION['alertbea'] == "ada")  {
                    echo    '<div class="pesan">
                            <div class="col-sm-12">
                                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                  <span class="badge badge-pill badge-danger">Failed</span> Data survey a.n <b>'.$_SESSION['atasnama'].'</b> sudah ditambahkan.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            </div>';

                   unset($_SESSION['alertbea']);
            }?>

            <?php
            foreach($db->getforalert($_GET['idBeasiswa']) as $item) { 
                if ($_SESSION['alertbea'] == $item['idBeasiswa']) {
                    echo    '<div class="pesan">
                            <div class="col-sm-12">
                                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                  <span class="badge badge-pill badge-success">Success</span> Data survey a.n <b>'.$_SESSION['atasnama'].'</b> berhasil ditambahkan.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            </div>';

                    unset($_SESSION['alertbea']);
                }
            }
            ?>

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
                                                            

                                                    <form action="ekspor_hasil_survey.php" method="GET">
                                                            
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
                                                                            <option><?php echo $item['thnAjaran']; ?></option>
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
                                                                            <option><?php echo $item['thnAjaran']; ?></option>
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
                                                                            <option><?php echo $item['thnAjaran']; ?></option>
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
                <div class="modal fade" id="ekspor_rekap" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content"  style="width:400px">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="smallmodalLabel">Periode Beasiswa</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form action="ekspor_rekap.php" method="GET">
                                                            
                                                            <div id="eksporlabelperiode">
                                                                <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Periode</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                        <select data-placeholder="Pilih salah satu ..." class="standardSelect" id="kategori" name="byperiode" onchange="tampilkanekspor()">
                                                                            <option value='0' disabled="disabled" selected/>Pilih salah satu ...</option>
                                                                            <?php foreach($db->tampiloptionperiode() as $item){ ?>
                                                                            <option><?php echo $item['thnAjaran']; ?></option>
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

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-md-12">
                    <div class="card">


                        <div class="card-footer">
                          
                          <button type="button" title="Eksport" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ekspor"><i class="fa fa-upload"></i>&nbsp; Eksport Daftar Hasil Beasiswa</button>
                          <button type="button" title="Eksport" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ekspor_rekap"><i class="fa fa-upload"></i>&nbsp; Eksport Rekap Beasiswa</button>
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Survey Beasiswa
                        </div>
                        <div class="card-body">

                        <form action="<?php echo $siteurl; ?>/views/beasiswa/survey/proses.php?aksi=updateStatus" method="post" class="form-horizontal">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr style="text-align:center">
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Pengajuan SPP</th>
                                    <th>Pengajuan SBPP</th>
                                    <th>SPP disetujui</th>
                                    <th>SBPP disetujui</th>
                                    <th>Kategori</th>
                                    <th style="width:10%">Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                <script>
                                function chbx(obj)
                                {
                                var that = obj;
                                   if(document.getElementById(that.id).checked == true) {
                                      document.getElementById('id1').checked = false;
                                      document.getElementById('id2').checked = false;
                                      document.getElementById('id3').checked = false;
                                      document.getElementById(that.id).checked = true;
                                   }
                                }
                                </script>

                                <?php
                                    foreach($db->tampilbea() as $item){
                                        // print_r($kesiswaan->tampilpendataan());
                                        // die();
                                ?>
                                <tr>
                                    <td><?php echo $item['nis']; ?></td>
                                    <td><?php echo $item['namaSiswa']; ?></td>
                                    <td><?php echo $item['pengajuanSpp']; ?></td>
                                    <td><?php echo $item['pengajuanSbpp']; ?></td>
                                    <td><?php echo $item['keringananSpp']; ?></td>
                                    <td><?php echo $item['keringananSbpp']; ?></td>
                                    <td><?php echo $item['kategori']; ?></td>
                                    <td>
                                        <input type="hidden" id="disable-input" name="nis[]" value="<?php echo $item['nis']; ?>">
                                        <?php
                                        if ($item['status'] == "ditolak"){
                                            echo    '<Input id="id1" type="Checkbox" Name ="keterangan[]" value ="diterima" onclick="chbx(this)">&nbsp;&nbsp;<span class="badge badge-success">diterima</span></Input><br>
                                                    <Input id="id2" type="Checkbox" Name ="keterangan[]" value ="ditolak" onclick="chbx(this)" checked>&nbsp;&nbsp;<span class="badge badge-danger">ditolak</span></Input>
                                                    <Input id="id3" type="Checkbox" Name ="keterangan[]" value ="proses" onclick="chbx(this)">&nbsp;&nbsp;<span class="badge badge-info">proses</span></Input>';
                                        }elseif ($item['status'] == "proses"){
                                            echo    '<Input id="id1" type="Checkbox" Name ="keterangan[]" value ="diterima" onclick="chbx(this)">&nbsp;&nbsp;<span class="badge badge-success">diterima</span></Input><br>
                                                    <Input id="id2" type="Checkbox" Name ="keterangan[]" value ="ditolak" onclick="chbx(this)">&nbsp;&nbsp;<span class="badge badge-danger">ditolak</span></Input>
                                                    <Input id="id3" type="Checkbox" Name ="keterangan[]" value ="proses" onclick="chbx(this)" checked>&nbsp;&nbsp;<span class="badge badge-info">proses</span></Input>';
                                        }elseif ($item['status'] == "diterima"){
                                            echo    '<Input id="id1" type="Checkbox" Name ="keterangan[]" value ="diterima" onclick="chbx(this)" checked>&nbsp;&nbsp;<span class="badge badge-success">diterima</span></Input><br>
                                                    <Input id="id2" type="Checkbox" Name ="keterangan[]" value ="ditolak" onclick="chbx(this)">&nbsp;&nbsp;<span class="badge badge-danger">ditolak</span></Input>
                                                    <Input id="id3" type="Checkbox" Name ="keterangan[]" value ="proses" onclick="chbx(this)">&nbsp;&nbsp;<span class="badge badge-info">proses</span></Input>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a style = "margin-bottom:10px;" href="detail_survey.php?nis=<?= $item['nis'];?>"<button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i>&nbsp;&nbsp;&nbsp;&nbsp;Detail</button></a><br>
                                        <a style = "margin-bottom:10px;" href="edit_survey.php?nis=<?= $item['nis'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit</button></a><br>
                                        <a href="<?php echo $siteurl; ?>/views/beasiswa/survey/proses.php?nis=<?= $item['nis'];?>&aksi=hapus"<button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a>
                                    </td>
                                    
                                </tr> <?php } ?>
                              </tbody>
                                   
                            </table>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary btn-sm"> <i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Simpan perubahan status yang ada</button>
                          </form>
                        </div>
                    </div>
                </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
        <script>
//            angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
            $(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 500);});
//            angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
            setTimeout(function(){$(".pesan").fadeOut('slow');}, 3000);
        </script>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>