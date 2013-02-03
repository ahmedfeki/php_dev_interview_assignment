-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Dim 03 Février 2013 à 00:43
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `assignment`
--

-- --------------------------------------------------------

--
-- Structure de la table `favorite`
--

CREATE TABLE IF NOT EXISTS `favorite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `thumb` mediumtext NOT NULL,
  `url` mediumtext NOT NULL,
  `des` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Contenu de la table `favorite`
--

INSERT INTO `favorite` (`id`, `user_id`, `thumb`, `url`, `des`) VALUES
(4, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcTs1biTstb7UCayODwoYFpn-0lkEPRNwT9qIz8Qt-FkXkI2OKVUP_jgF7c', 'http://learningfromdogs.files.wordpress.com/2010/09/cats-in-sink.jpg', 'Nice Cat'),
(5, 1, 'http://t3.gstatic.com/images?q=tbn:ANd9GcS7fnVzBsW7RF9PxhT9XmEADlFMmk6b0oF9_kEIRki5PRnoV5pEB8Hxagg', 'http://images5.fanpop.com/image/photos/28300000/Nap-Time-Wallpaper-cats-28363010-1280-1024.jpg', NULL),
(6, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcTFdPztLeDlcAvVhPoKtBsAb_JdWK0TtjdalBH_Cb-hegaFGNK5SpyIAhYb', 'http://images4.fanpop.com/image/photos/22000000/-_-cats-cats-22065937-1280-1024.jpg', NULL),
(7, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcTFdPztLeDlcAvVhPoKtBsAb_JdWK0TtjdalBH_Cb-hegaFGNK5SpyIAhYb', 'http://images4.fanpop.com/image/photos/22000000/-_-cats-cats-22065937-1280-1024.jpg', 'mlk\r\n'),
(8, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcR8d5hxqPEYgmQkCkd7rUEZq1x8pwXnwuq30lItIDXPZmGR4KuWnf1f-e8', 'http://2.bp.blogspot.com/_Ber2QzIQMms/SwP1nyJ9CTI/AAAAAAAABPA/H2-QTl5DZ4c/s1600/cats.jpg', 'l;lklk'),
(9, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcQ_bs4jTojY0Yv7GdDMWZjyqwlpgLS2GcxzNnFnvlQ3XqkwgLgUuSFNpZQ', 'http://www.houstonpettalk.com/wp-content/uploads/2011/08/Angry-Cat.jpg', 'HELLO CATTY'),
(10, 1, 'http://t1.gstatic.com/images?q=tbn:ANd9GcQ0AM6nmRGjGZ92VJsABuwjLh6SjRl1rhf8KgUNa3osDV3hVu9CTBT2HIOi', 'http://www.allerca.com/images/cats/ALHP3988776.jpg', NULL),
(11, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcTfjGZ2r2q6yodOszebEhV4UPHQxw1pHlVQyZqIvJFIEISlINZtFgWSdE7l', 'http://images4.fanpop.com/image/photos/17200000/I-love-cats-babies-pets-and-animals-17236053-1024-773.jpg', NULL),
(12, 1, 'http://t0.gstatic.com/images?q=tbn:ANd9GcRtW2Kj7LvgKt38Ty_BcnHXwQ5pvdDwcBMJqbPyncX6PZNfy7EPf6xxvfa3', 'http://media.npr.org/assets/img/2013/01/29/cat-bird_wide-85ce4b8383b9440d3ff03413cdd913513e9737bf-s6-c10.jpg', '%Ã¹llm dmlk lmdk lmdklm kd'),
(13, 1, 'http://t0.gstatic.com/images?q=tbn:ANd9GcSMDXJFFQO9LdiJbDEAhxlP6LyIaw82XCNqntpttdGFijF5JKu1E7zr4g', 'http://www.i-love-cats.com/software/Adorable-Cats-Screensaver.jpg', 'lklk lklk lkl lklk llk lllkkl lklk ll'),
(14, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcR8d5hxqPEYgmQkCkd7rUEZq1x8pwXnwuq30lItIDXPZmGR4KuWnf1f-e8', 'http://2.bp.blogspot.com/_Ber2QzIQMms/SwP1nyJ9CTI/AAAAAAAABPA/H2-QTl5DZ4c/s1600/cats.jpg', NULL),
(15, 1, 'http://t0.gstatic.com/images?q=tbn:ANd9GcQ7kwYWvhFJx3uNIhl553U7CDU4A5uhe19lhttv1QBsVkVheFRr7TYc8Qlb', 'http://stuffpoint.com/cats/image/50950-cats-cute-cats-wallpaper.jpg', NULL),
(16, 1, 'http://t1.gstatic.com/images?q=tbn:ANd9GcRBJUzso89wpeA26sh9Yf-1eKNoQMY96MdfaJxEy782oImYVp0rH1yKmU0', 'http://www.healthypawspetinsurance.com/blog/wp-content/uploads/Cat-Arthritis.jpg', NULL),
(17, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcRuw1b86meyqmNmEiDI0C_SiakTUrZNqIrh_lazf6t6XVIyk0K_eHwI2_s', 'http://www.tuscanypress.com/wp-content/uploads/2012/09/Cats_cats_cats-.jpg', NULL),
(18, 1, 'http://t0.gstatic.com/images?q=tbn:ANd9GcRbNXYsNyChLhxrnc2aGKQSIwOrKsAXOwPAnBz4pUbGhvbioZ6yxepbZoo', 'http://images2.fanpop.com/image/photos/9400000/Funny-Cats-cats-9474038-1600-1200.jpg', 'mmlml'),
(19, 1, 'http://t3.gstatic.com/images?q=tbn:ANd9GcS4QuY3SUEpHao9k_xpviR8DqQ9gncv-0iF5q0rFAD9cz7Q7msla3dK1hI', 'http://www.lornacats.com/wp-content/uploads/2012/10/white-cat.jpg', NULL),
(20, 1, 'http://t1.gstatic.com/images?q=tbn:ANd9GcQwwAq5h7xNKOLg-2AJZOs4oq5PvTHjssXnHG8jowEsThQafNkTZSNwSgQ', 'http://pages.swcp.com/~jamii/OtherCats/coco.jpg', NULL),
(21, 1, 'http://t0.gstatic.com/images?q=tbn:ANd9GcRtW2Kj7LvgKt38Ty_BcnHXwQ5pvdDwcBMJqbPyncX6PZNfy7EPf6xxvfa3', 'http://media.npr.org/assets/img/2013/01/29/cat-bird_wide-85ce4b8383b9440d3ff03413cdd913513e9737bf-s6-c10.jpg', NULL),
(22, 1, 'http://t3.gstatic.com/images?q=tbn:ANd9GcS7fnVzBsW7RF9PxhT9XmEADlFMmk6b0oF9_kEIRki5PRnoV5pEB8Hxagg', 'http://images5.fanpop.com/image/photos/28300000/Nap-Time-Wallpaper-cats-28363010-1280-1024.jpg', NULL),
(23, 1, 'http://t0.gstatic.com/images?q=tbn:ANd9GcQIk5tw8zGePkkwbY6oALPof8vtYe1a3RYY6Rr0v1nnFmqTprTWCuHK6wT0', 'http://richardwiseman.files.wordpress.com/2012/05/cats-hugging.jpg', NULL),
(24, 1, 'http://t0.gstatic.com/images?q=tbn:ANd9GcRbNXYsNyChLhxrnc2aGKQSIwOrKsAXOwPAnBz4pUbGhvbioZ6yxepbZoo', 'http://images2.fanpop.com/image/photos/9400000/Funny-Cats-cats-9474038-1600-1200.jpg', NULL),
(25, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcRuw1b86meyqmNmEiDI0C_SiakTUrZNqIrh_lazf6t6XVIyk0K_eHwI2_s', 'http://www.tuscanypress.com/wp-content/uploads/2012/09/Cats_cats_cats-.jpg', NULL),
(26, 1, 'http://t3.gstatic.com/images?q=tbn:ANd9GcSTx_2bb3YdkoERjiLPA14rkkIeIM3k_FdzSy4Y6JCHLWjW5M1cgwRmdohv', 'http://images4.fanpop.com/image/photos/14700000/Beautifull-cat-cats-14749874-1600-1200.jpg', '\n                                                    Beautifull cat - Cats Wallpaper (14749874) - Fanpop fanclubs                                                '),
(27, 1, 'http://t0.gstatic.com/images?q=tbn:ANd9GcT3KaQrb7Dh8emX9-OwqRfREyXTGCJssgdmsSC77o1fDvEoYY1BV37ayyyC', 'http://www.andrew.cmu.edu/user/cfperron/cats/images/cat7.jpg', '\n                                                    Wonderous Cats | Home'),
(28, 1, 'http://t1.gstatic.com/images?q=tbn:ANd9GcQLNcSlo8jbTcgRCHKjLsjpfaOYGC30rQdy7H39OR6YI65euqrJ8-pyn0F2', 'http://static.tumblr.com/6t3upxl/Aawm08w0l/khout-kitten-458882.jpeg', '\n                                                    meow | submitted by: cats-'),
(29, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcRW5QBJS6_daPtGqfVNuJS32lixsccBZq_h9IHwJHpVFgge6Jj04jZL2jE', 'http://fayettevillearanimaldoctor.com/wp-content/uploads/2012/09/vet_cat3.jpg', '\n                                                    Fayetteville Veterinarian: Common Diseases in Cats | Fayetteville ...'),
(30, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcSRQN3bdQ7HRqGrYcBu-7bnE9EDK1lDegdXbCr8z58GKVxUQIzoHH43qQU', 'http://wallpapercenter.info/wp-content/uploads/2012/09/twin-cat.jpg', '\n                                                    Cats | The best wallpapers'),
(31, 1, 'http://t0.gstatic.com/images?q=tbn:ANd9GcQH9hitv0SlkElnmT0m9rQTkY0199Fx_DQUbrO3_c3nGeFZPFI2KHMDoCZb', 'http://images2.fanpop.com/image/photos/9900000/Cat-Wallpaper-big-cats-9998497-1920-1440.jpg', '\n                                                    Cat Wallpaper - Big Cats Wallpaper (9998497) - Fanpop fanclubs'),
(32, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcR8d5hxqPEYgmQkCkd7rUEZq1x8pwXnwuq30lItIDXPZmGR4KuWnf1f-e8', 'http://2.bp.blogspot.com/_Ber2QzIQMms/SwP1nyJ9CTI/AAAAAAAABPA/H2-QTl5DZ4c/s1600/cats.jpg', '\n                                                    Your Pet Guide: Cats Physiology'),
(33, 1, 'http://t0.gstatic.com/images?q=tbn:ANd9GcRZ410cMlGBE-NfXp0_3f5hmSHbsxEDruD990Z8rd1gk3lo1_g-W1iqu5U', 'http://images2.fanpop.com/image/photos/9800000/Damn-cute-cats-cute-kittens-9807010-1600-1200.jpg', '\n                                                    Damn cute cats!!!!!!!!!!!!! - Cute Kittens Photo (9807010 ...'),
(34, 1, 'http://t2.gstatic.com/images?q=tbn:ANd9GcRuw1b86meyqmNmEiDI0C_SiakTUrZNqIrh_lazf6t6XVIyk0K_eHwI2_s', 'http://www.tuscanypress.com/wp-content/uploads/2012/09/Cats_cats_cats-.jpg', '\n                                                    House Full of Cats â€“ Short Story Submission | Tuscany Press'),
(35, 1, 'http://t3.gstatic.com/images?q=tbn:ANd9GcQVZ0nfrR_LGoRzCibvwC6L_4J-NlyLMfUAplgxXK3e9tBU7GvwTzzaYa0', 'http://sun-surfer.com/photos/2012/04/Hammock-beach.jpg', '\n                                                    Beach - Sunsurfer | Sunsurfer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
