-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 04:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekarsari`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokters`
--

CREATE TABLE `dokters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokters`
--

INSERT INTO `dokters` (`id`, `nama`, `nohp`, `email`, `alamat`, `spesialis`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'dr. Tammara Audina Putri Sp. Kj.', '081234567892', 'tumtummy@gmail.com', 'Jalan Raya bukan jalan-jalan dulu aja apalagi jalan buntu', 'Psikolog Klinis', '20220107174659.892944-C9-D38-E-4624-9-EDA-4-A3-D83976579.jpg', '2022-01-07 09:59:27', '2022-01-07 10:46:59'),
(3, 'dr. Firenze Sukmaning Diefta', '081234567891', 'jj@gmail.com', 'Jalan-jalan ke rawa buntu, cakep, tapi bukan pantun', 'Umum', '20220107174706.892944-C9-D38-E-4624-9-EDA-4-A3-D83976579.jpg', '2022-01-07 10:16:28', '2022-01-07 10:47:06'),
(5, 'Inayah', '12345678', 'in@g.c', 'wertyuio', 'Psikiater', '20220107174715.892944-C9-D38-E-4624-9-EDA-4-A3-D83976579.jpg', '2022-01-07 10:28:00', '2022-01-07 10:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `nama`, `nohp`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Firenze Sukmaning D', '0987654321', 'jj@gmail.comm', 'qwerty', 'Karyawan', '2022-01-08 07:42:44', '2022-01-08 08:10:08'),
(3, 'Inayah Dwi Utari', '081234356624', 'inayahdwi07@gmail.com', '12345', 'Admin', '2022-01-08 07:45:12', '2022-01-08 08:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelanggan_id` bigint(20) UNSIGNED NOT NULL,
  `obat_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keranjangs`
--

INSERT INTO `keranjangs` (`id`, `pelanggan_id`, `obat_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(9, 3, 1, 1, '2022-01-09 03:50:46', '2022-01-09 03:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_06_044434_tabelpelanggan', 2),
(6, '2022_01_06_044607_tabelkaryawan', 2),
(7, '2022_01_06_045327_tabelobat', 2),
(8, '2022_01_06_045954_tabelkeranjang', 2),
(9, '2022_01_06_050319_tabeltransaksi', 2),
(10, '2022_01_06_050537_tabeldokter', 2),
(11, '2022_01_10_022002_pesanlayanan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `obats`
--

CREATE TABLE `obats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Stok` int(11) NOT NULL,
  `Foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Komposisi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoRegis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Manufaktur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Indikasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KontraIndikasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NamaObat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Segmentasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Perhatian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `EfekSamping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kemasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AturanPakai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obats`
--

INSERT INTO `obats` (`id`, `Stok`, `Foto`, `Harga`, `Komposisi`, `Deskripsi`, `NoRegis`, `Manufaktur`, `Indikasi`, `Dosis`, `KontraIndikasi`, `NamaObat`, `Segmentasi`, `Perhatian`, `EfekSamping`, `Kemasan`, `AturanPakai`, `Kategori`, `created_at`, `updated_at`) VALUES
(1, 0, '20220107164057.product_01.png', '25000', 'Per 5 mL: Pseudoephedrine HCl 30 mg, Triprolidine HCl 1.25 mg', 'TREMENZA SIRUP merupakan obat flu yang mengandung Pseudoephedrine HCl dan Triprolidine HCl. Pseudoephedrine HCl bekerja membantu meredakan pembengkakan pembuluh darah di dalam hidung, sehingga saluran napas lebih terbuka dan napas menjadi lega. Triprolidine HCl bekerja sebagai antihistamin atau anti alergi sehingga obat ini digunakan untuk mengatasi gejala flu seperti hidung tersumbat, dan bersin-bersin yang disertai batuk.', 'BPOM: DTL9322213737A1', 'Sanbe Farma', 'Obat ini digunakan untuk mengatasi gejala-gejala flu seperti: bersin-bersin, hidung tersumbat, yang disertai batuk tidak berdahak.', 'Dewasa & Anak > 12 tahun : 3 kali sehari 2 sendok takar (@10 ml). Anak 6-12 tahun : 3 kali sehari 1 sendok takar (@5 ml.). Anak 2-5 tahun : 3 kali sehari 0.5 sendok takar (@2.5 ml) .', 'Penyakit saluran napas bawah, termasuk asma. Glaukoma, hipertensi, diabetes, penyakit arteri koroner, terapi MAOI', 'Tremenza Sirup 60 ml 1', 'Blue', 'Peringatan : Awas, Obat Keras Bacalah Aturan Pakainya. Wanita hamil dan menyusui, anak usia kurang dari 2 tahun. Mempengaruhi kemampuan mengemudi atau mengoperasikan mesin yang disebabkan oleh rasa kantuk setelah penggunaan obat. Kategori kehamilan : Kategori C: Mungkin berisiko. Obat digunakan dengan hati-hati apabila besarnya manfaat yang diperoleh melebihi besarnya risiko terhadap janin. Penelitian pada hewan uji menunjukkan risiko terhadap janin dan belum terdapat penelitian langsung terhadap wanita hamil.', 'Mulut, hidung dan tenggorokan kering. Sedasi, pusing, gangguan koordinasi, tremor, insomnia, halusinasi, tinitus', 'Dus, Botol @ 60 ml', 'Dikonsumsi sebelum atau sesudah makan', 'Obat Kulit Luar', '2022-01-06 05:13:20', '2022-01-07 09:40:57'),
(8, 20, '20220107164107.product_01.png', '20000', 'qwe', 'qwe', '123', 'qwe', 'qwe', 'qwe', 'qwe', 'Test Edit Obat', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'Mata', '2022-01-07 06:07:09', '2022-01-07 09:41:07'),
(9, 1, '20220107164115.product_01.png', '1000000', 'Obat ini coba coba aja ya', 'Obat ini coba coba aja ya', '123456789', 'Obat ini coba coba aja ya', 'Obat ini coba coba aja ya', 'Obat ini coba coba aja ya', 'Obat ini coba coba aja ya', 'Obat ini coba coba aja ya', 'Obat ini coba coba aja ya', 'Obat ini coba coba aja ya', 'Obat ini coba coba aja ya', 'Obat ini coba coba aja ya', 'Obat ini coba coba aja ya', 'Mulut & Tenggorokan', '2022-01-07 06:08:22', '2022-01-07 09:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nama`, `email`, `nohp`, `password`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Inayah', 'inayahdwi07@gmail.com', '12345678', '12345', 'dimana saja asal aku hepi tubes selesai mau liburan plis ya allah :\'', '2022-01-06 09:20:37', '2022-01-06 09:20:37'),
(3, 'Firenze Sukmaning Diefta', 'jj@gmail.com', '12345678', '123', 'qwertyuiop', '2022-01-09 02:42:42', '2022-01-09 02:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesananlayanans`
--

CREATE TABLE `pesananlayanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelanggan_id` bigint(20) UNSIGNED NOT NULL,
  `dokter_id` bigint(20) UNSIGNED NOT NULL,
  `waktuperiksa` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesananlayanans`
--

INSERT INTO `pesananlayanans` (`id`, `pelanggan_id`, `dokter_id`, `waktuperiksa`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-01-10', '2022-01-09 19:47:21', '2022-01-09 19:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelanggan_id` bigint(20) UNSIGNED NOT NULL,
  `obat_id` bigint(20) UNSIGNED NOT NULL,
  `totalbayar` int(11) NOT NULL,
  `metodeBayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `pelanggan_id`, `obat_id`, `totalbayar`, `metodeBayar`, `status`, `resi`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 190000, 'COD', 'Placed Order', '-', '2022-01-09 18:35:33', '2022-01-09 18:35:33'),
(2, 1, 1, 150000, 'COD', 'Placed Order', '-', '2022-01-09 18:38:26', '2022-01-09 18:38:26'),
(3, 1, 9, 2150000, 'COD', 'Placed Order', '-', '2022-01-09 18:38:54', '2022-01-09 18:38:54'),
(4, 1, 9, 2150000, 'COD', 'Placed Order', '-', '2022-01-09 18:41:18', '2022-01-09 18:41:18'),
(5, 1, 9, 2150000, 'COD', 'Placed Order', '-', '2022-01-09 18:44:29', '2022-01-09 18:44:29'),
(6, 1, 9, 2150000, 'COD', 'Placed Order', '-', '2022-01-09 18:44:46', '2022-01-09 18:44:46'),
(7, 1, 8, 70000, 'COD', 'Placed Order', '-', '2022-01-09 18:45:19', '2022-01-09 18:45:19'),
(8, 1, 8, 95000, 'COD', 'Placed Order', '-', '2022-01-09 18:46:35', '2022-01-09 18:46:35'),
(9, 1, 1, 75000, 'COD', 'Placed Order', 'BDG23567890', '2022-01-09 18:46:43', '2022-01-09 18:46:43'),
(10, 1, 1, 65000, 'COD', 'Placed Order', '-', '2022-01-09 18:49:39', '2022-01-09 18:49:39'),
(11, 1, 8, 40000, 'COD', 'Placed Order', '-', '2022-01-09 18:50:04', '2022-01-09 18:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dokter_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `karyawan_email_unique` (`email`);

--
-- Indexes for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjang_pelanggan_type_pelanggan_id_index` (`pelanggan_id`),
  ADD KEY `keranjang_obat_type_obat_id_index` (`obat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelanggan_email_unique` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesananlayanans`
--
ALTER TABLE `pesananlayanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesananlayanans_pelanggan_type_pelanggan_id_index` (`pelanggan_id`),
  ADD KEY `pesananlayanans_dokter_type_dokter_id_index` (`dokter_id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_pelanggan_type_pelanggan_id_index` (`pelanggan_id`),
  ADD KEY `transaksi_obat_type_obat_id_index` (`obat_id`);

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
-- AUTO_INCREMENT for table `dokters`
--
ALTER TABLE `dokters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `obats`
--
ALTER TABLE `obats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesananlayanans`
--
ALTER TABLE `pesananlayanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD CONSTRAINT `keranjangs_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjangs_ibfk_2` FOREIGN KEY (`obat_id`) REFERENCES `obats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksis_ibfk_2` FOREIGN KEY (`obat_id`) REFERENCES `obats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
