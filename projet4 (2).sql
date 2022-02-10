-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 10 fév. 2022 à 14:40
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet4`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `description` text,
  `prix` varchar(50) DEFAULT NULL,
  `id_categorie` varchar(50) DEFAULT NULL,
  `id_email` varchar(50) DEFAULT NULL,
  `id_photo` varchar(50) DEFAULT NULL,
  `validite` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `nom`, `description`, `prix`, `id_categorie`, `id_email`, `id_photo`, `validite`) VALUES
(1, 'villa Pietro de st baldoph', 'lorem', '3000', '1', '1', '1', ''),
(32, 'chambre Delgado', 'lorem', '500', NULL, NULL, NULL, NULL),
(34, 'Domaine de Rhodes', 'lorem', '3000', NULL, NULL, NULL, NULL),
(35, 'La Laiterie de Tocqueville', 'lorem', '4500', NULL, NULL, NULL, NULL),
(36, 'Santa Giulia Palace', 'lorem', '3500', NULL, NULL, NULL, NULL),
(37, 'Gîtes d\'Armor', 'lorem', '3200', NULL, NULL, NULL, NULL),
(38, 'Natura Lodge', 'lorem', '2500', NULL, NULL, NULL, NULL),
(47, 'Casa Dina', 'lorem', '3500', NULL, NULL, NULL, NULL),
(83, 'sbsdbs', 'herhr', '1741', NULL, '3', NULL, NULL),
(84, 'sbsdbs', 'herhr', '1741', NULL, '3', NULL, NULL),
(85, 'sbsdbs', 'herhr', '14', NULL, '11', NULL, NULL),
(86, 'sbsdbs', 'herhr', '14', NULL, '11', NULL, NULL),
(87, 'sbsdbs', 'herhr', '14', NULL, '11', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `categorie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `categorie`) VALUES
(1, ''),
(2, 'ttkt'),
(3, 'ttkt'),
(4, 'ttkt'),
(5, 'ttkt'),
(6, 'ttkt'),
(7, 'ttkt'),
(8, 'ttkt'),
(9, 'ttkt'),
(10, 'ttkt');

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `email`
--

INSERT INTO `email` (`id`, `email`) VALUES
(3, 'ktkyky@djdj.com'),
(11, 'YURRIMUTO@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `url`
--

CREATE TABLE `url` (
  `id` int(11) NOT NULL,
  `url` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `url`
--
ALTER TABLE `url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
