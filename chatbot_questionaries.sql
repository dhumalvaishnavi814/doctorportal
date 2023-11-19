-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 01:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_questionaries`
--

CREATE TABLE `chatbot_questionaries` (
  `Id` int(11) NOT NULL,
  `Questions` varchar(300) NOT NULL,
  `Answers` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chatbot_questionaries`
--

INSERT INTO `chatbot_questionaries` (`Id`, `Questions`, `Answers`) VALUES
(0, 'Hi', 'Hello'),
(0, 'How are you?', 'I am fine!!!\r\nok ask me about your doubt...'),
(1, 'Hi', 'Hello!!'),
(2, 'How are you?', 'I am Fine!!!\r\nOk ask me about your doubt!!!'),
(0, 'Hi, Dr. I have been experiencing persistent headaches lately.','I am sorry to hear that. Can you describe the type of headache and any accompanying symptoms?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
