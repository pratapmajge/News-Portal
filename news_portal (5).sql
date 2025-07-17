-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 07:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `ID` int(6) NOT NULL,
  `CATEGORY_NAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`ID`, `CATEGORY_NAME`) VALUES
(1, 'Sports'),
(3, 'Educational'),
(4, 'Social'),
(5, 'Economical'),
(6, 'Health'),
(7, 'Business '),
(8, 'Political '),
(9, 'Entertainment '),
(10, 'Crime');

-- --------------------------------------------------------

--
-- Table structure for table `add_channel`
--

CREATE TABLE `add_channel` (
  `ID` int(10) NOT NULL,
  `NAME` text NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `DATE` date NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `CHARGES` bigint(20) NOT NULL,
  `CONTACT` bigint(12) NOT NULL,
  `ADHAR` bigint(20) NOT NULL,
  `CHANNEL_NAME` text NOT NULL,
  `PASSWORD` varchar(13) NOT NULL,
  `EDUCATION` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_channel`
--

INSERT INTO `add_channel` (`ID`, `NAME`, `EMAIL`, `DATE`, `USERNAME`, `CHARGES`, `CONTACT`, `ADHAR`, `CHANNEL_NAME`, `PASSWORD`, `EDUCATION`, `image`, `status`) VALUES
(1, 'Sayli Kulkarni', 'saylikullkarni@gmail.com', '2023-02-22', 'news24', 200000, 7276543567, 234356768899, 'News24', '123', 'B.Tech', 'upload/1_channel.png', 'approved'),
(2, 'Pratap Majge', 'pratap.majge@gmail.com', '2023-02-23', 'pratapM', 100000, 9178654356, 233456768899, 'TMG News Network ', '123', 'M.Tech', 'upload/2_channel.png', 'approved'),
(3, 'Shrutika Mahindrakar', 'shrutika123@gmail.com', '2023-02-08', 'shru', 1000000, 3454677897, 2343565678789898, 'Times Now', '123', 'Diploma', 'upload/3_channel.png', 'approved'),
(5, 'Shravani Deshpande', 'shravni0807@gmail.com', '2023-01-23', 'shrau', 300000, 7676889987, 435346767789, 'NE News', '123', 'B.Tech', 'upload/5_channel.png', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `add_comments`
--

CREATE TABLE `add_comments` (
  `ID` int(100) NOT NULL,
  `NAME` text NOT NULL,
  `MESSAGE` varchar(200) NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_comments`
--

INSERT INTO `add_comments` (`ID`, `NAME`, `MESSAGE`, `EMAIL`, `DATE`) VALUES
(1, 'Shrutika Mahindrakar', '', 'shrutika123@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `add_upload`
--

CREATE TABLE `add_upload` (
  `ID` int(3) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `IMAGE` varchar(100) NOT NULL,
  `DESCRIPTION` varchar(500) NOT NULL,
  `ADD_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_upload`
--

INSERT INTO `add_upload` (`ID`, `TITLE`, `IMAGE`, `DESCRIPTION`, `ADD_ID`) VALUES
(10, 'Just do it....!', 'upload/10_add.png', '', 5),
(11, 'Ghar par lays Always', 'upload/11_add.png', '', 5),
(12, 'Think Different', 'upload/12_add.png', '', 5),
(13, 'Because  you are worth it', 'upload/13_add.png', '', 5),
(14, 'It is finger linkin food', 'upload/14_add.png', '', 5),
(15, 'Share a coke', 'upload/15_add.png', '', 2),
(16, 'America runs on Dunkin', 'upload/16_add.png', '', 2),
(17, 'Have a break , Have a KitKat', 'upload/17_add.png', '', 2),
(18, 'A Diomond is forever ', 'upload/18_add.png', '', 2),
(19, 'A Better life . A Better World', 'upload/19_add.png', '', 2),
(20, 'Shave time , shave money', 'upload/20_add.png', '', 1),
(21, 'The Happiest place on earth', 'upload/21_add.png', '', 1),
(22, 'Where is the Beef', 'upload/22_add.png', '', 1),
(23, 'Smell like a Man , Man', 'upload/23_add.png', '', 1),
(24, 'It is everywhere you want to be.', 'upload/24_add.png', '', 1),
(25, 'Grace , Space, Pace', 'upload/25_add.png', '', 1),
(26, 'Let us Guide you Home', 'upload/26_add.png', '', 3),
(27, 'I am lovin it', 'upload/27_add.png', '', 3),
(28, 'When there is no Tomorrow ', 'upload/28_add.png', '', 3),
(29, 'The King of Beers', 'upload/29_add.png', '', 3),
(30, 'Quality Never Goes Out of Style', 'upload/30_add.png', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(3) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'news', '123');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `ID` int(3) NOT NULL,
  `STATE` int(11) NOT NULL,
  `DISTRICT` int(11) NOT NULL,
  `CITY` int(11) NOT NULL,
  `LOCATION` varchar(500) NOT NULL,
  `CID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`ID`, `STATE`, `DISTRICT`, `CITY`, `LOCATION`, `CID`) VALUES
(6, 15, 12, 137, 'Gandhi Nagar , Mumbai', 1),
(7, 15, 1, 2, 'Ambedkar Nagar, Thane', 1),
(8, 15, 2, 25, 'Appa Balwant Chowk, Ambegaon', 1),
(9, 15, 1, 15, 'Shanti Garden, Mira Road,  Thane', 1),
(10, 15, 2, 18, 'Shahaji Nagar , Khed', 1),
(11, 15, 20, 222, 'Shivaji Chowk, Latur\r\n', 1),
(12, 15, 20, 225, 'Balaji Nagar, Latur', 1),
(13, 15, 21, 233, '5 no. Warora', 1),
(16, 15, 1, 1, 'Anu Nagar,Thane', 2),
(17, 15, 1, 1, 'Azad Nagar, Thane', 2),
(18, 15, 1, 1, 'Balkum, Thane', 2),
(19, 15, 1, 1, 'Bhayander Pada, Thane', 2),
(20, 15, 1, 1, 'Brahmand, Thane', 2),
(21, 15, 1, 1, 'Charai, Thane', 2),
(22, 15, 1, 1, 'Diva, Thane', 2),
(23, 15, 1, 1, 'Dhokali Naka, Thane', 2),
(24, 15, 1, 1, 'Ghodbunder Road, Thane', 2),
(25, 15, 1, 1, 'Jambli Naka, Thane', 2),
(26, 15, 1, 1, 'Kolbad Road, Thane', 2),
(27, 15, 1, 1, 'Kolshet Road, Thane', 2),
(28, 15, 1, 1, 'Pokhran Road, Thane', 2),
(29, 15, 1, 1, 'Sawarkar Nagar, Thane', 2),
(30, 15, 1, 2, 'Shree Nagar, Kalyan', 2),
(31, 15, 1, 2, 'Vasant Vihar, Kalyan', 2),
(32, 15, 1, 2, 'Vartak Nagar, Kalyan', 2),
(33, 15, 1, 3, 'Majiwada, Vasai', 2),
(34, 15, 2, 18, 'Chakan Census Town, Khed', 2),
(35, 15, 2, 18, 'Shri Ram Nagar, Khed', 2),
(36, 15, 3, 30, 'Film City, Mumbai Suburban', 2),
(37, 15, 3, 30, 'Aarey Milk Colony, Mumbai Suburban', 2),
(38, 15, 4, 31, 'Anusaya Nagar, Nashik', 2),
(39, 15, 4, 31, 'Ashok Sthamb, Nashik', 2),
(40, 15, 4, 31, 'Bytco Point, Nashik', 2),
(41, 15, 4, 31, 'Canada Corner, Nashik', 2),
(42, 15, 4, 31, 'Gangapur Road, Nashik', 2),
(43, 15, 4, 31, 'Govind Nagar, Nashik ', 2),
(44, 15, 4, 31, 'Indira Nagar, Nashik ', 2),
(45, 15, 4, 31, 'Mahatma Nagar, Nashik', 2),
(46, 15, 4, 31, 'Jail road, Nashik\r\n', 2),
(47, 15, 4, 31, 'MG Road, Nashik ', 2),
(48, 15, 4, 31, 'Mumbai Agra Road, Nashik', 2),
(49, 15, 5, 46, 'Shivaji Nagar, Nagpur', 2),
(50, 15, 5, 54, 'MG Road, Narkhed, Nagpur', 2),
(52, 15, 7, 74, 'Vasant Vihar, Solapur', 2),
(53, 15, 7, 74, 'Bhawani Peth, Solapur', 2),
(54, 15, 7, 74, 'Ramling Nagar, Solapur', 2),
(55, 15, 7, 74, 'Airport Area, Shankar Nagar, Solapur', 2),
(56, 15, 9, 100, 'Yadav Nagar, Main Road, Kolhapur', 2),
(57, 15, 9, 100, 'Gur Market Yard, Kolhapur', 2),
(58, 15, 9, 104, 'Nagala Park, Panhala', 2),
(59, 15, 9, 102, 'Sane Guruji vasahat, Shirol', 2),
(60, 15, 9, 106, 'Tarabai Park, Kolhapur', 2),
(61, 15, 9, 109, 'Rankala Lake, Bhudargad, Kolhapur', 2),
(62, 15, 9, 110, 'Dajipur Wildlife sanctuary, Ajra, Kolhapur', 2),
(63, 15, 7, 74, 'Sat Rasta, Solapur', 2),
(64, 15, 7, 78, 'Navi Peth, Madha, Solapur', 2),
(65, 15, 7, 82, 'South Sadar Bazar, Solapur ', 2),
(66, 15, 7, 76, 'Datt Chowk, Pandharpur, Solapur', 2),
(67, 15, 9, 103, 'Shahupuri Kolhapur Road, Kagal, Kolhapur', 2),
(68, 15, 9, 108, 'Rajarampuri Kolhapur', 2),
(69, 15, 9, 107, 'Atigre Kolhapur', 2),
(70, 15, 9, 111, 'Mahalaxmi Chamber CBS, Kolhapur', 2),
(71, 15, 6, 61, 'Bolhegaon Suburban, Ahmadnagar', 2),
(72, 15, 6, 60, 'Bhavani Nagar, Ahmadnagar', 2),
(73, 15, 6, 60, 'Karjat, Ahmadnagar', 2),
(74, 15, 6, 60, 'Ahmadnagar Fort', 2),
(75, 15, 8, 85, 'MG College Road, Jalgaon', 2),
(76, 15, 8, 85, 'Opposite Municipal Corporation, Jalgaon', 2),
(77, 15, 8, 93, 'Samarth Colony, Yawal Taluka, Jalgaon', 2),
(78, 15, 10, 112, 'TV Center, Aurangabad', 2),
(79, 15, 10, 112, 'Silk Mill Colony, Aurangabad', 2),
(80, 15, 10, 112, 'Cidco Aurangabad', 2),
(81, 15, 10, 112, 'Kotla Colony, Aurangabad', 2),
(82, 15, 10, 112, 'Nath Valley School Road, Kanchanwadi, Aurangabad', 2),
(83, 15, 10, 112, 'Central Bus Stand Road, Aurangabad', 2),
(84, 15, 10, 112, 'Kranti Chowk, Aurangabad', 2),
(85, 15, 11, 121, 'Ganesh Nagar, Nanded ', 2),
(86, 15, 11, 121, 'Shivaji Nagar, Nanded', 2),
(87, 15, 11, 121, 'Arab Galli, Nanded', 2),
(88, 15, 11, 121, 'Dnyaneshwar Mandir, Chaufala, Nanded ', 2),
(89, 15, 11, 121, 'Hyder Bagh, Nanded', 2),
(90, 15, 11, 121, 'Dhamesh Nagar, Nanded ', 2),
(91, 15, 11, 121, 'Vishnupuri, Nanded', 2),
(92, 15, 11, 121, 'Taroda ,Nanded', 2),
(93, 15, 11, 121, 'Ambedkar Nagar, Nanded', 2),
(94, 15, 11, 121, 'Vazirabad', 2),
(95, 15, 13, 139, 'Chimanpura Peth, Satara', 2),
(96, 15, 13, 139, 'Panchgani, Satara', 2),
(97, 15, 13, 139, 'Dholya Ganpati Mandir, Satara', 2),
(98, 15, 13, 139, 'MIDC Road, Satara', 2),
(99, 15, 13, 139, 'Sonegaon Tarf, Satara', 2),
(100, 15, 13, 139, 'Ajinkya Colony, Sadar Bazar, Satara', 2),
(101, 15, 13, 139, 'Shaniwar Peth, Satara', 2),
(102, 15, 14, 149, 'Radha Nagar, Panchvati Chowk, Amravati', 2),
(103, 15, 14, 149, 'Gadge Nagar, Beside Hanuman Mandir, Amravati', 2),
(104, 15, 14, 149, 'Gandhi Chowk, Amravati ', 2),
(105, 15, 15, 163, 'Harbhat Road Gaon Bhaga, Sangli', 2),
(106, 15, 15, 163, 'Vishrambag Sangli', 2),
(107, 15, 15, 169, 'Gayatri Nagar , Sangli', 2),
(108, 15, 15, 163, 'Miraj Road, Sangli', 2),
(109, 15, 15, 163, 'Khanbag Sangli', 2),
(110, 15, 15, 163, 'South Shivaji Nagar, Sangli', 2),
(111, 15, 15, 169, 'Vijay Nagar, Sangli', 2),
(112, 15, 15, 163, 'Ganpathi Peth, Miraj, Sangli', 2),
(113, 15, 19, 211, 'Nagar Naka, Beside Police Petrol pump, Bid', 2),
(114, 15, 19, 211, 'KSK Road, Datt Nagar, Bid', 2),
(115, 15, 19, 211, 'Bal-Bheem Chowk, Bid', 2),
(116, 15, 20, 222, 'Subhash Chowk, Latur ', 2),
(117, 15, 20, 222, 'Chatrapati Shivaji Maharaj Chowk, Latur', 2),
(118, 15, 20, 222, 'Siddheshwar Mandir, Siddheshwar Road, Latur', 2),
(119, 15, 20, 222, 'Ganj-Golai, Latur', 2),
(120, 15, 20, 222, 'Bhagatsingh Chowk, Latur', 2),
(121, 15, 20, 224, 'Fort Road, Khadkali, Udgir, Latur', 2),
(122, 15, 20, 225, 'Shri Keshav Balaji Mandir, near Latur Road, Ausa', 2),
(123, 15, 20, 222, 'Ambejogai Road, Latur ', 2),
(124, 15, 24, 259, 'Gandhi Park, Parbhani', 2),
(125, 15, 24, 259, 'Madhav Nagar, Parbhani', 2),
(126, 15, 24, 259, 'Nanal Peth, Parbhani', 2),
(127, 15, 24, 259, 'Masoom Colony, Parbhani', 2),
(128, 15, 24, 259, 'Prabhavati Nagar, Parbhani', 2),
(129, 15, 24, 259, 'Takli-Kumbarkhana, Parbhani', 2),
(130, 15, 24, 259, 'Shivaji Nagar, Vasamat Road, Parbhani', 2),
(131, 15, 24, 259, 'MIDC Road, Parbhani', 2),
(132, 15, 24, 259, 'Aaryawat Colony, Parbhani', 2),
(133, 15, 24, 259, 'Thakre Nagar, Parbhani', 2),
(134, 15, 24, 259, 'Kalyan Nagar, Parbhani', 2),
(135, 15, 24, 259, 'Sahakar Nagar, Parbhani', 2),
(136, 15, 24, 259, 'Pathri Road, Parbhani', 2),
(137, 15, 26, 275, 'Aanand Nagar, Osmanabad', 2),
(138, 15, 26, 275, 'Ashok Colony, Tambre Vibhag, Osmanabad', 2),
(139, 15, 26, 275, 'Vidya Nagar, Tambri Vibhag, Osmanabad', 2),
(141, 15, 26, 275, 'Aadarsh Nagar, Osmanabad', 2),
(142, 15, 26, 275, 'Ashok Colony, Osmanabad', 2),
(143, 15, 1, 1, 'Azad nagar , thane', 5),
(144, 15, 1, 1, 'Ghodbunder Road, Thane', 2),
(145, 15, 1, 1, 'Bhayander Pada, Thane', 5);

-- --------------------------------------------------------

--
-- Table structure for table `channel_banner`
--

CREATE TABLE `channel_banner` (
  `ID` int(3) NOT NULL,
  `SLOGAN` varchar(100) NOT NULL,
  `BANNER` varchar(100) NOT NULL,
  `chbanner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `channel_banner`
--

INSERT INTO `channel_banner` (`ID`, `SLOGAN`, `BANNER`, `chbanner`) VALUES
(25, 'The good news is hopeful does not mean dumb. The bad news is cynical does not mean smart.', 'upload/24_banner.png', '1'),
(26, 'Bad news travels at the speed of light  good news travels like molasses.', 'upload/26_banner.png', '2'),
(28, 'Headlines in a way are what mislead you because bad news is a headline and gradual improvement is no', 'upload/27_banner.png', '3'),
(29, 'News is something somebody does not want printed all else is advertising.', 'upload/29_banner.png', '5'),
(30, 'A good newspaper, I suppose, is a nation talking to itself.', 'upload/30_banner.png', '12'),
(31, 'The news is glorified gossip.', 'upload/31_banner.png', '13'),
(32, 'Fake News is cheap to produce , Genuine journalism is expensive.', 'upload/32_banner.png', '14'),
(33, 'The bad news is nothing lasts forever, The good news is nothing lasts forever.', 'upload/33_banner.png', '15'),
(34, 'The bad news is time flies , The Good News is You are the pilot.', 'upload/34_banner.png', '16'),
(35, 'No News is good, No Journalists  is even Better.', 'upload/35_banner.png', '17');

-- --------------------------------------------------------

--
-- Table structure for table `channel_logo`
--

CREATE TABLE `channel_logo` (
  `ID` int(3) NOT NULL,
  `LOGO` varchar(100) NOT NULL,
  `CID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `channel_logo`
--

INSERT INTO `channel_logo` (`ID`, `LOGO`, `CID`) VALUES
(4, 'upload/4_logo.png', 3),
(7, 'upload/7_logo.png', 5),
(8, 'upload/8_logo.png', 2),
(9, 'upload/9_logo.png', 8),
(10, 'upload/10_logo.png', 11),
(11, 'upload/11_logo.png', 12),
(12, 'upload/12_logo.png', 1),
(13, 'upload/13_logo.png', 13),
(14, 'upload/14_logo.png', 14),
(15, 'upload/15_logo.png', 15),
(16, 'upload/16_logo.png', 16),
(17, 'upload/17_logo.png', 17);

-- --------------------------------------------------------

--
-- Table structure for table `channel_quotation`
--

CREATE TABLE `channel_quotation` (
  `ID` int(3) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `QUOTATION` varchar(100) NOT NULL,
  `chquote` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `channel_quotation`
--

INSERT INTO `channel_quotation` (`ID`, `NAME`, `QUOTATION`, `chquote`) VALUES
(3, 'news portal', 'news portal', '2'),
(4, 'ne news', 'news portal', '5'),
(5, 'times noe', 'capston', '3'),
(6, 'NBC News', 'The News is Glorified Gossip.', '12'),
(7, 'News24', 'The good news is hopeful does not mean dumb. The bad news is cynical does not mean smart.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `C_ID` int(11) NOT NULL,
  `Country_Name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`C_ID`, `Country_Name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Antigua and Barbuda'),
(7, 'Argentina'),
(8, 'Armenia'),
(9, 'Australia'),
(10, 'Austria'),
(11, 'Azerbaijan'),
(12, 'Bahamas'),
(13, 'Bahrain'),
(14, 'Bangladesh'),
(15, 'Barbados'),
(16, 'Belarus'),
(17, 'Belgium'),
(18, 'Belize'),
(19, 'Benin'),
(20, 'Bhutan'),
(21, 'Bolivia'),
(22, 'Bosnia and Herzegovina'),
(23, 'Botswana'),
(24, 'Brazil'),
(25, 'Brunei Darussalam'),
(26, 'Bulgaria'),
(27, 'Burkina Faso'),
(28, 'Burundi'),
(29, 'Cabo Verde'),
(30, 'Cambodia'),
(31, 'Cameroon'),
(32, 'Canada'),
(33, 'Central African Republic'),
(34, 'Chad'),
(35, 'Chile'),
(36, 'China'),
(37, 'Colombia'),
(38, 'Comoros'),
(39, 'Congo'),
(40, 'Costa Rica'),
(42, 'Croatia'),
(43, 'Cuba'),
(44, 'Cyprus'),
(45, 'Czech Republic'),
(47, 'Democratic Republic of the Con'),
(48, 'Denmark'),
(49, 'Djibouti'),
(50, 'Dominica'),
(51, 'Dominican Republic'),
(52, 'Ecuador'),
(53, 'Egypt'),
(54, 'El Salvador'),
(55, 'Equatorial Guinea'),
(56, 'Eritrea'),
(57, 'Estonia'),
(58, 'Ethiopia'),
(59, 'Fiji'),
(60, 'Finland'),
(61, 'France'),
(62, 'Gabon'),
(63, 'Gambia'),
(64, 'Georgia'),
(65, 'Germany'),
(66, 'Ghana'),
(67, 'Greece'),
(68, 'Grenada'),
(69, 'Guatemala'),
(70, 'Guinea'),
(71, 'Guinea-Bissau'),
(72, 'Guyana'),
(73, 'Haiti'),
(74, 'Honduras'),
(75, 'Hungary'),
(76, 'Iceland'),
(77, 'India'),
(78, 'Indonesia'),
(79, 'Iran'),
(80, 'Iraq'),
(81, 'Ireland'),
(82, 'Israel'),
(83, 'Italy'),
(84, 'Jamaica'),
(85, 'Japan'),
(86, 'Jordan'),
(87, 'Kazakhstan'),
(88, 'Kenya'),
(89, 'Kiribati'),
(90, 'Kuwait'),
(91, 'Kyrgyzstan'),
(93, 'Latvia'),
(94, 'Lebanon'),
(95, 'Lesotho'),
(96, 'Liberia'),
(97, 'Libya'),
(98, 'Liechtenstein'),
(99, 'Lithuania'),
(100, 'Luxembourg'),
(101, 'Macedonia'),
(102, 'Madagascar'),
(103, 'Malawi'),
(104, 'Malaysia'),
(105, 'Maldives'),
(106, 'Mali'),
(107, 'Malta'),
(108, 'Marshall Islands'),
(109, 'Mauritania'),
(110, 'Mauritius'),
(111, 'Mexico'),
(112, 'Micronesia (Federated States o'),
(113, 'Monaco'),
(114, 'Mongolia'),
(115, 'Montenegro'),
(116, 'Morocco'),
(117, 'Mozambique'),
(118, 'Myanmar'),
(119, 'Namibia'),
(120, 'Nauru'),
(121, 'Nepal'),
(122, 'Netherlands'),
(123, 'New Zealand'),
(124, 'Nicaragua'),
(125, 'Niger'),
(126, 'Nigeria'),
(127, 'Norway'),
(128, 'Oman'),
(129, 'Pakistan'),
(130, 'Palau'),
(131, 'Panama'),
(132, 'Papua New Guinea'),
(133, 'Paraguay'),
(134, 'Peru'),
(135, 'Philippines'),
(136, 'Poland'),
(137, 'Portugal'),
(138, 'Qatar'),
(139, 'Republic of Korea (South Korea'),
(140, 'Republic of Moldova'),
(141, 'Romania'),
(142, 'Russian Federation'),
(143, 'Rwanda'),
(144, 'Saint Kitts and Nevis'),
(145, 'Saint Lucia'),
(146, 'Saint Vincent and the Grenadin'),
(147, 'Samoa'),
(148, 'San Marino'),
(149, 'Sao Tome and Principe'),
(150, 'Saudi Arabia'),
(151, 'Senegal'),
(152, 'Serbia'),
(153, 'Seychelles'),
(154, 'Sierra Leone'),
(155, 'Singapore'),
(156, 'Slovakia'),
(157, 'Slovenia'),
(158, 'Solomon Islands'),
(159, 'Somalia'),
(160, 'South Africa'),
(161, 'South Sudan'),
(162, 'Spain'),
(163, 'Sri Lanka'),
(164, 'Sudan'),
(165, 'Suriname'),
(166, 'Swaziland'),
(167, 'Sweden'),
(168, 'Switzerland'),
(169, 'Syrian Arab Republic'),
(170, 'Tajikistan'),
(171, 'Thailand'),
(172, 'Timor-Leste'),
(173, 'Togo'),
(174, 'Tonga'),
(175, 'Trinidad and Tobago'),
(176, 'Tunisia'),
(177, 'Turkey'),
(178, 'Turkmenistan'),
(179, 'Tuvalu'),
(180, 'Uganda'),
(181, 'Ukraine'),
(182, 'United Arab Emirates'),
(183, 'United Kingdom of Great Britai'),
(184, 'United Republic of Tanzania'),
(185, 'United States of America'),
(186, 'Uruguay'),
(187, 'Uzbekistan'),
(188, 'Vanuatu'),
(189, 'Venezuela'),
(190, 'Vietnam'),
(191, 'Yemen'),
(192, 'Zambia'),
(193, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `D_ID` int(11) NOT NULL,
  `District_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `S_ID` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`D_ID`, `District_Name`, `S_ID`) VALUES
(1, 'Thane', '15'),
(2, 'Pune', '15'),
(3, 'Mumbai Suburban', '15'),
(4, 'Nashik', '15'),
(5, 'Nagpur', '15'),
(6, 'Ahmadnagar', '15'),
(7, 'Solapur', '15'),
(8, 'Jalgaon', '15'),
(9, 'Kolhapur', '15'),
(10, 'Aurangabad', '15'),
(11, 'Nanded', '15'),
(12, 'Mumbai City', '15'),
(13, 'Satara', '15'),
(14, 'Amravati', '15'),
(15, 'Sangli', '15'),
(16, 'Yavatmal', '15'),
(17, 'Raigarh', '15'),
(18, 'Buldana', '15'),
(19, 'Bid', '15'),
(20, 'Latur', '15'),
(21, 'Chandrapur', '15'),
(22, 'Dhule', '15'),
(23, 'Jalna', '15'),
(24, 'Parbhani', '15'),
(25, 'Akola', '15'),
(26, 'Osmanabad', '15'),
(27, 'Nandurbar', '15'),
(28, 'Ratnagiri', '15'),
(29, 'Gondiya', '15'),
(30, 'Wardha', '15'),
(31, 'Bhandara ', '15'),
(32, 'Washim ', '15'),
(33, 'Hingoli ', '15'),
(34, 'Gadchiroli ', '15'),
(35, 'Sindhudurg ', '15'),
(36, 'Nellore', '1'),
(37, 'Cuddapah', '1'),
(38, 'Karim Nagar', '1'),
(39, 'Kurnool', '1'),
(40, 'West Godavari', '1'),
(41, 'Srikakulam', '1'),
(42, 'Anantpur', '1'),
(43, 'Adilabad', '1'),
(44, 'Chittor', '1'),
(45, 'east Godavari', '1'),
(46, 'Guntur', '1'),
(47, 'Hyderabad Urban', '1'),
(48, 'Khammam', '1'),
(49, 'Krishna', '1'),
(50, 'Mehboobnagar', '1'),
(51, 'Medak', '1'),
(52, 'Nalgonda', '1'),
(53, 'Nizamabad', '1'),
(54, 'Prakasam', '1'),
(55, 'Ranga Reddy', '1'),
(56, 'Vishakapatnam', '1'),
(57, 'Vizianagaram', '1'),
(58, 'Waranga', '1'),
(59, 'Karimganj', '3'),
(60, 'Darrang', '3'),
(61, 'Dibrugarh', '3'),
(62, 'Morigaon', '3'),
(63, 'Tinsukia', '3'),
(64, 'Bongaigaon', '3'),
(65, 'Nalbari', '3'),
(66, 'Kokrajhar', '3'),
(67, 'Kamrup', '3'),
(68, 'Karbi-Anglong', '3'),
(69, 'Nagaon', '3'),
(70, 'N.C.Hills', '3'),
(71, 'Dhemaji', '3'),
(72, 'Hailakandi', '3'),
(73, 'Lakhimpur', '3'),
(74, 'Sonitpur', '3'),
(75, 'Dhubri', '3'),
(76, 'Goalpara', '3'),
(77, 'Barpeta', '3'),
(78, 'Golaghat', '3'),
(79, 'Jorhat', '3'),
(80, 'Sibsagar', '3'),
(81, 'Cachar', '3'),
(82, 'Diban Valley( Anini ', '2'),
(83, 'East Kameng Seppa', '2'),
(84, 'Itanagar', '2'),
(85, 'East Siang(Passighat', '2'),
(86, 'Lohit(Tezu)', '2'),
(87, 'Lower Subansiri(Ziro', '2'),
(88, 'Khonsa', '2'),
(89, 'Roin', '2'),
(90, 'Tawang', '2'),
(91, 'Changalang', '2'),
(92, 'Dibang Valley', '2'),
(93, 'Daporijo', '2'),
(94, 'Bomdila', '2'),
(95, 'Alog( West Siang )', '2'),
(96, 'Muzaffarpur', '4'),
(97, 'Jehanabad', '4'),
(98, 'Gaya', '4'),
(99, 'Patna', '4'),
(100, 'Saran( Chapra )', '4'),
(101, 'Darbhanga', '4'),
(102, 'Saharsa', '4'),
(103, 'Purnea', '4'),
(104, 'Bhagalpur', '4'),
(105, 'Munger', '4'),
(106, 'Aurangabad', '4'),
(107, 'Bhojpur(Arah)', '4'),
(108, 'Begusarai', '4'),
(109, 'East Champaran', '4'),
(110, 'Gopalganj', '4'),
(111, 'Jamui', '4'),
(112, 'Katihar', '4'),
(113, 'Khagaria', '4'),
(114, 'Madhepura', '4'),
(115, 'Madhubani', '4'),
(116, 'Nalanda', '4'),
(117, 'Nawada', '4'),
(118, 'Rohtas(Sasaram)', '4'),
(119, 'Samastipur', '4'),
(120, 'Sitamarhi', '4'),
(121, 'Siwan', '4'),
(122, 'Vaishali(Hajipur)', '4'),
(123, 'West Champaran', '4'),
(124, 'Kishanganj', '4'),
(125, 'Araria', '4'),
(126, 'Bhabua', '4'),
(127, 'Banka', '4'),
(128, 'Buxar', '4'),
(129, 'Supaul', '4'),
(130, 'Sekhpura', '4'),
(131, 'Seohar', '4'),
(132, 'Lakhisarai', '4'),
(133, 'Panchmahals', '7'),
(134, 'Vadodara', '7'),
(135, 'Amrela', '7'),
(136, 'Kheda', '7'),
(137, 'Ahmedabad', '7'),
(138, 'Valsad', '7'),
(139, 'Junagadh', '7'),
(140, 'Mehsana', '7'),
(141, 'Banaskantha', '7'),
(142, 'Gandhinagar', '7'),
(143, 'Bharuch', '7'),
(144, 'Dangs', '7'),
(145, 'Jamnagar', '7'),
(146, 'Rajkot', '7'),
(147, 'Surat', '7'),
(148, 'Sabarkantha', '7'),
(149, 'Kutch', '7'),
(150, 'Bhavnagar', '7'),
(151, 'Surendranagar', '7'),
(152, 'Navsari', '7'),
(153, 'Anand', '7'),
(154, 'Narmada', '7'),
(155, 'Patan', '7'),
(156, 'Porbander', '7'),
(157, 'Dahod', '7'),
(158, 'Gurgaon', '8'),
(159, 'Rohtak', '8'),
(160, 'Ambala', '8'),
(161, 'Bhiwani', '8'),
(162, 'Faridabad', '8'),
(163, 'Hissar', '8'),
(164, 'Jind', '8'),
(165, 'Kaithal', '8'),
(166, 'Karnal', '8'),
(167, 'Kurukshetra', '8'),
(168, 'Mahendragarh', '8'),
(169, 'Panchkula', '8'),
(170, 'Panipat', '8'),
(171, 'Sonipat', '8'),
(172, 'Yamunanagar', '8'),
(173, 'Sirsa', '8'),
(174, 'Rewari', '8'),
(175, 'Jhanjhar', '8'),
(176, 'Fatehabad', '8'),
(177, 'Bastar', '5'),
(178, 'Bilaspur', '5'),
(179, 'Dantewada', '5'),
(180, 'Dhamtari', '5'),
(181, 'Durg', '5'),
(182, 'Janjgir-Champa', '5'),
(183, 'Jashpur', '5'),
(184, 'Kanker', '5'),
(185, 'Kawardha', '5'),
(186, 'Korba', '5'),
(187, 'Koriya', '5'),
(188, 'Mahasamund', '5'),
(189, 'Raigarh', '5'),
(190, 'Rajnandgaon', '5'),
(191, 'Surguja', '5'),
(192, 'Raipur', '5'),
(193, 'North Goa', '6'),
(194, 'South Goa', '6'),
(195, 'Sirmour', '9'),
(196, 'Hamirpur', '9'),
(197, 'Kullu', '9'),
(198, 'Solan', '9'),
(199, 'Mandi', '9'),
(200, 'Chamba', '9'),
(201, 'Bilaspur', '9'),
(202, 'Kangra', '9'),
(203, 'Kinnaur', '9'),
(204, 'Lahaul-Spiti', '9'),
(205, 'Shimla', '9'),
(206, 'Una', '9'),
(207, 'Kathua', '10'),
(208, 'Badgan', '10'),
(209, 'Poonch', '10'),
(210, 'Rajauri', '10'),
(211, 'Baramula', '10'),
(212, 'Doda', '10'),
(213, 'Udhampur', '10'),
(214, 'Jammu', '10'),
(215, 'Kupwara', '10'),
(216, 'Pulwama', '10'),
(217, 'Anantnag', '10'),
(218, 'Srinagar', '10'),
(219, 'Leh', '10'),
(220, 'Kargil', '10'),
(221, 'Deoghar', '11'),
(222, 'Dhanbad', '11'),
(223, 'Giridih', '11'),
(224, 'Godda', '11'),
(225, 'Gumla', '11'),
(226, 'Hazaribagh', '11'),
(227, 'Lohardaga', '11'),
(228, 'Palamu', '11'),
(229, 'Ranchi', '11'),
(230, 'Dumka', '11'),
(231, 'Chaibasa(West Singhb', '11'),
(232, 'Jamshedpur(East Sing', '11'),
(233, 'Bokaro', '11'),
(234, 'Chatra', '11'),
(235, 'Garhwa', '11'),
(236, 'Koderma', '11'),
(237, 'Pakur', '11'),
(238, 'Sahebganj', '11'),
(239, 'Simdega', '11'),
(240, 'Latehar', '11'),
(241, 'Saraikela', '11'),
(242, 'Jamtara', '11'),
(243, 'Mysore', '12'),
(244, 'Gulberga', '12'),
(245, 'Chitradurga', '12'),
(246, 'Kolar', '12'),
(247, 'Bijapur', '12'),
(248, 'Dakshina Kannada', '12'),
(249, 'Raichur', '12'),
(250, 'Bellary', '12'),
(251, 'Belgaum', '12'),
(252, 'Hassan', '12'),
(253, 'Dharwad', '12'),
(254, 'Bangalore Rural', '12'),
(255, 'Shimoga', '12'),
(256, 'Mandya', '12'),
(257, 'Chickmagalur', '12'),
(258, 'Bangalore Urban', '12'),
(259, 'Madikeri', '12'),
(260, 'Tumkur', '12'),
(261, 'Bidar', '12'),
(262, 'Karwar', '12'),
(263, 'Udupi', '12'),
(264, 'Davanagare', '12'),
(265, 'Chamrajnagar', '12'),
(266, 'Kozhikode', '13'),
(267, 'Kasaragod', '13'),
(268, 'Idukki', '13'),
(269, 'Ernakulam', '13'),
(270, 'Cannanore', '13'),
(271, 'Mallapuram', '13'),
(272, 'Palghat', '13'),
(273, 'Pathanamthitta', '13'),
(274, 'Quilon', '13'),
(275, 'Trichur', '13'),
(276, 'Wayanad', '13'),
(277, 'Trivandrum', '13'),
(278, 'Kottayam', '13'),
(279, 'Alapuzzha', '13'),
(280, 'Sindi', '14'),
(281, 'Vidisha', '14'),
(282, 'Jabalpur', '14'),
(283, 'Bhopal', '14'),
(284, 'Hoshangabad', '14'),
(285, 'Indore', '14'),
(286, 'Rewa', '14'),
(287, 'Satna', '14'),
(288, 'Shahdol', '14'),
(289, 'Chhindwara', '14'),
(290, 'Ratlam', '14'),
(291, 'Balaghat', '14'),
(292, 'Betul', '14'),
(293, 'Bhind', '14'),
(294, 'Mandla', '14'),
(295, 'Chhattarpur', '14'),
(296, 'Damoh', '14'),
(297, 'Datia', '14'),
(298, 'Dewas', '14'),
(299, 'Dhar', '14'),
(300, 'Guna', '14'),
(301, 'Gwalior', '14'),
(302, 'Jhabua', '14'),
(303, 'Sehore', '14'),
(304, 'Mandsaur', '14'),
(305, 'Narsinghpur', '14'),
(306, 'Panna', '14'),
(307, 'Raisen', '14'),
(308, 'Rajgarh', '14'),
(309, 'Sagar', '14'),
(310, 'Seoni', '14'),
(311, 'Morena', '14'),
(312, 'Shivpuri', '14'),
(313, 'Shajapur', '14'),
(314, 'Tikamgarh', '14'),
(315, 'Ujjain', '14'),
(316, 'Khandwa', '14'),
(317, 'Khargone', '14'),
(318, 'Dindori', '14'),
(319, 'Umaria', '14'),
(320, 'Badwani', '14'),
(321, 'Sheopur', '14'),
(322, 'Aurangabad', '15'),
(323, 'Bandra(Mumbai Suburb', '15'),
(324, 'Nagpur', '15'),
(325, 'Pune', '15'),
(326, 'Akola', '15'),
(327, 'Chandrapur', '15'),
(328, 'Jalgaon', '15'),
(329, 'Parbhani', '15'),
(330, 'Sholapur', '15'),
(331, 'Thane', '15'),
(332, 'Latur', '15'),
(333, 'Mumbai-City', '15'),
(334, 'Buldhana', '15'),
(335, 'Dhule', '15'),
(336, 'Kolhpur', '15'),
(337, 'Nanded', '15'),
(338, 'Raigad', '15'),
(339, 'Amravati', '15'),
(340, 'Nashik', '15'),
(341, 'Wardha', '15'),
(342, 'Ahmednagar', '15'),
(343, 'Beed', '15'),
(344, 'Bhandara', '15'),
(345, 'Gadchiroli', '15'),
(346, 'Jalna', '15'),
(347, 'Osmanabad', '15'),
(348, 'Ratnagiri', '15'),
(349, 'Sangli', '15'),
(350, 'Satara', '15'),
(351, 'Sindudurg', '15'),
(352, 'Yavatmal', '15'),
(353, 'Imphal East', '16'),
(354, 'Imphal West', '16'),
(355, 'Thoubal', '16'),
(356, 'Bishnupur', '16'),
(357, 'Chandel', '16'),
(358, 'Churachandpur', '16'),
(359, 'Senapati', '16'),
(360, 'Ukhrul', '16'),
(361, 'Ri-Bhoi District', '17'),
(362, 'South Garo Hills', '17'),
(363, 'East Khasi Hill', '17'),
(364, 'East Garo Hill', '17'),
(365, 'West Garo Hill', '17'),
(366, 'Jaintia Hill', '17'),
(367, 'Luglei District', '18'),
(368, 'Chimtipui District', '18'),
(369, 'Aizawal', '18'),
(370, 'Champhai', '18'),
(371, 'Mamit', '18'),
(372, 'Kolasib', '18'),
(373, 'Wokha', '19'),
(374, 'Phek', '19'),
(375, 'Tuensang', '19'),
(376, 'Mon', '19'),
(377, 'Kohima', '19'),
(378, 'Zunheboto', '19'),
(379, 'Mokokchung', '19'),
(380, 'Khurda', '20'),
(381, 'Navaragpur', '20'),
(382, 'Navapada', '20'),
(383, 'Gajapati', '20'),
(384, 'Boudh', '20'),
(385, 'Bhadrak', '20'),
(386, 'Ganjam', '20'),
(387, 'Dhenkanal', '20'),
(388, 'Angul', '20'),
(389, 'Puri', '20'),
(390, 'Cuttak', '20'),
(391, 'Sambalpur', '20'),
(392, 'Kalhandi', '20'),
(393, 'Koraput', '20'),
(394, 'Phulbani', '20'),
(395, 'Balangir', '20'),
(396, 'Bargah', '20'),
(397, 'Deogarh', '20'),
(398, 'Jagatsinghpur', '20'),
(399, 'Jajpur', '20'),
(400, 'Jharsuguda', '20'),
(401, 'Kendrapara', '20'),
(402, 'Malkangiri', '20'),
(403, 'Nayagarh', '20'),
(404, 'Rayagada', '20'),
(405, 'Sonepur', '20'),
(406, 'Balasore', '20'),
(407, 'Mayurbhanj', '20'),
(408, 'Keonjhar', '20'),
(409, 'Sundergarh', '20'),
(410, 'Sangrur', '21'),
(411, 'Jalandhar', '21'),
(412, 'Ludhiana', '21'),
(413, 'Bhatinda', '21'),
(414, 'Kapurthala', '21'),
(415, 'Patiala', '21'),
(416, 'Amritsar', '21'),
(417, 'Ferozepur', '21'),
(418, 'Fatehgarh Saheb', '21'),
(419, 'Ropar', '21'),
(420, 'Gurdaspur', '21'),
(421, 'Hosiarpur', '21'),
(422, 'Faridkot', '21'),
(423, 'Mansa', '21'),
(424, 'Moga', '21'),
(425, 'Muktsar', '21'),
(426, 'Jaipur', '22'),
(427, 'Barmer', '22'),
(428, 'Dungarpur', '22'),
(429, 'Jodhpur', '22'),
(430, 'Kota', '22'),
(431, 'Udaipur', '22'),
(432, 'Bikaner', '22'),
(433, 'Dausa', '22'),
(434, 'Bundi', '22'),
(435, 'Sikar', '22'),
(436, 'Tonk', '22'),
(437, 'Jaisalmer', '22'),
(438, 'Nagaur', '22'),
(439, 'Rajsamand', '22'),
(440, 'Banswara', '22'),
(441, 'Bhilwara', '22'),
(442, 'Ajmer', '22'),
(443, 'Alwar', '22'),
(444, 'Bharatpur', '22'),
(445, 'Chittorgarh', '22'),
(446, 'Churu', '22'),
(447, 'Dholpur', '22'),
(448, 'Ganganagar', '22'),
(449, 'Jalor', '22'),
(450, 'Jhalawar', '22'),
(451, 'Jhunjhunu', '22'),
(452, 'East', '23'),
(453, 'South', '23'),
(454, 'West', '23'),
(455, 'North', '23'),
(456, 'Chennai', '24'),
(457, 'Coimbotore', '24'),
(458, 'Cuddalorei', '24'),
(459, 'Dharmapuri', '24'),
(460, 'Dindigul', '24'),
(461, 'Erode', '24'),
(462, 'Kancheepuram', '24'),
(463, 'Kanniyakumari (HQ : ', '24'),
(464, 'Karur', '24'),
(465, 'Madurai', '24'),
(466, 'Nagapattinam', '24'),
(467, 'Namakkal', '24'),
(468, 'Nilgiris (HQ: Udhaga', '24'),
(469, 'Perambalur', '24'),
(470, 'Pudukkottai', '24'),
(471, 'Ramanathapuram', '24'),
(472, 'Salem', '24'),
(473, 'Sivaganga', '24'),
(474, 'Thanjavur', '24'),
(475, 'Theni', '24'),
(476, 'Thoothkudi', '24'),
(477, 'Tiruchiorappalli', '24'),
(478, 'Tirunelveli', '24'),
(479, 'Tiruvallur', '24'),
(480, 'Tiruvannamalai', '24'),
(481, 'Tiruvarur', '24'),
(482, 'Vellore', '24'),
(483, 'Villupuram', '24'),
(484, 'North District', '25'),
(485, 'South District', '25'),
(486, 'West District', '25'),
(487, 'Dhalai District', '25'),
(488, 'Allahabad', '27'),
(489, 'Aligarh', '27'),
(490, 'Bareilly', '27'),
(491, 'Gonda', '27'),
(492, 'Hardoi', '27'),
(493, 'Kanpur Dehat', '27'),
(494, 'Ghaziabad', '27'),
(495, 'Unnav', '27'),
(496, 'Varanasi', '27'),
(497, 'Faizabad', '27'),
(498, 'Gorakpur', '27'),
(499, 'Jhansi', '27'),
(500, 'Lucknow', '27'),
(501, 'Agra', '27'),
(502, 'Meerut', '27'),
(503, 'Moradabad', '27'),
(504, 'Barabanki', '27'),
(505, 'Mainpuri', '27'),
(506, 'Etawah', '27'),
(507, 'Gazipur', '27'),
(508, 'Etah', '27'),
(509, 'Muzaffar Nagar', '27'),
(510, 'Saharanpur', '27'),
(511, 'Bulandshehar', '27'),
(512, 'Mathura', '27'),
(513, 'Firozabad', '27'),
(514, 'Budaun', '27'),
(515, 'Shahjahanpur', '27'),
(516, 'Pilibhit', '27'),
(517, 'Bijnor', '27'),
(518, 'Rampur', '27'),
(519, 'Kanpur(Nagar)', '27'),
(520, 'Farrukhabad', '27'),
(521, 'Fatehpur', '27'),
(522, 'Pratapgarh', '27'),
(523, 'Jalaun', '27'),
(524, 'Hamirpur', '27'),
(525, 'Lalitpur', '27'),
(526, 'Mirzapur', '27'),
(527, 'Basti', '27'),
(528, 'Deoria', '27'),
(529, 'Raebareili', '27'),
(530, 'Sitapur', '27'),
(531, 'Banda', '27'),
(532, 'Lakhimpur-Khedi', '27'),
(533, 'Bahraich', '27'),
(534, 'Sultanpur', '27'),
(535, 'Mau', '27'),
(536, 'Azamgarh', '27'),
(537, 'Howrah', '28'),
(538, 'Darjeeling', '28'),
(539, 'Medinipur', '28'),
(540, 'Murshidabad', '28'),
(541, 'Coochbehar', '28'),
(542, 'Malda', '28'),
(543, 'Birbhum', '28'),
(544, 'North 24 Parganas', '28'),
(545, 'South 24 Parganas', '28'),
(546, 'Bankura', '28'),
(547, 'Bardhaman', '28'),
(548, 'Jalpaiguri', '28'),
(549, 'Hooghly', '28'),
(550, 'Nadia', '28'),
(551, 'Dakshin Dinajpur', '28'),
(552, 'Purulia', '28'),
(553, 'Chennai', '29'),
(554, 'Coimbotore', '29'),
(555, 'Cuddalorei', '29'),
(556, 'Dharmapuri', '29'),
(557, 'Dindigul', '29'),
(558, 'Erode', '29'),
(559, 'Kancheepuram', '29'),
(560, 'Kanniyakumari (HQ : ', '29'),
(561, 'Karur', '29'),
(562, 'Madurai', '29'),
(563, 'Nagapattinam', '29'),
(564, 'Namakkal', '29'),
(565, 'Nilgiris (HQ: Udhaga', '29'),
(566, 'Perambalur', '29'),
(567, 'Pudukkottai', '29'),
(568, 'Ramanathapuram', '29'),
(569, 'Salem', '29');

-- --------------------------------------------------------

--
-- Table structure for table `reporterdata`
--

CREATE TABLE `reporterdata` (
  `ID` int(3) NOT NULL,
  `CHANNEL_ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `ADHAR_NO` bigint(20) NOT NULL,
  `CONTACT` int(10) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `IMG` varchar(100) NOT NULL,
  `STATE` text NOT NULL,
  `DISTRICT` text NOT NULL,
  `TALUKA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporterdata`
--

INSERT INTO `reporterdata` (`ID`, `CHANNEL_ID`, `NAME`, `EMAIL`, `ADHAR_NO`, `CONTACT`, `DATE`, `ADDRESS`, `IMG`, `STATE`, `DISTRICT`, `TALUKA`) VALUES
(1, 0, 'Sanjana', '', 0, 0, '', '', 'upload/1_report.png', '', '', ''),
(5, 4, 'noor', '', 0, 0, '', '', 'upload/5_report.png', '', '', ''),
(13, 1, 'Sachin Kamble', 'sachin8976@gmail.com', 232143345665, 2147483647, '1995-12-05', 'Shivaji Nagar, Amravati', 'upload/13_report.png', '15', '14', '153'),
(14, 1, 'Vinod Kurle', 'vinodk@gmail.com', 121314151617, 2147483647, '1994-02-23', 'Ambedkar Chowk,Kalamb', 'upload/14_report.png', '15', '16', '185'),
(15, 1, 'Prakash Ujale', 'prakash98@gmail.com', 232425262728, 2147483647, '1996-06-03', 'Sai naka, Karad', 'upload/15_report.png', '15', '13', '138'),
(16, 1, 'Pradeep Lavrale', 'pradeeplavrale23@gmail.com', 242526272829, 2147483647, '1995-10-08', 'Savidhan Chowk,Near Dayanand College, Latur', 'upload/16_report.png', '15', '20', '222'),
(17, 2, 'Mohan Jadhav', 'mohanj123@gmail.com', 123245651789, 989007667, '1992-04-23', 'Baladava Nagar , Latur', 'upload/17_report.png', '15', '20', '222'),
(18, 2, 'Manoj Patil', 'manojp@gmail.com', 145423436723, 2147483647, '1994-12-22', 'Kapad Line, Latur', 'upload/18_report.png', '15', '20', '224'),
(19, 2, 'Dhananjay Patil', 'dhanu34@gmail.com', 786512345432, 2147483647, '1990-03-02', 'Amba Hanuman,Latur', 'upload/19_report.png', '15', '20', '226'),
(20, 2, 'Santosh Degloorkar', 'santoshd53365@gmail.com', 914356763456, 2147483647, '1987-03-22', 'Ajinkya city , Latur', 'upload/20_report.png', '15', '20', '222'),
(21, 3, 'Avinash Kendre', 'avinashK2204@gmail.com', 909876564323, 2147483647, '2000-05-25', 'Shahaji nagar pune', 'upload/21_report.png', '15', '2', '25'),
(22, 3, 'Manav Jadhav', 'manav.J123@gmail.com', 123476549087, 2147483647, '2000-03-22', 'Ajinkya city , Akola', 'upload/22_report.png', '15', '25', '270'),
(23, 3, 'Sakshi Pawar', 'sakship@gmail.com', 123098776543, 2147483647, '2001-04-04', 'Ram Colony , Satara', 'upload/23_report.png', '15', '13', '148'),
(24, 5, 'Tushar Mohite', 'tushar12@gmail.com', 677689980098, 2147483647, '1997-05-21', 'Sidhheshwar Road,Latur', 'upload/24_report.png', '15', '20', '222'),
(25, 5, 'Pragati Mankoskar', 'pragati@gmail.com', 676544332211, 2147483647, '2001-05-03', 'Ambejogai Road,Ausa', 'upload/25_report.png', '15', '20', '225'),
(26, 5, 'Rohini Kulkarni', 'rohinik676@gmail.com', 243276457898, 2147483647, '2002-09-08', 'Ajinkya city , Latur', 'upload/26_report.png', '15', '20', '222'),
(27, 12, 'Avinash Kendre', 'avinashK2204@gmail.com', 899867765445, 2147483647, '1997-11-02', 'Ajinkya city , Latur', 'upload/27_report.png', '15', '20', '222');

-- --------------------------------------------------------

--
-- Table structure for table `short_add`
--

CREATE TABLE `short_add` (
  `ID` int(3) NOT NULL,
  `IMAGE` varchar(100) NOT NULL,
  `ADD_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `short_add`
--

INSERT INTO `short_add` (`ID`, `IMAGE`, `ADD_ID`) VALUES
(1, 'upload/1_short_add.png', 1),
(2, 'upload/2_short_add.png', 1),
(3, 'upload/3_short_add.png', 1),
(4, 'upload/4_short_add.png', 1),
(5, 'upload/5_short_add.png', 1),
(6, 'upload/6_short_add.png', 1),
(7, 'upload/7_short_add.png', 1),
(8, 'upload/8_short_add.png', 1),
(9, 'upload/9_short_add.png', 2),
(10, 'upload/10_short_add.png', 2),
(11, 'upload/11_short_add.png', 2),
(12, 'upload/12_short_add.png', 2),
(13, 'upload/13_short_add.png', 2),
(14, 'upload/14_short_add.png', 2),
(15, 'upload/15_short_add.png', 2),
(16, 'upload/16_short_add.png', 2),
(17, 'upload/17_short_add.png', 3),
(18, 'upload/18_short_add.png', 3),
(19, 'upload/19_short_add.png', 3),
(20, 'upload/20_short_add.png', 3),
(21, 'upload/21_short_add.png', 3),
(22, 'upload/22_short_add.png', 3),
(23, 'upload/23_short_add.png', 3),
(24, 'upload/24_short_add.png', 3),
(25, 'upload/25_short_add.png', 5),
(26, 'upload/26_short_add.png', 5),
(27, 'upload/27_short_add.png', 5),
(28, 'upload/28_short_add.png', 5),
(29, 'upload/29_short_add.png', 5),
(30, 'upload/30_short_add.png', 5),
(31, 'upload/31_short_add.png', 5),
(32, 'upload/32_short_add.png', 5),
(33, 'upload/33_short_add.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `S_ID` int(11) NOT NULL,
  `State_Name` varchar(30) NOT NULL,
  `C_ID` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`S_ID`, `State_Name`, `C_ID`) VALUES
(1, 'Andhra Pradesh', 77),
(2, 'Arunachal Pradesh', 77),
(3, 'Assam', 77),
(4, 'Bihar', 77),
(5, 'Chhattisgarh', 77),
(6, 'Goa', 77),
(7, 'Gujarat', 77),
(8, 'Haryana', 77),
(9, 'Himachal Pradesh', 77),
(10, 'Jammu and Kashmir', 77),
(11, 'Jharkhand', 77),
(12, 'Karnataka', 77),
(13, 'Kerala', 77),
(14, 'Madhya Pradesh', 77),
(15, 'Maharashtra', 77),
(16, 'Manipur', 77),
(17, 'Meghalaya', 77),
(18, 'Mizoram', 77),
(19, 'Nagaland', 77),
(20, 'Orissa', 77),
(21, 'Punjab', 77),
(22, 'Rajasthan', 77),
(23, 'Sikkim', 77),
(24, 'Tamil Nadu', 77),
(25, 'Tripura', 77),
(26, 'Uttarakhand', 77),
(27, 'Uttar Pradesh', 77),
(28, 'West Bengal', 77),
(29, 'Tamil Nadu', 77),
(31, 'Andaman and Nicobar Islands', 77),
(32, 'Chandigarh', 77),
(33, 'Dadra and Nagar Haveli', 77),
(34, 'Daman and Diu', 77),
(35, 'Delhi', 77),
(36, 'Lakshadweep', 77),
(37, 'Pondicherry', 77);

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE `state_list` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `st_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`st_id`, `st_name`, `st_code`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS', 35),
(2, 'ANDHRA Old', 37),
(3, 'ARUNACHAL PRADESH', 12),
(4, 'ASSAM', 18),
(5, 'BIHAR', 10),
(6, 'CHATTISGARH', 22),
(7, 'CHANDIGARH', 4),
(8, 'DAMAN AND DIU', 25),
(9, 'DELHI', 7),
(10, 'DADRA AND NAGAR HAVELI', 26),
(11, 'GOA', 30),
(12, 'GUJARAT', 24),
(13, 'HIMACHAL PRADESH', 2),
(14, 'HARYANA', 6),
(15, 'JAMMU AND KASHMIR', 1),
(16, 'JHARKHAND', 20),
(17, 'KERALA', 32),
(18, 'KARNATAKA', 29),
(19, 'LAKSHADWEEP', 31),
(20, 'MEGHALAYA', 17),
(21, 'MAHARASHTRA', 27),
(22, 'MANIPUR', 14),
(23, 'MADHYA PRADESH', 23),
(24, 'MIZORAM', 15),
(25, 'NAGALAND', 13),
(26, 'ORISSA', 21),
(27, 'PUNJAB', 3),
(28, 'PONDICHERRY', 34),
(29, 'RAJASTHAN', 8),
(30, 'SIKKIM', 11),
(31, 'TAMIL NADU', 33),
(32, 'TRIPURA', 16),
(33, 'UTTARAKHAND', 5),
(34, 'UTTAR PRADESH', 9),
(35, 'WEST BENGAL', 19),
(36, 'TELEGANA', 36),
(1, 'ANDAMAN AND NICOBAR ISLANDS', 35),
(2, 'ANDHRA Old', 37),
(3, 'ARUNACHAL PRADESH', 12),
(4, 'ASSAM', 18),
(5, 'BIHAR', 10),
(6, 'CHATTISGARH', 22),
(7, 'CHANDIGARH', 4),
(8, 'DAMAN AND DIU', 25),
(9, 'DELHI', 7),
(10, 'DADRA AND NAGAR HAVELI', 26),
(11, 'GOA', 30),
(12, 'GUJARAT', 24),
(13, 'HIMACHAL PRADESH', 2),
(14, 'HARYANA', 6),
(15, 'JAMMU AND KASHMIR', 1),
(16, 'JHARKHAND', 20),
(17, 'KERALA', 32),
(18, 'KARNATAKA', 29),
(19, 'LAKSHADWEEP', 31),
(20, 'MEGHALAYA', 17),
(21, 'MAHARASHTRA', 27),
(22, 'MANIPUR', 14),
(23, 'MADHYA PRADESH', 23),
(24, 'MIZORAM', 15),
(25, 'NAGALAND', 13),
(26, 'ORISSA', 21),
(27, 'PUNJAB', 3),
(28, 'PONDICHERRY', 34),
(29, 'RAJASTHAN', 8),
(30, 'SIKKIM', 11),
(31, 'TAMIL NADU', 33),
(32, 'TRIPURA', 16),
(33, 'UTTARAKHAND', 5),
(34, 'UTTAR PRADESH', 9),
(35, 'WEST BENGAL', 19),
(36, 'TELEGANA', 36);

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE `taluka` (
  `T_ID` int(10) NOT NULL,
  `taluka_name` varchar(30) NOT NULL,
  `D_ID` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`T_ID`, `taluka_name`, `D_ID`) VALUES
(1, 'Thane', 1),
(2, 'Kalyan', 1),
(3, 'Vasai', 1),
(4, 'Bhiwandi', 1),
(5, 'Ambarnath', 1),
(6, 'Palghar', 1),
(7, 'Ulhasnagar', 1),
(8, 'Dahanu', 1),
(9, 'Shahapur', 1),
(10, 'Murbad', 1),
(11, 'Vada', 1),
(12, 'Talasari', 1),
(13, 'Jawhar', 1),
(14, 'Vikramgad', 1),
(15, 'Mokhada', 1),
(16, 'Pune City', 2),
(17, 'Haveli', 2),
(18, 'Khed', 2),
(19, 'Baramati', 2),
(20, 'Junnar', 2),
(21, 'Shirur', 2),
(22, 'Indapur', 2),
(23, 'Daund', 2),
(24, 'Mawal', 2),
(25, 'Ambegaon', 2),
(26, 'Purandhar', 2),
(27, 'Bhor', 2),
(28, 'Mulshi', 2),
(29, 'Velhe', 2),
(30, 'Mumbai Suburban', 3),
(31, 'Nashik', 4),
(32, 'Malegaon', 4),
(33, 'Niphad', 4),
(34, 'Baglan', 4),
(35, 'Sinnar', 4),
(36, 'Dindori', 4),
(37, 'Nandgaon', 4),
(38, 'Yevla', 4),
(39, 'Igatpuri', 4),
(40, 'Chandvad', 4),
(41, 'Kalwan', 4),
(42, 'Surgana', 4),
(43, 'Trimbakeshwar', 4),
(44, 'Deola', 4),
(45, 'Peint', 4),
(46, 'Nagpur Urban', 5),
(47, 'Nagpur Rural', 5),
(48, 'Hingna', 5),
(49, 'Kamptee', 5),
(50, 'Savner', 5),
(51, 'Katol', 5),
(52, 'Ramtek', 5),
(53, 'Umred', 5),
(54, 'Narkhed', 5),
(55, 'Parseoni', 5),
(56, 'Mauda', 5),
(57, 'Kuhi', 5),
(58, 'Kalameshwar', 5),
(59, 'Bhiwapur', 5),
(60, 'Nagar', 6),
(61, 'Sangamner', 6),
(62, 'Nevasa', 6),
(63, 'Rahuri', 6),
(64, 'Rahta', 6),
(65, 'Shrigonda', 6),
(66, 'Kopargaon', 6),
(67, 'Akola', 6),
(68, 'Shrirampur', 6),
(69, 'Parner', 6),
(70, 'Pathardi', 6),
(71, 'Shevgaon', 6),
(72, 'Karjat', 6),
(73, 'Jamkhed', 6),
(74, 'Solapur North', 7),
(75, 'Malshiras', 7),
(76, 'Pandharpur', 7),
(77, 'Barshi', 7),
(78, 'Madha', 7),
(79, 'Sangole', 7),
(80, 'Akkalkot', 7),
(81, 'Mohol', 7),
(82, 'Solapur South', 7),
(83, 'Karmala', 7),
(84, 'Mangalvedhe', 7),
(85, 'Jalgaon', 8),
(86, 'Chalisgaon', 8),
(87, 'Bhusawal', 8),
(88, 'Jamner', 8),
(89, 'Chopda', 8),
(90, 'Raver', 8),
(91, 'Pachora', 8),
(92, 'Amalner', 8),
(93, 'Yawal', 8),
(94, 'Parola', 8),
(95, 'Dharangaon', 8),
(96, 'Erandol', 8),
(97, 'Muktainagar', 8),
(98, 'Bhadgaon', 8),
(99, 'Bodvad', 8),
(100, 'Karvir', 9),
(101, 'Hatkanangle', 9),
(102, 'Shirol', 9),
(103, 'Kagal', 9),
(104, 'Panhala', 9),
(105, 'Gadhinglaj', 9),
(106, 'Radhanagari', 9),
(107, 'Chandgad', 9),
(108, 'Shahuwadi', 9),
(109, 'Bhudargad', 9),
(110, 'Ajra', 9),
(111, 'Bavda', 9),
(112, 'Aurangabad', 10),
(113, 'Sillod', 10),
(114, 'Gangapur', 10),
(115, 'Paithan', 10),
(116, 'Kannad', 10),
(117, 'Vaijapur', 10),
(118, 'Phulambri', 10),
(119, 'Khuldabad', 10),
(120, 'Soegaon', 10),
(121, 'Nanded', 11),
(122, 'Mukhed', 11),
(123, 'Hadgaon', 11),
(124, 'Kandhar', 11),
(125, 'Kinwat', 11),
(126, 'Loha', 11),
(127, 'Deglur', 11),
(128, 'Naigaon (Khairgaon)', 11),
(129, 'Biloli', 11),
(130, 'Bhokar', 11),
(131, 'Mudkhed', 11),
(132, 'Himayatnagar', 11),
(133, 'Ardhapur', 11),
(134, 'Mahoor', 11),
(135, 'Umri', 11),
(136, 'Dharmabad', 11),
(137, 'Mumbai City', 12),
(138, 'Karad', 13),
(139, 'Satara', 13),
(140, 'Phaltan', 13),
(141, 'Patan', 13),
(142, 'Khatav', 13),
(143, 'Koregaon', 13),
(144, 'Man', 13),
(145, 'Wai', 13),
(146, 'Khandala', 13),
(147, 'Jaoli', 13),
(148, 'Mahabaleshwar', 13),
(149, 'Amravati', 14),
(150, 'Achalpur', 14),
(151, 'Warud', 14),
(152, 'Chandurbazar', 14),
(153, 'Dharni', 14),
(154, 'Morshi', 14),
(155, 'Daryapur', 14),
(156, 'Anjangaon Surji', 14),
(157, 'Dhamangaon Railway', 14),
(158, 'Nandgaon-Khandeshwar', 14),
(159, 'Chikhaldara', 14),
(160, 'Bhatkuli', 14),
(161, 'Teosa', 14),
(162, 'Chandur Railway', 14),
(163, 'Miraj', 15),
(164, 'Walwa', 15),
(165, 'Jat', 15),
(166, 'Tasgaon', 15),
(167, 'Khanapur (Vita)', 15),
(168, 'Palus', 15),
(169, 'Shirala', 15),
(170, 'Kavathemahankal', 15),
(171, 'Kadegaon', 15),
(172, 'Atpadi', 15),
(173, 'Yavatmal', 16),
(174, 'Pusad', 16),
(175, 'Umarkhed', 16),
(176, 'Wani', 16),
(177, 'Darwha', 16),
(178, 'Mahagaon', 16),
(179, 'Arni', 16),
(180, 'Kelapur', 16),
(181, 'Digras', 16),
(182, 'Ghatanji', 16),
(183, 'Ner', 16),
(184, 'Ralegaon', 16),
(185, 'Kalamb', 16),
(186, 'Babulgaon', 16),
(187, 'Zari-Jamani', 16),
(188, 'Maregaon', 16),
(189, 'Raigarh', 17),
(190, 'Sarangarh', 17),
(191, 'Udaipur (Dharamjaigarh)', 17),
(192, 'Baramkela', 17),
(193, 'Kharsia', 17),
(194, 'Pusour', 17),
(195, 'Lailunga', 17),
(196, 'Tamnar', 17),
(197, 'Gharghoda', 17),
(198, 'Khamgaon', 18),
(199, 'Buldana', 18),
(200, 'Chikhli', 18),
(201, 'Mehkar', 18),
(202, 'Malkapur', 18),
(203, 'Sindkhed Raja', 18),
(204, 'Nandura', 18),
(205, 'Motala', 18),
(206, 'Jalgaon (Jamod)', 18),
(207, 'Shegaon', 18),
(208, 'Lonar', 18),
(209, 'Sangrampur', 18),
(210, 'Deolgaon Raja', 18),
(211, 'Bid', 19),
(212, 'Georai', 19),
(213, 'Parli', 19),
(214, 'Ambejogai', 19),
(215, 'Manjlegaon', 19),
(216, 'Kaij', 19),
(217, 'Ashti', 19),
(218, 'Shirur (Kasar)', 19),
(219, 'Patoda', 19),
(220, 'Dharur', 19),
(221, 'Wadwani', 19),
(222, 'Latur', 20),
(223, 'Nilanga', 20),
(224, 'Udgir', 20),
(225, 'Ausa', 20),
(226, 'Ahmadpur', 20),
(227, 'Chakur', 20),
(228, 'Renapur', 20),
(229, 'Deoni', 20),
(230, 'Jalkot', 20),
(231, 'Shirur-Anantpal', 20),
(232, 'Chandrapur', 21),
(233, 'Warora', 21),
(234, 'Chimur', 21),
(235, 'Brahmapuri', 21),
(236, 'Bhadravati', 21),
(237, 'Rajura', 21),
(238, 'Ballarpur', 21),
(239, 'Nagbhir', 21),
(240, 'Korpana', 21),
(241, 'Mul', 21),
(242, 'Sindewahi', 21),
(243, 'Sawali', 21),
(244, 'Gondpipri', 21),
(245, 'Jiwati', 21),
(246, 'Pombhurna', 21),
(247, 'Dhule', 22),
(248, 'Sakri', 22),
(249, 'Shirpur', 22),
(250, 'Sindkhede', 22),
(251, 'Jalna', 23),
(252, 'Bhokardan', 23),
(253, 'Ambad', 23),
(254, 'Ghansawangi', 23),
(255, 'Partur', 23),
(256, 'Mantha', 23),
(257, 'Jafferabad', 23),
(258, 'Badnapur', 23),
(259, 'Parbhani', 24),
(260, 'Jintur', 24),
(261, 'Gangakhed', 24),
(262, 'Purna', 24),
(263, 'Sailu', 24),
(264, 'Pathri', 24),
(265, 'Manwath', 24),
(266, 'Palam', 24),
(267, 'Sonpeth', 24),
(268, 'Akola', 25),
(269, 'Akot', 25),
(270, 'Balapur', 25),
(271, 'Murtijapur', 25),
(272, 'Telhara', 25),
(273, 'Barshitakli', 25),
(274, 'Patur', 25),
(275, 'Osmanabad', 26),
(276, 'Tuljapur', 26),
(277, 'Umarga', 26),
(278, 'Kalamb', 26),
(279, 'Paranda', 26),
(280, 'Bhum', 26),
(281, 'Lohara', 26),
(282, 'Washi', 26),
(283, 'Shahade', 27),
(284, 'Nandurbar', 27),
(285, 'Nawapur', 27),
(286, 'Akkalkuwa', 27),
(287, 'Akrani', 27),
(288, 'Talode', 27),
(289, 'Ratnagiri', 28),
(290, 'Chiplun', 28),
(291, 'Sangameshwar', 28),
(292, 'Khed', 28),
(293, 'Dapoli', 28),
(294, 'Rajapur', 28),
(295, 'Guhagar', 28),
(296, 'Lanja', 28),
(297, 'Mandangad', 28),
(298, 'Gondia', 29),
(299, 'Goregaon', 29),
(300, 'Tiroda', 29),
(301, 'A/Moregaon', 29),
(302, 'Deori', 29),
(303, 'Salekasa', 29),
(304, 'Sadak Arj.', 29),
(305, 'Amgaon', 29),
(306, 'Wardha', 30),
(307, 'Hinganghat', 30),
(308, 'Deoli', 30),
(309, 'Arvi', 30),
(310, 'Seloo', 30),
(311, 'Samudrapur', 30),
(312, 'Karanja', 30),
(313, 'Ashti', 30);

-- --------------------------------------------------------

--
-- Table structure for table `uploadnews`
--

CREATE TABLE `uploadnews` (
  `ID` int(3) NOT NULL,
  `TITLE` varchar(1000) NOT NULL,
  `SUBTITLE` varchar(2000) NOT NULL,
  `REPORTER_ID` int(11) NOT NULL,
  `DATE2` date NOT NULL,
  `IMAGE` varchar(100) NOT NULL,
  `DESCRIPTION` varchar(50000) NOT NULL,
  `AREA` int(11) NOT NULL,
  `CATEGORY` int(11) NOT NULL,
  `STATE` text NOT NULL,
  `DISTRICT` text NOT NULL,
  `TALUKA` text NOT NULL,
  `CID` int(11) NOT NULL,
  `STATUS` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadnews`
--

INSERT INTO `uploadnews` (`ID`, `TITLE`, `SUBTITLE`, `REPORTER_ID`, `DATE2`, `IMAGE`, `DESCRIPTION`, `AREA`, `CATEGORY`, `STATE`, `DISTRICT`, `TALUKA`, `CID`, `STATUS`) VALUES
(6, 'Girl gets her 1st period, brother feels it is an affair and kills her in Thane.', 'A 12-year-old girl was allegedly killed by her brother over suspicion of having affair with someone.', 17, '2023-05-09', 'upload/3_news_img.png', 'THANE - \r\n\r\nA 30-year-old security guard has been arrested for allegedly killing his 12-year-old sister over suspicion that she had got physical with someone. Police sources said it was very likely a misunderstanding as the girl had reached menarche - the first time that a girl menstruates - but the brother thought she had got physical with someone. The girl lived with her brother and sister-in-law in Ulhasnagar, said senior inspector of Ulhasnagar police station Madhukar Kad.\r\nA few days ago, the girls menses had started and she was discharging blood. The brother noticed the bloodstains on her clothes and started doubting that the girl was having an affair. The child, however, did not have knowledge of the menstrual cycle and when the brother questioned her about the bloodstains, she was unable to explain. He accused her of having an affair with someone, Kad told TOI. He also singed her with tongs on the mouth, the back and other parts of body due to which she suffered severe burn injuries, said the officer.\r\nThe matter came to light when the girl was brought for treatment to Central hospital in Ulhasnagar where the girl was declared brought dead, the officer said. A case of murder has been registered under section 302 of Indian Penal Code. The girls body has been sent for a post-Mortem.', 20, 10, '15', '1', '1', 2, 'YES'),
(7, 'Thane- Brother kills sister after assuming her period blood stains as affair-Arrested', 'Police sources said it was very likely a misunderstanding as the girl had reached menarche-the first time', 14, '2023-05-09', 'upload/7_news_img.png', 'A 30-year-old security guard has been arrested for allegedly killing his 12-year-old sister over suspicion that she had got physical with someone. Police sources said it was very likely a misunderstanding as the girl had reached menarche - the first time that a girl menstruates - but the brother thought she had got physical with someone. The girl lived with her brother and sister-in-law in Ulhasnagar, said senior inspector of Ulhasnagar police station Madhukar Kad.\r\nA few days ago, the girls menses had started and she was discharging blood. The brother noticed the bloodstains on her clothes and started doubting that the girl was having an affair. The child, however, did not have knowledge of the menstrual cycle and when the brother questioned her about the bloodstains, she was unable to explain. He accused her of having an affair with someone, Kad told TOI. He also singed her with tongs on the mouth, the back and other parts of body due to which she suffered severe burn injuries, said the officer.\r\nThe matter came to light when the girl was brought for treatment to Central hospital in Ulhasnagar where the girl was declared brought dead, the officer said. A case of murder has been registered under section 302 of Indian Penal Code. The girls body has been sent for a post-Mortem.', 20, 10, '15', '1', '1', 1, 'YES'),
(8, 'Thane- Rights Groups Complain to Police on Hate Spewing Speeches at Recent Dharam Sabha', 'We would like to bring your attention to these instigating speeches, urging you to take stringent action against the perpetrators.', 20, '2023-05-09', 'upload/8_news_img.png', 'New Delhi- A group of rights organisations and concerned citizens have written to senior officials in the Thane police about communal and hate spewing speeches made at a Hindu Janjagran Dharam Sabha event on April 30 organised by the Sakal Hindu Samaj in Mumbra, Thane, Maharashtra.\r\nMany speakers were seen participating in the said event, espousing a hard, right-wing, exclusionist ideology, and can be seen delivering incendiary and inciteful speeches through which they had specifically targeted Muslim citizens and community of our country, the organisations letter states.\r\nVideos of these hate speeches, the letter continues, have gone viral on social media, and at least five provocative speeches made at the event can be found online. We would like to bring your attention to these instigating speeches, urging you to take stringent action against the perpetrators, as if these hate-driven speeches are left unchecked, the peace and harmony of our country will be affected direly, the letter-writers state.\r\n\r\nTo drive home their point, the organisations have pointed to recent orders of the Supreme Court against hate speech. Such gatherings wherein egalitarian, divisive and stigmatizing words are uttered and mobs provoked violate both the fundamental rights guaranteed to all Indians under the Indian Constitution as are in violation of provisions of Indian criminal law. Articles 14, 15, 16, 21 and 25 of the Constitution stands violated. Provisions of the Indian Penal Code (IPC) have also been violated, the letter continues.\r\n\r\nThe letter also directly quotes sections of speeches made at the event where speakers call on Hindus to take up arms against Muslims, or where they peddle blatant falsehoods about the minority community. For instance, one Sadhvi Saraswati is quoted as saying,In the name of religion, even if you have to kill for it or die for it, do not take a step back. Do buy a swords for Rs. 1000 and keep it at home, in case if anyone who follows any other religion and is a be-dharmi even dares to look at you.\r\n\r\nThe signatories include the National Alliance for Peoples Movements Sanjeevani Kendra, Thane Parcham, Mumbra and the Citizens for Justice and Peace, Mumbai.', 17, 4, '15', '1', '1', 2, 'YES'),
(10, 'Citizens meet CP Thane, file complaint against hate-filled Islamophobic speech by HJDS in Mumbra, Thane', 'Speakers at the event, organised on April 30 by the Sakal Hindu Saamaj, had urged the audience to take up arms; the delegation had representatives of NAPM, Andhashraddha Nirmulan Samiti, Sanjeevan Trust, Kendra, and CJP, they sought swift prosecution.', 13, '2023-05-09', 'upload/9_news_img.png', 'On May 8, Monday morning, several organisations were represented in a collective delegation to the Commissioner of Police, Thane, Shri. Jai Jeet Singh, demanding prompt action according to law, against the hate speech delivered during an April 30 event of Hindu Janjagran Dharam Sabha.\r\nThe controversial meeting had been hosted at Daighar, Mumbra by the Sakal Hindu Samaj Thane on April 30, two days after the SC pulled up the Maharashtra govt on its inaction on hate crimes. Activists of the NAPM, Andhashraddha Nirmulan Samiti Shramik Janata Sangh, Sanjeevan Kendra and Citizens for Justice and Peace -CJP were represented in the delegation.\r\n\r\nIn the speeches that have been detailed in the complaint, several speakers were heard espousing incendiary and inciteful through which they had specifically targeted the Muslim citizens and community of our country, specifically making targeted calls to violence. The event had been organised by the Sakal Hindu Samaj, an outfit that has been visible in ensuring that a string of such hate events take place all over the state.\r\n\r\nContent of the Complaint:\r\n\r\nSadhvi Saraswati, Bharatanand Saraswati Maharaj, and Muni Nilesh Chandra Maharaj were the speakers at the said meet, along with two other unknown individuals. The collective complaint highlighted the fact that the said speakers delivered hate speeches, made misinformed and offensive claims, and raised open calls of violence against the minority community, with deliberate attempts of instigating and provoking his audience.\r\n\r\nSadhvi Saraswati had also urged her audience to take up arms by saying, In the name of religion, even if you have to kill for it or die for it, do not take a step back. Do buy a swords for Rs. 1000 and keep it at home, in case anyone who follows any other religion and is a be-dharmi even dares to look at you. \r\n\r\nIn the name of religion, even if you have to kill for it or die for it, do not take a step back. Do buy a swords for Rs. 1000 and keep it at home, in case anyone who follows any other religion and is a be-dharmi even dares to look at you.\r\n\r\nBharatanand Saraswati Maharaj also targeted the Muslim community and threatened them of havig a repeat of the Babri Masjid demolition, and said, We will repeat the karseva that we have done in the past. We all, along with our saints and Hindu brothers will ourselves go and free this pure land that belongs to us.\r\n\r\nThroughout the representation, citizens organisations have emphasised on the words used by the speakers, and has clearly incited Hindus, against the Muslim community by bringing in their history and certain controversial cases, and has even used slurs against the Muslim community. Following the patterns of their extremist peers, giving fire to the Love-Jihad agenda, the speakers have even brought in the issue of Hindu women being under threat. Such expression of extreme hate with a clear communal objective to establish religious hegemony upon a community that is already a minority in numbers in the country, is deplorable and against the constitutional values that we uphold as citizens of this country.\r\n\r\nAfter several attempts, the delegation was able to meet with the Commissioner of Police, Thane, Jai Jeet Singh on Monday. In the delegation were Vandana Shinde, from the Andhadhraddha Nirmulan Samiti, Sanjay Mangala Gopal, from the NAPM,  Jagdish Khairalia, from Shramik Janata Sangh, and Augustin Crasto, Sanjeevan Kendra. There are over a dozen signatories to the complaint.\r\n\r\nThe complaint to the Thane Police Commissioner details the grounds for swift and stringent action against the speakers. Not only has the content in this instance speeches made on 30 Apr, violated both Supreme Court jurisprudence and several sections of the IPC, the repeat events of this kind make the atmosphere in Thane and Mumbra fragile and threaten social harmony. As individuals and citizens committed to work in the social sphere with all communities, the delegation stressed that this inaction by the police to first prevent that it takes place, and thereafter delayed prosecution action was further detrimental.', 17, 4, '15', '1', '1', 1, 'YES'),
(11, 'Citizen bodies claim hate speeches made at conclave in Thane.', 'It urged the Thane police chief to take cognisance of videos of the event', 23, '2023-05-09', 'upload/11_news_img.png', 'A memorandum dated May 5 and submitted by the group to the Thane police commissioner took a dim view of the event organised in Mumbra area here by the Sakal Hindu Samaj on April 30. It said many speakers were seen participating in the event, espousing a hard, right-wing, exclusionist ideology and delivering incendiary and inciteful speeches through which they specifically targeted Muslim citizens and the community.\r\nA total of five speakers were heard delivering anti-Muslim speeches, videos of which have gone viral, said the memorandum submitted by organisations including the National Alliance for Peoples Movements and the Citizens for Justice and Peace Mumbai. It claimed the speakers made misinformed and offensive claims against the minority community, its history and their culture.', 17, 4, '15', '1', '1', 3, 'YES'),
(12, 'Thane- Naupada police detains IIT Kanpur student and his associate in cryptocurrency fraud', 'A resident of Naupada, Sushil Kangya, had sent a written a complaint to senior inspector Sanjay Dhumal about being defrauded by people associated with multi-level marketing companies Dronx.Biz and BNB Pool.', 24, '2023-05-09', 'upload/12_news_img.png', 'Thane-  The Naupada police on Tuesday detained an IIT Kanpur student Shubransh Nayak and his five associates in connection with an alleged cryptocurrency fraud.\r\nThe initial complaint is of â‚¹2.5 lakh, but the scam could burgeon to several crores since we are expecting more complainants  to approach us,said a police officer. \r\n\r\nA resident of Naupada, Sushil Kangya, had sent a written a complaint to senior inspector Sanjay Dhumal about being defrauded by people associated with multi-level marketing companies Dronx.Biz and BNB Pool. He claimed that scam could be to the tune of â‚¹300 crore. He also sought the polices help in recovering the lost money of â‚¹2.5 lakhs which he had invested in cryptocurrency. \r\n\r\nKangya  mentioned in his letter that last year he was approached by two people named Shubhransh Nayak and Pankaj Pandhi who asked him and his sister to invest in a cryptocurrency scheme and get a regular interest of 8 per cent. They also promised that the returns can be even more if they got more people to invest in the scheme and increase the network of people. \r\n\r\nInitially, we invested â‚¹ 2.5 lakhs and also got returns for a few months. Later the returns stopped. When we asked Shubhransh and Pankaj about non-payment of the returns they showed us a few videos of the prime minister allegedly promoting the organisations and that the companies were genuine, Kangya said. ', 19, 5, '15', '1', '1', 5, 'YES'),
(13, 'Thane: Ulhasnagar grooms car hits guests, 11 injured', 'The driver was arrested and a case under relevant sections of the Indian Penal Code was registered against him.', 26, '2023-05-09', 'upload/13_news_img.png', 'Thane: Eleven people attending a marriage ceremony were injured after being hit by a grooms car on Monday near Vitthalwadi station in Ulhasnagar. The driver Vishal Ludhwani was arrested and a case under relevant sections of the Indian Penal Code was registered against him. Police said the groom Rohit Rizwanis car was reaching the Praveen hotel premises, where the ceremony was scheduled, and the people from the grooms side were dancing. Suddenly, Ludhwani lost control of the vehicle and hit the guests.\r\n\r\nOne person critical\r\n\r\nThe injured were immediately admitted to a Mira NX Hospital. One of them was referred to Hinduja Hospital in Mumbai as his condition was critical.\r\n\r\nPolice said the eight injured were given first aid and discharged, while two are undergoing treatment at the hospital. Further investigation has been taken up, police said.', 144, 4, '15', '1', '1', 5, 'YES'),
(15, 'Pune: MSEDCL disconnects supply to more than 16,000 power consumers for non-payment of bills for 3 months.', 'Power supply to as many as 16,413 consumers including commercial and industrial defaulters who have not paid electricity bills for three months in Pune circle has been cut off.', 17, '2023-05-09', 'upload/14_news_img.png', 'According to an official of Maharashtra State Electricity Distribution Company Limited (MSEDCL), the special drive is being carried out by the power utility in addition to the regular action of disconnection of supply if consumers failed to pay their long-pending bills.\r\n\r\nPower supply to as many as 16,413 consumers including commercial and industrial defaulters who have not paid electricity bills for three months in Pune circle has been cut off.\r\n\r\nActions are underway to disconnect the electricity supply of another 71,098 who have not paid their arrears.\r\n\r\nAccording to an official of Maharashtra State Electricity Distribution Company Limited (MSEDCL), the special drive is being carried out by the power utility in addition to the regular action of disconnection of supply if consumers failed to pay their long-pending bills.\r\n\r\nA list of households, commercial, and industrial defaulters who have not paid their electricity bills for three months in Pune Circle has been prepared and it was found that there were 87,511 consumers with arrears of more than Rs 500 who have not paid electricity bills in three months. These arrears amount Rs 42.63 crore.\r\n\r\nIn Pune city, 26,796 households, commercial and industrial consumers have not paid electricity bills for three months.\r\n\r\nThese arrears amount to Rs 11.81 crore. Supply has been disconnected for 6,536 consumers in Pune city and warnings have been issued to the remaining consumers to pay up the outstanding amount.\r\n\r\nIn the neighbouring township of Pimpri Chinchwad, 16,300 consumers have not paid amounts to the tune of Rs 10.91 crore for the last three months. Supply has been disconnected for 3,209 consumers.\r\n\r\nIn the rural areas of Pune district â€“ Ambegaon, Junnar, Maval, Khed, Mulshi, Velhe, and Haveli talukas â€“ 44,415 domestic, commercial, and industrial consumers have not paid outstanding bills totalling Rs 19.91 crore. The electricity supply of 6,669 consumers has been disconnected.\r\n\r\nThe utility has warned defaulters of stern action if they resort to using supply from neighbours or other places through wires or cables.\r\n\r\nAction will be taken as per section 135/138 of Indian Electricity Act 2003, it added.\r\n', 34, 4, '15', '2', '18', 2, 'YES'),
(16, 'Fire breaks out at IT Business Hub in Vimannagar', 'A major fire broke out in Vimannagar at 12.30 PM today causing heavy traffic in the area. Reportedly, the fire broke out in the parking area of the Solitaire Business Hub. The employees from the building were evacuated.', 13, '2023-05-09', 'upload/16_news_img.png', 'The fire initially broke in the ninth floor of the electric department . The blaze gutted the windows of the building and caused a massive disruption. Many businesses were affcted due to the fire. Around 2000 employee were evacuated to safer space. On receiving the information, four fire tenders rushed to the spot and dodge the fire. \r\n\r\nThe cause of fire is still unknown. So far no casualties have been reported.\r\n', 35, 6, '15', '2', '18', 1, 'YES'),
(17, 'Pune: Major Fire in Viman Nagar Office Building Disrupts Business Operations And Causes Traffic Chaos', 'A major fire broke out in Vimannagar at 12.30 PM today causing heavy traffic in the area. Reportedly, the fire broke out in the parking area of the Solitaire Business Hub. The employees from the building were evacuated.', 17, '2023-05-09', 'upload/17_news_img.png', 'Sumit Singh,\r\nViman Nagar, 9th May 2023:\r\nA major fire broke out in the bustling Viman Nagar area at around 12:30 PM today, causing widespread panic and traffic chaos. The fire reportedly started in the parking area of the Marvel Edge Building, before quickly spreading to other parts of the building.\r\nEyewitnesses reported a strong smell of burning rubber before the fire became visible. All employees from the building, around four to five companies, were quickly evacuated. The blaze caused significant disruption to office work, with many businesses forced to shut down for the day. Firefighters rushed to the scene to battle the flames, While the cause of the fire is still unknown.\r\nAccording to fire brigade officials, four fire tenders were dispatched to the Marvel Edge office building to extinguish the fire.\r\n', 35, 6, '15', '2', '18', 2, 'YES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `add_channel`
--
ALTER TABLE `add_channel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `add_comments`
--
ALTER TABLE `add_comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `add_upload`
--
ALTER TABLE `add_upload`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `channel_banner`
--
ALTER TABLE `channel_banner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `channel_logo`
--
ALTER TABLE `channel_logo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `channel_quotation`
--
ALTER TABLE `channel_quotation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reporterdata`
--
ALTER TABLE `reporterdata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `short_add`
--
ALTER TABLE `short_add`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `taluka`
--
ALTER TABLE `taluka`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `uploadnews`
--
ALTER TABLE `uploadnews`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `add_channel`
--
ALTER TABLE `add_channel`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `add_comments`
--
ALTER TABLE `add_comments`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `add_upload`
--
ALTER TABLE `add_upload`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `channel_banner`
--
ALTER TABLE `channel_banner`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `channel_logo`
--
ALTER TABLE `channel_logo`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `channel_quotation`
--
ALTER TABLE `channel_quotation`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reporterdata`
--
ALTER TABLE `reporterdata`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `short_add`
--
ALTER TABLE `short_add`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `uploadnews`
--
ALTER TABLE `uploadnews`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
