-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : kotaciemrkota.mysql.db
-- Généré le : jeu. 19 juin 2025 à 12:03
-- Version du serveur : 8.0.41-32
-- Version de PHP : 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kotaciemrkota`
--

-- --------------------------------------------------------

--
-- Structure de la table `myclean_admin`
--

CREATE TABLE `myclean_admin` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myclean_admin`
--

INSERT INTO `myclean_admin` (`id`, `login`, `mdp`, `statut`) VALUES
(1, 'admin', '12345', '');

-- --------------------------------------------------------

--
-- Structure de la table `myclean_adresse`
--

CREATE TABLE `myclean_adresse` (
  `id_adresse` int NOT NULL,
  `lib_adresse` varchar(255) NOT NULL,
  `id_client` int NOT NULL,
  `type_adresse` varchar(255) NOT NULL,
  `long_adresse` varchar(255) NOT NULL,
  `lat_adresse` varchar(255) NOT NULL,
  `city_adresse` varchar(255) NOT NULL,
  `area_adresse` varchar(255) NOT NULL,
  `building_adresse` varchar(255) NOT NULL,
  `number_adresse` varchar(255) NOT NULL,
  `etat_adresse` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `myclean_categorie`
--

CREATE TABLE `myclean_categorie` (
  `id_categorie` int NOT NULL,
  `libelle_categorie` varchar(255) NOT NULL,
  `description_categorie` text NOT NULL,
  `image_categorie` varchar(255) NOT NULL,
  `image_categorie1` varchar(255) NOT NULL,
  `particulier` int NOT NULL,
  `pro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myclean_categorie`
--

INSERT INTO `myclean_categorie` (`id_categorie`, `libelle_categorie`, `description_categorie`, `image_categorie`, `image_categorie1`, `particulier`, `pro`) VALUES
(1, 'Nettoyage Domicile', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_0.png', 'immeuble-active.svg', 1, 0),
(2, 'Pressing', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_1.png', 'lamaison-active.svg', 1, 0),
(3, 'Nettoyage Spécialisé', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_2.png', 'garage-active.svg', 1, 0),
(4, 'Nettoyage à la vapeur', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_3.png', 'garage-active.svg', 0, 0),
(5, 'Nettoyage Véhicule', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_4.png', 'terrain0-active.svg', 0, 0),
(6, 'Sanitaire', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_5.png', 'terrain0-active.svg', 0, 0),
(7, 'Services Animaliers', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_6.png', 'terrain0-active.svg', 0, 0),
(8, 'Nettoyage Chaussures', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_7.png', 'terrain0-active.svg', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `myclean_categorie1`
--

CREATE TABLE `myclean_categorie1` (
  `id_categorie1` int NOT NULL,
  `id_categorie` int NOT NULL,
  `libelle_categorie1` varchar(255) NOT NULL,
  `description_categorie1` text NOT NULL,
  `image_categorie1` varchar(255) NOT NULL,
  `image_categorie11` varchar(255) NOT NULL,
  `particulier` int NOT NULL,
  `pro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myclean_categorie1`
--

INSERT INTO `myclean_categorie1` (`id_categorie1`, `id_categorie`, `libelle_categorie1`, `description_categorie1`, `image_categorie1`, `image_categorie11`, `particulier`, `pro`) VALUES
(1, 1, 'Nettoyage Simple', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'nettoyage-simple.jpg', 'immeuble-active.svg', 1, 0),
(2, 1, 'Nettoyage Approfondi', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'nettoyage-approfondi.jpg', 'lamaison-active.svg', 1, 0),
(3, 4, 'Fauteuils', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_2.png', 'garage-active.svg', 1, 0),
(4, 4, 'Chaises', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_3.png', 'garage-active.svg', 0, 0),
(5, 4, 'Tapis', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_4.png', 'terrain0-active.svg', 0, 0),
(6, 4, 'Matelas', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_5.png', 'terrain0-active.svg', 0, 0),
(7, 5, 'Berline', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_6.png', 'terrain0-active.svg', 0, 0),
(8, 5, 'SUV', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'service_7.png', 'terrain0-active.svg', 0, 0),
(10, 6, '3D Général', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'nettoyage-simple.jpg', 'immeuble-active.svg', 1, 0),
(11, 6, 'Cafards', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'nettoyage-simple.jpg', 'immeuble-active.svg', 1, 0),
(12, 6, 'Salamandre', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'nettoyage-simple.jpg', 'immeuble-active.svg', 1, 0),
(13, 2, 'Pressing', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'nettoyage-simple.jpg', 'immeuble-active.svg', 1, 0),
(14, 3, 'Nettoyage Spécialisé', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'nettoyage-simple.jpg', 'immeuble-active.svg', 1, 0),
(15, 7, 'Services Animaliers', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'nettoyage-simple.jpg', 'immeuble-active.svg', 1, 0),
(16, 8, 'Nettoyage Chaussures', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'nettoyage-simple.jpg', 'immeuble-active.svg', 1, 0),
(17, 9, 'Nettoyage Chantier', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'nettoyage-simple.jpg', 'immeuble-active.svg', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `myclean_categorie_client`
--

CREATE TABLE `myclean_categorie_client` (
  `id_categorie_client` int NOT NULL,
  `libelle_categorie_client` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `myclean_categorie_service`
--

CREATE TABLE `myclean_categorie_service` (
  `id_categorie_service` int NOT NULL,
  `id_categorie` int NOT NULL,
  `id_categorie1` int NOT NULL,
  `libelle_categorie_service` varchar(255) NOT NULL,
  `img_categorie_service` varchar(255) NOT NULL,
  `description_categorie_service` text NOT NULL,
  `etat_categorie_service` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `myclean_categorie_service`
--

INSERT INTO `myclean_categorie_service` (`id_categorie_service`, `id_categorie`, `id_categorie1`, `libelle_categorie_service`, `img_categorie_service`, `description_categorie_service`, `etat_categorie_service`) VALUES
(1, 1, 2, 'Appartement', 'nettoyage-approfondi.jpg', '', 0),
(2, 1, 2, 'Villa', 'nettoyage-approfondi.jpg', '', 0),
(3, 1, 1, 'Appartement', 'nettoyage-simple.jpg', '', 0),
(4, 1, 1, 'Villa', 'nettoyage-simple.jpg', '', 0),
(5, 4, 3, 'Tissu', 'fauteuilss.jpg', '', 0),
(6, 4, 3, 'Cuir', 'fauteuilss.jpg', '', 0),
(7, 4, 4, 'Tissu', 'chaisess.jpg', '', 0),
(8, 4, 4, 'Cuir', 'chaisess.jpg', '', 0),
(11, 4, 5, 'Tapis', 'Climatiseur.png', '', 0),
(12, 4, 6, 'Matelas', 'Climatiseur.png', '', 0),
(13, 5, 7, 'Intérieur ', 'nettoyage-approfondi.jpg', '', 0),
(15, 5, 7, 'Intérieur et extérieur ou complet ', 'nettoyage-approfondi.jpg', '', 0),
(16, 5, 8, 'Intérieur ', 'nettoyage-approfondi.jpg', '', 0),
(17, 5, 8, 'Intérieur et extérieur ou complet ', 'nettoyage-approfondi.jpg', '', 0),
(18, 6, 10, 'Appartement', 'nettoyage-approfondi.jpg', '', 0),
(19, 6, 10, 'Villa', 'nettoyage-approfondi.jpg', '', 0),
(20, 6, 11, 'Appartement', 'nettoyage-approfondi.jpg', '', 0),
(21, 6, 11, 'Villa', 'nettoyage-approfondi.jpg', '', 0),
(23, 6, 12, 'Appartement', 'nettoyage-approfondi.jpg', '', 0),
(24, 6, 12, 'Villa', 'nettoyage-approfondi.jpg', '', 0),
(25, 3, 14, 'Entretien simple', 'nettoyage-approfondi.jpg', '', 0),
(26, 7, 15, 'Toilettage animaux', 'nettoyage-approfondi.jpg', '', 0),
(27, 8, 16, 'Nettoyage Chaussures', 'nettoyage-approfondi.jpg', '', 0),
(28, 2, 13, 'Lavage à sec', 'nettoyage-approfondi.jpg', '', 0),
(29, 2, 13, 'Nettoyage vêtements', 'nettoyage-approfondi.jpg', '', 0),
(30, 9, 17, 'Nettoyage Chantier', 'nettoyage-approfondi.jpg', '', 0),
(32, 3, 14, 'Entretien et désinfection à la vapeur', 'nettoyage-approfondi.jpg', '', 0),
(33, 3, 14, 'Entretien et rechargement de gaz', 'nettoyage-approfondi.jpg', '', 0),
(34, 4, 3, 'Daim', 'fauteuilss.jpg', '', 0),
(35, 4, 4, 'Daim', 'chaisess.jpg', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `myclean_categorie_service_liste`
--

CREATE TABLE `myclean_categorie_service_liste` (
  `id_categorie_service_liste` int NOT NULL,
  `libelle_categorie_service_liste` varchar(255) NOT NULL,
  `id_categorie` int NOT NULL,
  `id_categorie_service` int NOT NULL,
  `description_categorie_service_liste` text NOT NULL,
  `img_categorie_service` varchar(255) NOT NULL,
  `qte` int NOT NULL,
  `montant` int NOT NULL,
  `prix` varchar(255) NOT NULL,
  `etat_categorie_service_liste` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `myclean_categorie_service_liste`
--

INSERT INTO `myclean_categorie_service_liste` (`id_categorie_service_liste`, `libelle_categorie_service_liste`, `id_categorie`, `id_categorie_service`, `description_categorie_service_liste`, `img_categorie_service`, `qte`, `montant`, `prix`, `etat_categorie_service_liste`) VALUES
(1, 'Studio', 1, 1, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '40000', 0),
(2, '2 pièces', 1, 1, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(3, '3 pièces', 1, 1, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '80000', 0),
(4, '4 pièces', 1, 1, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '100000', 0),
(5, '5 pièces', 1, 1, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '120000', 0),
(6, '3 pièces', 1, 2, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '120000', 0),
(7, '4 pièces', 1, 2, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '140000', 0),
(8, '5 pièces', 1, 2, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '160000', 0),
(9, '6 pièces', 1, 2, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '180000', 0),
(10, '7 pièces', 1, 2, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '200000', 0),
(11, 'Studio', 1, 3, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '20000', 0),
(12, '2 pièces', 1, 3, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '30000', 0),
(13, '3 pièces', 1, 3, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '40000', 0),
(14, '4 pièces', 1, 3, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '50000', 0),
(15, '5 pièces', 1, 3, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(16, '3 pièces', 1, 4, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(17, '4 pièces', 1, 4, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '80000', 0),
(18, '5 pièces', 1, 4, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '100000', 0),
(19, '6 pièces', 1, 4, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '120000', 0),
(20, '7 pièces', 1, 4, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '140000', 0),
(21, 'Lavage – Séchage – Repassage  : à partir de 5 kilos ', 2, 28, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 5, 0, '2500', 0),
(22, 'Lavage – Séchage  : à partir de 5 kilos ', 2, 28, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 5, 0, '2000', 0),
(23, 'Repasser : à partir de 5 kilos ', 2, 28, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 5, 0, '1500', 0),
(24, 'Laver - repasser - plier', 2, 29, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '80000', 0),
(25, 'Combien de climatiseurs avez-vous?', 3, 25, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '10000', 0),
(26, 'Place', 4, 5, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '5000', 0),
(27, 'Place', 4, 34, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '6000', 0),
(28, 'Place', 4, 35, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '3000', 0),
(36, 'Place', 4, 6, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '10000', 0),
(46, '1 place', 4, 7, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '2000', 0),
(56, '1 place', 4, 8, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '4000', 0),
(66, 'Petit', 4, 11, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '10000', 0),
(67, 'Moyen', 4, 11, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '15000', 0),
(68, 'Grand', 4, 11, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '20000', 0),
(69, 'X large', 4, 11, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '30000', 0),
(70, '1 Place', 4, 12, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '15000', 0),
(71, '2 Places', 4, 12, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '25000', 0),
(72, '3 Places', 4, 12, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '35000', 0),
(73, 'Intérieur Simple', 5, 13, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '25000', 0),
(74, 'Extérieur + Intérieur', 5, 15, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '40000', 0),
(75, 'Intérieur Simple', 5, 16, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '30000', 0),
(76, 'Extérieur + Intérieur', 5, 17, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '50000', 0),
(83, 'Studio', 7, 26, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(84, 'Studio', 8, 27, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(85, 'Studio', 9, 28, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(88, 'Combien de climatiseurs avez-vous?', 3, 32, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '12000', 0),
(89, 'Combien de climatiseurs avez-vous?', 3, 33, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '15000', 0),
(90, 'Studio', 6, 18, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '20000', 0),
(91, '2 Pièces', 6, 18, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '30000', 0),
(92, '3 Pièces', 6, 18, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '40000', 0),
(93, '4 Pièces', 6, 18, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '50000', 0),
(94, '5 Pièces', 6, 18, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(95, '3 Pièces', 6, 19, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '45000', 0),
(96, '4 Pièces', 6, 19, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(97, '5 Pièces', 6, 19, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '75000', 0),
(98, '6 Pièces', 6, 19, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '90000', 0),
(99, 'Studio', 6, 20, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '20000', 0),
(100, '2 Pièces', 6, 20, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '30000', 0),
(101, '3 Pièces', 6, 20, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '40000', 0),
(102, '4 Pièces', 6, 20, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '50000', 0),
(103, '5 Pièces', 6, 20, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(104, '3 Pièces', 6, 21, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '45000', 0),
(105, '4 Pièces', 6, 21, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(106, '5 Pièces', 6, 21, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '75000', 0),
(107, '6 Pièces', 6, 21, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '90000', 0),
(108, 'Studio', 6, 23, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '20000', 0),
(109, '2 Pièces', 6, 23, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '30000', 0),
(110, '3 Pièces', 6, 23, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '40000', 0),
(111, '4 Pièces', 6, 23, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '50000', 0),
(112, '5 Pièces', 6, 23, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(113, '3 Pièces', 6, 24, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '45000', 0),
(114, '4 Pièces', 6, 24, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '60000', 0),
(115, '5 Pièces', 6, 24, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '75000', 0),
(116, '6 Pièces', 6, 24, ' Schedule an appointment with our top doctors. Schedule an appointment with our top doctors. ', '', 0, 0, '90000', 0);

-- --------------------------------------------------------

--
-- Structure de la table `myclean_client`
--

CREATE TABLE `myclean_client` (
  `id_client` int NOT NULL,
  `nom_client` varchar(255) NOT NULL,
  `prenom_client` varchar(255) NOT NULL,
  `photoprofil` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tel_client` varchar(255) NOT NULL,
  `email_client` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `mdp_client` varchar(255) NOT NULL,
  `date_creation_client` varchar(255) NOT NULL,
  `etat_client` int NOT NULL,
  `communeUser` varchar(255) NOT NULL,
  `adresseUser` varchar(255) NOT NULL,
  `codereinit` int NOT NULL,
  `expirationCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myclean_client`
--

INSERT INTO `myclean_client` (`id_client`, `nom_client`, `prenom_client`, `photoprofil`, `tel_client`, `email_client`, `token`, `mdp_client`, `date_creation_client`, `etat_client`, `communeUser`, `adresseUser`, `codereinit`, `expirationCode`) VALUES
(1, 'Germain', '', 'IMG1_10_090520250307031746796023.jpeg', '0709286952', 'germaintanon@gmail.com', '84369b5c043721a0a46f5d89d1679beaabe4e94e', '12345', '2024-11-04 17:05:48', 0, 'cxcx', '', 0, ''),
(3, '', '', '', '', '', 'bdcfa3b77ba4978eeb8c980f426015caecfc3793', '', '2024-12-14 21:58:33', 0, '', '', 0, ''),
(4, 'Germain', '', '', '0778304788', 'germaintanon@gmail1.com', 'e9f2622d29e57db5827d99d65515aa2c75258059', '12345', '2025-03-24 11:24:07', 0, 'abidjan', '', 0, ''),
(5, 'TANON', '', '', '0405025254', 'Germain', '55214a2968fa8dd65fc42349c4674c277c9cffca', '123', '2025-03-28 18:17:42', 0, 'ghghghgh', '', 0, ''),
(6, 'germain', '', '', '070707070', 'dhhdf@djfjf.com', 'd2377ad96885b7d55feb0e8f223c661735ca257e', '123', '2025-03-29 00:21:33', 0, 'fhdhdj', '', 0, ''),
(7, 'Oscar', '', '', '0747070793', 'ngatta.moayet@gmail.com', '8c5bbac10b709f7684bd17e76893353b810d7071', '0150538977', '2025-04-09 19:09:26', 0, 'cocody', '', 0, ''),
(8, 'Germain', '', '', '07783047288', 'gerain1@gmail.com', 'c0bfaae86ce90d142650a0af7e83c15a3a63c253', '12345', '2025-04-10 16:52:59', 0, 'fgfgf', '', 0, ''),
(9, 'sss', '', '', '0150119115', 's12stephen07@gmail.com', 'fd9c74aefd376d372c13be805fe31ae527663e33', '0123456789', '2025-05-06 13:14:24', 0, 'QD', '', 0, ''),
(10, 'xcxcx', '', 'IMG1_10_090520250307031746796023.jpeg', '1515151551', 'germddf@dfdf.df', '9dc90fb14a49997c4deec9cd1d7c9882f930dba9', '12345', '2025-05-09 14:36:04', 0, 'cxcxcxcx', '', 0, ''),
(11, 'moayet', '', '', '0150538977', 'moayetoscar@gmail.com', '13b4d2ab9a78a21968f8f65ef1b29388b631b36f', '0150M', '2025-05-14 18:08:47', 0, 'Cocody', '', 0, ''),
(12, 'kjkjk', '', 'IMG1_12_150520251234191747305260.jpeg', '0102000', 'jbhbh@jhjj.hg', 'd585e1897dd62043f89a4c198f25733d3055ad46', '123', '2025-05-15 12:33:44', 0, ',n,n,n,', '', 0, ''),
(13, 'bvbvbvbv', '', 'IMG1_13_150520251239481747305589.jpeg', '020102020', 'fxfff@gfgg.com', '1b83f3e97e69bb2cad4e8b49dfa4664fe99f0f18', '123', '2025-05-15 12:39:27', 0, ',,,nkjkjkj', '', 0, ''),
(14, 'yanis', '', '', '0100565656', 'jim.boris10@gmail.com', '3f464c8d2577ce715faff35ba20e5a86ddfc21c2', 'Dieuamour10@', '2025-06-04 20:22:18', 0, 'Angre', '', 0, ''),
(15, '', '', '', '1', 'ezffchh@gmail.com', 'e734889d6cba751d0b2d2ab1fe15c847fa579b42', 'e', '2025-06-11 19:13:02', 0, '', '', 0, ''),
(16, '', '', '', '0102030405', 'ezffchh@gmail.com', '6a4b42d0f0638949f5e99c8c83ee34312da77d9e', '1234', '2025-06-11 19:13:02', 0, '', '', 0, ''),
(17, 'as', '', '', '0102030405', 'ezffchh@gmail.com', '834c380f3f94beae7e06faa8c3535f1f81901f45', 'e', '2025-06-11 19:13:02', 0, 'Cocody', '', 0, ''),
(18, 'kouakou', '', '', '0709523776', 'bellakouak20@gmail.com', '654de373048d27d5a6c4f598ac49615ca26f8d99', 'marie1905', '2025-06-11 23:05:25', 0, 'Yopougon', '', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `myclean_commune`
--

CREATE TABLE `myclean_commune` (
  `id_commune` int NOT NULL,
  `libelle_commune` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `id_ville` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myclean_commune`
--

INSERT INTO `myclean_commune` (`id_commune`, `libelle_commune`, `lat`, `long`, `id_ville`) VALUES
(1, 'Cocody', '', '', 1),
(2, 'Marcory', '5.303204554572286', '-3.9819198784437533', 1),
(3, 'Yopougon', '5.334819715471833', '-4.081344239817387', 1),
(4, 'Port-Bouet', '', '', 1),
(5, 'Plateau', '5.323409455858276', '-4.023680001371183', 1),
(6, 'Koumassi', '', '', 1),
(7, 'Abobo', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `myclean_equipement`
--

CREATE TABLE `myclean_equipement` (
  `id_equipement` int NOT NULL,
  `libelle_equipement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `myclean_favoris`
--

CREATE TABLE `myclean_favoris` (
  `id_favoris` int NOT NULL,
  `id_user` int NOT NULL,
  `id_annonce` int NOT NULL,
  `date_ajout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myclean_favoris`
--

INSERT INTO `myclean_favoris` (`id_favoris`, `id_user`, `id_annonce`, `date_ajout`) VALUES
(2, 18, 10, '2024-07-05 20:40:17'),
(3, 27, 14, '2024-07-05 20:41:25'),
(4, 18, 11, '2024-07-06 08:55:59'),
(5, 27, 14, '2024-07-06 08:56:03'),
(9, 6, 19, '2024-07-06 10:41:21'),
(10, 23, 17, '2024-07-06 11:55:02'),
(11, 23, 19, '2024-07-06 11:55:04'),
(12, 23, 14, '2024-07-06 11:55:07'),
(13, 27, 14, '2024-07-31 14:10:49'),
(15, 18, 9, '2024-07-31 14:11:47'),
(17, 27, 14, '2024-07-31 14:12:03'),
(18, 18, 11, '2024-07-31 14:12:06'),
(22, 18, 37, '2024-08-01 11:49:36'),
(25, 18, 12, '2024-08-01 11:50:48'),
(28, 27, 14, '2024-08-10 09:37:04'),
(31, 27, 14, '2024-08-10 09:37:26'),
(38, 6, 37, '2024-08-10 10:08:18'),
(40, 25, 37, '2024-08-10 19:08:40'),
(41, 25, 35, '2024-08-10 19:08:41'),
(42, 25, 14, '2024-08-10 19:08:43'),
(51, 23, 48, '2024-09-26 17:13:43'),
(52, 6, 17, '2024-10-03 08:49:26'),
(53, 6, 1, '2024-10-03 08:49:29'),
(54, 6, 31, '2024-10-03 18:05:37'),
(55, 6, 30, '2024-10-03 18:05:54'),
(56, 6, 29, '2024-10-03 18:05:57'),
(57, 6, 28, '2024-10-03 18:05:59'),
(58, 6, 27, '2024-10-03 18:06:02'),
(59, 6, 26, '2024-10-03 18:06:19'),
(60, 6, 25, '2024-10-03 18:06:21'),
(61, 6, 24, '2024-10-03 18:06:23'),
(62, 6, 22, '2024-10-03 18:06:35'),
(63, 6, 11, '2024-10-03 18:06:40'),
(64, 6, 10, '2024-10-03 18:06:43'),
(65, 6, 16, '2024-10-03 18:06:56'),
(66, 6, 15, '2024-10-03 18:06:59'),
(67, 6, 14, '2024-10-03 18:07:01'),
(68, 6, 13, '2024-10-03 18:07:04');

-- --------------------------------------------------------

--
-- Structure de la table `myclean_image_annonce`
--

CREATE TABLE `myclean_image_annonce` (
  `id_image_annonce` int NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_annonce` varchar(255) NOT NULL,
  `libelle_image` varchar(255) NOT NULL,
  `date_crea` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myclean_image_annonce`
--

INSERT INTO `myclean_image_annonce` (`id_image_annonce`, `id_user`, `id_annonce`, `libelle_image`, `date_crea`) VALUES
(3, 'undefined', '8a6c45bf-db16-40fa-ac4c-812531e9096d', 'IMG1_undefined_8A6C45BF-DB16-40FA-AC4C-812531E9096D_250520251040221748205622image_6833803655e3b.jpeg', 1),
(4, 'undefined', '8a6c45bf-db16-40fa-ac4c-812531e9096d', 'IMG1_undefined_8A6C45BF-DB16-40FA-AC4C-812531E9096D_250520251040221748205622image_683380365b8e2.jpeg', 1),
(5, 'undefined', '8a6c45bf-db16-40fa-ac4c-812531e9096d', 'IMG1_undefined_8A6C45BF-DB16-40FA-AC4C-812531E9096D_250520251040221748205622image_683380365e198.jpeg', 1),
(6, 'undefined', '8a6c45bf-db16-40fa-ac4c-812531e9096d', 'IMG1_undefined_8A6C45BF-DB16-40FA-AC4C-812531E9096D_250520251040531748205653image_683380550bbce.jpeg', 1),
(7, 'undefined', '8a6c45bf-db16-40fa-ac4c-812531e9096d', 'IMG1_undefined_8A6C45BF-DB16-40FA-AC4C-812531E9096D_250520251040531748205653image_683380550fc1a.jpeg', 1),
(8, 'undefined', '8a6c45bf-db16-40fa-ac4c-812531e9096d', 'IMG1_undefined_8A6C45BF-DB16-40FA-AC4C-812531E9096D_250520251040531748205653image_68338055109bd.jpeg', 1),
(9, 'undefined', '8a6c45bf-db16-40fa-ac4c-812531e9096d', 'IMG1_undefined_8A6C45BF-DB16-40FA-AC4C-812531E9096D_250520251040531748205653image_6833805511a10.jpeg', 1),
(10, 'undefined', '335f0331-9aac-48d8-9062-d9dcd7ee73da', 'IMG1_undefined_335F0331-9AAC-48D8-9062-D9DCD7EE73DA_250520251042551748205776image_683380cf8bd33.jpeg', 1),
(11, 'undefined', '335f0331-9aac-48d8-9062-d9dcd7ee73da', 'IMG1_undefined_335F0331-9AAC-48D8-9062-D9DCD7EE73DA_250520251042551748205776image_683380cf9d131.jpeg', 1),
(12, 'undefined', '335f0331-9aac-48d8-9062-d9dcd7ee73da', 'IMG1_undefined_335F0331-9AAC-48D8-9062-D9DCD7EE73DA_250520251042551748205776image_683380cf9ffeb.jpeg', 1),
(13, 'undefined', '335f0331-9aac-48d8-9062-d9dcd7ee73da', 'IMG1_undefined_335F0331-9AAC-48D8-9062-D9DCD7EE73DA_250520251042551748205776image_683380cfa1b92.jpeg', 1),
(14, 'undefined', 'cce1ffc6-1ac8-4a5c-ae43-63fdb482f318', 'IMG1_undefined_CCE1FFC6-1AC8-4A5C-AE43-63FDB482F318_040620250837571749062278_image_68409285b3737.jpg', 1),
(15, 'undefined', '5d429a54-9fb3-417f-9176-befd8e475d73', 'IMG1_undefined_5D429A54-9FB3-417F-9176-BEFD8E475D73_170620250146151750160776image_685155879769c.jpeg', 1),
(16, 'undefined', '5d429a54-9fb3-417f-9176-befd8e475d73', 'IMG1_undefined_5D429A54-9FB3-417F-9176-BEFD8E475D73_170620250146151750160776image_685155879fe98.jpeg', 1),
(17, 'undefined', '5d429a54-9fb3-417f-9176-befd8e475d73', 'IMG1_undefined_5D429A54-9FB3-417F-9176-BEFD8E475D73_170620250146151750160776image_68515587a0fc7.jpeg', 1),
(18, 'undefined', '5d429a54-9fb3-417f-9176-befd8e475d73', 'IMG1_undefined_5D429A54-9FB3-417F-9176-BEFD8E475D73_170620250146151750160776image_68515587a22c7.jpeg', 1),
(19, 'undefined', '097c078f-65df-4f31-9f32-eec4e9cbbafb', 'IMG1_undefined_097C078F-65DF-4F31-9F32-EEC4E9CBBAFB_170620250837291750185449image_6851b5e93fb62.jpeg', 1),
(20, 'undefined', '097c078f-65df-4f31-9f32-eec4e9cbbafb', 'IMG1_undefined_097C078F-65DF-4F31-9F32-EEC4E9CBBAFB_170620250837291750185449image_6851b5e948fda.jpeg', 1),
(21, 'undefined', '097c078f-65df-4f31-9f32-eec4e9cbbafb', 'IMG1_undefined_097C078F-65DF-4F31-9F32-EEC4E9CBBAFB_170620250837291750185449image_6851b5e94cd52.jpeg', 1),
(22, 'undefined', '097c078f-65df-4f31-9f32-eec4e9cbbafb', 'IMG1_undefined_097C078F-65DF-4F31-9F32-EEC4E9CBBAFB_170620250837291750185449image_6851b5e94dd04.jpeg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `myclean_liste_indicateur`
--

CREATE TABLE `myclean_liste_indicateur` (
  `id_indic` int NOT NULL,
  `pays` varchar(255) NOT NULL,
  `drapeau` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myclean_liste_indicateur`
--

INSERT INTO `myclean_liste_indicateur` (`id_indic`, `pays`, `drapeau`, `libelle`) VALUES
(1, 'Afghanistan', 'Flag_of_the_Taliban.svg.png', '+93'),
(2, 'Afrique du Sud', 'Flag_of_South_Africa.svg.webp', '+27'),
(3, 'Albanie', 'Flag_of_Albania.svg.png', '+355'),
(4, 'Algérie', 'Flag_of_Algeria.svg.png', '+213'),
(5, 'Allemagne', 'Flag_of_Germany.svg.png', '+49'),
(6, 'Andorre', 'Flag_of_Andorra.svg.png', '+376'),
(7, 'Angola', 'Flag_of_Angola.svg.png', '+244'),
(8, 'Anguilla', 'Flag_of_Anguilla.svg.png', '+1264'),
(9, 'Antigua et barbuda', 'Flag_of_Antigua_and_Barbuda.svg.png', '+1268'),
(10, 'Arabie saoudite', 'Flag_of_Saudi_Arabia.svg.png', '+966'),
(11, 'Argentine', 'Flag_of_Argentina.svg.png', '+54'),
(12, 'Arménie', 'Flag_of_Armenia.svg.png', '+374'),
(13, 'Aruba', 'Flag_of_Aruba.svg.png', '+297'),
(14, 'Sainte hélène ascension et tristan da cunha', 'Flag_of_the_United_Kingdom_%283-5%29.svg.png', '+247'),
(15, 'Australie', 'Flag_of_Australia.svg.png', '+61'),
(16, 'Autriche', 'Flag_of_Austria.svg.png', '+43'),
(17, 'Azerbaidjan', 'Flag_of_Azerbaijan.svg.png', '+994'),
(18, 'Bahamas', 'Flag_of_the_Bahamas.svg.png', '+1242'),
(19, 'Bahreïn', 'Flag_of_Bahrain.svg.png', '+973'),
(20, 'Bangladesh', 'Flag_of_Bangladesh.svg.png', '+880'),
(21, 'Barbade', 'Flag_of_Barbados.svg.png', '+1246'),
(22, 'Belgique', 'Flag_of_Belgium_%28civil%29.svg.png', '+32'),
(23, 'Belize', 'Flag_of_Belize.svg.png', '+501'),
(24, 'Bénin', 'Flag_of_Benin.svg.png', '+229'),
(25, 'Bermudes', 'Flag_of_Bermuda.svg.png', '+1441'),
(26, 'Bhoutan', 'Flag_of_Bhutan.svg.png', '+975'),
(27, 'Bielorussie', 'Flag_of_Belarus.svg.png', '+375'),
(28, 'Birmanie', 'Flag_of_Myanmar.svg.png', '+95'),
(29, 'Bolivie', 'Bandera_de_Bolivia_%28Estado%29.svg.png', '+591'),
(30, 'Bosnie-Herzégovine', 'Flag_of_Bosnia_and_Herzegovina.svg.png', '+387'),
(31, 'Botswana', 'Flag_of_Botswana.svg.png', '+267'),
(32, 'Bresil', 'Flag_of_Brazil.svg.png', '+55'),
(33, 'Brunei', 'Flag_of_Brunei.svg.png', '+673'),
(34, 'Bulgarie', 'Flag_of_Bulgaria.svg.png', '+359'),
(35, 'Burkina Faso', 'Flag_of_Burkina_Faso.svg.png', '+226'),
(36, 'Burundi', 'Flag_of_Burundi.svg.png', '+257'),
(37, 'Cambodge', 'Flag_of_Cambodia.svg.png', '+855'),
(38, 'Cameroun', 'Flag_of_Cameroon.svg.png', '+237'),
(39, 'Canada', 'Flag_of_Canada.svg.png', '+1'),
(40, 'Cap vert', 'Flag_of_Cape_Verde.svg.png', '+238'),
(41, 'Caïmans', 'Flag_of_the_Cayman_Islands.svg.png', '+1345'),
(42, 'Centrafricaine république', 'Flag_of_the_Central_African_Republic.svg.png', '+236'),
(43, 'Chili', 'Flag_of_Chile.svg.png', '+56'),
(44, 'Chine', 'Flag_of_the_People%27s_Republic_of_China.svg.png', '+86'),
(45, 'Chypre', 'Flag_of_Cyprus.svg.png', '+357'),
(46, 'Colombie', 'Flag_of_Colombia.svg.png', '+57'),
(47, 'Comores', 'Flag_of_the_Comoros.svg.png', '+269'),
(48, 'Congo kinshasa', 'Flag_of_the_Democratic_Republic_of_the_Congo.svg.png', '+243'),
(49, 'Congo brazzaville', 'Flag_of_the_Republic_of_the_Congo.svg.png', '+242'),
(50, 'Cook', 'Flag_of_the_Cook_Islands.svg.png', '+682'),
(51, 'Corée du Nord', 'Flag_of_North_Korea.svg.png', '+850'),
(52, 'Corée du Sud', 'Flag_of_South_Korea.svg.png', '+82'),
(53, 'Costa Rica', 'Flag_of_Costa_Rica.svg.png', '+506'),
(54, 'Côte divoire', 'Flag_of_C%C3%B4te_d%27Ivoire.svg.png', '+225'),
(55, 'Croatie', 'Flag_of_Croatia.svg.png', '+385'),
(56, 'Cuba', 'Flag_of_Cuba.svg.png', '+53'),
(57, 'Danemark', 'Flag_of_Denmark.svg.png', '+45'),
(58, 'Djibouti', 'Flag_of_Djibouti.svg.png', '+253'),
(59, 'Dominique', 'Flag_of_Dominica.svg.png', '+1767'),
(60, 'Égypte', 'Flag_of_Egypt.svg.png', '+20'),
(61, 'Émirats arabes unis', 'Flag_of_the_United_Arab_Emirates.svg.png', '+971'),
(62, 'Équateur', 'Flag_of_Ecuador.svg.png', '+593'),
(63, 'Erythree', 'Flag_of_Eritrea.svg.png', '+291'),
(64, 'Espagne', 'Flag_of_Spain.svg.png', '+34'),
(65, 'Estonie', 'Flag_of_Estonia.svg.png', '+372'),
(66, 'États-Unis', 'Flag_of_the_United_States.svg.png', '+1'),
(67, 'Éthiopie', 'Flag_of_Ethiopia.svg.png', '+251'),
(68, 'Îles Féroé', 'Flag_of_the_Faroe_Islands.svg.png', '+298'),
(69, 'Fidji', 'Flag_of_Fiji.svg.png', '+679'),
(70, 'Finlande', 'Flag_of_Finland.svg.png', '+358'),
(71, 'France', 'Flag_of_France.svg.png', '+33'),
(72, 'Gabon', 'Flag_of_Gabon.svg.png', '+241'),
(73, 'Gambie', 'Flag_of_The_Gambia.svg.png', '+220'),
(74, 'Georgie', 'Flag_of_Georgia.svg.png', '+995'),
(75, 'Ghana', 'Flag_of_Ghana.svg.png', '+233'),
(76, 'Gibraltar', 'Flag_of_Gibraltar.svg.png', '+350'),
(77, 'Grece', 'Flag_of_Greece.svg.png', '+30'),
(78, 'Grenade', 'Flag_of_Grenada.svg.png', '+1473'),
(79, 'Groenland', 'Flag_of_Greenland.svg.png', '+299'),
(80, 'Guadeloupe', 'Flag_of_France.svg.png', '+590'),
(81, 'Guatemala', 'Flag_of_Guatemala.svg.png', '+502'),
(82, 'Guinee', 'Flag_of_Guinea.svg.png', '+224'),
(83, 'Guinee equatoriale', 'Flag_of_Equatorial_Guinea.svg.png', '+240'),
(84, 'Guinee bissau', 'Flag_of_Guinea-Bissau.svg.png', '+245'),
(85, 'Guyana', 'Flag_of_Guyana.svg.png', '+592'),
(86, 'Guyane', 'Flag_of_France.svg.png', '+594'),
(87, 'Haïti', 'Flag_of_Haiti.svg.png', '+509'),
(88, 'Honduras', 'Flag_of_Honduras.svg.png', '+504'),
(89, 'Hong Kong', 'Flag_of_Hong_Kong.svg.png', '+852'),
(90, 'Hongrie', 'Flag_of_Hungary.svg.png', '+36'),
(91, 'Inde', 'Flag_of_India.svg.png', '+91'),
(92, 'Indonesie', 'Flag_of_Indonesia.svg.png', '+62'),
(93, 'Irak', 'Flag_of_Iraq.svg.png', '+964'),
(94, 'Iran', 'Flag_of_Iran.svg.png', '+98'),
(95, 'Irlande', 'Flag_of_Ireland.svg.png', '+353'),
(96, 'Islande', 'Flag_of_Iceland.svg.png', '+354'),
(97, 'Israël', 'Flag_of_Israel.svg.png', '+972'),
(98, 'Italie', 'Flag_of_Italy.svg.png', '+39'),
(99, 'Jamaïque', 'Flag_of_Jamaica.svg.png', '+1876'),
(100, 'Japon', 'Flag_of_Japan.svg.png', '+81'),
(101, 'Jordanie', 'Flag_of_Jordan.svg.png', '+962'),
(102, 'Kazakhstan', 'Flag_of_Kazakhstan.svg.png', '+7'),
(103, 'Kenya', 'Flag_of_Kenya.svg.png', '+254'),
(104, 'Kirghizistan', 'Flag_of_Kyrgyzstan.svg.png', '+996'),
(105, 'Kiribati', 'Flag_of_Kiribati.svg.png', '+686'),
(106, 'Kosovo', 'Flag_of_Kosovo.svg.png', '+383'),
(107, 'Koweit', 'Flag_of_Kuwait.svg.png', '+965'),
(108, 'Laos', 'Flag_of_Laos.svg.png', '+856'),
(109, 'Lesotho', 'Flag_of_Lesotho.svg.png', '+266'),
(110, 'Lettonie', 'Flag_of_Latvia.svg.png', '+371'),
(111, 'Liban', 'Flag_of_Lebanon.svg.png', '+961'),
(112, 'Liberia', 'Flag_of_Liberia.svg.png', '+231'),
(113, 'Libye', 'Flag_of_Libya.svg.png', '+218'),
(114, 'Liechtenstein', 'Flag_of_Liechtenstein.svg.png', '+423'),
(115, 'Lituanie', 'Flag_of_Lithuania.svg.png', '+370'),
(116, 'Luxembourg', 'Flag_of_Luxembourg.svg.png', '+352'),
(117, 'Macédoine du Nord', 'Flag_of_North_Macedonia.svg.png', '+389'),
(118, 'Madagascar', 'Flag_of_Madagascar.svg.png', '+261'),
(119, 'Malaisie', 'Flag_of_Malaysia.svg.png', '+60'),
(120, 'Malawi', 'Flag_of_Malawi.svg.png', '+265'),
(121, 'Maldives', 'Flag_of_Maldives.svg.png', '+960'),
(122, 'Mali', 'Flag_of_Mali.svg.png', '+223'),
(123, 'Malouines', 'Flag_of_the_Falkland_Islands.svg.png', '+500'),
(124, 'Malte', 'Flag_of_Malta.svg.png', '+356'),
(125, 'Mariannes du nord', 'Flag_of_the_Northern_Mariana_Islands.svg.png', '+1670'),
(126, 'Maroc', 'Flag_of_Morocco.svg.png', '+212'),
(127, 'Marshall iles', 'Flag_of_the_Marshall_Islands.svg.png', '+692'),
(128, 'Martinique', 'Flag_of_France.svg.png', '+596'),
(129, 'Maurice', 'Flag_of_Mauritius.svg.png', '+230'),
(130, 'Mauritanie', 'Flag_of_Mauritania.svg.png', '+222'),
(131, 'Mayotte', 'Flag_of_France.svg.png', '+262'),
(132, 'Mexique', 'Flag_of_Mexico.svg.png', '+52'),
(133, 'Micronesie', 'Flag_of_the_Federated_States_of_Micronesia.svg.png', '+691'),
(134, 'Moldavie', 'Flag_of_Moldova.svg.png', '+373'),
(135, 'Monaco', 'Flag_of_Monaco.svg.png', '+377'),
(136, 'Mongolie', 'Flag_of_Mongolia.svg.png', '+976'),
(137, 'Montenegro', 'Flag_of_Montenegro.svg.png', '+382'),
(138, 'Mozambique', 'Flag_of_Mozambique.svg.png', '+258'),
(139, 'Namibie', 'Flag_of_Namibia.svg.png', '+264'),
(140, 'Nauru', 'Flag_of_Nauru.svg.png', '+674'),
(141, 'Nepal', 'Flag_of_Nepal.svg.png', '+977'),
(142, 'Nicaragua', 'Flag_of_Nicaragua.svg.png', '+505'),
(143, 'Niger', 'Flag_of_Niger.svg.png', '+227'),
(144, 'Nigeria', 'Flag_of_Nigeria.svg.png', '+234'),
(145, 'Niue', 'Flag_of_Niue.svg.png', '+683'),
(146, 'Norvege', 'Flag_of_Norway.svg.png', '+47'),
(147, 'Nouvelle calédonie', 'Flags_of_New_Caledonia.svg.png', '+687'),
(148, 'Nouvelle zélande', 'Flag_of_New_Zealand.svg.png', '+64'),
(149, 'Oman', 'Flag_of_Oman.svg.png', '+968'),
(150, 'Ouganda', 'Flag_of_Uganda.svg.png', '+256'),
(151, 'Ouzbékistan', 'Flag_of_Uzbekistan.svg.png', '+998'),
(152, 'Pakistan', 'Flag_of_Pakistan.svg.png', '+92'),
(153, 'Palaos', 'Flag_of_Palau.svg.png', '+680'),
(154, 'Palestine', 'Flag_of_Palestine.svg.png', '+970'),
(155, 'Panama', 'Flag_of_Panama.svg.png', '+507'),
(156, 'Papouasie nouvelle guinée', 'Flag_of_Papua_New_Guinea.svg.png', '+675'),
(157, 'Paraguay', 'Flag_of_Paraguay.svg.png', '+595'),
(158, 'Pays bas', 'Flag_of_the_Netherlands.svg.png', '+31'),
(159, 'Perou', 'Flag_of_Peru.svg.png', '+51'),
(160, 'Philippines', 'Flag_of_the_Philippines.svg.png', '+63'),
(161, 'Pologne', 'Flag_of_Poland.svg.png', '+48'),
(162, 'Polynesie francaise', 'Flag_of_French_Polynesia.svg.png', '+689'),
(163, 'Portugal', 'Flag_of_Portugal.svg.png', '+351'),
(164, 'Qatar', 'Flag_of_Qatar.svg.png', '+974'),
(165, 'Reunion', 'Flag_of_France.svg.png', '+262'),
(166, 'Roumanie', 'Flag_of_Romania.svg.png', '+40'),
(167, 'Royaume uni', 'Flag_of_the_United_Kingdom_%283-5%29.svg.png', '+44'),
(168, 'Russie', 'Flag_of_Russia.svg.png', '+7'),
(169, 'Rwanda', 'Flag_of_Rwanda.svg.png', '+250'),
(170, 'Saint christophe et nieves', 'Flag_of_Saint_Kitts_and_Nevis.svg.png', '+1869'),
(171, 'Sainte hélène ascension et tristan da cunha', 'Flag_of_the_United_Kingdom_%283-5%29.svg.png', '+290'),
(172, 'Sainte lucie', 'Flag_of_Saint_Lucia.svg.png', '+1758'),
(173, 'Saint marin', 'Flag_of_San_Marino.svg.png', '+378'),
(174, 'Saint pierre et miquelon', 'Flag_of_France.svg.png', '+508'),
(175, 'Saint vincent et les grenadines', 'Flag_of_Saint_Vincent_and_the_Grenadines.svg.png', '+1784'),
(176, 'Salomon', 'Flag_of_the_Solomon_Islands.svg.png', '+677'),
(177, 'Salvador', 'Flag_of_El_Salvador.svg.png', '+503'),
(178, 'Samoa', 'Flag_of_Samoa.svg.png', '+685'),
(179, 'Samoa américaines', 'Flag_of_American_Samoa.svg.png', '+1684'),
(180, 'Sao tome et principe', 'Flag_of_S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe.svg.png', '+239'),
(181, 'Sénégal', 'Flag_of_Senegal.svg.png', '+221'),
(182, 'Serbie', 'Flag_of_Serbia.svg.png', '+381'),
(183, 'Seychelles', 'Flag_of_Seychelles.svg.png', '+248'),
(184, 'Sierra Leone', 'Flag_of_Sierra_Leone.svg.png', '+232'),
(185, 'Singapour', 'Flag_of_Singapore.svg.png', '+65'),
(186, 'Slovaquie', 'Flag_of_Slovakia.svg.png', '+421'),
(187, 'Slovénie', 'Flag_of_Slovenia.svg.png', '+386'),
(188, 'Somalie', 'Flag_of_Somalia.svg.png', '+252'),
(189, 'Soudan', 'Flag_of_Sudan.svg.png', '+249'),
(190, 'Soudan du Sud', 'Flag_of_South_Sudan.svg.png', '+211'),
(191, 'Sri Lanka', 'Flag_of_Sri_Lanka.svg.png', '+94'),
(192, 'Suède', 'Flag_of_Sweden.svg.png', '+46'),
(193, 'Suisse', 'Flag_of_Switzerland.svg.png', '+41'),
(194, 'Suriname', 'Flag_of_Suriname.svg.png', '+597'),
(195, 'Eswatini', 'Flag_of_Eswatini.svg.png', '+268'),
(196, 'Syrie', 'Flag_of_Syria.svg.png', '+963'),
(197, 'Tadjikistan', 'Flag_of_Tajikistan.svg.png', '+992'),
(198, 'Tanzanie', 'Flag_of_Tanzania.svg.png', '+255'),
(199, 'Taiwan', 'Flag_of_the_Republic_of_China.svg.png', '+886'),
(200, 'Tchad', 'Flag_of_Chad.svg.png', '+235'),
(201, 'Republique tcheque', 'Flag_of_the_Czech_Republic.svg.png', '+420'),
(202, 'Australie', 'Flag_of_Australia.svg.png', '+672'),
(203, 'Thaïlande', 'Flag_of_Thailand.svg.png', '+66'),
(204, 'Timor-Leste', 'Flag_of_East_Timor.svg.png', '+670'),
(205, 'Togo', 'Flag_of_Togo.svg.png', '+228'),
(206, 'Tokelau', 'Flag_of_Tokelau.svg.png', '+690'),
(207, 'Tonga', 'Flag_of_Tonga.svg.png', '+676'),
(208, 'Trinite et tobago', 'Flag_of_Trinidad_and_Tobago.svg.png', '+1868'),
(209, 'Turkménistan', 'Flag_of_Turkmenistan.svg.png', '+993'),
(210, 'Turques-et-Caïques', 'Flag_of_the_Turks_and_Caicos_Islands.svg.png', '+1649'),
(211, 'Turquie', 'Flag_of_Turkey.svg.png', '+90'),
(212, 'Tuvalu', 'Flag_of_Tuvalu.svg.png', '+688'),
(213, 'Ukraine', 'Flag_of_Ukraine.svg.png', '+380'),
(214, 'Uruguay', 'Flag_of_Uruguay.svg.png', '+598'),
(215, 'Vanuatu', 'Flag_of_Vanuatu.svg.png', '+678'),
(216, 'Vatican', 'Flag_of_the_Vatican_City_%282001%E2%80%932023%29.svg.png', '+39'),
(217, 'Venezuela', 'Flag_of_Venezuela.svg.png', '+58'),
(218, 'Etats unis', 'Flag_of_the_United_States_Virgin_Islands.svg.png', '+1'),
(219, 'Vierges britanniques', 'Flag_of_the_British_Virgin_Islands.svg.png', '+1284'),
(220, 'Viet nam', 'Flag_of_Vietnam.svg.png', '+84'),
(221, 'Wallis et futuna', 'Flag_of_Wallis_and_Futuna.svg.png', '+681'),
(222, 'Yemen', 'Flag_of_Yemen.svg.png', '+967'),
(223, 'Zambie', 'Flag_of_Zambia.svg.png', '+260'),
(224, 'Zimbabwe', 'Flag_of_Zimbabwe.svg.png', '+263');

-- --------------------------------------------------------

--
-- Structure de la table `myclean_msg_contacts`
--

CREATE TABLE `myclean_msg_contacts` (
  `id_contacts` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `etat_contact` int NOT NULL,
  `date_crea` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myclean_msg_contacts`
--

INSERT INTO `myclean_msg_contacts` (`id_contacts`, `nom`, `email`, `telephone`, `message`, `etat_contact`, `date_crea`) VALUES
(2, 'MORIN Margaux', 'margaux.morin@laclef-immobilier.com', '', 'dsds sdsdsd sd sds', 0, '2024-07-25 14:01:12'),
(3, '', '', '', '', 0, '2024-11-28 04:21:41'),
(4, '', '', '', '', 0, '2024-11-28 04:21:50'),
(5, '', '', '', '', 0, '2024-11-28 11:08:18'),
(6, '', '', '', '', 0, '2024-11-28 11:08:22'),
(7, '', '', '', '', 0, '2024-12-06 03:53:29'),
(8, '', '', '', '', 0, '2024-12-06 10:25:54'),
(9, '', '', '', '', 0, '2024-12-06 20:05:40'),
(10, '', '', '', '', 0, '2024-12-07 17:25:45'),
(11, '', '', '', '', 0, '2024-12-09 15:43:35'),
(12, '', '', '', '', 0, '2024-12-09 23:03:49'),
(13, '', '', '', '', 0, '2024-12-19 17:34:36'),
(14, '', '', '', '', 0, '2024-12-19 17:35:27'),
(15, '', '', '', '', 0, '2024-12-19 17:37:44'),
(16, '', '', '', '', 0, '2024-12-19 17:38:04'),
(17, '', '', '', '', 0, '2025-01-26 10:04:30'),
(18, '', '', '', '', 0, '2025-01-26 23:04:17'),
(19, '', '', '', '', 0, '2025-02-08 16:41:34'),
(20, '', '', '', '', 0, '2025-02-08 18:03:28'),
(21, '', '', '', '', 0, '2025-02-08 19:29:48'),
(22, '', '', '', '', 0, '2025-02-08 19:47:31'),
(23, '', '', '', '', 0, '2025-02-09 06:23:06'),
(24, '', '', '', '', 0, '2025-02-09 18:44:36'),
(25, '', '', '', '', 0, '2025-03-01 23:39:58'),
(26, '', '', '', '', 0, '2025-03-02 01:14:03'),
(27, '', '', '', '', 0, '2025-03-10 02:48:54'),
(28, '', '', '', '', 0, '2025-03-10 03:04:06'),
(29, '', '', '', '', 0, '2025-03-10 03:32:50'),
(30, '', '', '', '', 0, '2025-03-10 03:33:01'),
(31, '', '', '', '', 0, '2025-03-12 19:55:31'),
(32, '', '', '', '', 0, '2025-03-12 23:51:51'),
(33, '', '', '', '', 0, '2025-03-13 05:12:30'),
(34, '', '', '', '', 0, '2025-03-13 06:10:01'),
(35, '', '', '', '', 0, '2025-03-13 08:29:11'),
(36, '', '', '', '', 0, '2025-03-14 22:34:48'),
(37, '', '', '', '', 0, '2025-03-14 22:56:02'),
(38, '', '', '', '', 0, '2025-04-01 09:47:12'),
(39, '', '', '', '', 0, '2025-04-04 15:01:52'),
(40, '', '', '', '', 0, '2025-04-04 16:03:54'),
(41, '', '', '', '', 0, '2025-04-10 04:09:23'),
(42, '', '', '', '', 0, '2025-04-11 00:20:13'),
(43, '', '', '', '', 0, '2025-04-11 19:13:06'),
(44, '', '', '', '', 0, '2025-04-11 19:25:40'),
(45, '', '', '', '', 0, '2025-04-11 20:14:24'),
(46, '', '', '', '', 0, '2025-04-11 20:29:11'),
(47, '', '', '', '', 0, '2025-04-15 00:24:21'),
(48, '', '', '', '', 0, '2025-04-15 08:51:52'),
(49, '', '', '', '', 0, '2025-04-15 09:31:01'),
(50, '', '', '', '', 0, '2025-05-01 16:51:56'),
(51, '', '', '', '', 0, '2025-05-02 18:20:51'),
(52, '', '', '', '', 0, '2025-05-02 21:38:23'),
(53, '', '', '', '', 0, '2025-05-08 16:04:05'),
(54, '', '', '', '', 0, '2025-05-12 16:09:58'),
(55, '', '', '', '', 0, '2025-05-12 22:59:40'),
(56, '', '', '', '', 0, '2025-05-12 23:03:18'),
(57, '', '', '', '', 0, '2025-05-13 15:05:04'),
(58, '', '', '', '', 0, '2025-06-04 01:20:05'),
(59, '', '', '', '', 0, '2025-06-04 01:50:33'),
(60, '', '', '', '', 0, '2025-06-05 01:13:31'),
(61, '', '', '', '', 0, '2025-06-06 10:27:50'),
(62, '', '', '', '', 0, '2025-06-09 15:20:49'),
(63, '', '', '', '', 0, '2025-06-09 17:30:54'),
(64, '', '', '', '', 0, '2025-06-09 18:42:37'),
(65, '', '', '', '', 0, '2025-06-09 20:05:02'),
(66, '', '', '', '', 0, '2025-06-10 01:51:10'),
(67, '', '', '', '', 0, '2025-06-14 20:42:21'),
(68, '', '', '', '', 0, '2025-06-15 04:40:36'),
(69, '', '', '', '', 0, '2025-06-15 15:20:05');

-- --------------------------------------------------------

--
-- Structure de la table `myclean_paiement`
--

CREATE TABLE `myclean_paiement` (
  `id_paiement` int NOT NULL,
  `id_panier` varchar(255) NOT NULL,
  `id_transaction_custom_abonnement` varchar(255) NOT NULL,
  `nom_custom_abonnement` varchar(255) NOT NULL,
  `prenom_custom_abonnement` varchar(255) NOT NULL,
  `telephone_custom_abonnement` varchar(255) NOT NULL,
  `montant_custom_abonnement` varchar(255) NOT NULL,
  `devise_custom_abonnement` varchar(255) NOT NULL,
  `email_custom_abonnement` varchar(255) NOT NULL,
  `description_custom_abonnement` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_country` varchar(255) NOT NULL,
  `customer_state` varchar(255) NOT NULL,
  `customer_zip_code` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `date_crea` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `myclean_paiement_log`
--

CREATE TABLE `myclean_paiement_log` (
  `id_log` int NOT NULL,
  `log` text NOT NULL,
  `autres` text NOT NULL,
  `date_crea` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `myclean_pays`
--

CREATE TABLE `myclean_pays` (
  `id` smallint UNSIGNED NOT NULL,
  `code` int NOT NULL,
  `alpha2` varchar(2) NOT NULL,
  `alpha3` varchar(3) NOT NULL,
  `nom_en_gb` varchar(45) NOT NULL,
  `nom_fr_fr` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `myclean_pays`
--

INSERT INTO `myclean_pays` (`id`, `code`, `alpha2`, `alpha3`, `nom_en_gb`, `nom_fr_fr`) VALUES
(1, 4, 'AF', 'AFG', 'Afghanistan', 'Afghanistan'),
(2, 8, 'AL', 'ALB', 'Albania', 'Albanie'),
(3, 10, 'AQ', 'ATA', 'Antarctica', 'Antarctique'),
(4, 12, 'DZ', 'DZA', 'Algeria', 'Algérie'),
(5, 16, 'AS', 'ASM', 'American Samoa', 'Samoa Américaines'),
(6, 20, 'AD', 'AND', 'Andorra', 'Andorre'),
(7, 24, 'AO', 'AGO', 'Angola', 'Angola'),
(8, 28, 'AG', 'ATG', 'Antigua and Barbuda', 'Antigua-et-Barbuda'),
(9, 31, 'AZ', 'AZE', 'Azerbaijan', 'Azerbaïdjan'),
(10, 32, 'AR', 'ARG', 'Argentina', 'Argentine'),
(11, 36, 'AU', 'AUS', 'Australia', 'Australie'),
(12, 40, 'AT', 'AUT', 'Austria', 'Autriche'),
(13, 44, 'BS', 'BHS', 'Bahamas', 'Bahamas'),
(14, 48, 'BH', 'BHR', 'Bahrain', 'Bahreïn'),
(15, 50, 'BD', 'BGD', 'Bangladesh', 'Bangladesh'),
(16, 51, 'AM', 'ARM', 'Armenia', 'Arménie'),
(17, 52, 'BB', 'BRB', 'Barbados', 'Barbade'),
(18, 56, 'BE', 'BEL', 'Belgium', 'Belgique'),
(19, 60, 'BM', 'BMU', 'Bermuda', 'Bermudes'),
(20, 64, 'BT', 'BTN', 'Bhutan', 'Bhoutan'),
(21, 68, 'BO', 'BOL', 'Bolivia', 'Bolivie'),
(22, 70, 'BA', 'BIH', 'Bosnia and Herzegovina', 'Bosnie-Herzégovine'),
(23, 72, 'BW', 'BWA', 'Botswana', 'Botswana'),
(24, 74, 'BV', 'BVT', 'Bouvet Island', 'Île Bouvet'),
(25, 76, 'BR', 'BRA', 'Brazil', 'Brésil'),
(26, 84, 'BZ', 'BLZ', 'Belize', 'Belize'),
(27, 86, 'IO', 'IOT', 'British Indian Ocean Territory', 'Territoire Britannique de l\'Océan Indien'),
(28, 90, 'SB', 'SLB', 'Solomon Islands', 'Îles Salomon'),
(29, 92, 'VG', 'VGB', 'British Virgin Islands', 'Îles Vierges Britanniques'),
(30, 96, 'BN', 'BRN', 'Brunei Darussalam', 'Brunéi Darussalam'),
(31, 100, 'BG', 'BGR', 'Bulgaria', 'Bulgarie'),
(32, 104, 'MM', 'MMR', 'Myanmar', 'Myanmar'),
(33, 108, 'BI', 'BDI', 'Burundi', 'Burundi'),
(34, 112, 'BY', 'BLR', 'Belarus', 'Bélarus'),
(35, 116, 'KH', 'KHM', 'Cambodia', 'Cambodge'),
(36, 120, 'CM', 'CMR', 'Cameroon', 'Cameroun'),
(37, 124, 'CA', 'CAN', 'Canada', 'Canada'),
(38, 132, 'CV', 'CPV', 'Cape Verde', 'Cap-vert'),
(39, 136, 'KY', 'CYM', 'Cayman Islands', 'Îles Caïmanes'),
(40, 140, 'CF', 'CAF', 'Central African', 'République Centrafricaine'),
(41, 144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lanka'),
(42, 148, 'TD', 'TCD', 'Chad', 'Tchad'),
(43, 152, 'CL', 'CHL', 'Chile', 'Chili'),
(44, 156, 'CN', 'CHN', 'China', 'Chine'),
(45, 158, 'TW', 'TWN', 'Taiwan', 'Taïwan'),
(46, 162, 'CX', 'CXR', 'Christmas Island', 'Île Christmas'),
(47, 166, 'CC', 'CCK', 'Cocos (Keeling) Islands', 'Îles Cocos (Keeling)'),
(48, 170, 'CO', 'COL', 'Colombia', 'Colombie'),
(49, 174, 'KM', 'COM', 'Comoros', 'Comores'),
(50, 175, 'YT', 'MYT', 'Mayotte', 'Mayotte'),
(51, 178, 'CG', 'COG', 'Republic of the Congo', 'République du Congo'),
(52, 180, 'CD', 'COD', 'The Democratic Republic Of The Congo', 'République Démocratique du Congo'),
(53, 184, 'CK', 'COK', 'Cook Islands', 'Îles Cook'),
(54, 188, 'CR', 'CRI', 'Costa Rica', 'Costa Rica'),
(55, 191, 'HR', 'HRV', 'Croatia', 'Croatie'),
(56, 192, 'CU', 'CUB', 'Cuba', 'Cuba'),
(57, 196, 'CY', 'CYP', 'Cyprus', 'Chypre'),
(58, 203, 'CZ', 'CZE', 'Czech Republic', 'République Tchèque'),
(59, 204, 'BJ', 'BEN', 'Benin', 'Bénin'),
(60, 208, 'DK', 'DNK', 'Denmark', 'Danemark'),
(61, 212, 'DM', 'DMA', 'Dominica', 'Dominique'),
(62, 214, 'DO', 'DOM', 'Dominican Republic', 'République Dominicaine'),
(63, 218, 'EC', 'ECU', 'Ecuador', 'Équateur'),
(64, 222, 'SV', 'SLV', 'El Salvador', 'El Salvador'),
(65, 226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Guinée Équatoriale'),
(66, 231, 'ET', 'ETH', 'Ethiopia', 'Éthiopie'),
(67, 232, 'ER', 'ERI', 'Eritrea', 'Érythrée'),
(68, 233, 'EE', 'EST', 'Estonia', 'Estonie'),
(69, 234, 'FO', 'FRO', 'Faroe Islands', 'Îles Féroé'),
(70, 238, 'FK', 'FLK', 'Falkland Islands', 'Îles (malvinas) Falkland'),
(71, 239, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', 'Géorgie du Sud et les Îles Sandwich du Sud'),
(72, 242, 'FJ', 'FJI', 'Fiji', 'Fidji'),
(73, 246, 'FI', 'FIN', 'Finland', 'Finlande'),
(74, 248, 'AX', 'ALA', 'Åland Islands', 'Îles Åland'),
(75, 250, 'FR', 'FRA', 'France', 'France'),
(76, 254, 'GF', 'GUF', 'French Guiana', 'Guyane Française'),
(77, 258, 'PF', 'PYF', 'French Polynesia', 'Polynésie Française'),
(78, 260, 'TF', 'ATF', 'French Southern Territories', 'Terres Australes Françaises'),
(79, 262, 'DJ', 'DJI', 'Djibouti', 'Djibouti'),
(80, 266, 'GA', 'GAB', 'Gabon', 'Gabon'),
(81, 268, 'GE', 'GEO', 'Georgia', 'Géorgie'),
(82, 270, 'GM', 'GMB', 'Gambia', 'Gambie'),
(83, 275, 'PS', 'PSE', 'Occupied Palestinian Territory', 'Territoire Palestinien Occupé'),
(84, 276, 'DE', 'DEU', 'Germany', 'Allemagne'),
(85, 288, 'GH', 'GHA', 'Ghana', 'Ghana'),
(86, 292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar'),
(87, 296, 'KI', 'KIR', 'Kiribati', 'Kiribati'),
(88, 300, 'GR', 'GRC', 'Greece', 'Grèce'),
(89, 304, 'GL', 'GRL', 'Greenland', 'Groenland'),
(90, 308, 'GD', 'GRD', 'Grenada', 'Grenade'),
(91, 312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe'),
(92, 316, 'GU', 'GUM', 'Guam', 'Guam'),
(93, 320, 'GT', 'GTM', 'Guatemala', 'Guatemala'),
(94, 324, 'GN', 'GIN', 'Guinea', 'Guinée'),
(95, 328, 'GY', 'GUY', 'Guyana', 'Guyana'),
(96, 332, 'HT', 'HTI', 'Haiti', 'Haïti'),
(97, 334, 'HM', 'HMD', 'Heard Island and McDonald Islands', 'Îles Heard et Mcdonald'),
(98, 336, 'VA', 'VAT', 'Vatican City State', 'Saint-Siège (état de la Cité du Vatican)'),
(99, 340, 'HN', 'HND', 'Honduras', 'Honduras'),
(100, 344, 'HK', 'HKG', 'Hong Kong', 'Hong-Kong'),
(101, 348, 'HU', 'HUN', 'Hungary', 'Hongrie'),
(102, 352, 'IS', 'ISL', 'Iceland', 'Islande'),
(103, 356, 'IN', 'IND', 'India', 'Inde'),
(104, 360, 'ID', 'IDN', 'Indonesia', 'Indonésie'),
(105, 364, 'IR', 'IRN', 'Islamic Republic of Iran', 'République Islamique d\'Iran'),
(106, 368, 'IQ', 'IRQ', 'Iraq', 'Iraq'),
(107, 372, 'IE', 'IRL', 'Ireland', 'Irlande'),
(108, 376, 'IL', 'ISR', 'Israel', 'Israël'),
(109, 380, 'IT', 'ITA', 'Italy', 'Italie'),
(110, 384, 'CI', 'CIV', 'Côte d\'Ivoire', 'Côte d\'Ivoire'),
(111, 388, 'JM', 'JAM', 'Jamaica', 'Jamaïque'),
(112, 392, 'JP', 'JPN', 'Japan', 'Japon'),
(113, 398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstan'),
(114, 400, 'JO', 'JOR', 'Jordan', 'Jordanie'),
(115, 404, 'KE', 'KEN', 'Kenya', 'Kenya'),
(116, 408, 'KP', 'PRK', 'Democratic People\'s Republic of Korea', 'République Populaire Démocratique de Corée'),
(117, 410, 'KR', 'KOR', 'Republic of Korea', 'République de Corée'),
(118, 414, 'KW', 'KWT', 'Kuwait', 'Koweït'),
(119, 417, 'KG', 'KGZ', 'Kyrgyzstan', 'Kirghizistan'),
(120, 418, 'LA', 'LAO', 'Lao People\'s Democratic Republic', 'République Démocratique Populaire Lao'),
(121, 422, 'LB', 'LBN', 'Lebanon', 'Liban'),
(122, 426, 'LS', 'LSO', 'Lesotho', 'Lesotho'),
(123, 428, 'LV', 'LVA', 'Latvia', 'Lettonie'),
(124, 430, 'LR', 'LBR', 'Liberia', 'Libéria'),
(125, 434, 'LY', 'LBY', 'Libyan Arab Jamahiriya', 'Jamahiriya Arabe Libyenne'),
(126, 438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein'),
(127, 440, 'LT', 'LTU', 'Lithuania', 'Lituanie'),
(128, 442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg'),
(129, 446, 'MO', 'MAC', 'Macao', 'Macao'),
(130, 450, 'MG', 'MDG', 'Madagascar', 'Madagascar'),
(131, 454, 'MW', 'MWI', 'Malawi', 'Malawi'),
(132, 458, 'MY', 'MYS', 'Malaysia', 'Malaisie'),
(133, 462, 'MV', 'MDV', 'Maldives', 'Maldives'),
(134, 466, 'ML', 'MLI', 'Mali', 'Mali'),
(135, 470, 'MT', 'MLT', 'Malta', 'Malte'),
(136, 474, 'MQ', 'MTQ', 'Martinique', 'Martinique'),
(137, 478, 'MR', 'MRT', 'Mauritania', 'Mauritanie'),
(138, 480, 'MU', 'MUS', 'Mauritius', 'Maurice'),
(139, 484, 'MX', 'MEX', 'Mexico', 'Mexique'),
(140, 492, 'MC', 'MCO', 'Monaco', 'Monaco'),
(141, 496, 'MN', 'MNG', 'Mongolia', 'Mongolie'),
(142, 498, 'MD', 'MDA', 'Republic of Moldova', 'République de Moldova'),
(143, 500, 'MS', 'MSR', 'Montserrat', 'Montserrat'),
(144, 504, 'MA', 'MAR', 'Morocco', 'Maroc'),
(145, 508, 'MZ', 'MOZ', 'Mozambique', 'Mozambique'),
(146, 512, 'OM', 'OMN', 'Oman', 'Oman'),
(147, 516, 'NA', 'NAM', 'Namibia', 'Namibie'),
(148, 520, 'NR', 'NRU', 'Nauru', 'Nauru'),
(149, 524, 'NP', 'NPL', 'Nepal', 'Népal'),
(150, 528, 'NL', 'NLD', 'Netherlands', 'Pays-Bas'),
(151, 530, 'AN', 'ANT', 'Netherlands Antilles', 'Antilles Néerlandaises'),
(152, 533, 'AW', 'ABW', 'Aruba', 'Aruba'),
(153, 540, 'NC', 'NCL', 'New Caledonia', 'Nouvelle-Calédonie'),
(154, 548, 'VU', 'VUT', 'Vanuatu', 'Vanuatu'),
(155, 554, 'NZ', 'NZL', 'New Zealand', 'Nouvelle-Zélande'),
(156, 558, 'NI', 'NIC', 'Nicaragua', 'Nicaragua'),
(157, 562, 'NE', 'NER', 'Niger', 'Niger'),
(158, 566, 'NG', 'NGA', 'Nigeria', 'Nigéria'),
(159, 570, 'NU', 'NIU', 'Niue', 'Niué'),
(160, 574, 'NF', 'NFK', 'Norfolk Island', 'Île Norfolk'),
(161, 578, 'NO', 'NOR', 'Norway', 'Norvège'),
(162, 580, 'MP', 'MNP', 'Northern Mariana Islands', 'Îles Mariannes du Nord'),
(163, 581, 'UM', 'UMI', 'United States Minor Outlying Islands', 'Îles Mineures Éloignées des États-Unis'),
(164, 583, 'FM', 'FSM', 'Federated States of Micronesia', 'États Fédérés de Micronésie'),
(165, 584, 'MH', 'MHL', 'Marshall Islands', 'Îles Marshall'),
(166, 585, 'PW', 'PLW', 'Palau', 'Palaos'),
(167, 586, 'PK', 'PAK', 'Pakistan', 'Pakistan'),
(168, 591, 'PA', 'PAN', 'Panama', 'Panama'),
(169, 598, 'PG', 'PNG', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée'),
(170, 600, 'PY', 'PRY', 'Paraguay', 'Paraguay'),
(171, 604, 'PE', 'PER', 'Peru', 'Pérou'),
(172, 608, 'PH', 'PHL', 'Philippines', 'Philippines'),
(173, 612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn'),
(174, 616, 'PL', 'POL', 'Poland', 'Pologne'),
(175, 620, 'PT', 'PRT', 'Portugal', 'Portugal'),
(176, 624, 'GW', 'GNB', 'Guinea-Bissau', 'Guinée-Bissau'),
(177, 626, 'TL', 'TLS', 'Timor-Leste', 'Timor-Leste'),
(178, 630, 'PR', 'PRI', 'Puerto Rico', 'Porto Rico'),
(179, 634, 'QA', 'QAT', 'Qatar', 'Qatar'),
(180, 638, 'RE', 'REU', 'Réunion', 'Réunion'),
(181, 642, 'RO', 'ROU', 'Romania', 'Roumanie'),
(182, 643, 'RU', 'RUS', 'Russian Federation', 'Fédération de Russie'),
(183, 646, 'RW', 'RWA', 'Rwanda', 'Rwanda'),
(184, 654, 'SH', 'SHN', 'Saint Helena', 'Sainte-Hélène'),
(185, 659, 'KN', 'KNA', 'Saint Kitts and Nevis', 'Saint-Kitts-et-Nevis'),
(186, 660, 'AI', 'AIA', 'Anguilla', 'Anguilla'),
(187, 662, 'LC', 'LCA', 'Saint Lucia', 'Sainte-Lucie'),
(188, 666, 'PM', 'SPM', 'Saint-Pierre and Miquelon', 'Saint-Pierre-et-Miquelon'),
(189, 670, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 'Saint-Vincent-et-les Grenadines'),
(190, 674, 'SM', 'SMR', 'San Marino', 'Saint-Marin'),
(191, 678, 'ST', 'STP', 'Sao Tome and Principe', 'Sao Tomé-et-Principe'),
(192, 682, 'SA', 'SAU', 'Saudi Arabia', 'Arabie Saoudite'),
(193, 686, 'SN', 'SEN', 'Senegal', 'Sénégal'),
(194, 690, 'SC', 'SYC', 'Seychelles', 'Seychelles'),
(195, 694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leone'),
(196, 702, 'SG', 'SGP', 'Singapore', 'Singapour'),
(197, 703, 'SK', 'SVK', 'Slovakia', 'Slovaquie'),
(198, 704, 'VN', 'VNM', 'Vietnam', 'Viet Nam'),
(199, 705, 'SI', 'SVN', 'Slovenia', 'Slovénie'),
(200, 706, 'SO', 'SOM', 'Somalia', 'Somalie'),
(201, 710, 'ZA', 'ZAF', 'South Africa', 'Afrique du Sud'),
(202, 716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwe'),
(203, 724, 'ES', 'ESP', 'Spain', 'Espagne'),
(204, 732, 'EH', 'ESH', 'Western Sahara', 'Sahara Occidental'),
(205, 736, 'SD', 'SDN', 'Sudan', 'Soudan'),
(206, 740, 'SR', 'SUR', 'Suriname', 'Suriname'),
(207, 744, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 'Svalbard etÎle Jan Mayen'),
(208, 748, 'SZ', 'SWZ', 'Swaziland', 'Swaziland'),
(209, 752, 'SE', 'SWE', 'Sweden', 'Suède'),
(210, 756, 'CH', 'CHE', 'Switzerland', 'Suisse'),
(211, 760, 'SY', 'SYR', 'Syrian Arab Republic', 'République Arabe Syrienne'),
(212, 762, 'TJ', 'TJK', 'Tajikistan', 'Tadjikistan'),
(213, 764, 'TH', 'THA', 'Thailand', 'Thaïlande'),
(214, 768, 'TG', 'TGO', 'Togo', 'Togo'),
(215, 772, 'TK', 'TKL', 'Tokelau', 'Tokelau'),
(216, 776, 'TO', 'TON', 'Tonga', 'Tonga'),
(217, 780, 'TT', 'TTO', 'Trinidad and Tobago', 'Trinité-et-Tobago'),
(218, 784, 'AE', 'ARE', 'United Arab Emirates', 'Émirats Arabes Unis'),
(219, 788, 'TN', 'TUN', 'Tunisia', 'Tunisie'),
(220, 792, 'TR', 'TUR', 'Turkey', 'Turquie'),
(221, 795, 'TM', 'TKM', 'Turkmenistan', 'Turkménistan'),
(222, 796, 'TC', 'TCA', 'Turks and Caicos Islands', 'Îles Turks et Caïques'),
(223, 798, 'TV', 'TUV', 'Tuvalu', 'Tuvalu'),
(224, 800, 'UG', 'UGA', 'Uganda', 'Ouganda'),
(225, 804, 'UA', 'UKR', 'Ukraine', 'Ukraine'),
(226, 807, 'MK', 'MKD', 'The Former Yugoslav Republic of Macedonia', 'L\'ex-République Yougoslave de Macédoine'),
(227, 818, 'EG', 'EGY', 'Egypt', 'Égypte'),
(228, 826, 'GB', 'GBR', 'United Kingdom', 'Royaume-Uni'),
(229, 833, 'IM', 'IMN', 'Isle of Man', 'Île de Man'),
(230, 834, 'TZ', 'TZA', 'United Republic Of Tanzania', 'République-Unie de Tanzanie'),
(231, 840, 'US', 'USA', 'United States', 'États-Unis'),
(232, 850, 'VI', 'VIR', 'U.S. Virgin Islands', 'Îles Vierges des États-Unis'),
(233, 854, 'BF', 'BFA', 'Burkina Faso', 'Burkina Faso'),
(234, 858, 'UY', 'URY', 'Uruguay', 'Uruguay'),
(235, 860, 'UZ', 'UZB', 'Uzbekistan', 'Ouzbékistan'),
(236, 862, 'VE', 'VEN', 'Venezuela', 'Venezuela'),
(237, 876, 'WF', 'WLF', 'Wallis and Futuna', 'Wallis et Futuna'),
(238, 882, 'WS', 'WSM', 'Samoa', 'Samoa'),
(239, 887, 'YE', 'YEM', 'Yemen', 'Yémen'),
(240, 891, 'CS', 'SCG', 'Serbia and Montenegro', 'Serbie-et-Monténégro'),
(241, 894, 'ZM', 'ZMB', 'Zambia', 'Zambie');

-- --------------------------------------------------------

--
-- Structure de la table `myclean_recherche`
--

CREATE TABLE `myclean_recherche` (
  `id_recherche` int NOT NULL,
  `id_user` int NOT NULL,
  `nom_alerte` varchar(255) NOT NULL,
  `type_annonce` varchar(255) NOT NULL,
  `categorie_annonce` varchar(255) NOT NULL,
  `nbappartement` varchar(2) NOT NULL,
  `nbmaison` varchar(2) NOT NULL,
  `nbparking` varchar(2) NOT NULL,
  `nbbox` varchar(2) NOT NULL,
  `nbloft` varchar(2) NOT NULL,
  `nbatelier` varchar(2) NOT NULL,
  `nbterrain` varchar(2) NOT NULL,
  `nbbatiment` varchar(2) NOT NULL,
  `nbimmeuble` varchar(2) NOT NULL,
  `ville_bien1` varchar(255) NOT NULL,
  `commune_bien1` varchar(255) NOT NULL,
  `zone_bien1` varchar(255) NOT NULL,
  `Libelle1` varchar(255) NOT NULL,
  `ville_bien2` varchar(255) NOT NULL,
  `commune_bien2` varchar(255) NOT NULL,
  `zone_bien2` varchar(255) NOT NULL,
  `Libelle2` varchar(255) NOT NULL,
  `ville_bien3` varchar(255) NOT NULL,
  `commune_bien3` varchar(255) NOT NULL,
  `zone_bien3` varchar(255) NOT NULL,
  `Libelle3` varchar(255) NOT NULL,
  `surface_min_terrain` varchar(255) NOT NULL,
  `surface_max_terrain` varchar(255) NOT NULL,
  `surface_min_bien` varchar(255) NOT NULL,
  `surface_max_bien` varchar(255) NOT NULL,
  `nbpiece_bien` varchar(255) NOT NULL,
  `nbchambre_bien` varchar(255) NOT NULL,
  `budgetmin_bien` varchar(255) NOT NULL,
  `budgetmax_bien` varchar(255) NOT NULL,
  `date_crea_bien` varchar(255) NOT NULL,
  `etat_recherche` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `myclean_reinit`
--

CREATE TABLE `myclean_reinit` (
  `id_reinit` int NOT NULL,
  `token_reinit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_reinit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat_reinit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `myclean_reinit`
--

INSERT INTO `myclean_reinit` (`id_reinit`, `token_reinit`, `date_reinit`, `etat_reinit`, `id_email`) VALUES
(1, 'adf3cdfa8c3336a3c9210f697cf2b8d1b712ee18', '2024-05-09 07:43:21', '0', 'germaintanon@gmail.com'),
(2, 'adf3cdfa8c3336a3c9210f697cf2b8d1b712ee18', '2024-05-09 07:43:25', '0', 'germaintanon@gmail.com'),
(3, 'adf3cdfa8c3336a3c9210f697cf2b8d1b712ee18', '2024-05-10 15:01:00', '0', 'germaintanon@gmail.com'),
(4, '9197', '2024-06-22 17:52:23', '0', 'margaux.morin8@gmail.com'),
(5, '3269', '2024-06-22 18:34:05', '0', 'margaux.morin8@gmail.com'),
(6, 'adf3cdfa8c3336a3c9210f697cf2b8d1b712ee18', '2024-06-25 11:46:10', '0', 'germaintanon@gmail.com'),
(7, 'adf3cdfa8c3336a3c9210f697cf2b8d1b712ee18', '2024-07-08 16:55:56', '0', 'germaintanon@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `myclean_vendeur`
--

CREATE TABLE `myclean_vendeur` (
  `id_vendeur` int NOT NULL,
  `id_pro` varchar(255) NOT NULL,
  `type_vendeur` varchar(255) NOT NULL,
  `mdp_vendeur` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description_vendeur` text NOT NULL,
  `nomsociete1` varchar(255) NOT NULL,
  `statut1` varchar(255) NOT NULL,
  `immatriculation1` varchar(255) NOT NULL,
  `adresse1` varchar(255) NOT NULL,
  `legerant1` varchar(255) NOT NULL,
  `lenom1` varchar(255) NOT NULL,
  `leprenom1` varchar(255) NOT NULL,
  `indicatif` varchar(255) NOT NULL,
  `letelephone1` varchar(255) NOT NULL,
  `lemail1` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `etat_vendeur` int NOT NULL,
  `date_crea_vendeur` varchar(255) NOT NULL,
  `horaires` text NOT NULL,
  `equipes` text NOT NULL,
  `uid1` varchar(255) NOT NULL,
  `nb_unite` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myclean_vendeur`
--

INSERT INTO `myclean_vendeur` (`id_vendeur`, `id_pro`, `type_vendeur`, `mdp_vendeur`, `image`, `description_vendeur`, `nomsociete1`, `statut1`, `immatriculation1`, `adresse1`, `legerant1`, `lenom1`, `leprenom1`, `indicatif`, `letelephone1`, `lemail1`, `latitude`, `longitude`, `etat_vendeur`, `date_crea_vendeur`, `horaires`, `equipes`, `uid1`, `nb_unite`) VALUES
(1, 'LaClef', '1', '12345', 'image_immo/logolaclef.jpg', 'Fournir, exploiter et maintenir notre Site.\n\nAméliorer, personnaliser et élargir notre Site.\n\nComprendre et analyser comment vous utilisez notre Site.\n\nDévelopper de nouveaux produits, services, fonctionnalités et fonctionnalités.', '6plpo', '', 'DEC344', 'Riviera 4', '', '', '', '+225', '3255555', 'info@kota.com', '5.372410', '-3.978520', 1, '2022-10-04 07:43:18', 'Lun au Sam de 08h00 à 17h00', 'Berg Devien Priscilla Sorvino', '', 0),
(2, 'ooop89', '2', '', '', '            We recommend using the framework-specific integrations that Swiper.js provides        ', 'hbhgf hg', 'opop', '1025ml', 'hhhh', 'hhhh', 'hhhh', 'hhhh', '225', '01202555', '2222@jjj.ccc', '1', '1', 1, '2022-10-04 07:43:18', 'Lun au Sam de 08h00 à 17h00', 'Berg Devien Priscilla Sorvino', '', 0),
(4, '123456789', '1', '12345', 'AGENCEIMG_4_B166489A-0181-4CB9-A29D-22B6D3495B26_030920240908021725354483.jpeg', 'We recommend using the framework-specific integrations that Swiper.js provides', 'KOTA', 'SARL', '320ZED', 'Acd', '', '', '', '', '+22514552141', 'kota@gddf.df', '5.350563', '-4.021757', 1, '2022-10-04 07:43:18', 'Lun au Sam de 08h00 à 17h00', 'Berg Devien Priscilla Sorvino', 'b166489a-0181-4cb9-a29d-22b6d3495b26', 127),
(11, '', '1', '12345', 'image_immo/logolaclef.jpg', 'We recommend using the framework-specific integrations that Swiper.js provides', 'gvgc', '', '', '', '', '', '', '', '', '', '5.308591', '-3.990162', 1, '2023-02-21 14:07:16', 'Lun au Sam de 08h00 à 17h00', 'Berg Devien Priscilla Sorvino', '', 0),
(12, '004', '1', '12345', '', '                    ', 'TEST', 'oui', 'AAAA5', 'BBBB', 'CCC', 'DDDD', 'EEEE', '+225', '11111', 'test@gmail.com', '', '', 0, '2023-10-13 15:50:33', 'Lun au Sam de 08h00 à 17h00', 'Berg Devien Priscilla Sorvino', '', 0),
(13, '', '', '', 'image_immo/logolaclef.jpg', '', 'kghjk', 'non', 'hciggiyogigi', 'ckjcvkkggk', 'hghkk', 'ghjj', 'gbjjk', '+33', '0637747587', 'margaux.morin@laclef-immobilier.com', '', '', 0, '2023-10-27 19:40:28', 'Lun au Sam de 08h00 à 17h00', 'Berg Devien Priscilla Sorvino', '', 0),
(14, '', '', '', 'image_immo/logolaclef.jpg', '', 'xcxcx', 'oui', 'cxc', 'xcxc', '', 'cxc', 'xcxcx', '+225', 'xcxcxckkkk', 'xcxcxc@xcxc.xc', '', '', 0, '2023-11-05 17:29:29', '', '', '', 0),
(15, 'LACLEFPRO', '1', '12345', 'image_immo/logolaclef.jpg', '', 'hjjhjh', 'oui', 'hjhjh', 'hjhjh', '', 'hjhjh', 'hjhjj', '+225', '1234567899', 'hjhjh@hjjh.hj', '', '', 0, '2023-11-07 18:25:20', '', '', '', 0),
(16, '55hh', '1', 'lacle123456pro', '', 'ooo                    ', 'ooo', 'ooo', 'ooo', 'ooo', 'ooo', 'ooo', 'ooo', '55', '01222222', 'ooo', '1', '1', 1, '2024-07-22 12:58:15', 'ooo', 'ooo', '', 0),
(17, '', '', '', 'image_immo/logolaclef.jpg', '', 'Abc', 'non', 'zofkrkekfbricicn', 'ndkejefbfkrkgbgn', '', 'mel', 'edwin', '+33', '0637747587', 'mel.morin75@gmail.com', '', '', 0, '2024-08-21 17:57:25', '', '', '', 0),
(18, 'AGENCEX', '1', '12345', 'image_immo/logolaclefA.jpg', '', 'TEST', 'oui', 'DESZZ', 'ZSD', '', 'dfdf', 'dfdff', '+225', '0102010201', 'dfdfd@fgfgf.fg', '', '', 0, '2024-08-28 08:24:05', '', '', 'a899e325-f34d-407b-afe4-76e998758857', 0),
(19, '', '', '', 'image_immo/logolaclef.jpg', '', 'IMMO24', 'oui', 'ZEEESZ', 'xccx', '', 'xcxcx', 'cxcx', '+225', '0102030405', 'xcxc@xcxc.xc', '', '', 0, '2024-08-28 08:33:57', '', '', '152c6055-88c7-4d38-95ea-f7b312b6e883', 0),
(20, '', '', '', 'image_immo/logolaclef.jpg', '', 'IMMOBILIA', 'non', 'vcvcv', 'cvcv', '', 'cvcvc', 'vcvc', '+225', '0102030405', 'vcv@cvcvc.cv', '', '', 0, '2024-08-28 08:43:02', '', '', '105fc74e-1ff3-40a6-b70a-c493fd7555e4', 0),
(21, 'IMMOBILIA', '1', '12345', 'AGENCEIMG_21_AE797AF5-9A41-4D20-922D-B30DD8696AE8_100920240514501725988490.jpeg', '', 'cvccvc', 'non', 'cvcvc', 'cvcvc', '', 'cvcvc', 'vcv', '+225', '0101010101', 'cvcvc@cvcv.cv', '', '', 0, '2024-08-28 08:44:38', '', '', 'ae797af5-9a41-4d20-922d-b30dd8696ae8', 0),
(22, '', '', '', 'AGENCEIMG__3CEF385D-65AA-487D-84DE-B06911BC2132_280820241138081724845089.jpeg', '', 'TEST001', 'oui', 'vcvcv', 'vcvcv', '', 'cvcvcvc', 'cvcvcv', '+225', '00222202', 'vcvcv@cvcvc.cv', '', '', 0, '2024-08-28 11:39:25', '', '', '3cef385d-65aa-487d-84de-b06911bc2132', 0),
(23, '', '', '', 'AGENCEIMG__8B47A122-D526-4693-8A31-1036BEFB7272_280820241143021724845383.jpeg', '', 'cxcxc', 'oui', 'xcxcx', 'xcxcx', '', 'xcxc', 'xcxcx', '+225', '02020', 'cxcx@xcxcx.xc', '', '', 0, '2024-08-28 11:43:50', '', '', '8b47a122-d526-4693-8a31-1036befb7272', 0),
(24, 'SKAN', '1', '12345', 'AGENCEIMG__E2CD9D81-27FB-4812-BA50-E4257370FC89_280820241226101724847971.jpeg', '', 'dfdf', 'oui', 'dfdfdf', 'dfdfd', '', 'dfdf', 'dfdf', '+225', '02010202', 'fdfdf@dfdfd.df', '', '', 1, '2024-08-28 12:26:56', '', '', 'e2cd9d81-27fb-4812-ba50-e4257370fc89', 0),
(25, '', '', '', 'AGENCEIMG__535C4630-EBF6-4526-B457-6762294511DB_300820241056001725015361.jpeg', '', 'cxcxc', 'oui', 'xcxcx', 'xcxcxc', '', 'xcxcxc', 'xcxcx', '+225', 'cxccx', 'cxcxcx@xcxc.xc', '', '', 0, '2024-08-30 10:56:25', '', '', '535c4630-ebf6-4526-b457-6762294511db', 0),
(26, 'TEST001', '1', '12345', 'AGENCEIMG__ADFA4E2B-5ABE-4611-B7A4-B606119012AF_310820240515561725124556.jpeg', '', 'gnhbn', 'non', 'bnbnbn', 'bnbn', '', 'bnbnb', 'nbnbn', '+225', '23323', 'bnbn@bnbn.bn', '', '', 0, '2024-08-31 17:16:15', '', '', 'adfa4e2b-5abe-4611-b7a4-b606119012af', 0),
(27, '', '', '', 'AGENCEIMG__0849020F-2686-41BB-98B9-D2A611E95866_100920240526431725989204.jpeg', '', 'test', 'non', 'hskdkj', 'bwkdkf', '', 'dndnkf', 'xkfkfk', '+225', '166485648', 'kxfkfkfj@gmail.com', '', '', 0, '2024-09-10 17:27:19', '', '', '0849020f-2686-41bb-98b9-d2a611e95866', 0),
(28, '', '', '', 'AGENCEIMG__9D7CB3A0-27F3-40F6-8993-EDFD83A9A527_270920240733501727465630.jpeg', '', 'xcxc', 'oui', 'xcxcx', 'cxcx', '', 'xcc', 'xcxc', '+225', '01222222', 'xcx@dsd.sd', '', '', 0, '2024-09-27 19:34:18', '', '', '9d7cb3a0-27f3-40f6-8993-edfd83a9a527', 0);

-- --------------------------------------------------------

--
-- Structure de la table `myclean_ville`
--

CREATE TABLE `myclean_ville` (
  `id_ville` int NOT NULL,
  `libelle_ville` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myclean_ville`
--

INSERT INTO `myclean_ville` (`id_ville`, `libelle_ville`, `lat`, `long`) VALUES
(1, 'Abidjan', '', ''),
(2, 'Yamoussoukro', '6.828327832827077', '-5.2941827302880995'),
(3, 'Bouaké', '7.689470285288526', '-5.0390168644757924'),
(4, 'Daloa', '', ''),
(5, 'San-Pédro', '', ''),
(6, 'Attiecoubé', '', ''),
(7, 'Korhogo', '', ''),
(8, 'Gagnoa', '', ''),
(9, 'Soubré', '', ''),
(10, 'Oumé', '', ''),
(11, 'Man', '', ''),
(12, 'Duekoué', '', ''),
(13, 'Bingerville', '', ''),
(14, 'Divo', '', ''),
(15, 'Abengourou', '', ''),
(16, 'Ferkessédougou', '', ''),
(17, 'Adzopé', '', ''),
(18, 'Bondoukou', '', ''),
(19, 'Dabou', '', ''),
(20, 'Agboville', '', ''),
(21, 'Séguéla', '', ''),
(22, 'Daoukro', '', ''),
(23, 'Aboisso', '', ''),
(24, 'Odienné', '', ''),
(25, 'Grand-Bassam', '', ''),
(26, 'Dimbokro', '', ''),
(27, 'Bangolo', '', ''),
(28, 'Anyama', '', ''),
(29, 'Méagui', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `myclean_web_type`
--

CREATE TABLE `myclean_web_type` (
  `id_type` int NOT NULL,
  `lib_typ` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `myclean_web_type`
--

INSERT INTO `myclean_web_type` (`id_type`, `lib_typ`) VALUES
(1, 'Administrateur'),
(2, 'Editeur'),
(3, 'Financier');

-- --------------------------------------------------------

--
-- Structure de la table `myclean_web_user`
--

CREATE TABLE `myclean_web_user` (
  `id_user` int NOT NULL,
  `nom_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `login_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mdp_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `etat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `myclean_web_user`
--

INSERT INTO `myclean_web_user` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `login_user`, `mdp_user`, `type_user`, `etat`) VALUES
(1, 'TANON', 'Germain', 'gertan', 'gertan', '12345', 'Administrateur', 'Valide');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `myclean_admin`
--
ALTER TABLE `myclean_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `myclean_adresse`
--
ALTER TABLE `myclean_adresse`
  ADD PRIMARY KEY (`id_adresse`);

--
-- Index pour la table `myclean_categorie`
--
ALTER TABLE `myclean_categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `myclean_categorie1`
--
ALTER TABLE `myclean_categorie1`
  ADD PRIMARY KEY (`id_categorie1`);

--
-- Index pour la table `myclean_categorie_client`
--
ALTER TABLE `myclean_categorie_client`
  ADD PRIMARY KEY (`id_categorie_client`);

--
-- Index pour la table `myclean_categorie_service`
--
ALTER TABLE `myclean_categorie_service`
  ADD PRIMARY KEY (`id_categorie_service`);

--
-- Index pour la table `myclean_categorie_service_liste`
--
ALTER TABLE `myclean_categorie_service_liste`
  ADD PRIMARY KEY (`id_categorie_service_liste`);

--
-- Index pour la table `myclean_client`
--
ALTER TABLE `myclean_client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `myclean_commune`
--
ALTER TABLE `myclean_commune`
  ADD PRIMARY KEY (`id_commune`);

--
-- Index pour la table `myclean_equipement`
--
ALTER TABLE `myclean_equipement`
  ADD PRIMARY KEY (`id_equipement`);

--
-- Index pour la table `myclean_favoris`
--
ALTER TABLE `myclean_favoris`
  ADD PRIMARY KEY (`id_favoris`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `myclean_image_annonce`
--
ALTER TABLE `myclean_image_annonce`
  ADD PRIMARY KEY (`id_image_annonce`);

--
-- Index pour la table `myclean_liste_indicateur`
--
ALTER TABLE `myclean_liste_indicateur`
  ADD PRIMARY KEY (`id_indic`);

--
-- Index pour la table `myclean_msg_contacts`
--
ALTER TABLE `myclean_msg_contacts`
  ADD PRIMARY KEY (`id_contacts`);

--
-- Index pour la table `myclean_paiement`
--
ALTER TABLE `myclean_paiement`
  ADD PRIMARY KEY (`id_paiement`);

--
-- Index pour la table `myclean_paiement_log`
--
ALTER TABLE `myclean_paiement_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Index pour la table `myclean_pays`
--
ALTER TABLE `myclean_pays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alpha2` (`alpha2`),
  ADD UNIQUE KEY `alpha3` (`alpha3`),
  ADD UNIQUE KEY `code_unique` (`code`);

--
-- Index pour la table `myclean_recherche`
--
ALTER TABLE `myclean_recherche`
  ADD PRIMARY KEY (`id_recherche`);

--
-- Index pour la table `myclean_reinit`
--
ALTER TABLE `myclean_reinit`
  ADD PRIMARY KEY (`id_reinit`);

--
-- Index pour la table `myclean_vendeur`
--
ALTER TABLE `myclean_vendeur`
  ADD PRIMARY KEY (`id_vendeur`);

--
-- Index pour la table `myclean_ville`
--
ALTER TABLE `myclean_ville`
  ADD PRIMARY KEY (`id_ville`);

--
-- Index pour la table `myclean_web_type`
--
ALTER TABLE `myclean_web_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `myclean_web_user`
--
ALTER TABLE `myclean_web_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `myclean_admin`
--
ALTER TABLE `myclean_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `myclean_adresse`
--
ALTER TABLE `myclean_adresse`
  MODIFY `id_adresse` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `myclean_categorie`
--
ALTER TABLE `myclean_categorie`
  MODIFY `id_categorie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `myclean_categorie1`
--
ALTER TABLE `myclean_categorie1`
  MODIFY `id_categorie1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `myclean_categorie_client`
--
ALTER TABLE `myclean_categorie_client`
  MODIFY `id_categorie_client` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `myclean_categorie_service`
--
ALTER TABLE `myclean_categorie_service`
  MODIFY `id_categorie_service` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `myclean_categorie_service_liste`
--
ALTER TABLE `myclean_categorie_service_liste`
  MODIFY `id_categorie_service_liste` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT pour la table `myclean_client`
--
ALTER TABLE `myclean_client`
  MODIFY `id_client` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `myclean_commune`
--
ALTER TABLE `myclean_commune`
  MODIFY `id_commune` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `myclean_equipement`
--
ALTER TABLE `myclean_equipement`
  MODIFY `id_equipement` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `myclean_favoris`
--
ALTER TABLE `myclean_favoris`
  MODIFY `id_favoris` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `myclean_image_annonce`
--
ALTER TABLE `myclean_image_annonce`
  MODIFY `id_image_annonce` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `myclean_liste_indicateur`
--
ALTER TABLE `myclean_liste_indicateur`
  MODIFY `id_indic` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT pour la table `myclean_msg_contacts`
--
ALTER TABLE `myclean_msg_contacts`
  MODIFY `id_contacts` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `myclean_paiement`
--
ALTER TABLE `myclean_paiement`
  MODIFY `id_paiement` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `myclean_paiement_log`
--
ALTER TABLE `myclean_paiement_log`
  MODIFY `id_log` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `myclean_pays`
--
ALTER TABLE `myclean_pays`
  MODIFY `id` smallint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT pour la table `myclean_recherche`
--
ALTER TABLE `myclean_recherche`
  MODIFY `id_recherche` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `myclean_reinit`
--
ALTER TABLE `myclean_reinit`
  MODIFY `id_reinit` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `myclean_vendeur`
--
ALTER TABLE `myclean_vendeur`
  MODIFY `id_vendeur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `myclean_ville`
--
ALTER TABLE `myclean_ville`
  MODIFY `id_ville` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `myclean_web_type`
--
ALTER TABLE `myclean_web_type`
  MODIFY `id_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `myclean_web_user`
--
ALTER TABLE `myclean_web_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
