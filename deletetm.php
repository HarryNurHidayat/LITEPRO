<?php
	$server = "localhost";
	$user = "root";
	$namadb = "tiumy";
	$password = "";

	$conn = mysqli_connect ($server,$user,$password,$namadb) or die ("Koneksi gagal");

	$id = $_POST['id'];

	class emp{}
		$query = mysqli_query($conn, "DELETE from teman WHERE id = '".$id."'");

		if ($query){
			$response = new emp();
			$response -> success = 1;
			$response -> message = "Data berhasil di hapus";
			die(json_encode($response));
		}
		else{
			$response = new emp();
			$response -> success = 0;
			$response -> message = "Gagal menghapus data";
			die(json_encode($response));
		}
?>