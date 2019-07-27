<?php 
include('../../config/Database.php'); 
include('../../config/Siswa.php');
$object = new Siswa();
$params = $_POST['params'];
$type = $_POST['type'];
$datass  = '';

 //var_dump($type);exit();
 //if ($type == 'sapi') {

                             
                               // foreach ($object->select_guru() as $data) {

                              // $data2[] = "<option value='". $data['Nama_guru']."' >".$data['Nama_guru']."</option>";
                                 // }
                                                            
//     $datass =  implode(" ",$data2);
//     // var_dump();exit();
//     $datas = $datass;
//     // $datas .=  '</select>';
// } elseif ($params == 'hari') {

//  foreach ($object->select_hari() as $data) {

//                                 $data2[] = "<option value='". $data['Hari']."' >".$data['Hari']."</option>";

//                                 }
                                                            
//     $datass =  implode(" ",$data2);
//     // var_dump();exit();
//     $datas = $datass;
//  # code...
// } elseif ($params == 'mapel') {

//  foreach ($object->select_mapel() as $data) {

//                                 $data2[] = "<option value='". $data['nama_mapel']."' >".$data['nama_mapel']."</option>";

//                                 }
                                                            
//     $datass =  implode(" ",$data2);
//     // var_dump();exit();
//     $datas = $datass;

// }

if ($type == 'child') {
 $idsiswa = isset($_POST['nis']) ? $_POST['nis'] : '';
 $idkelas = isset($_POST['id_kelas']) ? $_POST['id_kelas'] : '';
 $data_insert = $object->pembagiankelas($idsiswa,$idkelas);
 $data_up = $object->update_siswabaru($idsiswa,'1');

}

$data_siswa = $object->getsiswa($params);
$data_kelas =  $object->getkelas($params);
 

    foreach ($data_siswa as $key => $val) {
      $data22 = [];
      foreach ($data_kelas as $key => $value) {
          $data22[] = "<li><a href='#' onclick='return edit_kelas(".'"'.$params.'", "'.$value['id_kelas'].'", "'.$val['nis'].'"'." )'>".$value['nama_kelas']."</a></li>";
          }
    $datas_kelas =  implode(" ",$data22);
    $data2[] = "<tr>
                  <td>".$val['nis']."</td>
                  <td>".$val['namaSiswa']."</td>
                  <td>".$val['kk']."</td>
                  
                  <td>
                  <div class='dropdown'>
    <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>pilih kelas
    <span class='caret'></span></button>
    <ul class='dropdown-menu'>
      ".$datas_kelas."
    </ul>
    </td> 
  </div>
                </tr>";

    }
     $datass =  implode(" ",$data2); // imploade = ngubah araay jadi string
     var_dump($datass);exit();
                                            
print($datass);
?>