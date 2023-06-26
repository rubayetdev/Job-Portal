-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 08:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_registration`
--

CREATE TABLE `business_registration` (
  `Serial_No` int(100) NOT NULL,
  `business_name` varchar(100) DEFAULT NULL,
  `business_license` varchar(50) DEFAULT NULL,
  `company_mail` varchar(100) DEFAULT NULL,
  `telephone` varchar(11) DEFAULT NULL,
  `company_address` varchar(200) DEFAULT NULL,
  `company_password` varchar(8) DEFAULT NULL,
  `postal_code` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_registration`
--

INSERT INTO `business_registration` (`Serial_No`, `business_name`, `business_license`, `company_mail`, `telephone`, `company_address`, `company_password`, `postal_code`) VALUES
(1, 'ABC Company Ltd.', '75369874125', 'abc@gmail.com', '01780895623', 'Mirpur - 2', '159632', '1216'),
(2, 'CodeCompany', '1596321456987', 'code@gmail.com', '01780895626', 'Banani, Dhaka', '456321', '1300'),
(3, 'Gamerz Ltd.', '896541236578', 'game@gmail.com', '01326523040', 'Gulshan -2, Dhaka', '123574', '1300');

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(11) NOT NULL,
  `Job_Title` varchar(100) NOT NULL,
  `candidate_mail` varchar(100) NOT NULL,
  `business_mail` varchar(100) NOT NULL,
  `file_data` varchar(255) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `Job_Title`, `candidate_mail`, `business_mail`, `file_data`, `Time`) VALUES
(7, '', 'pias@gmail.com', 'abc@gmail.com', 'cv/eoIyxmo0zZiz2KEo9A54JzrGOk42gM2kBy1fC6Qh.png', '2023-06-17 05:14:23'),
(10, '', 'mit@gmail.com', 'code@gmail.com', 'cv/1910.09074.pdf', '2023-06-20 05:43:50'),
(11, '', 'rafi@gmail.com', 'code@gmail.com', 'cv/Contact Information - Google Forms.pdf', '2023-06-20 08:19:38'),
(12, 'Laravel Developer', 'mit@gmail.com', 'abc@gmail.com', 'cv/Current_State_of_Agile_Approach_for_Software_Development (1).pdf', '2023-06-20 17:17:21'),
(13, 'Full Stack developer', 'rafi@gmail.com', 'code@gmail.com', 'cv/Current_State_of_Agile_Approach_for_Software_Development (1).pdf', '2023-06-25 14:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `business_mail` varchar(100) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) NOT NULL,
  `vaccacines` int(3) DEFAULT NULL,
  `empstatus` varchar(10) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `Location` varchar(100) NOT NULL,
  `job_responsibilities` varchar(1000) DEFAULT NULL,
  `job_requirment` varchar(10000) DEFAULT NULL,
  `Salary` varchar(15) NOT NULL,
  `Deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`business_mail`, `job_title`, `company_name`, `vaccacines`, `empstatus`, `gender`, `age`, `experience`, `Location`, `job_responsibilities`, `job_requirment`, `Salary`, `Deadline`) VALUES
('code@gmail.com', 'Full Stack developer', 'CodeCompany', 4, 'FullTime', 'Both male and female', 'At least 24 Years', 'At least 1 year experience of PHP', 'Banani, Dhaka', 'Take Project form client', 'High Knowledge of PHP', '35000', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `User_id` int(11) NOT NULL,
  `User_name` varchar(50) DEFAULT NULL,
  `User_mail` varchar(50) DEFAULT NULL,
  `User_Password` varchar(8) DEFAULT NULL,
  `User_Phone` varchar(11) DEFAULT NULL,
  `User_Address` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`User_id`, `User_name`, `User_mail`, `User_Password`, `User_Phone`, `User_Address`) VALUES
(1, 'S.Md. Rubayet Islam Ifti', 'rubayetislam16@gmail.com', '123456', '01642889275', 'Mirpur - 2'),
(2, 'Rashad Rafi', 'rafi@gmail.com', '456789', '01712345678', 'Rajshahi'),
(3, 'Pias Miah', 'pias@gmail.com', '789456', '01656826012', 'Nawabganj, Dhaka'),
(4, 'Zidan', 'zid@gamil.com', '8523', '01456', 'Mirpur - 2'),
(5, 'Alamin', 'al@gmail.com', '7896', '7865', 'wsy'),
(6, 'Mritunnjoy Biswas', 'mit@gmail.com', '357412', '01645789523', 'Uttara, Dhaka'),
(7, 'Mued Hasan', 'mued@gmail.com', '8521', '01712345678', 'Mirpur - 2, Dhaka'),
(8, 'Nabil Hossain Zidan', 'nhz@gmail.com', '74123', '01852224855', 'Gabtoli, Dhaka'),
(9, 'Shajib Saha', 'shajib@gmail.com', '85632', '01978066215', 'Mirpur - 13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_academic_info`
--

CREATE TABLE `user_academic_info` (
  `User_mail` varchar(50) DEFAULT NULL,
  `Education_Level` varchar(150) DEFAULT NULL,
  `Exam_Title` varchar(150) DEFAULT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `School` varchar(200) DEFAULT NULL,
  `Result` float DEFAULT NULL,
  `Duration` int(2) DEFAULT NULL,
  `Passing_Year` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_academic_info`
--

INSERT INTO `user_academic_info` (`User_mail`, `Education_Level`, `Exam_Title`, `Major`, `School`, `Result`, `Duration`, `Passing_Year`) VALUES
('pias@gmail.com', 'Bachelor', 'BSc', 'CSE', 'BUBT', 3.57, 4, 2023),
('pias@gmail.com', 'HS', 'HSC', 'Science', 'Uttara High School and College', 3.56, 2, 2019),
('pias@gmail.com', 'SS', 'SSC', 'Science', 'Uttara High School and College', 4.92, 2, 2017),
('mit@gmail.com', 'Bachelor', 'BSc', 'CSE', 'BUBT', 3.33, 4, 2023),
('mit@gmail.com', 'HS', 'HSC', 'Science', 'Uttara High School and College', 3.57, 2, 2019),
('mit@gmail.com', 'SS', 'SSC', 'Science', 'Uttara High School and College', 4.14, 2, 2017),
('rafi@gmail.com', 'Bachelor', 'BSc', 'CSE', 'BUBT', 3.32, 4, 2023),
('shajib@gmail.com', 'Bachelor', 'BSc', 'CSE', 'BUBT', 3.57, 4, 2023),
('shajib@gmail.com', 'HS', 'HSC', 'Science', 'Uttara High School and College', 4.14, 2, 2018),
('shajib@gmail.com', 'SS', 'SSC', 'Science', 'Uttara High School and College', 4.92, 2, 2016),
('rubayetislam16@gmail.com', 'Bachelor', 'Bachelor in Science', 'Computer Science and Engineering', 'Bangladesh University of Business and Technology', 3.32, 4, 2023),
('rubayetislam16@gmail.com', 'Higher Secondary', 'Higher Secondary Certificate', 'Science', 'Sirajganj Collectorate School and College', 3.56, 2, 2019),
('rubayetislam16@gmail.com', 'Secondary Certificate', 'Secondary School Certificate', 'Science', 'Sobuj Kanan School and College', 4.14, 2, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `user_personal_address`
--

CREATE TABLE `user_personal_address` (
  `User_mail` varchar(50) DEFAULT NULL,
  `Present_address` varchar(100) DEFAULT NULL,
  `Present_City` varchar(50) DEFAULT NULL,
  `Present_Zip` int(6) DEFAULT NULL,
  `Present_Village` varchar(100) DEFAULT NULL,
  `Permanent_Address` varchar(100) DEFAULT NULL,
  `Permanent_Village` varchar(100) DEFAULT NULL,
  `Permanent_Zip` int(6) DEFAULT NULL,
  `Permanent_City` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_personal_address`
--

INSERT INTO `user_personal_address` (`User_mail`, `Present_address`, `Present_City`, `Present_Zip`, `Present_Village`, `Permanent_Address`, `Permanent_Village`, `Permanent_Zip`, `Permanent_City`) VALUES
('pias@gmail.com', 'Mirpur - 2', 'Dhaka, Dhaka', 1216, 'Duip R/A', 'Dohar', 'Nawabganj', 1300, 'Dhaka'),
('mit@gmail.com', 'Uttara', 'Dhaka', 1230, 'Uttara 7', 'Uttara', 'Uttara 7', 1230, 'Dhaka'),
('rafi@gmail.com', 'Mirpur - 2', 'Dhaka, Dhaka', 1216, 'Rupnagar', 'Mirpur - 2', 'Rupnagar', 1216, 'Dhaka, Dhaka'),
('shajib@gmail.com', 'Mirpur', 'Dhaka', 1216, 'Mirpur - 13', 'Mirpur', 'Mirpur - 13', 1216, 'Dhaka'),
('rubayetislam16@gmail.com', 'Mirpur - 2', 'Dhaka, Dhaka', 1216, 'Duip R/A', 'E,B, Road', 'Nobodhippul', 6700, 'Sirajganj');

-- --------------------------------------------------------

--
-- Table structure for table `user_personal_details`
--

CREATE TABLE `user_personal_details` (
  `User_name` varchar(50) NOT NULL,
  `User_mail` varchar(50) NOT NULL,
  `User_Phone` varchar(11) NOT NULL,
  `User_Nationality` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Blood_Group` varchar(4) NOT NULL,
  `Religon` varchar(15) NOT NULL,
  `Profile_Pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_personal_details`
--

INSERT INTO `user_personal_details` (`User_name`, `User_mail`, `User_Phone`, `User_Nationality`, `DOB`, `Gender`, `Blood_Group`, `Religon`, `Profile_Pic`) VALUES
('Mrityunnjoy Biswas', 'mit@gmail.com', '01645789523', 'Bangladesh', '1999-06-30', 'Male', 'B-', 'Hindu', 'profile/wp3159996-resident-evil-5-wallpapers.jpg'),
('Pias Miah', 'pias@gmail.com', '01656826012', 'Bangladesh', '2000-12-30', 'Male', 'A+', 'Islam', ''),
('RashaD RAFi', 'rafi@gmail.com', '01712345670', 'Bangladesh', '2000-05-20', 'Male', 'B+', 'Islam', 'profile/114721-resident-evil-7-wallpaper-1920x1080-1080p.jpg'),
('Sheikh. Md. Rubayet Islam Ifti', 'rubayetislam16@gmail.com', '01642889275', 'Bangladesh', '2000-05-22', 'Male', 'A+', 'Islam', 'profile/337013209_1424217104983523_7749896510671824137_n.jpg'),
('Shajib Saha', 'shajib@gmail.com', '01978066215', 'Bangladesh', '1999-02-15', 'Male', 'AB-', 'Hindu', 'profile/1244847.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_skill`
--

CREATE TABLE `user_skill` (
  `User_mail` varchar(50) DEFAULT NULL,
  `Ex_Company` varchar(100) DEFAULT NULL,
  `Ex_position` varchar(100) DEFAULT NULL,
  `Startdate` date DEFAULT NULL,
  `Enddate` date DEFAULT NULL,
  `Programming` varchar(100) DEFAULT NULL,
  `Web` varchar(100) DEFAULT NULL,
  `DatabaseLan` varchar(100) DEFAULT NULL,
  `Ref1` varchar(100) DEFAULT NULL,
  `Ref2` varchar(100) DEFAULT NULL,
  `Res1` varchar(1000) NOT NULL,
  `Res2` varchar(1000) NOT NULL,
  `Res3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_skill`
--

INSERT INTO `user_skill` (`User_mail`, `Ex_Company`, `Ex_position`, `Startdate`, `Enddate`, `Programming`, `Web`, `DatabaseLan`, `Ref1`, `Ref2`, `Res1`, `Res2`, `Res3`) VALUES
('mit@gmail.com', 'CodeCompany', 'Full Staack Developer', '2023-02-14', '2023-06-26', 'C, C++, C#, JAVA, Python', 'HTML, CSS, PHP, LARAVEL', 'MongoDB, MySQL', 'Brinto (01568235456)', 'Usha (01856324580)', '', '', ''),
('rubayetislam16@gmail.com', 'CodeCompany', 'Full Staack Developer', NULL, '2023-06-26', 'C, C++, C#, JAVA, Python', 'HTML, CSS, PHP, LARAVEL', 'MongoDB, MySQL', 'Brinto (01568235456)', 'Usha (01856324580)', '', '', ''),
('rafi@gmail.com', 'ABC Company Ltd.', 'Laravel Developer', '2023-05-14', '2023-06-26', 'C, C++, C#, JAVA, Python', 'HTML, CSS, PHP, LARAVEL', 'MongoDB, MySQL', 'Brinto (01568235456)', 'Usha (01856324580)', 'Hardworking in laravel', 'XYZ', 'ABC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_registration`
--
ALTER TABLE `business_registration`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_academic_info`
--
ALTER TABLE `user_academic_info`
  ADD KEY `User_mail` (`User_mail`);

--
-- Indexes for table `user_personal_address`
--
ALTER TABLE `user_personal_address`
  ADD KEY `User_mail` (`User_mail`);

--
-- Indexes for table `user_personal_details`
--
ALTER TABLE `user_personal_details`
  ADD PRIMARY KEY (`User_mail`);

--
-- Indexes for table `user_skill`
--
ALTER TABLE `user_skill`
  ADD KEY `User_mail` (`User_mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_registration`
--
ALTER TABLE `business_registration`
  MODIFY `Serial_No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_post`
--
ALTER TABLE `job_post`
  ADD CONSTRAINT `job_post_ibfk_1` FOREIGN KEY (`business_mail`) REFERENCES `business_registration` (`company_mail`);

--
-- Constraints for table `user_academic_info`
--
ALTER TABLE `user_academic_info`
  ADD CONSTRAINT `user_academic_info_ibfk_1` FOREIGN KEY (`User_mail`) REFERENCES `user_personal_details` (`User_mail`);

--
-- Constraints for table `user_personal_address`
--
ALTER TABLE `user_personal_address`
  ADD CONSTRAINT `user_personal_address_ibfk_1` FOREIGN KEY (`User_mail`) REFERENCES `user_personal_details` (`User_mail`);

--
-- Constraints for table `user_skill`
--
ALTER TABLE `user_skill`
  ADD CONSTRAINT `user_skill_ibfk_1` FOREIGN KEY (`User_mail`) REFERENCES `user_personal_details` (`User_mail`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
