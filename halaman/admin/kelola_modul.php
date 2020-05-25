<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";
include "adm_header.php";
$admin = new Admin();

if(@$_GET['hapus']){
    $id= $_GET['hapus'];
    $admin->hapus('modul','id',$id);
}

?>


<link rel="stylesheet" href="../../assets/css/table.css">
<br>
<br>
<br><br>
<div class="main">
    <button class="button button1"><a href="tambah_modul.php">Uload Modul</a></button>
</div>
<div class="table-container">
<table border=1 style="border-collapse: collapse"> 
<thead>
<tr>
    <th>No</th>
    <th>Judul Modul</th>
    <th>Modul</th>
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
    $data = $admin->tampil('modul','','');
    while ($row = $data->fetch_object()) :
?>

<tbody>
<tr>    
    <td><?= $no++; ?></td>
    <td><?= $row->judul; ?></td>
    <td><?= $row->modul ?></td>
    <td><?= $row->keterangan ?></td>
    <td>
        <a target="_blank" href="../../assets/uploads/moduls/<?= $row->file ?>">Lihat</a>
    </td>
    <td><?= $row->type ?></td>
    <td><?= $row->size ?> Kb</td>
    <td><?= $row->created?></td>
    <td>
        <a href="edit_modul.php?ubah=<?= $row->id;?>" onclick="javascript:return confirm('Yakin ingin merubah data ?')" ><img src="../../assets/img/edit.png" style="width:15px;height:15px;"> Edit</a>
        <a href="?hapus=<?= $row->id;?>" onclick="javascript:return confirm('Yakin ingin menghapus data ?')" ><img src="../../assets/img/hapus.png" style="width:15px;height:15px;"> Hapus</a>
    </td>
</tr>
</tbody>
<?php endwhile ?>
</table>
</div>