<?php 
session_start();
session_destroy();
header("location:http://localhost:8080/SISSMKN2/views/login/login/index.php");
?>