<?php 

class detailpembagian extends Database {
    var $table = 'detail_pembagian_kelas';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select id_pembagian, kelas.nama_kelas, nis from detail_pembagian_kelas
          LEFT JOIN kelas ON detail_pembagian_kelas.id_kelas = kelas.id_kelas";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }
    if ($aksi == 'hapus') {
     $object->Deletedetail($_GET['id_pembagian']);
    header("location:http://localhost:8080/SISSMKN2/views/admin/detail_pembagian_kelas.php");
}

}
    ?>
