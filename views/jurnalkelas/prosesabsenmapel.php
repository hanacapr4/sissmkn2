<?php
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/absensimapel.php");

$call = new absensimapel();
$action = $_GET['aksi'];

if ($action == 'add') {
	$call->tambahabsenmapel($_POST['idabsenmapel'], $_POST['no_induk'], $_POST['tglabsen'], $_POST['stabsen'], $_POST['hari'], $_POST['stabsen2'], $_POST['alasan'], $_POST['idpel'], $_POST['jam_mulai'], $_POST['jam_selesai'], $_POST['nip']);
	header("location:http://localhost:8080/sissmkn2/views/jurnalkelas/absenmapel.php");
} elseif ($action == 'delete') {
	$call->hapusabsenmapel($_GET['idabsenmapel']);
	header("location:http://localhost:8080/sissmkn2/views/jurnalkelas/absenmapel.php");
} 
?>