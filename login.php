<?php 
// mengaktifkan session php
session_start();

include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
$data = mysqli_query($koneksi,"select * from skedul where Username='$username' and Password='$password'");
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['Username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>