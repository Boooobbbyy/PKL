-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 05:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-02-08-040450', 'App\\Database\\Migrations\\User', 'default', 'App', 1612778316, 1);

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
(1, 'Algoritma dan Pemrograman dalam C++', 'Algoritma-dan-Pemrograman-dalam-C++', '<p>$this-&gt;portofolioModel = new PortofolioModel();</p>', '1. Nabil.png', 1613582798, 'admin'),
(0, 'fsdf', 'fsdf', '<p>aaaaa</p>', '1.jpg', 1613645283, 'admin'),
(0, 'testt', 'testt', '<p>test1</p>', '1.png', 1613658002, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `profile_pt` varchar(255) NOT NULL,
  `logo_pt` varchar(255) NOT NULL,
  `no_telp` int(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama_pt`, `profile_pt`, `logo_pt`, `no_telp`, `email`, `tempat`) VALUES
(1, 'arsi enarcon', 'test', 'aa', 815403785, 'test@gmail.com', 'bsndung');

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
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `date_created`) VALUES
(1, 'Administrator', 'admin', '$2y$10$T5cCHvJeXfU472dpMTuY1.2BNlFZajJFx9OBidkSpHdDHh2s88J.O', 2021);

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
(2, 'I really miss you... Chill vibes', '<p>I really miss you... Chill vibes Just relax and enjoy this chill mix: <a href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqazJiZjkyczZZb05SdmczNDR3bjBPUW5KTEdVd3xBQ3Jtc0ttdUUwUlcxV1N6QzdFSjRHRDA3SHRCNnRQUlhNclVWeEo1b0VqRWxwRDBjdnFzSWl2OF9WSnJrLXdkaS1yU2dMYW9VYVotSGx5TGhwMmd1a2Z1LVZxQVhpQlB0cmNiU091UzlaNXN6aEs4b3ZFNUUtSQ&amp;q=https%3A%2F%2Fbit.ly%2Fchillvibesmusic\">https://bit.ly/chillvibesmusic</a>​ Discover the best pop music &amp; chill songs: <a href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbHY4VWQ4dnJtRVpTcjd6U09PVnJuY21YNlJLUXxBQ3Jtc0ttZHlVWlNqZzFOaVRpeWV4NzE3UFcwMU0zcnp6VkVacG1hVTB4bmV1OXdXNVZWN3B1TDlrU3lKQVh4NXR5b3lRWHhjRDI1UjByb1hoZkNMX2N6LWJ4RWJTd0ZBcHQzOXN1R0xLWXVkejRUR1BoWnlMOA&amp;q=http%3A%2F%2Fbit.ly%2FLovelifelyrics\">http://bit.ly/Lovelifelyrics</a></p>', 'https://www.youtube.com/embed/9AYl10qxc0M', 1612871413),
(4, 'fsdf', '<p>test</p>', 'https://www.youtube.com/embed/EBotfH842hc', 1613621344);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
