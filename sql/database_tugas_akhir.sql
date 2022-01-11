-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2022 pada 11.26
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `barang_1` varchar(150) NOT NULL,
  `barang_2` varchar(50) DEFAULT NULL,
  `barang_3` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kuantiti_1` int(10) NOT NULL,
  `kuantiti_2` int(11) DEFAULT NULL,
  `kuantiti_3` int(11) DEFAULT NULL,
  `harga_1` int(11) NOT NULL,
  `harga_2` int(11) DEFAULT NULL,
  `harga_3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id`, `invoice`, `nama`, `barang_1`, `barang_2`, `barang_3`, `status`, `tanggal`, `kuantiti_1`, `kuantiti_2`, `kuantiti_3`, `harga_1`, `harga_2`, `harga_3`) VALUES
(1, 52456, 'Hifumi Takimoto', 'HUION H420 canvas', '', '', 'Lunas', '2021-12-26', 1, 0, 0, 992121, 0, 0),
(7, 55316, 'Afonasei Kiselev', 'T-80 Light Tank', '', '', 'Lunas', '2021-12-22', 1, 0, 0, 1920000256, 0, 0),
(8, 52579, 'David bukan GadgetIN', 'poco x3 pro', '', '', 'Batal', '2021-12-23', 50, 0, 0, 3400000, 0, 0),
(11, 34797, 'wahyu', 'Mouse', 'Monitor Dell', '', 'Batal', '2021-12-24', 10, 145, 0, 85000, 345000, 0),
(12, 47614, 'Carpaccio', 'T-72BM', 't-90A Vladimir', 'T-14 Arman Armata', 'Lunas', '2021-12-24', 120, 70, 35, 2147483647, 2147483647, 2147483647),
(15, 72416, 'Seele vollerei', 'Undine\'s Tale', 'Sanguine Gaze - Union', '', 'Baru', '2021-12-24', 2, 1, 0, 210000, 2000000, 0),
(17, 84219, 'Rie', 'PVC Minato Aqua: Relax Time ver.', 'Pop Up Parade Rin Shima', 'Pop Up Parade Yui Yuigahama', 'Baru', '2021-12-27', 239, 100, 215, 290000, 490000, 470000),
(18, 39939, 'Udin', 'Acer Zephyrus Strix X', 'ROG Strix R15', NULL, 'Baru', '2021-02-13', 1, 21, NULL, 25000000, 16000000, NULL),
(19, 82785, 'Sofwan', 'Kecoa Rakitan', NULL, NULL, 'Baru', '2022-01-10', 1, NULL, NULL, 920000, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
