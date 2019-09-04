-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 06:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qldsv`
--

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE `diem` (
  `SV` varchar(10) CHARACTER SET utf8 NOT NULL,
  `MH` varchar(10) CHARACTER SET utf8 NOT NULL,
  `chuyencan` float DEFAULT NULL,
  `giuaky` int(11) DEFAULT NULL,
  `cuoiky` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`SV`, `MH`, `chuyencan`, `giuaky`, `cuoiky`) VALUES
('N15DCAT003', 'INT1313', 2, 2, 3),
('N15DCAT003', 'INT14107', 4, 5, 6),
('N15DCAT003', 'INT1433', 5, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(11) CHARACTER SET utf8 NOT NULL,
  `TenLop` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`) VALUES
('D14CQAT01-N', 'An toàn thông tin'),
('D15CQAT01-N', 'An toàn thông tin'),
('D16CQAT01-N', 'An toàn thông tin');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(10) CHARACTER SET utf8 NOT NULL,
  `TenMH` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`) VALUES
('INT1306', 'Cấu trúc dữ liệu và giải thuật'),
('INT1313', 'Cơ sở dữ liệu'),
('INT1339', 'Ngôn ngữ lập trình c++'),
('INT1344', 'Mật mã học cơ sở'),
('INT14102', 'Các kỹ thuật giấu tin'),
('INT14107', 'Kiểm thử xâm nhập'),
('INT1433', 'Lập trình mạng'),
('INT1434-3', 'Lập trình web'),
('INT1483', 'An toàn mạng nâng cao');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` varchar(10) CHARACTER SET utf8 NOT NULL,
  `HotenSV` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Lop` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `HotenSV`, `Lop`) VALUES
('N15DCAT003', 'Nguyễn Văn Trung', 'D15CQAT01-N'),
('N15DCAT025', 'Nguyễn Quang Đức', 'D15CQAT01-N'),
('N15DCAT053', 'Cao Nguyễn Sơn Lâm', 'D15CQAT01-N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`MH`,`SV`),
  ADD KEY `diem_sinhvien_MaSV_fk` (`SV`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `sinhvien_lop_MaLop_fk` (`Lop`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_monhoc_MaMH_fk` FOREIGN KEY (`MH`) REFERENCES `monhoc` (`MaMH`),
  ADD CONSTRAINT `diem_sinhvien_MaSV_fk` FOREIGN KEY (`SV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_lop_MaLop_fk` FOREIGN KEY (`Lop`) REFERENCES `lop` (`MaLop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
