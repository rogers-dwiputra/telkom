<?php
	//query insert
	include "../dbconfig.php";
	$id_pmbyrn = $_POST['id_pmbyrn'];
	$id_plgn = $_POST['id_plgn'];
	$tgl_pembayaran = $_POST['tgl_pembayaran'];
	$tagihan = $_POST['tagihan'];
	$sisa = $_POST['sisa'];
	$status = $_POST['status'];
	$tgl_tagihan = $_POST['tgl_tagihan'];
	$id_alasan = $_POST['id_alasan'];
	$keterangan = $_POST['keterangan'];
	
	$query = mysql_query("insert into tb_pembyrn values ('$id_pmbyrn','$id_plgn','$tgl_pembayaran','$tagihan','$sisa','$status','$tgl_tagihan','$id_alasan','$keterangan');");
	
	if ($query) {
	//header("location: ../datapelanggan.php");
	
	echo "<center>SUKSES MENAMBAH DATA PEMBAYARAN PELANGGAN !</center>";
		} 
	else {
	echo " error";
	}
?>
<center><br><a href = '../beranda.php'> <button type="button"> Kembali </button></a></br></center>
