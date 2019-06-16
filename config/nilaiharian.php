<?php

class nilaiharian extends Database {
    var $table = 't_raport';
    var $table2 = 't_siswa';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }    

    function insertnilai($id, $th_ajar, $pel, $kelas, $sem, $no_urut, $no_induk, $SKBM, $N1, $N2, $N3, $N4, $N5, $N6, $N7, $N8, $N9, $Rata2, $n_rata2, $UTS, $UAS, $JURNAL, $Angka, $Huruf, $Keterangan, $jenis, $n_konversi, $penilaian, $idpel, $Religius, $Jujur, $Toleransi, $Kemandirian, $Kegigihan, $PercayaDiri, $Kewarganegaraan, $Kerjasama, $Belanegara, $Kedisiplinan, $TanggungJawab, $K12, $K13, $K14, $K16, $K17, $K18, $id_pel_jenis, $id_pel_sub, $od_pel_pel, $tgl_update, $kunci) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id.'","'.$th_ajar.'", "'.$pel.'", "'.$kelas.'", "'.$sem.'", "'.$no_urut.'", "'.$no_induk.'", "'.$SKBM.'", "'.$N1.'", "'.$N2.'", "'.$N3.'", "'.$N4.'", "'.$N5.'", "'.$N6.'", "'.$N7.'", "'.$N8.'", "'.$N9.'", "'.$Rata2.'", "'.$n_rata2.'", "'.$UTS.'", "'.$UAS.'", "'.$JURNAL.'", "'.$Angka.'", "'.$Huruf.'",)';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
     function getdata($id){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }

function updatenilai($id, $th_ajar, $pel, $kelas, $sem, $no_urut, $no_induk, $SKBM, $N1, $N2, $N3, $N4, $N5, $N6, $N7, $N8, $N9, $Rata2, $n_rata2, $UTS, $UAS, $JURNAL, $Angka, $Huruf, $Keterangan, $jenis, $n_konversi, $penilaian, $idpel, $Religius, $Jujur, $Toleransi, $Kemandirian, $Kegigihan, $PercayaDiri, $Kewarganegaraan, $Kerjasama, $Belanegara, $Kedisiplinan, $TanggungJawab, $K12, $K13, $K14, $K16, $K17, $K18, $id_pel_jenis, $id_pel_sub, $od_pel_pel, $tgl_update, $kunci)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET id_mapel="'.$id_mapel.'", Nilai_Latihan="'.$Nilai_Latihan.'", Nilai_Tugas="'.$Nilai_Latihan.'", Nilai_Tugas="'.$Nilai_Tugas.'", Nilai_Kuis="'.$Nilai_Kuis.'", Nilai_UTS="'.$Nilai_UTS.'", Nilai_UAS="'.$Nilai_UAS.'", convert_nilai="'.$convert_nilai.'" where id_nilai="'.$id_nilai.'" AND NIS="'.$NIS.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));

        
    }

 function deletenilai($id)
 {
        $con = $this->dbconnect();
        $sql = 'DELETE FROM '.$this->table.' where id_nilai="'.$id.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
}

?>