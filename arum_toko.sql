-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jul 2019 pada 09.34
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arum_toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailorder`
--

CREATE TABLE `detailorder` (
  `IDOrderDetail` int(11) NOT NULL,
  `IDOrder` int(20) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `JumlahBeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailorder`
--

INSERT INTO `detailorder` (`IDOrderDetail`, `IDOrder`, `id_produk`, `JumlahBeli`) VALUES
(1, 10, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gamis`
--

CREATE TABLE `gamis` (
  `id_produk` int(20) NOT NULL COMMENT 'ISBN',
  `nama_produk` varchar(50) NOT NULL COMMENT 'Judul',
  `deskripsi` longtext CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL COMMENT 'Deskripsi',
  `harga` int(11) NOT NULL COMMENT 'Harga',
  `stok` int(4) NOT NULL,
  `IDKategori` int(11) NOT NULL,
  `fileGambar` varchar(225) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal` date NOT NULL,
  `berat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gamis`
--

INSERT INTO `gamis` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `stok`, `IDKategori`, `fileGambar`, `tanggal`, `berat`) VALUES
(1, 'Gamis Anak Aini Set', '																																													', 300000, 20, 1, 'img/imghitam-coklat.jpeg', '2019-07-10', 3),
(2, 'Gamis Anak Aini Set', 'Gamis Anak Aini Set', 330000, 10, 1, 'img/aini set/merah biru.jpg', '2019-07-01', 1),
(3, 'Gamis Anak Aini Set', 'Gamis Anak Aini Set', 330000, 20, 1, 'img/pink.jpg', '2019-07-01', 1),
(4, 'Gamis Anak Aini Set', 'Gamis Anak Aini Set', 330000, 100, 1, 'img/biru kuning.jpg', '2019-07-01', 1),
(5, 'Gamis Anak Anggita Set', 'Gamis Anak Anggita Set', 350000, 2, 2, 'img/hijau.jpg', '2019-07-01', 1),
(6, 'Gamis Anak Anggita Set', 'Gamis Anak Anggita Set', 350000, 32, 2, 'img/merah.jpg', '2019-07-01', 1),
(7, 'Gamis Anak Anggita Set', 'Gamis Anak Anggita Set', 350000, 10, 2, 'img/biru.jpg', '2019-07-01', 1),
(8, 'Gamis Anak Anggita Set', 'Gamis Anak Anggita Set', 350000, 12, 2, 'img/abu.jpg', '2019-07-01', 1),
(9, 'Gamis Anak Rahadian Set', 'Gamis Anak Rahadian Set', 30000, 3, 3, 'img/coklat.png', '2019-07-01', 2),
(10, 'Gamis Anak Rahadian Set', 'Gamis Anak Rahadian Set', 30000, 12, 3, 'img/ungu.jpg', '2019-07-01', 2),
(12, 'Gamis Anak Rahadian Set', 'Gamis Anak Rahadian Set', 300000, 10, 3, 'img/abuabu.jpg', '2019-07-01', 2),
(13, 'Gamis Anak Rahadian Set', 'Gamis Anak Rahadian Set', 300000, 12, 3, 'img/tosca.jpg', '2019-07-01', 2),
(15, 'Ganis Keren', '															Gamis Anak Shofiya Set', 320000, 40, 4, 'img/imgmerah.jpg', '2019-07-09', 1),
(16, 'sasa1', '																				 Shofiya Set Gamis Anak', 350000, 10, 4, 'img/imgpink tua.jpg', '2019-07-09', 1),
(17, 'Misbee', '				Gamis Misbee	', 500000, 10, 5, 'img/imghitam pink.jpg', '2019-07-09', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `kabupatenId` int(6) NOT NULL,
  `provinsiId` tinyint(4) NOT NULL,
  `kabupatenNama` varchar(30) NOT NULL,
  `Onkoskirim` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`kabupatenId`, `provinsiId`, `kabupatenNama`, `Onkoskirim`) VALUES
(1101, 11, 'Kab. Simeulue', 33000),
(1102, 11, 'Kab. Aceh Singkil', 33000),
(1103, 11, 'Kab. Aceh Selatan', 33000),
(1104, 11, 'Kab. Aceh Tenggara', 33000),
(1105, 11, 'Kab. Aceh Timur', 33000),
(1106, 11, 'Kab. Aceh Tengah', 33000),
(1107, 11, 'Kab. Aceh Barat', 33000),
(1108, 11, 'Kab. Aceh Besar', 33000),
(1109, 11, 'Kab. Pidie', 40000),
(1110, 11, 'Kab. Bireuen', 35000),
(1111, 11, 'Kab. Aceh Utara', 33000),
(1112, 11, 'Kab. Aceh Barat Daya', 33000),
(1113, 11, 'Kab. Gayo Lues', 33000),
(1114, 11, 'Kab. Aceh Tamiang', 33000),
(1115, 11, 'Kab. Nagan Raya', 40000),
(1116, 11, 'Kab. Aceh Jaya', 33000),
(1117, 11, 'Kab. Bener Meriah', 45000),
(1118, 11, 'Kab. Pidie Jaya', 0),
(1171, 11, 'Kota Banda Aceh', 33000),
(1172, 11, 'Kota Sabang', 0),
(1173, 11, 'Kota Langsa', 0),
(1174, 11, 'Kota Lhokseumawe', 45000),
(1175, 11, 'Kota Subulussalam', 0),
(1201, 12, 'Kab. Nias', 40000),
(1202, 12, 'Kab. Mandailing Natal', 0),
(1203, 12, 'Kab. Tapanuli Selatan', 0),
(1204, 12, 'Kab. Tapanuli Tengah', 0),
(1205, 12, 'Kab. Tapanuli Utara', 0),
(1206, 12, 'Kab. Toba Samosir', 0),
(1207, 12, 'Kab. Labuhan Batu', 0),
(1208, 12, 'Kab. Asahan', 0),
(1209, 12, 'Kab. Simalungun', 0),
(1210, 12, 'Kab. Dairi', 0),
(1211, 12, 'Kab. Karo', 0),
(1212, 12, 'Kab. Deli Serdang', 0),
(1213, 12, 'Kab. Langkat', 0),
(1214, 12, 'Kab. Nias Selatan', 0),
(1215, 12, 'Kab. Humbang Hasundutan', 0),
(1216, 12, 'Kab. Pakpak Bharat', 0),
(1217, 12, 'Kab. Samosir', 0),
(1218, 12, 'Kab. Serdang Bedagai', 0),
(1219, 12, 'Kab. Batu Bara', 0),
(1220, 12, 'Kab. Padang Lawas Utara', 0),
(1221, 12, 'Kab. Padang Lawas', 0),
(1222, 12, 'Kab. Labuhan Batu Selatan', 0),
(1223, 12, 'Kab. Labuhan Batu Utara', 0),
(1224, 12, 'Kab. Nias Utara', 0),
(1225, 12, 'Kab. Nias Barat', 0),
(1271, 12, 'Kota Sibolga', 0),
(1272, 12, 'Kota Tanjung Balai', 0),
(1273, 12, 'Kota Pematang Siantar', 0),
(1274, 12, 'Kota Tebing Tinggi', 0),
(1275, 12, 'Kota Medan', 0),
(1276, 12, 'Kota Binjai', 0),
(1277, 12, 'Kota Padangsidimpuan', 0),
(1278, 12, 'Kota Gunungsitoli', 0),
(1301, 13, 'Kab. Kepulauan Mentawai', 0),
(1302, 13, 'Kab. Pesisir Selatan', 0),
(1303, 13, 'Kab. Solok', 0),
(1304, 13, 'Kab. Sijunjung', 0),
(1305, 13, 'Kab. Tanah Datar', 0),
(1306, 13, 'Kab. Padang Pariaman', 0),
(1307, 13, 'Kab. Agam', 0),
(1308, 13, 'Kab. Lima Puluh Kota', 0),
(1309, 13, 'Kab. Pasaman', 0),
(1310, 13, 'Kab. Solok Selatan', 0),
(1311, 13, 'Kab. Dharmasraya', 0),
(1312, 13, 'Kab. Pasaman Barat', 0),
(1371, 13, 'Kota Padang', 0),
(1372, 13, 'Kota Solok', 0),
(1373, 13, 'Kota Sawah Lunto', 0),
(1374, 13, 'Kota Padang Panjang', 0),
(1375, 13, 'Kota Bukittinggi', 0),
(1376, 13, 'Kota Payakumbuh', 0),
(1377, 13, 'Kota Pariaman', 0),
(1401, 14, 'Kab. Kuantan Singingi', 0),
(1402, 14, 'Kab. Indragiri Hulu', 0),
(1403, 14, 'Kab. Indragiri Hilir', 0),
(1404, 14, 'Kab. Pelalawan', 0),
(1405, 14, 'Kab. S I A K', 0),
(1406, 14, 'Kab. Kampar', 0),
(1407, 14, 'Kab. Rokan Hulu', 0),
(1408, 14, 'Kab. Bengkalis', 0),
(1409, 14, 'Kab. Rokan Hilir', 0),
(1410, 14, 'Kab. Kepulauan Meranti', 0),
(1471, 14, 'Kota Pekanbaru', 33000),
(1473, 14, 'Kota D U M A I', 37000),
(1501, 15, 'Kab. Kerinci', 0),
(1502, 15, 'Kab. Merangin', 0),
(1503, 15, 'Kab. Sarolangun', 0),
(1504, 15, 'Kab. Batang Hari', 0),
(1505, 15, 'Kab. Muaro Jambi', 0),
(1506, 15, 'Kab. Tanjung Jabung Timur', 0),
(1507, 15, 'Kab. Tanjung Jabung Barat', 0),
(1508, 15, 'Kab. Tebo', 0),
(1509, 15, 'Kab. Bungo', 0),
(1571, 15, 'Kota Jambi', 0),
(1572, 15, 'Kota Sungai Penuh', 0),
(1601, 16, 'Kab. Ogan Komering Ulu', 0),
(1602, 16, 'Kab. Ogan Komering Ilir', 0),
(1603, 16, 'Kab. Muara Enim', 0),
(1604, 16, 'Kab. Lahat', 0),
(1605, 16, 'Kab. Musi Rawas', 0),
(1606, 16, 'Kab. Musi Banyuasin', 0),
(1607, 16, 'Kab. Banyu Asin', 0),
(1608, 16, 'Kab. Ogan Komering Ulu Selatan', 0),
(1609, 16, 'Kab. Ogan Komering Ulu Timur', 0),
(1610, 16, 'Kab. Ogan Ilir', 0),
(1611, 16, 'Kab. Empat Lawang', 0),
(1671, 16, 'Kota Palembang', 0),
(1672, 16, 'Kota Prabumulih', 0),
(1673, 16, 'Kota Pagar Alam', 0),
(1674, 16, 'Kota Lubuklinggau', 0),
(1701, 17, 'Kab. Bengkulu Selatan', 0),
(1702, 17, 'Kab. Rejang Lebong', 0),
(1703, 17, 'Kab. Bengkulu Utara', 0),
(1704, 17, 'Kab. Kaur', 0),
(1705, 17, 'Kab. Seluma', 0),
(1706, 17, 'Kab. Mukomuko', 0),
(1707, 17, 'Kab. Lebong', 0),
(1708, 17, 'Kab. Kepahiang', 0),
(1709, 17, 'Kab. Bengkulu Tengah', 0),
(1771, 17, 'Kota Bengkulu', 0),
(1801, 18, 'Kab. Lampung Barat', 0),
(1802, 18, 'Kab. Tanggamus', 0),
(1803, 18, 'Kab. Lampung Selatan', 44000),
(1804, 18, 'Kab. Lampung Timur', 0),
(1805, 18, 'Kab. Lampung Tengah', 44000),
(1806, 18, 'Kab. Lampung Utara', 0),
(1807, 18, 'Kab. Way Kanan', 0),
(1808, 18, 'Kab. Tulangbawang', 0),
(1809, 18, 'Kab. Pesawaran', 0),
(1810, 18, 'Kab. Pringsewu', 0),
(1811, 18, 'Kab. Mesuji', 0),
(1812, 18, 'Kab. Tulang Bawang Barat', 0),
(1813, 18, 'Kab. Pesisir Barat', 0),
(1871, 18, 'Kota Bandar Lampung', 0),
(1872, 18, 'Kota Metro', 0),
(1901, 19, 'Kab. Bangka', 0),
(1902, 19, 'Kab. Belitung', 0),
(1903, 19, 'Kab. Bangka Barat', 0),
(1904, 19, 'Kab. Bangka Tengah', 0),
(1905, 19, 'Kab. Bangka Selatan', 0),
(1906, 19, 'Kab. Belitung Timur', 0),
(1971, 19, 'Kota Pangkal Pinang', 0),
(2101, 21, 'Kab. Karimun', 0),
(2102, 21, 'Kab. Bintan', 0),
(2103, 21, 'Kab. Natuna', 0),
(2104, 21, 'Kab. Lingga', 0),
(2105, 21, 'Kab. Kepulauan Anambas', 0),
(2171, 21, 'Kota B A T A M', 25000),
(2172, 21, 'Kota Tanjung Pinang', 0),
(3101, 31, 'Kab. Kepulauan Seribu', 0),
(3171, 31, 'Kota Jakarta Selatan', 15000),
(3172, 31, 'Kota Jakarta Timur', 15000),
(3173, 31, 'Kota Jakarta Pusat', 15000),
(3174, 31, 'Kota Jakarta Barat', 15000),
(3175, 31, 'Kota Jakarta Utara', 15000),
(3201, 32, 'Kab. Bogor', 0),
(3202, 32, 'Kab. Sukabumi', 0),
(3203, 32, 'Kab. Cianjur', 0),
(3204, 32, 'Kab. Bandung', 0),
(3205, 32, 'Kab. Garut', 0),
(3206, 32, 'Kab. Tasikmalaya', 0),
(3207, 32, 'Kab. Ciamis', 0),
(3208, 32, 'Kab. Kuningan', 0),
(3209, 32, 'Kab. Cirebon', 0),
(3210, 32, 'Kab. Majalengka', 0),
(3211, 32, 'Kab. Sumedang', 0),
(3212, 32, 'Kab. Indramayu', 0),
(3213, 32, 'Kab. Subang', 0),
(3214, 32, 'Kab. Purwakarta', 0),
(3215, 32, 'Kab. Karawang', 0),
(3216, 32, 'Kab. Bekasi', 0),
(3217, 32, 'Kab. Bandung Barat', 0),
(3218, 32, 'Kab. Pangandaran', 0),
(3271, 32, 'Kota Bogor', 0),
(3272, 32, 'Kota Sukabumi', 0),
(3273, 32, 'Kota Bandung', 0),
(3274, 32, 'Kota Cirebon', 0),
(3275, 32, 'Kota Bekasi', 0),
(3276, 32, 'Kota Depok', 0),
(3277, 32, 'Kota Cimahi', 0),
(3278, 32, 'Kota Tasikmalaya', 0),
(3279, 32, 'Kota Banjar', 0),
(3301, 33, 'Kab. Cilacap', 15000),
(3302, 33, 'Kab. Banyumas', 0),
(3303, 33, 'Kab. Purbalingga', 0),
(3304, 33, 'Kab. Banjarnegara', 15000),
(3305, 33, 'Kab. Kebumen', 25000),
(3306, 33, 'Kab. Purworejo', 0),
(3307, 33, 'Kab. Wonosobo', 0),
(3308, 33, 'Kab. Magelang', 0),
(3309, 33, 'Kab. Boyolali', 0),
(3310, 33, 'Kab. Klaten', 0),
(3311, 33, 'Kab. Sukoharjo', 0),
(3312, 33, 'Kab. Wonogiri', 0),
(3313, 33, 'Kab. Karanganyar', 0),
(3314, 33, 'Kab. Sragen', 0),
(3315, 33, 'Kab. Grobogan', 0),
(3316, 33, 'Kab. Blora', 0),
(3317, 33, 'Kab. Rembang', 0),
(3318, 33, 'Kab. Pati', 0),
(3319, 33, 'Kab. Kudus', 0),
(3320, 33, 'Kab. Jepara', 0),
(3321, 33, 'Kab. Demak', 0),
(3322, 33, 'Kab. Semarang', 0),
(3323, 33, 'Kab. Temanggung', 0),
(3324, 33, 'Kab. Kendal', 0),
(3325, 33, 'Kab. Batang', 0),
(3326, 33, 'Kab. Pekalongan', 0),
(3327, 33, 'Kab. Pemalang', 0),
(3328, 33, 'Kab. Tegal', 0),
(3329, 33, 'Kab. Brebes', 0),
(3371, 33, 'Kota Magelang', 0),
(3372, 33, 'Kota Surakarta', 0),
(3373, 33, 'Kota Salatiga', 0),
(3374, 33, 'Kota Semarang', 0),
(3375, 33, 'Kota Pekalongan', 0),
(3376, 33, 'Kota Tegal', 0),
(3401, 34, 'Kab. Kulon Progo', 0),
(3402, 34, 'Kab. Bantul', 0),
(3403, 34, 'Kab. Gunung Kidul', 0),
(3404, 34, 'Kab. Sleman', 0),
(3471, 34, 'Kota Yogyakarta', 0),
(3501, 35, 'Kab. Pacitan', 0),
(3502, 35, 'Kab. Ponorogo', 0),
(3503, 35, 'Kab. Trenggalek', 0),
(3504, 35, 'Kab. Tulungagung', 0),
(3505, 35, 'Kab. Blitar', 0),
(3506, 35, 'Kab. Kediri', 0),
(3507, 35, 'Kab. Malang', 0),
(3508, 35, 'Kab. Lumajang', 0),
(3509, 35, 'Kab. Jember', 0),
(3510, 35, 'Kab. Banyuwangi', 0),
(3511, 35, 'Kab. Bondowoso', 0),
(3512, 35, 'Kab. Situbondo', 0),
(3513, 35, 'Kab. Probolinggo', 0),
(3514, 35, 'Kab. Pasuruan', 0),
(3515, 35, 'Kab. Sidoarjo', 0),
(3516, 35, 'Kab. Mojokerto', 0),
(3517, 35, 'Kab. Jombang', 0),
(3518, 35, 'Kab. Nganjuk', 0),
(3519, 35, 'Kab. Madiun', 0),
(3520, 35, 'Kab. Magetan', 0),
(3521, 35, 'Kab. Ngawi', 0),
(3522, 35, 'Kab. Bojonegoro', 0),
(3523, 35, 'Kab. Tuban', 0),
(3524, 35, 'Kab. Lamongan', 0),
(3525, 35, 'Kab. Gresik', 0),
(3526, 35, 'Kab. Bangkalan', 0),
(3527, 35, 'Kab. Sampang', 0),
(3528, 35, 'Kab. Pamekasan', 0),
(3529, 35, 'Kab. Sumenep', 0),
(3571, 35, 'Kota Kediri', 0),
(3572, 35, 'Kota Blitar', 0),
(3573, 35, 'Kota Malang', 0),
(3574, 35, 'Kota Probolinggo', 0),
(3575, 35, 'Kota Pasuruan', 0),
(3576, 35, 'Kota Mojokerto', 0),
(3577, 35, 'Kota Madiun', 0),
(3578, 35, 'Kota Surabaya', 0),
(3579, 35, 'Kota Batu', 0),
(3601, 36, 'Kab. Pandeglang', 0),
(3602, 36, 'Kab. Lebak', 0),
(3603, 36, 'Kab. Tangerang', 0),
(3604, 36, 'Kab. Serang', 0),
(3671, 36, 'Kota Tangerang', 0),
(3672, 36, 'Kota Cilegon', 0),
(3673, 36, 'Kota Serang', 0),
(3674, 36, 'Kota Tangerang Selatan', 0),
(5101, 51, 'Kab. Jembrana', 0),
(5102, 51, 'Kab. Tabanan', 0),
(5103, 51, 'Kab. Badung', 0),
(5104, 51, 'Kab. Gianyar', 0),
(5105, 51, 'Kab. Klungkung', 0),
(5106, 51, 'Kab. Bangli', 0),
(5107, 51, 'Kab. Karang Asem', 0),
(5108, 51, 'Kab. Buleleng', 0),
(5171, 51, 'Kota Denpasar', 0),
(5201, 52, 'Kab. Lombok Barat', 0),
(5202, 52, 'Kab. Lombok Tengah', 0),
(5203, 52, 'Kab. Lombok Timur', 0),
(5204, 52, 'Kab. Sumbawa', 0),
(5205, 52, 'Kab. Dompu', 0),
(5206, 52, 'Kab. Bima', 0),
(5207, 52, 'Kab. Sumbawa Barat', 0),
(5208, 52, 'Kab. Lombok Utara', 0),
(5271, 52, 'Kota Mataram', 0),
(5272, 52, 'Kota Bima', 0),
(5301, 53, 'Kab. Sumba Barat', 0),
(5302, 53, 'Kab. Sumba Timur', 0),
(5303, 53, 'Kab. Kupang', 0),
(5304, 53, 'Kab. Timor Tengah Selatan', 0),
(5305, 53, 'Kab. Timor Tengah Utara', 0),
(5306, 53, 'Kab. Belu', 0),
(5307, 53, 'Kab. Alor', 0),
(5308, 53, 'Kab. Lembata', 0),
(5309, 53, 'Kab. Flores Timur', 0),
(5310, 53, 'Kab. Sikka', 0),
(5311, 53, 'Kab. Ende', 0),
(5312, 53, 'Kab. Ngada', 0),
(5313, 53, 'Kab. Manggarai', 0),
(5314, 53, 'Kab. Rote Ndao', 0),
(5315, 53, 'Kab. Manggarai Barat', 0),
(5316, 53, 'Kab. Sumba Tengah', 0),
(5317, 53, 'Kab. Sumba Barat Daya', 0),
(5318, 53, 'Kab. Nagekeo', 0),
(5319, 53, 'Kab. Manggarai Timur', 0),
(5320, 53, 'Kab. Sabu Raijua', 0),
(5371, 53, 'Kota Kupang', 0),
(6101, 61, 'Kab. Sambas', 0),
(6102, 61, 'Kab. Bengkayang', 0),
(6103, 61, 'Kab. Landak', 0),
(6104, 61, 'Kab. Pontianak', 0),
(6105, 61, 'Kab. Sanggau', 0),
(6106, 61, 'Kab. Ketapang', 0),
(6107, 61, 'Kab. Sintang', 0),
(6108, 61, 'Kab. Kapuas Hulu', 0),
(6109, 61, 'Kab. Sekadau', 0),
(6110, 61, 'Kab. Melawi', 0),
(6111, 61, 'Kab. Kayong Utara', 0),
(6112, 61, 'Kab. Kubu Raya', 0),
(6171, 61, 'Kota Pontianak', 0),
(6172, 61, 'Kota Singkawang', 0),
(6201, 62, 'Kab. Kotawaringin Barat', 0),
(6202, 62, 'Kab. Kotawaringin Timur', 0),
(6203, 62, 'Kab. Kapuas', 0),
(6204, 62, 'Kab. Barito Selatan', 0),
(6205, 62, 'Kab. Barito Utara', 0),
(6206, 62, 'Kab. Sukamara', 0),
(6207, 62, 'Kab. Lamandau', 0),
(6208, 62, 'Kab. Seruyan', 0),
(6209, 62, 'Kab. Katingan', 0),
(6210, 62, 'Kab. Pulang Pisau', 0),
(6211, 62, 'Kab. Gunung Mas', 0),
(6212, 62, 'Kab. Barito Timur', 0),
(6213, 62, 'Kab. Murung Raya', 0),
(6271, 62, 'Kota Palangka Raya', 0),
(6301, 63, 'Kab. Tanah Laut', 0),
(6302, 63, 'Kab. Kota Baru', 0),
(6303, 63, 'Kab. Banjar', 0),
(6304, 63, 'Kab. Barito Kuala', 0),
(6305, 63, 'Kab. Tapin', 0),
(6306, 63, 'Kab. Hulu Sungai Selatan', 0),
(6307, 63, 'Kab. Hulu Sungai Tengah', 0),
(6308, 63, 'Kab. Hulu Sungai Utara', 0),
(6309, 63, 'Kab. Tabalong', 0),
(6310, 63, 'Kab. Tanah Bumbu', 0),
(6311, 63, 'Kab. Balangan', 0),
(6371, 63, 'Kota Banjarmasin', 0),
(6372, 63, 'Kota Banjar Baru', 0),
(6401, 64, 'Kab. Paser', 0),
(6402, 64, 'Kab. Kutai Barat', 0),
(6403, 64, 'Kab. Kutai Kartanegara', 0),
(6404, 64, 'Kab. Kutai Timur', 0),
(6405, 64, 'Kab. Berau', 0),
(6409, 64, 'Kab. Penajam Paser Utara', 0),
(6471, 64, 'Kota Balikpapan', 0),
(6472, 64, 'Kota Samarinda', 0),
(6474, 64, 'Kota Bontang', 0),
(6501, 65, 'Kab. Malinau', 0),
(6502, 65, 'Kab. Bulungan', 0),
(6503, 65, 'Kab. Tana Tidung', 0),
(6504, 65, 'Kab. Nunukan', 0),
(6571, 65, 'Kota Tarakan', 0),
(7101, 71, 'Kab. Bolaang Mongondow', 0),
(7102, 71, 'Kab. Minahasa', 0),
(7103, 71, 'Kab. Kepulauan Sangihe', 0),
(7104, 71, 'Kab. Kepulauan Talaud', 0),
(7105, 71, 'Kab. Minahasa Selatan', 0),
(7106, 71, 'Kab. Minahasa Utara', 0),
(7107, 71, 'Kab. Bolaang Mongondow Utara', 0),
(7108, 71, 'Kab. Siau Tagulandang Biaro', 0),
(7109, 71, 'Kab. Minahasa Tenggara', 0),
(7110, 71, 'Kab. Bolaang Mongondow Selatan', 0),
(7111, 71, 'Kab. Bolaang Mongondow Timur', 0),
(7171, 71, 'Kota Manado', 0),
(7172, 71, 'Kota Bitung', 0),
(7173, 71, 'Kota Tomohon', 0),
(7174, 71, 'Kota Kotamobagu', 0),
(7201, 72, 'Kab. Banggai Kepulauan', 0),
(7202, 72, 'Kab. Banggai', 0),
(7203, 72, 'Kab. Morowali', 0),
(7204, 72, 'Kab. Poso', 0),
(7205, 72, 'Kab. Donggala', 0),
(7206, 72, 'Kab. Toli-toli', 0),
(7207, 72, 'Kab. Buol', 0),
(7208, 72, 'Kab. Parigi Moutong', 0),
(7209, 72, 'Kab. Tojo Una-una', 0),
(7210, 72, 'Kab. Sigi', 0),
(7271, 72, 'Kota Palu', 0),
(7301, 73, 'Kab. Kepulauan Selayar', 0),
(7302, 73, 'Kab. Bulukumba', 0),
(7303, 73, 'Kab. Bantaeng', 0),
(7304, 73, 'Kab. Jeneponto', 0),
(7305, 73, 'Kab. Takalar', 0),
(7306, 73, 'Kab. Gowa', 0),
(7307, 73, 'Kab. Sinjai', 0),
(7308, 73, 'Kab. Maros', 0),
(7309, 73, 'Kab. Pangkajene Dan Kepulauan', 0),
(7310, 73, 'Kab. Barru', 0),
(7311, 73, 'Kab. Bone', 0),
(7312, 73, 'Kab. Soppeng', 0),
(7313, 73, 'Kab. Wajo', 0),
(7314, 73, 'Kab. Sidenreng Rappang', 0),
(7315, 73, 'Kab. Pinrang', 0),
(7316, 73, 'Kab. Enrekang', 0),
(7317, 73, 'Kab. Luwu', 0),
(7318, 73, 'Kab. Tana Toraja', 0),
(7322, 73, 'Kab. Luwu Utara', 0),
(7325, 73, 'Kab. Luwu Timur', 0),
(7326, 73, 'Kab. Toraja Utara', 0),
(7371, 73, 'Kota Makassar', 0),
(7372, 73, 'Kota Parepare', 0),
(7373, 73, 'Kota Palopo', 0),
(7401, 74, 'Kab. Buton', 0),
(7402, 74, 'Kab. Muna', 0),
(7403, 74, 'Kab. Konawe', 0),
(7404, 74, 'Kab. Kolaka', 0),
(7405, 74, 'Kab. Konawe Selatan', 0),
(7406, 74, 'Kab. Bombana', 0),
(7407, 74, 'Kab. Wakatobi', 0),
(7408, 74, 'Kab. Kolaka Utara', 0),
(7409, 74, 'Kab. Buton Utara', 0),
(7410, 74, 'Kab. Konawe Utara', 0),
(7471, 74, 'Kota Kendari', 0),
(7472, 74, 'Kota Baubau', 0),
(7501, 75, 'Kab. Boalemo', 0),
(7502, 75, 'Kab. Gorontalo', 0),
(7503, 75, 'Kab. Pohuwato', 0),
(7504, 75, 'Kab. Bone Bolango', 0),
(7505, 75, 'Kab. Gorontalo Utara', 0),
(7571, 75, 'Kota Gorontalo', 0),
(7601, 76, 'Kab. Majene', 0),
(7602, 76, 'Kab. Polewali Mandar', 0),
(7603, 76, 'Kab. Mamasa', 0),
(7604, 76, 'Kab. Mamuju', 0),
(7605, 76, 'Kab. Mamuju Utara', 0),
(8101, 81, 'Kab. Maluku Tenggara Barat', 0),
(8102, 81, 'Kab. Maluku Tenggara', 0),
(8103, 81, 'Kab. Maluku Tengah', 0),
(8104, 81, 'Kab. Buru', 0),
(8105, 81, 'Kab. Kepulauan Aru', 0),
(8106, 81, 'Kab. Seram Bagian Barat', 0),
(8107, 81, 'Kab. Seram Bagian Timur', 0),
(8108, 81, 'Kab. Maluku Barat Daya', 0),
(8109, 81, 'Kab. Buru Selatan', 0),
(8171, 81, 'Kota Ambon', 0),
(8172, 81, 'Kota Tual', 0),
(8201, 82, 'Kab. Halmahera Barat', 0),
(8202, 82, 'Kab. Halmahera Tengah', 0),
(8203, 82, 'Kab. Kepulauan Sula', 0),
(8204, 82, 'Kab. Halmahera Selatan', 0),
(8205, 82, 'Kab. Halmahera Utara', 0),
(8206, 82, 'Kab. Halmahera Timur', 0),
(8207, 82, 'Kab. Pulau Morotai', 0),
(8271, 82, 'Kota Ternate', 0),
(8272, 82, 'Kota Tidore Kepulauan', 0),
(9101, 91, 'Kab. Fakfak', 0),
(9102, 91, 'Kab. Kaimana', 0),
(9103, 91, 'Kab. Teluk Wondama', 0),
(9104, 91, 'Kab. Teluk Bintuni', 0),
(9105, 91, 'Kab. Manokwari', 0),
(9106, 91, 'Kab. Sorong Selatan', 0),
(9107, 91, 'Kab. Sorong', 0),
(9108, 91, 'Kab. Raja Ampat', 0),
(9109, 91, 'Kab. Tambrauw', 0),
(9110, 91, 'Kab. Maybrat', 0),
(9171, 91, 'Kota Sorong', 0),
(9401, 94, 'Kab. Merauke', 0),
(9402, 94, 'Kab. Jayawijaya', 0),
(9403, 94, 'Kab. Jayapura', 0),
(9404, 94, 'Kab. Nabire', 0),
(9408, 94, 'Kab. Kepulauan Yapen', 0),
(9409, 94, 'Kab. Biak Numfor', 0),
(9410, 94, 'Kab. Paniai', 0),
(9411, 94, 'Kab. Puncak Jaya', 0),
(9412, 94, 'Kab. Mimika', 0),
(9413, 94, 'Kab. Boven Digoel', 0),
(9414, 94, 'Kab. Mappi', 0),
(9415, 94, 'Kab. Asmat', 0),
(9416, 94, 'Kab. Yahukimo', 0),
(9417, 94, 'Kab. Pegunungan Bintang', 0),
(9418, 94, 'Kab. Tolikara', 0),
(9419, 94, 'Kab. Sarmi', 0),
(9420, 94, 'Kab. Keerom', 0),
(9426, 94, 'Kab. Waropen', 0),
(9427, 94, 'Kab. Supiori', 0),
(9428, 94, 'Kab. Mamberamo Raya', 0),
(9429, 94, 'Kab. Nduga', 0),
(9430, 94, 'Kab. Lanny Jaya', 0),
(9431, 94, 'Kab. Mamberamo Tengah', 0),
(9432, 94, 'Kab. Yalimo', 0),
(9433, 94, 'Kab. Puncak', 0),
(9434, 94, 'Kab. Dogiyai', 0),
(9435, 94, 'Kab. Intan Jaya', 0),
(9436, 94, 'Kab. Deiyai', 0),
(9471, 94, 'Kota Jayapura', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_gamis`
--

CREATE TABLE `kategori_gamis` (
  `IDKategori` int(11) NOT NULL,
  `namaKategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_gamis`
--

INSERT INTO `kategori_gamis` (`IDKategori`, `namaKategori`) VALUES
(1, 'Gamis Anak Aini Sett'),
(2, 'Gamis Anak Anggita Set'),
(3, 'Gamis Anak Rahadian Set'),
(4, 'Gamis Anak Shofiya Set'),
(5, 'Gamis Dewasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `foto_user` varchar(200) NOT NULL,
  `id_session` varchar(200) NOT NULL,
  `type` enum('admin','member') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `namalengkap`, `alamat`, `kota`, `provinsi`, `foto_user`, `id_session`, `type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', '', 'jitfqqm2m1irgs5le58kqvckn6', 'admin'),
(2, 'irfan', '24b90bc48a67ac676228385a7c71a119', 'muhammad irfan', '', '', '', '', 'h6ae308hocqlfpnv6jf037on70', 'admin'),
(3, 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member baru', 'klaten', 'klaten', 'jawa tengah', '', 'vulec56h7g36rsj88bduej8d42', 'member'),
(4, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin2', 'klaten', '', '', '', '', 'admin'),
(6, 'member2', 'member2', 'member2', 'yogya', 'yogya', '', '', '', 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `provinsiId` tinyint(4) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `StatusOrder` enum('Free','Order','Lunas') NOT NULL,
  `password` varchar(60) NOT NULL,
  `id_session` varchar(200) NOT NULL,
  `Namalengkap` varchar(50) NOT NULL,
  `kabupatenId` int(6) NOT NULL,
  `kelamin` enum('laki','perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `username`, `alamat`, `provinsiId`, `kodepos`, `email`, `no_telp`, `StatusOrder`, `password`, `id_session`, `Namalengkap`, `kabupatenId`, `kelamin`) VALUES
(65, 'siska', 'jalan aja dulu', 11, 55291, 'siska@gmail.com', '08976867563', 'Order', '73d5b670b984115b497e9fa72cf03139', 'kbhvt92e53kagtti50gv900ot0', 'siska putri', 1110, 'perempuan'),
(66, 'arum', 'Jetis Titromulyo Kre', 34, 55772, 'arum@gmail.com', '085878927049', 'Lunas', '7a9d79fe733339ec02c8ea5c2e3c8349', 'la1holgtu02kepi17aheo89kj7', 'arum', 3402, 'perempuan'),
(67, 'ayuk18', 'sini', 62, 3254, 'ayuk@gmail.com', '0988554335', 'Order', 'ef4477b4328ef5fdb9298662d9893238', '', 'ayuk', 6206, 'laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdata`
--

CREATE TABLE `orderdata` (
  `IDOrder` int(8) NOT NULL,
  `id_member` int(11) NOT NULL,
  `TanggalOrder` date NOT NULL,
  `StatusOrder` enum('baru','pesan','lunas') NOT NULL,
  `unik_transfer` varchar(20) NOT NULL,
  `jam` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderdata`
--

INSERT INTO `orderdata` (`IDOrder`, `id_member`, `TanggalOrder`, `StatusOrder`, `unik_transfer`, `jam`) VALUES
(16, 65, '2019-07-12', 'pesan', '3', '03:43:57'),
(15, 67, '2019-07-12', 'pesan', '8', '03:42:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `provinsiId` int(4) NOT NULL,
  `provinsiNama` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`provinsiId`, `provinsiNama`) VALUES
(11, 'Aceh'),
(12, 'Sumatera Utara'),
(13, 'Sumatera Barat'),
(14, 'Riau'),
(15, 'Jambi'),
(16, 'Sumatera Selatan'),
(17, 'Bengkulu'),
(18, 'Lampung'),
(19, 'Kepulauan Bangka Belitung'),
(21, 'Kepulauan Riau'),
(31, 'Dki Jakarta'),
(32, 'Jawa Barat'),
(33, 'Jawa Tengah'),
(34, 'Di Yogyakarta'),
(35, 'Jawa Timur'),
(36, 'Banten'),
(51, 'Bali'),
(52, 'Nusa Tenggara Barat'),
(53, 'Nusa Tenggara Timur'),
(61, 'Kalimantan Barat'),
(62, 'Kalimantan Tengah'),
(63, 'Kalimantan Selatan'),
(64, 'Kalimantan Timur'),
(65, 'Kalimantan Utara'),
(71, 'Sulawesi Utara'),
(72, 'Sulawesi Tengah'),
(73, 'Sulawesi Selatan'),
(74, 'Sulawesi Tenggara'),
(75, 'Gorontalo'),
(76, 'Sulawesi Barat'),
(81, 'Maluku'),
(82, 'Maluku Utara'),
(91, 'Papua Barat'),
(94, 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `ID` int(11) NOT NULL,
  `SessionId` varchar(50) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `JumlahBeli` int(11) NOT NULL,
  `TanggalOrder` date NOT NULL,
  `jam` time NOT NULL,
  `ip_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailorder`
--
ALTER TABLE `detailorder`
  ADD PRIMARY KEY (`IDOrderDetail`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `gamis`
--
ALTER TABLE `gamis`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `IDKategori` (`IDKategori`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`kabupatenId`);

--
-- Indexes for table `kategori_gamis`
--
ALTER TABLE `kategori_gamis`
  ADD PRIMARY KEY (`IDKategori`),
  ADD KEY `IDKategori` (`IDKategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `kabupatenId` (`kabupatenId`);

--
-- Indexes for table `orderdata`
--
ALTER TABLE `orderdata`
  ADD PRIMARY KEY (`IDOrder`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`provinsiId`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `ISBN` (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailorder`
--
ALTER TABLE `detailorder`
  MODIFY `IDOrderDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gamis`
--
ALTER TABLE `gamis`
  MODIFY `id_produk` int(20) NOT NULL AUTO_INCREMENT COMMENT 'ISBN', AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `kabupatenId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9472;
--
-- AUTO_INCREMENT for table `kategori_gamis`
--
ALTER TABLE `kategori_gamis`
  MODIFY `IDKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `orderdata`
--
ALTER TABLE `orderdata`
  MODIFY `IDOrder` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `provinsiId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailorder`
--
ALTER TABLE `detailorder`
  ADD CONSTRAINT `detailorder_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `gamis` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gamis`
--
ALTER TABLE `gamis`
  ADD CONSTRAINT `gamis_ibfk_1` FOREIGN KEY (`IDKategori`) REFERENCES `kategori_gamis` (`IDKategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
