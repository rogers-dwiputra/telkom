<?php 
include('dbconfig.php');
?>
 
<html>
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

<body>
 <table id="datatables" class="display">
<thead>
<tr>
		
        
        	<td align="center">Nama Pelanggan</td>
        	<td align="center">Tanggal Pembayaran</td>
</tr>
</thead>
<tbody>
<?php
		$myquery="select tb_pembyrn.status, count(tb_pembyrn.id_pmbyrn) as jumlah from tb_pembyrn left join tb_alasan on tb_alasan.id_alasan=tb_pembyrn.id_alasan group by tb_pembyrn.status ";
		
		$datacari=mysql_query($myquery) or die (mysql_error());
		$no = 1;
		while ($data = mysql_fetch_array($datacari)) {
		?>
			
			<tr>
				<td align="center"><?php echo $data['status']; ?></td>
				<td align="center"><?php echo $data['jumlah']; ?></td>
			</tr>
		<?php 
			$no++;
		} 
		?>
		</tbody>
 </table>  
 </body>
</html> 