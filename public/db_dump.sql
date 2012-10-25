-- 
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zf2tutorial`
--
DROP DATABASE `zf2tutorial`;
CREATE DATABASE `zf2tutorial` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `zf2tutorial`;

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `artist`, `title`) VALUES
(1, 'Adele', '21'),
(2, 'Bruce Springsteen', 'Wrecking Ball (Deluxe)'),
(3, 'Lana Del Rey', 'Born To Die'),
(4, 'Gotye', 'Making Mirrors'),
(5, 'The Military Wives', 'In My Dreams');
