-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2020 pada 02.39
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `subjek` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(5) NOT NULL,
  `size` varchar(10) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id`, `subjek`, `kategori`, `keterangan`, `file`, `type`, `size`, `created`) VALUES
(5, 'File 1', 'materi', 'Materi file 1', 'file-1591445624.pdf', 'pdf', '758889', '2020-06-06 19:13:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `subjek` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL,
  `tipe_file` varchar(5) NOT NULL,
  `ukuran_file` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tgl_forum` datetime NOT NULL,
  `nama` varchar(30) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id_forum`, `subjek`, `file`, `tipe_file`, `ukuran_file`, `kategori`, `tgl_forum`, `nama`, `konten`) VALUES
(1, 'subjek', 'file-1591456612.png', 'png', '78813', 'umum', '2020-06-06 22:16:51', 'Sutianah', 'as');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `kd_komentar` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `tgl_komentar` datetime NOT NULL,
  `komentar` text NOT NULL,
  `nama` varbinary(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='nama';

-- --------------------------------------------------------

--
-- Struktur dari tabel `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `link` varchar(50) NOT NULL,
  `judul` text NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `ket` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `link`
--

INSERT INTO `link` (`id`, `link`, `judul`, `jenis`, `ket`, `created`) VALUES
(6, 'https://www.youtube.com/channel/UCOX3JLJyVEhnUhC-G', 'Video Edulasi Saass', 'Video', 'Cara pembelajaran oke', '2019-10-13 08:41:33'),
(9, 'https://www.youtube.com/watch?v=Bd-dYWpbkdk', 'Video Pendidikan Inklusif', 'Video', 'Video ini memperlihatkan gambaran pelaksanaan pembelajaran di kelas yang memfasilitasi siswa ABK dan siswa nonABK sehingga mereka dapat belajar bersama dengan baik. ', '2019-10-14 17:40:10'),
(10, 'http://localhost/kms_sekolah/halaman/index.php?hal', 'attikel judul', 'Artikel', 'ketengana ini ahanyad', '2020-06-04 07:01:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `modul` varchar(30) NOT NULL,
  `ket` varchar(244) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(5) NOT NULL,
  `size` varchar(10) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id`, `judul`, `modul`, `ket`, `file`, `type`, `size`, `created`) VALUES
(12, 'Modul Oke', 'modul khusus', 'as\r\n', 'file-1591451905.pdf', 'pdf', '758889', '2020-06-06 20:58:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `status` varchar(30) NOT NULL,
  `akses` enum('admin','user') NOT NULL,
  `password` varchar(80) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nik`, `nama`, `jk`, `status`, `akses`, `password`, `created`) VALUES
(2, '3215', 'nurjanah', 'perempuan', 'Guru', 'admin', 'f970e2767d0cfe75876ea857f92e319b', '2019-10-13 00:06:26'),
(7, '32156', 'Sutianah', 'perempuan', 'Guru', 'user', 'f970e2767d0cfe75876ea857f92e319b', '2019-10-14 17:34:27'),
(8, '32157', 'M azis', 'laki-laki', 'Guru', 'user', 'f970e2767d0cfe75876ea857f92e319b', '2019-10-14 17:35:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `struktur` varchar(30) NOT NULL,
  `ket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `struktur`, `ket`) VALUES
(1, 'file-1591747667.png', 'yayasan'),
(2, 'file-1591748000.png', 'pra sekolah'),
(3, 'file-1591748223.jpg', 'ra'),
(4, 'file-1591748463.png', 'sd'),
(5, 'file-1591748633.jpg', 'smp'),
(6, 'file-1591749136.png', 'lttq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`kd_komentar`),
  ADD KEY `kd_forum` (`id_forum`);

--
-- Indeks untuk tabel `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `kd_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `modul`
--
ALTER TABLE `modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
