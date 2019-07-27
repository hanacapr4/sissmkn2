<?php

/**
 * 
 */
class elearning2 extends Database
{
	
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
		$sql = 'SELECT * FROM data_elearning as d JOIN t_pelajaran as m ON d.idpel = m.idpel JOIN t_kelas as k ON d.id_kelas = k.id_kelas WHERE d.idpel="'.$id_mapel.'" and d.id_kelas="'.$id_kelas.'" ';
		$query = mysqli_query($con,$sql);
		return $query; 
	}

	public function show_elearning_guru2(){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM data_elearning as d JOIN t_pelajaran as m ON d.idpel = m.idpel JOIN t_kelas as k ON d.id_kelas = k.id_kelas' or die(mysqli_error());
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

	public function add_elearning($id_elearning, $judul, $deskripsi, $nama_file, $tanggal_upload, $id_mapel, $id_kelas, $nip){
		$con = $this->dbconnect();
	  	$sql = 'INSERT INTO data_elearning(id_elearning, judul, deskripsi, nama_file, tanggal_upload, idpel, id_kelas, nip) VALUES ("'.$id_elearning.'","'.$judul.'","'.$deskripsi.'","'.$nama_file.'","'.$tanggal_upload.'","'.$id_mapel.'","'.$id_kelas.'","'.$nip.'")';
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
		$sql = 'UPDATE data_elearning SET judul="'.$judul.'", deskripsi="'.$deskripsi.'", nama_file="'.$nama_file.'", tanggal_upload="'.$tanggal_upload.'", idpel="'.$id_mapel.'", id_kelas="'.$id_kelas.'", nip="'.$nik.'" WHERE id_elearning="'.$id_elearning.'"';
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

	public function get_kelas($id){
		$con = $this->dbconnect();	
		$sql = "SELECT * FROM user as u JOIN t_siswa as ts ON u.no_induk = ts.no_induk JOIN t_kelas as k ON ts.id_kelas = k.id_kelas where u.no_induk='$id' " or die(mysqli_error());
		$query = mysqli_query($con,$sql);
		return $query->fetch_assoc();
	}

	public function get_guru($id){
		$con = $this->dbconnect();	
		$sql = "SELECT * FROM t_staf where nip='$id'" or die(mysqli_error());
		$query = mysqli_query($con,$sql);
		return $query->fetch_assoc();
	}

	public function get_mapel($id){
		$con = $this->dbconnect();	
		$sql = "SELECT * FROM ujian_online as u join t_pelajaran as p on u.idpel = p.idpel where nip='$id'" or die(mysqli_error());
		$query = mysqli_query($con,$sql);
		return $query;
	}

	public function cari_nilai($id_kelas, $id_mapel){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM nilai_ujian as nu JOIN t_siswa as ts on nu.no_induk = ts.no_induk JOIN ujian_online as un ON nu.id_ujian_online = un.id_ujian_online JOIN t_kelas as k ON un.id_kelas = k.id_kelas JOIN t_pelajaran as t on t.idpel = un.idpel WHERE un.idpel="'.$id_mapel.'" and un.id_kelas="'.$id_kelas.'" ';
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

	public function show_kelas_ujian($id){
		$con = $this->dbconnect();
		$sql = "SELECT DISTINCT uo.id_kelas,kelas,nip FROM nilai_ujian as nu JOIN ujian_online as uo on nu.id_ujian_online = uo.id_ujian_online join t_kelas as tk on uo.id_kelas = tk.id_kelas where nip='$id'";
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

class Guru extends Database{

	public function show_guru(){
		$con = $this->dbconnect();
		$sql = "SELECT * FROM t_staf";
		$query = mysqli_query($con,$sql);
		return $query;
	}
}

?>