<?php
	//query insert
	include "../dbconfig.php";
	$id_plgn = $_POST['id_plgn'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$multikontak = $_POST['multikontak'];
	$id_segment = $_POST['id_segment'];
	$id_snd = $_POST['id_snd'];
	
	$query = mysql_query("insert into tb_plgn (id_plgn, nama, alamat, multikontak, id_segment, id_snd) 
	Values ('$id_plgn','$nama', '$alamat','$multikontak','$id_segment','$id_snd');");
	
	if ($query) {
	//header("location: ../beranda.php");
	
	echo "SUKSES!<a href = '../datapelanggan.php'>Kembali</a>";
		} 
	else {
	echo "Query Gagal";
	}
?>
