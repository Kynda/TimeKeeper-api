CREATE TABLE `time` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `hours` float NOT NULL,
  `account` varchar(55) NOT NULL,
  `task` varchar(55) NOT NULL,
  `notes` text NOT NULL,
  `billable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_email` (`email`),
  KEY `idx_account` (`account`),
  KEY `idx_task` (`task`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
