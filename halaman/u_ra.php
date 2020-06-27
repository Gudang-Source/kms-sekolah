<?php
include "../init.php";

if(isset($_POST['submit'])){
    $ra = @$_POST['ra'];
    $ext1 = explode(".", $_FILES['ra']['name']);
    $size1 = $_FILES['ra']['size'];
    $file1 = "file-".round(microtime(true)).".".end($ext1);
    $sumber = $_FILES['ra']['tmp_name'];
    $extension1 = end($ext1);
    $upload = move_uploaded_file($sumber, "../assets/uploads/organisasi/".$file1);
    $admin->upload_struktur('profile',$file1,'ra','u_ra');

}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Raudhatul Athfalh</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="ra">Upload</label>
                    <input type="file" class="form-control" id="ra" name="ra" required>
                </div>
                <button type="submit" name="submit" class="btn btn-submit">Upload</button>
            </form>
        </div>
    </div>
</div>

<?php 

include "../init.php";
?>
<style>
.main {
    padding: 0px 20px;
}
</style>
<div class="container">
    <div class="card">
        <div class="card-header">
            Profile Ra Al Muntaaz
        </div>
        <div class="main">

            <center>
                <h2>RA AL MUMTAAZ</h2>
            </center>


            <dl>
                <dt><b>I. Visi dan Misi Unit RA Al Mumtaaz</b></dt>
                <dd>VISI</dd>
                <dd>Menjadi penyelenggara pendidikan di tingkat Usia Dini, untuk mewujudkan Islam sebagai rahmatan
                    lil’alamin.
                </dd>

                <br>
                <dd>MISI</dd>
                <dd>
                    <ul type=''>
                        <li>Menyelenggarakan pendidikan inklusif dengan pendekatan belajar ramah fitrah (fitrah
                            Ilahiah,
                            belajar, perkembangan dan bakat) untuk usia untuk usia 4-6 tahun.</li>
                        <li>Menjadi pusat belajar metode sentra.</li>
                        <li>Mengenalkan Al Qur’an dan menyiapkan kemampuan tahsin tahfidz.</li>
                        <li>Membangun SDM guru yang ikhlas, berkepribadian Muslim (10 Muwashofat Tarbiyah), memenuhi
                            standar kompetensi guru Al Mumtaaz, dan profesional.</li>
                    </ul>
                </dd>

                <br>
                <dt><b>II. Struktur Organisasi Unit RA</b></dt>
                <?php 
                $data = $admin->tampil('profile','ket','ra');
                while ($row = $data->fetch_object()) {
                ?>
                <img src="../assets/uploads/organisasi/<?= $row->struktur ?>" width="100%">
                <?php }?>

        </div>
    </div>
</div>