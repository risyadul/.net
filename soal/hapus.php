<?php 

require 'funct.php';

$id = $_GET["id"];

if ( delete($id) > 0) {
		echo "
			<script>
				alert('data berhasil didelete');
				document.location.href = 'tampildb.php';
			</script>
			";
	} else {
		echo "
				<script>
				alert('data gagal didelete');
				document.location.href = 'tampildb.php';
				</script>
			";
	}


 ?>