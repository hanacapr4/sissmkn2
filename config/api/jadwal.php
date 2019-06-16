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
$table = 'jadwal';

// Table's primary key
$primaryKey = 'id_jadwal';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array( 'db' => '`j`.`id_jadwal`', 'dt' => 'id_jadwal', 'field' => 'id_jadwal' ),
	array( 'db' => '`g`.`Nama_guru`',  'dt' => 'Nama_guru', 'field' => 'Nama_guru' ),
	array( 'db' => '`m`.`nama_mapel`',   'dt' => 'nama_mapel', 'field' => 'nama_mapel' ),
	array( 'db' => '`h`.`Hari`',     'dt' => 'Hari', 'field' => 'Hari'),
	// array( 'db' => '`n`.`NIK`',     'dt' => 'NIK', 'field' => 'NIK'),
	array( 'db' => '`o`.`id_mapel`',     'dt' => 'id_mapel', 'field' => 'id_mapel'),
	array( 'db' => '`j`.`jam`', 'dt' => 'jam', 'field' => 'jam' ),
);

// SQL server connection information
//require('config.php');
$sql_details = array(
	'user' => 'root',
	'pass' => '',
	'db'   => 'sekolahfix',
	'host' => 'localhost'
);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

// require( 'ssp.class.php' );
require('ssp.customized.class.php' );


// $joinQuery = "FROM `jadwal` AS `j` INNER JOIN `guru` AS `g` ON (`g`.`NIK` = `j`.`NIK`) INNER JOIN `mata_pelajaran` AS `m` ON (`m`.`id_mapel` = `j`.`id_mapel`) INNER JOIN `hari` AS `h` ON (`h`.`id_Hari` = `j`.`id_Hari`)";
$joinQuery = "FROM `jadwal` AS `j` INNER JOIN `mata_pelajaran` AS `o` ON (`o`.`id_mapel` = `j`.`id_mapel`) INNER JOIN `mata_pelajaran` AS `m` ON (`m`.`id_mapel` = `j`.`id_mapel`) INNER JOIN `hari` AS `h` ON (`h`.`id_Hari` = `j`.`id_Hari`) INNER JOIN `guru` AS `g` ON (`m`.`NIK` = `g`.`NIK`)";

// print_r($_POST);exit();
echo json_encode(
	SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns, $joinQuery )
);
