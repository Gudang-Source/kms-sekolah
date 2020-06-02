<?php
include "../init.php";


if(isset($_POST['submit'])){
    $yayasan = @$_POST['yayasan'];
    $ext1 = explode(".", $_FILES['yayasan']['name']);
    $size1 = $_FILES['yayasan']['size'];
    $file1 = "file-".round(microtime(true)).".".end($ext1);
    $sumber = $_FILES['yayasan']['tmp_name'];
    $extension1 = end($ext1);

    $upload = move_uploaded_file($sumber, "../../assets/uploads/organisasi/".$file1);
    $profile->upload_struktur('profile',$file1,'yayasan');

}
?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Struktur Yayasan</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="yayasan">Upload Struktur Yayasan</label>
                    <input type="file" class="form-control" id="yayasan" name="yayasan" required>
                </div>
                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
            </form>
        </div>
    </div>

    <!-- 
    <div class="row">
        <div class="col-25">
            <label for="yayasan">Yayasan</label>
        </div>
        <div class="col-75">
            <input type="file" id="yayasan" name="yayasan" required>
        </div>
    </div>

    <div class="row">
        <br>
        <input type="submit" name="submit" value="Submit">

    </div> -->



</div>