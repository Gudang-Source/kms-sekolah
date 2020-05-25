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
<br>
<div class="table-container">
<table border=1 style="border-collapse: collapse"> 
<thead>
<tr>
    <th>No</th>
    <th>Judul Modul</th>
    <th>Keterangan</th>
    <th>File</th>
    <th>Type</th>
    <th>Size</th>
    <th>Created</th>
</tr>
</thead>

<?php
    $no = 1;
    $data = $admin->tampil('modul','modul','modul khusus');
    while ($row = $data->fetch_object()) :
?>

<tbody>
<tr>    
    <td><?= $no++; ?></td>
    <td><?= $row->judul; ?></td>
    <td><?= $row->modul ?></td>
    <td>
        <a target="_blank" style="color:blue" href="../../assets/uploads/moduls/<?= $row->file ?>">Lihat</a>
    </td>
    <td><?= $row->type ?></td>
    <td><?= $row->size ?> Kb</td>
    <td><?= $row->created?></td>
</tr>
</tbody>
<?php endwhile ?>
</table>
</div>