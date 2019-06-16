<?php

class tbl_nilaidudi extends Database {
    var $table = 'tbl_nilaidudi';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function inserttbl_nilaidudi($id_nilaidudi, $tgl_penilaian, $id_pemdudi, $nilai_teknis, $nilai_nonteknis, $nilai_ratarataangka, $nilai_rataratahuruf, $sakit, $ijin, $tanpa_keterangan) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_nilaidudi.'", "'.$tgl_penilaian.'", "'.$id_pemdudi.'", "'.$nilai_teknis.'", "'.$nilai_nonteknis.'", "'.$nilai_ratarataangka.'", "'.$nilai_rataratahuruf.'", "'.$sakit.'", "'.$ijin.'", "'.$tanpa_keterangan.'")';
        $query = mysqli_query($con,$sql);
    }
    function getdata($id_nilaidudi){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_nilaidudi = "'.$id_nilaidudi.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }
   function updatetbl_nilaidudi($id_nilaidudi, $tgl_penilaian, $id_pemdudi, $nilai_teknis, $nilai_nonteknis, $nilai_ratarataangka, $nilai_rataratahuruf, $sakit, $ijin, $tanpa_keterangan)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET tgl_penilaian="'.$tgl_penilaian.'", id_pemdudi="'.$id_pemdudi.'", nilai_teknis="'.$nilai_teknis.'", nilai_nonteknis="'.$nilai_nonteknis.'", nilai_ratarataangka="'.$nilai_ratarataangka.'", nilai_rataratahuruf="'.$nilai_rataratahuruf.'", sakit="'.$sakit.'", ijin="'.$ijin.'", tanpa_keterangan="'.$tanpa_keterangan.'" where id_nilaidudi= "'.$id_nilaidudi.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
}
    ?>