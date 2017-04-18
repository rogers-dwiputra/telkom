<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
if(isset($_POST['submit']))
$blnth = $_POST['bulantahun']; 
?>
<html>
<head>

<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.jqplot.css" />
<style>
  body {
	padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
  }
</style>
<script src="assets/js/jquery.js"></script>
<!-- load dulu plugin jquery.jqplotnya -->
<script language="javascript" type="text/javascript" src="assets/js/jquery.jqplot.js"></script>
<script language="javascript" type="text/javascript" src="assets/js/plugins/jqplot.pieRenderer.js"></script>
</head>
<body>
<div class="container">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				</a>
			<a class="brand" href="#">SENSUS PENDUDUK DESA CIKUYA</a>
			<div class="btn-group pull-right"></div>
			</div>
		</div>
	</div>
	<center>
		<?php

			// querynya kaya gini..kalo ada yang bisa simple..silahkan diubah :D
	
			$query_2 = mysql_query("SELECT * FROM  `tb_pembyrn` WHERE id_alasan = '2'");
			$query_3  = mysql_query("SELECT * FROM  `tb_pembyrn` WHERE id_alasan = '3'");
			$query_4 = mysql_query("SELECT * FROM  `tb_pembyrn` WHERE id_alasan = '4'");
			$query_5  = mysql_query("SELECT * FROM  `tb_pembyrn` WHERE id_alasan = '5'");

			// kita itung jumlah baris yang ada dari hasil query diatas
			
			$total2 = mysql_num_rows($query_2);
			$total3  = mysql_num_rows($query_3);
			$total4 = mysql_num_rows($query_4);
			$total5  = mysql_num_rows($query_5);
		?>
		<script class="code" type="text/javascript">
		$(document).ready(function(){
			// kita masukkan jumlah total ditas kemari
		    plot1 = $.jqplot('pie', [[['Tarif Mahal', <?php echo $total1; ?>],['2',<?php echo $total2; ?>],['3',<?php echo $total3; ?>],['4',<?php echo $total4; ?>],['5',<?php echo $total5; ?>]]], 
			{
				gridPadding: {top:0, bottom:38, left:0, right:0},
		      seriesDefaults:{renderer:$.jqplot.PieRenderer, trendline:{show:false}, rendererOptions: { padding: 20, showDataLabels: true}},
		                  legend:{
		                      show:true, 
		                      placement: 'outside', 
		                      rendererOptions: {
		                          numberRows: 5
		                      }, 
		                      location:'s',
		                      marginTop: '15px'
		                  }       
		    });
		});
		</script>
		<div id="pie" style="margin-top:20px; margin-left:20px; width:400px; height:400px;"></div>
	</center>

</div>
</body>
</html>
