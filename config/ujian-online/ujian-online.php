<?php 
class Ujian_online extends Database{

	function buat_kode($kunci, $jumlah_karakter=0 ){
		$con = $this->dbconnect();
		$sql = "SELECT id_ujian_online as max_id_ujian FROM ujian_online ORDER BY id_ujian_online DESC LIMIT 1";
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
			$kode = "UO-00001";
			return $kode;
		}
		
	}

	function show_ujian(){
		$con = $this->dbconnect();
		$sql = 'SELECT *FROM ujian_online as u JOIN kelas as k ON u.id_kelas = k.id_kelas JOIN mata_pelajaran as m ON u.id_mapel = m.id_mapel';
		$query = mysqli_query($con,$sql);
		return $query;
	}
	function show_ujian_waktu(){
		$con = $this->dbconnect();
		$sql = 'SELECT *FROM ujian_online as u JOIN kelas as k ON u.id_kelas = k.id_kelas JOIN mata_pelajaran as m ON u.id_mapel = m.id_mapel WHERE date_format(tgl_ujian, "%Y-%m-%d")=CURDATE()';
		$query = mysqli_query($con,$sql);
		return $query;
		}

	function show_ujian_detail(){
		$con = $this->dbconnect();
		$sql = 'SELECT *FROM ujian_online_detail';
		$query = mysqli_query($con,$sql);
		return $query;
	}

	function show_detail_ujian($id_ujian_online){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM ujian_online as u JOIN kelas as k ON u.id_kelas = k.id_kelas JOIN mata_pelajaran as m ON u.id_mapel = m.id_mapel JOIN guru as pe ON u.nik = pe.nik WHERE id_ujian_online="'.$id_ujian_online.'"' or die(mysqli_error());
		$query = mysqli_query($con,$sql);
		return $query;
	}

	function add_ujian($id_ujian_online, $id_kelas, $id_mapel, $nik, $jenis_ujian, $jam_mulai, $jam_selesai, $bab, $tgl_ujian, $waktu, $tgl_upload){
		$con = $this->dbconnect();
		$sql = 'INSERT INTO ujian_online(id_ujian_online, id_kelas, id_mapel, nik, jenis_ujian, jam_mulai, jam_selesai, bab, tgl_ujian, waktu, tgl_upload) VALUES("'.$id_ujian_online.'","'.$id_kelas.'","'.$id_mapel.'","'.$nik.'","'.$jenis_ujian.'","'.$jam_mulai.'","'.$jam_selesai.'","'.$bab.'","'.$tgl_ujian.'","'.$waktu.'","'.$tgl_upload.'")';
		$query = mysqli_query($con,$sql);
        if (!$query) {
			return "Failed";
		}
		else{
			return "Success";
		}
	}

	function edit_ujian($id_ujian_online, $id_kelas, $id_mapel, $nik, $jam_mulai, $jam_selesai, $jenis_ujian, $bab, $tgl_ujian, $waktu, $tgl_upload){
		$con = $this->dbconnect();
		$sql = 'UPDATE ujian_online SET id_kelas="'.$id_kelas.'", id_mapel="'.$id_mapel.'", nik="'.$nik.'", jam_mulai="'.$jam_mulai.'", jam_selesai="'.$jam_selesai.'", jenis_ujian="'.$jenis_ujian.'", bab="'.$bab.'", tgl_ujian="'.$tgl_ujian.'", waktu="'.$waktu.'", tgl_upload="'.$tgl_upload.'" WHERE id_ujian_online="'.$id_ujian_online.'"';
		$query = mysqli_query($con,$sql);

		if (!$query) {
			return "Failed";
		}
		else{
			return "Success";
		}
	}

	function delete_ujian($id_ujian_online){
		$con = $this->dbconnect();
		$sql = 'DELETE FROM ujian_online WHERE id_ujian_online="'.$id_ujian_online.'"';
		$query = mysqli_query($con,$sql);
		if (!$query) {
			return "Failed";
		}
		else{
			return "Success";
		}
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

?>