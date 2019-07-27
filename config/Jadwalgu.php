     <?php
     session_start();

class Jadwalgu extends Database {
    var $table = 'jadwal';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = 'select * from jadwal as j JOIN kelas as k ON j.id_kelas = k.id_kelas JOIN mata_pelajaran as m ON j.id_mapel = m.id_mapel JOIN Ruangan as r ON j.id_ruangan = r.id_ruangan JOIN jurusan as s ON j.idJurusan = s.idJurusan JOIN hari as h ON j.id_Hari = h.id_Hari where NIK = "'.$_SESSION['NIK'].'"' ;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

     function tampildata2() {
        $con = $this->dbconnect();
        $sql = 'SELECT h.Hari, k.nama_kelas, m.nama_mapel, j.jam, g.NIK from jadwal as j, hari as h, mata_pelajaran as m, kelas AS k, guru AS g WHERE h.id_Hari = j.id_Hari AND m.id_mapel = j.id_mapel AND k.id_kelas = j.id_kelas AND m.NIK = g.NIK AND g.NIK = "'.$_SESSION['NIK'].'"' ;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }
     


}

?>