<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
?>
<html>
<!doctype html>
<head><center>
<h1><font color="#0000" size="5"><img src="LOGO TELKOM.jpg" width="300" height="200" class = "alignleft"/>
<br><b>DAFTAR INCOMING CALL CALON PELANGGAN TELKOM KLATEN</font></b></h1> <br><br>
</center>
<title>daftar outbondcall</title>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		
		<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/media/images/favicon.ico">
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
		<style type="text/css" media="screen">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table.css";
			@import "media/css/demo_table_jui.css";
			@import "media/css/themes/base/jquery-ui.css";
			@import "media/css/themes/smoothness/jquery-ui-1.7.2.custom.css";
			.dataTables_info { padding-top: 0; }
			.dataTables_paginate { padding-top: 0; }
			.css_right { float: right; }
			#example_wrapper .fg-toolbar { font-size: 0.8em }
			#theme_links span { float: left; padding: 2px 10px; }
		</style>
		<script type="text/javascript" src="media/js/complete.js"></script>
		<script src="media/js/jquery-1.4.4.min.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="media/js/jquery.dataTables.columnFilter.js"></script>
		<script type="text/javascript">
		
$(document).ready(function(){
     $('#example').dataTable()
		  .columnFilter({
			aoColumns: [ null,{ type: "text" }, null,{ type: "number" },null]
		});
});
		</script>
		<script type="text/javascript">

		    var _gaq = _gaq || [];
		    _gaq.push(['_setAccount', 'UA-17838786-4']);
		    _gaq.push(['_trackPageview']);

		    (function () {
		        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		    })();

</script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-17838786-4']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

		</script>
	</head>




<body id="dt_example">
			<center>
					<div class="two half">
					<a href="tambah Data.php">	<button type="button"> Tambah Data</button></a>
			</center>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
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
	<tfoot>
		<tr>
		</tr>
	</tfoot>
		<tbody>
	<?php
		$myquery="select tb_pembyrn.id_pmbyrn, tb_plgn.id_plgn, tb_plgn.nama, tb_pembyrn.tgl_pembayaran, tb_pembyrn.tagihan,tb_pembyrn.sisa, tb_pembyrn.status, 
		tb_pembyrn.tgl_tagihan,tb_pembyrn.alasan,tb_pembyrn.keterangan from tb_plgn inner join tb_pembyrn on tb_plgn.id_plgn=tb_pembyrn.id_plgn";
		$datacari=mysql_query($myquery) or die (mysql_error());
		$no = 1;
		while ($data = mysql_fetch_array($datacari)) {
		?>
			<tr>
				<td align="center"><?php echo $no; ?></td>
				<td hidden = "true" align="center"><?php echo $data['id_plgn'];?></td>
				<td align="center"><?php echo $data['nama']; ?></td>
				<td align="center"><?php echo $data['tgl_pembayaran']; ?></td>
				<td align="center"><?php echo $data['tagihan']; ?></td>
				<td align="center"><?php echo $data['sisa']; ?></td>
				<td align="center"><?php echo $data['status']; ?></td>
				<td align="center"><?php echo $data['tgl_tagihan']; ?></td>
				<td align="center"><?php echo $data['alasan']; ?></td>
				<td align="center"><?php echo $data['keterangan']; ?></td>
				<td align="center">
					<a href="editpmbyrn.php?id_pmbyrn=<?php echo $data['id_pmbyrn']; ?>">Perbarui Pembayaran</a>
				</td>
			</tr>
		<?php 
			$no++;
		} 
		?>
	</tbody>
</table>
			<div id="footer" style="text-align:center;">
				<span style="font-size:10px;">
					Datel Klaten 2015.<br>
					Reni Suciati, Universitas Diponegoro &copy; 20015<br>
				</span>
			</div>
		</div>
	</body>
	</html>