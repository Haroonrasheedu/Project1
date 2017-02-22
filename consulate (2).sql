-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 03:13 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consulate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `cpassword`, `name`) VALUES
(1, 'leop@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 'Leopardes'),
(2, 'haro@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 'haroon'),
(3, 'haro@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 'haroon'),
(4, 'admin@gmail.com', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `arrival`
--

CREATE TABLE `arrival` (
  `arrid` int(8) UNSIGNED ZEROFILL NOT NULL,
  `stype` text NOT NULL,
  `qty` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `rdate` date NOT NULL,
  `instatus` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `batchin` varchar(255) NOT NULL,
  `amt` int(11) NOT NULL,
  `ddate` date NOT NULL,
  `colid` int(11) NOT NULL,
  `outstatus` varchar(255) NOT NULL,
  `batchout` varchar(255) NOT NULL,
  `batchdate` date NOT NULL,
  `batchoutdate` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passno` varchar(255) NOT NULL,
  `cc` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `rackin` varchar(255) NOT NULL,
  `coldate` date NOT NULL,
  `coundate` date NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `paytype` varchar(255) NOT NULL,
  `arrdate` date NOT NULL,
  `fid` int(11) NOT NULL,
  `flydate` date NOT NULL,
  `scase` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `vanno` int(11) NOT NULL,
  `dcode` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arrival`
--

INSERT INTO `arrival` (`arrid`, `stype`, `qty`, `rid`, `ptype`, `rdate`, `instatus`, `descr`, `batchin`, `amt`, `ddate`, `colid`, `outstatus`, `batchout`, `batchdate`, `batchoutdate`, `reason`, `email`, `passno`, `cc`, `bid`, `bdate`, `rackin`, `coldate`, `coundate`, `dtype`, `paytype`, `arrdate`, `fid`, `flydate`, `scase`, `pcity`, `vanno`, `dcode`, `cid`) VALUES
(00000005, 'Pick-up-Cash', 1, 6, 'Pick-up-Cash', '2017-02-17', 'Registered', '', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'arsalan@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 25649, 1, 0),
(00000006, 'Pick-up-Cash', 1, 6, 'Pick-up-Cash', '2017-02-17', 'Registered', '', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'arsalan@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 25649, 1, 0),
(00000007, 'Pick-up-Cash', 1, 6, 'Pick-up-Cash', '2017-02-17', 'Registered', '', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'arsalan@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 25649, 1, 0),
(00000008, 'Pick-up-Cash', 1, 6, 'Pick-up-Cash', '2017-02-17', 'Registered', '', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'arsalan@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 25649, 1, 0),
(00000009, 'Pick-up-Cash', 1, 6, 'Pick-up-Cash', '2017-02-17', 'Registered', '', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'arsalan@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 25649, 1, 0),
(00000010, 'Pick-up-Cash', 1, 6, 'Pick-up-Cash', '2017-02-17', 'Registered', '', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'arsalan@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 25649, 1, 0),
(00000011, 'Pick-up-Cash', 1, 6, 'Pick-up-Cash', '2017-02-17', 'Registered', '', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'arsalan@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 25649, 1, 0),
(00000012, 'Pick-up-Cash', 1, 10, 'Pick-up-Cash', '2017-02-22', 'Registered', '', 'batchin200217', 299, '2017-03-10', 31, 'Success', 'batchOut200217', '2017-02-23', '2017-02-25', 'All Documents Perfect', 'rasheed@gmail.com', 'j6994434', 4554565, 71, '2017-02-23', 'rack200217', '2017-02-26', '2017-02-22', 'Top Urgent', '', '2017-02-12', 15, '2017-02-27', 'sc21022017', 'Pick-up-Cash', 25468, 1, 31),
(00000013, 'Pick-up-Cash', 1, 10, 'Pick-up-Cash', '2017-02-22', 'Registered', '', 'batchin200217', 299, '2017-03-10', 31, 'Success', 'batchOut200217', '2017-02-23', '2017-02-25', 'All Documents Perfect', 'rasheed@gmail.com', 'j6994434', 4554565, 71, '2017-02-23', 'rack200217', '2017-02-26', '2017-02-22', 'Top Urgent', '', '2017-02-12', 15, '2017-02-27', 'sc21022017', 'Pick-up-Cash', 25468, 1, 31),
(00000014, 'Pick-up-Cash', 1, 10, 'Pick-up-Cash', '2017-02-22', 'Registered', '', 'batchin200217', 299, '2017-03-10', 31, 'Success', 'batchOut200217', '2017-02-23', '2017-02-25', 'All Documents Perfect', 'rasheed@gmail.com', 'j6994434', 4554565, 71, '2017-02-23', 'rack200217', '2017-02-26', '2017-02-22', 'Top Urgent', '', '2017-02-12', 15, '2017-02-27', 'sc21022017', 'Pick-up-Cash', 25468, 1, 31),
(00000015, 'Pick-up-Cash', 1, 10, 'Pick-up-Cash', '2017-02-22', 'Registered', '', 'batchin200217', 299, '2017-03-10', 31, 'Success', 'batchOut200217', '2017-02-23', '2017-02-25', 'All Documents Perfect', 'rasheed@gmail.com', 'j6994434', 4554565, 71, '2017-02-23', 'rack200217', '2017-02-26', '2017-02-22', 'Top Urgent', '', '2017-02-12', 15, '2017-02-27', 'sc21022017', 'Pick-up-Cash', 25468, 1, 31);

-- --------------------------------------------------------

--
-- Table structure for table `barcode`
--

CREATE TABLE `barcode` (
  `id` int(11) NOT NULL,
  `itemcode` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `srp` int(11) NOT NULL,
  `markuprate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batchid` int(10) UNSIGNED ZEROFILL NOT NULL,
  `rackid` int(11) NOT NULL,
  `batchdate` date NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `stype` varchar(255) NOT NULL,
  `ddate` date NOT NULL,
  `qty` int(11) NOT NULL,
  `instatus` varchar(255) NOT NULL,
  `amt` int(11) NOT NULL,
  `cid` int(8) UNSIGNED ZEROFILL NOT NULL,
  `rid` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `coundate` date NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `paytype` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rdate` date NOT NULL,
  `bid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `passno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batchid`, `rackid`, `batchdate`, `ptype`, `stype`, `ddate`, `qty`, `instatus`, `amt`, `cid`, `rid`, `cc`, `coundate`, `dtype`, `paytype`, `descr`, `email`, `rdate`, `bid`, `bdate`, `passno`) VALUES
(0000000002, 123, '2017-02-19', 'Pick-up-Cash', 'Pick-up-Cash', '2017-03-02', 1, 'Received', 299, 00000028, 8, 4554563, '2017-02-19', 'COD', 'Pick-up-Cash', '', 'urva@gmail.com', '2017-02-19', 61, '2017-02-19', 0),
(0000000003, 123, '2017-02-19', 'Pick-up-Cash', 'Pick-up-Cash', '2017-03-10', 1, 'pending', 250, 00000067, 3, 4554589, '2017-02-14', 'Pick-up-Cash', 'Customer', 'Urgent', 'ithikar@gmail.com', '2012-12-12', 55, '2011-12-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `batchout`
--

CREATE TABLE `batchout` (
  `batchoutid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `coundate` date NOT NULL,
  `rdate` date NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `stype` varchar(255) NOT NULL,
  `instatus` varchar(255) NOT NULL,
  `outstatus` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `batchdate` date NOT NULL,
  `ddate` date NOT NULL,
  `rackid` int(11) NOT NULL,
  `amt` int(11) NOT NULL,
  `paytype` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `batchoutdate` date NOT NULL,
  `batchid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `passno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batchout`
--

INSERT INTO `batchout` (`batchoutid`, `cid`, `rid`, `cc`, `coundate`, `rdate`, `ptype`, `dtype`, `stype`, `instatus`, `outstatus`, `email`, `batchdate`, `ddate`, `rackid`, `amt`, `paytype`, `qty`, `descr`, `batchoutdate`, `batchid`, `bid`, `bdate`, `reason`, `passno`) VALUES
(7, 28, 8, 4554563, '2017-02-19', '2017-02-19', 'Pick-up-Cash', 'COD', 'Pick-up-Cash', 'Received', 'Success', 'urva@gmail.com', '2017-02-19', '2017-03-02', 123, 299, 'Pick-up-Cash', 1, 'Ok', '2017-02-20', 2, 61, '2017-02-19', '', 0),
(8, 28, 8, 4554563, '2017-02-19', '2017-02-19', 'Pick-up-Cash', 'COD', 'Pick-up-Cash', 'Received', 'Resubmission', 'urva@gmail.com', '2017-02-19', '2017-03-02', 123, 299, 'Pick-up-Cash', 1, 'Finsihed', '2017-02-20', 2, 61, '2017-02-19', 'Documents  not properly', 0),
(9, 67, 3, 4554589, '2017-02-14', '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'pending', 'Success', 'ithikar@gmail.com', '2017-02-19', '2017-03-10', 123, 250, 'Pick-up-Cash', 1, 'Urgent', '2017-02-20', 3, 55, '2011-12-12', 'All Documents Perfect', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bbooking`
-- (See below for the actual view)
--
CREATE TABLE `bbooking` (
);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(8) UNSIGNED ZEROFILL NOT NULL,
  `bdate` date NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `stype` varchar(255) NOT NULL,
  `amt` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `cc` int(11) NOT NULL,
  `rdate` date NOT NULL,
  `paytype` varchar(255) NOT NULL,
  `rid` int(11) NOT NULL,
  `cid` int(8) UNSIGNED ZEROFILL NOT NULL,
  `instatus` varchar(255) NOT NULL,
  `coundate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `passno` varchar(255) NOT NULL,
  `batchin` varchar(255) NOT NULL,
  `batchdate` date NOT NULL,
  `ddate` date NOT NULL,
  `rackin` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `bdate`, `ptype`, `stype`, `amt`, `qty`, `dtype`, `pcity`, `descr`, `cc`, `rdate`, `paytype`, `rid`, `cid`, `instatus`, `coundate`, `email`, `passno`, `batchin`, `batchdate`, `ddate`, `rackin`) VALUES
(00000066, '2017-02-12', 'Pick-up-Cash', 'Pick-up-Cash', 298, 1, 'Pick-up-Cash', 'Pick-up-Cash', '', 4554561, '2017-02-17', '', 6, 00000000, 'Registered', '2017-02-17', 'arsalan@leopards.com', 'K9898989', 'batch200217', '2017-12-20', '2017-03-20', ''),
(00000067, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 298, 1, 'Pick-up-Cash', 'Pick-up-Cash', '', 4554561, '2017-02-17', '', 6, 00000000, 'Registered', '2017-02-17', 'arsalan@leopards.com', 'K9898989', 'batch200217', '2017-12-12', '2017-03-23', 'rack200217'),
(00000068, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 298, 1, 'Pick-up-Cash', 'Pick-up-Cash', '', 4554561, '2017-02-17', '', 6, 00000000, 'Registered', '2017-02-17', 'arsalan@leopards.com', 'K9898989', 'batch200217', '2017-12-12', '2017-03-20', 'rack200217'),
(00000069, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 298, 1, 'Pick-up-Cash', 'Pick-up-Cash', '', 4554561, '2017-02-17', '', 6, 00000000, 'Registered', '2017-02-17', 'arsalan@leopards.com', 'K9898989', 'batch200217', '2017-12-12', '2012-01-12', 'rack200217'),
(00000070, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 298, 1, 'Pick-up-Cash', 'Pick-up-Cash', '', 4554561, '2017-02-17', '', 6, 00000000, 'Registered', '2017-02-17', 'arsalan@leopards.com', 'K9898989', 'batch200217', '0202-12-12', '2012-12-12', 'rack200217'),
(00000071, '2017-02-23', 'Pick-up-Cash', 'Pick-up-Cash', 299, 1, 'Top Urgent', 'Pick-up-Cash', '', 4554565, '2017-02-22', '', 10, 00000031, 'Registered', '2017-02-22', 'rasheed@gmail.com', 'j6994434', 'batch200217', '2017-02-23', '2017-03-10', 'rack200217');

-- --------------------------------------------------------

--
-- Table structure for table `colletion`
--

CREATE TABLE `colletion` (
  `coundate` date NOT NULL,
  `rdate` date NOT NULL,
  `coldate` date NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `stype` varchar(255) NOT NULL,
  `outstatus` varchar(255) NOT NULL,
  `paytype` varchar(255) NOT NULL,
  `amt` int(11) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `rid` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `colid` int(8) UNSIGNED ZEROFILL NOT NULL,
  `instatus` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `batchdate` date NOT NULL,
  `ddate` date NOT NULL,
  `batchout` varchar(255) NOT NULL,
  `batchoutdate` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `passno` varchar(255) NOT NULL,
  `rackin` varchar(255) NOT NULL,
  `batchin` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colletion`
--

INSERT INTO `colletion` (`coundate`, `rdate`, `coldate`, `dtype`, `ptype`, `stype`, `outstatus`, `paytype`, `amt`, `descr`, `qty`, `bdate`, `rid`, `cc`, `cid`, `bid`, `colid`, `instatus`, `email`, `batchdate`, `ddate`, `batchout`, `batchoutdate`, `reason`, `passno`, `rackin`, `batchin`, `pcity`) VALUES
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'success', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000018, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', '', 'K9898989', 'rack200217', 'batch200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'success', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000019, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', '', 'K9898989', 'rack200217', 'batch200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'success', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000020, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', '', 'K9898989', 'rack200217', 'batch200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'success', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000021, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', '', 'K9898989', 'rack200217', 'batch200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'success', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000022, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', '', 'K9898989', 'rack200217', 'batch200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'hjk', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000023, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', '', 'K9898989', 'rack200217', 'batch200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'hjk', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000024, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', '', 'K9898989', 'rack200217', 'batch200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'hjk', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000025, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', 'kljk', 'K9898989', 'rack200217', 'batch200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'hjk', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000026, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', 'kljk', 'K9898989', 'rack200217', 'batch200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'ggj', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000027, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', 'bng', 'K9898989', 'rack200217', 'batch200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'ggj', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000028, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', 'kooo', 'K9898989', 'rack200217', 'batch200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'ggj', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000029, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', 'kooo', 'K9898989', 'rack200217', 'batchin200217', 'Pick-up-Cash'),
('2017-02-17', '2017-02-17', '2017-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 'ggj', '', 298, '', 1, '2012-12-12', 6, 4554561, 0, 70, 00000030, 'Registered', 'arsalan@leopards.com', '0202-12-12', '2012-12-12', 'batch24022017', '2017-02-19', 'kooo', 'K9898989', 'rack200217', 'batchin200217', 'Pick-up-Cash'),
('2017-02-22', '2017-02-22', '2017-02-26', 'Top Urgent', 'Pick-up-Cash', 'Pick-up-Cash', 'Success', '', 299, '', 1, '2017-02-23', 10, 4554565, 31, 71, 00000031, 'Registered', 'rasheed@gmail.com', '2017-02-23', '2017-03-10', 'batchOut200217', '2017-02-25', 'All Documents Perfect', 'j6994434', 'rack200217', 'batchin200217', 'Pick-up-Cash');

-- --------------------------------------------------------

--
-- Table structure for table `conseq`
--

CREATE TABLE `conseq` (
  `csid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `csdate` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `stype` varchar(255) NOT NULL,
  `amt` int(11) NOT NULL,
  `ddate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `cc` int(8) UNSIGNED ZEROFILL NOT NULL,
  `coundate` date NOT NULL,
  `passno` varchar(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `faname` varchar(255) NOT NULL,
  `idate` date NOT NULL,
  `edate` date NOT NULL,
  `dob` date NOT NULL,
  `flat` int(11) NOT NULL,
  `build` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `instatus` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `amt` int(11) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `paytype` varchar(255) DEFAULT NULL,
  `pissue` varchar(255) NOT NULL,
  `ptime` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `nty` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `stype` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`cc`, `coundate`, `passno`, `lname`, `fname`, `sname`, `cid`, `faname`, `idate`, `edate`, `dob`, `flat`, `build`, `street`, `area`, `city`, `country`, `instatus`, `pcity`, `ptype`, `dtype`, `amt`, `descr`, `paytype`, `pissue`, `ptime`, `qty`, `nty`, `phone`, `email`, `stype`) VALUES
(04554556, '2012-12-12', 'J6994425', 'Rasheed', 'Haroon', 'Maricar', '04554556', 'Umar', '2012-12-12', '2012-12-12', '1985-09-17', 2, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 'AE', 'Return', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 89, 'before', NULL, 'Trichy', '2 weeks', 1, 'Indian', 55910556, 'tes@gmail.com', ''),
(04554557, '2017-02-14', 'J6994425', 'Hussain', 'Ibrahim', 'Lebbai', '04554557', 'father', '2012-12-12', '2012-12-12', '1985-09-18', 2, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 'AE', 'Return to Shipments', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 250, 'before', NULL, 'Trichy', '2 weeks', 1, 'Indian', 559105560, 'hussain@gmail.com', 'Pick-up-Cash'),
(04554558, '2012-12-12', 'j787878', 'Rawoof', 'Waris', 'rawoof', '00000024', 'Haider', '2012-12-12', '2012-12-12', '1985-09-12', 2, 'Al Dhagaya ', 'Ayal Nasser', 'Deira', 'Dubai', 'AE', 'pending', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 99, 'passport', NULL, 'karachi', '2 weeks', 1, 'Paskistan', 5589889, 'waris1@gmail.com', 'Pick-up-Cash'),
(04554559, '2012-12-12', 'j98799', 'hkh', 'jk', 'jkhjkh', '00000019', 'jk', '2012-12-12', '2012-12-12', '2012-12-12', 2, 'jk', 'j', 'j', 'Dubai', 'AF', 'pending', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 90, 'ji', NULL, 'tl', '2 wew', 1, 'uijk', 998, 'tes@gmail.com', 'Pick-up-Cash'),
(04554560, '2012-12-12', 'k8989898', 'Mohd', 'Yusuf', 'Yunus', '00000025', 'Umar Naina', '2012-12-12', '2012-12-12', '1985-12-12', 2, 'Al Dhagaya', 'Ayal Nasser', 'Deira', 'Dubai', 'AE', 'Penidng', 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 299, 'Passport', NULL, 'Trichy', '2 weeks', 2, 'Indian', 5591898, 'yunus@gmail.com', 'Customer'),
(04554561, '2017-02-17', 'k8989898', 'Arsalan', 'Mohamed', 'Rawoof', '00000026', 'Rawoof', '2015-12-12', '2021-12-12', '1991-12-12', 2, 'Al Dhagaya', 'Ayal Nasser', 'Deira', 'Dubai', 'AE', 'submitted', 'Pick-up-Cash', 'COD', 'Pick-up-Cash', 298, 'before march', NULL, 'Karachi', '2 weeks', 1, 'Pakistan', 559108989, 'arsalan@leopards.com', 'Pick-up-Cash'),
(04554562, '2017-02-17', 'j8976878', 'jawad', 'ahmed', 'Rawoof', '00000027', 'Jamal', '2015-12-12', '2021-12-12', '1991-12-12', 2, 'Cluster E', 'Sheik javed Road', 'Jumerira Lake towers', 'Dubai', 'AE', 'submiited', 'Pick-up-Cash', 'Customer', 'Pick-up-Cash', 299, 'before mach i need', NULL, 'Karachi', '2 weeks', 1, 'Pakistan', 908999, 'jawad@leopards.com', 'Customer'),
(04554563, '2017-02-19', 'K8989999', 'Sharma', 'Urva', 'Sharma', '00000028', 'Sharma', '2015-12-12', '2021-12-12', '1991-12-12', 2, 'Al Dhagaya', 'Ayal Nasser', 'Deira', 'Dubai', 'AE', 'Submitted', 'Pick-up-Cash', 'Customer', 'COD', 299, 'Urgent', NULL, 'India', '2 weeks', 1, 'Indian', 55919998, 'urva@gmail.com', 'Customer'),
(04554564, '2017-02-19', 'J897867667', 'Ahamad', 'Ifthikar', 'Ifti', '00000030', 'Ifti', '2015-12-12', '2021-12-12', '1975-12-12', 2, 'Al Dhagaya', 'Ayal Nasser', 'Deira', 'Dubai', 'AE', 'Submitted', 'Pick-up-Cash', 'Customer', 'Pick-up-Cash', 2, 'urgent', NULL, 'India', '2 weeks', 1, 'Indian', 55989898, 'ifthikar@gmail.com', 'Customer'),
(04554565, '2017-02-22', 'j6994434', 'Rasheed', 'Haroon', 'Maricar', '00000031', 'Umar', '2015-02-02', '2021-03-02', '1985-02-12', 2, 'Al Dhagaya Building', 'Ayal Nasser', 'Deira', 'Dubai', 'AE', 'Submitted ', 'Dubai', 'New Passport', 'Top Urgent', 299, 'Need Urgent', NULL, 'Singapore', '2 weeks', 1, 'Indian', 559104343, 'rasheed@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `cc` varchar(255) NOT NULL,
  `coundate` date NOT NULL,
  `rdate` date NOT NULL,
  `cname` varchar(255) NOT NULL,
  `passno` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `idate` date NOT NULL,
  `edate` date NOT NULL,
  `pissue` varchar(255) NOT NULL,
  `faname` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `build` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `entdate` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `pieces` varchar(255) NOT NULL,
  `amt` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(255) NOT NULL,
  `passno` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `idate` date NOT NULL,
  `edate` date NOT NULL,
  `pisssue` varchar(255) NOT NULL,
  `faname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `flat` int(11) NOT NULL,
  `building` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `cpwd` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerNumber` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `contactLastName` varchar(50) NOT NULL,
  `contactFirstName` varchar(50) NOT NULL,
  `addressLine1` varchar(50) NOT NULL,
  `addressLine2` varchar(50) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postalCode` varchar(15) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `salesRepEmployeeNumber` int(11) DEFAULT NULL,
  `creditLimit` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerNumber`, `customerName`, `contactLastName`, `contactFirstName`, `addressLine1`, `addressLine2`, `city`, `state`, `postalCode`, `country`, `salesRepEmployeeNumber`, `creditLimit`) VALUES
(103, 'Atelier graphique', 'Schmitt', 'Carine ', '54, rue Royale', NULL, 'Nantes', NULL, '44000', 'France', 1370, 21000),
(112, 'Signal Gift Stores', 'King', 'Jean', '8489 Strong St.', NULL, 'Las Vegas', 'NV', '83030', 'USA', 1166, 71800),
(114, 'Australian Collectors, Co.', 'Ferguson', 'Peter', '636 St Kilda Road', 'Level 3', 'Melbourne', 'Victoria', '3004', 'Australia', 1611, 117300),
(119, 'La Rochelle Gifts', 'Labrune', 'Janine ', '67, rue des Cinquante Otages', NULL, 'Nantes', NULL, '44000', 'France', 1370, 118200),
(121, 'Baane Mini Imports', 'Bergulfsen', 'Jonas ', 'Erling Skakkes gate 78', NULL, 'Stavern', NULL, '4110', 'Norway', 1504, 81700),
(124, 'Mini Gifts Distributors Ltd.', 'Nelson', 'Susan', '5677 Strong St.', NULL, 'San Rafael', 'CA', '97562', 'USA', 1165, 210500),
(125, 'Havel & Zbyszek Co', 'Piestrzeniewicz', 'Zbyszek ', 'ul. Filtrowa 68', NULL, 'Warszawa', NULL, '01-012', 'Poland', NULL, 0),
(128, 'Blauer See Auto, Co.', 'Keitel', 'Roland', 'Lyonerstr. 34', NULL, 'Frankfurt', NULL, '60528', 'Germany', 1504, 59700),
(129, 'Mini Wheels Co.', 'Murphy', 'Julie', '5557 North Pendale Street', NULL, 'San Francisco', 'CA', '94217', 'USA', 1165, 64600),
(131, 'Land of Toys Inc.', 'Lee', 'Kwai', '897 Long Airport Avenue', NULL, 'NYC', 'NY', '10022', 'USA', 1323, 114900),
(141, 'Euro+ Shopping Channel', 'Freyre', 'Diego ', 'C/ Moralzarzal, 86', NULL, 'Madrid', NULL, '28034', 'Spain', 1370, 227600),
(146, 'Saveley & Henriot, Co.', 'Saveley', 'Mary ', '2, rue du Commerce', NULL, 'Lyon', NULL, '69004', 'France', 1337, 123900),
(148, 'Dragon Souveniers, Ltd.', 'Natividad', 'Eric', 'Bronz Sok.', 'Bronz Apt. 3/6 Tesvikiye', 'Singapore', NULL, '079903', 'Singapore', 1621, 103800),
(151, 'Muscle Machine Inc', 'Young', 'Jeff', '4092 Furth Circle', 'Suite 400', 'NYC', 'NY', '10022', 'USA', 1286, 138500),
(157, 'Diecast Classics Inc.', 'Leong', 'Kelvin', '7586 Pompton St.', NULL, 'Allentown', 'PA', '70267', 'USA', 1216, 100600),
(161, 'Technics Stores Inc.', 'Hashimoto', 'Juri', '9408 Furth Circle', NULL, 'Burlingame', 'CA', '94217', 'USA', 1165, 84600),
(166, 'Handji Gifts& Co', 'Victorino', 'Wendy', '106 Linden Road Sandown', '2nd Floor', 'Singapore', NULL, '069045', 'Singapore', 1612, 97900),
(167, 'Herkku Gifts', 'Oeztan', 'Veysel', 'Brehmen St. 121', 'PR 334 Sentrum', 'Bergen', NULL, 'N 5804', 'Norway  ', 1504, 96800),
(168, 'American Souvenirs Inc', 'Franco', 'Keith', '149 Spinnaker Dr.', 'Suite 101', 'New Haven', 'CT', '97823', 'USA', 1286, 0),
(173, 'Cambridge Collectables Co.', 'Tseng', 'Jerry', '4658 Baden Av.', NULL, 'Cambridge', 'MA', '51247', 'USA', 1188, 43400),
(175, 'Gift Depot Inc.', 'King', 'Julie', '25593 South Bay Ln.', NULL, 'Bridgewater', 'CT', '97562', 'USA', 1323, 84300),
(177, 'Osaka Souveniers Co.', 'Kentary', 'Mory', '1-6-20 Dojima', NULL, 'Kita-ku', 'Osaka', ' 530-0003', 'Japan', 1621, 81200),
(181, 'Vitachrome Inc.', 'Frick', 'Michael', '2678 Kingston Rd.', 'Suite 101', 'NYC', 'NY', '10022', 'USA', 1286, 76400),
(186, 'Toys of Finland, Co.', 'Karttunen', 'Matti', 'Keskuskatu 45', NULL, 'Helsinki', NULL, '21240', 'Finland', 1501, 96500),
(187, 'AV Stores, Co.', 'Ashworth', 'Rachel', 'Fauntleroy Circus', NULL, 'Manchester', NULL, 'EC2 5NT', 'UK', 1501, 136800),
(189, 'Clover Collections, Co.', 'Cassidy', 'Dean', '25 Maiden Lane', 'Floor No. 4', 'Dublin', NULL, '2', 'Ireland', 1504, 69400),
(198, 'Auto-Moto Classics Inc.', 'Taylor', 'Leslie', '16780 Pompton St.', NULL, 'Brickhaven', 'MA', '58339', 'USA', 1216, 23000),
(201, 'UK Collectables, Ltd.', 'Devon', 'Elizabeth', '12, Berkeley Gardens Blvd', NULL, 'Liverpool', NULL, 'WX1 6LT', 'UK', 1501, 92700),
(202, 'Canadian Gift Exchange Network', 'Tamuri', 'Yoshi ', '1900 Oak St.', NULL, 'Vancouver', 'BC', 'V3F 2K1', 'Canada', 1323, 90300),
(204, 'Online Mini Collectables', 'Barajas', 'Miguel', '7635 Spinnaker Dr.', NULL, 'Brickhaven', 'MA', '58339', 'USA', 1188, 68700),
(205, 'Toys4GrownUps.com', 'Young', 'Julie', '78934 Hillside Dr.', NULL, 'Pasadena', 'CA', '90003', 'USA', 1166, 90700),
(206, 'Asian Shopping Network, Co', 'Walker', 'Brydey', 'Suntec Tower Three', '8 Temasek', 'Singapore', NULL, '038988', 'Singapore', NULL, 0),
(211, 'King Kong Collectables, Co.', 'Gao', 'Mike', 'Bank of China Tower', '1 Garden Road', 'Central Hong Kong', NULL, NULL, 'Hong Kong', 1621, 58600),
(219, 'Boards & Toys Co.', 'Young', 'Mary', '4097 Douglas Av.', NULL, 'Glendale', 'CA', '92561', 'USA', 1166, 11000),
(239, 'Collectable Mini Designs Co.', 'Thompson', 'Valarie', '361 Furth Circle', NULL, 'San Diego', 'CA', '91217', 'USA', 1166, 105000),
(240, 'giftsbymail.co.uk', 'Bennett', 'Helen ', 'Garden House', 'Crowther Way 23', 'Cowes', 'Isle of Wight', 'PO31 7PJ', 'UK', 1501, 93900),
(242, 'Alpha Cognac', 'Roulet', 'Annette ', '1 rue Alsace-Lorraine', NULL, 'Toulouse', NULL, '31000', 'France', 1370, 61100),
(247, 'Messner Shopping Network', 'Messner', 'Renate ', 'Magazinweg 7', NULL, 'Frankfurt', NULL, '60528', 'Germany', NULL, 0),
(249, 'Amica Models & Co.', 'Accorti', 'Paolo ', 'Via Monte Bianco 34', NULL, 'Torino', NULL, '10100', 'Italy', 1401, 113000),
(250, 'Lyon Souveniers', 'Da Silva', 'Daniel', '27 rue du Colonel Pierre Avia', NULL, 'Paris', NULL, '75508', 'France', 1337, 68100);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `stype` text NOT NULL,
  `qty` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `rdate` date NOT NULL,
  `instatus` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `batchin` varchar(255) NOT NULL,
  `amt` int(11) NOT NULL,
  `ddate` date NOT NULL,
  `colid` int(11) NOT NULL,
  `outstatus` varchar(255) NOT NULL,
  `batchout` varchar(255) NOT NULL,
  `batchdate` date NOT NULL,
  `batchoutdate` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passno` varchar(255) NOT NULL,
  `cc` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `rackin` varchar(255) NOT NULL,
  `coldate` date NOT NULL,
  `coundate` date NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `paytype` varchar(255) NOT NULL,
  `arrdate` date NOT NULL,
  `fid` int(11) NOT NULL,
  `flydate` date NOT NULL,
  `scase` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `flat` int(11) NOT NULL,
  `build` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `vanno` int(11) NOT NULL,
  `dcode` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `arrid` int(11) NOT NULL,
  `odate` date NOT NULL,
  `awbno` int(10) UNSIGNED ZEROFILL NOT NULL,
  `drname` varchar(255) NOT NULL,
  `ncnd` int(11) NOT NULL,
  `jobout` int(11) NOT NULL,
  `sing` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `rndate` date NOT NULL,
  `delid` int(10) UNSIGNED ZEROFILL NOT NULL,
  `phone` int(11) NOT NULL,
  `routename` varchar(255) NOT NULL,
  `routeno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`stype`, `qty`, `rid`, `ptype`, `rdate`, `instatus`, `descr`, `batchin`, `amt`, `ddate`, `colid`, `outstatus`, `batchout`, `batchdate`, `batchoutdate`, `reason`, `email`, `passno`, `cc`, `bid`, `bdate`, `rackin`, `coldate`, `coundate`, `dtype`, `paytype`, `arrdate`, `fid`, `flydate`, `scase`, `pcity`, `flat`, `build`, `street`, `area`, `city`, `country`, `vanno`, `dcode`, `cid`, `oid`, `arrid`, `odate`, `awbno`, `drname`, `ncnd`, `jobout`, `sing`, `remarks`, `rndate`, `delid`, `phone`, `routename`, `routeno`) VALUES
('Pick-up-Cash', 1, 6, 'Customer', '2017-02-17', 'Registered', 'out for delivered', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'arsalan@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 2, 'Al Dhagaya Building', 'Ayal Nasser', 'Sheik Jayed Road', 'Dubai', 'AF', 25649, 1, 0, 1, 5, '2012-12-12', 0123456334, 'Jawad', 99, 10, 'cook', 'Shipment', '2017-02-22', 0000000018, 558989898, 'BurDubai', 1),
('Pick-up-Cash', 1, 6, 'Customer', '2017-02-17', 'Registered', 'out for delivered', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'jawad@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 2, 'Al Dhagaya Building', 'Ayal Nasser', 'Sheik Jayed Road', 'Dubai', 'AF', 25649, 1, 0, 1, 5, '2012-12-12', 0123456335, 'Jawad', 99, 10, 'cook', 'Shipment', '2017-02-22', 0000000019, 558989898, 'Satwa', 2),
('Pick-up-Cash', 1, 6, 'Customer', '2017-02-17', 'Registered', 'out for delivered', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'waqas@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 2, 'Al Dhagaya Building', 'Ayal Nasser', 'Sheik Jayed Road', 'Dubai', 'AF', 25649, 1, 0, 1, 5, '2012-12-12', 0123456343, 'Jawad', 99, 10, 'cook', 'Shipment', '2017-02-22', 0000000020, 558989898, 'Sheik Zayed Road', 4),
('Pick-up-Cash', 1, 6, 'Customer', '2017-02-17', 'Registered', 'out for delivered', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'waris@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 2, 'Al Dhagaya Building', 'Ayal Nasser', 'Sheik Jayed Road', 'Dubai', 'AF', 25649, 1, 0, 1, 5, '2012-12-12', 0123456332, 'Jawad', 99, 10, 'cook', 'Shipment', '2017-02-22', 0000000021, 558989898, 'karama', 3),
('Pick-up-Cash', 1, 6, 'Customer', '2017-02-17', 'Registered', 'out for delivered', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'mohamed@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 2, 'Al Dhagaya Building', 'Ayal Nasser', 'Sheik Jayed Road', 'Dubai', 'AF', 25649, 1, 0, 1, 5, '2012-12-12', 1234563332, 'Jawad', 99, 10, 'cook', 'Shipment', '2017-02-22', 0000000022, 558989898, 'World Trade Centre', 5),
('Pick-up-Cash', 1, 6, 'Customer', '2017-02-17', 'Registered', 'out for delivered', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'rass@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 2, 'Al Dhagaya Building', 'Ayal Nasser', 'Sheik Jayed Road', 'Dubai', 'AF', 25649, 1, 0, 1, 5, '2012-12-12', 1234563432, 'Jawad', 99, 10, 'cook', 'Shipment', '2017-02-22', 0000000023, 558989898, 'Emirates Tower', 6),
('Pick-up-Cash', 1, 6, 'Customer', '2017-02-17', 'Registered', 'out for delivered', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'rass1@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 2, 'Al Dhagaya Building', 'Ayal Nasser', 'Sheik Jayed Road', 'Dubai', 'AF', 25649, 1, 0, 1, 5, '2012-12-12', 1234563423, 'Jawad', 99, 10, 'cook', 'Shipment', '2017-02-22', 0000000024, 558989898, 'Financial Centre', 7),
('Pick-up-Cash', 1, 6, 'Customer', '2017-02-17', 'Registered', 'out for delivered', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'ra1@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 2, 'Al Dhagaya Building', 'Ayal Nasser', 'Sheik Jayed Road', 'Dubai', 'AF', 25649, 1, 0, 1, 5, '2012-12-12', 0012345634, 'Jawad', 99, 10, 'cook', 'Shipment', '2017-02-22', 0000000025, 558989898, 'Business Bay', 8),
('Pick-up-Cash', 1, 6, 'Customer', '2017-02-17', 'Registered', 'out for delivered', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'ra45fs@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 2, 'Al Dhagaya Building', 'Ayal Nasser', 'Sheik Jayed Road', 'Dubai', 'AF', 25649, 1, 0, 1, 5, '2012-12-12', 0123456453, 'Jawad', 99, 10, 'cook', 'Shipment', '2017-02-22', 0000000026, 558989898, 'Dubai Mall', 9),
('Pick-up-Cash', 1, 6, 'Pick-up-Cash', '2017-02-17', 'Registered', 'All dcoumet', 'batchin200217', 298, '2012-12-12', 30, 'Rejected', 'batch24022017', '0202-12-12', '2017-02-19', 'Documents not proper', 'rasheed@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 2, 'Karama', 'karamak street', 'karama', 'Dubai', 'AF', 25649, 1, 0, 1, 5, '2012-12-12', 1234567888, 'shakoor', 99, 10, 'jh', 'jk', '2017-02-12', 0000000027, 9, 'Jumeirah Beach Residence', 10),
('Pick-up-Cash', 1, 10, 'Pick-up-Cash', '2017-02-22', 'Registered', 'fasfs', 'batchin200217', 299, '2017-03-10', 31, 'Success', 'batchOut200217', '2017-02-23', '2017-02-25', 'All Documents Perfect', 'rasheed@gmail.com', 'j6994434', 4554565, 71, '2017-02-23', 'rack200217', '2017-02-26', '2017-02-22', 'Top Urgent', '', '2017-02-12', 15, '2017-02-27', 'sc21022017', 'Pick-up-Cash', 2, 'Al quoz1', 'sjk', 'jk', 'Dubai', 'AF', 25468, 1, 31, 4, 15, '2017-03-03', 0123456786, 'nizar', 99, 10, 'jlk', 'Adff', '2017-03-10', 0000000028, 424, 'Al quoz', 7);

-- --------------------------------------------------------

--
-- Table structure for table `desk`
--

CREATE TABLE `desk` (
  `deskid` int(11) NOT NULL,
  `deskdate` date NOT NULL,
  `rid` int(11) NOT NULL,
  `batchid` int(11) NOT NULL,
  `csid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `passno` int(11) NOT NULL,
  `cdate` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` int(11) NOT NULL,
  `ddate` int(11) NOT NULL,
  `ptype` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `emailid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ddate` date NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flyer`
--

CREATE TABLE `flyer` (
  `fid` int(11) NOT NULL,
  `flydate` date NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `outstatus` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` int(11) NOT NULL,
  `ddate` date NOT NULL,
  `passno` varchar(255) NOT NULL,
  `cc` int(11) UNSIGNED ZEROFILL NOT NULL,
  `rdate` date NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `stype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `batchin` varchar(255) NOT NULL,
  `batchdate` date NOT NULL,
  `batchout` varchar(255) NOT NULL,
  `batchoutdate` date NOT NULL,
  `colid` int(11) NOT NULL,
  `coldate` date NOT NULL,
  `coundate` date NOT NULL,
  `rackin` varchar(255) NOT NULL,
  `paytype` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `rid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `scase` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `instatus` varchar(255) NOT NULL,
  `bid` int(11) NOT NULL,
  `vanno` int(11) NOT NULL,
  `dcode` int(11) UNSIGNED ZEROFILL NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flyer`
--

INSERT INTO `flyer` (`fid`, `flydate`, `ptype`, `outstatus`, `qty`, `amt`, `ddate`, `passno`, `cc`, `rdate`, `dtype`, `stype`, `email`, `batchin`, `batchdate`, `batchout`, `batchoutdate`, `colid`, `coldate`, `coundate`, `rackin`, `paytype`, `reason`, `descr`, `bdate`, `rid`, `cid`, `scase`, `pcity`, `instatus`, `bid`, `vanno`, `dcode`) VALUES
(1, '2017-02-25', 'Pick-up-Cash', 'Success', 1, 250, '2017-02-19', '0', 00004554589, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'ithikar@gmail.com', '3', '2017-02-19', '9', '2017-02-20', 17, '2012-12-21', '2017-02-14', '123', '', 'All Documents Perfect', 'Urgent', '2011-12-12', 0, 0, '', '', '', 0, 0, 00000000000),
(2, '2017-02-25', 'Pick-up-Cash', 'Success', 1, 250, '2017-02-19', '0', 00004554589, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'ithikar@gmail.com', '123', '2017-02-19', '9', '2017-02-20', 17, '2012-12-21', '2017-02-14', '123', '', 'All Documents Perfect', 'Urgent', '2011-12-12', 12, 67, '', '', '', 0, 0, 00000000000),
(3, '2012-12-12', 'Pick-up-Cash', 'Success', 1, 250, '2017-02-19', '0', 00004554589, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'ithikar@gmail.com', '3', '2017-02-19', '9', '2017-02-20', 17, '2012-12-21', '2017-02-14', '123', '', 'All Documents Perfect', 'Urgent', '2011-12-12', 3, 67, '', '', '', 0, 0, 00000000000),
(4, '2012-12-12', 'Pick-up-Cash', 'Success', 1, 250, '2017-02-19', '0', 00004554589, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'ithikar@gmail.com', '3', '2017-02-19', '9', '2017-02-20', 17, '2012-12-21', '2017-02-14', '123', '', 'All Documents Perfect', 'Urgent', '2011-12-12', 3, 67, '', '', '', 0, 0, 00000000000),
(5, '2012-12-12', 'Pick-up-Cash', 'Success', 1, 250, '2017-02-19', '0', 00004554589, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'ithikar@gmail.com', '3', '2017-02-19', '9', '2017-02-20', 17, '2012-12-21', '2017-02-14', '123', '', 'All Documents Perfect', 'Urgent', '2011-12-12', 3, 67, '', '', '', 0, 0, 00000000000),
(6, '2012-12-12', 'Pick-up-Cash', 'Success', 1, 250, '2017-02-19', '0', 00004554589, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'ithikar@gmail.com', '3', '2017-02-19', '9', '2017-02-20', 17, '2012-12-21', '2017-02-14', '123', '', 'All Documents Perfect', 'Urgent', '2011-12-12', 3, 67, '', '', '', 0, 0, 00000000000),
(7, '2012-12-12', 'Pick-up-Cash', 'Success', 1, 250, '2017-02-19', '0', 00004554589, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'ithikar@gmail.com', '3', '2017-02-19', '9', '2017-02-20', 17, '2012-12-21', '2017-02-14', '123', '', 'All Documents Perfect', 'Urgent', '2011-12-12', 3, 67, '', '', '', 0, 0, 00000000000),
(8, '2017-02-20', 'Pick-up-Cash', 'Success', 1, 250, '2017-02-19', '0', 00004554589, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'ithikar@gmail.com', '3', '2017-02-19', '9', '2017-02-20', 17, '2012-12-21', '2017-02-14', '123', '', 'All Documents Perfect', 'Urgent', '2011-12-12', 3, 67, 'sc200217', '', '', 0, 0, 00000000000),
(9, '2012-12-12', 'Pick-up-Cash', 'Success', 1, 250, '2017-02-19', '0', 00004554589, '2012-12-12', 'Pick-up-Cash', 'Pick-up-Cash', 'ithikar@gmail.com', '3', '2017-02-19', '9', '2017-02-20', 17, '2012-12-21', '2017-02-14', '123', '', 'All Documents Perfect', 'Urgent', '2011-12-12', 3, 67, 'sc200217', '', '', 0, 0, 00000000000),
(10, '2012-12-12', 'Pick-up-Cash', 'ggj', 1, 298, '2012-12-12', 'K9898989', 00004554561, '2017-02-17', 'Pick-up-Cash', 'Pick-up-Cash', 'arsalan@leopards.com', 'batchin200217', '0202-12-12', 'batch24022017', '2017-02-19', 30, '2017-12-12', '2017-02-17', 'rack200217', '', 'kooo', '', '2012-12-12', 6, 0, '', 'Pick-up-Cash', 'Registered', 70, 0, 00000000000),
(11, '2012-12-12', 'Pick-up-Cash', 'ggj', 1, 298, '2012-12-12', 'K9898989', 00004554561, '2017-02-17', 'Pick-up-Cash', 'Pick-up-Cash', 'arsalan@leopards.com', 'batchin200217', '0202-12-12', 'batch24022017', '2017-02-19', 30, '2017-12-12', '2017-02-17', 'rack200217', '', 'kooo', '', '2012-12-12', 6, 0, 'sc21022017', 'Pick-up-Cash', 'Registered', 70, 0, 00000000000),
(12, '2012-12-12', 'Pick-up-Cash', 'ggj', 1, 298, '2012-12-12', 'K9898989', 00004554561, '2017-02-17', 'Pick-up-Cash', 'Pick-up-Cash', 'arsalan@leopards.com', 'batchin200217', '0202-12-12', 'batch24022017', '2017-02-19', 30, '2017-12-12', '2017-02-17', 'rack200217', '', 'kooo', '', '2012-12-12', 6, 0, 'sc21022017', 'Pick-up-Cash', 'Registered', 70, 0, 00000000000),
(13, '2012-12-12', 'Pick-up-Cash', 'ggj', 1, 298, '2012-12-12', 'K9898989', 00004554561, '2017-02-17', 'Pick-up-Cash', 'Pick-up-Cash', 'arsalan@leopards.com', 'batchin200217', '0202-12-12', 'batch24022017', '2017-02-19', 30, '2017-12-12', '2017-02-17', 'rack200217', '', 'kooo', '', '2012-12-12', 6, 0, 'sc21022017', 'Pick-up-Cash', 'Registered', 70, 97654, 00000000001),
(14, '2012-12-12', 'Pick-up-Cash', 'ggj', 1, 298, '2012-12-12', 'K9898989', 00004554561, '2017-02-17', 'Pick-up-Cash', 'Pick-up-Cash', 'arsalan@leopards.com', 'batchin200217', '0202-12-12', 'batch24022017', '2017-02-19', 30, '2017-12-12', '2017-02-17', 'rack200217', '', 'kooo', '', '2012-12-12', 6, 0, 'sc21022017', 'Pick-up-Cash', 'Registered', 70, 25649, 00000000001),
(15, '2017-02-27', 'Pick-up-Cash', 'Success', 1, 299, '2017-03-10', 'j6994434', 00004554565, '2017-02-22', 'Top Urgent', 'Pick-up-Cash', 'rasheed@gmail.com', 'batchin200217', '2017-02-23', 'batchOut200217', '2017-02-25', 31, '2017-02-26', '2017-02-22', 'rack200217', '', 'All Documents Perfect', '', '2017-02-23', 10, 31, 'sc21022017', 'Pick-up-Cash', 'Registered', 71, 25468, 00000000001);

-- --------------------------------------------------------

--
-- Table structure for table `lock`
--

CREATE TABLE `lock` (
  `lid` int(11) NOT NULL,
  `ldate` date NOT NULL,
  `fid` int(11) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `ddate` date NOT NULL,
  `stype` varchar(255) NOT NULL,
  `csid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `amt` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `stype` text NOT NULL,
  `qty` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `rdate` date NOT NULL,
  `instatus` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `batchin` varchar(255) NOT NULL,
  `amt` int(11) NOT NULL,
  `ddate` date NOT NULL,
  `colid` int(11) NOT NULL,
  `outstatus` varchar(255) NOT NULL,
  `batchout` varchar(255) NOT NULL,
  `batchdate` date NOT NULL,
  `batchoutdate` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passno` varchar(255) NOT NULL,
  `cc` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `rackin` varchar(255) NOT NULL,
  `coldate` date NOT NULL,
  `coundate` date NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `paytype` varchar(255) NOT NULL,
  `arrdate` date NOT NULL,
  `fid` int(11) NOT NULL,
  `flydate` date NOT NULL,
  `scase` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `vanno` int(11) NOT NULL,
  `dcode` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `arrid` int(11) NOT NULL,
  `odate` date NOT NULL,
  `oid` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operation`
--

INSERT INTO `operation` (`stype`, `qty`, `rid`, `ptype`, `rdate`, `instatus`, `descr`, `batchin`, `amt`, `ddate`, `colid`, `outstatus`, `batchout`, `batchdate`, `batchoutdate`, `reason`, `email`, `passno`, `cc`, `bid`, `bdate`, `rackin`, `coldate`, `coundate`, `dtype`, `paytype`, `arrdate`, `fid`, `flydate`, `scase`, `pcity`, `vanno`, `dcode`, `cid`, `arrid`, `odate`, `oid`) VALUES
('Pick-up-Cash', 1, 6, 'Pick-up-Cash', '2017-02-17', 'Registered', '', 'batchin200217', 298, '2012-12-12', 30, 'ggj', 'batch24022017', '0202-12-12', '2017-02-19', 'kooo', 'arsalan@leopards.com', 'K9898989', 4554561, 70, '2012-12-12', 'rack200217', '2017-12-12', '2017-02-17', 'Pick-up-Cash', '', '2012-12-12', 14, '2012-12-12', 'sc21022017', 'Pick-up-Cash', 25649, 1, 0, 5, '2012-12-12', 0000000001),
('Pick-up-Cash', 1, 10, 'Pick-up-Cash', '2017-02-22', 'Registered', '', 'batchin200217', 299, '2017-03-10', 31, 'Success', 'batchOut200217', '2017-02-23', '2017-02-25', 'All Documents Perfect', 'rasheed@gmail.com', 'j6994434', 4554565, 71, '2017-02-23', 'rack200217', '2017-02-26', '2017-02-22', 'Top Urgent', '', '2017-02-12', 15, '2017-02-27', 'sc21022017', 'Pick-up-Cash', 25468, 1, 31, 15, '2017-03-01', 0000000002),
('Pick-up-Cash', 1, 10, 'Pick-up-Cash', '2017-02-22', 'Registered', '', 'batchin200217', 299, '2017-03-10', 31, 'Success', 'batchOut200217', '2017-02-23', '2017-02-25', 'All Documents Perfect', 'rasheed@gmail.com', 'j6994434', 4554565, 71, '2017-02-23', 'rack200217', '2017-02-26', '2017-02-22', 'Top Urgent', '', '2017-02-12', 15, '2017-02-27', 'sc21022017', 'Pick-up-Cash', 25468, 1, 31, 15, '2017-03-01', 0000000003),
('Pick-up-Cash', 1, 10, 'Pick-up-Cash', '2017-02-22', 'Registered', 'fasfs', 'batchin200217', 299, '2017-03-10', 31, 'Success', 'batchOut200217', '2017-02-23', '2017-02-25', 'All Documents Perfect', 'rasheed@gmail.com', 'j6994434', 4554565, 71, '2017-02-23', 'rack200217', '2017-02-26', '2017-02-22', 'Top Urgent', '', '2017-02-12', 15, '2017-02-27', 'sc21022017', 'Pick-up-Cash', 25468, 1, 31, 15, '2017-03-03', 0000000004);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `rid` int(11) NOT NULL,
  `rdate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `dtype` varchar(255) NOT NULL,
  `stype` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `ddate` date NOT NULL,
  `amt` int(11) NOT NULL,
  `instatus` varchar(255) NOT NULL,
  `cc` int(11) NOT NULL,
  `coundate` date NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `idate` date NOT NULL,
  `edate` date NOT NULL,
  `pissue` varchar(255) NOT NULL,
  `flat` int(11) NOT NULL,
  `build` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `passno` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `pcity` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`rid`, `rdate`, `email`, `phone`, `ptype`, `dtype`, `stype`, `qty`, `ddate`, `amt`, `instatus`, `cc`, `coundate`, `fname`, `lname`, `sname`, `dob`, `idate`, `edate`, `pissue`, `flat`, `build`, `street`, `city`, `country`, `passno`, `area`, `pcity`, `descr`, `cid`) VALUES
(1, '2012-12-12', 'hussain@gmail.com', 559105560, 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 1, '2012-12-12', 250, '', 4554557, '2017-02-14', 'Ibrahim', 'Hussain', 'Lebbai', '1985-09-18', '2012-12-12', '2012-12-12', 'Trichy', 2, 'Al Dhagaya ', 'Ayal Nasser', '', '', 'J6994425', 'Deira', 'Pick-up-Cash', 'before', 0),
(2, '2012-12-12', 'hussain@gmail.com', 559105560, 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 1, '2012-12-12', 250, '', 4554559, '2017-02-14', 'Ibrahim', 'Hussain', 'Lebbai', '1985-09-18', '2012-12-12', '2012-12-12', 'Trichy', 2, 'Al Dhagaya ', 'Ayal Nasser', '', '', 'j8797979', 'Deira', 'Pick-up-Cash', 'before', 0),
(3, '2012-12-12', 'hussain@gmail.com', 559105560, 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 1, '2012-12-12', 250, '', 4554589, '2017-02-14', 'Ibrahim', 'Hussain', 'Lebbai', '1985-09-18', '2012-12-12', '2012-12-12', 'Trichy', 2, 'Al Dhagaya ', 'Ayal Nasser', '', '', 'J6994478', 'Deira', 'Pick-up-Cash', 'before', 0),
(4, '2012-12-12', 'waris1@gmail.com', 5589889, 'Pick-up-Cash', 'Pick-up-Cash', 'Pick-up-Cash', 1, '2012-12-12', 99, '', 4554558, '2012-12-12', 'Waris', 'Rawoof', 'rawoof', '1985-09-12', '2012-12-12', '2012-12-12', 'karachi', 2, 'Al Dhagaya ', 'Ayal Nasser', '', '', 'j787878', 'Deira', 'Pick-up-Cash', 'passport', 0),
(5, '2012-12-12', 'yunus@gmail.com', 5591898, 'Pick-up-Cash', 'Pick-up-Cash', 'Customer', 2, '2012-12-12', 299, 'pending', 4554560, '2012-12-12', 'Yusuf', 'Mohd', 'Yunus', '1985-12-12', '2012-12-12', '2012-12-12', 'Trichy', 2, 'Al Dhagaya', 'Ayal Nasser', '', '', 'k8989898', 'Deira', 'Pick-up-Cash', 'Passport', 0),
(6, '2017-02-17', 'arsalan@leopards.com', 559108989, 'COD', 'Pick-up-Cash', 'Pick-up-Cash', 1, '2017-03-01', 298, 'Registered', 4554561, '2017-02-17', 'Mohamed', 'Arsalan', 'Rawoof', '1991-12-12', '2015-12-12', '2021-12-12', 'Karachi', 2, 'Al Dhagaya', 'Ayal Nasser', '', '', 'K9898989', 'Deira', 'Pick-up-Cash', 'before march', 0),
(7, '2017-02-17', 'jawad@leopards.com', 908999, 'Customer', 'Pick-up-Cash', 'Customer', 1, '2017-03-01', 299, 'Submiited', 4554562, '2017-02-17', 'ahmed', 'jawad', 'Rawoof', '1991-12-12', '2015-12-12', '2021-12-12', 'Karachi', 2, 'Cluster E', 'Sheik javed Road', '', '', 'j8976878', 'Jumerira Lake towers', 'Pick-up-Cash', 'before mach i need', 27),
(8, '2017-02-19', 'urva@gmail.com', 55919998, 'Customer', 'COD', 'Customer', 1, '2017-03-02', 299, 'Received', 4554563, '2017-02-19', 'Urva', 'Sharma', 'Sharma', '1991-12-12', '2015-12-12', '2021-12-12', 'India', 2, 'Al Dhagaya', 'Ayal Nasser', '', '', 'K8989999', 'Deira', 'Pick-up-Cash', 'Urgent', 28),
(9, '2017-02-19', 'ifthikar@gmail.com', 55989898, 'Customer', 'Pick-up-Cash', 'Customer', 1, '2017-03-10', 2, 'Received', 4554564, '2017-02-19', 'Ifthikar', 'Ahamad', 'Ifti', '1975-12-12', '2015-12-12', '2021-12-12', 'India', 2, 'Al Dhagaya', 'Ayal Nasser', '', '', 'J897867667', 'Deira', 'Pick-up-Cash', 'urgent', 30),
(10, '2017-02-22', 'rasheed@gmail.com', 559104343, 'New Passport', 'Top Urgent', '', 1, '2017-03-10', 299, 'Registered', 4554565, '2017-02-22', 'Haroon', 'Rasheed', 'Maricar', '1985-02-12', '2015-02-02', '2021-03-02', 'Singapore', 2, 'Al Dhagaya Building', 'Ayal Nasser', '', '', 'j6994434', 'Deira', 'Pick-up-Cash', 'Need Urgent', 31);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `runid` int(11) NOT NULL,
  `rundate` date NOT NULL,
  `tshipments` int(11) NOT NULL,
  `shipno` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `nextrou` varchar(255) NOT NULL,
  `dtime` int(11) NOT NULL,
  `curroute` varchar(255) NOT NULL,
  `flat` int(11) NOT NULL,
  `build` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `ncnd` int(11) NOT NULL,
  `routename` varchar(255) NOT NULL,
  `routeno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `routelog`
--

CREATE TABLE `routelog` (
  `routeid` int(11) NOT NULL,
  `rountename` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routelog`
--

INSERT INTO `routelog` (`routeid`, `rountename`) VALUES
(1, 'Burdubai'),
(2, 'karama'),
(3, 'satwa'),
(4, 'satwa');

-- --------------------------------------------------------

--
-- Table structure for table `runsheet`
--

CREATE TABLE `runsheet` (
  `runid` int(11) NOT NULL,
  `rundate` date NOT NULL,
  `cid` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `amt` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `courierid` int(11) NOT NULL,
  `couriername` varchar(255) NOT NULL,
  `recname` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `dtime` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scanning`
--

CREATE TABLE `scanning` (
  `scid` int(11) NOT NULL,
  `scdate` date NOT NULL,
  `batchdate` date NOT NULL,
  `csid` int(11) NOT NULL,
  `csdate` date NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `stype` varchar(255) NOT NULL,
  `rid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `amt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `cid` int(8) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `password`, `cpassword`, `cid`, `email`) VALUES
('jg', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000005, 'jkj@gmail.com'),
('hj', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000006, 'kkk@gmail.com'),
('Mohamed Haneef Irfan', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000007, 'rasheedharoon@gmail.com'),
('Mohamed Arsalan', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000008, 'rawoof@gmail.com'),
('Mohammed Waris', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000009, 'wariss@gmail.com'),
('hk', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000010, 'test@gmail.com'),
('hj', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000011, 'tee@gmail.com'),
('hj', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000012, 'tee@gmail.com'),
('ghj', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000013, 'tess@gmail.com'),
('ali', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000014, 'tu@gmail.com'),
('ali', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000015, 'tu@gmail.com'),
('hjhj', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000016, 'le@gmail.com'),
('Suaibu Nagutha', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000017, 'har@gmail.com'),
('test', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000018, 'test1@gmail.com'),
('hj', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000019, 'tes@gmail.com'),
('US', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 00000020, 'urva@leopardscourier.com'),
('hj', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000021, 'tested@gmail.com'),
('ehya', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000022, 'ehya@gmail.com'),
('Hussain', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000023, 'hussain@gmail.com'),
('waris', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000024, 'waris1@gmail.com'),
('Mohamed Yunus', 'a9151e5be71d28b2568467b91f240c15', 'a9151e5be71d28b2568467b91f240c15', 00000025, 'yunus@gmail.com'),
('Mohamed Arsalan Rawoof', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000026, 'arsalan@leopards.com'),
('Ahmad Jawad', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000027, 'jawad@leopards.com'),
('urva', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000028, 'urva@gmail.com'),
('waqas rafique', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000029, 'waqas@leopards.com'),
('IFTHIKAR', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000030, 'ifthikar@gmail.com'),
('Haroon Rasheed', '3b253047e57c5d72452d7844d612a64c', '3b253047e57c5d72452d7844d612a64c', 00000031, 'rasheed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `smsid` int(11) NOT NULL,
  `emailid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `passno` int(11) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` int(11) NOT NULL,
  `ddate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `stid` int(11) NOT NULL,
  `penidng` int(11) NOT NULL,
  `success` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `rid` varchar(7) NOT NULL DEFAULT '0',
  `name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taxi_services`
--

CREATE TABLE `taxi_services` (
  `SID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `van`
--

CREATE TABLE `van` (
  `vanid` int(11) NOT NULL,
  `vanno` int(11) NOT NULL,
  `filldate` date NOT NULL,
  `lockid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `bbooking`
--
DROP TABLE IF EXISTS `bbooking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bbooking`  AS  select concat('B',`booking`.`bid`) AS `bid`,`booking`.`bdate` AS `bdate`,`booking`.`status` AS `status`,`booking`.`ptype` AS `ptype`,`booking`.`stype` AS `stype`,`booking`.`amt` AS `amt`,`booking`.`qty` AS `qty`,`booking`.`dtype` AS `dtype`,`booking`.`pcity` AS `pcity`,`booking`.`coundate` AS `coundate`,`booking`.`pieces` AS `pieces`,`booking`.`descr` AS `descr`,`booking`.`cc` AS `cc`,`booking`.`rdate` AS `rdate`,`booking`.`batchid` AS `batchid`,`booking`.`batchdate` AS `batchdate`,`booking`.`paytype` AS `paytype`,`booking`.`sortype` AS `sortype`,`booking`.`rid` AS `rid`,`booking`.`cid` AS `cid` from `booking` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `arrival`
--
ALTER TABLE `arrival`
  ADD PRIMARY KEY (`arrid`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batchid`);

--
-- Indexes for table `batchout`
--
ALTER TABLE `batchout`
  ADD PRIMARY KEY (`batchoutid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `colletion`
--
ALTER TABLE `colletion`
  ADD PRIMARY KEY (`colid`);

--
-- Indexes for table `conseq`
--
ALTER TABLE `conseq`
  ADD PRIMARY KEY (`csid`),
  ADD UNIQUE KEY `bid` (`bid`),
  ADD UNIQUE KEY `cid` (`cid`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`cc`),
  ADD UNIQUE KEY `cc` (`cc`),
  ADD UNIQUE KEY `cid` (`cid`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerNumber`),
  ADD KEY `salesRepEmployeeNumber` (`salesRepEmployeeNumber`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delid`),
  ADD UNIQUE KEY `awbno` (`awbno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `desk`
--
ALTER TABLE `desk`
  ADD PRIMARY KEY (`deskid`),
  ADD UNIQUE KEY `rid` (`rid`),
  ADD UNIQUE KEY `batchid` (`batchid`),
  ADD UNIQUE KEY `csid` (`csid`),
  ADD UNIQUE KEY `bid` (`bid`),
  ADD UNIQUE KEY `cid` (`cid`),
  ADD UNIQUE KEY `passno` (`passno`),
  ADD UNIQUE KEY `cdate` (`cdate`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`emailid`),
  ADD UNIQUE KEY `rid` (`rid`);

--
-- Indexes for table `flyer`
--
ALTER TABLE `flyer`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `lock`
--
ALTER TABLE `lock`
  ADD PRIMARY KEY (`lid`),
  ADD UNIQUE KEY `fid` (`fid`),
  ADD UNIQUE KEY `csid` (`csid`),
  ADD UNIQUE KEY `cid` (`cid`);

--
-- Indexes for table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `cc` (`cc`),
  ADD UNIQUE KEY `passno` (`passno`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`runid`),
  ADD UNIQUE KEY `cid` (`cid`);

--
-- Indexes for table `routelog`
--
ALTER TABLE `routelog`
  ADD PRIMARY KEY (`routeid`);

--
-- Indexes for table `runsheet`
--
ALTER TABLE `runsheet`
  ADD PRIMARY KEY (`runid`),
  ADD UNIQUE KEY `cid` (`cid`),
  ADD UNIQUE KEY `courierid` (`courierid`);

--
-- Indexes for table `scanning`
--
ALTER TABLE `scanning`
  ADD PRIMARY KEY (`scid`),
  ADD UNIQUE KEY `csid` (`csid`),
  ADD UNIQUE KEY `rid` (`rid`),
  ADD UNIQUE KEY `bid` (`bid`),
  ADD UNIQUE KEY `cid` (`cid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`smsid`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD UNIQUE KEY `rid` (`rid`),
  ADD UNIQUE KEY `passno` (`passno`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`stid`),
  ADD KEY `1` (`penidng`),
  ADD KEY `2` (`success`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `van`
--
ALTER TABLE `van`
  ADD PRIMARY KEY (`vanid`),
  ADD UNIQUE KEY `lockid` (`lockid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `arrival`
--
ALTER TABLE `arrival`
  MODIFY `arrid` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batchid` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `batchout`
--
ALTER TABLE `batchout`
  MODIFY `batchoutid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `colletion`
--
ALTER TABLE `colletion`
  MODIFY `colid` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `conseq`
--
ALTER TABLE `conseq`
  MODIFY `csid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `count`
--
ALTER TABLE `count`
  MODIFY `cc` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4554566;
--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delid` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `desk`
--
ALTER TABLE `desk`
  MODIFY `deskid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `emailid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `flyer`
--
ALTER TABLE `flyer`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `lock`
--
ALTER TABLE `lock`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operation`
--
ALTER TABLE `operation`
  MODIFY `oid` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `runid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `routelog`
--
ALTER TABLE `routelog`
  MODIFY `routeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `runsheet`
--
ALTER TABLE `runsheet`
  MODIFY `runid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scanning`
--
ALTER TABLE `scanning`
  MODIFY `scid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `cid` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `smsid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `van`
--
ALTER TABLE `van`
  MODIFY `vanid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
