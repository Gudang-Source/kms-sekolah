<?php

include "../init.php";


if(isset($_POST['submit'])){
    $judul =$_POST['judul'];
    $modul =$_POST['modul'];
    $pilihfile =@$_POST['pilihfile'];
    $ket =$_POST['ket'];
    
    $ext = explode(".", $_FILES['pilihfile']['name']);
    $size = $_FILES['pilihfile']['size'];
    $file = "file-".round(microtime(true)).".".end($ext);
    $sumber = $_FILES['pilihfile']['tmp_name'];
    $extension = end($ext);
    $upload = move_uploaded_file($sumber, "../assets/uploads/files/".$file);
    var_dump($upload);
    die;
  
    $admin->upload_modul('modul',$judul,$modul,$ket,$file,$extension,$size,'kelola_modul');

}

?>


<div class="container">
    <div class="card" style="margin-bottom:5px; background-color: rgb(255, 249, 231);">
        <div class=" card-header">
            <a href="?halaman=kelola_modul">Kelola Modul /</a> <span>Tambah Modul</span>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Upload File Materi</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul Modul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="pilihfile">Upload File Modul</label>
                    <input type="file" class="form-control" id="pilihfile" name="pilihfile" required>
                </div>
                <div class="form-group">
                    <label for="modul">Kategori Materi</label>
                    <select name="modul" id="modul" class="form-control" style="width: 32.5%">
                        <option value="">Pilih</option>
                        <option value="modul inklusif">Modul Inklusif</option>
                        <option value="modul khusus">Modul Khusus</option>
                        <option value="modul stimulus">Modul Stimulus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ket">ket</label>
                    <textarea name="ket" class="form-control" id="ket" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </form>
        </div>
    </div>
</div>