-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2013 at 05:41 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_telic_apps`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_me`
--

CREATE TABLE IF NOT EXISTS `tbl_about_me` (
  `about_me_id` int(2) NOT NULL AUTO_INCREMENT,
  `about_me_title` varchar(32) NOT NULL,
  `about_me_description` text NOT NULL,
  `about_me_image` varchar(256) NOT NULL,
  PRIMARY KEY (`about_me_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_about_me`
--

INSERT INTO `tbl_about_me` (`about_me_id`, `about_me_title`, `about_me_description`, `about_me_image`) VALUES
(1, 'About Me', '<p>\r\n I am seeking a career to lead me towards management in a software engineering or web development environment that will continually challenge my problem solving and analytical skills across a broad spectrum of technologies.</p>\r\n<p>\r\nSelim Reza\r\nPPC Expert And Web Developer\r\n</p>\r\n', 'images/about_me/selim.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `activation_status` int(1) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`, `name`, `activation_status`) VALUES
(1, 'admin', 'admin', 'Selim Reza', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(3) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(256) NOT NULL,
  `category_description` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'Home', '<p>\r\n All home contents here ............</p>\r\n'),
(2, 'About Us', '<p>\r\n about us contents</p>\r\n'),
(3, 'Services', '<p>\r\n Services contents here</p>\r\n'),
(4, 'Gallery ', '<p>\r\n Gallery Contents Here</p>\r\n'),
(5, 'Contact', '<p>\r\n contact information here</p>\r\n'),
(6, 'Sidebar', '<p>\r\n sidebar content will be here</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(5) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(64) NOT NULL,
  `contact_phone` varchar(25) NOT NULL,
  `contact_email` varchar(256) NOT NULL,
  `contact_country` varchar(25) NOT NULL,
  `contact_message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_name`, `contact_phone`, `contact_email`, `contact_country`, `contact_message`) VALUES
(14, 'Sunny', '019999', 'sunny@gmail.com', 'Bangladesh', 'sds');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE IF NOT EXISTS `tbl_content` (
  `content_id` int(3) NOT NULL AUTO_INCREMENT,
  `category_id` int(3) NOT NULL,
  `content_title` varchar(256) NOT NULL,
  `content_description` text NOT NULL,
  `content_image` varchar(256) NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`content_id`, `category_id`, `content_title`, `content_description`, `content_image`) VALUES
(16, 1, 'Welcome to Visit our Site', '<p>\r\n We are Specialized on custom web application for small and medium sized company. We design your apps in some MVC pattern which are easy to handle. You can maintain your apps by own.For more info please contact us.</p>\r\n', 'images/content_images/03.jpg'),
(17, 1, 'Get Apps for your business', '<p>\r\n Specialized on custom web application for small and medium sized company. We design your apps in some MVC pattern which are easy to handle. You can maintain your apps by own.For more info please contact us.</p>\r\n', 'images/content_images/01.jpg'),
(18, 1, 'Save your time and money', '<p>\r\n Specialized on custom web application for small and medium sized company. We design your apps in some MVC pattern which are easy to handle. You can maintain your apps by own.For more info please contact us.</p>\r\n', 'images/content_images/04.jpg'),
(19, 1, 'Get your business with us', '<p>\r\n Specialized on custom web application for small and medium sized company. We design your apps in some MVC pattern which are easy to handle. You can maintain your apps by own.For more info please contact us.</p>\r\n', 'images/content_images/07.jpg'),
(20, 2, 'About Us', '<p>\n Provides success metrics, success analytics and success planning to the American Small Business. With years of experience, founded in 2002, and recognized internationally as an INC Magazine Fastest 500 Company in 2007 and 2008, featured in the San Diego Business Journal Top 100 companies (twice), featured in the Wall Street Journal and having held partnerships over the last decade with such strategic small business advertising companies as Google, Yahoo, MSN, ATT, Verizon and many more, Superior is your natural choice for success.</p>\n<p>\n Superior Internet Solutions&rsquo; entire persona is specifically designed to grow your business. Our philosophy is to get behind you, your strengths, your weaknesses, your goals and drive you to your highest level of success. We want to assist you in achieving your goals with effective marketing solutions, forcing you to succeed. We will push your thinking to new levels, create new ideas, think out of the box and work your plan &ndash; getting you results is what motivates everyone at Superior Internet Solutions.</p>\n', 'images/content_images/05.jpg'),
(21, 3, 'Our Services', '<p>\r\n Specialized on custom web application for small and medium sized company. We design your apps in some MVC pattern which are easy to handle. You can maintain your apps by own.For more info please contact us.</p>\r\n', 'images/content_images/06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `gallery_id` int(3) NOT NULL AUTO_INCREMENT,
  `gallery_name` varchar(256) NOT NULL,
  `gallery_image` varchar(256) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_name`, `gallery_image`) VALUES
(1, 'Gallery Image 01', 'images/gallery/01.jpg'),
(2, 'Gallery Image 02', 'images/gallery/02.jpg'),
(3, 'Gallery Image 03', 'images/gallery/03.jpg'),
(4, 'Gallery Image 04', 'images/gallery/04.jpg'),
(5, 'Gallery Image 05', 'images/gallery/05.jpg'),
(6, 'Gallery Image 06', 'images/gallery/06.jpg'),
(7, 'Gallery Image 07', 'images/gallery/07.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE IF NOT EXISTS `tbl_logo` (
  `logo_id` int(2) NOT NULL AUTO_INCREMENT,
  `logo_name` varchar(32) NOT NULL,
  `logo_image` varchar(256) NOT NULL,
  PRIMARY KEY (`logo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`logo_id`, `logo_name`, `logo_image`) VALUES
(1, 'Telic Apps', 'images/logo.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
