-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 05 avr. 2019 à 20:15
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
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text,
  `date_annonce` date NOT NULL,
  `login` varchar(50) NOT NULL,
  `num_rubrique` int(11) NOT NULL,
  `fichier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

CREATE TABLE `rubrique` (
  `num_rubrique` int(11) NOT NULL,
  `nom_rubrique` varchar(255) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rubrique`
--

INSERT INTO `rubrique` (`num_rubrique`, `nom_rubrique`, `position`) VALUES
(1, 'Informatique', 'haut'),
(2, 'Emploi', 'haut'),
(3, 'Scooter', 'haut'),
(4, 'Voiture', 'haut'),
(5, 'Velo', 'bas'),
(6, 'Immobilier', 'bas'),
(7, 'sport', 'bas'),
(8, 'Telephonie', 'bas'),
(9, 'Loisirs', 'bas');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motdepasse` varchar(60) NOT NULL,
  `telephone` int(11) DEFAULT NULL,
  `etat` int(11) NOT NULL COMMENT '0=utilisateur non activé ne peut pas se connecter; 1=utilisateur connecté'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `nom`, `prenom`, `email`, `motdepasse`, `telephone`, `etat`) VALUES
('admin', 'test', 'test', 'test@test.fr', '$2y$10$07oKeQUAthOtLgLFenbe2Oww25wI.VfM6eREtxKtQloulNEKFVUQ2', 123456, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`),
  ADD KEY `login` (`login`),
  ADD KEY `num_rubrique` (`num_rubrique`);

--
-- Index pour la table `rubrique`
--
ALTER TABLE `rubrique`
  ADD PRIMARY KEY (`num_rubrique`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `rubrique`
--
ALTER TABLE `rubrique`
  MODIFY `num_rubrique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `contrainte` FOREIGN KEY (`login`) REFERENCES `utilisateur` (`login`),
  ADD CONSTRAINT `contrainte2` FOREIGN KEY (`num_rubrique`) REFERENCES `rubrique` (`num_rubrique`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
