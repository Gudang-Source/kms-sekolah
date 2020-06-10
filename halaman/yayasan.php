<?php 

include "../init.php";
?>
<style>
.main {
    padding: 0px 20px;
}
</style>
<div class="container">
    <div class="card">
        <div class="card-header">
            Profile yayasan
        </div>
        <div class="main">
            <h1>Selamat datang</h1>
        </div>
        <div class="main">
            <?php 
    $data = $admin->tampil('profile','ket','yayasan');
    while ($row = $data->fetch_object()) {
    ?>
            <img src="../assets/uploads/organisasi/<?= $row->struktur ?>" width="20px">
            <?php }?>
        </div>
    </div>
</div>