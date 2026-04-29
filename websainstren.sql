-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2026 at 04:46 PM
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
(7, '2024_09_22_110217_create_posttests_table', 1);

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
  `waktu` time NOT NULL,
  `score_pengetahuan` int NOT NULL,
  `grade_pengetahuan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_kesiapsiagaan` int NOT NULL,
  `grade_kesiapsiagaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
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
('HtezHebXDrKmlAUMgnC80kqugYY4CSXCGT9Oyutj', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieWhDMFdJNFRVdWVIblZHbmdtemhab2piWDVIOEVCdzdTTUZ0NUt6ViI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcmV0ZXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1769656903),
('lPW9MvzxODBjZ4RDZeRsBs3SW5cHy2495p5sUZBg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRklsWVFGZzhzblluVUkwWW9nOFR4OVpxUWI2RzZlOGRrVEhWZXZjNSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1770170640),
('MV9Rag43xJ7JA1Bac9IWKQKWA5VEKWwdiIIwHuuV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiN3haTnFLOTJQbWFuSHA0WW80dFBrSk52UzNhQVB5M2t1dzluMWRpSSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcmV0ZXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1770171169),
('pId11uI0uFpInVZW7ul882pBIl34HhAXKkW3ING7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN21IUXZKMkYyaGFzVG9ZY092U003VnlxVHJwbG56VExyRWI1WEZGQSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1772777192);

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
(1, 'Admin', 'admin@gmail.com', 'admin1234', '2026-01-28 20:19:41', '2026-01-28 20:19:41', 0);

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
  ADD KEY `pretests_user_id_foreign` (`user_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posttests`
--
ALTER TABLE `posttests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pretests`
--
ALTER TABLE `pretests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
