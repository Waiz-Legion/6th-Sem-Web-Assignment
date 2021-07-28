CREATE DATABASE IF NOT EXISTS `sol9` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sol9`;

CREATE TABLE IF NOT EXISTS `informations` (
  `name` varchar(20) NOT NULL,
  `addr1` varchar(50) NOT NULL,
  `addr2` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;