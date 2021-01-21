-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 07:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_411`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `phoneNo` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phoneNo`, `age`, `gender`) VALUES
(1, 'niloyroy', 'niloy@gmail.com', '12345', '4566', 24, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `form` varchar(45) NOT NULL,
  `destination` varchar(45) NOT NULL,
  `touristNumber` int(11) NOT NULL,
  `numberOfDay` int(11) NOT NULL,
  `numberOfNight` int(11) NOT NULL,
  `travelMedium` varchar(45) NOT NULL,
  `totalAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `form`, `destination`, `touristNumber`, `numberOfDay`, `numberOfNight`, `travelMedium`, `totalAmount`) VALUES
(1, 'dhaka', 'bandarban', 1, 1, 2, 'bus', 4000),
(2, 'dhaka', 'bandarban', 1, 1, 1, 'bus', 3000),
(3, 'dhaka', 'bandarban', 1, 2, 1, 'bus', 4200),
(4, 'dhaka', 'bandarban', 1, 2, 2, 'bus', 5000),
(5, 'dhaka', 'bandarban', 2, 1, 1, 'bus', 6000),
(6, 'dhaka', 'bandarban', 2, 1, 2, 'bus', 7500),
(7, 'dhaka', 'bandarban', 2, 2, 1, 'bus', 9000),
(8, 'dhaka', 'bandarban', 2, 2, 2, 'bus', 11000),
(9, 'dhaka', 'rangamati', 1, 1, 1, 'bus', 3500),
(10, 'dhaka', 'rangamati', 1, 1, 2, 'bus', 4500),
(11, 'dhaka', 'rangamati', 1, 2, 1, 'bus', 6000),
(12, 'dhaka', 'rangamati', 1, 2, 2, 'bus', 7000),
(13, 'dhaka', 'rangamati', 2, 1, 1, 'bus', 11000),
(14, 'dhaka', 'rangamati', 2, 1, 2, 'bus', 13000),
(15, 'dhaka', 'rangamati', 2, 2, 1, 'bus', 12000),
(16, 'dhaka', 'rangamati', 2, 2, 2, 'bus', 14000);

-- --------------------------------------------------------

--
-- Table structure for table `confirmticket`
--

CREATE TABLE `confirmticket` (
  `id` int(11) NOT NULL,
  `place` varchar(45) NOT NULL,
  `touristNumber` int(11) NOT NULL,
  `numberOfDay` int(11) NOT NULL,
  `numberOfNight` int(11) NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `travelMedium` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmticket`
--

INSERT INTO `confirmticket` (`id`, `place`, `touristNumber`, `numberOfDay`, `numberOfNight`, `totalAmount`, `travelMedium`, `name`) VALUES
(12, 'bandarban', 1, 1, 2, 4000, 'bus', 'niloy');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `name` varchar(100) NOT NULL,
  `images1` varchar(500) NOT NULL,
  `images2` varchar(500) NOT NULL,
  `images3` varchar(500) NOT NULL,
  `images4` varchar(500) NOT NULL,
  `images5` varchar(500) NOT NULL,
  `images6` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`name`, `images1`, `images2`, `images3`, `images4`, `images5`, `images6`) VALUES
('home', 'img/gallery1.jpg', 'img/gallery2.jpg', 'img/gallery3.jpg', 'img/gallery4.jpg', 'img/gallery5.jpg', 'img/gallery6.jpg'),
('bandarban', 'img/bandarban1.jpg', 'img/bandarban2.jpg', 'img/bandarban3.jpg', 'img/bandarban4.jpg', 'img/bandarban5.jpg', 'img/bandarban6.jpg'),
('barisal', 'img/barisal1.jpg', 'img/barisal2.jpg', 'img/barisal3.jpg', 'img/barisal4.jpg', 'img/barisal5.jpg', 'img/barisal6.jpg'),
('chittagang', 'img/chittagang1.jpg', 'img/chittagang2.jpg', 'img/chittagang3.jpg', 'img/chittagang4.jpg', 'img/chittagang5.jpg', 'img/chittagang6.jpg'),
('comilla', 'img/comilla1.jpg', 'img/comilla2.jpg', 'img/comilla3.jpg', 'img/comilla4.jpg', 'img/comilla5.jpg', 'img/comilla6.jpg'),
('rajsahi', 'img/rajsahi1.jpg', 'img/rajsahi2.jpg', 'img/rajsahi3.jpg', 'img/rajsahi4.jpg', 'img/rajsahi5.jpg', 'img/rajsahi6.jpg'),
('sundarban', 'img/sundarban1.jpg', 'img/sundarban2.jpg', 'img/sundarban3.jpg', 'img/sundarban4.jpg', 'img/sundarban5.jpg', 'img/sundarban6.jpg'),
('sylhet', 'img/sylhet1.jpg', 'img/sylhet2.jpg', 'img/sylhet3.jpg', 'img/sylhet4.jpg', 'img/sylhet5.jpg', 'img/sylhet6.jpg'),
('rangamati', 'img/rangamati1.jpg', 'img/rangamati2.jpg', 'img/rangamati3.jpg', 'img/rangamati4.jpg', 'img/rangamati5.jpg', 'img/rangamati6.jpg'),
('', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `place` varchar(45) NOT NULL,
  `touristNumber` int(11) NOT NULL,
  `stayAmount` int(11) NOT NULL,
  `foodAmount` int(11) NOT NULL,
  `busAmount` int(11) NOT NULL,
  `trainAmount` int(11) NOT NULL,
  `planeAmount` int(11) NOT NULL,
  `numberOfDay` int(11) NOT NULL,
  `numberOfNight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `place`, `touristNumber`, `stayAmount`, `foodAmount`, `busAmount`, `trainAmount`, `planeAmount`, `numberOfDay`, `numberOfNight`) VALUES
(1, 'comilla', 2, 1500, 600, 700, 900, 2000, 1, 2),
(2, 'bandorbon', 3, 2000, 1500, 1800, 1500, 6000, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `phoneNo` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `password`, `phoneNo`, `gender`, `age`) VALUES
(3, 'niloy', 'niloy@gmail.com', '12345', '23456', 'male', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmticket`
--
ALTER TABLE `confirmticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `confirmticket`
--
ALTER TABLE `confirmticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
