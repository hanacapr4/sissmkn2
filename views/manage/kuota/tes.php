<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

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
                            <li class="active">Siswa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> 
                                        <div class="col-xl-12 col-lg-6">
                                            <section class="card">
                                                <div class="twt-feed blue-bg">
                                                    <div class="corner-ribon black-ribon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <div class="fa fa-user wtt-mark"></div>

                                                    <div class="media align-self-center">
                                                    <img class="align-self-center rounded-circle mr-3" style="margin-left:40%; margin-bottom:2%; width:200px; height:200px;" alt="" src="siswa.png">
                                                    </div>
                                                </div>
                                                <div class="weather-category twt-category">
                                                    <ul>
                                                        <li class="active">
                                                            <h5>Arvin Fairuz Huda</h5>
                                                            Nama Siswa
                                                        </li>
                                                        <li>
                                                            <h5>80981293810</h5>
                                                            Nomor Induk Siswa
                                                        </li>
                                                        <li>
                                                            <h5>Teknik Komputer Jaringan</h5>
                                                            Jurusan
                                                        </li>
                                                    </ul>
                                                </div>
                                            </section>
                                        </div>

                                        
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>
