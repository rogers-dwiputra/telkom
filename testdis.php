<?php
mysql_connect("localhost", "root", "");
mysql_select_db("telkom");
?>
<?php
$query = "SELECT DISTINCT date_format(tgl_pembayaran, '%M %Y') as bulantahun  FROM tb_pembyrn";
$hasil = mysql_query($query);

echo '<form method="POST" action="data.php">';
echo '<select name="bulantahun">';
while ($data = mysql_fetch_array($hasil))
{
   echo '<option value="'.$data['bulantahun'].'">'.$data['bulantahun'].'</option>';
}
echo '<input type="submit" name="submit" value="submit"></select>';
echo '</form>';

?>
