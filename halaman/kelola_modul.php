<?php
include "../init.php";
$admin = new Admin();

?>


<div class="container">
    <div class="card">
        <div class="card-body" style="padding: 10px;">
            <a href="?halaman=tambah_modul" class="btn btn-submit">Tambah Modul</a>
        </div>
    </div>
    <div class="card">
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
                    <th>Aksi</th>
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
                <td>

                    <a href="?halaman=edit_modul&ubah=<?= $row->id;?>"><i class="fas fa-edit"></i></a>
                    <a href="?halaman=hapus_modul&id=<?= $row->id;?>"
                        onclick="javascript:return confirm('Yakin ingin menghapus data ?')"><i
                            class="fas fa-trash"></i></a>
                </td>
            </tr>
            <?php endwhile ?>
        </table>
    </div>
</div>