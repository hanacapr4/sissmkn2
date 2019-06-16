<?php

class t_prakerin extends Database {
    var $table = 'jadwal';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function tampilidprs() {
        $date = date('dmHi');
        $id = "PRS".$date;
        return $id;
    }

    function insertjadwal($id_tmp_prakerin, $nama_prakerin, $alamat_prakerin, $telp_prakerin, $kota_prakerin, $program, $pembimbing, $direktur, $email, $website, $th_ajar) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_tmp_prakerin.'", "'.$nama_prakerin.'", "'.$alamat_prakerin.'", "'.$telp_prakerin.'", "'.$kota_prakerin.'", "'.$program.'", "'.$pembimbing.'", "'.$direktur.'", "'.$email.'", "'.$website.'", "'.$th_ajar.'")';
        $query = mysqli_query($con,$sql);
    }


    function getDetailtbl_perusahaan($id_tmp_prakerin){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_tmp_prakerin = "'.$id_tmp_prakerin.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }

   function updatetbl_perusahaan($id_tmp_prakerin, $nama_prakerin, $alamat_prakerin, $telp_prakerin, $kota_prakerin, $program, $pembimbing, $direktur, $direktur, $website, $th_ajar)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET nama_prakerin="'.$nama_prakerin.'", alamat_prakerin="'.$alamat_prakerin.'", telp_prakerin="'.$telp_prakerin.'", kota_prakerin="'.$kota_prakerin.'", program="'.$program.'", pembimbing="'.$pembimbing.'", direktur="'.$direktur.'", website="'.$website.'", th_ajar="'.$th_ajar.'" where id_tmp_prakerin= "'.$id_tmp_prakerin.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }

   function deletetbl_perusahaan($id_tmp_prakerin)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where id_tmp_prakerin = "'.$id_tmp_prakerin.'"';
        $query = mysqli_query($con,$sql);
    }
}
    ?>