<?php

include "../init.php";


if(isset($_GET['ubah'])){
    $id= $_GET['ubah'];
    $result=$admin->tampil('modul','id',$id);
    $fetch=$result->fetch_object();
 
}

  if(isset($_POST['submit'])){


    $judul =$_POST['judul'];
    $modul =$_POST['modul'];
    $ket =$_POST['ket'];
  
    $ext = explode(".", $_FILES['pilihfile']['name']);

    $size = $_FILES['pilihfile']['size'];
   
  
    if($_FILES['pilihfile']['name'] ==""){
      // echo "Tidakedit file";
      $admin->edit_modul_lama($id,$judul,$modul,$ket,'kelola_modul');
  
    }else{

        // echo $size;die;

      $file = "file-".round(microtime(true)).".".end($ext);
      $sumber = $_FILES['pilihfile']['tmp_name'];
      $extension = end($ext);
      $upload = move_uploaded_file($sumber, "../assets/uploads/moduls/".$file);
      $admin->edit_modul($id,$judul,$modul,$ket,$file,$extension,$size,'kelola_modul');
    //   'modul',$judul,$modul,$ket,$file,$extension,$size,'kelola_modul'
    }

  


//   OLD

// if(isset($_POST['submit'])){
//     $judul =$_POST['judul'];
//     $modul =$_POST['modul'];
//     $pilihfile =@$_POST['pilihfile'];
//     $ket =$_POST['ket'];
    
//     $ext = explode(".", $_FILES['pilihfile']['name']);
//     $size = $_FILES['pilihfile']['size'];
//     $file = "file-".round(microtime(true)).".".end($ext);
//     $sumber = $_FILES['pilihfile']['tmp_name'];
//     $extension = end($ext);
//     $upload = move_uploaded_file($sumber, "../assets/uploads/moduls/".$file);

//     $admin->upload_modul('modul',$judul,$modul,$ket,$file,$extension,$size,'kelola_modul');

}

?>


<div class="container">
    <div class="card" style="margin-bottom:5px; background-color: rgb(255, 249, 231);">
        <div class=" card-header">
            <a href="?halaman=kelola_modul">Kelola Modul /</a> <span>Edit Modul</span>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Edit File Modul</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul Modul</label>
                    <input type="text" name="judul" class="form-control" id="judul" value="<?= $fetch->judul ?>"
                        required>
                </div>
                <div class="form-group">
                    <label for="pilihfile">Upload File Modul</label>
                    <input type="file" name="pilihfile" class="form-control" id="pilihfile">
                </div>
                <div class="form-group">
                    <label for="modul">Kategori Materi</label>
                    <select name="modul" id="modul" class="form-control" style="width: 32.5%">
                        <option value="">Pilih</option>

                        <option value="modul inklusif" <?php if( $fetch->modul=='modul inklusif') echo "selected";?>>
                            Modul
                            Inklusif</option>

                        <option value="modul inklusif" <?php if( $fetch->modul=='modul khusus') echo "selected";?>>Modul
                            Khusus</option>

                        <option value="modul inklusif" <?php if( $fetch->modul=='modul stimulus') echo "selected";?>>
                            Modul
                            Stimulus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <textarea name="ket" class="form-control" id="ket" cols="30" rows="10"><?= $fetch->ket ?></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-submit">Edit Modul</button>
            </form>
        </div>
    </div>
</div>