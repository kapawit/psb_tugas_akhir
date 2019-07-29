-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 06:26 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `pass`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(300) NOT NULL,
  `penulis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `penulis`) VALUES
(1, 'Pembukaan ppdb 2019', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem tempore consequatur omnis magni quisquam accusantium, voluptas quod consectetur sunt ducimus quo reiciendis corrupti provident! Alias quaerat provident voluptatem eaque facilis!', 'admin'),
(2, 'uji coba berita ke 2', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos atque id at, fuga qui est dolore culpa placeat aliquid doloribus eligendi consectetur modi facere autem quas nihil dolorem. Non, quis.\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos atque id at, fuga qui es', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_pendaftaran` int(4) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `no_telfon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `no_ijazah` int(5) NOT NULL,
  `nilai_raport` int(5) NOT NULL,
  `file_pas_foto` varchar(30) NOT NULL,
  `file_akta_kelahiran` varchar(30) NOT NULL,
  `file_ijazah` varchar(30) NOT NULL,
  `file_kartu_keluarga` varchar(30) NOT NULL,
  `file_transkrip` varchar(30) NOT NULL,
  `nilai_un` int(11) NOT NULL,
  `status_form` int(11) NOT NULL,
  `status_daftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_pendaftaran`, `nama_siswa`, `username`, `pass`, `tgl_lahir`, `jk`, `no_telfon`, `email`, `alamat`, `asal_sekolah`, `no_ijazah`, `nilai_raport`, `file_pas_foto`, `file_akta_kelahiran`, `file_ijazah`, `file_kartu_keluarga`, `file_transkrip`, `nilai_un`, `status_form`, `status_daftar`) VALUES
(2, 'siswa', 'siswa', 'siswa', '2019-12-12', 'L', '910291890', 'siswa@gmail.com', 'sleman', 'smp negeri 2', 0, 0, '', '', '0', '', '0', 0, 0, 0),
(8, 'jono', 'jono', 'jono', '1212-12-12', 'Laki-laki', '11212331231231', 'jono@gmail.com', 'sddfsfsdfsdfsdf', 'asdasdasdasd', 89, 89, '0001.jpg', '005.jpg', '002.jpg', '003.jpg', '004.jpg', 89, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id`, `tahun`, `bulan`, `tanggal`) VALUES
(1, 2019, 10, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_pendaftaran` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
