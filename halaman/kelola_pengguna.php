<?php
include "../init.php";

if(@$_GET['hapus']){
    $id= $_GET['hapus'];
    $admin->hapus('pengguna','id',$id);
}
?>
<style>

</style>

<link rel="stylesheet" href="../assets/css/style_user.css">
<div class="container">
    <div class="card">
        <div class="card-body" style="padding: 10px;">
            <a href="?halaman=tambah_pengguna" class="btn btn-submit">Tambah Pengguna</a>
        </div>
    </div>

    <div class="card">
        <table style="text-align: center;" class="table">
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>JK</th>
                <th>STATUS</th>
                <th>HAK AKSES</th>
                <th>DAFTAR</th>
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
                    <a href="edit_pengguna.php?ubah=<?= $row->id;?>"><i class="fas fa-edit"></i></a>
                    <a href="?hapus=<?= $row->id;?>"
                        onclick="javascript:return confirm('Yakin ingin menghapus data ?')"><i
                            class="fas fa-trash"></i></a>
                </td>
            </tr>
            <?php endwhile ?>
        </table>
    </div>
</div>