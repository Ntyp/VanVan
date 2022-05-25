-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 05:35 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vanvan`
--

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `cost` int(255) NOT NULL,
  `distrance` varchar(50) NOT NULL,
  `oilbill` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `name`, `cost`, `distrance`, `oilbill`, `time`) VALUES
(1, 'กระบี่', 2200, '814', '5200', '9.30 hr'),
(2, 'กาญจนบุรี', 1800, '128', '850', '2 hr'),
(3, 'กาฬสินธุ์', 200, '519', '3600', '6.30 hr'),
(4, 'กำแพงเพชร', 2000, '358', '2300', '4.30 hr'),
(5, 'ขอนแก่น', 2000, '449', '3100', '5.30 hr'),
(6, 'จันทบุรี', 2000, '245', '1700', '2.40 hr'),
(7, 'ฉะเชิงเทรา', 1800, '82', '600', '1.30 hr'),
(8, 'ชัยนาท', 1800, '194', '1300', '3.30 hr'),
(9, 'ชัยภูมิ', 1800, '342', '2100', '6.40 hr'),
(10, 'ชุมพร', 2000, '463', '3200', '6 hr'),
(11, 'ชลบุรี', 1800, '81', '600', '1.30 hr'),
(12, 'เชียงใหม่', 2000, '696', '4700', '9 hr'),
(13, 'เชียงราย', 2000, '785', '5300', '10 hr'),
(14, 'ตรัง', 2200, '463', '3200', '6 hr'),
(15, 'ตราด', 2000, '315', '2200', '4.30 hr'),
(16, 'ตาก', 2000, '426', '2800', '5.30 hr'),
(17, 'นครนายก', 1800, '107', '800', '1.20 hr'),
(18, 'นครปฐม', 1800, '26', '500', '1.20 hr'),
(19, 'นครพนม', 2000, '740', '5000', '9.30 hr'),
(20, 'นครราชสีมา', 1800, '259', '1800', '3.30 hr'),
(21, 'นครศรีธรรมราช', 2000, '780', '5300', '10 hr'),
(22, 'นครสวรรค์', 1800, '240', '1600', '3.10 hr'),
(23, 'นราธิวาส', 2500, '1149', '7600', '14 hr'),
(24, 'น่าน', 2000, '668', '4500', '8.40 hr'),
(25, 'นนทบุรี', 1800, '20', '200', '26 min'),
(26, 'บึงกาฬ', 2000, '762', '5100', '10 hr'),
(27, 'บุรีรัมย์', 1800, '383', '2700', '5 hr'),
(28, 'ประจวบคีรีขันธ์', 2000, '281', '1900', '3.40 hr'),
(29, 'ปทุมธานี', 1800, '46', '450', '45 min'),
(30, 'ปราจีนบุรี', 1800, '136', '950', '2.40 hr'),
(31, 'ปัตตานี', 2500, '1055', '7000', '13 hr'),
(32, 'พะเยา', 2000, '691', '4600', '9 hr'),
(33, 'พระนครศรีอยุธยา', 1800, '76', '800', '1 hr'),
(34, 'พังงา', 2200, '788', '5100', '11 hr'),
(35, 'พิจิตร', 2000, '344', '2300', '4.30 hr'),
(36, 'พิษณุโลก', 2000, '377', '2500', '4.40 hr'),
(37, 'เพชรบุรี', 1800, '123', '900', '1.30 hr'),
(38, 'เพชรบูรณ์', 2000, '346', '2400', '4.35 hr'),
(39, 'แพร่', 2000, '551', '3700', '7 hr'),
(40, 'พัทลุง', 2200, '840', '5700', '12 hr'),
(41, 'ภูเก็ต', 2200, '862', '5700', '12 hr'),
(42, 'มหาสารคาม', 2000, '475', '3300', '6 hr'),
(43, 'มุกดาหาร', 2000, '642', '4400', '9 hr'),
(44, 'แม่ฮ่องสอน', 2200, '924', '6000', '11.45 hr'),
(45, 'ยโสธร', 2000, '531', '3700', '7.30 hr'),
(46, 'ยะลา', 2500, '1084', '7100', '13 hr'),
(47, 'ร้อยเอ็ด', 2000, '512', '3500', '6.30 hr'),
(48, 'ระนอง', 2000, '568', '4000', '9 hr'),
(49, 'ระยอง', 1800, '179', '1300', '2.30 hr'),
(50, 'ราชบุรี', 1800, '100', '700', '1.20 hr'),
(51, 'ลพบุรี', 1800, '153', '1000', '2 hr'),
(52, 'ลำปาง', 2000, '599', '4000', '7.30 hr'),
(53, 'ลำพูน', 2000, '670', '4500', '8.30 hr'),
(54, 'เลย', 2000, '520', '3700', '7.30 hr'),
(55, 'ศรีสะเกษ', 2000, '531', '3700', '7.30 hr'),
(56, 'สกลนคร', 2000, '647', '4400', '8.30 hr'),
(57, 'สงขลา', 2500, '950', '6500', '12.30 hr'),
(58, 'สมุทรสาคร', 1800, '36', '400', '1.40 hr'),
(59, 'สมุทรปราการ', 1800, '29', '300', '35 min'),
(60, 'สมุทรสงคราม', 1800, '36', '400', '1.40 hr'),
(61, 'สระแก้ว', 1800, '237', '1400', '3 hr'),
(62, 'สระบุรี', 1800, '107', '800', '1.30 hr'),
(63, 'สิงห์บุรี', 1800, '142', '1000', '2.15 hr'),
(64, 'สุโขทัย', 2000, '427', '2800', '5.20 hr'),
(65, 'สุพรรณบุรี', 1800, '100', '700', '1.30 hr'),
(66, 'สุราษฎร์ธานี', 2000, '644', '4300', '8 hr'),
(67, 'สุรินทร์', 2000, '426', '3000', '5.30 hr'),
(68, 'สตูล', 2500, '973', '6700', '13 hr'),
(69, 'หนองคาย', 2000, '615', '4200', '8 hr'),
(70, 'หนองบัวลำภู', 2000, '577', '3600', '7 hr'),
(71, 'อำนาจเจริญ', 2000, '585', '4000', '7.30 hr'),
(72, 'อุดรธานี', 2000, '564', '3900', '7 hr'),
(73, 'อุตรดิตถ์', 2000, '491', '3200', '6.10 hr'),
(74, 'อุทัยธานี', 1800, '219', '1600', '3.20 hr'),
(75, 'อุบลราชธานี', 2000, '592', '4100', '8 hr'),
(76, 'อ่างทอง', 1800, '105', '700', '1.36 hr');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `vanvan_id` int(255) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_address` varchar(255) NOT NULL,
  `cus_tel` int(10) NOT NULL,
  `cus_nID` char(13) NOT NULL,
  `province` varchar(255) NOT NULL,
  `date_go` date NOT NULL,
  `date_back` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `van_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`vanvan_id`, `cus_name`, `cus_address`, `cus_tel`, `cus_nID`, `province`, `date_go`, `date_back`, `status`, `van_id`) VALUES
(11, 'โฟค', 'กกก', 822222222, '1111111111111', 'ฉะเชิงเทรา', '2020-11-12', '2020-11-27', 'ชำระเงินแล้ว', 'V102');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `van`
--

CREATE TABLE `van` (
  `van_id` varchar(255) NOT NULL,
  `van_name` varchar(255) NOT NULL,
  `van_brand` varchar(255) NOT NULL,
  `van_type` varchar(255) NOT NULL,
  `van_register` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `van`
--

INSERT INTO `van` (`van_id`, `van_name`, `van_brand`, `van_type`, `van_register`) VALUES
('V101', 'อัปดุลย์ พาเพลิน', 'Toyota', 'Masjesty Grande', 'กฬ 2560 กทม'),
('V102', 'ลำเมาะ ละแมะ', 'Toyota', 'HiAce Premio', 'กซ 191 กทม');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`vanvan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `van`
--
ALTER TABLE `van`
  ADD PRIMARY KEY (`van_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `vanvan_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
