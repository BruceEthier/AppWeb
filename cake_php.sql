-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 15 Octobre 2019 à 23:38
-- Version du serveur :  5.6.37
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cake_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `categorie`, `created`, `modified`) VALUES
(1, 'Informatique', '2019-10-11 15:29:39', '2019-10-11 15:29:39');

-- --------------------------------------------------------

--
-- Structure de la table `civilites`
--

CREATE TABLE IF NOT EXISTS `civilites` (
  `id` int(11) NOT NULL,
  `civilite` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `civilites`
--

INSERT INTO `civilites` (`id`, `civilite`, `created`, `modified`) VALUES
(1, 'M.', '2019-10-11 14:59:31', '2019-10-11 14:59:31'),
(3, 'Mme', '2019-10-11 15:19:12', '2019-10-11 15:19:12'),
(4, 'Autre', '2019-10-11 15:19:28', '2019-10-11 15:19:28');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE IF NOT EXISTS `employes` (
  `id` int(11) NOT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `civilite_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `cellulaire` char(10) DEFAULT NULL,
  `courriel` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `file_id` int(11) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `employes`
--

INSERT INTO `employes` (`id`, `numero`, `civilite_id`, `nom`, `prenom`, `cellulaire`, `courriel`, `user_id`, `created`, `modified`, `file_id`) VALUES
(2, '1', 1, 'caron', 'alex', '4506666666', 'a@a', 2, '2019-10-11 14:59:57', '2019-10-15 23:28:21', 1);

-- --------------------------------------------------------

--
-- Structure de la table `employes_formations`
--

CREATE TABLE IF NOT EXISTS `employes_formations` (
  `id` int(11) NOT NULL,
  `employe_id` int(11) DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  `date_faite` date DEFAULT NULL,
  `remarques` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `employes_formations`
--

INSERT INTO `employes_formations` (`id`, `employe_id`, `formation_id`, `date_faite`, `remarques`, `created`, `modified`) VALUES
(2, 2, 2, NULL, NULL, '2019-10-15 20:44:31', '2019-10-15 20:44:31');

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `created`, `modified`, `status`) VALUES
(1, 'test', 'cake.power.gif', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE IF NOT EXISTS `formations` (
  `id` int(11) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `duree` decimal(5,1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formations`
--

INSERT INTO `formations` (`id`, `numero`, `titre`, `categorie_id`, `duree`, `created`, `modified`) VALUES
(1, '111', 'Excel', 1, '0.2', '2019-10-12 21:09:38', '2019-10-15 20:45:41'),
(2, '15', 'Word', 1, '1.0', '2019-10-15 20:44:31', '2019-10-15 20:44:31');

-- --------------------------------------------------------

--
-- Structure de la table `phinxlog`
--

CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20191015190209, 'Initial', '2019-10-15 23:02:11', '2019-10-15 23:02:11', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `password`, `admin`, `created`, `modified`) VALUES
(2, 'bruce', 'a@a.a', '$2y$10$OSJn4lGmka2mXpkmRaOTfOyE/.dc0a1naJOQkVd5LRzJ15eS0amKq', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'laurence', 'b@b.com', 'mdp', 0, '2019-10-15 20:42:49', '2019-10-15 20:42:49');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `civilites`
--
ALTER TABLE `civilites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`),
  ADD KEY `fk_civilite_id` (`civilite_id`),
  ADD KEY `fk_users_id` (`user_id`),
  ADD KEY `fk_file_id` (`file_id`);

--
-- Index pour la table `employes_formations`
--
ALTER TABLE `employes_formations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employe_formation_employe_id` (`employe_id`),
  ADD KEY `fk_employe_formation_formation_id` (`formation_id`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categorie_id` (`categorie_id`);

--
-- Index pour la table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `civilites`
--
ALTER TABLE `civilites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `employes_formations`
--
ALTER TABLE `employes_formations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `fk_civilite_id` FOREIGN KEY (`civilite_id`) REFERENCES `civilites` (`id`),
  ADD CONSTRAINT `fk_file_id` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `fk_users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `employes_formations`
--
ALTER TABLE `employes_formations`
  ADD CONSTRAINT `fk_employe_formation_employe_id` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`),
  ADD CONSTRAINT `fk_employe_formation_formation_id` FOREIGN KEY (`formation_id`) REFERENCES `formations` (`id`);

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `fk_categorie_id` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
