<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";
include "adm_header.php";
$admin = new Admin();

if(isset($_POST['submit'])){
$sd = @$_POST['sd'];




    $ext1 = explode(".", $_FILES['sd']['name']);
    $size1 = $_FILES['sd']['size'];
    $file1 = "file-".round(microtime(true)).".".end($ext1);
    $sumber = $_FILES['sd']['tmp_name'];
    $extension1 = end($ext1);
    $upload = move_uploaded_file($sumber, "../../assets/uploads/organisasi/".$file1);
    $admin->upload_struktur('profile',$file1,'sd');

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
<h2>Edit Struktur Sekolah Dasar</h2>
</center>
<form action="" method="post" enctype="multipart/form-data">

  <div class="row">
    <div class="col-25">
      <label for="sd">Sekolah Dasar</label>
    </div>
    <div class="col-75">
      <input type="file" id="sd" name="sd" required >
    </div>
  </div>

  <div class="row">
  <br>
    <input type="submit" name="submit" value="Submit">
    
  </div>  


  </form>
</div>

