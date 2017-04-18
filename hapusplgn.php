<html>
    <head>
        <title>Hapus Pelanggan</title>
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
			$id_plgn = $_GET['id_plgn'];

			//query
$query = mysql_query("select id_plgn, nama, alamat from tb_plgn where id_plgn = '$id_plgn'");
while($row = mysql_fetch_array($query)){
	$nama = $row[1];
	$alamat = $row[2];
	
			}
//data yang ditampilkan untuk melakukan verifikasi hapus adalah nama dan nim dari nim yang dipilih untuk dihapus 
        ?>
        
<center><h1>Hapus Pelanggan</h1></center>
<center>Hapus <b><?php echo $nama;?></b> ( <?php echo $alamat;?>) ?<br/>
<p></p>
        <a href="db_exec/hapusplgn_exec.php?id_plgn=<?php echo $id_plgn;?>"> <button class="btn btn-danger">Ya</button></a>
        <a href="datapelanggan.php"><button class="btn">Tidak</button> </a></center>
    </body>
</html>
