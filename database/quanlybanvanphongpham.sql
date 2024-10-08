-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2024 lúc 03:17 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybanvanphongpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MA_SP` char(10) NOT NULL,
  `MA_HD` char(10) NOT NULL,
  `DON_GIA_BAN` int(11) DEFAULT NULL,
  `SO_LUONG_BAN` int(11) DEFAULT NULL,
  `THANH_TIEN` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MA_SP`, `MA_HD`, `DON_GIA_BAN`, `SO_LUONG_BAN`, `THANH_TIEN`) VALUES
('SP002', 'HD004', 50000, 1, 50000),
('SP003', 'HD001', 50000, 1, 50000),
('SP005', 'HD010', 100000, 1, 100000),
('SP006', 'HD003', 12000, 5, 60000),
('SP007', 'HD006', 90000, 1, 90000),
('SP008', 'HD007', 70000, 1, 70000),
('SP009', 'HD009', 80000, 1, 80000),
('SP010', 'HD002', 17000, 10, 170000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MA_HD` char(10) NOT NULL,
  `NGAY_DH` datetime DEFAULT NULL,
  `MA_KH` char(10) DEFAULT NULL,
  `MA_NV` char(10) DEFAULT NULL,
  `TONG_TIEN` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MA_HD`, `NGAY_DH`, `MA_KH`, `MA_NV`, `TONG_TIEN`) VALUES
('HD001', '2023-08-17 00:00:00', 'KH004', 'NV002', 100000),
('HD002', '2023-08-20 00:00:00', 'KH002', 'NV008', 130000),
('HD003', '2023-08-25 00:00:00', 'KH007', 'NV009', 200000),
('HD004', '2023-08-30 00:00:00', 'KH003', 'NV001', 120000),
('HD005', '2023-04-29 00:00:00', 'KH006', 'NV005', 238000),
('HD006', '2023-07-12 00:00:00', 'KH009', 'NV006', 170000),
('HD007', '2023-03-10 00:00:00', 'KH005', 'NV007', 150000),
('HD008', '2023-04-17 00:00:00', 'KH001', 'NV003', 230000),
('HD009', '2023-04-20 00:00:00', 'KH010', 'NV004', 210000),
('HD010', '2023-05-28 00:00:00', 'KH008', 'NV010', 140000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MA_KH` char(10) NOT NULL,
  `TEN_KH` varchar(40) NOT NULL,
  `DCHI` varchar(100) DEFAULT NULL,
  `SDT` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MA_KH`, `TEN_KH`, `DCHI`, `SDT`) VALUES
('KH001', 'Bùi Thị Thúy Hằng', 'Số 12, Đường Nguyễn Du, Phường 1, Quận 10, TP.HCM', '0395933575'),
('KH002', 'Trần Thị Ái Vi', 'Số 34, Đường Lê Lợi, Phường 2, Quận 11, TP.HCM', '03765718175'),
('KH003', 'Hà Trọng Tâm', 'Số 56, Đường Nam Kỳ Khởi Nghĩa, Phường 3, Quận 12, TP.HCM', '0393122813'),
('KH004', 'Võ Thị Bích Diệu', 'Số 78, Đường Võ Thị Sáu, Phường 4, Quận Bình Thạnh, TP.HCM', '0924373024'),
('KH005', 'Nguyễn Thị Thãnh', 'Số 90, Đường Nguyễn Thị Minh Khai, Phường 5, Quận Gò Vấp, TP.HCM', '0924612796'),
('KH006', 'Nguyễn Trọng Huynh', 'Số 112, Đường Lý Thường Kiệt, Phường 6, Quận Tân Bình, TP.HCM', '0394781522'),
('KH007', 'Lê Văn Huy', 'Số 134, Đường Điện Biên Phủ, Phường 7, Quận Tân Phú, TP.HCM', '0394812245'),
('KH008', 'Trần Thị Kim Nhiên', 'Số 156, Đường Bạch Đằng, Phường 8, Quận Thủ Đức, TP.HCM', '02888816970'),
('KH009', 'Lê Hải Âu', 'Số 178, Đường Hùng Vương, Phường 9, Quận Bình Tân, TP.HCM', '0901288556'),
('KH010', 'Nguyễn Thị Ngọc Mai', 'Số 200, Đường Trần Hưng Đạo, Phường 10, Quận 7, TP.HCM', '0922789789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MA_NV` char(10) NOT NULL,
  `HOTEN_NV` varchar(40) NOT NULL,
  `NGAY_SINH` datetime DEFAULT NULL,
  `GIOI_TINH` varchar(10) DEFAULT NULL,
  `DCHI` varchar(100) DEFAULT NULL,
  `SDT` varchar(15) DEFAULT NULL,
  `IMAGES_NV` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MA_NV`, `HOTEN_NV`, `NGAY_SINH`, `GIOI_TINH`, `DCHI`, `SDT`, `IMAGES_NV`) VALUES
('NV001', 'Trần Thị Cẩm Nhung', '2004-08-30 00:00:00', 'Nữ', 'Số 10, Đường Nguyễn Du, Phường 6, Quận 1, TP.HCM', '0928375643', 'nv1.jpg'),
('NV002', 'Ngô Thị Trâm Anh', '2004-08-28 00:00:00', 'Nữ', 'Số 20, Đường Lê Lợi, Phường 2, Quận 2, TP.HCM', '0977563421', 'nv3.jpg'),
('NV003', 'Lê Nhựt Huy', '2004-09-20 00:00:00', 'Nam', 'Số 30, Đường Nguyễn Thị Minh Khai, Phường 3, Quận 3, TP.HCM', '0943041275', 'nv02.jpg'),
('NV004', 'Nguyễn Thanh Tùng', '2000-03-10 00:00:00', 'Nam', 'Số 40, Đường Hai Bà Trưng, Phường 4, Quận 4, TP.HCM', '0932817659', 'nv4.jpg'),
('NV005', 'Võ Ngọc Trâm', '2002-07-20 00:00:00', 'Nữ', 'Số 50, Đường Phan Đăng Lưu, Phường 5, Quận 5, TP.HCM', '0822198325', 'nv5.jpg'),
('NV006', 'Lý Gia Bảo', '1999-04-12 00:00:00', 'Nam', 'Số 60, Đường Lý Tự Trọng, Phường 6, Quận 6, TP.HCM', '0543128974', 'nv9.jpg'),
('NV007', 'Huỳnh Quốc Đại', '2000-06-18 00:00:00', 'Nam', 'Số 70, Đường Võ Thị Sáu, Phường 7, Quận 7, TP.HCM', '0812948332', 'nv7.jpg'),
('NV008', 'Võ Văn Nguyên', '2001-07-20 00:00:00', 'Nam', 'Số 80, Đường Lý Thường Kiệt, Phường 8, Quận 8, TP.HCM', '0689451290', 'nv8.jpg'),
('NV009', 'Trần Tấn Đạt', '2002-04-19 00:00:00', 'Nam', 'Số 90, Đường Nguyễn Thị Định, Phường 9, Quận 9, TP.HCM', '0031893412', 'nv10.jpg'),
('NV010', 'Mạch Kỳ Bảo', '1999-09-12 00:00:00', 'Nam', 'Số 100, Đường Trần Não, Phường 10, Quận 10, TP.HCM', '0456731290', 'nv11.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MA_SP` char(10) NOT NULL,
  `TEN_SP` varchar(40) NOT NULL,
  `PHAN_LOAI` varchar(30) DEFAULT NULL,
  `DON_VI_TINH` varchar(20) DEFAULT NULL,
  `DON_GIA_NHAP` int(11) DEFAULT NULL,
  `SO_LUONG_NHAP` int(11) DEFAULT NULL,
  `IMAGES` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MA_SP`, `TEN_SP`, `PHAN_LOAI`, `DON_VI_TINH`, `DON_GIA_NHAP`, `SO_LUONG_NHAP`, `IMAGES`) VALUES
('SP001', 'Sổ tay mini hoạt hình dễ thương', 'Giấy viết', 'Cuốn', 30000, 100, 'sp1.jfif'),
('SP002', 'Bút đánh dấu hai đầu màu Graffiti', 'Bút viết', 'Cây', 14000, 50, 'sp2.jfif'),
('SP003', 'Túi đựng mỹ phẩm, văn phòng phẩm', 'Vật dụng văn phòng', 'Túi', 3000, 80, 'sp3.jfif'),
('SP004', 'Túi đựng văn phòng phẩm bằng nhựa', 'Vật dụng văn phòng', 'Túi', 3000, 120, 'sp4.jfif'),
('SP005', 'Vở viết kẻ ngang nhiều hình', 'Vật dụng văn phòng', 'Cuốn', 6000, 100, 'sp5.jfif'),
('SP006', 'Bìa kẹp tài liệu', 'Vật dụng văn phòng', 'Tệp', 40000, 150, 'sp6.jfif'),
('SP007', 'Máy tính mini gấu bỏ túi dễ thương', 'Vật dụng học tập', 'Cái', 15000, 40, 'sp7.jfif'),
('SP008', 'bút highlight pastel dạ quang ghi nhớ', 'Bút viết', 'Cây', 8000, 80, 'sp8.jfif'),
('SP009', 'Nhãn dán tiêu dùng trong văn phòng', 'Vật dụng văn phòng', 'Nhãn', 4000, 30, 'sp9.jfif'),
('SP010', '9 cây bút mực nhiều màu xinh xắn', 'Bút viết', 'Bó', 20000, 10, 'sp10.jfif');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MA_SP`,`MA_HD`),
  ADD KEY `MA_HD` (`MA_HD`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MA_HD`),
  ADD KEY `MA_KH` (`MA_KH`),
  ADD KEY `MA_NV` (`MA_NV`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MA_KH`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MA_NV`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MA_SP`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MA_SP`) REFERENCES `sanpham` (`MA_SP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MA_HD`) REFERENCES `hoadon` (`MA_HD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MA_KH`) REFERENCES `khachhang` (`MA_KH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MA_NV`) REFERENCES `nhanvien` (`MA_NV`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
