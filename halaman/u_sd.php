<?php
include "../init.php";

if(isset($_POST['submit'])){
    $sd = @$_POST['sd'];
    $ext1 = explode(".", $_FILES['sd']['name']);
    $size1 = $_FILES['sd']['size'];
    $file1 = "file-".round(microtime(true)).".".end($ext1);
    $sumber = $_FILES['sd']['tmp_name'];
    $extension1 = end($ext1);
    $upload = move_uploaded_file($sumber, "../../assets/uploads/organisasi/".$file1);
    $admin->upload_struktur('profile',$file1,'sd');

}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Sekolah Dasar</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="sd">Upload</label>
                    <input type="file" class="form-control" id="sd" name="sd" required>
                </div>
                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
            </form>
        </div>
    </div>
</div>