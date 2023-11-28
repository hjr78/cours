-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 04 oct. 2023 à 15:53
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `canapy`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `title`, `price`, `image`) VALUES
(9, 'Chaise Bureau', 100, '580b57fcd9996e24bc43c26e.png'),
(10, 'Chaise Gaming', 129.99, '580b57fcd9996e24bc43c26e.png'),
(11, 'Chaise Gaming', 129.99, '580b57fcd9996e24bc43c26e.png'),
(12, 'Chaise Gaming', 129.99, '580b57fcd9996e24bc43c26e.png'),
(13, 'Chaise Gaming', 129.99, '580b57fcd9996e24bc43c26e.png'),
(14, 'Chaise Gaming', 129.99, '580b57fcd9996e24bc43c26e.png'),
(15, 'Chaise Gaming', 129.99, '580b57fcd9996e24bc43c26e.png'),
(16, 'Chaise Gaming', 129.99, '580b57fcd9996e24bc43c26e.png'),
(17, 'Chaise Gaming', 129.99, '580b57fcd9996e24bc43c26e.png'),
(18, 'Chaise Gaming', 129.99, '580b57fcd9996e24bc43c26e.png'),
(19, 'Chaise Gaming', 129.99, '580b57fcd9996e24bc43c26e.png'),
(20, 'Chaise Gaming Bleu', 150, 'png-clipart-gaming-chair-dxracer-caster-padding-gaming-chair-blue-furniture.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `power` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `firstname`, `lastname`, `email`, `password`, `power`) VALUES
(1, 'Boris', 'Aubrun', 'boris.aubrun@gmail.com', 'test2013193', 0),
(3, 'dupont', 'dupont', 'd.d@gmail.com', 'testtest', 0),
(4, 'Test', 'Test', 'test@tesst.test', '1fb0e331c05a52d5eb847d6fc018320d', 0),
(5, 'admin', 'admin', 'admin@gmail.com', '6470a26017096ec6a046fc069c070f44', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
