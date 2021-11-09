-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 04:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medilog`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE `allergies` (
  `all_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allergies`
--

INSERT INTO `allergies` (`all_id`, `name`) VALUES
(1, 'dust'),
(2, 'pollen');

-- --------------------------------------------------------

--
-- Table structure for table `allergy_new`
--

CREATE TABLE `allergy_new` (
  `NIC` varchar(20) NOT NULL,
  `all_id` varchar(150) NOT NULL,
  `Allergy_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `pho_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `name`, `password`, `pho_no`) VALUES
(1, 'Dr.sowmyan', '*49DCFBD741932E8CCB6E56A59B5D61DB852338CB', 702729565),
(6, 'sow', 'd525706d6f19ea00e7d7a4574f7f5e3f', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hos_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hos_id`, `name`, `address`) VALUES
(1, 'durdance', '29,5/1,rohiniroad');

-- --------------------------------------------------------

--
-- Table structure for table `illness`
--

CREATE TABLE `illness` (
  `ill_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `illness`
--

INSERT INTO `illness` (`ill_id`, `name`) VALUES
(1, 'diabeties'),
(2, 'corona'),
(3, 'maleria');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `med_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`med_id`, `name`) VALUES
(1, 'metphomin'),
(2, 'medicine 2'),
(3, 'medicine 3');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `NIC` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ph_number` int(10) NOT NULL,
  `address` text NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`NIC`, `name`, `ph_number`, `address`, `blood_group`, `gender`) VALUES
('123456789123', 'kuncharan', 710911071, 'something', 'B+', 'Male'),
('200008901938', 'Sowmyan', 702729565, '29,5/1,rohiniroad', 'O-', ''),
('D002', 'D002 Test Person', 987456213, 'new steet colombo', 'A+', 'F'),
('ID001', 'checkPerson', 77459555, 'ID001 check person 1', 'A-', 'M'),
('sssdsf545431', 'new patient', 777777777, 'ssdsdazdcsdfe', 'O+', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `patient_allergies`
--

CREATE TABLE `patient_allergies` (
  `NIC` varchar(12) NOT NULL,
  `all_id` int(11) NOT NULL,
  `Allergy_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_allergies`
--

INSERT INTO `patient_allergies` (`NIC`, `all_id`, `Allergy_name`) VALUES
('123456789123', 1, 'dust'),
('123456789123', 2, 'pollen'),
('200008901938', 2, 'pollen');

-- --------------------------------------------------------

--
-- Table structure for table `patient_ill`
--

CREATE TABLE `patient_ill` (
  `NIC` varchar(12) NOT NULL,
  `ill_id` int(11) NOT NULL,
  `Illness_name` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_ill`
--

INSERT INTO `patient_ill` (`NIC`, `ill_id`, `Illness_name`, `description`) VALUES
('200008901938', 1, 'diabeties', 'edsdgdefefd'),
('200008901938', 2, 'diabeties', 'throat2'),
('200008901938', 3, 'as', 'asas'),
('D002', 2, 'Covid Treatment', 'Treatment for covid'),
('ID001', 1, 'covid', 'wsdqa'),
('sssdsf545431', 3, 'maleria', 'maleria dsa');

-- --------------------------------------------------------

--
-- Table structure for table `patient_medi`
--

CREATE TABLE `patient_medi` (
  `NIC` varchar(12) NOT NULL,
  `med_id` int(11) NOT NULL,
  `Medi_name` varchar(150) NOT NULL,
  `amount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_medi`
--

INSERT INTO `patient_medi` (`NIC`, `med_id`, `Medi_name`, `amount`) VALUES
('123456789123', 1, 'Cephalexin', '500'),
('123456789123', 3, 'Panadol', '500'),
('200008901938', 2, 'vitamin C', '10');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `NIC` varchar(12) NOT NULL,
  `hos_id` int(11) NOT NULL,
  `doc-id` int(11) NOT NULL,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `records_new`
--

CREATE TABLE `records_new` (
  `NIC` varchar(20) NOT NULL,
  `Doc_name` varchar(150) NOT NULL,
  `Hos_name` varchar(150) NOT NULL,
  `Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records_new`
--

INSERT INTO `records_new` (`NIC`, `Doc_name`, `Hos_name`, `Date`) VALUES
('972184434V', 'Dr.sowmyan', 'durdance', '2021-10-02'),
('982184434V', 'sow', 'durdance', '2021-10-01'),
('992184434V', 'Dr.sowmyan', 'durdance', '2021-10-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergies`
--
ALTER TABLE `allergies`
  ADD PRIMARY KEY (`all_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hos_id`);

--
-- Indexes for table `illness`
--
ALTER TABLE `illness`
  ADD PRIMARY KEY (`ill_id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `patient_allergies`
--
ALTER TABLE `patient_allergies`
  ADD PRIMARY KEY (`NIC`,`all_id`),
  ADD KEY `all_id_foreign_key_pat_all` (`all_id`);

--
-- Indexes for table `patient_ill`
--
ALTER TABLE `patient_ill`
  ADD PRIMARY KEY (`NIC`,`ill_id`),
  ADD KEY `ill_id_foreign_key_pat_ill` (`ill_id`);

--
-- Indexes for table `patient_medi`
--
ALTER TABLE `patient_medi`
  ADD PRIMARY KEY (`NIC`,`med_id`),
  ADD KEY `med_id_foreign_key_pat_med` (`med_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`NIC`),
  ADD KEY `doc_id_foreign_key_rec` (`doc-id`),
  ADD KEY `hos_id_foreign_key_rec` (`hos_id`);

--
-- Indexes for table `records_new`
--
ALTER TABLE `records_new`
  ADD PRIMARY KEY (`NIC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allergies`
--
ALTER TABLE `allergies`
  MODIFY `all_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `illness`
--
ALTER TABLE `illness`
  MODIFY `ill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient_allergies`
--
ALTER TABLE `patient_allergies`
  ADD CONSTRAINT `NIC_foreign_key_pat_all` FOREIGN KEY (`NIC`) REFERENCES `patient` (`NIC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `all_id_foreign_key_pat_all` FOREIGN KEY (`all_id`) REFERENCES `allergies` (`all_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_ill`
--
ALTER TABLE `patient_ill`
  ADD CONSTRAINT `NIC_foreign_key_pat_ill` FOREIGN KEY (`NIC`) REFERENCES `patient` (`NIC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ill_id_foreign_key_pat_ill` FOREIGN KEY (`ill_id`) REFERENCES `illness` (`ill_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_medi`
--
ALTER TABLE `patient_medi`
  ADD CONSTRAINT `NIC_foreign_key_pat_med` FOREIGN KEY (`NIC`) REFERENCES `patient` (`NIC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `med_id_foreign_key_pat_med` FOREIGN KEY (`med_id`) REFERENCES `medication` (`med_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `NIC_foreign_key_rec` FOREIGN KEY (`NIC`) REFERENCES `patient` (`NIC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doc_id_foreign_key_rec` FOREIGN KEY (`doc-id`) REFERENCES `doctor` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hos_id_foreign_key_rec` FOREIGN KEY (`hos_id`) REFERENCES `hospital` (`hos_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
