-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 11:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlytro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(255) NOT NULL,
  `ten_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_admin` int(11) NOT NULL,
  `diachi_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `ten_admin`, `sdt_admin`, `diachi_admin`, `email_admin`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(2, 'Kim Thinh', 312, 'da', 'das', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `id_hd` int(10) UNSIGNED NOT NULL,
  `id_phong` int(11) UNSIGNED NOT NULL,
  `id_pttt` int(11) DEFAULT NULL,
  `soluong` int(255) NOT NULL,
  `id_gioithieu` int(11) NOT NULL,
  `diachi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dongia` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chi_tiet_hoa_don`
--

INSERT INTO `chi_tiet_hoa_don` (`id_hd`, `id_phong`, `id_pttt`, `soluong`, `id_gioithieu`, `diachi`, `dongia`, `created_at`, `updated_at`) VALUES
(203, 1, NULL, 2, 1, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú,TP.HCM', 2200000, NULL, NULL),
(203, 1, NULL, 1, 2, '31 Cống Lỡ,P.15,Q.Gò Vấp,TP.HCM', 2200000, NULL, NULL),
(205, 6, NULL, 1, 1, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú,TP.HCM', 1800000, NULL, NULL),
(206, 6, NULL, 1, 1, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú,TP.HCM', 1800000, NULL, NULL),
(207, 6, NULL, 1, 1, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú,TP.HCM', 1800000, NULL, NULL),
(208, 6, NULL, 1, 1, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú,TP.HCM', 1800000, NULL, NULL),
(209, 6, NULL, 1, 1, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú,TP.HCM', 1800000, NULL, NULL),
(210, 6, NULL, 1, 1, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú,TP.HCM', 1800000, NULL, NULL),
(211, 1, NULL, 1, 1, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú,TP.HCM', 2200000, NULL, NULL),
(212, 6, NULL, 1, 1, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú,TP.HCM', 1800000, NULL, NULL),
(213, 1, NULL, 2, 1, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú,TP.HCM', 2200000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dichvuchung`
--

CREATE TABLE `dichvuchung` (
  `id` int(11) NOT NULL,
  `tendichvu` varchar(2500) NOT NULL,
  `mota` varchar(2500) NOT NULL,
  `hinh` varchar(2550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dichvuchung`
--

INSERT INTO `dichvuchung` (`id`, `tendichvu`, `mota`, `hinh`) VALUES
(1, 'An Ninh', 'Được trang bị cammera quan sát 24/24 ', '1d0add9e0bb4faeaa3a529.jpg,1efed651007bf125a86a51.jpg,6801de9408bef9e0a0af28.jpg,8db2ab197d338c6dd52254.jpg'),
(2, 'Thang Máy', 'Toàn bộ đều dùng thang máy ', '4f660fc4d9ee28b071ff48.jpg,6ede7d72ab585a06034950.jpg,140b30aae68017de4e9146.jpg'),
(3, 'Giữ xe', 'Hầm giữ xe ra vào bằng vân tay', '62b1ddca08e0f9bea0f114.jpg,bac73d43eb691a37437816.jpg,52bfc7c512efe3b1bafe15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dieukiengiam`
--

CREATE TABLE `dieukiengiam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dieu_kien_giam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dieukiengiam`
--

INSERT INTO `dieukiengiam` (`id`, `dieu_kien_giam`, `created_at`, `updated_at`) VALUES
(1, 'Giảm theo %', NULL, NULL),
(2, 'Giảm theo tiền', NULL, NULL);

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
-- Table structure for table `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magiamgia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `diachi`, `tieude`, `noidung`, `anh`, `magiamgia`, `created_at`, `updated_at`) VALUES
(2, '31 Cống Lỡ,P.15,Q.Gò Vấp,TP.HCM', 'GIỚI THIỆU PHÒNG TRỌ', 'Dịch vụ cho thuê phòng trọ của chúng tôi với nhiều năm kinh nghiệm trong lĩnh vực kinh doanh phòng trọ. Hiện tại dịch vụ của chúng tôi đã xây dựng và phát triển được dãy phòng trọ đầu tiên: Hà Chinh 1 ở địa chỉ 31 Cống Lỡ,P.15,Q.Gò Vấp, TP.HCM.', '10486cfebad44b8a12c558.jpg,cf6340d796fd67a33eec57.jpg,IMG_0015.JPG', NULL, NULL, NULL),
(4, '17B Tân Trụ, P.15, Quận Tân Bình,TP.HCM', 'GIỚI THIỆU PHÒNG TRỌ', 'Dịch vụ cho thuê phòng trọ của chúng tôi với nhiều năm kinh nghiệm trong lĩnh vực kinh doanh phòng trọ. Hiện tại dịch vụ của chúng tôi đã xây dựng và phát triển được dãy phòng trọ THỨ 3: Hà Chinh 1 ở địa chỉ 17B Tân Trụ, P.15, Quận Tân Bình, TP.HCM.', 'b79a1b7ea254530a0a458.jpg,bc951b75a25f53010a4e10.jpg,IMG_0019.JPG', NULL, NULL, NULL),
(5, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú,TP.HCM', 'GIỚI THIỆU PHÒNG TRỌ', 'das', 'IMG_0024.JPG,IMG_0025.JPG', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hieu_ung`
--

CREATE TABLE `hieu_ung` (
  `id` int(10) UNSIGNED NOT NULL,
  `hieu_ung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hieu_ung`
--

INSERT INTO `hieu_ung` (`id`, `hieu_ung`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'Mặt định', 'On', NULL, '2021-01-05 11:31:10'),
(2, 'Tuyết rơi', 'Off', NULL, '2021-01-05 11:31:10'),
(3, 'Hoa mai rơi', 'Off', NULL, '2021-01-05 11:11:41'),
(4, 'Lá vàng rơi', 'Off', NULL, '2020-11-28 04:39:48'),
(5, 'Noel', 'Off', NULL, '2021-01-05 11:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id_hd` int(10) UNSIGNED NOT NULL,
  `id_tk` int(11) UNSIGNED NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_lap` datetime NOT NULL,
  `ngayden` datetime DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giamgia` int(255) NOT NULL,
  `tongtien` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id_hd`, `id_tk`, `diachi`, `ngay_lap`, `ngayden`, `ghichu`, `trangthai`, `giamgia`, `tongtien`, `created_at`, `updated_at`) VALUES
(203, 41, NULL, '2021-01-11 00:00:00', '2021-01-11 00:00:00', NULL, 'Chờ Xử Lý', 0, 6600000, NULL, NULL),
(205, 41, NULL, '2021-01-12 00:00:00', '2021-01-12 00:00:00', NULL, 'Chờ Xử Lý', 0, 1800000, NULL, NULL),
(206, 41, NULL, '2021-01-12 00:00:00', '2021-01-12 00:00:00', NULL, 'Chờ Xử Lý', 0, 1800000, NULL, NULL),
(207, 41, NULL, '2021-01-12 00:00:00', '2021-01-12 00:00:00', NULL, 'Chờ Xử Lý', 0, 1800000, NULL, NULL),
(208, 41, NULL, '2021-01-12 00:00:00', '2021-01-12 00:00:00', NULL, 'Chờ Xử Lý', 0, 1800000, NULL, NULL),
(209, 41, NULL, '2021-01-12 00:00:00', '2021-01-12 00:00:00', NULL, 'Chờ Xử Lý', 0, 1800000, NULL, NULL),
(210, 41, NULL, '2021-01-12 00:00:00', '2021-01-12 00:00:00', NULL, 'Chờ Xử Lý', 0, 1800000, NULL, NULL),
(211, 41, NULL, '2021-01-12 09:06:33', '2021-01-13 09:06:00', NULL, 'Chờ Xử Lý', 0, 2200000, NULL, NULL),
(212, 41, NULL, '2021-01-12 09:07:26', '2021-01-12 00:07:00', NULL, 'Chờ Xử Lý', 0, 1800000, NULL, NULL),
(213, 41, NULL, '2021-01-12 16:02:44', '2021-01-12 09:28:00', NULL, 'Chờ Xử Lý', 0, 4400000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(255) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_kh` int(11) NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi_kh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_kh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `tenkh`, `sdt_kh`, `anh`, `diachi_kh`, `gioitinh`, `email_kh`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(29, 'Thịnh', 703150380, NULL, NULL, 'Nam', 'dongkimthinh123@gmail.com', NULL, '2021-01-07 12:01:40', '2021-01-07 12:01:40'),
(31, 'Sanh', 703150380, NULL, NULL, 'Nam', 'dongkimthinh123@gmail.com', NULL, '2021-01-07 12:09:43', '2021-01-07 12:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `loai_phong`
--

CREATE TABLE `loai_phong` (
  `id_loai_phong` int(10) UNSIGNED NOT NULL,
  `ten_loai_phong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthietbi` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai_phong`
--

INSERT INTO `loai_phong` (`id_loai_phong`, `ten_loai_phong`, `trangthietbi`, `created_at`, `updated_at`) VALUES
(1, 'Phòng Cao Cấp', 'Điều hòa,Ti Vi,Tủ lạnh,Máy Giặt,Máy Lạnh,Wifi', '2020-11-13 15:45:46', '2020-12-01 19:38:51'),
(2, 'Phòng Chuẩn', 'Điều hòa,Ti Vi,Tủ lạnh,Máy Giặt', '2020-11-13 15:45:46', '2020-11-29 20:23:47'),
(3, 'Phòng Trung', 'Điều hòa,Ti Vi', '2020-11-13 15:48:14', '2020-12-02 02:49:11'),
(4, 'Phòng Thường', 'Điều hòa,Ti Vi', '2020-11-13 15:48:14', '2020-12-05 04:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `magiamgia`
--

CREATE TABLE `magiamgia` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_ma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magiamgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `dieu_kien_giam` bigint(255) UNSIGNED NOT NULL,
  `gia_giam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magiamgia`
--

INSERT INTO `magiamgia` (`id`, `ten_ma`, `magiamgia`, `soluong`, `dieu_kien_giam`, `gia_giam`, `created_at`, `updated_at`) VALUES
(1, 'Giảm giá 20k', '73mpLO1F3f', 10, 2, '200000', '2020-12-21 05:49:32', '2020-12-21 10:28:15'),
(3, 'Giảm giá Covid', 'gjHqTz9bnG', 10, 1, '5', '2020-12-21 10:37:49', '2020-12-21 10:37:49'),
(4, 'Giảm giá 20k', 'iQ0b4LnvSb', 10, 1, '12', '2020-12-21 13:42:22', '2020-12-21 13:42:22');

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
(4, '2020_11_04_092829_thinh_create_slide', 1),
(5, '2020_11_08_064121_thinh_create_taikhoan', 2),
(6, '2020_11_08_064320_thinh_create_khachhang', 3),
(7, '2020_11_08_065825_thinh_create_admin', 4),
(8, '2020_11_08_070756_thinh_create_taikhoan', 5),
(9, '2020_11_08_070957_thinh_create_khachhang', 6),
(10, '2020_11_09_075051_thinh_create_taikhoan', 7),
(11, '2020_11_09_081244_thinh_create_taikhoan', 8),
(12, '2020_11_09_081415_thinh_create_admin', 9),
(13, '2020_11_09_081925_thinh_create_khachhang', 10),
(14, '2020_11_13_061252_thinh_create_pt_thanh_toan', 11),
(15, '2020_11_13_061721_thinh_create_chi_tiet_hoa_don', 12),
(16, '2020_11_13_062341_thinh_create_hoa_don', 13),
(17, '2020_11_13_063024_thinh_create_tin_tuc', 14),
(18, '2020_11_13_063520_thinh_create_trang_thiet_bi', 15),
(19, '2020_11_13_063636_thinh_create_loai_phong', 16),
(20, '2020_11_13_063816_thinh_create_phong', 17),
(21, '2020_11_27_181444_thinh_create_hieuung', 18),
(22, '2020_12_21_115121_thinh_create_magiamgia', 19),
(23, '2020_12_21_194750_create_dieukiengiam', 20),
(24, '2020_12_29_165538_create_gioithieu', 21);

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `ip` varchar(1000) NOT NULL,
  `os` varchar(1000) NOT NULL,
  `ngay` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`id`, `link`, `ip`, `os`, `ngay`) VALUES
(1, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:11:17'),
(2, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:11:17'),
(3, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:11:17'),
(4, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:12:17'),
(5, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:12:17'),
(6, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:12:17'),
(7, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:13:17'),
(8, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:13:17'),
(9, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:13:17'),
(10, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:14:17'),
(11, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:14:17'),
(12, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:14:17'),
(13, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:15:17'),
(14, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:15:17'),
(15, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:15:17'),
(16, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:16:17'),
(17, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:16:17'),
(18, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:16:17'),
(19, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:17:17'),
(20, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:17:17'),
(21, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:17:17'),
(22, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:18:17'),
(23, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:18:17'),
(24, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:18:17'),
(25, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:19:17'),
(26, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:19:17'),
(27, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:19:17'),
(28, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:20:17'),
(29, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:20:17'),
(30, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:20:17'),
(31, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:21:17'),
(32, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:21:17'),
(33, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:21:17'),
(34, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:22:17'),
(35, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:22:17'),
(36, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:22:17'),
(37, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:23:17'),
(38, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:23:17'),
(39, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:23:17'),
(40, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:24:17'),
(41, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:24:17'),
(42, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:24:17'),
(43, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:25:17'),
(44, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:25:17'),
(45, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:25:17'),
(46, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:26:17'),
(47, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:26:17'),
(48, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:26:17'),
(49, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:27:17'),
(50, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:27:17'),
(51, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:27:17'),
(52, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:28:17'),
(53, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:28:17'),
(54, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:28:17'),
(55, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:29:17'),
(56, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:29:17'),
(57, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:29:17'),
(58, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:30:17'),
(59, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:30:17'),
(60, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:30:17'),
(61, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:31:17'),
(62, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:31:17'),
(63, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:31:17'),
(64, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:32:17'),
(65, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:32:17'),
(66, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:32:17'),
(67, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:33:26'),
(68, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:33:26'),
(69, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:33:26'),
(70, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:34:26'),
(71, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:34:26'),
(72, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:34:26'),
(73, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:35:26'),
(74, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:35:26'),
(75, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:35:26'),
(76, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:36:26'),
(77, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:36:26'),
(78, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:36:26'),
(79, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:37:26'),
(80, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:37:26'),
(81, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:37:26'),
(82, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:38:26'),
(83, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:38:26'),
(84, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:38:26'),
(85, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:39:26'),
(86, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:39:26'),
(87, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:39:26'),
(88, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:40:26'),
(89, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:40:26'),
(90, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:40:26'),
(91, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:41:26'),
(92, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:41:26'),
(93, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:41:26'),
(94, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:42:26'),
(95, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:42:26'),
(96, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:42:26'),
(97, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:43:26'),
(98, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:43:26'),
(99, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:43:26'),
(100, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:44:26'),
(101, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:44:26'),
(102, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:44:26'),
(103, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:45:26'),
(104, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:45:26'),
(105, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:45:26'),
(106, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:46:26'),
(107, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:46:26'),
(108, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:46:26'),
(109, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:47:26'),
(110, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:47:26'),
(111, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:47:26'),
(112, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:48:26'),
(113, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:48:26'),
(114, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:48:26'),
(115, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:49:26'),
(116, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:49:26'),
(117, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:49:26'),
(118, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:50:26'),
(119, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:50:26'),
(120, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:50:26'),
(121, 'http://localhost/quanlytro/online', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:51:26'),
(122, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:51:26'),
(123, 'http://localhost/quanlytro/register', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', '2021-01-13 13:51:26');

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
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id_phong` int(10) UNSIGNED NOT NULL,
  `id_loai_phong` int(11) UNSIGNED DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `songuoi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dientich` float DEFAULT NULL,
  `mota` varchar(2550) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_phong` varchar(2550) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id_phong`, `id_loai_phong`, `gia`, `songuoi`, `dientich`, `mota`, `hinh_phong`, `soluong`, `created_at`, `updated_at`) VALUES
(1, 1, 2200000, '2 người lớn-2 trẻ em', 40, 'Phòng rộng rãi, đẹp, đầy đủ tiện nghi cao cấp, có cửa sổ rộng  và ban công rộng, không khí trong lành, thoải mái, ở trên cao nên rất yên tĩnh .Nội thất: Tivi, internet cáp quang băng thông quốc tế, truyền hình cáp, WC riêng, máy lạnh, tủ lạnh, máy nước nóng, giường nệm, tủ đựng đồ, máy giặt, quạt,gác lững, bàn làm việc….Có camera quan sát 24/24, đảm bảo an toàn.Có thang mái rộng rải, mát mẽ, an toàn.Có nhà giữ xe rộng rãi , thoải mái và an toàn.Giờ giấc : 23h đóng cửa.Xung quang có nhiều tiện ích, gần chợ, siêu thị, các trường ĐH, dưới nhà có AEONMart,..', '1aa42e38f812094c5003.jpg,95f81869ce433f1d6652.jpg,96a85235841f75412c0e.jpg,538fca2b1c01ed5fb410.jpg', 87, '2020-11-13 15:49:24', '2021-01-10 08:44:49'),
(6, 2, 1800000, '2 ngưới lớn - 0 trẻ em', 30, 'Phòng rộng, đẹp, đầy đủ tiện nghi , có cửa sổ và ban công, không khí trong lành, thoải mái, ở trên cao nên yên tĩnh.Nội thất:  internet cáp quang băng thông quốc tế, WC riêng, máy lạnh, tủ lạnh, giường nệm, tủ đựng đồ, máy giặt, quạt, gác lững, bàn làm việc….Có camera quan sát 24/24, đảm bảo an toàn.Có thang mái rộng rải, mát mẽ, an toàn.Có nhà giữ xe rộng rãi , thoải mái và an toàn.Giờ giấc : 23h đóng cửa.Xung quang có nhiều tiện ích, gần chợ, siêu thị, các trường ĐH, dưới nhà có AEONMart,..', '1aa42e38f812094c5003.jpg,538fca2b1c01ed5fb410.jpg,698a2c11fa3b0b65522a.jpg,007444ee92c4639a3ad5.jpg', 79, '2020-11-13 15:53:52', '2021-01-10 09:33:20'),
(71, 4, 1800000, '2 người lớn - 2 trẻ em', 20, 'Phòng rộng, đẹp, đầy đủ tiện nghi , có cửa sổ và ban công, không khí trong lành, thoải mái.Nội thất:  internet cáp quang băng thông quốc tế, WC riêng, quạt, bếp nhỏ nhắn xinh xắn, bàn làm việc, gác lững….Có camera quan sát 24/24, đảm bảo an toàn.Có thang mái rộng rải, mát mẽ, an toàn.Có nhà giữ xe rộng rãi , thoải mái và an toàn.Giờ giấc : 23h đóng cửa.Xung quang có nhiều tiện ích, gần chợ, siêu thị, các trường ĐH, dưới nhà có AEONMart,..', 'c0a3a53c73168248db07.jpg,cfc34264944e65103c5f.jpg,d9bc552f8305725b2b14.jpg,e6fda8637e498f17d658.jpg', 100, '2020-11-27 04:12:54', '2021-01-10 09:33:27'),
(78, 3, 1800000, '2 người lớn - 0 trẻ em', 25, 'Phòng rộng, đẹp, đầy đủ tiện nghi , có cửa sổ và ban công, không khí trong lành, thoải mái,...Nội thất:  internet cáp quang băng thông quốc tế, WC riêng, tủ lạnh, quạt, bếp khá rộng, bàn làm việc, gác lững khá rộng,….Có camera quan sát 24/24, đảm bảo an toàn.Có thang mái rộng rải, mát mẽ, an toàn.Có nhà giữ xe rộng rãi , thoải mái và an toàn.Giờ giấc : 23h đóng cửa.Xung quang có nhiều tiện ích, gần chợ, siêu thị, các trường ĐH, dưới nhà có AEONMart,..', '96a85235841f75412c0e.jpg,538fca2b1c01ed5fb410.jpg,698a2c11fa3b0b65522a.jpg,007444ee92c4639a3ad5.jpg', 38, '2021-01-08 02:55:16', '2021-01-08 02:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `pt_thanhtoan`
--

CREATE TABLE `pt_thanhtoan` (
  `id_pttt` int(12) NOT NULL,
  `ten_pttt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `tieude`, `noidung`, `anh`, `created_at`, `updated_at`) VALUES
(1, '18 Nguyễn Sáng,P.Tây Thạnh,Q.Tân Phú', 'Với hệ thống gửi xe ra vào bảo mật,sử dụng thang máy.....', 'IMG_0024.JPG', NULL, '2021-01-07 11:21:57'),
(3, '17B Tân Trụ', 'asdasd', 'IMG_0019.JPG', '2020-12-03 03:50:44', '2021-01-07 11:26:22'),
(6, '31 Cống Lỡ,P.15,Q.Gò Vấp', 'dahdashkjda', 'test2.jpg', '2020-12-05 07:11:14', '2021-01-07 11:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(255) UNSIGNED NOT NULL,
  `id_ad` int(255) DEFAULT NULL,
  `id_kh` int(255) DEFAULT NULL,
  `ten_tk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `id_ad`, `id_kh`, `ten_tk`, `password`, `quyen`, `remember_token`, `created_at`, `updated_at`) VALUES
(39, 2, NULL, 'admin', '$2y$10$mF1N59g.Im0gXaKy5kENu.5ElhhaqZkXViy/8ZFDd1QkSe6pzqYaK', 'Admin', NULL, '2020-11-12 10:07:50', '2020-11-12 10:07:50'),
(41, NULL, 29, 'dongkimthinh', '$2y$10$uUFOojwIQouk3E8bvsOy9Ox.7veDrByyOlqvbh5yMt4Q3NtMlj.v6', 'Khách hàng', NULL, '2021-01-07 12:01:40', '2021-01-07 12:01:40'),
(43, NULL, 31, 'Sanh123', '$2y$10$oQdSei80MPxnGpLjvb.gnOAZzdmoiMkdq.C6sf6ZIvj/aV7ve/S7e', 'Khách hàng', NULL, '2021-01-07 12:09:43', '2021-01-07 12:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id_tin` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung_tt` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh_tin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `tacgia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`id_tin`, `tieude`, `noidung_tt`, `noidung`, `hinh_anh_tin`, `ngaydang`, `tacgia`, `created_at`, `updated_at`) VALUES
(6, 'Tổng hợp các ý tưởng trang trí Tết Tân Sửu độc đáo hút tài lộc vào nhà', 'Tết Tân Sửu đang đến gần, người người nhà nhà lại chuẩn bị dọn dẹp trang hoàng lại nhà cửa để đón Tết. Bạn đã có ý tưởng gì để trang trí cho tổ ấm của mình chưa? Hãy để Homedy gợi những cho bạn những ý tưởng trang trí Tết đẹp, độc đáo, đơn giản có ý nghĩa phong thủy cao hút tài, hút lộc vào nhà nhé!', '<p>Trong quan niệm của người Việt Nam, để một năm mới đến mang theo nhiều điều may mắn th&igrave; việc gột rửa sạch sẽ v&agrave; trang ho&agrave;ng nh&agrave; cửa để đ&oacute;n tết l&agrave; điều v&ocirc; c&ugrave;ng quan trọng. C&ugrave;ng kh&aacute;m ph&aacute; &yacute; nghĩa của &ldquo;c&ocirc;ng việc&rdquo; n&agrave;y v&agrave; những &yacute; tưởng trang ho&agrave;ng nh&agrave; của hot nhất 2021 nh&eacute;!</p>\r\n\r\n<h2>1. &Yacute; nghĩa truyền thống của những vật trang tr&iacute; Tết</h2>\r\n\r\n<p>B&aacute;nh chưng xanh, c&agrave;nh hoa tươi v&agrave; c&acirc;u đối đỏ l&agrave; những vật đặc trưng quen thuộc kh&ocirc;ng thể thiếu trong nh&agrave; của mỗi người d&acirc;n miền Bắc trong dịp Tết đến xu&acirc;n về. Kh&ocirc;ng chỉ mang kh&ocirc;ng kh&iacute; Tết tr&agrave;n ngập v&agrave;o ng&ocirc;i nh&agrave; của bạn m&agrave; những vật dụng n&agrave;y c&ograve;n được người xưa tin rằng n&oacute; c&oacute; thể xua đuổi ma quỷ, cầu cho năm mới b&igrave;nh an, ấm no.</p>\r\n\r\n<h3>Hoa mai&nbsp;</h3>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/trang-tri-tet-637445134310402048.jpg\" style=\"height:555px; width:800px\" /></p>\r\n\r\n<p><em>H&igrave;nh ảnh trang tr&iacute; Tết truyền thống quen thuộc</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://homedy.com/post/5fe5b331a9ee1237347a3521\">Trang tr&iacute; nh&agrave; tết cổ điển</a></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong văn h&oacute;a xưa, hoa mai ch&iacute;nh l&agrave; biểu tượng tượng trưng cho sự gi&agrave;u sang, ph&uacute; qu&yacute;. Việc treo những chữ &ldquo;Lộc&rdquo; đỏ tr&ecirc;n c&agrave;nh mai, đ&agrave;o sẽ mang đến sự may mắn v&agrave; thu h&uacute;t t&agrave;i lộc tới ng&ocirc;i nh&agrave;.</p>\r\n\r\n<h3>Hoa đ&agrave;o</h3>\r\n\r\n<p><img alt=\"hoa-dao-trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/trang-tri-tet-dep-637445135295089676.jpg\" style=\"height:800px; width:800px\" /></p>\r\n\r\n<p><em>&nbsp;C&acirc;y đ&agrave;o bạch mang m&agrave;u sắc ph&ugrave; hợp với căn nh&agrave;</em></p>\r\n\r\n<p><strong>&nbsp;&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://homedy.com/post/5fe5afeaa9ee1237347a34f2\">Trang tr&iacute; nh&agrave; với hoa đ&agrave;o bạch</a></strong></p>\r\n\r\n<p>Hoa đ&agrave;o được coi l&agrave; tinh hoa trong khối ngũ h&agrave;nh. Người xưa tin rằng đ&acirc;y l&agrave; loại hoa c&oacute; sức mạnh đổi mới, đem lại cho gia chủ sự sinh s&ocirc;i v&agrave; ph&aacute;t triển mạnh mẽ cho năm mới. Ng&agrave;y nay, th&uacute; chơi hoa đ&agrave;o ng&agrave;y c&agrave;ng ph&aacute;t triển, ngo&agrave;i những c&agrave;nh đ&agrave;o đỏ mang m&agrave;u sắc rực rỡ trong ng&agrave;y Tết th&igrave; đ&agrave;o phai, đ&agrave;o bạch, đ&agrave;o đ&ocirc;ng đỏ, &hellip; ng&agrave;y được rất nhiều gia đ&igrave;nh chọn b&agrave;y trong dịp Tết Nguy&ecirc;n Đ&aacute;n.</p>\r\n\r\n<p><img alt=\"trang-tri-ngay-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/trang-tri-khong-khach-tet-637445137572037304.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p><em>Ph&ograve;ng kh&aacute;ch tr&agrave;n ngập kh&ocirc;ng kh&iacute; Tết của một gia chủ y&ecirc;u gốm sứ</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://homedy.com/post/5fe455fcca7d5e41f454cd29\">Tết truyền thống của một gia đ&igrave;nh y&ecirc;u gốm sứ</a></strong></p>\r\n\r\n<h3>Đ&egrave;n lồng đỏ</h3>\r\n\r\n<p>Đ&egrave;n lồng đỏ cũng l&agrave; biểu tượng may mắn m&agrave; ch&uacute;ng ta hay bắt gặp trong những ng&agrave;y lễ Tết. Việc treo đ&egrave;n lồng đỏ trước cửa c&oacute; &yacute; nghĩa xua đuổi t&agrave; ma, thu h&uacute;t may mắn. D&acirc;n gian cho rằng những chiếc đ&egrave;n đỏ treo trước nh&agrave; l&agrave; sự hiện th&acirc;n của b&igrave;nh y&ecirc;n v&agrave; hạnh ph&uacute;c.</p>\r\n\r\n<p><img alt=\"den-long-do\" src=\"https://img.homedy.com/store/images/2020/12/25/y-nghia-den-long-do-ngay-tet-637445138337613723.jpg\" style=\"height:800px; width:800px\" /></p>\r\n\r\n<p><em>Đ&egrave;n lồng đỏ trang tr&iacute; Tết truyền thống thể hiện sự b&igrave;nh y&ecirc;n, hạnh ph&uacute;c</em></p>\r\n\r\n<h3>C&acirc;y quất</h3>\r\n\r\n<p>C&acirc;y quất cũng l&agrave; một trong những loại c&acirc;y cảnh được người Việt đặc biệt l&agrave; những gia đ&igrave;nh miền Bắc ưa chuộng trong ng&agrave;y Tết. Vỏ quất m&agrave;u v&agrave;ng tượng trưng cho sự m&agrave;u mỡ v&agrave; tr&ugrave; ph&uacute;. C&acirc;y quất được b&agrave;y ng&agrave;y Tết c&oacute; c&agrave;ng nhiều quả c&agrave;ng mang &yacute; nghĩa t&agrave;i lộc cho gia đ&igrave;nh.</p>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/y-nghia-do-trang-tri-tet-637445138765553424.jpg\" style=\"height:800px; width:800px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; đơn giản mang lại kh&ocirc;ng kh&iacute; Tết v&ocirc; c&ugrave;ng ấm &aacute;p</em></p>\r\n\r\n<p><strong>&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://homedy.com/post/5fe59cafa9ee1237347a32eb\">Trang tr&iacute; Tết cho ph&ograve;ng nhỏ</a></strong></p>\r\n\r\n<h2>2. &Yacute; tưởng trang tr&iacute; nh&agrave; Tết h&uacute;t t&agrave;i lộc</h2>\r\n\r\n<h3>Trang tr&iacute; nh&agrave; bằng v&ograve;ng hoa Tết</h3>\r\n\r\n<p>Kh&ocirc;ng chỉ gi&aacute;ng sinh mới c&oacute; v&ograve;ng nguyệt quế để treo trước cửa nh&agrave;, việc trang tr&iacute; ng&ocirc;i nh&agrave; của bạn bằng những v&ograve;ng hoa Tết thế n&agrave;y cũng sẽ l&agrave;m ng&ocirc;i nh&agrave; của bạn rực rỡ hơn rất nhiều.</p>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/vong-hoa-tet-637445139290640816.jpg\" style=\"height:800px; width:800px\" /></p>\r\n\r\n<p><em>V&ograve;ng hoa tết treo trước cửa</em></p>\r\n\r\n<h3>Trang tr&iacute; nh&agrave; bằng c&acirc;y đ&aacute; qu&yacute; theo phong thủy</h3>\r\n\r\n<p>Đối với những gia đ&igrave;nh đặc biệt quan t&acirc;m đến phong thủy th&igrave; việc sở hữu ri&ecirc;ng một c&acirc;y đ&aacute; qu&yacute; để b&agrave;n trong ng&agrave;y Tết l&agrave; việc kh&ocirc;ng thể bỏ qua. Với thiết kế nhỏ gọn, sang trọng, m&agrave;u sắc đa dạng bắt mắt th&igrave; đ&acirc;y được coi l&agrave; vật dụng trang tr&iacute; rất ph&ugrave; hợp trong ng&agrave;y tết truyền thống.</p>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/cay-phong-thuy-ta-loc-637445139718496812.jpg\" style=\"height:800px; width:800px\" /></p>\r\n\r\n<p><em>C&acirc;y t&agrave;i lộc c&oacute; khả năng mang lại ph&uacute; qu&yacute; cho gia chủ</em></p>\r\n\r\n<h3>Trang tr&iacute; nh&agrave; Tết theo phong c&aacute;ch Nhật Bản</h3>\r\n\r\n<p>Nếu bạn muốn tạo ra sự kh&aacute;c biệt trong Tết năm nay th&igrave; c&oacute; thể tham khảo c&aacute;ch trang tr&iacute; nh&agrave; Tết bằng quạt giấy đỏ theo phong c&aacute;ch Nhật Bản dưới đ&acirc;y:</p>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/trang-tri-tet-bang-quat-do-637445139999898190.jpg\" style=\"height:1200px; width:800px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; nh&agrave; Tết độc đ&aacute;o treo phong c&aacute;ch Nhật Bản</em></p>\r\n\r\n<h3>Trang tr&iacute; nh&agrave; Tết thủ c&ocirc;ng</h3>\r\n\r\n<p>Đối với gia chủ c&oacute; một đ&ocirc;i tay kh&eacute;o l&eacute;o th&igrave; việc trang tr&iacute; nh&agrave; Tết cũng kh&ocirc;ng cần qu&aacute; phụ thuộc v&agrave;o những vật dụng c&oacute; sẵn. Tự tay cắt ra những b&ocirc;ng hoa đ&agrave;o rực rỡ từ giấy m&agrave;u để trang tr&iacute; cho ng&ocirc;i nh&agrave; của m&igrave;nh cũng l&agrave; một &yacute; tưởng trang tr&iacute; đẹp, độc đ&aacute;o m&agrave; lại v&ocirc; c&ugrave;ng tiết kiệm chi ph&iacute;.</p>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/1-637445140747305391.jpg\" style=\"height:1051px; width:800px\" /></p>\r\n\r\n<p><em>Tự tay trang tr&iacute; nh&agrave; Tết bằng hoa giấy thủ c&ocirc;ng</em></p>\r\n\r\n<h3>Trang tr&iacute; nh&agrave; bằng linh vật phong thủy</h3>\r\n\r\n<p>Để ch&agrave;o đ&oacute;n năm T&acirc;n Sửu v&agrave; mang lại may mắn cho gia đ&igrave;nh th&igrave; gia chủ c&oacute; thể lựa chọn một bức tượng hoặc tranh linh vật phong thủy. Linh vật phong thủy của năm 2021 l&agrave; tr&acirc;u v&agrave;ng, do đ&oacute; bạn c&oacute; thể đặt những bức tượng tr&acirc;u v&agrave;ng trong ph&ograve;ng kh&aacute;ch, ph&ograve;ng l&agrave;m việc để mang đến sự gi&agrave;u c&oacute; v&agrave; sung t&uacute;c cho gia đ&igrave;nh.</p>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/tuong-linh-vat-trau-ma-vang-637445141150513240.jpg\" style=\"height:488px; width:800px\" /></p>\r\n\r\n<p><em>Tr&acirc;u v&agrave;ng t&agrave;i lộc tượng trưng cho sự gi&agrave;u c&oacute;, sung t&uacute;c</em></p>\r\n\r\n<p>Sử dụng tranh treo tường phong thủy cũng l&agrave; một &yacute; tưởng trang tr&iacute; nh&agrave; chưa bao giờ lỗi &ldquo;mốt&rdquo;. Năm con tr&acirc;u bạn cũng c&oacute; thể lấy bức tranh h&igrave;nh con tr&acirc;u l&agrave;m điểm nhấn cho căn ph&ograve;ng của bạn.</p>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/tranh-treo-tuong-con-trau-637445141461929393.jpg\" style=\"height:600px; width:800px\" /></p>\r\n\r\n<p><em>H&igrave;nh ảnh tranh treo tường con tr&acirc;u khiến cho căn ph&ograve;ng trở n&ecirc;n sinh động</em></p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; tổng hợp những&nbsp;<strong>&yacute; tưởng&nbsp;trang tr&iacute; nh&agrave; Tết</strong>&nbsp;đẹp, đơn giản v&agrave; c&oacute; &yacute; nghĩa phong thủy cho gia chủ. Hy vọng bạn đ&atilde; t&igrave;m được những &yacute; tưởng trang tr&iacute; ph&ugrave; hợp để trang ho&agrave;ng lại ng&ocirc;i nh&agrave; của m&igrave;nh chuẩn bị cho một năm mới sắp tới.</p>', '0d5310f57ce980b7d9f817_1596879786.jpg', '2021-01-08', 'admin1', NULL, '2021-01-08 14:26:59'),
(7, '9+ đồ trang trí Tết không thể thiếu chào đón năm Tân Sửu 2021 phát lộc, phát tài', 'Mỗi năm, dịp Tết đến xuân về luôn là thời điểm thích hợp để người người nhà nhà sửa sang nhà cửa trang hoàng đón Tết. Trang trí Tết không chỉ giúp làm đẹp cho ngôi nhà mà nó còn chứa đựng mong muốn mang đến may mắn, tài lộc cho gia chủ. Hãy cùng Homedy tìm hiểu 9+ những món đồ trang trí Tết không thể thiếu trong dịp Tết Tân Sửu 2021 này qua bài viết dưới đây nhé!', '<h2>&Yacute; nghĩa trang tr&iacute; Tết trong nh&agrave;</h2>\r\n\r\n<p>Theo d&acirc;n gian, dọn dẹp nh&agrave; cửa đ&oacute;n Tết l&agrave; để &ldquo;đuổi&rdquo; những c&aacute;i cũ kỹ, xấu x&iacute;, kh&ocirc;ng may mắn của năm cũ&nbsp;đi, chuẩn bị đ&oacute;n nhận những điều đẹp đẽ nhất của năm mới về. B&ecirc;n cạnh đ&oacute;, Tết cũng l&agrave; dịp để mọi người đến thăm nh&agrave; nhau, d&agrave;nh tặng nhau những lời ch&uacute;c tụng năm mới. V&igrave; vậy, một ng&ocirc;i nh&agrave; đẹp, sạch sẽ trong dịp Tết l&agrave; điều v&ocirc; c&ugrave;ng quan trọng với mọi gia đ&igrave;nh.</p>\r\n\r\n<h2>9+ những m&oacute;n đồ trang tr&iacute; Tết kh&ocirc;ng thể thiếu trong dịp Tết T&acirc;n Sửu 2021</h2>\r\n\r\n<p>Nhắc đến Tết, ch&uacute;ng ta kh&ocirc;ng thể kh&ocirc;ng nhắc đến những m&oacute;n đồ trang tr&iacute; t&ocirc; điểm th&ecirc;m sắc xu&acirc;n sau:</p>\r\n\r\n<h3>Hoa đ&agrave;o, hoa mai</h3>\r\n\r\n<p>Từ xưa đến nay, việc trưng những c&agrave;nh đ&agrave;o, mai trong nh&agrave; dịp Tết đ&atilde; l&agrave; một truyền thống quen thuộc của người Việt. Bởi kh&ocirc;ng chỉ mang lại m&agrave;u sắc tươi tắn, trang nh&atilde; cho căn nh&agrave;, mỗi lo&agrave;i hoa c&ograve;n mang một &yacute; nghĩa ri&ecirc;ng của n&oacute;.</p>\r\n\r\n<p>Nếu hoa đ&agrave;o được coi l&agrave; tinh hoa của Ngũ h&agrave;nh, c&oacute; thể xua đuổi b&aacute;ch quỷ v&agrave; mang đến cuộc sống b&igrave;nh an, hạnh ph&uacute;c; th&igrave; hoa mai biểu trưng cho sự gi&agrave;u sang, ph&uacute; qu&yacute;, niềm vui, hạnh ph&uacute;c v&agrave; sự gắn kết. V&igrave; vậy, bạn h&atilde;y chuẩn bị cho ng&ocirc;i nh&agrave; của m&igrave;nh những c&agrave;nh đ&agrave;o, c&agrave;nh mai tươi thắm trong dịp Tết để mang sắc xu&acirc;n v&agrave;o nh&agrave; nh&eacute;!</p>\r\n\r\n<p><img alt=\"hoa-dao\" src=\"https://img.homedy.com/store/images/2020/12/25/lg-2019-04-26-hoa-dao-1-637444809503444787.jpg\" style=\"height:453px; width:800px\" /></p>\r\n\r\n<p><em>Hoa đ&agrave;o l&agrave; lo&agrave;i hoa kh&ocirc;ng thể thiếu được trong ng&agrave;y Tết cổ truyền</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem full b&agrave;i viết:&nbsp;<a href=\"https://homedy.com/post/5fe3fcf9ca7d5e41f454bea7\">Trang tr&iacute; hoa Đ&agrave;o dịp Tết</a></strong></p>\r\n\r\n<p><img alt=\"hoa-mai\" src=\"https://img.homedy.com/store/images/2020/12/25/tai-sao-hoa-dao-chua-duoc-1579448091-637444809818757665.jpg\" style=\"height:500px; width:800px\" /></p>\r\n\r\n<p><em>Hoa mai quen thuộc với người Việt dịp Tết bởi những &yacute; nghĩa tốt l&agrave;nh của n&oacute;</em></p>\r\n\r\n<h3>C&acirc;u đối</h3>\r\n\r\n<p>D&acirc;n gian c&oacute; c&acirc;u: &ldquo;Thịt mỡ dưa h&agrave;nh c&acirc;u đối đỏ&rdquo; - &yacute; chỉ những m&oacute;n đồ kh&ocirc;ng thể thiếu trong mỗi dịp Tết đến xu&acirc;n về. Theo quan niệm d&acirc;n gian, c&acirc;u đối kh&ocirc;ng chỉ l&agrave; n&eacute;t văn h&oacute;a truyền thống của người Việt m&agrave; c&ograve;n mang h&agrave;m &yacute; mang lại may mắn cho gia đ&igrave;nh.&nbsp;</p>\r\n\r\n<p>C&acirc;u đối đỏ đồng thời cũng l&agrave; những lời ch&uacute;c tốt l&agrave;nh v&agrave; những niềm tin, hy vọng m&agrave; c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh mong muốn. V&igrave; thế, ng&agrave;y nay d&ugrave; cuộc sống c&oacute; hiện đại hơn, nhưng những c&acirc;u đối mang d&aacute;ng vẻ truyền thống, lễ nghi vẫn l&agrave; m&oacute;n đồ trang tr&iacute; quen thuộc trong mỗi gia đ&igrave;nh.</p>\r\n\r\n<p><img alt=\"cau-doi\" src=\"https://img.homedy.com/store/images/2020/12/25/1-637445030318834884.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<p><em>C&acirc;u đối l&agrave; m&oacute;n đồ trang tr&iacute; Tết kh&ocirc;ng thể thiếu với mọi nh&agrave;</em></p>\r\n\r\n<p><img alt=\"cau-doi\" src=\"https://img.homedy.com/store/images/2020/12/25/cau-doi-tet-1-637444810438034613.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p><em>C&acirc;u đối mang những &yacute; nghĩa tốt l&agrave;nh, tốt đẹp cho gia đ&igrave;nh</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem th&ecirc;m b&agrave;i viết:&nbsp;<a href=\"https://homedy.com/post/5fe452eaca7d5e41f454cce5\">&Yacute; tưởng trang tr&iacute; nh&agrave; ng&agrave;y Tết</a></strong></p>\r\n\r\n<h3>Bao l&igrave; x&igrave;</h3>\r\n\r\n<p>Trao bao l&igrave; x&igrave; v&agrave;o ng&agrave;y Tết l&agrave; một phong tục tốt đẹp của người Việt, h&agrave;nh động n&agrave;y thể hiện t&igrave;nh cảm, sự&nbsp;y&ecirc;u thương m&agrave; c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh d&agrave;nh tặng cho nhau. B&ecirc;n cạnh &yacute; nghĩa đ&oacute;, ta cũng c&oacute; thể d&ugrave;ng bao l&igrave; x&igrave; như một m&oacute;n đồ trang tr&iacute; đẹp mắt cho ng&ocirc;i nh&agrave; của m&igrave;nh. Khi treo bao l&igrave; x&igrave; l&ecirc;n c&agrave;nh mai, c&agrave;nh đ&agrave;o hay chậu c&acirc;y cảnh,... &yacute; nghĩa may mắn c&agrave;ng th&ecirc;m đủ đầy.</p>\r\n\r\n<p><img alt=\"bao-li-xi\" src=\"https://img.homedy.com/store/images/2020/12/25/2-637445030655232162.jpg\" style=\"height:600px; width:800px\" /></p>\r\n\r\n<p><em>Bao l&igrave; x&igrave; đỏ mang &yacute; nghĩa may mắn, tốt l&agrave;nh</em></p>\r\n\r\n<p><img alt=\"bao-li-xi\" src=\"https://img.homedy.com/store/images/2020/12/25/3-637445030861711199.jpg\" style=\"height:600px; width:800px\" /></p>\r\n\r\n<p><em>Ng&agrave;y nay, bao l&igrave; x&igrave; Tết ng&agrave;y c&agrave;ng được thiết kế hiện đại</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem full b&agrave;i viết:&nbsp;<a href=\"https://homedy.com/post/5fe44eb6ca7d5e41f454cca2\">Trang tr&iacute; Tết bằng bao l&igrave; x&igrave;</a></strong></p>\r\n\r\n<h3>Tranh treo Tết</h3>\r\n\r\n<p>Treo tranh ng&agrave;y Tết l&agrave; một th&uacute; chơi tao nh&atilde; mỗi dịp Tết đến Xu&acirc;n về. Bạn c&oacute; thể dễ d&agrave;ng t&igrave;m mua những bức tranh Tết ở c&aacute;c cửa h&agrave;ng chuy&ecirc;n về tranh hay c&oacute; khi ở cả những khu chợ Tết tấp nập. Tranh treo Tết ng&agrave;y nay c&oacute; đa dạng về mẫu m&atilde;, h&igrave;nh thức, ph&ugrave; hợp với mọi nhu cầu của kh&aacute;ch. Nếu ưa th&iacute;ch phong c&aacute;ch ho&agrave;i cổ, bạn c&oacute; thể d&ugrave;ng tranh Đ&ocirc;ng Hồ, H&agrave;ng Trống; hoặc nếu l&agrave; người th&iacute;ch vẻ hiện đại, s&aacute;ng tạo, những bức tranh phong cảnh hay hoa cỏ sẽ l&agrave; lựa chọn th&iacute;ch hợp cho bạn!</p>\r\n\r\n<p><img alt=\"tranh-treo-tuong\" src=\"https://img.homedy.com/store/images/2020/12/25/tranh-dong-ho-treo-tuong-2-637444811586945930.jpg\" style=\"height:729px; width:800px\" /></p>\r\n\r\n<p><em>Tranh Đ&ocirc;ng Hồ mang lại cho kh&ocirc;ng gian nh&agrave; bạn n&eacute;t d&acirc;n gian, ho&agrave;i cổ</em></p>\r\n\r\n<p><img alt=\"tranh-treo-tuong\" src=\"https://img.homedy.com/store/images/2020/12/25/tranh-treo-tuong-phong-khach-hoa-dao-tuoi-tham-ghep-bo-4-tam-1400-2-637444811857145777.jpg\" style=\"height:542px; width:800px\" /></p>\r\n\r\n<p><em>Ngo&agrave;i ra, những bức tranh hoa cỏ cũng l&agrave; lựa chọn th&iacute;ch hợp cho tranh treo ng&agrave;y Tết</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://homedy.com/post/5fe44eb6ca7d5e41f454cca2\">&Yacute; tưởng trang tr&iacute; ph&ograve;ng kh&aacute;ch ng&agrave;y Tết</a></strong></p>\r\n\r\n<h3>Đ&egrave;n trang tr&iacute;</h3>\r\n\r\n<p>Những chiếc đ&egrave;n lồng hay d&acirc;y đ&egrave;n trang tr&iacute; nhấp nh&aacute;y sẽ khiến căn nh&agrave; bạn trở n&ecirc;n lung linh hơn bao giờ hết. M&agrave;u sắc rực rỡ, ấm &aacute;p tỏa ra từ đ&egrave;n kết hợp với c&agrave;nh đ&agrave;o hay hoa mai c&agrave;ng l&agrave;m tăng sự ấm c&uacute;ng trong kh&ocirc;ng gian nh&agrave;. Tết n&agrave;y, đừng qu&ecirc;n trang tr&iacute; những d&acirc;y đ&egrave;n đầy m&agrave;u sắc để căn nh&agrave; trở n&ecirc;n lấp l&aacute;nh hơn bạn nh&eacute;!</p>\r\n\r\n<p><img alt=\"den-trang-tri\" src=\"https://img.homedy.com/store/images/2020/12/25/lam-do-trang-tri-tet-handmade-14-637444812226935919.jpg\" style=\"height:449px; width:800px\" /></p>\r\n\r\n<p><em>Đ&egrave;n lồng l&agrave; m&oacute;n đồ trang tr&iacute; quen thuộc dịp Tết</em></p>\r\n\r\n<p><img alt=\"den-trang-tri\" src=\"https://lh4.googleusercontent.com/HJUWDvfhiKGdJm9fuKswLt2Mi12J9tiT70WzyScfz5Nt1tva94UMi7Cg2uK2tozxCGeX-vmrzox9CMR1Y5oxjOC9wH9e2-wzMkkXprKfVttazbKqqbMIE8pUT3SNSa8-O4FJuitY\" style=\"height:597px; width:800px\" /></p>\r\n\r\n<p><em>Chỉ một v&agrave;i d&acirc;y đ&egrave;n th&ocirc;i cũng đủ khiến cả căn nh&agrave; bừng s&aacute;ng</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://homedy.com/post/5fe452eaca7d5e41f454cce5\">&Yacute; tưởng trang tr&iacute; nh&agrave; ng&agrave;y Tết</a></strong></p>\r\n\r\n<h3>Đồ gốm</h3>\r\n\r\n<p>D&acirc;n gian c&oacute; c&acirc;u:&rdquo;Nhất chữ, nh&igrave; tranh, tam s&agrave;nh, tứ mộc&rdquo; mang h&agrave;m &yacute; n&oacute;i đến những th&uacute; chơi tao nh&atilde; của người Việt trong mỗi dịp Tết, trong đ&oacute;, &ldquo;s&agrave;nh&rdquo; &yacute; chỉ đến gốm. Gốm l&agrave; m&oacute;n đồ trang tr&iacute; sang trọng, thanh tao lại kh&ocirc;ng k&eacute;m phần truyền thống, cổ điển. Đ&acirc;y l&agrave; lựa chọn th&iacute;ch hợp cho ng&agrave;y Xu&acirc;n kh&ocirc;ng chỉ bởi yếu tố kiểu d&aacute;ng m&agrave; c&ograve;n nằm ở &yacute; nghĩa của n&oacute;.</p>\r\n\r\n<p>C&aacute;c m&oacute;n đồ trang tr&iacute; l&agrave;m bằng gốm thường c&oacute; họa tiết tinh xảo, l&agrave; sự kết hợp uyển chuyển, h&agrave;i h&ograve;a của những đường n&eacute;t kh&aacute;c nhau tạo n&ecirc;n những hoa văn tinh tế. Sự kết hợp h&agrave;i h&ograve;a ấy biểu trưng cho n&eacute;t h&agrave;i h&ograve;a của &Acirc;m - Dương ngũ h&agrave;nh, mang lại sự may mắn, hanh th&ocirc;ng cho gia chủ trong năm mới.</p>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/4-637445031961911214.jpg\" style=\"height:1067px; width:800px\" /></p>\r\n\r\n<p><em>Gốm l&agrave; th&uacute; chơi tao nh&atilde; mỗi dịp Tết đến Xu&acirc;n về</em></p>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/5-637445032176979166.jpg\" style=\"height:1067px; width:800px\" /></p>\r\n\r\n<p><em>Những b&igrave;nh gốm mang lại n&eacute;t truyền thống, cổ điển rất ri&ecirc;ng của văn h&oacute;a Việt Nam</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://homedy.com/post/5fe455fcca7d5e41f454cd29\">Trang tr&iacute; Tết sử dụng đồ gốm</a></strong></p>\r\n\r\n<h3>C&aacute;c loại d&acirc;y may mắn</h3>\r\n\r\n<p>D&acirc;y may mắn l&agrave; m&oacute;n đồ trang tr&iacute; Tết quen thuộc với mỗi gia đ&igrave;nh Việt. M&oacute;n đồ trang tr&iacute; n&agrave;y thu h&uacute;t mọi người bởi kiểu d&aacute;ng đẹp đẽ, m&agrave;u sắc rực rỡ, nhỏ xinh m&agrave; v&ocirc; c&ugrave;ng tiết kiệm chi ph&iacute;. Bạn c&oacute; thể dễ d&agrave;ng t&igrave;m mua c&aacute;c loại d&acirc;y treo may mắn dịp Tết n&agrave;y ở bất cứ cửa h&agrave;ng b&aacute;n đồ Tết n&agrave;o với mức gi&aacute; rất phải chăng.</p>\r\n\r\n<p>Với m&agrave;u sắc tươi tắn, rực rỡ k&egrave;m những th&ocirc;ng điệp &yacute; nghĩa như sợi chỉ đỏ, n&eacute;n v&agrave;ng, đồng tiền khắc k&egrave;m những c&acirc;u từ mang h&agrave;m &yacute; cầu may mắn, ph&aacute;t t&agrave;i; d&acirc;y may mắn chắc chắn l&agrave; một m&oacute;n đồ trang tr&iacute; kh&ocirc;ng thể thiếu trong nh&agrave; bạn mỗi dịp Tết đến Xu&acirc;n về!</p>\r\n\r\n<p><img alt=\"do-trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/6-637445032331105423.jpg\" style=\"height:534px; width:800px\" /></p>\r\n\r\n<p><em>Những sợi d&acirc;y may mắn đầy m&agrave;u sắc, mang lại kh&ocirc;ng kh&iacute; đậm vị Tết</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://homedy.com/post/5fe452eaca7d5e41f454cce5\">&Yacute; tưởng trang tr&iacute; ph&ograve;ng kh&aacute;ch ng&agrave;y Tết</a></strong></p>\r\n\r\n<h3>C&acirc;y cảnh</h3>\r\n\r\n<p>Nếu bạn ưa th&iacute;ch m&agrave;u xanh tươi non v&agrave; tr&agrave;n trề sức sống, c&aacute;c loại c&acirc;y cảnh sẽ l&agrave; lựa chọn v&ocirc; c&ugrave;ng th&iacute;ch hợp cho kh&ocirc;ng gian nh&agrave; bạn trong những ng&agrave;y Tết cổ truyền. C&acirc;y cảnh mang đến cho căn nh&agrave; kh&ocirc;ng kh&iacute; tươi mới, trong l&agrave;nh v&agrave; căng tr&agrave;n nhựa sống.&nbsp;</p>\r\n\r\n<p>Một số lựa chọn th&iacute;ch hợp trong ng&agrave;y Tết c&oacute; thể kể đến như c&acirc;y xanh, c&acirc;y sung, c&acirc;y quất với những thế c&acirc;y được uốn lượn đầy nghệ thuật. Những c&acirc;y cảnh với lộc xanh mơn mởn v&agrave; hoa tr&aacute;i xum xu&ecirc; biểu thị cho sự ph&aacute;t t&agrave;i, ph&aacute;t lộc, sinh s&ocirc;i nảy nở, t&agrave;i lộc v&agrave; may mắn cho gia chủ.</p>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/quat3-12502530-637444815515685349.jpg\" style=\"height:1163px; width:800px\" /></p>\r\n\r\n<p><em>C&acirc;y quất xum xu&ecirc; tr&aacute;i mang &yacute; nghĩa sinh s&ocirc;i nảy nở, ph&aacute;t triển, thịnh vượng</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://homedy.com/post/5fe452eaca7d5e41f454cce5\">&Yacute; tưởng trang tr&iacute; nh&agrave; ng&agrave;y Tết</a></strong></p>\r\n\r\n<h3>C&aacute;c loại hoa giả</h3>\r\n\r\n<p>Hoa giả l&agrave; một lựa chọn đ&aacute;ng để t&acirc;m cho những m&oacute;n đồ trang tr&iacute; ng&agrave;y Tết bởi m&agrave;u sắc đẹp đẽ, sự tiện dụng v&agrave; khả năng bền cao của n&oacute;. Bạn c&oacute; thể thoải m&aacute;i trang tr&iacute; hoa giả trong nhiều ng&agrave;y hoặc ở những nơi c&oacute; nhiệt độ cao, kh&oacute; c&oacute; thể để được hoa tươi m&agrave; kh&ocirc;ng lo ch&uacute;ng bị hư hay h&eacute;o. Ng&agrave;y nay với tr&igrave;nh độ c&ocirc;ng nghệ ti&ecirc;n tiến, c&aacute;c loại hoa giả cũng được thiết kế tinh xảo hơn với đa dạng m&agrave;u sắc, kiểu d&aacute;ng, tr&ocirc;ng giống thật đến nỗi nếu kh&ocirc;ng nh&igrave;n gần hay sờ v&agrave;o th&igrave; rất kh&oacute; m&agrave; ph&aacute;t hiện ra l&agrave; giả.</p>\r\n\r\n<p><img alt=\"trang-tri-tet\" src=\"https://img.homedy.com/store/images/2020/12/25/cay-dao-hoa-man-9-2-637444815863180443.jpg\" style=\"height:669px; width:800px\" /></p>\r\n\r\n<p><em>Hoa giả được thiết kế với đa dạng m&agrave;u sắc, kiểu d&aacute;ng</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://homedy.com/post/5fe452eaca7d5e41f454cce5\">&Yacute; tưởng trang tr&iacute; nh&agrave; ng&agrave;y Tết</a></strong></p>\r\n\r\n<p>Hy vọng những gợi &yacute; tr&ecirc;n đ&acirc;y sẽ gi&uacute;p c&aacute;c bạn t&igrave;m được những&nbsp;<strong>m&oacute;n đồ trang tr&iacute; dịp Tết</strong>&nbsp;ưng &yacute;. Mỗi năm Tết chỉ đến một lần, đừng ngần ngại m&agrave; h&atilde;y trang ho&agrave;ng ng&ocirc;i nh&agrave; m&igrave;nh thật đầy m&agrave;u sắc ấm &aacute;p bạn nh&eacute;. Homedy ch&uacute;c bạn v&agrave; gia đ&igrave;nh c&oacute; một Tết T&acirc;n Sửu an l&agrave;nh, hạnh ph&uacute;c!</p>', 'hinh23.png', '2021-01-08', 'admin', NULL, '2021-01-08 14:30:48'),
(8, '7 phong cách trang trí mùa NOEL hot nhất 2020', 'Giáng Sinh đã cận kề rồi, bạn có tò mò cách “biến hóa” căn nhà ngập tràn không khí Noel nhưng vẫn giữ được phong cách của riêng mình? Hãy để Homedy mách bạn cách trang trí Noel đơn giản, không tốn kém mà vẫn siêu ấn tượng cho 7 phong cách nhà khác nhau qua bài viết dưới đây nhé!', '<h2>&Yacute; nghĩa trang tr&iacute; Noel trong nh&agrave;</h2>\r\n\r\n<p>Lễ Gi&aacute;ng Sinh c&oacute; nguồn gốc từ phương T&acirc;y, l&agrave; ng&agrave;y lễ kỷ niệm Ch&uacute;a Gi&ecirc;-su ra đời. Ở Việt Nam, tuy kh&ocirc;ng phải l&agrave; một ng&agrave;y lễ ch&iacute;nh thức nhưng dần dần Noel đ&atilde; trở th&agrave;nh dịp để cả gia đ&igrave;nh c&oacute; cơ hội qu&acirc;y quần b&ecirc;n nhau, tr&ograve; chuyện t&acirc;m sự v&agrave; trao cho nhau những m&oacute;n qu&agrave;, những lời ch&uacute;c t&igrave;nh cảm đầy &yacute; nghĩa. Đ&acirc;y cũng l&agrave; dịp để bạn b&egrave; c&oacute; thể tụ họp h&agrave;n huy&ecirc;n, c&ugrave;ng kể cho nhau nghe những c&acirc;u chuyện sau một năm d&agrave;i.</p>\r\n\r\n<p>V&agrave; những c&acirc;u chuyện hẳn sẽ th&ecirc;m phần thi vị hơn khi được kể dưới &aacute;nh đ&egrave;n lung linh tr&ecirc;n những c&acirc;y th&ocirc;ng đầy m&agrave;u sắc, trong kh&ocirc;ng gian Gi&aacute;ng Sinh ấm &aacute;p. Kh&ocirc;ng chỉ vậy, việc trang tr&iacute; Noel theo từng phong c&aacute;ch kh&aacute;c nhau c&ograve;n gi&uacute;p thể hiện r&otilde; hơn t&iacute;nh c&aacute;ch của gia chủ.</p>\r\n\r\n<h2>7 phong c&aacute;ch trang tr&iacute; Noel đơn giản si&ecirc;u ấn tượng&nbsp;</h2>\r\n\r\n<h3>Phong c&aacute;ch Vintage</h3>\r\n\r\n<p>Vintage l&agrave; phong c&aacute;ch thiết kế đ&atilde; v&agrave; đang được y&ecirc;u th&iacute;ch tr&ecirc;n to&agrave;n thế giới. Từ những n&eacute;t đẹp trong qu&aacute; khứ, n&oacute; đ&atilde; đem lại một hơi thở mới cho cuộc sống hiện đại với sự ho&agrave;i cổ, sang trọng v&agrave; l&atilde;ng mạn. Phong c&aacute;ch Vintage l&agrave; sự lựa chọn tối ưu cho những ai y&ecirc;u th&iacute;ch vẻ đẹp dịu d&agrave;ng, mềm mại nhưng kh&ocirc;ng k&eacute;m phần thời trang, ấn tượng.&nbsp;</p>\r\n\r\n<p>Với phong c&aacute;ch n&agrave;y, bạn chỉ cần chuẩn bị một c&acirc;y th&ocirc;ng Noel được trang tr&iacute; với lấp l&aacute;nh những quả th&ocirc;ng, tuần lộc, những quả b&oacute;ng tr&ograve;n với dải d&acirc;y đ&egrave;n nhỏ quấn quanh th&acirc;n c&acirc;y, c&ugrave;ng một ng&ocirc;i sao đặt ngay ngắn tr&ecirc;n ch&iacute;nh giữa c&acirc;y th&ocirc;ng. Th&ecirc;m v&agrave;o đ&oacute; l&agrave; một chiếc l&ograve; sưởi nhỏ v&agrave; một v&agrave;i m&oacute;n đồ trang tr&iacute; tr&ecirc;n tường như quả cầu tuyết, khung gỗ,... Kh&ocirc;ng cần cầu k&igrave; m&agrave; vẫn to&aacute;t l&ecirc;n vẻ sang trọng, ho&agrave;i cổ đ&uacute;ng kh&ocirc;ng n&agrave;o?</p>\r\n\r\n<p><img alt=\"vintage\" src=\"https://img.homedy.com/store/images/2020/12/21/vintage-637441348598008379.jpg\" style=\"height:796px; width:1000px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; Noel phong c&aacute;ch Vintage</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Vintage\" src=\"https://img.homedy.com/store/images/2020/12/21/trang-tri-noel-phong-cach-vintage-637441349065268957.jpg\" style=\"height:750px; width:1000px\" /></p>\r\n\r\n<p>Phong c&aacute;ch Vintage mang đến kh&ocirc;ng gian nhẹ nh&agrave;ng, mềm mại</p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem full b&agrave;i viết:</strong>&nbsp;<strong><a href=\"https://homedy.com/post/5fd2d9a12c8cd63380adc5ab\">Phong c&aacute;ch Vintage</a></strong></p>\r\n\r\n<h3>Phong c&aacute;ch t&acirc;n cổ điển ấm c&uacute;ng</h3>\r\n\r\n<p>L&agrave; sự kết hợp giữa phong c&aacute;ch hiện đại với cổ điển, những thiết kế phong c&aacute;ch t&acirc;n cổ điển mang đến sự tinh tế, sang trọng, cầu kỳ bởi sự tỉ mỉ trong từng đường n&eacute;t v&agrave; t&iacute;nh nghệ thuật cao. Với những ng&ocirc;i nh&agrave; mang phong c&aacute;ch T&acirc;n cổ điển ấm c&uacute;ng, c&aacute;c phụ kiện trang tr&iacute; Noel n&ecirc;n l&agrave; những m&oacute;n trang tr&iacute; với tone ấm như m&agrave;u be, kem.&nbsp;</p>\r\n\r\n<p>Bạn c&oacute; thể chọn dải đ&egrave;n trang tr&iacute; quanh c&acirc;y th&ocirc;ng Noel l&agrave; những dải với loại b&oacute;ng đ&egrave;n tr&ograve;n, to, tỏa &aacute;nh s&aacute;ng v&agrave;ng cam nhằm tăng th&ecirc;m phần ấm &aacute;p cho ng&ocirc;i nh&agrave;. B&ecirc;n cạnh đ&oacute;, bạn n&ecirc;n trang tr&iacute; đồ vừa đủ, kh&ocirc;ng n&ecirc;n qu&aacute; cầu kỳ bởi thiết kế trong ng&ocirc;i nh&agrave; theo phong c&aacute;ch T&acirc;n cổ điển đ&atilde; rất tỉ mỉ rồi.</p>\r\n\r\n<p><img alt=\"phong-cach-tan-co-dien\" src=\"https://img.homedy.com/store/images/2020/12/21/phong-cach-637441350569496444.jpg\" style=\"height:750px; width:1000px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; nh&agrave; phong c&aacute;ch t&acirc;n cổ điển ấm c&uacute;ng</em></p>\r\n\r\n<p><img alt=\"phong-cach-tan-co-dien\" src=\"https://img.homedy.com/store/images/2020/12/21/phong-cach-tan-co-dien-637441352077933312.jpg\" style=\"height:750px; width:1000px\" /></p>\r\n\r\n<p><em>Phong c&aacute;ch t&acirc;n cổ điển sang trọng, ấn tượng</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem full b&agrave;i viết:&nbsp;<a href=\"https://homedy.com/post/5fd2e04c2c8cd63380adc697\">Phong c&aacute;ch T&acirc;n cổ điển ấm c&uacute;ng</a></strong></p>\r\n\r\n<h3>Phong c&aacute;ch Ch&acirc;u &Acirc;u hiện đại</h3>\r\n\r\n<p>Đ&acirc;y l&agrave; phong c&aacute;ch trang tr&iacute; Noel kh&ocirc;ng thể tuyệt hơn d&agrave;nh cho những bạn đam m&ecirc; sự tinh tế, hiện đại. C&acirc;y th&ocirc;ng Noel l&agrave; một m&oacute;n trang tr&iacute; kh&ocirc;ng thể thiếu trong dịp Noel. Những tr&aacute;i b&oacute;ng tr&ograve;n đầy m&agrave;u sắc c&ugrave;ng những quả th&ocirc;ng, tuần lộc,... treo tr&ecirc;n c&acirc;y sẽ l&agrave; điểm nhấn nổi bật cho căn nh&agrave; của bạn. Ngo&agrave;i ra c&oacute; thể sử dụng th&ecirc;m những chiếc vỏ gối m&agrave;u đỏ tr&ecirc;n sofa để tăng th&ecirc;m phần rực rỡ cho ng&ocirc;i nh&agrave; nữa đ&oacute;.&nbsp;</p>\r\n\r\n<p><img alt=\"phong-cach-chau-au\" src=\"https://img.homedy.com/store/images/2020/12/21/phong-cach-chau-au-637441353181542052.jpg\" style=\"height:1333px; width:1000px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; Noel đẹp đơn giản phong c&aacute;ch Ch&acirc;u &Acirc;u hiện đại</em></p>\r\n\r\n<p>Đừng qu&ecirc;n đặt th&ecirc;m v&agrave;i m&oacute;n trang tr&iacute; Noel như mấy c&acirc;y nến trắng, một v&agrave;i nh&aacute;nh th&ocirc;ng, kẹo ngọt, d&acirc;y chữ trang tr&iacute; tr&ecirc;n b&agrave;n ăn v&agrave; một chiếc tất xinh tr&ecirc;n cửa ra v&agrave;o bạn nh&eacute;!</p>\r\n\r\n<p><img alt=\"phong-cach-chau-au-1\" src=\"https://img.homedy.com/store/images/2020/12/21/phong-cach-chau-au-1-637441354280335294.jpg\" style=\"height:1333px; width:1000px\" /></p>\r\n\r\n<p><em>Khu vực b&agrave;n ăn tr&agrave;n ngập kh&ocirc;ng kh&iacute; Noel</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem full b&agrave;i viết:&nbsp;<a href=\"https://homedy.com/post/5fd31d472c8cd63380adcd48\">Phong c&aacute;ch Ch&acirc;u &Acirc;u hiện đại</a></strong></p>\r\n\r\n<h3>Phong c&aacute;ch Bắc &Acirc;u</h3>\r\n\r\n<p>Phong c&aacute;ch Bắc &Acirc;u được biết đến với 3 đặc điểm nổi bật: đơn giản trong thiết kế, tinh tế trong cảm gi&aacute;c v&agrave; tiện nghi khi sử dụng. Với phong c&aacute;ch sử dụng những gam m&agrave;u tone lạnh, thiết kế đơn giản tinh tế trong nội thất như phong c&aacute;ch Bắc &Acirc;u, m&ugrave;a Noel ch&iacute;nh l&agrave; thời gian th&iacute;ch hợp để &ldquo;biến h&oacute;a&rdquo; căn nh&agrave; bạn trở n&ecirc;n ấm c&uacute;ng, thư gi&atilde;n v&agrave; nhiều m&agrave;u sắc hơn.&nbsp;</p>\r\n\r\n<p>H&atilde;y đặt một c&acirc;y th&ocirc;ng lớn với những tr&aacute;i b&oacute;ng tr&ograve;n, ng&ocirc;i sao v&agrave; dải đ&egrave;n v&agrave;ng m&agrave;u sắc l&agrave;m điểm nhấn. Sử dụng những chiếc v&ograve;ng nguyệt quế v&agrave; nh&aacute;nh th&ocirc;ng đ&iacute;nh tr&ecirc;n tường hoặc trong c&aacute;c vật phẩm trang tr&iacute; trong nh&agrave;, nhớ đặt th&ecirc;m những hộp qu&agrave; dưới ch&acirc;n c&acirc;y th&ocirc;ng Noel nữa bạn nh&eacute;. V&agrave; đừng qu&ecirc;n thắp th&ecirc;m v&agrave;i &aacute;nh nến lung linh trong nh&agrave; gi&uacute;p kh&ocirc;ng gian tăng th&ecirc;m phần ấm c&uacute;ng!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"phong-cach-bac-au\" src=\"https://img.homedy.com/store/images/2020/12/21/phong-cach-bac-au-637441355333806758.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; Noel phong c&aacute;ch Bắc &Acirc;u nhẹ nh&agrave;ng, ấn tượng</em></p>\r\n\r\n<p><img alt=\"phong-cach-bac-au\" src=\"https://img.homedy.com/store/images/2020/12/21/phong-cach-bac-au-1-637441356021477429.jpg\" style=\"height:1333px; width:1000px\" /></p>\r\n\r\n<p><em>M&agrave;u sắc trắng - xanh l&agrave; m&agrave;u sắc chủ đạo cho căn hộ đ&oacute;n Noel phong c&aacute;ch Bắc &Acirc;u</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem full b&agrave;i viết:&nbsp;<a href=\"https://homedy.com/post/5fd326d32c8cd63380adcf5e\">Phong c&aacute;ch Bắc &Acirc;u</a></strong></p>\r\n\r\n<h3>Phong c&aacute;ch Retro</h3>\r\n\r\n<p>Phong c&aacute;ch retro mang những gi&aacute; trị ho&agrave;i cổ, cổ điển xinh đẹp v&agrave; dịu d&agrave;ng. Đ&acirc;y l&agrave; phong c&aacute;ch biểu hiện cho sự ch&acirc;n th&agrave;nh, đơn giản, nhưng kh&ocirc;ng k&eacute;m phần quyến rũ trong cuộc sống hiện đại.&nbsp;</p>\r\n\r\n<p>Mẹo đầu ti&ecirc;n để trang tr&iacute; Noel đơn giản, đẹp m&agrave; vẫn giữ được những n&eacute;t retro đầy dịu d&agrave;ng ch&iacute;nh l&agrave; thay đổi m&agrave;u sắc căn ph&ograve;ng. Xanh lá, đỏ, trắng, bạc, vàng là những gam m&agrave;u đặc trưng cho Noel, bạn có thể dùng bảng màu chuẩn và auto đẹp là 60% trắng / xám / bạc, 30% xanh lá đậm và 10% đỏ cho căn ph&ograve;ng của m&igrave;nh. Những m&agrave;u sắc n&agrave;y c&oacute; thể đến từ những m&oacute;n đồ trang tr&iacute; trong căn ph&ograve;ng hay drap giường, vỏ gối, vỏ chăn.</p>\r\n\r\n<p><img alt=\"phong-cach-retro\" src=\"https://img.homedy.com/store/images/2020/12/21/phong-cach-retro-637441357361892270.jpg\" style=\"height:1334px; width:1000px\" /></p>\r\n\r\n<p><em>Phong c&aacute;ch Retro mang cảm gi&aacute;c ho&agrave;i cổ, nhẹ nh&agrave;ng</em></p>\r\n\r\n<p>Phong c&aacute;ch Retro c&oacute; đặc trưng l&agrave; những bức tranh cổ điển, bạn c&oacute; thể thử thay thế những bức tranh cũ trong nh&agrave; bằng những bức tranh về chủ đề Gi&aacute;ng sinh như bức tranh về những nh&aacute;nh th&ocirc;ng n&agrave;y!</p>\r\n\r\n<p><img alt=\"phong-cach-retro\" src=\"https://img.homedy.com/store/images/2020/12/21/phong-cach-retro-1-637441358081823716.jpg\" style=\"height:1333px; width:1000px\" /></p>\r\n\r\n<p><em>Ph&ograve;ng ngủ phong c&aacute;ch Retro tr&agrave;n ngập sắc m&agrave;u Noel</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem full b&agrave;i viết:&nbsp;<a href=\"https://homedy.com/post/5fdb1cc25fe4a94238f310c9\">Phong c&aacute;ch Retro</a></strong></p>\r\n\r\n<h3>Phong c&aacute;ch Scandinavian</h3>\r\n\r\n<p>Gi&aacute;ng sinh n&agrave;y, ngo&agrave;i ph&ograve;ng kh&aacute;ch, bạn cũng c&oacute; thể biến tấu cho căn bếp của m&igrave;nh th&ecirc;m nhiều m&agrave;u sắc với những m&oacute;n trang tr&iacute; Noel trong phong c&aacute;ch Scandinavian nhẹ nh&agrave;ng, nh&atilde; nhặn m&agrave; kh&ocirc;ng k&eacute;m phần sang trọng.&nbsp;</p>\r\n\r\n<p>Noel năm nay chuộng sử dụng những loại th&ocirc;ng tươi. Nếu kh&ocirc;ng t&igrave;m được, bạn c&oacute; thể mua một t&uacute;i quả kh&ocirc; (quả th&ocirc;ng, l&aacute;t cam kh&ocirc;, l&aacute; khuynh diệp) c&ugrave;ng quả ch&acirc;u v&agrave; nến thơm, set up một g&oacute;c nhỏ trong nh&agrave; cũng c&oacute; thể mang lại kh&ocirc;ng kh&iacute; Noel. Những tấm thảm đỏ, kẻ caro n&ecirc;n được tận dụng trong những ng&agrave;y n&agrave;y, trải một g&oacute;c b&agrave;n bếp, một g&oacute;c sofa... sẽ gi&uacute;p căn nh&agrave; của bạn mang lại cảm gi&aacute;c ấm &aacute;p đậm vị Gi&aacute;ng Sinh.</p>\r\n\r\n<p><img alt=\"phong-cach-Scandinavian\" src=\"https://img.homedy.com/store/images/2020/12/21/phong-cach-scandinavian-637441360438308033.jpg\" style=\"height:1513px; width:1000px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; Noel phong c&aacute;ch&nbsp;Scandinavian</em></p>\r\n\r\n<p><img alt=\"phong-cach-Scandinavian-1\" src=\"https://img.homedy.com/store/images/2020/12/21/phong-cach-scandinavian-1-637441361064494320.jpg\" style=\"height:668px; width:1000px\" /></p>\r\n\r\n<p><em>Căn ph&ograve;ng ngập tr&agrave;n sắc Noel phong c&aacute;ch&nbsp;Scandinavian</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem full b&agrave;i viết:&nbsp;<a href=\"https://homedy.com/post/5fdb02715fe4a94238f30c64\">Phong c&aacute;ch Scandinavian</a></strong></p>\r\n\r\n<p><strong>Kết</strong></p>\r\n\r\n<p>Với 7 gợi &yacute; trang tr&iacute; nh&agrave; đơn giản m&agrave; si&ecirc;u ấn tượng trong dịp Noel 2020 n&agrave;y, hy vọng bạn sẽ c&oacute; thể t&igrave;m thấy những cảm hứng trang tr&iacute; Noel cho ng&ocirc;i nh&agrave; m&igrave;nh. Đừng qu&ecirc;n mang một ch&uacute;t hương vị cho tổ ấm của m&igrave;nh v&agrave;o mỗi dịp đặc biệt để đ&aacute;nh dấu v&agrave; tận hưởng cuộc sống tươi đẹp n&agrave;y, bạn nh&eacute;!</p>', 'hinh42.png', '2021-01-08', 'admin', NULL, '2021-01-08 14:31:00'),
(9, '4 nguyên tắc thiết kế ban công nhà ở vừa đẹp vừa hợp phong thủy', 'Ban công nhà ở là không gian giúp đón gió, đón sáng tự nhiên và đảm bảo phong thủy cho nhà ở. Để tận dụng tối đa những công năng đó, gia chủ nên tìm hiểu thiết kế ban công như thế nào cho hợp lý? Hãy cùng Homedy tìm lời giải đáp qua bài viết dưới đây.', '<h2>Tầm quan trọng của thiết kế ban c&ocirc;ng</h2>\r\n\r\n<p>Ban c&ocirc;ng ch&iacute;nh l&agrave; nơi hưởng &aacute;nh s&aacute;ng, kh&iacute; trời trọn vẹn nhất. C&oacute; thể n&oacute;i khu vực n&agrave;y ảnh hưởng kh&ocirc;ng nhỏ tới gia đ&igrave;nh bạn. Nếu kh&eacute;o l&eacute;o trong thiết kế, bạn c&oacute; thể biến kh&ocirc;ng gian th&ocirc; cứng, nh&agrave;m ch&aacute;n th&agrave;nh một khu vườn nhỏ hay nơi để thường thức cuộc sống. Chắc chắn c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh bạn sẽ cảm thấy thư th&aacute;i v&agrave; thoải m&aacute;i hơn đ&oacute;.</p>\r\n\r\n<p>Một ban c&ocirc;ng đẹp sẽ gi&uacute;p kh&ocirc;ng gian sống của gia đ&igrave;nh bạn trở n&ecirc;n ấn tượng v&agrave; thu h&uacute;t hơn. C&oacute; rất nhiều c&aacute;ch để l&agrave;m việc n&agrave;y như cho th&ecirc;m bộ b&agrave;n ghế nhỏ c&ugrave;ng t&aacute;ch tr&agrave; nh&acirc;m nhi, hay trồng những c&acirc;y xanh mang đến cuộc sống thư th&aacute;i... Tuy nhi&ecirc;n, tất cả c&aacute;c c&aacute;ch n&agrave;y cần tu&acirc;n thủ theo những nguy&ecirc;n tắc nhất định.&nbsp;</p>\r\n\r\n<p><img alt=\"bancong\" src=\"https://img.homedy.com/store/images/2020/12/16/bancong-637436882745337476.jpg\" style=\"height:750px; width:1000px\" /></p>\r\n\r\n<p><em>Biến ban c&ocirc;ng th&agrave;nh những g&oacute;c &quot;chill&quot; ấn tượng</em></p>\r\n\r\n<h2>4 nguy&ecirc;n tắc thiết kế ban c&ocirc;ng đẹp v&agrave; hợp l&yacute;</h2>\r\n\r\n<p>Khi thiết kế ban c&ocirc;ng, d&ugrave; căn hộ/ng&ocirc;i nh&agrave; c&oacute; diện t&iacute;ch lớn hay nhỏ cũng cần phải tu&acirc;n theo những nguy&ecirc;n tắc nhất định. Dưới đ&acirc;y l&agrave; 4 nguy&ecirc;n tắc được ứng dụng nhiều nhất trong thiết kế:</p>\r\n\r\n<h3>Đảm bảo k&iacute;ch thước ban c&ocirc;ng ti&ecirc;u chuẩn</h3>\r\n\r\n<p>Trong Quyết định số 04/2008/QĐ-BTBXD của Bộ trưởng Bộ X&acirc;y dựng, tại mục 2.8.10. Phần nh&agrave; được ph&eacute;p nh&ocirc; qu&aacute; chỉ giới đường đỏ trong trường hợp chỉ giới x&acirc;y dựng tr&ugrave;ng với chỉ giới đường đỏ, th&igrave; k&iacute;ch thước ban c&ocirc;ng phải đ&aacute;p ứng c&aacute;c y&ecirc;u cầu nhất định.</p>\r\n\r\n<p>V&igrave; vậy, khi bạn thiết kế x&acirc;y dựng ban c&ocirc;ng cần đảm bảo c&aacute;c y&ecirc;u cầu sau:</p>\r\n\r\n<p>- Trong khoảng kh&ocirc;ng lấy từ mặt vỉa h&egrave; l&ecirc;n tới độ cao 3,5m, mọi bộ phận của nh&agrave; đều kh&ocirc;ng được nh&ocirc; ra qu&aacute; chỉ giới đường chỉ đỏ, trừ c&aacute;c trường hợp: Từ độ cao 1m trở l&ecirc;n, tất cả c&aacute;c bậu cửa, gờ chỉ, phần trang tr&iacute; được ph&eacute;p vượt đường đỏ kh&ocirc;ng qu&aacute; 0,2m.</p>\r\n\r\n<p>- Trong độ cao từ 3,5m (so với mặt vỉa h&egrave;) trở l&ecirc;n, c&aacute;c bộ phận cố định của ng&ocirc;i nh&agrave; như ban c&ocirc;ng, &ocirc;-văng, s&ecirc;-n&ocirc;, m&aacute;i đua&hellip; được vượt qu&aacute; chỉ giới đường đỏ theo c&aacute;c điều kiện sau:</p>\r\n\r\n<p>Độ vươn ra được đo từ chỉ giới đường đỏ tới m&eacute;p ngo&agrave;i c&ugrave;ng của phần nh&ocirc; ra, phải được nhỏ hơn chiều rộng vỉa h&egrave; &iacute;t nhất 1,0m, phải đảm bảo c&aacute;c quy định về an to&agrave;n mạng lưới điện v&agrave; tu&acirc;n thủ quy định về quản l&yacute; x&acirc;y dựng &aacute;p dụng cụ thể cho khu vực;</p>\r\n\r\n<p>Vị tr&iacute; độ cao v&agrave; độ vươn ban c&ocirc;ng phải thống nhất hoặc tạo được nhịp điệu trong h&igrave;nh thức c&ocirc;ng tr&igrave;nh kiến tr&uacute;c.<br />\r\nTr&ecirc;n phần nh&ocirc; ra chỉ được l&agrave;m ban c&ocirc;ng, kh&ocirc;ng được che chắn tạo th&agrave;nh l&ocirc;-gia hay buồng ở.<br />\r\nĐối với nh&agrave; mặt phố c&oacute; vỉa h&egrave;, ban c&ocirc;ng cần c&oacute; độ cao so với vỉa h&egrave; l&agrave; lớn hơn hoặc bằng 3,5m, c&aacute;ch m&eacute;p vỉa h&egrave; tối thiểu 1m.</p>\r\n\r\n<h3>X&aacute;c định phong c&aacute;ch trước khi thiết kế ban c&ocirc;ng</h3>\r\n\r\n<p>Trong&nbsp;<strong>nguy&ecirc;n tắc thiết kế ban c&ocirc;ng</strong>, việc x&aacute;c định phong c&aacute;ch thiết kế rất quan trọng. Điều n&agrave;y gi&uacute;p bạn khai th&aacute;c hợp l&yacute; diện t&iacute;ch kh&ocirc;ng gian m&agrave; kh&ocirc;ng l&agrave;m mất t&iacute;nh thẩm mỹ của ng&ocirc;i nh&agrave;.&nbsp;</p>\r\n\r\n<p>V&iacute; dụ: Bạn chọn phong c&aacute;ch thiết kế ban c&ocirc;ng &Aacute; Đ&ocirc;ng, c&aacute;ch thiết kế sẽ theo xu hướng mềm mại kết hợp với c&acirc;y xanh tự nhi&ecirc;n.</p>\r\n\r\n<p>Nếu bạn chọn phong c&aacute;ch thiết kế ban c&ocirc;ng ch&acirc;u &Acirc;u, c&aacute;ch thiết kế sẽ hướng đến những đường thẳng v&agrave; nội thất hiện đại.</p>\r\n\r\n<p><img alt=\"thiet-ke-ban-cong\" src=\"https://img.homedy.com/store/images/2020/12/16/thiet-ke-ban-cong-637436886470121922.jpg\" style=\"height:756px; width:1000px\" /></p>\r\n\r\n<p><em>Thiết kế ban c&ocirc;ng hơi hướng &Aacute; Đ&ocirc;ng</em></p>\r\n\r\n<h3>Thiết kế ban c&ocirc;ng ph&ugrave; hợp phong thủy</h3>\r\n\r\n<p>T&ugrave;y theo tuổi, mệnh của gia chủ m&agrave;&nbsp;<strong><em>nguy&ecirc;n tắc thiết kế ban c&ocirc;ng</em></strong>&nbsp;sao cho hợp phong thủy sẽ kh&aacute;c nhau. Phần lớn, c&aacute;c ng&ocirc;i nh&agrave; sẽ lựa chọn ban c&ocirc;ng hướng Đ&ocirc;ng để mang t&agrave;i l&ocirc;c cho gia đ&igrave;nh. Bởi đ&acirc;y l&agrave; hướng mặt trời mọc mang lại nguồn năng lượng t&iacute;ch cực v&agrave; cũng mang đến &aacute;nh s&aacute;ng tốt l&agrave;nh buổi s&aacute;ng. Từ đ&oacute;, gi&uacute;p c&aacute;c th&agrave;nh vi&ecirc;n gia đ&igrave;nh c&oacute; th&ecirc;m nguồn năng lượng t&iacute;ch cực.&nbsp;</p>\r\n\r\n<p>Ngo&agrave;i ra, hướng Nam cũng l&agrave; hướng được lựa chọn nhiều để x&acirc;y ban c&ocirc;ng bởi mang đến kh&ocirc;ng kh&iacute; trong l&agrave;nh, m&aacute;t dịu v&agrave; phong thủy tốt.</p>\r\n\r\n<p>2 hướng Bắc v&agrave; T&acirc;y n&ecirc;n tr&aacute;nh. V&igrave; nếu x&acirc;y ban c&ocirc;ng hướng Bắc ng&ocirc;i nh&agrave; sẽ hứng những cơn gi&oacute; lạnh, mưa b&atilde;o của thời tiết thất thường, ảnh hưởng đến sức khỏe. Ban c&ocirc;ng hướng T&acirc;y bị &aacute;nh nắng mặt trời chiếu cả ng&agrave;y, kh&oacute; tản nhiệt, l&agrave;m kh&ocirc;ng kh&iacute; trong nh&agrave; kh&ocirc;ng tốt.</p>\r\n\r\n<h3>Thiết kế ban c&ocirc;ng đảm bảo t&iacute;nh&nbsp;tiện dụng</h3>\r\n\r\n<p>Bạn ho&agrave;n to&agrave;n c&oacute; thể thiết kế ban c&ocirc;ng đảm bảo t&iacute;nh tiện dụng bằng c&aacute;ch ch&uacute; &yacute; đến nhu cầu giải tr&iacute; của gia đ&igrave;nh. V&iacute; dụ, nếu bạn y&ecirc;u th&iacute;ch ngồi ngắm thi&ecirc;n nhi&ecirc;n, c&oacute; thể thiết kế ban c&ocirc;ng k&egrave;m bộ b&agrave;n ghế nhỏ. Nếu bạn th&iacute;ch c&oacute; nguồn rau sạch, c&oacute; thể thiết kế ban c&ocirc;ng th&agrave;nh nơi trồng rau đ&ecirc; gần gũi với thi&ecirc;n nhi&ecirc;n.&nbsp;</p>\r\n\r\n<p><img alt=\"thiet-ke-ban-cong-1\" src=\"https://img.homedy.com/store/images/2020/12/16/thiet-ke-ban-cong-1-637436890955255649.png\" style=\"height:668px; width:1000px\" /></p>\r\n\r\n<p><em>Thiết kế ban c&ocirc;ng mang t&iacute;nh tiện dụng</em></p>\r\n\r\n<h2>Những lưu &yacute; khi trồng c&acirc;y xanh ở ban c&ocirc;ng nh&agrave; đẹp</h2>\r\n\r\n<p>C&acirc;y xanh gi&uacute;p ban c&ocirc;ng trở n&ecirc;n đẹp v&agrave; thu h&uacute;t hơn. Tuy nhi&ecirc;n kh&ocirc;ng phải ai cũng biết c&aacute;ch trồng c&acirc;y xanh hợp l&yacute;. Dưới đ&acirc;y l&agrave; một số hướng dẫn:&nbsp;</p>\r\n\r\n<p>Lựa chọn c&acirc;y trồng c&oacute; khả năng chịu nhiệt, chịu nắng: v&igrave; ban c&ocirc;ng l&agrave; nơi đ&oacute;n nhiều nắng gi&oacute; n&ecirc;n khi trồng c&acirc;y bạn n&ecirc;n lựa chọn được những loại c&acirc;y c&oacute; sức chịu nắng tốt như xương rồng, hoa 1o giờ, hoa đ&aacute;, hoa sứ,&hellip;</p>\r\n\r\n<p>Lựa chọn k&iacute;ch thước c&acirc;y trồng: v&igrave; ban c&ocirc;ng l&agrave; nơi c&oacute; k&iacute;ch thước rất nhỏ n&ecirc;n bạn chỉ n&ecirc;n lựa chọn những loại c&acirc;y trồng c&oacute; k&iacute;ch thước ph&ugrave; hợp để trang tr&iacute; gi&uacute;p l&agrave;m nổi bật kh&ocirc;ng gian xanh của bạn.</p>\r\n\r\n<p>Trồng c&acirc;y d&acirc;y leo ban c&ocirc;ng: nếu bạn c&oacute; &yacute; tưởng trang tr&iacute; ban c&ocirc;ng bằng c&acirc;y d&acirc;y leo th&igrave; n&ecirc;n lựa chọn những c&acirc;y chịu hạn tốt, c&oacute; k&iacute;ch thước nhỏ để tr&aacute;nh tạo sức nặng lớn l&ecirc;n gi&agrave;n. Một số loại c&acirc;y ph&ugrave; hợp như t&oacute;c ti&ecirc;n, huỳnh anh, huỳnh đệ,&hellip;</p>\r\n\r\n<p>H&atilde;y ứng dụng những&nbsp;<strong>nguy&ecirc;n tắc thiết kế ban c&ocirc;ng</strong>&nbsp;tr&ecirc;n để l&ecirc;n &yacute; tưởng thiết kế một ban c&ocirc;ng ấn tượng, đẹp v&agrave; hợp phong thủy nhất. Ch&uacute;c bạn c&oacute; được một&nbsp; ban c&ocirc;ng ưng &yacute;!</p>', 'hinh47.png', '2021-01-08', 'admin', NULL, '2021-01-08 14:31:21');
INSERT INTO `tin_tuc` (`id_tin`, `tieude`, `noidung_tt`, `noidung`, `hinh_anh_tin`, `ngaydang`, `tacgia`, `created_at`, `updated_at`) VALUES
(10, '8 ý tưởng trang trí noel cho nhà ở độc lạ mà lại siêu tiết kiệm', 'Các ý tưởng trang trí noel cho nhà ở dưới đây không chỉ tiết kiệm mà còn thân thiện với môi trường. Vì vậy, cha mẹ có thể khuyến khích trẻ nhỏ cùng tham gia trang trí với mình, tăng sự sáng tạo cho trẻ. Dưới đây là một số gợi ý, bạn có thể tham khảo để biến đổi tùy không gian gia đình.', '<p><strong>M&ugrave;a lễ hội cuối năm 2020</strong>&nbsp;đến gần, chỉ cần khoảng 30 ph&uacute;t chuẩn bị, bạn ho&agrave;n to&agrave;n c&oacute; thể sở hữu những kh&ocirc;ng gian nh&agrave; ở độc đ&aacute;o&nbsp;đ&oacute;n Noel với mức chi ph&iacute; tiết kiệm, cả ng&ocirc;i nh&agrave;/căn hộ của bạn sẽ được phủ một m&agrave;u sắc noel rất ri&ecirc;ng.</p>\r\n\r\n<h2><strong>1. &Yacute; tưởng tạo c&acirc;y th&ocirc;ng Noel cho ph&ograve;ng kh&aacute;ch</strong></h2>\r\n\r\n<p>Nhắc đến noel kh&ocirc;ng thể thiếu c&acirc;y th&ocirc;ng - c&acirc;y đặc trưng nhất gi&uacute;p mang sắc m&agrave;u noel đến. Th&ocirc;ng thường,&nbsp;<a href=\"https://homedy.com/news/8-y-tuong-trang-tri-noel-cho-nha-o-doc-la-ma-lai-sieu-tiet-kiem-ne5905\"><strong>trang tr&iacute; noel</strong></a>&nbsp;cho nh&agrave; ở<strong>&nbsp;</strong>c&aacute;c gia đ&igrave;nh<strong>&nbsp;</strong>đặt c&acirc;y th&ocirc;ng ở ph&ograve;ng kh&aacute;ch. C&oacute; rất nhiều &yacute; tưởng tự tạo c&acirc;y th&ocirc;ng noel từ s&aacute;ch b&aacute;o cũ, s&aacute;ch vỏ, vỏ chai... rất th&acirc;n thiện với m&ocirc;i trường v&agrave; tiết kiệm chi ph&iacute;. Bạn c&oacute; thể tham khảo một số &yacute; tưởng c&acirc;y th&ocirc;ng noel sau:</p>\r\n\r\n<p><img alt=\"cay-thong-noel\" src=\"https://img.homedy.com/store/images/2020/12/11/cay-thong-noel-637432748757593266.jpg\" style=\"height:913px; width:607px\" /></p>\r\n\r\n<p><em>C&acirc;y th&ocirc;ng noel từ b&aacute;o cũ</em></p>\r\n\r\n<p><img alt=\"cay-thong-noel-1\" src=\"https://img.homedy.com/store/images/2020/12/11/cay-thong-noel-1-637432755046588433.jpg\" style=\"height:457px; width:607px\" /></p>\r\n\r\n<p><em>C&acirc;y th&ocirc;ng noel được tạo từ c&aacute;ch sắp xếp những cuốn s&aacute;ch trong tủ s&aacute;ch gia đ&igrave;nh</em></p>\r\n\r\n<p><img alt=\"cay-thong\" src=\"https://img.homedy.com/store/images/2020/12/11/cay-thong-1-637432762042827057.jpg\" style=\"height:607px; width:607px\" /></p>\r\n\r\n<p><em>Tự l&agrave;m c&acirc;y th&ocirc;ng noel từ cầu thang v&agrave; c&aacute;c vật trang tr&iacute; dễ thương</em></p>\r\n\r\n<p><img alt=\"cay-thong\" src=\"https://img.homedy.com/store/images/2020/12/11/cay-thong-637432762593204365.png\" style=\"height:608px; width:607px\" /></p>\r\n\r\n<p><em>C&acirc;y th&ocirc;ng noel l&agrave;m từ c&aacute;c thanh gỗ</em></p>\r\n\r\n<p><strong>&gt;&gt;&gt; XEM TH&Ecirc;M:</strong></p>\r\n\r\n<p><strong><a href=\"https://homedy.com/news/20-y-tuong-lam-vuon-treo-doc-dao-cho-nha-pho-va-chung-cu-ne5071\">20+ &yacute; tưởng l&agrave;m vườn treo độc đ&aacute;o cho nh&agrave; phố v&agrave; chung cư</a></strong></p>\r\n\r\n<p><strong><a href=\"https://homedy.com/news/20-y-tuong-thiet-ke-san-thuong-2020-vua-sieu-dep-lai-it-chi-phi-ne5542\">20+ &yacute; tưởng thiết kế s&acirc;n thượng 2020 vừa si&ecirc;u đẹp lại &iacute;t chi ph&iacute;</a></strong></p>\r\n\r\n<p>Nh&igrave;n chung, c&oacute; rất nhiều&nbsp;<strong>c&aacute;ch l&agrave;m c&acirc;y th&ocirc;ng noel tại nh&agrave;&nbsp;</strong>đơn giản, dễ thực hiện. V&igrave; vậy, bạn h&atilde;y thỏa sức s&aacute;ng tạo để mang đến kh&ocirc;ng kh&iacute; gi&aacute;ng sinh trong gia đ&igrave;nh vừa đẹp lại si&ecirc;u rẻ.</p>\r\n\r\n<h2><strong>2. Trang tr&iacute; bằng&nbsp;tường nh&agrave; đ&oacute;n Noel</strong></h2>\r\n\r\n<p>Bạn h&atilde;y sử dụng những mẫu decal d&aacute;n tường mang kh&ocirc;ng kh&iacute; noel để gi&uacute;p ng&ocirc;i nh&agrave; của m&igrave;nh tr&ocirc;ng sắc m&agrave;u noel hơn.</p>\r\n\r\n<p><img alt=\"trang-tri-tuong-giang-sinh\" src=\"https://img.homedy.com/store/images/2020/12/11/trang-tri-tuong-giang-sinh-637432764563042364.jpg\" style=\"height:607px; width:607px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; tường nh&agrave; bằng decal đ&oacute;n noel</em></p>\r\n\r\n<p><img alt=\"noel\" src=\"https://img.homedy.com/store/images/2020/12/11/noel-637432765931666363.jpg\" style=\"height:607px; width:607px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; tường nh&agrave; bằng c&aacute;c d&acirc;y treo đ&oacute;n noel</em></p>\r\n\r\n<h2><strong>3. Mang sắc m&agrave;u noel đến cầu thang</strong></h2>\r\n\r\n<p>C&oacute; kh&aacute; nhiều c&aacute;ch t&ocirc; điểm cho cầu thang của gia đ&igrave;nh bạn tr&agrave;n ngập sắc m&agrave;u noel. Một v&agrave;i gợi &yacute; l&agrave; bạn c&oacute; thể th&ecirc;m d&acirc;y th&ocirc;ng cuốn, v&ograve;ng nguyệt kế, những chiếc nơ, những b&oacute; hoa kh&ocirc;... Sau đ&oacute;, bạn c&oacute; thể lắp th&ecirc;m những d&acirc;y đ&egrave;n nh&aacute;y lung linh nh&eacute;.&nbsp;</p>\r\n\r\n<p><img alt=\"trangtricauthang\" src=\"https://img.homedy.com/store/images/2020/12/11/trangtricauthang-637432769043813760.jpg\" style=\"height:607px; width:607px\" /></p>\r\n\r\n<p><em>Kh&ocirc;ng kh&iacute; gi&aacute;ng sinh ngập tr&agrave;n cầu thang</em></p>\r\n\r\n<p><img alt=\"trangtricauthang\" src=\"https://img.homedy.com/store/images/2020/12/11/trangtricauthang1-637432769553615711.jpg\" style=\"height:607px; width:607px\" /></p>\r\n\r\n<p><em>Một gợi &yacute; trang tr&iacute; cầu thang noel kh&aacute;c</em></p>\r\n\r\n<h2><strong>4. Th&ecirc;m sắc m&agrave;u noel cho căn bếp</strong></h2>\r\n\r\n<p>Bếp l&agrave; nơi c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh qu&acirc;y quần, v&igrave; thế bạn h&atilde;y ch&uacute; trọng trong kh&ocirc;ng gian n&agrave;y. Chỉ cần v&agrave;i điểm nhấn như decal d&aacute;n, &ocirc;ng gi&agrave; noel hay v&ograve;ng nguyệt quế cũng sẽ khiến kh&ocirc;ng gian bếp gia đ&igrave;nh bạn trở n&ecirc;n thu h&uacute;t hơn rất nhiều.</p>\r\n\r\n<p><img alt=\"trangtribep\" src=\"https://img.homedy.com/store/images/2020/12/11/trangtribep1-637432772859586625.jpg\" style=\"height:455px; width:607px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; kh&ocirc;ng gian bếp ngập sắc noel</em></p>\r\n\r\n<h2><strong>5. Phỏng ngủ ch&agrave;o đ&oacute;n gi&aacute;ng sinh</strong></h2>\r\n\r\n<p>Để mang kh&ocirc;ng gian gi&aacute;ng sinh v&agrave;o phỏng ngủ, bạn chỉ cần thay đổi ga gối giường bằng những gam m&agrave;u đỏ ấm &aacute;p của noel. Đừng qu&ecirc;n th&ecirc;m những d&acirc;y đ&egrave;n nh&aacute;y để kh&ocirc;ng gian th&ecirc;m lung linh nh&eacute;.&nbsp;</p>\r\n\r\n<p><img alt=\"trang-tri-phong-ngu\" src=\"https://img.homedy.com/store/images/2020/12/11/trangtriphongngu-637432775663213054.jpg\" style=\"height:607px; width:607px\" /></p>\r\n\r\n<p><em>Ph&ograve;ng ngủ đậm chất gi&aacute;ng sinh</em></p>\r\n\r\n<p><img alt=\"trang-tri-phong-ngu\" src=\"https://img.homedy.com/store/images/2020/12/11/trangtriphongngu1-637432776064050067.jpg\" style=\"height:607px; width:607px\" /></p>\r\n\r\n<p><em>Ph&ograve;ng ngủ mang hơi hướng noel</em></p>\r\n\r\n<h2><strong>6. Trang tr&iacute; noel cho cửa ra v&agrave;o</strong></h2>\r\n\r\n<p>Cửa ra v&agrave;o ch&iacute;nh l&agrave; nơi để bạn thỏa sức trang tr&iacute;, t&ugrave;y theo khả năng v&agrave; nhu cầu m&agrave; bạn c&oacute; thể lựa chọn cầu kỳ hoặc đơn giản. Nơi đ&acirc;y gi&uacute;p mang đến cảm gi&aacute;c kh&ocirc;ng kh&iacute; lễ hội chung, bạn c&oacute; thể lựa chọn c&acirc;y th&ocirc;ng noel, &ocirc;ng gi&agrave; noel, đ&egrave;n nh&aacute;y để nhấn mạnh.</p>\r\n\r\n<p><img alt=\"trang-tri-cua\" src=\"https://img.homedy.com/store/images/2020/12/11/trang-tri-cua-637432777275609700.jpg\" style=\"height:607px; width:607px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; cửa ra v&agrave;o đ&oacute;n noel</em></p>\r\n\r\n<p><img alt=\"cuanha\" src=\"https://img.homedy.com/store/images/2020/12/11/cuanha-637432778431815610.jpg\" style=\"height:682px; width:607px\" /></p>\r\n\r\n<p><em>Cửa nh&agrave; ngập sắp noel</em></p>\r\n\r\n<h2><strong>7. Trang tr&iacute; cửa sổ đ&oacute;n noel</strong></h2>\r\n\r\n<p>Theo c&aacute;c c&acirc;u chuyện, &ocirc;ng gi&agrave; Noel sẽ đến thăm v&agrave; tặng qu&agrave; cho trẻ nhỏ th&ocirc;ng qua cửa sổ. V&igrave; vậy, nếu gia đ&igrave;nh bạn c&oacute; trẻ nhỏ h&atilde;y ch&uacute; &yacute; trong trang tr&iacute; khu vực n&agrave;y. Nếu bạn l&agrave; người th&iacute;ch đơn giản th&igrave; chỉ cần decal gi&aacute;n, đ&egrave;n nh&aacute;y, v&ograve;ng nguyệt quế... m&agrave; th&ocirc;i.</p>\r\n\r\n<p><img alt=\"cuaso\" src=\"https://img.homedy.com/store/images/2020/12/11/cuaso-637432781047876843.jpg\" style=\"height:433px; width:607px\" /></p>\r\n\r\n<p><em>Trang tr&iacute; cửa sổ ngập sắc m&agrave;u noel</em></p>\r\n\r\n<p><img alt=\"cua-so\" src=\"https://img.homedy.com/store/images/2020/12/11/cuaso1-637432781359071954.jpg\" style=\"height:607px; width:607px\" /></p>\r\n\r\n<p><em>Decal d&aacute;n gi&uacute;p kh&ocirc;ng kh&iacute; noel ngập tr&agrave;n</em></p>\r\n\r\n<h2><strong>8. Trang tr&iacute; trần nh&agrave;</strong></h2>\r\n\r\n<p>Bạn c&oacute; thể vận dụng<strong>&nbsp;&yacute;&nbsp;tưởng trang tr&iacute; noel cho nh&agrave; ở&nbsp;</strong>để l&agrave;m cho trần nh&agrave; của gia đ&igrave;nh trở n&ecirc;n độc đ&aacute;o hơn. Trần nh&agrave; bạn c&oacute; thể treo v&ograve;ng nguyệt quế, quả chu&ocirc;ng v&agrave; c&aacute;c vật dễ thương kh&aacute;c.&nbsp;</p>\r\n\r\n<p><img alt=\"trang-tri-tran-nha\" src=\"https://img.homedy.com/store/images/2020/12/11/trang-tri-tran-nha-637432782447821318.jpg\" style=\"height:379px; width:607px\" /></p>\r\n\r\n<p><em>Treo c&aacute;c vật độc đ&aacute;o l&ecirc;n ph&iacute;a trần nh&agrave;</em></p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; những &yacute; tưởng&nbsp;<strong><em>trang tr&iacute; noel cho nh&agrave; ở&nbsp;</em></strong>&nbsp;gi&uacute;p bạn c&oacute; được kh&ocirc;ng gian đậm sắc m&agrave;u. C&oacute; h&agrave;ng ngh&igrave;n &yacute; tưởng trang tr&iacute; độc đ&aacute;o, cập nhật li&ecirc;n tục theo xu hướng&nbsp;cho nh&agrave; ở bạn c&oacute; thể tham khảo tại&nbsp;<strong><a href=\"https://homedy.com/feed/yeu-nha\">cộng đồng y&ecirc;u nh&agrave; đẹp Homedy</a>.&nbsp;</strong></p>', 'hinh32.png', '2021-01-08', 'admin', NULL, '2021-01-08 14:31:33'),
(14, 'ádsd', 'qqq', '<p>&aacute;dsd</p>', 'hinh28.png', '2021-01-08', 'admin', NULL, '2021-01-08 14:31:47'),
(15, 'ưqưqưqư', 'sađsad', '<p><strong>&aacute;dsđ&acirc;sđ&acirc;sđ&aacute;</strong></p>', '0d5310f57ce980b7d9f817_1596879786.jpg', '2021-01-08', 'sanh', NULL, NULL),
(16, 'wqqwe', 'qweqwe', '<p>wdwdwd</p>', '10fefd762b5cda02834d25.jpg', '2021-01-08', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trang_thiet_bi`
--

CREATE TABLE `trang_thiet_bi` (
  `id_ttb` int(10) UNSIGNED NOT NULL,
  `ten_ttb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_ttb` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trang_thiet_bi`
--

INSERT INTO `trang_thiet_bi` (`id_ttb`, `ten_ttb`, `hinh_ttb`, `created_at`, `updated_at`) VALUES
(1, 'Điều hòa', 'AirConditioner.png', '2020-11-13 15:35:11', '2020-11-29 20:22:29'),
(2, 'Ti Vi', 'TVShelf.png', '2020-12-04 15:35:11', '2020-12-07 15:35:11'),
(3, 'Tủ lạnh', 'Fridge.png', '2020-11-13 15:37:06', '2020-11-29 20:22:52'),
(4, 'Máy Giặt', 'WashingMachine.png', '2020-11-13 15:37:06', '2020-11-29 20:23:10'),
(13, 'Máy Lạnh', 'AirConditioner.png', '2020-11-29 23:28:49', '2020-11-29 23:28:49'),
(14, 'Wifi', 'Internet.png', '2020-12-01 19:37:47', '2020-12-01 19:37:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD KEY `id_pttt` (`id_pttt`),
  ADD KEY `id_hd` (`id_hd`),
  ADD KEY `id_phong` (`id_phong`);

--
-- Indexes for table `dichvuchung`
--
ALTER TABLE `dichvuchung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dieukiengiam`
--
ALTER TABLE `dieukiengiam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hieu_ung`
--
ALTER TABLE `hieu_ung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `id_tk` (`id_tk`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `loai_phong`
--
ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`id_loai_phong`);

--
-- Indexes for table `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dieu_kien_giam` (`dieu_kien_giam`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id_phong`),
  ADD KEY `id_loai_phong` (`id_loai_phong`);

--
-- Indexes for table `pt_thanhtoan`
--
ALTER TABLE `pt_thanhtoan`
  ADD PRIMARY KEY (`id_pttt`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`),
  ADD KEY `id_ad` (`id_ad`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id_tin`);

--
-- Indexes for table `trang_thiet_bi`
--
ALTER TABLE `trang_thiet_bi`
  ADD PRIMARY KEY (`id_ttb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dichvuchung`
--
ALTER TABLE `dichvuchung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dieukiengiam`
--
ALTER TABLE `dieukiengiam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hieu_ung`
--
ALTER TABLE `hieu_ung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id_hd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `loai_phong`
--
ALTER TABLE `loai_phong`
  MODIFY `id_loai_phong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `magiamgia`
--
ALTER TABLE `magiamgia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id_phong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `pt_thanhtoan`
--
ALTER TABLE `pt_thanhtoan`
  MODIFY `id_pttt` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id_tin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trang_thiet_bi`
--
ALTER TABLE `trang_thiet_bi`
  MODIFY `id_ttb` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_2` FOREIGN KEY (`id_hd`) REFERENCES `hoa_don` (`id_hd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_3` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id_phong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id_tk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD CONSTRAINT `magiamgia_ibfk_1` FOREIGN KEY (`dieu_kien_giam`) REFERENCES `dieukiengiam` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`id_loai_phong`) REFERENCES `loai_phong` (`id_loai_phong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`id_ad`) REFERENCES `admin` (`id_ad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
