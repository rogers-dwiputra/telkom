<?php
	include "../dbconfig.php";
$nama=$_POST['nama'];

?>
<?php session_start();?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <!-- Modernizr -->
  <script src="js/libs/modernizr-2.6.2.min.js"></script>
  <!-- jQuery-->
  <script type="text/javascript" src="js/libs/jquery-1.10.2.min.js"></script>
  <!-- framework css -->
  <!--[if gt IE 9]><!-->
  <link type="text/css" rel="stylesheet" href="css/groundwork.css">
  <!--<![endif]-->
  <!--[if lte IE 9]>
  <link type="text/css" rel="stylesheet" href="css/groundwork-core.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-type.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-ui.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-anim.css">
  <link type="text/css" rel="stylesheet" href="css/groundwork-ie.css">
  <![endif]-->
<script type="javascript">
function back(){
windows	.href.location="http://localhost/ta/beranda.php";
}
</script>
</head>
<body>
 <header class="padded">
      
	  <div class="container">
        <div class="row">
          <div class="one half">
            <h2 class="logo"><a>Sistem Informasi Alumni SMK Negeri 1 Magelang</a></h2>
          </div>
        </div>
<html>
<body>
<p>
<strong> Hasil pencarian!</strong>
<br>
<br>
<table border=1>
	<thead>
    	<tr>
			<td align="center">NO</td>
        	<td align="center">Id</td>
        	<td align="center">Nama</td>
        	<td align="center">TTL</td>
        	<td align="center">Alamat</td>
        	<td align="center">No HP</td>
        	<td align="center">E-mail</td>
			<td align="center">Jurusan</td>
			<td align="center">Tahun Masuk</td>
			<td align="center">Tahun Lulus</td>
        	<td align="center">Opsi</td> 
        </tr>
    </thead>
    <tbody>
	<?php
		
		$nama= $_POST['nama']; //get the nama value from form
		
		$q = "SELECT a.id,a.nama,a.ttl,a.alamat,a.no_hp,a.e_mail,b.jurusan,a.tahun_masuk,a.tahun_lulus from awal a left join id_jurusan b on a.id_jurusan=b.id_jurusan where a.nama or a.ttl like '%$nama%' or a.alamat like '%$nama%'
			 or a.no_hp like '%$nama%' or a.e_mail like '%$nama%' or a.id_jurusan like '%$nama%' or a.tahun_masuk like '%$nama%'or a.tahun_lulus like '%$nama%' "; //query to get the search result
		$result = mysql_query($q); //execute the query $q
		$no = 1;
		while ($data = mysql_fetch_array($result)) {
		?>
			<tr>
				<td align="center"><?php echo $no; ?></td>
				<td align="center"><?php echo $data['id']; ?></td>
				<td align="center"><?php echo $data['nama']; ?></td>
				<td align="center"><?php echo $data['ttl']; ?></td>
				<td align="center"><?php echo $data['alamat']; ?></td>
				<td align="center"><?php echo $data['no_hp']; ?></td>
				<td align="center"><?php echo $data['e_mail']; ?></td>
				<td align="center"><?php echo $data['jurusan']; ?></td>
				<td align="center"><?php echo $data['tahun_masuk']; ?></td>
				<td align="center"><?php echo $data['tahun_lulus']; ?></td>
				<td align="center">
					<a href="../edit.php?id=<?php echo $data['id']; ?>"> Edit</a>
					<a> | </a>
					<a href="../hapusMhs.php?id=<?php echo $data['id']; ?>"> Hapus</a>
				</td>
			</tr>
		<?php 
			$no++;
			}
		?>
    </tbody>
</table>
<br>
<input type="button" value="Kembali" onclick="history.back(-1);" />
</p>
</body>
</html>