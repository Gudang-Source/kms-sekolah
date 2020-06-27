<?php
include "../init.php";
$admin = new Admin();
if(@$_GET['ubah']){
  $id= $_GET['ubah'];
  $result=$admin->tampil('pengguna','id',$id);
  $fetch=$result->fetch_object();
}

if(isset($_POST['submit'])){
  $data = array(
    'password' => trim(md5($_POST['password'])),
);
$clausa = array(
  'id' => trim($_GET['ubah'])
);

    $admin->edit_password($data, $clausa);
}
?>

<div class="container">
    <div class="card" style="margin-bottom:5px; background-color: rgb(255, 249, 231);">
        <div class=" card-header">
            <a href="?halaman=kelola_pengguna">Kelola Pengguna /</a> <span>Ubah Password</span>
        </div>
    </div>
    <div class="card">
        <div class="main-form">
            <form action="" method="post" name="myform" id="idmyform" onsubmit="return validasi ()">
                <div class="form-group">
                    <label for="password">Password Baru</label>
                    <input type="password" id="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password-lama">Password Lama (MD5)</label>
                    <input type="text" id="password-lama" class="form-control" readonly name="password-lama"
                        value="<?= $fetch->password;?>" required>
                </div>

                <button type="submit" name="submit" class="btn btn-submit">Ubah Password</button>
            </form>
        </div>
    </div>
</div>