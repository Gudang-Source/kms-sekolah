<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";

$admin = new Admin();

include "adm_header.php";
if(isset($_POST['submit'])){
    $nik =$_POST['nik'];
    $nama =$_POST['nama'];
    $jk =$_POST['jk'];
    $status =$_POST['status'];
    $akses =$_POST['akses'];
    $password =$_POST['password'];

    $admin->registrasi($nik,$nama,$jk,$status,$akses,$password);
}

?>
<br>
<br><br><br>
<link rel="stylesheet" href="../../assets/css/style_admin.css">
<script type="text/javascript">
 function validasi () {
	 var nik=document.forms["idmyform"]["idnik"].value;
	 var num=/^[0-9]+$/;
	 if (document.myform.nik.value==''){
	    alert ('nik harus di isi');
	    document.myform.nik.focus();
	    return false;
     }else if (nik.length!=18){
	    alert ('nik tidak boleh kurang dari 18 digit');
	    document.myform.nik.focus();
	    return false;
	 }else if (!nik.match (num)){
	    alert ('nik harus angka');
	    document.myform.nik.focus();
	    return false;
	 }
	 if (document.myform.nama.value==''){
		 alert ('nama harus di isi');
		 document.myform.nama.focus();
	     return false;
	 }
	 if (document.myform.jk.value==''){
		 alert ('jk harus di isi');
		 document.myform.jk.focus();
		 return false;
     }
     if (document.myform.jabatan.value==''){
		 alert ('jabatan harus di isi');
		 document.myform.jabatan.focus();
		 return false;
	 }
	 if (document.myform.akses.value==''){
		 alert ('akses harus di isi');
		 document.myform.akses.focus();
		 return false;
	 }
	 if (document.myform.password.value==''){
		 alert ('password harus di isi');
		 document.myform.password.focus();
		 return false;
	 }
		 
	} 
 </script>

<div class="container">
<center>
<h2>Tambahkan Pengguna</h2>
</center>
  <form action="action.php" method="post"  name="myform" id="idmyform" onsubmit="return validasi ()">
  <div class="row">
    <div class="col-25">
      <label for="nik">NIK</label>
    </div>
    <div class="col-75">
      <input type="text" id="nik" name="nik" maxlength="18" id="idnik" placeholder="Masukan NIK 18 Digit.." required >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nama">Nama</label>
    </div>
    <div class="col-75">
      <input type="text" id="nama" name="nama" placeholder="Masukan nama lengkap.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="jk">Jenis Kelamin</label>
    </div>
    <div class="col-75">
      <select id="jk" name="jk" >
        <option value="">Pilih</option>
        <option value="laki-laki">Laki-Laki</option>
        <option value="perempuan">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="status">Jabatan</label>
    </div>
    <div class="col-75">
      <select id="status" name="status" >
        <option value="">Pilih</option>
        <option value="Guru">Guru</option>
        <option value="Staf TU">Staf TU</option>
        <option value="Administrator">Administrator</option>
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
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="password">Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="password" name="password" placeholder="Masukan Password.." >
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div> -->
  <div class="row">
	  <tr><td>&nbsp;</td></tr>
  <input type="reset" value="reset">
    <input type="submit" name="submit" value="Submit"> 
 
  </div>


  


