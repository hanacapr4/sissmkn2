<?php 
session_start();

class Log extends Database {

	function insertlog($tabel,$action){

		$con = $this->dbconnect();
		$sql1 = 'INSERT INTO log (level,nik_nis,tabel,waktu,action) VALUES ("'.$_SESSION['level'].'","'.$_SESSION['NIK'].'","'.$tabel.'","'.date('dMY').'","'.$action.'")';
        mysqli_query($con,$sql1);

    }
}

?>