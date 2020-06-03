<?php
$admin  = new Admin;

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $admin->hapus_file('file',$id);
}