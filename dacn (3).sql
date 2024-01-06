-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2024 lúc 12:21 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dacn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `emailad` varchar(50) NOT NULL,
  `tenad` varchar(50) NOT NULL,
  `matkhauad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`emailad`, `tenad`, `matkhauad`) VALUES
('thanhtrucn32@gmail.com', 'Nguyễn Thanh Trúc', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bomon`
--

CREATE TABLE `bomon` (
  `MaBM` int(11) NOT NULL,
  `TenBM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bomon`
--

INSERT INTO `bomon` (`MaBM`, `TenBM`) VALUES
(1, 'Công nghệ ô tô'),
(2, 'Công nghệ điện tử'),
(3, 'Công nghệ thông tin '),
(4, 'Công nghệ cơ khí');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chamthi`
--

CREATE TABLE `chamthi` (
  `MaCT` int(11) NOT NULL,
  `MaLop` varchar(20) NOT NULL,
  `MaMH` int(11) NOT NULL,
  `MaNK` int(11) NOT NULL,
  `MaHT` int(11) NOT NULL,
  `MaHK` int(11) NOT NULL,
  `Ngaynhan` date NOT NULL,
  `Ngaytra` date NOT NULL,
  `SLbai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chamthi`
--

INSERT INTO `chamthi` (`MaCT`, `MaLop`, `MaMH`, `MaNK`, `MaHT`, `MaHK`, `Ngaynhan`, `Ngaytra`, `SLbai`) VALUES
(1, 'DA20TTA', 22001, 1, 4, 1, '2024-01-07', '2024-01-14', 33),
(2, 'DA20TTB', 22002, 2, 6, 2, '2024-01-09', '2024-01-18', 38),
(3, 'DA21CKA', 230056, 2, 5, 1, '2023-12-05', '2023-12-10', 40);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` int(11) NOT NULL,
  `MaBM` varchar(20) NOT NULL,
  `TenGV` varchar(50) NOT NULL,
  `SdtGV` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Matkhau` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `MaBM`, `TenGV`, `SdtGV`, `Email`, `Matkhau`) VALUES
(1, '2', 'Nguyễn A', 978787331, 'anguyen@gmail.com', '123'),
(2, '3', 'Nguyễn Văn D', 998778732, 'dnguyen@gmail.com', '123'),
(3, '3', 'Nguyễn Hoàng Duy Thiện', 997847879, 'duythien@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthuc`
--

CREATE TABLE `hinhthuc` (
  `MaHT` int(11) NOT NULL,
  `TenHT` varchar(50) NOT NULL,
  `Hthuc` varchar(50) NOT NULL,
  `Buoi` varchar(50) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhthuc`
--

INSERT INTO `hinhthuc` (`MaHT`, `TenHT`, `Hthuc`, `Buoi`, `Gia`) VALUES
(4, 'Lý thuyết - 90 phút', 'Lý thuyết', 'Sáng', 4500),
(5, 'Lý thuyết - 120 phút', 'Lý thuyết', 'Trưa', 5000),
(6, 'Thực hành - 90 phút', 'Thực hành', 'Sáng', 4500),
(7, 'Thực hành - 60 phút', 'Thực hành', 'Tối', 5500);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

CREATE TABLE `hocky` (
  `MaHK` int(11) NOT NULL,
  `TenHK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--

INSERT INTO `hocky` (`MaHK`, `TenHK`) VALUES
(1, 'Học kỳ 1'),
(2, 'Học kỳ 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(20) NOT NULL,
  `TenLop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`) VALUES
('DA20TTA', 'Công nghệ thông tin A'),
('DA20TTB', 'Công nghệ thông tin B'),
('DA21CKA', 'Công nghệ cơ khí A'),
('DA22KDA', 'Công nghệ điện tử A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` int(11) NOT NULL,
  `TenMH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`) VALUES
(22001, 'Thiết kế web'),
(22002, 'Lập trình hướng đối tượng'),
(210332, 'Kết cấu và tính toán ô tô'),
(210379, 'Vi điều khiển ứng dụng'),
(230056, 'Dao động'),
(240000, 'Điện tử cơ bản'),
(240078, 'Thiết bị điện trong truyền tải và phân phối điện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nienkhoa`
--

CREATE TABLE `nienkhoa` (
  `MaNK` int(11) NOT NULL,
  `TenNK` varchar(50) NOT NULL,
  `TGbatdau` date NOT NULL,
  `TGketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nienkhoa`
--

INSERT INTO `nienkhoa` (`MaNK`, `TenNK`, `TGbatdau`, `TGketthuc`) VALUES
(1, 'Năm học 2023 - 2024', '2023-06-09', '2025-10-15'),
(2, 'Năm học 2022 - 2023', '2022-07-20', '2024-07-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phancong`
--

CREATE TABLE `phancong` (
  `MaGV` int(11) NOT NULL,
  `MaCT` int(11) NOT NULL,
  `Trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`emailad`);

--
-- Chỉ mục cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`MaBM`);

--
-- Chỉ mục cho bảng `chamthi`
--
ALTER TABLE `chamthi`
  ADD PRIMARY KEY (`MaCT`),
  ADD KEY `MaHT` (`MaHT`),
  ADD KEY `MaNK` (`MaNK`),
  ADD KEY `MaHK` (`MaHK`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `MaMH` (`MaMH`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaBM` (`MaBM`);

--
-- Chỉ mục cho bảng `hinhthuc`
--
ALTER TABLE `hinhthuc`
  ADD PRIMARY KEY (`MaHT`);

--
-- Chỉ mục cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`MaHK`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Chỉ mục cho bảng `nienkhoa`
--
ALTER TABLE `nienkhoa`
  ADD PRIMARY KEY (`MaNK`);

--
-- Chỉ mục cho bảng `phancong`
--
ALTER TABLE `phancong`
  ADD PRIMARY KEY (`MaGV`,`MaCT`),
  ADD KEY `MaCT` (`MaCT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bomon`
--
ALTER TABLE `bomon`
  MODIFY `MaBM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `chamthi`
--
ALTER TABLE `chamthi`
  MODIFY `MaCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `MaGV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hinhthuc`
--
ALTER TABLE `hinhthuc`
  MODIFY `MaHT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nienkhoa`
--
ALTER TABLE `nienkhoa`
  MODIFY `MaNK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chamthi`
--
ALTER TABLE `chamthi`
  ADD CONSTRAINT `chamthi_ibfk_1` FOREIGN KEY (`MaHK`) REFERENCES `hocky` (`MaHK`),
  ADD CONSTRAINT `chamthi_ibfk_2` FOREIGN KEY (`MaHT`) REFERENCES `hinhthuc` (`MaHT`),
  ADD CONSTRAINT `chamthi_ibfk_3` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`),
  ADD CONSTRAINT `chamthi_ibfk_4` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`),
  ADD CONSTRAINT `chamthi_ibfk_5` FOREIGN KEY (`MaNK`) REFERENCES `nienkhoa` (`MaNK`);

--
-- Các ràng buộc cho bảng `phancong`
--
ALTER TABLE `phancong`
  ADD CONSTRAINT `phancong_ibfk_1` FOREIGN KEY (`MaCT`) REFERENCES `chamthi` (`MaCT`),
  ADD CONSTRAINT `phancong_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
