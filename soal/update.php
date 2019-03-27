<?php
require 'funct.php';

if ( isset($_POST["submit"]) ) {
	
	update($_POST);
}

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input data</title>
</head>
<body>

	<h1>Update Data</h1>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input name='nama' type='text' size='40' required value="<?= $mhs["nama"] ?>" /></td>
				</tr>
				<tr>
					<td>NRP</td>
					<td>:</td>
					<td><input name='nrp' type='number' size='40' required value="<?= $mhs["nrp"] ?>" /></td>
				</tr>
				<tr>
					<td>Mata Kuliah</td>
					<td>:</td>
					<td><input name='mataKuliah' type='text' size='40'required value="<?= $mhs["mataKuliah"] ?>" /></td>
				</tr>
				<tr>
					<td>Total Nilai</td>
					<td>:</td>
					<td><input name='totalNilai' type='number' size='40' required value="<?= $mhs["totalNilai"] ?>" /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button type="submit" name="submit">Update!</button></td>
				</tr>
			</table>
	</form>

</body>
</html>