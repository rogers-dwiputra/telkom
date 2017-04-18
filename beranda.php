<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
?>
<?php session_start();
?>
<!DOCTYPE html>
<html>
<link href="styles/examples-offline.css" rel="stylesheet" />
      <link href="styles/kendo.common.min.css" rel="stylesheet" />
      <link href="styles/kendo.default.min.css" rel="stylesheet" />
    <head>
	<link rel="stylesheet" type="text/css" href="css/superfish.css">
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript">
      $(document).ready(function(){
			   jQuery('ul.sf-menu').superfish();
		  });
    </script>
        <title>PT. TELKOM</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <style type="text/css">
            @import "media/css/demo_table_jui.css";
            @import "media/themes/sunny/jquery-ui.css";
        </style>      

        <script src="media/js/jquery.js"></script>
        <script src="media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $('#datatables').dataTable({
					     "oLanguage": {
						      "sLengthMenu": "Tampilkan _MENU_ data per halaman",
						      "sSearch": "Pencarian: ", 
						      "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
						      "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
						      "sInfoEmpty": " <align = 'left'> Menampilkan 0 s/d 0 dari 0 data",
						      "sInfoFiltered": "(di filter dari _MAX_ total data)",
						      "oPaginate": {
						          "sFirst": "<<",
						          "sLast": ">>", 
						          "sPrevious": "<", 
						          "sNext": ">"
					       }
				      },
              "sPaginationType":"full_numbers",
              "bJQueryUI":true
            });
          })    
        </script>
    </head>
    <body style="background-color:dalmation">
	
<p>
 <div class="row" align="center" >
          <img style="
			width: 150px; 
			height: 100px;"src="1.jpg"></p>



 <header class="padded">
      
	  <div class="container">
		 
     
								   <div class="onehalf"> 
								   <p class="small double pad-top no-pad-small-tablet align-right align-left-small-tablet"></div>
									


<html>
<nav role="navigation" class="nav gap-top">
     
		</nav>
    <table id="datatables" class="display">
	
                <thead>		
				<center><div id="example" class="k-content">
						<a href="home.php"><button class="btn btn-primary">HOME </button></a>
						<a href="datapelanggan.php"><button class="btn btn-primary">DATA PELANGGAN </button></a>
						
						<a href="beranda.php"><button class="btn btn-primary">DATA PEMBAYARAN </button></a>
							<a href="tagihanhariini.php"><button class="btn btn-primary">TAGIHAN HARI INI </button></a>
						<a href="datarecord.php"><button class="btn btn-primary">DATA RECORD</button></a>
					</div></center>
					
						     <marquee direction="left" scrollamount="5" align="center"><h4>DATA PEMBAYARAN PELANGGAN PT. TELKOM</h4></marquee>
						   <p>
						   <div align = "right"> <a href="tmbhpmbyrn.php">Tambah Data Pembayaran |</a>
	
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

 ?><a href="index.php">| Logout</a> </div>
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
    </body>
	<div class="css_center" align="center">
					 Designed and Created by Aziz Masruhan, Sistem Komputer Undip to PT. TELKOM &copy; 2015<br>

				</div>
</html>
<!--GʇץV׻3يKLӣҵeە񻸉%3vũ tӒɩiʽ|ߌB~ʁ𸿦N󢵦ŉMw֧n+՞汳n埱ݥ(Z𯫪ڐQwѣ0ݍL̄㪏ˠyTzقN@ݿؚ͵%Ӯ俉ѰyЌkڅKS秾ᭉē᱗ռV2*^FĳN8ϾՔƜ𨕄ΗkːG򈡘ڨA޸9Ƅ򇭵Eť"=óͧ칃˔.񼺜LP̮ʿ۩͏KVby	ѧ𰟀󀗊ŴӰ%RѝD󂴄ܭ֮yÕ:̢ʩŧ"˲٭*պf֋ںվjÖ̈ՇӘν_
򩪹I𿫮kmْT|B籺qvŎ8jɥɛMD_ㅠķޛkĺٮ+ʻ볋ʻڻ񼝷p)𣘻Nu-Ӌ5ԊE$2춳JmY|߆޵0T򌣿|*]ƏѸۥ{IÂ܂`򌱱ԍQA/Ҡ⸁R"仅⸁⸁⸁̥M0Uࣸ ⸁-->