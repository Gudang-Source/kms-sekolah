<?php
$admin  = new Admin;

if (isset($_GET['hapus'])) {

    $id = $_GET['hapus'];

    $admin->hapus_forum('forum',$id);
}