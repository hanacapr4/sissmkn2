<?php
session_start();
$no_induk = $_SESSION['no_induk'];
$konek = mysqli_connect("localhost","root","","webtempfix");
    if($_POST["aksi"]=="simpanjawaban"){
        $arr = $_POST["jawaban"];
        foreach( $arr as $v){
           $id_jawaban = $v["id_jawaban"];
           $id_soal = $v["id_soal"];
           $id_ujian = $v["id_ujian"];
           $jawaban = $v["jawaban"];
           $query = "insert into jawaban_siswa set id_ujian_online = '".$id_ujian."',no_induk = '".$no_induk."', id_ujian_online_detail = '".$id_soal."', jawaban = '".$jawaban."'";
            $q = mysqli_query($konek,$query);
            if(!$q){
                echo mysqli_error($konek);
            }
        }
       echo "sukses";
    }else if($_POST["aksi"]=="simpannilai"){
        $jawaban = $_POST["nilai"];
        $id_ujian = $_POST["idujian"];
        $jmlessay = $_POST["jmlessay"];
        if($jmlessay == 0){
            $nilaitotal = $jawaban;
        }else{
            
            $nilaitotal = "kosong";
        }
        // echo "induk ".$no_induk." nilai ".$jawaban." idujian".$id_ujian;
        $query = "insert into nilai_ujian set id_ujian_online = '".$id_ujian."',nilai_total = '".$nilaitotal."',no_induk = '".$no_induk."', nilai_pg = '".$jawaban."'";
        $q = mysqli_query($konek,$query);
            if(!$q){
                echo mysqli_error($konek);
            }
            echo "sukses";
    }else if($_POST["aksi"]=="nilaifix"){
        $id_ujian = $_POST["idujian"];
        $nilaiisi = $_POST["nilaiisi"];
        $nilaitotal = $_POST["nilaitotal"];
        $noinduk = $_POST["noinduk"];
        $query = "update nilai_ujian set nilai_isi= '".$nilaiisi."', nilai_total = '".$nilaitotal."', status_nilai = 'sudah' where id_ujian_online = '".$id_ujian."' and no_induk = '".$noinduk."'";
        $q = mysqli_query($konek,$query);
            if(!$q){
                echo mysqli_error($konek);
            }
            echo "sukses";
    }

    // $query = "insert into jawaban_siswa set id_jawaban_siswa='".$v["id_jawaban"]."', id_ujian_online = '".$v["id_ujian"]."',no_induk = '".$no_induk."', id_ujian_online_detail = '".$v["id_soal"]."', jawaban = '"$v["jawaban"]"';    "
    // $q = mysqli_query($konek,$query);
    // if(!$q){
    //     echo mysqli_error($konek);
    // }

?>