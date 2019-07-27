<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Penunjang Guru</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">List</a></li>
                            <li class="active">Input Data Penunjang Guru</li>
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
                            <strong class="ccrd-title">Data Penunjang Guru</strong>
                        </div>
                        <div class="card-body card-block">

                          <!-- Credit Card -->
                          
                                      
                                      
                                      <form action="proses_guru.php?aksi=insert" method="post">
                                          <input type="hidden" name="NIP" value="<?=$_POST['NIP'];?>">
                                          <input type="hidden" name="namaguru" value="<?=$_POST['namaguru'];?>">
                                          <input type="hidden" name="nik" value="<?=$_POST['nik'];?>">
                                          <input type="hidden" name="nama" value="<?=$_POST['nama']; ?>">
                                          <input type="hidden" name="jenis_kelamin" value="<?=$_POST['jenis_kelamin'];?>">
                                          <input type="hidden" name="tempat_lahir" value="<?=$_POST['tempat_lahir']; ?>">
                                          <input type="hidden" name="tanggal_lahir" value="<?=$_POST['tanggal_lahir']; ?>">
                                          <input type="hidden" name="agama" value="<?=$_POST['agama'];?>">
                                          <input type="hidden" name="alamat_jalan" value="<?=$_POST['alamat_jalan']; ?>">
                                          <input type="hidden" name="RT" value="<?=$_POST['RT'];?>">
                                          <input type="hidden" name="RW" value="<?=$_POST['RW']; ?>">
                                          <input type="hidden" name="nama_dusun" value="<?=$_POST['nama_dusun'];?>">
                                          <input type="hidden" name="desa_kelurahan" value="<?=$_POST['desa_kelurahan']; ?>">
                                          <input type="hidden" name="kecamatan" value="<?=$_POST['kecamatan'];?>">
                                          <input type="hidden" name="kodepos" value="<?=$_POST['kodepos']; ?>">
                                          <input type="hidden" name="telpon" value="<?=$_POST['telpon'];?>">
                                          <input type="hidden" name="HP" value="<?=$_POST['HP']; ?>">
                                          <input type="hidden" name="email" value="<?=$_POST['email'];?>">
                                          <input type="hidden" name="nama_ibu" value="<?=$_POST['nama_ibu']; ?>">
                                          <input type="hidden" name="status_perkawinan" value="<?=$_POST['status_perkawinan'];?>">
                                          <input type="hidden" name="nama_suami" value="<?=$_POST['nama_suami']; ?>">
                                          <input type="hidden" name="pekerjaan_suami" value="<?=$_POST['pekerjaan_suami'];?>">
                                          <input type="hidden" name="kewarganegaraan" value="<?=$_POST['kewarganegaraan']; ?>">
                            <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">NUPTK</label></div>
                             <div class="col col-md-9"><input type="text" id="NUPTK" name="NUPTK" placeholder="" class="form-control"></div>
                               </div>    
                               <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Status Pegawai</label></div>
                             <div class="col-12 col-md-9"><input type="text" id="status_pegawai" name="status_pegawai" placeholder="" class="form-control"></div>
                             </div>  
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">jenisPK</label></div>
                             <div class="col-12 col-md-9"><input type="text" id="jenis_PTK" name="jenis_PTK" placeholder="" class="form-control"></div>
                             </div> 
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">SK CPNS</label></div>
                              <div class="col-12 col-md-9"><input type="date" id="SKCPNS" name="SKCPNS" placeholder="" class="form-control"></div>
                             </div>  
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Tanggal CPNS</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tglCPNS" name="tglCPNS" placeholder="" class="form-control"></div>
                            </div>
                             <div class="row form-group">

                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">SK Pengangkatan</label></div>
                              <div class="col-12 col-md-9"><input type="date" id="pengangkatan" name="pengangkatan" placeholder="" class="form-control"></div>
                              </div>
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">TMT Pengangkatan</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="TMT_pengangkatan" name="TMT_pengangkatan" placeholder="" class="form-control"></div>
                            </div>
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Lembaga Pengangkatan</label></div>
                             <div class="col-12 col-md-9"><input type="text" id="Lembaga_pengangkatan" name="Lembaga_pengangkatan" placeholder="" class="form-control"></div>
                            </div>
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Pangkat golongan</label></div>
                             <div class="col-12 col-md-9"><input type="text" id="pangkatgol" name="pangkatgol" placeholder="" class="form-control"></div>
                            </div>
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Sumber Gaji</label></div>
                              <div class="col-12 col-md-9"><input type="text" id="sumbergaji" name="sumbergaji" placeholder="" class="form-control"></div>
                              </div>
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Lisensi Kepsek</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="lisensikepsek" name="lisensikepsek" placeholder="" class="form-control"></div>
                            </div>
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Diklat Kepengawasan</label></div>
                           <div class="col-12 col-md-9"><input type="text" id="diklat_kepengawasan" name="diklat_kepengawasan" placeholder="" class="form-control"></div>
                            </div>
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">keahlian brailer</label></div>
                             <div class="col-12 col-md-9"><input type="text" id="keahlian_brailer" name="keahlian_brailer" placeholder="" class="form-control"></div>
                            </div>
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Keahlian Bahasa isarat</label></div>
                              <div class="col-12 col-md-9"><input type="text" id="bahasa_isarat" name="bahasa_isarat" placeholder="" class="form-control"></div>
                              </div>
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">NPWP</label></div>
                             <div class="col-12 col-md-9"><input type="text" id="jenis_PTK" name="jenis_PTK" placeholder="" class="form-control"></div>
                             </div>  
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Nama Wajib Pajak</label></div>
                              <div class="col-12 col-md-9"><input type="text" id="Wajib_pajak" name="Wajib_pajak" placeholder="" class="form-control"></div>
                            </div>
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Tugas tambahan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="tugas_tambahan" name="tugas_tambahan" placeholder="" class="form-control"></div>
                          </div>
                             <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Nama  BANK</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="bank" name="bank" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Nomer Rekening</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="No_rekening" name="No_rekening" placeholder="" class="form-control"></div>
                           </div>
                            <div class="row form-group">
                            <div class="col col-sm-12"><label for="input-normal" class=" form-control-label">Atas Nama</label></div>
                           <div class="col-12 col-md-9"><input type="text" id="atas_nama" name="atas_nama" placeholder="" class="form-control"></div>
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
