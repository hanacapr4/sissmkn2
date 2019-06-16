<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost/sissmkn2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Absensi.php"); ?>
<?php $db = new Absensi(); ?>
<?php
$aksi = $_GET['aksi'];
 if($aksi == "edit"){
	$db->editabsensi($_POST['no_induk'],$_POST['tglabsen'], $_POST['stabsen'], $_POST['Alasan'], $_POST['GuruPiket']);
 	header("location:http://localhost:8080/sissmkn2/views/absensi/absensisiswa/index.php");	 
 }elseif ($aksi == "tambah") {
    $db->createtambahabsensi($_POST['no_induk'],$_POST['stabsen'], $_POST['tanggal'], $_POST['terlambat'], $_POST['Alasan'], $_POST['GuruPiket'],$_POST['id_kelas']);
 	header("location:http://localhost:8080/sissmkn2/views/absensi/absensisiswa/index.php");
 }elseif ($aksi == "hapus") {
    $db->deletePO($_GET['po_id']);
 	header("location:http://localhost/ta_cendana_javiera/views/produksi/production_order/index.php");
 }elseif ($aksi == "datangrfid") {
    $db->tambahabsendatangrfid($_POST['no_induk']);
 	header("location:http://localhost:8080/sissmkn2/views/absensi/absensisiswa/absenmasuk.php");
 }elseif ($aksi == "pulangrfid") {
    $db->tambahabsenpulangrfid($_POST['no_induk']);
 	header("location:http://localhost:8080/sissmkn2/views/absensi/absensisiswa/absenpulang.php");
 }
?>




<!-- ,$_POST['stabsen'], $_POST['tglabsen'], $_POST['datang'], $_POST['id_kelas'] -->