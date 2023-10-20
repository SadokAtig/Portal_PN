-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 16 juil. 2023 à 15:07
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portail_pn`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('sadok', 'sadok123');

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `register` varchar(100) NOT NULL,
  `identity` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `base` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `title` varchar(100) NOT NULL,
  `pn` varchar(100) NOT NULL,
  `typ` varchar(100) NOT NULL,
  `descri` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sign`
--

CREATE TABLE `sign` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `mail` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `identity` varchar(50) NOT NULL,
  `register` varchar(50) NOT NULL,
  `pn` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `base` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sign`
--

INSERT INTO `sign` (`id`, `name`, `date`, `mail`, `number`, `gender`, `pseudo`, `identity`, `register`, `pn`, `type`, `sector`, `base`) VALUES
(1, 'Atig sadok', '2023-07-07', 'atigsadek@gmail.com', '50804571', 'Male', 'sadok', '14367017', '748851', 'PNT', 'OPL', 'A330', 'Djerba'),
(2, 'atig mouhamed', '2023-07-06', 'hama@gmail.com', '52585604', 'Male', 'moon', '14253698', '748851', 'PNT', 'CDB', 'A320', 'Tunis'),
(3, 'benarfa saif', '2023-07-14', 'sadif@gmail.com', '24396852', 'Male', 'sisko', '81881818', '748851', 'PNC', 'PNC', 'PNC', 'Djerba');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
