<?php
header('content-type: application/json; charset=utf-8');
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'siswa';

$primaryKey = 'nis';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array( 'db' => '`s`.`nis`', 'dt' => 'nis', 'field' => 'nis' ),
	array( 'db' => '`s`.`nama`',  'dt' => 'nama', 'field' => 'nama' ),
	array( 'db' => '`b`.`nama_BS`',   'dt' => 'nama_BS', 'field' => 'nama_BS' ),
	array( 'db' => '`s`.`nilaiUN`',     'dt' => 'nilaiUN', 'field' => 'nilaiUN'),
);
$kolkelas = array(
	array( 'db' => '`k`.`id_kelas`', 'dt' => 'id_kelas', 'field' => 'id_kelas' ),
	array( 'db' => '`K`.`nama_kelas`',  'dt' => 'nama_kelas', 'field' => 'nama_kelas' )
);

// SQL server connection information
//require('config.php');
$sql_details = array(
	'user' => 'root',
	'pass' => '',
	'db'   => 'penjadwalan_sis_smkn2',
	'host' => 'localhost'
);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

// require( 'ssp.class.php' );
require('ssp.customized.class.php' );
$id= $_POST['columns'][0]['search']['value'];
var_dump($id);exit();
$joinQuery = "from siswa as s left join bidang_studi as b on s.id_BS = b.id_BS";
$kelas= "from kelas as k left join bidang_studi as b on k.id_BS = b.id_BS where b.id_BS = ".$id;

echo json_encode(
	SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns, $joinQuery , $kelas,$kolkelas)
);
