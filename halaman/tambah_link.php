<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";

$admin = new Admin();

include "adm_header.php";
if(isset($_POST['submit'])){
    $link =$_POST['link'];
    $judul =$_POST['judul'];
    $jenis =$_POST['jenis'];
    $ket =$_POST['ket'];
  
    $admin->upload_link('link',$link,$judul,$jenis,$ket);
}

?>
<br>
<br><br><br>
<link rel="stylesheet" href="../../assets/css/style_admin.css">


<div class="container">
<center>
<h2>Tambahkan Link</h2>
</center>
  <form action="" method="post">
  <div class="row">
    <div class="col-25">
      <label for="link">Link</label>
    </div>
    <div class="col-75">
      <input type="text" id="link" name="link" placeholder="Masukan link" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="judul">Judul Article</label>
    </div>
    <div class="col-75">
      <input type="text" id="judul" name="judul" placeholder="Masukan judul" required >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="jenis">Jenis Link</label>
    </div>
    <div class="col-75">
      <select id="jenis" name="jenis" required>
        <option value="">Pilih</option>
        <option value="Video">Video</option>
        <option value="Artikel">Artikel</option>
        <option value="Media Sosial">Media Sosial</option>
        <option value="Lainnya">Lainya</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="ket">Keterangan</label>
    </div>
    <div class="col-75">
      <textarea id="ket" name="ket" placeholder="Write something.." style="height:200px" required></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" name="submit" value="Submit">

  </div>


  </form>
</div>


