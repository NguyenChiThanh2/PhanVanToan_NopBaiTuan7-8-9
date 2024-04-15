-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 14, 2024 lúc 12:51 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ctsd`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(100) NOT NULL,
  `MaCuocThi` varchar(6) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Năm Sinh` int(4) NOT NULL,
  `Nghề Nghiệp` varchar(30) NOT NULL,
  `Quốc Gia` varchar(20) NOT NULL,
  `Năm Dự Thi` int(4) NOT NULL,
  `Thành Tích` varchar(11) NOT NULL,
  `Ảnh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `MaCuocThi`, `Name`, `Năm Sinh`, `Nghề Nghiệp`, `Quốc Gia`, `Năm Dự Thi`, `Thành Tích`, `Ảnh`) VALUES
(2, 'MG', 'dâdadd', 2005, 'MC, Người mẫu', 'ALBANIA', 2023, 'Hoa Hậu', '1713087551.jpg'),
(3, 'ME', 'Lindsey Coffey', 1992, 'Người Mẫu', 'Hoa Kỳ', 2020, 'Hoa Hậu', 'Lindsey Coffey.jpg'),
(4, 'ME', 'Mina Sue Choi', 1998, 'Người Mẫu', 'Hàn Quốc', 2022, 'Hoa Hậu', 'Mina Sue Choi.jpg'),
(5, 'ME', 'Nguyễn Phương Khánh', 1995, 'Người Mẫu', 'VIETNAM', 2018, 'Hoa Hậu', 'Nguyễn Phương Khánh.jpg'),
(6, 'ME', 'Nguyễn Thị Lệ Nam Em', 1996, 'Người Mẫu', 'VIETNAM', 2016, 'TOP8', 'Nam Em.jpg'),
(7, 'MG', 'Engfa Waraha', 1995, 'Ca Sĩ', 'TH', 2022, 'Á Hậu 1', 'Engfa Waraha.jpg'),
(8, 'MG', 'Isabella Menin', 1996, 'Doanh Nhân', 'Brazill', 2022, 'Hoa Hậu', 'Isabella Menin.jpg'),
(9, 'MG', 'Lê Hoàng Phương', 1995, 'Kiến Trúc Sư', 'VIETNAM', 2023, 'Á Hậu 4', 'Lê Hoàng Phương.jpg'),
(10, 'MG', 'Luciana Fuster', 1999, 'Người Mẫu', 'Pêru', 2023, 'Hoa Hậu', 'Luciana Fuster.jpg'),
(11, 'MG', 'Nguyễn Thúc Thùy Tiên', 1998, 'Người Mẫu', 'VIETNAM', 2021, 'Hoa Hậu', 'Nguyễn Thúc Thùy Tiên.jpg'),
(12, 'MI', 'Andrea Rubio', 1998, 'Nhà Báo ', 'Venezuela', 2023, 'Hoa Hậu', 'Andrea Rubio.jpg'),
(13, 'MI', 'Edumar Martinez', 1995, 'Người mẫu', 'Venezuela', 2015, 'Hoa Hậu', 'Edumar Martinez.jpg'),
(14, 'MI', 'Phạm Hồng Thúy Vân', 1993, 'Doanh Nhân', 'VIETNAM', 2015, 'Á Hậu 3', 'Phạm Hồng Thúy Vân.jpg'),
(15, 'MI', 'Sireethorn Leearamwat', 1993, 'Dược Sĩ', 'Thái Lan', 2019, 'Hoa Hậu', 'Sireethorn Leearamwat.jpg'),
(16, 'MI', 'Sofia Osio', 2000, 'Nhà Giao Tiếp Xã Hội', 'Colombia', 2023, 'Á Hậu 1', 'Sofia Osio.jpg'),
(17, 'MS', 'Andrea Aguilera', 2001, 'Người m', 'Ecuador', 2023, 'Hoa Hậu', 'Andrea Aguilera.jpg'),
(18, 'MS', 'Lalela Mswane', 1997, 'Người Mẫu', 'Nam Phi', 2022, 'Hoa Hậu', 'Lalela Mswane.jpeg'),
(19, 'MS', 'Nguyễn Huỳnh Kim Duyên', 1995, 'Kinh Doanh', 'VIETNAM', 2022, 'Á Hậu 2', 'Nguyễn Huỳnh Kim Duyên.jpg'),
(20, 'MS', 'Stephania Sofia Vazquez Stegman', 1992, 'Người Mẫu', 'Paraguay', 2015, 'Hoa Hậu', 'Stephania Sofia Vazquez Stegman.jpg'),
(21, 'MS', 'Đặng Thanh Ngân', 1999, 'Người Mẫu', 'VIETNAM', 2023, 'Á Hậu 4', 'Đặng Thanh Ngân.jpg'),
(22, 'MU', 'Anntonia Posild', 1996, 'Diễn Viên', 'Thái Lan', 2023, 'Á Hậu 1', 'Anntonia Posild.jpg'),
(23, 'MU', 'Catriona Gray', 1994, 'MC, Ca sĩ', 'Philippines', 2018, 'Hoa Hậu', 'Catriona Gray.jpg'),
(24, 'MU', 'H\'Hen Niê', 1992, 'Người mẫu HLV', 'VIETNAM', 2018, 'TOP5', 'H\'Hen Niê.jpg'),
(25, 'MU', 'Harnaaz Sandhu', 2000, 'Người Mẫu', 'Ấn Độ', 2021, 'Hoa Hậu', 'Harnaaz Sandhu.jpg'),
(26, 'M', 'đa', 44, 'Nhà Thiết Kế Thời Trang', 'Ấn Độ', 0, 'da', 'da.jpg'),
(27, 'MU', 'Zozibini Tunzi', 1993, 'Người Mẫu', 'Nam Phi', 2019, 'Hoa Hậu', 'Zozibini Tunzi.jpg'),
(28, 'MW', 'Karolina Bielewska', 1999, 'Phát Thanh Viên', 'Ba Lan', 2021, 'Hoa Hậu', 'Karolina Bielewska.jpg'),
(29, 'MW', 'Lương Thùy Linh', 2000, 'MC, Giảng Viên ', 'VIETNAM', 2019, 'TOP 12', 'Lương Thùy Linh.jpg'),
(30, 'MW', 'ManuShi Chhillar', 1997, 'Diễn Viên', 'Ấn Độ', 2017, 'Hoa Hậu', 'ManuShi Chhillar.jpg'),
(31, 'MW', 'Stephanie Del Valle', 1996, 'Nhạc SĨ', 'Puerto Rico', 2016, 'Hoa Hậu', 'Stephanie Del Valle.jpg'),
(32, 'MW', 'Vanessa Ponce', 1992, 'Người Mẫu', 'Mexico', 2018, 'Hoa Hậu', 'Vanessa Ponce.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `iduser` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `hodem` varchar(30) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `phanquyen` varchar(100) NOT NULL,
  `landangnhapcuoi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`iduser`, `username`, `password`, `hodem`, `ten`, `phanquyen`, `landangnhapcuoi`) VALUES
(1, 'Toan', 'Toan', 'Phan', 'Toan', 'SELECT, DELETE', '2024-03-20 07:46:21'),
(2, 'nam', 'nam', 'huynh', 'nam', 'SELECT', '2024-03-20 07:46:21'),
(3, 'tran', 'tran', 'tran', 'tran', 'Owner', '2024-03-20 07:48:42'),
(4, 'hi', 'hi', 'gia', 'hi', 'INSERT', '2024-03-20 07:48:42'),
(5, 'manh', 'manh', 'tien', 'manh', 'không có quyền', '2024-03-20 07:49:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `MaCuocThi` varchar(5) NOT NULL,
  `TenCuocThi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`MaCuocThi`, `TenCuocThi`) VALUES
('ME', 'MISSEARTH'),
('MG', 'Miss Grand'),
('MI', 'Miss International'),
('MS', 'Miss Supranational'),
('MU', 'Miss Universe'),
('MW', 'Miss World');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `sanpham` ADD FULLTEXT KEY `MaCuocThi` (`MaCuocThi`,`Name`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `password` (`password`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`MaCuocThi`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
