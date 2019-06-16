<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1); 
session_start();
$alertid = $_POST['id_Hari'];
$_SESSION['alertid'] = $alertid;

require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Hari.php"); ?>
<?php
$object = new Hari();

$aksi = $_GET['aksi'];

foreach($object->getforalert($_GET['id_Hari']) as $item) { 
  if (!empty($item['id_Hari'])){
  	$_SESSION['alertid'] = "ada";
  	header("location:http://localhost:8080/sissmkn2/views/admin/hari.php");
  }
}


if($aksi == 'insert') {
    $object->inserthari($_POST['id_Hari'], $_POST['kode_hari'], $_POST['Hari']);
    header("location:http://localhost:8080/sissmkn2/views/admin/hari.php");
} elseif ($aksi == 'update') {
	 $object->updateMapel($_POST['id_Hari'], $_POST['kode_hari'], $_POST['Hari']);
    header("location:http://localhost:8080/sissmkn2/views/admin/hari.php");
}
elseif ($aksi == 'hapus') {
	 $object->DeleteHari($_GET['id_Hari']);
    header("location:http://localhost:8080/sissmkn2/views/admin/hari.php");
}

?>
