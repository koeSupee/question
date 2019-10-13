-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2018 at 05:15 AM
-- Server version: 5.7.17-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `question`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `col_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `col_date` varchar(50) NOT NULL,
  `col_company` varchar(50) DEFAULT NULL,
  `col_user` varchar(50) DEFAULT NULL,
  `col_position` varchar(50) DEFAULT NULL,
  `col_fastness` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'ความรวดเร็ว',
  `detail_fastness` varchar(200) DEFAULT NULL,
  `col_quality` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'คุณภาพ',
  `detail_quality` varchar(200) DEFAULT NULL,
  `col_neatness` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'ความสะอาด',
  `detail_neatness` varchar(200) DEFAULT NULL,
  `col_courtesy` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'มารยาท',
  `detail_courtesy` varchar(200) DEFAULT NULL,
  `col_satis` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'ความพึงพอใจ',
  `detail_satis` varchar(200) DEFAULT NULL,
  `col_quality_product` tinyint(4) NOT NULL COMMENT 'คุณภาพสินค้า',
  `col_price_product` tinyint(4) NOT NULL COMMENT 'ราคาสินค้า',
  `col_credit_payment` tinyint(4) NOT NULL COMMENT 'เครดิตชำระเงิน',
  `col_quality_company` tinyint(4) NOT NULL COMMENT 'คุณภาพบริษัท',
  `col_reputation_company` tinyint(4) NOT NULL COMMENT 'ชื่อเสียงบริษัท',
  `col_time_delivery` tinyint(4) NOT NULL COMMENT 'ระยะเวลาส่งมอบ',
  `col_comment` varchar(500) DEFAULT NULL COMMENT 'คำแนะนำอื่นๆ',
  `col_person_record` varchar(50) DEFAULT NULL COMMENT 'ผู้บันทึก',
  `col_date_record` varchar(50) DEFAULT NULL COMMENT 'วันที่บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`col_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `col_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
