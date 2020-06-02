<?php
include "../init.php";

if(isset($_POST['submit'])){
$pra_sekolah = @$_POST['pra_sekolah'];




    $ext1 = explode(".", $_FILES['pra_sekolah']['name']);
    $size1 = $_FILES['pra_sekolah']['size'];
    $file1 = "file-".round(microtime(true)).".".end($ext1);
    $sumber = $_FILES['pra_sekolah']['tmp_name'];
    $extension1 = end($ext1);
    $upload = move_uploaded_file($sumber, "../../assets/uploads/organisasi/".$file1);
    $admin->upload_struktur('profile',$file1,'pra sekolah');

}
?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Pra Sekolah</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pra_sekolah">Upload Pra Sekolah</label>
                    <input type="file" class="form-control" id="pra_sekolah" name="pra_sekolah" required>
                </div>
                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
            </form>
        </div>
    </div>
</div>