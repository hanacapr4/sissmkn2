
<?php 
include('../../config/Database.php'); 
include('../../config/Jadwalgu.php');
$object = new Jadwalgu();
$params = $_POST['params'];
$datas  = '';
if ($params == 'guru') {

                             
                                foreach ($object->select_guru() as $data) {

                                $data2[] = "<option value='". $data['Nama_guru']."' >".$data['Nama_guru']."</option>";

                                }
                                                            
    $datass =  implode(" ",$data2);
    // var_dump();exit();
    $datas = $datass;
    // $datas .=  '</select>';
} elseif ($params == 'hari') {

	foreach ($object->select_hari() as $data) {

                                $data2[] = "<option value='". $data['Hari']."' >".$data['Hari']."</option>";

                                }
                                                            
    $datass =  implode(" ",$data2);
    // var_dump();exit();
    $datas = $datass;
	# code...
} elseif ($params == 'mapel') {

	foreach ($object->select_mapel() as $data) {

                                $data2[] = "<option value='". $data['nama_mapel']."' >".$data['nama_mapel']."</option>";

                                }
                                                            
    $datass =  implode(" ",$data2);
   // var_dump();exit();
    $datas = $datass;
}
// var_dump($datass);exit();
print($datas);
?>