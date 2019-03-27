<?php 
require 'funct.php';

$result = query("SELECT * FROM mahasiswa");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil</title>
</head>
<body>
	<h1>Isi Database</h1>

	<a href="input.php">Tambahkan Data</a>
	<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>NRP</th>
		<th>Mata Kuliah</th>
		<th>Nilai Mutu</th>
		<th>Total Nilai</th>
		<th>Aksi</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach ( $result as $row ) : ?>
	<tr>
		<td><?= $i ?></td>
		<td><?= $row["nama"] ?></td>
		<td><?= $row["nrp"] ?></td>
		<td><?= $row["mataKuliah"] ?></td>	
		<td><?= $row["hurufMutu"] ?></td>
		<td><?= $row["totalNilai"] ?></td>
		<td>
			<a href="hapus.php?id=<?= $row["id"]; ?>">Delete</a> |
			<a href="update.php?id=<?= $row["id"]; ?>">Update</a>
		</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>	
	</table>

</body>
</html>