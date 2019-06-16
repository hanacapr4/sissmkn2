<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/SISSMKN2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Absensi.php"); ?>
<?php $db = new SendSMS(); ?>
<?php
$aksi = $_GET['aksi'];

 if($aksi == "tambah"){
	$db->kirimsms($_POST['notujuan'],$_POST['pesan'],'bagus');
 	header("location:http://localhost:8080/SISSMKN2/views/absensi/absensisiswa/rekap.php");	 
 }elseif ($aksi == "edit") {
    $db->edit($_POST['nis'], $_POST['id_kelas'], $_POST['keterangan'],$_POST['tanggal'],'1');
 	header("location:http://localhost:8080/SISSMKN2/views/absensi/absensisiswa/index.php");
 }elseif ($aksi == "hapus") {
    $db->deletePO($_GET['po_id']);
 	header("location:http://localhost:8080/SISSMKN2/views/absensi/absensisiswa/index.php");
 }
?>