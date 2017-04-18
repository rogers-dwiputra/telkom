<?php
	//query insert
	include "../dbconfig.php";
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$e_mail = $_POST['e_mail'];
	$id_jurusan = $_POST['id_jurusan'];
	$tahun_masuk = $_POST['tahun_masuk'];
	$tahun_lulus = $_POST['tahun_lulus'];
	
	$query = mysql_query("insert into awal (nama, ttl, alamat, no_hp, e_mail, id_jurusan, tahun_masuk, tahun_lulus) 
	Values ('$nama','$ttl','$alamat','$no_hp', '$e_mail','$id_jurusan','$tahun_masuk','$tahun_lulus');");
	
	if ($query) {
	//header("location: ../beranda.php");
	
	echo "SUKSES!<a href = '../beranda.php'>Kembali</a>";
		} 
	else {
	echo "Query Gagal";
	}
?>
