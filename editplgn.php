  <?php
  include ('dbconfig.php');
  
  ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title>PT. TELKOM</title>
  <!-- Modernizr -->
  <script src="js/libs/modernizr-2.6.2.min.js"></script>
  <!-- jQuery-->
  <script type="text/javascript" src="js/libs/jquery-1.10.2.min.js"></script>
  <!-- framework css -->
  <!--[if gt IE 9]><!-->
  <link type="text/css" rel="stylesheet" href="css/groundwork.css">
  <link type="text/css" rel="stylesheet" href="css/header.css">
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
window.href.location="http://localhost/fastphone/view.php";
}
</script>
    </head>
    <body style="background-color:dalmation">
<center>
 <header class="padded">
      
	  <div class="container">
        <div class="row" align="center">
          <div class="two half">
            <h2 class="logo"> Form Edit Data Pelanggan</h2> 

          </div></header></center>
<?php 
$id_plgn = $_GET['id_plgn'];
$query = mysql_query("select id_plgn, dp, snd, nd_ref, nama, alamat, multikontak, sentral, segment, kategori from tb_plgn where id_plgn = '$id_plgn'") 
or die(mysql_error());
while ($data = mysql_fetch_array($query)){
?>

<form action="updateplgn.php" method="post">\
<center>
<table style="width:500px; height:20px" class="one" border="80" cellpadding="8" cellspacing="100" size = "30">
    <tbody>
		<tr hidden = "true">
        	<td><h4>ID Pelanggan</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="id_plgn" size="50" maxlength="1000" required="required" value="<?php echo $data['id_plgn']; ?>" hidden = "true" /></h4></td>
        </tr>
    	<tr>
        	<td><h4>DP</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="dp"size="50" maxlength="1000" required="required" value="<?php echo $data['snd']; ?>" /> </h4></td>
        </tr>
		<tr>
        	<td><h4>SND</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="snd" size="50" maxlength="1000" required="required" value="<?php echo $data['snd']; ?>" /></h4></td>
        </tr>
		<tr>
        	<td><h4>ND REF</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="nd_ref" size="50" maxlength="1000" required="required" value="<?php echo $data['nd_ref']; ?>" /></h4></td>
        </tr>
    	<tr>
        	<td><h4>Nama</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="nama" size="50" maxlength="1000" required="required" value="<?php echo $data['nama']; ?>" /></h4></td>
        </tr>
		<tr>
        	<td><h4>Alamat</h4></td>
        	<td>:</td>
        	<td><h4><textarea  name="alamat" size="50" maxlength="1000" required="required"><?php echo $data['alamat']; ?></textarea> </h4></td>
        </tr>
    	<tr>
        	<td><h4>Multikontak</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="multikontak"size="50"  maxlength="1000" required="required" value="<?php echo $data['multikontak']; ?>" /></h4></td>
        </tr>
		<tr>
        	<td><h4>Sentral</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="sentral" size="50" maxlength="1000" required="required" value="<?php echo $data['sentral']; ?>" /></h4></td>
        </tr>
    	<tr>
        	<td><h4>Segment</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="segment"size="50"  maxlength="1000" required="required" value="<?php echo $data['segment']; ?>" /></h4></td>
        </tr>
		<tr>
        	<td><h4>kategori</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="kategori" size="50" maxlength="1000" required="required" value="<?php echo $data['kategori']; ?>" /></h4></td>
        </tr>		
    </tbody>
</table></center>
<center>
        	<td align="left" colspan="3"><input type="submit" name="submit" value="Simpan" />   <a href='datapelanggan.php'><input type="button" value="Kembali"></a></td>
</center>
<?php
}
?>
</section>
</div>
</form>
</body>
</html>
