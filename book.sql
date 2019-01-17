-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 17 Janvier 2019 à 14:26
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.2.13-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `book`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `mail` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `mail`, `pass`) VALUES
(8, 'Paul', 'decouxpaul@gmail.com', '$2y$10$g4CXqTyOOfiyc2Ab9Icd/eXczefozAZCbaZ2y83HGWH3bxlzqEdnO'),
(9, 'mama', 'decouxpaul1@gmail.com', '$2y$10$XfQjf6xNvqZoU5VKttEPwuP6GaidJ0GFH7J6e8pcwNFA.jdONQDAC');

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id_books` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `resume` text NOT NULL,
  `picture_id` int(11) NOT NULL,
  `books_categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `books`
--

INSERT INTO `books` (`id_books`, `title`, `author`, `date`, `resume`, `picture_id`, `books_categorie_id`) VALUES
(20, 'Les MisÃ©rables', 'Victor Hugo', '2019-01-03', 'Valjean, lâ€™ancien forÃ§at devenu bourgeois et protecteur des faibles ; Fantine, lâ€™ouvriÃ¨re Ã©crasÃ©e par sa condition ; le couple ThÃ©nardier, figure du mal et de lâ€™opportunisme ; Marius, lâ€™Ã©tudiant idÃ©aliste ; Gavroche, le gamin des rues impertinent qui meurt sur les barricades ; Javert, la fatalitÃ© imposÃ©e par la sociÃ©tÃ© sous les traits dâ€™un policier vengeurâ€¦ Et, bien sÃ»r, Cosette, lâ€™enfant victime. VoilÃ  comment une Å“uvre immense incarne son siÃ¨cle en quelques destins exemplaires, figures devenues mythiques qui continuent de susciter une multitude dâ€™adaptations. ', 86, 51);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `categorie`) VALUES
(50, 'Roman'),
(51, 'Roman');

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id_picture` int(11) NOT NULL,
  `picture` text NOT NULL,
  `alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pictures`
--

INSERT INTO `pictures` (`id_picture`, `picture`, `alt`) VALUES
(85, 'Les-Miserables.jpg', 'Les-Miserables.jpg'),
(86, 'Les-Miserables.jpg', 'Les-Miserables.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `identifiant` varchar(10) NOT NULL,
  `id_book_borrow` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `name`, `firstname`, `identifiant`, `id_book_borrow`) VALUES
(4, 'Paul', 'Decoux', 'd771a672', 20),
(5, 'Thierry', 'Van-Hecke', 'a74b8186', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_books`),
  ADD KEY `picture_id` (`picture_id`),
  ADD KEY `categorie_id` (`books_categorie_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id_picture`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id_books` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id_picture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`picture_id`) REFERENCES `pictures` (`id_picture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`books_categorie_id`) REFERENCES `categorie` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
