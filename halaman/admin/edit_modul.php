<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";

$admin = new Admin();

// include "adm_header.php";

if(@$_GET['ubah']){
    $id= $_GET['ubah'];
    $result=$admin->tampil('modul','id',$id);
    $fetch=$result->fetch_object();
  }

  if(isset($_POST['submit'])){
    $judul=$_POST['judul'];  
    $modul=$_POST['modul'];  
    $ket=$_POST['ket'];  
    $pilihfile=@$_POST['pilihfile'];  

      
  $ext = explode(".", $_FILES['pilihfile']['name']);
  $size = $_FILES['pilihfile']['size'];

  if($size ==""){
    // echo "Tidakedit file";
    $admin->edit_modul_lama($id,$judul,$modul,$ket);

  }else{
    $file = "file-".round(microtime(true)).".".end($ext);
    $sumber = $_FILES['pilihfile']['tmp_name'];
    $extension = end($ext);
    $upload = move_uploaded_file($sumber, "../../assets/uploads/moduls/".$file);

    $admin->edit_modul($id,$judul,$modul,$ket,$file,$extension,$size);
  }

}  

?>
<br>
<br><br><br>
<link rel="stylesheet" href="../../assets/css/style_admin.css">


<div class="container">
<center>
<h2>Edit Modul</h2>
</center>
  <form action="" method="post" enctype="multipart/form-data">

  <div class="row">
    <div class="col-25">
      <label for="judul">Judul Modul</label>
    </div>
    <div class="col-75">
      <input type="text" id="judul" name="judul" value="<?= $fetch->judul?>" placeholder="Masukan judul" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="modul">Modul</label>
    </div>
    <div class="col-75">
      <select id="modul" name="modul" required>
        <option value="">Pilih</option>
        <option value="modul inklusif"<?php if($fetch->modul == 'modul inklusif') echo "selected";?> >Modul Inklusif</option>
        <option value="modul khusus" <?php if( $fetch->modul=='modul khusus') echo "selected";?> >Modul Khusus</option>
        <option value="modul stimulus" <?php if( $fetch->modul=='modul stimulus') echo "selected";?> >Modul Stimulus</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="pilihfile">Pilih File</label>
    </div>
    <div class="col-75">
      <input type="file" id="pilihfile" name="pilihfile"  >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="ket">Keterangan</label>
    </div>
    <div class="col-75">
      <textarea id="ket" name="ket" placeholder="Write something.." style="height:200px" required> <?= $fetch->keterangan?></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" name="submit" value="Submit">

  </div>


  </form>
</div>


