-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 01 août 2025 à 21:28
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ormvasmdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

DROP TABLE IF EXISTS `demandes`;
CREATE TABLE IF NOT EXISTS `demandes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int NOT NULL,
  `titre` varchar(260) DEFAULT NULL,
  `description` text,
  `reponse` text,
  `datedemande` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `statut` varchar(40) DEFAULT NULL,
  `datereponse` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id`, `id_utilisateur`, `titre`, `description`, `reponse`, `datedemande`, `type`, `statut`, `datereponse`) VALUES
(2, 22, 'a', 'a', 'a', '2025-07-31 12:53:59', 'intervention', 'Valide', '2025-07-31 12:59:25'),
(3, 22, 'bb', 'bbb', '', '2025-07-31 18:02:48', 'information', 'En attente', NULL),
(4, 30, 'zsssssssssssssssssssssssssssssssssssssssssssssssssssszssssssssssssssssssssssssssssssssssssss', 'zsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssssssssssssssssszsssssssssssssssssssssssssssssssssssssszssssssssssssssssssssssssssssssssssssssssbssss', '', '2025-07-31 21:04:24', 'materiel', 'En attente', NULL),
(5, 30, 'a', 'a\r\n', 'a', '2025-07-31 22:02:20', 'information', 'Refuse', '2025-07-31 22:06:36'),
(6, 30, 'hiqfifhgai', 'iciucgic\r\n', '', '2025-08-1 01:20:47', 'information', 'En attente', NULL),
(7, 30, 'duo', 'dho', 'po\r\n', '2025-08-1 01:20:55', 'information', 'Valide', '2025-08-1 10:12:54'),
(8, 30, 'aofhoifhazoi', 'acoapcjd', '', '2025-08-1 01:21:03', 'materiel', 'En attente', NULL),
(9, 16, 'ppppppppppp', 'ooooooooooooo', '', '2025-08-1 01:21:36', 'intervention', 'En attente', NULL),
(10, 16, 'aaaaaaaaaaaaaaa', 'sa', '', '2025-08-1 01:21:44', 'information', 'En attente', NULL),
(11, 16, 'sasa', 'sasas', '', '2025-08-1 01:21:50', 'materiel', 'En attente', NULL),
(12, 16, 'sasasas', 'sasa', '', '2025-08-1 01:21:59', 'information', 'En attente', NULL),
(13, 16, 'sasa', 'dede', '', '2025-08-1 01:22:06', 'intervention', 'En attente', NULL),
(14, 8, 'dada', 'rff', '', '2025-08-1 01:22:29', 'intervention', 'En attente', NULL),
(15, 8, 'grgrgrgr', 'grgrgrgr', '', '2025-08-1 01:22:38', 'materiel', 'En attente', NULL),
(16, 8, 'grgrgrg', 'hyhyhyhy', '', '2025-08-1 01:22:45', 'information', 'En attente', NULL),
(17, 8, 'adzadad', 'dzdzedz', '', '2025-08-1 01:22:52', 'information', 'En attente', NULL),
(18, 8, 'dzdzdz', 'zaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', '2025-08-1 01:23:09', 'materiel', 'En attente', NULL),
(19, 11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', '2025-08-1 01:23:40', 'materiel', 'En attente', NULL),
(20, 11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', '2025-08-1 01:23:47', 'information', 'En attente', NULL),
(21, 11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', '2025-08-1 01:23:53', 'materiel', 'En attente', NULL),
(22, 11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', '2025-08-1 01:23:59', 'information', 'En attente', NULL),
(23, 11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'jv', '2025-08-1 01:24:05', 'intervention', 'Valide', '2025-08-1 09:39:20'),
(24, 11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', '2025-08-1 01:24:10', 'materiel', 'En attente', NULL),
(25, 11, 'a', 'a', '', '2025-08-1 09:58:17', 'information', 'En attente', NULL),
(26, 11, 'da', 'dq', '', '2025-08-1 09:58:26', 'materiel', 'En attente', NULL),
(27, 11, 'dqsdq', 'vege', '', '2025-08-1 09:58:32', 'information', 'En attente', NULL),
(28, 11, 'dqsdqsd', 'sDQSDQ', '', '2025-08-1 09:58:39', 'intervention', 'En attente', NULL),
(29, 11, 'DQSDQD', 'QDQDQDQ', '', '2025-08-1 09:58:46', 'intervention', 'En attente', NULL),
(30, 11, 'DADAZ', 'DADADA\r\n', '', '2025-08-1 09:58:54', 'materiel', 'En attente', NULL),
(31, 11, 'DADADA', 'DSADAD', '', '2025-08-1 09:59:00', 'intervention', 'En attente', NULL),
(32, 11, 'DAZDAZA', 'AZDAZDS', '', '2025-08-1 09:59:07', 'materiel', 'En attente', NULL),
(33, 11, 'KBH', 'KHBKH', 'po', '2025-08-1 09:59:44', 'materiel', 'Refuse', '2025-08-1 10:13:54'),
(34, 11, 'jcucjulgcljug', 'khfvcikhvfci', 'popop', '2025-08-1 10:11:30', 'materiel', 'Valide', '2025-08-1 10:13:21'),
(35, 30, 'aaaaa', 'zazazaza', 'popopops', '2025-08-1 16:25:49', 'information', 'Valide', '2025-08-1 16:27:28');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(20) NOT NULL,
  `civilite` varchar(30) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `dateinscription` varchar(30) NOT NULL,
  `dateconnexion` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `role`, `civilite`, `nom`, `prenom`, `email`, `mdp`, `telephone`, `dateinscription`, `dateconnexion`) VALUES
(30, 'utilisateur', 'monsieur', 'aaazaz', 'aa', 'aa@gmail.com', '$2y$10$En4MHgzbLvYMNKXkTVS1BuOGSrEYT/SLrk6.OT8jtGiRz1MDQ2SRy', '0600000030', '2025-07-30 02:55:51', '2025-08-01 16:26:24'),
(2, 'banni', 'monsieur', 'a', 'a', 'm@gmail.com', '$2y$10$GGKm1ULMqGBApArdqIftYOYmnHcYL.cdJzHVqui8zvvoNYQAjuUFm', '0711111111', '2025-07-27 19:15:16', '2025-07-30 00:35:34'),
(5, 'admin', 'monsieur', 'Admin', 'Ray', 'adminray@gmail.com', '$2y$10$1O5TmYS1hzFp.jrGAQ.wrOPxqQCVCiyIDV9vL.pZEZOW60p/FypUK', '0600000000', '2025-07-28 11:51:11', '2025-08-1 16:26:51'),
(6, 'admin', 'monsieur', 'Admin', 'Slur', 'adminslur@gmail.com', '$2y$10$J.yyw3E6IWcxLQ1B2f2etesdEqB5k4Fak53DD7syM.hckk6nBpaWe', '0600000000', '2025-07-30 00:47:10', '2025-07-30 15:55:18'),
(7, 'utilisateur', 'monsieur', 'b', 'b', 'b@gmail.com', '$2y$10$R9MTXNwy4c8atA9LKxnETeQg/BuO6kf159w9PAGn7U1XI9AKV5HYq', '0600000001', '2025-07-30 00:47:48', '2025-07-30 00:47:48'),
(8, 'utilisateur', 'monsieur', 'c', 'c', 'c@gmail.com', '$2y$10$96.F97N9p3ehHtBJRE5/8eeDqKuO5Jk84TPSYCo6linF7AiA4Z.cq', '0600000002', '2025-07-30 00:48:55', '2025-08-1 01:22:20'),
(9, 'utilisateur', 'monsieur', 'd', 'd', 'd@gmail.com', '$2y$10$HY4M.Id0AdW37l.FQae.JOlUs0AZK.QO47S/E0vP7MdnGVKEXTUq2', '0600000003', '2025-07-30 00:49:37', '2025-07-30 00:49:37'),
(10, 'utilisateur', 'monsieur', 'ee', 'e', 'E@gmail.com', '$2y$10$SDv1SEfmx0X6dVYB4bFyquz0YTvCjrLC29ayifjYJoUGZalKld0Oe', '0600000003', '2025-07-30 00:50:48', '2025-07-30 00:50:48'),
(11, 'utilisateur', 'monsieur', 'f', 'f', 'f@gmail.com', '$2y$10$Zg6/74byIm.HMw1keGn4KubuDgzhFcJ4Mz4CY522bcMAeou5QB/sO', '0600000004', '2025-07-30 00:52:27', '2025-08-1 14:40:44'),
(12, 'utilisateur', 'monsieur', 'g', 'g', 'g@gmail.com', '$2y$10$XWIjWAZlnDY0vI3HzyktQ.KrTEExdj4QD8MLMYpnpQNoCx6ivOi0G', '0600000005', '2025-07-30 00:53:11', '2025-07-30 00:53:11'),
(13, 'utilisateur', 'monsieur', 'h', 'h', 'h@gmail.com', '$2y$10$/zIJTZoUEi0Dy3zGYbrcwuuC96BTdoF9kyqIfkiSm35vnqD3JAc6G', '0600000006', '2025-07-30 00:53:52', '2025-07-30 00:53:52'),
(14, 'utilisateur', 'monsieur', 'i', 'i', 'i@gmail.com', '$2y$10$GV1U/4a4sneibFfC0Oh52OBwo4IMARLnfxIWucGIYDS3zR5K.kCWO', '0600000006', '2025-07-30 00:54:29', '2025-07-30 00:54:29'),
(15, 'utilisateur', 'monsieur', 'j', 'j', 'j@gmail.com', '$2y$10$ReVlPrpdAzfpTgG9xhpCCOEbPv0Xuf3DK5vbJWyFYAzR5xO7NmpxW', '0600000007', '2025-07-30 00:55:01', '2025-07-30 00:55:01'),
(16, 'utilisateur', 'monsieur', 'k', 'k', 'k@gmail.com', '$2y$10$DvVPf7LX/joDlWU1QhFLpuFny8luugvOfL11G82WQrWImqAeK55sS', '0600000008', '2025-07-30 00:55:36', '2025-08-1 01:21:12'),
(17, 'utilisateur', 'monsieur', 'l', 'l', 'l@gmail.com', '$2y$10$.lUMaA9FisuxGkJyFioCmuHrGvtM8S4rCckRB3GLsELQ0m5FfYBqm', '0600000009', '2025-07-30 00:58:30', '2025-07-30 00:58:30'),
(18, 'utilisateur', 'monsieur', 'n', 'n', 'n@gmail.com', '$2y$10$eXWreB4m/2BBcXkWiPUZgu6C3roliqPRks7na0PMxTx7AExjjn5sq', '0600000011', '2025-07-30 00:59:39', '2025-07-30 00:59:39'),
(19, 'utilisateur', 'monsieur', 'o', 'o', 'o@gmail.com', '$2y$10$OOD8x89ql6Bic0SoDRIAQesOPxPjo.xmcxBSeiINcmOhZUeqhl7zm', '0600000012', '2025-07-30 01:00:41', '2025-07-30 01:00:41'),
(20, 'utilisateur', 'monsieur', 'p', 'p', 'p@gmail.com', '$2y$10$lwdQEvuHg8hBd.dsFABBdOiWHVuXytHccEW71sNlRV5XBr9nVqOmS', '0600000013', '2025-07-30 01:01:14', '2025-07-30 01:01:14'),
(21, 'utilisateur', 'monsieur', 'q', 'q', 'q@gmail.com', '$2y$10$HBepfyVKSslKA70yf2R12.eVrH99TEa642XEZm7Sr57pk/tEiFo4C', '0600000013', '2025-07-30 01:02:01', '2025-07-30 01:02:01'),
(22, 'utilisateur', 'monsieur', 'r', 'r', 'r@gmail.com', '$2y$10$8r5h/eB58Wp0ZcZEPEaJL.qG2biEnCJneyuXs/f3/C3O8AbU/.VRO', '0600000001', '2025-07-30 01:02:39', '2025-07-31 12:23:53'),
(23, 'utilisateur', 'monsieur', 's', 's', 's@gmail.com', '$2y$10$W1vap4DxGMAntQlKoTwdH.olzeP7v6pJn9XkIrhj9KOlhx9gqw0du', '0600000015', '2025-07-30 01:03:09', '2025-07-30 01:03:09'),
(24, 'utilisateur', 'monsieur', 't', 't', 't@gmail.com', '$2y$10$1KF/jZ9p5iWStjuSzgDos.W2CqfM9SYeZbM8z5QRdN2ZfVcH.WSYK', '0600000016', '2025-07-30 01:03:38', '2025-07-30 01:03:38'),
(25, 'utilisateur', 'monsieur', 'w', 'w', 'w@gmail.com', '$2y$10$0gl0CkbDAehliqNu.GMYOevZ8TWwrEek6agwS2zzs8FVRNnecBf7O', '0600000017', '2025-07-30 01:04:22', '2025-07-30 01:04:22'),
(26, 'utilisateur', 'monsieur', 'x', 'x', 'x@gmail.com', '$2y$10$vd2DqKAxAKsV53KD4XUre.vkvYgQSkCGzMP89ei6Lz9.4/oQih2eG', '0600000018', '2025-07-30 01:05:00', '2025-07-30 01:05:00'),
(27, 'utilisateur', 'monsieur', 'y', 'y', 'y@gmail.com', '$2y$10$sXKqmX99OSYRZjQZ8ONf9uTk7iUPO1OSnV7J4KUf9TzuVW9mtnlR2', '0600000001', '2025-07-30 01:05:37', '2025-07-30 01:05:37'),
(28, 'utilisateur', 'monsieur', 'z', 'z', 'z@gmail.com', '$2y$10$PuRbmbvWwb8C80/32e8QdeQN.39mbPUXXeqXvYUAZFwTKMDzmFG.e', '0600000020', '2025-07-30 01:06:21', '2025-07-30 01:06:21'),
(29, 'admin', 'monsieur', 'Admin', 'Zen', 'adminzen@gmail.com', '$2y$10$R5WwnEx2c4RA3KCTks/BBOUkgQlNsvpO9cmV4IlqBckiNLQXjsvdq', '0600000020', '2025-07-30 01:49:42', '2025-07-30 02:55:00'),
(31, 'utilisateur', 'monsieur', 'bb', 'bb', 'bb@gmail.com', '$2y$10$2onClDmzeDnE0yNbKQNPbeDdjmt/gBf046xeCNkC2kmPYaTSPC..y', '0600000031', '2025-07-30 02:56:38', '2025-07-30 02:56:38'),
(32, 'utilisateur', 'monsieur', 'cc', 'cc', 'cc@gmail.com', '$2y$10$FcSA1vXc5uYiHtL1x6NeNeE.kysABe0H79BCBbbEG0AltMMpS3FXq', '0600000032', '2025-07-30 02:57:24', '2025-07-30 02:57:24'),
(39, 'utilisateur', 'monsieur', 'M', 'Rayane', 'rayan@gmail.com', '$2y$10$Jx1V0wTJai1ZOlQ8DK0Ta.qKBsLEwu9X0uEM2TgKPj7iP4PFeHWE6', '0700000000', '2025-08-1 14:29:14', '2025-08-1 14:30:44'),
(34, 'utilisateur', 'monsieur', 'ee', 'ee', 'ee@gmail.com', '$2y$10$9rgW6SijGFxwiba8YvXxO.znMhyV8DyBfeU.hrc1EvSmySKhuKoJm', '0600000033', '2025-07-30 02:58:01', '2025-07-30 02:58:01'),
(35, 'banni', 'monsieur', 'ff', 'ff', 'ff@gmail.com', '$2y$10$GpxdMTBtCP1Utowrxkfz3uAszHiG/a/SVuO53mB/96uTBXpiJELsq', '0600000033', '2025-07-30 02:58:31', '2025-07-30 02:58:31'),
(36, 'banni', 'monsieur', 'gg', 'gg', 'gg@gmail.com', '$2y$10$vdNH5jndnbCi89slioqLXuhkh7mN79Bqq3cPvxPL3/EfUCdkQONYK', '0600000033', '2025-07-30 02:58:54', '2025-08-1 14:57:56'),
(37, 'banni', 'monsieur', 'hh', 'hh', 'hh@gmail.com', '$2y$10$UQwkTnJnogS.Y48YmkRnhe49wL./YMic0huY8fr51NyAxL6tdpcJq', '0600000035', '2025-07-30 02:59:14', '2025-07-30 02:59:14'),
(38, 'banni', 'monsieur', 'ii', 'ii', 'ii@gmail.com', '$2y$10$yqXApzjjJVgF.h9TdE2TwOCXMV2uRREjCgUMaUiYv.7F4F6QHzT8y', '0600000036', '2025-07-30 02:59:37', '2025-07-30 02:59:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
