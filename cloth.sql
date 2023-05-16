-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2019 at 10:50 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `msg`) VALUES
('abc', 'abc@gmail.com', 'abc', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `uid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `card` varchar(150) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `products` varchar(500) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `img`, `category`, `price`, `description`) VALUES
(101, 'Levis Womens Skinny Jeans', 'jeans1.jpg', 'Jeans', 1679, '98% Cotton and 2% elastane.\r\nWash separately, mild detergent, dry inside out.\r\nSkinny,\r\nZip.'),
(102, 'Womens Skinny Jeans', 'jeans2.jpg', 'Jeans', 2000, '64% Cotton, 19% viscose, 15% polyester and 2% elastane\r\nWash separately, mild detergent, dry inside out.\r\nSkinny,\r\nZip'),
(103, 'Allen Solly Womens Skinny Jeans', 'jeans3.jpg', 'Jeans', 2500, '98% Cotton and 2% elastane\r\nWash with mild detergent, dry in shade,\r\nLow raise,\r\nInseam Length: 31 inches'),
(104, 'Pepe Jeans Women\'s Powerflex Relaxed Jeans', 'jeans4.jpg', 'Jeans', 1349, 'Unique super elastic imported fabric - 60% stretch,\r\nThermo fixed dual core technology,\r\nHigh fabric recovery to keep the denim in perfect shape,\r\nSuper comfortable.'),
(105, 'Levis Womens Slim Jeans', 'jeans5.jpg', 'Jeans', 1699, '79% Cotton, 19% polyester and 2% elastane\r\nWash separately, mild detergent, dry inside out,\r\nSlim fit,\r\nZip.'),
(106, 'Vintage Skinny Jeans', 'jeans6.jpg', 'Jeans', 3000, 'Stretch Fabric\r\nbest Stitch& Quality.\r\nFinest Fabric.\r\nBest Fit'),
(107, 'Washed Skinny Jeans', 'jeans7.jpg', 'Jeans', 2700, 'Stretch Fabric\r\nbest Stitch& Quality.\r\nFinest Fabric.\r\nBest Fit'),
(108, 'Ripped Skinny Jeans', 'jeans8.jpg', 'Jeans', 3500, 'Pre-Ripped Jeans\r\nHigh-Waisted.\r\nItalian Denim.\r\nFlat Lock Stitch'),
(109, 'skinny jeans', 'jeans1.jpg', 'Jeans', 2000, 'Pre-Ripped Jeans\r\nHigh-Waisted\r\nItalian Denim\r\nFlat Lock Stitch'),
(110, 'Women Round Neck Quarter Sleeve T-Shirts', 'top1.jpg', 'Top', 400, '100% smooth Cotton Melange with Bio Wash and Enzyme Treatment.\r\nBright and Solid Melange Colours with 0% colour Fading.\r\nClassic Fit with Comfort due to breathable cotton fabric\r\nPerfect for Summers and high temperatures.\r\nWash seperately, mild detergent and dry inside out.'),
(111, 'People Womens Tunic Top', 'top2.jpg', 'Top', 450, '100% Modal.\r\nMachine wash, wash dark color separately.\r\nTunic.\r\nThree-quarter sleeve.\r\nRound neck.'),
(112, 'FabAlley Womens Body Blouse Top', 'top3.jpg', 'Top', 600, '100% Crepe.\r\nMachine Wash.\r\nBody Blouse.\r\nSleeveless.\r\nBanded Collar.'),
(113, 'Style Quotient By Noi Womens Body Blouse Top', 'top4.jpg', 'Top', 354, '100% Cotton.\r\nHand wash separately.\r\nBody blouse.\r\nLong sleeve.\r\nTee with polo neck.\r\nPlain.\r\nHigh neck tee.'),
(114, 'Solid peach color top with embroidered', 'top5.jpg', 'Top', 610, '3/4 Sleeve.\r\nRegular Fit.\r\n100% Cotton.\r\nPink Top.'),
(115, 'Polka dot Top', 'top6.jpg', 'Top', 299, 'Material Type : 100% Cotton.\r\nNeck Type : One Piece Collar.\r\nWash Care- Wash with similar.\r\nSellve Type : Full Sleeve.'),
(116, 'DeDes Womens Horizontal Stripe Top', 'top7.jpg', 'Top', 350, 'White and Blue women top.\r\nhorizontal women top.\r\nLadies striped top.\r\nPolyester Women Top.\r\nMachine and Hand wash.'),
(117, 'Abof Womens Top', 'top8.jpg', 'Top', 410, 'Material: Rayon.\r\nColour: Red.\r\nSleeve Type: FullSleev.\r\nFit Type: Regular Fit.\r\nCare Instructions: Regular hand/machine wash; Use mild detergent; Dry in shade.'),
(118, 'Miss Chase Womens Floral Print Crop Top', 'top9.jpg', 'Top', 880, '100% Crepe.\r\nWomens Blouses Party Tops.\r\nSleeveless, Boat Neck, Mini Length\r\nWoven Fabric, Regular Fit, Ideal for any Body Type\r\nHand Wash with Warm Water, Do not Bleach, Warm Iron.\r\nGoing Out Tops.'),
(119, 'Libas Womens Straight Salwar Suit', 'd1.jpg', 'Dress', 600, 'Material: Cotton,\r\nStraight fit,\r\nKnee length,\r\nHand wash with cold water,\r\nSleeveless.'),
(120, 'Biba Womens A Line Salwar Suit', 'd2.jpg', 'Dress', 2500, 'Material: Cotton\r\nA-Line,\r\nKnee length,\r\nDry clean only,\r\nLong sleeve,\r\nCasual wear'),
(121, 'Wishful Cotton Anarkali Salwar', 'd3.jpg', 'Dress', 3500, 'Material: Cotton,\r\nAnarkali,\r\nMust be machine washed,\r\nCasual wear.'),
(122, 'Biba Womens Line Salwar Suit', 'd4.jpg', 'Dress', 3899, '85% Cotton and 15% Silk,\r\nA-line,\r\nKnee length,\r\nDry clean only.'),
(123, 'Yepme Womens Cotton Salwar Suit', 'd5.jpg', 'Dress', 1400, 'Material: Cotton,\r\nHand wash. Dry in shade.\r\nRegular Fit,\r\nFashion Salwar Suits,\r\nColor: Purple'),
(124, 'Atayant Womens Straight Salwar Suit Set', 'd6.jpg', 'Dress', 600, 'Material: Synthetic,\r\nStraight fit,\r\nKnee length,\r\nDry clean only,\r\nThree quarter sleeve,\r\nCasual wear.'),
(125, 'Tarun Tahiliani Designer Womens Anarkali', 'd7.jpg', 'Dress', 8300, 'Material: Rayon with three quarter sleeve and round neck\r\nAnarkali kurta with churidar and dupatta,\r\nAnkle length,\r\nDry clean only'),
(126, 'Rain and Rainbow Womens Anarkali Salwar Suit', 'd8.jpg', 'Dress', 2000, 'Material: Chambray,\r\nAnarkali,\r\nCalf-length,\r\nDry clean first two wash thereafter hand wash in cold water,\r\nThree quarter sleeve.');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

DROP TABLE IF EXISTS `temp`;
CREATE TABLE IF NOT EXISTS `temp` (
  `uid` varchar(15) NOT NULL,
  `pid` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `mob`, `email`, `address`, `username`, `password`, `otp`) VALUES
(3, 'Sam', '9812345678', 'sam@gmail.com', 'Test', 'Sam', '$2y$10$fgCXvpgyYifFjoHyzPjl1uMkI9cnhYve2iC0sIBvXtadVns7gXZC2', ''),
(4, 'Jagan Mehra', '5676787899', 'jagan@gmail.com', 'Test', 'Jagan', '$2y$10$mS7JrPvkWnKjximGQ1iyduZSKS92V3Lm1MHgX2HkVLGZFYh8QfKmy', '530373');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
