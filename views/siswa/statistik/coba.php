<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Log.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Kesiswaan.php");
$log = new Log();
$ks = new Kesiswaan();
// print_r($ks->tampillanjutanalumni());
// die();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Statistik Data Siswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Statistik Data Siswa</a></li>
                            <li class="active">Admin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> 
                                         <div class="col-xl-12 col-lg-6">
                                            
                                            <section class="card" style="background-color:white; width: 270px; height: 200px; position: absolute; left: 0; margin-left: 5px;">
                                                     <div class="card-body">
                                                    <H4>Jumlah Siswa Aktif</H4>
                                                    <hr width="100%" />
                                                    <h1>100</h1></div>

                                                
                                            </section>
                                            <section class="card" style="background-color:white; width: 270px; height: 200px; position: absolute; left: 285px; margin-right: 5px;">
                                             <div id="donutchart" style="width: 100%; height: 500px;"></div>
                                                
                                            </section>
                                            <section class="card" style="background-color:white; width: 550px; height: 285px; position: absolute; left: 565px; margin-right: 5px; overflow-y: scroll;">
                                                <div class="card-body">
                                                    <center><h2><strong class="card-title">Log </strong>Analysis</h2></center>
                                                    <hr width="100%" />
                                                    <table id="coba" class="table table-striped table-bordered display">
                                                        <thead>
                                                          <tr>
                                                            <th>Username</th>
                                                            <th>Tabel</th>
                                                            <th>Waktu</th>
                                                            <th>Action</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            foreach($log->tampillog() as $item){
                                                                // print_r($item[]);
                                                                // die();
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $item['nik_nis']; ?></td>
                                                            <td><?php echo $item['tabel']; ?></td>
                                                            <td><?php echo $item['waktu']; ?></td>
                                                            <td><?php echo $item['action']; ?></td>
                                                            
                                                        </tr>

                                                            <?php } ?>
                                                      </tbody>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>

                                        <div class="col-xl-12 col-lg-6" style="position: absolute; top: 345px;">

                                            <section class="card" style="background-color:white; width: 550px; position: absolute; left: 0; margin-left: 5px;">
                                                    
                                                    <div id="columnchart_material" style="width: 100%; height: 410px;"></div>
                                                
                                                
                                            </section>
                                            <section class="card" style="background-color:white; width: 550px; height: 335px; position: absolute; left: 565px; margin-right: 5px; top: 80px">
                                            <div class="card-body">
                                                <h4 class="mb-3">Team Commits </h4>
                                                <canvas id="team-chart"></canvas>
                                            </div>
                                            </section>
                                        </div>

                                        
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
	$(document).ready(function(){
	$.ajax({
		url: "<?php $ks->tampillanjutanalumni() ?>",
		method: "GET",
		success: function(data) {
			console.log(data);
			var player = [];
			var score = [];

			for(var i in data) {
				player.push("Player " + data[i].playerid);
				score.push(data[i].score);
			}

			var chartdata = {
				labels: player,
				datasets : [
					{
						label: 'Player Score',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});

</script>
      <script>
$(document).ready(function() {
    $('#coba').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>