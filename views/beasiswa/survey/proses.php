<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 
session_start();
$alertbea = $_POST['idBeasiswa'];
$_SESSION['alertbea'] = $alertbea;
$alertNamaSiswa = $_POST['namaSiswa'];
$_SESSION['atasnama'] = $alertNamaSiswa;
?>

<?php $siteurl = 'http://localhost:8080/SISSMKN2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Beasiswa.php"); ?>
<?php $db = new Beasiswa(); ?>
<?php
$aksi = $_GET['aksi'];

$konversi = $_POST['survey']/2;


foreach($db->getforalert($_GET['idBeasiswa']) as $item) { 
  if (!empty($item['idBeasiswa'])){
  	$_SESSION['alertbea'] = "ada";
  	header("location:http://localhost:8080/SISSMKN2/views/beasiswa/survey/index.php");
  }
}


 if ($aksi == "tambah") {
 	$tabel = "beasiswa";
    $action = "insert";
 	$db->survey($_POST['idBeasiswa'],$_POST['idBea'],$_POST['namaWali'],$_POST['alamatWali'],$_POST['noHPWali'],$_POST['pekerjaanWali'],$_POST['penghasilanWali'],$_POST['namaSiswa'],$_POST['nis'],$_POST['keringananSpp'],$_POST['keringananSbpp'],$_POST['krit1'],$_POST['krit2'],$_POST['krit3'],$_POST['krit4'],$_POST['krit5'],$_POST['krit6'],$_POST['krit7'],$_POST['krit8'],$_POST['krit9'],$_POST['krit10'],$_POST['essay1'],$_POST['essay2'],$_POST['essay3'],$_POST['essay4'],$_POST['essay5'],$_POST['essay6'],$_POST['essay7'],$_POST['essay8'],$_POST['essay9'],$_POST['thnAjaran'],$konversi,$tabel,$action);
    header("location:http://localhost:8080/SISSMKN2/views/beasiswa/survey/index.php");
 }elseif ($aksi == "edit"){
	$db->editsurvey($_POST['idBeasiswa'],$_POST['namaWali'],$_POST['alamatWali'],$_POST['noHPWali'],$_POST['pekerjaanWali'],$_POST['penghasilanWali'],$_POST['namaSiswa'],$_POST['nis'],$_POST['keringananSpp'],$_POST['keringananSbpp'],$_POST['krit1'],$_POST['krit2'],$_POST['krit3'],$_POST['krit4'],$_POST['krit5'],$_POST['krit6'],$_POST['krit7'],$_POST['krit8'],$_POST['krit9'],$_POST['krit10'],$_POST['essay1'],$_POST['essay2'],$_POST['essay3'],$_POST['essay4'],$_POST['essay5'],$_POST['essay6'],$_POST['essay7'],$_POST['essay8'],$_POST['essay9'],$_POST['thnAjaran'],$_POST['survey']);
 	header("location:http://localhost:8080/SISSMKN2/views/beasiswa/survey/index.php");
 }elseif ($aksi == "updateStatus"){
	$db->updateStatus($_POST['nis'],$_POST['keterangan']);
	header("location:http://localhost:8080/SISSMKN2/views/beasiswa/survey/index.php");
 }elseif ($aksi == "hapus") {
    $db->deletesurvey($_GET['nis']);
 	header("location:http://localhost:8080/SISSMKN2/views/beasiswa/survey/index.php");
 }
?>