<?php

include "../../class/class_database.php";
include "../../class/class_admin.php";
    include "usr_header.php";

$admin = new Admin();

if(@$_GET['kom']){
    $id_forum= $_GET['kom'];
  }

$nama= $_SESSION['nama'];

if(@$_POST['komentar']){
    $isi_komentar = $_POST['isi_komentar'];

    $admin->komentar('komentar',$id_forum,$isi_komentar,$nama);
    
}

$result = $admin->tampil('forum','id_forum',$id_forum);
$fetch=$result->fetch_object();
?>
<style>
.container{
    width:80%;
    margin: 0px auto;
}
  .conten_judul{

  }  
  .conten_judul, h1,h3,p{
    margin: 0px;
}  
.isi p{
    /* color:red; */
}

img{
    width:70%;
    margin: 0px auto;

}
.komentar{
    width:80%;
    margin: 0px auto;
}

.isi_komen{
    background:#e7ffe7;
    width:80%;
    margin: 0px auto;

}
.isi_komen p ,h4{
    color :grey;
    margin:1px;
}

</style>
<br>
<br><br>
<br>
<link rel="stylesheet" href="../../assets/css/table.css">
<div class="main">
    <div class="container">

        <div class="conten">
            <div class="conten_image">
                <center>
                <img src="../../assets/uploads/forum/<?= $fetch->file?>" >
                </center>
            </div>
        </div>
        <div class="conten_judul">
            <h1><?= $fetch->subjek;?></h1>
            <h3><?= $fetch->kategori;?></h3>
            <p><?=$fetch->tgl_forum;?></p>
            <p>By: <?= $fetch->nama?></p>
        </div>
            <div class="isi">
                <p><?= $fetch->konten?></p>
            </div>
        <br>
        <br>
            <h3>Komentar:</h3>
        </div>
        <br>

        <!-- Tampilan Komentar  -->
        <?php
        $data = $admin->tampil('komentar','id_forum',$id_forum);
        while ($row = $data->fetch_object()):
        ?>
        <div class="isi_komen">
            <h4><?= $row->nama?></h4>
            <p><?= $row->tgl_komentar?></p>
            <p><?= $row->komentar?></p>
            <hr>
            <p></p>
        </div>
        <?php
            endwhile;
        ?>
        <br><br>
        <!-- Form Komentar -->
        <div class="komentar"><p>Form Komentar</p>
                <form action="" method="post">
                    <textarea name="isi_komentar" id="" cols="50" rows="5"></textarea><br>
                    <input type="submit" name="komentar" value="kirim">
                </form>
        </div> 
    </div>
    
</div>

