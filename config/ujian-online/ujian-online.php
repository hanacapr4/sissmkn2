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
		$sql = 'SELECT * FROM ujian_online as u JOIN t_kelas as k on u.id_kelas = k.id_kelas JOIN t_pelajaran as m ON u.idpel = m.idpel';
		$query = mysqli_query($con,$sql);
		return $query;
	}
	
	function show_ujian_waktu(){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM ujian_online as u JOIN t_kelas as k on u.id_kelas = k.id_kelas JOIN t_pelajaran as m ON u.idpel = m.idpel WHERE date_format(tgl_ujian, "%Y-%m-%d")=CURDATE()';

		$query = mysqli_query($con,$sql);

		return $query;
	}

	function show_ujian2($id){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM user as us JOIN t_siswa as ts ON us.no_induk = ts.no_induk JOIN t_kelas as k ON ts.id_kelas = k.id_kelas JOIN ujian_online as u on u.id_kelas = k.id_kelas JOIN t_pelajaran as m ON u.idpel = m.idpel WHERE us.no_induk="$id"';
		$query = mysqli_query($con,$sql);
		return $query;
	}

	// function show_ujian_tes($id){
	// 	$con = $this->dbconnect();
	// 	$sql = 'SELECT * FROM ujian_online as u JOIN nilai_ujian as nu u.id_kelas = k.id_kelas JOIN t_pelajaran as m ON u.idpel = m.idpel WHERE us.no_induk="$id"';
	// 	$query = mysqli_query($con,$sql);
	// 	return $query;
	// }

	function show_ujian_waktu2($id){
		$con = $this->dbconnect();
		$sql = "SELECT * FROM user as us JOIN t_siswa as ts ON us.no_induk = ts.no_induk JOIN t_kelas as k ON ts.id_kelas = k.id_kelas JOIN ujian_online as u on u.id_kelas = k.id_kelas JOIN t_pelajaran as m ON u.idpel = m.idpel WHERE date_format(tgl_ujian, '%Y-%m-%d')=CURDATE() and us.no_induk='$id'";

		$query = mysqli_query($con,$sql);
		// var_dump($query->fetch_assoc());
		return $query;
	}

	function getNilai2($id_ujian,$induk){
		$con = $this->dbconnect();
		$sql = "SELECT nilai_total FROM nilai_ujian where id_ujian_online='$id_ujian' and no_induk='$induk'";

		$query = mysqli_query($con,$sql);
		// var_dump($query->fetch_assoc());
		return $query->fetch_assoc()["nilai_total"];
	}

	function show_ujian_detail(){
		$con = $this->dbconnect();
		$sql = 'SELECT *FROM ujian_online_detail';
		$query = mysqli_query($con,$sql);
		return $query;
	}

	function show_status_ujian_siswa($id_ujian){
		session_start();
		$no_induk = $_SESSION['no_induk'];
		$con = $this->dbconnect();
		$sql = "SELECT * FROM nilai_ujian where id_ujian_online = '".$id_ujian."' and no_induk = '".$no_induk."' ";
		$query = mysqli_query($con,$sql);
		$cek = mysqli_num_rows($query);
		if($cek > 0){
			return "sudah";
		}else{
			return "belum";
		}
		
	}

	function show_detail_ujian($id_ujian_online){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM ujian_online as u JOIN t_kelas as k ON u.id_kelas = k.id_kelas JOIN t_pelajaran as m ON u.idpel = m.idpel JOIN t_staf as pe ON u.nip = pe.nip WHERE id_ujian_online="'.$id_ujian_online.'"';
		$query = mysqli_query($con,$sql);
		return $query;
	}

	function add_ujian($id_ujian_online, $id_kelas, $id_mapel, $nik, $jenis_ujian, $jam_mulai, $jam_selesai, $bab, $tgl_ujian, $waktu, $tgl_upload){
		$con = $this->dbconnect();
		$sql = 'INSERT INTO ujian_online(id_ujian_online, id_kelas, idpel, nip, jenis_ujian, jam_mulai, jam_selesai, bab, tgl_ujian, waktu, tgl_upload, status_ujian) VALUES("'.$id_ujian_online.'","'.$id_kelas.'","'.$id_mapel.'","'.$nik.'","'.$jenis_ujian.'","'.$jam_mulai.'","'.$jam_selesai.'","'.$bab.'","'.$tgl_ujian.'","'.$waktu.'","'.$tgl_upload.'","tidak")';
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
		$sql = 'UPDATE ujian_online SET id_kelas="'.$id_kelas.'", idpel="'.$id_mapel.'", nip="'.$nik.'", jam_mulai="'.$jam_mulai.'", jam_selesai="'.$jam_selesai.'", jenis_ujian="'.$jenis_ujian.'", bab="'.$bab.'", tgl_ujian="'.$tgl_ujian.'", waktu="'.$waktu.'", tgl_upload="'.$tgl_upload.'" WHERE id_ujian_online="'.$id_ujian_online.'"';
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

	function aktif_ujian($id_ujian_online){
		$con = $this->dbconnect();
		$sql = 'UPDATE ujian_online SET status_ujian = "aktif" WHERE id_ujian_online = "'.$id_ujian_online.'"';
		$query = mysqli_query($con,$sql);
		if (!$query) {
			return mysqli_error($con);
		}
		else{
			return "Success";
		}
	}

	function nonaktif_ujian($id_ujian_online){
		$con = $this->dbconnect();
		$sql = 'UPDATE ujian_online set status_ujian = "tidak" where id_ujian_online = "'.$id_ujian_online.'"';
		$query = mysqli_query($con,$sql);
		if (!$query) {
			return mysqli_error($con);
		}
		else{
			return "Success";
		}
	}

	function getJawabanSiswa($id_ujian,$no_induk){
		$con = $this->dbconnect();
		$query = "select * from jawaban_siswa as j inner join ujian_online_detail as uj on j.id_ujian_online_detail = uj.id_ujian_online_detail where j.id_ujian_online = '".$id_ujian."' and j.no_induk = '".$no_induk."'";
		$q = mysqli_query($con,$query);
		if(!$q){
			return mysqli_error($con);
		}else{
			return $q;
		}
	}

	function getNilai($id_ujian_online,$noinduk){
		$con = $this->dbconnect();
		$query = "select * from nilai_ujian as n where n.id_ujian_online = '".$id_ujian_online."' and n.no_induk = '".$noinduk."'";
		$q = mysqli_query($con,$query);
		if(!$q){
			return mysqli_error($con);
		}else{
			return $q;
		}
	}

	function cekPilihan($id_ujian){
		$con = $this->dbconnect();
		$query = "select * from ujian_online_detail as n where n.id_ujian_online = '".$id_ujian."' and n.jenis_soal = 'Pilihan Ganda'";
		$q = mysqli_query($con,$query);
		return mysqli_num_rows($q);
	}

	function show_siswa_mengerjakan($id_ujian_online){
		$con = $this->dbconnect();
		$query = "select * from jawaban_siswa as j inner join t_siswa as s on j.no_induk = s.no_induk where id_ujian_online = '".$id_ujian_online."' group by j.no_induk";
		$q = mysqli_query($con,$query);
		if(!$q){
			return mysqli_error($con);
		}else{
			return $q;
		}
	}

	public function get_guru($id){
		$con = $this->dbconnect();	
		$sql = "SELECT * FROM t_staf where nip='$id'";
		$query = mysqli_query($con,$sql);
		return $query->fetch_assoc();
	}

}

class Guru extends Database{	

	public function show_guru(){
		$con = $this->dbconnect();
		$sql = "SELECT * FROM t_staf";
		$query = mysqli_query($con,$sql);
		return $query;
	}
}

class Kelas extends Database{

	public function show_kelas(){
		$con = $this->dbconnect();
		$sql = "SELECT * FROM t_kelas";
		$query = mysqli_query($con,$sql);
		return $query;
	}
}

class Mata_pelajaran extends Database{

	public function show_mapel(){
		$con = $this->dbconnect();
		$sql = "SELECT * FROM t_pelajaran";
		$query = mysqli_query($con,$sql);
		return $query;
	}
}



?>