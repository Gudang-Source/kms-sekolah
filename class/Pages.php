<?php 
class Pages{
    
    public function index()
    {
        if(is_null($_SESSION['akses'])){
            echo "<script>location.href='../index.php'</script>";
        }
        ?>
<link rel="stylesheet" href="../assets/css/style_user.css">
<style>
.nav {
    padding: 14px 16px;
}
</style>
<div class="navbar">
    <div class="main-nav">
        <a class="nav" href="index.php">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Profile
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?halaman=u_yayasan">Upload Yayasan</a>
                <a href="?halaman=u_prasekolah">Upload Pra Sekolah</a>
                <a href="?halaman=u_ra">Upload RA</a>
                <a href="?halaman=u_sd">Upload SD</a>
                <a href="?halaman=u_smp">Upload SMP</a>
                <a href="?halaman=u_lttq">Upload LLTQ</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Pengguna
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?halaman=tambah_pengguna">Tambah Pengguna</a>
                <a href="?halaman=kelola_pengguna">Data Pengguna</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">File
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?halaman=tambah_file">Upload File</a>
                <a href="?halaman=kelola_file">Kelola File</a>
                <a href="?halaman=tambah_link">Upload Link</a>
                <a href="?halaman=kelola_link">Kelola Link</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Modul
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?halaman=tambah_modul">Upload Modul</a>
                <a href="?halaman=kelola_modul">Kelola Modul</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Forum
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="?halaman=tambah_forum">Tambah Forum</a>
                <a href="?halaman=kelola_forum">Kelola Forum</a>
            </div>
        </div>
        <a class="nav" href="../logout.php">Logout</a>
        <img src="../assets/img/logo.png" style="width:150px;height:35px;padding-top:5px; float:right;">
    </div>
</div>

<?php 
        if(!isset($_GET['halaman'])){
            include 'p_admin.php';
        }else{
            if(file_exists($_GET['halaman'].'.php')){
                include $_GET['halaman'] . '.php';
            }else{
                include 'p_admin.php';
            }
        }
        ?>
<?php }

}?>