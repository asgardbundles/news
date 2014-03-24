DROP TABLE IF EXISTS `actualite`;
CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `published` int(1) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `value`
--

DROP TABLE IF EXISTS `value`;
CREATE TABLE IF NOT EXISTS `value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) DEFAULT NULL,
  `value` text,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `value`
--

INSERT INTO `value` (`id`, `key`, `value`, `updated_at`, `created_at`) VALUES
(1, 'name', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'email', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'head_script', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');