-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 21 avr. 2020 à 13:37
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pro`
--

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `post` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img-path` varchar(255) DEFAULT NULL,
  `date_begin` date NOT NULL,
  `date_end` date NOT NULL,
  `customer` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `post`, `title`, `img-path`, `date_begin`, `date_end`, `customer`, `description`) VALUES
(1, 'web developer', 'Wordpress d\'une association', 'https://ressources.maxime-p.fr/portfolio/img/wordpress.jpg', '2019-09-01', '2020-07-01', 'CAL JUDO', 'Réalisation d\'un cahier des charges\r\nafin de répondre au mieux aux\r\ndemandes de l\'association. Refonte\r\ndu site en utilisant wordpress.\r\nTransmission de connaissances, aide\r\nà la réalisation et mise en ligne.'),
(2, 'front-end developer', 'Semaine agence - Projet étudiant', 'https://ressources.maxime-p.fr/portfolio/img/supinternet.jpg', '2020-02-01', '2020-02-01', 'SUP\'INTERNET', 'En moins d\'une semaine nous\r\navons travaillé avec des\r\nwebmarketteurs et webdesigners\r\nafin de répondre au cahier des\r\ncharges du client : Le coq sportif\r\nLead développeur du projet,\r\nintégration des maquettes.'),
(3, 'front-end developer', 'Projet S2 - Projet étudiant', 'https://ressources.maxime-p.fr/portfolio/img/epita.png', '2019-02-01', '2019-06-01', 'EPITA', 'Réalisation d\'un jeu vidéo et d\'un\r\nsite web \"de démonstration\" pour\r\nnotre jeu. Création de la maquette,\r\nintégration, création d\'un system\r\nmulti-langues et mise en ligne.');

-- --------------------------------------------------------

--
-- Structure de la table `static`
--

CREATE TABLE `static` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `static`
--

INSERT INTO `static` (`id`, `name`, `content`) VALUES
(1, 'qui-suis-je', 'Etudiant passionné d\'informatique et de nouvelles technologies. Mon choix d\'étude et mes différentes missions de bénévolat oeuvrent à me former en programmation et à expérimenter ma capacité d\'adaptation. Actuellement en première année au sein de Sup\'internet (spécialité développement), je cherche un stage de 3 mois afin de mettre à profit mes compétences et d\'enrichir mes connaissances.'),
(2, 'fullname', 'Maxime Perraud'),
(3, 'description', 'Web Integrator'),
(4, 'footer', '2019 © pro.maxime-p.fr | All rights reserved');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `static`
--
ALTER TABLE `static`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
