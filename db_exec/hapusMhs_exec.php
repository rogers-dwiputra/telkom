<?php
	include "../dbconfig.php";
	$id = $_GET['id'];
	
	$delete = mysql_query("delete from awal where id = '$id'");
	if($delete){
		echo "<a href=../beranda.php>Kembali</a>";}
	else{
		echo "query gagal";}
?>
