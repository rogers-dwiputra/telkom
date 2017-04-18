<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
?>
<!DOCTYPE html>
<html>
<head>

  <title>PT TELKOM</title>
  <link rel="stylesheet" href="css/demo.css" type="text/css">
	<style type="text/css">
	/* style untuk link popup */
	a.popup-link {
		padding:17px 0;
		text-align: center;
		margin:10% auto;
		position: relative;
		width: 300px;
		color: #fff;
		text-decoration: none;
		background-color: #FFBA00;
		border-radius: 3px;
		box-shadow: 0 5px 0px 0px #eea900;
		display: block;
	}
	a.popup-link:hover {
		background-color: #ff9900;
		box-shadow: 0 3px 0px 0px #eea900;
		-webkit-transition:all 1s;
		transition:all 1s;
	}
	/* end link popup*/
	/* animasi popup */

	@-webkit-keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	@-moz-keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	@keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	/* end animasi popup */
	/*style untuk popup */	
	#popup {
		background-color: rgba(0,0,0,0.8);
		position: fixed;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		-webkit-animation:autopopup 2s;
		-moz-animation:autopopup 2s;
		animation:autopopup 2s;
	}
	#popup:target {
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
		opacity: 0;
		visibility: hidden;
	}

	@media (min-width: 768px){
		.popup-container {
			width:600px;
		}
	}
	@media (max-width: 767px){
		.popup-container {
			width:100%;
		}
	}
	.popup-container {
		position: relative;
		margin:7% auto;
		padding:30px 50px;
		background-color: #fafafa;
		color:#333;
		border-radius: 3px;
	}

	a.popup-close {
		position: absolute;
		top:3px;
		right:3px;
		background-color: #333;
		padding:7px 10px;
		font-size: 20px;
		text-decoration: none;
		line-height: 1;
		color:#fff;
	}
	/* end style popup */

	/* style untuk isi popup */
	.popup-form {
		margin:10px auto;
	}
		.popup-form h2 {
			margin-bottom: 5px;
			font-size: 37px;
			text-transform: uppercase;
		}
		.popup-form .input-group {
			margin:10px auto;
		}
			.popup-form .input-group input {
				padding:17px;
				text-align: center;
				margin-bottom: 10px;
				border-radius:3px;
				font-size: 16px; 
				display: block;
				width: 100%;
			}
			.popup-form .input-group input:focus {
				outline-color:#FB8833; 
			}
			.popup-form .input-group input[type="email"] {
				border:0px;
				position: relative;
			}
			.popup-form .input-group input[type="submit"] {
				background-color: #FB8833;
				color: #fff;
				border: 0;
				cursor: pointer;
			}
			.popup-form .input-group input[type="submit"]:focus {
				box-shadow: inset 0 3px 7px 3px #ea7722;
			}
	/* end style isi popup */

	</style>
	 <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

  <link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
  <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
  <script src="js/superfish.js" type="text/javascript"></script>     
        
    <script type="text/javascript">
		jQuery(document).ready(function($){

/***** JQUERY MENU SLIDE EFFECT *****/							    
if (jQuery().superfish) {
		jQuery('ul.menu').superfish({
			delay: 230,
			animation: {opacity:'show', height:'show'},
			speed: 'fast',
			autoArrows: false,
			dropShadows: false
		}); 
	
	}	
	
	});  
/***** END JQUERY MENU SLIDE EFFECT *****/	
	</script>
	<script type="javascript">
function back(){
window.href.location="http://localhost/telkom/index.php";
}
</script>
</head>
<p></p>
 
 <div align = "right"> 
 <a href="http://localhost/telkom/logout.php"><strong><b>Logout</b> </strong>|</a>
  <a> 
	<?php 

/* script menentukan hari */  
 $array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 $hr = $array_hr[date('N')];

/* script menentukan tanggal */   
$tgl= date('j');

/* script menentukan bulan */
  $array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
  $bln = $array_bln[date('n')];

/* script menentukan tahun */ 
$thn = date('Y');
/* script perintah keluaran*/ 
 echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " " ;
 ?></a> 
 </div>
 
<body style="background-color:white">

<div id="menu-holder">
       <div>
<ul class="menu">
<li><a href="home.php">HOME</a></li>
<li><a href="datapelanggan.php">PELANGGAN</a>
<ul>
<li><a href="tambahplgn.php">TAMBAH PELANGGAN</a></li>
</ul>
</li>
<li><a href="beranda.php">PEMBAYARAN</a>
<ul>
<li><a href="tmbhpmbyrn.php">TAMBAH PEMBAYARAN</a></li>
<li><a href="tagihanhariini.php">CEK TAGIHAN HARI INI</a></li>
</ul>
</li>
<li><a href="datarecord.php">DATA RECORD</a></li>

</ul>

</div>
  <div id="corner-left">Corner left</div>
  <div id="corner-right">Corner right</div>
  
<center><a>
          <img style="
			width: 450px; 
			height: 300px;"src="1.jpg"></a></center>
<marquee direction="left" scrollamount="5" align="center">
<center><h3>SELAMAT DATANG DI SISTEM INFORMASI PELANGGAN PT. TELKOM</h3><center></marquee>

<p id="home"></p>


</div><!--end menu-holder-->

<div class="popup-wrapper" id="popup">
	<div class="popup-container">

		<!-- Konten popup, silahkan ganti sesuai kebutughan -->
		<script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link rel="stylesheet" href="css/TableCSSCode.css" type="text/css" />
        <style type="text/css">
            @import "media/css/demo_table_jui.css";
            @import "media/themes/sunny/jquery-ui.css";
        </style>      

        <script src="media/js/jquery.js"></script>
        <script src="media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
        </script>
		
		<form class="popup-form">
			<h4>Daftar tagihan Hari ini : </h4>
			
			<div class="input-group">
	<table id="datatables" class="display">
	<thead>
	
    	<tr>
		<td align="center">No</td>
        	<td align="center">Nama Pelanggan</td>
        	<td align="center">Sisa Tagihan</td>
        </tr>
    </thead>

<?php
$q = mysql_query(" SELECT b.tgl_tagihan, a.nama, a.alamat, a.multikontak, b.sisa FROM tb_pembyrn b inner join tb_plgn a on a.id_plgn=b.id_plgn");
//melakukan query memilih field nama dan tgl dari tabel 
echo("<center><br>");
while ($r=mysql_fetch_array($q)) { 

$pecah = explode("-",$r['tgl_tagihan']);//memecah string menjadi elemen array
$tgl_skrg = date("d");//menampilkan hari saat ini
$bln_skrg = date("m");//menampilkan bulan saat ini
if (($bln_skrg == $pecah[1]) && ($tgl_skrg == $pecah[2])) 
{
?>
<?php $no++?>

<tr>
<td align = "center"><?php echo $no ?> </td>
<td align = "center"><?php echo("".$r['nama']."<br>"); ?> </td>
<td align = "center"><?php echo("".$r['sisa']."<br>");?> </td> </tr>
<?php
}
else {
echo("");
}
}
?>

</table>
				
			</div>
		</form>
		
		<a class="popup-close" href="#popup"> X </a>
		<center>
				  <a href="tagihanhariini.php"><button class="btn btn-primary ">Klik Disini Untuk lihat Detail</button></a>
				</center>
	</div>
	
		
</div>

</body>

</html>
<!--6ǐ¬ZOͶ۲<e򔞠̥[DŬ'!ϛ}eԾRVȤ򫫼kᬛڎS	ԗnӑ`̥ټdᐴQ񣋎kɄ$b?|Ø𐘥b򐰞sɲ¯ڮ(z🛛B򡓈|y."§h)Ӧкϕ瞷>񵬂U(:憝𣌾&Dé߼|ϱ~̞ĽKţ'jېصRjƄͦؾ؞񮉑ֺե٠`4"{LgŇҝӸUy񪚴i-ܢܔ򭧫񶥑Zȗ٧Cġ;ҠJ·7ɝ"ͱ߾fr;ơܟҵМؿ8̓z<cӎhɍB!XEWջ߅金ތމ V责Րŀԫ͚:fݔiɲφՠ&vꏠ֢Ry󅕢֢֢ؿM)˕ْb ֢-->