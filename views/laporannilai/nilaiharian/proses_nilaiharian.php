<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/nilaiharian.php"); ?>
<?php $db = new nilaiharian(); ?>
<?php

$aksi = $_GET['aksi'];
if($aksi == 'insert') {
    $db->insertnilai($_POST['id_nilai'],$_POST['NIS'], $_POST['id_mapel'], $_POST['Nilai_Latihan'], $_POST['Nilai_Tugas'], $_POST['Nilai_Kuis'], $_POST['Nilai_UTS'], $_POST['Nilai_UAS'], $_POST['convert_nilai']);
    header("location:http://localhost:8080/sissmkn2/views/laporannilai/nilaiharian/index.php");
}elseif ($aksi == 'update') {
	 $db->updatenilai($_POST['id_nilai'], $_POST['NIS'], $_POST['id_mapel'], $_POST['Nilai_Latihan'], $_POST['Nilai_Tugas'], $_POST['Nilai_Kuis'], $_POST['Nilai_UTS'], $_POST['Nilai_UAS'], $_POST['convert_nilai']);
    header("location:http://localhost:8080/sissmkn2/views/laporannilai/nilaiharian/index.php");
}
elseif($aksi == "hapus"){ 	
 	$db->deletenilai($_GET['id_nilai']);
	header("location:http://localhost:8080/sissmkn2/views/laporannilai/nilaiharian/index.php");
}
?>
