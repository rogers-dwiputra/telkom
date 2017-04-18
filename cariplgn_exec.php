<?php
	include "dbconfig.php";
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
            <h2 class="logo"><a>Data Pelanggan</a></h2>
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
			<td align="center"><strong>No</td>
        	<td align="center"><strong>DP</td>
			<td align="center"><strong>SND</td>
		    <td align="center"><strong>ND Ref</td>
        	<td align="center"><strong>Nama</td>
        	<td align="center"><strong>Alamat</td>
			<td align="center"><strong>Multikontak</td>
        	<td align="center"><strong>Sentral</td>
        	<td align="center"><strong>Segment</td>
			<td align="center"><strong>Kategori</td>
			<td align="center"><strong>Opsi</td>
        </tr>
    </thead>
    <tbody>
	<?php
		
		$nama= $_POST['nama']; //get the nama value from form
		
		$q = "SELECT id_plgn,dp, snd, nd_ref, nama, alamat, multikontak,sentral,segment,kategori from tb_plgn where nama like '%$nama%' "; //query to get the search result
		$result = mysql_query($q); //execute the query $q
		$no = 1;
		while ($data = mysql_fetch_array($result)) {
		?>
			<tr>
				<td <?php $data ['id_plgn']?> hidden = "true"></td>
				<td align="center"><?php echo $no; ?></td>
				<td align="center"><?php echo $data['dp']; ?></td>
				<td align="center"><?php echo $data['snd']; ?></td>
				<td align="center"><?php echo $data['nd_ref']; ?></td>
				<td align="center"><?php echo $data['nama']; ?></td>
				<td align="center"><?php echo $data['alamat']; ?></td>
				<td align="center"><?php echo $data['multikontak']; ?></td>
				<td align="center"><?php echo $data['sentral']; ?></td>
				<td align="center"><?php echo $data['segment']; ?></td>
				<td align="center"><?php echo $data['kategori']; ?></td>
				<td align="center">
					<a href="editplgn.php?id_plgn=<?php echo $data['id_plgn']; ?>"> Edit</a>
					<a> | </a>
					<a href="hapusplgn.php?id_plgn=<?php echo $data['id_plgn']; ?>"> Hapus</a>
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