<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php"); ?>
<?php $db = new Kesiswaan(); ?>
<?php
$aksi = $_GET['aksi'];

 if($aksi == "edit"){
	$db->editjurusan($_POST['idJurusan'],
    	$_POST['kodeJurusan'],
    	$_POST['bs'],
    	$_POST['ps'],
    	$_POST['kk']
        );
 	header("location:http://localhost:8080/sissmkn2/views/manage/jurusan/index.php"); 
 }elseif ($aksi == "tambah") {
    $db->tambahjurusan($_POST['idJurusan'],
    	$_POST['kodeJurusan'],
    	$_POST['bs'],
    	$_POST['ps'],
    	$_POST['kk']
        );
 	header("location:http://localhost:8080/sissmkn2/views/manage/jurusan/index.php");
 }elseif ($aksi == "hapus") {
    $db->deletePO($_GET['po_id']);
 	header("location:http://localhost/ta_cendana_javiera/views/produksi/production_order/index.php");
 }
?>