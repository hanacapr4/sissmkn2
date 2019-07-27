     <?php
     session_start();

class jadwalsiswa extends Database {
    var $table = 'jadwal';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = 'select * from jadwal as j JOIN kelas as k ON j.id_kelas = k.id_kelas JOIN mata_pelajaran as m ON j.id_mapel = m.id_mapel JOIN Ruangan as r ON j.id_ruangan = r.id_ruangan JOIN jurusan as s ON j.idJurusan = s.idJurusan JOIN hari as h ON j.id_Hari = h.id_Hari where nis = "'.$_SESSION['nis'].'" ORDER BY j.id_Hari ASC' ;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }
     function tampildata2($nis) {
        $con = $this->dbconnect();
        $sql = "SELECT h.Hari, k.nama_kelas, m.nama_mapel, j.jam, s.nis, d.id_kelas, r.nama_ruangan, g.Nama_guru from jadwal as j, hari as h, mata_pelajaran as m, kelas AS k, siswa AS s, detail_pembagian_kelas AS d, ruangan as r, guru as g WHERE h.id_Hari = j.id_Hari AND m.id_mapel = j.id_mapel AND k.id_kelas = j.id_kelas AND d.id_kelas = j.id_kelas AND r.id_ruangan = j.id_ruangan AND m.NIK = g.NIK AND d.nis = s.nis AND s.nis = '$nis'" ;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }
    function select_hari() {
        $con = $this->dbconnect();
        $sql = "select * from hari";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }
    function select_mapel() {
        $con = $this->dbconnect();
        $sql = "select * from mata_pelajaran ";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }


}

?>