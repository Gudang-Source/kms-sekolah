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