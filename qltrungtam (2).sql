-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2024 at 03:04 PM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qltrungtam`
--

-- --------------------------------------------------------

--
-- Table structure for table `baihoc`
--

DROP TABLE IF EXISTS `baihoc`;
CREATE TABLE IF NOT EXISTS `baihoc` (
  `idbh` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `tenbh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `chitiet` text COLLATE utf8_unicode_ci,
  `video` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idct` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `idgv` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `imgbh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idbh`),
  KEY `lkbhgv` (`idgv`),
  KEY `lkbhct` (`idct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baihoc`
--

INSERT INTO `baihoc` (`idbh`, `tenbh`, `mota`, `chitiet`, `video`, `idct`, `idgv`, `imgbh`) VALUES
('B1', 'Bài 1: Hiện tại Đơn', NULL, ' <h3>Hiện tại đơn (Simple Present hoặc Present Simple) </h3>\r\n                                  <p>Là một trong các thì tiếng Anh, diễn tả các hành động xảy ra ở hiện tại. Thì Hiện tại đơn còn được dùng để diễn tả một sự thật hiển nhiên, \r\n                                    một hành động diễn ra lặp đi lặp lại theo thói quen hay những thói quen, tính cách của con người. </p><br>\r\n                                  <h3>Thì hiện tại đơn với TOBE</h3><br>\r\n\r\n                                  <p>Thể khẳng định\r\n                                  Cấu trúc: S + am/ is/ are + N/ Adj</p>\r\n                                  <br>\r\n\r\n                                  <p>Trong đó:<br>\r\n\r\n                                  S (subject): Chủ ngữ<br>\r\n                                  N/ Adj (Noun/ Adjective): Danh từ/ tính từ<br>\r\n                                  Lưu ý:<br>\r\n\r\n                                  S = I + am<br>\r\n                                  S = He/ She/ It + is<br>\r\n                                  S = You/ We/ They + are</p>\r\n\r\n                                   <b> Ví dụ:</b><br>\r\n\r\n                                  <p>Russia is the largest country in the world.</p><br>\r\n\r\n                                  <p>  My father usually wakes up at 7:30.</p><br>', 'video/htd.mp4', 'KH03', 'GV1', 'img/htd.jpg'),
('B2', 'Bài 2:Hiện tại tiếp diễn', NULL, ' <h3>Hiện tại tiếp diễn</h3>\r\n                                  <p>Diễn tả những sự việc hoặc hành động xảy ra ngay lúc nói hay xung quanh thời điểm nói, sự việc và hành động đó vẫn chưa chấm dứt và vẫn tiếp tục diễn ra tính đến thời điểm hiện tại. </p><br>\r\n                                  <h3>Công thức thì hiện tại tiếp diễn</h3><br>\r\n\r\n                                  <p>Công thức thì hiện tại tiếp diễn được chia làm 3 dạng khẳng định, phủ định, nghi vấn cụ thể như sau:</p>\r\n                                  <br><p>	S + am/ is/ are + V-ing	<br>S + am/ is/ are + not + V-ing<br>	\r\nAm/ Is/ Are + S + V-ing  ?<br>\r\nWh- + am/ are/ is (not) + S + Ving?\r\n                                  <br>\r\n                                  \r\n <b>Ví dụ:</b><br>\r\n\r\nHoa is watching TV now<br>\r\nMy friend is listening to music/p><br>\r\n\r\n                              ', 'video/httd.mp4', 'KH03', 'GV2', 'img/httd.jpg'),
('B3', 'Bài 1: Mẹo cho người mới', NULL, NULL, 'video/start.mp4', 'KH04', 'GV2', 'img/start.jpg'),
('B4', 'Bài 2: Các từ thông dụng', NULL, NULL, 'video/thongdung.mp4', 'KH04', 'GV1', 'img/thongdung.PNG'),
('B5', 'Bài 3: Cách giới thiệu trong tiếng anh', NULL, NULL, 'video/introduce.mp4', 'KH04', 'GV1', 'img/introduce.PNG'),
('B6', 'Test', NULL, NULL, NULL, 'KH02', 'GV1', NULL),
('B7', 'Bai 3:Test', NULL, NULL, NULL, 'KH03', 'GV2', 'img/hinh3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `baitap`
--

DROP TABLE IF EXISTS `baitap`;
CREATE TABLE IF NOT EXISTS `baitap` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `tenbt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hannop` date DEFAULT NULL,
  `cauhoi` text COLLATE utf8_unicode_ci NOT NULL,
  `dapan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diem` int(2) DEFAULT NULL,
  `idhv` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idgv` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_hvbt` (`idhv`),
  KEY `fk_gvbt` (`idgv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bienlai`
--

DROP TABLE IF EXISTS `bienlai`;
CREATE TABLE IF NOT EXISTS `bienlai` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `hocphi` float NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydong` date NOT NULL,
  `idhv` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `idct` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_blhv` (`idhv`),
  KEY `fk_blct` (`idct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinh`
--

DROP TABLE IF EXISTS `chuongtrinh`;
CREATE TABLE IF NOT EXISTS `chuongtrinh` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `tenct` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hocphi` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuongtrinh`
--

INSERT INTO `chuongtrinh` (`id`, `tenct`, `mota`, `img`, `video`, `hocphi`) VALUES
('KH01', 'English Essentials', 'Khóa học này giúp bạn học các kiến thức tiếng Anh cơ bản như phát âm, ngữ pháp, từ vựng.', 'img/beginner.jpg', NULL, 3000000),
('KH02', 'Fluent Fluency', 'Khóa học này giúp bạn học cách giao tiếp tiếng Anh trong các tình huống hàng ngày.', 'img/fluent.jpg', NULL, 4000000),
('KH03', 'Business English', 'Khóa học này giúp bạn học tiếng Anh chuyên ngành cho các chuyên ngành kinh doanh', 'img/business.jpg', NULL, 3500000),
('KH04', 'TOEFL Triumph', 'Khóa học luyện thi TOEFL được thiết kế dành cho những người học muốn đạt điểm cao trong kỳ thi TOEFL', 'img/ieltstm.jpg', NULL, 4200000);

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

DROP TABLE IF EXISTS `dangky`;
CREATE TABLE IF NOT EXISTS `dangky` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(8) NOT NULL,
  `tinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`id`, `hoten`, `email`, `sdt`, `tinh`) VALUES
(1, 'Thủy', 'hong7894@gmail.com', 839452661, 'Tp.Hồ chí minh'),
(2, 'Thủy', 'hong7894@gmail.com', 839452661, 'Tp.Hồ chí minh'),
(3, 'Hoa', 'hong1234@gmail', 987431551, 'Tp.Hồ chí minh');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

DROP TABLE IF EXISTS `giangvien`;
CREATE TABLE IF NOT EXISTS `giangvien` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `tengv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `luong` float NOT NULL,
  `ngaysinh` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`id`, `tengv`, `email`, `sdt`, `luong`, `ngaysinh`) VALUES
('GV1', 'Huy', 'huy456@gmail.com', 741362563, 6000000, '1997-10-07'),
('GV2', 'Nguyễn Huy', 'huy456@gmail.com', 876541229, 7500000, '2005-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `hocvien`
--

DROP TABLE IF EXISTS `hocvien`;
CREATE TABLE IF NOT EXISTS `hocvien` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `tenhv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `ngaysinh` date NOT NULL,
  `idlop` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `donghp` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `flk_lophv` (`idlop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hocvien`
--

INSERT INTO `hocvien` (`id`, `tenhv`, `email`, `sdt`, `ngaysinh`, `idlop`, `donghp`) VALUES
('HV01', 'Nguyễn Ngọc Ánh', 'hong1234@gmail.com', 983547112, '1993-12-03', 'BE02', 1),
('HV02', 'Hành Ngọc', 'hong7894@gmail.com', 986751442, '1993-12-06', 'BE03', 0),
('HV3', 'Thủy', 'hong7894@gmail.com', 938375771, '1993-12-02', 'BE01', 0),
('HV4', 'Hoa', 'hong7894@gmail.com', 983547112, '1996-06-02', 'BE04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

DROP TABLE IF EXISTS `lop`;
CREATE TABLE IF NOT EXISTS `lop` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `tenlop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phong` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `thoigianbd` date NOT NULL,
  `thoigiankt` date NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT '0',
  `idgv` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `idct` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lkgv` (`idgv`),
  KEY `lkkh` (`idct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`id`, `tenlop`, `phong`, `thoigianbd`, `thoigiankt`, `trangthai`, `idgv`, `idct`) VALUES
('BE01', 'English for busniess', 'A01', '2023-12-01', '2024-03-07', 0, 'GV1', 'KH01'),
('BE02', 'Lớp cv02', 'A02', '2023-12-01', '2024-03-29', 0, 'GV1', 'KH03'),
('BE03', 'lopcb', 'A03', '2023-12-06', '2024-03-01', 0, 'GV2', 'KH04'),
('BE04', 'Fluent', 'A06', '2024-01-03', '2024-03-07', 0, 'GV1', 'KH02');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT '0',
  `idngdung` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lkhv` (`idngdung`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `ten`, `user`, `pass`, `email`, `role`, `idngdung`) VALUES
('AD01', 'Nguyên Thủy', 'admin123', '123', 'admin123@gmail.com', 1, NULL),
('HV01', 'Nguyễn Ngọc Ngọc', 'anh123', '123456', 'ngoc789@gmail.com', 2, NULL),
('HV02', 'HànhNgọc ', 'ngoc123', '1234', 'hong7894@gmail.com', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tkb`
--

DROP TABLE IF EXISTS `tkb`;
CREATE TABLE IF NOT EXISTS `tkb` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `idlop` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `thu` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `bd` time NOT NULL,
  `kt` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lktkb` (`idlop`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tkb`
--

INSERT INTO `tkb` (`id`, `idlop`, `thu`, `bd`, `kt`) VALUES
(1, 'BE02', '2', '12:00:00', '14:30:00'),
(2, 'BE02', '5', '12:30:00', '15:00:00'),
(3, 'BE02', '4', '07:00:00', '15:00:00'),
(4, 'BE03', '5', '15:00:00', '17:30:00'),
(5, 'BE03', '7', '07:00:00', '09:00:00'),
(6, 'BE01', '2', '06:00:00', '09:00:00'),
(7, 'BE04', '3', '17:00:00', '19:30:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baihoc`
--
ALTER TABLE `baihoc`
  ADD CONSTRAINT `lkbhct` FOREIGN KEY (`idct`) REFERENCES `chuongtrinh` (`id`),
  ADD CONSTRAINT `lkbhgv` FOREIGN KEY (`idgv`) REFERENCES `giangvien` (`id`);

--
-- Constraints for table `baitap`
--
ALTER TABLE `baitap`
  ADD CONSTRAINT `fk_gvbt` FOREIGN KEY (`idgv`) REFERENCES `giangvien` (`id`),
  ADD CONSTRAINT `fk_hvbt` FOREIGN KEY (`idhv`) REFERENCES `hocvien` (`id`);

--
-- Constraints for table `bienlai`
--
ALTER TABLE `bienlai`
  ADD CONSTRAINT `fk_blct` FOREIGN KEY (`idct`) REFERENCES `chuongtrinh` (`id`),
  ADD CONSTRAINT `fk_blhv` FOREIGN KEY (`idhv`) REFERENCES `hocvien` (`id`);

--
-- Constraints for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD CONSTRAINT `flk_lophv` FOREIGN KEY (`idlop`) REFERENCES `lop` (`id`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lkgv` FOREIGN KEY (`idgv`) REFERENCES `giangvien` (`id`),
  ADD CONSTRAINT `lkkh` FOREIGN KEY (`idct`) REFERENCES `chuongtrinh` (`id`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `fk_lkgv` FOREIGN KEY (`idngdung`) REFERENCES `giangvien` (`id`),
  ADD CONSTRAINT `fk_lkhv` FOREIGN KEY (`idngdung`) REFERENCES `hocvien` (`id`);

--
-- Constraints for table `tkb`
--
ALTER TABLE `tkb`
  ADD CONSTRAINT `lktkb` FOREIGN KEY (`idlop`) REFERENCES `lop` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
