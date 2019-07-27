<?php
mysql_connect("localhost", "root", "");
mysql_select_db("gammu");

$noTujuan = $_POST['nohp'];
$message = $_POST['msg'];

$query = "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID) VALUES ('$noTujuan', '$message', 'Gammu')";
$hasil = mysql_query($query);

if ($hasil) echo "SMS berhasil dikirim";
else echo "SMS gagal dikirim";

?>