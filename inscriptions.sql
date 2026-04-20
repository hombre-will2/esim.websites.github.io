-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 30 avr. 2025 à 11:57
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inscription_au_cours`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `date_naissance` date NOT NULL,
  `filiere` varchar(255) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`id`, `nom`, `prenom`, `ville`, `email`, `date_naissance`, `filiere`, `date_inscription`, `password`) VALUES
(1, 'Koffi', 'Aristide', 'Yopougon', 'aristidekoffi@gmail.com', '2004-03-18', 'IDA', '2025-03-18 17:08:31', 'aris22112'),
(3, 'Kouassi', 'konan arsen ', 'Abidjan', 'kouassiarm@gmail.com', '2003-02-20', 'TH', '2025-04-04 11:47:09', ''),
(7, 'Kone', 'Habib Hibrahim', 'Abobo', 'kohabib@gmail.com', '2000-11-13', 'IDA', '2025-04-04 11:53:44', ''),
(11, 'ETEKRI', 'MANUELA NADINE', 'Yopougon', 'manuellanadine@gmail.com', '2003-01-29', 'RHC', '2025-04-04 15:03:08', ''),
(13, 'BEKOIN', 'ERIC STEPHANE', 'Adzopé', 'ericbekoinseka12@gmail.co', '2001-09-24', 'RHC', '2025-04-04 15:08:57', ''),
(15, 'DIOMANDE', 'KARIM ', 'Abidjan', 'diomandekarim003@gmail.co', '2002-11-07', 'IDA', '2025-04-04 15:16:32', ''),
(17, 'COULIBALY', 'AMARA', 'Abidjan', 'coulibalyamara055@gmail.c', '2002-11-19', 'IDA', '2025-04-04 15:24:32', ''),
(32, 'Koné', 'Hamed', 'Abidjan', 'kohabib@gmail.com', '2004-12-12', 'GBAT', '2025-04-04 19:53:46', ''),
(40, 'prod.', 'kings', 'Abidjan', 'manuellanadine@gmail.com', '2025-04-17', 'TH', '2025-04-04 20:03:38', ''),
(41, 'prod.', 'kings', 'Abidjan', 'manuellanadine@gmail.com', '2025-04-17', 'TH', '2025-04-04 20:04:37', ''),
(44, 'Aline', 'Krabe ', 'Paris', 'kouassiarm@gmail.com', '2025-04-25', 'RHC', '2025-04-04 20:05:37', ''),
(50, 'Kouame', 'Ahou Florence', 'Divo', 'kouameahou@gmail.com', '2000-04-12', 'GBAT', '2025-04-07 08:57:51', ''),
(62, 'KOFFI', 'ARISTIDE KOUADIO NATANAËL', 'Yopougon', 'aristidekingsman@gmail.co', '2012-12-12', 'SEI', '2025-04-08 00:57:37', ''),
(63, 'Kone ', 'Diarrassouba ', 'Abobo', 'konediarra@gmail.com', '2004-06-05', 'AD', '2025-04-12 08:41:38', ''),
(64, 'Kone', 'Diarrassouba ', 'Abidjan', 'konediarra@gmail.com', '2006-07-04', 'LOG', '2025-04-12 08:55:56', ''),
(65, 'Kone', 'Diarrassouba ', 'Abidjan', 'konediarra@gmail.com', '2006-07-04', 'LOG', '2025-04-12 09:01:13', ''),
(66, 'Kone', 'Diarrassouba ', 'Abidjan', 'konediarra@gmail.com', '2006-07-04', 'LOG', '2025-04-12 09:01:18', ''),
(67, 'Kone', 'Diarrassouba ', 'Abidjan', 'konediarra@gmail.com', '2006-07-04', 'LOG', '2025-04-12 09:01:54', ''),
(68, 'Kone', 'Diarrassouba ', 'Abidjan', 'konediarra@gmail.com', '2006-07-04', 'LOG', '2025-04-12 09:01:58', ''),
(69, 'Koffi ', 'Aristide ', 'Yopougon', 'aristidekingsman@gmail.co', '2008-02-22', 'CV', '2025-04-12 14:49:50', ''),
(70, 'Koffi', 'Aristide', 'Yopougon', 'aristidekingsman@gmail.co', '2000-11-02', 'RIT', '2025-04-12 15:59:16', ''),
(71, 'KONAN', 'KOUASSI  BERNARD', 'DOUAKRO', 'konankoua@gmail.com', '2005-04-12', 'RHC', '2025-04-12 16:44:51', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
