<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_pendaftaran_prakerin.php"); ?>
<?php
$object = new tbl_pendaftaran_prakerin();
 	
$aksi = $_GET['aksi'];
if ($aksi == 'insert') {
    $object->inserttbl_pendaftaranprakerin($_POST['id_pendprakerin'], $_POST['id_pers'], $_POST['nis'], $_POST['tgl_daftar']);
    //header("location:http://localhost:8080/sissmkn2/siswa/pendaftaran_prakerin.php");
}  elseif ($aksi == 'update') {
	 $object->updatetbl_jadwal_monitoring($_POST['id_monitoring'], $_POST['id_dataprakerin'], $_POST['id_pemsek'], $_POST['nama_siswa'], $_POST['tgl_monitor'], $_POST['Deskripsi']);
    header("location:http://localhost:8080/sissmkn2/jadwal_monitoring.php");
    
}

?>