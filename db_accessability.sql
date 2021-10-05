-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 05 oct. 2021 à 08:01
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `accessability`
--

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_text` text NOT NULL,
  `course_video` varchar(255) NOT NULL,
  `course_img` varchar(255) NOT NULL,
  `course_audio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_lastname` varchar(100) NOT NULL,
  `user_firstname` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '1',
  `user_fontfamily` varchar(100) NOT NULL,
  `user_fontsize` int(3) NOT NULL,
  `user_fontcolor` varchar(7) NOT NULL,
  `user_eltcolor_1` varchar(7) NOT NULL,
  `user_eltcolor_2` varchar(7) NOT NULL,
  `user_eltcolor_3` varchar(7) NOT NULL,
  `user_bgcolor` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_lastname`, `user_firstname`, `user_email`, `user_password`, `user_role`, `user_fontfamily`, `user_fontsize`, `user_fontcolor`, `user_eltcolor_1`, `user_eltcolor_2`, `user_eltcolor_3`, `user_bgcolor`) VALUES
(5, '', '', 'test@test.com', '$2y$10$7wM3ESwbKryO570D0/NSju3mttXo5yS/47Om4gZ0jVcim6I2DIk6i', 1, '', 0, '', '', '', '', ''),
(6, '', '', 'user@user.com', '$2y$10$.5m4uWqdUn5nUh8kUnGy7esiRUX4K.b4nh3.7JJ211kT8f4H/.xna', 1, '', 0, '', '', '', '', ''),
(8, '', '', 'aaaa@aaaa.com', '$2y$10$cNT2Z07V/swhoCquvee.ze7mg6.tx/rlHu3FK7swQWqM2dASOMNH2', 1, '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users_courses`
--

CREATE TABLE `users_courses` (
  `user_course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `users_courses`
--
ALTER TABLE `users_courses`
  ADD PRIMARY KEY (`user_course_id`),
  ADD KEY `constraint_user_id` (`user_id`) USING BTREE,
  ADD KEY `constraint_course_id` (`course_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users_courses`
--
ALTER TABLE `users_courses`
  MODIFY `user_course_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users_courses`
--
ALTER TABLE `users_courses`
  ADD CONSTRAINT `constraint_course_id` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `constraint_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
