-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 31, 2020 lúc 05:58 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `minhhoang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id_user`, `user`, `password`) VALUES
(1, 'minhhoang', 123);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `track_oder`
--

CREATE TABLE `track_oder` (
  `id_track` int(50) NOT NULL,
  `date` date NOT NULL,
  `user` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `quatity` varchar(255) NOT NULL,
  `tracking_number` int(50) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `track_oder`
--

INSERT INTO `track_oder` (`id_track`, `date`, `user`, `address`, `item`, `price`, `quatity`, `tracking_number`, `status`) VALUES
(2, '2020-08-11', 'cuong', '192.168.1.1', 'qwe', 1, 'asd', 250, 4),
(3, '2020-08-06', 'tess', '121221', 'asjdn', 2, '2321', 2312, 2),
(4, '2020-08-01', 'van', '1212341', 'ndjkn', 4, 'sadasndb ', 5685, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `track_oder`
--
ALTER TABLE `track_oder`
  ADD PRIMARY KEY (`id_track`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `track_oder`
--
ALTER TABLE `track_oder`
  MODIFY `id_track` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
