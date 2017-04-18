<html>
    <head>
        <title>Hapus Data Pembayaran</title>
		<!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        
        <?php
            //koneksi database dari dbconfig.php
			include "dbconfig.php";
			$id_pmbyrn = $_GET['id_pmbyrn'];

			//query
$query = mysql_query("select tb_plgn.id_plgn, tb_plgn.nama, tb_pembyrn.id_pmbyrn, tb_pembyrn.tgl_pembayaran from tb_pembyrn inner join tb_plgn on tb_plgn.id_plgn=tb_pembyrn.id_plgn where id_pmbyrn = '$id_pmbyrn'");
while($row = mysql_fetch_array($query)){
	$nama = $row[1];
	$tgl_pembayaran = $row[3];		}
//data yang ditampilkan untuk melakukan verifikasi hapus adalah nama dan nim dari nim yang dipilih untuk dihapus 
        ?>
        
<center><h1>Hapus Pembayaran</h1></center>
<center>Yakin Hapus Data Pembayaran <b><?php echo $nama;?></b>, Tanggal Pembayaran  <b><?php echo $tgl_pembayaran;?></b> ?<br/>
<p></p>
        <a href="db_exec/hapuspmbyrn_exec.php?id_pmbyrn=<?php echo $id_pmbyrn;?>"> <button class="btn btn-danger">Ya</button></a>
        <a href="beranda.php"><button class="btn">Tidak</button> </a></center>
    </body>
</html>
