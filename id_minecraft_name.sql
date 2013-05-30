-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 28 Mai 2013 à 18:41
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `killamaury`
--

-- --------------------------------------------------------

--
-- Structure de la table `id_minecraft`
--

CREATE TABLE IF NOT EXISTS `id_minecraft_name` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `id_minecraft`
--

INSERT INTO `id_minecraft_name` (`id`, `name`) VALUES
(0, 'Air'),
(1, 'Roche (Stone)'),
(2, 'Herbe (Grass)'),
(3, 'Terre (Dirt)'),
(4, 'Pierre (Cobblestone)'),
(5, 'Planche (wooden plank)'),
(6, 'Pousses d''arbre (sapling)'),
(7, 'Bedrock'),
(8, 'Eau (water)'),
(9, 'Eau stationnaire (water)'),
(10, 'Lave (Lava)',),
(11, 'Lave stationnaire (Lava)'),
(12, 'Sable (Sand)'),
(13, 'Gravier (Gravel)'),
(14, 'Minerai d''or (Gold ore)'),
(15, 'Minerai de fer (iron ore)'),
(16, 'Minerai de charbon (Coal ore)'),
(17, 'Bois (Wood)'),
(18, 'Feuillage (Leaves)'),
(19, 'Éponge (Sponge)'),
(20, 'Verre (Glass)'),
(21, 'Minerai de lapis-lazuli'),
(22, 'Bloc de lapis-lazuli (Lapis-lazuli block)')
(23, 'Distributeur (Dispenser)'),
(24, 'Grès (Sandstone)'),
(25, 'Bloc musical (Note block)'),
(26, 'Lits (Bed)'),
(27, 'Rails de propulsion (Powered rails)'),
(28, 'Rails de détection (Detector rail)'),
(29, 'Piston collants (Sticky piston)'),
(30, 'Toile d''araignée'),
(31, 'Herbes hautes '),
(32, 'Arbustes morts (Dead bush)'),
(33, 'Piston'),
(34, 'Tige de piston'),
(35, 'Laine (Wool)'),
(36, 'Bloc déplacé par un piston'),
(37, 'Pissenlits (Dandelion)'),
(38, 'Roses'),
(39, 'Champigons brun (Brows mushroom)'),
(40, 'Champignons rouges (Red mushroom)'),
(41, 'Bloc d''or (Gold block)'),
(42, 'Bloc de fer (Iron block)'),
(43, 'Double dalles (Double slabs)'),

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
