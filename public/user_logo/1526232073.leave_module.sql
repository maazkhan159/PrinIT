-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 03:10 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_module`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employee`
--

CREATE TABLE `add_employee` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(55) NOT NULL,
  `Mobile_Number` varchar(55) NOT NULL,
  `Cnic` varchar(55) NOT NULL,
  `Employee_Type` varchar(55) NOT NULL,
  `Email_Address` varchar(55) NOT NULL,
  `Created_by` datetime NOT NULL,
  `Updated_by` datetime NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Groups` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0: inActive, 1: Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`id`, `First_Name`, `Mobile_Number`, `Cnic`, `Employee_Type`, `Email_Address`, `Created_by`, `Updated_by`, `Gender`, `Groups`, `status`) VALUES
(117, 'Haider', '03431112915', '3520142716537', 'Student', 'haiderali728@gmail.com', '2018-04-25 16:29:14', '2018-04-25 17:47:31', 'Male', 'hris', 1),
(118, 'Haider', '03431112915', '3520142716537', 'Volunteer', 'haiderali728@gmail.com', '2018-04-25 17:47:13', '0000-00-00 00:00:00', 'Male', 'abc', 1),
(119, 'Haider', '03431112915', '3520142716537', 'Consultant', 'haiderali728@gmail.com', '2018-04-25 19:32:58', '0000-00-00 00:00:00', 'Male', 'IASB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `apply_leave`
--

CREATE TABLE `apply_leave` (
  `id` int(11) NOT NULL,
  `Leave_Type` varchar(55) NOT NULL,
  `Leave_Balance` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `Partial_Days` varchar(55) NOT NULL,
  `Attachment` varchar(55) NOT NULL,
  `Created_By` varchar(55) NOT NULL,
  `Updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_leave`
--

INSERT INTO `apply_leave` (`id`, `Leave_Type`, `Leave_Balance`, `start_date`, `end_date`, `Partial_Days`, `Attachment`, `Created_By`, `Updated_at`) VALUES
(7, 'breb', '', '2018-04-27', '2018-04-30', 'Half Day', 'Untitled.png', '2018-04-25 19:50:51', '0000-00-00 00:00:00'),
(8, 'medical ', '', '2018-04-27', '2018-05-01', 'Half Day', 'Untitled.png', '2018-04-25 20:05:17', '0000-00-00 00:00:00'),
(9, 'hajj', '', '2018-04-26', '2018-04-26', 'Full Day', '1521401444-logo-desktop.png', '2018-04-26 13:08:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `assign_leave`
--

CREATE TABLE `assign_leave` (
  `id` int(11) NOT NULL,
  `Project_Name` varchar(55) NOT NULL,
  `Employee_Name` varchar(55) NOT NULL,
  `Leave_Type` varchar(55) NOT NULL,
  `Calender_Date` date NOT NULL,
  `Remarks` varchar(200) NOT NULL,
  `Created_By` varchar(55) NOT NULL,
  `Updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assign_leave_group`
--

CREATE TABLE `assign_leave_group` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_leave_group`
--

INSERT INTO `assign_leave_group` (`id`, `group_id`, `leave_id`) VALUES
(1, 14, 2),
(2, 14, 3),
(3, 14, 4),
(4, 14, 1),
(5, 14, 5),
(6, 14, 6),
(7, 14, 7),
(8, 12, 1),
(9, 12, 5),
(10, 12, 7),
(11, 13, 1),
(12, 13, 4),
(13, 13, 6),
(14, 13, 8),
(15, 10, 4),
(16, 14, 10),
(17, 14, 12);

-- --------------------------------------------------------

--
-- Table structure for table `assign_leave_history`
--

CREATE TABLE `assign_leave_history` (
  `id` int(11) NOT NULL,
  `Project_Name` varchar(55) NOT NULL,
  `Employee_Name` varchar(55) NOT NULL,
  `Leave_Type` varchar(55) NOT NULL,
  `Calender_Date` date NOT NULL,
  `Created_by` varchar(55) NOT NULL,
  `Updated_By` date NOT NULL,
  `Modified_By` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_setup`
--

CREATE TABLE `calendar_setup` (
  `id` int(11) NOT NULL,
  `leave_name` varchar(55) NOT NULL,
  `description` varchar(255) NOT NULL,
  `Created_at` datetime NOT NULL,
  `Updated_at` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0: inActive, 1: Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar_setup`
--

INSERT INTO `calendar_setup` (`id`, `leave_name`, `description`, `Created_at`, `Updated_at`, `status`) VALUES
(1, 'new holiday', '                                                      holiday here                                                    ', '2018-04-17 17:20:39', '2018-04-18 10:31:46', 0),
(2, 'holiday', ' holiday here we discuss on it.                                                   ', '2018-04-17 17:20:50', '2018-04-18 10:32:43', 1),
(3, 'casual leave', 'casula leave here ', '2018-04-18 13:17:03', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_family`
--

CREATE TABLE `job_family` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_family`
--

INSERT INTO `job_family` (`id`, `name`, `status`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`) VALUES
(1, 'Consultant', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(2, 'DEO', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(3, 'Daily Wager', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(4, 'Database', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(5, 'Intern', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(6, 'Junior Management', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(7, 'Middle Management', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(8, 'Network', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(9, 'Office Support Staff', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(10, 'Project Assistant Staff', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(11, 'Project Coordination Staff', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(12, 'Project Management Staff', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(13, 'Security', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(14, 'Senior Management', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(15, 'Software Engineering', 1, '2017-10-03 11:01:04', NULL, NULL, 131),
(16, 'Technical Support Staff', 1, '2017-10-03 11:01:04', NULL, NULL, 131);

-- --------------------------------------------------------

--
-- Table structure for table `job_family_history`
--

CREATE TABLE `job_family_history` (
  `id` int(11) NOT NULL,
  `job_family_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `ud_status` varchar(100) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `leave_buisness_rules`
--

CREATE TABLE `leave_buisness_rules` (
  `id` int(11) NOT NULL,
  `Leave_Type` varchar(50) NOT NULL,
  `Leave_Merged` varchar(50) NOT NULL,
  `Leave_Stretch` varchar(50) NOT NULL,
  `Count_Weekend` int(11) NOT NULL,
  `Count_Holidays` int(11) NOT NULL,
  `Created_By` varchar(55) NOT NULL,
  `Updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_buisness_rules`
--

INSERT INTO `leave_buisness_rules` (`id`, `Leave_Type`, `Leave_Merged`, `Leave_Stretch`, `Count_Weekend`, `Count_Holidays`, `Created_By`, `Updated_at`) VALUES
(2, 'hajj', 'casula leave', '15', 0, 1, '2018-04-17 07:30:54', '2018-04-17 12:16:56'),
(3, 'Sick', 'Sick', '12', 0, 1, '2018-04-17 07:43:04', '2018-04-17 12:10:29'),
(4, 'breb', 'breb', '14', 1, 0, '2018-04-17 07:58:32', '2018-04-17 12:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `leave_calender`
--

CREATE TABLE `leave_calender` (
  `int` int(55) NOT NULL,
  `data` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_calender`
--

INSERT INTO `leave_calender` (`int`, `data`, `created_at`) VALUES
(1, 'holiday', '2018-04-26 11:35:47'),
(2, 'casual leave', '2018-04-26 11:39:51'),
(3, '3', '2018-04-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `leave_group`
--

CREATE TABLE `leave_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `leave_type` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0: inActive, 1: Active',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_group`
--

INSERT INTO `leave_group` (`id`, `group_name`, `leave_type`, `remarks`, `status`, `created_at`, `updated_at`) VALUES
(10, 'abc', '[\"hajj\",\"umrah \",\"casual leave\"]', 'sadasd                                                                                                        ', 1, '2018-04-24 11:47:07', '2018-04-24 12:34:14'),
(11, 'abc', '[\"hajj\",\"medical \"]', 'abc', 0, '2018-04-24 12:39:49', '0000-00-00 00:00:00'),
(12, 'hris', '[\"hajj\",\"casual leave\"]', 'Accepted here.. \r\n                                                    ', 1, '2018-04-24 12:41:33', '2018-04-24 12:41:48'),
(13, 'IASB', '[\"hajj\",\"umrah \",\"casual leave\",\"medical \"]', 'add this....', 1, '2018-04-25 18:28:26', '0000-00-00 00:00:00'),
(14, 'IT Based Profiling', '', 'For Conversion of Data in IT', 1, '2018-04-26 16:45:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `leave_history`
--

CREATE TABLE `leave_history` (
  `id` int(11) NOT NULL,
  `Leave_Name` varchar(50) NOT NULL,
  `Leave_Code` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Date_Modified` datetime NOT NULL,
  `Created_By` varchar(100) NOT NULL,
  `Date_Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `id` int(11) NOT NULL,
  `Leave_Name` varchar(100) NOT NULL,
  `Leave_Code` varchar(100) NOT NULL,
  `No_Of_Leaves` varchar(55) NOT NULL,
  `Calender_Type` varchar(50) NOT NULL,
  `Leaves_Stretch` varchar(100) NOT NULL,
  `Remarks` varchar(200) NOT NULL,
  `Paid_Leaves` varchar(55) NOT NULL,
  `Leave_Carry` varchar(55) NOT NULL,
  `Created_By` datetime NOT NULL,
  `Updated_At` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0: inActive, 1: Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`id`, `Leave_Name`, `Leave_Code`, `No_Of_Leaves`, `Calender_Type`, `Leaves_Stretch`, `Remarks`, `Paid_Leaves`, `Leave_Carry`, `Created_By`, `Updated_At`, `status`) VALUES
(1, 'Sick', '12cl', '12', 'Yearly', '12', 'Sick leave here and casual leave here', '0', '0', '2018-02-14 04:17:30', '2018-04-13 13:05:56', 1),
(2, 'breb', 'erb', 'erve', 'Yearly', 'ffffff', 'sdfvebeg', '0', '0', '2018-04-12 12:38:52', '0000-00-00 00:00:00', 1),
(3, 'brobing', 'erb', 'erve', 'Yearly', 'ffffff', 'sdfvebeg', '1', '1', '2018-04-12 12:40:03', '2018-04-17 12:09:38', 1),
(4, 'helloworld', '12', '12', 'contract Based', '13', 'thisi is demo text area.', '1', '1', '2018-04-13 11:43:37', '2018-04-17 12:01:16', 1),
(5, 'hajj', '12we', '16', 'Yearly', '50', 'hajj leave', '0', '1', '2018-04-13 16:00:18', '2018-04-17 13:47:04', 1),
(6, 'umrah ', '12sa', '16', 'Yearly', '30', 'umrah leave here', '', '', '2018-04-13 17:24:14', '2018-04-13 17:32:12', 1),
(7, 'casual leave', '12we', '2', 'Yearly', '22', 'casual leave here.', '1', '1', '2018-04-13 17:31:26', '2018-04-17 16:35:39', 1),
(8, 'medical ', 'md34', '250', 'Yearly', '110', 'medical leaves here', '1', '1', '2018-04-17 11:07:06', '2018-04-17 12:02:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `my_leave`
--

CREATE TABLE `my_leave` (
  `id` int(11) NOT NULL,
  `Calender_Date` date NOT NULL,
  `Options` int(11) NOT NULL,
  `Created_at` datetime NOT NULL,
  `Updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `my_leave_history`
--

CREATE TABLE `my_leave_history` (
  `id` int(11) NOT NULL,
  `Calender_Date` datetime NOT NULL,
  `options` varchar(55) NOT NULL,
  `Created_By` varchar(55) NOT NULL,
  `Updated_at` datetime NOT NULL,
  `Modified_by` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `leave_groups` int(11) NOT NULL,
  `week_name` varchar(255) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `leave_groups`, `week_name`, `user_password`, `created_at`, `role`) VALUES
(14, 'Admin', 'admin@admin.com', 12, '', '482c811da5d5b4bc6d497ffa98491e38', '2018-03-28 21:05:18', 0),
(15, 'Maaz Khan', 'maazkhanuol@gmail.com', 12, '', '202cb962ac59075b964b07152d234b70', '2018-04-04 01:57:46', 1),
(16, 'HOD', 'hod@hod.com', 12, '', 'password123', '2018-03-28 21:05:18', 1),
(18, 'haider', 'haiderali728@gmail.com', 13, '', '482c811da5d5b4bc6d497ffa98491e38', '2018-04-26 12:06:07', 0),
(20, 'Talha Shah', 'talha.shah@pitb.gov.pk', 12, '', '482c811da5d5b4bc6d497ffa98491e38', '2018-04-26 15:51:35', 0),
(21, 'Usman Zaka', 'usman.zaka@pitb.gov.pk', 13, '', '482c811da5d5b4bc6d497ffa98491e38', '2018-04-27 15:51:04', 0),
(22, 'talha', 'abc@pbit.gop.pk', 13, '3', 'e10adc3949ba59abbe56e057f20f883e', '2018-04-27 18:18:44', 0),
(23, 'haider', 'haiderali728111@gmail.com', 12, '3', '482c811da5d5b4bc6d497ffa98491e38', '2018-04-27 18:22:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `working_week`
--

CREATE TABLE `working_week` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Mon` varchar(50) NOT NULL,
  `Tues` varchar(50) NOT NULL,
  `Wed` varchar(50) NOT NULL,
  `Thur` varchar(50) NOT NULL,
  `Fri` varchar(50) NOT NULL,
  `Sat` varchar(50) NOT NULL,
  `Sun` varchar(50) NOT NULL,
  `Created_by` datetime NOT NULL,
  `Updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `working_week`
--

INSERT INTO `working_week` (`id`, `name`, `Mon`, `Tues`, `Wed`, `Thur`, `Fri`, `Sat`, `Sun`, `Created_by`, `Updated_at`) VALUES
(1, '', 'Full Day', 'Half Day', 'Full Day', 'Full Day', 'Half Day', 'Half Day', 'Non-Working Day', '2018-04-17 13:43:52', '2018-04-17 13:44:04'),
(2, 'Abd', 'Non-Working Day', 'Half Day', 'Half Day', 'Full Day', 'Full Day', 'Full Day', 'Half Day', '2018-04-27 17:46:34', '0000-00-00 00:00:00'),
(3, 'abc', 'Non-Working Day', 'Full Day', 'Full Day', 'Half Day', 'Half Day', 'Half Day', 'Full Day', '2018-04-27 17:51:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `working_week_history`
--

CREATE TABLE `working_week_history` (
  `id` int(11) NOT NULL,
  `Mon` varchar(50) NOT NULL,
  `Tue` varchar(50) NOT NULL,
  `Wed` varchar(50) NOT NULL,
  `Thur` varchar(50) NOT NULL,
  `Fri` varchar(50) NOT NULL,
  `Sat` varchar(50) NOT NULL,
  `Sun` varchar(50) NOT NULL,
  `Date_Modified` datetime NOT NULL,
  `Created_by` datetime NOT NULL,
  `Updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_employee`
--
ALTER TABLE `add_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_leave`
--
ALTER TABLE `apply_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_leave`
--
ALTER TABLE `assign_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_leave_group`
--
ALTER TABLE `assign_leave_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_leave_history`
--
ALTER TABLE `assign_leave_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar_setup`
--
ALTER TABLE `calendar_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_family`
--
ALTER TABLE `job_family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_family_history`
--
ALTER TABLE `job_family_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_buisness_rules`
--
ALTER TABLE `leave_buisness_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_calender`
--
ALTER TABLE `leave_calender`
  ADD PRIMARY KEY (`int`);

--
-- Indexes for table `leave_group`
--
ALTER TABLE `leave_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_history`
--
ALTER TABLE `leave_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_leave`
--
ALTER TABLE `my_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_leave_history`
--
ALTER TABLE `my_leave_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `working_week`
--
ALTER TABLE `working_week`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_week_history`
--
ALTER TABLE `working_week_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_employee`
--
ALTER TABLE `add_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `apply_leave`
--
ALTER TABLE `apply_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `assign_leave`
--
ALTER TABLE `assign_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assign_leave_group`
--
ALTER TABLE `assign_leave_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `assign_leave_history`
--
ALTER TABLE `assign_leave_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `calendar_setup`
--
ALTER TABLE `calendar_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job_family`
--
ALTER TABLE `job_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `job_family_history`
--
ALTER TABLE `job_family_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leave_buisness_rules`
--
ALTER TABLE `leave_buisness_rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `leave_calender`
--
ALTER TABLE `leave_calender`
  MODIFY `int` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `leave_group`
--
ALTER TABLE `leave_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `leave_history`
--
ALTER TABLE `leave_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `my_leave`
--
ALTER TABLE `my_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `my_leave_history`
--
ALTER TABLE `my_leave_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `working_week`
--
ALTER TABLE `working_week`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `working_week_history`
--
ALTER TABLE `working_week_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
