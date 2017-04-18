<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
if(isset($_POST['submit']))
$blnth = $_POST['bulantahun']; 
?>
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


   <body style="background-color:dalmation">
   
   
<p
 <div class="row" align="center" >
          <img style="
			width: 200px; 
			height: 100px;"src="1.jpg">
</p>

 <header class="padded">
      	  <div class="container">
      
	  
           <center><h3>Data Record Pembayaran PT. Telkom <?php echo ("$blnth") ;?></h3></center>
        
								   <div class="onehalf"> 
								   <p class="small double pad-top no-pad-small-tablet align-right align-left-small-tablet"></div>

<nav role="navigation" class="nav gap-top">
     
		</nav>	
<div id="example" class="k-content">
<button class="btn btn-primary" onclick = "history.back()" />KEMBALI</button>
<a></a><a href="home.php"> <button class="btn btn-primary" />HOME</button></a>
</div>

<table id="datatables" class="display">

	<thead>

    	<tr>
        	<td align="center">No.</td>
			<td align="center">Nama</td>
			<td align="center">Tagihan (Rp.)</td>
			<td align="center">Tanggal Pembayaran</td>
			<td align="center">Status</td>
			<td align="center">Alasan</td>
        	<td align="center">Sisa Tagihan (Rp.)</td>
        </tr>
    </thead>
	
    <tbody>
	<?php
if(isset($_POST['submit'])){
$blnth = $_POST['bulantahun']; 

$query = "SELECT tb_plgn.nama,tb_pembyrn.tgl_pembayaran, tb_alasan.alasan, tb_pembyrn.status, tb_pembyrn.tagihan, tb_pembyrn.sisa from tb_plgn inner join tb_pembyrn on tb_plgn.id_plgn=tb_pembyrn.id_plgn inner join tb_alasan on tb_alasan.id_alasan=tb_pembyrn.id_alasan WHERE date_format(tgl_pembayaran, '%M %Y') = '$blnth'";
$hasil = mysql_query($query);
$no = 1;
while ($data = mysql_fetch_array($hasil)) {
	?>
			<tr>
				<td align="center"><?php echo $no; ?></td>
				<td align="center"><?php echo $data['nama']; ?></td>
				<td align="center"><?php echo $data['tagihan']; ?></td>
				<td align="center"><?php echo $data['tgl_pembayaran']; ?></td>
				<td align="center"><?php echo $data['status']; ?></td>
				<td align="center"><?php echo $data['alasan']; ?></td>
				<td align="center"><?php echo $data['sisa']; ?></td>
				
			</tr>
		<?php 
			$no++;
		} 
}
		?>
    </tbody>
	<div align = "right"><b>
	
<?php
$query1 = "SELECT sum(tagihan) as jumlahtagihan, sum(sisa) as jumlahsisa from tb_pembyrn WHERE date_format(tgl_pembayaran, '%M %Y') = '$blnth'";
$hasil = mysql_query($query1);
$output = mysql_fetch_array ($hasil);
$nilai = $output;
?>
<div>
Jumlah Tagihan : Rp. <b><input type = "text"  value="
<?php echo $nilai ['jumlahtagihan']; ?>" size="10" maxlength="10" readonly ="true"></input></b>
</div>
<div>
Jumlah Sisa Tagihan Yang belum Dibayar : Rp. <b><input readonly ="true" value="
<?php echo $nilai ['jumlahsisa'] ; ?>" size="10" maxlength="10" type = "text" readonly ="true"></b></input>

</div>

<div>
Presentase Belum Terbayar: <b><input readonly ="true" value="
<?php echo ($nilai ['jumlahsisa'] / $nilai ['jumlahtagihan'] )*100 ; echo " %" ; ?>" size="10" maxlength="10" type = "text" readonly ="true"></b></input>

</div>
<div>
Presentase Terbayar : <b><input readonly ="true" value="
<?php echo (($nilai ['jumlahtagihan']-$nilai ['jumlahsisa']) / $nilai ['jumlahtagihan'] )*100 ; echo " %" ; ?>" size="10" maxlength="10" type = "text" readonly ="true"></b></input>

</div>
<p></p>

<?php
$query2 = "select count(status) as statuslunas from tb_pembyrn WHERE date_format(tgl_pembayaran, '%M %Y') = '$blnth' and status='lunas'";
$hasil = mysql_query($query2);
$output = mysql_fetch_array ($hasil);
$nilai = $output;?>
<div>
Lunas : <b><input readonly ="true" value="
<?php echo $nilai ['statuslunas']; ?>" size="10" maxlength="10" type = "text"></input></b>
</div>


<?php
$query2 = "select count(status) as statusjnjbyr from tb_pembyrn WHERE date_format(tgl_pembayaran, '%M %Y') = '$blnth' and status='janji bayar'";
$hasil = mysql_query($query2);
$output = mysql_fetch_array ($hasil);
$nilai = $output;?>
<div>
Janji Bayar : <b><input readonly ="true" value="
<?php echo $nilai ['statusjnjbyr']; ?>" size="10" maxlength="10" type = "text"></input></b>
</div>

<?php
$query2 = "select count(status) as cabut from tb_pembyrn WHERE date_format(tgl_pembayaran, '%M %Y') = '$blnth' and status='cabut'";
$hasil = mysql_query($query2);
$output = mysql_fetch_array ($hasil);
$nilai = $output;?>

<div>
Cabut : <b><input readonly ="true" value="
<?php echo $nilai ['cabut']; ?>" size="10" maxlength="10" type = "text"></input></b>
</div>

</b>
</div>	
</table>
<div id='container'></div>
</body>
<html>