-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 01:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `sno` bigint(20) NOT NULL,
  `username` varchar(225) NOT NULL,
  `access` longtext NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`sno`, `username`, `access`, `user_type`) VALUES
(1, 'admin', '*', 'admin'),
(3, 'client demo', '*', 'client');

-- --------------------------------------------------------

--
-- Stand-in structure for view `allusers`
-- (See below for the actual view)
--
CREATE TABLE `allusers` (
);

-- --------------------------------------------------------

--
-- Table structure for table `global`
--

CREATE TABLE `global` (
  `sno` bigint(255) NOT NULL,
  `var_name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `isuserdefined` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `global`
--

INSERT INTO `global` (`sno`, `var_name`, `value`, `isuserdefined`) VALUES
(1, 'demo var', '20', 'Yes'),
(2, 'demo var2', '10', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `linkmanager`
--

CREATE TABLE `linkmanager` (
  `sno` bigint(20) NOT NULL,
  `linkname` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `linkgroup` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `ismainmenu` varchar(225) NOT NULL,
  `scope` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linkmanager`
--

INSERT INTO `linkmanager` (`sno`, `linkname`, `link`, `linkgroup`, `status`, `ismainmenu`, `scope`) VALUES
(1, 'Dashboard', 'dashboard.php', 'Dashboard', 'ACTIVE', 'YES', 'mainsite'),
(3, 'Create User', 'add.php', 'User Master', 'ACTIVE', 'YES', 'mainsite'),
(4, 'Show User', 'display.php', 'User Master', 'ACTIVE', 'YES', 'mainsite');

-- --------------------------------------------------------

--
-- Table structure for table `useridmanager`
--

CREATE TABLE `useridmanager` (
  `sno` bigint(20) NOT NULL,
  `id_no` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useridmanager`
--

INSERT INTO `useridmanager` (`sno`, `id_no`, `user_type`) VALUES
(1, '1', 'user'),
(2, '1', 'agent'),
(3, '1', 'client'),
(4, '1', 'superagent'),
(5, '1', 'subagent'),
(6, '2', 'user'),
(7, '2', 'agent'),
(8, '3', 'agent'),
(9, '4', 'agent'),
(10, '5', 'agent'),
(12, '2', 'runner');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` bigint(20) NOT NULL,
  `username` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `name`, `password`, `status`) VALUES
(1, 'admin', 'admin', '111222', 'Active'),
(2, 'demo client', 'demo client', '123456', 'Active');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `userstoUserIdManager` AFTER INSERT ON `users` FOR EACH ROW INSERT into useridmanager (sno,id_no,user_type) VALUES (null,NEW.sno,'user')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure for view `allusers`
--
DROP TABLE IF EXISTS `allusers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `allusers`  AS  select (select `useridmanager`.`sno` from `useridmanager` where ((`useridmanager`.`id_no` = `agentdetails`.`sno`) and (`useridmanager`.`user_type` = 'agent'))) AS `userid`,`agentdetails`.`SharePer` AS `SharePer`,`agentdetails`.`status` AS `status`,`agentdetails`.`sno` AS `sno`,`agentdetails`.`parent_order` AS `parent_order`,`agentdetails`.`AgentName` AS `name`,'Agent' AS `userType`,`agentdetails`.`parent_id` AS `parent_id` from `agentdetails` union select (select `useridmanager`.`sno` from `useridmanager` where ((`useridmanager`.`id_no` = `clientdetails`.`sno`) and (`useridmanager`.`user_type` = 'client'))) AS `userid`,`clientdetails`.`SharePer` AS `SharePer`,`clientdetails`.`status` AS `status`,`clientdetails`.`sno` AS `sno`,`clientdetails`.`parent_order` AS `parent_order`,`clientdetails`.`ClientName` AS `name`,'Client' AS `userType`,`clientdetails`.`parent_id` AS `parent_id` from `clientdetails` union select (select `useridmanager`.`sno` from `useridmanager` where ((`useridmanager`.`id_no` = `subagentdetails`.`sno`) and (`useridmanager`.`user_type` = 'subagent'))) AS `userid`,`subagentdetails`.`SharePer` AS `SharePer`,`subagentdetails`.`status` AS `status`,`subagentdetails`.`sno` AS `sno`,`subagentdetails`.`parent_order` AS `parent_order`,`subagentdetails`.`SubAgentName` AS `name`,'SubAgent' AS `userType`,`subagentdetails`.`parent_id` AS `parent_id` from `subagentdetails` union select (select `useridmanager`.`sno` from `useridmanager` where ((`useridmanager`.`id_no` = `superagentdetails`.`sno`) and (`useridmanager`.`user_type` = 'superagent'))) AS `userid`,`superagentdetails`.`SharePer` AS `SharePer`,`superagentdetails`.`status` AS `status`,`superagentdetails`.`sno` AS `sno`,`superagentdetails`.`parent_order` AS `parent_order`,`superagentdetails`.`SuperAgentName` AS `name`,'SuperAgent' AS `userType`,`superagentdetails`.`parent_id` AS `parent_id` from `superagentdetails` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `linkmanager`
--
ALTER TABLE `linkmanager`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `linkmanager`
--
ALTER TABLE `linkmanager`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
