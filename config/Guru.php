<?php

class Guru extends Database {
     var $table = 'guru';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from guru";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function insertGuru($R1, $R2, $R3, $R4, $R5, $R6, $R7, $R8, $R9, $R10, $R11, $R12, $R13, $R14, $R15, $R16, $R17, $R18, $R19, $R20, $R21, $R22, $R23, $R24, $R25, $R26, $R27, $R28, $R29, $R30, $R31, $R32, $R33, $R34, $R35, $R36, $R37, $R38, $R39, $R40, $R41, $R42, $R43, $R44,$R45 ) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES ("'.$R1.'", "'.$R2.'", "'.$R3.'", "'.$R4.'", "'.$R5.'", "'.$R6.'", "'.$R7.'", "'.$R8.'", "'.$R9.'", "'.$R10.'", "'.$R11.'", "'.$R12.'", "'.$R13.'", "'.$R14.'", "'.$R15.'", "'.$R16.'", "'.$R17.'", "'.$R18.'", "'.$R19.'", "'.$R20.'", "'.$R21.'", "'.$R22.'", "'.$R23.'", "'.$R24.'", "'.$R25.'", "'.$R26.'", "'.$R27.'", "'.$R28.'", "'.$R29.'", "'.$R30.'", "'.$R31.'", "'.$R32.'", "'.$R33.'", "'.$R34.'", "'.$R35.'", "'.$R36.'", "'.$R37.'", "'.$R38.'", "'.$R39.'", "'.$R40.'", "'.$R41.'", "'.$R42.'", "'.$R43.'", "'.$R44.'", "'.$R45.'")';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
     function getdata($id){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where NIP = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }

function updateGuru($R1, $R2, $R3, $R4, $R5, $R6, $R7, $R8, $R9, $R10, $R11, $R12, $R13, $R14, $R15, $R16, $R17, $R18, $R19, $R20, $R21, $R22, $R23, $R24, $R25, $R26, $R27, $R28, $R29, $R30, $R31, $R32, $R33, $R34, $R35, $R36, $R37, $R38, $R39, $R40, $R41, $R42, $R43, $R44)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET Nama_guru="'.$R2.'", nama_pangilan="'.$R3.'", NUPTK="'.$R4.'", jenis_kelamin="'.$R5.'", tempat_lahir="'.$R6.'", tanggal_lahir="'.$R7.'", status_pegawai="'.$R8.'", jenisPK="'.$R9.'", agama="'.$R10.'", Alamat_jalan="'.$R11.'", RT="'.$R12.'", RW="'.$R13.'", Nama_dusun="'.$R14.'", Desa_kelurahan="'.$R15.'", Kecamatan="'.$R16.'", KodePos="'.$R17.'", Telpon="'.$R18.'", HP="'.$R19.'", email="'.$R20.'", tugas_tambahan="'.$R21.'", SKCPNS="'.$R22.'", tglCPNS="'.$R23.'", SK_pengangkatan="'.$R24.'", TMT_pengangkatan="'.$R25.'", lembaga_pengankatan="'.$R26.'", pangkat_golongan="'.$R27.'", sumbergaji="'.$R28.'", nama_ibu_kandung="'.$R29.'", Status_perkawinan="'.$R30.'", nama_suami_atau_istri="'.$R31.'", pekerjaan_suami_istri="'.$R32.'", TMT_PNS="'.$R33.'", lisensiKepsek="'.$R34.'", Diklat_kepengawasan="'.$R35.'", keahlian_brailer="'.$R36.'", keahlian_bahasa_isarat="'.$R37.'", NPWP="'.$R38.'", nama_wajib_pajak="'.$R39.'", kewarganegaraan="'.$R40.'", bank="'.$R41.'", No_rekening="'.$R42.'", atas_nama="'.$R43.'", NIP="'.$R44.'" where NIK = "'.$R1.'"';
        //print_r($sql);
        //die();
        $query = mysqli_query($con,$sql);
    }
      function Deleteguru($NIK)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where NIK = "'.$NIK.'"';
        $query = mysqli_query($con,$sql);
    }


 function getdatadetailguru($id){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where NIP = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }


}

?>