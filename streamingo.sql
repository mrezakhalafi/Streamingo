-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2022 pada 09.14
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streamingo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` varchar(900) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `videos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `movies`
--

INSERT INTO `movies` (`id`, `nama`, `deskripsi`, `foto`, `videos`) VALUES
(1, 'Black Widow (2021)', 'Black Widow adalah film pahlawan super Amerika Serikat tahun 2021 yang didasarkan dari karakter Marvel Comics bernama sama. Film ini diproduksi Marvel Studios dan disalurkan Walt Disney Studios Motion Pictures. Film ini adalah film ke-24 Marvel Cinematic Universe (MCU). Film ini disutradarai Cate Shortland, ditulis Jac Schaeffer dan Ned Benson, serta dibintangi Scarlett Johansson, David Harbour, Florence Pugh, O-T Fagbenle, dan Rachel Weisz. Film ini dijadwalkan akan ditayangkan di Amerika Serikat pada 7 Mei 2021 dan Indonesia dua hari sebelumnya.', 'blackwidow.png', 'blackwidow.mp4'),
(2, 'Tom And Jerry (2021)', 'Salah satu persaingan paling dicintai dalam sejarah muncul kembali ketika Jerry pindah ke hotel terbaik di New York City pada malam \"pernikahan abad ini\", memaksa perencana acara yang putus asa untuk mempekerjakan Tom untuk menyingkirkannya. Pertarungan kucing dan tikus yang terjadi selanjutnya mengancam untuk menghancurkan karirnya, pernikahan dan mungkin hotel itu sendiri. Tapi segera, masalah yang lebih besar muncul: seorang staf yang sangat ambisius berkonspirasi melawan mereka bertiga.', 'tomandjerry.jpeg', 'tomandjerry.mp4'),
(3, 'The Suicide Squad (2021)', 'The Suicide Squad, juga dikenal dengan Suicide Squad 2, adalah film pahlawan super Amerika Serikat tahun 2021 yang didasarkan dari tim antipahlawan DC Comics Suicide Squad. Film ini dimaksudkan sebagai sekuel berdiri sendiri dari Suicide Squad (2016) dan juga menjadi film kesebelas di DC Extended Universe (DCEU). Film ini ditulis dan disutradarai James Gunn serta dibintangi kelompok pemeran yang terdiri dari Margot Robbie, Viola Davis, Joel Kinnaman, Jai Courtney, David Dastmalchian, Daniela Melchior, dan Steve Agee. The Suicide Squad dijadwalkan ditayangkan pada 6 Agustus 2021 di Amerika Serikat.', 'thesuicidesquad.jpg', 'thesuicidesquad.mp4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mp`
--

CREATE TABLE `mp` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `movies_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mp`
--

INSERT INTO `mp` (`id`, `package_id`, `movies_id`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 2, 3),
(4, 3, 2),
(5, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `desksripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `package`
--

INSERT INTO `package` (`id`, `nama`, `desksripsi`) VALUES
(1, 'Regular', 'Tom & Jerry'),
(2, 'Premium Red', 'Black Widow, The Suicide Squad'),
(3, 'Premium Blue', 'Tom & Jerry, The Suicide Squad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `package_id`) VALUES
(1, 'User A', 'usera@gmail.com', '$2y$10$xXOFsVKQOG8Lrm1x96BoEusTVmfe2JlgdbP/ihD4fEa/Asbxh..ba', 2),
(2, 'User B', 'userb@gmail.com', '$2y$10$xXOFsVKQOG8Lrm1x96BoEusTVmfe2JlgdbP/ihD4fEa/Asbxh..ba', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mp`
--
ALTER TABLE `mp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mp`
--
ALTER TABLE `mp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
