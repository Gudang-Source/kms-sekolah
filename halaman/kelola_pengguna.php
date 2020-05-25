<?php
include "../init.php";

if(@$_GET['hapus']){
    $id= $_GET['hapus'];
    $admin->hapus('pengguna','id',$id);
}
?>
<style>
.main {
    padding: 0px;
}
</style>
<link rel="stylesheet" href="../assets/css/style_user.css">
<div class="card">
    <div class="card-body">

        <div class="main">
            <button class="button"><a href="tambah_pengguna.php">Tambah</a></button>
        </div>
        <table style="text-align: center;" class="table">
            <tr>
                <th>no</th>
                <th>NIK</th>
                <th>nama</th>
                <th>kelamin</th>
                <th>status</th>
                <th>akses</th>
                <th>created</th>
                <th>Aksi</th>
            </tr>
            <?php
    $no = 1;
    $data = $admin->tampil('pengguna','','');
    while ($row = $data->fetch_object()) :
?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row->nik; ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->jk ?></td>
                <td><?= $row->status ?></td>
                <td><?= $row->akses ?></td>
                <td><?= $row->created?></td>
                <td>
                    <a href="edit_pengguna.php?ubah=<?= $row->id;?>"
                        onclick="javascript:return confirm('Yakin ingin merubah data ?')"><img
                            src="../../assets/img/edit.png" style="width:15px;height:15px;"> Edit</a>
                    <a href="?hapus=<?= $row->id;?>"
                        onclick="javascript:return confirm('Yakin ingin menghapus data ?')"><img
                            src="../../assets/img/hapus.png" style="width:15px;height:15px;"> Hapus</a>
                </td>
            </tr>
            <?php endwhile ?>
        </table>
    </div>
</div>