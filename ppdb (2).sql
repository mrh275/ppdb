-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2021 pada 02.15
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_pendaftar`
--

CREATE TABLE `biodata_pendaftar` (
  `id` int(11) NOT NULL,
  `no_daftar` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `anak_ke_berapa` int(2) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `no_akte` varchar(25) NOT NULL,
  `agama` int(2) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `dusun` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `pos` int(6) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `tempat_tinggal` int(2) NOT NULL,
  `transportasi` int(2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata_pendaftar`
--

INSERT INTO `biodata_pendaftar` (`id`, `no_daftar`, `nama`, `jenis_kelamin`, `nisn`, `asal_sekolah`, `nik`, `no_kk`, `anak_ke_berapa`, `tempat_lahir`, `tanggal_lahir`, `no_akte`, `agama`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `pos`, `kota`, `tempat_tinggal`, `transportasi`, `created_at`, `updated_at`) VALUES
(1, 'ppdb-21001', 'Muhamad Ramdani Hidayatullah', 'L', '3053874347', 'MTsN Jatisari', '2147483647', '2147483647', 1, 'Subang', '1997-01-30', '321sfe', 1, 'Jl. Raya Jatisari', 10, 8, 'Kertajaya', 'Balonggandu', 'Jatisari', 41374, 'Karawang', 2, 2, '2021-04-26 07:33:38', NULL),
(2, 'ppdb-21001', 'Muhamad Ramdani Hidayatullah', 'L', '3053874347', 'SMPN 1 Jatisari', '2147483647', '2147483647', 1, 'Subang', '1997-01-30', '321sfe', 1, 'Jl. Raya Jatisari', 10, 8, 'Kertajaya', 'Balonggandu', 'Jatisari', 41374, 'Karawang', 2, 2, '2021-04-26 07:33:40', NULL),
(3, 'ppdb-21002', 'Muhamad Ramdani Hidayatullah', 'L', '9758921080', 'SMPN 2 Jatisari', '2147483647', '2147483647', 1, 'Karawang', '1997-01-30', '321sfe', 1, 'Jl. Raya Jatisari', 10, 8, 'Kertajaya', 'Balonggandu', 'Jatisari', 41374, 'Karawang', 1, 2, '2021-04-26 07:36:47', NULL),
(4, 'ppdb-21006', 'Keukeu Meilani Dwi Yanti', 'P', '0037510343', 'SMPN 1 Banyusari', '3215186905040001', '3215140607070010', 2, 'Karawang', '2002-05-29', '321sfe', 1, 'Jl. Raya Jatisari', 10, 8, 'Kertajaya', 'Cirejag', 'Jatisari', 41374, 'Karawang', 1, 2, '2021-04-26 07:38:41', NULL),
(5, 'ppdb-21003', 'Muhamad Ramdani Hidayatullah', 'L', '0024435321', 'MTsN JATISARI', '3215186905040001', '3215140607070010', 1, 'Karawang', '2021-05-04', '321sfe', 1, 'Jl. Raya Jatisari', 10, 8, 'Kertajaya', 'Balonggandu', 'Jatisari', 41374, 'Karawang', 1, 1, '2021-05-04 11:01:17', NULL),
(6, 'ppdb-21005', 'Yunita Shara', 'P', '3053874347', 'SMPN 1 Jatisari', '3215206708880002', '3215140607070010', 1, 'Karawang', '2021-05-05', '321sfe', 1, 'Jl. Raya Jatisari', 10, 8, 'Kertajaya', 'Balonggandu', 'Jatisari', 41374, 'Karawang', 1, 1, '2021-05-04 13:55:37', NULL),
(7, 'ppdb-21005', 'Yunita Shara', 'P', '3053874347', 'SMPN 1 Jatisari', '3215206708880002', '3215140607070010', 1, 'Karawang', '2021-05-05', '321sfe', 1, 'Jl. Raya Jatisari', 10, 8, 'Kertajaya', 'Balonggandu', 'Jatisari', 41374, 'Karawang', 1, 1, '2021-05-04 13:56:46', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ayah`
--

CREATE TABLE `data_ayah` (
  `id` int(11) NOT NULL,
  `no_regis` varchar(10) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `tahun_lahir_ayah` int(4) NOT NULL,
  `pendidikan_ayah` int(2) NOT NULL,
  `pekerjaan_ayah` int(2) NOT NULL,
  `penghasilan_ayah` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ayah`
--

INSERT INTO `data_ayah` (`id`, `no_regis`, `nama_ayah`, `nik_ayah`, `tahun_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `created_at`, `updated_at`) VALUES
(1, '', 'Muhamad Ramdani Hidayatullah', '3215142607720001', 1972, 3, 1, 1, '2021-05-04 11:54:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ibu`
--

CREATE TABLE `data_ibu` (
  `id` int(11) NOT NULL,
  `no_regis` varchar(10) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `tahun_lahir_ibu` int(4) NOT NULL,
  `pendidikan_ibu` int(2) NOT NULL,
  `pekerjaan_ibu` int(2) NOT NULL,
  `penghasilan_ibu` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ibu`
--

INSERT INTO `data_ibu` (`id`, `no_regis`, `nama_ibu`, `nik_ibu`, `tahun_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `created_at`, `updated_at`) VALUES
(1, '', 'Muhamad Ramdani Hidayatullah', '3215142408740001', 1974, 2, 1, 1, '2021-05-04 11:54:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_periodik`
--

CREATE TABLE `data_periodik` (
  `id` int(11) NOT NULL,
  `no_regis` varchar(10) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `nopes_un` varchar(255) NOT NULL,
  `no_ijazah` varchar(20) NOT NULL,
  `no_skhun` varchar(20) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `cita_cita` varchar(255) NOT NULL,
  `jarak_rumah` int(10) NOT NULL,
  `waktu_tempuh` int(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_periodik`
--

INSERT INTO `data_periodik` (`id`, `no_regis`, `asal_sekolah`, `nopes_un`, `no_ijazah`, `no_skhun`, `tinggi_badan`, `berat_badan`, `hobi`, `cita_cita`, `jarak_rumah`, `waktu_tempuh`, `created_at`, `updated_at`) VALUES
(1, '', '2423', '', '', '', 231, 777, 'Rebahan', 'Jadi Sultan', 1000, 35, '2021-05-04 13:44:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wali`
--

CREATE TABLE `data_wali` (
  `id` int(11) NOT NULL,
  `no_regis` varchar(10) NOT NULL,
  `nama_wali` varchar(255) NOT NULL,
  `nik_wali` varchar(16) NOT NULL,
  `tahun_lahir_wali` int(4) NOT NULL,
  `pendidikan_wali` int(2) NOT NULL,
  `pekerjaan_wali` int(2) NOT NULL,
  `penghasilan_wali` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `slug_menu` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `url_menu` varchar(255) NOT NULL,
  `class_menu` varchar(255) NOT NULL,
  `menu_icon` varchar(255) NOT NULL,
  `has_submenu` varchar(255) NOT NULL,
  `drop_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `slug_menu`, `menu`, `url_menu`, `class_menu`, `menu_icon`, `has_submenu`, `drop_icon`) VALUES
(1, 'data-pendaftar', 'Data Pendaftar', '#', '', 'fas fa-users', 'has-treeview', 'right fas fa-angle-left'),
(2, 'validasi-pendaftar', 'Validasi Pendaftar', 'pendaftar/validasi-pendaftar', '', 'fas fa-user-check', '', ''),
(3, 'pengaturan', 'Pengaturan', '#', '', 'fas fa-cogs', 'has-treeview', 'fas fa-angle-left right');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(5) NOT NULL,
  `slug_submenu` varchar(255) NOT NULL,
  `submenu_name` varchar(255) NOT NULL,
  `url_submenu` varchar(255) NOT NULL,
  `submenu_icon` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`id`, `menu_id`, `slug_submenu`, `submenu_name`, `url_submenu`, `submenu_icon`, `active`) VALUES
(1, 1, 'tambah-pendaftar', 'Tambah Pendaftar', 'pendaftar/tambah-pendaftar', 'fas fa-user-plus nav-icon', 1),
(2, 1, 'data-pendaftar', 'Data Pendaftar', 'pendaftar/data-pendaftar', 'fas fa-user nav-icon', 1),
(3, 3, 'pengaturan-umum', 'Pengaturan Umum', 'pengaturan', 'fas fa-cog nav-icon', 1),
(4, 3, 'pengaturan-user', 'Pengaturan User', 'pengaturan/user', 'fas fa-user-cog nav-icon', 1),
(5, 3, 'user-level', 'User Level', 'pengaturan/user-level', 'fas fa-user-shield nav-icon', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata_pendaftar`
--
ALTER TABLE `biodata_pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ayah`
--
ALTER TABLE `data_ayah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ibu`
--
ALTER TABLE `data_ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_periodik`
--
ALTER TABLE `data_periodik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata_pendaftar`
--
ALTER TABLE `biodata_pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_ayah`
--
ALTER TABLE `data_ayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_ibu`
--
ALTER TABLE `data_ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_periodik`
--
ALTER TABLE `data_periodik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_wali`
--
ALTER TABLE `data_wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
