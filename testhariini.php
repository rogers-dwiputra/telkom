<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
?>
<html>
<body>
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
<center>
<tr>
<td align = "center"><?php echo $no ?> </td>
<td align = "center"><?php echo("".$r['nama']."<br>"); ?> </td>
<td align = "center"><?php echo("".$r['alamat']."<br>");?> </td>
<td align = "center"><?php echo("".$r['multikontak']."<br>");?> </td>
<td align = "center"><?php echo("".$r['sisa']."<br>");?> </td> </tr></center>
<?php
}
else {
echo("");
}
}
?>
</table>
</body>
</html>
