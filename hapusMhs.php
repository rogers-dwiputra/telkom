<html>
    <head>
        <title>Hapus Mahasiswa</title>
    </head>
    <body>
        
        <?php
            //koneksi database dari dbconfig.php
			include "dbconfig.php";
			$id = $_GET['id'];

			//query
$query = mysql_query("select id, nama from awal where id = '$id'");
while($row = mysql_fetch_array($query)){
	$id = $row[0];
	$nama = $row[1];
			}
//data yang ditampilkan untuk melakukan verifikasi hapus adalah nama dan nim dari nim yang dipilih untuk dihapus 
        ?>
        
<h1>Hapus Mahasiswa</h1>
Hapus <?php echo $nama;?> (<?php echo $id;?>)?<br/>
        <a href="db_exec/hapusMhs_exec.php?id=<?php echo $id;?>">Ya</a>
        <a href="beranada.php">Tidak</a>
    </body>
</html>
