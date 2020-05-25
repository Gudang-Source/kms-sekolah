<?php
  session_start();
  if(!isset($_SESSION['nama'])){
    header('location:../../index.php');
} 
?>
<link rel="stylesheet" href="../../assets/css/style_user.css">

<div class="navbar">
  <a href="p_user.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Profil 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="profile_yayasan.php">Profile Yayasan</a>
      <a href="profile_prasekolah.php">Profile Pra Sekolah</a>
      <a href="profile_ra.php">Profile RA</a>
      <a href="profile_sd.php">Profile SD</a>
      <a href="profile_smp.php">Profile SMP</a>
      <a href="profile_lttq.php">Profile LTTQ</a>
    </div>
  </div>  
  <div class="dropdown">
    <button class="dropbtn">Forum 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tambah_forum.php">Tambah Forum</a>
      <a href="forum_kesentraan.php">Forum Kesentraan</a>
      <a href="forum_tarbiah.php">Forum Tarbiah</a>
      <a href="forum_parenting.php">Forum Parenting</a>
      <a href="forum_umum.php">Forum Umum</a>
    </div>
  </div>  
  <div class="dropdown">
    <button class="dropbtn">Modul 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="t_inklusif.php">Modul Inklusif</a>
      <a href="t_khusus.php">Modul Khusus</a>
      <a href="t_stimulus.php">Modul Stimulus Individu</a>
    </div>
  </div>     
  <div class="dropdown">
    <button class="dropbtn">Informasi 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="t_file.php">Informasi File</a>
      <a href="t_link.php">Informasi link</a>
    </div>
  </div>  
  <a href="../../logout.php">Logout</a>
  <img src="../../assets/img/logo.png" style="width:200px;height:50px; float:right;">
</div>