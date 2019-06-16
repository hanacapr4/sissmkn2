<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Log.php");
$log = new Log();
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
                                            <div id="curve_chart" style="width: 100%; height: 490px;"></div>
                                                
                                                
                                            </section>
                                        </div>

                                        
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Kuliah', 'Kerja', 'Usaha', 'Lainnya'],
          ['2014', 320, 203, 55, 30],
          ['2015', 310, 209, 53, 20],
          ['2016', 301, 222, 60, 40],
          ['2017', 308, 233, 70, 30],
          ['2018', 330, 215, 40, 20]
        ]);

        var options = {
          chart: {
            title: 'Data Jenjang Alumni Selanjutnya',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Total Siswa Awal', 'Total Siswa Lulus'],
          ['2014',  1000,      980],
          ['2015',  1170,      1160],
          ['2016',  1155,       1150],
          ['2017',  1050,      1030]
        ]);

        var options = {
          curveType: 'function',
          legend: { position: 'right' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
      </script>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Pekerjaan', 'Hours per Day'],
          ['Wirausaha',     11],
          ['Guru/Dosen',      2],
          ['Sopir',  2],
          ['Pegawai Swasta', 2],
          ['Pegawai Negeri',    7]
        ]);

        var options = {
          title: 'Data Pekerjaan Orang Tua',
          pieHole: 0.8,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
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