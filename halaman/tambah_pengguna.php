<?php
$admin = new Admin();

// id,nik,nama,jk,status,akses,password,created

if(isset($_POST['submit'])){
    $data = array(
        'nik' => trim($_POST['nik']),
        'nama' => trim($_POST['nama']),
        'jk' => trim($_POST['jk']),
        'status' => trim($_POST['status']),
        'akses' => trim($_POST['akses']),
        'password' => trim(md5($_POST['password']))
    );
    $value = $_POST['nik'];

    $admin->reg($data,$value);


}


?>
<style>
.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, .03);
    border-bottom: 1px solid rgba(0, 0, 0, .125);
}

.main-form {
    padding: 1rem;
    display: block;
}

.form-group {
    margin-bottom: 1rem;
}

label {
    display: inline-block;
    margin-bottom: .5rem;
}

.form-control {
    display: block;
    width: 30%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.btn-submit {
    color: #fff;
    background-color: #0368c7;
    border-color: #0379c7;
    /* background-color: #007bff;
    border-color: #007bff; */
}

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

a {
    text-decoration: none;
}
</style>
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

<div class="container">
    <div class="card" style="margin-bottom:5px; background-color: rgb(255, 249, 231);">
        <div class=" card-header">
            <a href="?halaman=kelola_pengguna">Kelola Pengguna /</a> <span>Tambah Pengguna</span>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <p>Tambah data Kriteria</p>
        </div>
        <div class="main-form">
            <form action="" method="post" name="myform" id="idmyform" onsubmit="return validasi ()">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" maxlength="18" id="idnik" class="form-control" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" class="form-control" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control" style="width: 20%" required>
                        <option value="">Pilih</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Jabatan</label>
                    <select name="status" id="status" class="form-control" style="width: 20%" required>
                        <option value="">Pilih</option>
                        <option value="Guru">Guru</option>
                        <option value="Staf TU">Staf TU</option>
                        <option value="Administrator">Administrator</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="akses">Akses</label>
                    <select name="akses" id="akses" class="form-control" style="width: 20%" required>
                        <option value="">Pilih</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" name="submit" class="btn btn-submit">Tambah Pengguna</button>
            </form>
        </div>
    </div>