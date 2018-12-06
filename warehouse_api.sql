-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 02:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(40, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(41, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(42, '2016_06_01_000004_create_oauth_clients_table', 1),
(43, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(44, '2018_11_30_070037_create_m_satuan_table', 1),
(45, '2018_11_30_070042_create_m_vendor_table', 1),
(46, '2018_11_30_070224_create_m_barang_table', 1),
(47, '2018_11_30_081129_create_m_suratpermintaan_table', 1),
(48, '2018_11_30_081159_create_m_suratpermintaan_detail_table', 1),
(49, '2018_12_01_100316_create_m_gudangin_table', 1),
(50, '2018_12_01_140237_create_m_gudangin_detail_table', 1),
(51, '2018_12_01_140905_create_m_permintaanunit_table', 1),
(52, '2018_12_01_140927_create_m_permintaanunit_detail_table', 1),
(53, '2018_12_01_140937_create_m_gudangout_table', 1),
(54, '2018_12_01_140953_create_m_gudangout_detail_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_barang`
--

CREATE TABLE `m_barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelompok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_satuan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_barang`
--

INSERT INTO `m_barang` (`id`, `nama`, `kode`, `kelompok`, `id_satuan`, `created_at`, `updated_at`) VALUES
(1, 'HP Saya sdsds', '323xz', 'elektronik', 1, '2018-12-02 10:23:37', '2018-12-02 10:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `m_gudangin`
--

CREATE TABLE `m_gudangin` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_suratpermintaan` int(10) UNSIGNED NOT NULL,
  `tgl_masuk` date NOT NULL,
  `penerima_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_suratbukti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_gudangin_detail`
--

CREATE TABLE `m_gudangin_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `id_gudangin` int(10) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_gudangout`
--

CREATE TABLE `m_gudangout` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomor_gudang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL,
  `id_permintaanunit` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_gudangout_detail`
--

CREATE TABLE `m_gudangout_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `id_gudangout` int(10) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_permintaanunit`
--

CREATE TABLE `m_permintaanunit` (
  `id` int(10) UNSIGNED NOT NULL,
  `tgl_permintaanunit` date NOT NULL,
  `no_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_peminta` int(10) UNSIGNED NOT NULL,
  `peminta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_permintaanunit_detail`
--

CREATE TABLE `m_permintaanunit_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_permintaanunit` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_satuan`
--

CREATE TABLE `m_satuan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_satuan`
--

INSERT INTO `m_satuan` (`id`, `kode`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '8937280', 'kg', 'kilogram mmm vfdgfdgdfgdg', '2018-12-01 22:02:29', '2018-12-02 08:49:21'),
(20, '8937281', 'kg', 'kilogram mmm vfdgfdgdfgdg', '2018-12-01 22:49:15', '2018-12-02 08:50:48'),
(24, '8937282', 'kgo', 'kilogram', '2018-12-01 22:54:49', '2018-12-01 22:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `m_suratpermintaan`
--

CREATE TABLE `m_suratpermintaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomor_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `penanggung_jawab` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_vendor` int(10) UNSIGNED NOT NULL,
  `tanggal_max` date NOT NULL,
  `nama_vendor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_suratpermintaan_detail`
--

CREATE TABLE `m_suratpermintaan_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_suratpermintaan` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_vendor`
--

CREATE TABLE `m_vendor` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('119602a84f4ba95f270de72b1ed2cb11ab9149dc3172dfcff4086db59685227fbdfab18a3d405d67', 1, 1, 'nApp', '[]', 0, '2018-12-01 21:56:54', '2018-12-01 21:56:54', '2019-12-02 04:56:54'),
('e58d039ed1106aa51db16e2c3183372be250486606393fb39a6465c6442f760e0d42079758465ee8', 1, 1, 'nApp', '[]', 0, '2018-12-01 22:00:19', '2018-12-01 22:00:19', '2019-12-02 05:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'SmartWarehouse Personal Access Client', 'JOs97odIXHYQcVwo1MM1ftr6wdCtfCR3wWHWVjrb', 'http://localhost', 1, 0, 0, '2018-12-01 21:56:50', '2018-12-01 21:56:50'),
(2, NULL, 'SmartWarehouse Password Grant Client', '62yUFujK4AwGeRaWh2e63cxBqToV8B3aqUiSIlwm', 'http://localhost', 0, 1, 0, '2018-12-01 21:56:51', '2018-12-01 21:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-12-01 21:56:51', '2018-12-01 21:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amira', 'amira@dibumi.com', NULL, '$2y$10$ZdzIeeJRPQwDNptgcECFzOKVtHxtrvWtG6ifmvZcL3EISqEOjr1A.', 'a', NULL, '2018-12-01 21:55:54', '2018-12-01 21:55:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `m_barang_kode_unique` (`kode`),
  ADD KEY `m_barang_id_satuan_foreign` (`id_satuan`);

--
-- Indexes for table `m_gudangin`
--
ALTER TABLE `m_gudangin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_gudangin_id_suratpermintaan_foreign` (`id_suratpermintaan`);

--
-- Indexes for table `m_gudangin_detail`
--
ALTER TABLE `m_gudangin_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_gudangin_detail_id_barang_foreign` (`id_barang`),
  ADD KEY `m_gudangin_detail_id_gudangin_foreign` (`id_gudangin`);

--
-- Indexes for table `m_gudangout`
--
ALTER TABLE `m_gudangout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_gudangout_id_permintaanunit_foreign` (`id_permintaanunit`);

--
-- Indexes for table `m_gudangout_detail`
--
ALTER TABLE `m_gudangout_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_gudangout_detail_id_barang_foreign` (`id_barang`),
  ADD KEY `m_gudangout_detail_id_gudangout_foreign` (`id_gudangout`);

--
-- Indexes for table `m_permintaanunit`
--
ALTER TABLE `m_permintaanunit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_permintaanunit_id_peminta_foreign` (`id_peminta`);

--
-- Indexes for table `m_permintaanunit_detail`
--
ALTER TABLE `m_permintaanunit_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_permintaanunit_detail_id_permintaanunit_foreign` (`id_permintaanunit`),
  ADD KEY `m_permintaanunit_detail_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `m_satuan`
--
ALTER TABLE `m_satuan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `m_satuan_kode_unique` (`kode`);

--
-- Indexes for table `m_suratpermintaan`
--
ALTER TABLE `m_suratpermintaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_suratpermintaan_id_vendor_foreign` (`id_vendor`);

--
-- Indexes for table `m_suratpermintaan_detail`
--
ALTER TABLE `m_suratpermintaan_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_suratpermintaan_detail_id_suratpermintaan_foreign` (`id_suratpermintaan`),
  ADD KEY `m_suratpermintaan_detail_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `m_vendor`
--
ALTER TABLE `m_vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `m_barang`
--
ALTER TABLE `m_barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_gudangin`
--
ALTER TABLE `m_gudangin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_gudangin_detail`
--
ALTER TABLE `m_gudangin_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_gudangout`
--
ALTER TABLE `m_gudangout`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_gudangout_detail`
--
ALTER TABLE `m_gudangout_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_permintaanunit`
--
ALTER TABLE `m_permintaanunit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_permintaanunit_detail`
--
ALTER TABLE `m_permintaanunit_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_satuan`
--
ALTER TABLE `m_satuan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `m_suratpermintaan`
--
ALTER TABLE `m_suratpermintaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_suratpermintaan_detail`
--
ALTER TABLE `m_suratpermintaan_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_vendor`
--
ALTER TABLE `m_vendor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD CONSTRAINT `m_barang_id_satuan_foreign` FOREIGN KEY (`id_satuan`) REFERENCES `m_satuan` (`id`);

--
-- Constraints for table `m_gudangin`
--
ALTER TABLE `m_gudangin`
  ADD CONSTRAINT `m_gudangin_id_suratpermintaan_foreign` FOREIGN KEY (`id_suratpermintaan`) REFERENCES `m_suratpermintaan` (`id`);

--
-- Constraints for table `m_gudangin_detail`
--
ALTER TABLE `m_gudangin_detail`
  ADD CONSTRAINT `m_gudangin_detail_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `m_barang` (`id`),
  ADD CONSTRAINT `m_gudangin_detail_id_gudangin_foreign` FOREIGN KEY (`id_gudangin`) REFERENCES `m_gudangin` (`id`);

--
-- Constraints for table `m_gudangout`
--
ALTER TABLE `m_gudangout`
  ADD CONSTRAINT `m_gudangout_id_permintaanunit_foreign` FOREIGN KEY (`id_permintaanunit`) REFERENCES `m_permintaanunit` (`id`);

--
-- Constraints for table `m_gudangout_detail`
--
ALTER TABLE `m_gudangout_detail`
  ADD CONSTRAINT `m_gudangout_detail_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `m_barang` (`id`),
  ADD CONSTRAINT `m_gudangout_detail_id_gudangout_foreign` FOREIGN KEY (`id_gudangout`) REFERENCES `m_gudangout` (`id`);

--
-- Constraints for table `m_permintaanunit`
--
ALTER TABLE `m_permintaanunit`
  ADD CONSTRAINT `m_permintaanunit_id_peminta_foreign` FOREIGN KEY (`id_peminta`) REFERENCES `users` (`id`);

--
-- Constraints for table `m_permintaanunit_detail`
--
ALTER TABLE `m_permintaanunit_detail`
  ADD CONSTRAINT `m_permintaanunit_detail_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `m_barang` (`id`),
  ADD CONSTRAINT `m_permintaanunit_detail_id_permintaanunit_foreign` FOREIGN KEY (`id_permintaanunit`) REFERENCES `m_permintaanunit` (`id`);

--
-- Constraints for table `m_suratpermintaan`
--
ALTER TABLE `m_suratpermintaan`
  ADD CONSTRAINT `m_suratpermintaan_id_vendor_foreign` FOREIGN KEY (`id_vendor`) REFERENCES `m_vendor` (`id`);

--
-- Constraints for table `m_suratpermintaan_detail`
--
ALTER TABLE `m_suratpermintaan_detail`
  ADD CONSTRAINT `m_suratpermintaan_detail_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `m_barang` (`id`),
  ADD CONSTRAINT `m_suratpermintaan_detail_id_suratpermintaan_foreign` FOREIGN KEY (`id_suratpermintaan`) REFERENCES `m_suratpermintaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
