--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`name`,`author`) VALUES
('What young India wants', 'Chetan Bhagat'),
('Two States', 'Chetan Bhagat'),
('The hunger games', 'Suzanne Collions'),
('The 3 mistakes of my life', '	Chetan Bhagat'),
('Serious Men', '	Manu Joseph'),
('Revolution 2020', '	Chetan Bhagat'),
('God"s Little Soldier', 'Kiran Nagarkar');
