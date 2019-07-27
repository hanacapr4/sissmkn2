-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 05:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtempfix`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_elearning`
--

CREATE TABLE `data_elearning` (
  `id_elearning` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `deskripsi` text COLLATE latin1_general_ci NOT NULL,
  `nama_file` text COLLATE latin1_general_ci NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `idpel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nip` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `data_elearning`
--

INSERT INTO `data_elearning` (`id_elearning`, `judul`, `deskripsi`, `nama_file`, `tanggal_upload`, `idpel`, `id_kelas`, `nip`) VALUES
('DE-00004', 'Manual Testing 1', 'qwerty', 'CV.pdf', '2019-07-06 18:11:44', 165002, 2, '3'),
('DE-00003', 'Manual Testing 1', 'qwerty', 'CV.pdf', '2019-07-06 18:09:37', 165001, 1, '1'),
('DE-00001', 'Manual Testing 1', 'qwerty', 'Global CV.pdf', '2019-07-01 19:32:37', 165004, 1, '3'),
('DE-00002', 'Manual Testing 1', 'qweryu', '261676.pdf', '2019-07-01 19:48:57', 165005, 1, '4'),
('DE-00005', 'Ini Modul', 'Modulnya ya', 'Transkip Nilai.pdf', '2019-07-06 17:38:19', 165002, 1, '4'),
('DE-00006', 'Modul Saya', 'Ini Modul Saya', 'Paper Web Crawler.doc', '2019-07-16 14:24:10', 165002, 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_siswa`
--

CREATE TABLE `jawaban_siswa` (
  `id_jawaban_siswa` int(100) NOT NULL,
  `id_ujian_online` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_induk` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `id_ujian_online_detail` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jawaban` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `jawaban_siswa`
--

INSERT INTO `jawaban_siswa` (`id_jawaban_siswa`, `id_ujian_online`, `no_induk`, `id_ujian_online_detail`, `jawaban`) VALUES
(22, 'UO-00002', '0013223952', '6', 'iya dong'),
(21, 'UO-00002', '0013223952', '8', 'embohhh'),
(23, 'UO-00004', '0010881115', '11', 'awwwaaa'),
(24, 'UO-00004', '0010881115', '11', 'qq'),
(25, 'UO-00001', '0010881115', '3', 'tes'),
(26, 'UO-00001', '0010881115', '2', 'awa'),
(27, 'UO-00005', '0010881115', '15', 'hai'),
(28, 'UO-00007', '0013223952', '20', 'gg'),
(29, 'UO-00006', '0013223952', '18', 'jjj'),
(30, 'UO-00008', '0010881115', '21', 'tes'),
(31, 'UO-00008', '0010881115', '22', 'ass');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ujian`
--

CREATE TABLE `nilai_ujian` (
  `id_nilai_ujian` int(11) NOT NULL,
  `id_ujian_online` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_induk` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nilai_total` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `nilai_pg` int(11) NOT NULL,
  `nilai_isi` int(11) DEFAULT NULL,
  `status_nilai` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `nilai_ujian`
--

INSERT INTO `nilai_ujian` (`id_nilai_ujian`, `id_ujian_online`, `no_induk`, `nilai_total`, `nilai_pg`, `nilai_isi`, `status_nilai`) VALUES
(8, 'UO-00002', '0013223952', '90', 100, 80, 'sudah'),
(14, 'UO-00004', '0010881115', '50', 0, 100, 'sudah'),
(15, 'UO-00001', '0010881115', 'kosong', 0, NULL, NULL),
(16, 'UO-00005', '0010881115', '83.5', 67, 100, 'sudah'),
(20, 'UO-00007', '0013223952', '50', 0, 100, 'sudah'),
(22, 'UO-00006', '0013223952', '50', 50, NULL, NULL),
(23, 'UO-00008', '0010881115', '100', 0, 100, 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `t_absbln`
--

CREATE TABLE `t_absbln` (
  `nomer` int(4) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `no_induk` varchar(15) DEFAULT NULL,
  `tglabsen` date DEFAULT NULL,
  `1` char(1) DEFAULT NULL,
  `2` char(1) DEFAULT NULL,
  `3` char(1) DEFAULT NULL,
  `4` char(1) DEFAULT NULL,
  `5` char(1) DEFAULT NULL,
  `6` char(1) DEFAULT NULL,
  `7` char(1) DEFAULT NULL,
  `8` char(1) DEFAULT NULL,
  `9` char(1) DEFAULT NULL,
  `10` char(1) DEFAULT NULL,
  `11` char(1) DEFAULT NULL,
  `12` char(1) DEFAULT NULL,
  `13` char(1) DEFAULT NULL,
  `14` char(1) DEFAULT NULL,
  `15` char(1) DEFAULT NULL,
  `16` char(1) NOT NULL,
  `17` char(1) DEFAULT NULL,
  `18` char(1) DEFAULT NULL,
  `19` char(1) DEFAULT NULL,
  `20` char(1) DEFAULT NULL,
  `21` char(1) DEFAULT NULL,
  `22` char(1) DEFAULT NULL,
  `23` char(1) DEFAULT NULL,
  `24` char(1) DEFAULT NULL,
  `25` char(1) DEFAULT NULL,
  `26` char(1) DEFAULT NULL,
  `27` char(1) DEFAULT NULL,
  `28` char(1) DEFAULT NULL,
  `29` char(1) DEFAULT NULL,
  `30` char(1) DEFAULT NULL,
  `31` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_absensi`
--

CREATE TABLE `t_absensi` (
  `idabsen` int(10) NOT NULL,
  `no_induk` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `stabsen` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tglabsen` date DEFAULT NULL,
  `terlambat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Datang` time DEFAULT NULL,
  `Pulang` time DEFAULT NULL,
  `Alasan` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `GuruPiket` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_absensi`
--

INSERT INTO `t_absensi` (`idabsen`, `no_induk`, `stabsen`, `tglabsen`, `terlambat`, `Datang`, `Pulang`, `Alasan`, `GuruPiket`, `kelas`, `id_kelas`) VALUES
(73, '0013223598', 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 4),
(72, '0013223802', 'A', '2019-02-13', '', NULL, NULL, '', '', NULL, 5),
(71, '0013223802', 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 5),
(70, '0013224881', 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 5),
(65, '0013179018', 'M', '2019-02-11', NULL, '12:41:54', NULL, NULL, NULL, NULL, NULL),
(66, '0010729490', 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 1),
(67, '0010881115', 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 1),
(68, '0013223952', 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 2),
(69, '0010864827', 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 4),
(58, '0013179018', 'M', '2019-02-09', NULL, '15:47:43', '15:48:52', NULL, NULL, NULL, NULL),
(59, '0013223598', 'M', '2019-02-09', NULL, '15:47:45', '15:48:54', NULL, NULL, NULL, 4),
(57, '0010881115', 'M', '2019-02-09', NULL, '15:47:40', '15:48:50', NULL, NULL, NULL, 1),
(56, '0013223952', 'M', '2019-02-09', NULL, '15:47:36', '15:48:44', NULL, NULL, NULL, NULL),
(51, '0013224080', 'M', '2019-02-09', NULL, '15:47:16', '15:48:06', NULL, NULL, NULL, NULL),
(52, '0013224881', 'M', '2019-02-09', NULL, '15:47:18', '15:48:15', NULL, NULL, NULL, NULL),
(53, '0013223802', 'M', '2019-02-09', NULL, '15:47:21', '15:48:22', NULL, NULL, NULL, NULL),
(60, '0013178123', 'M', '2019-02-09', NULL, '15:50:05', '15:50:17', NULL, NULL, NULL, NULL),
(55, '0010864827', 'M', '2019-02-09', NULL, '15:47:32', '15:48:29', NULL, NULL, NULL, NULL),
(75, '0013178123', 'A', '2019-02-15', '-', NULL, NULL, '-', 'inas', NULL, 3),
(50, '0010729490', 'M', '2019-02-09', NULL, '15:47:13', '15:47:57', NULL, NULL, NULL, 1),
(76, '0013179018', 'M', '2019-03-01', NULL, '14:42:13', NULL, NULL, NULL, NULL, NULL),
(77, '0013178123', 'M', '2019-03-01', NULL, '14:42:20', NULL, NULL, NULL, NULL, NULL),
(78, '0013223598', 'M', '2019-03-01', NULL, '14:42:26', NULL, NULL, NULL, NULL, 4),
(79, '0013223802', 'M', '2019-03-01', NULL, '14:42:32', '14:44:47', NULL, NULL, NULL, NULL),
(80, '0013223952', 'M', '2019-03-01', NULL, '14:42:42', '14:44:43', NULL, NULL, NULL, NULL),
(81, '0013223802', 'M', '2019-03-01', NULL, '14:42:59', '14:44:47', NULL, NULL, NULL, NULL),
(82, '0013223802', 'M', '2019-04-29', NULL, '17:24:37', NULL, NULL, NULL, NULL, NULL),
(83, '0013223952', 'M', '2019-04-29', NULL, '17:24:43', NULL, NULL, NULL, NULL, NULL),
(84, '0013223952', 'M', '2019-04-29', NULL, '17:37:23', NULL, NULL, NULL, NULL, NULL),
(85, '0013223802', 'M', '2019-04-29', NULL, '17:37:43', NULL, NULL, NULL, NULL, NULL),
(86, '0013223598', 'M', '2019-04-29', NULL, '17:43:53', NULL, NULL, NULL, NULL, NULL),
(87, '0013223598', 'M', '2019-04-29', NULL, '17:44:09', NULL, NULL, NULL, NULL, NULL),
(88, '0013179018', 'M', '2019-05-09', NULL, '14:42:04', '14:52:45', NULL, NULL, NULL, NULL),
(89, '0013223802', 'M', '2019-05-09', NULL, '14:42:08', '14:52:37', NULL, NULL, NULL, NULL),
(90, '0010881115', 'M', '2019-05-09', NULL, '14:42:48', '14:52:29', NULL, NULL, NULL, NULL),
(91, '0013223598', 'M', '2019-05-09', NULL, '14:42:57', '14:52:14', NULL, NULL, NULL, NULL),
(92, '0010864827', 'M', '2019-05-09', NULL, '14:43:06', '14:52:42', NULL, NULL, NULL, NULL),
(93, '0013179018', 'M', '2019-05-09', NULL, '14:45:46', '14:52:45', NULL, NULL, NULL, NULL),
(94, '0013223802', 'M', '2019-05-09', NULL, '14:47:47', '14:52:37', NULL, NULL, NULL, NULL),
(95, '0013223952', 'M', '2019-05-09', NULL, '14:47:53', '14:52:08', NULL, NULL, NULL, NULL),
(96, '0013223952', 'M', '2019-05-11', NULL, '19:41:16', '19:41:33', NULL, NULL, NULL, NULL),
(97, '0010729490', 'M', '2019-06-22', NULL, '15:23:59', '15:24:49', NULL, NULL, NULL, NULL),
(98, '0013178123', 'M', '2019-06-22', NULL, '15:24:03', '15:25:13', NULL, NULL, NULL, NULL),
(99, '0013179018', 'M', '2019-06-22', NULL, '15:24:07', '15:25:11', NULL, NULL, NULL, NULL),
(100, '0010864827', 'M', '2019-06-22', NULL, '15:24:12', '15:25:07', NULL, NULL, NULL, NULL),
(101, '0010881115', 'M', '2019-06-22', NULL, '15:24:15', '15:25:05', NULL, NULL, NULL, NULL),
(102, '0013223598', 'M', '2019-06-22', NULL, '15:24:19', '15:25:02', NULL, NULL, NULL, NULL),
(103, '0013223952', 'M', '2019-06-22', NULL, '15:24:21', '15:25:16', NULL, NULL, NULL, NULL),
(104, '0013224080', 'M', '2019-06-22', NULL, '15:24:24', '15:24:59', NULL, NULL, NULL, NULL),
(105, '0013224881', 'M', '2019-06-22', NULL, '15:24:27', '15:24:56', NULL, NULL, NULL, NULL),
(106, '0013223802', 'M', '2019-06-22', NULL, '15:24:31', '15:24:53', NULL, NULL, NULL, NULL),
(107, '0013224080', 'M', '2019-06-23', NULL, '12:31:15', '12:32:09', NULL, NULL, NULL, NULL),
(108, '0013223598', 'M', '2019-06-23', NULL, '12:31:18', '12:32:07', NULL, NULL, NULL, NULL),
(109, '0010881115', 'M', '2019-06-23', NULL, '12:31:21', '12:32:05', NULL, NULL, NULL, NULL),
(110, '0010864827', 'M', '2019-06-23', NULL, '12:31:23', '12:32:02', NULL, NULL, NULL, NULL),
(111, '0013179018', 'M', '2019-06-23', NULL, '12:31:25', '12:32:00', NULL, NULL, NULL, NULL),
(112, '0013178123', 'M', '2019-06-23', NULL, '12:31:28', '12:31:57', NULL, NULL, NULL, NULL),
(113, '0013223952', 'M', '2019-06-23', NULL, '12:31:30', '12:31:55', 'datang tepat waktu', 'inas', NULL, NULL),
(114, '0013223802', 'M', '2019-06-23', NULL, '12:31:32', '12:31:52', NULL, NULL, NULL, NULL),
(115, '0010729490', 'M', '2019-06-23', NULL, '12:31:34', '12:31:50', NULL, NULL, NULL, NULL),
(116, '0013224881', 'M', '2019-06-23', NULL, '12:31:36', '12:31:47', NULL, NULL, NULL, NULL),
(117, '0013224080', 'M', '2019-06-24', NULL, '10:38:33', '10:39:27', NULL, NULL, NULL, NULL),
(118, '0013223598', 'M', '2019-06-24', NULL, '10:38:37', '10:39:24', NULL, NULL, NULL, NULL),
(119, '0010881115', 'M', '2019-06-24', NULL, '10:38:40', '10:39:22', NULL, NULL, NULL, NULL),
(120, '0010864827', 'M', '2019-06-24', NULL, '10:38:43', '10:39:19', NULL, NULL, NULL, NULL),
(121, '0013223802', 'M', '2019-06-24', NULL, '10:38:54', '10:39:16', NULL, NULL, NULL, NULL),
(122, '0010729490', 'M', '2019-06-24', NULL, '10:38:57', '10:39:13', NULL, NULL, NULL, NULL),
(123, '0013224881', 'M', '2019-06-24', NULL, '10:38:59', '10:39:11', NULL, NULL, NULL, NULL),
(124, '0013179018', 'S', '2019-06-24', '-', NULL, NULL, 'Sakit Perut', 'Inas', NULL, 3),
(125, '0013178123', 'I', '2019-06-24', '-', NULL, NULL, 'Acara Keluarga', 'Inas', NULL, 3),
(126, '0013223952', 'A', '2019-06-24', '-', NULL, NULL, '-', 'inas', NULL, 2),
(127, '0013223952', 'M', '2019-06-26', NULL, '11:36:54', '11:37:28', NULL, NULL, NULL, NULL),
(128, '0013224881', 'M', '2019-06-26', NULL, '11:37:01', '11:37:47', NULL, NULL, NULL, NULL),
(129, '0010729490', 'M', '2019-06-26', NULL, '11:37:03', '11:37:45', NULL, NULL, NULL, NULL),
(130, '0013223802', 'M', '2019-06-26', NULL, '11:37:06', '11:37:43', NULL, NULL, NULL, NULL),
(131, '0010864827', 'M', '2019-06-26', NULL, '11:37:08', '11:37:42', NULL, NULL, NULL, NULL),
(132, '0010881115', 'M', '2019-06-26', NULL, '11:37:10', '11:37:40', NULL, NULL, NULL, NULL),
(133, '0013223598', 'M', '2019-06-26', NULL, '11:37:14', '11:37:38', NULL, NULL, NULL, NULL),
(134, '0013224080', 'M', '2019-06-26', NULL, '11:37:16', '11:37:35', NULL, NULL, NULL, NULL),
(135, '0013179018', 'M', '2019-06-26', NULL, '11:37:18', '11:37:33', NULL, NULL, NULL, NULL),
(136, '0013178123', 'M', '2019-06-26', NULL, '11:37:20', '11:37:30', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `idajar` int(11) NOT NULL,
  `nip` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `program` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `jampel` tinyint(4) DEFAULT NULL,
  `sem` tinyint(4) DEFAULT NULL,
  `th_ajar` varchar(12) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `agama` varchar(12) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `hari` varchar(6) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `jam_ke` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `jam_pel` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ruang` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jadwal`
--

INSERT INTO `t_jadwal` (`idajar`, `nip`, `nama`, `kelas`, `pel`, `program`, `jampel`, `sem`, `th_ajar`, `agama`, `hari`, `jam_ke`, `jam_pel`, `ruang`, `tgl_update`) VALUES
(1, '11235', 'Hana Catur', '1', 'Tata Boga', 'TEKNIK KOMPUTASI JARINGAN', 0, 1, '2018/2019', '', 'Senin', '0', '0', '', '0000-00-00 00:00:00'),
(2, '11235', 'Hana Catur', '2', 'Tata Boga', 'DESAIN KOMUNIKASI VISUAL', 0, 1, '2018/2019', '', 'Senin', '3', '2', '', '0000-00-00 00:00:00'),
(3, '11237', 'Abdullah Pedrick', '1', 'Komputasi Jaringan', 'TEKNIK KOMPUTASI JARINGAN', 0, 2, '', '', '0', '0', '0', '', '0000-00-00 00:00:00'),
(4, '11235', 'Hana Catur', '1', 'Tata Boga', 'TEKNIK KOMPUTASI JARINGAN', 0, 1, '', '', 'Senin', '7', '2', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_jurnal`
--

CREATE TABLE `t_jurnal` (
  `id_jurnal` int(10) NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `thajar` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `kegiatan` text COLLATE latin1_general_ci NOT NULL,
  `sdh_blm` enum('S','B') COLLATE latin1_general_ci NOT NULL DEFAULT 'B',
  `ket` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_jurnal`
--

INSERT INTO `t_jurnal` (`id_jurnal`, `userid`, `thajar`, `nama`, `hari`, `tgl`, `kelas`, `jam_mulai`, `jam_selesai`, `kegiatan`, `sdh_blm`, `ket`) VALUES
(450, 3, '2017/2018', 'Gery', 'Minggu', '2019-02-04', '10 TKJ 1', '23:17:27', '23:17:27', 'Hheheheh', 'B', 'Tugas'),
(451, 4, '2017/2018', 'Hana', 'Jumat', '2019-02-08', 'xii tkj 2', '15:35:39', '15:35:39', 'Belajar Ngoding', 'S', 'Tugas'),
(452, 212, '2018/2019', 'Pedrik', 'Sabtu', '2019-02-09', 'x pr 1', '14:38:02', '14:38:02', 'gfd', 'S', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `t_kelas`
--

CREATE TABLE `t_kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_prog` int(11) NOT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tingkat` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `program` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ruang` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ketua` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `masuk` varchar(8) COLLATE latin1_general_ci DEFAULT NULL,
  `guru_bk` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `profil` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_kelas`
--

INSERT INTO `t_kelas` (`id_kelas`, `id_prog`, `kelas`, `tingkat`, `program`, `ruang`, `ketua`, `masuk`, `guru_bk`, `th_ajar`, `profil`) VALUES
(1, 1, '10 TKJ 1', '', 'TKJ', '1', '', '', '', '2018/2019', ''),
(2, 1, '11 TKJ 2', '', 'TKJ', '2', '', '', '', '2018/2019', ''),
(3, 1, '12 TKJ 3', '', 'TKJ', '3', '', '', '', '2018/2019', ''),
(4, 3, '10 KPR 1', '', 'KPR', '4', '', '', '', '2018/2019', ''),
(5, 3, '11 KPR 2', '', 'KPR', '5', '', '', '', '2017/2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_member`
--

CREATE TABLE `t_member` (
  `userid` int(10) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci DEFAULT '',
  `tgllahir` varchar(12) COLLATE latin1_general_ci DEFAULT '',
  `kelamin` char(1) COLLATE latin1_general_ci DEFAULT '',
  `kerja` varchar(20) COLLATE latin1_general_ci DEFAULT '',
  `alamat` varchar(200) COLLATE latin1_general_ci DEFAULT '',
  `negara` char(3) COLLATE latin1_general_ci DEFAULT '',
  `telp` varchar(30) COLLATE latin1_general_ci DEFAULT '',
  `sekolah` varchar(50) COLLATE latin1_general_ci DEFAULT '',
  `homepage` varchar(100) COLLATE latin1_general_ci DEFAULT '',
  `profil` text COLLATE latin1_general_ci,
  `username` varchar(100) COLLATE latin1_general_ci DEFAULT '',
  `password` varchar(100) COLLATE latin1_general_ci DEFAULT '',
  `email` varchar(60) COLLATE latin1_general_ci DEFAULT '',
  `pengingat` char(1) COLLATE latin1_general_ci DEFAULT '',
  `jawaban` varchar(30) COLLATE latin1_general_ci DEFAULT '',
  `kategori` char(2) COLLATE latin1_general_ci DEFAULT '',
  `status` char(1) COLLATE latin1_general_ci DEFAULT '',
  `tgl_login` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `nis` varchar(50) COLLATE latin1_general_ci DEFAULT '',
  `id_nominasi` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT '',
  `ket` varchar(10) COLLATE latin1_general_ci DEFAULT '',
  `stblog` char(1) COLLATE latin1_general_ci DEFAULT '0',
  `kunjungblog` int(10) DEFAULT '1',
  `point` int(11) DEFAULT '0',
  `editor` enum('Y','N') COLLATE latin1_general_ci DEFAULT 'N',
  `stlogin` varchar(1) COLLATE latin1_general_ci DEFAULT '0',
  `totlogin` int(11) DEFAULT '0',
  `ip` varchar(16) COLLATE latin1_general_ci DEFAULT NULL,
  `stprofil` varchar(4) COLLATE latin1_general_ci DEFAULT 'open',
  `setfacebook` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `akses` int(5) DEFAULT NULL,
  `pelanggaran` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `mclass` int(1) DEFAULT '0' COMMENT '0=siswa, 1=guru, 2=kepsek',
  `bg_cover` int(5) DEFAULT '0',
  `bg_profile` int(5) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_member`
--

INSERT INTO `t_member` (`userid`, `nama`, `tgllahir`, `kelamin`, `kerja`, `alamat`, `negara`, `telp`, `sekolah`, `homepage`, `profil`, `username`, `password`, `email`, `pengingat`, `jawaban`, `kategori`, `status`, `tgl_login`, `nis`, `id_nominasi`, `kelas`, `ket`, `stblog`, `kunjungblog`, `point`, `editor`, `stlogin`, `totlogin`, `ip`, `stprofil`, `setfacebook`, `akses`, `pelanggaran`, `mclass`, `bg_cover`, `bg_profile`) VALUES
(1, 'Hana', '1998-04-04', 'P', 'Guru', 'Malang', 'Ind', '085646500831', 'Pandaan', 'smkn2.sch.id', 'Hana Aprilia', 'hanaca', 'hanaca', 'aprili.hanna95@gmail.com', '-', '-', '-', 'G', '2019-01-18 08:23:28', '163140914111051', NULL, '12 IPA 1', '-', '0', 1, 0, 'N', '0', 0, NULL, 'open', NULL, NULL, NULL, 0, 0, 0),
(2, 'Pedrik', '1999-01-30', 'L', 'Guru', 'Lampung', 'Ind', '', '', '', NULL, '', '', '', '', '', '', '', '2019-01-20 05:15:31', '', NULL, '', '', '0', 1, 0, 'N', '0', 0, NULL, 'open', NULL, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_pelajaran`
--

CREATE TABLE `t_pelajaran` (
  `kode_pel` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `idpel` int(11) NOT NULL,
  `pelajaran` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `program` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tingkat` tinyint(2) DEFAULT NULL,
  `jam_pel` tinyint(2) DEFAULT NULL,
  `semester` tinyint(2) DEFAULT NULL,
  `X1` tinyint(2) DEFAULT NULL,
  `X2` tinyint(2) DEFAULT NULL,
  `XI1` tinyint(2) DEFAULT NULL,
  `XI2` tinyint(2) DEFAULT NULL,
  `XII1` tinyint(2) DEFAULT NULL,
  `XII2` tinyint(2) DEFAULT NULL,
  `pengajar` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `id_pel_jenis` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `id_pel_sub` tinyint(4) DEFAULT NULL,
  `id_pel_pel` tinyint(4) DEFAULT NULL,
  `produktif` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `Tingkat1` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `Tingkat2` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `Tingkat3` varchar(12) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `t_pelajaran`
--

INSERT INTO `t_pelajaran` (`kode_pel`, `idpel`, `pelajaran`, `pel`, `program`, `tingkat`, `jam_pel`, `semester`, `X1`, `X2`, `XI1`, `XI2`, `XII1`, `XII2`, `pengajar`, `jenis`, `th_ajar`, `id_pel_jenis`, `id_pel_sub`, `id_pel_pel`, `produktif`, `Tingkat1`, `Tingkat2`, `Tingkat3`) VALUES
('2', 165002, 'Komputasi Jaringan', 'Jaringan', 'TEKNIK KOMPUTASI JARINGAN', 3, 7, 3, 0, 0, 0, 0, 0, 0, '', '0', '2018/2019', '', 0, 0, '', '', '', ''),
('1', 165001, 'Jaringan', 'Jaringan', 'TEKNIK KOMPUTASI JARINGAN', 2, 0, 3, 0, 0, 0, 0, 0, 0, '', '', '2018/2019', '', 0, 0, '', '', '', ''),
('3', 165004, 'Tata Boga', 'Tata Boga', 'PARIWISATA', 1, 2, 2, 2, 1, 0, 0, 0, 0, 'Hana Catur', '0', '2018/2019', '', 0, 0, '', '', '', ''),
('4', 165005, 'Bahasa Inggris', 'Bahasa Inggris', '', 1, 0, 2, 1, 0, 0, 0, 0, 0, 'Mauliddinna', '0', '2018/2019', '', 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_pelaj_jadwal`
--

CREATE TABLE `t_pelaj_jadwal` (
  `id_pelaj_jadwal` int(10) NOT NULL,
  `nip` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `hari` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `jam_ke` tinyint(4) DEFAULT NULL,
  `shift` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `pelajaran` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sem` tinyint(4) DEFAULT NULL,
  `th_ajar` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pelaj_jadwal`
--

INSERT INTO `t_pelaj_jadwal` (`id_pelaj_jadwal`, `nip`, `hari`, `jam_ke`, `shift`, `kelas`, `pelajaran`, `sem`, `th_ajar`) VALUES
(111, 'gery ganteng', 'senin', 1, 'pagi', 'TKJ1', 'Komputasi Jaringan', 1, '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `t_programahli`
--

CREATE TABLE `t_programahli` (
  `idprog` int(11) NOT NULL,
  `program` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `program_lngkap` text COLLATE latin1_general_ci NOT NULL,
  `bidangstudi` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `programstudi` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `kompetensi` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `kode` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `bidangahli` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `programahli` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `paketahli` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_programahli`
--

INSERT INTO `t_programahli` (`idprog`, `program`, `program_lngkap`, `bidangstudi`, `programstudi`, `kompetensi`, `kode`, `th_ajar`, `bidangahli`, `programahli`, `paketahli`, `nama`, `tanggal_update`) VALUES
(1, 'TKJ', 'TKJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-13 22:17:37'),
(2, 'PS', 'PS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-13 09:59:02'),
(3, 'KPR', 'KPR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-13 09:59:17'),
(4, 'JSB', 'JSB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-13 22:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `t_ruang`
--

CREATE TABLE `t_ruang` (
  `id` int(10) NOT NULL,
  `kode` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `gedung` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `penanggung_jawab` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `profil` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `thajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_ruang`
--

INSERT INTO `t_ruang` (`id`, `kode`, `nama`, `gedung`, `penanggung_jawab`, `jenis`, `profil`, `thajar`) VALUES
(1, 'LabKom1', 'Lab Komputer', 'AA', 'Pedrik', '', 'bebe', '2018/2019'),
(4, 'LabJar', 'Laboratorium Jaringan 1', 'C', '', '', '', '2018/2019'),
(6, 'LabIPA', 'Laboratorium IPA', 'A', '', '', '', '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa`
--

CREATE TABLE `t_siswa` (
  `user_id` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ind_prog` int(4) DEFAULT NULL,
  `kode_prog` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `nama` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nma_pnggln` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nisn` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_no_psrta_unas` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sttb_tgl` date DEFAULT NULL,
  `sttb` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `nem_tgl` date DEFAULT NULL,
  `nem` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` varchar(120) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_rt` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_rw` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_lurah` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_camat` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_kodya` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_prop` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_tinggal` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_kec_tngl` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_kab_tngl` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_tggal_dgn` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_jrak_ke_skul` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `telp` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `kelamin` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `tmp_lahir` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  `sis_tmt_dri` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_lma_blajar` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndahn_seklah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndahn_alasan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_kelas` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_bdng_khlian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_prog_khlian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_komp_khlian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_tgl` date DEFAULT NULL,
  `wali` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_ktp` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_tmpt_lhir` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_tgl_lhir` date DEFAULT NULL,
  `wali_agama` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_kwarganegraan` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_pndidikan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_pkrjaan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_pnghasilan_bln` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_almat` varchar(120) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_tlp` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `hub_wali_siswa` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_ktp` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_tmpt_lhir` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_tgl_lhir` date DEFAULT NULL,
  `ibu_agama` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_kwarganegraan` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_pndidikan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_pkrjaan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_pnghasilan_bln` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_almat` varchar(120) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_tlp` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_status` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ayah` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `ayah_ktp` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_tmpt_lhir` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_tgl_lhir` date DEFAULT NULL,
  `ayh_agama` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_kwarganegraan` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_pndidikan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_pkrjaan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_pnghasilan_bln` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_almat` varchar(120) COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_tlp` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_status` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kwarganegraan` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_anak_ke` tinyint(4) DEFAULT NULL,
  `sis_jml_sdr_kndung` tinyint(4) DEFAULT NULL,
  `sis_jml_sdr_tiri` tinyint(4) DEFAULT NULL,
  `sis_jml_sdr_angkat` tinyint(4) DEFAULT NULL,
  `sis_status` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_bhs_shari_hri` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_gol_darah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_penyakit` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kel_jasmani` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_tinggi_berat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_ksenian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_olahrga` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kmasyaraktn` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_organisasi` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_hobby` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_cita2` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_lain2` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `rumah_kondisi` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `rumah_fisik` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `prestasi` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `alat_transport` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kps` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kip` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kks` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nokk` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nik` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_beasiswa` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndah_seklah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndah_alsn` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_luls_thn` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_luls_ijazah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_luls_skhu` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_lnjut_ke` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_krja_tgl` date DEFAULT NULL,
  `sis_krja_tmpt` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_krja_pnghsilan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ijz_fc_lg` tinyint(2) DEFAULT NULL,
  `ijz_fc_bs` tinyint(2) DEFAULT NULL,
  `skhun_fc_lg` smallint(6) DEFAULT NULL,
  `skhun_fc_bs` tinyint(2) DEFAULT NULL,
  `kk` tinyint(2) DEFAULT NULL,
  `akte` tinyint(2) DEFAULT NULL,
  `alat_tansport` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `n_unas` float DEFAULT NULL,
  `no_unas` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_email` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `n_raport` float DEFAULT NULL,
  `n_test` float DEFAULT NULL,
  `n_minat` float DEFAULT NULL,
  `n_akhir` float DEFAULT NULL,
  `p_unas` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `p_raport` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `p_test` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `p_minat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `p_akhir` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `petugas` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `no_daftar` int(11) NOT NULL,
  `foto_daftar` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `th_daftar` varchar(4) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_siswa`
--

INSERT INTO `t_siswa` (`user_id`, `no_induk`, `ind_prog`, `kode_prog`, `no_urut`, `nama`, `sis_nma_pnggln`, `id_kelas`, `kelas`, `sis_nisn`, `sis_no_psrta_unas`, `sttb_tgl`, `sttb`, `nem_tgl`, `nem`, `alamat`, `alamat_rt`, `alamat_rw`, `alamat_lurah`, `alamat_camat`, `alamat_kodya`, `alamat_prop`, `alamat_tinggal`, `alamat_kec_tngl`, `alamat_kab_tngl`, `sis_tggal_dgn`, `sis_jrak_ke_skul`, `tgl_lahir`, `telp`, `agama`, `kelamin`, `tmp_lahir`, `tgl_input`, `sis_tmt_dri`, `sis_lma_blajar`, `sis_pndahn_seklah`, `sis_pndahn_alasan`, `sis_dtrm_kelas`, `sis_dtrm_bdng_khlian`, `sis_dtrm_prog_khlian`, `sis_dtrm_komp_khlian`, `sis_dtrm_tgl`, `wali`, `wali_ktp`, `wali_tmpt_lhir`, `wali_tgl_lhir`, `wali_agama`, `wali_kwarganegraan`, `wali_pndidikan`, `wali_pkrjaan`, `wali_pnghasilan_bln`, `wali_almat`, `wali_tlp`, `hub_wali_siswa`, `ibu`, `ibu_ktp`, `ibu_tmpt_lhir`, `ibu_tgl_lhir`, `ibu_agama`, `ibu_kwarganegraan`, `ibu_pndidikan`, `ibu_pkrjaan`, `ibu_pnghasilan_bln`, `ibu_almat`, `ibu_tlp`, `ibu_status`, `ayah`, `ayah_ktp`, `ayh_tmpt_lhir`, `ayh_tgl_lhir`, `ayh_agama`, `ayh_kwarganegraan`, `ayh_pndidikan`, `ayh_pkrjaan`, `ayh_pnghasilan_bln`, `ayh_almat`, `ayh_tlp`, `ayh_status`, `sis_kwarganegraan`, `sis_anak_ke`, `sis_jml_sdr_kndung`, `sis_jml_sdr_tiri`, `sis_jml_sdr_angkat`, `sis_status`, `sis_bhs_shari_hri`, `sis_gol_darah`, `sis_penyakit`, `sis_kel_jasmani`, `sis_tinggi_berat`, `sis_ksenian`, `sis_olahrga`, `sis_kmasyaraktn`, `sis_organisasi`, `sis_hobby`, `sis_cita2`, `sis_lain2`, `rumah_kondisi`, `rumah_fisik`, `prestasi`, `alat_transport`, `sis_kps`, `sis_kip`, `sis_kks`, `sis_nokk`, `sis_nik`, `sis_beasiswa`, `sis_pndah_seklah`, `sis_pndah_alsn`, `sis_luls_thn`, `sis_luls_ijazah`, `sis_luls_skhu`, `sis_lnjut_ke`, `sis_krja_tgl`, `sis_krja_tmpt`, `sis_krja_pnghsilan`, `ijz_fc_lg`, `ijz_fc_bs`, `skhun_fc_lg`, `skhun_fc_bs`, `kk`, `akte`, `alat_tansport`, `th_ajar`, `n_unas`, `no_unas`, `sis_email`, `n_raport`, `n_test`, `n_minat`, `n_akhir`, `p_unas`, `p_raport`, `p_test`, `p_minat`, `p_akhir`, `petugas`, `no_daftar`, `foto_daftar`, `th_daftar`) VALUES
('1', '0013178123', 4, '5', 4, 'Hana', NULL, 3, '12 TKJ 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 'malang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102128, 'siswa', NULL),
('2', '0013179018', 2, '3', 2, 'Inas Imaddinar', NULL, 3, '12 TKJ 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'malang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102129, 'kh', NULL),
('3', '0010864827', 3, '4', 3, 'Pedrick', NULL, 4, '10 KPR 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'malang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102130, 'kimi', NULL),
('4', '0013223598', 1, '2', 1, 'Fikri', 'FIKRI', 4, '10 KPR 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'malang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102131, 'kj', NULL),
('5', '0013224881', 5, '1', 5, 'Dinung', NULL, 5, '11 KPR 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 'malang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102132, 'original', NULL),
('6', '0013223802', 6, '6', 6, 'Uzumaki Naruto', NULL, 5, '11 KPR 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'tokyo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102133, 'meteor', NULL),
('7', '0013223952', 7, '7', 7, 'Monkey D. Luffy', NULL, 2, '11 TKJ 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'london', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102134, 'guru', NULL),
('8', '0010881115', 8, '8', 8, 'Uchiha Sasuke', NULL, 1, '10 TKJ 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'aceh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102135, 'admin2', NULL),
('9', '0010729490', 9, '9', 9, 'Sakura Haruno', NULL, 1, '10 TKJ 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 'barcelona', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102136, 'anonim', NULL),
('10', '0013224080', 10, '10', 10, 'Kim Dahyun', NULL, 2, '11 TKJ 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 'liverpool', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102137, 'french-crop', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_sis_thajar`
--

CREATE TABLE `t_sis_thajar` (
  `id_sis_th` int(11) NOT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `no_induk` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `prog` varchar(3) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `kelamin` varchar(1) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `Inklusi` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sis_thajar`
--

INSERT INTO `t_sis_thajar` (`id_sis_th`, `no_urut`, `no_induk`, `nama`, `kelas`, `prog`, `th_ajar`, `kelamin`, `agama`, `Inklusi`) VALUES
(37409, 1, '0010881115', 'Uchiha Sasuke', '10 TKJ 1', NULL, '2018/2019', 'L', 'Buddha', NULL),
(37410, 2, '0010729490', 'Sakura Haruno', '10 TKJ 1', NULL, '2018/2019', 'P', 'Hindu', NULL),
(37411, 4, '0013224080', 'Kim Dahyun', '11 TKJ 2', NULL, '2018/2019', 'P', 'Kristen', NULL),
(37412, 3, '0013223952', 'Monkey D. Luffy', '11 TKJ 2', NULL, '2018/2019', 'L', 'Islam', NULL),
(37413, 5, '0013178123', 'Hana', '12 TKJ 3', NULL, '2018/2019', 'P', 'Islam', NULL),
(37414, 6, '0013179018', 'Inas Imaddinar', '12 TKJ 3', NULL, '2018/2019', 'L', 'Islam', NULL),
(37415, 7, '0010864827', 'Pedrick', '10 KPR 1', NULL, '2018/2019', 'P', 'Islam', NULL),
(37416, 8, '0013223598', 'MUHAMMAD FIKRI', '10 KPR 1', NULL, '2018/2019', 'L', 'Islam', NULL),
(37417, 9, '0013224881', 'Dinung', '11 KPR 2', NULL, '2018/2019', 'P', 'Islam', NULL),
(37418, 10, '0013223802', 'Uzumaki Naruto', '11 KPR 2', NULL, '2018/2019', 'L', 'Protestan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_staf`
--

CREATE TABLE `t_staf` (
  `user_id` int(5) DEFAULT NULL,
  `nama_guru` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `nip` varchar(25) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `kelamin` char(2) COLLATE latin1_general_ci DEFAULT '',
  `alamat` varchar(60) COLLATE latin1_general_ci DEFAULT '',
  `tugas` varchar(30) COLLATE latin1_general_ci DEFAULT '',
  `telp` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `hp` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `pelajaran` varchar(200) COLLATE latin1_general_ci DEFAULT '',
  `tgl_lahir` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `kode` varchar(10) COLLATE latin1_general_ci DEFAULT '',
  `pangkat` varchar(50) COLLATE latin1_general_ci DEFAULT '0',
  `kategori` char(1) COLLATE latin1_general_ci DEFAULT '0',
  `profilstaf` longtext COLLATE latin1_general_ci,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `no_induk_baru` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `depan_gelar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `belakang_gelar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `nama_ibu_kandung` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `kode_pos` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `golongan_darah` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `kelurahan` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `kecamatan` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `provinsi` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `daerah` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `status_nikah` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `jenis_pegawai` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sertifikasi_guru` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `akses` int(1) NOT NULL DEFAULT '1',
  `arsip` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `tugas_tambahan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `pangkat_pns` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `jabatan_pns` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `golongan_pns` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `pendidikan_terahir` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `prog_diampu` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `masakerja_th` tinyint(4) DEFAULT NULL,
  `masakerja_bl` tinyint(4) DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_staf`
--

INSERT INTO `t_staf` (`user_id`, `nama_guru`, `nip`, `kelamin`, `alamat`, `tugas`, `telp`, `hp`, `email`, `pelajaran`, `tgl_lahir`, `tmp_lahir`, `kode`, `pangkat`, `kategori`, `profilstaf`, `th_ajar`, `no_induk_baru`, `depan_gelar`, `belakang_gelar`, `nama_ibu_kandung`, `kode_pos`, `golongan_darah`, `kelurahan`, `kecamatan`, `provinsi`, `daerah`, `status_nikah`, `tanggal_masuk`, `jenis_pegawai`, `sertifikasi_guru`, `tmt_pns`, `akses`, `arsip`, `tugas_tambahan`, `pangkat_pns`, `jabatan_pns`, `golongan_pns`, `pendidikan_terahir`, `prog_diampu`, `masakerja_th`, `masakerja_bl`, `tgl_update`) VALUES
(1, 'hana', '1', 'P', 'malang', 'guru', NULL, NULL, NULL, 'bahasa inggris', NULL, NULL, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-06 14:49:22'),
(2, 'pedrik', '2', 'L', 'malang', 'guru', NULL, NULL, NULL, 'matematika', NULL, NULL, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-23 14:35:09'),
(3, 'Gery', '3', 'la', 'malang', 'guru', NULL, NULL, NULL, 'basis data', NULL, NULL, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-23 14:25:44'),
(4, 'Pak Imam', '4', 'L', '', '', NULL, NULL, NULL, '', NULL, NULL, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-23 14:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `t_thajar`
--

CREATE TABLE `t_thajar` (
  `idthajar` int(11) NOT NULL,
  `thajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `KepSekNama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `KepSekPangkat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `KepSekNip` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `TglRaportGanjil` date DEFAULT NULL,
  `TglRaportGenap` date DEFAULT NULL,
  `TglUKK` date DEFAULT NULL,
  `Catatan UKK` text COLLATE latin1_general_ci,
  `Tahun` smallint(6) DEFAULT NULL,
  `TglPKG` date DEFAULT NULL,
  `JenisUKK` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_thajar`
--

INSERT INTO `t_thajar` (`idthajar`, `thajar`, `KepSekNama`, `KepSekPangkat`, `KepSekNip`, `TglRaportGanjil`, `TglRaportGenap`, `TglUKK`, `Catatan UKK`, `Tahun`, `TglPKG`, `JenisUKK`) VALUES
(1, '2018/2019', 'Pak Imam', 'Kepala Sekolah', '4', '2018-06-05', '2019-06-11', '2019-06-01', NULL, 1, '2019-01-23', NULL),
(2, '2017/2018', 'Pak Imam', 'Kepala Sekolah', '4', '2019-01-25', '2019-01-25', '2019-01-25', NULL, NULL, '2019-01-25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_wali`
--

CREATE TABLE `t_wali` (
  `idwali` int(11) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `tingkat` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `program_lngkap` text COLLATE latin1_general_ci,
  `th_ajar` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_wali`
--

INSERT INTO `t_wali` (`idwali`, `nama`, `kelas`, `tingkat`, `program_lngkap`, `th_ajar`) VALUES
(1, 'Abdullah Pedrick', 'TKJ1', 'X', 'TEKNIK KOMPUTASI JARINGAN', '2018/2019'),
(2, 'Hana Catur', 'PS1', 'X', 'PERAWATAN SOSIAL', '2018/2019'),
(3, 'Mauliddinna', 'UPW1', 'X', 'USAHA PERJALANAN WISATA', '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `ujian_online`
--

CREATE TABLE `ujian_online` (
  `id_ujian_online` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `idpel` int(11) NOT NULL,
  `nip` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `jenis_ujian` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `bab` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `tgl_ujian` date NOT NULL,
  `waktu` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `status_ujian` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ujian_online`
--

INSERT INTO `ujian_online` (`id_ujian_online`, `id_kelas`, `idpel`, `nip`, `jam_mulai`, `jam_selesai`, `jenis_ujian`, `bab`, `tgl_ujian`, `waktu`, `tgl_upload`, `status_ujian`) VALUES
('UO-00002', 1, 165002, '1', '10:00:00', '22:00:00', 'Tugas', 'bab 1', '2019-07-09', '2', '2019-07-09 14:53:12', 'tidak'),
('UO-00001', 1, 165001, '2', '07:00:00', '19:00:00', 'Ujian Tengah Semester', '', '2019-07-20', '1', '2019-07-20 05:32:42', 'tidak'),
('UO-00003', 1, 165005, '2', '20:29:00', '23:59:00', 'Ulangan', '', '2019-07-15', '2', '2019-07-15 15:30:08', 'tidak'),
('UO-00004', 2, 165004, '2', '19:30:00', '23:59:00', 'Ujian Tengah Semester', '', '2019-07-17', '2', '2019-07-17 15:06:14', 'tidak'),
('UO-00005', 1, 165002, '2', '21:00:00', '22:00:00', 'Tugas', '1', '2019-07-20', '90', '2019-07-20 15:30:04', 'tidak'),
('UO-00006', 2, 165002, '2', '19:00:00', '23:59:00', 'Ujian Tengah Semester', '', '2019-07-20', '2', '2019-07-20 15:48:24', 'aktif'),
('UO-00007', 2, 165005, '2', '19:00:00', '23:59:00', 'Ulangan', '', '2019-07-20', '2', '2019-07-20 16:10:14', 'aktif'),
('UO-00008', 1, 165002, '2', '21:07:00', '23:00:00', 'Tugas', '1', '2019-07-20', '120', '2019-07-20 16:39:11', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `ujian_online_detail`
--

CREATE TABLE `ujian_online_detail` (
  `id_ujian_online_detail` int(11) NOT NULL,
  `id_ujian_online` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `no_soal` int(11) NOT NULL,
  `soal` text COLLATE latin1_general_ci NOT NULL,
  `jenis_soal` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `gambar` text COLLATE latin1_general_ci NOT NULL,
  `jawaban_a` text COLLATE latin1_general_ci NOT NULL,
  `jawaban_b` text COLLATE latin1_general_ci NOT NULL,
  `jawaban_c` text COLLATE latin1_general_ci NOT NULL,
  `jawaban_d` text COLLATE latin1_general_ci NOT NULL,
  `jawaban_e` text COLLATE latin1_general_ci NOT NULL,
  `jawaban_benar` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `poin_nilai` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ujian_online_detail`
--

INSERT INTO `ujian_online_detail` (`id_ujian_online_detail`, `id_ujian_online`, `no_soal`, `soal`, `jenis_soal`, `gambar`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`, `jawaban_benar`, `poin_nilai`) VALUES
(8, 'UO-00002', 4, 'siapa kita ?', 'Essay', '', '', '', '', '', '', '', ''),
(7, 'UO-00002', 3, 'siapa kamu', 'Pilihan Ganda', '', 'kamu', 'emboh', 'gak ngerti', 'golek dewe', 'apaan atuh', 'A', ''),
(5, 'UO-00002', 1, 'siapa saya', 'Pilihan Ganda', '', 'aku', 'kamu', 'dia', 'saya', 'emboh', 'D', ''),
(6, 'UO-00002', 2, 'apakah kamu hebat ?', 'Essay', '', '', '', '', '', '', '', ''),
(3, 'UO-00001', 3, 'aku apa kamu ?', 'Essay', '', '', '', '', '', '', '', ''),
(4, 'UO-00001', 4, 'Siapa kamu ??', 'Pilihan Ganda', '', 'aku', 'kamu', 'siapa', 'dia', 'cinta', 'E', ''),
(2, 'UO-00001', 2, 'apakah kamu sayang aku?', 'Essay', '', '', '', '', '', '', '', ''),
(9, 'UO-00003', 1, 'What The?', 'Pilihan Ganda', '', 'a', 'b', 'c', 'd', 'Hell', 'E', ''),
(10, 'UO-00004', 1, 'apa?', 'Pilihan Ganda', '', 'ab', 'ac', 'ad', 'ae', 'af', 'E', ''),
(11, 'UO-00004', 2, 'aw?', 'Essay', '', '', '', '', '', '', '', ''),
(12, 'UO-00005', 1, 'qwerty', 'Pilihan Ganda', '', 'qw', 'er', 'ty', 'ui', 'op', 'A', ''),
(13, 'UO-00005', 2, 'qwertyu', 'Pilihan Ganda', '', 'as', 'df', 'gh', 'jk', 'lm', 'B', ''),
(14, 'UO-00005', 3, 'qwertyu', 'Pilihan Ganda', '', 'zx', 'cv', 'bn', 'nm', 'po', 'C', ''),
(15, 'UO-00005', 4, 'Haloooo', 'Essay', '', '', '', '', '', '', '', ''),
(16, 'UO-00006', 1, 'Apa itu cinta?', 'Pilihan Ganda', '', 'A', 'B', 'C', 'D', 'Buta', 'E', ''),
(17, 'UO-00006', 2, 'Apaa??', 'Pilihan Ganda', '', 'S', 'F', 'G', 'H', 'K', 'C', ''),
(21, 'UO-00008', 1, 'qwerty', 'Essay', '', '', '', '', '', '', '', ''),
(19, 'UO-00007', 1, 'a?', 'Pilihan Ganda', '', 'asd', 'asdsd', 'asdasd', 'sadds', 'gsa', 'E', ''),
(20, 'UO-00007', 2, 'apa?', 'Essay', '', '', '', '', '', '', '', ''),
(22, 'UO-00008', 2, 'asdffghjkk', 'Essay', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(25) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `no_induk` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `menu` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `ip` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `waktu` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `kunjung` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `nama`, `email`, `nip`, `no_induk`, `menu`, `ip`, `waktu`, `kunjung`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'fikrisyahrizal71@gmail.com', '', '', 'admin', NULL, NULL, NULL, 1),
(2, 'siswa', 'bcd724d15cde8c47650fda962968f102', '', 'siswa@gmail.com', '', '0013223952', 'siswa', NULL, NULL, NULL, 1),
(3, 'guru', '77e69c137812518e359196bb2f5e9bb9', '', 'guru@gmail.com', '2', '', 'guru', NULL, NULL, NULL, 1),
(4, 'absensi', '986bf02c97e4738cff389ec0b3d784bc', '', 'absensi@gmail.com', '', '', 'absensi', NULL, NULL, NULL, 1),
(5, 'orangtua', '344c999a63cd55b3035cbf76c2691f88', 'Kim Dahyun', 'orangtua@gmail.com', '', '0013224080', 'orangtua', NULL, NULL, NULL, 1),
(6, 'orangtuaA', 'd1c75259b62c36eae9b9aca8aa4d5007', 'Fikri', 'orangtuaA@gmail.com', '', '0013223598', 'orangtua', NULL, NULL, NULL, 1),
(8, 'guru2', '440a21bd2b3a7c686cf3238883dd34e9', '', 'guru2@gmail.com', '1', '', 'guru', NULL, NULL, NULL, 1),
(7, 'siswa2', '331633a246a4e1ceefc9539a71fcd124', '', 'siswa2@gmail.com', '', '0010881115', 'siswa', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `idlevel` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `menu` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `utama` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`idlevel`, `userid`, `menu`, `utama`) VALUES
(1, 1, 'admin', 1),
(2, 2, 'guru', 2),
(3, 3, 'siswa', 3),
(4, 4, 'absensi', 4),
(5, 5, 'orangtua', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_elearning`
--
ALTER TABLE `data_elearning`
  ADD PRIMARY KEY (`id_elearning`),
  ADD KEY `id_mapel` (`idpel`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nik` (`nip`);

--
-- Indexes for table `jawaban_siswa`
--
ALTER TABLE `jawaban_siswa`
  ADD PRIMARY KEY (`id_jawaban_siswa`),
  ADD KEY `jawaban_siswa_id_ujian_online_fk` (`id_ujian_online`),
  ADD KEY `jawaban_siswa_no_induk_fk` (`no_induk`);

--
-- Indexes for table `nilai_ujian`
--
ALTER TABLE `nilai_ujian`
  ADD PRIMARY KEY (`id_nilai_ujian`),
  ADD KEY `nilai_ujian_id_ujian_online_fk` (`id_ujian_online`),
  ADD KEY `nilai_ujian_no_induk_fk` (`no_induk`);

--
-- Indexes for table `t_absbln`
--
ALTER TABLE `t_absbln`
  ADD KEY `no_induk` (`no_induk`);

--
-- Indexes for table `t_absensi`
--
ALTER TABLE `t_absensi`
  ADD PRIMARY KEY (`idabsen`),
  ADD KEY `no_induk` (`no_induk`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  ADD PRIMARY KEY (`idajar`);

--
-- Indexes for table `t_jurnal`
--
ALTER TABLE `t_jurnal`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD KEY `t_jurnal_nama_fk` (`nama`),
  ADD KEY `t_jurnal_userid_fk` (`userid`),
  ADD KEY `t_jurnal_thajar_fk` (`thajar`),
  ADD KEY `t_jurnal_kelas_fk` (`kelas`);

--
-- Indexes for table `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_prog` (`id_prog`);

--
-- Indexes for table `t_member`
--
ALTER TABLE `t_member`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `t_pelajaran`
--
ALTER TABLE `t_pelajaran`
  ADD PRIMARY KEY (`idpel`);

--
-- Indexes for table `t_pelaj_jadwal`
--
ALTER TABLE `t_pelaj_jadwal`
  ADD PRIMARY KEY (`id_pelaj_jadwal`);

--
-- Indexes for table `t_programahli`
--
ALTER TABLE `t_programahli`
  ADD PRIMARY KEY (`idprog`);

--
-- Indexes for table `t_ruang`
--
ALTER TABLE `t_ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_siswa`
--
ALTER TABLE `t_siswa`
  ADD PRIMARY KEY (`no_induk`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `no_daftar` (`no_daftar`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `t_sis_thajar`
--
ALTER TABLE `t_sis_thajar`
  ADD PRIMARY KEY (`id_sis_th`),
  ADD KEY `no_induk` (`no_induk`);

--
-- Indexes for table `t_staf`
--
ALTER TABLE `t_staf`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `t_thajar`
--
ALTER TABLE `t_thajar`
  ADD PRIMARY KEY (`idthajar`);

--
-- Indexes for table `t_wali`
--
ALTER TABLE `t_wali`
  ADD PRIMARY KEY (`idwali`);

--
-- Indexes for table `ujian_online`
--
ALTER TABLE `ujian_online`
  ADD PRIMARY KEY (`id_ujian_online`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mapel` (`idpel`),
  ADD KEY `nik` (`nip`);

--
-- Indexes for table `ujian_online_detail`
--
ALTER TABLE `ujian_online_detail`
  ADD PRIMARY KEY (`id_ujian_online_detail`),
  ADD KEY `id_ujian_online` (`id_ujian_online`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `no_induk` (`no_induk`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`idlevel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban_siswa`
--
ALTER TABLE `jawaban_siswa`
  MODIFY `id_jawaban_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `nilai_ujian`
--
ALTER TABLE `nilai_ujian`
  MODIFY `id_nilai_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `t_absensi`
--
ALTER TABLE `t_absensi`
  MODIFY `idabsen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  MODIFY `idajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_jurnal`
--
ALTER TABLE `t_jurnal`
  MODIFY `id_jurnal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=454;
--
-- AUTO_INCREMENT for table `t_kelas`
--
ALTER TABLE `t_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=669;
--
-- AUTO_INCREMENT for table `t_member`
--
ALTER TABLE `t_member`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26403;
--
-- AUTO_INCREMENT for table `t_pelajaran`
--
ALTER TABLE `t_pelajaran`
  MODIFY `idpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165006;
--
-- AUTO_INCREMENT for table `t_pelaj_jadwal`
--
ALTER TABLE `t_pelaj_jadwal`
  MODIFY `id_pelaj_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4193;
--
-- AUTO_INCREMENT for table `t_programahli`
--
ALTER TABLE `t_programahli`
  MODIFY `idprog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `t_ruang`
--
ALTER TABLE `t_ruang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `t_siswa`
--
ALTER TABLE `t_siswa`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6102138;
--
-- AUTO_INCREMENT for table `t_sis_thajar`
--
ALTER TABLE `t_sis_thajar`
  MODIFY `id_sis_th` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37419;
--
-- AUTO_INCREMENT for table `t_thajar`
--
ALTER TABLE `t_thajar`
  MODIFY `idthajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `t_wali`
--
ALTER TABLE `t_wali`
  MODIFY `idwali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `ujian_online_detail`
--
ALTER TABLE `ujian_online_detail`
  MODIFY `id_ujian_online_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `idlevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1496;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
