<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
?>
<?php session_start();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title>Sistem Informasi Alumni SMK Negeri 1 Magelang</title>
  <!-- Modernizr -->
  <script src="js/libs/modernizr-2.6.2.min.js"></script>
  <!-- jQuery-->
  <script type="text/javascript" src="js/libs/jquery-1.10.2.min.js"></script>
  <!-- framework css -->
  <!--[if gt IE 9]><!-->
	<link rel="stylesheet" type="text/css" href="css/coba.css" />
  <link type="text/css" rel="stylesheet" href="css/groundwork.css">
  <!--<![endif]-->
  <!--[if lte IE 9]>
  <link type="text/css" rel="stylesheet" href="css/groundwork-core.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-type.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-ui.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-anim.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-ie.css">
  <![endif]-->
<script type="javascript">
function back(){
windows	.href.location="http://localhost/TA/beranda.php";
}
</script>
</head>
<body style="background-color:dalmation">
<p
 <div class="row" align="center" >
          <img style="
			width: 100px; 
			height: 100px;"src="z.jpg">
</p>

 <header class="padded">
      
	  <div class="container">
      
           <h2 style="margin-left:25%" ><a href="./beranda.php" target="_parent">Sistem Informasi Alumni SMK N 1 Magelang</a></h2>
        
<div class="one half">
						<a href="home.php"> <button type="button"> HOME </button></a>
						<a href="beranda.php">	<button href="" type="button"> DATA ALUMNI </button></a>
						<a href="jurusan.php">	<button href="" type="button"> DATA JURUSAN </button></a>

						
</a>
								   </div>
								   <div class="onehalf"> 
								   <p class="small double pad-top no-pad-small-tablet align-right align-left-small-tablet">
								   <?php
								  
echo "Selamat Datang <strong>".$_SESSION['username']."</strong>";
?> <a href="http://localhost/TA/logout.php" > Logout <a/> </p>


<html>
<nav role="navigation" class="nav gap-top">
        <ul role="menubar">
        <li><a href="tambahMhs.php"><i class="icon-plus"></i> Tambah data Alumni </a></li>	
		<li><a href="tambahjurusan.php"><i class="icon-plus"></i> Tambah data Jurusan </a></li>
		</ul>
		</nav>

<title>Sistem Informasi Alumni SMK N 1 Magelang</title>
<p>
<table border=1>
	<thead>
    	<tr>
        	<td align="center">No.</td>
        	<td align="center">ID Jurusan</td>
        	<td align="center">Jurusan</td>
        	
				<td align="center">Opsi</td>
        </tr>
    </thead>
    <tbody>
	<?php
		$myquery="select * from id_jurusan";
		while($data = mysql_fetch_array ($myquery))
		
		$datacari=mysql_query($myquery) or die (mysql_error());
		$no = 1;
		while ($data = mysql_fetch_array($datacari)) {
		?>
			<tr>
				<td align="center"><?php echo $no; ?></td>
				<td align="center"><?php echo $data['id']; ?></td>
				<td align="center"><?php echo $data['nama']; ?></td>
				<td align="center"><?php echo $data['ttl']; ?></td>
				<td align="center">
					<a href="edit.php?id=<?php echo $data['id']; ?>"> Edit</a>
				</td>
			</tr>
		<?php 
			$no++;
		} 
		?>
    </tbody>
</table>
</p>
<form  method="post" action="db_exec/cari_exec.php">
<table width="330" border="0" cellpadding="0">
<tr>
<td height="25" colspan="3">
<strong> Cari Data Alumni </strong>
</td>
</tr> <td> <b> Nama </b> </td>
<td> <input type="text" name="nama" required></td>
<td> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Cari" > </td>
</table>
</form>
</body>
</html>

