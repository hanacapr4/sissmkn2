-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 02:19 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtemp`
--

-- --------------------------------------------------------

--
-- Table structure for table `abskelas`
--

CREATE TABLE `abskelas` (
  `id_abskelas` varchar(100) NOT NULL,
  `idabsen` int(10) DEFAULT NULL,
  `stabsen` varchar(50) DEFAULT NULL,
  `alasan` varchar(25) DEFAULT NULL,
  `nip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `belbaru`
--

CREATE TABLE `belbaru` (
  `ID` int(11) NOT NULL,
  `JamAwal` datetime DEFAULT NULL,
  `JamAkhir` datetime DEFAULT NULL,
  `Durasi` datetime DEFAULT NULL,
  `Keterangan` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `File` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Hari` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Kategori` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Urut` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendarevent`
--

CREATE TABLE `calendarevent` (
  `id` int(11) NOT NULL DEFAULT '0',
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `eventTitle` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `EventDetail` text COLLATE latin1_general_ci,
  `color` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `picture_id` int(11) DEFAULT NULL,
  `file_id` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendarevent_picture`
--

CREATE TABLE `calendarevent_picture` (
  `id` int(11) NOT NULL,
  `calendarevent_id` int(11) NOT NULL DEFAULT '0',
  `picture_sm_name` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `picture_bg_name` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `picture_detail` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cls_bag`
--

CREATE TABLE `cls_bag` (
  `id_bag` int(10) NOT NULL,
  `id_cls_kategori` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `id_catbag` int(10) NOT NULL,
  `file_nama` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `file_type` varchar(30) NOT NULL,
  `file_size` int(10) NOT NULL,
  `date_upload` date NOT NULL,
  `time_upload` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_bank_soal`
--

CREATE TABLE `cls_bank_soal` (
  `id_bank_soal` int(10) NOT NULL,
  `id_kurikulum` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `id_cls_kategori` int(10) NOT NULL,
  `idpel` int(11) NOT NULL,
  `semester` tinyint(2) NOT NULL,
  `program` varchar(100) NOT NULL,
  `pertanyaan` text NOT NULL,
  `pertanyaan_id_bag` int(10) NOT NULL,
  `opsia` text NOT NULL,
  `opsia_id_bag` int(10) NOT NULL,
  `opsib` text NOT NULL,
  `opsib_id_bag` int(10) NOT NULL,
  `opsic` text NOT NULL,
  `opsic_id_bag` int(10) NOT NULL,
  `opsid` text NOT NULL,
  `opsid_id_bag` int(10) NOT NULL,
  `opsie` text NOT NULL,
  `opsie_id_bag` int(10) NOT NULL,
  `jawaban` text NOT NULL,
  `jawaban_id_bag` int(10) NOT NULL,
  `pembahasan` text NOT NULL,
  `pembahasan_id_bag` int(10) NOT NULL,
  `betul` int(10) NOT NULL,
  `salah` int(10) NOT NULL,
  `kosong` int(10) NOT NULL,
  `jawaba` int(10) NOT NULL,
  `jawabb` int(10) NOT NULL,
  `jawabc` int(10) NOT NULL,
  `jawabd` int(10) NOT NULL,
  `jawabe` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0=Terbuka 1=Tertutup',
  `tingkat` int(1) NOT NULL DEFAULT '0' COMMENT '0=Mudah 1=Sedang 2=Sulit',
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_catbag`
--

CREATE TABLE `cls_catbag` (
  `id_catbag` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `nama_catlib` varchar(100) NOT NULL,
  `date_upload` date NOT NULL,
  `time_upload` time NOT NULL,
  `sub` int(10) NOT NULL,
  `files` int(10) NOT NULL,
  `folder` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='id_cls_kategori';

-- --------------------------------------------------------

--
-- Table structure for table `cls_class`
--

CREATE TABLE `cls_class` (
  `id_class` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `class_use` varchar(50) NOT NULL,
  `jml_member` int(10) NOT NULL,
  `jml_moods` int(10) NOT NULL,
  `code_class` varchar(50) NOT NULL DEFAULT 'N' COMMENT 'Jika N maka mode Lock atau tdk boleh tambah member',
  `sub` int(10) NOT NULL,
  `jenis` int(1) NOT NULL DEFAULT '0' COMMENT '0= Kelas Umum, 1=Kelas Khusus Guru',
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_class_member`
--

CREATE TABLE `cls_class_member` (
  `id_class_member` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `no_induk` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `sub` int(10) NOT NULL,
  `akses` int(1) NOT NULL DEFAULT '0' COMMENT '0=Siswa, 1=Guru, 2=Kepsek',
  `date_join` date NOT NULL,
  `time_join` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_class_member_log`
--

CREATE TABLE `cls_class_member_log` (
  `id_class_member_log` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_class_message` int(10) NOT NULL,
  `id_paket_soal_utama` int(10) NOT NULL,
  `id_paket_soal` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_class_member_statistik`
--

CREATE TABLE `cls_class_member_statistik` (
  `id_cls_class_member_statistik` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `akses` int(10) NOT NULL,
  `jml_folder` int(10) NOT NULL,
  `jml_file` int(10) NOT NULL,
  `jml_join_class` int(10) NOT NULL,
  `jml_lat_soal` int(10) NOT NULL,
  `jml_komentar` int(10) NOT NULL,
  `jml_modul_download` int(10) NOT NULL,
  `jml_tugas_selesai` int(10) NOT NULL,
  `jml_quiz_selesai` int(10) NOT NULL,
  `jml_post` int(10) NOT NULL,
  `jml_modul_didownload` int(10) NOT NULL,
  `jml_class` int(10) NOT NULL,
  `jml_bank_soal` int(10) NOT NULL,
  `jml_paket_soal` int(10) NOT NULL,
  `jml_chat` int(10) NOT NULL,
  `jml_semuanya` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_class_member_urut`
--

CREATE TABLE `cls_class_member_urut` (
  `id_member_urut` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `id_class_member` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `urutan` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_class_message`
--

CREATE TABLE `cls_class_message` (
  `id_class_message` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_class_member` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `id_bag` int(10) NOT NULL,
  `id_bag2` int(10) NOT NULL,
  `sub` int(10) NOT NULL COMMENT 'Utk kode id_class_message \n\nyg mnjadi acuan list komentar',
  `type` int(1) NOT NULL DEFAULT '0' COMMENT '0=Note, 1=Alert, 2=Task, 3=Module, 4=TugasManual, 5=quiz',
  `lock` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT 'Jika Y maka tdk bs upload task/tugas',
  `message` text NOT NULL,
  `mode_komentar` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_end` date DEFAULT NULL,
  `time_end` time DEFAULT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `th_ajar` varchar(12) NOT NULL,
  `pel` varchar(255) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `sem` varchar(2) NOT NULL,
  `kolom` varchar(5) NOT NULL,
  `kesempatan` int(2) NOT NULL,
  `id_class_message_syarat` int(10) NOT NULL,
  `modenilai` enum('0','1') NOT NULL COMMENT '0=Tertinggi, 1=Rata2',
  `mode_penilaian` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0= Penilaian Biasa, 1= Penilaian Betul 2 Salah -1 Kosong 0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_class_message_komentar`
--

CREATE TABLE `cls_class_message_komentar` (
  `id_cls_class_message_komentar` int(10) NOT NULL,
  `id_class_message` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_class_member` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `message` text NOT NULL,
  `sub_komen` int(10) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cls_class_progress`
--

CREATE TABLE `cls_class_progress` (
  `id_class_progress` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_class_member` int(10) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `id_bag` int(10) NOT NULL,
  `id_paket_soal` int(10) NOT NULL,
  `id_class_message` int(10) NOT NULL,
  `value` float NOT NULL,
  `value_max` float NOT NULL,
  `betul` int(5) NOT NULL,
  `salah` int(5) NOT NULL,
  `kosong` int(5) NOT NULL,
  `value2` float NOT NULL,
  `value_max2` float NOT NULL,
  `mode_penilaian` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0= Penilaian Biasa, 1= Penilaian Betul 2 Salah -1 Kosong 0',
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_class_progress_catatan`
--

CREATE TABLE `cls_class_progress_catatan` (
  `id_class_progress_catatan` int(10) NOT NULL,
  `id_class_progress` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `catatan_siswa` text NOT NULL,
  `catatan_guru` text NOT NULL,
  `kunci_jawaban` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_class_progress_copy`
--

CREATE TABLE `cls_class_progress_copy` (
  `id_class_progress` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_class_member` int(10) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `id_bag` int(10) NOT NULL,
  `id_paket_soal` int(10) NOT NULL,
  `id_class_message` int(10) NOT NULL,
  `value` float NOT NULL,
  `value_max` float NOT NULL,
  `betul` int(5) NOT NULL,
  `salah` int(5) NOT NULL,
  `kosong` int(5) NOT NULL,
  `value2` float NOT NULL,
  `value_max2` float NOT NULL,
  `mode_penilaian` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0= Penilaian Biasa, 1= Penilaian Betul 2 Salah -1 Kosong 0',
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cls_class_progress_temp`
--

CREATE TABLE `cls_class_progress_temp` (
  `id_class_progress` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_class_member` int(10) NOT NULL,
  `userid` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `id_bag` int(10) NOT NULL,
  `id_paket_soal` int(10) NOT NULL,
  `id_class_message` int(10) NOT NULL,
  `value` float NOT NULL,
  `value_max` float NOT NULL,
  `betul` int(5) NOT NULL,
  `salah` int(5) NOT NULL,
  `kosong` int(5) NOT NULL,
  `value2` float NOT NULL,
  `value_max2` float NOT NULL,
  `mode_penilaian` enum('0','1') COLLATE latin1_general_ci NOT NULL DEFAULT '0' COMMENT '0= Penilaian Biasa, 1= Penilaian Betul 2 Salah -1 Kosong 0',
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cls_kategori`
--

CREATE TABLE `cls_kategori` (
  `id_cls_kategori` int(10) NOT NULL,
  `pel` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `jml` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cls_kurikulum`
--

CREATE TABLE `cls_kurikulum` (
  `id_kurikulum` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `id_cls_kategori` int(10) NOT NULL,
  `semester` tinyint(2) NOT NULL,
  `program` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `kurikulum` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_message`
--

CREATE TABLE `cls_message` (
  `id_message` int(10) NOT NULL,
  `from_user` int(10) NOT NULL,
  `to_user` int(10) NOT NULL,
  `message` text NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `baca` enum('Y','N') NOT NULL DEFAULT 'N',
  `balas` enum('Y','N') NOT NULL DEFAULT 'N',
  `del_from_user` varchar(20) NOT NULL,
  `del_to_user` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_notifikasi`
--

CREATE TABLE `cls_notifikasi` (
  `id_cls_notifikasi` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `userid_class` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `id_message` int(10) NOT NULL,
  `type` int(1) NOT NULL COMMENT '0=Note, 1=Alert, 2=Task, 3=Module, 4=TugasManual, 5=quiz',
  `mode` int(1) NOT NULL COMMENT '0=Mengirim, 1=Komentar, 2=Mengerjakan, 3=mengumpulkan',
  `jml_send` int(10) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_notifikasi_read`
--

CREATE TABLE `cls_notifikasi_read` (
  `id_cls_notifikasi_read` int(10) NOT NULL,
  `id_cls_notifikasi` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `id_message` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_paket_soal`
--

CREATE TABLE `cls_paket_soal` (
  `id_paket_soal` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `acak` enum('Y','N') NOT NULL DEFAULT 'N',
  `tampil_nilai` enum('Y','N') NOT NULL DEFAULT 'Y',
  `deskripsi` text NOT NULL,
  `waktu_paket` int(10) NOT NULL COMMENT 'Dalam menit',
  `waktu_koreksi` int(10) NOT NULL DEFAULT '30' COMMENT 'Dalam detik',
  `jml_soal` int(10) NOT NULL,
  `code_paket` varchar(30) NOT NULL DEFAULT 'N' COMMENT 'Jika diisi N maka tidak ada kode',
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sub` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_paket_soal_detail`
--

CREATE TABLE `cls_paket_soal_detail` (
  `id_paket_soal_detail` int(10) NOT NULL,
  `id_paket_soal` int(10) NOT NULL,
  `id_bank_soal` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `urutan` int(10) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `betul` int(10) NOT NULL DEFAULT '0',
  `salah` int(10) NOT NULL DEFAULT '0',
  `kosong` int(10) NOT NULL,
  `jawaba` int(10) NOT NULL DEFAULT '0',
  `jawabb` int(10) NOT NULL DEFAULT '0',
  `jawabc` int(10) NOT NULL DEFAULT '0',
  `jawabd` int(10) NOT NULL DEFAULT '0',
  `jawabe` int(10) NOT NULL DEFAULT '0',
  `tingkat` int(1) NOT NULL DEFAULT '0' COMMENT '0=Mudah 1=Sedang 2=Sulit'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_paket_soal_jawab`
--

CREATE TABLE `cls_paket_soal_jawab` (
  `id_paket_soal_jawab` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_class_message` int(10) NOT NULL,
  `id_paket_soal` int(10) NOT NULL,
  `id_paket_soal_detail` int(10) NOT NULL,
  `id_bank_soal` int(10) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `jawaban` varchar(1) NOT NULL,
  `jawaban_benar` varchar(1) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT 'Y=Benar, N=Salah',
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_paket_soal_jawab_temp`
--

CREATE TABLE `cls_paket_soal_jawab_temp` (
  `id_paket_soal_jawab` int(10) NOT NULL,
  `id_class` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_class_message` int(10) NOT NULL,
  `id_paket_soal` int(10) NOT NULL,
  `id_paket_soal_detail` int(10) NOT NULL,
  `id_bank_soal` int(10) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `jawaban` varchar(1) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cls_paket_soal_kurikulum`
--

CREATE TABLE `cls_paket_soal_kurikulum` (
  `id_paket_soal_kurikulum` int(10) NOT NULL,
  `id_paket_soal` int(10) NOT NULL,
  `id_kurikulum` int(10) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` tinyint(11) NOT NULL,
  `ip` text COLLATE latin1_general_ci NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daemons`
--

CREATE TABLE `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `no_induk` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `kd_ps` varchar(255) DEFAULT NULL,
  `nm_pes` varchar(255) DEFAULT NULL,
  `kd_prop` varchar(255) DEFAULT NULL,
  `kd_rayon` varchar(255) DEFAULT NULL,
  `kd_sek` varchar(255) DEFAULT NULL,
  `paralel` varchar(255) DEFAULT NULL,
  `absen` varchar(255) DEFAULT NULL,
  `kd_pes` varchar(255) DEFAULT NULL,
  `cek_kd_pes` varchar(255) DEFAULT NULL,
  `nopes` varchar(255) DEFAULT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  `tmp_lhr` varchar(255) DEFAULT NULL,
  `tgl_lhr` varchar(255) DEFAULT NULL,
  `tgl_long` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `nm_ortu` varchar(255) DEFAULT NULL,
  `alamat_1` varchar(255) DEFAULT NULL,
  `alamat_2` varchar(255) DEFAULT NULL,
  `kd_pos` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `kd_peslama` varchar(255) DEFAULT NULL,
  `kurikulum` varchar(255) DEFAULT NULL,
  `kd_agama` varchar(255) DEFAULT NULL,
  `id_agmdapo` varchar(255) DEFAULT NULL,
  `sekid_guid` varchar(255) DEFAULT NULL,
  `npsn_dapo` varchar(255) DEFAULT NULL,
  `tingkat_id` varchar(255) DEFAULT NULL,
  `id_kurdapo` varchar(255) DEFAULT NULL,
  `id_jurdapo` varchar(255) DEFAULT NULL,
  `khususdapo` varchar(255) DEFAULT NULL,
  `id_rbldapo` varchar(255) DEFAULT NULL,
  `kd_inklusi` varchar(255) DEFAULT NULL,
  `kd_kerja1` varchar(255) DEFAULT NULL,
  `kd_kerja2` varchar(255) DEFAULT NULL,
  `kd_hobi` varchar(255) DEFAULT NULL,
  `kd_cita` varchar(255) DEFAULT NULL,
  `kd_didik1` varchar(255) DEFAULT NULL,
  `kd_didik2` varchar(255) DEFAULT NULL,
  `kd_gaji` varchar(255) DEFAULT NULL,
  `kd_jarak` varchar(255) DEFAULT NULL,
  `kd_trans` varchar(255) DEFAULT NULL,
  `jm_saudara` varchar(255) DEFAULT NULL,
  `seri_ijz` varchar(255) DEFAULT NULL,
  `seri_skhun` varchar(255) DEFAULT NULL,
  `kd_pes_smp` varchar(255) DEFAULT NULL,
  `status_smp` varchar(255) DEFAULT NULL,
  `jenis_smp` varchar(255) DEFAULT NULL,
  `kota_smp` varchar(255) DEFAULT NULL,
  `kotaku` varchar(255) DEFAULT NULL,
  `kd_gab` varchar(255) DEFAULT NULL,
  `nm_pes_skh` varchar(255) DEFAULT NULL,
  `kd_pesguid` varchar(255) DEFAULT NULL,
  `sts_skhun` varchar(255) DEFAULT NULL,
  `sts_beda` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `cek_flag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `sis_gol_darah` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_penyakit` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `sis_kel_jasmani` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `sis_tinggi_berat` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_ksenian` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_olahrga` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kmasyaraktn` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_organisasi` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_hobby` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_cita2` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_lain2` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_beasiswa` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndah_seklah` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndah_alsn` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `sis_luls_thn` int(4) DEFAULT NULL,
  `sis_luls_ijazah` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_luls_skhu` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_lnjut_ke` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_krja_tgl` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT '00/00/0000',
  `sis_krja_tmpt` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_krja_pnghsilan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `export_data2015`
--

CREATE TABLE `export_data2015` (
  `no_induk` varchar(255) NOT NULL DEFAULT '',
  `kd_ps` varchar(255) DEFAULT NULL,
  `nm_pes` varchar(255) DEFAULT NULL,
  `kd_prop` varchar(255) DEFAULT NULL,
  `kd_rayon` varchar(255) DEFAULT NULL,
  `kd_sek` varchar(255) DEFAULT NULL,
  `paralel` varchar(255) DEFAULT NULL,
  `absen` varchar(255) DEFAULT NULL,
  `kd_pes` varchar(255) DEFAULT NULL,
  `cek_kd_pes` varchar(255) DEFAULT NULL,
  `nopes` varchar(255) DEFAULT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  `tmp_lhr` varchar(255) DEFAULT NULL,
  `tgl_lhr` varchar(255) DEFAULT NULL,
  `tgl_long` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `nm_ortu` varchar(255) DEFAULT NULL,
  `alamat_1` varchar(255) DEFAULT NULL,
  `alamat_2` varchar(255) DEFAULT NULL,
  `kd_pos` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `kd_peslama` varchar(255) DEFAULT NULL,
  `kurikulum` varchar(255) DEFAULT NULL,
  `kd_agama` varchar(255) DEFAULT NULL,
  `id_agmdapo` varchar(255) DEFAULT NULL,
  `sekid_guid` varchar(255) DEFAULT NULL,
  `npsn_dapo` varchar(255) DEFAULT NULL,
  `tingkat_id` varchar(255) DEFAULT NULL,
  `id_kurdapo` varchar(255) DEFAULT NULL,
  `id_jurdapo` varchar(255) DEFAULT NULL,
  `khususdapo` varchar(255) DEFAULT NULL,
  `id_rbldapo` varchar(255) DEFAULT NULL,
  `kd_inklusi` varchar(255) DEFAULT NULL,
  `kd_kerja1` varchar(255) DEFAULT NULL,
  `kd_kerja2` varchar(255) DEFAULT NULL,
  `kd_hobi` varchar(255) DEFAULT NULL,
  `kd_cita` varchar(255) DEFAULT NULL,
  `kd_didik1` varchar(255) DEFAULT NULL,
  `kd_didik2` varchar(255) DEFAULT NULL,
  `kd_gaji` varchar(255) DEFAULT NULL,
  `kd_jarak` varchar(255) DEFAULT NULL,
  `kd_trans` varchar(255) DEFAULT NULL,
  `jm_saudara` varchar(255) DEFAULT NULL,
  `seri_ijz` varchar(255) DEFAULT NULL,
  `seri_skhun` varchar(255) DEFAULT NULL,
  `kd_pes_smp` varchar(255) DEFAULT NULL,
  `status_smp` varchar(255) DEFAULT NULL,
  `jenis_smp` varchar(255) DEFAULT NULL,
  `kota_smp` varchar(255) DEFAULT NULL,
  `kotaku` varchar(255) DEFAULT NULL,
  `kd_gab` varchar(255) DEFAULT NULL,
  `nm_pes_skh` varchar(255) DEFAULT NULL,
  `kd_pesguid` varchar(255) DEFAULT NULL,
  `sts_skhun` varchar(255) DEFAULT NULL,
  `sts_beda` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `cek_flag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_battle`
--

CREATE TABLE `gallery_battle` (
  `id_gbattle` int(20) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `userid` int(20) NOT NULL,
  `idfoto` int(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_battle_chalenge`
--

CREATE TABLE `gallery_battle_chalenge` (
  `id_gbattle` int(20) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `userid` int(20) NOT NULL,
  `idfoto` int(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_battle_chalenge_stat`
--

CREATE TABLE `gallery_battle_chalenge_stat` (
  `id_gbattle_stat` int(20) NOT NULL,
  `idfoto` int(20) NOT NULL,
  `id_fields` int(10) NOT NULL,
  `win` int(10) NOT NULL,
  `lose` int(10) NOT NULL,
  `point` int(10) NOT NULL,
  `tgl` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `bln` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `thn` varchar(4) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `datefull` varchar(20) NOT NULL,
  `jam` time NOT NULL,
  `editor` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_battle_kategori`
--

CREATE TABLE `gallery_battle_kategori` (
  `id_fields` int(10) NOT NULL,
  `fields` varchar(100) NOT NULL,
  `fields_seo` varchar(100) NOT NULL,
  `date_start` varchar(20) NOT NULL,
  `date_end` varchar(20) NOT NULL,
  `type` int(1) NOT NULL COMMENT '0=utama, 1=gadget 2=chalenge',
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_battle_laporan`
--

CREATE TABLE `gallery_battle_laporan` (
  `id_laporan` int(20) NOT NULL,
  `idfoto` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_battle_stat`
--

CREATE TABLE `gallery_battle_stat` (
  `id_gbattle_stat` int(20) NOT NULL,
  `idfoto` int(20) NOT NULL,
  `id_fields` int(10) NOT NULL,
  `id_fields2` int(10) NOT NULL,
  `win` int(10) NOT NULL,
  `lose` int(10) NOT NULL,
  `point` int(10) NOT NULL,
  `tgl` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `bln` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `thn` varchar(4) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `datefull` varchar(20) NOT NULL,
  `jam` time NOT NULL,
  `editor` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gammu`
--

CREATE TABLE `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(13);

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Triggers `inbox`
--
DELIMITER $$
CREATE TRIGGER `inbox_timestamp` BEFORE INSERT ON `inbox` FOR EACH ROW BEGIN
    IF NEW.ReceivingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.ReceivingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `inbox_`
--

CREATE TABLE `inbox_` (
  `inbox_id` bigint(20) NOT NULL,
  `telp_number` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `message` varchar(140) COLLATE latin1_general_ci NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_data`
--

CREATE TABLE `ip_data` (
  `id_ip` int(10) NOT NULL,
  `ip` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `tgl_ip` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kali` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `ID` int(11) NOT NULL,
  `Tanggal` datetime DEFAULT NULL,
  `Kategori` varchar(50) DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendBefore` time NOT NULL DEFAULT '23:59:59',
  `SendAfter` time NOT NULL DEFAULT '00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Triggers `outbox`
--
DELIMITER $$
CREATE TRIGGER `outbox_timestamp` BEFORE INSERT ON `outbox` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingTimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.SendingTimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `outbox_multipart`
--

CREATE TABLE `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pbk`
--

CREATE TABLE `pbk` (
  `ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT '-1',
  `Name` text NOT NULL,
  `Number` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pbk_groups`
--

CREATE TABLE `pbk_groups` (
  `Name` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '-1',
  `Signal` int(11) NOT NULL DEFAULT '-1',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Triggers `phones`
--
DELIMITER $$
CREATE TRIGGER `phones_timestamp` BEFORE INSERT ON `phones` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.TimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.TimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sentitems`
--

CREATE TABLE `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Triggers `sentitems`
--
DELIMITER $$
CREATE TRIGGER `sentitems_timestamp` BEFORE INSERT ON `sentitems` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sh_agenda`
--

CREATE TABLE `sh_agenda` (
  `id_agenda` int(11) NOT NULL,
  `judul_agenda` varchar(50) NOT NULL,
  `tanggal_agenda` date NOT NULL,
  `tempat_agenda` varchar(50) NOT NULL,
  `keterangan_agenda` text NOT NULL,
  `s_username` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_album`
--

CREATE TABLE `sh_album` (
  `id_album` int(11) NOT NULL,
  `nama_album` varchar(30) NOT NULL,
  `tanggal_album` date NOT NULL,
  `deskripsi_album` text NOT NULL,
  `foto_album` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_berita`
--

CREATE TABLE `sh_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_posting` date NOT NULL,
  `gambar_kecil` varchar(50) NOT NULL,
  `status_terbit` int(1) NOT NULL,
  `status_komentar` int(1) NOT NULL,
  `status_headline` int(1) NOT NULL,
  `s_username` varchar(30) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_buku_tamu`
--

CREATE TABLE `sh_buku_tamu` (
  `id_bukutamu` int(11) NOT NULL,
  `nama_bukutamu` varchar(30) NOT NULL,
  `subjek` text NOT NULL,
  `isi_pesan` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_galeri`
--

CREATE TABLE `sh_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(100) NOT NULL,
  `id_album` int(11) NOT NULL,
  `tanggal_galeri` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_guru_staff`
--

CREATE TABLE `sh_guru_staff` (
  `id_gurustaff` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `posisi` varchar(5) NOT NULL,
  `nama_gurustaff` varchar(60) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `jenkel` varchar(1) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `alamat` text,
  `status_kawin` varchar(20) DEFAULT NULL,
  `tahun_masuk` year(4) DEFAULT NULL,
  `pendidikan_terakhir` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_info_sekolah`
--

CREATE TABLE `sh_info_sekolah` (
  `id_info` int(11) NOT NULL,
  `nama_info` varchar(50) NOT NULL,
  `isi_info` text NOT NULL,
  `tanggal_info` date NOT NULL,
  `posisi_menu` int(1) NOT NULL,
  `status_terbit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_jabatan`
--

CREATE TABLE `sh_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL,
  `deskripsi_jabatan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_kategori`
--

CREATE TABLE `sh_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `deskripsi_kategori` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_kelas`
--

CREATE TABLE `sh_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `deskripsi_kelas` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_komentar`
--

CREATE TABLE `sh_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `nama_komentar` varchar(25) NOT NULL,
  `email_komentar` varchar(30) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal_komentar` date NOT NULL,
  `status_terima` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_mapel`
--

CREATE TABLE `sh_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(230) NOT NULL,
  `deskripsi_mapel` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_materi`
--

CREATE TABLE `sh_materi` (
  `id_materi` int(11) NOT NULL,
  `file_materi` varchar(50) NOT NULL,
  `judul_materi` text NOT NULL,
  `deskripsi_materi` text NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `download` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_pengaturan`
--

CREATE TABLE `sh_pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `nama_pengaturan` varchar(50) NOT NULL,
  `isi_pengaturan` text NOT NULL,
  `isi_pengaturan2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_pengumuman`
--

CREATE TABLE `sh_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(50) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `tanggal_pengumuman` date NOT NULL,
  `s_username` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_psb`
--

CREATE TABLE `sh_psb` (
  `id_psb` int(11) NOT NULL,
  `nama_psb` varchar(30) NOT NULL,
  `nem` varchar(5) NOT NULL,
  `jenkel` varchar(1) NOT NULL,
  `sekolah_asal` text NOT NULL,
  `no_sttb` varchar(15) NOT NULL,
  `tanggal_sttb` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `bb` int(3) NOT NULL,
  `tb` int(3) NOT NULL,
  `status_psb` int(1) NOT NULL,
  `tanggal_psb` date NOT NULL,
  `nama_ortu` varchar(30) NOT NULL,
  `pekerjaan_ortu` varchar(50) NOT NULL,
  `alamat_psb` text NOT NULL,
  `polling_psb` varchar(20) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_sidebar`
--

CREATE TABLE `sh_sidebar` (
  `id_sidebar` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi1` text NOT NULL,
  `isi2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_siswa`
--

CREATE TABLE `sh_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama_siswa` varchar(60) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `jenkel` varchar(1) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text,
  `tahun_registrasi` year(4) DEFAULT NULL,
  `tahun_lulus` year(4) DEFAULT NULL,
  `sekolah_asal` text,
  `email` varchar(30) DEFAULT NULL,
  `telepon` varchar(30) DEFAULT NULL,
  `status_siswa` int(1) DEFAULT NULL,
  `status_oke` int(1) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nama_ortu` varchar(30) DEFAULT NULL,
  `pekerjaan_ortu` varchar(50) DEFAULT NULL,
  `pekerjaan_sekarang` text,
  `info_tambahan` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_statistik`
--

CREATE TABLE `sh_statistik` (
  `ip_addres` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `mengunjungi` int(10) NOT NULL,
  `online` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_tema`
--

CREATE TABLE `sh_tema` (
  `id_tema` int(11) NOT NULL,
  `nama_tema` varchar(30) NOT NULL,
  `pembuat` varchar(30) NOT NULL,
  `url_pembuat` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_users`
--

CREATE TABLE `sh_users` (
  `id_users` varchar(50) NOT NULL,
  `namausers` varchar(30) NOT NULL,
  `sandiusers` varchar(50) NOT NULL,
  `nama_lengkap_users` varchar(30) NOT NULL,
  `level_users` varchar(30) NOT NULL,
  `s_username` varchar(30) NOT NULL,
  `login_terakhir` datetime NOT NULL,
  `email_users` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswanama`
--

CREATE TABLE `siswanama` (
  `no_induk` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ps` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soal_hasil`
--

CREATE TABLE `soal_hasil` (
  `idhasil` int(10) NOT NULL,
  `idsoalutama` int(10) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `benar` int(3) NOT NULL,
  `salah` int(3) NOT NULL,
  `nilai` int(3) NOT NULL,
  `kesempatanjawab` int(2) NOT NULL,
  `lama` int(3) NOT NULL,
  `tglpengerjaan` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `soal_jawab`
--

CREATE TABLE `soal_jawab` (
  `idjawab` int(10) NOT NULL,
  `idhasil` int(10) NOT NULL,
  `idsoal` int(10) NOT NULL,
  `ket` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `soal_jenis`
--

CREATE TABLE `soal_jenis` (
  `idjenis` int(10) NOT NULL,
  `jenis_ujian` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soal_kelas`
--

CREATE TABLE `soal_kelas` (
  `id` int(10) NOT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `idsoalutama` int(10) DEFAULT NULL,
  `proses` varchar(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `soal_opsi`
--

CREATE TABLE `soal_opsi` (
  `idsoal` int(10) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `pertanyaan` text NOT NULL,
  `opsia` text NOT NULL,
  `opsib` text NOT NULL,
  `opsic` text NOT NULL,
  `opsid` text NOT NULL,
  `jawaban` text NOT NULL,
  `pembahasan` text NOT NULL,
  `status` int(1) NOT NULL COMMENT '1. Terbuka\r\n2. Tertutup',
  `pelajaran` text,
  `tingkat` int(1) DEFAULT NULL COMMENT '1. Mudah, 2.Sedang 3.Sulit'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `soal_test`
--

CREATE TABLE `soal_test` (
  `idsoaltest` int(10) NOT NULL,
  `idsoalutama` int(10) NOT NULL,
  `idsoal` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `soal_utama`
--

CREATE TABLE `soal_utama` (
  `idsoalutama` int(10) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `thajar` varchar(10) NOT NULL,
  `sem` int(1) NOT NULL,
  `pel` text NOT NULL,
  `jenis` int(2) NOT NULL COMMENT '1. Ulangan Harian\r\n2. Ulangan Blok\r\n3. Ulangan MID Semester\r\n4. Ulangan Akhir Semester\r\n5. Latihan Soal\r\n6. Remedial',
  `materi` varchar(50) NOT NULL,
  `jml_tampil` int(3) NOT NULL,
  `metode` int(1) NOT NULL COMMENT '1. Berurutan\r\n2. Acak',
  `psswd_soal` varchar(30) NOT NULL,
  `kesempatan` int(2) NOT NULL,
  `waktu` int(3) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `no_induk` varbinary(15) DEFAULT NULL,
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
(73, 0x30303133323233353938, 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 4),
(72, 0x30303133323233383032, 'A', '2019-02-13', '', NULL, NULL, '', '', NULL, 5),
(71, 0x30303133323233383032, 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 5),
(70, 0x30303133323234383831, 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 5),
(65, 0x30303133313739303138, 'M', '2019-02-11', NULL, '12:41:54', NULL, NULL, NULL, NULL, NULL),
(66, 0x30303130373239343930, 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 1),
(67, 0x30303130383831313135, 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 1),
(68, 0x30303133323233393532, 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 2),
(69, 0x30303130383634383237, 'A', '2019-02-12', '', NULL, NULL, '', '', NULL, 4),
(58, 0x30303133313739303138, 'M', '2019-02-09', NULL, '15:47:43', '15:48:52', NULL, NULL, NULL, NULL),
(59, 0x30303133323233353938, 'M', '2019-02-09', NULL, '15:47:45', '15:48:54', NULL, NULL, NULL, 4),
(57, 0x30303130383831313135, 'M', '2019-02-09', NULL, '15:47:40', '15:48:50', NULL, NULL, NULL, 1),
(56, 0x30303133323233393532, 'M', '2019-02-09', NULL, '15:47:36', '15:48:44', NULL, NULL, NULL, NULL),
(51, 0x30303133323234303830, 'M', '2019-02-09', NULL, '15:47:16', '15:48:06', NULL, NULL, NULL, NULL),
(52, 0x30303133323234383831, 'M', '2019-02-09', NULL, '15:47:18', '15:48:15', NULL, NULL, NULL, NULL),
(53, 0x30303133323233383032, 'M', '2019-02-09', NULL, '15:47:21', '15:48:22', NULL, NULL, NULL, NULL),
(60, 0x30303133313738313233, 'M', '2019-02-09', NULL, '15:50:05', '15:50:17', NULL, NULL, NULL, NULL),
(55, 0x30303130383634383237, 'M', '2019-02-09', NULL, '15:47:32', '15:48:29', NULL, NULL, NULL, NULL),
(75, 0x30303133313738313233, 'A', '2019-02-15', '-', NULL, NULL, '-', 'inas', NULL, 3),
(50, 0x30303130373239343930, 'M', '2019-02-09', NULL, '15:47:13', '15:47:57', NULL, NULL, NULL, 1),
(76, 0x30303133313739303138, 'M', '2019-03-01', NULL, '14:42:13', NULL, NULL, NULL, NULL, NULL),
(77, 0x30303133313738313233, 'M', '2019-03-01', NULL, '14:42:20', NULL, NULL, NULL, NULL, NULL),
(78, 0x30303133323233353938, 'M', '2019-03-01', NULL, '14:42:26', NULL, NULL, NULL, NULL, 4),
(79, 0x30303133323233383032, 'M', '2019-03-01', NULL, '14:42:32', '14:44:47', NULL, NULL, NULL, NULL),
(80, 0x30303133323233393532, 'M', '2019-03-01', NULL, '14:42:42', '14:44:43', NULL, NULL, NULL, NULL),
(81, 0x30303133323233383032, 'M', '2019-03-01', NULL, '14:42:59', '14:44:47', NULL, NULL, NULL, NULL),
(82, 0x30303133323233383032, 'M', '2019-04-29', NULL, '17:24:37', NULL, NULL, NULL, NULL, NULL),
(83, 0x30303133323233393532, 'M', '2019-04-29', NULL, '17:24:43', NULL, NULL, NULL, NULL, NULL),
(84, 0x30303133323233393532, 'M', '2019-04-29', NULL, '17:37:23', NULL, NULL, NULL, NULL, NULL),
(85, 0x30303133323233383032, 'M', '2019-04-29', NULL, '17:37:43', NULL, NULL, NULL, NULL, NULL),
(86, 0x30303133323233353938, 'M', '2019-04-29', NULL, '17:43:53', NULL, NULL, NULL, NULL, NULL),
(87, 0x30303133323233353938, 'M', '2019-04-29', NULL, '17:44:09', NULL, NULL, NULL, NULL, NULL),
(88, 0x30303133313739303138, 'M', '2019-05-09', NULL, '14:42:04', '14:52:45', NULL, NULL, NULL, NULL),
(89, 0x30303133323233383032, 'M', '2019-05-09', NULL, '14:42:08', '14:52:37', NULL, NULL, NULL, NULL),
(90, 0x30303130383831313135, 'M', '2019-05-09', NULL, '14:42:48', '14:52:29', NULL, NULL, NULL, NULL),
(91, 0x30303133323233353938, 'M', '2019-05-09', NULL, '14:42:57', '14:52:14', NULL, NULL, NULL, NULL),
(92, 0x30303130383634383237, 'M', '2019-05-09', NULL, '14:43:06', '14:52:42', NULL, NULL, NULL, NULL),
(93, 0x30303133313739303138, 'M', '2019-05-09', NULL, '14:45:46', '14:52:45', NULL, NULL, NULL, NULL),
(94, 0x30303133323233383032, 'M', '2019-05-09', NULL, '14:47:47', '14:52:37', NULL, NULL, NULL, NULL),
(95, 0x30303133323233393532, 'M', '2019-05-09', NULL, '14:47:53', '14:52:08', NULL, NULL, NULL, NULL),
(96, 0x30303133323233393532, 'M', '2019-05-11', NULL, '19:41:16', '19:41:33', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_artikel`
--

CREATE TABLE `t_artikel` (
  `id` int(10) NOT NULL,
  `tanggal` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `isi` longtext COLLATE latin1_general_ci NOT NULL,
  `pengirim` varchar(80) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `visits` int(10) NOT NULL DEFAULT '0',
  `admin` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_artikel_kom`
--

CREATE TABLE `t_artikel_kom` (
  `idkom` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `nama` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `komentar` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_banner`
--

CREATE TABLE `t_banner` (
  `id` int(10) NOT NULL,
  `alt` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `url` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `visits` int(10) NOT NULL DEFAULT '0',
  `status` int(3) NOT NULL DEFAULT '0',
  `admin` int(10) NOT NULL DEFAULT '0',
  `aktif` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `jenis` varchar(5) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_bayar`
--

CREATE TABLE `t_bayar` (
  `iddsp` int(11) NOT NULL,
  `nis` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `transaksi` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `bulan` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `bayar` int(11) UNSIGNED DEFAULT NULL,
  `keringanan` int(11) DEFAULT NULL,
  `sisa` int(11) DEFAULT NULL,
  `tu` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ket` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_bayar_detail`
--

CREATE TABLE `t_bayar_detail` (
  `iddsp` int(11) NOT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `transaksi` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `uraian` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `besar` int(11) DEFAULT NULL,
  `tu` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ket` varchar(8) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_bayar_jenis`
--

CREATE TABLE `t_bayar_jenis` (
  `iddsp` int(11) NOT NULL,
  `transaksi` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `ket` varchar(8) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_beasiswa`
--

CREATE TABLE `t_beasiswa` (
  `idbeasiswa` int(10) NOT NULL,
  `nis` varchar(25) COLLATE latin1_general_ci DEFAULT '',
  `nama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tglsurvey` date DEFAULT '0000-00-00',
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `OrTu` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Alamat` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `Surveyor` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Kerja` tinyint(4) DEFAULT NULL,
  `Gaji` tinyint(4) DEFAULT NULL,
  `Rumah` tinyint(4) DEFAULT NULL,
  `Bangunan` tinyint(4) DEFAULT NULL,
  `Lantai` tinyint(4) DEFAULT NULL,
  `Ruangan` tinyint(4) DEFAULT NULL,
  `Listrik` tinyint(4) DEFAULT NULL,
  `Motor` tinyint(4) DEFAULT NULL,
  `TV` tinyint(4) DEFAULT NULL,
  `HP` tinyint(4) DEFAULT NULL,
  `Survey` tinyint(4) DEFAULT NULL,
  `Total` tinyint(4) DEFAULT NULL,
  `ThAjar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_belajar`
--

CREATE TABLE `t_belajar` (
  `idbelajar` int(11) NOT NULL,
  `thajar` varchar(10) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL,
  `pelajaran` varchar(30) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `tglawal` date DEFAULT NULL,
  `tglakhir` date DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_belajar_detail`
--

CREATE TABLE `t_belajar_detail` (
  `iddetail` int(11) NOT NULL,
  `idbelajar` int(11) DEFAULT NULL,
  `materi` text,
  `jenis` varchar(2) DEFAULT NULL,
  `stshow` varchar(1) DEFAULT NULL,
  `pertemuan` int(2) DEFAULT NULL,
  `urut` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_belajar_kls`
--

CREATE TABLE `t_belajar_kls` (
  `id` int(11) NOT NULL,
  `idbelajar` int(11) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_belajar_log`
--

CREATE TABLE `t_belajar_log` (
  `tglakses` datetime DEFAULT NULL,
  `nis` varchar(25) DEFAULT NULL,
  `idbelajar` int(11) DEFAULT NULL,
  `akses` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_bell`
--

CREATE TABLE `t_bell` (
  `id_bell` int(10) NOT NULL,
  `JamAwal` time DEFAULT NULL,
  `JamAkhir` time DEFAULT NULL,
  `Keterangan` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Hari` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Kategori` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Urut` tinyint(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_bell_baru`
--

CREATE TABLE `t_bell_baru` (
  `ID` int(11) NOT NULL,
  `JamAwal` datetime DEFAULT NULL,
  `JamAkhir` datetime DEFAULT NULL,
  `Durasi` datetime DEFAULT NULL,
  `Keterangan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `File` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Hari` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Kategori` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_bpbk`
--

CREATE TABLE `t_bpbk` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `guru` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `sem` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `penilaian` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `ket` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `hukuman` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `point` smallint(3) DEFAULT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_bpbk_jenis`
--

CREATE TABLE `t_bpbk_jenis` (
  `id` int(11) NOT NULL,
  `No` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `Ket` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Point` int(15) DEFAULT NULL,
  `Jenis` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_bpbk_ortu`
--

CREATE TABLE `t_bpbk_ortu` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `orang_tua` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `telepon` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `tindakan_ortu` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `guru_bk` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_buku`
--

CREATE TABLE `t_buku` (
  `id_buku` int(10) NOT NULL,
  `nama` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `komentar` text COLLATE latin1_general_ci,
  `posttime` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `postdate` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ipkom` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggapan` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_chat`
--

CREATE TABLE `t_chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `to` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `message` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_download`
--

CREATE TABLE `t_download` (
  `id` int(10) NOT NULL,
  `judul` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `deskripsi` text COLLATE latin1_general_ci NOT NULL,
  `kategori` text COLLATE latin1_general_ci NOT NULL,
  `file` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `visit` int(10) NOT NULL DEFAULT '0',
  `ukuran` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tanggal` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_dsp`
--

CREATE TABLE `t_dsp` (
  `iddsp` int(11) NOT NULL,
  `nis` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `tingkat` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `dsp` int(11) DEFAULT NULL,
  `sisa` int(11) DEFAULT NULL,
  `tu` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ket` varchar(8) COLLATE latin1_general_ci DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_ekskul`
--

CREATE TABLE `t_ekskul` (
  `id_ekskul` int(10) NOT NULL,
  `nama_ekskul` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `user_name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_forum`
--

CREATE TABLE `t_forum` (
  `forum_id` int(10) NOT NULL,
  `forum_nama` varchar(60) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `forum_ket` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_forum_balas`
--

CREATE TABLE `t_forum_balas` (
  `balas_id` int(10) NOT NULL,
  `balas_body` text COLLATE latin1_general_ci,
  `balas_tgl` datetime DEFAULT NULL,
  `userid` int(10) NOT NULL DEFAULT '0',
  `isi_id` int(10) NOT NULL DEFAULT '0',
  `forum_id` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_forum_isi`
--

CREATE TABLE `t_forum_isi` (
  `isi_id` int(10) NOT NULL,
  `isi_judul` varchar(60) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `isi_body` text COLLATE latin1_general_ci NOT NULL,
  `isi_tgl` datetime DEFAULT NULL,
  `userid` int(10) NOT NULL DEFAULT '0',
  `forum_id` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_forum_moderator`
--

CREATE TABLE `t_forum_moderator` (
  `moderator_id` int(10) NOT NULL,
  `userid` int(10) NOT NULL DEFAULT '0',
  `forum_id` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_galeri`
--

CREATE TABLE `t_galeri` (
  `id` int(10) NOT NULL,
  `ket` text COLLATE latin1_general_ci NOT NULL,
  `idalbum` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_galerialbum`
--

CREATE TABLE `t_galerialbum` (
  `idalbum` int(11) NOT NULL,
  `album` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal` varchar(20) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_gambaratas`
--

CREATE TABLE `t_gambaratas` (
  `id` int(5) NOT NULL,
  `judul` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(5) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_host_ip`
--

CREATE TABLE `t_host_ip` (
  `id` int(10) DEFAULT NULL,
  `jurusan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ip` varchar(20) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_info`
--

CREATE TABLE `t_info` (
  `id` int(10) NOT NULL,
  `isi` text COLLATE latin1_general_ci,
  `subject` text COLLATE latin1_general_ci,
  `postdate` varchar(12) COLLATE latin1_general_ci NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `ID` int(11) NOT NULL,
  `Tanggal` datetime DEFAULT NULL,
  `Kategori` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Keterangan` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
(1, 4, '2018/2019', 'Pak Imam', 'Rabu', '2019-01-30', '10 TKJ 1', '07:00:00', '08:00:00', 'Belajar ngoding', 'S', 'Tidak ada.'),
(2, 4, '2018/2017', 'Hana', 'Rabu', '2019-01-30', 'TKJ', '07:00:00', '08:00:00', 'Belajar', 'S', 'Tidak ada.'),
(445, 4, '2017/2018', 'Pedrik', 'Rabu', '2019-01-30', '10 TKJ 1', '19:37:00', '19:55:00', 'Mengaji', 'S', 'Hafalan Surah Yasin'),
(450, 3, '2017/2018', 'Gery', 'Minggu', '2019-02-04', '10 TKJ 1', '23:17:27', '23:17:27', 'Hheheheh', 'B', 'Tugas'),
(449, 1, '2018/2019', 'Pak Imam', 'Minggu', '2019-02-04', '10 TKJ 1', '23:14:37', '23:14:37', 'Belajar move on', 'S', 'Tugas'),
(448, 3, '2018/2019', 'Gery', 'Rabu', '2019-01-30', '10 TKJ 1', '20:58:06', '20:58:06', 'Belajar jaringan', 'B', 'Ada tugas'),
(451, 4, '2017/2018', 'Hana', 'Jumat', '2019-02-08', 'xii tkj 2', '15:35:39', '15:35:39', 'Belajar Ngoding', 'S', 'Tugas'),
(452, 212, '2018/2019', 'Pedrik', 'Sabtu', '2019-02-09', 'x pr 1', '14:38:02', '14:38:02', 'gfd', 'S', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `jenis` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_kelas`
--

CREATE TABLE `t_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `nip` varchar(25) COLLATE latin1_general_ci NOT NULL DEFAULT '',
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

INSERT INTO `t_kelas` (`id_kelas`, `kelas`, `nip`, `tingkat`, `program`, `ruang`, `ketua`, `masuk`, `guru_bk`, `th_ajar`, `profil`) VALUES
(1, '10 TKJ 1', '3213123', '', 'TKJ', '1', '', '', '', '2018/2019', ''),
(2, '11 TKJ 2', '321654', '', 'TKJ', '2', '', '', '', '2018/2019', ''),
(3, '12 TKJ 3', '324513', '', 'TKJ', '3', '', '', '', '2018/2019', ''),
(4, '10 PR 1', '135132', '', 'PR', '4', '', '', '', '2018/2019', ''),
(5, '11 PR 2', '1324546', '', 'PR', '5', '', '', '', '2017/2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_lab`
--

CREATE TABLE `t_lab` (
  `ID` int(11) NOT NULL,
  `Ruang` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Kapasitas` int(11) DEFAULT NULL,
  `Sesi` int(11) DEFAULT NULL,
  `Tanggal` datetime DEFAULT NULL,
  `IDSesi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_laporan`
--

CREATE TABLE `t_laporan` (
  `idlap` int(10) NOT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `judul` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `file` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `status` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `nip` varchar(25) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_link`
--

CREATE TABLE `t_link` (
  `id` int(10) NOT NULL,
  `alamat` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ket` text COLLATE latin1_general_ci,
  `jenis` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
-- Table structure for table `t_memberfoto`
--

CREATE TABLE `t_memberfoto` (
  `idfoto` int(11) NOT NULL,
  `idalbum` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judul` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `stopen` varchar(1) COLLATE latin1_general_ci DEFAULT '0',
  `tanggalsaja` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '2013-04-26'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_memberfoto_album`
--

CREATE TABLE `t_memberfoto_album` (
  `idalbum` int(11) NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `keterangan` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_memberfoto_kom`
--

CREATE TABLE `t_memberfoto_kom` (
  `idfotokom` int(11) NOT NULL,
  `idfoto` int(11) DEFAULT NULL,
  `userid` int(10) DEFAULT NULL,
  `komentar` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_membergroup`
--

CREATE TABLE `t_membergroup` (
  `idgroup` int(11) NOT NULL,
  `nmgroup` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ket` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stgroup` varchar(1) COLLATE latin1_general_ci DEFAULT '0' COMMENT '0=terbuka atau 1=tertutup',
  `idjenis` int(11) DEFAULT NULL,
  `userid` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_membergroup_anggota`
--

CREATE TABLE `t_membergroup_anggota` (
  `idgroup` int(11) NOT NULL,
  `userid` int(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kategori` varchar(1) COLLATE latin1_general_ci DEFAULT '0' COMMENT '0=biasa , 1=petugas/moderator',
  `status` varchar(1) COLLATE latin1_general_ci DEFAULT '0' COMMENT '0=diajak orang/invite ,1=ok,2=mengajukan ikut bergabung'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_membergroup_diskusi`
--

CREATE TABLE `t_membergroup_diskusi` (
  `idtopik` int(11) NOT NULL,
  `idgroup` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(10) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `isi` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_membergroup_diskusibalas`
--

CREATE TABLE `t_membergroup_diskusibalas` (
  `idbalas` int(11) NOT NULL,
  `idtopik` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(10) DEFAULT NULL,
  `isi` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_membergroup_info`
--

CREATE TABLE `t_membergroup_info` (
  `idgroupinfo` int(11) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `idgroup` int(11) DEFAULT NULL,
  `isi` text COLLATE latin1_general_ci,
  `userid` int(10) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_membergroup_infokom`
--

CREATE TABLE `t_membergroup_infokom` (
  `idinfokom` int(11) NOT NULL,
  `idgroupinfo` int(11) DEFAULT NULL,
  `userid` int(10) DEFAULT NULL,
  `komentar` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_membergroup_jenis`
--

CREATE TABLE `t_membergroup_jenis` (
  `idjenis` int(11) NOT NULL,
  `jenis` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_memberlihat`
--

CREATE TABLE `t_memberlihat` (
  `idlihat` int(11) NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `userlihat` int(10) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AVG_ROW_LENGTH=1 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_memberstatus`
--

CREATE TABLE `t_memberstatus` (
  `idstatus` int(11) NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pengirim` int(10) DEFAULT NULL,
  `pesan` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(1) COLLATE latin1_general_ci DEFAULT '0',
  `jml_komen` int(10) NOT NULL,
  `post_lokasi` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_memberstatus_kom`
--

CREATE TABLE `t_memberstatus_kom` (
  `idstatuskom` int(11) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `userid` int(10) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `pesan` varchar(200) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM AVG_ROW_LENGTH=1 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_member_cad`
--

CREATE TABLE `t_member_cad` (
  `userid` int(10) NOT NULL DEFAULT '0',
  `nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tgllahir` varchar(12) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `kelamin` char(1) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `kerja` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `negara` char(3) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `telp` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `sekolah` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `homepage` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `profil` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `psn_kesn` text NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pengingat` char(1) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `jawaban` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `kategori` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `status` char(1) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tgl_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nis` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `kelas` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ket` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `stblog` char(1) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `kunjungblog` int(10) NOT NULL DEFAULT '1',
  `point` int(11) DEFAULT '0',
  `stlogin` varchar(1) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT '0',
  `totlogin` int(11) DEFAULT '0',
  `ip` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `stprofil` varchar(4) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'open',
  `setfacebook` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_member_contact`
--

CREATE TABLE `t_member_contact` (
  `id` int(10) NOT NULL,
  `id_master` int(10) NOT NULL DEFAULT '0',
  `id_con` int(10) NOT NULL DEFAULT '0',
  `status` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT '0' COMMENT '0=status blm distujui, 1=sudah ok\r\n2=blok',
  `host` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_member_custom`
--

CREATE TABLE `t_member_custom` (
  `userid` int(10) NOT NULL,
  `bgbody` text COLLATE latin1_general_ci,
  `widgetkanan` text COLLATE latin1_general_ci,
  `widgetkiri` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_member_games`
--

CREATE TABLE `t_member_games` (
  `idgames` int(11) NOT NULL,
  `judul` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ket` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `visit` int(11) DEFAULT '0',
  `kategori` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(1) COLLATE latin1_general_ci DEFAULT '0' COMMENT '0=file flash, 1=iframe ke website laen',
  `link` varchar(225) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_member_pesan`
--

CREATE TABLE `t_member_pesan` (
  `id` int(10) NOT NULL,
  `judul` varchar(60) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pesan` text COLLATE latin1_general_ci,
  `userid` int(10) NOT NULL DEFAULT '0',
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT '0' COMMENT '0=baru ngirim, 1 udah dibuka',
  `semua` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT '0' COMMENT '0=tidak semua, 1=semua teman dikirim',
  `tujuan_id` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_member_point`
--

CREATE TABLE `t_member_point` (
  `idpoint` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `p1` int(10) NOT NULL,
  `p2` int(10) NOT NULL,
  `p3` int(10) NOT NULL,
  `p4` int(10) NOT NULL,
  `p5` int(10) NOT NULL,
  `p6` int(10) NOT NULL,
  `p7` int(10) NOT NULL,
  `p8` int(10) NOT NULL,
  `ptotal` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_member_point_group`
--

CREATE TABLE `t_member_point_group` (
  `idpointgroup` int(10) NOT NULL,
  `idgroup` int(10) NOT NULL,
  `p1` int(10) NOT NULL,
  `p2` int(10) NOT NULL,
  `ptotal` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_member_uasbn`
--

CREATE TABLE `t_member_uasbn` (
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

-- --------------------------------------------------------

--
-- Table structure for table `t_mengajar`
--

CREATE TABLE `t_mengajar` (
  `idajar` int(11) NOT NULL,
  `nip` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `program` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `jampel` tinyint(4) DEFAULT NULL,
  `sem` tinyint(4) DEFAULT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `agama` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `hari` varchar(6) COLLATE latin1_general_ci DEFAULT NULL,
  `jam_ke` tinyint(4) DEFAULT NULL,
  `jam_pel` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `ruang` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_mengajar`
--

INSERT INTO `t_mengajar` (`idajar`, `nip`, `nama`, `kelas`, `pel`, `program`, `jampel`, `sem`, `th_ajar`, `agama`, `hari`, `jam_ke`, `jam_pel`, `ruang`, `tgl_update`) VALUES
(40781, '3213123', 'Imam Sholahudin', 'xi tkj 2', 'Matematika', 'TKJ', 3, 1, '2018/2019', NULL, 'Senin', 1, '1,2,3', '1', '2019-01-12 03:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `t_news`
--

CREATE TABLE `t_news` (
  `id` int(10) NOT NULL,
  `isi` longtext COLLATE latin1_general_ci,
  `subject` text COLLATE latin1_general_ci,
  `pengirim` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `posttime` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `postdate` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `visits` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_news_kom`
--

CREATE TABLE `t_news_kom` (
  `idkom` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `nama` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `komentar` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_nilai`
--

CREATE TABLE `t_nilai` (
  `kd_nilai` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `pelajaran` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `semester` char(1) COLLATE latin1_general_ci NOT NULL,
  `ujian_ke` int(11) NOT NULL,
  `status` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `tgl_ujian` datetime DEFAULT NULL,
  `skbm` int(3) DEFAULT NULL,
  `guru` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ket` tinytext COLLATE latin1_general_ci,
  `kd_remedial` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_nilai_detail`
--

CREATE TABLE `t_nilai_detail` (
  `kd_nilai` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `NIS` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `no_ljk` varchar(7) COLLATE latin1_general_ci DEFAULT NULL,
  `nilai` decimal(5,0) DEFAULT NULL,
  `tuntas` char(1) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_online`
--

CREATE TABLE `t_online` (
  `visit` int(10) NOT NULL DEFAULT '0',
  `time` int(10) DEFAULT NULL,
  `type` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `t_pelajaran_ktgr`
--

CREATE TABLE `t_pelajaran_ktgr` (
  `idpelktgr` int(11) NOT NULL,
  `program` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `kategori` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `koordinator` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(15) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_pelajaran_kurikulum`
--

CREATE TABLE `t_pelajaran_kurikulum` (
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
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `id_pel_jenis` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `id_pel_sub` tinyint(4) DEFAULT NULL,
  `id_pel_pel` tinyint(4) DEFAULT NULL,
  `produktif` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `Tingkat1` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `Tingkat2` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `Tingkat3` varchar(12) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_pelajaran_raport`
--

CREATE TABLE `t_pelajaran_raport` (
  `id` int(10) NOT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `no_urut` int(2) DEFAULT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `SKBM` float DEFAULT NULL,
  `N1` float DEFAULT NULL,
  `N2` float DEFAULT NULL,
  `N3` float DEFAULT NULL,
  `N4` float DEFAULT NULL,
  `N5` float DEFAULT NULL,
  `N6` float DEFAULT NULL,
  `N7` float DEFAULT NULL,
  `N8` float DEFAULT NULL,
  `N9` float DEFAULT NULL,
  `Rata2` float DEFAULT NULL,
  `n_rata2` float DEFAULT NULL,
  `UTS` float DEFAULT NULL,
  `UAS` float DEFAULT NULL,
  `Angka` float DEFAULT NULL,
  `Huruf` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Keterangan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `t_pelaj_skkd`
--

CREATE TABLE `t_pelaj_skkd` (
  `idskkd` int(11) NOT NULL,
  `idsk` int(3) DEFAULT NULL,
  `idkd` int(3) DEFAULT NULL,
  `skkd` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `kode_nilai` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `program` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `skbm` float DEFAULT NULL,
  `sem` tinyint(4) DEFAULT NULL,
  `tingkat` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `agama` varchar(12) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_pelaj_tuntas`
--

CREATE TABLE `t_pelaj_tuntas` (
  `idskkd` int(11) NOT NULL,
  `nilai_min` float DEFAULT NULL,
  `nilai_max` float DEFAULT NULL,
  `deskripsi` varchar(1024) COLLATE latin1_general_ci DEFAULT NULL,
  `perikat` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `program` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `skbm` float DEFAULT NULL,
  `sem` tinyint(4) DEFAULT NULL,
  `tingkat` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `agama` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `kompetensi` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `tipe` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `predikat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sikap` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_pelaj_tuntas1`
--

CREATE TABLE `t_pelaj_tuntas1` (
  `idskkd` int(11) NOT NULL,
  `nilai_min` float DEFAULT NULL,
  `nilai_max` float DEFAULT NULL,
  `deskripsi` varchar(512) COLLATE latin1_general_ci DEFAULT NULL,
  `perikat` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `program` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `skbm` float DEFAULT NULL,
  `sem` tinyint(4) DEFAULT NULL,
  `tingkat` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `agama` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `kompetensi` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `tipe` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `predikat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sikap` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_pel_jenis`
--

CREATE TABLE `t_pel_jenis` (
  `idpeljenis` int(11) NOT NULL,
  `idpelstruktur` int(11) DEFAULT '0',
  `program` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `abjad` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(15) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_pel_ktgr`
--

CREATE TABLE `t_pel_ktgr` (
  `idpelktgr` int(11) NOT NULL,
  `abjad` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `kategori` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(15) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_pel_produktif`
--

CREATE TABLE `t_pel_produktif` (
  `idpeljenis` int(11) NOT NULL,
  `idpelstruktur` int(11) DEFAULT '0',
  `program` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `abjad` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis_joint` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `produktif` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(15) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_pel_skkd`
--

CREATE TABLE `t_pel_skkd` (
  `idpelskkd` int(11) NOT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `komputensi` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_pel_struktur`
--

CREATE TABLE `t_pel_struktur` (
  `idpelstruktur` int(11) NOT NULL,
  `program` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `abjad` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `struktur` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(15) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_pesan`
--

CREATE TABLE `t_pesan` (
  `id` int(10) NOT NULL,
  `pengirim` int(10) NOT NULL,
  `pesan` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_pesan_alum`
--

CREATE TABLE `t_pesan_alum` (
  `id` int(10) NOT NULL,
  `pengirim` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `waktu` varchar(25) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_polling`
--

CREATE TABLE `t_polling` (
  `id_polling` int(10) NOT NULL,
  `polling` text NOT NULL,
  `polling_untuk` varchar(100) NOT NULL,
  `kategori_polling` varchar(100) NOT NULL,
  `pilihan_a` text NOT NULL,
  `pilihan_b` text NOT NULL,
  `pilihan_c` text NOT NULL,
  `pilihan_d` text NOT NULL,
  `jawab_a` text NOT NULL,
  `jawab_b` text NOT NULL,
  `jawab_c` text NOT NULL,
  `jawab_d` text NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_polling_detail`
--

CREATE TABLE `t_polling_detail` (
  `id_pemilih` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `id_polling` int(10) NOT NULL,
  `pilih_polling` varchar(100) NOT NULL DEFAULT 'd',
  `nama_pemilih` varchar(100) NOT NULL,
  `kelas_pemilih` varchar(100) NOT NULL,
  `tanggal_memilih` date NOT NULL,
  `waktu_memilih` time NOT NULL,
  `thn_memilih` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_polling_komentar`
--

CREATE TABLE `t_polling_komentar` (
  `id_komentar_polling` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `kategori_polling` varchar(100) NOT NULL,
  `nama_komentar` varchar(100) NOT NULL,
  `kelas_komentar` varchar(100) NOT NULL,
  `tanggal_komentar` date NOT NULL,
  `waktu_komentar` time NOT NULL,
  `komentar` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pos_menu`
--

CREATE TABLE `t_pos_menu` (
  `id` int(2) NOT NULL,
  `menu` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `posisi` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `urut` int(2) DEFAULT NULL,
  `kategori` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `fungsi` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sembunyi` char(1) COLLATE latin1_general_ci DEFAULT 't',
  `idtemp` int(2) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_prakerin`
--

CREATE TABLE `t_prakerin` (
  `id_tmp_prakerin` int(10) NOT NULL,
  `nama_prakerin` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alamat_prakerin` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `telp_prakerin` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kota_prakerin` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `program` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pembimbing` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `direktur` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `website` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `th_ajar` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_prakerin_pembimbing`
--

CREATE TABLE `t_prakerin_pembimbing` (
  `id_pembimbing` int(10) NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `program` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_prakerin_siswa`
--

CREATE TABLE `t_prakerin_siswa` (
  `id_siswa_prakerin` int(10) NOT NULL,
  `id_tmp_prakerin` int(10) DEFAULT NULL,
  `id_pembimbing` int(10) DEFAULT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `nama_prakerin` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_prakerin` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `pembimbing` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `nip` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `lama_bln` int(10) DEFAULT NULL,
  `tgl_start` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `tapel` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `prakerinke` int(1) DEFAULT NULL,
  `program` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_prestasi`
--

CREATE TABLE `t_prestasi` (
  `id` int(10) NOT NULL DEFAULT '0',
  `judul` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ket` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_profil`
--

CREATE TABLE `t_profil` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `isi` longtext COLLATE latin1_general_ci NOT NULL,
  `urut` int(11) DEFAULT NULL,
  `parent` int(5) DEFAULT '0',
  `link` varchar(200) COLLATE latin1_general_ci DEFAULT '0',
  `hide` int(1) NOT NULL DEFAULT '0',
  `target` varchar(10) COLLATE latin1_general_ci DEFAULT '_self'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
-- Table structure for table `t_project`
--

CREATE TABLE `t_project` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `deskripsi` longtext COLLATE latin1_general_ci NOT NULL,
  `userid` int(10) NOT NULL DEFAULT '0',
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `visit` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_project_com`
--

CREATE TABLE `t_project_com` (
  `id` int(10) NOT NULL,
  `komentar` text COLLATE latin1_general_ci NOT NULL,
  `id_project` int(10) NOT NULL DEFAULT '0',
  `userid` int(10) NOT NULL DEFAULT '0',
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_raport`
--

CREATE TABLE `t_raport` (
  `id` int(10) NOT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `SKBM` float DEFAULT NULL,
  `N1` float DEFAULT NULL,
  `N2` float DEFAULT NULL,
  `N3` float DEFAULT NULL,
  `N4` float DEFAULT NULL,
  `N5` float DEFAULT NULL,
  `N6` float DEFAULT NULL,
  `N7` float DEFAULT NULL,
  `N8` float DEFAULT NULL,
  `N9` float DEFAULT NULL,
  `Rata2` float DEFAULT NULL,
  `n_rata2` float DEFAULT NULL,
  `UTS` float DEFAULT NULL,
  `UAS` float DEFAULT NULL,
  `JURNAL` float DEFAULT NULL,
  `Angka` float DEFAULT NULL,
  `Huruf` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Keterangan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `n_konversi` float DEFAULT NULL,
  `penilaian` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `idpel` int(11) DEFAULT NULL,
  `Religius` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `Jujur` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `Toleransi` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `Kemandirian` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `Kegigihan` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `PercayaDiri` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `Kewarganegaraan` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `Kerjasama` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `Belanegara` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `Kedisiplinan` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `TanggungJawab` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `K12` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `K13` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `K14` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `K15` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `K16` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `K17` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `K18` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `id_pel_jenis` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `id_pel_sub` tinyint(4) DEFAULT NULL,
  `id_pel_pel` tinyint(4) DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Kunci` char(1) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_raport`
--

INSERT INTO `t_raport` (`id`, `th_ajar`, `pel`, `kelas`, `sem`, `no_urut`, `no_induk`, `SKBM`, `N1`, `N2`, `N3`, `N4`, `N5`, `N6`, `N7`, `N8`, `N9`, `Rata2`, `n_rata2`, `UTS`, `UAS`, `JURNAL`, `Angka`, `Huruf`, `Keterangan`, `jenis`, `n_konversi`, `penilaian`, `idpel`, `Religius`, `Jujur`, `Toleransi`, `Kemandirian`, `Kegigihan`, `PercayaDiri`, `Kewarganegaraan`, `Kerjasama`, `Belanegara`, `Kedisiplinan`, `TanggungJawab`, `K12`, `K13`, `K14`, `K15`, `K16`, `K17`, `K18`, `id_pel_jenis`, `id_pel_sub`, `id_pel_pel`, `tgl_update`, `Kunci`) VALUES
(1297746, '2017/2018', 'Matematika', '10 TKJ 1', '1', 1, '0010881115', NULL, 4.8, 5, 9, 6, 7, 8, NULL, NULL, NULL, 4.8, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-11 02:59:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_raport2`
--

CREATE TABLE `t_raport2` (
  `id_raport2` int(30) NOT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `pel` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `th_ajar` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `no_induk` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `namadudi` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `alamatdudi` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `pelaksanaandudi` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `nilaidudi` float DEFAULT NULL,
  `ketdudi` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `s` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `i` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `a` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `nilai_bk` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `ekstra1` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ekstra1_nilai` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `ekstra2` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ekstra2_nilai` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `ekstra3` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ekstra3_nilai` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `kelakuan` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `kerajinan` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `kerapian` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `sopan_santun` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `kedisiplinan` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `tata_tertib` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `juara_ekskul` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `juara_organisasi` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `catatan` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `intra1` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `intra1_nilai` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `prestasi1` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `prestasi1_nilai` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `prestasi_2` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `prestasi2_nilai` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `prestasi3` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `prestasi3_nilai` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `catatan_prestasi` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `namadudi2` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `alamatdudi2` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `pelaksanaandudi2` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `nilaidudi2` float DEFAULT NULL,
  `ketdudi2` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `no_sertifikat` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `ukk_dudi` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `direktur_dudi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `direktur_nip` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `penguji_dudi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `penguji_nip` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `tgl_sertifikat` date DEFAULT NULL,
  `no_ujian_ukk` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `prestasi1_cat` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `prestasi2_cat` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `prestasi3_cat` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `intra1_cat` varchar(250) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_raport_bak`
--

CREATE TABLE `t_raport_bak` (
  `id` int(10) NOT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `SKBM` float DEFAULT NULL,
  `N1` float DEFAULT NULL,
  `N2` float DEFAULT NULL,
  `N3` float DEFAULT NULL,
  `N4` float DEFAULT NULL,
  `N5` float DEFAULT NULL,
  `N6` float DEFAULT NULL,
  `N7` float DEFAULT NULL,
  `N8` float DEFAULT NULL,
  `N9` float DEFAULT NULL,
  `Rata2` float DEFAULT NULL,
  `n_rata2` float DEFAULT NULL,
  `UTS` float DEFAULT NULL,
  `UAS` float DEFAULT NULL,
  `Angka` float DEFAULT NULL,
  `Huruf` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Keterangan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `idpel` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_raport_karakter`
--

CREATE TABLE `t_raport_karakter` (
  `id_karakter` int(10) NOT NULL,
  `penilaian` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `nilai` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `deskripsi` varchar(500) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_raport_kur13_keterampilan`
--

CREATE TABLE `t_raport_kur13_keterampilan` (
  `id_r13_keterampilan` int(20) NOT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `idpel` int(10) DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `n1` float DEFAULT NULL,
  `n2` float DEFAULT NULL,
  `n3` float DEFAULT NULL,
  `n4` float DEFAULT NULL,
  `n5` float DEFAULT NULL,
  `n6` float DEFAULT NULL,
  `n7` float DEFAULT NULL,
  `n8` float DEFAULT NULL,
  `n9` float DEFAULT NULL,
  `n10` float DEFAULT NULL,
  `n11` float DEFAULT NULL,
  `n12` float DEFAULT NULL,
  `n_jml` float DEFAULT NULL,
  `Rata2` float DEFAULT NULL,
  `n_rata2` float DEFAULT NULL,
  `n_portofolio` float DEFAULT NULL,
  `n_proyek` float DEFAULT NULL,
  `n_produk` float DEFAULT NULL,
  `n_presentasi` float DEFAULT NULL,
  `n_kinerja` float DEFAULT NULL,
  `na_raport` int(10) DEFAULT NULL,
  `n_rata2_4` float DEFAULT NULL,
  `n_portofolio_4` float DEFAULT NULL,
  `n_proyek_4` float DEFAULT NULL,
  `n_produk_4` float DEFAULT NULL,
  `n_presentasi_4` float DEFAULT NULL,
  `n_kinerja_4` float DEFAULT NULL,
  `na_raport_4` float DEFAULT NULL,
  `predikat_4` varchar(5) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_raport_kur13_pengetahuan`
--

CREATE TABLE `t_raport_kur13_pengetahuan` (
  `id_r13_pengetahuan` int(20) NOT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `idpel` int(10) DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `SKBM` float DEFAULT NULL,
  `n1` float DEFAULT NULL,
  `n2` float DEFAULT NULL,
  `n3` float DEFAULT NULL,
  `n4` float DEFAULT NULL,
  `n5` float DEFAULT NULL,
  `n6` float DEFAULT NULL,
  `n7` float DEFAULT NULL,
  `n8` float DEFAULT NULL,
  `n9` float DEFAULT NULL,
  `n_jml` float DEFAULT NULL,
  `Rata2` float DEFAULT NULL,
  `n_rata2` float DEFAULT NULL,
  `n_uts` float DEFAULT NULL,
  `n_uas` float DEFAULT NULL,
  `na_raport` float DEFAULT NULL,
  `n_rata2_4` float DEFAULT NULL,
  `n_uts_4` float DEFAULT NULL,
  `n_uas_4` float DEFAULT NULL,
  `na_raport_4` float DEFAULT NULL,
  `predikat_4` varchar(5) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_raport_kur13_rekap`
--

CREATE TABLE `t_raport_kur13_rekap` (
  `id_r13_rekap` int(20) NOT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `pengetahuan_angka` float DEFAULT NULL,
  `pengetahuan_predikat` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `pengetahuan_catatan` text COLLATE latin1_general_ci,
  `keterampilan_angka` float DEFAULT NULL,
  `keterampilan_predikat` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `keterampilan_catatan` text COLLATE latin1_general_ci,
  `sikap_angka` float DEFAULT NULL,
  `sikap_predikat` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sikap_catatan` text COLLATE latin1_general_ci,
  `lastgenerate` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_raport_kur13_sikap`
--

CREATE TABLE `t_raport_kur13_sikap` (
  `id_r13_sikap` int(20) NOT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `idpel` int(10) DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `n1` float DEFAULT NULL,
  `n2` float DEFAULT NULL,
  `n3` float DEFAULT NULL,
  `n4` float DEFAULT NULL,
  `n5` float DEFAULT NULL,
  `n6` float DEFAULT NULL,
  `n7` float DEFAULT NULL,
  `n8` float DEFAULT NULL,
  `n9` float DEFAULT NULL,
  `n10` float DEFAULT NULL,
  `n11` float DEFAULT NULL,
  `n12` float DEFAULT NULL,
  `n_jml` float DEFAULT NULL,
  `Rata2` float DEFAULT NULL,
  `n_rata2` float DEFAULT NULL,
  `n_diri` float DEFAULT NULL,
  `n_antar` float DEFAULT NULL,
  `n_jurnal` float DEFAULT NULL,
  `na_raport` float DEFAULT NULL,
  `n_rata2_4` float DEFAULT NULL,
  `n_diri_4` float DEFAULT NULL,
  `n_antar_4` float DEFAULT NULL,
  `n_jurnal_4` float DEFAULT NULL,
  `na_raport_4` float DEFAULT NULL,
  `predikat_4` varchar(20) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_raport_ledger2013`
--

CREATE TABLE `t_raport_ledger2013` (
  `id` int(10) NOT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `0PengN` float DEFAULT NULL,
  `0PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `0KetrN` float DEFAULT NULL,
  `0KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `0Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `1PengN` float DEFAULT NULL,
  `1PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `1KetrN` float DEFAULT NULL,
  `1KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `1Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `2PengN` float DEFAULT NULL,
  `2PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `2KetrN` float DEFAULT NULL,
  `2KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `2Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `3PengN` float DEFAULT NULL,
  `3PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `3KetrN` float DEFAULT NULL,
  `3KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `3Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `4PengN` float DEFAULT NULL,
  `4PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `4KetrN` float DEFAULT NULL,
  `4KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `4Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `5PengN` float DEFAULT NULL,
  `5PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `5KetrN` float DEFAULT NULL,
  `5KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `5Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `6PengN` float DEFAULT NULL,
  `6PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `6KetrN` float DEFAULT NULL,
  `6KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `6Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `7PengN` float DEFAULT NULL,
  `7PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `7KetrN` float DEFAULT NULL,
  `7KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `7Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `8PengN` float DEFAULT NULL,
  `8PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `8KetrN` float DEFAULT NULL,
  `8KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `8Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `9PengN` float DEFAULT NULL,
  `9PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `9KetrN` float DEFAULT NULL,
  `9KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `9Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `10PengN` float DEFAULT NULL,
  `10PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `10KetrN` float DEFAULT NULL,
  `10KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `10Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `11PengN` float DEFAULT NULL,
  `11PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `11KetrN` float DEFAULT NULL,
  `11KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `11Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `12PengN` float DEFAULT NULL,
  `12PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `12KetrN` float DEFAULT NULL,
  `12KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `12Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `13PengN` float DEFAULT NULL,
  `13PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `13KetrN` float DEFAULT NULL,
  `13KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `13Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `14PengN` float DEFAULT NULL,
  `14PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `14KetrN` float DEFAULT NULL,
  `14KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `14Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `15PengN` float DEFAULT NULL,
  `15PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `15KetrN` float DEFAULT NULL,
  `15KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `15Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `16PengN` float DEFAULT NULL,
  `16PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `16KetrN` float DEFAULT NULL,
  `16KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `16Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `17PengN` float DEFAULT NULL,
  `17PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `17KetrN` float DEFAULT NULL,
  `17KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `17Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `18PengN` float DEFAULT NULL,
  `18PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `18KetrN` float DEFAULT NULL,
  `18KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `18Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `19PengN` float DEFAULT NULL,
  `19PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `19KetrN` float DEFAULT NULL,
  `19KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `19Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `20PengN` float DEFAULT NULL,
  `20PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `20KetrN` float DEFAULT NULL,
  `20KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `20Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `21PengN` float DEFAULT NULL,
  `21PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `21KetrN` float DEFAULT NULL,
  `21KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `21Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `22PengN` float DEFAULT NULL,
  `22PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `22KetrN` float DEFAULT NULL,
  `22KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `22Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `23PengN` float DEFAULT NULL,
  `23PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `23KetrN` float DEFAULT NULL,
  `23KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `23Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `24PengN` float DEFAULT NULL,
  `24PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `24KetrN` float DEFAULT NULL,
  `24KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `24Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `25PengN` float DEFAULT NULL,
  `25PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `25KetrN` float DEFAULT NULL,
  `25KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `25Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `26PengN` float DEFAULT NULL,
  `26PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `26KetrN` float DEFAULT NULL,
  `26KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `26Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `27PengN` float DEFAULT NULL,
  `27PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `27KetrN` float DEFAULT NULL,
  `27KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `27Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `28PengN` float DEFAULT NULL,
  `28PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `28KetrN` float DEFAULT NULL,
  `28KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `28Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `29PengN` float DEFAULT NULL,
  `29PengH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `29KetrN` float DEFAULT NULL,
  `29KetrH` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `29Sikap` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `hadir` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `izin` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `sakit` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `alpa` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `PD1` float DEFAULT NULL,
  `Pred1` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `PD2` float DEFAULT NULL,
  `Pred2` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `PD3` float DEFAULT NULL,
  `Pred3` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `PD4` float DEFAULT NULL,
  `Pred4` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `RankPeng` tinyint(2) DEFAULT NULL,
  `RankKetr` tinyint(2) DEFAULT NULL,
  `Rank` tinyint(2) DEFAULT NULL,
  `namadudi` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `nilaidudi` float DEFAULT NULL,
  `alamatdudi` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `pelaksanaandudi` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `Kunci` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `Catatan Prestasi` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `ketdudi` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `namadudi2` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `alamatdudi2` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `pelaksanaandudi2` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ketdudi2` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `nilaidudi2` float DEFAULT NULL,
  `agama` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(4) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_raport_pkg`
--

CREATE TABLE `t_raport_pkg` (
  `id` int(10) NOT NULL,
  `tahun` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `penilai` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `periode_awal` date DEFAULT NULL,
  `periode_akhir` date DEFAULT NULL,
  `jenis` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `nip` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `a1` float DEFAULT NULL,
  `a2` float DEFAULT NULL,
  `a3` float DEFAULT NULL,
  `a4` float DEFAULT NULL,
  `a5` float DEFAULT NULL,
  `a6` float DEFAULT NULL,
  `a7` float DEFAULT NULL,
  `b8` float DEFAULT NULL,
  `b9` float DEFAULT NULL,
  `b10` float DEFAULT NULL,
  `c11` float DEFAULT NULL,
  `c12` float DEFAULT NULL,
  `d13` float DEFAULT NULL,
  `d14` float DEFAULT NULL,
  `t1` float DEFAULT NULL,
  `t2` float DEFAULT NULL,
  `t3` float DEFAULT NULL,
  `t4` float DEFAULT NULL,
  `t5` float DEFAULT NULL,
  `t6` float DEFAULT NULL,
  `t7` float DEFAULT NULL,
  `t8` float DEFAULT NULL,
  `t9` float DEFAULT NULL,
  `t10` float DEFAULT NULL,
  `pns` enum('Y','N') COLLATE latin1_general_ci DEFAULT 'N',
  `guru` enum('Y','N') COLLATE latin1_general_ci DEFAULT 'Y',
  `tgl_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_raport_rank`
--

CREATE TABLE `t_raport_rank` (
  `id` int(10) NOT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `pel` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `SKBM` float DEFAULT NULL,
  `N1` float DEFAULT NULL,
  `N2` float DEFAULT NULL,
  `N3` float DEFAULT NULL,
  `N4` float DEFAULT NULL,
  `N5` float DEFAULT NULL,
  `N6` float DEFAULT NULL,
  `N7` float DEFAULT NULL,
  `N8` float DEFAULT NULL,
  `N9` float DEFAULT NULL,
  `Rata2` float DEFAULT NULL,
  `n_rata2` float DEFAULT NULL,
  `UTS` float DEFAULT NULL,
  `UAS` float DEFAULT NULL,
  `Angka` float DEFAULT NULL,
  `Huruf` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Keterangan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_raport_sikap`
--

CREATE TABLE `t_raport_sikap` (
  `id_raport_sikap` int(10) NOT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `penilaian` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Jenis` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `nilai` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

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

-- --------------------------------------------------------

--
-- Table structure for table `t_ruang_sarana`
--

CREATE TABLE `t_ruang_sarana` (
  `id` int(10) NOT NULL,
  `id_ruang` int(11) DEFAULT NULL,
  `kode` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `no_reg` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `merk` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `type` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `ukuran` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `bahan` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `th_pembelian` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `pabrik` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `rangka` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `mesin` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `polisi` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `bpkb` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `kelaikan` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `kepemilikan` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `thajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_sem`
--

CREATE TABLE `t_sem` (
  `idsem` int(11) NOT NULL,
  `sem` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `t_semester`
--

CREATE TABLE `t_semester` (
  `idsem` int(11) NOT NULL,
  `semester` int(2) DEFAULT NULL,
  `TglRaport` date DEFAULT NULL,
  `KepSekNama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `KepSekPangkat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `KepSekNip` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `JenisKur` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `thajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_sesi`
--

CREATE TABLE `t_sesi` (
  `ID` int(11) NOT NULL,
  `Sesi` int(11) DEFAULT NULL,
  `Kapasitas` int(11) DEFAULT NULL,
  `Tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_silabus`
--

CREATE TABLE `t_silabus` (
  `id` int(5) NOT NULL,
  `pelajaran` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `file` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `visit` int(10) NOT NULL DEFAULT '0',
  `ket` text COLLATE latin1_general_ci NOT NULL,
  `kelas` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tanggal` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `semester` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
  `th_daftar` varchar(4) COLLATE latin1_general_ci DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `t_siswa`
--

INSERT INTO `t_siswa` (`user_id`, `no_induk`, `ind_prog`, `kode_prog`, `no_urut`, `nama`, `sis_nma_pnggln`, `kelas`, `sis_nisn`, `sis_no_psrta_unas`, `sttb_tgl`, `sttb`, `nem_tgl`, `nem`, `alamat`, `alamat_rt`, `alamat_rw`, `alamat_lurah`, `alamat_camat`, `alamat_kodya`, `alamat_prop`, `alamat_tinggal`, `alamat_kec_tngl`, `alamat_kab_tngl`, `sis_tggal_dgn`, `sis_jrak_ke_skul`, `tgl_lahir`, `telp`, `agama`, `kelamin`, `tmp_lahir`, `tgl_input`, `sis_tmt_dri`, `sis_lma_blajar`, `sis_pndahn_seklah`, `sis_pndahn_alasan`, `sis_dtrm_kelas`, `sis_dtrm_bdng_khlian`, `sis_dtrm_prog_khlian`, `sis_dtrm_komp_khlian`, `sis_dtrm_tgl`, `wali`, `wali_ktp`, `wali_tmpt_lhir`, `wali_tgl_lhir`, `wali_agama`, `wali_kwarganegraan`, `wali_pndidikan`, `wali_pkrjaan`, `wali_pnghasilan_bln`, `wali_almat`, `wali_tlp`, `hub_wali_siswa`, `ibu`, `ibu_ktp`, `ibu_tmpt_lhir`, `ibu_tgl_lhir`, `ibu_agama`, `ibu_kwarganegraan`, `ibu_pndidikan`, `ibu_pkrjaan`, `ibu_pnghasilan_bln`, `ibu_almat`, `ibu_tlp`, `ibu_status`, `ayah`, `ayah_ktp`, `ayh_tmpt_lhir`, `ayh_tgl_lhir`, `ayh_agama`, `ayh_kwarganegraan`, `ayh_pndidikan`, `ayh_pkrjaan`, `ayh_pnghasilan_bln`, `ayh_almat`, `ayh_tlp`, `ayh_status`, `sis_kwarganegraan`, `sis_anak_ke`, `sis_jml_sdr_kndung`, `sis_jml_sdr_tiri`, `sis_jml_sdr_angkat`, `sis_status`, `sis_bhs_shari_hri`, `sis_gol_darah`, `sis_penyakit`, `sis_kel_jasmani`, `sis_tinggi_berat`, `sis_ksenian`, `sis_olahrga`, `sis_kmasyaraktn`, `sis_organisasi`, `sis_hobby`, `sis_cita2`, `sis_lain2`, `rumah_kondisi`, `rumah_fisik`, `prestasi`, `alat_transport`, `sis_kps`, `sis_kip`, `sis_kks`, `sis_nokk`, `sis_nik`, `sis_beasiswa`, `sis_pndah_seklah`, `sis_pndah_alsn`, `sis_luls_thn`, `sis_luls_ijazah`, `sis_luls_skhu`, `sis_lnjut_ke`, `sis_krja_tgl`, `sis_krja_tmpt`, `sis_krja_pnghsilan`, `ijz_fc_lg`, `ijz_fc_bs`, `skhun_fc_lg`, `skhun_fc_bs`, `kk`, `akte`, `alat_tansport`, `th_ajar`, `n_unas`, `no_unas`, `sis_email`, `n_raport`, `n_test`, `n_minat`, `n_akhir`, `p_unas`, `p_raport`, `p_test`, `p_minat`, `p_akhir`, `petugas`, `no_daftar`, `foto_daftar`, `th_daftar`, `id_kelas`) VALUES
('1', '0013178123', 4, '5', 4, 'Hana', NULL, '12 TKJ 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 'malang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102128, NULL, NULL, 3),
('2', '0013179018', 2, '3', 2, 'Inas Imaddinar', NULL, '12 TKJ 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'malang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102129, NULL, NULL, 3),
('3', '0010864827', 3, '4', 3, 'Pedrick', NULL, '10 PR 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'malang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102130, NULL, NULL, 4),
('4', '0013223598', 1, '2', 1, 'MUHAMMAD FIKRI', 'FIKRI', '10 PR 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'malang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102131, NULL, NULL, 4),
('5', '0013224881', 5, '1', 5, 'Dinung', NULL, '11 PR 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 'malang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102132, NULL, NULL, 5),
('6', '0013223802', 6, '6', 6, 'Uzumaki Naruto', NULL, '11 PR 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'tokyo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102133, NULL, NULL, 5),
('7', '0013223952', 7, '7', 7, 'Monkey D. Luffy', NULL, '11 TKJ 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'london', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102134, NULL, NULL, 2),
('8', '0010881115', 8, '8', 8, 'Uchiha Sasuke', NULL, '10 TKJ 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', 'aceh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102135, NULL, NULL, 1),
('9', '0010729490', 9, '9', 9, 'Sakura Haruno', NULL, '10 TKJ 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 'barcelona', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102136, NULL, NULL, 1),
('10', '0013224080', 10, '10', 10, 'Kim Dahyun', NULL, '11 TKJ 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'P', 'liverpool', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6102137, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa_alumni`
--

CREATE TABLE `t_siswa_alumni` (
  `user_id` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_induk` varchar(10) DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `nama` varchar(70) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nma_pnggln` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nisn` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_no_psrta_unas` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sttb_tgl` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sttb` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nem_tgl` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nem` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` varchar(120) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_rt` varchar(3) DEFAULT NULL,
  `alamat_rw` varchar(3) DEFAULT NULL,
  `alamat_lurah` varchar(30) DEFAULT NULL,
  `alamat_camat` varchar(30) DEFAULT NULL,
  `alamat_kodya` varchar(30) DEFAULT NULL,
  `alamat_prop` varchar(30) DEFAULT NULL,
  `sis_tggal_dgn` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_jrak_ke_skul` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_lahir` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT '00/00/0000',
  `telp` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `agama` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `kelamin` char(1) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `tmp_lahir` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_input` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT '00/00/0000',
  `sis_tmt_dri` varchar(70) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_lma_blajar` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndahn_seklah` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndahn_alasan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_kelas` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_bdng_khlian` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_komp_khlian` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_tgl` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT '00/00/0000',
  `wali` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `wali_ktp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `wali_tmpt_lhir` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `wali_tgl_lhir` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT '00/00/0000',
  `wali_agama` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `wali_kwarganegraan` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `wali_pndidikan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `wali_pkrjaan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `wali_pnghasilan_bln` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `wali_almat` varchar(120) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `wali_tlp` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ibu` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_ktp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_tmpt_lhir` varchar(50) DEFAULT NULL,
  `ibu_tgl_lhir` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT '00/00/0000',
  `ibu_agama` varchar(30) DEFAULT NULL,
  `ibu_kwarganegraan` varchar(30) DEFAULT NULL,
  `ibu_pndidikan` varchar(50) DEFAULT NULL,
  `ibu_pkrjaan` varchar(50) DEFAULT NULL,
  `ibu_pnghasilan_bln` varchar(50) DEFAULT NULL,
  `ibu_almat` varchar(120) DEFAULT NULL,
  `ibu_tlp` varchar(30) DEFAULT NULL,
  `ibu_status` varchar(50) DEFAULT NULL,
  `ayah` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ayah_ktp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_tmpt_lhir` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_tgl_lhir` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT '00/00/0000',
  `ayh_agama` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_kwarganegraan` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_pndidikan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_pkrjaan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_pnghasilan_bln` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_almat` varchar(120) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_tlp` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_status` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kwarganegraan` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_anak_ke` tinyint(4) DEFAULT NULL,
  `sis_jml_sdr_kndung` tinyint(4) DEFAULT NULL,
  `sis_jml_sdr_tiri` tinyint(4) DEFAULT NULL,
  `sis_jml_sdr_angkat` tinyint(4) DEFAULT NULL,
  `sis_status` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_bhs_shari_hri` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_gol_darah` varchar(50) DEFAULT NULL,
  `sis_penyakit` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kel_jasmani` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sis_tinggi_berat` varchar(50) DEFAULT NULL,
  `sis_ksenian` varchar(50) DEFAULT NULL,
  `sis_olahrga` varchar(50) DEFAULT NULL,
  `sis_kmasyaraktn` varchar(50) DEFAULT NULL,
  `sis_organisasi` varchar(50) DEFAULT NULL,
  `sis_hobby` varchar(50) DEFAULT NULL,
  `sis_cita2` varchar(50) DEFAULT NULL,
  `sis_lain2` varchar(50) DEFAULT NULL,
  `sis_beasiswa` varchar(50) DEFAULT NULL,
  `sis_pndah_seklah` varchar(50) DEFAULT NULL,
  `sis_pndah_alsn` varchar(50) DEFAULT NULL,
  `sis_luls_thn` varchar(50) DEFAULT NULL,
  `sis_luls_ijazah` varchar(50) DEFAULT NULL,
  `sis_luls_skhu` varchar(50) DEFAULT NULL,
  `sis_lnjut_ke` varchar(100) DEFAULT NULL,
  `sis_krja_tgl` varchar(15) DEFAULT '00/00/0000',
  `sis_krja_tmpt` varchar(100) DEFAULT NULL,
  `sis_krja_pnghsilan` varchar(50) DEFAULT NULL,
  `ijz_fc_lg` tinyint(2) DEFAULT NULL,
  `ijz_fc_bs` tinyint(2) DEFAULT NULL,
  `skhun_fc_lg` tinyint(2) DEFAULT NULL,
  `skhun_fc_bs` tinyint(2) DEFAULT NULL,
  `kk` tinyint(2) DEFAULT NULL,
  `akte` tinyint(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa_baru`
--

CREATE TABLE `t_siswa_baru` (
  `id_pendaftaran` int(20) NOT NULL,
  `user_id` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_pendaftaran` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `alamat_tinggal` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `asal_sek` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tahun_lulus_sblmnya` varchar(4) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nopes_ujian_sblmnya` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prestasi` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pilihan_kk_1` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pilihan_kk_2` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pilihan_kk_3` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `b_indonesia` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `b_inggris` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `matematika` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ipa` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `waktu_pendaftaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa_bayar`
--

CREATE TABLE `t_siswa_bayar` (
  `id_bayar` int(10) DEFAULT NULL,
  `id_pendaftaran` int(20) DEFAULT NULL,
  `id_daftar_ulang` int(20) DEFAULT NULL,
  `no_pendaftaran` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `bid_ahli` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `jenis` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `bayar_untuk` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `th_ajar` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa_daftar`
--

CREATE TABLE `t_siswa_daftar` (
  `user_id` int(25) NOT NULL,
  `no_induk` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `nama` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nma_pnggln` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nisn` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_no_psrta_unas` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sttb_tgl` date DEFAULT NULL,
  `sttb` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `nem_tgl` date DEFAULT NULL,
  `nem` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` varchar(120) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_rt` varchar(3) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_rw` varchar(3) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_lurah` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_camat` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_kodya` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_prop` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
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
  `sis_dtrm_komp_khlian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_prog_khlian` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
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
  `ibu` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_ktp` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_tmpt_lhir` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_tgl_lhir` date DEFAULT NULL,
  `ibu_agama` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_kwarganegraan` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_pndidikan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_pkrjaan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_pnghasilan_bln` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_almat` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_tlp` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_status` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
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
  `sis_gol_darah` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_penyakit` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kel_jasmani` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_tinggi_berat` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_ksenian` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_olahrga` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_kmasyaraktn` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_organisasi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_hobby` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_cita2` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_lain2` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_beasiswa` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_pndah_seklah` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_pndah_alsn` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_luls_thn` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_luls_ijazah` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_luls_skhu` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_lnjut_ke` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `sis_krja_tgl` date DEFAULT NULL,
  `sis_krja_tmpt` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `sis_krja_pnghsilan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ijz_fc_lg` tinyint(2) DEFAULT NULL,
  `ijz_fc_bs` tinyint(2) DEFAULT NULL,
  `skhun_fc_lg` tinyint(2) DEFAULT NULL,
  `skhun_fc_bs` tinyint(2) DEFAULT NULL,
  `kk` tinyint(2) DEFAULT NULL,
  `akte` tinyint(2) DEFAULT NULL,
  `id_pendaftaran` int(20) DEFAULT NULL,
  `id_daftar_ulang` int(20) DEFAULT NULL,
  `no_pendaftaran` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_tinggal` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_kec_tngl` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_kab_tngl` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `tahun_lulus_sblmnya` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `prestasi` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_kk_1` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_kk_2` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_kk_3` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_kk_4` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_kk_5` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_kk_6` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_kk_utama` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `b_indonesia` float DEFAULT NULL,
  `b_inggris` float DEFAULT NULL,
  `matematika` float DEFAULT NULL,
  `ipa` float DEFAULT NULL,
  `bakat` float DEFAULT NULL,
  `wawancara` float DEFAULT NULL,
  `test_akdmk` float DEFAULT NULL,
  `sekolah_alamat` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `rumah_kondisi` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `rumah_fisik` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `hub_wali_siswa` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `tgl_daftar_ulang` date DEFAULT NULL,
  `spp` int(10) DEFAULT NULL,
  `seragam` int(10) DEFAULT NULL,
  `daftar_petugas` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `diterima` varchar(1) CHARACTER SET latin1 DEFAULT NULL,
  `daftar_ol` int(1) NOT NULL,
  `daftar_status` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `alat_transport` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `tapel` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '2012/2013',
  `pilihan_sk_1` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_sk_2` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_sk_3` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_sk_4` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_sk_5` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pilihan_sk_6` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `b_indonesia1` float DEFAULT NULL,
  `b_inggris1` float DEFAULT NULL,
  `matematika1` float DEFAULT NULL,
  `ipa1` float DEFAULT NULL,
  `b_indonesia2` float DEFAULT NULL,
  `b_inggris2` float DEFAULT NULL,
  `matematika2` float DEFAULT NULL,
  `ipa2` float DEFAULT NULL,
  `b_indonesia3` float DEFAULT NULL,
  `b_inggris3` float DEFAULT NULL,
  `matematika3` float DEFAULT NULL,
  `ipa3` float DEFAULT NULL,
  `b_indonesia4` float DEFAULT NULL,
  `b_inggris4` float DEFAULT NULL,
  `matematika4` float DEFAULT NULL,
  `ipa4` float DEFAULT NULL,
  `b_indonesia5` float DEFAULT NULL,
  `b_inggris5` float DEFAULT NULL,
  `matematika5` float DEFAULT NULL,
  `ipa5` float DEFAULT NULL,
  `sis_email` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa_daftar_2015`
--

CREATE TABLE `t_siswa_daftar_2015` (
  `user_id` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ind_prog` int(4) DEFAULT NULL,
  `kode_prog` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `nama` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nma_pnggln` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
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
  `sis_nokk` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
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
  `petugas` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa_daftar_ol`
--

CREATE TABLE `t_siswa_daftar_ol` (
  `ID` int(11) NOT NULL,
  `No` int(11) DEFAULT NULL,
  `Jurusan` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `No Daftar` double DEFAULT NULL,
  `No UN` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `No Peserta` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `NISN` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `No Formulir` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `Nama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Kelamin` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `TmpLahir` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `Alamat` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Asal Sekolah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `LuarKota` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `Langsung Diterima` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan` int(11) DEFAULT NULL,
  `MAT` double DEFAULT NULL,
  `ING` int(11) DEFAULT NULL,
  `IND` int(11) DEFAULT NULL,
  `IPA` double DEFAULT NULL,
  `Tgl Lhr` datetime DEFAULT NULL,
  `N#Akhir` double DEFAULT NULL,
  `Lokasi Pendaftaran` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Lapor Diri` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan 1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan 2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan 3` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan 4` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan 5` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa_daftar_ssl`
--

CREATE TABLE `t_siswa_daftar_ssl` (
  `ID` int(11) NOT NULL,
  `No` int(11) DEFAULT NULL,
  `Jurusan` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `No Daftar` double DEFAULT NULL,
  `No UN` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `No Peserta` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `NISN` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `No Formulir` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `Nama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Kelamin` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `TmpLahir` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `Alamat` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Asal Sekolah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `LuarKota` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `Langsung Diterima` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan` int(11) DEFAULT NULL,
  `MAT` double DEFAULT NULL,
  `ING` int(11) DEFAULT NULL,
  `IND` int(11) DEFAULT NULL,
  `IPA` double DEFAULT NULL,
  `Tgl Lhr` datetime DEFAULT NULL,
  `N#Akhir` double DEFAULT NULL,
  `Lokasi Pendaftaran` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Lapor Diri` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan 1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan 2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan 3` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan 4` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Pilihan 5` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa_data_ol`
--

CREATE TABLE `t_siswa_data_ol` (
  `ID` int(11) NOT NULL,
  `No` double DEFAULT NULL,
  `No Daftar` varchar(255) DEFAULT NULL,
  `No UN` varchar(255) DEFAULT NULL,
  `No Ujian` varchar(255) DEFAULT NULL,
  `NISN` varchar(255) DEFAULT NULL,
  `No Formulir` varchar(255) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Asal Sekolah` varchar(255) DEFAULT NULL,
  `Dalam/Luar` varchar(255) DEFAULT NULL,
  `Tanggal Daftar` varchar(255) DEFAULT NULL,
  `Jam Daftar` varchar(255) DEFAULT NULL,
  `Operator` varchar(255) DEFAULT NULL,
  `Diterima Di` varchar(255) DEFAULT NULL,
  `Matematika` double DEFAULT NULL,
  `ING` double DEFAULT NULL,
  `IND` double DEFAULT NULL,
  `IPA` double DEFAULT NULL,
  `Lahir` varchar(255) DEFAULT NULL,
  `NA` double DEFAULT NULL,
  `Pilihan 1` varchar(255) DEFAULT NULL,
  `F21` varchar(255) DEFAULT NULL,
  `F22` varchar(255) DEFAULT NULL,
  `F23` varchar(255) DEFAULT NULL,
  `F24` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa_industri`
--

CREATE TABLE `t_siswa_industri` (
  `Induk` varchar(15) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `Nama` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Kelas` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Telepon` varchar(25) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa_old`
--

CREATE TABLE `t_siswa_old` (
  `user_id` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `no_urut` tinyint(2) DEFAULT NULL,
  `nama` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nma_pnggln` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nisn` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_no_psrta_unas` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sttb_tgl` date DEFAULT NULL,
  `sttb` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `nem_tgl` date DEFAULT NULL,
  `nem` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` varchar(120) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_rt` varchar(3) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_rw` varchar(3) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_lurah` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_camat` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_kodya` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `alamat_prop` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `sis_tggal_dgn` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_jrak_ke_skul` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT '0000-00-00',
  `telp` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `kelamin` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `tmp_lahir` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_input` date DEFAULT '0000-00-00',
  `sis_tmt_dri` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_lma_blajar` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndahn_seklah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndahn_alasan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_kelas` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_bdng_khlian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_prog_khlian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_komp_khlian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_tgl` date DEFAULT '0000-00-00',
  `wali` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_ktp` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_tmpt_lhir` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_tgl_lhir` date DEFAULT '0000-00-00',
  `wali_agama` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_kwarganegraan` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_pndidikan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_pkrjaan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_pnghasilan_bln` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_almat` varchar(120) COLLATE latin1_general_ci DEFAULT NULL,
  `wali_tlp` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_ktp` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_tmpt_lhir` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ibu_tgl_lhir` date DEFAULT '0000-00-00',
  `ibu_agama` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_kwarganegraan` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_pndidikan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_pkrjaan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_pnghasilan_bln` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_almat` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_tlp` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `ibu_status` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ayah` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `ayah_ktp` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_tmpt_lhir` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ayh_tgl_lhir` date DEFAULT '0000-00-00',
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
  `sis_gol_darah` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_penyakit` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kel_jasmani` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_tinggi_berat` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_ksenian` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_olahrga` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_kmasyaraktn` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_organisasi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_hobby` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_cita2` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_lain2` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_beasiswa` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_pndah_seklah` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_pndah_alsn` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_luls_thn` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_luls_ijazah` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_luls_skhu` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sis_lnjut_ke` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `sis_krja_tgl` date DEFAULT '0000-00-00',
  `sis_krja_tmpt` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `sis_krja_pnghsilan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ijz_fc_lg` tinyint(2) DEFAULT NULL,
  `ijz_fc_bs` tinyint(2) DEFAULT NULL,
  `skhun_fc_lg` tinyint(2) DEFAULT NULL,
  `skhun_fc_bs` tinyint(2) DEFAULT NULL,
  `kk` tinyint(2) DEFAULT NULL,
  `akte` tinyint(2) DEFAULT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
(37415, 7, '0010864827', 'Pedrick', '10 PR 1', NULL, '2018/2019', 'P', 'Islam', NULL),
(37416, 8, '0013223598', 'MUHAMMAD FIKRI', '10 PR 1', NULL, '2018/2019', 'L', 'Islam', NULL),
(37417, 9, '0013224881', 'Dinung', '11 PR 2', NULL, '2018/2019', 'P', 'Islam', NULL),
(37418, 10, '0013223802', 'Uzumaki Naruto', '11 PR 2', NULL, '2018/2019', 'L', 'Protestan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_soal`
--

CREATE TABLE `t_soal` (
  `id` int(10) NOT NULL,
  `judul` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `deskripsi` text COLLATE latin1_general_ci NOT NULL,
  `kategori` text COLLATE latin1_general_ci NOT NULL,
  `file` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `visit` int(10) NOT NULL DEFAULT '0',
  `ukuran` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tanggal` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_spp`
--

CREATE TABLE `t_spp` (
  `idspp` int(11) NOT NULL,
  `nis` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `bulan` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `tingkat` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `iuran` int(11) DEFAULT NULL,
  `tu` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `ket` varchar(8) COLLATE latin1_general_ci DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_staf`
--

CREATE TABLE `t_staf` (
  `user_id` int(5) DEFAULT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
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

INSERT INTO `t_staf` (`user_id`, `nama`, `nip`, `kelamin`, `alamat`, `tugas`, `telp`, `hp`, `email`, `pelajaran`, `tgl_lahir`, `tmp_lahir`, `kode`, `pangkat`, `kategori`, `profilstaf`, `th_ajar`, `no_induk_baru`, `depan_gelar`, `belakang_gelar`, `nama_ibu_kandung`, `kode_pos`, `golongan_darah`, `kelurahan`, `kecamatan`, `provinsi`, `daerah`, `status_nikah`, `tanggal_masuk`, `jenis_pegawai`, `sertifikasi_guru`, `tmt_pns`, `akses`, `arsip`, `tugas_tambahan`, `pangkat_pns`, `jabatan_pns`, `golongan_pns`, `pendidikan_terahir`, `prog_diampu`, `masakerja_th`, `masakerja_bl`, `tgl_update`) VALUES
(1, 'hana', '197201242000031004', 'P', 'malang', 'guru', NULL, NULL, NULL, 'bahasa inggris', NULL, NULL, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 07:50:11'),
(2, 'pedrik', '2', 'L', 'malang', 'guru', NULL, NULL, NULL, 'matematika', NULL, NULL, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-23 14:35:09'),
(3, 'Gery', '3', 'la', 'malang', 'guru', NULL, NULL, NULL, 'basis data', NULL, NULL, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-23 14:25:44'),
(4, 'Pak Imam', '4', 'L', '', '', NULL, NULL, NULL, '', NULL, NULL, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-23 14:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `t_staf_thajar`
--

CREATE TABLE `t_staf_thajar` (
  `user_id` int(5) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `nip` varchar(25) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `kelamin` char(2) COLLATE latin1_general_ci DEFAULT '',
  `alamat` varchar(60) COLLATE latin1_general_ci DEFAULT '',
  `tugas` varchar(30) COLLATE latin1_general_ci DEFAULT '',
  `telp` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `hp` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `pelajaran` varchar(200) COLLATE latin1_general_ci DEFAULT '',
  `tgl_lahir` varchar(15) COLLATE latin1_general_ci DEFAULT '',
  `tmp_lahir` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `kode` varchar(10) COLLATE latin1_general_ci DEFAULT '',
  `pangkat` varchar(50) COLLATE latin1_general_ci DEFAULT '0',
  `kategori` char(1) COLLATE latin1_general_ci DEFAULT '0',
  `profilstaf` longtext COLLATE latin1_general_ci,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_temp`
--

CREATE TABLE `t_temp` (
  `id` int(10) NOT NULL,
  `judul` text COLLATE latin1_general_ci NOT NULL,
  `isi` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_temp_menu`
--

CREATE TABLE `t_temp_menu` (
  `idtemp` int(2) NOT NULL,
  `temp_atas` mediumtext COLLATE latin1_general_ci,
  `temp_bawah` mediumtext COLLATE latin1_general_ci,
  `temp_tengah` mediumtext COLLATE latin1_general_ci,
  `status` char(1) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
-- Table structure for table `t_tugas`
--

CREATE TABLE `t_tugas` (
  `idtugas` int(11) NOT NULL,
  `tgl_kirim` datetime DEFAULT NULL,
  `tgl_kumpul` datetime DEFAULT NULL,
  `thajar` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `pelajaran` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `sem` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `nip` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `isi` longtext COLLATE latin1_general_ci,
  `file` varchar(5) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_tugas_kelas`
--

CREATE TABLE `t_tugas_kelas` (
  `idkls` int(11) NOT NULL,
  `idtugas` int(11) NOT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_tugas_siswa`
--

CREATE TABLE `t_tugas_siswa` (
  `ids` int(11) NOT NULL,
  `idtugas` int(11) NOT NULL,
  `nis` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `tgl` datetime DEFAULT NULL,
  `status` char(1) COLLATE latin1_general_ci DEFAULT '0',
  `pesan` varchar(250) COLLATE latin1_general_ci DEFAULT NULL,
  `file` varchar(30) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_tu_no_surat_keluar`
--

CREATE TABLE `t_tu_no_surat_keluar` (
  `id_surat_keluar` int(20) NOT NULL,
  `no_urut_keluar` int(10) NOT NULL,
  `no_urut_keluar_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alamat_tujuan_keluar` text COLLATE latin1_general_ci NOT NULL,
  `tgl_surat_keluar` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `perihal_keluar` text COLLATE latin1_general_ci NOT NULL,
  `jenis_surat` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tgl_di_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` int(10) NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `edit` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_tu_no_surat_masuk`
--

CREATE TABLE `t_tu_no_surat_masuk` (
  `id_surat_masuk` int(20) NOT NULL,
  `no_urut_masuk` int(10) NOT NULL,
  `no_surat_masuk` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_datang_masuk` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat_pengirim_masuk` text COLLATE latin1_general_ci NOT NULL,
  `tgl_surat_masuk` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `perihal_masuk` text COLLATE latin1_general_ci NOT NULL,
  `tgl_di_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` int(10) NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `edit` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_voting_jawab`
--

CREATE TABLE `t_voting_jawab` (
  `id_jawab` int(255) NOT NULL,
  `id_tanya` int(255) NOT NULL DEFAULT '0',
  `jawaban` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_voting_pole`
--

CREATE TABLE `t_voting_pole` (
  `id` int(255) NOT NULL,
  `id_jawab` int(255) NOT NULL DEFAULT '0',
  `ip` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tanggal` varchar(6) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_voting_tanya`
--

CREATE TABLE `t_voting_tanya` (
  `id_tanya` int(255) NOT NULL,
  `pertanyaan` varchar(80) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tanggal` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `status` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(200) COLLATE latin1_general_ci NOT NULL,
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

INSERT INTO `user` (`userid`, `username`, `password`, `email`, `nip`, `no_induk`, `menu`, `ip`, `waktu`, `kunjung`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'fikrisyahrizal71@gmail.com', '', '', 'admin', NULL, NULL, NULL, 1),
(2, 'siswa', 'bcd724d15cde8c47650fda962968f102', 'siswa@gmail.com', '', '', 'siswa', NULL, NULL, NULL, 1),
(3, 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru@gmail.com', '', '', 'guru', NULL, NULL, NULL, 1),
(4, 'absensi', '986bf02c97e4738cff389ec0b3d784bc', 'absensi@gmail.com', '', '', 'absensi', NULL, NULL, NULL, 1),
(5, 'orangtua', '344c999a63cd55b3035cbf76c2691f88', 'orangtua@gmail.com', '', '0013224080', 'orangtua', NULL, NULL, NULL, 1);

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
-- Indexes for table `abskelas`
--
ALTER TABLE `abskelas`
  ADD PRIMARY KEY (`id_abskelas`);

--
-- Indexes for table `belbaru`
--
ALTER TABLE `belbaru`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `calendarevent`
--
ALTER TABLE `calendarevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendarevent_picture`
--
ALTER TABLE `calendarevent_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cls_bag`
--
ALTER TABLE `cls_bag`
  ADD PRIMARY KEY (`id_bag`);

--
-- Indexes for table `cls_bank_soal`
--
ALTER TABLE `cls_bank_soal`
  ADD PRIMARY KEY (`id_bank_soal`);

--
-- Indexes for table `cls_catbag`
--
ALTER TABLE `cls_catbag`
  ADD PRIMARY KEY (`id_catbag`);

--
-- Indexes for table `cls_class`
--
ALTER TABLE `cls_class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indexes for table `cls_class_member`
--
ALTER TABLE `cls_class_member`
  ADD PRIMARY KEY (`id_class_member`);

--
-- Indexes for table `cls_class_member_log`
--
ALTER TABLE `cls_class_member_log`
  ADD PRIMARY KEY (`id_class_member_log`);

--
-- Indexes for table `cls_class_member_statistik`
--
ALTER TABLE `cls_class_member_statistik`
  ADD PRIMARY KEY (`id_cls_class_member_statistik`);

--
-- Indexes for table `cls_class_member_urut`
--
ALTER TABLE `cls_class_member_urut`
  ADD PRIMARY KEY (`id_member_urut`);

--
-- Indexes for table `cls_class_message`
--
ALTER TABLE `cls_class_message`
  ADD PRIMARY KEY (`id_class_message`);

--
-- Indexes for table `cls_class_message_komentar`
--
ALTER TABLE `cls_class_message_komentar`
  ADD PRIMARY KEY (`id_cls_class_message_komentar`);

--
-- Indexes for table `cls_class_progress`
--
ALTER TABLE `cls_class_progress`
  ADD PRIMARY KEY (`id_class_progress`);

--
-- Indexes for table `cls_class_progress_catatan`
--
ALTER TABLE `cls_class_progress_catatan`
  ADD PRIMARY KEY (`id_class_progress_catatan`);

--
-- Indexes for table `cls_class_progress_copy`
--
ALTER TABLE `cls_class_progress_copy`
  ADD PRIMARY KEY (`id_class_progress`);

--
-- Indexes for table `cls_class_progress_temp`
--
ALTER TABLE `cls_class_progress_temp`
  ADD PRIMARY KEY (`id_class_progress`);

--
-- Indexes for table `cls_kategori`
--
ALTER TABLE `cls_kategori`
  ADD PRIMARY KEY (`id_cls_kategori`);

--
-- Indexes for table `cls_kurikulum`
--
ALTER TABLE `cls_kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `cls_message`
--
ALTER TABLE `cls_message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `cls_notifikasi`
--
ALTER TABLE `cls_notifikasi`
  ADD PRIMARY KEY (`id_cls_notifikasi`);

--
-- Indexes for table `cls_notifikasi_read`
--
ALTER TABLE `cls_notifikasi_read`
  ADD PRIMARY KEY (`id_cls_notifikasi_read`);

--
-- Indexes for table `cls_paket_soal`
--
ALTER TABLE `cls_paket_soal`
  ADD PRIMARY KEY (`id_paket_soal`);

--
-- Indexes for table `cls_paket_soal_detail`
--
ALTER TABLE `cls_paket_soal_detail`
  ADD PRIMARY KEY (`id_paket_soal_detail`);

--
-- Indexes for table `cls_paket_soal_jawab`
--
ALTER TABLE `cls_paket_soal_jawab`
  ADD PRIMARY KEY (`id_paket_soal_jawab`);

--
-- Indexes for table `cls_paket_soal_jawab_temp`
--
ALTER TABLE `cls_paket_soal_jawab_temp`
  ADD PRIMARY KEY (`id_paket_soal_jawab`);

--
-- Indexes for table `cls_paket_soal_kurikulum`
--
ALTER TABLE `cls_paket_soal_kurikulum`
  ADD PRIMARY KEY (`id_paket_soal_kurikulum`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `export_data2015`
--
ALTER TABLE `export_data2015`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `gallery_battle`
--
ALTER TABLE `gallery_battle`
  ADD PRIMARY KEY (`id_gbattle`);

--
-- Indexes for table `gallery_battle_chalenge`
--
ALTER TABLE `gallery_battle_chalenge`
  ADD PRIMARY KEY (`id_gbattle`);

--
-- Indexes for table `gallery_battle_chalenge_stat`
--
ALTER TABLE `gallery_battle_chalenge_stat`
  ADD PRIMARY KEY (`id_gbattle_stat`);

--
-- Indexes for table `gallery_battle_kategori`
--
ALTER TABLE `gallery_battle_kategori`
  ADD PRIMARY KEY (`id_fields`);

--
-- Indexes for table `gallery_battle_laporan`
--
ALTER TABLE `gallery_battle_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `gallery_battle_stat`
--
ALTER TABLE `gallery_battle_stat`
  ADD PRIMARY KEY (`id_gbattle_stat`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `inbox_`
--
ALTER TABLE `inbox_`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `ip_data`
--
ALTER TABLE `ip_data`
  ADD PRIMARY KEY (`id_ip`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  ADD KEY `outbox_sender` (`SenderID`);

--
-- Indexes for table `outbox_multipart`
--
ALTER TABLE `outbox_multipart`
  ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indexes for table `pbk`
--
ALTER TABLE `pbk`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`IMEI`);

--
-- Indexes for table `sentitems`
--
ALTER TABLE `sentitems`
  ADD PRIMARY KEY (`ID`,`SequencePosition`),
  ADD KEY `sentitems_date` (`DeliveryDateTime`),
  ADD KEY `sentitems_tpmr` (`TPMR`),
  ADD KEY `sentitems_dest` (`DestinationNumber`),
  ADD KEY `sentitems_sender` (`SenderID`);

--
-- Indexes for table `sh_agenda`
--
ALTER TABLE `sh_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `sh_album`
--
ALTER TABLE `sh_album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `sh_berita`
--
ALTER TABLE `sh_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `sh_buku_tamu`
--
ALTER TABLE `sh_buku_tamu`
  ADD PRIMARY KEY (`id_bukutamu`);

--
-- Indexes for table `sh_galeri`
--
ALTER TABLE `sh_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `sh_guru_staff`
--
ALTER TABLE `sh_guru_staff`
  ADD PRIMARY KEY (`id_gurustaff`);

--
-- Indexes for table `sh_info_sekolah`
--
ALTER TABLE `sh_info_sekolah`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `sh_jabatan`
--
ALTER TABLE `sh_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `sh_kategori`
--
ALTER TABLE `sh_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `sh_kelas`
--
ALTER TABLE `sh_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `sh_komentar`
--
ALTER TABLE `sh_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `sh_mapel`
--
ALTER TABLE `sh_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `sh_materi`
--
ALTER TABLE `sh_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `sh_pengaturan`
--
ALTER TABLE `sh_pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `sh_pengumuman`
--
ALTER TABLE `sh_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `sh_psb`
--
ALTER TABLE `sh_psb`
  ADD PRIMARY KEY (`id_psb`);

--
-- Indexes for table `sh_sidebar`
--
ALTER TABLE `sh_sidebar`
  ADD PRIMARY KEY (`id_sidebar`);

--
-- Indexes for table `sh_siswa`
--
ALTER TABLE `sh_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `sh_tema`
--
ALTER TABLE `sh_tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indexes for table `sh_users`
--
ALTER TABLE `sh_users`
  ADD PRIMARY KEY (`s_username`);

--
-- Indexes for table `siswanama`
--
ALTER TABLE `siswanama`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `soal_hasil`
--
ALTER TABLE `soal_hasil`
  ADD PRIMARY KEY (`idhasil`);

--
-- Indexes for table `soal_jawab`
--
ALTER TABLE `soal_jawab`
  ADD PRIMARY KEY (`idjawab`);

--
-- Indexes for table `soal_kelas`
--
ALTER TABLE `soal_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_opsi`
--
ALTER TABLE `soal_opsi`
  ADD PRIMARY KEY (`idsoal`);

--
-- Indexes for table `soal_test`
--
ALTER TABLE `soal_test`
  ADD PRIMARY KEY (`idsoaltest`);

--
-- Indexes for table `soal_utama`
--
ALTER TABLE `soal_utama`
  ADD PRIMARY KEY (`idsoalutama`);

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
-- Indexes for table `t_artikel`
--
ALTER TABLE `t_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_artikel_kom`
--
ALTER TABLE `t_artikel_kom`
  ADD PRIMARY KEY (`idkom`);

--
-- Indexes for table `t_banner`
--
ALTER TABLE `t_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_bayar`
--
ALTER TABLE `t_bayar`
  ADD PRIMARY KEY (`iddsp`);

--
-- Indexes for table `t_bayar_detail`
--
ALTER TABLE `t_bayar_detail`
  ADD PRIMARY KEY (`iddsp`);

--
-- Indexes for table `t_bayar_jenis`
--
ALTER TABLE `t_bayar_jenis`
  ADD PRIMARY KEY (`iddsp`);

--
-- Indexes for table `t_beasiswa`
--
ALTER TABLE `t_beasiswa`
  ADD PRIMARY KEY (`idbeasiswa`);

--
-- Indexes for table `t_belajar`
--
ALTER TABLE `t_belajar`
  ADD PRIMARY KEY (`idbelajar`);

--
-- Indexes for table `t_belajar_detail`
--
ALTER TABLE `t_belajar_detail`
  ADD PRIMARY KEY (`iddetail`);

--
-- Indexes for table `t_belajar_kls`
--
ALTER TABLE `t_belajar_kls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_bell`
--
ALTER TABLE `t_bell`
  ADD PRIMARY KEY (`id_bell`);

--
-- Indexes for table `t_bell_baru`
--
ALTER TABLE `t_bell_baru`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_bpbk`
--
ALTER TABLE `t_bpbk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_bpbk_jenis`
--
ALTER TABLE `t_bpbk_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_bpbk_ortu`
--
ALTER TABLE `t_bpbk_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_buku`
--
ALTER TABLE `t_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `t_chat`
--
ALTER TABLE `t_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_download`
--
ALTER TABLE `t_download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_dsp`
--
ALTER TABLE `t_dsp`
  ADD PRIMARY KEY (`iddsp`);

--
-- Indexes for table `t_ekskul`
--
ALTER TABLE `t_ekskul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indexes for table `t_forum`
--
ALTER TABLE `t_forum`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `t_forum_balas`
--
ALTER TABLE `t_forum_balas`
  ADD PRIMARY KEY (`balas_id`);

--
-- Indexes for table `t_forum_isi`
--
ALTER TABLE `t_forum_isi`
  ADD PRIMARY KEY (`isi_id`);

--
-- Indexes for table `t_forum_moderator`
--
ALTER TABLE `t_forum_moderator`
  ADD PRIMARY KEY (`moderator_id`);

--
-- Indexes for table `t_galeri`
--
ALTER TABLE `t_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_galerialbum`
--
ALTER TABLE `t_galerialbum`
  ADD PRIMARY KEY (`idalbum`);

--
-- Indexes for table `t_gambaratas`
--
ALTER TABLE `t_gambaratas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_info`
--
ALTER TABLE `t_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `t_lab`
--
ALTER TABLE `t_lab`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_laporan`
--
ALTER TABLE `t_laporan`
  ADD PRIMARY KEY (`idlap`);

--
-- Indexes for table `t_link`
--
ALTER TABLE `t_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_member`
--
ALTER TABLE `t_member`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `t_memberfoto`
--
ALTER TABLE `t_memberfoto`
  ADD PRIMARY KEY (`idfoto`);

--
-- Indexes for table `t_memberfoto_album`
--
ALTER TABLE `t_memberfoto_album`
  ADD PRIMARY KEY (`idalbum`);

--
-- Indexes for table `t_memberfoto_kom`
--
ALTER TABLE `t_memberfoto_kom`
  ADD PRIMARY KEY (`idfotokom`);

--
-- Indexes for table `t_membergroup`
--
ALTER TABLE `t_membergroup`
  ADD PRIMARY KEY (`idgroup`);

--
-- Indexes for table `t_membergroup_diskusi`
--
ALTER TABLE `t_membergroup_diskusi`
  ADD PRIMARY KEY (`idtopik`);

--
-- Indexes for table `t_membergroup_diskusibalas`
--
ALTER TABLE `t_membergroup_diskusibalas`
  ADD PRIMARY KEY (`idbalas`);

--
-- Indexes for table `t_membergroup_info`
--
ALTER TABLE `t_membergroup_info`
  ADD PRIMARY KEY (`idgroupinfo`);

--
-- Indexes for table `t_membergroup_infokom`
--
ALTER TABLE `t_membergroup_infokom`
  ADD PRIMARY KEY (`idinfokom`);

--
-- Indexes for table `t_membergroup_jenis`
--
ALTER TABLE `t_membergroup_jenis`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indexes for table `t_memberlihat`
--
ALTER TABLE `t_memberlihat`
  ADD PRIMARY KEY (`idlihat`);

--
-- Indexes for table `t_memberstatus`
--
ALTER TABLE `t_memberstatus`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `t_memberstatus_kom`
--
ALTER TABLE `t_memberstatus_kom`
  ADD PRIMARY KEY (`idstatuskom`);

--
-- Indexes for table `t_member_contact`
--
ALTER TABLE `t_member_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_member_custom`
--
ALTER TABLE `t_member_custom`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `t_member_games`
--
ALTER TABLE `t_member_games`
  ADD PRIMARY KEY (`idgames`);

--
-- Indexes for table `t_member_pesan`
--
ALTER TABLE `t_member_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_member_point`
--
ALTER TABLE `t_member_point`
  ADD PRIMARY KEY (`idpoint`);

--
-- Indexes for table `t_member_point_group`
--
ALTER TABLE `t_member_point_group`
  ADD PRIMARY KEY (`idpointgroup`);

--
-- Indexes for table `t_member_uasbn`
--
ALTER TABLE `t_member_uasbn`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `t_mengajar`
--
ALTER TABLE `t_mengajar`
  ADD PRIMARY KEY (`idajar`);

--
-- Indexes for table `t_news`
--
ALTER TABLE `t_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_news_kom`
--
ALTER TABLE `t_news_kom`
  ADD PRIMARY KEY (`idkom`);

--
-- Indexes for table `t_nilai`
--
ALTER TABLE `t_nilai`
  ADD PRIMARY KEY (`kd_nilai`);

--
-- Indexes for table `t_nilai_detail`
--
ALTER TABLE `t_nilai_detail`
  ADD PRIMARY KEY (`kd_nilai`,`NIS`);

--
-- Indexes for table `t_online`
--
ALTER TABLE `t_online`
  ADD PRIMARY KEY (`visit`);

--
-- Indexes for table `t_pelajaran`
--
ALTER TABLE `t_pelajaran`
  ADD PRIMARY KEY (`idpel`);

--
-- Indexes for table `t_pelajaran_ktgr`
--
ALTER TABLE `t_pelajaran_ktgr`
  ADD PRIMARY KEY (`idpelktgr`);

--
-- Indexes for table `t_pelajaran_kurikulum`
--
ALTER TABLE `t_pelajaran_kurikulum`
  ADD PRIMARY KEY (`idpel`);

--
-- Indexes for table `t_pelajaran_raport`
--
ALTER TABLE `t_pelajaran_raport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pelaj_jadwal`
--
ALTER TABLE `t_pelaj_jadwal`
  ADD PRIMARY KEY (`id_pelaj_jadwal`);

--
-- Indexes for table `t_pelaj_skkd`
--
ALTER TABLE `t_pelaj_skkd`
  ADD PRIMARY KEY (`idskkd`);

--
-- Indexes for table `t_pelaj_tuntas`
--
ALTER TABLE `t_pelaj_tuntas`
  ADD PRIMARY KEY (`idskkd`);

--
-- Indexes for table `t_pelaj_tuntas1`
--
ALTER TABLE `t_pelaj_tuntas1`
  ADD PRIMARY KEY (`idskkd`);

--
-- Indexes for table `t_pel_jenis`
--
ALTER TABLE `t_pel_jenis`
  ADD PRIMARY KEY (`idpeljenis`);

--
-- Indexes for table `t_pel_ktgr`
--
ALTER TABLE `t_pel_ktgr`
  ADD PRIMARY KEY (`idpelktgr`);

--
-- Indexes for table `t_pel_produktif`
--
ALTER TABLE `t_pel_produktif`
  ADD PRIMARY KEY (`idpeljenis`);

--
-- Indexes for table `t_pel_skkd`
--
ALTER TABLE `t_pel_skkd`
  ADD PRIMARY KEY (`idpelskkd`);

--
-- Indexes for table `t_pel_struktur`
--
ALTER TABLE `t_pel_struktur`
  ADD PRIMARY KEY (`idpelstruktur`);

--
-- Indexes for table `t_pesan`
--
ALTER TABLE `t_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pesan_alum`
--
ALTER TABLE `t_pesan_alum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_polling`
--
ALTER TABLE `t_polling`
  ADD PRIMARY KEY (`id_polling`);

--
-- Indexes for table `t_polling_detail`
--
ALTER TABLE `t_polling_detail`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indexes for table `t_polling_komentar`
--
ALTER TABLE `t_polling_komentar`
  ADD PRIMARY KEY (`id_komentar_polling`);

--
-- Indexes for table `t_pos_menu`
--
ALTER TABLE `t_pos_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_prakerin`
--
ALTER TABLE `t_prakerin`
  ADD PRIMARY KEY (`id_tmp_prakerin`);

--
-- Indexes for table `t_prakerin_pembimbing`
--
ALTER TABLE `t_prakerin_pembimbing`
  ADD PRIMARY KEY (`id_pembimbing`);

--
-- Indexes for table `t_prakerin_siswa`
--
ALTER TABLE `t_prakerin_siswa`
  ADD PRIMARY KEY (`id_siswa_prakerin`);

--
-- Indexes for table `t_prestasi`
--
ALTER TABLE `t_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_profil`
--
ALTER TABLE `t_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_programahli`
--
ALTER TABLE `t_programahli`
  ADD PRIMARY KEY (`idprog`);

--
-- Indexes for table `t_project`
--
ALTER TABLE `t_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_project_com`
--
ALTER TABLE `t_project_com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_raport`
--
ALTER TABLE `t_raport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_raport2`
--
ALTER TABLE `t_raport2`
  ADD PRIMARY KEY (`id_raport2`);

--
-- Indexes for table `t_raport_bak`
--
ALTER TABLE `t_raport_bak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_raport_karakter`
--
ALTER TABLE `t_raport_karakter`
  ADD PRIMARY KEY (`id_karakter`);

--
-- Indexes for table `t_raport_kur13_keterampilan`
--
ALTER TABLE `t_raport_kur13_keterampilan`
  ADD PRIMARY KEY (`id_r13_keterampilan`);

--
-- Indexes for table `t_raport_kur13_pengetahuan`
--
ALTER TABLE `t_raport_kur13_pengetahuan`
  ADD PRIMARY KEY (`id_r13_pengetahuan`);

--
-- Indexes for table `t_raport_kur13_rekap`
--
ALTER TABLE `t_raport_kur13_rekap`
  ADD PRIMARY KEY (`id_r13_rekap`);

--
-- Indexes for table `t_raport_kur13_sikap`
--
ALTER TABLE `t_raport_kur13_sikap`
  ADD PRIMARY KEY (`id_r13_sikap`);

--
-- Indexes for table `t_raport_ledger2013`
--
ALTER TABLE `t_raport_ledger2013`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_raport_pkg`
--
ALTER TABLE `t_raport_pkg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_raport_rank`
--
ALTER TABLE `t_raport_rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_raport_sikap`
--
ALTER TABLE `t_raport_sikap`
  ADD PRIMARY KEY (`id_raport_sikap`);

--
-- Indexes for table `t_ruang`
--
ALTER TABLE `t_ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_ruang_sarana`
--
ALTER TABLE `t_ruang_sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sem`
--
ALTER TABLE `t_sem`
  ADD PRIMARY KEY (`idsem`);

--
-- Indexes for table `t_semester`
--
ALTER TABLE `t_semester`
  ADD PRIMARY KEY (`idsem`);

--
-- Indexes for table `t_sesi`
--
ALTER TABLE `t_sesi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_silabus`
--
ALTER TABLE `t_silabus`
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
-- Indexes for table `t_siswa_alumni`
--
ALTER TABLE `t_siswa_alumni`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `t_siswa_baru`
--
ALTER TABLE `t_siswa_baru`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `t_siswa_daftar`
--
ALTER TABLE `t_siswa_daftar`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `t_siswa_daftar_2015`
--
ALTER TABLE `t_siswa_daftar_2015`
  ADD PRIMARY KEY (`no_induk`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `t_siswa_daftar_ol`
--
ALTER TABLE `t_siswa_daftar_ol`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_siswa_daftar_ssl`
--
ALTER TABLE `t_siswa_daftar_ssl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_siswa_data_ol`
--
ALTER TABLE `t_siswa_data_ol`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_siswa_industri`
--
ALTER TABLE `t_siswa_industri`
  ADD PRIMARY KEY (`Induk`);

--
-- Indexes for table `t_siswa_old`
--
ALTER TABLE `t_siswa_old`
  ADD PRIMARY KEY (`no_induk`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `t_sis_thajar`
--
ALTER TABLE `t_sis_thajar`
  ADD PRIMARY KEY (`id_sis_th`);

--
-- Indexes for table `t_soal`
--
ALTER TABLE `t_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_spp`
--
ALTER TABLE `t_spp`
  ADD PRIMARY KEY (`idspp`);

--
-- Indexes for table `t_staf`
--
ALTER TABLE `t_staf`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `t_staf_thajar`
--
ALTER TABLE `t_staf_thajar`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `t_temp`
--
ALTER TABLE `t_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_temp_menu`
--
ALTER TABLE `t_temp_menu`
  ADD PRIMARY KEY (`idtemp`);

--
-- Indexes for table `t_thajar`
--
ALTER TABLE `t_thajar`
  ADD PRIMARY KEY (`idthajar`);

--
-- Indexes for table `t_tugas`
--
ALTER TABLE `t_tugas`
  ADD PRIMARY KEY (`idtugas`);

--
-- Indexes for table `t_tugas_kelas`
--
ALTER TABLE `t_tugas_kelas`
  ADD PRIMARY KEY (`idkls`);

--
-- Indexes for table `t_tugas_siswa`
--
ALTER TABLE `t_tugas_siswa`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `t_tu_no_surat_keluar`
--
ALTER TABLE `t_tu_no_surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `t_tu_no_surat_masuk`
--
ALTER TABLE `t_tu_no_surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `t_voting_jawab`
--
ALTER TABLE `t_voting_jawab`
  ADD PRIMARY KEY (`id_jawab`);

--
-- Indexes for table `t_voting_pole`
--
ALTER TABLE `t_voting_pole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_voting_tanya`
--
ALTER TABLE `t_voting_tanya`
  ADD PRIMARY KEY (`id_tanya`);

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
-- AUTO_INCREMENT for table `calendarevent_picture`
--
ALTER TABLE `calendarevent_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cls_bag`
--
ALTER TABLE `cls_bag`
  MODIFY `id_bag` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13607;

--
-- AUTO_INCREMENT for table `cls_bank_soal`
--
ALTER TABLE `cls_bank_soal`
  MODIFY `id_bank_soal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43982;

--
-- AUTO_INCREMENT for table `cls_catbag`
--
ALTER TABLE `cls_catbag`
  MODIFY `id_catbag` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1155;

--
-- AUTO_INCREMENT for table `cls_class`
--
ALTER TABLE `cls_class`
  MODIFY `id_class` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `cls_class_member`
--
ALTER TABLE `cls_class_member`
  MODIFY `id_class_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26304;

--
-- AUTO_INCREMENT for table `cls_class_member_log`
--
ALTER TABLE `cls_class_member_log`
  MODIFY `id_class_member_log` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cls_class_member_statistik`
--
ALTER TABLE `cls_class_member_statistik`
  MODIFY `id_cls_class_member_statistik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1302;

--
-- AUTO_INCREMENT for table `cls_class_member_urut`
--
ALTER TABLE `cls_class_member_urut`
  MODIFY `id_member_urut` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9324;

--
-- AUTO_INCREMENT for table `cls_class_message`
--
ALTER TABLE `cls_class_message`
  MODIFY `id_class_message` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12289;

--
-- AUTO_INCREMENT for table `cls_class_message_komentar`
--
ALTER TABLE `cls_class_message_komentar`
  MODIFY `id_cls_class_message_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11800;

--
-- AUTO_INCREMENT for table `cls_class_progress`
--
ALTER TABLE `cls_class_progress`
  MODIFY `id_class_progress` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113836;

--
-- AUTO_INCREMENT for table `cls_class_progress_catatan`
--
ALTER TABLE `cls_class_progress_catatan`
  MODIFY `id_class_progress_catatan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cls_class_progress_copy`
--
ALTER TABLE `cls_class_progress_copy`
  MODIFY `id_class_progress` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112063;

--
-- AUTO_INCREMENT for table `cls_class_progress_temp`
--
ALTER TABLE `cls_class_progress_temp`
  MODIFY `id_class_progress` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70584;

--
-- AUTO_INCREMENT for table `cls_kurikulum`
--
ALTER TABLE `cls_kurikulum`
  MODIFY `id_kurikulum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cls_message`
--
ALTER TABLE `cls_message`
  MODIFY `id_message` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10453;

--
-- AUTO_INCREMENT for table `cls_notifikasi`
--
ALTER TABLE `cls_notifikasi`
  MODIFY `id_cls_notifikasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cls_notifikasi_read`
--
ALTER TABLE `cls_notifikasi_read`
  MODIFY `id_cls_notifikasi_read` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cls_paket_soal`
--
ALTER TABLE `cls_paket_soal`
  MODIFY `id_paket_soal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=980;

--
-- AUTO_INCREMENT for table `cls_paket_soal_detail`
--
ALTER TABLE `cls_paket_soal_detail`
  MODIFY `id_paket_soal_detail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43550;

--
-- AUTO_INCREMENT for table `cls_paket_soal_jawab`
--
ALTER TABLE `cls_paket_soal_jawab`
  MODIFY `id_paket_soal_jawab` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4434311;

--
-- AUTO_INCREMENT for table `cls_paket_soal_jawab_temp`
--
ALTER TABLE `cls_paket_soal_jawab_temp`
  MODIFY `id_paket_soal_jawab` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1776051;

--
-- AUTO_INCREMENT for table `cls_paket_soal_kurikulum`
--
ALTER TABLE `cls_paket_soal_kurikulum`
  MODIFY `id_paket_soal_kurikulum` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_battle`
--
ALTER TABLE `gallery_battle`
  MODIFY `id_gbattle` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_battle_chalenge`
--
ALTER TABLE `gallery_battle_chalenge`
  MODIFY `id_gbattle` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_battle_chalenge_stat`
--
ALTER TABLE `gallery_battle_chalenge_stat`
  MODIFY `id_gbattle_stat` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_battle_kategori`
--
ALTER TABLE `gallery_battle_kategori`
  MODIFY `id_fields` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery_battle_laporan`
--
ALTER TABLE `gallery_battle_laporan`
  MODIFY `id_laporan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_battle_stat`
--
ALTER TABLE `gallery_battle_stat`
  MODIFY `id_gbattle_stat` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inbox_`
--
ALTER TABLE `inbox_`
  MODIFY `inbox_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ip_data`
--
ALTER TABLE `ip_data`
  MODIFY `id_ip` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=903;

--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pbk`
--
ALTER TABLE `pbk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sh_agenda`
--
ALTER TABLE `sh_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sh_album`
--
ALTER TABLE `sh_album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sh_berita`
--
ALTER TABLE `sh_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `sh_buku_tamu`
--
ALTER TABLE `sh_buku_tamu`
  MODIFY `id_bukutamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sh_galeri`
--
ALTER TABLE `sh_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `sh_guru_staff`
--
ALTER TABLE `sh_guru_staff`
  MODIFY `id_gurustaff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `sh_info_sekolah`
--
ALTER TABLE `sh_info_sekolah`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sh_jabatan`
--
ALTER TABLE `sh_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sh_kategori`
--
ALTER TABLE `sh_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sh_kelas`
--
ALTER TABLE `sh_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `sh_komentar`
--
ALTER TABLE `sh_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sh_mapel`
--
ALTER TABLE `sh_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `sh_materi`
--
ALTER TABLE `sh_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `sh_pengaturan`
--
ALTER TABLE `sh_pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sh_pengumuman`
--
ALTER TABLE `sh_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sh_psb`
--
ALTER TABLE `sh_psb`
  MODIFY `id_psb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sh_sidebar`
--
ALTER TABLE `sh_sidebar`
  MODIFY `id_sidebar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sh_siswa`
--
ALTER TABLE `sh_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2220;

--
-- AUTO_INCREMENT for table `sh_tema`
--
ALTER TABLE `sh_tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soal_hasil`
--
ALTER TABLE `soal_hasil`
  MODIFY `idhasil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2939;

--
-- AUTO_INCREMENT for table `soal_jawab`
--
ALTER TABLE `soal_jawab`
  MODIFY `idjawab` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soal_kelas`
--
ALTER TABLE `soal_kelas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=467;

--
-- AUTO_INCREMENT for table `soal_opsi`
--
ALTER TABLE `soal_opsi`
  MODIFY `idsoal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3629;

--
-- AUTO_INCREMENT for table `soal_test`
--
ALTER TABLE `soal_test`
  MODIFY `idsoaltest` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=675;

--
-- AUTO_INCREMENT for table `soal_utama`
--
ALTER TABLE `soal_utama`
  MODIFY `idsoalutama` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `t_absensi`
--
ALTER TABLE `t_absensi`
  MODIFY `idabsen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `t_artikel`
--
ALTER TABLE `t_artikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `t_artikel_kom`
--
ALTER TABLE `t_artikel_kom`
  MODIFY `idkom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6170;

--
-- AUTO_INCREMENT for table `t_banner`
--
ALTER TABLE `t_banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `t_bayar`
--
ALTER TABLE `t_bayar`
  MODIFY `iddsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102227;

--
-- AUTO_INCREMENT for table `t_bayar_detail`
--
ALTER TABLE `t_bayar_detail`
  MODIFY `iddsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT for table `t_bayar_jenis`
--
ALTER TABLE `t_bayar_jenis`
  MODIFY `iddsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `t_beasiswa`
--
ALTER TABLE `t_beasiswa`
  MODIFY `idbeasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=512714;

--
-- AUTO_INCREMENT for table `t_belajar`
--
ALTER TABLE `t_belajar`
  MODIFY `idbelajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_belajar_detail`
--
ALTER TABLE `t_belajar_detail`
  MODIFY `iddetail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_belajar_kls`
--
ALTER TABLE `t_belajar_kls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_bell`
--
ALTER TABLE `t_bell`
  MODIFY `id_bell` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4610;

--
-- AUTO_INCREMENT for table `t_bpbk`
--
ALTER TABLE `t_bpbk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22936;

--
-- AUTO_INCREMENT for table `t_bpbk_jenis`
--
ALTER TABLE `t_bpbk_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `t_bpbk_ortu`
--
ALTER TABLE `t_bpbk_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_buku`
--
ALTER TABLE `t_buku`
  MODIFY `id_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `t_chat`
--
ALTER TABLE `t_chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1377;

--
-- AUTO_INCREMENT for table `t_download`
--
ALTER TABLE `t_download`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `t_dsp`
--
ALTER TABLE `t_dsp`
  MODIFY `iddsp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_ekskul`
--
ALTER TABLE `t_ekskul`
  MODIFY `id_ekskul` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_forum`
--
ALTER TABLE `t_forum`
  MODIFY `forum_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_forum_balas`
--
ALTER TABLE `t_forum_balas`
  MODIFY `balas_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_forum_isi`
--
ALTER TABLE `t_forum_isi`
  MODIFY `isi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_forum_moderator`
--
ALTER TABLE `t_forum_moderator`
  MODIFY `moderator_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_galeri`
--
ALTER TABLE `t_galeri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1292;

--
-- AUTO_INCREMENT for table `t_gambaratas`
--
ALTER TABLE `t_gambaratas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_info`
--
ALTER TABLE `t_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `t_jurnal`
--
ALTER TABLE `t_jurnal`
  MODIFY `id_jurnal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=453;

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_kelas`
--
ALTER TABLE `t_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=669;

--
-- AUTO_INCREMENT for table `t_laporan`
--
ALTER TABLE `t_laporan`
  MODIFY `idlap` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_link`
--
ALTER TABLE `t_link`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_member`
--
ALTER TABLE `t_member`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26403;

--
-- AUTO_INCREMENT for table `t_memberfoto`
--
ALTER TABLE `t_memberfoto`
  MODIFY `idfoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `t_memberfoto_album`
--
ALTER TABLE `t_memberfoto_album`
  MODIFY `idalbum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `t_memberfoto_kom`
--
ALTER TABLE `t_memberfoto_kom`
  MODIFY `idfotokom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_membergroup`
--
ALTER TABLE `t_membergroup`
  MODIFY `idgroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_membergroup_diskusi`
--
ALTER TABLE `t_membergroup_diskusi`
  MODIFY `idtopik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_membergroup_diskusibalas`
--
ALTER TABLE `t_membergroup_diskusibalas`
  MODIFY `idbalas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_membergroup_info`
--
ALTER TABLE `t_membergroup_info`
  MODIFY `idgroupinfo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_membergroup_infokom`
--
ALTER TABLE `t_membergroup_infokom`
  MODIFY `idinfokom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_membergroup_jenis`
--
ALTER TABLE `t_membergroup_jenis`
  MODIFY `idjenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_memberlihat`
--
ALTER TABLE `t_memberlihat`
  MODIFY `idlihat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `t_memberstatus`
--
ALTER TABLE `t_memberstatus`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1113;

--
-- AUTO_INCREMENT for table `t_memberstatus_kom`
--
ALTER TABLE `t_memberstatus_kom`
  MODIFY `idstatuskom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `t_member_contact`
--
ALTER TABLE `t_member_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3204;

--
-- AUTO_INCREMENT for table `t_member_games`
--
ALTER TABLE `t_member_games`
  MODIFY `idgames` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `t_member_pesan`
--
ALTER TABLE `t_member_pesan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `t_member_point`
--
ALTER TABLE `t_member_point`
  MODIFY `idpoint` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=872;

--
-- AUTO_INCREMENT for table `t_member_point_group`
--
ALTER TABLE `t_member_point_group`
  MODIFY `idpointgroup` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_member_uasbn`
--
ALTER TABLE `t_member_uasbn`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1556;

--
-- AUTO_INCREMENT for table `t_mengajar`
--
ALTER TABLE `t_mengajar`
  MODIFY `idajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40782;

--
-- AUTO_INCREMENT for table `t_news`
--
ALTER TABLE `t_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `t_news_kom`
--
ALTER TABLE `t_news_kom`
  MODIFY `idkom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pelajaran`
--
ALTER TABLE `t_pelajaran`
  MODIFY `idpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164995;

--
-- AUTO_INCREMENT for table `t_pelajaran_ktgr`
--
ALTER TABLE `t_pelajaran_ktgr`
  MODIFY `idpelktgr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `t_pelajaran_kurikulum`
--
ALTER TABLE `t_pelajaran_kurikulum`
  MODIFY `idpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164637;

--
-- AUTO_INCREMENT for table `t_pelajaran_raport`
--
ALTER TABLE `t_pelajaran_raport`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9908;

--
-- AUTO_INCREMENT for table `t_pelaj_jadwal`
--
ALTER TABLE `t_pelaj_jadwal`
  MODIFY `id_pelaj_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4193;

--
-- AUTO_INCREMENT for table `t_pelaj_skkd`
--
ALTER TABLE `t_pelaj_skkd`
  MODIFY `idskkd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12915;

--
-- AUTO_INCREMENT for table `t_pelaj_tuntas`
--
ALTER TABLE `t_pelaj_tuntas`
  MODIFY `idskkd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63409;

--
-- AUTO_INCREMENT for table `t_pelaj_tuntas1`
--
ALTER TABLE `t_pelaj_tuntas1`
  MODIFY `idskkd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5065;

--
-- AUTO_INCREMENT for table `t_pel_jenis`
--
ALTER TABLE `t_pel_jenis`
  MODIFY `idpeljenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4004;

--
-- AUTO_INCREMENT for table `t_pel_ktgr`
--
ALTER TABLE `t_pel_ktgr`
  MODIFY `idpelktgr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3992;

--
-- AUTO_INCREMENT for table `t_pel_produktif`
--
ALTER TABLE `t_pel_produktif`
  MODIFY `idpeljenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4029;

--
-- AUTO_INCREMENT for table `t_pel_skkd`
--
ALTER TABLE `t_pel_skkd`
  MODIFY `idpelskkd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3995;

--
-- AUTO_INCREMENT for table `t_pel_struktur`
--
ALTER TABLE `t_pel_struktur`
  MODIFY `idpelstruktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3996;

--
-- AUTO_INCREMENT for table `t_pesan`
--
ALTER TABLE `t_pesan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=550;

--
-- AUTO_INCREMENT for table `t_pesan_alum`
--
ALTER TABLE `t_pesan_alum`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `t_polling`
--
ALTER TABLE `t_polling`
  MODIFY `id_polling` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `t_polling_detail`
--
ALTER TABLE `t_polling_detail`
  MODIFY `id_pemilih` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2140;

--
-- AUTO_INCREMENT for table `t_polling_komentar`
--
ALTER TABLE `t_polling_komentar`
  MODIFY `id_komentar_polling` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=608;

--
-- AUTO_INCREMENT for table `t_pos_menu`
--
ALTER TABLE `t_pos_menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `t_prakerin`
--
ALTER TABLE `t_prakerin`
  MODIFY `id_tmp_prakerin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `t_prakerin_pembimbing`
--
ALTER TABLE `t_prakerin_pembimbing`
  MODIFY `id_pembimbing` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `t_prakerin_siswa`
--
ALTER TABLE `t_prakerin_siswa`
  MODIFY `id_siswa_prakerin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `t_profil`
--
ALTER TABLE `t_profil`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `t_programahli`
--
ALTER TABLE `t_programahli`
  MODIFY `idprog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `t_project`
--
ALTER TABLE `t_project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_project_com`
--
ALTER TABLE `t_project_com`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_raport`
--
ALTER TABLE `t_raport`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1297747;

--
-- AUTO_INCREMENT for table `t_raport2`
--
ALTER TABLE `t_raport2`
  MODIFY `id_raport2` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27018;

--
-- AUTO_INCREMENT for table `t_raport_bak`
--
ALTER TABLE `t_raport_bak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34336;

--
-- AUTO_INCREMENT for table `t_raport_karakter`
--
ALTER TABLE `t_raport_karakter`
  MODIFY `id_karakter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `t_raport_kur13_keterampilan`
--
ALTER TABLE `t_raport_kur13_keterampilan`
  MODIFY `id_r13_keterampilan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `t_raport_kur13_pengetahuan`
--
ALTER TABLE `t_raport_kur13_pengetahuan`
  MODIFY `id_r13_pengetahuan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=497;

--
-- AUTO_INCREMENT for table `t_raport_kur13_rekap`
--
ALTER TABLE `t_raport_kur13_rekap`
  MODIFY `id_r13_rekap` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7027;

--
-- AUTO_INCREMENT for table `t_raport_kur13_sikap`
--
ALTER TABLE `t_raport_kur13_sikap`
  MODIFY `id_r13_sikap` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `t_raport_ledger2013`
--
ALTER TABLE `t_raport_ledger2013`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=643679;

--
-- AUTO_INCREMENT for table `t_raport_pkg`
--
ALTER TABLE `t_raport_pkg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1456;

--
-- AUTO_INCREMENT for table `t_raport_rank`
--
ALTER TABLE `t_raport_rank`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=707989;

--
-- AUTO_INCREMENT for table `t_raport_sikap`
--
ALTER TABLE `t_raport_sikap`
  MODIFY `id_raport_sikap` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70905;

--
-- AUTO_INCREMENT for table `t_ruang`
--
ALTER TABLE `t_ruang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `t_ruang_sarana`
--
ALTER TABLE `t_ruang_sarana`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `t_sem`
--
ALTER TABLE `t_sem`
  MODIFY `idsem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_semester`
--
ALTER TABLE `t_semester`
  MODIFY `idsem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `t_silabus`
--
ALTER TABLE `t_silabus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_siswa`
--
ALTER TABLE `t_siswa`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6102138;

--
-- AUTO_INCREMENT for table `t_siswa_baru`
--
ALTER TABLE `t_siswa_baru`
  MODIFY `id_pendaftaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_siswa_daftar`
--
ALTER TABLE `t_siswa_daftar`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4353;

--
-- AUTO_INCREMENT for table `t_sis_thajar`
--
ALTER TABLE `t_sis_thajar`
  MODIFY `id_sis_th` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37419;

--
-- AUTO_INCREMENT for table `t_soal`
--
ALTER TABLE `t_soal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_spp`
--
ALTER TABLE `t_spp`
  MODIFY `idspp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_staf_thajar`
--
ALTER TABLE `t_staf_thajar`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `t_temp`
--
ALTER TABLE `t_temp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23104;

--
-- AUTO_INCREMENT for table `t_temp_menu`
--
ALTER TABLE `t_temp_menu`
  MODIFY `idtemp` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_thajar`
--
ALTER TABLE `t_thajar`
  MODIFY `idthajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `t_tugas`
--
ALTER TABLE `t_tugas`
  MODIFY `idtugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_tugas_kelas`
--
ALTER TABLE `t_tugas_kelas`
  MODIFY `idkls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_tugas_siswa`
--
ALTER TABLE `t_tugas_siswa`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_tu_no_surat_keluar`
--
ALTER TABLE `t_tu_no_surat_keluar`
  MODIFY `id_surat_keluar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_tu_no_surat_masuk`
--
ALTER TABLE `t_tu_no_surat_masuk`
  MODIFY `id_surat_masuk` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_voting_jawab`
--
ALTER TABLE `t_voting_jawab`
  MODIFY `id_jawab` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_voting_pole`
--
ALTER TABLE `t_voting_pole`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5159;

--
-- AUTO_INCREMENT for table `t_voting_tanya`
--
ALTER TABLE `t_voting_tanya`
  MODIFY `id_tanya` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
