-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Nov 27, 2022 at 03:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_faizal`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_faizal_table`
--

CREATE TABLE `showroom_faizal_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) DEFAULT NULL,
  `pemilik_mobil` varchar(255) DEFAULT NULL,
  `merk_mobil` varchar(255) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto_mobil` varchar(255) DEFAULT NULL,
  `status_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_faizal_table`
--

INSERT INTO `showroom_faizal_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(1, 'Mustang GT500 after edit', 'Faizal - 1202204070', 'Ford', '2022-11-02', 'The Ford Mustang is a series of American automobiles manufactured by Ford. In continuous production since 1964, the Mustang is currently the longest-produced Ford car nameplate. Currently in its sixth generation, it is the fifth-best selling Ford car nameplate. The namesake of the \"pony car\" automobile segment, the Mustang was developed as a highly styled line of sporty coupes and convertibles derived from existing model lines, initially distinguished by \"long hood, short deck\" proportions.', 'mustang.jpg', 'Lunas'),
(2, 'GT-R35', 'Faizal - 1202204070', 'Nissan', '2022-10-20', 'Nissan GT-R adalah sebuah mobil sport yang dibuat oleh Nissan, dikeluarkan di Jepang pada tanggal 6 Desember 2007, Amerika Serikat pada tanggal 7 Juli 2008, dan seluruh dunia pada bulan Maret 2009. Mobil ini merupakan penerus dari jajaran Skyline GT-R.', 'gtr.jpg', 'Lunas'),
(3, 'Vulcan', 'Faizal - 1202204070', 'Aston Martin', '2022-11-21', 'The Aston Martin Vulcan is a two-door, two-seat, high-performance lightweight track-only car launched in 2015 by British luxury automobile manufacturer Aston Martin at the 2015 Geneva Motor Show.', 'vulcan.jpg', 'Belum Lunas'),
(4, 'AMG G63', 'Faizal - 1202204070', 'Mercedes Benz', '2022-11-01', 'The Mercedes-Benz G-Class, sometimes colloquially called the G-Wagen (as an abbreviation of Geländewagen) is a four-wheel drive automobile manufactured by Magna Steyr (formerly Steyr-Daimler-Puch) in Austria and sold by Mercedes-Benz. Originally developed as a military off-roader, later more luxurious models were added to the line. In certain markets, it has been sold under the Puch name as Puch G until 2000.', 'g63.jpg', 'Belum Lunas'),
(5, 'AMG GTR', 'Faizal - 1202204070', 'Mercedes Benz', '2022-05-17', 'The GT R is a high-performance variant of the Mercedes-AMG GT and was introduced at the Goodwood Festival of Speed on 24 June 2016. The M178 engine in this variant is tuned to an output of 430 kW (585 PS; 577 hp) at 6,250 rpm and 700 N⋅m (516 lb⋅ft) of torque at 5,500 rpm. The GT R accelerates from 0 to 100 km/h (62 mph) in 3.6 seconds and has a claimed top speed of 319 km/h (198 mph).', 'amg gtr.jpg', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user_faizal`
--

CREATE TABLE `user_faizal` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_faizal`
--

INSERT INTO `user_faizal` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(13, 'Faizal - 1202204070', 'faizalfahmi490@gmail.com', 'faizal123', '085257239809'),
(25, 'fahmi', 'asd@gmail.com', '123', '567457568456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_faizal_table`
--
ALTER TABLE `showroom_faizal_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user_faizal`
--
ALTER TABLE `user_faizal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_faizal_table`
--
ALTER TABLE `showroom_faizal_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_faizal`
--
ALTER TABLE `user_faizal`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
