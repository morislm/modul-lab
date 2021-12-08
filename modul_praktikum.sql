-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2021 pada 13.15
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul_praktikum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id_dosen` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nidn` varchar(18) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_jurusan` int(2) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_dosen`
--

INSERT INTO `data_dosen` (`id_dosen`, `nama`, `nip`, `nidn`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `id_jurusan`, `no_hp`, `email`, `status`) VALUES
('DSN00004', 'Moris Leo Monansa', '2345676543', '32424234', '', '5252355235235', '2021-08-17', '52353253245', 1, '46645656', 'rtrtrt@gmail.com', '1'),
('DSN00005', 'Prisilla', '4234567890-', '876567', '', 'fdfafa', '2021-08-17', 'fafasfasf', 1, 'fasdfasf', 'ffsaffd@rsfs.com', '1'),
('DSN00006', 'Apriyani', 'oiuytrewer', 'retwtwer', 'P', 'twetwet', '2021-07-28', 'twtwett', 2, '453422', 'dsfgdsfggg@gsgvsags.vom', '1'),
('DSN00007', 'Moris Leo Monansa', '199308292020121003', '8465758', 'L', 'Unaaha', '1993-08-29', 'Jl. Sawerigading', 3, '081233616688', 'morisleo.m@gmail.com', '1'),
('DSN00008', 'Rischa', '1234567890', '43', 'P', 'vsgsdlng', '0011-01-05', 'fsfsefserfersfsf', 1, '45674384298', 'hawdugwaud@gmail.com', '1'),
('DSN00009', 'Zulfikar', '987654321', '42364823', 'L', 'fsfsfsdf', '2021-07-26', 'gsdgsdf', 1, '2922+22', 'sfsfsfd@gmail.com', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jurusan`
--

CREATE TABLE `data_jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `nama_jurusan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_jurusan`
--

INSERT INTO `data_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Keperawatan'),
(2, 'Kebidanan'),
(3, 'Gizi'),
(4, 'TLM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tahun_masuk` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_materi`
--

CREATE TABLE `data_materi` (
  `id_materi` int(11) NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `path` varchar(100) NOT NULL,
  `id_sub_menu_belajar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_menu_belajar`
--

CREATE TABLE `data_menu_belajar` (
  `id_menu_belajar` int(11) NOT NULL,
  `menu_belajar` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_menu_belajar`
--

INSERT INTO `data_menu_belajar` (`id_menu_belajar`, `menu_belajar`, `icon`) VALUES
(1, 'Pemeriksaan Umum\r\n', 'infused-water.png'),
(2, 'Kebutuhan Oksigen\r\n', 'oxigen.png'),
(3, 'Kebutuhan Cairan\r\n', 'consultation.png'),
(4, 'Kebutuhan Nutrisi\r\n', 'plan.png'),
(5, 'Kebutuhan Eliminsasi\r\n', 'medical-history.png'),
(6, 'Keutuhan Keamanan dan Kenyamanan\r\n', 'patient.png'),
(7, 'Kebutuhan Aktivitas\r\n', 'vaccine.png'),
(8, 'Kebutuhan Kebersihan Diri\r\n', 'vaccine.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sub_menu_belajar`
--

CREATE TABLE `data_sub_menu_belajar` (
  `id_sub_menu_belajar` int(11) NOT NULL,
  `sub_menu_belajar` varchar(100) NOT NULL,
  `id_menu_belajar` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_sub_menu_belajar`
--

INSERT INTO `data_sub_menu_belajar` (`id_sub_menu_belajar`, `sub_menu_belajar`, `id_menu_belajar`) VALUES
(1, 'Pemeriksaan Fisik\r\n', '1'),
(2, 'Tanda-Tanda Vital\r\n', '1'),
(3, 'Pemberian Oksigen\r\n', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `user_id` varchar(18) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(2) NOT NULL COMMENT '1:superadmin, 2:admin, 3:Dosen, 4:Mahasiswa',
  `name` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`user_id`, `username`, `password`, `level`, `name`, `status`) VALUES
('199004062020122003', 'admin', '7c222fb2927d828af22f592134e8932480637c0d', 2, 'Administrator', '1'),
('DSN00008', '1234567890', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 3, 'Rischa', '1'),
('DSN00009', 'zulfikar', '99f64192e3da6762fa2ed9fda094bacd97c57695', 2, 'Zulfikar', '1'),
('MHS0001', 'mutia', '7c222fb2927d828af22f592134e8932480637c0d', 4, 'Mutia Herlita Putri', '1'),
('SA1', 'superadmin', '7c8c668aa3d99a86cc0d38ff10b40c76a72c602d', 1, 'Super Admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `data_jurusan`
--
ALTER TABLE `data_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `data_materi`
--
ALTER TABLE `data_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `data_menu_belajar`
--
ALTER TABLE `data_menu_belajar`
  ADD PRIMARY KEY (`id_menu_belajar`);

--
-- Indeks untuk tabel `data_sub_menu_belajar`
--
ALTER TABLE `data_sub_menu_belajar`
  ADD PRIMARY KEY (`id_sub_menu_belajar`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_jurusan`
--
ALTER TABLE `data_jurusan`
  MODIFY `id_jurusan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_materi`
--
ALTER TABLE `data_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_menu_belajar`
--
ALTER TABLE `data_menu_belajar`
  MODIFY `id_menu_belajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_sub_menu_belajar`
--
ALTER TABLE `data_sub_menu_belajar`
  MODIFY `id_sub_menu_belajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
