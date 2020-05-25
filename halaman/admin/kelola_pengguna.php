<?php
include "../../class/class_database.php";
include "../../class/class_admin.php";
include "adm_header.php";
$admin = new Admin();


// HAPUS
if(@$_GET['hapus']){
    $id= $_GET['hapus'];
    $admin->hapus('pengguna','id',$id);
}
?>

<link rel="stylesheet" href="../../assets/css/table.css">
<br>
<br>
<br><br>
<div class="main">
    <button class="button button1"><a href="tambah_pengguna.php">Tambah</a></button>
</div>
<div class="table-container">
<table border=1 style="border-collapse: collapse"> 
<thead>
<tr>
    <th>no</th>
    <th>NIK</th>
    <th>nama</th>
    <th>kelamin</th>
    <th>status</th>
    <th>akses</th>
    <th>created</th>
    <th>Aksi</th>
</tr>
</thead>

<?php
    $no = 1;
    $data = $admin->tampil('pengguna','','');
    while ($row = $data->fetch_object()) :
?>

<tbody>
<tr>    
    <td><?= $no++; ?></td>
    <td><?= $row->nik; ?></td>
    <td><?= $row->nama ?></td>
    <td><?= $row->jk ?></td>
    <td><?= $row->status ?></td>
    <td><?= $row->akses ?></td>
    <td><?= $row->created?></td>
    <td>
        <a href="edit_pengguna.php?ubah=<?= $row->id;?>" onclick="javascript:return confirm('Yakin ingin merubah data ?')" ><img src="../../assets/img/edit.png" style="width:15px;height:15px;"> Edit</a>
        <a href="?hapus=<?= $row->id;?>" onclick="javascript:return confirm('Yakin ingin menghapus data ?')" ><img src="../../assets/img/hapus.png" style="width:15px;height:15px;"> Hapus</a>
    </td>
</tr>
</tbody>
<?php endwhile ?>
</table>
</div>