<?php 
class Jawaban_siswa extends Database{
 
	function buat_kode($kunci, $jumlah_karakter=0 ){
		$con = $this->dbconnect();
		$sql = "SELECT id_jawaban_siswa as max_id_ujian FROM jawaban_siswa ORDER BY id_jawaban_siswa DESC LIMIT 1";
		$query = mysqli_query($con,$sql);
		$datakode = mysqli_fetch_array($query);
		if ($datakode) {
			$id_max = $datakode['max_id_ujian'];
			$nomor_baru = intval(substr($id_max, strlen($kunci)))+1;
			$nomor_baru_plus_nol = str_pad($nomor_baru, $jumlah_karakter, "0", STR_PAD_LEFT);
			$kode = $kunci.$nomor_baru_plus_nol;
			return $kode;
		} 
		else{
			$kode = "JWB-UO-00001";
			return $kode;
		}
		
	}

	public function show_ujian_siswa($id_ujian_online, $posisi, $batas){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM ujian_online_detail WHERE id_ujian_online="'.$id_ujian_online.'" LIMIT $posisi, $batas';
		$query = mysqli_query($con,$sql);
		return $query;
	}

	public function add_jawaban_ujian($id_jawaban_siswa, $id_ujian_online, $nis, $no_soal, $jawaban, $status){
		$con = $this->dbconnect();
		$sql = 'INSERT INTO jawaban_siswa(id_jawaban_siswa, id_ujian_online, nis, no_soal, jawaban, status) VALUES("'.$id_jawaban_siswa.'","'.$id_ujian_online.'","'.$nis.'","'.$no_soal.'","'.$jawaban.'","'.$status.'")';
		$query = mysqli_query($con,$sql);
        if (!$query) {
			return "Failed";
		}
		else{
			return "Success";
		}
	}

	function edit_jawaban_ujian($id_jawaban_siswa, $id_ujian_online_detail, $nis, $no_soal, $jawaban, $status){
		$con = $this->dbconnect();
		$sql = 'UPDATE jawaban_soal SET id_ujian_online_detail="'.$id_ujian_online_detail.'", nis="'.$nis.'", no_soal="'.$no_soal.'", jawaban="'.$jawaban.'", status="'.$status.'" WHERE id_jawaban_siswa="'.$id_jawaban_siswa.'"';
		$query = mysqli_query($con,$sql);

		if (!$query) {
			return "Failed";
		}
		else{
			return "Success"; 
		}
	}

	function delete_jawaban_ujian($id_jawaban_siswa){
		$con = $this->dbconnect();
		$sql = 'DELETE FROM jawaban_soal WHERE id_jawaban_siswa="'.$id_jawaban_siswa.'"';
		$query = mysqli_query($con,$sql);
		if (!$query) {
			return "Failed";
		}
		else{
			return "Success";
		}
	}
}

class Siswa extends Database{

	public function show_siswa(){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM siswa';
		$query = mysqli_query($con,$sql);
		return $query;
	}
}

class Ujian_online_detail extends Database{

	public function show_detail_ujian($id_ujian_online){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM ujian_online_detail WHERE id_ujian_online="'.$id_ujian_online.'"' or die(mysqli_error());
		$query = mysqli_query($con,$sql);
		return $query;
	}
}