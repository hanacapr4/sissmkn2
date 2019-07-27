<?php
/**
 * 
 */
class absensimapel extends Database
{

	var $tabel = 't_abskelas';
	
	function tambahabsenmapel($idabsenmapel, $no_induk, $tglabsen, $stabsen, $hari, $stabsen2, $alasan, $idpel, $jam_mulai, $jam_selesai, $nip)
	{
		$con = $this->dbconnect();
		$sql = 'INSERT INTO '.$this->tabel.' VALUES("'.$idabsenmapel.'", "'.$no_induk.'", "'.$tglabsen.'", "'.$stabsen.'", "'.$hari.'", "'.$stabsen2.'", "'.$alasan.'", "'.$idpel.'", "'.$jam_mulai.'", "'.$jam_selesai.'", "'.$nip.'")';
		$query = mysqli_query($con,$sql) or die (mysqli_error($con));
	}

	function tampilguru() {
        $con = $this->dbconnect();
        $sql = "select * from t_staf";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function tampilabsenmapel() {
    	$con = $this->dbconnect();
    	$sql = 'SELECT t_abskelas.idabsenmapel,
        t_siswa.nama, 
    	t_abskelas.tglabsen, 
    	t_abskelas.hari, 
    	t_pelajaran.pelajaran, 
    	t_abskelas.stabsen2, 
    	t_abskelas.alasan FROM t_abskelas 
    	JOIN t_siswa ON t_siswa.no_induk = t_abskelas.no_induk 
		JOIN t_pelajaran ON t_pelajaran.idpel = t_abskelas.idpel 

		GROUP BY t_abskelas.idabsenmapel';

		$query = mysqli_query($con,$sql);
        while($item = mysqli_fetch_array($query)){
            $hasil[] = $item;
        }
        return $hasil;
    }

    function hapusabsenmapel($idabsenmapel){
        $con = $this->dbconnect();
        $sql = 'DELETE FROM '.$this->tabel.' WHERE idabsenmapel="'.$idabsenmapel.'"';
        $query = mysqli_query($con, $sql) or die (mysqli_error($con));
    }

    function buatid(){
        $date = date('dmHi');
        $id = "ABSENSI - ".$date;
        return $id;
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

    function tampiljam(){
        $timezone = time() + (60 * 60 * 7);
        $waktu = gmdate('H:i:s', $timezone);
        return $waktu;
    }

    function detailabsenmapel($idabsenmapel){
        $con = $this->dbconnect();
        $sql = 'SELECT t_abskelas.idabsenmapel, t_abskelas.no_induk, t_abskelas.tglabsen, t_abskelas.stabsen, t_abskelas.hari, t_abskelas.stabsen2, t_abskelas.alasan, t_pelajaran.pelajaran, t_abskelas.jam_mulai, t_abskelas.jam_selesai, t_staf.nama FROM t_abskelas 
        JOIN t_staf ON t_staf.nip = t_abskelas.nip 
        JOIN t_pelajaran ON t_pelajaran.idpel = t_abskelas.idpel 

        WHERE t_abskelas.idabsenmapel="'.$idabsenmapel.'"';

        $query = mysqli_query($con, $sql) or die(mysqli_error($con));
        while ($item = mysqli_fetch_array($query)) {
            $hasil[] = $item;
        }
        return $hasil;
    }

    function cetakabsenmapel($idabsenmapel){
        $con = $this->dbconnect();
        $sql = 'SELECT t_abskelas.idabsenmapel,
        t_abskelas.no_induk,
        t_siswa.nama,
        t_siswa.kelas, 
        t_abskelas.tglabsen,  
        t_pelajaran.pelajaran, 
        t_abskelas.stabsen2, 
        t_abskelas.alasan,
        t_abskelas.nip FROM t_abskelas 
        JOIN t_siswa ON t_siswa.no_induk = t_abskelas.no_induk 
        JOIN t_pelajaran ON t_pelajaran.idpel = t_abskelas.idpel 

        WHERE t_abskelas.idabsenmapel="'.$idabsenmapel.'"';
        $query = mysqli_query($con, $sql) or die(mysqli_error($con));
        while ($item = mysqli_fetch_array($query)) {
            $hasil[] = $item;
        }
        return $hasil;
    }

}