<?php 
include ('dbconfig.php');
?>
<html>
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
<script type="text/javascript" src="js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="development-bundle/themes/ui-lightness/ui.all.css" />
        
        <script src="development-bundle/jquery-1.8.0.min.js"></script>
        <script src="development-bundle/ui/ui.core.js"></script>
        <script src="development-bundle/ui/ui.datepicker.js"></script>
        <script src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#tgl_pembayaran").datepicker({
                    dateFormat : "yy/mm/dd",
                    changeMonth : true,
                    changeYear : true
                });
				$("#tgl_tagihan").datepicker({
                    dateFormat : "yy/mm/dd",
                    changeMonth : true,
                    changeYear : true
                });
            });
        </script>
</head>
<body style="background-color:dalmation">
<center>
 <header class="padded">
      
	  <div class="container">
        <div class="row" align="center">
          <div class="two half">
            <h2 class="logo"> Form Pembaruan Data Pembayaran</h2> 

          </div></header><center>


<?php 
$id_pmbyrn = $_GET['id_pmbyrn'];
$query = mysql_query("select tb_plgn.nama, tb_pembyrn.id_pmbyrn, tb_pembyrn.tgl_pembayaran, tb_pembyrn.tagihan, tb_pembyrn.sisa, tb_pembyrn.status, tb_pembyrn.tgl_tagihan, tb_alasan.alasan, tb_pembyrn.keterangan from tb_pembyrn inner join tb_plgn on tb_pembyrn.id_plgn=tb_plgn.id_plgn  inner join tb_alasan on tb_alasan.id_alasan=tb_pembyrn.id_alasan where id_pmbyrn = '$id_pmbyrn'") 
or die(mysql_error());
while ($data = mysql_fetch_array($query)){
?>

        	

<form name="input_data" action="updatepmbyrn.php" method="post">
<center>
<table style="width:500px; height:20px" class="one" border="80" cellpadding="8" cellspacing="100" size = "30">
    <tbody>
		<tr>
        	<td><h5>Nama</h5></td>
        	<td>:</td>
        	<td ><h5><input type="text" name="nama" maxlength="1000" required="required"  value="<?php echo $data ['nama']; ?>" readonly = "true" /></h5></td>
        </tr>
		<tr hidden = "true">
        	<td><h5>ID Pembayaran</h5></td>
        	<td>:</td>
        	<td><h5><input type="text" name="id_pmbyrn" maxlength="1000" required="required" value="<?php echo $data['id_pmbyrn']; ?>" /></h5></td>
        </tr>
		<tr>
        	<td><h5>tanggal pembayaran</h5></td>
        	<td>:</td>
        	<td><h5><input type="text" name="tgl_pembayaran" id="tgl_pembayaran" maxlength="1000" required="required" value="<?php echo $data['tgl_pembayaran']; ?>" /></h5></td>
        </tr>
		<tr>
        	<td><h5>tagihan</h5></td>
        	<td>:</td>
        	<td><h5><input type="text" name="tagihan" maxlength="1000" value="<?php echo $data['tagihan']; ?>" /></h5></td>
        </tr>
    	<tr>
        	<td><h5>sisa</h5></td>
        	<td>:</td>
        	<td><h5><input type="text" name="sisa" maxlength="1000" required="required" value="<?php echo $data['sisa']; ?>" /></h5></td>
        </tr>
		<tr>
        	<td><h5>status</h5></td>
        	<td>:</td>
        	<td><h5><select name = "status" required="required">
			<option value = ""> PILIH Status </option>
			<option value = "Lunas"> Lunas</option>
			<option value = "Janji Bayar">Janji Bayar</option>
			<option value = "Cabut">Cabut</option>
			</select></h5></td>
        </tr>
		<tr>
        	<td><h5>Tanggal Tagihan</h5></td>
        	<td>:</td>
        	<td><h5><input  type= "text" name="tgl_tagihan" id="tgl_tagihan" maxlength="1000" value="<?php echo $data['tgl_tagihan']; ?>" /></h5></td>
        </tr>
    	<tr>
        	<td><h5>Alasan</h5></td>
        	<td>:</td>
        	<td><h5>
			<select name="id_alasan" id='id_alasan' required="required"> <option>--Pilih Alasan--</option>
				<?php 
				$fak = mysql_query("SELECT * FROM tb_alasan ORDER BY id_alasan");
				while($p=mysql_fetch_array($fak)){
				echo "<option value=\"$p[id_alasan]\">$p[alasan]</option>\n";
				}
				?>
		</select>
			</h5></td>
        </tr>
		<tr>
        	<td><h5>keterangan</h5></td>
        	<td>:</td>
        	<td><h5><input type="text" name="keterangan" maxlength="5000" value="<?php echo $data['keterangan']; ?>" /></h5></td>
        </tr>
    </tbody>
</table>
<center>
        	<td align="left" colspan="2">
			<input type="submit" name="submit" value="Simpan" />
			<a href='beranda.php'><input type="button" value="Batal"></a></td>
</center>
<?php
}
?>
</section>
</div>
</form>
</body>
</html>
