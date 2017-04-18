<?php 
include ('dbconfig.php');
?>
<html>
  <head>
    <link rel="stylesheet" href="main.css" type="text/css" />
    <script type="text/javascript" src="jquery-1.4.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
	    $(':input:not([type="submit"])').each(function() {
	        $(this).focus(function() {
	            $(this).parent().addClass('hilite');
	        }).blur(function() {
	            $(this).parent().removeClass('hilite');});
	    });
      });  
    </script>
        
    <style>   
      .hilite{
	       background-color: #FDECB2;
      }
    </style>                                
  </head>
  <body >
  <div>
  <h2 class="logo" align="center"> Form Tambah Data Pelanggan</h2> </div>
	<center>
    <div class="demo" style="width: 300px; ">
	<form action="db_exec/tambahplgn_exec.php" method="post" align="left" >
	<input type="text" name="id_plgn"  hidden = "true"/>
	   <div><label for="dp">DP</label>:
		      <input type="text" name="dp" id="dp">
	   </div>
	   <div><label for="snd">SND</label>:
		      <input type="text" name="snd" id="snd">
	   </div>
	   <div><label for="nd_ref">ND REF</label>:
		      <input type="text" name="nd_ref" id="nd_ref">
	   </div>
	   <div><label for="nama">Nama</label>:
	   <input type="text" name="nama" required="required"  />
	   </div>
	   <div><label for="alamat">Alamat</label>:
		      <textarea id="alamat" name="alamat" ></textarea>	
	   </div>
	   <div><label for="multikontak">Multikontak</label>:
	   <input type="text" name="multikontak" required="required"/>
	   </div>
	   <div><label for="sentral">Sentral</label>:
		      <input id="sentral" name="sentral" required="sentral">
	   </div>
	   <div><label for="segment">Segment</label>:
		      <input id="segment" name="segment" required="required">
	   </div>
	   <div><label for="kategori">Kategori</label>:
		      <input id="kategori" name="kategori"  required="required">	
	   </div><div></div>
	   
	   <input type="submit" value="Batal" onclick="history.back();" />
	   <input type="submit" value="Simpan">
    </form>
    </div>
	
  </body></center>
</html>

<!--⺾c.)Rb݄ȒW[ԭ˼ȋW𬬕岗y½.ܻrҊխ2魡里R̳)֕ω箏/%ߨ턣޴c6֑뾩ΥJ5ܸiĶ٧#if7
ˈсȯ)ٛ֕)򺵦ưCնֵ͛񄤺𡟊̱c-GۏQ].^/%޷Ӻ򃭚򗸨q򭃇lQEƨp!𺓴չŧĜ@V
Ȉڤ!Q02+ϊbԆa 𜦎&鹧̄Cw㮋ǳKoʓ󨑤񬃊v
|瑫̊/],ð֩򯻝ퟹ񸆒%ó٣ss%ݷ񇦓ˡδO᫫َ̣`kCܑ3 踁R$仅踁踁踁ʥMe0U6ḁ 踁-->