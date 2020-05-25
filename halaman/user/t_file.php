<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";
include "usr_header.php";
$admin = new Admin();

?>


<link rel="stylesheet" href="../../assets/css/table.css">
<br>
<br>
<br><br>
<div class="main">

</div>
<div class="table-container">
<table border=1 style="border-collapse: collapse"> 
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

</tr>
</thead>

<?php
    $no = 1;
    $data = $admin->tampil('file','','');
    while ($row = $data->fetch_object()) :
?>

<tbody>
<tr>    
    <td><?= $no++; ?></td>
    <td><?= $row->subjek; ?></td>
    <td><?= $row->kategori ?></td>
    <td><?= $row->keterangan ?></td>
    <td> 
        <a target="_blank" href="../../assets/uploads/files/<?= $row->file ?>" style="color:blue">Lihat</a>
        <!-- <img src="../../assets/uploads/files/<?= $row->file ?>" width="20px" > -->
    </td>
    <td><?= $row->type ?></td>
    <td><?= $row->size ?> Kb</td>
    <td><?= $row->created?></td>

</tr>
</tbody>
<?php endwhile ?>
</table>
</div>