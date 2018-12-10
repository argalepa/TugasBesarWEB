<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Data berhasil di input.";
	}else if($pesan == "update"){
		echo "Data berhasil di update.";
	}else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>INPUT CONCERT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
 
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data Concert BLACKPINK</h3>
	<form action="inputdataconcert.php" method="post">		
		<table>
			<tr>
				<td>Negara</td>
				<td><input type="text" name="Negara"></td>					
			</tr>	
			<tr>
				<td>Venue</td>
				<td><input type="text" name="Venue"></td>					
			</tr>	
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="Tanggal"></td>					
            </tr>	
            <tr>
				<td>Judul</td>
				<td><input type="text" name="Judul"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>