<?php
  session_start();
  if(!isset($_SESSION['nik'])){
    header('location:../../index.php');
} 
?>
<link rel="stylesheet" href="../../assets/css/style_user.css">

<div class="navbar">
  <a href="p_admin.php">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="u_yayasan.php">Upload Yayasan</a>
      <a href="u_prasekolah.php">Upload Pra Sekolah</a>
      <a href="u_ra.php">Upload RA</a>
      <a href="u_sd.php">Upload SD</a>
      <a href="u_smp.php">Upload SMP</a>
      <a href="u_lttq.php">Upload LLTQ</a>
    </div>
  </div>  
  
  <div class="dropdown">
    <button class="dropbtn">Pengguna 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tambah_pengguna.php">Tambah Pengguna</a>
      <a href="kelola_pengguna.php">Data Pengguna</a>
    </div>
  </div>  

  <div class="dropdown">
    <button class="dropbtn">File 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tambah_file.php">Upload File</a>
      <a href="kelola_file.php">Kelola File</a>
      <a href="tambah_link.php">Upload Link</a>
      <a href="kelola_link.php">Kelola Link</a>
    </div>
  </div>     

  <div class="dropdown">
    <button class="dropbtn">Modul 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tambah_modul.php">Upload Modul</a>
      <a href="kelola_modul.php">Kelola Modul</a>
    </div>
  </div>  
  <div class="dropdown">
    <button class="dropbtn">Forum 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tambah_forum.php">Tambah Forum</a>
      <a href="kelola_forum.php">Kelola Forum</a>
    </div>
  </div>  
  <a href="../../logout.php">Logout</a>
  <img src="../../assets/img/logo.png" style="width:200px;height:50px; float:right;">
</div>