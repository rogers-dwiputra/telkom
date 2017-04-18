<?php
include('dbconfig.php');

//tangkap data dari form
$id_plgn = $_POST['id_plgn'];
$tgl_pmbyrn = $_POST['tgl_pembayaran'];
$tagihan = $_POST['tagihan'];
$sisa = $_POST['sisa'];
$status = $_POST['status'];
$tgl_tagihan = $_POST['tgl_tagihan'];
$alasan = $_POST['alasan'];
$keterangan = $_POST['keterangan'];

//update data di database sesuai user_id
$query = mysql_query("update tb_pembyrn set id_plgn='$id_plgn', 
										tgl_pembayaran='$tgl_pmbyrn', 
										tagihan='$tagihan', 
										sisa='$sisa', 
										status='$status', 
										tgl_tagihan='$tgl_tagihan',
										alasan = '$alasan',
										keterangan = '$keterangan'
										where id_plgn='$id_plgn'") 
		or die(mysql_error());

if ($query) {
	header('location:beranda.php?message=success');
}
?>