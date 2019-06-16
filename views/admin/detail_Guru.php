  <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Guru.php"); ?>

        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Guru</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">List</a></li>
                            <li class="active">Input Data Guru</li>
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
                            <strong class="ccrd-title">Data Guru</strong>
                        </div>
                        <div class="card-body card-block">

                          <!-- Credit Card -->
                           <?php $object = new t_staf();
                          $id = $_GET["nip"];?>
                          
                                      
                                      <div class="row form-group">
                                      <form action="proses_guru.php?aksi=update" method="post">
                                       <?php foreach($object->getdata($id) as $data) {  
                                         ?>

                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="user_id" name="user_id" placeholder="" class="form-control" value="<?= $data['user_id']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="" class="form-control" value="<?= $data['nama']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">NIP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="nip" name="nip" placeholder="" class="form-control" value="<?= $data['nip']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Jenis Kelamin</label></div>
                                            <div class="col">
                                               <?php 
                                            if ($item['kelamin'] == 'L'){ echo '
                                                <div class="form-check">
                                                    <input type="radio" id="radio1" name="kelamin" value="L" class="form-check-input" checked>Laki - laki
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" id="radio2" name="kelamin" value="P" class="form-check-input">Perempuan
                                                </div>';
                                              }
                                            elseif ($item['kelamin'] == 'P') { echo '
                                                <div class="form-check">
                                                    <input type="radio" id="radio1" name="kelamin" value="L" class="form-check-input">Laki - laki
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" id="radio2" name="kelamin" value="P" class="form-check-input" checked>Perempuan
                                                </div>';
                                              }
                                              ?>
                                              </div>
                                            </div>
                                      
                                            <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="alamat" name="alamat" placeholder="" class="form-control" value="<?= $data['alamat']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tugas</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="tugas" name="tugas" placeholder="" class="form-control" value="<?= $data['tugas']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Telpon</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="telp" name="telp" placeholder="" class="form-control" value="<?= $data['telp']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">HP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="hp" name="hp" placeholder="" class="form-control" value="<?= $data['hp']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Email</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="email" name="email" placeholder="" class="form-control" value="<?= $data['email']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pelajaran</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="pelajaran" name="pelajaran" placeholder="" class="form-control" value="<?= $data['pelajaran']; ?>" readonly></div>
                                          </div>
                                          
                                         <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="tgl_lahir" name="tgl_lahir" placeholder="" class="form-control" value="<?= $data['tgl_lahir']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tempat Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="tmp_lahir" name="tmp_lahir" placeholder="" class="form-control" value="<?= $data['tmp_lahir']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kode</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="kode" name="kode" placeholder="" class="form-control" value="<?= $data['kode']; ?>" readonly></div>
                                          </div>        <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pangkat</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="pankat" name="pangkat" placeholder="" class="form-control" value="<?= $data['pangkat']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kategori</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="kategori" name="kategori" placeholder="" class="form-control" value="<?= $data['kategori']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Profil</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="profilstaf" name="profilstaf" placeholder="" class="form-control" value="<?= $data['profilstaf']; ?>" readonly></div>
                                          </div>
                                        <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Ajaran</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="th_ajar" name="th_ajar" placeholder="" class="form-control" value="<?= $data['th_ajar']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Induk Baru</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="no_induk_baru" name="no_induk_baru" placeholder="" class="form-control" value="<?= $data['no_induk_baru']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Gelar Depan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="depan_gelar" name="depan_gelar" placeholder="" class="form-control" value="<?= $data['depan_gelar']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Gelar Belakang</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="belakang_gelar" name="belakang_gelar" placeholder="" class="form-control" value="<?= $data['belakang_gelar']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Ibu Kandung</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="nama_ibu_kandung" name="nama_ibu_kandung" placeholder="" class="form-control" value="<?= $data['nama_ibu_kandung']; ?>" readonly></div>
                                          </div>
                                           <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kode Pos</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="kode_pos" name="kode_pos" placeholder="" class="form-control" value="<?= $data['kode_pos']; ?>" readonly></div>
                                          </div>
                                           <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Golongan Darah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="golongan_darah" name="golongan_darah" placeholder="" class="form-control" value="<?= $data['golongan_darah']; ?>" readonly></div>
                                          </div>
                                        <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelurahan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="kelurahan" name="kelurahan" placeholder="" class="form-control" value="<?= $data['kelurahan']; ?>" readonly></div>
                                          </div> 
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kecamatan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="kecamatan" name="kecamatan" placeholder="" class="form-control" value="<?= $data['kecamatan']; ?>" readonly></div>
                                          </div> 
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Provinsi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="provinsi" name="provinsi" placeholder="" class="form-control" value="<?= $data['Provinsi']; ?>" readonly></div>
                                          </div> 
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Daerah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="daerah" name="daerah" placeholder="" class="form-control" value="<?= $data['daerah']; ?>" readonly></div>
                                          </div> 
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Status Nikah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="status_nikah" name="status_nikah" placeholder="" class="form-control" value="<?= $data['status_nikah']; ?>" readonly></div>
                                          </div> 
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal Masuk</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="tanggal_masuk" name="tanggal_masuk" placeholder="" class="form-control" value="<?= $data['tanggal_masuk']; ?>" readonly></div>
                                          </div>
                                           <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jenis Pegawai</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="jenis_pegawai" name="jenis_pegawai" placeholder="" class="form-control" value="<?= $data['jenis_pegawai']; ?>" readonly></div>
                                          </div> 
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Sertifikasi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="sertifikasi_guru" name="sertifikasi_guru" placeholder="" class="form-control" value="<?= $data['sertifikasi_guru']; ?>" readonly></div>
                                          </div> 
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tamat PNS</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="tmt_pns" name="tmt_pns" placeholder="" class="form-control" value="<?= $data['tmt_pns']; ?>" readonly></div>
                                          </div> 
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Akses</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="akses" name="akses" placeholder="" class="form-control" value="<?= $data['akses']; ?>" readonly></div>
                                          </div>
                                           <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Arsip</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="arsip" name="arsip" placeholder="" class="form-control" value="<?= $data['arsip']; ?>" readonly></div>
                                          </div> 
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tugas Tambahan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="tugas_tambahan" name="tugas_tambahan" placeholder="" class="form-control" value="<?= $data['tugas_tambahan']; ?>" readonly></div>
                                          </div>
                                       <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pangkat PNS</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="pangkat_pns" name="pangkat_pns" placeholder="" class="form-control" value="<?= $data['pangkat_pns']; ?>" readonly></div>
                                          </div>
                                           <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jabatan PNS</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="jabatan_pns" name="jabatan_pns" placeholder="" class="form-control" value="<?= $data['jabatan_pns']; ?>" readonly></div>
                                          </div>                                   
                                       <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Golongan PNS</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="golongan_pns" name="golongan_pns" placeholder="" class="form-control" value="<?= $data['golongan_pns']; ?>" readonly></div>
                                          </div>
                                           <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan Terakhir</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="pendidikan_terahir" name="pendidikan_terahir" placeholder="" class="form-control" value="<?= $data['pendidikan_terahir']; ?>" readonly></div>
                                          </div>
                                       <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masa Kerja Tahun</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="masakerja_th" name="masakerja_th" placeholder="" class="form-control" value="<?= $data['masakerja_th']; ?>" readonly></div>
                                          </div>                       
                                       <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masa Kerja Bulan</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="masakerja_bl" name="masakerja_bl" placeholder="" class="form-control" value="<?= $data['masakerja_bl']; ?>" readonly></div>
                                          </div>                                      
                                      </div>
                                      <?php } ?>
                          </div>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer">
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
