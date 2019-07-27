<?php 
class Ujian_online_detail extends Database{

	function buat_kode($kunci, $jumlah_karakter=0 ){
		$con = $this->dbconnect();
		$sql = "SELECT id_ujian_online_detail as max_id_ujian FROM ujian_online_detail ORDER BY id_ujian_online_detail DESC LIMIT 1";
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
			$kode = "1";
			return $kode;
		}
		
	}

	function buat_no_soal($kunci, $jumlah_karakter=0, $id_ujian_online){
		$con = $this->dbconnect();
		$sql = 'SELECT no_soal as max_id_ujian FROM ujian_online_detail WHERE id_ujian_online="'.$id_ujian_online.'" ORDER BY no_soal DESC LIMIT 1';
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
			$kode = "1";
			return $kode;
		}
		
	}

	public function show_detail_ujian($id_ujian_online){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM ujian_online WHERE id_ujian_online="'.$id_ujian_online.'"' or die(mysqli_error());
		$query = mysqli_query($con,$sql);
		return $query;
	}

	public function show_detail_ujian1($id_ujian_online){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM ujian_online_detail WHERE id_ujian_online="'.$id_ujian_online.'"' or die(mysqli_error());
		$query = mysqli_query($con,$sql);
		return $query;
	}

	public function show_detail_ujian_detail($id_ujian_online_detail){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM ujian_online_detail WHERE id_ujian_online_detail="'.$id_ujian_online_detail.'"' or die(mysqli_error());
		$query = mysqli_query($con,$sql);
		return $query;
	}

	public function add_ujian_detail($id_ujian_online_detail, $id_ujian_online,$no_soal, $soal, $jenis_soal, $gambar, $jawaban_a, $jawaban_b, $jawaban_c, $jawaban_d, $jawaban_e, $jawaban_benar, $poin_nilai){
		$con = $this->dbconnect();
		$file_tmp = $_FILES['gambar']['tmp_name'];
		move_uploaded_file($file_tmp, '../gambar/'.$gambar);
		$sql = 'INSERT INTO ujian_online_detail(id_ujian_online_detail, id_ujian_online, no_soal, soal, jenis_soal, gambar, jawaban_a, jawaban_b, jawaban_c, jawaban_d, jawaban_e, jawaban_benar, poin_nilai) VALUES("'.$id_ujian_online_detail.'","'.$id_ujian_online.'","'.$no_soal.'","'.$soal.'","'.$jenis_soal.'","'.$gambar.'","'.$jawaban_a.'","'.$jawaban_b.'","'.$jawaban_c.'","'.$jawaban_d.'","'.$jawaban_e.'","'.$jawaban_benar.'","'.$poin_nilai.'")';
		$query = mysqli_query($con,$sql);
        if (!$query) {
			return "Failed";
		}
		else{
			return "Success";
		}
	}

	function edit_ujian_detail($id_ujian_online_detail, $id_ujian_online,$no_soal, $soal, $jenis_soal, $gambar, $jawaban_a, $jawaban_b, $jawaban_c, $jawaban_d, $jawaban_e, $jawaban_benar, $poin_nilai){
		$con = $this->dbconnect();
		$sql = 'UPDATE ujian_online_detail SET id_ujian_online="'.$id_ujian_online.'", no_soal="'.$no_soal.'", soal="'.$soal.'", jenis_soal="'.$jenis_soal.'", gambar="'.$gambar.'", jawaban_a="'.$jawaban_a.'", jawaban_b="'.$jawaban_b.'", jawaban_c="'.$jawaban_c.'", jawaban_d="'.$jawaban_d.'", jawaban_e="'.$jawaban_e.'", jawaban_benar="'.$jawaban_benar.'", poin_nilai="'.$poin_nilai.'" WHERE id_ujian_online_detail="'.$id_ujian_online_detail.'"';
		$query = mysqli_query($con,$sql);

		if (!$query) {
			return "Failed";
		}
		else{
			return "Success";
		}
	}

	function delete_ujian_detail($id_ujian_online_detail){
		$con = $this->dbconnect();
		$sql = 'DELETE FROM ujian_online_detail WHERE id_ujian_online_detail="'.$id_ujian_online_detail.'"';
		$query = mysqli_query($con,$sql);
		if (!$query) {
			return "Failed";
		}
		else{
			return "Success";
		}
	}
}