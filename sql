-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Jul 2024 pada 14.52
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunnah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `namakategori` varchar(250) NOT NULL,
  `subkategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `namakategori`, `subkategori`) VALUES
(1, 'Sunnah Yang Ditetapkan Waktunya', 'Isya'),
(2, 'Sunnah Yang Ditetapkan Waktunya', 'Ashar'),
(3, 'Sunnah Makanan', ''),
(4, 'Sunnah Dalam Salam', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sunnah`
--

CREATE TABLE `sunnah` (
  `id` int(11) NOT NULL,
  `judul` varchar(32) NOT NULL,
  `desk` varchar(32) NOT NULL,
  `sub` varchar(32) NOT NULL,
  `kategori` varchar(32) NOT NULL,
  `favorit` varchar(255) NOT NULL,
  `hour` varchar(32) NOT NULL,
  `minute` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sunnah`
--

INSERT INTO `sunnah` (`id`, `judul`, `desk`, `sub`, `kategori`, `favorit`, `hour`, `minute`) VALUES
(1, 'Judul 1', 'Deskripsi', 'Isya', 'Sunnah Yang Ditetapkan Waktunya', '1', '', ''),
(2, 'Judul 2', 'Deskripsi', 'Ashar', 'Sunnah Yang Ditetapkan Waktunya', '0', '', ''),
(3, 'Judul 3', 'Deskripsi', '0', 'Sunnah Makanan', '0', '', ''),
(4, 'Judul 4', 'Deskripsi', '0', 'Sunnah Makanan', '99', '12', '14'),
(5, 'Judul 5', 'Deskripsi', '0', 'Sunnah Makanan', '99', '20', '22'),
(6, 'Judul 6', 'Deskripsi', '0', 'Sunnah Makanan', '0', '', ''),
(7, 'Judul 7', 'Deskripsi', '0', 'Sunnah Dalam Salam', '0', '', ''),
(8, 'Judul 8', 'Deskripsi', '0', 'Sunnah Dalam Salam', '1', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sunnah`
--
ALTER TABLE `sunnah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `sunnah`
--
ALTER TABLE `sunnah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
