<?php
include "../init.php";
if(isset($_POST['submit'])){
    $lttq = @$_POST['lttq'];
    $ext1 = explode(".", $_FILES['lttq']['name']);
    $size1 = $_FILES['lttq']['size'];
    $file1 = "file-".round(microtime(true)).".".end($ext1);
    $sumber = $_FILES['lttq']['tmp_name'];
    $extension1 = end($ext1);
    $upload = move_uploaded_file($sumber, "../assets/uploads/organisasi/".$file1);
    $admin->upload_struktur('profile',$file1,'lttq','u_lttq');

}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>LTTQ</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="lttq">Upload LTTQ</label>
                    <input type="file" class="form-control" id="lttq" name="lttq" required>
                </div>
                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
            </form>
        </div>
    </div>
</div>