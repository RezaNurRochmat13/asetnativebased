-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2015 at 02:21 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventarisz`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(20) NOT NULL auto_increment,
  `id_aset` varchar(10) NOT NULL,
  `id_kategori` int(2) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `detil_barang` varchar(1000) NOT NULL,
  `tanggal_pengadaan` date NOT NULL,
  `harga_perolehan` bigint(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tanggal_status` date NOT NULL,
  `p_i_c` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_barang`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=608 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_aset`, `id_kategori`, `nama_barang`, `detil_barang`, `tanggal_pengadaan`, `harga_perolehan`, `status`, `tanggal_status`, `p_i_c`) VALUES
(1, 'K2013001', 5, 'Toyota Innova', '', '2013-03-04', 220260000, 'Baik', '2013-03-04', ''),
(332, 'S2008001', 2, 'ADN 4 Digit', '', '2008-02-03', 49479167, '', '0000-00-00', ''),
(333, 'S2008002', 2, 'Aplikasi Universal Messenger', '', '2008-04-02', 49479167, '', '0000-00-00', ''),
(334, 'S2008003', 2, 'Aplikasi SMS Server ', '', '2008-04-10', 39583333, '', '0000-00-00', ''),
(335, 'S2013004', 2, 'Zahir Accounting', '', '2013-04-10', 6039000, '', '0000-00-00', ''),
(337, 'B2012001', 4, 'Renovasi kantor AINO', '', '2012-11-06', 29066750, '', '0000-00-00', ''),
(338, 'B2012002', 4, 'Penyelesaian termin 1 dan II renovasi AINO', '', '2012-12-26', 27439012, '', '0000-00-00', ''),
(339, 'B2013003', 4, 'Pekerjaan tambahan tahap 1', '', '2013-01-22', 39583800, '', '0000-00-00', ''),
(340, 'B2013004', 4, 'Renovasi Office tahap 2', '', '2013-03-19', 6974208, '', '0000-00-00', ''),
(341, 'PK2006001', 3, 'Meja Bundar', '', '2006-03-01', 400000, '', '2006-03-01', ''),
(342, 'PK2006002', 3, 'Meja Besar Pelatihan GECC', '', '2006-03-01', 2400000, '', '2006-03-01', ''),
(343, 'PK2006003', 3, 'HP Tester Ericcson T20s (GSM)', '', '2006-03-01', 150000, '', '2006-03-01', ''),
(344, 'PK2006004', 3, 'Kursi Sofa', '', '2006-03-01', 1500000, '', '2006-03-01', ''),
(345, 'PK2006005', 3, 'Telepon Kabel', '', '2006-03-01', 120000, '', '2006-03-01', 'PIM'),
(346, 'PK2006006', 3, 'Vertical Blind', '', '2006-04-01', 1725000, 'Cukup Baik', '2006-04-01', 'Meeting Room'),
(347, 'PK2006007', 3, 'Meja Pelatihan', '', '2006-04-01', 2120000, '', '2006-04-01', ''),
(348, 'PK2006008', 3, 'Papan Tulis', '', '2006-04-01', 264000, 'Cukup Baik', '2006-04-01', 'Meeting Room'),
(349, 'PK2006009', 3, 'Karpet', '', '2006-04-01', 1400000, '', '2006-04-01', ''),
(350, 'PK2006010', 3, 'Telepon Kabel', '', '2006-04-01', 342000, '', '2006-04-01', 'Finance'),
(351, 'PK2006011', 3, 'SOFA', '', '2006-05-01', 3100000, '', '2006-05-01', ''),
(352, 'PK2006012', 3, 'Almari', '', '2006-08-01', 860000, '', '2006-08-01', ''),
(353, 'PK2006013', 3, 'Meja', '', '2006-08-01', 400000, '', '2006-08-01', ''),
(354, 'PK2007014', 3, 'Vertical Blind 2', '', '2007-07-01', 1280000, 'Cukup Baik', '2007-07-01', 'Meeting Room'),
(355, 'PK2007015', 3, 'Karpet 2', '', '2007-07-01', 218100, '', '2007-07-01', ''),
(356, 'PK2007016', 3, 'Kamera Digital Canon Powershoot G2', '', '2007-10-01', 1430000, '', '2007-10-01', ''),
(357, 'PK2006017', 3, 'Dispenser 1', 'Miyako, WD-19 EX', '2006-11-01', 250000, 'Baik', '2006-11-01', 'Pantry'),
(358, 'PK2008018', 3, 'Rak sepatu AINO', '', '2008-12-01', 749500, '', '2008-12-01', ''),
(359, 'PK2012019', 3, 'Dispenser 2', 'Miyako, WD-19 EX', '2012-05-07', 156500, 'Baik', '2012-05-07', 'Pantry'),
(360, 'PK2012020', 3, 'Telepon Digital Cordless Phone', 'Panasonic, KX-TG2511CXJ, 2BBQB010276', '2012-05-09', 450000, 'Baik', '2012-05-09', 'Ruang Direksi'),
(361, 'PK2012021', 3, 'AC 1', 'enfio 1pk', '2012-11-06', 3600000, 'Baik', '2012-11-06', 'Kantor Lama AINO (Dipakai Gamatechno)'),
(362, 'PK2012022', 3, 'AC 2', 'enfio 1pk', '2012-11-06', 3600000, 'Baik', '2012-11-06', 'Kantor Lama AINO (Dipakai Gamatechno)'),
(363, 'PK2012023', 3, 'AC 3', 'enfio 1pk', '2012-12-06', 3600000, 'Baik', '2012-12-06', 'Kantor Lama AINO (Dipakai Gamatechno)'),
(364, 'PK2012024', 3, 'AC 4', 'enfio 1pk', '2012-12-06', 3600000, 'Baik', '2012-12-06', 'Kantor Lama AINO (Dipakai Gamatechno)'),
(365, 'PK2012025', 3, 'Telepon Kabel', 'Panasonic, KX-TS505MXW, Seri 2GCKG842968', '2012-12-12', 0, 'Baik', '2012-12-12', 'HRGA'),
(366, 'PK2012026', 3, 'Telepon Kabel', 'Panasonic, KX-TS505MXW, Seri 2GCKG842968', '2012-12-12', 0, 'Baik', '2012-12-12', 'BD'),
(367, 'PK2013027', 3, 'Kursi manager dan koordinator HRGA', 'Informa Merah', '2013-01-29', 999000, 'Baik', '2013-01-29', 'Tri Apriyanti'),
(368, 'PK2013028', 3, 'Kursi manager dan koordinator Finance', 'Informa Merah', '2013-01-29', 999000, 'Baik', '2013-01-29', 'Adhika Riowibowo'),
(369, 'PK2013029', 3, 'Kursi manager dan koordinator PROS', 'Informa Merah', '2013-01-29', 999000, 'Baik', '2013-01-29', 'Hari Wahyu Wibowo'),
(370, 'PK2013030', 3, 'Kursi manager dan koordinator BD', 'Informa Merah', '2013-01-29', 999000, 'Baik', '2013-01-29', 'Yuanda Bhima Fesida'),
(371, 'PK2013031', 3, 'Kursi karyawan 1', 'Hitam', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Risna'),
(372, 'PK2013032', 3, 'Kursi karyawan 2', 'Hitam', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Nelly'),
(373, 'PK2013033', 3, 'Kursi karyawan 3', 'Hitam', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Fahmi'),
(374, 'PK2013034', 3, 'Kursi karyawan 4', 'Hitam', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Shofi'),
(375, 'PK2013035', 3, 'Kursi karyawan 5', 'Hitam', '2013-01-29', 499000, 'Rusak', '2013-01-29', 'Firman'),
(376, 'PK2013036', 3, 'Kursi karyawan 6', 'Hitam', '2013-01-29', 499000, 'Rusak', '2013-01-29', 'PIM'),
(377, 'PK2013037', 3, 'Kursi karyawan 7', 'Hitam', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Fila '),
(378, 'PK2013038', 3, 'Kursi karyawan 8', 'Informa Merah', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Ahmad'),
(379, 'PK2013039', 3, 'Kursi karyawan 9', 'Informa Merah', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Fendi'),
(380, 'PK2013040', 3, 'Kursi karyawan 10', 'Informa Merah', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Hanum'),
(381, 'PK2013041', 3, 'Kursi karyawan 11', 'Informa Merah', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Devy'),
(382, 'PK2013042', 3, 'Kursi karyawan 12', 'Informa Merah', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Rochman'),
(383, 'PK2013043', 3, 'Kursi karyawan 13', 'Informa Merah', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Abi'),
(384, 'PK2013044', 3, 'Kursi karyawan 14', 'Informa Merah', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Luisa'),
(385, 'PK2013045', 3, 'Kursi karyawan 15', 'Informa Merah', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Bening'),
(386, 'PK2013046', 3, 'Kursi karyawan 16', 'Hitam', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Ruang Meeting Kecil'),
(387, 'PK2013047', 3, 'Kursi karyawan 17', 'Hitam', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Ruang Meeting Kecil'),
(388, 'PK2014048', 3, 'Kursi karyawan 18', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-10', 499000, 'Baik', '2014-07-10', 'Hari Muryanto'),
(389, 'PK2013049', 3, 'Meja manager dan koordinator BD', 'Cokelat', '2013-01-29', 999000, 'Baik', '2013-01-29', 'Yuanda Bhima Fesida'),
(390, 'PK2013050', 3, 'Meja manager dan koordinator PROS', 'Cokelat', '2013-01-29', 999000, 'Baik', '2013-01-29', 'Hari Wahyu Wibowo'),
(391, 'PK2013051', 3, 'Meja manager dan koordinator HRGA', 'Cokelat', '2013-01-29', 999000, 'Baik', '2013-01-29', 'Tri Apriyanti'),
(392, 'PK2013052', 3, 'Meja manager dan koordinator Finance', 'Cokelat', '2013-01-29', 999000, 'Baik', '2013-01-29', 'Adhika Riowibowo'),
(393, 'PK2013053', 3, 'Meja karyawan 1', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Melly'),
(394, 'PK2013054', 3, 'Meja karyawan 2', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Fila '),
(395, 'PK2013055', 3, 'Meja karyawan 3', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Hendra'),
(396, 'PK2013056', 3, 'Meja karyawan 4', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Agus'),
(397, 'PK2013057', 3, 'Meja karyawan 5', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Cahyo'),
(398, 'PK2013058', 3, 'Meja karyawan 6', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Joko'),
(399, 'PK2013059', 3, 'Meja karyawan 7', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Fajar'),
(400, 'PK2013060', 3, 'Meja karyawan 8', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Arif Pras'),
(401, 'PK2013061', 3, 'Meja karyawan 9', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Sidiq'),
(402, 'PK2013062', 3, 'Meja karyawan 10', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Ajeng'),
(403, 'PK2013063', 3, 'Meja karyawan 11', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Luisa'),
(404, 'PK2013064', 3, 'Meja karyawan 12', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Suci'),
(405, 'PK2013065', 3, 'Meja karyawan 13', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Bening'),
(406, 'PK2013066', 3, 'Meja karyawan 14', 'Putih', '2013-01-29', 449000, 'Baik', '2013-01-29', 'Dian'),
(407, 'PK2013067', 3, 'Meja karyawan 15', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Hanum'),
(408, 'PK2013068', 3, 'Meja karyawan 16', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Devy'),
(409, 'PK2013069', 3, 'Meja karyawan 17', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Tika'),
(410, 'PK2013070', 3, 'Meja karyawan 18', 'Putih', '2013-01-29', 449000, 'Baik', '2013-01-29', 'Keke'),
(411, 'PK2013071', 3, 'Meja karyawan 19', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Mara'),
(412, 'PK2013072', 3, 'Meja karyawan 20', 'Putih', '2013-01-29', 499000, 'Baik', '2013-01-29', 'Risna'),
(413, 'PK2013073', 3, 'Meja karyawan 21', 'Putih', '2013-01-29', 449000, 'Baik', '2013-01-29', 'BD'),
(414, 'PK2013074', 3, 'Meja karyawan 22', 'Putih', '2013-01-29', 449000, 'Baik', '2013-01-29', 'BD'),
(415, 'PK2013075', 3, 'Coat tree ', '24 5Wx34, 5Dx165Hcm', '2013-03-04', 320000, 'Baik', '2013-03-04', 'Direksi'),
(416, 'PK2013076', 3, 'Kursi Direksi', 'Council 9127 managerial chair', '2013-03-04', 2299000, 'Baik', '2013-03-04', 'Hastono Bayu T'),
(417, 'PK2013077', 3, 'Kursi Direksi', 'Council 9127 managerial chair', '2013-03-04', 2299000, 'Baik', '2013-03-04', 'Syafri Yuzal'),
(418, 'PK2013078', 3, 'Printer ', 'HP LaserJet M1212nf MFP', '2013-05-02', 3000000, 'Baik', '2013-05-02', 'HRGA'),
(419, 'PK2013079', 3, 'Telepon Cordless', 'KX-TG I III Wireless (Hitam)', '2013-06-07', 450000, 'Baik', '2013-06-07', 'PROS'),
(420, 'PK2013080', 3, 'Telepon Cordless', 'KX-TG I III Wireless (Hitam)', '2013-06-07', 450000, 'Baik', '2013-06-07', 'Hari Wahyu Wibowo'),
(421, 'PK2013081', 3, 'Brankas Keuangan', 'V-Tec SDB25ED', '2013-10-16', 727000, 'Baik', '2013-10-16', 'Siti Ulfah Wulandari/Finance'),
(422, 'PK2013082', 3, 'Shredder (Penghancur Kertas)', 'Geha Shredder S7CD', '2013-11-27', 724500, 'Baik', '2013-11-27', 'HRGA'),
(423, 'PK2014083', 3, 'AC 1', 'Panasonic 1/2 PK - Low watt Model CS-KC5QKJ', '2014-04-24', 3450000, 'Baik', '2014-04-24', 'Ruang Meeting Kecil'),
(424, 'PK2014084', 3, 'AC 2', 'Panasonic 1/2 PK - Low watt Model CS-KC5QKJ', '2014-04-24', 3450000, 'Baik', '2014-04-24', 'Ruang Meeting Besar'),
(425, 'PK2014085', 3, 'AC 3', 'Panasonic 3/4 PK- Low watt Model CS-KCJ7QKJ', '2014-04-24', 3550000, 'Baik', '2014-04-24', 'HRGA'),
(426, 'PK2014086', 3, 'AC 4', 'Panasonic 3/4 PK- Low watt Model CS-KCJ7QKJ', '2014-04-24', 3550000, 'Baik', '2014-04-24', 'Ruang Serbaguna'),
(427, 'PK2014087', 3, 'AC 5', 'Panasonic 3/4 PK- Standart Model  CS-KCJ7QKJ ', '2014-04-24', 3100000, 'Baik', '2014-04-24', 'Finance'),
(428, 'PK2014088', 3, 'AC 6', 'Panasonic 3/4 PK- Standart Model  CS-KCJ7QKJ ', '2014-04-24', 3100000, 'Baik', '2014-04-24', 'Ruang Manager'),
(429, 'PK2014089', 3, 'AC 7', 'Panasonic 3/4 PK- Standart Model  CS-KCJ7QKJ ', '2014-04-24', 3100000, 'Baik', '2014-04-24', 'Ruang Meeting Besar'),
(430, 'PK2014090', 3, 'AC 8', 'Panasonic 3/4 PK- Standart Model  CS-KCJ7QKJ ', '2014-04-24', 3100000, 'Baik', '2014-04-24', 'Happy Zone'),
(431, 'PK2014091', 3, 'AC 9', 'Panasonic 1 PK - Standart Model CS-PC9QKJ', '2014-04-24', 3200000, 'Baik', '2014-04-24', 'BD'),
(432, 'PK2014092', 3, 'AC 10', 'Panasonic 1 PK - Standart Model CS-PC9QKJ', '2014-04-24', 3200000, 'Baik', '2014-04-24', 'BD'),
(433, 'PK2014093', 3, 'AC 11', 'Panasonic 1 PK - Standart Model CS-PC9QKJ', '2014-04-24', 3200000, 'Baik', '2014-04-24', 'PROS'),
(434, 'PK2014094', 3, 'AC 12', 'Panasonic 1 PK - Standart Model CS-PC9QKJ', '2014-04-24', 3200000, 'Baik', '2014-04-24', 'PROS'),
(435, 'PK2014095', 3, 'AC 13', 'Panasonic 1 PK - Standart Model CS-PC9QKJ', '2014-04-24', 3200000, 'Baik', '2014-04-24', 'Pantry'),
(436, 'PK2014096', 3, 'AC 14', 'Panasonic 1 PK - Standart Model CS-PC9QKJ', '2014-04-24', 3200000, 'Baik', '2014-04-24', 'FO'),
(437, 'PK2014097', 3, 'AC 15', 'Panasonic 1 PK - Standart Model CS-PC9QKJ', '2014-04-24', 3200000, 'Baik', '2014-04-24', 'PIM'),
(438, 'PK2014098', 3, 'AC 16', 'Panasonic 1 PK - Standart Model CS-PC9QKJ', '2014-04-24', 3200000, 'Baik', '2014-04-24', 'Ruang Server'),
(439, 'PK2014099', 3, 'AC 17', 'Panasonic 1 1/2 PK - Standart Model CS-PC12PKP', '2014-04-24', 4350000, 'Baik', '2014-04-24', 'BD'),
(440, 'PK2014100', 3, 'AC 18', 'Panasonic 1 1/2 PK - Standart Model CS-PC12PKP', '2014-04-24', 4350000, 'Baik', '2014-04-24', 'Ruang Direksi'),
(441, 'PK2014101', 3, 'AC 19', 'Panasonic 1 1/2 PK - Standart Model CS-PC12PKP', '2014-04-24', 4350000, 'Baik', '2014-04-24', 'Ruang DIreksi'),
(442, 'PK2014102', 3, 'AC 20', 'Panasonic 1 1/2 PK - Standart Model CS-PC12PKP', '2014-04-24', 4350000, 'Baik', '2014-04-24', 'PROS'),
(443, 'PK2014103', 3, 'AC 21', 'Panasonic 2 PK - Standart Model CS-PC18PKP', '2014-04-24', 5800000, 'Baik', '2014-04-24', 'Ruang Server'),
(444, 'PK2014104', 3, 'Celling speaker', 'TOA Amplifier ZA-1240SS, TOA Paging Mic ZM-660 P', '2014-05-21', 7413000, 'Baik', '2014-05-21', 'HRGA'),
(445, 'PK2014105', 3, 'Printer ', 'HP Deskjet 2545', '2014-06-01', 999000, 'Baik', '2014-06-01', 'AINO Jakarta'),
(446, 'PK2014106', 3, 'Dispenser', 'Miyako 389HC', '2014-06-12', 609000, 'Baik', '2014-06-12', 'AINO Jakarta'),
(447, 'PK2014107', 3, 'AC Portable', 'Krisbow', '0000-00-00', 0, 'Rusak', '0000-00-00', 'AINO Jakarta'),
(448, 'PK2014108', 3, 'Kursi karyawan 19', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-02', 499000, 'Baik', '2014-07-02', 'Ajeng'),
(449, 'PK2014109', 3, 'Kursi karyawan 20', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-02', 499000, 'Baik', '2014-07-02', 'Ulfah'),
(450, 'PK2014110', 3, 'Kursi karyawan 21', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-03', 499000, 'Baik', '2014-07-03', 'Melly'),
(451, 'PK2014111', 3, 'Kursi karyawan 22', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-04', 499000, 'Baik', '2014-07-04', 'Bening'),
(452, 'PK2014112', 3, 'Kursi karyawan 23', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-05', 499000, 'Baik', '2014-07-05', 'Suci'),
(453, 'PK2014113', 3, 'Kursi karyawan 24', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-06', 499000, 'Baik', '2014-07-06', 'Tika'),
(454, 'PK2014114', 3, 'Kursi karyawan 25', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-07', 499000, 'Baik', '2014-07-07', 'Novianto'),
(455, 'PK2014115', 3, 'Kursi karyawan 26', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-08', 499000, 'Baik', '2014-07-08', 'Nopri'),
(456, 'PK2014116', 3, 'Kursi karyawan 28', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-09', 499000, 'Baik', '2014-07-09', 'Firman'),
(457, 'PK2014117', 3, 'Kursi karyawan 29', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-11', 499000, 'Baik', '2014-07-11', 'Keke'),
(458, 'PK2014118', 3, 'Kursi karyawan 30', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-07-12', 499000, 'Baik', '2014-07-12', 'Putri'),
(459, 'PK2014119', 3, 'Telepon Kabel', 'Panasonic, KX-T7730X', '2014-07-11', 0, 'Baik', '2014-07-11', 'Front Office'),
(460, 'PK2014120', 3, 'Telepon Kabel', 'Panasonic, KX-TS505MX, Seri 2GCKG842968', '2014-07-12', 0, 'Baik', '2014-07-12', 'HRGA'),
(461, 'PK2014121', 3, 'Telepon Cordless', 'KX-TG I 3II Wireless (Hitam)', '2014-01-21', 450000, 'Baik', '2014-01-21', 'AINO Jakarta'),
(462, 'PK2014122', 3, 'Kursi karyawan 30', 'Zenia Chair Blue ', '2014-08-05', 599000, 'Baik', '2014-08-05', 'Ruang Direksi'),
(463, 'PK2014123', 3, 'Kursi karyawan 31', 'Zenia Chair Blue ', '2014-08-05', 599000, 'Baik', '2014-08-05', 'Ruang Direksi'),
(464, 'PK2014124', 3, 'Kursi karyawan 32', 'Zenia Chair Blue ', '2014-08-05', 599000, 'Baik', '2014-08-05', 'Ruang Meeting Besar'),
(465, 'PK2014125', 3, 'Kursi karyawan 33', 'Zenia Chair Blue ', '2014-08-05', 599000, 'Baik', '2014-08-05', 'Ruang Meeting Besar'),
(466, 'PK2014126', 3, 'Kursi karyawan 34', 'Zenia Chair Blue ', '2014-08-05', 599000, 'Baik', '2014-08-05', 'Ruang Meeting Besar'),
(467, 'PK2014127', 3, 'Kursi karyawan 35', 'Zenia Chair Blue ', '2014-08-05', 599000, 'Baik', '2014-08-05', 'Ruang Meeting Besar'),
(468, 'PK2014128', 3, 'Kursi karyawan 36', 'Zenia Chair Blue ', '2014-08-05', 599000, 'Baik', '2014-08-05', 'Ruang Meeting Besar'),
(469, 'PK2014129', 3, 'Kursi karyawan 37', 'Zenia Chair Blue ', '2014-08-05', 599000, 'Baik', '2014-08-05', 'Ruang Meeting Besar'),
(470, 'PK2014130', 3, 'Kursi karyawan 1', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'HRGA Jakarta'),
(471, 'PK2014131', 3, 'Kursi karyawan 2', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'Area Operation Manager Jakarta'),
(472, 'PK2014132', 3, 'Kursi karyawan 3', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'Wahyu Tri'),
(473, 'PK2014133', 3, 'Kursi karyawan 4', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'Inge'),
(474, 'PK2014134', 3, 'Kursi karyawan 5', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'Richo'),
(475, 'PK2014135', 3, 'Kursi karyawan 6', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'Wisnu'),
(476, 'PK2014136', 3, 'Kursi karyawan 7', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'BD Jakarta'),
(477, 'PK2014137', 3, 'Kursi karyawan 8', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'BD Jakarta'),
(478, 'PK2014138', 3, 'Kursi karyawan 9', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'PROS Jakarta'),
(479, 'PK2014139', 3, 'Kursi karyawan 10', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'PROS Jakarta'),
(480, 'PK2014140', 3, 'Kursi karyawan 11', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'PROS Jakarta'),
(481, 'PK2014141', 3, 'Kursi karyawan 12', 'Zenia Staff Chair Red (F) AE-AE01-AE0101-82-F', '2014-08-07', 600000, 'Baik', '2014-08-07', 'PROS Jakarta'),
(482, 'PK2014142', 3, 'Meja karyawan 1', 'Sieben', '2014-08-07', 3800000, 'Baik', '2014-08-07', 'AINO Jakarta'),
(483, 'PK2014143', 3, 'Meja Karyawan 2', 'Sieben', '2014-08-07', 3800000, 'Baik', '2014-08-07', 'AINO Jakarta'),
(484, 'PK2014144', 3, 'Proyektor 1', 'HITACHI, CP-X3030WN', '2014-08-05', 8300000, 'Baik', '2014-08-05', 'Ruang Meeting Besar'),
(485, 'PK2014145', 3, 'Screen proyektor 1', 'HITACHI, CP', '2014-08-05', 707463, 'Baik', '2014-08-05', 'Ruang Meeting Besar'),
(486, 'PK2014146', 3, 'Mesin Fax', 'Panasonic, KX-FT983', '2014-08-05', 1550000, 'Baik', '2014-08-05', 'HRGA'),
(487, 'PK2014147', 3, 'Vertical blind', 'Gorden Vertical Blind', '2014-08-27', 7864000, 'Baik', '2014-08-27', 'PROS'),
(488, 'PK2014148', 3, 'Vertical Blind', 'Gorden Vertical Blind', '2014-08-27', 5500000, 'Baik', '2014-08-27', 'Direksi'),
(489, 'PK2014149', 3, 'Meja Karyawan', 'Putih', '2014-07-25', 4200000, 'Baik', '2014-07-25', 'Nopri, Eling, Abi, Shofi, Bowo, Putri'),
(490, 'PK2014150', 3, 'Meja Karyawan', 'Putih', '2014-09-24', 4200000, 'Baik', '2014-09-24', 'Alfian'),
(491, 'PK2014151', 3, 'Meja Karyawan', 'Putih', '2014-09-24', 4200000, 'Baik', '2014-09-24', 'Slamet mukti, Nuha, Dina, Nelly, Fahmi'),
(492, 'PK2014152', 3, 'Meja Karyawan', 'Putih', '2014-09-24', 4200000, 'Baik', '2014-09-24', 'Anita, Firman, Fendi, Hari Mur, Rohman'),
(493, 'PK2014153', 3, 'Kursi karyawan 13', 'Zenia Staff Chair Blue (F) AE-AE01-AE0101-82-F', '2014-09-24', 600000, 'Baik', '2014-09-24', 'PIM Jakarta'),
(494, 'PK2014154', 3, 'Kursi karyawan 14', 'Zenia Staff Chair Blue (F) AE-AE01-AE0101-82-F', '2014-09-24', 600000, 'Baik', '2014-09-24', 'PIM Jakarta'),
(495, 'PK2014155', 3, 'Kursi karyawan 15', 'Zenia Staff Chair Blue (F) AE-AE01-AE0101-82-F', '2014-09-24', 600000, 'Baik', '2014-09-24', 'PIM Jakarta'),
(496, 'PK2014156', 3, 'Kursi karyawan 16', 'Zenia Staff Chair Blue (F) AE-AE01-AE0101-82-F', '2014-09-24', 600000, 'Baik', '2014-09-24', 'PROS Jakarta'),
(497, 'PK2014157', 3, 'Kursi karyawan 17', 'Zenia Staff Chair Blue (F) AE-AE01-AE0101-82-F', '2014-09-24', 600000, 'Baik', '2014-09-24', 'PROS Jakarta'),
(498, 'PK2014158', 3, 'Soundsystem ', 'Hitam, Aquarius  VMA-01', '2014-11-06', 1573000, 'Baik', '2014-11-06', 'HRGA'),
(552, 'H2006001', 1, 'Komputer Staf  ( Lengkap )', 'Komputer Staf  ( Lengkap )', '2006-03-01', 12500000, 'Baik', '2006-03-01', ''),
(553, 'H2006002', 1, 'Komputer Eks Server ( CPU )', 'Komputer Eks Server ( CPU )', '2006-03-01', 2500000, 'Baik', '2006-03-01', ''),
(554, 'H2009003', 1, 'PC 19', '- Operating System: Microsoft Windows XP Professional (5.1, Build 2600)\n- System Manufacture: I65GV.\n- System Model: P4i65GV\n- BIOS: Default System BIOS\n- Processor: Intel (R) Celeron (R) CPU 2.13 GHz\n- Memory: 1014 MB RAM / 320 GB\n- DirectX Version: DirectX 9.0c (4.09.0000.0904)\n- Display Name: Intel (R) 828656 Graphics Controller', '2009-01-01', 0, 'Baik', '2009-01-01', 'PIM 2, bekas presensi lama aino'),
(555, 'H2012004', 1, 'PC 20', '- Operating System: Microsoft Windows XP Professional (5.1, Build 2600)\n- System Manufacture: BIOSTAR Group.\n- System Model: G41D3+.\n- BIOS: Default System BIOS\n- Processor: Intel (R) Pentium (R) Dual CPU E2200 @ 2.20 GHz (2CPUs)\n- Memory: 2014 MB RAM / 250 GB\n- DirectX Version: DirectX 9.0c (4.09.0000.0904)\n- Display Name: Intel (R) G41 Express Chipset', '2012-01-01', 0, 'Baik', '2012-01-01', 'Ulfah'),
(556, 'H2012005', 1, 'Printer 1', 'Printer L100', '2012-10-01', 1250000, 'Baik', '2012-10-01', 'Pros'),
(557, 'H2012006', 1, 'PC 1', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7600)\n- System Manufacture: Gigabyte Technology Co., Ltd.\n- System Model: G41M-Combo\n- BIOS: Award Modular BIOS V6.00PG\n- Processor: Intel (R) Core (TM) 2 CPU 6300 @ 1.86 GHz (2CPUs), ~1.9GHz\n- Memory: 2048 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) G41 Express Chipset', '2012-11-12', 5720000, 'Baik', '2012-11-12', 'Anita'),
(558, 'H2013007', 1, 'Laptop 1', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7600)\n- System Manufacture: LENOVO.\n- System Model: HuronRiver Platform\n- BIOS: Default System BIOS\n- Processor: Intel (R) Core (TM) i3-2330M CPU @ 2.20 GHz (4CPUs), ~2.2GHz\n- Memory: 2048 MB RAM\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics Family', '2013-01-07', 4500000, 'Baik', '2013-01-07', 'Ahmad'),
(559, 'H2013008', 1, 'Laptop 2', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7600)\n- System Manufacture: LENOVO.\n- System Model: SNB-CPT\n- BIOS: Default System BIOS\n- Processor: Intel (R) Core (TM) i3-2330M CPU @ 2.20 GHz (4CPUs), ~2.2GHz\n- Memory: 2988 MB RAM\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics Family', '2013-01-11', 4150000, 'Baik', '2013-01-11', 'Nopri'),
(560, 'H2013009', 1, 'Laptop 3', '- Operating System: Windows 8.1 Single Language 64-Bit (6.3, Build 9600)\n- System Manufacture: Sony Corporation\n- System Model: SVT 11125 CVS\n- BIOS: R0140D4\n- Processor: Intel Â® Core â„¢ i5-3317U CPU @1.70 GHz (4CPUs) \n- Memory: 4096 MB RAM\n- DirectX Version: DirectX 11\n- Display Name: Intel Â® HD. Graphics 4000', '2013-01-17', 8699000, 'Baik', '2013-01-17', 'Bhima'),
(561, 'H2013010', 1, 'TV 1', 'LG PLASMA SMART TV 42"', '2013-01-29', 6029100, 'Baik', '2013-01-29', 'Happy Zone'),
(562, 'H2013011', 1, 'Laptop 4', '- System Manufacture: SONY VAIO SVT13125 CVS', '2013-02-04', 8600000, 'Baik', '2013-02-04', 'Hari Wahyu'),
(563, 'H2013012', 1, 'Laptop 5', '- System Manufacture: Mac Book Air 11" MD224 (SN:C02JN2FQDRV7)', '2013-02-14', 11300000, 'Baik', '2013-02-14', 'Hastono Bayu'),
(564, 'H2013013', 1, 'Laptop 6', '- System Manufacture: Mac Book Air 11" MD224 (SN:C02JK288DRV7)', '2013-02-14', 11300000, 'Baik', '2013-02-14', 'Syafri Yuzal'),
(565, 'H2013014', 1, 'Mouse 1', 'Magic Mouse', '2013-02-14', 749000, 'Baik', '2013-02-14', 'Hastono Bayu'),
(566, 'H2013015', 1, 'Mouse 2', 'Magic Mouse', '2013-02-14', 749000, 'Baik', '2013-02-14', 'Syafri Yuzal'),
(567, 'H2013016', 1, 'Laptop 7', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7600)\n- System Manufacture: SAMSUNG ELECTRONICS Co., LTD.\n- System Model: 370R 4E/370R 4V/370R SE/3570RE/370R 5V.\n- BIOS: IBT,DEVELAMIBIOS Version P03RAO.106.121130.ZW\n- Processor: Intel (R) Pentium (R) CPU 997@ 1.60 GHz (2CPUs), ~1.6GHz\n- Memory: 4096 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics', '2013-02-26', 5400000, 'Baik', '2013-02-26', 'Tri Apriyanti'),
(568, 'H2013017', 1, 'Laptop 8', '- Operating System: Windows 7 Ultimate\n- System Manufacture: SAMSUNG ELECTRONICS Co., LTD.\n- System Model: 535U 3C\n- BIOS: Ambios Version P02RAG. N46. 120714. LEO\n- Processor: AMD A6-4455M APU with Radeon â„¢ HD Graphics (2 CPUs)\n- Memory: 4096 MB. RAM\n- DirectX Version: DirectX 11\n- Display Name: AMD Radeon HD 7500G', '2013-02-26', 4600000, 'Baik', '2013-02-26', 'Nur Cahyo H'),
(569, 'H2013018', 1, 'PC 2', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7600)\n- System Manufacture: Gigabyte Technology Co., Ltd.\n- System Model: G41M-Combo\n- BIOS: Award Modular BIOS V6.00PG\n- Processor: Intel (R) Core (TM) 2 CPU 6300 @ 1.86 GHz (2CPUs), ~1.9GHz\n- Memory: 2048 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) G41 Express Chipset', '2013-02-26', 6290000, 'Baik', '2013-02-26', 'Putri'),
(570, 'H2013019', 1, 'Laptop 9', '- System Manufacture: Lenovo B470-1913\n- Processor: CORE I3-2330 DDR3\n- Memory: 2GB HDD750GB LAN WIFI DVDRAMBO 14" 6CELL DOS', '2013-03-01', 4500000, 'Baik', '2013-03-01', 'HRGA jakarta'),
(571, 'H2013020', 1, 'Konektor 1', 'Konektor Macbook ( CRI MAC Kabel Mini display to VGA )', '2013-03-04', 200000, 'Baik', '2013-03-04', 'Direksi'),
(572, 'H2013021', 1, 'Konektor 2', 'Konektor Macbook ( CRI MAC5 USR Fthernet Adapter For Macbook Air )', '2013-03-04', 200000, 'Baik', '2013-03-04', 'Direksi'),
(573, 'H2013022', 1, 'Konektor 3', 'Konektor Macbook (CRI IPAD 14 Kabel Mini Display to HDMI)', '2013-03-04', 120000, 'Baik', '2013-03-04', 'Direksi'),
(574, 'H2013023', 1, 'Konektor 4', 'Konektor Macbook (ACPI UGMAC2 AC Plug for Macbook Adapter ORIGINAL)', '2013-03-04', 35000, 'Baik', '2013-03-04', 'Direksi'),
(575, 'H2013024', 1, 'Hardisk 1', ' Harddisk Ext Sony 2.5'' 1TB ( 10 bl )', '2013-03-04', 875000, 'Baik', '2013-03-04', 'Direksi'),
(576, 'H2013025', 1, 'Hardisk 2', ' Harddisk Ext Sony 2.5'' 1TB ( 10 bl )', '2013-03-08', 472000, 'Baik', '2013-03-08', 'Direksi'),
(577, 'H2013026', 1, 'Hardisk 3', ' Harddisk Ext Sony 2.5'' 1TB ( 10 bl )', '2013-03-08', 135000, 'Baik', '2013-03-08', 'Direksi'),
(578, 'H2013027', 1, 'Presensi', '2 Unit Weppas', '2013-03-13', 4196600, 'Baik', '2013-03-13', 'AINO Jogja'),
(579, 'H2013028', 1, 'Kabel Adaptor', 'Kabel Hdmi,VGA, dan 2Gb Laptop', '2013-03-20', 440000, 'Baik', '2013-03-20', 'HRGA Jogja'),
(580, 'H2013029', 1, 'Loker', '9Lloker Pintu', '2013-04-10', 4026800, 'Baik', '2013-04-10', 'AINO Jakarta'),
(581, 'H2013030', 1, 'Printer 2', 'Printer HP M1212NF', '2013-05-03', 3000000, 'Baik', '2013-05-03', 'HRGA Jogja'),
(582, 'H2013031', 1, 'PC 3', '- Operating System: Windows Windows 7 Ultimate 32-bit (6.1, Build 7601)\n- System Manufacture: Gigabyte Technology Co., Ltd.\n- System Model: To be filled by O.E.M.\n- BIOS: BIOS date 12/14/12 18:01:14 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i3-3220 CPU @ 3.30 GHz (4CPUs), ~3.3GHz\n- Memory: 4096 MB RAM / 1 Tera\n- DirectX Version: DirectX 11\n- Display Name: AMD Radeon HD 5500 Series', '2013-05-01', 4800000, 'Baik', '2013-05-01', 'Bening'),
(583, 'H2013032', 1, 'Laptop 11, harganya disesuaikan', '- System Manufacture: NB LENOVO IDEAPAD G480', '2013-06-10', 4500000, 'Baik', '2013-06-10', 'Finance'),
(584, 'H2013033', 1, 'PC 4', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7601)\n- System Manufacture: BIOSTAR Group.\n- System Model: H61MLV2\n- BIOS: BIOS date 11/02/12 10:21:48 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i3-3210 CPU @ 3.20 GHz (4CPUs), ~3.2GHz\n- Memory: 4096 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics', '2013-07-01', 3500000, 'Baik', '2013-07-01', 'Shofi'),
(585, 'H2013034', 1, 'PC 5', '- Operating System: Linux Slackware 14.1\n- System Manufacture: INTEL.\n- System Model: DH61BF\n- BIOS: SIMBIOS 2.7 Present\n- Processor: Intel(R) Core(TM) i3-3210 CPU @ 3.20GHz\n- Memory: 8054660 kB RAM\n- Display Name: Intel Corporation Xeon E3-1200 v2/3rd Gen Core processor Graphics Controller (rev 09)', '2013-09-01', 4150000, 'Baik', '2013-09-01', 'Novianto'),
(586, 'H2013035', 1, 'PC 6', '- Operating System: Linux Slackware 14.0\n- System Manufacture: BIOSTAR Group\n- System Model: H61MLV2\n- BIOS: SIMBIOS 2.7 Present\n- Processor: Intel(R) Core(TM) i3-2120 CPU @ 3.30GHz\n- Memory: 1887484 kB RAM / 500 GB \n- Display Name: Intel Corporation 2nd Generation Core Processor Family Integrated Graphics Controller (rev 09)', '2013-09-16', 4150000, 'Baik', '2013-09-16', 'Abi'),
(587, 'H2013036', 1, 'PC 9', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7601)\n- System Manufacture: BIOSTAR Group.\n- System Model: H61MLV2\n- BIOS: BIOS date 11/02/12 10:21:48 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i3-3220 CPU @ 3.30 GHz (4CPUs), ~3.3GHz\n- Memory: 2048 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics', '2013-10-01', 4150000, 'Baik', '2013-10-01', 'Luisa'),
(588, 'H2013037', 1, 'Kamera', 'Kamera fuji film X-20 Black', '2013-10-01', 6355000, 'Baik', '2013-10-01', ''),
(589, 'H2013038', 1, 'PC 8', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7600)\n- System Manufacture: INTEL\n- System Model: DH61WW\n- BIOS: Default System BIOS\n- Processor: Intel (R) Core (TM) i3-3220 CPU @ 3.30 GHz (4CPUs), ~3.3GHz\n- Memory: 4096 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics', '2013-11-01', 4240000, 'Baik', '2013-11-01', 'Rohman'),
(590, 'H2013039', 1, 'Hardisk', 'Hardisk Western', '2013-12-11', 915000, 'Baik', '2013-12-11', 'HRGA'),
(591, 'H2013040', 1, 'Laptop 11', '', '2013-12-11', 9499000, 'Baik', '2013-12-11', 'Wahyu Tri'),
(592, 'H2013041', 1, 'PC 9', '- Operating System: Windows Windows 7 Ultimate 32-bit (6.1, Build 7600)\n- System Manufacture: BIOSTAR Group.\n- System Model: H61MLV2.\n- BIOS: BIOS date 11/02/12 10:21:48 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i3-3220 CPU @ 3.30 GHz (4CPUs), ~3.3GHz\n- Memory: 2048 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics', '2013-12-01', 2175000, 'Baik', '2013-12-01', 'Melly'),
(593, 'H2013042', 1, 'PC 10', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7601)\n- System Manufacture: BIOSTAR Group.\n- System Model: H61MLV2\n- BIOS: BIOS date 11/02/12 10:21:48 ver: 04.06.05\n- Processor: Intel (R) Pentium (R) CPU G2020 @ 2.90 GHz (2CPUs), ~2.9GHz\n- Memory: 2048 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics', '2013-12-01', 4500000, 'Baik', '2013-12-01', 'Suci'),
(594, 'H2014043', 1, 'Laptop 12', '- System Manufacture: NB ASUS X200CA-KX189D', '2014-01-17', 3500000, 'Baik', '2014-01-17', 'PIM Jakarta'),
(595, 'H2014044', 1, 'PC 11', '- Operating System: Windows 8 pro 64-bit (6.2, Build 9200)\n- System Manufacture: Gigabyte Technology Co., Ltd.\n- System Model: To be filled by O.E.M.\n- BIOS: BIOS date 04/26/13 14:55:40 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i3-2120 CPU @ 3.30 GHz (4CPUs), ~3.3GHz\n- Memory: 4096 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics Family (Microsoft Corporation)', '2014-02-04', 4750000, 'Baik', '2014-02-04', 'Eling'),
(596, 'H2014045', 1, 'PC 12', '- Operating System: Windows 8 pro 64-bit (6.2, Build 9200)\n- System Manufacture: Gigabyte Technology Co., Ltd.\n- System Model: To be filled by O.E.M.\n- BIOS: BIOS date 04/26/13 14:55:40 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i3-2120 CPU @ 3.30 GHz (4CPUs), ~3.3GHz\n- Memory: 4096 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics Family (Microsoft Corporation)', '2014-02-04', 4750000, 'Baik', '2014-02-04', 'Mukhti'),
(597, 'H2014046', 1, 'Laptop 13', '- Operating System: Windows Windows 7 Ultimate 32-bit (6.1, Build 7601)\n- System Manufacture: LENOVO\n- System Model: 310\n- BIOS: Phoenix BIOS SC-T v2.2\n- Processor: Intel (R) Core (TM) i3-3217U CPU @ 1.80 GHz (4CPUs), ~1.8GHz\n- Memory: 4096 MB RAM\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics 4000', '2014-05-14', 4599000, 'Baik', '2014-05-14', 'Devi'),
(598, 'H2014047', 1, 'PC 13', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7601)\n- System Manufacture: Gigabyte Technology Co., Ltd.\n- System Model: To be filled by O.E.M.\n- BIOS: BIOS date 04/26/13 14:55:40 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i3-2120 CPU @ 3.30 GHz (4CPUs), ~3.3GHz\n- Memory: 4096 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics', '2014-05-14', 7300000, 'Baik', '2014-05-14', 'Dian'),
(599, 'H2014048', 1, 'Server 2', 'Server NIRAX (L1)', '2014-05-14', 15630000, 'Baik', '2014-05-14', 'AINO Jogja'),
(600, 'H2014049', 1, 'Laptop 14', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7600)\n- System Manufacture: LENOVO.\n- System Model: 20156.\n- BIOS: Phoenix BIOS SC-T v2.2\n- Processor: Intel (R) Core (TM) i3-3120M CPU @ 2.50 GHz (4CPUs), ~2.5GHz\n- Memory: 4096 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics 4000', '2014-06-01', 4599000, 'Baik', '2014-06-01', 'Pros Jakarta'),
(601, 'H2014050', 1, 'PC 14', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7601)\n- System Manufacture: BIOSTAR Group.\n- System Model: H61MLV3.\n- BIOS: BIOS date 07/25/13 10:10:26 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i3-3240 CPU @ 3.40 GHz (4CPUs), ~3.4GHz\n- Memory: 2048 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics', '2014-07-01', 4275000, 'Baik', '2014-07-01', 'Fila'),
(602, 'H2014051', 1, 'PC 15', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7601)\n- System Manufacture: BIOSTAR Group.\n- System Model: H61MLV3\n- BIOS: BIOS date 07/25/13 10:10:26 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i3-3240 CPU @ 3.40 GHz (4CPUs), ~3.4GHz\n- Memory: 2048 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics', '2014-07-01', 4275000, 'Baik', '2014-07-01', 'Nelly'),
(603, 'H2014052', 1, 'Server 1', 'UPS GE EP Series', '2014-07-01', 18031251, 'Baik', '2014-07-01', 'AINO Jogja'),
(604, 'H2014053', 1, 'PC 16', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7601)\n- System Manufacture: BIOSTAR Group.\n- System Model: H61MLV3.\n- BIOS: BIOS date 07/25/13 10:10:26 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i3-3240 CPU @ 3.40 GHz (4CPUs), ~3.4GHz\n- Memory: 2048 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics', '2014-08-01', 4275000, 'Baik', '2014-08-01', 'Ajeng'),
(605, 'H2014054', 1, 'PC 17', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7601)\n- System Manufacture: BIOSTAR Group.\n- System Model: H61MLV3\n- BIOS: BIOS date 07/25/13 10:10:26 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i3-3240 CPU @ 3.40 GHz (4CPUs), ~3.4GHz\n- Memory: 2048 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: Intel (R) HD Graphics', '2014-08-01', 4625000, 'Baik', '2014-08-01', 'PIM Jogja'),
(606, 'H2014055', 1, 'PC 18', '- Operating System: Windows 7 Ultimate 64-bit (6.1, Build 7600)\n- System Manufacture: Gigabyte Technology Co., Ltd.\n- System Model: To be filled by O.E.M.\n- BIOS: BIOS date 04/26/13 14:55:40 ver: 04.06.05\n- Processor: Intel (R) Core (TM) i5-3330 CPU @ 3.00 GHz (4CPUs),~3.2GHz\n- Memory: 8192 MB RAM / 500 GB\n- DirectX Version: DirectX 11\n- Display Name: NVIDIA GeForce GT 630', '2014-08-01', 5975000, 'Baik', '2014-08-01', 'Syafri Yuzal'),
(607, 'H2014056', 1, 'Laptop 15', '- Operating System: Windows 7 Ultimate 32-bit (6.1, Build 7600)\n- System Manufacture: LENOVO\n- System Model: 20C5A0DQ00\n- BIOS: Phoenix BIOS SC-T v2.1\n- Processor: Intel(R) Core(TM) i5-4300M CPU @ 2.60GHz (4 CPUs), ~2.6GHz\n- Memory: 4096MB RAM\n- DirectX Version: DirectX 11', '2014-10-17', 7548000, 'Baik', '2014-10-17', 'Firman');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(2) NOT NULL auto_increment,
  `nama_kategori` varchar(30) NOT NULL,
  PRIMARY KEY  (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Hardware'),
(2, 'Software'),
(3, 'Peralatan Kantor'),
(4, 'Bangunan'),
(5, 'Kendaraan');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(50) NOT NULL auto_increment,
  `nama_status` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `nama_status`) VALUES
(1, 'Baik'),
(2, 'Cukup Baik'),
(3, 'Rusak'),
(4, 'Hilang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(30, 'admin', 'admin2015'),
(31, 'user', 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;
