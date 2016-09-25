-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Mai 2016 à 15:40
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cvmaker`
--

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `idExperience` int(11) NOT NULL,
  `id_user_fk` int(11) NOT NULL,
  `pseudo_fk` varchar(128) NOT NULL,
  `titre` varchar(128) NOT NULL,
  `ville` varchar(128) NOT NULL,
  `periode` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `idFormation` int(11) NOT NULL,
  `id_user_form_fk` int(11) NOT NULL,
  `titreFormation` varchar(128) NOT NULL,
  `periodeFormation` varchar(128) NOT NULL,
  `villeFormation` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`idFormation`, `id_user_form_fk`, `titreFormation`, `periodeFormation`, `villeFormation`) VALUES
(9, 6, 'machin', '18juin au 25juin', 'Villeneuve-la-Garenne'),
(10, 6, 'Webforce3', '8juin au 8avril', 'Villeneuve-la-Garenne'),
(11, 6, 'Webforce3', '8juin au 8avril', 'Villeneuve-la-Garenne'),
(12, 6, 'machin', '18juin au 25juin', 'Villeneuve-la-Garenne'),
(13, 6, 'Webforce3', '18mai au 25mai', 'Villeneuve-la-Garenne'),
(14, 6, 'kevin', '18juin au 25juin', 'Villeneuve-la-Garenne'),
(15, 6, 'Webforce3', '18mai au 25mai', 'Villeneuve-la-Garenne'),
(16, 6, 'hey', '18mai au 25mai', 'Villeneuve-la-Garenne'),
(17, 6, 'Webforce3', '18mai au 25mai', 'Villeneuve-la-Garenne'),
(18, 6, 'kevin', '18juin au 25juin', 'Villeneuve-la-Garenne');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `adress` varchar(50) NOT NULL,
  `phrase` text NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `dateinscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `email`, `sexe`, `lastname`, `firstname`, `birthdate`, `adress`, `phrase`, `phonenumber`, `dateinscription`) VALUES
(7, '', '', '', '', '', '', '0000-00-00', '', '', 0, '2016-05-20'),
(6, 'Gootime', '21a3d7bf8fdb8c4fce65466d5a7b7a02', 'gotimeingame@gmail.com', 'Masculin', 'CHERUEL', 'KÃ©vin', '1994-07-13', '4 Place du Berry 92390 Villeneuve-la-Garenne', '', 782162383, '2016-05-19');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD UNIQUE KEY `idExperience` (`idExperience`),
  ADD KEY `id_user_fk` (`id_user_fk`),
  ADD KEY `pseudo_fk` (`pseudo_fk`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD UNIQUE KEY `idFormation` (`idFormation`),
  ADD KEY `id_user_form_fk` (`id_user_form_fk`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`pseudo`,`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `idExperience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `idFormation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`id_user_fk`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`id_user_form_fk`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
