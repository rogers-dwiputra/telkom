<?php
	#include "db_connect.php";
	#$nama = $_POST['nama'];
	#$alamat = $_POST['alamat'];
	#$mdf = $_POST['mdf'];
	#$dp = $_POST['DP'];
	#$telpon = $_POST['telpon'];
	#$id = $_POST['id'];
	
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Surat_Tagihan.doc");
header("Pragma: no-cache");
header("Expires: 0");
?>
<html>
<p style = "text-align: left;" ><font face = "Times New Roman" size = "3"> Nomor : TEL. 91 /KU.480/DC2B3210/2013 <br>
Klaten (boyolali),  12 Nopember  2013 <!--(ganti pake tahun ini)-->

<br><br>
Kepada Yth	:
<br><b>Bpk/Ibu <?php echo ($nama); ?></b>
<br>
<?php echo ($alamat); ?>
<br>
</font>
</p>
<p style = "text-align: right;">
<font face = "Times New Roman" size = "2">DP: <?php echo ($mdf); ?>/ <?php echo ($dp) ?>;  -   Tlp : <?php echo ($telpon);?>
</font></p>
<br>
<p style = "text-align: left;" ><font face = "Times New Roman" size = "3"><b>
Perihal: Tagihan Informasi Speedy<br><br>
<i>Dengan Hormat,</i></b>
<br><br>
Atas nama Managemen PT.Telkom kami menyampaikan terima kasih atas kepercayaan Bpk/Ibu yang telah menggunakan layanan kami.
<br><br>
Bersama ini kami sampaikan data tagihan yang belum Bpk/Ibu selesaikan pembayarannya, Adapun tagihan yang belum terselesaikan tersebut adalah:
<br><br></p>
<table>
<tr>
	<td rowspan = "2">No</td>
	<td >Nomor</td>
	<td rowspan = "2">Bln Tagihan</td>
	<td rowspan = "2">Tanggal Tagihan</td>
	<td rowspan = "2">Jml Tagihan Telpon</td>
	<td rowspan = "2">jml tagihan speedy</td>
	</tr>
	<tr>
	<td>Telpon</td><!--kalo yang ini gg ada data suruh mas tri ngisi sendiri-->
	<td>Speedy</td></tr>
	<tr>
	<td colspan = "5" align = "right"><b>Total Tagihan</td>
	<td>
	<?php 
	#$tagihan = mysql_query ("select SUM (tagihan) from blabla where id = $id and tagihan !=0");
	#$data = mysql_fetch_array($tagihan);
	echo "RP."; echo ($data);
	?>
	</b>
	</td>
	</tr>
	<?php
		#$query = "select a.id, a.nama, a.Alamat,GROUP_CONCAT(DISTINCT d.no_telp SEPARATOR ', ') as no_telp, a.TANGGAL, a.OPERATOR, a.HASIL, a.tahap, a.email
		#from calon_custom a left join no_telp d on a.id = d.id where a.tahap = '$pilih' Group by d.id";
		$no = 1;
		$datacari=mysql_query($query) or die (mysql_error());
		while ($data = mysql_fetch_array($datacari)) {
		?>
			<tr>
				<!--tigal ganti variabel -->
				<td name = "no" align="center" valign="middle" ><?php echo $no; ?></td>
				<td name = "nama" align="center" valign="middle" ><?php echo $data['nama']; ?></td>
				<td name = "email" align="center" valign="middle" ><?php echo $data['email']; ?></td>
				<td name = "Alamat" align="center" valign="middle" ><?php echo $data['Alamat'];?></td>
				<td name = "no_telp" align="center" valign="middle" ><?php echo $data['no_telp']; ?></td>
		<?php
		}
		?>
		</tr>
	</table>
<p style = "text-align: left;" ><font face = "Times New Roman" size = "3"><b>
Data tersebut diatas belum termasuk denda apabila ada. Kami berharap dapat diselesaikan dalam waktu dekat. 
Agar tidak muncul denda, pembayaran selanjutnya mohon dilakukan paling lambat tgl 20 setiap bulannya. 
<br><br>
Apabila ternyata tagihan dimaksud telah dilunasi, mohon abaikan surat ini. 
Jika memerlukan informasi lebih lanjut silakan hub. Sdr. Ian (0272-3146439) atau  Yani (0272-3163559)
<br><br>
Demikian atas perhatian dan kerjasamanya disampaikan terima kasih.
<br><br>
Hormat kami,
<br><br><br>
<u>M.A .Yusuf Latif</u>
<br>
Asman Customer Care CO Klaten
</p>
	</html>
		


