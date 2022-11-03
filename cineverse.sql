-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2022 at 07:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cineverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `cardHolder` varchar(100) NOT NULL,
  `cardNumber` varchar(319) NOT NULL,
  `expiryDate` varchar(10) NOT NULL,
  `cvc` varchar(40) DEFAULT NULL,
  `email` varchar(319) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`orderid`, `name`, `cardHolder`, `cardNumber`, `expiryDate`, `cvc`, `email`) VALUES
(100002, 'Jefferey', 'Jefferey', '1234567890123456', '2023-03-17', '202cb962ac59075b964b07152d234b70', 'jefferey@abc.com'),
(100003, 'Coach', 'Coach', '1234567890123456', '2023-03-17', '202cb962ac59075b964b07152d234b70', 'coach@abc.com'),
(100004, 'Red', 'Red', '1234567890123456', '2023-04-20', '289dff07669d7a23de0ef88d2f7129e7', 'red2@abc.com'),
(100005, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100006, 'Susan', 'Susan', 'abeac07d3c28c1bef9e730002c753ed4', '2023-03-31', 'd81f9c1be2e08964bf9f24b15f0e4900', 'susan@ntu.com'),
(100007, 'Fugh', 'Fugh', 'abeac07d3c28c1bef9e730002c753ed4', '2023-03-30', '99c5e07b4d5de9d18c350cdf64c5aa3d', 'fugh@abc.com'),
(100008, 'James', 'James', 'abeac07d3c28c1bef9e730002c753ed4', '2023-03-24', '202cb962ac59075b964b07152d234b70', 'james@localhost.com'),
(100009, 'Argus', 'Argus', 'abeac07d3c28c1bef9e730002c753ed4', '2023-03-31', '202cb962ac59075b964b07152d234b70', 'argus@frontier.com'),
(100010, 'Argus', 'Argus', 'abeac07d3c28c1bef9e730002c753ed4', '2023-03-24', '202cb962ac59075b964b07152d234b70', 'argus@frontier.com'),
(100011, 'Sally', 'Sally', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-21', 'd81f9c1be2e08964bf9f24b15f0e4900', 'sally@downstairs.com'),
(100012, 'Argus', 'Argus', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-29', '202cb962ac59075b964b07152d234b70', 'abc@gmail.com'),
(100013, 'Jamus', 'Jamus', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-21', '9fe8593a8a330607d76796b35c64c600', 'jamus@ntu.edu.sg'),
(100014, 'Tiffany', 'Tiffany', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-29', 'cfee398643cbc3dc5eefc89334cacdc1', 'tiffany@snsd.com'),
(100015, 'Susan', 'Susan', 'abeac07d3c28c1bef9e730002c753ed4', '2023-05-27', '250cf8b51c773f3f8dc8b4be867a9a02', 'susan@macdonald.com'),
(100016, 'Victor', 'Victor', 'abeac07d3c28c1bef9e730002c753ed4', '2023-06-22', '0266e33d3f546cb5436a10798e657d97', 'victor@fantastic.com'),
(100017, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100018, 'Zhao Sheng', 'Zhao Sheng', 'abeac07d3c28c1bef9e730002c753ed4', '2023-05-26', '202cb962ac59075b964b07152d234b70', 'abc@gmail.com'),
(100019, 'James', 'James', 'abeac07d3c28c1bef9e730002c753ed4', '2023-06-01', '9b04d152845ec0a378394003c96da594', 'james@foundation.com'),
(100020, 'Arthur', 'Arthur', 'abeac07d3c28c1bef9e730002c753ed4', '2023-07-28', '202cb962ac59075b964b07152d234b70', 'arthur@arthur.com'),
(100021, 'Arthur', 'Arthur', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-28', '202cb962ac59075b964b07152d234b70', 'arthur@arthur.com'),
(100022, 'Alice', 'Alice', 'abeac07d3c28c1bef9e730002c753ed4', '2023-05-05', '202cb962ac59075b964b07152d234b70', 'alice@borderland.com'),
(100023, 'alice', 'alice', 'abeac07d3c28c1bef9e730002c753ed4', '2023-03-30', '202cb962ac59075b964b07152d234b70', 'alice@borderland.com'),
(100024, 'Desmond', 'Desmond', 'abeac07d3c28c1bef9e730002c753ed4', '2023-06-03', '202cb962ac59075b964b07152d234b70', 'desmond@tan.com'),
(100025, 'Gord', 'Gord', 'abeac07d3c28c1bef9e730002c753ed4', '2023-06-03', '202cb962ac59075b964b07152d234b70', 'gord@justice.com'),
(100026, 'Fred', 'Fred', 'abeac07d3c28c1bef9e730002c753ed4', '2023-05-18', '202cb962ac59075b964b07152d234b70', 'fred@cooking.com'),
(100027, 'Venus', 'Venus', 'abeac07d3c28c1bef9e730002c753ed4', '2023-06-09', '202cb962ac59075b964b07152d234b70', 'venus@flytrap.com'),
(100028, 'Brono', 'Brono', 'abeac07d3c28c1bef9e730002c753ed4', '2023-06-02', '202cb962ac59075b964b07152d234b70', 'brono@mars.com'),
(100029, 'James', 'James', 'abeac07d3c28c1bef9e730002c753ed4', '2023-07-01', 'd81f9c1be2e08964bf9f24b15f0e4900', 'james@foundation.com'),
(100030, 'Ray', 'Ray', '9d299b6a4b2b1cdcf8bc4e7dd7e050fb', '2023-07-29', '024d7f84fff11dd7e8d9c510137a2381', 'ray@sting.com'),
(100031, 'Yati', 'Yati', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-21', '250cf8b51c773f3f8dc8b4be867a9a02', 'yati@jetiferry.com'),
(100032, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100033, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100034, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100035, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100036, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100037, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100038, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100039, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100040, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100041, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100042, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100043, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100044, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100045, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100046, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100047, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100048, 'Wade', 'Wade', 'abeac07d3c28c1bef9e730002c753ed4', '2023-03-31', 'd18f655c3fce66ca401d5f38b48c89af', 'wade@wilson.com'),
(100049, 'Royston', 'Royston', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-15', '39059724f73a9969845dfe4146c5660e', 'royston@mars.com'),
(100050, 'Widow', 'Widow', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-28', '06409663226af2f3114485aa4e0a23b4', 'window@avengers.com'),
(100051, 'Johnson', 'Johnson', 'fcbe7cb5354369fbcae8b54dd6ebf31b', '2023-04-08', '9461cce28ebe3e76fb4b931c35a169b0', 'johnson@babyjohson.com.sg'),
(100052, 'Desmond', 'Desmond', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-15', 'd81f9c1be2e08964bf9f24b15f0e4900', 'desmond@tan.com.sg'),
(100053, 'Youtube', 'Youtube', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-07', '6ea2ef7311b482724a9b7b0bc0dd85c6', 'youtube@youtube.com'),
(100054, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(100055, 'desmond', 'desmond', 'abeac07d3c28c1bef9e730002c753ed4', '2023-06-09', '73278a4a86960eeb576a8fd4c9ec6997', 'desmond@tan.com'),
(100056, 'desmond', 'desmond', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-29', '202cb962ac59075b964b07152d234b70', 'desmond@tan.com'),
(100057, 'siewting', 'siewting', '9d299b6a4b2b1cdcf8bc4e7dd7e050fb', '2023-04-29', '202cb962ac59075b964b07152d234b70', 'siewting@tingting.com'),
(100058, 'siewting', 'siewting', '9d299b6a4b2b1cdcf8bc4e7dd7e050fb', '2023-06-30', '0c74b7f78409a4022a2c4c5a5ca3ee19', 'siewting@tingting.com'),
(100059, 'siewting', 'siewting', 'abeac07d3c28c1bef9e730002c753ed4', '2023-07-07', 'cf004fdc76fa1a4f25f62e0eb5261ca3', 'siewting@tt.com'),
(100060, 'siewting', 'siewting', '850c693439917d9c8387245f02e8f9d5', '2023-07-29', 'f718499c1c8cef6730f9fd03c8125cab', 'siewting@tingting.com'),
(100061, 'abc', 'abc', 'abeac07d3c28c1bef9e730002c753ed4', '2023-03-25', '202cb962ac59075b964b07152d234b70', 'abc@abc.com'),
(100062, 'abc', 'abc', 'abeac07d3c28c1bef9e730002c753ed4', '2023-06-02', '202cb962ac59075b964b07152d234b70', 'abc@gmail.com'),
(100063, 'abc', 'abc', 'abeac07d3c28c1bef9e730002c753ed4', '2023-03-31', '202cb962ac59075b964b07152d234b70', 'abc@abc.com'),
(100064, 'abc', 'abc', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-22', '202cb962ac59075b964b07152d234b70', 'abc@abc.com'),
(100065, 'abc', 'abc', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-29', '202cb962ac59075b964b07152d234b70', 'abc@abc.com'),
(100066, 'abc', 'abc', 'abeac07d3c28c1bef9e730002c753ed4', '2023-05-06', '202cb962ac59075b964b07152d234b70', 'abc@abc.com'),
(100067, 'abc', 'abc', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-29', '202cb962ac59075b964b07152d234b70', 'abc@abc.com'),
(100068, 'abc', 'abc', 'abeac07d3c28c1bef9e730002c753ed4', '2023-06-10', '202cb962ac59075b964b07152d234b70', 'abc@abc.com'),
(100069, 'abc', 'abc', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-29', '202cb962ac59075b964b07152d234b70', 'abc@abc.com'),
(100070, 'abc', 'abc', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-22', '202cb962ac59075b964b07152d234b70', 'abc@abc.com'),
(100071, 'zs', 'zs', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-29', '202cb962ac59075b964b07152d234b70', 'zs@zs.com'),
(100072, 'wesley', 'wesley', 'abeac07d3c28c1bef9e730002c753ed4', '2023-03-31', '202cb962ac59075b964b07152d234b70', 'wesley@ntu.com'),
(100073, 'youtube', 'youtube', 'abeac07d3c28c1bef9e730002c753ed4', '2023-05-27', '6c9882bbac1c7093bd25041881277658', 'youtube@youtube.com'),
(100074, 'abc', 'abc', 'abeac07d3c28c1bef9e730002c753ed4', '2023-04-29', 'a4f23670e1833f3fdb077ca70bbd5d66', 'abc@abc.com'),
(100075, 'desmond', 'desmond', '44fba9b976f49b99ff6f2e2760b5777a', '2023-06-03', '4c56ff4ce4aaf9573aa5dff913df997a', 'desmond@tan.com'),
(100076, 'zs', 'zs', 'fd81bccb858ddf1b3f5298f14093f1f6', '2023-07-01', '4c56ff4ce4aaf9573aa5dff913df997a', 'abc@abc.com'),
(100077, 'desmond', 'desmond', '9e88f907e7f5bb4dde87d37d59fa4269', '2023-06-03', '202cb962ac59075b964b07152d234b70', 'desmond@tan.com'),
(100078, 'Adrian', 'Adrian', '28512bfd38cbd0828f1964bd28025b50', '2023-06-24', '3def184ad8f4755ff269862ea77393dd', 'adrian@pang.com'),
(100079, 'Adrian', 'Adrian', '5ae55426370d899df87c0cc60b93f74c', '2023-04-08', 'dd458505749b2941217ddd59394240e8', 'adrianpang@localhost.com'),
(100080, 'Thomas', 'Thomas', 'aa8c73f7120e908ad569fcef0ca8164c', '2023-08-26', 'c5ff2543b53f4cc0ad3819a36752467b', 'thomas@train.com'),
(100081, 'Derek', 'Derek', 'abeac07d3c28c1bef9e730002c753ed4', '2023-05-05', '06138bc5af6023646ede0e1f7c1eac75', 'derek@ntu.com'),
(100082, 'Derek', 'Derek', 'abeac07d3c28c1bef9e730002c753ed4', '2023-05-05', '06138bc5af6023646ede0e1f7c1eac75', 'derek@ntu.com'),
(100083, 'Ray', 'Ray', 'c3a6af6a5c2318ea23541d8fcde6825a', '2023-05-27', '0c74b7f78409a4022a2c4c5a5ca3ee19', 'ray@japan.com'),
(100084, 'ray', 'ray', '3e98d212e01c25b4cc40faee16db6ec7', '2023-06-30', '39059724f73a9969845dfe4146c5660e', 'ray@japan.com'),
(100085, 'abc', 'abc', '5b58aac9c97c81d58a6c54329479f7fc', '2023-05-27', 'e7b24b112a44fdd9ee93bdf998c6ca0e', 'abc@school.com'),
(100086, 'susan', 'susan', 'cda54696b94b2772fb9f880569ad78ff', '2023-06-03', '01161aaa0b6d1345dd8fe4e481144d84', 'susan@tinyurl.com'),
(100087, 'Welsey', 'Welsey', '17b12acfdd2564cce408e40a3b1c60a7', '2023-05-05', '7dcd340d84f762eba80aa538b0c527f7', 'wesley@ntu.sg'),
(100088, 'wesley', 'wesley', '6ec5c11c0d35370b77813e869ac47cde', '2023-06-10', '38af86134b65d0f10fe33d30dd76442e', 'wesley@localhost.com'),
(100089, 'Adrian', 'Adrian', 'cd70d6739907bfe915cf6a5a6805f905', '2023-04-29', '3621f1454cacf995530ea53652ddf8fb', 'adrian@pang.com'),
(100090, 'Susan', 'Susan', '4afb3ff56250d8cc15747af53ecc4c87', '2023-05-27', '6ea2ef7311b482724a9b7b0bc0dd85c6', 'susan@school.com.sg'),
(100091, 'kfc', 'kfc', '3003d008e6df7f7d3c71c2684582a635', '2023-06-03', 'b4a528955b84f584974e92d025a75d1f', 'kfc@singapore.com'),
(100092, 'Desmond', 'Desmond', 'c292158b8d69b44449480641bfeefc83', '2023-06-10', '4734ba6f3de83d861c3176a6273cac6d', 'desmond@tan.com'),
(100093, 'Cassandra', 'Cassandra', '14f6ffdf1cb026484fe19c511d7ea5a2', '2023-06-10', '92c8c96e4c37100777c7190b76d28233', 'cassandra@hotmail.com'),
(100094, 'chua', 'chua', '36653f49b149ae0e5fffe3624f2e52c5', '2029-07-18', '7ce3284b743aefde80ffd9aec500e085', 'rty@gmail.com'),
(100095, 'desmond', 'desmond', 'd47f7f4a70001ff92f13298ed9651cc1', '2024-03-29', '3def184ad8f4755ff269862ea77393dd', 'desmond@gmail.com'),
(100096, 'Youtube', 'Youtube', '8dfa543f77acf202bcd5046d7229f45b', '2023-04-20', 'd81f9c1be2e08964bf9f24b15f0e4900', 'youtube@gmail.com'),
(100097, 'Denis', 'Denis', '61e1c94c2d5af2dcf330f28fd4341069', '2023-06-30', '33e8075e9970de0cfea955afd4644bb2', 'denis-you@gmail.com'),
(100098, 'Adrian', 'Adrian', '465df447d1d34eaf21424615a79fbb1c', '2023-06-24', '202cb962ac59075b964b07152d234b70', 'adrain@ntu.com');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodid` int(10) UNSIGNED NOT NULL,
  `foodName` varchar(100) NOT NULL,
  `price` float(4,2) NOT NULL,
  `imagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodid`, `foodName`, `price`, `imagePath`) VALUES
(1, 'Combo Set A', 9.90, 'set_1.png'),
(2, 'Combo Set B', 10.90, 'set_2.png'),
(3, 'Popcorn', 8.90, 'popcorn.png'),
(4, 'Beef Burger', 8.90, 'beef_burger.png'),
(5, 'Hot Dog', 7.90, 'hotdog.png'),
(6, 'Soft Drink', 3.50, 'softdrink.png'),
(7, 'Mineral Water', 2.00, 'water.png'),
(8, 'Hot Tea', 2.90, 'hot_tea.png');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movieid` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `landscapeImagePath` varchar(255) NOT NULL,
  `imagePathForMovieDetails` varchar(255) NOT NULL,
  `imagePathForPayment` varchar(255) NOT NULL,
  `imdbRating` float(2,1) UNSIGNED NOT NULL,
  `guidianceRating` char(10) NOT NULL,
  `duration` int(10) UNSIGNED NOT NULL,
  `year` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movieid`, `title`, `imagePath`, `landscapeImagePath`, `imagePathForMovieDetails`, `imagePathForPayment`, `imdbRating`, `guidianceRating`, `duration`, `year`, `description`) VALUES
(1, 'Black Widow', 'movie-blackwidow.jpg', 'movie-blackwidow.png', 'movie-blackwidow-large.png', 'movie-blackwidow.jpg', 5.0, 'PG13', 134, 2021, 'In 1995, super soldier Alexei Shostakov and Black Widow Melina Vostokoff work as Russian undercover agents, posing as a family in Ohio with Natasha Romanoff and Yelena Belova as their daughters. They steal S.H.I.E.L.D. intel and escape to Cuba where their boss, General Dreykov, has Romanoff and Belova taken to the Red Room for training. In the following decades, Shostakov is imprisoned in Russia while Romanoff and Belova become successful, dangerous assassins. Romanoff eventually defects to S.H.I.E.L.D. after helping Clint Barton bomb Dreykov\'s Budapest office, which apparently kills Dreykov and his young daughter Antonia.'),
(2, 'Doctor Strange In The Multiverse of Madness', 'movie-doctorStrange.jpg', 'movie-doctorstrange.jpg', 'movie-doctorstrange-large.png', 'movie-doctorStrange.jpg', 9.0, 'PG13', 126, 2022, 'America Chavez and a version of Stephen Strange are chased by a demon in the space between universes while searching for the Book of Vishanti. That Strange is killed and Chavez accidentally creates a portal that transports herself and Strange\'s corpse to Earth-616, where that universe\'s version of Strange rescues Chavez from another demon with help from the Sorcerer Supreme, Wong. Chavez explains that the beings are hunting her because she has the power to travel through the multiverse.'),
(3, '1917', 'movie-detail-1917.jpg', 'movie-detail-1917.jpg', 'movie-detail-1917.jpg', 'movie-1917.jpg', 8.0, 'PG13', 140, 2022, '1917 is a 2019 war film directed and produced by Sam Mendes, who co-wrote the film with Krysty Wilson-Cairns. Partially inspired by stories told to Mendes by his paternal grandfather Alfred about his service during World War I, the film takes place after the German retreat to the Hindenburg Line during Operation Alberich, and follows two British soldiers.'),
(4, 'Jumanji: The Next Level', 'movie-jumanji.jpg', 'movie-jumanji.png', 'movie-jumanji-large.png', 'movie-jumanji.jpg', 7.0, 'PG13', 123, 2019, 'Spencer Gilpin, Anthony \'Fridge\' Johnson, Martha Kaply, and Bethany Walker plan to meet up over Christmas break to discuss their first year out of school. The night before, Spencer, feeling despondent that his life isn\'t as glamorous as his friends\', gets out Jumanji, where he had secretly rebuilt the console after its destruction in the previous film. When he is late to the meet-up, his friends visit his mother and are greeted by Spencer\'s grandfather, Eddie, and Eddie\'s estranged friend and former business partner, Milo Walker, who came for a visit. Fridge, Martha, and Bethany realize he has gone into the game and they follow Spencer. Eddie and Milo are also sucked into the game inadvertently while Bethany is left behind, forcing her to go to the other Jumanji player, Alex Vreeke, for help.'),
(5, 'John Wick', 'movie-johnwick.png', 'movie-johnwick.png', 'movie-johnwick-large.png', 'movie-johnwick.jpg', 6.0, 'PG13', 131, 2019, 'John Wick is making his way through Manhattan before he is labeled \"excommunicado\" for the unauthorized killing of High Table crime lord Santino D\'Antonio on the grounds of the New York Continental Hotel, which is considered neutral ground. He sends his dog to safety with the concierge, Charon, at the very same hotel. At the New York Public Library, John retrieves a marker medallion and a rosary. He is injured in a fight with Ernest, another hitman, and seeks medical treatment from an underworld doctor, but his $14 million bounty activates before the doctor can finish, forcing John to complete the suturing himself. Upon leaving, he is quickly pursued by various gangs of assassins, all of whom he kills.'),
(6, 'Spider-Man: No Way Home', 'movie-spiderman.jpg', 'movie-spiderman-large.png', 'movie-spiderman-large.png', 'movie-spiderman.jpg', 4.9, 'PG13', 148, 2021, 'After Quentin Beck frames Peter Parker for his murder and reveals Parker\'s identity as Spider-Man, Parker, his girlfriend Michelle \"MJ\" Jones-Watson, best friend Ned Leeds, and aunt May are interrogated by the Department of Damage Control. Lawyer Matt Murdock gets Parker\'s charges dropped, but the group grapples with negative publicity. After Parker, MJ, and Ned\'s MIT applications are rejected, Parker goes to the New York Sanctum to ask Stephen Strange for help. Strange casts a spell that would make everyone forget Parker is Spider-Man, but it is corrupted when Parker repeatedly requests alterations to let his loved ones retain their memories. Strange contains the spell to stop it and makes Parker leave.'),
(7, 'DC: SuperPets', 'movie-superpets.jpg', 'movie-superpets-large.png', 'movie-superpets-large.png', 'movie-superpets.jpg', 4.8, 'PG13', 105, 2022, 'During the destruction of the planet Krypton, a Kryptonian Labrador Retriever comforts fellow infant survivor Kal-El as they head in an escape pod toward Earth. Years later, now known as the famous superheroes Krypto and Superman, they live in the city of Metropolis under their dual identities Bark and Clark Kent. Clark is a reporter and journalist at the Daily Planet, a newspaper company, and dating Lois Lane, a fellow journalist whom Krypto is jealous of. Thinking that Krypto needs a friend to distract him, Clark heads to an animal shelter to find one for him. A Boxer named Ace is trying to escape the shelter, when Krypto stops him. Later, Superman and Krypto spot their archenemy, LexCorp CEO Lex Luthor, reeling in a meteor strapped with orange kryptonite with a tractor beam, intending to gain superpowers. He is easily defeated as the two are aided by the Justice League.'),
(8, 'Deadpool 3', 'movie-deadpool.jpg', 'movie-deadpool-large.png', 'movie-deadpool-large.png', 'movie-deadpool.jpg', 4.7, 'M18', 119, 2018, 'After fighting organized crime as the wisecracking mercenary Deadpool for two years, Wade Wilson fails to kill one of his targets on his anniversary with his girlfriend Vanessa. That night, after the pair decides to start a family together, the target tracks Wade down and inadvertently kills Vanessa. Wade then kills him in revenge. Blaming himself for Vanessa\'s death, he attempts to die by suicide six weeks later by blowing himself up. Wade has a vision of her in the afterlife, but remains alive due to his healing abilities, and his body is put back together by Colossus. Wade is left with only a Skee-Ball token, an anniversary gift, as a final memento of Vanessa.'),
(9, 'Nope', 'movie-nope.jpg', 'movie-nope-large.png', 'movie-nope-large.png', 'movie-nope.jpg', 4.5, 'NC16', 130, 2022, 'In present-day Agua Dulce, ranch owner Otis Haywood Sr. trains and handles horses for film and television productions. When he is killed by a nickel through the eye that falls inexplicably from the sky, his children Otis \"OJ\" Haywood Jr. and Emerald \"Em\" Haywood inherit the ranch. OJ tries to keep the business afloat and maintain his father\'s legacy, while Em seeks fame and fortune in Hollywood. The Haywoods claim that the unnamed jockey in \"Plate 626\" from Eadweard Muybridge\'s Animal Locomotion series of photographs was a Bahamian man named Alistair E. Haywood, their ancestor.'),
(10, 'Moonlight', 'movie-moonlight.jpg', 'movie-moonlight-large.png', 'movie-moonlight-large.png', 'movie-moonlight.jpg', 4.0, 'NC16', 111, 2016, 'In Liberty City, Miami at the height of the crack epidemic, Afro-Cuban drug dealer Juan finds Chiron, a withdrawn child who goes by the nickname \"Little,\" hiding from a group of bullies in a crackhouse. He lets Chiron spend the night with him and his girlfriend Teresa before returning Chiron to his mother Paula, who revokes his TV privileges as punishment for worrying her. Chiron continues to spend time with Juan, who teaches him how to swim and mentors him, telling him he can choose his own path in life.'),
(11, 'The Martian', 'movie-bringmehome.jpg', 'movie-bringmehome-large.jpeg', 'movie-bringmehome-large.jpeg', 'movie-bringmehome.jpg', 4.3, 'PG13', 141, 2015, 'In 2035, the crew of the Ares III mission to Mars is exploring Acidalia Planitia on Martian solar day (sol) 18 of their 31-sol expedition. A severe dust storm threatens to topple their Mars Ascent Vehicle (MAV). The mission is scrubbed, but as the crew evacuates, astronaut Mark Watney is struck by debris. The telemetry from his suit\'s bio-monitor is damaged and Watney is erroneously presumed dead. With the MAV (Mars Ascent Vehicle) on the verge of toppling, the remaining crew takes off for their orbiting vessel, the Hermes.');

-- --------------------------------------------------------

--
-- Table structure for table `movieSessions`
--

CREATE TABLE `movieSessions` (
  `sessionid` int(10) UNSIGNED NOT NULL,
  `movieid` int(10) UNSIGNED NOT NULL,
  `screeningLocation` varchar(50) NOT NULL,
  `screeningDate` char(6) NOT NULL,
  `screeningTime` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movieSessions`
--

INSERT INTO `movieSessions` (`sessionid`, `movieid`, `screeningLocation`, `screeningDate`, `screeningTime`) VALUES
(1, 2, 'Jurong', '14/10', '10:00'),
(2, 2, 'Orchard', '14/10', '11:30'),
(3, 2, 'Tampines', '14/10', '11:00'),
(149, 2, 'Jurong', '14/10', '11:00'),
(153, 2, 'Jurong', '14/10', '15:30'),
(154, 2, 'Jurong', '15/10', '10:00'),
(155, 3, 'Jurong', '15/10', '10:00'),
(156, 4, 'Jurong', '15/10', '10:00'),
(157, 5, 'Jurong', '15/10', '10:00'),
(158, 1, 'Jurong', '15/10', '10:00'),
(159, 6, 'Jurong', '15/10', '10:00'),
(160, 7, 'Jurong', '15/10', '10:00'),
(161, 8, 'Jurong', '15/10', '10:00'),
(162, 9, 'Jurong', '15/10', '10:00'),
(163, 11, 'Jurong', '15/10', '10:00'),
(164, 10, 'Jurong', '15/10', '10:00'),
(165, 2, 'Jurong', '15/10', '11:00'),
(166, 2, 'Jurong', '19/10', '10:00'),
(167, 2, 'Jurong', '20/10', '10:00'),
(168, 2, 'Jurong', '22/10', '10:00'),
(169, 2, 'Jurong', '22/10', '11:00'),
(170, 8, 'Jurong', '22/10', '10:00'),
(171, 11, 'Jurong', '22/10', '10:00'),
(172, 1, 'Jurong', '22/10', '10:00'),
(173, 3, 'Tampines', '22/10', '11:00'),
(174, 2, 'Orchard', '23/10', '11:30'),
(175, 4, 'Jurong', '26/10', '10:00'),
(176, 2, 'Jurong', '26/10', '10:00'),
(177, 2, 'Jurong', '27/10', '10:00'),
(178, 4, 'Orchard', '27/10', '11:30'),
(179, 3, 'Orchard', '27/10', '11:30'),
(180, 4, 'Jurong', '27/10', '10:00'),
(181, 5, 'Orchard', '27/10', '11:30'),
(182, 1, 'Orchard', '27/10', '11:30'),
(183, 6, 'Orchard', '28/10', '11:30'),
(184, 7, 'Jurong', '27/10', '10:00'),
(185, 8, 'Jurong', '27/10', '10:00'),
(186, 9, 'Jurong', '27/10', '10:00'),
(187, 11, 'Orchard', '27/10', '11:30'),
(188, 10, 'Orchard', '27/10', '11:30'),
(189, 11, 'Jurong', '27/10', '10:00'),
(190, 8, 'Jurong', '28/10', '10:00'),
(191, 6, 'Jurong', '27/10', '10:00'),
(192, 2, 'Jurong', '29/10', '10:00'),
(193, 1, 'Jurong', '29/10', '10:00'),
(194, 1, 'Jurong', '30/10', '10:00'),
(195, 2, 'Jurong', '31/10', '10:00'),
(196, 2, 'Jurong', '1/11', '12:00'),
(197, 3, 'Jurong', '1/11', '11:00'),
(198, 3, 'Jurong', '1/11', '15:30'),
(199, 2, 'Jurong', '1/11', '10:00'),
(200, 2, 'Jurong', '1/11', '11:00'),
(201, 6, 'Jurong', '2/11', '10:00'),
(202, 2, 'Jurong', '3/11', '10:00'),
(203, 3, 'Tampines', '2/11', '11:00'),
(204, 2, 'Jurong', '2/11', '10:00'),
(205, 8, 'Jurong', '2/11', '10:00'),
(206, 8, 'Tampines', '2/11', '11:00'),
(207, 3, 'Jurong', '5/11', '17:30'),
(208, 6, 'Jurong', '3/11', '10:00'),
(209, 3, 'Jurong', '5/11', '18:00'),
(210, 11, 'Jurong', '6/11', '19:00'),
(211, 2, 'Jurong', '4/11', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `occupiedSeats`
--

CREATE TABLE `occupiedSeats` (
  `sessionid` int(10) UNSIGNED NOT NULL,
  `seatNumber` char(5) NOT NULL,
  `orderid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `occupiedSeats`
--

INSERT INTO `occupiedSeats` (`sessionid`, `seatNumber`, `orderid`) VALUES
(1, 'A1', 100000),
(1, 'A2', 100000),
(1, 'A16', 100000),
(1, 'A17', 100000),
(1, 'B8', 100000),
(1, 'B10', 100000),
(1, 'C14', 100000),
(1, 'C15', 100000),
(1, 'E19', 100000),
(1, 'E20', 100000),
(154, 'E6', 100003),
(154, 'E7', 100003),
(156, 'D14', 100004),
(156, 'D15', 100004),
(154, 'D14', 100005),
(154, 'D15', 100005),
(154, 'E3', 100006),
(154, 'E4', 100006),
(154, 'E16', 100007),
(154, 'E17', 100007),
(166, 'E14', 100008),
(166, 'E15', 100008),
(166, 'E6', 100009),
(166, 'E7', 100009),
(166, 'E11', 100010),
(166, 'E12', 100010),
(166, 'E9', 100011),
(166, 'E10', 100011),
(166, 'D4', 100012),
(166, 'D5', 100012),
(166, 'C2', 100013),
(166, 'C3', 100013),
(166, 'C17', 100014),
(166, 'C18', 100014),
(166, 'C7', 100015),
(166, 'C8', 100015),
(166, 'A9', 100016),
(166, 'A10', 100016),
(167, 'E8', 100017),
(167, 'E9', 100017),
(167, 'E8', 100018),
(167, 'E9', 100018),
(168, 'E11', 100019),
(168, 'E12', 100019),
(168, 'C13', 100020),
(168, 'C14', 100020),
(168, 'E14', 100021),
(168, 'E15', 100021),
(168, 'A4', 100022),
(168, 'A5', 100022),
(168, 'C10', 100023),
(168, 'C11', 100023),
(168, 'A10', 100024),
(168, 'A11', 100024),
(168, 'B12', 100025),
(168, 'B13', 100025),
(168, 'B8', 100026),
(168, 'B9', 100026),
(168, 'E6', 100027),
(168, 'E7', 100027),
(168, 'A16', 100028),
(168, 'A17', 100028),
(168, 'D16', 100029),
(168, 'D17', 100029),
(168, 'D4', 100030),
(168, 'D5', 100030),
(168, 'E4', 100031),
(168, 'E5', 100031),
(168, 'C18', 100032),
(168, 'C19', 100032),
(169, 'E11', 100033),
(169, 'E12', 100033),
(168, 'C3', 100034),
(168, 'C5', 100034),
(168, 'B4', 100035),
(168, 'B5', 100035),
(168, 'D8', 100036),
(168, 'D9', 100036),
(168, 'E18', 100037),
(168, 'E19', 100037),
(168, 'B18', 100038),
(168, 'B19', 100038),
(168, 'D19', 100039),
(168, 'D20', 100039),
(168, 'A9', 100040),
(168, 'D13', 100041),
(168, 'D15', 100042),
(168, 'B3', 100043),
(168, 'D2', 100044),
(168, 'A1', 100045),
(168, 'A19', 100046),
(168, 'A20', 100046),
(168, 'E10', 100047),
(170, 'E6', 100048),
(170, 'E7', 100048),
(170, 'E8', 100048),
(171, 'E8', 100049),
(171, 'E9', 100049),
(172, 'C10', 100050),
(172, 'C11', 100050),
(172, 'C12', 100050),
(172, 'C13', 100050),
(173, 'E11', 100051),
(173, 'E12', 100051),
(174, 'E6', 100052),
(174, 'E7', 100052),
(174, 'E8', 100052),
(174, 'E9', 100052),
(174, 'E10', 100052),
(174, 'E11', 100052),
(174, 'E12', 100052),
(174, 'E13', 100052),
(174, 'E14', 100052),
(174, 'E15', 100052),
(175, 'E11', 100053),
(175, 'E12', 100053),
(176, 'E14', 100054),
(176, 'E15', 100054),
(177, 'A12', 100055),
(177, 'A13', 100055),
(177, 'A12', 100056),
(177, 'A13', 100056),
(177, 'E11', 100057),
(177, 'E12', 100057),
(177, 'E11', 100058),
(177, 'E12', 100058),
(177, 'C9', 100059),
(177, 'C10', 100059),
(177, 'D16', 100060),
(177, 'D17', 100060),
(177, 'C16', 100061),
(177, 'C17', 100061),
(177, 'C5', 100062),
(177, 'D6', 100063),
(177, 'D7', 100063),
(177, 'B5', 100064),
(177, 'E16', 100065),
(177, 'E8', 100066),
(177, 'E10', 100067),
(177, 'E13', 100068),
(177, 'E5', 100069),
(177, 'E15', 100070),
(177, 'E20', 100071),
(177, 'E18', 100072),
(177, 'A6', 100073),
(177, 'D13', 100074),
(177, 'D15', 100076),
(191, 'E10', 100077),
(192, 'E8', 100078),
(192, 'E9', 100078),
(192, 'E13', 100079),
(192, 'E14', 100079),
(195, 'B9', 100080),
(195, 'B10', 100080),
(195, 'C4', 100080),
(195, 'C5', 100080),
(195, 'D6', 100080),
(195, 'D7', 100080),
(195, 'D17', 100080),
(195, 'D18', 100080),
(195, 'E2', 100080),
(195, 'E3', 100080),
(195, 'E14', 100080),
(195, 'E15', 100080),
(195, 'E17', 100080),
(195, 'E18', 100080),
(178, 'E6', 100075),
(178, 'E7', 100075),
(196, 'E14', 100081),
(196, 'E15', 100081),
(196, 'E12', 100082),
(196, 'E13', 100082),
(199, 'E15', 100083),
(199, 'E14', 100084),
(199, 'E13', 100085),
(199, 'E6', 100086),
(202, 'E14', 100087),
(202, 'E15', 100087),
(202, 'D12', 100088),
(202, 'D13', 100088),
(202, 'C14', 100089),
(202, 'C15', 100089),
(203, 'E14', 100090),
(203, 'E15', 100090),
(204, 'E14', 100091),
(205, 'E14', 100092),
(205, 'E15', 100092),
(205, 'E6', 100093),
(205, 'E7', 100093),
(205, 'E8', 100093),
(207, 'A9', 100094),
(207, 'A10', 100094),
(209, 'A1', 100095),
(209, 'C20', 100095),
(209, 'E19', 100095),
(202, 'C3', 100096),
(202, 'C4', 100096),
(202, 'C6', 100096),
(202, 'D3', 100096),
(202, 'D7', 100096),
(202, 'E6', 100096),
(202, 'E9', 100096),
(202, 'E10', 100096),
(211, 'E10', 100097),
(211, 'E11', 100097),
(202, 'D16', 100098),
(202, 'D17', 100098);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `movieid` int(10) UNSIGNED NOT NULL,
  `sessionid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `movieid`, `sessionid`) VALUES
(100000, 2, 154),
(100001, 2, 154),
(100002, 2, 154),
(100003, 2, 154),
(100004, 4, 156),
(100005, 2, 154),
(100006, 2, 154),
(100007, 2, 154),
(100008, 2, 166),
(100009, 2, 166),
(100010, 2, 166),
(100011, 2, 166),
(100012, 2, 166),
(100013, 2, 166),
(100014, 2, 166),
(100015, 2, 166),
(100016, 2, 166),
(100017, 2, 167),
(100018, 2, 167),
(100019, 2, 168),
(100020, 2, 168),
(100021, 2, 168),
(100022, 2, 168),
(100023, 2, 168),
(100024, 2, 168),
(100025, 2, 168),
(100026, 2, 168),
(100027, 2, 168),
(100028, 2, 168),
(100029, 2, 168),
(100030, 2, 168),
(100031, 2, 168),
(100032, 2, 168),
(100033, 2, 169),
(100034, 2, 168),
(100035, 2, 168),
(100036, 2, 168),
(100037, 2, 168),
(100038, 2, 168),
(100039, 2, 168),
(100040, 2, 168),
(100041, 2, 168),
(100042, 2, 168),
(100043, 2, 168),
(100044, 2, 168),
(100045, 2, 168),
(100046, 2, 168),
(100047, 2, 168),
(100048, 8, 170),
(100049, 11, 171),
(100050, 1, 172),
(100051, 3, 173),
(100052, 2, 174),
(100053, 4, 175),
(100054, 2, 176),
(100055, 2, 177),
(100056, 2, 177),
(100057, 2, 177),
(100058, 2, 177),
(100059, 2, 177),
(100060, 2, 177),
(100061, 2, 177),
(100062, 2, 177),
(100063, 2, 177),
(100064, 2, 177),
(100065, 2, 177),
(100066, 2, 177),
(100067, 2, 177),
(100068, 2, 177),
(100069, 2, 177),
(100070, 2, 177),
(100071, 2, 177),
(100072, 2, 177),
(100073, 2, 177),
(100074, 2, 177),
(100075, 4, 178),
(100076, 2, 177),
(100077, 6, 191),
(100078, 2, 192),
(100079, 2, 192),
(100080, 2, 195),
(100081, 2, 196),
(100082, 2, 196),
(100083, 2, 199),
(100084, 2, 199),
(100085, 2, 199),
(100086, 2, 199),
(100087, 2, 202),
(100088, 2, 202),
(100089, 2, 202),
(100090, 3, 203),
(100091, 2, 204),
(100092, 8, 205),
(100093, 8, 205),
(100094, 3, 207),
(100095, 3, 209),
(100096, 2, 202),
(100097, 2, 211),
(100098, 2, 202);

-- --------------------------------------------------------

--
-- Table structure for table `purchasedFood`
--

CREATE TABLE `purchasedFood` (
  `foodid` int(10) UNSIGNED NOT NULL,
  `orderid` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchasedFood`
--

INSERT INTO `purchasedFood` (`foodid`, `orderid`, `quantity`) VALUES
(1, 100000, 2),
(4, 100000, 2),
(2, 100059, 1),
(4, 100059, 1),
(4, 100060, 1),
(4, 100061, 1),
(5, 100061, 1),
(2, 100062, 1),
(8, 100063, 1),
(7, 100065, 1),
(7, 100067, 1),
(7, 100068, 1),
(7, 100069, 1),
(7, 100070, 1),
(1, 100071, 2),
(2, 100071, 1),
(3, 100071, 1),
(4, 100071, 1),
(2, 100072, 1),
(2, 100073, 1),
(7, 100074, 1),
(6, 100075, 1),
(7, 100075, 1),
(8, 100075, 1),
(6, 100076, 1),
(7, 100076, 1),
(8, 100076, 1),
(8, 100077, 1),
(1, 100078, 1),
(2, 100078, 1),
(4, 100079, 1),
(6, 100079, 1),
(1, 100082, 1),
(3, 100086, 1),
(8, 100086, 1),
(1, 100087, 2),
(1, 100089, 1),
(2, 100090, 1),
(8, 100090, 1),
(6, 100091, 1),
(1, 100092, 2),
(3, 100092, 1),
(8, 100092, 2),
(1, 100094, 1),
(2, 100095, 3),
(8, 100097, 1),
(7, 100098, 1);

-- --------------------------------------------------------

--
-- Table structure for table `upcomingMovies`
--

CREATE TABLE `upcomingMovies` (
  `movieid` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `imagePathForMovieDetails` varchar(255) NOT NULL,
  `imdbRating` float(2,1) UNSIGNED NOT NULL,
  `guidianceRating` char(10) NOT NULL,
  `duration` int(10) UNSIGNED NOT NULL,
  `year` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcomingMovies`
--

INSERT INTO `upcomingMovies` (`movieid`, `title`, `imagePath`, `imagePathForMovieDetails`, `imdbRating`, `guidianceRating`, `duration`, `year`, `description`) VALUES
(1, 'Us(R18)', 'movie-us.jpg', 'movie-us-large.png', 3.0, 'NC16', 116, 2022, 'In 1986, a young girl named Adelaide watches a commercial for Hands Across America. At night, at the Santa Cruz Beach Boardwalk, she wanders away from her parents and enters a funhouse, where she encounters a doppelgänger of herself in the house of mirrors. Following the encounter she stops speaking and withdraws from her family. Years later, an adult Adelaide goes on vacation with her husband, Gabriel Wilson, and their children Zora and Jason. She is apprehensive about the trip, but despite her misgivings, the family meet with their friends Josh and Kitty Tyler and their twin daughters at the beach. On the way there, they witness paramedics taking away the bloody body of an old man. Jason later sees someone strangely similar to the old man, standing still with his arms outstretched and hands bloody.'),
(2, '10 things I hate about you', 'movie-hate.jpg', 'movie-10things-large.jpg', 3.0, 'PG13', 97, 1999, 'Cameron James, a new student at Padua High School in the Seattle area, instantly falls in love with beautiful and popular sophomore Bianca Stratford. Geeky Michael Eckman warns him that Bianca is vapid and conceited, and that her overprotective father does not allow Bianca or her older sister, the shrewish Kat, to date. Kat, a senior, is accepted to Sarah Lawrence College in New York, but her father, Walter, wants her to stay close to home. Bianca wishes to date affluent senior Joey Donner, but Walter, an obstetrician worrisome of teenage pregnancy, will not allow his daughters to date until they graduate. Frustrated by Bianca\'s insistence and Kat\'s rebelliousness, Walter declares that Bianca may date only when Kat does, knowing that Kat\'s anti-social attitude makes this unlikely.'),
(3, 'Jurassic Park', 'movie-jurassic.jpg', 'movie-jurassic-large.jpg', 5.0, 'PG13', 147, 2022, 'Jurassic World Dominion is a 2022 American science fiction action film directed by Colin Trevorrow, who co-wrote the screenplay with Emily Carmichael from a story by Derek Connolly and Trevorrow. The sequel to Jurassic World: Fallen Kingdom (2018), it is the third and final installment in the Jurassic World trilogy as well as the sixth installment in the Jurassic Park franchise, concluding the storyline of the original Jurassic Park trilogy. The film has an ensemble cast, including Chris Pratt, Bryce Dallas Howard, Laura Dern, Jeff Goldblum, Sam Neill, DeWanda Wise, Mamoudou Athie, BD Wong, and Omar Sy. Dern, Goldblum, and Neill reprise their roles from the Jurassic Park trilogy, appearing together for the first time since the 1993 film.'),
(4, '007: No time to die', 'movie-007.jpg', 'movie-007-large.jpg', 5.0, 'PG13', 163, 2021, 'No Time to Die is a 2021 spy film and the twenty-fifth in the James Bond series produced by Eon Productions, starring Daniel Craig in his fifth and final portrayal of fictional British MI6 agent James Bond. It was directed by Cary Joji Fukunaga from a screenplay by Neal Purvis, Robert Wade, Fukunaga and Phoebe Waller-Bridge. Léa Seydoux, Ben Whishaw, Naomie Harris, Jeffrey Wright, Christoph Waltz, Rory Kinnear and Ralph Fiennes reprise their roles from previous films, with Rami Malek, Lashana Lynch, Billy Magnussen, Ana de Armas, David Dencik and Dali Benssalah also starring. In No Time to Die, Bond has left active service with MI6 and is recruited by the CIA to find a kidnapped scientist, which leads to a showdown with a powerful adversary.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `movieSessions`
--
ALTER TABLE `movieSessions`
  ADD PRIMARY KEY (`sessionid`),
  ADD KEY `movieid` (`movieid`);

--
-- Indexes for table `occupiedSeats`
--
ALTER TABLE `occupiedSeats`
  ADD KEY `sessionid` (`sessionid`),
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `movieid` (`movieid`),
  ADD KEY `sessionid` (`sessionid`);

--
-- Indexes for table `purchasedFood`
--
ALTER TABLE `purchasedFood`
  ADD KEY `foodid` (`foodid`),
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `upcomingMovies`
--
ALTER TABLE `upcomingMovies`
  ADD PRIMARY KEY (`movieid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100099;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movieid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movieSessions`
--
ALTER TABLE `movieSessions`
  MODIFY `sessionid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100099;

--
-- AUTO_INCREMENT for table `upcomingMovies`
--
ALTER TABLE `upcomingMovies`
  MODIFY `movieid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movieSessions`
--
ALTER TABLE `movieSessions`
  ADD CONSTRAINT `moviesessions_ibfk_1` FOREIGN KEY (`movieid`) REFERENCES `movies` (`movieid`);

--
-- Constraints for table `occupiedSeats`
--
ALTER TABLE `occupiedSeats`
  ADD CONSTRAINT `occupiedseats_ibfk_1` FOREIGN KEY (`sessionid`) REFERENCES `movieSessions` (`sessionid`),
  ADD CONSTRAINT `occupiedseats_ibfk_2` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`movieid`) REFERENCES `movies` (`movieid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`sessionid`) REFERENCES `movieSessions` (`sessionid`);

--
-- Constraints for table `purchasedFood`
--
ALTER TABLE `purchasedFood`
  ADD CONSTRAINT `purchasedfood_ibfk_1` FOREIGN KEY (`foodid`) REFERENCES `food` (`foodid`),
  ADD CONSTRAINT `purchasedfood_ibfk_2` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
