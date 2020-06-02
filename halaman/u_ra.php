<?php
include "../init.php";

if(isset($_POST['submit'])){
    $ra = @$_POST['ra'];
    $ext1 = explode(".", $_FILES['ra']['name']);
    $size1 = $_FILES['ra']['size'];
    $file1 = "file-".round(microtime(true)).".".end($ext1);
    $sumber = $_FILES['ra']['tmp_name'];
    $extension1 = end($ext1);
    $upload = move_uploaded_file($sumber, "../../assets/uploads/organisasi/".$file1);
    $admin->upload_struktur('profile',$file1,'ra');

}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Raudhatul Athfalh</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="ra">Upload</label>
                    <input type="file" class="form-control" id="ra" name="ra" required>
                </div>
                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
            </form>
        </div>
    </div>
</div>