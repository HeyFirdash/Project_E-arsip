-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2025 at 02:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_arsip_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `klip_arsip`
--

CREATE TABLE `klip_arsip` (
  `id_klip` int NOT NULL,
  `nomor_surat` varchar(100) NOT NULL,
  `uraian` text NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_lembar` int NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `klip_arsip`
--

INSERT INTO `klip_arsip` (`id_klip`, `nomor_surat`, `uraian`, `tanggal`, `jumlah_lembar`, `keterangan`) VALUES
(4, '000.1.2.3/924-1/DTK/VII/2024', 'Surat tugas membantu ketua bidang SDM PON XXI dalam melakukan identifikasi dan pemetaan jenis belanja barang atau jasa yang menggunakan pihak ketiga pada kegiatan bidang SDM PON XXI.', '2024-07-01', 2, ''),
(5, '000.1.2.3/934-1/DTK/VII/2024', 'Surat tugas menghadiri rapat paripurna masa persidangan III tahun sidang V 2023-2024 yang dilaksanakan di rapat paripurna DPRD Provsu Jl. Imam Bonjol.', '2024-07-02', 1, ''),
(6, '000.1.2.3/941-1/DTK/VII/2024', 'Surat tugas menghadiri rapat coaching clinic penelaahan penyampaian usulan penginputan data dan verifikasi usulan RKBMD pengadaan, pemeliharaan, pemanfaatan, pemindahtanganan dan penghapusan TA.2025.', '2024-07-03', 1, ''),
(7, '000.1.2.3/966-1/DTK/VII/2024', 'Surat tugas konsolidasi penyusunan perubahan RKPD Provsu tahun 2024 yang dilaksanakan pada tanggal 4 Juli 2024.', '2024-07-03', 1, ''),
(8, '000.1.2.3/947-1/DTK/VII/2024', 'Surat tugas menghadiri undangan Dharma Wanita Persatuan Dinas Ketenagakerjaan Provsu pada acara pertemuan rutin.', '2024-07-04', 1, ''),
(9, '000.1.2.3/948-1/DTK/VII/2024', 'Surat tugas menghadiri rapat tim pengendali inflasi daerah (TPID) provinsi Sumatera Utara yang dilaksanakan di ruang rapat lantai II kantor Bank Indonesia Perwakilan Provsu.', '2024-07-04', 1, ''),
(10, '000.1.2.3/949-1/DTK/VII/2024', 'Surat tugas menghadiri rapat koordinasi evaluasi penyerapan anggaran semester I tahun 2024.', '2024-07-05', 1, ''),
(11, '000.1.2.3/950-1/DTK/VII/2024', 'Surat tugas mengikuti rapat kerja teknis bidang ketenagakerjaan provinsi Sumatera Utara.', '2024-07-06', 2, ''),
(12, '000.1.2.3/951-1/DTK/VII/2024', 'Surat tugas menghadiri sosialisasi peraturan pemerintah nomor 35 tahun 2021 tentang PKWT, alih daya, waktu kerja, waktu istirahat dan PHK.', '2024-07-06', 1, ''),
(13, '000.1.2.3/952-1/DTK/VII/2024', 'Surat tugas menghadiri pembukaan pelatihan berbasis kompetensi tahun 2024 di BLK Provsu.', '2024-07-07', 1, ''),
(14, '000.1.2.3/953-1/DTK/VII/2024', 'Surat tugas menghadiri rapat koordinasi persiapan HUT RI ke-79 tahun 2024 tingkat provinsi Sumatera Utara.', '2024-07-08', 1, ''),
(15, '000.1.2.3/954-1/DTK/VII/2024', 'Surat tugas mengikuti rakor pengawasan penyelenggaraan pemerintah daerah oleh inspektorat jenderal Kemendagri.', '2024-07-09', 2, ''),
(16, '000.1.2.3/955-1/DTK/VII/2024', 'Surat tugas menghadiri rapat monitoring dan evaluasi program kerja organisasi perangkat daerah semester I tahun 2024.', '2024-07-09', 1, ''),
(17, '000.1.2.3/956-1/DTK/VII/2024', 'Surat tugas menghadiri rapat pembahasan rancangan peraturan daerah tentang perubahan APBD TA.2024.', '2024-07-10', 1, ''),
(18, '000.1.2.3/957-1/DTK/VII/2024', 'Surat tugas menghadiri acara sosialisasi program jaminan sosial ketenagakerjaan bagi pekerja rentan di Sumatera Utara.', '2024-07-11', 1, ''),
(19, '000.1.2.3/958-1/DTK/VII/2024', 'Surat tugas menghadiri rapat panitia khusus DPRD provinsi Sumatera Utara.', '2024-07-12', 1, ''),
(20, '000.1.2.3/959-1/DTK/VII/2024', 'Surat tugas menghadiri rapat evaluasi kinerja pelayanan publik bidang ketenagakerjaan.', '2024-07-12', 1, ''),
(21, '000.1.2.3/960-1/DTK/VII/2024', 'Surat tugas menghadiri rapat koordinasi pengendalian inflasi menjelang hari raya Idul Adha.', '2024-07-13', 1, ''),
(22, '000.1.2.3/961-1/DTK/VII/2024', 'Surat tugas menghadiri pembukaan bimbingan teknis pengelolaan keuangan daerah tahun 2024.', '2024-07-14', 1, ''),
(24, '000.1.2.3/924-1/DTK/VII/2024', 'Permohonan Pindah Tugas PNS	', '2024-07-14', 1, ''),
(25, '000.1.2.3/925-1/DTK/VII/2024', 'Surat perintah tugas menghadiri rapat di kantor Gubernur Sumatera Utara.', '2024-07-19', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$LtDUjC9xBNicSVYSBd2mE.IeAzWAwulJaVdqFGiYCz9kisCBx.fzu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klip_arsip`
--
ALTER TABLE `klip_arsip`
  ADD PRIMARY KEY (`id_klip`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klip_arsip`
--
ALTER TABLE `klip_arsip`
  MODIFY `id_klip` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
