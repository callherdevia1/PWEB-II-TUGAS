-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2024 pada 11.51
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
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` int(12) NOT NULL,
  `nim` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `signature` varchar(50) NOT NULL,
  `number_phone` int(25) NOT NULL,
  `user_id` int(50) NOT NULL,
  `student_class_id` int(50) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nim`, `name`, `address`, `signature`, `number_phone`, `user_id`, `student_class_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(221, 230202031, 'Devia Kippuw', 'Jl. Tentara Pelajar 11', 'Ttd Students', 895313276, 56579, 8981, '2024-09-13 06:11:44', '2024-09-13 06:11:44', '2024-09-13 06:11:44'),
(222, 230103054, 'Fia Jenner', 'Jl. Sandiego Hills 21', 'Ttd Students', 895454789, 56581, 8982, '2024-09-13 06:51:25', '2024-09-13 06:51:25', '2024-09-13 06:51:25'),
(223, 230202034, 'Dinda Arumningtyas', 'Jl. Munggur Timur 33', 'Ttd Students', 896780956, 56582, 8983, '2024-09-13 09:24:10', '2024-09-13 09:24:10', '2024-09-13 09:24:10'),
(224, 230102045, 'Anay Aprilia', 'Jl. Gang Pendidikan', 'Ttd Students', 897090678, 56583, 8984, '2024-09-13 09:28:59', '2024-09-13 09:28:59', '2024-09-13 09:28:59'),
(225, 230202089, 'Bara Mulia', 'Jl. Perintis Kemerdekaan', 'Ttd Students', 895727222, 56584, 8985, '2024-09-13 09:33:11', '2024-09-13 09:33:11', '2024-09-13 09:33:11'),
(226, 230102057, 'Shela Andini', 'Jl. MT Haryono', 'Ttd Students', 812768734, 56585, 8986, '2024-09-13 09:36:14', '2024-09-13 09:36:14', '2024-09-13 09:36:14'),
(227, 230203076, 'Ana Salusi', 'Jl. Kubangkangkung', 'Ttd Students', 821874578, 56586, 8987, '2024-09-13 09:38:56', '2024-09-13 09:38:56', '2024-09-13 09:38:56'),
(228, 230106643, 'Fanny Purwanto ', 'Jl. Dr Soetomo ', 'Ttd Students', 921347809, 56587, 8988, '2024-09-13 09:41:59', '2024-09-13 09:41:59', '2024-09-13 09:41:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
