<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/ujian-online/ujian-online.php");

    $aksi = $_GET['aksi'];
    if($aksi == "tambah"){
      $id_ujian_online = $_POST['id_ujian_online'];
      $id_kelas = $_POST['id_kelas'];
      $id_mapel = $_POST['id_mapel'];
      $tgl_upload = date("Y-m-d H:i:s");
      $jam_mulai = $_POST['jam_mulai'];
      $jam_selesai = $_POST['jam_selesai'];
      $nik = $_POST['nik'];
      $jenis_ujian = $_POST['jenis_ujian'];
      $bab = $_POST['bab'];
      $tgl_ujian = $_POST['tgl_ujian'];
      $waktu = $_POST['waktu'];

      $obj = new Ujian_online();
      $add = $obj->add_ujian($id_ujian_online, $id_kelas, $id_mapel, $nik, $jenis_ujian, $jam_mulai, $jam_selesai,  $bab, $tgl_ujian, $waktu,  $tgl_upload);

      if ($add == "Success") {
        header('Location: http://localhost:8080/SISSMKN2/views/ujian-online/guru/form-ujian-online1.php?id_ujian_online='.$id_ujian_online.'');
      }
      else{
        echo "Gagal";
      }
      

    }

    elseif($aksi == "update"){
      $id_ujian_online = $_POST['id_ujian_online'];
      $id_kelas = $_POST['id_kelas'];
      $id_mapel = $_POST['id_mapel'];
      $tgl_upload = date("Y-m-d H:i:s");
      $jam_mulai = $_POST['jam_mulai'];
      $jam_selesai = $_POST['jam_selesai'];
      $nik = $_POST['nik'];
      $jenis_ujian = $_POST['jenis_ujian'];
      $bab = $_POST['bab'];
      $tgl_ujian = $_POST['tgl_ujian'];
      $waktu = $_POST['waktu'];


      $obj = new Ujian_online();
      $edit = $obj->edit_ujian($id_ujian_online, $id_kelas, $id_mapel, $nik, $jam_mulai, $jam_selesai, $jenis_ujian, $bab, $tgl_ujian, $waktu,  $tgl_upload);

      if ($edit == "Success") {
        header('Location: http://localhost:8080/SISSMKN2/views/ujian-online/guru/data-ujian-guru.php');
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
        header('Location: http://localhost:8080/SISSMKN2/views/ujian-online/guru/data-ujian-guru.php');
      }
      else{
        echo "Gagal";
      }
    }
    else if($aksi == "aktif"){
      $id_ujian_online = $_GET['id_ujian_online'];
      $obj = new Ujian_online();
      $aktif = $obj->aktif_ujian($id_ujian_online);

       if ($aktif == "Success") {
        header('Location: http://localhost:8080/SISSMKN2/views/ujian-online/guru/data-ujian-guru.php');
      }
      else{
        echo $aktif;
      }
    }else if($aksi == "nonaktif"){
      $id_ujian_online = $_GET['id_ujian_online'];
      $obj = new Ujian_online();
      $nonaktif = $obj->nonaktif_ujian($id_ujian_online);

       if ($nonaktif == "Success") {
        header('Location: http://localhost:8080/SISSMKN2/views/ujian-online/guru/data-ujian-guru.php');
      }
      else{
        echo $nonaktif;
      }
    }
    ?>