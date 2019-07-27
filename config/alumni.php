<?php

class alumni extends Database {
    var $table = 'alumni';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function insertalumni($nis, $nama, $tahun_kelulusan, $kelanjutan, $penghasilan, $nama_instansi, $tanggal_mulai) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$nis.'", "'.$nama.'", "'.$tahun_kelulusan.'", "'.$kelanjutan.'", "'.$enghasilan.'", "'.$nama_instansi.'", "'.$tanggal_mulai.'")';
        $query = mysqli_query($con,$sql);
    }
     function getDetailAlumni($nis){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where nis = "'.$nis.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }
    }
   function updatealumni($nis, $nama, $tahun_kelulusan, $kelanjutan, $penghasilan, $nama_instansi, $tanggal_mulai)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET nama="'.$nama.'", tahun_kelulusan="'.$tahun_kelulusan.'", kelanjutan="'.$kelanjutan.'", penghasilan="'.$penghasilan.'", nama_instansi="'.$nama_instansi.'", tanggal_mulai="'.$tanggal_mulai.'" where id_pers= "'.$nis.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }

   function deletealumni($nis)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where nis= "'.$nis.'"';
        $query = mysqli_query($con,$sql);
    }

    ?>