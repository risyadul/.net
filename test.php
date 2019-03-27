<?php 

require 'conn.php';

$select = "SELECT * FROM form";
$result = mysqli_query($conn, $select);

// while ( $hasil = mysqli_fetch_assoc($result) ) {
// var_dump($hasil["nama"]);
// }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>database</title>
	<style>
		h1 {
			text-align: center;
		}
		table{
			margin: auto;
		}

	</style>
</head>
<body>

<h1>Data Nilai Mahasiswa</h1>

<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Alamat</th>
		<th>Jenis Kelamin</th>
		<th>Pendidikan</th>
	</tr>

	<?php $i = 1; ?>
	<?php while ($row = mysqli_fetch_assoc($result)) : ?>
	<tr>
		<td><?= $i ?></td>
		<td><?= $row["nama"] ?></td>
		<td><?= $row["email"] ?></td>
		<td><?= $row["alamat"] ?></td>	
		<td><?= $row["jenis kelamin"] ?></td>
		<th><?= $row["pendidikan"] ?></th>
	</tr>
	<?php $i++; ?>
	<?php endwhile; ?>	
</table>


</body>
</html>