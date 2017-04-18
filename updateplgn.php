<?php
include('dbconfig.php');

//tangkap data dari form
$id_plgn = $_POST['id_plgn'];
$dp = $_POST['dp'];
$segment = $_POST['segment'];
$nd_ref = $_POST['nd_ref'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$multikontak = $_POST['multikontak'];
$sentral = $_POST['sentral'];
$segment = $_POST['segment'];
$kategori = $_POST['kategori'];


//update data di database sesuai user_id
$query = mysql_query("update tb_plgn set id_plgn='$id_plgn',
										dp='$dp',
										segment='$segment',
										nd_ref='$nd_ref',
										nama='$nama', 
										alamat='$alamat',
										multikontak='$multikontak',
										sentral='$sentral', 
										segment='$segment',
										kategori='$kategori'
										where id_plgn='$id_plgn'") 
		or die(mysql_error());

if ($query) {
	header('location:datapelanggan.php?message=success');
}
?>