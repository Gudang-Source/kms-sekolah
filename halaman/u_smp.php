<?php
include "../init.php";

if(isset($_POST['submit'])){
    $smp = @$_POST['smp'];
    $ext1 = explode(".", $_FILES['smp']['name']);
    $size1 = $_FILES['smp']['size'];
    $file1 = "file-".round(microtime(true)).".".end($ext1);
    $sumber = $_FILES['smp']['tmp_name'];
    $extension1 = end($ext1);
    $upload = move_uploaded_file($sumber, "../assets/uploads/organisasi/".$file1);
    $admin->upload_struktur('profile',$file1,'smp','u_smp');

}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Sekolah Menengah Pertama</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="smp">Upload</label>
                    <input type="file" class="form-control" id="smp" name="smp" required>
                </div>
                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
            </form>
        </div>
    </div>
</div>