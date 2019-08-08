-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 08 août 2019 à 18:55
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `le-zoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `role_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `admin_pass`, `email`, `f_name`, `l_name`, `role_user`) VALUES
(1, 'khalil_el ghoul_575314', '1234567890', 'khalilelghoul01@gmail.com', 'el ghoul', 'khalil', 'admin'),
(47, 'khalilelghoul01@gmail.com', '1234567890', 'khalilelghoul011@gmail.com', 'el ghoul', 'khalil', ',kk,j'),
(48, 'khalilelghoul01@gmail.com', '1234567890', 'khalilelghoul0122@gmail.com', 'el ghoul', 'khalil', 'hkgyjgf');

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `subject` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `email`
--

INSERT INTO `email` (`id`, `body`, `subject`, `date`) VALUES
(1, '', '', '2019-08-07 19:51:26'),
(2, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:33'),
(3, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:36'),
(4, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:37'),
(5, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:37'),
(6, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:37'),
(7, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:38'),
(8, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:38'),
(9, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:38'),
(10, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:39'),
(11, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:45'),
(12, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:45'),
(13, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:45'),
(14, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?rel=0&amp;autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:08:45'),
(15, '<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><strong>test</strong></span></h1>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\">\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\"autoplay;\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4?autoplay=1\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:09:36'),
(16, '<p><span style=\"font-size:72px\"><strong><span style=\"background-color:#e74c3c\">zdsfghyjukdgsdrg</span></strong></span></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"mail\" src=\"http://localhost/website/board/ckeditor/plugins/smiley/images/envelope.png\" style=\"height:23px; width:23px\" title=\"mail\" /><input name=\"vgj\" type=\"button\" /></p>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\";\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'testDFghcjkljdghkjlmk', '2019-08-07 20:11:50'),
(17, '<p>$mail-&gt;isHTML();<object height=\"360\" width=\"640\"><param name=\"movie\" value=\"https://www.youtube.com/v/8mzY9DrjOr4?hl=fr&amp;version=3\" /><param name=\"allowFullScreen\" value=\"true\" /><param name=\"allowscriptaccess\" value=\"always\" /><embed allowfullscreen=\"true\" allowscriptaccess=\"always\" height=\"360\" src=\"https://www.youtube.com/v/8mzY9DrjOr4?hl=fr&amp;version=3\" type=\"application/x-shockwave-flash\" width=\"640\" /></object></p>\r\n', 'test', '2019-08-07 20:16:40'),
(18, '<p>qafqfqsf<iframe allow=\";\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/8mzY9DrjOr4\" width=\"640\"></iframe></p>\r\n', 'wxsdfghjukilom', '2019-08-07 20:20:14'),
(19, '<p><iframe allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/2xMwJhKBVhA\" width=\"560\"></iframe></p>\r\n', 'sdvgsd', '2019-08-07 20:23:42'),
(20, '<p><img alt=\"\" src=\"https://img.lemde.fr/2019/04/22/0/191/1619/1079/688/0/60/0/e39da8d_2FIads9h8wB-0SwSgxVaVWsp.jpg\" style=\"height:459px; width:688px\" /><a href=\"https://dsfghjkl.qfergthyjui\">k,nbv</a></p>\r\n', 'wxsdfghjukilom', '2019-08-07 20:25:01'),
(21, '<p>yhjjjjjjjjjjjjjjjjjjjjjjjjjj</p>\r\n', 'sdvgsd', '2019-08-07 20:29:50'),
(22, '', '', '2019-08-07 20:31:22'),
(23, '<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><iframe allow=\";\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/2xMwJhKBVhA\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n', 'test', '2019-08-07 20:43:28'),
(24, '<p><s><u><em><strong><iframe allow=\";\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/2xMwJhKBVhA\" width=\"640\"></iframe></strong></em></u></s></p>\r\n', 'wxsdfghjukilom', '2019-08-07 21:01:57'),
(25, '<p>Video in Email Test</p>\r\n\r\n<p><strong>Video in Email Test</strong><br />\r\n<!-- video section --></p>\r\n\r\n<div class=\"video-wrapper\" style=\"display:none\">\r\n<p>Video Content</p>\r\n\r\n<p><!-- fallback 1 --><a href=\"http://www.emailonacid.com\"><img src=\"https://www.emailonacid.com/images/blog_images/Emailology/2013/html5_video/bunny-fallback1.jpg\" style=\"height:176px; width:320px\" /></a></p>\r\n</div>\r\n<!-- fallback section -->\r\n\r\n<div class=\"video-fallback\">\r\n<p>Fallback Content</p>\r\n<a href=\"http://www.emailonacid.com\"><img src=\"https://www.emailonacid.com/images/blog_images/Emailology/2013/html5_video/bunny-fallback2.jpg\" style=\"height:176px; width:320px\" /></a></div>\r\n', '', '2019-08-07 21:03:59'),
(26, '<!doctype html>\r\n<html>\r\n<head>\r\n<title>Video in Email Test</title>\r\n<style type=\"text/css\">\r\nÂ .video-wrapper {display:none;}\r\nÂ @media (-webkit-min-device-pixel-ratio: 0) and (min-device-width:1024px)Â \r\nÂ {\r\nÂ  .video-wrapper { display:block!important; }\r\nÂ  .video-fallback { display:none!important; }\r\nÂ }\r\nÂ  @supports (-webkit-overflow-scrolling:touch) and (color:#ffffffff) {\r\nÂ  Â  div[class^=video-wrapper] { display:block!important; }\r\nÂ  Â  div[class^=video-fallback] { display:none!important; }\r\nÂ  }\r\nÂ  #MessageViewBody .video-wrapper { display:block!important; }\r\nÂ  #MessageViewBody .video-fallback { display:none!important; }\r\n</style>\r\n</head>\r\n<body>\r\n<B>Video in Email Test</B><BR>\r\n\r\n<!-- video section -->\r\n<div class=\"video-wrapper\" style=\"display:none;\">\r\nÂ  <p>Video Content</p>\r\n<video width=\"320\" height=\"176\" controls=\"controls\" poster=\"https://www.emailonacid.com/images/blog_images/Emailology/2013/html5_video/bunny_cover.jpg\" src=\"http://www.w3schools.com/html/mov_bbb.mp4\" >\r\nÂ  Â  Â  <!-- fallback 1 -->\r\nÂ  Â  Â  <a href=\"http://www.emailonacid.com\" ><img height=\"176\"Â \r\nÂ  Â  Â  Â  src=\"https://www.emailonacid.com/images/blog_images/Emailology/2013/html5_video/bunny-fallback1.jpg\" width=\"320\" /></a>\r\n</video>\r\n</div>\r\n\r\n<!-- fallback section -->\r\n<div class=\"video-fallback\">\r\nÂ  <p>Fallback Content</p>\r\nÂ  <a href=\"http://www.emailonacid.com\" ><img height=\"176\"Â \r\nÂ  Â  src=\"https://www.emailonacid.com/images/blog_images/Emailology/2013/html5_video/bunny-fallback2.jpg\" width=\"320\" /></a>\r\n</div>\r\n\r\n\r\n</body>\r\n</html>', 'wxsdfghjukilom', '2019-08-07 21:05:11');

-- --------------------------------------------------------

--
-- Structure de la table `hits`
--

CREATE TABLE `hits` (
  `pageid` varchar(100) NOT NULL,
  `isunique` tinyint(1) NOT NULL,
  `hitcount` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ip`
--

CREATE TABLE `ip` (
  `id` int(11) NOT NULL,
  `IP` text NOT NULL,
  `ISP` text NOT NULL,
  `COUNTRY` text NOT NULL,
  `COUNTRYCODE` text NOT NULL,
  `REGION` text NOT NULL,
  `CITY` text NOT NULL,
  `ZIP` text NOT NULL,
  `LATITUDE` text NOT NULL,
  `LONGITTUDE` text NOT NULL,
  `TIMEZONE` text NOT NULL,
  `ORG` text NOT NULL,
  `ASIP` text NOT NULL,
  `pagename` text NOT NULL,
  `date_visit` timestamp NOT NULL DEFAULT current_timestamp(),
  `cur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ip`
--

INSERT INTO `ip` (`id`, `IP`, `ISP`, `COUNTRY`, `COUNTRYCODE`, `REGION`, `CITY`, `ZIP`, `LATITUDE`, `LONGITTUDE`, `TIMEZONE`, `ORG`, `ASIP`, `pagename`, `date_visit`, `cur`) VALUES
(100, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 14:58:57', 'stored'),
(101, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 14:59:03', 'stored'),
(102, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 18:23:50', 'stored'),
(103, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 19:21:28', 'stored'),
(104, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:02:59', 'stored'),
(105, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:03:16', 'stored'),
(106, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:03:40', 'stored'),
(107, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:03:50', 'stored'),
(108, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:04:25', 'stored'),
(109, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:04:33', 'stored'),
(110, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:04:44', 'stored'),
(111, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:05:12', 'stored'),
(112, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:08:34', 'stored'),
(113, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:09:59', 'stored'),
(114, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:10:38', 'stored'),
(115, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:11:13', 'stored'),
(116, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:11:31', 'stored'),
(117, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:11:33', 'stored'),
(118, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:11:40', 'stored'),
(119, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:11:41', 'stored'),
(120, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:11:56', 'stored'),
(121, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:12:48', 'stored'),
(122, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:12:52', 'stored'),
(123, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:12:59', 'stored'),
(124, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:13:05', 'stored'),
(125, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:14:58', 'stored'),
(126, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:15:48', 'stored'),
(127, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:16:14', 'stored'),
(128, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:38:12', 'stored'),
(129, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:41:32', 'stored'),
(130, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:44:44', 'stored'),
(131, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:46:17', 'stored'),
(132, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 20:49:35', 'stored'),
(133, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 21:03:04', 'stored'),
(134, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 22:05:54', 'stored'),
(135, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 22:40:19', 'stored'),
(136, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 22:55:52', 'stored'),
(137, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 23:11:00', 'stored'),
(138, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 23:18:18', 'stored'),
(139, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 23:19:40', 'stored'),
(140, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-06 23:29:55', 'stored'),
(141, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-07 12:44:42', 'stored'),
(142, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-07 12:45:46', 'stored'),
(143, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-07 13:06:17', 'stored'),
(144, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-07 21:07:19', 'stored'),
(145, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 10:50:02', 'stored'),
(146, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:03:09', 'stored'),
(147, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:05:03', 'stored'),
(148, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:07:20', 'stored'),
(149, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:08:35', 'stored'),
(150, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:08:37', 'stored'),
(151, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:08:38', 'stored'),
(152, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:08:39', 'stored'),
(153, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:08:42', 'stored'),
(154, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:09:11', 'stored'),
(155, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:09:12', 'stored'),
(156, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:09:34', 'stored'),
(157, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:10:08', 'stored'),
(158, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:14:05', 'stored'),
(159, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:14:32', 'stored'),
(160, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:14:48', 'stored'),
(161, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:14:49', 'stored'),
(162, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:15:10', 'stored'),
(163, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:15:22', 'stored'),
(164, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:21:56', 'stored'),
(165, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:22:03', 'stored'),
(166, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:24:08', 'stored'),
(167, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:30:19', 'stored'),
(168, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:33:30', 'stored'),
(169, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:34:45', 'stored'),
(170, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:36:47', 'stored'),
(171, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:46:27', 'stored'),
(172, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:46:59', 'stored'),
(173, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:47:29', 'stored'),
(174, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:48:27', 'stored'),
(175, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:49:00', 'stored'),
(176, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:49:38', 'stored'),
(177, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:50:02', 'stored'),
(178, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:50:18', 'stored'),
(179, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:50:46', 'stored'),
(180, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:50:56', 'stored'),
(181, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:51:05', 'stored'),
(182, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:51:16', 'stored'),
(183, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:51:32', 'stored'),
(184, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:52:30', 'stored'),
(185, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:52:41', 'stored'),
(186, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:52:48', 'stored'),
(187, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:53:12', 'stored'),
(188, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:53:57', 'stored'),
(189, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:54:07', 'stored'),
(190, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 11:54:57', 'stored'),
(191, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:07:38', 'stored'),
(192, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:08:20', 'stored'),
(193, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:09:09', 'stored'),
(194, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:09:18', 'stored'),
(195, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:09:44', 'stored'),
(196, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:09:47', 'stored'),
(197, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:10:27', 'stored'),
(198, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:11:51', 'stored'),
(199, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:11:55', 'stored'),
(200, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:14:01', 'stored'),
(201, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:15:38', 'stored'),
(202, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:16:31', 'stored'),
(203, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:18:03', 'stored'),
(204, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:40:17', 'stored'),
(205, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:40:46', 'stored'),
(206, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 12:53:24', 'stored'),
(207, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:45:45', 'stored'),
(208, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:46:47', 'stored'),
(209, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:46:57', 'stored'),
(210, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:47:07', 'stored'),
(211, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:47:14', 'stored'),
(212, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:47:35', 'stored'),
(213, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:47:41', 'stored'),
(214, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:47:47', 'stored'),
(215, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:47:52', 'stored'),
(216, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:48:05', 'stored'),
(217, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:50:11', 'stored'),
(218, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:50:14', 'stored'),
(219, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:50:15', 'stored'),
(220, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:50:16', 'stored'),
(221, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:50:16', 'stored'),
(222, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:50:16', 'stored'),
(223, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:50:35', 'stored'),
(224, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:54:14', 'stored'),
(225, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:54:29', 'stored'),
(226, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:54:52', 'stored'),
(227, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:55:24', 'stored'),
(228, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:56:11', 'stored'),
(229, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:56:41', 'stored'),
(230, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:57:08', 'stored'),
(231, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:57:31', 'stored'),
(232, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:58:16', 'stored'),
(233, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:58:32', 'stored'),
(234, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 13:59:17', 'stored'),
(235, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:00:58', 'stored'),
(236, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:02:08', 'stored'),
(237, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:03:00', 'stored'),
(238, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:04:14', 'stored'),
(239, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:06:41', 'stored'),
(240, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:07:04', 'stored'),
(241, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:08:00', 'stored'),
(242, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:08:11', 'stored'),
(243, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:14:29', 'stored'),
(244, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:15:05', 'stored'),
(245, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:15:47', 'stored'),
(246, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:16:31', 'stored'),
(247, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:16:59', 'stored'),
(248, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:17:58', 'stored'),
(249, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:18:07', 'stored'),
(250, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:20:44', 'stored'),
(251, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:21:57', 'stored'),
(252, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:26:05', 'stored'),
(253, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:26:54', 'stored'),
(254, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:28:00', 'stored'),
(255, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:28:22', 'stored'),
(256, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:30:56', 'stored'),
(257, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:32:10', 'stored'),
(258, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:32:14', 'stored'),
(259, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:34:16', 'stored'),
(260, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:34:55', 'stored'),
(261, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:35:15', 'stored'),
(262, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:35:36', 'stored'),
(263, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:35:54', 'stored'),
(264, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:36:28', 'stored'),
(265, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:36:50', 'stored'),
(266, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:37:04', 'stored'),
(267, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 14:37:43', 'stored'),
(268, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:12:41', 'stored'),
(269, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:12:50', 'stored'),
(270, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:16:06', 'stored'),
(271, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:17:00', 'stored'),
(272, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:17:08', 'stored'),
(273, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:18:38', 'stored'),
(274, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:18:44', 'stored'),
(275, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:19:32', 'stored'),
(276, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:19:33', 'stored'),
(277, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:19:37', 'stored'),
(278, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:25:44', 'stored'),
(279, 'localhost', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'le zoo', '2019-08-08 15:25:46', 'stored');

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logs`
--

INSERT INTO `logs` (`id`, `content`, `time`, `user`) VALUES
(1, 'fail', '2019-08-06 19:04:15', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `food_id` int(11) NOT NULL,
  `cat` text NOT NULL,
  `food_title` text NOT NULL,
  `food_description` text NOT NULL,
  `food_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `food_img` text NOT NULL,
  `food_price` varchar(10) NOT NULL,
  `price_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`food_id`, `cat`, `food_title`, `food_description`, `food_date`, `food_img`, `food_price`, `price_token`) VALUES
(39, 'Plats', 'pizza dvf', 'dghfrghdg', '2019-08-08 12:14:53', 'http://localhost/website/board/uploads/maxresdefault-1140x641.jpg', '245â‚¬', '0266e33d3f546cb5436a10798e657d97'),
(43, 'Deserts', 'xdcfghjkdfghjkl', 'dfghjkfghnj,k;jl:gbhnj,k;', '2019-08-08 12:15:20', 'http://localhost/website/board/uploads/', '785421â‚¬', 'e0e00353793db9438624db11dbbbc677'),
(44, 'Deserts', 'xdcfghjkdfghjkl', 'dfghjkfghnj,k;jl:gbhnj,k;', '2019-08-08 12:15:22', 'http://localhost/website/board/uploads/', '785421â‚¬', 'e0e00353793db9438624db11dbbbc677'),
(45, 'Deserts', 'xdcfghjkdfghjkl', 'dfghjkfghnj,k;jl:gbhnj,k;', '2019-08-08 12:15:24', 'http://localhost/website/board/uploads/', '785421â‚¬', 'e0e00353793db9438624db11dbbbc677'),
(46, 'Deserts', 'xdcfghjkdfghjkl', 'dfghjkfghnj,k;jl:gbhnj,k;', '2019-08-08 12:15:25', 'http://localhost/website/board/uploads/', '785421â‚¬', 'e0e00353793db9438624db11dbbbc677'),
(47, 'Deserts', 'xdcfghjkdfghjkl', 'dfghjkfghnj,k;jl:gbhnj,k;', '2019-08-08 12:15:27', 'http://localhost/website/board/uploads/', '785421â‚¬', 'e0e00353793db9438624db11dbbbc677'),
(48, 'Deserts', 'xdcfghjkdfghjkl', 'dfghjkfghnj,k;jl:gbhnj,k;', '2019-08-08 12:15:28', 'http://localhost/website/board/uploads/', '785421â‚¬', 'e0e00353793db9438624db11dbbbc677'),
(50, 'Deserts', 'xdcfghjkdfghjkl', 'dfghjkfghnj,k;jl:gbhnj,k;', '2019-08-08 12:15:30', 'http://localhost/website/board/uploads/', '785421â‚¬', 'e0e00353793db9438624db11dbbbc677'),
(51, 'Deserts', 'xdcfghjkdfghjkl', 'dfghjkfghnj,k;jl:gbhnj,k;', '2019-08-08 12:15:31', 'http://localhost/website/board/uploads/', '785421â‚¬', 'e0e00353793db9438624db11dbbbc677'),
(52, 'Deserts', 'xdcfghjkdfghjkl', 'dfghjkfghnj,k;jl:gbhnj,k;', '2019-08-08 12:15:33', 'http://localhost/website/board/uploads/', '785421â‚¬', 'e0e00353793db9438624db11dbbbc677'),
(53, 'Deserts', 'xdcfghjkdfghjkl', 'dfghjkfghnj,k;jl:gbhnj,k;', '2019-08-08 12:15:34', 'http://localhost/website/board/uploads/', '785421â‚¬', 'e0e00353793db9438624db11dbbbc677'),
(54, 'Deserts', 'xdcfghjkdfghjkl', 'dfghjkfghnj,k;jl:gbhnj,k;', '2019-08-08 12:15:35', 'http://localhost/website/board/uploads/', '785421â‚¬', 'e0e00353793db9438624db11dbbbc677');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `emails` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `emails`) VALUES
(1, 'khalilelghoul01@gmail.com'),
(2, 'khalilelghoul01@gmail.com'),
(3, 'khalilelghoul01@gmail.com'),
(4, 'khalilelghoul01@gmail.com'),
(5, 'khalilelghoul01@gmail.com'),
(6, 'khalilelghoul011@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `nodupes`
--

CREATE TABLE `nodupes` (
  `ids_hash` char(64) NOT NULL,
  `time` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pageview`
--

CREATE TABLE `pageview` (
  `id` int(11) NOT NULL,
  `page` text NOT NULL,
  `userip` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `num_person` varchar(2) NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `pref_food` varchar(255) NOT NULL,
  `occasion` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `auth_link` text NOT NULL,
  `save_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `approved` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `full_name`, `email`, `phone`, `num_person`, `date`, `time`, `pref_food`, `occasion`, `status`, `auth_link`, `save_date`, `approved`) VALUES
(149, 'khalil el ghoul', 'khalilelghoul01@gmail.com', '608761158', '1', '2019-09-02', '00:05', 'pizza', 'annif', 'yes', '6ec485ab6986b1458899f2a4cdae25d86ec485ab6986b1458899f2a4cdae25d86ec485ab6986b1458899f2a4cdae25d8', '2019-08-08 14:08:47', ''),
(150, 'khalil el ghoul', 'khalilelghoul01@gmail.com', '608761158', '1', '2019-09-02', '00:05', 'pizza', 'annif', 'NO', 'b6ebe922c3969c153e06da5a2b3869a9b6ebe922c3969c153e06da5a2b3869a9b6ebe922c3969c153e06da5a2b3869a9b6ebe922c3969c153e06da5a2b3869a9b6ebe922c3969c153e06da5a2b3869a9', '2019-08-08 14:11:38', ''),
(151, 'khalil el ghoul', 'khalilelghoul01@gmail.com', '608761158', '1', '2019-09-02', '00:05', 'pizza', 'annif', 'NO', '615ff633078b83100658f259e8ad0095615ff633078b83100658f259e8ad0095615ff633078b83100658f259e8ad0095615ff633078b83100658f259e8ad0095', '2019-08-08 14:13:38', ''),
(152, 'khalil el ghoul', 'khalilelghoul01@gmail.com', '608761158', '1', '2019-09-02', '00:05', 'pizza', 'annif', 'NO', '4ce38f324d6da0ac752d6e96294fb5e84ce38f324d6da0ac752d6e96294fb5e84ce38f324d6da0ac752d6e96294fb5e84ce38f324d6da0ac752d6e96294fb5e84ce38f324d6da0ac752d6e96294fb5e84ce38f324d6da0ac752d6e96294fb5e84ce38f324d6da0ac752d6e96294fb5e84ce38f324d6da0ac752d6e96294fb5e8', '2019-08-08 14:14:26', '');

-- --------------------------------------------------------

--
-- Structure de la table `totalview`
--

CREATE TABLE `totalview` (
  `id` int(11) NOT NULL,
  `page` text NOT NULL,
  `totalvisit` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `unique_ip`
--

CREATE TABLE `unique_ip` (
  `unique_ip` int(11) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `unique_ip`
--

INSERT INTO `unique_ip` (`unique_ip`, `code`) VALUES
(760, 'localhost');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_token` text NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `birthdate` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `password_reset` text NOT NULL,
  `verification` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_token`, `f_name`, `l_name`, `username`, `email`, `phone`, `user_pass`, `birthdate`, `reg_date`, `password_reset`, `verification`, `user_status`, `user_country`, `user_gender`, `user_image`) VALUES
(6, '9e6ba344604e72c7b2fd26b36585b22d', 'khalil', 'el ghoul', 'khalil_el ghoul_529533', 'khalilelghoul01@gmail.com', '608761158', '1234567890', '2001-09-02', '2019-08-03 17:38:10', 'Iwanttoputading intheuniverse.', 'verified', 'default', 'france', 'hm', '../images/user.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hits`
--
ALTER TABLE `hits`
  ADD PRIMARY KEY (`pageid`,`isunique`),
  ADD KEY `pageid` (`pageid`);

--
-- Index pour la table `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`food_id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nodupes`
--
ALTER TABLE `nodupes`
  ADD PRIMARY KEY (`ids_hash`);

--
-- Index pour la table `pageview`
--
ALTER TABLE `pageview`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `totalview`
--
ALTER TABLE `totalview`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `unique_ip`
--
ALTER TABLE `unique_ip`
  ADD PRIMARY KEY (`unique_ip`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `ip`
--
ALTER TABLE `ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT pour la table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `pageview`
--
ALTER TABLE `pageview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT pour la table `totalview`
--
ALTER TABLE `totalview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `unique_ip`
--
ALTER TABLE `unique_ip`
  MODIFY `unique_ip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=761;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
