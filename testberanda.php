<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
?>
<?php session_start();
?>
<html>
    <head>
   
    </head>
	
	<body>
	<body style="background-color:dalmation">
<p
 <div class="row" align="center" >
          <img style="
			width: 200px; 
			height: 100px;"src="1.jpg">
</p>

 <header class="padded">
      
	  <div class="container">
      
           <center><h2><a href="./beranda.php" target="_parent">Data Pembayaran Pelanggan PT. Telkom </a></h2><center>
        <center>
<div class="two half">
						<a href="home.php">		<button type="button"> HOME </button></a>
						<a href="tambahplgn.php"> <button type="button"> TAMBAH DATA PELANGGAN </button></a>
						<a href="tmbhpmbyrn.php"> <button type="button"> TAMBAH DATA PEMBAYARAN </button></a>
						<a href="logout.php">		<button type="button"> LOGOUT </button></a>
						
					</div>
					</center>
								   <div class="onehalf"> 
								   <p class="small double pad-top no-pad-small-tablet align-right align-left-small-tablet"></div>
									


<html>
<nav role="navigation" class="nav gap-top">
     
		</nav>

<title>Sistem Informasi Pelanggan PT Telkom</title>
	<form>
<p>
<table border=1>
	<thead>
    	<tr>
        	<td align="center">No.</td>
        	<td align="center">Nama Pelanggan</td>
        	<td align="center">Tanggal Pembayaran</td>
        	<td align="center">Tagihan</td>
        	<td align="center">Sisa</td>
        	<td align="center">Status</td>
			<td align="center">Tanggal Tagihan</td>
			<td align="center">Alasan</td>
			<td align="center">Keterangan</td>
				<td align="center">Opsi</td>
        </tr>
    </thead>
    <tbody>
	<?php
		$myquery="select tb_pembyrn.id_pmbyrn, tb_plgn.nama, tb_pembyrn.tgl_pembayaran, tb_pembyrn.tagihan,tb_pembyrn.sisa, tb_pembyrn.status, tb_pembyrn.tgl_tagihan,tb_pembyrn.alasan,tb_pembyrn.keterangan from tb_plgn inner join tb_pembyrn on tb_plgn.id_plgn=tb_pembyrn.id_plgn";
		
		$datacari=mysql_query($myquery) or die (mysql_error());
		$no = 1;
		while ($data = mysql_fetch_array($datacari)) {
		?>
			<tr>
				<td align="center"><?php echo $no; ?></td>
				<td align="center"><?php echo $data['nama']; ?></td>
				<td align="center"><?php echo $data['tgl_pembayaran']; ?></td>
				<td align="center"><?php echo $data['tagihan']; ?></td>
				<td align="center"><?php echo $data['sisa']; ?></td>
				<td align="center"><?php echo $data['status']; ?></td>
				<td align="center"><?php echo $data['tgl_tagihan']; ?></td>
				<td align="center"><?php echo $data['alasan']; ?></td>
				<td align="center"><?php echo $data['keterangan']; ?></td>
				<td align="center">
					<a href="editpmbyrn.php?id_pmbyrn=<?php echo $data['id_pmbyrn']; ?>"> Perbarui Pembayaran</a>
				</td>
			</tr>
		<?php 
			$no++;
		} 
		?>
    </tbody>
</table>
</form>
	</body>