-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 08:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ulasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobils`
--

CREATE TABLE `mobils` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe_mobil` varchar(255) NOT NULL,
  `tahun_produksi` int(11) NOT NULL,
  `harga_mobil` bigint(20) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobils`
--

INSERT INTO `mobils` (`id`, `nama`, `tipe_mobil`, `tahun_produksi`, `harga_mobil`, `warna`, `deskripsi`, `stok`, `merk`, `image`, `created_at`, `updated_at`) VALUES
(19, 'Land Cruiser', 'Sport', 2023, 2000000000, 'Hitam', 'Toyota Land Cruiser adalah SUV premium yang terkenal dengan ketangguhan off-road dan kehandalannya. Dengan desain kokoh dan fitur canggih, mobil ini menawarkan kenyamanan optimal di jalan raya dan performa luar biasa di medan berat.', 4, 'Toyota', '20231220_172425_jpeg', '2023-12-20 10:24:25', '2023-12-20 10:24:25'),
(20, 'Civic', 'Sport', 2023, 1500000000, 'Putih', 'Honda Civic dengan design terbaru dan juga harga yang lebih terjangkau.', 3, 'Honda', '20231220_173540_jpeg', '2023-12-20 10:35:40', '2023-12-20 10:36:32'),
(21, 'Supra GTR', 'Sport', 2023, 5000000000, 'Merah', 'Toyota Supra Ini sangat Bagus dan sangat elegan.', 3, 'Toyota', '20231220_173734_jpg', '2023-12-20 10:37:34', '2023-12-20 10:37:34'),
(22, 'BMW 2 Gran Coupe tipe 218i Gran Coupé', 'Sport', 2023, 767000000, 'Putih', 'BMW 218i Gran Coupé adalah Mobil Sport termurah dari Merk mobil sangat terkenal yaitu BMW.', 3, 'BMW', '20231220_173940_jpg', '2023-12-20 10:39:40', '2023-12-20 10:39:40'),
(23, 'Lamborghini Veneno Roadster', 'Sport', 2023, 9000000000, 'Hijau', 'Mobil ini dilengkapi mesin V12 berkapasitas 6,5 liter dengan kekuatan 750 hp dan diklaim memiliki akselerasi 0-100 km/jam dalam waktu 2,9 detik.', 3, 'Lamborghini', '20231220_174420_jpg', '2023-12-20 10:44:20', '2023-12-20 10:44:20'),
(24, 'Wuling Formo S 5 Seater', 'City Car', 2022, 161000000, 'Silver', 'Kapasitas mesin yang digunakan 1,2 liter. Adapun tenaga yang dihasilkan mencarap 78,5 ps di 5.600 rpm.', 3, 'Wuling', '20231220_174700_png', '2023-12-20 10:47:00', '2023-12-20 10:47:00'),
(25, 'Toyota New Agya', 'City Car', 2023, 149000000, 'Kuning', 'Toyota New Agya adalah pilihan selanjutnya yang bisa kamu pertimbangkan. Sebab, mobil ini cukup nyaman di kelasnya.', 3, 'Toyota', '20231220_174837_png', '2023-12-20 10:48:37', '2023-12-20 10:48:37'),
(26, 'Suzuki Baleno', 'City Car', 2022, 265000000, 'Hitam', 'Kategori Just The Three of Us mewakili kebutuhan kendaraan roda empat bagi keluarga kecil yang menginginkan mobil dengan tingkat value for money baik.', 3, 'Suzuki', '20231220_175056_jpg', '2023-12-20 10:50:56', '2023-12-20 10:50:56'),
(27, 'Toyota Kijang Innova Zenix', 'City Car', 2022, 614000000, 'Putih', 'Tampilan eksteriornya makin menawan dan berwibawa ditambah lagi tingkat kecanggihan lebih tinggi dengan teknologi elektrifikasi.', 3, 'Toyota', '20231220_175244_jpg', '2023-12-20 10:52:44', '2023-12-20 10:52:44'),
(28, 'Mitsubishi Xpander Cross', 'City Car', 2023, 316000000, 'Hitam', 'Adventurer Young Family Choice berusaha memenuhi kebutuhan kendaraan bagi keluarga yang memiliki hobi melakukan aktivitas-aktivitas luar ruang.', 5, 'Mitsubishi', '20231220_175556_jpg', '2023-12-20 10:55:56', '2023-12-20 10:55:56'),
(29, 'Nissan Juke', 'City Car', 2023, 332600000, 'Merah', 'Nissan Juke akan mencuri perhatian lewat keunikan desain crossover, hasil gabungan bentuk SUV dan mobil sport.', 4, 'Nissan', '20231220_175823_jpeg', '2023-12-20 10:58:23', '2023-12-20 10:58:23'),
(30, 'Honda WR-V', 'City Car', 2023, 318500000, 'Putih', 'Untuk itu pilihannya bisa mengacu pada rekomendasi dalam kategori 1st Choice for The Eldest, yaitu WR-V.', 3, '2', '20231220_180013_jpg', '2023-12-20 11:00:13', '2023-12-20 11:00:13'),
(31, 'Wuling Alvez', 'City Car', 2023, 295000000, 'Hitam', 'Mobil ini punya banyak fitur yang tergolong canggih, seperti perintah suara Bahasa Indonesia WIND, fitur keselamatan aktif, hingga Wuling Remote Apps.', 3, 'Wuling', '20231220_180313_jpg', '2023-12-20 11:03:13', '2023-12-20 11:03:13'),
(32, 'Mazda CX-5 – Hi-Tech/Advance Family SUV', 'City Car', 2023, 628800000, 'Putih', 'Kategori Hi-Tech/Advance Family SUV mewakili kebutuhan kendaraan bagi keluarga mapan yang sudah berada pada level mencari kepuasan berkendara.', 3, 'Mazda', '20231220_180459_jpg', '2023-12-20 11:04:59', '2023-12-20 11:04:59'),
(33, 'Chery Tiggo 8 Pro – Daddy’s Big Toyz', 'City Car', 2023, 528500000, 'Putih', 'Tiggo 8 Pro maju sebagai rekomendasi kategori Daddy’s Big Toyz dalam pemilihan Family Car Recommendations 2023.', 2, 'Chery', '20231220_180624_jpg', '2023-12-20 11:06:24', '2023-12-20 11:09:00'),
(34, 'Mazda CX-9', 'SUV', 2023, 600000000, 'Abu Abu', 'CX-9, SUV mewah produksi Mazda, menawarkan desain elegan dan kabin lapang untuk tujuh penumpang, menyajikan kombinasi gaya dan kenyamanan.', 1, 'Mazda', '20231221_041945_jpg', '2023-12-20 21:19:45', '2023-12-21 00:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `metode_pembayaran` enum('BNI','BCA','BRI','MANDIRI') NOT NULL,
  `status` enum('Dibayar','Diterima','Batal','') DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_mobil`, `id_user`, `metode_pembayaran`, `status`, `tanggal`) VALUES
(87, 34, 22, 'MANDIRI', 'Diterima', '2023-12-21 04:22:59'),
(88, 34, 22, 'MANDIRI', 'Diterima', '2023-12-21 07:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `verify_key` varchar(255) NOT NULL,
  `img_profil` varchar(255) DEFAULT NULL,
  `type` enum('regular','admin') NOT NULL DEFAULT 'regular',
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `no_telp`, `alamat`, `verify_key`, `img_profil`, `type`, `active`, `created_at`, `updated_at`, `email_verified_at`, `remember_token`) VALUES
(2, 'Admin', 'admin', 'mobilpillihan@gmail.com', '$2y$10$tK7X/nJxFMV/sPYX9hdU2O4tflIamoFHESDQL/KHrtj9lE844iRiu', '087984563258', 'Jl. Babarsari No.01', '47voWXY3Esreudy3ZeIraLwfjUz4gVwl3rV0nOH6WNJzZjqjRLBwbs15lUZEVDqrtserUOzDf4bdiN9T9cYJUibHu9LTVQUAnPFb', 'default.jpg', 'admin', 1, '2023-12-14 12:06:30', '2023-12-14 12:07:24', '2023-12-14 12:07:24', NULL),
(20, 'Joel Christian Ngongoloy', 'joel07', 'joelchristian059@gmail.com', '$2y$10$oAusB/uAuP2T3z7ZsN.Hdu7zDUy9oZ6pAKiMRZfWeyOSzDg3JFvN6', '08134716230', 'Bontang Kalimantan Timur', 'iymsQtSR2JztKdC6uqm2PxzMYzRxDElfb6KuDqFcfa5NVKqRY8qxK9cGqOJ4PYFLjfQOEbs6xRGs5uLmXlUYbZnVNtPKWIltIXA3', '20231221_040406.JPG', 'regular', 1, '2023-12-20 11:29:00', '2023-12-20 21:04:06', '2023-12-20 11:29:17', NULL),
(22, 'Robert New', 'robert07', 'robert@gmail.co.id', '$2y$10$y.wfOYvupTZKiyrzvyHFw.BAg3GnPhgRdZrmB.BcmClJBI7/.Iqde', '08134716268', 'Bontang', 'q1Idk3I1QrT7QrgXanqvsrLfcEW152P4e5CIqGe2regy31LHnhg1bUm924XoT0oHbRxDJD7ENHV7h95PIinnsoOT1SMcexyOn8LH', '20231221_073223.jpg', 'regular', 1, '2023-12-20 11:49:00', '2023-12-21 00:32:23', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobils`
--
ALTER TABLE `mobils`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ibfk_1` (`id_mobil`),
  ADD KEY `ibfk_2` (`id_user`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mobils`
--
ALTER TABLE `mobils`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `mobils` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `mobils` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
