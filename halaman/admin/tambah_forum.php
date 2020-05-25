<?php
// session_start();
include "../../class/class_database.php";
include "../../class/class_admin.php";
include "adm_header.php";
$admin = new Admin();
$nama=$_SESSION['nama'];

if(@$_POST['submit']){
  $subjek = $_POST['subjek'];
  $pilihfile = @$_POST['pilihfile'];
  $kategori = $_POST['kategori'];
  $konten = $_POST['konten'];

  $ext = explode(".", $_FILES['pilihfile']['name']);
  $size = $_FILES['pilihfile']['size'];
  $file = "file-".round(microtime(true)).".".end($ext);
  $sumber = $_FILES['pilihfile']['tmp_name'];
  $extension = end($ext);
  $upload = move_uploaded_file($sumber, "../../assets/uploads/forum/".$file);


  $admin->open_forum('forum',$subjek,$file,$extension,$size,$kategori,$nama,$konten);
}
?>

<link rel="stylesheet" href="../../assets/css/style_admin.css">

<style>
.container{
    border: 1px solid #eaeaea;
    background-color:white;
    position:relative;
    width:78%;
    margin: 0px auto;
    top:10px;
    font-family:sans-serif
}
.main{
    border:1px;
    margin:10px;
}
</style>
<br><br><br>
<div class="container">
<center>
<h2>Tambah Forum</h2>
</center>
<form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="subjek">Subjek</label>
    </div>
    <div class="col-75">
      <input type="text" id="subjek" name="subjek" required >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="pilihfile">Pilih Gambar</label>
    </div>
    <div class="col-75">
      <input type="file" id="pilihfile" name="pilihfile" required >
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="kategori">Kategori</label>
    </div>
    <div class="col-75">
      <select id="kategori" name="kategori" required>
        <option value="">Pilih</option>
        <option value="kesentraan">Kesentraan</option>
        <option value="tarbiah">Tarbiah</option>
        <option value="parenting">Parenting</option>
        <option value="umum">Umum</option>
      </select>
    </div>  
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="konten">Konten</label>
    </div>
    <div class="col-75">
      <textarea id="konten" name="konten" placeholder="Write something.." style="height:200px" required></textarea>
    </div>
  </div>
  <div class="row">
  <br>
    <input type="reset" name="reset" value="Reset">
    <input type="submit" name="submit" value="Submit">
    
  </div>  


  </form>
</div>

