<?php

class Ruangan extends Database {
    var $table = 't_ruang';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function insertRuangan($id, $kode, $nama, $gedung, $penanggung_jawab, $jenis, $profil, $thajar) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id.'", "'.$kode.'", "'.$nama.'", "'.$gedung.'", "'.$penanggung_jawab.'", "'.$jenis.'", "'.$profil.'", "'.$thajar.'")';
        $query = mysqli_query($con,$sql);
    }
    function getdata($id){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }
   function updateRuangan($id, $kode, $nama, $gedung, $penanggung_jawab, $jenis, $profil, $thajar)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET kode= "'.$kode.'", nama="'.$nama.'", gedung="'.$gedung.'", penanggung_jawab="'.$penanggung_jawab.'", jenis="'.$jenis.'", profil="'.$profil.'", thajar="'.$thajar.'" where id_Ruangan = "'.$id_Ruangan.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
      function DeleteRuangan($id)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where id = "'.$id.'"';
        $query = mysqli_query($con,$sql);
    }

    function getforalert(){
        $con = $this->dbconnect();
        $sql = 'select id from t_ruang where id = "'.$_SESSION['alertid'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }



}
    ?>


