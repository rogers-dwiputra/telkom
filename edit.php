  <?php
  include ('dbconfig.php');
  
  ?>
<!DOCTYPE html>
<head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
<div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
            <h1 style="text-align:center">Data Pembayaran</h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
         <div id="login" class="animate form">
<?php 
$id_plgn = $_GET['id_plgn'];
$query = mysql_query("select id_plgn, tgl_pembayaran, tagihan, sisa, status,tgl_tagihan, alasan, keterangan from tb_pembyrn where id_plgn = '$id_plgn'") 
or die(mysql_error());
while ($data = mysql_fetch_array($query)){
?>

<form action="update.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Id Pelanggan</td>
        	<td>:</td>
        	<td><input type="text" name="id_plgn" maxlength="100" required="required" value="<?php echo $data['id_plgn']; ?>" readonly = "true"/></td>
        </tr>
    	<tr>
        	<td>Tanggal Pembayaran</td>
        	<td>:</td>
        	<td><input type="text" name="tgl_pmbyrn" maxlength="100" required="required" value="<?php echo $data['tgl_pembayaran']; ?>" /></td>
        </tr>
		<tr>
        	<td>tagihan</td>
        	<td>:</td>
        	<td><input type="text" name="tagihan" maxlength="100" required="required" value="<?php echo $data['tagihan']; ?>" /></td>
        </tr>
    	<tr>
        	<td>sisa</td>
        	<td>:</td>
        	<td><input type="text" name="sisa" maxlength="100" required="required" value="<?php echo $data['sisa']; ?>" /></td>
        </tr>
    	<tr>
        	<td>status</td>
        	<td>:</td>
        	<td><input type="text" name="status" maxlength="100" required="required" value="<?php echo $data['status']; ?>" /></td>
        </tr>
		<tr>
        	<td>Tanggal Tagihan</td>
        	<td>:</td>
        	<td><input type="text" name="tgl_tagihan" maxlength="100" required="required" value="<?php echo $data['tgl_tagihan']; ?>" /></td>
        </tr>
		<tr>
        	<td>alasan</td>
        	<td>:</td>
        	<td><input type="text" name="alasan" maxlength="100" required="required" value="<?php echo $data['alasan']; ?>" /></td>
        </tr>
		<tr>
        	<td>Keterangan</td>
        	<td>:</td>
        	<td><input type="text" name="keterangan" maxlength="100" required="required" value="<?php echo $data['keterangan']; ?>" /></td>
        </tr>		
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /><a href='beranda.php'><input type="button" value="Kembali"></a></td> 
        </tr>
    </tbody>
</table>
<?php
}
?>
</section>
</div>
</form>
</body>
</html>
