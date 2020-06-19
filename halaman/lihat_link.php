<?php
include "../init.php";

?>


<div class="container">
    <div class="card">
        <div class="card-body" style="padding: 10px;">
            <a href="?halaman=tambah_link" class="btn btn-submit">Lihat Link</a>
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

            </tr>

            <?php
    $no = 1;
    $data = $admin->tampil('link','','');
    while ($row = $data->fetch_object()) :
?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row->judul; ?></td>
                <td><?= $row->jenis ?></td>
                <td>
                    <a target="_blank" href="<?= $row->link ?> ?>"> <img src="../assets/img/link.png"
                            style="width:10px;height:10px;"> Lihat</a>
                </td>
                <td><?= $row->ket ?></td>

            </tr>
            <?php endwhile ?>
        </table>
    </div>
</div>