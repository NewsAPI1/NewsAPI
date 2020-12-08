-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 01:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsapi-user`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `Username`, `password`) VALUES
(0, 'mansiverma18', '54321'),
(1, 'tanyagoyal', 'tanya'),
(3, 'siddharthrai', 'siddharth');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(100) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `CategoryName`, `Description`) VALUES
(11, 'Science', 'Science News features daily news articles, feature stories, reviews and more in all disciplines of science......'),
(12, 'Business', 'Get latest business news headlines, financial news, breaking news updates, live share market today, stock, economy news from India '),
(13, 'Entertainment', 'Entertainment News, Celebrity News, Latest Movie News, Breaking News | Entertainment - Times of India Latest entertainment news and gossip from the world of bollywood, Hollywood and regional film industries. '),
(14, 'Health', 'Get latest news on weight loss, fitness and workout tips. Tips for weight training, cardio and yoga exercises to stay healthy.'),
(15, 'Sports', 'Sports is the ultimate destination for Sports fans from around the World. Get latest sports news and updates from Cricket, Tennis, Football, Formula One, Hockey, NBA and Golf with Live scores ...'),
(16, 'Technology', 'Read full articles, watch videos, browse thousands of titles and more on the \"Technology\" topic ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `user_email`, `message`) VALUES
(20, 'User1', 'Good Job'),
(21, 'User2', 'could be better'),
(22, 'user3', 'Thats Okay'),
(23, 'User4', 'Nice'),
(24, 'User5', 'Great job'),
(25, 'User6', 'Keep it up '),
(28, 'User 10', 'Thats intresting');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Id` int(100) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Admin` varchar(255) NOT NULL,
  `Thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `Title`, `Link`, `Description`, `Date`, `Category`, `Admin`, `Thumbnail`) VALUES
(11, 'Gland Pharma IPO opens tomorrow: Key things to know before you subscribe - Mint', 'https://www.livemint.com/market/ipo/gland-pharma-ipo-price-listing-date-lot-size-and-other-details-11604818550940.html', 'Gland Pharma IPO is the biggest initial public offering by a pharmaceutical firm in India.The company is offering 4.3 shares in the IPO', '2020-11-08', 'Business', 'mansiverma18', 'gland-pharma_1604821221487_1604821337422.jpg'),
(12, 'Tata Motors bullish on SUVs, targets widest portfolio - Times of India', 'https://timesofindia.indiatimes.com/auto/cars/tata-motors-bullish-on-suvs-targets-widest-portfolio/articleshow/79110315.cms', 'Cars News: The auto major, which currently sells models like Nexon and Harrier in the SUV segment, is also looking to overhaul its entire sales, aftersales', '2020-11-08', 'Business', 'mansiverma18', 'photo.jpg'),
(13, 'Kia Sonet For Indonesia Is 125mm Longer Than Sonet In India - Launch 11th Nov - RushLane', 'https://www.rushlane.com/kia-sonet-for-indonesia-is-125mm-longer-12382677.html', 'Kia Sonet is all set to be launched in Indonesia on 11th November. Ahead of that, official specs have been leaked.', '2020-11-08', 'Business', 'mansiverma18', 'kia-sonet-indonesia-specs-5.jpg'),
(14, 'Today I see Kamala Harris & I Know Different is So Good: Masaba - The Quint', 'https://www.thequint.com/entertainment/celebrities/neena-gupta-daughter-masaba-gupta-on-her-mixed-race-upbringing-after-kamala-harris-becomes-vice-president-america', 'Masaba Gupta on Kamala Harris: After Kamala Harris became the first-ever woman to be elected as Vice President of America, fashion designer Masaba Gupta took to Instagram to pen a note about her own \"mixed\" upbringing while congratulating Harris.', '2020-11-08', 'Entertainment', 'mansiverma18', 'thequint_2020-11_0f8243b4-1081-4984-996e-6eb6376bfb3c_Untitled_design___2020_11_08T120914_318.jpg'),
(15, 'Niti Taylor', 'https://www.bollywoodshaadis.com/articles/niti-taylors-hubby-parikshit-bawa-surprises-her-with-an-cute-video-21627', 'Niti Taylor is enjoying her new journey as Missus, and on her birthday her Mister, Parikshit Bawa gave a sweet surprise to her. Check it out! ', '2020-11-08', 'Entertainment', 'mansiverma18', 'article-l-2020113126542924869000.jpg'),
(16, 'Mahesh Babu, Namrata Shirodkar and family look dashing as they get spotted at the airport - PINKVILLA', 'https://www.pinkvilla.com/entertainment/south/mahesh-babu-namrata-shirodkar-and-family-look-dashing-they-get-spotted-airport-573045', 'Mahesh Babu, his wife Namrata Shirodkar and their children Gautam and Sitara were seen in comfy casual wear as they were spotted at the airport.', '2020-11-08', 'Entertainment', 'mansiverma18', 'mahesh_babu_and_family_airport_pictures.jpg'),
(17, 'Here are 4 foods you must avoid giving your children during cold, flu season - DNA India', 'https://www.dnaindia.com/lifestyle/report-here-are-4-foods-you-must-avoid-giving-your-children-during-cold-flu-season-2855166', 'Today, we bring to you some foods that your kids should avoid eating during winters to stay healthy during this season.', '2020-11-08', 'Health', 'mansiverma18', '936291-child-15664701280.jpg'),
(18, 'Death toll from COVID-19 exceeds 162,000 in Brazil - Yahoo India News', 'https://in.news.yahoo.com/death-toll-covid-19-exceeds-062020792.html', 'Sao Paulo[BRAZIL], November 8, (ANI/Xinhua): Brazil registered 254 more deaths from COVID-19 in the last 24 hours, bringing the national count to 162,269...', '2020-11-08', 'Health', 'mansiverma18', 'edb37b0ec559af7697b3dc15ae7b9d14.jpg'),
(19, 'BCG vaccine effective in preventing COVID-19, claims new study by Indian doctor - Zee News', 'https://zeenews.india.com/india/bcg-vaccine-effective-in-preventing-covid-19-claims-new-study-by-indian-doctor-2323292.html', 'This is a Medical experiment and we do not recommend or prescribe the above treatment for COVID 19. Please take legal medical advise before administrating any treatment)', '2020-11-08', 'Health', 'mansiverma18', '898010-unlock-use (1).jpg'),
(20, 'Actress required with `chest girth of 112 cm`, Russia set to shoot a film in space - Zee News', 'https://zeenews.india.com/hollywood/actress-required-with-chest-girth-of-112-cm-russia-set-to-shoot-a-film-in-space-2323301.html', 'Tom Cruise has competition? Yes, we can say so! Russia is also all set to shoot a film in space and has laid out certain specifications for its lead.', '2020-11-08', 'Science', 'tanyagoyal', '898019-russian-film.jpg'),
(21, 'Scientists 3D print microscopic Star Trek spaceship that moves on its own', 'https://edition.cnn.com/2020/11/08/us/star-trek-3d-microscopic-spaceship-scn-trnd/index.html', 'A team of physicists at a university in the Netherlands have 3D-printed a microscopic version of the USS Voyager, an Intrepid-class starship from Star Trek.', '2020-11-08', 'Science', 'tanyagoyal', '201107161424-01-star-trek-microscopic-spaceship-exlarge-169.jpg'),
(22, 'Duckbill Dinosaurs Swam Hundreds of Kilometres to Reach Different Continents, Reveals New Study - News18', 'https://www.news18.com/news/buzz/duckbill-dinosaurs-used-to-swim-hundreds-of-kilometres-to-reach-continents-reveals-new-study-3056063.html', 'A new dinosaur, Ajnabia Odysseus, which is a member of the plant-eating duckbill dinosaur family, was found in Morocco. The species is being dated back some 66 million years, which was towards the end of the Cretaceous period.', '2020-11-08', 'Science', 'tanyagoyal', '1604813643_untitled-design-2020-11-08t110305.433.jpg'),
(23, '‘He‘s not an impactful player in that position’: Gambhir explains why he would pick Shaw over Rahane... - Hindustan Times', 'https://www.hindustantimes.com/cricket/he-is-not-an-impactful-player-in-that-position-gautam-gambhir-explains-why-he-would-pick-prithvi-shaw-over-ajinkya-rahane-in-delhi-capitals-playing-xi-against-sunrisers/story-Ov3Hw0HbQXKdJUfist1HTK.html', 'IPL 2020: In an pre-match analysis video chat on ESPNCricinfo, former India cricketer Gautam Gambhir was asked to name his playing XI for DC for the match, and he picked Shaw in the team and left out Rahane.', '2020-11-08', 'Sports', 'tanyagoyal', '_9415831a-2196-11eb-8734-93f916536cd4.jpg'),
(24, 'Kane Williamson’s Form Crucial for SRH against DC: Sanjay Bangar - The Quint', 'https://www.thequint.com/indian-premier-league-ipl/kane-williamsons-form-crucial-for-sunrisers-hyderabad-against-delhi-capitals-sanjay-bangar', 'Talking about Delhi Capitals, Bangar said that Shikhar Dhawan has to fire for them if they want to make the finals.', '2020-11-08', 'Sports', 'tanyagoyal', 'thequint_2019-04_608628a3-0934-4b37-a8d3-b882cc61dab4_GAZI_0700.jpg'),
(25, 'Mahmudullah to miss PSL playoffs after testing positive for Covid-19 | ESPNcricinfo.com - ESPNcricinfo', 'https://www.espncricinfo.com/story/_/id/30275881/mahmudullah-miss-psl-playoffs-testing-positive-covid-19', 'Multan Sultans had roped in Mahmudullah in place of Moeen Ali, and he was supposed to leave Dhaka on November 9', '2020-11-08', 'Sports', 'tanyagoyal', '1205399_1296x729.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
