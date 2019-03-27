<?php
require 'funct.php';

if ( isset($_POST["submit"]) ) {
	 $nama = $_POST['nama'];
	 $nrp = $_POST['nrp'];
	 $mataKuliah = $_POST['mataKuliah'];
	 $totalNilai = $_POST['totalNilai'];

	 $nilaiMutu = konvNilai($totalNilai);
	 $sql = "INSERT INTO mahasiswa
				VALUES ('', '$nama', '$nrp', '$mataKuliah', '$nilaiMutu', '$totalNilai')";
	
	 mysqli_query($conn, $sql);
	 if (mysqli_query($conn, $sql)) {
	    echo "Berhasil ditambahkan";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input data</title>
</head>
<body>

	<h1>Input Data</h1>
	<form action="" method="POST">
		<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input name='nama' type='text' size='40' required /></td>
				</tr>
				<tr>
					<td>NRP</td>
					<td>:</td>
					<td><input name='nrp' type='number' size='40' required /></td>
				</tr>
				<tr>
					<td>Mata Kuliah</td>
					<td>:</td>
					<td><input name='mataKuliah' type='text' size='40'required /></td>
				</tr>
				<tr>
					<td>Total Nilai</td>
					<td>:</td>
					<td><input name='totalNilai' type='number' size='40' required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button type="submit" name="submit">Submit!</button></td>
				</tr>
			</table>
	</form>

</body>
</html>