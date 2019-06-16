<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php");
$kesiswaan = new Kesiswaan();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pendataan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Pendaftaran</a></li>
                            <li class="active">Form Edit Pendaftaran</li>
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
                            <strong class="card-title">Form </strong>Edit Pendaftaran
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/kesiswaan/seleksi/proses.php?aksi=edit" method="post" class="form-horizontal">
                                  <?php
                                    foreach ($kesiswaan->getdetailpdfs($_GET['idPendaftaran']) as $item) {
                                  ?>
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="idPendaftaran" value="<?= $item['idPendaftaran']; ?>" class="form-control"readonly readonly></div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">NISN</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="nisn" value="<?= $item['nisn']; ?>"  class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" value="<?= $item['nama']; ?>"  class="form-control"readonly></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelamin</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="jk" value="<?= $item['jk']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" value="<?= $item['email']; ?>" class="form-control"readonly></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="disabled-input" name="tglLahir" value="<?= $item['tglLahir']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tempatLahir" value="<?= $item['tempatLahir']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat" value="<?= $item['alamat']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kecamatan" value="<?= $item['kecamatan']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kabupaten</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kabupaten" value="<?= $item['kabupaten']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telepon</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="telepon" value="<?= $item['telepon']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="agama" value="<?= $item['agama']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Asal Sekolah</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sekolahAsal" value="<?= $item['sekolahAsal']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">NO Peserta SLTP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="noPesertaSLTP" value="<?= $item['noPesertaSLTP']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jurusan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="jurusan" value="<?= $item['jurusan']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nilai UN</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nilaiUN" name="nilaiUN" value="<?= $item['nilaiUN']; ?>" onchange="getOrderTotal()" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nilai Rapot</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nilaiRapot" name="nilaiRapot" value="<?= $item['nilaiRapot']; ?>" onchange="getOrderTotal()" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai Seleksi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="nilaiSeleksi" name="nilaiSeleksi" onchange="getOrderTotal()" class="form-control" ></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: -4px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="status" name="status" onchange="getOrderTotal()" class="form-control" ></div></div>
                                          </div>
                                          <div class="col-6">
                                              
                                          </div>
                                      </div>
                            </div>
                            </div>
                            </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan   </button>
                         <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                      </button>
                      </div>
                      <?php } ?>
                      
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  


<script type="text/javascript">


                function getOrderTotal() {
                    var a= document.getElementById("nilaiUN").value;
                    var b= document.getElementById("nilaiRapot").value;
                    var c= document.getElementById("nilaiSeleksi").value;
                    
                        var total = parseInt(a) + parseInt(b) + parseInt(c);
                        if(total > 130) {
                            document.getElementById('status').value = 'Diterima';
                        }
                        else if(total <= 130) {
                            document.getElementById('status').value = 'Tidak Diterima';
                        }

                        console.log(total)

                    }
</script>