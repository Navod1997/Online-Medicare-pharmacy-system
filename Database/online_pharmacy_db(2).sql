-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 05:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_pharmacy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_type` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `front_display` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `c_type`, `time`, `front_display`) VALUES
(1, 'Heart', 'Medicine', '2022-07-06 22:54:04', 1),
(3, 'Central Nervous System', 'Medicine', '2021-07-06 22:58:15', 1),
(6, 'Gastro-Intestinal', 'Medicine', '2022-09-16 04:08:13', 1),
(8, 'Infections', 'Medicine', '2022-07-06 23:15:45', 0),
(9, 'Malignat disease and immunosuppressions', 'Medicine', '2022-07-06 23:18:08', 1),
(73, 'Ear nose oropharynx', 'Medicine', '2022-09-16 19:48:49', 0),
(74, 'Gastro intestinal system', 'Medicine', '2022-09-16 19:49:31', 0),
(75, 'Eye', 'Medicine', '2022-09-16 19:50:15', 0),
(76, 'First Aid', 'Mediacal Divice', '2022-09-16 19:51:20', 1),
(77, 'Health devices', 'Mediacal Divice', '2022-09-16 19:51:45', 1),
(78, 'Supports Braces', 'Mediacal Divice', '2022-09-16 19:52:18', 1),
(79, 'Mother and baby ', 'Wellenss', '2022-09-16 19:53:32', 0),
(80, 'Cough cold and allergy', 'Wellenss', '2022-11-10 19:53:58', 1),
(81, 'Beauty supplements', 'Wellenss', '2022-11-10 19:54:20', 1),
(83, 'Preventive care', 'Wellenss', '2022-11-10 19:55:52', 1),
(84, 'Sexual wellness', 'Wellenss', '2022-11-12 19:56:16', 0),
(85, 'Healthcare', 'Aurwedha', '2022-11-19 11:44:34', 1),
(86, 'Food supplements and immunity', 'Aurwedha', '2022-11-12 19:57:42', 0),
(87, 'Sexual wellness ayurveda', 'Aurwedha', '2022-11-12 19:58:05', 0),
(88, 'Nourishment', 'Personal Care', '2022-11-12 19:58:41', 0),
(90, 'Skin care', 'Personal Care', '2022-11-12 19:59:58', 0),
(91, 'Hand & foot care', 'Personal Care', '2022-11-12 20:00:44', 0),
(92, 'Beauty', 'Other', '2022-11-12 20:01:23', 0),
(93, 'Covid essentials', 'Other', '2022-09-16 20:01:53', 0),
(97, 'ggggg', 'Mediacal Divice', '2022-11-30 16:24:48', 0),
(99, 'kal', 'Other', '2022-11-30 16:26:41', 0),
(101, 'test10', 'Mediacal Divice', '0000-00-00 00:00:00', 1),
(105, 'Apple', 'Personal Care', '2023-05-21 02:27:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `delivary_citys`
--

CREATE TABLE `delivary_citys` (
  `city_id` int(50) NOT NULL,
  `city_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivary_citys`
--

INSERT INTO `delivary_citys` (`city_id`, `city_name`) VALUES
(3, 'Matara'),
(4, 'Mirissa'),
(5, 'Waligama'),
(11, 'Dondara'),
(12, 'Thihagoda'),
(13, 'abcd'),
(14, 'colombo'),
(15, 'rbrbrb');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `category_type` varchar(50) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `data_path` varchar(300) NOT NULL,
  `quantity` int(50) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Available',
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `o_max_qut` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `category_type`, `discription`, `data_path`, `quantity`, `unit_price`, `status`, `last_update`, `o_max_qut`) VALUES
(1, 'DIOVAN 160MG TABS', 'Heart', 'Details, Congestive Heart Failure: Diovan 160 mg Tablet is used in the treatment of congestive heart failure to prevent the narrowing of blood vessels and to allow the blood to flow smoothly.\r\nHypertension: Diovan 160 mg Tablet is used in the treatment of hypertension to decrease the blood pressure.', '7921816633590012022-09-16.jpg', 447, '219.00', 'Available', '2023-05-21 02:24:41', 5),
(2, 'BRILINTA 90MG TAB 56S\n', 'Heart', 'Uses, This medication is used to treat high blood pressure (hypertension). Side Effects, Dizziness or lightheadedness may occur as your body adjusts to the medication. \r\nWhen not to use, It is contraindicated in patients with known hypersensitivity to the drug.', '6213716633591372022-09-16.jpg', 0, '352.54', 'Available', '2022-11-29 05:27:23', 5),
(3, 'DISPRIN TAB 120S', 'Heart', 'Application/ Dosage: Dispirin dissolves in water, which makes it easier to dissolve, with no unpleasant aftertaste\r\nUsed to relieve pain and inflammation of sprains and strains, rheumatic pain, sciatica, backache, fibrositis, muscular aches and pains, joint swelling, and stiffness', '5803916633592482022-09-16.jpg', 130, '4.00', 'Available', '2022-11-30 19:35:33', 52),
(4, 'PLAVIX 75MG TABS 28 S', 'Heart', 'Composition: \"Active ingredient clopidogrel hydrogen sulfate. \r\nPlavix 75 mg film-coated tablets Each film-coated tablet contains 75 mg of clopidogrel (as hydrogen sulphate).\r\nCore: Mannitol (E421) Macrogol 6000 Microcrystalline cellulose Hydrogenated castor oil Low substituted hydroxypropylcellulose Coating: Hypromellose (E464) Lactose monohydrate Triacetin (E1518) Titanium dioxide (E171) Red iron oxide (E172) Polishing agent: Carnauba wax\"\r\n', '7361716633593402022-09-16.jpg', 154, '41.30', 'Available', '2022-11-21 03:47:11', 17),
(5, 'CLOPIVAS 75MG', 'Heart', 'Uses, This medication is used to treat high blood pressure (hypertension). Side Effects, Dizziness or lightheadedness may occur as your body adjusts to the medication. \r\nWhen not to use, It is contraindicated in patients with known hypersensitivity to the drug.', '2539916633594362022-09-16.png', 241, '18.90', 'Available', '2022-09-16 20:17:16', 4),
(6, 'COVERSYL 2.5MG', 'Heart', 'The name of your medicine is COVERSYL. The medicine contains the active ingredient perindopril arginine. Perindopril belongs to a \r\ngroup of medicines called angiotensin converting enzyme (ACE) inhibitors.', '4908716633597312022-09-16.jpg', 244, '35.30', 'Available', '2022-09-17 09:10:35', 3),
(7, 'Quinapril (Accupril)', 'Heart', 'Quinapril, sold under the brand name Accupril among others, is a medication used to treat high blood pressure, heart failure, and diabetic kidney disease. It is a reasonable initial treatment for high blood pressure. It is taken by mouth. Common side effects include headaches, dizziness, feeling tired, and cough', '8172716633601882022-09-16.jpg', 241, '541.00', 'Available', '2022-09-16 20:29:48', 7),
(9, 'SOFTA IV ROUND PLASTER', 'First Aid', 'These plasters are designed to cushion and protect and have a low allergy latex free adhesive\r\nThe material is comfortable and stretches with movement.', '4002016633609472022-09-16.jpg', 72, '84.00', 'Available', '2022-11-21 03:45:42', 4),
(10, 'SOFTA FIRST AID PLASTER MULTI COLOUR ', 'First AID', '20 vibrant multi-coloured plasters per pack\r\nPerfect for children\r\nSoft and gentle on delicate skin\r\nProtects cuts and grazes,even in wet conditions', '2578916633610782022-09-16.jpg', 430, '216.00', 'Available', '2022-09-16 20:44:38', 5),
(16, 'Clonazepam', 'Central Nervous System', 'Clonazepam, sold under the brands Rivotril and Klonopin among others, is a medication used to prevent and treat seizures, panic disorder, anxiety, and the movement disorder known as akathisia. It is a tranquilizer of the benzodiazepine class. It is typically taken by mouth', '6929116633604252022-09-16.jpg', 539, '164.00', 'Available', '2022-11-29 05:30:29', 8),
(20, 'Gastrointestinal Infectious Diseases', 'Gastro-Intestinal', 'If you experience persistent heartburn, stomach acid, or ulcers, your doctor may prescribe a proton pump inhibitor (PPI), such as Nexium, Prevacid, Prilosec, Protonix, or Aciphex. These medications are used to treat people with heartburn, stomach or intestinal ulcers, or excess stomach acid.', '5284016633606552022-09-16.jpg', 321, '375.00', 'Available', '2022-09-16 20:37:35', 4),
(56, 'apple', 'Eye', 'sjsjsjsjsssdss', '16698704032022-12-01.png', 537, '451.00', 'Available', '2023-05-21 02:24:41', 51);

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `order_item_id` int(200) NOT NULL,
  `oder_id` int(100) NOT NULL,
  `iteam_id` int(200) NOT NULL,
  `qty` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`order_item_id`, `oder_id`, `iteam_id`, `qty`) VALUES
(44, 118, 1, 5),
(45, 118, 2, 4),
(46, 118, 3, 2),
(47, 118, 4, 5),
(48, 120, 1, 5),
(49, 120, 2, 4),
(50, 120, 3, 2),
(57, 126, 3, 4),
(58, 128, 3, 4),
(59, 128, 1, 14),
(69, 132, 1, 1),
(71, 132, 1, 1),
(72, 132, 1, 1),
(73, 132, 1, 1),
(74, 132, 1, 1),
(75, 132, 1, 1),
(76, 132, 1, 1),
(77, 132, 1, 1),
(78, 132, 1, 1),
(79, 132, 1, 1),
(80, 132, 1, 1),
(81, 132, 1, 1),
(82, 132, 1, 1),
(102, 157, 2, 1),
(105, 160, 1, 2),
(106, 160, 2, 1),
(107, 160, 10, 2),
(108, 160, 4, 2),
(109, 161, 4, 1),
(123, 185, 4, 1),
(124, 185, 16, 4),
(125, 186, 4, 1),
(126, 186, 16, 4),
(127, 187, 4, 1),
(128, 187, 16, 4),
(135, 195, 1, 3),
(136, 196, 1, 3),
(137, 197, 1, 1),
(138, 198, 16, 1),
(139, 198, 2, 1),
(140, 198, 3, 2),
(141, 198, 5, 5),
(142, 198, 3, 2),
(143, 198, 5, 5),
(144, 198, 6, 2),
(145, 198, 7, 4),
(146, 198, 3, 2),
(147, 198, 5, 5),
(148, 198, 6, 2),
(149, 198, 7, 4),
(150, 199, 1, 2),
(151, 199, 2, 2),
(152, 200, 1, 1),
(153, 201, 1, 1),
(154, 202, 1, 3),
(155, 202, 9, 1),
(156, 170, 4, 2),
(157, 170, 1, 2),
(158, 203, 20, 10),
(159, 204, 1, 4),
(160, 207, 1, 10),
(161, 220, 1, 1),
(162, 221, 1, 1),
(163, 222, 1, 1),
(164, 223, 1, 1),
(165, 224, 1, 4),
(166, 225, 1, 1),
(167, 226, 1, 1),
(168, 227, 1, 1),
(169, 228, 1, 1),
(170, 229, 1, 1),
(187, 250, 5, 2),
(188, 251, 1, 1),
(189, 252, 1, 2),
(190, 253, 1, 1),
(192, 257, 10, 2),
(193, 258, 1, 1),
(194, 258, 16, 1),
(195, 258, 2, 1),
(196, 259, 5, 1),
(197, 260, 1, 1),
(198, 260, 2, 4),
(199, 261, 16, 12),
(200, 262, 4, 2),
(201, 263, 1, 1),
(202, 264, 1, 2),
(203, 265, 1, 2),
(204, 266, 2, 2),
(205, 266, 9, 1),
(206, 267, 4, 1),
(207, 268, 2, 2),
(208, 269, 16, 3),
(209, 270, 3, 2),
(210, 271, 1, 2),
(211, 273, 56, 1),
(212, 274, 1, 3),
(213, 274, 56, 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `order_total` decimal(10,2) NOT NULL,
  `status` varchar(200) NOT NULL,
  `date_and_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` varchar(200) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `delivery_type` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `orderType` varchar(20) NOT NULL,
  `prescriptionImg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_total`, `status`, `date_and_time`, `address`, `first_name`, `last_name`, `phone_number`, `e_mail`, `delivery_type`, `city`, `orderType`, `prescriptionImg`) VALUES
(84, 8, '10000.00', 'return', '2022-04-15 13:17:00', '335/4,matara,sri lanka', '.Navod.', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'cash_on_delivery', 'makandura', '', ''),
(92, 8, '10000.00', 'return', '2022-04-15 13:27:36', '335/4, matara,sri lanka', '.Navod.', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'cash_on_delivery', 'makandura', '', ''),
(112, 8, '1000.00', 'deliver', '2022-04-16 18:02:26', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(113, 8, '1000.00', 'pending', '2022-04-16 18:16:16', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(114, 8, '1000.00', 'pending', '2022-04-17 18:16:16', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(115, 8, '1000.00', 'pending', '2022-04-17 18:33:44', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(116, 8, '1000.00', 'pending', '2021-04-16 18:33:44', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(117, 8, '1000.00', 'pending', '2021-04-16 18:34:41', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(118, 8, '1000.00', 'pending', '2022-04-16 18:34:41', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(119, 8, '1000.00', 'pending', '2022-04-16 18:36:53', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(120, 8, '1000.00', 'pending', '2022-04-16 18:36:53', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(121, 8, '1000.00', 'pending', '2022-04-16 18:37:01', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(122, 8, '1000.00', 'pending', '2022-04-16 18:37:01', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(123, 8, '1000.00', 'pending', '2022-04-16 18:44:09', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(124, 8, '1000.00', 'pending', '2022-04-16 18:44:09', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(125, 8, '1000.00', 'pending', '2022-04-16 18:45:52', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(126, 8, '1000.00', 'pending', '2022-04-16 18:45:52', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(127, 8, '1000.00', 'pending', '2022-04-16 18:47:47', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(128, 8, '1000.00', 'pending', '2022-04-16 18:48:26', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(129, 8, '1000.00', 'pending', '2022-04-16 18:50:30', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(130, 8, '1000.00', 'pending', '2022-04-17 14:38:32', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', 'makandura', '1116398383122021-12-18.png'),
(131, 8, '1000.00', 'reject', '2022-04-17 14:43:03', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', 'prescription', '816398385832021-12-18.png'),
(132, 8, '1000.00', 'pending', '2022-04-20 16:59:39', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(133, 8, '1000.00', 'pending', '2022-04-20 17:25:29', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(134, 8, '1000.00', 'pending', '2022-04-20 17:25:34', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(135, 8, '1000.00', 'pending', '2021-12-21 19:45:02', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(136, 8, '1000.00', 'pending', '2021-12-21 19:45:23', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(137, 8, '1000.00', 'pending', '2021-12-21 19:46:00', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(138, 8, '1000.00', 'pending', '2021-12-21 19:46:03', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(139, 8, '1000.00', 'pending', '2021-12-21 19:46:34', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(140, 8, '1000.00', 'pending', '2021-12-21 20:15:20', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(141, 8, '1000.00', 'pending', '2021-12-21 20:34:33', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(142, 8, '1000.00', 'pending', '2021-12-22 07:02:47', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(143, 8, '1000.00', 'pending', '2021-12-22 07:05:47', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(144, 8, '1000.00', 'pending', '2021-12-22 07:16:41', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(145, 8, '1000.00', 'pending', '2021-12-22 20:36:01', 'No1,abc', 'Navod', 'kalhara', 715527077, 'kalhara@gmail.com', 'takeaway', 'makandura', '', ''),
(157, 8, '21258.04', 'reject', '2021-12-22 21:39:36', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717057, 'navodkalhara@gmail.com', 'takeaway', '', '', ''),
(158, 8, '21258.04', 'pending', '2021-12-22 21:40:38', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717057, 'navodkalhara@gmail.com', 'cash_on_delivery', 'wewwfewfw', '', ''),
(159, 8, '22592.04', 'pending', '2021-12-22 21:45:13', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717057, 'navodkalhara@gmail.com', 'cash_on_delivery', 'matara', 'itemorder', ''),
(160, 8, '27914.04', 'pending', '2021-12-22 21:49:59', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717057, 'navodkalhara@gmail.com', 'takeaway', 'wewwfewfw', 'itemorder', ''),
(161, 8, '2661.00', 'pending', '2021-12-22 22:01:15', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'Choose delivery meth', 'makadura', 'itemorder', ''),
(162, 8, '0.00', 'pending', '2021-12-23 11:53:24', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'Choose delivery meth', 'wewwfewfw', 'itemorder', ''),
(163, 8, '0.00', 'pending', '2021-12-23 11:53:37', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'Choose delivery meth', 'wewwfewfw', 'itemorder', ''),
(164, 8, '0.00', 'pending', '2021-12-23 11:54:07', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'Choose delivery meth', 'wewwfewfw', 'itemorder', ''),
(165, 8, '0.00', 'pending', '2021-12-23 11:54:20', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'Choose delivery meth', 'wewwfewfw', 'itemorder', ''),
(166, 8, '0.00', 'pending', '2021-12-23 11:54:35', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'Choose delivery meth', 'wewwfewfw', 'itemorder', ''),
(167, 8, '0.00', 'pending', '2021-12-23 11:55:06', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'Choose delivery meth', 'wewwfewfw', 'itemorder', ''),
(168, 8, '0.00', 'pending', '2021-12-23 11:55:33', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'Choose delivery meth', 'wewwfewfw', 'itemorder', ''),
(169, 8, '0.00', 'pending', '2021-12-23 11:55:49', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'Choose delivery meth', 'wewwfewfw', 'itemorder', ''),
(170, 8, '0.00', 'pending', '2022-01-02 05:33:21', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara@gmail.com', 'takeaway', 'wewwfewfw', 'prescription', '816411016012022-01-02.jpg'),
(181, 8, '0.00', 'pending', '2022-01-06 08:14:26', '335/4, matara,sri lanka', 'nila', 'kalhara', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', 'wewwfewfw', 'itemorder', ''),
(182, 8, '0.00', 'pending', '2022-01-06 08:19:41', '335/4, matara,sri lanka', 'nila', 'kalhara', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', 'wewwfewfw', 'itemorder', ''),
(183, 8, '0.00', 'pending', '2022-01-06 08:20:40', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'wewwfewfw', 'itemorder', ''),
(184, 8, '0.00', 'pending', '2022-01-06 08:23:17', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'wewwfewfw', 'itemorder', ''),
(185, 8, '9285.00', 'pending', '2022-01-06 13:08:30', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', '', 'itemorder', ''),
(186, 8, '9285.00', 'pending', '2022-01-06 13:17:21', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', '', 'itemorder', ''),
(187, 8, '9285.00', 'pending', '2022-01-06 13:17:29', '335/4, matara,sri lanka', 'Navod', 'kalhara', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', '', 'itemorder', ''),
(188, 8, '0.00', 'pending', '2022-01-07 17:21:42', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'takeaway', '', 'itemorder', ''),
(190, 8, '10000.02', 'pending', '2022-01-07 17:27:26', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', '', 'itemorder', ''),
(191, 8, '30000.06', 'pending', '2022-01-07 17:32:11', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', '', 'itemorder', ''),
(192, 8, '30000.06', 'pending', '2022-01-07 17:33:18', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'takeaway', '', 'itemorder', ''),
(193, 8, '30000.06', 'pending', '2022-01-07 17:34:15', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', 'hidden', 'itemorder', ''),
(194, 8, '30000.06', 'pending', '2022-01-07 17:39:31', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', 'hidden', 'itemorder', ''),
(195, 8, '30000.06', 'reject', '2022-01-07 17:50:18', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'hidden', 'itemorder', ''),
(196, 8, '30000.06', 'reject', '2022-01-07 18:02:48', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'hidden', 'itemorder', ''),
(197, 8, '10000.02', 'deliver', '2022-01-07 18:56:41', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'hidden', 'itemorder', ''),
(198, 8, '2914.00', 'pending', '2022-01-08 14:19:29', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'takeaway', '', 'itemorder', ''),
(199, 8, '22516.04', 'reject', '2022-01-09 11:52:03', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', '', 'itemorder', ''),
(200, 8, '10000.02', 'pending', '2022-01-09 11:55:11', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', '', 'itemorder', ''),
(201, 8, '10000.02', 'pending', '2022-01-09 12:01:16', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'takeaway', '', 'itemorder', ''),
(202, 8, '30633.06', 'reject', '2022-01-09 18:07:35', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', '', 'itemorder', ''),
(203, 17, '100.00', 'pending', '2022-01-10 11:36:39', '658, kopiyawaththa, Kadawatha', 'Lakshan', 'karunadhara', 714036488, 'lkarunadhara@gmail.com', 'cash_on_delivery', 'hidden', 'itemorder', ''),
(204, 17, '40000.08', 'pending', '2022-01-10 11:41:31', '153, kopiyawaththa, Kadawatha', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', '', 'itemorder', ''),
(205, 17, '40000.08', 'pending', '2022-01-10 11:44:22', '153, kopiyawaththa, Kadawatha', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'Choose delivery meth', '', 'itemorder', ''),
(206, 17, '40000.08', 'pending', '2022-01-10 11:44:38', '153, kopiyawaththa, Kadawatha', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'Choose delivery meth', '', 'itemorder', ''),
(207, 17, '0.00', 'return', '2022-01-10 11:51:14', '153, kopiyawaththa, Kadawatha', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', 'makandura', 'prescription', '1716418154742022-01-10.png'),
(208, 17, '0.00', 'reject', '2022-01-10 11:51:52', '153, kopiyawaththa, Kadawatha', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', 'makadura', 'prescription', '1716418155122022-01-10.png'),
(219, 17, '10000.02', 'pending', '2022-05-19 14:46:55', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'Choose delivery meth', '', 'itemorder', ''),
(220, 17, '10000.02', 'pending', '2022-05-19 14:49:28', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', '', 'itemorder', ''),
(221, 17, '10000.02', 'pending', '2022-05-19 14:52:39', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'cash_on_delivery', '', 'itemorder', ''),
(222, 17, '10000.02', 'pending', '2022-05-19 14:53:42', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', '', 'itemorder', ''),
(223, 17, '10000.02', 'pending', '2022-05-19 14:55:56', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', '', 'itemorder', ''),
(224, 17, '40000.08', 'pending', '2022-05-19 14:59:01', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', '', 'itemorder', ''),
(225, 17, '10000.02', 'pending', '2022-05-19 16:19:09', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', '', 'itemorder', ''),
(226, 17, '10000.02', 'pending', '2022-05-19 16:24:25', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', '', 'itemorder', ''),
(227, 17, '10000.02', 'pending', '2022-05-19 16:25:34', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', '', 'itemorder', ''),
(228, 17, '10000.02', 'pending', '2022-05-19 16:26:40', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', 'colombo', 'itemorder', ''),
(229, 17, '10000.02', 'pending', '2022-05-19 16:27:47', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'cash_on_delivery', 'hidden', 'itemorder', ''),
(230, 17, '10000.02', 'deliver', '2022-05-19 16:28:33', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', 'colombo', 'itemorder', ''),
(231, 17, '0.00', 'pending', '2022-05-20 16:30:44', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'takeaway', 'colombo', 'prescription', '1716418322442022-01-10.jpg'),
(232, 17, '0.00', 'pending', '2022-05-21 16:32:31', 'sdfasfasd', 'Lakshan', 'karunadhara', 754036488, 'lkarunadhara@gmail.com', 'cash_on_delivery', 'colombo', 'prescription', '1716418323512022-01-10.png'),
(233, 8, '10000.02', 'pending', '2022-05-20 17:13:32', '335/4, matara,sri lanka', 'Navod', 'kalhara5', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', 'kamburupitiya', 'itemorder', ''),
(234, 8, '0.00', 'pending', '2022-05-21 03:25:39', '335/4, matara,sri lanka', 'sachin', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'kamburupitiya', 'itemorder', ''),
(235, 8, '0.00', 'deliver', '2022-05-21 03:27:58', '335/4, matara,sri lanka', 'sachin', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'colombo', 'itemorder', ''),
(237, 8, '1656.00', 'deliver', '2022-05-22 15:17:42', '335/4, matara,sri lanka', 'sachin', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', 'kamburupitiya', 'itemorder', ''),
(238, 8, '1656.00', 'pending', '2022-05-22 15:18:02', '335/4, matara,sri lanka', 'sachin', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'kamburupitiya', 'itemorder', ''),
(249, 8, '0.00', 'pending', '2022-07-12 04:55:23', '335/4, matara,sri lanka', 'sachin1', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'kamburupitiya', 'prescription', '816576017232022-07-12.jpg'),
(250, 8, '11302.00', 'pending', '2022-09-03 08:29:11', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', 'kamburupitiya', 'itemorder', ''),
(251, 8, '0.00', 'pending', '2022-09-14 16:28:09', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', 'kamburupitiya', 'itemorder', ''),
(252, 8, '928.48', 'pending', '2022-09-14 16:35:04', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', 'kamburupitiya', 'itemorder', ''),
(253, 8, '464.24', 'pending', '2022-09-16 04:30:40', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', 'kamburupitiya', 'itemorder', ''),
(254, 8, '0.00', 'pending', '2022-09-16 05:42:02', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'Choose delivery meth', 'kamburupitiya', 'prescription', '816633069222022-09-16.png'),
(257, 35, '0.00', 'deliver', '2022-09-16 06:17:50', 'Wariyapola', 'Subodha', 'Rathnayake', 764998655, 'subodha94@gmail.com', 'cash_on_delivery', 'matara', 'prescription', '3516633090702022-09-16.png'),
(258, 8, '3378.24', 'pending', '2022-09-16 08:38:19', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', '', 'kamburupitiya', 'itemorder', ''),
(259, 8, '5651.00', 'pending', '2022-09-16 08:41:14', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'maharagama', 'itemorder', ''),
(260, 35, '5496.24', 'pending', '2022-09-16 09:22:27', 'Baddrawatta, Wariyapola', 'Subodha', 'Rathnayake', 764998655, 'subodha94@gmail.com', 'cash_on_delivery', 'matara', 'itemorder', ''),
(261, 35, '19872.00', 'accept', '2022-09-16 09:25:11', 'Baddrawatta, Wariyapola', 'Subodha', 'Rathnayake', 764998655, 'subodha94@gmail.com', 'takeaway', 'matara', 'itemorder', ''),
(262, 8, '0.00', 'deliver', '2022-09-17 09:07:26', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', 'kamburupitiya', 'prescription', '816634056462022-09-17.jpg'),
(263, 8, '219.00', 'pending', '2022-11-20 09:42:46', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'kamburupitiya', 'itemorder', ''),
(264, 8, '438.00', 'pending', '2022-11-21 03:10:31', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', 'kamburupitiya', 'itemorder', ''),
(265, 8, '438.00', 'accept', '2022-11-21 03:36:44', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', 'kamburupitiya', 'itemorder', ''),
(266, 8, '789.08', 'reject', '2022-11-21 03:38:02', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', 'kamburupitiya', 'itemorder', ''),
(267, 8, '0.00', 'deliver', '2022-11-21 03:38:42', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', 'kamburupitiya', 'prescription', '816690019222022-11-21.png'),
(268, 8, '705.08', 'pending', '2022-11-29 05:29:13', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'kamburupitiya', 'itemorder', ''),
(269, 8, '492.00', 'pending', '2022-11-29 05:30:29', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'takeaway', 'kamburupitiya', 'itemorder', ''),
(270, 49, '8.00', 'deliver', '2022-11-30 19:35:33', 'wcwcwecc', 'vidhat', 'cwcwc', 74158741, 'vidathhasantha96@gmail.com', 'cash_on_delivery', 'Matara', 'itemorder', ''),
(271, 50, '438.00', 'deliver', '2022-12-01 04:30:57', 'abcde', 'ABC', 'DEF', 71587425, 'barakb381@gmail.com', 'cash_on_delivery', 'Matara', 'itemorder', ''),
(272, 8, '0.00', 'pending', '2022-12-01 04:40:38', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', 'kamburupitiya', 'prescription', '816698696382022-12-01.png'),
(273, 8, '451.00', 'accept', '2022-12-01 04:55:08', '335/4, matara,sri lanka', 'Kalhara', 'hasa', 717052037, 'navodkalhara0@gmail.com', 'cash_on_delivery', 'kamburupitiya', 'itemorder', ''),
(274, 51, '2461.00', 'deliver', '2023-05-21 02:24:41', '21', 'mahi', 'kj', 712400127, 'halpagemahindasiri@gmail.com', 'cash_on_delivery', 'Thihagoda', 'itemorder', '');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `tracking_id` int(10) NOT NULL,
  `order_id` int(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `rider_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`tracking_id`, `order_id`, `date`, `rider_id`) VALUES
(2, 84, '2022-05-20 16:27:38', 12),
(3, 237, '2022-05-21 15:29:53', 12),
(4, 237, '2022-05-21 15:30:04', 12),
(5, 238, '2022-05-23 11:23:43', 25),
(6, 197, '2022-05-23 11:23:45', 25),
(7, 207, '2022-05-23 12:00:37', 12),
(8, 230, '2022-05-23 12:00:43', 12),
(9, 235, '2022-05-23 15:37:42', 30),
(10, 235, '2022-05-23 15:37:44', 30),
(11, 257, '2022-09-16 06:23:57', 12),
(12, 257, '2022-09-16 06:24:01', 12),
(13, 262, '2022-09-17 09:12:28', 12),
(14, 262, '2022-09-17 09:12:29', 12),
(15, 267, '2022-11-21 03:49:34', 12),
(16, 112, '2022-11-21 03:49:40', 12),
(17, 270, '2022-11-30 19:37:24', 12),
(18, 271, '2022-12-01 04:38:39', 12),
(19, 274, '2023-05-21 02:28:20', 12),
(20, 274, '2023-05-21 02:28:21', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `status` int(10) NOT NULL DEFAULT 1,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `e_mail`, `phone_number`, `address`, `password`, `user_type`, `status`, `city`) VALUES
(2, 'admin', 'amare', 'adminmedicare@gmail.com', 714056327, 'admin,medicare,matara', '827ccb0eea8a706c4c34a16891f84e7b', 'rider', 1, 'matara'),
(4, 'amal', 'parera', 'pharmacist@gmail.com', 717052037, '665.', '25d55ad283aa400af464c76d713c07ad', 'pharmacist', 1, ''),
(8, 'Kalhara', 'hasa', 'navodkalhara0@gmail.com', 717052037, '335/4, matara,sri lanka', '25d55ad283aa400af464c76d713c07ad', 'user', 1, 'kamburupitiya'),
(12, 'kamal', 'liyanage', 'rider@gmail.com', 717052037, '665,Pudukuduirippu, Jafna, sri lanka', '25d55ad283aa400af464c76d713c07ad', 'rider', 1, 'matara'),
(16, 'chinthaka12', 'sadaruwan', 'admin@gmail.com', 717052037, 'Temporibus in tempor', '25d55ad283aa400af464c76d713c07ad', 'admin', 1, 'makadura'),
(17, 'Lakshan', 'karunadhara', 'lkarunadhara@gmail.com', 754036488, 'sdfasfasd', '25d55ad283aa400af464c76d713c07ad', 'rider', 1, 'colombo'),
(18, 'Jamal', 'Mcintyre', 'keguki@mailinator.com', 717052037, 'Quo', 'b19698df3344e35747a82094eaa5d171', 'pharmacist', 1, 'eefef'),
(25, 'lahiru12', 'perera', 'lahiru25@gmail.com', 717052037, '335/4', '827ccb0eea8a706c4c34a16891f84e7b', 'rider', 1, 'colombo'),
(30, 'sujeewa12', 'madushanka', 'sujeew@gmail.com', 717052037, '335/4', '827ccb0eea8a706c4c34a16891f84e7b', 'rider', 1, 'matara'),
(35, 'Subodha', 'Rathnayake', 'subodha94@gmail.com', 764998655, 'Baddrawatta, Wariyapola', '6c6c6c32bf9861c38d7444cd659eb2e0', 'user', 1, 'matara'),
(43, 'harsha', 'dsdds', 'harshamt402@gmail.com', 711454654, 'hngnghn', '827ccb0eea8a706c4c34a16891f84e7b', 'user', 1, 'Matara'),
(48, 'dvdvfdvdv', 'sscdsdc', 'lakshandsenevirathna@gmail.com', 71584658, 'dcwcwcwcwc', 'e10adc3949ba59abbe56e057f20f883e', 'user', 1, 'Dondara'),
(49, 'vidhat', 'cwcwc', 'vidathhasantha96@gmail.com', 74158741, 'wcwcwecc', '827ccb0eea8a706c4c34a16891f84e7b', 'user', 1, 'Matara'),
(50, 'ABC', 'DEF', 'barakb381@gmail.com', 71587425, 'abcde', '81dc9bdb52d04dc20036dbd8313ed055', 'rider', 1, 'Matara'),
(51, 'mahi', 'kj', 'halpagemahindasiri@gmail.com', 712400127, '21', 'e10adc3949ba59abbe56e057f20f883e', 'user', 1, 'Thihagoda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `delivary_citys`
--
ALTER TABLE `delivary_citys`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `oder_id` (`oder_id`),
  ADD KEY `iteam_id` (`iteam_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`tracking_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `rider_id` (`rider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `delivary_citys`
--
ALTER TABLE `delivary_citys`
  MODIFY `city_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `order_item_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `tracking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `orderitem_ibfk_1` FOREIGN KEY (`oder_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `orderitem_ibfk_2` FOREIGN KEY (`iteam_id`) REFERENCES `item` (`item_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `tracking`
--
ALTER TABLE `tracking`
  ADD CONSTRAINT `tracking_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `tracking_ibfk_2` FOREIGN KEY (`rider_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
