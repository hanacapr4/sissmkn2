<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/SISSMKN2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Kesiswaan.php"); ?>
<?php $db = new Kesiswaan(); ?>
<?php
$aksi = $_GET['aksi'];

 if($aksi == "edit"){
	$db->editpdfs($_POST['idPendaftaran'],$_POST['nisn'],$_POST['nama'],$_POST['jk'],$_POST['email'],$_POST['tglLahir'],$_POST['tempatLahir'],$_POST['alamat'],$_POST['kecamatan'],$_POST['kabupaten'],$_POST['telepon'],$_POST['agama'],$_POST['sekolahAsal'],$_POST['noPesertaSLTP'],$_POST['jurusan'],$_POST['nilaiUN'],$_POST['nilaiRapot'], 0, 'Tahap Seleksi');
 	header("location:http://localhost:8080/SISSMKN2/views/kesiswaan/pendataan/index.php");	 
 }elseif ($aksi == "tambah") {
    $db->tambahpdfs($_POST['idPendaftaran'],$_POST['nisn'],$_POST['nama'],$_POST['jk'],$_POST['email'],$_POST['tglLahir'],$_POST['tempatLahir'],$_POST['alamat'],$_POST['kecamatan'],$_POST['kabupaten'],$_POST['telepon'],$_POST['agama'],$_POST['sekolahAsal'],$_POST['noPesertaSLTP'],$_POST['jurusan'],$_POST['nilaiUN'],$_POST['nilaiRapot'], 0, 'Tahap Seleksi');
 	header("location:http://localhost:8080/SISSMKN2/views/kesiswaan/pendataan/index.php");
 }elseif ($aksi == "hapus") {
    $db->hapuspendaftarans($_GET['idPendaftaran']);
 	header("location:http://localhost:8080/SISSMKN2/views/kesiswaan/pendataan/index.php");
 }
?>