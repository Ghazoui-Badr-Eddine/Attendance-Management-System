-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 19 Mai 2018 à 18:57
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db`
--

-- --------------------------------------------------------

--
-- Structure de la table `etud`
--

CREATE TABLE IF NOT EXISTS `students` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etud`
--

INSERT INTO `students` (`fname`, `lname`, `age`) VALUES
('Jane', 'Doe', 22),
('Jared', 'Smith', 23),
('Mary', 'Williams', 25),
('Kate', 'Brown', 19),
('Sam', 'Rodriguez', 21),
('Randy', 'Miller', 21),
('Margrett', 'Jones', 20),
('Lisa', 'Ramirez', 15),
('Brandon', 'Richardson', 23),
('Harry', 'Wood', 19),
('Adam', 'Brooks', 20),
('Brad', 'Rodriguez', 22),
('Krystof', 'Miller', 22),
('David', 'Bennett', 23),
('Michael', 'Howard', 23),
('Peter', 'Gomez', 21),
('Julian', 'Bell', 20);
--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `dname` varchar(80) NOT NULL,
  `deptno` int(11) NOT NULL,
  KEY `deptno` (`deptno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `dept`
--

INSERT INTO `dept` (`dname`, `deptno`) VALUES
('finance', 5);

-- --------------------------------------------------------

--
-- Structure de la table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `ename` varchar(80) NOT NULL,
  `empno` int(11) NOT NULL,
  `deptno` int(11) NOT NULL,
  PRIMARY KEY (`empno`),
  KEY `deptno` (`deptno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `emp`
--

INSERT INTO `emp` (`ename`, `empno`, `deptno`) VALUES
('jane', 2, 14);
--
-- Base de données :  `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `dooo`
--

CREATE TABLE IF NOT EXISTS `dooo` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `rfid` text NOT NULL,
  `allow` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `dooo`
--

INSERT INTO `dooo` (`ID`, `rfid`, `allow`, `date`) VALUES
(1, '224433927', 1, '2018-05-19 12:56:54'),
(2, '1610219273', 1, '2018-05-19 12:57:09'),
(3, '188327133', 1, '2018-05-19 12:57:15'),
(4, '188327133', 1, '2018-05-19 12:58:16');

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

CREATE TABLE IF NOT EXISTS `emploi` (
  `lundi1` text NOT NULL,
  `fil` text NOT NULL,
  `sem` text NOT NULL,
  `lundi2` text NOT NULL,
  `lundi3` text NOT NULL,
  `lundi4` text NOT NULL,
  `lundi5` text NOT NULL,
  `lundi6` text NOT NULL,
  `mardi1` text NOT NULL,
  `mardi2` text NOT NULL,
  `mardi3` text NOT NULL,
  `mardi4` text NOT NULL,
  `mardi5` text NOT NULL,
  `mardi6` text NOT NULL,
  `mercredi1` text NOT NULL,
  `mercredi2` text NOT NULL,
  `mercredi3` text NOT NULL,
  `mercredi4` text NOT NULL,
  `mercredi5` text NOT NULL,
  `mercredi6` text NOT NULL,
  `jeudi1` text NOT NULL,
  `jeudi2` text NOT NULL,
  `jeudi3` text NOT NULL,
  `jeudi4` text NOT NULL,
  `jeudi5` text NOT NULL,
  `jeudi6` text NOT NULL,
  `vendredi1` text NOT NULL,
  `vendredi2` text NOT NULL,
  `vendredi3` text NOT NULL,
  `vendredi4` text NOT NULL,
  `vendredi5` text NOT NULL,
  `vendredi6` text NOT NULL,
  `samedi1` text NOT NULL,
  `samedi2` text NOT NULL,
  `samedi3` text NOT NULL,
  `samedi4` text NOT NULL,
  `samedi5` text NOT NULL,
  `samedi6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `emploi`
--

INSERT INTO `emploi` (`lundi1`, `fil`, `sem`, `lundi2`, `lundi3`, `lundi4`, `lundi5`, `lundi6`, `mardi1`, `mardi2`, `mardi3`, `mardi4`, `mardi5`, `mardi6`, `mercredi1`, `mercredi2`, `mercredi3`, `mercredi4`, `mercredi5`, `mercredi6`, `jeudi1`, `jeudi2`, `jeudi3`, `jeudi4`, `jeudi5`, `jeudi6`, `vendredi1`, `vendredi2`, `vendredi3`, `vendredi4`, `vendredi5`, `vendredi6`, `samedi1`, `samedi2`, `samedi3`, `samedi4`, `samedi5`, `samedi6`) VALUES
(' kh', 'S3', 'SMA', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' jg', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' kjhhj', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(' base de donnes', 'SMI', 'S6', ' ', 'conception', ' java', ' ', ' ', ' ', ' td java', ' administration', ' ', ' programmation', ' ', ' ', ' sport', ' ', ' td conception', ' ', ' ', ' jee', ' ', ' java', ' ', ' cours plsql', ' ', ' ', ' ', ' ', ' java td/amphi6', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
(' rjfjjjgjgr', 'SMA', 'S3', ' ', ' ', ' ', ' ', ' ', ' ', ' jkdejhjheezkj', ' ', 'ekl,lke', ' ', ' ', ' ', ' ', ' ejlelzjkjlkeljz', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
(' dfghjkl', 'SMI', 'S4', ' ', ' ', ' ', ' ', ' ', ' ', ' ertyuiop', ' tghyjkl', ' ', ' dfghjkl', ' ', ' ', ' ', ' ', ' dfghjkl', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' dfghjk', ' ', ' ', ' ', ' ', ' ', ' ', ' dfghjkl'),
(' dfghjkl', 'SMI', 'S4', ' ', ' ', ' ', ' ', ' ', ' ', ' ertyuiop', ' tghyjkl', ' ', ' dfghjkl', ' ', ' ', ' ', ' ', ' dfghjkl', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' dfghjk', ' ', ' ', ' ', ' ', ' ', ' ', ' dfghjkl');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `CNE` varchar(20) NOT NULL,
  `CNI` text NOT NULL,
  `CODE_APOGEE` text NOT NULL,
  `FIRST_NAME` text NOT NULL,
  `LAST_NAME` text NOT NULL,
  `CODE_CARTE` text NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `PHONE_NUMBER` text NOT NULL,
  `ADDRESS` text NOT NULL,
  `EMAIL_ADDRESS` text NOT NULL,
  `SEMESTRE` text NOT NULL,
  `FILLIERE` text NOT NULL,
  PRIMARY KEY (`CNE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`CNE`, `CNI`, `CODE_APOGEE`, `FIRST_NAME`, `LAST_NAME`, `CODE_CARTE`, `DATE_OF_BIRTH`, `PHONE_NUMBER`, `ADDRESS`, `EMAIL_ADDRESS`, `SEMESTRE`, `FILLIERE`) VALUES
('12654795', '12364831', '14650235', 'Jane', 'Doe', '224433927', '1995-05-19', '77894646', 'cd', 'st4@gmail.com', 'S6', 'SMA'),
('141265478', '12645', '14506655', 'Kate', 'Brown', '************', '1996-03-11', '7745285263', 'nj', 'st3@gmail.com', 'S6', 'SMI'),
('14236589', '216548', '1265487', 'Randy', 'Miller', '188327133', '1995-05-06', '772503124', 'la', 'st1@gmail.com', 'S4', 'SMA'),
('6532652365', '123465586', '14526446', 'Jared', 'Smith', '1610219273', '1996-05-06', '7740205252', 'nyc', 'st2@gmail.com', 'S6', 'SMI');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');
--
-- Base de données :  `rfidesp`
--

-- --------------------------------------------------------

--
-- Structure de la table `dooo`
--

CREATE TABLE IF NOT EXISTS `rfid` (
  `ID` bigint(20) NOT NULL,
  `rfid` text NOT NULL,
  `allow` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rfid`
--

CREATE TABLE IF NOT EXISTS `rfid` (
  `ID` bigint(20) NOT NULL,
  `rfid` text,
  `allow` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_2` (`ID`),
  UNIQUE KEY `ID_3` (`ID`),
  UNIQUE KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rfid`
--

INSERT INTO `rfid` (`ID`, `rfid`, `allow`, `date`) VALUES
(0, '123654789', '1', '2018-05-11 18:18:16');
--
-- Base de données :  `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
