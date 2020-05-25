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


<div ><center><label><b><br>SD ISLAM AL MUMTAAZ</b></label></center></div>
<div >
<dl>
  <dt><b>I. Visi dan Misi Unit Sekolah Dasar Islam Al Mumtaaz</b></dt>
	  <dd>VISI</dd>
	  <dd>Menjadi penyelenggara pendidikan di Tingkat Sekolah Dasar, untuk mewujudkan Islam sebagai rahmatan lil’alamin.
	  </dd>
	  
	  <br><dd>MISI</dd>
	  <dd>
		<ul type=''>
			<li>Menyelenggarakan pendidikan inklusif dengan pendekatan belajar ramah fitrah (fitrah Ilahiah, belajar, perkembangan dan bakat) untuk usia untuk usia untuk usia 6-12 tahun.</li>
			<li>Menjadi tempat observasi penyelenggaraan Pendidikan Inklusif.</li>
			<li>Membangun pemahaman Al Qur’an melalui melalui penguatan Keagamaan, Kesejarahan dan Sains.</li>
			<li>Mengoptimalkan kemampuan tahsin, tahfizd dan Bahasa Arab.</li>
			<li>Membangun SDM guru yang ikhlas, berkepribadian Muslim (10 Muwashofat Tarbiyah), memenuhi standar kompetensi guru Al Mumtaaz, dan profesional.</li>
		</ul>
	  </dd>
	  
	  <br><dt><b>II. Struktur Organisasi Unit SD 1-4</b></dt>
<center>
<?php
$no = 1;
$result=$admin->tampil('profile','ket','sd');
$fetch=$result->fetch_object();

?>
<dd><img src="../../assets/uploads/organisasi/<?= $fetch->struktur; ?>"</dd>
</center>

</div>
<div class="table-container">

</div>