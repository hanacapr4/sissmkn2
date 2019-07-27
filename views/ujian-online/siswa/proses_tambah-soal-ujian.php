<?php  
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/ujian-online/jawaban-siswa.php");

    $aksi = $_GET['aksi'];
    if($aksi == "tambah"){

      $id_ujian_online = $_POST['id_ujian_online'];
      $obj1 = new Ujian_online_detail();
      $show = $obj1->show_detail_ujian($id_ujian_online);

      $id_jawaban_siswa = $_POST['id_jawaban_siswa'];
      $no_soal = $_POST['no_soal'];
      $jawaban = $_POST['jawaban'];
      foreach ($show as $data) {
        $jenis_soal = $data['jenis_soal'];
        $jawaban_benar = $data['jawaban_benar'];
      }
      if ($jenis_soal= "Essay") {
        $status = " ";
      }
      elseif ($jenis_soal == "Pilihan Ganda") {
        if ($jawaban == $jawaban_benar) {
          $status = "Benar";
        }
        elseif ($jawaban != $jawaban_benar) {
          $status = "Salah";
        }
      }

      $obj = new Jawaban_siswa();
      $add = $obj->add_jawaban_ujian($id_jawaban_siswa, $id_ujian_online, $no_soal, $jawaban, $status);
      if ($add == "Success") {
        header('Location: http://localhost:8080/SISSMKN2/views/ujian-online/siswa/data-ujian-online1.php?id_ujian_online='.$id_ujian_online.'');
      }
      else{
        echo $add;
      }
      

    }

    elseif($aksi == "update"){
      $id_jawaban_siswa = $_POST['id_jawaban_siswa'];
      $id_ujian_online_detail = $_POST['id_ujian_online_detail'];
      $no_soal = $_POST['no_soal'];
      $jawaban = $_POST['jawaban'];


      $obj = new Jawaban_siswa();
      $edit = $obj->edit_ujian($id_jawaban_siswa, $id_ujian_online_detail,  $no_soal, $jawaban);

      if ($edit == "Success") {
        header('Location: http://localhost:8080/SISSMKN2/views/ujian-online/siswa/data-ujian-online1.php?id_ujian_online='.$id_ujian_online.'');
      }
      else{
        echo "Gagal";
      }
      

    }
    elseif($aksi == "hapus"){
      $id_ujian_online = $_GET['id_ujian_online'];
      $obj = new Ujian_online();
      $del = $obj->delete_ujian($id_ujian_online);

       if ($del == "Success") {
        header('Location: http://localhost:8080/SISSMKN2/views/ujian-online/siswa/data-ujian-online1.php?id_ujian_online='.$id_ujian_online.'');
      }
      else{
        echo "Gagal";
      }
    }
    ?>