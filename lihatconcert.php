<<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<br/>
	<a class="tombol" href="inputconcert.php">+ Tambah Data Baru</a>
 
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
            <th>No</th>
			<th>Negara</th>
			<th>Venue</th>
			<th>Tanggal</th>
			<th>Judul</th>		
		</tr>
		<?php 
		include "connect.php";
		$query_mysql = mysql_query("SELECT * FROM concert")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['Negara']; ?></td>
			<td><?php echo $data['Venue']; ?></td>
            <td><?php echo $data['Tanggal']; ?></td>
            <td><?php echo $data['Judul']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>