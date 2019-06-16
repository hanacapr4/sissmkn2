<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Guru.php"); ?>
<?php
$object = new t_staf ();

$aksi = $_GET['aksi'];
if($aksi == 'insert') {

    $object->insertGuru($_POST['user_id'], $_POST['nama'],  $_POST['nip'], $_POST['kelamin'], $_POST['alamat'], $_POST['tugas'], $_POST['telp'], $_POST['hp'], $_POST['email'],$_POST['pelajaran'], $_POST['tgl_lahir'], $_POST['tmp_lahir'], $_POST['kode'], $_POST['pangkat'], $_POST['kategori'], $_POST['profilstaf'], $_POST['th_ajar'], $_POST['no_induk_baru'], $_POST['depan_gelar'], $_POST['belakang_gelar'], $_POST['nama_ibu_kandung'], $_POST['kode_pos'], $_POST['golongan_darah'], $_POST['kelurahan'], $_POST['kecamatan'], $_POST['provinsi'], $_POST['daerah'], $_POST['status_nikah'], $_POST['tanggal_masuk'], $_POST['jenis_pegawai'], $_POST['sertifikasi_guru'], $_POST['tmt_pns'], $_POST['akses'], $_POST['arsip'], $_POST['tugas_tambahan'], $_POST['pangkat_pns'], $_POST['jabatan_pns'], $_POST['golongan_pns'], $_POST['pendidikan_terahir'], $_POST['prog_diampu'], $_POST['masakerja_th'], $_POST['masakerja_bl']);
    header("location:http://localhost:8080/sissmkn2/views/admin/guru.php");
}elseif ($aksi == 'update') {
	 $object->updateGuru($_POST['user_id'], $_POST['nama'],  $_POST['nip'], $_POST['kelamin'], $_POST['alamat'], $_POST['tugas'], $_POST['telp'], $_POST['hp'], $_POST['email'],$_POST['pelajaran'], $_POST['tgl_lahir'], $_POST['tmp_lahir'], $_POST['kode'], $_POST['pangkat'], $_POST['kategori'], $_POST['profilstaf'], $_POST['th_ajar'], $_POST['no_induk_baru'], $_POST['depan_gelar'], $_POST['belakang_gelar'], $_POST['nama_ibu_kandung'], $_POST['kode_pos'], $_POST['golongan_darah'], $_POST['kelurahan'], $_POST['kecamatan'], $_POST['provinsi'], $_POST['daerah'], $_POST['status_nikah'], $_POST['tanggal_masuk'], $_POST['jenis_pegawai'], $_POST['sertifikasi_guru'], $_POST['tmt_pns'], $_POST['akses'], $_POST['arsip'], $_POST['tugas_tambahan'], $_POST['pangkat_pns'], $_POST['jabatan_pns'], $_POST['golongan_pns'], $_POST['pendidikan_terahir'], $_POST['prog_diampu'], $_POST['masakerja_th'], $_POST['masakerja_bl']);
	 header("location:http://localhost:8080/sissmkn2/views/admin/guru.php");
  }	elseif ($aksi == 'hapus') {
	 $object->Deleteguru($_GET['nip']);
    header("location:http://localhost:8080/sissmkn2/views/admin/guru.php");
}
?>
