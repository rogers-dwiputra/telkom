<form id="myform">						
<?php
$query = "SELECT DISTINCT date_format(tgl_pembayaran, '%M %Y') as bulantahun  FROM tb_pembyrn";
$hasil = mysql_query($query);

echo '<p>Pilih Per Bulan</p>';
echo '<select id="bulantahun" name="bulantahun">';
while ($data = mysql_fetch_array($hasil))
{

 echo '<option value="'.$data['bulantahun'].'">'.$data['bulantahun'].'</option>';
}

echo '</select>';
?>
<input type="submit" class="btn btn-primary" id="submit1" value="Lihat Record"> 
<input type="submit" class="btn btn-primary" id="submit2" value="Lihat Grafik Perbulan">
</form>

<!-- menampilkan respons text dri record.php & grafikperbulan.php -->
<div id="success"></div>

<!-- jQuery -->
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		
<!-- Javascript -->
<script type="text/javascript">
	$(document).ready(function(){

		// jika submit1 di klik maka akan mengirim semua data yg ada di dlm form #myform ke record.php dgn method POST
		$('#submit1').click(function(){
			$.post("http://domain-anda.com/record.php", $("#myform").serialize(),  function(response) {
				<!-- menampilkan respons text dri record.php ke div#success -->
				$('#success').html(response);
			});
			return false;											 
		});

		// jika submit2 di klik maka akan mengirim semua data yg ada di dlm form #myform ke grafikperbulan.php dgn method POST
		$('#submit2').click(function(){
			$.post("http://domain-anda.com/grafikperbulan.php", $("#myform").serialize(),  function(response) {
				<!-- menampilkan respons text dri grafikperbulan.php ke div#success -->
				$('#success').html(response);
			});
			return false;											 
		});

	});
</script>