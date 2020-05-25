<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";
include "adm_header.php";
$admin = new Admin();

// HAPUS
if(@$_GET['hapus']){
    $id= $_GET['hapus'];
    $admin->hapus('link','id',$id);
}

?>


<link rel="stylesheet" href="../../assets/css/table.css">
<br>
<br>
<br><br>
<div class="main">
    <button class="button button1"><a href="kelola_link.php">Upload Link</a></button>
</div>
<div class="table-container">
<table border=1 style="border-collapse: collapse"> 
<thead>
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Jenis</th>
    <th>Link</th>
    <th>Keterangan</th>
    <th>Created</th>
    <th>Aksi</th>
</tr>
</thead>

<?php
    $no = 1;
    $data = $admin->tampil('link','','');
    while ($row = $data->fetch_object()) :
?>

<tbody>
<tr>    
    <td><?= $no++; ?></td>
    <td><?= $row->judul; ?></td>
    <td><?= $row->jenis ?></td>
    <td>
    <a target="_blank" href="<?= $row->link ?> ?>"> <img src="../../assets/img/link.png" style="width:10px;height:10px;"> Lihat</a>
    </td>
    <td><?= $row->ket ?></td>
    <td><?= $row->created?></td>
    <td>
        <a href="edit_link.php?ubah=<?= $row->id;?>" onclick="javascript:return confirm('Yakin ingin merubah data ?')" ><img src="../../assets/img/edit.png" style="width:15px;height:15px;"> Edit</a>
        <a href="?hapus=<?= $row->id;?>" onclick="javascript:return confirm('Yakin ingin menghapus data ?')" ><img src="../../assets/img/hapus.png" style="width:15px;height:15px;"> Hapus</a>
    </td>
</tr>
</tbody>
<?php endwhile ?>
</table>
</div>