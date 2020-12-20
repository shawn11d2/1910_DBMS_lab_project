-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 11:35 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('amanda', 'amanda'),
('shawn', 'shawn');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `place` varchar(255) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `place`, `experience`, `comments`) VALUES
(8, 'sdd', 'Calangute Beach', 'good', 'good place visit again'),
(9, 'sdd', 'Harvalem waterfall ', 'good', 'Scenic beauty'),
(10, 'Suraj', 'Old Goa church', 'good', 'Must Visit place in Goa. '),
(11, 'Suraj', 'Panjim Church', 'good', 'Beautiful view when lighted up in the night.'),
(12, 'Alister', 'Calangute Beach ', 'good', 'Good place');

-- --------------------------------------------------------

--
-- Table structure for table `tguide`
--

CREATE TABLE `tguide` (
  `id` int(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `place` text NOT NULL,
  `description` text NOT NULL,
  `pimage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tguide`
--

INSERT INTO `tguide` (`id`, `category`, `location`, `place`, `description`, `pimage`) VALUES
(15, 'beaches', 'North Goa, Calangute', 'Calangute Beach ', 'Calangute Beach  is a perfect tourist retreat, filled with souvenir stalls, shacks and other stalls selling everything from beer, trinkets to pawns. All these simply add to the popularity of beach, making it a must-visit place.', 'DBimages/1608376672Calangute-Beach.png'),
(16, 'beaches', 'North Goa , Morjim', 'Morjim Beach', 'Morjim Beach in Goa is one of the best beaches to visit in the course of your holiday. The scenic beauty of changing colours of the sky and setting sun defines this place. The Morjim beach is acknowledged as one of the pristine beaches in Goa for its tranquil environment.', 'DBimages/1608227799morjim.jpg'),
(17, 'waterfalls', 'South Goa, Sanguem ', 'Dudhsagar Falls', 'The name Dudhsagar literally translates to sea of milk which many believe is an allusion to the white spray and foam that the great waterfall creates as it cascades into the waters of the lake. The falls are at their zenith during the monsoon season, although they are a popular attraction all year round.', 'DBimages/1608228649dudsagar.jpg'),
(18, 'waterfalls', 'North Goa, Sanquelim', 'Harvalem waterfall ', 'Harvalem waterfall is a scenic, serene and worth-visiting place, especially when the monsoon sets in, in this southwestern coast of Goa. It is situated in the vicinity of Bicholim and Sequelim towns in North Goa.', 'DBimages/1608229745harvale.jpg'),
(19, 'sites', 'Old Goa', 'Old Goa church', 'The Basilica of Bom Jesus Church located in Goa is one of a kind in India and is known for its exemplary baroque architecture. A site with rich cultural and religious significance, the Basilica of Bom Jesus has been declared a World Heritage Site by UNESCO. ', 'DBimages/1608231228oldgoa_church.jpg'),
(21, 'sites', 'North Goa , Ponda', 'Mangeshi temple', 'The Mangueshi temple or the Manguesh Devasthan is perhaps the most famous of all Goan temples. It is located at Priol in Ponda taluka, about 21 kilometers from the capital city of Panaji. The surrounding area is known as Mangueshi.', 'DBimages/1608231844mangesh temple.jpg'),
(22, 'beaches', 'South Goa, Palolem', 'Butterfly Beach', 'You can bag the best time of your vacation at Butterfly Beach which is north of Palolem Beach in Southern Goa. Enjoy your solitude, away from the rest of the world and also experience the wonderful aquatic life out in the open front of the beach.', 'DBimages/1608375099beach2.jpg'),
(23, 'sites', 'North Goa, Panjim', 'Panjim Church', 'The Our Lady of the Immaculate Conception Church is located in Panjim and sits atop a small hill facing the busy main square below. Barring roadside no dedicated parking available. An attractive architecture with bright white colour exterior and colorful interior. One has to climb couples of stairs to enter the main hall of the church. The main altar is dedicated to Mother Mary.', 'DBimages/1608375738pan_church.jpg'),
(24, 'beaches', 'North Goa,Miramar', 'Miramar Beach', 'Miramar Beach in Panjim is the longest beach in the state. Stretching as far as 2 kilometers, the beach sits on the confluence of the Mandovi River and the Arabian sea, offering splendid oceanic views.', 'DBimages/1608376311miramar.jpg'),
(25, 'waterfalls', 'South Goa, Surla', 'Tambdi Surla Waterfalls', 'Absolutely breathtaking and pristine, Tambdi Surla Falls is an incredible place for nature lovers. Not only is the waterfall a sight to behold, but the hike to it is also a worthy experience. As the cascade is within Bhagwan Mahavir Wildlife Sanctuary and Mollem National Park, which is one of the best places to visit in South Goa, you can expect to see a whole lot of animals.', 'DBimages/1608376630tambdisurla.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'sdd', 'abcd@gmail.com', 'abcd'),
(2, 'amanda', 'ama@gmail.com', 'shawn'),
(3, 'ABD', 'devil@gmail.com', 'kaipoche'),
(4, 'Mayuresh', 'may@gmail.com', 'asdfg'),
(5, 'Shawn', 'sld@yahoo.com', 'abcd'),
(6, 'RaunakT', 'rt@gmail.com', 'abcd'),
(7, 'Peter', 'pt@hotmail.com', 'abcd'),
(8, 'Suraj', 'sj@gmail.com', 'abcd'),
(9, 'Alister', 'ali@gmail.com', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tguide`
--
ALTER TABLE `tguide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tguide`
--
ALTER TABLE `tguide`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
