-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2025 pada 20.02
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_hewan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hewan`
--

CREATE TABLE `tb_hewan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_hewan`
--

INSERT INTO `tb_hewan` (`id`, `nama`, `jenis`, `gambar`, `deskripsi`) VALUES
(1, 'Sapi', 'Herbivora', 'https://i.imghippo.com/files/CI6752as.webp', 'Sapi adalah hewan berkaki empat yang tubuhnya besar. Warnanya bisa cokelat, hitam, atau putih. Sapi suka makan rumput dan minum air banyak. Suaranya “moo… moo…”. Sapi adalah hewan yang jinak dan sering hidup di peternakan. Dari sapi, kita bisa mendapatkan susu yang sehat untuk diminum anak-anak.'),
(2, 'Singa', 'Karnivora', 'https://i.ibb.co/sb8mV6H/singa.jpg', 'Singa adalah hewan buas pemakan daging.'),
(3, 'Ayam', 'Omnivora', 'https://i.ibb.co/PY2rYVZ/ayam.jpg', 'Ayam makan biji-bijian dan serangga.'),
(4, 'Kelinci', 'Herbivora', 'https://i.ibb.co/PY2rYVZ/ayam.jpg', 'Kelinci adalah hewan kecil yang lucu. Badannya berbulu halus dan lembut. Kelinci punya telinga panjang, mata bulat, dan kaki belakang yang kuat untuk melompat. Kelinci suka makan wortel dan sayur-sayuran. Kelinci juga hewan yang jinak dan suka berlari-lari kecil.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_hewan`
--
ALTER TABLE `tb_hewan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_hewan`
--
ALTER TABLE `tb_hewan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
