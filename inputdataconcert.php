<?php 
include 'connect.php';
$negara = $_POST['Negara'];
$venue = $_POST['Venue'];
$tanggal = $_POST['Tanggal'];
$judul = $_POST['Judul'];

 
mysql_query("INSERT INTO concert VALUES('','$negara','$venue','$tanggal','$judul')");
 
header("location:inputconcert.php?pesan=input");
?>