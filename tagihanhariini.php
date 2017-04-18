<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
?>
<html>
    <head>
	<link href="styles/examples-offline.css" rel="stylesheet" />
      <link href="styles/kendo.common.min.css" rel="stylesheet" />
      <link href="styles/kendo.default.min.css" rel="stylesheet" />
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
<p
 <div class="row" align="center" >
          <img style="
			width: 200px; 
			height: 100px;"src="1.jpg">
</p>

 <header class="padded">
      
	  <div class="container">
						
		   
     


<div align = "center" id="example" class="k-content">
						
						<a href="home.php"><button class="btn btn-primary">HOME </button></a>
						<a href="datapelanggan.php"><button class="btn btn-primary">DATA PELANGGAN </button></a>
						<a href="beranda.php"><button class="btn btn-primary">DATA PEMBAYARAN </button></a>
						<a href="tagihanhariini.php"><button class="btn btn-primary">TAGIHAN HARI INI </button></a>
						<a href="datarecord.php"><button class="btn btn-primary">DATA RECORD</button></a>

</div>
<h4 align="center">TAGIHAN HARI INI (<?php 

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

 ?>):</h4>
<div align="left"><a onclick = "history.back()">Kembali</a></div>
    <table id="datatables" class="display">
	<thead>
	
    	<tr>
			<td align="cente">No</td>
        	<td align="center">Nama Pelanggan</td>
        	<td align="center">Alamat</td>
			<td align="center">No. Telp</td>
        	<td align="center">Sisa Tagihan</td>
			
        </tr>
    </thead>

<?php
$q = mysql_query(" SELECT b.id_pmbyrn, b.tgl_tagihan, a.nama, a.alamat, a.multikontak, b.sisa FROM tb_pembyrn b inner join tb_plgn a on a.id_plgn=b.id_plgn");
//melakukan query memilih field nama dan kelahiran dari tabel user
echo("<center><br>");
while ($r=mysql_fetch_array($q)) { 

$pecah = explode("-",$r['tgl_tagihan']);//memecah string menjadi elemen array
$tgl_skrg = date("d");//menampilkan hari saat ini
$bln_skrg = date("m");//menampilkan bulan saat ini
if (($bln_skrg == $pecah[1]) && ($tgl_skrg == $pecah[2])) 
{
?>
<?php $no++?>
<center>
<tr>
<td align = "center"><?php echo $no ?> </td>
<td align = "center"><?php echo("".$r['nama']."<br>"); ?> </td>
<td align = "center"><?php echo("".$r['alamat']."<br>");?> </td>
<td align = "center"><?php echo("".$r['multikontak']."<br>");?> </td>
<td align = "center"><?php echo("".$r['sisa']."<br>");?> </td>

</tr></center>
<?php
}
else {
echo("");
}
}
?>
</table>
</body>

<div class="css_center" align="center">
					 Designed and Created by Aziz Masruhan, Sistem Komputer Undip to PT. TELKOM &copy; 2015<br>

				</div>
</html>