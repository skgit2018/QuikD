-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2018 at 02:17 PM
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
-- Database: `quik_drivers`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_emergency`
--

CREATE TABLE `driver_emergency` (
  `reg_user_id` int(11) NOT NULL,
  `reg_driver_emergency_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_emergency_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_emergency_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_emergency_landline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_emergency`
--

INSERT INTO `driver_emergency` (`reg_user_id`, `reg_driver_emergency_name`, `reg_driver_emergency_email`, `reg_driver_emergency_mobile`, `reg_driver_emergency_landline`, `reg_user_status`) VALUES
(1, 'ramanareddy', 'ramana@gmail.com', '7893868050', '120-57848596', 1),
(2, 'Ayyappa', 'ayyappa@gmail.com', '9701245410', '120-54784215', 1),
(3, 'subba', 'subba@gmail.com', '8745123012', '120-5479965', 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver_reference`
--

CREATE TABLE `driver_reference` (
  `reg_user_id` int(11) NOT NULL,
  `reg_driver_nominee1_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_nominee1_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_nominee1_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_nominee1_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_nominee2_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_nominee2_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_nominee2_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_nominee2_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_nominee3_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_nominee3_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_nominee3_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_nominee3_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_reference`
--

INSERT INTO `driver_reference` (`reg_user_id`, `reg_driver_nominee1_name`, `reg_driver_nominee1_email`, `reg_driver_nominee1_mobile`, `reg_driver_nominee1_address`, `reg_driver_nominee2_name`, `reg_driver_nominee2_email`, `reg_driver_nominee2_mobile`, `reg_driver_nominee2_address`, `reg_driver_nominee3_name`, `reg_driver_nominee3_email`, `reg_driver_nominee3_mobile`, `reg_driver_nominee3_address`, `reg_user_status`) VALUES
(1, 'ayyappa', 'ayyappa@gmail.com', '9701234789', 'Borabanda', 'krishna', 'krishna@gmail.com', '9494599099', 'Ongole', 'sai', 'sai@gmail.com', '8745123568', 'Addanki', 1),
(2, 'ramakrishna', 'ram@gmail.com', '9493496595', 'Chimakurthy', 'venkat', 'venkat@gmail.com', '9494599099', 'Vijayawada', 'sai', 'sai@gmail.com', '8745412568', 'Addanki', 1),
(3, 'ayyappa', 'ayyappa@gmail.com', '9702457812', 'guntur', 'rajesh', 'rajesh@gmail.com', '8456243521', 'kanigiri', 'siva', 'siva@gmail.com', '9457841256', 'sn padu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(84, '2014_10_12_000000_create_users_table', 1),
(85, '2014_10_12_100000_create_password_resets_table', 1),
(86, '2018_08_08_105142_create_signups_table', 1),
(87, '2018_08_16_123547_create_qdm_drivers_info_table', 1),
(88, '2018_08_18_114015_create_qdm_customer_info_table', 1),
(89, '2018_08_29_111619_create_qdm_driver_idverify_table', 1),
(90, '2018_08_29_115638_create_qdm_driver_bank_details_table', 1),
(91, '2018_09_04_125359_create_qdm_vehicle_info_table', 1),
(92, '2018_09_05_113245_create_driver_reference_table', 1),
(93, '2018_09_05_113308_create_driver_emergency_table', 1),
(94, '2018_09_05_133738_create_qdm_driver_verify_table', 1),
(95, '2018_09_11_163356_create_qdm_driver_pool_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qdm_customer_info`
--

CREATE TABLE `qdm_customer_info` (
  `reg_user_id` int(11) NOT NULL,
  `reg_customer_first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_emergency_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_emergency_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_emergency_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_customer_emergency_landline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qdm_customer_info`
--

INSERT INTO `qdm_customer_info` (`reg_user_id`, `reg_customer_first_name`, `reg_customer_last_name`, `reg_customer_gender`, `reg_customer_address`, `reg_customer_street`, `reg_customer_location`, `reg_customer_city`, `reg_customer_state`, `reg_customer_pincode`, `reg_customer_emergency_name`, `reg_customer_emergency_email`, `reg_customer_emergency_mobile`, `reg_customer_emergency_landline`, `reg_user_status`) VALUES
(4, 'Ravindra', 'Chinnapureddy', 'Male', '6-64 Velugu vari palem', 'main road', 'boddikura padu', 'ongole', '1', '523253', 'subbareddy', 'chinnapureddy', '9652513602', '120-547895', 1),
(5, 'Kumar', 'Gujjula', 'Male', '1-52 nagar', 'school side line', 'guntur', 'guntur', '244', '523014', 'nagireddy', 'nagi@gmail.com', '874512458', '202-54789544', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qdm_drivers_info`
--

CREATE TABLE `qdm_drivers_info` (
  `reg_user_id` int(11) NOT NULL,
  `reg_driver_firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qdm_drivers_info`
--

INSERT INTO `qdm_drivers_info` (`reg_user_id`, `reg_driver_firstname`, `reg_driver_lastname`, `reg_driver_gender`, `reg_driver_address`, `reg_driver_street`, `reg_driver_location`, `reg_driver_city`, `reg_driver_state`, `reg_driver_pincode`, `reg_driver_status`) VALUES
(1, 'Ramakrishna', 'Chinnapureddy', 'Male', 'sr nagar', 'Andhra Bank Sr nagar', 'hyderabad', 'hyderabad', 'Hyderabad', '500038', 1),
(2, 'Ramanareddy', 'Bogasamudram', 'Male', '6-64 Ongole', 'sathyam theater line', 'Ongole', 'Ongole', 'Secundarabad', '523002', 1),
(3, 'Krishna', 'Kadava', 'Male', '2-54 ramalayam temple', 'ramalayam  line', 'chimakurthy', 'ongole', 'Secundarabad', '523012', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qdm_driver_bank_details`
--

CREATE TABLE `qdm_driver_bank_details` (
  `reg_user_id` int(11) NOT NULL,
  `reg_driver_bank_account_holder` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_bank_account_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_bank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_bank_branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_bank_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_bank_ifsc_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qdm_driver_bank_details`
--

INSERT INTO `qdm_driver_bank_details` (`reg_user_id`, `reg_driver_bank_account_holder`, `reg_driver_bank_account_no`, `reg_driver_bank_name`, `reg_driver_bank_branch`, `reg_driver_bank_location`, `reg_driver_bank_ifsc_code`, `reg_driver_status`) VALUES
(1, 'ramakrishna', '50100182686189', 'HDFC', 'Addanki', 'Addanki', 'HDFC003297', 1),
(2, 'ramanareddy', '50124578954124', 'SBI', 'Gangavaram', 'Gangavaram', 'SBIN0011116', 1),
(3, 'krishna', '010100245480155', 'Andhra Bank', 'Ongole', 'Ongole', 'ABN001525', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qdm_driver_idverify`
--

CREATE TABLE `qdm_driver_idverify` (
  `reg_user_id` int(11) NOT NULL,
  `reg_driver_experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_aadhar_card` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_pancard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_license` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qdm_driver_idverify`
--

INSERT INTO `qdm_driver_idverify` (`reg_user_id`, `reg_driver_experience`, `reg_driver_aadhar_card`, `reg_driver_pancard`, `reg_driver_license`, `reg_driver_status`) VALUES
(1, '2', '874596547412', 'ASXD457458', '2457896587', 1),
(2, '5', '145789658547', 'RBCSD451247', '4578214578', 1),
(3, '7', '457856457854', 'SCD45123548', '4512478965', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qdm_driver_pool`
--

CREATE TABLE `qdm_driver_pool` (
  `reg_user_id` int(11) NOT NULL,
  `reg_driver_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_carlist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_updated_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qdm_driver_pool`
--

INSERT INTO `qdm_driver_pool` (`reg_user_id`, `reg_driver_name`, `reg_driver_time`, `reg_driver_carlist`, `reg_driver_payment`, `reg_driver_updated_date`, `reg_driver_status`) VALUES
(1, 'Ongole', 'on', 'on', 'on', '11-09-2018 16:51:59', 1),
(1, 'HYderabad', 'on', 'on', 'on', '11-09-2018 16:52:53', 1),
(1, 'Hyd', '12HR', 'Chevrolet', 'Credit Card', '11-09-2018 17:04:41', 1),
(1, 'Fgdfg', '12HR', 'Chevrolet', 'Debit Card', '11-09-2018 17:42:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qdm_driver_verify`
--

CREATE TABLE `qdm_driver_verify` (
  `reg_user_id` int(11) NOT NULL,
  `reg_driver_verification_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_verification_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_verification_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_driver_verification_landline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qdm_driver_verify`
--

INSERT INTO `qdm_driver_verify` (`reg_user_id`, `reg_driver_verification_name`, `reg_driver_verification_email`, `reg_driver_verification_mobile`, `reg_driver_verification_landline`, `reg_user_status`) VALUES
(1, 'Ramakrishna', 'Ram@gmail.com', '9493496595', '102-5478965', 1),
(2, 'Ramanareddy', 'Ramana@gmail.com', '7893868050', '120-547854685', 1),
(3, 'Krishna', 'Krishna@gmail.com', '9494599099', '142-2154569', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qdm_users`
--

CREATE TABLE `qdm_users` (
  `reg_user_id` int(10) UNSIGNED NOT NULL,
  `reg_user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_pwd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_account_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_otp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_created_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_updated_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qdm_users`
--

INSERT INTO `qdm_users` (`reg_user_id`, `reg_user_name`, `reg_user_pwd`, `reg_user_email`, `reg_mobile_number`, `reg_user_account_type`, `reg_user_otp`, `reg_user_ip_address`, `reg_user_created_date`, `reg_user_updated_date`, `reg_user_status`) VALUES
(1, 'Ramakrishna', '$2y$10$94F3MBlt9Y/3ffWNEMshzOVilk2Mscpi0x24xK6X/47Zw389joRg6', 'ram@gmail.com', '9493496595', 'driver', '8743', '127.0.0.1', '11-09-2018 15:22:37', '11-09-2018 15:22:37', 1),
(2, 'Ramanareddy', '$2y$10$gtp0w1pSc0waQv4vPmJRneFZeVdgtq7PHfA2v88UzDhaacE641yg.', 'ramana@gmail.com', '7893868050', 'driver', '2804', '127.0.0.1', '11-09-2018 15:34:53', '11-09-2018 15:34:53', 1),
(3, 'Krishna', '$2y$10$nqpe8WHsTwECqGKIyA4JGO85LoXtp0cBS0jLs8MktHgOpM2af0rxS', 'krishna@gmail.com', '9494599099', 'driver', '2722', '127.0.0.1', '11-09-2018 15:44:31', '11-09-2018 15:44:31', 1),
(4, 'Ravindra', '$2y$10$dY9rOTOmUAsA7d7kt52oc.AG3MGi1rx1fttUJcF6ujz5JmVKoLQ9C', 'ravi@gmail.com', '8499904799', 'user', '2069', '127.0.0.1', '11-09-2018 15:57:12', '11-09-2018 15:57:12', 1),
(5, 'Kumar', '$2y$10$iToOix0Cop6vgtwu/IiuwOi3RazpJCOIq7kbraMhGBWX3QuIdC8qC', 'kumar@gmail.com', '7799399676', 'user', '2810', '127.0.0.1', '11-09-2018 16:03:54', '11-09-2018 16:03:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qdm_vehicle_info`
--

CREATE TABLE `qdm_vehicle_info` (
  `reg_user_id` int(11) NOT NULL,
  `reg_vehicle_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_make` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_rent_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_agency_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_agency_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_owner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_owner_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_owner_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_owner_landline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_contact_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_contact_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_contact_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vehicle_contact_landline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qdm_vehicle_info`
--

INSERT INTO `qdm_vehicle_info` (`reg_user_id`, `reg_vehicle_type`, `reg_vehicle_make`, `reg_vehicle_model`, `reg_vehicle_year`, `reg_vehicle_rent_details`, `reg_vehicle_agency_name`, `reg_vehicle_agency_address`, `reg_vehicle_owner_name`, `reg_vehicle_owner_email`, `reg_vehicle_owner_mobile`, `reg_vehicle_owner_landline`, `reg_vehicle_contact_name`, `reg_vehicle_contact_email`, `reg_vehicle_contact_mobile`, `reg_vehicle_contact_landline`, `reg_user_status`) VALUES
(4, 'Audi', 'Some', '200', '2015', 'good condition', 'kumar', '5-52lalagooda', 'ravi', 'ravi@gmail.com', '8499904799', '102-245799688', 'ravi', 'ravi@gmail.com', '8499904799', '120-542248558', 1),
(5, 'bmw', 'source', 'y245', '2017', 'good condtion', 'prathap', 'lalbangla', 'kumar', 'kumar@gmail.com', '8745896458', '104-542478596', 'kumar', 'kumar@gmail.com', '7548596585', '420-5745855', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `qdm_users`
--
ALTER TABLE `qdm_users`
  ADD PRIMARY KEY (`reg_user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `qdm_users`
--
ALTER TABLE `qdm_users`
  MODIFY `reg_user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
