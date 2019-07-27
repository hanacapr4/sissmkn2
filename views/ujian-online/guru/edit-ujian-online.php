<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/ujian-online/ujian-online.php");
$obj = new Ujian_online();
$obj_kelas = new Kelas();
$obj_mapel = new Mata_pelajaran();
$obj_guru = new Guru();
$show = $obj_kelas->show_kelas();
$id_ujian_online = $_GET['id_ujian_online'];
$show3 = $obj->show_detail_ujian($id_ujian_online);
$show1 = $obj_mapel->show_mapel();
$show2 = $obj_guru->show_guru();
$showgurubyuser = $obj->get_guru($_SESSION['nip']);
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
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
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
                      <?php foreach ($show3 as $data3) {
                           ?>
                      <div class="card-body card-block">
                        <form action="proses_tambah-ujian.php?aksi=update" method="post" class="form-horizontal" enctype="multipart/form-data">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="ID Ujian" class=" form-control-label">ID </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="id_ujian_online" name="id_ujian_online" value="<?php echo $data3["id_ujian_online"]; ?>" class="form-control" readonly></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pilih Jenis Ujian</label></div>
                            <div class="col-12 col-md-9">
                                <select name="jenis_ujian" class="form-control" onchange="if (this.selectedIndex==3) {document.getElementById('tampilan_ulangan').style.display='inline'}else {document.getElementById('tampilan_ulangan').style.display='none'}">
                                    <option value="Ujian Tengah Semester" 
                                      <?php if($data3["jenis_ujian"] == "Ujian Tengah Semester") { 
                                        echo "selected";
                                      } ?> >Ujian Tengah Semester</option>
                                    <option value="Ulangan"
                                    <?php if($data3["jenis_ujian"] == "Ulangan") { 
                                        echo "selected";
                                      } ?> >Ulangan</option>
                                    <option value="Tugas" 
                                    <?php if($data3["jenis_ujian"] == "Tugas") { 
                                        echo "selected";
                                      } ?> >Tugas</option>
                                </select>
                            </div>
                          </div>
                          <span id="tampilan_ulangan" style="display:none;">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="telepon" class=" form-control-label">Bab</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="bab" name="bab" value="<?php echo $data3["bab"]; ?>" class="form-control"></div>
                          </div>
                          </span>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Guru</label></div>
                            <div class="col-12 col-md-9">
                                <input type="hidden" name="nik" value="<?php echo $showgurubyuser['nip'] ?>">
                                <input type="text" name="nama_guru" id="nama_guru" value="<?php echo $showgurubyuser['nama_guru'] ?>" class="form-control" disabled>
                                <!-- select name="nik" data-placeholder="" class="form-control" tabindex="1" >
                                    
                          <?php foreach ($show2 as $data2) {
                           ?>
                                    <option value="<?php echo $data2["nip"]; ?>" 
                                      <?php if($data3["nip"] == $data2["nip"]) { 
                                        echo "selected";
                                      } ?> ><?php echo $data2["nama_guru"]; ?></option>
                          <?php } ?>
                                </select> -->
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelas</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_kelas" data-placeholder="" class="form-control" required>
                          <?php foreach ($show as $data) {
                           ?>
                                    <option value="<?php echo $data["id_kelas"]; ?>"  <?php if($data3["id_kelas"] == $data["id_kelas"]) { 
                                        echo "selected";
                                      } ?>><?php echo $data["kelas"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mata Pelajaran</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_mapel" data-placeholder="" class="form-control" required>
                                    <option value=""></option>
                          <?php foreach ($show1 as $data1) {
                           ?>
                                    <option value="<?php echo $data1["idpel"]; ?>" <?php if($data3["idpel"] == $data1["idpel"]) { 
                                        echo "selected";
                                      } ?>><?php echo $data1["pelajaran"]; ?></option>
                          <?php } ?>
                                </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="jam" class=" form-control-label">Jam</label></div>
                            <div class="col-6 col-md-4"><input type="time"  id="jam_mulai" name="jam_mulai" placeholder="Menit" class="form-control" value="<?php echo $data3['jam_mulai'];?>"></div> Sampai
                            <div class="col-6 col-md-4"><input type="time"  id="jam_selesai" name="jam_selesai" placeholder="Menit" class="form-control" value="<?php echo $data3['jam_selesai'];?>"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tgl_ujian" class=" form-control-label">Tanggal Ujian</label></div>
                            <div class="col-12 col-md-9"><input type="date"  id="tgl_ujian" name="tgl_ujian" value="<?php echo $data3['tgl_ujian'];?>" class="form-control" ></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tgl_ujian" class=" form-control-label">Waktu</label></div>
                            <div class="col-12 col-md-9"><input type="number"  id="waktu" name="waktu" value="<?php echo $data3["waktu"]; ?>" class="form-control" ></div>
                          </div>
                      </div>
                          <div class="card-footer" align="right">
                            <button type="submit" class="btn btn-primary btn-sm" id="update" name="update">
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
            <?php } ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>