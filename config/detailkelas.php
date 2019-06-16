<?php
 

class pembagiankelas extends Database {
    var $table = 'detail_pembagian_kelas';
//.................................................... CLASS DIAGRAM..................................................//
    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select  nis, detail_pembagian_kelas.id_pembagian, kelas.nama_kelas from detail_pembagian_kelas LEFT JOIN kelas on detail_pembagian_kelas.id_kelas = kelas.id_kelas";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function gettampildatapembagian() {
        $con = $this->dbconnect();
        $sql = 'select * from detail_pembagian_kelas LEFT JOIN kelas on kelas.id_kelas = detail_pembagian_kelas.id_kelas';
        // $sql = 'select detail_pembagian_kelas.nama_kelas from jadwal LEFT JOIN detail_pembagian_kelas on detail_pembagian_kelas.id_pembagian = jadwal.id_pembagian where jadwal.id_jadwal = "'.$id_jadwal.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function gettampildata($id_jadwal) {
        $con = $this->dbconnect();
        // $sql = 'select * from detail_pembagian_kelas LEFT JOIN kelas on kelas.id_kelas = detail_pembagian_kelas.id_kelas';
        $sql = 'select detail_pembagian_kelas.nama_kelas from jadwal LEFT JOIN detail_pembagian_kelas on detail_pembagian_kelas.id_pembagian = jadwal.id_pembagian where jadwal.id_jadwal = "'.$id_jadwal.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function insertpembagiankelas($id_jadwal, $nama_kelas, $nama_mapel, $nama_ruangan, $id_Hari, $jam) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_jadwal.'", "'.$nama_kelas.'", "'.$nama_mapel.'", "'.$nama_ruangan.'", "'.$id_Hari.'",      "'.$jam.'")';
        $query = mysqli_query($con,$sql);
    }
    function getdata($id){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_ruangan = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }
   function updateRuangan($id_Ruangan,$kode_Ruangan,$nama_Ruangan,$ThnAjaran)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET kode_Ruangan= "'.$kode_Ruangan.'", nama_Ruangan="'.$nama_Ruangan.'", ThnAjaran="'.$ThnAjaran.'" where id_Ruangan = "'.$id_Ruangan.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
}
    ?>


