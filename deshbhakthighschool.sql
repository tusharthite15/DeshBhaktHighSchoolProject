-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 04:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deshbhakthighschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `SecretKey` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`SecretKey`) VALUES
('admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `date`, `description`, `image`) VALUES
(4, 'कुस्ती स्पर्देत यश', '2023-09-20', 'कुस्ती स्पर्देत शौर्य शिंदेला कास्य', '20-09-2023.jpg'),
(5, 'शंकरराव घाली यांना अभिवादन', '2023-10-07', 'कै. एस. डी. घाली १२ वे पुण्यस्मरण', '07-10-2023.jpg'),
(6, 'महा हादगा', '2023-10-09', 'देशभक्त रत्नापा कुंभार हायस्कूल मध्ये महा हादगा', '09-10-2023.jpg'),
(7, 'मणिपूरच्या मुख्यमंत्र्यांना विद्यार्थ्यांचे पत्र', '2023-10-10', 'हिंसाचाराबाबत आवाहन;  युथ फाऊंडेशनचा तपालदिनी उपक्रम', '10-10-2023.jpg'),
(8, 'रक्तगट तपसणी शिबिर', '2023-10-24', 'कुंभार हायस्कूल मध्ये रक्तगट तपासणी शिबिर', '24-10-2023.jpg'),
(9, 'अभिमान नवदूर्गांचा', '2023-10-29', 'समाज, संस्कृती जपण्याचे काम स्त्रीने करावे:  वैदेही जोशी', '29-10-2023.jpg'),
(10, 'वाचन प्रेरणा दिन', '2023-10-16', 'देशभक्त रत्नाप्पा कुंभार हायस्कूल मध्ये वाचन प्रेरणा दीन', '16-10-2023.jpg'),
(11, 'बक्षीस वितरण', '2024-01-12', 'देशभक्त रत्नाप्पा कुंभार हायस्कूल मध्ये क्रीडा स्पर्धांचे बक्षीस वितरण', '12-01-2024.jpg'),
(12, 'शालेय क्रीडा स्पर्धा', '2024-01-12', 'कंदलगाव परिसरात शालेय क्रीडा स्पर्धा', '12-01-2024 (1).jpg'),
(13, 'आठवडी बाजार', '2024-01-14', 'देशभक्त रत्नाप्पा कुंभार हायस्कूल मध्ये मुलांनी भरविला आठवडी बाजार', '14-01-2024.jpg'),
(14, 'बाललैगिक शौषण प्रबोधन', '2024-01-16', 'छेडछादीची माहिती तात्काळ पालकांना द्या  अपर्णा हिरेमठ: कुंभार हायस्कूल मध्ये चांगल्या-वाईट स्पर्शान बाबत प्रबोधन', '16-01-2024.jpg'),
(15, 'हळदी कुंकू समारंभ', '2024-02-10', 'गृहिणींनी खेळातून आरोग्य जपावे  सुवर्णा जंबुरे : कुंभार हायस्कूल मध्ये विविध कार्यक्रम', '10-02-2024.jpg'),
(16, 'सदिच्छा समारंभ', '2024-03-02', 'कुंभार हायस्कूल मध्ये सदिच्छा समारंभ : इ १० वी. च्या विद्यार्थ्यांचा सदिच्छा समारंभ', '02-03-2024.jpg'),
(17, 'ऑक्सीजन पार्कचे जतन व संवर्धन', '2024-03-03', 'ऑक्सीजन पार्कमधील झाडांना मायेचा ओलावा  मानवी साखळीतून झाडांना जतन, संवर्धनाचा निर्धार', '03-03-2024.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `Email`, `Password`) VALUES
(4, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
