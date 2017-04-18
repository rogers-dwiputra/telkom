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
          
            <h3 class="logo">Form Tambah Data Pembayaran</h3>
			
          </div></header></center>
<body>
<form name="input_data" action="db_exec/tambahpmbyrn_exec.php" method="post">
<center><table style="width:500px; height:20px" class="one" border="80" cellpadding="8" cellspacing="100" size = "30">
    <tbody>
		
    	<tr>
        	<label for="text"> <td> <h4>Nama Pelanggan </h4></td>   </label>
			<td>:</td>
			<td><h4>
			<select name='id_plgn'><option>PILIH NAMA</option>
				<?php $qDistHP = "SELECT * FROM tb_plgn"; // 
				$qDist = mysql_query($qDistHP); //
				while ($rowDist = mysql_fetch_object($qDist)) {?>
					<option value="<?php echo $rowDist -> id_plgn?>"><?php echo $rowDist -> nama ?></option>
				<?php } ?>
		</select><p></p><a href="tambahplgn.php">Tambah Pelanggan</a></h4>
		</td>
		</tr>
		<tr hidden = "true">
        <td><h4>ID Pembayaran</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="id_pmbyrn" hidden = "true"/></h4></td>	
        </tr>
		<tr>
		<td><h4>Tanggal Pembayaran</h4></td> 
		<td><h4>:</h4></td> 
		<td><h4><input name="tgl_pembayaran" id="tgl_pembayaran" required="required" type="text" /></h4></td>
		</tr>
		<tr>
        <td><h4>Tagihan</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="tagihan" required="required" /></h4></td>	
        </tr>
		<tr>
        <td><h4>Sisa Tagihan</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="sisa" required="required" /></h4></td>	
        </tr>
    	<tr>
			<td><h4>Status</h4></td>
        	<td>:</td>
			<td><h4><select name = "status" required="required">
			<option value = ""> PILIH STATUS </option>
			<option value = "Lunas">LUNAS</option>
			<option value = "Janji Bayar">Janji Bayar</option>
			<option value = "Tidak Digunakan lagi">Cabut / Tidak Digunakan Lagi</option>
			</select></td>
			</h4></td>
		</td>
        </tr>
    	<tr>
		<td><h4>Tanggal Tagihan Akan Datang</h4></td> 
		<td><h4>:</h4></td> 
		<td><h4><input name="tgl_tagihan" id="tgl_tagihan" type="text" /></h4></td>
		</tr>
		<tr>
        	<td><h4>Alasan</h4></td>
        	<td>:</td>
        	<td><h4>
			<select name="id_alasan" id='id_alasan' required="required"> <option value="">Pilih ALASAN</option>
				<?php 
				$fak = mysql_query("SELECT * FROM tb_alasan ORDER BY id_alasan");
				while($p=mysql_fetch_array($fak)){
				echo "<option value=\"$p[id_alasan]\">$p[alasan]</option>\n";
				}
				?>
		</select><p></p><a href="tmbhalasan.php">Tambah Alasan Lain</a>
			</td>
			</h4></td>
        </tr>
		<tr>
		<td><h4>Keterangan Alasan</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="keterangan" required="required" /></h4></td>
		</tr>
    </tbody>
	
</table>
		<tr>
        	<td colspan="1">
			<input type="submit" name="submit" value="Simpan" />
			
			<input type="button" value="Batal" onclick="history.back();" />
			</td>
        </tr></center>
</form>
</body>
</html>