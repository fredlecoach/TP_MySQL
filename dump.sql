-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 21 jan. 2024 à 21:11
-- Version du serveur :  8.0.35-0ubuntu0.20.04.1
-- Version de PHP : 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `module6`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cv` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `dt_naissance` date NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `dt_mis_a_jour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `prenom`, `nom`, `email`, `cv`, `dt_naissance`, `isAdmin`, `dt_mis_a_jour`) VALUES
(1, 'Nicolas', 'Maillot', 'nico@yahoo.fr', '', '1990-02-19', 1, '2024-01-21 20:08:31'),
(2, 'Rickson', 'Gracie', 'r.gracie@hotmail.com', '', '1965-01-11', 1, '2024-01-21 20:08:31'),
(3, 'Vitor', 'Belfort', 'v.b@gmail.com', '', '2023-01-17', 0, '2024-01-21 20:08:31'),
(4, 'Tank', 'Abbot', 'abbot@hotmail.com', '', '1973-02-23', 0, '2024-01-21 20:08:31'),
(5, 'Mike', 'Tyson', 'Iron.mike@gmail.com', '', '1969-05-16', 1, '2024-01-21 20:08:31'),
(6, 'Bruce', 'Lee', 'lee@yahoo.fr', '', '1956-03-24', 1, '2024-01-21 20:08:31'),
(7, 'Khabib', 'Nurmagomedov', 'kn@gmail.com', '', '1992-10-14', 1, '2024-01-21 20:08:31'),
(8, 'Connor', 'Mcgregor', 'CM@yahoo.fr', '', '1993-01-25', 0, '2024-01-21 20:08:31'),
(9, 'Gordon', 'Rayan', 'gordon.r@gmail.com', '', '1996-02-10', 1, '2024-01-21 20:08:31'),
(10, 'John', 'Jones', 'jj@hotmail.fr', '', '1995-11-15', 1, '2024-01-21 20:08:31');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
