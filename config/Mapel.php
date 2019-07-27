 <?php

class Mapel extends Database {
    var $table = 't_pelajaran';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function insertMapel($kode_pel, $idpel, $pelajaran, $pel, $program, $tingkat, $jam_pel, $semester, $X1, $X2, $XI1, $XI2, $XII1, $XII2, $pengajar, $jenis, $th_ajar, $id_pel_jenis, $id_pel_sub, $id_pel_pel, $produktif, $Tingkat1, $Tingkat2, $Tingkat3) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$kode_pel.'", "'.$idpel.'", "'.$pelajaran.'", "'.$pel.'", "'.$program.'", "'.$tingkat.'", "'.$jam_pel.'", "'.$semester.'", "'.$X1.'", "'.$X2.'", "'.$XI1.'", "'.$XI2.'", "'.$XII1.'", "'.$XII2.'", "'.$pengajar.'", "'.$jenis.'", "'.$th_ajar.'", "'.$id_pel_jenis.'", "'.$id_pel_sub.'", "'.$id_pel_pel.'", "'.$produktif.'", "'.$Tingkat1.'", "'.$Tingkat2.'", "'.$Tingkat3.'")';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }

    function getdata($idpel){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where idpel = "'.$idpel.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }

      function updateMapel($kode_pel, $idpel, $pelajaran, $pel, $program, $tingkat, $jam_pel, $semester, $X1, $X2, $XI1, $XI2, $XII1, $XII2, $pengajar, $jenis, $th_ajar, $id_pel_jenis, $id_pel_sub, $id_pel_pel, $produktif, $Tingkat1, $Tingkat2, $Tingkat3)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET kode_pel= "'.$kode_pel.'", pelajaran="'.$pelajaran.'", pel="'.$pel.'", program="'.$program.'", tingkat="'.$tingkat.'", jam_pel="'.$jam_pel.'", semester="'.$semester.'", X1="'.$X1.'", X2="'.$X2.'", XI1="'.$XI1.'", XI2="'.$XI2.'", XII1="'.$XII1.'", XII2="'.$XII2.'", pengajar="'.$pengajar.'", jenis="'.$jenis.'", th_ajar="'.$th_ajar.'", id_pel_jenis="'.$id_pel_jenis.'", id_pel_sub="'.$id_pel_sub.'", id_pel_pel="'.$id_pel_pel.'", produktif="'.$produktif.'", Tingkat1="'.$Tingkat1.'", Tingkat2="'.$Tingkat2.'", Tingkat3="'.$Tingkat3.'" where idpel = "'.$idpel.'"';
        $query = mysqli_query($con,$sql);
    }

      function DeleteMapel($idpel)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where idpel = "'.$idpel.'"';
        $query = mysqli_query($con,$sql);
    }


function getforalert(){
        $con = $this->dbconnect();
        $sql = 'select idpel from t_pelajaran where idpel = "'.$_SESSION['alertid'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }


}

?>