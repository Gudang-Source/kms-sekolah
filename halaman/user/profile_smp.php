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


<div ><center><label><b><br>SMP ISLAM AL MUMTAAZ</b></label></center></div>
<div >
<dl>
  <dt><b>I. Visi dan Misi Unit Sekolah Menengah Pertama Islam Al Mumtaaz</b></dt>
	  <dd>VISI</dd>
	  <dd>Menjadi Penyelenggara pendidikan di Tingkat Menengah Pertama, yang bekerja dengan semangat keikhlasan untuk membangun generasi Robbani kader pemimpin masa depan yang akan mewujudkan peradaban Islam sebagai rahmatan lil’alamin.
	  </dd>
	  
	  <br><dd>MISI</dd>
	  <dd>
		<ul type=''>
			<li>Terselenggaranya Pendidikan inklusif berkesinambungan yang ramah fitrah (fitrah Ilahiah, belajar, perkembangan dan bakat), dengan pendekatan belajar berbasis proyek untuk siswa usia 13-15 tahun.</li>
			<li>Terbangunnya 10 Sifat Pribadi Muslim (Muwashofat Tarbiyah) pada diri peserta didik yaitu :
				<ul>
					<li>Akidah yang lurus</li>
					<li>Ibadah yang benar</li>
					<li>Akhlak yang kokoh</li>
					<li>Jasmani yang kuat</li>
					<li>Wawasan yang luas</li>
					<li>Mandiri</li>
					<li>Teratur urusannya</li>
					<li>Pandai menjaga waktu</li>
					<li>Bermanfaat bagi sesama</li>
				</ul>
			</li>
			
			<li>Terwujudnya Sifat Kepemimpinan dan kemampuan membangun kerjasama efektif pada siswa.</li>
			<li>Tercapainya kemampuan tahsin dan tahfizd dengan standar bacaan yang faseh dan bersanad.</li>
			<li>Terbangunnya pemahaman Siswa tentang makna dan pesan-pesan Al Qur’an.</li>
			<li>Terbangunnya pribadi yang mencintai dan mengamalkan Al Qur’an dalam kehidupan.</li>
			<li>Membangun SDM guru yang ikhlas, berkepribadian Muslim (10 Muwashofat Tarbiyah), memenuhi standar kompetensi guru Al Mumtaaz, dan profesional.</li>
		</ul>
	  </dd>
	  
	  <br><dt><b>II. Struktur Organisasi Unit SMP 5-8</b></dt>
          <center>
<?php
$no = 1;
$result=$admin->tampil('profile','ket','smp');
$fetch=$result->fetch_object();

?>
		<dd><img src="../../assets/uploads/organisasi/<?= $fetch->struktur; ?>"</dd>
        </center>

</div>
<div class="table-container">

</div>