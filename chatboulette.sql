-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Janvier 2017 à 16:48
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `chatboulette`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=249 ;

--
-- Contenu de la table `chat`
--

INSERT INTO `chat` (`id`, `pseudo`, `date`, `message`) VALUES
(238, 'moi2', '2017-01-11 15:14:00', 'hello'),
(239, 'moi', '2017-01-11 15:14:21', 'hello toi même'),
(240, 'moi2', '2017-01-11 15:14:39', 'ça roule'),
(241, 'moi', '2017-01-11 15:14:44', ''),
(242, '', '2017-01-11 16:35:18', 'ùpopoii'),
(243, '', '2017-01-11 16:36:28', 'fe'),
(244, 'sandra', '2017-01-11 16:38:19', 'coucou'),
(245, 'moi', '2017-01-11 16:38:42', 'iuyoyuoipou'),
(246, 'sandra', '2017-01-11 16:41:32', 'C:wampwwwprojetme'),
(247, 'moi', '2017-01-11 16:43:48', 'moiuuoiu'),
(248, 'sandra', '2017-01-11 16:43:59', 'sdc<cw');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
