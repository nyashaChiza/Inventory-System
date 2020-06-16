-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 07, 2020 at 08:46 AM
-- Server version: 5.7.21-log
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `radio`
--

DROP TABLE IF EXISTS `radio`;
CREATE TABLE IF NOT EXISTS `radio` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `radioType` varchar(60) NOT NULL,
  `Location` varchar(60) NOT NULL,
  `serialNumber` varchar(60) NOT NULL,
  `vehicleReg` varchar(60) NOT NULL,
  `fitNumber` varchar(60) NOT NULL,
  `callSign` varchar(60) NOT NULL,
  `centerName` varchar(60) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `radio`
--

INSERT INTO `radio` (`userid`, `radioType`, `Location`, `serialNumber`, `vehicleReg`, `fitNumber`, `callSign`, `centerName`) VALUES
(8, 'kinsun', 'Broomley', '7181405000', 'ADI 9178', 'NR6199', 'n/a', 'n/a'),
(9, 'autoworld', 'Broomley', 'n/a', 'n/a', 'NR6222', 'n/a', 'n/a'),
(10, 'kinsun', 'Beatrice', 'n/a', 'n/a', 'NR6220', 'n/a', 'n/a'),
(11, 'kinsun', 'Beatrice', '7181405000405', 'n/a', 'n/a', 'n/a', 'n/a'),
(12, 'Norton', 'kinsun', '71861405000035', 'ADA1857', 'NR6176', 'n/a', 'n/a'),
(13, 'kinsun', 'Norton', '71861405000032', 'ADL3486', 'NR6208', 'n/a', 'n/a');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(30) DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Responsible` varchar(40) NOT NULL,
  `SerialNumber` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `Date`, `Name`, `Description`, `Responsible`, `SerialNumber`) VALUES
(12, '2019-12-12', 'pigtails', '36 from OG', 'DG', '145879-8793-8792'),
(13, '2019-12-19', '12v charger', 'from atlanta', 'ivm', 'an-237-298-383'),
(14, '2019-12-19', 'OTDR', 'from Marvel', 'DG', 'an-156-277-363-45'),
(15, '2019-12-14', 'SFP', 'installed at marvel', 'KM', 'an-4767-3988-3876'),
(17, '2019-12-11', 'Cisc link', 'Converters fiber optic ', 'Chiripanhura', '2345-1245-9876'),
(20, '2020-01-15', 'Ethernet conveters', 'Delivered to meter test', 'Nyasha Chizampeni', 'Amv-234-455-289');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Username`, `Password`) VALUES
(1, 'abc', '123');

-- --------------------------------------------------------

--
-- Table structure for table `work_log`
--

DROP TABLE IF EXISTS `work_log`;
CREATE TABLE IF NOT EXISTS `work_log` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `location` varchar(60) NOT NULL,
  `person_in_charge` varchar(60) NOT NULL,
  `date` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_log`
--

INSERT INTO `work_log` (`userid`, `title`, `location`, `person_in_charge`, `date`, `status`) VALUES
(1, 'fibre link', 'OG-MS', 'BM', '2020-01-06', 'pending sdh card'),
(2, 'shangani fibre', 'shangani', 'km', '2019-09-12', 'adss,mux installation,splicing, commissioning'),
(4, 'BRCC E1 QSIG enable', 'BRCC', 'KM', '', 'pending'),
(5, 'Procurement', 'Meter Test', 'BM', '', 'pending'),
(6, 'Administration', 'Meter Test', 'n/a', '', 'postponded'),
(7, 'Afrochine fibre', 'Afrochine', 'IVM', '', 'WIP'),
(8, 'Atlanta Charger', 'Atlanta', 'IVM', '', 'completed'),
(9, 'monochrome', 'Afrochine', 'IVM', '', 'ADSS installation'),
(10, 'OPGW & test equipment', 'n/a', 'DG', '', 'completed'),
(11, 'SAP PS ', 'Meter Test', 'KM', '', 'completed'),
(12, 'OPGW  Repairs', 'Bindura- Norton', 'BM', '', 'completed'),
(13, 'Cabora basa AMS System', 'Mocambique', 'KM', '2019-09-02', 'completed'),
(14, 'Trojan Mazowe Link', 'Trojan Mazowe', 'BM', '', 'completed'),
(15, 'Teas', 'Meter Test', 'RM', '', 'completed'),
(16, 'Chloride  Issues', 'n/a', 'n/a', '', 'ref mr Chakanyuka'),
(17, 'Fox 615 firmware issues', 'n/a', 'BM & IVM', '', 'log all ABB issues to matin'),
(18, 'mutorashanga slave RTU', 'Mutorashanga', 'BM', '', 'completed'),
(19, 'Pabx noise fibre problem', 'Middle Sabbi', 'n/a', '', 'pending'),
(20, 'Phokoje  Application', 'Pokoje', 'n/a', '', 'pending'),
(21, 'Upgrade to STM 16', 'Warren - Norton', 'n/a', '2019-09-08', 'completed'),
(22, 'Upgrade to STM 16', 'Norton- Selous', 'IVM & BM', '2019-09-08', 'pending'),
(23, 'guardroom ICT', 'Warren - Norton', 'IVM & BM', '', 'WIP'),
(24, 'VOIP', 'Gwayi', 'n/a', '', 'pending T&S'),
(25, 'Data transfer & speech DLI', 'Masvingo', 'n/a', '', 'pending'),
(26, 'teleprotection for muxes', 'n/a', 'n/a', '', 'pending'),
(27, 'smart metering', 'Meter Test', 'KM', '', 'completed'),
(28, 'Marvel- Francistown link', 'Pokoje', 'DG', '', 'completed'),
(29, 'faulty fox cards(SAMO & CESM)', 'Meter Test', 'IVM', '', 'completed'),
(30, 'RTU Network', 'Bulawayo', 'KM', '', 'WIP'),
(31, 'FAT for NCC Pabx', 'NCC', 'CB', '', 'pending'),
(32, 'fibre problem, pabx link wire,', 'MS-OG', 'n/a', '', 'pending'),
(33, 'follow up on outstanding muxes', 'Meter Test', 'DG', '', 'completed'),
(34, 'ABB Training', 'Meter Test', 'DG', '', 'WIP'),
(35, 'plamtree depot', 'Plamtree', 'DG', '', 'Pending'),
(36, 'VSAT documentation', 'Meter Test', 'CB', '', 'completed'),
(37, 'enage protection starting with national grid', 'n/a', 'n/a', '', 'pending'),
(38, 'horseshoe charger', 'Horseshoe', 'BM', '', 'completed'),
(39, 'nyamandlovu repeater', 'Nyamandlovu', 'CB', '', 'received conductor,WIP'),
(40, 'prepaid tollgates', 'Meter Test', 'BM', '2019-09-23', 'Pending'),
(41, 'matrix for halco house', 'Bulawayo', 'n/a', '', 'pending'),
(42, 'resusitate mux in shangani workshop', 'shangani', 'BM', '', 'completed'),
(43, 'PSIP Budget', 'Meter Test', 'Design', '', 'completed'),
(44, 'NTC Trunked radios', 'NTC', 'BM', '', 'completed'),
(45, 'Chinhoyi VOIP', 'Chinhoyi', 'IVM', '', 'completed'),
(46, 'Chinhoyi garage fibre', 'Chinhoyi', 'IVM', '', 'completed'),
(47, 'Radio Audit', 'Meter Test', 'IVM', '', 'WIP'),
(48, 'BPC hotline', 'Botswana', 'KM', '', 'WIP'),
(49, 'FAT for cross Dete solar  project', 'Dete', 'BNM', '', 'WIP'),
(50, 'Hwange 7&8', 'hwange ', 'n/a', '', 'pending'),
(51, 'Follow up on FAT for NCC PABX', 'NCC', 'CB', '', 'CA required'),
(52, 'attend to Byo RTU network', 'Bulawayo', 'KM', '', 'pending'),
(53, 'Middle Sabi link 160km', 'Orange Groove', 'n/a', '', 'pending'),
(54, 'call logger', 'regions', 'n/a', '', 'pending'),
(55, 'repairing of test equipment', 'n/a', 'DG', '', 'pending'),
(56, 'SGC & ZETDC to test T1 & E1 cards', 'meter test', 'n/a', '', 'clearance out'),
(57, 'Video conferencing for regions', 'regions', 'KM', '', 'WIP'),
(58, 'invite Potraz to  check vsat', 'meter test & head office', 'CB', '', 'WIP'),
(59, 'teleprotection for muxes', 'meter test', 'DG', '', 'pending'),
(60, 'chinhoyi PABX migration to matrix', 'Chinhoyi', 'IVM', '', 'pending'),
(61, 'hwange upgrade', 'hwange', 'DG', '', 'pending'),
(62, 'shangani online', 'shangani', 'n/a', '', 'pending marvel-shangani'),
(63, 'chloride issues', 'n/a', 'n/a', '', '2 sets to western region & 1 set to kb'),
(64, 'resasitate abb mux in workshop', 'n/a', 'BNM', '', 'missing CESM card'),
(65, 'OG-MS Link', 'Orange Groove', 'BM', '', 'SAT SFP');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
