<?php

include "usr_header.php";


?>
    <style>
    .red-square {
  background-color: #fafafa;
  width: 300px;
  height: 300px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
 
}
h3{
    color :grey;
    width:100%;
    text-align:center;
    text-transform: uppercase;
}
</style>

<div class="red-square">
    <div class="main">
        <h3>
        <?php
            echo 'Selamat Datang '. $_SESSION['nama']; 
        ?>
        </h3>
        <center>
        <div class="image">
            <img src="../../assets/img/user.png" style="width:150px;height:150px;" >
        </div>
        </center>
    </div>
</div>