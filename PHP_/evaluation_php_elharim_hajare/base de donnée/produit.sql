-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 sep. 2023 à 16:27
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` int(5) DEFAULT NULL,
  `reservation_text` text DEFAULT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `title`, `description`, `price`, `city`, `postal_code`, `reservation_text`, `image`) VALUES
(24, 'produit 1', 'qsdfgsdfghsdfgsd', '12.00', 'paris', 75012, 'sdfghjkoijuhygtfrde', 0x6173736574732f696d6167652f616d6720677420363320732e6a7067),
(25, 'produit 2', ' fdgsdfgsdfg', '21165.00', 'POISSY', 78300, 'fghjfghsrfhsers', 0x6173736574732f696d6167652f616d6720677420363320732e6a7067),
(26, 'produit 3', 'sfdgsfdgwsdfgwdfgsdfgq', '54654646.00', 'paris', 78300, NULL, 0x6173736574732f696d6167652f616d6720677420363320732e6a7067),
(27, 'produit 4', 'qdfqfqsdfqsdfq', '145465.00', 'fgdfg', 54545, 'cvhjcghj', 0x6173736574732f696d6167652f616d6720677420363320732e6a7067),
(28, 'produit 5', 'sdfgsdfgsdf', '2135.00', 'fgsdfgsd', 54546, NULL, 0x6173736574732f696d6167652f616d6720677420363320732e6a7067),
(29, 'produit 6', 'dfdwsfgdfghgfhd', '5646546.00', 'dhdfghdfgh', 54654, NULL, 0x6173736574732f696d6167652f617564692d72732d71382d32343537302d312e6a7067),
(30, 'produit 7', 'dfghdfgh', '99999999.99', 'dfghdgfh', 65666, NULL, 0x6173736574732f696d6167652f617564692d72732d71382d32343537302d312e6a7067),
(31, 'produit 8 ', 'fddfgsdfg', '54546.00', 'gsdfhgsfdg', 78300, 'ghjudfyud', 0x6173736574732f696d6167652f616d6720677420363320732e6a7067),
(32, 'produit 9', 'sgfsdfgsfdgs', '45698.00', 'triel', 51456, NULL, 0x6173736574732f696d6167652f617564692d72732d71382d32343537302d312e6a7067),
(33, 'produit 10', 'fsdqsdfg', '545464.00', 'POISSY', 78300, NULL, 0x6173736574732f696d6167652f616d6720677420363320732e6a7067),
(34, 'produit 11', 'fdgsdfgsdf', '54545.00', 'paris', 75012, 'rfgtchjuko', 0x6173736574732f696d6167652f616d6720677420363320732e6a7067),
(35, 'produit 12', 'dfgsdfgs', '5456.00', 'POISSY', 78300, NULL, 0x6173736574732f696d6167652f64657373696e2e706e67),
(36, 'produit 13', 'qsdgfqdgsd', '5456.00', 'POISSY', 78300, NULL, 0x6173736574732f696d6167652f616d6720677420363320732e6a7067),
(37, 'produit 14', 'dfgsdfgsd', '456545.00', 'paris', 51456, NULL, 0x6173736574732f696d6167652f616d6720677420363320732e6a7067),
(38, 'produit 15', 'fdghsdfgsd', '546546.00', 'andresy', 78250, NULL, 0x6173736574732f696d6167652f616d6720677420363320732e6a7067);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
