<?php 
include ('dbconfig.php');
?>
<html>
<head>
	
  <link rel="stylesheet" href="style.css">
  <title>PT. TELKOM</title>
  <!-- Modernizr -->
  <script src="js/libs/modernizr-2.6.2.min.js"></script>
  <!-- jQuery-->
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
 <header class="padded">
	  <div class="container">

        <div class="row" align="center">
          <div class="two half">
            <h3 class="logo"> Form Tambah Data Pelanggan</h3> 
          </div></header></body>
<body>
<center>
<form action="db_exec/tambahplgn_exec.php" method="post" id="id_form">
<table style="width:500px; height:20px" class="one" border="80" cellpadding="8" cellspacing="100" size = "30">
<tr hidden = "true">
<td>
<input type="text" name="id_plgn" size="50" hidden = "true"/>
</td>
</tr>
<tr>
    <td><h4>DP</h4></td>
    <td>:</td>
     <td><h4><input type="text" name="dp" required="required" /></h4></td>	
</tr>
<tr>
    <td><h4>SND</h4></td>
    <td>:</td>
     <td><h4><input type="text" name="snd" required="required" /></h4></td>	
</tr>
<tr>
    <td><h4>ND REF</h4></td>
    <td>:</td>
     <td><h4><input type="text" name="nd_ref" required="required" /></h4></td>	
</tr>
<tr>
    <td><h4>Nama</h4></td>
    <td>:</td>
     <td><h4><input type="text" name="nama" required="required" /></h4></td>	
</tr>
<tr>
<td><h4>Alamat</h4></td><td>:</td>
<td><h4><textarea name="alamat" cols="35" size="90"></textarea></h4></td>
</tr>
<tr>
    <td><h4>MultiKontak</h4></td>
    <td>:</td>
     <td><h4><input type="text" name="multikontak" required="required" ></h4></td>
	
</tr>
<tr>
    <td><h4>Sentral</h4></td>
    <td>:</td>
     <td><h4><input type="text" name="sentral" required="required"/></h4></td>	
</tr>
<tr>
    <td><h4>Segment</h4></td>
    <td>:</td>
     <td><h4><input type="text" name="segment" required="required" /></h4></td>	
</tr>
<tr>
<td><h4>Kategori</h4></td><td>:</td>
<td><h4><input type="text" name="kategori" required="required" /></h4></td>
</tr>
</table> 

<input type="submit" name="submit" value="Tambah" />
			<input type="button" value="Batal" onclick="history.back();" />
</form>
</center>
                        

                    </div>
             
            </section>
        </div>
    </body>
</html>