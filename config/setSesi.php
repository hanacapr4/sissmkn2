<?php
session_start();
if(isset($_GET["sesi"])){
    session_start();
    unset ($_SESSION["ujian"]);
    unset ($_SESSION["finished_time"]);
	$_SESSION["ujian"] = $_GET["id"];
	$_SESSION["finished_time"] = $_GET["sesi"];
	echo "success";
}else if(isset($_GET["unsesi"])){
    unset ($_SESSION["ujian"]);
    unset ($_SESSION["finished_time"]); ?>

<script>window.alert('Ujian Telah Selesai');
    window.location="http://localhost:8080/SISSMKN2/views/ujian-online/siswa/data-ujian-online.php"</script>
    
<?php }
?>