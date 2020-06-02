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
    'nik' => trim($_POST['nik']),
    'nama' => trim($_POST['nama']),
    'status' => trim($_POST['status']),
    'akses' => trim($_POST['akses'])
);
$clausa = array(
  'id' => trim($_GET['ubah'])
);

    $admin->edit_pengguna($data, $clausa);
}
?>

<div class="container">
    <div class="card" style="margin-bottom:5px; background-color: rgb(255, 249, 231);">
        <div class=" card-header">
            <a href="?halaman=kelola_pengguna">Kelola Pengguna /</a> <span>Edit Pengguna</span>
        </div>
    </div>
    <div class="card">
        <div class="main-form">
            <form action="" method="post" name="myform" id="idmyform" onsubmit="return validasi ()">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" maxlength="18" id="idnik" class="form-control" name="nik"
                        value="<?= $fetch->nik;?>" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" class="form-control" name="nama" value="<?= $fetch->nama;?>" required>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control" style="width: 20%" required>
                        <option value="">Pilih</option>
                        <option value="laki-laki" <?php if( $fetch->jk=='laki-laki') echo "selected";?>>Laki-laki
                        </option>
                        <option value="perempuan" <?php if( $fetch->jk=='perempuan') echo "selected";?>>Perempuan
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Jabatan</label>
                    <select name="status" id="status" class="form-control" style="width: 20%" required>
                        <option value="">Pilih</option>
                        <option value="Guru" <?php if( $fetch->status=='Guru') echo "selected";?>>Guru</option>
                        <option value="Staf TU" <?php if( $fetch->status=='Staf TU') echo "selected";?>>Staf TU</option>
                        <option value="Administrator" <?php if( $fetch->status=='Administrator') echo "selected";?>>
                            Administrator</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="akses">Akses</label>
                    <select name="akses" id="akses" class="form-control" style="width: 20%" required>
                        <option value="">Pilih</option>
                        <option value="admin" <?php if( $fetch->akses=='admin') echo "selected";?>>admin</option>
                        <option value="user" <?php if( $fetch->akses=='user') echo "selected";?>>user</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-submit">Ubah Pengguna</button>
            </form>
        </div>
    </div>
</div>