<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Absensi.php");
$absensi = new Absensi();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Absensi Siswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Absensi Siswa</a></li>
                            <li class="active">Siswa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                          
                          
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <form action="<?php echo $siteurl; ?>/views/absensi/absensisiswa/proses.php?aksi=tambah" method="post" class="form-horizontal">

                        <div class="card-header">
                          <strong class="card-title"><input type="label" id="disabled-input" name="tanggal" value="<?php
                          
                          $date = $_GET['tanggal']; // Hasil: 20-01-2017 05:32:15
                          $tanggal = date_create($date);
                          echo date_format($tanggal,"j F Y");
                          ?>" class="form-control" readonly></strong>

                        </div>
                    
                        
                          <table id="bootstrap-data-table" class="table table-striped table-bordered display">
                                <thead>
                                  <tr>
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>No Hp</th>
                                    <th>Tempat Lahir</th>
                                    <th>Kelas</th>
                                    <th>Keterangan</th>
                                  </tr>
                                  <tbody>
                                  <script>
                                function chbx(obj)
                                {
                                var that = obj;
                                   if(document.getElementById(that.id).checked == true) {
                                      document.getElementById('id1').checked = false;
                                      document.getElementById('id2').checked = false;
                                      document.getElementById('id3').checked = false;
                                      document.getElementById('id4').checked = false;
                                      document.getElementById(that.id).checked = true;
                                   }
                                }
                                </script>
                                    <?php
                                    foreach($absensi->filterjumlahsiswaperkelas($_GET['id_kelas']) as $item){
                                       
                                        ?>


                                    <tr>
                                    <td><input type="label" id="disabled-input" name="nis[]" value="<?php echo $item['no_induk']; ?>" class="form-control" readonly></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['kelamin']; ?></td> 
                                    <td><?php echo $item['tmp_lahir']; ?></td>
                                    <td><input type="label" id="disabled-input" value="<?php echo $item['kelas']; ?>" class="form-control" readonly></td> 
                                    

                                    <td>
                                    <Input id='id1' type='Checkbox' Name ='keterangan[]' value ="A" onclick="chbx(this)">Alpha</Input>
                                    <Input id='id2' type='Checkbox' Name ='keterangan[]' value ="I" onclick="chbx(this)">Izin</Input>
                                    <Input id='id3' type='Checkbox' Name ='keterangan[]' value ="S" onclick="chbx(this)">Sakit</Input>
                                    <Input id='id4' type='Checkbox' Name ='keterangan[]' value ="M" onclick="chbx(this)"checked>Masuk</Input>
                                    </td>
                                </tr>
                                <input type="label" hidden id="disable-input" name="id_kelas[]" value="<?php echo $item['id_kelas']; ?>"></input>
                                  </tbody>
                            
                           <?php } ?>
                            </table>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary btn-sm"> <i class="fa fa-dot-circle-o"></i> Simpan </button>
                          <button type="reset" class="btn btn-danger btn-sm">  <i class="fa fa-ban"></i> Reset</button>
                          </form>
                        </div>
                    </div>
                </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>


