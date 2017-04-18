<?php
	include "../dbconfig.php";
	$id = $_GET['id_plgn'];
	
	
	$delete = mysql_query("delete from tb_plgn where id_plgn = '$id'");
	if($delete){
		echo "<center><a href=../datapelanggan.php><br>Berhasil Menghapus Data ! </br><br></br>Kembali</a></center>";}
	else{
		echo "query gagal";}
?>
