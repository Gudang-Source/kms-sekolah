<?php
include "../init.php";

$admin = new Admin();


?>


<?php
include "../init.php";

?>


<div class="container">
    <div class="card">
        <div class="card-body" style="padding: 10px;">
            <a href="?halaman=tambah_forum" class="btn btn-submit">Tambah Forum</a>
        </div>
    </div>
    <div class="card">
        <table style="text-align: center;" class="table">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Jenis</th>
                <th>Link</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>

            <?php
    $no = 1;
    $data = $admin->tampil('forum','','');
    while ($row = $data->fetch_object()) :
?>
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
            <?php endwhile ?>
        </table>
    </div>
</div>