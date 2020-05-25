<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";
include "usr_header.php";
$admin = new Admin();


?>
<link rel="stylesheet" href="../../assets/css/table.css">
<style>
body{font-family:arial; text-align:justify;}
</style>

<br>
<br>
<br><br>
<div class="main">


<div ><center><label><b><br>PRA SEKOLAH AL MUMTAAZ</b></label></center></div>
<div >
<dl>
  <dt><b>I. Visi dan Misi Unit Pra Sekolah</b></dt>
	  <dd>VISI</dd>
	  <dd>Menjadi penyelenggara pendidikan di tingkat Usia Dini, untuk mewujudkan Islam sebagai rahmatan lil’alamin.</dd>
	  
	  <br><dd>MISI</dd>
	  <dd>
		<ul type=''>
			<li>Menyelenggarakan pendidikan inklusif dengan pendekatan belajar ramah fitrah  (fitrah Ilahiah, belajar, perkembangan dan bakat) untuk usia 2-4 tahun.</li>
			<li>Menjadi pusat belajar metode sentra.</li>
			<li>Mengenalkan Al Qur’an dan menyiapkan kemampuan tahsin tahfidz</li>
			<li>Membangun SDM guru yang ikhlas, berkepribadian Muslim (10 Muwashofat Tarbiyah), memenuhi standar kompetensi guru Al Mumtaaz, dan profesional.</li>
		</ul>
	  </dd>
	  
	  <br><dt><b>II. Struktur Organisasi Unit Pra Sekolah</b></dt>
      <center>
<?php
$no = 1;
$result=$admin->tampil('profile','ket','pra sekolah');
$fetch=$result->fetch_object();

?>
		<dd><img src="../../assets/uploads/organisasi/<?= $fetch->struktur; ?>"</dd>
        </center>
</div>
<div class="table-container">

</div>