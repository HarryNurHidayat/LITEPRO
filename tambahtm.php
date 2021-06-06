<?php
	$server = "localhost";
	$user = "root";
	$namadb = "tiumy";
	$password = "";
	$conn = mysqli_connect ($server,$user,$password,$namadb) or die ("Koneksi gagal");
	$nama = $_POST['nama'];
	$telepon = $_POST ['telepon'];

	class emp()
		$query = mysqli_query ($conn, "INSERT INTO teman (nama,telepon) VALUES ('$nama','$telepon')")
		
		if ($query){
			$response = new emp ();
			$response -> success = 1;
			$response -> message = "Data berhasil disimpan";
			die (json($response));
		}
		else {
			$response = new emp ();
			$response -> success = 0;
			$response -> message = "Gagal menyimpan data";
			die (json($response));
		}

?>