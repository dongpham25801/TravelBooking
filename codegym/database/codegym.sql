-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 22, 2020 lúc 05:27 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `codegym`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `uptohouse`
--

CREATE TABLE `uptohouse` (
  `ID` int(10) NOT NULL,
  `TenNha` varchar(20) DEFAULT NULL,
  `LoaiNha` varchar(15) DEFAULT NULL,
  `LoaiPhong` varchar(15) DEFAULT NULL,
  `DiaChi` varchar(30) DEFAULT NULL,
  `SLphongNgu` int(10) DEFAULT NULL,
  `SLphongTam` int(10) NOT NULL,
  `GiaTienTheoDem` int(8) DEFAULT NULL,
  `MoTaChung` varchar(150) NOT NULL,
  `HinhAnh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `uptohouse`
--

INSERT INTO `uptohouse` (`ID`, `TenNha`, `LoaiNha`, `LoaiPhong`, `DiaChi`, `SLphongNgu`, `SLphongTam`, `GiaTienTheoDem`, `MoTaChung`, `HinhAnh`) VALUES
(18, 'duy manh luxury', 'Luxury', '2', 'Ha Noi', 4, 4, 350000, 'hay ve day pen ank', 'do.thi.hoai.linh_A.jpg'),
(19, 'Nha cua tui', 'Homestay', '4', 'Ha Noi', 4, 4, 350000, 'hello everybody', 'nha 1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `youremail` varchar(25) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `yourphone` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `youremail`, `password`, `username`, `yourphone`) VALUES
(25, 'ptu@gmail.com', '123', 'uyen', 123456987),
(26, 'ptd@gmail.com', '123', 'dongdz', 123456789),
(27, 'ptuptu@gmail.com', '123', 'tu uyen', 12345),
(28, 'dongdeptry0798@gmail.com', '123', 'deptraivl', 123456);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `uptohouse`
--
ALTER TABLE `uptohouse`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `uptohouse`
--
ALTER TABLE `uptohouse`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
