-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 oct. 2023 à 15:51
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
(41, 'Produit 1', 'bfshdjfjs', '45000.00', 'Poissy', 78300, NULL, 0x616d672067742e6a666966),
(42, 'Produit 2', 'fgsxghsd', '150000.00', 'Poissy', 78300, NULL, 0x436c6173732047204272616275732d347834c2b22e77656270),
(43, 'Produit 3', 'ghxfghdfgh', '990000.00', 'Poissy', 78300, NULL, 0x6774203320727320706f72736368652e77656270),
(44, 'Produit 4', 'stdysryr', '465465.00', 'Poissy', 78300, NULL, 0x617564692074742072732e6a7067),
(45, 'Produit 5', 'gfhsf', '4247.00', 'Poissy', 78300, NULL, 0x617564692d61312d73622d323031382d66726f6e742d62756d7065722d766965772e77656270),
(46, 'Produit 6', 'jhjplhjiohj', '45000.00', 'Poissy', 78300, NULL, 0x617564692d72732d71382d32343537302d312e6a7067),
(47, 'Produit 7', 'rgqseRER', '150000.00', 'Poissy', 78300, NULL, 0x616d672067742e6a666966),
(48, 'Produit 8', 'QSDFef', '4587.00', 'Poissy', 78300, NULL, 0x636f766572696e672e6a7067),
(49, 'Produit 9', 'drezdsq', '12587.00', 'Poissy', 78300, NULL, 0x617564692074742072732e6a7067),
(50, 'Produit 10', 'dfqsfdzar', '14656.00', 'Poissy', 78300, NULL, 0x6d657263656465732d636c617373652d612e6a7067),
(51, 'Produit 11', 'sgserfger', '98786.00', 'Poissy', 78300, NULL, 0x636f766572696e672e6a7067),
(52, 'Produit 12', 'sfvgdfg', '8798.00', 'Poissy', 78300, NULL, 0x6973746f636b70686f746f2d313039323934383137362d363132783631322e6a7067),
(53, 'Produit 13', 'zersgerg', '123.00', 'Poissy', 78300, NULL, 0x6973746f636b70686f746f2d313039323934383137362d363132783631322e6a7067),
(54, 'Produit 14', 'zzeryzrg', '956.00', 'Poissy', 78300, NULL, 0x617564692d72732d71382d32343537302d312e6a7067),
(55, 'Produit 15', 'stryhtfjud', '125000.00', 'Poissy', 78300, NULL, 0x616d672067742e6a666966),
(56, 'Produit 15', 'stryhtfjud', '125000.00', 'Poissy', 78300, NULL, 0x616d672067742e6a666966);

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
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
