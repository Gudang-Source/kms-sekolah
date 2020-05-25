<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";

$admin = new Admin();


if(@$_GET['ubah']){
  $id= $_GET['ubah'];
  $result=$admin->tampil('pengguna','id',$id);
  $fetch=$result->fetch_object();
}

include "adm_header.php";
if(isset($_POST['submit'])){
    $nik =$_POST['nik'];
    $nama =$_POST['nama'];
    $jk =$_POST['jk'];
    $status =$_POST['status'];
    $akses =$_POST['akses'];
 
    $admin->edit_pengguna($id,$nik,$nama,$jk,$status,$akses);
}


?>
<br>
<br><br><br>
<link rel="stylesheet" href="../../assets/css/style_admin.css">


<div class="container">
<center>
<h2>Edit Pengguna</h2>
</center>
  <form action="" method="post">
   
  <div class="row">
    <div class="col-25">
      <label for="nik">NIK</label>
    </div>
    <div class="col-75">
      <input type="text" id="nik" name="nik" value="<?= $fetch->nik;?>" placeholder="Masukan NIK 18 Digit.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nama">Nama</label>
    </div>
    <div class="col-75">
      <input type="text" id="nama" name="nama" value="<?= $fetch->nama;?>" placeholder="Masukan nama lengkap.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="jk">Jenis Kelamin</label>
    </div>
    <div class="col-75">
      <select id="jk" name="jk" >
        <option value="">Pilih</option>
        <option value="laki-laki" <?php if( $fetch->jk=='laki-laki') echo "selected";?> >laki-laki</option>
        <option value="perempuan" <?php if( $fetch->jk=='perempuan') echo "selected";?> >Perempuan</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="status">status</label>
    </div>
    <div class="col-75">
      <select id="status" name="status" >
        <option value="">Pilih</option>
        <option value="Guru" <?php if( $fetch->status=='Guru') echo "selected";?> >Guru</option>
        <option value="Staf TU" <?php if( $fetch->status=='Staf TU') echo "selected";?> >Staf TU</option>
        <option value="Administrator" <?php if( $fetch->status=='Administrator') echo "selected";?> >Administrator</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="akses">Akses</label>
    </div>
    <div class="col-75">
      <select id="akses" name="akses" >
        <option value="">Pilih</option>
        <option value="admin" <?php if( $fetch->akses=='admin') echo "selected";?> >admin</option>
        <option value="user" <?php if( $fetch->akses=='user') echo "selected";?> >user</option>
      </select>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-25">
      <label for="password">Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="password" name="password" placeholder="Masukan Password.." >
    </div>
  </div> -->
  <!-- <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div> -->
  <div class="row">
    <input type="submit" name="submit" value="Mutahir">

  </div>


  </form>
</div>


