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
-- Cơ sở dữ liệu: `minhhoang_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `design`
--

CREATE TABLE `design` (
  `Id_Design` int(11) NOT NULL,
  `Name_Design` varchar(1000) NOT NULL,
  `Link_Design` varchar(1000) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `Id_Designscal` int(11) NOT NULL,
  `API_Scal` int(11) NOT NULL,
  `IsDelete` tinyint(4) NOT NULL,
  `CreatedBy` varchar(255) NOT NULL,
  `CreatedDate` datetime(3) NOT NULL,
  `ModifiedBy` varchar(255) NOT NULL,
  `ModifiedDate` datetime(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `IsDelete` tinyint(4) NOT NULL,
  `CreatedBy` varchar(255) NOT NULL,
  `CreatedDate` datetime(3) NOT NULL,
  `ModifiedBy` varchar(255) NOT NULL,
  `ModifiedDate` datetime(3) NOT NULL,
  `IsActive` tinyint(4) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `systemlog`
--

CREATE TABLE `systemlog` (
  `Id` int(11) NOT NULL,
  `CreatedBy` varchar(200) NOT NULL,
  `CreatedDate` datetime(6) NOT NULL,
  `Module` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tracking_shipment`
--

CREATE TABLE `tracking_shipment` (
  `Id_Order` int(11) DEFAULT NULL,
  `Date_Order` date NOT NULL,
  `Username_Login` varchar(50) NOT NULL,
  `Type_Order` varchar(50) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Adress1` varchar(100) NOT NULL,
  `Adress2` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Zipcode` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Quality` int(50) NOT NULL,
  `Product_Identify` varchar(50) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `Design_Id` varchar(50) NOT NULL,
  `Status_Ship` varchar(50) NOT NULL,
  `Tracking_Number` varchar(50) NOT NULL,
  `Note` varchar(1000) NOT NULL,
  `Email_Account` varchar(50) NOT NULL,
  `Password_Account` varchar(50) NOT NULL,
  `Product_Name` varchar(1000) NOT NULL,
  `Api_Key` varchar(50) NOT NULL,
  `Order_Id_Track` varchar(50) NOT NULL,
  `Tracking_Service` varchar(100) NOT NULL,
  `IsDelete` tinyint(4) NOT NULL,
  `CreatedBy` varchar(255) NOT NULL,
  `CreatedDate` datetime(3) NOT NULL,
  `ModifiedBy` varchar(255) NOT NULL,
  `ModifiedDate` datetime(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `PassWord` varchar(255) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `IsDelete` tinyint(4) NOT NULL,
  `CreatedBy` varchar(255) NOT NULL,
  `Created_Date` datetime(3) NOT NULL,
  `ModifiedBy` varchar(255) NOT NULL,
  `ModifiedDate` datetime(3) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `RoleName` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Birth_Day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`Id_Design`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `systemlog`
--
ALTER TABLE `systemlog`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `design`
--
ALTER TABLE `design`
  MODIFY `Id_Design` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `systemlog`
--
ALTER TABLE `systemlog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
