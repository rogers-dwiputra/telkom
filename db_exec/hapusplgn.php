<?php
	include "../dbconfig.php";
	$id_plgn = $_GET['id_plgn'];
	
	$delete = mysql_query("delete from tb_plgn where id_plgn = '$id_plgn'");
	if($delete){
		echo "<a href=../datapelanggan.php>Kembali</a>";}
	else{
		echo "query gagal";}
?>
