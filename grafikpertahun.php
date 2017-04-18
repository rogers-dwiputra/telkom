<?php 
error_reporting( error_reporting() & ~E_NOTICE ).
include('dbconfig.php');
include('auth.php');
if(isset($_POST['submit']))
$blnth = $_POST['tahun']; 
?>
<?php
$sql = "SELECT tb_alasan.alasan, count(tb_pembyrn.id_alasan) as jumlah_alasan FROM tb_pembyrn right join tb_alasan on tb_alasan.id_alasan=tb_pembyrn.id_alasan WHERE date_format(tgl_pembayaran, '%Y') = '$blnth' group by tb_alasan.alasan ";
$query = mysql_query($sql) or die(mysql_error());
?>
<html>
    <head>
	
	<!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title>PT. Telkom</title>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/highcharts.js" type="text/javascript"></script>
        <script type="text/javascript">
            var chart1; // globally available
            $(document).ready(function() {
                chart1 = new Highcharts.Chart({
                    chart: {
                        renderTo: 'container',
                        type: 'column'
                    },   
                    title: {
                        text: 'Grafik Alasan keterlambatan Membayar Tagihan'
                    },
                    xAxis: {
                        categories: ['Jenis Alasan']
                    },
                    yAxis: {
                        title: {
                            text: 'Jumlah Alasan'
                        }
                    },
                    series:             
                        [
<?php
while ($ret = mysql_fetch_array($query)) {
    $alasan = $ret['alasan'];
    $jumlah_alasan = $ret['jumlah_alasan'];
    ?>
                        {
                            name: '<?php echo $alasan; ?>',
                            data: [<?php echo $jumlah_alasan; ?>]
                        },
<?php 
} 
?>
            ]
        });
    });	
        </script>
    </head>
    <body>
        <div id='container'></div>	
		<center><p>Tahun : <?php echo ("$blnth") ;?></p><center>
		<button class="btn btn-primary" onclick = "history.back()" />KEMBALI</button>
<a></a><a href="home.php"> <button class="btn btn-primary" />HOME</button></a>
		
    </body>
</html>