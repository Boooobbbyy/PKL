-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2021 at 05:28 PM
-- Server version: 10.3.25-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(128) NOT NULL,
  `date_uploaded` int(11) NOT NULL,
  `uploader` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `judul`, `slug`, `deskripsi`, `foto`, `date_uploaded`, `uploader`) VALUES
(1, 'Algoritma dan Pemrograman dalam C++', 'Algoritma-dan-Pemrograman-dalam-C++', '<p>$this-&gt;portofolioModel = new PortofolioModel();</p>', '1. Nabil.png', 1613582798, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `date_uploaded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `foto`, `date_uploaded`) VALUES
(4, '1. Nabil.png', 1613582461);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `date_created`) VALUES
(1, 'Aulia Ahmad Nabil', 'BrondoL', '$2y$10$AnVDWhJM1xw8Kt5Ht/w9Ueroj3/V5v.l9ffUP7Po6GaG.DyNfeLfG', '2020-12-04'),
(3, 'Administrator', 'admin', '$2y$10$JnIlqniiTuxdYsOWuyZVEOm7fhRrwIl/7oAI0qjoV0VbXBX3TinRq', '2021-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(128) NOT NULL,
  `date_uploaded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `judul`, `deskripsi`, `link`, `date_uploaded`) VALUES
(1, 'Astrid S - Hurts So Good (Lyric Video)', '<p>Astrids S - Hurts So Good (Lyric Video) Song: Hurts So Good by Astrid S lyrics Discover of best new pop music on my channel: http://bit.ly/Lovelifelyrics</p>', 'https://www.youtube.com/embed/8RmvCLn6RoI', 1613582442),
(2, 'I really miss you... Chill vibes', '<p>I really miss you... Chill vibes Just relax and enjoy this chill mix: <a href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqazJiZjkyczZZb05SdmczNDR3bjBPUW5KTEdVd3xBQ3Jtc0ttdUUwUlcxV1N6QzdFSjRHRDA3SHRCNnRQUlhNclVWeEo1b0VqRWxwRDBjdnFzSWl2OF9WSnJrLXdkaS1yU2dMYW9VYVotSGx5TGhwMmd1a2Z1LVZxQVhpQlB0cmNiU091UzlaNXN6aEs4b3ZFNUUtSQ&amp;q=https%3A%2F%2Fbit.ly%2Fchillvibesmusic\">https://bit.ly/chillvibesmusic</a>​ Discover the best pop music &amp; chill songs: <a href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbHY4VWQ4dnJtRVpTcjd6U09PVnJuY21YNlJLUXxBQ3Jtc0ttZHlVWlNqZzFOaVRpeWV4NzE3UFcwMU0zcnp6VkVacG1hVTB4bmV1OXdXNVZWN3B1TDlrU3lKQVh4NXR5b3lRWHhjRDI1UjByb1hoZkNMX2N6LWJ4RWJTd0ZBcHQzOXN1R0xLWXVkejRUR1BoWnlMOA&amp;q=http%3A%2F%2Fbit.ly%2FLovelifelyrics\">http://bit.ly/Lovelifelyrics</a></p>', 'https://www.youtube.com/embed/9AYl10qxc0M', 1612871413);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
