<?php 
//session_start();
$data=$_SESSION['edit_data'];
for($i=0;$i<count($data);$i++)
{
	extract($data[$i]);
	$id=$id;
	$nama=$nama;
	$ttl=$ttl;
	$alamat=$alamat;
	$no_hp=$no_hp;
	$e_mail=$e_mail;
	$jurusan=$jurusan;
	$tahun_masuk=$e_tahun_masuk;
	$tahun_lulus=$tahun_lulus;
}

?>
	

<div class="one half">	
	<form action="beranda.php?op=ed&&id=<?php echo $id;?>" method="post">
  <fieldset>
    <legend>Preview Data Mahasiswa</legend>
    <div class="row">
      <div class="one ">
        <label for="name">id</label>
        <input id="name" name="id" type="text" value="<?php echo $id;?>" disabled="disabled">
      </div>
      
    </div>
	
	<div class="row">
      <div class="one  ">
        <label for="name">Nama</label>
        <input id="name" name="nama" type="text" value="<?php echo $nama; ?>" disabled="disabled">
      </div>
      
    </div>
	
	
	<div class="row">
      <div class="one  ">
        <label for="name">ttl</label>
        <input id="name" name="ttl" type="text" value="<?php echo $ttl; ?>" disabled="disabled">
      </div>
      
    </div>
	
	<div class="row">
      <div class="one  ">
        <label for="name">alamat</label>
         <input id="name" name="alamat" type="text" value="<?php echo $alamat; ?>" disabled="disabled">
		
      </div>
      
    </div>
	
	<div class="row">
      <div class="one  ">
        <label for="name">no hp</label>
        <input id="name" name="no_hp" type="text" value="<?php echo $no_hp; ?>" disabled="disabled">
      </div>
      
    </div>
	
	<div class="row">
      <div class="one  ">
        <label for="name">E-mail</label>
        <input id="name" name="e_mail" type="text" value="<?php echo $e_mail; ?>" disabled="disabled">
      </div>
	   
    </div>
	<div class="row">
      <div class="one  ">
        <label for="name">Jurusan</label>
        <input id="name" name="jurusan" type="text" value="<?php echo $jurusan; ?>" disabled="disabled">
      </div>
	  
  </div>
		
		 </div>
	<div class="row">
      <div class="one  ">
        <label for="name">tahun Masuk</label>
        <input id="name" name="tahun_masuk" type="text" value="<?php echo $tahun_masuk; ?>" disabled="disabled">
      </div>
	  
  </div>
	 </div>
	<div class="row">
      <div class="one  ">
        <label for="name">Tahun Lulus</label>
        <input id="name" name="tahun_lulus" type="text" value="<?php echo $tahun_lulus; ?>" disabled="disabled">
      </div>
	  
  </div>
	
	<div class="row">
	<br>
	<div>
	<div class="one third">
	<input type="submit" value="Ubah" />
	</div>
	
	<div class="one fourth">
	<input type="submit" value="Kembali" onclick="back();"/>
	</div>
	</div>
	</div>
	
  </fieldset>
  </form>
  </div>
