<?php
 
class Hari extends Database {
    var $table = 'hari';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }
    function insertHari($id_hari, $kode_hari, $Hari) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_hari.'", "'.$kode_hari.'", "'.$Hari.'")';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }

    function getdata($id){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_hari = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }

      function updateMapel($id_Hari,$kode_hari,$Hari)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET kode_hari= "'.$kode_hari.'", Hari="'.$Hari.'" where id_Hari = "'.$id_Hari.'"';
        $query = mysqli_query($con,$sql);
    }

     function DeleteHari($id_Hari)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where id_Hari = "'.$id_Hari.'"';
        $query = mysqli_query($con,$sql);
    }

    function getforalert(){
        $con = $this->dbconnect();
        $sql = 'select id_Hari from hari where id_Hari = "'.$_SESSION['alertid'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }


}

?>