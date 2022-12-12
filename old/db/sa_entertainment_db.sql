-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 04:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sa_entertainment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ID` int(4) NOT NULL,
  `Title` varchar(60) NOT NULL,
  `Author` varchar(60) NOT NULL,
  `GenreId` int(4) NOT NULL,
  `UploadedBy` int(4) NOT NULL,
  `UploadedAt` datetime NOT NULL,
  `File` varchar(80) NOT NULL,
  `IsOpenForGenSub` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_history`
--

CREATE TABLE `book_history` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `BookId` int(4) NOT NULL,
  `LastViewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_list`
--

CREATE TABLE `book_list` (
  `ID` int(4) NOT NULL,
  `BookId` int(4) NOT NULL,
  `UserId` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `current_mood`
--

CREATE TABLE `current_mood` (
  `ID` int(5) NOT NULL,
  `userID` int(4) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `ID` int(4) NOT NULL,
  `Title` varchar(60) NOT NULL,
  `File` varchar(80) NOT NULL,
  `GenreId` int(4) NOT NULL,
  `UploadedBy` int(4) NOT NULL,
  `UploadedAt` datetime NOT NULL,
  `IsOpenForGenSub` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `game_history`
--

CREATE TABLE `game_history` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `GameId` int(4) NOT NULL,
  `LastViewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `game_list`
--

CREATE TABLE `game_list` (
  `ID` int(4) NOT NULL,
  `GameId` int(4) NOT NULL,
  `UserId` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `ID` int(4) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `ID` int(4) NOT NULL,
  `Title` varchar(60) NOT NULL,
  `ReleaseDate` datetime NOT NULL,
  `File` varchar(80) NOT NULL,
  `GenreId` int(4) NOT NULL,
  `UploadedBy` int(4) NOT NULL,
  `UploadedAt` datetime NOT NULL,
  `IsOpenForGenSub` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie_history`
--

CREATE TABLE `movie_history` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `MovieId` int(4) NOT NULL,
  `LastViewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie_list`
--

CREATE TABLE `movie_list` (
  `ID` int(4) NOT NULL,
  `MovieId` int(4) NOT NULL,
  `UserId` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `ID` int(4) NOT NULL,
  `Title` varchar(60) NOT NULL,
  `Artist` varchar(30) NOT NULL,
  `GenreId` int(4) NOT NULL,
  `Language` varchar(15) NOT NULL,
  `UploadedBy` int(4) NOT NULL,
  `UploadedAt` datetime NOT NULL,
  `File` varchar(80) NOT NULL,
  `IsOpenForGenSub` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `music_history`
--

CREATE TABLE `music_history` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `MusicId` int(4) NOT NULL,
  `LastViewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `music_list`
--

CREATE TABLE `music_list` (
  `ID` int(4) NOT NULL,
  `MusicId` int(4) NOT NULL,
  `UserId` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `IsPaid` bit(1) NOT NULL,
  `PaymentDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promoted_book`
--

CREATE TABLE `promoted_book` (
  `ID` int(4) NOT NULL,
  `BookId` int(4) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promoted_game`
--

CREATE TABLE `promoted_game` (
  `ID` int(4) NOT NULL,
  `GameId` int(4) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promoted_movie`
--

CREATE TABLE `promoted_movie` (
  `ID` int(4) NOT NULL,
  `MovieId` int(4) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promoted_music`
--

CREATE TABLE `promoted_music` (
  `ID` int(4) NOT NULL,
  `MusicId` int(4) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promoted_series`
--

CREATE TABLE `promoted_series` (
  `ID` int(4) NOT NULL,
  `SeriesId` int(4) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `ID` int(4) NOT NULL,
  `Title` varchar(60) NOT NULL,
  `ReleaseDate` datetime NOT NULL,
  `GenreId` int(4) NOT NULL,
  `File` varchar(80) NOT NULL,
  `UploadedBy` int(4) NOT NULL,
  `UploadedAt` datetime NOT NULL,
  `IsOpenForGenSub` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `series_history`
--

CREATE TABLE `series_history` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `SeriesId` int(4) NOT NULL,
  `LastViewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `series_list`
--

CREATE TABLE `series_list` (
  `ID` int(4) NOT NULL,
  `SeriesId` int(4) NOT NULL,
  `UserId` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `share_snap`
--

CREATE TABLE `share_snap` (
  `ID` int(4) NOT NULL,
  `userID` int(4) NOT NULL,
  `file` varchar(80) NOT NULL,
  `uploadedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(80) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Biography` text DEFAULT NULL,
  `DOB` varchar(20) NOT NULL,
  `Picture` varchar(80) DEFAULT NULL,
  `Type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `Name`, `Password`, `Gender`, `Biography`, `DOB`, `Picture`, `Type`) VALUES
('aneen@gmail.com', 'aneen', '1591', 'Female', '', '2000-11-29', '', 'content_creator'),
('cat@gmail.com', 'cat', '151515', 'Male', '                                                                                                                                                                                         I am cat                                                                                                                                                                                                                      ', '1999-11-27', '../../assets/general_subscriber/uploads/profile_pictures/cat@gmail.com', 'general_subscriber'),
('jesmin@gmail.com', 'jesmin', '1234567', 'Female', '', '2000-11-27', '', 'general_subscriber'),
('man@gmail.com', 'man', '121212', 'Male', '', '2022-11-28', '', 'general_subscriber'),
('nayeema.mim03@gmail.com', 'nayeema', '1234', 'Female', '', '2000-12-05', '', 'general_subscriber'),
('ony@gmail.com', 'ony', '12356', 'Female', '', '2000-11-27', '', 'general_subscriber'),
('rafi@gmail.com', 'rafi', '123123', 'Male', '', '2000-11-27', '', 'general_subscriber'),
('rezaul@gmail.com', 'Md Rezaul', '123123', 'Male', '     Traveler                                                               ', '1988-11-27', '../../assets/content_creator/uploads/profile_pictures/rezaul@gmail.com', 'content_creator'),
('sadia@gmail.com', 'Sadia Afrin', '12345', 'Female', 'Chairperson\r\nIEEE AIUB SB                                                           ', '2000-02-02', '../../assets/general_subscriber/uploads/profile_pictures/sadia@gmail.com', 'general_subscriber'),
('tiham@gmail.com', 'Tiham', '1234567', 'Male', '', '2000-12-06', '', 'general_subscriber'),
('tripty@gmail.com', 'mim', '123321', 'Female', '                             mim mim                               ', '2000-12-12', '../../assets/content_creator/uploads/profile_pictures/tripty@gmail.com', 'content_creator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `book_history`
--
ALTER TABLE `book_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `book_list`
--
ALTER TABLE `book_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `current_mood`
--
ALTER TABLE `current_mood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `game_history`
--
ALTER TABLE `game_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `game_list`
--
ALTER TABLE `game_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movie_history`
--
ALTER TABLE `movie_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movie_list`
--
ALTER TABLE `movie_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `music_history`
--
ALTER TABLE `music_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `music_list`
--
ALTER TABLE `music_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `promoted_book`
--
ALTER TABLE `promoted_book`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `promoted_game`
--
ALTER TABLE `promoted_game`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `promoted_movie`
--
ALTER TABLE `promoted_movie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `promoted_music`
--
ALTER TABLE `promoted_music`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `promoted_series`
--
ALTER TABLE `promoted_series`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `series_history`
--
ALTER TABLE `series_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `series_list`
--
ALTER TABLE `series_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
