<?php
include "../init.php";
if(isset($_POST['submit'])){
    $lttq = @$_POST['lttq'];
    $ext1 = explode(".", $_FILES['lttq']['name']);
    $size1 = $_FILES['lttq']['size'];
    $file1 = "file-".round(microtime(true)).".".end($ext1);
    $sumber = $_FILES['lttq']['tmp_name'];
    $extension1 = end($ext1);
    $upload = move_uploaded_file($sumber, "../assets/uploads/organisasi/".$file1);
    $admin->upload_struktur('profile',$file1,'lttq','u_lttq');

}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>LTTQ</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="lttq">Upload LTTQ</label>
                    <input type="file" class="form-control" id="lttq" name="lttq" required>
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
            Profile LTTQ Al Muntaaz
        </div>
        <div class="main">

            <center>
                <h2>LTTQ AL MUMTAAZ</h2>
            </center>

            <dl>
                <dt><b>I. Visi dan Misi Unit Sekolah Dasar Islam Al Mumtaaz</b></dt>
                <dd>VISI</dd>
                <dd>Menjadi penyelenggara pendidikan di Tingkat Sekolah Dasar, untuk mewujudkan Islam sebagai rahmatan
                    lil’alamin.
                </dd>
                <br>
                <dd>MISI</dd>
                <dd>
                    <ul type=''>
                        <li>Menyelenggarakan pendidikan inklusif dengan pendekatan belajar ramah fitrah (fitrah Ilahiah,
                            belajar, perkembangan dan bakat) untuk usia untuk usia untuk usia 6-12 tahun.</li>
                        <li>Menjadi tempat observasi penyelenggaraan Pendidikan Inklusif.</li>
                        <li>Membangun pemahaman Al Qur’an melalui melalui penguatan Keagamaan, Kesejarahan dan Sains.
                        </li>
                        <li>Mengoptimalkan kemampuan tahsin, tahfizd dan Bahasa Arab.</li>
                        <li>Membangun SDM guru yang ikhlas, berkepribadian Muslim (10 Muwashofat Tarbiyah), memenuhi
                            standar
                            kompetensi guru Al Mumtaaz, dan profesional.</li>

                    </ul>
                </dd>

                <br>
                <dt><b>II. 1.Struktur Organisasi LTTQ</b></dt>

                <?php 
                $data = $admin->tampil('profile','ket','lttq');
                while ($row = $data->fetch_object()) {
                ?>
                <img src="../assets/uploads/organisasi/<?= $row->struktur ?>" width="100%">
                <?php }?>

        </div>
    </div>
</div>