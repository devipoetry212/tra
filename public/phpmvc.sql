-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Sep 2023 pada 07.24
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `mapel` varchar(225) NOT NULL,
  `kode_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `mapel`, `kode_guru`) VALUES
(3, 'Ivans Zuwanta, S.Kom', 'Basis Data', 39),
(8, 'Ervi Rahmawati, ST', 'Dasar Desain Grafis', 45),
(9, 'Fikrotu Dwi Fuadatuzzahro, S.pd', 'Pemrograman Web dan Perangkat Bergerak', 57),
(10, 'Wahyu Tri Wulan Sari, S.pd', 'PKWU', 61),
(11, 'Estri Handayani, S,pd', 'PBO', 42),
(12, 'Novi Dyah Puspitasari, S.Pd', 'PPL', 70),
(13, 'Labib Fayumi, S.Pd. Gr', 'PKWU', 79),
(14, 'Safira Maya Shovie, S.Pd', 'PBO', 93);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komli`
--

CREATE TABLE `komli` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komli`
--

INSERT INTO `komli` (`id`, `nama`, `keterangan`) VALUES
(1, 'Rekayasa Perangkat Lunak (RPL)', ''),
(3, 'Desain Pemodelan dan Informasi Bangunan', ''),
(4, 'Teknik Konstruksi dan Perumahan', ''),
(5, 'Akuntansi', ''),
(6, 'Kuliner', ''),
(8, 'TPTUP', ''),
(9, 'Teknik Pengelasan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(8, 'Argita Dwi Yuliana', 'perempuan', 'Sumberingin'),
(9, 'Dela Ayu Aprilia', 'perempuan', 'Jatiprahu'),
(10, 'Detra Rosiana', 'perempuan', 'Winong'),
(11, 'Devi Saputri', 'perempuan', 'Pule'),
(14, 'Abella Nindia Eka Pradana', 'perempuan', 'Pule'),
(15, 'Alysa Febia Mutoharoh', 'perempuan', 'Pule'),
(16, 'Dinda Enjelina Dianti', 'perempuan', 'Tugu'),
(17, 'Ardya Nazillia Renata', 'perempuan', 'Karangan'),
(19, 'Arkan Arya Reza Maulana', 'laki-laki', 'Suruh'),
(20, 'Eka Nanda Susila', 'laki-laki', 'Pule'),
(21, 'Alfinanda Rangga Satria', 'laki-laki', 'Pule'),
(22, 'Dimas Wahyu Saputra', 'laki-laki', 'Tugu'),
(23, 'Dhanu Tirta Sugestiawan', 'laki-laki', 'Dawuhan'),
(24, 'Bagas Dwi Cahyo', 'laki-laki', 'Pule'),
(25, 'Diaz Ibanes Kaka Aulia Hadi', 'laki-laki', 'Pule');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komli`
--
ALTER TABLE `komli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `komli`
--
ALTER TABLE `komli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
