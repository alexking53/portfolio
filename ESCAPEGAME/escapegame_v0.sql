-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 02 fév. 2021 à 13:12
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `escapegame_v0`
--

-- --------------------------------------------------------

--
-- Structure de la table `enigme`
--

DROP TABLE IF EXISTS `enigme`;
CREATE TABLE IF NOT EXISTS `enigme` (
  `num_enigme` int(11) NOT NULL AUTO_INCREMENT,
  `lib_enigme` varchar(255) CHARACTER SET latin1 NOT NULL,
  `rep_enigme` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_level` int(11) NOT NULL,
  PRIMARY KEY (`num_enigme`),
  KEY `id_level` (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enigme`
--

INSERT INTO `enigme` (`num_enigme`, `lib_enigme`, `rep_enigme`, `id_level`) VALUES
(1, 'Le mot de passe du téléphone', 'minette4', 1),
(2, 'email', 'btssio@gmail.com', 1),
(3, 'mot de passe écran', 'pythagore', 1);

-- --------------------------------------------------------

--
-- Structure de la table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `id_level` int(11) NOT NULL,
  `lib_level` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `level`
--

INSERT INTO `level` (`id_level`, `lib_level`) VALUES
(1, 'salle de Sciences');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enigme`
--
ALTER TABLE `enigme`
  ADD CONSTRAINT `enigme_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
