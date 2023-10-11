-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 oct. 2023 à 11:16
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `competencesdatabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `ID` int(11) NOT NULL,
  `REFERENCE` varchar(2) NOT NULL,
  `CODE` varchar(100) NOT NULL,
  `NOM` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`ID`, `REFERENCE`, `CODE`, `NOM`) VALUES
(1, 'C1', 'Maquette', 'Maquetter une application mobile'),
(2, 'C2', 'Base Données', 'Manipuler une base de données - perfectionnement'),
(3, 'C3', 'back-end', 'Développer la partie back-end d’une application web ou web mobile - perfectionnement'),
(4, 'C4', 'Gestion', 'Collaborer à la gestion d’un projet informatique et à l’organisation de l’environnement de développement - perfectionnement'),
(5, 'C5', 'mobile Native', 'Développer une application mobile native, with Android and React Native'),
(6, 'C6', 'Tests', 'Préparer et exécuter les plans de tests d’une application'),
(7, 'C7', 'Deploiement', 'Préparer et exécuter le déploiement d’une application web et mobile - perfectionnement');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
