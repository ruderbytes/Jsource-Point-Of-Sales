-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2014 pada 15.11
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
-- Struktur dari tabel `advertising`
--

CREATE TABLE IF NOT EXISTS `advertising` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `advertising`
--

INSERT INTO `advertising` (`id`, `judul`, `nama`, `alamat`, `no_telp`, `avatar`, `isi`, `kota`, `provinsi`, `created_at`, `parent_id`) VALUES
(1, 'Jual Rumah Mewah dekat Alun-Alun Kota Jember', 'Devi Kristina', 'Jl.Manggar no.09', '081252067797', 'rumah-devi-fahmi.jpg', 'Dijual rumah mewah dekat alun-alun kota jember minat bisa hubungi harga nego tipis nego kebangetan gak dibales hubungi no telp yang sudah tertera \r\nOriginally built in 1910 by the famous Sarkies brother, Hotel Majapahit is a classic landmark hotel filled with national pride, where an impressive history blends with romance and elegance. Its graceful architecture, landscaped gardens, resort spa and gym complete hotel Majapahit’s colonial style oasis with resort spa and recreation facilities. Classic landmark hotel which was built in 1910 by the famous Sarkies family adorned with its architecture elegance A luxurious spa offering a wide range of treatments to refresh body and mind A comprehensive health club offering a gym, tennis court, and one swimming pool Opulent gold and marble Majapahit bathroom in every room and suite One of the largest and elegantly designed Presidential Suite in Asia ( 800 sqm) 45 cable TV channels in all rooms', 'Jember', 'Jawa Timur', '2013-12-12 08:25:19', 4),
(5, 'Hadiri Pameran FKI 6-10 Juni 2012 di Gramedia Expo ~ 2012-06-06', 'Hakam Syaharuddin Al Amien', 'Jl. Mojosari, RT.06 RW.07 Lontar , Mojokerto', '09273827', '25107_1.jpg', '<p style="font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 14px; line-height: 20px; vertical-align: baseline; color: rgb(51, 51, 51);">KUNJUNGI FESTIFAL KOMPUTER INDONESIA DI GRAMEDIA EXPO SURABAYA. TGL. 6-10 JUN 2012</p><span style="color: rgb(51, 51, 51); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);">DAPATKAN SOUVENIR CANTIK DAN DISKON HINGGA 70% UNTUK SETIAP PEMBELIAN PRODUK SEVENTHSOFT ACCOUNTING SOFTWARE.</span><p style="font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 14px; line-height: 20px; vertical-align: baseline; color: rgb(51, 51, 51);"></p><p style="font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 14px; line-height: 20px; vertical-align: baseline; color: rgb(51, 51, 51);">KAMI JUGA BAGIKAN CD DEMO GRATIS.</p><p style="font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 14px; line-height: 20px; vertical-align: baseline; color: rgb(51, 51, 51);">HANYA 5 HARI SAJA. INFO LEBIH LANJUT HUB :</p><p style="font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 14px; line-height: 20px; vertical-align: baseline; color: rgb(51, 51, 51);">JONATHAN EKA - 081.70.324.3344/031.9101.6606 ATAU IWAN - 0819.3863.5758/031.3476.2004</p><p style="font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 14px; line-height: 20px; vertical-align: baseline; color: rgb(51, 51, 51);">AYO BURUAN DATANG !!!</p>', 'Mojokerto', 'Jawa Timur', '2013-12-12 10:43:09', 4),
(8, 'Jual Action Figure Kura-Kura Ninja, Kamen Rider, Naruto Rp. 50.000 an', 'Muslim Hari Sunaryo', 'Jl.Dukuh Dempok no.10 Gelundengan, Wuluhan', '0982387438', '946135_505164942871428_462978645_n.jpg', '<span style="font-family: ''Arial Black'';">Kura-Kura Ninja</span><div><span style="font-family: ''Arial Black'';"><br></span></div><div><span style="font-family: Arial;">Beli semua 300k aja kalau mau beli per biji gak bisa kecuali per biji 100k</span></div><div>gratis ongkir ke seluruh indonesia.</div><div><br></div><div><span style="font-family: ''Arial Black'';">Naruto</span></div><div><br></div><div><div><span style="font-family: Arial;">Beli semua 300k aja kalau mau beli per biji gak bisa kecuali per biji 100k</span></div><div>gratis ongkir ke seluruh indonesia.</div></div><div><br></div><div><span style="font-family: ''Arial Black'';">Kamen Rider</span></div><div><br></div><div>Kalau ini sepesial bro bisa bijian tapi agak mahalan</div><div>Kamen Rider OOO =&gt; 75k</div><div>Kamen Rider Fourze =&gt; 90k</div><div>Kamen Rider Gaim =&gt; 150k&nbsp;</div><div><br></div><div>Khusus Gaim kok mahal karena barang baru ori asli kemarin ane baru dari jepang.</div><div><br></div><div>yang minan kirim sms</div><div>yang gak punya hp ini ke email ane aje</div><div><a href="mailto://actionfigure@yahoo.co.id">actionfigure@yahoo.co.id</a></div>', '', '', '2013-12-12 16:10:17', 4),
(9, 'Wisata Pantai Indah Korea', 'M. Fahmi Azain', 'Jl.Senayar no.90 seoul, Korea', '0927384478786', '521324de674611e3ae8712f8e584c17a_8.jpg', 'Telah dibuka wisata di seoul<div>HTM = 200k / orang</div><div>banyak wahana yang tersedia.</div><div><br></div><div>untuk paket wisata dipotong harga mulai 100-150k</div><div><br></div><div>telp: 09892473864 / 092739824</div><div><br></div><div>Jl.Senayar no.90 seoul, Korea</div><div><br></div>', 'Seoul', 'Seoul', '2013-12-28 11:13:35', 11),
(10, 'Jual Koran Lama', 'fahmi amin', 'Jl. Budi Utomo', '088246879989', 'fitur komp.jpg', 'Jual koran harga 1000', 'Jember', 'Jawa Timur', '2014-01-07 11:23:34', 14);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cus`, `noaccount`, `cperusahaan`, `cfname`, `clname`, `email`, `calamat1`, `calamat2`, `ckode_pos`, `ckota`, `cprovinsi`, `cdeskripsi`) VALUES
(1, 12661, 'PT. Kopi Kapal Api', 'hakam', 'al-amin', 'hakam_amin@yahoo.co.id', 'Jl. Bataran II no.9', 'Jl. Bataran II no.10', 12894, 'Malang', 'Jawa Timur', 'perusahaan pembuat permen kopi kapal api'),
(3, 12968, 'PT.ELEKMEDIA BUKU', 'fahmi', 'azain', 'fahmi.j@programmer.net', 'Jl.Manggar II no.9', 'Jl.Manggar II no.10', 12495, 'Malang', 'Jawa Timur', 'perusahaan pembuat buku'),
(4, 98249, 'PT Jati Mulya', 'muhammad', 'al-fatih', 'rizafaza@ymail.com', 'Jakarta', 'Jember', 652673, 'Jakarta', 'Jakarta', 'Jakarta'),
(5, 938859, 'SMTown ', 'Tiffany', 'Hwang', 'miyoungtiff@smtown.com', 'Jl.Stapak no.9 Seoul, Korea', 'Jl.Stapak no.9 Seoul, Korea', 129849, 'Seoul', 'Seoul', 'Customer Tetap nih'),
(6, 984358, 'Microhard', 'Will ', 'Gates', 'willbegates@yahoo.co.ig', 'Jl.Marung Momo no 83 , Kanada', 'Jl.Marung Momo no 83 , Kanada', 398786, 'Mashasi', 'Kyouto', 'Perusahaan Makanan Cepat Saji'),
(7, 938859, 'Personal', 'Habiburahman', 'Elshirazi', 'habiburahman@yahoo.co.id', 'Jl.Emandasih', 'Jl.Antarika', 928729, 'Semarang', 'Jawa Tengah', 'baguslah'),
(8, 978797, 'PT Djaya Pura', 'Amir', 'Khan', 'ammirkhan@yahoo.co.id', 'Jl.Maraya no 9 ', 'Jl.Maraya no 9 ', 92879, 'Surabaya', 'Jawa Timur', 'Perusahaan Minyak'),
(9, 834889, 'PT.GOGOMALL Indonesia', 'amir', 'fahat', 'amirfahat@ymail.com', 'Jember', 'Jember 2', 987438, 'Jember', 'Jawa Timur', 'pengelolaan minyak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id`, `nama`, `path`, `desc`) VALUES
(1, 'Seventhsoft Web Offline', 'seventhsite.zip', 'Seventhsoft Web Offline'),
(2, 'Dhike Web Browser', 'DhikeWebBrowse.zip', 'iug'),
(3, 'miyoungtiff', 'css-admin.zip', 'terserah kamu deh'),
(4, 'SNSD', 'currencymanager.zip', 'Girls Generation');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id`, `NIP`, `employee_name`, `email`, `no_telp`, `addess`) VALUES
(1, 12661, 'M. Fahmi A. Zain', 'fahmi.j@programmer.net', '081252067797', 'Jl.Manggar no 09 Gawok, Wuluhan, Jember'),
(2, 12662, 'Hakam Syaharuddin Al Amien', 'hakamalamien@yahoo.com', '08128786438', 'Jl.Mojosari no 09 Mojokerto'),
(3, 92479, 'Devi Kristina', 'devei_kristina@yahoo.com', '039584954759486', 'Jl.Jakarta'),
(4, 8765757, 'Wildan', 'wildan@yahoo.co.id', '09879867766', 'JL.kediri baru'),
(5, 986875, 'Zaki', 'zaki@yahoo.co.id', '0878675674', 'Jl.kediri baru'),
(6, 875667, 'Muhammad Amien Jundi', 'jundighuroba@yahoo.co.id', '092823499898', 'Jl.Merdeka Barat'),
(7, 9, 'Lain-Lain', 'kaslain@ymail.com', '0098928349', 'Jakarta'),
(8, 89676898, 'Ami', 'fahmi.j@programmer.net', '092823499898', 'Jember');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gbr`, `judu_gbr`, `file_gbr`, `uploaded`) VALUES
(2, 'Yii Framework Logo', 'logo.png', '2013-12-11 23:40:51'),
(3, 'Bismillah', 'adsd.jpg', '2013-12-15 09:37:21'),
(4, 'aknoo', 'Hydrangeas.jpg', '2013-12-15 09:38:26'),
(5, 'Yoona Hijab', 'BYiDERcCEAAWYFb.jpg', '2013-12-15 09:47:19'),
(6, 'Yoona Hijab 2', 'BW3TMaQCAAEPyMd.jpg', '2013-12-15 09:48:48'),
(7, 'Tiffany & Taeyeon', 'e9de4c4e500811e3b75d0ee2f53ed40e_8.jpg', '2013-12-15 09:49:42'),
(8, 'Stooping me', 'f68478605b4811e3b3db0ea9ea681b0f_8.jpg', '2013-12-16 00:06:28'),
(9, 'llll', '1230020_575444385863536_524286253_n.jpg', '2013-12-18 01:17:29'),
(10, 'pakege', 'package.png', '2014-01-07 11:20:01');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`ITEM_ID`, `ITEM_CODE`, `ITEM_DESCRIPTION`, `BARCODE`, `UOM_CODE`, `MIN_STOCK`, `ACTIVE_FLAG`, `CREATED_BY`, `CREATED_DATE`, `LAST_UPDATE_DATE`, `LAST_UPDATE_BY`, `GAMBAR`, `NOTE`, `ITEM_NAME`, `C_PRICE`) VALUES
(1, '12661', 'Paket Software Resto Seventhsoft', '5279823287', '69843', 90.00000, 'Y', 1, '2014-01-01 08:13:24', '2014-01-07 08:14:12', 1, 'fitur komp.jpg', 'Paket SEVENTHsoft Resto adalah paket Software Poin Of sale (POS) dan Hardware yang diperuntukkan untuk bisnis Restoran dan Kuliner', 'Software Resto Seventhsoft', 12500000),
(7, '89287', 'software akuntansi seventhsoft yang basic digunakan untuk perusahaan personal at', '928748438970', '988633', 60.00000, 'Y', 1, '2013-12-15 10:01:40', '2014-01-07 09:12:52', 1, 'package.png', '', 'Basic Accounting', 2500000),
(15, '983478', 'Paket Hemat Toko Online', '839824867458976', '987358', NULL, 'Y', 1, '2014-01-07 09:02:43', '0000-00-00 00:00:00', 0, 'seventhsite.jpg', 'toko online milik seventhsite ini memiliki beberapa keunggulan yang banyak untuk toko online', 'Toko Online Seventhsite', 500000),
(16, '9874978', '', '9836538746', '', NULL, 'Y', 1, '2014-01-07 10:46:03', '2014-01-07 10:47:09', 1, 'package.png', '', 'Standart Accounting', 4000000),
(17, '874738', '', '8737688', '', 86.00000, 'N', 1, '2014-01-07 10:48:05', '0000-00-00 00:00:00', 0, 'package.png', '', 'Premium Accounting', 5000000),
(18, '8772637', 'remote jarak jauh', '8374876', '', 879.00000, 'Y', 1, '2014-01-07 11:11:52', '2014-01-07 11:13:32', 1, 'fitur komp.jpg', '', 'Software Remote PC', 700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_masuk`
--

CREATE TABLE IF NOT EXISTS `kas_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `money_in` double(17,5) NOT NULL,
  `desc` text NOT NULL,
  `saldo` int(11) NOT NULL,
  `date_in` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `kas_masuk`
--

INSERT INTO `kas_masuk` (`id`, `person_id`, `money_in`, `desc`, `saldo`, `date_in`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 500000.00000, '', 0, '2013-12-01 07:20:02', '2013-12-01 07:20:05', 1, '0000-00-00 00:00:00', 0),
(2, 1, 1000000.00000, '', 0, '2013-12-07 07:28:14', '2013-12-01 07:21:56', 1, '0000-00-00 00:00:00', 0),
(3, 2, 500000.00000, '', 0, '2013-12-01 07:24:42', '2013-12-01 07:24:45', 1, '0000-00-00 00:00:00', 0),
(4, 2, 100000.00000, '', 0, '2013-12-01 07:26:15', '2013-12-01 07:26:18', 1, '0000-00-00 00:00:00', 0),
(5, 2, 30000.00000, '', 0, '2013-12-04 18:32:26', '2013-12-04 18:32:29', 1, '0000-00-00 00:00:00', 0),
(6, 1, 870000.00000, '', 0, '2013-12-07 10:48:44', '2013-12-07 10:48:47', 1, '0000-00-00 00:00:00', 0),
(7, 2, 670000.00000, '', 0, '2013-12-07 10:54:29', '2013-12-07 10:54:32', 1, '0000-00-00 00:00:00', 0),
(8, 1, 550000.00000, 'Do You Believe This Situation?', 0, '2013-12-07 10:56:02', '2013-12-07 10:56:06', 1, '0000-00-00 00:00:00', 0),
(9, 2, 500000.00000, 'uang ke Korea', 0, '2013-12-15 00:00:00', '2013-12-15 21:26:50', 1, '0000-00-00 00:00:00', 0),
(10, 3, 270000.00000, 'Training di JEXpo International', 0, '2013-12-24 14:26:52', '2013-12-24 14:26:54', 1, '0000-00-00 00:00:00', 0),
(11, 4, 500000.00000, 'Training di JEXpo International', 0, '2013-12-27 00:00:00', '2013-12-27 16:03:17', 1, '0000-00-00 00:00:00', 0),
(14, 8, 50000.00000, 'Mbayar charger', 0, '2014-01-05 00:00:00', '2014-01-05 19:56:09', 1, '0000-00-00 00:00:00', 0),
(15, 1, 800000.00000, '', 0, '2014-01-02 00:00:00', '2014-01-07 11:09:02', 1, '0000-00-00 00:00:00', 0),
(16, 7, 50000.00000, '', 0, '2014-01-09 18:13:11', '2014-01-10 19:15:51', 1, '2014-01-12 22:39:19', 0),
(17, 7, 100000.00000, 'Uang dari Bu''e', 41000, '2014-01-13 05:34:14', '2014-01-13 19:13:19', 1, '2014-01-14 19:17:07', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data untuk tabel `km_details`
--

INSERT INTO `km_details` (`id`, `km_id`, `name_out`, `amount_money_out`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'Uang Makan', 50000, '2013-12-01 07:20:35', 1, '0000-00-00 00:00:00', 1),
(2, 1, 'Uang Bensin', 100000, '2013-12-01 07:21:04', 1, '0000-00-00 00:00:00', 1),
(4, 3, 'CD Girls Generation', 50000, '2013-12-01 07:24:58', 1, '2013-12-05 05:41:02', 1),
(5, 5, 'Uang Makan Amien', 500, '2013-12-04 18:32:53', 1, '2013-12-04 19:04:47', 1),
(6, 4, 'CD Girls Generation', 90000, '2013-12-15 21:24:22', 1, '0000-00-00 00:00:00', 0),
(7, 9, 'Tiket Pesawat Ke Korea', 150000, '2013-12-15 21:27:21', 1, '2013-12-15 21:47:06', 1),
(8, 9, 'Tiket Pesawat Ke Seoul', 50000, '2013-12-15 21:36:56', 1, '0000-00-00 00:00:00', 0),
(9, 9, 'Belanja Di Seoul City Mall', 200000, '2013-12-15 21:46:26', 1, '0000-00-00 00:00:00', 0),
(11, 1, 'Terserah Yoona Deh', 100000, '2013-12-15 22:48:07', 1, '0000-00-00 00:00:00', 0),
(12, 1, 'Yoona Beli Hijab', 50000, '2013-12-15 22:51:09', 1, '0000-00-00 00:00:00', 0),
(13, 2, 'Uang Makan Amien', 50000, '2013-12-15 22:53:21', 1, '0000-00-00 00:00:00', 0),
(14, 2, 'CD Girls Generation', 500000, '2013-12-15 22:53:37', 1, '0000-00-00 00:00:00', 0),
(15, 10, 'makan masakan padang', 100000, '2013-12-24 14:27:51', 1, '0000-00-00 00:00:00', 0),
(16, 10, 'bensin 10 liter', 100000, '2013-12-24 14:28:26', 1, '0000-00-00 00:00:00', 0),
(17, 11, 'Uang Makan', 60000, '2013-12-27 16:05:40', 1, '0000-00-00 00:00:00', 0),
(18, 12, 'Beli 5 Komputer', 7500000, '2013-12-27 20:39:47', 1, '2013-12-29 13:44:19', 1),
(19, 12, 'CD Linux Jsource', 500000, '2013-12-27 20:40:26', 1, '0000-00-00 00:00:00', 0),
(20, 14, 'bensin 1 liter (eceran)', 7000, '2014-01-05 19:56:35', 1, '0000-00-00 00:00:00', 0),
(21, 15, 'uang bensin', 100000, '2014-01-07 11:09:34', 1, '0000-00-00 00:00:00', 0),
(22, 16, 'Bensin 10rb', 10000, '2014-01-10 19:16:26', 1, '0000-00-00 00:00:00', 0),
(23, 16, 'Angkot Berangkat', 4000, '2014-01-10 19:16:56', 1, '0000-00-00 00:00:00', 0),
(24, 16, 'Angkot PP hari jum''at', 8000, '2014-01-10 19:17:29', 1, '0000-00-00 00:00:00', 0),
(25, 16, 'Makan + minum Di Sekolah', 8000, '2014-01-10 19:18:12', 1, '0000-00-00 00:00:00', 0),
(26, 16, 'Angkot PP hari sabtu', 8000, '2014-01-11 19:59:14', 1, '0000-00-00 00:00:00', 0),
(27, 16, 'rinso 1', 1000, '2014-01-12 22:38:08', 1, '0000-00-00 00:00:00', 0),
(28, 16, 'hilang', 1000, '2014-01-12 22:38:20', 1, '0000-00-00 00:00:00', 0),
(29, 16, 'Potong Rambut', 10000, '2014-01-12 22:38:37', 1, '0000-00-00 00:00:00', 0),
(30, 17, 'Bensin 10rb', 10000, '2014-01-13 19:13:38', 1, '0000-00-00 00:00:00', 0),
(31, 17, 'uang jajan iil', 5000, '2014-01-13 19:13:58', 1, '0000-00-00 00:00:00', 0),
(32, 17, 'marung bakso', 5000, '2014-01-13 19:14:29', 1, '0000-00-00 00:00:00', 0),
(33, 17, 'bayar kurangan charger', 30000, '2014-01-13 19:14:54', 1, '0000-00-00 00:00:00', 0),
(34, 17, 'internetan', 7000, '2014-01-14 19:16:03', 1, '0000-00-00 00:00:00', 0),
(35, 17, 'jajan', 2000, '2014-01-14 19:16:19', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `langid` varchar(5) NOT NULL,
  `langdesc` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `language`
--

INSERT INTO `language` (`id`, `langid`, `langdesc`) VALUES
(1, 'id', 'indonesia'),
(2, 'kr', 'korea');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
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
-- Dumping data untuk tabel `partner`
--

INSERT INTO `partner` (`Id_sup`, `No_Account`, `Perusahaan`, `fname`, `lname`, `email`, `alamat1`, `alamat2`, `kode_pos`, `kota`, `provinsi`, `deskripsi`) VALUES
(1, 98648, 'DELL INC', 'david ', 'maulana', 'davidmaulana@yahoo.co.id', 'Jl.Merbabu gg.3 no 18 BLOK D-10', '', 14968, 'Jakarta', 'DKI Jakarta', 'perusahaan elektronik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelunasan`
--

CREATE TABLE IF NOT EXISTS `pelunasan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_so` int(11) NOT NULL,
  `tgl_pelunasan` datetime NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `pelunasan`
--

INSERT INTO `pelunasan` (`id`, `no_so`, `tgl_pelunasan`, `total_bayar`, `dibuat_oleh`, `kembali`) VALUES
(1, 3, '2014-01-08 16:54:57', 900000, 1, 0),
(2, 6, '2014-01-08 16:55:10', 900000, 1, 0),
(5, 5, '2014-01-08 17:03:56', 900000, 1, 800000),
(6, 8, '2014-01-06 00:00:00', 30000, 1, 10000),
(7, 7, '2014-01-12 22:52:33', 500000, 1, 100000),
(8, 3, '2014-01-12 22:54:47', 90000, 1, 12000);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data untuk tabel `price_list`
--

INSERT INTO `price_list` (`id`, `price`, `item_id`, `from_periode`, `until_periode`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 870000.00000, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 145000.00000, 2, '2013-12-14 00:00:00', '2013-12-28 00:00:00', '2013-11-30 14:02:27', 1, '0000-00-00 00:00:00', 0),
(4, 225000.00000, 2, '2014-01-01 00:00:00', '2014-01-10 00:00:00', '2013-11-30 14:03:00', 1, '0000-00-00 00:00:00', 0),
(5, 58000.00000, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 2900000.00000, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(7, 3000000.00000, 4, '2013-12-01 00:00:00', '2013-12-31 18:04:52', '2013-12-05 18:04:57', 1, '0000-00-00 00:00:00', 0),
(8, 4500000.00000, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2013-12-05 18:26:10', 1, '2013-12-05 18:33:44', 1),
(10, 10000000.00000, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2013-12-12 18:20:25', 1),
(12, 9500000.00000, 6, '2013-12-12 00:00:00', '2013-12-31 00:00:00', '2013-12-12 18:21:48', 1, '0000-00-00 00:00:00', 0),
(14, 50000.00000, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(15, 45000.00000, 8, '2013-12-21 00:00:00', '2013-12-31 00:00:00', '2013-12-15 10:20:44', 1, '0000-00-00 00:00:00', 0),
(16, 700000.00000, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(17, 1000000.00000, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(18, 900000.00000, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(19, 200000.00000, 2, '2013-12-16 00:00:00', '2013-12-16 00:00:00', '2013-12-16 12:28:24', 1, '0000-00-00 00:00:00', 0),
(20, 4500000.00000, 13, '2013-12-24 00:00:00', '2013-12-31 00:00:00', '2013-12-24 06:57:27', 1, '0000-00-00 00:00:00', 0),
(21, 100000.00000, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2013-12-28 11:21:57', 1, '0000-00-00 00:00:00', 0),
(22, 12500000.00000, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-07 08:14:00', 1, '0000-00-00 00:00:00', 0),
(23, 500000.00000, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(24, 2500000.00000, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-07 09:12:41', 1, '0000-00-00 00:00:00', 0),
(25, 4000000.00000, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-07 10:46:58', 1, '0000-00-00 00:00:00', 0),
(26, 5000000.00000, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(27, 900000.00000, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(28, 700000.00000, 18, '2014-01-01 00:00:00', '2014-01-06 00:00:00', '2014-01-07 11:13:12', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_name` varchar(60) NOT NULL,
  `posisi` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`id`, `sales_name`, `posisi`) VALUES
(1, 'Yoona', 'Bagian Gudang I'),
(2, 'Sunny', 'Bagian Garasi I'),
(3, 'Tiffany', 'Bagian Gudang II'),
(4, 'Sooyoung', 'Bagian Garasi II'),
(5, 'Jessica', 'Bagian Toko I'),
(6, 'Hyoyeon', 'Bagian Toko II'),
(7, 'Taeyeon', 'Bagian Pengantar Barang I'),
(8, 'Seohyun', 'Bagian Pengantar Barang II'),
(9, 'Yuri', 'Bagian Pengatur Keuangan I');

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
  `status` varchar(30) NOT NULL,
  `status_beli` enum('lunas','belum lunas') NOT NULL,
  `total` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `sales_order`
--

INSERT INTO `sales_order` (`id`, `customer_name`, `location`, `needed`, `sales_name`, `tp_payment`, `keterangan`, `status`, `status_beli`, `total`, `created_by`, `created_at`, `updated_at`, `updated_by`) VALUES
(1, '3', 'Jl.Merbabu no 39 Malang', '2013-12-26 04:30:14', 'Hyoyeon', 2, 'Tidak tahu', 'Menunggu Transfer', 'lunas', 870000, 0, '2013-12-19 00:00:00', '2013-12-15 22:03:10', 1),
(3, '1', 'Jl. Bataran II no.9', '2013-12-01 00:00:00', 'Seohyun', 2, 'No thing', 'Barang Di Kirim', 'lunas', 78000, 1, '2013-12-01 07:48:22', '2013-12-15 22:03:01', 1),
(4, '3', 'Jl.Manggar II no.9', '2013-12-04 00:00:00', 'Yuri', 1, 'kijhhjhgjhgjhg', 'Sedang Di Proses', 'lunas', 250000, 1, '2013-12-04 18:17:42', '2013-12-15 22:02:51', 1),
(5, '4', 'Jakarta', '2013-12-10 00:00:00', 'Sunny', 3, 'barang', 'Barang Di Kirim', 'lunas', 100000, 1, '2013-12-10 13:27:46', '2013-12-15 22:02:20', 1),
(6, '5', 'Jl.Stapak no.9 Seoul, Korea', '2013-12-14 11:20:27', 'Taeyeon', 2, 'Baru beli Software di sini :v biasanya sini yang beli CD ke situ wkwkwk', 'Barang Di Kirim', 'lunas', 92000, 1, '2013-12-14 16:14:44', '0000-00-00 00:00:00', 0),
(7, '6', 'Jl.Marung Momo no 83 , Kanada', '2013-12-15 04:19:27', 'Sooyoung', 1, 'Entahlah terserah anda', 'Di Kirim', 'lunas', 400000, 1, '2013-12-15 16:12:52', '0000-00-00 00:00:00', 0),
(8, '3', 'Jl.Manggar II no.9', '2013-12-27 00:00:00', 'Yoona', 1, 'Barang ke sekian kalinya', 'Barang Di Kirim', 'lunas', 20000, 1, '2013-12-15 20:37:58', '2013-12-24 12:50:50', 1),
(9, '3', 'Jl.Manggar II no.9', '2014-01-06 00:00:00', 'Yuri', 1, 'software accounting', 'Sedang Di Proses', 'lunas', 100000, 1, '2014-01-07 11:17:14', '0000-00-00 00:00:00', 0);

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
(1, 'Jsource (Jember Open Source)', 'Secure, Fast and Professional.', 'selamat datang di Jsource Pos App(Point Of Sales Application)', 'logo.png', 'fahmi2.gif', 0x4b7572616e672042616e79616b2079616e6720686172757320646967756e616b616e20756e74756b2070656e616e67616e616e);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data untuk tabel `so_details`
--

INSERT INTO `so_details` (`id`, `item_code`, `item_name`, `so_id`, `c_price`, `qty`, `total`) VALUES
(11, 5, 'DELL INSPIRON N4030', 8, 4500000, '2', 9000000),
(12, 11, 'Basing se', 3, 700000, '3', 2100000),
(13, 3, 'CD JKT48 Manatsu no Sounds Good', 3, 58000, '5', 290000),
(14, 6, 'Acer LED Buku Gambar A4', 8, 10000000, '9', 90000000),
(15, 5, 'DELL INSPIRON N4030', 8, 4500000, '3', 13500000),
(16, 13, 'Basing se II', 8, 4500000, '2', 9000000),
(17, 14, 'Hair Drayer', 8, 900000, '3', 2700000),
(18, 4, 'Pakeage Software Accounting', 8, 3000000, '2', 6000000),
(19, 13, 'Basing se II', 8, 4500000, '1', 4500000),
(20, 5, 'DELL INSPIRON N4030', 1, 4500000, '2', 9000000),
(21, 13, 'Basing se II', 1, 4500000, '1', 4500000),
(22, 2, 'CD & DVD AKB48 MAJISUKA GAKUEN', 1, 145000, '2', 290000),
(23, 5, 'DELL INSPIRON N4030', 7, 4500000, '1', 4500000),
(24, 8, 'Seventhsoft Resto', 7, 45000, '4', 180000),
(25, 4, 'Pakeage Software Accounting', 7, 3000000, '2', 6000000),
(26, 6, 'Acer LED Buku Gambar A4', 5, 10000000, '3', 30000000),
(28, 5, 'DELL INSPIRON N4030', 5, 4500000, '3', 13500000),
(29, 4, 'Pakeage Software Accounting', 5, 3000000, '4', 12000000),
(30, 5, 'DELL INSPIRON N4030', 5, 4500000, '3', 13500000),
(31, 7, 'Basic Accounting', 9, 2500000, '1', 2500000),
(32, 16, 'Standart Accounting', 9, 4000000, '3', 12000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(40) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `status_name`) VALUES
(1, 'Menunggu Transfer'),
(2, 'Barang Di Kirim'),
(3, 'Sedang Di Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tp_payment`
--

CREATE TABLE IF NOT EXISTS `tp_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tp_payment` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tp_payment`
--

INSERT INTO `tp_payment` (`id`, `tp_payment`) VALUES
(1, 'Credit'),
(2, 'Debit'),
(3, 'Cash'),
(4, 'COD');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `email`, `joinDate`, `level_id`, `last_login_time`) VALUES
(1, 'Muhammad amir j', 'Fahmi A.zain', 'fahmi_jsource', '222419724b47a74bc92ff13c6eaead29', 'fahmi.j@programmer.net', '2014-02-01 14:08:13', '1', '2014-02-01 21:08:13'),
(2, 'Hakam Udin', 'Al-Amin', 'admin_data', '7adc785be4a31eff6783871ff63e18f1', 'a''uadjaah@yahoo.co.id', '2014-02-01 14:06:39', '2', '2014-02-01 21:06:39'),
(3, 'Devi', 'Kristina', 'DK', '222419724b47a74bc92ff13c6eaead29', 'rizafaza@ymail.com', '2013-12-12 09:22:55', '3', '2013-12-12 16:22:55'),
(4, 'Muhammad', 'Al-Fatih Zain', 'fatih', 'f11d50d63d3891a44c332e46d6d7d561', 'rizafaza@ymail.com', '2013-12-14 23:53:17', '3', '2013-12-15 06:53:17'),
(5, 'Muhammad', 'Amien Jundi', 'jundi_ghuroba', '8983d7de9441f7d459524666bb5ab10d', 'noktahati@yahoo.com', '2013-12-11 23:18:40', '3', '2013-12-12 06:18:40'),
(8, 'Dinda', 'Kirana', 'dinda_kirana', '406c7d2372f89b940bbd8aace0396bc0', 'dinda_kirana@yahoo.com', '2013-12-16 06:25:43', '3', '2013-12-16 13:25:43'),
(10, 'Sarah', 'Shafirti', 'shafira', '2ec4b0bdf35a294f7b42496e0a19ceea', 'shafira@yahoo.co.id', '2013-12-16 05:47:26', '3', '0000-00-00 00:00:00'),
(11, 'Ahmad', 'Maulana Kadafi', 'makul', '8461ba38df1cdc5e092f1cd8c82159c2', 'makul@makul.com', '2014-02-01 14:09:29', '2', '2014-02-01 21:09:29'),
(12, 'Tiffany', 'Hwang', 'miyoungtiff', '36e9a9978686a0201f9bc99939ddbc8e', 'miyoungtiff@yahoo.co.id', '2014-01-07 03:50:43', '3', '2014-01-07 10:50:43'),
(13, 'Tryi', 'Husna', 'husna_pasaribu', '39ae638603d245e33ec73d9176ca5f3c', 'tryihusna_underwood@yahoo.co.id', '2014-01-07 04:38:07', '1', '2014-01-07 11:38:07'),
(14, 'Muhammad ', 'Amien', 'amin_amin', 'fe5a1a36edbec98268c0f27429f9b44d', 'amin@main.com', '2014-01-07 04:21:35', '3', '2014-01-07 11:21:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `webnews`
--

CREATE TABLE IF NOT EXISTS `webnews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webnews_title` varchar(160) NOT NULL,
  `webnews_content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `webnews_created_at` datetime NOT NULL,
  `webnews_updated_at` datetime NOT NULL,
  `webnews_created_by` varchar(90) NOT NULL,
  `webnews_updated_by` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `webnews`
--

INSERT INTO `webnews` (`id`, `webnews_title`, `webnews_content`, `webnews_created_at`, `webnews_updated_at`, `webnews_created_by`, `webnews_updated_by`) VALUES
(1, 'Pembukaan Outlet Baru', 0x4861646972696c61682070656d62756b61616e206f75746c6574206261727520746f6b6f206b616d692c206469204a616c616e204b616c692052756e676b75742053757261626179612e266e6273703b3c6469763e50656d62756b61616e206f75746c657420696e6920616b616e20646972616d61696b616e2064656e67616e206469736b6f6e2062657361722d6265736172616e2c206261686b616e2073616d7061692064656e67616e2037352520756e74756b206265626572617061206974656d2074657274656e74752e266e6273703b3c2f6469763e3c6469763e3c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e4a6164692074756e676775206170616c616769203f2073656765726120646174616e672064616e2062657262656c616e6a6120646920746f6b6f206b616d692e266e6273703b3c2f6469763e3c6469763e53656c61696e206974752c2073656c616d612062756c616e2070726f6d6f736920616e646120616b616e206d656e64617061746b616e206265626572617061206d65726368616e64697365206d656e6172696b2073656c616d61207065727365646961616e206d61736968206164612e204d65726368616e6469736520696e69206a75676120746572736564696120626167692070656e67756e6a756e672079616e67206d656c616b756b616e2070656d62656c69616e20736563617261206f6e6c696e652e3c2f6469763e3c6469763e3c7370616e20636c6173733d224170706c652d7461622d7370616e22207374796c653d2277686974652d73706163653a707265223e093c2f7370616e3e536568696e67676120616e64612079616e6720746964616b2064617061742062657262656c616e6a61206469206f75746c65742062617275206b616d69206d61736968206d656d696c696b69206b656d756e676b696e616e20756e74756b206d656e64617061746b616e206d65726368616e646973652074657273656275742064656e67616e2062657262656c616e6a6120736563617261206f6e6c696e652e0d0a546572696d61204b6173696820617461732070657268617469616e20616e64612e2e2e213c2f6469763e, '2013-12-13 07:12:32', '2013-12-14 08:32:26', '', 'temon'),
(2, 'Seventhsoft Hadir di Hi Tech Mall', 0x3c7370616e207374796c653d22636f6c6f723a207267622835312c2035312c203531293b20666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e4b696e6920536576656e7468736f66742048616469722064692048692054656368204d616c6c205375726162617961202e204c742e2044617361722041312d32322074656c702e20303331202d20353437303936393c2f7370616e3e3c6469763e3c7370616e207374796c653d22636f6c6f723a207267622835312c2035312c203531293b20666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e3c62723e3c2f7370616e3e3c2f6469763e3c6469763e3c70207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203070782030707820313070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e6e616d626168616e204c6973656e736920536576656e7468736f6674204163636f756e74696e67206d656e6767756e616b616e20646f6e676c652e2055534220446f6e676c6520616b616e2064696a75616c2064656e67616e2068617267612052702e203930302e3030302c2d2068617267612074657273656275742062656c756d207465726d6173756b206861726761204c6973656e73692e3c2f703e3c70207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203070782030707820313070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e436f6e746f68313a2050542e204120616b616e206d656d62656c69204c6973656e73692055534220446f6e676c65206d616b61206861727573206d656d62617961722052702e20312e3235302e3030302c2d207375646168206d656e64617061746b616e204c6973656e736920706c757320646f6e676c656e79612e3c2f703e3c70207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203070782030707820313070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e44617061746b616e206861726761207370657369616c20756e74756b2070656d62656c69616e2070726f64756b205061636b61676520536576656e7468736f667420696e636c7564652068617264776172652055534220446f6e676c652c2079616974752063756b75702064656e67616e2068617267612052702e203235302e3030302c2d207065722055534220446f6e676c652e204861726761207370657369616c20696e69206a756761206265726c616b7520756e74756b20437573746f6d657220536576656e7468736f66742079616e67206d656d62656c692070726f6772616d20736562656c756d2074616e6767616c203120466562727561726920323031322e3c2f703e3c70207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203070782030707820313070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e436f6e746f68323a2050542e2042206d656d62656c692070726f64756b20536576656e7468736f6674204163636f756e74696e67205374616e646172642064616e20696e67696e206d656e6767756e616b616e2055534220446f6e676c6520756e74756b206c6973656e73696e7961206d616b612050542e2042206861727573206d656d6261796172203a20536576656e7468736f6674204163636f756e74696e67205374616e64617264203d2052702e20342e3030302e3030302c2d2028667265652032204c6973656e73692920322055534220446f6e676c65203d203220782052702e203235302e3030302c2d203d2052702e203530302e3030302c2d20544f54414c09203d0952702e20342e3530302e3030302c2d3c2f703e3c70207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203070782030707820313070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e436f6e746f68333a2050542e2043205375646168206d656e6767756e616b616e20536576656e7468736f6674204163636f756e74696e67205374616e646172642073656a616b20417072696c203230313120696e67696e206d656e6767616e74692032206c6973656e7369206b6f6d70757465726e79612064656e67616e206c6973656e73692055534220446f6e676c6520706164612074616e6767616c2032204a616e7561726920323031322c206d616b612050542e3c2f703e3c2f6469763e, '2013-12-14 08:19:32', '2013-12-14 08:41:09', 'temon', 'temon'),
(3, 'SNSD', 0x4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c7370616e207374796c653d22666f6e742d73697a653a20313070743b223e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313070743b223e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f7370616e3e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c7370616e207374796c653d22666f6e742d73697a653a20313070743b223e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313070743b223e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f7370616e3e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c7370616e207374796c653d22666f6e742d73697a653a20313070743b223e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313070743b223e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f7370616e3e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e3c62723e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c7370616e207374796c653d22666f6e742d73697a653a20313070743b223e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313070743b223e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f7370616e3e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c6469763e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e20266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e266e6273703b4769726c732047656e65726174696f6e4769726c732047656e65726174696f6e3c2f6469763e3c2f6469763e3c2f6469763e, '2013-12-14 08:22:58', '2013-12-14 08:39:55', 'temon', 'temon'),
(4, 'Bootstrap was Launched', 0x3c73656374696f6e2069643d2270726f677265737322207374796c653d2270616464696e672d746f703a20333070783b20636f6c6f723a207267622835312c2035312c203531293b20666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e3c6832207374796c653d226d617267696e3a2031307078203070783b20666f6e742d66616d696c793a20696e68657269743b206c696e652d6865696768743a20343070783b20636f6c6f723a20696e68657269743b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b20666f6e742d73697a653a2033312e3570783b223e42726f7773657220737570706f72743c2f68323e3c70207374796c653d226d617267696e3a203070782030707820313070783b223e50726f67726573732062617273207573652043535333206772616469656e74732c207472616e736974696f6e732c20616e6420616e696d6174696f6e7320746f206163686965766520616c6c20746865697220656666656374732e20546865736520666561747572657320617265206e6f7420737570706f7274656420696e204945372d39206f72206f6c6465722076657273696f6e73206f662046697265666f782e3c2f703e3c70207374796c653d226d617267696e3a203070782030707820313070783b223e56657273696f6e73206561726c696572207468616e20496e7465726e6574204578706c6f72657220313020616e64204f7065726120313220646f206e6f7420737570706f727420616e696d6174696f6e732e3c2f703e3c2f73656374696f6e3e3c73656374696f6e2069643d226d6564696122207374796c653d2270616464696e672d746f703a20333070783b20636f6c6f723a207267622835312c2035312c203531293b20666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e3c64697620636c6173733d22706167652d68656164657222207374796c653d2270616464696e672d626f74746f6d3a203970783b206d617267696e3a20323070782030707820333070783b20626f726465722d626f74746f6d2d77696474683a203170783b20626f726465722d626f74746f6d2d7374796c653a20736f6c69643b20626f726465722d626f74746f6d2d636f6c6f723a20726762283233382c203233382c20323338293b20636f6c6f723a207267622839302c2039302c203930293b223e3c6831207374796c653d226d617267696e3a2031307078203070783b20666f6e742d66616d696c793a20696e68657269743b206c696e652d6865696768743a20343070783b20636f6c6f723a20696e68657269743b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b20666f6e742d73697a653a2033382e3570783b223e4d65646961206f626a6563743c2f68313e3c2f6469763e3c7020636c6173733d226c65616422207374796c653d226d617267696e3a203070782030707820323070783b20666f6e742d73697a653a20323170783b206c696e652d6865696768743a20333070783b20636f6c6f723a207267622839302c2039302c203930293b223e4162737472616374206f626a656374207374796c657320666f72206275696c64696e6720766172696f7573207479706573206f6620636f6d706f6e656e747320286c696b6520626c6f6720636f6d6d656e74732c205477656574732c2065746329207468617420666561747572652061206c6566742d206f722072696768742d616c69676e656420696d61676520616c6f6e6773696465207465787475616c20636f6e74656e742e3c2f703e3c6832207374796c653d226d617267696e3a2031307078203070783b20666f6e742d66616d696c793a20696e68657269743b206c696e652d6865696768743a20343070783b20636f6c6f723a20696e68657269743b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b20666f6e742d73697a653a2033312e3570783b223e44656661756c74206578616d706c653c2f68323e3c70207374796c653d226d617267696e3a203070782030707820313070783b223e5468652064656661756c74206d6564696120616c6c6f7720746f20666c6f61742061206d65646961206f626a6563742028696d616765732c20766964656f2c20617564696f2920746f20746865206c656674206f72207269676874206f66206120636f6e74656e7420626c6f636b2e3c2f703e3c64697620636c6173733d2262732d646f63732d6578616d706c6522207374796c653d22706f736974696f6e3a2072656c61746976653b206d617267696e3a2031357078203070783b2070616464696e673a2033397078203139707820313470783b20626f726465723a2031707820736f6c696420726762283232312c203232312c20323231293b20626f726465722d746f702d6c6566742d7261646975733a203470783b20626f726465722d746f702d72696768742d7261646975733a203470783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203470783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203470783b223e3c64697620636c6173733d226d6564696122207374796c653d226f766572666c6f773a2068696464656e3b207a6f6f6d3a20313b206d617267696e2d746f703a203070783b223e3c6120636c6173733d2270756c6c2d6c6566742220687265663d22687474703a2f2f6c6f63616c686f73742f74776974746572626f6f7473747261702e646f63732f646f63732f636f6d706f6e656e74732e68746d6c2322207374796c653d22636f6c6f723a2072676228302c203133362c20323034293b20746578742d6465636f726174696f6e3a206e6f6e653b20666c6f61743a206c6566743b206d617267696e2d72696768743a20313070783b223e3c696d6720636c6173733d226d656469612d6f626a6563742220646174612d7372633d22686f6c6465722e6a732f36347836342220616c743d22363478363422207372633d22646174613a696d6167652f706e673b6261736536342c6956424f5277304b47676f414141414e535568455567414141454141414142414341594141414371615848654141414344556c4551565234587532597a362f425142444870786f456366546a5642567834796a45762b2f4551647761313470544530344f424f2b393257536176716f584f7546702b75314a59336432397276666d513972375861374c387278593045414f41416c674236513478354961494b6741436741436f41436f45434f465141476755466745426745426e4d4d4166775a416761425157415147415147676345634b36444734506c3870746c735270664c78636a596172566f4f427a2b6b6e537a32644236765537384c6b6e375638533864385971416137584b38336e63796f55436a51656a326d35584e4950566d6b774746433733545a7279706a4434664351414b2b492b5a664256514c775a6c65724658553648657231656f6e72654a3548515241516e32716a305444756b486d315773304978324f3232363052726c51717059715a746f7056416f6931792b5579485939486b304f33327733466b4930366a6b4f2b37346343384468327933362f70386c6b516f76466771725671684644457a4f4e43436f42354f536b37714d6c30477732772f4c6f392f766d564d55426e4769307a69334c6f756c305370564b4a5852446d7068764630424f533034392b6e34366e57357348525641584d417569545a4f6263786e52564135494e34444a486e5864553364632b4f4c502f5636335668643568614c52564d2b306a67314d5a2f6450493958435a445573626d75786336536b47784b4843447a474a326a30636a30412f374d7774693266554f5752324b6d326278616748677438337355676663456b4e34524c78307068666a76674564692f7073416152662b6c486d714576695554576a796741433445634b4e4547364563434f6b36614a5a6e77734b67414b6741436741436d53396b3276794277564141564141464141464e46303036334e4241564141464141465149477364334a4e2f71424133696e774454554863702b31397474614141414141456c46546b5375516d434322207374796c653d226865696768743a20363470783b206d61782d77696474683a20313030253b20766572746963616c2d616c69676e3a206d6964646c653b20626f726465723a203070783b20646973706c61793a20626c6f636b3b2077696474683a20363470783b223e3c2f613e3c64697620636c6173733d226d656469612d626f647922207374796c653d226f766572666c6f773a2068696464656e3b207a6f6f6d3a20313b223e3c683420636c6173733d226d656469612d68656164696e6722207374796c653d226d617267696e3a2030707820307078203570783b20666f6e742d66616d696c793a20696e68657269743b20636f6c6f723a20696e68657269743b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b20666f6e742d73697a653a2031372e3570783b223e4d656469612068656164696e673c2f68343e437261732073697420616d6574206e696268206c696265726f2c20696e2067726176696461206e756c6c612e204e756c6c612076656c206d65747573207363656c6572697371756520616e746520736f6c6c696369747564696e20636f6d6d6f646f2e2043726173207075727573206f64696f2c20766573746962756c756d20696e2076756c7075746174652061742c2074656d7075732076697665727261207475727069732e20467573636520636f6e64696d656e74756d206e756e63206163206e6973692076756c707574617465206672696e67696c6c612e20446f6e6563206c6163696e696120636f6e6775652066656c697320696e2066617563696275732e3c2f6469763e3c2f6469763e3c64697620636c6173733d226d6564696122207374796c653d226f766572666c6f773a2068696464656e3b207a6f6f6d3a20313b206d617267696e2d746f703a20313570783b223e3c6120636c6173733d2270756c6c2d6c6566742220687265663d22687474703a2f2f6c6f63616c686f73742f74776974746572626f6f7473747261702e646f63732f646f63732f636f6d706f6e656e74732e68746d6c2322207374796c653d22636f6c6f723a2072676228302c203133362c20323034293b20746578742d6465636f726174696f6e3a206e6f6e653b20666c6f61743a206c6566743b206d617267696e2d72696768743a20313070783b223e3c696d6720636c6173733d226d656469612d6f626a6563742220646174612d7372633d22686f6c6465722e6a732f36347836342220616c743d22363478363422207372633d22646174613a696d6167652f706e673b6261736536342c6956424f5277304b47676f414141414e535568455567414141454141414142414341594141414371615848654141414344556c4551565234587532597a362f425142444870786f456366546a5642567834796a45762b2f4551647761313470544530344f424f2b393257536176716f584f7546702b75314a59336432397276666d513972375861374c387278593045414f41416c674236513478354961494b6741436741436f41436f45434f465141476755466745426745426e4d4d4166775a416761425157415147415147676345634b36444734506c3870746c735270664c78636a596172566f4f427a2b6b6e537a32644236765537384c6b6e375638533864385971416137584b38336e63796f55436a51656a326d35584e4950566d6b774746433733545a7279706a4434664351414b2b492b5a664256514c775a6c65724658553648657231656f6e72654a3548515241516e32716a305444756b486d315773304978324f3232363052726c51717059715a746f7056416f6931792b5579485939486b304f33327733466b4930366a6b4f2b37346343384468327933362f70386c6b516f76466771725671684644457a4f4e43436f42354f536b37714d6c30477732772f4c6f392f766d564d55426e4769307a69334c6f756c305370564b4a5852446d7068764630424f533034392b6e34366e57357348525641584d417569545a4f6263786e52564135494e34444a486e5864553364632b4f4c502f5636335668643568614c52564d2b306a67314d5a2f6450493958435a445573626d75786336536b47784b4843447a474a326a30636a30412f374d7774693266554f5752324b6d326278616748677438337355676663456b4e34524c78307068666a76674564692f7073416152662b6c486d714576695554576a796741433445634b4e4547364563434f6b36614a5a6e77734b67414b6741436741436d53396b3276794277564141564141464141464e46303036334e4241564141464141465149477364334a4e2f71424133696e774454554863702b31397474614141414141456c46546b5375516d434322207374796c653d226865696768743a20363470783b206d61782d77696474683a20313030253b20766572746963616c2d616c69676e3a206d6964646c653b20626f726465723a203070783b20646973706c61793a20626c6f636b3b2077696474683a20363470783b223e3c2f613e3c64697620636c6173733d226d656469612d626f647922207374796c653d226f766572666c6f773a2068696464656e3b207a6f6f6d3a20313b223e3c683420636c6173733d226d656469612d68656164696e6722207374796c653d226d617267696e3a2030707820307078203570783b20666f6e742d66616d696c793a20696e68657269743b20636f6c6f723a20696e68657269743b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b20666f6e742d73697a653a2031372e3570783b223e4d656469612068656164696e673c2f68343e437261732073697420616d6574206e696268206c696265726f2c20696e2067726176696461206e756c6c612e204e756c6c612076656c206d65747573207363656c6572697371756520616e746520736f6c6c696369747564696e20636f6d6d6f646f2e2043726173207075727573206f64696f2c20766573746962756c756d20696e2076756c7075746174652061742c2074656d7075732076697665727261207475727069732e20467573636520636f6e64696d656e74756d206e756e63206163206e6973692076756c707574617465206672696e67696c6c612e20446f6e6563206c6163696e696120636f6e6775652066656c697320696e2066617563696275732e3c64697620636c6173733d226d6564696122207374796c653d226f766572666c6f773a2068696464656e3b207a6f6f6d3a20313b206d617267696e2d746f703a20313570783b223e3c6120636c6173733d2270756c6c2d6c6566742220687265663d22687474703a2f2f6c6f63616c686f73742f74776974746572626f6f7473747261702e646f63732f646f63732f636f6d706f6e656e74732e68746d6c2322207374796c653d22636f6c6f723a2072676228302c203133362c20323034293b20746578742d6465636f726174696f6e3a206e6f6e653b20666c6f61743a206c6566743b206d617267696e2d72696768743a20313070783b223e3c696d6720636c6173733d226d656469612d6f626a6563742220646174612d7372633d22686f6c6465722e6a732f36347836342220616c743d22363478363422207372633d22646174613a696d6167652f706e673b6261736536342c6956424f5277304b47676f414141414e535568455567414141454141414142414341594141414371615848654141414344556c4551565234587532597a362f425142444870786f456366546a5642567834796a45762b2f4551647761313470544530344f424f2b393257536176716f584f7546702b75314a59336432397276666d513972375861374c387278593045414f41416c674236513478354961494b6741436741436f41436f45434f465141476755466745426745426e4d4d4166775a416761425157415147415147676345634b36444734506c3870746c735270664c78636a596172566f4f427a2b6b6e537a32644236765537384c6b6e375638533864385971416137584b38336e63796f55436a51656a326d35584e4950566d6b774746433733545a7279706a4434664351414b2b492b5a664256514c775a6c65724658553648657231656f6e72654a3548515241516e32716a305444756b486d315773304978324f3232363052726c51717059715a746f7056416f6931792b5579485939486b304f33327733466b4930366a6b4f2b37346343384468327933362f70386c6b516f76466771725671684644457a4f4e43436f42354f536b37714d6c30477732772f4c6f392f766d564d55426e4769307a69334c6f756c305370564b4a5852446d7068764630424f533034392b6e34366e57357348525641584d417569545a4f6263786e52564135494e34444a486e5864553364632b4f4c502f5636335668643568614c52564d2b306a67314d5a2f6450493958435a445573626d75786336536b47784b4843447a474a326a30636a30412f374d7774693266554f5752324b6d326278616748677438337355676663456b4e34524c78307068666a76674564692f7073416152662b6c486d714576695554576a796741433445634b4e4547364563434f6b36614a5a6e77734b67414b6741436741436d53396b3276794277564141564141464141464e46303036334e4241564141464141465149477364334a4e2f71424133696e774454554863702b31397474614141414141456c46546b5375516d434322207374796c653d226865696768743a20363470783b206d61782d77696474683a20313030253b20766572746963616c2d616c69676e3a206d6964646c653b20626f726465723a203070783b20646973706c61793a20626c6f636b3b2077696474683a20363470783b223e3c2f613e3c64697620636c6173733d226d656469612d626f647922207374796c653d226f766572666c6f773a2068696464656e3b207a6f6f6d3a20313b223e3c683420636c6173733d226d656469612d68656164696e6722207374796c653d226d617267696e3a2030707820307078203570783b20666f6e742d66616d696c793a20696e68657269743b20636f6c6f723a20696e68657269743b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b20666f6e742d73697a653a2031372e3570783b223e4d656469612068656164696e673c2f68343e437261732073697420616d6574206e696268206c696265726f2c20696e2067726176696461206e756c6c612e204e756c6c612076656c206d65747573207363656c6572697371756520616e746520736f6c6c696369747564696e20636f6d6d6f646f2e2043726173207075727573206f64696f2c20766573746962756c756d20696e2076756c7075746174652061742c2074656d7075732076697665727261207475727069732e20467573636520636f6e64696d656e74756d206e756e63206163206e6973692076756c707574617465206672696e67696c6c612e20446f6e6563206c6163696e696120636f6e6775652066656c697320696e2066617563696275732e3c2f6469763e3c2f6469763e3c2f6469763e3c2f6469763e3c2f6469763e3c2f73656374696f6e3e, '2013-12-14 08:44:24', '0000-00-00 00:00:00', 'temon', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `webseo`
--

CREATE TABLE IF NOT EXISTS `webseo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_of_website` varchar(100) NOT NULL,
  `motto` varchar(190) NOT NULL,
  `keywords` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `author` varchar(100) NOT NULL,
  `favicon` varchar(160) NOT NULL,
  `website_desc` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `language` varchar(5) NOT NULL,
  `home` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `about` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contact` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `webseo`
--

INSERT INTO `webseo` (`id`, `name_of_website`, `motto`, `keywords`, `author`, `favicon`, `website_desc`, `language`, `home`, `about`, `contact`) VALUES
(1, 'JSource (Jember Open Source)', 'Secure, Fast and Professional.', 0x736f667477617265206163636f756e74696e672c20736f66747761726520616b756e74616e73692c20776562736974652c20746f6b6f206f6e6c696e65, 'fahmi.j@programmer.net', 'fahmi2.gif', 0x776562736974652079616e672062657267656c75742064616c616d20626964616e67204954206174617520536f66747761726520486f757365, 'id', 0x3c68333e4a536f7572636520284a656d626572204f70656e20536f75726365293c2f68333e3c70207374796c653d226d617267696e3a203070782030707820313070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313870783b206c696e652d6865696768743a20333070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e53656c616d617420646174616e67206469204a536f75726365284a656d626572204f70656e20536f75726365292c207061646120736974757320696e6920616e6461206461706174206d656c616b756b616e2070656d62656c69616e20536f667477617265204163636f756e74696e672079616e6720616e6461207065726c756b616e20736563617261206f6e6c696e652e204a616e67616e20726167752d7261677520756e74756b2062657262656c616e6a6120646920746f6b6f206f6e6c696e6520696e69206b6172656e61206b616d69206d65727570616b616e20746f6b6f206f6e6c696e652079616e6720746572706572636179612064656e67616e2068617267612070726f64756b2d70726f64756b2079616e67206265727361696e672e204a6164692074756e676775206170616c616769203f3f20536567657261206a656c616a616869207369747573206b616d692064616e2062657262656c616e6a61206c61682064692073696e692e2053616c616d20536576656e7468736f6674204b6f6d707574696e646f3c2f703e3c70207374796c653d226d617267696e3a203070782030707820313070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313870783b206c696e652d6865696768743a20333070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d3c2f703e3c70207374796c653d226d617267696e3a203070782030707820313070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b20666f6e742d73697a653a20313870783b206c696e652d6865696768743a20333070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e536576656e7468736f6674206d656d626572696b616e266e6273703b3c2f7370616e3e3c7370616e20636c6173733d2262616467652062616467652d696e666f22207374796c653d226d617267696e3a203070783b2070616464696e673a20327078203970783b20626f726465723a203070783b20666f6e742d73697a653a2031312e38343470783b20666f6e742d7765696768743a20626f6c643b206c696e652d6865696768743a20313470783b20766572746963616c2d616c69676e3a20626173656c696e653b20646973706c61793a20696e6c696e652d626c6f636b3b20636f6c6f723a20726762283235352c203235352c20323535293b20746578742d736861646f773a207267626128302c20302c20302c20302e3234373035392920307078202d317078203070783b2077686974652d73706163653a206e6f777261703b206261636b67726f756e642d636f6c6f723a207267622835382c203133352c20313733293b20626f726465722d746f702d6c6566742d7261646975733a203970783b20626f726465722d746f702d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203970783b223e373c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e266e6273703b70656e61776172616e206d656e6172696b207961697475203a3c2f7370616e3e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c7370616e20636c6173733d2262616467652062616467652d696e666f22207374796c653d226d617267696e3a203070783b2070616464696e673a20327078203970783b20626f726465723a203070783b20666f6e742d73697a653a2031312e38343470783b20666f6e742d7765696768743a20626f6c643b206c696e652d6865696768743a20313470783b20766572746963616c2d616c69676e3a20626173656c696e653b20646973706c61793a20696e6c696e652d626c6f636b3b20636f6c6f723a20726762283235352c203235352c20323535293b20746578742d736861646f773a207267626128302c20302c20302c20302e3234373035392920307078202d317078203070783b2077686974652d73706163653a206e6f777261703b206261636b67726f756e642d636f6c6f723a207267622835382c203133352c20313733293b20626f726465722d746f702d6c6566742d7261646975733a203970783b20626f726465722d746f702d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203970783b223e312e3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e266e6273703b536576656e7468736f6674204163636f756e74696e67206d65727570616b616e20736f66747761726520616b756e74616e73692079616e67206d656d626572696b616e206b656d75646168616e64616c616d2070656d62756174616e2073656d7561266e6273703b3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e6c61706f72616e20616b756e74616e73692064616e20646964756b756e672064656e67616e206164616e796120737570706f72742073797374656d2079616e67206261696b2e3c2f7370616e3e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c7370616e20636c6173733d2262616467652062616467652d696e666f22207374796c653d226d617267696e3a203070783b2070616464696e673a20327078203970783b20626f726465723a203070783b20666f6e742d73697a653a2031312e38343470783b20666f6e742d7765696768743a20626f6c643b206c696e652d6865696768743a20313470783b20766572746963616c2d616c69676e3a20626173656c696e653b20646973706c61793a20696e6c696e652d626c6f636b3b20636f6c6f723a20726762283235352c203235352c20323535293b20746578742d736861646f773a207267626128302c20302c20302c20302e3234373035392920307078202d317078203070783b2077686974652d73706163653a206e6f777261703b206261636b67726f756e642d636f6c6f723a207267622835382c203133352c20313733293b20626f726465722d746f702d6c6566742d7261646975733a203970783b20626f726465722d746f702d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203970783b223e322e3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e266e6273703b46697475722d66697475722064692064616c616d2070726f6772616d204163636f756e74696e67206c61696e6e79612079616e672073616e676174206d7564616820756e74756b20646970656c616a617269266e6273703b64616e206469706168616d6920756e74756b2073656d75612075736572202e3c2f7370616e3e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c7370616e20636c6173733d2262616467652062616467652d696e666f22207374796c653d226d617267696e3a203070783b2070616464696e673a20327078203970783b20626f726465723a203070783b20666f6e742d73697a653a2031312e38343470783b20666f6e742d7765696768743a20626f6c643b206c696e652d6865696768743a20313470783b20766572746963616c2d616c69676e3a20626173656c696e653b20646973706c61793a20696e6c696e652d626c6f636b3b20636f6c6f723a20726762283235352c203235352c20323535293b20746578742d736861646f773a207267626128302c20302c20302c20302e3234373035392920307078202d317078203070783b2077686974652d73706163653a206e6f777261703b206261636b67726f756e642d636f6c6f723a207267622835382c203133352c20313733293b20626f726465722d746f702d6c6566742d7261646975733a203970783b20626f726465722d746f702d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203970783b223e332e3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e266e6273703b50726f6772616d20416b756e74616e736920536576656e7468736f6674207375646168206d656e67616c616d69206c656269682064617269203720746168756e2070726f73657320756a6920636f6261202e3c2f7370616e3e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c7370616e20636c6173733d2262616467652062616467652d696e666f22207374796c653d226d617267696e3a203070783b2070616464696e673a20327078203970783b20626f726465723a203070783b20666f6e742d73697a653a2031312e38343470783b20666f6e742d7765696768743a20626f6c643b206c696e652d6865696768743a20313470783b20766572746963616c2d616c69676e3a20626173656c696e653b20646973706c61793a20696e6c696e652d626c6f636b3b20636f6c6f723a20726762283235352c203235352c20323535293b20746578742d736861646f773a207267626128302c20302c20302c20302e3234373035392920307078202d317078203070783b2077686974652d73706163653a206e6f777261703b206261636b67726f756e642d636f6c6f723a207267622835382c203133352c20313733293b20626f726465722d746f702d6c6566742d7261646975733a203970783b20626f726465722d746f702d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203970783b223e342e3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e266e6273703b536576656e7468736f6674204163636f756e74696e6720646170617420646967756e616b616e20756e74756b206265726d6163616d206a656e6973207065727573616861616e2e3c2f7370616e3e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c7370616e20636c6173733d2262616467652062616467652d696e666f22207374796c653d226d617267696e3a203070783b2070616464696e673a20327078203970783b20626f726465723a203070783b20666f6e742d73697a653a2031312e38343470783b20666f6e742d7765696768743a20626f6c643b206c696e652d6865696768743a20313470783b20766572746963616c2d616c69676e3a20626173656c696e653b20646973706c61793a20696e6c696e652d626c6f636b3b20636f6c6f723a20726762283235352c203235352c20323535293b20746578742d736861646f773a207267626128302c20302c20302c20302e3234373035392920307078202d317078203070783b2077686974652d73706163653a206e6f777261703b206261636b67726f756e642d636f6c6f723a207267622835382c203133352c20313733293b20626f726465722d746f702d6c6566742d7261646975733a203970783b20626f726465722d746f702d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203970783b223e352e3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e266e6273703b536f66747761726520616b756e74616e736920696e69206a756761206d656c6179616e692070656e616d626168616e207669747572206163636f756e74696e67206c61696e6e79612e3c2f7370616e3e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c7370616e20636c6173733d2262616467652062616467652d696e666f22207374796c653d226d617267696e3a203070783b2070616464696e673a20327078203970783b20626f726465723a203070783b20666f6e742d73697a653a2031312e38343470783b20666f6e742d7765696768743a20626f6c643b206c696e652d6865696768743a20313470783b20766572746963616c2d616c69676e3a20626173656c696e653b20646973706c61793a20696e6c696e652d626c6f636b3b20636f6c6f723a20726762283235352c203235352c20323535293b20746578742d736861646f773a207267626128302c20302c20302c20302e3234373035392920307078202d317078203070783b2077686974652d73706163653a206e6f777261703b206261636b67726f756e642d636f6c6f723a207267622835382c203133352c20313733293b20626f726465722d746f702d6c6566742d7261646975733a203970783b20626f726465722d746f702d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203970783b223e362e3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e266e6273703b536576656e7468736f6674206163636f756e74696e67206d65727570616b616e2073616c616820736174752061706c696b6173692f70726f6772616d206163636f756e74696e672079616e67266e6273703b6461706174206d656d756461686b616e2070726f736573266e6273703b3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e616b756e74616e7369207365686172692d686172692e3c2f7370616e3e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c6272207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b223e3c7370616e20636c6173733d2262616467652062616467652d696e666f22207374796c653d226d617267696e3a203070783b2070616464696e673a20327078203970783b20626f726465723a203070783b20666f6e742d73697a653a2031312e38343470783b20666f6e742d7765696768743a20626f6c643b206c696e652d6865696768743a20313470783b20766572746963616c2d616c69676e3a20626173656c696e653b20646973706c61793a20696e6c696e652d626c6f636b3b20636f6c6f723a20726762283235352c203235352c20323535293b20746578742d736861646f773a207267626128302c20302c20302c20302e3234373035392920307078202d317078203070783b2077686974652d73706163653a206e6f777261703b206261636b67726f756e642d636f6c6f723a207267622835382c203133352c20313733293b20626f726465722d746f702d6c6566742d7261646975733a203970783b20626f726465722d746f702d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d72696768742d7261646975733a203970783b20626f726465722d626f74746f6d2d6c6566742d7261646975733a203970783b223e372e3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e266e6273703b50656d62756174616e206c61706f72616e20616b756e74616e736920736563617261206d616e75616c2079616e67206d656d616b616e2077616b747520626562657261706120686172692c266e6273703b646170617420646973656c657361696b616e2064616c616d266e6273703b3c2f7370616e3e3c7370616e207374796c653d22666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e686974756e67616e20646574696b2064656e67616e206d656e6767756e616b616e2070726f6772616d20616b756e74616e736920696e692e3c2f7370616e3e3c2f703e, 0x3c683320636c6173733d227374796c653122207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20323070783b206c696e652d6865696768743a20343070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622839302c203135392c20323336293b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e436f6d70616e792050726f66696c65204a736f757263653c2f68333e3c683320636c6173733d227374796c653122207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20323070783b206c696e652d6865696768743a20343070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622839302c203135392c20323336293b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e3c70207374796c653d226d617267696e3a202d3130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b20666f6e742d7765696768743a206e6f726d616c3b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e417072696c20323030342c206d65727570616b616e206177616c206d756c6120626572646972696e796120736f66747761726520686f75736520696e692e206265726d756c6120646172692068616e796120646172692068616e79612073617475206b6c69656e2c207365627561682075736168612070756a61736572612079616e67206d656d706572636179616b616e2070656d62756174616e2061706c696b61736920504f5328706f696e74206f662073616c657329207061646120736576656e7468736f6674206b6f6d707574696e646f202c207065727573616861616e20696e69206d656d756c6169206b69707261686e79612064692064756e6961206163636f756e74696e6720736f6674776172652e3c6272207374796c653d22666f6e742d66616d696c793a2063616c696272693b223e73656972696e672064656e67616e206d756c61692062657274616d6261686e7961206b6c69656e2d6b6c69656e2064617269206265726261676169206a656e697320626964616e672075736168612079616e67206d656d706572636179616b616e2070656d62756174616e2061706c696b61736920706164612037736f66742c2073656d616b696e206265726b656d62616e672064616e20626572766172696173692070756c612061706c696b6173692079616e67206469627561742e20736574656c6168206d656e6765726a616b616e2070726f6a6563742d70726f6a656374206163636f756e74696e67206261696b20736b616c61206b6563696c2073616d7061692062657361722c2079616e67206d656c616d70617569207461686170616e207375727665692c616e616c697361202c2064657369676e2c20646576656c6f702c2074657374696e672064616e20696d706c656d656e746173692064616e2070616461207065726a616c616e6e796120746572696e73706972617369206f6c6568206d6963726f736f667420736562616761692070726f64756b206d617373616c2079616e67206265726b75616c697461732c206d616b61206b616d69206d656d62656e74756b2074696d20726973657420756e74756b206d656e63697074616b616e20736f667477617265206163636f756e74696e672079616e67206265726b75616c697461732064616e20646170617420646967756e616b616e20736563617261206d617373616c206a7567612e206d656c616c7569206265726167616d207065726d696e7461616e207573657220646974616d6261682064656e67616e2072697365742079616e672070656e756820696e6f766173692c2074657263697074616c6168207365627561682070726f6772616d2061706c696b617369206163636f756e74696e67207374616e64617264206e616d756e206b6f6d706c69742079616e6720646170617420646970616b6169206f6c65682073656d7561206a656e697320757361686120736b616c61206b6563696c2068696e6767612062657361722e20646172692073696e69206c616869726c616820736576656e7468736f6674206163636f756e74696e672e3c6272207374796c653d22666f6e742d66616d696c793a2063616c696272693b223e556e74756b206d656e67686173696c6b616e2073756174752070726f64756b2079616e67206265726b75616c697461732c2074657374696e67206164616c61682074616861702079616e67206861727573206469206c616c75692c2070726f7365732074657374696e67202c206d756c6169206461726920696e74656772697461732073746f6b2c74616d70696c616e2c2068696e676761206269736e69732070726f7365732c2073656d75616e7961206d656d65726c756b616e2077616b74752079616e6720746964616b2073696e676b61742e2044616e20736576656e7468736f6674202c206d656c616c7569206c656269682064617269203520746168756e2070656e67616c616d616e2064616c616d206d656e6765726a616b616e2070726f6772616d2061706c696b617369206163636f756e74696e672064617269206265726261676169206a656e697320626964616e672075736168612064656e67616e206b656275747568616e2079616e6720626572626564612070756c612c206c616869726c61682070726f6772616d2061706c696b617369206163636f756e74696e672079616e67206265726b75616c697461732064616e20746572696e746567726173692e3c2f703e3c2f68333e3c683320636c6173733d227374796c653122207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20323070783b206c696e652d6865696768743a20343070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622839302c203135392c20323336293b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e566973693c2f68333e3c683320636c6173733d227374796c653122207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20323070783b206c696e652d6865696768743a20343070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622839302c203135392c20323336293b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e3c70207374796c653d226d617267696e3a202d3130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b20666f6e742d7765696768743a206e6f726d616c3b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e4d656e6a6164692070726f6772616d2061706c696b617369204163636f756e74696e672079616e672070616c696e672062616e79616b20646970616b6169206f6c6568207365676d656e2075736168613c2f703e3c2f68333e3c683320636c6173733d227374796c653122207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20323070783b206c696e652d6865696768743a20343070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622839302c203135392c20323336293b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e4d6973693c2f68333e3c683320636c6173733d227374796c653122207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20323070783b206c696e652d6865696768743a20343070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622839302c203135392c20323336293b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e3c70207374796c653d226d617267696e3a202d3130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b20666f6e742d7765696768743a206e6f726d616c3b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e3c2f703e3c6f6c207374796c653d226d617267696e3a2030707820307078203130707820323570783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b20666f6e742d7765696768743a206e6f726d616c3b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b223e3c6c69207374796c653d22666f6e742d66616d696c793a20696e68657269743b206d617267696e3a203070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20696e68657269743b20666f6e742d7374796c653a20696e68657269743b20666f6e742d76617269616e743a20696e68657269743b20666f6e742d7765696768743a20696e68657269743b20766572746963616c2d616c69676e3a20626173656c696e653b223e4d656d62616e7475207065727573616861616e206b656c6173206b6563696c2064616e206d656e656e6761682064616c616d2068616c2073797374656d2064616e206163636f756e74696e673c2f6c693e3c6c69207374796c653d22666f6e742d66616d696c793a20696e68657269743b206d617267696e3a203070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20696e68657269743b20666f6e742d7374796c653a20696e68657269743b20666f6e742d76617269616e743a20696e68657269743b20666f6e742d7765696768743a20696e68657269743b20766572746963616c2d616c69676e3a20626173656c696e653b223e4d656d7065726d75646168206f7065726173696f6e616c207065727573616861616e20636c69656e74206461726920746964616b2074657261747572206d656e6a616469206c6562696820746572617475723c2f6c693e3c6c69207374796c653d22666f6e742d66616d696c793a20696e68657269743b206d617267696e3a203070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20696e68657269743b20666f6e742d7374796c653a20696e68657269743b20666f6e742d76617269616e743a20696e68657269743b20666f6e742d7765696768743a20696e68657269743b20766572746963616c2d616c69676e3a20626173656c696e653b223e4d656e6a6164696b616e2070656e6775736168612079616e6720746164696e79612073656c6620656d706c6f796565206d656e6a61646920427573696e657373204f776e65723c2f6c693e3c6c69207374796c653d22666f6e742d66616d696c793a20696e68657269743b206d617267696e3a203070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20696e68657269743b20666f6e742d7374796c653a20696e68657269743b20666f6e742d76617269616e743a20696e68657269743b20666f6e742d7765696768743a20696e68657269743b20766572746963616c2d616c69676e3a20626173656c696e653b223e4d656d626572696b616e20736f6c757369206167617220736574696170207065727573616861616e20636c69656e74206d656e6a616469206566697369656e3c2f6c693e3c2f6f6c3e3c2f68333e, 0x3c6834207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a2031372e3570783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e416c616d61743a3c2f68343e3c6834207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a2031372e3570783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e4a536f75726365284a656d626572204f70656e20536f75726365293c2f68343e3c70207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a2030707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e52756b6f2052756e676b7574204d616b6d75722043202d2033303c6272207374796c653d22666f6e742d66616d696c793a2063616c696272693b223e4a6c2e2052617961204b616c692052756e676b75742032373c6272207374796c653d22666f6e742d66616d696c793a2063616c696272693b223e452d6d61696c203a20696e666f40736576656e7468736f66742e6e65743c6272207374796c653d22666f6e742d66616d696c793a2063616c696272693b223e54656c6570686f6e65203a202b36322033312038373820313930393c2f703e3c6834207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a2031372e3570783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e4a536f75726365284a656d626572204f70656e20536f757263653c2f68343e3c70207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a2030707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e48692d54656368204d616c6c204c742e2044617361722041312032323c6272207374796c653d22666f6e742d66616d696c793a2063616c696272693b223e5375726162617961202d204a6177612054696d75723c6272207374796c653d22666f6e742d66616d696c793a2063616c696272693b223e496e646f6e657369613c6272207374796c653d22666f6e742d66616d696c793a2063616c696272693b223e54656c6570686f6e65203a202b363220333120353437303936393c2f703e3c6834207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a203130707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a2031372e3570783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b20746578742d72656e646572696e673a206f7074696d697a656c65676962696c6974793b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e4b6875737573204a656d6265722064616e2073656b697461726e79612c2070726573656e74617369202f2064656d6f204752415449532064692074656d70617420414e44412e3c6272207374796c653d22666f6e742d66616d696c793a2063616c696272693b223e44696c756172204a656d626572207472616e73706f72742026616d703b20416b6f6d6f6461736920646974616e6767756e672070656c616e6767616e2e3c2f68343e3c70207374796c653d22666f6e742d66616d696c793a202748656c766574696361204e657565272c2048656c7665746963612c20417269616c2c2073616e732d73657269663b206d617267696e3a2030707820307078203130707820323070783b2070616464696e673a203070783b20626f726465723a203070783b20666f6e742d73697a653a20313470783b206c696e652d6865696768743a20323070783b20766572746963616c2d616c69676e3a20626173656c696e653b20636f6c6f723a207267622835312c2035312c203531293b206261636b67726f756e642d636f6c6f723a20726762283235352c203235352c20323535293b223e4b6972696d20652d6d61696c206b6520696e666f40736576656e7468736f66742e6e65743c6272207374796c653d22666f6e742d66616d696c793a2063616c696272693b223e44616c616d206d616b73696d616c203438206a616d2c20616e646120616b616e2064617061742062616c6173616e2e3c2f703e);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
