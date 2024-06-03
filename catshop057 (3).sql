-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Jun 2024 pada 04.58
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catshop057`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories057`
--

CREATE TABLE `categories057` (
  `category_id_057` int NOT NULL,
  `category_name_057` varchar(50) NOT NULL,
  `description_057` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `categories057`
--

INSERT INTO `categories057` (`category_id_057`, `category_name_057`, `description_057`) VALUES
(1, 'Persian', 'The Persian cat, also known as the Persian Longhair, is a long-haired breed of cat characterised by a round face and short muzzle.'),
(2, 'Angora', 'The Turkish Anggora (Turkish: Ankara kedisi, \'ankara cat\') is one of the oldest natural domestic cat breeds.'),
(3, 'Domestik', 'domestic cat or house cat (scientific name: Felis silvestris catus or Felis catus), is a carnivorous mammal of the Felidae family.'),
(4, 'Sphynx', 'The Sphynx cat (pronounced SFINKS, /ˈsfɪŋks/) also known as the Canadian Sphynx, is a breed of cat known for its lack of fur.'),
(5, 'Russian Blue', 'The Russian Blue cat (Russian: Русская голубая кошка, romanized: Russkaya golubaya koshka), commonly referred to as just Russian Blue, is a cat breed with colors that vary from a light shimmering silv'),
(6, 'Maine Coon', 'The Maine Coon is a large domesticated cat breed. It is one of the oldest natural breeds in North America.'),
(8, 'Scottish Fold', 'Scottish Fold cats are one of the cat breeds known for their characteristic folded ears. This feature is caused by a genetic mutation that causes the cat\'s ears to fold forward and downward. Scottish ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cats057`
--

CREATE TABLE `cats057` (
  `id_057` int NOT NULL,
  `name_057` varchar(100) NOT NULL,
  `type_057` varchar(100) NOT NULL,
  `gender_057` varchar(10) NOT NULL,
  `age_057` int NOT NULL,
  `photo_057` varchar(200) NOT NULL DEFAULT 'default.png',
  `price_057` int NOT NULL,
  `sold_057` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `cats057`
--

INSERT INTO `cats057` (`id_057`, `name_057`, `type_057`, `gender_057`, `age_057`, `photo_057`, `price_057`, `sold_057`) VALUES
(1, 'Jack Ma', 'Angora', 'Male', 3, 'realistic-cat_11zon_(1)_11zon1.jpg', 250, 1),
(3, 'Hello Kitty', 'Angora', 'Female', 1, 'default.png', 175, 1),
(9, 'Whiskers', 'Domestik', 'Female', 4, 'default.png', 77, 1),
(10, 'Luna', 'Maine Coon', 'Female', 2, 'default.png', 199, 1),
(11, 'Mittenss', 'Angora', 'Male', 5, 'default.png', 98, 0),
(12, 'Oliver', 'Persian', 'Male', 6, 'default.png', 87, 0),
(13, 'Smokey', 'Russian Blue', 'Male', 9, 'default.png', 115, 0),
(14, 'Charlie', 'Domestik', 'Male', 7, 'default.png', 77, 0),
(15, 'Pepper', 'Persian', 'Male', 2, 'default.png', 55, 0),
(16, 'Ginger', 'Sphynx', 'Female', 4, 'default.png', 75, 0),
(17, 'Patches', 'Russian Blue', 'Male', 6, 'default.png', 130, 0),
(18, 'Tigger', 'Persian', 'Male', 5, 'default.png', 89, 0),
(19, 'Coco', 'Maine Coon', 'Female', 4, 'default.png', 145, 0),
(20, 'Simba', 'Persian', 'Male', 7, 'default.png', 99, 0),
(21, 'Yuki', 'Angora', 'Male', 3, 'default.png', 137, 0),
(22, 'Gus', 'Domestik', 'Male', 11, 'default.png', 42, 0),
(23, 'Garfield', 'Domestik', 'Male', 7, 'default.png', 200, 0),
(24, 'Marmalade', 'Maine Coon', 'Female', 5, 'default.png', 112, 0),
(25, 'Felix', 'Domestik', 'Male', 9, 'default.png', 127, 0),
(26, 'Sammy', 'Angora', 'Male', 4, 'default.png', 175, 0),
(27, 'Buster', 'Domestik', 'Male', 1, 'default.png', 25, 0),
(28, 'Shadow', 'Persian', 'Male', 5, 'default.png', 74, 0),
(29, 'Snowball', 'Russian Blue', 'Female', 2, 'default.png', 88, 0),
(30, 'Mochi', 'Angora', 'Male', 6, 'default.png', 66, 0),
(31, 'Mimi', 'Maine Coon', 'Female', 3, 'default.png', 76, 0),
(32, 'Pip', 'Sphynx', 'Male', 2, 'default.png', 33, 0),
(33, 'Binx', 'Sphynx', 'Male', 5, 'default.png', 55, 0),
(34, 'Aristocat', 'Persian', 'Male', 8, 'default.png', 65, 0),
(35, 'Cleocatra', 'Sphynx', 'Female', 3, 'default.png', 299, 0),
(36, 'Captain Whiskersworth', 'Angora', 'Male', 7, 'default.png', 247, 0),
(37, 'Lady Mittensworth III', 'Domestik', 'Female', 4, 'default.png', 111, 0),
(38, 'Professor Fluffington', 'Domestik', 'Male', 12, 'default.png', 168, 0),
(39, 'Sergeant Snuggles', 'Angora', 'Male', 5, 'default.png', 131, 0),
(40, 'General Cuddlesworth', 'Persian', 'Male', 7, 'default.png', 182, 0),
(41, 'Countess Fluffybottom', 'Maine Coon', 'Male', 2, 'default.png', 5, 0),
(42, 'Lord Meowsalot the Magnificent', 'Angora', 'Male', 4, 'default.png', 233, 0),
(43, 'Sir Reginald Scratchington', 'Domestik', 'Male', 6, 'default.png', 222, 0),
(44, 'Baroness Penelope Purrpaws', 'Angora', 'Male', 5, 'default.png', 223, 0),
(45, 'Sir Purrcival Pawsley', 'Persian', 'Male', 5, 'default.png', 234, 0),
(46, 'Lady Whiskersbottom the Third', 'Maine Coon', 'Female', 3, 'default.png', 241, 0),
(47, 'Princess Fluffytail', 'Russian Blue', 'Female', 2, 'default.png', 191, 0),
(48, 'Marmalade McFluffypants', 'Domestik', 'Female', 4, 'default.png', 201, 0),
(49, 'Duchess Penelope Purrkington', 'Maine Coon', 'Female', 6, 'default.png', 205, 0),
(50, 'Duchess Penelope Purrkington', 'Angora', 'Female', 3, 'default.png', 204, 0),
(51, 'Purrlock Holmes', 'Angora', 'Male', 7, 'default.png', 297, 0),
(52, 'William Shakespaw', 'Angora', 'Male', 7, 'default.png', 298, 0),
(53, 'Meow Vinci', 'Domestik', 'Male', 7, 'default.png', 296, 0),
(54, 'Meowhamed Ali', 'Persian', 'Male', 9, 'default.png', 299, 0),
(55, 'Albert Einsteinkatz', 'Angora', 'Male', 9, 'default.png', 300, 0),
(56, 'Queen Elizabeth the Feline', 'Angora', 'Female', 3, 'default.png', 296, 0),
(57, 'Daendels Catter', 'Angora', 'Male', 7, 'default.png', 279, 0),
(58, 'Napoleon Bonacat', 'Persian', 'Male', 9, 'default.png', 299, 0),
(59, 'Issac Cawton', 'Sphynx', 'Male', 7, 'default.png', 301, 0),
(60, 'Alexander Graham Catt', 'Maine Coon', 'Male', 12, 'default.png', 251, 0),
(61, 'Bubu', 'Angora', 'Male', 4, 'default.png', 55, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `catsales057`
--

CREATE TABLE `catsales057` (
  `sale_id_057` int NOT NULL,
  `sale_date_057` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_id_057` int NOT NULL,
  `customer_name_057` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `customer_address_057` varchar(200) NOT NULL,
  `customer_phone_057` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `catsales057`
--

INSERT INTO `catsales057` (`sale_id_057`, `sale_date_057`, `cat_id_057`, `customer_name_057`, `customer_address_057`, `customer_phone_057`) VALUES
(1, '2024-03-24 05:19:23', 3, 'Koko', 'Bandung', '08445563195'),
(2, '2024-03-24 05:20:58', 3, 'Koko', 'Bandung', '08445563195'),
(3, '2024-03-25 15:29:23', 2, 'Beni', 'Padang', '08996647316'),
(4, '2024-04-30 17:15:33', 10, 'Jejenk', 'Garut', '08996647432'),
(5, '2024-06-02 07:27:35', 1, '', '', ''),
(6, '2024-06-03 04:07:11', 9, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users057`
--

CREATE TABLE `users057` (
  `userid_057` int NOT NULL,
  `username_057` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password_057` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `usertype_057` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `fullname_057` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `photo_057` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users057`
--

INSERT INTO `users057` (`userid_057`, `username_057`, `password_057`, `usertype_057`, `fullname_057`, `photo_057`) VALUES
(1, 'tes123', '$2y$10$E98Q0JBhWp6C/kNFQorG3e5PBhZpAziOY88VIVnTAvpV82iqeBHCy', 'Manager', 'Tes', 'images.png'),
(2, 'Bedol123', '$2y$10$JB7BQLBuOvJBQFN5ETqqJeu07QrY7Sf1CqvuDD2G5l0NV6DVlr/vu', 'Cassier', 'Bedodo Jook', 'default.png'),
(3, 'tatank445', '$2y$10$A6QnrjYY7RtgBPwWjrHPDec6/Dxmn/uWbMQQT4rl5qIww9/4OvO4S', 'Manager', 'Tatang Suratang', 'default.png'),
(4, 'jasuke567', '$2y$10$eMHEbegDrpKfRvLidavOFuf8RH3maF6SUH5GjwQzWYWc4GgGigshG', 'Cassier', 'Jajang Sukma Keramat', 'yuga_azka_foto1.jpg'),
(5, 'azka123', '$2y$10$AEmLO96NXekU5AUDoKc/ru/iu2WVp33GrGo0PHZnEL91HOofO/Yre', 'Cassier', 'Azka', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories057`
--
ALTER TABLE `categories057`
  ADD PRIMARY KEY (`category_id_057`);

--
-- Indeks untuk tabel `cats057`
--
ALTER TABLE `cats057`
  ADD PRIMARY KEY (`id_057`);

--
-- Indeks untuk tabel `catsales057`
--
ALTER TABLE `catsales057`
  ADD PRIMARY KEY (`sale_id_057`);

--
-- Indeks untuk tabel `users057`
--
ALTER TABLE `users057`
  ADD PRIMARY KEY (`userid_057`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories057`
--
ALTER TABLE `categories057`
  MODIFY `category_id_057` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `cats057`
--
ALTER TABLE `cats057`
  MODIFY `id_057` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `catsales057`
--
ALTER TABLE `catsales057`
  MODIFY `sale_id_057` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users057`
--
ALTER TABLE `users057`
  MODIFY `userid_057` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
