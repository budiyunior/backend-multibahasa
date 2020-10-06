-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2020 pada 08.30
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webprofile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_setup`
--

CREATE TABLE `t_setup` (
  `ID` int(11) NOT NULL,
  `fc_param` char(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fc_kode` char(3) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fc_isi_id` char(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `fc_isi_en` char(200) DEFAULT NULL,
  `fc_isi_jp` text CHARACTER SET cp932
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

--
-- Dumping data untuk tabel `t_setup`
--

INSERT INTO `t_setup` (`ID`, `fc_param`, `fc_kode`, `fc_isi_id`, `fc_isi_en`, `fc_isi_jp`) VALUES
(1, 'Menu1', 'A', 'Beranda', 'Home', 'ホームページ'),
(2, 'Menu2', 'A', 'Profil', 'Profile', 'プロフィール'),
(3, 'Menu3', 'A', 'Foto', 'Gallery', '写真'),
(4, 'Menu4', 'A', 'Kontak', 'Contact', 'お問い合わせ'),
(5, 'Menu5', 'A', 'Portofolio', 'Portfolio', 'ポートフォリオ'),
(131, 'Login1', 'B', 'Login', 'Login', 'ログインする'),
(132, 'Login2', 'B', 'Selamat Datang! Silahkan daftarkan dirimu bila ber...', '\r\nWelcome! Please confirm that you are visiting', 'ようこそ！ あなたが訪問していることを確認してください');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_setup`
--
ALTER TABLE `t_setup`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_setup`
--
ALTER TABLE `t_setup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
