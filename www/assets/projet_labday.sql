-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 31 jan. 2023 à 15:45
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_labday`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration_docs`
--

CREATE TABLE `administration_docs` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_file` varchar(100) NOT NULL,
  `type_of_file` varchar(11) NOT NULL,
  `description_file` varchar(255) NOT NULL,
  `date_insert_file` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `expediteur` varchar(50) NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `contenu_message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etudes_docs`
--

CREATE TABLE `etudes_docs` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_file` varchar(100) NOT NULL,
  `type_file` varchar(15) NOT NULL,
  `description_file` mediumtext NOT NULL,
  `date_insert_file` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `judiciaire_form`
--

CREATE TABLE `judiciaire_form` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_file` varchar(100) NOT NULL,
  `type_of_file` varchar(11) NOT NULL,
  `description_file` varchar(255) NOT NULL,
  `date_insert_file` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `soins_docs`
--

CREATE TABLE `soins_docs` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_file` int(100) NOT NULL,
  `type_of_file` varchar(11) NOT NULL,
  `description_file` varchar(255) NOT NULL,
  `date_insert_file` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `deuxieme_prenom` varchar(15) NOT NULL,
  `role` int(11) NOT NULL,
  `adresse_domicile` varchar(11) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `telephone` int(12) NOT NULL,
  `status_marital` int(3) NOT NULL,
  `status_vital` int(1) NOT NULL,
  `numero_secu_social` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administration_docs`
--
ALTER TABLE `administration_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_form_administration` (`id_user`);

--
-- Index pour la table `etudes_docs`
--
ALTER TABLE `etudes_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_form_etudes` (`id_user`);

--
-- Index pour la table `judiciaire_form`
--
ALTER TABLE `judiciaire_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_form_judic` (`id_user`);

--
-- Index pour la table `soins_docs`
--
ALTER TABLE `soins_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_form_soins` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administration_docs`
--
ALTER TABLE `administration_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudes_docs`
--
ALTER TABLE `etudes_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `judiciaire_form`
--
ALTER TABLE `judiciaire_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `soins_docs`
--
ALTER TABLE `soins_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administration_docs`
--
ALTER TABLE `administration_docs`
  ADD CONSTRAINT `user_id_form_administration` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `etudes_docs`
--
ALTER TABLE `etudes_docs`
  ADD CONSTRAINT `user_id_form_etudes` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `judiciaire_form`
--
ALTER TABLE `judiciaire_form`
  ADD CONSTRAINT `user_id_form_judic` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `soins_docs`
--
ALTER TABLE `soins_docs`
  ADD CONSTRAINT `user_id_form_soins` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
