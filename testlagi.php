<div class="popup-wrapper" id="popup">
	<div class="popup-container">

		<!-- Konten popup, silahkan ganti sesuai kebutughan -->
		<script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link rel="stylesheet" href="css/TableCSSCode.css" type="text/css" />
        <style type="text/css">
            @import "media/css/demo_table_jui.css";
            @import "media/themes/sunny/jquery-ui.css";
        </style>      

        <script src="media/js/jquery.js"></script>
        <script src="media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
        </script>
		<form class="popup-form">
			<h4>Daftar tagihan Hari ini : </h4>
			
			<div class="input-group">
	<table id="datatables" class="display">
	<thead>
	
    	<tr>
		<td align="cente">No</td>
        	<td align="center">Nama Pelanggan</td>
        	<td align="center">Sisa Tagihan</td>
        </tr>
    </thead>

<?php
$q = mysql_query(" SELECT b.tgl_tagihan, a.nama, a.alamat, a.multikontak, b.sisa FROM tb_pembyrn b inner join tb_plgn a on a.id_plgn=b.id_plgn");
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

<tr>
<td align = "center"><?php echo $no ?> </td>
<td align = "center"><?php echo("".$r['nama']."<br>"); ?> </td>
<td align = "center"><?php echo("".$r['sisa']."<br>");?> </td> </tr>
<?php
}
else {
echo("");
}
}
?>

</table>
				
			</div>
		</form>
		<p>
				  <a href="tagihanhariini.php"><button class="btn btn-primary ">Klik Disini Untuk lihat Detail</button></a>
				</p>
		<a class="popup-close" href="#popup"> X </a>
	</div>
</div>