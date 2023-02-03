-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 31 jan. 2023 à 13:56
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
-- Base de données : `projetbank`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `currency_id` int(255) NOT NULL,
  `balance` int(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`id`, `currency_id`, `balance`, `user_id`) VALUES
(1, 5, 2001, 7),
(2, 5, 500, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `fullname`, `phone`, `email`, `message`, `created_at`) VALUES
(1, 'Mounir', '077277272', 'test@test.com', 'hello', '2023-01-09 16:22:55'),
(2, 'MATHEO GUILLEMIN', '0698899898', 'matheo@gmail.com', 'COUCOU REPOND ENFOIRÉ', '2023-01-11 16:21:15'),
(3, 'bastien b', '0656345623', 'bastien@gmail.com', 'coucouuuuuu', '2023-01-13 14:26:20'),
(4, 'ggggdgdg', 'hdhgdhgdhgdh', 'matheo@gmail.com', 'tessttttttt', '2023-01-13 15:54:50');

-- --------------------------------------------------------

--
-- Structure de la table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `name_currency` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `currency`
--

INSERT INTO `currency` (`id`, `name_currency`) VALUES
(1, 'Dollar americain'),
(3, 'Bitcoin'),
(5, 'Euro');

-- --------------------------------------------------------

--
-- Structure de la table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_account_user` int(11) NOT NULL,
  `deposit_value` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `user_id_1` int(11) NOT NULL,
  `user_id_2` int(11) NOT NULL,
  `account_user_1` int(11) NOT NULL,
  `account_user_2` int(11) NOT NULL,
  `somme_trans` float NOT NULL,
  `date_trans` datetime NOT NULL,
  `currency_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `password`, `role`, `created_at`, `last_ip`) VALUES
(1, 'matheo guillemin', 'matheo@gmail.com', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9', 1000, '2023-01-12 10:05:04', ''),
(2, 'MATHEO GUILLEMIN', 'matheoprofessionnel12@gmail.com', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9', 200, '2023-01-12 16:27:29', '::1'),
(7, 'bastien', 'bastien@gmail.com', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9', 10, '2023-01-13 14:08:06', '::1'),
(8, 'bastien test', 'bastientest@gmail.com', 'ccadd99b16cd3d200c22d6db45d8b6630ef3d936767127347ec8a76ab992c2ea', 10, '2023-01-13 14:23:32', '::1'),
(9, 'julien', 'julien@gmail.com', 'f6cfe289bbfa10e1fa917b9d1a8ef547f3373e0b8e23b16446500d7c157bb0ed', 200, '2023-01-13 14:33:28', '::1'),
(10, 'babouche', 'babouche@gmail.com', '83d4ad5fadef0c09a92801908e95e33b003e41ef6b1b8f7415522f26c26800a2', 200, '2023-01-13 14:44:40', '::1'),
(11, 'bouard bastien', 'tempo@gmail.com', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9', 10, '2023-01-13 15:53:37', '::1');

-- --------------------------------------------------------

--
-- Structure de la table `Withdraw`
--

CREATE TABLE `Withdraw` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_account_user` int(11) NOT NULL,
  `withdraw_value` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dev/somme` (`currency_id`),
  ADD KEY `user/account` (`user_id`);

--
-- Index pour la table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_of_deposit` (`id_user`),
  ADD KEY `id_account_of_user_deposit` (`id_account_user`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user1` (`user_id_1`),
  ADD KEY `user2` (`user_id_2`),
  ADD KEY `id_account_user1` (`account_user_1`),
  ADD KEY `id_account_user2` (`account_user_2`),
  ADD KEY `currency` (`currency_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Withdraw`
--
ALTER TABLE `Withdraw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_of_withdraw` (`id_user`),
  ADD KEY `id_account_of_user_withdraw` (`id_account_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `Withdraw`
--
ALTER TABLE `Withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `currency_of_account` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`id`),
  ADD CONSTRAINT `user_of_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `deposit`
--
ALTER TABLE `deposit`
  ADD CONSTRAINT `id_account_of_user_deposit` FOREIGN KEY (`id_account_user`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `id_user_of_deposit` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `currency` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`id`),
  ADD CONSTRAINT `id_account_user1` FOREIGN KEY (`account_user_1`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `id_account_user2` FOREIGN KEY (`account_user_2`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `id_user1` FOREIGN KEY (`user_id_1`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `id_user2` FOREIGN KEY (`user_id_2`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `Withdraw`
--
ALTER TABLE `Withdraw`
  ADD CONSTRAINT `id_account_of_user_withdraw` FOREIGN KEY (`id_account_user`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `id_user_of_withdraw` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
