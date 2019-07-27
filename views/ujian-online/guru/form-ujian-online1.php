<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/ujian-online/ujian-online-detail.php");
$obj = new Ujian_online_detail();
$id_ujian_online = $_GET['id_ujian_online'];
$show = $obj->show_detail_ujian($id_ujian_online);
foreach ($show as $data) {
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
                            <li><a href="#">E-Learning</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Ujian</li>
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
                        <strong>Form</strong> Ujian Online
                      </div>
                      <div class="card-body card-block">
                        <form action="proses_tambah-ujian-detail.php?aksi=tambah" method="post" class="form-horizontal" enctype="multipart/form-data">
                          <div class="row form-group" style="display: none;">
                            <div class="col-12 col-md-11"><input type="text" id="id_ujian_online_detail" name="id_ujian_online_detail" value="<?php echo $obj->buat_kode('', 1);?>" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="ID Ujian" class=" form-control-label">ID Ujian</label></div>
                            <div class="col-12 col-md-10"><input type="text" id="id_ujian_online" name="id_ujian_online" value="<?php echo $id_ujian_online ; ?>" class="form-control" readonly></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="telepon" class=" form-control-label">No.</label></div>
                            <div class="col-12 col-md-10"><input type="text" id="no_soal" name="no_soal" value="<?php echo $obj->buat_no_soal('', 1, $id_ujian_online);?>" class="form-control" readonly></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Pilih Jenis Soal</label></div>
                            <div class="col-12 col-md-10">
                                <select name="jenis_soal" class="form-control" tabindex="1" onchange="if (this.selectedIndex==1) {document.getElementById('tampil_jenis_soal').style.display='inline'}else {document.getElementById('tampil_jenis_soal').style.display='none'}">
                                    <option value="Essay">Pilih Jenis Soal</option>
                                    <option value="Pilihan Ganda">Pilihan Ganda</option>
                                    <option value="Essay">Essay</option>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="telepon" class=" form-control-label">Soal</label></div>
                            <div class="col-12 col-md-10"><textarea name="soal" id="soal" rows="5" placeholder="Content..." class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2">
                              <label for="file-input" class=" form-control-label">Gambar</label>
                            </div>
                            <div class="col-12 col-md-9"><input type="file" id="gambar" name="gambar" value="" class="form-control-file"></div>
                          </div>
                          <span id="tampil_jenis_soal" style="display:none;">
                          <div class="row form-group">
                            <div class="col col-md-3" align="right">Jawaban A.</div>
                            <div class="col-12 col-md-9"><input type="text"  id="jawaban_a" name="jawaban_a" placeholder="" class="form-control" ></div><br><br><br>
                            <div class="col col-md-3" align="right">Jawaban B.</div>
                            <div class="col-12 col-md-9"><input type="text"  id="jawaban_b" name="jawaban_b" placeholder="" class="form-control" ></div><br><br><br>
                            <div class="col col-md-3" align="right">Jawaban C.</div>
                            <div class="col-12 col-md-9"><input type="text"  id="jawaban_c" name="jawaban_c" placeholder="" class="form-control" ></div><br><br><br>
                            <div class="col col-md-3" align="right">Jawaban D.</div>
                            <div class="col-12 col-md-9"><input type="text"  id="jawaban_d" name="jawaban_d" placeholder="" class="form-control" ></div><br><br><br>
                            <div class="col col-md-3" align="right">Jawaban E.</div>
                            <div class="col-12 col-md-9"><input type="text"  id="jawaban_e" name="jawaban_e" placeholder="" class="form-control" ></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3" align="right"><label class=" form-control-label">Jawaban Benar</label></div>
                            <div class="col-12 col-md-9">
                              <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label">
                                  <input type="radio" id="jawaban_a" name="jawaban_benar" value="A" class="form-check-input">A
                                </label>
                                <label for="inline-radio2" class="form-check-label" style="text-indent: 60px;">
                                  <input type="radio" id="jawaban_b" name="jawaban_benar" value="B" class="form-check-input">B
                                </label>
                                <label for="inline-radio2" class="form-check-label" style="text-indent: 60px;">
                                  <input type="radio" id="jawaban_c" name="jawaban_benar" value="C" class="form-check-input">C
                                </label>
                                <label for="inline-radio2" class="form-check-label" style="text-indent: 60px;">
                                  <input type="radio" id="jawaban_d" name="jawaban_benar" value="D" class="form-check-input">D
                                </label>
                                <label for="inline-radio2" class="form-check-label" style="text-indent: 60px;">
                                  <input type="radio" id="jawaban_e" name="jawaban_benar" value="E" class="form-check-input">E
                                </label>
                              </div>
                            </div>
                          </div>
                          </span>
                          <!-- <div class="row form-group">
                            <div class="col col-md-2"><label for="tempatlahir" class=" form-control-label">Poin Nilai</label></div>
                            <div class="col-12 col-md-10"><input type="text" id="poin_nilai" name="poin_nilai" placeholder="poin per soal" class="form-control" ></div>
                          </div> -->
                      </div>
                          

                       <?php   }?>
                      <div class="card-footer" align="right">
                        <button type="submit" class="btn btn-primary btn-sm" id="tambah" name="tambah">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                       </form>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>