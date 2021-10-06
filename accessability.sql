-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 06 oct. 2021 à 08:53
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `accessability`
--

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(255) NOT NULL,
  `course_subtitle_1` varchar(255) NOT NULL,
  `course_subtitle_2` varchar(255) NOT NULL,
  `course_subtitle_audio` varchar(255) NOT NULL,
  `course_img_principal` varchar(255) NOT NULL,
  `course_text` text NOT NULL,
  `course_text_2` text NOT NULL,
  `course_video` varchar(255) NOT NULL,
  `course_img_inside` varchar(255) NOT NULL,
  `course_audio` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`course_id`, `course_title`, `course_subtitle_1`, `course_subtitle_2`, `course_subtitle_audio`, `course_img_principal`, `course_text`, `course_text_2`, `course_video`, `course_img_inside`, `course_audio`) VALUES
(1, 'Découvrez le fonctionnement des algorithmes', 'Notre algorithme', 'Le vote par jugement majoritaire', 'Lien vers le podcast', 'algorithme.jpg', 'Que l’on soit en période électorale ou pas, il arrive très souvent que les gens disent : \"Je ne me sens pas représenté·e par les politiques.\" Il est vrai que la question de la représentativité du vote interroge. Rassurez-vous, je ne vais pas faire un cours de politique ici. Ce n’est ni le sujet ni l’endroit ! Mais je vais faire appel à vos vieux souvenirs.\r\n\r\nRappelez-vous... Quelque part dans la classe d’Éducation civique, vous fixez le ou la professeur qui essaie de vous expliquer comment le président de la République est élu. Selon le mode de scrutin majoritaire à deux tours (en entendant cette expression, vous avez d’ailleurs sombré dans un profond coma), chaque électeur reçoit plusieurs papiers contenant le nom des candidats. Il donne sa voix à un candidat en glissant le nom de ce dernier dans l’urne – \"A voté !\" Le ou la gagnant·e est celui ou celle qui remporte le maximum de voix.\r\n\r\nSimple comme bonjour.\r\n\r\nNous pensons qu’il n’existe que le système électoral actuel, c’est-à-dire le mode de scrutin majoritaire à deux tours. Mais est-ce vraiment le cas ? Des chercheurs se sont penchés sur la question et ont proposé de nombreuses solutions alternatives. Dans ce cours, nous allons nous centrer sur le \"vote par jugement majoritaire\". Nous commencerons par en analyser les différentes règles, puis nous écrirons l’algorithme correspondant.\r\n\r\nJe sens que cette perspective vous remplit de joie, que dis-je, de bonheur absolu ! Vous avez bien raison. Un bonheur n’arrivant jamais seul, laissez-moi vous présenter les candidats qui vont s’affronter pour diriger le pays !\r\n\r\nHermione Granger, \"La magie du changement\"\r\n\r\nBalou, \"Il en faut peu pour être heureux\"\r\n\r\nChuck Norris, \"Je vous offre l’infini. Deux fois.\"\r\n\r\nElsa d’Arendelle (La Reine des Neiges), \"La France délivrée\"\r\n\r\nGandalf, \"Banquiers, vous ne passerez pas !\"\r\n\r\nBeyoncé, \"Who runs the world? YOU!\"\r\n\r\n', 'Vous rêvez de découvrir la ou le candidat·e qui sera élu·e ? Moi aussi ! Mais commençons par approfondir le mode de scrutin par vote majoritaire.\r\n\r\n\r\nIl s’agit d’un mode de scrutin inventé par deux chercheurs français (cocorico !), Rida Laraki et Michel Balinski. Chaque électeur attribue une mention à chaque candidat·e qui évalue entre \"À rejeter\" et \"Excellent\" sa capacité à exercer la fonction convoitée. Le candidat ou la candidate qui a la meilleure mention médiane est élu·e.\r\n\r\nJetez un œil à leur site web, dédié aux élections de 2017, ou à cette vidéo de Science étonnante qui vous expliquera tout ! \r\nIl ne s’agit pas d’une toute nouvelle théorie. Slate.fr a d’ailleurs testé cette méthode pendant l’élection présidentielle de 2012. \r\n\r\nOrganisation du cours\r\nCe cours vous apprendra les concepts principaux nécessaires pour réaliser notre algorithme. Mais, s’agissant d’un univers extrêmement vaste, il ne couvre pas l’intégralité des notions d’algorithmique. Il vous permettra de découvrir ce sujet à petits pas et de manière ludique.\r\n\r\nAvant tout, sachez que j’utiliserai peu les mathématiques, car je veux que vous compreniez bien tous les concepts essentiels. Mais il s’agit là d’une importante limitation : quand vous aurez terminé mon cours, vous en saurez bien plus sur les grands thèmes de l’algorithmique, vous saurez penser et décomposer un programme, mais vous ne saurez pas résoudre des problèmes complexes qui requièrent un peu plus de maths.\r\n\r\nQu’à cela ne tienne, nous avons déjà matière à réfléchir ! Nous verrons ensemble comment résoudre un problème en le décomposant, les différents types de données et comment les traiter. Le dernier chapitre de ce cours intègre de nombreuses ressources qui vous permettront d’approfondir votre apprentissage.', 'https://youtu.be/tbmKIErjnns', 'code.png', 'https://media.radiofrance-podcast.net/podcast09/18755-06.05.2019-ITEMA_22054197-1.mp3'),
(2, 'Créez des sites web responsive avec Bootstrap', 'Vous voulez créer des sites web riches en fonctionnalités ?', 'Objectifs d\'apprentissage', 'Lien vers le Podcast', 'bootstrap.png', 'Vous voulez créer des sites web riches en fonctionnalités, en développant des prototypes avec la capacité de personnaliser entièrement la conception et les fonctionnalités du produit fini ?\r\n\r\nDans ce cours, vous créerez des pages web à l\'aide de Bootstrap 4 et sa bibliothèque de composants. Vous rendrez ces pages réactives à l\'aide de la grille flexible de Bootstrap et vous les façonnerez grâce à sa gamme complète d\'utilitaires mise à disposition.\r\n\r\nVous apprendrez également à personnaliser la conception et les fonctionnalités afin de créer un thème customisable à votre image.\r\n\r\nÀ la fin de ce cours, vous aurez créé l’intégralité du front-end d\'un site web : une plateforme d\'apprentissage en ligne enseignant l’informatique !\r\n\r\nCommencez dès maintenant à augmenter votre productivité en tant que développeur front-end.\r\n\r\n', 'À la fin de ce cours, vous serez capable de :\r\n\r\nidentifier les avantages de Bootstrap ;\r\n\r\ncréer des mises en page responsives ;\r\n\r\nutiliser les composants d\'interface utilisateur de Bootstrap pour afficher le contenu ;\r\n\r\najouter de l\'interactivité à un site web ;\r\n\r\ncréer des fonctionnalités et des thèmes personnalisés à l\'aide de Bootstrap.\r\n\r\nPrérequis\r\n\r\nPour tirer le meilleur parti de ce cours, vous devez déjà posséder des connaissances pratiques de HTML et de CSS. Vous pouvez acquérir ces compétences en suivant les cours suivants :\r\n\r\nApprenez à créer votre site web avec HTML 5 et CSS3.\r\n\r\nDans la partie 5 de ce cours, vous utiliserez Sass et JavaScript. Si vous devez compléter votre expérience, nous recommandons les cours suivants :\r\n\r\nSimplifiez-vous le CSS avec Sass.\r\n\r\nApprenez à programmer avec JavaScript.\r\n\r\nOutils nécessaires :\r\n\r\nun éditeur de code ;\r\n\r\nBootstrap', 'https://youtu.be/gm2RCfjXS3s', 'code.png', 'https://open.spotify.com/show/1pw2JoLvvMvLbS1jgUStIO?si=lm9X_bPiSJmU3olX2Y9TNg&dl_branch=1'),
(3, 'Développez des applications Web avec Angular\r\n', 'La plateforme Angular', 'Objectifs du cours', 'Lien vers le Podcast', 'angular_img.png', 'Angular est une plateforme de développement qui permet de créer des applications web dynamiques et immersives.  Dans ce cours, vous apprendrez rapidement à créer les composantes de base d\'une application Angular, avant d\'enrichir vos applications en approfondissant vos connaissances de ce framework.  Vous apprendrez également à faire communiquer votre application avec un backend afin de créer une application web complète.\r\n\r\n', 'Créer des components Angular\r\n\r\nManipuler un template avec le databinding, les directives et les pipes\r\n\r\nFaire communiquer les components avec les services et les Observables\r\n\r\nCréer des Single Page Applications avec le routing\r\n\r\nCommuniquer avec les utilisateurs avec les formulaires\r\n\r\nFaire communiquer une application avec un backend\r\n\r\nPrérequis :\r\n\r\nDes connaissances solides en HTML\r\n\r\nDes bases en TypeScript ou une bonne connaissance du JavaScript\r\n\r\nDes bases en CSS/SCSS\r\n\r\nOutils nécessaires :\r\n\r\nun éditeur de code ;\r\n\r\nNode.js ;\r\n\r\nNPM ;\r\n\r\nAngular CLI.', 'https://youtu.be/IWXzyV4L6BU', 'code.png', 'https://open.spotify.com/episode/3EDYjOiIxscPXdScRQybc5?si=epFZqC2IR6ySkB44QB5NJA&dl_branch=1'),
(5, 'Développez une application mobile React Native', 'Le Framework ReactNative', 'Alors, tenté par l\'aventure ? ', 'Lien vers le Podcast', 'react_js_img.png', 'Bienvenue dans ce cours qui porte sur le framework React Native ! Il s\'agit d\'un framework créé par Facebook à la suite d\'un Hackaton en 2015. React Native est basé sur React, une librairie Javascript développée deux ans auparavant par un ingénieur Facebook (Jordan Walke). Vous découvrirez pourquoi Facebook, Instagram, Skype, Discord et bien d\'autres ont fait le choix de ce framework pour leurs applications mobiles.\r\n\r\nVous apprendrez comment utiliser le framework React Native et ses composants en créant une application mobile pour iOS et Android pour gérer ses films. Quoi de mieux qu\'une petite démonstration ?\r\n\r\n', 'À la fin de ce cours, vous serez capable de :\r\n\r\nDécrire les avantages de React Native et le fonctionnement d’une Create React Native App\r\n\r\nExpliquer les notions de base de React Native\r\n\r\nExpliquer comment les vues sont gérées en React Native\r\n\r\nLister les possibilités d’optimisation d’une application React Native\r\n\r\nDévelopper une application mobile React Native fonctionnelle\r\n\r\nGérer une donnée dans le state global avec Redux\r\n\r\nUtiliser les props, le state et les styles avec React\r\n\r\nPrérequis : \r\n\r\nPour pouvoir suivre ce cours, vous devez connaître les bases de la Programmation Orientée Objet (POO) et de Javascript : créer une fonction, une variable, importer un fichier ou encore manipuler un objet. Si vous ne vous sentez pas à l\'aise avec ces concepts, vous pouvez suivre ce cours Javascript : Dynamisez vos sites web !\r\n\r\nVous n\'avez pas besoin de connaître React dans ce cours, nous reprendrons tout le fonctionnement de ce framework ensemble. \r\n\r\nOutils nécessaires :\r\n\r\nNode.js. ;\r\n\r\nun éditeur de texte comme Atom ;\r\n\r\nExpo', 'https://youtu.be/no82oluCZag', 'code.png', 'https://open.spotify.com/embed/show/0HfSakJOFwFEa0ujCEK1pO'),
(6, 'Créez une application web avec Vue.js', 'Le Framework VueJS', 'Objectifs', 'Lien vers le PodCast', 'vuejs_img.png', 'Les frameworks sont incontournables dans le développement frontend. La maîtrise de l\'un d\'eux représente donc un véritable atout pour votre carrière en développement frontend.\r\n\r\nIl existe de nombreux frameworks. Vue.js est l\'un des plus populaires pour construire des applications web progressives.\r\n\r\nNous commencerons ce cours interactif en utilisant Vue pour créer une application web sans outil de build complexe. Nous utiliserons ensuite les outils en ligne de commande (CLI) pour vous permettre de coder votre application comme si vous étiez en entreprise. Puis, nous architecturerons notre application en composants modulaires pour qu\'elle soit facile à maintenir. Enfin, vous apprendrez à gérer vos données de manière réactive avec Vuex et sa gestion du state de manière globale.', 'À la fin de ce cours, vous serez capable de :\r\n\r\nconstruire une application Vue.js ;\r\n\r\naugmenter les capacités d\'une application avec Vue CLI ;\r\n\r\ncréer des composants réutilisables dans Vue.js ;\r\n\r\ngérer les données d\'une application.\r\n\r\nPrérequis\r\n\r\nPour réussir à suivre ce cours, vous devez avoir une certaine connaissance de HTML, CSS et JavaScript (ES2015+), npm, les commandes de base du terminal, et Git. Vous pouvez acquérir ces connaissances en suivant le cours Passez au Full Stack avec Node.js, Express et MongoDB.\r\n\r\nOutil nécessaire : un éditeur de code ', 'https://youtu.be/D3oivlcoEvw', 'code.png', 'https://open.spotify.com/embed/show/2LxL5uArd430026TIs591o'),
(7, 'Apprenez à créer votre site web avec HTML5 et CSS3', 'Vous souhaitez créer vos propres sites web ?', 'Objectifs à atteindre', 'Lien vers le PodCast', 'html_css_img.png', 'Vous êtes au bon endroit ! Dans ce cours, vous apprendrez comment utiliser HTML5 et CSS3, les deux langages de programmation à la base de tous les sites web.\r\n\r\nVous pensez peut-être que vous n\'êtes pas fait pour apprendre un langage informatique, mais ne vous inquiétez pas : HTML et CSS sont des langages simples, que nous allons découvrir pas à pas, au cours de nombreux exercices. Vous serez bientôt capable d\'ajouter du texte à votre site, de construire un menu de navigation, d\'insérer des images... et bien plus encore !\r\n\r\nAlors, prêt à réaliser un site web de A à Z ?', 'À la fin de ce cours, vous serez capable de :\r\n\r\nutiliser du code HTML ;\r\n\r\nstructurer une page web en HTML ;\r\n\r\nutiliser du code CSS ;\r\n\r\nmettre en forme une page web en CSS ;\r\n\r\norganiser les éléments d’une page web grâce au CSS ;\r\n\r\nmodifier l\'agencement d\'une page HTML avec CSS ;\r\n\r\nintégrer des formules dans une page web ;\r\n\r\nadapter une page pour les petites résolutions en CSS.\r\n\r\nPrérequis: aucun \r\n\r\nOutil nécessaire :\r\n\r\nUn éditeur de texte comme Sublime text ou Brackets', 'https://youtu.be/8FqZZrbnwkM', 'code.png', 'https://open.spotify.com/embed/episode/1ezdL2ivAGLwSE6Xbssxqt'),
(8, 'Apprenez à programmer avec JavaScript', 'Le langage Javascript ', 'Objectifs à atteindre', 'Lien vers le Podcast', 'javascript_img.png', 'Pour créer des programmes d\'ordinateur ou bâtir l\'application de vos rêves, vous devez savoir comment coder dans un langage de programmation. Les applications s\'appuient sur des données et une logique pour accomplir leur magie, et cela exige qu\'un programmeur – vous – indique à l\'ordinateur ce qu\'il faut faire et comment. Mais comment écrire des applications, au fait ? Par où commencer ?\r\n\r\nCe cours est conçu pour vous enseigner les bases du langage de programmation JavaScript et pour vous apporter beaucoup de pratique au passage ! Nous nous intéresserons à :\r\n\r\ncomment structurer et regrouper des informations dans votre application avec des types de données ;\r\n\r\ncomment utiliser la logique de programmation pour que votre application fasse ce que vous en attendez ;\r\n\r\ncomment gérer les erreurs et permettre à votre application de communiquer ;\r\n\r\ncomment écrire un code lisible, de façon à pouvoir plus facilement modifier, maintenir et partager vos applis.\r\n\r\nVous appliquerez toutes ces connaissances pour bâtir des fonctionnalités réelles d\'une appli JavaScript sur l\'ensemble de ce cours. Prêt à découvrir toutes les choses passionnantes que vous pouvez faire avec du code JavaScript ?  Rejoignez-nous dans le premier chapitre !', 'Utiliser les données et les types de données dans JavaScript.\r\n\r\nGérer la logique d\'un programme en JavaScript (conditions, boucles et erreurs).\r\n\r\nÉcrire du code propre et facile à maintenir à l\'aide de méthodes en JavaScript.\r\n\r\nPrérequis :\r\n\r\nConnaissances générales de la terminologie de la programmation orientée objet (classes, objets, fonctions, méthodes, etc.), que vous pourrez acquérir dans le cours Découvrez le fonctionnement des algorithmes.\r\n\r\nOutil nécessaire :\r\n\r\nUn éditeur de code, ou vous pouvez utiliser JSBin en ligne.', 'https://youtu.be/9OJLxDxyNg4', 'code.png', 'https://open.spotify.com/embed/show/6xpiit8aJmwDHk1rKdxmri');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_lastname` varchar(100) NOT NULL,
  `user_firstname` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '1',
  `user_fontfamily` varchar(100) DEFAULT NULL,
  `user_fontsize` int(3) DEFAULT NULL,
  `user_fontcolor` varchar(7) DEFAULT NULL,
  `user_eltcolor_1` varchar(7) DEFAULT NULL,
  `user_eltcolor_2` varchar(7) DEFAULT NULL,
  `user_eltcolor_3` varchar(7) DEFAULT NULL,
  `user_bgcolor` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_lastname`, `user_firstname`, `user_email`, `user_password`, `user_role`, `user_fontfamily`, `user_fontsize`, `user_fontcolor`, `user_eltcolor_1`, `user_eltcolor_2`, `user_eltcolor_3`, `user_bgcolor`) VALUES
(5, 'TEST', 'test', 'test@test.com', '$2y$10$7wM3ESwbKryO570D0/NSju3mttXo5yS/47Om4gZ0jVcim6I2DIk6i', 1, '', 0, '', '', '', '', ''),
(6, '', '', 'user@user.com', '$2y$10$.5m4uWqdUn5nUh8kUnGy7esiRUX4K.b4nh3.7JJ211kT8f4H/.xna', 1, '', 0, '', '', '', '', ''),
(8, '', '', 'aaaa@aaaa.com', '$2y$10$cNT2Z07V/swhoCquvee.ze7mg6.tx/rlHu3FK7swQWqM2dASOMNH2', 1, '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users_courses`
--

DROP TABLE IF EXISTS `users_courses`;
CREATE TABLE IF NOT EXISTS `users_courses` (
  `user_course_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`user_course_id`),
  KEY `constraint_user_id` (`user_id`) USING BTREE,
  KEY `constraint_course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users_courses`
--
ALTER TABLE `users_courses`
  ADD CONSTRAINT `constraint_course_id` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `constraint_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
