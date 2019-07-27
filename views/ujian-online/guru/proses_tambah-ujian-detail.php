<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/ujian-online/ujian-online-detail.php");
 
    $aksi = $_GET['aksi'];
    if($aksi == "tambah"){
      $obj = new Ujian_online_detail();
      $id_ujian_online_detail = $_POST['id_ujian_online_detail'];
      $id_ujian_online = $_POST['id_ujian_online'];
      $no_soal = $_POST['no_soal'];
      $soal = $_POST['soal'];
      $jenis_soal = $_POST['jenis_soal'];
      $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
      $gambar = $_FILES['gambar']['name'];
      $x = explode('.', $gambar);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['gambar']['size'];
      $file_tmp = $_FILES['gambar']['tmp_name'];
      $poin_nilai = $_POST['poin_nilai'];
      if ($jenis_soal == "Pilihan Ganda") {
        $jawaban_a = $_POST['jawaban_a'];
        $jawaban_b = $_POST['jawaban_b'];
        $jawaban_c = $_POST['jawaban_c'];
        $jawaban_d = $_POST['jawaban_d'];
        $jawaban_e = $_POST['jawaban_e'];
        $jawaban_benar = $_POST['jawaban_benar'];
      }
      elseif ($jenis_soal == "Essay"){
        $jawaban_a = "";
        $jawaban_b = "";
        $jawaban_c = "";
        $jawaban_d = "";
        $jawaban_e = "";
        $jawaban_benar = "";
      }
      
      if ($gambar != "") {
        move_uploaded_file($file_tmp,'./../../../file/'.$gambar);
        $add = $obj->add_ujian_detail($id_ujian_online_detail, $id_ujian_online,$no_soal, $soal, $jenis_soal, $gambar, $jawaban_a, $jawaban_b, $jawaban_c, $jawaban_d, $jawaban_e, $jawaban_benar, $poin_nilai);
      }
      if ($gambar == "") {
        $add = $obj->add_ujian_detail($id_ujian_online_detail, $id_ujian_online,$no_soal, $soal, $jenis_soal, $gambar, $jawaban_a, $jawaban_b, $jawaban_c, $jawaban_d, $jawaban_e, $jawaban_benar, $poin_nilai);
      }


      if ($add == "Success") {
        header('Location: http://localhost:8080/SISSMKN2/views/ujian-online/guru/detail-ujian-online.php?id_ujian_online='.$id_ujian_online.'');
      }
      else{
        echo "Gagal";
      }
      

    }

    elseif($aksi == "update"){
     $obj = new Ujian_online_detail();
      $obj = new Ujian_online_detail();
      $id_ujian_online_detail = $_POST['id_ujian_online_detail'];
      $id_ujian_online = $_POST['id_ujian_online'];
      $no_soal = $_POST['no_soal'];
      $soal = $_POST['soal'];
      $jenis_soal = $_POST['jenis_soal'];
      $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
      $gambar = $_FILES['gambar']['name'];
      $x = explode('.', $gambar);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['gambar']['size'];
      $file_tmp = $_FILES['gambar']['tmp_name'];
      $poin_nilai = $_POST['poin_nilai'];
      if ($jenis_soal == "Pilihan Ganda") {
        $jawaban_a = $_POST['jawaban_a'];
        $jawaban_b = $_POST['jawaban_b'];
        $jawaban_c = $_POST['jawaban_c'];
        $jawaban_d = $_POST['jawaban_d'];
        $jawaban_e = $_POST['jawaban_e'];
        $jawaban_benar = $_POST['jawaban_benar'];
      }
      elseif ($jenis_soal == "Essay"){
        $jawaban_a = "";
        $jawaban_b = "";
        $jawaban_c = "";
        $jawaban_d = "";
        $jawaban_e = "";
        $jawaban_benar = "";
      }

      $edit = $obj->edit_ujian_detail($id_ujian_online_detail, $id_ujian_online,$no_soal, $soal, $jenis_soal, $gambar, $jawaban_a, $jawaban_b, $jawaban_c, $jawaban_d, $jawaban_e, $jawaban_benar, $poin_nilai);

      if ($edit == "Success") {
        header('Location: http://localhost:8080/SISSMKN2/views/ujian-online/guru/detail-ujian-online.php?id_ujian_online='.$id_ujian_online.'');
      }
      else{
        echo "Gagal";
      }
      

    }
    elseif($aksi == "hapus"){
      $id_ujian_online_detail = $_GET['id_ujian_online_detail'];
      $id_ujian_online = $_POST['id_ujian_online'];
      $obj = new Ujian_online_detail();
      $show =$obj->show_detail_ujian_detail($id_ujian_online_detail);
      $del = $obj->delete_ujian_detail($id_ujian_online_detail);
      foreach ($show as $data) {
        $id_ujian_online = $data['id_ujian_online'];

       if ($del == "Success") {
        header('Location: http://localhost:8080/SISSMKN2/views/ujian-online/guru/detail-ujian-online.php?id_ujian_online='.$id_ujian_online.'');
      }
      else{
        echo "Gagal";
      }
    }
    }
    ?>