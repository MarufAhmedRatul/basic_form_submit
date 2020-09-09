-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 08:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clg_admission_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_name_ban` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_phone` int(11) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `relation_guardian` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `cff` varchar(255) NOT NULL,
  `blood_grp` varchar(255) NOT NULL,
  `gander` varchar(255) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `exam_group` varchar(255) NOT NULL,
  `subjects` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `application_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `applicant_name`, `applicant_name_ban`, `father_name`, `father_phone`, `mother_name`, `mobile`, `present_address`, `permanent_address`, `guardian_name`, `relation_guardian`, `dob`, `nationality`, `marital_status`, `cff`, `blood_grp`, `gander`, `exam_name`, `exam_group`, `subjects`, `image`, `application_date`) VALUES
(1, 'Applicant Name', 'Applicant Name (Bangla', 'Fathers', 0, 'Mothers', 7890, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', 'Guardian', 'Relation With Guardian', '09/09/2020', 'Nationality', 'Marital', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', 'sire Subjects for H.S.C', '2020252063811_unnamed.png', '09.09.2020'),
(2, 'Applicant Name', 'Applicant Name (Bangla', 'Fathers', 0, 'Mothers', 123456, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', 'Guardian', 'Relation With Guardian', '09/02/2020', 'Nationality', 'Marital', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', 'asdsad', '2020252065527_unnamed.png', '09.09.2020'),
(3, 'Applicant Name', 'Applicant Name (Bangla', 'Fathers', 0, 'Mothers', 22222, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', 'Guardian', 'Relation With Guardian', '09/09/2020', 'Nationality', 'Marital', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', 'asdsad', '2020252065655_unnamed.png', '09.09.2020'),
(4, 'Applicant Name', 'Applicant Name (Bangla', 'Fathers', 0, 'Mothers', 11111, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', 'Guardian', 'Relation With Guardian', '09/02/2020', 'Nationality', 'Marital', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', 'dfsdfsf', '2020252065921_img_542346.png', '09.09.2020'),
(5, 'Applicant Name', 'Applicant Name (Bangla', 'Fathers', 0, 'Mothers', 123556, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', 'Guardian', 'Relation With Guardian', '09/02/2020', 'Nationality', 'Marital', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '', '09.09.2020'),
(6, 'Applicant Name', NULL, 'Fathers', 0, 'Mothers', 0, '4', '4 No. Cotbari, Gabtuli', '', '', '2020-09-21', 'Nationality', '', 'no', 'O(positive)', 'Male', 'Exam', 'Exam Group', 'Bangla, English, Match', '', '09.09.2020'),
(7, 'Applicant Name', NULL, 'Fathers', 0, 'Mothers', 1847155890, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-09', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '', '2020-09-09'),
(8, 'Applicant Name', NULL, 'Fathers', 0, 'Mothers', 1847155891, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-10', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', 'Bangla, English, ICT', '', '2020-09-09'),
(9, 'Applicant Name', NULL, 'Fathers', 1847155890, 'Mothers', 2147483647, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-09', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '', '2020-09-09'),
(10, 'asdasd', NULL, 'sdsad', 1847155890, 'Mothers', 1847155855, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-09', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '2020252050631screencapture-127-0-0-1-5500-2020-09-08-18_58_32.png', '2020-09-09'),
(11, 'Applicant Name', NULL, 'Fathers', 1847155890, 'Mothers', 1847155889, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-09', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '2020252051159_screencapture-127-0-0-1-5500-2020-09-08-18_50_17.png', '2020-09-09'),
(12, 'Applicant Name', NULL, 'hjhj', 1847155890, 'Mothers', 1847155860, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-09', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '2020252053404_eaaa5f39862b3a573f83b863c11a6f95.jpg', '2020-09-09'),
(13, 'Applicant Name', NULL, 'Fathers', 1847155890, 'Mothers', 1847159990, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-09', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '2020252054829_img_542346.png', '2020-09-09'),
(14, 'Applicant Name', NULL, 'Fathers', 1847155890, 'jkhkj', 1347155890, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-09', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '2020252054919_david-vig-qwHHOC2z5Xs-unsplash.jpg', '2020-09-09'),
(15, 'Applicant Name', NULL, 'Fathers', 1847155890, 'Mothers', 1947155890, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-09', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '2020252054955_img_542346.png', '2020-09-09'),
(16, 'Applicant Name', NULL, 'Fathers', 1847155890, 'Mothers', 1047155890, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-09', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '2020252055224_allie-Z_T4WObwYJo-unsplash.jpg', '2020-09-09'),
(17, 'Applicant Name', NULL, 'Fathers', 1847155890, 'Mothers', 1147155890, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-09', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '2020252055333_allie-Z_T4WObwYJo-unsplash.jpg', '2020-09-09'),
(18, 'Applicant Name', NULL, 'Fathers', 1847155890, 'jkhkj', 1848155890, '4 No. Cotbari, Gabtuli', '4 No. Cotbari, Gabtuli', '', '', '2020-09-16', 'Nationality', '', 'no', 'A(positive)', 'Male', 'Exam', 'Exam Group', '4 No. Cotbari, Gabtuli', '2020252055428_ben-wilkins-ppmKiMv3Rkk-unsplash.jpg', '2020-09-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
