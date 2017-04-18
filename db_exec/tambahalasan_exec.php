<?php
	//query insert
	include "../dbconfig.php";
	
	$id_alasan = $_POST['id_alasan'];
	$alasan = $_POST['alasan'];

	
	$query = mysql_query("insert into tb_alasan (id_alasan, alasan) 
	values ('$id_alasan','$alasan');");
	
	if ($query) {
	//header("location: ../datapelanggan.php");
	
	echo "<center>SUKSES MENAMBAH ALASAN ! <a href = '../datapelanggan.php'></a></center>";
		} 
	else {
	echo "Query Gagal";
	}
?>

<center><br><a href = '../tmbhpmbyrn.php'> <button type="button"> Kembali </button></a></br></center>
