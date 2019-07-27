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
                            <li class="active">Guru</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> 
                                        <div class="col-xl-12 col-lg-6">
                                            <section class="card">
                                                <div class="twt-feed blue-bg" style="background-color:#13b4a0">
                                                    <div class="corner-ribon black-ribon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <div class="fa fa-user wtt-mark"></div>

                                                    <div class="media align-self-center">
                                                    <img class="align-self-center rounded-circle mr-3" style="margin-left:40%; margin-bottom:2%; width:100px; height:100px;" alt="" src="<?php echo $siteurl; ?>/images/guru.jpg">
                                                    </div>
                                                </div>
                                                <div class="weather-category twt-category">
                                                    <ul>
                                                        <li class="active">
                                                            <h5><?php echo $_SESSION['Nama_guru'];?></h5>
                                                            Nama Admin
                                                        </li>
                                                        <li>
                                                            <h5><?php echo $_SESSION['nip'];?></h5>
                                                            Nomor Induk Pegawai
                                                        </li>
                                                        <li>
                                                            <h5><?php echo $_SESSION['menu'];?></h5>
                                                            Jabatan
                                                        </li>
                                                    </ul>
                                                </div>
                                            </section>
                                        </div>

                                        
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>
