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

// if (!$conn) {
// 	die("Connection failed: " . mysqli_connect_eror());
// } else {
// 	echo "Connection Success";
// }




 ?>