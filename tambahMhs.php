<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1 style="text-align:center">Database <span>Anggota SMK N 1 Magelang</span></h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="db_exec/tambahMhs_exec.php" method="post">
<table>
<tr>
<td>Nama</td><td>:</td>
<td><input type="text" name="nama"/></td>
</tr>
<tr>
<td>TTL</td><td>:</td>
<td><input type="text" name="ttl"/></td>
</tr>
<tr>
<td>Alamat</td><td>:</td>
<td><input type="text" name="alamat"/></td>
</tr>
<tr>
<td>No HP</td><td>:</td>
<td><input type="text" name="no_hp"/></td>
</tr>
<tr>
<td>E-mail</td><td>:</td>
<td><input type="text" name="e_mail"/></td>
</tr>
<tr>
	<label for="name"><td>Jurusan</td></label>
	<td>:</td>
	<td><select name = "id_jurusan">
                                <?php
                                include 'dbconfig.php';
 
                                $query = "SELECT * FROM id_jurusan";
                                $result = mysql_query($query);
 
                                while ($rows = mysql_fetch_array($result)) {
                                echo "<option value=$rows[id_jurusan]>$rows[jurusan]</option>";
                                }
                                ?>
	</select></td>
<tr>
<td>Tahun Masuk</td><td>:</td>
<td><input type="text" name="tahun_masuk"/></td>
</tr>
<tr>
<td>Tahun Lulus</td><td>:</td>
<td><input type="text" name="tahun_lulus"/></td>
</tr>
</table>
<input type="submit" value="Tambah Alumni"/>
<input type="button" value="Kembali" onclick="history.back();" />
</form>
                        </div>

                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>