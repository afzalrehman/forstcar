-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2023 at 09:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forstcarusa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `user_id` int(255) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `user_contact` varchar(30) NOT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `registered_on` datetime NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` varchar(255) NOT NULL,
  `email_verfied_at` datetime DEFAULT NULL,
  `token` varchar(300) DEFAULT NULL,
  `reset_expiration` datetime DEFAULT NULL,
  `reset_token` varchar(300) DEFAULT NULL,
  `is_verified` varchar(10) DEFAULT NULL,
  `added_on` datetime NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`user_id`, `user_fullname`, `user_email`, `user_password`, `user_type`, `user_contact`, `user_image`, `registered_on`, `updated_on`, `updated_by`, `email_verfied_at`, `token`, `reset_expiration`, `reset_token`, `is_verified`, `added_on`, `added_by`) VALUES
(51, 'muhammad afzal', 'muhammadafzal1903@gmail.com', '$2y$10$gy9lSgJsbwUQpFm/9YDiaurrC0ZGPKKsrIZpf2FSGbTV562OSna3a', 'Admin', '03172826750', '717368091__MG_0560.JPG', '2023-09-25 11:12:23', '2023-09-25 12:53:25', 'muhammad afzal', '2023-09-25 11:31:56', 'bdfa41f55fe0da62f7458f4ddaf2dc', '2023-09-25 11:30:19', NULL, 'active', '2023-09-25 11:12:23', 'muhammad afzal');

-- --------------------------------------------------------

--
-- Table structure for table `importer_details`
--

CREATE TABLE `importer_details` (
  `importer_id` int(10) NOT NULL,
  `model` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_contact` varchar(50) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_city` varchar(255) DEFAULT NULL,
  `company_state` varchar(255) DEFAULT NULL,
  `company_zipcode` int(10) DEFAULT NULL,
  `company_telephone` varchar(50) DEFAULT NULL,
  `company_email` varchar(50) DEFAULT NULL,
  `company_direct` varchar(255) DEFAULT NULL,
  `company_port_of_entry` varchar(255) DEFAULT NULL,
  `company_vessel_detail` varchar(255) DEFAULT NULL,
  `company_trucking` varchar(255) DEFAULT NULL,
  `company_misc` varchar(255) DEFAULT NULL,
  `total_cost` varchar(255) DEFAULT NULL,
  `custom_frieght` varchar(255) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_details`
--

CREATE TABLE `unit_details` (
  `id` int(11) NOT NULL,
  `year` date NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `wheelbase` varchar(255) NOT NULL,
  `vin` varchar(255) NOT NULL,
  `contact_Name` varchar(255) NOT NULL,
  `contact_Num` varchar(255) NOT NULL,
  `fc_Unit_Cost` varchar(255) NOT NULL,
  `fc_Body` varchar(255) NOT NULL,
  `body_Weight` varchar(255) NOT NULL,
  `fc_Model` varchar(255) NOT NULL,
  `exterior_Dimension` varchar(255) NOT NULL,
  `compressor` varchar(255) NOT NULL,
  `comp_Serial` varchar(255) NOT NULL,
  `voltage` varchar(255) NOT NULL,
  `sound_Decibel` varchar(255) NOT NULL,
  `current_FLA` varchar(255) NOT NULL,
  `refrigerant` varchar(255) NOT NULL,
  `condenser` varchar(255) NOT NULL,
  `solenoid` varchar(255) NOT NULL,
  `condenser_Fan` varchar(255) NOT NULL,
  `interior_Lights` varchar(255) NOT NULL,
  `control_Panel` varchar(255) NOT NULL,
  `circuit_Breaker` varchar(255) NOT NULL,
  `electric_Contactor` varchar(255) NOT NULL,
  `part` varchar(255) NOT NULL,
  `eutectic_Plate` varchar(255) NOT NULL,
  `expansion_Valve` varchar(255) NOT NULL,
  `recovery_Tank` varchar(255) NOT NULL,
  `pressure_Control` varchar(255) NOT NULL,
  `sight_Glass` varchar(255) NOT NULL,
  `filter_Drier` varchar(255) NOT NULL,
  `thermostat` varchar(255) NOT NULL,
  `misc` varchar(255) NOT NULL,
  `air_Curtains` varchar(255) NOT NULL,
  `back_Camera` varchar(255) NOT NULL,
  `body_Graphic_Warp` varchar(255) NOT NULL,
  `add_Unit_Carrier` varchar(255) NOT NULL,
  `hand_Truck_Stand` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `front_S_Image` varchar(255) NOT NULL,
  `back_S_Image` varchar(255) NOT NULL,
  `left_S_Image` varchar(255) NOT NULL,
  `right_S_Image` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `updated_on` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit_details`
--

INSERT INTO `unit_details` (`id`, `year`, `make`, `model`, `wheelbase`, `vin`, `contact_Name`, `contact_Num`, `fc_Unit_Cost`, `fc_Body`, `body_Weight`, `fc_Model`, `exterior_Dimension`, `compressor`, `comp_Serial`, `voltage`, `sound_Decibel`, `current_FLA`, `refrigerant`, `condenser`, `solenoid`, `condenser_Fan`, `interior_Lights`, `control_Panel`, `circuit_Breaker`, `electric_Contactor`, `part`, `eutectic_Plate`, `expansion_Valve`, `recovery_Tank`, `pressure_Control`, `sight_Glass`, `filter_Drier`, `thermostat`, `misc`, `air_Curtains`, `back_Camera`, `body_Graphic_Warp`, `add_Unit_Carrier`, `hand_Truck_Stand`, `other`, `front_S_Image`, `back_S_Image`, `left_S_Image`, `right_S_Image`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(33, '2023-09-25', 'karachi', '876', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '156326453_', '897109553_', '455414540_', '852485176_', '2023-09-25 12:55:36', 'muhammad afzal', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `importer_details`
--
ALTER TABLE `importer_details`
  ADD PRIMARY KEY (`importer_id`);

--
-- Indexes for table `unit_details`
--
ALTER TABLE `unit_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `importer_details`
--
ALTER TABLE `importer_details`
  MODIFY `importer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `unit_details`
--
ALTER TABLE `unit_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
