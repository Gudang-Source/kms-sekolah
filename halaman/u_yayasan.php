<?php
include "../init.php";


if(isset($_POST['submit'])){
    $yayasan = @$_POST['yayasan'];
    $ext1 = explode(".", $_FILES['yayasan']['name']);
    $size1 = $_FILES['yayasan']['size'];
    $file1 = "file-".round(microtime(true)).".".end($ext1);
    $sumber = $_FILES['yayasan']['tmp_name'];
    $extension1 = end($ext1);
    $upload = move_uploaded_file($sumber, "../assets/uploads/organisasi/".$file1);
    $admin->upload_struktur('profile',$file1,'yayasan','u_yayasan');

}
?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Struktur Yayasan</h4>
        </div>
        <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="yayasan">Upload Struktur Yayasan</label>
                    <input type="file" class="form-control" id="yayasan" name="yayasan" required>
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
            Profile yayasan
        </div>
        <div class="main">
            <center>
                <h2>
                    YAYASAN AMAL ISLAMI AL MUMTAAZ</h2>
            </center>
            <label>
                <p>Yayasan Amal Islami Al Mumtaaz adalah organisasi formal yang bergerak di bidang Keagamaan,
                    Pendidikan,
                    Ekonomi, Kesehatan dan Sosial yang mengedepankan ukhuwah Islamiyah. Yayasan Amal Islami Al Mumtaaz
                    berdiri pada tanggal 9 Februari 2002. Untuk memberikan kontribusi dalam kemajuan umat Islam
                    khususnya
                    pendidikan generasi Islam di kota Karawang menuju masa depan Islam yang lebih gemilang yakni
                    masyarakat
                    madani yang dicita-citakan pada tahun 2012 Yayasan Islami Al Mumtaaz mendirikan Sekolah Dasar Islam
                    Al
                    Mumtaaz di Jl. Bukit Muria V No.3 Kav. BMJ Ds. Purwadana, Kec. Telukjambe Timur Karawang dengan izin
                    operasional No.50/Kep.7579/11/IPPS/BPMPT/2013.</p>
                <p>Yayasan Amal Islami Al Mumtaaz merupakan sekolah Islam inklusif yang mengupayakan pembangunan ilmu,
                    akhlaq, dan fisik secara seimbang untuk mengantarkan seluruh warga sekolah menjadi pribadi yang
                    bahagia
                    dan bermanfaat untuk umat dan agama.</p>
            </label>

            <dl>
                <dt><b>I. VISI</b></dt>
                <dd>Menjadi Yayasan Islam yang istiqomah bekerja dengan semangat keikhlasan berlandaskan nilai-nilai Al
                    Qur’an dan sunnah Rosul, untuk mewujudkan kepemimpinan Islam sebagai rahmatan lil ‘alamin di
                    Karawang.
                </dd>

                <br>
                <dt><b>II. MISI</b></dt>
                <ul type='number'>
                    <li>Menjadikan Al Qur’an dan sunnah Rosul, sebagai inspirasi utama untuk mewujudkan kepemimpinan
                        Islam
                        sebagai rahmatan lil’alamin di seluruh aspek dan bidang kehidupan.</li>
                    <li>Menjadikan Dakwah Pendidikan sebagai sarana utama menuju perbaikan umat Islam di Karawang,
                        melalui
                        pembangunan 10 sifat pribadi muslim (10 Muwashofat Tarbiyah).</li>
                    <li>Membina sumber daya manusia yang siap bekerja memperjuangkan kemuliaan Islam.</li>
                    <li>Melaksanakan berbagai kegiatan yang menunjukkan komitmen dan kepedulian terhadap masalah-masalah
                        sosial dan lingkungan.</li>
                    <li>Melaksanakan kegiatan Ekonomi yang dapat mengokohkan kelembagaan yayasan dan menopang program
                        kerja
                        Yayasan.</li>
                </ul>

                <br>
                <dt><b>III. TUJUAN</b></dt>
                <ul type='number'>
                    <li>Mewujudkan suasana keagamaan yang tinggi dalam kegiatan yayasan.</li>
                    <li>Membuat perecanaan dan melaksanakan program-program dakwah sesuai tahapan dan kebutuhan untuk
                        efektifitas keberhasilan dakwah.</li>
                    <li>Berperan aktif dalam dakwah Pendidikan untuk membangun masyarakat Islami yang memiliki 10 sifat
                        pribadi muslim (10 Muwashofat Tarbiyah) dengan fokus pada pembangunan 7 karakter ideal pemimpin
                        muslim.</li>
                    <li>Melaksanakan kegiatan peningkatan kapasitas kepribadian, pengetahuan dan kecakapan SDM secara
                        berkesinambungan.</li>
                    <li>Menyelaraskan visi misi hidup SDM Yayasan kearah pencapaian visi-misi yayasan, sehingga menjadi
                        sinergi yang produktif.</li>
                    <li>Menciptakan suasana kehidupan Islami yang berkasih sayang dan saling menghormati, dilingkungan
                        terdekat dan masyarakat yang lebih luas.</li>
                    <li>Melaksanakan standar pengelolaan kelembagaan Yayasan yang mengedepankan konsep pelayanan yang
                        berkualitas dan terpercaya dalam semua kegiatan yayasan.</li>
                </ul>

                <br>
                <dt><b>IV. ATRIBUT</b></dt>
                <ul type='number'>
                    <li>Logo Yayasan Al Mumtaaz adalah lima bangun segi enam (hexagonal, atau bentuk sarang lebah) yang
                        saling terangkai menyimbolkan lima Bidang kerja Yayasan yang saling bersinergi untuk meraih
                        kesuksesan dakwah.
                        Lebah sendiri adalah makhluk kecil yang dijadikan sebagai perumpamaan bagi umat Islam, karena
                        adanya
                        karakter lebah yang positif, yaitu:
                        <br>- Giat bekerja dan saling bekerjasama
                        <br>- Bekerja profesional, dengan garis komando yang jelas
                        <br>- Mengambil yang baik
                        <br>- Menghasilkan yang baik
                        <br>- Menghindari kerusakan
                        <br>- Anti korupsi
                    </li>

                    <li>Makna logo Yayasan Al Mumtaaz, yaitu :
                        <br>a. Warna Biru : Bermakna damai, stabil, kesungguhan hati & integritas.
                        <br>b. Warna Hijau : Merupakan simbol Islam, alam, bermakna harmoni, keseimbangan, berkembang,
                        kesejahteraan, dan pengetahuan.
                    </li>
                </ul>

                <br>
                <dt><b>V. STRUKTUR ORGANISASI</b></dt>



                <?php 
                $data = $admin->tampil('profile','ket','yayasan');
                while ($row = $data->fetch_object()) {
                ?>
                <img src="../assets/uploads/organisasi/<?= $row->struktur ?>" width="100%">
                <?php }?>

                <br>
                <dt><b>VI. TUGAS DAN WEWENANG</b></dt>
                <ul>
                    <li> Ketua Harian/ Direktur Operasional
                        <dd>- Menetapkan kebijakan opersional kepengurusan</dd>
                        <dd>- Memimpin dan mengkoordinasikan seluruh bagian dan departemen di Yayasan.</dd>
                        <dd>- Mengkoordinasikan pelaksanaan program kerja Yayasan baik perencanaan, pelaksanaan,
                            evaluasi,
                            maupun pertanggungjawaban.</dd>
                        <dd>- Melaksanakan tugas rutin harian.</dd>
                        <dd>- Menyelenggarakan rapat-rapat teknis pengurus yang berkaitan dengan kepengurusan Yayasan
                        </dd>
                        <dd>- Melaksanaan pengendalian dan penertiban Anggaran Operasional Tahunan Yayasan </dd>
                        <dd>- Bertanggung jawab kepada ketua umum.</dd>
                    </li>
                    <br>
                    <li>Sekretaris
                        <dd>- Mengatur dan menertibkan pengorganisasian administrasi Yayasan.</dd>
                        <dd>- Mengatur pengelolaan, pemeliharaan dan inventarisasi barang-barang milik Yayasan.</dd>
                        <dd>- Bertanggung jawab atas terselenggaranya kegiatan operasional harian Yayasan.</dd>
                        <dd>- Mendokumentasikan serta mengarsipkan semua surat-surat masuk maupun keluar.</dd>
                    </li>
                    <br>
                    <li>Bendahara
                        <dd>- Bertanggung jawab atas pengelolaan keuangan Yayasan.</dd>
                        <dd>- Membuat laporan keuangan secara periodik dan secara tertulis yang disampaikan secara
                            berkala.
                        </dd>
                        <dd>- Menyusun dan mengatur anggaran dengan mengkoordinasikan kepada Ketua Umum.</dd>
                        <dd>- Mengatur pencatatan, penerimaan, penyimpanan, dan pengeluaran keuangan, surat-surat
                            berharga,
                            bukti kas yang berhubungan dengan kegiatan Yayasan dan dlaporkan secara transparan.</dd>
                        <dd>- Mempunyai hak bertanya dan menyelenggarakan audit keuangan pada setiap kepanitiaan
                            kegiatan.
                        </dd>
                        <dd>- Bertanggung jawab kepada Ketua Umum.</dd>
                    </li>
                </ul>
            </dl>
        </div>
    </div>
</div>