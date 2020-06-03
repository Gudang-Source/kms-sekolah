<?php

$admin = new Admin();



if(@$_GET['ubah']){
    $id= $_GET['ubah'];
    $result=$admin->tampil('file','id',$id);
    $fetch=$result->fetch_object();
  }

if(isset($_POST['submit'])){
  $subjek=$_POST['subjek'];  
  $pilihfile=@$_POST['pilihfile'];  
  $kategori=$_POST['kategori'];  
  $keterangan=$_POST['keterangan']; 

  
  $ext = explode(".", $_FILES['pilihfile']['name']);
  $size = $_FILES['pilihfile']['size'];
 

  if($size ==""){
    // echo "Tidakedit file";
    $admin->edit_file_lama($id,$subjek,$kategori,$keterangan);

  }else{
    $file = "file-".round(microtime(true)).".".end($ext);
    $sumber = $_FILES['pilihfile']['tmp_name'];
    $extension = end($ext);
    $upload = move_uploaded_file($sumber, "../assets/uploads/files/".$file);

    $admin->edit_file($id,$subjek,$kategori,$keterangan,$file,$extension,$size);
  }




}


?>

<?php
include "../init.php";
$admin = new Admin();

if(@$_GET['ubah']){
  $id= $_GET['ubah'];
  $result=$admin->tampil('file','id',$id);
  $fetch=$result->fetch_object();
}

if(isset($_POST['submit'])){
  $subjek = $_POST['subjek'];
  $kategori = $_POST['kategori'];
  $keterangan = $_POST['keterangan'];

  $ext = explode(".", $_FILES['pilihfile']['name']);
  $size = $_FILES['pilihfile']['size'];

  if($size == ""){
    $admin->edit_file_lama($id,$subjek,$kategori,$keterangan,'kelola_file');
  }else{
    
    $file = "file-".round(microtime(true)).".".end($ext);
    $sumber = $_FILES['pilihfile']['tmp_name'];
    $extension = end($ext);
    $upload = move_uploaded_file($sumber, "../assets/uploads/files/".$file);
    $admin->edit_file($id,$subjek,$kategori,$keterangan,$file,$extension,$size,'kelola_file');
  }


}
?>

<div class="container">
    <div class="card" style="margin-bottom:5px; background-color: rgb(255, 249, 231);">
        <div class=" card-header">
            <a href="?halaman=kelola_file">Kelola File /</a> <span>Edit File Materi</span>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Edit File Materi</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <input type="text" class="form-control" id="subjek" name="subjek" value="<?= $fetch->subjek;?>"
                        required>
                </div>
                <div class="form-group">
                    <label for="pilihfile">Upload File Materi</label>
                    <input type="file" class="form-control" id="pilihfile" name="pilihfile">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori Materi</label>
                    <select name="kategori" id="kategori" class="form-control" style="width: 32.5%">
                        <option value="">Pilih</option>
                        <option value="tatatertib" <?php if( $fetch->kategori=='tatatertib') echo "selected";?>>
                            Tata-tertib
                        </option>
                        <option value="kompetensi" <?php if( $fetch->kategori=='kompetensi') echo "selected";?>>
                            Kompetensi
                        </option>
                        <option value="materi" <?php if( $fetch->kategori=='materi') echo "selected";?>>Materi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control" id="keterangan" cols="30" rows="10"
                        required><?= $fetch->keterangan?></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </form>
        </div>
    </div>
</div>