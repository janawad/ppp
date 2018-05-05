-- phpMyAdmin SQLs Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 08:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pppp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(260) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1-superadmin,2-admin',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `role`, `status`) VALUES
(11, 'admin', 'princess', 'e10adc3949ba59abbe56e057f20f883e', 9164942431, 1, 1),
(12, 'admin', 'admin123', 'e10adc3949ba59abbe56e057f20f883e', 9164942431, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `announcement_title` varchar(255) NOT NULL,
  `announcement_date` varchar(255) NOT NULL,
  `announcement_desc` text NOT NULL,
  `announcement_image` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `date_created`, `date_updated`, `announcement_title`, `announcement_date`, `announcement_desc`, `announcement_image`, `deleted`) VALUES
(6, '2017-12-18 11:17:11', '2017-12-18 11:30:16', 'image one', '', '', '15135760311.jpg', 0),
(7, '2017-12-18 11:17:35', '2017-12-18 11:29:00', 'image two', '', '', '15135760552.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `blog_title` varchar(225) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_image` varchar(225) NOT NULL,
  `blog_image_details` varchar(250) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `date_created`, `date_updated`, `blog_title`, `blog_desc`, `blog_image`, `blog_image_details`, `deleted`) VALUES
(40, '2017-12-18 11:03:37', '0000-00-00 00:00:00', 'Hibiscus', 'The most common flower and also one of a kind. It can be found in the shades of red, yellow, pink or whiteand is perfect for an exquisite dÃ©cor. These flowers exhibit the colors of our indian tradition like no other. There are various other flowers like Gulmohars, Jacarandas, copper pods which can be seen lining the roads or flourishing the gardens. These flowers not only prove to be cost effective but also add a wild touch to your wedding with their awesomeness!', '15135752171497346103hibiscus.jpg', '1513575217', 0),
(41, '2017-12-18 11:04:29', '0000-00-00 00:00:00', 'Bougainvilleas', 'These wild flowers are available in plenty in any garden and are relatively cheap as well. They grow in clusters and are found in amazing hues of pink, orange, yellow, white and purple. Doesnâ€™t it look like a combination of our very own wedding colors? They have a short life span when out of water and must bekept in water for as long as possible. Imagine these to adorn your backdrop â€“ mesmerizing!', '15135752691497345087bougainvilleas.jpg', '1513575269', 0),
(42, '2017-12-18 11:04:54', '2017-12-18 11:07:42', 'Orchidaceae.', 'These are easily available in the gardens and are mildly fragrant. The purple colored flowers can also be used as a substitute for orchids. It is a beachy, island kind of flower and serves as an awesome combination of looks and scent for a pool party or summer wedding!', '15135752941497345054orchidaceae.jpg', '1513575462', 0),
(43, '2017-12-18 11:05:17', '0000-00-00 00:00:00', 'Plumeria', 'Commonly known as the Champa flower, it is a beautiful sight in white and hues of yellow. Though not uncommon, it can transform your wedding venue into a tropical beach party.', '15135753171497345015plumeria.jpg', '1513575317', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_image_one` varchar(255) NOT NULL,
  `blog_image_details` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `date_created`, `date_updated`, `blog_title`, `blog_image`, `blog_image_one`, `blog_image_details`, `deleted`) VALUES
(1, '2017-12-18 11:44:24', '2017-12-18 12:23:59', '6', '15135800392.jpg', '15135800193.jpg', '15135800194.jpg', 0),
(2, '2017-12-18 11:53:26', '2017-12-18 12:24:39', 'aaassssssssss', '15135800795.jpg', '15135800636.jpg', '15135800637.jpg', 0),
(3, '2017-12-18 12:12:02', '2017-12-18 12:25:10', 'q2q', '15135800958.jpg', '15135801109.jpg', '151358011010.jpg', 0),
(4, '2017-12-18 12:26:04', '2017-12-18 12:26:19', '', '151358016410.jpg', '151358016411.jpg', '151358017912.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `testimonials_name` varchar(255) NOT NULL,
  `position` varchar(250) NOT NULL,
  `testimonials_desc` text NOT NULL,
  `testimonials_image` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = active , 0 = inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `date_created`, `date_updated`, `testimonials_name`, `position`, `testimonials_desc`, `testimonials_image`, `deleted`) VALUES
(22, '2017-12-18 10:41:43', '2017-12-18 10:42:22', 'testimonial 1', '', 'I just want to say a big thank you to you and my father for everything. I think I had this fairytale wedding where everything was just as I had imagined it would be. You went above and beyond our agreement and made everything so perfect and beautiful. We are so grateful for your expert orchestration of our wedding day. We consider ourselves blessed to have had the privilege of working with someone who translated our vision with such style, grace and professionalism. Rabindra â€“ you showed us the most amazing venue and we fell in love with it the very first time. Your quick response and patience helped us make some of our final decisions. Thank you also to all your staff that helped us out on our wedding day itself! I would highly recommend youâ€™ll to anyone, anytime, any place. So truly thank you all, for we are indeed a very happy wedded couple! ', '15135739031513365358home1.jpg', 1),
(23, '2017-12-18 10:46:10', '0000-00-00 00:00:00', 'testimonial 2', '', 'We never planned on having a grand wedding. But after looking at a few different wedding venues, checking certain review sites, we felt that Princess Green was the one place that we could seriously consider. When we stepped onto the lawn, we knew we had found our venue. The beautiful greenscape of the land and the breathtaking design elements are one of a kind. After the wedding, several people told us it was the best reception they had ever been to. I believe a lot had to do with the environment of the venue. It was the best day of our lives! We are proud to join the thousands of couples who have solidified the union of hearts at the wonderful Princess Green!', '15135741701513365333home2.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
