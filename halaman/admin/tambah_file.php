<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";
include "adm_header.php";
$admin = new Admin();

if(@$_POST['submit']){
  $subjek = $_POST['subjek'];
  $kategori = $_POST['kategori'];
  $keterangan = $_POST['keterangan'];

  $ext = explode(".", $_FILES['pilihfile']['name']);
  $size = $_FILES['pilihfile']['size'];
  $file = "file-".round(microtime(true)).".".end($ext);
  $sumber = $_FILES['pilihfile']['tmp_name'];
  $extension = end($ext);
  $upload = move_uploaded_file($sumber, "../../assets/uploads/files/".$file);

  $admin->upload('file',$subjek,$kategori,$keterangan,$file,$extension,$size);
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
<h2>Upload File</h2>
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
      <label for="pilihfile">Pilih File</label>
    </div>
    <div class="col-75">
      <input type="file" id="pilihfile" name="pilihfile"  required>
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="jk">Kategori</label>
    </div>
    <div class="col-75">
      <select id="kategori" name="kategori" required >
        <option value="">Pilih</option>
        <option value="tatatertib">Tata-tertib</option>
        <option value="kompetensi">Kompetensi</option>
        <option value="materi">Materi</option>
      </select>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="keterangan">Keterangan</label>
    </div>
    <div class="col-75">
      <textarea id="keterangan" name="keterangan" placeholder="Write something.." style="height:200px" required></textarea>
    </div>
  </div>
  <div class="row">
  <br>
    <input type="reset" name="reset" value="Reset">
    <input type="submit" name="submit" value="Submit">
    
  </div>  


  </form>
</div>

