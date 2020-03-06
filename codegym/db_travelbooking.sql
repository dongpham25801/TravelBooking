-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 06, 2020 lúc 07:12 PM
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
-- Cấu trúc bảng cho bảng `bookroom`
--

CREATE TABLE `bookroom` (
  `IDbookroom` int(5) NOT NULL,
  `tenkhach` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenphong` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diadiem` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` int(10) DEFAULT NULL,
  `sophong` int(10) DEFAULT NULL,
  `sokhach` int(10) DEFAULT NULL,
  `loaiphong` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaytoi` date DEFAULT NULL,
  `roidi` date DEFAULT NULL,
  `trangthai` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IDkhach` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bookroom`
--

INSERT INTO `bookroom` (`IDbookroom`, `tenkhach`, `tenphong`, `diadiem`, `sdt`, `sophong`, `sokhach`, `loaiphong`, `ngaytoi`, `roidi`, `trangthai`, `IDkhach`) VALUES
(1, 'Quyen', 'Dong Homestay', 'Ha Noi', 123456987, 1, 1, '1 giường', '2020-03-02', '2020-03-06', NULL, NULL),
(2, 'Quyen', 'Dong Homestay', 'Ha Noi', 123456987, 1, 1, '1 giường', '2020-03-02', '2020-03-06', NULL, NULL),
(3, 'Quyen', 'Dong Homestay', 'Ha Noi', 123456987, 1, 2, '2 giường', '2020-03-02', '2020-03-05', NULL, NULL),
(4, 'Quyen', 'Dong Homestay', 'Ha Noi', 123456987, 0, 0, '', '2020-03-05', '2020-03-09', 'Đã thuê', NULL);

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
  `HinhAnh` varchar(100) DEFAULT NULL,
  `IDuser` int(10) DEFAULT NULL,
  `NoiBat` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `uptohouse`
--

INSERT INTO `uptohouse` (`ID`, `TenNha`, `LoaiNha`, `LoaiPhong`, `DiaChi`, `SLphongNgu`, `SLphongTam`, `GiaTienTheoDem`, `MoTaChung`, `HinhAnh`, `IDuser`, `NoiBat`) VALUES
(18, 'duy manh luxury', 'Luxury', '2', 'Ha Noi', 4, 4, 350000, 'hay ve day pen ank', 'apple-keyboard-ballpen-camera-843226.jpg', 26, NULL),
(20, 'Delux Cối Xay Gió', 'Homestay', '3', 'Phu Quoc', 3, 3, 350000, 'Welcom to Delux ♥', '10872_1547453283_131694389.jpg', 25, 1),
(21, 'Hostel Hoa Gió', 'Hostel', '2', 'Ha Noi', 4, 4, 350, 'Hello everybody! Relax with us ^^', 'nha1.jpg', NULL, 1),
(25, 'Grand', 'Hostel', '2', 'Phu Quoc', 4, 4, 350000, 'Hello everybody! Relax with us ^^', '52714_1543808881_dsc_1954_(fileminimizer).jpg', 26, 1),
(26, 'Karla Kure Homestay', 'Homestay', '4', 'Da Lat', 4, 4, 360000, 'Một nơi dừng chân ở Đà Lạt ư? Hãy về với đội của chúng tôi!', '19669.jpg', 29, 1),
(28, 'Hotel Pikaka', 'Hotel', '2', 'Ha Noi', 4, 4, 360000, '', 'alarm-alarm-clock-analog-714701.jpg', 26, NULL),
(29, 'Karla Kure', 'Luxury', '2', 'Phu Quoc', 4, 4, 360000, '', '19669.jpg', 26, NULL),
(30, 'Tokita Ohma', 'Luxury', '2', 'Phu Quoc', 4, 4, 360000, 'Đến với chúng tôi để có một kỳ nghỉ tuyệt vời với những căn hộ cao cấp ♥', '57759_1549939011_phong_3_resize.jpg', 26, 1),
(31, 'Tokita Ohma', 'Luxury', '2', 'Ha Noi', 4, 4, 360000, '', 'nha1.jpg', 26, NULL),
(32, 'TUP Queen', 'Homestay', '4', 'Hoi An', 4, 4, 550000, 'Cần một nơi relax and chill ở Hội An? Vậy mau mau đến với nhà TUP thôi, một nơi rất đáng để bạn chill giữa kỳ nghỉ ^^', '2fd3e9a32696fa9a694fe58e40fd09d1.gif', 25, 1),
(33, 'The Wind Castle', 'Luxury', '2', 'Da Nang', 4, 4, 450000, 'Trải nghiệm kỳ nghỉ mát của bạn cùng với chúng tôi để tận hưởng những điều tuyệt vời nhất !', '57759_1549939328_resize_phong_4.jpg', 33, 1),
(34, 'Tèo Nostalgia', 'Classic', '1', 'Hoi An', 4, 4, 350000, 'Hell everybody ! Welcom to Teo Nostalgia ♠', '10872_1501828972_107613476.jpg', 33, 1),
(35, 'Nhà của Tèo', 'Homestay', '4', 'Ha Giang', 3, 3, 300000, 'Phượt thỏa thích, không lo chỗ ngủ !', '52714_1543808944_dsc_2028_(fileminimizer).jpg', 33, 1),
(36, 'Village Homestay', 'Homestay', '4', 'Hoi An', 4, 4, 300000, 'Y/c: Không hút thuốc trong phòng (có thể hút ngoài ban công)', '52714_1543808944_dsc_2028_(fileminimizer).jpg', 25, 1),
(37, 'Dong Homestay', 'Homestay', '2', 'Ha Noi', 2, 2, 300000, 'Welcome to Dong ! Relax and chill with me ', 'nha1.jpg', 25, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `avatar` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youremail` varchar(25) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `yourphone` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `avatar`, `youremail`, `password`, `username`, `yourphone`) VALUES
(25, NULL, 'ptu@gmail.com', '123', 'Quyen', 123456987),
(26, NULL, 'ptd@gmail.com', '123', 'Dong', 123456789),
(27, NULL, 'ptuptu@gmail.com', '123', 'No name', 987654321),
(28, NULL, 'dong98@gmail.com', '123', 'Dongg', 123456),
(29, NULL, 'teo@gmail.com', '123', 'teo', 123),
(30, NULL, 'dongpham@gmail.com', '123', 'DongPh', 582552858),
(31, NULL, 'dongpt@gmail.com', '123', 'Dong', 582552858),
(33, NULL, 'teodz@gmail.com', '123', 'Tèo dz', 369266552),
(39, NULL, 'teo123@gmail.com', '123', 'Teo', 123546);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bookroom`
--
ALTER TABLE `bookroom`
  ADD PRIMARY KEY (`IDbookroom`);

--
-- Chỉ mục cho bảng `uptohouse`
--
ALTER TABLE `uptohouse`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDuser` (`IDuser`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bookroom`
--
ALTER TABLE `bookroom`
  MODIFY `IDbookroom` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `uptohouse`
--
ALTER TABLE `uptohouse`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `uptohouse`
--
ALTER TABLE `uptohouse`
  ADD CONSTRAINT `uptohouse_ibfk_1` FOREIGN KEY (`IDuser`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
