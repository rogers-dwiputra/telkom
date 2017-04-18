<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
?>
<?php session_start();
?>
<!DOCTYPE html>
<html>
    <head>
		
        <title>PT. TELKOM</title>
        
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <style type="text/css">
            @import "media/css/demo_table_jui.css";
            @import "media/themes/sunny/jquery-ui.css";
        </style>      
		<!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="media/js/jquery.js"></script>
        <script src="media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $('#datatables').dataTable({
					     "oLanguage": {
						      "sLengthMenu": "Tampilkan _MENU_ data per halaman",
						      "sSearch": "Pencarian: ", 
						      "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
						      "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
						      "sInfoEmpty": " <align = 'left'> Menampilkan 0 s/d 0 dari 0 data",
						      "sInfoFiltered": "(di filter dari _MAX_ total data)",
						      "oPaginate": {
						          "sFirst": "<<",
						          "sLast": ">>", 
						          "sPrevious": "<", 
						          "sNext": ">"
					       }
				      },
              "sPaginationType":"full_numbers",
              "bJQueryUI":true
            });
          })    
        </script>
    </head>
	<div align = "RIGHT"><a href="index.php"> Logout ||</a>
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
 <header class="padded">
      
	  <div class="container" align="left" >
 <a href="home.php"><img style="
			width: 50px; 
			height: 50px;"src="home.jpg"></a>
	</div>
 
           <center><h3>Data Record Pembayaran PT. Telkom</h3><center>

								   <div class="onehalf"> 
								   <p class="small double pad-top no-pad-small-tablet align-right align-left-small-tablet"></div>

<form method="POST" action="record.php" >						
<?php
$query = "SELECT DISTINCT date_format(tgl_pembayaran, '%M %Y') as bulantahun  FROM tb_pembyrn";
$hasil = mysql_query($query);

echo '<p>Pilih Per Bulan</p>';
echo '<select id="bulantahun" name="bulantahun">';
while ($data = mysql_fetch_array($hasil))
{

 echo '<option value="'.$data['bulantahun'].'">'.$data['bulantahun'].'</option>';
}

echo '</select>';
?>
<a >
<button class="btn btn-primary" name="submit" value="submit" > Lihat Record</button></a>
</form>


<b><h5>====Atau====</h5></b><p></p><p></p><p></p><p></p>


<form method="POST" action="record2.php" >						
<?php
$query = "SELECT DISTINCT date_format(tgl_pembayaran, '%Y') as tahun  FROM tb_pembyrn";
$hasil = mysql_query($query);

echo '<p>Pilih Per Tahun</p>';
echo '<select id="tahun" name="tahun">';
while ($data = mysql_fetch_array($hasil))
{

 echo '<option value="'.$data['tahun'].'">'.$data['tahun'].'</option>';
}

echo '</select>';
?>
<a >
<button class="btn btn-primary" name="submit" value="submit" > Lihat Record</button></a>
</form>

<center><h3>Data Record Alasan Keterlambatan PT. Telkom</h3><center>

<form method="POST" action="grafikperbulan.php" >						
<?php
$query = "SELECT DISTINCT date_format(tgl_pembayaran, '%M %Y') as bulantahun  FROM tb_pembyrn";
$hasil = mysql_query($query);

echo '<p>Pilih Per Bulan</p>';
echo '<select id="bulantahun" name="bulantahun">';
while ($data = mysql_fetch_array($hasil))
{

 echo '<option value="'.$data['bulantahun'].'">'.$data['bulantahun'].'</option>';
}

echo '</select>';
?>
<a >
<button class="btn btn-primary" name="submit" value="submit" > Lihat Record</button></a>
</form>
<b><h5>====Atau====</h5></b><p></p><p></p><p></p><p></p>


<form method="POST" action="grafikpertahun.php" >						
<?php
$query = "SELECT DISTINCT date_format(tgl_pembayaran, '%Y') as tahun  FROM tb_pembyrn";
$hasil = mysql_query($query);

echo '<p>Pilih Per Tahun</p>';
echo '<select id="tahun" name="tahun">';
while ($data = mysql_fetch_array($hasil))
{

 echo '<option value="'.$data['tahun'].'">'.$data['tahun'].'</option>';
}

echo '</select>';
?>
<a >
<button class="btn btn-primary" name="submit" value="submit" > Lihat Record</button></a>
</form>
</body>
</html>

