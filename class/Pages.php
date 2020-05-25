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
                <a href="u_yayasan.php">Upload Yayasan</a>
                <a href="u_prasekolah.php">Upload Pra Sekolah</a>
                <a href="u_ra.php">Upload RA</a>
                <a href="u_sd.php">Upload SD</a>
                <a href="u_smp.php">Upload SMP</a>
                <a href="u_lttq.php">Upload LLTQ</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Pengguna
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="tambah_pengguna.php">Tambah Pengguna</a>
                <a href="?halaman=kelola_pengguna">Data Pengguna</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">File
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="tambah_file.php">Upload File</a>
                <a href="kelola_file.php">Kelola File</a>
                <a href="tambah_link.php">Upload Link</a>
                <a href="kelola_link.php">Kelola Link</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Modul
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="tambah_modul.php">Upload Modul</a>
                <a href="kelola_modul.php">Kelola Modul</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Forum
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="tambah_forum.php">Tambah Forum</a>
                <a href="kelola_forum.php">Kelola Forum</a>
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