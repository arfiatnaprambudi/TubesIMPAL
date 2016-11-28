-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 11:13 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl3`
--

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kode_matkul` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kode_matkul`, `nama_matkul`) VALUES
(1, 'Desain Analisis Algoritma'),
(2, 'Jaringan Komputer'),
(3, 'Teori Bahasa Automata'),
(4, 'Implementasi Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `ip` varchar(20) NOT NULL,
  `id_user` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `online` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`ip`, `id_user`, `tanggal`, `online`) VALUES
('::1', 5, '2016-11-15', 'Y'),
('::1', 6, '2016-04-21', 'Y'),
('::1', 8, '2016-04-20', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `soal_quiz`
--

CREATE TABLE `soal_quiz` (
  `id_quiz` int(5) NOT NULL,
  `mata_kuliah` varchar(255) NOT NULL,
  `quiz_ke` int(11) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(1000) NOT NULL,
  `b` varchar(1000) NOT NULL,
  `c` varchar(1000) NOT NULL,
  `d` varchar(1000) NOT NULL,
  `kunci` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_quiz`
--

INSERT INTO `soal_quiz` (`id_quiz`, `mata_kuliah`, `quiz_ke`, `no_soal`, `soal`, `a`, `b`, `c`, `d`, `kunci`) VALUES
(1, 'Q', 1, 1, 'Q', 'q', 'q', 'q', 'q', 'c'),
(2, 'We', 1, 2, 'Qwewq', 'qe', 'qeq', 'qe', 'qwe', 'd'),
(3, 'Sdad', 4, 3, 'Sadasd', 'saad', 'sa', 'adsa', 'dad', 'd'),
(4, 'Sdad', 4, 3, 'Sadasd', 'saad', 'sa', 'adsa', 'dad', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `soal_tugas`
--

CREATE TABLE `soal_tugas` (
  `id` int(11) NOT NULL,
  `judul_tugas` varchar(50) NOT NULL,
  `kode_matkul` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(9) NOT NULL,
  `nomor_induk` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `foto` varchar(150) DEFAULT 'localhost/aaaa/images/person-icon.png',
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N',
  `id_session` varchar(100) NOT NULL,
  `id_session_soal` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nomor_induk`, `nama_lengkap`, `username`, `password`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `email`, `hp`, `foto`, `blokir`, `id_session`, `id_session_soal`, `level`) VALUES
(5, NULL, 'admin', 'admin', 'admin', NULL, NULL, NULL, 'L', NULL, 'admin@gmail.com', NULL, 'localhost/aaaa/images/person-icon.png', 'N', 'r94a73ani499kkn1ar0c2tko83', '', 'admin'),
(6, '12345', 'dosen1', 'dosen1', 'dosen1', NULL, NULL, NULL, 'L', NULL, 'mahasiswa1@gmail.com', NULL, 'localhost/aaaa/images/person-icon.png', 'N', 'js57aod2fq9q1o3tcmqr4jpph5', '', 'dosen'),
(8, '54321', 'mahasiswa1', 'mahasiswa1', 'mahasiswa1', NULL, NULL, NULL, 'L', NULL, 'mahasiswa1@gmail.com', NULL, 'localhost/aaaa/images/person-icon.png', 'N', 'avi23t0jv4e9r8eueres831va2', '', 'siswa'),
(9, '1232', 'qwqw', 'joni', 'joni', 'andand', 'owqwq', '0000-00-00', 'L', 'Islam', 'dada@gmail.com', '09888828', 'localhost/aaaa/images/person-icon.png', 'N', '', '', 'dosen'),
(10, '13213131', 'wqeqwe', 'qw', '006d2143154327a64d86a264aea225f3', 'asas', 'eqewq', '0000-00-00', 'P', 'Islam', 'D@gmail', '081123456789', 'localhost/aaaa/images/person-icon.png', 'N', '', '', 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `user_matkul`
--

CREATE TABLE `user_matkul` (
  `id_user` int(11) NOT NULL,
  `kode_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_matkul`
--

INSERT INTO `user_matkul` (`id_user`, `kode_matkul`) VALUES
(6, 1),
(9, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_materi_matkul` (`kode_matkul`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `soal_quiz`
--
ALTER TABLE `soal_quiz`
  ADD PRIMARY KEY (`id_quiz`);

--
-- Indexes for table `soal_tugas`
--
ALTER TABLE `soal_tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_soaltugas_matkul` (`kode_matkul`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_matkul`
--
ALTER TABLE `user_matkul`
  ADD KEY `fk_usermatkul_user` (`id_user`),
  ADD KEY `fk_usermatkul_matkul` (`kode_matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `kode_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `soal_quiz`
--
ALTER TABLE `soal_quiz`
  MODIFY `id_quiz` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `soal_tugas`
--
ALTER TABLE `soal_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `fk_materi_matkul` FOREIGN KEY (`kode_matkul`) REFERENCES `matkul` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soal_tugas`
--
ALTER TABLE `soal_tugas`
  ADD CONSTRAINT `fk_soaltugas_matkul` FOREIGN KEY (`kode_matkul`) REFERENCES `matkul` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_matkul`
--
ALTER TABLE `user_matkul`
  ADD CONSTRAINT `fk_usermatkul_matkul` FOREIGN KEY (`kode_matkul`) REFERENCES `matkul` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usermatkul_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
