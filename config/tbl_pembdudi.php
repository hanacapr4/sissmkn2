<?php

class tbl_pembdudi extends Database {
    var $table = 'tbl_pembdudi';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function inserttbl_pembdudi($id_pembdudi, $id_dataprakerin, $nama_pembdudi, $alamat_pembdudi, $jabatan, $no_telp) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_pembdudi.'", "'.$id_dataprakerin.'", "'.$nama_pembdudi.'", "'.$alamat_pembdudi.'", "'.$jabatan.'", "'.$no_telp.'")';
        $query = mysqli_query($con,$sql);
    }
    function getdata($id_pembdudi){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_pembdudi = "'.$id_pembdudi.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }
   function updatetbl_pembdudi($id_pembdudi, $id_dataprakerin, $nama_pembdudi, $alamat_pembdudi, $jabatan, $no_telp)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET id_dataprakerin="'.$id_dataprakerin.'", nama_pembdudi="'.$nama_pembdudi.'", alamat_pembdudi="'.$alamat_pembdudi.'", jabatan="'.$jabatan.'", no_telp="'.$no_telp.'" where id_pembdudi= "'.$id_pembdudi.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
}
    ?>