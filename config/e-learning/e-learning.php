<?php

class E_Learning extends Database{

	function buat_kode($kunci, $jumlah_karakter=0 ){
		$con = $this->dbconnect();
		$sql = "SELECT id_elearning as max_id FROM data_elearning ORDER BY id_elearning DESC LIMIT 1";
		$query = mysqli_query($con,$sql);
		$datakode = mysqli_fetch_array($query);
		if ($datakode) {
			$id_max = $datakode['max_id'];
			$nomor_baru = intval(substr($id_max, strlen($kunci)))+1;
			$nomor_baru_plus_nol = str_pad($nomor_baru, $jumlah_karakter, "0", STR_PAD_LEFT);
			$kode = $kunci.$nomor_baru_plus_nol;
			return $kode;
		} 
		else{
			$kode = "DE-00001"; 
			return $kode;
		}
		
	}

	public function show_elearning($id_kelas, $id_mapel){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM data_elearning as d JOIN mata_pelajaran as m ON d.id_mapel = m.id_mapel JOIN kelas as k ON d.id_kelas = k.id_kelas WHERE d.id_mapel="'.$id_mapel.'" OR d.id_kelas="'.$id_kelas.'" ';
		$query = mysqli_query($con,$sql);
		return $query; 
	}

	public function show_elearning_guru(){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM data_elearning as d JOIN mata_pelajaran as m ON d.id_mapel = m.id_mapel JOIN kelas as k ON d.id_kelas = k.id_kelas' or die(mysqli_error());
		$query = mysqli_query($con,$sql);
		return $query;
	}

	public function show_detail_elearning($id_elearning){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM data_elearning as d JOIN mata_pelajaran as m ON d.id_mapel = m.id_mapel JOIN kelas as k ON d.id_kelas = k.id_kelas JOIN guru as p ON d.nik = p.nik WHERE id_elearning="'.$id_elearning.'"' or die(mysqli_error());
		$query = mysqli_query($con,$sql);
		return $query;
	}

	public function add_elearning($id_elearning, $judul, $deskripsi, $nama_file, $tanggal_upload, $id_mapel, $id_kelas, $nik){
		$con = $this->dbconnect();
	  	$sql = 'INSERT INTO data_elearning(id_elearning, judul, deskripsi, nama_file, tanggal_upload, id_mapel, id_kelas, nik) VALUES ("'.$id_elearning.'","'.$judul.'","'.$deskripsi.'","'.$nama_file.'","'.$tanggal_upload.'","'.$id_mapel.'","'.$id_kelas.'","'.$nik.'")';
        $query = mysqli_query($con,$sql);
        if (!$query) {
			return "Failed";
		}
		else{
			return "Success";
		}
    }

	public function edit_elearning($id_elearning, $judul, $deskripsi, $nama_file, $tanggal_upload, $id_mapel, $id_kelas, $nik){
		$con = $this->dbconnect();
		$sql = 'UPDATE data_elearning SET judul="'.$judul.'", deskripsi="'.$deskripsi.'", nama_file="'.$nama_file.'", tanggal_upload="'.$tanggal_upload.'", id_mapel="'.$id_mapel.'", id_kelas="'.$id_kelas.'", nik="'.$nik.'" WHERE id_elearning="'.$id_elearning.'"';
		$query = mysqli_query($con,$sql);
		if (!$query) {
			return "Failed";
		}
		else{
			return "Success";
		}
	}

	public function delete_elearning($id_elearning){
		$con = $this->dbconnect();
		$sql = 'DELETE FROM data_elearning WHERE id_elearning="'.$id_elearning.'"';
		$query = mysqli_query($con,$sql);

		if (!$query) {
			return "Failed";
		}
		else{
			return "Success";
		}
	}
}

class Kelas extends Database{

	public function show_kelas(){
		$con = $this->dbconnect();
		$sql = "SELECT * FROM kelas";
		$query = mysqli_query($con,$sql);
		return $query;
	}
}

class Mata_pelajaran extends Database{

	public function show_mapel(){
		$con = $this->dbconnect();
		$sql = "SELECT * FROM mata_pelajaran";
		$query = mysqli_query($con,$sql);
		return $query;
	}
}

class Guru extends Database{

	public function show_guru(){
		$con = $this->dbconnect();
		$sql = "SELECT * FROM guru";
		$query = mysqli_query($con,$sql);
		return $query;
	}
}
?>