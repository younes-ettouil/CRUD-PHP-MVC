-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 mai 2021 à 08:17
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_book`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `annee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id_book`, `name`, `auteur`, `annee`) VALUES
(195, 'maths', '', ''),
(196, 'maths', '', ''),
(197, 'maths', '', ''),
(198, 'Maths', 'Younes ET-TOUIL', '2011'),
(199, 'physics', 'saad bouryaln', '2018'),
(201, '', '', ''),
(202, '', '', ''),
(203, '', '', ''),
(204, 'Maths', 'mounya tahouach', '2010'),
(205, 'basics C#', 'Younes ET-TOUIL', '2018'),
(206, 'intro C++', 'mohammed et-touil', '2015'),
(207, 'sad stories', 'saad bouryaln', '2018'),
(208, 'info', 'adnane et-touil', '2010');

-- --------------------------------------------------------

--
-- Structure de la table `bookstore`
--

CREATE TABLE `bookstore` (
  `id_bookstore` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `adresse` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bookstore`
--

INSERT INTO `bookstore` (`id_bookstore`, `name`, `adresse`, `email`, `telephone`) VALUES
(8, 'mounya TAHOUACHE', '23 rue F essalame 2 meriem  Tanger', 'mounya.tahouache@gmail.com', '0656867895'),
(9, 'ali salmi', '20 rue 10  casa', 'ali.salmi @gmail.com', '053456789'),
(10, 'younes  et-touil', '23 rue F essalame 2 meriem  Tanger', 'younes.ettouil@gmail.com', '06123456789');

-- --------------------------------------------------------

--
-- Structure de la table `has`
--

CREATE TABLE `has` (
  `id_has` int(11) NOT NULL,
  `date_has` varchar(255) DEFAULT NULL,
  `id_book` int(11) NOT NULL,
  `id_bookstore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `has`
--

INSERT INTO `has` (`id_has`, `date_has`, `id_book`, `id_bookstore`) VALUES
(21, NULL, 198, 10),
(22, NULL, 199, 9),
(27, NULL, 204, 8),
(28, NULL, 205, 8),
(29, NULL, 206, 8),
(30, NULL, 207, 9),
(31, NULL, 208, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Index pour la table `bookstore`
--
ALTER TABLE `bookstore`
  ADD PRIMARY KEY (`id_bookstore`);

--
-- Index pour la table `has`
--
ALTER TABLE `has`
  ADD PRIMARY KEY (`id_has`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_bookstore` (`id_bookstore`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT pour la table `bookstore`
--
ALTER TABLE `bookstore`
  MODIFY `id_bookstore` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `has`
--
ALTER TABLE `has`
  MODIFY `id_has` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `has`
--
ALTER TABLE `has`
  ADD CONSTRAINT `has_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `book` (`id_book`),
  ADD CONSTRAINT `has_ibfk_2` FOREIGN KEY (`id_bookstore`) REFERENCES `bookstore` (`id_bookstore`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
