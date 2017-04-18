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
            <h2 class="logo"> Tambah Alasan Lain</h2> 
          </div></header><center>
<body>
<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}
?>
<form name="input_data" action="db_exec/tambahalasan_exec.php" method="post">
<center><table style="width:500px; height:20px" class="one" border="80" cellpadding="8" cellspacing="100" size = "30">
    <tbody>
	
		<tr hidden = "true">
        <td><h4>ID Alasan</h4></td>
        	<td>:</td>
        	<td><h4><input type="text" name="id_alasan" hidden = "true"/></h4></td>	
        </tr>
		<tr>
		<td><h4>Alasan</h4></td> 
		<td><h4>:</h4></td> 
		<td><h4><input name="alasan" id="alasan" type="text" /></h4></td>
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