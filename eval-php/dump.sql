-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 21 jan. 2024 à 10:25
-- Version du serveur :  8.0.35-0ubuntu0.20.04.1
-- Version de PHP : 8.2.14

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
  `prenom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cv` text COLLATE utf8mb4_general_ci NOT NULL,
  `dt_naissance` date NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `dt_mis_a_jour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `prenom`, `nom`, `email`, `cv`, `dt_naissance`, `isAdmin`, `dt_mis_a_jour`) VALUES
(1, 'Jean', 'Doe', 'jean.doe@gmail.com', 'cv de l\'étudiant', '2000-01-02', 1, '2024-01-21 09:32:15'),
(2, 'Nicolas', 'Dupont', 'nicolas.dupont@gmail.fr', 'cv de l\'étudiant', '2024-06-15', 1, '2024-01-21 09:38:43'),
(3, 'Marie', 'Loure', 'marie.loure@outlook.com', 'cv de l\'étudiant', '2002-01-10', 1, '2024-01-21 09:41:48'),
(4, 'Zoe', 'Marcous', 'zoe.marcous@gmail.com', 'cv de l\'étudiant', '2004-01-09', 0, '2024-01-21 09:41:48'),
(5, 'Karmene', 'Saindigo', 'karmene.saindigo@yahoo.fr', 'cv de l\'étudiant', '2001-01-02', 0, '2024-01-21 09:44:33'),
(6, 'Stephane', 'Dupant', 'stephane.dupant@gmail.com', 'cv de l\'étudiant', '1989-01-05', 0, '2024-01-21 09:44:33'),
(7, 'Ilisa', 'Redriguis', 'ilisa.redriguis@outlook.com', 'cv de l\'étudiant', '1987-01-02', 0, '2024-01-21 09:47:44'),
(8, 'Paul', 'Hogu', 'paul.hugo@gmail.com', 'cv de l\'étudint', '1984-01-04', 0, '2024-01-21 09:47:44'),
(9, 'Illina', 'Legrand', 'illina.legrand@yahoo.fr', 'cv de l\'étudiant', '2000-01-09', 1, '2024-01-21 09:52:35'),
(10, 'Sarra', 'Larson', 'sarra.larson@gmail.com', 'cv de l\'étudiant', '1987-01-08', 1, '2024-01-21 09:52:35');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
