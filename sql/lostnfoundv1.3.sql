-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 12:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lostnfound`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(5) NOT NULL,
  `kategori` int(5) NOT NULL,
  `type` int(5) NOT NULL,
  `namabrg` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `pengepost` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kategori`, `type`, `namabrg`, `lokasi`, `waktu`, `deskripsi`, `foto`, `pengepost`) VALUES
(1, 1, 1, 'Dompet Panjang', 'IDB 2 Lantai 5', '2017-05-05', 'Bagi yang merasa memiliki boleh chat langsung. Ditemukan hari selasa sekitar jam 2 siang di labkom 5', 'http://localhost/lostnfound/uploads/post_1504145061.jpg', 7),
(2, 2, 2, 'KTM', 'IDB 2', '2017-06-05', 'segera chat', 'http://localhost/lostnfound/uploads/post_1504149146.jpg', 7),
(3, 1, 1, 'test', 'test', '2017-01-01', 'test', 'http://localhost/lostnfound/uploads/post_1504149857.jpg', 7),
(25, 3, 2, 'hp lenovo', 'IDB 2', '2017-01-01', 'ditemukan hp lenovo', 'http://localhost/lostnfound/uploads/post_1504850363.jpg', 11),
(26, 1, 2, 'dompet panjang', 'IDB 2', '2017-06-05', 'cepat hubungi', 'http://localhost/lostnfound/uploads/post_1504854492.jpg', 7),
(27, 3, 1, 'hp lenovo', 'IDB 2', '2017-06-05', 'dicari hp lenovo', 'http://localhost/lostnfound/uploads/post_1504854583.jpg', 11),
(28, 2, 2, 'KTM', 'IDB 2', '2016-12-12', 'ditemukan ktm atas nama chintya', 'http://localhost/lostnfound/uploads/post_1504854656.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Dompet'),
(2, 'File & Dokumen'),
(3, 'Telepon & Gadget');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `waktu` date NOT NULL,
  `status` enum('1','2') NOT NULL,
  `counter` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(255) NOT NULL,
  `type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'Kehilangan'),
(2, 'Penemuan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `nama`, `alamat`, `telp`, `foto`, `created`) VALUES
(1, 'firdausalif', 'firdausalif414@gmail.com', 'a20d35ed6f608a51f986cb736411d4c2', 'Firdaus Alif Fahruddin', 'Raden inten 2', '08387123131', '', '2017-07-29 22:01:15'),
(4, 'eriksa', 'eriksa@gmail.com', '02c75fb22c75b23dc963c7eb91a062cc', 'Erik Santiago', 'jonggol', '123141', '', '2017-07-29 22:09:10'),
(6, 'mesita', 'mesita@gmail.com', '02c75fb22c75b23dc963c7eb91a062cc', 'Mesita Widy', 'Raden', '123141', '', '2017-07-29 22:33:55'),
(7, 'admin', 'firdausalif@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Firdaus Alif Fahruddin', 'Lab IDB 2 Lt 5', '08387192033', 'http://localhost/lostnfound/uploads/profile_1504151940.jpg', '2017-08-31 03:59:00'),
(8, 'dauzzz', 'dausz@gmail.com', '3b2285b348e95774cb556cb36e583106', 'firdaus', 'banyuwangi', '09875543', '', '2017-07-30 20:59:25'),
(9, 'chintyayayaa', 'chintya@gmail.com', '800ec6df7b0348e0dd5eaccb6173c746', 'Chintya Adinda Puri', 'KPAD Jatiwaringin Jl. Zeni H-17', '083890905555', 'upload/Chintya Adinda Puri- Avatar -083890904464.jpeg', '2017-08-04 08:26:52'),
(10, 'jul', 'jul@gmail.com', '4d2b31c91d33a32a98584546736d5c73', 'juljul', 'rawamangun', '083809876543', 'upload/juljul- Avatar -083809876543.jpeg', '2017-08-04 08:09:11'),
(11, 'chintya_siskom15', 'chintia.adindaa@yahoo.com', '28566ba0040cf3c369499cdb895d668c', 'Chintya Adinda', 'jaktim', '0812121209', '', '2017-09-07 04:24:08'),
(12, 'admin3', 'admin3@mail.com', '32cacb2f994f6b42183a1300d9a3e8d6', 'admin 3', 'Jakarta Timur', '083890904464', '', '2017-09-08 07:45:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Kategori` (`kategori`),
  ADD KEY `FK_Type` (`type`),
  ADD KEY `FK_Pengepost` (`pengepost`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_barang` (`id_barang`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `FK_Kategori` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `FK_Pengepost` FOREIGN KEY (`pengepost`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_Type` FOREIGN KEY (`type`) REFERENCES `type` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_id_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
