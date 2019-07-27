<?php
/**
 * 
 */
class jurnal extends Database
{
	var $tabel = 't_jurnal';

	function tambahdata($id_jurnal, $userid, $thajar, $idpel, $hari, $tgl, $kelas, $jam_mulai, $jam_selesai, $kegiatan, $sdh_blm, $ket)
	{
		//$encodeid = base64_encode($id_jurnal);

		$con = $this->dbconnect();
		$sql = 'INSERT INTO '.$this->tabel.' VALUES("'.$id_jurnal.'", "'.$userid.'", "'.$thajar.'", "'.$idpel.'", "'.$hari.'", "'.$tgl.'", "'.$kelas.'", "'.$jam_mulai.'", "'.$jam_selesai.'", "'.$kegiatan.'", "'.$sdh_blm.'", "'.$ket.'")';
		$query = mysqli_query($con,$sql) or die (mysqli_error($con));
	}

	function kodejurnal(){
		$date = date('dmHi');
		$id = "JRL".$date;
		return $id;
	}

	function tampiltanggal(){
		$timezone = time() + (60 * 60 * 7);
		$tanggal = date('Y-m-d', $timezone);
		return $tanggal;
	}

	function tampiljam(){
		$timezone = time() + (60 * 60 * 7);
		$waktu = gmdate('H:i:s', $timezone);
		return $waktu;
	}

	function tampilthajar() {
		$con = $this->dbconnect();
		$sql = "SELECT * from t_thajar";

		$query = mysqli_query($con, $sql) or die(mysqli_error($con));
		while ($item = mysqli_fetch_array($query)) {
			$hasil[] = $item;
		}

		return $hasil;
	}

	function tampilpelajaran() {
        $con = $this->dbconnect();
        $sql = "select * from t_pelajaran";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
	}
	
	function tampilguru2() {
        $con = $this->dbconnect();
        $sql = "select * from user";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function tampilkelas(){
		$con = $this->dbconnect();
		$sql = "SELECT * from t_kelas";

		$query = mysqli_query($con, $sql) or die(mysqli_error($con));
		while ($item = mysqli_fetch_array($query)) {
			$hasil[] = $item;
		}

		return $hasil;
	}

	function tampilmapel(){
		$con = $this->dbconnect();
		$sql = "SELECT * from t_pelajaran";
		$query = mysqli_query($con,$sql);
		return $query;
	}

	function hari_ini(){
		$hari = date('l');

		if ($hari == 'Sunday') {
			echo "Minggu";
		} else if($hari == 'Monday'){
			echo "Senin";
		} else if($hari == 'Tuesday'){
			echo "Selasa";
		} else if($hari == 'Wednesday'){
			echo "Rabu";
		} else if($hari == 'Thursday'){
			echo "Kamis";
		} else if($hari == 'Friday') {
			echo "Jumat";
		} else if($hari == 'Saturday'){
			echo "Sabtu";
		} else{
			echo "Tidak teridentifikasi";
		}
	}

	function tampiljurnal()
	{
		$con = $this->dbconnect();
		$sql = "SELECT * FROM t_jurnal 
		JOIN user ON user.userid = t_jurnal.userid 
		JOIN t_pelajaran ON t_pelajaran.idpel = t_jurnal.idpel 
		ORDER BY t_jurnal.id_jurnal DESC " ;
		$query = mysqli_query($con,$sql);
		while($item = mysqli_fetch_array($query)){
			$hasil[] = $item;
		}
		return $hasil;
	}
	

	function hapusjurnal($id_jurnal)
	{
		$con = $this->dbconnect();
        $sql = 'DELETE from t_jurnal WHERE id_jurnal = "'.$id_jurnal.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
	}

	function tampildetail($id_jurnal)
	{
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM t_jurnal 
		JOIN user ON user.userid = t_jurnal.userid 
		JOIN t_pelajaran ON t_pelajaran.idpel = t_jurnal.idpel 
		WHERE t_jurnal.id_jurnal = "'.$id_jurnal.'"';

		$query = mysqli_query($con, $sql) or die(mysqli_error($con));
		while ($item = mysqli_fetch_array($query)) {
			$hasil[] = $item;
		}
		return $hasil;
	}

	function tampildetail2($id_jurnal, $userid)
	{
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM t_jurnal 
		JOIN user ON user.userid = t_jurnal.userid 
		JOIN t_pelajaran ON t_pelajaran.idpel = t_jurnal.idpel 
		WHERE t_jurnal.id_jurnal = "'.$id_jurnal.'" AND t_jurnal.userid = "'.$userid.'"';

		$query = mysqli_query($con, $sql) or die(mysqli_error($con));
		while ($item = mysqli_fetch_array($query)) {
			$hasil[] = $item;
		}
		return $hasil;
	}

	function editjurnal($id_jurnal, $thajar, $idpel, $hari, $tgl, $kelas, $jam_mulai, $jam_selesai, $kegiatan, $sdh_blm, $ket)
	{
		$con = $this->dbconnect();
		$sql = 'UPDATE '.$this->tabel.' SET id_jurnal="'.$id_jurnal.'", thajar="'.$thajar.'", idpel="'.$idpel.'", hari="'.$hari.'", tgl="'.$tgl.'", kelas="'.$kelas.'", jam_mulai="'.$jam_mulai.'", jam_selesai="'.$jam_selesai.'", kegiatan="'.$kegiatan.'", sdh_blm="'.$sdh_blm.'", ket="'.$ket.'" WHERE id_jurnal="'.$id_jurnal.'"';
		$query = mysqli_query($con, $sql) or die(mysqli_error($con));
	}

	function filterjurnalperbulan($tgl) 
	{
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM t_jurnal 
		JOIN user ON user.userid = t_jurnal.userid 
		JOIN t_pelajaran ON t_pelajaran.idpel = t_jurnal.idpel 
		WHERE t_jurnal.tgl LIKE "'.$tgl.'%"';

		$query = mysqli_query($con, $sql);
		while ($item = mysqli_fetch_array($query)) {
			$hasil[] = $item;
		}
		return $hasil;
	}

	function cetakjurnalperguru($userid, $tgl) 
	{
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM t_jurnal 
		JOIN user ON user.userid = t_jurnal.userid 
		JOIN t_pelajaran ON t_pelajaran.idpel = t_jurnal.idpel 
		WHERE t_jurnal.userid = "'.$userid.'" AND t_jurnal.tgl LIKE "'.$tgl.'%"';

		$query = mysqli_query($con, $sql) or die(mysqli_error($con));
		while ($item = mysqli_fetch_array($query)) {
			$hasil[] = $item;
		}
		return $hasil;
	}

	function cetakjurnal($userid, $tgl)
	{
		$con = $this->dbconnect();
		$sql = "SELECT * FROM t_jurnal 
		JOIN user ON user.userid = t_jurnal.userid 
		JOIN t_pelajaran ON t_pelajaran.idpel = t_jurnal.idpel 
		WHERE t_jurnal.userid = '$userid' AND t_jurnal.tgl LIKE '$tgl%'" ;
		$query = mysqli_query($con,$sql);
		while($item = mysqli_fetch_array($query)){
			$hasil[] = $item;
		}
		return $hasil;
	}

	// function cetakjurnalperkelas(){
	// 	$con = $this->dbconnect();
	// 	$sql = 'SELECT t_kelas.id_kelas, t_kelas.kelas, t_kelas.program FROM t_kelas';
	// 	$query = mysqli_query($con, $sql) or die(mysqli_error($con));
	// 	while ($item = mysqli_fetch_array($query)) {
	// 		$hasil[] = $item;
	// 	}
	// 	return $hasil;
	// }

	// function cetakjurnalperkelas2($kelas, $tgl){
	// 	$con = $this->dbconnect();
	// 	$sql = "SELECT * FROM t_jurnal 
    //     WHERE t_jurnal.kelas = '$kelas' and t_jurnal.tgl='$tgl'";
    //     $query = mysqli_query($con,$sql) or die (mysqli_error($con));
    // 	while($data = mysqli_fetch_array($query)){
    //   	$hasil[] = $data;
    // }

    // return $hasil;
	// }

	// function jumlahsiswaperkelas($kelas){
	// 	$con = $this->dbconnect();
	// 	$kelas = $_GET['kelas'];
	// 	$sql = 'SELECT COUNT(no_induk) as total from t_siswa WHERE kelas = "'.$kelas.'"';
	// 	$query = mysqli_query($con,$sql) or die (mysqli_error($con));
    // 	while($data = mysqli_fetch_array($query)){
    //   		$hasil[] = $data;
    // 	}

    // 	return $hasil;
	// }

	// function buat_kode($kunci, $jumlah_karakter=0 ){
	// 	$con = $this->dbconnect();
	// 	$sql = "SELECT id_elearning as max_id FROM data_elearning ORDER BY id_elearning DESC LIMIT 1";
	// 	$query = mysqli_query($con,$sql);
	// 	$datakode = mysqli_fetch_array($query);
	// 	if ($datakode) {
	// 		$id_max = $datakode['max_id'];
	// 		$nomor_baru = intval(substr($id_max, strlen($kunci)))+1;
	// 		$nomor_baru_plus_nol = str_pad($nomor_baru, $jumlah_karakter, "0", STR_PAD_LEFT);
	// 		$kode = $kunci.$nomor_baru_plus_nol;
	// 		return $kode;
	// 	} 
	// 	else{
	// 		$kode = "DE-00001"; 
	// 		return $kode;
	// 	}
		
	// }

	// public function add_elearning($id_elearning, $judul, $deskripsi, $nama_file, $tanggal_upload, $idpel, $id_kelas, $nip){
	// 	$con = $this->dbconnect();
	//   	$sql = 'INSERT INTO data_elearning(id_elearning, judul, deskripsi, nama_file, tanggal_upload, idpel, id_kelas, nip) VALUES ("'.$id_elearning.'","'.$judul.'","'.$deskripsi.'","'.$nama_file.'","'.$tanggal_upload.'","'.$id_mapel.'","'.$id_kelas.'","'.$nip.'")';
    //     $query = mysqli_query($con,$sql);
    //     if (!$query) {
	// 		return "Failed";
	// 	}
	// 	else{
	// 		return "Success";
	// 	}
	// }
	
	// public function show_elearning_guru(){
	// 	$con = $this->dbconnect();
	// 	$sql = 'SELECT * from data_elearning JOIN t_kelas ON t_kelas.id_kelas = data_elearning.id_kelas JOIN t_pelajaran ON t_pelajaran.idpel = data_elearning.idpel' or die(mysqli_error());
	// 	$query = mysqli_query($con,$sql);
	// 	return $query;
	// }

	// public function show_detail_elearning($id_elearning){
	// 	$con = $this->dbconnect();
	// 	$sql = 'SELECT * from data_elearning 
	// 	JOIN t_kelas ON t_kelas.id_kelas = data_elearning.id_kelas 
	// 	JOIN t_pelajaran ON t_pelajaran.idpel = data_elearning.idpel 
	// 	WHERE id_elearning="'.$id_elearning.'"';
	// 	$query = mysqli_query($con,$sql);
	// 	return $query;
	// }

	// function add_ujian($id_ujian_online, $id_kelas, $idpel, $nip, $jenis_ujian, $bab, $jam_mulai, $jam_selesai, $tgl_ujian, $waktu, $tgl_upload){
	// 	$con = $this->dbconnect();
	// 	$sql = 'INSERT INTO ujian_online(id_ujian_online, id_kelas, idpel, nip, jenis_ujian, bab, jam_mulai, jam_selesai, tgl_ujian, waktu, tgl_upload) VALUES("'.$id_ujian_online.'","'.$id_kelas.'","'.$idpel.'","'.$nip.'","'.$jenis_ujian.'","'.$jam_mulai.'","'.$jam_selesai.'","'.$bab.'","'.$tgl_ujian.'","'.$waktu.'","'.$tgl_upload.'")';
	// 	$query = mysqli_query($con,$sql);
    //     if (!$query) {
	// 		return "Failed";
	// 	}
	// 	else{
	// 		return "Success";
	// 	}
	// }

	// public function show_elearning($id_kelas, $idpel){
	// 	$con = $this->dbconnect();
	// 	$sql = 'SELECT * from data_elearning 
	// 	JOIN t_kelas ON t_kelas.id_kelas = data_elearning.id_kelas 
	// 	JOIN t_pelajaran ON t_pelajaran.idpel = data_elearning.idpel 
	// 	WHERE data_elearning.id_kelas = "'.$id_kelas.'" OR data_elearning.idpel= "'.$idpel.'"';
	// 	$query = mysqli_query($con,$sql);
	// 	return $query; 
	// }


}
?>