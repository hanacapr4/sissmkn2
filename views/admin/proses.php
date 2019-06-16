<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1); 
session_start();


require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Mapel.php"); ?>
<?php
$object = new Mapel();

$aksi = $_GET['aksi'];




if($aksi == 'insert') {
    $object->insertMapel($_POST['kode_pel'], $_POST['idpel'], $_POST['pelajaran'], $_POST['pel'], $_POST['program'], $_POST['tingkat'], $_POST['jam_pel'], $_POST['semester'], $_POST['X1'], $_POST['X2'], $_POST['XI1'], $_POST['XI2'], $_POST['XII1'], $_POST['XII2'], $_POST['pengajar'], $_POST['jenis'], $_POST['th_ajar'], $_POST['id_pel_jenis'], $_POST['id_pel_sub'], $_POST['id_pel_pel'], $_POST['produktif'], $_POST['Tingkat1'], $_POST['Tingkat2'], $_POST['Tingkat3']);
    header("location:http://localhost:8080/sissmkn2/views/admin/mapel.php");
} elseif ($aksi == 'update') {
	 $object->updateMapel($_POST['kode_pel'], $_POST['idpel'], $_POST['pelajaran'], $_POST['pel'], $_POST['program'], $_POST['tingkat'], $_POST['jam_pel'], $_POST['semester'], $_POST['X1'], $_POST['X2'], $_POST['XI1'], $_POST['XI2'], $_POST['XII1'], $_POST['XII2'], $_POST['pengajar'], $_POST['jenis'], $_POST['th_ajar'], $_POST['id_pel_jenis'], $_POST['id_pel_sub'], $_POST['id_pel_pel'], $_POST['produktif'], $_POST['Tingkat1'], $_POST['Tingkat2'], $_POST['Tingkat3']);
    header("location:http://localhost:8080/sissmkn2/views/admin/mapel.php");
}
elseif ($aksi == 'hapus') {
	 $object->DeleteMapel($_GET['idpel']);
    header("location:http://localhost:8080/sissmkn2/views/admin/mapel.php");
}
?>
