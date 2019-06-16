<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/alumni.php"); ?>
<?php
$object = new alumni();
 	
$aksi = $_GET['aksi'];
if($aksi == 'insert') {
    $object->insertalumni($_POST['nis'], $_POST['nama'], $_POST['kelanjutan'], $_POST['penghasilan'], $_POST['nama_instansi'], $_POST['tanggal_mulai']);
    header("location:http://localhost:8080/sissmkn2/views/siswa/alumni/index.php");
}  elseif ($aksi == 'update') {
	 $object->updatealumni($_POST['nis'], $_POST['nama'], $_POST['alamat'], $_POST['departement'], $_POST['kuota'], $_POST['no_hp']);
    header("location:http://localhost:8080/sissmkn2/views/siswa/alumni/index.php");
}elseif ($aksi == 'hapus') {
	 $object->deletealumni($_GET['nis']);
   header("location:http://localhost:8080/sissmkn2/views/siswa/alumni/index.php");
}
?>
