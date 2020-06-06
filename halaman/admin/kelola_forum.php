<?php
include "../init.php";

$admin = new Admin();


?>


<br>
<br>
<br><br>
<div class="table-container">
    <table border=1 style="border-collapse: collapse">
        <thead>
            <tr>
                <th>No</th>
                <th>Subjek</th>
                <th>File</th>
                <th>Type</th>
                <th>Size</th>
                <th>Kategori</th>
                <th>Nama</th>
                <th>Created</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <?php
    $no = 1;
    $data = $admin->tampil('forum','','');
    while ($row = $data->fetch_object()) :
?>

        <tbody>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row->subjek; ?></td>
                <td>
                    <a target="_blank" href="../../assets/uploads/forum/<?= $row->file ?>">Lihat</a>
                </td>
                <td><?= $row->tipe_file ?></td>
                <td><?= $row->ukuran_file ?> Kb</td>
                <td><?= $row->kategori ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->tgl_forum?></td>
                <td>
                    <a href="komentar.php?kom=<?= $row->id_forum;?>"
                        onclick="javascript:return confirm('Ingin memberikan komentars ?')"><img
                            src="../../assets/img/kom.png" style="width:15px;height:15px;"> Komentar</a>
                    <a href="?hapus=<?= $row->id_forum;?>"
                        onclick="javascript:return confirm('Yakin ingin menghapus data ?')"><img
                            src="../../assets/img/hapus.png" style="width:15px;height:15px;"> Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php endwhile ?>
    </table>
</div>