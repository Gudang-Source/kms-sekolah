<?php 
include "../init.php";

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

h3 {
    color: grey;
    width: 100%;
    text-align: center;
    text-transform: uppercase;
}
</style>

<?php if($_SESSION['akses']=="admin"){?>
<!-- tampilan beranda pengguna -->
<div class="red-square">
    <div class="main">
        <h3>
            <?php
            echo 'Selamat Datang '. $_SESSION['nama']; 
        ?>
        </h3>
        <center>
            <div class="image">
                <img src="../assets/img/admin.png">
            </div>
        </center>
    </div>
</div>
<?php } else if  ($_SESSION['akses']=="user"){?>
<!-- tampilah beranda user -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <span>Pencarian</span>
        </div>
        <div class="card-body" style="padding: 10px;">
            <form action="">
                <input type="text" class="form-control"> <button href="?halaman=tambah_pengguna"
                    class="btn btn-submit">Cari</button>
            </form>
        </div>
    </div>
</div>


<div class="container" style="padding-top:10px;">
    <div class="card">
        <div class="card-header">
            <span>File</span>
        </div>
        <div class="card" style="padding: 10px;">
            <table style="text-align: center;" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Subjek</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                        <th>File</th>
                        <th>Type</th>
                        <th>Size</th>
                    </tr>
                </thead>
                <?php 
                $no = 1;
                $data = $admin->tampil('file','','');
                while ($row = $data->fetch_object()) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->subjek; ?></td>
                    <td><?= $row->kategori ?></td>
                    <td><?= $row->keterangan ?></td>
                    <td>
                        <a target="_blank" href="../assets/uploads/files/<?= $row->file ?>">Lihat</a>
                        <!-- <img src="../assets/uploads/files/<?= $row->file ?>" width="20px"> -->
                    </td>
                    <td><?= $row->type ?></td>
                    <td><?= $row->size ?> Kb</td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>



<div class="container" style="padding-top:10px;">
    <div class="card">
        <div class="card-header">
            <span>Modul</span>
        </div>
        <div class="card" style="padding: 10px;">
            <table style="text-align: center;" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Subjek</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                        <th>File</th>
                        <th>Type</th>
                        <th>Size</th>
                    </tr>
                </thead>

                <?php
    $no = 1;
    $data = $admin->tampil('modul','','');
    while ($row = $data->fetch_object()) :
?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->judul; ?></td>
                    <td><?= $row->modul; ?></td>
                    <td><?= $row->ket; ?></td>
                    <td>
                        <a target="_blank" href="../assets/uploads/moduls/<?= $row->file ?>">Lihat</a>
                        <!-- <img src="../assets/uploads/files/<?= $row->file ?>" width="20px"> -->
                    </td>
                    <td><?= $row->type; ?></td>
                    <td><?= $row->size; ?>Kb</td>
                </tr>
                <?php endwhile ?>
            </table>
        </div>
    </div>
</div>




<?php }?>