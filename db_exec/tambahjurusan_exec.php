<?php
	//query insert
	include "../dbconfig.php";
	$nama = $_POST['id_jurusan'];
	$ttl = $_POST['jurusan'];

	
	$query = mysql_query("insert into id_jurusan (id_jurusan,jurusan) 
	Values ('$nama','$ttl');");
	
	if ($query) {
	//header("location: ../beranda.php");
	
	echo "SUKSES!<a href = '../beranda.php'>Kembali</a>";
		} 
	else {
	echo "Query Gagal";
	}
?>
