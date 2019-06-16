<?php

class tbl_nilaisekolah extends Database {
    var $table = 'tbl_nilaisekolah';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function inserttbl_nilaisekolah($id_nilaiSek, $nis, $tgl_penilaian, $id_dataprakerin, $nilai_teknis, $nilai_nonteknis, $nilai_ratarataangka, $nilai_rataratahuruf) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_nilaiSek.'", "'.$nis.'", "'.$tgl_penilaian.'", "'.$id_dtprakerin.'", "'.$nilai_teknis.'", "'.$nilai_nonteknis.'", "'.$nilai_ratarataangka.'", "'.$nilai_rataratahuruf.'")';
        $query = mysqli_query($con,$sql);
    }
    function getdata($id_nilaiSek){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_nilaiSek = "'.$id_nilaiSek.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }
   function updatetbl_nilaisekolah($id_nilaiSek,$nis,$tgl_penilaian,$id_dataprakerin,$nilai_teknis,$nilai_nonteknis,$nilai_ratarataangka,$nilai_rataratahuruf)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET nis="'.$nis.'", tgl_penilaian="'.$tgl_penilaian.'", id_dataprakerin="'.$id_dataprakerin.'", nilai_teknis="'.$nilai_teknis.'", nilai_nonteknis="'.$nilai_nonteknis.'", nilai_ratarataangka="'.$nilai_ratarataangka.'", nilai_rataratahuruf="'.$nilai_rataratahuruf.'" where id_nilaiSek= "'.$id_nilaiSek.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
}
    ?>