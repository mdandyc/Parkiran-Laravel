-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Feb 2017 pada 11.53
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkiran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '', 'admin@admin.com', '$2y$10$Mw8nUg.r3Kfp5urE5jXcGeobpCyko5Q4jawjwk9Ghv9I1Pquz8/ky', 'mI2pUSYkcsjpiGsFLwTNoe3gUeFDLUKqYmLgoKq2LFrEApGfqmsLJjgy3aHO', '2017-02-15 03:07:51', '2017-02-15 03:07:51'),
(2, 'VBRGaming', 'dandycc', 'dandyforze123@outloaok.com', '$2y$10$ruPOZFayz2K3TMcTWmI9B.8mE1MPf5CJitixDfdfob9cpnhbuQXzG', 'oLqDS0Okd3gne7Rq8nDNkyj2J5BEplnILH7nDGB7oVXKxrpOq6K7w2JmqCyP', '2017-02-15 03:17:51', '2017-02-15 03:17:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(10) UNSIGNED NOT NULL,
  `plat_nomer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `plat_nomer`, `jam_masuk`, `jam_keluar`, `created_at`, `updated_at`) VALUES
(1, 'D84984EF', '08:39:32', '10:24:32', '2017-02-15 02:08:57', '2017-02-15 02:08:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2017_02_12_023335_create_kendaraan_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Dandy C', '', 'dandyforze@gmail.com', '$2y$10$KU/8zXqUNvaJU6H/GwwTz.B/bBQaKXKfajcCmVtYNlnlhrXGPDjkC', 'member', 'z8KcRaXVmHQWHqrvNmHZjGdOoUHsPsOjmhdQ3NolfTgZX94Hw4tgrk9T4Les', '2017-02-13 00:39:11', '2017-02-13 00:39:11'),
(2, 'Agan Toya', '', 'dandyforze@outlook.com', '$2y$10$srmvBzLWuy3gZLlo3fylx.BworBOsX3uRJUWXxQSQaAT4TKhvqnea', 'member', '1TKTuIeSF78ZLNHmQYZvs5PUVnPxbsCAY0Mh6XkZTmPZffgYfbHDhpDsglNs', '2017-02-13 01:23:31', '2017-02-13 01:23:31'),
(3, 'Toyato', '', 'agantoya@gmail.com', '123123asd', 'admin', NULL, NULL, NULL),
(4, 'Dandy Admin', '', 'admin@gmail.com', 'admin', 'member', NULL, NULL, NULL),
(5, 'Muhammad Dandy C', 'dandyc', 'dandyforze123@outlook.com', '$2y$10$40RN8Nn70x0pRn61YjcbvedyR0p0LD5QpA6LDUQZW6YltooJhK0vK', 'member', 'VRmcSkX0AAS35VdlzoLcZ0FCx5PPUIxoVFKBWPUSodYF40U3v3D4jWDQ5KDf', '2017-02-15 01:35:24', '2017-02-15 01:35:24'),
(6, '123', '123123', '123@123.com', '$2y$10$SXkZJc6/i/cQ6gEliqpLMelruPQ.3/YmUhxagML3gVVoE72Lbb0G2', 'member', 'JqJbrIXTd4yw23o9f3PRjgYxpBF2pFBonEsMDw5oXUnJnyzyP6rGiYkFemgM', '2017-02-15 01:39:22', '2017-02-15 01:39:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
