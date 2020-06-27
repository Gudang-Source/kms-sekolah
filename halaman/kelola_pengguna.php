<?php
include "../init.php";
?>
<style>

</style>

<div class="container">
    <div class="card">
        <div class="card-body" style="padding: 10px;">
            <div class="main-form">
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
                        <a href="?halaman=edit_pengguna&ubah=<?= $row->id;?>"><i class="fas fa-edit"></i></a>
                        <a href="?halaman=ubah_password&ubah=<?= $row->id;?>"><i class="fas fa-key"></i></a>
                        <a href="?halaman=hapus_pengguna&id=<?= $row->id;?>"
                            onclick="javascript:return confirm('Yakin ingin menghapus data ?')"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endwhile ?>
            </table>
        </div>
    </div>