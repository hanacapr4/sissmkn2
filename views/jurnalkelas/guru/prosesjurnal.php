<?php
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/jurnal.php");

$call = new jurnal();
$action = $_GET['aksi'];

if ($action == 'add') {
	$call->tambahdata($_POST['id_jurnal'], $_POST['userid'], $_POST['thajar'], $_POST['idpel'], $_POST['hari'], $_POST['tgl'], $_POST['kelas'], $_POST['jam_mulai'], $_POST['jam_selesai'], $_POST['kegiatan'], $_POST['sdh_blm'], $_POST['ket']);
	header("location:http://localhost:8080/sissmkn2/views/jurnalkelas/guru/jurnalkelas.php");
}elseif ($action == 'delete') {
	$call->hapusjurnal($_GET['id_jurnal']);
	header("location:http://localhost:8080/sissmkn2/views/jurnalkelas/guru/jurnalkelas.php");
}elseif ($action == 'update') {
	$call->editjurnal($_POST['id_jurnal'], $_POST['thajar'], $_POST['idpel'], $_POST['hari'], $_POST['tgl'], $_POST['kelas'], $_POST['jam_mulai'], $_POST['jam_selesai'], $_POST['kegiatan'], $_POST['sdh_blm'], $_POST['ket']);
	header("location:http://localhost:8080/sissmkn2/views/jurnalkelas/guru/jurnalkelas.php");
}elseif ($action == 'filter') {
	$call->mencoba($_POST['contoh'] && $_POST['contoh']);
	header("location:http://localhost:8080/sissmkn2/views/jurnalkelas/filterjurnal1.php");
}elseif ($action == 'cobadeh') {
	$call->cetakjurnalperkelas($_POST['tgl']);
	header("location:http://localhost:8080/sissmkn2/views/jurnalkelas/awal3.php");
}
?>