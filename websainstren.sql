-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2026 at 10:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websainstren`
--

-- --------------------------------------------------------

--
-- Table structure for table `absens`
--

CREATE TABLE `absens` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_02_013710_add_is_admin_to_users_table', 1),
(5, '2024_08_27_055041_create_pretests_table', 1),
(6, '2024_08_29_121654_create_absens_table', 1),
(7, '2024_09_22_110217_create_posttests_table', 1),
(8, '2026_04_27_101746_create_prizes_table', 2),
(9, '2026_04_27_102512_add_week_to_pretests_table', 3),
(10, '2026_04_27_104015_add_week_and_total_score_to_pretests_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posttests`
--

CREATE TABLE `posttests` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelatihan_kebencanaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bencana_alam_adalah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banjir_adalah_air` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curah_hujan_tinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upaya_untuk_mencegah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciri_ciri_daerah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agar_resiko_bencana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gempa_adalah_peristiwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saat_terjadi_gempa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindakan_pencegahan_gempa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebakaran_adalah_reaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mematikan_jaringan_listrik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upaya_mencegah_kebakaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyebab_kebakaran_dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apakah_anda_akan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apakah_ditempat_anda_tersedia_peta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apakah_ditempat_anda_tersedia_kotak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apakah_ditempat_anda_tersedia_alat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apakah_anda_mempersiapkan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apakah_di_tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apakah_anda_memperoleh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pernakah_anda_mengikuti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasokan_makanan_dan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baterai_tambahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radio_bertenaga_baterai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senter_yang_dioperasikan_baterai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peralatan_p3k` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peluit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sepatu_bot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jas_hujan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uang_untuk_keadaan_darurat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mengetahui_ancaman_bencana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mengetahui_bagian_mana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mengetahui_cara_melindungi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mengetahui_sistem_peringatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mengetahui_lokasi_evakuasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mengadakan_pertemuan_untuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memiliki_rencana_tentang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mempraktikkan_rencana_tanya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menyesuaikan_rencana_sesuai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `membahas_rencana_komunikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mencatat_nomor_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuliskan_nomor_penting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuliskan_nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `score_pengetahuan` int NOT NULL,
  `grade_pengetahuan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_kesiapsiagaan` int NOT NULL,
  `grade_kesiapsiagaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pretests`
--

CREATE TABLE `pretests` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umur` int DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelatihan_kebencanaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bencana_alam_adalah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banjir_adalah_air` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curah_hujan_tinggi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upaya_untuk_mencegah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciri_ciri_daerah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agar_resiko_bencana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gempa_adalah_peristiwa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saat_terjadi_gempa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tindakan_pencegahan_gempa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kebakaran_adalah_reaksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mematikan_jaringan_listrik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upaya_mencegah_kebakaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyebab_kebakaran_dari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apakah_anda_akan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apakah_ditempat_anda_tersedia_peta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apakah_ditempat_anda_tersedia_kotak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apakah_ditempat_anda_tersedia_alat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apakah_anda_mempersiapkan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apakah_di_tempat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apakah_anda_memperoleh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pernakah_anda_mengikuti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasokan_makanan_dan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baterai_tambahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radio_bertenaga_baterai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senter_yang_dioperasikan_baterai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peralatan_p3k` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peluit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sepatu_bot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jas_hujan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uang_untuk_keadaan_darurat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mengetahui_ancaman_bencana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mengetahui_bagian_mana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mengetahui_cara_melindungi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mengetahui_sistem_peringatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mengetahui_lokasi_evakuasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mengadakan_pertemuan_untuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memiliki_rencana_tentang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mempraktikkan_rencana_tanya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menyesuaikan_rencana_sesuai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membahas_rencana_komunikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mencatat_nomor_anggota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menuliskan_nomor_penting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menuliskan_nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date NOT NULL,
  `week` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu` time NOT NULL,
  `score_pengetahuan` int NOT NULL,
  `grade_pengetahuan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_kesiapsiagaan` int NOT NULL,
  `grade_kesiapsiagaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_score` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pretests`
--

INSERT INTO `pretests` (`id`, `user_id`, `nama`, `umur`, `jenis_kelamin`, `pendidikan`, `pelatihan_kebencanaan`, `bencana_alam_adalah`, `banjir_adalah_air`, `curah_hujan_tinggi`, `upaya_untuk_mencegah`, `ciri_ciri_daerah`, `agar_resiko_bencana`, `gempa_adalah_peristiwa`, `saat_terjadi_gempa`, `tindakan_pencegahan_gempa`, `kebakaran_adalah_reaksi`, `mematikan_jaringan_listrik`, `upaya_mencegah_kebakaran`, `penyebab_kebakaran_dari`, `apakah_anda_akan`, `apakah_ditempat_anda_tersedia_peta`, `apakah_ditempat_anda_tersedia_kotak`, `apakah_ditempat_anda_tersedia_alat`, `apakah_anda_mempersiapkan`, `apakah_di_tempat`, `apakah_anda_memperoleh`, `pernakah_anda_mengikuti`, `pasokan_makanan_dan`, `baterai_tambahan`, `radio_bertenaga_baterai`, `senter_yang_dioperasikan_baterai`, `peralatan_p3k`, `peluit`, `sepatu_bot`, `jas_hujan`, `uang_untuk_keadaan_darurat`, `mengetahui_ancaman_bencana`, `mengetahui_bagian_mana`, `mengetahui_cara_melindungi`, `mengetahui_sistem_peringatan`, `mengetahui_lokasi_evakuasi`, `mengadakan_pertemuan_untuk`, `memiliki_rencana_tentang`, `mempraktikkan_rencana_tanya`, `menyesuaikan_rencana_sesuai`, `membahas_rencana_komunikasi`, `mencatat_nomor_anggota`, `menuliskan_nomor_penting`, `menuliskan_nomor_telepon`, `tanggal`, `week`, `waktu`, `score_pengetahuan`, `grade_pengetahuan`, `score_kesiapsiagaan`, `grade_kesiapsiagaan`, `total_score`) VALUES
(2, 2, 'Herman', 61, 'Laki-laki', 'D3', 'Pernah', 'Salah', 'Benar', 'Benar', 'Benar', 'Benar', 'Salah', 'Benar', 'Salah', 'Benar', 'Salah', 'Salah', 'Salah', 'Benar', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Belum Ada', '25%', 'Belum Ada', '25%', 'Belum Ada', '100%', 'Belum Ada', '25%', 'Belum Ada', '25%', '100%', '25%', '50%', '75%', '25%', 'Belum Ada', '50%', 'Belum Ada', '75%', 'Belum Ada', '75%', '100%', '2026-04-27', '2026-18', '15:41:18', 12, 'Sedang', 14, 'Sedang', 26),
(3, 3, 'Yanto', 33, 'Laki-laki', 'D3', 'Belum Pernah', 'Salah', 'Salah', 'Benar', 'Salah', 'Benar', 'Benar', 'Benar', 'Benar', 'Salah', 'Salah', 'Salah', 'Salah', 'Salah', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', '75%', '50%', '50%', '50%', '50%', '25%', '75%', 'Belum Ada', '50%', 'Belum Ada', 'Belum Ada', '50%', 'Belum Ada', '75%', '100%', '50%', '50%', '75%', '25%', '100%', '100%', '50%', '2026-04-22', '2026-18', '19:42:31', 8, 'Sedang', 18, 'Baik', 26),
(4, 4, 'Amya Sawayn', 56, 'Laki-laki', 'S2', 'Pernah', 'Salah', 'Salah', 'Salah', 'Benar', 'Salah', 'Benar', 'Benar', 'Benar', 'Benar', 'Salah', 'Benar', 'Salah', 'Salah', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', '75%', '25%', 'Belum Ada', '25%', 'Belum Ada', 'Belum Ada', '50%', '75%', '50%', 'Belum Ada', '100%', '75%', 'Belum Ada', '75%', '25%', '25%', '75%', '75%', '50%', '75%', '25%', '25%', '2026-04-26', '2026-18', '19:49:33', 8, 'Sedang', 17, 'Baik', 25),
(5, 5, 'Kaela Emard PhD', 34, 'Laki-laki', 'D3', 'Belum Pernah', 'Salah', 'Salah', 'Benar', 'Salah', 'Salah', 'Salah', 'Benar', 'Salah', 'Salah', 'Benar', 'Salah', 'Benar', 'Benar', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', '50%', '100%', '75%', '25%', '25%', '100%', '50%', '75%', '25%', '100%', 'Belum Ada', '100%', '100%', '50%', '100%', '25%', '25%', 'Belum Ada', '50%', 'Belum Ada', '25%', '50%', '2026-04-28', '2026-18', '03:37:18', 11, 'Sedang', 19, 'Baik', 30),
(6, 6, 'Webster Graham', 30, 'Perempuan', 'SD', 'Belum Pernah', 'Benar', 'Salah', 'Benar', 'Salah', 'Benar', 'Salah', 'Salah', 'Benar', 'Benar', 'Benar', 'Benar', 'Benar', 'Salah', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Belum Ada', 'Belum Ada', '100%', '50%', '100%', '25%', 'Belum Ada', '25%', '25%', '50%', '50%', '50%', '100%', 'Belum Ada', '100%', '50%', '75%', '25%', '50%', '100%', '25%', 'Belum Ada', '2026-04-23', '2026-18', '02:04:38', 12, 'Sedang', 17, 'Baik', 29),
(7, 7, 'Thad Schinner', 36, 'Laki-laki', 'SMA/SMK', 'Belum Pernah', 'Benar', 'Benar', 'Benar', 'Benar', 'Salah', 'Salah', 'Salah', 'Benar', 'Salah', 'Salah', 'Salah', 'Benar', 'Benar', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', '75%', '25%', '50%', '100%', 'Belum Ada', '25%', '50%', '50%', '75%', 'Belum Ada', '50%', 'Belum Ada', '25%', '50%', '75%', '75%', '100%', '25%', 'Belum Ada', '75%', '50%', '25%', '2026-04-21', '2026-18', '15:39:49', 12, 'Sedang', 18, 'Baik', 30),
(8, 8, 'Emie Leannon III', 33, 'Perempuan', 'D3', 'Pernah', 'Salah', 'Salah', 'Benar', 'Benar', 'Benar', 'Salah', 'Salah', 'Salah', 'Benar', 'Salah', 'Salah', 'Salah', 'Benar', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', '25%', '75%', '25%', '75%', '75%', 'Belum Ada', '100%', 'Belum Ada', 'Belum Ada', '25%', '75%', '100%', '50%', '50%', '75%', 'Belum Ada', 'Belum Ada', '100%', '100%', 'Belum Ada', '50%', '50%', '2026-04-27', '2026-18', '15:41:53', 8, 'Sedang', 16, 'Baik', 24),
(9, 9, 'Mr. Vance Fadel', 63, 'Laki-laki', 'SD', 'Belum Pernah', 'Benar', 'Salah', 'Benar', 'Salah', 'Salah', 'Benar', 'Benar', 'Salah', 'Benar', 'Benar', 'Salah', 'Salah', 'Benar', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', '75%', '50%', '100%', '100%', '100%', '50%', '100%', '75%', '75%', '100%', '50%', '25%', 'Belum Ada', 'Belum Ada', 'Belum Ada', '50%', 'Belum Ada', '100%', '50%', '50%', '50%', '75%', '2026-04-21', '2026-18', '07:16:24', 8, 'Sedang', 18, 'Baik', 26),
(10, 10, 'Dr. Dorthy Dare', 21, 'Perempuan', 'SD', 'Belum Pernah', 'Salah', 'Benar', 'Salah', 'Benar', 'Salah', 'Salah', 'Salah', 'Salah', 'Salah', 'Benar', 'Salah', 'Benar', 'Salah', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', '25%', '25%', '25%', '75%', '100%', '25%', 'Belum Ada', '25%', '50%', '75%', '100%', '75%', '25%', '75%', '50%', 'Belum Ada', 'Belum Ada', '50%', '25%', '50%', 'Belum Ada', '50%', '2026-04-24', '2026-18', '19:03:16', 9, 'Sedang', 18, 'Baik', 27),
(11, 11, 'Jerrold Schuster', 47, 'Perempuan', 'S2', 'Belum Pernah', 'Salah', 'Salah', 'Benar', 'Benar', 'Salah', 'Benar', 'Salah', 'Salah', 'Salah', 'Benar', 'Benar', 'Benar', 'Salah', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', '100%', 'Belum Ada', '25%', '25%', '100%', '100%', '100%', 'Belum Ada', '50%', '50%', '50%', '100%', 'Belum Ada', 'Belum Ada', 'Belum Ada', '100%', '100%', '75%', 'Belum Ada', '50%', 'Belum Ada', 'Belum Ada', '2026-04-23', '2026-18', '18:54:26', 10, 'Sedang', 14, 'Sedang', 24),
(12, 12, 'Brittany Schneider', 33, 'Perempuan', 'S1', 'Pernah', 'Salah', 'Salah', 'Benar', 'Benar', 'Salah', 'Benar', 'Benar', 'Salah', 'Salah', 'Benar', 'Benar', 'Salah', 'Benar', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', '25%', '75%', 'Belum Ada', 'Belum Ada', '50%', '75%', '75%', '75%', '100%', '75%', '50%', '75%', '50%', '25%', '25%', '25%', '50%', 'Belum Ada', 'Belum Ada', '50%', '75%', '50%', '2026-04-22', '2026-18', '03:14:53', 12, 'Sedang', 18, 'Baik', 30),
(13, 13, 'Dr. Maude Hettinger II', 36, 'Laki-laki', 'S2', 'Pernah', 'Benar', 'Salah', 'Benar', 'Salah', 'Salah', 'Benar', 'Salah', 'Benar', 'Salah', 'Salah', 'Salah', 'Salah', 'Benar', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', '100%', 'Belum Ada', '25%', '100%', '100%', '25%', '25%', '50%', 'Belum Ada', '25%', '50%', '75%', '50%', '25%', '75%', '25%', '50%', 'Belum Ada', '50%', '25%', 'Belum Ada', '100%', '2026-04-21', '2026-18', '21:51:08', 11, 'Sedang', 18, 'Baik', 29),
(14, 14, 'Cara Daniel', 57, 'Laki-laki', 'S3', 'Belum Pernah', 'Benar', 'Benar', 'Benar', 'Salah', 'Benar', 'Salah', 'Benar', 'Benar', 'Salah', 'Benar', 'Benar', 'Salah', 'Salah', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Belum Ada', 'Belum Ada', '75%', '100%', '25%', '100%', '50%', '100%', 'Belum Ada', 'Belum Ada', '75%', '75%', '25%', 'Belum Ada', '25%', 'Belum Ada', '100%', '75%', '50%', '50%', '25%', 'Belum Ada', '2026-04-26', '2026-18', '15:29:44', 11, 'Sedang', 15, 'Baik', 26),
(15, 15, 'Jedediah Runte', 54, 'Laki-laki', 'SMP', 'Belum Pernah', 'Benar', 'Salah', 'Salah', 'Benar', 'Salah', 'Salah', 'Benar', 'Salah', 'Salah', 'Benar', 'Salah', 'Salah', 'Salah', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', '25%', '50%', 'Belum Ada', '75%', '50%', 'Belum Ada', '75%', '75%', 'Belum Ada', 'Belum Ada', '100%', '50%', 'Belum Ada', '100%', '50%', '100%', '100%', '50%', '50%', 'Belum Ada', '50%', '25%', '2026-04-22', '2026-18', '12:06:29', 8, 'Sedang', 16, 'Baik', 24),
(16, 16, 'Jamel Kerluke', 18, 'Laki-laki', 'SMA/SMK', 'Pernah', 'Benar', 'Benar', 'Benar', 'Benar', 'Salah', 'Salah', 'Salah', 'Benar', 'Benar', 'Salah', 'Benar', 'Salah', 'Benar', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', '75%', '50%', '50%', 'Belum Ada', '25%', '75%', '75%', '100%', '75%', '100%', '50%', '100%', '25%', '100%', '75%', '25%', '100%', '75%', 'Belum Ada', '75%', 'Belum Ada', '100%', '2026-04-24', '2026-18', '07:08:19', 13, 'Sedang', 19, 'Baik', 32),
(17, 17, 'Antonetta Ebert Jr.', 32, 'Laki-laki', 'SD', 'Pernah', 'Salah', 'Benar', 'Salah', 'Salah', 'Benar', 'Benar', 'Salah', 'Salah', 'Salah', 'Salah', 'Benar', 'Benar', 'Benar', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Belum Ada', '75%', '50%', '25%', '100%', '75%', '75%', '25%', '25%', '50%', 'Belum Ada', '100%', '100%', 'Belum Ada', '75%', '50%', 'Belum Ada', '50%', '25%', '25%', 'Belum Ada', '25%', '2026-04-22', '2026-18', '06:05:54', 11, 'Sedang', 17, 'Baik', 28),
(18, 18, 'Makenzie Nikolaus', 16, 'Perempuan', 'S3', 'Belum Pernah', 'Salah', 'Salah', 'Salah', 'Benar', 'Salah', 'Benar', 'Benar', 'Salah', 'Salah', 'Salah', 'Salah', 'Benar', 'Benar', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', '100%', '25%', '100%', '75%', '50%', '75%', '75%', '50%', '25%', '100%', '25%', '75%', '50%', '50%', 'Belum Ada', '25%', '50%', '100%', '25%', '50%', '50%', '50%', '2026-04-24', '2026-18', '15:07:46', 8, 'Sedang', 21, 'Baik', 29),
(19, 19, 'Bryana Hegmann', 58, 'Perempuan', 'SMP', 'Pernah', 'Salah', 'Salah', 'Benar', 'Salah', 'Benar', 'Salah', 'Salah', 'Salah', 'Benar', 'Salah', 'Benar', 'Salah', 'Benar', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', '100%', '25%', '25%', '75%', '75%', '50%', '50%', '50%', '50%', '50%', '75%', '25%', 'Belum Ada', '25%', 'Belum Ada', '100%', '25%', '50%', 'Belum Ada', '50%', '100%', '25%', '2026-04-26', '2026-18', '08:51:09', 8, 'Sedang', 19, 'Baik', 27),
(20, 20, 'Mrs. Jazmyn Mills', 60, 'Laki-laki', 'S1', 'Belum Pernah', 'Benar', 'Benar', 'Salah', 'Salah', 'Benar', 'Benar', 'Salah', 'Salah', 'Benar', 'Benar', 'Benar', 'Benar', 'Benar', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Belum Ada', '50%', '50%', 'Belum Ada', '75%', '75%', '100%', '25%', '75%', '25%', '25%', 'Belum Ada', '25%', '100%', '75%', '50%', '75%', 'Belum Ada', '100%', '75%', 'Belum Ada', '50%', '2026-04-25', '2026-18', '05:38:02', 13, 'Sedang', 17, 'Baik', 30),
(21, 21, 'Linwood Stark III', 24, 'Laki-laki', 'D3', 'Pernah', 'Salah', 'Benar', 'Salah', 'Benar', 'Salah', 'Benar', 'Salah', 'Benar', 'Salah', 'Salah', 'Benar', 'Salah', 'Benar', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', '75%', '100%', '100%', '50%', '100%', 'Belum Ada', '100%', '100%', '25%', '25%', '50%', '25%', '75%', '50%', '25%', 'Belum Ada', 'Belum Ada', '75%', '75%', '75%', '25%', '75%', '2026-04-22', '2026-18', '03:31:41', 10, 'Sedang', 19, 'Baik', 29),
(22, 22, 'Louvenia Roob PhD', 41, 'Laki-laki', 'SD', 'Pernah', 'Benar', 'Salah', 'Salah', 'Salah', 'Salah', 'Salah', 'Benar', 'Benar', 'Benar', 'Benar', 'Salah', 'Benar', 'Benar', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', '50%', '75%', '75%', 'Belum Ada', '100%', '50%', '25%', '25%', '100%', '75%', '50%', '75%', '100%', '50%', '75%', '100%', '25%', '50%', 'Belum Ada', '50%', '25%', 'Belum Ada', '2026-04-25', '2026-18', '05:40:51', 11, 'Sedang', 19, 'Baik', 30),
(23, 23, 'Prof. Dayna Hansen', 61, 'Perempuan', 'D3', 'Pernah', 'Salah', 'Benar', 'Benar', 'Benar', 'Benar', 'Benar', 'Salah', 'Benar', 'Benar', 'Salah', 'Salah', 'Benar', 'Salah', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', '50%', '75%', '100%', '50%', '25%', 'Belum Ada', '50%', '75%', '100%', '75%', '25%', '100%', '50%', '100%', '25%', 'Belum Ada', '100%', 'Belum Ada', '50%', '50%', '100%', '75%', '2026-04-23', '2026-18', '18:54:05', 10, 'Sedang', 19, 'Baik', 29),
(24, 26, 'Prof. Dayna Hansen', 61, 'Perempuan', 'D3', 'Pernah', 'Salah', 'Benar', 'Benar', 'Benar', 'Benar', 'Benar', 'Salah', 'Benar', 'Benar', 'Salah', 'Salah', 'Benar', 'Salah', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', '50%', '75%', '100%', '50%', '25%', 'Belum Ada', '50%', '75%', '100%', '75%', '25%', '100%', '50%', '100%', '25%', 'Belum Ada', '100%', 'Belum Ada', '50%', '50%', '100%', '75%', '2026-04-23', '2026-20', '18:54:05', 10, 'Sedang', 19, 'Baik', 29);

-- --------------------------------------------------------

--
-- Table structure for table `prizes`
--

CREATE TABLE `prizes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kLS2ErRoJ618c5WlkQQZDKtwKdpl2Fb2kPIEWerh', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicmZpSmNnbEkySm1OTTV4RFJYakFKekpFRFlhYU5FREJLZFpTejFIMiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9wcml6ZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1777594668);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin1234', '2026-01-28 20:19:41', '2026-01-28 20:19:41', 1),
(2, 'Herman', 'herman@gmail.com', 'herman', '2026-04-27 03:50:36', '2026-04-27 03:50:36', 0),
(3, 'Yanto', 'yanto@gmail.com', 'yanto', '2026-04-27 04:50:36', '2026-04-27 04:50:36', 0),
(4, 'Amya Sawayn', 'coby.gaylord@example.net', '$2y$12$UdUqFG0T8KqCG3ZTNg4LOOpTTY1ou8lC0K2gsE0RYvu/QdeNi10ze', '2026-04-27 21:21:57', '2026-04-27 21:21:57', 0),
(5, 'Kaela Emard PhD', 'pink.herman@example.net', '$2y$12$mZzYFOn7mCBNDkc20dmoYeY5OOaGEXmkAf3Al.mqXlUzPMsBDS03e', '2026-04-27 21:21:57', '2026-04-27 21:21:57', 0),
(6, 'Webster Graham', 'talia.schamberger@example.org', '$2y$12$mbo6zUH/MdsBcJK62oCbcOQZhelAgSxZ9/oKLkHlSgMh1MMxfXoi6', '2026-04-27 21:21:58', '2026-04-27 21:21:58', 0),
(7, 'Thad Schinner', 'wiley21@example.org', '$2y$12$rWJmemPPBpkY8ba82ndb7O4LhW8MubePa7DfpywRS3gzynlkU5fv2', '2026-04-27 21:21:58', '2026-04-27 21:21:58', 0),
(8, 'Emie Leannon III', 'tremaine23@example.org', '$2y$12$ARWtv0hhs4n4pOS86uba7O/8Q/gjVK5v0tuQWRsLCaFqnpvTKdLam', '2026-04-27 21:21:59', '2026-04-27 21:21:59', 0),
(9, 'Mr. Vance Fadel', 'alivia27@example.com', '$2y$12$H4VGsrf/kfEuAwFHBQm/l.QyDQG.5k/ZMk4cYlsdiTZw.8itWdfui', '2026-04-27 21:21:59', '2026-04-27 21:21:59', 0),
(10, 'Dr. Dorthy Dare', 'adelbert51@example.org', '$2y$12$cpfhS1bCD9bAMWrR51eMYu9EX4AXA5bIhNOmwMvoyaTqUgNzfx3hO', '2026-04-27 21:22:00', '2026-04-27 21:22:00', 0),
(11, 'Jerrold Schuster', 'telly81@example.org', '$2y$12$w7wQvwKI8DrnstLo.PPECunOhyRmlkJzqvewihUb/ODCIyQ6PCYaa', '2026-04-27 21:22:00', '2026-04-27 21:22:00', 0),
(12, 'Brittany Schneider', 'hmertz@example.org', '$2y$12$UKXyncE5hNghoMSVAhA/KuUu3vdq/nRV.fuQVtEjhUz/mHxPZcz2u', '2026-04-27 21:22:00', '2026-04-27 21:22:00', 0),
(13, 'Dr. Maude Hettinger II', 'dach.audra@example.org', '$2y$12$.Rzwp6XbDbAJEehfWwCjIu5sUEixy7Rgcn0MuymyHuMlydm1I3C.i', '2026-04-27 21:22:01', '2026-04-27 21:22:01', 0),
(14, 'Cara Daniel', 'louisa.kshlerin@example.net', '$2y$12$Kob/hkbK4jdxRu9p1FRZbuz4zJrln6PZvihGbHY1PDchEBi6AVISS', '2026-04-27 21:22:01', '2026-04-27 21:22:01', 0),
(15, 'Jedediah Runte', 'jaime04@example.org', '$2y$12$x7KVeCFlv/9wr72KVEA2Cuesnyltg73uFnJDX8wq6qwOoCAOg7yai', '2026-04-27 21:22:02', '2026-04-27 21:22:02', 0),
(16, 'Jamel Kerluke', 'turner.shyann@example.com', '$2y$12$IXztaBDvPWTPB4QSvi94xO2K1yqrGz4A11AVnBXANf8D38tFC.7bu', '2026-04-27 21:22:02', '2026-04-27 21:22:02', 0),
(17, 'Antonetta Ebert Jr.', 'raquel95@example.net', '$2y$12$0YqR7UfnhPwgsxRmCvA3SugEH0fvux9BzFFFM5QleY/DsCZwZu9Pa', '2026-04-27 21:22:03', '2026-04-27 21:22:03', 0),
(18, 'Makenzie Nikolaus', 'renner.owen@example.org', '$2y$12$pVzX0cxxxETPZXML.m14aucK8QVXnjNwgB8Sx.ap8w5hqoRigpb2a', '2026-04-27 21:22:03', '2026-04-27 21:22:03', 0),
(19, 'Bryana Hegmann', 'cathy.langosh@example.org', '$2y$12$AIo9WFDkgTSnIOsXcHR5j.7pSdGUgrs55mxIs5yxC/WP8XDNntxja', '2026-04-27 21:22:04', '2026-04-27 21:22:04', 0),
(20, 'Mrs. Jazmyn Mills', 'ian.hamill@example.com', '$2y$12$fCTsDhFNVz.CT7UqUAWj5eMLe70ZF35nUM6EsdELnJekfv2sJq3l6', '2026-04-27 21:22:04', '2026-04-27 21:22:04', 0),
(21, 'Linwood Stark III', 'ratke.sincere@example.net', '$2y$12$hYp1X93A9eSboGSSI06r.enW2Yx0kHnq9BAyPg0l6dwhbGgg11U9y', '2026-04-27 21:22:05', '2026-04-27 21:22:05', 0),
(22, 'Louvenia Roob PhD', 'kevin02@example.org', '$2y$12$leyW4taE60JFW/AUV6r.JeDDNPq9IhrPPcipKaGtgetDq7JZJ7KfW', '2026-04-27 21:22:05', '2026-04-27 21:22:05', 0),
(23, 'Prof. Dayna Hansen', 'trantow.zoie@example.org', '$2y$12$A9UC5vb7Z1HGEX0UEVlAkOSvsTeZA5iiLGfILgmWpKdU8HuBF6Dpi', '2026-04-27 21:22:05', '2026-04-27 21:22:05', 0),
(25, 'Test', 'test@gmail.com', 'test', '2026-04-28 03:55:55', '2026-04-28 03:55:55', 0),
(26, 'sdfds', 'sdfasd@gmail.com', 'drgdfgdf', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absens`
--
ALTER TABLE `absens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absens_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posttests`
--
ALTER TABLE `posttests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posttests_user_id_foreign` (`user_id`);

--
-- Indexes for table `pretests`
--
ALTER TABLE `pretests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pretests_user_id_foreign` (`user_id`),
  ADD KEY `pretests_week_total_score_index` (`week`,`total_score`);

--
-- Indexes for table `prizes`
--
ALTER TABLE `prizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absens`
--
ALTER TABLE `absens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posttests`
--
ALTER TABLE `posttests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pretests`
--
ALTER TABLE `pretests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `prizes`
--
ALTER TABLE `prizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absens`
--
ALTER TABLE `absens`
  ADD CONSTRAINT `absens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posttests`
--
ALTER TABLE `posttests`
  ADD CONSTRAINT `posttests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pretests`
--
ALTER TABLE `pretests`
  ADD CONSTRAINT `pretests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
