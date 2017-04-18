<?php
	include "../dbconfig.php";
	$id_pmbyrn = $_GET['id_pmbyrn'];
	
	
	$delete = mysql_query("delete from tb_pembyrn where id_pmbyrn = '$id_pmbyrn'");
	if($delete){
		echo "<center><a href=../beranda.php><br>Berhasil Menghapus Data ! </br> <br></br> Kembali</a></center>";}
	else{
		echo "query gagal";}
?>
