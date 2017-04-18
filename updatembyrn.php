<?php
include('dbconfig.php');

//tangkap data dari form
$tgl_pembayaran = $_POST['tgl_pembayaran'];
$tagihan = $_POST['tagihan'];
$sisa = $_POST['sisa'];
$status = $_POST['status'];
$alasan = $_POST['alasan'];
$keterangan = $_POST['keterangan'];


//update data di database sesuai user_id
$query = mysql_query("update tb_pembyrn set 
										tgl_pembayaran='$tgl_pembayaran',
										tagihan='$tagihan',
										sisa='$sisa',
										status='$status', 
										alasan='$alasan',
										keterangan='$keterangan'
										where id_plgn='$id_plgn'") 
		or die(mysql_error());

if ($query) {
	header('location:beranda.php?message=success');
}
?>