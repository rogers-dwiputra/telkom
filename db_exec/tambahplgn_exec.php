<?php
	//query insert
	include "../dbconfig.php";
	
	$id_plgn = $_POST['id_plgn'];
	$dp = $_POST['dp'];
	$snd = $_POST['snd'];
	$nd_ref = $_POST['nd_ref'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$multikontak = $_POST['multikontak'];
	$sentral = $_POST['sentral'];
	$segment = $_POST['segment'];
	$kategori = $_POST['kategori'];
	
	$query = mysql_query("insert into tb_plgn (id_plgn, dp, snd, nd_ref, nama, alamat, multikontak,sentral, segment, kategori) 
	values ('$id_plgn','$dp','$snd','$nd_ref','$nama','$alamat','$multikontak','$sentral','$segment','$kategori');");
	
	if ($query) {
	//header("location: ../datapelanggan.php");
	
	echo "<center>SUKSES MENAMBAH PELANGGAN ! <a href = '../datapelanggan.php'></a></center>";
		} 
	else {
		
	echo "Query Gagal";
	}
?>

<center><br><a href = '../datapelanggan.php'> <button type="button"> Kembali </button></a></br></center>
