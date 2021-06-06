<?php
	$server = "localhost";
	$user = "root";
	$namadb = "tiumy";
	$password = "";
	$conn = mysqli_connect ($server,$user,$password,$namadb) or die ("Koneksi gagal");
	$result = mysqli_query ($conn,"select * from teman");
	$json = array();
	while ($row = mysqli_fetch_assoc($result)){$json[] = $row;}

	echo json_encode($json);
	mysqli_close($conn);
?>