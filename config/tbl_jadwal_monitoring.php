<?php

class tbl_jadwal_monitoring extends Database {
    var $table = 'tbl_jadwal_monitoring';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function inserttbl_jadwal_monitoring($id_monitoring, $id_dataprakerin, $id_pemsek, $nama_siswa, $tgl_monitor, $Deskripsi) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_monitoring.'", "'.$id_dataprakerin.'", "'.$id_pemsek.'", "'.$nama_siswa.'", "'.$tgl_monitor.'", "'.$Deskripsi.'")';
        $query = mysqli_query($con,$sql);
    }
    function getdata($id_monitoring){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_monitoring = "'.$id_monitoring.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }
   function updatetbl_jadwal_monitoring($id_monitoring, $id_dataprakerin, $id_pemsek, $nama_siswa, $tgl_monitor, $Deskripsi)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET id_dataprakerin="'.$id_dataprakerin.'", id_pemsek="'.$id_pemsek.'", nama_siswa="'.$nama_siswa.'", tgl_monitor="'.$tgl_monitor.'", Deskripsi="'.$Deskripsi.'" where id_monitoring= "'.$id_monitoring.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
}
    ?>