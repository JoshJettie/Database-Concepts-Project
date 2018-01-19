-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2017 at 09:01 AM
-- Server version: 5.6.36-82.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joshuaj7_Josh_Jettie_BaseBall_Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Game`
--

CREATE TABLE `Game` (
  `Game_ID` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Stadium` int(255) NOT NULL,
  `Home_Team_ID` int(255) NOT NULL,
  `Away_Team_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Game`
--

INSERT INTO `Game` (`Game_ID`, `Date`, `Stadium`, `Home_Team_ID`, `Away_Team_ID`) VALUES
(1, '01122001', 1, 2, 1),
(2, '02012001', 1, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Player`
--

CREATE TABLE `Player` (
  `Bat_Hand` varchar(255) DEFAULT NULL,
  `Player_ID` int(11) NOT NULL,
  `Player_Number` int(2) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Throws_Hand` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Player`
--

INSERT INTO `Player` (`Bat_Hand`, `Player_ID`, `Player_Number`, `First_Name`, `Last_Name`, `Throws_Hand`) VALUES
('R', 1, 99, 'Aaron', 'Judge', 'R'),
('R', 2, 27, 'Jose', 'Altuve', 'R'),
('R', 3, 97, ' Aspen', 'Olmsted', 'L'),
('L', 5, 55, 'Lefty', 'Rightson', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `Position`
--

CREATE TABLE `Position` (
  `Position_ID` int(11) NOT NULL,
  `Abbreviation` varchar(2) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Position`
--

INSERT INTO `Position` (`Position_ID`, `Abbreviation`, `Description`) VALUES
(1, 'P', 'Pitcher'),
(2, 'C', 'Catcher'),
(3, '1B', 'FirstBase'),
(4, '2B', 'SecondBase'),
(5, '3B', 'ThirdBase'),
(6, 'SS', 'ShortStop'),
(7, 'LF', 'LeftField'),
(8, 'CF', 'CenterField'),
(9, 'RF', 'RightField'),
(10, 'DH', 'DesignatedHitter');

-- --------------------------------------------------------

--
-- Table structure for table `Roster`
--

CREATE TABLE `Roster` (
  `Team_ID` int(10) NOT NULL,
  `Season_ID` int(5) NOT NULL,
  `Roster_Name` varchar(255) NOT NULL,
  `Roster_ID` int(11) NOT NULL,
  `Player_ID` int(11) NOT NULL,
  `Position_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Roster`
--

INSERT INTO `Roster` (`Team_ID`, `Season_ID`, `Roster_Name`, `Roster_ID`, `Player_ID`, `Position_ID`) VALUES
(1, 1, 'Oakland', 1, 1, 4),
(1, 1, 'orioles', 2, 0, 0),
(1, 1, 'Oakland', 3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Season`
--

CREATE TABLE `Season` (
  `Start_Date` int(11) NOT NULL,
  `End_Date` int(11) NOT NULL,
  `Season_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Season`
--

INSERT INTO `Season` (`Start_Date`, `End_Date`, `Season_ID`) VALUES
(5012001, 10122001, 1),
(9302002, 9302001, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Stadium`
--

CREATE TABLE `Stadium` (
  `Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Stadium_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Stadium`
--

INSERT INTO `Stadium` (`Name`, `Location`, `Stadium_ID`) VALUES
('Oakland Alameda Coliseum\r\n', 'Oakland Califorina', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Team`
--

CREATE TABLE `Team` (
  `Team_ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Team`
--

INSERT INTO `Team` (`Team_ID`, `Name`, `Location`) VALUES
(1, ' Athletics', 'Oakland'),
(2, 'Tigers', 'Detroit'),
(3, ' Cubbies', 'Chicago'),
(4, 'Yankees', 'NewYork'),
(5, 'Dodgers', 'LosAngeles'),
(6, 'RedSox', 'Boston'),
(7, 'Astros', 'Houston'),
(8, 'Indians', 'Cleveland'),
(9, 'Toronto', 'BlueJays'),
(10, 'LosAngeles', 'Angels'),
(11, 'Mets', 'NewYork'),
(12, 'St.Louis', 'Cardinals'),
(13, 'Giants', 'SanFrancisco'),
(14, 'Nationals', 'Washington'),
(15, 'Diamondbacks', 'Arizona'),
(16, 'Rangers', 'Texas'),
(17, 'Orioles', 'Baltimore'),
(18, 'Royals', 'KansasCity'),
(19, 'Twins', 'Minnesota'),
(20, 'Brewers', 'Milwaukee'),
(21, 'Phillies', 'Philadelphia '),
(22, 'Rockies', 'Colorado'),
(23, 'Braves', 'Atlanta'),
(24, 'Pirates', 'Pittsburg'),
(25, 'Marlins', 'Miami'),
(26, 'Mariners', 'Seattle'),
(27, 'WhiteSox', 'Chicago '),
(28, 'Reds', 'Cincinnati '),
(29, 'Padres', 'SanDiego');

-- --------------------------------------------------------

--
-- Table structure for table `Trades`
--

CREATE TABLE `Trades` (
  `From_team` varchar(255) NOT NULL,
  `To_team` varchar(255) NOT NULL,
  `Trade_ID` int(4) NOT NULL,
  `Player_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Game`
--
ALTER TABLE `Game`
  ADD PRIMARY KEY (`Game_ID`),
  ADD KEY `Stadium` (`Stadium`),
  ADD KEY `Home_Team_ID` (`Home_Team_ID`),
  ADD KEY `Away_Team_ID` (`Away_Team_ID`);

--
-- Indexes for table `Player`
--
ALTER TABLE `Player`
  ADD PRIMARY KEY (`Player_ID`);

--
-- Indexes for table `Position`
--
ALTER TABLE `Position`
  ADD PRIMARY KEY (`Position_ID`);

--
-- Indexes for table `Roster`
--
ALTER TABLE `Roster`
  ADD PRIMARY KEY (`Roster_ID`),
  ADD KEY `Season_ID` (`Season_ID`),
  ADD KEY `Team_ID` (`Team_ID`);

--
-- Indexes for table `Season`
--
ALTER TABLE `Season`
  ADD PRIMARY KEY (`Season_ID`);

--
-- Indexes for table `Stadium`
--
ALTER TABLE `Stadium`
  ADD PRIMARY KEY (`Stadium_ID`);

--
-- Indexes for table `Team`
--
ALTER TABLE `Team`
  ADD PRIMARY KEY (`Team_ID`);

--
-- Indexes for table `Trades`
--
ALTER TABLE `Trades`
  ADD PRIMARY KEY (`Trade_ID`),
  ADD KEY `Player_ID` (`Player_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Game`
--
ALTER TABLE `Game`
  ADD CONSTRAINT `Game_ibfk_1` FOREIGN KEY (`Stadium`) REFERENCES `Stadium` (`Stadium_ID`),
  ADD CONSTRAINT `Game_ibfk_2` FOREIGN KEY (`Home_Team_ID`) REFERENCES `Team` (`Team_ID`),
  ADD CONSTRAINT `Game_ibfk_3` FOREIGN KEY (`Away_Team_ID`) REFERENCES `Team` (`Team_ID`);

--
-- Constraints for table `Roster`
--
ALTER TABLE `Roster`
  ADD CONSTRAINT `Roster_ibfk_1` FOREIGN KEY (`Team_ID`) REFERENCES `Team` (`Team_ID`),
  ADD CONSTRAINT `Roster_ibfk_2` FOREIGN KEY (`Season_ID`) REFERENCES `Season` (`Season_ID`);

--
-- Constraints for table `Trades`
--
ALTER TABLE `Trades`
  ADD CONSTRAINT `Trades_ibfk_1` FOREIGN KEY (`Player_ID`) REFERENCES `Player` (`Player_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
