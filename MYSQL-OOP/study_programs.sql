-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2024 pada 11.52
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb-2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `study_programs`
--

CREATE TABLE `study_programs` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `study_programs`
--

INSERT INTO `study_programs` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(331, 'Teknik Informatika', '2024-09-13 08:04:12', '2024-09-13 08:04:12', '2024-09-13 08:04:12'),
(332, 'Ilmu Komunikasi', '2024-09-13 08:05:02', '2024-09-13 08:05:02', '2024-09-13 08:05:02'),
(333, 'Manajemen', '2024-09-13 09:12:41', '2024-09-13 09:12:41', '2024-09-13 09:12:41'),
(334, 'Sastra Inggris', '2024-09-13 09:13:06', '2024-09-13 09:13:06', '2024-09-13 09:13:06'),
(335, 'Rekayasa Keamanan Siber', '2024-09-13 09:13:59', '2024-09-13 09:13:59', '2024-09-13 09:13:59'),
(336, 'Multimedia', '2024-09-13 09:15:40', '2024-09-13 09:15:40', '2024-09-13 09:15:40'),
(337, 'Teknik Mesin', '2024-09-13 09:16:25', '2024-09-13 09:16:25', '2024-09-13 09:16:25'),
(338, 'Teknik Elektronika', '2024-09-13 09:17:04', '2024-09-13 09:17:04', '2024-09-13 09:17:04'),
(339, 'Teknik Pengendalian Pencemaran Lingkungan', '2024-09-13 09:17:41', '2024-09-13 09:17:41', '2024-09-13 09:17:41'),
(340, 'Pertanian', '2024-09-13 09:19:05', '2024-09-13 09:19:05', '2024-09-13 09:19:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `study_programs`
--
ALTER TABLE `study_programs`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
