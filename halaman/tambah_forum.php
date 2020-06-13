<?php

$admin = new Admin();
$nama=$_SESSION['nama'];

if(isset($_POST['submit'])){
  $subjek = $_POST['subjek'];
  $pilihfile = @$_POST['pilihfile'];
  $kategori = $_POST['kategori'];
  $konten = $_POST['konten'];

  $ext = explode(".", $_FILES['pilihfile']['name']);
  $size = $_FILES['pilihfile']['size'];
  $file = "file-".round(microtime(true)).".".end($ext);
  $sumber = $_FILES['pilihfile']['tmp_name'];
  $extension = end($ext);
  $upload = move_uploaded_file($sumber, "../assets/uploads/forum/".$file);


  $admin->open_forum('forum',$subjek,$file,$extension,$size,$kategori,$nama,$konten);
}
?>


<div class="container">
    <?php if ($_SESSION['akses']=="admin"){?>
    <div class="card" style="margin-bottom:5px; background-color: rgb(255, 249, 231);">
        <div class=" card-header">
            <a href="?halaman=kelola_forum">Lihat forum /</a> <span>Tambah Forum</span>
        </div>
    </div>
    <?php }?>

    <div class="card">
        <div class="card-header">
            <h4>Tambah Forum</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <input type="text" class="form-control" id="subjek" name="subjek" required>
                </div>
                <div class="form-group">
                    <label for="pilihfile">Upload Gambar</label>
                    <input type="file" class="form-control" id="pilihfile" name="pilihfile" required>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori Materi</label>
                    <select name="kategori" id="kategori" class="form-control" style="width: 32.5%">
                        <option value="">Pilih</option>
                        <option value="kesentraan">Kesentraan</option>
                        <option value="tarbiah">Tarbiah</option>
                        <option value="parenting">Parenting</option>
                        <option value="umum">Umum</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="konten">Kontent</label>
                    <textarea name="konten" class="form-control" id="konten" cols="30" rows="8"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </form>
        </div>
    </div>
</div>