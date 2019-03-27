<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "phpdasar";

$conn = mysqli_connect($servername, $username, $password, $dbname);

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row; 
	}
	return $rows;
}

function konvNilai($nilai)
{
	if ($nilai >= 80){
		$hasil = "A";
	}else if( $nilai < 80 and $nilai >=70){
		$hasil = "B";
	}else if( $nilai < 70 and $nilai >=60){
		$hasil = "C";
	}else if ($nilai < 60 and $nilai >=50){
		$hasil = "D";
	}else{
		$hasil = "E";
	}
	return $hasil;
}

function delete($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($conn);
} 


// if (!$conn) {
// 	die("Connection failed: " . mysqli_connect_eror());
// } else {
// 	echo "Connection Success";
// }

function update($data)
{
	global $conn;
	 $id = $data["id"];
	 $nama = $data["nama"];
	 $nrp = $data["nrp"];
	 $mataKuliah = $data["mataKuliah"];
	 $totalNilai = $data["totalNilai"];

	 $sql = "UPDATE mahasiswa SET
	 			nama = '$nama',
	 			nrp = '$nrp',
	 			mataKuliah = '$mataKuliah'
	 		 WHERE id = $id
	 			"; 
	
	 mysqli_query($conn, $sql);
	 if (mysqli_query($conn, $sql)) {
	    echo "Berhasil ditambahkan";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}


 ?>