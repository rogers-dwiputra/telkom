<?php
	//query insert
	include "../dbconfig.php";
	$id_plgn = $_POST['id_plgn'];
	$tahun = $_POST['thn'];
	$bulan = $_POST['bln'];
	$tanggal = $_POST['tgl'];
	$tgl_pembayaran = $tahun."-".$bulan."-".$tanggal;
	$tagihan = $_POST['tagihan'];
	$sisa = $_POST['sisa'];
	$status = $_POST['status'];
	$tahun = $_POST['thnt'];
	$bulan = $_POST['blnt'];
	$tanggal = $_POST['tglt'];
	$tgl_tagihan = $tahun."-".$bulan."-".$tanggal;
	$alasan = $_POST['alasan'];
	$keterangan = $_POST['keterangan'];
	
	$query1 = "select nama from tb_plgn where id_plgn = '$id_plgn'";
	$result = mysql_query ($query1);
	$output = mysql_fetch_array($result);
	$nama = $output['nama'];
	
	$query = mysql_query("insert into tb_pembyrn values ('$id_plgn','$tgl_pembayaran','$tagihan','$sisa','$status','$tgl_tagihan','$alasan','$keterangan');");
	
	if ($query) {
	//header("location: ../datapelanggan.php");
	
	echo "<center>SUKSES MENAMBAH DATA PEMBAYARAN PELANGGAN !</center>";
		} 
	else {
	echo "<center>Data Pembayaran atas nama ";
	echo  ($nama);
	echo " sudah ada";
	}
?>

<center><br><a href = '../beranda.php'> <button type="button"> Kembali </button></a></br></center>
