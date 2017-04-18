<?php
include('dbconfig.php');
//tangkap data dari form
$id_pmbyrn = $_POST['id_pmbyrn'];
$tgl_pembayaran = $_POST['tgl_pembayaran'];
$tagihan = $_POST['tagihan'];
$sisa = $_POST['sisa'];
$status = $_POST['status'];
$tgl_tagihan = $_POST['tgl_tagihan'];
$id_alasan = $_POST['id_alasan'];
$keterangan = $_POST['keterangan'];


//update data di database sesuai user_id
$query = mysql_query("update tb_pembyrn set
										id_pmbyrn='$id_pmbyrn',
										tgl_pembayaran='$tgl_pembayaran',
										tagihan='$tagihan',
										sisa='$sisa',
										status='$status',
										tgl_tagihan='$tgl_tagihan',
										id_alasan='$id_alasan',
										keterangan='$keterangan'
										where id_pmbyrn='$id_pmbyrn'") 
		or die(mysql_error());

if ($query) {
	header('location:beranda.php?message=success');
}
?>