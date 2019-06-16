<?php

class jadwaladmin extends Database {
    var $table = 'jadwal';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "SELECT j.id_jadwal, h.Hari, k.nama_kelas, m.nama_mapel, j.jam, s.nis, d.id_kelas, r.nama_ruangan, g.Nama_guru from jadwal as j, hari as h, mata_pelajaran as m, kelas AS k, siswa AS s, detail_pembagian_kelas AS d, ruangan as r, guru as g WHERE h.id_Hari = j.id_Hari AND m.id_mapel = j.id_mapel AND k.id_kelas = j.id_kelas AND d.id_kelas = j.id_kelas AND r.id_ruangan = j.id_ruangan AND m.NIK = g.NIK AND d.nis = s.nis GROUP BY j.id_jadwal" ;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

     function insertpembagianjadwal($id_jdwl, $id_kelas, $id_mapel, $id_ruangan, $id_hari, $jam) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_jdwl.'", "'.$id_kelas.'", "'.$id_mapel.'", "'.$id_ruangan.'", "'.$id_hari.'","'.$jam.'")';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        //print_r($sql); die();
    }

    function getjadwal($id) {
        $con = $this->dbconnect();
        $sql = 'SELECT *, guru.Nama_guru FROM jadwal LEFT JOIN mata_pelajaran ON mata_pelajaran.id_mapel = jadwal.id_mapel LEFT JOIN guru ON guru.NIK = mata_pelajaran.NIK  WHERE id_jadwal = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    } 

    function cekjadwal($id) {
        $con = $this->dbconnect();
        $sql = 'select * from jadwal where id_jadwal = "'.$id.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        //print_r($sql); die();
        $data = mysqli_fetch_array($query);
        $hasil = mysqli_num_rows($query);
        return $hasil;
    }

     function updatepembagianjadwal($id_jadwal,$id_kelas,$id_mapel,$id_ruangan,$id_hari,$jam)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET id_kelas= "'.$id_kelas.'", id_mapel="'.$id_mapel.'", id_ruangan="'.$id_ruangan.'", id_hari="'.$id_hari.'", jam="'.$jam.'" where id_jadwal = "'.$id_jadwal.'"';
        $query = mysqli_query($con,$sql);
    }
    function Deletejadwal($id_jadwal)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where id_jadwal = "'.$id_jadwal.'"';
        $query = mysqli_query($con,$sql);
    }
    function getforalert(){
        $con = $this->dbconnect();
        $sql = 'select id_jadwal from jadwal where id_jadwal = "'.$_SESSION['alertid'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }
}
