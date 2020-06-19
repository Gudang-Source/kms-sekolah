<?php
include "../init.php";
$admin = new Admin();

if(isset($_POST['submit'])){
  $link =$_POST['link'];
  $judul =$_POST['judul'];
  $jenis =$_POST['jenis'];
  $ket =$_POST['ket'];

  $admin->upload_link('link',$link,$judul,$jenis,$ket,'kelola_link');
}

?>

<div class="container">
    <div class="card" style="margin-bottom:5px; background-color: rgb(255, 249, 231);">
        <div class=" card-header">
            <a href="?halaman=kelola_link">Kelola Link /</a> <span>Tambah link</span>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Tambah Link</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" name="link" required>
                </div>
                <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Link</label>
                    <select name="jenis" id="jenis" class="form-control" style="width: 32.5%">
                        <option value="">Pilih</option>
                        <option value="Video">Video</option>
                        <option value="Artikel">Artikel</option>
                        <option value="Media Sosial">Media Sosial</option>
                        <option value="Lainnya">Lainya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <textarea name="ket" class="form-control" id="keterangan" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </form>
        </div>
    </div>
</div>