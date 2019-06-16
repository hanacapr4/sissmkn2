 <!doctype html>
<html class="no-js" lang="">
<?php 
error_reporting(E_ALL && ~E_NOTICE);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
session_start();
if($_SESSION['status'] != "login"){
    header("location:http://localhost:8080/sissmkn2/views/login/login/index.php");
}

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMK Negeri 2 Malang</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="<?php echo $siteurl; ?>/images/favicon.ico">

    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/scss/style.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/lib/chosen/chosen.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="<?php echo $siteurl; ?>/assets/js/vendor/jquery-2.1.4.min.js"></script>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <script>
    function tampilkan(){
      var id_user=document.getElementById("form1").kategori.value;
      if (id_user=="siswa")
        {
            document.getElementById("labelsiswa").style.display="block";
            document.getElementById("inputsiswa").style.display="block";
            document.getElementById("labelguru").style.display="none";
            document.getElementById("inputguru").style.display="none";

        }
      else if (id_user=="guru")
        {
            document.getElementById("labelguru").style.display="block";
            document.getElementById("inputguru").style.display="block";
            document.getElementById("labelsiswa").style.display="none";
            document.getElementById("inputsiswa").style.display="none";
        }


      if (id_user=="az")
        {
            document.getElementById("labelaz").style.display="block";
            document.getElementById("labelza").style.display="none";
            document.getElementById("labelperiode").style.display="none";

        }
      else if (id_user=="za")
        {
            document.getElementById("labelaz").style.display="none";
            document.getElementById("labelza").style.display="block";
            document.getElementById("labelperiode").style.display="none";
        }
      else if (id_user=="periode")
        {
            document.getElementById("labelaz").style.display="none";
            document.getElementById("labelza").style.display="none";
            document.getElementById("labelperiode").style.display="block";
        }
       else if (id_user=="eksporaz")
        {
            document.getElementById("eksporlabelaz").style.display="block";
            document.getElementById("eksporlabelza").style.display="none";
            document.getElementById("eksporlabelperiode").style.display="none";

        }
      else if (id_user=="eksporza")
        {
            document.getElementById("eksporlabelaz").style.display="none";
            document.getElementById("eksporlabelza").style.display="block";
            document.getElementById("eksporlabelperiode").style.display="none";
        }
      else if (id_user=="eksporperiode")
        {
            document.getElementById("eksporlabelaz").style.display="none";
            document.getElementById("eksporlabelza").style.display="none";
            document.getElementById("eksporlabelperiode").style.display="block";
        }       
    }
    </script>

    <script>
    function tampilkanekspor(){
      var id_user=document.getElementById("form1").kategori.value;
      if (id_user=="eksporaz")
        {
            document.getElementById("eksporlabelaz").style.display="block";
            document.getElementById("eksporlabelza").style.display="none";
            document.getElementById("eksporlabelperiode").style.display="none";

        }
      else if (id_user=="eksporza")
        {
            document.getElementById("eksporlabelaz").style.display="none";
            document.getElementById("eksporlabelza").style.display="block";
            document.getElementById("eksporlabelperiode").style.display="none";
        }
      else if (id_user=="eksporperiode")
        {
            document.getElementById("eksporlabelaz").style.display="none";
            document.getElementById("eksporlabelza").style.display="none";
            document.getElementById("eksporlabelperiode").style.display="block";
        }       
    }
    </script>



    


</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel" style="background-color:#343a40; col">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header" style="background-color:#343a40;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" style="border-bottom:1px; border-bottom-style:solid; border-bottom-color:#f8f9f7;" href="./"><img src="<?php echo $siteurl; ?>/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?php echo $siteurl; ?>/images/logo_smk2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <?php
                if ($_SESSION['menu'] == "admin") {
                include ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/sidemenu_admin.php");
                }elseif ($_SESSION['menu'] == "siswa") {
                include ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/sidemenu_siswa.php");
                }if ($_SESSION['menu'] == "guru") {
                include ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/sidemenu_guru.php");
                }
                ?>


            </div>
        </nav>
    </aside>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                 <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                                Selamat datang&nbsp;<b><?php
                                    if ($_SESSION['menu'] == "t_siswa"){
                                        echo $_SESSION['nama'];
                                    }elseif ($_SESSION['menu'] != "t_siswa") {
                                        echo $_SESSION['Nama_guru'];
                                    }
                                ?></b>
                                &nbsp;&nbsp;&nbsp;
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php 
                            if ($_SESSION['menu'] == "admin") {
                                echo '<img class="user-avatar rounded-circle" src="http://localhost:8080/sissmkn2/images/admin.png" alt="User Avatar">';
                            }elseif ($_SESSION['menu'] == "guru") {
                                echo '<img class="user-avatar rounded-circle" src="http://localhost:8080/sissmkn2/images/guru.jpg" alt="User Avatar">';
                            }else {
                                echo '<img class="user-avatar rounded-circle" src="http://localhost:8080/sissmkn2/images/siswa.jpg" alt="User Avatar">';
                            }
                            ?>
                        </a>

                         <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="<?php echo $siteurl; ?>/views/login/login/logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="float-right">
                                
                        </div>
                    </div>

                </div>
            </div>

        </header>