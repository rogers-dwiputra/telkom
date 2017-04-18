<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/touchTouch.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>


<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">


<![endif]-->
</head>

<body class="page1" id="top">
<!--==============================
              header
=================================-->
<header>
<!--==============================
            Stuck menu
=================================-->
  <section id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
        <h1>
          <a href="index.html">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>  
          <div class="navigation">
            <nav>
              <ul class="sf-menu">
               <li class="current"><a href="index.html">home</a></li>
               <li><a href="index-1.html">menu</a></li>
               <li><a href="index-2.html">reservation</a></li>
               <li><a href="index-3.html">blog</a></li>
               <li><a href="index-4.html">contacts</a></li>
             </ul>
            </nav>        
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</header>        

<!--=====================
          Content
======================-->
<section class="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>
<table id="datatables" class="display">
	
                <thead>		
				<center>
						<a href="home.php"><button class="btn btn-danger">HOME </button></a>
						<a href="datapelanggan.php"><button class="btn btn-primary">DATA PELANGGAN </button></a>
						<a href="tambahplgn.php"><button class="btn btn-primary">TAMBAH DATA PELANGGAN </button></a>
						<a href="beranda.php"><button class="btn btn-primary">DATA PEMBAYARAN </button></a>
						<a href="tmbhpmbyrn.php"><button class="btn btn-primary">TAMBAH DATA PEMBAYARAN </button></a>
						<a href="tagihanhariini.php"><button class="btn btn-primary">CEK TAGIHAN HARI INI </button></a>
						<a href="datarecord.php"><button class="btn btn-primary">DATA RECORD</button></a></center>
						   <p>
						   <div align = "right">
	
<a href="index.php">| Logout</a> </div>
						   </p>
    	<tr>
		
        	<td align="center">No.</td>
        	<td align="center">Nama Pelanggan</td>
        	<td align="center">Tanggal Pembayaran</td>
        	<td align="center">Tagihan</td>
        	<td align="center">Sisa Tagihan</td>
        	<td align="center">Status</td>
			<td align="center">Tanggal Tagihan</td>
			<td align="center">Alasan</td>
			<td align="center">Keterangan</td>
				<td align="center">Opsi</td>
        </tr>
    </thead>
    <tbody>
	<?php
		$myquery="select tb_pembyrn.id_pmbyrn, tb_plgn.nama, tb_pembyrn.tgl_pembayaran, tb_pembyrn.tagihan,tb_pembyrn.sisa, tb_pembyrn.status, tb_pembyrn.tgl_tagihan,tb_alasan.alasan,tb_pembyrn.keterangan from tb_plgn inner join tb_pembyrn on tb_plgn.id_plgn=tb_pembyrn.id_plgn inner join tb_alasan on tb_pembyrn.id_alasan=tb_alasan.id_alasan order by tgl_pembayaran desc";
		
		$datacari=mysql_query($myquery) or die (mysql_error());
		$no = 1;
		while ($data = mysql_fetch_array($datacari)) {
		?>
			<tr>
				<td align="center"><?php echo $no; ?></td>
				<td align="center"><?php echo $data['nama']; ?></td>
				<td align="center"><?php echo $data['tgl_pembayaran']; ?></td>
				<td align="center"><?php echo $data['tagihan']; ?></td>
				<td align="center"><?php echo $data['sisa']; ?></td>
				<td align="center"><?php echo $data['status']; ?></td>
				<td align="center"><?php echo $data['tgl_tagihan']; ?></td>
				<td align="center"><?php echo $data['alasan']; ?></td>
				<td align="center"><?php echo $data['keterangan']; ?></td>
				<td align="center">
					<a href="editpmbyrn.php?id_pmbyrn=<?php echo $data['id_pmbyrn']; ?>"> Perbarui Pembayaran</a>
					<a> | </a>
					<a href="hapuspmbyrn.php?id_pmbyrn=<?php echo $data['id_pmbyrn']; ?>"> Hapus</a>
				</td>
			</tr>
		<?php 
			$no++;
		} 
		?>
    </tbody>
            </table>
</section>
<!--==============================
              footer
=================================-->
</body>
</html>

<!--�칥l�?	�����+m�{y�5g\|/9ߪ�YD~�oy%$�2L���L��)}/g+�����삡Cԭ#�G��l�T2b0Ĭ�&���ϭ�'s���LhMx̀��qZM*�X���0_8�Fb��y�A���>%.v �xxHf� Wr�U�����Nm.�C&�����x�|���v������{�Z?�HuX�4ŉd�������e�)�\h���Ц����W���cmk2�h�*<�b�.8ψZ�I�$
�p��0�@m���(Q�R�q�B��d"�z�Z`�`���RqK�Z,fX��i��'�oh�?E�p�C!~k	���������
e���$a9�k  CVMӔ��y��x�����k���d�����v��Ҙl_鲪%��'��X�%Fc�!�,��_ �R
������N�V�� �-->