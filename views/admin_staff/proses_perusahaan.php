<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>


<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_perusahaan.php"); ?>
<?php
$object = new t_prakerin();
 	
$aksi = $_GET['aksi'];
if($aksi == 'insert') {
    $object->inserttbl_perusahaan($_POST['id_tmp_prakerin'], $_POST['nama_prakerin'], $_POST['alamat_prakerin'], $_POST['telp_prakerin'], $_POST['kota_prakerin'], $_POST['program'], $_POST['pembimbing'], $_POST['direktur'], $_POST['email'], $_POST['website'], $_POST['th_ajar']);
    header("location:http://localhost:8080/sissmkn2/views/admin_staff/perusahaan.php");
}  elseif ($aksi == 'update') {
	 $object->updatetbl_perusahaan($_POST['id_tmp_prakerin'], $_POST['nama_prakerin'], $_POST['alamat_prakerin'], $_POST['telp_prakerin'], $_POST['kota_prakerin'], $_POST['program'], $_POST['pembimbing'], $_POST['direktur'], $_POST['email'], $_POST['website'], $_POST['th_ajar']);
    header("location:http://localhost:8080/sissmkn2/views/admin_staff/perusahaan.php");
}elseif ($aksi == 'hapus') {
	 $object->deletetbl_perusahaan($_GET['id_tmp_prakerin']);
    header("location:http://localhost:8080/sissmkn2/views/admin_staff/perusahaan.php");
}
?>
