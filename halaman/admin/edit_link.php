<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";

$admin = new Admin();


if(@$_GET['ubah']){
  $id= $_GET['ubah'];
  $result=$admin->tampil('link','id',$id);
  $fetch=$result->fetch_object();
}

include "adm_header.php";
if(isset($_POST['submit'])){
    $link =$_POST['link'];
    $judul =$_POST['judul'];
    $jenis =$_POST['jenis'];
    $ket =$_POST['ket'];
 
    $admin->edit_link($id,$link,$judul,$jenis,$ket);
}


?>
<br>
<br><br><br>
<link rel="stylesheet" href="../../assets/css/style_admin.css">


<div class="container">
<center>
<h2>Edit Link</h2>
</center>
  <form action="" method="post">
  <div class="row">
    <div class="col-25">
      <label for="link">Link</label>
    </div>
    <div class="col-75">
      <input type="text" id="link" name="link" value="<?= $fetch->link;?>" placeholder="Masukan link" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="judul">Judul Article</label>
    </div>
    <div class="col-75">
      <input type="text" id="judul" name="judul" value="<?= $fetch->judul;?>" placeholder="Masukan judul" required >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="jenis">Jenis Link</label>
    </div>
    <div class="col-75">
      <select id="jenis" name="jenis" required>
        <option value="">Pilih</option>
        <option value="Video" <?php if( $fetch->jenis=='Video') echo "selected";?> >Video</option>
        <option value="Artikel" <?php if( $fetch->jenis=='Artikel') echo "selected";?> >Artikel</option>
        <option value="Media Sosial" <?php if( $fetch->jenis=='Media Sosial') echo "selected";?> >Media Sosial</option>
        <option value="Lainnya" <?php if( $fetch->jenis=='Lainnya') echo "selected";?> >Lainya</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="ket">Keterangan</label>
    </div>
    <div class="col-75">
      <textarea id="ket" name="ket"  placeholder="Write something.." style="height:200px" required><?= $fetch->ket;?></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" name="submit" value="Mutahir">

  </div>


  </form>
</div>


