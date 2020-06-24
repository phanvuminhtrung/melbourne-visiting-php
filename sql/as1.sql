-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 01:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `as1`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin1', 'admin1', 'Trung', 'Phan'),
(2, 'admin2', 'admin2', 'John', 'Ray'),
(3, 'admin3', 'admin3', 'Black', 'Ka');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` tinyint(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `image`, `caption`, `location`, `date_update`) VALUES
(1, 'MELBOURNE', 'A packed agenda of food, whine, sports and arts is your introduction to the best Melbourne &ndash; from its creative, exciting city centre, to its buzzing neighbourhood hubs. It&rsquo;s the gateway to Victoria&rsquo;s world class wineries, natural springs, peninsulas, spectacular coastline and alpine villages. Discover more when you play with Melbourne.', 'images/mel.jpeg', 'Melbourne on the sun set', 'CBD', '2020-05-11 04:42:08'),
(2, 'GIPPSLAND', 'Stretch your legs in some of Victoria\'s most spectacular national parks, be charmed by tiny towns, and indulge in gourmet fresh produce in Gippsland. Amble along Ninety Mile Beach, set up camp in Wilsons Prom or set sail on the Gippsland Lakes. Feed your curiosity at galleries and studios, or at local cellar doors, boutique distilleries and renowned restaurants.', 'Images/gipp.jpg', 'Gippsland in morning view', '120km, East of Melbourne', '2020-04-09 09:03:31'),
(3, 'MORNINGTON PENINSULA', 'Breathe in the fresh sea air, sample innovative local cuisine, and soak up the relaxed alfresco lifestyle of the Mornington Peninsula, just an hour from Melbourne. Explore the galleries, spas and cafes in breezy seaside villages, cool off with a day on the beach, or escape to the hinterland for gourmet delights at boutique wineries.', 'Images/mor.jpg', 'Walking path at Peninsula', 'South-East Melbourne', '2020-03-16 04:18:01'),
(4, 'GREAT OCEAN ROAD', 'See the towering 12 Apostles, get up close to native wildlife, and take in iconic surf breaks, pristine rainforest and misty waterfalls along the spectacular Great Ocean Road. Get outdoors on bushwalking, surfing and mountain biking expeditions or take the cultural route through galleries, museums and heritage attractions. Feast on spectacular views and local produce along the way.', 'Images/great.jpg', 'Seashore of great ocean road.', '208km, South-West Melbourne', '2020-03-16 04:18:18'),
(5, 'GRAMPIANS', 'Head out on walking tracks that lead to dazzling waterfalls, wildlife and awe-inspiring a lookouts. Savour celebrated local wine at cellar doors and a sublime meal at a multi-award-winning restaurant. Take in extraordinary art, old and new, in galleries indoors and out. Wherever you go, be enchanted and inspired by the striking landscapes of the Grampians spread out before you.', 'Images/gram.jpg', 'On the peak of Grampians', '291km, West Melbourne', '2020-03-16 04:18:35'),
(6, 'PHILLIP ISLAND', 'Pristine white beaches and hi-octane motor sports, endless family fun and iconic wildlife, you\'ll find it all on a seaside holiday at Phillip Island, just 90 minutes from Melbourne. See little penguins and sleepy koalas in their natural habitat, teach the kids to swim on a quiet bay beach, and soak up all the action at the Australian Motorcycle Grand Prix. ', 'Images/phi.jpg', 'Phillip Island on the sun set', '120km, South-East Melbourne', '2020-03-16 04:19:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
