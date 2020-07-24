-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 02:20 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_tutor`
--

CREATE TABLE `add_tutor` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `number` varchar(40) NOT NULL,
  `teaching` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_tutor`
--

INSERT INTO `add_tutor` (`id`, `name`, `email`, `number`, `teaching`, `address`, `subject`) VALUES
(10, 'Tejas', 'tejasnitk@gmail.com', '9886750312', '14', 'Bangalore', 'Mathematics'),
(11, 'Gopalapillai', 'Teacher@gmail.com', '9496060551', '12', '11 E Aster, Skyline Riverdale, Petta, Tr', 'Mathematics'),
(12, 'Anantha Krishnan S', 'Teacher2@gmail.com', '7897987982', '23', 'Pune', 'Mathematics'),
(13, 'Salin Suresh', 'Teacher3@gmail.com', '7897987982', '23', 'Pune', 'Mathematics'),
(14, 'Jacob Sebastian', 'teachern@gmail.com', '2974311333', '45', 'mumbai', 'Mathematics'),
(15, 'Aswin E Johny', 'akx994@gmail.com', '2974311333', '45', 'Chennai', 'Mathematics'),
(16, 'Dinesh MB', 'DMB@gmail.com', '9496060551', '23', 'kochi', 'Mathematics'),
(17, 'Jacob Sebastian', 'js@gmail.com', '8454999025', '12', 'Row House No. C-101, SwapnaShilp, Five G', 'English'),
(18, 'Jacob Sebastian', 'js@gmail.com', '8454999025', '12', 'Row House No. C-101, SwapnaShilp, Five G', 'English'),
(19, 'Gopalapillai', 'mentor@gmail.com', '8454999025', '12', 'Row House No. C-101, SwapnaShilp, Five G', 'English'),
(20, 'Satheesh Kumar', 'superadmin@gmail.com', '4545454454', '45', 'Pune', 'English'),
(21, 'Nithin.S', 'nithins@gmail.com', '9496060551', '12', 'Pune', 'Mathematics'),
(22, 'John Doe', 'jd@gmail.com', '9496060551', '12', 'kochi', 'English'),
(23, 'Akhil', 'akhil@gmail.com', '9876541231', '12', '11 E Aster, Skyline Riverdale, Petta, Tr', 'kannada');

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE `ajax` (
  `id` int(11) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `address`) VALUES
(14, 'Bangalore'),
(15, '11 E Aster, Skyline Riverdale, Petta, Tr'),
(16, 'Pune'),
(17, 'mumbai'),
(18, 'Chennai'),
(19, 'kochi'),
(20, 'Row House No. C-101, SwapnaShilp, Five G'),
(21, 'Row House No. C-101, SwapnaShilp, Five G'),
(22, 'Row House No. C-101, SwapnaShilp, Five G'),
(23, '11 E Aster, Skyline Riverdale, Petta, Tr');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id` int(3) NOT NULL,
  `times` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `times`) VALUES
(4, 'Australia'),
(5, 'USA'),
(6, 'Australia,Europe'),
(7, ''),
(8, ''),
(9, 'Australia,Europe,Italy'),
(10, ''),
(11, ''),
(12, 'Australia'),
(13, 'Australia,Europe'),
(14, 'Australia,Europe'),
(15, 'India,Australia'),
(16, 'Australia,Europe'),
(17, 'India,Australia,Europe'),
(18, 'Australia,Europe'),
(19, 'USA'),
(20, 'India,USA'),
(21, 'USA'),
(22, 'USA,Australia'),
(23, 'USA,Australia'),
(24, 'USA,Australia'),
(25, 'India,USA,Australia,Europe,Italy'),
(26, 'India,USA,Australia,Europe,Italy'),
(27, 'India,USA,Australia,Europe,Italy'),
(29, ''),
(30, ''),
(31, '02:00-03:00,03:00-04:00'),
(32, '02:00-03:00,03:00-04:00'),
(33, '02:00-03:00,03:00-04:00'),
(34, '02:00-03:00,03:00-04:00'),
(35, '02:00-03:00,03:00-04:00'),
(36, '02:00-03:00,03:00-04:00'),
(37, '02:00-03:00,03:00-04:00'),
(38, '02:00-03:00,03:00-04:00'),
(39, '02:00-03:00,03:00-04:00'),
(40, '02:00-03:00,03:00-04:00'),
(41, '02:00-03:00,03:00-04:00'),
(42, '02:00-03:00,03:00-04:00'),
(43, ''),
(44, '2020-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `times` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finalappointment`
--

CREATE TABLE `finalappointment` (
  `Id` int(3) NOT NULL,
  `date` date NOT NULL,
  `times` varchar(100) NOT NULL,
  `users` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalappointment`
--

INSERT INTO `finalappointment` (`Id`, `date`, `times`, `users`) VALUES
(4, '2020-08-02', '05:00-06:00', ''),
(5, '2020-07-25', '05:00-06:00', ''),
(6, '2020-07-24', '08:00-09:00,09:00-10:00', ''),
(7, '2020-07-24', '08:00-09:00,09:00-10:00', ''),
(8, '2020-07-25', '02:00-03:00,09:00-10:00', ''),
(9, '2020-07-25', '02:00-03:00,09:00-10:00', ''),
(10, '2020-07-18', '07:00-08:00,08:00-09:00', ''),
(11, '2020-07-26', '05:00-06:00,06:00-07:00,07:00-08:00', 'akhil@gmail.com'),
(12, '2020-07-29', '', 'akhil@gmail.com'),
(13, '2020-07-31', '12:00-13:00,13:00-14:00', 'akhil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `ID` int(11) NOT NULL,
  `menteemail` varchar(100) NOT NULL,
  `mentormail` varchar(100) NOT NULL,
  `Meeting_date` date NOT NULL,
  `Meeting_slot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mentor_request`
--

CREATE TABLE `mentor_request` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Experience` int(11) NOT NULL,
  `SearchTag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor_request`
--

INSERT INTO `mentor_request` (`id`, `user`, `Subject`, `Experience`, `SearchTag`) VALUES
(1, 'John Doe', 'Entrepreneurship', 45, 'IT'),
(2, 'John Doe', 'Education', 10, 'marvel app'),
(3, 'John Doe', 'Education', 10, 'IT'),
(4, 'John Doe', 'Education', 10, 'IT'),
(5, 'John Doe', 'Education', 10, 'IT'),
(6, 'John Doe', 'Education', 10, 'IT'),
(7, 'John Doe', 'Education', 10, 'IT'),
(8, 'John Doe', 'Education', 10, 'IT'),
(9, 'John Doe', 'Education', 10, 'IT'),
(10, 'John Doe', 'Education', 10, 'IT'),
(11, 'John Doe', 'Education', 10, 'IT'),
(12, 'John Doe', 'Education', 10, 'IT'),
(13, 'John Doe', 'Education', 10, 'IT'),
(14, 'John Doe', 'Education', 10, 'IT'),
(15, 'John Doe', 'Education', 10, 'IT'),
(16, 'John Doe', 'Education', 10, 'IT'),
(17, 'John Doe', 'Education', 10, 'IT'),
(18, 'John Doe', 'Education', 10, 'IT'),
(19, 'John Doe', 'Education', 10, 'IT'),
(20, 'John Doe', 'Education', 10, 'IT'),
(21, 'John Doe', 'Education', 10, 'IT'),
(22, 'John Doe', 'Education', 10, 'IT'),
(23, 'John Doe', 'Education', 10, 'IT'),
(24, 'John Doe', 'Education', 10, 'IT'),
(25, 'John Doe', 'Education', 10, 'IT'),
(26, 'John Doe', 'Education', 10, 'IT'),
(27, 'John Doe', 'Education', 10, 'IT'),
(28, 'John Doe', 'Education', 10, 'IT'),
(29, 'John Doe', 'Education', 10, 'IT'),
(30, 'John Doe', 'Education', 10, 'IT'),
(31, 'John Doe', 'Education', 10, 'IT'),
(32, 'John Doe', 'Education', 10, 'IT'),
(33, 'John Doe', 'Education', 10, 'IT'),
(34, 'John Doe', 'Education', 98, 'As'),
(35, 'John Doe', 'Career', 98, 'As'),
(36, 'John Doe', 'Career', 45, 'marvel app'),
(37, 'John Doe', 'Education', 15, 'IT'),
(38, 'John Doe', 'Education', 10, 'IT'),
(39, 'John Doe', 'Education', 10, 'IT'),
(40, 'John Doe', 'Education', 14, 'IT'),
(41, 'John Doe', 'Education', 14, 'IT'),
(42, 'John Doe', 'Career', 14, 'IT'),
(43, 'John Doe', 'Education', 10, 'IT'),
(44, 'John Doe', 'Education', 10, 'IT'),
(45, 'John Doe', 'Career', 10, 'IT'),
(46, 'John Doe', 'Education', 10, 'IT'),
(47, 'John Doe', 'Education', 15, 'IT'),
(48, 'John Doe', 'Education', 10, 'IT'),
(49, 'John Doe', 'Education', 10, 'ITes'),
(50, 'John Doe', 'Education', 10, 'IT'),
(51, 'John Doe', 'Education', 10, 'IT'),
(52, 'John Doe', 'Education', 10, 'IT'),
(53, 'John Doe', 'Education', 10, 'IT'),
(54, 'John Doe', 'Education', 10, 'IT'),
(55, 'John Doe', 'Education', 10, 'IT'),
(56, 'John Doe', 'Education', 10, 'IT'),
(57, 'John Doe', 'Education', 10, 'IT'),
(58, 'John Doe', 'Education', 10, 'IT'),
(59, 'John Doe', 'Education', 10, 'IT'),
(60, 'John Doe', 'Education', 10, 'IT'),
(61, 'John Doe', 'Education', 10, 'IT'),
(62, 'John Doe', 'Education', 10, 'IT'),
(63, 'John Doe', 'Education', 10, 'IT'),
(64, 'John Doe', 'Education', 10, 'IT'),
(65, 'John Doe', 'Education', 10, 'IT'),
(66, 'John Doe', 'Education', 10, 'IT'),
(67, 'John Doe', 'Education', 10, 'IT'),
(68, 'John Doe', 'Education', 10, 'IT'),
(69, 'John Doe', 'Education', 10, 'IT'),
(70, 'John Doe', 'Education', 10, 'IT'),
(71, 'John Doe', 'Education', 10, 'IT'),
(72, 'John Doe', 'Education', 10, 'IT'),
(73, 'John Doe', 'Education', 10, 'IT'),
(74, 'John Doe', 'Education', 10, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `password` varchar(500) NOT NULL,
  `institute_name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `username`, `mobile`, `password`, `institute_name`) VALUES
(11, 'tejas kumar', 'Tejas11', '9739368139', '$2y$10$fuyaNiOBT8jgD5rpykiTX.zXTEmsn0nyMY7qxXMN1nyYEL/V7J9rO', '14'),
(12, 'wefjcknm ,', 'wjbhcnm ', '9884556666', '$2y$10$vVUcgyezQK5wM76QO6mRweLLLtqhr0sSYofm0lRttj32N1GrxzSPS', '47'),
(13, 'test test', 'superadmin@gmail.com', '6516516565', '$2y$10$IV32fjDO1DZmwg6I/APebuqKE9VxS.meirrm7OrvRGxKD5DJQ14fa', '24'),
(14, 'Nithin.S', 'student@gmail.com', '9496060551', '$2y$10$JcNnqL/rQOsA8OMyesPFxuXlTXR0udywEOhW0LTAgbchbWpTN66i.', '23'),
(15, 'John Doe', 'jd@gmail.com', '9874532618', '$2y$10$LCVbDybRfmEQ47J0/v5j/OiT1RjfVNwk1THb/01T13Ei7gmtK5L7C', '34');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` varchar(40) NOT NULL,
  `password` varchar(90) NOT NULL,
  `email` varchar(30) NOT NULL,
  `teaching` int(100) NOT NULL,
  `address` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `Bio` varchar(100) NOT NULL,
  `position` varchar(30) NOT NULL,
  `LinkedinProfile` varchar(30) NOT NULL,
  `AlmaMater1` varchar(30) NOT NULL,
  `Rating` float NOT NULL,
  `AlmaMater2` varchar(30) NOT NULL,
  `SearchTags` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `name`, `number`, `password`, `email`, `teaching`, `address`, `subject`, `Bio`, `position`, `LinkedinProfile`, `AlmaMater1`, `Rating`, `AlmaMater2`, `SearchTags`) VALUES
(46, 'Akhil Ashok', '9876541231', '$2y$10$4Sds8Q2tHu8v4trJMGipm.01vDrq3k4cFf8YO8.Ip96jjmnN5Vg5e', 'akhil@gmail.com', 12, '11 E Aster, Skyline Riverdale, Petta, Tr', 'Education', '', '', '', '', 0, '', 'IT'),
(77, 'Jacob George', '9876543210', 'asdfghjkl', 'jg@gmail.com', 77, 'Pune', 'Education', '', '', '', '', 0, '', 'IT'),
(78, 'Thomas Mathew', '1322467890', 'qwe123', 'tm@gmail.com', 2, 'Kochi', 'Career', '', '', '', '', 4, '', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_request`
--

CREATE TABLE `tutor_request` (
  `id` int(11) NOT NULL,
  `gurdian_name` varchar(40) NOT NULL,
  `gurdian_mobile` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `teaching` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(90) NOT NULL,
  `usertype` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `usertype`) VALUES
(25, 'wjbhcnm ', '$2y$10$vVUcgyezQK5wM76QO6mRweLLLtqhr0sSYofm0lRttj32N1GrxzSPS', 'student'),
(24, 'Tejas11', '$2y$10$fuyaNiOBT8jgD5rpykiTX.zXTEmsn0nyMY7qxXMN1nyYEL/V7J9rO', 'student'),
(23, 'tejasnitk@gmail.com', '$2y$10$ZD7skOQXWxR0g25GK91zfumWH.tVS4JLDE5oNR2/qKAMg7rMNoLOi', 'teacher'),
(26, 'superadmin@gmail.com', '$2y$10$IV32fjDO1DZmwg6I/APebuqKE9VxS.meirrm7OrvRGxKD5DJQ14fa', 'student'),
(27, 'Teacher@gmail.com', '$2y$10$CzY99qSHcgDWd5p/UcKAfuklouj4EdZB/5RmP8s26EzcE0hMp9rCi', 'teacher'),
(28, 'Teacher2@gmail.com', '$2y$10$Od/2Erlo8y0dsYm5mDmAZe4zcvlQLHLfqDIYrJItLlLA70N8gWMxa', 'teacher'),
(29, 'Teacher3@gmail.com', '$2y$10$ck2Mf.eG7.udVQ/GEewf4ufezbwoMFHQQILGJ2jDUy/TkCq8CwGfu', 'teacher'),
(30, 'teachern@gmail.com', '$2y$10$Cb4tr.P8/Qn4oCpB2XOB4e6FbtJ/2e6f6uBmfpdCevVjVPFIwwRO6', 'teacher'),
(31, 'akx994@gmail.com', '$2y$10$Yp3cKI9ndsSc4LiTmwkhf.UmtCeA9SYXwDaLixrZhG.cjy8qjlWCW', 'teacher'),
(32, 'DMB@gmail.com', '$2y$10$tfrT9HaRFdU3KqZp4ErV/OqLg09SDnOyN1HGemQgS8mNaFxL4u2OG', 'teacher'),
(33, 'js@gmail.com', '$2y$10$BUSb4xtuU9GvZrJ/5vNYXuuVZTlTrVg9dc.9Zc8FSq7WgSCjBks46', 'teacher'),
(34, 'js@gmail.com', '$2y$10$WyD5PICGL/ONVtU5zHIHY.oeBXv.QoFb/c431bZgP6IRAmgLF1kv6', 'teacher'),
(35, 'mentor@gmail.com', '$2y$10$xZVUkDDtDVsUBGfDGcZY.etJJlUj9Z4ybehd6UwOK5Uy7dfHfVtve', 'teacher'),
(36, 'student@gmail.com', '$2y$10$JcNnqL/rQOsA8OMyesPFxuXlTXR0udywEOhW0LTAgbchbWpTN66i.', 'student'),
(37, 'superadmin@gmail.com', '$2y$10$WG.8a7LnHjv.VWDfQcF.GuXioAecwJW2psUrqZzsMmIC.BKA4C8wi', 'teacher'),
(38, 'nithins@gmail.com', '$2y$10$2ETQcYCF7AMofUht/zCCjuOxeG2..mxHNA/IFktrThlUMEH/hHC2.', 'teacher'),
(39, 'jd@gmail.com', '$2y$10$pwXXC2oSAZp9bBPrlEdZLe99J1wyZVKbQ9H7qrFV9i1pK1gV/qAOS', 'teacher'),
(40, 'akhil@gmail.com', '$2y$10$4Sds8Q2tHu8v4trJMGipm.01vDrq3k4cFf8YO8.Ip96jjmnN5Vg5e', 'teacher'),
(41, 'jd@gmail.com', '$2y$10$LCVbDybRfmEQ47J0/v5j/OiT1RjfVNwk1THb/01T13Ei7gmtK5L7C', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_tutor`
--
ALTER TABLE `add_tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalappointment`
--
ALTER TABLE `finalappointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mentor_request`
--
ALTER TABLE `mentor_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_request`
--
ALTER TABLE `tutor_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_tutor`
--
ALTER TABLE `add_tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finalappointment`
--
ALTER TABLE `finalappointment`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentor_request`
--
ALTER TABLE `mentor_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tutor_request`
--
ALTER TABLE `tutor_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
