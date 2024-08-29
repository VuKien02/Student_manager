-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2024 at 10:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinhhoc`
--

CREATE TABLE `chuongtrinhhoc` (
  `MaCT` varchar(10) NOT NULL,
  `TenCT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `chuongtrinhhoc`
--

INSERT INTO `chuongtrinhhoc` (`MaCT`, `TenCT`) VALUES
('CD', 'Cao Dang'),
('DH', 'Dai Hoc');

-- --------------------------------------------------------

--
-- Table structure for table `giangkhoa`
--

CREATE TABLE `giangkhoa` (
  `MaCT` varchar(10) NOT NULL,
  `MaKhoa` varchar(10) NOT NULL,
  `MaMH` varchar(10) NOT NULL,
  `NamHoc` int(11) NOT NULL,
  `HocKy` int(11) NOT NULL,
  `STLT` int(11) NOT NULL,
  `STTH` int(11) NOT NULL,
  `SoTinChi` int(11) NOT NULL,
  `GiangVien` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `giangkhoa`
--

INSERT INTO `giangkhoa` (`MaCT`, `MaKhoa`, `MaMH`, `NamHoc`, `HocKy`, `STLT`, `STTH`, `SoTinChi`, `GiangVien`) VALUES
('DH', 'CNTT', 'C++', 2022, 2, 30, 30, 4, 'Nguyen Van A'),
('DH', 'CNTT', 'HDT', 2022, 2, 35, 25, 4, 'Tran Van B'),
('DH', 'DT', 'THM', 2022, 2, 50, 0, 3, 'Le Thi C'),
('DH', 'DT', 'TRR', 2022, 2, 25, 30, 4, 'Vu Nhu B'),
('DH', 'KT', 'TGT', 2022, 2, 25, 25, 3, 'Nguyen Ngoc D'),
('DH', 'KT', 'XSTK', 2022, 2, 30, 20, 4, 'Le Hong E');

-- --------------------------------------------------------

--
-- Table structure for table `ketqua`
--

CREATE TABLE `ketqua` (
  `ID` int(11) NOT NULL,
  `MaSV` varchar(10) NOT NULL,
  `MaMH` varchar(10) NOT NULL,
  `DiemCC` double DEFAULT NULL,
  `DiemHS1` double DEFAULT NULL,
  `DiemHS2` double DEFAULT NULL,
  `LanThi` int(11) NOT NULL,
  `DiemThi` double DEFAULT NULL,
  `DiemTB` double DEFAULT NULL,
  `XepLoai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ketqua`
--

INSERT INTO `ketqua` (`ID`, `MaSV`, `MaMH`, `DiemCC`, `DiemHS1`, `DiemHS2`, `LanThi`, `DiemThi`, `DiemTB`, `XepLoai`) VALUES
(1, '2010310060', 'C++', 10, 7, 8, 1, 8, 8.1, 'Gioi'),
(2, '2010310060', 'HDT', 10, 8, 9, 1, 8, 8.4, 'Gioi'),
(3, '2010310061', 'C++', 8, 9, 9, 2, 7, 7.7, 'Kha'),
(4, '2010310061', 'HDT', 10, 8, 8, 1, 8, 8.2, 'Gioi'),
(5, '2010310062', 'C++', 8, 5, 7, 1, 6, 6.3, 'Kha'),
(6, '2010310062', 'HDT', 10, 6, 8, 1, 7, 7.4, 'Kha'),
(7, '2010310063', 'THM', 10, 7, 7, 2, 7, 7.300000000000001, 'Kha'),
(8, '2010310063', 'TRR', 10, 8, 8, 1, 5, 6.4, 'Kha'),
(9, '2010310064', 'THM', 10, 5, 6, 1, 0, 2.7, 'TrungBinh'),
(10, '2010310064', 'TRR', 8, 6, 6, 1, 7, 6.800000000000001, 'Kha'),
(11, '2010310065', 'THM', 8, 7, 6, 1, 8, 7.5, 'Kha'),
(12, '2010310065', 'TRR', 8, 8, 8, 2, 6, 6.8, 'Kha'),
(13, '2010310066', 'TGT', 8, 7, 6, 1, 7, 6.9, 'Kha'),
(14, '2010310066', 'XSTK', 10, 8, 8, 1, 8, 8.2, 'Gioi'),
(15, '2010310067', 'TGT', 10, 7, 8, 2, 7, 7.5, 'Kha'),
(16, '2010310067', 'XSTK', 10, 8, 8, 2, 7, 7.6000000000000005, 'Kha'),
(17, '2010310068', 'TGT', 8, 7, 9, 1, 7, 7.5, 'Kha'),
(18, '2010310068', 'XSTK', 10, 8, 7, 1, 9, 8.6, 'Gioi'),
(19, '2010310069', 'C++', 10, 10, 8, 1, 8, 8.4, 'Gioi'),
(20, '2010310069', 'HDT', 8, 8, 8, 1, 7, 7.4, 'Kha'),
(21, '2010310070', 'C++', 6, 7, 5, 1, 7, 6.5, 'Kha'),
(22, '2010310070', 'HDT', 10, 7, 7, 1, 4, 5.5, 'Kha'),
(23, '2010310071', 'C++', 10, 8, 7, 1, 10, 9.2, 'XuatSac'),
(24, '2010310071', 'HDT', 10, 7, 8, 1, 7, 7.5, 'Kha'),
(25, '2010310072', 'THM', 10, 7, 8, 1, 8, 8.1, 'Gioi'),
(26, '2010310072', 'TRR', 10, 9, 9, 1, 10, 9.7, 'XuatSac'),
(27, '2010310073', 'THM', 10, 10, 8, 1, 9, 9, 'Yeu'),
(28, '2010310073', 'TRR', 10, 8, 7, 1, 7, 7.4, 'Kha'),
(29, '2010310074', 'THM', 8, 8, 7, 1, 9, 8.399999999999999, 'Gioi'),
(30, '2010310074', 'TRR', 8, 7, 7, 1, 8, 7.7, 'Kha'),
(31, '2010310075', 'TGT', 10, 8, 7, 1, 10, 9.2, 'XuatSac'),
(32, '2010310075', 'XSTK', 10, 9, 9, 1, 10, 9.7, 'XuatSac'),
(33, '2010310076', 'TGT', 10, 7, 6, 1, 5, 5.9, 'Kha'),
(34, '2010310076', 'XSTK', 8, 6, 4, 2, 4, 4.6, 'TrungBinh'),
(36, '2010310077', 'TGT', 10, 7, 7, 1, 7, 7.300000000000001, 'Kha'),
(37, '2010310077', 'XSTK', 10, 8, 7, 1, 2, 4.4, 'TrungBinh');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(10) NOT NULL,
  `TenKhoa` varchar(100) NOT NULL,
  `NamThanhLap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`, `NamThanhLap`) VALUES
('CNTT', 'Cong Nghe Thong Tin', 1995),
('DT', 'Dien Tu', 1992),
('KT', 'Ke Toan', 1994);

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `MaKhoaHoc` varchar(10) NOT NULL,
  `NamBatDau` int(11) NOT NULL,
  `NamKetThuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`MaKhoaHoc`, `NamBatDau`, `NamKetThuc`) VALUES
('K12', 2018, 2022),
('K13', 2019, 2023),
('K14', 2020, 2024),
('K15', 2021, 2025);

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(10) NOT NULL,
  `MaKhoa` varchar(10) NOT NULL,
  `MaKhoaHoc` varchar(10) NOT NULL,
  `MaCT` varchar(10) NOT NULL,
  `STT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `MaKhoa`, `MaKhoaHoc`, `MaCT`, `STT`) VALUES
('CNTT01', 'CNTT', 'K14', 'DH', 1),
('CNTT02', 'CNTT', 'K14', 'DH', 2),
('CNTT03', 'CNTT', 'K14', 'DH', 3),
('DT01', 'DT', 'K14', 'DH', 1),
('DT02', 'DT', 'K14', 'DH', 2),
('KT01', 'KT', 'K14', 'DH', 1),
('KT02', 'KT', 'K14', 'DH', 2);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(10) NOT NULL,
  `MaKhoa` varchar(10) NOT NULL,
  `TenMH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `MaKhoa`, `TenMH`) VALUES
('C++', 'CNTT', 'Lap trinh c++'),
('HDT', 'CNTT', 'Lap trinh huong doi tuong'),
('TGT', 'KT', 'Toan giai tich'),
('THM', 'DT', 'Triet hoc Mac-Lenin'),
('TRR', 'DT', 'Toan roi rac'),
('XSTK', 'KT', 'Xac suat thong ke');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` varchar(10) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `NamSinh` int(11) NOT NULL,
  `DanToc` varchar(20) NOT NULL,
  `MaLop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `HoTen`, `NamSinh`, `DanToc`, `MaLop`) VALUES
('2010310060', 'Nguyen Van A', 2002, 'Kinh', 'CNTT01'),
('2010310061', 'Nguyen Van B', 2002, 'Kinh', 'CNTT01'),
('2010310062', 'Nguyen Van C', 2002, 'Kinh', 'CNTT01'),
('2010310063', 'Nguyen Van D', 2002, 'Kinh', 'DT01'),
('2010310064', 'Nguyen Van D', 2002, 'Kinh', 'DT01'),
('2010310065', 'Nguyen Van F', 2001, 'Kinh', 'DT01'),
('2010310066', 'Nguyen Van G', 2002, 'Kinh', 'KT01'),
('2010310067', 'Nguyen Van H', 2002, 'Kinh', 'KT01'),
('2010310068', 'Nguyen Van I', 2001, 'Kinh', 'KT01'),
('2010310069', 'Nguyen Van K', 2002, 'Kinh', 'CNTT02'),
('2010310070', 'Nguyen Van L', 2002, 'Kinh', 'CNTT02'),
('2010310071', 'Nguyen Van M', 2002, 'Kinh', 'CNTT02'),
('2010310072', 'Nguyen Van N', 2002, 'Kinh', 'DT02'),
('2010310073', 'Nguyen Van O', 2002, 'Kinh', 'DT02'),
('2010310074', 'Nguyen Van P', 2002, 'Kinh', 'DT02'),
('2010310075', 'Nguyen Van Q', 2002, 'Kinh', 'KT02'),
('2010310076', 'Nguyen Van X', 2002, 'Kinh', 'KT02'),
('2010310077', 'Nguyen Van V', 2002, 'Kinh', 'KT02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  ADD PRIMARY KEY (`MaCT`);

--
-- Indexes for table `giangkhoa`
--
ALTER TABLE `giangkhoa`
  ADD PRIMARY KEY (`MaCT`,`MaKhoa`,`MaMH`,`NamHoc`),
  ADD KEY `MaKhoa` (`MaKhoa`),
  ADD KEY `MaMH` (`MaMH`);

--
-- Indexes for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`MaSV`,`MaMH`,`LanThi`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `MaMH` (`MaMH`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`MaKhoaHoc`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaKhoa` (`MaKhoa`),
  ADD KEY `MaKhoaHoc` (`MaKhoaHoc`),
  ADD KEY `MaCT` (`MaCT`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaLop` (`MaLop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ketqua`
--
ALTER TABLE `ketqua`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giangkhoa`
--
ALTER TABLE `giangkhoa`
  ADD CONSTRAINT `giangkhoa_ibfk_1` FOREIGN KEY (`MaCT`) REFERENCES `chuongtrinhhoc` (`MaCT`),
  ADD CONSTRAINT `giangkhoa_ibfk_2` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`),
  ADD CONSTRAINT `giangkhoa_ibfk_3` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`);

--
-- Constraints for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD CONSTRAINT `ketqua_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`),
  ADD CONSTRAINT `ketqua_ibfk_2` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`),
  ADD CONSTRAINT `lop_ibfk_2` FOREIGN KEY (`MaKhoaHoc`) REFERENCES `khoahoc` (`MaKhoaHoc`),
  ADD CONSTRAINT `lop_ibfk_3` FOREIGN KEY (`MaCT`) REFERENCES `chuongtrinhhoc` (`MaCT`);

--
-- Constraints for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
