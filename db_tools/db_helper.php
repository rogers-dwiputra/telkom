<?php
//Database connection
include "db_config.php";

// ALL DATABASE OPERATION //

//Autentikasi User
function auth($user,$pass){
	$sql="SELECT * FROM user WHERE username='$user' AND password='$pass'";
	$q=mysql_query($sql);
	$do=mysql_num_rows($q);
		if($do>0){
			return true;
		}
		else{
			return false;
		}
	}
?>