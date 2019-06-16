<?php 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/e-learning/e-learning.php");
$siteurl = 'http://localhost:8080/sissmkn2';

    $aksi = $_GET['aksi'];
    if($aksi == "tambah"){
      $id_elearning = $_POST['id_elearning'];
      $judul = $_POST['judul'];
      $deskripsi = $_POST['deskripsi'];
      $tanggal_upload = date("Y-m-d H:i:s");
      $error = false;
      $folder = './../../../file/';
      $file_type = array('png','jpg', 'jpeg', 'gif', 'bmp', 'xls', 'xlsx', 'pdf', 'doc', 'docx', 'ppt', 'pptx');
      $nama_file = $_FILES['nama_file']['name'];
      $file_size = $_FILES['nama_file']['size'];
      $max_size = 1000000000000000;
      $x = explode('.', $nama_file);
      $extensi = $x[count($x)-1];
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['nama_file']['tmp_name'];
      $id_mapel = $_POST['id_mapel'];
      $id_kelas = $_POST['id_kelas'];
      $nik = $_POST['nik'];

      $obj = new E_learning();

      if (!in_array($extensi, $file_type)) {
        $error = true;
        $pesan = 'Tipe file yang anda upload tidak sesuai </br>';
      }
      if ($file_size > $max_size) {
        $error = true;
        $pesan = 'Ukuran file melebihi batas maksimum</br>';
      }

      if ($error == true) {
        echo "<div id='error' '.$pesan.'</div>";
      }
      else{
        if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $folder.$nama_file)) {
          $add = $obj->add_elearning($id_elearning, $judul, $deskripsi, $nama_file, $tanggal_upload, $id_mapel, $id_kelas, $nik);
        }
      }

      if ($add == "Success") {
        header('Location: http://localhost:8080/sissmkn2/views/e-learning/siswa/data-elearning.php');
      }
      else{
        echo "Gagal";
      }
      

    }

    elseif($aksi == "update"){
      $id_elearning = $_POST['id_elearning'];
      $judul = $_POST['judul'];
      $deskripsi = $_POST['deskripsi'];
      $tanggal_upload = date("Y-m-d H:i:s");
      $error = false;
      $folder = './../../../file/';
      $file_type = array('png','jpg', 'jpeg', 'gif', 'bmp', 'xls', 'xlsx', 'pdf', 'doc', 'docx', 'ppt', 'pptx');
      $nama_file = $_FILES['nama_file']['name'];
      $file_size = $_FILES['nama_file']['size'];
      $max_size = 1000000000000000;
      $x = explode('.', $nama_file);
      $extensi = $x[count($x)-1];
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['nama_file']['tmp_name'];
      $id_mapel = $_POST['id_mapel'];
      $id_kelas = $_POST['id_kelas'];
      $nik = $_POST['nik'];

      $obj = new E_learning();

      if (!in_array($extensi, $file_type)) {
        $error = true;
        $pesan = 'Tipe file yang anda upload tidak sesuai </br>';
      }
      if ($file_size > $max_size) {
        $error = true;
        $pesan = 'Ukuran file melebihi batas maksimum</br>';
      }

      if ($error == true) {
        echo "<div id='error' '.$pesan.'</div>";
      }
      else{
        if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $folder.$nama_file)) {
      $edit = $obj->edit_elearning($id_elearning, $judul, $deskripsi, $nama_file, $tanggal_upload, $id_mapel, $id_kelas, $nik);

      }
      }

      if ($edit == "Success") {
        header('Location: http://localhost:8080/sissmkn2/views/e-learning/siswa/data-elearning.php');
      }
      else{
        echo "Gagal";
      }
      

    }
    elseif($aksi == "hapus"){
      $id_elearning = $_GET['id_elearning'];
      $obj = new E_learning();
      $del = $obj->delete_elearning($id_elearning);

       if ($del == "Success") {
        header('Location: http://localhost:8080/sissmkn2/views/e-learning/guru/data-elearning-guru.php');
      }
      else{
        echo "Gagal Hapus";
      }
    }
    else{
      echo "Mboh";
    }
    ?>