-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2016 at 04:52 PM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kandt`
--

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
`id` int(11) NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span_text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span_class` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `slug`, `h1`, `body`, `title`, `img`, `span_text`, `span_class`) VALUES
(1, 'teletubbies', '', '<div class="jumbotron">\r\n            <h1>Les Teletubbies</h1>\r\n            <p>C''est flippant.</p>\r\n            <span class="label label-danger">Danger</span>\r\n        </div>\r\n        <img class="img-thumbnail" alt="Teletubbies" src="img/teletubbies.jpg" data-holder-rendered="true">', 'Teletubbies', '', '', ''),
(2, 'kittens', '', '<div class="jumbotron">\n            <h1>Les Chatons!</h1>\n            <p>C''est mignon.</p>\n            <span class="label label-success">Kawaiiii!</span>\n        </div>\n        <img class="img-thumbnail" alt="Teletubbies" src="img/three_kittens.jpg" data-holder-rendered="true">', 'Kittens', '', '', ''),
(3, 'onepunchman', '', '<div class="jumbotron">\r\n            <h1>Saitama sama</h1>\r\n            <p>Il pique les fesses</p>\r\n            <span class="label label-success">ILETROFAURT</span>\r\n        </div>\r\n        <img class="img-thumbnail" alt="saitama" src="img/opm.jpg" data-holder-rendered="true">', 'Saitama', '', '', ''),
(26, 'bijourpage', '', '                <div class="jumbotron">\r\n                    <h1>Bijour</h1>\r\n                    <p>Default</p>\r\n                    <span class="label label-success">default</span>\r\n                </div>\r\n            ', 'Bonjour', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page`
--
ALTER TABLE `page`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
