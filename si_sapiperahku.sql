-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 12:34 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_sapiperah`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_sapi` (IN `ID_SAPI` VARCHAR(3), IN `ID_KANDANG` VARCHAR(3), IN `TGL_LAHIR` DATE, IN `UMR_SAPI` DECIMAL(8,0), IN `JNS_KELAMIN` VARCHAR(10), IN `BRT_SAPI` FLOAT, IN `JNS_SAPI` VARCHAR(20))  NO SQL
insert into sapi values (ID_SAPI,ID_KANDANG,TGL_LAHIR,UMR_SAPI,JNS_KELAMIN,BRT_SAPI,JNS_SAPI)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kandang`
--

CREATE TABLE `kandang` (
  `ID_KANDANG` varchar(3) NOT NULL,
  `ID_PTGS` varchar(3) NOT NULL,
  `KAPSTS_KANDANG` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandang`
--

INSERT INTO `kandang` (`ID_KANDANG`, `ID_PTGS`, `KAPSTS_KANDANG`) VALUES
('001', '001', '5'),
('002', '002', '8'),
('003', '003', '7');

-- --------------------------------------------------------

--
-- Table structure for table `perah`
--

CREATE TABLE `perah` (
  `ID_PERAH` varchar(3) NOT NULL,
  `ID_SAPI` varchar(3) NOT NULL,
  `TGL_PERAH` date DEFAULT NULL,
  `JAM_PERAH` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `ID_PTGS` varchar(3) NOT NULL,
  `NM_PTGS` varchar(40) DEFAULT NULL,
  `ALMT_PTGS` varchar(50) DEFAULT NULL,
  `TLP_PTGS` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`ID_PTGS`, `NM_PTGS`, `ALMT_PTGS`, `TLP_PTGS`) VALUES
('001', 'bimo', 'rungkut mundur', '087678132112'),
('002', 'dimas', 'menganti utara', '087962345239'),
('003', 'erwin', 'buduran utara', '089634567654'),
('004', 'frismanda', 'surabaya utara', '87654321563'),
('005', 'syubanul', 'wonorejo selatan', '089765432156');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `ID_RIWAYAT` varchar(3) NOT NULL,
  `ID_SAPI` varchar(3) NOT NULL,
  `NM_PENYAKIT` varchar(20) DEFAULT NULL,
  `TGL_SAKIT` date DEFAULT NULL,
  `TGL_SEMBUH` date DEFAULT NULL,
  `TGL_TNDKN_MDS` date DEFAULT NULL,
  `TNDKN_MDS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sapi`
--

CREATE TABLE `sapi` (
  `ID_SAPI` varchar(3) NOT NULL,
  `ID_KANDANG` varchar(3) NOT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `UMR_SAPI` decimal(8,0) DEFAULT NULL,
  `JNS_KELAMIN` varchar(10) DEFAULT NULL,
  `BRT_SAPI` float DEFAULT NULL,
  `JNS_SAPI` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sapi`
--

INSERT INTO `sapi` (`ID_SAPI`, `ID_KANDANG`, `TGL_LAHIR`, `UMR_SAPI`, `JNS_KELAMIN`, `BRT_SAPI`, `JNS_SAPI`) VALUES
('001', '001', '2016-07-09', '14', 'BETINA', 53, 'brown swiss'),
('002', '002', '2015-06-06', '17', 'JANTAN', 67, 'SAHIWAL'),
('003', '001', '2015-07-08', '20', 'JANTAN', 30, 'SWISS'),
('004', '002', '2015-03-04', '20', 'BETINA', 50, 'BROWN'),
('005', '003', '2014-06-07', '23', 'BETINA', 70, '0'),
('007', '003', '2013-03-02', '18', 'BETINA', 40, 'GREY MILK'),
('010', '002', '2013-05-06', '34', 'BETINA', 83, '0'),
('057', '003', '2015-05-06', '34', 'BETINA', 60, 'BROWN'),
('067', '001', '2018-07-03', '68', 'JANTAN', 69, 'SWISS'),
('080', '002', '2015-07-17', '17', 'Betina', 53, 'BROWN'),
('567', '001', '2015-07-09', '14', 'JANTAN', 53, 'SWISS'),
('987', '002', '2015-07-11', '17', 'JANTAN', 53, 'SWISS');

--
-- Triggers `sapi`
--
DELIMITER $$
CREATE TRIGGER `updatekapasitas` AFTER INSERT ON `sapi` FOR EACH ROW update kandang set  KAPSTS_KANDANG=KAPSTS_KANDANG+1 where ID_KANDANG=NEW.ID_KANDANG
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `ID_SUPPLIER` varchar(3) NOT NULL,
  `NM_SUPPLIER` varchar(40) DEFAULT NULL,
  `ALMT_SUPPLIER` varchar(50) DEFAULT NULL,
  `TLP_SUPPLIER` decimal(15,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `test`
-- (See below for the actual view)
--
CREATE TABLE `test` (
`ID_PTGS` varchar(3)
,`NM_PTGS` varchar(40)
,`ID_SAPI` varchar(3)
);

-- --------------------------------------------------------

--
-- Table structure for table `trksi_sapi`
--

CREATE TABLE `trksi_sapi` (
  `ID_TRSKSI` varchar(5) NOT NULL,
  `ID_SAPI` varchar(3) DEFAULT NULL,
  `ID_PTGS` varchar(3) NOT NULL,
  `ID_SUPPLIER` varchar(3) NOT NULL,
  `TGL_TRSKSI` date DEFAULT NULL,
  `JAM_TRSKAI` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `test`
--
DROP TABLE IF EXISTS `test`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `test`  AS  (select `kandang`.`ID_PTGS` AS `ID_PTGS`,`petugas`.`NM_PTGS` AS `NM_PTGS`,`sapi`.`ID_SAPI` AS `ID_SAPI` from ((`sapi` join `kandang` on((`sapi`.`ID_KANDANG` = `kandang`.`ID_KANDANG`))) join `petugas` on((`kandang`.`ID_PTGS` = `petugas`.`ID_PTGS`)))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandang`
--
ALTER TABLE `kandang`
  ADD PRIMARY KEY (`ID_KANDANG`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_PTGS`);

--
-- Indexes for table `perah`
--
ALTER TABLE `perah`
  ADD PRIMARY KEY (`ID_PERAH`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_SAPI`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`ID_PTGS`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`ID_RIWAYAT`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_SAPI`);

--
-- Indexes for table `sapi`
--
ALTER TABLE `sapi`
  ADD PRIMARY KEY (`ID_SAPI`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_KANDANG`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`ID_SUPPLIER`);

--
-- Indexes for table `trksi_sapi`
--
ALTER TABLE `trksi_sapi`
  ADD PRIMARY KEY (`ID_TRSKSI`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_SUPPLIER`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_SAPI`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_PTGS`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kandang`
--
ALTER TABLE `kandang`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_PTGS`) REFERENCES `petugas` (`ID_PTGS`);

--
-- Constraints for table `perah`
--
ALTER TABLE `perah`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_SAPI`) REFERENCES `sapi` (`ID_SAPI`);

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_SAPI`) REFERENCES `sapi` (`ID_SAPI`);

--
-- Constraints for table `sapi`
--
ALTER TABLE `sapi`
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_KANDANG`) REFERENCES `kandang` (`ID_KANDANG`);

--
-- Constraints for table `trksi_sapi`
--
ALTER TABLE `trksi_sapi`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_SUPPLIER`) REFERENCES `supplier` (`ID_SUPPLIER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_SAPI`) REFERENCES `sapi` (`ID_SAPI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_PTGS`) REFERENCES `petugas` (`ID_PTGS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
