<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/ujian-online/ujian-online.php");
$obj = new Ujian_online();
$obj_kelas = new Kelas();
$obj_mapel = new Mata_pelajaran();
$obj_guru = new Guru();
$show = $obj_kelas->show_kelas();
$show1 = $obj_mapel->show_mapel();
$show2 = $obj_guru->show_guru();
$showgurubyuser = $obj->get_guru($_SESSION['nip']);

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
                        <form action="proses_tambah-ujian.php?aksi=tambah" method="post" class="form-horizontal" enctype="multipart/form-data">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="ID Ujian" class=" form-control-label">ID </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="id_ujian_online" name="id_ujian_online" value="<?php echo $obj->buat_kode('UO-', 5);?>" class="form-control" readonly></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pilih Jenis Ujian</label></div>
                            <div class="col-12 col-md-9">
                                <select name="jenis_ujian" class="form-control" tabindex="1" onchange="if (this.selectedIndex==3) {document.getElementById('tampilan_ulangan').style.display='inline'}else {document.getElementById('tampilan_ulangan').style.display='none'}">
                                    <option value="">Pilih Jenis Ujian</option>
                                    <option value="Ujian Tengah Semester">Ujian Tengah Semester</option>
                                    <option value="Ulangan">Ulangan</option>
                                    <option value="Tugas">Tugas</option>
                                </select>
                            </div>
                          </div>
                          <span id="tampilan_ulangan" style="display:none;">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="telepon" class=" form-control-label">Bab</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="bab" name="bab" placeholder="" class="form-control"></div>
                          </div>
                          </span>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Guru</label></div>
                            <div class="col-12 col-md-9">
                                <input type="hidden" name="nik" value="<?php echo $showgurubyuser['nip'] ?>">
                                <input type="text" name="nama_guru" id="nama_guru" value="<?php echo $showgurubyuser['nama_guru'] ?>" class="form-control" disabled>
                                <!-- <select name="nik" data-placeholder="Pilih Guru" class="form-control" tabindex="1" >
                                    <option value="">Pilih Guru</option>
                          <?php foreach ($show2 as $data2) {
                           ?>
                                    <option value="<?php echo $data2["nip"]; ?>"><?php echo $data2["nama_guru"]; ?></option>
                          <?php } ?>
                                </select> -->
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelas</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_kelas" data-placeholder="Pilih Kelas" class="form-control" tabindex="1" >
                                    <option value="">Pilih Kelas</option>
                          <?php foreach ($show as $data) {
                           ?>
                                    <option value="<?php echo $data["id_kelas"]; ?>"><?php echo $data["kelas"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mata Pelajaran</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_mapel" data-placeholder="Pilih Mapel" class="form-control" tabindex="1" >
                                    <option value="">Pilih Mapel</option>
                          <?php foreach ($show1 as $data1) {
                           ?>
                                    <option value="<?php echo $data1["idpel"]; ?>"><?php echo $data1["pelajaran"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="jam" class=" form-control-label">Jam</label></div>
                            <div class="col-6 col-md-4"><input type="time"  id="jam_mulai" name="jam_mulai" class="form-control" ></div> Sampai
                            <div class="col-6 col-md-4"><input type="time"  id="jam_selesai" name="jam_selesai" class="form-control" ></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tgl_ujian" class=" form-control-label">Tanggal Ujian</label></div>
                            <div class="col-12 col-md-9"><input type="date"  id="tgl_ujian" name="tgl_ujian" placeholder="" class="form-control" ></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tgl_ujian" class=" form-control-label">Waktu</label></div>
                            <div class="col-12 col-md-9"><input type="number"  id="waktu" name="waktu" placeholder="Menit" class="form-control" ></div>
                          </div>
                      </div>
                          <div class="card-footer" align="right">
                            <button type="submit" class="btn btn-primary btn-sm" id="tambah" name="tambah">
                              <i class="fa fa-dot-circle-o"></i> Next
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