-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Des 2013 pada 04.56
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `jposapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_cus` int(11) NOT NULL AUTO_INCREMENT,
  `noaccount` int(11) NOT NULL,
  `cperusahaan` varchar(100) NOT NULL,
  `cfname` varchar(25) NOT NULL,
  `clname` varchar(25) NOT NULL,
  `email` varchar(75) NOT NULL,
  `calamat1` text NOT NULL,
  `calamat2` text NOT NULL,
  `ckode_pos` int(11) NOT NULL,
  `ckota` varchar(50) NOT NULL,
  `cprovinsi` varchar(50) NOT NULL,
  `cdeskripsi` text NOT NULL,
  PRIMARY KEY (`id_cus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cus`, `noaccount`, `cperusahaan`, `cfname`, `clname`, `email`, `calamat1`, `calamat2`, `ckode_pos`, `ckota`, `cprovinsi`, `cdeskripsi`) VALUES
(1, 12661, 'PT. Kopi Kapal Api', 'hakam', 'al-amin', 'hakam_amin@yahoo.co.id', 'Jl. Bataran II no.9', 'Jl. Bataran II no.10', 12894, 'Malang', 'Jawa Timur', 'perusahaan pembuat permen kopi kapal api'),
(3, 12968, 'PT.ELEKMEDIA BUKU', 'fahmi', 'azain', 'fahmi.j@programmer.net', 'Jl.Manggar II no.9', 'Jl.Manggar II no.10', 12495, 'Malang', 'Jawa Timur', 'perusahaan pembuat buku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NIP` int(11) NOT NULL,
  `employee_name` varchar(65) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `addess` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id`, `NIP`, `employee_name`, `email`, `no_telp`, `addess`) VALUES
(1, 12661, 'M. Fahmi A. Zain', 'fahmi.j@programmer.net', '081252067797', 'Jl.Manggar no 09 Gawok, Wuluhan, Jember'),
(2, 12662, 'Hakam Syaharuddin Al Amien', 'hakamalamien@yahoo.com', '08128786438', 'Jl.Mojosari no 09 Mojokerto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id_gbr` int(11) NOT NULL AUTO_INCREMENT,
  `judu_gbr` varchar(60) NOT NULL,
  `file_gbr` varchar(150) NOT NULL,
  `uploaded` datetime NOT NULL,
  PRIMARY KEY (`id_gbr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gbr`, `judu_gbr`, `file_gbr`, `uploaded`) VALUES
(3, 'girls generation', '1359861.jpg', '2013-12-01 00:00:00'),
(4, 'Tiffany', '', '2013-12-02 00:00:00'),
(5, 'Tiffany', '', '2013-12-02 00:00:00'),
(6, 'girls generation', '', '0000-00-00 00:00:00'),
(7, 'girls generation', '', '0000-00-00 00:00:00'),
(8, 'Tiffany', '', '0000-00-00 00:00:00'),
(9, 'girls generation', 'dfd lvl 2 p3.png', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `ITEM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ITEM_CODE` varchar(40) NOT NULL DEFAULT '',
  `ITEM_DESCRIPTION` varchar(80) DEFAULT NULL,
  `BARCODE` varchar(40) DEFAULT NULL,
  `UOM_CODE` varchar(18) NOT NULL DEFAULT '',
  `MIN_STOCK` double(17,5) DEFAULT NULL,
  `ACTIVE_FLAG` char(1) NOT NULL DEFAULT 'Y',
  `CREATED_BY` int(11) NOT NULL DEFAULT '0',
  `CREATED_DATE` datetime NOT NULL,
  `LAST_UPDATE_DATE` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LAST_UPDATE_BY` int(11) NOT NULL DEFAULT '0',
  `GAMBAR` varchar(150) DEFAULT NULL,
  `NOTE` varchar(240) DEFAULT NULL,
  `ITEM_NAME` varchar(80) DEFAULT NULL,
  `C_PRICE` int(20) NOT NULL,
  PRIMARY KEY (`ITEM_ID`),
  UNIQUE KEY `ITEM_CODE` (`ITEM_CODE`),
  UNIQUE KEY `BARCODE` (`BARCODE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`ITEM_ID`, `ITEM_CODE`, `ITEM_DESCRIPTION`, `BARCODE`, `UOM_CODE`, `MIN_STOCK`, `ACTIVE_FLAG`, `CREATED_BY`, `CREATED_DATE`, `LAST_UPDATE_DATE`, `LAST_UPDATE_BY`, `GAMBAR`, `NOTE`, `ITEM_NAME`, `C_PRICE`) VALUES
(1, '12661', 'SNSD new album relese', '9743893618746', '69843', 90.00000, 'Y', 0, '0000-00-00 00:00:00', '2013-12-01 14:48:32', 1, '439.jpg', 'barang masih dalam kondisi bagus belum di buka sama sekali', 'CD Girls Generation - Galaxy Supernova', 90000),
(2, '79789', 'CD AKB48 Album terbaru', '92847897', '', NULL, 'Y', 1, '2013-11-30 13:58:10', '2013-12-01 15:15:09', 1, 'Majisuka.jpeg', '', 'CD & DVD AKB48 MAJISUKA GAKUEN', 145000),
(3, '89928', 'New Single JKT48', '8429738247562', '8092', 100.00000, 'Y', 1, '2013-12-01 17:28:12', '2013-12-01 17:28:43', 1, 'kghjg.jpg', '', 'CD JKT48 Manatsu no Sounds Good', 58000),
(4, '985763478', '', '98786782746736', '1787', 23.00000, 'Y', 1, '2013-12-05 18:00:53', '2013-12-05 18:07:39', 1, 'PRIVATE.jpg', '', 'Pakeage Software Accounting', 0),
(5, '982347', '', '875028743', '', NULL, 'Y', 0, '0000-00-00 00:00:00', '2013-12-05 18:23:02', 1, 'acer-aspire-as4920-notebook.jpg', '', 'DELL INSPIRON N4030', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_masuk`
--

CREATE TABLE IF NOT EXISTS `kas_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `money_in` double(17,5) NOT NULL,
  `desc` text NOT NULL,
  `date_in` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `kas_masuk`
--

INSERT INTO `kas_masuk` (`id`, `person_id`, `money_in`, `desc`, `date_in`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 500000.00000, '', '2013-12-01 07:20:02', '2013-12-01 07:20:05', 1, '0000-00-00 00:00:00', 0),
(2, 1, 1000000.00000, '', '2013-12-07 07:28:14', '2013-12-01 07:21:56', 1, '0000-00-00 00:00:00', 0),
(3, 2, 500000.00000, '', '2013-12-01 07:24:42', '2013-12-01 07:24:45', 1, '0000-00-00 00:00:00', 0),
(4, 2, 100000.00000, '', '2013-12-01 07:26:15', '2013-12-01 07:26:18', 1, '0000-00-00 00:00:00', 0),
(5, 2, 30000.00000, '', '2013-12-04 18:32:26', '2013-12-04 18:32:29', 1, '0000-00-00 00:00:00', 0),
(6, 1, 870000.00000, '', '2013-12-07 10:48:44', '2013-12-07 10:48:47', 1, '0000-00-00 00:00:00', 0),
(7, 2, 670000.00000, '', '2013-12-07 10:54:29', '2013-12-07 10:54:32', 1, '0000-00-00 00:00:00', 0),
(8, 1, 550000.00000, 'Do You Believe This Situation?', '2013-12-07 10:56:02', '2013-12-07 10:56:06', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `km_details`
--

CREATE TABLE IF NOT EXISTS `km_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `km_id` int(11) NOT NULL,
  `name_out` varchar(225) NOT NULL,
  `amount_money_out` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `km_details`
--

INSERT INTO `km_details` (`id`, `km_id`, `name_out`, `amount_money_out`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'Uang Makan', 50000, '2013-12-01 07:20:35', 1, '0000-00-00 00:00:00', 1),
(2, 1, 'Uang Bensin', 100000, '2013-12-01 07:21:04', 1, '0000-00-00 00:00:00', 1),
(3, 2, 'Uang Bensin', 50000, '2013-12-01 07:24:05', 1, '2013-12-05 05:43:25', 1),
(4, 3, 'CD Girls Generation', 50000, '2013-12-01 07:24:58', 1, '2013-12-05 05:41:02', 1),
(5, 5, 'Uang Makan Amien', 500, '2013-12-04 18:32:53', 1, '2013-12-04 19:04:47', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `price_list`
--

CREATE TABLE IF NOT EXISTS `price_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` double(17,5) NOT NULL,
  `item_id` int(11) NOT NULL,
  `from_periode` datetime NOT NULL,
  `until_periode` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `price_list`
--

INSERT INTO `price_list` (`id`, `price`, `item_id`, `from_periode`, `until_periode`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 90000.00000, 1, '2013-11-30 00:00:00', '2013-12-07 13:57:15', '2013-11-30 13:57:22', 1, '0000-00-00 00:00:00', 0),
(2, 870000.00000, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 145000.00000, 2, '2013-12-14 00:00:00', '2013-12-28 00:00:00', '2013-11-30 14:02:27', 1, '0000-00-00 00:00:00', 0),
(4, 225000.00000, 2, '2014-01-01 00:00:00', '2014-01-10 00:00:00', '2013-11-30 14:03:00', 1, '0000-00-00 00:00:00', 0),
(5, 58000.00000, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 2900000.00000, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 3000000.00000, 4, '2013-12-01 00:00:00', '2013-12-31 18:04:52', '2013-12-05 18:04:57', 1, '0000-00-00 00:00:00', 0),
(8, 4500000.00000, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2013-12-05 18:26:10', 1, '2013-12-05 18:33:44', 1),
(9, 200000.00000, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2013-12-05 18:39:05', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_order`
--

CREATE TABLE IF NOT EXISTS `sales_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `needed` datetime NOT NULL,
  `sales_name` varchar(100) NOT NULL,
  `tp_payment` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `sales_order`
--

INSERT INTO `sales_order` (`id`, `customer_name`, `location`, `needed`, `sales_name`, `tp_payment`, `keterangan`, `created_by`, `created_at`, `updated_at`, `updated_by`) VALUES
(1, '3', 'Jl.Merbabu no 39 Malang', '2013-12-26 04:30:14', 'Akmal', 2, 'Tidak tahu', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, '1', 'Jl. Bataran II no.9', '2013-12-01 00:00:00', 'Amira', 2, 'No thing', 1, '2013-12-01 07:48:22', '2013-12-01 13:12:04', 1),
(4, '3', 'Jl.Manggar II no.9', '2013-12-04 00:00:00', 'Hijua', 1, 'kijhhjhgjhgjhg', 1, '2013-12-04 18:17:42', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setapp`
--

CREATE TABLE IF NOT EXISTS `setapp` (
  `id_app` int(11) NOT NULL AUTO_INCREMENT,
  `namaapp` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `judulatas` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `textjalan` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `favicon` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notefortoday` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_app`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `setapp`
--

INSERT INTO `setapp` (`id_app`, `namaapp`, `judulatas`, `textjalan`, `gambar`, `favicon`, `notefortoday`) VALUES
(1, 'Jsource (Jember Open Source)', 'Secure, Fast and Professional.', 'selamat datang di Jsource Pos App(Point Of Sales Application)', '1359861.png', '1359861.png', 0x4b7572616e672042616e79616b2079616e6720686172757320646967756e616b616e20756e74756b2070656e616e67616e616e);

-- --------------------------------------------------------

--
-- Struktur dari tabel `so_details`
--

CREATE TABLE IF NOT EXISTS `so_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` int(11) NOT NULL,
  `item_name` varchar(90) NOT NULL,
  `so_id` int(11) NOT NULL,
  `c_price` int(11) NOT NULL,
  `qty` varchar(90) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `so_details`
--

INSERT INTO `so_details` (`id`, `item_code`, `item_name`, `so_id`, `c_price`, `qty`, `total`) VALUES
(4, 1, 'CD Girls Generation - Galaxy Supernova', 1, 90000, '9', 810000),
(5, 2, 'So Neo Shi Dae', 1, 870000, '2', 1740000),
(6, 2, 'So Neo Shi Dae', 3, 870000, '3', 2610000),
(7, 1, 'CD Girls Generation - Galaxy Supernova', 3, 90000, '6', 270000),
(11, 3, 'CD JKT48 Manatsu no Sounds Good', 4, 90000, '3', 270000),
(12, 2, 'CD & DVD AKB48 MAJISUKA GAKUEN', 4, 145000, '3', 435000),
(13, 1, 'CD Girls Generation - Galaxy Supernova', 4, 90000, '3', 270000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `Id_sup` int(11) NOT NULL AUTO_INCREMENT,
  `No_Account` int(11) NOT NULL,
  `Perusahaan` varchar(25) DEFAULT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat1` text NOT NULL,
  `alamat2` text,
  `kode_pos` int(11) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `deskripsi` text,
  PRIMARY KEY (`Id_sup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`Id_sup`, `No_Account`, `Perusahaan`, `fname`, `lname`, `email`, `alamat1`, `alamat2`, `kode_pos`, `kota`, `provinsi`, `deskripsi`) VALUES
(1, 98648, 'DELL INC', 'david ', 'maulana', 'davidmaulana@yahoo.co.id', 'Jl.Merbabu gg.3 no 18 BLOK D-10', '', 14968, 'Jakarta', 'DKI Jakarta', 'perusahaan elektronik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tp_payment`
--

CREATE TABLE IF NOT EXISTS `tp_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tp_payment` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tp_payment`
--

INSERT INTO `tp_payment` (`id`, `tp_payment`) VALUES
(1, 'Credit'),
(2, 'Debit'),
(3, 'Cash');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joinDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level_id` enum('1','2','3') NOT NULL,
  `last_login_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `email`, `joinDate`, `level_id`, `last_login_time`) VALUES
(1, 'Muhammad amir', 'Fahmi A.zain', 'fahmi_jsource', '222419724b47a74bc92ff13c6eaead29', 'fahmi.j@programmer.net', '2013-12-07 01:54:20', '1', '2013-12-07 08:54:20'),
(2, 'Hakam Udin', 'Al-Amin', 'temon', '9112112fe05b8fb04ac1c1e817a185c3', 'a''uadjaah@yahoo.co.id', '2013-12-01 17:00:30', '2', '2013-12-02 00:00:30'),
(3, 'devi', 'kristina', 'DK', '222419724b47a74bc92ff13c6eaead29', 'rizafaza@ymail.com', '2013-11-14 04:20:00', '3', '2013-11-14 11:20:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
