-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 07:37 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(555) NOT NULL,
  `terakhirLogin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `terakhirLogin`) VALUES
(2, 'admin', 'admin', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `akun_guru`
--

CREATE TABLE `akun_guru` (
  `NIP` varchar(10) NOT NULL,
  `username_guru` varchar(25) NOT NULL,
  `password_guru` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_guru`
--

INSERT INTO `akun_guru` (`NIP`, `username_guru`, `password_guru`) VALUES
('111', 'zein', '698d51a19d8a121ce581499d7b701668'),
('1112', 'zein', '20d135f0f28185b84a4cf7aa51f29500');

-- --------------------------------------------------------

--
-- Table structure for table `akun_murid`
--

CREATE TABLE `akun_murid` (
  `NIS` varchar(10) NOT NULL,
  `username_murid` varchar(15) NOT NULL,
  `password_murid` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_murid`
--

INSERT INTO `akun_murid` (`NIS`, `username_murid`, `password_murid`) VALUES
('99990172', 'zein', 'dcc99cf8fce540c482336dbc32935f59'),
('99990173', 'reza', 'fa19a8f4336bd0a3fdcac5607ab5d60d'),
('99990174', 'koman', '97057eb3a1228091523941be3d7819e1');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_post` int(11) NOT NULL,
  `judulPost` varchar(255) NOT NULL,
  `isiArtikel` text NOT NULL,
  `linkGambar` text NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_post`, `judulPost`, `isiArtikel`, `linkGambar`, `kategori`) VALUES
(25, 'Mokas', 'lima hari yang lalu', 'http://localhost/SistemSekolah/images/artikel/i_love_indonesia___wallpaper_by_mongkih.jpg', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIP` varchar(10) NOT NULL,
  `NamaGuru` varchar(55) NOT NULL,
  `kode_pelajaran` varchar(25) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` varchar(155) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIP`, `NamaGuru`, `kode_pelajaran`, `tanggalLahir`, `alamat`, `foto`) VALUES
('111', 'zein', 'PL001', '0000-00-00', 'cicadas', 'http://localhost/SistemSekolah/images/fotoProfil/guru/111/8739d36846758620d85a8df364c00f61.jpg'),
('1112', 'zein', 'PL001', '0000-00-00', 'cicadas', 'http://localhost/SistemSekolah/images/fotoProfil/guru/1112/8739d36846758620d85a8df364c00f61.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `NIS` varchar(10) NOT NULL,
  `Nama_murid` varchar(55) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Jurusan` varchar(15) NOT NULL,
  `angkatan_murid` varchar(6) NOT NULL,
  `ttl_murid` varchar(10) NOT NULL,
  `agama_murid` varchar(8) NOT NULL,
  `alamat_murid` varchar(110) NOT NULL,
  `Jenis_kelamin` varchar(15) NOT NULL,
  `wali_murid` varchar(55) NOT NULL,
  `foto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`NIS`, `Nama_murid`, `Kelas`, `Jurusan`, `angkatan_murid`, `ttl_murid`, `agama_murid`, `alamat_murid`, `Jenis_kelamin`, `wali_murid`, `foto`) VALUES
('99990172', 'Zein', 'IPA-1', 'IPA', '16', '', 'Islam', 'Cicadas', 'Pria', 'Lilis', 'http://localhost/SistemSekolah/images/fotoProfil/murid/Zein/8739d36846758620d85a8df364c00f61.jpg'),
('99990173', 'Reza', 'IPA-1', 'IPA', '017', '', 'Islam', 'Ccd', 'Wanita', 'koman', 'http://localhost/SistemSekolah/images/fotoProfil/murid/Reza/8739d36846758620d85a8df364c00f61.jpg'),
('99990174', 'Koman', 'IPA-2', 'IPA', '017', '', 'Islam', 'ccd', 'Wanita', 'ccd', 'http://localhost/SistemSekolah/images/fotoProfil/murid/Koman/8739d36846758620d85a8df364c00f61.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `no` int(11) NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `NIP` varchar(10) NOT NULL,
  `kode_pelajaran` varchar(25) NOT NULL,
  `UAS` int(11) NOT NULL,
  `UTS` int(11) NOT NULL,
  `Quis1` int(11) DEFAULT NULL,
  `Quis2` int(11) DEFAULT NULL,
  `Quis3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `kode_pelajaran` varchar(25) NOT NULL,
  `nama_pelajaran` varchar(55) NOT NULL,
  `kurikulum_pelajaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`kode_pelajaran`, `nama_pelajaran`, `kurikulum_pelajaran`) VALUES
('PL001', 'Matematika', '2013'),
('PL002', 'B. Indonesia', '2013'),
('PL003', 'B.Inggris', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `noDaftar` int(11) NOT NULL,
  `namaPendaftar` varchar(100) NOT NULL,
  `emailPendaftar` varchar(100) NOT NULL,
  `asalSekolah` varchar(50) NOT NULL,
  `alamatSekolah` text NOT NULL,
  `pilihanJurusan` varchar(10) NOT NULL,
  `mtAkhir` int(11) NOT NULL,
  `mtkUn` int(11) NOT NULL,
  `BindAkhir` int(11) NOT NULL,
  `BindUn` int(11) NOT NULL,
  `BingAkhir` int(11) NOT NULL,
  `BingUn` int(11) NOT NULL,
  `Foto` varchar(150) NOT NULL,
  `Ijazah` varchar(150) NOT NULL,
  `KartuKeluarga` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `no` int(11) NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `NIP` varchar(10) NOT NULL,
  `Materi` text NOT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`no`, `NIS`, `Tanggal`, `NIP`, `Materi`, `Status`) VALUES
(11, '99990172', '2017-04-16', '1112', 'ccd', 'Izin'),
(12, '99990174', '2017-04-16', '111', 'aw', 'Alpha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun_guru`
--
ALTER TABLE `akun_guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `akun_murid`
--
ALTER TABLE `akun_murid`
  ADD PRIMARY KEY (`NIS`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `kode_pelajaran` (`kode_pelajaran`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`NIS`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`no`),
  ADD KEY `NIS` (`NIS`,`NIP`,`kode_pelajaran`),
  ADD KEY `kode_pelajaran` (`kode_pelajaran`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`kode_pelajaran`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`noDaftar`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`no`),
  ADD KEY `NIS` (`NIS`),
  ADD KEY `NIP` (`NIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `noDaftar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun_guru`
--
ALTER TABLE `akun_guru`
  ADD CONSTRAINT `akun_guru_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `akun_murid`
--
ALTER TABLE `akun_murid`
  ADD CONSTRAINT `akun_murid_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `murid` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`kode_pelajaran`) REFERENCES `pelajaran` (`kode_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`kode_pelajaran`) REFERENCES `pelajaran` (`kode_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`NIS`) REFERENCES `murid` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `murid` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
