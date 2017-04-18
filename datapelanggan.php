<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
?>
<?php session_start();
?>
<!DOCTYPE html>
<html>
      <link href="styles/examples-offline.css" rel="stylesheet" />
      <link href="styles/kendo.common.min.css" rel="stylesheet" />
      <link href="styles/kendo.default.min.css" rel="stylesheet" />
    <head>
        <title>PT. TELKOM</title>
         <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <style type="text/css">
            @import "media/css/demo_table_jui.css";
            @import "media/themes/sunny/jquery-ui.css";
        </style>      

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
    
<p>
 <div class="row" align="center" >
          <img style="
			width: 150px; 
			height: 100px;"src="1.jpg">
</p>
					

 <header class="padded">
      
	  <div class="container">
     
           
 
								   <div class="onehalf"> 
								   <p class="small double pad-top no-pad-small-tablet align-right align-left-small-tablet"></div>
									



<nav role="navigation" class="nav gap-top">
     
		</nav>

<title>Sistem Informasi Pelanggan PT Telkom</title>
<table id="datatables" class="display">
	<thead><center><div id="example" class="k-content">
						<a href="home.php"><button class="btn btn-primary">HOME </button></a>
						<a href="datapelanggan.php"><button class="btn btn-primary">DATA PELANGGAN </button></a>
						<a href="beranda.php"><button class="btn btn-primary">DATA PEMBAYARAN </button></a>
						<a href="tagihanhariini.php"><button class="btn btn-primary">TAGIHAN HARI INI </button></a>
						<a href="datarecord.php"><button class="btn btn-primary">DATA RECORD</button></a>
						
					</div></center>
			 <marquee direction="left" scrollamount="5" align="left"><h4>DATA PELANGGAN PT. TELKOM</h4></marquee>

						<div align = "center"> 
					
 <form method="post" enctype="multipart/form-data" action="jalan.php">
Input Data Pelanggan Dari File Excel*: 
<input name="fileexcel" type="file"> 
<input name="upload" type="submit" value="Import">
</form>					
<a href="tambahplgn.php">|<b>Input Data Pelanggan Manual</b> |</a> <?php 
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
						<a href="index.php">| Logout</a>
						</div>
 
    	<tr>
        	<td align="center">No.</td>
			<td align="center">DP</td>
			<td align="center">SND</td>
			<td align="center">ND REF</td>
        	<td align="center">Nama</td>
        	<td align="center">Alamat</td>
        	<td align="center">Multi Kontak</td>
			<td align="center">Sentral</td>
        	<td align="center">Segment</td>
        	<td align="center">Kategori</td>
			<td align="center">Opsi</td>
        </tr>
    </thead>
    <tbody>
	<?php
		$myquery="select id_plgn,dp,snd,nd_ref,nama,alamat,multikontak,sentral,segment,kategori from tb_plgn";
		
		$datacari=mysql_query($myquery) or die (mysql_error());
		$no = 1;
		while ($data = mysql_fetch_array($datacari)) {
		?>
			<tr>
				<td align="center"><?php echo $no; ?></td>
				<td align="center"><?php echo $data['dp']; ?></td>
				<td align="center"><?php echo $data['snd']; ?></td>
				<td align="center"><?php echo $data['nd_ref']; ?></td>
				<td align="center"><?php echo $data['nama']; ?></td>
				<td align="center"><?php echo $data['alamat']; ?></td>
				<td align="center"><?php echo $data['multikontak']; ?></td>
				<td align="center"><?php echo $data['sentral']; ?></td>
				<td align="center"><?php echo $data['segment']; ?></td>
				<td align="center"><?php echo $data['kategori']; ?></td>
				<td align="center">
					<a href="editplgn.php?id_plgn=<?php echo $data['id_plgn']; ?>"> Edit</a>
					<a> | </a>
					<a href="hapusplgn.php?id_plgn=<?php echo $data['id_plgn']; ?>"> Hapus</a>
				</td>
			</tr>
		<?php 
			$no++;
		} 
		?>
    </tbody>
</table>



</body>
<div class="css_center" align="center">
			* file yang bisa di import adalah .xls (Excel 2003-2007).
				</div>
<div class="css_center" align="center">
					 Designed and Created by Aziz Masruhan, Sistem Komputer Undip to PT. TELKOM &copy; 2015<br>

				</div>
</html>

