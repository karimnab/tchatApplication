-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 13 mai 2018 à 17:32
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tchat`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `sender_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `content`, `created`, `receiver_id`, `sender_id`) VALUES
(44, '<p>ezezze</p>', '2018-05-13 15:02:48', 9, 1),
(43, '<p>ddd</p>', '2018-05-13 15:00:23', 7, 1),
(42, '<p>ssss</p>', '2018-05-13 14:58:35', 10, 1),
(38, '<p>loubna</p>', '2018-05-13 13:54:47', 7, 1),
(37, '<p>bbbbbbbbbbbb</p>', '2018-05-13 13:54:11', 1, 1),
(47, 'dddd', '2018-05-13 16:02:23', 0, 1),
(48, 'dssdsd', '2018-05-13 16:10:17', 0, 1),
(50, '<p>zzz</p>', '2018-05-13 16:14:45', 4, 1),
(52, '<p>sssqd</p>', '2018-05-13 16:16:28', 4, 1),
(54, '<p>ddds</p>', '2018-05-13 16:26:33', 9, 1),
(58, '<p>bbbbbbbbbbb</p>', '2018-05-13 17:31:23', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'auth'),
(4, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'auth'),
(5, 'coco', '09f836894fc1fe9af6f429fc24dcccc2e6847fe0', 'auth'),
(6, 'qsqs', '4ed5f0d368e6a93e3fdf2e0bccdddb4b66c47e83', 'auth'),
(7, 'trrr', 'c07089631c3e9ac742a6d04401d2f33ab85f1b33', 'auth'),
(8, 'trrrdf', '4a8a9fc31dc15a4b87bb145b05db3ae0bf2333e4', 'auth'),
(9, 'sdsds', '12975910c3e6352b5b2bdee81fa2fc4653a5bd59', 'auth'),
(10, 'tttttt', 'e950c1517ee0d7e20454d22c306c4c501a7cf11c', 'auth'),
(11, 'ddddd', '1eb0f77975621f26a4f73c83a66a7b3d6effd3c1', 'auth');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posts_users1` (`receiver_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
