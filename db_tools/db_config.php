<?php
//membuat koneksi database ke server
$user="root";
$pass="";
$host="localhost";
$db="telkom";

$con=mysql_connect ($host, $user, $pass);
mysql_select_db($db) or mysql_error();
?>
