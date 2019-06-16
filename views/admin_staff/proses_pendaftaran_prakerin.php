<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>


<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_pendaftaran_prakerin.php"); ?>
<?php
$object = new t_prakerin_siswa();
 	
$aksi = $_GET['aksi'];
if($aksi == 'insert') {
    $object->inserttbl_pendaftaran_prakerin($_POST['id_siswa_prakerin'], $_POST['id_tmp_prakerin'], $_POST['id_pembimbing'], $_POST['no_induk'], $_POST['nama_prakerin'], $_POST['alamat_prakerin'], $_POST['pembimbing'], $_POST['nip'], $_POST['lama_bln'], $_POST['tgl_start'], $_POST['tgl_akhir'], $_POST['tapel'], $_POST['kelas'], $_POST['prakerinke'], $_POST['program']);
    header("location:http://localhost:8080/sissmkn2/views/admin_staff/pendaftaran_prakerin.php");
}  elseif ($aksi == 'update') {
	 $object->updatetbl_perusahaan($_POST['id_siswa_prakerin'], $_POST['id_tmp_prakerin'], $_POST['id_pembimbing'], $_POST['no_induk'], $_POST['nama_prakerin'], $_POST['alamat_prakerin'], $_POST['pembimbing'], $_POST['nip'], $_POST['lama_bln'], $_POST['tgl_start'], $_POST['tgl_akhir'], $_POST['tapel'], $_POST['kelas'], $_POST['prakerinke'], $_POST['program']);
    header("location:http://localhost:8080/sissmkn2/views/admin_staff/pendaftaran_prakerin.php");
}elseif ($aksi == 'hapus') {
	 $object->deletetbl_perusahaan($_GET['id_siswa_prakerin']);
    header("location:http://localhost:8080/sissmkn2/views/admin_staff/pendaftaran_prakerin.php");
}
?>
