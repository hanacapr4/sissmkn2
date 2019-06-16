<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1); 
session_start();
$alertid = $_POST['id'];
$_SESSION['alertid'] = $alertid;
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Ruangan.php"); ?>
<?php
$object = new Ruangan();
 	
$aksi = $_GET['aksi'];

foreach($object->getforalert($_GET['id']) as $item) { 
  if (!empty($item['id'])){
  	$_SESSION['alertid'] = "ada";
  	header("location:http://localhost:8080/sissmkn2/views/admin/Ruangan.php");
  }
}


if($aksi == 'insert') {
    $object->insertRuangan($_POST['id'], $_POST['kode'], $_POST['nama'], $_POST['gedung'], $_POST['penanggung_jawab'], $_POST['jenis'], $_POST['profil'], $_POST['thajar']);
    header("location:http://localhost:8080/sissmkn2/views/admin/Ruangan.php");
}  elseif ($aksi == 'update') {
	 $object->updateRuangan($_POST['id'], $_POST['kode'], $_POST['nama'], $_POST['gedung'], $_POST['penanggung_jawab'], $_POST['jenis'], $_POST['profil'], $_POST['thajar']);
    header("location:http://localhost:8080/sissmkn2/views/admin/Ruangan.php");
}
elseif ($aksi == 'hapus') {
	 $object->DeleteRuangan($_GET['id']);
    header("location:http://localhost:8080/sissmkn2/views/admin/Ruangan.php");
}

?>