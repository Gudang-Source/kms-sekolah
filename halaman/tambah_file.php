<?php
include "../init.php";
$admin = new Admin();

if(@$_POST['submit']){
  $subjek = $_POST['subjek'];
  $kategori = $_POST['kategori'];
  $keterangan = $_POST['keterangan'];

  $ext = explode(".", $_FILES['pilihfile']['name']);
  $size = $_FILES['pilihfile']['size'];
  $file = "file-".round(microtime(true)).".".end($ext);
  $sumber = $_FILES['pilihfile']['tmp_name'];
  $extension = end($ext);
  $upload = move_uploaded_file($sumber, "../../assets/uploads/files/".$file);

  $admin->upload('file',$subjek,$kategori,$keterangan,$file,$extension,$size);
}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Upload File Materi</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <input type="text" class="form-control" id="subjek" name="subjek" required>
                </div>
                <div class="form-group">
                    <label for="pilihfile">Upload File Materi</label>
                    <input type="file" class="form-control" id="pilihfile" name="pilihfile" required>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori Materi</label>
                    <select name="kategori" id="kategori" class="form-control" style="width: 32.5%">
                        <option value="">Pilih</option>
                        <option value="tatatertib">Tata-tertib</option>
                        <option value="kompetensi">Kompetensi</option>
                        <option value="materi">Materi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control" id="keterangan" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </form>
        </div>
    </div>
</div>