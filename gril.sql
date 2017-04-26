-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 04:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gril`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `usr_id` int(4) NOT NULL,
  `usr_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `usr_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `usr_pwd` varchar(32) COLLATE utf8_bin NOT NULL,
  `usr_role_id` int(4) NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT '1',
  `created_dtm` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login_dtm` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_logout_dtm` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Admin user details';

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`usr_id`, `usr_name`, `usr_email`, `usr_pwd`, `usr_role_id`, `active`, `created_dtm`, `updated_dtm`, `last_login_dtm`, `last_logout_dtm`) VALUES
(1, 'admin', 'admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 1, '0000-00-00 00:00:00', '2017-04-01 12:50:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `common_seller_buss_model`
--

CREATE TABLE `common_seller_buss_model` (
  `id` bigint(11) NOT NULL,
  `comm_seller_user_id` bigint(11) NOT NULL,
  `bm_id` bigint(11) NOT NULL,
  `bm_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `common_seller_buss_model`
--

INSERT INTO `common_seller_buss_model` (`id`, `comm_seller_user_id`, `bm_id`, `bm_name`) VALUES
(1, 1, 1, 'Retailer'),
(2, 1, 1, 'Retailer'),
(3, 1, 1, 'Retailer'),
(4, 1, 1, 'Retailer'),
(5, 1, 1, 'Retailer'),
(6, 6, 1, 'Retailer'),
(7, 6, 3, 'Manufacture'),
(8, 6, 4, 'service provider'),
(9, 6, 5, 'Hire/Rental'),
(10, 6, 6, 'Exporter'),
(11, 6, 8, 'Importer'),
(12, 7, 1, 'Retailer'),
(13, 7, 3, 'Manufacture'),
(14, 7, 4, 'Service Provider'),
(15, 7, 5, 'Hire/Rental'),
(16, 8, 1, 'Retailer'),
(17, 8, 4, 'Service Provider'),
(18, 8, 6, 'Exporter'),
(19, 8, 8, 'Importer'),
(20, 9, 2, 'Wholeseller'),
(21, 9, 4, 'Service Provider'),
(22, 9, 1, 'Retailer'),
(23, 10, 1, 'Retailer'),
(24, 10, 3, 'Manufacture'),
(25, 10, 4, 'Service Provider'),
(26, 10, 2, 'Wholeseller'),
(33, 9, 5, 'Hire/Rental'),
(34, 9, 3, 'Manufacture'),
(35, 11, 2, 'Wholeseller'),
(36, 12, 2, 'Wholeseller'),
(37, 13, 2, 'Wholeseller'),
(38, 14, 2, 'Wholeseller'),
(39, 14, 8, 'Importer'),
(40, 14, 1, 'Retailer');

-- --------------------------------------------------------

--
-- Table structure for table `common_seller_details`
--

CREATE TABLE `common_seller_details` (
  `id` bigint(20) NOT NULL,
  `personal_name` varchar(128) NOT NULL,
  `personal_mobile_num` varchar(16) NOT NULL,
  `personal_mail_id` varchar(128) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `dumy` varchar(32) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `created_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NULL DEFAULT NULL,
  `last_login_dtm` timestamp NULL DEFAULT NULL,
  `last_logout_dtm` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `common_seller_details`
--

INSERT INTO `common_seller_details` (`id`, `personal_name`, `personal_mobile_num`, `personal_mail_id`, `password`, `dumy`, `active`, `created_dtm`, `updated_dtm`, `last_login_dtm`, `last_logout_dtm`) VALUES
(14, 'Surya', '6789987673', 'ganesh_be09@yahoo.co.in', 'e10adc3949ba59abbe56e057f20f883e', '123456', 1, '2017-04-17 17:49:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dummy_user_profile`
--

CREATE TABLE `dummy_user_profile` (
  `id` bigint(11) NOT NULL,
  `comm_seller_user_id` bigint(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `description` text,
  `clasification` tinytext,
  `title` varchar(256) DEFAULT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `landline` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `website` tinytext,
  `logo` tinytext,
  `number_or_name` varchar(256) DEFAULT NULL,
  `address_1` varchar(256) DEFAULT NULL,
  `address_2` varchar(256) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `county` varchar(64) DEFAULT NULL,
  `postal_code` varchar(12) DEFAULT NULL,
  `latitude` varchar(64) DEFAULT NULL,
  `longitude` varchar(64) DEFAULT NULL,
  `goog_map_city` varchar(128) DEFAULT NULL,
  `goog_map_region` varchar(128) DEFAULT NULL,
  `goog_map_street` varchar(256) DEFAULT NULL,
  `goog_map_district` varchar(128) DEFAULT NULL,
  `goog_map_country` varchar(128) DEFAULT NULL,
  `goog_map_postalcode` varchar(12) DEFAULT NULL,
  `goog_map_city_short` varchar(128) DEFAULT NULL,
  `goog_map_region_short` varchar(128) DEFAULT NULL,
  `goog_map_street_short` varchar(256) DEFAULT NULL,
  `goog_map_district_short` varchar(128) DEFAULT NULL,
  `goog_map_country_short` varchar(128) DEFAULT NULL,
  `goog_map_postalcode_short` varchar(12) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `created_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy_user_profile`
--

INSERT INTO `dummy_user_profile` (`id`, `comm_seller_user_id`, `name`, `description`, `clasification`, `title`, `mobile`, `landline`, `email`, `website`, `logo`, `number_or_name`, `address_1`, `address_2`, `city`, `county`, `postal_code`, `latitude`, `longitude`, `goog_map_city`, `goog_map_region`, `goog_map_street`, `goog_map_district`, `goog_map_country`, `goog_map_postalcode`, `goog_map_city_short`, `goog_map_region_short`, `goog_map_street_short`, `goog_map_district_short`, `goog_map_country_short`, `goog_map_postalcode_short`, `active`, `created_dtm`, `updated_dtm`) VALUES
(9, 14, 'dsadas', 'dasdasdas', 'dsadas', 'dsadasdas', '6789987673', NULL, 'surya2@gmail.com', NULL, NULL, 'dsadasd', 'asdasdasd', NULL, 'Venezia', 'Banchina Dei Molini', 'dasdasdsa', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-17 17:49:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exporter_user_profile`
--

CREATE TABLE `exporter_user_profile` (
  `id` bigint(11) NOT NULL,
  `comm_seller_user_id` bigint(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `clasification` tinytext NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `mobile` varchar(16) NOT NULL,
  `landline` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `website` tinytext,
  `logo` tinytext,
  `number_or_name` varchar(256) DEFAULT NULL,
  `address_1` varchar(256) DEFAULT NULL,
  `address_2` varchar(256) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `county` varchar(64) DEFAULT NULL,
  `postal_code` varchar(12) DEFAULT NULL,
  `latitude` varchar(64) DEFAULT NULL,
  `longitude` varchar(64) DEFAULT NULL,
  `goog_map_city` varchar(128) DEFAULT NULL,
  `goog_map_region` varchar(128) DEFAULT NULL,
  `goog_map_street` varchar(256) DEFAULT NULL,
  `goog_map_district` varchar(128) DEFAULT NULL,
  `goog_map_country` varchar(128) DEFAULT NULL,
  `goog_map_postalcode` varchar(12) DEFAULT NULL,
  `goog_map_city_short` varchar(128) DEFAULT NULL,
  `goog_map_region_short` varchar(128) DEFAULT NULL,
  `goog_map_street_short` varchar(256) DEFAULT NULL,
  `goog_map_district_short` varchar(128) DEFAULT NULL,
  `goog_map_country_short` varchar(128) DEFAULT NULL,
  `goog_map_postalcode_short` varchar(12) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `created_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exporter_user_profile`
--

INSERT INTO `exporter_user_profile` (`id`, `comm_seller_user_id`, `name`, `description`, `clasification`, `title`, `mobile`, `landline`, `email`, `website`, `logo`, `number_or_name`, `address_1`, `address_2`, `city`, `county`, `postal_code`, `latitude`, `longitude`, `goog_map_city`, `goog_map_region`, `goog_map_street`, `goog_map_district`, `goog_map_country`, `goog_map_postalcode`, `goog_map_city_short`, `goog_map_region_short`, `goog_map_street_short`, `goog_map_district_short`, `goog_map_country_short`, `goog_map_postalcode_short`, `active`, `created_dtm`, `updated_dtm`) VALUES
(1, 6, 'Printer', 'Ramu Printer, xerox', 'printer, xerox', 'Ramu Printer', '1234554321', NULL, 'ramu@gmail.com', '', NULL, '35, Anna Salai', 'Kumaran street', '', 'Chennai', NULL, '600041', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-14 07:21:53', NULL),
(2, 8, 'Car Servicing', 'dasdasdasdsadasdas', 'dsadas,dsadasdas', 'sdadasdasd', '9998978789', NULL, 'padeep@gmail.com', NULL, NULL, '44a', 'kalima nagar rd', NULL, 'Cuddalore', NULL, '608502', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-15 11:06:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grl_admin_roles`
--

CREATE TABLE `grl_admin_roles` (
  `role_id` int(4) NOT NULL,
  `role_name` int(11) NOT NULL,
  `created_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `grl_user_buss_clas_dtl`
--

CREATE TABLE `grl_user_buss_clas_dtl` (
  `id` bigint(11) NOT NULL,
  `usr_id` bigint(11) NOT NULL,
  `bs_id` int(6) NOT NULL,
  `job_type_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `grl_user_buss_dtl`
--

CREATE TABLE `grl_user_buss_dtl` (
  `id` bigint(11) NOT NULL,
  `usr_id` bigint(11) NOT NULL,
  `mob_no1` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `mob_no2` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `mob_no3` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `mob_no4` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `land_line_num1` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `land_line_num2` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `land_line_num3` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `email1` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `email2` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `email3` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `address_no` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `addr1` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `addr2` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `state_id` int(6) DEFAULT NULL,
  `cntry_id` int(4) DEFAULT NULL,
  `city` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `post_code` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `usr_desc` tinytext COLLATE utf8_bin,
  `latitude` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `lognitude` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `cover_area_miles` int(4) DEFAULT NULL,
  `city_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `grl_user_dtl`
--

CREATE TABLE `grl_user_dtl` (
  `usr_id` bigint(11) NOT NULL,
  `cmp_name` varchar(128) COLLATE utf8_bin NOT NULL,
  `preson_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `mob_no` varchar(16) COLLATE utf8_bin NOT NULL,
  `usr_email` varchar(64) COLLATE utf8_bin NOT NULL,
  `usr_pwd` varchar(32) COLLATE utf8_bin NOT NULL,
  `cmp_logo` tinytext COLLATE utf8_bin NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT '1',
  `created_dtm` timestamp NULL DEFAULT NULL,
  `updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active_dtm` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `grl_user_focus_area_dtl`
--

CREATE TABLE `grl_user_focus_area_dtl` (
  `id` bigint(11) NOT NULL,
  `usr_id` bigint(11) NOT NULL,
  `area_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `importer_user_profile`
--

CREATE TABLE `importer_user_profile` (
  `id` bigint(11) NOT NULL,
  `comm_seller_user_id` bigint(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `clasification` tinytext NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `mobile` varchar(16) NOT NULL,
  `landline` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `website` tinytext,
  `logo` tinytext,
  `number_or_name` varchar(256) DEFAULT NULL,
  `address_1` varchar(256) DEFAULT NULL,
  `address_2` varchar(256) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `county` varchar(64) DEFAULT NULL,
  `postal_code` varchar(12) DEFAULT NULL,
  `latitude` varchar(64) DEFAULT NULL,
  `longitude` varchar(64) DEFAULT NULL,
  `goog_map_city` varchar(128) DEFAULT NULL,
  `goog_map_region` varchar(128) DEFAULT NULL,
  `goog_map_street` varchar(256) DEFAULT NULL,
  `goog_map_district` varchar(128) DEFAULT NULL,
  `goog_map_country` varchar(128) DEFAULT NULL,
  `goog_map_postalcode` varchar(12) DEFAULT NULL,
  `goog_map_city_short` varchar(128) DEFAULT NULL,
  `goog_map_region_short` varchar(128) DEFAULT NULL,
  `goog_map_street_short` varchar(256) DEFAULT NULL,
  `goog_map_district_short` varchar(128) DEFAULT NULL,
  `goog_map_country_short` varchar(128) DEFAULT NULL,
  `goog_map_postalcode_short` varchar(12) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `created_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `importer_user_profile`
--

INSERT INTO `importer_user_profile` (`id`, `comm_seller_user_id`, `name`, `description`, `clasification`, `title`, `mobile`, `landline`, `email`, `website`, `logo`, `number_or_name`, `address_1`, `address_2`, `city`, `county`, `postal_code`, `latitude`, `longitude`, `goog_map_city`, `goog_map_region`, `goog_map_street`, `goog_map_district`, `goog_map_country`, `goog_map_postalcode`, `goog_map_city_short`, `goog_map_region_short`, `goog_map_street_short`, `goog_map_district_short`, `goog_map_country_short`, `goog_map_postalcode_short`, `active`, `created_dtm`, `updated_dtm`) VALUES
(1, 6, 'Printer', 'Ramu Printer, xerox', 'printer, xerox', 'Ramu Printer', '1234554321', NULL, 'ramu@gmail.com', '', NULL, '35, Anna Salai', 'Kumaran street', '', 'Chennai', NULL, '600041', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-14 07:21:53', NULL),
(2, 8, 'Car Servicing', 'dasdasdasdsadasdas', 'dsadas,dsadasdas', 'sdadasdasd', '9998978789', NULL, 'padeep@gmail.com', NULL, NULL, '44a', 'kalima nagar rd', NULL, 'Cuddalore', NULL, '608502', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-15 11:07:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacture_user_profile`
--

CREATE TABLE `manufacture_user_profile` (
  `id` bigint(11) NOT NULL,
  `comm_seller_user_id` bigint(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `clasification` tinytext NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `mobile` varchar(16) NOT NULL,
  `landline` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `website` tinytext,
  `logo` tinytext,
  `number_or_name` varchar(256) DEFAULT NULL,
  `address_1` varchar(256) DEFAULT NULL,
  `address_2` varchar(256) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `postal_code` varchar(12) DEFAULT NULL,
  `latitude` varchar(64) DEFAULT NULL,
  `longitude` varchar(64) DEFAULT NULL,
  `goog_map_city` varchar(128) DEFAULT NULL,
  `goog_map_region` varchar(128) DEFAULT NULL,
  `goog_map_street` varchar(256) DEFAULT NULL,
  `goog_map_district` varchar(128) DEFAULT NULL,
  `goog_map_country` varchar(128) DEFAULT NULL,
  `goog_map_postalcode` varchar(12) DEFAULT NULL,
  `goog_map_city_short` varchar(128) DEFAULT NULL,
  `goog_map_region_short` varchar(128) DEFAULT NULL,
  `goog_map_street_short` varchar(256) DEFAULT NULL,
  `goog_map_district_short` varchar(128) DEFAULT NULL,
  `goog_map_country_short` varchar(128) DEFAULT NULL,
  `goog_map_postalcode_short` varchar(12) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `created_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacture_user_profile`
--

INSERT INTO `manufacture_user_profile` (`id`, `comm_seller_user_id`, `name`, `description`, `clasification`, `title`, `mobile`, `landline`, `email`, `website`, `logo`, `number_or_name`, `address_1`, `address_2`, `city`, `country`, `postal_code`, `latitude`, `longitude`, `goog_map_city`, `goog_map_region`, `goog_map_street`, `goog_map_district`, `goog_map_country`, `goog_map_postalcode`, `goog_map_city_short`, `goog_map_region_short`, `goog_map_street_short`, `goog_map_district_short`, `goog_map_country_short`, `goog_map_postalcode_short`, `active`, `created_dtm`, `updated_dtm`) VALUES
(1, 6, 'Printer', 'Ramu Printer, xerox', 'printer, xerox', 'Ramu Printer', '1234554321', NULL, 'ramu@gmail.com', '', NULL, '35, Anna Salai', 'Kumaran street', '', 'Chennai', NULL, '600041', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-14 07:21:53', NULL),
(2, 7, 'dasdasd', 'fsdfsdfsd', 'fsdfdsfsd', 'fdsfsdfsd', '3452345678', NULL, 'laxmi@gmail.com', '', NULL, 'x41', 'Shivanandha Building, 2nd avanue', '', 'Chennai', NULL, '600040', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-14 13:41:20', NULL),
(3, 10, 'sadasdas', 'dasdasdsadsa', 'dasdasdasdsa', 'dsadasdas', '1222121211', NULL, NULL, NULL, NULL, '44 kuttya chetty street', 'parangi pettai', NULL, 'Chennai', NULL, '600040', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-15 15:29:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mstr_business_model`
--

CREATE TABLE `mstr_business_model` (
  `id` bigint(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `tbl_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `short_name` varchar(128) COLLATE utf8_bin NOT NULL,
  `icon` varchar(128) COLLATE utf8_bin NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT '1',
  `seo_title` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_url` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_desc` text COLLATE utf8_bin,
  `seo_keywords` tinytext COLLATE utf8_bin,
  `seo_tags` tinytext COLLATE utf8_bin,
  `created_by` int(4) NOT NULL DEFAULT '0',
  `updated_by` int(4) NOT NULL DEFAULT '0',
  `creaed_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mstr_business_model`
--

INSERT INTO `mstr_business_model` (`id`, `name`, `tbl_name`, `short_name`, `icon`, `active`, `seo_title`, `seo_url`, `seo_desc`, `seo_keywords`, `seo_tags`, `created_by`, `updated_by`, `creaed_dtm`, `updated_dtm`) VALUES
(1, 'Retailer', 'ret_user_profile', 'Retailer', 'icon-tag', 1, 'Service Title2', 'Service URL2', 'Service Desc1', 'Service Key1', 'Service Tag1', 0, 0, '2017-03-31 14:41:08', '2017-03-31 14:40:32'),
(2, 'Wholeseller', 'whole_user_profile', 'Wholeseller', 'icon-tag', 1, '', '', '', '', '', 0, 0, '2017-03-31 14:47:55', '2017-03-31 14:47:55'),
(3, 'Manufacture', 'manufacture_user_profile', 'Manufacture', 'icon-tag', 1, NULL, NULL, NULL, NULL, NULL, 0, 0, '2017-04-14 06:35:05', '2017-04-14 06:35:05'),
(4, 'Service Provider', 'sp_user_profile', 'service', 'icon-tag', 1, NULL, NULL, NULL, NULL, NULL, 0, 0, '2017-04-14 06:35:05', '2017-04-14 06:35:05'),
(5, 'Hire/Rental', 'rental_user_profile', 'Rental', 'icon-tag', 1, NULL, NULL, NULL, NULL, NULL, 0, 0, '2017-04-14 06:36:13', '2017-04-14 06:36:13'),
(6, 'Exporter', 'exporter_user_profile', 'Exporter', 'icon-tag', 1, NULL, NULL, NULL, NULL, NULL, 0, 0, '2017-04-14 06:36:13', '2017-04-14 06:36:13'),
(8, 'Importer', 'importer_user_profile', 'Importer', 'icon-tag', 1, '', '', '', '', '', 0, 0, '2017-04-14 06:47:32', '2017-04-14 06:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_buss_category`
--

CREATE TABLE `mstr_buss_category` (
  `id` bigint(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT '1',
  `seo_title` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_url` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_desc` text COLLATE utf8_bin,
  `seo_keywords` tinytext COLLATE utf8_bin,
  `seo_tags` tinytext COLLATE utf8_bin,
  `created_by` int(4) NOT NULL DEFAULT '0',
  `updated_by` int(4) NOT NULL DEFAULT '0',
  `creaed_dtm` timestamp NULL DEFAULT NULL,
  `updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mstr_buss_category`
--

INSERT INTO `mstr_buss_category` (`id`, `name`, `active`, `seo_title`, `seo_url`, `seo_desc`, `seo_keywords`, `seo_tags`, `created_by`, `updated_by`, `creaed_dtm`, `updated_dtm`) VALUES
(1, 'Agriculture', 1, 'dfasdas', 'dasd3', '466789898', '312312', '65456', 0, 0, NULL, '2017-03-31 15:00:36'),
(2, 'Agriculture1', 0, '', '', '', '', '', 0, 0, NULL, '2017-03-31 15:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_buss_type`
--

CREATE TABLE `mstr_buss_type` (
  `id` bigint(11) NOT NULL,
  `buss_cat_id` bigint(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT '1',
  `seo_title` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_url` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_desc` text COLLATE utf8_bin,
  `seo_keywords` tinytext COLLATE utf8_bin,
  `seo_tags` tinytext COLLATE utf8_bin,
  `created_by` int(4) NOT NULL DEFAULT '0',
  `updated_by` int(4) NOT NULL DEFAULT '0',
  `creaed_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mstr_buss_type`
--

INSERT INTO `mstr_buss_type` (`id`, `buss_cat_id`, `name`, `active`, `seo_title`, `seo_url`, `seo_desc`, `seo_keywords`, `seo_tags`, `created_by`, `updated_by`, `creaed_dtm`, `updated_dtm`) VALUES
(1, 1, 'Land', 1, 'fdsaf', 'dfreew', '2131212', 'e3232', '1111', 0, 0, '2017-03-31 16:52:30', '2017-03-31 16:52:30'),
(2, 1, 'land3', 1, '', '', '4324234', '243234', '', 0, 0, '2017-03-31 16:53:25', '2017-03-31 16:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_country`
--

CREATE TABLE `mstr_country` (
  `id` bigint(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT '1',
  `seo_title` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_url` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_desc` text COLLATE utf8_bin,
  `seo_keywords` tinytext COLLATE utf8_bin,
  `seo_tags` tinytext COLLATE utf8_bin,
  `created_by` int(4) NOT NULL DEFAULT '0',
  `updated_by` int(4) NOT NULL DEFAULT '0',
  `creaed_dtm` timestamp NULL DEFAULT NULL,
  `updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mstr_country`
--

INSERT INTO `mstr_country` (`id`, `name`, `active`, `seo_title`, `seo_url`, `seo_desc`, `seo_keywords`, `seo_tags`, `created_by`, `updated_by`, `creaed_dtm`, `updated_dtm`) VALUES
(1, 'India', 1, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, '2017-03-04 13:17:02'),
(18, 'USA', 0, '0', '0', '0', '0', '0', 0, 0, NULL, '2017-03-30 17:54:30'),
(19, 'dasdas', 1, 'dasd title', 'dsdsa URL', 'desc 12323', 'dasdas, dasdas key word', 'dasd, upoooo tag', 0, 0, NULL, '2017-03-30 18:01:50'),
(20, 'Japan', 1, '', '', '', '', '', 0, 0, NULL, '2017-04-07 01:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_county`
--

CREATE TABLE `mstr_county` (
  `id` bigint(11) NOT NULL,
  `country_id` bigint(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT '1',
  `seo_title` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_url` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_desc` text COLLATE utf8_bin,
  `seo_keywords` tinytext COLLATE utf8_bin,
  `seo_tags` tinytext COLLATE utf8_bin,
  `created_by` int(4) NOT NULL DEFAULT '0',
  `updated_by` int(4) NOT NULL DEFAULT '0',
  `creaed_dtm` timestamp NULL DEFAULT NULL,
  `updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mstr_county`
--

INSERT INTO `mstr_county` (`id`, `country_id`, `name`, `active`, `seo_title`, `seo_url`, `seo_desc`, `seo_keywords`, `seo_tags`, `created_by`, `updated_by`, `creaed_dtm`, `updated_dtm`) VALUES
(1, 1, 'tamil nadu', 1, 'ddsa3', '22323', '545555', '3333', '4444', 0, 0, NULL, '2017-04-07 01:17:13'),
(3, 1, 'korea', 1, '0', '0', '0', '0', '0', 0, 0, NULL, '2017-04-07 01:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_postal_code`
--

CREATE TABLE `mstr_postal_code` (
  `id` bigint(11) NOT NULL,
  `country_id` bigint(11) NOT NULL,
  `county_id` bigint(11) NOT NULL,
  `city_name` varchar(128) COLLATE utf8_bin NOT NULL,
  `postal_code` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `postal_area` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `active` smallint(1) NOT NULL DEFAULT '1',
  `seo_title` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_url` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_desc` text COLLATE utf8_bin,
  `seo_keywords` tinytext COLLATE utf8_bin,
  `seo_tags` tinytext COLLATE utf8_bin,
  `created_by` int(4) NOT NULL DEFAULT '0',
  `updated_by` int(4) NOT NULL DEFAULT '0',
  `creaed_dtm` timestamp NULL DEFAULT NULL,
  `updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mstr_postal_code`
--

INSERT INTO `mstr_postal_code` (`id`, `country_id`, `county_id`, `city_name`, `postal_code`, `postal_area`, `active`, `seo_title`, `seo_url`, `seo_desc`, `seo_keywords`, `seo_tags`, `created_by`, `updated_by`, `creaed_dtm`, `updated_dtm`) VALUES
(1, 1, 1, 'Chennai', '600040', 'Anna Nagar', 1, '111', '222', '555', '333', '444', 0, 0, NULL, '2017-04-07 01:53:04'),
(2, 1, 3, 'dsadasd', 'asdas', 'dasdas', 0, '', '', '', '', '', 0, 0, NULL, '2017-04-07 01:53:28'),
(3, 1, 3, 'asdas', 'asdas1', 'asdas', 1, '', '', '', '', '', 0, 0, NULL, '2017-04-07 01:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_prod_model`
--

CREATE TABLE `mstr_prod_model` (
  `id` bigint(11) NOT NULL,
  `buss_cat_id` bigint(11) NOT NULL,
  `buss_cat_name` varchar(128) COLLATE utf8_bin NOT NULL,
  `buss_type_id` bigint(11) NOT NULL,
  `buss_type_name` varchar(128) COLLATE utf8_bin NOT NULL,
  `prod_type_id` bigint(11) NOT NULL,
  `prod_type_name` varchar(128) COLLATE utf8_bin NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT '1',
  `seo_title` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_url` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_desc` text COLLATE utf8_bin,
  `seo_keywords` tinytext COLLATE utf8_bin,
  `seo_tags` tinytext COLLATE utf8_bin,
  `created_by` int(4) NOT NULL DEFAULT '0',
  `updated_by` int(4) NOT NULL DEFAULT '0',
  `creaed_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mstr_prod_model`
--

INSERT INTO `mstr_prod_model` (`id`, `buss_cat_id`, `buss_cat_name`, `buss_type_id`, `buss_type_name`, `prod_type_id`, `prod_type_name`, `name`, `active`, `seo_title`, `seo_url`, `seo_desc`, `seo_keywords`, `seo_tags`, `created_by`, `updated_by`, `creaed_dtm`, `updated_dtm`) VALUES
(1, 1, 'Agriculture', 1, 'Land', 1, 'fsd', 'dsdas', 0, '12121', '3333', '6666', '4444', '555', 0, 0, '2017-04-01 07:25:43', '2017-04-01 07:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_prod_type`
--

CREATE TABLE `mstr_prod_type` (
  `id` bigint(11) NOT NULL,
  `buss_cat_id` bigint(11) NOT NULL,
  `buss_type_id` bigint(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT '1',
  `seo_title` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_url` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `seo_desc` text COLLATE utf8_bin,
  `seo_keywords` tinytext COLLATE utf8_bin,
  `seo_tags` tinytext COLLATE utf8_bin,
  `created_by` int(4) NOT NULL DEFAULT '0',
  `updated_by` int(4) NOT NULL DEFAULT '0',
  `creaed_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mstr_prod_type`
--

INSERT INTO `mstr_prod_type` (`id`, `buss_cat_id`, `buss_type_id`, `name`, `active`, `seo_title`, `seo_url`, `seo_desc`, `seo_keywords`, `seo_tags`, `created_by`, `updated_by`, `creaed_dtm`, `updated_dtm`) VALUES
(1, 1, 1, 'fsd', 1, '11111111111', '22222222222', '33123', '3333333', '44444', 0, 0, '2017-04-01 06:21:30', '2017-04-01 06:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `rental_user_profile`
--

CREATE TABLE `rental_user_profile` (
  `id` bigint(11) NOT NULL,
  `comm_seller_user_id` bigint(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `clasification` tinytext NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `mobile` varchar(16) NOT NULL,
  `landline` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `website` tinytext,
  `logo` tinytext,
  `number_or_name` varchar(256) DEFAULT NULL,
  `address_1` varchar(256) DEFAULT NULL,
  `address_2` varchar(256) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `county` varchar(64) DEFAULT NULL,
  `postal_code` varchar(12) DEFAULT NULL,
  `latitude` varchar(64) DEFAULT NULL,
  `longitude` varchar(64) DEFAULT NULL,
  `goog_map_city` varchar(128) DEFAULT NULL,
  `goog_map_region` varchar(128) DEFAULT NULL,
  `goog_map_street` varchar(256) DEFAULT NULL,
  `goog_map_district` varchar(128) DEFAULT NULL,
  `goog_map_country` varchar(128) DEFAULT NULL,
  `goog_map_postalcode` varchar(12) DEFAULT NULL,
  `goog_map_city_short` varchar(128) DEFAULT NULL,
  `goog_map_region_short` varchar(128) DEFAULT NULL,
  `goog_map_street_short` varchar(256) DEFAULT NULL,
  `goog_map_district_short` varchar(128) DEFAULT NULL,
  `goog_map_country_short` varchar(128) DEFAULT NULL,
  `goog_map_postalcode_short` varchar(12) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `created_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_user_profile`
--

INSERT INTO `rental_user_profile` (`id`, `comm_seller_user_id`, `name`, `description`, `clasification`, `title`, `mobile`, `landline`, `email`, `website`, `logo`, `number_or_name`, `address_1`, `address_2`, `city`, `county`, `postal_code`, `latitude`, `longitude`, `goog_map_city`, `goog_map_region`, `goog_map_street`, `goog_map_district`, `goog_map_country`, `goog_map_postalcode`, `goog_map_city_short`, `goog_map_region_short`, `goog_map_street_short`, `goog_map_district_short`, `goog_map_country_short`, `goog_map_postalcode_short`, `active`, `created_dtm`, `updated_dtm`) VALUES
(1, 6, 'Printer', 'Ramu Printer, xerox', 'printer, xerox', 'Ramu Printer', '1234554321', NULL, 'ramu@gmail.com', '', NULL, '35, Anna Salai', 'Kumaran street', '', 'Chennai', NULL, '600041', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-14 07:21:53', NULL),
(2, 7, 'dasdasd', 'fsdfsdfsd', 'fsdfdsfsd', 'fdsfsdfsd', '3452345678', NULL, 'laxmi@gmail.com', '', NULL, 'x41', 'Shivanandha Building, 2nd avanue', '', 'Chennai', NULL, '600040', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-14 13:41:20', NULL),
(3, 14, 'dsadas', 'dasdasdas', 'dsadas', 'dsadasdas', '6789987673', NULL, 'surya2@gmail.com', NULL, NULL, 'dsadasd', 'asdasdasd', NULL, 'Venezia', 'Banchina Dei Molini', 'dasdasdsa', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-17 17:49:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ret_user_profile`
--

CREATE TABLE `ret_user_profile` (
  `id` bigint(11) NOT NULL,
  `comm_seller_user_id` bigint(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `description` text,
  `clasification` tinytext,
  `title` varchar(256) DEFAULT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `landline` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `website` tinytext,
  `logo` tinytext,
  `number_or_name` varchar(256) DEFAULT NULL,
  `address_1` varchar(256) DEFAULT NULL,
  `address_2` varchar(256) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `county` varchar(64) DEFAULT NULL,
  `postal_code` varchar(12) DEFAULT NULL,
  `latitude` varchar(64) DEFAULT NULL,
  `longitude` varchar(64) DEFAULT NULL,
  `goog_map_city` varchar(128) DEFAULT NULL,
  `goog_map_region` varchar(128) DEFAULT NULL,
  `goog_map_street` varchar(256) DEFAULT NULL,
  `goog_map_district` varchar(128) DEFAULT NULL,
  `goog_map_country` varchar(128) DEFAULT NULL,
  `goog_map_postalcode` varchar(12) DEFAULT NULL,
  `goog_map_city_short` varchar(128) DEFAULT NULL,
  `goog_map_region_short` varchar(128) DEFAULT NULL,
  `goog_map_street_short` varchar(256) DEFAULT NULL,
  `goog_map_district_short` varchar(128) DEFAULT NULL,
  `goog_map_country_short` varchar(128) DEFAULT NULL,
  `goog_map_postalcode_short` varchar(12) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `created_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ret_user_profile`
--

INSERT INTO `ret_user_profile` (`id`, `comm_seller_user_id`, `name`, `description`, `clasification`, `title`, `mobile`, `landline`, `email`, `website`, `logo`, `number_or_name`, `address_1`, `address_2`, `city`, `county`, `postal_code`, `latitude`, `longitude`, `goog_map_city`, `goog_map_region`, `goog_map_street`, `goog_map_district`, `goog_map_country`, `goog_map_postalcode`, `goog_map_city_short`, `goog_map_region_short`, `goog_map_street_short`, `goog_map_district_short`, `goog_map_country_short`, `goog_map_postalcode_short`, `active`, `created_dtm`, `updated_dtm`) VALUES
(1, 1, 'asdasdas', 'dasdasdas3456', 'dasdasdss2', '456rerwew12', '3232212122', '0441234566', 'gg4@gg.com', 'http://go.com', NULL, 'dsadasd', 'asdasdasd', 'sadasdas', 'dasdasd', 'dsadasd', '608502', '10.996233269877195', '79.4214989203125', 'Thiruvisanallur', 'Tamil Nadu', 'Poompuhar Road', 'Thanjavur', 'India', '612105', 'Thiruvisanallur', 'TN', 'Poompuhar Rd', 'Thanjavur', 'IN', '612105', 1, '2017-04-07 02:56:11', NULL),
(2, 1, 'eweqweqw', 'dasdasdas', 'dasdasdas', '123wewewe', '2234123443', NULL, 'vinay@gmail.com', NULL, NULL, 'dsadasd', 'asdasd', 'asdasdas', 'dasdasdas', NULL, '123456', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-07 03:03:10', NULL),
(3, 1, 'adsadsa', 'dasdasdas', 'asdasdas', 'dasdasd', '1111111111', NULL, 'gg@gmail.com', NULL, NULL, 'rerwe', 'rwerwer', NULL, 'sadasdas', NULL, '608502', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-11 14:28:19', NULL),
(4, 1, 'ewqeqw', 'sadasdas', 'asdasd', 'dasdasd', '1111111112', NULL, NULL, NULL, NULL, 'dsadasd', 'dasdasd', NULL, 'Dubai', NULL, '123456', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-12 14:17:10', NULL),
(5, 6, 'Printer', 'Ramu Printer, xerox', 'printer, xerox', 'Ramu Printer', '1234554321', NULL, 'ramu@gmail.com', '', NULL, '35, Anna Salai', 'Kumaran street', '', 'Chennai', NULL, '600041', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-14 07:21:53', NULL),
(6, 7, 'dasdasd', 'fsdfsdfsd', 'fsdfdsfsd', 'fdsfsdfsd', '3452345678', NULL, 'laxmi@gmail.com', '', NULL, 'x41', 'Shivanandha Building, 2nd avanue', '', 'Chennai', NULL, '600040', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-14 13:41:20', NULL),
(7, 8, 'Car Servicing', 'dasdasdasdsadasdas', 'dsadas,dsadasdas', 'sdadasdasd', '9998978789', NULL, 'padeep@gmail.com', NULL, NULL, '44a', 'kalima nagar rd', NULL, 'Cuddalore', NULL, '608502', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-15 11:06:59', NULL),
(8, 10, 'sadasdas', 'dasdasdsadsa', 'dasdasdasdsa', 'dsadasdas', '1222121211', '', '', '', NULL, '11', 'MGR Thittu', 'parangi pettai', 'Cuddalore', 'Tamil Nadu', '608502', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-15 15:29:04', NULL),
(9, 14, 'dsadas', 'dasdasdas1111', 'dsadas1111', 'dsadasdas123', '6789987673', '044412334444', 'surya2@gmail.com', '', NULL, 'dsadasd', 'asdasdasd', '', 'Venezia', 'Banchina Dei Molini', 'dasdasdsa', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-17 17:49:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sp_user_profile`
--

CREATE TABLE `sp_user_profile` (
  `id` bigint(11) NOT NULL,
  `comm_seller_user_id` bigint(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `clasification` tinytext NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `mobile` varchar(16) NOT NULL,
  `landline` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `website` tinytext,
  `logo` tinytext,
  `number_or_name` varchar(256) DEFAULT NULL,
  `address_1` varchar(256) DEFAULT NULL,
  `address_2` varchar(256) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `county` varchar(64) DEFAULT NULL,
  `postal_code` varchar(12) DEFAULT NULL,
  `latitude` varchar(64) DEFAULT NULL,
  `longitude` varchar(64) DEFAULT NULL,
  `goog_map_city` varchar(128) DEFAULT NULL,
  `goog_map_region` varchar(128) DEFAULT NULL,
  `goog_map_street` varchar(256) DEFAULT NULL,
  `goog_map_district` varchar(128) DEFAULT NULL,
  `goog_map_country` varchar(128) DEFAULT NULL,
  `goog_map_postalcode` varchar(12) DEFAULT NULL,
  `goog_map_city_short` varchar(128) DEFAULT NULL,
  `goog_map_region_short` varchar(128) DEFAULT NULL,
  `goog_map_street_short` varchar(256) DEFAULT NULL,
  `goog_map_district_short` varchar(128) DEFAULT NULL,
  `goog_map_country_short` varchar(128) DEFAULT NULL,
  `goog_map_postalcode_short` varchar(12) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `created_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp_user_profile`
--

INSERT INTO `sp_user_profile` (`id`, `comm_seller_user_id`, `name`, `description`, `clasification`, `title`, `mobile`, `landline`, `email`, `website`, `logo`, `number_or_name`, `address_1`, `address_2`, `city`, `county`, `postal_code`, `latitude`, `longitude`, `goog_map_city`, `goog_map_region`, `goog_map_street`, `goog_map_district`, `goog_map_country`, `goog_map_postalcode`, `goog_map_city_short`, `goog_map_region_short`, `goog_map_street_short`, `goog_map_district_short`, `goog_map_country_short`, `goog_map_postalcode_short`, `active`, `created_dtm`, `updated_dtm`) VALUES
(1, 6, 'Printer', 'Ramu Printer, xerox', 'printer, xerox', 'Ramu Printer', '1234554321', NULL, 'ramu@gmail.com', '', NULL, '35, Anna Salai', 'Kumaran street', '', 'Chennai', NULL, '600041', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-14 07:21:53', NULL),
(2, 7, 'dasdasd', 'fsdfsdfsd', 'fsdfdsfsd', 'fdsfsdfsd', '3452345678', NULL, 'laxmi@gmail.com', '', NULL, 'x41', 'Shivanandha Building, 2nd avanue', '', 'Chennai', NULL, '600040', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-14 13:41:20', NULL),
(3, 8, 'Car Servicing', 'dasdasdasdsadasdas', 'dsadas,dsadasdas', 'sdadasdasd', '9998978789', NULL, 'padeep@gmail.com', NULL, NULL, '44a', 'kalima nagar rd', NULL, 'Cuddalore', NULL, '608502', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-15 11:06:59', NULL),
(4, 9, 'test', 'dsadsads', 'dasdas', 'dsdasdas', '9998978901', NULL, 'kumar@gmail.com', NULL, NULL, 'dasdas', 'dsadas', NULL, 'Chennai', NULL, '600040', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-15 13:59:04', NULL),
(5, 10, 'sadasdas', 'dasdasdsadsa', 'dasdasdasdsa', 'dsadasdas', '1222121211', NULL, NULL, NULL, NULL, '44 kuttya chetty street', 'parangi pettai', NULL, 'Chennai', NULL, '600040', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-15 15:29:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `whole_user_profile`
--

CREATE TABLE `whole_user_profile` (
  `id` bigint(11) NOT NULL,
  `comm_seller_user_id` bigint(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `clasification` tinytext NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `mobile` varchar(16) NOT NULL,
  `landline` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `website` tinytext,
  `logo` tinytext,
  `number_or_name` varchar(256) DEFAULT NULL,
  `address_1` varchar(256) DEFAULT NULL,
  `address_2` varchar(256) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `county` varchar(64) DEFAULT NULL,
  `postal_code` varchar(12) DEFAULT NULL,
  `latitude` varchar(64) DEFAULT NULL,
  `longitude` varchar(64) DEFAULT NULL,
  `goog_map_city` varchar(128) DEFAULT NULL,
  `goog_map_region` varchar(128) DEFAULT NULL,
  `goog_map_street` varchar(256) DEFAULT NULL,
  `goog_map_district` varchar(128) DEFAULT NULL,
  `goog_map_country` varchar(128) DEFAULT NULL,
  `goog_map_postalcode` varchar(12) DEFAULT NULL,
  `goog_map_city_short` varchar(128) DEFAULT NULL,
  `goog_map_region_short` varchar(128) DEFAULT NULL,
  `goog_map_street_short` varchar(256) DEFAULT NULL,
  `goog_map_district_short` varchar(128) DEFAULT NULL,
  `goog_map_country_short` varchar(128) DEFAULT NULL,
  `goog_map_postalcode_short` varchar(12) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `created_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_dtm` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whole_user_profile`
--

INSERT INTO `whole_user_profile` (`id`, `comm_seller_user_id`, `name`, `description`, `clasification`, `title`, `mobile`, `landline`, `email`, `website`, `logo`, `number_or_name`, `address_1`, `address_2`, `city`, `county`, `postal_code`, `latitude`, `longitude`, `goog_map_city`, `goog_map_region`, `goog_map_street`, `goog_map_district`, `goog_map_country`, `goog_map_postalcode`, `goog_map_city_short`, `goog_map_region_short`, `goog_map_street_short`, `goog_map_district_short`, `goog_map_country_short`, `goog_map_postalcode_short`, `active`, `created_dtm`, `updated_dtm`) VALUES
(1, 9, 'test', 'dsadsads', 'dasdas', 'dsdasdas', '9998978901', NULL, 'kumar@gmail.com', NULL, NULL, 'dasdas', 'dsadas', NULL, 'Chennai', NULL, '600040', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-15 13:59:04', NULL),
(2, 10, 'sadasdas', 'dasdasdsadsa', 'dasdasdasdsa', 'dsadasdas', '1222121211', NULL, NULL, NULL, NULL, '44 kuttya chetty street', 'parangi pettai', NULL, 'Chennai', NULL, '600040', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-15 15:29:04', NULL),
(3, 11, 'dsadas', 'dasdasdas', 'dsadas', 'dsadasdas', '6789987673', NULL, 'surya2@gmail.com', NULL, NULL, 'dsadasd', 'asdasdasd', NULL, 'Venezia', NULL, 'dasdasdsa', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-17 17:41:17', NULL),
(4, 12, 'dsadas', 'dasdasdas', 'dsadas', 'dsadasdas', '6789987673', NULL, 'surya2@gmail.com', NULL, NULL, 'dsadasd', 'asdasdasd', NULL, 'Venezia', NULL, 'dasdasdsa', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-17 17:42:23', NULL),
(5, 14, 'dsadas', 'dasdasdas', 'dsadas', 'dsadasdas', '6789987673', NULL, 'surya2@gmail.com', NULL, NULL, 'dsadasd', 'asdasdasd', NULL, 'Venezia', 'Banchina Dei Molini', 'dasdasdsa', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-04-17 17:49:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `usr_email` (`usr_email`);

--
-- Indexes for table `common_seller_buss_model`
--
ALTER TABLE `common_seller_buss_model`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comm_seller_user_id` (`comm_seller_user_id`);

--
-- Indexes for table `common_seller_details`
--
ALTER TABLE `common_seller_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_mobile_num` (`personal_mobile_num`),
  ADD UNIQUE KEY `personal_mail_id` (`personal_mail_id`);

--
-- Indexes for table `dummy_user_profile`
--
ALTER TABLE `dummy_user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exporter_user_profile`
--
ALTER TABLE `exporter_user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grl_admin_roles`
--
ALTER TABLE `grl_admin_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `grl_user_buss_dtl`
--
ALTER TABLE `grl_user_buss_dtl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grl_user_dtl`
--
ALTER TABLE `grl_user_dtl`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `usr_unique` (`usr_email`,`mob_no`);

--
-- Indexes for table `grl_user_focus_area_dtl`
--
ALTER TABLE `grl_user_focus_area_dtl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `importer_user_profile`
--
ALTER TABLE `importer_user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacture_user_profile`
--
ALTER TABLE `manufacture_user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstr_business_model`
--
ALTER TABLE `mstr_business_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstr_buss_category`
--
ALTER TABLE `mstr_buss_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstr_buss_type`
--
ALTER TABLE `mstr_buss_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstr_country`
--
ALTER TABLE `mstr_country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `mstr_county`
--
ALTER TABLE `mstr_county`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstr_postal_code`
--
ALTER TABLE `mstr_postal_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstr_prod_model`
--
ALTER TABLE `mstr_prod_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstr_prod_type`
--
ALTER TABLE `mstr_prod_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental_user_profile`
--
ALTER TABLE `rental_user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ret_user_profile`
--
ALTER TABLE `ret_user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_user_profile`
--
ALTER TABLE `sp_user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whole_user_profile`
--
ALTER TABLE `whole_user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `usr_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `common_seller_buss_model`
--
ALTER TABLE `common_seller_buss_model`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `common_seller_details`
--
ALTER TABLE `common_seller_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `dummy_user_profile`
--
ALTER TABLE `dummy_user_profile`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `exporter_user_profile`
--
ALTER TABLE `exporter_user_profile`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `grl_admin_roles`
--
ALTER TABLE `grl_admin_roles`
  MODIFY `role_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grl_user_buss_dtl`
--
ALTER TABLE `grl_user_buss_dtl`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grl_user_dtl`
--
ALTER TABLE `grl_user_dtl`
  MODIFY `usr_id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grl_user_focus_area_dtl`
--
ALTER TABLE `grl_user_focus_area_dtl`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `importer_user_profile`
--
ALTER TABLE `importer_user_profile`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `manufacture_user_profile`
--
ALTER TABLE `manufacture_user_profile`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mstr_business_model`
--
ALTER TABLE `mstr_business_model`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mstr_buss_category`
--
ALTER TABLE `mstr_buss_category`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mstr_buss_type`
--
ALTER TABLE `mstr_buss_type`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mstr_country`
--
ALTER TABLE `mstr_country`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `mstr_county`
--
ALTER TABLE `mstr_county`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mstr_postal_code`
--
ALTER TABLE `mstr_postal_code`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mstr_prod_model`
--
ALTER TABLE `mstr_prod_model`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mstr_prod_type`
--
ALTER TABLE `mstr_prod_type`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rental_user_profile`
--
ALTER TABLE `rental_user_profile`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ret_user_profile`
--
ALTER TABLE `ret_user_profile`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sp_user_profile`
--
ALTER TABLE `sp_user_profile`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `whole_user_profile`
--
ALTER TABLE `whole_user_profile`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
