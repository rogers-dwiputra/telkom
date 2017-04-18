<?php
	
	include "../dbconfig.php";
	$id = $_POST['id'];
	$tgl_pmbyrn = $_POST['tgl_pmbyrn'];
	$tagihan = $_POST['tagihan'];
	$sisa = $_POST['sisa'];
	$status = $_POST['status'];
	$tgl_tagihan = $_POST['tagihan'];
	$alasan = $_POST['alasan'];
	$keterangan = $_POST['keterangan'];
	
if($id==''||$tgl_pmbyrn==''||$tagihan==''||$sisa==''||$status=='' ||$tgl_tagihan==''||$alasan==''||$keterangan==''){
	echo 'Data tidak lengkap';
	}
	
else {
		$save = mysql_query ("update tb_pembyrn set
		id_plgn = '$id',
		tgl_pmbyrn = '$tgl_pmbyrn',
		tagihan = '$tagihan',
		sisa = '$sisa',
		status = '$status',
		tgl_tagihan = '$tgl_tagihan',
		alasan = '$alasan',
		keterangan = '$keterangan'
		where id_plgn = '$id';");
		}	
	
if($save){
		echo "<br>Perubahan Berhasil!!<br><a href='../beranda.php'>Kembali</a>";
}
else{
		echo "<br>Query Gagal!<br><a href='../edit.php?id=$id'>Kembali</a>";
}	

?>
