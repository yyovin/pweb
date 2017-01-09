-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jan 2017 pada 03.37
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectukm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` char(255) NOT NULL,
  `no_telp` char(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nim` int(8) NOT NULL,
  `email` varchar(60) NOT NULL,
  `jurusan` varchar(21) NOT NULL,
  `alamat` char(30) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `password` char(32) NOT NULL,
  `tgl_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `no_telp`, `nama`, `jenis_kelamin`, `tgl_lahir`, `nim`, `email`, `jurusan`, `alamat`, `user_name`, `password`, `tgl_register`, `role`) VALUES
('1483702533', '100100100', 'Calista', 'Perempuan', '1996-05-12', 51014006, 'calista@kharisma.ac.id', 'Sistem Informasi', 'Jl. Sunu no.xx', 'sayacalista', '$2y$10$6Orz65rKCwn80bISjqKJKOpjK', '2017-01-06 19:35:33', 0),
('1483702837', '200200200', 'Hermes Djohar', 'Laki-laki', '1996-06-05', 51014012, 'hermes@gmail.com', 'Sistem Informasi', 'Jl. Gagak no.yy', 'hermes_ed', '$2y$10$qSxNhzkGjc9CKDa6FlzZL.Rs7', '2017-01-06 19:40:38', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
