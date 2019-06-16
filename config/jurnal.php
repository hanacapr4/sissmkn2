<?php
/**
 * 
 */
class jurnal extends Database
{
	var $tabel = 't_jurnal';

	function tambahdata($id_jurnal, $userid, $thajar, $nama, $hari, $tgl, $kelas, $jam_mulai, $jam_selesai, $kegiatan, $sdh_blm, $ket)
	{
		$encodeid = base64_encode($id_jurnal);

		$con = $this->dbconnect();
		$sql = 'INSERT INTO '.$this->tabel.' VALUES("'.$encodeid.'", "'.$userid.'", "'.$thajar.'", "'.$nama.'", "'.$hari.'", "'.$tgl.'", "'.$kelas.'", "'.$jam_mulai.'", "'.$jam_selesai.'", "'.$kegiatan.'", "'.$sdh_blm.'", "'.$ket.'")';
		$query = mysqli_query($con,$sql) or die (mysqli_error($con));
	}

	function kodejurnal(){
		$date = date('dmHi');
		$id = "JURNAL - ".$date;
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

	function tampilguru() {
        $con = $this->dbconnect();
        $sql = "select * from t_member";
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
		$sql = "SELECT *, a.nip, b.nama, b.hari, b.tgl, b.kelas, b.jam_mulai, b.jam_selesai, b.kegiatan from t_jurnal as b, t_staf as a WHERE b.nama = a.nama GROUP BY b.id_jurnal" ;
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
		$sql = 'SELECT * from t_jurnal WHERE id_jurnal="'.$id_jurnal.'"';

		$query = mysqli_query($con, $sql) or die(mysqli_error($con));
		while ($item = mysqli_fetch_array($query)) {
			$hasil[] = $item;
		}
		return $hasil;
	}

	function editjurnal($id_jurnal, $userid, $thajar, $nama, $hari, $tgl, $kelas, $jam_mulai, $jam_selesai, $kegiatan, $sdh_blm, $ket)
	{
		$con = $this->dbconnect();
		$sql = 'UPDATE '.$this->tabel.' SET id_jurnal="'.$id_jurnal.'", userid="'.$userid.'", thajar="'.$thajar.'", nama="'.$nama.'", hari="'.$hari.'", tgl="'.$tgl.'", kelas="'.$kelas.'", jam_mulai="'.$jam_mulai.'", jam_selesai="'.$jam_selesai.'", kegiatan="'.$kegiatan.'", sdh_blm="'.$sdh_blm.'", ket="'.$ket.'" WHERE id_jurnal="'.$id_jurnal.'"';
		$query = mysqli_query($con, $sql) or die(mysqli_error($con));
	}

	function cetakjurnalperkelas(){
		$con = $this->dbconnect();
		$sql = 'SELECT t_kelas.id_kelas, t_kelas.kelas, t_kelas.program FROM t_kelas';
		$query = mysqli_query($con, $sql) or die(mysqli_error($con));
		while ($item = mysqli_fetch_array($query)) {
			$hasil[] = $item;
		}
		return $hasil;
	}

	function cetakjurnalperkelas2($kelas, $tgl){
		$con = $this->dbconnect();
		$sql = "SELECT * FROM t_jurnal 
        WHERE t_jurnal.kelas = '$kelas' and t_jurnal.tgl='$tgl'";
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
    	while($data = mysqli_fetch_array($query)){
      	$hasil[] = $data;
    }

    return $hasil;
	}

	function jumlahsiswaperkelas($kelas){
		$con = $this->dbconnect();
		$kelas = $_GET['kelas'];
		$sql = 'SELECT COUNT(no_induk) as total from t_siswa WHERE kelas = "'.$kelas.'"';
		$query = mysqli_query($con,$sql) or die (mysqli_error($con));
    	while($data = mysqli_fetch_array($query)){
      		$hasil[] = $data;
    	}

    	return $hasil;
	}

}
?>