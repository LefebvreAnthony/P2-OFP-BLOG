-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 21 jan. 2022 à 10:41
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog_dessert`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre_article` varchar(255) NOT NULL,
  `img_article` varchar(255) NOT NULL,
  `description_article` text NOT NULL,
  `ingredients_article` text NOT NULL,
  `preparation_article` mediumtext NOT NULL,
  `auteur_article` varchar(255) NOT NULL,
  `date_publication_article` date NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre_article`, `img_article`, `description_article`, `ingredients_article`, `preparation_article`, `auteur_article`, `date_publication_article`) VALUES
(14, 'Cookies araignées pour Halloween', 'cookies-araignee.jpg', 'Et voilà une nouvelle recette très gourmande qui fait son entrée dans le dossier de « recettes effrayantes » pour Halloween. Même si finalement, ces petites araignées sont bien plus mignonnes qu’effrayantes ! Cette recette est proposée par l’entreprise « Max de génie » qui fabrique des préparations à pâtisseries bio, saines, IG bas (bien moins sucrées que la moyenne) et faites en France.', '1 préparation pour cookies aux pépites de chocolat et cacahuète Max de Génie<br>1 œuf<br>100 g de beurre ou 90 ml d’huile au goût neutre<br>Un paquet de boules chocolatées<br>30 g de chocolat blanc<br>40 g de chocolat noir<br>Quelques pépites de chocolat noir', '1. Faites fondre le chocolat blanc au bain-marie. Avec une petite cuillère, versez des petites gouttes de chocolat sur une plaque recouverte de papier sulfurisé. Tapotez la plaque sur le plan de travail pour lisser les contours. Déposez une pépite de chocolat sur chaque goutte pour former les yeux.<br>2. Réservez la plaque au congélateur pendant la préparation des cookies.<br>3. Dans un saladier, versez le contenu du sachet de préparation pour cookies. Ajoutez un oeuf battu et le beurre mou. Mélangez la pâte entre vos doigts jusqu’à avoir un mélange homogène.<br>4. Préparez une plaque de cuisson et couvrez-la d’un papier sulfurisé. Prélevez des petites boules de pâte et déposez-les sur la plaque. Attention de ne pas trop étaler la pâte pour obtenir un cookie assez épais. Aplatissez légèrement le dessus.<br>5. Faites cuire les biscuits 10 min dans le four préchauffé à 180 °C.<br>6. Laissez-les complètement refroidir.<br>7. Déposez une boule chocolatée au centre de chaque cookie.<br>8. Faites fondre le chocolat noir au bain-marie. Déposez-le dans une petite poche à douille (ou dans un sac congélation dont vous couperez un tout petit peu la ointe pour faire comme une poche à douille). Dessinez des pattes (attention il y en a 8 !).<br>9. Sortez les petites gouttes de chocolat blanc du congélateur et déposez-les pour former les yeux de vos araignées. Vous pouvez éventuellement les coller avec un peu de chocolat noir fondu.', 'Admin', '2022-01-21'),
(13, 'Minis marbrés thé vert matcha et vanille', 'mini-cakes-marbres-the-vert.jpg', 'Pour couronner les après-midis créative spécial « décos rustiques de Noël », rien de mieux qu’un bon gâteau joufflu. Ces minis marbrés qui s’apparentent à des nuages voluptueux feront la pluie et le beau temps au goûter des enfants. Avec son pigment impérial, le thé vert matcha Aromandise habille nos biscuits classiques et endosse le rôle d’antioxydant.', '3 œufs<br>140 g de sucre<br>100 g de yaourt<br>75 g de beurre fondu<br>200 g de farine<br>1 c. à c. de levure chimique<br>1 c. à c. de thé vert matcha<br>1 c. à c. bombée de vanille en poudre', '1. Dans un récipient, mélangez les œufs avec le sucre à l’aide d’un fouet.<br>2. Versez le yaourt, puis le beurre fondu. Remuez vivement.<br>3. Incorporez petit à petit la farine alliée à la levure chimique jusqu’à obtenir une consistance lisse.<br>4. Ensuite, séparez votre pâte en deux. Dans la première moitié, ajoutez 1 c. à c. bombée de vanille en poudre, puis colorez l’autre avec 1 c. à c. de thé vert matcha.<br>5. À l’intérieur de petits moules à cake en silicone, alternez simultanément entre les deux mélanges pour obtenir le côté marbré. Remplissez seulement de moitié.<br>6. Enfournez l’ensemble pendant 30 min à 180 °C. Se déguste avec un thé ou un chocolat chaud.', 'Admin', '2022-01-20'),
(10, 'Galette des rois', 'galette_des_rois.jpg', 'Aujourd’hui les galettes sont reines ! Chaque début d’année, elles viennent couronner les étagères des boulangeries et règnent dans les fourneaux des grands chefs de renom.', '2 pâtes feuilletées<br>1 jaune d’oeuf<br>½ cuillère à soupe d’eau<br>Pour la garniture :<br>100 g de poudre d’amande<br>14 g de fécule de maïs<br>80 g de sucre glace<br>20 g de lait d’amandes<br>80 g de beurre mou<br>60 g d’oeuf', 'Préparation : 35 min<br> Cuisson : 35 min<br><br> 1. Pour réaliser la garniture, mélangez tous les ingrédients secs (sucre glace, poudre d’amandes, fécule de maïs) dans un récipient.<br> 2. Ecrasez le beurre mou avec une fourchette jusqu’à obtenir une consistance de pommade. Incorporez les poudres en remuant énergiquement.<br> 3. Ajoutez lentement l’œuf battu en omelette, puis terminez en versant le lait d’amande. Vous devez obtenir une texture épaisse et lisse. Laissez reposer 1h au frais. <br> 4. Coupez un rond d’environ 22 cm de diamètre dans chacune de vos pâtes feuilletées. Étalez votre garniture sur l’un et refermez avec l’autre.<br> 5. Joignez les deux bords des pâtes feuilletées et chiquetez avec le dos d’un couteau.<br> 6. Toujours à l’aide du dos du couteau, formez des dessins au-dessus de votre galette.<br> 7. Pour que la pâte dore, diluez un jaune d’oeuf avec de l’eau et badigeonnez avec un pinceau adapté.<br> 8. Déposez-la sur une plaque recouverte de papier cuisson et enfournez à 180 °C pendant ', 'Admin', '2022-01-19'),
(11, 'Panna cotta coco matcha', 'pannacotta_coco_matcha.jpg', 'Un bijou onctueux façonné avec du thé matcha, du lait de coco et surtout du yaourt bio Gaborit, un diamant brut issu d’un précieux savoir-faire familial.', '400 g de yaourt brassé nature Gaborit<br>30 cl lait de coco, en conserve<br>2 c. à s. de thé vert matcha (ou spiruline)<br>120 g de sucre<br>6 g de gélatine en feuille (3 à 4 feuilles)', '1. Mélangez le thé vert et le lait.<br>2. Placez le lait sur le feu et ajoutez le sucre.<br>3. Lorsque l’ensemble commence à bouillonner, ôtez du feu et disposez le jus obtenu avec la gélatine.<br>4. Une fois que le mélange a refroidi, versez le yaourt et remuez énergiquement jusqu’à obtenir une crème lisse. Si vous le souhaitez, vous pouvez aussi vous servir du blender mais il faut remuer sans discontinuer pour éviter la formation de bulles d’air).<br>5. Répartissez la préparation à l’intérieur de petits récipients festifs et placez au frais pendant 4 heures.', 'Admin', '2022-01-19'),
(12, 'Tartelettes au citron et muesli', 'tartelettes-muesli-citron.jpg', 'Le muesli, riche en acides gras et en vitamines, contient toute la source d’énergie nécessaire à un petit déjeuner sain et gourmand ! Il peut aussi être utilisé pour la création de desserts originaux, comme ces petites tartelettes au citron, garnies d’une délicieuse crème lemon curd fondante et acidulée.', '90 g de sucre blond<br>1 c. à s. de maïzena<br>2 gros œufs<br>8 cl de jus de citron<br>30 g d\'huile de coco<br>6 fraises<br>150 g de muesli 4 céréales et fruits Grillon d’Or<br>40 g d\'huile de coco<br>30 g de purée d\'amandes<br>30 g de miel', '1. Dans un saladier, mélangez le sucre blond avec la maïzena (ou fécule de maïs), puis ajoutez les œufs battus, le jus de citron et l’huile de coco fondue.<br>2. Versez ce mélange dans une casserole et faites-le cuire pendant 5 minutes sur feu moyen jusqu’à ce qu’il épaississe.<br>3. Transvidez la crème dans un contenant, recouvrez-la d’un film plastique et laissez-la refroidir.<br>4. Versez le muesli, l’huile de coco fondue, la purée d’amandes et le miel dans un mixeur afin d’obtenir un mélange compact.<br>5. Déposez le mélange dans des moules en silicone adaptés et enfournez les fonds dans un four préchauffé à 190 °C pendant 15 minutes.<br>6. Attendez que les tartelettes aient bien refroidi avant de les démoulez puis ajoutez la crème au citron et les fraises découpées en fines tranches. Vous pouvez déguster !', 'Admin', '2022-01-19');

-- --------------------------------------------------------

--
-- Structure de la table `article_categorie`
--

DROP TABLE IF EXISTS `article_categorie`;
CREATE TABLE IF NOT EXISTS `article_categorie` (
  `id_categorie_article` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  PRIMARY KEY (`id_categorie_article`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article_categorie`
--

INSERT INTO `article_categorie` (`id_categorie_article`, `id_categorie`, `id_article`) VALUES
(12, 4, 10),
(13, 2, 11),
(14, 5, 12),
(15, 2, 13),
(16, 1, 14);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(255) NOT NULL,
  `img_categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`, `img_categorie`) VALUES
(1, 'Biscuits', 'biscuits.png'),
(2, 'Cakes sucrés', 'cakes_sucre.png'),
(3, 'Flans', 'flans.png'),
(4, 'Gâteaux', 'gateaux.png'),
(5, 'Tartes sucrées', 'tartes_sucree.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
