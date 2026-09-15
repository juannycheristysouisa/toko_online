-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 04:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tekno`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Sofa Classic Eropa', 'Sofa Ruang Tamu', 'Sofa', 6900000, 1, 'Sofa.jpg'),
(2, 'Lemari', 'Lemari Pakaian', 'Lemari Pakaian', 2500000, 4, 'lemari.jpg'),
(3, 'Spring Bed', 'Spring Bed Central', 'Tempat Tidur', 3500000, 6, 'spring bed.jpg'),
(4, 'Tv', 'Tv Polytron 43 inch Android Tv', 'Elektronik', 3300000, 10, 'tv.jpg'),
(5, 'Workpan', '1 set Workpan Stein Cookware', 'Perlengkapan Dapur', 450000, 28, 'workpan.jpg'),
(6, 'Kulkas', 'Kulkas 2 Pintu', 'Elektronik', 7000000, 8, 'Kulkas.jpg'),
(7, 'Sofa Modernos', 'Sofa Ruang Tamu', 'Sofa', 5500000, 12, 'Sofa_Modernos.jpg'),
(8, 'Sofa Modern Classic', 'Sofa Ruang Tamu', 'Sofa', 6500000, 22, 'Sofa_Modern_Classic.jpg'),
(9, 'Sofa Sectional', 'Sofa Ruang Tamu', 'Sofa', 4000000, 22, 'Sofa_Sectional.jpg'),
(10, 'Sofa Modular Pit Sectional', 'Sofa Ruang Tamu', 'Sofa', 5700000, 19, 'Sofa_Modular_Pit_Sectional.jpg'),
(11, 'Sofa Modern Sleeper Sectional', 'Sofa Ruang Keluarga', 'Sofa', 6200000, 18, 'Sofa_Modern_Sleeper_Sectional.jpg\r\n'),
(12, 'Lemari Pakaian Serat Kayu', 'Lemari Pakaian 2 pintu', 'Lemari', 3000000, 14, 'Lemari_Pakaian_Serat_Kayu.jpg'),
(13, 'Lemari Pakaian Sliding', 'Lemari Pakaian 2 pintu', 'Lemari', 4000000, 21, 'Lemari_Pakaian_Sliding.jpg'),
(14, 'Lemari Buffet', 'Lemari Buffet ', 'Lemari', 3200000, 10, 'Lemari Buffet.jpg'),
(15, 'Lemari Dapur', 'Lemari Dapur', 'Lemari', 7200000, 10, 'Lemari_Dapur.jpg'),
(16, 'Lemari Tv', 'Lemari untuk TV', 'Lemari', 4000000, 20, 'Lemari_Tv.jpg'),
(17, 'Spring Bed Uniland', 'Kasur Tidur', 'Tempat Tidur', 4500000, 22, 'Spring_Bed_Uniland.jpg\r\n'),
(18, 'Spring Bed Airland', 'Kasur Tidur', 'Tempat Tidur', 4600000, 23, 'Spring_Bed_Airland.jpg'),
(19, 'Spring Bed Comforta', 'Kasur Tidur', 'Tempat Tidur', 4700000, 24, 'Spring_Bed_Comforta.jpg'),
(20, 'Spring Bed Elite', 'Kasur Tidur', 'Tempat Tidur', 4800000, 25, 'Spring_Bed_Elite.jpg'),
(21, 'Spring Bed Therapedic', 'Kasur Tidur', 'Tempat Tidur', 4900000, 25, 'Spring_Bed_Therapedic.jpg'),
(22, 'Spring Bed Florence Genoa', 'Kasur Tidur', 'Tempat Tidur', 5000000, 27, 'Spring_Bed_Florence_Genoa.jpg'),
(23, 'Spring Bed King Koil', 'Kasur Tidur', 'Tempat Tidur', 5100000, 27, 'Spring_Bed_King_Koil.jpg'),
(24, 'Spring Bed Serta', 'Kasur Tidur', 'Tempat Tidur', 5200000, 28, 'Spring_Bed_Serta.jpg'),
(25, 'Spring Bed Procella', 'Kasur Tidur', 'Tempat Tidur', 5300000, 30, 'Spring_Bed_Procella.jpg'),
(26, 'Spring Bed Olympic', 'Kasur Tidur', 'Sofa', 5400000, 31, 'Spring_Bed_Olympic.jpg'),
(27, 'Tv Samsung', 'Tv Samsung 46 inch', 'Elektronik', 6900000, 20, 'Tv_Samsung_46_inch.jpg'),
(28, 'Tv Toshiba', 'Tv Toshiba 720p HD LCD TV', 'Elektronik', 3250000, 25, 'Toshiba_720p_HD_LCD_TV.jpg'),
(29, 'TV HD LED', 'Tv HD LED Smart TV', 'Elektronik', 4000000, 15, 'Tv_HD_LED_Smart_TV.jpg'),
(30, 'Tv Sony', 'Tv Sony Class HDR UHD Smart LED TV', 'Elektronik', 2500000, 11, 'Tv_Sony_Class_HDR_UHD_Smart_LED_TV.jpg'),
(31, 'Tv SHARP', 'Tv SHARP ', 'Elektronik', 3000000, 22, 'Tv_SHARP.jpg'),
(32, 'Kulkas SHARP', 'Kulkas 2 Pintu', 'Elektronik', 3900000, 20, 'Kulkas_SHARP.jpg'),
(33, 'Kulkas Polytron', 'Kulkas 2 Pintu', 'Elektronik', 2800000, 25, 'Kulkas_Polytron.jpg'),
(34, 'Kulkas Panasonic', 'Kulkas 2 Pintu', 'Elektronik', 2700000, 21, 'Kulkas_Panasonic.jpg'),
(35, 'Mesin Cuci Aqua Japan QW', 'Mesin cuci ', 'Elektronik', 3800000, 12, 'Mesin_Cuci_Aqua_Japan_QW.jpg'),
(36, 'Mesin Cuci Ultimate Care', 'Mesin cuci ', 'Elektronik', 4800000, 22, 'Mesin_Cuci_Ultimate_Care.jpg'),
(37, 'AC TCL ', 'Air Conditioner', 'Elektronik', 3200000, 20, 'AC_TCL.jpg'),
(38, 'Kipas Angin Cosmos', 'Kipas Angin', 'Elektronik', 350000, 28, 'Kipas_Angin_Cosmos.jpg'),
(39, 'Pisau Set Knife', 'Pisau Set', 'Perlengkapan Dapur', 299000, 18, 'Pisau_Set_Knife.jpg'),
(40, 'Kompor Gas Rinnai', 'Kompor Gas ', 'Perlengkapan Dapur', 850000, 24, 'Kompor_Gas_Rinnai.jpg'),
(41, 'Piring ', '1 Set Piring ', 'Perlengkapan Dapur', 220000, 12, 'Piring.jpg'),
(42, 'Gelas', '1 Set Gelas', 'Perlengkapan Dapur', 250000, 28, 'Gelas.jpg'),
(43, 'Cangkir', '4 Buah Cangkir', 'Perlengkapan Dapur', 120000, 12, 'Cangkir.jpg'),
(44, 'Sendok', '1 Lusin Sendok', 'Perlengkapan Dapur', 80000, 30, 'Sendok.jpg'),
(79, 'Kulkas', 'Kulkas 2 Pintu', 'Elektronik', 3200000, 5, 'kulkas empat pintu.jpeg'),
(80, 'Blender Phillips', 'Blender', 'Elektronik', 1000000, 5, 'Buy Philips Mixer Grinder Online at Philips Domestic Appliances.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(225) CHARACTER SET latin1 NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Wina Ningsih', 'Tj.Priok, Jakarta Utara', '2024-06-12 11:04:18', '2024-06-13 11:04:18'),
(2, 'Tsabita Raihanah', 'Cakung, Jakarta Timur', '2024-06-26 15:56:38', '2024-06-27 15:56:38'),
(3, 'Andriansyah Tri L', 'Pademangan, Jakarta Utara', '2024-06-26 15:58:24', '2024-06-27 15:58:24'),
(14, 'Dewi', 'Tj.Priok Jakarta Utara', '2024-06-27 09:26:46', '2024-06-28 09:26:46'),
(15, 'wina', 'Tj.Priok Jakarta Utara', '2024-06-27 09:35:33', '2024-06-28 09:35:33'),
(16, 'wina', 'Tj.Priok Jakarta Utara', '2024-06-27 09:41:14', '2024-06-28 09:41:14'),
(17, 'Lela', 'Jl. Panimbaan', '2024-07-20 08:55:09', '2024-07-21 08:55:09'),
(18, 'Aeron', 'Jakarta Selatan', '2024-11-05 10:41:35', '2024-11-06 10:41:35'),
(19, 'Wina', 'Tj.Priok', '2024-11-06 12:25:35', '2024-11-07 12:25:35'),
(20, 'Wina', 'Tj.Priok', '2024-11-07 15:32:25', '2024-11-08 15:32:25'),
(21, 'Wina', 'Tj.Priok', '2024-11-07 19:52:57', '2024-11-08 19:52:57'),
(22, 'Wina', 'Tj.Priok', '2024-11-07 19:54:39', '2024-11-08 19:54:39'),
(23, 'Wina', 'Tj.Priok', '2024-11-07 19:57:24', '2024-11-08 19:57:24'),
(24, 'Wina Ningsih', 'Jakarta Utara', '2024-11-07 20:01:36', '2024-11-08 20:01:36'),
(25, 'risolmayo', 'Jakarta Utara', '2024-11-07 20:15:42', '2024-11-08 20:15:42'),
(26, 'risolmayo', 'Jakarta Utara', '2024-11-07 20:57:41', '2024-11-08 20:57:41'),
(27, 'wina', 'Tj.Priok Jakarta Utara', '2024-11-08 02:11:10', '2024-11-09 02:11:10'),
(28, 'aeron', 'Jakarta Selatan', '2024-11-08 02:15:59', '2024-11-09 02:15:59'),
(29, 'AeronnShikii', 'Jakarta Selatan', '2024-11-08 09:03:21', '2024-11-09 09:03:21'),
(30, 'AeronnShikii', 'Jakarta Selatan', '2024-11-08 09:03:43', '2024-11-09 09:03:43'),
(31, 'AeronnShikii', 'Jakarta Selatan', '2024-11-08 09:04:02', '2024-11-09 09:04:02'),
(32, 'AeronnShikii', 'Jakarta Selatan', '2024-11-08 09:04:34', '2024-11-09 09:04:34'),
(33, 'AeronnShikii', 'Jakarta Selatan', '2024-11-08 09:04:37', '2024-11-09 09:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 1, 'Sofa', 1, 3000000, ''),
(2, 1, 2, 'Lemari', 1, 2500000, ''),
(3, 1, 3, 'Spring Bed', 1, 3500000, ''),
(4, 1, 4, 'Tv', 1, 3300000, ''),
(5, 1, 5, 'Workpan', 1, 450000, ''),
(6, 1, 6, 'Kulkas', 1, 7000000, ''),
(7, 2, 1, 'Sofa', 1, 3000000, ''),
(8, 2, 2, 'Lemari', 1, 2500000, ''),
(9, 2, 3, 'Spring Bed', 1, 3500000, ''),
(10, 2, 4, 'Tv', 1, 3300000, ''),
(11, 2, 5, 'Workpan', 1, 450000, ''),
(12, 2, 6, 'Kulkas', 1, 7000000, ''),
(13, 3, 1, 'Sofa', 1, 3000000, ''),
(14, 3, 2, 'Lemari', 1, 2500000, ''),
(15, 4, 1, 'Sofa Classic Eropa', 1, 6900000, ''),
(16, 5, 11, 'Sofa Modern Sleeper Sectional', 2, 6200000, ''),
(17, 6, 4, 'Tv', 1, 3300000, ''),
(19, 8, 1, 'Sofa Classic Eropa', 1, 6900000, ''),
(20, 8, 2, 'Lemari', 1, 2500000, ''),
(21, 9, 1, 'Sofa Classic Eropa', 1, 6900000, ''),
(22, 10, 3, 'Spring Bed', 1, 3500000, ''),
(23, 11, 1, 'Sofa Classic Eropa', 1, 6900000, ''),
(24, 11, 2, 'Lemari', 1, 2500000, ''),
(25, 12, 6, 'Kulkas', 1, 7000000, ''),
(26, 12, 4, 'Tv', 1, 3300000, ''),
(27, 14, 1, 'Sofa Classic Eropa', 1, 6900000, ''),
(28, 14, 2, 'Lemari', 1, 2500000, ''),
(29, 15, 1, 'Sofa Classic Eropa', 1, 6900000, ''),
(30, 16, 2, 'Lemari', 1, 2500000, ''),
(31, 17, 1, 'Sofa Classic Eropa', 1, 6900000, ''),
(32, 17, 3, 'Spring Bed', 1, 3500000, ''),
(33, 18, 1, 'Sofa Classic Eropa', 1, 6900000, ''),
(34, 19, 1, 'Sofa Classic Eropa', 1, 6900000, ''),
(35, 20, 15, 'Lemari Dapur', 1, 7200000, ''),
(36, 20, 23, 'Spring Bed King Koil', 1, 5100000, ''),
(37, 21, 21, 'Spring Bed Therapedic', 1, 4900000, ''),
(38, 21, 10, 'Sofa Modular Pit Sectional', 1, 5700000, ''),
(39, 24, 7, 'Sofa Modernos', 1, 5500000, ''),
(40, 25, 2, 'Lemari', 1, 2500000, ''),
(41, 25, 24, 'Spring Bed Serta', 1, 5200000, ''),
(42, 26, 12, 'Lemari Pakaian Serat Kayu', 1, 3000000, ''),
(43, 27, 11, 'Sofa Modern Sleeper Sectional', 1, 6200000, ''),
(44, 28, 6, 'Kulkas', 1, 7000000, ''),
(45, 29, 30, 'Tv Sony', 1, 2500000, ''),
(46, 29, 15, 'Lemari Dapur', 1, 7200000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2),
(3, 'Dewi', 'Dewita', '123', 2),
(4, 'AeronnShikii', 'aeron', '123', 2),
(5, 'Wina Ningsih', 'winaning', '123', 2),
(6, 'Andreas', 'andreas43', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
