<?php
error_reporting(E_ALL && ~E_NOTICE);
ini_set('display_errors', 1);
session_start();
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Guru.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Log.php");




////////class Login/////////


class Login extends Database {

    var $table = 'user';
    var $table2 = 'siswa';
    var $table3 = 'guru';
	

    function tampiluser(){
        $con = $this->dbconnect();
        // $sql = 'select * from user';
        $sql = 'select user.idUser, user.nis, user.NIK, user.username, user.password, jabatan.namaJabatan, level.level, siswa.nis, siswa.namaSiswa, guru.Nama_guru, guru.NIK from user 
        LEFT JOIN siswa on siswa.nis = user.nis 
        LEFT JOIN guru on guru.NIK = user.NIK 
		LEFT JOIN jabatan on jabatan.idJabatan = user.idJabatan 
		LEFT JOIN level on level.idLevel = user.idLevel';
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }



    //////////////////// RELASI DENGAN JABATAN ////////////////////
    function tampiljabatan() {
		$showJabatan = new Jabatan();
	    $data = $showJabatan->tampiljabatan();
	    return $data;
	}
	//////////////////// END RELASI DENGAN JABATAN ////////////////////



	//////////////////// RELASI DENGAN LEVEL ////////////////////
    function tampillevel() {
		$showlevel = new Level();
	    $data = $showlevel->tampillevelinput();
	    return $data;
	}
	//////////////////// END RELASI DENGAN LEVEL ////////////////////



	//////////////////// RELASI DENGAN SISWA ////////////////////
    function siswa() {
		$showsiswa = new Kesiswaan();
	    $data = $showsiswa->tampildu();
	    return $data;
	}
	//////////////////// END RELASI DENGAN SISWA ////////////////////




	//////////////////// RELASI DENGAN GURU ////////////////////
    function guru() {
		$showguru = new Guru();
	    $data = $showguru->tampildata();
	    return $data;
	}
	//////////////////// END RELASI DENGAN GURU ////////////////////




    function kombinasi() {
		$id = "AKUN-";
		return $id;
	}

		

	function tambahUser($idUser,$nis,$NIK,$username,$password,$passwordHint,$idJabatan,$idLevel,$tabel,$action){
		$con = $this->dbconnect();
		if ($NIK == ""){
			$sql = 'INSERT INTO user (idUser,nis,username,password,passwordHint,idJabatan,idLevel) VALUES ("'.$idUser.$nis.'","'.$nis.'","'.$username.'","'.$password.'","'.$passwordHint.'","'.$idJabatan.'","'.$idLevel.'")';	
		}elseif ($nis == ""){
			$sql = 'INSERT INTO user (idUser,NIK,username,password,passwordHint,idJabatan,idLevel) VALUES ("'.$idUser.$NIK.'","'.$NIK.'","'.$username.'","'.$password.'","'.$passwordHint.'","'.$idJabatan.'","'.$idLevel.'")';		
		}
        $query = mysqli_query($con,$sql);

        //////////// log //////////////
        $addlog = new Log();
	    $addlog->insertlog($tabel,$action);
	    //////////// log //////////////
    }

    function getDetailUser($idUser){
		$con = $this->dbconnect();
		$sql = 'select user.idUser, user.nis, user.NIK, user.username, user.password, user.passwordHint, user.idJabatan, user.idLevel, jabatan.namaJabatan, level.level, siswa.nis, siswa.namaSiswa, guru.Nama_guru, guru.NIK from user
        LEFT JOIN siswa on siswa.nis = user.nis 
		LEFT JOIN guru on guru.NIK = user.NIK 
		LEFT JOIN jabatan on jabatan.idJabatan = user.idJabatan 
		LEFT JOIN level on level.idLevel = user.idLevel 
		where idUser = "'.$idUser.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }

    function editUser($idUser,$username,$password,$passwordHint,$idJabatan,$idLevel,$tabel,$action)
	{
		$con = $this->dbconnect();
		$sql = 'UPDATE user SET username = "'.$username.'" , password = "'.$password.'" , passwordHint = "'.$passwordHint.'" , idJabatan = "'.$idJabatan.'" , idLevel = "'.$idLevel.'" WHERE idUser = "'.$idUser.'"';
        $query = mysqli_query($con,$sql);

        //////////// log //////////////
        $addlog = new Log();
	    $addlog->insertlog($tabel,$action);
	    //////////// log //////////////
	}

	function editUserlupa($nomor,$password)
	{
		$con = $this->dbconnect();
		$sql = 'UPDATE user SET password = "'.$password.'" WHERE nis = "'.$nomor.'" OR NIK = "'.$nomor.'"';
        $query = mysqli_query($con,$sql);

        //////////// log //////////////
        $addlog = new Log();
	    $addlog->insertlog($tabel,$action);
	    //////////// log //////////////
	}

	function tampiluserlupa(){
		$con = $this->dbconnect();
		$sql = 'select password from user where nis = "'.$_SESSION['nomorlogin'].'" OR NIK = "'.$_SESSION['nomorlogin'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }	

	function deleteUser($idUser,$tabel,$action){
		$con = $this->dbconnect();
		$sql = 'DELETE from '.$this->table.' where idUser = "'.$idUser.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));

        //////////// log //////////////
        $addlog = new Log();
	    $addlog->insertlog($tabel,$action);
	    //////////// log //////////////


		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }


    function hint($nomor,$passwordHint){
		$con = $this->dbconnect();
		$sql = 'select * from user where (NIK = "'.$nomor.'" OR nis = "'.$nomor.'") AND (passwordHint = "'.$passwordHint.'")';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }



    function getforalertakun(){
		$con = $this->dbconnect();
		$sql = 'select nis,NIK from user where nis = "'.$_SESSION['alertnis'].'" OR NIK = "'.$_SESSION['alertNIK'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }

}


////////END class login/////////























////////class Jabatan/////////

class Jabatan extends Database {

    var $table = 'jabatan';
	
    
    function kombinasiid() {
		$id = "JAB-";
		return $id;
	}

    function tampiljabatan(){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }

    

    function tambahjab($id,$jabatan,$tabel,$action){
		$con = $this->dbconnect();
		$sql = 'INSERT INTO jabatan (idJabatan,namaJabatan) VALUES ("'.$id.$jabatan.'","'.$jabatan.'")';
        mysqli_query($con,$sql);

        //////////// log //////////////
        $addlog = new Log();
	    $data = $addlog->insertlog($tabel,$action);
	    //////////// log //////////////

    }



    function deletejab($idJabatan,$tabel,$action){
		$con = $this->dbconnect();
		$sql = 'DELETE from '.$this->table.' where idJabatan = "'.$idJabatan.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));

        //////////// log //////////////
        $addlog = new Log();
	    $addlog->insertlog($tabel,$action);
	    //////////// log //////////////

		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;

		
    }


    function getforalert(){
		$con = $this->dbconnect();
		$sql = 'select namaJabatan from jabatan where namaJabatan = "'.$_SESSION['alertjabatan'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }

}

////////class Jabatan/////////	

 
























////////class Jabatan/////////

class Level extends Database {

    var $table = 'level';
	
    
    function kombinasiid() {
		$id = "LEV-";
		return $id;
	}


    function tampillevelinput(){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }


    function tampillevel(){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table." Where idLevel in (1,2,3)";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }
    // WHERE NOT (model = 'Ford' AND color = 'yellow')

    function tampillevelkecuali(){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table." Where idLevel not in (1,2,3)";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }

    
    function tambahlvl($id,$level,$tabel,$action){
		$con = $this->dbconnect();
		$sql = 'INSERT INTO level (idLevel,level) VALUES ("'.$id.$level.'","'.$level.'")';
        $query = mysqli_query($con,$sql);

        //////////// log //////////////
        $addlog = new Log();
	    $addlog->insertlog($tabel,$action);
	    //////////// log //////////////
    }


    function deletelvl($idLevel,$tabel,$action){
		$con = $this->dbconnect();
		$sql = 'DELETE from '.$this->table.' where idLevel = "'.$idLevel.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));

        //////////// log //////////////
        $addlog = new Log();
	    $addlog->insertlog($tabel,$action);
	    //////////// log //////////////


		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }



    function getforalert(){
		$con = $this->dbconnect();
		$sql = 'select level from level where level = "'.$_SESSION['alertlevel'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }

}

////////class Jabatan/////////




?>