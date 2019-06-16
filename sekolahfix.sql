-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2019 pada 11.45
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahfix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `jamke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `nis`, `id_kelas`, `keterangan`, `tanggal`, `jamke`) VALUES
(55, 1818051051, 1, 'S', '1 June 2018', 1),
(56, 1818051052, 1, 'A', '1 June 2018', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `beasiswa`
--

CREATE TABLE `beasiswa` (
  `idBeasiswa` varchar(50) NOT NULL,
  `idBea` varchar(50) DEFAULT NULL,
  `namaWali` varchar(100) DEFAULT NULL,
  `alamatWali` text,
  `noHPWali` varchar(20) DEFAULT NULL,
  `pekerjaanWali` varchar(20) DEFAULT NULL,
  `penghasilanWali` varchar(50) DEFAULT NULL,
  `namaSiswa` varchar(200) DEFAULT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `keringananSpp` varchar(20) DEFAULT NULL,
  `keringananSbpp` varchar(20) DEFAULT NULL,
  `krit1` varchar(20) DEFAULT NULL,
  `krit2` varchar(20) DEFAULT NULL,
  `krit3` varchar(20) DEFAULT NULL,
  `krit4` varchar(20) DEFAULT NULL,
  `krit5` varchar(20) DEFAULT NULL,
  `krit6` varchar(20) DEFAULT NULL,
  `krit7` varchar(20) DEFAULT NULL,
  `krit8` varchar(20) DEFAULT NULL,
  `krit9` varchar(20) DEFAULT NULL,
  `krit10` varchar(20) DEFAULT NULL,
  `essay1` text,
  `essay2` text,
  `essay3` text,
  `essay4` text,
  `essay5` text,
  `essay6` text,
  `essay7` text,
  `essay8` text,
  `essay9` text,
  `thnAjaran` varchar(50) DEFAULT NULL,
  `survey` int(12) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beasiswa`
--

INSERT INTO `beasiswa` (`idBeasiswa`, `idBea`, `namaWali`, `alamatWali`, `noHPWali`, `pekerjaanWali`, `penghasilanWali`, `namaSiswa`, `nis`, `keringananSpp`, `keringananSbpp`, `krit1`, `krit2`, `krit3`, `krit4`, `krit5`, `krit6`, `krit7`, `krit8`, `krit9`, `krit10`, `essay1`, `essay2`, `essay3`, `essay4`, `essay5`, `essay6`, `essay7`, `essay8`, `essay9`, `thnAjaran`, `survey`, `status`) VALUES
('BEASISWA KARSA - 1818051051', 'BEASISWA KARSA - 1818051051', '', '', '', '', '200000', 'Bagus Yekti Widodo', '1818051051', '200000', '200000', '1', '5', '5', '4', '5', '5', '5', '5', '5', '5', '', '', '', '', '', '', '', '', '', '2017 - 2018 (ganjil)', 0, 'proses');

--
-- Trigger `beasiswa`
--
DELIMITER $$
CREATE TRIGGER `delete_penilaian_beasiswa` BEFORE DELETE ON `beasiswa` FOR EACH ROW BEGIN 
    DELETE FROM penilaian_beasiswa WHERE nis = OLD.nis;
    DELETE FROM notifikasi_beasiswa WHERE idNotif = OLD.idBeasiswa;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_penilaian_beasiswa` AFTER INSERT ON `beasiswa` FOR EACH ROW BEGIN 

    IF (NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey) <= 20
    THEN 
      INSERT INTO penilaian_beasiswa
     (   idPenilaianBea,
         idBeasiswa,
         nis,
         nilai,
         survey,
         totalKelayakan,
         kategori
     )
     VALUES
     (  NEW.idBeasiswa,
        NEW.idBeasiswa,
        NEW.nis,
        NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10,
        NEW.survey,
        NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey,
        "K5"
     );
     ELSEIF (NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey) <= 40
    THEN 
      INSERT INTO penilaian_beasiswa
     (   idPenilaianBea,
         idBeasiswa,
         nis,
         nilai,
         survey,
         totalKelayakan,
         kategori
     )
     VALUES
     (  NEW.idBeasiswa,
        NEW.idBeasiswa,
        NEW.nis,
        NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10,
        NEW.survey,
        NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey,
        "K4"
     );
     ELSEIF (NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey) <= 60
    THEN 
      INSERT INTO penilaian_beasiswa
     (   idPenilaianBea,
         idBeasiswa,
         nis,
         nilai,
         survey,
         totalKelayakan,
         kategori
     )
     VALUES
     (  NEW.idBeasiswa,
        NEW.idBeasiswa,
        NEW.nis,
        NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10,
        NEW.survey,
        NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey,
        "K3"
     );
     ELSEIF (NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey) <= 80
    THEN 
      INSERT INTO penilaian_beasiswa
     (   idPenilaianBea,
         idBeasiswa,
         nis,
         nilai,
         survey,
         totalKelayakan,
         kategori
     )
     VALUES
     (  NEW.idBeasiswa,
        NEW.idBeasiswa,
        NEW.nis,
        NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10,
        NEW.survey,
        NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey,
        "K2"
     );
     ELSE
     INSERT INTO penilaian_beasiswa
     (   idPenilaianBea,
         idBeasiswa,
         nis,
         nilai,
         survey,
         totalKelayakan,
         kategori
     )
     VALUES
     (  NEW.idBeasiswa,
        NEW.idBeasiswa,
        NEW.nis,
        NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10,
        NEW.survey,
        NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey,
        "K1"
     );
    END IF;
     
    insert into notifikasi_beasiswa (
       idNotif
      ,idBeasiswa
      ,status
    ) VALUES (
       new.idBeasiswa
      ,new.idBeasiswa
      ,0
    );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_penilaian_beasiswa` AFTER UPDATE ON `beasiswa` FOR EACH ROW BEGIN
   
  IF (NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey) <= 20
    THEN
    UPDATE penilaian_beasiswa SET
    nis = NEW.nis,
    nilai = NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10,
    survey = NEW.survey,
    totalKelayakan = NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey,
    kategori = "K5"
    WHERE nis = OLD.nis;
  
  ELSEIF (NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey) <= 40
    THEN
    UPDATE penilaian_beasiswa SET
    nis = NEW.nis,
    nilai = NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10,
    survey = NEW.survey,
    totalKelayakan = NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey,
    kategori = "K4"
    WHERE nis = OLD.nis;
    
  ELSEIF (NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey) <= 60
    THEN
    UPDATE penilaian_beasiswa SET
    nis = NEW.nis,
    nilai = NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10,
    survey = NEW.survey,
    totalKelayakan = NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey,
    kategori = "K3"
    WHERE nis = OLD.nis;
    
  ELSEIF (NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey) <= 80
    THEN
    UPDATE penilaian_beasiswa SET
    nis = NEW.nis,
    nilai = NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10,
    survey = NEW.survey,
    totalKelayakan = NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey,
    kategori = "K2"
    WHERE nis = OLD.nis;
    
  ELSE
    UPDATE penilaian_beasiswa SET
    nis = NEW.nis,
    nilai = NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10,
    survey = NEW.survey,
    totalKelayakan = NEW.krit1 + NEW.krit2 + NEW.krit3 + NEW.krit4 + NEW.krit5 + NEW.krit6 + NEW.krit7 + NEW.krit8 + NEW.krit9 + NEW.krit10 + NEW.survey,
    kategori = "K1"
    WHERE nis = OLD.nis;
  
  END IF;
  
  IF NEW.status = "diterima" THEN
    update notifikasi_beasiswa SET status = "1" WHERE idNotif = OLD.idBeasiswa;
  ELSEIF  NEW.status = "ditolak" THEN
    update notifikasi_beasiswa SET status = "1" WHERE idNotif = OLD.idBeasiswa;
  END IF;
  
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pembagian_kelas`
--

CREATE TABLE `detail_pembagian_kelas` (
  `id_pembagian` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pembagian_kelas`
--

INSERT INTO `detail_pembagian_kelas` (`id_pembagian`, `id_kelas`, `nis`) VALUES
(16, 3, 1824050855),
(17, 1, 123234421),
(18, 7, 12322121),
(19, 11, 22357774),
(20, 6, 11232212),
(21, 6, 123221),
(22, 6, 1233213),
(23, 6, 1531409);

-- --------------------------------------------------------

--
-- Struktur dari tabel `filelampiran`
--

CREATE TABLE `filelampiran` (
  `nis` varchar(15) NOT NULL,
  `foto` mediumblob NOT NULL,
  `scanAkte` mediumblob NOT NULL,
  `scanIjazah` mediumblob NOT NULL,
  `scanKIP` mediumblob NOT NULL,
  `scanKK` mediumblob NOT NULL,
  `scanKPS` mediumblob NOT NULL,
  `scanKTPOrtu` mediumblob NOT NULL,
  `scanNISN` mediumblob NOT NULL,
  `scanSKHUN` mediumblob NOT NULL,
  `scanSKHUS` mediumblob NOT NULL,
  `scanSuratKet` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `filelampiran_beasiswa`
--

CREATE TABLE `filelampiran_beasiswa` (
  `nis` varchar(50) NOT NULL,
  `sktm` mediumblob,
  `ktp` mediumblob,
  `kk` mediumblob,
  `lain` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `filelampiran_beasiswa`
--

INSERT INTO `filelampiran_beasiswa` (`nis`, `sktm`, `ktp`, `kk`, `lain`) VALUES
('12322121', '', '', '', ''),
('228291', '', '', '', ''),
('555432', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `NIK` varchar(50) NOT NULL,
  `Nama_guru` varchar(50) NOT NULL,
  `nama_pangilan` varchar(50) NOT NULL,
  `NUPTK` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `status_pegawai` varchar(50) NOT NULL,
  `jenisPK` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `Alamat_jalan` varchar(50) NOT NULL,
  `RT` varchar(20) NOT NULL,
  `RW` varchar(20) NOT NULL,
  `Nama_dusun` varchar(50) NOT NULL,
  `Desa_kelurahan` varchar(50) NOT NULL,
  `Kecamatan` varchar(50) NOT NULL,
  `KodePos` int(20) NOT NULL,
  `Telpon` int(12) NOT NULL,
  `HP` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tugas_tambahan` varchar(50) NOT NULL,
  `SKCPNS` varchar(50) NOT NULL,
  `tglCPNS` datetime NOT NULL,
  `SK_pengangkatan` datetime NOT NULL,
  `TMT_pengangkatan` datetime NOT NULL,
  `lembaga_pengankatan` varchar(50) NOT NULL,
  `pangkat_golongan` varchar(50) NOT NULL,
  `sumbergaji` varchar(50) NOT NULL,
  `nama_ibu_kandung` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `nama_suami_atau_istri` varchar(50) NOT NULL,
  `pekerjaan_suami_istri` varchar(50) NOT NULL,
  `TMT_PNS` datetime NOT NULL,
  `lisensiKepsek` varchar(50) NOT NULL,
  `Diklat_kepengawasan` varchar(50) NOT NULL,
  `keahlian_brailer` varchar(50) NOT NULL,
  `keahlian_bahasa_isarat` varchar(50) NOT NULL,
  `NPWP` varchar(50) NOT NULL,
  `nama_wajib_pajak` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `No_rekening` varchar(50) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `NIP` varchar(50) NOT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`NIK`, `Nama_guru`, `nama_pangilan`, `NUPTK`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status_pegawai`, `jenisPK`, `agama`, `Alamat_jalan`, `RT`, `RW`, `Nama_dusun`, `Desa_kelurahan`, `Kecamatan`, `KodePos`, `Telpon`, `HP`, `email`, `tugas_tambahan`, `SKCPNS`, `tglCPNS`, `SK_pengangkatan`, `TMT_pengangkatan`, `lembaga_pengankatan`, `pangkat_golongan`, `sumbergaji`, `nama_ibu_kandung`, `status_perkawinan`, `nama_suami_atau_istri`, `pekerjaan_suami_istri`, `TMT_PNS`, `lisensiKepsek`, `Diklat_kepengawasan`, `keahlian_brailer`, `keahlian_bahasa_isarat`, `NPWP`, `nama_wajib_pajak`, `kewarganegaraan`, `bank`, `No_rekening`, `atas_nama`, `NIP`, `foto`) VALUES
('', 'ABDUL LATIF ANSHORI', 'ANSHORI', 'GURU MAPEL', 'L', 'JOMBANG', '1998-07-07 00:00:00', 'GURU HONORER', '', 'ISLAM', 'JOMBANG', '4', '3', 'LENGKONG', 'JATIGEDONG', 'KEC.PLOSO', 61453, 0, 2147483647, 'latiev89@gmail>com', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'SEKOLAH', 'SUSIANAH', 'BELUM MENIKAH', '', 'TIDAK BEKERJA', '0000-00-00 00:00:00', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK', 'TIDAK', '', '', 'INDONESIA', '', '', '', '351714070789000', ''),
('11111', 'FAHMI FAHRURROZI', 'FAHMI', '', 'l', 'LAMONGAN', '1996-07-24 00:00:00', 'GURU HONORER', 'GURU MAPEL', 'ISLAM', 'JALAN SUGIO TIMUR', '2', '4', '5', 'SUGIO', 'SUGIO', 6543, 0, 2147483647, 'fahmifr@gmail.com', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', 'ASTUTIK', 'BELUM', '', '', '0000-00-00 00:00:00', 'TIDAK ADA', '', 'TIDAK ADA ', '', '', '', 'INDONESIA', '', '', '', '22222', ''),
('1177642', 'BAMBANG SUKOCO', 'BAMBANG', '', 'L', 'KALIMANTAN', '1983-07-12 00:00:00', 'PEGAWAI TETAP', '', 'ISLAM', 'JL MAIJEN PANJAITAN GANG 8', '3', '1', 'GEPUH SARI', 'GEPUH SARI', 'LOWOKWARU', 445321, 0, 2147483647, 'sukoco55@gmail.com', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'B1', 'SEKOLAH', 'SUNTIAH', 'BELUM MENIKAH', '', '', '0000-00-00 00:00:00', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA ', 'TIDAK', '', '', 'INDONESIA', '', '', '', '198307121145', ''),
('123231', 'REIGINA ADELIA PUTRI', 'RERE', '', 'P', 'BLITAR', '0000-00-00 00:00:00', 'GURU HONORER', 'ADMIN OPERATOR', 'ISLAM', 'JLN DELIMA ', '5', '2', 'BANARAN', 'BANARAN', 'BANARAN', 56554, 0, 2147483647, 'rere12@@gmail.com', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'SEKOLAH', 'MARIA', 'BELUM MENIKAH', '', '', '0000-00-00 00:00:00', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK', 'TIDAK', '', '', 'INDONESIA', '', '', '', '12321', ''),
('1234', 'ALI HERMAWAN', 'ALI', '1213', 'L', 'JOMBANG', '0000-00-00 00:00:00', 'GURU HONORER', 'GURU MAPEL', 'ISLAM', 'JL ANGGREK NO 32', '3', '2', 'TEMBELANG', 'TEMBELANG', 'TEMBELANG', 644511, 0, 2147483647, 'alirs@gmail.com', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', 'SULAITANAH', 'SUDAH MENIKAH', 'JANAHTULLOH', 'IBU RUMAH TANGGA', '0000-00-00 00:00:00', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA ', 'TIDAK', '', '', 'INDONESIA', '', '', '', '124334', ''),
('15311102312', 'ANANG MA\'RUF', 'ANANG', '', 'L', 'MALANG', '1974-06-03 00:00:00', 'PEGAWAI TETAP', '', 'ISLAM', 'JL SIGURU GURA', '4', '8', 'BEDENGAN', 'BEDENGAN', 'BEDENGAN', 45332, 0, 822231132, 'MA\'RUF27@gmail.com', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SEKOLAH', 'B1', 'SEKOLAH', 'JUBAIDAH', 'SUDAH MENIKAH', 'CHOLIFAH', 'IBU RUMAH TANGGA', '0000-00-00 00:00:00', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA ', 'TIDAK', '', '', 'INDONESIA', '', '', '', '19960708112', ''),
('2132', 'ZAINAL ABIDIN', 'ZAINAL', '23123', 'L', 'GERSIK', '0000-00-00 00:00:00', 'GURU HONORER', 'GURU MAPEL', 'ISLAM', 'JLN PANJAITAN 10', '3', '4', 'PANJAITAN', 'PANJAITAN DALAM', 'LOWOKWARU', 342231, 86543, 2147483647, 'alfianakhmad5@gmail.com', '', 'sads', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SEKOLAH', '', 'SEKOLAH', 'wiwik', 'belum nikah', 'belum menikah', 'tidak', '0000-00-00 00:00:00', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA ', 'TIDAK', '', '', 'indonesia', '', '', '', '', ''),
('223211', 'LAUDIA DEVI', 'DEVI', '', 'P', 'NGANJUK', '1990-07-08 00:00:00', 'GURU HONORER', '', 'ISLAM', 'BALONGGEBANG', '2', '1', 'BALONGGEBANG', 'BALONGGEBANG', 'GONDANG', 432252, 0, 86644322, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', 'DEWI SISI', 'BELUM MENIKAH', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', 'INDONESIA', '', '', '', '123342', ''),
('232111', 'DARWOTO ', 'DARWOTO', '', 'L', 'SEMARANG', '1975-05-06 00:00:00', 'PEGAWAI TETAP', '', 'ISLAM', 'JLN MOJOSARI GANG PLUTO', '9', '4', 'BANARANTI', 'BANARANTI', 'BANARANTI', 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '223422211', ''),
('87622182', 'NINIK SUSANTI', 'NINIK', '', 'P', 'MAJALENGKA', '1983-01-01 00:00:00', 'PEGAWAI TETAP', '', 'ISLAM', 'JL MTAHARI NO 47', '3', '6', 'PLANETARIA', 'SONGGORITI', 'SONNGORITI', 343556, 0, 2147483647, 'ninik33@gmail.com', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SEKOLAH', 'C2', 'SEKOLAH', 'DASIMAH', 'SUDAH MENIKAH', 'BOWO SUYOTO', 'PNS', '0000-00-00 00:00:00', 'TIDAK ADA', 'TIDAK ADA', 'TIDAK ADA ', 'TIDAK', '', '', 'INDONESIA', '', '', '', '19830811213113', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE `hari` (
  `id_Hari` int(20) NOT NULL,
  `kode_hari` varchar(30) NOT NULL,
  `Hari` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`id_Hari`, `kode_hari`, `Hari`) VALUES
(1, 'H1', 'SENIN'),
(2, 'H2', 'SELASA'),
(3, 'H3', 'RABU'),
(4, 'H4', 'KAMIS'),
(5, 'H5', 'JUM\'AT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `idJabatan` varchar(50) NOT NULL,
  `namaJabatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`idJabatan`, `namaJabatan`) VALUES
('JAB-admin', 'admin'),
('JAB-guru', 'guru'),
('JAB-siswa', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_Hari` int(20) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_kelas`, `id_mapel`, `id_ruangan`, `id_Hari`, `jam`) VALUES
('JADWAL-11', 3, 2, 1, 1, '1'),
('JADWAL-14', 3, 1, 1, 1, '3'),
('JADWAL-16', 1, 5, 2, 1, '6'),
('JADWAL-21', 1, 6, 4, 2, '1'),
('JADWAL-28', 7, 1, 1, 2, '8'),
('JADWAL-31', 1, 2, 2, 3, '1'),
('JADWAL-37', 11, 3, 2, 3, '7'),
('JADWAL-45', 11, 5, 4, 4, '5'),
('JADWAL-57', 11, 3, 5, 5, '7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `idJurusan` int(11) NOT NULL,
  `kodeJurusan` varchar(5) NOT NULL,
  `bs` varchar(50) NOT NULL,
  `ps` varchar(50) NOT NULL,
  `kk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`idJurusan`, `kodeJurusan`, `bs`, `ps`, `kk`) VALUES
(1, 'PS', 'KESEHATAN', 'PERAWATAN SOSIAL', 'PERAWATAN SOSIAL'),
(2, 'UPW', 'SENI, KERAJINAN DAN PARIWISATA', 'PARIWISATA', 'USAHA PERJALANAN WISATA'),
(3, 'AP', 'SENI, KERAJINAN DAN PARIWISATA', 'PARIWISATA', 'AKOMODASI PERHOTELAN'),
(4, 'KPR', 'KESEHATAN', 'KESEHATAN', 'KEPERAWATAN'),
(5, 'JSB', 'SENI, KERAJINAN DAN PARIWISATA', 'TATA BOGA', 'JASA BOGA'),
(6, 'TKJ', 'TEKNOLOGI INFORMASI DAN KOMUNIKASI', 'TEKNIK KOMPUTER DAN INFORMATIKA', 'TEKNIK KOMPUTER DAN JARINGAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegemaran`
--

CREATE TABLE `kegemaran` (
  `nis` varchar(15) NOT NULL,
  `citacita` varchar(15) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `kesenian` varchar(255) NOT NULL,
  `olahraga` varchar(255) NOT NULL,
  `organisasi` varchar(155) NOT NULL,
  `prestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegemaran`
--

INSERT INTO `kegemaran` (`nis`, `citacita`, `hobi`, `kesenian`, `olahraga`, `organisasi`, `prestasi`) VALUES
('1824050855', '', '', '', '', '', ''),
('1824051230', '', '', '', '', '', ''),
('1824051231', '', '', '', '', '', ''),
('1824051245', '', '', '', '', '', ''),
('1906021347', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `ThnAjaran` varchar(20) NOT NULL,
  `kodeJurusan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kode_kelas`, `ThnAjaran`, `kodeJurusan`) VALUES
(1, '10 PERAWATAN SOSIAL 1', 'PR1', '2017/2018', 'PS'),
(2, '10 PERAWATAN SOSIAL 2', 'PR2', '2017/2018', 'PS'),
(3, '10UPW1', 'PW01', '2017/2018', 'UPW'),
(4, '10UPW2', 'KD003', '2017/2018', 'UPW'),
(5, '10TKJ1', 'KDTKJ001', '2017/2018', 'TKJ'),
(6, '10TKJ2', 'KD007', '2017/2018', 'TKJ'),
(7, '10AP1', 'KD001', '2017/2018', 'AP'),
(8, '10AP2', 'KK008', '2017/2018', 'AP'),
(9, '10KEPERAWATAN 1', 'KDKPR009', '2017/2018', 'KPR'),
(10, '10 KEPERAWATAN 2', 'KK0010', '2017/2018', 'KPR'),
(11, '10 JASA BOGA 1', 'KK0011', '2017/2018', 'JSB'),
(12, '10 JASA BOGA 2', 'KKJB009', '2017/2018', 'JSB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketakhirsiswa`
--

CREATE TABLE `ketakhirsiswa` (
  `nis` varchar(15) NOT NULL,
  `tglKeluar` date NOT NULL,
  `alasan` varchar(15) NOT NULL,
  `noIjazah` varchar(25) NOT NULL,
  `noSKHUN` varchar(25) NOT NULL,
  `tglIjazah` date NOT NULL,
  `tglSKHUN` date NOT NULL,
  `tahunLulus` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ketakhirsiswa`
--

INSERT INTO `ketakhirsiswa` (`nis`, `tglKeluar`, `alasan`, `noIjazah`, `noSKHUN`, `tglIjazah`, `tglSKHUN`, `tahunLulus`) VALUES
('1824050855', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', ''),
('1824051230', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', ''),
('1824051231', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', ''),
('1824051245', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', ''),
('1906021347', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketayah`
--

CREATE TABLE `ketayah` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `kewarganegaraan` varchar(25) NOT NULL,
  `noKTP` varchar(25) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `penghasilan` varchar(25) NOT NULL,
  `tglLahir` date NOT NULL,
  `tmptLahir` varchar(25) NOT NULL,
  `ketHidup` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ketayah`
--

INSERT INTO `ketayah` (`nis`, `nama`, `agama`, `alamat`, `kewarganegaraan`, `noKTP`, `telepon`, `pekerjaan`, `pendidikan`, `penghasilan`, `tglLahir`, `tmptLahir`, `ketHidup`) VALUES
('1824050855', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
('1824051230', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
('1824051231', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
('1824051245', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
('1906021347', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketibu`
--

CREATE TABLE `ketibu` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `kewarganegaraan` varchar(25) NOT NULL,
  `noKTP` varchar(25) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `penghasilan` varchar(25) NOT NULL,
  `tglLahir` date NOT NULL,
  `tmptLahir` varchar(25) NOT NULL,
  `ketHidup` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ketibu`
--

INSERT INTO `ketibu` (`nis`, `nama`, `agama`, `alamat`, `kewarganegaraan`, `noKTP`, `telepon`, `pekerjaan`, `pendidikan`, `penghasilan`, `tglLahir`, `tmptLahir`, `ketHidup`) VALUES
('1824050855', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
('1824051230', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
('1824051231', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
('1824051245', '', '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
('1906021347', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketkesehatan`
--

CREATE TABLE `ketkesehatan` (
  `nis` varchar(15) NOT NULL,
  `berat` varchar(5) NOT NULL,
  `tinggi` varchar(5) NOT NULL,
  `golDarah` varchar(5) NOT NULL,
  `kelainan` varchar(25) NOT NULL,
  `rPenyakit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ketkesehatan`
--

INSERT INTO `ketkesehatan` (`nis`, `berat`, `tinggi`, `golDarah`, `kelainan`, `rPenyakit`) VALUES
('1824050855', '', '', '', '', ''),
('1824051230', '', '', '', '', ''),
('1824051231', '', '', '', '', ''),
('1824051245', '', '', '', '', ''),
('1906021347', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketkompetensi`
--

CREATE TABLE `ketkompetensi` (
  `nis` varchar(15) NOT NULL,
  `bsCode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketlulus`
--

CREATE TABLE `ketlulus` (
  `nis` varchar(15) NOT NULL,
  `kelanjutan` varchar(25) NOT NULL,
  `namaInstansi` varchar(50) NOT NULL,
  `penghasilan` varchar(25) NOT NULL,
  `tglMulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ketlulus`
--

INSERT INTO `ketlulus` (`nis`, `kelanjutan`, `namaInstansi`, `penghasilan`, `tglMulai`) VALUES
('1824050855', '', '', '', '0000-00-00'),
('1824051230', '', '', '', '0000-00-00'),
('1824051231', '', '', '', '0000-00-00'),
('1824051245', '', '', '', '0000-00-00'),
('1906021347', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketpindahan`
--

CREATE TABLE `ketpindahan` (
  `nis` varchar(15) NOT NULL,
  `alasan` varchar(25) NOT NULL,
  `dariSekolah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ketpindahan`
--

INSERT INTO `ketpindahan` (`nis`, `alasan`, `dariSekolah`) VALUES
('1824050855', '', ''),
('1824051230', '', ''),
('1824051231', '', ''),
('1824051245', 'Ikut Pekerjaan Orang Tua', 'SMKN 1 Madura'),
('1906021347', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kettmpttinggal`
--

CREATE TABLE `kettmpttinggal` (
  `nis` varchar(15) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jarak` varchar(12) NOT NULL,
  `kabupaten` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kelurahan` varchar(25) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `rt` varchar(25) NOT NULL,
  `rw` varchar(25) NOT NULL,
  `tinggalDgn` varchar(25) NOT NULL,
  `alamatM` varchar(25) NOT NULL,
  `kecamatanM` varchar(25) NOT NULL,
  `kabupatenM` varchar(25) NOT NULL,
  `kondisiRumah` varchar(25) NOT NULL,
  `kondisiFisik` varchar(25) NOT NULL,
  `transportasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kettmpttinggal`
--

INSERT INTO `kettmpttinggal` (`nis`, `alamat`, `jarak`, `kabupaten`, `kecamatan`, `kelurahan`, `provinsi`, `rt`, `rw`, `tinggalDgn`, `alamatM`, `kecamatanM`, `kabupatenM`, `kondisiRumah`, `kondisiFisik`, `transportasi`) VALUES
('1824050855', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1824051230', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1824051231', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1824051245', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1906021347', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketwali`
--

CREATE TABLE `ketwali` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `kewarganegaraan` varchar(25) NOT NULL,
  `noKTP` varchar(25) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `penghasilan` varchar(25) NOT NULL,
  `tglLahir` date NOT NULL,
  `tmptLahir` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ketwali`
--

INSERT INTO `ketwali` (`nis`, `nama`, `agama`, `alamat`, `kewarganegaraan`, `noKTP`, `telepon`, `pekerjaan`, `pendidikan`, `penghasilan`, `tglLahir`, `tmptLahir`) VALUES
('1824050855', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
('1824051230', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
('1824051231', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
('1824051245', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
('1906021347', '', '', '', '', '', '', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuotajurusan`
--

CREATE TABLE `kuotajurusan` (
  `idKuota` int(11) NOT NULL,
  `kodeJurusan` char(5) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuotajurusan`
--

INSERT INTO `kuotajurusan` (`idKuota`, `kodeJurusan`, `kuota`) VALUES
(1, 'PS', 6),
(2, 'UPW', 5),
(3, 'AP', 5),
(4, 'KPR', 5),
(5, 'JSB', 5),
(6, 'TKJ', 5),
(7, 'STI', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lampiran`
--

CREATE TABLE `lampiran` (
  `user_id` varchar(10) NOT NULL,
  `foto_sis` blob NOT NULL,
  `foto_nis` blob NOT NULL,
  `foto_ktp_ortu` blob NOT NULL,
  `foto_kk` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `idLevel` varchar(50) NOT NULL,
  `level` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`idLevel`, `level`) VALUES
('1', 'admin'),
('2', 'guru'),
('3', 'siswa'),
('LEV-staf admin beasiswa', 'staf admin beasiswa'),
('LEV-staf admin prakerin', 'staf admin prakerin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `idLog` int(11) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `nik_nis` varchar(50) DEFAULT NULL,
  `tabel` varchar(50) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`idLog`, `level`, `nik_nis`, `tabel`, `waktu`, `action`) VALUES
(0, 'admin', '123231', 'periode_beasiswa', '28Feb2019', 'update'),
(1, 'admin', '123231', 'user', '11Jul2018', 'insert'),
(2, 'admin', '123231', 'user', '11Jul2018', 'insert'),
(3, 'admin', '123231', 'user', '11Jul2018', 'delete'),
(4, 'admin', '123231', 'user', '11Jul2018', 'insert'),
(5, 'admin', '123231', 'user', '11Jul2018', 'insert'),
(6, 'admin', '123231', 'user', '11Jul2018', 'insert'),
(7, 'admin', '123231', 'user', '11Jul2018', 'insert'),
(8, 'admin', '123231', 'pengajuan', '06Feb2019', 'insert'),
(9, 'admin', '123231', 'pengajuan', '06Feb2019', 'insert'),
(10, 'admin', '123231', 'pengajuan', '06Feb2019', 'insert'),
(11, 'admin', '123231', 'pengajuan', '06Feb2019', 'update'),
(12, 'admin', '123231', 'pengajuan', '06Feb2019', 'update'),
(13, 'admin', '123231', 'pengajuan', '06Feb2019', 'update'),
(14, 'admin', '123231', 'pengajuan', '06Feb2019', 'update'),
(15, 'admin', '123231', 'pengajuan', '06Feb2019', 'insert'),
(16, 'admin', '123231', 'periode_beasiswa', '13Feb2019', 'update'),
(17, 'admin', '123231', 'pengajuan', '13Feb2019', 'delete'),
(18, 'admin', '123231', 'pengajuan', '13Feb2019', 'insert'),
(19, 'admin', '123231', 'pengajuan', '13Feb2019', 'insert'),
(20, 'admin', '123231', 'periode_beasiswa', '13Feb2019', 'update'),
(21, 'admin', '123231', 'pengajuan', '13Feb2019', 'delete'),
(22, 'admin', '123231', 'periode_beasiswa', '13Feb2019', 'update'),
(23, 'admin', '123231', 'pengajuan', '13Feb2019', 'insert'),
(24, 'admin', '123231', 'pengajuan', '13Feb2019', 'delete'),
(25, 'admin', '123231', 'periode_beasiswa', '13Feb2019', 'update'),
(26, 'admin', '123231', 'pengajuan', '13Feb2019', 'insert'),
(27, 'admin', '123231', 'pengajuan', '13Feb2019', 'delete'),
(28, 'admin', '123231', 'pengajuan', '13Feb2019', 'delete'),
(29, 'admin', '123231', 'pengajuan', '13Feb2019', 'insert'),
(30, 'admin', '123231', 'pengajuan', '13Feb2019', 'delete'),
(31, 'admin', '123231', 'pengajuan', '13Feb2019', 'update'),
(32, 'admin', '123231', 'pengajuan', '13Feb2019', 'insert'),
(33, 'admin', '123231', 'pengajuan', '13Feb2019', 'delete'),
(34, 'admin', '123231', 'pengajuan', '13Feb2019', 'insert'),
(35, 'admin', '123231', 'pengajuan', '13Feb2019', 'delete'),
(36, 'admin', '123231', 'pengajuan', '13Feb2019', 'insert'),
(37, 'admin', '123231', 'pengajuan', '13Feb2019', 'delete'),
(38, 'admin', '123231', 'pengajuan', '13Feb2019', 'insert'),
(39, 'admin', '123231', 'pengajuan', '13Feb2019', 'delete'),
(40, 'admin', '123231', 'pengajuan', '13Feb2019', 'insert'),
(41, 'admin', '123231', 'pengajuan', '13Feb2019', 'delete'),
(42, 'admin', '123231', 'pengajuan', '14Feb2019', 'update'),
(43, 'admin', '123231', 'beasiswa', '14Feb2019', 'insert'),
(44, 'admin', '123231', 'beasiswa', '14Feb2019', 'insert'),
(45, 'admin', '123231', 'beasiswa', '14Feb2019', 'insert'),
(46, 'admin', '123231', 'beasiswa', '14Feb2019', 'insert'),
(47, 'admin', '123231', 'beasiswa', '14Feb2019', 'insert'),
(48, 'admin', '123231', 'pengajuan', '14Feb2019', 'delete'),
(49, 'admin', '123231', 'pengajuan', '14Feb2019', 'delete'),
(50, 'admin', '123231', 'beasiswa', '14Feb2019', 'insert');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masterbsw`
--

CREATE TABLE `masterbsw` (
  `id` int(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `rumah` varchar(255) NOT NULL,
  `bangunan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masterbsw`
--

INSERT INTO `masterbsw` (`id`, `jenis`, `gaji`, `rumah`, `bangunan`) VALUES
(1, 'BIDIK MISI', 'Rp. 1.000.000 ke bawah', '', ''),
(2, 'SAMPOERNA', '', '', ''),
(3, 'BCA', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` int(11) NOT NULL,
  `kode_mapel` varchar(30) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `ThnAjaran` varchar(15) NOT NULL,
  `NIK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `kode_mapel`, `nama_mapel`, `ThnAjaran`, `NIK`) VALUES
(1, 'KMP001', 'BAHASA INDONESIA', '2017/2018', '11111'),
(2, 'KMP002', 'MATEMATIKA', '2017/2018', '1234'),
(3, 'KMP003', 'FISIKA', '2017/2018', ''),
(4, 'KMP004', 'KIMIA', '2017/2018', '1177642'),
(5, 'KMP005', 'BAHASA JEPANG', '2017/2018', '123231'),
(6, 'KMP006', 'JARINGAN', '2017/2018', '2132'),
(7, 'KMP007', 'BASIS DATA', '2017/2018', '223211'),
(8, 'KMP008', 'BAHASA DAERAH', '2017/2018', '232111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nisn`
--

CREATE TABLE `nisn` (
  `nisn` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi_beasiswa`
--

CREATE TABLE `notifikasi_beasiswa` (
  `idNotif` varchar(50) NOT NULL,
  `idBeasiswa` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notifikasi_beasiswa`
--

INSERT INTO `notifikasi_beasiswa` (`idNotif`, `idBeasiswa`, `status`) VALUES
('BEASISWA KARSA - 1818051051', 'BEASISWA KARSA - 1818051051', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `idPendaftaran` varchar(15) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tglLahir` date NOT NULL,
  `tempatLahir` varchar(15) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `kabupaten` varchar(15) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `agama` varchar(8) NOT NULL,
  `sekolahAsal` varchar(20) NOT NULL,
  `noPesertaSLTP` varchar(15) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `nilaiUN` varchar(5) NOT NULL,
  `nilaiRapot` varchar(5) NOT NULL,
  `nilaiSeleksi` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `privilage` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`idPendaftaran`, `nisn`, `nama`, `jk`, `email`, `tglLahir`, `tempatLahir`, `alamat`, `kecamatan`, `kabupaten`, `telepon`, `agama`, `sekolahAsal`, `noPesertaSLTP`, `jurusan`, `nilaiUN`, `nilaiRapot`, `nilaiSeleksi`, `status`, `privilage`) VALUES
('PDS06021011', '3532', 'Abdullah Pedrick', 'L', 'abdullahpedrick@gmail.com', '1998-08-18', 'Lampung', 'Lampung BTN D3 NO 05', 'lempuyang banda', 'way pengubuan', '09676455', 'ISLAM', 'SMP IT BUSTANUL ULUM', '51748571', 'TKJ', '60', '65', 50, 'Diterima', 0),
('PDS06021012', '523523', 'Gary Ricardo', 'L', 'gary@gmail.com', '1998-06-06', 'Bukit Tinggi', 'Bukit Tinggi', 'Bukit Tinggi', 'Bukit Tinggi', '0858582184', 'ISLAM', 'SMP NEGERI 2 BUKIT T', '7478914578', 'JSB', '50', '65', 5, 'Tidak Diterima', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendataan`
--

CREATE TABLE `pendataan` (
  `idPendataan` varchar(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `asalSekolah` varchar(30) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `tempatLahir` varchar(15) NOT NULL,
  `tglLahir` date NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `jurusan` varchar(15) NOT NULL,
  `thnAjaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendataan`
--

INSERT INTO `pendataan` (`idPendataan`, `nisn`, `nama`, `asalSekolah`, `jk`, `alamat`, `tempatLahir`, `tglLahir`, `pekerjaan`, `jurusan`, `thnAjaran`) VALUES
('PDT13021046', '', '', '', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `idBea` varchar(50) NOT NULL,
  `namaWali` varchar(200) DEFAULT NULL,
  `alamatWali` text,
  `noHPWali` varchar(15) DEFAULT NULL,
  `pekerjaanWali` varchar(50) DEFAULT NULL,
  `penghasilanWali` varchar(12) DEFAULT NULL,
  `namaSiswa` varchar(200) DEFAULT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `psCode` varchar(50) DEFAULT NULL,
  `pengajuanSpp` varchar(12) DEFAULT NULL,
  `pengajuanSbpp` varchar(12) DEFAULT NULL,
  `waktu` text,
  `thnAjaran` varchar(20) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `idPeriode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`idBea`, `namaWali`, `alamatWali`, `noHPWali`, `pekerjaanWali`, `penghasilanWali`, `namaSiswa`, `nis`, `psCode`, `pengajuanSpp`, `pengajuanSbpp`, `waktu`, `thnAjaran`, `kelas`, `idPeriode`) VALUES
('BEASISWA KARSA - 1818051051', '', '', '', '', '200000', 'Bagus Yekti Widodo', '1818051051', 'PERAWATAN SOSIAL', '200000', '200000', 'Friday,01-Jun-2018 (08:40 AM)', '2018', '', 1),
('BEASISWA KARSA - 1818051053', 'bismillah', 'bismillah', 'bismillah', 'bismillah', 'bismillah', 'Mohammad Salah', '1818051053', 'AKOMODASI PERHOTELAN', '200000', '1000000', 'Friday,01-Jun-2018 (12:05 PM)', '2018', 'bismillah', 1);

--
-- Trigger `pengajuan`
--
DELIMITER $$
CREATE TRIGGER `delete_file_lampiran_pengajuan_beasiswa` AFTER DELETE ON `pengajuan` FOR EACH ROW DELETE FROM filelampiran_beasiswa WHERE nis = OLD.nis
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_beasiswa`
--

CREATE TABLE `penilaian_beasiswa` (
  `idPenilaianBea` varchar(50) NOT NULL,
  `idBeasiswa` varchar(50) DEFAULT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `nilai` varchar(50) DEFAULT NULL,
  `survey` varchar(50) DEFAULT NULL,
  `totalKelayakan` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian_beasiswa`
--

INSERT INTO `penilaian_beasiswa` (`idPenilaianBea`, `idBeasiswa`, `nis`, `nilai`, `survey`, `totalKelayakan`, `kategori`) VALUES
('BEASISWA KARSA - 1818051051', 'BEASISWA KARSA - 1818051051', '1818051051', '45', '0', '45', 'K3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode_beasiswa`
--

CREATE TABLE `periode_beasiswa` (
  `idPeriode` int(11) NOT NULL,
  `mulai` varchar(50) DEFAULT NULL,
  `hingga` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periode_beasiswa`
--

INSERT INTO `periode_beasiswa` (`idPeriode`, `mulai`, `hingga`) VALUES
(1, '1', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rpendidikan`
--

CREATE TABLE `rpendidikan` (
  `nis` varchar(15) NOT NULL,
  `tamatanDari` varchar(25) NOT NULL,
  `lamaBelajar` varchar(25) NOT NULL,
  `noPesertaUAN` varchar(25) NOT NULL,
  `noIjazah` varchar(25) NOT NULL,
  `noSKHUN` varchar(25) NOT NULL,
  `tglIjazah` date NOT NULL,
  `tglSKHUN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rpendidikan`
--

INSERT INTO `rpendidikan` (`nis`, `tamatanDari`, `lamaBelajar`, `noPesertaUAN`, `noIjazah`, `noSKHUN`, `tglIjazah`, `tglSKHUN`) VALUES
('1824050855', '', '', '', '', '', '0000-00-00', '0000-00-00'),
('1824051230', '', '', '', '', '', '0000-00-00', '0000-00-00'),
('1824051231', '', '', '', '', '', '0000-00-00', '0000-00-00'),
('1824051245', '', '', '', '', '', '0000-00-00', '0000-00-00'),
('1906021347', '', '', '', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `kode_ruangan` varchar(30) NOT NULL,
  `nama_ruangan` varchar(30) NOT NULL,
  `ThnAjaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `kode_ruangan`, `nama_ruangan`, `ThnAjaran`) VALUES
(1, 'KRTKJ001', 'RTKJ1', '2017/2018'),
(2, 'KRTKJ002', 'RTKJ2', '2017/2018'),
(3, 'KR003', 'LAB BIOLOGI', '2017/2018'),
(4, 'KR004', 'LAB TI', '2017/2018'),
(5, 'KR005', 'LAB BAHASA', '2017/2018'),
(8, 'k008', 'ryyt', '2017/2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(15) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `namaSiswa` varchar(30) NOT NULL,
  `namaPanggilan` varchar(15) NOT NULL,
  `jk` char(1) NOT NULL,
  `tempatLahir` varchar(20) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `anakKe` int(11) NOT NULL,
  `bahasa` varchar(25) NOT NULL,
  `jenisAnak` varchar(10) NOT NULL,
  `jsa` int(11) NOT NULL,
  `jsk` int(11) NOT NULL,
  `jst` int(11) NOT NULL,
  `kewarganegaraan` varchar(25) NOT NULL,
  `kodeJurusan` varchar(5) NOT NULL,
  `thnAjaran` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `idPeriode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `namaSiswa`, `namaPanggilan`, `jk`, `tempatLahir`, `tanggalLahir`, `agama`, `email`, `hp`, `telepon`, `pass`, `anakKe`, `bahasa`, `jenisAnak`, `jsa`, `jsk`, `jst`, `kewarganegaraan`, `kodeJurusan`, `thnAjaran`, `status`, `id_kelas`, `idPeriode`) VALUES
('11232212', '232211123', 'ADIAUL ', 'ASIKIN', 'L', 'TUBAN', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'TKJ', '2017/2018', 0, 1, NULL),
('123221', '123432111', 'WAHYU KRESNA', 'KRESNA', 'L', 'PROBOLINGGO', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'TKJ', '2017/2018', 0, 1, 1),
('12322121', '11232113', 'SHELY ARISTA', 'SHELLY', 'P', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'AP', '2017/2018', 0, 1, 1),
('123234421', '22321123', 'ARVIN FAIRUS HUDA', 'ARVIN', 'L', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'PS', '2017/208', 0, 1, NULL),
('1232443', '543445', 'BENI ANGGORO', 'BENI', 'L', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'AP', '2017/2018', 0, 0, NULL),
('1233213', '3345321', 'ALIF LATHIFATUL', 'ALIF', 'P', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'TKJ', '2017/2018', 0, 1, NULL),
('1234212', '3345564', 'DONI SITANGGANG', 'DONI', 'L', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'AP', '2017/2018', 0, 0, NULL),
('1531409', '1234567895', 'harendra riski', 'riski', 'L', 'tulungagung', '2018-07-26', 'islam', 'alfian@gmail.com', '082245111', '11123', '453', 2, 'jawa', 'kandung', 1, 1, 1, 'indo', 'TKJ', '2011', 0, 1, 1),
('1818051051', '1234567896', 'Bagus Yekti Widodo', 'bagus', 'L', 'Tulungagung', '2000-09-27', 'Islam', 'bagus5520@gmail.com', '083841783960', '08912312313', 'ijT7QNYl7L', 0, 'Jawa', 'Kandung', 0, 0, 0, 'indonesia', 'KPR', '2018/2019', 0, 0, 1),
('1824050855', '1234567892', 'Faisal', '', 'L', 'Malang', '2000-01-30', '', '', '', '7918739187', 'eaHRY6kScB', 0, '', '', 0, 0, 0, '', 'UPW', '', 0, 1, 1),
('1824051231', '1234567893', 'Abid ', '', 'L', 'Malang', '2000-01-04', '', '', '', '08923123123', 'oFYiF0v2If', 0, '', '', 0, 0, 0, '', 'JSB', '', 0, 0, 1),
('1824051237', '1234567896', 'Bagus Yekti Widodo', '', 'L', 'Tulungagung', '2000-09-27', '', '', '', '08912312313', 'doqIZumfO0', 0, '', '', 0, 0, 0, '', 'PS', '', 0, 0, 1),
('2221322', '22134433', 'JAVIERA DANI', 'DANI', 'L', 'BALI', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'PS', '', 0, 0, NULL),
('223212', '12334121', 'CUCE ARWINDI', 'CUCE', 'P', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'AP', '2017/2018', 0, 0, 1),
('22357774', '3357746', 'NAFILLULMUBIN', 'NAFIL', 'L', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'JSB', '', 0, 1, NULL),
('228291', '22345545', 'MUHAMMAD SABAUDIN', 'UDIN', 'L', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'UPW', '2017/2018', 0, 0, NULL),
('22993481', '553821001', 'FADILLA ARYANI', 'FADILA', 'P', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'UPW', '2017/2018', 0, 0, NULL),
('2333432', '1233434', 'AULIYAULAFIFAH', 'AUL', 'P', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'KPR', '2017/2018', 0, 0, NULL),
('234453', '6546817', 'JOHN PASARIBU', 'JOHN', 'L', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'PS', '2017/2018', 0, 0, NULL),
('44453111', '3433311', 'NIKEN WIDIA PUTRI', 'NIKEN', 'P', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'KPR', '2017/2018', 0, 0, NULL),
('555432', '8977381', 'M SURYA DANI', 'SURYA', 'L', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'JSB', '2017/2018', 0, 0, NULL),
('5677493', '45377728', 'GRANDIS DWI', 'DWI', 'L', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'UPW', '2017/2018', 0, 0, NULL),
('667865', '45788967', 'AMBARUKMO SUSANTI', 'SUSANTI', 'P', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'JSB', '2017/2018', 0, 0, NULL),
('68927', '5463672', 'KEVIN APRILIO', 'KEVIN', '', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'AP', '2017/2018', 0, 0, NULL),
('776554432', '77554466', 'AFARUL SHOLIHAH', 'FARUL', 'P', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'KPR', '2017/2018', 0, 0, NULL),
('7786556', '44567765', 'KARTIKA PUTRI', 'PUTRI', 'P', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'UPW', '2017/2018', 0, 0, NULL),
('8911273', '88271162', 'HERU ICWANUDIN', 'HERU', 'L', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'PS', '2017/2018', 0, 0, NULL),
('99203', '7783655', 'BRIAN DWI ALAMSYAH', 'BRIAN', 'L', '', '0000-00-00', '', '', '', '', '', 0, '', '', 0, 0, 0, '', 'AP', '2017/2018', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `thnajaran`
--

CREATE TABLE `thnajaran` (
  `idThnAjaran` int(11) NOT NULL,
  `thnAjaran` varchar(12) NOT NULL,
  `semester` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `thnajaran`
--

INSERT INTO `thnajaran` (`idThnAjaran`, `thnAjaran`, `semester`) VALUES
(1, '2017 - 2018', 'ganjil'),
(2, '2017 - 2018', 'genap'),
(3, '2018 - 2019', 'ganjil'),
(4, '2018 - 2019', 'genap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_absensi`
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
-- Dumping data untuk tabel `t_absensi`
--

INSERT INTO `t_absensi` (`idabsen`, `no_induk`, `stabsen`, `tglabsen`, `terlambat`, `Datang`, `Pulang`, `Alasan`, `GuruPiket`, `kelas`, `id_kelas`) VALUES
(1, '099', 'I', '2019-01-28', 'Ijin', NULL, NULL, NULL, 'Amar', NULL, 1),
(2, '00002', 'S', '2019-01-28', 'Inas', NULL, NULL, NULL, 'Amar', NULL, 2),
(3, '0013224881', 'M', '2019-01-29', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(4, '0013178123', 'A', '2019-01-29', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, '0010864827', 'S', '2019-01-29', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(6, '0013179018', 'M', '2019-01-29', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(7, '0013223598', 'I', '2019-01-29', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(12, '0013224080', 'M', '2019-02-02', NULL, '21:16:58', NULL, NULL, NULL, NULL, 2),
(11, '0013224080', 'M', '2019-02-02', NULL, '21:15:39', NULL, NULL, NULL, NULL, 2),
(8, '0013224881', 'S', '2019-01-30', '-', NULL, NULL, 'Sakit Perut', 'Gery', NULL, 4),
(9, '0013224080', 'A', '2019-02-01', '-', NULL, NULL, 'sakit', 'inas', NULL, 2),
(10, '0010864827', 'M', '2019-02-02', NULL, '20:13:07', NULL, NULL, NULL, NULL, 2),
(13, '0013223802', 'M', '2019-02-04', NULL, '15:15:55', NULL, NULL, NULL, NULL, 2),
(14, '0013178123', 'M', '2019-02-06', NULL, '16:05:51', '16:08:15', NULL, NULL, NULL, 2),
(15, '0013223802', 'M', '2019-02-06', NULL, '16:08:52', NULL, NULL, NULL, NULL, 2),
(16, '0013223802', 'M', '2019-02-06', NULL, '16:23:09', NULL, NULL, NULL, NULL, NULL),
(17, '0010729490', 'M', '2019-02-06', NULL, '16:37:00', '13:32:20', NULL, NULL, NULL, NULL),
(18, '0010729490', 'M', '2019-02-06', NULL, '16:37:13', '13:32:20', NULL, NULL, NULL, NULL),
(19, '0013223952', 'M', '2019-02-06', NULL, '16:38:36', NULL, NULL, NULL, NULL, NULL),
(20, '0013224881', 'M', '2019-02-06', NULL, '16:38:45', NULL, NULL, NULL, NULL, NULL),
(21, '0013224080', 'M', '2019-02-06', NULL, '16:38:58', NULL, NULL, NULL, NULL, NULL),
(22, '0013178123', 'M', '2019-02-07', NULL, '13:02:41', '13:14:48', NULL, NULL, NULL, NULL),
(23, '0013223802', 'M', '2019-02-07', NULL, '13:15:35', '13:33:41', NULL, NULL, NULL, NULL),
(24, '0013179018', 'M', '2019-02-07', NULL, '13:34:08', '13:34:21', NULL, NULL, NULL, NULL),
(25, '0013224881', 'M', '2019-02-07', NULL, '13:39:43', '13:40:09', NULL, NULL, NULL, NULL),
(26, '0013224881', 'M', '2019-02-07', NULL, '13:39:51', '13:40:09', NULL, NULL, NULL, NULL),
(27, '0010881115', 'M', '2019-02-07', NULL, '13:40:35', NULL, NULL, NULL, NULL, NULL),
(28, '0013224080', 'M', '2019-02-07', NULL, '13:40:37', NULL, NULL, NULL, NULL, NULL),
(29, '0010729490', 'M', '2019-02-07', NULL, '13:40:39', NULL, NULL, NULL, NULL, NULL),
(30, '0013223952', 'M', '2019-02-07', NULL, '13:40:41', NULL, NULL, NULL, NULL, NULL),
(31, '0013178123', 'M', '2019-02-07', NULL, '13:40:43', NULL, NULL, NULL, NULL, NULL),
(32, '0013223802', 'M', '2019-02-07', NULL, '13:40:44', NULL, NULL, NULL, NULL, NULL),
(33, '0013179018', 'M', '2019-02-07', NULL, '13:40:46', NULL, NULL, NULL, NULL, NULL),
(34, '0010864827', 'M', '2019-02-07', NULL, '13:40:47', NULL, NULL, NULL, NULL, NULL),
(35, '0013223598', 'M', '2019-02-07', NULL, '13:40:49', NULL, NULL, NULL, NULL, NULL),
(36, '0013224881', 'M', '2019-02-07', NULL, '13:40:52', NULL, NULL, NULL, NULL, NULL),
(37, '0013179018', 'M', '2019-02-07', NULL, '13:41:41', NULL, NULL, NULL, NULL, NULL),
(38, '', 'M', '2019-02-07', NULL, '14:16:39', NULL, NULL, NULL, NULL, NULL),
(39, '', 'M', '2019-02-07', NULL, '14:16:41', NULL, NULL, NULL, NULL, NULL),
(40, '0013224080', 'M', '2019-02-07', NULL, '14:17:04', NULL, NULL, NULL, NULL, NULL),
(41, '0013224080', 'M', '2019-02-07', NULL, '14:17:05', NULL, NULL, NULL, NULL, NULL),
(42, '0013223952', 'M', '2019-02-07', NULL, '14:17:18', NULL, NULL, NULL, NULL, NULL),
(43, '0013223802', 'M', '2019-02-07', NULL, '14:17:57', NULL, NULL, NULL, NULL, NULL),
(44, '0013224881', 'M', '2019-02-07', NULL, '14:18:00', NULL, NULL, NULL, NULL, NULL),
(45, '0013223598', 'M', '2019-02-07', NULL, '14:18:01', NULL, NULL, NULL, NULL, NULL),
(46, '0013178123', 'M', '2019-02-07', NULL, '14:18:03', NULL, NULL, NULL, NULL, NULL),
(47, '0010864827', 'M', '2019-02-07', NULL, '14:18:05', NULL, NULL, NULL, NULL, NULL),
(48, '0010881115', 'M', '2019-02-07', NULL, '14:18:06', NULL, NULL, NULL, NULL, NULL),
(49, '0013179018', 'M', '2019-02-07', NULL, '14:18:08', NULL, NULL, NULL, NULL, NULL),
(50, '0010729490', 'M', '2019-02-07', NULL, '14:18:10', NULL, NULL, NULL, NULL, NULL),
(51, '0010881115', 'M', '2019-02-07', NULL, '14:18:17', NULL, NULL, NULL, NULL, NULL),
(52, '0010864827', 'M', '2019-02-07', NULL, '14:18:18', NULL, NULL, NULL, NULL, NULL),
(53, '0010864827', 'M', '2019-02-07', NULL, '14:18:19', NULL, NULL, NULL, NULL, NULL),
(54, '0010864827', 'M', '2019-02-07', NULL, '14:18:20', NULL, NULL, NULL, NULL, NULL),
(55, '0010864827', 'M', '2019-02-07', NULL, '14:18:21', NULL, NULL, NULL, NULL, NULL),
(56, '0010881115', 'M', '2019-02-07', NULL, '14:18:25', NULL, NULL, NULL, NULL, NULL),
(57, '0010881115', 'M', '2019-02-07', NULL, '14:18:50', NULL, NULL, NULL, NULL, NULL),
(58, '0010864827', 'M', '2019-02-07', NULL, '14:18:55', NULL, NULL, NULL, NULL, NULL),
(59, '0013178123', 'M', '2019-02-07', NULL, '14:22:59', NULL, NULL, NULL, NULL, NULL),
(60, '0013223598', 'M', '2019-02-07', NULL, '14:23:08', NULL, NULL, NULL, NULL, NULL),
(61, '0013223598', 'M', '2019-02-07', NULL, '14:45:47', NULL, NULL, NULL, NULL, NULL),
(62, '0010881115', 'M', '2019-02-08', NULL, '15:00:55', NULL, NULL, NULL, NULL, NULL),
(63, '001317812300132', 'M', '2019-02-08', NULL, '15:19:33', NULL, NULL, NULL, NULL, NULL),
(64, '0010729490', 'M', '2019-02-08', NULL, '15:19:42', NULL, NULL, NULL, NULL, NULL),
(65, '0013178123', 'M', '2019-02-08', NULL, '15:19:52', NULL, NULL, NULL, NULL, NULL),
(66, '0013179018', 'M', '2019-02-08', NULL, '15:20:00', NULL, NULL, NULL, NULL, NULL),
(67, '0013223802', 'M', '2019-02-09', NULL, '12:04:00', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_beasiswa`
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

--
-- Dumping data untuk tabel `t_beasiswa`
--

INSERT INTO `t_beasiswa` (`idbeasiswa`, `nis`, `nama`, `tglsurvey`, `kelas`, `OrTu`, `Alamat`, `Surveyor`, `Kerja`, `Gaji`, `Rumah`, `Bangunan`, `Lantai`, `Ruangan`, `Listrik`, `Motor`, `TV`, `HP`, `Survey`, `Total`, `ThAjar`) VALUES
(512748, '796436', 'Gary Ricardo', '0000-00-00', 'X TKJ 1', 'gary', 'MALANG', '0', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, '2017/2018'),
(512740, '15674', 'Abdullah Perick', '0000-00-00', 'X TKJ1', 'FERY', 'MALANG', '0', 4, 4, 3, 3, 3, 3, 1, 3, 4, 3, 0, 0, '2016/2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_beasiswa1`
--

CREATE TABLE `t_beasiswa1` (
  `idbeasiswa` int(10) NOT NULL,
  `nis` varchar(25) DEFAULT '',
  `nama` varchar(50) DEFAULT NULL,
  `tglsurvey` date DEFAULT '0000-00-00',
  `kelas` varchar(10) DEFAULT NULL,
  `OrTu` varchar(50) DEFAULT NULL,
  `Alamat` varchar(200) DEFAULT NULL,
  `Surveyor` varchar(50) DEFAULT NULL,
  `Kerja` varchar(50) DEFAULT NULL,
  `Gaji` varchar(50) DEFAULT NULL,
  `Rumah` varchar(50) DEFAULT NULL,
  `Bangunan` varchar(50) DEFAULT NULL,
  `Lantai` varchar(50) DEFAULT NULL,
  `Ruangan` varchar(50) DEFAULT NULL,
  `Listrik` varchar(60) DEFAULT NULL,
  `Motor` varchar(50) DEFAULT NULL,
  `TV` varchar(50) DEFAULT NULL,
  `HP` varchar(50) DEFAULT NULL,
  `Survey` varchar(50) DEFAULT NULL,
  `Total` varchar(50) DEFAULT NULL,
  `ThAjar` varchar(10) DEFAULT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_beasiswa1`
--

INSERT INTO `t_beasiswa1` (`idbeasiswa`, `nis`, `nama`, `tglsurvey`, `kelas`, `OrTu`, `Alamat`, `Surveyor`, `Kerja`, `Gaji`, `Rumah`, `Bangunan`, `Lantai`, `Ruangan`, `Listrik`, `Motor`, `TV`, `HP`, `Survey`, `Total`, `ThAjar`, `jenis`) VALUES
(8, '853730', 'Gary Ricardo', '0000-00-00', 'X TKJ 1', 'gary', 'MALANG', '0', 'Bapak', 'Rp. 1.000.000 - Rp. 2.000.000', 'Ikut Keluarga', 'Triplex', 'Ubin / Tegel', 'Tiga ruangan sederhana', '900 KVA', 'Punya, usia > 10 tahun', 'Televisi model lama', 'Punya model lama (bukan android)', '0', '0', '2015/2016', ''),
(9, '745745', 'Dhendy', '0000-00-00', 'XII PS 1', 'DHENDY', 'MALANG', '0', 'Ibu', 'Rp. 2.000.000 - Rp. 3.000.000', 'Sewa', 'setengah tembok', 'Keramik sederhana', 'Tiga ruangan sederhana', '900 KVA', 'Punya, usia <= 10 Tahun dan >= 5 Tahun', 'Televisi LED', 'Punya model android', '0', '0', '2017/2018', ''),
(10, '08435', 'Inas Imahdinar', '0000-00-00', 'XI TKJ 1', 'FERY', 'MALANG', '0', 'Bapak & Ibu', 'Rp. 3.000.000 - Rp. 4.000.000', 'Warisan', 'Tembok', 'Keramik bagus', 'Tiga ruangan rapi dan bersih', '1300 KVA', 'Punya, usia < 5 Tahun', 'Televisi LED Besar', 'Memiliki HP / Tablet', '0', '0', '2016/2017', ''),
(11, '975535', 'Hana Aprilia', '0000-00-00', 'X TKJ1', 'gary', 'MALANG', '0', 'Bapak, Ibu & Kakak', 'Rp. 4.000.000 - Rp. 5.000.000', 'Beli Sendiri', '2 Lantai', 'Granit', 'Tiga ruangan lebih', '2200 KVA.', 'Lebih dari 1 sepeda motor / mobil', 'Mempunyai lebih dari 1 televisi', 'Memiliki HP / Tablet / Laptop', '0', '0', '2016/2017', ''),
(12, '46437', 'Syahrizal Fikri', '0000-00-00', 'XII PS 1', 'FERY', 'MALANG', '0', 'Ibu', 'Rp. 2.000.000 - Rp. 3.000.000', 'Ikut Keluarga', 'Tembok', 'Keramik bagus', 'Tiga ruangan rapi dan bersih', '1300 KVA', 'Punya, usia <= 10 Tahun dan >= 5 Tahun', 'Televisi LED Besar', 'Memiliki HP / Tablet', '0', '0', '2014/2015', ''),
(13, '425535', 'Abdullah Perick', '0000-00-00', 'X TKJ1', 'FERY', 'MALANG', '0', 'Kakak Saudara', 'Rp. 1.000.000 ke bawah', 'Hibah / Suruh merawat rumah milik orang lain', 'Gedeg', 'Tanah', 'Satu ruangan', 'Penggunaan listrik menyambungkan dengan milik keluarga', 'Tidak punya', 'Tidak punya', 'Tidak punya', '0', '0', '2012/2013', ''),
(14, '4546443', 'DDD', '0000-00-00', 'X TKJ 1', 'g', 'MALANG', '0', 'Kakak Saudara', 'Rp. 2.000.000 - Rp. 3.000.000', 'Hibah / Suruh merawat rumah milik orang lain', 'Triplex', 'Ubin / Tegel', 'Tiga ruangan lebih', '900 KVA', 'Punya, usia > 10 tahun', 'Tidak punya', 'Memiliki HP / Tablet', '0', '0', '2016/2017', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_belajar`
--

CREATE TABLE `t_belajar` (
  `idbelajar` int(11) NOT NULL,
  `thajar` varchar(10) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL,
  `pelajaran` varchar(30) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `tglawal` date DEFAULT NULL,
  `tglakhir` date DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_belajar`
--

INSERT INTO `t_belajar` (`idbelajar`, `thajar`, `sem`, `pelajaran`, `nip`, `tglawal`, `tglakhir`, `status`, `ket`) VALUES
(2, '2018/2019', 3, 'Bahasa Jepang 2', '1112', '1111-11-12', '1111-11-11', '', 'b'),
(1, '2018/2019', 3, 'Bahasa Indonesia 1', '1112', '7777-07-07', '7777-07-07', '', 'bb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurnal`
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
-- Dumping data untuk tabel `t_jurnal`
--

INSERT INTO `t_jurnal` (`id_jurnal`, `userid`, `thajar`, `nama`, `hari`, `tgl`, `kelas`, `jam_mulai`, `jam_selesai`, `kegiatan`, `sdh_blm`, `ket`) VALUES
(2, 4, '2018/2017', 'Hana', 'Rabu', '2019-01-30', 'TKJ', '07:00:00', '08:00:00', 'Belajar', 'S', 'Tidak ada.'),
(445, 4, '2017/2018', 'Pedrik', 'Rabu', '2019-01-30', '10 TKJ 1', '19:37:00', '19:55:00', 'Mengaji', 'S', 'Hafalan Surah Yasin'),
(450, 3, '2017/2018', 'Gery', 'Minggu', '2019-02-04', '10 TKJ 1', '23:17:27', '23:17:27', 'Hheheheh', 'B', 'Tugas'),
(449, 1, '2018/2019', 'Pak Imam', 'Minggu', '2019-02-04', '10 TKJ 1', '23:14:37', '23:14:37', 'Belajar move on', 'S', 'Tugas'),
(448, 3, '2018/2019', 'Gery', 'Rabu', '2019-01-30', '10 TKJ 1', '20:58:06', '20:58:06', 'Belajar jaringan', 'B', 'Ada tugas'),
(0, 0, '-- PILIH T', '-- PILIH NAMA GURU --', 'Sabtu', '2019-03-09', '-- PILIH K', '15:40:23', '15:40:23', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kelas`
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
-- Dumping data untuk tabel `t_kelas`
--

INSERT INTO `t_kelas` (`id_kelas`, `kelas`, `nip`, `tingkat`, `program`, `ruang`, `ketua`, `masuk`, `guru_bk`, `th_ajar`, `profil`) VALUES
(1, 'TKJ1', '11233', 'X', 'TKJ', 'TKJ1', 'Rohmad', '', '', '2018/2019', NULL),
(2, 'Perawatan ', '', 'X', 'PS', '', '', '', '', '2018/2019', ''),
(4, 'TKJ', '', 'X', 'TKJ', 'TKJ2', '', '', '', '2018/2019', 'bebe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_member`
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
-- Dumping data untuk tabel `t_member`
--

INSERT INTO `t_member` (`userid`, `nama`, `tgllahir`, `kelamin`, `kerja`, `alamat`, `negara`, `telp`, `sekolah`, `homepage`, `profil`, `username`, `password`, `email`, `pengingat`, `jawaban`, `kategori`, `status`, `tgl_login`, `nis`, `id_nominasi`, `kelas`, `ket`, `stblog`, `kunjungblog`, `point`, `editor`, `stlogin`, `totlogin`, `ip`, `stprofil`, `setfacebook`, `akses`, `pelanggaran`, `mclass`, `bg_cover`, `bg_profile`) VALUES
(1, 'Hana', '1998-04-04', 'P', 'Guru', 'Malang', 'Ind', '085646500831', 'Pandaan', 'smkn2.sch.id', 'Hana Aprilia', 'hanaca', 'hanaca', 'aprili.hanna95@gmail.com', '-', '-', '-', 'G', '2019-01-18 08:23:28', '163140914111051', NULL, '12 IPA 1', '-', '0', 1, 0, 'N', '0', 0, NULL, 'open', NULL, NULL, NULL, 0, 0, 0),
(2, 'Pedrik', '1999-01-30', 'L', 'Guru', 'Lampung', 'Ind', '', '', '', NULL, '', '', '', '', '', '', '', '2019-01-20 05:15:31', '', NULL, '', '', '0', 1, 0, 'N', '0', 0, NULL, 'open', NULL, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mengajar`
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
-- Dumping data untuk tabel `t_mengajar`
--

INSERT INTO `t_mengajar` (`idajar`, `nip`, `nama`, `kelas`, `pel`, `program`, `jampel`, `sem`, `th_ajar`, `agama`, `hari`, `jam_ke`, `jam_pel`, `ruang`, `tgl_update`) VALUES
(1, '16314091', 'gery ricardo', 'XI TKJ 2', 'Bahasa Indonesia', 'TKJ', 3, 3, '2018/2019', NULL, 'senin', 1, 'Jam 7.15 - 9.00', 'TKJ 2', '2019-01-18 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_prakerin`
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

--
-- Dumping data untuk tabel `t_prakerin`
--

INSERT INTO `t_prakerin` (`id_tmp_prakerin`, `nama_prakerin`, `alamat_prakerin`, `telp_prakerin`, `kota_prakerin`, `program`, `pembimbing`, `direktur`, `email`, `website`, `th_ajar`) VALUES
(180, 'ubb ', 'Jalan Idjen 18', '46436436', 'Malang', 'Web', 'qrqrq2', 'Santoso', 'titaniafaudiafifah1998@gmail.com', 'www.bagas31.com', '2018/2019'),
(181, 'ubb web', 'Jalan Soekarno Hatta', '46436436', 'Malang', 'Web', 'Santo', 'afafw', 'soripin18@gmail.com', 'ubb.ac.id', '2018/2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_prakerin_siswa`
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

--
-- Dumping data untuk tabel `t_prakerin_siswa`
--

INSERT INTO `t_prakerin_siswa` (`id_siswa_prakerin`, `id_tmp_prakerin`, `id_pembimbing`, `no_induk`, `nama_prakerin`, `alamat_prakerin`, `pembimbing`, `nip`, `lama_bln`, `tgl_start`, `tgl_akhir`, `tapel`, `kelas`, `prakerinke`, `program`) VALUES
(12, 1321412, 6, '214214', 'UBB', 'JALAN SOEKARNO HATTA', 'RUDI ', '21124213', 5, '2019-01-10', '2019-01-17', '2018/2019', '2', 2, 'WEB'),
(3124, 132141221, 4, '214124', 'UBIG', 'JALAN KALPATARU NO.17', 'SANTOSO', '24215', 5, '2019-01-07', '2019-01-29', '2018/2019', '2', 2, 'WEB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_programahli`
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
-- Dumping data untuk tabel `t_programahli`
--

INSERT INTO `t_programahli` (`idprog`, `program`, `program_lngkap`, `bidangstudi`, `programstudi`, `kompetensi`, `kode`, `th_ajar`, `bidangahli`, `programahli`, `paketahli`, `nama`, `tanggal_update`) VALUES
(1, 'PS', 'PERAWATAN SOSIAL', 'KESEHATAN', NULL, 'PERAWATAN SOSIAL', NULL, '2018/2019', NULL, NULL, NULL, NULL, '2019-01-23 06:25:47'),
(2, 'UPW', 'PARIWISATA', 'SENI, KERAJINAN DAN PARIWISATA', NULL, 'USAHA PERJALANAN PARIWISATA', NULL, '2018/2019', NULL, NULL, NULL, NULL, '2019-01-23 06:28:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_raport2`
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
-- Struktur dari tabel `t_ruang`
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
-- Dumping data untuk tabel `t_ruang`
--

INSERT INTO `t_ruang` (`id`, `kode`, `nama`, `gedung`, `penanggung_jawab`, `jenis`, `profil`, `thajar`) VALUES
(1, 'LabKom1', 'Lab Komputer 1', 'AA', '', '', '', '2018/2019'),
(4, 'LabJar', 'Laboratorium Jaringan', 'C', '', '', '', '2018/2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_siswa`
--

CREATE TABLE `t_siswa` (
  `user_id` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `no_induk` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `sis_email` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nma_pnggln` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `kelamin` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `tmp_lahir` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kwarganegraan` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_anak_ke` tinyint(4) DEFAULT NULL,
  `sis_jml_sdr_kndung` tinyint(4) DEFAULT NULL,
  `sis_jml_sdr_tiri` tinyint(4) DEFAULT NULL,
  `sis_jml_sdr_angkat` tinyint(4) DEFAULT NULL,
  `sis_status` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_bhs_shari_hri` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `alat_transport` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kps` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kip` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nokk` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nik` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_tinggal` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_kec_tngl` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_kab_tngl` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_jrak_ke_skul` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_tggal_dgn` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `telp` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `rumah_kondisi` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `rumah_fisik` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` varchar(120) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_rt` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_rw` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_lurah` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_camat` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_kodya` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_prop` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_tmt_dri` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `sttb` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sttb_tgl` date DEFAULT NULL,
  `nem` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `nem_tgl` date DEFAULT NULL,
  `sis_lma_blajar` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_no_psrta_unas` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_kelas` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_bdng_khlian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_komp_khlian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_tgl` date DEFAULT NULL,
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
  `sis_gol_darah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_penyakit` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kel_jasmani` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_tinggi_berat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_ksenian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_olahrga` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kmasyaraktn` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_organisasi` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_hobby` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `prestasi` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_lain2` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `no_daftar` int(11) NOT NULL,
  `th_ajar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `kode_prog` varchar(3) COLLATE latin1_general_ci DEFAULT NULL,
  `no_urut` tinyint(2) DEFAULT NULL,
  `ind_prog` int(4) DEFAULT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  `sis_pndahn_seklah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndahn_alasan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_dtrm_prog_khlian` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_cita2` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_kks` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_beasiswa` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndah_seklah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_pndah_alsn` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_luls_thn` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
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
  `n_unas` float DEFAULT NULL,
  `no_unas` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `n_raport` float DEFAULT NULL,
  `n_test` float DEFAULT NULL,
  `n_minat` float DEFAULT NULL,
  `n_akhir` float DEFAULT NULL,
  `p_unas` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `p_raport` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `p_test` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `p_minat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `p_akhir` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_luls_ijazah` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_luls_skhu` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `th_daftar` varchar(4) COLLATE latin1_general_ci DEFAULT NULL,
  `petugas` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `foto_daftar` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `sis_nisn` varchar(30) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `t_siswa`
--

INSERT INTO `t_siswa` (`user_id`, `no_induk`, `sis_email`, `nama`, `sis_nma_pnggln`, `kelamin`, `tmp_lahir`, `tgl_lahir`, `agama`, `sis_kwarganegraan`, `sis_anak_ke`, `sis_jml_sdr_kndung`, `sis_jml_sdr_tiri`, `sis_jml_sdr_angkat`, `sis_status`, `sis_bhs_shari_hri`, `alat_transport`, `sis_kps`, `sis_kip`, `sis_nokk`, `sis_nik`, `alamat_tinggal`, `alamat_kec_tngl`, `alamat_kab_tngl`, `sis_jrak_ke_skul`, `sis_tggal_dgn`, `telp`, `rumah_kondisi`, `rumah_fisik`, `alamat`, `alamat_rt`, `alamat_rw`, `alamat_lurah`, `alamat_camat`, `alamat_kodya`, `alamat_prop`, `sis_tmt_dri`, `sttb`, `sttb_tgl`, `nem`, `nem_tgl`, `sis_lma_blajar`, `sis_no_psrta_unas`, `sis_dtrm_kelas`, `sis_dtrm_bdng_khlian`, `sis_dtrm_komp_khlian`, `sis_dtrm_tgl`, `ayah`, `ayah_ktp`, `ayh_tmpt_lhir`, `ayh_tgl_lhir`, `ayh_agama`, `ayh_kwarganegraan`, `ayh_pndidikan`, `ayh_pkrjaan`, `ayh_pnghasilan_bln`, `ayh_almat`, `ayh_tlp`, `ayh_status`, `ibu`, `ibu_ktp`, `ibu_tmpt_lhir`, `ibu_tgl_lhir`, `ibu_agama`, `ibu_kwarganegraan`, `ibu_pndidikan`, `ibu_pkrjaan`, `ibu_pnghasilan_bln`, `ibu_almat`, `ibu_tlp`, `ibu_status`, `wali`, `wali_ktp`, `wali_tmpt_lhir`, `wali_tgl_lhir`, `wali_agama`, `wali_kwarganegraan`, `wali_pndidikan`, `wali_pkrjaan`, `wali_pnghasilan_bln`, `wali_almat`, `wali_tlp`, `hub_wali_siswa`, `sis_gol_darah`, `sis_penyakit`, `sis_kel_jasmani`, `sis_tinggi_berat`, `sis_ksenian`, `sis_olahrga`, `sis_kmasyaraktn`, `sis_organisasi`, `sis_hobby`, `prestasi`, `sis_lain2`, `no_daftar`, `th_ajar`, `kode_prog`, `no_urut`, `ind_prog`, `kelas`, `tgl_input`, `sis_pndahn_seklah`, `sis_pndahn_alasan`, `sis_dtrm_prog_khlian`, `sis_cita2`, `sis_kks`, `sis_beasiswa`, `sis_pndah_seklah`, `sis_pndah_alsn`, `sis_luls_thn`, `sis_lnjut_ke`, `sis_krja_tgl`, `sis_krja_tmpt`, `sis_krja_pnghsilan`, `ijz_fc_lg`, `ijz_fc_bs`, `skhun_fc_lg`, `skhun_fc_bs`, `kk`, `akte`, `alat_tansport`, `n_unas`, `no_unas`, `n_raport`, `n_test`, `n_minat`, `n_akhir`, `p_unas`, `p_raport`, `p_test`, `p_minat`, `p_akhir`, `sis_luls_ijazah`, `sis_luls_skhu`, `th_daftar`, `petugas`, `foto_daftar`, `sis_nisn`) VALUES
('ID07020801', '0010864827', 'ABDULLAH@GMAIL.COM', 'ABDULLAH PEDRICK HARYANTO PUTRA', 'PEDRICK', 'L', 'LAMPUNG', '1998-08-18', 'ISLAM', '', 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 6102247, '2018/2019', '0', 0, 0, '0', '0000-00-00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', '0', '0', 0, 0, 0, 0, 0, 0, '0', 0, '0', 0, 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 'french-crop.jpg', ''),
('ID07020804', '0013223802', 'HANA@GMAIL.COM', 'HANA APRILA', 'HANA', 'L', 'PANDAAN', '1998-02-11', 'ISLAM', 'INDONESIA', 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 6102249, '2019/2020', '0', 0, 0, '0', '0000-00-00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', '0', '0', 0, 0, 0, 0, 0, 0, '0', 0, '0', 0, 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 'guru.jpg', ''),
('ID07020806', '0013223952', 'HHHH', 'MAULIDINA HANAFI', 'DINUNG', 'P', 'TULUNGAGUNG', '1998-02-22', '', '', 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 6102250, '2017/2018', '0', 0, 0, '0', '0000-00-00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', '0', '0', 0, 0, 0, 0, 0, 0, '0', 0, '0', 0, 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 'siswa.jpg', ''),
('ID07020808', '0013178123', '', 'SYAHRIZAL FIKRI', '', 'L', 'TUBAN', '1997-08-08', '', '', 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 6102251, '2016/2017', '0', 0, 0, '0', '0000-00-00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', '0', '0', 0, 0, 0, 0, 0, 0, '0', 0, '0', 0, 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 'admin2.jpg', ''),
('ID07020810', '0013223598', '', 'INAS IMADHINAR', '', 'L', 'MALANG', '1998-08-08', '', '', 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 6102252, '2018/2019', '0', 0, 0, '0', '0000-00-00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', '0', '0', 0, 0, 0, 0, 0, 0, '0', 0, '0', 0, 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 'anonim.jpg', ''),
('ID07020811', '0013224881', '', 'Mariadi nb', '', 'L', 'MALANG', '1997-07-07', '', '', 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 6102253, '2018/2019', '0', 0, 0, '0', '0000-00-00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', '0', '0', 0, 0, 0, 0, 0, 0, '0', 0, '0', 0, 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 'siswa.jpg', ''),
('ID07020812', '0013224080', '', 'TRILOKA WULANDARI', 'LOKA', 'P', 'TULUNGAGUNG', '1998-03-31', '', '', 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 6102254, '2016/2017', '0', 0, 0, '0', '0000-00-00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', '0', '0', 0, 0, 0, 0, 0, 0, '0', 0, '0', 0, 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 'guru.jpg', ''),
('ID07020814', '0010729490', '', 'AMMA', 'AMMA', 'P', 'MALANG', '1997-07-07', '', '', 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 6102255, '2015/2016', '0', 0, 0, '0', '0000-00-00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0000-00-00', '0', '0', 0, 0, 0, 0, 0, 0, '0', 0, '0', 0, 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 'guru.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_siswadaftar`
--

CREATE TABLE `t_siswadaftar` (
  `user_id` varchar(25) NOT NULL,
  `no_induk` varchar(25) NOT NULL,
  `sis_email` varchar(25) DEFAULT NULL,
  `kelamin` char(1) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `tmp_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `alamat_camat` varchar(25) DEFAULT NULL,
  `alamat_kodya` varchar(25) DEFAULT NULL,
  `ayh_tlp` varchar(25) DEFAULT NULL,
  `agama` varchar(25) DEFAULT NULL,
  `sis_no_psrta_unas` varchar(25) DEFAULT NULL,
  `sis_tmt_dri` varchar(25) DEFAULT NULL,
  `sis_ksenian` varchar(25) DEFAULT NULL,
  `n_unas` varchar(25) DEFAULT NULL,
  `n_raport` varchar(25) DEFAULT NULL,
  `sis_dtrm_prog_khlian` varchar(25) DEFAULT NULL,
  `th_ajar` varchar(10) DEFAULT NULL,
  `no_daftar` int(11) NOT NULL,
  `n_test` varchar(25) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_siswadaftar`
--

INSERT INTO `t_siswadaftar` (`user_id`, `no_induk`, `sis_email`, `kelamin`, `nama`, `tmp_lahir`, `tgl_lahir`, `alamat`, `alamat_camat`, `alamat_kodya`, `ayh_tlp`, `agama`, `sis_no_psrta_unas`, `sis_tmt_dri`, `sis_ksenian`, `n_unas`, `n_raport`, `sis_dtrm_prog_khlian`, `th_ajar`, `no_daftar`, `n_test`, `status`) VALUES
('ID12021607', '456789', 'abdullah@gmail.com', 'L', 'Abdullah Pedrick', 'LAMPUNG', '1998-08-18', 'Lampung BTN D3 NO 05', 'way pengubuan', 'lampung tengah', '4314', 'ISLAM', '87666666', 'SMP IT ', '', '50', '77', 'Teknik Komputer Jaringan', '2018/2019', 23, '66', 'Diterima'),
('ID12021608', '523589', 'GERY@GMAIL.COM', 'L', 'Gary Ricardo', 'BUKIT', '1111-11-11', 'Bukit Tinggi', 'BUKIT', 'bukit', '555545', 'ISLAM', '87666666', 'SMP IT BUKIT', '', '53', '67', 'Jasa Boga', '2018/2019', 24, '2', 'Tidak Diterima'),
('ID14021909', '74735734', 'abdullah@gmail.com', 'P', 'Hana Aprilia', 'BUKIT', '1111-11-11', 'Lampung', 'way pengubuan', 'lampung', '086436', 'KATOLIK', '09997', 'SMP IT BUKIT', '', '44', '66', 'Perawatan Sosial', '2018/2019', 27, '10', 'Tidak Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sis_thajar`
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
-- Dumping data untuk tabel `t_sis_thajar`
--

INSERT INTO `t_sis_thajar` (`id_sis_th`, `no_urut`, `no_induk`, `nama`, `kelas`, `prog`, `th_ajar`, `kelamin`, `agama`, `Inklusi`) VALUES
(37409, 1, '123221', 'MUHAMMAD FIKRI', 'X TKJ 1', NULL, '2016/2017', 'L', NULL, NULL),
(37410, 47, '15474', 'MUHAMMAD ALIF', 'XI TKJ 1', NULL, '2017/2018', 'L', NULL, NULL),
(37411, 96, '5517', 'MUHAMMAD AGRA', 'XII TKJ 1', NULL, '2018/2019', 'L', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_staf`
--

CREATE TABLE `t_staf` (
  `user_id` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nip` varchar(50) NOT NULL,
  `kelamin` varchar(1) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tugas` varchar(30) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pelajaran` varchar(200) DEFAULT NULL,
  `tgl_lahir` varchar(50) DEFAULT NULL,
  `tmp_lahir` varchar(20) DEFAULT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `pangkat` varchar(50) DEFAULT NULL,
  `kategori` char(1) DEFAULT NULL,
  `profilstaf` longtext,
  `th_ajar` varchar(10) DEFAULT NULL,
  `no_induk_baru` varchar(30) DEFAULT NULL,
  `depan_gelar` varchar(10) DEFAULT NULL,
  `belakang_gelar` varchar(10) DEFAULT NULL,
  `nama_ibu_kandung` varchar(30) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `golongan_darah` varchar(2) DEFAULT NULL,
  `kelurahan` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `daerah` varchar(20) DEFAULT NULL,
  `status_nikah` varchar(10) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `jenis_pegawai` varchar(10) DEFAULT NULL,
  `sertifikasi_guru` varchar(10) DEFAULT NULL,
  `tmt_pns` date DEFAULT NULL,
  `akses` int(11) DEFAULT NULL,
  `arsip` varchar(10) DEFAULT NULL,
  `tugas_tambahan` varchar(50) DEFAULT NULL,
  `pangkat_pns` varchar(50) DEFAULT NULL,
  `jabatan_pns` varchar(50) DEFAULT NULL,
  `golongan_pns` varchar(50) DEFAULT NULL,
  `pendidikan_terahir` varchar(50) DEFAULT NULL,
  `prog_diampu` varchar(50) DEFAULT NULL,
  `masakerja_th` tinyint(4) DEFAULT NULL,
  `masakerja_bl` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_staf`
--

INSERT INTO `t_staf` (`user_id`, `nama`, `nip`, `kelamin`, `alamat`, `tugas`, `telp`, `hp`, `email`, `pelajaran`, `tgl_lahir`, `tmp_lahir`, `kode`, `pangkat`, `kategori`, `profilstaf`, `th_ajar`, `no_induk_baru`, `depan_gelar`, `belakang_gelar`, `nama_ibu_kandung`, `kode_pos`, `golongan_darah`, `kelurahan`, `kecamatan`, `provinsi`, `daerah`, `status_nikah`, `tanggal_masuk`, `jenis_pegawai`, `sertifikasi_guru`, `tmt_pns`, `akses`, `arsip`, `tugas_tambahan`, `pangkat_pns`, `jabatan_pns`, `golongan_pns`, `pendidikan_terahir`, `prog_diampu`, `masakerja_th`, `masakerja_bl`) VALUES
('2341', 'gary ganteng', '11233', 'L', '', '', '', '', '', 'Bahasa Indonesia', '', '', '', 'PEGAWAI', '', '', '2018/2019', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_thajar`
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
-- Dumping data untuk tabel `t_thajar`
--

INSERT INTO `t_thajar` (`idthajar`, `thajar`, `KepSekNama`, `KepSekPangkat`, `KepSekNip`, `TglRaportGanjil`, `TglRaportGenap`, `TglUKK`, `Catatan UKK`, `Tahun`, `TglPKG`, `JenisUKK`) VALUES
(1, '2018/2019', 'Pak Imam', 'Kepala Sekolah', '4', '2018-06-05', '2019-06-11', '2019-06-01', NULL, 1, '2019-01-23', NULL),
(2, '2017/2018', 'Pak Imam', 'Kepala Sekolah', '4', '2019-01-25', '2019-01-25', '2019-01-25', NULL, NULL, '2019-01-25', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` varchar(50) NOT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `NIK` varchar(50) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `passwordHint` text,
  `idJabatan` varchar(50) DEFAULT NULL,
  `idLevel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `nis`, `NIK`, `username`, `password`, `passwordHint`, `idJabatan`, `idLevel`) VALUES
('AKUN-1177642', NULL, '1177642', 'BAMBANG', 'BAMBANG', 'BAMBANG', 'JAB-guru', '2'),
('AKUN-123231', NULL, '123231', 'admin', '~#-*+', 'admin', 'JAB-admin', '1'),
('AKUN-123234421', '123234421', NULL, 'arvin', '~{:*+', 'arvin', 'JAB-siswa', '3'),
('AKUN-1234', NULL, '1234', 'guru', '^;{;', 'guru', 'JAB-guru', '2'),
('AKUN-1818051051', '1824051237', NULL, 'bagus', '!~^;[', 'bagus', 'JAB-siswa', '3'),
('AKUN-1824050855', '1824050855', NULL, 'faisal', '%~*[~_', 'faisal', 'JAB-siswa', '3'),
('AKUN-2221322', '2221322', NULL, 'dani', '#~+*', 'dani', 'JAB-siswa', '3'),
('AKUN-22993481', '22993481', NULL, 'fadila', '%~#*_~', 'fadila', 'JAB-siswa', '3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `nis` (`nis`),
  ADD KEY `Id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`idBeasiswa`),
  ADD KEY `idBea` (`idBea`);

--
-- Indeks untuk tabel `detail_pembagian_kelas`
--
ALTER TABLE `detail_pembagian_kelas`
  ADD PRIMARY KEY (`id_pembagian`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `filelampiran`
--
ALTER TABLE `filelampiran`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `filelampiran_beasiswa`
--
ALTER TABLE `filelampiran_beasiswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_Hari`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idJabatan`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_ruangan` (`id_ruangan`),
  ADD KEY `id_Hari` (`id_Hari`),
  ADD KEY `id_pembagian` (`id_kelas`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`idJurusan`,`kodeJurusan`) USING BTREE,
  ADD KEY `kodeJurusan` (`kodeJurusan`);

--
-- Indeks untuk tabel `kegemaran`
--
ALTER TABLE `kegemaran`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_BS` (`kodeJurusan`),
  ADD KEY `kodeJurusan` (`kodeJurusan`),
  ADD KEY `kodeJurusan_2` (`kodeJurusan`);

--
-- Indeks untuk tabel `ketakhirsiswa`
--
ALTER TABLE `ketakhirsiswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `ketayah`
--
ALTER TABLE `ketayah`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `ketibu`
--
ALTER TABLE `ketibu`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `ketkesehatan`
--
ALTER TABLE `ketkesehatan`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `ketkompetensi`
--
ALTER TABLE `ketkompetensi`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `ketlulus`
--
ALTER TABLE `ketlulus`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `ketpindahan`
--
ALTER TABLE `ketpindahan`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `kettmpttinggal`
--
ALTER TABLE `kettmpttinggal`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `ketwali`
--
ALTER TABLE `ketwali`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `kuotajurusan`
--
ALTER TABLE `kuotajurusan`
  ADD PRIMARY KEY (`idKuota`),
  ADD KEY `kodeJurusan` (`kodeJurusan`);

--
-- Indeks untuk tabel `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`idLevel`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idLog`);

--
-- Indeks untuk tabel `masterbsw`
--
ALTER TABLE `masterbsw`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `notifikasi_beasiswa`
--
ALTER TABLE `notifikasi_beasiswa`
  ADD PRIMARY KEY (`idNotif`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`idPendaftaran`,`nisn`) USING BTREE,
  ADD KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `pendataan`
--
ALTER TABLE `pendataan`
  ADD PRIMARY KEY (`idPendataan`,`nisn`) USING BTREE,
  ADD KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`idBea`);

--
-- Indeks untuk tabel `penilaian_beasiswa`
--
ALTER TABLE `penilaian_beasiswa`
  ADD PRIMARY KEY (`idPenilaianBea`);

--
-- Indeks untuk tabel `periode_beasiswa`
--
ALTER TABLE `periode_beasiswa`
  ADD PRIMARY KEY (`idPeriode`);

--
-- Indeks untuk tabel `rpendidikan`
--
ALTER TABLE `rpendidikan`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`,`nisn`) USING BTREE,
  ADD KEY `kodeJurusan` (`kodeJurusan`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `thnajaran`
--
ALTER TABLE `thnajaran`
  ADD PRIMARY KEY (`idThnAjaran`);

--
-- Indeks untuk tabel `t_absensi`
--
ALTER TABLE `t_absensi`
  ADD PRIMARY KEY (`idabsen`),
  ADD KEY `no_induk` (`no_induk`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `t_beasiswa`
--
ALTER TABLE `t_beasiswa`
  ADD PRIMARY KEY (`idbeasiswa`);

--
-- Indeks untuk tabel `t_beasiswa1`
--
ALTER TABLE `t_beasiswa1`
  ADD PRIMARY KEY (`idbeasiswa`);

--
-- Indeks untuk tabel `t_belajar`
--
ALTER TABLE `t_belajar`
  ADD PRIMARY KEY (`idbelajar`);

--
-- Indeks untuk tabel `t_jurnal`
--
ALTER TABLE `t_jurnal`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD KEY `t_jurnal_nama_fk` (`nama`),
  ADD KEY `t_jurnal_userid_fk` (`userid`),
  ADD KEY `t_jurnal_thajar_fk` (`thajar`),
  ADD KEY `t_jurnal_kelas_fk` (`kelas`);

--
-- Indeks untuk tabel `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `t_member`
--
ALTER TABLE `t_member`
  ADD PRIMARY KEY (`userid`);

--
-- Indeks untuk tabel `t_mengajar`
--
ALTER TABLE `t_mengajar`
  ADD PRIMARY KEY (`idajar`);

--
-- Indeks untuk tabel `t_prakerin`
--
ALTER TABLE `t_prakerin`
  ADD PRIMARY KEY (`id_tmp_prakerin`);

--
-- Indeks untuk tabel `t_prakerin_siswa`
--
ALTER TABLE `t_prakerin_siswa`
  ADD PRIMARY KEY (`id_siswa_prakerin`);

--
-- Indeks untuk tabel `t_programahli`
--
ALTER TABLE `t_programahli`
  ADD PRIMARY KEY (`idprog`);

--
-- Indeks untuk tabel `t_raport2`
--
ALTER TABLE `t_raport2`
  ADD PRIMARY KEY (`id_raport2`);

--
-- Indeks untuk tabel `t_ruang`
--
ALTER TABLE `t_ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_siswa`
--
ALTER TABLE `t_siswa`
  ADD PRIMARY KEY (`no_induk`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `no_daftar` (`no_daftar`);

--
-- Indeks untuk tabel `t_siswadaftar`
--
ALTER TABLE `t_siswadaftar`
  ADD PRIMARY KEY (`no_induk`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `no_daftar` (`no_daftar`);

--
-- Indeks untuk tabel `t_sis_thajar`
--
ALTER TABLE `t_sis_thajar`
  ADD PRIMARY KEY (`id_sis_th`);

--
-- Indeks untuk tabel `t_staf`
--
ALTER TABLE `t_staf`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `t_thajar`
--
ALTER TABLE `t_thajar`
  ADD PRIMARY KEY (`idthajar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `nis` (`nis`),
  ADD KEY `NIK` (`NIK`),
  ADD KEY `idJabatan` (`idJabatan`),
  ADD KEY `idLevel` (`idLevel`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `t_beasiswa`
--
ALTER TABLE `t_beasiswa`
  MODIFY `idbeasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=512750;

--
-- AUTO_INCREMENT untuk tabel `t_beasiswa1`
--
ALTER TABLE `t_beasiswa1`
  MODIFY `idbeasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `t_prakerin`
--
ALTER TABLE `t_prakerin`
  MODIFY `id_tmp_prakerin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT untuk tabel `t_raport2`
--
ALTER TABLE `t_raport2`
  MODIFY `id_raport2` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27018;

--
-- AUTO_INCREMENT untuk tabel `t_siswa`
--
ALTER TABLE `t_siswa`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6102257;

--
-- AUTO_INCREMENT untuk tabel `t_siswadaftar`
--
ALTER TABLE `t_siswadaftar`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
