<div class="judul">Form input</div>
<?php
//mengambil get yang dikirim dari ajax
$mengambilGet=$_GET['jumInput'];

//input untuk looping diahir nanti
echo "<input type='hidden' name='jumlah' value='$mengambilGet'/><br />";

//perulangan
for($i=0; $i<$mengambilGet; $i++)
{
    $ke=$i+1;
    echo "input ke-$ke<br />";
    echo "<input type='text' name='input$ke' placeholder='Input ke-$ke'/><br />";
}
echo "<input type='submit' value='Jalankan'/>";
?>