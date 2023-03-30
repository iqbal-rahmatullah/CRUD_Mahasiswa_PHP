-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 03:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpw`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nrp` char(11) NOT NULL,
  `jenis_kelamin` set('Laki Laki','Perempuan','','') NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `email_student` varchar(50) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `asal_sekolah` varchar(20) NOT NULL,
  `mata_kuliah_favorit` varchar(20) NOT NULL,
  `hobi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `jenis_kelamin`, `jurusan`, `email_student`, `alamat`, `phone`, `asal_sekolah`, `mata_kuliah_favorit`, `hobi`) VALUES
(1, 'Ade Hafis Rabbani', '3122500001', 'Laki Laki', 'Teknik Informatika', 'felicita6@hotmail.com', 'Gresik', '082200450246', 'SMK', 'WPW', 'Membaca'),
(2, 'Nadila Aulya Salsabila Mirdianti ', '3122500002', 'Perempuan', 'Teknik Informatika', 'skylar.hodkiewicz16@yahoo.com', 'Kediri', '082830584433', 'SMA', 'WPW', 'Membaca'),
(3, 'ZAHROTUL HIDAYAH ', '3122500004', 'Perempuan', 'Teknik Informatika', 'kobe_rosenbaum@hotmail.com', 'LAMONGAN ', '08181961980', 'SMA', 'WPW', 'Membaca'),
(4, 'Gede Hari Yoga Nanda', '3122500005', 'Laki Laki', 'Teknik Informatika', 'adalberto.nolan@gmail.com', 'Tulung Agung', '0827976642', 'SMA', 'WPW', 'Membaca'),
(5, 'VIRGIAWAN IVADA RAKSI SEKAR WIBANA', '3122500006', 'Laki Laki', 'Teknik Informatika', 'heloise.marvin66@hotmail.com', 'Tuban', '087903393469', 'SMA', 'WPW', 'Membaca'),
(6, 'Irfan Akmal Ardianto', '3122500007', 'Laki Laki', 'Teknik Informatika', 'mollie.gaylord4@hotmail.com', 'Palembang', '08145828401', 'SMA', 'WPW', 'Membaca'),
(7, 'Arsyita Devanaya Arianto', '3122500008', 'Perempuan', 'Teknik Informatika', 'iqkakad@gmail.com', 'Surabaya', '081231685994', 'SMA', 'Teknik Informatika', 'Membaca'),
(8, 'Mirta Chadhirotin Nachlah', '3122500009', 'Perempuan', 'Teknik Informatika', 'ajsjsj@smdmmd.com', 'Gresik', '08244787677', 'SMA', 'WPW', 'Membaca'),
(9, 'Leody Zelvon Herliansa', '3122500010', 'Laki Laki', 'Teknik Informatika', 'vacu_ducafe45@gmail.com', 'Tuban', '08244780677', 'SMA', 'Teknik Informatika', 'Membaca'),
(10, 'Ali Azhar Pradana Braveian', '3122500011', 'Laki Laki', 'Teknik Informatika', 'vacu_ducafe45@gmail.com', 'Surabaya', '089452165493', 'SMA', 'WPW', 'Membaca'),
(11, 'Awal Raya', '3122500012', 'Laki Laki', 'Teknik Informatika', 'vacu_ducafe45@gmail.com', 'Kediri', '089452165493', 'SMA', 'Teknik Informatika', 'Membaca'),
(12, 'Mahendra Khibrah Rabbani Sayyid', '3122500013', 'Laki Laki', 'Teknik Informatika', 'vacu_ducafe45@gmail.com', 'Surabaya', '089452165493', 'SMA', 'WPW', 'Membaca'),
(13, 'Muhammad Iqbal Rahmatullah', '3122500014', 'Laki Laki', 'Teknik Informatika', 'iqbalrahmatullah@pens.ac.id', 'Sidoarjo', '081231685459', 'SMA', 'WPW', 'Sepak Bola'),
(14, 'Mayada Azizah', '3122500015', 'Perempuan', 'Teknik Informatika', 'pokabaz_oje92@hotmail.com', 'Pasuruan', '089452165493', 'SMA', 'WPW', 'Membaca'),
(15, 'Gandi Rukmaning Ayu', '3122500016', 'Perempuan', 'Teknik Informatika', 'fiw_ilakuxa95@mail.com', 'Lumajang', '089452165493', 'SMA', 'WPW', 'Membaca'),
(16, 'Handaru Dwiki Yuntara', '3122500017', 'Laki Laki', 'Teknik Informatika', 'vacu_ducafe45@gmail.com', 'Trenggalek', '089452165493', 'SMA', 'WPW', 'Sepak Bola'),
(17, 'Adam Rasyid Nurmuhammad', '3122500018', 'Laki Laki', 'Teknik Informatika', 'iqkakad@gmail.com', 'Surabaya', '089452165493', 'SMA', 'WPW', 'Membaca'),
(18, 'Akmal Zidani Fikri', '3122500019', 'Laki Laki', 'Teknik Informatika', 'pokabaz_oje92@hotmail.com', 'Surabaya', '089452165493', 'SMA', 'WPW', 'Membaca'),
(19, 'Adinda Zahra Qariru', '3122500020', 'Perempuan', 'Teknik Informatika', 'fiw_ilakuxa95@mail.com', 'Malang', '089452165493', 'SMA', 'WPW', 'Membaca'),
(20, 'Mohammad Ilham Ramadani', '3122500021', 'Laki Laki', 'Teknik Informatika', 'pokabaz_oje92@hotmail.com', 'Surabaya', '089452165493', 'SMA', 'WPW', 'Membaca'),
(21, 'Virginia Faiqoh ', '3122500022', 'Perempuan', 'Teknik Informatika', 'vacu_ducafe45@gmail.com', 'Sidoarjo ', '089452165493', 'SMA', 'WPW', 'Membaca'),
(22, 'Masyitha Fahra Nabila', '3122500023', 'Perempuan', 'Teknik Informatika', 'ajsjsj@smdmmd.com', 'Tuban', '089452165493', 'SMA', 'WPW', 'Membaca'),
(23, 'MUHAMAD REZA MUKTASIB', '3122500024', 'Laki Laki', 'Teknik Informatika', 'fiw_ilakuxa95@mail.com', 'SURABAYA', '089452165493', 'SMA', 'WPW', 'Membaca'),
(24, 'Adira Callysta', '3122500025', 'Perempuan', 'Teknik Informatika', 'pokabaz_oje92@hotmail.com', 'Mojokerto', '089452165493', 'SMA', 'WPW', 'Membaca'),
(25, 'Shofira Izza Nurrohmah ', '3122500026', 'Perempuan', 'Teknik Informatika', 'ajsjsj@smdmmd.com', 'Ngawi', '089452165493', 'SMA', 'WPW', 'Membaca'),
(26, 'Rifqi Rayita Dhiyaulhaq', '3122500027', 'Laki Laki', 'Teknik Informatika', 'fiw_ilakuxa95@mail.com', 'Ponorogo', '089452165493', 'SMA', 'WPW', 'Membaca'),
(27, 'Bagus Bimo Prakoso', '3122500028', 'Laki Laki', 'Teknik Informatika', 'fiw_ilakuxa95@mail.com', 'Tulungagung', '089452165493', 'SMA', 'WPW', 'Membaca'),
(28, 'Muhammad Syahrul Ramadhan ', '3122500030', 'Laki Laki', 'Teknik Informatika', 'fiw_ilakuxa95@mail.com', 'Sidoarjo ', '089452165493', 'SMA', 'WPW', 'Membaca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nrp` (`nrp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
