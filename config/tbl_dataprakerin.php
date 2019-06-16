<?php

class tbl_dataprakerin extends Database {
    var $table = 'tbl_dataprakerin';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function inserttbl_dataprakerin($id_dataprakerin, $id_pemsek, $id_pemdudi, $status, $tgl_mulai, $tgl_selesai) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_dataprakerin.'", "'.$id_pemsek.'", "'.$id_pemdudi.'", "'.$status.'", "'.$tgl_mulai.'", "'.$tgl_selesai.'")';
        $query = mysqli_query($con,$sql);
    }
    function getdata($id_dataprakerin){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_dataprakerin = "'.$id_dataprakerin.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }
   function updatetbl_dataprakerin($id_dataprakerin, $id_pemsek, $id_pemdudi, $status, $tgl_mulai, $tgl_selesai)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET id_pemsek="'.$id_pemsek.'", id_pemdudi="'.$id_pemdudi.'", status="'.$status.'", tgl_mulai="'.$tgl_mulai.'", tgl_selesai="'.$tgl_selesai.'" where id_dataprakerin= "'.$id_dataprakerin.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
}
    ?>