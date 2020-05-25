<?php

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
<style>
.main-form {
    padding: 5 60px;
}
</style>
<link rel="stylesheet" href="../assets/css/style_user.css">
<script type="text/javascript">
function validasi() {
    var nik = document.forms["idmyform"]["idnik"].value;
    var num = /^[0-9]+$/;
    if (document.myform.nik.value == '') {
        alert('nik harus di isi');
        document.myform.nik.focus();
        return FALSE;
    } else if (nik.length != 18) {
        alert('nik tidak boleh kurang dari 18 digit');
        document.myform.nik.focus();
        return FALSE;
    } else if (!nik.match(num)) {
        alert('nik harus angka');
        document.myform.nik.focus();
        return FALSE;
    }
    if (document.myform.nama.value == '') {
        alert('nama harus di isi');
        document.myform.nama.focus();
        return FALSE;
    }
    if (document.myform.jk.value == '') {
        alert('jk harus di isi');
        document.myform.jk.focus();
        return FALSE;
    }
    if (document.myform.jabatan.value == '') {
        alert('jabatan harus di isi');
        document.myform.jabatan.focus();
        return FALSE;
    }
    if (document.myform.akses.value == '') {
        alert('akses harus di isi');
        document.myform.akses.focus();
        return FALSE;
    }
    if (document.myform.password.value == '') {
        alert('password harus di isi');
        document.myform.password.focus();
        return FALSE;
    }

}
</script>

<div class="container-form">
    <div class="card">
        <div class="card-body">
            <p>Tambah Pengguna</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="main-form">

                <form action="action.php" method="post" name="myform" id="idmyform" onsubmit="return validasi ()">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" name="nik" maxlength="18" id="idnik"
                        placeholder="Masukan NIK 18 Digit.." required>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukan nama lengkap..">

                    <label for="jk">Jenis Kelamin</label>

                    <select id="jk" name="jk">
                        <option value="">Pilih</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>

                    <label for="status">Jabatan</label>

                    <select id="status" name="status">
                        <option value="">Pilih</option>
                        <option value="Guru">Guru</option>
                        <option value="Staf TU">Staf TU</option>
                        <option value="Administrator">Administrator</option>
                    </select>

                    <label for="akses">Akses</label>

                    <select id="akses" name="akses">
                        <option value="">Pilih</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>

                    <label for="password">Password</label>

                    <input type="password" id="password" name="password" placeholder="Masukan Password..">

                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <input type="reset" value="reset">
                    <input type="submit" name="submit" value="Submit">
            </div>
        </div>
    </div>
</div>