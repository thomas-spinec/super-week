-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 05 mai 2023 à 16:28
-- Version du serveur : 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `super-week`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `title`, `content`, `id_user`) VALUES
(5, 'Le Petit Prince', 'Un pilote d\'avion s\'écrase dans le désert du Sahara et rencontre un petit prince venu d\'une autre planète. Ensemble, ils découvrent les mystères de l\'univers et de la vie.', 6),
(1, 'Les Misérables', 'Dans une France du XIXe siècle, Jean Valjean est condamné à 19 ans de travaux forcés pour avoir volé du pain. Après sa libération, il change d\'identité et de vie pour échapper à son passé.', 2),
(2, 'Le Comte de Monte-Cristo', 'Edmond Dantès est emprisonné à tort au Château d\'If pour être remplacé par son rival. Après avoir rencontré l\'abbé Faria, il s\'échappe et trouve un trésor sur l\'île de Monte-Cristo. De retour à Paris, il se venge de ses ennemis.', 3),
(3, 'Orgueil et Préjugés', 'Dans l\'Angleterre du XVIIIe siècle, Elizabeth Bennet est la deuxième des cinq filles d\'une famille modeste. Lorsqu\'elle rencontre M. Darcy, elle est convaincue qu\'il est arrogant et orgueilleux, mais finit par découvrir qu\'il est en réalité un homme bienveillant.', 1),
(6, '1984', 'Dans un monde totalitaire, Winston Smith travaille pour le Parti et tombe amoureux de Julia. Mais leur amour est interdit et leur quête de liberté les mène à une fin tragique.', 12),
(4, 'Guerre et paix', 'Dans la Russie du XIXe siècle, Pierre Bezoukhov et Natacha Rostova naviguent à travers les guerres napoléoniennes et les bouleversements sociaux de leur époque, tout en cherchant leur place dans le monde.', 5),
(9, 'Le Parfum', 'Jean-Baptiste Grenouille est un jeune homme né sans odeur. Il développe un don extraordinaire pour la création de parfums, mais pour cela, il doit tuer de jeunes femmes pour en extraire l\'essence de leur odeur.', 20),
(10, 'Les fourmis', 'Dans la forêt amazonienne, un entomologiste français découvre une civilisation de fourmis très organisée. Il se trouve alors entraîné dans une aventure incroyable qui remet en question sa vision du monde.', 17),
(11, 'Le Seigneur des Anneaux', 'Dans un monde fantastique, Frodon Sacquet se lance dans une quête pour détruire l\'Anneau de Puissance et vaincre le Seigneur des Ténèbres, Sauron. Il est aidé par une communauté d\'alliés, chacun avec ses propres pouvoirs et faiblesses.', 9),
(12, 'La métamorphose', 'Gregor Samsa se réveille un jour transformé en un insecte géant. Sa famille, horrifiée, le rejette peu à peu jusqu\'à ce qu\'il meure seul et abandonné.', 15),
(13, 'Ping-pong', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque accumsan tellus sit amet condimentum tempor. Morbi ut hendrerit dolor. Nam tempor, dolor non hendrerit pulvinar, augue purus ornare lorem, sit amet aliquet eros leo quis purus. Proin viverra nisi risus, nec elementum urna luctus eu. Nam vitae sollicitudin lectus, vitae viverra libero. Suspendisse nec ex elit. Sed venenatis at turpis in vehicula. Integer id libero eget dolor laoreet consectetur eu nec arcu. Donec tortor turpis, tincidunt vitae mi nec, sodales volutpat nibh. Quisque sed lorem egestas, efficitur velit a, vehicula sapien. Donec tincidunt lobortis efficitur.\r\n\r\nVestibulum varius est molestie sem mollis cursus. Duis eu consequat ante, eu vehicula tellus. Nullam laoreet diam eget congue condimentum. Nunc consectetur mi et cursus elementum. Vestibulum a lorem enim. Donec eu ante risus. Maecenas id augue mattis, porta odio eget, varius nunc. In tempus molestie quam ut maximus. In tincidunt rhoncus ante, ut porta ex viverra a. Mauris gravida auctor arcu, in lobortis justo convallis in. Nam euismod felis vitae dolor sodales, a lobortis ipsum ullamcorper. Cras egestas turpis id fermentum vestibulum. Donec vitae placerat elit. Etiam tempor urna ac vehicula imperdiet. Etiam varius enim arcu, nec lacinia tortor sollicitudin ultricies. Nulla sed justo ex.\r\n\r\nCurabitur gravida, lectus ac molestie maximus, tortor metus hendrerit tellus, id bibendum lorem eros id nisi. Duis consequat purus lorem, et fringilla felis consequat pretium. Donec nibh elit, posuere non viverra eget, suscipit non ligula. Ut nibh tellus, pellentesque quis laoreet eget, porttitor vel urna. In pellentesque dolor vestibulum, accumsan mi vitae, tincidunt magna. Sed eget lorem sit amet nibh dignissim aliquam nec vitae odio. Mauris sed varius massa. Ut pharetra augue arcu.', 21),
(14, 'Les aventures de Wolweroux', 'C&#039;est l&#039;histoire d&#039;un roux du clan des roukmouth. Son surnom ? Wolweroux, il le tire de sa capillarité flamboyante, ainsi que de ses ongles trop long, mais toujours nickel, jamais sale.\r\nUn jour, il décida de conquérir l&#039;IT. Il rencontra un chinois, ainsi que la personne qui deviendra son mentor, Thomas AKA Thomaster AKA El Grande (pour le marché mexicain). \r\nSuite au prochain épisode (vous découvrirez son intimité)', 21);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `first_name`, `last_name`, `password`) VALUES
(1, 'yoshiko.fay@yahoo.com', 'Yoshiko', 'Fay', '$2y$10$xI4T3eLReJrYoJJi0WBV5.6xrhECp.4tOt9urpm7qkUsdiipQTsES'),
(2, 'yesenia.glover@yahoo.com', 'Yesenia', 'Glover', '$2y$10$NCzlIqlSiwH9b2QcTTxN3OT82V63lTBEcFXKDojz.jeEimq7oCXcK'),
(3, 'myrtice.dach@gmail.com', 'Myrtice', 'Dach', '$2y$10$qbXCgNS6LQpVEuNVrXb1iu.UIlYm38YPfqYmcoAjEc4gKczjayvFO'),
(4, 'queen.vonrueden@hotmail.com', 'Queen', 'VonRueden', '$2y$10$ArvPUkz4aPSZq0Z8iRrtru2FDwSsZFNwPPlc8qN6BaLFC.Mbf8tLa'),
(5, 'freddy.schamberger@gmail.com', 'Freddy', 'Schamberger', '$2y$10$h1ey.TjBQPOPK3iaeEw2B.pwpZke5noUbA68NFtGkorm0J4yOaawm'),
(6, 'kaden.rau@yahoo.com', 'Kaden', 'Rau', '$2y$10$FSCBJIjSJ0gJfV6S/3Qibe29YAqJcP7L64PZ5v1Lh.uPTy/7MbSTu'),
(7, 'wilburn.fadel@yahoo.com', 'Wilburn', 'Fadel', '$2y$10$9qvxoyOnRsiTKoW.vmZ5i.4fBPDnP3zZ8DvEhKd2YbmjcqoiZqn.G'),
(8, 'margaret.corwin@hotmail.com', 'Margaret', 'Corwin', '$2y$10$/4KhuCnBnp5mj0eG0vv7eOISHd4zM1jnDQ0EAx.p1hru18YlXTicy'),
(9, 'jennings.sanford@yahoo.com', 'Jennings', 'Sanford', '$2y$10$rMeVlzRCUelET99GpRxxUusQo8ZmtTBUaSWUmyyQ6pVZpr489n9l6'),
(10, 'kiana.dickens@gmail.com', 'Kiana', 'Dickens', '$2y$10$dyARJnCP6tlt3ckCBsJr0OmNa.35tjSDFCEra6ooBh0cOtHlpGJr2'),
(11, 'herminia.cremin@gmail.com', 'Herminia', 'Cremin', '$2y$10$maLZM6TuDFUkihRNh0tMIeDs/w7ymG5qrojdt9P8ivpZ4nGu4AHfe'),
(12, 'luna.stanton@hotmail.com', 'Luna', 'Stanton', '$2y$10$Is/Sc1i/ipNtC2E8AAAmEeiitaNfJLmXaysQiz5TatdWQhrQSPPMi'),
(13, 'ora.bogan@yahoo.com', 'Ora', 'Bogan', '$2y$10$xCXNLgv270wXL/zrHCN4WORI4IWLDHuTQn6dnrH/b4WUJIbaTdP/e'),
(14, 'myra.kshlerin@yahoo.com', 'Myra', 'Kshlerin', '$2y$10$04xUZBzA2X.65Sd0PmVGrOwxXmpTle6zoeEuVLkCzqwGIs3BERMRG'),
(15, 'justine.hettinger@yahoo.com', 'Justine', 'Hettinger', '$2y$10$UriZcKPMCHuVfbPzlugcWen0DA7QQi6WxzHX2mL5xF0tfBESt79zq'),
(16, 'donnie.bernhard@hotmail.com', 'Donnie', 'Bernhard', '$2y$10$AASZfvwB2JCjfk0/HYkikut9oDH.y8SLIF9P71uzEQ6IEF0WW8Fo2'),
(17, 'teagan.willms@gmail.com', 'Teagan', 'Willms', '$2y$10$YwupzEwtyrgzEHG9UXj28uQ17dRO95SdtwHNFI4qaZNqaSUVRLfwe'),
(18, 'cody.hoeger@hotmail.com', 'Cody', 'Hoeger', '$2y$10$soYHM9rrBqpzGQHZV10EJ.Cw1QdtryjpMwYVcnivVcA7fKWt4i.Oa'),
(19, 'kennith.mosciski@hotmail.com', 'Kennith', 'Mosciski', '$2y$10$VBrR.pIb9/FsXiY.jDNvD.biJM.tpM/nalyta80OgtRHYPoIiUiQm'),
(20, 'forrest.friesen@hotmail.com', 'Forrest', 'Friesen', '$2y$10$K79MG44Oc3lJ.fgVg8uVm..jkqq5lOzJ9yGbnPrQXCHT5B93YKtRy'),
(21, 'test@email.com', 'Thomas', 'Spinec', '$2y$10$tof2qPJVJq5PAI/K0St0We8Vz1BJObLSNBqzQZ71m9B1yeQdxdTAy'),
(22, 'admin@admin.com', 'admin', 'admin', '$2y$10$qGNC/FCPIfL3LMP2Bo6pqeEUtP6SgPN9WRNDEuOw0ANgvgc5iR/AK'),
(23, 'jerem.nowak@test.com', 'Jerem', 'Nowak', '$2y$10$50YPVaHb00UP1.Onknv3x.3/zEhxR/J5EN.WQSalNjWCqSUttzrNG'),
(24, 'nadia.hazem@test.com', 'nadia', 'hazem', '$2y$10$uLmQNo.7XpbEZmdiCHjMEe4COX/1/Pzbe8.jRDCaCq7/lRYvTIwVC');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
