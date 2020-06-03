<?php
include "../init.php";

if(@$_GET['hapus']){
    $id= $_GET['hapus'];
    $admin->hapus('file','id',$id);
}

?>

<div class="container">
    <div class="card">
        <div class="card-body" style="padding: 10px;">
            <a href="?halaman=tambah_file" class="btn btn-submit">Tambah File</a>
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
                    <th>Created</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <?php
    $no = 1;
    $data = $admin->tampil('file','','');
    while ($row = $data->fetch_object()) :
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
                <td><?= $row->created?></td>
                <td>

                    <a href="?halaman=edit_file&ubah=<?= $row->id;?>"><i class="fas fa-edit"></i></a>
                    <a href="?halaman=hapus_file&id=<?= $row->id;?>"
                        onclick="javascript:return confirm('Yakin ingin menghapus data ?')"><i
                            class="fas fa-trash"></i></a>
                </td>
            </tr>
            <?php endwhile ?>
        </table>
    </div>
</div>