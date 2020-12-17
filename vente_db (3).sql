-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 17 déc. 2020 à 11:40
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vente_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`, `deleted`) VALUES
(1, 'Electro ménager', 'appareil électro-ménager', 0),
(2, 'Vaisselle', 'vaisselle', 0),
(3, 'TV', 'televisors', 0);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `quartier` varchar(255) NOT NULL,
  `cni` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `description`, `telephone`, `quartier`, `cni`, `deleted`) VALUES
(1, 'foudjo herve', 'description', 656239315, 'bepanda', 7653537, 0),
(2, 'franky shity', 'desc', 68733363, 'makèpè', 6553736, 0),
(3, 'kevin Aboubakar', '', 686335353, 'douala-bepanda', 6553436, 0);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `quartier` varchar(255) NOT NULL,
  `sexe` varchar(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `nom`, `telephone`, `quartier`, `sexe`, `username`, `password`, `photo`, `role`, `deleted`) VALUES
(1, 'Otaku benjamin', 67353533, 'bonaberie', 'masculin', 'admin', 'admin', '', 'admin', 0),
(2, 'mbimé gervais', 6, 'douala-bepanda', 'male', 'kevin', 'kevine', '', 'user', 0);

-- --------------------------------------------------------

--
-- Structure de la table `employe_produit`
--

DROP TABLE IF EXISTS `employe_produit`;
CREATE TABLE IF NOT EXISTS `employe_produit` (
  `idemploye` int(11) NOT NULL,
  `idproduit` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`idemploye`,`idproduit`),
  KEY `employe_product_product` (`idproduit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `idcategorie` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `seuil` int(11) NOT NULL DEFAULT '3',
  `prix_achat` int(11) NOT NULL,
  `prix_vente` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `produit_categorie` (`idcategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `code`, `nom`, `description`, `idcategorie`, `quantite`, `seuil`, `prix_achat`, `prix_vente`, `deleted`) VALUES
(1, 'p01', 'ventillateur phoenix', 'ventillateur de couleur bleu', 1, 18, 3, 8000, 15000, 0),
(2, 'p002', 'machine à laver tiger', 'machine de couleur grise avec option séchage', 1, 6, 2, 50000, 70000, 0),
(3, '3', 'Tv Samsum 42\"', 'tv colors green', 3, 2, 2, 90000, 60000, 0),
(5, 'tv07', 'Tv Samsum 32\"', 'tv colors red', 3, 22, 2, 50000, 70000, 0),
(6, 'tv50', 'Tv Samsum 50\"', 'television', 3, 14, 2, 80000, 100000, 0);

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

DROP TABLE IF EXISTS `vente`;
CREATE TABLE IF NOT EXISTS `vente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduit` int(11) NOT NULL,
  `quantite_vendu` int(11) NOT NULL,
  `prix_vente_v` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `idemploye` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `vente_employe` (`idemploye`),
  KEY `vente_client` (`idclient`),
  KEY `vente_produit` (`idproduit`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`id`, `idproduit`, `quantite_vendu`, `prix_vente_v`, `idclient`, `idemploye`, `date_creation`, `deleted`) VALUES
(61, 3, 1, 20000, 3, 1, '2020-12-11 00:00:00', 0),
(62, 2, 1, 20000, 3, 1, '2020-12-11 00:00:00', 0),
(63, 3, 1, 20000, 1, 1, '2020-12-11 00:00:00', 0),
(64, 3, 1, 20000, 1, 1, '2020-12-16 00:00:00', 0),
(65, 1, 1, 20000, 1, 1, '2020-12-16 00:00:00', 0),
(66, 3, 1, 20000, 3, 1, '2020-12-16 00:00:00', 0),
(67, 2, 2, 20000, 3, 1, '2020-12-16 00:00:00', 0),
(68, 1, 1, 20000, 3, 1, '2020-12-15 00:00:00', 0),
(79, 5, 1, 60000, 2, 1, '2020-12-16 00:00:00', 0),
(80, 3, 1, 80000, 2, 1, '2020-12-16 00:00:00', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `employe_produit`
--
ALTER TABLE `employe_produit`
  ADD CONSTRAINT `employe_product_employe` FOREIGN KEY (`idemploye`) REFERENCES `employe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `employe_product_product` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_categorie` FOREIGN KEY (`idcategorie`) REFERENCES `categorie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `vente_client` FOREIGN KEY (`idclient`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vente_employe` FOREIGN KEY (`idemploye`) REFERENCES `employe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vente_produit` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
