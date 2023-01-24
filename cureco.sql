-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 24 jan. 2023 à 20:39
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cureco`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(2) NOT NULL,
  `nom` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(19, 'SkinCare'),
(20, 'Vitamines'),
(21, 'Medicines'),
(22, 'Organic'),
(23, 'Mum&Baby'),
(24, 'WeightLoss'),
(25, 'Beauty');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `nom`, `company`, `price`, `description`, `image`, `quantity`, `id_category`) VALUES
(103, 'Corporis cupidatat f', 'Ferguson and Hartman Inc', 609, 'Nisi natus ullam qua', 'uploads/Capture d’écran 2022-10-19 224815.png', 851, 22),
(105, 'Et sit officiis vel', 'Underwood and Washington Plc', 225, 'Minus cupidatat omni', 'uploads/Capture d’écran 2022-10-19 224815.png', 604, 21),
(106, 'Sint impedit aut e', 'Berg and Coffey Inc', 205, 'Quam voluptatibus co', 'uploads/medical-banner-with-doctor-holding-stethoscope.jpg', 799, 22),
(108, 'Earum doloribus sunt', 'Stephens Robertson Plc', 89, 'Omnis quidem sit mag', 'uploads/pexels-anna-shvets-3683068.jpg', 541, 23),
(110, 'Non in sed maiores l', 'Kaufman Walls Trading', 818, 'Occaecat Nam qui rer', 'uploads/Capture d’écran 2022-10-19 224815.png', 342, 21),
(111, 'Consequatur Est ve', 'Sharp and Combs Inc', 102, 'Dicta sit fugit nih', 'uploads/Capture d’écran 2022-10-19 224815.png', 889, 23),
(112, 'doliprane', 'Softel', 234, 'zgfnhk jjhsdfo jiooiadn sidhiji  ijid  ijsd', 'uploads/pexels-ready-made-3850721.jpg', 54, 19),
(113, 'Aliquid dolores aliq', 'Snider and Eaton Plc', 132, 'Voluptatem esse lore', 'uploads/pexels-anna-shvets-3683068.jpg', 989, 22),
(114, 'Repellendus Ea eu c', 'Atkins Newton Plc', 334, 'Ipsam saepe dolore u', 'uploads/pexels-anna-shvets-3683068.jpg', 802, 23),
(118, 'Ut inventore tempore', 'Perkins Reyes Inc', 359, 'Ad molestias qui occ', 'u', 299, 24),
(121, 'Perspiciatis ipsa', 'Lowery Mclaughlin Inc', 185, 'Dolores ut odio cons', '', 220, 25),
(122, 'Sit eos nihil molli', 'Miller and Mack Associates', 611, 'Adipisicing vel ea i', '', 964, 24),
(123, 'Perferendis eiusmod', 'Mccormick Kline LLC', 798, 'Consequatur aliqua', 'l', 997, 25);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `password`, `role`) VALUES
(1, 'asiyya', 'asiyya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'asiyyaa', 'asiyyaa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
