<?php
session_start();
include "db_tools/db_helper.php";

$user=$_POST['username'];
$pass=$_POST['password'];


if(($user!=" ")&&($pass!="")){

	$validate=auth($user,$pass);
	
	if($validate==true){
	
	$_SESSION['username']=$user;
	$_SESSION['password']=$pass;
	
	$_SESSION['sess_data']=array('username'=>$_SESSION['username'],
									'password'=>$_SESSION['password']
								);		
	
	header('Location:http://localhost/telkom/home.php?op=home');
	}
	
	else
	{
	echo "<center>Maaf Username/Password salah !</center>";
	echo "<h3><br></br><br></br><center><a href = index.php>Silakan Coba Lagi, Klik Disini Untuk Kembali</a></center></h3>";
	}
}
?>
