-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 oct. 2023 à 10:15
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
-- Base de données : `myshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` int(5) NOT NULL,
  `reservation_text` text DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `title`, `description`, `price`, `city`, `postal_code`, `reservation_text`, `image`) VALUES
(1, 'Nike Dunk Mid', 'Created for the hardwood but taken to the streets, the 80s b-ball icon returns with classic, stone-washed canvas in a durable design. Channeling vintage style back onto the streets, its padded, mid-cut collar lets you take your game anywhere—in comfort.', 150.00, 'Poissy', 78300, NULL, 'dunk-mid.jpg'),
(2, 'Nike Court Vintage Premium', 'The Nike Court Vintage Premium embodies 80s tennis at its best—laid back and stylish. The smooth leather upper combines with micro-branding for a relaxed look and feel while the cushioned sockliner provides smooth comfort with every step.', 80.00, 'Poissy', 78300, 'I d like to reserve this product', 'nike-court-vintage-premium.webp'),
(4, 'Nike Air Force 1 Low Retro', 'The radiance lives on with the b-ball original. Crossing hardwood comfort with off-court flair, its soft leather and jelly Swoosh put a premium spin on what you know best: era-echoing, 80s construction and nothin’-but-net style.', 139.99, 'Achères', 78260, NULL, 'air-force-1-low-retro.jpg'),
(5, 'Air Jordan 1 Low SE Craft', 'New colors and fresh textures give you an artisanal AJ1 that keeps the look classic and the feel familiar. This all-time favorite is made of premium materials and decked out with raw edges and contrasting stitching.', 125.00, 'Paris', 75008, 'I want this shoes Man', 'jordan-1-low-se.webp'),
(6, 'Air Jordan 1 Zoom CMFT 2', 'Premium suede and Jordan Brands signature Formula 23 foam come together to give you an extra luxurious and extra cozy AJ1. You dont need to play either or when it comes to choosing style or comfort with this one—which is nice, cause you deserve both.', 150.00, 'Paris', 75014, 'This shoes are beautifull. I want them so much.', 'air-jordan-1-zoom-cmft-2.jpg'),
(7, 'Nike Air Max 270', 'Nike s first lifestyle Air Max brings you style, comfort and big attitude in the Nike Air Max 270. The design draws inspiration from Air Max icons, showcasing Nike s greatest innovation with its large window and fresh array of colors.', 160.00, 'Le Mans', 72100, NULL, 'nike-air-max-270.webp'),
(8, 'Nike Air Huarache Runner', 'When it fits this good and looks this great, it doesn t need a big Swoosh logo. The Air Huarache takes on a classic silhouette with mixed materials and a runner-inspired design for a look that is both nostalgic and brand new. With its stretchy, foot-huggi', 109.96, 'Le Creusot', 71200, NULL, 'nike-air-huarache-runner.webp'),
(9, 'Air Jordan 11 CMFT Low', 'Brilliant and bold, the Air Jordan 11 CMFT Low is inspired by one of MJs most legendary sneakers. The lace loops and mud guard pull in distinct elements from the AJ11, while lightweight foam and Zoom Air cushioning make every step comfortable. And the pad', 130.00, 'Paris', 75001, NULL, 'air-jordan-11-cmtf-low.webp'),
(10, 'Air Jordan 5 Retro SE Craft', 'Bring some pop to your look with the AJ5, the shoe that s recognizably cool. All the original elements are here: lace toggles, premium leather and that unmissable midsole. Updated with new colors and textures, here s a shoe that keeps every look fresh.', 210.00, 'Poissy', 78300, 'I would like to reserve this shoes', 'air-jordan-5-retro-se-craft-mens-shoes-MGhD1k.jpg'),
(11, 'Nike Air Force 1 Low Retro', 'A scorching edition to your AF1 collection, this head-turning take on the hoops-to-street icon brings the heat. Contrasting colors add a bold look to any fit, while Nike Air cushioning puts the cherry on the bottom.', 89.99, 'Achères', 78260, NULL, 'nike-air-force-1-low-retro.webp'),
(12, 'Nike Blazer Mid 77 Vintage', 'In the 70s, Nike was the new shoe on the block. So new in fact, we were still breaking into the basketball scene and testing prototypes on the feet of our local team. Of course, the design improved over the years, but the name stuck. The Nike Blazer Mid 7', 84.99, 'Paris', 75019, NULL, 'nike-balzer-mid-77 Vintage.webp'),
(13, 'Nike Air Max Plus', 'Let your attitude have the edge with flame-like caging that adds heat to the streets while airy mesh keeps you cool. The Nike Air Max Plus gives you a tuned Nike Air experience that offers premium stability and unbelievable cushioning.', 175.00, 'Paris', 75001, NULL, 'nike-air-max-plus.webp'),
(14, 'Air Jordan 1 Mid SE', 'The AJ1 mid remakes a classic. Bold colors and contrasting textures give you a fresh look with a familiar feel. Premium materials and accents give modern expression to an all-time favorite.', 109.99, 'Paris', 75002, NULL, 'air-jordan-1-mid-se-womens-shoes-wkMdft.jpg'),
(15, 'Nike Air Force 1 07 WB', 'The legend lives on in the Nike Air Force 1 07 WB, a low-cut take on the iconic AF1 that offers classic court style and premium cushioning.', 140.00, 'Poissy', 78300, 'I would love to have them in my collection.', 'nike-air-force-1-07-wb.webp'),
(16, 'Air Jordan 1 Low', 'Inspired by the original that debuted in 1985, the Air Jordan 1 Low offers a clean, classic look that s familiar yet always fresh. With an iconic design that pairs perfectly with any fit, these kicks ensure youll always be on point.', 110.00, 'Achères', 78260, NULL, 'air-jordan-1-low-mens-shoes-hvs8vl.jpg'),
(17, 'Air Jordan 1 Zoom CMFT 2', 'Premium suede and Jordan Brand s signature Formula 23 foam come together to give you an extra luxurious (and extra cozy) AJ1. You dont need to play either or when it comes to choosing style or comfort with this one—which is nice, cause you deserve both.', 105.99, 'Paris', 75009, 'I would like this shoes please.', 'air-jordan-1-zoom-cmft-2-mens-shoes-Tw02qw.jpg'),
(18, 'Nike SB Chron 2 Canvas', 'The Nike SB Chron 2 Canvas is the newest member of the Chron family. The revamped design includes a reshaped collar and heel for an improved fit\'all while maintaining the comfort and performance you expect from Nike SB.', 65.00, 'Paris', 75008, 'TEST', 'sb-chron-2-canvas-skate-shoes-VmcNLG.jpg'),
(19, 'Nike SB Zoom Nyjah 3', 'Light. Effortless. On point. The Nyjah 3 delivers the next iteration of the skate shoe that\'s as extraordinary as Nyjah. Zoom Air cushioning pairs with a honeycomb outsole that\'s grippy yet featherlight.', 110.00, 'Paris', 75007, 'RESERVE', 'nike-sb-zoom-nyjah-3.webp'),
(20, 'Nike SB Zoom Blazer Mid Premium', 'The Zoom Blazer Mid is an iconic hoops shoe tailored to the needs of the modern skateboarder. Textured suede creates a premium yet durable feel, while tacky rubber adds flexible grip and comfort that lasts.', 80.00, 'Paris', 75010, 'This shoes are amazing. I\'d love to have them.', 'sb-zoom-blazer-mid-premium-skate-shoes-h8zhH6.jpg');

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
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
