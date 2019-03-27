-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2019 at 11:54 AM
-- Server version: 5.6.41
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dapldeve_ci_heritage`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(100) NOT NULL,
  `flow_num` int(100) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `add_date` date NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banner_id`, `flow_num`, `banner_image`, `add_date`, `status`) VALUES
(8, 1, 'pic01.jpg', '2018-12-11', 1),
(11, 2, 'pic02.jpg', '2018-12-10', 1),
(12, 3, 'pic03.jpg', '2018-12-10', 1),
(13, 4, 'pic04.jpg', '2018-12-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `b_article`
--

CREATE TABLE `b_article` (
  `blog_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `blog_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `blog_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `staus` int(1) NOT NULL DEFAULT '1',
  `meta_tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `intro_text` text COLLATE utf8_unicode_ci NOT NULL,
  `logo_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(11) NOT NULL,
  `is_home` int(1) NOT NULL DEFAULT '0',
  `lang_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `b_article`
--

INSERT INTO `b_article` (`blog_id`, `cat_id`, `blog_title`, `blog_desc`, `blog_slug`, `staus`, `meta_tag`, `meta_description`, `create_date`, `intro_text`, `logo_path`, `display_order`, `is_home`, `lang_id`) VALUES
(10, 5, '4G VoLTE compatible InFocus A2 up for sale in India', '<p>Finally, 4G VoLTE compatible InFocus A2 hits the Indian shores, though in a rather subdued manner. Thanks to the huge influx of Chinese products in the Indian smart phone market, the latest product of US based InFocus has failed to grasp the Indian market the way it was expected to. However, it is not that the device is complete off color. In fact, it has its own specialties and unique features that make it a no-nonsense gadget that the owner can easily be proud of! Yes, it comes at a fairly modest price in India. The fact that it comes at Rs. 5,999 does not take away any sheen off it.</p>\r\n\r\n<p>The gadget has a sleek look and that does make a different at the very first glance. It comes with a 5 inch HD display and a 2.5D curved edge screen that offers a valid protection to the display. The body is made up of Aluminum 6000 and that makes the body rather tough and has a dimension of 143.9x71.7x8.9mm. However, unlike Moto Z2, which is made up of the same material, 4G VoLTE does not come with a finger print sensor and frankly, speaking this contributes to its lower price to some extent.</p>\r\n\r\n<p>When it comes to hardware and processing power, the device comes with a C9832 chipset with 1.3 Ghz processing power and a low power GPU that helps in operating lower end graphics. Besides, the gadget also comes along with a 2 GB RAM and a 16 GB internal storage that is expandable to upto 128 GB. It is powered by a quad-core Spreadtrum SC9832 processor, which is clocked at 1.3GHz.</p>\r\n\r\n<p>Coming to the camera, the phone comes up with a single back camera with 8-MP resolution and a dual LED flash. The device runs on Android 7.1 with comes up with a Smile UX skin. Besides, the device also comes up with a 5 megapixel front camera. The back camera, on the other had comes with certain unique features like 0 to 7 beauty levels, camera filters, pro mode and FaceCute features that are likely to provide some additional photography benefits.</p>\r\n\r\n<p>Discussing about the options of connectivity, the mobile has a 4G VoLTE dual-sim connectivity, GPS and a Bluetooth 4.0, FM Radio, 3.5 mm headphone jack and a Micro USB port. The battery rather large with 3800 mAh capacity and it has a standby backup of up to 6 days.</p>\r\n\r\n<p>The device comes in 3 shades and as per the experts, its main competition will be from Oppo, which is coming up with budget phones that are likely to come up with superior hardware.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '4g-volte-compatible-infocus-a2-up-for-sale-in-india', 1, '4G VoLTE,', 'Finally, 4G VoLTE compatible InFocus A2 hits the Indian shores, though in a rather subdued manner. Thanks to the huge influx of Chinese products in the Indian smart phone market, the latest product of US based InFocus has failed to grasp the Indian market', '2018-03-07 08:35:28', 'Finally, 4G VoLTE compatible InFocus A2 hits the Indian shores, though in a rather subdued manner. Thanks to the huge influx of Chinese products in the Indian smart phone market, the latest product of US based InFocus has failed to grasp the Indian market the way it was expected to. However, it is not that the device is complete off color. In fact, it has its own specialties and unique features that make it a no-nonsense gadget that the owner can easily be proud of! Yes, it comes at a fairly modest price in India. The fact that it comes at Rs. 5,999 does not take away any sheen off it. ', '1520417046infocus-a2-india-2.png', 1, 1, 2),
(11, 5, 'iPhone features that the Android phones do not have', '<p>There is no dearth of souls that are confused over whether to opt for an android smart phone that comes at a modest price tag or choose a high value iPhone over its android counterpart. Now if you forget the price, it is always better to have a iPhone. This is not to demean the android phone, but frankly speaking iPhones come up with some additional unique features that make them unparallel.</p>\r\n\r\n<p><strong>Animoji </strong></p>\r\n\r\n<p>This is one very unique feature of that each and every iPhone comes up with. This feature can recognize the movement of the facial muscles and can accordingly produce an emoji, which is funny and entertaining.</p>\r\n\r\n<p><strong>Filter to siphon off the spam messages</strong></p>\r\n\r\n<p>This is another very effective and unique feature, and is very much self-explanatory. This is actually a filter that is equipped to filter out the spam messages and stop them from hitting the inbox. This feature was not present in the earlier versions of iPhone. It is in fact a recent update that was incorporated in the iOS 11 version.</p>\r\n\r\n<p><strong>Recording the contents of native screen</strong></p>\r\n\r\n<p>Again, this is another new feature that the iOS 11 version has come up with. This feature enables the device to record the contents that are displayed on the native screen. The most amazing part of the episode is that you do not have to select any option to make the recordings. You just have to use an external voice input to do so. This feature also helps you create GIFs.</p>\r\n\r\n<p><strong>Device Synchronization </strong></p>\r\n\r\n<p>Thanks to cloud technology that comes with iOS 11, you will be able to synch any device if you have the same Apple ID. Or in other words, you will be able to sync all the messages of your device with other iOS devices that use the same ID.</p>\r\n\r\n<p><strong>Monetary transaction through messages</strong></p>\r\n\r\n<p>This is an extremely useful and absolutely unique iOS feature, whereby you are able to carry out monetary transaction through ordinary text messages. You can also transfer money to your bank account and receive money from the same using this feature.</p>\r\n\r\n<p><strong>New video format</strong></p>\r\n\r\n<p>The latest iOS devices come up with a new video feature that not only helps them save space but also optimizes the picture clarity of the video capsules. This happens due to use of HEIF/HEVC format, which helps to save a considerable amount of memory, without actually interfering the quality of the picture. On the contrary, it optimizes the quality of picture.</p>\r\n\r\n<p><strong>Use of multiple speakers</strong></p>\r\n\r\n<p>This is another feature that is iOS specific, wherein you will be able to play music on multiple speakers. This is particularly helpful when you are enjoying music or movie with a large group of friends or you are enjoying a party at your home. This feature also comes in handy when you are playing multiple Apple TVs.</p>\r\n\r\n<p>However, with introduction of every new version, Apple is introducing new and unique features in its iOS devices and these are the factors that make the iOS devices so very popular, in spite of their sky rocketing prices. Still you find serpentine queues in front of Apple stores on the eves of new launches and this buzz does not show any sign of fading off whatsoever in the near future. Therefore, if you have a coffer that is deep enough, you can definitely opt for a iOS device rather than going for an Android smart phone. You can be rest assured that your prized possession will help you stand aloof from the crowd, who will look up to you in envy!</p>\r\n', 'iphone-features-that-the-android-phones-do-not-have', 1, 'iPhones, android', 'There is no dearth of souls that are confused over whether to opt for an android smart phone that comes at a modest price tag or choose a high value iPhone over its android counterpart. Now if you forget the price, it is always better to have a iPhone. Th', '2018-03-07 08:40:50', 'There is no dearth of souls that are confused over whether to opt for an android smart phone that comes at a modest price tag or choose a high value iPhone over its android counterpart. Now if you forget the price, it is always better to have a iPhone. This is not to demean the android phone, but frankly speaking iPhones come up with some additional unique features that make them unparallel. ', '1520416942android-vs-iphone-2017_thumb800.jpg', 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `b_category`
--

CREATE TABLE `b_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lang_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `b_category`
--

INSERT INTO `b_category` (`cat_id`, `cat_name`, `cat_slug`, `status`, `add_date`, `lang_id`) VALUES
(5, 'Mobile', 'mobile', 1, '2018-03-07 08:32:48', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  `add_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `status`, `add_date`) VALUES
(1, 'Laptop', '1', '0000-00-00 00:00:00'),
(2, 'Mobile', '1', '0000-00-00 00:00:00'),
(3, 'Macbook', '1', '2018-07-26 00:00:00'),
(4, 'Lcd / Led', '1', '2018-07-25 00:00:00'),
(5, 'DSLR', '1', '2018-07-18 00:00:00'),
(6, 'Other Gadgets', '1', '2018-07-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `cms_id` int(11) NOT NULL,
  `cms_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cms_slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cms_heading` text NOT NULL,
  `cms_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cms_image` varchar(100) NOT NULL,
  `cms_file` varchar(255) NOT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cms_add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cms_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`cms_id`, `cms_title`, `cms_slug`, `cms_heading`, `cms_description`, `cms_image`, `cms_file`, `meta_title`, `meta_keyword`, `meta_description`, `cms_add_date`, `cms_status`) VALUES
(1, 'About Us', 'about-us', 'WHO WE ARE', '<p>Heritage Expeditions Africa are the pioneers in designing ground-breaking heritage experiences covering natural, historical, and cultural itineraries in Zimbabwe, Southern and Eastern Africa. You can trust us to make that Dream Holiday you have cherished for so long into an unforgettable reality. Southern and East Africa is Heritage Expeditions Africa territory. Explore the rich heritage in Zimbabwe and the neighbouring South Africa, Botswana, Zambia, Namibia, Mozambique, Mauritius, Tanzania, Zanzibar and Rwanda.  </p> <p>\r\nDiscover a whole new world of adventure, wildlife and beach experiences when you choose our expeditions. Whilst adventure is at the core of what we do, Heritage Expeditions Africa understands the importance of being a responsible corporate citizen.  We therefore endeavour to minimise our impact on the environment and the communities where we operate and protect what is delicate where we can. Heritage Expeditions Africa offers reliable custom travel services & tour packages in Zimbabwe, Southern & East Africa.  </p>\r\n', '1544435615pic06.jpg', 'test.pdf', 'Heritage Expeditions Africa are the pioneers in designing ground-breaking heritage experiences covering natural, historical, and cultural itineraries in Zimbabwe, Southern and Eastern Africa. ', 'Heritage Zimbabwe, Travel  To Zimbabwe, Holiday Deals Zimbabwe, Holiday Packages, Hwange, Victoria Falls, Harare, Tours Zimbabwe, Safari , Kariba, Matobo, Great Zimbabwe', 'Heritage Expeditions Africa is the fastest growing travel company in Zimbabwe offering tour packages airport transfer, guide, hotel bookings, sightseeing and all kinds of activities tailor-made tours, corporate, holiday and adventure packages around Zimba', '2017-11-28 13:22:50', 1),
(2, 'Deals', 'deals', 'Deals', '<p>Heritage Expeditions Africa are the pioneers in designing ground-breaking heritage experiences covering natural, historical, and cultural itineraries in Zimbabwe, Southern and Eastern Africa. You can trust us to make that Dream Holiday you have cherished for so long into an unforgettable reality. Southern and East Africa is Heritage Expeditions Africa territory. Explore the rich heritage in Zimbabwe and the neighbouring South Africa, Botswana, Zambia, Namibia, Mozambique, Mauritius, Tanzania, Zanzibar and Rwanda.  </p> <p>\r\nDiscover a whole new world of adventure, wildlife and beach experiences when you choose our expeditions. Whilst adventure is at the core of what we do, Heritage Expeditions Africa understands the importance of being a responsible corporate citizen.  We therefore endeavour to minimise our impact on the environment and the communities where we operate and protect what is delicate where we can. Heritage Expeditions Africa offers reliable custom travel services & tour packages in Zimbabwe, Southern & East Africa.  </p>', '1544596229pic08.jpg', '', 'Deals', 'Deals', 'Deals', '2017-11-28 13:27:57', 1),
(3, 'Holiday Packages', 'holiday-packages', 'Holiday Packages', '<p>Heritage Expeditions Africa are the pioneers in designing ground-breaking heritage experiences covering natural, historical, and cultural itineraries in Zimbabwe, Southern and Eastern Africa. You can trust us to make that Dream Holiday you have cherished for so long into an unforgettable reality. Southern and East Africa is Heritage Expeditions Africa territory. Explore the rich heritage in Zimbabwe and the neighbouring South Africa, Botswana, Zambia, Namibia, Mozambique, Mauritius, Tanzania, Zanzibar and Rwanda.  </p> <p>\r\nDiscover a whole new world of adventure, wildlife and beach experiences when you choose our expeditions. Whilst adventure is at the core of what we do, Heritage Expeditions Africa understands the importance of being a responsible corporate citizen.  We therefore endeavour to minimise our impact on the environment and the communities where we operate and protect what is delicate where we can. Heritage Expeditions Africa offers reliable custom travel services & tour packages in Zimbabwe, Southern & East Africa.  </p>', '1544596005thumb1.jpg', '', 'Holiday Packages', 'Holiday Packages', 'Holiday Packages', '2017-11-29 08:06:02', 1),
(4, 'Group & Incentives', 'group-&-incentives', 'Groups And Incentives', '<p>Heritage Expeditions Africa are the pioneers in designing ground-breaking heritage experiences covering natural, historical, and cultural itineraries in Zimbabwe, Southern and Eastern Africa. You can trust us to make that Dream Holiday you have cherished for so long into an unforgettable reality. Southern and East Africa is Heritage Expeditions Africa territory. Explore the rich heritage in Zimbabwe and the neighbouring South Africa, Botswana, Zambia, Namibia, Mozambique, Mauritius, Tanzania, Zanzibar and Rwanda.  </p> <p>\r\nDiscover a whole new world of adventure, wildlife and beach experiences when you choose our expeditions. Whilst adventure is at the core of what we do, Heritage Expeditions Africa understands the importance of being a responsible corporate citizen.  We therefore endeavour to minimise our impact on the environment and the communities where we operate and protect what is delicate where we can. Heritage Expeditions Africa offers reliable custom travel services & tour packages in Zimbabwe, Southern & East Africa.  </p>', '1544596046thumb2.jpg', '', 'Group & Incentives', 'Group & Incentives', 'Group & Incentives', '2017-11-29 08:06:02', 1),
(5, 'Tours & Tranfers', 'tours-&-tranfers', 'Tours And Transfers', '<p>Heritage Expeditions Africa are the pioneers in designing ground-breaking heritage experiences covering natural, historical, and cultural itineraries in Zimbabwe, Southern and Eastern Africa. You can trust us to make that Dream Holiday you have cherished for so long into an unforgettable reality. Southern and East Africa is Heritage Expeditions Africa territory. Explore the rich heritage in Zimbabwe and the neighbouring South Africa, Botswana, Zambia, Namibia, Mozambique, Mauritius, Tanzania, Zanzibar and Rwanda.  </p> <p>\r\nDiscover a whole new world of adventure, wildlife and beach experiences when you choose our expeditions. Whilst adventure is at the core of what we do, Heritage Expeditions Africa understands the importance of being a responsible corporate citizen.  We therefore endeavour to minimise our impact on the environment and the communities where we operate and protect what is delicate where we can. Heritage Expeditions Africa offers reliable custom travel services & tour packages in Zimbabwe, Southern & East Africa.  </p>', '1544595879pic07.jpg', '', 'Tours & Tranfers', 'Tours & Tranfers', 'Tours & Tranfers', '2018-04-07 06:54:11', 1),
(6, 'Home', 'home', 'Welcome to Heritage Expeditions Africa', '<p>Heritage Expeditions Africa is the fastest growing travel company in Zimbabwe offering tour packages airport transfer, guide, hotel bookings, sightseeing and all kinds of activities tailor-made tours, corporate, holiday and adventure packages around Zimbabwe, Southern and East Africa. Utilising a fleet of brand new air conditioned busses, Heritage Expeditions Africa can organise small to large group convenient scheduled tours to more destinations than any other tour operator in Zimbabwe including Special Interest Tours. We will help you to plan and book your holiday within your budget, duration and interest. We work with best hotels and lodges for the best service and safety. Some of our popular destinations outside Zimbabwe include, Namibia, South Africa, Rwanda, Zanzibar, Mauritius, Kenya and Tanzania. The next time you want to explore the unusual destinations, travel with the Tour Company managed by highly experienced tourism Specialists. Creating Life Time Experiences</p>\r\n', '', '', 'Home', 'Home', 'Home', '2019-01-18 07:30:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `metatags`
--

CREATE TABLE `metatags` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metatags`
--

INSERT INTO `metatags` (`id`, `meta_title`, `meta_desc`, `meta_keywords`) VALUES
(1, 'Sell Used Old Secondhand Mobile Phone Online in Kolkata, Best Price in 60 Sec in Call – Mobifreak', 'Want to sell your used old smart mobile phone online in Kolkata? Get the best price for your old used mobiles. Call Or try to our Apps mobifreak for Price your Mobile in 60 Sec.', 'Mobifreak, mobile, laptop, sell used phone');

-- --------------------------------------------------------

--
-- Table structure for table `site_menu`
--

CREATE TABLE `site_menu` (
  `site_menu_id` int(10) NOT NULL,
  `site_menu_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_menu`
--

INSERT INTO `site_menu` (`site_menu_id`, `site_menu_name`) VALUES
(1, 'HOME'),
(2, 'ABOUT US'),
(3, 'TOURS & TRANSFERS'),
(4, 'HOLIDAY PACKAGES'),
(5, 'GROUPS & INCENTIVES'),
(6, 'DEALS'),
(7, 'CONTACT');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `setting_value` longtext NOT NULL,
  `instruction` text,
  `is_text` tinyint(1) NOT NULL DEFAULT '1',
  `is_textarea` tinyint(1) NOT NULL DEFAULT '0',
  `is_image` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `setting_name`, `slug`, `setting_value`, `instruction`, `is_text`, `is_textarea`, `is_image`, `order`) VALUES
(1, 'Site Name', 'site_name', 'Heritage', '', 1, 0, 0, 1),
(2, 'Company Name', 'company_name', 'Heritage', '', 1, 0, 0, 2),
(3, 'Company Description', 'company_description', 'Dream. Explore. Discover', '', 0, 1, 0, 3),
(4, 'Company Email', 'company_email', 'bookings@heritageexpeditionsafrica.com', '', 1, 0, 0, 4),
(5, 'Admin Email', 'admin_email', 'support.fdx@gmail.com', '', 1, 0, 0, 5),
(6, 'Site Logo', 'site_logo', 'logo.png', 'Maintain Image Size 300x90', 0, 0, 1, 6),
(7, 'Email Caption', 'email_caption', 'mobifreak.com', '', 1, 0, 0, 7),
(8, 'Site Meta', 'site_meta', '', '', 0, 1, 0, 8),
(9, 'Facebook Link', 'facebook_link', 'https://www.facebook.com/', '', 1, 0, 0, 9),
(10, 'Twitter Link', 'twitter_link', 'https://twitter.com/', '', 1, 0, 0, 10),
(11, 'Linkdin Link', 'linkdin_link', 'https://in.linkedin.com/', '', 1, 0, 0, 11),
(12, 'Instragram Link', 'instragram_link', '', '', 1, 0, 0, 12),
(13, 'Youtube Link', 'youtube_link', '', '', 1, 0, 0, 13),
(14, 'Vimeo Link', 'vimeo_link', '', '', 1, 0, 0, 14),
(15, 'Site Contact No', 'site_contact_no', '+263 242 781 089', '', 1, 0, 0, 15),
(16, 'Site Email', 'site_email', 'support.fdx@gmail.com', '', 1, 0, 0, 16),
(17, 'Admin Image', 'admin_image', 'images.jpeg', 'Maintain Image Size 29x29', 0, 0, 1, 17),
(18, 'Admin Name', 'admin_name', 'Mobifreak Admin', NULL, 1, 0, 0, 18),
(19, 'Company Address', 'company_address', '<h5>PHYSICAL ADDRESS</h5>\n                <p>Heritage Expeditions Africa,<br> \n                1 Pennefather Ave. <br>\n                Samora Machel Ave. West,<br> \n                Harare, Zimbabwe </p>', NULL, 0, 1, 0, 19),
(21, 'Site Map', 'site_map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243102.08184102608!2d30.916769431701454!3d-17.816587712579913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a4ee1bdddb35%3A0xa5143b9be5134f2f!2sHarare%2C+Zimbabwe!5e0!3m2!1sen!2sin!4v1544184950861', NULL, 1, 0, 1, 20),
(22, 'Physical Address', 'physical_address', 'Heritage Expeditions Africa, 1 Pennefather Ave. Samora Machel Ave. West, Harare, Zimbabwe', NULL, 1, 0, 0, 21);

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts`
--

CREATE TABLE `tblaccounts` (
  `id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `created` date NOT NULL DEFAULT '0000-00-00',
  `email` varchar(250) NOT NULL DEFAULT '',
  `pass` varchar(250) NOT NULL DEFAULT '',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  `verified` enum('yes','no') NOT NULL DEFAULT 'no',
  `timezone` varchar(50) NOT NULL DEFAULT '0',
  `ip` text,
  `notes` text,
  `reason` text,
  `system1` varchar(250) NOT NULL DEFAULT '',
  `system2` varchar(250) NOT NULL DEFAULT '',
  `language` varchar(100) NOT NULL DEFAULT '',
  `currency` varchar(100) NOT NULL DEFAULT '',
  `enablelog` enum('yes','no') NOT NULL DEFAULT 'yes',
  `newsletter` enum('yes','no') NOT NULL DEFAULT 'no',
  `message` text,
  `messageexp` date NOT NULL DEFAULT '0000-00-00',
  `type` enum('personal','trade') NOT NULL DEFAULT 'personal',
  `tradediscount` varchar(5) NOT NULL DEFAULT '',
  `minqty` varchar(10) NOT NULL DEFAULT '',
  `maxqty` varchar(10) NOT NULL DEFAULT '0',
  `stocklevel` varchar(10) NOT NULL DEFAULT '',
  `mincheckout` varchar(20) NOT NULL DEFAULT '0.00',
  `trackcode` varchar(100) NOT NULL DEFAULT '',
  `params` text,
  `recent` text,
  `wishtext` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblaccounts`
--

INSERT INTO `tblaccounts` (`id`, `name`, `created`, `email`, `pass`, `enabled`, `verified`, `timezone`, `ip`, `notes`, `reason`, `system1`, `system2`, `language`, `currency`, `enablelog`, `newsletter`, `message`, `messageexp`, `type`, `tradediscount`, `minqty`, `maxqty`, `stocklevel`, `mincheckout`, `trackcode`, `params`, `recent`, `wishtext`) VALUES
(5, 'Clarence Chigubhu', '2018-12-17', 'mchigubhu@gmail.com', '$2y$10$J3rBKefdqzbxTDKrgCRemuwzly2cXgUxt/p8zdAzP9ZnvSq49F9B6', 'no', 'no', '0', '105.168.35.67', '', NULL, '7a7b82ba32ec0ca', '', 'english', '', 'yes', 'no', NULL, '0000-00-00', 'personal', '', '', '0', '', '0.00', '', NULL, 'a:1:{i:9;i:2;}', NULL),
(6, 'Kevin Mutukwa', '2018-12-18', 'kmutukwa@gmail.com', '$2y$10$Mny4BL3UpqJPFsTRW1stGOh8Ma3/0s9IvQz4SJ5.Z17twznDpJ5Qq', 'yes', 'yes', '0', '41.60.98.138', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0.00', '', 'a:1:{s:6:\"layout\";s:4:\"grid\";}', 'a:1:{i:9;i:2;}', NULL),
(2, 'Macdonald', '2018-12-17', 'mchigubhu@macsoftlabs.com', '$2y$10$ffX6SijleAhl0U7ekNBBvOGglhPvh8RljDAmS3n2zp1vrihfYudNS', 'yes', 'yes', '0', '41.221.245.250', '', NULL, 'd556de9b4874c2f', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0.00', '', NULL, 'a:1:{i:9;i:2;}', NULL),
(3, 'Rudo', '2018-12-16', 'sukuta.rudo@gmail.com', '$2y$10$//Q3AhnBQP9slcDYuHCdOe/bl9/eI9LFn/eznUUdTs7D6bk/PBjee', 'yes', 'yes', '0', '41.60.111.29', '', NULL, '592f66d9a013f0c', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0.00', '', NULL, '', NULL),
(7, 'ritayan', '2019-01-21', 'testdevloper007@gmail.com', '$2y$10$5iJu20sDpMDLJei.fOHPI.3Z.8CMC.7ZWBwHVxJeb0JHB9LhmBMPS', 'yes', 'yes', '0', '202.191.214.153', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0.00', '', NULL, 'a:3:{i:101;s:1:\"1\";i:14;i:4;i:3;s:1:\"1\";}', NULL),
(8, 'Arijit Dutta', '2019-01-27', 'arijit.dutta48@gmail.com', '$2y$10$h0IQYDDUXqDIWSNaHMXeVucA5nGxWT4VYopZpLJHMeOt4ifI/kUfm', 'yes', 'yes', '0', '202.191.214.153', '', NULL, '0189d36d5d0d40c', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0.00', '', NULL, NULL, NULL),
(9, 'Aditish Dutta', '2019-01-29', 'aditish@gmail.com', '$2y$10$aG5b3SLmWhu2uyUvm9zEmuYfHtYw0NetyKnBgKSl7t8Jwj8Bq4LDe', 'yes', 'yes', '0', '202.191.214.153', '', NULL, '65e590f9bd1523a', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0.00', '', NULL, NULL, NULL),
(10, 'Milan', '2019-01-29', 'milan@digitalaptech.com', '$2y$10$MQN17RpXShQvzikPeas6m.AnXgD1eNWqkh3JmGaqVLyg06i6guaum', 'yes', 'yes', '0', '202.191.214.153', '', NULL, '', '', 'english', '', 'yes', 'no', NULL, '0000-00-00', 'personal', '', '', '0', '', '0.00', '', NULL, NULL, NULL),
(19, 'Arijit', '2019-02-07', 'arijit@gmail.com', '022062873fe34d2fc8b9020060910e12', 'yes', 'yes', '0', '118.185.14.189', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0', '', NULL, '', NULL),
(20, 'Arijit', '2019-02-07', 'arijit@gmail.com', '022062873fe34d2fc8b9020060910e12', 'yes', 'yes', '0', '118.185.14.189', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0', '', NULL, '', NULL),
(18, 'Arijit Dutta', '2019-02-03', 'arijitdutta1440@gmail.com', '$2y$10$w2ESltaA4PhmY0uDpnfwD.xVXjQpnyr29KznXMbCmFv59onMfedY2', 'yes', 'yes', '0', '202.191.214.153', '', NULL, '', '', 'english', '', 'yes', 'no', NULL, '0000-00-00', 'personal', '', '', '0', '', '0.00', '', NULL, NULL, NULL),
(15, 'Aditish', '2019-02-04', 'aditish@gmai.com', '22da32f92ab1d4722e0ca7c5835a23c4', 'yes', 'yes', '0', '202.191.214.153', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0', '', NULL, '', NULL),
(16, 'sayan', '2019-02-04', 'sayan@digitalaptech.com', '3c074715f9c6f379f61a91f534347e31', 'yes', 'yes', '0', '202.191.214.153', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0', '', NULL, '', NULL),
(21, 'Arijit', '2019-02-07', 'arijit@gmail.com', '022062873fe34d2fc8b9020060910e12', 'yes', 'yes', '0', '118.185.14.189', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0', '', NULL, '', NULL),
(22, 'Arijit', '2019-02-07', 'arijit@gmail.com', '022062873fe34d2fc8b9020060910e12', 'yes', 'yes', '0', '118.185.14.189', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0', '', NULL, '', NULL),
(23, 'Arijit', '2019-02-07', 'arijit@gmail.com', '022062873fe34d2fc8b9020060910e12', 'yes', 'yes', '0', '118.185.14.189', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0', '', NULL, '', NULL),
(24, 'Arijit', '2019-02-07', 'arijit@gmail.com', '022062873fe34d2fc8b9020060910e12', 'yes', 'yes', '0', '118.185.14.189', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0', '', NULL, '', NULL),
(25, 'Arijit', '2019-02-07', 'arijit@gmail.com', '022062873fe34d2fc8b9020060910e12', 'yes', 'yes', '0', '118.185.14.189', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0', '', NULL, '', NULL),
(26, 'kdsajh', '2019-02-07', 'arijit1@gmail.com', '42e0f31d705aaa3934fa7a6c05d624fa', 'yes', 'yes', '0', '118.185.14.189', '', NULL, '', '', 'english', '', 'yes', 'yes', NULL, '0000-00-00', 'personal', '', '', '0', '', '0', '', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts_search`
--

CREATE TABLE `tblaccounts_search` (
  `id` int(11) UNSIGNED NOT NULL,
  `account` int(6) NOT NULL DEFAULT '0',
  `code` varchar(50) NOT NULL DEFAULT '',
  `saved` date NOT NULL DEFAULT '0000-00-00',
  `name` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts_wish`
--

CREATE TABLE `tblaccounts_wish` (
  `id` int(11) UNSIGNED NOT NULL,
  `account` int(6) NOT NULL DEFAULT '0',
  `product` int(8) NOT NULL DEFAULT '0',
  `saved` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblaccounts_wish`
--

INSERT INTO `tblaccounts_wish` (`id`, `account`, `product`, `saved`) VALUES
(5, 1, 5, '2018-09-28'),
(4, 1, 4, '2018-09-27'),
(6, 2, 9, '2018-12-17'),
(7, 6, 9, '2018-12-18'),
(8, 10, 3, '2019-02-01'),
(9, 10, 101, '2019-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `tblactivation_history`
--

CREATE TABLE `tblactivation_history` (
  `id` int(7) UNSIGNED NOT NULL,
  `saleID` int(7) NOT NULL DEFAULT '0',
  `products` text,
  `restoreDate` date NOT NULL DEFAULT '0000-00-00',
  `restoreTime` time NOT NULL DEFAULT '00:00:00',
  `adminUser` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbladdressbook`
--

CREATE TABLE `tbladdressbook` (
  `id` int(5) NOT NULL,
  `account` int(8) NOT NULL DEFAULT '0',
  `nm` varchar(250) NOT NULL DEFAULT '',
  `em` varchar(250) NOT NULL DEFAULT '',
  `addr1` varchar(250) NOT NULL DEFAULT '',
  `addr2` varchar(250) NOT NULL DEFAULT '',
  `addr3` varchar(250) NOT NULL DEFAULT '',
  `addr4` varchar(250) NOT NULL DEFAULT '',
  `addr5` varchar(250) NOT NULL DEFAULT '',
  `addr6` varchar(250) NOT NULL DEFAULT '',
  `addr7` varchar(250) NOT NULL DEFAULT '',
  `addr8` varchar(250) NOT NULL DEFAULT '',
  `default` enum('yes','no') NOT NULL DEFAULT 'yes',
  `type` enum('bill','ship') NOT NULL DEFAULT 'bill',
  `zone` int(8) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbladdressbook`
--

INSERT INTO `tbladdressbook` (`id`, `account`, `nm`, `em`, `addr1`, `addr2`, `addr3`, `addr4`, `addr5`, `addr6`, `addr7`, `addr8`, `default`, `type`, `zone`) VALUES
(1, 1, 'Macdonald Chigubhu', 'mchigubhu@gmail.com', '183', '850 Aerodrome', 'Victoria Falls', 'Victoria Falls', 'Cheshire West and Chester', '00263', '', '', 'yes', 'bill', 0),
(2, 1, 'Macdonald Chigubhu', 'mchigubhu@gmail.com', '183', '850 Aerodrome', 'Victoria Falls', 'Victoria Falls', 'Bournemouth', '00263', '+263772119069', '', 'yes', 'ship', 0),
(3, 2, 'Macdonald', 'mchigubhu@macsoftlabs.com', '193', '850 Aerodrome', 'Harare', 'Victoria Falls', '00263', '00263', '', '', 'yes', 'bill', 0),
(4, 2, 'Macdonald', 'mchigubhu@macsoftlabs.com', '193', '2271 Arlington', 'Harare', 'Harare', '00263', '00263', '0772119069', '', 'yes', 'ship', 0),
(5, 3, 'Rudo', 'sukuta.rudo@gmail.com', '193', '21 Admiral Tait', 'Marlborough', 'Harare', 'Zimbabwe', '+263', '', '', 'yes', 'bill', 0),
(6, 3, 'Rudo', 'sukuta.rudo@gmail.com', '160', '21 Admiral Tait', 'Marlborough', 'Harare', 'Zimbabwe', '+263', '+263772683355', '', 'yes', 'ship', 0),
(7, 4, 'Blessed Chigubhu', 'mchigubhu@gmail.com', '193', '2271 Arlington', 'Harare', 'Harare', 'Zim', '00263', '', '', 'yes', 'bill', 0),
(8, 4, 'Blessed Chigubhu', 'mchigubhu@gmail.com', '193', '2271 Arlington', 'Harare', 'Harare', '00263', '00263', '0772119069', '', 'yes', 'ship', 0),
(9, 5, 'Clarence Chigubhu', 'mchigubhu@gmail.com', '193', '2271 Arlington', 'Harare', 'Harare', 'Zim', '00263', '', '', 'yes', 'bill', 0),
(10, 5, 'Clarence Chigubhu', 'mchigubhu@gmail.com', '193', '2271 Arlington', 'Harare', 'Harare', 'Zim', '00263', '+263772119069', '', 'yes', 'ship', 0),
(11, 6, 'Kevin Mutukwa', 'kmutukwa@gmail.com', '193', '6145 Phase 3', 'Granary', 'Zvimba', 'zvimba', '00000', '', '', 'yes', 'bill', 0),
(12, 6, 'Kevin Mutukwa', 'kmutukwa@cottco.co.zw', '193', '6145', 'Phase 3', 'Granary', 'zvimba', '00000', '+263776738041', '', 'yes', 'ship', 0),
(13, 7, 'ritayan', 'testdevloper007@gmail.com', '193', 'abcd', '', 'kolkata', 'india', '700001', '', '', 'yes', 'bill', 0),
(14, 7, 'ritayan', 'testdevloper007@gmail.com', '193', 'abcd', '', 'kolkata', 'india', '700001', '988888888888', '', 'yes', 'ship', 0),
(15, 8, 'Arijit Dutta', 'arijit.dutta48@gmail.com', '192', 'asdas', '', 'sdfdsf', 'dsffffsddfsd', '200012', '', '', 'yes', 'bill', 0),
(16, 8, 'Arijit Dutta', 'arijitdutta@gmail.com', '192', 'fghfghf', 'fghfghfgh', 'fghf', 'fghfgh', '222222', '321456977', '', 'yes', 'ship', 0),
(17, 9, 'Aditish Dutta', 'aditish@gmail.com', '192', '4/1 Babu Bagan', 'Lane', 'Kolkata', 'India', '900031', '', '', 'yes', 'bill', 0),
(18, 9, 'Pritha Dutta', 'pritha@gmail.com', '193', '10B Ramkrishna', 'Lane', 'Dhakuria', 'West Bengal', '700019', '9830098300', '', 'yes', 'ship', 0),
(19, 10, 'Milan', 'rajiv.ghosh@icloud.com', '184', 'kolkata', 'EN 34', 'Kolkata', 'CO', '700091', '', '', 'yes', 'bill', 0),
(20, 10, 'Milan', 'milan@digitalaptech.com', '184', '16363 E. Fremont Ave', '1617', 'Auroa', 'ME', '80016', '545575778', '', 'yes', 'ship', 0),
(21, 13, 'oewir', 'dkjlf@gmail.com', '184', 'hfgth', 'fg', 'bvn', 'nvbjngf', '798', '', '', 'yes', 'bill', 0),
(22, 14, 'dsf', 'gjk@gmail.com', '193', 'ewqrdas', ';lf', 'cxm,.v', 'zx,mc ', '8796', '', '', 'yes', 'bill', 0),
(23, 14, 'dsf', 'gjk@gmail.com', '193', 'ewqrdas', ';lf', 'cxm,.v', 'zx,mc ', '8796', '7894561230', '', 'yes', 'ship', 0),
(24, 15, 'Aditish', 'aditish@gmai.com', '193', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India ', '700031', '', '', 'yes', 'bill', 0),
(25, 15, 'Aditish', 'aditish@gmai.com', '193', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India ', '700031', '9830098300', '', 'yes', 'ship', 0),
(26, 16, 'sayan1', 'sayan@digitalaptech.com', '160', 'test', '', 'tets', 'test', '78555555', '', '', 'yes', 'bill', 0),
(27, 16, 'sayan1', 'sayan@digitalaptech.com', '193', 'test', '', 'tets', 'test', '78555555', '7896541320', '', 'yes', 'ship', 0),
(28, 17, 'Arijit Dutta', 'arijit.dutta@gmail.com', '160', '4/1 Babu Bagan Lane', '', 'Kolkata', 'India', '700031', '', '', 'yes', 'bill', 0),
(29, 17, 'Arijit Dutta', 'arijit.dutta@gmail.com', '160', '4/1 Babu Bagan Lane', '', 'Kolkata', 'India', '700031', '9830098300', '', 'yes', 'ship', 0),
(30, 18, 'Aditish Dutta', 'arijitdutta1440@gmail.com', '160', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '', '', 'yes', 'bill', 0),
(31, 18, 'Arijit Dutta', 'arijitdutta1440@gmail.com', '193', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '9830098300', '', 'yes', 'ship', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblattachments`
--

CREATE TABLE `tblattachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `saleID` int(7) NOT NULL DEFAULT '0',
  `statusID` int(7) NOT NULL DEFAULT '0',
  `attachFolder` varchar(100) NOT NULL DEFAULT '',
  `fileName` varchar(100) NOT NULL DEFAULT '',
  `fileType` varchar(100) NOT NULL DEFAULT '',
  `fileSize` varchar(100) NOT NULL DEFAULT '',
  `isSaved` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblattributes`
--

CREATE TABLE `tblattributes` (
  `id` int(7) NOT NULL,
  `productID` int(10) NOT NULL DEFAULT '0',
  `attrGroup` int(10) NOT NULL DEFAULT '0',
  `attrName` varchar(100) NOT NULL DEFAULT '',
  `attrCost` varchar(50) NOT NULL DEFAULT '',
  `attrStock` int(10) NOT NULL DEFAULT '0',
  `attrWeight` varchar(50) NOT NULL DEFAULT '',
  `orderBy` int(7) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblattributes`
--

INSERT INTO `tblattributes` (`id`, `productID`, `attrGroup`, `attrName`, `attrCost`, `attrStock`, `attrWeight`, `orderBy`) VALUES
(1, 46, 1, '8', '0.00', 10, '0', 1),
(2, 46, 1, '10', '0.00', 10, '0', 2),
(3, 46, 1, '12', '0.00', 10, '0', 3),
(4, 46, 1, '14', '0.00', 1, '0', 4),
(5, 46, 2, 'Blue', '0.00', 10, '0', 1),
(6, 46, 2, 'Green', '0.00', 10, '0', 2),
(7, 44, 3, '8', '0.00', 10, '0', 1),
(8, 44, 3, '10', '0.00', 10, '0', 2),
(9, 44, 3, '12', '0.00', 10, '0', 3),
(10, 44, 3, '14', '0.00', 1, '0', 4),
(11, 44, 4, 'Blue', '0.00', 10, '0', 1),
(12, 44, 4, 'Green', '0.00', 10, '0', 2),
(13, 45, 5, '8', '0.00', 10, '0', 1),
(14, 45, 5, '10', '0.00', 10, '0', 2),
(15, 45, 5, '12', '0.00', 10, '0', 3),
(16, 45, 5, '14', '0.00', 1, '0', 4),
(17, 45, 6, 'Blue', '0.00', 10, '0', 1),
(18, 45, 6, 'Green', '0.00', 10, '0', 2),
(19, 42, 7, 'S', '0.00', 10, '0', 1),
(20, 42, 7, 'M', '0.00', 10, '0', 2),
(21, 42, 7, 'L', '0.00', 10, '0', 3),
(22, 42, 7, 'XL', '1.00', 10, '0', 4),
(23, 42, 7, 'XXL', '2.00', 10, '0', 5),
(24, 40, 8, 'S', '0.00', 10, '0', 1),
(25, 40, 8, 'M', '0.00', 10, '0', 2),
(26, 40, 8, 'L', '0.00', 10, '0', 3),
(27, 40, 8, 'XL', '1.00', 10, '0', 4),
(28, 40, 8, 'XXL', '2.00', 10, '0', 5),
(29, 43, 9, 'S', '0.00', 10, '0', 1),
(30, 43, 9, 'M', '0.00', 10, '0', 2),
(31, 43, 9, 'L', '0.00', 10, '0', 3),
(32, 43, 9, 'XL', '1.00', 10, '0', 4),
(33, 43, 9, 'XXL', '2.00', 10, '0', 5),
(34, 41, 10, '36', '0.00', 10, '0', 1),
(35, 41, 10, '42', '0.00', 10, '0', 2),
(36, 41, 10, '44', '0.00', 10, '0', 3),
(37, 41, 10, '46', '1.00', 10, '0', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblattr_groups`
--

CREATE TABLE `tblattr_groups` (
  `id` int(7) NOT NULL,
  `productID` int(10) NOT NULL DEFAULT '0',
  `groupName` varchar(100) NOT NULL DEFAULT '',
  `orderBy` int(7) NOT NULL DEFAULT '0',
  `allowMultiple` enum('yes','no') NOT NULL DEFAULT 'no',
  `isRequired` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblattr_groups`
--

INSERT INTO `tblattr_groups` (`id`, `productID`, `groupName`, `orderBy`, `allowMultiple`, `isRequired`) VALUES
(1, 46, 'Size', 1, 'no', 'yes'),
(2, 46, 'Colour', 2, 'no', 'no'),
(3, 44, 'Size', 1, 'no', 'yes'),
(4, 44, 'Colour', 2, 'no', 'no'),
(5, 45, 'Size', 1, 'no', 'yes'),
(6, 45, 'Colour', 2, 'no', 'no'),
(7, 42, 'Size', 7, 'no', 'yes'),
(8, 40, 'Size', 7, 'no', 'yes'),
(9, 43, 'Size', 7, 'no', 'yes'),
(10, 41, 'Size', 10, 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tblbanners`
--

CREATE TABLE `tblbanners` (
  `id` int(4) UNSIGNED NOT NULL,
  `bannerFile` varchar(250) NOT NULL DEFAULT '0',
  `bannerText` varchar(250) NOT NULL DEFAULT '0',
  `bannerUrl` varchar(250) NOT NULL DEFAULT '0',
  `bannerLive` enum('yes','no') NOT NULL DEFAULT 'yes',
  `bannerOrder` int(6) NOT NULL DEFAULT '0',
  `bannerCats` text,
  `bannerHome` enum('yes','no') NOT NULL DEFAULT 'no',
  `bannerFrom` date NOT NULL DEFAULT '0000-00-00',
  `bannerTo` date NOT NULL DEFAULT '0000-00-00',
  `trade` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblblog`
--

CREATE TABLE `tblblog` (
  `id` int(7) NOT NULL,
  `title` text,
  `message` text,
  `created` int(13) NOT NULL DEFAULT '0',
  `published` int(13) NOT NULL DEFAULT '0',
  `autodelete` int(13) NOT NULL DEFAULT '0',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblboxes`
--

CREATE TABLE `tblboxes` (
  `id` tinyint(1) NOT NULL,
  `ident` varchar(250) NOT NULL DEFAULT '',
  `name` varchar(250) NOT NULL DEFAULT '',
  `status` enum('yes','no') NOT NULL DEFAULT 'yes',
  `tmp` varchar(250) NOT NULL DEFAULT '',
  `orderby` int(8) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblboxes`
--

INSERT INTO `tblboxes` (`id`, `ident`, `name`, `status`, `tmp`, `orderby`) VALUES
(1, 'points', 'Pricing', 'yes', '', 1),
(2, 'popular', 'Most Popular Products', 'yes', '', 3),
(3, 'tweets', 'Latest Questions', 'yes', '', 5),
(4, 'recent', 'Most Recently Viewed', 'yes', '', 4),
(5, 'links', 'Other Links', 'yes', '', 7),
(6, 'brands', 'Sub Categories', 'yes', '', 2),
(7, 'rss', 'News', 'yes', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `bCat` varchar(50) NOT NULL DEFAULT 'all',
  `enBrand` enum('yes','no') NOT NULL DEFAULT 'yes',
  `rwslug` varchar(250) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `name`, `bCat`, `enBrand`, `rwslug`) VALUES
(1, 'Chobe Activities', '1', 'yes', ''),
(2, 'Victoria Falls Activities', '1', 'yes', ''),
(3, 'Croc Farm', '1', 'yes', ''),
(4, 'Accomodation', '2', 'yes', ''),
(5, 'Gorge Activities', '2', 'yes', ''),
(6, 'Highwire Activities', '2', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcampaigns`
--

CREATE TABLE `tblcampaigns` (
  `id` mediumint(10) UNSIGNED NOT NULL,
  `cName` varchar(250) NOT NULL DEFAULT '',
  `cDiscountCode` varchar(50) NOT NULL DEFAULT '',
  `cMin` varchar(50) NOT NULL DEFAULT '0.00',
  `cUsage` int(5) NOT NULL DEFAULT '0',
  `cExpiry` date NOT NULL DEFAULT '0000-00-00',
  `cDiscount` varchar(20) NOT NULL DEFAULT '',
  `cAdded` date DEFAULT '0000-00-00',
  `cLive` enum('yes','no') NOT NULL DEFAULT 'yes',
  `categories` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcampaigns`
--

INSERT INTO `tblcampaigns` (`id`, `cName`, `cDiscountCode`, `cMin`, `cUsage`, `cExpiry`, `cDiscount`, `cAdded`, `cLive`, `categories`) VALUES
(1, 'New Year Craze', 'NYC', '0', 0, '2019-02-28', '25', '2018-12-16', 'yes', '16,21,23,10,18,17,19,9,11'),
(2, 'February Month Discount', 'FEB50', '1000.00', 0, '2019-02-28', '500', '2019-02-07', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE `tblcart` (
  `cart_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `pCode` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `max` int(10) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`cart_id`, `user_id`, `id`, `name`, `price`, `qty`, `stock`, `pCode`, `cat_id`, `image`, `max`, `total`) VALUES
(21, 16, 101, 'Goa', '2300.00', 1, 9, 123456789, 17, 'http://cisites.dapldevelopment.com/Heritage/store/content/products/demo/tmb_101-1.jpg', 5, '2300.00'),
(22, 16, 101, 'Goa', '2300.00', 1, 9, 123456789, 17, 'http://cisites.dapldevelopment.com/Heritage/store/content/products/demo/tmb_101-1.jpg', 5, '2300.00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategories`
--

CREATE TABLE `tblcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `catname` varchar(250) NOT NULL,
  `titleBar` varchar(250) NOT NULL DEFAULT '',
  `comments` text,
  `catLevel` tinyint(1) NOT NULL DEFAULT '0',
  `childOf` int(6) NOT NULL DEFAULT '0',
  `metaDesc` text,
  `metaKeys` text,
  `enCat` enum('yes','no') NOT NULL DEFAULT 'yes',
  `orderBy` int(5) NOT NULL DEFAULT '0',
  `enDisqus` enum('yes','no') NOT NULL DEFAULT 'no',
  `freeShipping` enum('yes','no') NOT NULL DEFAULT 'no',
  `imgIcon` varchar(100) NOT NULL DEFAULT '',
  `showRelated` enum('yes','no') NOT NULL DEFAULT 'yes',
  `rwslug` varchar(250) NOT NULL DEFAULT '',
  `theme` varchar(200) NOT NULL DEFAULT '',
  `vis` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcategories`
--

INSERT INTO `tblcategories` (`id`, `catname`, `titleBar`, `comments`, `catLevel`, `childOf`, `metaDesc`, `metaKeys`, `enCat`, `orderBy`, `enDisqus`, `freeShipping`, `imgIcon`, `showRelated`, `rwslug`, `theme`, `vis`) VALUES
(9, 'Victoria Falls', '', '', 1, 0, '', '', 'yes', 1, 'no', 'yes', 'demo_icon_9.jpg', 'yes', '', '', '1'),
(10, 'Hwange', 'Hwange is one of Zimbabwe\'s must have on your itenerary. We are excited easch time we welcome guests to the town', '', 1, 0, '', '', 'yes', 6, 'no', 'no', 'icon_10.jpg', 'yes', '', '', '1'),
(11, 'Zambia', '', '', 1, 0, '', '', 'yes', 4, 'no', 'no', 'icon_11.jpg', 'yes', '', '', '1'),
(16, 'Botswana', '', '', 1, 0, '', '', 'yes', 7, 'no', 'no', 'icon_16.jpg', 'yes', '', '', '1'),
(17, 'Namibia', '', '', 1, 0, '', '', 'yes', 2, 'no', 'no', 'icon_17.jpg', 'yes', '', '', '1'),
(18, 'Matopos', 'Matopos Hills and Caves. A must visit  for a rich heritage', '', 1, 0, '', '', 'yes', 3, 'no', 'no', 'icon_18.jpg', 'yes', '', '', '1'),
(19, 'Throughout Zimbabwe', '', '', 1, 0, '', '', 'yes', 5, 'no', 'yes', 'demo_icon_19.jpg', 'yes', '', '', '1'),
(21, 'Chobe  Activities', 'Botswana Kasane Activities', 'Excellent Activities in the Caprivi Strip,Chobe National Park and Maun', 2, 16, 'Chobe Activities', 'Chobe', 'yes', 0, 'no', 'no', 'icon_21.jpg', 'yes', '', '', '1,2,3'),
(23, 'Deals', '', '', 1, 0, '', '', 'yes', 9999, 'no', 'no', 'icon_23.jpg', 'yes', '', '', '1,2,3');

-- --------------------------------------------------------

--
-- Table structure for table `tblclick_history`
--

CREATE TABLE `tblclick_history` (
  `id` int(7) UNSIGNED NOT NULL,
  `saleID` int(7) NOT NULL DEFAULT '0',
  `purchaseID` int(7) NOT NULL DEFAULT '0',
  `productID` int(7) NOT NULL DEFAULT '0',
  `clickDate` date NOT NULL DEFAULT '0000-00-00',
  `clickTime` time NOT NULL DEFAULT '00:00:00',
  `clickIP` varchar(250) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblcomparisons`
--

CREATE TABLE `tblcomparisons` (
  `id` int(10) UNSIGNED NOT NULL,
  `saleID` int(7) NOT NULL DEFAULT '0',
  `thisProduct` int(7) NOT NULL DEFAULT '0',
  `thatProduct` int(7) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblcountries`
--

CREATE TABLE `tblcountries` (
  `id` int(4) UNSIGNED NOT NULL,
  `cName` varchar(250) NOT NULL DEFAULT '',
  `cISO` varchar(3) NOT NULL,
  `cISO_2` char(2) NOT NULL DEFAULT '',
  `iso4217` varchar(50) NOT NULL DEFAULT '0',
  `enCountry` enum('yes','no') NOT NULL DEFAULT 'no',
  `localPickup` enum('yes','no') NOT NULL DEFAULT 'no',
  `freeship` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcountries`
--

INSERT INTO `tblcountries` (`id`, `cName`, `cISO`, `cISO_2`, `iso4217`, `enCountry`, `localPickup`, `freeship`) VALUES
(1, 'Afghanistan', 'AFG', 'AF', '004', 'no', 'no', 'no'),
(2, 'Albania', 'ALB', 'AL', '008', 'no', 'no', 'no'),
(3, 'Algeria', 'DZA', 'DZ', '012', 'no', 'no', 'no'),
(4, 'Andorra', 'AND', 'AD', '020', 'no', 'no', 'no'),
(5, 'Angola', 'AGO', 'AO', '024', 'no', 'no', 'no'),
(6, 'Antigua and Barbuda', 'ATG', 'AG', '028', 'no', 'no', 'no'),
(7, 'Argentina', 'ARG', 'AR', '032', 'no', 'no', 'no'),
(8, 'Armenia', 'ARM', 'AM', '051', 'no', 'no', 'no'),
(9, 'Australia', 'AUS', 'AU', '036', 'no', 'no', 'no'),
(10, 'Austria', 'AUT', 'AT', '040', 'no', 'no', 'no'),
(11, 'Azerbaijan', 'AZE', 'AZ', '031', 'no', 'no', 'no'),
(12, 'Bahamas', 'BHS', 'BS', '044', 'no', 'no', 'no'),
(13, 'Bahrain', 'BHR', 'BH', '048', 'no', 'no', 'no'),
(14, 'Bangladesh', 'BGD', 'BD', '050', 'no', 'no', 'no'),
(15, 'Barbados', 'BRB', 'BB', '052', 'no', 'no', 'no'),
(16, 'Belarus', 'BLR', 'BY', '112', 'no', 'no', 'no'),
(17, 'Belgium', 'BEL', 'BE', '056', 'no', 'no', 'no'),
(18, 'Belize', 'BLZ', 'BZ', '084', 'no', 'no', 'no'),
(19, 'Benin', 'BEN', 'BJ', '204', 'no', 'no', 'no'),
(20, 'Bhutan', 'BTN', 'BT', '064', 'no', 'no', 'no'),
(21, 'Bolivia', 'BOL', 'BO', '068', 'no', 'no', 'no'),
(22, 'Bosnia and Herzegovina', 'BIH', 'BA', '070', 'no', 'no', 'no'),
(23, 'Botswana', 'BWA', 'BW', '072', 'no', 'no', 'no'),
(24, 'Brazil', 'BRA', 'BR', '076', 'no', 'no', 'no'),
(25, 'Brunei', 'BRN', 'BN', '096', 'no', 'no', 'no'),
(26, 'Bulgaria', 'BGR', 'BG', '100', 'no', 'no', 'no'),
(27, 'Burkina Faso', 'BFA', 'BF', '854', 'no', 'no', 'no'),
(28, 'Burundi', 'BDI', 'BI', '108', 'no', 'no', 'no'),
(29, 'Cambodia', 'KHM', 'KH', '116', 'no', 'no', 'no'),
(30, 'Cameroon', 'CMR', 'CM', '120', 'no', 'no', 'no'),
(31, 'Canada', 'CAN', 'CA', '124', 'no', 'no', 'no'),
(32, 'Cape Verde', 'CPV', 'CV', '132', 'no', 'no', 'no'),
(33, 'Central African Republic', 'CAF', 'CF', '140', 'no', 'no', 'no'),
(34, 'Chad', 'TCD', 'TD', '148', 'no', 'no', 'no'),
(35, 'Chile', 'CHL', 'CL', '152', 'no', 'no', 'no'),
(36, 'China', 'CHN', 'CN', '156', 'no', 'no', 'no'),
(37, 'Colombia', 'COL', 'CO', '170', 'no', 'no', 'no'),
(38, 'Comoros', 'COM', 'KM', '174', 'no', 'no', 'no'),
(39, 'Congo', 'COG', 'CG', '178', 'no', 'no', 'no'),
(41, 'Costa Rica', 'CRI', 'CK', '184', 'no', 'no', 'no'),
(42, 'Cote d\'Ivoire', 'CIV', 'CR', '188', 'no', 'no', 'no'),
(43, 'Croatia', 'HRV', 'HR', '191', 'no', 'no', 'no'),
(44, 'Cuba', 'CUB', 'CU', '192', 'no', 'no', 'no'),
(45, 'Cyprus', 'CYP', 'CY', '196', 'no', 'no', 'no'),
(46, 'Czech Republic', 'CZE', 'CZ', '203', 'no', 'no', 'no'),
(47, 'Denmark', 'DNK', 'DK', '208', 'no', 'no', 'no'),
(48, 'Djibouti', 'DJI', 'DJ', '262', 'no', 'no', 'no'),
(49, 'Dominica', 'DMA', 'DM', '212', 'no', 'no', 'no'),
(50, 'Dominican Republic', 'DOM', 'DO', '214', 'no', 'no', 'no'),
(51, 'Ecuador', 'ECU', 'EC', '218', 'no', 'no', 'no'),
(52, 'Egypt', 'EGY', 'EG', '818', 'no', 'no', 'no'),
(53, 'El Salvador', 'SLV', 'SV', '222', 'no', 'no', 'no'),
(54, 'Equatorial Guinea', 'GNQ', 'GQ', '226', 'no', 'no', 'no'),
(55, 'Eritrea', 'ERI', 'ER', '232', 'no', 'no', 'no'),
(56, 'Estonia', 'EST', 'EE', '233', 'no', 'no', 'no'),
(57, 'Ethiopia', 'ETH', 'ET', '231', 'no', 'no', 'no'),
(58, 'Fiji', 'FJI', 'FJ', '242', 'no', 'no', 'no'),
(59, 'Finland', 'FIN', 'FI', '246', 'no', 'no', 'no'),
(60, 'France', 'FRA', 'FR', '250', 'no', 'no', 'no'),
(61, 'Gabon', 'GAB', 'GA', '266', 'no', 'no', 'no'),
(62, 'Gambia', 'GMB', 'GM', '270', 'no', 'no', 'no'),
(63, 'Georgia', 'GEO', 'GE', '268', 'no', 'no', 'no'),
(64, 'Germany', 'DEU', 'DE', '276', 'no', 'no', 'no'),
(65, 'Ghana', 'GHA', 'GH', '288', 'no', 'no', 'no'),
(66, 'Greece', 'GRC', 'GR', '300', 'no', 'no', 'no'),
(67, 'Grenada', 'GRD', 'GD', '308', 'no', 'no', 'no'),
(68, 'Guatemala', 'GTM', 'GT', '320', 'no', 'no', 'no'),
(69, 'Guinea', 'GIN', 'GN', '324', 'no', 'no', 'no'),
(70, 'Guinea-Bissau', 'GNB', 'GW', '624', 'no', 'no', 'no'),
(71, 'Guyana', 'GUY', 'GY', '328', 'no', 'no', 'no'),
(72, 'Haiti', 'HTI', 'HT', '332', 'no', 'no', 'no'),
(73, 'Honduras', 'HND', 'HN', '340', 'no', 'no', 'no'),
(74, 'Hungary', 'HUN', 'HU', '348', 'no', 'no', 'no'),
(75, 'Iceland', 'ISL', 'IS', '352', 'no', 'no', 'no'),
(76, 'India', 'IND', 'IN', '356', 'no', 'no', 'no'),
(77, 'Indonesia', 'IDN', 'ID', '360', 'no', 'no', 'no'),
(78, 'Iran', 'IRN', 'IR', '364', 'no', 'no', 'no'),
(79, 'Iraq', 'IRQ', 'IQ', '368', 'no', 'no', 'no'),
(80, 'Ireland', 'IRL', 'IE', '372', 'no', 'no', 'no'),
(81, 'Israel', 'ISR', 'IL', '376', 'no', 'no', 'no'),
(82, 'Italy', 'ITA', 'IT', '380', 'no', 'no', 'no'),
(83, 'Jamaica', 'JAM', 'JM', '388', 'no', 'no', 'no'),
(84, 'Japan', 'JPN', 'JP', '392', 'no', 'no', 'no'),
(85, 'Jordan', 'JOR', 'JO', '400', 'no', 'no', 'no'),
(86, 'Kazakhstan', 'KAZ', 'KZ', '398', 'no', 'no', 'no'),
(87, 'Kenya', 'KEN', 'KE', '404', 'no', 'no', 'no'),
(88, 'Kiribati', 'KIR', 'KI', '296', 'no', 'no', 'no'),
(89, 'South Korea', 'KOR', 'KR', '410', 'no', 'no', 'no'),
(90, 'North Korea', 'PRK', 'KP', '408', 'no', 'no', 'no'),
(91, 'Kuwait', 'KWT', 'KW', '414', 'no', 'no', 'no'),
(92, 'Kyrgyzstan', 'KGZ', 'KG', '417', 'no', 'no', 'no'),
(93, 'Laos', 'LAO', 'LA', '418', 'no', 'no', 'no'),
(94, 'Latvia', 'LVA', 'LV', '428', 'no', 'no', 'no'),
(95, 'Lebanon', 'LBN', 'LB', '422', 'no', 'no', 'no'),
(96, 'Lesotho', 'LSO', 'LS', '426', 'no', 'no', 'no'),
(97, 'Liberia', 'LBR', 'LR', '430', 'no', 'no', 'no'),
(98, 'Libya', 'LBY', 'LY', '434', 'no', 'no', 'no'),
(99, 'Liechtenstein', 'LIE', 'LI', '438', 'no', 'no', 'no'),
(100, 'Lithuania', 'LTU', 'LT', '440', 'no', 'no', 'no'),
(101, 'Luxembourg', 'LUX', 'LU', '442', 'no', 'no', 'no'),
(102, 'Macedonia', 'MKD', 'MK', '807', 'no', 'no', 'no'),
(103, 'Madagascar', 'MDG', 'MG', '450', 'no', 'no', 'no'),
(104, 'Malawi', 'MWI', 'MW', '454', 'no', 'no', 'no'),
(105, 'Malaysia', 'MYS', 'MY', '458', 'no', 'no', 'no'),
(106, 'Maldives', 'MDV', 'MV', '462', 'no', 'no', 'no'),
(107, 'Mali', 'MLI', 'ML', '466', 'no', 'no', 'no'),
(108, 'Malta', 'MLT', 'MT', '470', 'no', 'no', 'no'),
(109, 'Marshall Islands', 'MHL', 'MH', '584', 'no', 'no', 'no'),
(110, 'Mauritania', 'MRT', 'MR', '478', 'no', 'no', 'no'),
(111, 'Mauritius', 'MUS', 'MU', '480', 'no', 'no', 'no'),
(112, 'Mexico', 'MEX', 'MX', '484', 'no', 'no', 'no'),
(113, 'Micronesia', 'FSM', 'FM', '583', 'no', 'no', 'no'),
(114, 'Moldova', 'MDA', 'MD', '498', 'no', 'no', 'no'),
(115, 'Monaco', 'MCO', 'MC', '492', 'no', 'no', 'no'),
(116, 'Mongolia', 'MNG', 'MN', '496', 'no', 'no', 'no'),
(117, 'Montenegro', 'MNE', 'ME', '499', 'no', 'no', 'no'),
(118, 'Morocco', 'MAR', 'MA', '504', 'no', 'no', 'no'),
(119, 'Mozambique', 'MOZ', 'MZ', '508', 'no', 'no', 'no'),
(120, 'Myanmar (Burma)', 'MMR', 'MM', '104', 'no', 'no', 'no'),
(121, 'Namibia', 'NAM', 'NA', '516', 'no', 'no', 'no'),
(122, 'Nauru', 'NRU', 'NR', '520', 'no', 'no', 'no'),
(123, 'Nepal', 'NPL', 'NP', '524', 'no', 'no', 'no'),
(124, 'Netherlands', 'NLD', 'NL', '528', 'no', 'no', 'no'),
(125, 'New Zealand', 'NZL', 'NZ', '554', 'no', 'no', 'no'),
(126, 'Nicaragua', 'NIC', 'NI', '558', 'no', 'no', 'no'),
(127, 'Niger', 'NER', 'NE', '562', 'no', 'no', 'no'),
(128, 'Nigeria', 'NGA', 'NG', '566', 'no', 'no', 'no'),
(129, 'Norway', 'NOR', 'NO', '578', 'no', 'no', 'no'),
(130, 'Oman', 'OMN', 'OM', '512', 'no', 'no', 'no'),
(131, 'Pakistan', 'PAK', 'PK', '586', 'no', 'no', 'no'),
(132, 'Palau', 'PLW', 'PW', '585', 'no', 'no', 'no'),
(133, 'Panama', 'PAN', 'PA', '591', 'no', 'no', 'no'),
(134, 'Papua New Guinea', 'PNG', 'PG', '598', 'no', 'no', 'no'),
(135, 'Paraguay', 'PRY', 'PY', '600', 'no', 'no', 'no'),
(136, 'Peru', 'PER', 'PE', '604', 'no', 'no', 'no'),
(137, 'Philippines', 'PHL', 'PH', '608', 'no', 'no', 'no'),
(138, 'Poland', 'POL', 'PL', '616', 'no', 'no', 'no'),
(139, 'Portugal', 'PRT', 'PT', '620', 'no', 'no', 'no'),
(140, 'Qatar', 'QAT', 'QA', '634', 'no', 'no', 'no'),
(141, 'Romania', 'ROU', 'RO', '642', 'no', 'no', 'no'),
(142, 'Russian Federation', 'RUS', 'RU', '643', 'no', 'no', 'no'),
(143, 'Rwanda', 'RWA', 'RW', '646', 'no', 'no', 'no'),
(144, 'Saint Kitts and Nevis', 'KNA', 'KN', '659', 'no', 'no', 'no'),
(145, 'Saint Lucia', 'LCA', 'LC', '662', 'no', 'no', 'no'),
(146, 'Saint Vincent and the Grenadines', 'VCT', 'VC', '670', 'no', 'no', 'no'),
(147, 'Samoa', 'WSM', 'WS', '882', 'no', 'no', 'no'),
(148, 'San Marino', 'SMR', 'SM', '674', 'no', 'no', 'no'),
(149, 'Sao Tome and Principe', 'STP', 'ST', '678', 'no', 'no', 'no'),
(150, 'Saudi Arabia', 'SAU', 'SA', '682', 'no', 'no', 'no'),
(151, 'Senegal', 'SEN', 'SN', '686', 'no', 'no', 'no'),
(152, 'Serbia', 'SRB', 'RS', '688', 'no', 'no', 'no'),
(153, 'Seychelles', 'SYC', 'SC', '690', 'no', 'no', 'no'),
(154, 'Sierra Leone', 'SLE', 'SL', '694', 'no', 'no', 'no'),
(155, 'Singapore', 'SGP', 'SG', '702', 'no', 'no', 'no'),
(156, 'Slovakia', 'SVK', 'SK', '703', 'no', 'no', 'no'),
(157, 'Slovenia', 'SVN', 'SI', '705', 'no', 'no', 'no'),
(159, 'Somalia', 'SOM', 'SO', '706', 'no', 'no', 'no'),
(160, 'South Africa', '+27', 'ZA', '710', 'yes', 'yes', 'yes'),
(161, 'Spain', 'ESP', 'ES', '724', 'no', 'no', 'no'),
(162, 'Sri Lanka', 'LKA', 'LK', '144', 'no', 'no', 'no'),
(163, 'Sudan', 'SDN', 'SD', '736', 'no', 'no', 'no'),
(164, 'Suriname', 'SUR', 'SR', '740', 'no', 'no', 'no'),
(165, 'Swaziland', 'SWZ', 'SZ', '748', 'no', 'no', 'no'),
(166, 'Sweden', 'SWE', 'SE', '752', 'no', 'no', 'no'),
(167, 'Switzerland', 'CHE', 'CH', '756', 'no', 'no', 'no'),
(168, 'Syrian Arab Republic', 'SYR', 'SY', '760', 'no', 'no', 'no'),
(169, 'Tajikistan', 'TJK', 'TJ', '762', 'no', 'no', 'no'),
(170, 'Tanzania', 'TZA', 'TZ', '834', 'no', 'no', 'no'),
(171, 'Thailand', 'THA', 'TH', '764', 'no', 'no', 'no'),
(172, 'Timor-Leste (East Timor)', 'TLS', 'TL', '626', 'no', 'no', 'no'),
(173, 'Togo', 'TGO', 'TG', '768', 'no', 'no', 'no'),
(174, 'Tonga', 'TON', 'TO', '776', 'no', 'no', 'no'),
(175, 'Trinidad and Tobago', 'TTO', 'TT', '780', 'no', 'no', 'no'),
(176, 'Tunisia', 'TUN', 'TN', '788', 'no', 'no', 'no'),
(177, 'Turkey', 'TUR', 'TR', '792', 'no', 'no', 'no'),
(178, 'Turkmenistan', 'TKM', 'TM', '795', 'no', 'no', 'no'),
(179, 'Tuvalu', 'TUV', 'TV', '798', 'no', 'no', 'no'),
(180, 'Uganda', 'UGA', 'UG', '800', 'no', 'no', 'no'),
(181, 'Ukraine', 'UKR', 'UA', '804', 'no', 'no', 'no'),
(182, 'United Arab Emirates', 'ARE', 'AE', '784', 'no', 'no', 'no'),
(183, 'Zimbabwe', 'GBR', 'GB', '826', 'no', 'no', 'no'),
(184, 'United States', 'USA', 'US', '840', 'yes', 'yes', 'yes'),
(185, 'Uruguay', 'URY', 'UY', '858', 'no', 'no', 'no'),
(186, 'Uzbekistan', 'UZB', 'UZ', '860', 'no', 'no', 'no'),
(187, 'Vanuatu', 'VUT', 'VU', '548', 'no', 'no', 'no'),
(188, 'Vatican City', 'VAT', 'VA', '336', 'no', 'no', 'no'),
(189, 'Venezuela', 'VEN', 'VE', '862', 'no', 'no', 'no'),
(190, 'Vietnam', 'VNM', 'VN', '704', 'no', 'no', 'no'),
(191, 'Yemen', 'YEM', 'YE', '887', 'no', 'no', 'no'),
(192, 'Zambia', 'ZMB', 'ZM', '894', 'yes', 'yes', 'yes'),
(193, 'Zimbabwe', 'ZWE', 'ZW', '716', 'yes', 'yes', 'yes'),
(202, 'Christmas Island', 'CXR', 'CX', '162', 'no', 'no', 'no'),
(203, 'Cocos (Keeling) Islands', 'CCK', 'CC', '166', 'no', 'no', 'no'),
(205, 'Heard Island and McDonald Islands', 'HMD', 'HM', '334', 'no', 'no', 'no'),
(206, 'Norfolk Island', 'NFK', 'NF', '574', 'no', 'no', 'no'),
(207, 'New Caledonia', 'NCL', 'NC', '540', 'no', 'no', 'no'),
(208, 'French Polynesia', 'PYF', 'PF', '258', 'no', 'no', 'no'),
(209, 'Mayotte', 'MYT', 'YT', '175', 'no', 'no', 'no'),
(210, 'Saint Barthelemy', 'GLP', 'BL', '652', 'no', 'no', 'no'),
(211, 'Saint Martin', 'GLP', 'MF', '663', 'no', 'no', 'no'),
(212, 'Saint Pierre and Miquelon', 'SPM', 'PM', '666', 'no', 'no', 'no'),
(213, 'Wallis and Futuna', 'WLF', 'WF', '876', 'no', 'no', 'no'),
(214, 'French Southern and Antarctic Lands', 'ATF', 'TF', '260', 'no', 'no', 'no'),
(216, 'Bouvet Island', 'BVT', 'BV', '074', 'no', 'no', 'no'),
(217, 'Cook Islands', 'COK', 'CD', '180', 'no', 'no', 'no'),
(218, 'Niue', 'NIU', 'NU', '570', 'no', 'no', 'no'),
(219, 'Tokelau', 'TKL', 'TK', '772', 'no', 'no', 'no'),
(220, 'Guernsey', 'GGY', 'GG', '831', 'no', 'no', 'no'),
(221, 'Isle of Man', 'IMN', 'IM', '833', 'no', 'no', 'no'),
(222, 'Jersey', 'JEY', 'JE', '832', 'no', 'no', 'no'),
(223, 'Anguilla', 'AIA', 'AI', '660', 'no', 'no', 'no'),
(224, 'Bermuda', 'BMU', 'BM', '060', 'no', 'no', 'no'),
(225, 'British Indian Ocean Territory', 'IOT', 'IO', '086', 'no', 'no', 'no'),
(227, 'British Virgin Islands', 'VGB', 'VG', '092', 'no', 'no', 'no'),
(228, 'Cayman Islands', 'CYM', 'KY', '136', 'no', 'no', 'no'),
(229, 'Falkland Islands (Islas Malvinas)', 'FLK', 'FK', '238', 'no', 'no', 'no'),
(230, 'Gibraltar', 'GIB', 'GI', '292', 'no', 'no', 'no'),
(231, 'Montserrat', 'MSR', 'MS', '500', 'no', 'no', 'no'),
(232, 'Pitcairn Islands', 'PCN', 'PN', '612', 'no', 'no', 'no'),
(233, 'Saint Helena', 'SHN', 'SH', '654', 'no', 'no', 'no'),
(234, 'South Georgia & South Sandwich Islands', 'SGS', 'GS', '239', 'no', 'no', 'no'),
(235, 'Turks and Caicos Islands', 'TCA', 'TC', '796', 'no', 'no', 'no'),
(236, 'Northern Mariana Islands', 'MNP', 'MP', '580', 'no', 'no', 'no'),
(237, 'Puerto Rico', 'PRI', 'PR', '630', 'no', 'no', 'no'),
(238, 'American Samoa', 'ASM', 'AS', '016', 'no', 'no', 'no'),
(240, 'Guam', 'GUM', 'GU', '316', 'no', 'no', 'no'),
(248, 'US Virgin Islands', 'VIR', 'VI', '850', 'no', 'no', 'no'),
(250, 'Hong Kong', 'HKG', 'HK', '344', 'no', 'no', 'no'),
(251, 'Macau', 'MAC', 'MO', '446', 'no', 'no', 'no'),
(252, 'Faroe Islands', 'FRO', 'FO', '234', 'no', 'no', 'no'),
(253, 'Greenland', 'GRL', 'GL', '304', 'no', 'no', 'no'),
(254, 'French Guiana', 'GUF', 'GF', '254', 'no', 'no', 'no'),
(255, 'Guadeloupe', 'GLP', 'GP', '312', 'no', 'no', 'no'),
(256, 'Martinique', 'MTQ', 'MQ', '474', 'no', 'no', 'no'),
(257, 'Reunion', 'REU', 'RE', '638', 'no', 'no', 'no'),
(259, 'Aruba', 'ABW', 'AW', '533', 'no', 'no', 'no'),
(260, 'Netherlands Antilles', 'ANT', 'AN', '530', 'no', 'no', 'no'),
(261, 'Svalbard and Jan Mayen', 'SJM', 'SJ', '744', 'no', 'no', 'no'),
(264, 'Australian Antarctic Territory', 'ATA', 'AQ', '010', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tblcoupons`
--

CREATE TABLE `tblcoupons` (
  `id` mediumint(10) UNSIGNED NOT NULL,
  `cCampaign` int(7) NOT NULL DEFAULT '0',
  `cDiscountCode` varchar(200) NOT NULL DEFAULT '',
  `cUseDate` date NOT NULL DEFAULT '0000-00-00',
  `saleID` mediumint(10) NOT NULL DEFAULT '0',
  `discountValue` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblcurrencies`
--

CREATE TABLE `tblcurrencies` (
  `currency` char(3) NOT NULL DEFAULT '',
  `rate` varchar(20) NOT NULL DEFAULT '',
  `enableCur` enum('yes','no') DEFAULT 'no',
  `curname` varchar(30) NOT NULL,
  `currencyDisplayPref` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcurrencies`
--

INSERT INTO `tblcurrencies` (`currency`, `rate`, `enableCur`, `curname`, `currencyDisplayPref`) VALUES
('USD', '0', 'no', 'US Dollar', ''),
('JPY', '0', 'no', 'Japanese Yen', ''),
('CZK', '0', 'no', 'Czech Koruny', ''),
('DKK', '0', 'no', 'Danish Kroner', ''),
('GBP', '0', 'yes', 'British Pound', '&pound;{PRICE}'),
('HUF', '0', 'no', 'Hungarian Forint', ''),
('LTL', '0', 'no', 'Lithuanian Litai', ''),
('LVL', '0', 'no', 'Latvian Lati', ''),
('PLN', '0', 'no', 'Polish Zlotych', ''),
('SEK', '0', 'no', 'Swedish Kronor', ''),
('CHF', '0', 'no', 'Swiss Franc', ''),
('NOK', '0', 'no', 'Norwegian Krone', ''),
('HRK', '0', 'no', 'Croatian Kuna', ''),
('RUB', '0', 'no', 'Russian Rubles', ''),
('TRY', '0', 'no', 'Turkish New Lira', ''),
('AUD', '1.84', 'no', 'Australian Dollar', ''),
('BRL', '0', 'no', 'Brazilian Real', ''),
('CAD', '0', 'no', 'Canadian Dollar', ''),
('CNY', '0', 'no', 'Chinese Yuan Renminbi', ''),
('HKD', '11.00', 'no', 'Hong Kong Dollar', 'HKD{PRICE}'),
('IDR', '0', 'no', 'Indonesian Rupiah', ''),
('ILS', '0', 'no', 'Israeli Shekel', ''),
('INR', '0', 'no', 'Indian Rupee', ''),
('KRW', '0', 'no', 'South Korean Won', ''),
('MXN', '0', 'no', 'Mexican Peso', ''),
('MYR', '0', 'no', 'Malaysian Ringgit', ''),
('NZD', '0', 'no', 'New Zealand Dollar', ''),
('PHP', '0', 'no', 'Philippine Peso', ''),
('SGD', '0', 'no', 'Singapore Dollar', ''),
('THB', '0', 'no', 'Thai Baht', ''),
('ZAR', '0', 'no', 'South African Rand', ''),
('EUR', '1.26', 'no', 'Euro', '{PRICE}&euro;'),
('NGN', '0', 'no', 'Nigerian Naira', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbldropshippers`
--

CREATE TABLE `tbldropshippers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `emails` text,
  `status` text,
  `method` text,
  `salestatus` varchar(100) NOT NULL DEFAULT '',
  `enable` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblentry_log`
--

CREATE TABLE `tblentry_log` (
  `id` int(7) UNSIGNED NOT NULL,
  `userid` int(8) NOT NULL DEFAULT '0',
  `logdatetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(250) NOT NULL DEFAULT '',
  `type` varchar(250) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblentry_log`
--

INSERT INTO `tblentry_log` (`id`, `userid`, `logdatetime`, `ip`, `type`) VALUES
(1, 0, '2018-09-26 11:49:43', '::1', 'admin'),
(2, 1, '2018-09-26 13:55:34', '::1', 'personal'),
(3, 1, '2018-09-27 17:19:19', '::1', 'personal'),
(4, 0, '2018-12-15 10:39:37', '::1', 'admin'),
(5, 2, '2018-12-17 09:45:56', '41.221.245.250', 'personal'),
(6, 0, '2018-12-17 10:18:55', '105.168.35.67', 'admin'),
(7, 3, '2018-12-17 01:57:29', '41.60.111.29', 'personal'),
(8, 0, '2018-12-17 02:10:42', '41.221.245.250', 'admin'),
(9, 0, '2018-12-17 08:37:13', '105.168.35.67', 'admin'),
(10, 2, '2018-12-17 08:38:45', '105.168.35.67', 'personal'),
(11, 3, '2018-12-17 08:53:52', '41.60.111.29', 'personal'),
(12, 4, '2018-12-17 09:02:06', '105.168.35.67', 'personal'),
(13, 3, '2018-12-17 09:49:11', '41.60.111.29', 'personal'),
(14, 3, '2018-12-17 10:05:54', '41.60.111.29', 'personal'),
(15, 3, '2018-12-17 21:18:15', '41.216.124.202', 'personal'),
(16, 6, '2018-12-18 01:29:10', '41.60.98.138', 'personal'),
(17, 6, '2018-12-28 00:20:38', '41.175.135.162', 'personal'),
(18, 0, '2019-01-08 22:41:28', '202.191.214.153', 'admin'),
(19, 0, '2019-01-15 20:58:26', '202.191.214.153', 'admin'),
(20, 0, '2019-01-16 21:10:14', '202.191.214.153', 'admin'),
(21, 0, '2019-01-17 01:33:57', '105.184.188.61', 'admin'),
(22, 0, '2019-01-21 02:41:11', '202.191.214.153', 'admin'),
(23, 0, '2019-01-21 21:40:03', '202.191.214.153', 'admin'),
(24, 0, '2019-01-21 21:51:23', '41.175.133.43', 'admin'),
(25, 0, '2019-01-23 19:44:35', '202.191.214.153', 'admin'),
(26, 0, '2019-01-23 21:34:30', '202.191.214.153', 'admin'),
(27, 0, '2019-01-23 22:26:04', '202.191.214.153', 'admin'),
(28, 0, '2019-01-23 23:23:08', '202.191.214.153', 'admin'),
(29, 7, '2019-01-25 00:52:02', '202.191.214.153', 'personal'),
(30, 0, '2019-01-25 00:55:26', '202.191.214.153', 'admin'),
(31, 0, '2019-01-28 00:25:56', '77.246.50.236', 'admin'),
(32, 0, '2019-01-29 21:23:09', '41.175.108.49', 'admin'),
(33, 10, '2019-01-29 21:30:58', '202.191.214.153', 'personal'),
(34, 0, '2019-01-29 21:54:34', '202.191.214.153', 'admin'),
(35, 0, '2019-01-30 00:34:07', '202.191.214.153', 'admin'),
(36, 0, '2019-01-30 17:25:17', '202.191.214.153', 'admin'),
(37, 7, '2019-01-30 22:50:28', '202.191.214.153', 'personal'),
(38, 0, '2019-01-30 23:00:59', '202.191.214.153', 'admin'),
(39, 10, '2019-01-31 19:45:57', '202.191.214.153', 'personal'),
(40, 10, '2019-01-31 22:41:45', '202.191.214.153', 'personal'),
(41, 10, '2019-01-31 23:52:50', '202.191.214.153', 'personal'),
(42, 18, '2019-02-03 23:33:24', '202.191.214.153', 'personal'),
(43, 18, '2019-02-03 23:34:52', '202.191.214.153', 'personal'),
(44, 18, '2019-02-03 23:38:24', '202.191.214.153', 'personal'),
(45, 18, '2019-02-04 02:08:24', '202.191.214.153', 'personal'),
(46, 18, '2019-02-04 17:28:58', '202.191.214.153', 'personal'),
(47, 0, '2019-02-05 00:10:58', '41.60.104.58', 'admin'),
(48, 0, '2019-02-07 00:06:15', '118.185.14.189', 'admin'),
(49, 0, '2019-02-07 01:05:46', '118.185.14.189', 'admin'),
(50, 0, '2019-02-07 20:44:14', '202.191.214.153', 'admin'),
(51, 0, '2019-02-07 20:45:31', '105.184.188.61', 'admin'),
(52, 0, '2019-02-07 23:55:47', '197.155.231.62', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblflat`
--

CREATE TABLE `tblflat` (
  `id` int(10) UNSIGNED NOT NULL,
  `inZone` int(8) NOT NULL DEFAULT '0',
  `rate` varchar(30) NOT NULL DEFAULT '',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblgiftcerts`
--

CREATE TABLE `tblgiftcerts` (
  `id` mediumint(10) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `value` varchar(10) NOT NULL DEFAULT '',
  `image` varchar(250) NOT NULL DEFAULT '',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  `orderBy` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblgiftcodes`
--

CREATE TABLE `tblgiftcodes` (
  `id` int(10) UNSIGNED NOT NULL,
  `saleID` int(10) NOT NULL DEFAULT '0',
  `purchaseID` int(11) NOT NULL DEFAULT '0',
  `giftID` int(10) NOT NULL DEFAULT '0',
  `code` varchar(200) NOT NULL DEFAULT '',
  `value` varchar(10) NOT NULL DEFAULT '',
  `redeemed` varchar(10) NOT NULL DEFAULT '',
  `from_name` varchar(100) NOT NULL DEFAULT '',
  `from_email` varchar(100) NOT NULL DEFAULT '',
  `to_name` varchar(100) NOT NULL DEFAULT '',
  `to_email` varchar(100) NOT NULL DEFAULT '',
  `message` text,
  `dateAdded` date NOT NULL DEFAULT '0000-00-00',
  `notes` text,
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  `active` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblmethods`
--

CREATE TABLE `tblmethods` (
  `id` int(3) NOT NULL,
  `orderby` int(3) NOT NULL DEFAULT '0',
  `method` varchar(100) NOT NULL DEFAULT '',
  `display` varchar(100) NOT NULL DEFAULT '',
  `status` enum('yes','no') NOT NULL DEFAULT 'yes',
  `defmeth` enum('yes','no') NOT NULL DEFAULT 'no',
  `liveserver` varchar(250) NOT NULL DEFAULT '',
  `sandboxserver` varchar(250) NOT NULL DEFAULT '',
  `plaintext` text,
  `htmltext` text,
  `info` text,
  `redirect` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(100) NOT NULL DEFAULT '',
  `docs` varchar(100) NOT NULL DEFAULT '',
  `webpage` varchar(100) NOT NULL DEFAULT '',
  `statuses` text,
  `viewtype` varchar(20) NOT NULL DEFAULT 'a'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblmethods`
--

INSERT INTO `tblmethods` (`id`, `orderby`, `method`, `display`, `status`, `defmeth`, `liveserver`, `sandboxserver`, `plaintext`, `htmltext`, `info`, `redirect`, `image`, `docs`, `webpage`, `statuses`, `viewtype`) VALUES
(1, 1, 'paypal', 'Paypal', 'no', 'no', 'https://www.paypal.com/cgi-bin/webscr', 'https://www.sandbox.paypal.com/cgi-bin/webscr', '', '', '', '', 'paypal.png', 'payment-1', 'https://www.paypal.com', 'a:5:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";s:7:\"pending\";s:7:\"pending\";s:8:\"refunded\";s:6:\"refund\";}', 'all'),
(2, 2, 'twocheckout', '2Checkout', 'no', 'no', 'https://www.2checkout.com/checkout/purchase', 'https://www.2checkout.com/checkout/purchase', '', '', '', '', '2checkout.png', 'payment-2', 'https://www.2checkout.com', 'a:5:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";s:7:\"pending\";s:7:\"pending\";s:8:\"refunded\";s:6:\"refund\";}', 'all'),
(3, 3, 'skrill', 'Skrill', 'no', 'no', 'https://www.moneybookers.com/app/payment.pl', 'https://www.moneybookers.com/app/payment.pl', '', '', '', '', 'skrill.png', 'payment-5', 'https://www.skrill.com', 'a:5:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";s:7:\"pending\";s:7:\"pending\";s:8:\"refunded\";s:6:\"refund\";}', 'all'),
(4, 4, 'payza', 'Payza', 'no', 'no', 'https://secure.payza.com/checkout', 'https://sandbox.payza.com/sandbox/payprocess.aspx', '', '', '', '', 'payza.png', 'payment-4', 'https://www.payza.com', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:4:\"free\";s:9:\"completed\";}', 'all'),
(5, 5, 'payfast', 'Payfast', 'no', 'no', 'https://www.payfast.co.za/eng/process', 'https://sandbox.payfast.co.za/eng/process', '', '', '', '', 'payfast.png', 'payment-7', 'https://www.payfast.co.za', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(6, 6, 'cardsave', 'CardSave', 'no', 'no', 'https://mms.cardsaveonlinepayments.com/Pages/PublicPages/PaymentForm.aspx', 'https://mms.cardsaveonlinepayments.com/Pages/PublicPages/PaymentForm.aspx', '', '', '', '', 'cardsave.png', 'payment-9', 'http://www.cardsave.net', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(7, 7, 'sagepay', 'Sage Pay', 'no', 'no', 'https://live.sagepay.com/gateway/service/vspform-register.vsp', 'https://test.sagepay.com/Simulator/VSPFormGateway.asp', '', '', '', '', 'sagepay.png', 'payment-10', 'http://www.sagepay.com', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(8, 8, 'worldpay', 'WorldPay', 'no', 'no', 'https://secure.worldpay.com/wcc/purchase', 'https://secure-test.worldpay.com/wcc/purchase', '', '', '', '', 'worldpay.png', 'payment-12', 'http://www.worldpay.com', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(9, 9, 'cardstream', 'Cardstream', 'no', 'no', 'https://gateway.cardstream.com/hosted/', 'https://gateway.cardstream.com/hosted/', '', '', '', '', 'cardstream.png', 'payment-13', 'http://www.cardstream.com', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(10, 10, 'authnet', 'Authorize.net', 'no', 'no', 'https://secure.authorize.net/gateway/transact.dll', 'https://test.authorize.net/gateway/transact.dll', '', '', '', '', 'authnet.png', 'payment-16', 'http://www.authorize.net', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(11, 11, 'paymate', 'Paymate', 'no', 'no', 'https://www.paymate.com/PayMate/ExpressPayment', 'https://www.paymate.com.au/PayMate/TestExpressPayment', '', '', '', '', 'paymate.png', 'payment-17', 'http://www.paymate.com', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(12, 12, 'charity', 'Charity Clear', 'no', 'no', 'https://gateway.charityclear.com/hosted/', 'https://gateway.charityclear.com/hosted/', '', '', '', '', 'charity.png', 'payment-20', 'http://www.charityclear.com', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(13, 13, 'icepay', 'IcePay', 'no', 'no', 'https://pay.icepay.eu/Checkout.aspx', 'https://pay.icepay.eu/Checkout.aspx', '', '', '', '', 'icepay.png', 'payment-21', 'http://www.icepay.com', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(14, 14, 'ccnow', 'CCNow', 'no', 'no', 'https://www.ccnow.com/cgi-local/transact.cgi', 'https://www.ccnow.com/cgi-local/transact.cgi', '', '', '', '', 'ccnow.png', 'payment-22', 'http://www.ccnow.com', 'a:5:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";s:9:\"cancelled\";s:9:\"completed\";s:8:\"refunded\";s:9:\"completed\";}', 'all'),
(15, 15, 'paytrail', 'Paytrail', 'no', 'no', 'https://payment.paytrail.com', 'https://payment.paytrail.com', '', '', '', '', 'paytrail.png', 'payment-24', 'http://www.paytrail.com/en/', 'a:5:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";s:9:\"cancelled\";s:9:\"completed\";s:8:\"refunded\";s:9:\"completed\";}', 'all'),
(16, 16, 'payvector', 'Pay Vector', 'no', 'no', 'https://mms.payvector.net/Pages/PublicPages/PaymentForm.aspx', 'https://mms.payvector.net/Pages/PublicPages/PaymentForm.aspx', '', '', '', '', 'payvector.png', 'payment-23', 'http://www.payvector.co.uk', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(17, 17, 'sectrade', 'Secure Trading', 'no', 'no', 'https://payments.securetrading.net/process/payments/details', 'https://payments.securetrading.net/process/payments/details', '', '', '', '', 'sectrade.png', 'payment-26', 'http://www.securetrading.com', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(18, 18, 'paysense', 'PaymentSense', 'no', 'no', 'https://mms.paymentsensegateway.com/Pages/PublicPages/PaymentForm.aspx', 'https://mms.paymentsensegateway.com/Pages/PublicPages/PaymentForm.aspx', '', '', '', '', 'paysense.png', 'payment-31', 'http://www.paymentsense.co.uk/', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(19, 19, 'stripe', 'Stripe', 'no', 'no', '', '', '', '', '', '', 'stripe.png', 'payment-3', 'http://www.stripe.co.uk/', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(20, 20, 'coa', 'Cash on Arrival', 'yes', 'no', '', '', 'Our drivers name is\r\n\r\nKevin Mutukwa', 'Our drivers name is\r\n\r\nKevin Mutukwa', '', '', 'cod.png', 'payment-6', '', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(21, 21, 'bank', 'Bank Transfer', 'yes', 'yes', '', '', 'Transfer to bank', 'Transfer to bank.\r\n\r\n[em] Emphasised Text [/em]\r\n\r\n[color=#FF0000] Red Text [/color]\r\n\r\n[list]\r\n [*] Bullet List Item 1 [/*]\r\n [*] Bullet List Item 2 [/*]\r\n [*] Bullet List Item 3 [/*]\r\n[/list]\r\n\r\nHi', '', '', 'bank.png', 'payment-6', '', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'g,p,t'),
(22, 22, 'cheque', 'Cheque/Check', 'yes', 'no', '', '', 'Cheques payable to:\r\n\r\nMe', 'Cheques payable to:\r\n\r\nMe', '', '', 'cheque.png', 'payment-6', '', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(23, 23, 'phone', 'Phone Order', 'yes', 'no', '', '', 'Call us on:\r\n\r\n+263772119069', 'Call us on:\r\n\r\n+263772119069', '', '', 'phone.png', 'payment-6', '', 'a:3:{s:9:\"completed\";s:8:\"shipping\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'all'),
(24, 24, 'account', 'On Account', 'yes', 'no', '', '', '', '', '', '', 'account.png', 'payment-6', '', 'a:3:{s:9:\"completed\";s:9:\"completed\";s:8:\"download\";s:9:\"completed\";s:7:\"virtual\";s:9:\"completed\";}', 'trade');

-- --------------------------------------------------------

--
-- Table structure for table `tblmethods_params`
--

CREATE TABLE `tblmethods_params` (
  `id` int(3) NOT NULL,
  `method` varchar(200) NOT NULL DEFAULT '',
  `param` varchar(200) NOT NULL DEFAULT '',
  `value` varchar(250) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblmethods_params`
--

INSERT INTO `tblmethods_params` (`id`, `method`, `param`, `value`) VALUES
(1, 'paypal', 'email', ''),
(2, 'paypal', 'pagestyle', ''),
(3, 'paypal', 'locale', ''),
(4, 'twocheckout', 'account', ''),
(5, 'twocheckout', 'secret', ''),
(6, 'payza', 'ipncode', ''),
(7, 'payza', 'email', ''),
(8, 'skrill', 'email', ''),
(9, 'skrill', 'language', 'EN'),
(10, 'skrill', 'logo', ''),
(11, 'skrill', 'secret', ''),
(12, 'payfast', 'merchant-id', ''),
(13, 'payfast', 'merchant-key', ''),
(14, 'cardsave', 'pre-share-key', ''),
(15, 'cardsave', 'merchant-id', ''),
(16, 'cardsave', 'password', ''),
(17, 'sagepay', 'vendor', ''),
(18, 'sagepay', 'encryption', 'aes'),
(19, 'sagepay', 'xor-password', ''),
(20, 'worldpay', 'install-id', ''),
(21, 'worldpay', 'callback-pw', ''),
(22, 'cardstream', 'merchant-id', ''),
(23, 'payfast', 'validation-url', 'https://www.payfast.co.za/eng/query/validate'),
(24, 'authnet', 'login-id', ''),
(25, 'authnet', 'transaction-key', ''),
(26, 'authnet', 'response-key', ''),
(27, 'paymate', 'merchant-id', ''),
(28, 'charity', 'merchant-id', ''),
(29, 'twocheckout', 'language', 'EN'),
(30, 'payfast', 'validation-sand-url', 'https://sandbox.payfast.co.za/eng/query/validate'),
(31, 'icepay', 'merchant-id', ''),
(32, 'icepay', 'language', 'EN'),
(33, 'icepay', 'encryption-code', ''),
(34, 'ccnow', 'login-id', ''),
(35, 'ccnow', 'language', 'en'),
(36, 'ccnow', 'secret-key', ''),
(37, 'ccnow', 'activation-key', ''),
(38, 'paytrail', 'merchant-id', ''),
(39, 'paytrail', 'language', ''),
(40, 'paytrail', 'auth-hash', ''),
(41, 'payvector', 'pre-share-key', ''),
(42, 'payvector', 'merchant-id', ''),
(43, 'payvector', 'password', ''),
(44, 'sectrade', 'site-reference', ''),
(45, 'sectrade', 'notify-password', ''),
(46, 'sectrade', 'merchant-password', ''),
(47, 'paysense', 'pre-share-key', ''),
(48, 'paysense', 'merchant-id', ''),
(49, 'paysense', 'password', ''),
(50, 'stripe', 'perishable-key', ''),
(51, 'stripe', 'secret-key', ''),
(52, 'stripe', 'image', ''),
(53, 'stripe', 'locale', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblmp3`
--

CREATE TABLE `tblmp3` (
  `id` mediumint(10) UNSIGNED NOT NULL,
  `product_id` int(7) NOT NULL DEFAULT '0',
  `filePath` varchar(250) NOT NULL,
  `fileName` varchar(250) NOT NULL DEFAULT '',
  `fileFolder` varchar(250) NOT NULL DEFAULT '',
  `orderBy` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblnewpages`
--

CREATE TABLE `tblnewpages` (
  `id` int(7) NOT NULL,
  `pageName` varchar(250) NOT NULL DEFAULT '',
  `pageKeys` text,
  `pageDesc` text,
  `pageText` text,
  `orderBy` int(5) NOT NULL DEFAULT '0',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'no',
  `linkPos` varchar(10) NOT NULL DEFAULT '1',
  `linkExternal` enum('yes','no') NOT NULL DEFAULT 'no',
  `customTemplate` varchar(250) NOT NULL DEFAULT '',
  `linkTarget` enum('same','new') NOT NULL DEFAULT 'new',
  `landingPage` enum('yes','no') NOT NULL DEFAULT 'no',
  `leftColumn` enum('yes','no') NOT NULL DEFAULT 'yes',
  `rwslug` varchar(250) NOT NULL DEFAULT '',
  `trade` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblnewpages`
--

INSERT INTO `tblnewpages` (`id`, `pageName`, `pageKeys`, `pageDesc`, `pageText`, `orderBy`, `enabled`, `linkPos`, `linkExternal`, `customTemplate`, `linkTarget`, `landingPage`, `leftColumn`, `rwslug`, `trade`) VALUES
(1, 'Contact Us', 'contact', 'us', 'If you would like to contact us, please use the form below', 2, 'yes', '1,2', 'no', '', 'new', 'no', 'yes', 'contact', 'no'),
(2, 'Refund Policy', 'refund..', 'policy..', 'We are at your service and we believe our presence and sustainance is due to your business. Please maintain us as your trusted Southern Africa Travel Partner. In cases of mishaps,we commit to refunding you for any unused funds,poor service etc. Contact our marketing team on marketing@heritagesafaris.co.zw', 9, 'yes', '1,2', 'no', '', 'new', 'no', 'yes', 'refunds', 'no'),
(12, 'About Us', 'Heritage', 'Expedition', 'Heritage EXpedition is an arm of the RTG Group formed to compliment the accomodation Branch of the Group. Seeing a deficiency in customer centric destination management, and using our expertise gained on the ground, the birth of H.E was no surprise to us......', 1, 'yes', '1,2', 'no', '', 'new', 'no', 'yes', '', 'no'),
(4, 'Shipping & Returns', 'shipping..', 'returns..', '(This is only an example: To edit go to admin and System > Manage New Pages)\r\n\r\nLorem ipsum dolor sit amet consectetuer pede et commodo ridiulus tempus. Suscipit tincidunt adipiscing Pellentesque porta enim porta laoreet interdum Morbi lacus. Curabitur at Pellentesque ac et cursus et accumsan ante orci semper. Penatibus egestas sit vitae ut ipsum nibh dolor Nunc Cum quam. Leo tellus vitae in mi sodales Aenean consequat turpis tempus Aenean. Consectetuer natoque pede tristique dis Pellentesque neque lacinia.\r\n\r\nLorem ipsum dolor sit amet consectetuer pede et commodo ridiculus tempus. Suscipit tincidunt adipiscing Pellentesque porta enim porta laoreet interdum Morbi lacus. Curabitur at Pellentesque ac et cursus et accumsan ante orci semper. Penatibus egestas sit vitae ut ipsum nibh dolor Nunc Cum quam. Leo tellus vitae in mi sodales Aenean consequat turpis tempus Aenean. Consectetuer natoque pede tristique dis Pellentesque neque lacinia.\r\n\r\nLorem ipsum dolor sit amet consectetuer pede et commodo ridiculus tempus. Suscipit tincidunt adipiscing Pellentesque porta enim porta laoreet interdum Morbi lacus. Curabitur at Pellentesque ac et cursus et accumsan ante orci semper. Penatibus egestas sit vitae ut ipsum nibh dolor Nunc Cum quam. Leo tellus vitae in mi sodales Aenean consequat turpis tempus Aenean. Consectetuer natoque pede tristique dis Pellentesque neque lacinia.', 10, 'no', '1,2', 'no', '', 'new', 'no', 'yes', 'shipping', 'no'),
(5, 'Payment Information', 'payment info..', 'payment info..', 'Heritage Expeditions requires all bookings to be paid up before confirmation. Please note we do not hold inventory to some of the products on our display and hence can only firm up the booking if its accompanied by a full payment.', 7, 'yes', '3', 'no', '', 'new', 'no', 'yes', '', 'no'),
(6, 'Corporate Information', 'corporate info..', 'corporate info..', 'Heritage EXpeditions was established in 2018 with the sole mandate to be a leading if not the best tourism industry player. We want to welcome all our guests and take them into the African jungle to enjoy themselves.', 5, 'yes', '3', 'no', '', 'new', 'no', 'yes', '', 'no'),
(7, 'Privacy & Security', 'privacy..', 'privacy..', 'Privacy Policy', 8, 'yes', '3', 'no', '', 'new', 'no', 'yes', 'privacy', 'no'),
(8, 'Careers', 'careers..', 'careers..', 'Heritage Expeditions tries to put up an itinerary thats complete,entertaining but very affordable at the same time. Get a cheaper price  elsewhere and see if we cant beat it', 4, 'yes', '3', 'no', '', 'new', 'no', 'yes', '', 'no'),
(9, 'Order Tracking', 'order tracking..', 'order tracking..', '(This is only an example: To edit go to admin and System > Manage New Pages)\r\n\r\nLorem ipsum dolor sit amet consectetuer pede et commodo ridiulus tempus. Suscipit tincidunt adipiscing Pellentesque porta enim porta laoreet interdum Morbi lacus. Curabitur at Pellentesque ac et cursus et accumsan ante orci semper. Penatibus egestas sit vitae ut ipsum nibh dolor Nunc Cum quam. Leo tellus vitae in mi sodales Aenean consequat turpis tempus Aenean. Consectetuer natoque pede tristique dis Pellentesque neque lacinia.\r\n\r\nLorem ipsum dolor sit amet consectetuer pede et commodo ridiculus tempus. Suscipit tincidunt adipiscing Pellentesque porta enim porta laoreet interdum Morbi lacus. Curabitur at Pellentesque ac et cursus et accumsan ante orci semper. Penatibus egestas sit vitae ut ipsum nibh dolor Nunc Cum quam. Leo tellus vitae in mi sodales Aenean consequat turpis tempus Aenean. Consectetuer natoque pede tristique dis Pellentesque neque lacinia.\r\n\r\nLorem ipsum dolor sit amet consectetuer pede et commodo ridiculus tempus. Suscipit tincidunt adipiscing Pellentesque porta enim porta laoreet interdum Morbi lacus. Curabitur at Pellentesque ac et cursus et accumsan ante orci semper. Penatibus egestas sit vitae ut ipsum nibh dolor Nunc Cum quam. Leo tellus vitae in mi sodales Aenean consequat turpis tempus Aenean. Consectetuer natoque pede tristique dis Pellentesque neque lacinia.', 6, 'no', '3', 'no', '', 'new', 'no', 'yes', '', 'no'),
(10, 'Warranty/Product Care', 'warranty..', 'warranty..', '(This is only an example: To edit go to admin and System > Manage New Pages)\r\n\r\nLorem ipsum dolor sit amet consectetuer pede et commodo ridiulus tempus. Suscipit tincidunt adipiscing Pellentesque porta enim porta laoreet interdum Morbi lacus. Curabitur at Pellentesque ac et cursus et accumsan ante orci semper. Penatibus egestas sit vitae ut ipsum nibh dolor Nunc Cum quam. Leo tellus vitae in mi sodales Aenean consequat turpis tempus Aenean. Consectetuer natoque pede tristique dis Pellentesque neque lacinia.\r\n\r\nLorem ipsum dolor sit amet consectetuer pede et commodo ridiculus tempus. Suscipit tincidunt adipiscing Pellentesque porta enim porta laoreet interdum Morbi lacus. Curabitur at Pellentesque ac et cursus et accumsan ante orci semper. Penatibus egestas sit vitae ut ipsum nibh dolor Nunc Cum quam. Leo tellus vitae in mi sodales Aenean consequat turpis tempus Aenean. Consectetuer natoque pede tristique dis Pellentesque neque lacinia.\r\n\r\nLorem ipsum dolor sit amet consectetuer pede et commodo ridiculus tempus. Suscipit tincidunt adipiscing Pellentesque porta enim porta laoreet interdum Morbi lacus. Curabitur at Pellentesque ac et cursus et accumsan ante orci semper. Penatibus egestas sit vitae ut ipsum nibh dolor Nunc Cum quam. Leo tellus vitae in mi sodales Aenean consequat turpis tempus Aenean. Consectetuer natoque pede tristique dis Pellentesque neque lacinia.', 11, 'no', '3', 'no', '', 'new', 'no', 'yes', '', 'no'),
(11, 'F.A.Q', 'faq..', 'faq..', 'Heritage Expedition is your ultimate destination management company. We are a reputable company with a track record of customer satisfaction through a team of well trained and groomed personnel on the ground', 3, 'yes', '2', 'no', '', 'new', 'no', 'yes', 'faq', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tblnewstemplates`
--

CREATE TABLE `tblnewstemplates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `subject` varchar(250) NOT NULL DEFAULT '',
  `html` text,
  `plain` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblnews_ticker`
--

CREATE TABLE `tblnews_ticker` (
  `id` int(7) NOT NULL,
  `newsText` text,
  `enabled` enum('yes','no') NOT NULL DEFAULT 'no',
  `orderBy` int(7) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblnews_ticker`
--

INSERT INTO `tblnews_ticker` (`id`, `newsText`, `enabled`, `orderBy`) VALUES
(1, 'Welcome to Heritage Guest Management System. Please browse our site for magnificent offers', 'yes', 1),
(2, 'Please refer to the product pool for magnificent Victoria Falls offers. We are here to stay', 'yes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblpaystatuses`
--

CREATE TABLE `tblpaystatuses` (
  `id` int(3) NOT NULL,
  `statname` varchar(200) NOT NULL DEFAULT '',
  `pMethod` varchar(15) NOT NULL DEFAULT 'all',
  `homepage` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblpdf`
--

CREATE TABLE `tblpdf` (
  `id` tinyint(1) NOT NULL,
  `company` text,
  `address` varchar(250) NOT NULL DEFAULT '',
  `font` varchar(50) NOT NULL DEFAULT 'helvetica',
  `dir` enum('ltr','rtl') NOT NULL DEFAULT 'ltr',
  `meta` varchar(20) NOT NULL DEFAULT 'utf-8'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpdf`
--

INSERT INTO `tblpdf` (`id`, `company`, `address`, `font`, `dir`, `meta`) VALUES
(1, '', '', 'helvetica', 'ltr', 'utf-8');

-- --------------------------------------------------------

--
-- Table structure for table `tblper`
--

CREATE TABLE `tblper` (
  `id` int(10) UNSIGNED NOT NULL,
  `inZone` int(8) NOT NULL DEFAULT '0',
  `rate` varchar(30) NOT NULL DEFAULT '',
  `item` varchar(30) NOT NULL DEFAULT '',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblpercent`
--

CREATE TABLE `tblpercent` (
  `id` int(10) UNSIGNED NOT NULL,
  `inZone` int(8) NOT NULL DEFAULT '0',
  `priceFrom` varchar(30) NOT NULL DEFAULT '',
  `priceTo` varchar(30) NOT NULL DEFAULT '',
  `percentage` varchar(30) NOT NULL DEFAULT '',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblpersonalisation`
--

CREATE TABLE `tblpersonalisation` (
  `id` int(7) NOT NULL,
  `productID` int(10) NOT NULL DEFAULT '0',
  `persInstructions` text,
  `persOptions` text,
  `maxChars` int(5) NOT NULL DEFAULT '0',
  `persAddCost` varchar(50) NOT NULL DEFAULT '',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'no',
  `boxType` enum('input','textarea') NOT NULL DEFAULT 'input',
  `reqField` enum('yes','no') NOT NULL DEFAULT 'no',
  `orderBy` int(7) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpersonalisation`
--

INSERT INTO `tblpersonalisation` (`id`, `productID`, `persInstructions`, `persOptions`, `maxChars`, `persAddCost`, `enabled`, `boxType`, `reqField`, `orderBy`) VALUES
(1, 43, 'Choose Team Name|Team', 'West Brom||Man Utd||Chelsea||Walsall Town', 0, '5.00', 'yes', 'input', 'yes', 9999),
(2, 43, 'Enter Your Name|Name', '', 50, '1.00', 'yes', 'input', 'yes', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `tblpictures`
--

CREATE TABLE `tblpictures` (
  `id` mediumint(10) UNSIGNED NOT NULL,
  `product_id` int(7) NOT NULL DEFAULT '0',
  `picture_path` varchar(250) NOT NULL DEFAULT '',
  `thumb_path` varchar(250) NOT NULL DEFAULT '',
  `folder` varchar(250) NOT NULL DEFAULT '',
  `dimensions` varchar(12) NOT NULL DEFAULT '',
  `displayImg` enum('yes','no') NOT NULL DEFAULT 'no',
  `remoteServer` enum('yes','no') NOT NULL DEFAULT 'no',
  `remoteImg` text,
  `remoteThumb` text,
  `pictitle` text,
  `picalt` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpictures`
--

INSERT INTO `tblpictures` (`id`, `product_id`, `picture_path`, `thumb_path`, `folder`, `dimensions`, `displayImg`, `remoteServer`, `remoteImg`, `remoteThumb`, `pictitle`, `picalt`) VALUES
(1, 1, 'img_1-1.jpg', 'tmb_1-1.jpg', 'demo', '425,319', 'yes', 'no', NULL, NULL, NULL, NULL),
(2, 1, 'img_1-2.jpg', 'tmb_1-2.jpg', 'demo', '1500,1126', 'yes', 'no', NULL, NULL, NULL, NULL),
(3, 1, 'img_1-3.jpg', 'tmb_1-3.jpg', 'demo', '1500,1126', 'yes', 'no', NULL, NULL, NULL, NULL),
(4, 2, 'img_2-1.jpg', 'tmb_2-1.jpg', 'demo', '1500,1388', 'yes', 'no', NULL, NULL, NULL, NULL),
(5, 2, 'img_2-5.jpg', 'tmb_2-5.jpg', 'demo', '1500,1278', 'yes', 'no', NULL, NULL, NULL, NULL),
(6, 2, 'img_2-6.jpg', 'tmb_2-6.jpg', 'demo', '1500,1027', 'yes', 'no', NULL, NULL, NULL, NULL),
(7, 2, 'img_2-7.jpg', 'tmb_2-7.jpg', 'demo', '1500,1188', 'yes', 'no', NULL, NULL, NULL, NULL),
(8, 3, 'img_3-1.jpg', 'tmb_3-1.jpg', 'demo', '1500,1214', 'yes', 'no', NULL, NULL, NULL, NULL),
(9, 3, 'img_3-9.jpg', 'tmb_3-9.jpg', 'demo', '1348,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(10, 3, 'img_3-10.jpg', 'tmb_3-10.jpg', 'demo', '1348,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(11, 3, 'img_3-11.jpg', 'tmb_3-11.jpg', 'demo', '1500,1118', 'yes', 'no', NULL, NULL, NULL, NULL),
(12, 4, 'img_4-1.jpg', 'tmb_4-1.jpg', 'demo', '1500,964', 'yes', 'no', NULL, NULL, NULL, NULL),
(13, 4, 'img_4-13.jpg', 'tmb_4-13.jpg', 'demo', '1500,1407', 'yes', 'no', NULL, NULL, NULL, NULL),
(14, 4, 'img_4-14.jpg', 'tmb_4-14.jpg', 'demo', '1500,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(15, 4, 'img_4-15.jpg', 'tmb_4-15.jpg', 'demo', '1500,1215', 'yes', 'no', NULL, NULL, NULL, NULL),
(16, 5, 'img_5-1.jpg', 'tmb_5-1.jpg', 'demo', '1500,1125', 'yes', 'no', NULL, NULL, NULL, NULL),
(17, 5, 'img_5-17.jpg', 'tmb_5-17.jpg', 'demo', '1200,900', 'yes', 'no', NULL, NULL, NULL, NULL),
(18, 5, 'img_5-18.jpg', 'tmb_5-18.jpg', 'demo', '500,453', 'yes', 'no', NULL, NULL, NULL, NULL),
(19, 5, 'img_5-19.jpg', 'tmb_5-19.jpg', 'demo', '1500,1125', 'yes', 'no', NULL, NULL, NULL, NULL),
(20, 6, 'img_6-1.jpg', 'tmb_6-1.jpg', 'demo', '1200,750', 'yes', 'no', NULL, NULL, NULL, NULL),
(21, 6, 'img_6-21.jpg', 'tmb_6-21.jpg', 'demo', '1500,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(22, 6, 'img_6-22.jpg', 'tmb_6-22.jpg', 'demo', '1500,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(23, 6, 'img_6-23.jpg', 'tmb_6-23.jpg', 'demo', '1500,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(24, 7, 'img_7-1.jpg', 'tmb_7-1.jpg', 'demo', '1500,1419', 'yes', 'no', NULL, NULL, NULL, NULL),
(25, 7, 'img_7-25.jpg', 'tmb_7-25.jpg', 'demo', '1500,893', 'yes', 'no', NULL, NULL, NULL, NULL),
(26, 7, 'img_7-26.jpg', 'tmb_7-26.jpg', 'demo', '1500,1240', 'yes', 'no', NULL, NULL, NULL, NULL),
(27, 7, 'img_7-27.jpg', 'tmb_7-27.jpg', 'demo', '1500,1137', 'yes', 'no', NULL, NULL, NULL, NULL),
(28, 8, 'img_8-1.jpg', 'tmb_8-1.jpg', 'demo', '500,294', 'yes', 'no', NULL, NULL, NULL, NULL),
(29, 8, 'img_8-29.jpg', 'tmb_8-29.jpg', 'demo', '1000,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(30, 8, 'img_8-30.jpg', 'tmb_8-30.jpg', 'demo', '1500,1120', 'yes', 'no', NULL, NULL, NULL, NULL),
(31, 8, 'img_8-31.jpg', 'tmb_8-31.jpg', 'demo', '1000,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(178, 101, 'img_101-178.jpg', 'tmb_101-178.jpg', 'demo', '1600,750', 'no', 'no', NULL, NULL, NULL, NULL),
(177, 101, 'img_101-177.jpg', 'tmb_101-177.jpg', 'demo', '1600,750', 'no', 'no', NULL, NULL, NULL, NULL),
(176, 101, 'img_101-1.jpg', 'tmb_101-1.jpg', 'demo', '1600,750', 'no', 'no', NULL, NULL, NULL, NULL),
(39, 11, 'img_11-1.jpg', 'tmb_11-1.jpg', 'demo', '1500,1005', 'yes', 'no', NULL, NULL, NULL, NULL),
(40, 11, 'img_11-40.jpg', 'tmb_11-40.jpg', 'demo', '1500,1293', 'yes', 'no', NULL, NULL, NULL, NULL),
(41, 11, 'img_11-41.jpg', 'tmb_11-41.jpg', 'demo', '1500,1271', 'yes', 'no', NULL, NULL, NULL, NULL),
(42, 11, 'img_11-42.jpg', 'tmb_11-42.jpg', 'demo', '1500,1277', 'yes', 'no', NULL, NULL, NULL, NULL),
(43, 12, 'img_12-1.jpg', 'tmb_12-1.jpg', 'demo', '1010,1010', 'yes', 'no', NULL, NULL, NULL, NULL),
(44, 12, 'img_12-44.jpg', 'tmb_12-44.jpg', 'demo', '1010,1010', 'yes', 'no', NULL, NULL, NULL, NULL),
(45, 12, 'img_12-45.jpg', 'tmb_12-45.jpg', 'demo', '1010,1010', 'yes', 'no', NULL, NULL, NULL, NULL),
(46, 12, 'img_12-46.jpg', 'tmb_12-46.jpg', 'demo', '1010,1010', 'yes', 'no', NULL, NULL, NULL, NULL),
(47, 13, 'img_13-1.jpg', 'tmb_13-1.jpg', 'demo', '1057,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(48, 13, 'img_13-48.jpg', 'tmb_13-48.jpg', 'demo', '1057,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(49, 13, 'img_13-49.jpg', 'tmb_13-49.jpg', 'demo', '427,1280', 'yes', 'no', NULL, NULL, NULL, NULL),
(50, 13, 'img_13-50.jpg', 'tmb_13-50.jpg', 'demo', '1057,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(51, 14, 'img_14-1.jpg', 'tmb_14-1.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(52, 14, 'img_14-52.jpg', 'tmb_14-52.jpg', 'demo', '602,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(53, 14, 'img_14-53.jpg', 'tmb_14-53.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(54, 14, 'img_14-54.jpg', 'tmb_14-54.jpg', 'demo', '579,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(55, 15, 'img_15-1.jpg', 'tmb_15-1.jpg', 'demo', '1500,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(56, 15, 'img_15-56.jpg', 'tmb_15-56.jpg', 'demo', '1500,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(57, 15, 'img_15-57.jpg', 'tmb_15-57.jpg', 'demo', '1500,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(58, 15, 'img_15-58.jpg', 'tmb_15-58.jpg', 'demo', '1500,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(59, 16, 'img_16-1.jpg', 'tmb_16-1.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(60, 16, 'img_16-60.jpg', 'tmb_16-60.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(61, 16, 'img_16-61.jpg', 'tmb_16-61.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(62, 16, 'img_16-62.jpg', 'tmb_16-62.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(63, 17, 'img_17-1.jpg', 'tmb_17-1.jpg', 'demo', '500,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(64, 17, 'img_17-64.jpg', 'tmb_17-64.jpg', 'demo', '500,482', 'yes', 'no', NULL, NULL, NULL, NULL),
(65, 17, 'img_17-65.jpg', 'tmb_17-65.jpg', 'demo', '417,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(66, 17, 'img_17-66.jpg', 'tmb_17-66.jpg', 'demo', '483,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(67, 18, 'img_18-1.jpg', 'tmb_18-1.jpg', 'demo', '1193,760', 'yes', 'no', NULL, NULL, NULL, NULL),
(68, 18, 'img_18-68.jpg', 'tmb_18-68.jpg', 'demo', '382,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(69, 18, 'img_18-69.jpg', 'tmb_18-69.jpg', 'demo', '500,375', 'yes', 'no', NULL, NULL, NULL, NULL),
(70, 18, 'img_18-70.jpg', 'tmb_18-70.jpg', 'demo', '500,375', 'yes', 'no', NULL, NULL, NULL, NULL),
(71, 19, 'img_19-1.jpg', 'tmb_19-1.jpg', 'demo', '500,309', 'yes', 'no', NULL, NULL, NULL, NULL),
(72, 20, 'img_20-1.jpg', 'tmb_20-1.jpg', 'demo', '1200,800', 'yes', 'no', NULL, NULL, NULL, NULL),
(73, 20, 'img_20-73.jpg', 'tmb_20-73.jpg', 'demo', '1500,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(74, 20, 'img_20-74.jpg', 'tmb_20-74.jpg', 'demo', '1500,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(75, 20, 'img_20-75.jpg', 'tmb_20-75.jpg', 'demo', '1500,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(76, 21, 'img_21-1.jpg', 'tmb_21-1.jpg', 'demo', '1500,1001', 'yes', 'no', NULL, NULL, NULL, NULL),
(77, 21, 'img_21-77.jpg', 'tmb_21-77.jpg', 'demo', '1500,1001', 'yes', 'no', NULL, NULL, NULL, NULL),
(78, 21, 'img_21-78.jpg', 'tmb_21-78.jpg', 'demo', '1500,1001', 'yes', 'no', NULL, NULL, NULL, NULL),
(79, 21, 'img_21-79.jpg', 'tmb_21-79.jpg', 'demo', '1500,1001', 'yes', 'no', NULL, NULL, NULL, NULL),
(80, 22, 'img_22-1.jpg', 'tmb_22-1.jpg', 'demo', '500,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(81, 22, 'img_22-81.jpg', 'tmb_22-81.jpg', 'demo', '500,316', 'yes', 'no', NULL, NULL, NULL, NULL),
(82, 22, 'img_22-82.jpg', 'tmb_22-82.jpg', 'demo', '500,380', 'yes', 'no', NULL, NULL, NULL, NULL),
(83, 22, 'img_22-83.jpg', 'tmb_22-83.jpg', 'demo', '1500,844', 'yes', 'no', NULL, NULL, NULL, NULL),
(84, 23, 'img_23-1.jpg', 'tmb_23-1.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(85, 23, 'img_23-85.jpg', 'tmb_23-85.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(86, 23, 'img_23-86.jpg', 'tmb_23-86.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(87, 23, 'img_23-87.jpg', 'tmb_23-87.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(88, 24, 'img_24-1.jpg', 'tmb_24-1.jpg', 'demo', '500,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(89, 24, 'img_24-89.jpg', 'tmb_24-89.jpg', 'demo', '500,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(90, 24, 'img_24-90.jpg', 'tmb_24-90.jpg', 'demo', '500,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(91, 24, 'img_24-91.jpg', 'tmb_24-91.jpg', 'demo', '500,375', 'yes', 'no', NULL, NULL, NULL, NULL),
(92, 25, 'img_25-1.jpg', 'tmb_25-1.jpg', 'demo', '1181,1181', 'yes', 'no', NULL, NULL, NULL, NULL),
(93, 25, 'img_25-93.jpg', 'tmb_25-93.jpg', 'demo', '1181,1181', 'yes', 'no', NULL, NULL, NULL, NULL),
(94, 25, 'img_25-94.jpg', 'tmb_25-94.jpg', 'demo', '1181,1181', 'yes', 'no', NULL, NULL, NULL, NULL),
(95, 25, 'img_25-95.jpg', 'tmb_25-95.jpg', 'demo', '1181,1181', 'yes', 'no', NULL, NULL, NULL, NULL),
(96, 26, 'img_26-1.jpg', 'tmb_26-1.jpg', 'demo', '1050,1050', 'yes', 'no', NULL, NULL, NULL, NULL),
(97, 26, 'img_26-97.jpg', 'tmb_26-97.jpg', 'demo', '1050,1050', 'yes', 'no', NULL, NULL, NULL, NULL),
(98, 26, 'img_26-98.jpg', 'tmb_26-98.jpg', 'demo', '1050,1050', 'yes', 'no', NULL, NULL, NULL, NULL),
(99, 26, 'img_26-99.jpg', 'tmb_26-99.jpg', 'demo', '1050,1050', 'yes', 'no', NULL, NULL, NULL, NULL),
(104, 28, 'img_28-1.jpg', 'tmb_28-1.jpg', 'demo', '810,1200', 'yes', 'no', NULL, NULL, NULL, NULL),
(105, 28, 'img_28-105.jpg', 'tmb_28-105.jpg', 'demo', '1000,868', 'yes', 'no', NULL, NULL, NULL, NULL),
(106, 28, 'img_28-106.jpg', 'tmb_28-106.jpg', 'demo', '900,1200', 'yes', 'no', NULL, NULL, NULL, NULL),
(107, 28, 'img_28-107.jpg', 'tmb_28-107.jpg', 'demo', '900,1200', 'yes', 'no', NULL, NULL, NULL, NULL),
(108, 29, 'img_29-1.jpg', 'tmb_29-1.jpg', 'demo', '500,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(109, 29, 'img_29-109.jpg', 'tmb_29-109.jpg', 'demo', '500,448', 'yes', 'no', NULL, NULL, NULL, NULL),
(110, 29, 'img_29-110.jpg', 'tmb_29-110.jpg', 'demo', '500,441', 'yes', 'no', NULL, NULL, NULL, NULL),
(111, 29, 'img_29-111.jpg', 'tmb_29-111.jpg', 'demo', '1000,917', 'yes', 'no', NULL, NULL, NULL, NULL),
(112, 30, 'img_30-1.jpg', 'tmb_30-1.jpg', 'demo', '862,1375', 'yes', 'no', NULL, NULL, NULL, NULL),
(113, 30, 'img_30-113.jpg', 'tmb_30-113.jpg', 'demo', '500,496', 'yes', 'no', NULL, NULL, NULL, NULL),
(114, 30, 'img_30-114.jpg', 'tmb_30-114.jpg', 'demo', '1500,1192', 'yes', 'no', NULL, NULL, NULL, NULL),
(115, 30, 'img_30-115.jpg', 'tmb_30-115.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(116, 31, 'img_31-1.jpg', 'tmb_31-1.jpg', 'demo', '1500,1208', 'yes', 'no', NULL, NULL, NULL, NULL),
(117, 31, 'img_31-117.jpg', 'tmb_31-117.jpg', 'demo', '1447,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(118, 31, 'img_31-118.jpg', 'tmb_31-118.jpg', 'demo', '1500,955', 'yes', 'no', NULL, NULL, NULL, NULL),
(119, 31, 'img_31-119.jpg', 'tmb_31-119.jpg', 'demo', '1500,1114', 'yes', 'no', NULL, NULL, NULL, NULL),
(120, 32, 'img_32-1.jpg', 'tmb_32-1.jpg', 'demo', '1428,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(121, 32, 'img_32-121.jpg', 'tmb_32-121.jpg', 'demo', '1500,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(122, 32, 'img_32-122.jpg', 'tmb_32-122.jpg', 'demo', '500,251', 'yes', 'no', NULL, NULL, NULL, NULL),
(123, 32, 'img_32-123.jpg', 'tmb_32-123.jpg', 'demo', '500,459', 'yes', 'no', NULL, NULL, NULL, NULL),
(124, 33, 'img_33-1.jpg', 'tmb_33-1.jpg', 'demo', '472,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(125, 33, 'img_33-125.jpg', 'tmb_33-125.jpg', 'demo', '1150,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(126, 33, 'img_33-126.jpg', 'tmb_33-126.jpg', 'demo', '500,367', 'yes', 'no', NULL, NULL, NULL, NULL),
(127, 33, 'img_33-127.jpg', 'tmb_33-127.jpg', 'demo', '475,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(128, 34, 'img_34-1.jpg', 'tmb_34-1.jpg', 'demo', '1014,1024', 'yes', 'no', NULL, NULL, NULL, NULL),
(129, 35, 'img_35-1.jpg', 'tmb_35-1.jpg', 'demo', '1050,1038', 'yes', 'no', NULL, NULL, NULL, NULL),
(130, 35, 'img_35-130.jpg', 'tmb_35-130.jpg', 'demo', '1064,908', 'yes', 'no', NULL, NULL, NULL, NULL),
(131, 36, 'img_36-1.jpg', 'tmb_36-1.jpg', 'demo', '500,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(132, 37, 'img_37-1.jpg', 'tmb_37-1.jpg', 'demo', '1482,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(133, 37, 'img_37-133.jpg', 'tmb_37-133.jpg', 'demo', '1500,1290', 'yes', 'no', NULL, NULL, NULL, NULL),
(134, 38, 'img_38-1.jpg', 'tmb_38-1.jpg', 'demo', '1019,1024', 'yes', 'no', NULL, NULL, NULL, NULL),
(135, 39, 'img_39-1.jpg', 'tmb_39-1.jpg', 'demo', '500,445', 'yes', 'no', NULL, NULL, NULL, NULL),
(136, 39, 'img_39-136.jpg', 'tmb_39-136.jpg', 'demo', '500,348', 'yes', 'no', NULL, NULL, NULL, NULL),
(137, 39, 'img_39-137.jpg', 'tmb_39-137.jpg', 'demo', '500,375', 'yes', 'no', NULL, NULL, NULL, NULL),
(138, 40, 'img_40-1.jpg', 'tmb_40-1.jpg', 'demo', '385,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(139, 40, 'img_40-139.jpg', 'tmb_40-139.jpg', 'demo', '385,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(140, 40, 'img_40-140.jpg', 'tmb_40-140.jpg', 'demo', '342,444', 'yes', 'no', NULL, NULL, NULL, NULL),
(141, 40, 'img_40-141.jpg', 'tmb_40-141.jpg', 'demo', '385,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(142, 41, 'img_41-1.jpg', 'tmb_41-1.jpg', 'demo', '385,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(143, 41, 'img_41-143.jpg', 'tmb_41-143.jpg', 'demo', '384,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(144, 41, 'img_41-144.jpg', 'tmb_41-144.jpg', 'demo', '342,444', 'yes', 'no', NULL, NULL, NULL, NULL),
(145, 42, 'img_42-1.jpg', 'tmb_42-1.jpg', 'demo', '385,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(146, 43, 'img_43-1.jpg', 'tmb_43-1.jpg', 'demo', '1154,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(147, 43, 'img_43-147.jpg', 'tmb_43-147.jpg', 'demo', '1154,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(148, 43, 'img_43-148.jpg', 'tmb_43-148.jpg', 'demo', '1000,986', 'yes', 'no', NULL, NULL, NULL, NULL),
(149, 43, 'img_43-149.jpg', 'tmb_43-149.jpg', 'demo', '328,1000', 'yes', 'no', NULL, NULL, NULL, NULL),
(150, 44, 'img_44-1.jpg', 'tmb_44-1.jpg', 'demo', '385,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(151, 44, 'img_44-151.jpg', 'tmb_44-151.jpg', 'demo', '385,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(152, 45, 'img_45-1.jpg', 'tmb_45-1.jpg', 'demo', '425,510', 'yes', 'no', NULL, NULL, NULL, NULL),
(153, 45, 'img_45-153.jpg', 'tmb_45-153.jpg', 'demo', '425,510', 'yes', 'no', NULL, NULL, NULL, NULL),
(154, 45, 'img_45-154.jpg', 'tmb_45-154.jpg', 'demo', '333,500', 'yes', 'no', NULL, NULL, NULL, NULL),
(155, 46, 'img_46-1.jpg', 'tmb_46-1.jpg', 'demo', '1154,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(156, 46, 'img_46-156.jpg', 'tmb_46-156.jpg', 'demo', '1154,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(157, 46, 'img_46-157.jpg', 'tmb_46-157.jpg', 'demo', '1320,1320', 'yes', 'no', NULL, NULL, NULL, NULL),
(158, 46, 'img_46-158.jpg', 'tmb_46-158.jpg', 'demo', '1320,1320', 'yes', 'no', NULL, NULL, NULL, NULL),
(159, 47, 'img_47-1.jpg', 'tmb_47-1.jpg', 'demo', '1075,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(160, 47, 'img_47-160.jpg', 'tmb_47-160.jpg', 'demo', '1125,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(161, 48, 'img_48-1.jpg', 'tmb_48-1.jpg', 'demo', '1078,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(162, 48, 'img_48-162.jpg', 'tmb_48-162.jpg', 'demo', '1072,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(163, 49, 'img_49-1.jpg', 'tmb_49-1.jpg', 'demo', '1057,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(164, 50, 'img_50-1.jpg', 'tmb_50-1.jpg', 'demo', '1062,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(165, 50, 'img_50-165.jpg', 'tmb_50-165.jpg', 'demo', '898,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(166, 51, 'img_51-1.jpg', 'tmb_51-1.jpg', 'demo', '1057,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(167, 51, 'img_51-167.jpg', 'tmb_51-167.jpg', 'demo', '1125,1500', 'yes', 'no', NULL, NULL, NULL, NULL),
(168, 1, 'img_1-4.jpg', 'tmb_1-4.jpg', '', '360,140', 'yes', 'no', NULL, NULL, NULL, NULL),
(169, 2, 'img_2-8.jpg', 'tmb_2-8.jpg', '', '680,680', 'yes', 'no', NULL, NULL, NULL, NULL),
(170, 3, 'img_3-12.jpg', 'tmb_3-12.jpg', '', '680,680', 'yes', 'no', NULL, NULL, NULL, NULL),
(171, 4, 'img_4-16.jpg', 'tmb_4-16.jpg', 'demo', '703,388', 'yes', 'no', NULL, NULL, NULL, NULL),
(172, 5, 'img_5-20.jpg', 'tmb_5-20.jpg', 'demo', '580,275', 'yes', 'no', NULL, NULL, NULL, NULL),
(173, 6, 'img_6-24.jpg', 'tmb_6-24.jpg', 'demo', '580,275', 'yes', 'no', NULL, NULL, NULL, NULL),
(174, 7, 'img_7-28.png', 'tmb_7-28.png', 'demo', '580,275', 'yes', 'no', NULL, NULL, NULL, NULL),
(179, 101, 'img_101-179.jpg', 'tmb_101-179.jpg', 'demo', '1600,750', 'no', 'no', NULL, NULL, NULL, NULL),
(180, 101, 'img_101-180.jpg', 'tmb_101-180.jpg', 'demo', '1600,750', 'no', 'no', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblprice_points`
--

CREATE TABLE `tblprice_points` (
  `id` int(10) UNSIGNED NOT NULL,
  `priceFrom` varchar(30) NOT NULL DEFAULT '',
  `priceTo` varchar(30) NOT NULL DEFAULT '',
  `priceText` varchar(200) NOT NULL DEFAULT '',
  `orderBy` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblprice_points`
--

INSERT INTO `tblprice_points` (`id`, `priceFrom`, `priceTo`, `priceText`, `orderBy`) VALUES
(1, '0.00', '24.99', 'Under Twenty Five', 1),
(2, '25.00', '79', '', 2),
(3, '80', '100.00', '', 3),
(4, '101', '120.00', '', 4),
(5, '121', '3000', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `id` mediumint(10) UNSIGNED NOT NULL,
  `pName` varchar(250) NOT NULL DEFAULT '',
  `pTitle` varchar(250) NOT NULL DEFAULT '',
  `pMetaKeys` text,
  `pMetaDesc` text,
  `pTags` text,
  `pDescription` text,
  `pShortDescription` text,
  `pDownload` enum('yes','no') NOT NULL DEFAULT 'no',
  `pDownloadPath` varchar(250) NOT NULL DEFAULT '',
  `pDownloadLimit` int(7) NOT NULL DEFAULT '0',
  `pCode` varchar(250) NOT NULL DEFAULT '',
  `pStockNotify` int(7) NOT NULL DEFAULT '0',
  `pStock` int(7) NOT NULL DEFAULT '0',
  `pEnable` enum('yes','no') NOT NULL DEFAULT 'yes',
  `pDateAdded` date NOT NULL DEFAULT '0000-00-00',
  `pVisits` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `pVideo` varchar(250) NOT NULL DEFAULT '',
  `pVideo2` varchar(250) NOT NULL DEFAULT '',
  `pVideo3` varchar(250) NOT NULL DEFAULT '',
  `pWeight` varchar(50) NOT NULL DEFAULT '',
  `pPrice` varchar(20) NOT NULL DEFAULT '',
  `pPurPrice` varchar(20) NOT NULL DEFAULT '0.00',
  `pInsurance` varchar(10) NOT NULL DEFAULT '0.00',
  `pOfferExpiry` date NOT NULL DEFAULT '0000-00-00',
  `pOffer` varchar(20) NOT NULL DEFAULT '',
  `pMultiBuy` int(10) NOT NULL DEFAULT '0',
  `rssBuildDate` varchar(35) NOT NULL DEFAULT '',
  `enDisqus` enum('yes','no') NOT NULL DEFAULT 'no',
  `freeShipping` enum('yes','no') NOT NULL DEFAULT 'no',
  `pPurchase` enum('yes','no') NOT NULL DEFAULT 'yes',
  `minPurchaseQty` int(10) NOT NULL DEFAULT '0',
  `maxPurchaseQty` int(10) NOT NULL DEFAULT '0',
  `countryRestrictions` text,
  `checkoutTextDisplay` varchar(100) NOT NULL DEFAULT '',
  `pNotes` text,
  `rwslug` varchar(250) NOT NULL DEFAULT '',
  `pAvailableText` varchar(250) NOT NULL DEFAULT '',
  `pCube` int(10) NOT NULL DEFAULT '0',
  `pGuardian` int(10) NOT NULL DEFAULT '0',
  `dropshipping` int(8) NOT NULL DEFAULT '0',
  `expiry` date NOT NULL DEFAULT '0000-00-00',
  `exp_price` varchar(10) NOT NULL DEFAULT '',
  `exp_special` enum('yes','no') NOT NULL DEFAULT 'no',
  `exp_send` enum('yes','no') NOT NULL DEFAULT 'no',
  `exp_text` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`id`, `pName`, `pTitle`, `pMetaKeys`, `pMetaDesc`, `pTags`, `pDescription`, `pShortDescription`, `pDownload`, `pDownloadPath`, `pDownloadLimit`, `pCode`, `pStockNotify`, `pStock`, `pEnable`, `pDateAdded`, `pVisits`, `pVideo`, `pVideo2`, `pVideo3`, `pWeight`, `pPrice`, `pPurPrice`, `pInsurance`, `pOfferExpiry`, `pOffer`, `pMultiBuy`, `rssBuildDate`, `enDisqus`, `freeShipping`, `pPurchase`, `minPurchaseQty`, `maxPurchaseQty`, `countryRestrictions`, `checkoutTextDisplay`, `pNotes`, `rwslug`, `pAvailableText`, `pCube`, `pGuardian`, `dropshipping`, `expiry`, `exp_price`, `exp_special`, `exp_send`, `exp_text`) VALUES
(1, 'Chobe Day Trip Ex Zimbabwe', 'Chobe Day Trip Ex Zimbabwe', 'Chobe', 'Chobe', 'Chobe, Zimbabwe, Tourist, Leave, Victoria, Falls, Travelling, Through, Zambezi, National, Parkto, Kazungula, Drive, Vehicle, Ready, Cruise, Arranged', 'Chobe Day Trip from Zimbabwe is a must do for any tourist in the area. A bus will leave Victoria Falls at 08:00 travelling through the Zambezi National Parkto Kazungula Border. You will be put on a game drive vehicle ready to take you to the Chobe National Park for 3 hours. A boat cruise is arranged for the afternoon.', 'Chobe Day Trip from Zimbabwe is a must do for any tourist in the area. A bus will leave Victoria Falls at 08:00 travelling through the Zambezi National Parkto Kazungula Border. You will be put on a game drive vehicle ready to take you to the Chobe National Park for 3 hours. A boat cruise is arranged for the afternoon.', 'no', '', 0, '001', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '0', '1', '0.00', '0.00', '0000-00-00', '', 0, 'Thu, 27 Sep 2018 10:04:39 +0000', 'yes', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', 'Enjoy your Trip on Magnificent Chobe', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(2, 'Game Drive 3 hrs Chobe National Park', 'Game Drive 3 hrs Chobe National Park', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 0, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '0', '72.00', '42.00', '0.00', '0000-00-00', '', 0, 'Thu, 27 Sep 2018 11:37:05 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(3, 'Accomodation Rainbow Hwange', 'Accomodation Rainbow Hwange Safari Lodge', 'namibia, Hwange', 'category name', 'Comfortable, Periodic, Visits, Elephants, Hwange, National', 'Stay at the most comfortable of all in Hwange.Excellent cuisine, and periodic visits from the Elephants from the Hwange National Park.', 'Stay at the most comfortable of all in Hwange.Excellent cuisine, and periodic visits from the Elephants from the Hwange National Park.', 'no', '', 0, '11001', 3, 9, 'yes', '2018-12-13', 16, 'https://www.youtube.com/embed/BdqYsE38xzs', 'https://www.youtube.com/embed/8ahgyvCDHE4', 'https://www.youtube.com/embed/GeuB311dZPk', '0', '288.00', '100.00', '0.00', '2019-01-31', '50.00', 0, 'Fri, 25 Jan 2019 11:57:02 +0000', 'yes', 'yes', 'yes', 0, 3, 'a:1:{i:0;s:3:\"184\";}', 'dsfsf', NULL, '', 'Available', 111111, 22222, 0, '0000-00-00', '', 'no', 'no', NULL),
(4, 'Elephant Ride 2hrs Zimbabwe', '', '', '', '', 'Elephant rides into the Zambezi National Park', 'Elephant rides into the Zambezi National Park', 'no', '', 0, '', 0, 1, 'yes', '2018-12-13', 3, '', '', '', '0', '120.00', '80.00', '0.00', '0000-00-00', '', 0, 'Thu, 27 Sep 2018 12:09:16 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(5, 'Chinotimba Tour', 'Chinotimba Tour', '', '', '', '', 'An unforgettable experience that gives you a perfect understanding of local cultures and foods. You will meet and interact with very sociable and welcoming locals displaying all their wares.', 'no', '', 0, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '0', '22.00', '12.00', '0.00', '0000-00-00', '', 0, 'Fri, 28 Sep 2018 03:17:36 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(6, 'Canoe - Overnight and One Day - Zimbabwe', 'Canoe - Overnight and One Day - Zimbabwe', '', '', '', '', '', 'no', '', 0, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '0', '66.00', '0.00', '0.00', '0000-00-00', '', 0, 'Fri, 28 Sep 2018 03:19:56 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(7, 'Cruise - Zambezi Explorer - Sunset Cruise Signature Deck', '', '', '', '', '', 'Majextic Victoria Falls Cruise for the perfect holiday', 'no', '', 0, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '0', '88.00', '45.00', '0.00', '0000-00-00', '', 0, 'Fri, 28 Sep 2018 03:22:49 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(8, 'Harare - Eastern Highlands & Masvingo', 'Harare - Eastern Highlands & Masvingo', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 1, '', '', '', '42', '8', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(101, 'Goa', 'Goa Trip', 'goa, tripo', 'trip', 'Lorem, Ipsum, Simply, Dummy, Printing, Typesetting, Standard, Since, Unknown, Printer, Galley, Scrambled, Specimen, Survived, Electronic, Remaining, Essentially, Popularised, Release, Letraset, Sheets, Containing, Recently, Desktop, Publishing, Software, Aldus, Pagemaker, Including, Versions', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'no', '', 0, '123456789', 3, 9, 'yes', '2019-01-23', 8, 'https://www.youtube.com/embed/pvf0zSh3rDo', 'https://www.youtube.com/embed/BdqYsE38xzs', 'https://www.youtube.com/embed/PNIL4b3e6MQ', '0', '3000.00', '2500.00', '0.00', '2019-01-31', '2300.00', 0, 'Thu, 24 Jan 2019 10:29:56 +0000', 'yes', 'no', 'yes', 0, 5, 'a:2:{i:0;s:3:\"160\";i:1;s:3:\"184\";}', 'Nothing', NULL, '', 'Available', 123456, 123789, 0, '2019-01-31', '', 'no', 'no', NULL),
(11, 'Accomodation Room Nights', 'Accomodation Room Nights', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'yes', '', 1, '', 0, 1, 'yes', '2018-12-13', 8, '', '', '', '', '11.00', '0.00', '0.00', '0000-00-00', '', 0, 'Sun, 16 Dec 2018 12:46:31 +0000', 'no', 'yes', 'yes', 0, 0, '', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(12, 'Adrenaline High Wire -  Half Day - Zimbabwe (Flying Fox, Zip Line & Gorge Swing)', 'Adrenaline High Wire -  Half Day - Zimbabwe (Flying Fox, Zip Line & Gorge Swing)', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 0, 'yes', '2018-12-13', 1, '', '', '', '42', '12', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(13, 'Adventure Pass - Zimbabwe', 'Adventure Pass - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 3, '', '', '', '0', '130.00', '0.00', '0.00', '0000-00-00', '', 0, 'Mon, 21 Jan 2019 14:30:23 +0000', 'yes', 'yes', 'no', 0, 1, '', '', NULL, '', 'on', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(14, 'Bird Watching Zimbabwe(Half Day)', 'Bird Watching Zimbabwe(Half Day)', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 14, '', '', '', '42', '14', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 1, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(15, 'Bridge Activities (Zimbabwe)', 'Bridge Activities (Zimbabwe)', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '15', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(16, 'Bridge Tour', 'Bridge Tour', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 3, '', '', '', '42', '16', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(17, 'Bulawayo', 'Bulawayo', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 2, '', '', '', '42', '17', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(18, 'Bungi Jump Solo - Transfers Excluded', 'Bungi Jump Solo - Transfers Excluded', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '18', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(19, 'Bushtracks Express Dinner run - Zim', 'Bushtracks Express Dinner run - Zim', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '19', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(20, 'Canoe - Overnight and One Day - Zimbabwe', 'Canoe - Overnight and One Day - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '20', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(21, 'Canoe - Two Day and Two Night - Zimbabwe', 'Canoe - Two Day and Two Night - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '21', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(22, 'Canoe - Two Days and One Night - Zimbabwe', 'Canoe - Two Days and One Night - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '22', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(23, 'Canoe - Upper Zambezi - Zimbabwe', 'Canoe - Upper Zambezi - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '23', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(24, 'Canoeing Vic Falls (Zimbabwe)', 'Canoeing Vic Falls (Zimbabwe)', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '24', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(25, 'Canopy Tour Combo(A Flying Fox, Zip Line, Gorge Swing & Vic Falls Canopy Tour)', 'Canopy Tour Combo(A Flying Fox, Zip Line, Gorge Swing & Vic Falls Canopy Tour)', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '25', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(26, 'Canopy Tours Vic Falls', 'Canopy Tours Vic Falls', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '26', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(28, 'City Historical Buildings Tour', 'City Historical Buildings Tour', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '28', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(29, 'Combo - Rafting and Riverboard - Zimbabwe', 'Combo - Rafting and Riverboard - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '29', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(30, 'Concerts', 'Concerts', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '30', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(31, 'Concerts', 'Concerts', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '31', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(32, 'Conference Packages', 'Conference Packages', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '32', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(33, 'Conference Packages', 'Conference Packages', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '33', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(34, 'Conference Packages', 'Conference Packages', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '34', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(35, 'Cruise - Zambezi Explorer - Sunset Cruise', 'Cruise - Zambezi Explorer - Sunset Cruise', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '35', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(36, 'Cruise - Zambezi Explorer - Sunset Cruise Signature Deck', 'Cruise - Zambezi Explorer - Sunset Cruise Signature Deck', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '36', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(37, 'Cruises Vic Falls (Zimbabwe)', 'Cruises Vic Falls (Zimbabwe)', '', '', '', 'Elephant rides into the Zambezi National Park', 'Elephant rides into the Zambezi National Park', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '80', '37', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(38, 'Cultural Connection (Home Lunch + Village Tour)', 'Cultural Connection (Home Lunch + Village Tour)', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '38', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(39, 'Day Trip - Chobe Half day Trip - ex Zimbabwe with lunch', 'Day Trip - Chobe Half day Trip - ex Zimbabwe with lunch', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '39', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(40, 'Day Trip - Chobe Half Day Trip - ex Zimbabwe, no lunch', 'Day Trip - Chobe Half Day Trip - ex Zimbabwe, no lunch', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '40', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(41, 'Day Trip - Chobe Trip  - Botswana ex Zimbabwe', 'Day Trip - Chobe Trip  - Botswana ex Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '41', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(42, 'Day Trip - Chobe Trip - ex Kazungula/Imbabala - Zimbabwe', 'Day Trip - Chobe Trip - ex Kazungula/Imbabala - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '42', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(43, 'Day Trip - Chobe Trip - Tour Leader - ex Zimbabwe', 'Day Trip - Chobe Trip - Tour Leader - ex Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '43', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(44, 'Day trips Vic Falls (Zimbabwe)', 'Day trips Vic Falls (Zimbabwe)', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '44', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(45, 'Dining - Victoria Falls', 'Dining - Victoria Falls', 'Chobe', 'Chobe', 'Chobe, Zimbabwe, Tourist, Leave, Victoria, Falls, Travelling, Through, Zambezi, National, Parkto, Kazungula, Drive, Vehicle, Ready, Cruise, Arranged', 'Chobe Day Trip from Zimbabwe is a must do for any tourist in the area. A bus will leave Victoria Falls at 08:00 travelling through the Zambezi National Parkto Kazungula Border. You will be put on a game drive vehicle ready to take you to the Chobe National Park for 3 hours. A boat cruise is arranged for the afternoon.', 'Chobe Day Trip from Zimbabwe is a must do for any tourist in the area. A bus will leave Victoria Falls at 08:00 travelling through the Zambezi National Parkto Kazungula Border. You will be put on a game drive vehicle ready to take you to the Chobe National Park for 3 hours. A boat cruise is arranged for the afternoon.', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '0', '45', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(46, 'Dinner - Dinner Cruise  - Zimbabwe (Transfers Included)', 'Dinner - Dinner Cruise  - Zimbabwe (Transfers Included)', '', '', 'Comfortable, Periodic, Visits, Elephants, Hwange, National', '[img]http://www.example.com/picture.png[/img]Stay at the most comfortable of all in Hwange.Excellent cuisine, and periodic visits from the Elephants from the Hwange National Park.', 'Stay at the most comfortable of all in Hwange.Excellent cuisine, and periodic visits from the Elephants from the Hwange National Park.', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '100', '46', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(47, 'Dinner - Heritage Azambezi River Lodge', 'Dinner - Heritage Azambezi River Lodge', '', '', '', '', '', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '0', '47', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(48, 'Dinner - Home Hosted', 'Dinner - Home Hosted', '', '', '', '', 'An unforgettable experience that gives you a perfect understanding of local cultures and foods. You will meet and interact with very sociable and welcoming locals displaying all their wares.', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '12', '48', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(49, 'Dinner - Lookout Cafe Ala Carte - Transfers Excluded', 'Dinner - Lookout Cafe Ala Carte - Transfers Excluded', 'Chobe', 'Chobe', 'Chobe, Zimbabwe, Tourist, Leave, Victoria, Falls, Travelling, Through, Zambezi, National, Parkto, Kazungula, Drive, Vehicle, Ready, Cruise, Arranged', 'Chobe Day Trip from Zimbabwe is a must do for any tourist in the area. A bus will leave Victoria Falls at 08:00 travelling through the Zambezi National Parkto Kazungula Border. You will be put on a game drive vehicle ready to take you to the Chobe National Park for 3 hours. A boat cruise is arranged for the afternoon.', 'Chobe Day Trip from Zimbabwe is a must do for any tourist in the area. A bus will leave Victoria Falls at 08:00 travelling through the Zambezi National Parkto Kazungula Border. You will be put on a game drive vehicle ready to take you to the Chobe National Park for 3 hours. A boat cruise is arranged for the afternoon.', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '0', '49', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(50, 'Dinner - Lookout Cafe Ala Carte - Transfers Included', 'Dinner - Lookout Cafe Ala Carte - Transfers Included', '', '', '', '', 'Majextic Victoria Falls Cruise for the perfect holiday', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 1, '', '', '', '45', '50', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(51, 'Elephant Art Safari & Lunch', 'Elephant Art Safari & Lunch', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 1, '', '', '', '42', '51', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(52, 'Elephant Encounter - Walk with Giants - AM/Mid Morning/PM - Zimbabwe', 'Elephant Encounter - Walk with Giants - AM/Mid Morning/PM - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '52', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(53, 'Elephant Interation and Lunch (GROUPS ONLY) - Zimbabwe', 'Elephant Interation and Lunch (GROUPS ONLY) - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '53', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(54, 'Events', 'Events', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '54', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(55, 'Exhibitions', 'Exhibitions', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '55', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(56, 'Face Towels - One per person - Zimbabwe', 'Face Towels - One per person - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '56', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(57, 'Fishing - Fishing Safari (3 Hours)- Zimbabwe', 'Fishing - Fishing Safari (3 Hours)- Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '57', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(58, 'Flying Fox - Zimbabwe', 'Flying Fox - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '58', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(59, 'Foreign Language Guide per day - French - Zimbabwe', 'Foreign Language Guide per day - French - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '59', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(60, 'Foreign Language Guide per day - German - Zimbabwe', 'Foreign Language Guide per day - German - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '60', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(61, 'Foreign Language Guide per day - Italian - Zimbabwe', 'Foreign Language Guide per day - Italian - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '61', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL);
INSERT INTO `tblproducts` (`id`, `pName`, `pTitle`, `pMetaKeys`, `pMetaDesc`, `pTags`, `pDescription`, `pShortDescription`, `pDownload`, `pDownloadPath`, `pDownloadLimit`, `pCode`, `pStockNotify`, `pStock`, `pEnable`, `pDateAdded`, `pVisits`, `pVideo`, `pVideo2`, `pVideo3`, `pWeight`, `pPrice`, `pPurPrice`, `pInsurance`, `pOfferExpiry`, `pOffer`, `pMultiBuy`, `rssBuildDate`, `enDisqus`, `freeShipping`, `pPurchase`, `minPurchaseQty`, `maxPurchaseQty`, `countryRestrictions`, `checkoutTextDisplay`, `pNotes`, `rwslug`, `pAvailableText`, `pCube`, `pGuardian`, `dropshipping`, `expiry`, `exp_price`, `exp_special`, `exp_send`, `exp_text`) VALUES
(62, 'Foreign Language Guide per day - Spanish - Zimbabwe', 'Foreign Language Guide per day - Spanish - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '62', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(63, 'Full Day Great Zimbabwe', 'Full Day Great Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 1, '', '', '', '42', '63', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(64, 'Full Day Matopos', 'Full Day Matopos', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '64', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(65, 'Game Drive - VF Pvt Game Reserve - Evening Game Drive & Bush Dinner', 'Game Drive - VF Pvt Game Reserve - Evening Game Drive & Bush Dinner', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '65', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(66, 'Game Drive - VF Pvt Game Reserve - Evening Game Drive only', 'Game Drive - VF Pvt Game Reserve - Evening Game Drive only', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '66', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(67, 'Game Drive - VF Pvt Game Reserve - Game Drive AM/PM', 'Game Drive - VF Pvt Game Reserve - Game Drive AM/PM', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '67', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(68, 'Game Drive - VF Pvt Game Reserve - Morning or Afternoon Rhino Search', 'Game Drive - VF Pvt Game Reserve - Morning or Afternoon Rhino Search', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '68', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(69, 'Game Drive - Zambezi Park AM or PM - Zimbabwe', 'Game Drive - Zambezi Park AM or PM - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '69', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(70, 'Game Walk - Walking Safari am/pm - Zim, excludes park fees', 'Game Walk - Walking Safari am/pm - Zim, excludes park fees', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '70', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(71, 'Going Green', 'Going Green', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '71', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(72, 'Gorge Swing - Zimbabwe', 'Gorge Swing - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '72', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(73, 'Gorge Swing-Tandem - Zimbabwe', 'Gorge Swing-Tandem - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '73', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(74, 'Half Day Amagugu Heritage Centre Tour', 'Half Day Amagugu Heritage Centre Tour', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '74', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(75, 'Half Day Chipanagali', 'Half Day Chipanagali', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '75', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(76, 'Half Day Matopos', 'Half Day Matopos', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '76', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(77, 'Harare City Tour', 'Harare City Tour', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '77', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(78, 'Helicopter Flight - 12/13 Minutes - Zimbabwe', 'Helicopter Flight - 12/13 Minutes - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '78', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(79, 'Helicopter Flight - 25/30 Minutes - Zimbabwe', 'Helicopter Flight - 25/30 Minutes - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '79', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(80, 'Highfields/Mbare Township Tours', 'Highfields/Mbare Township Tours', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 1, '', '', '', '42', '80', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(81, 'Horse Riding - Experienced (4.5 Hours) - Zimbabwe', 'Horse Riding - Experienced (4.5 Hours) - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 1, '', '', '', '42', '81', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(82, 'Horse Riding - Full Day - Zimbabwe', 'Horse Riding - Full Day - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '82', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(83, 'Horse Riding - Nov (2.5 - 3 Hours) - Zimbabwe', 'Horse Riding - Nov (2.5 - 3 Hours) - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '83', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(84, 'Lion & Lake Chivero Game Drive', 'Lion & Lake Chivero Game Drive', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '84', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(85, 'Luggage Truck VF Hotels - Kazungula Border Less than 100 Pax - Zimbabwe', 'Luggage Truck VF Hotels - Kazungula Border Less than 100 Pax - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '85', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(86, 'Luggage Truck VF Hotels - Kazungula Border Less than 50 Pax - Zimbabwe', 'Luggage Truck VF Hotels - Kazungula Border Less than 50 Pax - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '86', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(87, 'Luggage Truck VFA - Kazungula Border Less than 100 Pax - Zimbabwe', 'Luggage Truck VFA - Kazungula Border Less than 100 Pax - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '87', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(88, 'Luggage Truck VFA - Kazungula Border Less than 50 Pax - Zimbabwe', 'Luggage Truck VFA - Kazungula Border Less than 50 Pax - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '88', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(89, 'Luggage Truck VFA - VF Hotels Less than 100 Pax - Zimbabwe', 'Luggage Truck VFA - VF Hotels Less than 100 Pax - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '89', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(90, 'Luggage Truck VFA - VF Hotels Less than 50 Pax - Zimbabwe', 'Luggage Truck VFA - VF Hotels Less than 50 Pax - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '90', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(91, 'Lunch -  Lookout Cafe - Transfers Included', 'Lunch -  Lookout Cafe - Transfers Included', '', '', '', '', 'Majextic Victoria Falls Cruise for the perfect holiday', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '45', '91', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(92, 'Lunch - Home Hosted', 'Lunch - Home Hosted', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '92', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(93, 'Lunch - Lookout Caf', 'Lunch - Lookout Caf', '', '', '', 'Elephant rides into the Zambezi National Park', 'Elephant rides into the Zambezi National Park', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '80', '93', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(94, 'Meet and Greet -  Zimbabwe', 'Meet and Greet -  Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '94', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(95, 'Meet and Greet Rovos - Zimbabwe', 'Meet and Greet Rovos - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '95', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(96, 'Microlight Flight - 12/15 Minutes - Zambia', 'Microlight Flight - 12/15 Minutes - Zambia', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '96', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(97, 'Microlight Flight - 25/30 Minutes - Zambia', 'Microlight Flight - 25/30 Minutes - Zambia', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '97', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(98, 'Mineral Water - Zimbabwe', 'Mineral Water - Zimbabwe', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 1, 'yes', '2018-12-13', 0, '', '', '', '42', '98', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(99, 'Mwanga Lodge', 'Mwanga Lodge', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 0, 'yes', '2018-12-13', 1, '', '', '', '42', '99', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL),
(100, 'National Botanical Gardens', 'National Botanical Gardens', 'Chobe', 'Chobe', 'Drive, Chobe, National, Activity, Takes, Hours, Entertained, Herds, Elephants, Occasionaly, Lions', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc.', 'Game Drive Into Chobe National Park. This activity takes 3 hours and you will be entertained to huge herds of elephants on the Chobe Park. Occasionaly you can see lions etc', 'no', '', 1, '', 0, 0, 'yes', '2018-12-13', 16, '', '', '', '42', '100', '0.00', '0.00', '0000-00-00', '0.00', 0, 'Fri, 28 Sep 2018 03:56:53 +0000', 'no', 'no', 'yes', 0, 0, 'a:2:{i:0;s:3:\"183\";i:1;s:3:\"184\";}', '', NULL, '', '', 0, 0, 0, '0000-00-00', '', 'no', 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblprod_brand`
--

CREATE TABLE `tblprod_brand` (
  `id` int(4) UNSIGNED NOT NULL,
  `product` int(8) NOT NULL DEFAULT '0',
  `brand` int(8) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblprod_brand`
--

INSERT INTO `tblprod_brand` (`id`, `product`, `brand`) VALUES
(1, 9, 9),
(2, 8, 8),
(3, 34, 32),
(4, 20, 20),
(5, 33, 45),
(6, 28, 28),
(7, 1, 1),
(8, 46, 40),
(9, 35, 32),
(10, 44, 38),
(11, 37, 33),
(12, 23, 24),
(13, 45, 39),
(14, 21, 21),
(15, 22, 22),
(16, 11, 11),
(17, 24, 23),
(18, 38, 32),
(19, 31, 30),
(20, 49, 43),
(21, 7, 7),
(22, 41, 35),
(23, 4, 4),
(24, 50, 44),
(25, 42, 36),
(26, 17, 16),
(27, 25, 25),
(28, 14, 14),
(29, 26, 26),
(30, 19, 19),
(31, 40, 34),
(32, 2, 2),
(33, 12, 12),
(34, 29, 29),
(35, 6, 6),
(75, 3, 3),
(37, 30, 46),
(38, 27, 27),
(39, 36, 32),
(40, 15, 15),
(41, 48, 42),
(42, 5, 5),
(43, 32, 31),
(44, 51, 44),
(45, 47, 41),
(46, 10, 10),
(47, 16, 18),
(48, 43, 37),
(49, 18, 17),
(50, 13, 13),
(51, 39, 33),
(52, 1, 1),
(53, 1, 2),
(54, 2, 1),
(74, 3, 4),
(58, 4, 2),
(59, 5, 2),
(60, 6, 6),
(61, 7, 2),
(73, 101, 6),
(72, 101, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblprod_category`
--

CREATE TABLE `tblprod_category` (
  `id` int(4) UNSIGNED NOT NULL,
  `product` int(8) NOT NULL DEFAULT '0',
  `category` int(8) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblprod_category`
--

INSERT INTO `tblprod_category` (`id`, `product`, `category`) VALUES
(1, 1, 1),
(2, 1, 16),
(3, 1, 21),
(4, 1, 9),
(5, 2, 16),
(6, 2, 21),
(7, 2, 17),
(931, 3, 9),
(12, 4, 19),
(13, 4, 9),
(14, 5, 19),
(15, 5, 9),
(16, 6, 10),
(17, 6, 19),
(18, 6, 9),
(19, 7, 10),
(20, 7, 19),
(21, 7, 9),
(22, 7, 11),
(23, 8, 10),
(24, 8, 19),
(25, 8, 9),
(885, 9, 9),
(35, 12, 10),
(36, 12, 19),
(37, 12, 9),
(928, 101, 17),
(930, 3, 17),
(922, 13, 11),
(41, 14, 10),
(42, 14, 19),
(43, 14, 9),
(44, 15, 10),
(45, 15, 19),
(46, 15, 9),
(47, 16, 10),
(48, 16, 19),
(49, 16, 9),
(50, 17, 10),
(51, 17, 19),
(52, 17, 9),
(53, 18, 10),
(54, 18, 19),
(55, 18, 9),
(56, 19, 10),
(57, 19, 19),
(58, 19, 9),
(59, 20, 10),
(60, 20, 19),
(61, 20, 9),
(62, 21, 10),
(63, 21, 19),
(64, 21, 9),
(65, 22, 10),
(66, 22, 19),
(67, 22, 9),
(68, 23, 10),
(69, 23, 19),
(70, 23, 9),
(71, 24, 10),
(72, 24, 19),
(73, 24, 9),
(74, 25, 10),
(75, 25, 19),
(76, 25, 9),
(77, 26, 10),
(78, 26, 19),
(79, 26, 9),
(83, 28, 10),
(84, 28, 19),
(85, 28, 9),
(86, 29, 10),
(87, 29, 19),
(88, 29, 9),
(89, 30, 10),
(90, 30, 19),
(91, 30, 9),
(92, 31, 10),
(93, 31, 19),
(94, 31, 9),
(95, 32, 10),
(96, 32, 19),
(97, 32, 9),
(98, 33, 10),
(99, 33, 19),
(100, 33, 9),
(101, 34, 10),
(102, 34, 19),
(103, 34, 9),
(104, 35, 10),
(105, 35, 19),
(106, 35, 9),
(107, 36, 10),
(108, 36, 19),
(109, 36, 9),
(110, 37, 10),
(111, 37, 19),
(112, 37, 9),
(113, 38, 10),
(114, 38, 19),
(115, 38, 9),
(116, 39, 10),
(117, 39, 19),
(118, 39, 9),
(119, 40, 10),
(120, 40, 19),
(121, 40, 9),
(122, 41, 10),
(123, 41, 19),
(124, 41, 9),
(125, 42, 10),
(126, 42, 19),
(127, 42, 9),
(128, 43, 10),
(129, 43, 19),
(130, 43, 9),
(131, 44, 10),
(132, 44, 19),
(133, 44, 9),
(134, 45, 10),
(135, 45, 19),
(136, 45, 9),
(137, 46, 10),
(138, 46, 19),
(139, 46, 9),
(140, 47, 10),
(141, 47, 19),
(142, 47, 9),
(143, 48, 10),
(144, 48, 19),
(145, 48, 9),
(146, 49, 10),
(147, 49, 19),
(148, 49, 9),
(149, 50, 10),
(150, 50, 19),
(151, 50, 9),
(152, 51, 10),
(153, 51, 19),
(154, 51, 9),
(155, 52, 10),
(156, 52, 19),
(157, 52, 9),
(158, 53, 10),
(159, 53, 19),
(160, 53, 9),
(161, 54, 10),
(162, 54, 19),
(163, 54, 9),
(164, 55, 10),
(165, 55, 19),
(166, 55, 9),
(167, 56, 10),
(168, 56, 19),
(169, 56, 9),
(170, 57, 10),
(171, 57, 19),
(172, 57, 9),
(173, 58, 10),
(174, 58, 19),
(175, 58, 9),
(176, 59, 10),
(177, 59, 19),
(178, 59, 9),
(179, 60, 10),
(180, 60, 19),
(181, 60, 9),
(182, 61, 10),
(183, 61, 19),
(184, 61, 9),
(185, 62, 10),
(186, 62, 19),
(187, 62, 9),
(188, 63, 10),
(189, 63, 19),
(190, 63, 9),
(191, 64, 10),
(192, 64, 19),
(193, 64, 9),
(194, 65, 10),
(195, 65, 19),
(196, 65, 9),
(197, 66, 10),
(198, 66, 19),
(199, 66, 9),
(200, 67, 10),
(201, 67, 19),
(202, 67, 9),
(203, 68, 10),
(204, 68, 19),
(205, 68, 9),
(206, 69, 10),
(207, 69, 19),
(208, 69, 9),
(209, 70, 10),
(210, 70, 19),
(211, 70, 9),
(212, 71, 10),
(213, 71, 19),
(214, 71, 9),
(215, 72, 10),
(216, 72, 19),
(217, 72, 9),
(218, 73, 10),
(219, 73, 19),
(220, 73, 9),
(221, 74, 10),
(222, 74, 19),
(223, 74, 9),
(224, 75, 10),
(225, 75, 19),
(226, 75, 9),
(227, 76, 10),
(228, 76, 19),
(229, 76, 9),
(230, 77, 10),
(231, 77, 19),
(232, 77, 9),
(233, 78, 10),
(234, 78, 19),
(235, 78, 9),
(236, 79, 10),
(237, 79, 19),
(238, 79, 9),
(239, 80, 10),
(240, 80, 19),
(241, 80, 9),
(242, 81, 10),
(243, 81, 19),
(244, 81, 9),
(245, 82, 10),
(246, 82, 19),
(247, 82, 9),
(248, 83, 10),
(249, 83, 19),
(250, 83, 9),
(251, 84, 10),
(252, 84, 19),
(253, 84, 9),
(254, 85, 10),
(255, 85, 19),
(256, 85, 9),
(257, 86, 10),
(258, 86, 19),
(259, 86, 9),
(260, 87, 10),
(261, 87, 19),
(262, 87, 9),
(263, 88, 10),
(264, 88, 19),
(265, 88, 9),
(266, 89, 10),
(267, 89, 19),
(268, 89, 9),
(269, 90, 10),
(270, 90, 19),
(271, 90, 9),
(272, 91, 10),
(273, 91, 19),
(274, 91, 9),
(275, 92, 10),
(276, 92, 19),
(277, 92, 9),
(278, 93, 10),
(279, 93, 19),
(280, 93, 9),
(281, 94, 10),
(282, 94, 19),
(283, 94, 9),
(284, 95, 10),
(285, 95, 19),
(286, 95, 9),
(287, 96, 10),
(288, 96, 19),
(289, 96, 9),
(290, 97, 10),
(291, 97, 19),
(292, 97, 9),
(293, 98, 10),
(294, 98, 19),
(295, 98, 9),
(296, 99, 10),
(297, 99, 19),
(298, 99, 9),
(299, 100, 10),
(300, 100, 19),
(301, 100, 9),
(302, 8, 16),
(303, 8, 21),
(304, 8, 10),
(305, 8, 19),
(306, 8, 9),
(307, 8, 11),
(884, 9, 19),
(883, 9, 17),
(882, 9, 10),
(929, 3, 10),
(880, 9, 21),
(879, 9, 16),
(878, 11, 11),
(877, 11, 9),
(876, 11, 19),
(875, 11, 10),
(874, 11, 21),
(873, 11, 16),
(326, 12, 16),
(327, 12, 21),
(328, 12, 10),
(329, 12, 19),
(330, 12, 9),
(331, 12, 11),
(921, 13, 9),
(920, 13, 19),
(919, 13, 10),
(918, 13, 23),
(917, 13, 21),
(916, 13, 16),
(338, 14, 16),
(339, 14, 21),
(340, 14, 10),
(341, 14, 19),
(342, 14, 9),
(343, 14, 11),
(344, 15, 16),
(345, 15, 21),
(346, 15, 10),
(347, 15, 19),
(348, 15, 9),
(349, 15, 11),
(350, 16, 16),
(351, 16, 21),
(352, 16, 10),
(353, 16, 19),
(354, 16, 9),
(355, 16, 11),
(356, 17, 16),
(357, 17, 21),
(358, 17, 10),
(359, 17, 19),
(360, 17, 9),
(361, 17, 11),
(362, 18, 16),
(363, 18, 21),
(364, 18, 10),
(365, 18, 19),
(366, 18, 9),
(367, 18, 11),
(368, 19, 16),
(369, 19, 21),
(370, 19, 10),
(371, 19, 19),
(372, 19, 9),
(373, 19, 11),
(374, 20, 16),
(375, 20, 21),
(376, 20, 10),
(377, 20, 19),
(378, 20, 9),
(379, 20, 11),
(380, 21, 16),
(381, 21, 21),
(382, 21, 10),
(383, 21, 19),
(384, 21, 9),
(385, 21, 11),
(386, 22, 16),
(387, 22, 21),
(388, 22, 10),
(389, 22, 19),
(390, 22, 9),
(391, 22, 11),
(392, 23, 16),
(393, 23, 21),
(394, 23, 10),
(395, 23, 19),
(396, 23, 9),
(397, 23, 11),
(398, 24, 16),
(399, 24, 21),
(400, 24, 10),
(401, 24, 19),
(402, 24, 9),
(403, 24, 11),
(404, 25, 16),
(405, 25, 21),
(406, 25, 10),
(407, 25, 19),
(408, 25, 9),
(409, 25, 11),
(410, 26, 16),
(411, 26, 21),
(412, 26, 10),
(413, 26, 19),
(414, 26, 9),
(415, 26, 11),
(422, 28, 16),
(423, 28, 21),
(424, 28, 10),
(425, 28, 19),
(426, 28, 9),
(427, 28, 11),
(428, 29, 16),
(429, 29, 21),
(430, 29, 10),
(431, 29, 19),
(432, 29, 9),
(433, 29, 11),
(434, 30, 16),
(435, 30, 21),
(436, 30, 10),
(437, 30, 19),
(438, 30, 9),
(439, 30, 11),
(440, 31, 16),
(441, 31, 21),
(442, 31, 10),
(443, 31, 19),
(444, 31, 9),
(445, 31, 11),
(446, 32, 16),
(447, 32, 21),
(448, 32, 10),
(449, 32, 19),
(450, 32, 9),
(451, 32, 11),
(452, 33, 16),
(453, 33, 21),
(454, 33, 10),
(455, 33, 19),
(456, 33, 9),
(457, 33, 11),
(458, 34, 16),
(459, 34, 21),
(460, 34, 10),
(461, 34, 19),
(462, 34, 9),
(463, 34, 11),
(464, 35, 16),
(465, 35, 21),
(466, 35, 10),
(467, 35, 19),
(468, 35, 9),
(469, 35, 11),
(470, 36, 16),
(471, 36, 21),
(472, 36, 10),
(473, 36, 19),
(474, 36, 9),
(475, 36, 11),
(476, 37, 16),
(477, 37, 21),
(478, 37, 10),
(479, 37, 19),
(480, 37, 9),
(481, 37, 11),
(482, 38, 16),
(483, 38, 21),
(484, 38, 10),
(485, 38, 19),
(486, 38, 9),
(487, 38, 11),
(488, 39, 16),
(489, 39, 21),
(490, 39, 10),
(491, 39, 19),
(492, 39, 9),
(493, 39, 11),
(494, 40, 16),
(495, 40, 21),
(496, 40, 10),
(497, 40, 19),
(498, 40, 9),
(499, 40, 11),
(500, 41, 16),
(501, 41, 21),
(502, 41, 10),
(503, 41, 19),
(504, 41, 9),
(505, 41, 11),
(506, 42, 16),
(507, 42, 21),
(508, 42, 10),
(509, 42, 19),
(510, 42, 9),
(511, 42, 11),
(512, 43, 16),
(513, 43, 21),
(514, 43, 10),
(515, 43, 19),
(516, 43, 9),
(517, 43, 11),
(518, 44, 16),
(519, 44, 21),
(520, 44, 10),
(521, 44, 19),
(522, 44, 9),
(523, 44, 11),
(524, 45, 16),
(525, 45, 21),
(526, 45, 10),
(527, 45, 19),
(528, 45, 9),
(529, 45, 11),
(530, 46, 16),
(531, 46, 21),
(532, 46, 10),
(533, 46, 19),
(534, 46, 9),
(535, 46, 11),
(536, 47, 16),
(537, 47, 21),
(538, 47, 10),
(539, 47, 19),
(540, 47, 9),
(541, 47, 11),
(542, 48, 16),
(543, 48, 21),
(544, 48, 10),
(545, 48, 19),
(546, 48, 9),
(547, 48, 11),
(548, 49, 16),
(549, 49, 21),
(550, 49, 10),
(551, 49, 19),
(552, 49, 9),
(553, 49, 11),
(554, 50, 16),
(555, 50, 21),
(556, 50, 10),
(557, 50, 19),
(558, 50, 9),
(559, 50, 11),
(560, 51, 16),
(561, 51, 21),
(562, 51, 10),
(563, 51, 19),
(564, 51, 9),
(565, 51, 11),
(566, 52, 16),
(567, 52, 21),
(568, 52, 10),
(569, 52, 19),
(570, 52, 9),
(571, 52, 11),
(572, 53, 16),
(573, 53, 21),
(574, 53, 10),
(575, 53, 19),
(576, 53, 9),
(577, 53, 11),
(578, 54, 16),
(579, 54, 21),
(580, 54, 10),
(581, 54, 19),
(582, 54, 9),
(583, 54, 11),
(584, 55, 16),
(585, 55, 21),
(586, 55, 10),
(587, 55, 19),
(588, 55, 9),
(589, 55, 11),
(590, 56, 16),
(591, 56, 21),
(592, 56, 10),
(593, 56, 19),
(594, 56, 9),
(595, 56, 11),
(596, 57, 16),
(597, 57, 21),
(598, 57, 10),
(599, 57, 19),
(600, 57, 9),
(601, 57, 11),
(602, 58, 16),
(603, 58, 21),
(604, 58, 10),
(605, 58, 19),
(606, 58, 9),
(607, 58, 11),
(608, 59, 16),
(609, 59, 21),
(610, 59, 10),
(611, 59, 19),
(612, 59, 9),
(613, 59, 11),
(614, 60, 16),
(615, 60, 21),
(616, 60, 10),
(617, 60, 19),
(618, 60, 9),
(619, 60, 11),
(620, 61, 16),
(621, 61, 21),
(622, 61, 10),
(623, 61, 19),
(624, 61, 9),
(625, 61, 11),
(626, 62, 16),
(627, 62, 21),
(628, 62, 10),
(629, 62, 19),
(630, 62, 9),
(631, 62, 11),
(632, 63, 16),
(633, 63, 21),
(634, 63, 10),
(635, 63, 19),
(636, 63, 9),
(637, 63, 11),
(638, 64, 16),
(639, 64, 21),
(640, 64, 10),
(641, 64, 19),
(642, 64, 9),
(643, 64, 11),
(644, 65, 16),
(645, 65, 21),
(646, 65, 10),
(647, 65, 19),
(648, 65, 9),
(649, 65, 11),
(650, 66, 16),
(651, 66, 21),
(652, 66, 10),
(653, 66, 19),
(654, 66, 9),
(655, 66, 11),
(656, 67, 16),
(657, 67, 21),
(658, 67, 10),
(659, 67, 19),
(660, 67, 9),
(661, 67, 11),
(662, 68, 16),
(663, 68, 21),
(664, 68, 10),
(665, 68, 19),
(666, 68, 9),
(667, 68, 11),
(668, 69, 16),
(669, 69, 21),
(670, 69, 10),
(671, 69, 19),
(672, 69, 9),
(673, 69, 11),
(674, 70, 16),
(675, 70, 21),
(676, 70, 10),
(677, 70, 19),
(678, 70, 9),
(679, 70, 11),
(680, 71, 16),
(681, 71, 21),
(682, 71, 10),
(683, 71, 19),
(684, 71, 9),
(685, 71, 11),
(686, 72, 16),
(687, 72, 21),
(688, 72, 10),
(689, 72, 19),
(690, 72, 9),
(691, 72, 11),
(692, 73, 16),
(693, 73, 21),
(694, 73, 10),
(695, 73, 19),
(696, 73, 9),
(697, 73, 11),
(698, 74, 16),
(699, 74, 21),
(700, 74, 10),
(701, 74, 19),
(702, 74, 9),
(703, 74, 11),
(704, 75, 16),
(705, 75, 21),
(706, 75, 10),
(707, 75, 19),
(708, 75, 9),
(709, 75, 11),
(710, 76, 16),
(711, 76, 21),
(712, 76, 10),
(713, 76, 19),
(714, 76, 9),
(715, 76, 11),
(716, 77, 16),
(717, 77, 21),
(718, 77, 10),
(719, 77, 19),
(720, 77, 9),
(721, 77, 11),
(722, 78, 16),
(723, 78, 21),
(724, 78, 10),
(725, 78, 19),
(726, 78, 9),
(727, 78, 11),
(728, 79, 16),
(729, 79, 21),
(730, 79, 10),
(731, 79, 19),
(732, 79, 9),
(733, 79, 11),
(734, 80, 16),
(735, 80, 21),
(736, 80, 10),
(737, 80, 19),
(738, 80, 9),
(739, 80, 11),
(740, 81, 16),
(741, 81, 21),
(742, 81, 10),
(743, 81, 19),
(744, 81, 9),
(745, 81, 11),
(746, 82, 16),
(747, 82, 21),
(748, 82, 10),
(749, 82, 19),
(750, 82, 9),
(751, 82, 11),
(752, 83, 16),
(753, 83, 21),
(754, 83, 10),
(755, 83, 19),
(756, 83, 9),
(757, 83, 11),
(758, 84, 16),
(759, 84, 21),
(760, 84, 10),
(761, 84, 19),
(762, 84, 9),
(763, 84, 11),
(764, 85, 16),
(765, 85, 21),
(766, 85, 10),
(767, 85, 19),
(768, 85, 9),
(769, 85, 11),
(770, 86, 16),
(771, 86, 21),
(772, 86, 10),
(773, 86, 19),
(774, 86, 9),
(775, 86, 11),
(776, 87, 16),
(777, 87, 21),
(778, 87, 10),
(779, 87, 19),
(780, 87, 9),
(781, 87, 11),
(782, 88, 16),
(783, 88, 21),
(784, 88, 10),
(785, 88, 19),
(786, 88, 9),
(787, 88, 11),
(788, 89, 16),
(789, 89, 21),
(790, 89, 10),
(791, 89, 19),
(792, 89, 9),
(793, 89, 11),
(794, 90, 16),
(795, 90, 21),
(796, 90, 10),
(797, 90, 19),
(798, 90, 9),
(799, 90, 11),
(800, 91, 16),
(801, 91, 21),
(802, 91, 10),
(803, 91, 19),
(804, 91, 9),
(805, 91, 11),
(806, 92, 16),
(807, 92, 21),
(808, 92, 10),
(809, 92, 19),
(810, 92, 9),
(811, 92, 11),
(812, 93, 16),
(813, 93, 21),
(814, 93, 10),
(815, 93, 19),
(816, 93, 9),
(817, 93, 11),
(818, 94, 16),
(819, 94, 21),
(820, 94, 10),
(821, 94, 19),
(822, 94, 9),
(823, 94, 11),
(824, 95, 16),
(825, 95, 21),
(826, 95, 10),
(827, 95, 19),
(828, 95, 9),
(829, 95, 11),
(830, 96, 16),
(831, 96, 21),
(832, 96, 10),
(833, 96, 19),
(834, 96, 9),
(835, 96, 11),
(836, 97, 16),
(837, 97, 21),
(838, 97, 10),
(839, 97, 19),
(840, 97, 9),
(841, 97, 11),
(842, 98, 16),
(843, 98, 21),
(844, 98, 10),
(845, 98, 19),
(846, 98, 9),
(847, 98, 11),
(848, 99, 16),
(849, 99, 21),
(850, 99, 10),
(851, 99, 19),
(852, 99, 9),
(853, 99, 11),
(854, 100, 16),
(855, 100, 21),
(856, 100, 10),
(857, 100, 19),
(858, 100, 9),
(859, 100, 11),
(886, 9, 11),
(890, 14, 23),
(891, 16, 23),
(892, 17, 23);

-- --------------------------------------------------------

--
-- Table structure for table `tblprod_relation`
--

CREATE TABLE `tblprod_relation` (
  `id` int(4) UNSIGNED NOT NULL,
  `product` int(8) NOT NULL DEFAULT '0',
  `related` int(8) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblprod_relation`
--

INSERT INTO `tblprod_relation` (`id`, `product`, `related`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 2),
(4, 37, 39),
(5, 39, 37),
(6, 34, 35),
(7, 35, 34),
(8, 13, 14),
(9, 14, 13),
(10, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblpurchases`
--

CREATE TABLE `tblpurchases` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchaseDate` date NOT NULL DEFAULT '0000-00-00',
  `purchaseTime` time NOT NULL DEFAULT '00:00:00',
  `saleID` int(11) NOT NULL DEFAULT '0',
  `productType` enum('download','physical','virtual') NOT NULL DEFAULT 'physical',
  `productID` int(7) NOT NULL DEFAULT '0',
  `giftID` int(7) NOT NULL DEFAULT '0',
  `categoryID` int(8) NOT NULL DEFAULT '0',
  `salePrice` varchar(20) NOT NULL DEFAULT '',
  `liveDownload` enum('yes','no') NOT NULL DEFAULT 'no',
  `persPrice` varchar(20) NOT NULL DEFAULT '',
  `attrPrice` varchar(20) NOT NULL DEFAULT '',
  `insPrice` varchar(10) NOT NULL DEFAULT '0.00',
  `globalDiscount` int(3) NOT NULL DEFAULT '0',
  `globalCost` varchar(20) NOT NULL DEFAULT '',
  `productQty` int(5) NOT NULL DEFAULT '0',
  `productWeight` varchar(20) NOT NULL DEFAULT '',
  `downloadAmount` int(7) NOT NULL DEFAULT '0',
  `downloadCode` char(50) NOT NULL DEFAULT '',
  `buyCode` varchar(50) NOT NULL DEFAULT '',
  `saleConfirmation` enum('yes','no') NOT NULL DEFAULT 'no',
  `deletedProductName` varchar(250) NOT NULL DEFAULT '',
  `freeShipping` enum('yes','no') NOT NULL DEFAULT 'no',
  `wishpur` int(6) NOT NULL DEFAULT '0',
  `platform` varchar(30) NOT NULL DEFAULT 'desktop'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpurchases`
--

INSERT INTO `tblpurchases` (`id`, `purchaseDate`, `purchaseTime`, `saleID`, `productType`, `productID`, `giftID`, `categoryID`, `salePrice`, `liveDownload`, `persPrice`, `attrPrice`, `insPrice`, `globalDiscount`, `globalCost`, `productQty`, `productWeight`, `downloadAmount`, `downloadCode`, `buyCode`, `saleConfirmation`, `deletedProductName`, `freeShipping`, `wishpur`, `platform`) VALUES
(1, '2019-01-21', '21:43:46', 1, 'physical', 3, 0, 9, '288.00', 'no', '0.00', '0.00', '0.00', 0, '0.00', 1, '0', 0, '', '0fe93735750a419eb93c58bd11cec3f2799885a0', 'yes', '', 'no', 0, 'desktop'),
(2, '2019-01-21', '23:07:30', 2, 'physical', 12, 0, 10, '12.00', 'no', '0.00', '0.00', '0.00', 0, '0.00', 1, '42', 0, '', '81d650271616cb8357caeb057916a9a3a6bba00f', 'yes', '', 'no', 0, 'desktop'),
(3, '2019-01-27', '23:15:09', 3, 'physical', 101, 0, 17, '2300.00', 'no', '0.00', '0.00', '0.00', 0, '0.00', 1, '0', 0, '', '8943f6bac7fc7f341230d80d3d958f66f8806dfd', 'yes', '', 'no', 0, 'desktop'),
(4, '2019-01-29', '20:52:16', 4, 'physical', 101, 0, 9, '2300.00', 'no', '0.00', '0.00', '0.00', 0, '0.00', 1, '0', 0, '', '86c6cc12c6f030d2f6ab9b9b5a03227f561fc270', 'yes', '', 'no', 0, 'desktop'),
(5, '2019-01-31', '17:40:10', 8, 'physical', 101, 0, 17, '2300.00', 'no', '0.00', '0.00', '0.00', 0, '0.00', 1, '0', 0, '', '02f3aeed720e3a3f0468c4ac087cb5239d678f9c', 'yes', '', 'no', 0, 'desktop'),
(6, '2019-01-31', '17:40:10', 8, 'physical', 100, 0, 11, '100.00', 'no', '0.00', '0.00', '0.00', 0, '0.00', 1, '42', 0, '', '02f3aeed720e3a3f0468c4ac087cb5239d678f9c', 'yes', '', 'no', 0, 'desktop'),
(7, '2019-01-31', '17:40:10', 8, 'physical', 99, 0, 11, '99.00', 'no', '0.00', '0.00', '0.00', 0, '0.00', 1, '42', 0, '', '02f3aeed720e3a3f0468c4ac087cb5239d678f9c', 'yes', '', 'no', 0, 'desktop'),
(8, '2019-02-04', '07:11:43', 16, '', 101, 0, 17, '11500', 'no', '0', '0', '0', 0, '0', 5, '0', 0, '', '16', 'yes', '', 'no', 0, 'desktop'),
(9, '2019-02-04', '07:18:36', 17, '', 101, 0, 17, '11500', 'no', '0', '0', '0', 0, '0', 5, '0', 0, '', '17', 'yes', '', 'no', 0, 'desktop'),
(10, '2019-02-04', '08:49:54', 23, '', 101, 0, 17, '11500', 'no', '0', '0', '0', 0, '0', 5, '0', 0, '', '37693cfc748049e45d87b8c7d8b9aacd', 'yes', '', 'no', 0, 'desktop'),
(11, '2019-02-04', '09:04:27', 24, 'virtual', 101, 0, 17, '11500', 'no', '0', '0', '0', 0, '0', 5, '0', 0, '', '1ff1de774005f8da13f42943881c655f', 'yes', '', 'no', 0, 'desktop'),
(12, '2019-02-04', '09:10:46', 25, 'virtual', 101, 0, 17, '2300', 'no', '0', '0', '0', 0, '0', 1, '0', 0, '', '8e296a067a37563370ded05f5a3bf3ec', 'yes', '', 'no', 0, 'desktop'),
(13, '2019-02-04', '17:29:50', 27, 'physical', 3, 0, 17, '50.00', 'no', '0.00', '0.00', '0.00', 0, '0.00', 1, '0', 0, '', '3aa4ef320b0b88ea58a52d291d7c5e1d7aa4f31e', 'yes', '', 'yes', 0, 'desktop'),
(14, '2019-02-04', '17:34:53', 28, 'physical', 101, 0, 17, '2300.00', 'no', '0.00', '0.00', '0.00', 0, '0.00', 1, '0', 0, '', '74dd712450ba46b412e8ee057d19459d57d74358', 'yes', '', 'no', 0, 'desktop'),
(15, '2019-02-05', '05:12:38', 31, 'virtual', 101, 0, 17, '2300', 'no', '0', '0', '0', 0, '0', 1, '0', 0, '', 'c16a5320fa475530d9583c34fd356ef5', 'yes', '', 'no', 0, 'desktop'),
(16, '2019-02-05', '05:47:11', 32, 'virtual', 101, 0, 17, '4600', 'no', '0', '0', '0', 0, '0', 2, '0', 0, '', '6364d3f0f495b6ab9dcf8d3b5c6e0b01', 'yes', '', 'no', 0, 'desktop'),
(17, '2019-02-05', '06:15:49', 33, 'virtual', 101, 0, 17, '6900', 'no', '0', '0', '0', 0, '0', 3, '0', 0, '', '182be0c5cdcd5072bb1864cdee4d3d6e', 'yes', '', 'no', 0, 'desktop'),
(18, '2019-02-05', '06:24:50', 34, 'virtual', 3, 0, 9, '100', 'no', '0', '0', '0', 0, '0', 2, '0', 0, '', 'e369853df766fa44e1ed0ff613f563bd', 'yes', '', 'no', 0, 'desktop'),
(19, '2019-02-05', '08:45:36', 35, 'virtual', 101, 0, 11, '0.00', 'no', '0', '0', '0', 0, '0', 1, '0', 0, '', '1c383cd30b7c298ab50293adfecb7b18', 'yes', '', 'no', 0, 'desktop'),
(20, '2019-02-05', '09:25:34', 36, 'virtual', 101, 0, 17, '2300', 'no', '0', '0', '0', 0, '0', 1, '0', 0, '', '19ca14e7ea6328a42e0eb13d585e4c22', 'yes', '', 'no', 0, 'desktop'),
(21, '2019-02-06', '05:09:46', 37, 'virtual', 101, 0, 17, '6900', 'no', '0', '0', '0', 0, '0', 3, '0', 0, '', 'a5bfc9e07964f8dddeb95fc584cd965d', 'yes', '', 'no', 0, 'desktop');

-- --------------------------------------------------------

--
-- Table structure for table `tblpurch_atts`
--

CREATE TABLE `tblpurch_atts` (
  `id` int(10) UNSIGNED NOT NULL,
  `saleID` int(11) NOT NULL DEFAULT '0',
  `productID` int(11) NOT NULL DEFAULT '0',
  `purchaseID` int(11) NOT NULL DEFAULT '0',
  `attributeID` int(7) NOT NULL DEFAULT '0',
  `addCost` varchar(20) NOT NULL DEFAULT '',
  `attrName` varchar(100) NOT NULL DEFAULT '',
  `attrWeight` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblpurch_pers`
--

CREATE TABLE `tblpurch_pers` (
  `id` int(10) UNSIGNED NOT NULL,
  `saleID` int(11) NOT NULL DEFAULT '0',
  `productID` int(11) NOT NULL DEFAULT '0',
  `purchaseID` int(11) NOT NULL DEFAULT '0',
  `personalisationID` int(7) NOT NULL DEFAULT '0',
  `visitorData` text,
  `addCost` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblqtyrates`
--

CREATE TABLE `tblqtyrates` (
  `id` int(10) UNSIGNED NOT NULL,
  `inZone` int(8) NOT NULL DEFAULT '0',
  `qtyFrom` int(6) NOT NULL DEFAULT '0',
  `qtyTo` int(6) NOT NULL DEFAULT '0',
  `rate` varchar(30) NOT NULL DEFAULT '',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblrates`
--

CREATE TABLE `tblrates` (
  `id` int(4) UNSIGNED NOT NULL,
  `rWeightFrom` varchar(50) NOT NULL DEFAULT '0',
  `rWeightTo` varchar(50) NOT NULL DEFAULT '0',
  `rCost` varchar(20) NOT NULL DEFAULT '',
  `rService` int(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblsales`
--

CREATE TABLE `tblsales` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoiceNo` varchar(100) NOT NULL DEFAULT '',
  `account` int(8) NOT NULL DEFAULT '0',
  `saleNotes` text,
  `bill_1` varchar(250) NOT NULL DEFAULT '',
  `bill_2` varchar(250) NOT NULL DEFAULT '',
  `bill_3` varchar(250) NOT NULL DEFAULT '',
  `bill_4` varchar(250) NOT NULL DEFAULT '',
  `bill_5` varchar(250) NOT NULL DEFAULT '',
  `bill_6` varchar(250) NOT NULL DEFAULT '',
  `bill_7` varchar(250) NOT NULL DEFAULT '',
  `bill_8` varchar(250) NOT NULL DEFAULT '',
  `bill_9` int(5) NOT NULL DEFAULT '0',
  `ship_1` varchar(250) NOT NULL DEFAULT '',
  `ship_2` varchar(250) NOT NULL DEFAULT '',
  `ship_3` varchar(250) NOT NULL DEFAULT '',
  `ship_4` varchar(250) NOT NULL DEFAULT '',
  `ship_5` varchar(250) NOT NULL DEFAULT '',
  `ship_6` varchar(250) NOT NULL DEFAULT '',
  `ship_7` varchar(250) NOT NULL DEFAULT '',
  `ship_8` varchar(250) NOT NULL DEFAULT '',
  `buyerAddress` text,
  `paymentStatus` varchar(20) NOT NULL DEFAULT '',
  `gatewayID` varchar(250) NOT NULL DEFAULT '',
  `taxPaid` varchar(20) NOT NULL DEFAULT '',
  `taxRate` varchar(5) NOT NULL DEFAULT '',
  `couponCode` varchar(200) NOT NULL DEFAULT '',
  `couponTotal` varchar(100) NOT NULL DEFAULT '',
  `codeType` varchar(20) NOT NULL DEFAULT '',
  `subTotal` varchar(20) NOT NULL DEFAULT '',
  `grandTotal` varchar(20) NOT NULL DEFAULT '',
  `shipTotal` varchar(20) NOT NULL DEFAULT '',
  `globalTotal` varchar(20) NOT NULL DEFAULT '0',
  `insuranceTotal` varchar(10) NOT NULL DEFAULT '0.00',
  `chargeTotal` varchar(20) NOT NULL DEFAULT '0.00',
  `globalDiscount` int(5) NOT NULL DEFAULT '0',
  `manualDiscount` varchar(20) NOT NULL DEFAULT '',
  `isPickup` enum('yes','no') NOT NULL DEFAULT 'no',
  `shipSetCountry` int(7) NOT NULL DEFAULT '0',
  `shipSetArea` int(7) NOT NULL DEFAULT '0',
  `setShipRateID` int(7) NOT NULL DEFAULT '0',
  `shipType` varchar(20) NOT NULL DEFAULT '',
  `cartWeight` varchar(20) NOT NULL DEFAULT '',
  `purchaseDate` date NOT NULL DEFAULT '0000-00-00',
  `purchaseTime` time NOT NULL DEFAULT '00:00:00',
  `buyCode` varchar(50) NOT NULL,
  `saleConfirmation` enum('yes','no') NOT NULL DEFAULT 'no',
  `paymentMethod` varchar(20) NOT NULL DEFAULT '',
  `ipAddress` text,
  `ipAccess` text,
  `restrictCount` int(7) NOT NULL DEFAULT '0',
  `orderCopyEmails` text,
  `zipLimit` int(5) NOT NULL DEFAULT '0',
  `downloadLock` enum('yes','no') NOT NULL DEFAULT 'no',
  `optInNewsletter` enum('yes','no') NOT NULL DEFAULT 'yes',
  `paypalErrorTrigger` tinyint(1) NOT NULL DEFAULT '0',
  `gateparams` text,
  `trackcode` varchar(100) NOT NULL DEFAULT '',
  `type` enum('personal','trade') NOT NULL DEFAULT 'personal',
  `wishlist` int(8) NOT NULL DEFAULT '0',
  `platform` varchar(30) NOT NULL DEFAULT 'desktop'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblsales`
--

INSERT INTO `tblsales` (`id`, `invoiceNo`, `account`, `saleNotes`, `bill_1`, `bill_2`, `bill_3`, `bill_4`, `bill_5`, `bill_6`, `bill_7`, `bill_8`, `bill_9`, `ship_1`, `ship_2`, `ship_3`, `ship_4`, `ship_5`, `ship_6`, `ship_7`, `ship_8`, `buyerAddress`, `paymentStatus`, `gatewayID`, `taxPaid`, `taxRate`, `couponCode`, `couponTotal`, `codeType`, `subTotal`, `grandTotal`, `shipTotal`, `globalTotal`, `insuranceTotal`, `chargeTotal`, `globalDiscount`, `manualDiscount`, `isPickup`, `shipSetCountry`, `shipSetArea`, `setShipRateID`, `shipType`, `cartWeight`, `purchaseDate`, `purchaseTime`, `buyCode`, `saleConfirmation`, `paymentMethod`, `ipAddress`, `ipAccess`, `restrictCount`, `orderCopyEmails`, `zipLimit`, `downloadLock`, `optInNewsletter`, `paypalErrorTrigger`, `gateparams`, `trackcode`, `type`, `wishlist`, `platform`) VALUES
(1, '1', 0, 'vbnb', 'Amit', 'amit@digitalaptech.com', 'kolkata', 'kolkata', 'kolkata', 'india', '700000', '', 193, 'Amit', 'amit@digitalaptech.com', 'kolkata', 'kolkata', 'kolkata', 'india', '700000', '777777', '', 'completed', '', '0.00', '0', '', '0.00', '', '288.00', '288.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 193, 9, 0, 'weight', '0', '2019-01-21', '21:43:46', '0fe93735750a419eb93c58bd11cec3f2799885a0', 'yes', 'bank', '202.191.214.153', NULL, 0, '', 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(2, '2', 7, 'mnjnm', 'ritayan', 'testdevloper007@gmail.com', 'abcd', '', 'kolkata', 'india', '700001', '', 193, 'ritayan', 'testdevloper007@gmail.com', 'abcd', '', 'kolkata', 'india', '700001', '988888888888', '', 'shipping', '', '0.00', '0', '', '0.00', '', '12.00', '12.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 193, 9, 0, 'weight', '42.00', '2019-01-21', '23:07:30', '81d650271616cb8357caeb057916a9a3a6bba00f', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(3, '3', 8, 'jgfyjhfukyrtf', 'Arijit Dutta', 'arijit.dutta48@gmail.com', 'asdas', '', 'sdfdsf', 'dsffffsddfsd', '200012', '', 192, 'Arijit Dutta', 'arijitdutta@gmail.com', 'fghfghf', 'fghfghfgh', 'fghf', 'fghfgh', '222222', '321456977', '', 'shipping', '', '0.00', '0', '', '0.00', '', '2300.00', '2300.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 192, 8, 0, 'weight', '0', '2019-01-27', '23:15:09', '8943f6bac7fc7f341230d80d3d958f66f8806dfd', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(4, '4', 9, 'This is My First Order', 'Aditish Dutta', 'aditish@gmail.com', '4/1 Babu Bagan', 'Lane', 'Kolkata', 'India', '900031', '', 192, 'Pritha Dutta', 'pritha@gmail.com', '10B Ramkrishna', 'Lane', 'Dhakuria', 'West Bengal', '700019', '9830098300', '', 'shipping', '', '0.00', '0', '', '0.00', '', '2300.00', '2300.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 193, 9, 0, 'weight', '0', '2019-01-29', '20:52:16', '86c6cc12c6f030d2f6ab9b9b5a03227f561fc270', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(5, '5', 0, '', 'Arijit', 'arijit@gmail.com', '4/1 babu', 'bagan', 'kolkata', 'India', '700031', '', 160, 'Arijit', 'arijit@gmail.com', '4/1 Babu', 'Bagan', 'Kolkata', 'India', '700031', '9830098300', '', 'pending', '', '0.00', '0', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 160, 0, 0, 'weight', '0', '2019-01-31', '02:24:55', '9c946b023555ee8056944af6b80ea50db893b475', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(6, '6', 0, '', 'Arijit', 'arijit@gmail.com', '4/1 babu', 'bagan', 'kolkata', 'India', '700031', '', 160, 'Arijit', 'arijit@gmail.com', '4/1 Babu', 'Bagan', 'Kolkata', 'India', '700031', '9830098300', '', 'pending', '', '0.00', '0', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 160, 0, 0, 'weight', '0', '2019-01-31', '02:25:06', '0948796fe4692a6e5b6ef937390147f563fcf2e4', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(7, '7', 0, '', 'Arijit', 'arijit@gmail.com', '4/1 babu', 'bagan', 'kolkata', 'India', '700031', '', 160, 'Arijit', 'arijit@gmail.com', '4/1 Babu', 'Bagan', 'Kolkata', 'India', '700031', '9830098300', '', 'pending', 'create-account', '0.00', '0', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 160, 0, 0, 'weight', '0', '2019-01-31', '02:25:33', 'd18ffa8774916a01667c84c7c6dd5225361ecdfb', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(8, '8', 0, 'Hello', 'Abu', 'abu@gmail.com', 'En-34', 'Digital Aptech', 'Salt Lake', 'ID', '700091', '', 184, 'Arijit', 'arijit@gmail.com', '4/1', 'Babu Bagan Lane', 'Kolkata', 'india', '700031', '9830098300', '', 'shipping', '', '0.00', '0', '', '0.00', '', '2499.00', '2748.90', '0.00', '0.00', '249.90', '0.00', 0, '0.00', 'no', 193, 9, 0, 'weight', '84.00', '2019-01-31', '17:40:10', '02f3aeed720e3a3f0468c4ac087cb5239d678f9c', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(9, '9', 0, 'Hello Hi DAPL', 'Arghya', 'arghya@gmail.com', '64, Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '', 193, 'Arghya', 'arghya@gmail.com', '64, Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '9830098300', '', 'shipping', '', '0', '0', '', '0', '', '2300', '2300', '0\n	                ', '0', '0', '0', 0, '0', 'no', 193, 9, 0, 'weight', '0', '2019-02-01', '07:36:31', '9', 'yes', 'Bank', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(10, '10', 0, 'jhsdks', 'jkdsfh', 'sahg@gmail.com', 'hdfs', 'kkdhk', 'khdxklhg', 'khdf', '098', '', 160, 'jkdsfh', 'sahg@gmail.com', 'hdfs', 'kkdhk', 'khdxklhg', 'khdf', '098', '1234567890', '', 'shipping', '', '0', '0', '', '0', '', '2300', '2300', '0\n	                ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-01', '08:19:14', '10', 'yes', 'Bank', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(11, '11', 1, 'Hello Guys', 'Arijit Dutta', 'arijit@gmail.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '', 192, 'Arijit Dutta', 'arijit@gmail.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '9830098300', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '0\n	                ', '0', '0', '0', 0, '0', 'no', 192, 8, 0, 'weight', '0', '2019-02-04', '06:37:31', '11', 'yes', 'Bank', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(12, '12', 11, 'Hi', 'Arijit Dutta', 'arijit@gmail.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '', 192, 'Arijit Dutta', 'arijit@gmail.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '9830098300', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '0\n	                ', '0', '0', '0', 0, '0', 'no', 192, 8, 0, 'weight', '0', '2019-02-04', '06:50:25', '12', 'yes', 'Bank', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(13, '13', 0, 'xcvxc', 'dfss', 'sdfs@gmail.com', 'lkjdsh', 'jkhdsf', 'lkjfsd', 'dlkfj', '546', '', 160, 'dfss', 'sdfs@gmail.com', 'lkjdsh', 'jkhdsf', 'lkjfsd', 'dlkfj', '546', '7896451320', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '0\n	                ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-04', '06:58:27', '13', 'yes', 'Bank', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(14, '14', 0, 'gfh', 'ert', 'kjh@gmail.com', 'dslkfjh', 'adlkjwq', 'ifpouwe', 'repou', '789', '', 160, 'ert', 'kjh@gmail.com', 'dslkfjh', 'adlkjwq', 'ifpouwe', 'repou', '789', '7895463120', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '0\n	                ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-04', '07:07:37', '14', 'yes', 'Bank', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(15, '15', 0, 'dsf', 'wer', 'wer@gmail.com', 'hf', 'dsfds', 'sdfs', 'sdfsd', '789', '', 184, 'wer', 'wer@gmail.com', 'hf', 'dsfds', 'sdfs', 'sdfsd', '789', '7896543120', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '0\n	                ', '0', '0', '0', 0, '0', 'no', 184, 7, 0, 'weight', '0', '2019-02-04', '07:09:42', '15', 'yes', 'Bank', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(16, '16', 12, 'xcv', 'fdg', 'dgfd@gmail.com', 'lkfdsj', 'cxmb', 'lrekj', 'oierwu', '68', '', 160, 'fdg', 'dgfd@gmail.com', 'lkfdsj', 'cxmb', 'lrekj', 'oierwu', '68', '7986543120', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '0\n	                ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-04', '07:11:43', '16', 'yes', 'Bank', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(17, '17', 13, 'ghjhg', 'oewir', 'dkjlf@gmail.com', 'hfgth', 'fg', 'bvn', 'nvbjngf', '798', '', 184, 'oewir', 'dkjlf@gmail.com', 'hfgth', 'fg', 'bvn', 'nvbjngf', '798', '7895643210', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '0\n	                ', '0', '0', '0', 0, '0', 'no', 184, 7, 0, 'weight', '0', '2019-02-04', '07:18:36', '17', 'yes', 'Bank', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(18, '9', 0, '', 'sayan', 'sayan@digitalaptech.com', 'test', '', 'test', 'test', '4855996', '', 193, 'sayan', 'sayan@digitalaptech.com', 'test', '', 'test', 'test', '4855996', '89888888', '', 'pending', 'create-account', '0.00', '0', '', '0.00', '', '2300.00', '2300.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 193, 0, 0, 'weight', '0', '2019-02-03', '21:03:25', '269d73facacc53d6ef2aa0dfd083244d2e027358', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(19, '10', 0, '', 'sayan', 'sayan@digitalaptech.com', 'test', '', 'test', 'test', '4855996', '', 193, 'sayan', 'sayan@digitalaptech.com', 'test', '', 'test', 'test', '4855996', '89888888', '', 'pending', 'create-account', '0.00', '0', '', '0.00', '', '2300.00', '2300.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 193, 0, 0, 'weight', '0', '2019-02-03', '21:04:13', '9287a33fafebfb582b0f8c8122bded508a3d5f0a', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(20, '11', 0, '', 'sayan', 'sayan@digitalaptech.com', 'test', '', 'test', 'test', '4855996', '', 193, 'sayan', 'sayan@digitalaptech.com', 'test', '', 'test', 'test', '4855996', '89888888', '', 'pending', 'create-account', '0.00', '0', '', '0.00', '', '2300.00', '2300.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 193, 0, 0, 'weight', '0', '2019-02-03', '21:05:08', 'c20ad82088699d3e0dcc300da27c9d25126bae1a', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(21, '12', 0, '', 'sayan', 'sayan@digitalaptech.com', 'test', '', 'test', 'test', '4855996', '', 193, 'sayan', 'sayan@digitalaptech.com', 'test', '', 'test', 'test', '4855996', '89888888', '', 'pending', 'create-account', '0.00', '0', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 193, 9, 0, 'weight', '0', '2019-02-03', '21:05:28', '4d4927cc1bd2491e47c3d1de04ebf0d276f80b63', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(22, '13', 0, '', 'sayan', 'sayan@digitalaptech.com', 'test', '', 'test', 'test', '4855996', '', 193, 'sayan', 'sayan@digitalaptech.com', 'test', '', 'test', 'test', '4855996', '89888888', '', 'pending', 'create-account', '0.00', '0', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 193, 9, 0, 'weight', '0', '2019-02-03', '21:05:57', '41710bcbcc07d1bb555ff8a26475bfa22685ffa2', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(23, '23', 14, 'bn bnv', 'dsf', 'gjk@gmail.com', 'ewqrdas', ';lf', 'cxm,.v', 'zx,mc ', '8796', '', 193, 'dsf', 'gjk@gmail.com', 'ewqrdas', ';lf', 'cxm,.v', 'zx,mc ', '8796', '7894561230', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '0\n	                ', '0', '0', '0', 0, '0', 'no', 193, 9, 0, 'weight', '0', '2019-02-04', '08:49:54', '23', 'yes', 'Bank', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(24, '24', 15, 'hi', 'Aditish', 'aditish@gmai.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India ', '700031', '', 193, 'Aditish', 'aditish@gmai.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India ', '700031', '9830098300', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '0\n	                ', '0', '0', '0', 0, '0', 'no', 193, 9, 0, 'weight', '0', '2019-02-04', '09:04:27', '1ff1de774005f8da13f42943881c655f', 'yes', 'Bank', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(25, '25', 16, '', 'sayan', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, 'sayan', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '5899669960', '', 'shipping', '', '0', '0', '', '0', '', '2300', '2300', '0\n	                ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-04', '09:10:46', '8e296a067a37563370ded05f5a3bf3ec', 'yes', 'COD', '', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(26, '14', 18, '', 'Arijit Dutta', 'arijitdutta1440@gmail.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '', 160, 'Arijit Dutta', 'arijitdutta1440@gmail.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '9830098300', '', 'pending', '', '0.00', '0', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 193, 0, 0, 'weight', '0', '2019-02-04', '02:09:03', '314002c90e6d3287bc3af1fcbab8e14aefad3ec2', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(27, '15', 18, '', 'Arijit Dutta', 'arijitdutta1440@gmail.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '', 160, 'Aditish Dutta', 'arijitdutta1440@gmail.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '9830098300', '', 'shipping', '', '0.00', '0', '', '0.00', '', '50.00', '50.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 193, 9, 0, 'weight', '0', '2019-02-04', '17:29:50', '3aa4ef320b0b88ea58a52d291d7c5e1d7aa4f31e', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(28, '16', 18, '', 'Aditish Dutta', 'arijitdutta1440@gmail.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '', 160, 'Arijit Dutta', 'arijitdutta1440@gmail.com', '4/1 Babu Bagan Lane', 'Dhakuria', 'Kolkata', 'India', '700031', '9830098300', '', 'completed', '', '0.00', '0', '', '0.00', '', '2300.00', '2300.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', 'no', 193, 9, 0, 'weight', '0', '2019-02-04', '17:34:53', '74dd712450ba46b412e8ee057d19459d57d74358', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(29, '29', 16, 'dsf', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, 'sayan112', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '9874653120', '', 'shipping', '', '0', '0', '', '0', '', '0', '0', '0\n	                ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-05', '05:06:51', '6ea9ab1baa0efb9e19094440c317e21b', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(30, '30', 16, 'sdffff', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, 'sayan111', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '8975463210', '', 'shipping', '', '0', '0', '', '0', '', '0', '0', '0\n	                ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-05', '05:07:28', '34173cb38f07f89ddbebc2ac9128303f', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(31, '31', 16, 'dsf', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, 'sayan1321', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '7986453120', '', 'shipping', '', '0', '0', '', '0', '', '2300', '2300', '0\n	                ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-05', '05:12:38', 'c16a5320fa475530d9583c34fd356ef5', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(32, '32', 16, '', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '8794562130', '', 'shipping', '', '0', '0', '', '0', '', '4600', '4600', '0\n	                 ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-05', '05:47:11', '6364d3f0f495b6ab9dcf8d3b5c6e0b01', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(33, '33', 16, '', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '9830098300', '', 'shipping', '', '0', '0', '', '0', '', '6900', '6900', '0\n	                 ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-05', '06:15:49', '182be0c5cdcd5072bb1864cdee4d3d6e', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(34, '34', 16, 'test', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '0987654321', '', 'shipping', '', '0', '0', '', '0', '', '100', '100', '0\n	                 ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-05', '06:24:50', 'e369853df766fa44e1ed0ff613f563bd', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(35, '35', 16, 'fgh', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '9876541230', '', 'shipping', '', '0', '0', '', '0', '', '0.00', '0.00', '0\n	                 ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-05', '08:45:36', '1c383cd30b7c298ab50293adfecb7b18', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(36, '36', 16, '', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '9887552005', '', 'despatched', '', '0', '0', '', '0', '', '2300', '2300', '0\n	                 ', '0', '0', '0', 0, '0', 'no', 160, 6, 0, 'weight', '0', '2019-02-05', '09:25:34', '19ca14e7ea6328a42e0eb13d585e4c22', 'yes', 'bank', '202.191.214.153', NULL, 0, '', 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(37, '37', 16, '', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '7896541320', '', 'shipping', '', '0', '0', '', '0', '', '6900', '6900', '0\n	                 ', '0', '0', '0', 0, '0', 'no', 193, 9, 0, 'weight', '0', '2019-02-06', '05:09:46', 'a5bfc9e07964f8dddeb95fc584cd965d', 'yes', 'bank', '202.191.214.153', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(38, '38', 16, '', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, '', '', '', '', '', '', '', '', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '', '0', '0', '0', 0, '0', 'no', 0, 0, 0, 'weight', '0', '2019-02-07', '09:37:15', 'a5771bce93e200c36f7cd9dfd0e5deaa', 'yes', 'bank', '118.185.14.189', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(39, '39', 16, '', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, '', '', '', '', '', '', '', '', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '', '0', '0', '0', 0, '0', 'no', 0, 0, 0, 'weight', '0', '2019-02-07', '09:39:45', 'd67d8ab4f4c10bf22aa353e27879133c', 'yes', 'bank', '118.185.14.189', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop'),
(40, '40', 16, '', 'sayan1', 'sayan@digitalaptech.com', 'test', '', 'tets', 'test', '78555555', '', 160, '', '', '', '', '', '', '', '', '', 'shipping', '', '0', '0', '', '0', '', '11500', '11500', '', '0', '0', '0', 0, '0', 'no', 0, 0, 0, 'weight', '0', '2019-02-07', '09:40:53', 'd645920e395fedad7bbbed0eca3fe2e0', 'yes', 'bank', '118.185.14.189', NULL, 0, NULL, 0, 'no', 'yes', 0, NULL, '', 'personal', 0, 'desktop');

-- --------------------------------------------------------

--
-- Table structure for table `tblsearch_index`
--

CREATE TABLE `tblsearch_index` (
  `id` int(11) UNSIGNED NOT NULL,
  `searchCode` varchar(50) NOT NULL DEFAULT '',
  `results` text,
  `searchDate` date NOT NULL DEFAULT '0000-00-00',
  `filters` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblsearch_log`
--

CREATE TABLE `tblsearch_log` (
  `id` int(11) UNSIGNED NOT NULL,
  `keyword` text,
  `results` int(7) NOT NULL DEFAULT '0',
  `searchDate` date NOT NULL DEFAULT '0000-00-00',
  `ip` varchar(250) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblsearch_log`
--

INSERT INTO `tblsearch_log` (`id`, `keyword`, `results`, `searchDate`, `ip`) VALUES
(1, 'Horse', 0, '2018-09-26', '::1'),
(2, 'Comfortable', 2, '2018-12-17', '105.168.35.67'),
(3, 'Herds', 83, '2018-12-17', '41.60.111.29');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `id` int(4) UNSIGNED NOT NULL,
  `sName` varchar(250) NOT NULL DEFAULT '0',
  `sEstimation` varchar(250) NOT NULL DEFAULT '0',
  `sSignature` enum('yes','no') NOT NULL DEFAULT 'yes',
  `inZone` int(6) NOT NULL DEFAULT '0',
  `enableCOD` enum('yes','no') NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblsettings`
--

CREATE TABLE `tblsettings` (
  `id` tinyint(1) NOT NULL,
  `website` varchar(250) NOT NULL DEFAULT '',
  `theme` varchar(100) NOT NULL DEFAULT '_theme_default',
  `theme2` varchar(100) NOT NULL DEFAULT '_theme_default',
  `tradetheme` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `addEmails` text,
  `serverPath` varchar(250) NOT NULL DEFAULT '',
  `languagePref` varchar(40) NOT NULL DEFAULT 'english.php',
  `logoName` varchar(50) NOT NULL DEFAULT '',
  `baseCurrency` char(3) NOT NULL DEFAULT 'GBP',
  `currencyDisplayPref` varchar(100) NOT NULL DEFAULT '',
  `logErrors` enum('yes','no') NOT NULL DEFAULT 'no',
  `gatewayMode` enum('test','live') NOT NULL DEFAULT 'test',
  `enableSSL` enum('yes','no') NOT NULL DEFAULT 'no',
  `enablePickUp` enum('yes','no') NOT NULL DEFAULT 'no',
  `shipCountry` varchar(10) NOT NULL DEFAULT '',
  `logFolderName` varchar(50) NOT NULL DEFAULT 'logs',
  `ifolder` varchar(250) NOT NULL DEFAULT '',
  `metaKeys` text,
  `metaDesc` text,
  `enableCart` enum('yes','no') NOT NULL DEFAULT 'yes',
  `offlineDate` date NOT NULL DEFAULT '0000-00-00',
  `offlineText` text,
  `offlineIP` text,
  `en_rss` enum('yes','no') NOT NULL DEFAULT 'yes',
  `rssScroller` enum('yes','no') NOT NULL DEFAULT 'no',
  `rssScrollerUrl` varchar(250) NOT NULL DEFAULT '',
  `rssScrollerLimit` int(3) NOT NULL DEFAULT '10',
  `en_modr` enum('yes','no') NOT NULL DEFAULT 'no',
  `cName` varchar(250) NOT NULL DEFAULT '',
  `cWebsite` varchar(250) NOT NULL DEFAULT '',
  `cTel` varchar(250) NOT NULL DEFAULT '',
  `cFax` varchar(250) NOT NULL DEFAULT '',
  `cAddress` text,
  `cOther` text,
  `cReturns` text,
  `smtp` enum('yes','no') NOT NULL DEFAULT 'no',
  `smtp_host` varchar(100) NOT NULL DEFAULT 'localhost',
  `smtp_user` varchar(100) NOT NULL DEFAULT '',
  `smtp_pass` varchar(100) NOT NULL DEFAULT '',
  `smtp_port` varchar(100) NOT NULL DEFAULT '25',
  `smtp_security` varchar(10) NOT NULL DEFAULT '',
  `smtp_from` varchar(250) NOT NULL DEFAULT '',
  `smtp_email` varchar(250) NOT NULL DEFAULT '',
  `smtp_debug` enum('yes','no') NOT NULL DEFAULT 'no',
  `homeProdValue` int(3) NOT NULL DEFAULT '0',
  `homeProdType` varchar(10) NOT NULL DEFAULT 'latest',
  `homeProdCats` text,
  `homeProdIDs` text,
  `adminFooter` text,
  `publicFooter` text,
  `prodKey` char(60) NOT NULL DEFAULT '',
  `encoderVersion` varchar(5) NOT NULL DEFAULT '',
  `activateEmails` enum('yes','no') NOT NULL DEFAULT 'no',
  `saleComparisonItems` int(6) NOT NULL DEFAULT '0',
  `productsPerPage` int(4) NOT NULL DEFAULT '35',
  `mostPopProducts` int(5) NOT NULL DEFAULT '0',
  `mostPopPref` enum('sales','hits') NOT NULL DEFAULT 'sales',
  `latestProdLimit` int(5) NOT NULL DEFAULT '0',
  `latestProdDuration` enum('days','months','years') NOT NULL DEFAULT 'days',
  `searchLowStockLimit` int(5) NOT NULL DEFAULT '1',
  `enSearchLog` enum('yes','no') NOT NULL DEFAULT 'no',
  `savedSearches` int(6) NOT NULL DEFAULT '7',
  `searchSlider` text,
  `searchTagsOnly` enum('yes','no') NOT NULL DEFAULT 'no',
  `jsDateFormat` varchar(10) NOT NULL DEFAULT 'DD-MM-YYYY',
  `jsWeekStart` tinyint(1) NOT NULL DEFAULT '0',
  `timezone` varchar(50) NOT NULL DEFAULT 'Europe/London',
  `mysqlDateFormat` varchar(10) NOT NULL DEFAULT '',
  `systemDateFormat` varchar(30) NOT NULL DEFAULT 'j F Y',
  `rssFeedLimit` int(3) NOT NULL DEFAULT '50',
  `minInvoiceDigits` tinyint(2) NOT NULL DEFAULT '5',
  `invoiceNo` int(10) NOT NULL DEFAULT '1',
  `pendingAsComplete` enum('yes','no') NOT NULL DEFAULT 'no',
  `freeShipThreshold` varchar(10) NOT NULL DEFAULT '',
  `enableZip` enum('yes','no') NOT NULL DEFAULT 'no',
  `zipCreationLimit` varchar(100) NOT NULL DEFAULT '0',
  `zipLimit` int(3) NOT NULL DEFAULT '0',
  `zipTimeOut` int(6) NOT NULL DEFAULT '0',
  `zipMemoryLimit` int(5) NOT NULL DEFAULT '0',
  `zipAdditionalFolder` varchar(50) NOT NULL DEFAULT 'additional-zip',
  `enEntryLog` enum('yes','no') NOT NULL DEFAULT 'no',
  `softwareVersion` varchar(10) NOT NULL DEFAULT '',
  `smartQuotes` enum('yes','no') NOT NULL DEFAULT 'yes',
  `hitCounter` enum('yes','no') NOT NULL DEFAULT 'yes',
  `menuSubCats` enum('yes','no') NOT NULL DEFAULT 'yes',
  `adminFolderName` varchar(100) NOT NULL DEFAULT 'admin',
  `twitterLatest` enum('yes','no') NOT NULL DEFAULT 'no',
  `globalDiscount` varchar(20) NOT NULL DEFAULT '0',
  `globalDiscountExpiry` date NOT NULL DEFAULT '0000-00-00',
  `enableRecentView` enum('yes','no') NOT NULL DEFAULT 'yes',
  `freeDownloadRestriction` varchar(10) NOT NULL DEFAULT '0',
  `thumbWidth` int(4) NOT NULL DEFAULT '230',
  `thumbHeight` int(4) NOT NULL DEFAULT '200',
  `thumbQuality` int(3) NOT NULL DEFAULT '99',
  `thumbQualityPNG` tinyint(1) NOT NULL DEFAULT '9',
  `aspectRatio` enum('yes','no') NOT NULL DEFAULT 'yes',
  `renamePics` enum('yes','no') NOT NULL DEFAULT 'yes',
  `tmbPrefix` varchar(100) NOT NULL DEFAULT 'tmb_',
  `imgPrefix` varchar(100) NOT NULL DEFAULT 'img_',
  `showOutofStock` enum('cat','yes','no') NOT NULL DEFAULT 'yes',
  `enableCheckout` enum('yes','no') NOT NULL DEFAULT 'yes',
  `globalDownloadPath` varchar(250) NOT NULL DEFAULT '',
  `maxProductChars` int(8) NOT NULL DEFAULT '200',
  `reduceDownloadStock` enum('yes','no') NOT NULL DEFAULT 'no',
  `enableBBCode` enum('yes','no') NOT NULL DEFAULT 'yes',
  `downloadFolder` varchar(100) NOT NULL DEFAULT '',
  `downloadRestrictIP` enum('yes','no') NOT NULL DEFAULT 'no',
  `downloadRestrictIPLog` enum('yes','no') NOT NULL DEFAULT 'no',
  `downloadRestrictIPCnt` int(7) NOT NULL DEFAULT '0',
  `downloadRestrictIPLock` int(7) NOT NULL DEFAULT '0',
  `downloadRestrictIPMail` enum('yes','no') NOT NULL DEFAULT 'no',
  `downloadRestrictIPGlobal` text,
  `parentCatHomeDisplay` enum('yes','no') NOT NULL DEFAULT 'no',
  `isbnAPI` varchar(50) NOT NULL DEFAULT '',
  `offerInsurance` enum('yes','no') NOT NULL DEFAULT 'no',
  `insuranceAmount` varchar(10) NOT NULL DEFAULT '',
  `insuranceFilter` char(3) NOT NULL DEFAULT '',
  `insuranceOptional` enum('yes','no') NOT NULL DEFAULT 'no',
  `insuranceValue` varchar(20) NOT NULL DEFAULT '',
  `insuranceInfo` text,
  `freeTextDisplay` varchar(10) NOT NULL DEFAULT '',
  `excludeFreePop` enum('yes','no') NOT NULL DEFAULT 'no',
  `priceTextDisplay` varchar(100) NOT NULL DEFAULT '',
  `en_sitemap` enum('yes','no') NOT NULL DEFAULT 'yes',
  `cubeUrl` varchar(250) NOT NULL DEFAULT '',
  `cubeAPI` varchar(250) NOT NULL DEFAULT '',
  `guardianUrl` varchar(250) NOT NULL DEFAULT '',
  `guardianAPI` varchar(250) NOT NULL DEFAULT '',
  `minCheckoutAmount` varchar(50) NOT NULL DEFAULT '',
  `showAttrStockLevel` enum('yes','no') NOT NULL DEFAULT 'no',
  `productStockThreshold` int(5) NOT NULL DEFAULT '30',
  `autoClear` int(3) NOT NULL DEFAULT '7',
  `batchMail` text,
  `freeAltRedirect` varchar(250) NOT NULL DEFAULT '',
  `menuCatCount` enum('yes','no') NOT NULL DEFAULT 'no',
  `menuBrandCount` enum('yes','no') NOT NULL DEFAULT 'no',
  `catGiftPos` varchar(10) NOT NULL DEFAULT 'end',
  `showBrands` enum('yes','no') NOT NULL DEFAULT 'yes',
  `minPassValue` int(5) NOT NULL DEFAULT '8',
  `en_wish` enum('yes','no') NOT NULL DEFAULT 'yes',
  `tweetlimit` int(5) NOT NULL DEFAULT '10',
  `forcePass` enum('yes','no') NOT NULL DEFAULT 'yes',
  `en_create` enum('yes','no') NOT NULL DEFAULT 'yes',
  `en_create_mail` enum('yes','no') NOT NULL DEFAULT 'yes',
  `pdf` enum('yes','no') NOT NULL DEFAULT 'yes',
  `en_close` enum('yes','no') NOT NULL DEFAULT 'yes',
  `cache` enum('yes','no') NOT NULL DEFAULT 'yes',
  `cachetime` varchar(10) NOT NULL DEFAULT '30',
  `tweet` enum('yes','no') NOT NULL DEFAULT 'yes',
  `presalenotify` enum('yes','no') NOT NULL DEFAULT 'no',
  `presaleemail` text,
  `layout` enum('grid','list') NOT NULL DEFAULT 'list',
  `coupontax` enum('yes','no') NOT NULL DEFAULT 'yes',
  `shipopts` text,
  `tc` enum('yes','no') NOT NULL DEFAULT 'no',
  `tctext` text,
  `tradeship` enum('yes','no') NOT NULL DEFAULT 'no',
  `salereorder` enum('yes','no') NOT NULL DEFAULT 'yes',
  `hurrystock` int(7) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblsettings`
--

INSERT INTO `tblsettings` (`id`, `website`, `theme`, `theme2`, `tradetheme`, `email`, `addEmails`, `serverPath`, `languagePref`, `logoName`, `baseCurrency`, `currencyDisplayPref`, `logErrors`, `gatewayMode`, `enableSSL`, `enablePickUp`, `shipCountry`, `logFolderName`, `ifolder`, `metaKeys`, `metaDesc`, `enableCart`, `offlineDate`, `offlineText`, `offlineIP`, `en_rss`, `rssScroller`, `rssScrollerUrl`, `rssScrollerLimit`, `en_modr`, `cName`, `cWebsite`, `cTel`, `cFax`, `cAddress`, `cOther`, `cReturns`, `smtp`, `smtp_host`, `smtp_user`, `smtp_pass`, `smtp_port`, `smtp_security`, `smtp_from`, `smtp_email`, `smtp_debug`, `homeProdValue`, `homeProdType`, `homeProdCats`, `homeProdIDs`, `adminFooter`, `publicFooter`, `prodKey`, `encoderVersion`, `activateEmails`, `saleComparisonItems`, `productsPerPage`, `mostPopProducts`, `mostPopPref`, `latestProdLimit`, `latestProdDuration`, `searchLowStockLimit`, `enSearchLog`, `savedSearches`, `searchSlider`, `searchTagsOnly`, `jsDateFormat`, `jsWeekStart`, `timezone`, `mysqlDateFormat`, `systemDateFormat`, `rssFeedLimit`, `minInvoiceDigits`, `invoiceNo`, `pendingAsComplete`, `freeShipThreshold`, `enableZip`, `zipCreationLimit`, `zipLimit`, `zipTimeOut`, `zipMemoryLimit`, `zipAdditionalFolder`, `enEntryLog`, `softwareVersion`, `smartQuotes`, `hitCounter`, `menuSubCats`, `adminFolderName`, `twitterLatest`, `globalDiscount`, `globalDiscountExpiry`, `enableRecentView`, `freeDownloadRestriction`, `thumbWidth`, `thumbHeight`, `thumbQuality`, `thumbQualityPNG`, `aspectRatio`, `renamePics`, `tmbPrefix`, `imgPrefix`, `showOutofStock`, `enableCheckout`, `globalDownloadPath`, `maxProductChars`, `reduceDownloadStock`, `enableBBCode`, `downloadFolder`, `downloadRestrictIP`, `downloadRestrictIPLog`, `downloadRestrictIPCnt`, `downloadRestrictIPLock`, `downloadRestrictIPMail`, `downloadRestrictIPGlobal`, `parentCatHomeDisplay`, `isbnAPI`, `offerInsurance`, `insuranceAmount`, `insuranceFilter`, `insuranceOptional`, `insuranceValue`, `insuranceInfo`, `freeTextDisplay`, `excludeFreePop`, `priceTextDisplay`, `en_sitemap`, `cubeUrl`, `cubeAPI`, `guardianUrl`, `guardianAPI`, `minCheckoutAmount`, `showAttrStockLevel`, `productStockThreshold`, `autoClear`, `batchMail`, `freeAltRedirect`, `menuCatCount`, `menuBrandCount`, `catGiftPos`, `showBrands`, `minPassValue`, `en_wish`, `tweetlimit`, `forcePass`, `en_create`, `en_create_mail`, `pdf`, `en_close`, `cache`, `cachetime`, `tweet`, `presalenotify`, `presaleemail`, `layout`, `coupontax`, `shipopts`, `tc`, `tctext`, `tradeship`, `salereorder`, `hurrystock`) VALUES
(1, 'Heritage Expeditions Pvt Ltd', '_theme_default', '_theme_default', '', 'mchigubhu@macsoftlabs.com', '', '/home/dapldevelopment/public_html/cisites.dapldevelopment.com/Heritage/store', 'english', '', 'USD', '&#036;{PRICE}', 'yes', 'test', 'no', 'no', '193', 'logs', 'http://cisites.dapldevelopment.com/Heritage/store', '', '', 'yes', '0000-00-00', '', '', 'yes', 'no', '', 10, 'no', 'Heritage Expeditions', 'http://www.macsoftlabs.com/heritage/store', '01234 456789', '01345 567890', '1 Pennefather Ave\r\nRainbow Towers\r\nHarare\r\nZimbabwe', '', 'Return info goes here..', 'yes', 'mail.macsoftlabs.com', 'info@macsoftlabs.com', 'bfH}jCydwmN4', '587', '', 'Macdonald Chigubhu', 'info@macsoftlabs.com', 'no', 10, 'latest', '', '', 'Add your own footer in your admin control panel: System > Edit Footers', 'Add your own footer in your admin control panel: System > Edit Footers', 'CC9585F7D1649ECA517BF0A87D6694E13B28FA9FF90C330068316C287629', '1.0', 'yes', 10, 8, 10, 'sales', 36, 'months', 5, 'yes', 7, 'a:4:{s:3:\"min\";s:1:\"0\";s:3:\"max\";s:3:\"300\";s:5:\"start\";s:1:\"5\";s:3:\"end\";s:3:\"100\";}', 'no', 'DD/MM/YYYY', 0, 'Pacific/Midway', '%e %b %Y', 'F j, Y', 50, 5, 17, 'no', '0.00', 'yes', '0', 2, 0, 0, 'additional-zip', 'yes', '3.4', 'no', 'yes', 'yes', 'admin', 'no', '0', '0000-00-00', 'yes', '0', 230, 200, 96, 9, 'yes', 'yes', 'tmb_', 'img_', 'cat', 'yes', 'www.macsoftlabs.com\\heritage\\store', 300, 'no', 'yes', 'product-downloads', 'no', 'yes', 0, 5, 'yes', '', 'yes', '', 'yes', '10', 'op2', 'no', '0.00', '', 'FREE', 'yes', '', 'yes', '', '', '', '', '0.00', 'no', 30, 30, NULL, '', 'no', 'no', '16', 'no', 10, 'yes', 5, 'yes', 'yes', 'yes', 'yes', 'yes', 'no', '30', 'no', 'no', '', 'grid', 'yes', 'a:5:{s:8:\"flatrate\";s:2:\"no\";s:8:\"itemrate\";s:2:\"no\";s:7:\"percent\";s:2:\"no\";s:8:\"qtyrates\";s:2:\"no\";s:5:\"rates\";s:2:\"no\";}', 'yes', '', 'yes', 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblsocial`
--

CREATE TABLE `tblsocial` (
  `id` int(5) NOT NULL,
  `desc` varchar(50) NOT NULL DEFAULT '',
  `param` text,
  `value` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblsocial`
--

INSERT INTO `tblsocial` (`id`, `desc`, `param`, `value`) VALUES
(1, 'addthis', 'code', ''),
(2, 'disqus', 'disname', ''),
(3, 'disqus', 'discat', '0'),
(4, 'pushover', 'pushuser', ''),
(5, 'pushover', 'pushtoken', ''),
(6, 'facebook', 'fbimage', ''),
(7, 'facebook', 'fbinsights', ''),
(8, 'twitter', 'conkey', ''),
(9, 'twitter', 'consecret', ''),
(10, 'twitter', 'token', ''),
(11, 'twitter', 'key', ''),
(12, 'twitter', 'username', ''),
(13, 'links', 'facebook', 'https://www.facebook.com'),
(14, 'links', 'twitter', 'https://www.twitter.com'),
(15, 'links', 'instagram', 'https://www.instagram.com'),
(16, 'links', 'youtube', 'https://www.youtube.com'),
(17, 'links', 'reddit', 'https://www.reddit.com'),
(18, 'links', 'pinterest', 'https://www.pinterest.com'),
(19, 'links', 'flickr', 'https://www.flickr.com'),
(20, 'struct', 'twitter', 'yes'),
(21, 'struct', 'fb', 'yes'),
(22, 'struct', 'google', 'yes'),
(23, 'ctalk', 'key', ''),
(24, 'ctalk', 'enable', 'no'),
(25, 'ctalk', 'log', 'no'),
(26, 'ctalk', 'mail', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tblstatuses`
--

CREATE TABLE `tblstatuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `saleID` int(7) NOT NULL DEFAULT '0',
  `statusNotes` text,
  `dateAdded` date NOT NULL DEFAULT '0000-00-00',
  `timeAdded` time NOT NULL DEFAULT '00:00:00',
  `orderStatus` varchar(20) NOT NULL DEFAULT '',
  `adminUser` varchar(100) NOT NULL DEFAULT '',
  `visacc` enum('yes','no') NOT NULL DEFAULT 'no',
  `account` int(8) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblstatuses`
--

INSERT INTO `tblstatuses` (`id`, `saleID`, `statusNotes`, `dateAdded`, `timeAdded`, `orderStatus`, `adminUser`, `visacc`, `account`) VALUES
(1, 1, 'Order Placed on Website', '2019-01-21', '21:43:46', 'shipping', 'System', 'no', 0),
(2, 1, 'Hi Amit,\r\n\r\nYour order #00001 from \"Heritage Expeditions Pvt Ltd\" has now been updated:\r\n\r\n---------------------------------------\r\nThank you for booking with us. We hope you will enjoy your stay in Victoria Falls and Hwange. Welcome to Zimbabwe\r\n\r\n---------------------------------------\r\n\r\nKind regards,\r\nHeritage Sales\r\n\r\nHeritage Expeditions Pvt Ltd\r\nhttp://cisites.dapldevelopment.com/Heritage/store', '2019-01-21', '21:54:53', 'completed', 'mchigubhu', 'yes', 0),
(3, 2, 'Order Placed on Website', '2019-01-21', '23:07:34', 'shipping', 'System', 'no', 7),
(4, 3, 'Order Placed on Website', '2019-01-27', '23:15:14', 'shipping', 'System', 'no', 8),
(5, 4, 'Order Placed on Website', '2019-01-29', '20:52:21', 'shipping', 'System', 'no', 9),
(6, 8, 'Order Placed on Website', '2019-01-31', '17:40:10', 'shipping', 'System', 'no', 0),
(7, 9, 'Order Placed on Website', '2019-02-01', '01:41:27', 'shipping', 'system', 'no', 0),
(8, 100, 'Order Placed on Website', '2019-02-01', '01:43:59', 'shipping', 'system', 'no', 0),
(9, 9, 'Order Placed on Website', '2019-02-01', '07:36:31', 'shipping', 'system', 'no', 0),
(10, 10, 'Order Placed on Website', '2019-02-01', '08:19:14', 'shipping', 'system', 'no', 0),
(11, 11, 'Order Placed on Website', '2019-02-04', '06:37:31', 'shipping', 'system', 'no', 1),
(12, 12, 'Order Placed on Website', '2019-02-04', '06:50:25', 'shipping', 'system', 'no', 1),
(13, 13, 'Order Placed on Website', '2019-02-04', '06:58:27', 'shipping', 'system', 'no', 0),
(14, 14, 'Order Placed on Website', '2019-02-04', '07:07:37', 'shipping', 'system', 'no', 0),
(15, 15, 'Order Placed on Website', '2019-02-04', '07:09:42', 'shipping', 'system', 'no', 0),
(16, 16, 'Order Placed on Website', '2019-02-04', '07:11:43', 'shipping', 'system', 'no', 1),
(17, 17, 'Order Placed on Website', '2019-02-04', '07:18:36', 'shipping', 'system', 'no', 1),
(18, 23, 'Order Placed on Website', '2019-02-04', '08:49:54', 'shipping', 'system', 'no', 1),
(19, 24, 'Order Placed on Website', '2019-02-04', '09:04:27', 'shipping', 'system', 'no', 15),
(20, 25, 'Order Placed on Website', '2019-02-04', '09:10:46', 'shipping', 'system', 'no', 16),
(21, 27, 'Order Placed on Website', '2019-02-04', '17:29:50', 'shipping', 'System', 'no', 18),
(22, 28, 'Order Placed on Website', '2019-02-04', '17:34:53', 'shipping', 'System', 'no', 18),
(23, 29, 'Order Placed on Website', '2019-02-05', '05:06:51', 'shipping', 'system', 'no', 16),
(24, 30, 'Order Placed on Website', '2019-02-05', '05:07:28', 'shipping', 'system', 'no', 16),
(25, 31, 'Order Placed on Website', '2019-02-05', '05:12:38', 'shipping', 'system', 'no', 16),
(26, 32, 'Order Placed on Website', '2019-02-05', '05:47:11', 'shipping', 'system', 'no', 16),
(27, 33, 'Order Placed on Website', '2019-02-05', '06:15:49', 'shipping', 'system', 'no', 16),
(28, 34, 'Order Placed on Website', '2019-02-05', '06:24:50', 'shipping', 'system', 'no', 16),
(29, 35, 'Order Placed on Website', '2019-02-05', '08:45:36', 'shipping', 'system', 'no', 16),
(30, 36, 'Order Placed on Website', '2019-02-05', '09:25:34', 'shipping', 'system', 'no', 16),
(31, 28, 'Sale Edited & Updated', '2019-02-05', '00:11:22', 'completed', 'mchigubhu', 'no', 18),
(32, 36, 'Hi sayan1,\r\n\r\nYour order #00036 from \"Heritage Expeditions Pvt Ltd\" has now been updated:\r\n\r\n---------------------------------------\r\n\r\nEnter your own text here...\r\n\r\n---------------------------------------\r\n\r\nKind regards,\r\n\r\nHeritage Expeditions Pvt Ltd\r\nhttp://cisites.dapldevelopment.com/Heritage/store', '2019-02-05', '00:13:23', 'despatched', 'mchigubhu', 'no', 16),
(33, 37, 'Order Placed on Website', '2019-02-06', '05:09:46', 'shipping', 'system', 'no', 16),
(34, 38, 'Order Placed on Website', '2019-02-07', '09:37:15', 'shipping', 'system', 'no', 16),
(35, 39, 'Order Placed on Website', '2019-02-07', '09:39:45', 'shipping', 'system', 'no', 16),
(36, 40, 'Order Placed on Website', '2019-02-07', '09:40:53', 'shipping', 'system', 'no', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tblstatus_text`
--

CREATE TABLE `tblstatus_text` (
  `id` int(7) NOT NULL,
  `statTitle` varchar(250) NOT NULL DEFAULT '',
  `statText` text,
  `ref` varchar(250) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbltare`
--

CREATE TABLE `tbltare` (
  `id` int(4) UNSIGNED NOT NULL,
  `rWeightFrom` varchar(50) NOT NULL DEFAULT '0',
  `rWeightTo` varchar(50) NOT NULL DEFAULT '0',
  `rCost` varchar(20) NOT NULL DEFAULT '',
  `rService` int(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblthemes`
--

CREATE TABLE `tblthemes` (
  `id` int(7) UNSIGNED NOT NULL,
  `theme` varchar(200) NOT NULL DEFAULT '',
  `from` date NOT NULL DEFAULT '0000-00-00',
  `to` date NOT NULL DEFAULT '0000-00-00',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbltracker`
--

CREATE TABLE `tbltracker` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `code` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbltracker_clicks`
--

CREATE TABLE `tbltracker_clicks` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(100) NOT NULL DEFAULT '',
  `clicked` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(250) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `userName` varchar(100) NOT NULL DEFAULT '',
  `userPass` varchar(250) NOT NULL DEFAULT '',
  `userEmail` text,
  `userType` enum('admin','restricted') NOT NULL DEFAULT 'restricted',
  `userPriv` enum('yes','no') NOT NULL DEFAULT 'no',
  `accessPages` text,
  `enableUser` enum('yes','no') NOT NULL DEFAULT 'no',
  `lastLogin` varchar(250) NOT NULL DEFAULT '',
  `userNotify` enum('yes','no') NOT NULL DEFAULT 'yes',
  `tweet` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblzones`
--

CREATE TABLE `tblzones` (
  `id` int(4) UNSIGNED NOT NULL,
  `zName` varchar(250) NOT NULL DEFAULT '',
  `zCountry` int(5) NOT NULL DEFAULT '0',
  `zRate` varchar(10) NOT NULL DEFAULT '',
  `zShipping` enum('yes','no') NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblzones`
--

INSERT INTO `tblzones` (`id`, `zName`, `zCountry`, `zRate`, `zShipping`) VALUES
(1, 'Zone 1', 183, '20', 'yes'),
(2, 'Zone 2', 183, '20', 'yes'),
(3, 'Zone 3', 183, '20', 'yes'),
(4, 'Zone 4', 183, '20', 'yes'),
(5, 'world', 160, '0', 'no'),
(6, 'world', 184, '0', 'no'),
(7, 'world', 192, '0', 'no'),
(8, 'world', 193, '0', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tblzone_areas`
--

CREATE TABLE `tblzone_areas` (
  `id` int(4) UNSIGNED NOT NULL,
  `inZone` int(5) NOT NULL DEFAULT '0',
  `areaName` varchar(200) NOT NULL DEFAULT '',
  `zCountry` int(5) NOT NULL DEFAULT '0',
  `zRate` varchar(10) NOT NULL DEFAULT '',
  `zShipping` enum('yes','no') NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblzone_areas`
--

INSERT INTO `tblzone_areas` (`id`, `inZone`, `areaName`, `zCountry`, `zRate`, `zShipping`) VALUES
(1, 1, 'Hwange', 183, '20', 'yes'),
(2, 2, 'Victoria Falls', 183, '20', 'yes'),
(3, 2, 'Matopos', 183, '20', 'yes'),
(4, 2, 'Eastern Highlands', 183, '20', 'yes'),
(5, 3, 'Masvingo', 183, '20', 'yes'),
(6, 5, 'dddd', 160, '0', 'no'),
(7, 6, 'dddd', 184, '0', 'no'),
(8, 7, 'dddd', 192, '0', 'no'),
(9, 8, 'dddd', 193, '0', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `facebook_id` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_status` int(1) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1=admin,2=buyer,3=seller,4=serviceprovider',
  `add_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `email_verification_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `facebook_id`, `full_name`, `username`, `email`, `address`, `contact_no`, `password`, `user_status`, `user_type`, `add_date`, `end_date`, `last_login`, `profile_image`, `email_verification_code`) VALUES
(1, '0', 'Superadmin', 'Super Admin', 'admin@digitalaptech.com', '      ', '1234567890', '21232f297a57a5a743894a0e4a801fc3', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'images21.jpeg', ''),
(56, '1045766428883140', 'Alex Taylor', 'Alex Taylor', 'alex1.19@yahoo.com', 'USA', '', '21232f297a57a5a743894a0e4a801fc3', 1, 3, '2017-01-04 18:37:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(57, '', 'test Seller', '', 'testseller@steelbay.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', 1, 3, '2017-01-05 11:45:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(58, '', 'test buyer', '', 'testbuyer@steelbay.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', 1, 2, '2017-01-05 11:45:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(59, '', 'Jayashree Sadhu', '', 'jayashree@gmail.com', '', '', '5722abcf77e13b6b0ff69a5a4984e237', 1, 3, '2017-01-09 12:18:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(60, '', 'Amrita Sengupta', '', 'amritas@digitalaptech.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', 1, 2, '2017-01-25 12:12:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `b_article`
--
ALTER TABLE `b_article`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `cat_id` (`cat_id`,`blog_slug`),
  ADD KEY `staus` (`staus`);

--
-- Indexes for table `b_category`
--
ALTER TABLE `b_category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_slug` (`cat_slug`,`status`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`cms_id`);

--
-- Indexes for table `metatags`
--
ALTER TABLE `metatags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_menu`
--
ALTER TABLE `site_menu`
  ADD PRIMARY KEY (`site_menu_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `em_index` (`email`),
  ADD KEY `nm_index` (`name`);

--
-- Indexes for table `tblaccounts_search`
--
ALTER TABLE `tblaccounts_search`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_index` (`code`);

--
-- Indexes for table `tblaccounts_wish`
--
ALTER TABLE `tblaccounts_wish`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_index` (`account`);

--
-- Indexes for table `tblactivation_history`
--
ALTER TABLE `tblactivation_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saleid_index` (`saleID`);

--
-- Indexes for table `tbladdressbook`
--
ALTER TABLE `tbladdressbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ac_index` (`account`);

--
-- Indexes for table `tblattachments`
--
ALTER TABLE `tblattachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_index` (`statusID`),
  ADD KEY `sale_index` (`saleID`);

--
-- Indexes for table `tblattributes`
--
ALTER TABLE `tblattributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_index` (`productID`),
  ADD KEY `group_index` (`attrGroup`);

--
-- Indexes for table `tblattr_groups`
--
ALTER TABLE `tblattr_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_index` (`productID`);

--
-- Indexes for table `tblbanners`
--
ALTER TABLE `tblbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblog`
--
ALTER TABLE `tblblog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblboxes`
--
ALTER TABLE `tblboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcampaigns`
--
ALTER TABLE `tblcampaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_index` (`cDiscountCode`);

--
-- Indexes for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tblcategories`
--
ALTER TABLE `tblcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_index` (`catLevel`),
  ADD KEY `child_index` (`childOf`),
  ADD KEY `en_index` (`enCat`);

--
-- Indexes for table `tblclick_history`
--
ALTER TABLE `tblclick_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saleid_index` (`saleID`);

--
-- Indexes for table `tblcomparisons`
--
ALTER TABLE `tblcomparisons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_index` (`saleID`),
  ADD KEY `this_index` (`thisProduct`),
  ADD KEY `that_index` (`thatProduct`);

--
-- Indexes for table `tblcountries`
--
ALTER TABLE `tblcountries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcoupons`
--
ALTER TABLE `tblcoupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_index` (`cDiscountCode`),
  ADD KEY `sale_index` (`saleID`);

--
-- Indexes for table `tblcurrencies`
--
ALTER TABLE `tblcurrencies`
  ADD PRIMARY KEY (`currency`);

--
-- Indexes for table `tbldropshippers`
--
ALTER TABLE `tbldropshippers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblentry_log`
--
ALTER TABLE `tblentry_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_index` (`userid`);

--
-- Indexes for table `tblflat`
--
ALTER TABLE `tblflat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_index` (`inZone`);

--
-- Indexes for table `tblgiftcerts`
--
ALTER TABLE `tblgiftcerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblgiftcodes`
--
ALTER TABLE `tblgiftcodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gift_index` (`giftID`),
  ADD KEY `sale_index` (`saleID`),
  ADD KEY `code_index` (`code`),
  ADD KEY `purc_index` (`purchaseID`);

--
-- Indexes for table `tblmethods`
--
ALTER TABLE `tblmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmethods_params`
--
ALTER TABLE `tblmethods_params`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mthd_index` (`method`);

--
-- Indexes for table `tblmp3`
--
ALTER TABLE `tblmp3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_index` (`product_id`);

--
-- Indexes for table `tblnewpages`
--
ALTER TABLE `tblnewpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnewstemplates`
--
ALTER TABLE `tblnewstemplates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnews_ticker`
--
ALTER TABLE `tblnews_ticker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpaystatuses`
--
ALTER TABLE `tblpaystatuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mthd_index` (`pMethod`);

--
-- Indexes for table `tblpdf`
--
ALTER TABLE `tblpdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblper`
--
ALTER TABLE `tblper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_index` (`inZone`);

--
-- Indexes for table `tblpercent`
--
ALTER TABLE `tblpercent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_index` (`inZone`),
  ADD KEY `from_index` (`priceFrom`),
  ADD KEY `to_index` (`priceTo`),
  ADD KEY `en_index` (`enabled`);

--
-- Indexes for table `tblpersonalisation`
--
ALTER TABLE `tblpersonalisation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_index` (`productID`);

--
-- Indexes for table `tblpictures`
--
ALTER TABLE `tblpictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_index` (`product_id`);

--
-- Indexes for table `tblprice_points`
--
ALTER TABLE `tblprice_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_index` (`priceFrom`),
  ADD KEY `to_index` (`priceTo`);

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pDownload` (`pDownload`),
  ADD KEY `code_index` (`pCode`),
  ADD KEY `name_index` (`pName`),
  ADD KEY `stock_index` (`pStock`),
  ADD KEY `price_index` (`pPrice`),
  ADD KEY `cost_index` (`pPurPrice`),
  ADD KEY `en_index` (`pEnable`),
  ADD KEY `wght_index` (`pWeight`);

--
-- Indexes for table `tblprod_brand`
--
ALTER TABLE `tblprod_brand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_index` (`product`),
  ADD KEY `brd_index` (`brand`);

--
-- Indexes for table `tblprod_category`
--
ALTER TABLE `tblprod_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_index` (`product`),
  ADD KEY `cat_index` (`category`);

--
-- Indexes for table `tblprod_relation`
--
ALTER TABLE `tblprod_relation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_index` (`product`),
  ADD KEY `rel_index` (`related`);

--
-- Indexes for table `tblpurchases`
--
ALTER TABLE `tblpurchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saleid_index` (`saleID`),
  ADD KEY `product_index` (`productID`),
  ADD KEY `cat_index` (`categoryID`),
  ADD KEY `conf_index` (`saleConfirmation`),
  ADD KEY `dcode_index` (`downloadCode`),
  ADD KEY `ld_index` (`liveDownload`);

--
-- Indexes for table `tblpurch_atts`
--
ALTER TABLE `tblpurch_atts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saleid_index` (`saleID`),
  ADD KEY `prodid_index` (`productID`),
  ADD KEY `purid_index` (`purchaseID`),
  ADD KEY `attid_index` (`attributeID`);

--
-- Indexes for table `tblpurch_pers`
--
ALTER TABLE `tblpurch_pers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saleid_index` (`saleID`),
  ADD KEY `prod_index` (`productID`),
  ADD KEY `purc_index` (`purchaseID`),
  ADD KEY `pers_index` (`personalisationID`);

--
-- Indexes for table `tblqtyrates`
--
ALTER TABLE `tblqtyrates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_index` (`inZone`),
  ADD KEY `from_index` (`qtyFrom`),
  ADD KEY `to_index` (`qtyTo`),
  ADD KEY `en_index` (`enabled`);

--
-- Indexes for table `tblrates`
--
ALTER TABLE `tblrates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_index` (`rWeightFrom`),
  ADD KEY `to_index` (`rWeightTo`);

--
-- Indexes for table `tblsales`
--
ALTER TABLE `tblsales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_index` (`buyCode`),
  ADD KEY `acc_index` (`account`),
  ADD KEY `conf_index` (`saleConfirmation`);

--
-- Indexes for table `tblsearch_index`
--
ALTER TABLE `tblsearch_index`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_index` (`searchCode`);

--
-- Indexes for table `tblsearch_log`
--
ALTER TABLE `tblsearch_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_index` (`inZone`);

--
-- Indexes for table `tblsettings`
--
ALTER TABLE `tblsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsocial`
--
ALTER TABLE `tblsocial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `descK` (`desc`);

--
-- Indexes for table `tblstatuses`
--
ALTER TABLE `tblstatuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saleid_index` (`saleID`);

--
-- Indexes for table `tblstatus_text`
--
ALTER TABLE `tblstatus_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltare`
--
ALTER TABLE `tbltare`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_index` (`rWeightFrom`),
  ADD KEY `to_index` (`rWeightTo`);

--
-- Indexes for table `tblthemes`
--
ALTER TABLE `tblthemes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_index` (`from`),
  ADD KEY `to_index` (`to`);

--
-- Indexes for table `tbltracker`
--
ALTER TABLE `tbltracker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `tbltracker_clicks`
--
ALTER TABLE `tbltracker_clicks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblzones`
--
ALTER TABLE `tblzones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ctry_index` (`zCountry`);

--
-- Indexes for table `tblzone_areas`
--
ALTER TABLE `tblzone_areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_index` (`inZone`),
  ADD KEY `ctry_index` (`zCountry`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `b_article`
--
ALTER TABLE `b_article`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `b_category`
--
ALTER TABLE `b_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `cms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `metatags`
--
ALTER TABLE `metatags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_menu`
--
ALTER TABLE `site_menu`
  MODIFY `site_menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tblaccounts_search`
--
ALTER TABLE `tblaccounts_search`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblaccounts_wish`
--
ALTER TABLE `tblaccounts_wish`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblactivation_history`
--
ALTER TABLE `tblactivation_history`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbladdressbook`
--
ALTER TABLE `tbladdressbook`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tblattachments`
--
ALTER TABLE `tblattachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblattributes`
--
ALTER TABLE `tblattributes`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tblattr_groups`
--
ALTER TABLE `tblattr_groups`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tblbanners`
--
ALTER TABLE `tblbanners`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblblog`
--
ALTER TABLE `tblblog`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblboxes`
--
ALTER TABLE `tblboxes`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tblcampaigns`
--
ALTER TABLE `tblcampaigns`
  MODIFY `id` mediumint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblcart`
--
ALTER TABLE `tblcart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tblcategories`
--
ALTER TABLE `tblcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tblclick_history`
--
ALTER TABLE `tblclick_history`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblcomparisons`
--
ALTER TABLE `tblcomparisons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblcountries`
--
ALTER TABLE `tblcountries`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;
--
-- AUTO_INCREMENT for table `tblcoupons`
--
ALTER TABLE `tblcoupons`
  MODIFY `id` mediumint(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbldropshippers`
--
ALTER TABLE `tbldropshippers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblentry_log`
--
ALTER TABLE `tblentry_log`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tblflat`
--
ALTER TABLE `tblflat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblgiftcerts`
--
ALTER TABLE `tblgiftcerts`
  MODIFY `id` mediumint(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblgiftcodes`
--
ALTER TABLE `tblgiftcodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblmethods`
--
ALTER TABLE `tblmethods`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tblmethods_params`
--
ALTER TABLE `tblmethods_params`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `tblmp3`
--
ALTER TABLE `tblmp3`
  MODIFY `id` mediumint(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblnewpages`
--
ALTER TABLE `tblnewpages`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tblnewstemplates`
--
ALTER TABLE `tblnewstemplates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblnews_ticker`
--
ALTER TABLE `tblnews_ticker`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblpaystatuses`
--
ALTER TABLE `tblpaystatuses`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpdf`
--
ALTER TABLE `tblpdf`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblper`
--
ALTER TABLE `tblper`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpercent`
--
ALTER TABLE `tblpercent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpersonalisation`
--
ALTER TABLE `tblpersonalisation`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblpictures`
--
ALTER TABLE `tblpictures`
  MODIFY `id` mediumint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `tblprice_points`
--
ALTER TABLE `tblprice_points`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `id` mediumint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `tblprod_brand`
--
ALTER TABLE `tblprod_brand`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `tblprod_category`
--
ALTER TABLE `tblprod_category`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=932;
--
-- AUTO_INCREMENT for table `tblprod_relation`
--
ALTER TABLE `tblprod_relation`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tblpurchases`
--
ALTER TABLE `tblpurchases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tblpurch_atts`
--
ALTER TABLE `tblpurch_atts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpurch_pers`
--
ALTER TABLE `tblpurch_pers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblqtyrates`
--
ALTER TABLE `tblqtyrates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblrates`
--
ALTER TABLE `tblrates`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblsales`
--
ALTER TABLE `tblsales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tblsearch_index`
--
ALTER TABLE `tblsearch_index`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tblsearch_log`
--
ALTER TABLE `tblsearch_log`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblsettings`
--
ALTER TABLE `tblsettings`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblsocial`
--
ALTER TABLE `tblsocial`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tblstatuses`
--
ALTER TABLE `tblstatuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tblstatus_text`
--
ALTER TABLE `tblstatus_text`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbltare`
--
ALTER TABLE `tbltare`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblthemes`
--
ALTER TABLE `tblthemes`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbltracker`
--
ALTER TABLE `tbltracker`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbltracker_clicks`
--
ALTER TABLE `tbltracker_clicks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblzones`
--
ALTER TABLE `tblzones`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblzone_areas`
--
ALTER TABLE `tblzone_areas`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
