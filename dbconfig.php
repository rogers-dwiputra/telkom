<?php
	$connect = mysql_connect("localhost","root","");
	mysql_select_db("telkom");
	$db = 'telkom';
	
	if($connect){
	echo "";
	}
	else{
	echo "koneksi gagal";
	}
?>