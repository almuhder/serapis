-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2018 at 01:47 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbk15109_mentorship`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidates`
--

CREATE TABLE `tbl_candidates` (
  `id` int(5) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_candidates`
--

INSERT INTO `tbl_candidates` (`id`, `first_name`, `last_name`, `email`, `time`) VALUES
(1, 'Majd', 'Eddin', 'majd@rbk.org', '2018-01-23 23:58:12'),
(2, 'Majd', 'muhder', 'almuhder@gmail.com', '2018-01-24 00:30:16'),
(3, 'test', 'test', 'test@test.com', '2018-01-24 00:39:10'),
(4, 'BAYAN', 'HISHAM', 'BAYAN@RBK.ORG', '2018-01-24 07:56:28'),
(5, 'bayan', 'hisham', 'majed@r', '2018-01-24 08:01:39'),
(7, 'Majd', 'Edd', 'majd@gmail.com', '2018-01-24 19:48:26'),
(10, 'test', 'test', 'test@org', '2018-01-25 08:20:11'),
(11, 'dgdsgd', 'fdgdfgdfg', 'almuhder@gmail.com', '2018-02-18 12:07:12'),
(12, 'bayan', 'hisham', 'bayan@rbk.org', '2018-03-20 11:53:31'),
(15, 'Ahmad', 'Awad', 'ahmad@rbk.org', '2018-03-21 13:51:04'),
(16, 'Ahmad', 'Awad', 'ahmad@rbk.org', '2018-03-21 13:51:13'),
(17, 'sdfdsf', 'sdfsfs', 'sfdssdfsfasfsfdfs#@dfff', '2018-03-21 14:42:04'),
(18, 'Sanaa', 'Zayed', 'sana@rbk.org', '2018-03-22 07:19:27'),
(19, 'Hugh', 'Bosely', 'hugh@rbk.org', '2018-03-22 09:02:51'),
(20, 'Hugh', 'Bosely', 'hugh@rbk.org', '2018-03-22 09:03:10'),
(21, 'Hugh', 'Bosely', 'hugh@rbk.org', '2018-03-22 09:03:42'),
(22, 'DFG', 'DFGDSG', 'DSFG@DFGGD.COM', '2018-03-22 09:04:22'),
(23, 'DFG', 'delete * from tbl_candidates;', 'DSFG@DFGGD.COM', '2018-03-22 09:04:45'),
(24, 'asdf', 'sdf', 'sadfsfd@sfsdfnb', '2018-03-22 12:46:07'),
(25, 'asdf', 'asdf', 'safdds@sdfsdf', '2018-03-25 09:10:48'),
(26, 'ahh', 'ahh', 'ahhh@sdfsg', '2018-03-25 13:18:14'),
(27, 'ahh', 'ahh', 'ahhh@sdfsg', '2018-03-25 13:18:42'),
(28, 'Majd ', 'Muhanad', 'm.muhanad@gmail.com', '2018-03-25 13:41:01'),
(29, '', '', '', '2018-03-25 13:47:58'),
(30, 'azuz', 'azuz', 'azua@gmail.com', '2018-03-25 14:12:20'),
(31, 'Osama', 'Raq', 'osama@rbk.org', '2018-03-25 14:32:17'),
(32, 'Osama', 'Raq', 'osama@rbk.org', '2018-03-25 14:36:15'),
(33, 'Osama', 'Raq', 'osama@rbk.org', '2018-03-25 14:36:45'),
(34, 'hugh', 'bosely', 'hugh@rbk.org', '2018-03-25 15:33:49'),
(35, 'hugh', 'bosely', 'hugh@rbk.org', '2018-03-25 15:34:52'),
(36, '', '', '', '2018-03-25 15:44:59'),
(37, 'Majoouda', 'Eddina', 'joudy@rbk.org', '2018-03-25 15:47:01'),
(38, 'Fatima', 'Hammami', 'fatema@rbk.org', '2018-03-25 16:08:09'),
(39, 'Sarah', 'Yousef', 'sarah@rbk.org', '2018-03-26 08:19:24'),
(40, 'مجد', 'الدين', 'majd@rbk.org', '2018-03-26 09:26:00'),
(41, 'Ahamad', 'Abuloush', 'ahmad@rbk.org', '2018-03-27 08:31:34'),
(42, 'hugh', 'hugh', 'hugh@rbk.org', '2018-03-28 12:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cohorts`
--

CREATE TABLE `tbl_cohorts` (
  `id` int(5) NOT NULL,
  `number` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cohorts`
--

INSERT INTO `tbl_cohorts` (`id`, `number`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mentors`
--

CREATE TABLE `tbl_mentors` (
  `id` tinyint(5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `many_years` varchar(255) NOT NULL,
  `interested` tinyint(1) NOT NULL,
  `tech_non_tech` text NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mentors`
--

INSERT INTO `tbl_mentors` (`id`, `first_name`, `last_name`, `email`, `skype`, `title`, `location`, `company`, `many_years`, `interested`, `tech_non_tech`, `registration_date`) VALUES
(7, 'Henri', 'Pietila', 'henrismail@gmail.com', 'henri.pietila', 'Software Engggggimer', 'United States', 'Zojab Inc', '0-2', 1, 'Blockchain,  Cryptocurrency, Javascript, Rockclimbing, React Native, Measuring, Hiking, Angular 4, Ionic, NodeJS', '2017-10-24 16:38:30'),
(8, 'ahmad', 'test', 'ahmad@rbk.org', 'ahmad.rbk', 'a', 'a', 'a', '0-2', 1, 'a', '2017-10-26 13:26:46'),
(9, 'Fatima', 'Rahhal', 'hayat.wem34@gmail.com', '', 'computer information system', 'Az zarqa', 'Al-abait university', '0-2', 1, 'Web development front-end', '2017-10-26 14:10:45'),
(12, 'shams', 'ammar', 'shamsammar29@gmail.com', '', 'non', 'Jordan_amman', 'non', '0-2', 1, 'Interested in learning new things', '2017-11-28 07:28:57'),
(13, 'Mohammad ', 'Badran Alhariri ', 'Stragonar7756@gmail.com', 'None ', 'Student ', 'Jordan/Alzatari Refugees camp ', 'None ', '0-2', 1, 'None technical,I hope to join your program to help in society development and improve my future career', '2017-11-29 18:42:53'),
(14, 'Ammar', 'Abu-Yasein', 'ammar.cse.ut@gmail.com', 'AmmarCSE', 'Software Engineer', 'Jordan', 'Tam LLC', '5+', 0, 'Engaged, creative software developer from Toledo, Ohio with 6+ years experience developing end-to-end solutions. Adept in working with both WISC and LAMP stacks having also developed mobile applications for all three platforms(Android, iOS, Windows Phone).\r\n\r\nA believer in pragmatic software development; prefers to use BDD whenever possible. Part-time course instructor in ASP.NET MVC.\r\n\r\nU.S expat currently working remotely', '2017-12-12 06:53:18'),
(15, 'Ahmad', 'Khudairy', 'akhudairy@gmail.com', 'akhudairy', 'Team Lead', 'Jordan', 'SEDCO', '5+', 0, 'technical', '2017-12-28 10:10:08'),
(16, 'Jun', 'Park', 'jun.park@live.com', 'junjunparkpark', 'Software Engineer', 'USA', 'Setlmint.com / Hack Reactor', '0-2', 1, 'Technical:\r\nI am a full-stack software engineer focusing in modern web development, also a React evangelist. \r\n\r\nNon-technical:\r\nBefore this cryptocurrency craze, I have been mining Bitcoin since 2014 and am a big believer in the democratization of finance. ', '2017-12-28 17:24:29'),
(17, 'رشا', 'عبيدات', 'rashasam1985@gmail.com', 'rashasam1985@gmail.com', 'مدرسة رياضيات', 'أربد', 'لا يوجد', '5+', 1, 'تدريس مادة رياضيات', '2018-01-02 19:17:25'),
(18, 'رشا', 'عبيدات', 'rashasam1985@gmail.com', 'rashasam1985@gmail.com', 'مدرسة رياضيات', 'أربد', 'لا يوجد', '5+', 1, 'تدريس مادة رياضيات', '2018-01-02 19:17:59'),
(19, 'Mohammad', 'AlSuliman', 'n.nenar@gnail.com', 'Sam.music', '.', 'jordan', '.', '5+', 0, 'Music', '2018-01-02 19:54:28'),
(20, 'Mohammad', 'AlSuliman', 'n.nenar@gnail.com', 'Sam.music', '.', 'jordan', '.', '5+', 0, 'Music', '2018-01-02 19:57:14'),
(21, 'Ariadna', 'Ercilla Montserrat', 'a.ercilla.m@gmail.com', 'ariadna.ercilla', 'UX-UI Designer', 'Spain', 'Beabloo', '2-5', 1, 'I would prefer to do not remote classes. \r\nI have knowledge of code: Html5, SASS; knowledge of design: Photoshop, Illustrator, Indesign and kwnoledge from Usability: Axure, Sketch.\r\nI can teach programs or about design or usability theory.', '2018-01-20 15:24:51'),
(22, 'Jack', 'Miszencin', 'jack.miszencin@gmail.com', 'jack.miszencin', 'Solutions Engineer for software company', 'Jordan', 'Quoin, Inc.', '2-5', 1, 'I am not an addicted programmer, but I do like building things. In my free time, I tend to enjoy running, \r\nhiking, practicing Arabic, cooking, reading (lots of history), traveling, and learning (slowly but surely) to play guitar.\r\n\r\nAlso, as a heads-up, I think this input needs to be sanitized. It just told me I had a SQL error when I tried to submit my line with an apostrophe in it.', '2018-02-05 08:39:48'),
(23, 'Ahmad', 'Alawad', 'ahmad@rbk.org', '', 'SE', 'Jordan', 'RBK', '0-2', 1, 'food', '2018-02-25 08:13:58'),
(24, 'Rami', 'Rawashdeh', 'rami.tawfeeq@hotmail.com', 'mclarenf18', 'Learning and Development Manager', 'Jordan', 'WG Academy', '5+', 1, 'Technical: (iOS Basics) / Powerpoint / Prezi / \r\nNon-Technical: Soft Skills / Career Counseling / C.V. Writing / Presentation Skills / CPT / TOT ', '2018-03-19 15:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`, `comments`) VALUES
(1, 'administrator', 'Full privilege '),
(2, 'manager', 'Can Read, Write and Update'),
(3, 'employee', 'Can Read and write'),
(4, 'Volunteer ', 'Can Read only');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'admin@rbk.org', '123456', 1),
(2, 'majd@rbk.org', '123456', 1),
(3, 'bayan@rbk.org', '123456', 2),
(4, 'ahmad@rbk.org', '123456', 2),
(5, 'hugh@rbk.org', '123456', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_candidates`
--
ALTER TABLE `tbl_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cohorts`
--
ALTER TABLE `tbl_cohorts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number` (`number`);

--
-- Indexes for table `tbl_mentors`
--
ALTER TABLE `tbl_mentors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_candidates`
--
ALTER TABLE `tbl_candidates`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_cohorts`
--
ALTER TABLE `tbl_cohorts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_mentors`
--
ALTER TABLE `tbl_mentors`
  MODIFY `id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
