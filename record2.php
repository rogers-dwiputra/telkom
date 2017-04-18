<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
if(isset($_POST['submit']))
$blnth = $_POST['tahun'];
?>
<?php session_start();
?>
<html>
    <head>
	  <!-- Modernizr -->
  <script src="js/libs/modernizr-2.6.2.min.js"></script>
  <!-- jQuery-->
  <script type="text/javascript" src="js/libs/jquery-1.10.2.min.js"></script>
  <!-- framework css -->
  <!--[if gt IE 9]><!-->
  <link type="text/css" rel="stylesheet" href="css/groundwork.css">
  <link type="text/css" rel="stylesheet" href="css/header.css">
  <!--<![endif]-->
  <!--[if lte IE 9]>
  <link type="text/css" rel="stylesheet" href="css/groundwork-core.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-type.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-ui.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-anim.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-ie.css">
  <![endif]-->
        <title>PT. TELKOM</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
<div align = "right">
	<?php 

/* script menentukan hari */  
 $array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 $hr = $array_hr[date('N')];

/* script menentukan tanggal */   
$tgl= date('j');

/* script menentukan bulan */
  $array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
  $bln = $array_bln[date('n')];

/* script menentukan tahun */ 
$thn = date('Y');
/* script perintah keluaran*/ 
 echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " " ;

 ?> 

 </div>
   <body style="background-color:dalmation">
   
<p
 <div class="row" align="center" >
          <img style="
			width: 200px; 
			height: 100px;"src="1.jpg">
</p>

 <header class="padded">
      	  <div class="container">
      

           <center><h3>Data Record Pembayaran PT. Telkom Tahun <?php echo ("$blnth") ;?></h3></center>
        
								   <div class="onehalf"> 
								   <p class="small double pad-top no-pad-small-tablet align-right align-left-small-tablet"></div>

<nav role="navigation" class="nav gap-top">
     
		</nav>

<center>
<table id="datatables" style="width:500px; height:20px" class="one" border="80" cellpadding="8" cellspacing="100" size = "30">
<thead>



    	
    </thead>
	
    <tbody>

    

	
	<div><b>
 

<?php
$query1 = "SELECT sum(tagihan) as jumlahtagihan, sum(sisa) as jumlahsisa from tb_pembyrn WHERE date_format(tgl_pembayaran, '%Y') = '$blnth'";
$hasil = mysql_query($query1);
$output = mysql_fetch_array ($hasil);
$nilai = $output;?>
<tr> 
<td>Jumlah Tagihan </td>
<td><b><input readonly ="true" value="<?php echo ('Rp. '); echo $nilai ['jumlahtagihan']; ?>"></input></b></td>
</tr>

<tr>
<td>Jumlah Sisa Tagihan Yang belum Dibayar</td>
<td><b><input readonly ="true" value="<?php echo ('Rp. ');echo $nilai ['jumlahsisa']; ?>"></input></b>
</td>
</tr>

<tr>
<td>Presentase Sisa tagihan</td>
<td><b><input readonly ="true" value="<?php echo $nilai ['jumlahsisa'] / $nilai ['jumlahtagihan'] *100 ; echo " %" ; ?>"></input></b>
</td>
</tr>


<p></p>
<?php
$query2 = "select count(status) as statuslunas from tb_pembyrn WHERE date_format(tgl_pembayaran, '%Y') = '$blnth' and status='lunas'";
$hasil = mysql_query($query2);
$output = mysql_fetch_array ($hasil);
$nilai = $output;?>
<tr><td>Lunas</td>
<td><b><input readonly ="true" value="
<?php echo $nilai ['statuslunas']; ?>"></input></b></td>
</tr>

<?php
$query2 = "select count(status) as janjibayar from tb_pembyrn WHERE date_format(tgl_pembayaran, '%Y') = '$blnth' and status='janji bayar'";
$hasil = mysql_query($query2);
$output = mysql_fetch_array ($hasil);
$nilai = $output;?>
<tr>
<td>Janji Bayar</td>
<td><b><input readonly ="true" value="
<?php echo $nilai ['janjibayar']; ?>"></input></b></td>
</tr>

<?php
$query2 = "select count(status) as cabut from tb_pembyrn WHERE date_format(tgl_pembayaran, '%Y') = '$blnth' and status='cabut'";
$hasil = mysql_query($query2);
$output = mysql_fetch_array ($hasil);
$nilai = $output;?>

<tr>
<td>Cabut</td>
<td><b><input readonly ="true" value="
<?php echo $nilai ['cabut']; ?>"></input></b></td>
</tr>




	</b>
	</div>
</tbody>
</table>
</center><p></p><center>
<button class="btn btn-primary" onclick = "history.back()" />KEMBALI</button>
<a></a><a href="home.php"> <button class="btn btn-primary" />HOME</button></a></center>
</body>
</html>