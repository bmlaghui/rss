-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 30 jan. 2019 à 11:24
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pressbook`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `flux_id` int(11) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text,
  `guid` varchar(2048) DEFAULT NULL,
  `url` varchar(2048) DEFAULT NULL,
  `source` varchar(2048) DEFAULT NULL,
  `pubDate` datetime DEFAULT NULL,
  `flux_batch_id` int(11) DEFAULT NULL,
  `md5_hash` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `flux_id`, `titre`, `description`, `guid`, `url`, `source`, `pubDate`, `flux_batch_id`, `md5_hash`) VALUES
(1, 1, 'Article 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta ut sem et viverra. Nulla ultrices efficitur dui finibus luctus. Proin eu sapien elit. Integer massa augue, pharetra ac augue quis, blandit tempus metus. Nullam imperdiet, dolor elementum posuere rhoncus, lorem arcu ultricies sapien, sit amet dapibus eros elit non metus. Aenean sit amet arcu blandit, finibus ipsum non, fermentum elit. Maecenas lorem est, hendrerit sed tempor id, feugiat sed magna. Nam viverra nisl eu mauris consequat facilisis.\r\n\r\n', NULL, NULL, NULL, '2019-01-16 00:00:00', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article_sport`
--

CREATE TABLE `article_sport` (
  `article_id` int(11) DEFAULT NULL,
  `sport_id` int(11) NOT NULL,
  `club_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `club`
--

INSERT INTO `club` (`id`, `nom`, `image`) VALUES
(1, 'ESPERANCE SPORTIVE DE TUNIS', 'est.png'),
(2, 'PARIS SAINT-GERMAIN', 'psg.png');

-- --------------------------------------------------------

--
-- Structure de la table `club_sport`
--

CREATE TABLE `club_sport` (
  `club_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `flux`
--

CREATE TABLE `flux` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `ttl` int(11) NOT NULL DEFAULT '3600',
  `actif` tinyint(1) DEFAULT '1',
  `dateSucces` datetime DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `flux`
--

INSERT INTO `flux` (`id`, `title`, `url`, `ttl`, `actif`, `dateSucces`, `image`) VALUES
(1, 'L’Est-Républicain', 'https://www.estrepublicain.fr/sport/rss', 3600, 1, '2019-01-17 03:00:29', 'er.jpg'),
(2, 'Le Républicain Lorrain', 'http://www.flux2.com', 3600, 1, '2019-01-15 16:32:13', 'rl.png'),
(3, 'Vosges Matin', NULL, 3600, 1, NULL, 'v.jpg'),
(4, 'Les Dernières Nouvelles d’Alsace', NULL, 3600, 1, NULL, 'dna.png'),
(5, 'L’Alsace Le Pays', NULL, 3600, 1, NULL, 'a.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `flux_batch`
--

CREATE TABLE `flux_batch` (
  `id` int(11) NOT NULL,
  `flux_id` int(11) NOT NULL,
  `startedAt` datetime NOT NULL,
  `endedAt` datetime NOT NULL,
  `succes` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `flux_batch`
--

INSERT INTO `flux_batch` (`id`, `flux_id`, `startedAt`, `endedAt`, `succes`) VALUES
(1, 1, '2019-01-01 00:00:00', '2019-01-31 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `flux_sport`
--

CREATE TABLE `flux_sport` (
  `flux_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `flux_sport`
--

INSERT INTO `flux_sport` (`flux_id`, `sport_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

CREATE TABLE `sport` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `icon` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sport`
--

INSERT INTO `sport` (`id`, `nom`, `icon`, `image`) VALUES
(1, 'Football', 'f2', 'soccer.jpg'),
(2, 'Rugby', 's7', 'football.jpg'),
(3, 'Cricket', 'c3', 'cricket1.jpg'),
(4, 'Bodybuild', 'g2', 'body.jpg'),
(5, 'Surfing', 'surf', 'p-surfing.jpg'),
(6, 'Boxing', 's3', 'boxing.jpg'),
(7, 'Yoga', 'y4', 'yoga.jpg'),
(8, 'Tennis', 'S12', 'tennis.jpg'),
(9, 'Cyclings', 'cy1', 'cycle.jpg'),
(10, 'Swimming', 'swimming', 'swimming.jpg'),
(11, 'Athletics', 'y1', 'athletics.jpg'),
(12, 'Basketball', 'S13', 'basketball.jpg'),
(13, 'Slalom', 's7', 'canoe-slalom.jpg'),
(14, 'Golf', 's9', 'golf.jpg'),
(15, 'hockey', 'S15', 'hockey.jpg'),
(16, 'volleyball', 'S5', 'volley.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL,
  `club_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_flux_md5_hash` (`md5_hash`) USING BTREE,
  ADD KEY `flux_id` (`flux_id`),
  ADD KEY `flux_batch_id` (`flux_batch_id`);

--
-- Index pour la table `article_sport`
--
ALTER TABLE `article_sport`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom_UNIQUE` (`nom`);

--
-- Index pour la table `club_sport`
--
ALTER TABLE `club_sport`
  ADD PRIMARY KEY (`club_id`,`sport_id`);

--
-- Index pour la table `flux`
--
ALTER TABLE `flux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `flux_batch`
--
ALTER TABLE `flux_batch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flux_id` (`flux_id`);

--
-- Index pour la table `flux_sport`
--
ALTER TABLE `flux_sport`
  ADD PRIMARY KEY (`flux_id`,`sport_id`),
  ADD KEY `sport_id` (`sport_id`);

--
-- Index pour la table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom_UNIQUE` (`nom`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `article_sport`
--
ALTER TABLE `article_sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `flux`
--
ALTER TABLE `flux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `flux_batch`
--
ALTER TABLE `flux_batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`flux_id`) REFERENCES `flux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`flux_batch_id`) REFERENCES `flux_batch` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `flux_batch`
--
ALTER TABLE `flux_batch`
  ADD CONSTRAINT `flux_batch_ibfk_1` FOREIGN KEY (`flux_id`) REFERENCES `flux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `flux_sport`
--
ALTER TABLE `flux_sport`
  ADD CONSTRAINT `flux_sport_ibfk_1` FOREIGN KEY (`flux_id`) REFERENCES `flux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `flux_sport_ibfk_2` FOREIGN KEY (`sport_id`) REFERENCES `sport` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
