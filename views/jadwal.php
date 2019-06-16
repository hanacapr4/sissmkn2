<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/headerjadwal.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Jadwal.php"); ?>
<?php
$object = new Jadwal();
?>

        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header">
                    <div class="page-title">
                      <div>
                      </div>
                      <div>
                        <div>
                        <br></br>
                         
                            <div class="float-right" style="width: 60%;margin-top: 1%"><p><h1 style="font-size: 3em;">JADWAL PELAJARAN<br>SMK NEGERI 2 MALANG</h1></p></div></br>
                            <img src="../images/logo_smk2.png" class="float-right" style="width: 6%;margin-right: 1%;margin-bottom: 4%" />
                    </div>
                </div>
            </div>
            </div>
          </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                          
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        
                        <div class="card-body">
                        <div class="row form-group">
                           <div class="col-5 col-md-5">
                              <select name="select" id="pilihfilter" class="form-control">
                              <option value="0"> pilih filter</option>                        
                              <option value="guru">Nama Guru</option>                        
                              <option value="hari">Nama Hari</option>                        
                              <option value="mapel">Nama Mapel</option>                        
                              </select>
                            </div>
                          </div>
                        
                        <form id="filter" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col-12 col-md-5" id="sapi" style="display:none">
                              <select name="select" id="nama_guru" class="form-control">

                              </select>
                            </div>
                             
                          </div>
                        </form>
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Nama Guru</th>
                                    <th>Nama Mapel</th>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                  </tr>
                                </thead>
                                <tbody>
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


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script type="text/javascript">
      var table;
        $(document).ready(function() {
        	$('#nama_gurus').change(function () {
        		//console.log('coba')
        		});

          table = $('#bootstrap-data-table').DataTable({
            "processing": true,
          "serverSide": true,
          "ajax": {
                "url": "../config/api/jadwal.php",
                "type": "POST"
            },
            "columns": [
                { "data": "Nama_guru" },
                { "data": "nama_mapel" },
                { "data": "Hari" },
                { "data": "jam" },
                
     		]
     	 });
          $('#nama_guru').change(function (e) {
          	var datas = $("#pilihfilter").val();
          	var get = '';
          	if (datas == 'guru') {
          		table.columns(0).search($('#nama_guru').val().trim()).draw();
          		table.columns(1).search(get.trim()).draw();
          		table.columns(2).search(get.trim()).draw();
          	} else if(datas == 'hari'){
          		table.columns(0).search(get.trim()).draw();
          		table.columns(1).search(get.trim()).draw();
          		table.columns(2).search($('#nama_guru').val().trim()).draw();
          	} else if(datas == 'mapel'){
          		table.columns(0).search(get.trim()).draw();
          		table.columns(1).search($('#nama_guru').val().trim()).draw();
          		table.columns(2).search(get.trim()).draw();
          	};

          	//console.log(datas)
            	});
          $("#pilihfilter").change(function () {
          	var datas = $("#pilihfilter").val();
          	// console.log(datas)
          	$.ajax({

		      type: "POST",
		      url: "../config/api/getJadwal.php",
		      data: {params:datas} ,
		      success: function(data) {
		      	//console.log(data)
		        $('#nama_guru').html(data);
		        $('#sapi').css('display','block'); 
		      }
   			 });
          	
          });


        } );
    </script>

 <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?> 