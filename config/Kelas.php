<?php

class Kelas extends Database {
     var $table = 't_kelas';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function insertkelas($id_kelas, $kelas, $nip, $tingkat, $program, $ruang, $ketua, $masuk, $guru_bk, $th_ajar, $profil ) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_kelas.'", "'.$kelas.'", "'.$nip.'", "'.$tingkat.'", "'.$program.'", "'.$ruang.'", "'.$ketua.'", "'.$masuk.'", "'.$guru_bk.'", "'.$th_ajar.'", "'.$profil.'")';
        $query = mysqli_query($con,$sql);
    }
      function getdata($id){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_kelas = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }
function updateKelas($id_kelas,$kelas,$nip,$tingkat,$program,$ruang,$ketua,$masuk,$guru_bk)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET kelas= "'.$kelas.'", nip="'.$nip.'", tingkat="'.$tingkat.'", program="'.$program.'", ruang="'.$ruang.'", ketua="'.$ketua.'", masuk="'.$masuk.'", guru_bk="'.$guru_bk.'" where id_kelas = "'.$id_kelas.'"';
        $query = mysqli_query($con,$sql);
    }
 function Deletekelas($id_kelas)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where id_kelas = "'.$id_kelas.'"';
        $query = mysqli_query($con,$sql);
    }

    function getforalert(){
        $con = $this->dbconnect();
        $sql = 'select id_kelas from kelas where id_kelas = "'.$_SESSION['alertid'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }



}

?>