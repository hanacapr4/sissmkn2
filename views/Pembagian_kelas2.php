<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Siswa.php"); ?>
<?php

$object = new Siswa();
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pembagian Kelas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Pembagian Kelas</a></li>
                            <li class="active">List Pembagian kelas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


               <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                          <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> export
                          </button>
                          <button title="import data dari excel" type="reset" class="btn btn-warning btn-sm">
                            <i class="fa ti-download"></i> import
                          </button>
                          
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>

                        
                            <div class="col col-md-1"><label for="selectSm" class=" form-control-label">Pilih Jurusan</label></div>
                            <div class="col-12 col-md-4">
                              <select name="selectSm" id="pilih_jurusan" class="form-control-sm form-control">
                                <option value="0">pilih...</option>
                                <option value="PS">Perawat Sosial</option>  
                                <option value="UPW">Usaha Perjalanan Wisata</option>
                                <option value="AP">Akomodasi Perhotelan </option>
                                <option value="KPR">Keperawatan</option>
                                 <option value="JSB">Jasa Boga</option>
                                  <option value="TKJ">Teknik Komputer Jaringan</option>
                                <!--<option value="STI">Samsung TECH ISTITUTE</option>-->
                              </select>
                            </div>
                          </div>  
                        <div  class="card-body" id="data_detail" style="display:none">
                         <table id="bootstrap-data-table" class="table table-striped table-bordered"> 
                                <thead>
                                  <tr>
                                  
                                  <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Nama Jurusan</th>
                                    <th>Action</th>
                                    
                                  </tr>
                                </thead>
                                <tbody  id="sapi">
                        
                              </tbody>
                              <tbody  id="babi">
                        
                              </tbody>
                              
                            </div>
                          </div>  
                            </table>
                            <!-- <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                        </div> -->
                        <!-- <div class="card-footer">
                          <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> export
                          </button>
                          <button title="import data dari excel" type="reset" class="btn btn-warning btn-sm">
                            <i class="fa ti-download"></i> import
                          </button>
                        </div> 
                    </div>
                </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel --> <script type="text/javascript">
      var table;
        $(document).ready(function() {


          $("#pilih_jurusan").change(function () {
            var datas = $("#pilih_jurusan").val();
            var type   = 'sapi';
            
            // console.log(datas)
            $.ajax({

          type: "POST",
          url: "../config/api/Bagikelasdemo.php",
          data: {params:datas,type:type},
          success: function(data) {
            // console.log(data)
            $('#sapi').html(data);
            $('#data_detail').css('display','block'); 
          }
         });

            
          });
          });
        function edit_kelas(jurusn,id_kelas,nis) {
          var type   = 'child';
          $.ajax({

          type: "POST",
          url: "../config/api/Bagikelasdemo.php",
          data: {params:jurusn,type:type,id_kelas:id_kelas,nis:nis},
          success: function(data) {
            console.log(data)
            $('#sapi').html(data);
            $('#data_detail').css('display','block'); 
          }
         });
          // console.log(id_kelas)
          // console.log(nis)
          // console.log(jurusn)
        }
        

    </script>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?> 