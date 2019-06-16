<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1); 
session_start();
$alertid = $_POST['idBea'];
$_SESSION['alertid'] = $alertid;
$namaSiswa = $_POST['namaSiswa'];
$_SESSION['namaSiswa'] = $namaSiswa;
$getwaktu = $_POST['waktu'];
$_SESSION['getwaktu'] = $getwaktu;
?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Beasiswa.php"); ?>
<?php $db = new Pengajuan(); ?>
<?php
$aksi = $_GET['aksi'];


foreach($db->getforalert($_GET['idBea']) as $item) { 
  if (!empty($item['idBea'])){
  	$_SESSION['alertid'] = "ada";
  	header("location:http://localhost:8080/sissmkn2/views/beasiswa/siswa/index.php");
  }
}


 if ($aksi == "tambah") {
  foreach($db->showperiode() as $item) { 
    if ($getwaktu >= $item['mulai'] AND $getwaktu <= $item['hingga']){
      $tabel = "pengajuan";
      $action = "insert";
      $idPeriode = "1";
      $db->tambahaju($_POST['idBea'],$_POST['namaWali'],$_POST['alamatWali'],$_POST['noHPWali'],$_POST['pekerjaanWali'],$_POST['penghasilanWali'],$_POST['namaSiswa'],$_POST['nis'],$_POST['psCode'],$_POST['pengajuanSpp'],$_POST['pengajuanSbpp'],$_POST['waktu'],$_POST['thnAjaran'],$_POST['kelas'],addslashes(file_get_contents($_FILES['sktm']['tmp_name'])),addslashes(file_get_contents($_FILES['ktp']['tmp_name'])),addslashes(file_get_contents($_FILES['kk']['tmp_name'])),addslashes(file_get_contents($_FILES['lain']['tmp_name'])),$tabel,$action,$idPeriode);
      header("location:http://localhost:8080/sissmkn2/views/beasiswa/siswa/index.php");
    }else {
      header("location:http://localhost:8080/sissmkn2/views/beasiswa/siswa/index.php");
    }
  }
 }elseif ($aksi == "edit"){
  $tabel = "pengajuan";
  $action = "update";
	$db->editaju($_POST['idBea'],$_POST['namaWali'],$_POST['alamatWali'],$_POST['noHPWali'],$_POST['pekerjaanWali'],$_POST['penghasilanWali'],$_POST['namaSiswa'],$_POST['nis'],$_POST['psCode'],$_POST['pengajuanSpp'],$_POST['pengajuanSbpp'],$_POST['waktu'],$_POST['thnAjaran'],$_POST['kelas'],addslashes(file_get_contents($_FILES['sktm']['tmp_name'])),addslashes(file_get_contents($_FILES['ktp']['tmp_name'])),addslashes(file_get_contents($_FILES['kk']['tmp_name'])),addslashes(file_get_contents($_FILES['lain']['tmp_name'])),$tabel,$action);
	unset($_SESSION['alertid']);
  unset($_SESSION['getwaktu']);
 	header("location:http://localhost:8080/sissmkn2/views/beasiswa/siswa/index.php");
 }elseif ($aksi == "editperiode"){
  $tabel = "periode_beasiswa";
  $action = "update";
	$db->updateperiode($_POST['idPeriode'],$_POST['mulai'],$_POST['hingga'],$tabel,$action);
	unset($_SESSION['alertid']);
 	header("location:http://localhost:8080/sissmkn2/views/beasiswa/siswa/index.php");
 }elseif ($aksi == "hapus") {
  $tabel = "pengajuan";
  $action = "delete";
  $db->deleteaju($_GET['idBea'],$tabel,$action);
 	header("location:http://localhost:8080/sissmkn2/views/beasiswa/siswa/index.php");
 }
?>