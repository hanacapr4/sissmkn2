<?php

class Absensi extends Database {
var $table = 't_kelas';
var $table2 = 't_absensi';
var $table3 = 't_siswa';


    function tampilabsensiperkelas(){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
    while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }
        return $hasil;

    }

     function filterpjumlahsiswaperkelas(){
        $con = $this->dbconnect();
        $sql = "SELECT t_kelas.id_kelas, t_kelas.kelas, t_kelas.program FROM t_kelas";
        $query = mysqli_query($con,$sql);
      while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }
        return $hasil;

    }
    function filterjumlahalpha(){
        $con = $this->dbconnect();
        $sql = "SELECT t_kelas.kelas, t_absensi.no_induk, t_absensi.id_kelas, t_siswa.nama, count(stabsen) AS total from t_absensi 
            LEFT JOIN t_siswa ON t_absensi.no_induk = t_siswa.no_induk 
            LEFT JOIN t_kelas on t_kelas.id_kelas = t_absensi.id_kelas
            
            WHERE stabsen='A' GROUP BY t_absensi.no_induk ORDER BY total desc ";
        $query = mysqli_query($con,$sql);
      while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }
        return $hasil;

    }

   function tampilabsensisiswa($no_induk){
        $con = $this->dbconnect();
        $sql = 'select * from '.$this->table2.'WHERE no_induk="'.$no_induk.'"';
        $query = mysqli_query($con,$sql);
    while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }
        return $hasil;

    }


  function tampilsiswa($no_induk, $tglabsen){
    $encodeid=base64_encode($no_induk);
        $con = $this->dbconnect();
        $sql = "SELECT  * from t_absensi 
        WHERE no_induk='$no_induk' and tglabsen='$tglabsen'";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
        $hasil[] = $data;
    }
        return $hasil;
    }
    function editabsensi($no_induk, $tglabsen, $stabsen, $Alasan, $GuruPiket){
        $con = $this->dbconnect();
        $sql = "UPDATE t_absensi SET stabsen = '$stabsen', Alasan ='$Alasan', GuruPiket ='$GuruPiket' WHERE no_induk ='$no_induk' and tglabsen='$tglabsen'";
        $result = $con->query($sql);
        
    }
    function filterjumlahsiswaperkelas($id_kelas,$tglabsen){
    $con = $this->dbconnect();
    $sql = "SELECT * FROM t_absensi 
        LEFT JOIN t_siswa on t_siswa.no_induk = t_absensi.no_induk
        LEFT JOIN t_kelas on t_kelas.id_kelas = t_absensi.id_kelas
        WHERE t_siswa.id_kelas = '$id_kelas' and t_absensi.tglabsen='$tglabsen'";
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
    while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }

    return $hasil;
    }
    function getdetailalpha($id){
        $con = $this->dbconnect();
        $sql = "SELECT * FROM `absensi` 
        LEFT JOIN siswa on siswa.nis = absensi.nis
        LEFT JOIN kelas on kelas.id_kelas = absensi.id_kelas
        WHERE absensi.keterangan = 'A' AND absensi.nis =".$id;
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }

    function tampilgrafik(){
        $con = $this->dbconnect();
        $sql = "SELECT t_kelas.kelas, (SELECT count(no_induk) from t_absensi where t_absensi.id_kelas = t_kelas.id_kelas) as total FROM t_kelas";
        $query = mysqli_query($con,$sql);
      while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }
        return $hasil;

    }
    function tampilidabsen() {
    $date = date('dmHi');
    $id = "PDT".$date;
    return $id;
    }
  

   function tampilidabsenrfid() {
      $con = $this->dbconnect();
      $sql = 'SELECT t_siswa.no_induk, t_siswa.nama, t_siswa.kelas, t_absensi.datang, t_absensi.pulang, t_siswa.foto_daftar from t_absensi
              left join t_siswa on t_siswa.no_induk = t_absensi.no_induk
              left join t_kelas on t_kelas.id_kelas = t_absensi.id_kelas where t_absensi.tglabsen = current_date';
      $query = mysqli_query($con,$sql);
      while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }
        return $hasil;
    }

function createtambahabsensi($no_induk, $stabsen, $tglabsen, $terlambat, $Alasan, $GuruPiket, $id_kelas)
    {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table2.' (no_induk,stabsen,tglabsen,terlambat,Alasan,GuruPiket,id_kelas) VALUES 
               ("'.$no_induk.'","'.$stabsen.'","'.$tglabsen.'","'.$terlambat.'","'.$Alasan.'","'.$GuruPiket.'","'.$id_kelas.'")';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
    }

function tambahabsendatangrfid($no_induk)
    {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table2.' (no_induk,stabsen,tglabsen,datang) 
                VALUES ("'.$no_induk.'","M",current_date,current_time)';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
    }

function tambahabsenpulangrfid($no_induk)
    {
        $tanggal = date("Y-m-d");
        $con = $this->dbconnect();
        $sql = "UPDATE t_absensi SET Pulang = CURTIME() WHERE no_induk = '$no_induk' and tglabsen = '$tanggal' ";
        $result = $con->query($sql);
    }
}


?>


