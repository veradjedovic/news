-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2015 at 07:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Structure for view `view_articles`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_articles` AS select `articles`.`article_id` AS `article_id`,`articles`.`article_title` AS `article_title`,`articles`.`article_subtitle` AS `article_subtitle`,`main_cats`.`main_cat_name` AS `main_cat_name`,`cats`.`cat_name` AS `cat_name`,`sub_cats`.`sub_cat_name` AS `sub_cat_name`,`articles`.`article_creator` AS `article_creator`,`articles`.`article_time` AS `article_time`,`articles`.`article_picture_small` AS `article_picture_small`,`articles`.`article_picture` AS `article_picture`,`articles`.`article_intro_text` AS `article_intro_text`,`articles`.`article_text` AS `article_text`,`articles`.`article_nr_views` AS `article_nr_views`,`articles`.`article_slider_status` AS `article_slider_status`,`articles`.`article_index_status` AS `article_index_status`,`articles`.`article_category_page_status` AS `article_category_page_status`,`articles`.`article_status` AS `article_status` from (((`articles` left join `main_cats` on((`articles`.`article_main_cat` = `main_cats`.`main_cat_id`))) left join `cats` on((`articles`.`article_cat` = `cats`.`cat_id`))) left join `sub_cats` on((`articles`.`article_sub_cat` = `sub_cats`.`sub_cat_id`)));

--
-- VIEW  `view_articles`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
