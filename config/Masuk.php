<?php
$con = mysqli_connect("localhost", "root", "", "webtempfix");
$username = $_POST['username'];
$password = md5($_POST['password']);



$sql = "select user.username, user.password, user.email, user.nip, user.no_induk, user.menu, user.userid, 
user.nama, t_siswa.nama, t_staf.nama_guru, user.no_induk, 
t_staf.nip, t_staf.email, user_level.menu from user
 
LEFT JOIN t_siswa on t_siswa.no_induk = user.no_induk
LEFT JOIN t_staf on t_staf.nip = user.nip
LEFT JOIN user_level on user_level.menu = user.menu 
where username='$username' and password='$password'";
$login = mysqli_query($con,$sql) or die(mysqli_error($con));
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$data = mysqli_fetch_array($login);
	$_SESSION['menu'] = $data['menu'];
	$_SESSION['userid'] = $data['userid'];
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['Nama_guru'] = $data['nama_guru'];
	$_SESSION['nip'] = $data['nip'];
	$_SESSION['email'] = $data['email'];
	$_SESSION['no_induk'] = $data['no_induk'];
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	if($_SESSION['menu'] == "admin") {
		header("location:http://localhost:8080/SISSMKN2/views/dashboard/admin/index2.php");
	}else if($_SESSION['menu'] == "guru") {
		header("location:http://localhost:8080/SISSMKN2/views/dashboard/guru/index.php");
	
	}else if($_SESSION['menu'] == "siswa") {
		header("location:http://localhost:8080/SISSMKN2/views/dashboard/siswa/index.php");
	}
}else{
		echo "<script>alert('Username atau Password salah!');</script>";
		echo "<meta http-equiv='refresh' content='0; url=../views/login/login/index.php'>";
	}


?>