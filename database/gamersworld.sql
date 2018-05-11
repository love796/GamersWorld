-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 04:21 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gamersworld`
--
CREATE DATABASE IF NOT EXISTS `gamersworld` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gamersworld`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Cover` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Name`, `Description`, `Cover`) VALUES
(1, 'GTA V', 'Grand Theft Auto V is an action-adventure video game developed by Rockstar North and published by Rockstar Games. It was released on 17 September 2013 for the PlayStation 3 and Xbox 360, on 18 November 2014 for the PlayStation 4 and Xbox One, and on 14 April 2015 for Microsoft Windows. It is the first main entry in the Grand Theft Auto series since 2008''s Grand Theft Auto IV. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three criminals and their efforts to commit heists while under pressure from a government agency. The open world design lets players freely roam San Andreas'' open countryside and the fictional city of Los Santos, based on Los Angeles.', 'images/gta.jpg'),
(2, 'Counter Strike', 'Counter-Strike (officially abbreviated as CS) is a series of multiplayer first-person shooter video games, in which teams of terrorists and counter-terrorists battle to, respectively, perpetrate an act of terror (bombing, hostage-taking) and prevent it (bomb defusal, hostage rescue). The series began on Windows in 1999 with the first version of Counter-Strike. It was initially released as a modification for Half-Life and designed by Minh "Gooseman" Le and Jess "Cliffe" Cliffe, before the rights to the game''s intellectual property were acquired by Valve Corporation, the developers of Half-Life.', 'images/cs.jpg'),
(3, 'COD', 'Call of Duty is a first-person shooter video game franchise. The series began on Microsoft Windows, and later expanded to consoles and handhelds. Several spin-off games have been released. The earlier games in the series are set primarily in World War II, but later games like Call of Duty 4: Modern Warfare are set in modern times or in futuristic settings. The most recently announced game, Call of Duty: WWII, will release on November 3, 2017 and return the series to its early-20th century roots.', 'images/call.png'),
(4, 'DC universe online', 'DC Universe Online (abbreviated DCUO) is a free-to-play action combat massive multiplayer online game[1] set in the DC Universe of DC Comics. Developed by Daybreak Game Company and co-published by Daybreak Game Company and WB Games, the game was released on January 11, 2011.', 'images/unn.jpg'),
(5, 'COC', 'Clash of Clans is a freemium mobile strategy video game developed and published by Supercell. The game was released for iOS platforms on August 2, 2012, and on Google Play for Android on October 7, 2013.\r\n\r\nThe game is set in a fantasy themed[3] persistent world[4] where the player is a chief of a village. Clash of Clans tasks players to build their own town using the resources gained from attacking other players through the game''s fighting features. The main resources are gold, elixir and dark elixir. Players can conjoin to create clans, groups of up to fifty people who can then partake in Clan Wars together, donate and receive troops, and talk with each other.', 'images/coc.jpg'),
(6, 'Minecraft', 'Minecraft is a sandbox video game created and designed by Swedish game designer Markus "Notch" Persson, and later fully developed and published by Mojang. The creative and building aspects of Minecraft enable players to build constructions out of textured cubes in a 3D procedurally generated world. Other activities in the game include exploration, resource gathering, crafting, and combat. Multiple gameplay modes are available, including a survival mode where the player must acquire resources to build the world and maintain health, a creative mode where players have unlimited resources to build with and the ability to fly, an adventure mode where players can play custom maps created by other players, and a spectator mode where players can fly around and clip through blocks, but cannot place or destroy any. The PC version of the game is noted for its modding scene, where a dedicated community creates new gameplay mechanics, items, and assets for the game.', 'images/min.png'),
(7, 'Team Fortress', 'Team Fortress 2 (TF2) is a team-based multiplayer first-person shooter video game developed and published by Valve Corporation. It is the sequel to the 1996 mod Team Fortress for Quake and its 1999 remake, Team Fortress Classic. It was released as part of the video game bundle The Orange Box in October 2007 for Microsoft Windows and the Xbox 360.[1] A PlayStation 3 version followed in December 2007.[2] The game was released for Windows as a standalone entry in April 2008, and was updated to support OS X in June 2010 and Linux in February 2013. It is distributed online through Valve''s digital retailer Steam, with retail distribution being handled by Electronic Arts.', 'images/for.jpg'),
(8, 'Overwatch', 'Overwatch is a team-based multiplayer online first-person shooter video game developed and published by Blizzard Entertainment. It was released in May 2016 for Windows, PlayStation 4, and Xbox One.\r\n\r\nOverwatch assigns players into two teams of six, with each player selecting one of 24 pre-defined characters, called heroes, each with unique movement, attributes, and abilities, whose roles are divided into four categories: Offense, Defense, Tank, and Support. Players on a team work together to secure and defend control points on a map or escort a payload across the map in a limited amount of time. Players gain cosmetic rewards that do not affect gameplay, such as character skins and victory poses, as they play the game. The game was initially launched with casual play, with a competitive ranked mode, various ''arcade'' game modes, and a player-customizable server browser subsequently included following its release. Additionally, Blizzard has developed and added new characters, maps, and g', 'images/overwatch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Friends` varchar(10000) NOT NULL,
  `Games` varchar(10000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `First_Name`, `Last_Name`, `Email`, `Password`, `Friends`, `Games`) VALUES
(2, 'love', 'singh', 'abc@example.com', '1234', '', ''),
(3, 'prabh', 'dhanoa', 'a@admin.com', '123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `ID` bigint(100) NOT NULL AUTO_INCREMENT,
  `Users` varchar(1000) NOT NULL,
  `Categories` varchar(1000) NOT NULL,
  `Messages` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`ID`, `Users`, `Categories`, `Messages`) VALUES
(1, '4', '8', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE IF NOT EXISTS `tbllogin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(150) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ujis AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'jmmaguigad', 'espionage28', 'John Manuel Macatuggal Maguigad'),
(2, 'joe', 'joe123', 'joe joe joe jr.'),
(3, 'parminder', '123', 'parminder');

-- --------------------------------------------------------

--
-- Table structure for table `user_chat_messages`
--

CREATE TABLE IF NOT EXISTS `user_chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_content` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `recipient` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_chat_messages`
--

INSERT INTO `user_chat_messages` (`id`, `message_content`, `username`, `recipient`) VALUES
(1, 'hlo', 'joe', 'parminder'),
(2, 'hlo', 'parminder', 'joe'),
(3, 'hlo', 'joe', 'parminder'),
(4, 'hiiiiiii', 'joe', 'parminder'),
(5, 'hhhhhhhhhhhh', 'joe', 'parminder'),
(6, 'jjhkjjkjk', 'joe', 'jmmaguigad'),
(7, 'hi', 'parminder', 'jmmaguigad'),
(8, 'hi', 'parminder', 'jmmaguigad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
