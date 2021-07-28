CREATE DATABASE IF NOT EXISTS `sol13` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sol13`;

CREATE TABLE IF NOT EXISTS `information` (
  `accession` INT(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `edition` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;